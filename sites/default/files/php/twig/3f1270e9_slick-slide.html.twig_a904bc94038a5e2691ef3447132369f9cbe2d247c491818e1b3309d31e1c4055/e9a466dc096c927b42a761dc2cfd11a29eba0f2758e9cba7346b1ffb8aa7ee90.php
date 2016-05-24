<?php

/* modules/slick/templates/slick-slide.html.twig */
class __TwigTemplate_6d38a2e6c220c1d408449208d4b8590d396bbbb762d704d863ef8f2e55cdc8cf extends Twig_Template
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
        $tags = array("set" => 21, "if" => 35, "spaceless" => 42);
        $filters = array("clean_class" => 24);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'spaceless'),
                array('clean_class'),
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

        // line 21
        $context["classes"] = array(0 => "slick__slide", 1 => "slide", 2 => ("slide--" .         // line 22
(isset($context["delta"]) ? $context["delta"] : null)), 3 => ((twig_test_empty(twig_template_get_attributes($this,         // line 23
(isset($context["item"]) ? $context["item"] : null), "slide", array()))) ? ("slide--text") : ("")), 4 => ((twig_template_get_attributes($this,         // line 24
(isset($context["settings"]) ? $context["settings"] : null), "layout", array())) ? (("slide--caption--" . \Drupal\Component\Utility\Html::getClass(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "layout", array())))) : ("")), 5 => ((twig_template_get_attributes($this,         // line 25
(isset($context["settings"]) ? $context["settings"] : null), "class", array())) ? (twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "class", array())) : ("")));
        // line 29
        $context["content_classes"] = array(0 => ((twig_template_get_attributes($this,         // line 30
(isset($context["settings"]) ? $context["settings"] : null), "detroy", array())) ? ("slide") : ("")), 1 => (( !twig_template_get_attributes($this,         // line 31
(isset($context["settings"]) ? $context["settings"] : null), "detroy", array())) ? ("slide__content") : ("")));
        // line 34
        ob_start();
        // line 35
        echo "  ";
        if ((twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "split", array()) &&  !twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "unslick", array()))) {
            // line 36
            echo "    <div class=\"slide__media\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "slide", array()), "html", null, true));
            echo "</div>
  ";
        } else {
            // line 38
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "slide", array()), "html", null, true));
            echo "
  ";
        }
        $context["slide"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
";
        // line 42
        ob_start();
        // line 43
        if (twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "wrapper", array())) {
            // line 44
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
  ";
            // line 45
            if (twig_test_empty(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "grid", array()))) {
                echo "<div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
                echo ">";
            }
        }
        // line 47
        echo "
  ";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slide"]) ? $context["slide"] : null), "html", null, true));
        echo "

  ";
        // line 50
        if (twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array())) {
            // line 51
            echo "    ";
            if (twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "fullwidth", array())) {
                echo "<div class=\"slide__constrained\">";
            }
            // line 52
            echo "
      <div class=\"slide__caption\">
        ";
            // line 54
            if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "overlay", array())) {
                // line 55
                echo "          <div class=\"slide__overlay\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "overlay", array()), "html", null, true));
                echo "</div>
          ";
                // line 56
                if (twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "data", array())) {
                    echo "<div class=\"slide__data\">";
                }
                // line 57
                echo "        ";
            }
            // line 58
            echo "
        ";
            // line 59
            if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "title", array())) {
                // line 60
                echo "          <h2 class=\"slide__title\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "title", array()), "html", null, true));
                echo "</h2>
        ";
            }
            // line 62
            echo "
        ";
            // line 63
            if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "alt", array())) {
                // line 64
                echo "          <p class=\"slide__description\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "alt", array()), "html", null, true));
                echo "</p>
        ";
            }
            // line 66
            echo "
        ";
            // line 67
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "data", array()), "html", null, true));
            echo "

        ";
            // line 69
            if (twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "link", array())) {
                // line 70
                echo "          <div class=\"slide__link\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "link", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 72
            echo "
        ";
            // line 73
            if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["item"]) ? $context["item"] : null), "caption", array()), "overlay", array()) && twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "data", array()))) {
                echo "</div>";
            }
            // line 74
            echo "      </div>

    ";
            // line 76
            if (twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "fullwidth", array())) {
                echo "</div>";
            }
            // line 77
            echo "  ";
        }
        // line 78
        echo "
