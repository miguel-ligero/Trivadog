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

/* habitaciones/index.html.twig */
class __TwigTemplate_cadb8b98d6cf940412da4e4d5ef1b5d16e54786979e03d1bbb7609bd309ff37a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitaciones/index.html.twig", 1);
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
    <h1>Habitaciones</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["habitaciones"]) || array_key_exists("habitaciones", $context) ? $context["habitaciones"] : (function () { throw new RuntimeError('Variable "habitaciones" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["habitacione"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitacione"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitacione"], "nombre", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["habitacione"], "fechacreacion", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitacione"], "fechacreacion", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 26
            echo ((twig_get_attribute($this->env, $this->source, $context["habitacione"], "activo", [], "any", false, false, false, 26)) ? ("Yes") : ("No"));
            echo "</td>
                <td>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitaciones_show", ["id" => twig_get_attribute($this->env, $this->source, $context["habitacione"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Detalles</a>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitaciones_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["habitacione"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "            <tr>
                <td colspan=\"12\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitacione'], $context['_parent'], $context['loop']);
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
        return "habitaciones/index.html.twig";
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

{# {% block title %}Habitaciones{% endblock %} #}

{% block body %}
<div class=\"container\">
    <h1>Habitaciones</h1>

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
        {% for habitacione in habitaciones %}
            <tr>
                <td>{{ habitacione.id }}</td>
                <td>{{ habitacione.nombre }}</td>
                <td>{{ habitacione.fechacreacion ? habitacione.fechacreacion|date('Y-m-d') : '' }}</td>
                <td>{{ habitacione.activo ? 'Yes' : 'No' }}</td>
                <td>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('habitaciones_show', {'id': habitacione.id}) }}\">Detalles</a>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('habitaciones_edit', {'id': habitacione.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"12\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "habitaciones/index.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/habitaciones/index.html.twig");
    }
}
