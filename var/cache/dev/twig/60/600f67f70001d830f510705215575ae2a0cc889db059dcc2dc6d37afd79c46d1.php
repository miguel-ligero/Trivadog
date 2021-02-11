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
class __TwigTemplate_e5866af02bb494d4015d418a91d36d8f3e626432ff2f00e3c18e06cbae6e4b69 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/footer.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 4,  67 => 2,  57 => 1,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/footer.css\">
{% endblock %}
{% block footer %}
  <nav id=\"navFooter\"class=\"nav flex-column flex-lg-row px-4 pt-4 pb-5\" height=\"15vh\">
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
{% endblock %}", "footer.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\footer.html.twig");
    }
}
