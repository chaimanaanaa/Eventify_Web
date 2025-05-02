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

/* offers/afficherOffreFront.html.twig */
class __TwigTemplate_80df06e109a6e54f641dd9c8d498e8e1 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/afficherOffreFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/afficherOffreFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offers/afficherOffreFront.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "<head>

    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/offre.css"), "html", null, true);
        yield "\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
</head>

<body>
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">

    <div class=\"section-overlay\"></div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-6 col-12\">

                <h1 class=\"text-white mb-4 pb-2\">Manage Your Requests</h1>

               <!-- <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>-->
            </div>

        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>
";
        // line 35
        yield "<div style=\"height: 5px;background-color:white;\">.</div> 


<!-------------------------------------------------------------------------------------------------->

        <!-- Conteneur pour afficher les détails -->
<!--------------------------- Conteneur flottant pour afficher les détails ------------------>
<div id=\"floatingDetails\" style=\"margin-left:300px;margin-top:400px; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); background-color: white; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: none; z-index: 9999; width: 700px; max-width: 90%;\">
    <button id=\"closeFloatingDetails\" style=\"background-color: #844062 ;border-radius:5px; color: white; border: none; padding: 5px 10px; cursor: pointer; float: right;\">Fermer</button><br><br>
    <div class=\"floating-content\" style=\"display: flex; flex-wrap: wrap; align-items: center; gap: 20px;\">
        <img class=\"imageOrg\" id=\"floatingImage\" src=\"\" alt=\"Profile\" style=\"background-color:white; position: absolute;  top: 100px; left: -450px; width: 350px; height: 350px; border: 2px solid #844062; flex-shrink: 0;border-radius:20px;\" />
        <div id=\"floatingInfo\" style=\"flex: 1; min-width: 250px; word-wrap: break-word; overflow-wrap: break-word;\">
            <p><strong>Full Name :</strong> <span id=\"floatingNomPrenom\"></span></p>
            <p><strong>Email :</strong> <span id=\"floatingEmail\"></span></p>
            <p><strong>Phone Number :</strong> <span id=\"floatingNum\"></span></p>
            <p><strong>City :</strong> <span id=\"floatingCity\"></span></p>
            <p><strong>Date of Birth :</strong> <span id=\"floatingDateNaissance\"></span></p>
            <p><strong>Specialty :</strong> <span id=\"floatingSpecialite\"></span></p>
            <p><strong>Experience :</strong> <span id=\"floatingExperience\"></span> ans</p>
            <p><strong>Salary :</strong> <span id=\"floatingSalaire\"></span> DT</p>
            <p><strong>State :</strong> <span id=\"floatingEtat\"></span></p>
            <p><strong>Job :</strong> <span id=\"floatingEmployment\"></span></p>
            <p><strong>Languages :</strong> <span id=\"floatingLangues\"></span></p>
            <p><strong>Skills :</strong> <span id=\"floatingCompetences\"></span></p>
            <p><strong>Hiring Date :</strong> <span id=\"floatingDateEmpbauche\"></span></p>
        </div>
    </div>
</div>



<!-------------------------------------------------------------------------------------------------->

<!------------ Alerte 1 : add yes or no --------->

    <!-- Modale personnalisée -->
    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to delete this Offer?</p>
            <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
            <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
        </div>
    </div>

    <!-- Fond obscurci pour la modale -->
    <div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>


<!------------ Alerte 2  added labes --------->
    <!-- Modale de succès -->
    <div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Offer deleted successfully!</p>
            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>

    <!-- Fond obscurci pour la modale de succès -->
    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>



<!------------ Alerte 3  erreur  dajout--------->
<!-- Modale d'erreur -->
<div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while deleting this Offer.</p>
        <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>

<!-- Fond obscurci pour la modale d'erreur -->
<div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!------------------------- ------------------------------------------------->    

<a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_organizers");
        yield "\" >
    <img 
        src=\"filesOrganisateur/imageOrganisateur/retoureFlecheOr.png\" 
        alt=\"Retour\" 
        style=\"
            z-index: 9999; 
            position: absolute; 
            top: 500px; 
            left: 100px; 
            width: 30px; 
            height: 30px;
            transition: transform 0.3s ease; /* Transition fluide */
        \" 
        onmouseover=\"this.style.transform='scale(1.2)';\" 
        onmouseout=\"this.style.transform='scale(1)';\"
    >
</a>


<!-------------------------- Code affichage -------------------------------------------------------------------->


