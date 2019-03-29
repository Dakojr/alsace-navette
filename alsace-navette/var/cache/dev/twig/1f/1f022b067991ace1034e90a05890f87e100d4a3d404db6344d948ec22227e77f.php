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
class __TwigTemplate_3edf5e837ec195d4fa7218d4d0bd79f853900040af991ccd9b7dd5447251ef01 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"registrationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
    aria-hidden=\"true\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Inscription</h5>
                <button type=\"button\" onClick= \"RemoveChild()\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">



                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "

                <div class=\"d-flex justify-content-center\">

                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"email\" class=\"text-center col-12 mt-2\">Civilité</label>
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "civilite", []), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un nom.
                        </div>
                    </div>
                    <div>
                        <label for=\"prenom\" class=\"text-center col-12 mt-2\">Prénom</label>
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "prenom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prenom..."]]);
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
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "email", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email..."]]);
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
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "password", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe..."]]);
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
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "password", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe..."]]);
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
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "codepostal", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Code postale..."]]);
        echo "

                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un code postal.
                        </div>
                    </div>
                    <div>
                        <label for=\"ville\" class=\"text-center col-12 mt-2\">Ville</label>
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "ville", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ville..."]]);
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
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "telportable", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "telephone..."]]);
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
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "professionnel", []), 'row', ["id" => "CheckPro", "attr" => ["class" => "form-check-input", "onclick" => "Prochecked()"]]);
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
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "nomsociete", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la société..."]]);
        echo "
                        <div class=\"invalid-feedback\">
                            Veuillez renseigné un nom de société
                        </div>
                    </div>
                </div>

                <a href=\"#\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#connexionModal\"><label
                        style=\"cursor: pointer;\" for=\"\" class=\"text-center col-12 mt-2\">Inscription</label></a>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" onClick= \"RemoveChild()\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Connexion</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  201 => 126,  188 => 116,  175 => 106,  162 => 96,  151 => 88,  138 => 78,  124 => 67,  110 => 56,  97 => 46,  86 => 38,  67 => 22,  57 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"registrationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
    aria-hidden=\"true\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Inscription</h5>
                <button type=\"button\" onClick= \"RemoveChild()\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">



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
                            {{ form_row(form.professionnel, { 'id' : 'CheckPro' ,'attr' : { 'class': 'form-check-input', 'onclick': 'Prochecked()', } }) }}
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

                <a href=\"#\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#connexionModal\"><label
                        style=\"cursor: pointer;\" for=\"\" class=\"text-center col-12 mt-2\">Inscription</label></a>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" onClick= \"RemoveChild()\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Connexion</button>
            </div>
        </div>
    </div>
</div>", "security/registration.html.twig", "/home/dako/Dossier/alsace-navette/alsace-navette/templates/security/registration.html.twig");
    }
}
