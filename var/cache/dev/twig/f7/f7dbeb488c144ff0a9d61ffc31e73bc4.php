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

/* baseAdmin.html.twig */
class __TwigTemplate_b2311b4153dc2f568ca33cbe9c68d00f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en\" style=\"height: unset;font-size:16px;\"> <!--<![endif]-->

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>Luxury Services recruitment & services</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"author\" content=\"idmkr.io\">
\t<meta name=\"base_url\" content=\"http://kys.idmkr.io\">
\t<meta name=\"csrf-token\" content=\"utSEZUUxgneXBCQY5My9Djz8rVhqLiG7PLq3ThDA\">
\t<!--  favicon -->
\t<link rel=\"shortcut icon\" href=\"assets/img/luxury-services-logo.png\">

\t<script>
\t\twindow.isMobile = (function () {
\t\t\tvar check = false;
\t\t\t(function (a) { if (/(android|bb\\d+|meego).+mobile|avantgo|bada\\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\\-|your|zeto|zte\\-/i.test(a.substr(0, 4))) check = true; })(navigator.userAgent || navigator.vendor || window.opera);
\t\t\treturn check;
\t\t})();
\t\t\$(document).ready(function() {
    \$('.js-example-basic-single').select2();
});
\t</script>
\t<script>
\t\tfunction onAppReady(handler) {
\t\t\t\$(handler);
\t\t}
\t</script>




\t
\t<link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.materialize.a1042cadda540464eafd9350bb40433a_1547807689.css\"
\trel=\"stylesheet\">
\t<link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap.457005dcd8ab887d5f47791eaa1e3a26_1547807834.css\"
\trel=\"stylesheet\">
\t<link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.style.117d2669c8fdd6628dab9a45764bc512_1549289703.css\"
\trel=\"stylesheet\">
\t<link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.custom.6b4d49f73674949c14f1216c6eddcb85_1547807836.css\"
\trel=\"stylesheet\">
\t<link
\thref=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-settings.77c694ef3fb511bf87c5b705b555fc2a_1547807825.css\"
\trel=\"stylesheet\">
\t<link
\thref=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-layers.4f1e49eeb6f7351bbdc1fb6e35adb6ed_1547807826.css\"
\trel=\"stylesheet\">
\t<link
\thref=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-navigation.2f4deeb1fe1d3f7c9ab31d29a1133835_1547807825.css\"
\trel=\"stylesheet\">
\t
\t<link href=\"/assets/css/main.css\" rel=\"stylesheet\">
\t


\t";
        // line 67
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 70
        echo "

\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.modernizr.1c9d48a1e28b608c156f4de214d48a4f_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery.5b69aaaa5f04c52e66580a2dc32d1d69_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.animated-headline.88cb936096e0f8ab70515bc801d8342e_1547807687.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap-tabcollapse.34017c51086f0e87aa46196565972d00_1547807688.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.coundown-timer.c8cf6063f2de9fb102572c2c5cbb35d9_1547807687.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.equalheight.317d8490808d596c8a0f1758d495856c_1547807686.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.menuzord.1b3c610e36a938dda7612403eff6e3cf_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.smooth-menu.561efb1e63c25f6459bb7d6b910fd0e0_1547807688.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.imagesloaded.cd624dbd9f9cedc0517e2a007e5a9e99_1547807687.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.owl-carousel.9a2fb1bcafcaeab824262566db2bddef_1547807835.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.wow.8dcaf0f70a4ccabe591dd6faf3c07bdc_1547807687.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.scripts.b4ebfafba9aad4e481cd55b4053b8783_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap.457bf879eca11f66e2de154003ed0f50_1547807833.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.materialize.bfaa8e3bbc89c450471bc8cc1b9a0959_1547807688.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-easing.502fedff28c30ca28b69b469d4f49248_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-countTo.2216a6bac856d869218448a54e6bbc8c_1547807688.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-sticky.980853b199a69acce57cf93d5a9a3767_1547807686.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-stellar.55e412525b98bd15386ee154989c3e48_1547807686.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-inview.0fee8e871d8e8332b973955f71c14a0b_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-shuffle.59f156c2072439edc7423e30643fed01_1547807686.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-magnific-popup.5830d3754f9847bc3affd25657b7464e_1547807667.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-flexslider.6fd2216059a696cd152f2e674c4e2866_1547807684.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-tools.13f52e879d891fbc0072882de2388d55_1547807823.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-scripts.1d7d66239bf5d82bb032d5316a4e65f8_1547807823.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-video.411acb0dd4c25380bc5cc802d38f611f_1547807822.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-slideanims.b7012bec777aae6bf942e6b3de7eb74d_1547807822.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-actions.e3fe630f2ef135883640f4b9287af8cd_1547807821.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-layeranimation.9be5c338de7d5dd501d7abbcda0fbf3b_1547807821.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-kenburn.ff163220ac1c94be65aa01cd40ae3062_1547807822.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-navigation.2ed69f3ed2a71a822ae8cb9db68f948b_1547807822.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-migration.f05042883f3b2c4d6fdc843e9d033d3a_1547807821.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-parallax.402830701f2cb1475353aa7335920e6b_1547807822.js\"></script>