";
        // line 79
        if (twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "wrapper", array())) {
            // line 80
            echo "  ";
            if (twig_test_empty(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "grid", array()))) {
                echo "</div>";
            }
            // line 81
            echo "  </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 81,  184 => 80,  182 => 79,  179 => 78,  176 => 77,  172 => 76,  168 => 74,  164 => 73,  161 => 72,  155 => 70,  153 => 69,  148 => 67,  145 => 66,  139 => 64,  137 => 63,  134 => 62,  128 => 60,  126 => 59,  123 => 58,  120 => 57,  116 => 56,  111 => 55,  109 => 54,  105 => 52,  100 => 51,  98 => 50,  93 => 48,  90 => 47,  83 => 45,  78 => 44,  76 => 43,  74 => 42,  71 => 41,  64 => 38,  58 => 36,  55 => 35,  53 => 34,  51 => 31,  50 => 30,  49 => 29,  47 => 25,  46 => 24,  45 => 23,  44 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the individual slick item/slide template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: An array of attributes to apply to the element.*/
/*  * - item.slide: A renderable array of the main image/background.*/
/*  * - item.caption: A renderable array containing caption fields if provided:*/
/*  *   - title: The individual slide title.*/
/*  *   - alt: The core Image field Alt as caption.*/
/*  *   - link: The slide links or buttons.*/
/*  *   - overlay: The image/audio/video overlay, or a nested slick.*/
/*  *   - data: any possible field for more complex data if crazy enough.*/
/*  * - settings: An array containing the given settings.*/
/*  **/
/*  * @see template_preprocess_slick_slide()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'slick__slide', 'slide', 'slide--' ~ delta,*/
/*     item.slide is empty ? 'slide--text',*/
/*     settings.layout ? 'slide--caption--' ~ settings.layout|clean_class,*/
/*     settings.class ? settings.class*/
/*   ]*/
/* %}*/
/* {%*/
/*   set content_classes = [*/
/*     settings.detroy ? 'slide',*/
/*     not settings.detroy ? 'slide__content'*/
/*   ]*/
/* %}*/
/* {% set slide %}*/
/*   {% if settings.split and not settings.unslick %}*/
/*     <div class="slide__media">{{ item.slide }}</div>*/
/*   {% else %}*/
/*     {{ item.slide }}*/
/*   {% endif %}*/
/* {% endset %}*/
/* */
/* {% spaceless %}*/
/* {% if settings.wrapper %}*/
/*   <div{{ attributes.addClass(classes) }}>*/
/*   {% if settings.grid is empty %}<div{{ content_attributes.addClass(content_classes) }}>{% endif %}*/
/* {% endif %}*/
/* */
/*   {{ slide }}*/
/* */
/*   {% if item.caption %}*/
/*     {% if settings.fullwidth %}<div class="slide__constrained">{% endif %}*/
/* */
/*       <div class="slide__caption">*/
/*         {% if item.caption.overlay %}*/
/*           <div class="slide__overlay">{{ item.caption.overlay }}</div>*/
/*           {% if settings.data %}<div class="slide__data">{% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if item.caption.title %}*/
/*           <h2 class="slide__title">{{ item.caption.title }}</h2>*/
/*         {% endif %}*/
/* */
/*         {% if item.caption.alt %}*/
/*           <p class="slide__description">{{ item.caption.alt }}</p>*/
/*         {% endif %}*/
/* */
/*         {{ item.caption.data }}*/
/* */
/*         {% if item.caption.link %}*/
/*           <div class="slide__link">{{ item.caption.link }}</div>*/
/*         {% endif %}*/
/* */
/*         {% if item.caption.overlay and settings.data %}</div>{% endif %}*/
/*       </div>*/
/* */
/*     {% if settings.fullwidth %}</div>{% endif %}*/
/*   {% endif %}*/
/* */
/* {% if settings.wrapper %}*/
/*   {% if settings.grid is empty %}</div>{% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* */
