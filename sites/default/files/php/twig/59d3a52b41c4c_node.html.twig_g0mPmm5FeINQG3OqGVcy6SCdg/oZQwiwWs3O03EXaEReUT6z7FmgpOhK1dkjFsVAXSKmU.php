<?php

/* themes/custom/adf_bootstrap/templates/content/node.html.twig */
class __TwigTemplate_2af569385a6e07a98059df117622fc422cd3230cd14031fd51cd219e197006ac extends Twig_Template
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
        $tags = array("set" => 2, "if" => 14, "trans" => 28);
        $filters = array("clean_class" => 3);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class'),
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
        $context["classes"] = array(0 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 3
($context["node"] ?? null), "bundle", array())), 1 => (($this->getAttribute(        // line 4
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 5
($context["node"] ?? null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 6
($context["node"] ?? null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 7
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null))) : ("")), 5 => "clearfix");
        // line 11
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

    ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 14
        if ( !($context["page"] ?? null)) {
            // line 15
            echo "  <div class=\"divider-new pt-5\">
      <h2 class=\"h2-responsive wow fadeIn\" data-wow-delay=\"0.2s\">
        <a href=\"";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
      </h2>
  </div>

    ";
        }
        // line 22
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

    ";
        // line 24
        if (($context["display_submitted"] ?? null)) {
            // line 25
            echo "      <footer>
          ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
        <div";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "author"), "method"), "html", null, true));
            echo ">
            ";
            // line 28
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 29
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
        </div>
      </footer>
    ";
        }
        // line 33
        echo "
  <div";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
      ";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  </div>

</article>

";
        // line 41
        echo "  ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        // line 48
        echo "  ";
        // line 52
        echo "
  ";
        // line 54
        echo "  ";
        // line 55
        echo "    ";
        // line 56
        echo "      ";
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        // line 59
        echo "  ";
        // line 60
        echo "  ";
        // line 61
        echo "
  ";
        // line 63
        echo "    ";
        // line 64
        echo "      ";
        // line 65
        echo "      ";
        // line 66
        echo "        ";
        // line 67
        echo "        ";
        // line 68
        echo "      ";
        // line 69
        echo "    ";
        // line 70
        echo "  ";
        // line 71
        echo "
  ";
        // line 73
        echo "    ";
        // line 74
        echo "  ";
        // line 75
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/adf_bootstrap/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 75,  177 => 74,  175 => 73,  172 => 71,  170 => 70,  168 => 69,  166 => 68,  164 => 67,  162 => 66,  160 => 65,  158 => 64,  156 => 63,  153 => 61,  151 => 60,  149 => 59,  147 => 58,  145 => 57,  143 => 56,  141 => 55,  139 => 54,  136 => 52,  134 => 48,  132 => 47,  130 => 46,  128 => 45,  126 => 44,  124 => 43,  122 => 42,  120 => 41,  112 => 35,  108 => 34,  105 => 33,  97 => 29,  95 => 28,  91 => 27,  87 => 26,  84 => 25,  82 => 24,  76 => 22,  66 => 17,  62 => 15,  60 => 14,  56 => 13,  50 => 11,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/adf_bootstrap/templates/content/node.html.twig", "/Applications/MAMP/htdocs/drupal8.4/themes/custom/adf_bootstrap/templates/content/node.html.twig");
    }
}
