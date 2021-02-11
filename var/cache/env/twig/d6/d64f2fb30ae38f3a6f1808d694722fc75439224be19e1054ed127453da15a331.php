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
class __TwigTemplate_84f540ae5471326e33a010a85bc6109a9cbbb4d1ff5410fd4f8b677d0d9d5ad7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/footer.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 5
        echo "  <footer>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/footer.css\">
    <nav id=\"navFooter\" class=\"nav flex-column flex-lg-row px-4 pt-4 pb-5\" height=\"15vh\">
      <ul class=\"navbar-nav ml-5 mr-4 mt-2 pb-4\" style=\"width: 204px;\">
        <span class=\"footer\">Nuestra empresa</span>
        <li class=\"nav-item footer\">
          <a class=\"nav-link footer\" href=\"#\">Quienes somos</a>
        </li>
        <li class=\"nav-item footer\">
          <a class=\"nav-link footer\" href=\"#\">Política de privacidad</a>
        </li>
      </ul>
      <ul class=\"navbar-nav ml-5 mr-auto mt-2 pb-4\" style=\" width: 206px;\">
        <span class=\"footer\">Contacto</span>
        <li class=\"nav-item footer\">
          <a class=\"nav-link footer\" href=\"#\">Centro de ayuda</a>
        </li>
        <li class=\"nav-item footer\">
          <a class=\"nav-link footer\" href=\"#\">Preguntas frecuentes</a>
        </li>
      </ul>
      <ul class=\"navbar-nav ml-5 mr-auto mt-4 pb-2 copyright\">
        <li class=\"nav-item\">
          <span class=\"footer\" href=\"http://trivadog.mipropia.com/trivadog/public\">© 2020 Trivadog.com</span>
        </li>
        <li class=\"icon\">
          <a href=\"#\" class=\"icon fa fa-twitter\"></a>
          <a href=\"#\" class=\"icon fa fa-facebook-f\"></a>
          <a href=\"#\" class=\"icon fa fa-instagram\"></a>
          <a href=\"#\" class=\"icon fa fa-github\"></a>
        </li>
      </ul>
    </nav>
  </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 5,  66 => 4,  58 => 2,  51 => 1,  44 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/footer.css\">
{% endblock %}
{% block footer %}
  <footer>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://trivadog.mipropia.com/trivadog/public/css/footer.css\">
    <nav id=\"navFooter\" class=\"nav flex-column flex-lg-row px-4 pt-4 pb-5\" height=\"15vh\">
      <ul class=\"navbar-nav ml-5 mr-4 mt-2 pb-4\" style=\"width: 204px;\">
        <span class=\"footer\">Nuestra empresa</span>
        <li class=\"nav-item footer\">
          <a class=\"nav-link footer\" href=\"#\">Quienes somos</a>
        </li>
        <li class=\"nav-item footer\">
          <a class=\"nav-link footer\" href=\"#\">Política de privacidad</a>
        </li>
      </ul>
      <ul class=\"navbar-nav ml-5 mr-auto mt-2 pb-4\" style=\" width: 206px;\">
        <span class=\"footer\">Contacto</span>
        <li class=\"nav-item footer\">
          <a class=\"nav-link footer\" href=\"#\">Centro de ayuda</a>
        </li>
        <li class=\"nav-item footer\">
          <a class=\"nav-link footer\" href=\"#\">Preguntas frecuentes</a>
        </li>
      </ul>
      <ul class=\"navbar-nav ml-5 mr-auto mt-4 pb-2 copyright\">
        <li class=\"nav-item\">
          <span class=\"footer\" href=\"http://trivadog.mipropia.com/trivadog/public\">© 2020 Trivadog.com</span>
        </li>
        <li class=\"icon\">
          <a href=\"#\" class=\"icon fa fa-twitter\"></a>
          <a href=\"#\" class=\"icon fa fa-facebook-f\"></a>
          <a href=\"#\" class=\"icon fa fa-instagram\"></a>
          <a href=\"#\" class=\"icon fa fa-github\"></a>
        </li>
      </ul>
    </nav>
  </footer>
{% endblock %}", "footer.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/footer.html.twig");
    }
}
