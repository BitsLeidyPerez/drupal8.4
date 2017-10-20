<?php

/* themes/custom/adf_bits/templates/node.html.twig */
class __TwigTemplate_ce9630af802a0cdd295dff2f18e607b8f8a166f26c46561617e03560480c992b extends Twig_Template
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
        $tags = array("set" => 2, "if" => 14);
        $filters = array("clean_class" => 3);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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
            echo "      <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">
        <a href=\"";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
      </h2>
    ";
        }
        // line 19
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

    ";
        // line 21
        if (($context["display_submitted"] ?? null)) {
            // line 22
            echo "      ";
            // line 23
            echo "          ";
            // line 24
            echo "        ";
            // line 25
            echo "            ";
            // line 26
            echo "            ";
            // line 27
            echo "        ";
            // line 28
            echo "      ";
            // line 29
            echo "    ";
        }
        // line 30
        echo "
  <div";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
      ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  </div>

</article>


";
    }

    public function getTemplateName()
    {
        return "themes/custom/adf_bits/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  103 => 31,  100 => 30,  97 => 29,  95 => 28,  93 => 27,  91 => 26,  89 => 25,  87 => 24,  85 => 23,  83 => 22,  81 => 21,  75 => 19,  67 => 16,  62 => 15,  60 => 14,  56 => 13,  50 => 11,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/adf_bits/templates/node.html.twig", "/Applications/MAMP/htdocs/drupal8.4/themes/custom/adf_bits/templates/node.html.twig");
    }
}
