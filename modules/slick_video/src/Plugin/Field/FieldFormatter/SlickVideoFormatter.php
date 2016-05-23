<?php

/**
 * @file
 * Contains \Drupal\slick_video\Plugin\Field\FieldFormatter\SlickVideoFormatter.
 */

namespace Drupal\slick_video\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\video_embed_field\ProviderManagerInterface;
use Drupal\slick\SlickDefault;
use Drupal\slick\SlickFormatterInterface;
use Drupal\slick\SlickManagerInterface;
use Drupal\slick\Plugin\Field\FieldFormatter\SlickFormatterTrait;
use Drupal\blazy\Dejavu\BlazyVideoBase;

/**
 * Plugin implementation of the slick video field formatter.
 *
 * @FieldFormatter(
 *   id = "slick_video",
 *   label = @Translation("Slick video"),
 *   field_types = {
 *     "video_embed_field"
 *   }
 * )
 */
class SlickVideoFormatter extends BlazyVideoBase {
  use SlickFormatterTrait;

  /**
   * Constructs a SlickMediaFormatter instance.
   */
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings, ProviderManagerInterface $provider_manager, SlickFormatterInterface $formatter, SlickManagerInterface $manager) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings, $provider_manager);
    $this->formatter = $formatter;
    $this->manager   = $manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('video_embed_field.provider_manager'),
      $container->get('slick.formatter'),
      $container->get('slick.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return SlickDefault::extendedSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    // Early opt-out if the field is empty.
    if ($items->isEmpty()) {
      return $element;
    }

    // Collects specific settings to this formatter.
    $settings = $this->getSettings();

    // Overrides slick_image to use blazy template.
    $settings['theme_hook_image'] = 'blazy';
    $build = ['settings' => $settings];

    $this->formatter->buildSettings($build, $items);

    // Build the elements.
    $this->buildElements($build, $items);

    return $this->manager()->build($build);
  }

  /**
   * Build the slick carousel elements.
   */
  public function buildElements(array &$build = [], $items) {
    $settings = &$build['settings'];
    $item_id  = $settings['item_id'];

    foreach ($items as $delta => $item) {
      $media_url = $item->value;

      $settings['delta'] = $delta;
      if (empty($media_url)) {
        continue;
      }

      /** @var \Drupal\video_embed_field\ProviderManagerInterface $provider */
      if ($provider = $this->providerManager->loadProviderFromInput($media_url)) {
        // Validation is managed by ProviderManagerInterface::renderThumbnail().
        $link_url = '';
        $uri = $provider->renderThumbnail($settings['image_style'], $link_url)['#uri'];

        if (empty($uri)) {
          continue;
        }

        $settings['image_url'] = empty($settings['image_style']) ? file_create_url($uri) : $uri;
        $settings['uri']       = $provider->getLocalThumbnailUri();

        $this->buildVideo($settings, $media_url);

        $element = ['item' => $item, 'settings' => $settings];

        // Image with responsive image, lazyLoad, and lightbox supports.
        $element[$item_id] = $this->formatter->getImage($element);
        $build['items'][$delta] = $element;

        if ($settings['nav']) {
          // Thumbnail usages: asNavFor pager, dot, arrows, photobox thumbnails.
          $element[$item_id] = empty($settings['thumbnail_style']) ? [] : $this->formatter->getThumbnail($element['settings']);

          $build['thumb']['items'][$delta] = $element;
        }
        unset($element);
      }
    }
  }

  /**
   * Defines the scope for the form elements.
   */
  public function getScopedFormElements() {
    $elements = parent::getScopedFormElements();
    $elements['breakpoints'] = SlickDefault::getConstantBreakpoints();
    return $elements;
  }

}
