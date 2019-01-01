<?php

/* produit_details.html.twig */
class __TwigTemplate_80285262f8acc757f4344b2cd92eaef89cbfebe65a8f4106f64b2a4e4b5c2042 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produit_details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit_details.html.twig"));

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
        echo "
<div class=\"container\" >
\t<div class=\"row\">
\t\t<div class='col-sm-6'>
\t\t\t<div class=\"w3-content w3-display-container\">
\t\t\t  <img class=\"mySlides\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 9, $this->source); })()), "imagePrin", array()), "html", null, true);
        echo "\" width=\"100%px\" height=\"500px\">
\t\t\t  ";
        // line 10
        $context["foo"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 10, $this->source); })()), "imagesSec", array()), "**");
        // line 11
        echo "\t\t\t  <img class=\"mySlides\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 11, $this->source); })()), 0, array(), "array"), "html", null, true);
        echo "\" width=\"100%px\" height=\"500px\">
\t\t\t  <img class=\"mySlides\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 12, $this->source); })()), 1, array(), "array"), "html", null, true);
        echo "\" width=\"100%px\" height=\"500px\">

\t\t\t  <button class=\"w3-button w3-black w3-display-left\" onclick=\"plusDivs(-1)\">&#10094;</button>
\t\t\t  <button class=\"w3-button w3-black w3-display-right\" onclick=\"plusDivs(1)\">&#10095;</button>
\t\t\t</div>

\t\t</div>

\t\t<div class='col-sm-6'>
\t\t\t
\t\t\t<h2>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 22, $this->source); })()), "libellle", array()), "html", null, true);
        echo "</h2>
\t\t\t<b>Prix : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 23, $this->source); })()), "prix", array()), "html", null, true);
        echo " TND</b><br><br>
\t\t\t<button type=\"button\"  id=\"plus\" class=\"btn btn-success\">+</button>
\t\t\t<input type=\"text\" name=\"qte\" value=\"0\" id=\"qte\">
\t\t\t<button type=\"button\" id=\"moin\" class=\"btn btn-success\">-</button><br>
\t\t\t<button onclick=\"addProduct(";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 27, $this->source); })()), "id", array()), "html", null, true);
        echo ");\" type=\"button\" class=\"btn btn-primary\">Ajouter au panier</button><br><br>
\t\t\t<h3><font color='green'>Mettez votre avis ici</font></h3>
\t\t\t<input class=\"rating\" id=\"ratingv\" type=\"hidden\">
\t\t\t<input type=\"hidden\" id=\"prodval\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 30, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
\t\t\t<hr>
\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"5\"></i>
\t\t\t  <b>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["one"]) || array_key_exists("one", $context) ? $context["one"] : (function () { throw new Twig_Error_Runtime('Variable "one" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " Avis</b>
\t\t\t</div>

\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"5\"></i>
\t\t\t  <b>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["two"]) || array_key_exists("two", $context) ? $context["two"] : (function () { throw new Twig_Error_Runtime('Variable "two" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " Avis</b>
\t\t\t</div>

\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"5\"></i>
\t\t\t  <b>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["three"]) || array_key_exists("three", $context) ? $context["three"] : (function () { throw new Twig_Error_Runtime('Variable "three" does not exist.', 56, $this->source); })()), "html", null, true);
        echo " Avis</b>
\t\t\t</div>

\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"5\"></i>
\t\t\t  <b>";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["fours"]) || array_key_exists("fours", $context) ? $context["fours"] : (function () { throw new Twig_Error_Runtime('Variable "fours" does not exist.', 65, $this->source); })()), "html", null, true);
        echo " Avis</b>
\t\t\t</div>

\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"5\"></i>
\t\t\t  <b>";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["five"]) || array_key_exists("five", $context) ? $context["five"] : (function () { throw new Twig_Error_Runtime('Variable "five" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " Avis</b>
\t\t\t</div>
\t\t</div>
\t\t<div class='col-sm-12'>
\t\t\t
\t\t\t<h2 class=\"w3-center\"><font color='red'>Description</font></h2>
\t\t\t";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 80, $this->source); })()), "descriptLong", array()), "html", null, true);
        echo "
\t\t</div>
\t</div>

</div>
<br><br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 80,  160 => 74,  148 => 65,  136 => 56,  124 => 47,  112 => 38,  101 => 30,  95 => 27,  88 => 23,  84 => 22,  71 => 12,  66 => 11,  64 => 10,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

<div class=\"container\" >
\t<div class=\"row\">
\t\t<div class='col-sm-6'>
\t\t\t<div class=\"w3-content w3-display-container\">
\t\t\t  <img class=\"mySlides\" src=\"{{ produit.imagePrin }}\" width=\"100%px\" height=\"500px\">
\t\t\t  {% set foo = produit.imagesSec|split('**') %}
\t\t\t  <img class=\"mySlides\" src=\"{{ foo[0] }}\" width=\"100%px\" height=\"500px\">
\t\t\t  <img class=\"mySlides\" src=\"{{ foo[1] }}\" width=\"100%px\" height=\"500px\">

\t\t\t  <button class=\"w3-button w3-black w3-display-left\" onclick=\"plusDivs(-1)\">&#10094;</button>
\t\t\t  <button class=\"w3-button w3-black w3-display-right\" onclick=\"plusDivs(1)\">&#10095;</button>
\t\t\t</div>

\t\t</div>

\t\t<div class='col-sm-6'>
\t\t\t
\t\t\t<h2>{{ produit.libellle }}</h2>
\t\t\t<b>Prix : {{ produit.prix }} TND</b><br><br>
\t\t\t<button type=\"button\"  id=\"plus\" class=\"btn btn-success\">+</button>
\t\t\t<input type=\"text\" name=\"qte\" value=\"0\" id=\"qte\">
\t\t\t<button type=\"button\" id=\"moin\" class=\"btn btn-success\">-</button><br>
\t\t\t<button onclick=\"addProduct({{produit.id}});\" type=\"button\" class=\"btn btn-primary\">Ajouter au panier</button><br><br>
\t\t\t<h3><font color='green'>Mettez votre avis ici</font></h3>
\t\t\t<input class=\"rating\" id=\"ratingv\" type=\"hidden\">
\t\t\t<input type=\"hidden\" id=\"prodval\" value=\"{{ produit.id }}\">
\t\t\t<hr>
\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"5\"></i>
\t\t\t  <b>{{one}} Avis</b>
\t\t\t</div>

\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"5\"></i>
\t\t\t  <b>{{two}} Avis</b>
\t\t\t</div>

\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"5\"></i>
\t\t\t  <b>{{three}} Avis</b>
\t\t\t</div>

\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star-o\" data-rating=\"5\"></i>
\t\t\t  <b>{{fours}} Avis</b>
\t\t\t</div>

\t\t\t<div class=\"simple-rating star-rating\">
\t\t\t  <i class=\"fa fa-star\" data-rating=\"1\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"2\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"3\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"4\"></i>
\t\t\t  <i class=\"fa fa-star\" data-rating=\"5\"></i>
\t\t\t  <b>{{five}} Avis</b>
\t\t\t</div>
\t\t</div>
\t\t<div class='col-sm-12'>
\t\t\t
\t\t\t<h2 class=\"w3-center\"><font color='red'>Description</font></h2>
\t\t\t{{produit.descriptLong}}
\t\t</div>
\t</div>

</div>
<br><br><br>
{% endblock %}

", "produit_details.html.twig", "/home/mbembli/E-commerceDSI/app/Resources/views/produit_details.html.twig");
    }
}
