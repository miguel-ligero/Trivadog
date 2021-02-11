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

/* hospedaje/formulariohospedaje.html.twig */
class __TwigTemplate_da38b622cd29b87ce7c5a0061a84016471ebba044fc27e985ae42295b4f36f07 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hospedaje/formulariohospedaje.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hospedaje/formulariohospedaje.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hospedaje/formulariohospedaje.html.twig", 1);
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
        echo "  <link rel=\"stylesheet\" href=\"/css/provider.css\">
  <link rel=\"stylesheet\" href=\"/css/modal.css\">
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"container\">
<div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <div>
        <a id=\"btn-new\" href=\"/proveedores/cuentaproveedor\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" >Volver</a>
      </div>
      <div></div>
    </div>
    <div class=\"col-10\">
      <div class=\"row\">
        <div class=\"col-12 px-0 pb-3\">
          <form id=\"form-register\" action=\"/hospedaje/alojamiento/guardar\" method=\"post\">
            ";
        // line 25
        $context["valinputid"] = "";
        // line 26
        echo "            ";
        $context["valinputtypehost"] = "";
        // line 27
        echo "            ";
        $context["valinputname"] = "";
        // line 28
        echo "            ";
        $context["valinputdescription"] = "";
        // line 29
        echo "            ";
        $context["valinputaddress"] = "";
        // line 30
        echo "            ";
        $context["valinputcity"] = "";
        // line 31
        echo "            ";
        $context["valinputphone"] = "";
        // line 32
        echo "            ";
        $context["valinputemail"] = "";
        // line 33
        echo "            ";
        $context["valinputproviderid"] = (isset($context["providerid"]) || array_key_exists("providerid", $context) ? $context["providerid"] : (function () { throw new RuntimeError('Variable "providerid" does not exist.', 33, $this->source); })());
        // line 34
        echo "            ";
        $context["varselect"] = "";
        // line 35
        echo "            ";
        $context["valinputadmin1"] = "";
        // line 36
        echo "            ";
        $context["valinputadmin2"] = "";
        // line 37
        echo "            ";
        $context["valinputadmin3"] = "";
        // line 38
        echo "                            
            ";
        // line 39
        if (((isset($context["arrayerror"]) || array_key_exists("arrayerror", $context)) || 0 === twig_compare((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 39, $this->source); })()), true))) {
            // line 40
            echo "              ";
            $context["valinputid"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40);
            // line 41
            echo "              ";
            $context["valinputtypehost"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 41, $this->source); })()), "idtipohospedaje", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41);
            // line 42
            echo "              ";
            $context["valinputname"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 42, $this->source); })()), "nombre", [], "any", false, false, false, 42);
            // line 43
            echo "              ";
            $context["valinputdescription"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 43, $this->source); })()), "descripcion", [], "any", false, false, false, 43);
            // line 44
            echo "              ";
            $context["valinputaddress"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 44, $this->source); })()), "direccion", [], "any", false, false, false, 44);
            // line 45
            echo "              ";
            $context["valinputcity"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 45, $this->source); })()), "ciudad", [], "any", false, false, false, 45);
            // line 46
            echo "              ";
            $context["valinputphone"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 46, $this->source); })()), "telefono", [], "any", false, false, false, 46);
            // line 47
            echo "              ";
            $context["valinputemail"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47);
            // line 48
            echo "              ";
            $context["valinputadmin1"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 48, $this->source); })()), "admin1code", [], "any", false, false, false, 48);
            // line 49
            echo "              ";
            $context["valinputadmin2"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 49, $this->source); })()), "admin2code", [], "any", false, false, false, 49);
            // line 50
            echo "              ";
            $context["valinputadmin3"] = twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 50, $this->source); })()), "admin3code", [], "any", false, false, false, 50);
            // line 51
            echo "              ";
            $context["varselect"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 51, $this->source); })()), "idtipohospedaje", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51);
            // line 52
            echo "            ";
        }
        // line 53
        echo "            <input type=\"hidden\" class=\"form-control\" id=\"inputproviderid\" name=\"inputproviderid\" nombre=\"idproveedor\"  value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputproviderid"]) || array_key_exists("valinputproviderid", $context) ? $context["valinputproviderid"] : (function () { throw new RuntimeError('Variable "valinputproviderid" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" class=\"form-control\" id=\"inputhiddenaction\" name=\"inputhiddenaction\" nombre=\"inputhiddenaction\"  value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\">
            <div class=\"row\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-5\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Nombre alojamiento</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputname\" name=\"inputname\" nombre=\"nombrehospedaje\"  value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["valinputname"]) || array_key_exists("valinputname", $context) ? $context["valinputname"] : (function () { throw new RuntimeError('Variable "valinputname" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\">
                  ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "nombrehospedaje", [], "array", true, true, false, 61)) {
            // line 62
            echo "                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 62, $this->source); })()), "nombrehospedaje", [], "array", false, false, false, 62), "html", null, true);
            echo "</p>
                  ";
        }
        // line 64
        echo "                </div>
              </div>
              <div class=\"col-12 col-lg-5\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Tipo hospedaje</label>
                  <select class=\"form-control\" id=\"inputhosttype\" name=\"inputhosttype\">
                  ";
        // line 70
        $context["selected"] = "";
        // line 71
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hosttype"]) || array_key_exists("hosttype", $context) ? $context["hosttype"] : (function () { throw new RuntimeError('Variable "hosttype" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            echo "                    ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 72), (isset($context["varselect"]) || array_key_exists("varselect", $context) ? $context["varselect"] : (function () { throw new RuntimeError('Variable "varselect" does not exist.', 72, $this->source); })()))) {
                echo " 
                      ";
                // line 73
                $context["selected"] = "selected";
                // line 74
                echo "                    ";
            }
            // line 75
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 75, $this->source); })()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 75), "html", null, true);
            echo "</option>
                  ";
            // line 76
            $context["selected"] = "";
            // line 77
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row\">
              <input type=\"hidden\" class=\"form-control\" id=\"inputid\" name=\"inputid\" nombre=\"inputid\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["valinputid"]) || array_key_exists("valinputid", $context) ? $context["valinputid"] : (function () { throw new RuntimeError('Variable "valinputid" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-10 px-3\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\" >Descripción</label>
                  <textarea id=\"inputdescription\" name=\"inputdescription\" rows=\"8\"  class=\"form-control col-12\" >";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 89, $this->source); })()), "descripcion", [], "any", false, false, false, 89), "html", null, true);
        echo "</textarea>
                  ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "descripcion", [], "array", true, true, false, 90)) {
            // line 91
            echo "                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 91, $this->source); })()), "descripcion", [], "array", false, false, false, 91), "html", null, true);
            echo "</p>
                  ";
        }
        // line 93
        echo "                </div>
              </div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-5 px-3\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Email</label>
                  <input type=\"email\" class=\"form-control\" id=\"inputemail\" name=\"inputemail\" placeholder=\"example@email.com\" nombre=\"email\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["valinputemail"]) || array_key_exists("valinputemail", $context) ? $context["valinputemail"] : (function () { throw new RuntimeError('Variable "valinputemail" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "\">
                  ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "email", [], "array", true, true, false, 103)) {
            // line 104
            echo "                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 104, $this->source); })()), "email", [], "array", false, false, false, 104), "html", null, true);
            echo "</p>
                  ";
        }
        // line 106
        echo "                </div>
              </div>
              <div class=\"col-12 col-lg-5 px-3\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Teléfono</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputphone\" name=\"inputphone\" nombre=\"telefono\"  value=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["valinputphone"]) || array_key_exists("valinputphone", $context) ? $context["valinputphone"] : (function () { throw new RuntimeError('Variable "valinputphone" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "\">
                  ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "telefono", [], "array", true, true, false, 112)) {
            // line 113
            echo "                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 113, $this->source); })()), "telefono", [], "array", false, false, false, 113), "html", null, true);
            echo "</p>
                  ";
        }
        // line 115
        echo "                </div>
              </div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-7\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Dirección</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputaddress\" name=\"inputaddress\"  nombre=\"direccion\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["valinputaddress"]) || array_key_exists("valinputaddress", $context) ? $context["valinputaddress"] : (function () { throw new RuntimeError('Variable "valinputaddress" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\">
                  ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "direccion", [], "array", true, true, false, 125)) {
            // line 126
            echo "                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 126, $this->source); })()), "direccion", [], "array", false, false, false, 126), "html", null, true);
            echo "</p>
                  ";
        }
        // line 128
        echo "                </div>
              </div>
              <div class=\"col-12 col-lg-3\"></div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row\">
              <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-3\">
                  <label for=\"exampleFormControlInput1\">Comunidad Autónoma:</label>
                  <select class=\"form-control\" name=\"autonomia\" id=\"autonomia\" >
                  <option value=\"\">Seleccione Autonomía</option>
                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geocomunidades"]) || array_key_exists("geocomunidades", $context) ? $context["geocomunidades"] : (function () { throw new RuntimeError('Variable "geocomunidades" does not exist.', 139, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["geocomunidad"]) {
            // line 140
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geocomunidad"], "admin1code", [], "any", false, false, false, 140), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geocomunidad"], "name", [], "any", false, false, false, 140), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geocomunidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                  </select>
                  ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "autonomia", [], "array", true, true, false, 143)) {
            // line 144
            echo "                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 144, $this->source); })()), "autonomia", [], "array", false, false, false, 144), "html", null, true);
            echo "</p>
                  ";
        }
        // line 146
        echo "                  <input name=\"inputhiddenadmin1\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin1"]) || array_key_exists("valinputadmin1", $context) ? $context["valinputadmin1"] : (function () { throw new RuntimeError('Variable "valinputadmin1" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-12 col-lg-3\">
                  <label for=\"exampleFormControlInput1\">Provincias:</label>
                  <select class=\"form-control\" name=\"provincias\" id=\"provincias\"  disabled>
                    <option value=\"\">Seleccione Provincia</option>
                  </select>
                  ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "provincias", [], "array", true, true, false, 153)) {
            // line 154
            echo "                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 154, $this->source); })()), "provincias", [], "array", false, false, false, 154), "html", null, true);
            echo "</p>
                  ";
        }
        // line 156
        echo "                  <input name=\"inputhiddenadmin2\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin2"]) || array_key_exists("valinputadmin2", $context) ? $context["valinputadmin2"] : (function () { throw new RuntimeError('Variable "valinputadmin2" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-12 col-lg-3\">
                  <label for=\"exampleFormControlInput1\">Población:</label>
                  <select class=\"form-control\" name=\"poblacion\" id=\"poblacion\" disabled>
                    <option value=\"\">Seleccione Poblacion</option>
                  </select>
                  ";
        // line 163
        if (twig_get_attribute($this->env, $this->source, ($context["arrayerror"] ?? null), "poblacion", [], "array", true, true, false, 163)) {
            // line 164
            echo "                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrayerror"]) || array_key_exists("arrayerror", $context) ? $context["arrayerror"] : (function () { throw new RuntimeError('Variable "arrayerror" does not exist.', 164, $this->source); })()), "poblacion", [], "array", false, false, false, 164), "html", null, true);
            echo "</p>
                  ";
        }
        // line 166
        echo "                  <input name=\"inputhiddenadmin3\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["valinputadmin3"]) || array_key_exists("valinputadmin3", $context) ? $context["valinputadmin3"] : (function () { throw new RuntimeError('Variable "valinputadmin3" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "\">
                </div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row pb-4\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-10\">
                <button id=\"btn-send\" type=\"submit\" class=\"btn btn-primary btn-lg btn-home mt-4\" control=\"On\" data-toggle=\"tooltip\" title=\"Por favor, complete el formulario\">Guardar</button>
              </div>
              <div class=\"col-1\"></div>
            </div>
          </form>
       </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id=\"myModal\"class=\"modal\" tabindex=\"-1\" role=\"dialog\">
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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 205
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 206
        echo "  
  ";
        // line 207
        $context["modal"] = "hide";
        // line 208
        echo "  ";
        $context["message"] = "";
        // line 209
        echo "  ";
        $context["img"] = "";
        // line 210
        echo "  ";
        $context["title"] = "";
        // line 211
        echo "  
  ";
        // line 212
        if (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 212, $this->source); })()), "new")) {
            // line 213
            echo "    ";
            $context["modal"] = "show";
            // line 214
            echo "    ";
            $context["message"] = "Registro realizado satisfactoriamente.";
            // line 215
            echo "    ";
            $context["img"] = "/img/ico/dog_pilot.ico";
            // line 216
            echo "    ";
            $context["title"] = "Datos guardados!!";
            // line 217
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 217, $this->source); })()), "edit")) {
            // line 218
            echo "    ";
            $context["modal"] = "show";
            // line 219
            echo "    ";
            $context["message"] = "Modificación realizada satisfactoriamente.";
            // line 220
            echo "    ";
            $context["img"] = "/img/ico/dog_fitness.ico";
            // line 221
            echo "    ";
            $context["title"] = "Datos guardados!!";
            // line 222
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 222, $this->source); })()), "error")) {
            // line 223
            echo "    ";
            $context["modal"] = "show";
            // line 224
            echo "    ";
            $context["message"] = "Fallo en la conexión. No se ha podido realizar el registro. Por favor, vuelva a intentarlo.";
            // line 225
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 226
            echo "    ";
            $context["title"] = "Error!!";
            // line 227
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 227, $this->source); })()), "faltan")) {
            // line 228
            echo "    ";
            $context["modal"] = "show";
            // line 229
            echo "    ";
            $context["message"] = "Faltan datos o no tienen un formato válido.";
            // line 230
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 231
            echo "    ";
            $context["title"] = "Error!!";
            // line 232
            echo "  ";
        }
        // line 233
        echo "  
  <script>
    \$(document).ready(function (){
      InicializarModal();
    });

    function InicializarModal () {
      var statusmodal = '";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 240, $this->source); })()), "html", null, true);
        echo "';
      var img = '";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 241, $this->source); })()), "html", null, true);
        echo "';
      var title = '";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 242, $this->source); })()), "html", null, true);
        echo "';
      if (statusmodal == 'new'){
        url = \"/proveedores/cuentaproveedor\";
      }else if (statusmodal == 'edit'){
        url = \"/proveedores/cuentaproveedor\";
      }else if (statusmodal == 'error'){
        url = \"/hospedaje/alojamiento/editar/";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 248, $this->source); })()), "id", [], "any", false, false, false, 248), "html", null, true);
        echo "\";
        getComunidades();
      }else if (statusmodal == 'faltan'){
        if ('";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 251, $this->source); })()), "id", [], "any", false, false, false, 251), "html", null, true);
        echo "' != \"\"){
          url = \"/hospedaje/alojamiento/editar/";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 252, $this->source); })()), "id", [], "any", false, false, false, 252), "html", null, true);
        echo "\";
        }else{
          url = \"/hospedaje/alojamiento/nuevo\";
          getComunidades();
        }
      }
      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 260, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').modal('";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 261, $this->source); })()), "html", null, true);
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
  <script src=\"/js/registrohospedaje.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hospedaje/formulariohospedaje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 261,  632 => 260,  621 => 252,  617 => 251,  611 => 248,  602 => 242,  598 => 241,  594 => 240,  585 => 233,  582 => 232,  579 => 231,  576 => 230,  573 => 229,  570 => 228,  567 => 227,  564 => 226,  561 => 225,  558 => 224,  555 => 223,  552 => 222,  549 => 221,  546 => 220,  543 => 219,  540 => 218,  537 => 217,  534 => 216,  531 => 215,  528 => 214,  525 => 213,  523 => 212,  520 => 211,  517 => 210,  514 => 209,  511 => 208,  509 => 207,  506 => 206,  496 => 205,  447 => 166,  441 => 164,  439 => 163,  428 => 156,  422 => 154,  420 => 153,  409 => 146,  403 => 144,  401 => 143,  398 => 142,  387 => 140,  383 => 139,  370 => 128,  364 => 126,  362 => 125,  358 => 124,  347 => 115,  341 => 113,  339 => 112,  335 => 111,  328 => 106,  322 => 104,  320 => 103,  316 => 102,  305 => 93,  299 => 91,  297 => 90,  293 => 89,  285 => 84,  277 => 78,  271 => 77,  269 => 76,  260 => 75,  257 => 74,  255 => 73,  250 => 72,  245 => 71,  243 => 70,  235 => 64,  229 => 62,  227 => 61,  223 => 60,  214 => 54,  209 => 53,  206 => 52,  203 => 51,  200 => 50,  197 => 49,  194 => 48,  191 => 47,  188 => 46,  185 => 45,  182 => 44,  179 => 43,  176 => 42,  173 => 41,  170 => 40,  168 => 39,  165 => 38,  162 => 37,  159 => 36,  156 => 35,  153 => 34,  150 => 33,  147 => 32,  144 => 31,  141 => 30,  138 => 29,  135 => 28,  132 => 27,  129 => 26,  127 => 25,  112 => 12,  102 => 11,  89 => 6,  79 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"/css/provider.css\">
  <link rel=\"stylesheet\" href=\"/css/modal.css\">
  
