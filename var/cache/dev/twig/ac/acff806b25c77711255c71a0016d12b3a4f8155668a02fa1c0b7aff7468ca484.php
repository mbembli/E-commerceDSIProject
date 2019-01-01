<?php

/* /merci.html.twig */
class __TwigTemplate_b655706b8e45e029d5f71681353066bf0e121847829eeb3d943a79dda365b251 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/merci.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/merci.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/merci.html.twig"));

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
        echo "<section id=\"cart_items\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Commander</li>
\t\t\t\t</ol>
\t\t\t</div><!--/breadcrums-->
\t\t\t<div class=\"step-one\">
\t\t\t\t<h2 class=\"heading\">Commande enregistrée</h2>
\t\t\t</div>

\t\t\t<div class=\"review-payment\">
\t\t\t\t<h2>Confirmation</h2>
\t\t\t\t<p> Votre commande N°";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id_comm"]) || array_key_exists("id_comm", $context) ? $context["id_comm"] : (function () { throw new Twig_Error_Runtime('Variable "id_comm" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " a bien été validée. Elle sera traité dès que nous receverons la preuve du paiement. </p>
\t\t\t\t<br/><br/>
\t\t\t</div>

\t\t\t

\t\t</div>
\t</section> <!--/#cart_items-->
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/merci.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
<section id=\"cart_items\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{ path('homepage')}}\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Commander</li>
\t\t\t\t</ol>
\t\t\t</div><!--/breadcrums-->
\t\t\t<div class=\"step-one\">
\t\t\t\t<h2 class=\"heading\">Commande enregistrée</h2>
\t\t\t</div>

\t\t\t<div class=\"review-payment\">
\t\t\t\t<h2>Confirmation</h2>
\t\t\t\t<p> Votre commande N°{{id_comm}} a bien été validée. Elle sera traité dès que nous receverons la preuve du paiement. </p>
\t\t\t\t<br/><br/>
\t\t\t</div>

\t\t\t

\t\t</div>
\t</section> <!--/#cart_items-->
\t{% endblock %}", "/merci.html.twig", "/home/mbembli/projectDSI3/app/Resources/views/merci.html.twig");
    }
}
