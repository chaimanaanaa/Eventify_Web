<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* signup/index.html.twig */
class __TwigTemplate_d5b01a9e199c515ed83776c2f1f6041b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signup/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signup/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Get Started Now</title>
    
     <!-- CSS FILES -->    

     <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">

     <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

     <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap\" rel=\"stylesheet\">

     <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
  

     <link href=\"css/bootstrap-icons.css\" rel=\"stylesheet\">
      
     <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
     <link href=\"css/templatemo-tiya-golf-club.css\" rel=\"stylesheet\">
     <link rel=\"stylesheet\" href=\"css/signup.css\">  

      <style>
        /* Style général du calendrier */
.flatpickr-calendar {
    background-color: #e0d6cf !important; /* Couleur de fond */
    border: 1px solid #ccc !important; /* Bordure */
    border-radius: 10px !important; /* Coins arrondis */
    font-family: 'DM Sans', sans-serif; /* Police personnalisée */
}

/* Style pour les jours */
.flatpickr-day {
    color: #000 !important; /* Couleur du texte */
    border-radius: 5px !important; /* Coins arrondis */
}

/* Style pour le jour actuel */
.flatpickr-day.today {
    background-color: #844062 !important; /* Couleur de fond pour la date actuelle */
    color: #fff !important; /* Couleur du texte */
}

/* Style pour les jours sélectionnés */
.flatpickr-day.selected {
    background-color: #844062 !important; /* Couleur de fond pour la date sélectionnée */
    color: #fff !important; /* Couleur du texte */
}

/* Style pour les jours désactivés */
.flatpickr-day.disabled {
    color: #ccc !important; /* Couleur des jours désactivés */
    cursor: not-allowed !important; /* Curseur désactivé */
}
      </style>       

