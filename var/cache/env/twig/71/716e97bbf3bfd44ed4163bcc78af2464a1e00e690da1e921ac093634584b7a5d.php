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

/* proveedores/editarreservaproveedores.html.twig */
class __TwigTemplate_bb8cf1389bfe92b11f03c0bf240ff2b0223ffdfaf2679c6445136b9ff1167629 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedores/editarreservaproveedores.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proveedores/editarreservaproveedores.html.twig", 1);
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
      <div >
        <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/reservas\" class=\" btn btn-primary mb-2 btn-home \">Volver</a>
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
        <a id=\"btn-accommodation\" href=\"#\" class= \"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-alojamiento\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Alojamientos</a>
        <div class=\"collapse\" id=\"collapse-alojamiento\">
          <div class=\"card-body pt-0 menu-pos\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 35
            echo "              <a href=\"http://trivadog.mipropia.com/trivadog/public/hospedaje/alojamiento/editar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "idproveedor", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"menu\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nombre", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
              <hr class=\"my-1\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "          </div>
        </div>
      </div>
    </div>
    <div class=\"col-12 mx-2 col-lg-8\">
      <div class=\"row title-color \">
        <div class=\"col-12\">
          <h3 class=\"text\">Reservas</h3>
        </div>
        <div class=\"col-12  col-lg-12\">
          <div class=\"table-responsive-lg\">
            <table class=\"table table-sm table-striped table-hover\">
              <thead>
                <tr>
                  <th class=\"text\">Id Reserva</th>
                  <th class=\"text\">Id Cliente</th>
                  <th class=\"text\">Id Habitación</th>
                  <th class=\"text\">Fecha Inicio</th>
                  <th class=\"text\">Fecha Fin</th>
                  <th class=\"text\">Precio x noche</th>
                  <th class=\"text\">Precio</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "                  <tr id=\"tr-data-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                    <td id=\"td-id-";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" class=\"text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                    <td id=\"td-customerid-";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" class=\"text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idCliente", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                    <td id=\"td-roomid-";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\" class=\"text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                    <td id=\"td-from-";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"text\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "fechaInicio", [], "any", false, false, false, 67), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td id=\"td-to-";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"text\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "fechaFin", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td id=\"td-priceunit-";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\" class=\"text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "precio_noche", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                    <td id=\"td-price-";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\" class=\"text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "precio", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                    <input id=\"adults-";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "adultos", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                    <input id=\"children-";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "infantiles", [], "any", false, false, false, 72), "html", null, true);
            echo "\">
                    <input id=\"pets-";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "mascotas", [], "any", false, false, false, 73), "html", null, true);
            echo "\">
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"row mt-2\">
        <input id=\"providerid\" type=\"hidden\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        echo "\">
        <input id=\"page\" type=\"hidden\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"col\">
          <h4 class=\"text\">ID: <span id=\"title-id\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserve"]) || array_key_exists("reserve", $context) ? $context["reserve"] : (function () { throw new RuntimeError('Variable "reserve" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "html", null, true);
        echo "</span></h4>
        </div>
      </div>
      <div class=\"row justify-content-center ml-2 mb-2 mt-1 result-hist\">
        <div class=\"col-10 px-0 py-3\">
          <form id=\"reserve\" method=\"post\" action=\"/proveedores/reservas/guardar\">
          <input id=\"inputreserveid\" name=\"reserveid\" type=\"hidden\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserve"]) || array_key_exists("reserve", $context) ? $context["reserve"] : (function () { throw new RuntimeError('Variable "reserve" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
            <div class=\"form-group\">
              <label for=\"\">Fecha inicio</label>
              <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserve"]) || array_key_exists("reserve", $context) ? $context["reserve"] : (function () { throw new RuntimeError('Variable "reserve" does not exist.', 94, $this->source); })()), "fechaInicio", [], "any", false, false, false, 94), "d/m/Y"), "html", null, true);
        echo "\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Fecha fin</label>
              <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserve"]) || array_key_exists("reserve", $context) ? $context["reserve"] : (function () { throw new RuntimeError('Variable "reserve" does not exist.', 98, $this->source); })()), "fechaFin", [], "any", false, false, false, 98), "d/m/Y"), "html", null, true);
        echo "\" required>
            </div>
            <div class=\"form-group\">
              <label id=\"inputpricelabel\" for=\"inputprice\">Precio</label>
              <input id=\"inputprice\" name=\"inputprice\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserve"]) || array_key_exists("reserve", $context) ? $context["reserve"] : (function () { throw new RuntimeError('Variable "reserve" does not exist.', 102, $this->source); })()), "precio", [], "any", false, false, false, 102), "html", null, true);
        echo "\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Adultos</label>
              <input id=\"inputadults\" name=\"inputadults\" type=\"text\" class=\"form-control\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserve"]) || array_key_exists("reserve", $context) ? $context["reserve"] : (function () { throw new RuntimeError('Variable "reserve" does not exist.', 106, $this->source); })()), "adultos", [], "any", false, false, false, 106), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"\">Infantiles</label>
              <input id=\"inputchildren\" name=\"inputchildren\" type=\"text\" class=\"form-control\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserve"]) || array_key_exists("reserve", $context) ? $context["reserve"] : (function () { throw new RuntimeError('Variable "reserve" does not exist.', 110, $this->source); })()), "infantiles", [], "any", false, false, false, 110), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"\">Mascotas</label>
              <input id=\"inputpets\" name=\"inputpets\" type=\"text\" class=\"form-control\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserve"]) || array_key_exists("reserve", $context) ? $context["reserve"] : (function () { throw new RuntimeError('Variable "reserve" does not exist.', 114, $this->source); })()), "mascotas", [], "any", false, false, false, 114), "html", null, true);
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

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/provider.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 128
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
      \$(\"tr[id^=tr-data-]\").click(function(\$this){
        var reserveid = \$this.currentTarget.id;
        var padre = \$(reserveid).closest('tr');
        var padre = \$(padre).attr('id');
        var id = reserveid.slice(8);
        var providerid = \$('#providerid').val();
        var roomid = \$('#td-roomid-' + id).html();
        var from = \$('#td-from-' + id).html();
        datefrom = DateFormat(from);
        var to = \$('#td-to-' + id).html();
        dateto = DateFormat(to);
        var page = \$('#page').val();
        var price = \$('#td-price-' + id).html();
        var price_night = \$('#td-priceunit-'+ id).html();
        datefrom = new Date(datefrom);
        dateto = new Date(dateto);
        var days = dateto - datefrom;
        days = days / (1000 * 60 * 60 * 24);
        var pricecheck = price_night * days;
        var adults = \$('#adults-'+ id).val();
        var children = \$('#children-'+ id).val();
        var pets = \$('#pets-'+ id).val();

        \$('b.info').remove();
        if (price < pricecheck){
          \$('#inputpricelabel').after(\" <b class='info'>Promocionado</b>\");
        }

        \$('#inputfrom').val(from);
        \$('#inputto').val(to);
        \$('#inputprice').val(price);
        \$('#title-id').text(id);
        \$('#inputreserveid').val(id);
        \$('#inputadults').val(adults);
        \$('#inputchildren').val(children);
        \$('#inputpets').val(pets);

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
        return "proveedores/editarreservaproveedores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 128,  327 => 127,  324 => 126,  317 => 125,  300 => 114,  293 => 110,  286 => 106,  279 => 102,  272 => 98,  265 => 94,  259 => 91,  250 => 85,  245 => 83,  241 => 82,  233 => 76,  222 => 73,  216 => 72,  210 => 71,  204 => 70,  198 => 69,  192 => 68,  186 => 67,  180 => 66,  174 => 65,  168 => 64,  163 => 63,  159 => 62,  133 => 38,  119 => 35,  115 => 34,  91 => 12,  84 => 11,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
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
      <div >
        <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/reservas\" class=\" btn btn-primary mb-2 btn-home \">Volver</a>
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
        <a id=\"btn-accommodation\" href=\"#\" class= \"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-alojamiento\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Alojamientos</a>
        <div class=\"collapse\" id=\"collapse-alojamiento\">
          <div class=\"card-body pt-0 menu-pos\">
            {% for val in host %}
              <a href=\"http://trivadog.mipropia.com/trivadog/public/hospedaje/alojamiento/editar/{{ val.id }}/{{ val.idproveedor.id }}\" class=\"menu\">{{ val.nombre }}</a>
              <hr class=\"my-1\">
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-12 mx-2 col-lg-8\">
      <div class=\"row title-color \">
        <div class=\"col-12\">
          <h3 class=\"text\">Reservas</h3>
        </div>
        <div class=\"col-12  col-lg-12\">
          <div class=\"table-responsive-lg\">
            <table class=\"table table-sm table-striped table-hover\">
              <thead>
                <tr>
                  <th class=\"text\">Id Reserva</th>
                  <th class=\"text\">Id Cliente</th>
                  <th class=\"text\">Id Habitación</th>
                  <th class=\"text\">Fecha Inicio</th>
                  <th class=\"text\">Fecha Fin</th>
                  <th class=\"text\">Precio x noche</th>
                  <th class=\"text\">Precio</th>
                </tr>
              </thead>
              <tbody>
                {% for item in room %}
                  <tr id=\"tr-data-{{ item.id }}\">
                    <td id=\"td-id-{{ item.id}}\" class=\"text\">{{item.id}}</td>
                    <td id=\"td-customerid-{{ item.id}}\" class=\"text\">{{item.idCliente}}</td>
                    <td id=\"td-roomid-{{ item.id}}\" class=\"text\">{{item.idHabitacion}}</td>
                    <td id=\"td-from-{{ item.id}}\" class=\"text\">{{item.fechaInicio|date('d/m/Y')}}</td>
                    <td id=\"td-to-{{ item.id}}\" class=\"text\">{{item.fechaFin|date('d/m/Y')}}</td>
                    <td id=\"td-priceunit-{{ item.id}}\" class=\"text\">{{item.precio_noche}}</td>
                    <td id=\"td-price-{{ item.id}}\" class=\"text\">{{item.precio}}</td>
                    <input id=\"adults-{{ item.id }}\" type=\"hidden\" value=\"{{ item.adultos }}\">
                    <input id=\"children-{{ item.id }}\" type=\"hidden\" value=\"{{ item.infantiles }}\">
                    <input id=\"pets-{{ item.id }}\" type=\"hidden\" value=\"{{ item.mascotas }}\">
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"row mt-2\">
        <input id=\"providerid\" type=\"hidden\" value=\"{{ app.user.id }}\">
        <input id=\"page\" type=\"hidden\" value=\"{{ page }}\">
        <div class=\"col\">
          <h4 class=\"text\">ID: <span id=\"title-id\">{{ reserve.id }}</span></h4>
        </div>
      </div>
      <div class=\"row justify-content-center ml-2 mb-2 mt-1 result-hist\">
        <div class=\"col-10 px-0 py-3\">
          <form id=\"reserve\" method=\"post\" action=\"/proveedores/reservas/guardar\">
          <input id=\"inputreserveid\" name=\"reserveid\" type=\"hidden\" value=\"{{ reserve.id }}\">
            <div class=\"form-group\">
              <label for=\"\">Fecha inicio</label>
              <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"{{ reserve.fechaInicio|date('d/m/Y') }}\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Fecha fin</label>
              <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"{{ reserve.fechaFin|date('d/m/Y') }}\" required>
            </div>
            <div class=\"form-group\">
              <label id=\"inputpricelabel\" for=\"inputprice\">Precio</label>
              <input id=\"inputprice\" name=\"inputprice\" type=\"text\" class=\"form-control form-control-sm search-date\" value=\"{{ reserve.precio }}\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"\">Adultos</label>
              <input id=\"inputadults\" name=\"inputadults\" type=\"text\" class=\"form-control\" value=\"{{ reserve.adultos }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"\">Infantiles</label>
              <input id=\"inputchildren\" name=\"inputchildren\" type=\"text\" class=\"form-control\" value=\"{{ reserve.infantiles }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"\">Mascotas</label>
              <input id=\"inputpets\" name=\"inputpets\" type=\"text\" class=\"form-control\" value=\"{{ reserve.mascotas }}\">
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
      \$(\"tr[id^=tr-data-]\").click(function(\$this){
        var reserveid = \$this.currentTarget.id;
        var padre = \$(reserveid).closest('tr');
        var padre = \$(padre).attr('id');
        var id = reserveid.slice(8);
        var providerid = \$('#providerid').val();
        var roomid = \$('#td-roomid-' + id).html();
        var from = \$('#td-from-' + id).html();
        datefrom = DateFormat(from);
        var to = \$('#td-to-' + id).html();
        dateto = DateFormat(to);
        var page = \$('#page').val();
        var price = \$('#td-price-' + id).html();
        var price_night = \$('#td-priceunit-'+ id).html();
        datefrom = new Date(datefrom);
        dateto = new Date(dateto);
        var days = dateto - datefrom;
        days = days / (1000 * 60 * 60 * 24);
        var pricecheck = price_night * days;
        var adults = \$('#adults-'+ id).val();
        var children = \$('#children-'+ id).val();
        var pets = \$('#pets-'+ id).val();

        \$('b.info').remove();
        if (price < pricecheck){
          \$('#inputpricelabel').after(\" <b class='info'>Promocionado</b>\");
        }

        \$('#inputfrom').val(from);
        \$('#inputto').val(to);
        \$('#inputprice').val(price);
        \$('#title-id').text(id);
        \$('#inputreserveid').val(id);
        \$('#inputadults').val(adults);
        \$('#inputchildren').val(children);
        \$('#inputpets').val(pets);

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

", "proveedores/editarreservaproveedores.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/proveedores/editarreservaproveedores.html.twig");
    }
}
