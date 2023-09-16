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

/* baseFront.html.twig */
class __TwigTemplate_c084ac9de95d2197c3d0cfd747302180 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

\t<head>
\t\t<!-- Meta Tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
\t\t<meta name=\"description\" content=\"Société des Travaux Modernes (S.TRA.M)\">
\t\t<meta
\t\tname=\"author\" content=\"\">

\t\t<!-- Page Title -->
\t\t<title>Société des Travaux Modernes (S.TRA.M)</title>

\t\t<!-- Favicon and touch Icons -->
\t\t<link href=\"images/stram-logo.png\" rel=\"shortcut icon\" type=\"image/png\">
\t\t<link href=\"images/apple-touch-icon.png\" rel=\"apple-touch-icon\">
\t\t<link href=\"images/apple-touch-icon-72x72.png\" rel=\"apple-touch-icon\" sizes=\"72x72\">
\t\t<link href=\"images/apple-touch-icon-114x114.png\" rel=\"apple-touch-icon\" sizes=\"114x114\">
\t\t<link
\t\thref=\"images/apple-touch-icon-144x144.png\" rel=\"apple-touch-icon\" sizes=\"144x144\">

\t\t<!-- Lead Style -->
\t\t<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">


\t\t<script>
\t\t\tfunction updateClockDisplay() {
const now = new Date();
const hours = now.getHours();
const minutes = now.getMinutes();
const formattedTime = `\${hours}:\${
minutes < 10 ? \"0\" + minutes : minutes
}`;

document.getElementById(\"clockDisplay\").textContent = formattedTime;
}

// Mettre à jour l'horloge toutes les minutes
setInterval(updateClockDisplay, 60000); // 60000 ms = 1 minute
\t\t</script>

\t\t<style>
\t\t\t/* Add the CSS code here */
\t\t\t.banner_content {
\t\t\t\ttext-align: center;
\t\t\t\tpadding: 20px 0;
\t\t\t}

\t\t\t.circle-row {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\tgap: 30px; /* Increased gap between circles */
\t\t\t}

\t\t\t.circle {
\t\t\t\ttext-align: center;
\t\t\t\tmargin-right: 10px; /* Space between circles */
\t\t\t}

\t\t\t.circle:last-child {
\t\t\t\tmargin-right: 0; /* No margin on the last circle */
\t\t\t}

\t\t\t.circle img {
\t\t\t\twidth: 120px; /* Slightly larger circles */
\t\t\t\theight: auto;
\t\t\t\tborder-radius: 80%;
\t\t\t\tborder: 2px solid #333;
\t\t\t}
\t\t</style>


\t</head>

\t<body
\t\tclass=\"dark-theme\" data-aos-easing=\"ease\" data-aos-duration=\"400\" data-aos-delay=\"0\">

\t\t<!-- Header 1 -->
\t\t<header class=\"header dark_mode\">
\t\t\t<div class=\"top_bar\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"top_bar_inner\">
\t\t\t\t\t\t<div class=\"header_social\">
\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/company/stram-groupe/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\tSuivez-nous sur LinkedIn :
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header_info\">


\t\t\t\t\t\t\t<div class=\"schedule\">
\t\t\t\t\t\t\t\t<div class=\"hide_icon d-md-none\" data-text=\"info@stram.tn\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<a href=\"https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox\" target=\"_blank\">info@stram.tn</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"free_contact\">
\t\t\t\t\t\t\t\t<a href=\"/admin\" target=\"_blank\" class=\"btn\">Dashboard Admin</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"middle_bar\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"middle_bar_inner\">

\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"/\" class=\"light_mode_logo\"><img src=\"images/stram-logo.png\" alt=\"logo\"></a>
\t\t\t\t\t\t\t<a href=\"/\" class=\"dark_mode_logo\"><img src=\"images/stram-logo.png\" alt=\"logo\"></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header_right_part\">
\t\t\t\t\t\t\t<div class=\"mainnav\">
\t\t\t\t\t\t\t\t<ul class=\"main_menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/\">Acceuil</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/\">Acceuil</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children \">
\t\t\t\t\t\t\t\t\t\t<a href=\"/\">S.TRA.M</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item \">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qui_sommes_nous");
        echo "\">Qui sommes-nous ?</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Sols techniques</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Répara6ons & renforts de structure</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Étanchéité & Imperméabilisa6on</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Traitement des joints</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Centrales photovoltaique
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\tÉtudes & Expertise
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Peinture</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Projets</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Afrique du Nord</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-1.html\">Tunisie</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-2.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAlgérie</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Afrique du West</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-1.html\">Sénégal</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-2.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNiger</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-2.html\">Benin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Clients</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/clients\">Nos Clients</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Carrière</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/carriere\">Carrière</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/contact\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<div class=\"main_wrapper\">
\t\t\t<div class=\"theme_slider_1\">
\t\t\t\t<div class=\"slider\" style=\"background-image: url('images/slider/img1.jpg')\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"slide_content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"sub_heading aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\tAPPELEZ-NOUS À TOUT MOMENT<span>
\t\t\t\t\t\t\t\t\t\t\t(+216) ";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 261, $this->source); })()), "getNumrContact", [], "any", false, false, false, 261), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<h2 class=\"heading aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"1500\">";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 264, $this->source); })()), "getDescriptionSite1", [], "any", false, false, false, 264), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t<p class=\"desc aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"2000\">";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 265, $this->source); })()), "getDescriptionSite2", [], "any", false, false, false, 265), "html", null, true);
        echo ".</p>
