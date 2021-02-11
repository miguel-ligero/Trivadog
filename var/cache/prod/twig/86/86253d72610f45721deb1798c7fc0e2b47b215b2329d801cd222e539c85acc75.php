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

/* home/index.html.twig */
class __TwigTemplate_fe3e2241406af06ef6e7586d4afc1a643fcbf7078a52a1a5813f8574fd05c6b4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"container\">
    <div class=\"row align-items-center py-4\" style=\"height: 20%\">
        <div class=\"col-12 \">
            <form action=\"/habitaciones/busqueda\" method=\"post\">
                <div class=\"form-row \">
                    <div class=\"col-md-6 col-lg-3  pt-2\">
                        <input id=\"auComplete\" name=\"destination\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Destino\" required>
                    </div>
                    <div class=\"col-md-6 col-lg-2  pt-2\">
                        <select id=\"typehosting\"name=\"typehosting\" class=\"custom-select form-control-sm search\" placeholder=\"\">
                            <option value=\"\"></option>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hostingtype"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </select>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputfrom\" name=\"inputfrom\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Desde\" value=\"\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"inputto\" name=\"inputto\" type=\"text\" class=\"form-control form-control-sm search-date\" placeholder=\"Hasta\" value=\"\" required>
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"adults\" name=\"adults\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Adultos\">
                    </div>
                    <div class=\"col-md-3 col-lg-1 pt-2\">
                        <input id=\"children\" name=\"children\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Niños\">
                    </div>
                    <div class=\"col-md-6 col-lg-1 pt-2\">
                        <input id=\"pets\" name=\"pets\" type=\"text\" class=\"form-control form-control-sm search\" placeholder=\"Mascotas\">
                    </div>
                    <div class=\"col-md-4 col-lg-1 pt-2 mr-0\">
                        <button id=\"btnsearch\" name=\"btnsearch\" type=\"submit\" class=\"btn btn-primary btn-home btn-sm\" disabled>Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row justify-content-md-center pt-lg-5\" style=\"height: 30%; min-height: 400px\">
        <div class=\"col-12 h-75\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\" style=\"z-index: 1\">
                <div class=\"carousel-inner\" >
                    ";
        // line 53
        $context["li"] = 0;
        // line 54
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["room"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "                        ";
            $context["active"] = "";
            // line 56
            echo "                        ";
            if (0 === twig_compare(($context["li"] ?? null), 0)) {
                echo " 
                            ";
                // line 57
                $context["active"] = "active";
                // line 58
                echo "                        ";
            }
            // line 59
            echo "                        <div class=\"carousel-item ";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo " imgnormalizada\">
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["item"]);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 61
                echo "                                ";
                $context["path"] = "./img/ico/dog_chihuahua_bone.ico";
                // line 62
                echo "                                ";
                if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["element"], "nombrefichero", [], "any", false, false, false, 62), "dog_boxer.ico")) {
                    // line 63
                    echo "                                    ";
                    $context["path"] = ((("./img/host/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)) . "/") . twig_get_attribute($this->env, $this->source, $context["element"], "nombrefichero", [], "any", false, false, false, 63));
                    // line 64
                    echo "                                ";
                }
                // line 65
                echo "                            <a class=\"nav-link header\" href=\"/habitaciones/detalle/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 66
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\" class=\"item-img\" alt=\"Imagen habitación ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
                echo "\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h3 class=\"text-img\" style=\"font-size:3.75rem \">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 68), "idhospedaje", [], "any", false, false, false, 68), "nombre", [], "any", false, false, false, 68), "html", null, true);
                echo "</h3>
                                    <h5 class=\"text-img\">";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 69), "nombre", [], "any", false, false, false, 69), "html", null, true);
                echo "</h5>
                                    ";
                // line 70
                $context["var"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "idhabitacion", [], "any", false, false, false, 70), "mediaValoracion", [], "any", false, false, false, 70);
                // line 71
                echo "                                    ";
                if (1 === twig_compare(($context["var"] ?? null), 0)) {
                    // line 72
                    echo "                                        <p class=\"text-img\">Valoracion: 
                                            ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ($context["var"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                                            <span class=\"fa fa-star checked text-warning\" id=\"star";
                        // line 74
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\"></span>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "                                        </p>
                                    ";
                }
                // line 78
                echo "                                </div>
                            </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        </div>
                        ";
            // line 82
            $context["li"] = (($context["li"] ?? null) + 1);
            // line 83
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class=\"row pb-4\" style=\"height: 20%\">
        <div class=\"col-12 justify-content-center\">
            <div class=\"w-25 mx-auto mt-md-5 btn-registry\">
                <a class=\"btn btn-primary mb-4 btn-home btn-registry\" href=\"/proveedores/index\" role=\"button\">Registra tu negocio</a>
            </div>
        </div>
    </div>
</div>


";
    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "    
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function () {
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

        \$('#inputfrom').on('blur', function () {
            StorageUpdate(this);
        });

        \$('#inputto').on('blur', function () {
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
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 111,  263 => 109,  259 => 108,  233 => 84,  227 => 83,  225 => 82,  222 => 81,  214 => 78,  210 => 76,  202 => 74,  196 => 73,  193 => 72,  190 => 71,  188 => 70,  184 => 69,  180 => 68,  173 => 66,  168 => 65,  165 => 64,  162 => 63,  159 => 62,  156 => 61,  152 => 60,  147 => 59,  144 => 58,  142 => 57,  137 => 56,  134 => 55,  129 => 54,  127 => 53,  97 => 25,  86 => 23,  82 => 22,  69 => 11,  65 => 10,  59 => 6,  55 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/home/index.html.twig");
    }
}
