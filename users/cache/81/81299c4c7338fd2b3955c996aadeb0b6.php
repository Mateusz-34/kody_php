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

/* user_edit.html.twig */
class __TwigTemplate_28432e50555fe0f52d7e235bf79487ba extends Template
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
        $this->parent = $this->loadTemplate("layout/main.html.twig", "user_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"row\">
    <div class=\"col-6 offset-3\">

    <form method=\"POST\" enctype=\"multipart/form-data\">
        <label  class=\"form-label\">Imię</label>
        <input  class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\">

        <label class=\"form-label\">Nazwisko</label>
        <input  class=\"form-control\" type=\"text\" name=\"surname\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "surname", [], "any", false, false, false, 11), "html", null, true);
        echo "\">

        <label class=\"form-label\">Wiek</label>
        <input  class=\"form-control\" type=\"number\" name=\"age\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "age", [], "any", false, false, false, 14), "html", null, true);
        echo "\">

        <label class=\"form-label\">Zdjecie</label>
        <input  class=\"form-control\" type=\"file\" name=\"image\">

        <label class=\"form-label\">Aktywny</label>
        <input type=\"checkbox\" name=\"isactive\" ";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "isactive", [], "any", false, false, false, 20)) ? ("checked") : (""));
        echo ">

        <button class=\"btn btn-primary\" type=\"submit\">Zapisz</button>
    </form>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  69 => 14,  63 => 11,  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/main.html.twig\" %}
{%block content%}
    <div class=\"row\">
    <div class=\"col-6 offset-3\">

    <form method=\"POST\" enctype=\"multipart/form-data\">
        <label  class=\"form-label\">Imię</label>
        <input  class=\"form-control\" type=\"text\" name=\"name\" value=\"{{row.name}}\">

        <label class=\"form-label\">Nazwisko</label>
        <input  class=\"form-control\" type=\"text\" name=\"surname\" value=\"{{row.surname}}\">

        <label class=\"form-label\">Wiek</label>
        <input  class=\"form-control\" type=\"number\" name=\"age\" value=\"{{row.age}}\">

        <label class=\"form-label\">Zdjecie</label>
        <input  class=\"form-control\" type=\"file\" name=\"image\">

        <label class=\"form-label\">Aktywny</label>
        <input type=\"checkbox\" name=\"isactive\" {{row.isactive ?'checked':''}}>

        <button class=\"btn btn-primary\" type=\"submit\">Zapisz</button>
    </form>
    </div>
    </div>
{%endblock%}", "user_edit.html.twig", "C:\\xampp\\htdocs\\users\\templates\\user_edit.html.twig");
    }
}
