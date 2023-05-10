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

/* candidate/new.html.twig */
class __TwigTemplate_b4f975ee448b5dbf11acfef6c9d868f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidate/new.html.twig", 1);
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

        echo "New Candidate";
        
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
        echo "<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t\t<!-- Page Header-->
\t\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"white-text\">Your profile</h2>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"white-text\">Personnal & Professionnal informations</span>
\t\t\t\t\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">Profile</li>
\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</section>


\t\t\t<!-- Page Content-->
\t\t\t<section class=\"gray-bg\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"score-container\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 34
        echo ((((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 34, $this->source); })()) == 100)) ? ("<img src=\"https://i.imgur.com/s9bPVaK.gif\" style=\"height: 80px; width: 201px;\"> &nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp; Hooray ! Your profile is complete.") : ("Complete your profile at 100% to candidate a job !"));
        // line 35
        echo "
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"c100 p";
        // line 37
        echo twig_escape_filter($this->env, twig_round((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 37, $this->source); })()), 0), "html", null, true);
        echo " small complete \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 38
        echo twig_escape_filter($this->env, twig_round((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 38, $this->source); })()), 1), "html", null, true);
        echo "%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slice\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fill\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</section>

\t\t\t<form method=\"POST\" action=\"#!\" accept-charset=\"UTF-8\" id=\"candidateForm\" role=\"form\" data-parsley-validate=\"\" enctype=\"multipart/form-data\">
\t\t\t\t<input name=\"_token\" type=\"hidden\" value=\"UYfchy67WuTVzhSstPK1RDZEIfgqpKCcLnLyhf8a\">
\t\t\t\t\t<section class=\"section-padding\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Your personal informations</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"gender\" name=\"gender\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Choose an option...</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"male\" ";
        // line 60
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 60, $this->source); })()), "getGender", [], "method", false, false, false, 60) == "male")) ? ("selected") : (""));
        echo ">Male</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"female\" ";
        // line 61
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 61, $this->source); })()), "getGender", [], "method", false, false, false, 61) == "female")) ? ("selected") : (""));
        echo ">Female</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"transgender\" ";
        // line 62
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 62, $this->source); })()), "getGender", [], "method", false, false, false, 62) == "transgender")) ? ("selected") : (""));
        echo ">Transgender</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gender\" class=\"active\">Gender</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix visible-sm\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"first_name\" value=\"";
        // line 70
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 70, $this->source); })()), "getFirstname", [], "method", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 70, $this->source); })()), "getFirstname", [], "method", false, false, false, 70), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"first_name\">First name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last_name\" id=\"last_name\" value=\"";
        // line 76
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 76, $this->source); })()), "getLastname", [], "method", false, false, false, 76)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 76, $this->source); })()), "getLastname", [], "method", false, false, false, 76), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"last_name\">Last name</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input required id=\"current_location\" name=\"current_location\" type=\"text\" value=\"";
        // line 82
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 82, $this->source); })()), "getCurrentLocation", [], "method", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 82, $this->source); })()), "getCurrentLocation", [], "method", false, false, false, 82), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"current_location\">Current location</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"address\" name=\"address\" type=\"text\" value=\"";
        // line 88
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 88, $this->source); })()), "getAddress", [], "method", false, false, false, 88)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 88, $this->source); })()), "getAddress", [], "method", false, false, false, 88), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"address\">Address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t style=\"margin-top: 32px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-lg primary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons\">insert_photo</i> Photo</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"photo\" size=\"20000000\" accept=\".pdf,.jpg,.doc,.docx,.png,.gif\" name=\"photo\" type=\"file\" value=\"";
        // line 99
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 99, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 99, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 99), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"existing-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 103
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 103, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 103)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img/photo/" . twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 103, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 103)) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 103, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 103))), "html", null, true))) : (print ("")));
        echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> profil_picture.jpg</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your ID photo\" readonly>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\" style=\"margin-top: 32px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Are you still available ?</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"yes\" name=\"availability\" value=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 115
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 115, $this->source); })()), "availability", [], "any", false, false, false, 115) === null)) ? ("") : ((((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 115, $this->source); })()), "availability", [], "any", false, false, false, 115) == true)) ? ("checked") : (""))));
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"yes\">Yes</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"no\" name=\"availability\" value=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 121
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 121, $this->source); })()), "availability", [], "any", false, false, false, 121) === null)) ? ("") : ((((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 121, $this->source); })()), "availability", [], "any", false, false, false, 121) == false)) ? ("checked") : (""))));
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"no\">No</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"country\" name=\"country\" type=\"text\" value=\"";
        // line 132
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 132, $this->source); })()), "getCountry", [], "method", false, false, false, 132)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 132, $this->source); })()), "getCountry", [], "method", false, false, false, 132), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"country\">Country</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"nationality\" name=\"nationality\" type=\"text\" value=\"";
        // line 138
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 138, $this->source); })()), "getNationality", [], "method", false, false, false, 138)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 138, $this->source); })()), "getNationality", [], "method", false, false, false, 138), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nationality\">Nationality</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"datepicker\" id=\"birth_date\" name=\"birth_date\" type=\"date\" value=\"";
        // line 144
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 144, $this->source); })()), "getBirthdate", [], "method", false, false, false, 144)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 144, $this->source); })()), "getBirthdate", [], "method", false, false, false, 144), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"birth_date\">Birthdate</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"birth_place\" name=\"birth_place\" type=\"text\" value=\"";
        // line 150
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 150, $this->source); })()), "getBirthLocation", [], "method", false, false, false, 150)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 150, $this->source); })()), "getBirthLocation", [], "method", false, false, false, 150), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"birth_place\">Birthplace</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mt-40\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Your professional profile</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-panel passport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-lg primary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons\">&#xE24D;</i> Passport</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"passport\" size=\"20000000\" accept=\".pdf,.jpg,.doc,.docx,.png,.gif\" name=\"passport\" type=\"file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"existing-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 168
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 168, $this->source); })()), "getPassportFile", [], "method", false, false, false, 168)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img/passport/" . twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 168, $this->source); })()), "getPassportFile", [], "method", false, false, false, 168)) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 168, $this->source); })()), "getPassportFile", [], "method", false, false, false, 168))), "html", null, true))) : (print ("")));
        echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> passeport.jpg</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your passport\" readonly>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-lg primary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons\">&#xE24D;</i> CV</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"cv\" size=\"20000000\" accept=\".pdf,.jpg,.doc,.docx,.png,.gif\" name=\"cv\" type=\"file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"existing-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 182
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 182, $this->source); })()), "getCv", [], "method", false, false, false, 182)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img/cv/" . twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 182, $this->source); })()), "getCv", [], "method", false, false, false, 182)) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 182, $this->source); })()), "getCv", [], "method", false, false, false, 182))), "html", null, true))) : (print ("")));
        echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> CV.pdf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your Curriculum Vitae\" readonly>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\" style=\"margin-top: 5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"job_sector\" name=\"job_sector\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
        // line 196
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 196, $this->source); })()), "JobCategoryId", [], "method", false, false, false, 196)) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 196, $this->source); })()), "JobCategoryId", [], "method", false, false, false, 196), "id", [], "any", false, false, false, 196)) ? ("") : ("selected"))) : (""));
        echo ">Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_categories"]) || array_key_exists("job_categories", $context) ? $context["job_categories"] : (function () { throw new RuntimeError('Variable "job_categories" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 198
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 198, $this->source); })()), "JobCategoryId", [], "method", false, false, false, 198)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 198, $this->source); })()), "JobCategoryId", [], "method", false, false, false, 198), "id", [], "any", false, false, false, 198) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 198))) ? ("selected") : (""))) : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 198), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 198), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"job_sector\" class=\"active\">Interest in job sector</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"experience\" name=\"experience\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
        // line 207
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 207, $this->source); })()), "experience", [], "any", false, false, false, 207)) ? ("") : ("selected"));
        echo ">Choose</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3m\" ";
        // line 208
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 208, $this->source); })()), "experience", [], "any", false, false, false, 208)) ? ((((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 208, $this->source); })()), "experience", [], "any", false, false, false, 208) == "3m")) ? ("selected") : (""))) : (""));
        echo ">0 - 6 month</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6m\" ";
        // line 209
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 209, $this->source); })()), "experience", [], "any", false, false, false, 209)) ? ((((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 209, $this->source); })()), "experience", [], "any", false, false, false, 209) == "6m")) ? ("selected") : (""))) : (""));
        echo ">6 month - 1 year</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1y\" ";
        // line 210
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 210, $this->source); })()), "experience", [], "any", false, false, false, 210)) ? ((((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 210, $this->source); })()), "experience", [], "any", false, false, false, 210) == "1y")) ? ("selected") : (""))) : (""));
        echo ">1 - 2 years</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2y\" ";
        // line 211
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 211, $this->source); })()), "experience", [], "any", false, false, false, 211)) ? ((((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 211, $this->source); })()), "experience", [], "any", false, false, false, 211) == "2y")) ? ("selected") : (""))) : (""));
        echo ">2+ years</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5y\" ";
        // line 212
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 212, $this->source); })()), "experience", [], "any", false, false, false, 212)) ? ((((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 212, $this->source); })()), "experience", [], "any", false, false, false, 212) == "5y")) ? ("selected") : (""))) : (""));
        echo ">5+ years</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10y\" ";
        // line 213
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 213, $this->source); })()), "experience", [], "any", false, false, false, 213)) ? ((((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 213, $this->source); })()), "experience", [], "any", false, false, false, 213) == "10y")) ? ("selected") : (""))) : (""));
        echo ">10+ years</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"experience\" class=\"active\">Experience</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"materialize-textarea\" id=\"description\" name=\"description\" cols=\"50\" rows=\"10\" value=\"";
        // line 221
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 221, $this->source); })()), "getShortDescription", [], "method", false, false, false, 221)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 221, $this->source); })()), "getShortDescription", [], "method", false, false, false, 221), "html", null, true))) : (print ("")));
        echo "\">";
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 221, $this->source); })()), "getShortDescription", [], "method", false, false, false, 221)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 221, $this->source); })()), "getShortDescription", [], "method", false, false, false, 221), "html", null, true))) : (print ("")));
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests ). You can also paste any link you want.</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t\t<section class=\"section-padding gray-bg\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Your K-Yachting account</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input=\"required\" id=\"email\" name=\"email\" type=\"email\" value=\"";
        // line 235
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 235, $this->source); })()), "user", [], "any", false, false, false, 235), "email", [], "method", false, false, false, 235)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 235, $this->source); })()), "user", [], "any", false, false, false, 235), "email", [], "method", false, false, false, 235), "html", null, true))) : (print ("")));
        echo "\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"password\" name=\"password\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"password\">Change your password here</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"password_repeat\" name=\"password_repeat\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"password_repeat\">Confirm your new password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 mt-40 mb-80 delete-account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" onclick=\"return prompt('Please Type \\'Delete my account\\' to delete your K-Yachting Services account:') == 'Delete my account'\" class=\"btn btn-block btn-lg waves-effect waves-light\"><i class=\"material-icons\">&#xE872;</i>Delete my account</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-block btn-lg border primary waves-effect waves-light\"><i class=\"fa fa-long-arrow-left\"></i> Back home</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><strong>UPDATE</strong> NOW</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t</form>

