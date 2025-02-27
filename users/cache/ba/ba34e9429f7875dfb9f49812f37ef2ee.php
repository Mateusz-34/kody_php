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

/* user_add.html.twig */
class __TwigTemplate_4dce5f029910e8514b48d4c2045b5fc1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/main.html.twig", "user_add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "   <div class=\"row\">
   <div class=\"col-6 offset-3\">

<form method=\"POST\" enctype=\"multipart/form-data\">
   <label class=\"form-label\">Imię</label>
   <input class=\"form-control\"type=\"text\" name=\"name\" value=\"\">

   <label class=\"form-label\">Nazwisko</label>
   <input class=\"form-control\" type=\"text\" name=\"surname\" value=\"\">

   <label class=\"form-label\">E-mail</label>
   <input class=\"form-control\" type=\"text\" name=\"email\" value=\"\">

   <label class=\"form-label\">Hasło</label>
   <input class=\"form-control\" type=\"password\" name=\"password\" value=\"\">

   <label class=\"form-label\">Wiek</label>
   <input class=\"form-control\" type=\"number\" name=\"age\" value=\"\">

   <label class=\"form-label\">Zdjecie</label>
   <input class=\"form-control\" type=\"file\" name=\"image\">

   <label class=\"form-label\">Aktywny</label>
   <input class=\"form-check-input\" type=\"checkbox\" name=\"isactive\">
   
   <button class=\"btn btn-primary\" type=\"submit\">Zapisz</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "user_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/main.html.twig\" %}
{%block content%}
   <div class=\"row\">
   <div class=\"col-6 offset-3\">

<form method=\"POST\" enctype=\"multipart/form-data\">
   <label class=\"form-label\">Imię</label>
   <input class=\"form-control\"type=\"text\" name=\"name\" value=\"\">

   <label class=\"form-label\">Nazwisko</label>
   <input class=\"form-control\" type=\"text\" name=\"surname\" value=\"\">

   <label class=\"form-label\">E-mail</label>
   <input class=\"form-control\" type=\"text\" name=\"email\" value=\"\">

   <label class=\"form-label\">Hasło</label>
   <input class=\"form-control\" type=\"password\" name=\"password\" value=\"\">

   <label class=\"form-label\">Wiek</label>
   <input class=\"form-control\" type=\"number\" name=\"age\" value=\"\">

   <label class=\"form-label\">Zdjecie</label>
   <input class=\"form-control\" type=\"file\" name=\"image\">

   <label class=\"form-label\">Aktywny</label>
   <input class=\"form-check-input\" type=\"checkbox\" name=\"isactive\">
   
   <button class=\"btn btn-primary\" type=\"submit\">Zapisz</button>
</form>

{%endblock%}", "user_add.html.twig", "C:\\xampp\\htdocs\\users\\templates\\user_add.html.twig");
    }
}
