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

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-touch-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/favicon-16x16.png"), "html", null, true);
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/site.webmanifest"), "html", null, true);
        echo "\">
        <link rel=\"mask-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#ff6700\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
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

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "            <div class=\"min-vh-100\">
                <!-- top bar -->
                <nav class=\"navbar navbar-light bg-light\">
                    <div class=\"w-100 d-flex justify-content-between align-items-center\">
                        <div class=\"w-25\"></div>
                        <div class=\"w-25 text-center\">
                            <a href=\"mailto:contact@crychou.com\" class=\"link-secondary text-decoration-none btn-sm\"><i class=\"far fa-envelope me-2\"></i>contact@crychou.com</a>
                            <a href=\"tel:+33624213748\" class=\"link-secondary text-decoration-none btn-sm\"><i class=\"fas fa-phone me-2\"></i>+33 6 11 05 29 18</a>
                        </div>
                        ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle btn-sm\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-user-circle me-2\"></i>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "firstname", [], "any", false, false, false, 35), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "lastname", [], "any", false, false, false, 35), "html", null, true);
            echo "
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-user me-2\"></i>Profil</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion</a></li>
                                </ul>
                            </div>
                        ";
        } else {
            // line 44
            echo "                            <div class=\"w-25 text-end\">
                                <a class=\"btn btn-sm btn-outline-warning\" type=\"button\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                                <a class=\"btn btn-sm me-3 btn-outline-secondary\" type=\"button\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_register");
            echo "\">Inscription</a>
                            </div>
                        ";
        }
        // line 49
        echo "                    </div>
                </nav>
                <!-- / top bar -->
                <!-- navbar -->
                <nav class=\"navbar navbar-expand-lg navbar-light bg-white p-3 shadow-sm\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_home");
        echo "\">
                            <span class=\"font-eras fs-3\">Cr<span class=\"font-viner\">y</span>chou</span>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0 text-center\">
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 64
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "get", [0 => "_route"], "method", false, false, false, 64) == "show_home")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_home");
        echo "\"><i class=\"far fa-user me-2\"></i>biographie</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 67
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67) == "show_gallery")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_gallery");
        echo "\"><i class=\"far fa-images me-2\"></i>œuvres</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fas fa-shopping-cart me-2\"></i>boutique</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"far fa-newspaper me-2\"></i>actualités</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal ";
        // line 76
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "get", [0 => "_route"], "method", false, false, false, 76) == "show_contact")) ? ("text-warning") : ("text-dark"));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_contact");
        echo "\"><i class=\"far fa-envelope me-2\"></i>contact</a>
                                </li>
                                ";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 79
            echo "                                    <li class=\"nav-item px-2 mx-auto\">
                                        <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_admin_home");
            echo "\"><i class=\"fas fa-sliders-h me-2\"></i>administration</a>
                                    </li>
                                ";
        }
        // line 83
        echo "                            </ul>
                            <button type=\"button\" class=\"btn btn-link position-relative link-dark\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Mon Panier\">
                                <i class=\"fas fa-shopping-bag fa-lg\"></i><span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning\">0</span>
                            </button>
                        </div>
                    </div>
                </nav>
                <!-- / navbar -->
                ";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "            </div>
            <!-- footer -->
            <footer class=\"bg-light pt-4\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-3\">
                            <h5 class=\"mb-4\"><span class=\"font-eras fs-3\">Cr<span class=\"font-viner\">y</span>chou</span></h5>
                            <p>About the company, little description will goes here.. </p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-3\">
                            <h5 class=\"mb-4\">Informations</h5>
                            <ul>
                                <li><a href=\"#\" class=\"black-link\">Paiement</a></li>
                                <li><a href=\"#\" class=\"black-link\">Livraison</a></li>
                                <li><a href=\"#\" class=\"black-link\">Conditions générales</a></li>
                                <li><a href=\"#\" class=\"black-link\">Mentions légales</a></li>
                            </ul>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-3\">
                            <h5 class=\"mb-4\">Inscription</h5>
                            <p>Get access to your full Training and Marketing Suite.</p>
                            <a class=\"btn btn-outline-warning\" type=\"button\" href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_register");
        echo "\">Inscription</a>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-3\">
                            <h5 class=\"mb-4\">Contact</h5>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"mailto:contact@crychou.com\" class=\"black-link\"><i class=\"far fa-envelope me-2\"></i>contact@crychou.com</a></li>
                                <li><a href=\"tel:+33624213748\" class=\"black-link\"> <i class=\"fas fa-phone me-2\"></i>+33 6 11 05 29 18</a></li>
                                <li><a href=\"https://www.instagram.com/creationsbycecylbycrychou/\" target=\"_blank\" class=\"black-link\"><i class=\"fab fa-instagram me-2\"></i>creationsbycecylbycrychou</a></li>
                            </ul>

                    </div>
                </div>
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <div class=\"text-center\">
                            <p>Copyright Crychou © 2021. Tous droits réservés.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- / footer -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
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

    // line 136
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 137,  353 => 136,  335 => 91,  303 => 113,  280 => 92,  278 => 91,  268 => 83,  262 => 80,  259 => 79,  257 => 78,  250 => 76,  236 => 67,  228 => 64,  216 => 55,  208 => 49,  202 => 46,  198 => 45,  195 => 44,  188 => 40,  178 => 35,  174 => 33,  172 => 32,  161 => 23,  151 => 22,  138 => 18,  128 => 17,  109 => 15,  97 => 139,  95 => 136,  92 => 135,  90 => 22,  86 => 20,  84 => 17,  79 => 15,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('favicon/apple-touch-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('favicon/favicon-32x32.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('favicon/favicon-16x16.png') }}\">
        <link rel=\"manifest\" href=\"{{ asset('favicon/site.webmanifest') }}\">
        <link rel=\"mask-icon\" href=\"{{ asset('favicon/safari-pinned-tab.svg') }}\" color=\"#ff6700\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">

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
                    <div class=\"w-100 d-flex justify-content-between align-items-center\">
                        <div class=\"w-25\"></div>
                        <div class=\"w-25 text-center\">
                            <a href=\"mailto:contact@crychou.com\" class=\"link-secondary text-decoration-none btn-sm\"><i class=\"far fa-envelope me-2\"></i>contact@crychou.com</a>
                            <a href=\"tel:+33624213748\" class=\"link-secondary text-decoration-none btn-sm\"><i class=\"fas fa-phone me-2\"></i>+33 6 11 05 29 18</a>
                        </div>
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
                            <div class=\"w-25 text-end\">
                                <a class=\"btn btn-sm btn-outline-warning\" type=\"button\" href=\"{{ path('app_login') }}\">Connexion</a>
                                <a class=\"btn btn-sm me-3 btn-outline-secondary\" type=\"button\" href=\"{{ path('show_register') }}\">Inscription</a>
                            </div>
                        {% endif %}
                    </div>
                </nav>
                <!-- / top bar -->
                <!-- navbar -->
                <nav class=\"navbar navbar-expand-lg navbar-light bg-white p-3 shadow-sm\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"{{ path('show_home') }}\">
                            <span class=\"font-eras fs-3\">Cr<span class=\"font-viner\">y</span>chou</span>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0 text-center\">
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_home' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_home') }}\"><i class=\"far fa-user me-2\"></i>biographie</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_gallery' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_gallery') }}\"><i class=\"far fa-images me-2\"></i>œuvres</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"fas fa-shopping-cart me-2\"></i>boutique</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"#\"><i class=\"far fa-newspaper me-2\"></i>actualités</a>
                                </li>
                                <li class=\"nav-item px-2 mx-auto\">
                                    <a class=\"nav-link text-uppercase hvr-underline-reveal {{ app.request.get('_route') == 'show_contact' ? 'text-warning' : 'text-dark' }}\" href=\"{{ path('show_contact') }}\"><i class=\"far fa-envelope me-2\"></i>contact</a>
                                </li>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li class=\"nav-item px-2 mx-auto\">
                                        <a class=\"nav-link text-uppercase hvr-underline-reveal text-dark\" href=\"{{ path('show_admin_home') }}\"><i class=\"fas fa-sliders-h me-2\"></i>administration</a>
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
            <!-- footer -->
            <footer class=\"bg-light pt-4\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-3\">
                            <h5 class=\"mb-4\"><span class=\"font-eras fs-3\">Cr<span class=\"font-viner\">y</span>chou</span></h5>
                            <p>About the company, little description will goes here.. </p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-3\">
                            <h5 class=\"mb-4\">Informations</h5>
                            <ul>
                                <li><a href=\"#\" class=\"black-link\">Paiement</a></li>
                                <li><a href=\"#\" class=\"black-link\">Livraison</a></li>
                                <li><a href=\"#\" class=\"black-link\">Conditions générales</a></li>
                                <li><a href=\"#\" class=\"black-link\">Mentions légales</a></li>
                            </ul>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-3\">
                            <h5 class=\"mb-4\">Inscription</h5>
                            <p>Get access to your full Training and Marketing Suite.</p>
                            <a class=\"btn btn-outline-warning\" type=\"button\" href=\"{{ path('show_register') }}\">Inscription</a>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-3\">
                            <h5 class=\"mb-4\">Contact</h5>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"mailto:contact@crychou.com\" class=\"black-link\"><i class=\"far fa-envelope me-2\"></i>contact@crychou.com</a></li>
                                <li><a href=\"tel:+33624213748\" class=\"black-link\"> <i class=\"fas fa-phone me-2\"></i>+33 6 11 05 29 18</a></li>
                                <li><a href=\"https://www.instagram.com/creationsbycecylbycrychou/\" target=\"_blank\" class=\"black-link\"><i class=\"fab fa-instagram me-2\"></i>creationsbycecylbycrychou</a></li>
                            </ul>

                    </div>
                </div>
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <div class=\"text-center\">
                            <p>Copyright Crychou © 2021. Tous droits réservés.</p>
                        </div>
                    </div>
                </div>
            </footer>
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
