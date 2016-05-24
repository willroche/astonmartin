<?php

/* modules/slick/templates/slick.html.twig */
class __TwigTemplate_3e2a1167f79aca08bc3309e291d2a7751d1d4a6bfb002a0bdb1f127b8f737565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 31, "spaceless" => 54, "if" => 56, "for" => 60);
        $filters = array("join" => 35, "clean_class" => 36, "clean_id" => 55, "without" => 55, "raw" => 67, "striptags" => 67);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'spaceless', 'if', 'for'),
                array('join', 'clean_class', 'clean_id', 'without', 'raw', 'striptags'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 31
        $context["classes"] = array(0 => "slick", 1 => ((twig_template_get_attributes($this,         // line 33
(isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) ? ("unslick") : ("")), 2 => ((twig_template_get_attributes($this,         // line 34
(isset($context["settings"]) ? $context["settings"] : null), "blazy", array())) ? ("blazy") : ("")), 3 => ((twig_template_get_attributes($this, twig_template_get_attributes($this,         // line 35
(isset($context["settings"]) ? $context["settings"] : null), "attributes", array()), "class", array())) ? (twig_join_filter(twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "attributes", array()), "class", array()), " ")) : ("")), 4 => ((twig_template_get_attributes($this,         // line 36
(isset($context["settings"]) ? $context["settings"] : null), "skin", array())) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "skin", array())))) : ("")), 5 => ((twig_in_filter("boxed", twig_template_get_attributes($this,         // line 37
(isset($context["settings"]) ? $context["settings"] : null), "skin", array()))) ? ("slick--skin--boxed") : ("")), 6 => ((twig_in_filter("split", twig_template_get_attributes($this,         // line 38
(isset($context["settings"]) ? $context["settings"] : null), "skin", array()))) ? ("slick--skin--split") : ("")), 7 => ((twig_template_get_attributes($this,         // line 39
(isset($context["settings"]) ? $context["settings"] : null), "optionset", array())) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "optionset", array())))) : ("")), 8 => ((twig_template_get_attributes($this,         // line 40
(isset($context["settings"]) ? $context["settings"] : null), "downArrow", array())) ? ("slick--has-arrow-down") : ("")), 9 => ((twig_template_get_attributes($this,         // line 41
(isset($context["settings"]) ? $context["settings"] : null), "asNavFor", array())) ? (("slick--" . \Drupal\Component\Utility\Html::getClass((isset($context["display"]) ? $context["display"] : null)))) : ("")), 10 => (((twig_template_get_attributes($this,         // line 42
(isset($context["settings"]) ? $context["settings"] : null), "slidesToShow", array()) > 1)) ? ("slick--multiple-view") : ("")), 11 => ((((        // line 43
(isset($context["display"]) ? $context["display"] : null) == "main") && twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "media_switch", array()))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "media_switch", array())))) : ("")), 12 => ((((        // line 44
(isset($context["display"]) ? $context["display"] : null) == "thumbnail") && twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "thumbnail_caption", array()))) ? ("slick--has-caption") : ("")));
        // line 48
        $context["arrow_classes"] = array(0 => "slick__arrow", 1 => ((twig_template_get_attributes($this,         // line 50
(isset($context["settings"]) ? $context["settings"] : null), "skin_arrows", array())) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "skin_arrows", array())))) : ("")));
        // line 53
        echo "
