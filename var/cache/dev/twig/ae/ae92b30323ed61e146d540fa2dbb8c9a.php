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

/* metier/metierBack.html.twig */
class __TwigTemplate_61c2cb9e6ca73457ae2bb2a5cb79fed3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/metierBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/metierBack.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metier/metierBack.html.twig", 1);
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

        echo "Gestionnaire des métiers
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
        echo "
\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Gestionnaire des métiers
\t\t\t</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/admin\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/metiers\">Metiers</a>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t\t<!-- End Page Title -->

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\" style=\"background-color:#0e1641\">

\t\t\t\t\t\t\t<h5 class=\"card-title\" style=\"color:#DEE9F3\">
\t\t\t\t\t\t\t\t<strong>Liste des métiers AGM
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t<table class=\"table\" style=\"color:#DEE9F3\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">id</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">titre</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Description</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Image</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 50
        if ((twig_length_filter($this->env, (isset($context["listM"]) || array_key_exists("listM", $context) ? $context["listM"] : (function () { throw new RuntimeError('Variable "listM" does not exist.', 50, $this->source); })())) == 0)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center\">Liste vide</p>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listM"]) || array_key_exists("listM", $context) ? $context["listM"] : (function () { throw new RuntimeError('Variable "listM" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "titre", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "description", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "image", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"width: 75px; height: 55px; padding: 5px;\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["m"], "image", [], "any", false, false, false, 61))), "html", null, true);
            echo "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierMetier", ["id" => twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pen\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppressionMetier", ["id" => twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "

\t\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterMetier");
        echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" style=\" background-color:#ff9919 \">ajouter un métier
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
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
        return "metier/metierBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 85,  198 => 80,  181 => 69,  172 => 63,  167 => 61,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  147 => 55,  143 => 54,  140 => 53,  136 => 51,  134 => 50,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestionnaire des métiers
{% endblock %}

{% block body %}

\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Gestionnaire des métiers
\t\t\t</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/admin\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/metiers\">Metiers</a>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t\t<!-- End Page Title -->

\t\t<section class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\" style=\"background-color:#0e1641\">

\t\t\t\t\t\t\t<h5 class=\"card-title\" style=\"color:#DEE9F3\">
\t\t\t\t\t\t\t\t<strong>Liste des métiers AGM
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t<table class=\"table\" style=\"color:#DEE9F3\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">id</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">titre</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Description</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Image</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t{% if listM | length == 0 %}
\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center\">Liste vide</p>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% for m in listM  %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{m.id}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{m.titre}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{m.description }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{m.image}}</td>

\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"width: 75px; height: 55px; padding: 5px;\" src=\"{{ asset('uploads/'~m.image) }}\"/></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('modifierMetier',{id:m.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pen\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('suppressionMetier',{id:m.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"{{ path('ajouterMetier') }}\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" style=\" background-color:#ff9919 \">ajouter un métier
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>


\t\t\t</div>
\t\t</section>

\t</main>

{% endblock %}
", "metier/metierBack.html.twig", "C:\\Users\\oumei\\Desktop\\Stram_WebSite\\templates\\metier\\metierBack.html.twig");
    }
}
