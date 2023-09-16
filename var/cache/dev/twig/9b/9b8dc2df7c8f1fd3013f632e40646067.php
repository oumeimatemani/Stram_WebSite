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

        echo "Nouveau Projet
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
\t\t\t\t\t\t<a href=\"/admin\">Dashboard</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"breadcrumb-item active\">Projet</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t            <div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Ajouter un nouveau projet</h5>
\t\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["success"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
\t\t\t\t\t\t\t";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">titre *</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 37, $this->source); })()), "titre", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 39
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39), 'errors')) {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 41, $this->source); })()), "titre", [], "any", false, false, false, 41), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Maître d'ouvrage *</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 50, $this->source); })()), "proprietaire", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 52
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 52, $this->source); })()), "proprietaire", [], "any", false, false, false, 52), 'errors')) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 54, $this->source); })()), "proprietaire", [], "any", false, false, false, 54), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t\t\t</div>

                                <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\">Afficher le project dans le site</label>
\t\t\t\t\t\t\t\t</div>

                                <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\">Afficher dans la page d'accueil</label>
\t\t\t\t\t\t\t\t</div>
                  
\t\t\t\t\t\t\t    <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\t\t\tchoisir une image</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 71, $this->source); })()), "image", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

                                <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Description</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 80
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'errors')) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t\t</div>

                                <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Date de projet</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 90, $this->source); })()), "date", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 92
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 92, $this->source); })()), "date", [], "any", false, false, false, 92), 'errors')) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 94, $this->source); })()), "date", [], "any", false, false, false, 94), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t\t\t</div>

                               <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Métiers</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 102, $this->source); })()), "metiers", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 105
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 105, $this->source); })()), "metiers", [], "any", false, false, false, 105), 'errors')) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 107, $this->source); })()), "metiers", [], "any", false, false, false, 107), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t\t\t\t\t</div>


                               <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Gallerie</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 116, $this->source); })()), "gallerie", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 118
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 118, $this->source); })()), "gallerie", [], "any", false, false, false, 118), 'errors')) {
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 120, $this->source); })()), "gallerie", [], "any", false, false, false, 120), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/projets\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">Ajouter </button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 134
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["P"]) || array_key_exists("P", $context) ? $context["P"] : (function () { throw new RuntimeError('Variable "P" does not exist.', 134, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
           </div>
\t    </section>

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
        return array (  303 => 134,  290 => 123,  284 => 120,  281 => 119,  279 => 118,  274 => 116,  266 => 110,  260 => 107,  257 => 106,  255 => 105,  249 => 102,  242 => 97,  236 => 94,  233 => 93,  231 => 92,  226 => 90,  219 => 85,  213 => 82,  210 => 81,  208 => 80,  203 => 78,  193 => 71,  177 => 57,  171 => 54,  168 => 53,  166 => 52,  161 => 50,  153 => 44,  147 => 41,  144 => 40,  142 => 39,  137 => 37,  129 => 32,  126 => 31,  117 => 29,  113 => 28,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Nouveau Projet
{% endblock %}

{% block body %}
\t<main id=\"main\" class=\"main\">
\t\t<div class=\"pagetitle\">
\t\t\t<h1>
\t\t\t\tNouveau projet</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/admin\">Dashboard</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"breadcrumb-item active\">Projet</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t            <div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Ajouter un nouveau projet</h5>
\t\t\t\t\t\t\t{% for flash_message in app.flashes('success') %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ flash_message }}</div>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{{ form_start(P, {attr:{novalidate:'novalidate'}}) }}

\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">titre *</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(P.titre,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if form_errors(P.titre) %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(P.titre) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Maître d'ouvrage *</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(P.proprietaire,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if form_errors(P.proprietaire) %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(P.proprietaire) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>

                                <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\">Afficher le project dans le site</label>
\t\t\t\t\t\t\t\t</div>

                                <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\">Afficher dans la page d'accueil</label>
\t\t\t\t\t\t\t\t</div>
                  
\t\t\t\t\t\t\t    <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\t\t\tchoisir une image</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(P.image,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

                                <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Description</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(P.description,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if form_errors(P.description) %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(P.description) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>

                                <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Date de projet</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(P.date,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if form_errors(P.date) %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(P.date) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>

                               <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Métiers</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(P.metiers, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% if form_errors(P.metiers) %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(P.metiers) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>


                               <div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Gallerie</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(P.gallerie,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% if form_errors(P.gallerie) %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(P.gallerie) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/projets\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">Ajouter </button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{{ form_end(P) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
           </div>
\t    </section>

</main>{% endblock %}
", "projet/ajoutProjet.html.twig", "C:\\Users\\oumei\\OneDrive\\Bureau\\Stram_WebSite\\templates\\projet\\ajoutProjet.html.twig");
    }
}
