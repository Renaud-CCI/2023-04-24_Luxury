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

/* home/company.html.twig */
class __TwigTemplate_7fcdfc0d377030bdcf2f486161628f54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/company.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/company.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/company.html.twig", 1);
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

        echo "Our Company";
        
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
\t\t\t\t\t\t<h2 class=\"white-text\">Who We are</h2>
\t\t\t\t\t\t<span class=\"white-text\">Discover our skills & attributes</span>
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
\t\t\t\t\t<h2 class=\"section-title text-uppercase\">About us</h2>
\t\t\t\t\t<p class=\"section-sub\">Luxury Services is a leading professional recruitment consultancy specialising in the
\t\t\t\t\t\trecruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE8E8;</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Verified jobs</h3>
\t\t\t\t\t\t\t\t<p>Checked and sorted, our job offers are updated regularly to offer you the best opportunities in the
\t\t\t\t\t\t\t\t\tindustry.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE84E;</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Recruitment</h3>
\t\t\t\t\t\t\t\t<p>Precise and personalized, we make sure they don’t skip a step: verifying tickets, diplomas and
\t\t\t\t\t\t\t\t\tconsulting references.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE903;</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Experienced</h3>
\t\t\t\t\t\t\t\t<p>We know the importance of efficiency and availability. These qualities are therefore our watchwords.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"promo-box promo-parallax mt-80 mb-80 ptb-70 text-center\">
\t\t\t\t\t\t\t<div class=\"promo-info\">
\t\t\t\t\t\t\t\t<h1 class=\"text-uppercase mb-30 text-extrabold font-30\">We provide customized services on demand</h1>
\t\t\t\t\t\t\t\t<p class=\"width-60 mb-30\">You know that attracting and retaining top talent is vital for the success of
\t\t\t\t\t\t\t\t\tyour business. It’s that end result you’re focused on – hiring a great team – and not the process to
\t\t\t\t\t\t\t\t\tget there. This is where we can help...</p>

\t\t\t\t\t\t\t\t<a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_contact");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-lg border secondary waves-effect waves-light mt-20\"><span><strong>Get in touch</strong>
\t\t\t\t\t\t\t\t\t\twith us</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p class=\"text-center mb-80\">The role of a recruitment consultancy is to act as an intermediary, identifying
\t\t\t\t\t\tand sourcing suitably qualified candidates on behalf of its clients. Candidates are recruited either for
\t\t\t\t\t\tpermanent or contract positions (typically for a fixed term) or on a temporary basis. Within the overall
\t\t\t\t\t\trecruitment industry, the market for professional recruitment services is a specialist sector which has
\t\t\t\t\t\tdeveloped more recently.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div id=\"project-slider\" class=\"carousel slide boot-slider\" data-ride=\"carousel\">
\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t<li data-target=\"#project-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t<li data-target=\"#project-slider\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t</ol>

\t\t\t\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"../assets/img/slide1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"../assets/img/slide2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a class=\"left carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"right carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Our philosophy</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tLuxury Services is one of the world's leading professional recruitment consultancies, specializing in the
\t\t\t\t\t\t\tplacement of candidates in permanent, contract, temporary and interim positions with clients around the
\t\t\t\t\t\t\tworld.
\t\t\t\t\t\t\t<br>The Group has established a leading presence in many of the key markets for professional recruitment
\t\t\t\t\t\t\taround the world and has positioned itself in certain other markets, which offer the opportunity for
\t\t\t\t\t\t\tfuture growth.
\t\t\t\t\t\t</p>
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
        // line 174
        $this->displayBlock('js', $context, $blocks);
        // line 184
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 175
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
        return "home/company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 175,  275 => 174,  264 => 184,  262 => 174,  168 => 83,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Our Company{% endblock %}

{% block body %}


<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t<!-- Page Header-->
\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"white-text\">Who We are</h2>
\t\t\t\t\t\t<span class=\"white-text\">Discover our skills & attributes</span>
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
\t\t\t\t\t<h2 class=\"section-title text-uppercase\">About us</h2>
\t\t\t\t\t<p class=\"section-sub\">Luxury Services is a leading professional recruitment consultancy specialising in the
\t\t\t\t\t\trecruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE8E8;</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Verified jobs</h3>
\t\t\t\t\t\t\t\t<p>Checked and sorted, our job offers are updated regularly to offer you the best opportunities in the
\t\t\t\t\t\t\t\t\tindustry.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE84E;</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Recruitment</h3>
\t\t\t\t\t\t\t\t<p>Precise and personalized, we make sure they don’t skip a step: verifying tickets, diplomas and
\t\t\t\t\t\t\t\t\tconsulting references.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE903;</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Experienced</h3>
\t\t\t\t\t\t\t\t<p>We know the importance of efficiency and availability. These qualities are therefore our watchwords.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"promo-box promo-parallax mt-80 mb-80 ptb-70 text-center\">
\t\t\t\t\t\t\t<div class=\"promo-info\">
\t\t\t\t\t\t\t\t<h1 class=\"text-uppercase mb-30 text-extrabold font-30\">We provide customized services on demand</h1>
\t\t\t\t\t\t\t\t<p class=\"width-60 mb-30\">You know that attracting and retaining top talent is vital for the success of
\t\t\t\t\t\t\t\t\tyour business. It’s that end result you’re focused on – hiring a great team – and not the process to
\t\t\t\t\t\t\t\t\tget there. This is where we can help...</p>

\t\t\t\t\t\t\t\t<a href=\"{{path('show_contact')}}\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-lg border secondary waves-effect waves-light mt-20\"><span><strong>Get in touch</strong>
\t\t\t\t\t\t\t\t\t\twith us</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p class=\"text-center mb-80\">The role of a recruitment consultancy is to act as an intermediary, identifying
\t\t\t\t\t\tand sourcing suitably qualified candidates on behalf of its clients. Candidates are recruited either for
\t\t\t\t\t\tpermanent or contract positions (typically for a fixed term) or on a temporary basis. Within the overall
\t\t\t\t\t\trecruitment industry, the market for professional recruitment services is a specialist sector which has
\t\t\t\t\t\tdeveloped more recently.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div id=\"project-slider\" class=\"carousel slide boot-slider\" data-ride=\"carousel\">
\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t<li data-target=\"#project-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t<li data-target=\"#project-slider\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t</ol>

\t\t\t\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"../assets/img/slide1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"../assets/img/slide2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a class=\"left carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"right carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3 class=\"no-margin text-extrabold\">Our philosophy</h3>
\t\t\t\t\t\t<p class=\"mt-20 mb-20\">
\t\t\t\t\t\t\tLuxury Services is one of the world's leading professional recruitment consultancies, specializing in the
\t\t\t\t\t\t\tplacement of candidates in permanent, contract, temporary and interim positions with clients around the
\t\t\t\t\t\t\tworld.
\t\t\t\t\t\t\t<br>The Group has established a leading presence in many of the key markets for professional recruitment
\t\t\t\t\t\t\taround the world and has positioned itself in certain other markets, which offer the opportunity for
\t\t\t\t\t\t\tfuture growth.
\t\t\t\t\t\t</p>
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







", "home/company.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/home/company.html.twig");
    }
}
