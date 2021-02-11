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

/* proveedores/reservasproveedores.html.twig */
class __TwigTemplate_71edce4bcdf17ba75abe30213a9fb59aec35da517edc86bc61c71b846f419836 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedores/reservasproveedores.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedores/reservasproveedores.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proveedores/reservasproveedores.html.twig", 1);
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
        echo "  <link rel=\"stylesheet\" href=\"/css/provider.css\">
  <link rel=\"stylesheet\" href=\"/css/modal.css\">
  <link rel=\"stylesheet\" href=\"/css/reserveprovider.css\">

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
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <div>
        <a href=\"/proveedores/cuentaproveedor\" class=\" btn btn-primary mb-2 btn-home \">Volver</a>
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 38
            echo "            <a href=\"/hospedaje/alojamiento/editar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"menu\">";
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
    <div class=\"col-10\">
      <div class=\"row\">
        <div class=\"col-12 px-0 pb-3\">
          <div class=\"row align-items-center ml-3 my-2 result-hist\">
            <div class=\"col-4 col-lg-1 px-2\" align=\"center\">
              <p class=\"m-0 text-header\">Id. Reserva</p>
            </div>
            <div class=\"col-lg-1 px-2 hide-div\" align=\"center\">
              <p class=\"m-0 text-header\">Id. Cliente</p>
            </div>
            <div class=\"col-lg-1 px-2 hide-div\" align=\"center\">
              <p class=\"m-0 text-header\">Id. Habitación</p>
            </div>
            <div class=\"col-4 col-lg-2 px-2\" align=\"center\">
              <p class=\"m-0 text-header\">Fecha Inicio</p>
            </div>
            <div class=\"col-4 col-lg-2 px-2\" align=\"center\">
              <p class=\"m-0 text-header\">Fecha Fin</p>
            </div>
            <div class=\"col-lg-1 px-2 hide-div\" align=\"center\">
              <p class=\"m-0 text-header\">Precio x noche</span></p>
            </div>
            <div class=\"col-lg-1 px-2 hide-div\" align=\"center\">
              <p class=\"m-0 text-header\">Precio</span></p>
            </div>
          </div>
          ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reserves"]) || array_key_exists("reserves", $context) ? $context["reserves"] : (function () { throw new RuntimeError('Variable "reserves" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            echo "            <div class=\"row align-items-center ml-3 my-2 result-hist\">
              <div class=\"col-4 col-lg-1 p-2\" align=\"center\">
                <p class=\"m-0 text-reg\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-lg-1 p-2 hide-div\" align=\"center\">
                <p class=\"m-0 text-reg\"><a id=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idCliente", [], "any", false, false, false, 77), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idCliente", [], "any", false, false, false, 77), "html", null, true);
            echo "</a></p>
              </div>
              <div class=\"col-lg-1 p-2 hide-div\" align=\"center\">
                <p class=\"m-0 text-reg\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-4 col-lg-2 p-2\" align=\"center\">
                <p class=\"m-0 text-reg\">";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "fechaInicio", [], "any", false, false, false, 83), "d/m/Y"), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-4 col-lg-2\" align=\"center\">
                <p class=\"m-0 text-reg\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "fechaFin", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-lg-1 p-2 hide-div\" align=\"center\">
                <p class=\"m-0 text-reg\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "precio_noche", [], "any", false, false, false, 89), "html", null, true);
            echo "<span> €</span></p>
              </div>
              <div class=\"col-lg-1 p-2 hide-div\" align=\"center\">
                <p class=\"m-0 text-reg\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "precio", [], "any", false, false, false, 92), "html", null, true);
            echo "<span> €</span></p>
              </div>
              <div class=\"col-12 col-lg-3 my-auto  px-0\" align=\"center\">
                <a href=\"/proveedores/reservas/editar/";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "?roomid=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 95), "html", null, true);
            echo "&&page=";
            echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-editar btn-sm mb-1 mb-lg-0 mx-1\">Editar</a>
                <a href=\"/proveedores/reservas/borrar/";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idHabitacion", [], "any", false, false, false, 96), "html", null, true);
            echo "\" class=\"btn btn-primary btn-borrar btn-sm mb-1 mb-lg-0 mx-1\">Borrar</a>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </div>
      </div>
    </div>
  </div>
  <!--Paginacion-->
  ";
        // line 105
        if (0 <= twig_compare((isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 105, $this->source); })()), 2)) {
            // line 106
            echo "    <div class=\"row pb-4\" style=\"height: 20%\">
      <div class=\"col-12 pt-5\">
        <nav aria-label=\"Page navigation example\">
          <ul class=\"pagination justify-content-center pl-0\">
            <li class=\"page-item\"><a class=\"page-link\" href=\"/proveedores/reservas?page=";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 110, $this->source); })()), "html", null, true);
            echo "\">Anterior</a></li>
            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 111, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 112
                echo "              ";
                $context["active"] = "";
                // line 113
                echo "              ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 113, $this->source); })()), $context["i"])) {
                    // line 114
                    echo "                ";
                    $context["active"] = "active";
                    // line 115
                    echo "              ";
                }
                // line 116
                echo "              <li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 116, $this->source); })()), "html", null, true);
                echo "\"><a class=\"page-link\" href=\"/proveedores/reservas?page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "            <li class=\"page-item\"><a class=\"page-link\" href=\"/proveedores/reservas?page=";
            echo twig_escape_filter($this->env, (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 118, $this->source); })()), "html", null, true);
            echo "\">Siguiente</a></li>
          </ul>
        </nav>
      </div>
    </div>
  ";
        }
        // line 124
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

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/provider.js"), "html", null, true);
        echo "\"></script>
