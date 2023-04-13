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
class __TwigTemplate_e81cff2a485b4e67e119ce164375c31d extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Notebook • ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"assets/images/icon.svg\">
        <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"assets/css/custom.css\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Cabin&family=Fira+Sans:wght@200&display=swap\" rel=\"stylesheet\">
    </head>
    <body>
        <main>
            <div class=\"container py-4\">
                <header class=\"pb-3 mb-4 border-bottom\">
                <a href=\"/\" class=\"d-flex align-items-center text-white text-decoration-none \">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 28 28\"><path fill=\"currentColor\" d=\"M14 7.5a6.5 6.5 0 1 1-13 0a6.5 6.5 0 0 1 13 0Zm-6-4a.5.5 0 0 0-1 0V7H3.5a.5.5 0 0 0 0 1H7v3.5a.5.5 0 0 0 1 0V8h3.5a.5.5 0 0 0 0-1H8V3.5Zm13.25 1h-6.874A7.486 7.486 0 0 0 13.5 3h7.749A3.75 3.75 0 0 1 25 6.75v8.507a3.75 3.75 0 0 1-1.098 2.652l-5.993 5.993A3.75 3.75 0 0 1 15.257 25H6.75A3.75 3.75 0 0 1 3 21.25V13.5a7.51 7.51 0 0 0 1.5.876v6.874a2.25 2.25 0 0 0 2.25 2.25H15v-4.75A3.75 3.75 0 0 1 18.75 15h4.75V6.75a2.25 2.25 0 0 0-2.25-2.25ZM16.5 23.126c.124-.083.241-.178.348-.285l5.993-5.993c.107-.107.202-.224.285-.348H18.75a2.25 2.25 0 0 0-2.25 2.25v4.376Z\"/></svg>
                <span class=\"fs-4 p-1\">My Notebook</span>
                </a>
                </header>

                ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "
                <footer class=\"pt-3 mt-4 border-top text-center text-white\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 28 28\"><path fill=\"currentColor\" d=\"M14 7.5a6.5 6.5 0 1 1-13 0a6.5 6.5 0 0 1 13 0Zm-6-4a.5.5 0 0 0-1 0V7H3.5a.5.5 0 0 0 0 1H7v3.5a.5.5 0 0 0 1 0V8h3.5a.5.5 0 0 0 0-1H8V3.5Zm13.25 1h-6.874A7.486 7.486 0 0 0 13.5 3h7.749A3.75 3.75 0 0 1 25 6.75v8.507a3.75 3.75 0 0 1-1.098 2.652l-5.993 5.993A3.75 3.75 0 0 1 15.257 25H6.75A3.75 3.75 0 0 1 3 21.25V13.5a7.51 7.51 0 0 0 1.5.876v6.874a2.25 2.25 0 0 0 2.25 2.25H15v-4.75A3.75 3.75 0 0 1 18.75 15h4.75V6.75a2.25 2.25 0 0 0-2.25-2.25ZM16.5 23.126c.124-.083.241-.178.348-.285l5.993-5.993c.107-.107.202-.224.285-.348H18.75a2.25 2.25 0 0 0-2.25 2.25v4.376Z\"/></svg>
                    Notebook • ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                </footer>
            </div>
        </main>

        <script src=\"assets/js/bootstrap.min.js\"></script>
        <script src=\"assets/js/main.js\"></script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  116 => 23,  98 => 5,  79 => 27,  74 => 24,  72 => 23,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Notebook • {% block title %}{% endblock %}</title>
        <link rel=\"icon\" href=\"assets/images/icon.svg\">
        <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"assets/css/custom.css\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Cabin&family=Fira+Sans:wght@200&display=swap\" rel=\"stylesheet\">
    </head>
    <body>
        <main>
            <div class=\"container py-4\">
                <header class=\"pb-3 mb-4 border-bottom\">
                <a href=\"/\" class=\"d-flex align-items-center text-white text-decoration-none \">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 28 28\"><path fill=\"currentColor\" d=\"M14 7.5a6.5 6.5 0 1 1-13 0a6.5 6.5 0 0 1 13 0Zm-6-4a.5.5 0 0 0-1 0V7H3.5a.5.5 0 0 0 0 1H7v3.5a.5.5 0 0 0 1 0V8h3.5a.5.5 0 0 0 0-1H8V3.5Zm13.25 1h-6.874A7.486 7.486 0 0 0 13.5 3h7.749A3.75 3.75 0 0 1 25 6.75v8.507a3.75 3.75 0 0 1-1.098 2.652l-5.993 5.993A3.75 3.75 0 0 1 15.257 25H6.75A3.75 3.75 0 0 1 3 21.25V13.5a7.51 7.51 0 0 0 1.5.876v6.874a2.25 2.25 0 0 0 2.25 2.25H15v-4.75A3.75 3.75 0 0 1 18.75 15h4.75V6.75a2.25 2.25 0 0 0-2.25-2.25ZM16.5 23.126c.124-.083.241-.178.348-.285l5.993-5.993c.107-.107.202-.224.285-.348H18.75a2.25 2.25 0 0 0-2.25 2.25v4.376Z\"/></svg>
                <span class=\"fs-4 p-1\">My Notebook</span>
                </a>
                </header>

                {% block body %}{% endblock %}

                <footer class=\"pt-3 mt-4 border-top text-center text-white\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 28 28\"><path fill=\"currentColor\" d=\"M14 7.5a6.5 6.5 0 1 1-13 0a6.5 6.5 0 0 1 13 0Zm-6-4a.5.5 0 0 0-1 0V7H3.5a.5.5 0 0 0 0 1H7v3.5a.5.5 0 0 0 1 0V8h3.5a.5.5 0 0 0 0-1H8V3.5Zm13.25 1h-6.874A7.486 7.486 0 0 0 13.5 3h7.749A3.75 3.75 0 0 1 25 6.75v8.507a3.75 3.75 0 0 1-1.098 2.652l-5.993 5.993A3.75 3.75 0 0 1 15.257 25H6.75A3.75 3.75 0 0 1 3 21.25V13.5a7.51 7.51 0 0 0 1.5.876v6.874a2.25 2.25 0 0 0 2.25 2.25H15v-4.75A3.75 3.75 0 0 1 18.75 15h4.75V6.75a2.25 2.25 0 0 0-2.25-2.25ZM16.5 23.126c.124-.083.241-.178.348-.285l5.993-5.993c.107-.107.202-.224.285-.348H18.75a2.25 2.25 0 0 0-2.25 2.25v4.376Z\"/></svg>
                    Notebook • {{ 'now'|date('Y') }}
                </footer>
            </div>
        </main>

        <script src=\"assets/js/bootstrap.min.js\"></script>
        <script src=\"assets/js/main.js\"></script>
    </body>
</html>", "base.html.twig", "/Users/jensone/Agiliteach/Formations/PHP/Symfony-Prepavenir/notebook-symfony/templates/base.html.twig");
    }
}
