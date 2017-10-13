<?php

/* base/head/head.html.twig */
class __TwigTemplate_5343cd99678afc643565e1ee51cb0d4bdeccc92ca5d5f8b08f8c2d6314117e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    
    ";
        // line 5
        $this->loadTemplate("base/head/metadata.html.twig", "base/head/head.html.twig", 5)->display($context);
        // line 6
        echo "    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("theme://images/favicon.png")), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(true)), "html", null, true);
        echo "\" />
    
    <link href=\"https://fonts.googleapis.com/css?family=Source+Code+Pro\" rel=\"stylesheet\">
\t
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["assets"] ?? null), "css", array(), "method"), "html", null, true);
        echo "
\t
    ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["assets"] ?? null), "js", array(), "method"), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        twig_get_attribute($this->env, $this->getSourceContext(), ($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 15
        echo "    ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        twig_get_attribute($this->env, $this->getSourceContext(), ($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 20
        echo "        ";
        twig_get_attribute($this->env, $this->getSourceContext(), ($context["assets"] ?? null), "addJs", array(0 => "theme://js/nav.js"), "method");
        // line 21
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base/head/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  90 => 20,  87 => 19,  84 => 18,  80 => 15,  77 => 14,  74 => 13,  67 => 22,  65 => 18,  59 => 16,  57 => 13,  50 => 9,  46 => 8,  42 => 6,  40 => 5,  31 => 3,  28 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/head/head.html.twig", "C:\\xampp\\htdocs\\pages\\tobiasmarty\\site\\themes\\tobiasmarty\\templates\\base\\head\\head.html.twig");
    }
}
