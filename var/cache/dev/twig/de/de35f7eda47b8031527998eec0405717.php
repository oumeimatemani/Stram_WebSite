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

/* base.html.twig */
class __TwigTemplate_b10fca2267c5d7f77e9458647d87674a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link
\t\thref=\"images/shadow_icon4.png\" rel=\"shortcut icon\" type=\"image/png\">

\t\t";
        // line 13
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
\t\t";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "\t</head>
\t<body>

\t\t";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "\t\t<!-- ======= Sidebar ======= -->
\t\t<aside id=\"sidebar\" class=\"sidebar\" style=\"background-color: #99A7B2\">

\t\t\t<ul class=\" sidebar-nav\" id=\" sidebar-nav\">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"/admin\">
\t\t\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t\t\t<span style=\"color:#0e1641\">Dashboard</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- Dashboard-->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"/metiers\" style=\"background-color: #0e1641\">
\t\t\t\t\t\t<i class=\"ri-account-circle-line\"></i>
\t\t\t\t\t\t<span style=\"color:#DEE9F3\">Gestion métiers</span>
\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/metiers\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">affichage des métiers</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\" ";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterMetier");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">Ajouter métier</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- gestion métiers -->


\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"/projets\" style=\"background-color: #0e1641\">
\t\t\t\t\t\t<i class=\"bi bi-journal-text\"></i>
\t\t\t\t\t\t<span style=\"color:#DEE9F3\">Gestion projets
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/projets\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark\">affichage des projets</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterProjet");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3, text-color: dark\">Ajouter projet</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- gestion projets  -->


\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\" style=\"background-color: #0e1641\">
\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t<span style=\"color:#DEE9F3\">Gestion Nouveauté</span>
\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">événements</span>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">Actualités</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</li>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</body>
\t</body>
</html></li><!-- gestion Nouveauté  --><li class=\"nav-item\">
<a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"/clientsAdmin\" style=\"background-color: #0e1641\">
\t<i class=\"bi bi-gem\"></i>
\t<span style=\"color:#DEE9F3\">gestion clients</span>
\t<i class=\"bi bi-chevron-down ms-auto\"></i>
</a>
<ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t<li>
\t\t<a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clients_admin");
        echo "\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">affichage des clients</span>
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterClient");
        echo "\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">ajouter client</span>
\t\t</a>
\t</li>

</ul></li><!-- gestion clients--><li class=\"nav-item\">
<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\" style=\"background-color: #0e1641\">
\t<i class=\"bi bi-menu-button-wide\"></i>
\t<span style=\"color:#DEE9F3\">Gestion Carriéres</span>
\t<i class=\"bi bi-chevron-down ms-auto\"></i>
</a>
<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">candidatures spontanées</span>
\t\t</a>
\t</li>

\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">offres d'emploi</span>
\t\t</a>
\t</li>
</ul></li><!-- gestion Carriéres --><li class=\"nav-item\">
<a class=\"nav-link collapsed\" data-bs-target=\"#icons-acceuil\" data-bs-toggle=\"collapse\" style=\"background-color: #0e1641\">
\t<i class=\"bi bi-gem\"></i>
\t<span style=\"color:#DEE9F3\">gestion affichage
\t</span>
\t<i class=\"bi bi-chevron-down ms-auto\"></i>
</a>
<ul id=\"icons-acceuil\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">Acceuil</span>
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">STRAM</span>
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">Services</span>
\t\t</a>
\t</li>
</ul></li><h2>-----------------------</h2><li class=\"nav-item\">
<a class=\"nav-link \" href=\"/messages\">
\t<i class=\"bi bi-grid\"></i>
\t<span style=\"color:#0e1641\">Messages</span>
</a></li></aside><!-- End Sidebar-->";
        // line 226
        $this->displayBlock('sidebar', $context, $blocks);
        $this->displayBlock('body', $context, $blocks);
        $this->displayBlock('footer', $context, $blocks);
        // line 244
        echo "</body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "
\t\t\t<!-- ======= Header ======= -->
\t\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\" style=\"background-color: #B5BEC6;  height:4rem ;\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/admin\" class=\"light_mode_logo\"><img src=\"images/stram-logo.png\" alt=\"logo\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t<a class=\"logo d-flex align-items-center\" href=\"/admin\">
\t\t\t\t\t\t<img src=\"assets/img/stram-logo.png\" alt=\"\" style=\"width=20 , height= 80\">
\t\t\t\t\t\t<span class=\"d-none d-lg-block\"></span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!-- End Header -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 226
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

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

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        echo "<div class=\"footer\">
<div class=\"footer_bottom\">
\t<div class=\"container\">
\t\t<div class=\"footer_bottom_inner\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"index.html\"><img src=\"images/stram-logo.png\" alt=\"Logo\"></a>
\t\t\t</div>
\t\t\t<div class=\"copyright\">
\t\t\t\t<p style=\"color:#0B0B53\">&copy;2023 Site developed by</p>
\t\t\t\t<a href=\"http://www.sbc.tn/bienvenue/#/\">Smart Business Challenge</a>
\t\t\t</div>
\t\t\t<div class=\"totop\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"ion-ios-arrow-up\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 226,  417 => 45,  407 => 44,  395 => 39,  389 => 36,  385 => 35,  381 => 34,  377 => 33,  373 => 32,  369 => 31,  365 => 30,  360 => 29,  350 => 28,  337 => 24,  331 => 21,  326 => 19,  322 => 18,  318 => 17,  314 => 16,  310 => 15,  305 => 14,  295 => 13,  275 => 6,  264 => 244,  260 => 226,  201 => 170,  192 => 164,  141 => 116,  110 => 88,  80 => 60,  78 => 44,  73 => 41,  71 => 28,  68 => 27,  65 => 13,  59 => 8,  57 => 6,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\thref=\"images/shadow_icon4.png\" rel=\"shortcut icon\" type=\"image/png\">

