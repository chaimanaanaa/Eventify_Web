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

/* organizers/organizersBack.html.twig */
class __TwigTemplate_1048af7d2bd1005f350965f4978428d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organizers/organizersBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organizers/organizersBack.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "organizers/organizersBack.html.twig", 3);
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
    
        <!-- Lien vers le fichier CSS externe -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/organisateur.css"), "html", null, true);
        yield "\">

        <style>

          .state {
               width: 190px;
            }
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
              <div class=\"navbar-nav align-items-center me-auto organizers-container\" >
                <div class=\"nav-item d-flex align-items-center  class=\"filters\">
                  <span class=\"w-px-22 h-px-22\"><i class=\"icon-base bx bx-search icon-md\"></i></span>
                  <input
                    type=\"text\"
                    class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                    placeholder=\"Search...\"
                    aria-label=\"Search...\" 
                    id=\"searchInput\"
                    
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
<!-------------------------------------------------les alertes ------------------------------------------------------------------------------>
<!------------------------- Alerte --------------------------->

<!------------ Alerte 1 : add yes or no --------->

    <!-- Modale personnalisée -->
    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to delete this organizer?</p>
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
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Organizer deleted successfully!</p>
            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>

    <!-- Fond obscurci pour la modale de succès -->
    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>



<!------------ Alerte 3  erreur  dajout--------->
<!-- Modale d'erreur -->
<div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while deleting the organizer.</p>
        <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>

<!-- Fond obscurci pour la modale d'erreur -->
<div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!------------------------- ------------------------------------------- --------------------------->
<!------------------------- 5idmti tibda min hne  Content  A ffichage du o rganisateur comment par ici--------------------------->

     <div class=\"organizers-container\">
        <!-- Barre de recherche et filtre -->
        <div class=\"filters\" style=\"  position: absolute;  top: 100px; left: 800px; \">

   <!-- Nouveau combo box pour le tri par salaire -->
    <select id=\"salarySort\">
        <option value=\"none\">Sort by salary</option>
        <option value=\"asc\">Increasing salary</option>
        <option value=\"desc\">Decreasing salary</option>
    </select>

                <select id=\"stateFilter\">
                    <option value=\"all\">All</option>
                    <option value=\"Available\">Available</option>
                    <option value=\"Not available\">Not available</option>
                </select>
                <button id=\"exportPdfButton\"  style=\" transition: transform 0.3s ease; /* Transition fluide */ \" onmouseover=\"this.style.transform='scale(1.1)';\" onmouseout=\"this.style.transform='scale(1)';\">Export to PDF</button>
                <!-----------------yimchi il page ajout----------------------------->
                <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AjouterOrganisateurBack");
        yield "\" >
                    <img 
                        src=\"filesOrganisateur/imageOrganisateur/plusOrg.png\" 
                        alt=\"Retour\" 
                        style=\"
                        width: 40px; 
                        height: 40px;
                        transition: transform 0.3s ease; /* Transition fluide */
                        \" 
                        onmouseover=\"this.style.transform='scale(1.2)';\" 
                        onmouseout=\"this.style.transform='scale(1)';\"
                    >
               </a>
        </div>


        <!-- Conteneur pour afficher les détails -->
