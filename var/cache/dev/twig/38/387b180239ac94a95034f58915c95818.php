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

/* clients/index.html.twig */
class __TwigTemplate_4f75d730f4b820e0e6f1c999c59b4337 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">
\t<head>
\t\t<!-- Meta Tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
\t\t<meta name=\"description\" content=\"Nos Clients\">
\t\t<meta
\t\tname=\"author\" content=\"\">

\t\t<!-- Page Title -->
\t\t<title>Nos Clients</title>

\t\t<!-- Favicon and touch Icons -->
\t\t<link href=\"images/client.png\" rel=\"shortcut icon\" type=\"image/png\">
\t\t<link href=\"images/apple-touch-icon.png\" rel=\"apple-touch-icon\">
\t\t<link href=\"images/apple-touch-icon-72x72.png\" rel=\"apple-touch-icon\" sizes=\"72x72\">
\t\t<link href=\"images/apple-touch-icon-114x114.png\" rel=\"apple-touch-icon\" sizes=\"114x114\">
\t\t<link
\t\thref=\"images/apple-touch-icon-144x144.png\" rel=\"apple-touch-icon\" sizes=\"144x144\">

\t\t<!-- Lead Style -->
\t\t<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">
\t</head>

\t<body
\t\tclass=\"dark-theme\">
\t\t<!--PreLoader-->
\t\t<div id=\"preloader\" class=\"loader_show\">
\t\t\t<div class=\"loader-wrap\">
\t\t\t\t<div class=\"loader\">
\t\t\t\t\t<div class=\"loader-inner\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--PreLoader Ends-->


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
        // line 104
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

\t\t<!-- Page Header -->
\t\t<div class=\"page_header\">
\t\t\t<div class=\"page_header_content\" style=\"background-image: url('images/bg11.jpg')\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Clients</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<h2 class=\"heading\">Nos Clients</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"main_wrapper\">
\t\t\t<div class=\"section team\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/6.png\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">CEO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/8.png\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Kiara Nordstorm</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">Constructor</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Christpher Neel</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>Constructor</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/7.png\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Christpher Neel</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">Constructor</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Christpher Neel</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>Constructor</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/team-5.jpg\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">CEO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/team-6.jpg\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">CEO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/team-4.jpg\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Kiara Nordstorm</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">CEO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"pagination-div\">
\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion-chevron-left\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"page-number current\" href=\"#\">1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"page-number\" href=\"#\">2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"page-number\" href=\"#\">3</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion-chevron-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-- Footer 1 -->
\t\t<footer class=\"footer\">
\t\t\t<div class=\"footer_above\" style=\"background-image: url('images/footer4.jpg');\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"footer_widget footer_widget_padding\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\tÀ propos de STRAM
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>Ceux qui recherchent des projets extraordinaires nécessitent de la vision et de la précision pour être exceptionnels.<br>
\t\t\t\t\t\t\t\t\tIls ont besoin des Services de Construction STRAM !</p>
\t\t\t\t\t\t\t\t<div class=\"subscribe\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-2 mr-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\">S'abonner</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"footer_widget footer_links\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\tNos Services
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t\t\t<ul class=\"footer_menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Sols techniques</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Réparations & renforts de structure</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Étanchéité & Imperméabilisation</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Traitement des joints</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Centrales photovoltaiques</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Études & Expertise</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Peinture</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"footer_widget footer_links\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\tliens
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t\t\t<ul class=\"footer_menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/app_qui_sommes_nous\">Qui Sommes-nous?</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/projets\">Projets</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/clients\">Clients</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/carriere\">Carrière</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/contact\">Contact</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\" style=\"background-color:#\">
\t\t\t\t\t\t\t<div class=\"footer_widget\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>19 Bis Avenue Habib Bourgiba Mégrine 2033</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>info@stram.tn</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(+216) 71 432 144</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fax\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(+216) 71 432 112
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer_bottom\" style=\"background-color:#D6D8DA\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer_bottom_inner\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"/\"><img src=\"images/stram-logo.png\" alt=\"Logo\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t<p style=\"color:#0D2C4A\">