\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t<link href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">

\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t<script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/chart.js/chart.umd.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset ('assets/vendor/quill/quill.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset ('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
\t\t\t<script src=\"{{ asset ('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset ('assets/vendor/php-email-form/validate.js') }}\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"{{ asset('assets/js/main.js') }}\"></script>
\t\t{% endblock %}
\t</head>
\t<body>

\t\t{% block header %}

\t\t\t<!-- ======= Header ======= -->
\t\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\" style=\"background-color: #B5BEC6;  height:4rem ;\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/admin\" class=\"light_mode_logo\"><img src=\"images/stram-logo.png\" alt=\"logo\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t<a class=\"logo d-flex align-items-center\" href=\"/admin\">
\t\t\t\t\t\t<img src=\"assets/img/stram-logo.png\" alt=\"\" style=\"width=20 , height= 80\">
\t\t\t\t\t\t<span class=\"d-none d-lg-block\"></span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!-- End Header -->
\t\t{% endblock %}
\t\t<!-- ======= Sidebar ======= -->
\t\t<aside id=\"sidebar\" class=\"sidebar\" style=\"background-color: #99A7B2\">

\t\t\t<ul class=\" sidebar-nav\" id=\" sidebar-nav\">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"/admin\">
\t\t\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t\t\t<span style=\"color:#0e1641\">Dashboard</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- Dashboard-->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"/metiers\" style=\"background-color: #0e1641\">
\t\t\t\t\t\t<i class=\"ri-account-circle-line\"></i>
\t\t\t\t\t\t<span style=\"color:#DEE9F3\">Gestion métiers</span>
\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/metiers\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">affichage des métiers</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\" {{path('ajouterMetier') }}\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">Ajouter métier</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- gestion métiers -->


\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"/projets\" style=\"background-color: #0e1641\">
\t\t\t\t\t\t<i class=\"bi bi-journal-text\"></i>
\t\t\t\t\t\t<span style=\"color:#DEE9F3\">Gestion projets
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/projets\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark\">affichage des projets</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('ajouterProjet') }}\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3, text-color: dark\">Ajouter projet</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- gestion projets  -->


\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\" style=\"background-color: #0e1641\">
\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t<span style=\"color:#DEE9F3\">Gestion Nouveauté</span>
\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">événements</span>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">Actualités</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</li>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</body>
\t</body>
</html></li><!-- gestion Nouveauté  --><li class=\"nav-item\">
<a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"/clientsAdmin\" style=\"background-color: #0e1641\">
\t<i class=\"bi bi-gem\"></i>
\t<span style=\"color:#DEE9F3\">gestion clients</span>
\t<i class=\"bi bi-chevron-down ms-auto\"></i>
</a>
<ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t<li>
\t\t<a href=\"{{ path('clients_admin') }}\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">affichage des clients</span>
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('ajouterClient') }}\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">ajouter client</span>
\t\t</a>
\t</li>

</ul></li><!-- gestion clients--><li class=\"nav-item\">
<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\" style=\"background-color: #0e1641\">
\t<i class=\"bi bi-menu-button-wide\"></i>
\t<span style=\"color:#DEE9F3\">Gestion Carriéres</span>
\t<i class=\"bi bi-chevron-down ms-auto\"></i>
</a>
<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">candidatures spontanées</span>
\t\t</a>
\t</li>

\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">offres d'emploi</span>
\t\t</a>
\t</li>
</ul></li><!-- gestion Carriéres --><li class=\"nav-item\">
<a class=\"nav-link collapsed\" data-bs-target=\"#icons-acceuil\" data-bs-toggle=\"collapse\" style=\"background-color: #0e1641\">
\t<i class=\"bi bi-gem\"></i>
\t<span style=\"color:#DEE9F3\">gestion affichage
\t</span>
\t<i class=\"bi bi-chevron-down ms-auto\"></i>
</a>
<ul id=\"icons-acceuil\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">Acceuil</span>
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">STRAM</span>
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"\">
\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t<span style=\"color:#DEE9F3 , text-color: dark \">Services</span>
\t\t</a>
\t</li>
</ul></li><h2>-----------------------</h2><li class=\"nav-item\">
<a class=\"nav-link \" href=\"/messages\">
\t<i class=\"bi bi-grid\"></i>
\t<span style=\"color:#0e1641\">Messages</span>
</a></li></aside><!-- End Sidebar-->{% block sidebar %}{% endblock %}{% block body %}{% endblock %}{% block footer %}<div class=\"footer\">
<div class=\"footer_bottom\">
\t<div class=\"container\">
\t\t<div class=\"footer_bottom_inner\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"index.html\"><img src=\"images/stram-logo.png\" alt=\"Logo\"></a>
\t\t\t</div>
\t\t\t<div class=\"copyright\">
\t\t\t\t<p style=\"color:#0B0B53\">&copy;2023 Site developed by</p>
\t\t\t\t<a href=\"http://www.sbc.tn/bienvenue/#/\">Smart Business Challenge</a>
\t\t\t</div>
\t\t\t<div class=\"totop\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"ion-ios-arrow-up\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div></div>{% endblock %}</body></html>
", "base.html.twig", "C:\\Users\\anest\\OneDrive\\Bureau\\Stram_WebSite\\templates\\base.html.twig");
    }
}
