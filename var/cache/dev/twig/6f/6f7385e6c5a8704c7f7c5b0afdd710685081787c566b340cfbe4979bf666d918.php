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

/* sortie/index.html.twig */
class __TwigTemplate_bc8727d53ae57792ea6877a4d001096052a53c04efae4f618d612349c99d08b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sortie/index.html.twig", 1);
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

        echo "Hello SortieController!";
        
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
        echo "
  <div class=\"row\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 9
            echo "    <div class=\"col-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h5 class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "user", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
            echo "</h5>
        </div>
        <div class=\"card-body\">
          <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "site", [], "any", false, false, false, 15), "image", [], "any", false, false, false, 15), "html", null, true);
            echo "\" width=\"100%\" alt=\"\">
          <p class=\"card-text\">Le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "createdAt", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo "</p>
          <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "site", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
          <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "content", [], "any", false, false, false, 18), 0, 50), " "), 0,  -1), " "), "html", null, true);
            echo " ...</p>
          <div class=\"row\">
            <div class=\"col-md-4\">
              <img src=\"/assets/icones/coeur.webp\" class=\"\" style=\"width: 40%;\" alt=\"heart\">
            </div>
            <div class=\"col-md-4\">
              <strong>";
            // line 24
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "sortieComments", [], "any", false, false, false, 24)), "html", null, true);
            echo "</strong>
              <img src=\"/assets/icones/comment.png\" style=\"width: 50%;\" alt=\"comment\">
            </div>
            <div class=\"col-md-4\">
              <strong>";
            // line 28
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "prises", [], "any", false, false, false, 28)), "html", null, true);
            echo "</strong>
              <img src=\"/assets/icones/prise.jpg\" style=\"width: 70%;\" alt=\"prises\">
            </div>
          </div>
        </div>
        <div class=\"card-footer\">
          <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sortie"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir l'article</a>
        </div>
      </div>

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sortie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 40,  144 => 34,  135 => 28,  128 => 24,  119 => 18,  115 => 17,  111 => 16,  107 => 15,  101 => 12,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SortieController!{% endblock %}

{% block body %}

  <div class=\"row\">
    {% for sortie in sorties %}
    <div class=\"col-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h5 class=\"card-text\">{{ sortie.user.username}}</h5>
        </div>
        <div class=\"card-body\">
          <img src=\"{{ sortie.site.image }}\" width=\"100%\" alt=\"\">
          <p class=\"card-text\">Le {{ sortie.createdAt | date('d/m/Y')}}</p>
          <p class=\"card-text\">{{ sortie.site.nom }}</p>
          <p class=\"card-text\">{{ sortie.content |slice(0,50) | split(' ') | slice(0,-1) | join(' ')}} ...</p>
          <div class=\"row\">
            <div class=\"col-md-4\">
              <img src=\"/assets/icones/coeur.webp\" class=\"\" style=\"width: 40%;\" alt=\"heart\">
            </div>
            <div class=\"col-md-4\">
              <strong>{{ sortie.sortieComments | length }}</strong>
              <img src=\"/assets/icones/comment.png\" style=\"width: 50%;\" alt=\"comment\">
            </div>
            <div class=\"col-md-4\">
              <strong>{{ sortie.prises | length }}</strong>
              <img src=\"/assets/icones/prise.jpg\" style=\"width: 70%;\" alt=\"prises\">
            </div>
          </div>
        </div>
        <div class=\"card-footer\">
          <a href=\"{{ path('sortie_show', {'id' : sortie.id})}}\" class=\"btn btn-primary\">Voir l'article</a>
        </div>
      </div>

    </div>
    {% endfor %}
  </div>
{% endblock %}
", "sortie/index.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/sortie/index.html.twig");
    }
}
