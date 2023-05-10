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

/* job_offer/new.html.twig */
class __TwigTemplate_8f4aaf96e0655b165d5d750a1fe88b8e extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/new.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "job_offer/new.html.twig", 1);
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

        echo "New JobOffer";
        
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
        echo "<div style=\"height:100px\"></div>
<h1>";
        // line 7
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)) ? ("Update") : ("Create new"));
        echo " JobOffer</h1>

<form action=\"#\" method=\"post\">
\t<input type=\"hidden\" name=\"_token\" value=\"\">

\t<div class=\"input-field\">
\t\t<input type=\"text\" name=\"title\" value=\"";
        // line 13
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 13, $this->source); })()), "getTitle", [], "method", false, false, false, 13)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 13, $this->source); })()), "getTitle", [], "method", false, false, false, 13), "html", null, true))) : (print ("")));
        echo "\">
\t\t<label for=\"title\">Title</label>
\t\t<span class=\"help-block\">Insert the title of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<select name=\"type\" id=\"type\">
\t\t\t<option value=\"full_time\">Full Time</option>
\t\t\t<option value=\"part_time\">Part Time</option>
\t\t\t<option value=\"temporary\">Temporary</option>
\t\t\t<option value=\"freelance\">Freelance</option>
\t\t\t<option value=\"seasonal\">Seasonal</option>
\t\t</select>
\t\t<label for=\"type\">Type</label>
\t\t<span class=\"help-block\">Insert the type of the offer</span>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
\t\t\t<button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
\t\t\t\t<span><strong>";
        // line 33
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)) ? ("UPDATE") : ("SAVE"));
        echo "</strong> NOW</span>
\t\t\t</button>
\t\t</div>
</div>
</form>

<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_job_offer_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "job_offer/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  123 => 33,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}New JobOffer{% endblock %}

{% block body %}
<div style=\"height:100px\"></div>
<h1>{{ job_offer.id ? 'Update' : 'Create new' }} JobOffer</h1>

<form action=\"#\" method=\"post\">
\t<input type=\"hidden\" name=\"_token\" value=\"\">

\t<div class=\"input-field\">
\t\t<input type=\"text\" name=\"title\" value=\"{{ job_offer.getTitle() ? job_offer.getTitle() : '' }}\">
\t\t<label for=\"title\">Title</label>
\t\t<span class=\"help-block\">Insert the title of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<select name=\"type\" id=\"type\">
\t\t\t<option value=\"full_time\">Full Time</option>
\t\t\t<option value=\"part_time\">Part Time</option>
\t\t\t<option value=\"temporary\">Temporary</option>
\t\t\t<option value=\"freelance\">Freelance</option>
\t\t\t<option value=\"seasonal\">Seasonal</option>
\t\t</select>
\t\t<label for=\"type\">Type</label>
\t\t<span class=\"help-block\">Insert the type of the offer</span>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
\t\t\t<button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
\t\t\t\t<span><strong>{{ job_offer.id ? 'UPDATE' : 'SAVE' }}</strong> NOW</span>
\t\t\t</button>
\t\t</div>
</div>
</form>

<a href=\"{{ path('app_job_offer_index') }}\">back to list</a>
{% endblock %}
", "job_offer/new.html.twig", "/home/renaud/devilbox/data/www/2023-04-24_Luxury/templates/job_offer/new.html.twig");
    }
}
