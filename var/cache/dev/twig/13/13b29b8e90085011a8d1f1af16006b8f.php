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

/* offers/offersBack.html.twig */
class __TwigTemplate_4b436239031c544c5bd942befd07d654 extends Template
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
        // line 3
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/offersBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/offersBack.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "offers/offersBack.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
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

        // line 8
        yield "   <head>
    
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/offre.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

    <style>
    

    
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">

       
       

        <!-- Layout container -->
        <div class=\"layout-page\">
          <!-- Navbar -->

          <nav
            class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\"
            id=\"layout-navbar\">
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none\">
              <a class=\"nav-item nav-link px-0 me-xl-6\" href=\"javascript:void(0)\">
                <i class=\"icon-base bx bx-menu icon-md\"></i>
              </a>
            </div>

            <div class=\"navbar-nav-right d-flex align-items-center justify-content-end\" id=\"navbar-collapse\">
<!------------------------- Search ----------------------------------->
              <div class=\"navbar-nav align-items-center me-auto search-and-sort\" >
                <div class=\"nav-item d-flex align-items-center search-container filter\">
                  <span class=\"w-px-22 h-px-22\"><i class=\"icon-base bx bx-search icon-md\"></i></span>
                  <input
                    type=\"text\"
                    class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none search-input\"
                    placeholder=\"Search offers...\"
                    aria-label=\"Search...\" 
                    id=\"offerSearch\"                   
                    />
                </div>
              </div>

    

<!-------------------------------- /Search --------------------------------->

            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->

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


<!-------------------------- Code affichage -------------------------------------------------------------------->


<div class=\"offers-container\">
    <div class=\"filter-buttons\">
        <button class=\"filter-btn active\" data-filter=\"all\">All Offers</button>
        <button class=\"filter-btn\" data-filter=\"pending\">Pending</button>
        <button class=\"filter-btn\" data-filter=\"treated\">Handled </button>
         <button class=\"filter-btn\" data-filter=\"canceled\">Declined</button>
    </div>

   <!-- <div class=\"search-and-sort\">
    <div class=\"search-container\">
        <input type=\"text\" id=\"offerSearch\" placeholder=\"Search offers...\" class=\"search-input\">
        <i class=\"fas fa-search search-icon\"></i>
    </div>
    </div>-->
    <div class=\"sort-container\">
        <select id=\"dateSort\" class=\"sort-select\">
            <option value=\"\">Sort by date</option>
            <option value=\"desc\">Newest first</option>
            <option value=\"asc\">Oldest first</option>
        </select>
    </div>
         <!--bouton pdf -->
        <button id=\"exportPdfButton\"
        style=\"
            position: absolute;
            top: 100px;
            left: 300px;
            background: none;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease;
            font-size: 35px;
            color: #696cff; /* Couleur rouge type PDF */
        \"
        onmouseover=\"this.style.transform='scale(1.1)';\"
        onmouseout=\"this.style.transform='scale(1)';\"
        >
        <i class=\"fas fa-file-pdf\"></i>
        </button>


             <button id=\"exportPdfButton\"
            style=\"
            position: absolute;
            top: 100px;
            left: 350px;
            background: none;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease;
            font-size: 35px;
            color: #696cff; /* Couleur rouge type PDF */ \"
            onmouseover=\"this.style.transform='scale(1.1)';\"
            onmouseout=\"this.style.transform='scale(1)';\"
            onclick=\"window.location.href='/statistique';\">
            <i class=\"fas fa-chart-line\"></i> Statistics
        </button>



</div>


    <div class=\"offers-grid\" id=\"offersGrid\" style=\"margin-left:100px;margin-right:100px;width:1100px;\">