\t\t\t\t\t\t\t\t\t<div class=\"slider_button aos-init aos-animate\" data-aos=\"fade-right\" data-aos-duration=\"2500\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qui_sommes_nous");
        echo "\" class=\"button\">Savoir Plus
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 d-flex align-items-end aos-init aos-animate\" data-aos=\"fade-left\" data-aos-duration=\"2500\">
\t\t\t\t\t\t\t\t<div class=\"layer_object\">
\t\t\t\t\t\t\t\t\t<img src=\"images/slider/image2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"container-fluid g-0\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t<div class=\"service_inner service_inner2 bg_1\">
\t\t\t\t\t\t\t\t<div class=\"service_content d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t<div class=\"icon_img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/services/s1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"services_content_flex_cenrer\">
\t\t\t\t\t\t\t\t\t\t<h6>SERVICE ONE</h6>
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Industrial &amp; Highrise Construction</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"service-details.html\">Get Service
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main_img aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
\t\t\t\t\t\t\t\t\t<img src=\"images/services/service1.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t<div class=\"service_inner service_inner2 bg_2\">
\t\t\t\t\t\t\t\t<div class=\"service_content d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t<div class=\"icon_img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/services/s2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"services_content_flex_cenrer\">
\t\t\t\t\t\t\t\t\t\t<h6>SERVICE Two</h6>
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Real Estate &amp; Housing Construction</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"service-details.html\">Get Service
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main_img aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"images/services/service2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t<div class=\"service_inner service_inner2 bg_3\">
\t\t\t\t\t\t\t\t<div class=\"service_content d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t<div class=\"icon_img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/services/s3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"services_content_flex_cenrer\">
\t\t\t\t\t\t\t\t\t\t<h6>SERVICE Three</h6>
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Commertial Design &amp; Building Construction</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"service-details.html\">Get Service
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main_img aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"3000\">
\t\t\t\t\t\t\t\t\t<img src=\"images/services/service3.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"experience section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"group_image_holder type_1\">
\t\t\t\t\t\t\t\t<div class=\"expe_box\">
\t\t\t\t\t\t\t\t\t<div class=\"expe_box_inner\">
\t\t\t\t\t\t\t\t\t\t<h1>17
\t\t\t\t\t\t\t\t\t\t\t<h5>ans</h5>
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\td'Expériences
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image_object\">
\t\t\t\t\t\t\t\t\t<img src=\"images/about/img2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"object\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"About\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"About\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"About\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/about/s1.png\" alt=\"About\" data-aos=\"fade-down\" data-aos-duration=\"3000\" class=\"aos-init aos-animate\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t\t\t\t\t<div class=\"experience_content\">
\t\t\t\t\t\t\t\t<div class=\"section_header\">
\t\t\t\t\t\t\t\t\t<div class=\"shadow_icon\"><img src=\"images/about/shadow_icon1.png\" alt=\"\"></div>

