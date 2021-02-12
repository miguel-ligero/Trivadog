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

/* security/iniciosesion.html.twig */
class __TwigTemplate_86346032962b34373260e269c98fe2b59ae0ed81fbdb0b48bcf67a0d32a46661 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/iniciosesion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/iniciosesion.html.twig", 1);
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container\">
  <div class=\"row align-items-center py-5\"></div>
  
  <div class=\"row justify-content-md-center mt-4\" style=\"min-height: 500px\">
    <div class=\"col-2 col-lg-4\"></div>
    <div class=\"col-8 col-lg-4 \">
      <div class=\"card justify-content-md-center\">
        <form method=\"post\" class=\"px-4 py-3 \">
          ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageKey", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 19
        echo "
          ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "            <div class=\"mb-3\">
              Estás logueado como ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
          ";
        }
        // line 25
        echo "          <div class=\"form-group\">
            <label for=\"exampleDropdownFormEmail1\">Email</label>
            <input type=\"email\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" id=\"inputEmail\" name=\"email\" placeholder=\"email@example.com\" required autofocus>
          </div>
          <div class=\"form-group\">
            <label for=\"exampleDropdownFormPassword1\">Contraseña</label>
            <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\" required>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <div class=\"mx-auto mt-5 btn-registry\">
                <button type=\"submit\" class=\"btn btn-primary btn-home\">Iniciar sesión</a>
            </div>
          </div>
        </form>
        <hr class=\"mx-3 my-0\">
        <a class=\"link-n text-center py-3\" href=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/form\">¿Eres nuevo? Regístrate</a>
      </div>
    </div>
    <div class=\"col-2 col-lg-4\"></div>
  </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/iniciosesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 50,  132 => 32,  124 => 27,  120 => 25,  112 => 22,  109 => 21,  107 => 20,  104 => 19,  98 => 17,  96 => 16,  86 => 8,  79 => 7,  67 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row align-items-center py-5\"></div>
  
  <div class=\"row justify-content-md-center mt-4\" style=\"min-height: 500px\">
    <div class=\"col-2 col-lg-4\"></div>
    <div class=\"col-8 col-lg-4 \">
      <div class=\"card justify-content-md-center\">
        <form method=\"post\" class=\"px-4 py-3 \">
          {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}

          {% if app.user %}
            <div class=\"mb-3\">
              Estás logueado como {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
          {% endif %}
          <div class=\"form-group\">
            <label for=\"exampleDropdownFormEmail1\">Email</label>
            <input type=\"email\" class=\"form-control\" value=\"{{ last_username }}\" id=\"inputEmail\" name=\"email\" placeholder=\"email@example.com\" required autofocus>
          </div>
          <div class=\"form-group\">
            <label for=\"exampleDropdownFormPassword1\">Contraseña</label>
            <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\" required>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
          </div>
          <div class=\"form-group\">
            <div class=\"mx-auto mt-5 btn-registry\">
                <button type=\"submit\" class=\"btn btn-primary btn-home\">Iniciar sesión</a>
            </div>
          </div>
        </form>
        <hr class=\"mx-3 my-0\">
        <a class=\"link-n text-center py-3\" href=\"http://trivadog.mipropia.com/trivadog/public/registrousuario/form\">¿Eres nuevo? Regístrate</a>
      </div>
    </div>
    <div class=\"col-2 col-lg-4\"></div>
  </div>

</div>
{% endblock %}

{% block javascripts %}{% endblock %}", "security/iniciosesion.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\templates\\security\\iniciosesion.html.twig");
    }
}
