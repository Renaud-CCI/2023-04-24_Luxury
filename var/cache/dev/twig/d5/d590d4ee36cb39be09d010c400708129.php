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

/* job_offer/index.html.twig */
class __TwigTemplate_a4eac2f82445fd13a96588311e16634e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job_offer/index.html.twig", 1);
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

        echo "Luxury Offers";
        
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
\t\t\t\t\t\t<h2 class=\"white-text\">Our job offers</h2>
\t\t\t\t\t\t<span class=\"white-text\">Search and filter by job category</span>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Page Content-->
\t\t<section id=\"job-offers\" class=\"section-padding gray-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"text-center mb-40\">
\t\t\t\t\t<h2 class=\"section-title\">We have the perfect job for you</h2>
\t\t\t\t\t<p class=\"section-sub\">just like our candidates, we offer quality, serious & reliable job offers.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"portfolio-container\">

\t\t\t\t\t<ul class=\"portfolio-filter brand-filter text-center\">
\t\t\t\t\t\t<li class=\"active waves-effect waves-light\" data-group=\"all\">All</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"commercial\">Commercial</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"retail\">Retail sales</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"creative\">Creative</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"technology\">Technology</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"marketing\">Marketing & PR</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"fashion\">Fashion & luxury</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"management\">Management & HR</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"portfolio portfolio-with-title col-2 gutter mt-30\">
\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_offers"]) || array_key_exists("job_offers", $context) ? $context["job_offers"] : (function () { throw new RuntimeError('Variable "job_offers" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 46
            echo "\t\t\t\t\t\t<div class=\"portfolio-item\" data-groups='[\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "jobCategory", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            echo "\"]'>
\t\t\t\t\t\t\t<div class=\"portfolio-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"card job-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 51), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ref grey-text\">Ref. AA";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"metas mb-20\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE53E;</i>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 56), "html", null, true);
            echo "&euro;
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE916;</i>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "closingDate", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE55F;</i>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "location", [], "any", false, false, false, 62), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"truncate-text\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_job_offer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">Details</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "

\t\t\t\t\t\t<div class=\"no-item\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"cta-candidate bg-fixed bg-cover overlay dark-5 padding-top-70 padding-bottom-50\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"valign-wrapper text-center\">
\t\t\t\t\t\t<div class=\"hero-intro valign-cell\">
\t\t\t\t\t\t\t<h2 class=\"tt-headline clip is-full-width no-margin\">
\t\t\t\t\t\t\t\t<span>You are </span>
\t\t\t\t\t\t\t\t<span class=\"tt-words-wrapper\">
\t\t\t\t\t\t\t\t\t<b class=\"is-visible\">Commercial</b>
\t\t\t\t\t\t\t\t\t<b>Creative</b>
\t\t\t\t\t\t\t\t\t<b>Marketing & PR</b>
\t\t\t\t\t\t\t\t\t<b>Technology</b>
\t\t\t\t\t\t\t\t\t<b>Fashion & luxury</b>
\t\t\t\t\t\t\t\t\t<b>Retail sales</b>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h3 class=\"c-secondary mb-30 no-margin\">Sign-up and apply for jobs now</h3>
\t\t\t\t\t\t\t<p class=\"white-text section-sub\">Each one of your skills is seen as precious resource to us, each one of
\t\t\t\t\t\t\t\tyour personality traits are considered as an added on value. Joining us is allowing our recruitment
\t\t\t\t\t\t\t\texpertise and personal guidance to bring the best out in you by choosing the most suited position.</p>

\t\t\t\t\t\t\t<a href=\"/register.html\" class=\"btn border secondary waves-effect waves-light mt-40\">Join us</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>

</div>

";
        // line 115
        $this->displayBlock('js', $context, $blocks);
        // line 123
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 116
        echo "<script type=\"text/javascript\">

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
        return "job_offer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 116,  246 => 115,  235 => 123,  233 => 115,  191 => 75,  178 => 68,  172 => 65,  166 => 62,  160 => 59,  154 => 56,  147 => 52,  143 => 51,  134 => 46,  130 => 45,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Luxury Offers{% endblock %}

{% block body %}

<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t<!-- Page Header-->
\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"white-text\">Our job offers</h2>
\t\t\t\t\t\t<span class=\"white-text\">Search and filter by job category</span>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Page Content-->
\t\t<section id=\"job-offers\" class=\"section-padding gray-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"text-center mb-40\">
\t\t\t\t\t<h2 class=\"section-title\">We have the perfect job for you</h2>
\t\t\t\t\t<p class=\"section-sub\">just like our candidates, we offer quality, serious & reliable job offers.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"portfolio-container\">

\t\t\t\t\t<ul class=\"portfolio-filter brand-filter text-center\">
\t\t\t\t\t\t<li class=\"active waves-effect waves-light\" data-group=\"all\">All</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"commercial\">Commercial</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"retail\">Retail sales</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"creative\">Creative</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"technology\">Technology</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"marketing\">Marketing & PR</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"fashion\">Fashion & luxury</li>
\t\t\t\t\t\t<li class=\" waves-effect waves-light\" data-group=\"management\">Management & HR</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"portfolio portfolio-with-title col-2 gutter mt-30\">
\t\t\t\t\t\t{% for job in job_offers %}
\t\t\t\t\t\t<div class=\"portfolio-item\" data-groups='[\"{{job.jobCategory.name}}\"]'>
\t\t\t\t\t\t\t<div class=\"portfolio-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"card job-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">{{ job.title }}</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ref grey-text\">Ref. AA{{ job.id }}</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"metas mb-20\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE53E;</i>{{ job.salary }}&euro;
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE916;</i>{{ job.closingDate|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE55F;</i>{{ job.location }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"truncate-text\">{{ job.description }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"{{ path('app_job_offer_show', {'id': job.id}) }}\">Details</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t<div class=\"no-item\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"cta-candidate bg-fixed bg-cover overlay dark-5 padding-top-70 padding-bottom-50\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"valign-wrapper text-center\">
\t\t\t\t\t\t<div class=\"hero-intro valign-cell\">
\t\t\t\t\t\t\t<h2 class=\"tt-headline clip is-full-width no-margin\">
\t\t\t\t\t\t\t\t<span>You are </span>
\t\t\t\t\t\t\t\t<span class=\"tt-words-wrapper\">
\t\t\t\t\t\t\t\t\t<b class=\"is-visible\">Commercial</b>
\t\t\t\t\t\t\t\t\t<b>Creative</b>
\t\t\t\t\t\t\t\t\t<b>Marketing & PR</b>
\t\t\t\t\t\t\t\t\t<b>Technology</b>
\t\t\t\t\t\t\t\t\t<b>Fashion & luxury</b>
\t\t\t\t\t\t\t\t\t<b>Retail sales</b>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h3 class=\"c-secondary mb-30 no-margin\">Sign-up and apply for jobs now</h3>
\t\t\t\t\t\t\t<p class=\"white-text section-sub\">Each one of your skills is seen as precious resource to us, each one of
\t\t\t\t\t\t\t\tyour personality traits are considered as an added on value. Joining us is allowing our recruitment
\t\t\t\t\t\t\t\texpertise and personal guidance to bring the best out in you by choosing the most suited position.</p>

\t\t\t\t\t\t\t<a href=\"/register.html\" class=\"btn border secondary waves-effect waves-light mt-40\">Join us</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>

</div>

{% block js %}
<script type=\"text/javascript\">

\tonAppReady(function () {
\t\t\$('.preload').remove();
\t});
</script>
{% endblock %}

{% endblock %}", "job_offer/index.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/job_offer/index.html.twig");
    }
}