\t";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "

</head>

<body id=\"top\">

\t\t<!-- Navigation -->
\t\t<header id=\"header\" class=\"tt-nav transparent-header \">
\t\t\t<div class=\"header-sticky semi-transparent\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div id=\"materialize-menu\" class=\"menuzord\">

\t\t\t\t\t\t<a class=\"brand logo-brand\" href=\"/\"></a>
\t\t\t\t\t\t<div id=\"mobile-menu\">
\t\t\t\t\t\t\t<div class=\"nav-wrapper\" id=\"toggle\">
\t\t\t\t\t\t\t\t<span class=\"top\"></span>
\t\t\t\t\t\t\t\t<span class=\"middle\"></span>
\t\t\t\t\t\t\t\t<span class=\"bottom\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 161
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 162
            echo "\t\t\t\t\t\t\t<div class=\"icon-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"account\">
\t\t\t\t\t\t\t\t\t<a href=\"/templates/auth/profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE7FD;</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 170
        echo "\t\t\t\t\t\t\t<div class=\"nav-overlay\" id=\"overlay\">
\t\t\t\t\t\t\t\t<nav class=\"overlay-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"/templates/auth/profile.html\">Admin Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_job_offer_edit");
        echo "\">Create job offer</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_new");
        echo "\">Create client</a></li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>-</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Logout</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t\t<ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\" dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span>Logout</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
\t\t\t\t\t\t\t\t<li class=\"active dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"/\">
\t\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\" dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Admin Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\" dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_job_offer_edit");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Create job offer</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\" dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_new");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Create client</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t";
        // line 229
        $this->displayBlock('body', $context, $blocks);
        // line 230
        echo "

\t\t<!-- Footer -->
<footer class=\"footer footer-four\">
\t<div class=\"primary-footer brand-bg text-center\">
\t\t\t<div class=\"container\">

\t\t\t\t\t<a href=\"#top\" class=\"page-scroll btn-floating btn-large gradient secondary back-top waves-effect waves-light\" data-section=\"#top\">
\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE316;</i>
\t\t\t\t\t</a>

\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"brand footer-brand\"></div>

\t\t\t\t\t\t\t\t\t<span class=\"copy-text\">© 2019 All right reserved - by <a href=\"https://idmkr.io/\" target=\"_blank\">IDMKR</a> - <a href=\"#!\">Terms of use</a>

\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"footer-intro\">
\t\t\t\t\t\t\t\t\t\t\t<p>Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- /.col-md-12 -->
\t\t\t\t\t</div><!-- /.row -->
\t\t\t</div><!-- /.container -->
\t</div><!-- /.primary-footer -->

\t
</footer>

";
        // line 260
        $this->displayBlock('js', $context, $blocks);
        // line 261
        echo "

