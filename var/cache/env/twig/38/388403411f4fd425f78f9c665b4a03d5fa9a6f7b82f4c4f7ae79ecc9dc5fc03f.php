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

/* habitaciones/show.html.twig */
class __TwigTemplate_accbe7b64d8a294d2633614f084e9b52e4d5f318a8d7c947af649874d78b9cb3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitaciones/show.html.twig", 1);
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
    <h1>Detalles Habitación</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitaciones_index");
        echo "\">Volver</a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numadultos</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 22, $this->source); })()), "numadultos", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numinfantiles</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 26, $this->source); })()), "numinfantiles", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nummascotas</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 30, $this->source); })()), "nummascotas", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mediavaloracion</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 34, $this->source); })()), "mediavaloracion", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mediavaloracionmascotas</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 38, $this->source); })()), "mediavaloracionmascotas", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numcomentarios</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 42, $this->source); })()), "numcomentarios", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 46, $this->source); })()), "precio", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 50
        ((twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 50, $this->source); })()), "fechacreacion", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 50, $this->source); })()), "fechacreacion", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 54
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 54, $this->source); })()), "activo", [], "any", false, false, false, 54)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitaciones_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["habitacione"]) || array_key_exists("habitacione", $context) ? $context["habitacione"] : (function () { throw new RuntimeError('Variable "habitacione" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">Editar</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "habitaciones/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  142 => 54,  135 => 50,  128 => 46,  121 => 42,  114 => 38,  107 => 34,  100 => 30,  93 => 26,  86 => 22,  79 => 18,  72 => 14,  64 => 9,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Habitaciones{% endblock %} #}

{% block body %}
<div class=\"container\">
    <h1>Detalles Habitación</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('habitaciones_index') }}\">Volver</a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ habitacione.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ habitacione.nombre }}</td>
            </tr>
            <tr>
                <th>Numadultos</th>
                <td>{{ habitacione.numadultos }}</td>
            </tr>
            <tr>
                <th>Numinfantiles</th>
                <td>{{ habitacione.numinfantiles }}</td>
            </tr>
            <tr>
                <th>Nummascotas</th>
                <td>{{ habitacione.nummascotas }}</td>
            </tr>
            <tr>
                <th>Mediavaloracion</th>
                <td>{{ habitacione.mediavaloracion }}</td>
            </tr>
            <tr>
                <th>Mediavaloracionmascotas</th>
                <td>{{ habitacione.mediavaloracionmascotas }}</td>
            </tr>
            <tr>
                <th>Numcomentarios</th>
                <td>{{ habitacione.numcomentarios }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ habitacione.precio }}</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>{{ habitacione.fechacreacion ? habitacione.fechacreacion|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>{{ habitacione.activo ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('habitaciones_edit', {'id': habitacione.id}) }}\">Editar</a>
</div>
{% endblock %}
", "habitaciones/show.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/habitaciones/show.html.twig");
    }
}
