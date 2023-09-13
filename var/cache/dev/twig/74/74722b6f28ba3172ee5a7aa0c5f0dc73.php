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

/* clients/ajoutClient.html.twig */
class __TwigTemplate_4733fa2802bdb7010b6e2c8814e4fb8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/ajoutClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/ajoutClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clients/ajoutClient.html.twig", 1);
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
\t\t\t\tNouveau client</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">Client</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Ajouter un nouveau client</h5>
\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
\t\t\t\t\t\t\t";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">secteur</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 50, $this->source); })()), "secteur", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 52
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 52, $this->source); })()), "secteur", [], "any", false, false, false, 52), 'errors')) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 54, $this->source); })()), "secteur", [], "any", false, false, false, 54), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">service
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 64, $this->source); })()), "service", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 66
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 66, $this->source); })()), "service", [], "any", false, false, false, 66), 'errors')) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 68, $this->source); })()), "service", [], "any", false, false, false, 68), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\t\tchoisir un logo</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 78, $this->source); })()), "logo", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["C"]) || array_key_exists("C", $context) ? $context["C"] : (function () { throw new RuntimeError('Variable "C" does not exist.', 90, $this->source); })()), 'form_end');
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
        return "clients/ajoutClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 90,  211 => 78,  202 => 71,  196 => 68,  193 => 67,  191 => 66,  186 => 64,  177 => 57,  171 => 54,  168 => 53,  166 => 52,  161 => 50,  154 => 45,  148 => 42,  145 => 41,  143 => 40,  138 => 38,  130 => 33,  127 => 32,  118 => 30,  114 => 29,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
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
\t\t\t\tNouveau client</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">Client</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Ajouter un nouveau client</h5>
\t\t\t\t\t\t\t{% for flash_message in app.flashes('success') %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ flash_message }}</div>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{{ form_start(C, {attr:{novalidate:'novalidate'}}) }}
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
\t\t\t\t\t\t\t\t<label for=\"inputText\" class=\"col-sm-4 col-form-label\">secteur</label>
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
\t\t\t\t\t\t\t\t<label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">
\t\t\t\t\t\t\t\t\tchoisir un logo</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t{{ form_widget(C.logo,{'attr':{'class':'form-control'}}) }}

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"col-sm-4 btn btn-primary\">Ajouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(C) }}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t</div>
\t</section>

</main>{% endblock %}
", "clients/ajoutClient.html.twig", "C:\\Users\\anest\\OneDrive\\Bureau\\Stram_WebSite\\templates\\clients\\ajoutClient.html.twig");
    }
}