<!---------------------------------------- treated------------------------------------------------------->
        
        ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["treated_offers"]) || array_key_exists("treated_offers", $context) ? $context["treated_offers"] : (function () { throw new RuntimeError('Variable "treated_offers" does not exist.', 211, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 212
            yield "                <div class=\"offer-card treated card\" data-status=\"treated\">
                    <div class=\"card-inner\">
                        <div class=\"card-front\">
                            <div class=\"card-header\">
                                <h3>";
            // line 216
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 216)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 216), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 216), "html", null, true)));
            yield "</h3>
                                <span class=\"status-badge treated\">Handled </span>
                            </div>
                            <div class=\"card-body\">
                                <p><i class=\"fas fa-calendar-alt\"></i> ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 220), "d/m/Y"), "html", null, true);
            yield "</p>
                                <p><i class=\"fas fa-map-marker-alt\"></i> ";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 221)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 221), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</p>
                                <p><i class=\"fas fa-users\"></i> ";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 222)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 222), 0)) : (0)), "html", null, true);
            yield " invités</p>
                                <p><i class=\"fas fa-euro-sign\"></i> ";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 223)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 223), 0)) : (0)), "html", null, true);
            yield " budget</p>
                            </div>
                            <div class=\"card-footer\">
                                <button class=\"flip-btn\" style=\"margin-top:10px;\"><i class=\"fas fa-sync-alt\"></i> Details</button>  


                                <button type=\"submit\" class=\"details-btn modify-btn\" style=\"background: none; border: none; cursor: pointer;\" data-id=\"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "getIdOrganisateur", [], "method", false, false, false, 229), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-comment-dots\"></i> See Answer
                                </button>

                                                            
                               <!-- <a href=\"#\" class=\"answer-btn action-btn details-btn\" data-id=\"";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "getIdOrganisateur", [], "method", false, false, false, 234), "html", null, true);
            yield "\"><i class=\"fas fa-comment-dots\"></i> See Answer</a>-->

                                <a href=\"#\" class=\"delete-btn\" data-offer-id=\"";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 236), "html", null, true);
            yield "\"><i class=\"fas fa-trash-alt\"></i> Delete</a>                               
                            </div>
                        </div>
                        
                        <div class=\"card-back\">
                            <div class=\"card-header\">
                                <h3>Client ";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "user", [], "any", false, false, false, 242), "email", [], "any", false, false, false, 242), "html", null, true);
            yield "  <br> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 242), "html", null, true);
            yield "</h3>
                            </div>
                            <div class=\"card-body full-details\">
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Description :</span>
                                    <span class=\"detail-value\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 247), "html", null, true);
            yield "</span>
                                </div>
                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-calendar-day\"></i> Date demande :</span>
                                    <span class=\"detail-value\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 252), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                                </div>
                                
                                ";
            // line 255
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 255)) {
                // line 256
                yield "                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-calendar-alt\"></i> Période :</span>
                                    <span class=\"detail-value\">";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 258), "html", null, true);
                yield " au ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateFinEvenement", [], "any", false, false, false, 258), "html", null, true);
                yield "</span>
                                </div>
                                ";
            }
            // line 261
            yield "                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt\"></i> Lieu :</span>
                                    <span class=\"detail-value\">";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 264), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</span>
                                </div>
                                
                                ";
            // line 267
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 267)) {
                // line 268
                yield "                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-tag\"></i> Type :</span>
                                    <span class=\"detail-value\">";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 270), "html", null, true);
                yield "</span>
                                </div>
                                ";
            }
            // line 273
            yield "                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-users\"></i> Invités :</span>
                                    <span class=\"detail-value\">";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 276)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 276), 0)) : (0)), "html", null, true);
            yield "</span>
                                </div>
                                
                                <div class=\"detail-item\">
                                    <span class=\"detail-label\"><i class=\"fas fa-euro-sign\"></i> Budget :</span>
                                    <span class=\"detail-value\">";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 281)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 281), 0)) : (0)), "html", null, true);
            yield " €</span>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <button class=\"flip-btn\"  style=\"margin-top:10px;\"><i class=\"fas fa-undo\"></i>Back</button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        yield "

    <!---------------------------------------- pending------------------------------------------------------->
        ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pending_offers"]) || array_key_exists("pending_offers", $context) ? $context["pending_offers"] : (function () { throw new RuntimeError('Variable "pending_offers" does not exist.', 294, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 295
            yield "            <div class=\"offer-card pending\" data-status=\"pending\">
                <div class=\"card-inner\">
                    <div class=\"card-front\">
                        <div class=\"card-header\">
                            <h3>";
            // line 299
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 299)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 299), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 299), "html", null, true)));
            yield "</h3>
                            <span class=\"status-badge pending\">Pending</span>
                        </div>
                        <div class=\"card-body\">
                            <p><i class=\"fas fa-calendar-alt\"></i> ";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 303), "d/m/Y"), "html", null, true);
            yield "</p>
                            <p><i class=\"fas fa-map-marker-alt\"></i> ";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 304)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 304), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</p>
                            <p><i class=\"fas fa-users\"></i> ";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 305)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 305), 0)) : (0)), "html", null, true);
            yield " invités</p>
                            <p><i class=\"fas fa-euro-sign\"></i> ";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 306), 0)) : (0)), "html", null, true);
            yield " budget</p>
                        </div>
                        <div class=\"card-footer\">
                            <button class=\"flip-btn\"><i class=\"fas fa-sync-alt\"></i> Details</button>
                            <!--<a href=\"";
            // line 310
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ModifyYourRequest");
            yield "\"  class=\"modify-btn\"><i class=\"fas fa-edit\"></i> Modify</a>-->

