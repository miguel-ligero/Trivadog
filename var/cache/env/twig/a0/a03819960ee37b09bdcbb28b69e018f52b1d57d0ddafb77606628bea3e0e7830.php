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

/* multimedia/habitacion.html.twig */
class __TwigTemplate_a5893e122ed66f10263814f759ae251504999779b32d5231a07a964e81006cfd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multimedia/habitacion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "multimedia/habitacion.html.twig", 1);
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
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-left\">
    <div id=\"left-menu\" class=\"col-3 col-lg-2 pr-0\">
      <div>
        <a id=\"btn-new\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" >Volver</a>
        <a id=\"btn-new\" href=\"\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Editar</a>
        <div class=\"collapse\" id=\"collapse-nuevo\">
          <div class=\"card-body pt-0 menu-pos\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/editar/";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" class=\"menu\">Datos habitación</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/servicioshabitaciones/formularioservicios/";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" class=\"menu\">Servicios</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/multimedia/";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" class=\"menu\">Imagenes</a>
            <hr class=\"my-1\">
          </div>
        </div>
      </div>
      <div></div>
    </div>
    <div class=\"col-11 col-lg-10\">
      <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-10 px-0 pb-3\">
          ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 35
            echo "            ";
            $context["path"] = "http://trivadog.mipropia.com/trivadog/public/img/ico/dog_shepherd.ico";
            // line 36
            echo "            ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["val"], "nombrefichero", [], "any", false, false, false, 36), "dog_boxer.ico")) {
                // line 37
                echo "              ";
                $context["path"] = ((("http://trivadog.mipropia.com/trivadog/public/img/host/" . (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 37, $this->source); })())) . "/") . twig_get_attribute($this->env, $this->source, $context["val"], "nombrefichero", [], "any", false, false, false, 37));
                // line 38
                echo "                <div class=\"row ml-3 my-2 result-hist count-img\">
                  <input type=\"hidden\" name=\"pictureid";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\" class=\"custom-file-input\" id=\"pictureid";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\">
                  <div class=\"col-4 p-2\">
                    <img id=\"mainimg\" src=\"";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "\" myid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\" class=\"center-img\" style=\"width:8rem; height:5rem\">
                  </div>
                  <div class=\"col-1\"></div>
                  <div class=\"col-2 my-auto\" align=\"center\">
                    ";
                // line 45
                $context["principal"] = "";
                // line 46
                echo "                    ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["val"], "principal", [], "any", false, false, false, 46), 1)) {
                    // line 47
                    echo "                      ";
                    $context["principal"] = "checked";
                    // line 48
                    echo "                    ";
                }
                // line 49
                echo "                    <input type=\"checkbox\" id=\"checkmain";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" name=\"checkmain";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" value=\"1\" ";
                echo twig_escape_filter($this->env, (isset($context["principal"]) || array_key_exists("principal", $context) ? $context["principal"] : (function () { throw new RuntimeError('Variable "principal" does not exist.', 49, $this->source); })()), "html", null, true);
                echo ">
                    <label for=\"vehicle1\">Principal</label><br>
                  </div>
                  <div class=\"col-2 my-auto\" align=\"center\">
                    <button id=\"btn-edit-";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" type=\"button\" myid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" class=\"btn btn-primary btn-editar btn-sm my-3\" data-toggle=\"modal\" data-target=\"#imgmodal\">Editar</button>
                  </div>
                  <div class=\"col-2 my-auto\" align=\"center\">
                    <a href=\"http://trivadog.mipropia.com/trivadog/public/multimedia/borrar/";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 56), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "\" class=\"btn btn-danger btn-editar btn-sm my-3\">Eliminar</a>
                  </div>
                </div>
            ";
            }
            // line 60
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </div>
        <div id=\"addblock\" class=\"col-12 col-lg-10 px-0 pb-3\"></div>
      </div>
    </div>
  </div>
</div>
<!--Modal-->
<div class=\"modal fade\" id=\"imgmodal\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"imgmodalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"imgmodalLabel\">Seleccione una imagen</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <form id=\"formimg\" action=\"http://trivadog.mipropia.com/trivadog/public/multimedia/guardar\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"modal-body\">
          <div class=\"custom-file\">
            <input type=\"hidden\" name=\"modalpictureid\" class=\"custom-file-input\" id=\"modalpictureid\" value=\"\">
            <input type=\"hidden\" name=\"room\" class=\"custom-file-input\" id=\"room\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"providerid\" class=\"custom-file-input\" id=\"providerid\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        echo "\">
            <input type=\"file\" name=\"file\" class=\"custom-file-input\" id=\"file\">
            <label class=\"custom-file-label\" for=\"customFile\">Elegir imagen</label>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button id=\"btnsubmit\" type=\"submit\" value=\"submit\" class=\"btn btn-primary\">Guardar</button>
          <button id=\"btncancelsubmit\" type=\"button\" class=\"btn btn-primary btn-editar btn-sm my-3\" data-dismiss=\"modal\">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/multimedia.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "multimedia/habitacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 98,  251 => 97,  230 => 82,  226 => 81,  204 => 61,  198 => 60,  189 => 56,  181 => 53,  169 => 49,  166 => 48,  163 => 47,  160 => 46,  158 => 45,  149 => 41,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  124 => 34,  111 => 24,  106 => 22,  101 => 20,  90 => 11,  83 => 10,  74 => 6,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"http://trivadog.mipropia.com/trivadog/public/css/provider.css\">
  