<div class=\"offers-container\">
    <div class=\"filter-buttons\">
        <button class=\"filter-btn active\" data-filter=\"all\">All Offers</button>
        <button class=\"filter-btn\" data-filter=\"pending\">Pending</button>
        <button class=\"filter-btn\" data-filter=\"treated\">Handled </button>
    </div>

    <div class=\"search-and-sort\">
        <div class=\"search-container\">
            <input type=\"text\" id=\"offerSearch\" placeholder=\"Search offers...\" class=\"search-input\">
            <i class=\"fas fa-search search-icon\"></i>
        </div>
    <div
    <div class=\"sort-container\">
        <select id=\"dateSort\" class=\"sort-select\">
            <option value=\"\">Sort by date</option>
            <option value=\"desc\">Newest first</option>
            <option value=\"asc\">Oldest first</option>
        </select>
    </div>
</div>


    <div class=\"offers-grid\" id=\"offersGrid\">

<!---------------------------------------- treated------------------------------------------------------->
        
        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["treated_offers"]) || array_key_exists("treated_offers", $context) ? $context["treated_offers"] : (function () { throw new RuntimeError('Variable "treated_offers" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 161
            yield "                <div class=\"offer-card treated card\" data-status=\"treated\">
                    <div class=\"card-inner\">
                        <div class=\"card-front\">
                            <div class=\"card-header\">
                                <h3>";
            // line 165
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 165)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 165), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 165), "html", null, true)));
            yield "</h3>
                                <span class=\"status-badge treated\">Handled </span>
                            </div>
                            <div class=\"card-body\">
                                <p><i class=\"fas fa-calendar-alt\"></i> ";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 169), "d/m/Y"), "html", null, true);
            yield "</p>
                                <p><i class=\"fas fa-map-marker-alt\"></i> ";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 170)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 170), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</p>
                                <p><i class=\"fas fa-users\"></i> ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 171), 0)) : (0)), "html", null, true);
            yield " invités</p>
                                <p><i class=\"fas fa-euro-sign\"></i> ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 172)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 172), 0)) : (0)), "html", null, true);
            yield " budget</p>
                            </div>
                            <div class=\"card-footer\">
                                <button class=\"flip-btn\"><i class=\"fas fa-sync-alt\"></i> Details</button>  


                                <button type=\"submit\" class=\"details-btn modify-btn\" style=\"background: none; border: none; cursor: pointer;\" data-id=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "getIdOrganisateur", [], "method", false, false, false, 178), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-comment-dots\"></i> See Answer
                                </button>

                                                            
                               <!-- <a href=\"#\" class=\"answer-btn action-btn details-btn\" data-id=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "getIdOrganisateur", [], "method", false, false, false, 183), "html", null, true);
            yield "\"><i class=\"fas fa-comment-dots\"></i> See Answer</a>-->

                                <a href=\"#\" class=\"delete-btn\" data-offer-id=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 185), "html", null, true);
            yield "\"><i class=\"fas fa-trash-alt\"></i> Delete</a>                               
                            </div>
                        </div>
                        
                        <div class=\"card-back\">
                            <div class=\"card-header\">
                                <h3>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 191), "html", null, true);
            yield "</h3>
                            </div>
                            <div class=\"card-body full-details\">
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Description :</span>
                                    <span class=\"detail-value\">";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 196), "html", null, true);
            yield "</span>
                                </div>
                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-calendar-day\"></i> Date demande :</span>
                                    <span class=\"detail-value\">";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 201), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                                </div>
                                
                                ";
            // line 204
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 204)) {
                // line 205
                yield "                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-calendar-alt\"></i> Période :</span>
                                    <span class=\"detail-value\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 207), "html", null, true);
                yield " au ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateFinEvenement", [], "any", false, false, false, 207), "html", null, true);
                yield "</span>
                                </div>
                                ";
            }
            // line 210
            yield "                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt\"></i> Lieu :</span>
                                    <span class=\"detail-value\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 213)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 213), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</span>
                                </div>
                                
                                ";
            // line 216
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 216)) {
                // line 217
                yield "                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-tag\"></i> Type :</span>
                                    <span class=\"detail-value\">";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 219), "html", null, true);
                yield "</span>
                                </div>
                                ";
            }
            // line 222
            yield "                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-users\"></i> Invités :</span>
                                    <span class=\"detail-value\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 225)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 225), 0)) : (0)), "html", null, true);
            yield "</span>
                                </div>
                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-euro-sign\"></i> Budget :</span>
                                    <span class=\"detail-value\">";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 230)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 230), 0)) : (0)), "html", null, true);
            yield " €</span>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <button class=\"flip-btn\"><i class=\"fas fa-undo\"></i>Back</button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "

    <!---------------------------------------- pending------------------------------------------------------->
        ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pending_offers"]) || array_key_exists("pending_offers", $context) ? $context["pending_offers"] : (function () { throw new RuntimeError('Variable "pending_offers" does not exist.', 243, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 244
            yield "            <div class=\"offer-card pending\" data-status=\"pending\">
                <div class=\"card-inner\">
                    <div class=\"card-front\">
                        <div class=\"card-header\">
                            <h3>";
            // line 248
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 248)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 248), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 248), "html", null, true)));
            yield "</h3>
                            <span class=\"status-badge pending\">Pending</span>
                        </div>
                        <div class=\"card-body\">
                            <p><i class=\"fas fa-calendar-alt\"></i> ";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 252), "d/m/Y"), "html", null, true);
            yield "</p>
                            <p><i class=\"fas fa-map-marker-alt\"></i> ";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 253), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</p>
                            <p><i class=\"fas fa-users\"></i> ";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 254)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 254), 0)) : (0)), "html", null, true);
            yield " invités</p>
                            <p><i class=\"fas fa-euro-sign\"></i> ";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 255), 0)) : (0)), "html", null, true);
            yield " budget</p>
                        </div>
                        <div class=\"card-footer\">
                            <button class=\"flip-btn\"><i class=\"fas fa-sync-alt\"></i> Details</button>
