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
class __TwigTemplate_760df47fe4741224cc442a47a2f693656fa4125067be340b07fdba38c7da5029 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "    <meta charset=\"UTF-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.3/examples/product/\">
    <link rel=\"stylesheet\" href=\"https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/navbar.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/button.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
        integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
</head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"navbar-collapse collapse justify-content-center order-2\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav abs-center-x\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/aeroport\">Aéroport</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Shopping Shuttle</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Laissez-vous conduire</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Europa Park</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Tourisme Alsace</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Royal Palace</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#connexionModal\" href=\"#\"><i
                            class=\"fas fa-user fa-lg\"></i></a>
                </li>
            </ul>
        </div>
    </nav>


    ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "    <footer class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 col-md\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\"
                    stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"d-block mb-2\" role=\"img\"
                    viewBox=\"0 0 24 24\" focusable=\"false\">
                    <title>Product</title>
                    <circle cx=\"12\" cy=\"12\" r=\"10\" />
                    <path
                        d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
                <small class=\"d-block mb-3 text-muted\">&copy; 2017-2019</small>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Features</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Business</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Education</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Government</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Gaming</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div class=\"modal fade\" id=\"connexionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Connexion</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <label for=\"email\" class=\"text-center col-12\">E-mail</label>
                    <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"E-mail...\" required autofocus>
                    <div class=\"invalid-feedback\">
                        Veuillez renseigné un e-mail.
                    </div>
                    <label for=\"\" class=\"text-center col-12 mt-2\">Mot de Passe</label>
                    <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe...\"
                        required autofocus>
                    <div class=\"invalid-feedback\">
                        Veuillez renseigné un e-mail.
                    </div>
                    <a href=\"#\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#inscriptionModal\"><label
                            style=\"cursor: pointer;\" for=\"\" class=\"text-center col-12 mt-2\">Inscription</label></a>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\">Connexion</button>
                </div>
            </div>
        </div>
    </div>



    <div class=\"modal fade\" id=\"inscriptionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Inscription</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"d-flex justify-content-around\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\"
                                value=\"option1\" checked>
                            <label class=\"form-check-label\" for=\"exampleRadios1\">
                                Madame
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios2\"
                                value=\"option2\">
                            <label class=\"form-check-label\" for=\"exampleRadios2\">
                                Monsieur
                            </label>
                        </div>
                    </div>
                    <div class=\"invalid-feedback\">
                        Veuillez renseigné une civilité.
                    </div>
                    <hr>
                    <div class=\"d-flex justify-content-around\">
                        <div>
                            <label for=\"nom\" class=\"text-center col-12 mt-2\">Nom</label>
                            <input type=\"text\" id=\"nom\" class=\"form-control\" placeholder=\"Nom...\" name=\"nom\" required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un nom.
                            </div>
                        </div>
                        <div>
                            <label for=\"prenom\" class=\"text-center col-12 mt-2\">Prénom</label>
                            <input type=\"text\" id=\"prenom\" class=\"form-control\" placeholder=\"Prénom...\" name=\"prenom\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un prénom.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"email\" class=\"text-center col-12 mt-2\">E-mail</label>
                            <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"E-mail...\" required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un e-mail.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"password\" class=\"text-center col-12 mt-2\">Mot de Passe</label>
                            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe...\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un mot de passe.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"password\" class=\"text-center col-12 mt-2\">Confirmaton</label>
                            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe...\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un mot de passe.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-around\">
                        <div>
                            <label for=\"cp\" class=\"text-center col-12 mt-2\">Code Postal</label>
                            <input type=\"text\" id=\"cp\" class=\"form-control\" placeholder=\"Code postal...\" name=\"cp\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un code postal.
                            </div>
                        </div>
                        <div>
                            <label for=\"ville\" class=\"text-center col-12 mt-2\">Ville</label>
                            <input type=\"text\" id=\"ville\" class=\"form-control\" placeholder=\"Ville...\" name=\"ville\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné une ville.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"telephone\" class=\"text-center col-12 mt-2\">Telephone</label>
                            <input type=\"tel\" id=\"telephone\" class=\"form-control\" placeholder=\"telephone...\"
                                name=\"telephone\" required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un numéro de téléphone.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"CheckPro\"
                                    onclick=\"Prochecked()\">
                                <label class=\"form-check-label\" for=\"CheckPro\">
                                    Professionel ?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div style=\"display:none\" id=\"InputPro\">
                            <label for=\"telephone\" class=\"text-center col-12 mt-2\">Nom de la société</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"telephone...\" name=\"telephone\">
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un nom de société
                            </div>
                        </div>
                    </div>


                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#connexionModal\"><label style=\"cursor: pointer;\" for=\"\"
                            class=\"text-center col-12 mt-2\">Connexion</label></a>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\">Connexion</button>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 290
        $this->displayBlock('javascripts', $context, $blocks);
        // line 295
        echo "
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js\"></script>
    <script src=\"https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js\"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Alsace Navette";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 290
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 291
        echo "
    <script src=\"javascript/inscription.js\"></script>

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
        return array (  452 => 291,  443 => 290,  433 => 63,  424 => 62,  413 => 18,  404 => 17,  386 => 7,  369 => 5,  348 => 295,  346 => 290,  118 => 64,  116 => 62,  72 => 20,  70 => 17,  57 => 7,  54 => 6,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    {% block head %}{% endblock %}
    <meta charset=\"UTF-8\">
    <title>{% block title %}Alsace Navette{% endblock %}</title>


    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.3/examples/product/\">
    <link rel=\"stylesheet\" href=\"https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/navbar.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/button.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
        integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

    {% block stylesheets %}

    {% endblock %}

</head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"navbar-collapse collapse justify-content-center order-2\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav abs-center-x\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/aeroport\">Aéroport</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Shopping Shuttle</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Laissez-vous conduire</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Europa Park</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Tourisme Alsace</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Royal Palace</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#connexionModal\" href=\"#\"><i
                            class=\"fas fa-user fa-lg\"></i></a>
                </li>
            </ul>
        </div>
    </nav>


    {% block body %}
    {% endblock %}
    <footer class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 col-md\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\"
                    stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"d-block mb-2\" role=\"img\"
                    viewBox=\"0 0 24 24\" focusable=\"false\">
                    <title>Product</title>
                    <circle cx=\"12\" cy=\"12\" r=\"10\" />
                    <path
                        d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
                <small class=\"d-block mb-3 text-muted\">&copy; 2017-2019</small>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Features</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Business</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Education</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Government</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Gaming</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div class=\"modal fade\" id=\"connexionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Connexion</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <label for=\"email\" class=\"text-center col-12\">E-mail</label>
                    <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"E-mail...\" required autofocus>
                    <div class=\"invalid-feedback\">
                        Veuillez renseigné un e-mail.
                    </div>
                    <label for=\"\" class=\"text-center col-12 mt-2\">Mot de Passe</label>
                    <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe...\"
                        required autofocus>
                    <div class=\"invalid-feedback\">
                        Veuillez renseigné un e-mail.
                    </div>
                    <a href=\"#\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#inscriptionModal\"><label
                            style=\"cursor: pointer;\" for=\"\" class=\"text-center col-12 mt-2\">Inscription</label></a>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\">Connexion</button>
                </div>
            </div>
        </div>
    </div>



    <div class=\"modal fade\" id=\"inscriptionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Inscription</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"d-flex justify-content-around\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\"
                                value=\"option1\" checked>
                            <label class=\"form-check-label\" for=\"exampleRadios1\">
                                Madame
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios2\"
                                value=\"option2\">
                            <label class=\"form-check-label\" for=\"exampleRadios2\">
                                Monsieur
                            </label>
                        </div>
                    </div>
                    <div class=\"invalid-feedback\">
                        Veuillez renseigné une civilité.
                    </div>
                    <hr>
                    <div class=\"d-flex justify-content-around\">
                        <div>
                            <label for=\"nom\" class=\"text-center col-12 mt-2\">Nom</label>
                            <input type=\"text\" id=\"nom\" class=\"form-control\" placeholder=\"Nom...\" name=\"nom\" required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un nom.
                            </div>
                        </div>
                        <div>
                            <label for=\"prenom\" class=\"text-center col-12 mt-2\">Prénom</label>
                            <input type=\"text\" id=\"prenom\" class=\"form-control\" placeholder=\"Prénom...\" name=\"prenom\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un prénom.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"email\" class=\"text-center col-12 mt-2\">E-mail</label>
                            <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"E-mail...\" required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un e-mail.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"password\" class=\"text-center col-12 mt-2\">Mot de Passe</label>
                            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe...\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un mot de passe.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"password\" class=\"text-center col-12 mt-2\">Confirmaton</label>
                            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe...\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un mot de passe.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-around\">
                        <div>
                            <label for=\"cp\" class=\"text-center col-12 mt-2\">Code Postal</label>
                            <input type=\"text\" id=\"cp\" class=\"form-control\" placeholder=\"Code postal...\" name=\"cp\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un code postal.
                            </div>
                        </div>
                        <div>
                            <label for=\"ville\" class=\"text-center col-12 mt-2\">Ville</label>
                            <input type=\"text\" id=\"ville\" class=\"form-control\" placeholder=\"Ville...\" name=\"ville\"
                                required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné une ville.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <label for=\"telephone\" class=\"text-center col-12 mt-2\">Telephone</label>
                            <input type=\"tel\" id=\"telephone\" class=\"form-control\" placeholder=\"telephone...\"
                                name=\"telephone\" required>
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un numéro de téléphone.
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"CheckPro\"
                                    onclick=\"Prochecked()\">
                                <label class=\"form-check-label\" for=\"CheckPro\">
                                    Professionel ?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                        <div style=\"display:none\" id=\"InputPro\">
                            <label for=\"telephone\" class=\"text-center col-12 mt-2\">Nom de la société</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"telephone...\" name=\"telephone\">
                            <div class=\"invalid-feedback\">
                                Veuillez renseigné un nom de société
                            </div>
                        </div>
                    </div>


                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#connexionModal\"><label style=\"cursor: pointer;\" for=\"\"
                            class=\"text-center col-12 mt-2\">Connexion</label></a>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\">Connexion</button>
                </div>
            </div>
        </div>
    </div>
    {% block javascripts %}

    <script src=\"javascript/inscription.js\"></script>

    {% endblock %}

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js\"></script>
    <script src=\"https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js\"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js\"></script>
</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\git\\alsace-navette\\templates\\base.html.twig");
    }
}
