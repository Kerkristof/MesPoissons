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

/* spot/spot_edit.html.twig */
class __TwigTemplate_f27a27aadf260924d540f331df3c38e3d465048b17e65c006fb67c0466be3980 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "spot/spot_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "spot/spot_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "spot/spot_edit.html.twig", 1);
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
            echo "    <h2>Page de modification d'un spot</h2>
  ";
        } else {
            // line 8
            echo "    <h2>Page d'ajout d'un spot</h2>
  ";
        }
        // line 10
        echo "
  ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formspot"]) || array_key_exists("formspot", $context) ? $context["formspot"] : (function () { throw new RuntimeError('Variable "formspot" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formspot"]) || array_key_exists("formspot", $context) ? $context["formspot"] : (function () { throw new RuntimeError('Variable "formspot" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'row', ["label" => "Nom du spot", "attr" => ["placeholder" => "Entrez le nom du spot"]]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formspot"]) || array_key_exists("formspot", $context) ? $context["formspot"] : (function () { throw new RuntimeError('Variable "formspot" does not exist.', 13, $this->source); })()), "gps", [], "any", false, false, false, 13), 'row', ["label" => "Coordonnées GSP", "attr" => ["placeholder" => "ex 48.52459, 1.98552"]]);
        echo "

    <button type=\"submit\" class=\"btn btn-success\">
      ";
        // line 16
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "        Enregistrer les modifications
      ";
        } else {
            // line 19
            echo "        Ajouter le spot
      ";
        }
        // line 21
        echo "    </button>

  ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formspot"]) || array_key_exists("formspot", $context) ? $context["formspot"] : (function () { throw new RuntimeError('Variable "formspot" does not exist.', 23, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "spot/spot_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  108 => 21,  104 => 19,  100 => 17,  98 => 16,  92 => 13,  88 => 12,  84 => 11,  81 => 10,  77 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  {% if editMode %}
    <h2>Page de modification d'un spot</h2>
  {% else %}
    <h2>Page d'ajout d'un spot</h2>
  {% endif %}

  {{ form_start(formspot) }}
    {{ form_row(formspot.nom, { 'label' : \"Nom du spot\", 'attr' : {'placeholder' : \"Entrez le nom du spot\"}}) }}
    {{ form_row(formspot.gps, { 'label' : \"Coordonnées GSP\", 'attr' : {'placeholder' : \"ex 48.52459, 1.98552\"}}) }}

    <button type=\"submit\" class=\"btn btn-success\">
      {% if editMode %}
        Enregistrer les modifications
      {% else %}
        Ajouter le spot
      {% endif %}
    </button>

  {{ form_end(formspot) }}

{% endblock %}
", "spot/spot_edit.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/spot/spot_edit.html.twig");
    }
}
