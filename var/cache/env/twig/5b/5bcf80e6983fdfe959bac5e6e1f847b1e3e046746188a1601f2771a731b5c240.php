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

/* comentarioshospedaje/index.html.twig */
class __TwigTemplate_d0a00eb6d6590fdfe53c812aeb938bd630f62d34cbf3880d9b9fb8ad70891582 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comentarioshospedaje/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comentarioshospedaje/index.html.twig", 1);
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
    <h1>Comentarios</h1>
    <div>
        <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back");
        echo "\">Volver</a>
    </div>
    <div>
        <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comentarioshospedaje_new");
        echo "\">Crear nuevo</a>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Comentario</th>
                <th>Valoracion</th>
                <th>Valoracionmascotas</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarioshospedajes"]) || array_key_exists("comentarioshospedajes", $context) ? $context["comentarioshospedajes"] : (function () { throw new RuntimeError('Variable "comentarioshospedajes" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comentarioshospedaje"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentarioshospedaje"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentarioshospedaje"], "comentario", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentarioshospedaje"], "valoracion", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentarioshospedaje"], "valoracionmascotas", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comentarioshospedaje_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comentarioshospedaje"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Detalles</a>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comentarioshospedaje_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["comentarioshospedaje"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"7\">No se ha encontrado</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentarioshospedaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "comentarioshospedaje/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  124 => 37,  115 => 33,  111 => 32,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  91 => 26,  86 => 25,  70 => 12,  64 => 9,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Comentarios{% endblock %} #}

{% block body %}
<div class=\"container\">
    <h1>Comentarios</h1>
    <div>
        <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('back') }}\">Volver</a>
    </div>
    <div>
        <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('comentarioshospedaje_new') }}\">Crear nuevo</a>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Comentario</th>
                <th>Valoracion</th>
                <th>Valoracionmascotas</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for comentarioshospedaje in comentarioshospedajes %}
            <tr>
                <td>{{ comentarioshospedaje.id }}</td>
                <td>{{ comentarioshospedaje.comentario }}</td>
                <td>{{ comentarioshospedaje.valoracion }}</td>
                <td>{{ comentarioshospedaje.valoracionmascotas }}</td>
                <td>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('comentarioshospedaje_show', {'id': comentarioshospedaje.id}) }}\">Detalles</a>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('comentarioshospedaje_edit', {'id': comentarioshospedaje.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">No se ha encontrado</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
</div>
{% endblock %}
", "comentarioshospedaje/index.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/comentarioshospedaje/index.html.twig");
    }
}
