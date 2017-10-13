<?php

/* base/nav.html.twig */
class __TwigTemplate_c6b32da94d1fb7e5537212c7a41602bddf949af58693836d6fe9c9ac2c253a0b extends Twig_Template
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
        // line 28
        echo "

<ul class=\"navigation\">
    ";
        // line 31
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "loop", array(0 => ($context["pages"] ?? null)), "method"), "html", null, true);
            echo "
    ";
        } else {
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 35
                echo "            ";
                $context["current_page"] = (((twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "active", array()) || twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 36
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                echo "\">
                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "url", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div>
\t\t\t\t\t\t";
                // line 39
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "header", array()), "image", array())) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["p"] ?? null), "url", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["p"] ?? null), "header", array()), "image", array()), "html", null, true);
                    echo "\">";
                }
                // line 40
                echo "\t\t\t\t\t\t <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["p"] ?? null), "menu", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t </div>
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 47
            echo "        <li>
            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mitem"], "url", array()), "html", null, true);
            echo "\">
                <div>
\t\t\t\t\t";
            // line 50
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["mitem"], "image", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["p"] ?? null), "url", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["p"] ?? null), "header", array()), "image", array()), "html", null, true);
                echo "\">";
            }
            // line 51
            echo "\t\t\t\t\t<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mitem"], "text", array()), "html", null, true);
            echo "</span>
\t\t\t\t</div>
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 57
            echo "        <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "base/nav.html.twig", 57)->display($context);
            echo "</li>
    ";
        }
        // line 59
        echo "</ul>

";
    }

    // line 1
    public function macro_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = (((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "active", array()) || twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            <li class=\"has-children ";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "url", array()), "html", null, true);
                    echo "\">
                    <div>
\t\t\t\t\t\t";
                    // line 8
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "header", array()), "image", array())) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "url", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "header", array()), "image", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 9
                    echo "\t\t\t\t\t\t<span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "menu", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
                </a>
                <ul>
                    ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "loop", array(0 => $context["p"]), "method"), "html", null, true);
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "url", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t<div>
\t\t\t\t\t\t";
                    // line 20
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "header", array()), "image", array())) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "url", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "header", array()), "image", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 21
                    echo "\t\t\t\t\t\t <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "menu", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
                </a>
            </li>
        ";
                }
                // line 26
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "base/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 26,  195 => 21,  187 => 20,  182 => 18,  177 => 17,  170 => 13,  162 => 9,  154 => 8,  149 => 6,  144 => 5,  141 => 4,  138 => 3,  133 => 2,  121 => 1,  115 => 59,  109 => 57,  106 => 56,  94 => 51,  86 => 50,  81 => 48,  78 => 47,  73 => 46,  70 => 45,  58 => 40,  50 => 39,  45 => 37,  40 => 36,  37 => 35,  32 => 34,  26 => 32,  24 => 31,  19 => 28,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/nav.html.twig", "C:\\xampp\\htdocs\\pages\\tobiasmarty\\site\\themes\\tobiasmarty\\templates\\base\\nav.html.twig");
    }
}
