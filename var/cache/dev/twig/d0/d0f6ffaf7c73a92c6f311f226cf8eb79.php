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

/* projet/projetBack.html.twig */
class __TwigTemplate_da4518ac1ac7a7a7e85597e75857c84f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/projetBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/projetBack.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/projetBack.html.twig", 1);
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
\t\t\t<h1>Gestionnaire des projets

\t\t\t</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/admin\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/projets\">projets</a>
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
\t\t\t\t\t\t\t\t<strong>Liste des projets AGM

\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t<table class=\"table\" style=\"color:#DEE9F3\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">titre</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Maître d'ouvrage</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">description</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Afficher le project dans le site</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\"></th>



\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 55
        if ((twig_length_filter($this->env, (isset($context["listP"]) || array_key_exists("listP", $context) ? $context["listP"] : (function () { throw new RuntimeError('Variable "listP" does not exist.', 55, $this->source); })())) == 0)) {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center\">Liste vide</p>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listP"]) || array_key_exists("listP", $context) ? $context["listP"] : (function () { throw new RuntimeError('Variable "listP" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 60
            echo "
\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titre", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "proprietaire", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                            
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "afficherProjet", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierProjet", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pen\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppressionProjet", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 75)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "

\t\t\t\t\t\t\t\t</tbody>


\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterProjet");
        echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" style=\" background-color:#ff9919 \">ajouter projet</button>
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
        return "projet/projetBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 92,  201 => 86,  184 => 75,  175 => 69,  170 => 67,  165 => 65,  161 => 64,  157 => 63,  152 => 60,  148 => 59,  145 => 58,  141 => 56,  139 => 55,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}liste des Clients
{% endblock %}

{% block body %}

\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Gestionnaire des projets

\t\t\t</h1>
\t\t\t<nav>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/admin\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"/projets\">projets</a>
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
\t\t\t\t\t\t\t\t<strong>Liste des projets AGM

\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t<table class=\"table\" style=\"color:#DEE9F3\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">titre</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Maître d'ouvrage</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">description</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Afficher le project dans le site</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\"></th>



\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t{% if listP | length == 0 %}
\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center\">Liste vide</p>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% for p in listP  %}

\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t<td>{{p.titre}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{p.proprietaire}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{p.description }}</td>
                                            
\t\t\t\t\t\t\t\t\t\t\t<td>{{p.afficherProjet}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('modifierProjet',{id:p.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pen\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('suppressionProjet',{id:p.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t</tbody>


\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"{{ path('ajouterProjet') }}\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" style=\" background-color:#ff9919 \">ajouter projet</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>


\t\t\t</div>
\t\t</section>

\t</main>

{% endblock %}
", "projet/projetBack.html.twig", "C:\\Users\\oumei\\OneDrive\\Bureau\\Stram_WebSite\\templates\\projet\\projetBack.html.twig");
    }
}
