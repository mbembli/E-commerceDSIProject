<?php

/* admin/details-commande.html.twig */
class __TwigTemplate_1cba0082b2be7aa26a888da9636b1b2e5ab24b670c907581707343443a53ccb4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/details-commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/details-commande.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>commande_imprimer</title>
\t<link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
\t<meta charset=utf-8>
\t<meta name=viewport content=\"width=device-width, initial-scale=1\">
</head>
<body>
\t<table class=\"table\">
\t\t<tr>
\t\t\t<td width=\"30px\">
\t\t\t\t<img src=\"/images/home/logo.jpg\" alt=\"Logo\" height=\"70px\" width=\"70px\" />
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<h3>Commande n° ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 16, $this->source); })()), "id", array()), "html", null, true);
        echo "</h3>
\t\t\t\t<h4>Du ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 17, $this->source); })()), "date", array()), "Y-m-d"), "html", null, true);
        echo "</h4>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<h5>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 20, $this->source); })()), "fullname", array()), "html", null, true);
        echo "</h5>
\t\t\t\t<h5>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 21, $this->source); })()), "email", array()), "html", null, true);
        echo "</h5>
\t\t\t\t<h5>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 22, $this->source); })()), "adresse", array()), "html", null, true);
        echo "</h4>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Produit</th>
\t\t\t\t<th>PU</th>
\t\t\t\t<th>Qté</th>
\t\t\t\t<th>Total</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t
\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new Twig_Error_Runtime('Variable "list" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 39
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", array()), "descriptCourt", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "qte", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 45
            $context["foo"] = (twig_get_attribute($this->env, $this->source, $context["p"], "qte", array()) * twig_get_attribute($this->env, $this->source, $context["p"], "prix", array()));
            // line 46
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td>Total HT</td>
\t\t\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td>Montant TVA 10%</td>
\t\t\t\t<td>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["totalTVA"]) || array_key_exists("totalTVA", $context) ? $context["totalTVA"] : (function () { throw new Twig_Error_Runtime('Variable "totalTVA" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td><strong>Total TTC</strong></td>
\t\t\t\t<td><strong>";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["totalFinal"]) || array_key_exists("totalFinal", $context) ? $context["totalFinal"] : (function () { throw new Twig_Error_Runtime('Variable "totalFinal" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "</strong></td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/details-commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 70,  138 => 63,  128 => 56,  120 => 50,  109 => 46,  107 => 45,  102 => 43,  98 => 42,  94 => 41,  90 => 40,  87 => 39,  83 => 38,  64 => 22,  60 => 21,  56 => 20,  50 => 17,  46 => 16,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title>commande_imprimer</title>
\t<link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
\t<meta charset=utf-8>
\t<meta name=viewport content=\"width=device-width, initial-scale=1\">
</head>
<body>
\t<table class=\"table\">
\t\t<tr>
\t\t\t<td width=\"30px\">
\t\t\t\t<img src=\"/images/home/logo.jpg\" alt=\"Logo\" height=\"70px\" width=\"70px\" />
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<h3>Commande n° {{c.id}}</h3>
\t\t\t\t<h4>Du {{c.date|date('Y-m-d')}}</h4>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<h5>{{c.fullname}}</h5>
\t\t\t\t<h5>{{c.email}}</h5>
\t\t\t\t<h5>{{c.adresse}}</h4>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Produit</th>
\t\t\t\t<th>PU</th>
\t\t\t\t<th>Qté</th>
\t\t\t\t<th>Total</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t
\t\t\t{% for p in list %}
\t\t\t<tr>
\t\t\t\t<td>{{p.id}}</td>
\t\t\t\t<td>{{p.produit.descriptCourt}}</td>
\t\t\t\t<td>{{p.prix}}</td>
\t\t\t\t<td>{{p.qte}}</td>
\t\t\t\t<td>
\t\t\t\t\t{% set foo = p.qte * p.prix %}
\t\t\t\t\t{{ foo }}
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{%endfor%}

\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td>Total HT</td>
\t\t\t\t<td>{{totalHT}}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td>Montant TVA 10%</td>
\t\t\t\t<td>{{totalTVA}}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td><strong>Total TTC</strong></td>
\t\t\t\t<td><strong>{{totalFinal}}</strong></td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</body>
</html>


", "admin/details-commande.html.twig", "/home/mbembli/projectDSI3/app/Resources/views/admin/details-commande.html.twig");
    }
}
