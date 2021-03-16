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

/* base.html.twig */
class __TwigTemplate_8a0eb94714a874e082f3eb166c1dd3188d0445386185c24a60503e0e8f213fc8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Crychou";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        // line 10
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

            <!-- Renders a link tag (if your module requires any CSS)
                 <link rel=\"stylesheet\" href=\"/build/app.scss\"> -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

            <!-- Renders app.js & a webpack runtime.js file
                <script src=\"/build/runtime.js\" defer></script>
                <script src=\"/build/app.js\" defer></script>
                See note below about the \"defer\" attribute -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "            <!-- navbar -->
            <ul class=\"nav justify-content-center p-5\">
                <li class=\"nav-item me-auto\">
                    <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_home");
        echo "\">
                        <img src=\"#\" alt=\"logo\" height=\"102\">
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 35
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35) == "show_home")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_home");
        echo "\"><i class=\"far fa-user me-2\"></i>Artiste</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 38
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", [0 => "_route"], "method", false, false, false, 38) == "show_gallery")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_gallery");
        echo "\"><i class=\"far fa-images me-2\"></i>Galerie</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fas fa-shopping-cart me-2\"></i>Boutique</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fab fa-instagram me-2\"></i>Instagram</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 47
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "get", [0 => "_route"], "method", false, false, false, 47) == "show_contact")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_contact");
        echo "\"><i class=\"far fa-envelope me-2\"></i>Contact</a>
                </li>
                <li class=\"nav-item ms-auto\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fas fa-shopping-bag me-2\"></i>Panier</a>
                </li>
            </ul>
            <!-- / navbar -->
            ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "            <!-- / footer -->
            <ul class=\"nav justify-content-center fixed-bottom\">
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary\" href=\"#\">Paiement</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary\" href=\"#\">CecylByCrechou &#169; Tous droits réservés</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary\" href=\"#\">Mentions légales</a>
                </li>
            </ul>
            <!-- / footer -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 54,  218 => 55,  216 => 54,  204 => 47,  190 => 38,  182 => 35,  174 => 30,  169 => 27,  159 => 26,  141 => 17,  131 => 16,  115 => 10,  113 => 9,  103 => 8,  84 => 5,  72 => 69,  70 => 26,  66 => 24,  64 => 16,  61 => 15,  58 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Crychou{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {# 'app' must match the first argument to addEntry() in webpack.config.js #}
            {{ encore_entry_link_tags('app') }}

            <!-- Renders a link tag (if your module requires any CSS)
                 <link rel=\"stylesheet\" href=\"/build/app.scss\"> -->
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}

            <!-- Renders app.js & a webpack runtime.js file
                <script src=\"/build/runtime.js\" defer></script>
                <script src=\"/build/app.js\" defer></script>
                See note below about the \"defer\" attribute -->
        {% endblock %}
    </head>
    <body>
        {% block body %}
            <!-- navbar -->
            <ul class=\"nav justify-content-center p-5\">
                <li class=\"nav-item me-auto\">
                    <a class=\"nav-link\" href=\"{{ path('show_home') }}\">
                        <img src=\"#\" alt=\"logo\" height=\"102\">
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_home' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_home') }}\"><i class=\"far fa-user me-2\"></i>Artiste</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_gallery' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_gallery') }}\"><i class=\"far fa-images me-2\"></i>Galerie</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fas fa-shopping-cart me-2\"></i>Boutique</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fab fa-instagram me-2\"></i>Instagram</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_contact' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_contact') }}\"><i class=\"far fa-envelope me-2\"></i>Contact</a>
                </li>
                <li class=\"nav-item ms-auto\">
                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fas fa-shopping-bag me-2\"></i>Panier</a>
                </li>
            </ul>
            <!-- / navbar -->
            {% block content %}{% endblock %}
            <!-- / footer -->
            <ul class=\"nav justify-content-center fixed-bottom\">
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary\" href=\"#\">Paiement</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary\" href=\"#\">CecylByCrechou &#169; Tous droits réservés</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary\" href=\"#\">Mentions légales</a>
                </li>
            </ul>
            <!-- / footer -->
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/srv/http/CecylByCrychou/cecyl_by_crychou/templates/base.html.twig");
    }
}