\t</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 68
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 229
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 260
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 260,  401 => 229,  388 => 139,  378 => 138,  365 => 68,  355 => 67,  341 => 261,  339 => 260,  307 => 230,  305 => 229,  291 => 218,  282 => 212,  273 => 206,  255 => 191,  243 => 182,  234 => 176,  230 => 175,  223 => 170,  213 => 162,  211 => 161,  189 => 141,  187 => 138,  117 => 70,  115 => 67,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en\" style=\"height: unset;font-size:16px;\"> <!--<![endif]-->

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>Luxury Services recruitment & services</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"author\" content=\"idmkr.io\">
\t<meta name=\"base_url\" content=\"http://kys.idmkr.io\">
\t<meta name=\"csrf-token\" content=\"utSEZUUxgneXBCQY5My9Djz8rVhqLiG7PLq3ThDA\">
\t<!--  favicon -->
\t<link rel=\"shortcut icon\" href=\"assets/img/luxury-services-logo.png\">

\t<script>
\t\twindow.isMobile = (function () {
\t\t\tvar check = false;
\t\t\t(function (a) { if (/(android|bb\\d+|meego).+mobile|avantgo|bada\\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\\-|your|zeto|zte\\-/i.test(a.substr(0, 4))) check = true; })(navigator.userAgent || navigator.vendor || window.opera);
\t\t\treturn check;
\t\t})();
\t\t\$(document).ready(function() {
    \$('.js-example-basic-single').select2();
});
\t</script>
\t<script>
\t\tfunction onAppReady(handler) {
\t\t\t\$(handler);
\t\t}
\t</script>




\t
\t<link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.materialize.a1042cadda540464eafd9350bb40433a_1547807689.css\"
\trel=\"stylesheet\">
\t<link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap.457005dcd8ab887d5f47791eaa1e3a26_1547807834.css\"
\trel=\"stylesheet\">
\t<link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.style.117d2669c8fdd6628dab9a45764bc512_1549289703.css\"
\trel=\"stylesheet\">
\t<link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.custom.6b4d49f73674949c14f1216c6eddcb85_1547807836.css\"
\trel=\"stylesheet\">
\t<link
\thref=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-settings.77c694ef3fb511bf87c5b705b555fc2a_1547807825.css\"
\trel=\"stylesheet\">
\t<link
\thref=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-layers.4f1e49eeb6f7351bbdc1fb6e35adb6ed_1547807826.css\"
\trel=\"stylesheet\">
\t<link
\thref=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-navigation.2f4deeb1fe1d3f7c9ab31d29a1133835_1547807825.css\"
\trel=\"stylesheet\">
\t
\t<link href=\"/assets/css/main.css\" rel=\"stylesheet\">
\t


\t{% block stylesheets %}
\t{{ encore_entry_link_tags('app') }}
\t{% endblock %}


\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.modernizr.1c9d48a1e28b608c156f4de214d48a4f_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery.5b69aaaa5f04c52e66580a2dc32d1d69_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.animated-headline.88cb936096e0f8ab70515bc801d8342e_1547807687.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap-tabcollapse.34017c51086f0e87aa46196565972d00_1547807688.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.coundown-timer.c8cf6063f2de9fb102572c2c5cbb35d9_1547807687.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.equalheight.317d8490808d596c8a0f1758d495856c_1547807686.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.menuzord.1b3c610e36a938dda7612403eff6e3cf_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.smooth-menu.561efb1e63c25f6459bb7d6b910fd0e0_1547807688.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.imagesloaded.cd624dbd9f9cedc0517e2a007e5a9e99_1547807687.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.owl-carousel.9a2fb1bcafcaeab824262566db2bddef_1547807835.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.wow.8dcaf0f70a4ccabe591dd6faf3c07bdc_1547807687.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.scripts.b4ebfafba9aad4e481cd55b4053b8783_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap.457bf879eca11f66e2de154003ed0f50_1547807833.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.materialize.bfaa8e3bbc89c450471bc8cc1b9a0959_1547807688.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-easing.502fedff28c30ca28b69b469d4f49248_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-countTo.2216a6bac856d869218448a54e6bbc8c_1547807688.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-sticky.980853b199a69acce57cf93d5a9a3767_1547807686.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-stellar.55e412525b98bd15386ee154989c3e48_1547807686.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-inview.0fee8e871d8e8332b973955f71c14a0b_1547807685.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-shuffle.59f156c2072439edc7423e30643fed01_1547807686.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-magnific-popup.5830d3754f9847bc3affd25657b7464e_1547807667.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-flexslider.6fd2216059a696cd152f2e674c4e2866_1547807684.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-tools.13f52e879d891fbc0072882de2388d55_1547807823.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-scripts.1d7d66239bf5d82bb032d5316a4e65f8_1547807823.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-video.411acb0dd4c25380bc5cc802d38f611f_1547807822.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-slideanims.b7012bec777aae6bf942e6b3de7eb74d_1547807822.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-actions.e3fe630f2ef135883640f4b9287af8cd_1547807821.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-layeranimation.9be5c338de7d5dd501d7abbcda0fbf3b_1547807821.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-kenburn.ff163220ac1c94be65aa01cd40ae3062_1547807822.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-navigation.2ed69f3ed2a71a822ae8cb9db68f948b_1547807822.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-migration.f05042883f3b2c4d6fdc843e9d033d3a_1547807821.js\"></script>
\t<script
\t\tsrc=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-parallax.402830701f2cb1475353aa7335920e6b_1547807822.js\"></script>


