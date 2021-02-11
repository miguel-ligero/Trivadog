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

/* header.html.twig */
class __TwigTemplate_a0ecb28b3711e591e0e26a33fc0de5c4524559be04acae3163c90ddd3c81a421 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/header.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "  <nav class=\"navbar navbar-expand-lg navbar-dark \">
    <a class=\"navbar-brand\" href=\"/\">
      <img src=\"/img/brand/logo.ico\" width=\"150\" height=\"150\" class=\"d-inline-block align-top\" alt=\"logo\">
      <span class=\"tri\">Tri</span><span class=\"va\">va</span><span class=\"dog\">dog</span>
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse pt-3\" id=\"navbarTogglerDemo02\">
      <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0 pt-lg-5 pt-md-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link header\" href=\"/\">Alojamientos</a>
        </li>
        ";
        // line 24
        echo "      </ul>
      <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0 pt-lg-5 pt-md-4 align-items-lg-center\">
        <li class=\"nav-item\">
          <a class=\"nav-link header mr-1\" href=\"/registrousuario/form\">Regístrate</a>
        </li>
        <li class=\"nav-item\">
          ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 31
            echo "            ";
            $context["nombre"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31);
            // line 32
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32)) {
                // line 33
                echo "              ";
                $context["nombre"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "nombre", [], "any", false, false, false, 33);
                // line 34
                echo "            ";
            }
            // line 35
            echo "            <div class=\"dropdown\">
              <a id=\"session\" class=\"nav-link header dropdown-toggle mr-1\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"white-space:initial\">
                ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 37, $this->source); })()), "html", null, true);
            echo " 
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                ";
            // line 40
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "idperfil", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), 1)) {
                // line 41
                echo "                  <a class=\"dropdown-item drop-text\" href=\"/home/back\">Mantenimiento</a>
                  <hr>
                ";
            }
            // line 44
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "idperfil", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), 2)) {
                // line 45
                echo "                  <a class=\"dropdown-item drop-text\" href=\"/registrousuario/editar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\">Perfil</a>
                  <hr>
                  <a class=\"dropdown-item drop-text\" href=\"/registrousuario/cuentacliente/";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\">Mi cuenta</a>
                  <hr>
                ";
            }
            // line 50
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "idperfil", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), 3)) {
                // line 51
                echo "                  <a class=\"dropdown-item drop-text\" href=\"/proveedores/editar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\">Perfil</a>
                  <hr>
                  <a class=\"dropdown-item drop-text\" href=\"/proveedores/cuentaproveedor\">Mi cuenta proveedor</a>
                  <hr>
                ";
            }
            // line 56
            echo "                <a class=\"dropdown-item drop-text\" href=\"/logout\">Logout</a>
              </div>
            </div>
          </li>
        ";
        } else {
            // line 61
            echo "          <li class=\"nav-item\">
            <a id=\"session\" class=\"nav-link header mr-1\" href=\"/login\">Iniciar sesión</a>
          </li>
        ";
        }
        // line 65
        echo "      </ul>
    </div>
  </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  182 => 65,  176 => 61,  169 => 56,  160 => 51,  157 => 50,  151 => 47,  145 => 45,  142 => 44,  137 => 41,  135 => 40,  129 => 37,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  103 => 24,  88 => 5,  78 => 4,  67 => 2,  57 => 1,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/header.css\">
{% endblock %}
{% block header %}
  <nav class=\"navbar navbar-expand-lg navbar-dark \">
    <a class=\"navbar-brand\" href=\"/\">
      <img src=\"/img/brand/logo.ico\" width=\"150\" height=\"150\" class=\"d-inline-block align-top\" alt=\"logo\">
      <span class=\"tri\">Tri</span><span class=\"va\">va</span><span class=\"dog\">dog</span>
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse pt-3\" id=\"navbarTogglerDemo02\">
      <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0 pt-lg-5 pt-md-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link header\" href=\"/\">Alojamientos</a>
        </li>
        {# <li class=\"nav-item\">
          <a class=\"nav-link header\" href=\"#\">Servicios</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link header\" href=\"#\">Tiendas</a>
        </li> #}
      </ul>
      <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0 pt-lg-5 pt-md-4 align-items-lg-center\">
        <li class=\"nav-item\">
          <a class=\"nav-link header mr-1\" href=\"/registrousuario/form\">Regístrate</a>
        </li>
        <li class=\"nav-item\">
          {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% set nombre = app.user.email %}
            {% if app.user.nombre %}
              {% set nombre = app.user.nombre %}
            {% endif %}
            <div class=\"dropdown\">
              <a id=\"session\" class=\"nav-link header dropdown-toggle mr-1\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"white-space:initial\">
                {{nombre}} 
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                {% if app.user.idperfil.id == 1 %}
                  <a class=\"dropdown-item drop-text\" href=\"/home/back\">Mantenimiento</a>
                  <hr>
                {% endif %}
                {% if app.user.idperfil.id == 2 %}
                  <a class=\"dropdown-item drop-text\" href=\"/registrousuario/editar/{{ app.user.id }}\">Perfil</a>
                  <hr>
                  <a class=\"dropdown-item drop-text\" href=\"/registrousuario/cuentacliente/{{ app.user.id }}\">Mi cuenta</a>
                  <hr>
                {% endif %}
                {% if app.user.idperfil.id == 3 %}
                  <a class=\"dropdown-item drop-text\" href=\"/proveedores/editar/{{ app.user.id }}\">Perfil</a>
                  <hr>
                  <a class=\"dropdown-item drop-text\" href=\"/proveedores/cuentaproveedor\">Mi cuenta proveedor</a>
                  <hr>
                {% endif %}
                <a class=\"dropdown-item drop-text\" href=\"/logout\">Logout</a>
              </div>
            </div>
          </li>
        {% else %}
          <li class=\"nav-item\">
            <a id=\"session\" class=\"nav-link header mr-1\" href=\"/login\">Iniciar sesión</a>
          </li>
        {% endif %}
      </ul>
    </div>
  </nav>
{% endblock %}", "header.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/header.html.twig");
    }
}
