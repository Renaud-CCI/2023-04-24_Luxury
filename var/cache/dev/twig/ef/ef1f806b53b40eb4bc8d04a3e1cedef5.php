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

/* home/contact.html.twig */
class __TwigTemplate_76d37baf1104024be754a8f731e15c35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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

        echo "Luxury Contacts";
        
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
\t\t\t\t\t\t<h2 class=\"white-text\">Feel free to contact us</h2>
\t\t\t\t\t\t<span class=\"white-text\">for any questions or demands</span>
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"active\">Contact</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Page Content-->
\t\t<form method=\"POST\" action=\"#!\" accept-charset=\"UTF-8\" id=\"formContact\" class=\"light-gray-bg\">
\t\t\t<input name=\"_token\" type=\"hidden\" value=\"\">
\t\t\t<input name=\"job_id\" type=\"hidden\" value=\"\">
\t\t\t<section class=\"section-padding\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"text-center mb-80\">
\t\t\t\t\t\t<h2 class=\"section-title text-uppercase\">Drop us a line</h2>
\t\t\t\t\t\t<p class=\"section-sub text-center\">Whether your needs, desires or wishes are urgent or a little less, they
\t\t\t\t\t\t\twill all be taken care of with the some efficiency by us.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div id=\"contactForm\" class=\"col-xs-12 col-sm-12 col-md-8\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input required=\"required\" name=\"firstname\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t<label for=\"firstname\">First name</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input required=\"required\" name=\"lastname\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastname\">Last name</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input required=\"required\" name=\"email\" type=\"email\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input required=\"required\" name=\"phone\" type=\"tel\">
\t\t\t\t\t\t\t\t\t\t<label for=\"phone\">Phone Number</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"materialize-textarea\" required=\"required\" name=\"message\" cols=\"50\"
\t\t\t\t\t\t\t\t\t\t\trows=\"10\" placeholder=\"Les envoie de mails ne sont pas gérés dans ce TP. Merci d'utiliser le lien sur la droite ou dans le footer.\"></textarea>
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-md-offset-3\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\"
\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-block gradient primary waves-effect waves-light submit-button\">
\t\t\t\t\t\t\t\t\t\tSend Message
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-4 contact-info mt-40\">

\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t<i class=\"material-icons brand-color\">&#xE55F;</i>
\t\t\t\t\t\t\t\t<div class=\"address\">
\t\t\t\t\t\t\t\t\t<p>Luxury Services is based in Testville, on Loire department</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"material-icons brand-color\">&#xE61C;</i>
\t\t\t\t\t\t\t\t<div class=\"phone\">
\t\t\t\t\t\t\t\t\t<p>+33 (0) 6 60 06 66 00</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"material-icons brand-color\">&#xE916;</i>
\t\t\t\t\t\t\t\t<div class=\"phone\">
\t\t\t\t\t\t\t\t\t<p>9 - 22h with 24/7 speaker</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"material-icons brand-color\">&#xE0E1;</i>
\t\t\t\t\t\t\t\t<div class=\"mail\">
\t\t\t\t\t\t\t\t\t<p><a href=\"mailto:renaud.bresson@proton.me\">renaud.bresson</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</form>
\t\t<div id=\"myMap\" class=\"height-350\">Gmap here</div>

\t</div>

</div>


";
        // line 122
        $this->displayBlock('js', $context, $blocks);
        // line 131
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 123
        echo "
<script type=\"text/javascript\">

\tonAppReady(function () {
\t\t\$('.preload').remove();
\t});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 123,  220 => 122,  209 => 131,  207 => 122,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Luxury Contacts{% endblock %}

{% block body %}


<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t<!-- Page Header-->
\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"white-text\">Feel free to contact us</h2>
\t\t\t\t\t\t<span class=\"white-text\">for any questions or demands</span>
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"active\">Contact</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Page Content-->
\t\t<form method=\"POST\" action=\"#!\" accept-charset=\"UTF-8\" id=\"formContact\" class=\"light-gray-bg\">
\t\t\t<input name=\"_token\" type=\"hidden\" value=\"\">
\t\t\t<input name=\"job_id\" type=\"hidden\" value=\"\">
\t\t\t<section class=\"section-padding\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"text-center mb-80\">
\t\t\t\t\t\t<h2 class=\"section-title text-uppercase\">Drop us a line</h2>
\t\t\t\t\t\t<p class=\"section-sub text-center\">Whether your needs, desires or wishes are urgent or a little less, they
\t\t\t\t\t\t\twill all be taken care of with the some efficiency by us.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div id=\"contactForm\" class=\"col-xs-12 col-sm-12 col-md-8\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input required=\"required\" name=\"firstname\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t<label for=\"firstname\">First name</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input required=\"required\" name=\"lastname\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastname\">Last name</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input required=\"required\" name=\"email\" type=\"email\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input required=\"required\" name=\"phone\" type=\"tel\">
\t\t\t\t\t\t\t\t\t\t<label for=\"phone\">Phone Number</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"materialize-textarea\" required=\"required\" name=\"message\" cols=\"50\"
\t\t\t\t\t\t\t\t\t\t\trows=\"10\" placeholder=\"Les envoie de mails ne sont pas gérés dans ce TP. Merci d'utiliser le lien sur la droite ou dans le footer.\"></textarea>
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-md-offset-3\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\"
\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-block gradient primary waves-effect waves-light submit-button\">
\t\t\t\t\t\t\t\t\t\tSend Message
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-4 contact-info mt-40\">

\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t<i class=\"material-icons brand-color\">&#xE55F;</i>
\t\t\t\t\t\t\t\t<div class=\"address\">
\t\t\t\t\t\t\t\t\t<p>Luxury Services is based in Testville, on Loire department</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"material-icons brand-color\">&#xE61C;</i>
\t\t\t\t\t\t\t\t<div class=\"phone\">
\t\t\t\t\t\t\t\t\t<p>+33 (0) 6 60 06 66 00</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"material-icons brand-color\">&#xE916;</i>
\t\t\t\t\t\t\t\t<div class=\"phone\">
\t\t\t\t\t\t\t\t\t<p>9 - 22h with 24/7 speaker</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"material-icons brand-color\">&#xE0E1;</i>
\t\t\t\t\t\t\t\t<div class=\"mail\">
\t\t\t\t\t\t\t\t\t<p><a href=\"mailto:renaud.bresson@proton.me\">renaud.bresson</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</form>
\t\t<div id=\"myMap\" class=\"height-350\">Gmap here</div>

\t</div>

</div>


{% block js %}

<script type=\"text/javascript\">

\tonAppReady(function () {
\t\t\$('.preload').remove();
\t});
</script>
{% endblock %}

{% endblock %}


", "home/contact.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/home/contact.html.twig");
    }
}
