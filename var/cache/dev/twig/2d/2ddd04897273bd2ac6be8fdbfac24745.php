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

/* admin/index.html.twig */
class __TwigTemplate_9e95577706a40cbdc5a636e525b8eda2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/index.html.twig", 1);
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

        echo "Admin index";
        
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
<h1>Admin index</h1>

<div id=\"lastClients\" style=\"margin-top: 50px;\">
\t<h2>Lasts 5 Clients of ";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "</h2>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Society Name</th>
\t\t\t\t<th>Contact Name</th>
\t\t\t\t<th>Contact Email</th>
\t\t\t\t<th>Contact Phone</th>
\t\t\t\t<th>Creation Date</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 23, $this->source); })()), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 24
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "societyName", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "contactName", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"mailto:";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "contactEmail", [], "any", false, false, false, 27), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "contactEmail", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></td>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "contactNumber", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "creationDate", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"2\">no records found</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\"><button>See all clients</button></a>
</div>

<div id=\"lastCandidates\" style=\"margin-top: 50px;\">
\t<h2>Lasts 5 Candidates of ";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["candidates"]) || array_key_exists("candidates", $context) ? $context["candidates"] : (function () { throw new RuntimeError('Variable "candidates" does not exist.', 43, $this->source); })())), "html", null, true);
        echo "</h2>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>City</th>
\t\t\t\t<th>Job Category</th>
\t\t\t\t<th>Availability</th>
\t\t\t\t<th>Inscription Date</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["candidates"]) || array_key_exists("candidates", $context) ? $context["candidates"] : (function () { throw new RuntimeError('Variable "candidates" does not exist.', 57, $this->source); })()), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 58
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 59
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "lastname", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "lastname", [], "any", false, false, false, 59), "html", null, true))) : (print ("")));
            echo " ";
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "firstname", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "firstname", [], "any", false, false, false, 59), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t<td><a href=\"mailto:";
            // line 60
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "user", [], "any", false, false, false, 60), "email", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "user", [], "any", false, false, false, 60), "email", [], "any", false, false, false, 60), "html", null, true))) : (print ("")));
            echo "\" target=\"_blank\">";
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "user", [], "any", false, false, false, 60), "email", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "user", [], "any", false, false, false, 60), "email", [], "any", false, false, false, 60), "html", null, true))) : (print ("")));
            echo "</a></td>
\t\t\t\t<td>";
            // line 61
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "currentLocation", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "currentLocation", [], "any", false, false, false, 61), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t<td>";
            // line 62
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "jobCategoryId", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "jobCategoryId", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t<td>";
            // line 63
            echo ((twig_get_attribute($this->env, $this->source, $context["candidate"], "availability", [], "any", false, false, false, 63)) ? ("yes") : ("no"));
            echo "</td>
\t\t\t\t<td>";
            // line 64
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "createdAt", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "createdAt", [], "any", false, false, false, 64), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"2\">no records found</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidate_index");
        echo "\"><button>See all Candidates</button></a>
</div>

<div id=\"lastOffers\" style=\"margin-top: 50px;\">
\t<h2>Lasts 5 Offers of ";
        // line 78
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 78, $this->source); })())), "html", null, true);
        echo "</h2>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Society</th>
\t\t\t\t<th>Contact Name</th>
\t\t\t\t<th>Contact Email</th>
\t\t\t\t<th>Contact Phone</th>
\t\t\t\t<th>Status</th>
\t\t\t\t<th>Creation Date</th>
\t\t\t\t<th>Closing Date</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 94, $this->source); })()), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 95
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "client", [], "any", false, false, false, 97), "societyName", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "client", [], "any", false, false, false, 98), "contactName", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"mailto:";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "client", [], "any", false, false, false, 99), "contactEmail", [], "any", false, false, false, 99), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "client", [], "any", false, false, false, 99), "contactEmail", [], "any", false, false, false, 99), "html", null, true);
            echo "</a></td>
\t\t\t\t<td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "client", [], "any", false, false, false, 100), "contactNumber", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 101
            echo ((twig_get_attribute($this->env, $this->source, $context["job"], "activity", [], "any", false, false, false, 101)) ? ("Active") : ("Inactive"));
            echo "</td>
