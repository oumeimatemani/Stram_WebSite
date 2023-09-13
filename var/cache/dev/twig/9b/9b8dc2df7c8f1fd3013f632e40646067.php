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

/* projet/ajoutProjet.html.twig */
class __TwigTemplate_b09929d3c0fdfda0e752b28fd2a99265 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/ajoutProjet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/ajoutProjet.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/ajoutProjet.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ajouter Client
";
        
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
        echo "\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>
\t\t\t\tNouveau projet</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">Projet</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\"></h5>
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["success"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
\t\t\t\t\t\t";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">titre*
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 37, $this->source); })()), "titre", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 39
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39), 'errors')) {
            // line 40
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 41, $this->source); })()), "titre", [], "any", false, false, false, 41), 'errors');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Maître d'ouvrage*</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 49, $this->source); })()), "proprietaire", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 51
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 51, $this->source); })()), "proprietaire", [], "any", false, false, false, 51), 'errors')) {
            // line 52
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 53, $this->source); })()), "proprietaire", [], "any", false, false, false, 53), 'errors');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">description</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 64
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'errors')) {
            // line 65
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'errors');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\tchoisir une image</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 76, $this->source); })()), "image", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Métiers</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 85, $this->source); })()), "metiers", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Date projet</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 92, $this->source); })()), "date", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "datepicker"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\tChoisir les images de la galerie
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 101, $this->source); })()), "gallerie", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "multiple" => "multiple"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 105, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<h5 class=\"card-title\">Ajouter un nouveau Projet

\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">Ajouter
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t</div>
\t</section>

</main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "projet/ajoutProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 105,  243 => 101,  231 => 92,  221 => 85,  209 => 76,  200 => 69,  194 => 66,  191 => 65,  189 => 64,  184 => 62,  176 => 56,  170 => 53,  167 => 52,  165 => 51,  160 => 49,  153 => 44,  147 => 41,  144 => 40,  142 => 39,  137 => 37,  129 => 32,  126 => 31,  117 => 29,  113 => 28,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}ajouter Client
{% endblock %}

{% block body %}
\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>
\t\t\t\tNouveau projet</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">Projet</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\"></h5>
\t\t\t\t\t\t{% for flash_message in app.flashes('success') %}
\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ flash_message }}</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{{ form_start(P, {attr:{novalidate:'novalidate'}}) }}
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">titre*
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(P.titre,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if form_errors(P.titre) %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t{{ form_errors(P.titre) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Maître d'ouvrage*</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(P.proprietaire,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if form_errors(P.proprietaire) %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t{{ form_errors(P.proprietaire) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">description</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(P.description,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if form_errors(P.description) %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t{{ form_errors(P.description) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\tchoisir une image</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(P.image,{'attr':{'class':'form-control'}}) }}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Métiers</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(P.metiers, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Date projet</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(P.date, {'attr': {'class': 'datepicker'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\tChoisir les images de la galerie
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(P.gallerie, {'attr': {'class': 'form-control', 'multiple': 'multiple'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{ form_end(P) }}

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<h5 class=\"card-title\">Ajouter un nouveau Projet

\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">Ajouter
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t</div>
\t</section>

</main>{% endblock %}
", "projet/ajoutProjet.html.twig", "C:\\Users\\oumei\\Desktop\\Stram_WebSite\\templates\\projet\\ajoutProjet.html.twig");
    }
}