\t</div>

</div>



";
        // line 278
        $this->displayBlock('js', $context, $blocks);
        // line 286
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 278
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 279
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
        return "candidate/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 279,  485 => 278,  474 => 286,  472 => 278,  426 => 235,  407 => 221,  396 => 213,  392 => 212,  388 => 211,  384 => 210,  380 => 209,  376 => 208,  372 => 207,  363 => 200,  350 => 198,  346 => 197,  342 => 196,  325 => 182,  308 => 168,  287 => 150,  278 => 144,  269 => 138,  260 => 132,  246 => 121,  237 => 115,  222 => 103,  215 => 99,  201 => 88,  192 => 82,  183 => 76,  174 => 70,  163 => 62,  159 => 61,  155 => 60,  130 => 38,  126 => 37,  122 => 35,  119 => 34,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Candidate{% endblock %}

{% block body %}
<div class=\"base\">

\t<!-- Page -->
\t<div class=\"page\">

\t\t\t<!-- Page Header-->
\t\t\t<section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"white-text\">Your profile</h2>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"white-text\">Personnal & Professionnal informations</span>
\t\t\t\t\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">Profile</li>
\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</section>


\t\t\t<!-- Page Content-->
\t\t\t<section class=\"gray-bg\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"score-container\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ percentage == 100 ? '<img src=\"https://i.imgur.com/s9bPVaK.gif\" style=\"height: 80px; width: 201px;\"> &nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp; Hooray ! Your profile is complete.' : 'Complete your profile at 100% to candidate a job !' }}
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"c100 p{{percentage|round(0)}} small complete \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{percentage|round(1)}}%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slice\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fill\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</section>