</head>
<body>

  
   
    <svg xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z\"></path></svg>
           
        <div class=\"container\">
        <!-- Section gauche : Image de fond -->

        <div >
            <img src=\"images/11.jpg\" alt=\"Background Image\" class=\"background-image\" style=\"width: 100%; height: 100%; margin-top: -150px;\">
        </div>

        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"postionHome\">
            <img 
                src=\"images/home3.png\" 
                alt=\"Home\" 
                style=\"
                    z-index: 9999; 
                    position: absolute; 
                    top: 50px; 
                    left: 30px; 
                    width: 30px; 
                    height: 30px;
                    transition: transform 0.3s ease; /* Transition fluide */
                \" 
                onmouseover=\"this.style.transform='scale(1.2)';\" 
                onmouseout=\"this.style.transform='scale(1)';\"
            >
        </a>

       

        <!-- Section centrale : Formulaire -->
        <div class=\"center-section\" style=\"margin-top: -230px;\">
            <h1 class=\"main-title\" style=\"font-size:45px\">Get Started Now</h1>
            <p class=\"subtitle\">You need an account to continue</p>
        
            <form id=\"signup-form\" class=\"signup-form\" method=\"post\" action=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\" enctype=\"multipart/form-data\" autocomplete=\"off\">
                <!-- Ligne 1 : First Name & Last Name -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"firstName\">First Name</label>
                        <input type=\"text\" id=\"firstName\" name=\"firstName\" placeholder=\"First Name\" value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "request", [], "any", false, false, false, 103), "get", ["firstName"], "method", false, false, false, 103), "html", null, true);
        yield "\">
                        <span class=\"error-message\" id=\"firstNameError\">
                            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 106
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 106) == "firstName")) {
                // line 107
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 107), "html", null, true);
                yield "
                                ";
            }
            // line 109
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                        </span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"lastName\">Last Name</label>
                        <input type=\"text\" id=\"lastName\" name=\"lastName\" placeholder=\"Last Name\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "request", [], "any", false, false, false, 114), "get", ["lastName"], "method", false, false, false, 114), "html", null, true);
        yield "\">
                        <span class=\"error-message\" id=\"lastNameError\">
                            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 117
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 117) == "lastName")) {
                // line 118
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 118), "html", null, true);
                yield "
                                ";
            }
            // line 120
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "                        </span>
                    </div>
                </div>
        
                <!-- Ligne 2 : Date of Birth & CIN -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"dateOfBirth\">Date of birth</label>
                        <input type=\"date\" id=\"dateOfBirth\" name=\"dateOfBirth\" value=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "get", ["dateOfBirth"], "method", false, false, false, 129), "html", null, true);
        yield "\" onchange=\"calculateAge()\">
                        <span class=\"error-message\" id=\"birthDateError\">
                            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 132
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 132) == "dateNaissance")) {
                // line 133
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 133), "html", null, true);
                yield "
                                ";
            }
            // line 135
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "                        </span>
                        <small id=\"ageMessage\" style=\"color:  #844062;\"></small>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cin\">CIN</label>
                        <input type=\"text\" id=\"cin\" name=\"cin\" placeholder=\"CIN\" value=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "request", [], "any", false, false, false, 141), "get", ["cin"], "method", false, false, false, 141), "html", null, true);
        yield "\">
                        
                        <span class=\"error-message\" id=\"cinError\">
                            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 144, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 145
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 145) == "cin")) {
                // line 146
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 146), "html", null, true);
                yield "
                                ";
            }
            // line 148
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "                        </span>
                    </div>
                </div>
        
                <!-- Ligne 3 : Phone Number & Gender -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"phoneNumber\">Phone number</label>
                        <input type=\"tel\" id=\"phoneNumber\" name=\"phoneNumber\" placeholder=\"Phone Number\" value=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "get", ["phoneNumber"], "method", false, false, false, 157), "html", null, true);
        yield "\">
                        
                        <span class=\"error-message\" id=\"phoneNumberError\">
                            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 161
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 161) == "numTlf")) {
                // line 162
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 162), "html", null, true);
                yield "
                                ";
            }
            // line 164
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "                        </span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"gender\">Gender</label>
                        <select id=\"gender\" name=\"gender\">
                            <option value=\"\">Select Gender</option>
                            <option value=\"male\" ";
        // line 171
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "request", [], "any", false, false, false, 171), "get", ["gender"], "method", false, false, false, 171) == "male")) {
            yield "selected";
        }
        yield ">Male</option>
                            <option value=\"female\" ";
        // line 172
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "request", [], "any", false, false, false, 172), "get", ["gender"], "method", false, false, false, 172) == "female")) {
            yield "selected";
        }
        yield ">Female</option>
                        </select>
                        

                        <span class=\"error-message\" id=\"genreError\">
                            ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 178
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 178) == "genre")) {
                // line 179
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 179), "html", null, true);
                yield "
                                ";
            }
            // line 181
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "                        </span>
                    </div>
                </div>
        
                <!-- Ligne 4 : Role -->
                <div class=\"form-row\">
                    <div class=\"form-group full-width\">
                        <label for=\"role\">Role</label>
                        <select id=\"role\" name=\"role\">
                            <option value=\"\">Select Role</option>
                            <option value=\"Client\" ";
        // line 192
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "request", [], "any", false, false, false, 192), "get", ["role"], "method", false, false, false, 192) == "Client")) {
            yield "selected";
        }
        yield ">CLIENT</option>
                            <option value=\"Partenaire\" ";
        // line 193
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "request", [], "any", false, false, false, 193), "get", ["role"], "method", false, false, false, 193) == "Partner")) {
            yield "selected";
        }
        yield ">PARTENAIRE</option>
                        </select>
                        

                        <span class=\"error-message\" id=\"roleError\">
                            ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 198, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 199
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 199) == "role")) {
                // line 200
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 200), "html", null, true);
                yield "
                                ";
            }
            // line 202
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "                        </span>
                    </div>
                </div>
        
                <!-- Ligne 5 : Password & Email -->
                <div class=\"form-row\">
                    <div class=\"form-group password-group\">
                        <label for=\"password\">Password</label>
                        <a href=\"#\" class=\"signin-link mdp-link\" style=\"font-size:14px;\">Generate Password</a>
                        <div class=\"input-wrapper\">
                            <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" autocomplete=\"new-password\" oninput=\"checkPasswordStrength()\">
                            <button type=\"button\" class=\"toggle-password\" onclick=\"togglePasswordVisibility()\">
                                <img id=\"eye-icon\" src=\"images/oeil (1).png\" alt=\"Toggle Password Visibility\">
                            </button>
                        </div>
                        <div class=\"password-strength\">
                            <div id=\"passwordStrengthBar\" style=\"height: 10px; width: 100%; margin-top:3px; background-color: #e0e0e0; border-radius: 5px; overflow: hidden;\">
                                <div id=\"passwordStrengthIndicator\" style=\"height: 100%; width: 0%; background-color: red; transition: width 0.3s;\"></div>
                            </div>
                            <small id=\"passwordStrengthText\" style=\"font-size: 14px; color: #6c757d;\">Weak</small>
                        </div>
                      
                        <span class=\"error-message\" id=\"passwordError\">
                            ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 226, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 227
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 227) == "mdp")) {
                // line 228
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 228), "html", null, true);
                yield "
                                ";
            }
            // line 230
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "                        </span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" value=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "get", ["email"], "method", false, false, false, 235), "html", null, true);
        yield "\" autocomplete=\"new-email\">
                        

                        <span class=\"error-message\" id=\"emailError\">
                            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 239, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 240
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 240) == "email")) {
                // line 241
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 241), "html", null, true);
                yield "
                                ";
            }
            // line 243
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        yield "                        </span>
                    </div>
                </div>
        
                <!--recapcha-->
                <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 249, $this->source); })()), "html", null, true);
        yield "\" style=\"margin-left:30px;\"></div>
                <!-- Bouton Signup -->
                <button type=\"submit\" class=\"signup-btn\" onclick=\"return validateForm()\">Signup</button>
                
                <button type=\"submit\" class=\"google-btn\" style=\"width:300px; height:50px; margin-top:20px;\" >
                    <img src=\"images/google.png\" alt=\"Google Icon\" style=\"width: 20px; height: 20px; margin-right: 30px;\">
                    Continue With Google</button>
                <!-- Lien Sign In -->
                <p class=\"signin-text\">
                    Already have an account? 
                    <a href=\"#\" class=\"signin-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasExample\">Sign In</a>
                </p>
                <!-- Champ caché pour la photo capturé a traver cam -->
                <input type=\"hidden\" id=\"capturedPhoto\" name=\"capturedPhoto\">
                <!-- Champ caché pour stocker le descripteur de visage généré par Face API -->
                <input type=\"hidden\" id=\"faceDescriptor\" name=\"faceDescriptor\">
                <!-- Champ caché pour sélectionner un fichier -->
                <input type=\"file\" id=\"fileInput\" name=\"fileInput\" accept=\"image/*\" style=\"display: none;\" onchange=\"displaySelectedImage(event)\">
            </form>
        </div>
        <!--partie pour login-->
        <div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <div class=\"mb-4\">
                <p class=\"form-label mb-2\">Login with Face Recognition!</p>
                <div class=\"camera-container\">
                    <video id=\"camera\" autoplay muted style=\"width: 200px; height: auto; border-radius: 10px;margin-left:80px;\"></video>
                    <canvas id=\"capturedCanvas\" style=\"display: none;\"></canvas>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"button\" class=\"form-control\" onclick=\"capturePhoto()\" style=\"background-color:#844062;color:white;margin-left:10px;\">Capture Photo</button>
                    </div>
                    
                </div>
            </div>
            <input type=\"hidden\" id=\"capturedPhoto\" name=\"capturedPhoto\">
            <!-- Champ caché pour stocker le descripteur de visage généré par Face API -->
                <input type=\"hidden\" id=\"faceDescriptor\" name=\"faceDescriptor\">
                <span style=\"margin-left:60px;\">-----------Or-----------</span>
                <p>Enter your Credentials to access your account</p>
            <div class=\"offcanvas-body d-flex flex-column\">
                <form id=\"login-form\" class=\"custom-form member-login-form\" action=\"";
        // line 292
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" role=\"form\">
                    <div class=\"member-login-form-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-number\">Email</label>
                            <input type=\"text\" name=\"member-login-number\" id=\"member-login-number\" class=\"form-control\" placeholder=\"name@gmail.com\" required autocomplete=\"new-email\">
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-password\">Password</label>
                            
                            <div class=\"input-wrapper\">
                                <input type=\"password\" name=\"member-login-password\" id=\"member-login-password\"  class=\"form-control\" placeholder=\"Password\" required autocomplete=\"new-password\">
                                <button type=\"button\" class=\"toggle-password\" onclick=\"togglePasswordVisibilityLogIn()\">
                                    <img id=\"eye-icon2\" src=\"images/oeil (1).png\" alt=\"Toggle Password Visibility login\">
                                </button>
                            </div>
                        </div>
                        <div class=\"form-check mb-4\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"flexCheckDefault\">
                            <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                Remember me
                            </label>
                        </div>
                        <div class=\"d-flex flex-column w-100\">
                            <button type=\"submit\" class=\"btn custom-btn custom-border-btn mb-3\">Login</button>
                        </div>
                        <div class=\"d-flex flex-column w-100\">
                            <button type=\"button\" class=\"btn custom-btn custom-border-btn mb-3\" style=\"margin-top:10px;\" onclick=\"compareFaces()\">Login with Face Recognition</button>
                        </div>
                        <div class=\"text-center my-4\">
                            <a href=\"#\" class=\"forgot-password-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#forgotPasswordOffcanvas\">Forgotten password?</a>
                        </div>
                    </div>
                </form>
               
                <div class=\"mt-auto mb-5\">
                    <p class=\"offcanvas-header p-login\">
                        <strong class=\"text-black me-3\">Don't have an account?</strong>
                        <a href=\"";
        // line 329
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\" class=\"contact-link\">Create Account</a>
                    </p>
                </div>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>


        <!-- partie pour forgot password-->

        <div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"forgotPasswordOffcanvas\" aria-labelledby=\"forgotPasswordOffcanvasLabel\">
            <div class=\"offcanvas-header\">
                <!-- Flèche de retour -->
                <button type=\"button\" class=\"btn btn-link text-decoration-none\" onclick=\"switchToLoginOffcanvas()\" aria-label=\"Back\">
                    <img src=\"images/fleche.png\" alt=\"Back\" style=\"width: 24px; height: 24px;\">
                </button>
                <h5 class=\"offcanvas-title ms-2\" id=\"forgotPasswordOffcanvasLabel\">Forgot Password!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <p style=\"margin-top: 30px;\">Enter your email to reset your password</p>
            <div class=\"offcanvas-body d-flex flex-column\" style=\"margin-top: 60px;\">
                <form id=\"forgot-password-form\" class=\"custom-form\" action=\"";
        // line 350
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" method=\"post\" role=\"form\">
                    <div class=\"mb-4\">
                        <label class=\"form-label mb-2\" for=\"forgot-password-email\">Email</label>
                        <input type=\"email\" name=\"forgot-password-email\" id=\"forgot-password-email\" class=\"form-control\" placeholder=\"name@gmail.com\" required>
                    </div>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"submit\" class=\"form-control\">Send</button>
                    </div>
                   
                </form>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>


        <!-- Section droite : Image sélectionnée -->
        <div class=\"right-section\" style=\"margin-top: -330px;\">
            <!--frame pour le camera-->
            <div class=\"camera-container\">
                <video id=\"camera-stream\" autoplay style=\"width: 100%; height: auto; display: none;\"></video>
                <canvas id=\"photo-canvas\" style=\"display: none;\"></canvas>
            </div>
            
            <div class=\"image-frame\">
                <!-- L'image sélectionnée sera affichée ici -->
            </div>
            
           
            <div class=\"image-buttons\">
                <button type=\"button\" class=\"gallery-btn\" onclick=\"openGallery()\">
                    <img src=\"images/WhatsApp_Image_2025-02-21_at_22.33.28-removebg-preview.png\" alt=\"Select from Gallery\">
                </button>
                <span>or</span>
                <button type=\"button\" class=\"camera-btn\">
                    <img src=\"images/appareil-photo.png\" alt=\"Take Photo\">
                </button>
               
              
            </div>
        </div>
        <!--les alerte envoyées par flashes-->
        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "flashes", ["error"], "method", false, false, false, 391));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 392
            yield "    <div class=\"alert-container\">
        <div class=\"alert alert-danger\">
            <span>";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
            <button class=\"close-btn\" onclick=\"this.parentElement.style.display='none';\">×</button>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "flashes", ["success"], "method", false, false, false, 399));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 400
            yield "    <div class=\"alert-container\">
        <div class=\"alert alert-success\">
            <span>";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
            <button class=\"close-btn\" onclick=\"this.parentElement.style.display='none';\">×</button>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        yield "    </div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
   
   
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    <!--scripts pour reconnaissance faciale-->
    <script defer src=\"https://cdn.jsdelivr.net/npm/@tensorflow/tfjs\"></script>
    <script defer src=\"https://cdn.jsdelivr.net/npm/@vladmandic/face-api/dist/face-api.min.js\"></script>
    <script>
        let videoStream;
    
        async function startCamera() {
            const video = document.getElementById('camera');
            videoStream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = videoStream;
        }
    
        function capturePhoto() {
            const video = document.getElementById('camera');
            const canvas = document.getElementById('capturedCanvas');
            const context = canvas.getContext('2d');
    
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
    
            // Convertir l'image capturée en base64
            const capturedPhoto = canvas.toDataURL('image/png');
            document.getElementById('capturedPhoto').value = capturedPhoto;
    
            alert('Photo captured! You can now log in.');
        }
    
        async function loadFaceAPI() {
            console.log('Loading Face API models...');
            await faceapi.nets.ssdMobilenetv1.loadFromUri('/models'); // Charger les modèles
            await faceapi.nets.faceRecognitionNet.loadFromUri('/models');
            await faceapi.nets.faceLandmark68Net.loadFromUri('/models');
            console.log('Face API models loaded successfully!');
        }
    
        async function compareFaces() {
            const capturedPhoto = document.getElementById('capturedPhoto').value;
            if (!capturedPhoto) {
                alert('Please capture a photo first.');
                return;
            }
        
            const image = await faceapi.fetchImage(capturedPhoto);
            const detections = await faceapi.detectSingleFace(image).withFaceLandmarks().withFaceDescriptor();
        
            if (!detections) {
                alert('No face detected. Please try again.');
                return;
            }
        
            const descriptor = detections.descriptor;
        
            // Envoyer les données au serveur pour comparaison
            const response = await fetch('/compare-faces', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ descriptors: descriptor })
            });
        
            const result = await response.json();
            if (result.success) {
                alert('Face recognized! Redirecting...');
                window.location.href = result.redirect; // Rediriger en fonction du rôle
            } else {
                alert('Face not recognized. Please try again.');
            }
        }
    
        // Démarrer la caméra et charger Face API
        window.onload = async () => {
            await loadFaceAPI();
            await startCamera();
        };
    </script>
   
    <script>
        function openGallery() {
            // Ouvre la boîte de dialogue de sélection de fichiers
            document.getElementById('fileInput').click();
        }
        function displaySelectedImage(event) {
            const file = event.target.files[0]; // Récupérer le fichier sélectionné
            const imageFrame = document.querySelector('.image-frame'); // Sélectionner le cadre
        
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    // Afficher l'image dans le cadre
                    imageFrame.innerHTML = `<img src=\"\${e.target.result}\" alt=\"Selected Image\" style=\"width: 100%; height: auto; border-radius: 10px;\">`;
                };
                reader.readAsDataURL(file); // Lire le fichier comme une URL de données
            } else {
                imageFrame.innerHTML = ''; // Effacer le cadre si aucun fichier n'est sélectionné
            }
        }
    </script>
    <script>
        function closeAlert() {
            const alert = event.target.parentElement;
            alert.style.display = 'none';
        }
    </script>
    <!--script pour le camera-->
    <script>
        <!--charger les modeles de face api-->
        async function loadFaceAPI() {
            console.log('Loading Face API models...');
            await faceapi.nets.ssdMobilenetv1.loadFromUri('/models'); // Modèle pour la détection des visages
            await faceapi.nets.faceRecognitionNet.loadFromUri('/models'); // Modèle pour la reconnaissance faciale
            await faceapi.nets.faceLandmark68Net.loadFromUri('/models'); // Modèle pour les repères faciaux
            console.log('Face API models loaded successfully!');
        }
        document.querySelector('.camera-btn').addEventListener('click', async function () {
            console.log('Camera button clicked');
            const video = document.getElementById('camera-stream');
            const canvas = document.getElementById('photo-canvas');
            const capturedPhotoInput = document.getElementById('capturedPhoto');
            const faceDescriptorInput = document.getElementById('faceDescriptor'); // Champ caché pour le descripteur
            const imageFrame = document.querySelector('.image-frame');
        
            // Charger les modèles Face API
            await loadFaceAPI();
        
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    console.log('Camera access granted');
                    video.srcObject = stream;
                    video.style.display = 'block';
        
                    setTimeout(async function () {
                        console.log('Capturing photo...');
                        canvas.width = video.videoWidth;
                        canvas.height = video.videoHeight;
        
                        const context = canvas.getContext('2d');
                        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        
                        // Convertir l'image en base64 et la stocker dans le champ caché
                        const imageData = canvas.toDataURL('image/png');
                        console.log('Image captured:', imageData);
                        capturedPhotoInput.value = imageData;
        
                        // Afficher l'image capturée dans le conteneur
                        imageFrame.innerHTML = `<img src=\"\${imageData}\" alt=\"Captured Photo\" style=\"width: 100%; height: auto; border-radius: 10px;\">`;
        
                        // Générer le descripteur de visage
                        const image = await faceapi.fetchImage(imageData);
                        const detections = await faceapi.detectSingleFace(image).withFaceLandmarks().withFaceDescriptor();
        
                        if (detections) {
                            const descriptor = detections.descriptor;
                            faceDescriptorInput.value = JSON.stringify(descriptor); // Stocker le descripteur dans le champ caché
                            console.log('Face descriptor generated:', descriptor);
                        } else {
                            alert('No face detected. Please try again.');
                        }
        
                        // Arrêter la caméra
                        const tracks = stream.getTracks();
                        tracks.forEach(track => track.stop());
        
                        video.style.display = 'none';
                    }, 4000); // Capture après 4 secondes
                })
                .catch(function (error) {
                    console.error('Error accessing the camera:', error);
                    alert('Unable to access the camera. Please check your permissions.');
                });
        });
    </script>
   
    <script>
        function validateForm() {
            let isValid = true;
        
            // Récupérer les champs du formulaire
            const firstName = document.getElementById('firstName');
            const lastName = document.getElementById('lastName');
            const dateOfBirth = document.getElementById('dateOfBirth');
            const cin = document.getElementById('cin');
            const phoneNumber = document.getElementById('phoneNumber');
            const gender = document.getElementById('gender');
            const role = document.getElementById('role');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
        
            // Récupérer les conteneurs d'erreurs
            const errorMessages = document.querySelectorAll('.error-message');
        
            // Réinitialiser les messages d'erreur
            errorMessages.forEach(error => error.textContent = '');
        
            // Vérifier chaque champ
            if (!firstName.value.trim()) {
                document.getElementById('firstNameError').textContent = 'First name is required.';
                isValid = false;
            }
        
            if (!lastName.value.trim()) {
                document.getElementById('lastNameError').textContent = 'Last name is required.';
                isValid = false;
            }
        
            if (!dateOfBirth.value.trim()) {
                document.getElementById('birthDateError').textContent = 'Date of birth is required.';
                isValid = false;
            }
        
            if (!cin.value.trim() || cin.value.length !== 8) {
                document.getElementById('cinError').textContent = 'CIN must be exactly 8 characters long.';
                isValid = false;
            }
        
            if (!phoneNumber.value.trim()) {
                document.getElementById('phoneNumberError').textContent = 'Phone number is required.';
                isValid = false;
            }
        
            if (!gender.value.trim()) {
                document.getElementById('genreError').textContent = 'Gender is required.';
                isValid = false;
            }
        
            if (!role.value.trim()) {
                document.getElementById('roleError').textContent = 'Role is required.';
                isValid = false;
            }
        
            if (!email.value.trim() || !email.value.includes('@')) {
                document.getElementById('emailError').textContent = 'A valid email is required.';
                isValid = false;
            }
        
            if (!password.value.trim() || password.value.length < 8) {
                document.getElementById('passwordError').textContent = 'Password must be at least 8 characters long.';
                isValid = false;
            }
        
            return isValid;
        }
    </script>
    <!--script pour le design du calendrier-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr(\"#dateOfBirth\", {
                dateFormat: \"Y-m-d\",
                maxDate: \"2007-12-31\", // Dernière date autorisée
                defaultDate: \"2007-01-01\", // Date par défaut
                onReady: function (selectedDates, dateStr, instance) {
                    // Appliquer un style personnalisé au conteneur du calendrier
                    instance.calendarContainer.style.backgroundColor = \"#e0d6cf\"; // Couleur de fond
                    instance.calendarContainer.style.color = \"#000\"; // Couleur du texte
                },
                onDayCreate: function (dObj, dStr, fp, dayElem) {
                    const today = new Date();
                    const date = new Date(dayElem.dateObj);
                    if (date.toDateString() === today.toDateString()) {
                        dayElem.style.backgroundColor = \"#844062\"; // Couleur de la date actuelle
                        dayElem.style.color = \"#fff\"; // Couleur du texte
                    }
                }
            });
        });
    </script>
    <!--script pour désactiver les années aprés 2007-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dateOfBirthInput = document.getElementById('dateOfBirth');
        
            if (dateOfBirthInput) {
                const maxDate = `2007-12-31`; // Dernier jour de l'année 2007
        
                // Définir la limite max
                dateOfBirthInput.setAttribute('max', maxDate);
        
                // Validation de la date de naissance
                dateOfBirthInput.addEventListener('input', function () {
                    const birthDateError = document.getElementById('birthDateError');
                    const selectedDate = new Date(this.value);
                    const maxDateObj = new Date(maxDate);
        
                    if (!this.value) {
                        birthDateError.textContent = 'Date of birth is required.';
                    } else if (selectedDate > maxDateObj) {
                        birthDateError.textContent = `Date must be in 2007 or earlier.`;
                    } else {
                        birthDateError.textContent = ''; // Effacer les erreurs si la date est valide
                    }
                });
            }
        });
    </script>
    <!--script pour calculer l'age-->
    <script>
        function calculateAge() {
            const birthDateInput = document.getElementById('dateOfBirth').value;
            const ageMessage = document.getElementById('ageMessage');
    
            if (birthDateInput) {
                const birthDate = new Date(birthDateInput);
                const today = new Date();
                let age = today.getFullYear() - birthDate.getFullYear();
                const monthDifference = today.getMonth() - birthDate.getMonth();
    
                // Ajuster l'âge si l'anniversaire n'est pas encore passé cette année
                if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
    
                if (age >= 0) {
                    ageMessage.textContent = `You are \${age} years old.`;
                } else {
                    ageMessage.textContent = \"Please enter a valid date of birth.\";
                }
            } else {
                ageMessage.textContent = \"\"; // Effacer le message si aucune date n'est saisie
            }
        }
    </script>
    <!--script pour ajouter le code pays au numero-->
    <script>
        const countryRules = [
            { code: '+216', prefix: '2', length: 8, country: 'Tunisia' }, // Tunisie
            { code: '+216', prefix: '5', length: 8, country: 'Tunisia' }, // Tunisie
            { code: '+216', prefix: '9', length: 8, country: 'Tunisia' }, // Tunisie
            { code: '+33', prefix: '', length: 9, country: 'France' },    // France
            { code: '+1', prefix: '', length: 10, country: 'USA/Canada' }, // États-Unis et Canada
            { code: '+44', prefix: '', length: 10, country: 'UK' },       // Royaume-Uni
            { code: '+49', prefix: '', length: 10, country: 'Germany' },  // Allemagne
            { code: '+39', prefix: '', length: 10, country: 'Italy' },    // Italie
            { code: '+34', prefix: '', length: 9, country: 'Spain' },     // Espagne
            { code: '+212', prefix: '', length: 9, country: 'Morocco' },  // Maroc
            { code: '+213', prefix: '', length: 9, country: 'Algeria' },  // Algérie
            { code: '+20', prefix: '', length: 10, country: 'Egypt' }     // Égypte
        ];
    
        document.getElementById('phoneNumber').addEventListener('blur', function () {
            const phoneNumberInput = document.getElementById('phoneNumber');
            const phoneNumberError = document.getElementById('phoneNumberError');
            let phoneNumber = phoneNumberInput.value.trim();
    
            // Vérifier si un code pays est déjà présent
            if (phoneNumber.startsWith('+')) {
                phoneNumberError.textContent = ''; // Aucun traitement nécessaire
                return;
            }
    
            // Ajouter le code pays en fonction des règles
            let found = false;
            for (const rule of countryRules) {
                if (
                    phoneNumber.startsWith(rule.prefix) &&
                    phoneNumber.length === rule.length
                ) {
                    phoneNumberInput.value = rule.code + phoneNumber;
                    phoneNumberError.textContent = ''; // Effacer les erreurs
                    found = true;
                    break;
                }
            }
    
            // Si aucun préfixe correspondant n'est trouvé
            if (!found) {
                phoneNumberError.textContent = 'Invalid phone number or unsupported region.';
            }
        });
    </script>
    <!--script pour générer auto un mdp-->
    <script>
        document.querySelector('.mdp-link').addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien
    
            const firstNameInput = document.getElementById('firstName');
            const passwordInput = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
    
            const firstName = firstNameInput.value.trim();
    
            if (!firstName) {
                passwordError.textContent = 'Please enter your first name before generating a password.';
                return;
            }
    
            // Générer un mot de passe aléatoire
            const specialChars = '!@#\$%^&*()_+[]{}|;:,.<>?';
            const numbers = '0123456789';
            const randomChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            const minLength = 8;
    
            let generatedPassword = firstName;
    
            // Ajouter des caractères spéciaux et des chiffres
            for (let i = 0; i < 2; i++) {
                generatedPassword += specialChars.charAt(Math.floor(Math.random() * specialChars.length));
            }
    
            for (let i = 0; i < 2; i++) {
                generatedPassword += numbers.charAt(Math.floor(Math.random() * numbers.length));
            }
    
            // Compléter avec des caractères aléatoires pour atteindre la longueur minimale
            while (generatedPassword.length < minLength) {
                generatedPassword += randomChars.charAt(Math.floor(Math.random() * randomChars.length));
            }
    
            // Mettre à jour le champ mot de passe
            passwordInput.value = generatedPassword;
            passwordError.textContent = ''; // Effacer les erreurs
        });
    </script>
    <!--progress bar du mdp-->
    <script>
        function checkPasswordStrength() {
            const passwordInput = document.getElementById('password').value;
            const strengthBar = document.getElementById('passwordStrengthIndicator');
            const strengthText = document.getElementById('passwordStrengthText');
    
            let strength = 0;
    
            // Vérifier si le mot de passe contient des lettres
            if (/[a-zA-Z]/.test(passwordInput)) {
                strength += 1;
            }
    
            // Vérifier si le mot de passe contient des chiffres
            if (/\\d/.test(passwordInput)) {
                strength += 1;
            }
    
            // Vérifier si le mot de passe contient des caractères spéciaux
            if (/[!@#\$%^&*(),.?\":{}|<>]/.test(passwordInput)) {
                strength += 1;
            }
    
            // Vérifier la longueur du mot de passe
            if (passwordInput.length >= 8) {
                strength += 1;
            }
    
            // Mettre à jour la barre de progression et le texte
            if (strength === 1) {
                strengthBar.style.width = '25%';
                strengthBar.style.backgroundColor = 'red';
                strengthText.textContent = 'Weak';
                strengthText.style.color = 'red';
            } else if (strength === 2) {
                strengthBar.style.width = '50%';
                strengthBar.style.backgroundColor = 'orange';
                strengthText.textContent = 'Medium';
                strengthText.style.color = 'orange';
            } else if (strength >= 3) {
                strengthBar.style.width = '100%';
                strengthBar.style.backgroundColor = 'green';
                strengthText.textContent = 'Strong';
                strengthText.style.color = 'green';
            } else {
                strengthBar.style.width = '0%';
                strengthBar.style.backgroundColor = '#e0e0e0';
                strengthText.textContent = 'Weak';
                strengthText.style.color = '#6c757d';
            }
        }
    </script>
    <!--progress bar pour le mdp généré automatiquement-->
    <script>
        document.querySelector('.mdp-link').addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien
    
            const firstNameInput = document.getElementById('firstName');
            const passwordInput = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
    
            const firstName = firstNameInput.value.trim();
    
            if (!firstName) {
                passwordError.textContent = 'Please enter your first name before generating a password.';
                return;
            }
    
            // Générer un mot de passe aléatoire
            const specialChars = '!@#\$%^&*()_+[]{}|;:,.<>?';
            const numbers = '0123456789';
            const randomChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            const minLength = 8;
    
            let generatedPassword = firstName;
    
            // Ajouter des caractères spéciaux et des chiffres
            for (let i = 0; i < 2; i++) {
                generatedPassword += specialChars.charAt(Math.floor(Math.random() * specialChars.length));
            }
    
            for (let i = 0; i < 2; i++) {
                generatedPassword += numbers.charAt(Math.floor(Math.random() * numbers.length));
            }
    
            // Compléter avec des caractères aléatoires pour atteindre la longueur minimale
            while (generatedPassword.length < minLength) {
                generatedPassword += randomChars.charAt(Math.floor(Math.random() * randomChars.length));
            }
    
            // Mettre à jour le champ mot de passe
            passwordInput.value = generatedPassword;
            passwordError.textContent = ''; // Effacer les erreurs
    
            // Vérifier la force du mot de passe généré
            checkPasswordStrength();
        });
    </script>
    
    <script>
    
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
    
            if (passwordField.type === 'password') {
                passwordField.type = 'text'; // Affiche le mot de passe
                eyeIcon.src = 'images/oeil.png'; // Change l'image pour l'œil ouvert
            } else {
                passwordField.type = 'password'; // Masque le mot de passe
                eyeIcon.src = 'images/oeil (1).png'; // Change l'image pour l'œil fermé
            }
        }



        function togglePasswordVisibilityLogIn() {
            const passwordField = document.getElementById('member-login-password');
            const eyeIcon = document.getElementById('eye-icon2');
    
            if (passwordField.type === 'password') {
                passwordField.type = 'text'; // Affiche le mot de passe
                eyeIcon.src = 'images/oeil.png'; // Change l'image pour l'œil ouvert
            } else {
                passwordField.type = 'password'; // Masque le mot de passe
                eyeIcon.src = 'images/oeil (1).png'; // Change l'image pour l'œil fermé
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Réinitialiser les champs email et mot de passe
            const emailField = document.getElementById('email');
            const passwordField = document.getElementById('password');
    
            if (emailField) emailField.value = '';
            if (passwordField) passwordField.value = '';
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Réinitialiser les champs email et mot de passe
            const emailField = document.getElementById('member-login-number');
            const passwordField = document.getElementById('member-login-password');
    
            if (emailField) emailField.value = '';
            if (passwordField) passwordField.value = '';
        });
    </script>
    <!-- Flatpickr JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
     <!-- JAVASCRIPT FILES -->
     
     <script src=\"js/jquery.min.js\"></script>
     <script src=\"js/bootstrap.bundle.min.js\"></script>
     <script src=\"js/jquery.sticky.js\"></script>
     <script src=\"js/click-scroll.js\"></script>
     <script src=\"js/animated-headline.js\"></script>
     <script src=\"js/modernizr.js\"></script>
     <script src=\"js/custom.js\"></script>
     <script src=\"js/user.js\"></script>
     
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "signup/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  678 => 407,  667 => 402,  663 => 400,  659 => 399,  648 => 394,  644 => 392,  640 => 391,  596 => 350,  572 => 329,  532 => 292,  486 => 249,  479 => 244,  473 => 243,  467 => 241,  464 => 240,  460 => 239,  453 => 235,  447 => 231,  441 => 230,  435 => 228,  432 => 227,  428 => 226,  403 => 203,  397 => 202,  391 => 200,  388 => 199,  384 => 198,  374 => 193,  368 => 192,  356 => 182,  350 => 181,  344 => 179,  341 => 178,  337 => 177,  327 => 172,  321 => 171,  313 => 165,  307 => 164,  301 => 162,  298 => 161,  294 => 160,  288 => 157,  278 => 149,  272 => 148,  266 => 146,  263 => 145,  259 => 144,  253 => 141,  246 => 136,  240 => 135,  234 => 133,  231 => 132,  227 => 131,  222 => 129,  212 => 121,  206 => 120,  200 => 118,  197 => 117,  193 => 116,  188 => 114,  182 => 110,  176 => 109,  170 => 107,  167 => 106,  163 => 105,  158 => 103,  150 => 98,  122 => 73,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Get Started Now</title>
    
     <!-- CSS FILES -->    

     <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">

     <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

     <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap\" rel=\"stylesheet\">

     <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
  

     <link href=\"css/bootstrap-icons.css\" rel=\"stylesheet\">
      
     <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
     <link href=\"css/templatemo-tiya-golf-club.css\" rel=\"stylesheet\">
     <link rel=\"stylesheet\" href=\"css/signup.css\">  

      <style>
        /* Style général du calendrier */
