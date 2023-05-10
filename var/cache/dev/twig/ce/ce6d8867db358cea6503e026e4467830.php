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

/* job_offer/edit.html.twig */
class __TwigTemplate_2397f3fd37c69df218d2227503ca8b74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "job_offer/edit.html.twig", 1);
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

\t<div class=\"\">
        <label for=\"type\">Type</label>
\t\t<select name=\"type\" id=\"type\">
\t\t\t<option value=\"\" ";
        // line 21
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21)) ? ("") : ("selected"));
        echo ">Choose an option</option>
\t\t\t<option value=\"full_time\" ";
        // line 22
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 22, $this->source); })()), "type", [], "any", false, false, false, 22) == "full_time")) ? ("selected") : (""));
        echo ">Full Time</option>
\t\t\t<option value=\"part_time\" ";
        // line 23
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23) == "part_time")) ? ("selected") : (""));
        echo ">Part Time</option>
\t\t\t<option value=\"temporary\" ";
        // line 24
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24) == "temporary")) ? ("selected") : (""));
        echo ">Temporary</option>
\t\t\t<option value=\"freelance\" ";
        // line 25
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25) == "freelance")) ? ("selected") : (""));
        echo ">Freelance</option>
\t\t\t<option value=\"seasonal\" ";
        // line 26
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26) == "seasonal")) ? ("selected") : (""));
        echo ">Seasonal</option>
\t\t</select>
\t</div>

\t<div class=\"\">
        <label for=\"client_id\">Client</label>
\t\t<select name=\"client_id\" id=\"client_id\">
\t\t\t<option value=\"\" ";
        // line 33
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 33, $this->source); })()), "client", [], "method", false, false, false, 33)) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 33, $this->source); })()), "client", [], "method", false, false, false, 33), "id", [], "any", false, false, false, 33)) ? ("") : ("selected"))) : (""));
        echo ">Choose an option</option>
\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 35
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 35, $this->source); })()), "client", [], "method", false, false, false, 35)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 35, $this->source); })()), "client", [], "method", false, false, false, 35), "id", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 35))) ? ("selected") : (""))) : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getSocietyName", [], "method", false, false, false, 35), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t</select>
\t</div>

\t<div class=\"\">
        <label for=\"job_category_id\">Job Category</label>
\t\t<select name=\"job_category_id\" id=\"job_category_id\">
\t\t\t<option value=\"\" ";
        // line 43
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 43, $this->source); })()), "getJobCategory", [], "method", false, false, false, 43)) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 43, $this->source); })()), "getJobCategory", [], "method", false, false, false, 43), "id", [], "any", false, false, false, 43)) ? ("") : ("selected"))) : (""));
        echo ">Choose an option</option>
\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_categories"]) || array_key_exists("job_categories", $context) ? $context["job_categories"] : (function () { throw new RuntimeError('Variable "job_categories" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 45, $this->source); })()), "getJobCategory", [], "method", false, false, false, 45)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 45, $this->source); })()), "getJobCategory", [], "method", false, false, false, 45), "id", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45))) ? ("selected") : (""))) : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "method", false, false, false, 45), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t</select>
\t</div>

\t<div class=\"input-field\">
\t\t<textarea class=\"materialize-textarea\" name=\"description\" id=\"description\" cols=\"50\" rows=\"10\" value=\"";
        // line 51
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 51, $this->source); })()), "getDescription", [], "method", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 51, $this->source); })()), "getDescription", [], "method", false, false, false, 51), "html", null, true))) : (print ("")));
        echo "\">";
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 51, $this->source); })()), "getDescription", [], "method", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 51, $this->source); })()), "getDescription", [], "method", false, false, false, 51), "html", null, true))) : (print ("")));
        echo "</textarea>
\t\t<label for=\"description\">Description</label>
\t\t<span class=\"help-block\">Description of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<input type=\"text\" name=\"location\" value=\"";
        // line 57
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 57, $this->source); })()), "getLocation", [], "method", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 57, $this->source); })()), "getLocation", [], "method", false, false, false, 57), "html", null, true))) : (print ("")));
        echo "\">
\t\t<label for=\"location\">Location</label>
\t\t<span class=\"help-block\">Insert the location of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<input type=\"number\" name=\"salary\" value=\"";
        // line 63
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 63, $this->source); })()), "getSalary", [], "method", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 63, $this->source); })()), "getSalary", [], "method", false, false, false, 63), "html", null, true))) : (print ("")));
        echo "\">
\t\t<label for=\"salary\">Salary</label>
\t\t<span class=\"help-block\">Insert the salary of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<input type=\"date\" name=\"closing_date\" value=\"";
        // line 69
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 69, $this->source); })()), "getClosingDate", [], "method", false, false, false, 69)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 69, $this->source); })()), "getClosingDate", [], "method", false, false, false, 69), "format", [0 => "Y-m-d"], "method", false, false, false, 69), "html", null, true))) : (print ("")));
        echo "\">
\t\t<label for=\"closing_date\">Closing Date</label>
\t\t<span class=\"help-block\">Insert the closing date of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<textarea class=\"materialize-textarea\" name=\"notes\" id=\"notes\" cols=\"50\" rows=\"10\" value=\"";
        // line 75
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 75, $this->source); })()), "getNotes", [], "method", false, false, false, 75)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 75, $this->source); })()), "getNotes", [], "method", false, false, false, 75), "html", null, true))) : (print ("")));
        echo "\">";
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 75, $this->source); })()), "getNotes", [], "method", false, false, false, 75)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 75, $this->source); })()), "getNotes", [], "method", false, false, false, 75), "html", null, true))) : (print ("")));
        echo "</textarea>