\t\t\t<form method=\"POST\" action=\"#!\" accept-charset=\"UTF-8\" id=\"candidateForm\" role=\"form\" data-parsley-validate=\"\" enctype=\"multipart/form-data\">
\t\t\t\t<input name=\"_token\" type=\"hidden\" value=\"UYfchy67WuTVzhSstPK1RDZEIfgqpKCcLnLyhf8a\">
\t\t\t\t\t<section class=\"section-padding\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Your personal informations</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"gender\" name=\"gender\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Choose an option...</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"male\" {{ candidate.getGender() == \"male\" ? 'selected' : '' }}>Male</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"female\" {{ candidate.getGender() == \"female\" ? 'selected' : '' }}>Female</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"transgender\" {{ candidate.getGender() == \"transgender\" ? 'selected' : '' }}>Transgender</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gender\" class=\"active\">Gender</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix visible-sm\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"first_name\" value=\"{{ candidate.getFirstname() ? candidate.getFirstname() : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"first_name\">First name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last_name\" id=\"last_name\" value=\"{{ candidate.getLastname() ? candidate.getLastname() : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"last_name\">Last name</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input required id=\"current_location\" name=\"current_location\" type=\"text\" value=\"{{ candidate.getCurrentLocation() ? candidate.getCurrentLocation() : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"current_location\">Current location</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"address\" name=\"address\" type=\"text\" value=\"{{ candidate.getAddress() ? candidate.getAddress() : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"address\">Address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t style=\"margin-top: 32px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-lg primary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons\">insert_photo</i> Photo</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"photo\" size=\"20000000\" accept=\".pdf,.jpg,.doc,.docx,.png,.gif\" name=\"photo\" type=\"file\" value=\"{{ candidate.getProfilePicture() ? candidate.getProfilePicture() : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"existing-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ candidate.getProfilePicture() ? asset('assets/img/photo/' ~ candidate.getProfilePicture() ~ '/' ~ candidate.getProfilePicture()) : '' }}\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> profil_picture.jpg</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your ID photo\" readonly>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\" style=\"margin-top: 32px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Are you still available ?</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"yes\" name=\"availability\" value=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ candidate.availability is same as(null) ? '' : candidate.availability == true ? 'checked' : '' }}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"yes\">Yes</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"no\" name=\"availability\" value=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ candidate.availability is same as(null) ? '' : candidate.availability == false ? 'checked' : '' }}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"no\">No</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"country\" name=\"country\" type=\"text\" value=\"{{ candidate.getCountry() ? candidate.getCountry() : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"country\">Country</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"nationality\" name=\"nationality\" type=\"text\" value=\"{{ candidate.getNationality() ? candidate.getNationality() : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"nationality\">Nationality</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"datepicker\" id=\"birth_date\" name=\"birth_date\" type=\"date\" value=\"{{ candidate.getBirthdate() ? candidate.getBirthdate()|date(\"Y-m-d\") : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"birth_date\">Birthdate</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"birth_place\" name=\"birth_place\" type=\"text\" value=\"{{ candidate.getBirthLocation() ? candidate.getBirthLocation() : '' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"birth_place\">Birthplace</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mt-40\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Your professional profile</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-panel passport\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-lg primary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons\">&#xE24D;</i> Passport</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"passport\" size=\"20000000\" accept=\".pdf,.jpg,.doc,.docx,.png,.gif\" name=\"passport\" type=\"file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"existing-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ candidate.getPassportFile() ? asset('assets/img/passport/' ~ candidate.getPassportFile() ~ '/' ~ candidate.getPassportFile()) : '' }}\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> passeport.jpg</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your passport\" readonly>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-lg primary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons\">&#xE24D;</i> CV</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"cv\" size=\"20000000\" accept=\".pdf,.jpg,.doc,.docx,.png,.gif\" name=\"cv\" type=\"file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"existing-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ candidate.getCv() ? asset('assets/img/cv/' ~ candidate.getCv() ~ '/' ~ candidate.getCv()) : '' }}\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> CV.pdf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your Curriculum Vitae\" readonly>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\" style=\"margin-top: 5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"job_sector\" name=\"job_sector\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" {{ candidate.JobCategoryId() ? candidate.JobCategoryId().id ? '' : 'selected' : ''}}>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for category in job_categories %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option {{ candidate.JobCategoryId() ? candidate.JobCategoryId().id == category.id ? 'selected' : '' : ''}} value=\"{{ category.id }}\">{{category.name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"job_sector\" class=\"active\">Interest in job sector</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"experience\" name=\"experience\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" {{ candidate.experience ? '' : 'selected'}}>Choose</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3m\" {{ candidate.experience ? candidate.experience == '3m' ? 'selected' : '' : ''}}>0 - 6 month</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6m\" {{ candidate.experience ? candidate.experience == '6m' ? 'selected' : '' : ''}}>6 month - 1 year</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1y\" {{ candidate.experience ? candidate.experience == '1y' ? 'selected' : '' : ''}}>1 - 2 years</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2y\" {{ candidate.experience ? candidate.experience == '2y' ? 'selected' : '' : ''}}>2+ years</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5y\" {{ candidate.experience ? candidate.experience == '5y' ? 'selected' : '' : ''}}>5+ years</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10y\" {{ candidate.experience ? candidate.experience == '10y' ? 'selected' : '' : ''}}>10+ years</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"experience\" class=\"active\">Experience</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"materialize-textarea\" id=\"description\" name=\"description\" cols=\"50\" rows=\"10\" value=\"{{ candidate.getShortDescription() ? candidate.getShortDescription() : '' }}\">{{ candidate.getShortDescription() ? candidate.getShortDescription() : '' }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"description\">Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests ). You can also paste any link you want.</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t\t<section class=\"section-padding gray-bg\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-extrabold\">Your K-Yachting account</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input=\"required\" id=\"email\" name=\"email\" type=\"email\" value=\"{{ candidate.user.email() ? candidate.user.email() : '' }}\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"password\" name=\"password\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"password\">Change your password here</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"password_repeat\" name=\"password_repeat\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"password_repeat\">Confirm your new password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 mt-40 mb-80 delete-account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" onclick=\"return prompt('Please Type \\'Delete my account\\' to delete your K-Yachting Services account:') == 'Delete my account'\" class=\"btn btn-block btn-lg waves-effect waves-light\"><i class=\"material-icons\">&#xE872;</i>Delete my account</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-block btn-lg border primary waves-effect waves-light\"><i class=\"fa fa-long-arrow-left\"></i> Back home</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><strong>UPDATE</strong> NOW</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t</form>

\t</div>

</div>



{% block js %}
<script type=\"text/javascript\">

\tonAppReady(function () {
\t\t\$('.preload').remove();
\t});
</script>
{% endblock %}

{% endblock %}", "candidate/new.html.twig", "/shared/httpd/2023-04-24_Luxury/templates/candidate/new.html.twig");
    }
}
