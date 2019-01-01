<?php

/* index.html.twig */
class __TwigTemplate_7d78ab15f278de60b68a5054032fccc4836085f7f01c2a784986110e10d41663 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

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
        echo "<section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">
                        <h2>Présentation</h2>
                        <div class=\"panel-group category-products\" id=\"accordian\">
                            Bienvenue au site Mohamed Bembli. Cliquer sur une catégorie pour avoir la liste des produits de cette catégorie. Ensuite ajouter le produit de votre choix au panier et validez votre commande.
                        </div>
                    

                        
                    
                    </div>
                </div>
                
                <div class=\"col-sm-9 padding-right\">
                    <div class=\"features_items\"><!--features_items-->
                        <h2 class=\"title text-center\">Les catégories de produits</h2>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 24
            echo "                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                        <div class=\"productinfo text-center\">
                                            <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "image", array()), "html", null, true);
            echo "\" alt=\"\" />
                                            <a href=\"/products/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default add-to-cart\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "libelle", array()));
            echo "</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                    
                    </div><!--features_items-->
                    
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  88 => 29,  84 => 28,  78 => 24,  74 => 23,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
<section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">
                        <h2>Présentation</h2>
                        <div class=\"panel-group category-products\" id=\"accordian\">
                            Bienvenue au site Mohamed Bembli. Cliquer sur une catégorie pour avoir la liste des produits de cette catégorie. Ensuite ajouter le produit de votre choix au panier et validez votre commande.
                        </div>
                    

                        
                    
                    </div>
                </div>
                
                <div class=\"col-sm-9 padding-right\">
                    <div class=\"features_items\"><!--features_items-->
                        <h2 class=\"title text-center\">Les catégories de produits</h2>
                        {% for c in categories %}
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                        <div class=\"productinfo text-center\">
                                            <img src=\"{{c.image}}\" alt=\"\" />
                                            <a href=\"/products/{{c.id}}\" class=\"btn btn-default add-to-cart\">{{c.libelle|e}}</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}

                    
                    </div><!--features_items-->
                    
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "index.html.twig", "/home/mbembli/projectDSI3/app/Resources/views/index.html.twig");
    }
}
