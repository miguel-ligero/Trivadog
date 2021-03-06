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

/* comentarioshospedaje/show.html.twig */
class __TwigTemplate_0f58249e1ce334b02a45c680de7fd2160bc40c3a542e744c2bc5192bafe681b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comentarioshospedaje/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comentarioshospedaje/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comentarioshospedaje/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Comentarios";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1>Detalles Comentarios</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comentarioshospedaje_index");
        echo "\">Volver</a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comentarioshospedaje"]) || array_key_exists("comentarioshospedaje", $context) ? $context["comentarioshospedaje"] : (function () { throw new RuntimeError('Variable "comentarioshospedaje" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentario</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comentarioshospedaje"]) || array_key_exists("comentarioshospedaje", $context) ? $context["comentarioshospedaje"] : (function () { throw new RuntimeError('Variable "comentarioshospedaje" does not exist.', 18, $this->source); })()), "comentario", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valoracion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comentarioshospedaje"]) || array_key_exists("comentarioshospedaje", $context) ? $context["comentarioshospedaje"] : (function () { throw new RuntimeError('Variable "comentarioshospedaje" does not exist.', 22, $this->source); })()), "valoracion", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valoracionmascotas</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comentarioshospedaje"]) || array_key_exists("comentarioshospedaje", $context) ? $context["comentarioshospedaje"] : (function () { throw new RuntimeError('Variable "comentarioshospedaje" does not exist.', 26, $this->source); })()), "valoracionmascotas", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["comentarioshospedaje"]) || array_key_exists("comentarioshospedaje", $context) ? $context["comentarioshospedaje"] : (function () { throw new RuntimeError('Variable "comentarioshospedaje" does not exist.', 30, $this->source); })()), "fechacreacion", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comentarioshospedaje"]) || array_key_exists("comentarioshospedaje", $context) ? $context["comentarioshospedaje"] : (function () { throw new RuntimeError('Variable "comentarioshospedaje" does not exist.', 30, $this->source); })()), "fechacreacion", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 34
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["comentarioshospedaje"]) || array_key_exists("comentarioshospedaje", $context) ? $context["comentarioshospedaje"] : (function () { throw new RuntimeError('Variable "comentarioshospedaje" does not exist.', 34, $this->source); })()), "activo", [], "any", false, false, false, 34)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comentarioshospedaje_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["comentarioshospedaje"]) || array_key_exists("comentarioshospedaje", $context) ? $context["comentarioshospedaje"] : (function () { throw new RuntimeError('Variable "comentarioshospedaje" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "comentarioshospedaje/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "comentarioshospedaje/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  144 => 39,  136 => 34,  129 => 30,  122 => 26,  115 => 22,  108 => 18,  101 => 14,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Comentarios{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Detalles Comentarios</h1>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('comentarioshospedaje_index') }}\">Volver</a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ comentarioshospedaje.id }}</td>
            </tr>
            <tr>
                <th>Comentario</th>
                <td>{{ comentarioshospedaje.comentario }}</td>
            </tr>
            <tr>
                <th>Valoracion</th>
                <td>{{ comentarioshospedaje.valoracion }}</td>
            </tr>
            <tr>
                <th>Valoracionmascotas</th>
                <td>{{ comentarioshospedaje.valoracionmascotas }}</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>{{ comentarioshospedaje.fechacreacion ? comentarioshospedaje.fechacreacion|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>{{ comentarioshospedaje.activo ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('comentarioshospedaje_edit', {'id': comentarioshospedaje.id}) }}\">Editar</a>

    {{ include('comentarioshospedaje/_delete_form.html.twig') }}
</div>
{% endblock %}
", "comentarioshospedaje/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\comentarioshospedaje\\show.html.twig");
    }
}
