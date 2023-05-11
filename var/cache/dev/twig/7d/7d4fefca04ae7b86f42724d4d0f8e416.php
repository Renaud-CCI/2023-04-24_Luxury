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

/* user/register.html.twig */
class __TwigTemplate_a3a5474f2637a90e4f3bd3f9f68f7957 extends Template
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
            'js' => [$this, 'block_js'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Luxury Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<style>
\t.page-title-bg {
\t\tbackground-image: url(../../assets/img/bg3.jpg);
\t}

\t.log-section form .checkbox label {
\t\tfont-size: 16px
\t}

\t.log-section form .checkbox label a {
\t\tcolor: #b6a575;
\t\ttext-decoration: underline;
\t\ttext-transform: inherit;
\t\tfont-size: 16px
\t}

\t.log-section form .links a {
\t\tdisplay: block;
\t\ttext-align: center;
\t\tcolor: #b6a575;
\t\ttext-decoration: underline;
\t\ttext-transform: inherit;
\t\tfont-size: 16px
\t}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t<!-- Page Header-->
\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"white-text\">Register</h2>
\t\t\t\t\t\t<span class=\"white-text\">Welcome on board</span>
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"active\">Register</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<!-- Page Content-->
\t\t<section class=\"section-padding gray-bg log-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-sm-offset-3 card card-panel\">
\t\t\t\t\t\t<h3 class=\"text-extrabold\">Create a new account</h3>

\t\t\t\t\t\t";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"\">

\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => ("form-control validate " . ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71))) ? ("invalid") : ("")))]]);
        echo "
\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t<span class=\"help-block\">Type your email address.</span>
\t\t\t\t\t\t\t\t";
        // line 74
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74))) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"helper-text red-text\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "password", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => ("validate " . ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "password", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "errors", [], "any", false, false, false, 82))) ? ("invalid") : ("")))]]);
        echo "
\t\t\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t\t\t<i class=\"fa fa-eye show-password\"></i>
\t\t\t\t\t\t\t\t<span class=\"help-block\">Type your password.</span>
\t\t\t\t\t\t\t\t";
        // line 91
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "password_confirmation", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => ("validate " . ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "password_confirmation", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94))) ? ("invalid") : ("")))]]);
        echo "
\t\t\t\t\t\t\t\t<label for=\"password_confirmation\">Confirm Password</label>
\t\t\t\t\t\t\t\t<i class=\"fa fa-eye show-password\"></i>
\t\t\t\t\t\t\t\t<span class=\"help-block\">Confirm your password.</span>
\t\t\t\t\t\t\t\t";
        // line 98
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "password_confirmation", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98))) {
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"helper-text red-text\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "password_confirmation", [], "any", false, false, false, 100), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"accept-terms\" value=\"1\" id=\"accept-terms\" required />
\t\t\t\t\t\t\t\t<label for=\"accept-terms\">I have read and I accept the <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_of_use");
        echo "\" target=\"_blank\">Terms Of
\t\t\t\t\t\t\t\t\t\tUse</a></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-lg gradient secondary btn-block waves-effect waves-light mt-20 mb-20\">Create an account</button>

\t\t\t\t\t\t\t<div class=\"links\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Already have an account? Click here</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>

</div>

\t";
        // line 132
        $this->displayBlock('js', $context, $blocks);
        // line 140
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 132
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 133
        echo "\t<script type=\"text/javascript\">

\t\tonAppReady(function () {
\t\t\t\$('.preload').remove();
\t\t});
\t</script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 133,  282 => 132,  269 => 140,  267 => 132,  251 => 119,  245 => 116,  235 => 109,  227 => 103,  221 => 100,  218 => 99,  216 => 98,  209 => 94,  204 => 91,  197 => 82,  192 => 79,  186 => 76,  183 => 75,  181 => 74,  175 => 71,  167 => 66,  135 => 36,  125 => 35,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Luxury Login{% endblock %}

{% block stylesheets %}
<style>
\t.page-title-bg {
\t\tbackground-image: url(../../assets/img/bg3.jpg);
\t}

\t.log-section form .checkbox label {
\t\tfont-size: 16px
\t}

\t.log-section form .checkbox label a {
\t\tcolor: #b6a575;
\t\ttext-decoration: underline;
\t\ttext-transform: inherit;
\t\tfont-size: 16px
\t}

\t.log-section form .links a {
\t\tdisplay: block;
\t\ttext-align: center;
\t\tcolor: #b6a575;
\t\ttext-decoration: underline;
\t\ttext-transform: inherit;
\t\tfont-size: 16px
\t}
</style>
{% endblock %}



{% block body %}

<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t<!-- Page Header-->
\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"white-text\">Register</h2>
\t\t\t\t\t\t<span class=\"white-text\">Welcome on board</span>
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"active\">Register</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<!-- Page Content-->
\t\t<section class=\"section-padding gray-bg log-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-sm-offset-3 card card-panel\">
\t\t\t\t\t\t<h3 class=\"text-extrabold\">Create a new account</h3>

\t\t\t\t\t\t{{ form_start(form) }}

\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"\">

\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t{{ form_widget(form.email, {'attr': {'class': 'form-control validate ' ~ (form.email.vars.errors|length ? 'invalid' : '') }}) }}
\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t<span class=\"help-block\">Type your email address.</span>
\t\t\t\t\t\t\t\t{% if form.email.vars.errors|length %}
\t\t\t\t\t\t\t\t\t\t<span class=\"helper-text red-text\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t{{ form_widget(form.password, {'attr': {'class': 'validate ' ~ (form.password.vars.errors|length ? 'invalid' : '') }}) }}
\t\t\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t\t\t<i class=\"fa fa-eye show-password\"></i>
\t\t\t\t\t\t\t\t<span class=\"help-block\">Type your password.</span>
\t\t\t\t\t\t\t\t{# {% if form.password.vars.errors|length %}
\t\t\t\t\t\t\t\t\t\t<span class=\"helper-text red-text\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.password) }}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{% endif %} #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t{{ form_widget(form.password_confirmation, {'attr': {'class': 'validate ' ~ (form.password_confirmation.vars.errors|length ? 'invalid' : '') }}) }}
\t\t\t\t\t\t\t\t<label for=\"password_confirmation\">Confirm Password</label>
\t\t\t\t\t\t\t\t<i class=\"fa fa-eye show-password\"></i>
\t\t\t\t\t\t\t\t<span class=\"help-block\">Confirm your password.</span>
\t\t\t\t\t\t\t\t{% if form.password_confirmation.vars.errors|length %}
\t\t\t\t\t\t\t\t\t\t<span class=\"helper-text red-text\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.password_confirmation) }}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"accept-terms\" value=\"1\" id=\"accept-terms\" required />
\t\t\t\t\t\t\t\t<label for=\"accept-terms\">I have read and I accept the <a href=\"{{ path('terms_of_use') }}\" target=\"_blank\">Terms Of
\t\t\t\t\t\t\t\t\t\tUse</a></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-lg gradient secondary btn-block waves-effect waves-light mt-20 mb-20\">Create an account</button>

\t\t\t\t\t\t\t<div class=\"links\">
\t\t\t\t\t\t\t\t<a href=\"{{path('login')}}\">Already have an account? Click here</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{ form_end(form) }}

\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>

</div>

\t{% block js %}
\t<script type=\"text/javascript\">

\t\tonAppReady(function () {
\t\t\t\$('.preload').remove();
\t\t});
\t</script>
\t{% endblock %}



{% endblock %}


", "user/register.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/user/register.html.twig");
    }
}
