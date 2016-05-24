<?php

/* themes/custom/aston_martin/templates/page.html.twig */
class __TwigTemplate_9ad52e3d496d08b7309cda602938fe0b4520879417a898561602d7dc9ff11086 extends Twig_Template
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
        $tags = array("if" => 93);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 53
        echo "<!-- Menu -->
<div id=\"menu\" class=\"slice slice-overlay t-light\">
\t<div class=\"l-col-12 l-content h-clearfix\">
\t\t<div class=\"l-col-12 l-padding\">
\t\t\t<div class=\"h-right\">
\t\t\t\t<div class=\"i-menu-close\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"l-col-12 l-padding t-center main-menu-holder\">
      ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
\t\t</div>
\t</div>
</div>
<!-- Menu end -->

<!-- Sticky nav -->
<header class=\"header\">
\t<div class=\"slice\">
\t\t<div class=\"l-col-12 l-content t-light main-menu h-clearfix\">
\t\t\t<div class=\"l-col-4 f-col-4 l-padding\">
\t\t\t\t<div class=\"i-search\"></div>
\t\t\t\t<a class=\"back-to-aston h-hidden-sm\" href=\"http://www.astonmartin.com/\">astonmartin.com</a>
\t\t\t</div>
\t\t\t<div class=\"l-col-4 f-col-4 l-padding t-center\">
\t\t\t\t<div class=\"logo\"></div>
\t\t\t</div>
\t\t\t<div class=\"l-col-4 f-col-4 l-padding\">
\t\t\t\t<div class=\"h-right\">
\t\t\t\t\t<div class=\"button-nav\">
\t\t\t\t\t\t<span class=\"button-nav-lines\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-gradient\"></div>
\t</div>
</header>
<!-- Sticky nav end -->


";
        // line 93
        if (twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "featured_top", array())) {
            // line 94
            echo "  <div class=\"slice\">
    <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
      ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "featured_top", array()), "html", null, true));
            echo "
    </aside>
  </div>
";
        }
        // line 100
        echo "<div id=\"main-wrapper\" class=\"l-col-12 l-content\">
  <div id=\"main\" class=\"layout-main clearfix\">
    <main id=\"content\" class=\"column main-content\" role=\"main\">
      <section class=\"section\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </section>
    </main>
  </div>
</div>

<footer class=\"site-footer\">
  <div class=\"slice slice-footer h-clearfix\">
    ";
        // line 113
        if (((twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "footer_left", array()) || twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) || twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "footer_right", array()))) {
            // line 114
            echo "      <div class=\"l-col-12 l-content\">
        <div class=\"l-col-4 l-padding h-hidden-sm\">
          ";
            // line 116
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "footer_left", array()), "html", null, true));
            echo "
        </div>
        <div class=\"l-col-4 l-padding\">
          ";
            // line 119
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "footer_middle", array()), "html", null, true));
            echo "
        </div>
        <div class=\"l-col-4 l-padding\">
          ";
            // line 122
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "footer_right", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 126
        echo "    ";
        if (twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
            // line 127
            echo "      <div class=\"l-col-12 l-content\">
    \t\t<div class=\"l-col-12 l-padding copyright\">
        ";
            // line 129
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_template_get_attributes($this, (isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 133
        echo "  </div>
</footer>

<script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js\"></script>
<script>
 WebFont.load({
    google: {
      families: ['Lato:400,300,700']
    }
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/aston_martin/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 133,  151 => 129,  147 => 127,  144 => 126,  137 => 122,  131 => 119,  125 => 116,  121 => 114,  119 => 113,  108 => 105,  101 => 100,  94 => 96,  90 => 94,  88 => 93,  54 => 62,  43 => 53,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.highlighted: Items for the highlighted region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.featured_top: Items for the featured top region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.featured_bottom_first: Items for the first featured bottom region.*/
/*  * - page.featured_bottom_second: Items for the second featured bottom region.*/
/*  * - page.featured_bottom_third: Items for the third featured bottom region.*/
/*  * - page.footer_first: Items for the first footer column.*/
/*  * - page.footer_second: Items for the second footer column.*/
/*  * - page.footer_third: Items for the third footer column.*/
/*  * - page.footer_fourth: Items for the fourth footer column.*/
/*  * - page.footer_fifth: Items for the fifth footer column.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <!-- Menu -->*/
/* <div id="menu" class="slice slice-overlay t-light">*/
/* 	<div class="l-col-12 l-content h-clearfix">*/
/* 		<div class="l-col-12 l-padding">*/
/* 			<div class="h-right">*/
/* 				<div class="i-menu-close"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="l-col-12 l-padding t-center main-menu-holder">*/
/*       {{ page.primary_menu }}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- Menu end -->*/
/* */
/* <!-- Sticky nav -->*/
/* <header class="header">*/
/* 	<div class="slice">*/
/* 		<div class="l-col-12 l-content t-light main-menu h-clearfix">*/
/* 			<div class="l-col-4 f-col-4 l-padding">*/
/* 				<div class="i-search"></div>*/
/* 				<a class="back-to-aston h-hidden-sm" href="http://www.astonmartin.com/">astonmartin.com</a>*/
/* 			</div>*/
/* 			<div class="l-col-4 f-col-4 l-padding t-center">*/
/* 				<div class="logo"></div>*/
/* 			</div>*/
/* 			<div class="l-col-4 f-col-4 l-padding">*/
/* 				<div class="h-right">*/
/* 					<div class="button-nav">*/
/* 						<span class="button-nav-lines"></span>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="header-gradient"></div>*/
/* 	</div>*/
/* </header>*/
/* <!-- Sticky nav end -->*/
/* */
/* */
/* {% if page.featured_top %}*/
/*   <div class="slice">*/
/*     <aside class="featured-top__inner section layout-container clearfix" role="complementary">*/
/*       {{ page.featured_top }}*/
/*     </aside>*/
/*   </div>*/
/* {% endif %}*/
/* <div id="main-wrapper" class="l-col-12 l-content">*/
/*   <div id="main" class="layout-main clearfix">*/
/*     <main id="content" class="column main-content" role="main">*/
/*       <section class="section">*/
/*         <a id="main-content" tabindex="-1"></a>*/
/*         {{ page.content }}*/
/*       </section>*/
/*     </main>*/
/*   </div>*/
/* </div>*/
/* */
/* <footer class="site-footer">*/
/*   <div class="slice slice-footer h-clearfix">*/
/*     {% if page.footer_left or page.footer_middle or page.footer_right %}*/
/*       <div class="l-col-12 l-content">*/
/*         <div class="l-col-4 l-padding h-hidden-sm">*/
/*           {{ page.footer_left }}*/
/*         </div>*/
/*         <div class="l-col-4 l-padding">*/
/*           {{ page.footer_middle }}*/
/*         </div>*/
/*         <div class="l-col-4 l-padding">*/
/*           {{ page.footer_right }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if page.footer_bottom %}*/
/*       <div class="l-col-12 l-content">*/
/*     		<div class="l-col-12 l-padding copyright">*/
/*         {{ page.footer_bottom }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </footer>*/
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>*/
/* <script>*/
/*  WebFont.load({*/
/*     google: {*/
/*       families: ['Lato:400,300,700']*/
/*     }*/
/*   });*/
/* </script>*/
/* */
