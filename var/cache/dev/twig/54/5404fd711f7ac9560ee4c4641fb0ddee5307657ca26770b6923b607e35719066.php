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

/* clientes/editarperfil.html.twig */
class __TwigTemplate_f0a06926e8e4da51d08317fe84d8363555645d96bc76d504c5feab28750192b5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clientes/editarperfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clientes/editarperfil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clientes/editarperfil.html.twig", 1);
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
              <form id=\"form-register\" action=\"/registrousuario/guardar\" method=\"post\">
                <div class=\"row\">
                  ";
        // line 22
        $context["valinputid"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22);
        // line 23
        echo "                  ";
        $context["valinputname"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 23, $this->source); })()), "nombre", [], "any", false, false, false, 23);
        // line 24
        echo "                  ";
        $context["valinputsurname"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 24, $this->source); })()), "apellidos", [], "any", false, false, false, 24);
        // line 25
        echo "                  ";
        $context["valinputemail"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25);
        // line 26
        echo "                  ";
        $context["valinputpassword"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 26, $this->source); })()), "password", [], "any", false, false, false, 26);
        // line 27
        echo "                  ";
        $context["valinputphone"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 27, $this->source); })()), "telefono", [], "any", false, false, false, 27);
        // line 28
        echo "                  ";
        $context["valinputaddress"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 28, $this->source); })()), "direccion", [], "any", false, false, false, 28);
        // line 29
        echo "                  ";
        $context["valinputadmin1"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 29, $this->source); })()), "admin1code", [], "any", false, false, false, 29);
        // line 30
        echo "                  ";
        $context["valinputadmin2"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 30, $this->source); })()), "admin2code", [], "any", false, false, false, 30);
        // line 31
        echo "                  ";
        $context["valinputadmin3"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 31, $this->source); })()), "admin3code", [], "any", false, false, false, 31);
        // line 32
        echo "                  <input id=\"inputhiddenaction\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["createedit"]) || array_key_exists("createedit", $context) ? $context["createedit"] : (function () { throw new RuntimeError('Variable "createedit" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">
                <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <input type=\"hidden\" class=\"form-control\" id=\"inputid\" name=\"inputid\" nombre=\"id\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["valinputid"]) || array_key_exists("valinputid", $context) ? $context["valinputid"] : (function () { throw new RuntimeError('Variable "valinputid" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\">
                      <label for=\"inputname\">Nombre</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputname\" name=\"inputname\" nombre=\"nombre\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["valinputname"]) || array_key_exists("valinputname", $context) ? $context["valinputname"] : (function () { throw new RuntimeError('Variable "valinputname" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    ";
        // line 42
        if (twig_test_empty((isset($context["valinputsurname"]) || array_key_exists("valinputsurname", $context) ? $context["valinputsurname"] : (function () { throw new RuntimeError('Variable "valinputsurname" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "                      ";
            $context["valinputsurname"] = "NULL";
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                    ";
        if (0 !== twig_compare((isset($context["valinputsurname"]) || array_key_exists("valinputsurname", $context) ? $context["valinputsurname"] : (function () { throw new RuntimeError('Variable "valinputsurname" does not exist.', 45, $this->source); })()), "NULL")) {
            // line 46
            echo "                      <div class=\"form-group\">
                        <label for=\"inputsurname\">Apellidos</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputsurname\" name=\"inputsurname\" nombre=\"apellidos\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["valinputsurname"]) || array_key_exists("valinputsurname", $context) ? $context["valinputsurname"] : (function () { throw new RuntimeError('Variable "valinputsurname" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\">
                        ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "apellidos", [], "array", true, true, false, 49)) {
                // line 50
                echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 50, $this->source); })()), "apellidos", [], "array", false, false, false, 50), "html", null, true);
                echo "</p>
                        ";
            }
            // line 52
            echo "                      </div>
                    ";
        }
        // line 54
        echo "                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputemail\">Email</label>
                      <input type=\"email\" class=\"form-control\" id=\"inputemail\" name=\"inputemail\" placeholder=\"name@example.com\" nombre=\"email\"  value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["valinputemail"]) || array_key_exists("valinputemail", $context) ? $context["valinputemail"] : (function () { throw new RuntimeError('Variable "valinputemail" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "email", [], "array", true, true, false, 63)) {
            // line 64
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 64, $this->source); })()), "email", [], "array", false, false, false, 64), "html", null, true);
            echo "</p>
                      ";
        }
        // line 66
        echo "                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputphone\">Teléfono</label>
                      <input type=\"tel\" class=\"form-control\" id=\"inputphone\" name=\"inputphone\" nombre=\"teléfono\"  value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["valinputphone"]) || array_key_exists("valinputphone", $context) ? $context["valinputphone"] : (function () { throw new RuntimeError('Variable "valinputphone" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "telefono", [], "array", true, true, false, 72)) {
            // line 73
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 73, $this->source); })()), "telefono", [], "array", false, false, false, 73), "html", null, true);
            echo "</p>
                      ";
        }
        // line 75
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputpw\">Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw\" name=\"inputpw\" laceholder=\"Mínimo 8 caracteres\" nombre=\"contraseña\"  value=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["valinputpassword"]) || array_key_exists("valinputpassword", $context) ? $context["valinputpassword"] : (function () { throw new RuntimeError('Variable "valinputpassword" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "password", [], "array", true, true, false, 85)) {
            // line 86
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 86, $this->source); })()), "password", [], "array", false, false, false, 86), "html", null, true);
            echo "</p>
                      ";
        }
        // line 88
        echo "                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputpw2\">Confirmar Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw2\" name=\"inputpw2\" laceholder=\"Mínimo 8 caracteres\" nombre=\"confirmar contraseña\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["valinputpassword"]) || array_key_exists("valinputpassword", $context) ? $context["valinputpassword"] : (function () { throw new RuntimeError('Variable "valinputpassword" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "password", [], "array", true, true, false, 94)) {
            // line 95
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 95, $this->source); })()), "password", [], "array", false, false, false, 95), "html", null, true);
            echo "</p>
                      ";
        }
        // line 97
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10\">
                    <div class=\"form-group\">
                      <label for=\"inputaddress\">Dirección</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputaddress\" name=\"inputaddress\" nombre=\"dirección\"  value=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["valinputaddress"]) || array_key_exists("valinputaddress", $context) ? $context["valinputaddress"] : (function () { throw new RuntimeError('Variable "valinputaddress" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "direccion", [], "array", true, true, false, 107)) {
            // line 108
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 108, $this->source); })()), "direccion", [], "array", false, false, false, 108), "html", null, true);
            echo "</p>
                      ";
        }
        // line 110
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"autonomia\">Comunidad Autónoma:</label>
                        <select class=\"form-control\" name=\"autonomia\" id=\"autonomia\">
                        <option value=\"\">Seleccione Autonomía</option>
                          ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geocomunidades"]) || array_key_exists("geocomunidades", $context) ? $context["geocomunidades"] : (function () { throw new RuntimeError('Variable "geocomunidades" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["geocomunidad"]) {
            // line 122
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geocomunidad"], "admin1code", [], "any", false, false, false, 122), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geocomunidad"], "name", [], "any", false, false, false, 122), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geocomunidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                        </select>
                        ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "autonomia", [], "array", true, true, false, 125)) {
            // line 126
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 126, $this->source); })()), "autonomia", [], "array", false, false, false, 126), "html", null, true);
            echo "</p>
                        ";
        }
        // line 128
        echo "                        <input name=\"inputhiddenadmin1\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin1"]) || array_key_exists("valinputadmin1", $context) ? $context["valinputadmin1"] : (function () { throw new RuntimeError('Variable "valinputadmin1" does not exist.', 128, $this->source); })()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"provincias\">Provincias:</label>
                        <select class=\"form-control\" name=\"provincias\" id=\"provincias\" disabled>
                          <option value=\"\">Seleccione Provincia</option>
                        </select>
                        ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "provincias", [], "array", true, true, false, 137)) {
            // line 138
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 138, $this->source); })()), "provincias", [], "array", false, false, false, 138), "html", null, true);
            echo "</p>
                        ";
        }
        // line 140
        echo "                        <input name=\"inputhiddenadmin2\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin2"]) || array_key_exists("valinputadmin2", $context) ? $context["valinputadmin2"] : (function () { throw new RuntimeError('Variable "valinputadmin2" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-12 col-lg-3\">
                      <div class=\"form-group\">
                        <label for=\"poblacion\">Población:</label>
                        <select class=\"form-control\" name=\"poblacion\" id=\"poblacion\" disabled>
                          <option value=\"\">Seleccione Poblacion</option>
                        </select>
                        ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "poblacion", [], "array", true, true, false, 149)) {
            // line 150
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 150, $this->source); })()), "poblacion", [], "array", false, false, false, 150), "html", null, true);
            echo "</p>
                        ";
        }
        // line 152
        echo "                        <input name=\"inputhiddenadmin3\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin3"]) || array_key_exists("valinputadmin3", $context) ? $context["valinputadmin3"] : (function () { throw new RuntimeError('Variable "valinputadmin3" does not exist.', 152, $this->source); })()), "html", null, true);
        echo "\">
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

