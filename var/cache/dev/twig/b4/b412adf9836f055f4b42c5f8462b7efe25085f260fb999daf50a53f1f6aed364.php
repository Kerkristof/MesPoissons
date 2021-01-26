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

/* site/index.html.twig */
class __TwigTemplate_8a80d596bee22638ded88bc01e822eba7a6fd43924c6fd77ea74850ec017718e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello SiteController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"row\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new RuntimeError('Variable "sites" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 8
            echo "      <div class=\"col-md-3\">
        <div class=\"card\">
          <div class=\"card-body\">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_show", ["id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
              <h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "</h4>
            </a>
            <p>Créé par ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["site"], "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
            <small class=\"card-text\">Cat. ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["site"], "category", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</small>
              <p class=\"card-text\">GPS
                <a href=\"https://www.google.fr/maps/place/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "gps", [], "any", false, false, false, 17), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "gps", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
              </p>
              <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie", ["site_id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "sorties", [], "any", false, false, false, 19)), "html", null, true);
            echo " sortie(s) à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</a>
              <br>
              ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
                // line 22
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_create", ["site_id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">Ajouter une sortie</a>
                <br>
              ";
            }
            // line 25
            echo "          </div>
          <div class=\"card-footer\">
            ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["site"], "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
                // line 28
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Modifier</a>
              <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
            ";
            } else {
                // line 31
                echo "            <a href=\"#\"class=\"disabled btn btn-warning\">Modifier</a>
            <a href=\"\" class=\"disabled btn btn-danger\">Supprimer</a>
            ";
            }
            // line 34
            echo "          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </div>

  <!-- AJOUTER UN NOUVEAU SIETs -->
  <hr>
  ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_create");
            echo "\" class=\"btn btn-success\">Ajouter un nouveau site</a>
  ";
        } else {
            // line 45
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\"><strong>Connectez vous pour publier un nouveau site</strong>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 45,  181 => 43,  179 => 42,  173 => 38,  164 => 34,  159 => 31,  154 => 29,  149 => 28,  147 => 27,  143 => 25,  136 => 22,  134 => 21,  125 => 19,  118 => 17,  113 => 15,  109 => 14,  104 => 12,  100 => 11,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SiteController!{% endblock %}

{% block body %}
  <div class=\"row\">
    {% for site in sites %}
      <div class=\"col-md-3\">
        <div class=\"card\">
          <div class=\"card-body\">
            <a href=\"{{path('site_show', {'id' : site.id })}}\">
              <h4 class=\"card-title\">{{ site.nom }}</h4>
            </a>
            <p>Créé par {{ site.user.username }}</p>
            <small class=\"card-text\">Cat. {{site.category.nom}}</small>
              <p class=\"card-text\">GPS
                <a href=\"https://www.google.fr/maps/place/{{site.gps}}\" target=\"_blank\">{{ site.gps }}</a>
              </p>
              <a href=\"{{ path('sortie', {'site_id' : site.id}) }}\"> {{ site.sorties | length }} sortie(s) à {{ site.nom}}</a>
              <br>
              {% if app.user %}
                <a href=\"{{path('sortie_create', {'site_id' : site.id }) }}\">Ajouter une sortie</a>
                <br>
              {% endif %}
          </div>
          <div class=\"card-footer\">
            {% if app.user and (app.user.username == site.user.username or is_granted('ROLE_ADMIN')) %}
              <a href=\"{{ path('site_edit',{'id' : site.id}) }}\" class=\"btn btn-warning\">Modifier</a>
              <a href=\"{{ path('site_delete',{'id' : site.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
            {% else %}
            <a href=\"#\"class=\"disabled btn btn-warning\">Modifier</a>
            <a href=\"\" class=\"disabled btn btn-danger\">Supprimer</a>
            {% endif %}
          </div>
        </div>
      </div>
    {% endfor %}
  </div>

  <!-- AJOUTER UN NOUVEAU SIETs -->
  <hr>
  {% if app.user %}
    <a href=\"{{ path('site_create')}}\" class=\"btn btn-success\">Ajouter un nouveau site</a>
  {% else %}
    <a href=\"{{ path('security_login')}}\"><strong>Connectez vous pour publier un nouveau site</strong>
  {% endif %}
{% endblock %}
", "site/index.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/site/index.html.twig");
    }
}
