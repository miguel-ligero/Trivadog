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

/* habitaciones/detallealojamiento.html.twig */
class __TwigTemplate_c65842ffd8bd0aff9229f291c44420b773627a29a8d57d6e30ee9c1303841542 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/detallealojamiento.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitaciones/detallealojamiento.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/main.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/detail.css\">  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"container\">
  <div class=\"row align-items-center py-4\" style=\"height: 20%\">
    <div class=\"col-12 \"></div>
  </div>
  <div class=\"row \" style=\"min-height: 60%\">
    <div class=\"col-3 col-lg-2 py-1\">
      <div class=\"row justify-content-center\" >
        <div class=\"col-12 col-lg-10 pl-2 p-0\">
          ";
        // line 18
        if (0 === twig_compare((isset($context["linkcontrol"]) || array_key_exists("linkcontrol", $context) ? $context["linkcontrol"] : (function () { throw new RuntimeError('Variable "linkcontrol" does not exist.', 18, $this->source); })()), "busqueda")) {
            // line 19
            echo "            <a class=\"btn btn-primary btn-home\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busquedaHabitacion", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })())]), "html", null, true);
            echo "?host='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 19, $this->source); })()), "idhospedaje", [], "any", false, false, false, 19), "nombre", [], "any", false, false, false, 19), "html", null, true);
            echo "'&destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" role=\"button\">Volver</a>
          ";
        } elseif (0 === twig_compare(        // line 20
(isset($context["linkcontrol"]) || array_key_exists("linkcontrol", $context) ? $context["linkcontrol"] : (function () { throw new RuntimeError('Variable "linkcontrol" does not exist.', 20, $this->source); })()), "home")) {
            // line 21
            echo "            <a class=\"btn btn-primary btn-home\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\" role=\"button\">Volver</a>
          ";
        } else {
            // line 23
            echo "            <a class=\"btn btn-primary btn-home\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cuentaCliente", ["id" => (isset($context["customeraccountid"]) || array_key_exists("customeraccountid", $context) ? $context["customeraccountid"] : (function () { throw new RuntimeError('Variable "customeraccountid" does not exist.', 23, $this->source); })())]), "html", null, true);
            echo "\" role=\"button\">Volver</a>
          ";
        }
        // line 25
        echo "        </div>
      </div>
    </div>
    <div class=\"col-lg-10 py-1\">
      <div class=\"card bg-light\">
        <div class=\"card-body row\">
          <div class=\"col-12 col-lg-6\">
            <div class=\"row justify-content-md-center \" style=\"height:400px\" >
              <div class=\"col-12 h-100 align-items-center\">
                <div id=\"carouselExampleCaptions\" class=\"carousel slide h-100\" data-ride=\"carousel\">
                  <div class=\"carousel-inner h-100 pt-5\" >
                  ";
        // line 36
        $context["cont"] = 0;
        // line 37
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "                    ";
            $context["active"] = "";
            echo " 
                    ";
            // line 39
            if (0 === twig_compare((isset($context["cont"]) || array_key_exists("cont", $context) ? $context["cont"] : (function () { throw new RuntimeError('Variable "cont" does not exist.', 39, $this->source); })()), 0)) {
                // line 40
                echo "                      ";
                $context["active"] = "active";
                // line 41
                echo "                      ";
                $context["cont"] = ((isset($context["cont"]) || array_key_exists("cont", $context) ? $context["cont"] : (function () { throw new RuntimeError('Variable "cont" does not exist.', 41, $this->source); })()) + 1);
                // line 42
                echo "                    ";
            }
            // line 43
            echo "                    ";
            $context["path"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico";
            // line 44
            echo "                      ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "nombrefichero", [], "any", false, false, false, 44), "dog_boxer.ico")) {
                // line 45
                echo "                          ";
                $context["path"] = ((("http://trivadog.mipropia.com/trivadog/public/img/host/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)) . "/") . twig_get_attribute($this->env, $this->source, $context["item"], "nombrefichero", [], "any", false, false, false, 45));
                // line 46
                echo "                      ";
            }
            // line 47
            echo "                    <div class=\"carousel-item ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 47, $this->source); })()), "html", null, true);
            echo " w-100\" data-interval=\"8000\">
                      <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\" class=\"d-block w-100 h-auto back-img\" alt=\"Imagen habitación ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                  </div>
                  <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                  </a>
                  <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <div class=\"row py-3 align-items-center\" style=\"height:200px\">
              ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "                ";
            $context["path"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico";
            // line 66
            echo "                  ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "nombrefichero", [], "any", false, false, false, 66), "dog_boxer.ico")) {
                // line 67
                echo "                      ";
                $context["path"] = ((("http://trivadog.mipropia.com/trivadog/public/img/host/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67)) . "/") . twig_get_attribute($this->env, $this->source, $context["item"], "nombrefichero", [], "any", false, false, false, 67));
                // line 68
                echo "                  ";
            }
            // line 69
            echo "                <div class=\"col-2 mx-auto p-0\" height=\"100px\" width=\"100px\">
                  <a href=\"#\"><img src=\"";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\" class=\"d-block w-100 h-100 back-img\" alt=\"Imagen habitación ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\"></a>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </div>
          </div>
          <div class=\"col-12 col-lg-6\">
            <div class=\"card h-100 p-0\">
              <div class=\"card-body p-2\">
                <h3 class=\"card-title text-right pr-1\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 78, $this->source); })()), "idhospedaje", [], "any", false, false, false, 78), "nombre", [], "any", false, false, false, 78), "html", null, true);
        echo "</h3>
                <h6 class=\"card-title text-right pr-1\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 79, $this->source); })()), "idhospedaje", [], "any", false, false, false, 79), "direccion", [], "any", false, false, false, 79), "html", null, true);
        echo "</h6>
                <h4 class=\"card-title text-right pr-1\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 80, $this->source); })()), "nombre", [], "any", false, false, false, 80), "html", null, true);
        echo "</h4>
                <h6 class=\"card-title text-right pr-1\">";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "
                  ";
        // line 82
        $context["singular"] = "noche";
        // line 83
        echo "                  ";
        if (1 === twig_compare((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 83, $this->source); })()), 1)) {
            // line 84
            echo "                    ";
            $context["singular"] = "noches";
            // line 85
            echo "                  ";
        }
        // line 86
        echo "                  ";
        echo twig_escape_filter($this->env, (isset($context["singular"]) || array_key_exists("singular", $context) ? $context["singular"] : (function () { throw new RuntimeError('Variable "singular" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 86, $this->source); })()), "precio", [], "any", false, false, false, 86), "html", null, true);
        echo "
                  <span>€</span>
                </h6>
                ";
        // line 89
        $context["calc"] = 0;
        // line 90
        echo "                ";
        if ( !twig_test_empty((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 90, $this->source); })()))) {
            // line 91
            echo "                  ";
            $context["calc"] = (twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 91, $this->source); })()), "precio", [], "any", false, false, false, 91) * (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 91, $this->source); })()));
            // line 92
            echo "                  <h5 class=\"card-title text-right pr-1\">";
            echo twig_escape_filter($this->env, (isset($context["calc"]) || array_key_exists("calc", $context) ? $context["calc"] : (function () { throw new RuntimeError('Variable "calc" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "<span>€</span></h5>
                ";
        }
        // line 94
        echo "                <hr class=\"mx-1\">
                <h5 class=\"card-title pl-1\">Descripción</h5>
                <div class=\"card mb-2\">
                  <p class=\"card-text overflow-auto p-1\" style=\"height:120px\">
                    ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 98, $this->source); })()), "idhospedaje", [], "any", false, false, false, 98), "descripcion", [], "any", false, false, false, 98), "html", null, true);
        echo "
                  </p>
                </div>
                <h5 class=\"card-title pl-1\">Servicios</h5>
                <div class=\"card mb-2\">
                  <p class=\"card-text overflow-auto p-1\" style=\"height:120px\">
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roomservice"]) || array_key_exists("roomservice", $context) ? $context["roomservice"] : (function () { throw new RuntimeError('Variable "roomservice" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 105
            echo "                     - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idservicio", [], "any", false, false, false, 105), "nombre", [], "any", false, false, false, 105), "html", null, true);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                  </p>
                </div>
                <a id=\"comment-link\" href=\"\" class=\"btn w-100\" data-toggle=\"modal\" data-target=\"#comment-modal\">
                <div class=\"row justify-content-right \">
                    <div class=\"col-12\">             
                      <p class=\"text-left pr-1 mb-0\">Comentarios - ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 112, $this->source); })()), "numComentarios", [], "any", false, false, false, 112), "html", null, true);
        echo " </p>
                    </div>
                    <div class=\"col-12\">
                    ";
        // line 115
        $context["val"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 115, $this->source); })()), "mediaValoracion", [], "any", false, false, false, 115);
        // line 116
        echo "                    ";
        if (0 !== twig_compare((isset($context["val"]) || array_key_exists("val", $context) ? $context["val"] : (function () { throw new RuntimeError('Variable "val" does not exist.', 116, $this->source); })()), 0)) {
            // line 117
            echo "                      <p class=\"text-left mb-0\"> 
                        Valoracion -
                        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["val"]) || array_key_exists("val", $context) ? $context["val"] : (function () { throw new RuntimeError('Variable "val" does not exist.', 119, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " 
                          <span class=\"fa fa-star checked text-warning\" id=\"star";
                // line 120
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                      </p>
                    ";
        } else {
            // line 124
            echo "                      <p class=\"text-left mb-0\">Valoracion</p>
                    ";
        }
        // line 126
        echo "                    ";
        $context["valpet"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 126, $this->source); })()), "mediaValoracionMascotas", [], "any", false, false, false, 126);
        // line 127
        echo "                    ";
        if (0 !== twig_compare((isset($context["valpet"]) || array_key_exists("valpet", $context) ? $context["valpet"] : (function () { throw new RuntimeError('Variable "valpet" does not exist.', 127, $this->source); })()), 0)) {
            // line 128
            echo "                      <p class=\"text-left mb-0\"> 
                         Valoracion mascotas -
                         ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["valpet"]) || array_key_exists("valpet", $context) ? $context["valpet"] : (function () { throw new RuntimeError('Variable "valpet" does not exist.', 130, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " 
                          <span class=\"fa fa-star checked text-warning\" id=\"star";
                // line 131
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                      </p>
                    ";
        } else {
            // line 135
            echo "                      <p class=\"text-left mb-0\">Valoracion mascotas</p>
                    ";
        }
        // line 137
        echo "                  </div>
                </div>
                </a>
                <div class=\"justify-content-md-right\"></div>
                <div class=\"justify-content-md-right\"></div>
                <div class=\"col-12 justify-content-lg-center\">
                  <div class=\"col-4\"></div>
                  <div class=\"col-4 mx-auto mt-2\" >
                    ";
        // line 145
        if (0 === twig_compare((isset($context["linkcontrol"]) || array_key_exists("linkcontrol", $context) ? $context["linkcontrol"] : (function () { throw new RuntimeError('Variable "linkcontrol" does not exist.', 145, $this->source); })()), "busqueda")) {
            // line 146
            echo "                      <a class=\"btn btn-primary mb-4 px-0 btn-home w-100\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listaReserva", ["idHabitacion" => twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146)]), "html", null, true);
            echo "?destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "&days=";
            echo twig_escape_filter($this->env, (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "\" role=\"button\">Reservar</a>
                    ";
        }
        // line 148
        echo "                  </div>
                  <div class=\"col-4\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row pb-4\" style=\"height: 20%\">
    <div class=\"col-12 justify-content-center\">
      <div class=\"w-25 mx-auto mt-5 btn-registry\">
        <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/index\" role=\"button\">Registra tu negocio</a>
      </div>
    </div>
  </div>
</div> 

<!--Modal-->
<div id=\"comment-modal\" class=\"modal\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
     <div class=\"modal-header\">
        <h4 class=\"modal-title\">Comentarios</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <!-- se repetirá por cada resultado-->
      ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 177
            echo "        <div class=\"modal-body pb-0 pt-1 px-2\" >
          <div class=\"media row\">
            <div class=\"media-body col-2 \">
              <p class=\"mt-1\">";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idcliente", [], "any", false, false, false, 180), "nombre", [], "any", false, false, false, 180), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idcliente", [], "any", false, false, false, 180), "apellidos", [], "any", false, false, false, 180), "html", null, true);
            echo "</p>
            </div>
            <div class=\"media-body col-7 \">
                <p class=\"text-left\">";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "comentario", [], "any", false, false, false, 183), "html", null, true);
            echo "</p>
            </div>
            <div class=\"media-body col-3 \">
              <div>
                <p class=\"text-right mb-0\">Valoración:</p>
              </div>
              <div>
                ";
            // line 190
            $context["val"] = twig_get_attribute($this->env, $this->source, $context["item"], "valoracion", [], "any", false, false, false, 190);
            // line 191
            echo "                  <p class=\"text-right mb-0\">
                    ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["val"]) || array_key_exists("val", $context) ? $context["val"] : (function () { throw new RuntimeError('Variable "val" does not exist.', 192, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " 
                      <span class=\"fa fa-star checked text-warning\" id=\"star";
                // line 193
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                  </p>
              </div>
              <div>
                <p class=\"text-right mb-0\">Valoración mascotas:</p>
              </div>
              <div class=\"\">
                ";
            // line 201
            $context["valpet"] = twig_get_attribute($this->env, $this->source, $context["item"], "valoracionmascotas", [], "any", false, false, false, 201);
            // line 202
            echo "                  <p class=\"text-right mb-0\"> 
                    ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["valpet"]) || array_key_exists("valpet", $context) ? $context["valpet"] : (function () { throw new RuntimeError('Variable "valpet" does not exist.', 203, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " 
                      <span class=\"fa fa-star checked text-warning\" id=\"star";
                // line 204
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                  </p>
              </div>
            </div>
          </div>
        </div>
        <hr class=\"mx-3 my-0\">
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 222
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 223
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/detail.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "habitaciones/detallealojamiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 223,  558 => 222,  544 => 213,  532 => 206,  524 => 204,  518 => 203,  515 => 202,  513 => 201,  505 => 195,  497 => 193,  491 => 192,  488 => 191,  486 => 190,  476 => 183,  468 => 180,  463 => 177,  459 => 176,  429 => 148,  407 => 146,  405 => 145,  395 => 137,  391 => 135,  387 => 133,  379 => 131,  373 => 130,  369 => 128,  366 => 127,  363 => 126,  359 => 124,  355 => 122,  347 => 120,  341 => 119,  337 => 117,  334 => 116,  332 => 115,  326 => 112,  319 => 107,  310 => 105,  306 => 104,  297 => 98,  291 => 94,  285 => 92,  282 => 91,  279 => 90,  277 => 89,  268 => 86,  265 => 85,  262 => 84,  259 => 83,  257 => 82,  253 => 81,  249 => 80,  245 => 79,  241 => 78,  234 => 73,  223 => 70,  220 => 69,  217 => 68,  214 => 67,  211 => 66,  208 => 65,  204 => 64,  189 => 51,  178 => 48,  173 => 47,  170 => 46,  167 => 45,  164 => 44,  161 => 43,  158 => 42,  155 => 41,  152 => 40,  150 => 39,  145 => 38,  140 => 37,  138 => 36,  125 => 25,  119 => 23,  113 => 21,  111 => 20,  90 => 19,  88 => 18,  78 => 10,  71 => 9,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/main.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/detail.css\">  
{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row align-items-center py-4\" style=\"height: 20%\">
    <div class=\"col-12 \"></div>
  </div>
  <div class=\"row \" style=\"min-height: 60%\">
    <div class=\"col-3 col-lg-2 py-1\">
      <div class=\"row justify-content-center\" >
        <div class=\"col-12 col-lg-10 pl-2 p-0\">
          {% if linkcontrol == \"busqueda\" %}
            <a class=\"btn btn-primary btn-home\" href=\"{{ path(\"busquedaHabitacion\", {page: page }) }}?host='{{ room.idhospedaje.nombre }}'&destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}\" role=\"button\">Volver</a>
          {% elseif linkcontrol == \"home\" %}
            <a class=\"btn btn-primary btn-home\" href=\"{{ path('index') }}\" role=\"button\">Volver</a>
          {% else %}
            <a class=\"btn btn-primary btn-home\" href=\"{{ path('cuentaCliente', {id: customeraccountid}) }}\" role=\"button\">Volver</a>
          {% endif %}
        </div>
      </div>
    </div>
    <div class=\"col-lg-10 py-1\">
      <div class=\"card bg-light\">
        <div class=\"card-body row\">
          <div class=\"col-12 col-lg-6\">
            <div class=\"row justify-content-md-center \" style=\"height:400px\" >
              <div class=\"col-12 h-100 align-items-center\">
                <div id=\"carouselExampleCaptions\" class=\"carousel slide h-100\" data-ride=\"carousel\">
                  <div class=\"carousel-inner h-100 pt-5\" >
                  {% set cont = 0 %}
                  {% for item in img %}
                    {% set active = \"\" %} 
                    {% if (cont == 0) %}
                      {% set active =\"active\" %}
                      {% set cont = cont + 1 %}
                    {% endif %}
                    {% set path = \"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico\" %}
                      {% if item.nombrefichero != \"dog_boxer.ico\" %}
                          {% set path =\"http://trivadog.mipropia.com/trivadog/public/img/host/\"~ item.idhabitacion.id ~\"/\"~ item.nombrefichero %}
                      {% endif %}
                    <div class=\"carousel-item {{ active }} w-100\" data-interval=\"8000\">
                      <img src=\"{{ path }}\" class=\"d-block w-100 h-auto back-img\" alt=\"Imagen habitación {{ item.idhabitacion.id }}\">
                    </div>
                  {% endfor %}
                  </div>
                  <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                  </a>
                  <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <div class=\"row py-3 align-items-center\" style=\"height:200px\">
              {% for item in img %}
                {% set path = \"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico\" %}
                  {% if item.nombrefichero != \"dog_boxer.ico\" %}
                      {% set path =\"http://trivadog.mipropia.com/trivadog/public/img/host/\"~ item.idhabitacion.id ~\"/\"~ item.nombrefichero %}
                  {% endif %}
                <div class=\"col-2 mx-auto p-0\" height=\"100px\" width=\"100px\">
                  <a href=\"#\"><img src=\"{{ path }}\" class=\"d-block w-100 h-100 back-img\" alt=\"Imagen habitación {{ item.idhabitacion.id }}\"></a>
                </div>
              {% endfor %}
            </div>
          </div>
          <div class=\"col-12 col-lg-6\">
            <div class=\"card h-100 p-0\">
              <div class=\"card-body p-2\">
                <h3 class=\"card-title text-right pr-1\">{{ room.idhospedaje.nombre }}</h3>
                <h6 class=\"card-title text-right pr-1\">{{ room.idhospedaje.direccion }}</h6>
                <h4 class=\"card-title text-right pr-1\">{{ room.nombre }}</h4>
                <h6 class=\"card-title text-right pr-1\">{{ days}}
                  {% set singular = \"noche\" %}
                  {% if days > 1 %}
                    {% set singular = \"noches\" %}
                  {% endif %}
                  {{ singular }} x {{ room.precio }}
                  <span>€</span>
                </h6>
                {% set calc = 0 %}
                {% if days is not empty %}
                  {% set calc = room.precio * days %}
                  <h5 class=\"card-title text-right pr-1\">{{ calc }}<span>€</span></h5>
                {% endif %}
                <hr class=\"mx-1\">
                <h5 class=\"card-title pl-1\">Descripción</h5>
                <div class=\"card mb-2\">
                  <p class=\"card-text overflow-auto p-1\" style=\"height:120px\">
                    {{ room.idhospedaje.descripcion}}
                  </p>
                </div>
                <h5 class=\"card-title pl-1\">Servicios</h5>
                <div class=\"card mb-2\">
                  <p class=\"card-text overflow-auto p-1\" style=\"height:120px\">
                    {% for item in roomservice %}
                     - {{ item.idservicio.nombre}}
                    {% endfor %}
                  </p>
                </div>
                <a id=\"comment-link\" href=\"\" class=\"btn w-100\" data-toggle=\"modal\" data-target=\"#comment-modal\">
                <div class=\"row justify-content-right \">
                    <div class=\"col-12\">             
                      <p class=\"text-left pr-1 mb-0\">Comentarios - {{ room.numComentarios}} </p>
                    </div>
                    <div class=\"col-12\">
                    {% set val = room.mediaValoracion %}
                    {% if val != 0 %}
                      <p class=\"text-left mb-0\"> 
                        Valoracion -
                        {% for i in 1..val %} 
                          <span class=\"fa fa-star checked text-warning\" id=\"star{{i}}\"></span>
                        {% endfor %}
                      </p>
                    {% else %}
                      <p class=\"text-left mb-0\">Valoracion</p>
                    {% endif %}
                    {% set valpet = room.mediaValoracionMascotas %}
                    {% if valpet != 0 %}
                      <p class=\"text-left mb-0\"> 
                         Valoracion mascotas -
                         {% for i in 1..valpet %} 
                          <span class=\"fa fa-star checked text-warning\" id=\"star{{i}}\"></span>
                        {% endfor %}
                      </p>
                    {% else %}
                      <p class=\"text-left mb-0\">Valoracion mascotas</p>
                    {% endif %}
                  </div>
                </div>
                </a>
                <div class=\"justify-content-md-right\"></div>
                <div class=\"justify-content-md-right\"></div>
                <div class=\"col-12 justify-content-lg-center\">
                  <div class=\"col-4\"></div>
                  <div class=\"col-4 mx-auto mt-2\" >
                    {% if linkcontrol == \"busqueda\" %}
                      <a class=\"btn btn-primary mb-4 px-0 btn-home w-100\" href=\"{{ path(\"listaReserva\", { idHabitacion: room.id }) }}?destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}&days={{ days }}\" role=\"button\">Reservar</a>
                    {% endif %}
                  </div>
                  <div class=\"col-4\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row pb-4\" style=\"height: 20%\">
    <div class=\"col-12 justify-content-center\">
      <div class=\"w-25 mx-auto mt-5 btn-registry\">
        <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/index\" role=\"button\">Registra tu negocio</a>
      </div>
    </div>
  </div>
</div> 

<!--Modal-->
<div id=\"comment-modal\" class=\"modal\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
     <div class=\"modal-header\">
        <h4 class=\"modal-title\">Comentarios</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <!-- se repetirá por cada resultado-->
      {% for item in comment %}
        <div class=\"modal-body pb-0 pt-1 px-2\" >
          <div class=\"media row\">
            <div class=\"media-body col-2 \">
              <p class=\"mt-1\">{{ item.idcliente.nombre }} {{ item.idcliente.apellidos }}</p>
            </div>
            <div class=\"media-body col-7 \">
                <p class=\"text-left\">{{ item.comentario }}</p>
            </div>
            <div class=\"media-body col-3 \">
              <div>
                <p class=\"text-right mb-0\">Valoración:</p>
              </div>
              <div>
                {% set val = item.valoracion %}
                  <p class=\"text-right mb-0\">
                    {% for i in 1..val %} 
                      <span class=\"fa fa-star checked text-warning\" id=\"star{{i}}\"></span>
                    {% endfor %}
                  </p>
              </div>
              <div>
                <p class=\"text-right mb-0\">Valoración mascotas:</p>
              </div>
              <div class=\"\">
                {% set valpet = item.valoracionmascotas %}
                  <p class=\"text-right mb-0\"> 
                    {% for i in 1..valpet %} 
                      <span class=\"fa fa-star checked text-warning\" id=\"star{{i}}\"></span>
                    {% endfor %}
                  </p>
              </div>
            </div>
          </div>
        </div>
        <hr class=\"mx-3 my-0\">
      {% endfor %}
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}
  <script src=\"{{ asset('js/detail.js') }}\"></script>
{% endblock %}", "habitaciones/detallealojamiento.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/habitaciones/detallealojamiento.html.twig");
    }
}