\t\t\t\t\t\t\t\t<a>Copyright @ 2023 Site developed by
\t\t\t\t\t\t\t\t\t<a href=\"http://www.sbc.tn/bienvenue/#/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\tSmart Business Challenge
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"totop\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ion-ios-arrow-up\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</body>
\t</body>
</html></body></html></footer><div class=\"slide_navi\"><div class=\"side_footer_social\"><ul class=\"bottom_social\">
<li class=\"facebook\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-facebook\"></i>
\t</a>
</li>
<li class=\"twitter\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-twitter\"></i>
\t</a>
</li>
<li class=\"dribbble\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-dribbble-outline\"></i>
\t</a>
</li>
<li class=\"instagram\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-instagram-outline\"></i>
\t</a>
</li>
<li class=\"linkedin\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-linkedin-outline\"></i>
\t</a>
</li></ul></div></div><!-- All JavaScript Files --><script src=\"js/jquery-3.6.0.min.js\"></script><script src=\"js/bootstrap.min.js\"></script><script src=\"plugins/swiper/swiper-bundle.min.js\"></script><script src=\"plugins/menu/ma5-menu.min.js\"></script><script src=\"plugins/owlcarousel/owl.carousel.min.js\"></script><!-- Select2 --><script src=\"plugins/select2/js/select2.min.js\"></script><script src=\"plugins/isotope/isotope.pkgd.min.js\"></script><script src=\"plugins/aos/aos.js\"></script><script src=\"js/custom.js\"></script></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 104,  43 => 1,);
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
\t\t<meta name=\"description\" content=\"Nos Clients\">
\t\t<meta
\t\tname=\"author\" content=\"\">

\t\t<!-- Page Title -->
\t\t<title>Nos Clients</title>

\t\t<!-- Favicon and touch Icons -->
\t\t<link href=\"images/client.png\" rel=\"shortcut icon\" type=\"image/png\">
\t\t<link href=\"images/apple-touch-icon.png\" rel=\"apple-touch-icon\">
\t\t<link href=\"images/apple-touch-icon-72x72.png\" rel=\"apple-touch-icon\" sizes=\"72x72\">
\t\t<link href=\"images/apple-touch-icon-114x114.png\" rel=\"apple-touch-icon\" sizes=\"114x114\">
\t\t<link
\t\thref=\"images/apple-touch-icon-144x144.png\" rel=\"apple-touch-icon\" sizes=\"144x144\">

\t\t<!-- Lead Style -->
\t\t<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">
\t</head>

\t<body
\t\tclass=\"dark-theme\">
\t\t<!--PreLoader-->
\t\t<div id=\"preloader\" class=\"loader_show\">
\t\t\t<div class=\"loader-wrap\">
\t\t\t\t<div class=\"loader\">
\t\t\t\t\t<div class=\"loader-inner\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--PreLoader Ends-->


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

