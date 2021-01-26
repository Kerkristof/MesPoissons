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

/* mes_poissons/index.html.twig */
class __TwigTemplate_fac189afcd0cb913ffc8e5ca3cf1ab15c104a3ecee20ba52fbf18a2094a7cd9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_poissons/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_poissons/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mes_poissons/index.html.twig", 1);
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

        echo "Hello MesPoissonsController!";
        
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
        echo "<div class=\"row\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["especes"]) || array_key_exists("especes", $context) ? $context["especes"] : (function () { throw new RuntimeError('Variable "especes" does not exist.', 7, $this->source); })()), (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 7, $this->source); })()), (isset($context["nbVue"]) || array_key_exists("nbVue", $context) ? $context["nbVue"] : (function () { throw new RuntimeError('Variable "nbVue" does not exist.', 7, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["espece"]) {
            // line 8
            echo "    <div class=\"col-md-2\">
      <div class=\"card\">
        <div class=\"card-header\" style=\"height:60px;\">
          <center><img class=\"card-image image\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "image", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"\"></center>
        </div>
        <div class=\"card-body\">
          <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
          <small>Cat. ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["espece"], "category", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</small>
          <p class=\"card-text\">Par ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "author", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <strong class=\"\">";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "loves", [], "any", false, false, false, 19)), "html", null, true);
            echo "</strong>
              <img src=\"/assets/icones/coeur.webp\" class=\"\" style=\"width: 40%;\" alt=\"heart\">
            </div>
            <div class=\"col-md-6\">
              <strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "comments", [], "any", false, false, false, 23)), "html", null, true);
            echo "</strong>
              <img src=\"/assets/icones/comment.png\" style=\"width: 50%;\" alt=\"comment\">
            </div>
          </div>
        </div>
        <div class=\"card-footer\">
          <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["espece"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Lire l'article</a>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>

<!-- PASSER A LA PAGE SUIVANTE -->
<a href=\"/index/";
        // line 37
        echo twig_escape_filter($this->env, ((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 37, $this->source); })()) - (isset($context["nbVue"]) || array_key_exists("nbVue", $context) ? $context["nbVue"] : (function () { throw new RuntimeError('Variable "nbVue" does not exist.', 37, $this->source); })())), "html", null, true);
        echo "\" class=\"btn btn-primary prec\"><<</a>
<span>Page ";
        // line 38
        echo twig_escape_filter($this->env, (((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 38, $this->source); })()) / (isset($context["nbVue"]) || array_key_exists("nbVue", $context) ? $context["nbVue"] : (function () { throw new RuntimeError('Variable "nbVue" does not exist.', 38, $this->source); })())) + 1), "html", null, true);
        echo " </span>
<a href=\"/index/";
        // line 39
        echo twig_escape_filter($this->env, ((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 39, $this->source); })()) + (isset($context["nbVue"]) || array_key_exists("nbVue", $context) ? $context["nbVue"] : (function () { throw new RuntimeError('Variable "nbVue" does not exist.', 39, $this->source); })())), "html", null, true);
        echo "\" class=\"btn btn-primary suiv\">>></a>
<hr>


<!-- AJOUTER UN NOUVELLE ESPECE -->
";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "  <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
            echo "\" class=\"btn btn-success\">Ajouter une nouvelle espèce</a>
";
        } else {
            // line 47
            echo "  <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\"><strong>Connectez vous pour publier un nouvel article</strong>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mes_poissons/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 47,  170 => 45,  168 => 44,  160 => 39,  156 => 38,  152 => 37,  147 => 34,  136 => 29,  127 => 23,  120 => 19,  114 => 16,  110 => 15,  106 => 14,  100 => 11,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MesPoissonsController!{% endblock %}

{% block body %}
<div class=\"row\">
  {% for espece in especes | slice(offset, nbVue) %}
    <div class=\"col-md-2\">
      <div class=\"card\">
        <div class=\"card-header\" style=\"height:60px;\">
          <center><img class=\"card-image image\" src=\"{{ espece.image }}\" alt=\"\"></center>
        </div>
        <div class=\"card-body\">
          <h5 class=\"card-title\">{{ espece.nom }}</h5>
          <small>Cat. {{ espece.category.nom }}</small>
          <p class=\"card-text\">Par {{ espece.author }}</p>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <strong class=\"\">{{ espece.loves | length }}</strong>
              <img src=\"/assets/icones/coeur.webp\" class=\"\" style=\"width: 40%;\" alt=\"heart\">
            </div>
            <div class=\"col-md-6\">
              <strong>{{ espece.comments | length }}</strong>
              <img src=\"/assets/icones/comment.png\" style=\"width: 50%;\" alt=\"comment\">
            </div>
          </div>
        </div>
        <div class=\"card-footer\">
          <a href=\"{{ path('show',{'id' : espece.id}) }}\" class=\"btn btn-primary\">Lire l'article</a>
        </div>
      </div>
    </div>
  {% endfor %}
</div>

<!-- PASSER A LA PAGE SUIVANTE -->
<a href=\"/index/{{ offset - nbVue }}\" class=\"btn btn-primary prec\"><<</a>
<span>Page {{ offset / nbVue + 1 }} </span>
<a href=\"/index/{{ offset + nbVue }}\" class=\"btn btn-primary suiv\">>></a>
<hr>


<!-- AJOUTER UN NOUVELLE ESPECE -->
{% if app.user %}
  <a href=\"{{ path('create') }}\" class=\"btn btn-success\">Ajouter une nouvelle espèce</a>
{% else %}
  <a href=\"{{ path('security_login')}}\"><strong>Connectez vous pour publier un nouvel article</strong>
{% endif %}
{% endblock %}
", "mes_poissons/index.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/mes_poissons/index.html.twig");
    }
}