<!--Modal-->
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

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "  ";
        $context["modal"] = "hide";
        // line 199
        echo "  ";
        $context["message"] = "";
        // line 200
        echo "  ";
        $context["img"] = "";
        // line 201
        echo "  ";
        $context["title"] = "";
        // line 202
        echo "  
  ";
        // line 203
        if (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 203, $this->source); })()), "edit")) {
            // line 204
            echo "    ";
            $context["modal"] = "show";
            // line 205
            echo "    ";
            $context["message"] = "Registro modificado satisfactoriamente.";
            // line 206
            echo "    ";
            $context["img"] = "/img/ico/dog_pilot.ico";
            // line 207
            echo "    ";
            $context["title"] = "Guardado!!";
            // line 208
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 208, $this->source); })()), "error")) {
            // line 209
            echo "    ";
            $context["modal"] = "show";
            // line 210
            echo "    ";
            $context["message"] = "No se ha podido realizar la modificación. Por favor, vuelva a intentarlo.";
            // line 211
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 212
            echo "    ";
            $context["title"] = "Error!!";
            // line 213
            echo "  ";
        }
        // line 214
        echo "  <script>
    \$(document).ready(function (){
      var surname = \"\";
      if (\$('#inputsurname').length){
        var surname = \"ok\";
      };
      var statusmodal = '";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 220, $this->source); })()), "html", null, true);
        echo "';
      var img = '";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 221, $this->source); })()), "html", null, true);
        echo "';
      var title = '";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 222, $this->source); })()), "html", null, true);
        echo "';
      if (surname == 'ok'){
        if (statusmodal == 'edit'){
          url = \"/registrousuario/cuentacliente\";
        }else if (statusmodal == 'error' ){
          url = \"/registrousuario\";
        }else if (statusmodal == 'new'){
          url = \"/login\";
        }
      }else{
        if (statusmodal == 'edit'){
          url = \"/proveedores/cuentaproveedor\";
        }else if (statusmodal == 'error' ){
          url = \"/registrousuario\";
        }
      }
      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 240, $this->source); })()), "html", null, true);
        echo "')
      \$('#myModal').modal('";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 241, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').on('hide.bs.modal', function(){
        localStorage.clear();
        location.href = url;
      });
    });
  </script>
  <script src=\"/js/registrousuario.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clientes/editarperfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 241,  540 => 240,  519 => 222,  515 => 221,  511 => 220,  503 => 214,  500 => 213,  497 => 212,  494 => 211,  491 => 210,  488 => 209,  485 => 208,  482 => 207,  479 => 206,  476 => 205,  473 => 204,  471 => 203,  468 => 202,  465 => 201,  462 => 200,  459 => 199,  456 => 198,  446 => 197,  391 => 152,  385 => 150,  383 => 149,  370 => 140,  364 => 138,  362 => 137,  349 => 128,  343 => 126,  341 => 125,  338 => 124,  327 => 122,  323 => 121,  310 => 110,  304 => 108,  302 => 107,  298 => 106,  287 => 97,  281 => 95,  279 => 94,  275 => 93,  268 => 88,  262 => 86,  260 => 85,  256 => 84,  245 => 75,  239 => 73,  237 => 72,  233 => 71,  226 => 66,  220 => 64,  218 => 63,  214 => 62,  204 => 54,  200 => 52,  194 => 50,  192 => 49,  188 => 48,  184 => 46,  181 => 45,  178 => 44,  175 => 43,  173 => 42,  166 => 38,  161 => 36,  153 => 32,  150 => 31,  147 => 30,  144 => 29,  141 => 28,  138 => 27,  135 => 26,  132 => 25,  129 => 24,  126 => 23,  124 => 22,  111 => 11,  101 => 10,  89 => 6,  79 => 5,  61 => 3,  38 => 1,);
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
              <form id=\"form-register\" action=\"/registrousuario/guardar\" method=\"post\">
                <div class=\"row\">
                  {% set valinputid = customer.id %}
                  {% set valinputname = customer.nombre %}
                  {% set valinputsurname = customer.apellidos %}
                  {% set valinputemail = customer.email %}
                  {% set valinputpassword = customer.password %}
                  {% set valinputphone = customer.telefono %}
                  {% set valinputaddress = customer.direccion %}
                  {% set valinputadmin1 = customer.admin1code %}
                  {% set valinputadmin2 = customer.admin2code %}
                  {% set valinputadmin3 = customer.admin3code %}
                  <input id=\"inputhiddenaction\" type=\"hidden\" value=\"{{ createedit }}\">
                <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <input type=\"hidden\" class=\"form-control\" id=\"inputid\" name=\"inputid\" nombre=\"id\" value=\"{{ valinputid }}\">
                      <label for=\"inputname\">Nombre</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputname\" name=\"inputname\" nombre=\"nombre\" value=\"{{ valinputname }}\">
                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    {% if valinputsurname is empty %}
                      {% set valinputsurname = \"NULL\" %}
                    {% endif %}
                    {% if valinputsurname != \"NULL\" %}
                      <div class=\"form-group\">
                        <label for=\"inputsurname\">Apellidos</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputsurname\" name=\"inputsurname\" nombre=\"apellidos\" value=\"{{ valinputsurname }}\">
                        {% if arrayerror[\"apellidos\"] is defined %}
                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"apellidos\"]}}</p>
                        {% endif %}
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputemail\">Email</label>
                      <input type=\"email\" class=\"form-control\" id=\"inputemail\" name=\"inputemail\" placeholder=\"name@example.com\" nombre=\"email\"  value=\"{{ valinputemail }}\">
                      {% if arrayerror[\"email\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"email\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputphone\">Teléfono</label>
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
                      <label for=\"inputpw\">Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw\" name=\"inputpw\" laceholder=\"Mínimo 8 caracteres\" nombre=\"contraseña\"  value=\"{{ valinputpassword }}\">
                      {% if arrayerror[\"password\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"password\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputpw2\">Confirmar Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw2\" name=\"inputpw2\" laceholder=\"Mínimo 8 caracteres\" nombre=\"confirmar contraseña\" value=\"{{ valinputpassword }}\">
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
                      <label for=\"inputaddress\">Dirección</label>
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
                        <label for=\"autonomia\">Comunidad Autónoma:</label>
                        <select class=\"form-control\" name=\"autonomia\" id=\"autonomia\">
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
                        <label for=\"provincias\">Provincias:</label>
                        <select class=\"form-control\" name=\"provincias\" id=\"provincias\" disabled>
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
                        <label for=\"poblacion\">Población:</label>
                        <select class=\"form-control\" name=\"poblacion\" id=\"poblacion\" disabled>
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

<!--Modal-->
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
  
  {% if querystatus == 'edit' %}
    {% set modal = 'show' %}
    {% set message = 'Registro modificado satisfactoriamente.' %}
    {% set img = '/img/ico/dog_pilot.ico' %}
    {% set title = 'Guardado!!' %}
  {% elseif querystatus == 'error' %}
    {% set modal = 'show' %}
    {% set message = 'No se ha podido realizar la modificación. Por favor, vuelva a intentarlo.' %}
    {% set img = '/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% endif %}
  <script>
    \$(document).ready(function (){
      var surname = \"\";
      if (\$('#inputsurname').length){
        var surname = \"ok\";
      };
      var statusmodal = '{{ querystatus }}';
      var img = '{{ img }}';
      var title = '{{ title }}';
      if (surname == 'ok'){
        if (statusmodal == 'edit'){
          url = \"/registrousuario/cuentacliente\";
        }else if (statusmodal == 'error' ){
          url = \"/registrousuario\";
        }else if (statusmodal == 'new'){
          url = \"/login\";
        }
      }else{
        if (statusmodal == 'edit'){
          url = \"/proveedores/cuentaproveedor\";
        }else if (statusmodal == 'error' ){
          url = \"/registrousuario\";
        }
      }
      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('{{ message }}')
      \$('#myModal').modal('{{ modal }}');
      \$('#myModal').on('hide.bs.modal', function(){
        localStorage.clear();
        location.href = url;
      });
    });
  </script>
  <script src=\"/js/registrousuario.js\"></script>
{% endblock %}", "clientes/editarperfil.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\clientes\\editarperfil.html.twig");
    }
}
