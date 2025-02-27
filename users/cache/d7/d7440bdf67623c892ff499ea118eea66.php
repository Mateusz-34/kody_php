<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/main.html.twig */
class __TwigTemplate_759e39bc6a2fdd2b4fda7d8d0198ce0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"assets/castom.css\">
    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "        
        <div class=\"container\">
        ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "        </div>

        ";
        // line 17
        $this->displayBlock('footer', $context, $blocks);
        // line 19
        echo "    </body>
</html>";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        ";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        ";
    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layout/main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  85 => 17,  81 => 14,  77 => 13,  73 => 10,  69 => 9,  64 => 19,  62 => 17,  58 => 15,  56 => 13,  52 => 11,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"assets/castom.css\">
    </head>
    <body>
        {%block header%}
        {%endblock%}
        
        <div class=\"container\">
        {%block content%}
        {%endblock%}
        </div>

        {%block footer%}
        {%endblock%}
    </body>
</html>", "layout/main.html.twig", "C:\\xampp\\htdocs\\users\\templates\\layout\\main.html.twig");
    }
}
