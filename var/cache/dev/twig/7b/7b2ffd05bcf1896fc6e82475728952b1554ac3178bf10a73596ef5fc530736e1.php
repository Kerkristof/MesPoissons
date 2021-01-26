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

/* mes_poissons/show.html.twig */
class __TwigTemplate_75a5098230b49248ef8ec85a15ca8ee9f5c52193272499e062fd5fd18e5778bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_poissons/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_poissons/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mes_poissons/show.html.twig", 1);
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
<section>
  <h3>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        echo " <small>dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 6, $this->source); })()), "category", [], "any", false, false, false, 6), "nom", [], "any", false, false, false, 6), "html", null, true);
        echo "</small></h3>
  <p>Article créé le ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 7, $this->source); })()), "createdAt", [], "any", false, false, false, 7), "d/m/Y"), "html", null, true);
        echo " par <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 7, $this->source); })()), "author", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong></p>
  <p>La taille minimale de prélèvement pour ce poisson est de ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 8, $this->source); })()), "tailleMin", [], "any", false, false, false, 8), "html", null, true);
        echo " cm </p>
  <img src=";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9), "html", null, true);
        echo " alt=\"fish\" class=\"image\">
  <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 10, $this->source); })()), "contenu", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
  ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11) == twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 11, $this->source); })()), "author", [], "any", false, false, false, 11)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
            // line 12
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier cet article</a>
    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer cet article</a>
  ";
        }
        // line 15
        echo "  <hr>

  <!-- Afficher un formulaire pour un nouveau commentaire -->
  ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "    <h6><strong>Ajoutez un commentaire</strong></h6>
    ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 20, $this->source); })()), 'form_start');
            echo "
    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), 'widget', ["attr" => ["placeholder" => "Votre commentaire ..."]]);
            echo "
    <br>
    <button type=\"submit\" class=\"btn btn-success\" name=\"button\">Publier</button>
    ";
            // line 24
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 24, $this->source); })()), 'form_end');
            echo "
    <hr>
  ";
        } else {
            // line 27
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Veuillez vous identifier pour publier un commentaire</a>
    <hr>

  ";
        }
        // line 31
        echo "
  <!-- Afficher les commentaires -->
  <!-- <h4>Commentaires</h4> -->
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 34, $this->source); })()), "comments", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 35
            echo "  <div class=\"row\">
    <p class=\"col-3\">De <strong>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 36), "html", null, true);
            echo "</strong><br>le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createAt", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createAt", [], "any", false, false, false, 36), "H:i"), "html", null, true);
            echo "</p>
    <p class=\"col-9\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
  </div>
    <hr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "

  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mes_poissons/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 41,  162 => 37,  154 => 36,  151 => 35,  147 => 34,  142 => 31,  134 => 27,  128 => 24,  122 => 21,  118 => 20,  115 => 19,  113 => 18,  108 => 15,  103 => 13,  98 => 12,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  78 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block body%}

<section>
  <h3>{{ espece.nom}} <small>dans la catégorie {{espece.category.nom}}</small></h3>
  <p>Article créé le {{ espece.createdAt | date('d/m/Y') }} par <strong>{{ espece.author}}</strong></p>
  <p>La taille minimale de prélèvement pour ce poisson est de {{ espece.tailleMin}} cm </p>
  <img src={{ espece.image }} alt=\"fish\" class=\"image\">
  <p>{{ espece.contenu}}</p>
  {% if app.user and (app.user.username == espece.author or is_granted('ROLE_ADMIN')) %}
    <a href=\"{{ path('edit',{'id' : espece.id}) }}\" class=\"btn btn-warning\">Modifier cet article</a>
    <a href=\"{{ path('espece_delete',{'id' : espece.id}) }}\" class=\"btn btn-danger\">Supprimer cet article</a>
  {% endif %}
  <hr>

  <!-- Afficher un formulaire pour un nouveau commentaire -->
  {% if app.user %}
    <h6><strong>Ajoutez un commentaire</strong></h6>
    {{form_start(formComment)}}
    {{form_widget(formComment.content, {'attr':{'placeholder':'Votre commentaire ...'}})}}
    <br>
    <button type=\"submit\" class=\"btn btn-success\" name=\"button\">Publier</button>
    {{form_end(formComment)}}
    <hr>
  {% else %}
    <a href=\"{{ path('security_login')}}\">Veuillez vous identifier pour publier un commentaire</a>
    <hr>

  {% endif %}

  <!-- Afficher les commentaires -->
  <!-- <h4>Commentaires</h4> -->
  {% for comment in espece.comments %}
  <div class=\"row\">
    <p class=\"col-3\">De <strong>{{comment.author}}</strong><br>le {{comment.createAt | date('d/m/Y')}} à {{comment.createAt | date('H:i')}}</p>
    <p class=\"col-9\">{{comment.content}}</p>
  </div>
    <hr>
  {% endfor %}


  </section>
{% endblock %}
", "mes_poissons/show.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/mes_poissons/show.html.twig");
    }
}
