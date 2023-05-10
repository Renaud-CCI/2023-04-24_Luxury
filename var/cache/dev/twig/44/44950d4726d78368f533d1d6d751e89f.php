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

/* user/login.html.twig */
class __TwigTemplate_c825ec797427abee6d823b690813f59c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/login.html.twig", 1);
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t<!-- Page Header-->
\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"white-text\">Login</h2>
\t\t\t\t\t\t<span class=\"white-text\">Welcome on board</span>
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"active\">Login</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Page Content-->
\t\t<section class=\"section-padding gray-bg log-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t<div class=\"card card-panel\">
\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Log in to your account</h3>
\t\t\t\t\t\t\t<form id=\"login-form\" role=\"form\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\" accept-char=\"UTF-8\" autocomplete=\"off\"
\t\t\t\t\t\t\t\tdata-parsley-validate>

\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"\">

\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"_username\" id=\"email\" value=\"\" required autofocus data-parsley-trigger=\"change\"
\t\t\t\t\t\t\t\t\t\tdata-parsley-error-message=\"A valid email address is required.\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">Type your email address.</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" required data-parsley-trigger=\"change\"
\t\t\t\t\t\t\t\t\t\tdata-parsley-error-message=\"The password must be at least 6 characters.\">
\t\t\t\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye show-password\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">Type your password.</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"keep-logged\" name=\"remember\" value=\"1\" />
\t\t\t\t\t\t\t\t\t<label for=\"keep-logged\">Keep me logged in</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-lg gradient secondary btn-block waves-effect waves-light mt-20 mb-20\">Login</button>
\t\t\t\t\t\t\t\t<div class=\"links\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgotten_password");
        echo "\">Forgot your password?</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-8\">
\t\t\t\t\t\t<div class=\"card card-panel ptb-70 text-center\">
\t\t\t\t\t\t\t<div class=\"promo-info\">
\t\t\t\t\t\t\t\t<h1 class=\"text-uppercase mb-30 text-extrabold font-30\">New to Luxury Services ?</h1>
\t\t\t\t\t\t\t\t<p class=\"width-60 mb-30\">Joining us is allowing our recruitment expertise and personal
\t\t\t\t\t\t\t\t\tguidance to bring the best out in you by choosing the most suited position.</p>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-lg gradient secondary waves-effect waves-light mt-20\"><span>Sign-up<strong>
\t\t\t\t\t\t\t\t\t\t\tFree</strong></span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
</div>

\t";
        // line 85
        $this->displayBlock('js', $context, $blocks);
        // line 93
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 86
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
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 86,  194 => 85,  181 => 93,  179 => 85,  163 => 72,  148 => 60,  120 => 35,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Luxury Login{% endblock %}

{% block body %}

<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t<!-- Page Header-->
\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"white-text\">Login</h2>
\t\t\t\t\t\t<span class=\"white-text\">Welcome on board</span>
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"active\">Login</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Page Content-->
\t\t<section class=\"section-padding gray-bg log-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t<div class=\"card card-panel\">
\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Log in to your account</h3>
\t\t\t\t\t\t\t<form id=\"login-form\" role=\"form\" action=\"{{path('login')}}\" method=\"post\" accept-char=\"UTF-8\" autocomplete=\"off\"
\t\t\t\t\t\t\t\tdata-parsley-validate>

\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"\">

\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"_username\" id=\"email\" value=\"\" required autofocus data-parsley-trigger=\"change\"
\t\t\t\t\t\t\t\t\t\tdata-parsley-error-message=\"A valid email address is required.\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">Type your email address.</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" required data-parsley-trigger=\"change\"
\t\t\t\t\t\t\t\t\t\tdata-parsley-error-message=\"The password must be at least 6 characters.\">
\t\t\t\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye show-password\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">Type your password.</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"keep-logged\" name=\"remember\" value=\"1\" />
\t\t\t\t\t\t\t\t\t<label for=\"keep-logged\">Keep me logged in</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-lg gradient secondary btn-block waves-effect waves-light mt-20 mb-20\">Login</button>
\t\t\t\t\t\t\t\t<div class=\"links\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('forgotten_password') }}\">Forgot your password?</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-8\">
\t\t\t\t\t\t<div class=\"card card-panel ptb-70 text-center\">
\t\t\t\t\t\t\t<div class=\"promo-info\">
\t\t\t\t\t\t\t\t<h1 class=\"text-uppercase mb-30 text-extrabold font-30\">New to Luxury Services ?</h1>
\t\t\t\t\t\t\t\t<p class=\"width-60 mb-30\">Joining us is allowing our recruitment expertise and personal
\t\t\t\t\t\t\t\t\tguidance to bring the best out in you by choosing the most suited position.</p>
\t\t\t\t\t\t\t\t<a href=\"{{path('register')}}\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-lg gradient secondary waves-effect waves-light mt-20\"><span>Sign-up<strong>
\t\t\t\t\t\t\t\t\t\t\tFree</strong></span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
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


", "user/login.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/user/login.html.twig");
    }
}
