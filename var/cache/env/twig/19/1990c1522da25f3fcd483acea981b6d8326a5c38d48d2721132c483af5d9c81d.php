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

/* habitaciones/formulariohabitacion.html.twig */
class __TwigTemplate_e57a5609864f6ee09f233299f61ec3493578ac847b991b5df728fb7b10481d13 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/formulariohabitacion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitaciones/formulariohabitacion.html.twig", 1);
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
        echo "  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/provider.css\">
   <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
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
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
    <div class=\"row justify-content-center\">
      <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
        <div>
          <a id=\"btn-new\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor/";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" >Volver</a>
        </div>
        <div> 
          ";
        // line 19
        $context["disable"] = "";
        // line 20
        echo "          ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20))) {
            // line 21
            echo "            ";
            $context["disable"] = "hidden";
            // line 22
            echo "          ";
        }
        // line 23
        echo "          <a id=\"btn-new\" href=\"\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\" aria-controls=\"collapseExample\" ";
        echo twig_escape_filter($this->env, (isset($context["disable"]) || array_key_exists("disable", $context) ? $context["disable"] : (function () { throw new RuntimeError('Variable "disable" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ">Editar</a>
          <div class=\"collapse\" id=\"collapse-nuevo\">
            <div class=\"card-body pt-0 menu-pos\">
              <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/editar/";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"menu\">Datos habitación</a>
              <hr class=\"my-1\">
              <a href=\"http://trivadog.mipropia.com/trivadog/public/servicioshabitaciones/formularioservicios/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"menu\">Servicios</a>
              <hr class=\"my-1\">
              <a href=\"http://trivadog.mipropia.com/trivadog/public/multimedia/";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "\" class=\"menu\">Imagenes</a>
              <hr class=\"my-1\">
            </div>
          </div>
        </div>
        <div></div>
      </div>
      <div class=\"col-10\">
        <div class=\"row\">
          <div class=\"col-12 px-0 pb-3\">
            <form id=\"form-register\" action=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/guardar\" method=\"post\">
              ";
        // line 41
        $context["valinputid"] = "";
        // line 42
        echo "              ";
        $context["valinputname"] = "";
        // line 43
        echo "              ";
        $context["valinputadults"] = "";
        // line 44
        echo "              ";
        $context["valinputchildren"] = "";
        // line 45
        echo "              ";
        $context["valinputpets"] = "";
        // line 46
        echo "              ";
        $context["valinputprice"] = "";
        // line 47
        echo "              ";
        $context["valinputhostid"] = "";
        // line 48
        echo "              ";
        $context["valinputhostname"] = "";
        // line 49
        echo "              
              ";
        // line 50
        if (( !twig_test_empty((isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 50, $this->source); })())) || 0 === twig_compare((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 50, $this->source); })()), true))) {
            // line 51
            echo "                ";
            $context["valinputid"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51);
            // line 52
            echo "                ";
            $context["valinputname"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 52, $this->source); })()), "nombre", [], "any", false, false, false, 52);
            // line 53
            echo "                ";
            $context["valinputadults"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 53, $this->source); })()), "numadultos", [], "any", false, false, false, 53);
            // line 54
            echo "                ";
            $context["valinputchildren"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 54, $this->source); })()), "numinfantiles", [], "any", false, false, false, 54);
            // line 55
            echo "                ";
            $context["valinputpets"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 55, $this->source); })()), "nummascotas", [], "any", false, false, false, 55);
            // line 56
            echo "                ";
            $context["valinputprice"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 56, $this->source); })()), "precio", [], "any", false, false, false, 56);
            // line 57
            echo "                ";
            if (0 === twig_compare((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 57, $this->source); })()), false)) {
                // line 58
                echo "                  ";
                $context["valinputhostname"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 58, $this->source); })()), 0, [], "array", false, false, false, 58), "nombre", [], "any", false, false, false, 58);
                // line 59
                echo "                  ";
                $context["valinputhostid"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 59, $this->source); })()), 0, [], "array", false, false, false, 59), "id", [], "any", false, false, false, 59);
                // line 60
                echo "                ";
            } else {
                // line 61
                echo "                  ";
                $context["valinputhostname"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 61, $this->source); })()), "idhospedaje", [], "any", false, false, false, 61), "nombre", [], "any", false, false, false, 61);
                // line 62
                echo "                  ";
                $context["valinputhostid"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 62, $this->source); })()), "idhospedaje", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62);
                // line 63
                echo "                ";
            }
            // line 64
            echo "              ";
        }
        // line 65
        echo "              <div class=\"row\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-5\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Nombre hospedaje</label>
                    ";
        // line 70
        $context["statusinput"] = "";
        // line 71
        echo "                    ";
        if (0 === twig_compare((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 71, $this->source); })()), true)) {
            // line 72
            echo "                      ";
            $context["statusinput"] = "readonly";
            // line 73
            echo "                      <input type=\"text\" class=\"form-control\" id=\"inputhostname\" name=\"inputhostname\" nombre=\"namehospedaje\"  value=\"";
            echo twig_escape_filter($this->env, (isset($context["valinputhostname"]) || array_key_exists("valinputhostname", $context) ? $context["valinputhostname"] : (function () { throw new RuntimeError('Variable "valinputhostname" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["statusinput"]) || array_key_exists("statusinput", $context) ? $context["statusinput"] : (function () { throw new RuntimeError('Variable "statusinput" does not exist.', 73, $this->source); })()), "html", null, true);
            echo ">
                      <input type=\"hidden\" class=\"form-control\" id=\"inputhostid\" name=\"inputhostid\" nombre=\"idhospedaje\"  value=\"";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["valinputhostid"]) || array_key_exists("valinputhostid", $context) ? $context["valinputhostid"] : (function () { throw new RuntimeError('Variable "valinputhostid" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "\">
                      ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "idhospedaje", [], "array", true, true, false, 75)) {
                // line 76
                echo "                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 76, $this->source); })()), "idhospedaje", [], "array", false, false, false, 76), "html", null, true);
                echo "</p>
                      ";
            }
            // line 78
            echo "                    ";
        } else {
            // line 79
            echo "                      <select class=\"form-control\" id=\"inputhostid\" name=\"inputhostid\">
                      ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 81
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 81), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                      </select>
                    ";
        }
        // line 85
        echo "                  </div>
                </div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row\">
                <input type=\"hidden\" class=\"form-control\" id=\"inputid\" name=\"inputid\" nombre=\"inputid\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["valinputid"]) || array_key_exists("valinputid", $context) ? $context["valinputid"] : (function () { throw new RuntimeError('Variable "valinputid" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-10 px-3\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Nombre habitacion</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputname\" name=\"inputname\" nombre=\"nombre\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["valinputname"]) || array_key_exists("valinputname", $context) ? $context["valinputname"] : (function () { throw new RuntimeError('Variable "valinputname" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "nombre", [], "array", true, true, false, 96)) {
            // line 97
            echo "                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 97, $this->source); })()), "nombre", [], "array", false, false, false, 97), "html", null, true);
            echo "</p>
                    ";
        }
        // line 99
        echo "                  </div>
                </div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-5 px-3\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Número adultos</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputadults\" name=\"inputadults\" placeholder=\"\" nombre=\"adultos\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["valinputadults"]) || array_key_exists("valinputadults", $context) ? $context["valinputadults"] : (function () { throw new RuntimeError('Variable "valinputadults" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "numadultos", [], "array", true, true, false, 109)) {
            // line 110
            echo "                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 110, $this->source); })()), "numadultos", [], "array", false, false, false, 110), "html", null, true);
            echo "</p>
                    ";
        }
        // line 112
        echo "                  </div>
                </div>
                <div class=\"col-12 col-lg-5 px-3\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Número niños</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputchildren\" name=\"inputchildren\" nombre=\"infantiles\"  value=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["valinputchildren"]) || array_key_exists("valinputchildren", $context) ? $context["valinputchildren"] : (function () { throw new RuntimeError('Variable "valinputchildren" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "numinfantiles", [], "array", true, true, false, 118)) {
            // line 119
            echo "                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 119, $this->source); })()), "numinfantiles", [], "array", false, false, false, 119), "html", null, true);
            echo "</p>
                    ";
        }
        // line 121
        echo "                  </div>
                </div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-5\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Número mascotas</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputpets\" name=\"inputpets\"  nombre=\"mascotas\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["valinputpets"]) || array_key_exists("valinputpets", $context) ? $context["valinputpets"] : (function () { throw new RuntimeError('Variable "valinputpets" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "nummascotas", [], "array", true, true, false, 131)) {
            // line 132
            echo "                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 132, $this->source); })()), "nummascotas", [], "array", false, false, false, 132), "html", null, true);
            echo "</p>
                    ";
        }
        // line 134
        echo "                  </div>
                </div>
                <div class=\"col-12 col-lg-5\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Precio</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputprice\" name=\"inputprice\"  nombre=\"precio\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["valinputprice"]) || array_key_exists("valinputprice", $context) ? $context["valinputprice"] : (function () { throw new RuntimeError('Variable "valinputprice" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "\" >
                    ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "precio", [], "array", true, true, false, 140)) {
            // line 141
            echo "                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 141, $this->source); })()), "precio", [], "array", false, false, false, 141), "html", null, true);
            echo "</p>
                    ";
        }
        // line 143
        echo "                  </div>
                </div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-10\"></div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row pb-4\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-10\">
                  <button id=\"btn-send\" type=\"submit\" class=\"btn btn-primary btn-lg btn-home ml-2\">Guardar</button>
                </div>
                <div class=\"col-1\"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
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
        <button id=\"closeModal\" type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 189
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        echo "  ";
        $context["modal"] = "hide";
        // line 191
        echo "  ";
        $context["message"] = "";
        // line 192
        echo "  ";
        $context["img"] = "";
        // line 193
        echo "  ";
        $context["title"] = "";
        // line 194
        echo "  ";
        if (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 194, $this->source); })()), "new")) {
            // line 195
            echo "    ";
            $context["modal"] = "show";
            // line 196
            echo "    ";
            $context["message"] = "Registro realizado satisfactoriamente. Ahora puede agregar fotos y servicios";
            // line 197
            echo "    ";
            $context["img"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_pilot.ico";
            // line 198
            echo "    ";
            $context["title"] = "Datos guardados!!";
            // line 199
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 199, $this->source); })()), "edit")) {
            // line 200
            echo "    ";
            $context["modal"] = "show";
            // line 201
            echo "    ";
            $context["message"] = "Modificación realizada satisfactoriamente.";
            // line 202
            echo "    ";
            $context["img"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_fitness.ico";
            // line 203
            echo "    ";
            $context["title"] = "Datos guardados!!";
            // line 204
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 204, $this->source); })()), "error")) {
            // line 205
            echo "    ";
            $context["modal"] = "show";
            // line 206
            echo "    ";
            $context["message"] = "No se ha podido realizar el registro. Por favor, vuelva a intentarlo.";
            // line 207
            echo "    ";
            $context["img"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_scream.ico";
            // line 208
            echo "    ";
            $context["title"] = "Error!!";
            // line 209
            echo "  ";
        }
        // line 210
        echo "  
  <script>
    \$(document).ready(function (){
      var statusmodal = '";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 213, $this->source); })()), "html", null, true);
        echo "';
      var img = '";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 214, $this->source); })()), "html", null, true);
        echo "';
      var title = '";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 215, $this->source); })()), "html", null, true);
        echo "';
      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 218, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').modal('";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 219, $this->source); })()), "html", null, true);
        echo "');
    });
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "habitaciones/formulariohabitacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 219,  522 => 218,  516 => 215,  512 => 214,  508 => 213,  503 => 210,  500 => 209,  497 => 208,  494 => 207,  491 => 206,  488 => 205,  485 => 204,  482 => 203,  479 => 202,  476 => 201,  473 => 200,  470 => 199,  467 => 198,  464 => 197,  461 => 196,  458 => 195,  455 => 194,  452 => 193,  449 => 192,  446 => 191,  443 => 190,  436 => 189,  385 => 143,  379 => 141,  377 => 140,  373 => 139,  366 => 134,  360 => 132,  358 => 131,  354 => 130,  343 => 121,  337 => 119,  335 => 118,  331 => 117,  324 => 112,  318 => 110,  316 => 109,  312 => 108,  301 => 99,  295 => 97,  293 => 96,  289 => 95,  281 => 90,  274 => 85,  270 => 83,  259 => 81,  255 => 80,  252 => 79,  249 => 78,  243 => 76,  241 => 75,  237 => 74,  230 => 73,  227 => 72,  224 => 71,  222 => 70,  215 => 65,  212 => 64,  209 => 63,  206 => 62,  203 => 61,  200 => 60,  197 => 59,  194 => 58,  191 => 57,  188 => 56,  185 => 55,  182 => 54,  179 => 53,  176 => 52,  173 => 51,  171 => 50,  168 => 49,  165 => 48,  162 => 47,  159 => 46,  156 => 45,  153 => 44,  150 => 43,  147 => 42,  145 => 41,  131 => 30,  126 => 28,  121 => 26,  114 => 23,  111 => 22,  108 => 21,  105 => 20,  103 => 19,  97 => 16,  90 => 11,  83 => 10,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/provider.css\">
   <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
    <div class=\"row justify-content-center\">
      <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
        <div>
          <a id=\"btn-new\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor/{{ page }}\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" >Volver</a>
        </div>
        <div> 
          {% set disable = \"\" %}
          {% if room.id is empty %}
            {% set disable = \"hidden\" %}
          {% endif %}
          <a id=\"btn-new\" href=\"\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\" aria-controls=\"collapseExample\" {{ disable }}>Editar</a>
          <div class=\"collapse\" id=\"collapse-nuevo\">
            <div class=\"card-body pt-0 menu-pos\">
              <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/editar/{{ room.id }}\" class=\"menu\">Datos habitación</a>
              <hr class=\"my-1\">
              <a href=\"http://trivadog.mipropia.com/trivadog/public/servicioshabitaciones/formularioservicios/{{ room.id }}\" class=\"menu\">Servicios</a>
              <hr class=\"my-1\">
              <a href=\"http://trivadog.mipropia.com/trivadog/public/multimedia/{{ room.id }}\" class=\"menu\">Imagenes</a>
              <hr class=\"my-1\">
            </div>
          </div>
        </div>
        <div></div>
      </div>
      <div class=\"col-10\">
        <div class=\"row\">
          <div class=\"col-12 px-0 pb-3\">
            <form id=\"form-register\" action=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/guardar\" method=\"post\">
              {% set valinputid = \"\" %}
              {% set valinputname = \"\" %}
              {% set valinputadults = \"\" %}
              {% set valinputchildren = \"\" %}
              {% set valinputpets = \"\" %}
              {% set valinputprice = \"\" %}
              {% set valinputhostid = \"\" %}
              {% set valinputhostname = \"\" %}
              
              {% if arrayerror is not empty or edit == true %}
                {% set valinputid = room.id %}
                {% set valinputname = room.nombre %}
                {% set valinputadults = room.numadultos %}
                {% set valinputchildren = room.numinfantiles %}
                {% set valinputpets = room.nummascotas %}
                {% set valinputprice = room.precio %}
                {% if edit == false %}
                  {% set valinputhostname = hostname[0].nombre %}
                  {% set valinputhostid = hostname[0].id %}
                {% else %}
                  {% set valinputhostname = room.idhospedaje.nombre %}
                  {% set valinputhostid = room.idhospedaje.id %}
                {% endif %}
              {% endif %}
              <div class=\"row\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-5\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Nombre hospedaje</label>
                    {% set statusinput = \"\" %}
                    {% if edit == true %}
                      {% set statusinput = \"readonly\" %}
                      <input type=\"text\" class=\"form-control\" id=\"inputhostname\" name=\"inputhostname\" nombre=\"namehospedaje\"  value=\"{{ valinputhostname }}\" {{ statusinput }}>
                      <input type=\"hidden\" class=\"form-control\" id=\"inputhostid\" name=\"inputhostid\" nombre=\"idhospedaje\"  value=\"{{ valinputhostid }}\">
                      {% if arrayerror[\"idhospedaje\"] is defined %}
                        <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"idhospedaje\"]}}</p>
                      {% endif %}
                    {% else %}
                      <select class=\"form-control\" id=\"inputhostid\" name=\"inputhostid\">
                      {% for item in hostname %}
                        <option value=\"{{ item.id }}\">{{ item.nombre }}</option>
                      {% endfor %}
                      </select>
                    {% endif %}
                  </div>
                </div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row\">
                <input type=\"hidden\" class=\"form-control\" id=\"inputid\" name=\"inputid\" nombre=\"inputid\" value=\"{{ valinputid }}\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-10 px-3\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Nombre habitacion</label>
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
                    <label for=\"exampleFormControlInput1\">Número adultos</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputadults\" name=\"inputadults\" placeholder=\"\" nombre=\"adultos\" value=\"{{ valinputadults }}\">
                    {% if arrayerror[\"numadultos\"] is defined %}
                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"numadultos\"]}}</p>
                    {% endif %}
                  </div>
                </div>
                <div class=\"col-12 col-lg-5 px-3\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Número niños</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputchildren\" name=\"inputchildren\" nombre=\"infantiles\"  value=\"{{ valinputchildren }}\">
                    {% if arrayerror[\"numinfantiles\"] is defined %}
                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"numinfantiles\"]}}</p>
                    {% endif %}
                  </div>
                </div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-5\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Número mascotas</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputpets\" name=\"inputpets\"  nombre=\"mascotas\" value=\"{{ valinputpets }}\">
                    {% if arrayerror[\"nummascotas\"] is defined %}
                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"nummascotas\"]}}</p>
                    {% endif %}
                  </div>
                </div>
                <div class=\"col-12 col-lg-5\">
                  <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Precio</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputprice\" name=\"inputprice\"  nombre=\"precio\" value=\"{{ valinputprice }}\" >
                    {% if arrayerror[\"precio\"] is defined %}
                      <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"precio\"]}}</p>
                    {% endif %}
                  </div>
                </div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-10\"></div>
                <div class=\"col-1\"></div>
              </div>
              <div class=\"row pb-4\">
                <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-10\">
                  <button id=\"btn-send\" type=\"submit\" class=\"btn btn-primary btn-lg btn-home ml-2\">Guardar</button>
                </div>
                <div class=\"col-1\"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
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
        <button id=\"closeModal\" type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Close</button>
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
    {% set message = 'Registro realizado satisfactoriamente. Ahora puede agregar fotos y servicios' %}
    {% set img = 'http://trivadog.mipropia.com/trivadog/public/img/ico/dog_pilot.ico' %}
    {% set title = 'Datos guardados!!' %}
  {% elseif querystatus == 'edit' %}
    {% set modal = 'show' %}
    {% set message = 'Modificación realizada satisfactoriamente.' %}
    {% set img = 'http://trivadog.mipropia.com/trivadog/public/img/ico/dog_fitness.ico' %}
    {% set title = 'Datos guardados!!' %}
  {% elseif querystatus == 'error' %}
    {% set modal = 'show' %}
    {% set message = 'No se ha podido realizar el registro. Por favor, vuelva a intentarlo.' %}
    {% set img = 'http://trivadog.mipropia.com/trivadog/public/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% endif %}
  
  <script>
    \$(document).ready(function (){
      var statusmodal = '{{ querystatus }}';
      var img = '{{ img }}';
      var title = '{{ title }}';
      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('{{ message }}');
      \$('#myModal').modal('{{ modal }}');
    });
  </script>
{% endblock %}
", "habitaciones/formulariohabitacion.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\habitaciones\\formulariohabitacion.html.twig");
    }
}
