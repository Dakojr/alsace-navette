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

/* home/home.html.twig */
class __TwigTemplate_a591e687a1012497f5c75b277a03ec36621c3b1518d609916faf8df237436ac1 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "

<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center\">
    <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
        <h1 class=\"display-4 font-weight-normal\">Alsace Navette</h1>
        <p class=\"lead font-weight-normal\">ICI NOUS AVONS UN SLOGAN ou du text</p>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-100 my-md-3 pl-md-3\">
    <div class=\"bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-light shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 p-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-dark shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-100 my-md-3 pl-md-3\">
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 p-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-dark shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
    <div class=\"bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-light shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-100 my-md-3 pl-md-3\">
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 p-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-white shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 py-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-white shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-100 my-md-3 pl-md-3\">
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 p-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-white shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 py-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-white shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 16,  102 => 15,  91 => 12,  82 => 11,  67 => 4,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
{% endblock %}

{% block body %}


<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center\">
    <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
        <h1 class=\"display-4 font-weight-normal\">Alsace Navette</h1>
        <p class=\"lead font-weight-normal\">ICI NOUS AVONS UN SLOGAN ou du text</p>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-100 my-md-3 pl-md-3\">
    <div class=\"bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-light shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 p-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-dark shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-100 my-md-3 pl-md-3\">
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 p-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-dark shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
    <div class=\"bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-light shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-100 my-md-3 pl-md-3\">
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 p-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-white shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 py-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-white shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-100 my-md-3 pl-md-3\">
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 p-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-white shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
    <div class=\"bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
        <div class=\"my-3 py-3\">
            <h2 class=\"display-5\">Another headline</h2>
            <p class=\"lead\">And an even wittier subheading.</p>
        </div>
        <div class=\"bg-white shadow-sm mx-auto\" style=\"width: 80%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
    </div>
</div>
{% endblock %}", "home/home.html.twig", "/home/dako/Dossier/alsace-navette/alsace-navette/templates/home/home.html.twig");
    }
}
