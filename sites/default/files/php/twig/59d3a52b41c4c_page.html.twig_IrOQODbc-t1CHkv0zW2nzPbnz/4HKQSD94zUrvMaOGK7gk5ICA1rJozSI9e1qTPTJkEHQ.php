<?php

/* themes/custom/adf_bootstrap/templates/page.html.twig */
class __TwigTemplate_10a436dd026d0fcbbb134da5b7ee8f4d749c32fd09ebbe2ab32511c3de1662f1 extends Twig_Template
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
        $tags = array("if" => 36);
        $filters = array("t" => 2);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        echo "    <header id=\"header\" class=\"header hm-black-strong\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
      <div class=\"header-content\">

              <nav id=\"main-menu\" class=\"navbar navbar-expand-lg navbar-dark  fixed-top flex-row-reverse\">
               <div class=\"row\">
                 <div class=\"col-lg-5 col-md-6 ml-auto\">
                <a id=\"logo-menu\" class=\"navbar-brand visible\" href=\"#\">
                  ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
                </a>
                 </div>
                 <div class=\"col-lg-7 col-md-6 ml-auto\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
                  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                  <div class=\"primary-menu\"> ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "</div>
                  </div>
                 </div>
               </div>
              </nav>







        <div class=\"sec-menu\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "</div>
      </div>
    </header>

<!-- Main container-->
<div class=\"container-fluid\">

      ";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 37
            echo "        <div class=\"highlighted\">
          <aside class=\"layout-container section clearfix\" role=\"complementary\">
              ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
          </aside>
        </div>
      ";
        }
        // line 43
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 44
            echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
              ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
          </aside>
        </div>
      ";
        }
        // line 50
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main row\">
          ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
          ";
        // line 54
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) {
            // line 55
            echo "
            <div id=\"sidebar-first\" class=\"column sidebar col-sm-2\">
              <aside class=\"section\" role=\"complementary\">
                  ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </aside>
            </div>

          <div class=\"col-sm-8\">
          <main id=\"content\" class=\"column main-content\" >
              <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              </section>
          </main>
          </div>

            <div id=\"sidebar-second\" class=\"column sidebar col-sm-2\">
              <aside class=\"section\" role=\"complementary\">
                  ";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
              </aside>
            </div>

          ";
        } elseif ($this->getAttribute(        // line 77
($context["page"] ?? null), "sidebar_first", array())) {
            // line 78
            echo "                  <div id=\"sidebar-first\" class=\"column sidebar col-sm-2\">
                      <aside class=\"section\" role=\"complementary\">
                          ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
                      </aside>
                  </div>
              <div class=\"col-sm-10\">
                  <main id=\"content\" class=\"column main-content\" >
                      <section class=\"section\">
                          <a id=\"main-content\" tabindex=\"-1\"></a>
                          ";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                      </section>
                  </main>
              </div>
              ";
        } elseif ($this->getAttribute(        // line 91
($context["page"] ?? null), "sidebar_second", array())) {
            // line 92
            echo "          <div class=\"col-sm-10\">
              <main id=\"content\" class=\"column main-content\" >
                  <section class=\"section\">
                      <a id=\"main-content\" tabindex=\"-1\"></a>
                      ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                  </section>
              </main>
          </div>

              <div id=\"sidebar-second\" class=\"column sidebar col-sm-2\">
                  <aside class=\"section\" role=\"complementary\">
                      ";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
                  </aside>
              </div>
              ";
        } else {
            // line 107
            echo "              <div class=\"col-sm-12\">
                  <main id=\"content\" class=\"column main-content\" >
                      <section class=\"section\">
                          <a id=\"main-content\" tabindex=\"-1\"></a>
                          ";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                      </section>
                  </main>
              </div>
          ";
        }
        // line 116
        echo "      </div>
    </div>


</div>


        <div class=\"container-fluid\">
          <div class=\"row\">

            ";
        // line 126
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()))) {
            // line 127
            echo "
              <!--First column-->
              <div class=\"col-lg-3 col-md-6 ml-auto\">";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()), "html", null, true));
            echo "</div>
              <hr class=\"w-100 clearfix d-sm-none\">
              <!--Second column-->
              <div class=\"col-lg-3 col-md-6 ml-auto\">";
            // line 132
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array()), "html", null, true));
            echo "</div>
              <hr class=\"w-100 clearfix d-sm-none\">
              <!--Third column-->
              <div class=\"col-lg-3 col-md-6 ml-auto\">";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()), "html", null, true));
            echo "</div>
              <hr class=\"w-100 clearfix d-sm-none\">

            ";
        }
        // line 139
        echo "          </div>
        </div>




    <footer class=\"page-footer center-on-small-only stylish-color-dark\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          ";
        // line 149
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 150
            echo "
            <!--First column-->
            <div class=\"col-lg-3 col-md-6 ml-auto\">";
            // line 152
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "</div>
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Second column-->
            <div class=\"col-lg-3 col-md-6 ml-auto\">";
            // line 155
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "</div>
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Third column-->
            <div class=\"col-lg-3 col-md-6 ml-auto\">";
            // line 158
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "</div>
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Fourth column-->
            <div class=\"col-lg-3 col-md-6 ml-auto\">";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "</div>
            <hr class=\"w-100 clearfix d-sm-none\">

          ";
        }
        // line 165
        echo "        </div>
        </div>
        <hr>
          ";
        // line 169
        echo "        <div class=\"footer-copyright\">
          <div class=\"container-fluid\">
                @adf-bootstrap4
                ";
        // line 172
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
        echo "
          </div>
            </div>
          ";
        // line 176
        echo "
    </footer>
";
        // line 179
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/adf_bootstrap/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 179,  319 => 176,  313 => 172,  308 => 169,  303 => 165,  296 => 161,  290 => 158,  284 => 155,  278 => 152,  274 => 150,  272 => 149,  260 => 139,  253 => 135,  247 => 132,  241 => 129,  237 => 127,  235 => 126,  223 => 116,  215 => 111,  209 => 107,  202 => 103,  192 => 96,  186 => 92,  184 => 91,  177 => 87,  167 => 80,  163 => 78,  161 => 77,  154 => 73,  144 => 66,  133 => 58,  128 => 55,  126 => 54,  122 => 53,  117 => 50,  110 => 46,  106 => 44,  103 => 43,  96 => 39,  92 => 37,  90 => 36,  80 => 29,  65 => 17,  54 => 9,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/adf_bootstrap/templates/page.html.twig", "/Applications/MAMP/htdocs/drupal8.4/themes/custom/adf_bootstrap/templates/page.html.twig");
    }
}
