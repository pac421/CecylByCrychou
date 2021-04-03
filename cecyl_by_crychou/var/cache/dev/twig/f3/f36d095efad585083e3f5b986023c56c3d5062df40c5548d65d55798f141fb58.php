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

/* contact.html.twig */
class __TwigTemplate_82e157f49b390d0ee6683800bfe6343a4f7ea865f022e3434a38db7e5dc4023f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact &#183; Crychou";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container-md\">
        <h1 class=\"my-5\"><span class=\"text-warning\">/</span>&nbsp;Contact</h1>
        <div class=\"row align-items-center\">
            <div class=\"col-12 col-md-6 mb-5\">
                <dl class=\"row\">
                    <dt class=\"col-1 text-warning mb-4\">
                        <i class=\"far fa-envelope fa-lg me-3\"></i>
                    </dt>
                    <dd class=\"col-11\"><a href=\"mailto:contact@crychou.com\" class=\"black-link\">contact@crychou.com</a></dd>
                    <dt class=\"col-1 text-warning mb-4\">
                        <i class=\"fas fa-phone fa-lg me-3\"></i>
                    </dt>
                    <dd class=\"col-11\"><a href=\"tel:+33624213748\" class=\"black-link\">+33 6 11 05 29 18</a></dd>
                    <dt class=\"col-1 text-warning mb-4\">
                        <i class=\"fab fa-instagram fa-lg me-3\"></i>
                    </dt>
                    <dd class=\"col-11\"><a href=\"https://www.instagram.com/creationsbycecylbycrychou/\" target=\"_blank\" class=\"black-link\">creationsbycecylbycrychou</a></dd>
                    <dt class=\"col-1 text-warning mb-4\">
                        <i class=\"fas fa-map-marker-alt fa-lg me-3\"></i>
                    </dt>
                    <dd class=\"col-11\"><span class=\"text-dark\">Crychou Creations<br />BP 90020<br />83401 HYERES CEDEX<br />FRANCE</span></dd>
                </dl>
            </div>
            <div class=\"col-12 col-md-6 mb-5\">
                <h4 class=\"mb-4\"><i class=\"far fa-paper-plane me-4\"></i>Envoyer un message</h4>
                <form class=\"form-floating\">
                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Nom\">
                        <label for=\"name\">Nom</label>
                    </div>
                    <div class=\"form-floating mb-3\">
                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\">
                        <label for=\"email\">Email</label>
                    </div>
                    <div class=\"form-floating mb-3\">
                        <textarea class=\"form-control\" id=\"message\" placeholder=\"Message\" style=\"height: 200px\"></textarea>
                        <label for=\"message\">Message</label>
                    </div>
                    <button type=\"button\" class=\"btn btn-warning text-white\">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact &#183; Crychou{% endblock %}

{% block content %}
    <div class=\"container-md\">
        <h1 class=\"my-5\"><span class=\"text-warning\">/</span>&nbsp;Contact</h1>
        <div class=\"row align-items-center\">
            <div class=\"col-12 col-md-6 mb-5\">
                <dl class=\"row\">
                    <dt class=\"col-1 text-warning mb-4\">
                        <i class=\"far fa-envelope fa-lg me-3\"></i>
                    </dt>
                    <dd class=\"col-11\"><a href=\"mailto:contact@crychou.com\" class=\"black-link\">contact@crychou.com</a></dd>
                    <dt class=\"col-1 text-warning mb-4\">
                        <i class=\"fas fa-phone fa-lg me-3\"></i>
                    </dt>
                    <dd class=\"col-11\"><a href=\"tel:+33624213748\" class=\"black-link\">+33 6 11 05 29 18</a></dd>
                    <dt class=\"col-1 text-warning mb-4\">
                        <i class=\"fab fa-instagram fa-lg me-3\"></i>
                    </dt>
                    <dd class=\"col-11\"><a href=\"https://www.instagram.com/creationsbycecylbycrychou/\" target=\"_blank\" class=\"black-link\">creationsbycecylbycrychou</a></dd>
                    <dt class=\"col-1 text-warning mb-4\">
                        <i class=\"fas fa-map-marker-alt fa-lg me-3\"></i>
                    </dt>
                    <dd class=\"col-11\"><span class=\"text-dark\">Crychou Creations<br />BP 90020<br />83401 HYERES CEDEX<br />FRANCE</span></dd>
                </dl>
            </div>
            <div class=\"col-12 col-md-6 mb-5\">
                <h4 class=\"mb-4\"><i class=\"far fa-paper-plane me-4\"></i>Envoyer un message</h4>
                <form class=\"form-floating\">
                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Nom\">
                        <label for=\"name\">Nom</label>
                    </div>
                    <div class=\"form-floating mb-3\">
                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\">
                        <label for=\"email\">Email</label>
                    </div>
                    <div class=\"form-floating mb-3\">
                        <textarea class=\"form-control\" id=\"message\" placeholder=\"Message\" style=\"height: 200px\"></textarea>
                        <label for=\"message\">Message</label>
                    </div>
                    <button type=\"button\" class=\"btn btn-warning text-white\">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "contact.html.twig", "/srv/http/CecylByCrychou/cecyl_by_crychou/templates/contact.html.twig");
    }
}