\t\t\t\t\t\t\t\t\t<h1 class=\"section_title\">";
        // line 381
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 381, $this->source); })()), "getDescriptionEntreprise1", [], "any", false, false, false, 381), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t<h6 class=\"section_sub_title\">La Société des Travaux Modernes (S.TRA.M)</h6>
\t\t\t\t\t\t\t\t\t<p class=\"section_desc\"> ";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 383, $this->source); })()), "getDescriptionEntreprise2", [], "any", false, false, false, 383), "html", null, true);
        echo ".
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFière de notre expertise, notre entreprise s’est métamorphosée pour devenir, 17ans plus tard, l’un des joueurs majeurs dans le domaine des travaux spéciaux relatifs au secteur du bâtiment et travaux publiques (BTP).</p>
\t\t\t\t\t\t\t\t\t<div class=\"about_below\">
\t\t\t\t\t\t\t\t\t\t<div class=\"about_below_content\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-ios-checkmark-outline\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"about_below_content_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Innovation</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Pionniers de l'innovation, nous intégrons les dernières technologies dans nos services BTP.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"about_below_content\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-ios-checkmark-outline\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"about_below_content_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>ÊTRE Leader
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Notre offre complète en BTP vise à devenir une référence continentale.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"button\" href=\"about.html\">Learn More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"funfacts\" class=\"funfacts\" style=\" background-image: url(../images/funfact/bg6.png)\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t<div class=\"section_header\">
\t\t\t\t\t\t\t\t<h6 class=\"section_sub_title\">FUNFACTS OF BUILDERRINE CONSTRUCTION</h6>
\t\t\t\t\t\t\t\t<h1 class=\"section_title\">";
        // line 416
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 416, $this->source); })()), "getDescriptionExperiences", [], "any", false, false, false, 416), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fun_bottom\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"funbox1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/funfact/p1.png\" alt=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-number\">33</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Years of Experience</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"funbox1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/funfact/p2.png\" alt=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-number\">100</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-suffix\">+</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Projects Completed</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"funbox1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/funfact/p3.png\" alt=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-number\">300</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-suffix\">+</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Expert Builders</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"funbox1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/funfact/p4.png\" alt=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-number\">36</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Ongoing Project</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"man_img aos-init aos-animate\" data-aos=\"fade-left\" data-aos-duration=\"3000\">
\t\t\t\t\t\t\t\t<img src=\"images/funfact/img3.png\" alt=\"icon\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section project_iso project_iso1\">
\t\t\t\t<div class=\"container-fluid g-0\">
\t\t\t\t\t<div class=\"section_header text-center\">
\t\t\t\t\t\t<div class=\"shadow_icon\"><img src=\"images/about/shadow_icon1.png\" alt=\"\"></div>
\t\t\t\t\t\t<h6 class=\"section_sub_title\">À PROPOS LES PROJETS</h6>
\t\t\t\t\t\t<h1 class=\"section_title\">";
        // line 493
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 493, $this->source); })()), "getDescriptionProjet2", [], "any", false, false, false, 493), "html", null, true);
        echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"button-group filters-button-group\">
\t\t\t\t\t\t\t\t<button class=\"button is-checked\" data-filter=\"*\">Tous</button>
\t\t\t\t\t\t\t\t<button class=\"button\" data-filter=\".Secteur1 \">Secteur 1
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"button\" data-filter=\".Secteur2\">Secteur 2</button>
\t\t\t\t\t\t\t\t<button class=\"button\" data-filter=\".Secteur3\">Secteur 3</button>
\t\t\t\t\t\t\t\t<button class=\"button\" data-filter=\".Secteur4\">Secteur 4</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"grid grid-5\" style=\"position: relative; height: 835.876px;\">
\t\t\t\t\t\t\t\t<div class=\"element-item highrise\" style=\"position: absolute; left: 0%; top: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"teambox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/Project_2_Images/projet1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_social\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Local 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Titre Projet 1
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"element-item highrise business\" style=\"position: absolute; left: 33.3276%; top: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"teambox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/Project_2_Images/projet2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_social\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Local 2</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Titre Projet 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"element-item residential \" style=\"position: absolute; left: 66.6552%; top: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"teambox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/Project_2_Images/projet3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_social\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Local 3</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Titre Projet 3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"element-item commercial\" style=\"position: absolute; left: 0%; top: 417.938px;\">
\t\t\t\t\t\t\t\t\t<div class=\"teambox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/Project_2_Images/projet4.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_social\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Local 4</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Titre Projet 4</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"banner type_3\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t\t<div class=\"circle-row\">
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/tunisie.png\" alt=\"Tunisia Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/algerie.png\" alt=\"Algeria Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/sénégal.png\" alt=\"Senegal Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/niger.png\" alt=\"Niger Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/benin.png\" alt=\"Benin Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"testimonial pd_btom_80\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"section_header text-center\">
\t\t\t\t\t\t<div class=\"shadow_icon\"><img src=\"images/shadow_icon3.png\" alt=\"\"></div>
\t\t\t\t\t\t<h6 class=\"section_sub_title\">Témoignages Clients</h6>
\t\t\t\t\t\t<h1 class=\"section_title\">Opinions de nos clients</h1>
\t\t\t\t\t\t<p class=\"section_desc\">";
        // line 632
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 632, $this->source); })()), "getDescriptionTemoignages", [], "any", false, false, false, 632), "html", null, true);
        echo "..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"owl_testimonial1 owl-carousel owl-theme owl-loaded owl-drag\">


