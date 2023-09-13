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

/* back/index.html.twig */
class __TwigTemplate_93eff006844d9376a67a456d458b205b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/chats.css"), "html", null, true);
        echo "\">
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
\t\t<section class=\"section dashboard\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"patner\" style=\"display: flex;\">

\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img1.jpeg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img2.jpeg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img3.jpeg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img4.jpg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img5.jpg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</br>
\t</br>
\t<div class=\"row\">
\t\t<div
\t\t\tclass=\"col-lg-12\">
\t\t\t<!-- Tableau des top clients -->
\t\t\t<div style=\"max-width: 80%\">
\t\t\t\t<div>
\t\t\t\t\t<h3>Top Clients</h3>
\t\t\t\t</div>
\t\t\t\t<table style=\"background-color:#092F54 ; width: 80%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr style=\" color:#F17F21\">
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Secteur</th>
\t\t\t\t\t\t\t<th>Service</th>
\t\t\t\t\t\t\t<th>Logo</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody style=\"color:#092F54 ; background-color:#F17F21\">
\t\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 51
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "secteur", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "service", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "logo", [], "any", false, false, false, 56), "html", null, true);
            echo "\" alt=\"Logo\" style=\"width: 75px; height: 55px; padding: 5px;\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</br>


</div></section></main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  161 => 56,  157 => 55,  153 => 54,  149 => 53,  145 => 52,  142 => 51,  138 => 50,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('../css/chats.css') }}\">
{% endblock %}
{% block body %}
\t<main id=\"main\" class=\"main\">
\t\t<section class=\"section dashboard\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"patner\" style=\"display: flex;\">

\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img1.jpeg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img2.jpeg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img3.jpeg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img4.jpg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"patner_image\">
\t\t\t\t\t\t<img src=\"images/back/img5.jpg\" alt=\"\" style=\"height:200px\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</br>
\t</br>
\t<div class=\"row\">
\t\t<div
\t\t\tclass=\"col-lg-12\">
\t\t\t<!-- Tableau des top clients -->
\t\t\t<div style=\"max-width: 80%\">
\t\t\t\t<div>
\t\t\t\t\t<h3>Top Clients</h3>
\t\t\t\t</div>
\t\t\t\t<table style=\"background-color:#092F54 ; width: 80%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr style=\" color:#F17F21\">
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Secteur</th>
\t\t\t\t\t\t\t<th>Service</th>
\t\t\t\t\t\t\t<th>Logo</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody style=\"color:#092F54 ; background-color:#F17F21\">
\t\t\t\t\t\t{% for client in topClients %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ client.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ client.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ client.secteur }}</td>
\t\t\t\t\t\t\t\t<td>{{ client.service }}</td>
\t\t\t\t\t\t\t\t<td><img src=\"{{ client.logo }}\" alt=\"Logo\" style=\"width: 75px; height: 55px; padding: 5px;\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</br>


</div></section></main>{% endblock %}
", "back/index.html.twig", "C:\\Users\\anest\\OneDrive\\Bureau\\Stram_WebSite\\templates\\back\\index.html.twig");
    }
}
