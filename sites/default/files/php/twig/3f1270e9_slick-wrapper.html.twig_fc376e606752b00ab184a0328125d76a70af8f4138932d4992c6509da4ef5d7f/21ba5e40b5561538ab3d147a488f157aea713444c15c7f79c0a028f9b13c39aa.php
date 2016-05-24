<?php

/* modules/slick/templates/slick-wrapper.html.twig */
class __TwigTemplate_58c6f79b8cacd2a22087c77ca0c8d8ef2f0965e88907697722b3ea01812451cc extends Twig_Template
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
        $tags = array("set" => 15, "spaceless" => 23, "if" => 24, "for" => 25);
        $filters = array("clean_class" => 18, "without" => 24);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'spaceless', 'if', 'for'),
                array('clean_class', 'without'),
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

        // line 15
        $context["classes"] = array(0 => "slick-wrapper", 1 => ((twig_template_get_attributes($this,         // line 17
(isset($context["settings"]) ? $context["settings"] : null), "nav", array())) ? ("slick-wrapper--asnavfor") : ("")), 2 => ((twig_template_get_attributes($this,         // line 18
(isset($context["settings"]) ? $context["settings"] : null), "skin", array())) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "skin", array())))) : ("")), 3 => ((twig_template_get_attributes($this,         // line 19
(isset($context["settings"]) ? $context["settings"] : null), "skin_thumbnail", array())) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass(twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "skin_thumbnail", array())))) : ("")));
        // line 22
        echo "
";
        // line 23
        ob_start();
        // line 24
        if (twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "nav", array())) {
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without(twig_template_get_attributes($this, (isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "id"), "html", null, true));
            echo ">";
        }
        // line 25
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["item"], "html", null, true));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        if (twig_template_get_attributes($this, (isset($context["settings"]) ? $context["settings"] : null), "nav", array())) {
            echo "</div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  64 => 26,  59 => 25,  53 => 24,  51 => 23,  48 => 22,  46 => 19,  45 => 18,  44 => 17,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a slick wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - items: A list of items containing main and thumbnail of slick.html.twig.*/
/*  * - attributes: HTML attributes to be applied to the list.*/
/*  * - settings: An array containing the given settings.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'slick-wrapper',*/
/*     settings.nav ? 'slick-wrapper--asnavfor',*/
/*     settings.skin ? 'slick-wrapper--' ~ settings.skin|clean_class,*/
/*     settings.skin_thumbnail ? 'slick-wrapper--' ~ settings.skin_thumbnail|clean_class*/
/*   ]*/
/* %}*/
/* */
/* {% spaceless %}*/
/* {% if settings.nav %}<div{{ attributes.addClass(classes)|without('id') }}>{% endif %}*/
/*   {% for item in items %}*/
/*     {{ item }}*/
/*   {% endfor %}*/
/* {% if settings.nav %}</div>{% endif %}*/
/* {% endspaceless %}*/
/* */
