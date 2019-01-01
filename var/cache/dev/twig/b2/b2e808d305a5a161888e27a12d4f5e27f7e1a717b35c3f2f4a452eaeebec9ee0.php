<?php

/* produit.html.twig */
class __TwigTemplate_d87137fb67ac36f09d1d11d3c85ee0d894e1086f3d6419ebba8f5501d178b555 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<div class=\"left-sidebar\">
\t\t\t\t\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mycat"]) || array_key_exists("mycat", $context) ? $context["mycat"] : (function () { throw new Twig_Error_Runtime('Variable "mycat" does not exist.', 9, $this->source); })()), "libelle", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<div class=\"panel-group category-products\" id=\"accordian\">
\t\t\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mycat"]) || array_key_exists("mycat", $context) ? $context["mycat"] : (function () { throw new Twig_Error_Runtime('Variable "mycat" does not exist.', 11, $this->source); })()), "description", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-9 padding-right\">
\t\t\t\t\t<div class=\"style_\"><!--features_items-->
\t\t\t\t\t<h2 class=\"title text-center\">Les produits de la catégorie ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mycat"]) || array_key_exists("mycat", $context) ? $context["mycat"] : (function () { throw new Twig_Error_Runtime('Variable "mycat" does not exist.', 22, $this->source); })()), "libelle", array()));
        echo "</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "imagePrin", array()), "html", null, true);
            echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "libellle", array()));
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "descriptCourt", array()));
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_produit_details", array("id_produit" => twig_get_attribute($this->env, $this->source, $context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default add-to-cart\"><i class=\"glyphicon glyphicon-info-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\tDetails
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t</div><!--features_items-->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  88 => 25,  84 => 24,  79 => 22,  65 => 11,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<div class=\"left-sidebar\">
\t\t\t\t\t\t<h2>{{mycat.libelle}}</h2>
\t\t\t\t\t\t<div class=\"panel-group category-products\" id=\"accordian\">
\t\t\t\t\t\t\t{{mycat.description}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-9 padding-right\">
\t\t\t\t\t<div class=\"style_\"><!--features_items-->
\t\t\t\t\t<h2 class=\"title text-center\">Les produits de la catégorie {{mycat.libelle|e}}</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t{%for p in produits %}
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{p.imagePrin}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<p>{{p.libellle|e}}</p>
\t\t\t\t\t\t\t\t\t\t<p>{{p.descriptCourt|e}}</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('user_produit_details', {'id_produit': p.id}) }}\" class=\"btn btn-default add-to-cart\"><i class=\"glyphicon glyphicon-info-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\tDetails
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div><!--features_items-->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}", "produit.html.twig", "/home/mbembli/projectDSI3/app/Resources/views/produit.html.twig");
    }
}