\t\t<!-- Page Header -->
\t\t<div class=\"page_header\">
\t\t\t<div class=\"page_header_content\" style=\"background-image: url('images/bg11.jpg')\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Clients</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<h2 class=\"heading\">Nos Clients</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"main_wrapper\">
\t\t\t<div class=\"section team\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/6.png\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">CEO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/8.png\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Kiara Nordstorm</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">Constructor</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Christpher Neel</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>Constructor</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/7.png\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Christpher Neel</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">Constructor</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Christpher Neel</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>Constructor</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/team-5.jpg\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">CEO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/team-6.jpg\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">CEO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"team_construction\">
\t\t\t\t\t\t\t\t<figure class=\"team_construction_inner\">
\t\t\t\t\t\t\t\t\t<a href=\"team.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/team/team-4.jpg\" alt=\"Oscar Holland\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"team-box__info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/team\" class=\"name h5\">Kiara Nordstorm</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"position\">CEO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"team_hover_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"speakers-social-lists-simple\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fa fa-facebook-square\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://linkedin.com/\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<h2 class=\"speaker-title-simple\">
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Oscar Holland</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>CEO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"pagination-div\">
\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion-chevron-left\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"page-number current\" href=\"#\">1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"page-number\" href=\"#\">2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"page-number\" href=\"#\">3</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion-chevron-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-- Footer 1 -->
\t\t<footer class=\"footer\">
\t\t\t<div class=\"footer_above\" style=\"background-image: url('images/footer4.jpg');\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"footer_widget footer_widget_padding\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\tÀ propos de STRAM
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>Ceux qui recherchent des projets extraordinaires nécessitent de la vision et de la précision pour être exceptionnels.<br>
\t\t\t\t\t\t\t\t\tIls ont besoin des Services de Construction STRAM !</p>
\t\t\t\t\t\t\t\t<div class=\"subscribe\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-2 mr-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\">S'abonner</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"footer_widget footer_links\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\tNos Services
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t\t\t<ul class=\"footer_menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Sols techniques</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Réparations & renforts de structure</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">Étanchéité & Imperméabilisation</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Traitement des joints</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Centrales photovoltaiques</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project-2.html\">Études & Expertise</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"project.html\">Peinture</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"footer_widget footer_links\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\tliens
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t\t\t<ul class=\"footer_menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/app_qui_sommes_nous\">Qui Sommes-nous?</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/projets\">Projets</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/clients\">Clients</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/carriere\">Carrière</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/contact\">Contact</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\" style=\"background-color:#\">
\t\t\t\t\t\t\t<div class=\"footer_widget\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\">
\t\t\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>19 Bis Avenue Habib Bourgiba Mégrine 2033</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>info@stram.tn</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(+216) 71 432 144</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fax\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(+216) 71 432 112
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer_bottom\" style=\"background-color:#D6D8DA\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer_bottom_inner\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"/\"><img src=\"images/stram-logo.png\" alt=\"Logo\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t<p style=\"color:#0D2C4A\">

\t\t\t\t\t\t\t\t<a>Copyright @ 2023 Site developed by
\t\t\t\t\t\t\t\t\t<a href=\"http://www.sbc.tn/bienvenue/#/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\tSmart Business Challenge
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"totop\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ion-ios-arrow-up\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</body>
\t</body>
</html></body></html></footer><div class=\"slide_navi\"><div class=\"side_footer_social\"><ul class=\"bottom_social\">
<li class=\"facebook\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-facebook\"></i>
\t</a>
</li>
<li class=\"twitter\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-twitter\"></i>
\t</a>
</li>
<li class=\"dribbble\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-dribbble-outline\"></i>
\t</a>
</li>
<li class=\"instagram\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-instagram-outline\"></i>
\t</a>
</li>
<li class=\"linkedin\">
\t<a href=\"#\">
\t\t<i class=\"ion-social-linkedin-outline\"></i>
\t</a>
</li></ul></div></div><!-- All JavaScript Files --><script src=\"js/jquery-3.6.0.min.js\"></script><script src=\"js/bootstrap.min.js\"></script><script src=\"plugins/swiper/swiper-bundle.min.js\"></script><script src=\"plugins/menu/ma5-menu.min.js\"></script><script src=\"plugins/owlcarousel/owl.carousel.min.js\"></script><!-- Select2 --><script src=\"plugins/select2/js/select2.min.js\"></script><script src=\"plugins/isotope/isotope.pkgd.min.js\"></script><script src=\"plugins/aos/aos.js\"></script><script src=\"js/custom.js\"></script></body></html>
", "clients/index.html.twig", "C:\\Users\\oumei\\Desktop\\Stram_WebSite\\templates\\clients\\index.html.twig");
    }
}