<!--<a href=\"";
            // line 259
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ModifyYourRequest");
            yield "\"  class=\"modify-btn\"><i class=\"fas fa-edit\"></i> Modify</a>-->

<form action=\"";
            // line 261
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ModifyYourRequest");
            yield "\" method=\"POST\" style=\"display: inline;\">
    <input type=\"hidden\" name=\"id\" value=\"";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 262), "html", null, true);
            yield "\">
    <button type=\"submit\"  style=\"background: none; border: none; cursor: pointer;\">
        <i class=\"fas fa-edit\"></i> Modify
    </button>
</form>

<a href=\"#\" class=\"delete-btn\" data-offer-id=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 268), "html", null, true);
            yield "\"><i class=\"fas fa-trash-alt\"></i> Delete</a>                      
                         </div>
                    </div>
                    
                    <div class=\"card-back\">
                        <div class=\"card-header\">
                            <h3>";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 274), "html", null, true);
            yield "</h3>
                        </div>
                        <div class=\"card-body full-details\">
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Description :</span>
                                <span class=\"detail-value\">";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 279), "html", null, true);
            yield "</span>
                            </div>
                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-calendar-day\"></i> Date demande :</span>
                                <span class=\"detail-value\">";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 284), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                            </div>
                            
                            ";
            // line 287
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 287)) {
                // line 288
                yield "                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-calendar-alt\"></i> Période :</span>
                                <span class=\"detail-value\">";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 290), "html", null, true);
                yield " au ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateFinEvenement", [], "any", false, false, false, 290), "html", null, true);
                yield "</span>
                            </div>
                            ";
            }
            // line 293
            yield "                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt\"></i> Lieu :</span>
                                <span class=\"detail-value\">";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 296)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 296), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</span>
                            </div>
                            
                            ";
            // line 299
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 299)) {
                // line 300
                yield "                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-tag\"></i> Type :</span>
                                <span class=\"detail-value\">";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 302), "html", null, true);
                yield "</span>
                            </div>
                            ";
            }
            // line 305
            yield "                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-users\"></i> Invités :</span>
                                <span class=\"detail-value\">";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 308)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 308), 0)) : (0)), "html", null, true);
            yield "</span>
                            </div>
                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-euro-sign\"></i> Budget :</span>
                                <span class=\"detail-value\">";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 313)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 313), 0)) : (0)), "html", null, true);
            yield " €</span>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <button class=\"flip-btn\"><i class=\"fas fa-undo\"></i>Back</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        yield "   
<!------------------------------------------------------------------------------------------------------------------------------->

    </div>
</div>
<script src=\"filesOrganisateur/afficherOffre.js\"></script>


