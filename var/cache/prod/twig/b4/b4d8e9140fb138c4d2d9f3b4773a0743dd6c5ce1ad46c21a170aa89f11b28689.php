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
class __TwigTemplate_34935f1da8f501b2a2f8e5b69dc45517e4bdafbfec62ffd039149e3ede594c09 extends Template
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
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('header', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/header.css\">
";
    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            $context["nombre"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31);
            // line 32
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32)) {
                // line 33
                echo "              ";
                $context["nombre"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "nombre", [], "any", false, false, false, 33);
                // line 34
                echo "            ";
            }
            // line 35
            echo "            <div class=\"dropdown\">
              <a id=\"session\" class=\"nav-link header dropdown-toggle mr-1\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"white-space:initial\">
                ";
            // line 37
            echo twig_escape_filter($this->env, ($context["nombre"] ?? null), "html", null, true);
            echo " 
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                ";
            // line 40
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 40), "idperfil", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), 1)) {
                // line 41
                echo "                  <a class=\"dropdown-item drop-text\" href=\"/home/back\">Mantenimiento</a>
                  <hr>
                ";
            }
            // line 44
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "idperfil", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), 2)) {
                // line 45
                echo "                  <a class=\"dropdown-item drop-text\" href=\"/registrousuario/editar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\">Perfil</a>
                  <hr>
                  <a class=\"dropdown-item drop-text\" href=\"/registrousuario/cuentacliente/";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\">Mi cuenta</a>
                  <hr>
                ";
            }
            // line 50
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50), "idperfil", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), 3)) {
                // line 51
                echo "                  <a class=\"dropdown-item drop-text\" href=\"/proveedores/editar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 65,  146 => 61,  139 => 56,  130 => 51,  127 => 50,  121 => 47,  115 => 45,  112 => 44,  107 => 41,  105 => 40,  99 => 37,  95 => 35,  92 => 34,  89 => 33,  86 => 32,  83 => 31,  81 => 30,  73 => 24,  58 => 5,  54 => 4,  49 => 2,  45 => 1,  41 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/header.html.twig");
    }
}
