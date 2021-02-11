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

/* footer.html.twig */
class __TwigTemplate_39fba15cb8b60d68b576dbffd2deb97b8d165954bf15e78b68e2a71fe3fdcae1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/footer.css\">
";
    }

    // line 4
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <nav id=\"navFooter\"class=\"nav flex-column flex-lg-row px-4 pt-4 pb-5\" height=\"15vh\">
    <ul class=\"navbar-nav ml-5 mr-4 mt-2 pb-4\">
      <span class=\"footer\">Nuestra empresa</span>
      <li class=\"nav-item footer\">
        <a class=\"nav-link footer\" href=\"#\">Quienes somos</a>
      </li>
      <li class=\"nav-item footer\">
        <a class=\"nav-link footer\" href=\"#\">Política de privacidad</a>
      </li>
    </ul>
    <ul class=\"navbar-nav ml-5 mr-auto mt-2 pb-4\">
      <span  class=\"footer\">Contacto</span>
      <li class=\"nav-item footer\">
        <a class=\"nav-link footer\" href=\"#\">Centro de ayuda</a>
      </li>
      <li class=\"nav-item footer\">
        <a class=\"nav-link footer\" href=\"#\">Preguntas frecuentes</a>
      </li>
    </ul>
    <ul class=\"nav ml-5 mr-5 mt-5 pb-4 copyright\">
      <li class=\"nav-item\">
        <a class=\"nav-link footer\" href=\"/\">© 2020 Trivadog.com</a>
      </li>
      <li class=\"nav-item footer\">
        <a class=\"nav-link footer\" href=\"https://www.facebook.com\"><img src=\"/img/ico/facebook.ico\" width=\"20\" height=\"20\" alt=\"logo\"></a>
      </li>
      <li class=\"nav-item footer\">
        <a class=\"nav-link footer\" href=\"https://www.twitter.com\"><img src=\"/img/ico/twitter.ico\" width=\"20\" height=\"20\" alt=\"logo\"></a>
      </li>
      <li class=\"nav-item footer\">
        <a class=\"nav-link footer\" href=\"https://www.instagram.com\"><img src=\"/img/ico/instagram.ico\" width=\"20\" height=\"20\" alt=\"logo\"></a>
      </li>
    </ul>
  </nav>
";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  54 => 4,  49 => 2,  45 => 1,  41 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/footer.html.twig");
    }
}
