<?php

/* produit/index.html.twig */
class __TwigTemplate_e44e9679476bd85053068554ed51f36d3488aae0fe12e39e45c906ef8b511994 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "produit/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

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
        echo "    <h1>Produits list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Libellle</th>
                <th>Descriptcourt</th>
                <th>Descriptlong</th>
                <th>Imageprin</th>
                <th>Imagessec</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "libellle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "descriptCourt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["produit"], "descriptLong", array());
            echo "</td>
                <td><img src='";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "imagePrin", array()), "html", null, true);
            echo "' width='150px' height='150px'></td>
                ";
            // line 27
            $context["foo"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "imagesSec", array()), "**");
            // line 28
            echo "               <td><img src='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 28, $this->source); })()), 0, array(), "array"), "html", null, true);
            echo "' width='150px' height='150px'>&nbsp;<img src='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 28, $this->source); })()), 1, array(), "array"), "html", null, true);
            echo "' width='150px' height='150px'></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_new");
        echo "\">Create a new produit</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  134 => 42,  122 => 36,  116 => 33,  109 => 29,  102 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  78 => 22,  75 => 21,  71 => 20,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
    <h1>Produits list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Libellle</th>
                <th>Descriptcourt</th>
                <th>Descriptlong</th>
                <th>Imageprin</th>
                <th>Imagessec</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td><a href=\"{{ path('admin_produit_show', { 'id': produit.id }) }}\">{{ produit.id }}</a></td>
                <td>{{ produit.libellle }}</td>
                <td>{{ produit.descriptCourt }}</td>
                <td>{{ produit.descriptLong |raw}}</td>
                <td><img src='{{ produit.imagePrin }}' width='150px' height='150px'></td>
                {% set foo = produit.imagesSec|split('**') %}
               <td><img src='{{ foo[0] }}' width='150px' height='150px'>&nbsp;<img src='{{ foo[1]}}' width='150px' height='150px'></td>
                <td>{{ produit.prix }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_produit_show', { 'id': produit.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_produit_edit', { 'id': produit.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('admin_produit_new') }}\">Create a new produit</a>
        </li>
    </ul>
{% endblock %}
", "produit/index.html.twig", "/home/mbembli/projectDSI3/app/Resources/views/produit/index.html.twig");
    }
}