";
        // line 150
        $context["modal"] = "hide";
        // line 151
        $context["message"] = "";
        // line 152
        $context["img"] = "";
        // line 153
        $context["title"] = "";
        // line 154
        echo "
";
        // line 155
        if (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 155, $this->source); })()), "error")) {
            // line 156
            echo "    ";
            $context["modal"] = "show";
            // line 157
            echo "    ";
            $context["message"] = "Primero debe crear un alojamiento.";
            // line 158
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 159
            echo "    ";
            $context["title"] = "Error!!";
            // line 160
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 160, $this->source); })()), "delete")) {
            // line 161
            echo "    ";
            $context["modal"] = "show";
            // line 162
            echo "    ";
            $context["message"] = "Borrado satisfactoriamente.";
            // line 163
            echo "    ";
            $context["img"] = "/img/ico/dog_fitness.ico";
            // line 164
            echo "    ";
            $context["title"] = "Registro borrado!!";
            // line 165
            echo "  ";
        } elseif (0 === twig_compare((isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 165, $this->source); })()), "roomerror")) {
            // line 166
            echo "    ";
            $context["modal"] = "show";
            // line 167
            echo "    ";
            $context["message"] = "No se ha podido borrar el registro. Por favor, pongase en contacto con el administrador.";
            // line 168
            echo "    ";
            $context["img"] = "/img/ico/dog_scream.ico";
            // line 169
            echo "    ";
            $context["title"] = "Error!!";
            // line 170
            echo "  ";
        }
        // line 171
        echo "<script>
  \$(document).ready(function (){
    ";
        // line 174
        echo "    var statusmodal = '";
        echo twig_escape_filter($this->env, (isset($context["querystatus"]) || array_key_exists("querystatus", $context) ? $context["querystatus"] : (function () { throw new RuntimeError('Variable "querystatus" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "';
    var img = '";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "';
    var title = '";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 176, $this->source); })()), "html", null, true);
        echo "';

    \$('#modal-title').text(title);
    \$('#modal-img').attr('src', img);
    \$('#modal-text').text('";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 180, $this->source); })()), "html", null, true);
        echo "');
    \$('#myModal').modal('";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 181, $this->source); })()), "html", null, true);
        echo "');
  });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proveedores/reservasproveedores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 181,  442 => 180,  435 => 176,  431 => 175,  426 => 174,  422 => 171,  419 => 170,  416 => 169,  413 => 168,  410 => 167,  407 => 166,  404 => 165,  401 => 164,  398 => 163,  395 => 162,  392 => 161,  389 => 160,  386 => 159,  383 => 158,  380 => 157,  377 => 156,  375 => 155,  372 => 154,  370 => 153,  368 => 152,  366 => 151,  364 => 150,  359 => 149,  349 => 148,  317 => 124,  307 => 118,  294 => 116,  291 => 115,  288 => 114,  285 => 113,  282 => 112,  278 => 111,  274 => 110,  268 => 106,  266 => 105,  259 => 100,  247 => 96,  239 => 95,  233 => 92,  227 => 89,  221 => 86,  215 => 83,  209 => 80,  201 => 77,  195 => 74,  191 => 72,  187 => 71,  155 => 41,  143 => 38,  139 => 37,  113 => 13,  103 => 12,  89 => 6,  79 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"/css/provider.css\">
  <link rel=\"stylesheet\" href=\"/css/modal.css\">
  <link rel=\"stylesheet\" href=\"/css/reserveprovider.css\">

{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <div>
        <a href=\"/proveedores/cuentaproveedor\" class=\" btn btn-primary mb-2 btn-home \">Volver</a>
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
          <div class=\"row align-items-center ml-3 my-2 result-hist\">
            <div class=\"col-4 col-lg-1 px-2\" align=\"center\">
              <p class=\"m-0 text-header\">Id. Reserva</p>
            </div>
            <div class=\"col-lg-1 px-2 hide-div\" align=\"center\">
              <p class=\"m-0 text-header\">Id. Cliente</p>
            </div>
            <div class=\"col-lg-1 px-2 hide-div\" align=\"center\">
              <p class=\"m-0 text-header\">Id. Habitación</p>
            </div>
            <div class=\"col-4 col-lg-2 px-2\" align=\"center\">
              <p class=\"m-0 text-header\">Fecha Inicio</p>
            </div>
            <div class=\"col-4 col-lg-2 px-2\" align=\"center\">
              <p class=\"m-0 text-header\">Fecha Fin</p>
            </div>
            <div class=\"col-lg-1 px-2 hide-div\" align=\"center\">
              <p class=\"m-0 text-header\">Precio x noche</span></p>
            </div>
            <div class=\"col-lg-1 px-2 hide-div\" align=\"center\">
              <p class=\"m-0 text-header\">Precio</span></p>
            </div>
          </div>
          {% for item in reserves %}
            <div class=\"row align-items-center ml-3 my-2 result-hist\">
              <div class=\"col-4 col-lg-1 p-2\" align=\"center\">
                <p class=\"m-0 text-reg\">{{ item.id }}</p>
              </div>
              <div class=\"col-lg-1 p-2 hide-div\" align=\"center\">
                <p class=\"m-0 text-reg\"><a id=\"{{ item.idCliente }}\" href=\"#\">{{ item.idCliente }}</a></p>
              </div>
              <div class=\"col-lg-1 p-2 hide-div\" align=\"center\">
                <p class=\"m-0 text-reg\">{{ item.idHabitacion }}</p>
              </div>
              <div class=\"col-4 col-lg-2 p-2\" align=\"center\">
                <p class=\"m-0 text-reg\">{{ item.fechaInicio|date('d/m/Y') }}</p>
              </div>
              <div class=\"col-4 col-lg-2\" align=\"center\">
                <p class=\"m-0 text-reg\">{{ item.fechaFin|date('d/m/Y') }}</p>
              </div>
              <div class=\"col-lg-1 p-2 hide-div\" align=\"center\">
                <p class=\"m-0 text-reg\">{{ item.precio_noche }}<span> €</span></p>
              </div>
              <div class=\"col-lg-1 p-2 hide-div\" align=\"center\">
                <p class=\"m-0 text-reg\">{{ item.precio }}<span> €</span></p>
              </div>
              <div class=\"col-12 col-lg-3 my-auto  px-0\" align=\"center\">
                <a href=\"/proveedores/reservas/editar/{{item.id}}?roomid={{ item.idHabitacion }}&&page={{ page }}\" class=\"btn btn-primary btn-editar btn-sm mb-1 mb-lg-0 mx-1\">Editar</a>
                <a href=\"/proveedores/reservas/borrar/{{item.id}}/{{ item.idHabitacion }}\" class=\"btn btn-primary btn-borrar btn-sm mb-1 mb-lg-0 mx-1\">Borrar</a>
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
            <li class=\"page-item\"><a class=\"page-link\" href=\"/proveedores/reservas?page={{ prev }}\">Anterior</a></li>
            {% for i in 1..pagestotal %}
              {% set active = \"\" %}
              {% if page == i %}
                {% set active = \"active\" %}
              {% endif %}
              <li class=\"page-item {{ active }}\"><a class=\"page-link\" href=\"/proveedores/reservas?page={{ i }}\">{{ i }}</a></li>
            {% endfor %}
            <li class=\"page-item\"><a class=\"page-link\" href=\"/proveedores/reservas?page={{ next }}\">Siguiente</a></li>
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
", "proveedores/reservasproveedores.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\proveedores\\reservasproveedores.html.twig");
    }
}
