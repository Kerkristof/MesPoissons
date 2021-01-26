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

/* mes_poissons/form.html.twig */
class __TwigTemplate_7e8a4eee7bd8a078e30924136fd44221ebc5e4d2c06e87900958293ba21305e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_poissons/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_poissons/form.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mes_poissons/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
  ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 7, $this->source); })()), 'form_start');
        echo "

    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'row', ["label" => "Nom de l'espèce", "attr" => ["placeholder" => "Entrez le nom de l'espèce"]]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 10, $this->source); })()), "taille_min", [], "any", false, false, false, 10), 'row', ["label" => "Taille minimale de prélèvement en cm", "attr" => ["placeholder" => "Entrez la taille minimale de prélèvement"]]);
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 11, $this->source); })()), "contenu", [], "any", false, false, false, 11), 'row', ["label" => "Description de l'espèce", "attr" => ["placeholder" => "Entrez la description de l'espèce"]]);
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), 'row', ["label" => "Adresse URL de l'image", "attr" => ["placeholder" => "Entrez l'adresse URL de l'image"]]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 13, $this->source); })()), "category", [], "any", false, false, false, 13), 'row', ["label" => "Catégorie"]);
        echo "
    <button type=\"submit\" class=\"btn btn-success\">
  ";
        // line 15
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "    Enregistrer les modifications
  ";
        } else {
            // line 18
            echo "    Ajouter l'espèce
  ";
        }
        // line 20
        echo "    </button>
    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_create");
        echo "\" class=\"btn btn-primary\">Ajouter une catégorie</a>

  ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 23, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mes_poissons/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 23,  113 => 21,  110 => 20,  106 => 18,  102 => 16,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  74 => 7,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formEspece 'bootstrap_4_layout.html.twig' %}

{% block body %}

  {{ form_start(formEspece) }}

    {{ form_row(formEspece.nom, { 'label' : \"Nom de l'espèce\", 'attr' : {'placeholder' : \"Entrez le nom de l'espèce\"}}) }}
    {{ form_row(formEspece.taille_min, {'label':\"Taille minimale de prélèvement en cm\", 'attr' : {'placeholder' : \"Entrez la taille minimale de prélèvement\"}}) }}
    {{ form_row(formEspece.contenu, {'label':\"Description de l'espèce\",'attr' : {'placeholder' : \"Entrez la description de l'espèce\"}} ) }}
    {{ form_row(formEspece.image, {'label':\"Adresse URL de l'image\",'attr' : {'placeholder' : \"Entrez l'adresse URL de l'image\"}} ) }}
    {{ form_row(formEspece.category, {'label': \"Catégorie\"} ) }}
    <button type=\"submit\" class=\"btn btn-success\">
  {% if editMode %}
    Enregistrer les modifications
  {% else %}
    Ajouter l'espèce
  {% endif %}
    </button>
    <a href=\"{{ path(\"category_create\")}}\" class=\"btn btn-primary\">Ajouter une catégorie</a>

  {{ form_end(formEspece)}}

{% endblock %}
", "mes_poissons/form.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/mes_poissons/form.html.twig");
    }
}
