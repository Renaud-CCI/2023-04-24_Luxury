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

/* job_offer/show.html.twig */
class __TwigTemplate_52664d149461b8836fc6b5ed54c5e047 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job_offer/show.html.twig", 1);
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

        echo "Luxury Offer";
        
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

    <!-- Page -->
    <div class=\"page\">

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</h2>
                        <span class=\"white-text\">Ref. AA";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</span>
                        <ol class=\"breadcrumb\">
                            <li>
                                <div class=\"portfolio-nav\">
                                    <a href=\"#!\" class=\"waves-effect waves-dark\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i> Prev</a>
                                    <a href=\"#!\" class=\"waves-effect waves-dark\"><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i></a>
                                    <a href=\"#!\" class=\"waves-effect waves-dark\">Next <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->
        <section class=\"single-project-section section-padding light-gray-bg\">
            <div class=\"container\">
                <div class=\"project-overview\">
                    <div class=\"row mb-80\">
                        <div class=\"col-xs-12 col-md-8\">
                            <p class=\"ref grey-text no-margin\">Ref. AA";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
                            <h2>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), "html", null, true);
        echo "</h2>
                            <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-xs-12 col-md-4 quick-overview\">
                            <ul class=\"portfolio-meta\">
                                <li><span> Pulished at </span>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 46, $this->source); })()), "creationDate", [], "any", false, false, false, 46), "d M y"), "html", null, true);
        echo "</li>
                                <li><span> Position </span>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 47, $this->source); })()), "jobCategory", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "</li>
                                <li><span> Contract Type </span>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), "html", null, true);
        echo "</li>
                                <li><span> Salary </span>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 49, $this->source); })()), "salary", [], "any", false, false, false, 49), "html", null, true);
        echo " &euro;</li>
                                <li><span> Location </span>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 50, $this->source); })()), "location", [], "any", false, false, false, 50), "html", null, true);
        echo "</li>
                                <li><span> Starting date </span>2018-05-18</li>
                            </ul>
                            <a class=\"btn btn-block gradient primary mt-30 waves-effect waves-light\" href=\"#!\">Apply for this job</a>
                            <div class=\"btn btn-block btn-success mt-30 waves-effect waves-light disabled\">You have applied for this job</div>
                        </div>
                    </div>
                </div>

                <nav class=\"single-post-navigation no-margin\" role=\"navigation\">
                    <div class=\"row\">

                        <div class=\"col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"previous-post-link\">
                                <a class=\"btn border primary waves-effect waves-dark\" href=\"#!\">
                                    <i class=\"fa fa-long-arrow-left\"></i>Previous
                                </a>
                            </div>
                        </div>
                        <div class=\"hidden-xs hidden-sm col-md-4\"></div>


                        <div class=\"col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"next-post-link\">
                                <a class=\"btn border primary waves-effect waves-dark\" href=\"#!\">
                                    Next <i class=\"fa fa-long-arrow-right\"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </section>

    </div>

</div>

\t";
        // line 89
        $this->displayBlock('js', $context, $blocks);
        // line 97
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 90
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
        return "job_offer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 90,  217 => 89,  206 => 97,  204 => 89,  162 => 50,  158 => 49,  154 => 48,  150 => 47,  146 => 46,  138 => 41,  134 => 40,  130 => 39,  106 => 18,  102 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Luxury Offer{% endblock %}

{% block body %}

<div class=\"base\">

    <!-- Page -->
    <div class=\"page\">

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">{{job.title}}</h2>
                        <span class=\"white-text\">Ref. AA{{ job.id }}</span>
                        <ol class=\"breadcrumb\">
                            <li>
                                <div class=\"portfolio-nav\">
                                    <a href=\"#!\" class=\"waves-effect waves-dark\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i> Prev</a>
                                    <a href=\"#!\" class=\"waves-effect waves-dark\"><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i></a>
                                    <a href=\"#!\" class=\"waves-effect waves-dark\">Next <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->
        <section class=\"single-project-section section-padding light-gray-bg\">
            <div class=\"container\">
                <div class=\"project-overview\">
                    <div class=\"row mb-80\">
                        <div class=\"col-xs-12 col-md-8\">
                            <p class=\"ref grey-text no-margin\">Ref. AA{{ job.id }}</p>
                            <h2>{{ job.title }}</h2>
                            <p>{{ job.description }}</p>
                        </div>

                        <div class=\"col-xs-12 col-md-4 quick-overview\">
                            <ul class=\"portfolio-meta\">
                                <li><span> Pulished at </span>{{ job.creationDate|date('d M y') }}</li>
                                <li><span> Position </span>{{job.jobCategory.name}}</li>
                                <li><span> Contract Type </span>{{job.type}}</li>
                                <li><span> Salary </span>{{job.salary}} &euro;</li>
                                <li><span> Location </span>{{job.location}}</li>
                                <li><span> Starting date </span>2018-05-18</li>
                            </ul>
                            <a class=\"btn btn-block gradient primary mt-30 waves-effect waves-light\" href=\"#!\">Apply for this job</a>
                            <div class=\"btn btn-block btn-success mt-30 waves-effect waves-light disabled\">You have applied for this job</div>
                        </div>
                    </div>
                </div>

                <nav class=\"single-post-navigation no-margin\" role=\"navigation\">
                    <div class=\"row\">

                        <div class=\"col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"previous-post-link\">
                                <a class=\"btn border primary waves-effect waves-dark\" href=\"#!\">
                                    <i class=\"fa fa-long-arrow-left\"></i>Previous
                                </a>
                            </div>
                        </div>
                        <div class=\"hidden-xs hidden-sm col-md-4\"></div>


                        <div class=\"col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"next-post-link\">
                                <a class=\"btn border primary waves-effect waves-dark\" href=\"#!\">
                                    Next <i class=\"fa fa-long-arrow-right\"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </section>

    </div>

</div>

\t{% block js %}
\t<script type=\"text/javascript\">

\t\tonAppReady(function () {
\t\t\t\$('.preload').remove();
\t\t});
\t</script>
\t{% endblock %}

{% endblock %}", "job_offer/show.html.twig", "/home/renaud/devilbox/data/www/2023-04-24_Luxury/templates/job_offer/show.html.twig");
    }
}
