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

/* hospedaje/show.html.twig */
class __TwigTemplate_a5741da0865b311568af8421b34be3a04646c1e7f4bb6f25a751a498985c3311 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hospedaje/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hospedaje/show.html.twig", 1);
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
    <h1>Detalles Hospedaje</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hospedaje_index");
        echo "\">Volver</a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 22, $this->source); })()), "descripcion", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 26, $this->source); })()), "direccion", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 30, $this->source); })()), "telefono", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 38, $this->source); })()), "fechacreacion", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 38, $this->source); })()), "fechacreacion", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 42
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 42, $this->source); })()), "activo", [], "any", false, false, false, 42)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hospedaje_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hospedaje"]) || array_key_exists("hospedaje", $context) ? $context["hospedaje"] : (function () { throw new RuntimeError('Variable "hospedaje" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "hospedaje/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hospedaje/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  129 => 47,  121 => 42,  114 => 38,  107 => 34,  100 => 30,  93 => 26,  86 => 22,  79 => 18,  72 => 14,  64 => 9,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Hospedaje{% endblock %} #}

{% block body %}
<div class=\"container\">
    <h1>Detalles Hospedaje</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('hospedaje_index') }}\">Volver</a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ hospedaje.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ hospedaje.nombre }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ hospedaje.descripcion }}</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{ hospedaje.direccion }}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{ hospedaje.telefono }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ hospedaje.email }}</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>{{ hospedaje.fechacreacion ? hospedaje.fechacreacion|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>{{ hospedaje.activo ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('hospedaje_edit', {'id': hospedaje.id}) }}\">Editar</a>

    {{ include('hospedaje/_delete_form.html.twig') }}
</div>
{% endblock %}
", "hospedaje/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\hospedaje\\show.html.twig");
    }
}
