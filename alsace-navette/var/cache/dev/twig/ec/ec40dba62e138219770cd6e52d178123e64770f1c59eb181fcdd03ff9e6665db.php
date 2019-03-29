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

/* security/registration.html.twig */
class __TwigTemplate_db55d99e3c9be9026a59f2c8ee57f4d0617e2cc550389d3cb3d4c43e93379145 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

                <div class=\"d-flex justify-content-center\">

                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"email\" class=\"text-center col-12 mt-2\">Civilité</label>
                            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "civilite", []), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un e-mail.
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"invalid-feedback\">
                    Veuillez renseigné une civilité.
                </div>
                <hr>
                <div class=\"d-flex justify-content-around\">
                    <div>
                        <label for=\"nom\" class=\"text-center col-12 mt-2\">Nom</label>

                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un nom.
                        </div>
                    </div>
                    <div>
                        <label for=\"prenom\" class=\"text-center col-12 mt-2\">Prénom</label>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prenom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prenom..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un prénom.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>
                        <label for=\"email\" class=\"text-center col-12 mt-2\">E-mail</label>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un e-mail.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>

                        <label for=\"password\" class=\"text-center col-12 mt-2\">Mot de Passe</label>
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "password", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe..."]]);
        echo "


                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un mot de passe.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>
                        <label for=\"password\" class=\"text-center col-12 mt-2\">Confirmaton</label>
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "password", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un mot de passe.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-around\">
                    <div>
                        <label for=\"cp\" class=\"text-center col-12 mt-2\">Code Postal</label>
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "codepostal", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Code postale..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un code postal.
                        </div>
                    </div>
                    <div>
                        <label for=\"ville\" class=\"text-center col-12 mt-2\">Ville</label>
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "ville", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ville..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné une ville.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>
                        <label for=\"telephone\" class=\"text-center col-12 mt-2\">Telephone</label>
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "telportable", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "telephone..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un numéro de téléphone.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>
                        <div class=\"form-check\">
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "professionnel", []), 'row', ["id" => "CheckPro", "attr" => ["class" => "form-check-input", "onclick" => "Prochecked()"]]);
        echo "
                            <label class=\"form-check-label\" for=\"CheckPro\">
                                Professionel ?
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div style=\"display:none\" id=\"InputPro\">
                        <label for=\"telephone\" class=\"text-center col-12 mt-2\">Nom de la société</label>
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "nomsociete", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la société..."]]);
        echo "
                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un nom de société
                        </div>
                    </div>
                </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Inscription</button>
                ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'form_end');
        echo "
            </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 121,  210 => 114,  197 => 104,  184 => 94,  171 => 84,  160 => 76,  147 => 66,  133 => 55,  119 => 44,  106 => 34,  95 => 26,  76 => 10,  65 => 3,  56 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
                {{ form_start(form) }}

                <div class=\"d-flex justify-content-center\">

                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"email\" class=\"text-center col-12 mt-2\">Civilité</label>
                            {{ form_row(form.civilite, { 'attr' : { 'class': 'form-control'} }) }}

                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un e-mail.
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"invalid-feedback\">
                    Veuillez renseigné une civilité.
                </div>
                <hr>
                <div class=\"d-flex justify-content-around\">
                    <div>
                        <label for=\"nom\" class=\"text-center col-12 mt-2\">Nom</label>

                        {{ form_row(form.nom, { 'attr' : { 'class': 'form-control' , 'placeholder':'Nom...'} }) }}

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un nom.
                        </div>
                    </div>
                    <div>
                        <label for=\"prenom\" class=\"text-center col-12 mt-2\">Prénom</label>
                        {{ form_row(form.prenom, { 'attr' : { 'class': 'form-control' , 'placeholder':'Prenom...'} }) }}

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un prénom.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>
                        <label for=\"email\" class=\"text-center col-12 mt-2\">E-mail</label>
                        {{ form_row(form.email, { 'attr' : { 'class': 'form-control' , 'placeholder':'Email...'} }) }}

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un e-mail.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>

                        <label for=\"password\" class=\"text-center col-12 mt-2\">Mot de Passe</label>
                        {{ form_row(form.password, { 'attr' : { 'class': 'form-control' , 'placeholder':'Mot de passe...'} }) }}


                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un mot de passe.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>
                        <label for=\"password\" class=\"text-center col-12 mt-2\">Confirmaton</label>
                        {{ form_row(form.password, { 'attr' : { 'class': 'form-control' , 'placeholder':'Mot de passe...'} }) }}

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un mot de passe.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-around\">
                    <div>
                        <label for=\"cp\" class=\"text-center col-12 mt-2\">Code Postal</label>
                        {{ form_row(form.codepostal, { 'attr' : { 'class': 'form-control' , 'placeholder':'Code postale...'} }) }}

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un code postal.
                        </div>
                    </div>
                    <div>
                        <label for=\"ville\" class=\"text-center col-12 mt-2\">Ville</label>
                        {{ form_row(form.ville, { 'attr' : { 'class': 'form-control' , 'placeholder':'Ville...'} }) }}

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné une ville.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>
                        <label for=\"telephone\" class=\"text-center col-12 mt-2\">Telephone</label>
                        {{ form_row(form.telportable, { 'attr' : { 'class': 'form-control' , 'placeholder':'telephone...'} }) }}

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un numéro de téléphone.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div>
                        <div class=\"form-check\">
                            {{ form_row(form.professionnel, { 'id' : 'CheckPro' ,'attr' : { 'class': 'form-check-input', 'onclick': 'Prochecked()' } }) }}
                            <label class=\"form-check-label\" for=\"CheckPro\">
                                Professionel ?
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div style=\"display:none\" id=\"InputPro\">
                        <label for=\"telephone\" class=\"text-center col-12 mt-2\">Nom de la société</label>
                        {{ form_row(form.nomsociete, { 'attr' : { 'class': 'form-control', 'placeholder': 'Nom de la société...' } }) }}
                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un nom de société
                        </div>
                    </div>
                </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Inscription</button>
                {{ form_end(form) }}
            </div>
{% endblock %}", "security/registration.html.twig", "C:\\wamp64\\www\\alsace-nav\\alsace-navette\\templates\\security\\registration.html.twig");
    }
}