\t\t\t\t\t\t\t\t<div class=\"owl-stage-outer\">
\t\t\t\t\t\t\t\t\t<div class=\"owl-stage\" style=\"transition: all 0s ease 0s; width: 5289px; transform: translate3d(-1201px, 0px, 0px);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our Utah Shopping Mall project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Oakland Gardner</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>UTAH</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item active center\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us amazing serives. The have designed and build our Miami grand Hotel project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>MIAMI</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item active\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer4.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Marina Samuel</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our Utah Shopping Mall project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Oakland Gardner</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>UTAH</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us amazing serives. The have designed and build our Miami grand Hotel project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>MIAMI</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer4.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Marina Samuel</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our Utah Shopping Mall project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Oakland Gardner</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>UTAH</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"owl-nav disabled\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" role=\"presentation\" class=\"owl-prev\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" role=\"presentation\" class=\"owl-next\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"owl-dots\">
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot active\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"blog section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"blog_grid\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"section_header text-left\">
\t\t\t\t\t\t\t\t\t<h6 class=\"section_sub_title\">Nouveauté</h6>
\t\t\t\t\t\t\t\t\t<h1 class=\"section_title\">";
        // line 1099
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 1099, $this->source); })()), "getTitreNouveautées", [], "any", false, false, false, 1099), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t<p class=\"section_desc\">";
        // line 1100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 1100, $this->source); })()), "getDescriptionNouveautées", [], "any", false, false, false, 1100), "html", null, true);
        echo ".</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<article class=\"blog_post\">
\t\t\t\t\t\t\t\t\t<div class=\"post_img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog-1.html\"><img src=\"images/blog/b6.png\" alt=\"img\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"calendar\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t<br>May</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-2.html\">Diversity in Building Celebrated by Builderrine</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine will connect with 10000 people from 90 companies who work on its’ projects each day...</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"read_more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Read Article</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<article class=\"blog_post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post_img\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-1.html\"><img src=\"images/blog/b7.png\" alt=\"img\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"calendar\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>May</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-1.html\">Company Receives Recognition for Excellence</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>The construction industry has the capacity to absorb more people into the workforce...</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"read_more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Read Article</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"patner\">
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/1.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/2.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/3.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/4.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/5.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/6.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<!-- Footer 1 -->
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"footer_above\" style=\"background-image: url('images/footer4.jpg');\">
\t\t\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer_widget footer_widget_padding\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\t\t\t\tÀ propos de STRAM
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 1200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 1200, $this->source); })()), "getDescriptionSTram", [], "any", false, false, false, 1200), "html", null, true);
        echo ".<br>
\t\t\t\t\t\t\t\t\t\t\t\tIls ont besoin des Services de Construction STRAM !</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"subscribe\">
\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-2 mr-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\">S'abonner</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer_widget footer_links\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\t\t\t\tNos Services
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"footer_menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Sols techniques</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Réparations & renforts de structure</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Étanchéité & Imperméabilisation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Traitement des joints</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Centrales photovoltaiques</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Études & Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Peinture</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer_widget footer_links\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\t\t\t\tliens
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"footer_menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/app_qui_sommes_nous\">Qui Sommes-nous?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/projets\">Projets</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/clients\">Clients</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/carriere\">Carrière</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/contact\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\" style=\"background-color:#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1280
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 1280, $this->source); })()), "getAdresseContact", [], "any", false, false, false, 1280), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>info@stram.tn</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(+216) ";
        // line 1289
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acceuil"]) || array_key_exists("acceuil", $context) ? $context["acceuil"] : (function () { throw new RuntimeError('Variable "acceuil" does not exist.', 1289, $this->source); })()), "getNumrContact", [], "any", false, false, false, 1289), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fax\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(+216) 71 432 112
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer_bottom\" style=\"background-color:#D6D8DA\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"footer_bottom_inner\">
\t\t\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/\"><img src=\"images/stram-logo.png\" alt=\"Logo\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t\t\t\t<p style=\"color:#0D2C4A\">

\t\t\t\t\t\t\t\t\t\t\t<a>Copyright @ 2023 Site developed by
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://www.sbc.tn/bienvenue/#/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSmart Business Challenge
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"totop\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-ios-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</body>
\t\t\t\t</html>

\t\t\t</body>
\t\t</html>
\t</footer>

\t<div class=\"slide_navi\">
\t\t<div class=\"side_footer_social\">
\t\t\t<ul class=\"bottom_social\">
\t\t\t\t<li class=\"facebook\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"twitter\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"dribbble\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-dribbble-outline\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"instagram\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-instagram-outline\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"linkedin\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-linkedin-outline\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

</div>


<!-- All JavaScript Files -->
<script src=\"js/jquery-3.6.0.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"plugins/swiper/swiper-bundle.min.js\"></script>

<script src=\"plugins/menu/ma5-menu.min.js\"></script>
<script src=\"plugins/owlcarousel/owl.carousel.min.js\"></script>

<!-- Select2 -->
<script src=\"plugins/select2/js/select2.min.js\"></script>

<!-- Isotope -->
<script src=\"plugins/isotope/isotope.pkgd.min.js\"></script>
<script src=\"plugins/isotope/imagesloaded.pkgd.min.js\"></script>

