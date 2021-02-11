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

/* servicios/formularioservicios.html.twig */
class __TwigTemplate_69af8d0550b026d52d9d1eaa1168e909cc056de211bc9dc4ec802df7c4817fcf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servicios/formularioservicios.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "servicios/formularioservicios.html.twig", 1);
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
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/service.css\">
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
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
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <div>
        <a id=\"btn-new\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" >Volver</a>
        <a id=\"btn-new\" href=\"\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Editar</a>
        <div class=\"collapse\" id=\"collapse-nuevo\">
          <div class=\"card-body pt-0 menu-pos\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/editar/";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["roomid"]) || array_key_exists("roomid", $context) ? $context["roomid"] : (function () { throw new RuntimeError('Variable "roomid" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" class=\"menu\">Datos habitación</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/servicioshabitaciones/formularioservicios/";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["roomid"]) || array_key_exists("roomid", $context) ? $context["roomid"] : (function () { throw new RuntimeError('Variable "roomid" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" class=\"menu\">Servicios</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/multimedia/";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["roomid"]) || array_key_exists("roomid", $context) ? $context["roomid"] : (function () { throw new RuntimeError('Variable "roomid" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" class=\"menu\">Imagenes</a>
            <hr class=\"my-1\">
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-10\">
      <div class=\"row\">
        <div class=\"col-12 px-0 pb-3\">
          <form id=\"form-register\" action=\"http://trivadog.mipropia.com/trivadog/public/servicioshabitaciones/guardar\" method=\"post\">
            <div class=\"row pb-4\">
              <input id=\"roomid\" name=\"roomid\" type=\"hidden\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["roomid"]) || array_key_exists("roomid", $context) ? $context["roomid"] : (function () { throw new RuntimeError('Variable "roomid" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\">
              <input id=\"providerid\" name=\"providerid\" type=\"hidden\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["providerid"]) || array_key_exists("providerid", $context) ? $context["providerid"] : (function () { throw new RuntimeError('Variable "providerid" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\">
              <div class=\"col-12 col-lg-11\">
                <div class=\"card row\">
                  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "                    ";
            $context["checked"] = "";
            // line 42
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roomservice"]) || array_key_exists("roomservice", $context) ? $context["roomservice"] : (function () { throw new RuntimeError('Variable "roomservice" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 43
                echo "                      ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "idservicio", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43))) {
                    // line 44
                    echo "                        ";
                    $context["checked"] = "checked";
                    // line 45
                    echo "                      ";
                }
                // line 46
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    <div class=\"form-check col-4 col-sm-3 col-lg-2 my-2 ml-3\">
                      <input id=\"checkbox";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" name=\"checkarray[]\" class=\"form-check-input\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 48, $this->source); })()), "html", null, true);
            echo ">
                      <label class=\"form-check-label checkbox\" for=\"checkbox";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 49), "html", null, true);
            echo "</label>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                  <div class=\"col-12 py-3\">
                    <div class=\"row justify-content-center\">
                      <button id=\"btn-send\" type=\"submit\" class=\"btn btn-primary btn-lg btn-home ml-2\">Guardar</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-1\"></div>
            </div>
          </form>
       </div>
      </div>
    </div>
  </div>
</div>

<!--Modal error-->
<div id=\"myModal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\">Guardado!!</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"/img/ico/dog_pilot.ico\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\">Servicios agregados a la habitación satisfactoriamente.</p>
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

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "<script>
  ";
        // line 93
        $context["modal"] = "hide";
        // line 94
        echo "  ";
        if (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 94, $this->source); })()), "ok")) {
            // line 95
            echo "    ";
            $context["modal"] = "show";
            // line 96
            echo "  ";
        }
        // line 97
        echo "  \$(document).ready(function (){
    \$('#myModal').modal('";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "');
  });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "servicios/formularioservicios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 98,  250 => 97,  247 => 96,  244 => 95,  241 => 94,  239 => 93,  236 => 92,  229 => 91,  185 => 52,  174 => 49,  166 => 48,  163 => 47,  157 => 46,  154 => 45,  151 => 44,  148 => 43,  143 => 42,  140 => 41,  136 => 40,  130 => 37,  126 => 36,  112 => 25,  107 => 23,  102 => 21,  91 => 12,  84 => 11,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/provider.css\">
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/service.css\">
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/modal.css\">
{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <div>
        <a id=\"btn-new\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" >Volver</a>
        <a id=\"btn-new\" href=\"\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Editar</a>
        <div class=\"collapse\" id=\"collapse-nuevo\">
          <div class=\"card-body pt-0 menu-pos\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/editar/{{ roomid }}\" class=\"menu\">Datos habitación</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/servicioshabitaciones/formularioservicios/{{ roomid }}\" class=\"menu\">Servicios</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/multimedia/{{ roomid }}\" class=\"menu\">Imagenes</a>
            <hr class=\"my-1\">
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-10\">
      <div class=\"row\">
        <div class=\"col-12 px-0 pb-3\">
          <form id=\"form-register\" action=\"http://trivadog.mipropia.com/trivadog/public/servicioshabitaciones/guardar\" method=\"post\">
            <div class=\"row pb-4\">
              <input id=\"roomid\" name=\"roomid\" type=\"hidden\" value=\"{{ roomid }}\">
              <input id=\"providerid\" name=\"providerid\" type=\"hidden\" value=\"{{ providerid }}\">
              <div class=\"col-12 col-lg-11\">
                <div class=\"card row\">
                  {% for item in service %}
                    {% set checked = \"\" %}
                    {% for val in roomservice %}
                      {% if item.id == val.idservicio.id %}
                        {% set checked = \"checked\" %}
                      {% endif %}
                    {% endfor %}
                    <div class=\"form-check col-4 col-sm-3 col-lg-2 my-2 ml-3\">
                      <input id=\"checkbox{{ item.id }}\" name=\"checkarray[]\" class=\"form-check-input\" type=\"checkbox\" value=\"{{ item.id }}\" {{ checked }}>
                      <label class=\"form-check-label checkbox\" for=\"checkbox{{ item.id }}\">{{ item.nombre }}</label>
                    </div>
                  {% endfor %}
                  <div class=\"col-12 py-3\">
                    <div class=\"row justify-content-center\">
                      <button id=\"btn-send\" type=\"submit\" class=\"btn btn-primary btn-lg btn-home ml-2\">Guardar</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-1\"></div>
            </div>
          </form>
       </div>
      </div>
    </div>
  </div>
</div>

<!--Modal error-->
<div id=\"myModal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\">Guardado!!</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"/img/ico/dog_pilot.ico\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\">Servicios agregados a la habitación satisfactoriamente.</p>
      </div>
      <div class=\"modal-footer\">
        <button id=\"closeModal\" type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}
<script>
  {% set modal = 'hide' %}
  {% if querystatus == 'ok' %}
    {% set modal = 'show' %}
  {% endif %}
  \$(document).ready(function (){
    \$('#myModal').modal('{{ modal }}');
  });
</script>
{% endblock %}
", "servicios/formularioservicios.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/servicios/formularioservicios.html.twig");
    }
}
