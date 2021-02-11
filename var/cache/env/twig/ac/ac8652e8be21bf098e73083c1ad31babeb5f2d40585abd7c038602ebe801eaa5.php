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

/* hospedaje/index.html.twig */
class __TwigTemplate_32b2ab1db96ab4bf69ac22d88eadc39abffda559f7d31ed520c5e4be8e7ad0da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hospedaje/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hospedaje/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1>Hospedaje</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back");
        echo "\">Volver</a>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fechacreacion</th>
                <th>Activo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hospedajes"]) || array_key_exists("hospedajes", $context) ? $context["hospedajes"] : (function () { throw new RuntimeError('Variable "hospedajes" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hospedaje"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hospedaje"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hospedaje"], "nombre", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["hospedaje"], "fechacreacion", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hospedaje"], "fechacreacion", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 26
            echo ((twig_get_attribute($this->env, $this->source, $context["hospedaje"], "activo", [], "any", false, false, false, 26)) ? ("Yes") : ("No"));
            echo "</td>
                <td>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hospedaje_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hospedaje"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Detalles</a>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hospedaje_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["hospedaje"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "            <tr>
                <td colspan=\"10\">No se ha encontrado</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hospedaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hospedaje/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  117 => 33,  108 => 29,  104 => 28,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  84 => 22,  79 => 21,  64 => 9,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Hospedaje{% endblock %} #}

{% block body %}
<div class=\"container\">
    <h1>Hospedaje</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('back') }}\">Volver</a>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fechacreacion</th>
                <th>Activo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for hospedaje in hospedajes %}
            <tr>
                <td>{{ hospedaje.id }}</td>
                <td>{{ hospedaje.nombre }}</td>
                <td>{{ hospedaje.fechacreacion ? hospedaje.fechacreacion|date('Y-m-d') : '' }}</td>
                <td>{{ hospedaje.activo ? 'Yes' : 'No' }}</td>
                <td>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('hospedaje_show', {'id': hospedaje.id}) }}\">Detalles</a>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('hospedaje_edit', {'id': hospedaje.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">No se ha encontrado</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "hospedaje/index.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/hospedaje/index.html.twig");
    }
}
