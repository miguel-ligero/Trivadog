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

/* proveedores/cuentaproveedor.html.twig */
class __TwigTemplate_1b6599be8133492d78142bfc21986c067d26808429830056317ac83a20b6420e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedores/cuentaproveedor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedores/cuentaproveedor.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proveedores/cuentaproveedor.html.twig", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/css/provider.css\">
<link rel=\"stylesheet\" href=\"/css/modal.css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <div>
        <a href=\"/proveedores/reservas\" class=\" btn btn-primary mb-2 btn-home \">Reservas</a>
      </div>
      <div>
        <a id=\"btn-new\" href=\"/proveedores/reservas\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\"
          aria-controls=\"collapseExample\">Nuevo</a>
        <div class=\"collapse\" id=\"collapse-nuevo\">
          <div class=\"card-body pt-0 menu-pos\">
            <a href=\"/hospedaje/alojamiento/nuevo\" class=\"menu\">Alojamiento</a>
            <hr class=\"my-1\">
            <a href=\"/proveedores/habitacion/nuevo\" class=\"menu\">Habitación</a>
            <hr class=\"my-1\">
          </div>
        </div>
      </div>
      <div>
        <a id=\"btn-accommodation\" href=\"\" class=\"btn btn-primary mb-2 btn-home\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-alojamiento\" aria-expanded=\"false\"
          aria-controls=\"collapseExample\">Alojamientos</a>
        <div class=\"collapse\" id=\"collapse-alojamiento\">
          <div class=\"card-body pt-0 menu-pos\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 37
            echo "            <a href=\"/hospedaje/alojamiento/editar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"menu\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nombre", [], "any", false, false, false, 37), "html", null, true);
            echo "</a>
            <hr class=\"my-1\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          </div>
        </div>
      </div>
    </div>
    <div class=\"col-10\">
      <div class=\"row\">
        <div class=\"col-12 px-0 pb-3\">
          ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "          <div class=\"row ml-3 my-2 result-hist\">
            ";
            // line 49
            $context["path"] = "/img/ico/dog_chihuahua_bone.ico";
            // line 50
            echo "            ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "nombrefichero", [], "any", false, false, false, 50), "dog_boxer.ico")) {
                // line 51
                echo "              ";
                $context["path"] = ((("/img/host/" . twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 51)) . "/") . twig_get_attribute($this->env, $this->source, $context["item"], "nombrefichero", [], "any", false, false, false, 51));
                // line 52
                echo "            ";
            }
            // line 53
            echo "            <div class=\"col-3 p-2\">
              <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "\" class=\"center-img\" style=\"width:8rem; height:6rem\">
            </div>
            <div class=\"col-5 p-2\" align=\"center\">
              <h3 class=\"mt-1 mb-2 title-color \">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombrehospedaje", [], "any", false, false, false, 57), "html", null, true);
            echo "</h3>
              <h6 class=\"mt-1 mb-2 title-color\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombrehabitacion", [], "any", false, false, false, 58), "html", null, true);
            echo "</h6>
            </div>
            <div class=\"col-4 my-auto px-0\" align=\"center\">
              <a href=\"/proveedores/crearreserva/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 61), "html", null, true);
            echo "\" class=\"btn btn-primary btn-editar btn-sm my-2 mx-4 mx-lg-2\">Reservar</a>
              <a href=\"/proveedores/habitacion/editar/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 62), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-editar btn-sm my-2 mx-4 mx-lg-2\">Editar</a>
              <a href=\"/proveedores/habitacion/borrar/";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 63), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-editar btn-sm my-2 mx-4 mx-lg-2\">Borrar</a>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>
      </div>
    </div>
  </div>
  <!--Paginacion-->
  ";
        // line 72
        if (0 <= twig_compare((isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 72, $this->source); })()), 2)) {
            // line 73
            echo "  <div class=\"row pb-4\" style=\"height: 20%\">
    <div class=\"col-12 pt-5\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center pl-0\">
          <li class=\"page-item\"><a class=\"page-link\" href=\"/proveedores/cuentaproveedor?page=";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "\">Anterior</a></li>
          ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 78, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 79
                echo "          ";
                $context["active"] = "";
                // line 80
                echo "          ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()), $context["i"])) {
                    // line 81
                    echo "          ";
                    $context["active"] = "active";
                    // line 82
                    echo "          ";
                }
                // line 83
                echo "          <li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "\"><a class=\"page-link\" href=\"/proveedores/cuentaproveedor?page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "          <li class=\"page-item\"><a class=\"page-link\" href=\"/proveedores/cuentaproveedor?page=";
            echo twig_escape_filter($this->env, (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "\">Siguiente</a></li>
        </ul>
      </nav>
    </div>
  </div>
  ";
        }
        // line 91
        echo "</div>

<!--Modal error-->
<div id=\"myModal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\"></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\"></p>
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

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/provider.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 118
        $context["modal"] = "hide";
        // line 119
        echo "  ";
        $context["message"] = "";
        // line 120
        echo "  ";
        $context["img"] = "";
        // line 121
        echo "  ";
        $context["title"] = "";
        // line 122
        echo "
  ";
        // line 123
        if (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 123, $this->source); })()), "error")) {
            // line 124
            echo "    ";
            $context["modal"] = "show";
            // line 125
            echo "    ";
            $context["message"] = "Primero debe crear un alojamiento.";
            // line 126
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 127
            echo "    ";
            $context["title"] = "Error!!";
            // line 128
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 128, $this->source); })()), "delete")) {
            // line 129
            echo "    ";
            $context["modal"] = "show";
            // line 130
            echo "    ";
            $context["message"] = "Borrado satisfactoriamente.";
            // line 131
            echo "    ";
            $context["img"] = "/img/ico/dog_fitness.ico";
            // line 132
            echo "    ";
            $context["title"] = "Registro borrado!!";
            // line 133
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 133, $this->source); })()), "roomerror")) {
            // line 134
            echo "    ";
            $context["modal"] = "show";
            // line 135
            echo "    ";
            $context["message"] = "No se ha podido borrar el registro. Por favor, pongase en contacto con el administrador.";
            // line 136
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 137
            echo "    ";
            $context["title"] = "Error!!";
            // line 138
            echo "  ";
        }
        // line 139
        echo "  
  <script>
    \$(document).ready(function (){
      ";
        // line 143
        echo "      var statusmodal = '";
        echo twig_escape_filter($this->env, (isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "';
      var img = '";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "';
      var title = '";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "';
      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 148, $this->source); })()), "html", null, true);
        echo "');
      \$('#myModal').modal('";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 149, $this->source); })()), "html", null, true);
        echo "');
    });
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proveedores/cuentaproveedor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 149,  409 => 148,  403 => 145,  399 => 144,  394 => 143,  389 => 139,  386 => 138,  383 => 137,  380 => 136,  377 => 135,  374 => 134,  371 => 133,  368 => 132,  365 => 131,  362 => 130,  359 => 129,  356 => 128,  353 => 127,  350 => 126,  347 => 125,  344 => 124,  342 => 123,  339 => 122,  336 => 121,  333 => 120,  330 => 119,  328 => 118,  322 => 116,  312 => 115,  280 => 91,  270 => 85,  257 => 83,  254 => 82,  251 => 81,  248 => 80,  245 => 79,  241 => 78,  237 => 77,  231 => 73,  229 => 72,  222 => 67,  210 => 63,  204 => 62,  200 => 61,  194 => 58,  190 => 57,  184 => 54,  181 => 53,  178 => 52,  175 => 51,  172 => 50,  170 => 49,  167 => 48,  163 => 47,  154 => 40,  142 => 37,  138 => 36,  112 => 12,  102 => 11,  89 => 6,  79 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/css/provider.css\">
<link rel=\"stylesheet\" href=\"/css/modal.css\">