.flatpickr-calendar {
    background-color: #e0d6cf !important; /* Couleur de fond */
    border: 1px solid #ccc !important; /* Bordure */
    border-radius: 10px !important; /* Coins arrondis */
    font-family: 'DM Sans', sans-serif; /* Police personnalisée */
}

/* Style pour les jours */
.flatpickr-day {
    color: #000 !important; /* Couleur du texte */
    border-radius: 5px !important; /* Coins arrondis */
}

/* Style pour le jour actuel */
.flatpickr-day.today {
    background-color: #844062 !important; /* Couleur de fond pour la date actuelle */
    color: #fff !important; /* Couleur du texte */
}

/* Style pour les jours sélectionnés */
.flatpickr-day.selected {
    background-color: #844062 !important; /* Couleur de fond pour la date sélectionnée */
    color: #fff !important; /* Couleur du texte */
}

/* Style pour les jours désactivés */
.flatpickr-day.disabled {
    color: #ccc !important; /* Couleur des jours désactivés */
    cursor: not-allowed !important; /* Curseur désactivé */
}
      </style>       

</head>
<body>

  
   
    <svg xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z\"></path></svg>
           
        <div class=\"container\">
        <!-- Section gauche : Image de fond -->

        <div >
            <img src=\"images/11.jpg\" alt=\"Background Image\" class=\"background-image\" style=\"width: 100%; height: 100%; margin-top: -150px;\">
        </div>

        <a href=\"{{ path('app_home') }}\" class=\"postionHome\">
            <img 
                src=\"images/home3.png\" 
                alt=\"Home\" 
                style=\"
                    z-index: 9999; 
                    position: absolute; 
                    top: 50px; 
                    left: 30px; 
                    width: 30px; 
                    height: 30px;
                    transition: transform 0.3s ease; /* Transition fluide */
                \" 
                onmouseover=\"this.style.transform='scale(1.2)';\" 
                onmouseout=\"this.style.transform='scale(1)';\"
            >
        </a>

       

        <!-- Section centrale : Formulaire -->
        <div class=\"center-section\" style=\"margin-top: -230px;\">
            <h1 class=\"main-title\" style=\"font-size:45px\">Get Started Now</h1>
            <p class=\"subtitle\">You need an account to continue</p>
        
            <form id=\"signup-form\" class=\"signup-form\" method=\"post\" action=\"{{ path('app_signup') }}\" enctype=\"multipart/form-data\" autocomplete=\"off\">
                <!-- Ligne 1 : First Name & Last Name -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"firstName\">First Name</label>
                        <input type=\"text\" id=\"firstName\" name=\"firstName\" placeholder=\"First Name\" value=\"{{ app.request.get('firstName') }}\">
                        <span class=\"error-message\" id=\"firstNameError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'firstName' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"lastName\">Last Name</label>
                        <input type=\"text\" id=\"lastName\" name=\"lastName\" placeholder=\"Last Name\" value=\"{{ app.request.get('lastName') }}\">
                        <span class=\"error-message\" id=\"lastNameError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'lastName' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                    </div>
                </div>
        
                <!-- Ligne 2 : Date of Birth & CIN -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"dateOfBirth\">Date of birth</label>
                        <input type=\"date\" id=\"dateOfBirth\" name=\"dateOfBirth\" value=\"{{ app.request.get('dateOfBirth') }}\" onchange=\"calculateAge()\">
                        <span class=\"error-message\" id=\"birthDateError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'dateNaissance' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                        <small id=\"ageMessage\" style=\"color:  #844062;\"></small>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cin\">CIN</label>
                        <input type=\"text\" id=\"cin\" name=\"cin\" placeholder=\"CIN\" value=\"{{ app.request.get('cin') }}\">
                        
                        <span class=\"error-message\" id=\"cinError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'cin' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                    </div>
                </div>
        
                <!-- Ligne 3 : Phone Number & Gender -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"phoneNumber\">Phone number</label>
                        <input type=\"tel\" id=\"phoneNumber\" name=\"phoneNumber\" placeholder=\"Phone Number\" value=\"{{ app.request.get('phoneNumber') }}\">
                        
                        <span class=\"error-message\" id=\"phoneNumberError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'numTlf' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"gender\">Gender</label>
                        <select id=\"gender\" name=\"gender\">
                            <option value=\"\">Select Gender</option>
                            <option value=\"male\" {% if app.request.get('gender') == 'male' %}selected{% endif %}>Male</option>
                            <option value=\"female\" {% if app.request.get('gender') == 'female' %}selected{% endif %}>Female</option>
                        </select>
                        

                        <span class=\"error-message\" id=\"genreError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'genre' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                    </div>
                </div>
        
                <!-- Ligne 4 : Role -->
                <div class=\"form-row\">
                    <div class=\"form-group full-width\">
                        <label for=\"role\">Role</label>
                        <select id=\"role\" name=\"role\">
                            <option value=\"\">Select Role</option>
                            <option value=\"Client\" {% if app.request.get('role') == 'Client' %}selected{% endif %}>CLIENT</option>
                            <option value=\"Partenaire\" {% if app.request.get('role') == 'Partner' %}selected{% endif %}>PARTENAIRE</option>
                        </select>
                        

                        <span class=\"error-message\" id=\"roleError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'role' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                    </div>
                </div>
        
                <!-- Ligne 5 : Password & Email -->
                <div class=\"form-row\">
                    <div class=\"form-group password-group\">
                        <label for=\"password\">Password</label>
                        <a href=\"#\" class=\"signin-link mdp-link\" style=\"font-size:14px;\">Generate Password</a>
                        <div class=\"input-wrapper\">
                            <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" autocomplete=\"new-password\" oninput=\"checkPasswordStrength()\">
                            <button type=\"button\" class=\"toggle-password\" onclick=\"togglePasswordVisibility()\">
                                <img id=\"eye-icon\" src=\"images/oeil (1).png\" alt=\"Toggle Password Visibility\">
                            </button>
                        </div>
                        <div class=\"password-strength\">
                            <div id=\"passwordStrengthBar\" style=\"height: 10px; width: 100%; margin-top:3px; background-color: #e0e0e0; border-radius: 5px; overflow: hidden;\">
                                <div id=\"passwordStrengthIndicator\" style=\"height: 100%; width: 0%; background-color: red; transition: width 0.3s;\"></div>
                            </div>
                            <small id=\"passwordStrengthText\" style=\"font-size: 14px; color: #6c757d;\">Weak</small>
                        </div>
                      
                        <span class=\"error-message\" id=\"passwordError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'mdp' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" value=\"{{ app.request.get('email') }}\" autocomplete=\"new-email\">
                        

                        <span class=\"error-message\" id=\"emailError\">
                            {% for error in errors %}
                                {% if error.propertyPath == 'email' %}
                                    {{ error.message }}
                                {% endif %}
                            {% endfor %}
                        </span>
                    </div>
                </div>
        
                <!--recapcha-->
                <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\" style=\"margin-left:30px;\"></div>
                <!-- Bouton Signup -->
                <button type=\"submit\" class=\"signup-btn\" onclick=\"return validateForm()\">Signup</button>
                
                <button type=\"submit\" class=\"google-btn\" style=\"width:300px; height:50px; margin-top:20px;\" >
                    <img src=\"images/google.png\" alt=\"Google Icon\" style=\"width: 20px; height: 20px; margin-right: 30px;\">
                    Continue With Google</button>
                <!-- Lien Sign In -->
                <p class=\"signin-text\">
                    Already have an account? 
                    <a href=\"#\" class=\"signin-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasExample\">Sign In</a>
                </p>
                <!-- Champ caché pour la photo capturé a traver cam -->
                <input type=\"hidden\" id=\"capturedPhoto\" name=\"capturedPhoto\">
                <!-- Champ caché pour stocker le descripteur de visage généré par Face API -->
                <input type=\"hidden\" id=\"faceDescriptor\" name=\"faceDescriptor\">
                <!-- Champ caché pour sélectionner un fichier -->
                <input type=\"file\" id=\"fileInput\" name=\"fileInput\" accept=\"image/*\" style=\"display: none;\" onchange=\"displaySelectedImage(event)\">
            </form>
        </div>
        <!--partie pour login-->
        <div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <div class=\"mb-4\">
                <p class=\"form-label mb-2\">Login with Face Recognition!</p>
                <div class=\"camera-container\">
                    <video id=\"camera\" autoplay muted style=\"width: 200px; height: auto; border-radius: 10px;margin-left:80px;\"></video>
                    <canvas id=\"capturedCanvas\" style=\"display: none;\"></canvas>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"button\" class=\"form-control\" onclick=\"capturePhoto()\" style=\"background-color:#844062;color:white;margin-left:10px;\">Capture Photo</button>
                    </div>
                    
                </div>
            </div>
            <input type=\"hidden\" id=\"capturedPhoto\" name=\"capturedPhoto\">
            <!-- Champ caché pour stocker le descripteur de visage généré par Face API -->
                <input type=\"hidden\" id=\"faceDescriptor\" name=\"faceDescriptor\">
                <span style=\"margin-left:60px;\">-----------Or-----------</span>
                <p>Enter your Credentials to access your account</p>
            <div class=\"offcanvas-body d-flex flex-column\">
                <form id=\"login-form\" class=\"custom-form member-login-form\" action=\"{{ path('app_login') }}\" method=\"post\" role=\"form\">
                    <div class=\"member-login-form-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-number\">Email</label>
                            <input type=\"text\" name=\"member-login-number\" id=\"member-login-number\" class=\"form-control\" placeholder=\"name@gmail.com\" required autocomplete=\"new-email\">
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-password\">Password</label>
                            
                            <div class=\"input-wrapper\">
                                <input type=\"password\" name=\"member-login-password\" id=\"member-login-password\"  class=\"form-control\" placeholder=\"Password\" required autocomplete=\"new-password\">
                                <button type=\"button\" class=\"toggle-password\" onclick=\"togglePasswordVisibilityLogIn()\">
                                    <img id=\"eye-icon2\" src=\"images/oeil (1).png\" alt=\"Toggle Password Visibility login\">
                                </button>
                            </div>
                        </div>
                        <div class=\"form-check mb-4\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"flexCheckDefault\">
                            <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                Remember me
                            </label>
                        </div>
                        <div class=\"d-flex flex-column w-100\">
                            <button type=\"submit\" class=\"btn custom-btn custom-border-btn mb-3\">Login</button>
                        </div>
                        <div class=\"d-flex flex-column w-100\">
                            <button type=\"button\" class=\"btn custom-btn custom-border-btn mb-3\" style=\"margin-top:10px;\" onclick=\"compareFaces()\">Login with Face Recognition</button>
                        </div>
                        <div class=\"text-center my-4\">
                            <a href=\"#\" class=\"forgot-password-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#forgotPasswordOffcanvas\">Forgotten password?</a>
                        </div>
                    </div>
                </form>
               
                <div class=\"mt-auto mb-5\">
                    <p class=\"offcanvas-header p-login\">
                        <strong class=\"text-black me-3\">Don't have an account?</strong>
                        <a href=\"{{path('app_signup')}}\" class=\"contact-link\">Create Account</a>
                    </p>
                </div>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>


        <!-- partie pour forgot password-->

        <div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"forgotPasswordOffcanvas\" aria-labelledby=\"forgotPasswordOffcanvasLabel\">
            <div class=\"offcanvas-header\">
                <!-- Flèche de retour -->
                <button type=\"button\" class=\"btn btn-link text-decoration-none\" onclick=\"switchToLoginOffcanvas()\" aria-label=\"Back\">
                    <img src=\"images/fleche.png\" alt=\"Back\" style=\"width: 24px; height: 24px;\">
                </button>
                <h5 class=\"offcanvas-title ms-2\" id=\"forgotPasswordOffcanvasLabel\">Forgot Password!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <p style=\"margin-top: 30px;\">Enter your email to reset your password</p>
            <div class=\"offcanvas-body d-flex flex-column\" style=\"margin-top: 60px;\">
                <form id=\"forgot-password-form\" class=\"custom-form\" action=\"{{ path('app_forgot_password') }}\" method=\"post\" role=\"form\">
                    <div class=\"mb-4\">
                        <label class=\"form-label mb-2\" for=\"forgot-password-email\">Email</label>
                        <input type=\"email\" name=\"forgot-password-email\" id=\"forgot-password-email\" class=\"form-control\" placeholder=\"name@gmail.com\" required>
                    </div>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"submit\" class=\"form-control\">Send</button>
                    </div>
                   
                </form>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>


        <!-- Section droite : Image sélectionnée -->
        <div class=\"right-section\" style=\"margin-top: -330px;\">
            <!--frame pour le camera-->
            <div class=\"camera-container\">
                <video id=\"camera-stream\" autoplay style=\"width: 100%; height: auto; display: none;\"></video>
                <canvas id=\"photo-canvas\" style=\"display: none;\"></canvas>
            </div>
            
            <div class=\"image-frame\">
                <!-- L'image sélectionnée sera affichée ici -->
            </div>
            
           
            <div class=\"image-buttons\">
                <button type=\"button\" class=\"gallery-btn\" onclick=\"openGallery()\">
                    <img src=\"images/WhatsApp_Image_2025-02-21_at_22.33.28-removebg-preview.png\" alt=\"Select from Gallery\">
                </button>
                <span>or</span>
                <button type=\"button\" class=\"camera-btn\">
                    <img src=\"images/appareil-photo.png\" alt=\"Take Photo\">
                </button>
               
              
            </div>
        </div>
        <!--les alerte envoyées par flashes-->
        {% for message in app.flashes('error') %}
    <div class=\"alert-container\">
        <div class=\"alert alert-danger\">
            <span>{{ message }}</span>
            <button class=\"close-btn\" onclick=\"this.parentElement.style.display='none';\">×</button>
        </div>
    </div>
{% endfor %}
{% for message in app.flashes('success') %}
    <div class=\"alert-container\">
        <div class=\"alert alert-success\">
            <span>{{ message }}</span>
            <button class=\"close-btn\" onclick=\"this.parentElement.style.display='none';\">×</button>
        </div>
    </div>
{% endfor %}
    </div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
   
   
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    <!--scripts pour reconnaissance faciale-->
    <script defer src=\"https://cdn.jsdelivr.net/npm/@tensorflow/tfjs\"></script>
    <script defer src=\"https://cdn.jsdelivr.net/npm/@vladmandic/face-api/dist/face-api.min.js\"></script>
    <script>
        let videoStream;
    
        async function startCamera() {
            const video = document.getElementById('camera');
            videoStream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = videoStream;
        }
    
        function capturePhoto() {
            const video = document.getElementById('camera');
            const canvas = document.getElementById('capturedCanvas');
            const context = canvas.getContext('2d');
    
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
    
            // Convertir l'image capturée en base64
            const capturedPhoto = canvas.toDataURL('image/png');
            document.getElementById('capturedPhoto').value = capturedPhoto;
    
            alert('Photo captured! You can now log in.');
        }
    
        async function loadFaceAPI() {
            console.log('Loading Face API models...');
            await faceapi.nets.ssdMobilenetv1.loadFromUri('/models'); // Charger les modèles
            await faceapi.nets.faceRecognitionNet.loadFromUri('/models');
            await faceapi.nets.faceLandmark68Net.loadFromUri('/models');
            console.log('Face API models loaded successfully!');
        }
    
        async function compareFaces() {
            const capturedPhoto = document.getElementById('capturedPhoto').value;
            if (!capturedPhoto) {
                alert('Please capture a photo first.');
                return;
            }
        
            const image = await faceapi.fetchImage(capturedPhoto);
            const detections = await faceapi.detectSingleFace(image).withFaceLandmarks().withFaceDescriptor();
        
            if (!detections) {
                alert('No face detected. Please try again.');
                return;
            }
        
            const descriptor = detections.descriptor;
        
            // Envoyer les données au serveur pour comparaison
            const response = await fetch('/compare-faces', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ descriptors: descriptor })
            });
        
            const result = await response.json();
            if (result.success) {
                alert('Face recognized! Redirecting...');
                window.location.href = result.redirect; // Rediriger en fonction du rôle
            } else {
                alert('Face not recognized. Please try again.');
            }
        }
    
        // Démarrer la caméra et charger Face API
        window.onload = async () => {
            await loadFaceAPI();
            await startCamera();
        };
    </script>
   
    <script>
        function openGallery() {
            // Ouvre la boîte de dialogue de sélection de fichiers
            document.getElementById('fileInput').click();
        }
        function displaySelectedImage(event) {
            const file = event.target.files[0]; // Récupérer le fichier sélectionné
            const imageFrame = document.querySelector('.image-frame'); // Sélectionner le cadre
        
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    // Afficher l'image dans le cadre
                    imageFrame.innerHTML = `<img src=\"\${e.target.result}\" alt=\"Selected Image\" style=\"width: 100%; height: auto; border-radius: 10px;\">`;
                };
                reader.readAsDataURL(file); // Lire le fichier comme une URL de données
            } else {
                imageFrame.innerHTML = ''; // Effacer le cadre si aucun fichier n'est sélectionné
            }
        }
    </script>
    <script>
        function closeAlert() {
            const alert = event.target.parentElement;
            alert.style.display = 'none';
        }
    </script>
    <!--script pour le camera-->
    <script>
        <!--charger les modeles de face api-->
        async function loadFaceAPI() {
            console.log('Loading Face API models...');
            await faceapi.nets.ssdMobilenetv1.loadFromUri('/models'); // Modèle pour la détection des visages
            await faceapi.nets.faceRecognitionNet.loadFromUri('/models'); // Modèle pour la reconnaissance faciale
            await faceapi.nets.faceLandmark68Net.loadFromUri('/models'); // Modèle pour les repères faciaux
            console.log('Face API models loaded successfully!');
        }
        document.querySelector('.camera-btn').addEventListener('click', async function () {
            console.log('Camera button clicked');
            const video = document.getElementById('camera-stream');
            const canvas = document.getElementById('photo-canvas');
            const capturedPhotoInput = document.getElementById('capturedPhoto');
            const faceDescriptorInput = document.getElementById('faceDescriptor'); // Champ caché pour le descripteur
            const imageFrame = document.querySelector('.image-frame');
        
            // Charger les modèles Face API
            await loadFaceAPI();
        
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    console.log('Camera access granted');
                    video.srcObject = stream;
                    video.style.display = 'block';
        
                    setTimeout(async function () {
                        console.log('Capturing photo...');
                        canvas.width = video.videoWidth;
                        canvas.height = video.videoHeight;
        
                        const context = canvas.getContext('2d');
                        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        
                        // Convertir l'image en base64 et la stocker dans le champ caché
                        const imageData = canvas.toDataURL('image/png');
                        console.log('Image captured:', imageData);
                        capturedPhotoInput.value = imageData;
        
                        // Afficher l'image capturée dans le conteneur
                        imageFrame.innerHTML = `<img src=\"\${imageData}\" alt=\"Captured Photo\" style=\"width: 100%; height: auto; border-radius: 10px;\">`;
        
                        // Générer le descripteur de visage
                        const image = await faceapi.fetchImage(imageData);
                        const detections = await faceapi.detectSingleFace(image).withFaceLandmarks().withFaceDescriptor();
        
                        if (detections) {
                            const descriptor = detections.descriptor;
                            faceDescriptorInput.value = JSON.stringify(descriptor); // Stocker le descripteur dans le champ caché
                            console.log('Face descriptor generated:', descriptor);
                        } else {
                            alert('No face detected. Please try again.');
                        }
        
                        // Arrêter la caméra
                        const tracks = stream.getTracks();
                        tracks.forEach(track => track.stop());
        
                        video.style.display = 'none';
                    }, 4000); // Capture après 4 secondes
                })
                .catch(function (error) {
                    console.error('Error accessing the camera:', error);
                    alert('Unable to access the camera. Please check your permissions.');
                });
        });
    </script>
   
    <script>
        function validateForm() {
            let isValid = true;
        
            // Récupérer les champs du formulaire
            const firstName = document.getElementById('firstName');
            const lastName = document.getElementById('lastName');
            const dateOfBirth = document.getElementById('dateOfBirth');
            const cin = document.getElementById('cin');
            const phoneNumber = document.getElementById('phoneNumber');
            const gender = document.getElementById('gender');
            const role = document.getElementById('role');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
        
            // Récupérer les conteneurs d'erreurs
            const errorMessages = document.querySelectorAll('.error-message');
        
            // Réinitialiser les messages d'erreur
            errorMessages.forEach(error => error.textContent = '');
        
            // Vérifier chaque champ
            if (!firstName.value.trim()) {
                document.getElementById('firstNameError').textContent = 'First name is required.';
                isValid = false;
            }
        
            if (!lastName.value.trim()) {
                document.getElementById('lastNameError').textContent = 'Last name is required.';
                isValid = false;
            }
        
            if (!dateOfBirth.value.trim()) {
                document.getElementById('birthDateError').textContent = 'Date of birth is required.';
                isValid = false;
            }
        
            if (!cin.value.trim() || cin.value.length !== 8) {
                document.getElementById('cinError').textContent = 'CIN must be exactly 8 characters long.';
                isValid = false;
            }
        
            if (!phoneNumber.value.trim()) {
                document.getElementById('phoneNumberError').textContent = 'Phone number is required.';
                isValid = false;
            }
        
            if (!gender.value.trim()) {
                document.getElementById('genreError').textContent = 'Gender is required.';
                isValid = false;
            }
        
            if (!role.value.trim()) {
                document.getElementById('roleError').textContent = 'Role is required.';
                isValid = false;
            }
        
            if (!email.value.trim() || !email.value.includes('@')) {
                document.getElementById('emailError').textContent = 'A valid email is required.';
                isValid = false;
            }
        
            if (!password.value.trim() || password.value.length < 8) {
                document.getElementById('passwordError').textContent = 'Password must be at least 8 characters long.';
                isValid = false;
            }
        
            return isValid;
        }
    </script>
    <!--script pour le design du calendrier-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr(\"#dateOfBirth\", {
                dateFormat: \"Y-m-d\",
                maxDate: \"2007-12-31\", // Dernière date autorisée
                defaultDate: \"2007-01-01\", // Date par défaut
                onReady: function (selectedDates, dateStr, instance) {
                    // Appliquer un style personnalisé au conteneur du calendrier
                    instance.calendarContainer.style.backgroundColor = \"#e0d6cf\"; // Couleur de fond
                    instance.calendarContainer.style.color = \"#000\"; // Couleur du texte
                },
                onDayCreate: function (dObj, dStr, fp, dayElem) {
                    const today = new Date();
                    const date = new Date(dayElem.dateObj);
                    if (date.toDateString() === today.toDateString()) {
                        dayElem.style.backgroundColor = \"#844062\"; // Couleur de la date actuelle
                        dayElem.style.color = \"#fff\"; // Couleur du texte
                    }
                }
            });
        });
    </script>
    <!--script pour désactiver les années aprés 2007-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dateOfBirthInput = document.getElementById('dateOfBirth');
        
            if (dateOfBirthInput) {
                const maxDate = `2007-12-31`; // Dernier jour de l'année 2007
        
                // Définir la limite max
                dateOfBirthInput.setAttribute('max', maxDate);
        
                // Validation de la date de naissance
                dateOfBirthInput.addEventListener('input', function () {
                    const birthDateError = document.getElementById('birthDateError');
                    const selectedDate = new Date(this.value);
                    const maxDateObj = new Date(maxDate);
        
                    if (!this.value) {
                        birthDateError.textContent = 'Date of birth is required.';
                    } else if (selectedDate > maxDateObj) {
                        birthDateError.textContent = `Date must be in 2007 or earlier.`;
                    } else {
                        birthDateError.textContent = ''; // Effacer les erreurs si la date est valide
                    }
                });
            }
        });
    </script>
    <!--script pour calculer l'age-->
    <script>
        function calculateAge() {
            const birthDateInput = document.getElementById('dateOfBirth').value;
            const ageMessage = document.getElementById('ageMessage');
    
            if (birthDateInput) {
                const birthDate = new Date(birthDateInput);
                const today = new Date();
                let age = today.getFullYear() - birthDate.getFullYear();
                const monthDifference = today.getMonth() - birthDate.getMonth();
    
                // Ajuster l'âge si l'anniversaire n'est pas encore passé cette année
                if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
    
                if (age >= 0) {
                    ageMessage.textContent = `You are \${age} years old.`;
                } else {
                    ageMessage.textContent = \"Please enter a valid date of birth.\";
                }
            } else {
                ageMessage.textContent = \"\"; // Effacer le message si aucune date n'est saisie
            }
        }
    </script>
    <!--script pour ajouter le code pays au numero-->
    <script>
        const countryRules = [
            { code: '+216', prefix: '2', length: 8, country: 'Tunisia' }, // Tunisie
            { code: '+216', prefix: '5', length: 8, country: 'Tunisia' }, // Tunisie
            { code: '+216', prefix: '9', length: 8, country: 'Tunisia' }, // Tunisie
            { code: '+33', prefix: '', length: 9, country: 'France' },    // France
            { code: '+1', prefix: '', length: 10, country: 'USA/Canada' }, // États-Unis et Canada
            { code: '+44', prefix: '', length: 10, country: 'UK' },       // Royaume-Uni
            { code: '+49', prefix: '', length: 10, country: 'Germany' },  // Allemagne
            { code: '+39', prefix: '', length: 10, country: 'Italy' },    // Italie
            { code: '+34', prefix: '', length: 9, country: 'Spain' },     // Espagne
            { code: '+212', prefix: '', length: 9, country: 'Morocco' },  // Maroc
            { code: '+213', prefix: '', length: 9, country: 'Algeria' },  // Algérie
            { code: '+20', prefix: '', length: 10, country: 'Egypt' }     // Égypte
        ];
    
        document.getElementById('phoneNumber').addEventListener('blur', function () {
            const phoneNumberInput = document.getElementById('phoneNumber');
            const phoneNumberError = document.getElementById('phoneNumberError');
            let phoneNumber = phoneNumberInput.value.trim();
    
            // Vérifier si un code pays est déjà présent
            if (phoneNumber.startsWith('+')) {
                phoneNumberError.textContent = ''; // Aucun traitement nécessaire
                return;
            }
    
            // Ajouter le code pays en fonction des règles
            let found = false;
            for (const rule of countryRules) {
                if (
                    phoneNumber.startsWith(rule.prefix) &&
                    phoneNumber.length === rule.length
                ) {
                    phoneNumberInput.value = rule.code + phoneNumber;
                    phoneNumberError.textContent = ''; // Effacer les erreurs
                    found = true;
                    break;
                }
            }
    
            // Si aucun préfixe correspondant n'est trouvé
            if (!found) {
                phoneNumberError.textContent = 'Invalid phone number or unsupported region.';
            }
        });
    </script>
    <!--script pour générer auto un mdp-->
    <script>
        document.querySelector('.mdp-link').addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien
    
            const firstNameInput = document.getElementById('firstName');
            const passwordInput = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
    
            const firstName = firstNameInput.value.trim();
    
            if (!firstName) {
                passwordError.textContent = 'Please enter your first name before generating a password.';
                return;
            }
    
            // Générer un mot de passe aléatoire
            const specialChars = '!@#\$%^&*()_+[]{}|;:,.<>?';
            const numbers = '0123456789';
            const randomChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            const minLength = 8;
    
            let generatedPassword = firstName;
    
            // Ajouter des caractères spéciaux et des chiffres
            for (let i = 0; i < 2; i++) {
                generatedPassword += specialChars.charAt(Math.floor(Math.random() * specialChars.length));
            }
    
            for (let i = 0; i < 2; i++) {
                generatedPassword += numbers.charAt(Math.floor(Math.random() * numbers.length));
            }
    
            // Compléter avec des caractères aléatoires pour atteindre la longueur minimale
            while (generatedPassword.length < minLength) {
                generatedPassword += randomChars.charAt(Math.floor(Math.random() * randomChars.length));
            }
    
            // Mettre à jour le champ mot de passe
            passwordInput.value = generatedPassword;
            passwordError.textContent = ''; // Effacer les erreurs
        });
    </script>
    <!--progress bar du mdp-->
    <script>
        function checkPasswordStrength() {
            const passwordInput = document.getElementById('password').value;
            const strengthBar = document.getElementById('passwordStrengthIndicator');
            const strengthText = document.getElementById('passwordStrengthText');
    
            let strength = 0;
    
            // Vérifier si le mot de passe contient des lettres
            if (/[a-zA-Z]/.test(passwordInput)) {
                strength += 1;
            }
    
            // Vérifier si le mot de passe contient des chiffres
            if (/\\d/.test(passwordInput)) {
                strength += 1;
            }
    
            // Vérifier si le mot de passe contient des caractères spéciaux
            if (/[!@#\$%^&*(),.?\":{}|<>]/.test(passwordInput)) {
                strength += 1;
            }
    
            // Vérifier la longueur du mot de passe
            if (passwordInput.length >= 8) {
                strength += 1;
            }
    
            // Mettre à jour la barre de progression et le texte
            if (strength === 1) {
                strengthBar.style.width = '25%';
                strengthBar.style.backgroundColor = 'red';
                strengthText.textContent = 'Weak';
                strengthText.style.color = 'red';
            } else if (strength === 2) {
                strengthBar.style.width = '50%';
                strengthBar.style.backgroundColor = 'orange';
                strengthText.textContent = 'Medium';
                strengthText.style.color = 'orange';
            } else if (strength >= 3) {
                strengthBar.style.width = '100%';
                strengthBar.style.backgroundColor = 'green';
                strengthText.textContent = 'Strong';
                strengthText.style.color = 'green';
            } else {
                strengthBar.style.width = '0%';
                strengthBar.style.backgroundColor = '#e0e0e0';
                strengthText.textContent = 'Weak';
                strengthText.style.color = '#6c757d';
            }
        }
    </script>
    <!--progress bar pour le mdp généré automatiquement-->
    <script>
        document.querySelector('.mdp-link').addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien
    
            const firstNameInput = document.getElementById('firstName');
            const passwordInput = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
    
            const firstName = firstNameInput.value.trim();
    
            if (!firstName) {
                passwordError.textContent = 'Please enter your first name before generating a password.';
                return;
            }
    
            // Générer un mot de passe aléatoire
            const specialChars = '!@#\$%^&*()_+[]{}|;:,.<>?';
            const numbers = '0123456789';
            const randomChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            const minLength = 8;
    
            let generatedPassword = firstName;
    
            // Ajouter des caractères spéciaux et des chiffres
            for (let i = 0; i < 2; i++) {
                generatedPassword += specialChars.charAt(Math.floor(Math.random() * specialChars.length));
            }
    
            for (let i = 0; i < 2; i++) {
                generatedPassword += numbers.charAt(Math.floor(Math.random() * numbers.length));
            }
    
            // Compléter avec des caractères aléatoires pour atteindre la longueur minimale
            while (generatedPassword.length < minLength) {
                generatedPassword += randomChars.charAt(Math.floor(Math.random() * randomChars.length));
            }
    
            // Mettre à jour le champ mot de passe
            passwordInput.value = generatedPassword;
            passwordError.textContent = ''; // Effacer les erreurs
    
            // Vérifier la force du mot de passe généré
            checkPasswordStrength();
        });
    </script>
    
    <script>
    
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
    
            if (passwordField.type === 'password') {
                passwordField.type = 'text'; // Affiche le mot de passe
                eyeIcon.src = 'images/oeil.png'; // Change l'image pour l'œil ouvert
            } else {
                passwordField.type = 'password'; // Masque le mot de passe
                eyeIcon.src = 'images/oeil (1).png'; // Change l'image pour l'œil fermé
            }
        }



        function togglePasswordVisibilityLogIn() {
            const passwordField = document.getElementById('member-login-password');
            const eyeIcon = document.getElementById('eye-icon2');
    
            if (passwordField.type === 'password') {
                passwordField.type = 'text'; // Affiche le mot de passe
                eyeIcon.src = 'images/oeil.png'; // Change l'image pour l'œil ouvert
            } else {
                passwordField.type = 'password'; // Masque le mot de passe
                eyeIcon.src = 'images/oeil (1).png'; // Change l'image pour l'œil fermé
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Réinitialiser les champs email et mot de passe
            const emailField = document.getElementById('email');
            const passwordField = document.getElementById('password');
    
            if (emailField) emailField.value = '';
            if (passwordField) passwordField.value = '';
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Réinitialiser les champs email et mot de passe
            const emailField = document.getElementById('member-login-number');
            const passwordField = document.getElementById('member-login-password');
    
            if (emailField) emailField.value = '';
            if (passwordField) passwordField.value = '';
        });
    </script>
    <!-- Flatpickr JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
     <!-- JAVASCRIPT FILES -->
     
     <script src=\"js/jquery.min.js\"></script>
     <script src=\"js/bootstrap.bundle.min.js\"></script>
     <script src=\"js/jquery.sticky.js\"></script>
     <script src=\"js/click-scroll.js\"></script>
     <script src=\"js/animated-headline.js\"></script>
     <script src=\"js/modernizr.js\"></script>
     <script src=\"js/custom.js\"></script>
     <script src=\"js/user.js\"></script>
     
</body>
</html>", "signup/index.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\signup\\index.html.twig");
    }
}