<div style=\"height: 100px;background-color:white;\">.</div> 
</body>
</html>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "offers/afficherOffreFront.html.twig";
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
        return array (  544 => 323,  528 => 313,  520 => 308,  515 => 305,  509 => 302,  505 => 300,  503 => 299,  497 => 296,  492 => 293,  484 => 290,  480 => 288,  478 => 287,  472 => 284,  464 => 279,  456 => 274,  447 => 268,  438 => 262,  434 => 261,  429 => 259,  422 => 255,  418 => 254,  414 => 253,  410 => 252,  403 => 248,  397 => 244,  393 => 243,  388 => 240,  372 => 230,  364 => 225,  359 => 222,  353 => 219,  349 => 217,  347 => 216,  341 => 213,  336 => 210,  328 => 207,  324 => 205,  322 => 204,  316 => 201,  308 => 196,  300 => 191,  291 => 185,  286 => 183,  278 => 178,  269 => 172,  265 => 171,  261 => 170,  257 => 169,  250 => 165,  244 => 161,  240 => 160,  188 => 111,  110 => 35,  80 => 7,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%extends \"base.html.twig\" %}


{%block content %}
<head>

    <link rel=\"stylesheet\" href=\"{{ asset('filesOrganisateur/offre.css') }}\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
</head>

<body>
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">

    <div class=\"section-overlay\"></div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-6 col-12\">

                <h1 class=\"text-white mb-4 pb-2\">Manage Your Requests</h1>

               <!-- <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>-->
            </div>

        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>
{# écrivez votre code ici#}
<div style=\"height: 5px;background-color:white;\">.</div> 


<!-------------------------------------------------------------------------------------------------->

        <!-- Conteneur pour afficher les détails -->
<!--------------------------- Conteneur flottant pour afficher les détails ------------------>
<div id=\"floatingDetails\" style=\"margin-left:300px;margin-top:400px; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); background-color: white; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: none; z-index: 9999; width: 700px; max-width: 90%;\">
    <button id=\"closeFloatingDetails\" style=\"background-color: #844062 ;border-radius:5px; color: white; border: none; padding: 5px 10px; cursor: pointer; float: right;\">Fermer</button><br><br>
    <div class=\"floating-content\" style=\"display: flex; flex-wrap: wrap; align-items: center; gap: 20px;\">
        <img class=\"imageOrg\" id=\"floatingImage\" src=\"\" alt=\"Profile\" style=\"background-color:white; position: absolute;  top: 100px; left: -450px; width: 350px; height: 350px; border: 2px solid #844062; flex-shrink: 0;border-radius:20px;\" />
        <div id=\"floatingInfo\" style=\"flex: 1; min-width: 250px; word-wrap: break-word; overflow-wrap: break-word;\">
            <p><strong>Full Name :</strong> <span id=\"floatingNomPrenom\"></span></p>
            <p><strong>Email :</strong> <span id=\"floatingEmail\"></span></p>
            <p><strong>Phone Number :</strong> <span id=\"floatingNum\"></span></p>
            <p><strong>City :</strong> <span id=\"floatingCity\"></span></p>
            <p><strong>Date of Birth :</strong> <span id=\"floatingDateNaissance\"></span></p>
            <p><strong>Specialty :</strong> <span id=\"floatingSpecialite\"></span></p>
            <p><strong>Experience :</strong> <span id=\"floatingExperience\"></span> ans</p>
            <p><strong>Salary :</strong> <span id=\"floatingSalaire\"></span> DT</p>
            <p><strong>State :</strong> <span id=\"floatingEtat\"></span></p>
            <p><strong>Job :</strong> <span id=\"floatingEmployment\"></span></p>
            <p><strong>Languages :</strong> <span id=\"floatingLangues\"></span></p>
            <p><strong>Skills :</strong> <span id=\"floatingCompetences\"></span></p>
            <p><strong>Hiring Date :</strong> <span id=\"floatingDateEmpbauche\"></span></p>
        </div>
    </div>
</div>



<!-------------------------------------------------------------------------------------------------->

<!------------ Alerte 1 : add yes or no --------->

    <!-- Modale personnalisée -->
    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to delete this Offer?</p>
            <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
            <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
        </div>
    </div>

    <!-- Fond obscurci pour la modale -->
    <div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>


<!------------ Alerte 2  added labes --------->
    <!-- Modale de succès -->
    <div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Offer deleted successfully!</p>
            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>

    <!-- Fond obscurci pour la modale de succès -->
    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>



<!------------ Alerte 3  erreur  dajout--------->
<!-- Modale d'erreur -->
<div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while deleting this Offer.</p>
        <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>

<!-- Fond obscurci pour la modale d'erreur -->
<div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!------------------------- ------------------------------------------------->    

<a href=\"{{ path('app_organizers') }}\" >
    <img 
        src=\"filesOrganisateur/imageOrganisateur/retoureFlecheOr.png\" 
        alt=\"Retour\" 
        style=\"
            z-index: 9999; 
            position: absolute; 
            top: 500px; 
            left: 100px; 
            width: 30px; 
            height: 30px;
            transition: transform 0.3s ease; /* Transition fluide */
        \" 
        onmouseover=\"this.style.transform='scale(1.2)';\" 
        onmouseout=\"this.style.transform='scale(1)';\"
    >
</a>


<!-------------------------- Code affichage -------------------------------------------------------------------->


<div class=\"offers-container\">
    <div class=\"filter-buttons\">
        <button class=\"filter-btn active\" data-filter=\"all\">All Offers</button>
        <button class=\"filter-btn\" data-filter=\"pending\">Pending</button>
        <button class=\"filter-btn\" data-filter=\"treated\">Handled </button>
    </div>

    <div class=\"search-and-sort\">
        <div class=\"search-container\">
            <input type=\"text\" id=\"offerSearch\" placeholder=\"Search offers...\" class=\"search-input\">
            <i class=\"fas fa-search search-icon\"></i>
        </div>
    <div
    <div class=\"sort-container\">
        <select id=\"dateSort\" class=\"sort-select\">
            <option value=\"\">Sort by date</option>
            <option value=\"desc\">Newest first</option>
            <option value=\"asc\">Oldest first</option>
        </select>
    </div>
</div>


    <div class=\"offers-grid\" id=\"offersGrid\">

<!---------------------------------------- treated------------------------------------------------------->
        
        {% for offer in treated_offers %}
                <div class=\"offer-card treated card\" data-status=\"treated\">
                    <div class=\"card-inner\">
                        <div class=\"card-front\">
                            <div class=\"card-header\">
                                <h3>{{ offer.objet|length > 20 ? offer.objet|slice(0, 20) ~ '...' : offer.objet }}</h3>
                                <span class=\"status-badge treated\">Handled </span>
                            </div>
                            <div class=\"card-body\">
                                <p><i class=\"fas fa-calendar-alt\"></i> {{ offer.dateDemande|date('d/m/Y') }}</p>
                                <p><i class=\"fas fa-map-marker-alt\"></i> {{ offer.lieuEvenement|default('Non spécifié') }}</p>
                                <p><i class=\"fas fa-users\"></i> {{ offer.nombreInvite|default(0) }} invités</p>
                                <p><i class=\"fas fa-euro-sign\"></i> {{ offer.budget|default(0) }} budget</p>
                            </div>
                            <div class=\"card-footer\">
                                <button class=\"flip-btn\"><i class=\"fas fa-sync-alt\"></i> Details</button>  


                                <button type=\"submit\" class=\"details-btn modify-btn\" style=\"background: none; border: none; cursor: pointer;\" data-id=\"{{ offer.getIdOrganisateur() }}\">
                                    <i class=\"fas fa-comment-dots\"></i> See Answer
                                </button>

                                                            
                               <!-- <a href=\"#\" class=\"answer-btn action-btn details-btn\" data-id=\"{{ offer.getIdOrganisateur() }}\"><i class=\"fas fa-comment-dots\"></i> See Answer</a>-->

                                <a href=\"#\" class=\"delete-btn\" data-offer-id=\"{{ offer.id }}\"><i class=\"fas fa-trash-alt\"></i> Delete</a>                               
                            </div>
                        </div>
                        
                        <div class=\"card-back\">
                            <div class=\"card-header\">
                                <h3>{{ offer.objet }}</h3>
                            </div>
                            <div class=\"card-body full-details\">
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Description :</span>
                                    <span class=\"detail-value\">{{ offer.description }}</span>
                                </div>
                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-calendar-day\"></i> Date demande :</span>
                                    <span class=\"detail-value\">{{ offer.dateDemande|date('d/m/Y H:i') }}</span>
                                </div>
                                
                                {% if offer.dateDebutEvenement %}
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-calendar-alt\"></i> Période :</span>
                                    <span class=\"detail-value\">{{ offer.dateDebutEvenement }} au {{ offer.dateFinEvenement }}</span>
                                </div>
                                {% endif %}
                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt\"></i> Lieu :</span>
                                    <span class=\"detail-value\">{{ offer.lieuEvenement|default('Non spécifié') }}</span>
                                </div>
                                
                                {% if offer.typeEvenement %}
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-tag\"></i> Type :</span>
                                    <span class=\"detail-value\">{{ offer.typeEvenement }}</span>
                                </div>
                                {% endif %}
                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-users\"></i> Invités :</span>
                                    <span class=\"detail-value\">{{ offer.nombreInvite|default(0) }}</span>
                                </div>
                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-euro-sign\"></i> Budget :</span>
                                    <span class=\"detail-value\">{{ offer.budget|default(0) }} €</span>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <button class=\"flip-btn\"><i class=\"fas fa-undo\"></i>Back</button>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}


    <!---------------------------------------- pending------------------------------------------------------->
        {% for offer in pending_offers %}
            <div class=\"offer-card pending\" data-status=\"pending\">
                <div class=\"card-inner\">
                    <div class=\"card-front\">
                        <div class=\"card-header\">
                            <h3>{{ offer.objet|length > 20 ? offer.objet|slice(0, 20) ~ '...' : offer.objet }}</h3>
                            <span class=\"status-badge pending\">Pending</span>
                        </div>
                        <div class=\"card-body\">
                            <p><i class=\"fas fa-calendar-alt\"></i> {{ offer.dateDemande|date('d/m/Y') }}</p>
                            <p><i class=\"fas fa-map-marker-alt\"></i> {{ offer.lieuEvenement|default('Non spécifié') }}</p>
                            <p><i class=\"fas fa-users\"></i> {{ offer.nombreInvite|default(0) }} invités</p>
                            <p><i class=\"fas fa-euro-sign\"></i> {{ offer.budget|default(0) }} budget</p>
                        </div>
                        <div class=\"card-footer\">
                            <button class=\"flip-btn\"><i class=\"fas fa-sync-alt\"></i> Details</button>
<!--<a href=\"{{ path('app_ModifyYourRequest') }}\"  class=\"modify-btn\"><i class=\"fas fa-edit\"></i> Modify</a>-->

<form action=\"{{ path('app_ModifyYourRequest') }}\" method=\"POST\" style=\"display: inline;\">
    <input type=\"hidden\" name=\"id\" value=\"{{ offer.id }}\">
    <button type=\"submit\"  style=\"background: none; border: none; cursor: pointer;\">
        <i class=\"fas fa-edit\"></i> Modify
    </button>
</form>

<a href=\"#\" class=\"delete-btn\" data-offer-id=\"{{ offer.id }}\"><i class=\"fas fa-trash-alt\"></i> Delete</a>                      
                         </div>
                    </div>
                    
                    <div class=\"card-back\">
                        <div class=\"card-header\">
                            <h3>{{ offer.objet }}</h3>
                        </div>
                        <div class=\"card-body full-details\">
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Description :</span>
                                <span class=\"detail-value\">{{ offer.description }}</span>
                            </div>
                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-calendar-day\"></i> Date demande :</span>
                                <span class=\"detail-value\">{{ offer.dateDemande|date('d/m/Y H:i') }}</span>
                            </div>
                            
                            {% if offer.dateDebutEvenement %}
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-calendar-alt\"></i> Période :</span>
                                <span class=\"detail-value\">{{ offer.dateDebutEvenement }} au {{ offer.dateFinEvenement }}</span>
                            </div>
                            {% endif %}
                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt\"></i> Lieu :</span>
                                <span class=\"detail-value\">{{ offer.lieuEvenement|default('Non spécifié') }}</span>
                            </div>
                            
                            {% if offer.typeEvenement %}
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-tag\"></i> Type :</span>
                                <span class=\"detail-value\">{{ offer.typeEvenement }}</span>
                            </div>
                            {% endif %}
                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-users\"></i> Invités :</span>
                                <span class=\"detail-value\">{{ offer.nombreInvite|default(0) }}</span>
                            </div>
                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-euro-sign\"></i> Budget :</span>
                                <span class=\"detail-value\">{{ offer.budget|default(0) }} €</span>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <button class=\"flip-btn\"><i class=\"fas fa-undo\"></i>Back</button>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
   
<!------------------------------------------------------------------------------------------------------------------------------->

    </div>
</div>
<script src=\"filesOrganisateur/afficherOffre.js\"></script>


<div style=\"height: 100px;background-color:white;\">.</div> 
</body>
</html>


{%endblock %}", "offers/afficherOffreFront.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\offers\\afficherOffreFront.html.twig");
    }
}
