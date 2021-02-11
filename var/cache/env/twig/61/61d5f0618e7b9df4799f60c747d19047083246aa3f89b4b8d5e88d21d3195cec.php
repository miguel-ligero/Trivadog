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

/* home/index.html.twig */
class __TwigTemplate_c59b5bfadd56b59bc34dbda597f0fed45517df1952c20c6acc58e4d1898c411f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/header.css\">
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
    <div class=\"row align-items-center py-4\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"auComplete\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" required>
                    </div>
                    <div class=\"col-md-6 col-lg-2  pt-2\">
                        <select id=\"typehosting\"name=\"typehosting\" class=\"custom-select form-control-sm search\" placeholder=\"\">
                            <option value=\"\"></option>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hostingtype"]) || array_key_exists("hostingtype", $context) ? $context["hostingtype"] : (function () { throw new RuntimeError('Variable "hostingtype" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </select>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Desde\" value=\"\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Hasta\" value=\"\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"adults\" name=\"adults\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Adultos\">
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"children\" name=\"children\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Niños\">
                    </div>
                    <div class=\"col-md-6 col-lg-1 pt-2\">
                        <input id=\"pets\" name=\"pets\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Mascotas\">
                    </div>
                    <div class=\"col-md-4 col-lg-1 pt-2 mr-0\">
                        <button id=\"btnsearch\" name=\"btnsearch\" type=\"submit\" class=\"btn btn-primary btn-home btn-sm\" disabled>Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row justify-content-md-center pt-lg-5\" style=\"height: 30%; min-height: 400px\">
        <div class=\"col-12 h-75\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\" style=\"z-index: 1\">
                <div class=\"carousel-inner\" >
                    ";
        // line 53
        $context["li"] = 0;
        // line 54
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "                        ";
            $context["active"] = "";
            // line 56
            echo "                        ";
            if (0 === twig_compare((isset($context["li"]) || array_key_exists("li", $context) ? $context["li"] : (function () { throw new RuntimeError('Variable "li" does not exist.', 56, $this->source); })()), 0)) {
                echo " 
                            ";
                // line 57
                $context["active"] = "active";
                // line 58
                echo "                        ";
            }
            // line 59
            echo "                        <div class=\"carousel-item ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 59, $this->source); })()), "html", null, true);
            echo " imgnormalizada\">
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["item"]);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 61
                echo "                                ";
                $context["path"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico";
                // line 62
                echo "                                ";
                if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["element"], "nombrefichero", [], "any", false, false, false, 62), "dog_boxer.ico")) {
                    // line 63
                    echo "                                    ";
                    $context["path"] = ((("http://trivadog.mipropia.com/trivadog/public/img/host/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)) . "/") . twig_get_attribute($this->env, $this->source, $context["element"], "nombrefichero", [], "any", false, false, false, 63));
                    // line 64
                    echo "                                ";
                }
                // line 65
                echo "                            <a class=\"nav-link\" href=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/detalle/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 66, $this->source); })()), "html", null, true);
                echo "\" class=\"item-img\" alt=\"Imagen habitación ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
                echo "\">
                                <div class=\"carousel-caption d-md-block\">
                                    <h3 class=\"text-img\" style=\"font-size:3.75rem \">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 68), "idhospedaje", [], "any", false, false, false, 68), "nombre", [], "any", false, false, false, 68), "html", null, true);
                echo "</h3>
                                    <h5 class=\"text-img\">";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 69), "nombre", [], "any", false, false, false, 69), "html", null, true);
                echo "</h5>
                                    ";
                // line 70
                $context["var"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 70), "mediaValoracion", [], "any", false, false, false, 70);
                // line 71
                echo "                                    ";
                if (1 === twig_compare((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 71, $this->source); })()), 0)) {
                    // line 72
                    echo "                                        <p class=\"text-img\">Valoracion: 
                                            ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 73, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                                            <span class=\"fa fa-star checked text-warning\" id=\"star";
                        // line 74
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\"></span>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "                                        </p>
                                    ";
                }
                // line 78
                echo "                                </div>
                            </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        </div>
                        ";
            // line 82
            $context["li"] = ((isset($context["li"]) || array_key_exists("li", $context) ? $context["li"] : (function () { throw new RuntimeError('Variable "li" does not exist.', 82, $this->source); })()) + 1);
            // line 83
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </div>
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
    <div class=\"row pb-4\" style=\"height: 20%\">
        <div class=\"col-12 justify-content-center\">
            <div class=\"w-25 mx-auto mt-md-5 btn-registry\">
                <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/index\" role=\"button\">Registra tu negocio</a>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "    
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function () {
        localStorage.clear();
        localStorage.setItem(\"auComplete\", \"vacio\");
        localStorage.setItem(\"typehosting\", \"vacio\");
        localStorage.setItem(\"inputfrom\", \"vacio\");
        localStorage.setItem(\"inputto\", \"vacio\");
    });

    //Se inicializa al seleccionar el destino del autocomplete
    function InicializarFormulario() {
        EventosFormulario();
    }

    function EventosFormulario() {
        //La primera vez se actualiza el local storage al devolver el json la peticion AJAX del autocomplete
        \$('#auComplete').on('blur', function () {
            StorageUpdate(this);
        });
        
        \$('#typehosting').on({
            blur: function () {
                StorageUpdate(this);
            },
            change: function() {
                var check = \$('#typehosting').val();
                if (check == 3) {
                    \$('#adults').attr('disabled', 'disabled');
                    \$('#children').attr('disabled', 'disabled');
                    \$('#pets').attr('disabled', 'disabled');
                }else{
                    \$('#adults').removeAttr('disabled');
                    \$('#children').removeAttr('disabled');
                    \$('#pets').removeAttr('disabled');
                }
            }, 
        });

        \$('#inputfrom').on('change', function () {
            StorageUpdate(this);
        });

        \$('#inputto').on('change', function () {
            StorageUpdate(this);
        });
    }
    
    function StorageUpdate(input){
        //Se mira si el input tiene algun dato, y si es así se almacena en el local storage el id del input
        //y \"ok\"
        \$(\"#btnsearch\").attr('disabled', 'disabled');
        var data = input.value;
        var input = input.id;
        if (data != \"\"){
            localStorage.setItem(input, \"ok\");
        }else{
            localStorage.setItem(input, \"vacio\");
        }
        //Se comprueba que todos los inputs obligatorios del formulario esten rellenados
        CheckForm();
    }

    function CheckForm(){
        //Se obtienen todos los items del local storage y se comprueba que el valor sea \"ok\". Si es
        //así, se habilita el botón del formulario
        checkauComplete = localStorage.getItem(\"auComplete\");
        checktypehosting = localStorage.getItem(\"typehosting\");
        checkfrom = localStorage.getItem(\"inputfrom\");
        checkto = localStorage.getItem(\"inputto\");

        if (
            checkauComplete == \"ok\" &&
            checktypehosting == \"ok\" &&
            checkfrom == \"ok\" &&
            checkto == \"ok\"
        ) {
            \$(\"#btnsearch\").removeAttr(\"disabled\");
        }
    }
        
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 111,  290 => 109,  283 => 108,  254 => 84,  248 => 83,  246 => 82,  243 => 81,  235 => 78,  231 => 76,  223 => 74,  217 => 73,  214 => 72,  211 => 71,  209 => 70,  205 => 69,  201 => 68,  194 => 66,  189 => 65,  186 => 64,  183 => 63,  180 => 62,  177 => 61,  173 => 60,  168 => 59,  165 => 58,  163 => 57,  158 => 56,  155 => 55,  150 => 54,  148 => 53,  118 => 25,  107 => 23,  103 => 22,  90 => 11,  83 => 10,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/header.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row align-items-center py-4\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"auComplete\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" required>
                    </div>
                    <div class=\"col-md-6 col-lg-2  pt-2\">
                        <select id=\"typehosting\"name=\"typehosting\" class=\"custom-select form-control-sm search\" placeholder=\"\">
                            <option value=\"\"></option>
                            {% for item in hostingtype %}
                            <option value=\"{{ item.id }}\">{{ item.nombre }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Desde\" value=\"\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Hasta\" value=\"\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"adults\" name=\"adults\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Adultos\">
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"children\" name=\"children\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Niños\">
                    </div>
                    <div class=\"col-md-6 col-lg-1 pt-2\">
                        <input id=\"pets\" name=\"pets\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Mascotas\">
                    </div>
                    <div class=\"col-md-4 col-lg-1 pt-2 mr-0\">
                        <button id=\"btnsearch\" name=\"btnsearch\" type=\"submit\" class=\"btn btn-primary btn-home btn-sm\" disabled>Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row justify-content-md-center pt-lg-5\" style=\"height: 30%; min-height: 400px\">
        <div class=\"col-12 h-75\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\" style=\"z-index: 1\">
                <div class=\"carousel-inner\" >
                    {% set li = 0 %}
                    {% for item in room %}
                        {% set active = \"\" %}
                        {% if (li == 0) %} 
                            {% set active = \"active\" %}
                        {% endif %}
                        <div class=\"carousel-item {{ active }} imgnormalizada\">
                            {% for element in item %}
                                {% set path = \"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico\" %}
                                {% if element.nombrefichero != \"dog_boxer.ico\" %}
                                    {% set path =\"http://trivadog.mipropia.com/trivadog/public/img/host/\"~ element.idhabitacion.id ~\"/\"~ element.nombrefichero %}
                                {% endif %}
                            <a class=\"nav-link\" href=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/detalle/{{ element.idhabitacion.id }}\">
                                <img src=\"{{ path }}\" class=\"item-img\" alt=\"Imagen habitación {{ element.idhabitacion.id }}\">
                                <div class=\"carousel-caption d-md-block\">
                                    <h3 class=\"text-img\" style=\"font-size:3.75rem \">{{ element.idhabitacion.idhospedaje.nombre }}</h3>
                                    <h5 class=\"text-img\">{{ element.idhabitacion.nombre }}</h5>
                                    {% set var = element.idhabitacion.mediaValoracion %}
                                    {% if var > 0 %}
                                        <p class=\"text-img\">Valoracion: 
                                            {% for i in 1..var %} 
                                            <span class=\"fa fa-star checked text-warning\" id=\"star{{i}}\"></span>
                                            {% endfor %}
                                        </p>
                                    {% endif %}
                                </div>
                            </a>
                            {% endfor %}
                        </div>
                        {% set li = li + 1 %}
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
    <div class=\"row pb-4\" style=\"height: 20%\">
        <div class=\"col-12 justify-content-center\">
            <div class=\"w-25 mx-auto mt-md-5 btn-registry\">
                <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/index\" role=\"button\">Registra tu negocio</a>
            </div>
        </div>
    </div>
</div>


{% endblock %}

{% block javascripts %}
    
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"{{ asset('js/datepicker.js') }}\"></script>
<script>
    \$(document).ready(function () {
        localStorage.clear();
        localStorage.setItem(\"auComplete\", \"vacio\");
        localStorage.setItem(\"typehosting\", \"vacio\");
        localStorage.setItem(\"inputfrom\", \"vacio\");
        localStorage.setItem(\"inputto\", \"vacio\");
    });

    //Se inicializa al seleccionar el destino del autocomplete
    function InicializarFormulario() {
        EventosFormulario();
    }

    function EventosFormulario() {
        //La primera vez se actualiza el local storage al devolver el json la peticion AJAX del autocomplete
        \$('#auComplete').on('blur', function () {
            StorageUpdate(this);
        });
        
        \$('#typehosting').on({
            blur: function () {
                StorageUpdate(this);
            },
            change: function() {
                var check = \$('#typehosting').val();
                if (check == 3) {
                    \$('#adults').attr('disabled', 'disabled');
                    \$('#children').attr('disabled', 'disabled');
                    \$('#pets').attr('disabled', 'disabled');
                }else{
                    \$('#adults').removeAttr('disabled');
                    \$('#children').removeAttr('disabled');
                    \$('#pets').removeAttr('disabled');
                }
            }, 
        });

        \$('#inputfrom').on('change', function () {
            StorageUpdate(this);
        });

        \$('#inputto').on('change', function () {
            StorageUpdate(this);
        });
    }
    
    function StorageUpdate(input){
        //Se mira si el input tiene algun dato, y si es así se almacena en el local storage el id del input
        //y \"ok\"
        \$(\"#btnsearch\").attr('disabled', 'disabled');
        var data = input.value;
        var input = input.id;
        if (data != \"\"){
            localStorage.setItem(input, \"ok\");
        }else{
            localStorage.setItem(input, \"vacio\");
        }
        //Se comprueba que todos los inputs obligatorios del formulario esten rellenados
        CheckForm();
    }

    function CheckForm(){
        //Se obtienen todos los items del local storage y se comprueba que el valor sea \"ok\". Si es
        //así, se habilita el botón del formulario
        checkauComplete = localStorage.getItem(\"auComplete\");
        checktypehosting = localStorage.getItem(\"typehosting\");
        checkfrom = localStorage.getItem(\"inputfrom\");
        checkto = localStorage.getItem(\"inputto\");

        if (
            checkauComplete == \"ok\" &&
            checktypehosting == \"ok\" &&
            checkfrom == \"ok\" &&
            checkto == \"ok\"
        ) {
            \$(\"#btnsearch\").removeAttr(\"disabled\");
        }
    }
        
</script>

{% endblock %}

", "home/index.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/home/index.html.twig");
    }
}
