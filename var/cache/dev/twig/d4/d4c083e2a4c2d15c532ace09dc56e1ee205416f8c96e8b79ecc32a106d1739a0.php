<?php

/* panier.html.twig */
class __TwigTemplate_5dfd0d715f1f0644e55ac3d2d65251a946b0cfd91028dcd0e7aa92736b0b47ae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "panier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier.html.twig"));

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
        echo "\t<section id=\"cart_items\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Panier</li>
\t\t\t\t</ol>
\t\t\t</div>



\t\t\t<div class=\"table-responsive cart_info\">
\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"cart_menu\">
\t\t\t\t\t\t\t<td class=\"image\">Produit</td>
\t\t\t\t\t\t\t<td class=\"description\">Détails</td>
\t\t\t\t\t\t\t<td class=\"price\">Prix TND</td>
\t\t\t\t\t\t\t<td class=\"quantity\">Quantité</td>
\t\t\t\t\t\t\t<td class=\"total\">Total TND</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 29
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"cart_product\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_produit_details", array("id_produit" => twig_get_attribute($this->env, $this->source, $context["p"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "imagePrin", array()), "html", null, true);
            echo "\" width=\"100px\" alt=\"\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_description\">
\t\t\t\t\t\t\t\t<h4><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_produit_details", array("id_produit" => twig_get_attribute($this->env, $this->source, $context["p"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "descriptCourt", array()));
            echo "</a></h4>
\t\t\t\t\t\t\t\t<p>ID: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", array()));
            echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_price\">
\t\t\t\t\t\t\t\t<p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", array()));
            echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_quantity\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"updateQtePlus(";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", array()));
            echo ");\" id=\"plus_1\" class=\"btn btn-secondary\">+</button>
\t\t\t\t\t\t\t\t\t<input id=\"qte_1\" type=\"text\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 42, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["p"], "id", array()), array(), "array"), "html", null, true);
            echo "\" autocomplete=\"off\" size=\"2\" disabled=\"\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"moin_1\" onclick=\"updateQteMoin(";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", array()));
            echo ");\"class=\"btn btn-secondary\">-</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_total\">
\t\t\t\t\t\t\t\t<p class=\"cart_total_price\">";
            // line 46
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 46, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["p"], "id", array()), array(), "array") * twig_get_attribute($this->env, $this->source, $context["p"], "prix", array())), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_delete\">
\t\t\t\t\t\t\t\t<a class=\"cart_quantity_delete\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", array("id_produit" => twig_get_attribute($this->env, $this->source, $context["p"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>


\t\t</div>
\t</section> <!--/#cart_items-->

\t<section id=\"do_action\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">

\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<div class=\"total_area\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Sous total <span>";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Panier:PanierSomme"));
        echo "</span></li>
\t\t\t\t\t\t\t<li>TVA (10%) <span>";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Panier:TVASomme"));
        echo "</span></li>
\t\t\t\t\t\t\t<li>Frais de transport <span>Gratuit</span></li>
\t\t\t\t\t\t\t<li>Total <span>";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Panier:FinalSomme"));
        echo "</span></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<a class=\"btn btn-default update\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clear_panier");
        echo "\">Vider le panier</a> 

\t\t\t\t\t\t<a class=\"btn btn-default check_out pull-right\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_commander_index");
        echo "\">Valider ma commande</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section><!--/#do_action-->
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 78,  180 => 76,  174 => 73,  169 => 71,  165 => 70,  146 => 53,  136 => 49,  130 => 46,  124 => 43,  120 => 42,  116 => 41,  110 => 38,  104 => 35,  98 => 34,  90 => 31,  86 => 29,  82 => 28,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<section id=\"cart_items\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{ path('homepage')}}\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Panier</li>
\t\t\t\t</ol>
\t\t\t</div>



\t\t\t<div class=\"table-responsive cart_info\">
\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"cart_menu\">
\t\t\t\t\t\t\t<td class=\"image\">Produit</td>
\t\t\t\t\t\t\t<td class=\"description\">Détails</td>
\t\t\t\t\t\t\t<td class=\"price\">Prix TND</td>
\t\t\t\t\t\t\t<td class=\"quantity\">Quantité</td>
\t\t\t\t\t\t\t<td class=\"total\">Total TND</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{%for p in produits %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"cart_product\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_produit_details', {'id_produit': p.id}) }}\"><img src=\"{{p.imagePrin}}\" width=\"100px\" alt=\"\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_description\">
\t\t\t\t\t\t\t\t<h4><a href=\"{{ path('user_produit_details', {'id_produit': p.id}) }}\">{{p.descriptCourt|e}}</a></h4>
\t\t\t\t\t\t\t\t<p>ID: {{p.id|e}}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_price\">
\t\t\t\t\t\t\t\t<p>{{p.prix|e}}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_quantity\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"updateQtePlus({{p.id|e}});\" id=\"plus_1\" class=\"btn btn-secondary\">+</button>
\t\t\t\t\t\t\t\t\t<input id=\"qte_1\" type=\"text\" value=\"{{panier[p.id]}}\" autocomplete=\"off\" size=\"2\" disabled=\"\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"moin_1\" onclick=\"updateQteMoin({{p.id|e}});\"class=\"btn btn-secondary\">-</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_total\">
\t\t\t\t\t\t\t\t<p class=\"cart_total_price\">{{panier[p.id] * p.prix}}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_delete\">
\t\t\t\t\t\t\t\t<a class=\"cart_quantity_delete\" href=\"{{ path('produit_delete', {'id_produit': p.id}) }}\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>


\t\t</div>
\t</section> <!--/#cart_items-->

\t<section id=\"do_action\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">

\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<div class=\"total_area\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Sous total <span>{{ render(controller('AppBundle:Panier:PanierSomme'))}}</span></li>
\t\t\t\t\t\t\t<li>TVA (10%) <span>{{ render(controller('AppBundle:Panier:TVASomme'))}}</span></li>
\t\t\t\t\t\t\t<li>Frais de transport <span>Gratuit</span></li>
\t\t\t\t\t\t\t<li>Total <span>{{ render(controller('AppBundle:Panier:FinalSomme'))}}</span></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<a class=\"btn btn-default update\" href=\"{{ path('clear_panier') }}\">Vider le panier</a> 

\t\t\t\t\t\t<a class=\"btn btn-default check_out pull-right\" href=\"{{ path('page_commander_index') }}\">Valider ma commande</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section><!--/#do_action-->
\t{% endblock %}", "panier.html.twig", "/home/mbembli/projectDSI3/app/Resources/views/panier.html.twig");
    }
}
