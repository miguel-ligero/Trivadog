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

/* habitaciones/resultadobusqueda.html.twig */
class __TwigTemplate_da2d9219929eb6edc7cec2625f86c55dbbe5fae7a5c130d33b9ca7ed3604e6ef extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/resultadobusqueda.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitaciones/resultadobusqueda.html.twig", 1);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/result.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"container\">
     <div class=\"row align-items-center pt-4 pb-2\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"auComplete\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"col-md-6 col-lg-2  pt-2\">
                        <select id=\"typehosting\"name=\"typehosting\" class=\"custom-select form-control-sm search\" placeholder=\"\">
                            <option value=\"\"></option>
                            ";
        // line 24
        $context["selected"] = "";
        // line 25
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hostingtype"]) || array_key_exists("hostingtype", $context) ? $context["hostingtype"] : (function () { throw new RuntimeError('Variable "hostingtype" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 26), (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 26, $this->source); })()))) {
                echo " 
                                    ";
                // line 27
                $context["selected"] = "selected";
                // line 28
                echo "                                ";
            }
            // line 29
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 29, $this->source); })()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 29), "html", null, true);
            echo "</option>
                            ";
            // line 30
            $context["selected"] = "";
            // line 31
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </select>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Desde\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["fromdatapicker"]) || array_key_exists("fromdatapicker", $context) ? $context["fromdatapicker"] : (function () { throw new RuntimeError('Variable "fromdatapicker" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Hasta\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["todatapicker"]) || array_key_exists("todatapicker", $context) ? $context["todatapicker"] : (function () { throw new RuntimeError('Variable "todatapicker" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"adults\" name=\"adults\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Adultos\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"children\" name=\"children\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Niños\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-md-6 col-lg-1 pt-2\">
                        <input id=\"pets\" name=\"pets\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Mascotas\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 47, $this->source); })()), "html", null, true);
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
        // line 57
        if (((isset($context["modalmessage"]) || array_key_exists("modalmessage", $context)) && 0 === twig_compare((isset($context["modalmessage"]) || array_key_exists("modalmessage", $context) ? $context["modalmessage"] : (function () { throw new RuntimeError('Variable "modalmessage" does not exist.', 57, $this->source); })()), false))) {
            // line 58
            echo "        <div class=\"col-12 pb-2 h-100\" >
            <a class=\"btn btn-primary btn-home\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busqueda", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 59, $this->source); })())]), "html", null, true);
            echo "?destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "\" role=\"button\">Volver</a>
        </div>
        ";
            // line 61
            $context["j"] = 1;
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                echo "        <div class=\"col-12 pb-2 h-100\" style=\"min-height: 5rem\">
            <div class=\"media row outline-secondary result-link result-frame mx-auto pb-2\">
                <div class=\"media-body col-12 col-lg-3 align-self-center \">
                    <div id=\"carouselExampleControls";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 66, $this->source); })()), "html", null, true);
                echo "\" class=\"carousel slide mx-auto\" data-ride=\"carousel\" style=\"width:12rem; height:7rem\">
                        <div class=\"carousel-inner\">
                            ";
                // line 68
                $context["i"] = 1;
                // line 69
                echo "                            ";
                $context["active"] = "active";
                // line 70
                echo "                           
                            ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 71, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 72
                    echo "                                ";
                    $context["path"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_chihuahua_bone.ico";
                    // line 73
                    echo "                                    ";
                    if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["val"], "nombrefichero", [], "any", false, false, false, 73), "dog_boxer.ico")) {
                        // line 74
                        echo "                                        ";
                        $context["path"] = ((("http://trivadog.mipropia.com/trivadog/public/img/host/" . twig_get_attribute($this->env, $this->source, $context["val"], "idHabitacion", [], "any", false, false, false, 74)) . "/") . twig_get_attribute($this->env, $this->source, $context["val"], "nombrefichero", [], "any", false, false, false, 74));
                        // line 75
                        echo "                                    ";
                    }
                    // line 76
                    echo "                                ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, $context["val"], "idHabitacion", [], "any", false, false, false, 76))) {
                        // line 77
                        echo "                                <div id=\"carousel";
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 77, $this->source); })()), "html", null, true);
                        echo "\" class=\"carousel-item ";
                        echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 77, $this->source); })()), "html", null, true);
                        echo "\">
                                    <img src=\"";
                        // line 78
                        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 78, $this->source); })()), "html", null, true);
                        echo "\" class=\"\" alt=\"Imagen habitación ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 78), "html", null, true);
                        echo "\" style=\"width:12rem; height:7rem\">
                                </div>
                                ";
                        // line 80
                        $context["active"] = "";
                        // line 81
                        echo "                                ";
                    }
                    // line 82
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 84, $this->source); })()), "html", null, true);
                echo "\" role=\"button\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Anterior</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 88, $this->source); })()), "html", null, true);
                echo "\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Siguiente</span>
                        </a>
                    </div>
                </div>
                ";
                // line 94
                $context["precio"] = twig_get_attribute($this->env, $this->source, $context["item"], "precio", [], "any", false, false, false, 94);
                // line 95
                echo "                ";
                $context["diferencia"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 95, $this->source); })())), "diff", [0 => twig_date_converter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 95, $this->source); })()))], "method", false, false, false, 95);
                // line 96
                echo "                ";
                $context["restante"] = twig_get_attribute($this->env, $this->source, (isset($context["diferencia"]) || array_key_exists("diferencia", $context) ? $context["diferencia"] : (function () { throw new RuntimeError('Variable "diferencia" does not exist.', 96, $this->source); })()), "days", [], "any", false, false, false, 96);
                // line 97
                echo "                ";
                $context["precio"] = ((isset($context["precio"]) || array_key_exists("precio", $context) ? $context["precio"] : (function () { throw new RuntimeError('Variable "precio" does not exist.', 97, $this->source); })()) * (isset($context["restante"]) || array_key_exists("restante", $context) ? $context["restante"] : (function () { throw new RuntimeError('Variable "restante" does not exist.', 97, $this->source); })()));
                // line 98
                echo "                ";
                $context["singular"] = "día";
                // line 99
                echo "                ";
                if (1 === twig_compare((isset($context["restante"]) || array_key_exists("restante", $context) ? $context["restante"] : (function () { throw new RuntimeError('Variable "restante" does not exist.', 99, $this->source); })()), 1)) {
                    // line 100
                    echo "                    ";
                    $context["singular"] = "días";
                    // line 101
                    echo "                ";
                }
                // line 102
                echo "                <a class=\"link-result col-12 col-lg-6 mt-2\" href=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/detalle/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 102), "html", null, true);
                echo "?destination=";
                echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "&typehosting=";
                echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "&from=";
                echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "&to=";
                echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "&adults=";
                echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "&children=";
                echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "&pets=";
                echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "&page=";
                echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "&days=";
                echo twig_escape_filter($this->env, (isset($context["restante"]) || array_key_exists("restante", $context) ? $context["restante"] : (function () { throw new RuntimeError('Variable "restante" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "\" width=\"25rem\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <h3 class=\"mt-1 text-body text-center\">";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombreHotel", [], "any", false, false, false, 105), "html", null, true);
                echo "</h3>
                        </div>
                        <div class=\"col-12\">
                            <h6 class=\"mt-1 text-body text-center\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombreHabitacion", [], "any", false, false, false, 108), "html", null, true);
                echo "</h6>
                        </div>
                    </div>
                    <div class=\"row\">
                        <!-- <div class=\"col-12 align-self-center\">
                            ";
                // line 113
                if (0 !== twig_compare((isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 113, $this->source); })()), 3)) {
                    // line 114
                    echo "                                <h6 class=\"mt-1 text-body text-center\">Adultos: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "numAdultos", [], "any", false, false, false, 114), "html", null, true);
                    echo "</h6>
                                <h6 class=\"mt-1 text-body text-center\">Niños: ";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "numInfantiles", [], "any", false, false, false, 115), "html", null, true);
                    echo "</h6>
                                <h6 class=\"mt-1 text-body text-center\">Mascotas: ";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "numMascotas", [], "any", false, false, false, 116), "html", null, true);
                    echo "</h6>
                            ";
                }
                // line 118
                echo "                            <h6 class=\"mt-1 text-body text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "precio", [], "any", false, false, false, 118), "html", null, true);
                echo " € / noche</h6>
                            <h6 class=\"mt-1 text-body text-center\">";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["restante"]) || array_key_exists("restante", $context) ? $context["restante"] : (function () { throw new RuntimeError('Variable "restante" does not exist.', 119, $this->source); })()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["singular"]) || array_key_exists("singular", $context) ? $context["singular"] : (function () { throw new RuntimeError('Variable "singular" does not exist.', 119, $this->source); })()), "html", null, true);
                echo "</h6>
                            <h5 class=\"mt-1 text-body text-center\">";
                // line 120
                echo twig_escape_filter($this->env, (isset($context["precio"]) || array_key_exists("precio", $context) ? $context["precio"] : (function () { throw new RuntimeError('Variable "precio" does not exist.', 120, $this->source); })()), "html", null, true);
                echo " €</h5>
                        </div> -->
                        <div class=\"col-12 col-sm-6\">
                            <table class=\"mx-auto\">
                                ";
                // line 124
                if (0 !== twig_compare((isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 124, $this->source); })()), 3)) {
                    // line 125
                    echo "                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Adultos: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> ";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "numAdultos", [], "any", false, false, false, 127), "html", null, true);
                    echo " </h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Niños: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> ";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "numInfantiles", [], "any", false, false, false, 131), "html", null, true);
                    echo " </h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Mascotas: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> ";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "numMascotas", [], "any", false, false, false, 135), "html", null, true);
                    echo " </h6></td>
                                </tr>
                                ";
                }
                // line 138
                echo "                            </table>
                            </div>
                            <div class=\"col-12 col-sm-6\">
                            <table class=\"mx-auto\">    
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Precio: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "precio", [], "any", false, false, false, 144), "html", null, true);
                echo " €</h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Días: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> ";
                // line 148
                echo twig_escape_filter($this->env, (isset($context["restante"]) || array_key_exists("restante", $context) ? $context["restante"] : (function () { throw new RuntimeError('Variable "restante" does not exist.', 148, $this->source); })()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["singular"]) || array_key_exists("singular", $context) ? $context["singular"] : (function () { throw new RuntimeError('Variable "singular" does not exist.', 148, $this->source); })()), "html", null, true);
                echo " </h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Total: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> ";
                // line 152
                echo twig_escape_filter($this->env, (isset($context["precio"]) || array_key_exists("precio", $context) ? $context["precio"] : (function () { throw new RuntimeError('Variable "precio" does not exist.', 152, $this->source); })()), "html", null, true);
                echo " €</h6></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </a>
                <div class=\"media-body col-12 col-lg-6 align-self-center mt-2\">
                    ";
                // line 159
                $context["varcom"] = twig_get_attribute($this->env, $this->source, $context["item"], "numComentarios", [], "any", false, false, false, 159);
                // line 160
                echo "                    ";
                if (0 === twig_compare((isset($context["varcom"]) || array_key_exists("varcom", $context) ? $context["varcom"] : (function () { throw new RuntimeError('Variable "varcom" does not exist.', 160, $this->source); })()), "")) {
                    // line 161
                    echo "                        ";
                    $context["varcom"] = 0;
                    // line 162
                    echo "                    ";
                }
                // line 163
                echo "                    <p class=\"text-right\">";
                echo twig_escape_filter($this->env, (isset($context["varcom"]) || array_key_exists("varcom", $context) ? $context["varcom"] : (function () { throw new RuntimeError('Variable "varcom" does not exist.', 163, $this->source); })()), "html", null, true);
                echo " Comentarios</p>
                    ";
                // line 164
                $context["var"] = twig_get_attribute($this->env, $this->source, $context["item"], "mediaValoracion", [], "any", false, false, false, 164);
                // line 165
                echo "                    ";
                if (0 !== twig_compare((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 165, $this->source); })()), 0)) {
                    // line 166
                    echo "                        <p class=\"text-right\">
                            ";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 167, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                                <span class=\"fa fa-star checked text-warning\" id=\"star";
                        // line 168
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\"></span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 170
                    echo "                            Valoracion
                        </p>
                    ";
                } else {
                    // line 173
                    echo "                        <p class=\"text-right\">Valoracion</p>
                    ";
                }
                // line 175
                echo "                    ";
                $context["varmas"] = twig_get_attribute($this->env, $this->source, $context["item"], "mediaValoracionMascotas", [], "any", false, false, false, 175);
                // line 176
                echo "                    ";
                if (0 !== twig_compare((isset($context["varmas"]) || array_key_exists("varmas", $context) ? $context["varmas"] : (function () { throw new RuntimeError('Variable "varmas" does not exist.', 176, $this->source); })()), 0)) {
                    // line 177
                    echo "                        <p class=\"text-right\">
                            ";
                    // line 178
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["varmas"]) || array_key_exists("varmas", $context) ? $context["varmas"] : (function () { throw new RuntimeError('Variable "varmas" does not exist.', 178, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                                <span class=\"fa fa-star checked text-warning\" id=\"star";
                        // line 179
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\"></span>
                                
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "                            Valoracion mascotas
                        </p>
                    ";
                } else {
                    // line 185
                    echo "                        <p class=\"text-right\">Valoracion mascotas</p>
                    ";
                }
                // line 187
                echo "                </div>
            </div>
        </div>
        ";
                // line 190
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 190, $this->source); })()) + 1);
                // line 191
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "    </div>
    <div class=\"row pb-4\" style=\"height: 20%\">
        <div class=\"col-12 pt-5\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination justify-content-center pl-0\">
                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busquedaHabitacion", ["page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 197, $this->source); })())]), "html", null, true);
            echo "?host=";
            echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "&destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "\">Anterior</a></li>
                    ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 198, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 199
                echo "                        ";
                $context["active"] = "";
                // line 200
                echo "                        ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 200, $this->source); })()), $context["i"])) {
                    // line 201
                    echo "                            ";
                    $context["active"] = "active";
                    // line 202
                    echo "                        ";
                }
                // line 203
                echo "                        <li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 203, $this->source); })()), "html", null, true);
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busquedaHabitacion", ["page" => $context["i"]]), "html", null, true);
                echo "?host=";
                echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "&destination=";
                echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "&typehosting=";
                echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "&from=";
                echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "&to=";
                echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "&adults=";
                echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "&children=";
                echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "&pets=";
                echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busquedaHabitacion", ["page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 207, $this->source); })())]), "html", null, true);
            echo "?host=";
            echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "&destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 207, $this->source); })()), "html", null, true);
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
        // line 218
        echo "</div>

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

    // line 242
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 243
        echo "    ";
        $context["modal"] = "hide";
        // line 244
        echo "    ";
        if (0 === twig_compare((isset($context["modalmessage"]) || array_key_exists("modalmessage", $context) ? $context["modalmessage"] : (function () { throw new RuntimeError('Variable "modalmessage" does not exist.', 244, $this->source); })()), true)) {
            // line 245
            echo "        ";
            $context["modal"] = "show";
            // line 246
            echo "    ";
        }
        // line 247
        echo "    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function (){
            \$('#result-modal').modal('";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 251, $this->source); })()), "html", null, true);
        echo "');
            \$('#result-modal').on('hide.bs.modal', function(){
                location.href = \"/\";
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
        return "habitaciones/resultadobusqueda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 251,  702 => 248,  699 => 247,  696 => 246,  693 => 245,  690 => 244,  687 => 243,  680 => 242,  651 => 218,  620 => 207,  593 => 204,  588 => 203,  585 => 202,  582 => 201,  579 => 200,  576 => 199,  572 => 198,  552 => 197,  545 => 192,  539 => 191,  537 => 190,  532 => 187,  528 => 185,  523 => 182,  514 => 179,  508 => 178,  505 => 177,  502 => 176,  499 => 175,  495 => 173,  490 => 170,  482 => 168,  476 => 167,  473 => 166,  470 => 165,  468 => 164,  463 => 163,  460 => 162,  457 => 161,  454 => 160,  452 => 159,  442 => 152,  433 => 148,  426 => 144,  418 => 138,  412 => 135,  405 => 131,  398 => 127,  394 => 125,  392 => 124,  385 => 120,  379 => 119,  374 => 118,  369 => 116,  365 => 115,  360 => 114,  358 => 113,  350 => 108,  344 => 105,  319 => 102,  316 => 101,  313 => 100,  310 => 99,  307 => 98,  304 => 97,  301 => 96,  298 => 95,  296 => 94,  287 => 88,  280 => 84,  277 => 83,  271 => 82,  268 => 81,  266 => 80,  259 => 78,  252 => 77,  249 => 76,  246 => 75,  243 => 74,  240 => 73,  237 => 72,  233 => 71,  230 => 70,  227 => 69,  225 => 68,  220 => 66,  215 => 63,  210 => 62,  208 => 61,  189 => 59,  186 => 58,  184 => 57,  171 => 47,  165 => 44,  159 => 41,  153 => 38,  147 => 35,  142 => 32,  136 => 31,  134 => 30,  125 => 29,  122 => 28,  120 => 27,  115 => 26,  110 => 25,  108 => 24,  100 => 19,  92 => 13,  85 => 12,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/result.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
     <div class=\"row align-items-center pt-4 pb-2\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"auComplete\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" value=\"{{ destination }}\" required>
                    </div>
                    <div class=\"col-md-6 col-lg-2  pt-2\">
                        <select id=\"typehosting\"name=\"typehosting\" class=\"custom-select form-control-sm search\" placeholder=\"\">
                            <option value=\"\"></option>
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
        <div class=\"col-12 pb-2 h-100\" >
            <a class=\"btn btn-primary btn-home\" href=\"{{ path(\"busqueda\", {page: page }) }}?destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}\" role=\"button\">Volver</a>
        </div>
        {% set j = 1 %}
        {% for item in room %}
        <div class=\"col-12 pb-2 h-100\" style=\"min-height: 5rem\">
            <div class=\"media row outline-secondary result-link result-frame mx-auto pb-2\">
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
                            <span class=\"sr-only\">Anterior</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls{{j}}\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Siguiente</span>
                        </a>
                    </div>
                </div>
                {% set precio = item.precio %}
                {% set diferencia = date(from).diff(date(to)) %}
                {% set restante = diferencia.days %}
                {% set precio = precio * restante %}
                {% set singular = \"día\" %}
                {% if restante > 1 %}
                    {% set singular = \"días\" %}
                {% endif %}
                <a class=\"link-result col-12 col-lg-6 mt-2\" href=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/detalle/{{ item.idHabitacion }}?destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}&page={{ page }}&days={{ restante }}\" width=\"25rem\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <h3 class=\"mt-1 text-body text-center\">{{ item.nombreHotel }}</h3>
                        </div>
                        <div class=\"col-12\">
                            <h6 class=\"mt-1 text-body text-center\">{{ item.nombreHabitacion}}</h6>
                        </div>
                    </div>
                    <div class=\"row\">
                        <!-- <div class=\"col-12 align-self-center\">
                            {% if typehosting != 3 %}
                                <h6 class=\"mt-1 text-body text-center\">Adultos: {{ item.numAdultos }}</h6>
                                <h6 class=\"mt-1 text-body text-center\">Niños: {{ item.numInfantiles }}</h6>
                                <h6 class=\"mt-1 text-body text-center\">Mascotas: {{ item.numMascotas }}</h6>
                            {% endif %}
                            <h6 class=\"mt-1 text-body text-center\">{{ item.precio }} € / noche</h6>
                            <h6 class=\"mt-1 text-body text-center\">{{ restante }} {{ singular }}</h6>
                            <h5 class=\"mt-1 text-body text-center\">{{ precio }} €</h5>
                        </div> -->
                        <div class=\"col-12 col-sm-6\">
                            <table class=\"mx-auto\">
                                {% if typehosting != 3 %}
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Adultos: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> {{ item.numAdultos }} </h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Niños: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> {{ item.numInfantiles }} </h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Mascotas: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> {{ item.numMascotas }} </h6></td>
                                </tr>
                                {% endif %}
                            </table>
                            </div>
                            <div class=\"col-12 col-sm-6\">
                            <table class=\"mx-auto\">    
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Precio: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> {{ item.precio }} €</h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Días: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> {{ restante }} {{ singular }} </h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class=\"mt-1 text-body\">Total: </h6></td>
                                    <td><h6 class=\"mt-1 text-body\"> {{ precio }} €</h6></td>
                                </tr>
                            </table>
                        </div>
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
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(\"busquedaHabitacion\", {page: prev }) }}?host={{ host }}&destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}\">Anterior</a></li>
                    {% for i in 1..pagestotal %}
                        {% set active = \"\" %}
                        {% if page == i %}
                            {% set active = \"active\" %}
                        {% endif %}
                        <li class=\"page-item {{ active }}\">
                            <a class=\"page-link\" href=\"{{ path(\"busquedaHabitacion\", {page: i}) }}?host={{ host }}&destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(\"busquedaHabitacion\", {page: next}) }}?host={{ host }}&destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}\">Siguiente</a></li>
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
                location.href = \"/\";
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
{% endblock %}", "habitaciones/resultadobusqueda.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/habitaciones/resultadobusqueda.html.twig");
    }
}
