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

/* sortie/sortie_show.html.twig */
class __TwigTemplate_9593cb309e79710aa63ab91e368bc18aaef5d3b1d4a4d6fdcbaa06fb97938016 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sortie/sortie_show.html.twig", 1);
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
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-6\">
      <h4>Sortie par <strong>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong> à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 7, $this->source); })()), "site", [], "any", false, false, false, 7), "nom", [], "any", false, false, false, 7), "html", null, true);
        echo "</h4>
      <p>Le ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 8, $this->source); })()), "createdAt", [], "any", false, false, false, 8), "d/m/Y"), "html", null, true);
        echo "</p>
      <h5>Description</h5>
      <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
      ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11) && ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11) == twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
            // line 12
            echo "        <a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_edit", ["site_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 12, $this->source); })()), "site", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">Modifier le contenu</a>
        <a class=\"btn btn-danger\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Supprimer cette sortie</a>
      ";
        }
        // line 15
        echo "    </div>
    <div class=\"col-6\">
      <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 17, $this->source); })()), "site", [], "any", false, false, false, 17), "image", [], "any", false, false, false, 17), "html", null, true);
        echo "\" width=\"80%\" alt=\"\">
    </div>
  </div>
  <hr>
  <div class=\"row\">
    <div class=\"col-8\">
  <!-- TABLE DES PRISES -->
  <h5>Prises</h5>
  <div class=\"row\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 26, $this->source); })()), "prises", [], "any", false, false, false, 26), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 26, $this->source); })()), "especes", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26) <=> twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 26, $this->source); })()), "especes", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["prise"]) {
            // line 27
            echo "    <div class=\"col-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          <div class=\"row\">
            <div class=\"col-4\">
              <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "especes", [], "any", false, false, false, 32), "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" width=\"30px\" alt=\"\">
            </div>
            <div class=\"col-8\">
              <h5 class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "especes", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</h5>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prise"], "taille", [], "any", false, false, false, 40), "html", null, true);
            echo "cm</p>
          <p class=\"card-text\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "spot", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
          ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42) && ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "sortie", [], "any", false, false, false, 42), "user", [], "any", false, false, false, 42)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLLE_ADMIN")))) {
                // line 43
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prise_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["prise"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">Supprimer</a>
          ";
            }
            // line 45
            echo "
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  </div>
    </div>
    <div class=\"col-1\"></div>
    <div class=\"col-3\">
      <br>

      ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56) == twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)))) {
            // line 57
            echo "        <!-- FORMULAIRE D'AJOUT D'UNE PRISE -->
        ";
            // line 58
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 58, $this->source); })()), 'form_start');
            echo "
        <!-- ON VEUT FILTRER LES ESPECES PAR LA CATEGORIE DU SITE -->
        <!-- <div class=\"form-group\">
          <label class=\"required\" for=\"prise_especes\">Espece</label>
          <select id=\"prise_especes\" name=\"prise[especes]\" class=\"form-control\">
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["especesList"]) || array_key_exists("especesList", $context) ? $context["especesList"] : (function () { throw new RuntimeError('Variable "especesList" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["espece"]) {
                // line 64
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "nom", [], "any", false, false, false, 64), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "          </select>
        </div> -->
        ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 68, $this->source); })()), "especes", [], "any", false, false, false, 68), 'row', ["label" => "Espece"]);
            echo "
        ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 69, $this->source); })()), "spot", [], "any", false, false, false, 69), 'row', ["label" => "Spot"]);
            echo "
        ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 70, $this->source); })()), "taille", [], "any", false, false, false, 70), 'row', ["label" => "Taille", "attr" => ["placeholder" => "Entrez la taille de la prise en cm"]]);
            echo "
        <button type=\"submit\" class=\"btn btn-success\" name=\"button\">Ajouter une prise</button>
        ";
            // line 72
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 72, $this->source); })()), 'form_end');
            echo "

      ";
        }
        // line 75
        echo "    </div>
  </div>
  <!-- FORMULAIRE D'AJOUT DE COMMENTAIRE -->
  </div>
  ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79)) {
            // line 80
            echo "    <h6><strong>Ajoutez un commentaire</strong></h6>
    ";
            // line 81
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 81, $this->source); })()), 'form_start');
            echo "
    ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 82, $this->source); })()), "content", [], "any", false, false, false, 82), 'widget', ["attr" => ["placeholder" => "Votre commentaire"]]);
            echo "
    <br>
    <button type=\"submit\" class=\"btn btn-success\">Ajoutez un commentaire</button>
    ";
            // line 85
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 85, $this->source); })()), 'form_end');
            echo "
  ";
        } else {
            // line 87
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Veuillez vous identifier pour publier un commentaire</a>
  ";
        }
        // line 89
        echo "    <hr>
  <!-- COMMENTAIRES -->
    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 91, $this->source); })()), "sortieComments", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 92
            echo "    <div class=\"row\">
      <p class=\"col-3\">De <strong>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 93), "username", [], "any", false, false, false, 93), "html", null, true);
            echo "</strong><br>le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 93), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 93), "H:i"), "html", null, true);
            echo "</p>
      <p class=\"col-9\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 94), "html", null, true);
            echo "</p>
    </div>
    <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sortie/sortie_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 98,  277 => 94,  269 => 93,  266 => 92,  262 => 91,  258 => 89,  252 => 87,  247 => 85,  241 => 82,  237 => 81,  234 => 80,  232 => 79,  226 => 75,  220 => 72,  215 => 70,  211 => 69,  207 => 68,  203 => 66,  192 => 64,  188 => 63,  180 => 58,  177 => 57,  175 => 56,  167 => 50,  157 => 45,  151 => 43,  149 => 42,  145 => 41,  141 => 40,  133 => 35,  127 => 32,  120 => 27,  116 => 26,  104 => 17,  100 => 15,  95 => 13,  90 => 12,  88 => 11,  84 => 10,  79 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-6\">
      <h4>Sortie par <strong>{{sortie.user.username}}</strong> à {{ sortie.site.nom }}</h4>
      <p>Le {{ sortie.createdAt | date('d/m/Y') }}</p>
      <h5>Description</h5>
      <p>{{ sortie.content }}</p>
      {% if app.user and (app.user == sortie.user or is_granted('ROLE_ADMIN')) %}
        <a class=\"btn btn-warning\" href=\"{{ path('sortie_edit', {'site_id' : sortie.site.id, 'id' : sortie.id} ) }}\">Modifier le contenu</a>
        <a class=\"btn btn-danger\" href=\"{{ path('sortie_delete', {'id' : sortie.id}) }}\">Supprimer cette sortie</a>
      {% endif %}
    </div>
    <div class=\"col-6\">
      <img src=\"{{ sortie.site.image }}\" width=\"80%\" alt=\"\">
    </div>
  </div>
  <hr>
  <div class=\"row\">
    <div class=\"col-8\">
  <!-- TABLE DES PRISES -->
  <h5>Prises</h5>
  <div class=\"row\">
  {% for prise in sortie.prises | sort((a,b) => a.especes.nom <=> b.especes.nom) %}
    <div class=\"col-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          <div class=\"row\">
            <div class=\"col-4\">
              <img src=\"{{ prise.especes.image }}\" width=\"30px\" alt=\"\">
            </div>
            <div class=\"col-8\">
              <h5 class=\"card-text\">{{ prise.especes.nom }}</h5>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">{{ prise.taille }}cm</p>
          <p class=\"card-text\">{{ prise.spot.nom }}</p>
          {% if app.user and (app.user == prise.sortie.user or is_granted('ROLLE_ADMIN')) %}
            <a href=\"{{ path('prise_delete', {'id' : prise.id }) }}\">Supprimer</a>
          {% endif %}

        </div>
      </div>
    </div>
  {% endfor %}
  </div>
    </div>
    <div class=\"col-1\"></div>
    <div class=\"col-3\">
      <br>

      {% if app.user and (app.user == sortie.user) %}
        <!-- FORMULAIRE D'AJOUT D'UNE PRISE -->
        {{ form_start(formPrise) }}
        <!-- ON VEUT FILTRER LES ESPECES PAR LA CATEGORIE DU SITE -->
        <!-- <div class=\"form-group\">
          <label class=\"required\" for=\"prise_especes\">Espece</label>
          <select id=\"prise_especes\" name=\"prise[especes]\" class=\"form-control\">
            {% for espece in especesList %}
            <option value=\"{{ espece.id }}\">{{ espece.nom }}</option>
            {% endfor %}
          </select>
        </div> -->
        {{ form_row(formPrise.especes, {'label':\"Espece\"})}}
        {{ form_row(formPrise.spot, { 'label' : \"Spot\" }) }}
        {{ form_row(formPrise.taille, { 'label' : \"Taille\", 'attr' : {'placeholder' : \"Entrez la taille de la prise en cm\"}}) }}
        <button type=\"submit\" class=\"btn btn-success\" name=\"button\">Ajouter une prise</button>
        {{ form_end(formPrise) }}

      {% endif %}
    </div>
  </div>
  <!-- FORMULAIRE D'AJOUT DE COMMENTAIRE -->
  </div>
  {% if app.user %}
    <h6><strong>Ajoutez un commentaire</strong></h6>
    {{ form_start(formComment) }}
    {{ form_widget(formComment.content, {'attr': {'placeholder':\"Votre commentaire\"}}) }}
    <br>
    <button type=\"submit\" class=\"btn btn-success\">Ajoutez un commentaire</button>
    {{ form_end (formComment)}}
  {% else %}
    <a href=\"{{ path('security_login')}}\">Veuillez vous identifier pour publier un commentaire</a>
  {% endif %}
    <hr>
  <!-- COMMENTAIRES -->
    {% for comment in sortie.sortieComments %}
    <div class=\"row\">
      <p class=\"col-3\">De <strong>{{comment.user.username}}</strong><br>le {{comment.createdAt | date('d/m/Y')}} à {{comment.createdAt | date('H:i')}}</p>
      <p class=\"col-9\">{{comment.content}}</p>
    </div>
    <hr>
    {% endfor %}

</div>

{% endblock %}
", "sortie/sortie_show.html.twig", "/home/christophe/Projects/Symfony/MesPoissons/templates/sortie/sortie_show.html.twig");
    }
}
