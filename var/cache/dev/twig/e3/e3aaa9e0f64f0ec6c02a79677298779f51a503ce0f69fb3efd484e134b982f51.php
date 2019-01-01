<?php

/* base2.html.twig */
class __TwigTemplate_e8aef56c3cc7b866957696bfeef607bae8344d1a5c12b5b2db453c5879bb254c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin - Tableau de bord</title>

    <!-- Bootstrap CSS -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">


</head>

<body>

    <div class=\"navbar navbar-default\">
        <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_homepage");
        echo "\">Mohamed Bembli</a>
        <ul class=\"nav navbar-nav\">
            <li> <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_homepage");
        echo "\">Accueil</a> </li>
            <li> <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_index");
        echo "\">Catégoies</a> </li>
            <li> <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_index");
        echo "\">Produits</a> </li>
            <li> <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_avis_index");
        echo "\">Avis</a> </li>
            <li> <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_commande_index");
        echo "\">Commandes</a> </li>
        </ul>
    </div>
    
    ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    
    
    <script src=\"/js/jquery.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  96 => 29,  80 => 32,  78 => 29,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  50 => 19,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin - Tableau de bord</title>

    <!-- Bootstrap CSS -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">


</head>

<body>

    <div class=\"navbar navbar-default\">
        <a class=\"navbar-brand\" href=\"{{ path('admin_homepage')}}\">Mohamed Bembli</a>
        <ul class=\"nav navbar-nav\">
            <li> <a href=\"{{ path('admin_homepage')}}\">Accueil</a> </li>
            <li> <a href=\"{{ path('admin_categorie_index') }}\">Catégoies</a> </li>
            <li> <a href=\"{{ path('admin_produit_index') }}\">Produits</a> </li>
            <li> <a href=\"{{ path('admin_avis_index') }}\">Avis</a> </li>
            <li> <a href=\"{{ path('admin_commande_index') }}\">Commandes</a> </li>
        </ul>
    </div>
    
    {% block body %}

    {% endblock %}
    
    
    <script src=\"/js/jquery.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
</body>

</html>", "base2.html.twig", "/home/mbembli/projectDSI3/app/Resources/views/base2.html.twig");
    }
}
