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

/* reservas/reservas.html.twig */
class __TwigTemplate_b03ba1b3a5645ad7702c2a3e2f63e94e5cf8b84feaaa20f1dca2249873aa6de8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservas/reservas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservas/reservas.html.twig", 1);
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
        echo "  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/main.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/reserve.css\">
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
  <div class=\"row align-items-center py-4\" style=\"height: 20%\">
  </div>
  <div class=\"row justify-content-center\" style=\"min-height: 500px\">
    <div class=\"col-12 \">
      <div class=\"row\">
        <div class=\"col-1\"></div>
        <div class=\"col-10\">
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <h3 class=\"card-title text-center\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 23, $this->source); })()), "idHospedaje", [], "any", false, false, false, 23), "nombre", [], "any", false, false, false, 23), "html", null, true);
        echo "</h3>
              <h4 class=\"card-title text-center\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 24, $this->source); })()), "nombre", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
              <hr class=\"\">
              <form id=\"form-reserve\" method=\"post\" action=\"http://trivadog.mipropia.com/trivadog/public/reservas/confirm\">
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-5 pb-2\">
                    <p class=\"card-text font-weight-bold my-1\">Desde</p>
                    <input id=\"inputfromdatapicker\" name=\"inputfromdatapicker\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Desde\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["fromdatapicker"]) || array_key_exists("fromdatapicker", $context) ? $context["fromdatapicker"] : (function () { throw new RuntimeError('Variable "fromdatapicker" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" readonly>
                  </div>
                  <div class=\"col-5 pb-2\">
                    <p class=\"card-text font-weight-bold my-1\">Hasta</p>
                    <input id=\"ininputtodatapickerputto\" name=\"inputtodatapicker\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Hasta\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["todatapicker"]) || array_key_exists("todatapicker", $context) ? $context["todatapicker"] : (function () { throw new RuntimeError('Variable "todatapicker" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" readonly>
                  </div>
                </div>
                <hr class=\"\">
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  ";
        // line 41
        if (0 !== twig_compare((isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 41, $this->source); })()), 3)) {
            // line 42
            echo "                    <div class=\"col-3 \">
                      <p class=\"card-text font-weight-bold mt-2\">Adultos</p>
                      <p class=\"card-text font-weight-bold\">Niños</p>
                      <p class=\"card-text font-weight-bold mb-2\">Mascotas</p>
                    </div>
                  <div class=\"col-2 \">
                    <p class=\"card-text\">";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "</p>
                  </div>
                  ";
        }
        // line 53
        echo "                </div>
                <hr class=\"\">
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-lg-3 col-6\">
                    <p class=\"card-text font-weight-bold my-2\">Precio por noche</p>
                  </div>
                  <div class=\"col-lg-8 col-5\">
                    <p class=\"card-text my-2\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 61, $this->source); })()), "precio", [], "any", false, false, false, 61), "html", null, true);
        echo "<span>€</span></p>
                  </div>
                  <div class=\"col-1\"></div>
                  <div class=\"col-lg-3 col-6 \">
                    <p class=\"card-text font-weight-bold my-2\">Precio total</p>
                  </div>
                  <div class=\"col-lg-8 col-5 \">
                  ";
        // line 68
        if ((isset($context["reserves"]) || array_key_exists("reserves", $context))) {
            // line 69
            echo "                    ";
            $context["precio"] = (isset($context["dbprice"]) || array_key_exists("dbprice", $context) ? $context["dbprice"] : (function () { throw new RuntimeError('Variable "dbprice" does not exist.', 69, $this->source); })());
            // line 70
            echo "                  ";
        } else {
            // line 71
            echo "                    ";
            $context["precio"] = twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 71, $this->source); })()), "precio", [], "any", false, false, false, 71);
            // line 72
            echo "                  ";
        }
        // line 73
        echo "                  ";
        $context["preciototal"] = ((isset($context["precio"]) || array_key_exists("precio", $context) ? $context["precio"] : (function () { throw new RuntimeError('Variable "precio" does not exist.', 73, $this->source); })()) * (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 73, $this->source); })()));
        // line 74
        echo "                    <p class=\"card-text my-2\">";
        echo twig_escape_filter($this->env, (isset($context["preciototal"]) || array_key_exists("preciototal", $context) ? $context["preciototal"] : (function () { throw new RuntimeError('Variable "preciototal" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "<span>€</span></p>
                  </div>
                </div>
                <hr class=\"\">
                <div class=\"row justify-content-center\">
                  <div class=\"col-md-3 col-5 m-1 mt-2\">
                    <div><a href=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/detalle/";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80), "html", null, true);
        echo "?destination=";
        echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "&typehosting=";
        echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "&from=";
        echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "&to=";
        echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "&adults=";
        echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "&children=";
        echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "&pets=";
        echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "&days=";
        echo twig_escape_filter($this->env, (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary btn-home\">Volver</a></div>
                  </div>
                  <div class=\"col-md-3 col-5 m-1 mt-2\">
                    <div>
                      <input id=\"inputcustomerid\" name=\"inputcustomerid\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "email", [], "any", false, false, false, 84), "html", null, true);
        echo "\">
                      <input id=\"inputroomid\" name=\"inputroomid\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "html", null, true);
        echo "\">
                      <input id=\"inputfrom\" name=\"inputfrom\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\">
                      <input id=\"inputto\" name=\"inputto\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\">
                      <input id=\"inputadults\" name=\"inputadults\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["adults"]) || array_key_exists("adults", $context) ? $context["adults"] : (function () { throw new RuntimeError('Variable "adults" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\">
                      <input id=\"inputchildren\" name=\"inputchildren\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "\">
                      <input id=\"inputpets\" name=\"inputpets\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "\">
                      <input id=\"days\" name=\"days\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\">
                      <input id=\"precio\" name=\"precio\" type=\"hidden\"  class=\"form-control\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 92, $this->source); })()), "precio", [], "any", false, false, false, 92), "html", null, true);
        echo "\">
                      <input id=\"destination\" name=\"destination\" type=\"hidden\" class=\"form-control\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "\">
                      <input id=\"typehosting\" name=\"typehosting\" type=\"hidden\" class=\"form-control\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "\">
                      <button name=\"form-reserve\" type=\"submit\" class=\"btn btn-primary btn-home\">Confirmar</button>
                    </div>
                  </div>
                </div>
              <form>  
            </div>
          </div>
        </div>
        <div class=\"col-1\"></div>
      </div>
    </div>
  </div>
  <div class=\"row pb-4\" style=\"height: 20%\">
  </div>
</div>

<!--Modal-->
<div id=\"myModal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\">Reservas</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_dalmatian.ico\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\">Reserva realizada con éxito</p>
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

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "  ";
        $context["modal"] = "hide";
        // line 135
        echo "  ";
        $context["url"] = "";
        // line 136
        echo "  ";
        if ((isset($context["reserves"]) || array_key_exists("reserves", $context))) {
            // line 137
            echo "    ";
            $context["modal"] = "show";
            // line 138
            echo "    ";
            $context["url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reserves"]) || array_key_exists("reserves", $context) ? $context["reserves"] : (function () { throw new RuntimeError('Variable "reserves" does not exist.', 138, $this->source); })()), "idcliente", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138);
            // line 139
            echo "  ";
        }
        // line 140
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
  <script src=\"http://trivadog.mipropia.com/trivadog/public/js/registrousuario.js\"></script>
  <script>
    \$(document).ready(function (){
      \$('#myModal').modal('";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').on('hide.bs.modal', function(){
        location.href = \"http://trivadog.mipropia.com/trivadog/public/registrousuario/cuentacliente/";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "\";
      });
    });
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservas/reservas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 147,  348 => 145,  341 => 141,  338 => 140,  335 => 139,  332 => 138,  329 => 137,  326 => 136,  323 => 135,  320 => 134,  313 => 133,  268 => 94,  264 => 93,  260 => 92,  256 => 91,  252 => 90,  248 => 89,  244 => 88,  240 => 87,  236 => 86,  232 => 85,  228 => 84,  205 => 80,  195 => 74,  192 => 73,  189 => 72,  186 => 71,  183 => 70,  180 => 69,  178 => 68,  168 => 61,  158 => 53,  152 => 50,  148 => 49,  144 => 48,  136 => 42,  134 => 41,  125 => 35,  118 => 31,  108 => 24,  104 => 23,  92 => 13,  85 => 12,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/main.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/reserve.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row align-items-center py-4\" style=\"height: 20%\">
  </div>
  <div class=\"row justify-content-center\" style=\"min-height: 500px\">
    <div class=\"col-12 \">
      <div class=\"row\">
        <div class=\"col-1\"></div>
        <div class=\"col-10\">
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <h3 class=\"card-title text-center\">{{ room.idHospedaje.nombre }}</h3>
              <h4 class=\"card-title text-center\">{{ room.nombre }}</h4>
              <hr class=\"\">
              <form id=\"form-reserve\" method=\"post\" action=\"http://trivadog.mipropia.com/trivadog/public/reservas/confirm\">
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-5 pb-2\">
                    <p class=\"card-text font-weight-bold my-1\">Desde</p>
                    <input id=\"inputfromdatapicker\" name=\"inputfromdatapicker\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Desde\" value=\"{{ fromdatapicker }}\" readonly>
                  </div>
                  <div class=\"col-5 pb-2\">
                    <p class=\"card-text font-weight-bold my-1\">Hasta</p>
                    <input id=\"ininputtodatapickerputto\" name=\"inputtodatapicker\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Hasta\" value=\"{{ todatapicker }}\" readonly>
                  </div>
                </div>
                <hr class=\"\">
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  {% if typehosting != 3 %}
                    <div class=\"col-3 \">
                      <p class=\"card-text font-weight-bold mt-2\">Adultos</p>
                      <p class=\"card-text font-weight-bold\">Niños</p>
                      <p class=\"card-text font-weight-bold mb-2\">Mascotas</p>
                    </div>
                  <div class=\"col-2 \">
                    <p class=\"card-text\">{{ adults }}</p>
                    <p class=\"card-text\">{{ children }}</p>
                    <p class=\"card-text\">{{ pets }}</p>
                  </div>
                  {% endif %}
                </div>
                <hr class=\"\">
                <div class=\"row\">
                  <div class=\"col-1\"></div>
                  <div class=\"col-lg-3 col-6\">
                    <p class=\"card-text font-weight-bold my-2\">Precio por noche</p>
                  </div>
                  <div class=\"col-lg-8 col-5\">
                    <p class=\"card-text my-2\">{{ room.precio }}<span>€</span></p>
                  </div>
                  <div class=\"col-1\"></div>
                  <div class=\"col-lg-3 col-6 \">
                    <p class=\"card-text font-weight-bold my-2\">Precio total</p>
                  </div>
                  <div class=\"col-lg-8 col-5 \">
                  {% if reserves is defined %}
                    {% set precio = dbprice %}
                  {% else %}
                    {% set precio = room.precio %}
                  {% endif %}
                  {% set preciototal = precio * days %}
                    <p class=\"card-text my-2\">{{ preciototal }}<span>€</span></p>
                  </div>
                </div>
                <hr class=\"\">
                <div class=\"row justify-content-center\">
                  <div class=\"col-md-3 col-5 m-1 mt-2\">
                    <div><a href=\"http://trivadog.mipropia.com/trivadog/public/habitaciones/detalle/{{ room.id }}?destination={{ destination }}&typehosting={{ typehosting }}&from={{ from }}&to={{ to }}&adults={{ adults }}&children={{ children }}&pets={{ pets }}&days={{ days }}\" class=\"btn btn-primary btn-home\">Volver</a></div>
                  </div>
                  <div class=\"col-md-3 col-5 m-1 mt-2\">
                    <div>
                      <input id=\"inputcustomerid\" name=\"inputcustomerid\" type=\"hidden\"  class=\"form-control\" value=\"{{ app.user.email }}\">
                      <input id=\"inputroomid\" name=\"inputroomid\" type=\"hidden\"  class=\"form-control\" value=\"{{ room.id }}\">
                      <input id=\"inputfrom\" name=\"inputfrom\" type=\"hidden\"  class=\"form-control\" value=\"{{ from }}\">
                      <input id=\"inputto\" name=\"inputto\" type=\"hidden\"  class=\"form-control\" value=\"{{ to }}\">
                      <input id=\"inputadults\" name=\"inputadults\" type=\"hidden\"  class=\"form-control\" value=\"{{ adults }}\">
                      <input id=\"inputchildren\" name=\"inputchildren\" type=\"hidden\"  class=\"form-control\" value=\"{{ children }}\">
                      <input id=\"inputpets\" name=\"inputpets\" type=\"hidden\"  class=\"form-control\" value=\"{{ pets }}\">
                      <input id=\"days\" name=\"days\" type=\"hidden\"  class=\"form-control\" value=\"{{ days }}\">
                      <input id=\"precio\" name=\"precio\" type=\"hidden\"  class=\"form-control\" value=\"{{ room.precio }}\">
                      <input id=\"destination\" name=\"destination\" type=\"hidden\" class=\"form-control\" value=\"{{ destination }}\">
                      <input id=\"typehosting\" name=\"typehosting\" type=\"hidden\" class=\"form-control\" value=\"{{ typehosting }}\">
                      <button name=\"form-reserve\" type=\"submit\" class=\"btn btn-primary btn-home\">Confirmar</button>
                    </div>
                  </div>
                </div>
              <form>  
            </div>
          </div>
        </div>
        <div class=\"col-1\"></div>
      </div>
    </div>
  </div>
  <div class=\"row pb-4\" style=\"height: 20%\">
  </div>
</div>

<!--Modal-->
<div id=\"myModal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\">Reservas</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_dalmatian.ico\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\">Reserva realizada con éxito</p>
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
  {% set url = \"\" %}
  {% if reserves is defined %}
    {% set modal = 'show' %}
    {% set url = reserves.idcliente.id %}
  {% endif %}
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"{{ asset('js/datepicker.js') }}\"></script>
  <script src=\"http://trivadog.mipropia.com/trivadog/public/js/registrousuario.js\"></script>
  <script>
    \$(document).ready(function (){
      \$('#myModal').modal('{{ modal }}');
      \$('#myModal').on('hide.bs.modal', function(){
        location.href = \"http://trivadog.mipropia.com/trivadog/public/registrousuario/cuentacliente/{{ url }}\";
      });
    });
  </script>
{% endblock %}", "reservas/reservas.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\reservas\\reservas.html.twig");
    }
}
