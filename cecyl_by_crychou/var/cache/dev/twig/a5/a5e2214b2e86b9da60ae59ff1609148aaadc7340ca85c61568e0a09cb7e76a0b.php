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
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
        ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
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

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "            <div class=\"min-vh-100\">
                <!-- top bar -->
                <nav class=\"navbar navbar-light bg-light\">
                    <form class=\"container-fluid justify-content-end\">
                        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle btn-sm\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-user-circle me-2\"></i>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "lastname", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-user me-2\"></i>Profil</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion</a></li>
                                </ul>
                            </div>
                        ";
        } else {
            // line 31
            echo "                            <a class=\"btn btn-sm btn-warning text-white me-2\" type=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                            <a class=\"btn btn-sm btn-outline-secondary\" type=\"button\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_register");
            echo "\">Inscription</a>
                        ";
        }
        // line 34
        echo "                    </form>
                </nav>
                <!-- / top bar -->
                <!-- navbar -->
                <nav class=\"navbar navbar-expand-lg navbar-light bg-white p-3 shadow-sm\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_home");
        echo "\">
                            <img src=\"#\" alt=\"logo\" width=\"30\" height=\"24\">
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0 text-center\">
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 49
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49) == "show_home")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_home");
        echo "\"><i class=\"far fa-user me-2\"></i>Biographie</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 52
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "get", [0 => "_route"], "method", false, false, false, 52) == "show_gallery")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_gallery");
        echo "\"><i class=\"far fa-images me-2\"></i>œuvres</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fas fa-shopping-cart me-2\"></i>Boutique</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"far fa-newspaper me-2\"></i>Actualités</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 61
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "get", [0 => "_route"], "method", false, false, false, 61) == "show_contact")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_contact");
        echo "\"><i class=\"far fa-envelope me-2\"></i>Contact</a>
                                </li>
                                ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 64
            echo "                                    <li class=\"nav-item px-2 mx-auto\">
                                        <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_admin_home");
            echo "\"><i class=\"fas fa-sliders-h me-2\"></i>Administration</a>
                                    </li>
                                ";
        }
        // line 68
        echo "                            </ul>
                            <button type=\"button\" class=\"btn btn-link position-relative link-dark\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Mon Panier\">
                                <i class=\"fas fa-shopping-bag fa-lg\"></i><span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning\">0</span>
                            </button>
                        </div>
                    </div>
                </nav>
                <!-- / navbar -->
                ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "            </div>
            <!-- / footer -->
            <ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary hvr-grow\" href=\"#\">Paiement</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary\">Crychou &#169; 2021 &#183; Tous droits réservés</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary hvr-grow\" href=\"#\">Mentions légales</a>
                </li>
            </ul>
            <!-- / footer -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
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

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  301 => 94,  291 => 93,  273 => 76,  249 => 77,  247 => 76,  237 => 68,  231 => 65,  228 => 64,  226 => 63,  219 => 61,  205 => 52,  197 => 49,  185 => 40,  177 => 34,  172 => 32,  167 => 31,  160 => 27,  150 => 22,  146 => 20,  144 => 19,  138 => 15,  128 => 14,  115 => 10,  105 => 9,  86 => 7,  74 => 96,  72 => 93,  69 => 92,  67 => 14,  63 => 12,  61 => 9,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>{% block title %}Crychou{% endblock %}</title>

        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    <body>
        {% block body %}
            <div class=\"min-vh-100\">
                <!-- top bar -->
                <nav class=\"navbar navbar-light bg-light\">
                    <form class=\"container-fluid justify-content-end\">
                        {% if app.user %}
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle btn-sm\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-user-circle me-2\"></i>{{ app.user.firstname }} {{ app.user.lastname }}
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-user me-2\"></i>Profil</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion</a></li>
                                </ul>
                            </div>
                        {% else %}
                            <a class=\"btn btn-sm btn-warning text-white me-2\" type=\"button\" href=\"{{ path('app_login') }}\">Connexion</a>
                            <a class=\"btn btn-sm btn-outline-secondary\" type=\"button\" href=\"{{ path('show_register') }}\">Inscription</a>
                        {% endif %}
                    </form>
                </nav>
                <!-- / top bar -->
                <!-- navbar -->
                <nav class=\"navbar navbar-expand-lg navbar-light bg-white p-3 shadow-sm\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"{{ path('show_home') }}\">
                            <img src=\"#\" alt=\"logo\" width=\"30\" height=\"24\">
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0 text-center\">
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_home' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_home') }}\"><i class=\"far fa-user me-2\"></i>Biographie</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_gallery' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_gallery') }}\"><i class=\"far fa-images me-2\"></i>œuvres</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fas fa-shopping-cart me-2\"></i>Boutique</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"far fa-newspaper me-2\"></i>Actualités</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_contact' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_contact') }}\"><i class=\"far fa-envelope me-2\"></i>Contact</a>
                                </li>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li class=\"nav-item px-2 mx-auto\">
                                        <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"{{ path('show_admin_home') }}\"><i class=\"fas fa-sliders-h me-2\"></i>Administration</a>
                                    </li>
                                {% endif %}
                            </ul>
                            <button type=\"button\" class=\"btn btn-link position-relative link-dark\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Mon Panier\">
                                <i class=\"fas fa-shopping-bag fa-lg\"></i><span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning\">0</span>
                            </button>
                        </div>
                    </div>
                </nav>
                <!-- / navbar -->
                {% block content %}{% endblock %}
            </div>
            <!-- / footer -->
            <ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary hvr-grow\" href=\"#\">Paiement</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary\">Crychou &#169; 2021 &#183; Tous droits réservés</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-secondary hvr-grow\" href=\"#\">Mentions légales</a>
                </li>
            </ul>
            <!-- / footer -->
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/srv/http/CecylByCrychou/cecyl_by_crychou/templates/base.html.twig");
    }
}
