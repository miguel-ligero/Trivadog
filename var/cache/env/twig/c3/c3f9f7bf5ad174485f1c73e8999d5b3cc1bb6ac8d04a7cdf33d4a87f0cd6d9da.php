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
class __TwigTemplate_9ffe4c90b171bd4d4e332e494de7b2af6ed159b8457ff0e5b92fadb1f1e025e8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/header.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "  <nav class=\"navbar navbar-expand-lg navbar-dark \">
    <a class=\"navbar-brand\" href=\"/\">
      <img src=\"http://trivadog.mipropia.com/trivadog/public/img/brand/logo.ico\" width=\"150\" height=\"150\" class=\"d-inline-block align-top\" alt=\"logo\">
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
        // line 21
        echo "        ";
        // line 24
        echo "      </ul>
      <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0 pt-lg-5 pt-md-4 align-items-lg-center\">
        <li class=\"nav-item\">
          <a class=\"nav-link header mr-1\" href=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/form\">Regístrate</a>
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
                echo "                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/home/back\">Mantenimiento</a>
                  ";
                // line 43
                echo "                ";
            }
            // line 44
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "idperfil", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), 2)) {
                // line 45
                echo "                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/editar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\">Perfil</a>
                  ";
                // line 47
                echo "                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/cuentacliente/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\">Mi cuenta</a>
                 ";
                // line 49
                echo "                ";
            }
            // line 50
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "idperfil", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), 3)) {
                // line 51
                echo "                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/editar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\">Perfil</a>
                  ";
                // line 53
                echo "                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor\">Mi cuenta proveedor</a>
                  ";
                // line 55
                echo "                ";
            }
            // line 56
            echo "                <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/logout\">Logout</a>
              </div>
            </div>
          </li>
        ";
        } else {
            // line 61
            echo "          <li class=\"nav-item\">
            <a id=\"session\" class=\"nav-link header mr-1\" href=\"http://trivadog.mipropia.com/trivadog/public/login\">Iniciar sesión</a>
          </li>
        ";
        }
        // line 65
        echo "      </ul>
    </div>
  </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 65,  167 => 61,  160 => 56,  157 => 55,  154 => 53,  149 => 51,  146 => 50,  143 => 49,  138 => 47,  133 => 45,  130 => 44,  127 => 43,  124 => 41,  122 => 40,  116 => 37,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  100 => 31,  98 => 30,  90 => 24,  88 => 21,  73 => 5,  66 => 4,  58 => 2,  51 => 1,  44 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/header.css\">
{% endblock %}
{% block header %}
  <nav class=\"navbar navbar-expand-lg navbar-dark \">
    <a class=\"navbar-brand\" href=\"/\">
      <img src=\"http://trivadog.mipropia.com/trivadog/public/img/brand/logo.ico\" width=\"150\" height=\"150\" class=\"d-inline-block align-top\" alt=\"logo\">
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
        </li> #}
        {# <li class=\"nav-item\">
          <a class=\"nav-link header\" href=\"#\">Tiendas</a>
        </li> #}
      </ul>
      <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0 pt-lg-5 pt-md-4 align-items-lg-center\">
        <li class=\"nav-item\">
          <a class=\"nav-link header mr-1\" href=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/form\">Regístrate</a>
        </li>
        <li class=\"nav-item\">
          {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% set nombre = app.user.email %}
            {% if app.user.nombre %}
              {% set nombre = app.user.nombre %}
            {% endif %}
            <div class=\"dropdown\">
              <a id=\"session\" class=\"nav-link header dropdown-toggle mr-1\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"white-space:initial\">
                {{ nombre }} 
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                {% if app.user.idperfil.id == 1 %}
                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/home/back\">Mantenimiento</a>
                  {# <hr> #}
                {% endif %}
                {% if app.user.idperfil.id == 2 %}
                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/editar/{{ app.user.id }}\">Perfil</a>
                  {# <hr> #}
                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/cuentacliente/{{ app.user.id }}\">Mi cuenta</a>
                 {#  <hr> #}
                {% endif %}
                {% if app.user.idperfil.id == 3 %}
                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/editar/{{ app.user.id }}\">Perfil</a>
                  {# <hr> #}
                  <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor\">Mi cuenta proveedor</a>
                  {# <hr> #}
                {% endif %}
                <a class=\"dropdown-item drop-text\" href=\"http://trivadog.mipropia.com/trivadog/public/logout\">Logout</a>
              </div>
            </div>
          </li>
        {% else %}
          <li class=\"nav-item\">
            <a id=\"session\" class=\"nav-link header mr-1\" href=\"http://trivadog.mipropia.com/trivadog/public/login\">Iniciar sesión</a>
          </li>
        {% endif %}
      </ul>
    </div>
  </nav>
{% endblock %}", "header.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\header.html.twig");
    }
}
