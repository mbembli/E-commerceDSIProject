<?php

/* base.html.twig */
class __TwigTemplate_240cb04b2297bbca438e3a126269d8e004796dffd1a6b5afcf105935b94150de extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Mohamed Bembli</title>
</head><!--/head-->

<body>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"/css/main.css\" rel=\"stylesheet\">

    <header id=\"header\"><!--header-->
        
        <div class=\"header-middle\"><!--header-middle-->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"logo pull-left\">
                            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><img src=\"/images/home/logo.jpg\" alt=\"\" width=\"80px\" height=\"80px\" />&nbsp;&nbsp;<b>Mohamed Bembli</b></a>
                        </div>

                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"shop-menu pull-right\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_details");
        echo "\"><i class=\"fa fa-shopping-cart\"></i> Panier (";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Panier:nbProduits"));
        echo ")</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

    </header><!--/header-->
    
    
    
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    
    <footer id=\"footer\"><!--Footer-->

        
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <p class=\"pull-left\">Copyright © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "Y"), "html", null, true);
        echo " Mohamed Bembli INC.</p>
                    <p class=\"pull-right\">Designed by <span><a target=\"_blank\" href=\"https://www.facebook.com/mbembli\">Mohamed Bembli</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    
    <script src=\"/js/jquery.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/script.js\"></script>
    <script src=\"/js/simple-rating.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  115 => 41,  91 => 51,  82 => 44,  80 => 41,  63 => 29,  53 => 22,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Mohamed Bembli</title>
</head><!--/head-->

<body>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"/css/main.css\" rel=\"stylesheet\">

    <header id=\"header\"><!--header-->
        
        <div class=\"header-middle\"><!--header-middle-->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"logo pull-left\">
                            <a href=\"{{path('homepage')}}\"><img src=\"/images/home/logo.jpg\" alt=\"\" width=\"80px\" height=\"80px\" />&nbsp;&nbsp;<b>Mohamed Bembli</b></a>
                        </div>

                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"shop-menu pull-right\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"{{path('panier_details')}}\"><i class=\"fa fa-shopping-cart\"></i> Panier ({{ render(controller('AppBundle:Panier:nbProduits'))}})</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

    </header><!--/header-->
    
    
    
    {% block body %}

    {% endblock %}
    
    <footer id=\"footer\"><!--Footer-->

        
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <p class=\"pull-left\">Copyright © {{date()|date('Y')}} Mohamed Bembli INC.</p>
                    <p class=\"pull-right\">Designed by <span><a target=\"_blank\" href=\"https://www.facebook.com/mbembli\">Mohamed Bembli</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    
    <script src=\"/js/jquery.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/script.js\"></script>
    <script src=\"/js/simple-rating.js\"></script>
</body>
</html>", "base.html.twig", "/home/mbembli/projectDSI3/app/Resources/views/base.html.twig");
    }
}