\t{% block javascripts %}
\t{{ encore_entry_script_tags('app') }}
\t{% endblock %}


</head>

<body id=\"top\">

\t\t<!-- Navigation -->
\t\t<header id=\"header\" class=\"tt-nav transparent-header \">
\t\t\t<div class=\"header-sticky semi-transparent\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div id=\"materialize-menu\" class=\"menuzord\">

\t\t\t\t\t\t<a class=\"brand logo-brand\" href=\"/\"></a>
\t\t\t\t\t\t<div id=\"mobile-menu\">
\t\t\t\t\t\t\t<div class=\"nav-wrapper\" id=\"toggle\">
\t\t\t\t\t\t\t\t<span class=\"top\"></span>
\t\t\t\t\t\t\t\t<span class=\"middle\"></span>
\t\t\t\t\t\t\t\t<span class=\"bottom\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t\t\t\t<div class=\"icon-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"account\">
\t\t\t\t\t\t\t\t\t<a href=\"/templates/auth/profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE7FD;</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"nav-overlay\" id=\"overlay\">
\t\t\t\t\t\t\t\t<nav class=\"overlay-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"/templates/auth/profile.html\">Admin Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('app_job_offer_edit')}}\">Create job offer</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('app_client_new')}}\">Create client</a></li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>-</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('logout')}}\">Logout</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t\t<ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\" dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"{{path('logout')}}\">
\t\t\t\t\t\t\t\t\t\t<span>Logout</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
\t\t\t\t\t\t\t\t<li class=\"active dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"/\">
\t\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\" dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"{{path('app_admin_index')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Admin Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\" dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"{{path('app_job_offer_edit')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Create job offer</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\" dropdown\">
\t\t\t\t\t\t\t\t\t<a target=\"_self\" href=\"{{path('app_client_new')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Create client</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t{% block body %}{% endblock %}


\t\t<!-- Footer -->
<footer class=\"footer footer-four\">
\t<div class=\"primary-footer brand-bg text-center\">
\t\t\t<div class=\"container\">

\t\t\t\t\t<a href=\"#top\" class=\"page-scroll btn-floating btn-large gradient secondary back-top waves-effect waves-light\" data-section=\"#top\">
\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE316;</i>
\t\t\t\t\t</a>

\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"brand footer-brand\"></div>

\t\t\t\t\t\t\t\t\t<span class=\"copy-text\">© 2019 All right reserved - by <a href=\"https://idmkr.io/\" target=\"_blank\">IDMKR</a> - <a href=\"#!\">Terms of use</a>

\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"footer-intro\">
\t\t\t\t\t\t\t\t\t\t\t<p>Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!-- /.col-md-12 -->
\t\t\t\t\t</div><!-- /.row -->
\t\t\t</div><!-- /.container -->
\t</div><!-- /.primary-footer -->

\t
</footer>

{% block js %}{% endblock %}


\t</body>

</html>", "baseAdmin.html.twig", "/home/renaud/devilbox/data/www/2023-04-24_Luxury/templates/baseAdmin.html.twig");
    }
}
