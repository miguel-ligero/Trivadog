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

/* base.html.twig */
class __TwigTemplate_a571204959fe2b2a1e6de4064ec786a096303f54b623e8dd72a88a790972ce22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        <title>Bienvenido a Trivadog.com!</title>
        <link rel=\"icon\" href=\"/img/favicon.ico\" type=\"image/vnd.microsoft.icon\" sizes=\"32x32\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/main.css\">
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <script>
            var cargarComunidad=false;
        </script>
        <header>
            ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "        </header>
        <main>
            ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        </main>
        <footer>
            ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "        </footer>
        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
        <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <script src=\"/js/autocomplete.js\"></script>
        
        <script>
            if (cargarComunidad){
                \$(document).ready(function () {
                    getComunidades();
                });
            }
        </script>
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.5\">
        ";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                ";
        $this->loadTemplate("header.html.twig", "base.html.twig", 22)->display($context);
        // line 23
        echo "            ";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                ";
        $this->loadTemplate("footer.html.twig", "base.html.twig", 30)->display($context);
        // line 31
        echo "            ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 46,  156 => 31,  153 => 30,  149 => 29,  143 => 26,  139 => 23,  136 => 22,  132 => 21,  126 => 14,  120 => 8,  115 => 6,  111 => 5,  104 => 47,  102 => 46,  86 => 32,  84 => 29,  80 => 27,  78 => 26,  74 => 24,  72 => 21,  64 => 15,  62 => 14,  55 => 9,  52 => 8,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/base.html.twig");
    }
}