{% endblock %}

{% block body %}
<div class=\"container\">
<div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <div>
        <a id=\"btn-new\" href=\"/proveedores/cuentaproveedor\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" >Volver</a>
      </div>
      <div></div>
    </div>
    <div class=\"col-10\">
      <div class=\"row\">
        <div class=\"col-12 px-0 pb-3\">
          <form id=\"form-register\" action=\"/hospedaje/alojamiento/guardar\" method=\"post\">
            {% set valinputid = \"\" %}
            {% set valinputtypehost = \"\" %}
            {% set valinputname = \"\" %}
            {% set valinputdescription = \"\" %}
            {% set valinputaddress = \"\" %}
            {% set valinputcity = \"\" %}
            {% set valinputphone = \"\" %}
            {% set valinputemail = \"\" %}
            {% set valinputproviderid = providerid %}
            {% set varselect = \"\" %}
            {% set valinputadmin1 = \"\" %}
            {% set valinputadmin2 = \"\" %}
            {% set valinputadmin3 = \"\" %}
                            
            {% if arrayerror is defined or edit == true %}
              {% set valinputid = host.id %}
              {% set valinputtypehost = host.idtipohospedaje.id %}
              {% set valinputname = host.nombre %}
              {% set valinputdescription = host.descripcion %}
              {% set valinputaddress = host.direccion %}
              {% set valinputcity = host.ciudad %}
              {% set valinputphone = host.telefono %}
              {% set valinputemail = host.email %}
              {% set valinputadmin1 = host.admin1code %}
              {% set valinputadmin2 = host.admin2code %}
              {% set valinputadmin3 = host.admin3code %}
              {% set varselect = host.idtipohospedaje.id %}
            {% endif %}
            <input type=\"hidden\" class=\"form-control\" id=\"inputproviderid\" name=\"inputproviderid\" nombre=\"idproveedor\"  value=\"{{ valinputproviderid }}\">
            <input type=\"hidden\" class=\"form-control\" id=\"inputhiddenaction\" name=\"inputhiddenaction\" nombre=\"inputhiddenaction\"  value=\"{{ edit }}\">
            <div class=\"row\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-5\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Nombre alojamiento</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputname\" name=\"inputname\" nombre=\"nombrehospedaje\"  value=\"{{ valinputname }}\">
                  {% if arrayerror[\"nombrehospedaje\"] is defined %}
                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"nombrehospedaje\"]}}</p>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-12 col-lg-5\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Tipo hospedaje</label>
                  <select class=\"form-control\" id=\"inputhosttype\" name=\"inputhosttype\">
                  {% set selected = \"\"%}
                  {% for item in hosttype %}
                    {% if (item.id == varselect) %} 
                      {% set selected = \"selected\" %}
                    {% endif %}
                    <option value=\"{{ item.id }}\" {{ selected }}>{{ item.nombre }}</option>
                  {% set selected = \"\" %}
                  {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row\">
              <input type=\"hidden\" class=\"form-control\" id=\"inputid\" name=\"inputid\" nombre=\"inputid\" value=\"{{ valinputid }}\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-10 px-3\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\" >Descripción</label>
                  <textarea id=\"inputdescription\" name=\"inputdescription\" rows=\"8\"  class=\"form-control col-12\" >{{ host.descripcion }}</textarea>
                  {% if arrayerror[\"descripcion\"] is defined %}
                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"descripcion\"]}}</p>
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
                  <input type=\"email\" class=\"form-control\" id=\"inputemail\" name=\"inputemail\" placeholder=\"example@email.com\" nombre=\"email\" value=\"{{ valinputemail }}\">
                  {% if arrayerror[\"email\"] is defined %}
                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"email\"]}}</p>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-12 col-lg-5 px-3\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Teléfono</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputphone\" name=\"inputphone\" nombre=\"telefono\"  value=\"{{ valinputphone }}\">
                  {% if arrayerror[\"telefono\"] is defined %}
                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"telefono\"]}}</p>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-7\">
                <div class=\"form-group\">
                  <label for=\"exampleFormControlInput1\">Dirección</label>
                  <input type=\"text\" class=\"form-control\" id=\"inputaddress\" name=\"inputaddress\"  nombre=\"direccion\" value=\"{{ valinputaddress }}\">
                  {% if arrayerror[\"direccion\"] is defined %}
                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"direccion\"]}}</p>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-12 col-lg-3\"></div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row\">
              <div class=\"col-1\"></div>
                <div class=\"col-12 col-lg-3\">
                  <label for=\"exampleFormControlInput1\">Comunidad Autónoma:</label>
                  <select class=\"form-control\" name=\"autonomia\" id=\"autonomia\" >
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
                <div class=\"col-12 col-lg-3\">
                  <label for=\"exampleFormControlInput1\">Provincias:</label>
                  <select class=\"form-control\" name=\"provincias\" id=\"provincias\"  disabled>
                    <option value=\"\">Seleccione Provincia</option>
                  </select>
                  {% if arrayerror[\"provincias\"] is defined %}
                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"provincias\"]}}</p>
                  {% endif %}
                  <input name=\"inputhiddenadmin2\" type=\"hidden\" value=\"{{ valinputadmin2 }}\">
                </div>
                <div class=\"col-12 col-lg-3\">
                  <label for=\"exampleFormControlInput1\">Población:</label>
                  <select class=\"form-control\" name=\"poblacion\" id=\"poblacion\" disabled>
                    <option value=\"\">Seleccione Poblacion</option>
                  </select>
                  {% if arrayerror[\"poblacion\"] is defined %}
                    <p class=\"mensajeError\" style=\"color:red\">Por favor, rellene el campo. {{arrayerror[\"poblacion\"]}}</p>
                  {% endif %}
                  <input name=\"inputhiddenadmin3\" type=\"hidden\" value=\"{{ valinputadmin3 }}\">
                </div>
              <div class=\"col-1\"></div>
            </div>
            <div class=\"row pb-4\">
              <div class=\"col-1\"></div>
              <div class=\"col-12 col-lg-10\">
                <button id=\"btn-send\" type=\"submit\" class=\"btn btn-primary btn-lg btn-home mt-4\" control=\"On\" data-toggle=\"tooltip\" title=\"Por favor, complete el formulario\">Guardar</button>
              </div>
              <div class=\"col-1\"></div>
            </div>
          </form>
       </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id=\"myModal\"class=\"modal\" tabindex=\"-1\" role=\"dialog\">
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
    {% set message = 'Registro realizado satisfactoriamente.' %}
    {% set img = '/img/ico/dog_pilot.ico' %}
    {% set title = 'Datos guardados!!' %}
  {% elseif querystatus == 'edit' %}
    {% set modal = 'show' %}
    {% set message = 'Modificación realizada satisfactoriamente.' %}
    {% set img = '/img/ico/dog_fitness.ico' %}
    {% set title = 'Datos guardados!!' %}
  {% elseif querystatus == 'error' %}
    {% set modal = 'show' %}
    {% set message = 'Fallo en la conexión. No se ha podido realizar el registro. Por favor, vuelva a intentarlo.' %}
    {% set img = '/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% elseif querystatus == 'faltan' %}
    {% set modal = 'show' %}
    {% set message = 'Faltan datos o no tienen un formato válido.' %}
    {% set img = '/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% endif %}
  
  <script>
    \$(document).ready(function (){
      InicializarModal();
    });

    function InicializarModal () {
      var statusmodal = '{{ querystatus }}';
      var img = '{{ img }}';
      var title = '{{ title }}';
      if (statusmodal == 'new'){
        url = \"/proveedores/cuentaproveedor\";
      }else if (statusmodal == 'edit'){
        url = \"/proveedores/cuentaproveedor\";
      }else if (statusmodal == 'error'){
        url = \"/hospedaje/alojamiento/editar/{{ host.id }}\";
        getComunidades();
      }else if (statusmodal == 'faltan'){
        if ('{{ host.id }}' != \"\"){
          url = \"/hospedaje/alojamiento/editar/{{ host.id }}\";
        }else{
          url = \"/hospedaje/alojamiento/nuevo\";
          getComunidades();
        }
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
  <script src=\"/js/registrohospedaje.js\"></script>
{% endblock %}

", "hospedaje/formulariohospedaje.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\hospedaje\\formulariohospedaje.html.twig");
    }
}