<div class=\"offer-actions\">
  <!-- Toggle Button -->
  <button class=\"action-toggle-btn\" onclick=\"toggleActions(this)\" >
    <i class=\"fas fa-cog\"></i> <!-- Icône d'engrenage -->
    <span class=\"toggle-arrow\">▼</span>
  </button>
  
  <!-- Dropdown Menu -->
  <div class=\"action-dropdown\" >
    <form action=\"";
            // line 321
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AfecterOffre");
            yield "\" method=\"POST\" class=\"action-form\">
      <input type=\"hidden\" name=\"id\" value=\"";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 322), "html", null, true);
            yield "\">
      <button type=\"submit\" class=\"action-btn primary\">
        <i class=\"fas fa-user-check\"></i> Choose Organizer
      </button>
    </form>
    
    <form action=\"";
            // line 328
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AfecterAIOffre");
            yield "\" method=\"POST\" class=\"action-form\">
      <input type=\"hidden\" name=\"id\" value=\"";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 329), "html", null, true);
            yield "\">
      <button type=\"submit\" class=\"action-btn secondary\">
        <i class=\"fas fa-robot\"></i> AI Select Organizer
      </button>
    </form>
  </div>
</div>

<a href=\"#\" class=\"delete-btn\" data-offer-id=\"";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 337), "html", null, true);
            yield "\"><i class=\"fas fa-trash-alt\"></i> Delete</a>                      
                         </div>
                    </div>
                    
                    <div class=\"card-back\">
                        <div class=\"card-header\">
                            <h3>Client ";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "user", [], "any", false, false, false, 343), "email", [], "any", false, false, false, 343), "html", null, true);
            yield "  <br> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 343), "html", null, true);
            yield "</h3>
                        </div>
                        <div class=\"card-body full-details\">
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Description :</span>
                                <span class=\"detail-value\">";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 348), "html", null, true);
            yield "</span>
                            </div>
                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-calendar-day\"></i> Date demande :</span>
                                <span class=\"detail-value\">";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 353), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                            </div>
                            
                            ";
            // line 356
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 356)) {
                // line 357
                yield "                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-calendar-alt\"></i> Période :</span>
                                <span class=\"detail-value\">";
                // line 359
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 359), "html", null, true);
                yield " au ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateFinEvenement", [], "any", false, false, false, 359), "html", null, true);
                yield "</span>
                            </div>
                            ";
            }
            // line 362
            yield "                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt\"></i> Lieu :</span>
                                <span class=\"detail-value\">";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 365)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 365), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</span>
                            </div>
                            
                            ";
            // line 368
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 368)) {
                // line 369
                yield "                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-tag\"></i> Type :</span>
                                <span class=\"detail-value\">";
                // line 371
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 371), "html", null, true);
                yield "</span>
                            </div>
                            ";
            }
            // line 374
            yield "                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-users\"></i> Invités :</span>
                                <span class=\"detail-value\">";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 377)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 377), 0)) : (0)), "html", null, true);
            yield "</span>
                            </div>
                            
                            <div class=\"detail-item\">
                                <span class=\"detail-label\"><i class=\"fas fa-euro-sign\"></i> Budget :</span>
                                <span class=\"detail-value\">";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 382)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 382), 0)) : (0)), "html", null, true);
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
        // line 392
        yield "




  <!---------------------------------------- canceled------------------------------------------------------->
    ";
        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["canceled_offers"]) || array_key_exists("canceled_offers", $context) ? $context["canceled_offers"] : (function () { throw new RuntimeError('Variable "canceled_offers" does not exist.', 398, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 399
            yield "        <div class=\"offer-card canceled\" data-status=\"canceled\">
            <div class=\"card-inner\">
                <div class=\"card-front\">
                    <div class=\"card-header\">
                        <h3>";
            // line 403
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 403)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 403), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 403), "html", null, true)));
            yield "</h3>
                        <span class=\"status-badge canceled\">Declined</span>
                    </div>
                    <div class=\"card-body\">
                        <p><i class=\"fas fa-calendar-alt\"></i> ";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 407), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p><i class=\"fas fa-map-marker-alt\"></i> ";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 408)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 408), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</p>
                        <p><i class=\"fas fa-users\"></i> ";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 409)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 409), 0)) : (0)), "html", null, true);
            yield " invités</p>
                        <p><i class=\"fas fa-euro-sign\"></i> ";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 410)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 410), 0)) : (0)), "html", null, true);
            yield " budget</p>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"flip-btn\"><i class=\"fas fa-sync-alt\"></i> Details</button>
                        <a href=\"#\" class=\"delete-btn\" data-offer-id=\"";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 414), "html", null, true);
            yield "\"><i class=\"fas fa-trash-alt\"></i> Delete</a>
                    </div>
                </div>
                
                <div class=\"card-back\">
                    <div class=\"card-header\">
                        <h3>Client ";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "user", [], "any", false, false, false, 420), "email", [], "any", false, false, false, 420), "html", null, true);
            yield "  <br> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "objet", [], "any", false, false, false, 420), "html", null, true);
            yield "</h3>
                    </div>
                    <div class=\"card-body full-details\">
                        <div class=\"detail-item\">
                            <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Description :</span>
                            <span class=\"detail-value\">";
            // line 425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 425), "html", null, true);
            yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <span class=\"detail-label\"><i class=\"fas fa-calendar-day\"></i> Date demande :</span>
                            <span class=\"detail-value\">";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDemande", [], "any", false, false, false, 430), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        
                        ";
            // line 433
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 433)) {
                // line 434
                yield "                        <div class=\"detail-item\">
                            <span class=\"detail-label\"><i class=\"fas fa-calendar-alt\"></i> Période :</span>
                            <span class=\"detail-value\">";
                // line 436
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateDebutEvenement", [], "any", false, false, false, 436), "html", null, true);
                yield " au ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "dateFinEvenement", [], "any", false, false, false, 436), "html", null, true);
                yield "</span>
                        </div>
                        ";
            }
            // line 439
            yield "                        
                        <div class=\"detail-item\">
                            <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt\"></i> Lieu :</span>
                            <span class=\"detail-value\">";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", true, true, false, 442)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "lieuEvenement", [], "any", false, false, false, 442), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "</span>
                        </div>
                        
                        ";
            // line 445
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 445)) {
                // line 446
                yield "                        <div class=\"detail-item\">
                            <span class=\"detail-label\"><i class=\"fas fa-tag\"></i> Type :</span>
                            <span class=\"detail-value\">";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "typeEvenement", [], "any", false, false, false, 448), "html", null, true);
                yield "</span>
                        </div>
                        ";
            }
            // line 451
            yield "                        
                        <div class=\"detail-item\">
                            <span class=\"detail-label\"><i class=\"fas fa-users\"></i> Invités :</span>
                            <span class=\"detail-value\">";
            // line 454
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", true, true, false, 454)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "nombreInvite", [], "any", false, false, false, 454), 0)) : (0)), "html", null, true);
            yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <span class=\"detail-label\"><i class=\"fas fa-euro-sign\"></i> Budget :</span>
                            <span class=\"detail-value\">";
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", true, true, false, 459)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "budget", [], "any", false, false, false, 459), 0)) : (0)), "html", null, true);
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
        // line 469
        yield "   
