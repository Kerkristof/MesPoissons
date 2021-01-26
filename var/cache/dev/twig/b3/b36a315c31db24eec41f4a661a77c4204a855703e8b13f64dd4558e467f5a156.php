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

/* security/registration.html.twig */
class __TwigTemplate_33116ec4be0b20f32c95c76b299f61ddfee792fb24fd2cdf6d32e1b56b1a88d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 6, $this->source); })()), "username", [], "any", false, false, false, 6), 'row', ["label" => "Pseudo", "attr" => ["placeholder" => "Saisissez votre pseudo"]]);
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), 'row', ["label" => "Email", "attr" => ["placeholder" => "Saisissez votre email"]]);
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 8, $this->source); })()), "password", [], "any", false, false, false, 8), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "Saisissez votre mot de passe"]]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 9, $this->source); })()), "confirm_password", [], "any", false, false, false, 9), 'row', ["label" => "Confirmation de votre mot de passe", "attr" => ["placeholder" => "Confirmer votre mot de passe"]]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 10, $this->source); })()), "agreeTerms", [], "any", false, false, false, 10), 'row', ["label" => "J'accepte les conditons générales d'utilisation"]);
        echo "
    <button type=\"submit\" class=\"btn btn-success\">Valider</button>

  ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 13, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  91 => 10,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  {{ form_start(formRegistration) }}
    {{ form_row(formRegistration.username, { 'label' : \"Pseudo\", 'attr' : {'placeholder' : \"Saisissez votre pseudo\"}}) }}
    {{ form_row(formRegistration.email, { 'label' : \"Email\", 'attr' : {'placeholder' : \"Saisissez votre email\"}}) }}
    {{ form_row(formRegistration.password, { 'label' : \"Mot de passe\", 'attr' : {'placeholder' : \"Saisissez votre mot de passe\"}}) }}
    {{ form_row(formRegistration.confirm_password, { 'label' : \"Confirmation de votre mot de passe\", 'attr' : {'placeholder' : \"Confirmer votre mot de passe\"}}) }}
    {{ form_row(formRegistration.agreeTerms, {'label' : \"J'accepte les conditons générales d'utilisation\"}) }}
    <button type=\"submit\" class=\"btn btn-success\">Valider</button>

  {{ form_end(formRegistration) }}

{% endblock %}
", "security/registration.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/security/registration.html.twig");
    }
}