<script src=\"plugins/aos/aos.js\"></script>
<script src=\"js/funfacts.js\"></script>
<script src=\"js/custom.js\"></script></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1375 => 1289,  1363 => 1280,  1280 => 1200,  1177 => 1100,  1173 => 1099,  703 => 632,  561 => 493,  481 => 416,  445 => 383,  440 => 381,  323 => 267,  318 => 265,  314 => 264,  308 => 261,  188 => 144,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

\t<head>
\t\t<!-- Meta Tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
\t\t<meta name=\"description\" content=\"Société des Travaux Modernes (S.TRA.M)\">
\t\t<meta
\t\tname=\"author\" content=\"\">

\t\t<!-- Page Title -->
\t\t<title>Société des Travaux Modernes (S.TRA.M)</title>

\t\t<!-- Favicon and touch Icons -->
\t\t<link href=\"images/stram-logo.png\" rel=\"shortcut icon\" type=\"image/png\">
\t\t<link href=\"images/apple-touch-icon.png\" rel=\"apple-touch-icon\">
\t\t<link href=\"images/apple-touch-icon-72x72.png\" rel=\"apple-touch-icon\" sizes=\"72x72\">
\t\t<link href=\"images/apple-touch-icon-114x114.png\" rel=\"apple-touch-icon\" sizes=\"114x114\">
\t\t<link
\t\thref=\"images/apple-touch-icon-144x144.png\" rel=\"apple-touch-icon\" sizes=\"144x144\">

\t\t<!-- Lead Style -->
\t\t<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">


