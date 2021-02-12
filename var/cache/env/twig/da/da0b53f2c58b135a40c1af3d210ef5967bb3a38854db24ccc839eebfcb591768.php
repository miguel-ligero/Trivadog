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

/* habitaciones/resultadobusquedahotel.html.twig */
class __TwigTemplate_5dcdab8fa2a825446b2b8e2b1a429efe8420e083936318dc8e3f496b65b55dab extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/resultadobusquedahotel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitaciones/resultadobusquedahotel.html.twig", 1);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/result.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"container\">
     <div class=\"row align-items-center py-4\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"auComplete\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"col-md-6 col-lg-2  pt-2\">
                        <select id=\"typehosting\"name=\"typehosting\" class=\"custom-select form-control-sm search\" placeholder=\"\" required>
                            <option value=\"\">Seleccione uno</option>
                            ";
        // line 23
        $context["selected"] = "";
        // line 24
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hostingtype"]) || array_key_exists("hostingtype", $context) ? $context["hostingtype"] : (function () { throw new RuntimeError('Variable "hostingtype" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "                                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 25), (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 25, $this->source); })()))) {
                echo " 
                                    ";
                // line 26
                $context["selected"] = "selected";
                // line 27
                echo "                                ";
            }
            // line 28
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 28, $this->source); })()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 28), "html", null, true);
            echo "</option>
                            ";
            // line 29
            $context["selected"] = "";
            // line 30
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        </select>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Desde\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["fromdatapicker"]) || array_key_exists("fromdatapicker", $context) ? $context["fromdatapicker"] : (function () { throw new RuntimeError('Variable "fromdatapicker" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Hasta\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["todatapicker"]) || array_key_exists("todatapicker", $context) ? $context["todatapicker"] : (function () { throw new RuntimeError('Variable "todatapicker" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"adults\" name=\"adults\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Adultos\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"children\" name=\"children\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Niños\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-md-6 col-lg-1 pt-2\">
                        <input id=\"pets\" name=\"pets\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Mascotas\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-md-4 col-lg-1 pt-2 mr-0\">
                        <button id=\"btnsearch\" name=\"btnsearch\" type=\"submit\" class=\"btn btn-primary btn-home btn-sm\">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row justify-content-md-center\" style=\"min-height:32rem\">
    ";
        // line 56
        if (((isset($context["modalmessage"]) || array_key_exists("modalmessage", $context)) && 0 === twig_compare((isset($context["modalmessage"]) || array_key_exists("modalmessage", $context) ? $context["modalmessage"] : (function () { throw new RuntimeError('Variable "modalmessage" does not exist.', 56, $this->source); })()), false))) {
            // line 57
            echo "        ";
            $context["j"] = 1;
            // line 58
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 59
                echo "        <div class=\"col-12 pb-2 \" style=\"min-height: 5rem\">
            <div class=\"media row outline-secondary result-link result-frame mx-auto\">
                <div class=\"media-body col-12 col-lg-3 align-self-center \">
                    <div id=\"carouselExampleControls";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "\" class=\"carousel slide mx-auto\" data-ride=\"carousel\" style=\"width:12rem; height:7rem\">
                        <div class=\"carousel-inner\">
                            ";
                // line 64
                $context["i"] = 1;
                // line 65
                echo "                            ";
                $context["active"] = "active";
                // line 66
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 66, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 67
                    echo "                                ";
                    $context["path"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico";
                    // line 68
                    echo "                                    ";
                    if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["val"], "nombrefichero", [], "any", false, false, false, 68), "dog_boxer.ico")) {
                        // line 69
                        echo "                                        ";
                        $context["path"] = ((("http://trivadog.mipropia.com/trivadog/public/img/host/" . twig_get_attribute($this->env, $this->source, $context["val"], "idHabitacion", [], "any", false, false, false, 69)) . "/") . twig_get_attribute($this->env, $this->source, $context["val"], "nombrefichero", [], "any", false, false, false, 69));
                        // line 70
                        echo "                                    ";
                    }
                    // line 71
                    echo "                                ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, $context["val"], "idHabitacion", [], "any", false, false, false, 71))) {
                        // line 72
                        echo "                                <div id=\"carousel";
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 72, $this->source); })()), "html", null, true);
                        echo "\" class=\"carousel-item ";
                        echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 72, $this->source); })()), "html", null, true);
                        echo "\">
                                    <img src=\"";
                        // line 73
                        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 73, $this->source); })()), "html", null, true);
                        echo "\" class=\"\" alt=\"Imagen habitación ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 73), "html", null, true);
                        echo "\" style=\"width:12rem; height:7rem\">
                                </div>
                                ";
                        // line 75
                        $context["active"] = "";
                        // line 76
                        echo "                                ";
                    }
                    // line 77
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 79, $this->source); })()), "html", null, true);
                echo "\" role=\"button\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
                <a class=\"link-result col-12 col-lg-6 mt-2 align-self-center\" href=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/busquedaHabitacion/";
                // line 89
                echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "?destination=";
                echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "&typehosting=";
                echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "&from=";
                echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "&to=";
                echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "&page=";
                echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "&host='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombreHotel", [], "any", false, false, false, 89), "html", null, true);
                echo "'&adults=";
                echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "&children=";
                echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "&pets=";
                echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "\" width=\"25rem\">
                    <div class=\"media-body col-12 align-self-center\">
                        <h3 class=\"mt-1 text-body text-center\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombreHotel", [], "any", false, false, false, 91), "html", null, true);
                echo "</h3>
                        <h5 class=\"mt-1 text-body text-center\">";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "direccion", [], "any", false, false, false, 92), "html", null, true);
                echo "</h5>
                    </div>
                </a>
                <div class=\"media-body col-12 col-lg-6 align-self-center mt-2\">
                    ";
                // line 96
                $context["varcom"] = twig_get_attribute($this->env, $this->source, $context["item"], "numComentarios", [], "any", false, false, false, 96);
                // line 97
                echo "                    ";
                if (0 === twig_compare((isset($context["varcom"]) || array_key_exists("varcom", $context) ? $context["varcom"] : (function () { throw new RuntimeError('Variable "varcom" does not exist.', 97, $this->source); })()), "")) {
                    // line 98
                    echo "                        ";
                    $context["varcom"] = 0;
                    // line 99
                    echo "                    ";
                }
                // line 100
                echo "                    <p class=\"text-right\">";
                echo twig_escape_filter($this->env, (isset($context["varcom"]) || array_key_exists("varcom", $context) ? $context["varcom"] : (function () { throw new RuntimeError('Variable "varcom" does not exist.', 100, $this->source); })()), "html", null, true);
                echo " Comentarios</p>
                    ";
                // line 101
                $context["var"] = twig_get_attribute($this->env, $this->source, $context["item"], "mediaValoracion", [], "any", false, false, false, 101);
                // line 102
                echo "                    ";
                if (0 !== twig_compare((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 102, $this->source); })()), 0)) {
                    // line 103
                    echo "                        <p class=\"text-right\">
                            ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 104, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                                <span class=\"fa fa-star checked text-warning\" id=\"star";
                        // line 105
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\"></span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "                            Valoracion
                        </p>
                    ";
                } else {
                    // line 110
                    echo "                        <p class=\"text-right\">Valoracion</p>
                    ";
                }
                // line 112
                echo "                    ";
                $context["varmas"] = twig_get_attribute($this->env, $this->source, $context["item"], "mediaValoracionMascotas", [], "any", false, false, false, 112);
                // line 113
                echo "                    ";
                if (0 !== twig_compare((isset($context["varmas"]) || array_key_exists("varmas", $context) ? $context["varmas"] : (function () { throw new RuntimeError('Variable "varmas" does not exist.', 113, $this->source); })()), 0)) {
                    // line 114
                    echo "                        <p class=\"text-right\">
                            ";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["varmas"]) || array_key_exists("varmas", $context) ? $context["varmas"] : (function () { throw new RuntimeError('Variable "varmas" does not exist.', 115, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                                <span class=\"fa fa-star checked text-warning\" id=\"star";
                        // line 116
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\"></span>
                                
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                            Valoracion mascotas
                        </p>
                    ";
                } else {
                    // line 122
                    echo "                        <p class=\"text-right\">Valoracion mascotas</p>
                    ";
                }
                // line 124
                echo "                </div>
            </div>
        </div>
        ";
                // line 127
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 127, $this->source); })()) + 1);
                // line 128
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "    </div>
    <div class=\"row pb-4\" style=\"height: 20%\">
        <div class=\"col-12 pt-5\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination justify-content-center pl-0\">
                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busqueda", ["page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 134, $this->source); })())]), "html", null, true);
            echo "?destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "\">Anterior</a></li>
                    ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 135, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 136
                echo "                        ";
                $context["active"] = "";
                // line 137
                echo "                        ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 137, $this->source); })()), $context["i"])) {
                    // line 138
                    echo "                            ";
                    $context["active"] = "active";
                    // line 139
                    echo "                        ";
                }
                // line 140
                echo "                        <li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 140, $this->source); })()), "html", null, true);
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busqueda", ["page" => $context["i"]]), "html", null, true);
                echo "?destination=";
                echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "&typehosting=";
                echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "&from=";
                echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "&to=";
                echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "&adults=";
                echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "&children=";
                echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "&pets=";
                echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busqueda", ["page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 144, $this->source); })())]), "html", null, true);
            echo "?destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "\">Siguiente</a></li>
                </ul>
            </nav>
