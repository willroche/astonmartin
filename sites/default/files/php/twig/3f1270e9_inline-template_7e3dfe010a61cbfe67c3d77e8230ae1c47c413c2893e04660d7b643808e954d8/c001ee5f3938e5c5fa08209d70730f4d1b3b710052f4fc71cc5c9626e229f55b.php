<?php

/* {# inline_template_start #}<h1 class="slideshow-title">{{ title }}</h1>
<div class="summary-text">{{ field_summary_text }}</div>
{{ view_node }} */
class __TwigTemplate_d0c2b8e9146af8b1282b1219102ca35f7ab5cfe41d9a7950bdb48275c63ad85c extends Twig_Template
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

        // line 1
        echo "<h1 class=\"slideshow-title\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h1>
<div class=\"summary-text\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_summary_text"]) ? $context["field_summary_text"] : null), "html", null, true));
        echo "</div>
";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_node"]) ? $context["view_node"] : null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<h1 class=\"slideshow-title\">{{ title }}</h1>
<div class=\"summary-text\">{{ field_summary_text }}</div>
{{ view_node }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  50 => 2,  45 => 1,);
    }
}
/* {# inline_template_start #}<h1 class="slideshow-title">{{ title }}</h1>*/
/* <div class="summary-text">{{ field_summary_text }}</div>*/
/* {{ view_node }}*/
