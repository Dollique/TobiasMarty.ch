<?php

/* base/body.html.twig */
class __TwigTemplate_3ac2beb59c0d73807a04ec4f8fe7f1f7f419fc5326e88a5a70ad3f538c8568c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<header id=\"header\">
    <div id=\"logo\">
        <h2>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "title", array()), "html", null, true);
        echo "</h2>
    </div>
    
    <nav>
        ";
        // line 8
        $this->loadTemplate("base/nav.html.twig", "base/body.html.twig", 8)->display($context);
        // line 9
        echo "    </nav>
</header>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<section id=\"body\" class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "</section>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        // line 20
        echo "<footer>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "footer", array()), "html", null, true);
        echo "</footer>
";
    }

    public function getTemplateName()
    {
        return "base/body.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  79 => 19,  74 => 15,  69 => 16,  67 => 15,  62 => 14,  59 => 13,  53 => 9,  51 => 8,  44 => 4,  40 => 2,  37 => 1,  33 => 19,  30 => 18,  28 => 13,  25 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/body.html.twig", "C:\\xampp\\htdocs\\pages\\tobiasmarty\\site\\themes\\tobiasmarty\\templates\\base\\body.html.twig");
    }
}
