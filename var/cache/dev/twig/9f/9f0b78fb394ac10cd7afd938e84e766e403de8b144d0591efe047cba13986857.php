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
class __TwigTemplate_5b3afcacce23e9c2fa60944a8895c785a869734ea07ea696b2d5438c253701ad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/resultadobusqueda.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/resultadobusqueda.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitaciones/resultadobusqueda.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/result.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/modal.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"container\">
     <div class=\"row align-items-center pt-4 pb-2\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"destination\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" value=\"";
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
            <div class=\"media row outline-secondary result-link result-frame mx-auto\">
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
                    $context["path"] = "/img/ico/dog_chihuahua_bone.ico";
                    // line 73
                    echo "                                    ";
                    if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["val"], "nombrefichero", [], "any", false, false, false, 73), "dog_boxer.ico")) {
                        // line 74
                        echo "                                        ";
                        $context["path"] = ((("/img/host/" . twig_get_attribute($this->env, $this->source, $context["val"], "idHabitacion", [], "any", false, false, false, 74)) . "/") . twig_get_attribute($this->env, $this->source, $context["val"], "nombrefichero", [], "any", false, false, false, 74));
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
                echo "                <a class=\"link-result col-12 col-lg-6 mt-2\" href=\"/habitaciones/detalle/";
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
                        <div class=\"col-12 align-self-center\">
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
                        </div>
                    </div>
                </a>
                <div class=\"media-body col-12 col-lg-6 align-self-center mt-2\">
                    ";
                // line 125
                $context["varcom"] = twig_get_attribute($this->env, $this->source, $context["item"], "numComentarios", [], "any", false, false, false, 125);
                // line 126
                echo "                    ";
                if (0 === twig_compare((isset($context["varcom"]) || array_key_exists("varcom", $context) ? $context["varcom"] : (function () { throw new RuntimeError('Variable "varcom" does not exist.', 126, $this->source); })()), "")) {
                    // line 127
                    echo "                        ";
                    $context["varcom"] = 0;
                    // line 128
                    echo "                    ";
                }
                // line 129
                echo "                    <p class=\"text-right\">";
                echo twig_escape_filter($this->env, (isset($context["varcom"]) || array_key_exists("varcom", $context) ? $context["varcom"] : (function () { throw new RuntimeError('Variable "varcom" does not exist.', 129, $this->source); })()), "html", null, true);
                echo " Comentarios</p>
                    ";
                // line 130
                $context["var"] = twig_get_attribute($this->env, $this->source, $context["item"], "mediaValoracion", [], "any", false, false, false, 130);
                // line 131
                echo "                    ";
                if (0 !== twig_compare((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 131, $this->source); })()), 0)) {
                    // line 132
                    echo "                        <p class=\"text-right\">
                            ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 133, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                                <span class=\"fa fa-star checked text-warning\" id=\"star";
                        // line 134
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\"></span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "                            Valoracion
                        </p>
                    ";
                } else {
                    // line 139
                    echo "                        <p class=\"text-right\">Valoracion</p>
                    ";
                }
                // line 141
                echo "                    ";
                $context["varmas"] = twig_get_attribute($this->env, $this->source, $context["item"], "mediaValoracionMascotas", [], "any", false, false, false, 141);
                // line 142
                echo "                    ";
                if (0 !== twig_compare((isset($context["varmas"]) || array_key_exists("varmas", $context) ? $context["varmas"] : (function () { throw new RuntimeError('Variable "varmas" does not exist.', 142, $this->source); })()), 0)) {
                    // line 143
                    echo "                        <p class=\"text-right\">
                            ";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["varmas"]) || array_key_exists("varmas", $context) ? $context["varmas"] : (function () { throw new RuntimeError('Variable "varmas" does not exist.', 144, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                                <span class=\"fa fa-star checked text-warning\" id=\"star";
                        // line 145
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\"></span>
                                
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                            Valoracion mascotas
                        </p>
                    ";
                } else {
                    // line 151
                    echo "                        <p class=\"text-right\">Valoracion mascotas</p>
                    ";
                }
                // line 153
                echo "                </div>
            </div>
        </div>
        ";
                // line 156
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 156, $this->source); })()) + 1);
                // line 157
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "    </div>
    <div class=\"row pb-4\" style=\"height: 20%\">
        <div class=\"col-12 pt-5\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination justify-content-center pl-0\">
                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busquedaHabitacion", ["page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 163, $this->source); })())]), "html", null, true);
            echo "?host=";
            echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "&destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "\">Anterior</a></li>
                    ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 164, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 165
                echo "                        ";
                $context["active"] = "";
                // line 166
                echo "                        ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 166, $this->source); })()), $context["i"])) {
                    // line 167
                    echo "                            ";
                    $context["active"] = "active";
                    // line 168
                    echo "                        ";
                }
                // line 169
                echo "                        <li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 169, $this->source); })()), "html", null, true);
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busquedaHabitacion", ["page" => $context["i"]]), "html", null, true);
                echo "?host=";
                echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 170, $this->source); })()), "html", null, true);
                echo "&destination=";
                echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 170, $this->source); })()), "html", null, true);
                echo "&typehosting=";
                echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 170, $this->source); })()), "html", null, true);
                echo "&from=";
                echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 170, $this->source); })()), "html", null, true);
                echo "&to=";
                echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 170, $this->source); })()), "html", null, true);
                echo "&adults=";
                echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 170, $this->source); })()), "html", null, true);
                echo "&children=";
                echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 170, $this->source); })()), "html", null, true);
                echo "&pets=";
                echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 170, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("busquedaHabitacion", ["page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 173, $this->source); })())]), "html", null, true);
            echo "?host=";
            echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "&destination=";
            echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "&typehosting=";
            echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "&from=";
            echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "&to=";
            echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "&adults=";
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "&children=";
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "&pets=";
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "\">Siguiente</a></li>
                </ul>
            </nav>
\t    </div>
        <div class=\"col-12 justify-content-center\">
            <div class=\"w-25 mx-auto mt-5 btn-registry\">
                <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/proveedores/index\" role=\"button\">Registra tu negocio</a>
            </div>
        </div>
    </div>
    ";
        }
        // line 184
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
        <img id=\"modal-img\"src=\"/img/ico/dog_pug.ico\" style=\"float:left\">
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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 208
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 209
        echo "    ";
        $context["modal"] = "hide";
        // line 210
        echo "    ";
        if (0 === twig_compare((isset($context["modalmessage"]) || array_key_exists("modalmessage", $context) ? $context["modalmessage"] : (function () { throw new RuntimeError('Variable "modalmessage" does not exist.', 210, $this->source); })()), true)) {
            // line 211
            echo "        ";
            $context["modal"] = "show";
            // line 212
            echo "    ";
        }
        // line 213
        echo "    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function (){
            \$('#result-modal').modal('";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 217, $this->source); })()), "html", null, true);
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
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  676 => 217,  670 => 214,  667 => 213,  664 => 212,  661 => 211,  658 => 210,  655 => 209,  645 => 208,  613 => 184,  582 => 173,  555 => 170,  550 => 169,  547 => 168,  544 => 167,  541 => 166,  538 => 165,  534 => 164,  514 => 163,  507 => 158,  501 => 157,  499 => 156,  494 => 153,  490 => 151,  485 => 148,  476 => 145,  470 => 144,  467 => 143,  464 => 142,  461 => 141,  457 => 139,  452 => 136,  444 => 134,  438 => 133,  435 => 132,  432 => 131,  430 => 130,  425 => 129,  422 => 128,  419 => 127,  416 => 126,  414 => 125,  406 => 120,  400 => 119,  395 => 118,  390 => 116,  386 => 115,  381 => 114,  379 => 113,  371 => 108,  365 => 105,  340 => 102,  337 => 101,  334 => 100,  331 => 99,  328 => 98,  325 => 97,  322 => 96,  319 => 95,  317 => 94,  308 => 88,  301 => 84,  298 => 83,  292 => 82,  289 => 81,  287 => 80,  280 => 78,  273 => 77,  270 => 76,  267 => 75,  264 => 74,  261 => 73,  258 => 72,  254 => 71,  251 => 70,  248 => 69,  246 => 68,  241 => 66,  236 => 63,  231 => 62,  229 => 61,  210 => 59,  207 => 58,  205 => 57,  192 => 47,  186 => 44,  180 => 41,  174 => 38,  168 => 35,  163 => 32,  157 => 31,  155 => 30,  146 => 29,  143 => 28,  141 => 27,  136 => 26,  131 => 25,  129 => 24,  121 => 19,  113 => 13,  103 => 12,  89 => 6,  79 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/result.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/modal.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
     <div class=\"row align-items-center pt-4 pb-2\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"destination\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" value=\"{{ destination }}\" required>
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
            <div class=\"media row outline-secondary result-link result-frame mx-auto\">
                <div class=\"media-body col-12 col-lg-3 align-self-center \">
                    <div id=\"carouselExampleControls{{j}}\" class=\"carousel slide mx-auto\" data-ride=\"carousel\" style=\"width:12rem; height:7rem\">
                        <div class=\"carousel-inner\">
                            {% set i = 1 %}
                            {% set active = \"active\" %}
                           
                            {% for val in imagenes %}
                                {% set path = \"/img/ico/dog_chihuahua_bone.ico\" %}
                                    {% if val.nombrefichero != \"dog_boxer.ico\" %}
                                        {% set path =\"/img/host/\"~ val.idHabitacion ~\"/\"~ val.nombrefichero %}
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
                <a class=\"link-result col-12 col-lg-6 mt-2\" href=\"/habitaciones/detalle/{{ item.idHabitacion }}?destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}&page={{ page }}&days={{ restante }}\" width=\"25rem\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <h3 class=\"mt-1 text-body text-center\">{{ item.nombreHotel }}</h3>
                        </div>
                        <div class=\"col-12\">
                            <h6 class=\"mt-1 text-body text-center\">{{ item.nombreHabitacion}}</h6>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 align-self-center\">
                            {% if typehosting != 3 %}
                                <h6 class=\"mt-1 text-body text-center\">Adultos: {{ item.numAdultos }}</h6>
                                <h6 class=\"mt-1 text-body text-center\">Niños: {{ item.numInfantiles }}</h6>
                                <h6 class=\"mt-1 text-body text-center\">Mascotas: {{ item.numMascotas }}</h6>
                            {% endif %}
                            <h6 class=\"mt-1 text-body text-center\">{{ item.precio }} € / noche</h6>
                            <h6 class=\"mt-1 text-body text-center\">{{ restante }} {{ singular }}</h6>
                            <h5 class=\"mt-1 text-body text-center\">{{ precio }} €</h5>
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
                <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/proveedores/index\" role=\"button\">Registra tu negocio</a>
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
        <img id=\"modal-img\"src=\"/img/ico/dog_pug.ico\" style=\"float:left\">
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
        });
    </script>
{% endblock %}", "habitaciones/resultadobusqueda.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\habitaciones\\resultadobusqueda.html.twig");
    }
}
