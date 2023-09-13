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

/* metier/ajoutMetier.html.twig */
class __TwigTemplate_238a127d6c29e64a071ae858d857e243 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/ajoutMetier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/ajoutMetier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metier/ajoutMetier.html.twig", 1);
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

        echo "Nouveau métier
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
\t\t\t<h1>Nouveau métier</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">Metier</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Ajouter un nouveau métier</h5>
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">titre
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 37, $this->source); })()), "titre", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 39
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39), 'errors')) {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 41, $this->source); })()), "titre", [], "any", false, false, false, 41), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">description</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 51
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'errors')) {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\t\tchoisir une image</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">Ajouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["M"]) || array_key_exists("M", $context) ? $context["M"] : (function () { throw new RuntimeError('Variable "M" does not exist.', 75, $this->source); })()), 'form_end');
        echo "

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
        return "metier/ajoutMetier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 75,  185 => 63,  176 => 56,  170 => 53,  167 => 52,  165 => 51,  160 => 49,  153 => 44,  147 => 41,  144 => 40,  142 => 39,  137 => 37,  129 => 32,  126 => 31,  117 => 29,  113 => 28,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Nouveau métier
{% endblock %}

{% block body %}
\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Nouveau métier</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">Metier</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Ajouter un nouveau métier</h5>
\t\t\t\t\t\t\t{% for flash_message in app.flashes('success') %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ flash_message }}</div>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{{ form_start(M, {attr:{novalidate:'novalidate'}}) }}
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">titre
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t{{ form_widget(M.titre,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if form_errors(M.titre) %}
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t{{ form_errors(M.titre) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">description</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t{{ form_widget(M.description,{'attr':{'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if form_errors(M.description) %}
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t{{ form_errors(M.description) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\t\tchoisir une image</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t{{ form_widget(M.image,{'attr':{'class':'form-control'}}) }}

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">Ajouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(M) }}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t</div>
\t</section>

</main>{% endblock %}
", "metier/ajoutMetier.html.twig", "C:\\Users\\anest\\OneDrive\\Bureau\\Stram_WebSite\\templates\\metier\\ajoutMetier.html.twig");
    }
}
