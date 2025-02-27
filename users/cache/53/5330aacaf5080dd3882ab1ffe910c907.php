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

/* users.html.twig */
class __TwigTemplate_7cf69e25c4f0810dbf59fbb44c9c9b40 extends Template
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
        $this->parent = $this->loadTemplate("layout/main.html.twig", "users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if (($context["message"] ?? null)) {
            // line 4
            echo "<div class = \"alert alert-primary\">
    ";
            // line 5
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
</div>
";
        }
        // line 8
        echo "
<table class=\"table table-striped table-hover table-bordered\">
<tr>
    <th>Id</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Wiek</th>
    <th>Aktywny</th>
    <th>Opcje</th>
</tr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "    <tr>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "surname", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "age", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "isactive", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
        <td>
            <a class=\"btn btn-primary\" href=\"user_edit.php?id=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">Edytuj</a>
            <a class=\"btn btn-danger\" href=\"user_delete.php?id=";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">Usun</a>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>
<a class=\"btn btn-primary\" href='user_add.php'>Dodaj</a>
";
    }

    public function getTemplateName()
    {
        return "users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  105 => 27,  101 => 26,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  77 => 19,  73 => 18,  61 => 8,  55 => 5,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/main.html.twig\" %}
{%block content%}
{%if message%}
<div class = \"alert alert-primary\">
    {{message}}
</div>
{%endif%}

<table class=\"table table-striped table-hover table-bordered\">
<tr>
    <th>Id</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Wiek</th>
    <th>Aktywny</th>
    <th>Opcje</th>
</tr>
{%for item in results%}
    <tr>
        <td>{{item.id}}</td>
        <td>{{item.name}}</td>
        <td>{{item.surname}}</td>
        <td>{{item.age}}</td>
        <td>{{item.isactive}}</td>
        <td>
            <a class=\"btn btn-primary\" href=\"user_edit.php?id={{item.id}}\">Edytuj</a>
            <a class=\"btn btn-danger\" href=\"user_delete.php?id={{item.id}}\">Usun</a>
    </tr>
{%endfor%}
</table>
<a class=\"btn btn-primary\" href='user_add.php'>Dodaj</a>
{%endblock%}", "users.html.twig", "C:\\xampp\\htdocs\\users\\templates\\users.html.twig");
    }
}