\t\t<script>
\t\t\tfunction updateClockDisplay() {
const now = new Date();
const hours = now.getHours();
const minutes = now.getMinutes();
const formattedTime = `\${hours}:\${
minutes < 10 ? \"0\" + minutes : minutes
}`;

document.getElementById(\"clockDisplay\").textContent = formattedTime;
}

// Mettre à jour l'horloge toutes les minutes
setInterval(updateClockDisplay, 60000); // 60000 ms = 1 minute
\t\t</script>

\t\t<style>
\t\t\t/* Add the CSS code here */
\t\t\t.banner_content {
\t\t\t\ttext-align: center;
\t\t\t\tpadding: 20px 0;
\t\t\t}

\t\t\t.circle-row {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\tgap: 30px; /* Increased gap between circles */
\t\t\t}

\t\t\t.circle {
\t\t\t\ttext-align: center;
\t\t\t\tmargin-right: 10px; /* Space between circles */
\t\t\t}

\t\t\t.circle:last-child {
\t\t\t\tmargin-right: 0; /* No margin on the last circle */
\t\t\t}

\t\t\t.circle img {
\t\t\t\twidth: 120px; /* Slightly larger circles */
\t\t\t\theight: auto;
\t\t\t\tborder-radius: 80%;
\t\t\t\tborder: 2px solid #333;
\t\t\t}
\t\t</style>


\t</head>

\t<body
\t\tclass=\"dark-theme\" data-aos-easing=\"ease\" data-aos-duration=\"400\" data-aos-delay=\"0\">

\t\t<!-- Header 1 -->
\t\t<header class=\"header dark_mode\">
\t\t\t<div class=\"top_bar\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"top_bar_inner\">
\t\t\t\t\t\t<div class=\"header_social\">
\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/company/stram-groupe/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\tSuivez-nous sur LinkedIn :
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header_info\">


\t\t\t\t\t\t\t<div class=\"schedule\">
\t\t\t\t\t\t\t\t<div class=\"hide_icon d-md-none\" data-text=\"info@stram.tn\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<a href=\"https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox\" target=\"_blank\">info@stram.tn</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"free_contact\">
\t\t\t\t\t\t\t\t<a href=\"/admin\" target=\"_blank\" class=\"btn\">Dashboard Admin</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"middle_bar\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"middle_bar_inner\">

\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"/\" class=\"light_mode_logo\"><img src=\"images/stram-logo.png\" alt=\"logo\"></a>
\t\t\t\t\t\t\t<a href=\"/\" class=\"dark_mode_logo\"><img src=\"images/stram-logo.png\" alt=\"logo\"></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header_right_part\">
\t\t\t\t\t\t\t<div class=\"mainnav\">
\t\t\t\t\t\t\t\t<ul class=\"main_menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/\">Acceuil</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/\">Acceuil</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children \">
\t\t\t\t\t\t\t\t\t\t<a href=\"/\">S.TRA.M</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item \">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_qui_sommes_nous') }}\">Qui sommes-nous ?</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Sols techniques</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Répara6ons & renforts de structure</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Étanchéité & Imperméabilisa6on</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Traitement des joints</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Centrales photovoltaique
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\tÉtudes & Expertise
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Peinture</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Projets</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Afrique du Nord</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-1.html\">Tunisie</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-2.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAlgérie</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Afrique du West</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-1.html\">Sénégal</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-2.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNiger</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-2.html\">Benin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Clients</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/clients\">Nos Clients</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Carrière</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/carriere\">Carrière</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/contact\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<div class=\"main_wrapper\">
\t\t\t<div class=\"theme_slider_1\">
\t\t\t\t<div class=\"slider\" style=\"background-image: url('images/slider/img1.jpg')\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"slide_content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"sub_heading aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\tAPPELEZ-NOUS À TOUT MOMENT<span>
\t\t\t\t\t\t\t\t\t\t\t(+216) {{acceuil.getNumrContact}}</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<h2 class=\"heading aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"1500\">{{acceuil.getDescriptionSite1}}</h2>
\t\t\t\t\t\t\t\t\t<p class=\"desc aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"2000\">{{acceuil.getDescriptionSite2}}.</p>
\t\t\t\t\t\t\t\t\t<div class=\"slider_button aos-init aos-animate\" data-aos=\"fade-right\" data-aos-duration=\"2500\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_qui_sommes_nous') }}\" class=\"button\">Savoir Plus
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 d-flex align-items-end aos-init aos-animate\" data-aos=\"fade-left\" data-aos-duration=\"2500\">
\t\t\t\t\t\t\t\t<div class=\"layer_object\">
\t\t\t\t\t\t\t\t\t<img src=\"images/slider/image2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"container-fluid g-0\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t<div class=\"service_inner service_inner2 bg_1\">
\t\t\t\t\t\t\t\t<div class=\"service_content d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t<div class=\"icon_img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/services/s1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"services_content_flex_cenrer\">
\t\t\t\t\t\t\t\t\t\t<h6>SERVICE ONE</h6>
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Industrial &amp; Highrise Construction</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"service-details.html\">Get Service
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main_img aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
\t\t\t\t\t\t\t\t\t<img src=\"images/services/service1.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t<div class=\"service_inner service_inner2 bg_2\">
\t\t\t\t\t\t\t\t<div class=\"service_content d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t<div class=\"icon_img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/services/s2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"services_content_flex_cenrer\">
\t\t\t\t\t\t\t\t\t\t<h6>SERVICE Two</h6>
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"services-2.html\">Real Estate &amp; Housing Construction</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"service-details.html\">Get Service
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main_img aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"images/services/service2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t<div class=\"service_inner service_inner2 bg_3\">
\t\t\t\t\t\t\t\t<div class=\"service_content d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t<div class=\"icon_img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/services/s3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"services_content_flex_cenrer\">
\t\t\t\t\t\t\t\t\t\t<h6>SERVICE Three</h6>
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Commertial Design &amp; Building Construction</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"service-details.html\">Get Service
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main_img aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"3000\">
\t\t\t\t\t\t\t\t\t<img src=\"images/services/service3.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"experience section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"group_image_holder type_1\">
\t\t\t\t\t\t\t\t<div class=\"expe_box\">
\t\t\t\t\t\t\t\t\t<div class=\"expe_box_inner\">
\t\t\t\t\t\t\t\t\t\t<h1>17
\t\t\t\t\t\t\t\t\t\t\t<h5>ans</h5>
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\td'Expériences
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image_object\">
\t\t\t\t\t\t\t\t\t<img src=\"images/about/img2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"object\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"About\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"About\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"About\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/about/s1.png\" alt=\"About\" data-aos=\"fade-down\" data-aos-duration=\"3000\" class=\"aos-init aos-animate\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t\t\t\t\t<div class=\"experience_content\">
\t\t\t\t\t\t\t\t<div class=\"section_header\">
\t\t\t\t\t\t\t\t\t<div class=\"shadow_icon\"><img src=\"images/about/shadow_icon1.png\" alt=\"\"></div>

\t\t\t\t\t\t\t\t\t<h1 class=\"section_title\">{{acceuil.getDescriptionEntreprise1}}</h1>
\t\t\t\t\t\t\t\t\t<h6 class=\"section_sub_title\">La Société des Travaux Modernes (S.TRA.M)</h6>
\t\t\t\t\t\t\t\t\t<p class=\"section_desc\"> {{acceuil.getDescriptionEntreprise2}}.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFière de notre expertise, notre entreprise s’est métamorphosée pour devenir, 17ans plus tard, l’un des joueurs majeurs dans le domaine des travaux spéciaux relatifs au secteur du bâtiment et travaux publiques (BTP).</p>
\t\t\t\t\t\t\t\t\t<div class=\"about_below\">
\t\t\t\t\t\t\t\t\t\t<div class=\"about_below_content\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-ios-checkmark-outline\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"about_below_content_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Innovation</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Pionniers de l'innovation, nous intégrons les dernières technologies dans nos services BTP.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"about_below_content\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-ios-checkmark-outline\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"about_below_content_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>ÊTRE Leader
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Notre offre complète en BTP vise à devenir une référence continentale.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"button\" href=\"about.html\">Learn More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"funfacts\" class=\"funfacts\" style=\" background-image: url(../images/funfact/bg6.png)\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t<div class=\"section_header\">
\t\t\t\t\t\t\t\t<h6 class=\"section_sub_title\">FUNFACTS OF BUILDERRINE CONSTRUCTION</h6>
\t\t\t\t\t\t\t\t<h1 class=\"section_title\">{{acceuil.getDescriptionExperiences}}</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fun_bottom\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"funbox1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/funfact/p1.png\" alt=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-number\">33</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Years of Experience</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"funbox1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/funfact/p2.png\" alt=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-number\">100</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-suffix\">+</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Projects Completed</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"funbox1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/funfact/p3.png\" alt=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-number\">300</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-suffix\">+</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Expert Builders</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"funbox1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/funfact/p4.png\" alt=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fun_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fun-number\">36</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Ongoing Project</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"man_img aos-init aos-animate\" data-aos=\"fade-left\" data-aos-duration=\"3000\">
\t\t\t\t\t\t\t\t<img src=\"images/funfact/img3.png\" alt=\"icon\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section project_iso project_iso1\">
\t\t\t\t<div class=\"container-fluid g-0\">
\t\t\t\t\t<div class=\"section_header text-center\">
\t\t\t\t\t\t<div class=\"shadow_icon\"><img src=\"images/about/shadow_icon1.png\" alt=\"\"></div>
\t\t\t\t\t\t<h6 class=\"section_sub_title\">À PROPOS LES PROJETS</h6>
\t\t\t\t\t\t<h1 class=\"section_title\">{{acceuil.getDescriptionProjet2}}</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"button-group filters-button-group\">
\t\t\t\t\t\t\t\t<button class=\"button is-checked\" data-filter=\"*\">Tous</button>
\t\t\t\t\t\t\t\t<button class=\"button\" data-filter=\".Secteur1 \">Secteur 1
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"button\" data-filter=\".Secteur2\">Secteur 2</button>
\t\t\t\t\t\t\t\t<button class=\"button\" data-filter=\".Secteur3\">Secteur 3</button>
\t\t\t\t\t\t\t\t<button class=\"button\" data-filter=\".Secteur4\">Secteur 4</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"grid grid-5\" style=\"position: relative; height: 835.876px;\">
\t\t\t\t\t\t\t\t<div class=\"element-item highrise\" style=\"position: absolute; left: 0%; top: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"teambox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/Project_2_Images/projet1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_social\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Local 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Titre Projet 1
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"element-item highrise business\" style=\"position: absolute; left: 33.3276%; top: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"teambox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/Project_2_Images/projet2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_social\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Local 2</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Titre Projet 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"element-item residential \" style=\"position: absolute; left: 66.6552%; top: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"teambox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/Project_2_Images/projet3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_social\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Local 3</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Titre Projet 3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"element-item commercial\" style=\"position: absolute; left: 0%; top: 417.938px;\">
\t\t\t\t\t\t\t\t\t<div class=\"teambox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/Project_2_Images/projet4.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_social\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"teambox_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team_flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Local 4</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Titre Projet 4</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"banner type_3\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t\t<div class=\"circle-row\">
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/tunisie.png\" alt=\"Tunisia Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/algerie.png\" alt=\"Algeria Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/sénégal.png\" alt=\"Senegal Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/niger.png\" alt=\"Niger Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t<img src=\"images/drapeau/benin.png\" alt=\"Benin Flag\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"testimonial pd_btom_80\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"section_header text-center\">
\t\t\t\t\t\t<div class=\"shadow_icon\"><img src=\"images/shadow_icon3.png\" alt=\"\"></div>
\t\t\t\t\t\t<h6 class=\"section_sub_title\">Témoignages Clients</h6>
\t\t\t\t\t\t<h1 class=\"section_title\">Opinions de nos clients</h1>
\t\t\t\t\t\t<p class=\"section_desc\">{{acceuil.getDescriptionTemoignages}}..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"owl_testimonial1 owl-carousel owl-theme owl-loaded owl-drag\">


\t\t\t\t\t\t\t\t<div class=\"owl-stage-outer\">
\t\t\t\t\t\t\t\t\t<div class=\"owl-stage\" style=\"transition: all 0s ease 0s; width: 5289px; transform: translate3d(-1201px, 0px, 0px);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our Utah Shopping Mall project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Oakland Gardner</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>UTAH</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item active center\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us amazing serives. The have designed and build our Miami grand Hotel project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>MIAMI</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item active\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer4.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Marina Samuel</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our Utah Shopping Mall project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Oakland Gardner</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>UTAH</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us amazing serives. The have designed and build our Miami grand Hotel project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Johnathon Doe</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>MIAMI</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our NY Pent House project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer4.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Marina Samuel</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>New York</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"owl-item cloned\" style=\"width: 450.75px; margin-right: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testibox_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text\">Rating:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>“Builderrine Construction provides us nice serives. The have designed and build our Utah Shopping Mall project. They have exceeded our expectation and did such an amazing job. We are very happy with their work”</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/reviewer3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testi-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Oakland Gardner</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>UTAH</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"owl-nav disabled\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" role=\"presentation\" class=\"owl-prev\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" role=\"presentation\" class=\"owl-next\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"owl-dots\">
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot active\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button role=\"button\" class=\"owl-dot\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"blog section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"blog_grid\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"section_header text-left\">
\t\t\t\t\t\t\t\t\t<h6 class=\"section_sub_title\">Nouveauté</h6>
\t\t\t\t\t\t\t\t\t<h1 class=\"section_title\">{{acceuil.getTitreNouveautées}}</h1>
\t\t\t\t\t\t\t\t\t<p class=\"section_desc\">{{acceuil.getDescriptionNouveautées}}.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<article class=\"blog_post\">
\t\t\t\t\t\t\t\t\t<div class=\"post_img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog-1.html\"><img src=\"images/blog/b6.png\" alt=\"img\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"calendar\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t<br>May</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-2.html\">Diversity in Building Celebrated by Builderrine</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Builderrine will connect with 10000 people from 90 companies who work on its’ projects each day...</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"read_more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Read Article</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<article class=\"blog_post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post_img\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-1.html\"><img src=\"images/blog/b7.png\" alt=\"img\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"calendar\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>May</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-1.html\">Company Receives Recognition for Excellence</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>The construction industry has the capacity to absorb more people into the workforce...</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"read_more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Read Article</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"patner\">
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/1.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/2.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/3.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/4.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/5.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t\t<img src=\"images/patner/new_patner/6.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<!-- Footer 1 -->
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"footer_above\" style=\"background-image: url('images/footer4.jpg');\">
\t\t\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer_widget footer_widget_padding\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\t\t\t\tÀ propos de STRAM
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>{{acceuil.getDescriptionSTram}}.<br>
\t\t\t\t\t\t\t\t\t\t\t\tIls ont besoin des Services de Construction STRAM !</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"subscribe\">
\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-2 mr-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\">S'abonner</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer_widget footer_links\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\t\t\t\tNos Services
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"footer_menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Sols techniques</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Réparations & renforts de structure</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Étanchéité & Imperméabilisation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Traitement des joints</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Centrales photovoltaiques</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Études & Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Peinture</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer_widget footer_links\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\t\t\t\tliens
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"footer_menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/app_qui_sommes_nous\">Qui Sommes-nous?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/projets\">Projets</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/clients\">Clients</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/carriere\">Carrière</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/contact\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\" style=\"background-color:#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{acceuil.getAdresseContact}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>info@stram.tn</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(+216) {{acceuil.getNumrContact}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fax\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(+216) 71 432 112
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer_bottom\" style=\"background-color:#D6D8DA\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"footer_bottom_inner\">
\t\t\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/\"><img src=\"images/stram-logo.png\" alt=\"Logo\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t\t\t\t<p style=\"color:#0D2C4A\">

\t\t\t\t\t\t\t\t\t\t\t<a>Copyright @ 2023 Site developed by
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://www.sbc.tn/bienvenue/#/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSmart Business Challenge
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"totop\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-ios-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</body>
\t\t\t\t</html>

\t\t\t</body>
\t\t</html>
\t</footer>

\t<div class=\"slide_navi\">
\t\t<div class=\"side_footer_social\">
\t\t\t<ul class=\"bottom_social\">
\t\t\t\t<li class=\"facebook\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"twitter\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"dribbble\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-dribbble-outline\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"instagram\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-instagram-outline\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"linkedin\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ion-social-linkedin-outline\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

</div>


<!-- All JavaScript Files -->
<script src=\"js/jquery-3.6.0.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"plugins/swiper/swiper-bundle.min.js\"></script>

<script src=\"plugins/menu/ma5-menu.min.js\"></script>
<script src=\"plugins/owlcarousel/owl.carousel.min.js\"></script>

<!-- Select2 -->
<script src=\"plugins/select2/js/select2.min.js\"></script>

<!-- Isotope -->
<script src=\"plugins/isotope/isotope.pkgd.min.js\"></script>
<script src=\"plugins/isotope/imagesloaded.pkgd.min.js\"></script>

<script src=\"plugins/aos/aos.js\"></script>
<script src=\"js/funfacts.js\"></script>
<script src=\"js/custom.js\"></script></body></html>
", "baseFront.html.twig", "C:\\Users\\oumei\\OneDrive\\Bureau\\Stram_WebSite\\templates\\baseFront.html.twig");
    }
}
