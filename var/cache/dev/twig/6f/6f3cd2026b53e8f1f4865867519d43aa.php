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

/* home/termsOfUse.html.twig */
class __TwigTemplate_0455f2cc045d939fb585f33b78877816 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/termsOfUse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/termsOfUse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/termsOfUse.html.twig", 1);
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

        echo "Terms Of Use";
        
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
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"active\">About us</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Page Content-->

\t\t<section class=\"section-padding light-gray-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"text-center mb-80\">
\t\t\t\t\t<h2 class=\"section-title text-uppercase\">Terms Of Use for Luxury Services</h2>
\t\t\t\t\t<p class=\"section-sub\">Welcome to Luxury Services, a leading professional recruitment consultancy specializing in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Our philosophy</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tOur role is to work with employers and job seekers to facilitate a successful match. This can range from advising a global company on a candidate sourcing strategy to helping a job seeker find their dream job.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">About Us</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tLuxury Services is a leading professional recruitment consultancy specializing in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Verified Jobs</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tChecked and sorted, our job offers are updated regularly to offer you the best opportunities in the industry.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Recruitment</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tPrecise and personalized, we make sure they don’t skip a step: verifying tickets, diplomas and consulting references.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Experience</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tWe know the importance of efficiency and availability. These qualities are therefore our watchwords. Luxury Services is a leading professional recruitment consultancy specializing in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t<span class=\"mt-60\"><strong>By using our website, you agree to these terms of use and agree to abide by them.</strong></span>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</section>
\t\t<section class=\"padding-top-110 padding-bottom-70 brand-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"quote-carousel text-center\">

\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h2 class=\"white-text line-height-40\">\"Get in touch with Luxury Services to leave the port for the
\t\t\t\t\t\t\t\t\t\tseason with the
\t\t\t\t\t\t\t\t\t\tright crew, and a peace of mind knowing that whatever situation arises we will
\t\t\t\t\t\t\t\t\t\tbe there to help.\"</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h2 class=\"white-text line-height-40\">\"My favorite things in life don't cost any money. It's really
\t\t\t\t\t\t\t\t\t\tclear that the most precious resource we all have is time.\"</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h2 class=\"white-text line-height-40\">\"My favorite things in life don't cost any money. It's really
\t\t\t\t\t\t\t\t\t\tclear that the most precious resource we all have is time.\"</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>

</div>

\t";
        // line 121
        $this->displayBlock('js', $context, $blocks);
        // line 131
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 122
        echo "
\t<script type=\"text/javascript\">

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
        return "home/termsOfUse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 122,  219 => 121,  208 => 131,  206 => 121,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Terms Of Use{% endblock %}

{% block body %}


<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t<!-- Page Header-->
\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"active\">About us</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Page Content-->

\t\t<section class=\"section-padding light-gray-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"text-center mb-80\">
\t\t\t\t\t<h2 class=\"section-title text-uppercase\">Terms Of Use for Luxury Services</h2>
\t\t\t\t\t<p class=\"section-sub\">Welcome to Luxury Services, a leading professional recruitment consultancy specializing in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Our philosophy</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tOur role is to work with employers and job seekers to facilitate a successful match. This can range from advising a global company on a candidate sourcing strategy to helping a job seeker find their dream job.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">About Us</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tLuxury Services is a leading professional recruitment consultancy specializing in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Verified Jobs</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tChecked and sorted, our job offers are updated regularly to offer you the best opportunities in the industry.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Recruitment</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tPrecise and personalized, we make sure they don’t skip a step: verifying tickets, diplomas and consulting references.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Experience</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tWe know the importance of efficiency and availability. These qualities are therefore our watchwords. Luxury Services is a leading professional recruitment consultancy specializing in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t<span class=\"mt-60\"><strong>By using our website, you agree to these terms of use and agree to abide by them.</strong></span>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</section>
\t\t<section class=\"padding-top-110 padding-bottom-70 brand-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"quote-carousel text-center\">

\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h2 class=\"white-text line-height-40\">\"Get in touch with Luxury Services to leave the port for the
\t\t\t\t\t\t\t\t\t\tseason with the
\t\t\t\t\t\t\t\t\t\tright crew, and a peace of mind knowing that whatever situation arises we will
\t\t\t\t\t\t\t\t\t\tbe there to help.\"</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h2 class=\"white-text line-height-40\">\"My favorite things in life don't cost any money. It's really
\t\t\t\t\t\t\t\t\t\tclear that the most precious resource we all have is time.\"</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h2 class=\"white-text line-height-40\">\"My favorite things in life don't cost any money. It's really
\t\t\t\t\t\t\t\t\t\tclear that the most precious resource we all have is time.\"</h2>
\t\t\t\t\t\t\t\t</div>
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







", "home/termsOfUse.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/home/termsOfUse.html.twig");
    }
}
