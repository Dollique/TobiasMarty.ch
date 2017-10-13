<?php

/* content.html.twig */
class __TwigTemplate_7dd0702178905d205c153473148740f4445b3b8babd2f9c84d3eea4b84783fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/structure.html.twig", "content.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "content", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "content.html.twig", "C:\\xampp\\htdocs\\pages\\tobiasmarty\\site\\themes\\tobiasmarty\\templates\\content.html.twig");
    }
}