";
        // line 54
        ob_start();
        // line 55
        echo "<div id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId(twig_template_get_attributes($this, (isset($context["attributes"]) ? $context["attributes"] : null), "id", array())), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without(twig_template_get_attributes($this, (isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "id"), "html", null, true));
        echo ">
  ";
        // line 56
        if ( !twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) {
            // line 57
            echo "    <div id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId(twig_template_get_attributes($this, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "id", array())), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without(twig_template_get_attributes($this, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "slick__slider"), "method"), "id"), "html", null, true));
            echo ">
  ";
        }
        // line 59
        echo "
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["item"], "html", null, true));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
  ";
        // line 64
        if ( !twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) {
            // line 65
            echo "    </div>
    <nav";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "arrow", array()), "attributes", array()), "addClass", array(0 => (isset($context["arrow_classes"]) ? $context["arrow_classes"] : null)), "method"), "html", null, true));
            echo ">
      ";
            // line 67
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(strip_tags(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "prevArrow", array()), "<a><em><span><strong><button><div>")));
            echo "
      ";
            // line 68
            if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "downArrow", array(), "any", false, true), "attributes", array(), "any", true, true)) {
                // line 69
                echo "        <button";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "downArrow", array()), "attributes", array()), "addClass", array(0 => "slick-down"), "method"), "setAttribute", array(0 => "type", 1 => "button"), "method"), "setAttribute", array(0 => "data-target", 1 => twig_template_get_attributes($this,                 // line 71
(isset($context["settings"]) ? $context["settings"] : null), "downArrowTarget", array())), "method"), "setAttribute", array(0 => "data-offset", 1 => twig_template_get_attributes($this,                 // line 72
(isset($context["settings"]) ? $context["settings"] : null), "downArrowOffset", array())), "method"), "html", null, true));
                echo "></button>
      ";
            }
            // line 74
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(strip_tags(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "nextArrow", array()), "<a><em><span><strong><button><div>")));
            echo "
    </nav>
  ";
        }
        // line 77
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 77,  124 => 74,  119 => 72,  118 => 71,  116 => 69,  114 => 68,  110 => 67,  106 => 66,  103 => 65,  101 => 64,  98 => 63,  89 => 61,  85 => 60,  82 => 59,  74 => 57,  72 => 56,  65 => 55,  63 => 54,  60 => 53,  58 => 50,  57 => 48,  55 => 44,  54 => 43,  53 => 42,  52 => 41,  51 => 40,  50 => 39,  49 => 38,  48 => 37,  47 => 36,  46 => 35,  45 => 34,  44 => 33,  43 => 31,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the Slick carousel template.*/
/*  **/
/*  * This template holds 3 displays: main, thumbnail and overlay slicks in one.*/
/*  * Arrows are enforced, but toggled by JS accordingly. This allows responsive*/
/*  * object to enable and disable it as needed without losing context.*/
/*  **/
/*  * Available variables:*/
/*  * - items: The array of items containing main image/video/audio, optional*/
/*  *     image/video/audio overlay and captions, and optional thumbnail*/
/*  *     texts/images.*/
/*  * - settings: A cherry-picked settings that mostly defines the slide HTML or*/
/*  *     layout, and none of JS settings/options which are defined at data-slick.*/
/*  * - attributes: The array of attributes to hold the main container classes, id.*/
/*  * - content_attributes: The array of attributes to hold optional RTL, id and*/
/*  *     data-slick containing JSON object aka JS settings the Slick expects to*/
/*  *     override default options. We don't store these JS settings in the normal*/
/*  *     <head>, but inline within data-slick attribute instead.*/
/*  **/
/*  * Debug:*/
/*  * @see https://www.drupal.org/node/1906780*/
/*  * @see https://www.drupal.org/node/1903374*/
/*  * Use Kint: {{ kint(variable) }}*/
/*  * Dump all available variables and their contents: {{ dump() }}*/
/*  * Dump only the available variable keys: {{ dump(_context|keys) }}*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'slick',*/
/*     settings.unslick ? 'unslick',*/
/*     settings.blazy ? 'blazy',*/
/*     settings.attributes.class ? settings.attributes.class|join(' '),*/
/*     settings.skin ? 'slick--skin--' ~ settings.skin|clean_class,*/
/*     'boxed' in settings.skin ? 'slick--skin--boxed',*/
/*     'split' in settings.skin ? 'slick--skin--split',*/
/*     settings.optionset ? 'slick--optionset--' ~ settings.optionset|clean_class,*/
/*     settings.downArrow ? 'slick--has-arrow-down',*/
/*     settings.asNavFor ? 'slick--' ~ display|clean_class,*/
/*     settings.slidesToShow > 1 ? 'slick--multiple-view',*/
/*     display == 'main' and settings.media_switch ? 'slick--' ~ settings.media_switch|clean_class,*/
/*     display == 'thumbnail' and settings.thumbnail_caption ? 'slick--has-caption'*/
/*   ]*/
/* %}*/
/* {%*/
/*   set arrow_classes = [*/
/*     'slick__arrow',*/
/*     settings.skin_arrows ? 'slick__arrow--' ~ settings.skin_arrows|clean_class*/
/*   ]*/
/* %}*/
/* */
/* {% spaceless %}*/
/* <div id="{{ attributes.id|clean_id }}"{{ attributes.addClass(classes)|without('id') }}>*/
/*   {% if not settings.unslick %}*/
/*     <div id="{{ content_attributes.id|clean_id }}"{{ content_attributes.addClass('slick__slider')|without('id') }}>*/
/*   {% endif %}*/
/* */
/*     {% for item in items %}*/
/*       {{ item }}*/
/*     {% endfor %}*/
/* */
/*   {% if not settings.unslick %}*/
/*     </div>*/
/*     <nav{{ settings.arrow.attributes.addClass(arrow_classes) }}>*/
/*       {{ settings.prevArrow|striptags('<a><em><span><strong><button><div>')|raw }}*/
/*       {% if settings.downArrow.attributes is defined %}*/
/*         <button{{ settings.downArrow.attributes.addClass('slick-down')*/
/*           .setAttribute('type', 'button')*/
/*           .setAttribute('data-target', settings.downArrowTarget)*/
/*           .setAttribute('data-offset', settings.downArrowOffset) }}></button>*/
/*       {% endif %}*/
/*       {{ settings.nextArrow|striptags('<a><em><span><strong><button><div>')|raw }}*/
/*     </nav>*/
/*   {% endif %}*/
/* </div>*/
/* {% endspaceless %}*/
/* */
