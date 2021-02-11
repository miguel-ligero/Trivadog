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

/* proveedores/formregistroproveedor.html.twig */
class __TwigTemplate_1327b5f106dbf4246a9aaceb538109ad72263eb51cfc07379a99e8416bb3b3e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedores/formregistroproveedor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedores/formregistroproveedor.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proveedores/formregistroproveedor.html.twig", 1);
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
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/registry.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/modal.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"container\">
  <div class=\"row align-items-center py-4\"></div>
  
  <div class=\"row justify-content-center\" style=\"min-height: 500px\">
    <div class=\"col-12 \">
      <div class=\"row\">
        <div class=\"col-1\"></div>
        <div class=\"col-10\">
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <form id=\"form-register\" action=\"/proveedores/guardar\" method=\"post\">
                <div class=\"row\">
                  ";
        // line 23
        $context["valinputname"] = "";
        // line 24
        echo "                  ";
        $context["valinputemail"] = "";
        // line 25
        echo "                  ";
        $context["valinputphone"] = "";
        // line 26
        echo "                   ";
        $context["valinputpassword"] = "";
        // line 27
        echo "                  ";
        $context["valinputaddress"] = "";
        // line 28
        echo "                  ";
        $context["valinputadmin1"] = "";
        // line 29
        echo "                  ";
        $context["valinputadmin2"] = "";
        // line 30
        echo "                  ";
        $context["valinputadmin3"] = "";
        // line 31
        echo "
                  ";
        // line 32
        if ((isset($context["arrayerror"]) || array_key_exists("arrayerror", $context))) {
            // line 33
            echo "                    ";
            $context["valinputname"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 33, $this->source); })()), "nombre", [], "any", false, false, false, 33);
            // line 34
            echo "                    ";
            $context["valinputemail"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34);
            // line 35
            echo "                    ";
            $context["valinputphone"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 35, $this->source); })()), "telefono", [], "any", false, false, false, 35);
            // line 36
            echo "                    ";
            $context["valinputpassword"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36);
            // line 37
            echo "                    ";
            $context["valinputaddress"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 37, $this->source); })()), "direccion", [], "any", false, false, false, 37);
            // line 38
            echo "                    ";
            $context["valinputadmin1"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 38, $this->source); })()), "admin1code", [], "any", false, false, false, 38);
            // line 39
            echo "                    ";
            $context["valinputadmin2"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 39, $this->source); })()), "admin2code", [], "any", false, false, false, 39);
            // line 40
            echo "                    ";
            $context["valinputadmin3"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 40, $this->source); })()), "admin3code", [], "any", false, false, false, 40);
            // line 41
            echo "                  ";
        }
        // line 42
        echo "                  <input id=\"inputhiddenaction\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["createedit"]) || array_key_exists("createedit", $context) ? $context["createedit"] : (function () { throw new RuntimeError('Variable "createedit" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10 px-3\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Nombre proveedor</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputname\" name=\"inputname\" nombre=\"nombre\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["valinputname"]) || array_key_exists("valinputname", $context) ? $context["valinputname"] : (function () { throw new RuntimeError('Variable "valinputname" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "nombre", [], "array", true, true, false, 48)) {
            // line 49
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 49, $this->source); })()), "nombre", [], "array", false, false, false, 49), "html", null, true);
            echo "</p>
                      ";
        }
        // line 51
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5 px-3\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Email</label>
                      <input type=\"email\" class=\"form-control\" id=\"inputemail\" name=\"inputemail\" placeholder=\"name@example.com\" nombre=\"email\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["valinputemail"]) || array_key_exists("valinputemail", $context) ? $context["valinputemail"] : (function () { throw new RuntimeError('Variable "valinputemail" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "email", [], "array", true, true, false, 61)) {
            // line 62
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 62, $this->source); })()), "email", [], "array", false, false, false, 62), "html", null, true);
            echo "</p>
                      ";
        }
        // line 64
        echo "                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5 px-3\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Teléfono</label>
                      <input type=\"tel\" class=\"form-control\" id=\"inputphone\" name=\"inputphone\" nombre=\"teléfono\"  value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["valinputphone"]) || array_key_exists("valinputphone", $context) ? $context["valinputphone"] : (function () { throw new RuntimeError('Variable "valinputphone" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "telefono", [], "array", true, true, false, 70)) {
            // line 71
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 71, $this->source); })()), "telefono", [], "array", false, false, false, 71), "html", null, true);
            echo "</p>
                      ";
        }
        // line 73
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw\" name=\"inputpw\" placeholder=\"\" nombre=\"contraseña\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["valinputpassword"]) || array_key_exists("valinputpassword", $context) ? $context["valinputpassword"] : (function () { throw new RuntimeError('Variable "valinputpassword" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "password", [], "array", true, true, false, 83)) {
            // line 84
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 84, $this->source); })()), "password", [], "array", false, false, false, 84), "html", null, true);
            echo "</p>
                      ";
        }
        // line 86
        echo "                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Confirmar Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw2\" name=\"inputpw2\" placeholder=\"\" nombre=\"confirmar contraseña\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["valinputpassword"]) || array_key_exists("valinputpassword", $context) ? $context["valinputpassword"] : (function () { throw new RuntimeError('Variable "valinputpassword" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "password", [], "array", true, true, false, 92)) {
            // line 93
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 93, $this->source); })()), "password", [], "array", false, false, false, 93), "html", null, true);
            echo "</p>
                      ";
        }
        // line 95
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Dirección</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputaddress\" name=\"inputaddress\" nombre=\"dirección\"  value=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["valinputaddress"]) || array_key_exists("valinputaddress", $context) ? $context["valinputaddress"] : (function () { throw new RuntimeError('Variable "valinputaddress" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "direccion", [], "array", true, true, false, 105)) {
            // line 106
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 106, $this->source); })()), "direccion", [], "array", false, false, false, 106), "html", null, true);
            echo "</p>
                      ";
        }
        // line 108
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Comunidad Autónoma:</label>
                        <select class=\"form-control\" name=\"autonomia\" id=\"autonomia\" nombre=\"autonomía\" onchange=\"getProvincias()\">
                        <option value=\"\">Seleccione Autonomía</option>
                          ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geocomunidades"]) || array_key_exists("geocomunidades", $context) ? $context["geocomunidades"] : (function () { throw new RuntimeError('Variable "geocomunidades" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["geocomunidad"]) {
            // line 120
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geocomunidad"], "admin1code", [], "any", false, false, false, 120), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geocomunidad"], "name", [], "any", false, false, false, 120), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geocomunidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                        </select>
                        ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "autonomia", [], "array", true, true, false, 123)) {
            // line 124
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 124, $this->source); })()), "autonomia", [], "array", false, false, false, 124), "html", null, true);
            echo "</p>
                        ";
        }
        // line 126
        echo "                        <input name=\"inputhiddenadmin1\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin1"]) || array_key_exists("valinputadmin1", $context) ? $context["valinputadmin1"] : (function () { throw new RuntimeError('Variable "valinputadmin1" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Provincias:</label>
                        <select class=\"form-control\" name=\"provincias\" id=\"provincias\" nombre=\"provincia\" onchange=\"getPoblacion()\" disabled>
                          <option value=\"\">Seleccione Provincia</option>
                        </select>
                        ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "provincias", [], "array", true, true, false, 135)) {
            // line 136
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 136, $this->source); })()), "provincias", [], "array", false, false, false, 136), "html", null, true);
            echo "</p>
                        ";
        }
        // line 138
        echo "                        <input name=\"inputhiddenadmin2\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin2"]) || array_key_exists("valinputadmin2", $context) ? $context["valinputadmin2"] : (function () { throw new RuntimeError('Variable "valinputadmin2" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Población:</label>
                        <select class=\"form-control\" name=\"poblacion\" id=\"poblacion\" nombre=\"población\" disabled>
                          <option value=\"\">Seleccione Poblacion</option>
                        </select>
                        ";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "poblacion", [], "array", true, true, false, 147)) {
            // line 148
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 148, $this->source); })()), "poblacion", [], "array", false, false, false, 148), "html", null, true);
            echo "</p>
                        ";
        }
        // line 150
        echo "                        <input name=\"inputhiddenadmin3\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin3"]) || array_key_exists("valinputadmin3", $context) ? $context["valinputadmin3"] : (function () { throw new RuntimeError('Variable "valinputadmin3" does not exist.', 150, $this->source); })()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10\">
                    <div class=\"input-group mb-3\">
                      <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                          <input id=\"checkbox-accept\" type=\"checkbox\" aria-label=\"Checkbox for following text input\" required>
                        </div>
                      </div>
                      <label for=\"checkbox-accept\"><a href=\"#\" class=\"link-n\">Acepta las condiciones</a></label>
                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row pb-4\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10\">
                    <button id=\"btn-send\" type=\"submit\" class=\"btn btn-primary btn-lg btn-home ml-2\" control=\"On\" data-toggle=\"tooltip\" title=\"Por favor, complete el formulario\">Guardar</button>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class=\"col-1\"></div>
      </div>
    </div>
  </div>
  <div class=\"row pb-4\"></div>
