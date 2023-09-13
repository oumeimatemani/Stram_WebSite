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

/* clients/clientBack.html.twig */
class __TwigTemplate_522b96872b2e181d021f90398024d505 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/clientBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/clientBack.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clients/clientBack.html.twig", 1);
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

        echo "liste des Clients
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
\t\t\t<h1>Gestionnaire des clients
\t\t\t</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/admin\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/clientsAdmin\">Clients</a>
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
\t\t\t\t\t\t\t\t<strong>Liste des clients AGM</strong>
\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t<table class=\"table\" style=\"color:#DEE9F3\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">id</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">nom</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">secteur</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">service</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Logo</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\"></th>


\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 52
        if ((twig_length_filter($this->env, (isset($context["listC"]) || array_key_exists("listC", $context) ? $context["listC"] : (function () { throw new RuntimeError('Variable "listC" does not exist.', 52, $this->source); })())) == 0)) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center\">Liste vide</p>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listC"]) || array_key_exists("listC", $context) ? $context["listC"] : (function () { throw new RuntimeError('Variable "listC" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 57
            echo "
\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "secteur", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "service", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"width: 75px; height: 55px; padding: 5px;\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["c"], "logo", [], "any", false, false, false, 65))), "html", null, true);
            echo "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierClient", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pen\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppressionClient", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 73)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "

\t\t\t\t\t\t\t\t</tbody>


\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"/clientsAdmin\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" \" style=\" background-color:#ff9919 \">ajouter client</button>
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
        return "clients/clientBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 84,  185 => 73,  176 => 67,  171 => 65,  166 => 63,  162 => 62,  158 => 61,  154 => 60,  149 => 57,  145 => 56,  142 => 55,  138 => 53,  136 => 52,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}liste des Clients
{% endblock %}

{% block body %}

\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Gestionnaire des clients
\t\t\t</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/admin\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/clientsAdmin\">Clients</a>
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
\t\t\t\t\t\t\t\t<strong>Liste des clients AGM</strong>
\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t<table class=\"table\" style=\"color:#DEE9F3\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">id</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">nom</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">secteur</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">service</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Logo</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\"></th>


\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t{% if listC | length == 0 %}
\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center\">Liste vide</p>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% for c in listC  %}

\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t<td>{{c.id}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{c.nom}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{c.secteur }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{c.service }}</td>

\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"width: 75px; height: 55px; padding: 5px;\" src=\"{{ asset('uploads/'~c.logo) }}\"/></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('modifierClient',{id:c.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pen\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('suppressionClient',{id:c.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t</tbody>


\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"/clientsAdmin\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" \" style=\" background-color:#ff9919 \">ajouter client</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>


\t\t\t</div>
\t\t</section>

\t</main>

{% endblock %}
", "clients/clientBack.html.twig", "C:\\Users\\oumei\\OneDrive\\Bureau\\Stram_WebSite\\templates\\clients\\clientBack.html.twig");
    }
}
