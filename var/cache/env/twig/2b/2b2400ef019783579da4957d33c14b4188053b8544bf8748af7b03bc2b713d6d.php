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

/* perfil/show.html.twig */
class __TwigTemplate_a728f8278f1279b359f8ae83444331522f8abb5359f2820c54f9400f7e9799dc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "perfil/show.html.twig", 1);
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
    <h1>Detalles Perfil</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil_index");
        echo "\">Volver</a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perfil"]) || array_key_exists("perfil", $context) ? $context["perfil"] : (function () { throw new RuntimeError('Variable "perfil" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perfil"]) || array_key_exists("perfil", $context) ? $context["perfil"] : (function () { throw new RuntimeError('Variable "perfil" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["perfil"]) || array_key_exists("perfil", $context) ? $context["perfil"] : (function () { throw new RuntimeError('Variable "perfil" does not exist.', 22, $this->source); })()), "fechacreacion", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perfil"]) || array_key_exists("perfil", $context) ? $context["perfil"] : (function () { throw new RuntimeError('Variable "perfil" does not exist.', 22, $this->source); })()), "fechacreacion", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 26
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["perfil"]) || array_key_exists("perfil", $context) ? $context["perfil"] : (function () { throw new RuntimeError('Variable "perfil" does not exist.', 26, $this->source); })()), "activo", [], "any", false, false, false, 26)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["perfil"]) || array_key_exists("perfil", $context) ? $context["perfil"] : (function () { throw new RuntimeError('Variable "perfil" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 33
        echo twig_include($this->env, $context, "perfil/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "perfil/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  101 => 31,  93 => 26,  86 => 22,  79 => 18,  72 => 14,  64 => 9,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Perfil{% endblock %} #}

{% block body %}
<div class=\"container\">
    <h1>Detalles Perfil</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('perfil_index') }}\">Volver</a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ perfil.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ perfil.nombre }}</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>{{ perfil.fechacreacion ? perfil.fechacreacion|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>{{ perfil.activo ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('perfil_edit', {'id': perfil.id}) }}\">Editar</a>

    {{ include('perfil/_delete_form.html.twig') }}
</div>
{% endblock %}
", "perfil/show.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/perfil/show.html.twig");
    }
}
