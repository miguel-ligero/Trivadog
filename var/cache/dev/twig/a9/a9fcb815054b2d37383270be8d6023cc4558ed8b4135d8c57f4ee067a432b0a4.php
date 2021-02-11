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

/* home/back.html.twig */
class __TwigTemplate_3f07ec236eaa21b194302d5faaec57980d9280a638cb723a8099dc9aabdd9d97 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/back.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/back.html.twig", 1);
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
    <div class=\"row align-items-center py-4\" style=\"height: 20%\">
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/clientes/index\" role=\"button\">Clientes</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/comentarioshospedaje/index\" role=\"button\">Comentarios</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/habitaciones/index\" role=\"button\">Habitaciones</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/hospedaje/index\" role=\"button\">Hospedaje</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/perfil/index\" role=\"button\">Perfil</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/servicios/index\" role=\"button\">Servicios</a>
        </div>
       <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/tipohospedaje/index\" role=\"button\">Tipo hospedaje</a>
        </div>
    </div>
    <div class=\"row justify-content-md-center\" style=\"height: 30%; min-height: 400px\">
        <div class=\"col-12 h-75\">
            
        </div>
    </div>
    <div class=\"row pb-4\" style=\"height: 20%\"></div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  131 => 41,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row align-items-center py-4\" style=\"height: 20%\">
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/clientes/index\" role=\"button\">Clientes</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/comentarioshospedaje/index\" role=\"button\">Comentarios</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/habitaciones/index\" role=\"button\">Habitaciones</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/hospedaje/index\" role=\"button\">Hospedaje</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/perfil/index\" role=\"button\">Perfil</a>
        </div>
        <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/servicios/index\" role=\"button\">Servicios</a>
        </div>
       <div class=\"col-6 col-md-4 col-lg-3\">
          <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/tipohospedaje/index\" role=\"button\">Tipo hospedaje</a>
        </div>
    </div>
    <div class=\"row justify-content-md-center\" style=\"height: 30%; min-height: 400px\">
        <div class=\"col-12 h-75\">
            
        </div>
    </div>
    <div class=\"row pb-4\" style=\"height: 20%\"></div>
</div>


{% endblock %}

{% block javascripts %}

{% endblock %}

", "home/back.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\home\\back.html.twig");
    }
}
