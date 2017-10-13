<?php

/* base/structure.html.twig */
class __TwigTemplate_2b96280810e0004bf854c69d2f0ab89fdf9fb8e45443043a553c852dfcc7b0f1 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"de\" xml:lang=\"de\">
    
<head>
     ";
        // line 5
        $this->loadTemplate("base/head/head.html.twig", "base/structure.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body id=\"top\">
    ";
        // line 9
        $this->loadTemplate("base/body.html.twig", "base/structure.html.twig", 9)->display($context);
        // line 10
        echo "</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "base/structure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  32 => 9,  27 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/structure.html.twig", "C:\\xampp\\htdocs\\pages\\tobiasmarty\\site\\themes\\tobiasmarty\\templates\\base\\structure.html.twig");
    }
}
