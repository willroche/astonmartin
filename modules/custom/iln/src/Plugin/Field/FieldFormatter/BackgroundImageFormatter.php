<?php

namespace Drupal\iln\Plugin\Field\FieldFormatter;

use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatterBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Url;
use Drupal\Core\Utility\LinkGeneratorInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Cache\Cache;

/**
 * Plugin implementation of the 'background_image_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "background_image_formatter",
 *   label = @Translation("Background image formatter"),
 *   field_types = {
 *     "image"
 *   }
 * )
 */
class BackgroundImageFormatter extends ImageFormatterBase implements ContainerFactoryPluginInterface {

/**
 * The current user.
 *
 * @var \Drupal\Core\Session\AccountInterface
 */
 protected $currentUser;

/**
 * The link generator.
 *
 * @var \Drupal\Core\Utility\LinkGeneratorInterface
 */
 protected $linkGenerator;

/**
 * The image style entity storage.
 *
 * @var \Drupal\Core\Entity\EntityStorageInterface
 */
 protected $imageStyleStorage;

/**
 * Constructs an ImageFormatter object.
 *
 * @param string $plugin_id
 *   The plugin_id for the formatter.
 * @param mixed $plugin_definition
 *   The plugin implementation definition.
 * @param \Drupal\Core\Field\FieldDefinitionInterface $field_definition
 *   The definition of the field to which the formatter is associated.
 * @param array $settings
 *   The formatter settings.
 * @param string $label
 *   The formatter label display setting.
 * @param string $view_mode
 *   The view mode.
 * @param array $third_party_settings
 *   Any third party settings settings.
 * @param \Drupal\Core\Session\AccountInterface $current_user
 *   The current user.
 * @param \Drupal\Core\Utility\LinkGeneratorInterface $link_generator
 *   The link generator service.
 * @param \Drupal\Core\Entity\EntityStorageInterface $image_style_storage
 *   The entity storage for the image.
 */
 public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings, AccountInterface $current_user, LinkGeneratorInterface $link_generator, EntityStorageInterface $image_style_storage) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);
    $this->currentUser = $current_user;
    $this->linkGenerator = $link_generator;
    $this->imageStyleStorage = $image_style_storage;
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
     $container->get('current_user'),
     $container->get('link_generator'),
     $container->get('entity.manager')->getStorage('image_style')
   );
 }

/**
 * {@inheritdoc}
 */
 public static function defaultSettings() {
   return array(
     'image_style' => '',
     'image_link' => '',
   ) + parent::defaultSettings();
 }

/**
 * {@inheritdoc}
 */
 public function settingsForm(array $form, FormStateInterface $form_state) {
   $image_styles = image_style_options(FALSE);
   $element['image_style'] = array(
     '#title' => t('Image style'),
     '#type' => 'select',
     '#default_value' => $this->getSetting('image_style'),
     '#empty_option' => t('None (original image)'),
     '#options' => $image_styles,
     '#description' => array(
       '#markup' => $this->linkGenerator->generate($this->t('Configure Image Styles'), new Url('entity.image_style.collection')),
       '#access' => $this->currentUser->hasPermission('administer image styles'),
     ),
   );

   return $element;
 }

/**
 * {@inheritdoc}
 */
 public function settingsSummary() {
   $summary = array();
   $image_styles = image_style_options(FALSE);

   // Unset possible 'No defined styles' option.
   unset($image_styles['']);

   // Styles could be lost because of enabled/disabled modules that defines
   // their styles in code.
   $image_style_setting = $this->getSetting('image_style');
   if (isset($image_styles[$image_style_setting])) {
     $summary[] = t('Image style: @style', array('@style' => $image_styles[$image_style_setting]));
   }
   else {
     $summary[] = t('Original image');
   }

   return $summary;
 }

/**
 * {@inheritdoc}
 */
 public function viewElements(FieldItemListInterface $items, $langcode) {
   $elements = array();
   $files = $this->getEntitiesToView($items, $langcode);

   // Early opt-out if the field is empty.
   if (empty($files)) {
     return $elements;
   }

   $url = NULL;
   $image_link_setting = $this->getSetting('image_link');
   // Check if the formatter involves a link.
   if ($image_link_setting == 'content') {
     $entity = $items->getEntity();
     if (!$entity->isNew()) {
       $url = $entity->urlInfo();
     }
   }
   elseif ($image_link_setting == 'file') {
     $link_file = TRUE;
   }

   $image_style_setting = $this->getSetting('image_style');

   // Collect cache tags to be added for each item in the field.
   $cache_tags = array();
   if (!empty($image_style_setting)) {
     $image_style = $this->imageStyleStorage->load($image_style_setting);
     $cache_tags = $image_style->getCacheTags();
   }

   foreach ($files as $delta => $file) {
      $image_uri = $file->getFileUri();
      if ($image_style) {
        $absolute_path = $this->imageStyleStorage->load($image_style->getName())->buildUrl($image_uri);
      }
      else {
        // Get absolute path for original image.
        $absolute_path = Url::fromUri(file_create_url($image_uri))->getUri();
      }
      $elements[$delta] = array(
          // '#markup' => '<div class="b-lazy" data-src="' . $absolute_path . '"></div>'
          '#markup' => $absolute_path
      );
    }

   return $elements;
 }

}
