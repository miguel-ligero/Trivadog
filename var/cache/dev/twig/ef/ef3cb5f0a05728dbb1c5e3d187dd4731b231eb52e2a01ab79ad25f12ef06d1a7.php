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

/* clientes/cuentacliente.html.twig */
class __TwigTemplate_a9c1bc406883687e941be118ebc57e024faaaaeb07a19afa8dfec594d9cd0e70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clientes/cuentacliente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clientes/cuentacliente.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clientes/cuentacliente.html.twig", 1);
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
        echo "   <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/customer.css\">
   <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/modal.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <button class=\"btn btn-primary btn-home\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Filtrar</button>
      <div class=\"collapse\" id=\"collapseExample\">
        <div class=\"card-body px-0\">
          <a href=\"/registrousuario/cuentacliente/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["customerid"]) || array_key_exists("customerid", $context) ? $context["customerid"] : (function () { throw new RuntimeError('Variable "customerid" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" class=\"link-n\">Todo</a>
          <hr class=\"mr-4 my-1\">
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hostingtype"]) || array_key_exists("hostingtype", $context) ? $context["hostingtype"] : (function () { throw new RuntimeError('Variable "hostingtype" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 22
            echo "          <a href=\"/registrousuario/cuentacliente/";
            echo twig_escape_filter($this->env, (isset($context["customerid"]) || array_key_exists("customerid", $context) ? $context["customerid"] : (function () { throw new RuntimeError('Variable "customerid" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"link-n\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nombre", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
          <hr class=\"mr-4 my-1\">
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
      </div>
    </div>
    <div class=\"col-10\">
      <div id=\"rowbase\"class=\"row justify-content-center\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reserves"]) || array_key_exists("reserves", $context) ? $context["reserves"] : (function () { throw new RuntimeError('Variable "reserves" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "        <div class=\"col-11 px-0\">
          <div class=\"row ml-3 my-2 result-hist\">
            <div class=\"col-lg-3 col-12 p-2\" align=\"left\">
              ";
            // line 34
            $context["path"] = "/img/ico/dog_chihuahua_bone.ico";
            // line 35
            echo "              ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "nombrefichero", [], "any", false, false, false, 35), "dog_boxer.ico")) {
                // line 36
                echo "                ";
                $context["path"] = ((("/img/host/" . twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 36)) . "/") . twig_get_attribute($this->env, $this->source, $context["item"], "nombrefichero", [], "any", false, false, false, 36));
                // line 37
                echo "              ";
            }
            // line 38
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "\" class=\"center-img mx-auto\" style=\"width:11rem; height:7rem\">
            </div>
            <div class=\"col-lg-6 col-12 p-2\" align=\"center\">
              <h3 class=\"mt-1 mb-2 text-body\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombrehospedaje", [], "any", false, false, false, 41), "html", null, true);
            echo "</h3>
              <h5 class=\"mt-1 mb-2 text-body\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombrehabitacion", [], "any", false, false, false, 42), "html", null, true);
            echo "</h5>
              ";
            // line 43
            $context["var"] = twig_get_attribute($this->env, $this->source, $context["item"], "mediaValoracion", [], "any", false, false, false, 43);
            // line 44
            echo "              ";
            if (0 !== twig_compare((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 44, $this->source); })()), 0)) {
                // line 45
                echo "                <p class=\"text-body mb-0 mt-2\">Valoracion: 
                  ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 46, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo " 
                  <span class=\"fa fa-star checked text-warning\" id=\"star";
                    // line 47
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\"></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                </p>
              ";
            } else {
                // line 51
                echo "                <p class=\"text-body mb-0 mt-2\">Valoracion:</p>
              ";
            }
            // line 53
            echo "              <a id=\"btn-search\" name=\"search\" href=\"/habitaciones/detalle/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 53), "html", null, true);
            echo "?cuentacliente=";
            echo twig_escape_filter($this->env, (isset($context["customerid"]) || array_key_exists("customerid", $context) ? $context["customerid"] : (function () { throw new RuntimeError('Variable "customerid" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "\"class=\"btn btn-primary btn-home btn-sm my-3\">+Info</a>
            </div>
            <div id=\"comment-div\" class=\"col-lg-3 col-12 my-auto\" >
              <a id=\"comment-link-";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 56), "html", null, true);
            echo "\" href=\"\" class=\"link-n\" data-toggle=\"modal\" data-target=\"#comment-modal\" idhabitacion=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idhabitacion", [], "any", false, false, false, 56), "html", null, true);
            echo "\" style=\"pointer-events:none\">Añadir comentario</a>
              ";
            // line 58
            echo "            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "      </div>
    </div>
  </div>
  ";
        // line 65
        $context["resultmodal"] = "hide";
        // line 66
        echo "  ";
        if (0 !== twig_compare((isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 66, $this->source); })()), false)) {
            // line 67
            echo "  <div class=\"row pb-4\" style=\"height: 20%\">
    <div class=\"col-12 pt-5\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center pl-0\">
          <li class=\"page-item\"><a class=\"page-link\" href=\"/registrousuario/cuentacliente/";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["customerid"]) || array_key_exists("customerid", $context) ? $context["customerid"] : (function () { throw new RuntimeError('Variable "customerid" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "\">Anterior</a></li>
          ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagestotal"]) || array_key_exists("pagestotal", $context) ? $context["pagestotal"] : (function () { throw new RuntimeError('Variable "pagestotal" does not exist.', 72, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "            ";
                $context["active"] = "";
                // line 74
                echo "            ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 74, $this->source); })()), $context["i"])) {
                    // line 75
                    echo "              ";
                    $context["active"] = "active";
                    // line 76
                    echo "            ";
                }
                // line 77
                echo "          <li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 77, $this->source); })()), "html", null, true);
                echo "\">
            <a class=\"page-link\" href=\"/registrousuario/cuentacliente/";
                // line 78
                echo twig_escape_filter($this->env, (isset($context["customerid"]) || array_key_exists("customerid", $context) ? $context["customerid"] : (function () { throw new RuntimeError('Variable "customerid" does not exist.', 78, $this->source); })()), "html", null, true);
                echo "?page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "          <li class=\"page-item\"><a class=\"page-link\" href=\"/registrousuario/cuentacliente/";
            echo twig_escape_filter($this->env, (isset($context["customerid"]) || array_key_exists("customerid", $context) ? $context["customerid"] : (function () { throw new RuntimeError('Variable "customerid" does not exist.', 81, $this->source); })()), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 81, $this->source); })()), "html", null, true);
            echo "\">Siguiente</a></li>
        </ul>
      </nav>
    </div>
  </div>
  ";
        }
        // line 87
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
        ";
        // line 101
        if (0 === twig_compare((isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 101, $this->source); })()), null)) {
            // line 102
            echo "          ";
            $context["message"] = "No hay ninguna reserva";
            // line 103
            echo "          <input id=\"message\" type=\"hidden\" value=\"false\"></input>
        ";
        } else {
            // line 105
            echo "          ";
            $context["index"] = ((isset($context["typehosting"]) || array_key_exists("typehosting", $context) ? $context["typehosting"] : (function () { throw new RuntimeError('Variable "typehosting" does not exist.', 105, $this->source); })()) - 1);
            // line 106
            echo "          ";
            $context["nametypehosting"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["hostingtype"]) || array_key_exists("hostingtype", $context) ? $context["hostingtype"] : (function () { throw new RuntimeError('Variable "hostingtype" does not exist.', 106, $this->source); })()), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 106, $this->source); })()), [], "array", false, false, false, 106), "nombre", [], "any", false, false, false, 106);
            // line 107
            echo "          ";
            $context["message"] = ("No hay ninguna reserva de " . (isset($context["nametypehosting"]) || array_key_exists("nametypehosting", $context) ? $context["nametypehosting"] : (function () { throw new RuntimeError('Variable "nametypehosting" does not exist.', 107, $this->source); })()));
            // line 108
            echo "          
        ";
        }
        // line 110
        echo "        <input id=\"mensaje\" type=\"hidden\" value=\"\"></input>
        <p id=\"modal-text\" class=\"modal-text mt-3\">";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 111, $this->source); })()), "html", null, true);
        echo " </p>
      </div>
      <div class=\"modal-footer\">
        <button id=\"closeModal\" type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