{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <div>
        <a href=\"/proveedores/reservas\" class=\" btn btn-primary mb-2 btn-home \">Reservas</a>
      </div>
      <div>
        <a id=\"btn-new\" href=\"/proveedores/reservas\" class=\"btn btn-primary mb-2 btn-home \" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-nuevo\" aria-expanded=\"false\"
          aria-controls=\"collapseExample\">Nuevo</a>
        <div class=\"collapse\" id=\"collapse-nuevo\">
          <div class=\"card-body pt-0 menu-pos\">
            <a href=\"/hospedaje/alojamiento/nuevo\" class=\"menu\">Alojamiento</a>
            <hr class=\"my-1\">
            <a href=\"/proveedores/habitacion/nuevo\" class=\"menu\">Habitación</a>
            <hr class=\"my-1\">
          </div>
        </div>
      </div>
      <div>
        <a id=\"btn-accommodation\" href=\"\" class=\"btn btn-primary mb-2 btn-home\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-alojamiento\" aria-expanded=\"false\"
          aria-controls=\"collapseExample\">Alojamientos</a>
        <div class=\"collapse\" id=\"collapse-alojamiento\">
          <div class=\"card-body pt-0 menu-pos\">
            {% for val in host %}
            <a href=\"/hospedaje/alojamiento/editar/{{ val.id }}\" class=\"menu\">{{ val.nombre }}</a>
            <hr class=\"my-1\">
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-10\">
      <div class=\"row\">
        <div class=\"col-12 px-0 pb-3\">
          {% for item in room %}
          <div class=\"row ml-3 my-2 result-hist\">
            {% set path = \"/img/ico/dog_chihuahua_bone.ico\" %}
            {% if item.nombrefichero != \"dog_boxer.ico\" %}
              {% set path =\"/img/host/\" ~ item.idhabitacion ~ \"/\" ~ item.nombrefichero  %}
            {% endif %}
            <div class=\"col-3 p-2\">
              <img src=\"{{ path }}\" class=\"center-img\" style=\"width:8rem; height:6rem\">
            </div>
            <div class=\"col-5 p-2\" align=\"center\">
              <h3 class=\"mt-1 mb-2 title-color \">{{ item.nombrehospedaje }}</h3>
              <h6 class=\"mt-1 mb-2 title-color\">{{ item.nombrehabitacion }}</h6>
            </div>
            <div class=\"col-4 my-auto px-0\" align=\"center\">
              <a href=\"/proveedores/crearreserva/{{item.idhabitacion}}\" class=\"btn btn-primary btn-editar btn-sm my-2 mx-4 mx-lg-2\">Reservar</a>
              <a href=\"/proveedores/habitacion/editar/{{item.idhabitacion}}/{{ page }}\" class=\"btn btn-primary btn-editar btn-sm my-2 mx-4 mx-lg-2\">Editar</a>
              <a href=\"/proveedores/habitacion/borrar/{{item.idhabitacion}}/{{ page }}\" class=\"btn btn-primary btn-editar btn-sm my-2 mx-4 mx-lg-2\">Borrar</a>
            </div>
          </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
  <!--Paginacion-->
  {% if pagestotal >= 2 %}
  <div class=\"row pb-4\" style=\"height: 20%\">
    <div class=\"col-12 pt-5\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center pl-0\">
          <li class=\"page-item\"><a class=\"page-link\" href=\"/proveedores/cuentaproveedor?page={{ prev }}\">Anterior</a></li>
          {% for i in 1..pagestotal %}
          {% set active = \"\" %}
          {% if page == i %}
          {% set active = \"active\" %}
          {% endif %}
          <li class=\"page-item {{ active }}\"><a class=\"page-link\" href=\"/proveedores/cuentaproveedor?page={{ i }}\">{{ i }}</a></li>
          {% endfor %}
          <li class=\"page-item\"><a class=\"page-link\" href=\"/proveedores/cuentaproveedor?page={{ next }}\">Siguiente</a></li>
        </ul>
      </nav>
    </div>
  </div>
  {% endif %}
</div>

<!--Modal error-->
<div id=\"myModal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\"></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modal-img\"src=\"\" style=\"float:left\">
        <p id=\"modal-text\" class=\"modal-text mt-3\"></p>
      </div>
      <div class=\"modal-footer\">
        <button id=\"closeModal\" type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
  <script src=\"{{ asset('js/provider.js') }}\"></script>

  {% set modal = 'hide' %}
  {% set message = \"\" %}
  {% set img = \"\" %}
  {% set title = \"\" %}

  {% if querystatus == 'error' %}
    {% set modal = 'show' %}
    {% set message = 'Primero debe crear un alojamiento.' %}
    {% set img = '/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% elseif querystatus == 'delete' %}
    {% set modal = 'show' %}
    {% set message = 'Borrado satisfactoriamente.' %}
    {% set img = '/img/ico/dog_fitness.ico' %}
    {% set title = 'Registro borrado!!' %}
  {% elseif querystatus == 'roomerror' %}
    {% set modal = 'show' %}
    {% set message = 'No se ha podido borrar el registro. Por favor, pongase en contacto con el administrador.' %}
    {% set img = '/img/ico/dog_scream.ico' %}
    {% set title = 'Error!!' %}
  {% endif %}
  
  <script>
    \$(document).ready(function (){
      {# var error = '{{ errorhost }}';  #}
      var statusmodal = '{{ querystatus }}';
      var img = '{{ img }}';
      var title = '{{ title }}';
      \$('#modal-title').text(title);
      \$('#modal-img').attr('src', img);
      \$('#modal-text').text('{{ message }}');
      \$('#myModal').modal('{{modal}}');
    });
  </script>
{% endblock %}
", "proveedores/cuentaproveedor.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\proveedores\\cuentaproveedor.html.twig");
    }
}
