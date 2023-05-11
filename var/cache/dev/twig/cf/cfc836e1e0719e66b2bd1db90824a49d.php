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

/* admin/applications/index.html.twig */
class __TwigTemplate_f6ac690b527eace5a1e79ef9ad367982 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/applications/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/applications/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/applications/index.html.twig", 1);
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

        echo "Applications index";
        
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
    <h1>Applications index</h1>

    <table class=\"table\">
        <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Candidate Name</th>
\t\t\t\t\t\t<th>Candidate Email</th>
\t\t\t\t\t\t<th>Offer Title</th>
\t\t\t\t\t\t<th>Society Name</th>
\t\t\t\t\t\t<th>Contact Name</th>
\t\t\t\t\t\t<th>Contact Email</th>
\t\t\t\t\t\t<th>Application Date</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "candidateId", [], "any", false, false, false, 24), "firstname", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "candidateId", [], "any", false, false, false, 24), "lastname", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a href=\"mailto:";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "candidateId", [], "any", false, false, false, 25), "user", [], "any", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "candidateId", [], "any", false, false, false, 25), "user", [], "any", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "jobOffer", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "jobOffer", [], "any", false, false, false, 27), "client", [], "any", false, false, false, 27), "societyName", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "jobOffer", [], "any", false, false, false, 28), "client", [], "any", false, false, false, 28), "contactName", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["application"], "jobOffer", [], "any", false, false, false, 29), "client", [], "any", false, false, false, 29), "contactEmail", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["application"], "createdAt", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 34
            echo "\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_job_application_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 35))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn\">Delete</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t</tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/applications/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 45,  163 => 41,  152 => 35,  147 => 34,  142 => 30,  138 => 29,  134 => 28,  130 => 27,  126 => 26,  120 => 25,  114 => 24,  111 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Applications index{% endblock %}

{% block body %}
<div style=\"height:100px\"></div>
    <h1>Applications index</h1>

    <table class=\"table\">
        <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Candidate Name</th>
\t\t\t\t\t\t<th>Candidate Email</th>
\t\t\t\t\t\t<th>Offer Title</th>
\t\t\t\t\t\t<th>Society Name</th>
\t\t\t\t\t\t<th>Contact Name</th>
\t\t\t\t\t\t<th>Contact Email</th>
\t\t\t\t\t\t<th>Application Date</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for application in applications %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ application.candidateId.firstname }} {{ application.candidateId.lastname }}</td>
\t\t\t\t\t\t<td><a href=\"mailto:{{ application.candidateId.user.email }}\" target=\"_blank\">{{ application.candidateId.user.email }}</a></td>
\t\t\t\t\t\t<td>{{ application.jobOffer.title }}</td>
\t\t\t\t\t\t<td>{{ application.jobOffer.client.societyName }}</td>
\t\t\t\t\t\t<td>{{ application.jobOffer.client.contactName }}</td>
\t\t\t\t\t\t<td>{{ application.jobOffer.client.contactEmail }}</td>
\t\t\t\t\t\t<td>{{ application.createdAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{# <a href=\"{{ path('app_job_offer_show', {'id': job.id}) }}\">show</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_job_offer_edit', {'id': job.id}) }}\">edit</a> #}
\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_job_application_delete', {'id': application.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ application.id) }}\">
\t\t\t\t\t\t\t\t<button class=\"btn\">Delete</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
    </table>
{% endblock %}", "admin/applications/index.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/admin/applications/index.html.twig");
    }
}
