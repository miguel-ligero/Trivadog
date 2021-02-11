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

/* registrousuario/index.html.twig */
class __TwigTemplate_960d0a0059682134d23cafa6278e07cb36f98caaa38c00b9211867a7558ff4c4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registrousuario/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registrousuario/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/registry.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
              <form id=\"form-register\" action=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/guardar\" method=\"post\">
                <div class=\"row\">
                  ";
        // line 23
        $context["valinputname"] = "";
        // line 24
        echo "                  ";
        $context["valinputsurname"] = "";
        // line 25
        echo "                  ";
        $context["valinputemail"] = "";
        // line 26
        echo "                  ";
        $context["valinputphone"] = "";
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
            $context["valinputname"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 33, $this->source); })()), "nombre", [], "any", false, false, false, 33);
            // line 34
            echo "                    ";
            $context["valinputsurname"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 34, $this->source); })()), "apellidos", [], "any", false, false, false, 34);
            // line 35
            echo "                    ";
            $context["valinputemail"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35);
            // line 36
            echo "                    ";
            $context["valinputphone"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 36, $this->source); })()), "telefono", [], "any", false, false, false, 36);
            // line 37
            echo "                    ";
            $context["valinputaddress"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 37, $this->source); })()), "direccion", [], "any", false, false, false, 37);
            // line 38
            echo "                    ";
            $context["valinputadmin1"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 38, $this->source); })()), "admin1code", [], "any", false, false, false, 38);
            // line 39
            echo "                    ";
            $context["valinputadmin2"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 39, $this->source); })()), "admin2code", [], "any", false, false, false, 39);
            // line 40
            echo "                    ";
            $context["valinputadmin3"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 40, $this->source); })()), "admin3code", [], "any", false, false, false, 40);
            // line 41
            echo "                  ";
        }
        // line 42
        echo "                  
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputname\">Nombre</label>
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
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputsurname\">Apellidos</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputsurname\" name=\"inputsurname\" nombre=\"apellidos\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["valinputsurname"]) || array_key_exists("valinputsurname", $context) ? $context["valinputsurname"] : (function () { throw new RuntimeError('Variable "valinputsurname" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "apellidos", [], "array", true, true, false, 57)) {
            // line 58
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 58, $this->source); })()), "apellidos", [], "array", false, false, false, 58), "html", null, true);
            echo "</p>
                      ";
        }
        // line 60
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputemail\">Email</label>
                      <input type=\"email\" class=\"form-control\" id=\"inputemail\" name=\"inputemail\" placeholder=\"name@example.com\" nombre=\"email\"  value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["valinputemail"]) || array_key_exists("valinputemail", $context) ? $context["valinputemail"] : (function () { throw new RuntimeError('Variable "valinputemail" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "email", [], "array", true, true, false, 70)) {
            // line 71
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 71, $this->source); })()), "email", [], "array", false, false, false, 71), "html", null, true);
            echo "</p>
                      ";
        }
        // line 73
        echo "                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputphone\">Teléfono</label>
                      <input type=\"tel\" class=\"form-control\" id=\"inputphone\" name=\"inputphone\" nombre=\"teléfono\"  value=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["valinputphone"]) || array_key_exists("valinputphone", $context) ? $context["valinputphone"] : (function () { throw new RuntimeError('Variable "valinputphone" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "telefono", [], "array", true, true, false, 79)) {
            // line 80
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 80, $this->source); })()), "telefono", [], "array", false, false, false, 80), "html", null, true);
            echo "</p>
                      ";
        }
        // line 82
        echo "                    </div>
                  </div>
                  <div class=\"col-1\"></div>
                </div>
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputpw\">Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw\" name=\"inputpw\" placeholder=\"\" nombre=\"contraseña\"  >
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
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputpw2\">Confirmar Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw2\" name=\"inputpw2\" placeholder=\"\" nombre=\"confirmar contraseña\"  >
                      ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "password", [], "array", true, true, false, 101)) {
            // line 102
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 102, $this->source); })()), "password", [], "array", false, false, false, 102), "html", null, true);
            echo "</p>
                      ";
        }
        // line 104
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
        // line 113
        echo twig_escape_filter($this->env, (isset($context["valinputaddress"]) || array_key_exists("valinputaddress", $context) ? $context["valinputaddress"] : (function () { throw new RuntimeError('Variable "valinputaddress" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "\">
                      ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "direccion", [], "array", true, true, false, 114)) {
            // line 115
            echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 115, $this->source); })()), "direccion", [], "array", false, false, false, 115), "html", null, true);
            echo "</p>
                      ";
        }
        // line 117
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
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geocomunidades"]) || array_key_exists("geocomunidades", $context) ? $context["geocomunidades"] : (function () { throw new RuntimeError('Variable "geocomunidades" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["geocomunidad"]) {
            // line 129
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geocomunidad"], "admin1code", [], "any", false, false, false, 129), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geocomunidad"], "name", [], "any", false, false, false, 129), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geocomunidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                        </select>
                        ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "autonomia", [], "array", true, true, false, 132)) {
            // line 133
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 133, $this->source); })()), "autonomia", [], "array", false, false, false, 133), "html", null, true);
            echo "</p>
                        ";
        }
        // line 135
        echo "                        <input name=\"inputhiddenadmin1\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin1"]) || array_key_exists("valinputadmin1", $context) ? $context["valinputadmin1"] : (function () { throw new RuntimeError('Variable "valinputadmin1" does not exist.', 135, $this->source); })()), "html", null, true);
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
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "provincias", [], "array", true, true, false, 144)) {
            // line 145
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 145, $this->source); })()), "provincias", [], "array", false, false, false, 145), "html", null, true);
            echo "</p>
                        ";
        }
        // line 147
        echo "                        <input name=\"inputhiddenadmin2\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin2"]) || array_key_exists("valinputadmin2", $context) ? $context["valinputadmin2"] : (function () { throw new RuntimeError('Variable "valinputadmin2" does not exist.', 147, $this->source); })()), "html", null, true);
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
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "poblacion", [], "array", true, true, false, 156)) {
            // line 157
            echo "                          <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 157, $this->source); })()), "poblacion", [], "array", false, false, false, 157), "html", null, true);
            echo "</p>
                        ";
        }
        // line 159
        echo "                        <input name=\"inputhiddenadmin3\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin3"]) || array_key_exists("valinputadmin3", $context) ? $context["valinputadmin3"] : (function () { throw new RuntimeError('Variable "valinputadmin3" does not exist.', 159, $this->source); })()), "html", null, true);
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
                          <input id=\"checkboxaccept\" type=\"checkbox\" aria-label=\"Checkbox for following text input\" required>
                        </div>
                      </div>
                      <label for=\"checkboxaccept\"><a href=\"#\" class=\"link-n\">Acepta las condiciones</a></label>
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

    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 219
        echo "  
  ";
        // line 220
        $context["modal"] = "hide";
        // line 221
        echo "  ";
        $context["message"] = "";
        // line 222
        echo "  ";
        $context["img"] = "";
        // line 223
        echo "  ";
        $context["title"] = "";
        // line 224
        echo "  
  ";
        // line 225
        if (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 225, $this->source); })()), "new")) {
            // line 226
            echo "    ";
            $context["modal"] = "show";
            // line 227
            echo "    ";
            $context["message"] = "Registro realizado satisfactoriamente.";
            // line 228
            echo "    ";
            $context["img"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_pilot.ico";
            // line 229
            echo "    ";
            $context["title"] = "Bienvenido!!";
            // line 230
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 230, $this->source); })()), "edit")) {
            // line 231
            echo "    ";
            $context["modal"] = "show";
            // line 232
            echo "    ";
            $context["message"] = "Modificación realizada satisfactoriamente.";
            // line 233
            echo "    ";
            $context["img"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_pilot.ico";
            // line 234
            echo "    ";
            $context["title"] = "Datos guardados!!";
            // line 235
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 235, $this->source); })()), "error")) {
            // line 236
            echo "    ";
            $context["modal"] = "show";
            // line 237
            echo "    ";
            $context["message"] = "No se ha podido realizar el registro. Por favor, vuelva a intentarlo.";
            // line 238
            echo "    ";
            $context["img"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_scream.ico";
            // line 239
            echo "    ";
            $context["title"] = "Error!!";
            // line 240
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 240, $this->source); })()), "faltan")) {
            // line 241
            echo "    ";
            $context["modal"] = "show";
            // line 242
            echo "    ";
            $context["message"] = "Faltan datos o no tienen un formato válido.";
            // line 243
            echo "    ";
            $context["img"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_scream.ico";
            // line 244
            echo "    ";
            $context["title"] = "Error!!";
            // line 245
            echo "  ";
        }
        // line 246
        echo "  
  <script>
    \$(document).ready(function () {
      InicializarModal();
    });

    function InicializarModal() {
      var statusmodal = '";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 253, $this->source); })()), "html", null, true);
        echo "';
      var img = '";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 254, $this->source); })()), "html", null, true);
        echo "';
      var title = '";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 255, $this->source); })()), "html", null, true);
        echo "';
      if (statusmodal == 'new'){
        url = \"http://trivadog.mipropia.com/trivadog/public/login\";
      }else if (statusmodal == 'edit'){
        url = \"http://trivadog.mipropia.com/trivadog/public/registrousuario/cuentacliente\";
      }else if (statusmodal == 'error'){
        url = \"http://trivadog.mipropia.com/trivadog/public/registrousuario\";
      }else if (statusmodal == 'faltan'){
        getComunidades();
      }

      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 268, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').modal('";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 269, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').on('hide.bs.modal', function(){
        if (statusmodal == 'faltan'){
          CargaLocalStorage();
          getComunidades();
          return;
        }else{
          localStorage.clear();
          location.href = url;
        }
      });
    }
  </script>
  <script src=\"http://trivadog.mipropia.com/trivadog/public/js/registrousuario.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registrousuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 269,  564 => 268,  548 => 255,  544 => 254,  540 => 253,  531 => 246,  528 => 245,  525 => 244,  522 => 243,  519 => 242,  516 => 241,  513 => 240,  510 => 239,  507 => 238,  504 => 237,  501 => 236,  498 => 235,  495 => 234,  492 => 233,  489 => 232,  486 => 231,  483 => 230,  480 => 229,  477 => 228,  474 => 227,  471 => 226,  469 => 225,  466 => 224,  463 => 223,  460 => 222,  457 => 221,  455 => 220,  452 => 219,  445 => 218,  379 => 159,  373 => 157,  371 => 156,  358 => 147,  352 => 145,  350 => 144,  337 => 135,  331 => 133,  329 => 132,  326 => 131,  315 => 129,  311 => 128,  298 => 117,  292 => 115,  290 => 114,  286 => 113,  275 => 104,  269 => 102,  267 => 101,  259 => 95,  253 => 93,  251 => 92,  239 => 82,  233 => 80,  231 => 79,  227 => 78,  220 => 73,  214 => 71,  212 => 70,  208 => 69,  197 => 60,  191 => 58,  189 => 57,  185 => 56,  178 => 51,  172 => 49,  170 => 48,  166 => 47,  159 => 42,  156 => 41,  153 => 40,  150 => 39,  147 => 38,  144 => 37,  141 => 36,  138 => 35,  135 => 34,  132 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  118 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  104 => 23,  90 => 11,  83 => 10,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/registry.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
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
              <form id=\"form-register\" action=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/guardar\" method=\"post\">
                <div class=\"row\">
                  {% set valinputname = \"\" %}
                  {% set valinputsurname = \"\" %}
                  {% set valinputemail = \"\" %}
                  {% set valinputphone = \"\" %}
                  {% set valinputaddress = \"\" %}
                  {% set valinputadmin1 = \"\" %}
                  {% set valinputadmin2 = \"\" %}
                  {% set valinputadmin3 = \"\" %}

                  {% if arrayerror is defined %}
                    {% set valinputname = customer.nombre %}
                    {% set valinputsurname = customer.apellidos %}
                    {% set valinputemail = customer.email %}
                    {% set valinputphone = customer.telefono %}
                    {% set valinputaddress = customer.direccion %}
                    {% set valinputadmin1 = customer.admin1code %}
                    {% set valinputadmin2 = customer.admin2code %}
                    {% set valinputadmin3 = customer.admin3code %}
                  {% endif %}
                  
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputname\">Nombre</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputname\" name=\"inputname\" nombre=\"nombre\" value=\"{{ valinputname }}\">
                      {% if arrayerror[\"nombre\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"nombre\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputsurname\">Apellidos</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputsurname\" name=\"inputsurname\" nombre=\"apellidos\" value=\"{{ valinputsurname }}\">
                      {% if arrayerror[\"apellidos\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"apellidos\"]}}</p>
                      {% endif %}
                    </div>
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
                      <input type=\"password\" class=\"form-control\" id=\"inputpw\" name=\"inputpw\" placeholder=\"\" nombre=\"contraseña\"  >
                      {% if arrayerror[\"password\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"password\"]}}</p>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"col-12 col-lg-5\">
                    <div class=\"form-group\">
                      <label for=\"inputpw2\">Confirmar Contraseña</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputpw2\" name=\"inputpw2\" placeholder=\"\" nombre=\"confirmar contraseña\"  >
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
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-12 col-lg-10\">
                    <div class=\"input-group mb-3\">
                      <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                          <input id=\"checkboxaccept\" type=\"checkbox\" aria-label=\"Checkbox for following text input\" required>
                        </div>
                      </div>
                      <label for=\"checkboxaccept\"><a href=\"#\" class=\"link-n\">Acepta las condiciones</a></label>
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
    {% set img = 'http://trivadog.mipropia.com/trivadog/public/img/ico/dog_pilot.ico' %}
    {% set title = 'Bienvenido!!' %}
  {% elseif querystatus == 'edit' %}
    {% set modal = 'show' %}
    {% set message = 'Modificación realizada satisfactoriamente.' %}
    {% set img = 'http://trivadog.mipropia.com/trivadog/public/img/ico/dog_pilot.ico' %}
    {% set title = 'Datos guardados!!' %}
  {% elseif querystatus == 'error' %}
    {% set modal = 'show' %}
    {% set message = 'No se ha podido realizar el registro. Por favor, vuelva a intentarlo.' %}
    {% set img = 'http://trivadog.mipropia.com/trivadog/public/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% elseif querystatus == 'faltan' %}
    {% set modal = 'show' %}
    {% set message = 'Faltan datos o no tienen un formato válido.' %}
    {% set img = 'http://trivadog.mipropia.com/trivadog/public/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% endif %}
  
  <script>
    \$(document).ready(function () {
      InicializarModal();
    });

    function InicializarModal() {
      var statusmodal = '{{ querystatus }}';
      var img = '{{ img }}';
      var title = '{{ title }}';
      if (statusmodal == 'new'){
        url = \"http://trivadog.mipropia.com/trivadog/public/login\";
      }else if (statusmodal == 'edit'){
        url = \"http://trivadog.mipropia.com/trivadog/public/registrousuario/cuentacliente\";
      }else if (statusmodal == 'error'){
        url = \"http://trivadog.mipropia.com/trivadog/public/registrousuario\";
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
          getComunidades();
          return;
        }else{
          localStorage.clear();
          location.href = url;
        }
      });
    }
  </script>
  <script src=\"http://trivadog.mipropia.com/trivadog/public/js/registrousuario.js\"></script>
{% endblock %}", "registrousuario/index.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/registrousuario/index.html.twig");
    }
}
