<?php

/* themes/custom/aston_martin/templates/ds-1col-wrapper--node-home.html.twig */
class __TwigTemplate_99814ffd768626e804ef91f8e6ad5df3aab702fb469389462a2efb70bd28d838 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 14
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "ds-1col", 1 => "clearfix"), "method"), "html", null, true));
        echo ">

  ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  <";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content_wrapper"]) ? $context["ds_content_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content_attributes"]) ? $context["ds_content_attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content"]) ? $context["ds_content"] : null), "html", null, true));
        echo "
  </";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content_wrapper"]) ? $context["ds_content_wrapper"] : null), "html", null, true));
        echo ">

</";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "themes/custom/aston_martin/templates/ds-1col-wrapper--node-home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  64 => 20,  60 => 19,  55 => 18,  50 => 16,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Suite 1 column wrapper template.*/
/*  **/
/*  * Available variables:*/
/*  * - outer_wrapper: outer wrapper element*/
/*  * - ds_content_wrapper: wrapper around content*/
/*  * - attributes: outer wrapper attributes*/
/*  * - ds_content_attributes: attributes for ds_content region*/
/*  * - ds_content: content of ds_content region*/
/*  *//* */
/* #}*/
/* <{{ outer_wrapper }}{{ attributes.addClass('ds-1col', 'clearfix') }}>*/
/* */
/*   {{ title_suffix.contextual_links }}*/
/* */
/*   <{{ ds_content_wrapper }}{{ ds_content_attributes }}>*/
/*     {{ ds_content }}*/
/*   </{{ ds_content_wrapper }}>*/
/* */
/* </{{ outer_wrapper }}>*/
/* */