{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-left\">
    <div id=\"left-menu\" class=\"col-3 col-lg-2 pr-0\">
      <div>
        <a id=\"btn-new\" href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/cuentaproveedor\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" >Volver</a>
        <a id=\"btn-new\" href=\"\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Editar</a>
        <div class=\"collapse\" id=\"collapse-nuevo\">
          <div class=\"card-body pt-0 menu-pos\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/proveedores/habitacion/editar/{{ room }}\" class=\"menu\">Datos habitación</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/servicioshabitaciones/formularioservicios/{{ room }}\" class=\"menu\">Servicios</a>
            <hr class=\"my-1\">
            <a href=\"http://trivadog.mipropia.com/trivadog/public/multimedia/{{ room }}\" class=\"menu\">Imagenes</a>
            <hr class=\"my-1\">
          </div>
        </div>
      </div>
      <div></div>
    </div>
    <div class=\"col-11 col-lg-10\">
      <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-10 px-0 pb-3\">
          {% for val in pictures %}
            {% set path = \"http://trivadog.mipropia.com/trivadog/public/img/ico/dog_shepherd.ico\" %}
            {% if val.nombrefichero != \"dog_boxer.ico\" %}
              {% set path =\"http://trivadog.mipropia.com/trivadog/public/img/host/\" ~ room ~ \"/\" ~ val.nombrefichero  %}
                <div class=\"row ml-3 my-2 result-hist count-img\">
                  <input type=\"hidden\" name=\"pictureid{{ val.id }}\" class=\"custom-file-input\" id=\"pictureid{{ val.id }}\" value=\"{{ val.id }}\">
                  <div class=\"col-4 p-2\">
                    <img id=\"mainimg\" src=\"{{ path }}\" myid=\"{{ val.id }}\" class=\"center-img\" style=\"width:8rem; height:5rem\">
                  </div>
                  <div class=\"col-1\"></div>
                  <div class=\"col-2 my-auto\" align=\"center\">
                    {% set principal = '' %}
                    {% if val.principal == 1 %}
                      {% set principal = 'checked' %}
                    {% endif %}
                    <input type=\"checkbox\" id=\"checkmain{{ val.id }}\" name=\"checkmain{{ val.id }}\" value=\"1\" {{ principal }}>
                    <label for=\"vehicle1\">Principal</label><br>
                  </div>
                  <div class=\"col-2 my-auto\" align=\"center\">
                    <button id=\"btn-edit-{{ val.id }}\" type=\"button\" myid=\"{{ val.id }}\" class=\"btn btn-primary btn-editar btn-sm my-3\" data-toggle=\"modal\" data-target=\"#imgmodal\">Editar</button>
                  </div>
                  <div class=\"col-2 my-auto\" align=\"center\">
                    <a href=\"http://trivadog.mipropia.com/trivadog/public/multimedia/borrar/{{ val.id }}/{{ room }}\" class=\"btn btn-danger btn-editar btn-sm my-3\">Eliminar</a>
                  </div>
                </div>
            {% endif %}
          {% endfor %}
        </div>
        <div id=\"addblock\" class=\"col-12 col-lg-10 px-0 pb-3\"></div>
      </div>
    </div>
  </div>
</div>
<!--Modal-->
<div class=\"modal fade\" id=\"imgmodal\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"imgmodalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"imgmodalLabel\">Seleccione una imagen</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <form id=\"formimg\" action=\"http://trivadog.mipropia.com/trivadog/public/multimedia/guardar\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"modal-body\">
          <div class=\"custom-file\">
            <input type=\"hidden\" name=\"modalpictureid\" class=\"custom-file-input\" id=\"modalpictureid\" value=\"\">
            <input type=\"hidden\" name=\"room\" class=\"custom-file-input\" id=\"room\" value=\"{{ room }}\">
            <input type=\"hidden\" name=\"providerid\" class=\"custom-file-input\" id=\"providerid\" value=\"{{ app.user.id }}\">
            <input type=\"file\" name=\"file\" class=\"custom-file-input\" id=\"file\">
            <label class=\"custom-file-label\" for=\"customFile\">Elegir imagen</label>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button id=\"btnsubmit\" type=\"submit\" value=\"submit\" class=\"btn btn-primary\">Guardar</button>
          <button id=\"btncancelsubmit\" type=\"button\" class=\"btn btn-primary btn-editar btn-sm my-3\" data-dismiss=\"modal\">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"{{ asset('js/multimedia.js') }}\"></script>

{% endblock %}
", "multimedia/habitacion.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\multimedia\\habitacion.html.twig");
    }
}
