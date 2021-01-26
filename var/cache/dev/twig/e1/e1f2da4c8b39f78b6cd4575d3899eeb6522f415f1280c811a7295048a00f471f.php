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

/* site/site_edit.html.twig */
class __TwigTemplate_44d5597cd9e88ae4d93312936a58fe69363f54f14ac8881dc55a339cd917aa45 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/site_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/site_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/site_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 5
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    <h2>Page de modification d'un site</h2>
  ";
        } else {
            // line 8
            echo "    <h2>Page d'ajout d'un site</h2>
  ";
        }
        // line 10
        echo "
  ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'row', ["label" => "Nom du site", "attr" => ["placeholder" => "Entrez le nom du site"]]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 13, $this->source); })()), "category", [], "any", false, false, false, 13), 'row', ["label" => "Catégorie", "attr" => ["placeholder" => "Entrez la catégoie du site"]]);
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), 'row', ["label" => "Description", "attr" => ["placeholder" => "Entrez une description"]]);
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 15, $this->source); })()), "gps", [], "any", false, false, false, 15), 'row', ["label" => "Coordonnées GSP", "attr" => ["placeholder" => "ex 48.52459, 1.98552"]]);
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16), 'row', ["label" => "Image du site", "attr" => ["placeholder" => "Adresse de l'image..."]]);
        echo "

    <button type=\"submit\" class=\"btn btn-success\">
      ";
        // line 19
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "        Enregistrer les modifications
      ";
        } else {
            // line 22
            echo "        Ajouter le site
      ";
        }
        // line 24
        echo "    </button>

  ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/site_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 26,  120 => 24,  116 => 22,  112 => 20,  110 => 19,  104 => 16,  100 => 15,  96 => 14,  92 => 13,  88 => 12,  84 => 11,  81 => 10,  77 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  {% if editMode %}
    <h2>Page de modification d'un site</h2>
  {% else %}
    <h2>Page d'ajout d'un site</h2>
  {% endif %}

  {{ form_start(formSite) }}
    {{ form_row(formSite.nom, { 'label' : \"Nom du site\", 'attr' : {'placeholder' : \"Entrez le nom du site\"}}) }}
    {{ form_row(formSite.category, { 'label' : \"Catégorie\", 'attr' : {'placeholder' : \"Entrez la catégoie du site\"}}) }}
    {{ form_row(formSite.content, { 'label' : \"Description\", 'attr' : {'placeholder' : \"Entrez une description\"}}) }}
    {{ form_row(formSite.gps, { 'label' : \"Coordonnées GSP\", 'attr' : {'placeholder' : \"ex 48.52459, 1.98552\"}}) }}
    {{ form_row(formSite.image, { 'label' : \"Image du site\", 'attr' : {'placeholder' : \"Adresse de l'image...\"}}) }}

    <button type=\"submit\" class=\"btn btn-success\">
      {% if editMode %}
        Enregistrer les modifications
      {% else %}
        Ajouter le site
      {% endif %}
    </button>

  {{ form_end(formSite) }}

{% endblock %}
", "site/site_edit.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/site/site_edit.html.twig");
    }
}
