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

/* clients/modifClient.html.twig */
class __TwigTemplate_7b4e4d762a3a41c4466a8dee594e937f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/modifClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/modifClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clients/modifClient.html.twig", 1);
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

        echo "modifier clients
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Formualire de modification Client</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">Clients</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t\t<!-- End Page Title -->

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">modifier Client</h5>

\t\t\t\t\t\t\t<!-- General Form Elements -->
\t\t\t\t\t\t\t";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 40
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'errors')) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Secteur
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 52, $this->source); })()), "secteur", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 54
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 54, $this->source); })()), "secteur", [], "any", false, false, false, 54), 'errors')) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 56, $this->source); })()), "secteur", [], "any", false, false, false, 56), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">service
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 65, $this->source); })()), "service", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 67
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 67, $this->source); })()), "service", [], "any", false, false, false, 67), 'errors')) {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 69, $this->source); })()), "service", [], "any", false, false, false, 69), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 77, $this->source); })()), "logo", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">modifier
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 87, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t</section>

\t</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "clients/modifClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 87,  197 => 77,  190 => 72,  184 => 69,  181 => 68,  179 => 67,  174 => 65,  166 => 59,  160 => 56,  157 => 55,  155 => 54,  150 => 52,  141 => 45,  135 => 42,  132 => 41,  130 => 40,  125 => 38,  116 => 32,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}modifier clients
{% endblock %}

{% block body %}
\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Formualire de modification Client</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">Clients</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t\t<!-- End Page Title -->

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">modifier Client</h5>

\t\t\t\t\t\t\t<!-- General Form Elements -->
\t\t\t\t\t\t\t{{ form_start(C,{attr:{novalidate:'novalidate'}}) }}

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t{{ form_widget(C.nom,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if form_errors(C.nom) %}
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t{{ form_errors(C.nom) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Secteur
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t{{ form_widget(C.secteur,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if form_errors(C.secteur) %}
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t{{ form_errors(C.secteur) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">service
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t{{ form_widget(C.service,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if form_errors(C.service) %}
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t{{ form_errors(C.service) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t{{ form_widget(C.logo,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">modifier
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(C) }}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t</section>

\t</main>

{% endblock %}
", "clients/modifClient.html.twig", "C:\\Users\\oumei\\OneDrive\\Bureau\\Stram_WebSite\\templates\\clients\\modifClient.html.twig");
    }
}