<!--------------------------- Conteneur flottant pour afficher les détails ------------------>
<div id=\"floatingDetails\" style=\"margin-left:350px;margin-top:70px; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); background-color: white; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: none; z-index: 9999; width: 700px; max-width: 90%;\">
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



        <!-- Conteneur principal pour les cartes -->
        <div class=\"cards-grid\" id=\"organizersGrid\" style=\"margin-top:64px;\">
              ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["organizers"]) || array_key_exists("organizers", $context) ? $context["organizers"] : (function () { throw new RuntimeError('Variable "organizers" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["organizer"]) {
            // line 177
            yield "                  <div class=\"card\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getId", [], "method", false, false, false, 177), "html", null, true);
            yield "\"  data-state=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getStatut", [], "method", false, false, false, 177), "html", null, true);
            yield "\" data-search=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getNomOrg", [], "method", false, false, false, 177), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getPrenomOrg", [], "method", false, false, false, 177), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getEmailOrg", [], "method", false, false, false, 177), "html", null, true);
            yield "   ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getSpecialite", [], "method", false, false, false, 177), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getNbexp", [], "method", false, false, false, 177), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getSalaire", [], "method", false, false, false, 177), "html", null, true);
            yield "\">
                      <img src=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getImageOrg", [], "method", false, false, false, 178)), "html", null, true);
            yield "\" alt=\"Profile\" class=\"imageOrg RotationChargementPageImoRG\" />
                      <div class=\"card-info\">
                          <p><strong>";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getNomOrg", [], "method", false, false, false, 180), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getPrenomOrg", [], "method", false, false, false, 180), "html", null, true);
            yield "</strong></p>
                          <p>";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getEmailOrg", [], "method", false, false, false, 181), "html", null, true);
            yield "</p>
                          <p>Speciality : ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getSpecialite", [], "method", false, false, false, 182), "html", null, true);
            yield "</p>
                          <p>years of experience : ";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getNbexp", [], "method", false, false, false, 183), "html", null, true);
            yield " ans</p>
                          <p>Salary : ";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getSalaire", [], "method", false, false, false, 184), "html", null, true);
            yield " DT</p>
                          <p class=\"state\" >State : <span class=\"status-value\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getStatut", [], "method", false, false, false, 185), "html", null, true);
            yield "</span></p>
                      </div>
                      <div class=\"card-actions\">

<form action=\"";
            // line 189
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifierOrganisateur");
            yield "\" method=\"POST\" style=\"display: inline;\">
  <input type=\"hidden\" name=\"id\" value=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getId", [], "method", false, false, false, 190), "html", null, true);
            yield "\">
    <button type=\"submit\" class=\"action-btn edit-btn\">
    <i class=\"fa-solid fa-pen-to-square\"></i> Modify
  </button>
