<?php

/* base/head/metadata.html.twig */
class __TwigTemplate_8ee97a30e4c22fa299d7a885d70ef9890abb48035b64b570dfc59661c9653d1b extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            echo "<meta ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "name", array())) {
                echo "name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "name", array()), "html", null, true);
                echo "\" ";
            }
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "http_equiv", array()), "html", null, true);
                echo "\" ";
            }
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "charset", array())) {
                echo "charset=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "charset", array()), "html", null, true);
                echo "\" ";
            }
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "property", array())) {
                echo "property=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "property", array()), "html", null, true);
                echo "\" ";
            }
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "content", array())) {
                echo "content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meta"], "content", array()), "html", null, true);
                echo "\" ";
            }
            echo "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "base/head/metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/head/metadata.html.twig", "C:\\xampp\\htdocs\\pages\\tobiasmarty\\site\\themes\\tobiasmarty\\templates\\base\\head\\metadata.html.twig");
    }
}