<!--Modal comentarios-->
<div id=\"comment-modal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\">Comentarios </h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form action=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insertarComentario");
        echo "\" method=\"post\">
          <div class=\"row justify-content-center\">
            <div class=\"col-10\">
              <textarea id=\"comment-textarea\" name=\"comment-textarea\" rows=\"8\" cols=\"50\" required></textarea>
            </div>
            <div class=\"col-10\">
              <div class=\"form-group mt-2 mb-0\">
                <label >Valoración</label>
                <div class=\"\">
                  <input id=\"customerid\" type=\"hidden\" name=\"customerid\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["customerid"]) || array_key_exists("customerid", $context) ? $context["customerid"] : (function () { throw new RuntimeError('Variable "customerid" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "\"></input>
                  <input id=\"roomid\" type=\"hidden\" name=\"roomid\" value=\"\"></input>
                  <span class=\"fa fa-star-o \" id=\"star6\"></span>
                  <span class=\"fa fa-star-o \" id=\"star7\"></span>
                  <span class=\"fa fa-star-o \" id=\"star8\"></span>
                  <span class=\"fa fa-star-o \" id=\"star9\"></span>
                  <span class=\"fa fa-star-o \" id=\"star10\"></span>
                  <input id=\"rating-input\" name=\"rating-input\" type=\"hidden\" value=\"\"></input>
                </div>
              </div>  
            </div>
            <div class=\"col-10 mt-2\">
              <div class=\"form-group mt-2 mb-0\">
                <label >Valoración mascotas</label>
                <div class=\"\">
                  <span class=\"fa fa-star-o \" id=\"star11\"></span>
                  <span class=\"fa fa-star-o \" id=\"star12\"></span>
                  <span class=\"fa fa-star-o \" id=\"star13\"></span>
                  <span class=\"fa fa-star-o \" id=\"star14\"></span>
                  <span class=\"fa fa-star-o \" id=\"star15\"></span>
                  <input id=\"rating-pets-input\" name=\"rating-pets-input\" type=\"hidden\" value=\"\"></input>
                </div>
              </div>  
            </div>
          </div>      
          <div class=\"modal-footer\">
            <button type=\"submit\" class=\"btn btn-primary btn-home\">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 176
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>    
  <script>
    \$(document).ready(function (){
      IniciazlizarCuentaCliente();
    })

    function IniciazlizarCuentaCliente(){
      EventosReservas();
    }

    function EventosReservas(){
      var control = \$('#message').val();
      var resultmodal = '";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["resultmodal"]) || array_key_exists("resultmodal", $context) ? $context["resultmodal"] : (function () { throw new RuntimeError('Variable "resultmodal" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "';
      
      \$('#result-modal').modal('";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["resultmodal"]) || array_key_exists("resultmodal", $context) ? $context["resultmodal"] : (function () { throw new RuntimeError('Variable "resultmodal" does not exist.', 190, $this->source); })()), "html", null, true);
        echo "');
      \$('#result-modal').on('hide.bs.modal', function(){
        if (control == true){
          location.href = \"/usuario/cuentacliente/";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["customerid"]) || array_key_exists("customerid", $context) ? $context["customerid"] : (function () { throw new RuntimeError('Variable "customerid" does not exist.', 193, $this->source); })()), "html", null, true);
        echo "\";
        }else{
          var img = \" <img src='/img/ico/dog_pug.ico' width='400px' heigth='400px'>\";
          \$('#rowbase').prepend(img);
        }
      });

      \$('a[id^=comment-link-]').click(function(e) {
        var roomid = e.target.getAttribute('idhabitacion');
        \$('#roomid').val(roomid);
      });

      \$('a[id^=comment-link-]').css(\"pointer-events\", \"auto\");
    }

  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clientes/cuentacliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 193,  459 => 190,  454 => 188,  438 => 176,  428 => 175,  384 => 140,  372 => 131,  349 => 111,  346 => 110,  342 => 108,  339 => 107,  336 => 106,  333 => 105,  329 => 103,  326 => 102,  324 => 101,  308 => 87,  296 => 81,  283 => 78,  278 => 77,  275 => 76,  272 => 75,  269 => 74,  266 => 73,  262 => 72,  256 => 71,  250 => 67,  247 => 66,  245 => 65,  240 => 62,  231 => 58,  225 => 56,  216 => 53,  212 => 51,  208 => 49,  200 => 47,  194 => 46,  191 => 45,  188 => 44,  186 => 43,  182 => 42,  178 => 41,  171 => 38,  168 => 37,  165 => 36,  162 => 35,  160 => 34,  155 => 31,  151 => 30,  144 => 25,  130 => 22,  126 => 21,  121 => 19,  111 => 11,  101 => 10,  89 => 6,  79 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
   <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/customer.css\">
   <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/modal.css\">
{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"row py-4 ml-1\" style=\"height: 20%\"></div>
  <div class=\"row justify-content-center\">
    <div id=\"left-menu\" class=\"col-10 col-lg-2 pr-0\">
      <button class=\"btn btn-primary btn-home\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Filtrar</button>
      <div class=\"collapse\" id=\"collapseExample\">
        <div class=\"card-body px-0\">
          <a href=\"/registrousuario/cuentacliente/{{customerid}}\" class=\"link-n\">Todo</a>
          <hr class=\"mr-4 my-1\">
          {% for val in hostingtype %}
          <a href=\"/registrousuario/cuentacliente/{{customerid}}/{{val.id}}\" class=\"link-n\">{{val.nombre}}</a>
          <hr class=\"mr-4 my-1\">
          {% endfor %}
        </div>
      </div>
    </div>
    <div class=\"col-10\">
      <div id=\"rowbase\"class=\"row justify-content-center\">
        {% for item in reserves %}
        <div class=\"col-11 px-0\">
          <div class=\"row ml-3 my-2 result-hist\">
            <div class=\"col-lg-3 col-12 p-2\" align=\"left\">
              {% set path = \"/img/ico/dog_chihuahua_bone.ico\" %}
              {% if item.nombrefichero != \"dog_boxer.ico\" %}
                {% set path =\"/img/host/\" ~ item.idhabitacion ~ \"/\" ~ item.nombrefichero  %}
              {% endif %}
              <img src=\"{{ path }}\" class=\"center-img mx-auto\" style=\"width:11rem; height:7rem\">
            </div>
            <div class=\"col-lg-6 col-12 p-2\" align=\"center\">
              <h3 class=\"mt-1 mb-2 text-body\">{{ item.nombrehospedaje }}</h3>
              <h5 class=\"mt-1 mb-2 text-body\">{{ item.nombrehabitacion }}</h5>
              {% set var = item.mediaValoracion %}
              {% if var != 0 %}
                <p class=\"text-body mb-0 mt-2\">Valoracion: 
                  {% for i in 1..var %} 
                  <span class=\"fa fa-star checked text-warning\" id=\"star{{i}}\"></span>
                  {% endfor %}
                </p>
              {% else %}
                <p class=\"text-body mb-0 mt-2\">Valoracion:</p>
              {% endif %}
              <a id=\"btn-search\" name=\"search\" href=\"/habitaciones/detalle/{{ item.idhabitacion }}?cuentacliente={{ customerid }}\"class=\"btn btn-primary btn-home btn-sm my-3\">+Info</a>
            </div>
            <div id=\"comment-div\" class=\"col-lg-3 col-12 my-auto\" >
              <a id=\"comment-link-{{ item.idhabitacion }}\" href=\"\" class=\"link-n\" data-toggle=\"modal\" data-target=\"#comment-modal\" idhabitacion=\"{{ item.idhabitacion }}\" style=\"pointer-events:none\">Añadir comentario</a>
              {# {{dump(item.idhabitacion) }} #}
            </div>
          </div>
        </div>
        {% endfor %}
      </div>
    </div>
  </div>
  {% set resultmodal = \"hide\" %}
  {% if pagestotal != false %}
  <div class=\"row pb-4\" style=\"height: 20%\">
    <div class=\"col-12 pt-5\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center pl-0\">
          <li class=\"page-item\"><a class=\"page-link\" href=\"/registrousuario/cuentacliente/{{customerid}}?page={{ prev }}\">Anterior</a></li>
          {% for i in 1..pagestotal %}
            {% set active = \"\" %}
            {% if page == i %}
              {% set active = \"active\" %}
            {% endif %}
          <li class=\"page-item {{ active }}\">
            <a class=\"page-link\" href=\"/registrousuario/cuentacliente/{{customerid}}?page={{i}}\">{{ i }}</a>
          </li>
          {% endfor %}
          <li class=\"page-item\"><a class=\"page-link\" href=\"/registrousuario/cuentacliente/{{customerid}}?page={{next}}\">Siguiente</a></li>
        </ul>
      </nav>
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
        {% if typehosting == null %}
          {% set message = \"No hay ninguna reserva\" %}
          <input id=\"message\" type=\"hidden\" value=\"false\"></input>
        {% else %}
          {% set index = typehosting - 1 %}
          {% set nametypehosting = hostingtype[index].nombre %}
          {% set message = \"No hay ninguna reserva de \" ~ nametypehosting %}
          
        {% endif %}
        <input id=\"mensaje\" type=\"hidden\" value=\"\"></input>
        <p id=\"modal-text\" class=\"modal-text mt-3\">{{ message }} </p>
      </div>
      <div class=\"modal-footer\">
        <button id=\"closeModal\" type=\"button\" class=\"btn btn-primary btn-home\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

<!--Modal comentarios-->
<div id=\"comment-modal\"class=\"modal \" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 id=\"modal-title\" class=\"modal-title\">Comentarios </h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form action=\"{{ path('insertarComentario')}}\" method=\"post\">
          <div class=\"row justify-content-center\">
            <div class=\"col-10\">
              <textarea id=\"comment-textarea\" name=\"comment-textarea\" rows=\"8\" cols=\"50\" required></textarea>
            </div>
            <div class=\"col-10\">
              <div class=\"form-group mt-2 mb-0\">
                <label >Valoración</label>
                <div class=\"\">
                  <input id=\"customerid\" type=\"hidden\" name=\"customerid\" value=\"{{ customerid }}\"></input>
                  <input id=\"roomid\" type=\"hidden\" name=\"roomid\" value=\"\"></input>
                  <span class=\"fa fa-star-o \" id=\"star6\"></span>
                  <span class=\"fa fa-star-o \" id=\"star7\"></span>
                  <span class=\"fa fa-star-o \" id=\"star8\"></span>
                  <span class=\"fa fa-star-o \" id=\"star9\"></span>
                  <span class=\"fa fa-star-o \" id=\"star10\"></span>
                  <input id=\"rating-input\" name=\"rating-input\" type=\"hidden\" value=\"\"></input>
                </div>
              </div>  
            </div>
            <div class=\"col-10 mt-2\">
              <div class=\"form-group mt-2 mb-0\">
                <label >Valoración mascotas</label>
                <div class=\"\">
                  <span class=\"fa fa-star-o \" id=\"star11\"></span>
                  <span class=\"fa fa-star-o \" id=\"star12\"></span>
                  <span class=\"fa fa-star-o \" id=\"star13\"></span>
                  <span class=\"fa fa-star-o \" id=\"star14\"></span>
                  <span class=\"fa fa-star-o \" id=\"star15\"></span>
                  <input id=\"rating-pets-input\" name=\"rating-pets-input\" type=\"hidden\" value=\"\"></input>
                </div>
              </div>  
            </div>
          </div>      
          <div class=\"modal-footer\">
            <button type=\"submit\" class=\"btn btn-primary btn-home\">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
  <script src=\"{{ asset('js/rating.js') }}\"></script>    
  <script>
    \$(document).ready(function (){
      IniciazlizarCuentaCliente();
    })

    function IniciazlizarCuentaCliente(){
      EventosReservas();
    }

    function EventosReservas(){
      var control = \$('#message').val();
      var resultmodal = '{{ resultmodal }}';
      
      \$('#result-modal').modal('{{ resultmodal }}');
      \$('#result-modal').on('hide.bs.modal', function(){
        if (control == true){
          location.href = \"/usuario/cuentacliente/{{ customerid }}\";
        }else{
          var img = \" <img src='/img/ico/dog_pug.ico' width='400px' heigth='400px'>\";
          \$('#rowbase').prepend(img);
        }
      });

      \$('a[id^=comment-link-]').click(function(e) {
        var roomid = e.target.getAttribute('idhabitacion');
        \$('#roomid').val(roomid);
      });

      \$('a[id^=comment-link-]').css(\"pointer-events\", \"auto\");
    }

  </script>
{% endblock %}

", "clientes/cuentacliente.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\clientes\\cuentacliente.html.twig");
    }
}