</form>

                      
                          <!--<button class=\"action-btn edit-btn\"><i class=\"fa-solid fa-pen-to-square\"></i> Modify</button>-->
                          <button class=\"action-btn delete-btn\"><i class=\"fa-solid fa-trash\"></i> Delete</button>
                          <button class=\"action-btn details-btn\" data-id=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getId", [], "method", false, false, false, 199), "html", null, true);
            yield "\"><i class=\"fa-solid fa-eye\"></i> Details</button>
                      </div>
                  </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['organizer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "        </div>
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


    <script src=\"filesOrganisateur/afficherOrganisateur.js\"></script>


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
        return "organizers/organizersBack.html.twig";
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
        return array (  335 => 203,  325 => 199,  313 => 190,  309 => 189,  302 => 185,  298 => 184,  294 => 183,  290 => 182,  286 => 181,  280 => 180,  275 => 178,  256 => 177,  252 => 176,  205 => 132,  81 => 11,  76 => 8,  63 => 7,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{%extends \"baseAdmin.html.twig\" %}



{%block content %}
   <head>
    
        <!-- Lien vers le fichier CSS externe -->
        <link rel=\"stylesheet\" href=\"{{ asset('filesOrganisateur/organisateur.css') }}\">

        <style>

          .state {
               width: 190px;
            }
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
              <div class=\"navbar-nav align-items-center me-auto organizers-container\" >
                <div class=\"nav-item d-flex align-items-center  class=\"filters\">
                  <span class=\"w-px-22 h-px-22\"><i class=\"icon-base bx bx-search icon-md\"></i></span>
                  <input
                    type=\"text\"
                    class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                    placeholder=\"Search...\"
                    aria-label=\"Search...\" 
                    id=\"searchInput\"
                    
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
<!-------------------------------------------------les alertes ------------------------------------------------------------------------------>
<!------------------------- Alerte --------------------------->

<!------------ Alerte 1 : add yes or no --------->

    <!-- Modale personnalisée -->
    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to delete this organizer?</p>
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
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Organizer deleted successfully!</p>
            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>

    <!-- Fond obscurci pour la modale de succès -->
    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>



<!------------ Alerte 3  erreur  dajout--------->
<!-- Modale d'erreur -->
<div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while deleting the organizer.</p>
        <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>

<!-- Fond obscurci pour la modale d'erreur -->
<div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!------------------------- ------------------------------------------- --------------------------->
<!------------------------- 5idmti tibda min hne  Content  A ffichage du o rganisateur comment par ici--------------------------->

     <div class=\"organizers-container\">
        <!-- Barre de recherche et filtre -->
        <div class=\"filters\" style=\"  position: absolute;  top: 100px; left: 800px; \">

   <!-- Nouveau combo box pour le tri par salaire -->
    <select id=\"salarySort\">
        <option value=\"none\">Sort by salary</option>
        <option value=\"asc\">Increasing salary</option>
        <option value=\"desc\">Decreasing salary</option>
    </select>

                <select id=\"stateFilter\">
                    <option value=\"all\">All</option>
                    <option value=\"Available\">Available</option>
                    <option value=\"Not available\">Not available</option>
                </select>
                <button id=\"exportPdfButton\"  style=\" transition: transform 0.3s ease; /* Transition fluide */ \" onmouseover=\"this.style.transform='scale(1.1)';\" onmouseout=\"this.style.transform='scale(1)';\">Export to PDF</button>
                <!-----------------yimchi il page ajout----------------------------->
                <a href=\"{{ path('app_AjouterOrganisateurBack') }}\" >
                    <img 
                        src=\"filesOrganisateur/imageOrganisateur/plusOrg.png\" 
                        alt=\"Retour\" 
                        style=\"
                        width: 40px; 
                        height: 40px;
                        transition: transform 0.3s ease; /* Transition fluide */
                        \" 
                        onmouseover=\"this.style.transform='scale(1.2)';\" 
                        onmouseout=\"this.style.transform='scale(1)';\"
                    >
               </a>
        </div>


        <!-- Conteneur pour afficher les détails -->
<!--------------------------- Conteneur flottant pour afficher les détails ------------------>
<div id=\"floatingDetails\" style=\"margin-left:350px;margin-top:70px; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); background-color: white; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: none; z-index: 9999; width: 700px; max-width: 90%;\">
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



        <!-- Conteneur principal pour les cartes -->
        <div class=\"cards-grid\" id=\"organizersGrid\" style=\"margin-top:64px;\">
              {% for organizer in organizers %}
                  <div class=\"card\" data-id=\"{{ organizer.getId() }}\"  data-state=\"{{ organizer.getStatut() }}\" data-search=\"{{ organizer.getNomOrg() }} {{ organizer.getPrenomOrg() }} {{ organizer.getEmailOrg() }}   {{ organizer.getSpecialite() }}  {{ organizer.getNbexp() }}  {{ organizer.getSalaire() }}\">
                      <img src=\"{{ asset(organizer.getImageOrg()) }}\" alt=\"Profile\" class=\"imageOrg RotationChargementPageImoRG\" />
                      <div class=\"card-info\">
                          <p><strong>{{ organizer.getNomOrg() }} {{ organizer.getPrenomOrg() }}</strong></p>
                          <p>{{ organizer.getEmailOrg() }}</p>
                          <p>Speciality : {{ organizer.getSpecialite() }}</p>
                          <p>years of experience : {{ organizer.getNbexp() }} ans</p>
                          <p>Salary : {{ organizer.getSalaire() }} DT</p>
                          <p class=\"state\" >State : <span class=\"status-value\">{{ organizer.getStatut() }}</span></p>
                      </div>
                      <div class=\"card-actions\">

<form action=\"{{ path('app_modifierOrganisateur') }}\" method=\"POST\" style=\"display: inline;\">
  <input type=\"hidden\" name=\"id\" value=\"{{ organizer.getId() }}\">
    <button type=\"submit\" class=\"action-btn edit-btn\">
    <i class=\"fa-solid fa-pen-to-square\"></i> Modify
  </button>
</form>

                      
                          <!--<button class=\"action-btn edit-btn\"><i class=\"fa-solid fa-pen-to-square\"></i> Modify</button>-->
                          <button class=\"action-btn delete-btn\"><i class=\"fa-solid fa-trash\"></i> Delete</button>
                          <button class=\"action-btn details-btn\" data-id=\"{{ organizer.getId() }}\"><i class=\"fa-solid fa-eye\"></i> Details</button>
                      </div>
                  </div>
              {% endfor %}
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


    <script src=\"filesOrganisateur/afficherOrganisateur.js\"></script>


    <!-- Inclure jsPDF -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>

<!-- Inclure le plugin autoTable pour jsPDF -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js\"></script>
     
  </body>
</html>
{% endblock %}", "organizers/organizersBack.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\organizers\\organizersBack.html.twig");
    }
}
