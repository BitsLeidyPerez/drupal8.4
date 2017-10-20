<?php

/* themes/custom/adf_bootstrap/templates/navigation/menu.html.twig */
class __TwigTemplate_5ab807f788729112389a66c75f374f2417b079a52f89d48417276fbef75f7a7c extends Twig_Template
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
        $tags = array("import" => 1, "macro" => 6, "if" => 8, "for" => 14, "set" => 16);
        $filters = array();
        $functions = array("link" => 28);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
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
        $context["menus"] = $this;
        // line 2
        echo "

";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
        // line 38
        echo "



";
        // line 43
        echo "
";
        // line 45
        echo "  ";
        // line 46
        echo "  ";
        // line 47
        echo "    ";
        // line 48
        echo "      ";
        // line 49
        echo "    ";
        // line 50
        echo "      ";
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        // line 53
        echo "      ";
        // line 54
        echo "        ";
        // line 55
        echo "          ";
        // line 56
        echo "          ";
        // line 57
        echo "          ";
        // line 58
        echo "          ";
        // line 59
        echo "        ";
        // line 60
        echo "      ";
        // line 61
        echo "      ";
        // line 62
        echo "        ";
        // line 63
        echo "        ";
        // line 64
        echo "          ";
        // line 65
        echo "        ";
        // line 66
        echo "      ";
        // line 67
        echo "    ";
        // line 68
        echo "    ";
        // line 69
        echo "  ";
    }

    // line 6
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "  ";
            $context["menus"] = $this;
            // line 8
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 9
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 10
                    echo "<ul  ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "menu", 1 => "navbar-nav"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 12
                    echo "    <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "dropdown-menu"), "method"), "html", null, true));
                    echo ">
        ";
                }
                // line 14
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 15
                    echo "            ";
                    // line 16
                    $context["item_classes"] = array(0 => "nav-item", 1 => (($this->getAttribute(                    // line 18
$context["item"], "is_expanded", array())) ? ("expanded") : ("")), 2 => ((($this->getAttribute(                    // line 19
$context["item"], "is_expanded", array()) && (($context["menu_level"] ?? null) == 0))) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                    // line 20
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 23
                    echo "            ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 24
                        echo "            <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
                <a href=\"";
                        // line 25
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"caret\" ></span></a>
            ";
                    } else {
                        // line 27
                        echo "                <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
                ";
                        // line 28
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
            ";
                    }
                    // line 30
                    echo "            ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 31
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => "navbar-nav"), "method"), (($context["menu_level"] ?? null) + 1))));
                        echo "
            ";
                    }
                    // line 33
                    echo "            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "    </ul>
    ";
            }
            // line 37
            echo "    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/adf_bootstrap/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 37,  203 => 35,  196 => 33,  190 => 31,  187 => 30,  182 => 28,  177 => 27,  170 => 25,  165 => 24,  162 => 23,  160 => 20,  159 => 19,  158 => 18,  157 => 16,  155 => 15,  150 => 14,  144 => 12,  138 => 10,  135 => 9,  132 => 8,  129 => 7,  115 => 6,  111 => 69,  109 => 68,  107 => 67,  105 => 66,  103 => 65,  101 => 64,  99 => 63,  97 => 62,  95 => 61,  93 => 60,  91 => 59,  89 => 58,  87 => 57,  85 => 56,  83 => 55,  81 => 54,  79 => 53,  77 => 52,  75 => 51,  73 => 50,  71 => 49,  69 => 48,  67 => 47,  65 => 46,  63 => 45,  60 => 43,  54 => 38,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/adf_bootstrap/templates/navigation/menu.html.twig", "/Applications/MAMP/htdocs/drupal8.4/themes/custom/adf_bootstrap/templates/navigation/menu.html.twig");
    }
}