\t    </div>
        <div class=\"col-12 justify-content-center\">
            <div class=\"w-25 mx-auto mt-5 btn-registry\">
                <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/index\" role=\"button\">Registra tu negocio</a>
            </div>
        </div>
    </div>
    ";
        }
        // line 155
        echo "    
</div>

<!--Modal no hay resultado-->
<div id=\"result-modal\" class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\">0 Resultados</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_pug.ico\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\">No hay disponible ningún alojamiento de las características solicitadas. Pruebe otras opciones. </p>
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

    // line 180
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 181
        echo "    ";
        $context["modal"] = "hide";
        // line 182
        echo "    ";
        if (0 === twig_compare((isset($context["modalmessage"]) || array_key_exists("modalmessage", $context) ? $context["modalmessage"] : (function () { throw new RuntimeError('Variable "modalmessage" does not exist.', 182, $this->source); })()), true)) {
            // line 183
            echo "        ";
            $context["modal"] = "show";
            // line 184
            echo "    ";
        }
        // line 185
        echo "    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function (){
            \$('#result-modal').modal('";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "');
            \$('#result-modal').on('hide.bs.modal', function(){
                location.href = \"http://trivadog.mipropia.com/trivadog/public/\";
            });
            
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

            \$('#typehosting').on('change', function() {
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
            });
        localStorage.clear();
            localStorage.setItem(\"auComplete\", \"vacio\");
            localStorage.setItem(\"typehosting\", \"vacio\");
            localStorage.setItem(\"inputfrom\", \"vacio\");
            localStorage.setItem(\"inputto\", \"vacio\");
        });

        //Se inicializa al seleccionar el destino del autocomplete
    function InicializarFormulario() {
        //EventosFormulario();
    }

    function EventosFormulario() {
        //La primera vez se actualiza el local storage al devolver el json la peticion AJAX del autocomplete
        \$('#auComplete').on('blur', function () {
            //StorageUpdate(this);
        });
        
        \$('#typehosting').on({
            blur: function () {
                //StorageUpdate(this);
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
            //StorageUpdate(this);
        });

        \$('#inputto').on('change', function () {
            //StorageUpdate(this);
        });
    }
    
    function StorageUpdate(input){
        //Se mira si el input tiene algun dato, y si es así se almacena en el local storage el id del input
        //y \"ok\"
       //\$(\"#btnsearch\").attr('disabled', 'disabled');
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
        return "habitaciones/resultadobusquedahotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 189,  551 => 186,  548 => 185,  545 => 184,  542 => 183,  539 => 182,  536 => 181,  529 => 180,  499 => 155,  470 => 144,  445 => 141,  440 => 140,  437 => 139,  434 => 138,  431 => 137,  428 => 136,  424 => 135,  406 => 134,  399 => 129,  393 => 128,  391 => 127,  386 => 124,  382 => 122,  377 => 119,  368 => 116,  362 => 115,  359 => 114,  356 => 113,  353 => 112,  349 => 110,  344 => 107,  336 => 105,  330 => 104,  327 => 103,  324 => 102,  322 => 101,  317 => 100,  314 => 99,  311 => 98,  308 => 97,  306 => 96,  299 => 92,  295 => 91,  272 => 89,  263 => 83,  256 => 79,  253 => 78,  247 => 77,  244 => 76,  242 => 75,  235 => 73,  228 => 72,  225 => 71,  222 => 70,  219 => 69,  216 => 68,  213 => 67,  208 => 66,  205 => 65,  203 => 64,  198 => 62,  193 => 59,  188 => 58,  185 => 57,  183 => 56,  170 => 46,  164 => 43,  158 => 40,  152 => 37,  146 => 34,  141 => 31,  135 => 30,  133 => 29,  124 => 28,  121 => 27,  119 => 26,  114 => 25,  109 => 24,  107 => 23,  99 => 18,  91 => 12,  84 => 11,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/result.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
     <div class=\"row align-items-center py-4\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"auComplete\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" value=\"{{ destination }}\" required>
                    </div>
                    <div class=\"col-md-6 col-lg-2  pt-2\">
                        <select id=\"typehosting\"name=\"typehosting\" class=\"custom-select form-control-sm search\" placeholder=\"\" required>
                            <option value=\"\">Seleccione uno</option>
                            {% set selected = \"\"%}
                            {% for item in hostingtype %}
                                {% if (item.id == typehosting) %} 
                                    {% set selected = \"selected\" %}
                                {% endif %}
                            <option value=\"{{ item.id }}\" {{ selected }}>{{ item.nombre }}</option>
                            {% set selected = \"\" %}
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Desde\" value=\"{{ fromdatapicker }}\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Hasta\" value=\"{{ todatapicker }}\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"adults\" name=\"adults\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Adultos\" value=\"{{ adults }}\">
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"children\" name=\"children\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Niños\" value=\"{{ children }}\">
                    </div>
                    <div class=\"col-md-6 col-lg-1 pt-2\">
                        <input id=\"pets\" name=\"pets\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Mascotas\" value=\"{{ pets }}\">
                    </div>
                    <div class=\"col-md-4 col-lg-1 pt-2 mr-0\">
                        <button id=\"btnsearch\" name=\"btnsearch\" type=\"submit\" class=\"btn btn-primary btn-home btn-sm\">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row justify-content-md-center\" style=\"min-height:32rem\">
    {% if modalmessage is defined and modalmessage == false %}
        {% set j = 1 %}
        {% for item in host %}
        <div class=\"col-12 pb-2 \" style=\"min-height: 5rem\">
            <div class=\"media row outline-secondary result-link result-frame mx-auto\">
                <div class=\"media-body col-12 col-lg-3 align-self-center \">
                    <div id=\"carouselExampleControls{{j}}\" class=\"carousel slide mx-auto\" data-ride=\"carousel\" style=\"width:12rem; height:7rem\">
                        <div class=\"carousel-inner\">
                            {% set i = 1 %}
                            {% set active = \"active\" %}
                            {% for val in imagenes %}
                                {% set path = \"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico\" %}
                                    {% if val.nombrefichero != \"dog_boxer.ico\" %}
                                        {% set path =\"http://trivadog.mipropia.com/trivadog/public/img/host/\"~ val.idHabitacion ~\"/\"~ val.nombrefichero %}
                                    {% endif %}
                                {% if item.idHabitacion == val.idHabitacion %}
                                <div id=\"carousel{{i}}\" class=\"carousel-item {{active}}\">
                                    <img src=\"{{ path }}\" class=\"\" alt=\"Imagen habitación {{ item.idHabitacion }}\" style=\"width:12rem; height:7rem\">
                                </div>
                                {% set active = \"\" %}
                                {% endif %}
                            {% endfor %}
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls{{j}}\" role=\"button\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls{{j}}\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
                <a class=\"link-result col-12 col-lg-6 mt-2 align-self-center\" href=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/busquedaHabitacion/{{ page }}?destination={{ destination}}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&page={{ page }}&host='{{ item.nombreHotel }}'&adults={{ adults }}&children={{ children }}&pets={{ pets }}\" width=\"25rem\">
                    <div class=\"media-body col-12 align-self-center\">
                        <h3 class=\"mt-1 text-body text-center\">{{ item.nombreHotel }}</h3>
                        <h5 class=\"mt-1 text-body text-center\">{{ item.direccion }}</h5>
                    </div>
                </a>
                <div class=\"media-body col-12 col-lg-6 align-self-center mt-2\">
                    {% set varcom = item.numComentarios %}
                    {% if (varcom == \"\") %}
                        {% set varcom = 0 %}
                    {% endif %}
                    <p class=\"text-right\">{{ varcom }} Comentarios</p>
                    {% set var = item.mediaValoracion %}
                    {% if var != 0 %}
                        <p class=\"text-right\">
                            {% for i in 1..var %} 
                                <span class=\"fa fa-star checked text-warning\" id=\"star{{i}}\"></span>
                            {% endfor %}
                            Valoracion
                        </p>
                    {% else %}
                        <p class=\"text-right\">Valoracion</p>
                    {% endif %}
                    {% set varmas = item.mediaValoracionMascotas %}
                    {% if varmas != 0 %}
                        <p class=\"text-right\">
                            {% for i in 1..varmas %} 
                                <span class=\"fa fa-star checked text-warning\" id=\"star{{i}}\"></span>
                                
                            {% endfor %}
                            Valoracion mascotas
                        </p>
                    {% else %}
                        <p class=\"text-right\">Valoracion mascotas</p>
                    {% endif %}
                </div>
            </div>
        </div>
        {% set j = j + 1 %}
        {% endfor %}
    </div>
    <div class=\"row pb-4\" style=\"height: 20%\">
        <div class=\"col-12 pt-5\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination justify-content-center pl-0\">
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(\"busqueda\", {page: prev }) }}?destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}\">Anterior</a></li>
                    {% for i in 1..pagestotal %}
                        {% set active = \"\" %}
                        {% if page == i %}
                            {% set active = \"active\" %}
                        {% endif %}
                        <li class=\"page-item {{ active }}\">
                            <a class=\"page-link\" href=\"{{ path(\"busqueda\", {page: i}) }}?destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(\"busqueda\", {page: next}) }}?destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}\">Siguiente</a></li>
                </ul>
            </nav>
\t    </div>
        <div class=\"col-12 justify-content-center\">
            <div class=\"w-25 mx-auto mt-5 btn-registry\">
                <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/index\" role=\"button\">Registra tu negocio</a>
            </div>
        </div>
    </div>
    {% endif %}
    
</div>

<!--Modal no hay resultado-->
<div id=\"result-modal\" class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\">0 Resultados</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_pug.ico\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\">No hay disponible ningún alojamiento de las características solicitadas. Pruebe otras opciones. </p>
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
    {% if modalmessage == true %}
        {% set modal = 'show' %}
    {% endif %}
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"{{ asset('js/datepicker.js') }}\"></script>
    <script>
        \$(document).ready(function (){
            \$('#result-modal').modal('{{ modal }}');
            \$('#result-modal').on('hide.bs.modal', function(){
                location.href = \"http://trivadog.mipropia.com/trivadog/public/\";
            });
            
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

            \$('#typehosting').on('change', function() {
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
            });
        localStorage.clear();
            localStorage.setItem(\"auComplete\", \"vacio\");
            localStorage.setItem(\"typehosting\", \"vacio\");
            localStorage.setItem(\"inputfrom\", \"vacio\");
            localStorage.setItem(\"inputto\", \"vacio\");
        });

        //Se inicializa al seleccionar el destino del autocomplete
    function InicializarFormulario() {
        //EventosFormulario();
    }

    function EventosFormulario() {
        //La primera vez se actualiza el local storage al devolver el json la peticion AJAX del autocomplete
        \$('#auComplete').on('blur', function () {
            //StorageUpdate(this);
        });
        
        \$('#typehosting').on({
            blur: function () {
                //StorageUpdate(this);
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
            //StorageUpdate(this);
        });

        \$('#inputto').on('change', function () {
            //StorageUpdate(this);
        });
    }
    
    function StorageUpdate(input){
        //Se mira si el input tiene algun dato, y si es así se almacena en el local storage el id del input
        //y \"ok\"
       //\$(\"#btnsearch\").attr('disabled', 'disabled');
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
{% endblock %}", "habitaciones/resultadobusquedahotel.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\habitaciones\\resultadobusquedahotel.html.twig");
    }
}