\t\t<label for=\"notes\">Notes</label>
\t\t<span class=\"help-block\">Notes about the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<legend>Is the offer still active ?</legend>

\t\t<div>
\t\t\t<input type=\"radio\" id=\"1\" name=\"activity\" value=\"1\"
\t\t\t\t\t\t checked>
\t\t\t<label for=\"1\">Yes</label>
\t\t</div>

\t\t<div>
\t\t\t<input type=\"radio\" id=\"0\" name=\"activity\" value=\"0\">
\t\t\t<label for=\"0\">No</label>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
\t\t\t<button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
\t\t\t\t<span><strong>";
        // line 98
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)) ? ("UPDATE") : ("SAVE"));
        echo "</strong> NOW</span>
\t\t\t</button>
\t\t</div>
</div>
</form>

<a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_job_offer_index");
        echo "\">back to list</a>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
      });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "job_offer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 104,  263 => 98,  235 => 75,  226 => 69,  217 => 63,  208 => 57,  197 => 51,  191 => 47,  178 => 45,  174 => 44,  170 => 43,  162 => 37,  149 => 35,  145 => 34,  141 => 33,  131 => 26,  127 => 25,  123 => 24,  119 => 23,  115 => 22,  111 => 21,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

\t<div class=\"\">
        <label for=\"type\">Type</label>
\t\t<select name=\"type\" id=\"type\">
\t\t\t<option value=\"\" {{ job_offer.type ? '' : 'selected' }}>Choose an option</option>
\t\t\t<option value=\"full_time\" {{ job_offer.type == \"full_time\" ? 'selected' : '' }}>Full Time</option>
\t\t\t<option value=\"part_time\" {{ job_offer.type == \"part_time\" ? 'selected' : '' }}>Part Time</option>
\t\t\t<option value=\"temporary\" {{ job_offer.type == \"temporary\" ? 'selected' : '' }}>Temporary</option>
\t\t\t<option value=\"freelance\" {{ job_offer.type == \"freelance\" ? 'selected' : '' }}>Freelance</option>
\t\t\t<option value=\"seasonal\" {{ job_offer.type == \"seasonal\" ? 'selected' : '' }}>Seasonal</option>
\t\t</select>
\t</div>

\t<div class=\"\">
        <label for=\"client_id\">Client</label>
\t\t<select name=\"client_id\" id=\"client_id\">
\t\t\t<option value=\"\" {{ job_offer.client() ? job_offer.client().id ? '' : 'selected' : ''}}>Choose an option</option>
\t\t\t{% for client in clients %}
\t\t\t<option value=\"{{client.id}}\" {{ job_offer.client() ? job_offer.client().id == client.id ? 'selected' : '' : ''}}>{{ client.getSocietyName() }}</option>
            {% endfor %}
\t\t</select>
\t</div>

\t<div class=\"\">
        <label for=\"job_category_id\">Job Category</label>
\t\t<select name=\"job_category_id\" id=\"job_category_id\">
\t\t\t<option value=\"\" {{ job_offer.getJobCategory() ? job_offer.getJobCategory().id ? '' : 'selected' : ''}}>Choose an option</option>
\t\t\t{% for category in job_categories %}
\t\t\t<option value=\"{{category.id}}\" {{ job_offer.getJobCategory() ? job_offer.getJobCategory().id == category.id ? 'selected' : '' : ''}}>{{ category.getName() }}</option>
            {% endfor %}
\t\t</select>
\t</div>

\t<div class=\"input-field\">
\t\t<textarea class=\"materialize-textarea\" name=\"description\" id=\"description\" cols=\"50\" rows=\"10\" value=\"{{ job_offer.getDescription() ? job_offer.getDescription() : '' }}\">{{ job_offer.getDescription() ? job_offer.getDescription() : '' }}</textarea>
\t\t<label for=\"description\">Description</label>
\t\t<span class=\"help-block\">Description of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<input type=\"text\" name=\"location\" value=\"{{ job_offer.getLocation() ? job_offer.getLocation() : '' }}\">
\t\t<label for=\"location\">Location</label>
\t\t<span class=\"help-block\">Insert the location of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<input type=\"number\" name=\"salary\" value=\"{{ job_offer.getSalary() ? job_offer.getSalary() : '' }}\">
\t\t<label for=\"salary\">Salary</label>
\t\t<span class=\"help-block\">Insert the salary of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<input type=\"date\" name=\"closing_date\" value=\"{{ job_offer.getClosingDate() ? job_offer.getClosingDate().format('Y-m-d') : '' }}\">
\t\t<label for=\"closing_date\">Closing Date</label>
\t\t<span class=\"help-block\">Insert the closing date of the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<textarea class=\"materialize-textarea\" name=\"notes\" id=\"notes\" cols=\"50\" rows=\"10\" value=\"{{ job_offer.getNotes() ? job_offer.getNotes() : '' }}\">{{ job_offer.getNotes() ? job_offer.getNotes() : '' }}</textarea>
\t\t<label for=\"notes\">Notes</label>
\t\t<span class=\"help-block\">Notes about the offer</span>
\t</div>

\t<div class=\"input-field\">
\t\t<legend>Is the offer still active ?</legend>

\t\t<div>
\t\t\t<input type=\"radio\" id=\"1\" name=\"activity\" value=\"1\"
\t\t\t\t\t\t checked>
\t\t\t<label for=\"1\">Yes</label>
\t\t</div>

\t\t<div>
\t\t\t<input type=\"radio\" id=\"0\" name=\"activity\" value=\"0\">
\t\t\t<label for=\"0\">No</label>
\t\t</div>
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

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
      });
</script>
{% endblock %}
", "job_offer/edit.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/job_offer/edit.html.twig");
    }
}
