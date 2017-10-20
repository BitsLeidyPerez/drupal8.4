<?php

/* modules/contrib/google_map_field/templates/google_map_field.html.twig */
class __TwigTemplate_516153ae190b7e4252fdaba883235d17c6edc11192b073d95bcd1baf6da1691c extends Twig_Template
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
        $tags = array("if" => 1, "set" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
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
        if ( !twig_test_empty(($context["infowindow"] ?? null))) {
            // line 2
            echo "  ";
            $context["showInfowindow"] = "true";
        }
        // line 4
        echo "<section class=\"google-map-field\">
  ";
        // line 5
        if (($context["name"] ?? null)) {
            // line 6
            echo "  <h2>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 8
        echo "  ";
        if (($context["showInfowindow"] ?? null)) {
            // line 9
            echo "  <div class=\"map-infowindow\" style=\"display:none;\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["infowindow"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"map-container\" style=\"width:";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["width"] ?? null), "html", null, true));
        echo ";height:";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["height"] ?? null), "html", null, true));
        echo ";\" data-controls-show=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["show_controls"] ?? null), "html", null, true));
        echo "\" data-marker-show=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["show_marker"] ?? null), "html", null, true));
        echo "\" data-type=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["type"] ?? null), "html", null, true));
        echo "\" data-lat=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["lat"] ?? null), "html", null, true));
        echo "\" data-lon=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["lon"] ?? null), "html", null, true));
        echo "\" data-zoom=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["zoom"] ?? null), "html", null, true));
        echo "\" data-infowindow=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["showInfowindow"] ?? null), "html", null, true));
        echo "\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/google_map_field/templates/google_map_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/google_map_field/templates/google_map_field.html.twig", "/Applications/MAMP/htdocs/drupal8.4/modules/contrib/google_map_field/templates/google_map_field.html.twig");
    }
}