</div>

<!--modal-->
<div id=\"myModal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\"></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\"></p>
      </div>
      <div class=\"modal-footer\">
        <button id=\"closeModal\" type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 209
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
        echo "  ";
        $context["modal"] = "hide";
        // line 211
        echo "  ";
        $context["message"] = "";
        // line 212
        echo "  ";
        $context["img"] = "";
        // line 213
        echo "  ";
        $context["title"] = "";
        // line 214
        echo "  
  ";
        // line 215
        if (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 215, $this->source); })()), "new")) {
            // line 216
            echo "    ";
            $context["modal"] = "show";
            // line 217
            echo "    ";
            $context["message"] = "Registro realizado satisfactoriamente.";
            // line 218
            echo "    ";
            $context["img"] = "/img/ico/dog_pilot.ico";
            // line 219
            echo "    ";
            $context["title"] = "Bienvenido!!";
            // line 220
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 220, $this->source); })()), "edit")) {
            // line 221
            echo "    ";
            $context["modal"] = "show";
            // line 222
            echo "    ";
            $context["message"] = "Modificación realizada satisfactoriamente.";
            // line 223
            echo "    ";
            $context["img"] = "/img/ico/dog_fitness.ico";
            // line 224
            echo "    ";
            $context["title"] = "Datos guardados!!";
            // line 225
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 225, $this->source); })()), "error")) {
            // line 226
            echo "    ";
            $context["modal"] = "show";
            // line 227
            echo "    ";
            $context["message"] = "No se ha podido realizar el registro. Por favor, vuelva a intentarlo.";
            // line 228
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 229
            echo "    ";
            $context["title"] = "Error!!";
            // line 230
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 230, $this->source); })()), "faltan")) {
            // line 231
            echo "    ";
            $context["modal"] = "show";
            // line 232
            echo "    ";
            $context["message"] = "Faltan datos o no tienen un formato válido.";
            // line 233
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 234
            echo "    ";
            $context["title"] = "Error!!";
            // line 235
            echo "  ";
        }
        // line 236
        echo "  <script src=\"/js/registroproveedores.js\"></script>
  <script>
    \$(document).ready(function (){
      var statusmodal = '";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 239, $this->source); })()), "html", null, true);
        echo "';
      var img = '";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 240, $this->source); })()), "html", null, true);
        echo "';
      var title = '";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 241, $this->source); })()), "html", null, true);
        echo "';
      if (statusmodal == 'new'){
        url = \"/login\";
      }else if (statusmodal == 'edit'){
        url = \"/proveedores/cuentaproveedor/\";
      }else if (statusmodal == 'error'){
        url = \"/proveedores/index\";
      }else if (statusmodal == 'faltan'){
        getComunidades();
      }

      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 254, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').modal('";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 255, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').on('hide.bs.modal', function(){
        if (statusmodal == 'faltan'){
          CargaLocalStorage();
          return;
        }else{
          localStorage.clear();
          location.href = url;
        }
      });
    });

    
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proveedores/formregistroproveedor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 255,  574 => 254,  558 => 241,  554 => 240,  550 => 239,  545 => 236,  542 => 235,  539 => 234,  536 => 233,  533 => 232,  530 => 231,  527 => 230,  524 => 229,  521 => 228,  518 => 227,  515 => 226,  512 => 225,  509 => 224,  506 => 223,  503 => 222,  500 => 221,  497 => 220,  494 => 219,  491 => 218,  488 => 217,  485 => 216,  483 => 215,  480 => 214,  477 => 213,  474 => 212,  471 => 211,  468 => 210,  458 => 209,  389 => 150,  383 => 148,  381 => 147,  368 => 138,  362 => 136,  360 => 135,  347 => 126,  341 => 124,  339 => 123,  336 => 122,  325 => 120,  321 => 119,  308 => 108,  302 => 106,  300 => 105,  296 => 104,  285 => 95,  279 => 93,  277 => 92,  273 => 91,  266 => 86,  260 => 84,  258 => 83,  254 => 82,  243 => 73,  237 => 71,  235 => 70,  231 => 69,  224 => 64,  218 => 62,  216 => 61,  212 => 60,  201 => 51,  195 => 49,  193 => 48,  189 => 47,  180 => 42,  177 => 41,  174 => 40,  171 => 39,  168 => 38,  165 => 37,  162 => 36,  159 => 35,  156 => 34,  153 => 33,  151 => 32,  148 => 31,  145 => 30,  142 => 29,  139 => 28,  136 => 27,  133 => 26,  130 => 25,  127 => 24,  125 => 23,  111 => 11,  101 => 10,  89 => 6,  79 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/registry.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/modal.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row align-items-center py-4\"></div>
  
  <div class=\"row justify-content-center\" style=\"min-height: 500px\">
    <div class=\"col-12 \">
      <div class=\"row\">
        <div class=\"col-1\"></div>
        <div class=\"col-10\">
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <form id=\"form-register\" action=\"/proveedores/guardar\" method=\"post\">
                <div class=\"row\">
                  {% set valinputname = \"\" %}
                  {% set valinputemail = \"\" %}
                  {% set valinputphone = \"\" %}
                   {% set valinputpassword = \"\" %}
                  {% set valinputaddress = \"\" %}
                  {% set valinputadmin1 = \"\" %}
                  {% set valinputadmin2 = \"\" %}
                  {% set valinputadmin3 = \"\" %}

                  {% if arrayerror is defined %}
                    {% set valinputname = provider.nombre %}
                    {% set valinputemail = provider.email %}
                    {% set valinputphone = provider.telefono %}
                    {% set valinputpassword = provider.password %}
                    {% set valinputaddress = provider.direccion %}
                    {% set valinputadmin1 = provider.admin1code %}
                    {% set valinputadmin2 = provider.admin2code %}
                    {% set valinputadmin3 = provider.admin3code %}
                  {% endif %}
                  <input id=\"inputhiddenaction\" type=\"hidden\" value=\"{{ createedit }}\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10 px-3\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Nombre proveedor</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputname\" name=\"inputname\" nombre=\"nombre\" value=\"{{ valinputname }}\">
                      {% if arrayerror[\"nombre\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"nombre\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5 px-3\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Email</label>
                      <input type=\"email\" class=\"form-control\" id=\"inputemail\" name=\"inputemail\" placeholder=\"name@example.com\" nombre=\"email\" value=\"{{ valinputemail }}\">
                      {% if arrayerror[\"email\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"email\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5 px-3\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Teléfono</label>
                      <input type=\"tel\" class=\"form-control\" id=\"inputphone\" name=\"inputphone\" nombre=\"teléfono\"  value=\"{{ valinputphone }}\">
                      {% if arrayerror[\"telefono\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"telefono\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw\" name=\"inputpw\" placeholder=\"\" nombre=\"contraseña\" value=\"{{ valinputpassword}}\">
                      {% if arrayerror[\"password\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"password\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Confirmar Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw2\" name=\"inputpw2\" placeholder=\"\" nombre=\"confirmar contraseña\" value=\"{{ valinputpassword}}\">
                      {% if arrayerror[\"password\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"password\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10\">
                    <div class=\"form-group\">
                      <label for=\"exampleFormControlInput1\">Dirección</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputaddress\" name=\"inputaddress\" nombre=\"dirección\"  value=\"{{ valinputaddress }}\">
                      {% if arrayerror[\"direccion\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"direccion\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Comunidad Autónoma:</label>
                        <select class=\"form-control\" name=\"autonomia\" id=\"autonomia\" nombre=\"autonomía\" onchange=\"getProvincias()\">
                        <option value=\"\">Seleccione Autonomía</option>
                          {% for geocomunidad in geocomunidades %}
                            <option value=\"{{geocomunidad.admin1code}}\">{{geocomunidad.name}}</option>
                          {% endfor %}
                        </select>
                        {% if arrayerror[\"autonomia\"] is defined %}
                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"autonomia\"]}}</p>
                        {% endif %}
                        <input name=\"inputhiddenadmin1\" type=\"hidden\" value=\"{{ valinputadmin1 }}\">
                      </div>
                    </div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Provincias:</label>
                        <select class=\"form-control\" name=\"provincias\" id=\"provincias\" nombre=\"provincia\" onchange=\"getPoblacion()\" disabled>
                          <option value=\"\">Seleccione Provincia</option>
                        </select>
                        {% if arrayerror[\"provincias\"] is defined %}
                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"provincias\"]}}</p>
                        {% endif %}
                        <input name=\"inputhiddenadmin2\" type=\"hidden\" value=\"{{ valinputadmin2 }}\">
                      </div>
                    </div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Población:</label>
                        <select class=\"form-control\" name=\"poblacion\" id=\"poblacion\" nombre=\"población\" disabled>
                          <option value=\"\">Seleccione Poblacion</option>
                        </select>
                        {% if arrayerror[\"poblacion\"] is defined %}
                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"poblacion\"]}}</p>
                        {% endif %}
                        <input name=\"inputhiddenadmin3\" type=\"hidden\" value=\"{{ valinputadmin3 }}\">
                      </div>
                    </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10\">
                    <div class=\"input-group mb-3\">
                      <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                          <input id=\"checkbox-accept\" type=\"checkbox\" aria-label=\"Checkbox for following text input\" required>
                        </div>
                      </div>
                      <label for=\"checkbox-accept\"><a href=\"#\" class=\"link-n\">Acepta las condiciones</a></label>
                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row pb-4\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10\">
                    <button id=\"btn-send\" type=\"submit\" class=\"btn btn-primary btn-lg btn-home ml-2\" control=\"On\" data-toggle=\"tooltip\" title=\"Por favor, complete el formulario\">Guardar</button>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class=\"col-1\"></div>
      </div>
    </div>
  </div>
  <div class=\"row pb-4\"></div>
</div>

<!--modal-->
<div id=\"myModal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\"></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\"></p>
      </div>
      <div class=\"modal-footer\">
        <button id=\"closeModal\" type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
  {% set modal = 'hide' %}
  {% set message = \"\" %}
  {% set img = \"\" %}
  {% set title = \"\" %}
  
  {% if querystatus == 'new' %}
    {% set modal = 'show' %}
    {% set message = 'Registro realizado satisfactoriamente.' %}
    {% set img = '/img/ico/dog_pilot.ico' %}
    {% set title = 'Bienvenido!!' %}
  {% elseif querystatus == 'edit' %}
    {% set modal = 'show' %}
    {% set message = 'Modificación realizada satisfactoriamente.' %}
    {% set img = '/img/ico/dog_fitness.ico' %}
    {% set title = 'Datos guardados!!' %}
  {% elseif querystatus == 'error' %}
    {% set modal = 'show' %}
    {% set message = 'No se ha podido realizar el registro. Por favor, vuelva a intentarlo.' %}
    {% set img = '/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% elseif querystatus == 'faltan' %}
    {% set modal = 'show' %}
    {% set message = 'Faltan datos o no tienen un formato válido.' %}
    {% set img = '/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% endif %}
  <script src=\"/js/registroproveedores.js\"></script>
  <script>
    \$(document).ready(function (){
      var statusmodal = '{{ querystatus }}';
      var img = '{{ img }}';
      var title = '{{ title }}';
      if (statusmodal == 'new'){
        url = \"/login\";
      }else if (statusmodal == 'edit'){
        url = \"/proveedores/cuentaproveedor/\";
      }else if (statusmodal == 'error'){
        url = \"/proveedores/index\";
      }else if (statusmodal == 'faltan'){
        getComunidades();
      }

      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('{{ message }}');
      \$('#myModal').modal('{{ modal }}');
      \$('#myModal').on('hide.bs.modal', function(){
        if (statusmodal == 'faltan'){
          CargaLocalStorage();
          return;
        }else{
          localStorage.clear();
          location.href = url;
        }
      });
    });

    
  </script>
{% endblock %}", "proveedores/formregistroproveedor.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\proveedores\\formregistroproveedor.html.twig");
    }
}