\t\t\t\t<td>";
            // line 102
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "creationDate", [], "any", false, false, false, 102), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "closingDate", [], "any", false, false, false, 103), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 106
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"2\">no records found</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_job_offer_index");
        echo "\"><button>See all Offers</button></a>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 113,  317 => 110,  308 => 106,  300 => 103,  296 => 102,  292 => 101,  288 => 100,  282 => 99,  278 => 98,  274 => 97,  270 => 96,  267 => 95,  262 => 94,  243 => 78,  236 => 74,  231 => 71,  222 => 67,  214 => 64,  210 => 63,  206 => 62,  202 => 61,  196 => 60,  190 => 59,  187 => 58,  182 => 57,  165 => 43,  158 => 39,  153 => 36,  144 => 32,  136 => 29,  132 => 28,  126 => 27,  122 => 26,  118 => 25,  115 => 24,  110 => 23,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Admin index{% endblock %}

{% block body %}
<div style=\"height:100px\"></div>
<h1>Admin index</h1>

<div id=\"lastClients\" style=\"margin-top: 50px;\">
\t<h2>Lasts 5 Clients of {{ clients|length }}</h2>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Society Name</th>
\t\t\t\t<th>Contact Name</th>
\t\t\t\t<th>Contact Email</th>
\t\t\t\t<th>Contact Phone</th>
\t\t\t\t<th>Creation Date</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for client in clients|slice(0,5) %}
\t\t\t<tr>
\t\t\t\t<td>{{ client.societyName }}</td>
\t\t\t\t<td>{{ client.contactName }}</td>
\t\t\t\t<td><a href=\"mailto:{{ client.contactEmail }}\" target=\"_blank\">{{ client.contactEmail }}</a></td>
\t\t\t\t<td>{{ client.contactNumber }}</td>
\t\t\t\t<td>{{ client.creationDate|date('Y-m-d') }}</td>
\t\t\t</tr>
\t\t\t{% else %}
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\">no records found</td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{path('app_client_index')}}\"><button>See all clients</button></a>
</div>

<div id=\"lastCandidates\" style=\"margin-top: 50px;\">
\t<h2>Lasts 5 Candidates of {{ candidates|length }}</h2>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>City</th>
\t\t\t\t<th>Job Category</th>
\t\t\t\t<th>Availability</th>
\t\t\t\t<th>Inscription Date</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for candidate in candidates|slice(0,5) %}
\t\t\t<tr>
\t\t\t\t<td>{{ candidate.lastname ? candidate.lastname : '' }} {{ candidate.firstname ? candidate.firstname : '' }}</td>
\t\t\t\t<td><a href=\"mailto:{{ candidate.user.email ? candidate.user.email : '' }}\" target=\"_blank\">{{ candidate.user.email ? candidate.user.email : '' }}</a></td>
\t\t\t\t<td>{{ candidate.currentLocation ? candidate.currentLocation : '' }}</td>
\t\t\t\t<td>{{ candidate.jobCategoryId ? candidate.jobCategoryId.name : '' }}</td>
\t\t\t\t<td>{{ candidate.availability ? 'yes' : 'no' }}</td>
\t\t\t\t<td>{{ candidate.createdAt ? candidate.createdAt|date('Y-m-d') : '' }}</td>
\t\t\t</tr>
\t\t\t{% else %}
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\">no records found</td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{path('app_candidate_index')}}\"><button>See all Candidates</button></a>
</div>

<div id=\"lastOffers\" style=\"margin-top: 50px;\">
\t<h2>Lasts 5 Offers of {{ jobs|length }}</h2>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Society</th>
\t\t\t\t<th>Contact Name</th>
\t\t\t\t<th>Contact Email</th>
\t\t\t\t<th>Contact Phone</th>
\t\t\t\t<th>Status</th>
\t\t\t\t<th>Creation Date</th>
\t\t\t\t<th>Closing Date</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for job in jobs|slice(0,5) %}
\t\t\t<tr>
\t\t\t\t<td>{{ job.title }}</td>
\t\t\t\t<td>{{ job.client.societyName }}</td>
\t\t\t\t<td>{{ job.client.contactName }}</td>
\t\t\t\t<td><a href=\"mailto:{{ job.client.contactEmail }}\" target=\"_blank\">{{ job.client.contactEmail }}</a></td>
\t\t\t\t<td>{{ job.client.contactNumber }}</td>
\t\t\t\t<td>{{ job.activity ? 'Active' : 'Inactive' }}</td>
\t\t\t\t<td>{{ job.creationDate|date('Y-m-d') }}</td>
\t\t\t\t<td>{{ job.closingDate|date('Y-m-d') }}</td>
\t\t\t</tr>
\t\t\t{% else %}
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\">no records found</td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{path('app_admin_job_offer_index')}}\"><button>See all Offers</button></a>
</div>

{% endblock %}", "admin/index.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/admin/index.html.twig");
    }
}
