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

/* proveedores/crearreservaproveedores.html.twig */
class __TwigTemplate_37daf1a98d09df0c077a169a2f60b7148629d1696ad9941f0990e2e33649a7d9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedores/crearreservaproveedores.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proveedores/crearreservaproveedores.html.twig", 1);
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
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/reserveprovider.css\">
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/provider.css\">
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
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-12 col-lg-3 pr-0\">
      <div>
        <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor\" class=\" btn btn-primary mb-2 btn-home \">Volver</a>
      </div>
      <div >
        <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/reservas\" class=\" btn btn-primary mb-2 btn-home\">Reservas</a>
      </div>
      <div>
        <a id=\"btn-new\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/reservas\" class= \"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Nuevo</a>
        <div class=\"collapse\" id=\"collapse-nuevo\">
          <div class=\"card-body pt-0 menu-pos\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/hospedaje/alojamiento/nuevo\" class=\"menu\">Alojamiento</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/nuevo\" class=\"menu\">Habitación</a>
            <hr class=\"my-1\">
          </div>
        </div>
      </div>
      <div>
        <a id=\"btn-accommodation\" href=\"\" class= \"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-alojamiento\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Alojamientos</a>
        <div class=\"collapse\" id=\"collapse-alojamiento\">
          <div class=\"card-body pt-0 menu-pos\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 38
            echo "            <a class=\"menu\" href=\"http://trivadog.mipropia.com/trivadog/public/hospedaje/alojamiento/editar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "idproveedor", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nombre", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
            <hr class=\"my-1\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "          </div>
        </div>
      </div>
    </div>
    <div class=\"col-12 mx-2 col-lg-8\">
      <div class=\"row title-color \">
        <div class=\"col-12\">
          <h3 class=\"text\">Crear Reserva</h3>
        </div>
      </div>
      <div class=\"row mt-2\"></div>
      <div class=\"row justify-content-center ml-2 mb-2 mt-1 result-hist\">
        <div class=\"col-10 px-0 py-3\">
          <form id=\"reserve\" method=\"post\" action=\"/proveedores/reservas/guardar\">
            <input id=\"roomid\" name=\"roomid\" type=\"hidden\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 55, $this->source); })()), 0, [], "array", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
            <input id=\"providerid\" name=\"providerid\" type=\"hidden\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
            <div class=\"form-group\">
              <label for=\"\">Fecha inicio</label>
              <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Fecha fin</label>
              <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Precio x noche</label>
              <input id=\"inputpricenight\" name=\"inputpricenight\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 67, $this->source); })()), 0, [], "array", false, false, false, 67), "precio", [], "any", false, false, false, 67), "html", null, true);
        echo " €\" readonly>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Precio</label>
              <input id=\"inputprice\" name=\"inputprice\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Adultos</label>
              <input id=\"inputadults\" name=\"inputadults\" type=\"text\" class=\"form-control\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 75, $this->source); })()), 0, [], "array", false, false, false, 75), "numadultos", [], "any", false, false, false, 75), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"\">Infantiles</label>
              <input id=\"inputchildren\" name=\"inputchildren\" type=\"text\" class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 79, $this->source); })()), 0, [], "array", false, false, false, 79), "numinfantiles", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"\">Mascotas</label>
              <input id=\"inputpets\" name=\"inputpets\" type=\"text\" class=\"form-control\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 83, $this->source); })()), 0, [], "array", false, false, false, 83), "nummascotas", [], "any", false, false, false, 83), "html", null, true);
        echo "\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-home\">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/provider.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).ready(function (){
      InicializarReservasProveedores();
    });

    function InicializarReservasProveedores(){
      EventosTabla();
    }

    function EventosTabla(){
      \$(\"#inputto\").blur(function(){
        var from = \$('#inputfrom').val();
        datefrom = DateFormat(from);
        var to = \$('#inputto').val();
        dateto = DateFormat(to);
        var price_night = \$('#inputpricenight').val();
        price_night = price_night.slice(0,-2);
        datefrom = new Date(datefrom);
        dateto = new Date(dateto);
        var days = dateto - datefrom;
        days = days / (1000 * 60 * 60 * 24);
        var price = price_night * days;

        \$('#inputprice').val(price);
        
      });
    }

    function DateFormat(date){
      var arraydate = date.split(\"/\")
      var orderdate = arraydate.reverse();
      var formatdate = orderdate.join(\"/\");
      return formatdate;
    } 

  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "proveedores/crearreservaproveedores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 97,  222 => 96,  219 => 95,  212 => 94,  195 => 83,  188 => 79,  181 => 75,  170 => 67,  156 => 56,  152 => 55,  136 => 41,  122 => 38,  118 => 37,  91 => 12,  84 => 11,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/reserveprovider.css\">
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/provider.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-12 col-lg-3 pr-0\">
      <div>
        <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor\" class=\" btn btn-primary mb-2 btn-home \">Volver</a>
      </div>
      <div >
        <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/reservas\" class=\" btn btn-primary mb-2 btn-home\">Reservas</a>
      </div>
      <div>
        <a id=\"btn-new\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/reservas\" class= \"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Nuevo</a>
        <div class=\"collapse\" id=\"collapse-nuevo\">
          <div class=\"card-body pt-0 menu-pos\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/hospedaje/alojamiento/nuevo\" class=\"menu\">Alojamiento</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/nuevo\" class=\"menu\">Habitación</a>
            <hr class=\"my-1\">
          </div>
        </div>
      </div>
      <div>
        <a id=\"btn-accommodation\" href=\"\" class= \"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-alojamiento\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Alojamientos</a>
        <div class=\"collapse\" id=\"collapse-alojamiento\">
          <div class=\"card-body pt-0 menu-pos\">
            {% for val in host %}
            <a class=\"menu\" href=\"http://trivadog.mipropia.com/trivadog/public/hospedaje/alojamiento/editar/{{ val.id }}/{{ val.idproveedor.id }}\">{{ val.nombre }}</a>
            <hr class=\"my-1\">
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-12 mx-2 col-lg-8\">
      <div class=\"row title-color \">
        <div class=\"col-12\">
          <h3 class=\"text\">Crear Reserva</h3>
        </div>
      </div>
      <div class=\"row mt-2\"></div>
      <div class=\"row justify-content-center ml-2 mb-2 mt-1 result-hist\">
        <div class=\"col-10 px-0 py-3\">
          <form id=\"reserve\" method=\"post\" action=\"/proveedores/reservas/guardar\">
            <input id=\"roomid\" name=\"roomid\" type=\"hidden\" value=\"{{ room[0].id }}\">
            <input id=\"providerid\" name=\"providerid\" type=\"hidden\" value=\"{{ app.user.id }}\">
            <div class=\"form-group\">
              <label for=\"\">Fecha inicio</label>
              <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Fecha fin</label>
              <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Precio x noche</label>
              <input id=\"inputpricenight\" name=\"inputpricenight\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"{{ room[0].precio }} €\" readonly>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Precio</label>
              <input id=\"inputprice\" name=\"inputprice\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Adultos</label>
              <input id=\"inputadults\" name=\"inputadults\" type=\"text\" class=\"form-control\" value=\"{{ room[0].numadultos }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"\">Infantiles</label>
              <input id=\"inputchildren\" name=\"inputchildren\" type=\"text\" class=\"form-control\" value=\"{{ room[0].numinfantiles }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"\">Mascotas</label>
              <input id=\"inputpets\" name=\"inputpets\" type=\"text\" class=\"form-control\" value=\"{{ room[0].nummascotas }}\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-home\">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"{{ asset('js/provider.js') }}\"></script>
  <script src=\"{{ asset('js/datepicker.js') }}\"></script>
  <script>
    \$(document).ready(function (){
      InicializarReservasProveedores();
    });

    function InicializarReservasProveedores(){
      EventosTabla();
    }

    function EventosTabla(){
      \$(\"#inputto\").blur(function(){
        var from = \$('#inputfrom').val();
        datefrom = DateFormat(from);
        var to = \$('#inputto').val();
        dateto = DateFormat(to);
        var price_night = \$('#inputpricenight').val();
        price_night = price_night.slice(0,-2);
        datefrom = new Date(datefrom);
        dateto = new Date(dateto);
        var days = dateto - datefrom;
        days = days / (1000 * 60 * 60 * 24);
        var price = price_night * days;

        \$('#inputprice').val(price);
        
      });
    }

    function DateFormat(date){
      var arraydate = date.split(\"/\")
      var orderdate = arraydate.reverse();
      var formatdate = orderdate.join(\"/\");
      return formatdate;
    } 

  </script>
{% endblock %}

", "proveedores/crearreservaproveedores.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\proveedores\\crearreservaproveedores.html.twig");
    }
}
