<?php

/* themes/custom/adf_bits/templates/page.html.twig */
class __TwigTemplate_81fc4f912d3d7760482e5d813316923b3af6daa5f9ea151048bb8237be2b2b2d extends Twig_Template
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
        $tags = array("if" => 71);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 1
        echo "<header>
    <div id=\"main\" class=\"main row\" >
        <div class=\"col-4\">
                 ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        </div>
        <div  class=\"main-menu col-8\">
          <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded flex-row-reverse\">
                <button id=\"main-button\" class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <img id=\"main-icon\" src=\"/RepoBits/themes/custom/adf_bits/images/mov_menu1.png\">
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <div> ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
        echo "</div>
                </div>

            </nav>

         <!--    <nav id=\"main-menu\" class=\"navbar navbar-expand-lg navbar-light fixed-top flex-row-reverse\">

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <div class=\"primary-menu\"> ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "</div>
                </div>
            </nav>
-->
        </div>

        <div class=\"pos-f-t\">
            <div class=\"collapse\" id=\"navbarToggleExternalContent\">
                <div class=\"main_mblock\">
                    ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
        echo "
                </div>
            </div>
    </div>
    </div>
    <div id=\"slider\">
       

    ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
        echo "
    </div>
    <div id=\"nav-menu\" class=\"nav-menu\">
    ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "nav_menu", array()), "html", null, true));
        echo "
    </div>

</header>

<section>
    ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
</section>
<section>
    ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
        echo "
</section>
<section>
    ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
</section>

<div>
    <main id=\"content\" class=\"main-content\" role=\"main\">
        <section class=\"section\" id=\"section-content\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        </section>
    </main>
</div>


<footer class=\"footer-end\">
    <img id=\"footer-fondo\" src=\"\"/>
    <div class=\"foot\">
        ";
        // line 71
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) && $this->getAttribute(($context["page"] ?? null), "footer_second", array())) && $this->getAttribute(($context["page"] ?? null), "footer_third", array())) && $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 72
            echo "            <div class=\"row\" >
                <div class=\"block-foot1 col-md-4\" >";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "</div>
                <div class=\"block-foot col-md-3\" >";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "</div>
                <div class=\"block-foot col-md-3\" >";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "</div>
                <div class=\"block-foot col-md-2 f-heigh \" >";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "</div>
            </div>
        ";
        }
        // line 79
        echo "        ";
        // line 80
        echo "        <div class=\"foot_fifth\">
            -";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 84
        echo "    </div>
    <a id=\"back-to-top\" href=\"#\" class=\"btn btn-lg back-to-top\" role=\"button\" title=\"Subir\" data-toggle=\"tooltip\" data-placement=\"left\"><img src=\"/RepoBits/themes/custom/adf_bits/images/back_to_top.png\"/></a>

</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/adf_bits/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 84,  173 => 81,  170 => 80,  168 => 79,  162 => 76,  158 => 75,  154 => 74,  150 => 73,  147 => 72,  145 => 71,  133 => 62,  123 => 55,  117 => 52,  111 => 49,  102 => 43,  96 => 40,  85 => 32,  73 => 23,  59 => 12,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/adf_bits/templates/page.html.twig", "/Applications/MAMP/htdocs/drupal8.4/themes/custom/adf_bits/templates/page.html.twig");
    }
}