<!------------------------------------------------------------------------------------------------------------------------------->

    </div>
</div>

       
           


-<!----------------------------------------------------------------------------------------------------------->


            <!-- Footer -->
            <footer class=\"content-footer footer bg-footer-theme\">
              <div class=\"container-xxl\">
                <div
                  class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                  <div class=\"mb-2 mb-md-0\">
                    &#169;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style =\"color : #844062\">Eventify</a>
                  </div>

                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class=\"content-backdrop fade\"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->

    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>

    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>

   <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>

    <script src=\"admin/assets/vendor/js/menu.js\"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>

    <!-- Main JS -->

    <script src=\"admin/assets/js/main.js\"></script>

    <!-- Page JS -->
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>


<script src=\"filesOrganisateur/afficherOffreAdmin.js\"></script>

<!-- Inclure jsPDF -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>

<!-- Inclure le plugin autoTable pour jsPDF -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js\"></script>
     
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
        return "offers/offersBack.html.twig";
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
        return array (  759 => 469,  743 => 459,  735 => 454,  730 => 451,  724 => 448,  720 => 446,  718 => 445,  712 => 442,  707 => 439,  699 => 436,  695 => 434,  693 => 433,  687 => 430,  679 => 425,  669 => 420,  660 => 414,  653 => 410,  649 => 409,  645 => 408,  641 => 407,  634 => 403,  628 => 399,  624 => 398,  616 => 392,  600 => 382,  592 => 377,  587 => 374,  581 => 371,  577 => 369,  575 => 368,  569 => 365,  564 => 362,  556 => 359,  552 => 357,  550 => 356,  544 => 353,  536 => 348,  526 => 343,  517 => 337,  506 => 329,  502 => 328,  493 => 322,  489 => 321,  475 => 310,  468 => 306,  464 => 305,  460 => 304,  456 => 303,  449 => 299,  443 => 295,  439 => 294,  434 => 291,  418 => 281,  410 => 276,  405 => 273,  399 => 270,  395 => 268,  393 => 267,  387 => 264,  382 => 261,  374 => 258,  370 => 256,  368 => 255,  362 => 252,  354 => 247,  344 => 242,  335 => 236,  330 => 234,  322 => 229,  313 => 223,  309 => 222,  305 => 221,  301 => 220,  294 => 216,  288 => 212,  284 => 211,  80 => 10,  76 => 8,  63 => 7,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{%extends \"baseAdmin.html.twig\" %}



{%block content %}
   <head>
    
    <link rel=\"stylesheet\" href=\"{{ asset('filesOrganisateur/offre.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

    <style>
    

    
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">

       
       

        <!-- Layout container -->
        <div class=\"layout-page\">
          <!-- Navbar -->

          <nav
            class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\"
            id=\"layout-navbar\">
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none\">
              <a class=\"nav-item nav-link px-0 me-xl-6\" href=\"javascript:void(0)\">
                <i class=\"icon-base bx bx-menu icon-md\"></i>
              </a>
            </div>

            <div class=\"navbar-nav-right d-flex align-items-center justify-content-end\" id=\"navbar-collapse\">
<!------------------------- Search ----------------------------------->
              <div class=\"navbar-nav align-items-center me-auto search-and-sort\" >
                <div class=\"nav-item d-flex align-items-center search-container filter\">
                  <span class=\"w-px-22 h-px-22\"><i class=\"icon-base bx bx-search icon-md\"></i></span>
                  <input
                    type=\"text\"
                    class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none search-input\"
                    placeholder=\"Search offers...\"
                    aria-label=\"Search...\" 
                    id=\"offerSearch\"                   
                    />
                </div>
              </div>

    

<!-------------------------------- /Search --------------------------------->

            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->

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


<!-------------------------- Code affichage -------------------------------------------------------------------->


<div class=\"offers-container\">
    <div class=\"filter-buttons\">
        <button class=\"filter-btn active\" data-filter=\"all\">All Offers</button>
        <button class=\"filter-btn\" data-filter=\"pending\">Pending</button>
        <button class=\"filter-btn\" data-filter=\"treated\">Handled </button>
         <button class=\"filter-btn\" data-filter=\"canceled\">Declined</button>
    </div>

   <!-- <div class=\"search-and-sort\">
    <div class=\"search-container\">
        <input type=\"text\" id=\"offerSearch\" placeholder=\"Search offers...\" class=\"search-input\">
        <i class=\"fas fa-search search-icon\"></i>
    </div>
    </div>-->
    <div class=\"sort-container\">
        <select id=\"dateSort\" class=\"sort-select\">
            <option value=\"\">Sort by date</option>
            <option value=\"desc\">Newest first</option>
            <option value=\"asc\">Oldest first</option>
        </select>
    </div>
         <!--bouton pdf -->
        <button id=\"exportPdfButton\"
        style=\"
            position: absolute;
            top: 100px;
            left: 300px;
            background: none;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease;
            font-size: 35px;
            color: #696cff; /* Couleur rouge type PDF */
        \"
        onmouseover=\"this.style.transform='scale(1.1)';\"
        onmouseout=\"this.style.transform='scale(1)';\"
        >
        <i class=\"fas fa-file-pdf\"></i>
        </button>


             <button id=\"exportPdfButton\"
            style=\"
            position: absolute;
            top: 100px;
            left: 350px;
            background: none;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease;
            font-size: 35px;
            color: #696cff; /* Couleur rouge type PDF */ \"
            onmouseover=\"this.style.transform='scale(1.1)';\"
            onmouseout=\"this.style.transform='scale(1)';\"
            onclick=\"window.location.href='/statistique';\">
            <i class=\"fas fa-chart-line\"></i> Statistics
        </button>



</div>


    <div class=\"offers-grid\" id=\"offersGrid\" style=\"margin-left:100px;margin-right:100px;width:1100px;\">

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
                                <button class=\"flip-btn\" style=\"margin-top:10px;\"><i class=\"fas fa-sync-alt\"></i> Details</button>  


                                <button type=\"submit\" class=\"details-btn modify-btn\" style=\"background: none; border: none; cursor: pointer;\" data-id=\"{{ offer.getIdOrganisateur() }}\">
                                    <i class=\"fas fa-comment-dots\"></i> See Answer
                                </button>

                                                            
                               <!-- <a href=\"#\" class=\"answer-btn action-btn details-btn\" data-id=\"{{ offer.getIdOrganisateur() }}\"><i class=\"fas fa-comment-dots\"></i> See Answer</a>-->

                                <a href=\"#\" class=\"delete-btn\" data-offer-id=\"{{ offer.id }}\"><i class=\"fas fa-trash-alt\"></i> Delete</a>                               
                            </div>
                        </div>
                        
                        <div class=\"card-back\">
                            <div class=\"card-header\">
                                <h3>Client {{ offer.user.email }}  <br> {{ offer.objet }}</h3>
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
                                <button class=\"flip-btn\"  style=\"margin-top:10px;\"><i class=\"fas fa-undo\"></i>Back</button>
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

<div class=\"offer-actions\">
  <!-- Toggle Button -->
  <button class=\"action-toggle-btn\" onclick=\"toggleActions(this)\" >
    <i class=\"fas fa-cog\"></i> <!-- Icône d'engrenage -->
    <span class=\"toggle-arrow\">▼</span>
  </button>
  
  <!-- Dropdown Menu -->
  <div class=\"action-dropdown\" >
    <form action=\"{{ path('app_AfecterOffre') }}\" method=\"POST\" class=\"action-form\">
      <input type=\"hidden\" name=\"id\" value=\"{{ offer.id }}\">
      <button type=\"submit\" class=\"action-btn primary\">
        <i class=\"fas fa-user-check\"></i> Choose Organizer
      </button>
    </form>
    
    <form action=\"{{ path('app_AfecterAIOffre') }}\" method=\"POST\" class=\"action-form\">
      <input type=\"hidden\" name=\"id\" value=\"{{ offer.id }}\">
      <button type=\"submit\" class=\"action-btn secondary\">
        <i class=\"fas fa-robot\"></i> AI Select Organizer
      </button>
    </form>
  </div>
</div>

<a href=\"#\" class=\"delete-btn\" data-offer-id=\"{{ offer.id }}\"><i class=\"fas fa-trash-alt\"></i> Delete</a>                      
                         </div>
                    </div>
                    
                    <div class=\"card-back\">
                        <div class=\"card-header\">
                            <h3>Client {{ offer.user.email }}  <br> {{ offer.objet }}</h3>
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





  <!---------------------------------------- canceled------------------------------------------------------->
    {% for offer in canceled_offers %}
        <div class=\"offer-card canceled\" data-status=\"canceled\">
            <div class=\"card-inner\">
                <div class=\"card-front\">
                    <div class=\"card-header\">
                        <h3>{{ offer.objet|length > 20 ? offer.objet|slice(0, 20) ~ '...' : offer.objet }}</h3>
                        <span class=\"status-badge canceled\">Declined</span>
                    </div>
                    <div class=\"card-body\">
                        <p><i class=\"fas fa-calendar-alt\"></i> {{ offer.dateDemande|date('d/m/Y') }}</p>
                        <p><i class=\"fas fa-map-marker-alt\"></i> {{ offer.lieuEvenement|default('Non spécifié') }}</p>
                        <p><i class=\"fas fa-users\"></i> {{ offer.nombreInvite|default(0) }} invités</p>
                        <p><i class=\"fas fa-euro-sign\"></i> {{ offer.budget|default(0) }} budget</p>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"flip-btn\"><i class=\"fas fa-sync-alt\"></i> Details</button>
                        <a href=\"#\" class=\"delete-btn\" data-offer-id=\"{{ offer.id }}\"><i class=\"fas fa-trash-alt\"></i> Delete</a>
                    </div>
                </div>
                
                <div class=\"card-back\">
                    <div class=\"card-header\">
                        <h3>Client {{ offer.user.email }}  <br> {{ offer.objet }}</h3>
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

       
           


-<!----------------------------------------------------------------------------------------------------------->


            <!-- Footer -->
            <footer class=\"content-footer footer bg-footer-theme\">
              <div class=\"container-xxl\">
                <div
                  class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                  <div class=\"mb-2 mb-md-0\">
                    &#169;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style =\"color : #844062\">Eventify</a>
                  </div>

                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class=\"content-backdrop fade\"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->

    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>

    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>

   <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>

    <script src=\"admin/assets/vendor/js/menu.js\"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>

    <!-- Main JS -->

    <script src=\"admin/assets/js/main.js\"></script>

    <!-- Page JS -->
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>


<script src=\"filesOrganisateur/afficherOffreAdmin.js\"></script>

<!-- Inclure jsPDF -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>

<!-- Inclure le plugin autoTable pour jsPDF -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js\"></script>
     
  </body>
</html>
{% endblock %}", "offers/offersBack.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\offers\\offersBack.html.twig");
    }
}
