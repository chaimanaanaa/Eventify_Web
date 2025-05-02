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

/* offers/afecterOffre.html.twig */
class __TwigTemplate_9d77e7ad85ff51c219b45829fb2fa559 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/afecterOffre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/afecterOffre.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "offers/afecterOffre.html.twig", 3);
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

<!-------------------------------------------------------------------------------------------------------------------->
<!------------ Alerte 1 : add yes or no --------->

    <!-- Modale personnalisée -->
    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\"> Are you sure you want to assign this organizer to this offer ?</p>
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
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Offer Assignment successfully!</p>
            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>

    <!-- Fond obscurci pour la modale de succès -->
    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>



<!------------ Alerte 3  erreur  dajout--------->
<!-- Modale d'erreur -->
<div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while assigning this offer.</p>
        <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>

<!-- Fond obscurci pour la modale d'erreur -->
<div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>


<!--------------------------------------------------------------------------------------------------------------------------------->
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


            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
      
<!------------------------------------------------------------------------------------------------------------------------------->

<div class=\"assignment-container\">
  <!-- Section Offre -->
  <div class=\"offer-section animate__animated animate__fadeInLeft\">
    <div class=\"offer-header\">
      <h2><i class=\"fas fa-file-contract\"></i> Offer Details</h2>
      <span class=\"status\"> ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 104, $this->source); })()), "statu", [], "any", false, false, false, 104), "html", null, true);
        yield "</span>
    </div>
    
    <div class=\"offer-body\">
      <div class=\"detail-row\">
        <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Object :</span>
        <span class=\"detail-value\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 110, $this->source); })()), "objet", [], "any", false, false, false, 110), "html", null, true);
        yield "</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\"><i class=\"fas fa-list-alt\"></i> Type Event :</span>
        <span class=\"detail-value\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 115, $this->source); })()), "getTypeEvenement", [], "method", false, false, false, 115), "html", null, true);
        yield "</span>
      </div>
    
      <div class=\"detail-row\">
        <span class=\"detail-label\"><i class=\"fas fa-align-left\"></i> Description :</span>
        <p class=\"detail-value\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 120, $this->source); })()), "description", [], "any", false, false, false, 120), "html", null, true);
        yield "</p>
      </div>
      
      <div class=\"grid-details\">
        <div class=\"detail-item\">
          <i class=\"fas fa-calendar-day\"></i>
          <div>
            <span class=\"detail-label\">Start date</span>
            <span class=\"detail-value\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 128, $this->source); })()), "dateDebutEvenement", [], "any", false, false, false, 128), "d/m/Y"), "html", null, true);
        yield "</span>
          </div>
        </div>
        
        <div class=\"detail-item\">
          <i class=\"fas fa-calendar-day\"></i>
          <div>
            <span class=\"detail-label\">End date</span>
            <span class=\"detail-value\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 136, $this->source); })()), "dateFinEvenement", [], "any", false, false, false, 136), "d/m/Y"), "html", null, true);
        yield "</span>
          </div>
        </div>
        
        <div class=\"detail-item\">
          <i class=\"fas fa-map-marker-alt\"></i>
          <div>
            <span class=\"detail-label\">Place</span>
            <span class=\"detail-value\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 144, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 144), "html", null, true);
        yield "</span>
          </div>
        </div>
        
        <div class=\"detail-item\">
          <i class=\"fas fa-users\"></i>
          <div>
            <span class=\"detail-label\">Guests</span>
            <span class=\"detail-value\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 152, $this->source); })()), "nombreInvite", [], "any", false, false, false, 152), "html", null, true);
        yield "</span>
          </div>
        </div>

     </div>

       <div class=\"detail-row\">
        <span class=\"detail-label\"><i class=\"fas fa-credit-card\"></i> Budget :</span>
        <span class=\"detail-value\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 160, $this->source); })()), "getBudget", [], "method", false, false, false, 160), "html", null, true);
        yield "</span>
      </div>
   </div>
  </div>

  <!-- Section Organisateurs -->
  <div class=\"organizers-section animate__animated animate__fadeInRight\">
    <div class=\"section-header\">
      <h2><i class=\"fas fa-users-cog\"></i> Organisateurs Disponibles</h2>
      <div class=\"search-box\">
        <i class=\"fas fa-search\"></i>
        <input type=\"text\" id=\"organizerSearch\" placeholder=\"Rechercher un organisateur...\">
      </div>
    </div>
    
    <div class=\"organizers-list\">
      ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["organizers"]) || array_key_exists("organizers", $context) ? $context["organizers"] : (function () { throw new RuntimeError('Variable "organizers" does not exist.', 176, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["organizer"]) {
            // line 177
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "statut", [], "any", false, false, false, 177) == "Available")) {
                // line 178
                yield "        <div class=\"organizer-card\" data-organizer-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "id", [], "any", false, false, false, 178), "html", null, true);
                yield "\">
          <div class=\"organizer-main\">
            ";
                // line 180
                if (CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "imageOrg", [], "any", false, false, false, 180)) {
                    // line 181
                    yield "              <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "imageOrg", [], "any", false, false, false, 181)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "nomOrg", [], "any", false, false, false, 181), "html", null, true);
                    yield "\" class=\"organizer-avatar\">
            ";
                } else {
                    // line 183
                    yield "              <div class=\"default-avatar\">
                <i class=\"fas fa-user-tie\"></i>
              </div>
            ";
                }
                // line 187
                yield "            <div class=\"organizer-info\">
              <h3>";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "nomOrg", [], "any", false, false, false, 188), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "prenomOrg", [], "any", false, false, false, 188), "html", null, true);
                yield "</h3>
              <span class=\"specialty\">";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "specialite", [], "any", false, false, false, 189), "html", null, true);
                yield "</span>
              <div class=\"rating\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
                <span>";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "nbexp", [], "any", false, false, false, 196), "html", null, true);
                yield " ans exp</span>
              </div>
            </div>
          </div>
          
          <div class=\"organizer-details\">
            <p><i class=\"fas fa-envelope\"></i> ";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "emailOrg", [], "any", false, false, false, 202), "html", null, true);
                yield "</p>
            <p><i class=\"fas fa-phone\"></i> ";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "numTel", [], "any", false, false, false, 203), "html", null, true);
                yield "</p>
            <p><i class=\"fas fa-map-marker-alt\"></i> ";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "city", [], "any", false, false, false, 204), "html", null, true);
                yield "</p>
            <p><i class=\"fas fa-money-bill-wave\"></i> ";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "salaire", [], "any", false, false, false, 205), "html", null, true);
                yield " DT</p>
            <p><i class=\"fas fa-briefcase\"></i> ";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "employment", [], "any", false, false, false, 206), "html", null, true);
                yield "</p>
            <p><i class=\"fas fa-language\"></i> ";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "longuage", [], "any", false, false, false, 207), "html", null, true);
                yield "</p>
          </div>
          
          <div class=\"organizer-skills\" style=\"margin-bottom:15px;\">
            <h4>Skills :</h4>
            <div class=\"skills-tags\">
              ";
                // line 213
                if (CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "skills", [], "any", false, false, false, 213)) {
                    // line 214
                    yield "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "skills", [], "any", false, false, false, 214), ","));
                    foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                        // line 215
                        yield "                  <span class=\"skill-tag\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["skill"], "html", null, true);
                        yield "</span>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['skill'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    yield "              ";
                }
                // line 218
                yield "            </div>
          </div>
          
          <div class=\"organizer-actions\">
            <button class=\"btn-select\" onclick=\"selectOrganizer(this)\">
              <i class=\"fas fa-user-check\"></i> Select 
            </button>
          </div>
        </div>
        ";
            }
            // line 228
            yield "      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 229
            yield "        <div class=\"no-organizers\">
          <i class=\"fas fa-exclamation-circle\"></i>
          <p>Aucun organisateur disponible pour ce type d'événement</p>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['organizer'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "    </div>
    
    <div class=\"assignment-actions\">
      <button class=\"btn-cancel\" onclick=\"window.history.back()\">
        <i class=\"fas fa-arrow-left\"></i> Back
      </button>
      <button class=\"btn-confirm\" id=\"assignButton\" disabled onclick=\"assignOrganizer()\">
        <i class=\"fas fa-check\"></i> Validate Assignment
      </button>
    </div>
  </div>
</div>

<style>
:root {
  --primary-color: #844062;
  --secondary-color: #e0d6cf;
  --text-color: #333;
  --light-bg: #f9f9f9;
}

.assignment-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  padding: 2rem;
  max-width: 1400px;
  margin: 0 auto;
}

.offer-section, .organizers-section {
  flex: 1;
  min-width: 300px;
  background: white;
  border-radius: 15px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  padding: 2rem;
  transition: all 0.3s ease;
}

.offer-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1.5rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid #eee;
}

.status {
  padding: 0.3rem 0.8rem;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
  background-color: #fff3cd;
  color: #856404;
}


.detail-row {
  margin-bottom: 1rem;
}

.detail-label {
  font-weight: bold;
  color: var(--primary-color);
  display: block;
  margin-bottom: 0.3rem;
}

.grid-details {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 1rem;
  margin: 1.5rem 0;
}

.detail-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.section-header {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.search-box {
  position: relative;
}

.search-box input {
  width: 100%;
  padding: 0.5rem 1rem 0.5rem 2.5rem;
  border: 1px solid #ddd;
  border-radius: 20px;
}

.search-box i {
  position: absolute;
  left: 1rem;
  top: 50%;
  transform: translateY(-50%);
  color: #999;
}

.organizers-list {
  max-height: 500px;
  overflow-y: auto;
  padding-right: 0.5rem;
}

.organizer-card {
  border: 1px solid #eee;
  border-radius: 10px;
  padding: 1.5rem;
  margin-bottom: 1rem;
  transition: all 0.3s ease;
}

.organizer-card:hover {
  border-color: var(--primary-color);
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.organizer-card.selected {
  border: 2px solid var(--primary-color);
  background-color: rgba(132, 64, 98, 0.05);
}

.organizer-main {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1rem;
}

.organizer-avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid white;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.default-avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: var(--secondary-color);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary-color);
  font-size: 1.5rem;
}

.specialty {
  display: inline-block;
  background-color: var(--secondary-color);
  color: var(--primary-color);
  padding: 0.2rem 0.8rem;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
}

.rating {
  color: #ffc107;
  font-size: 0.9rem;
  margin-top: 0.3rem;
}

.organizer-details {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 0.8rem;
  font-size: 0.9rem;
  margin-bottom: 1rem;
}

.organizer-details p {
  margin: 0;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.skills-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  margin-top: 0.5rem;
}

.skill-tag {
  background-color: #f0f0f0;
  padding: 0.2rem 0.8rem;
  border-radius: 20px;
  font-size: 0.8rem;
}

.assignment-actions {
  display: flex;
  justify-content: flex-end;
  gap: 1rem;
  margin-top: 2rem;
  padding-top: 1.5rem;
  border-top: 1px solid #eee;
}

.btn-cancel, .btn-confirm, .btn-select {
  padding: 0.8rem 1.5rem;
  border-radius: 30px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.3s ease;
  border: none;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}

.btn-cancel {
  background-color: #f1f1f1;
  color: #666;
}

.btn-cancel:hover {
  background-color: #e0e0e0;
}

.btn-confirm {
  background-color: var(--primary-color);
  color: white;
}

.btn-confirm:hover {
  background-color: #6a3457;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(132, 64, 98, 0.3);
}

.btn-confirm:disabled {
  background-color: #ccc;
  cursor: not-allowed;
  transform: none;
  box-shadow: none;
}

.btn-select {
  background-color: var(--primary-color);
  color: white;
  padding: 0.5rem 1rem;
  font-size: 0.9rem;
}

.btn-select:hover {
  background-color: #6a3457;
}

.no-organizers {
  text-align: center;
  padding: 2rem;
  color: #666;
}

.no-organizers i {
  font-size: 2rem;
  color: var(--primary-color);
  margin-bottom: 1rem;
}

/* Animations */
.animate__animated {
  animation-duration: 2.9s;
}

.animate__fadeInLeft {
  animation-name: fadeInLeft;
}

.animate__fadeInRight {
  animation-name: fadeInRight;
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translateX(20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Responsive */
@media (max-width: 768px) {
  .assignment-container {
    flex-direction: column;
    padding: 1rem;
  }
  
  .offer-section, .organizers-section {
    width: 100%;
    padding: 1.5rem;
  }
  
  .grid-details, .organizer-details {
    grid-template-columns: 1fr;
  }
  
  .assignment-actions {
    flex-direction: column;
  }
  
  .btn-cancel, .btn-confirm {
    width: 100%;
  }
}

/* Custom scrollbar */
.organizers-list::-webkit-scrollbar {
  width: 8px;
}

.organizers-list::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

.organizers-list::-webkit-scrollbar-thumb {
  background: var(--secondary-color);
  border-radius: 10px;
}

.organizers-list::-webkit-scrollbar-thumb:hover {
  background: var(--primary-color);
}
</style>
 <!------------------------------------------------------------------------------------------------------------------------------->
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    // Sélectionner un organisateur et activer le bouton de validation
    window.selectOrganizer = function (button) {
        const card = button.closest('.organizer-card');
        document.querySelectorAll('.organizer-card').forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        selectedOrganizerId = card.dataset.organizerId;
        document.getElementById('assignButton').disabled = false;
    };

    // Assigner un organisateur à une offre
    document.getElementById(\"assignButton\").addEventListener(\"click\", async function (event) {
        event.preventDefault();

        if (!selectedOrganizerId) {
            alert(\"Veuillez sélectionner un organisateur.\");
            return;
        }

        // Afficher la modale de confirmation
        const modal = document.getElementById(\"confirmationModal\");
        const backdrop = document.getElementById(\"modalBackdrop\");
        modal.style.display = \"block\";
        backdrop.style.display = \"block\";

        // Attendre la réponse de l'utilisateur
        const isConfirmed = await new Promise((resolve) => {
            document.getElementById(\"confirmYes\").onclick = () => {
                modal.style.display = \"none\";
                backdrop.style.display = \"none\";
                resolve(true);
            };

            document.getElementById(\"confirmCancel\").onclick = () => {
                modal.style.display = \"none\";
                backdrop.style.display = \"none\";
                resolve(false);
            };
        });

        if (!isConfirmed) {
            return;
        }

        try {
            // Récupérer l'ID de l'offre depuis les données Twig
            const offreId = ";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 639, $this->source); })()), "id", [], "any", false, false, false, 639), "html", null, true);
        yield ";

            // Envoyer les données au serveur via Fetch API
            const response = await fetch(`/offre/affecter/\${offreId}`, {
                method: \"PUT\",
                headers: {
                    \"Content-Type\": \"application/json\"
                },
                body: JSON.stringify({
                    organizerId: selectedOrganizerId,
                    _token: '";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("assign" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 649, $this->source); })()), "id", [], "any", false, false, false, 649))), "html", null, true);
        yield "'
                })
            });

            const result = await response.json();

            if (response.ok) {
                // Afficher le message de succès
                const successModal = document.getElementById(\"successModal\");
                const successBackdrop = document.getElementById(\"successModalBackdrop\");
                successModal.style.display = \"block\";
                successBackdrop.style.display = \"block\";

                document.getElementById(\"closeSuccessModal\").onclick = () => {
                    successModal.style.display = \"none\";
                    successBackdrop.style.display = \"none\";
                    window.location.href = document.referrer;
                };
            } else {
                // Afficher le message d'erreur
                const errorModal = document.getElementById(\"errorModal\");
                const errorBackdrop = document.getElementById(\"errorModalBackdrop\");
                errorModal.style.display = \"block\";
                errorBackdrop.style.display = \"block\";
                document.getElementById(\"closeErrorModal\").onclick = () => {
                    errorModal.style.display = \"none\";
                    errorBackdrop.style.display = \"none\";
                };
            }
        } catch (error) {
            console.error(\"Erreur réseau:\", error);
            const errorModal = document.getElementById(\"errorModal\");
            const errorBackdrop = document.getElementById(\"errorModalBackdrop\");
            errorModal.style.display = \"block\";
            errorBackdrop.style.display = \"block\";
            document.getElementById(\"closeErrorModal\").onclick = () => {
                errorModal.style.display = \"none\";
                errorBackdrop.style.display = \"none\";
            };
        }
    });
});

</script>

<!------------------------------------------------------------------------------------------------------------------------------->
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
        return "offers/afecterOffre.html.twig";
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
        return array (  829 => 649,  816 => 639,  409 => 234,  399 => 229,  394 => 228,  382 => 218,  379 => 217,  370 => 215,  365 => 214,  363 => 213,  354 => 207,  350 => 206,  346 => 205,  342 => 204,  338 => 203,  334 => 202,  325 => 196,  315 => 189,  309 => 188,  306 => 187,  300 => 183,  292 => 181,  290 => 180,  284 => 178,  281 => 177,  276 => 176,  257 => 160,  246 => 152,  235 => 144,  224 => 136,  213 => 128,  202 => 120,  194 => 115,  186 => 110,  177 => 104,  80 => 10,  76 => 8,  63 => 7,  40 => 3,);
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

<!-------------------------------------------------------------------------------------------------------------------->
<!------------ Alerte 1 : add yes or no --------->

    <!-- Modale personnalisée -->
    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\"> Are you sure you want to assign this organizer to this offer ?</p>
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
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Offer Assignment successfully!</p>
            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>

    <!-- Fond obscurci pour la modale de succès -->
    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>



<!------------ Alerte 3  erreur  dajout--------->
<!-- Modale d'erreur -->
<div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while assigning this offer.</p>
        <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>

<!-- Fond obscurci pour la modale d'erreur -->
<div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>


<!--------------------------------------------------------------------------------------------------------------------------------->
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


            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
      
<!------------------------------------------------------------------------------------------------------------------------------->

<div class=\"assignment-container\">
  <!-- Section Offre -->
  <div class=\"offer-section animate__animated animate__fadeInLeft\">
    <div class=\"offer-header\">
      <h2><i class=\"fas fa-file-contract\"></i> Offer Details</h2>
      <span class=\"status\"> {{ offer.statu }}</span>
    </div>
    
    <div class=\"offer-body\">
      <div class=\"detail-row\">
        <span class=\"detail-label\"><i class=\"fas fa-info-circle\"></i> Object :</span>
        <span class=\"detail-value\">{{ offer.objet }}</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\"><i class=\"fas fa-list-alt\"></i> Type Event :</span>
        <span class=\"detail-value\">{{ offer.getTypeEvenement() }}</span>
      </div>
    
      <div class=\"detail-row\">
        <span class=\"detail-label\"><i class=\"fas fa-align-left\"></i> Description :</span>
        <p class=\"detail-value\">{{ offer.description }}</p>
      </div>
      
      <div class=\"grid-details\">
        <div class=\"detail-item\">
          <i class=\"fas fa-calendar-day\"></i>
          <div>
            <span class=\"detail-label\">Start date</span>
            <span class=\"detail-value\">{{ offer.dateDebutEvenement|date('d/m/Y') }}</span>
          </div>
        </div>
        
        <div class=\"detail-item\">
          <i class=\"fas fa-calendar-day\"></i>
          <div>
            <span class=\"detail-label\">End date</span>
            <span class=\"detail-value\">{{ offer.dateFinEvenement|date('d/m/Y') }}</span>
          </div>
        </div>
        
        <div class=\"detail-item\">
          <i class=\"fas fa-map-marker-alt\"></i>
          <div>
            <span class=\"detail-label\">Place</span>
            <span class=\"detail-value\">{{ offer.lieuEvenement }}</span>
          </div>
        </div>
        
        <div class=\"detail-item\">
          <i class=\"fas fa-users\"></i>
          <div>
            <span class=\"detail-label\">Guests</span>
            <span class=\"detail-value\">{{ offer.nombreInvite }}</span>
          </div>
        </div>

     </div>

       <div class=\"detail-row\">
        <span class=\"detail-label\"><i class=\"fas fa-credit-card\"></i> Budget :</span>
        <span class=\"detail-value\">{{ offer.getBudget() }}</span>
      </div>
   </div>
  </div>

  <!-- Section Organisateurs -->
  <div class=\"organizers-section animate__animated animate__fadeInRight\">
    <div class=\"section-header\">
      <h2><i class=\"fas fa-users-cog\"></i> Organisateurs Disponibles</h2>
      <div class=\"search-box\">
        <i class=\"fas fa-search\"></i>
        <input type=\"text\" id=\"organizerSearch\" placeholder=\"Rechercher un organisateur...\">
      </div>
    </div>
    
    <div class=\"organizers-list\">
      {% for organizer in organizers %}
        {% if organizer.statut == 'Available' %}
        <div class=\"organizer-card\" data-organizer-id=\"{{ organizer.id }}\">
          <div class=\"organizer-main\">
            {% if organizer.imageOrg %}
              <img src=\"{{ asset(organizer.imageOrg) }}\" alt=\"{{ organizer.nomOrg }}\" class=\"organizer-avatar\">
            {% else %}
              <div class=\"default-avatar\">
                <i class=\"fas fa-user-tie\"></i>
              </div>
            {% endif %}
            <div class=\"organizer-info\">
              <h3>{{ organizer.nomOrg }} {{ organizer.prenomOrg }}</h3>
              <span class=\"specialty\">{{ organizer.specialite }}</span>
              <div class=\"rating\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
                <span>{{ organizer.nbexp }} ans exp</span>
              </div>
            </div>
          </div>
          
          <div class=\"organizer-details\">
            <p><i class=\"fas fa-envelope\"></i> {{ organizer.emailOrg }}</p>
            <p><i class=\"fas fa-phone\"></i> {{ organizer.numTel }}</p>
            <p><i class=\"fas fa-map-marker-alt\"></i> {{ organizer.city }}</p>
            <p><i class=\"fas fa-money-bill-wave\"></i> {{ organizer.salaire }} DT</p>
            <p><i class=\"fas fa-briefcase\"></i> {{ organizer.employment }}</p>
            <p><i class=\"fas fa-language\"></i> {{ organizer.longuage }}</p>
          </div>
          
          <div class=\"organizer-skills\" style=\"margin-bottom:15px;\">
            <h4>Skills :</h4>
            <div class=\"skills-tags\">
              {% if organizer.skills %}
                {% for skill in organizer.skills|split(',') %}
                  <span class=\"skill-tag\">{{ skill }}</span>
                {% endfor %}
              {% endif %}
            </div>
          </div>
          
          <div class=\"organizer-actions\">
            <button class=\"btn-select\" onclick=\"selectOrganizer(this)\">
              <i class=\"fas fa-user-check\"></i> Select 
            </button>
          </div>
        </div>
        {% endif %}
      {% else %}
        <div class=\"no-organizers\">
          <i class=\"fas fa-exclamation-circle\"></i>
          <p>Aucun organisateur disponible pour ce type d'événement</p>
        </div>
      {% endfor %}
    </div>
    
    <div class=\"assignment-actions\">
      <button class=\"btn-cancel\" onclick=\"window.history.back()\">
        <i class=\"fas fa-arrow-left\"></i> Back
      </button>
      <button class=\"btn-confirm\" id=\"assignButton\" disabled onclick=\"assignOrganizer()\">
        <i class=\"fas fa-check\"></i> Validate Assignment
      </button>
    </div>
  </div>
</div>

<style>
:root {
  --primary-color: #844062;
  --secondary-color: #e0d6cf;
  --text-color: #333;
  --light-bg: #f9f9f9;
}

.assignment-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  padding: 2rem;
  max-width: 1400px;
  margin: 0 auto;
}

.offer-section, .organizers-section {
  flex: 1;
  min-width: 300px;
  background: white;
  border-radius: 15px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  padding: 2rem;
  transition: all 0.3s ease;
}

.offer-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1.5rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid #eee;
}

.status {
  padding: 0.3rem 0.8rem;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
  background-color: #fff3cd;
  color: #856404;
}


.detail-row {
  margin-bottom: 1rem;
}

.detail-label {
  font-weight: bold;
  color: var(--primary-color);
  display: block;
  margin-bottom: 0.3rem;
}

.grid-details {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 1rem;
  margin: 1.5rem 0;
}

.detail-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.section-header {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.search-box {
  position: relative;
}

.search-box input {
  width: 100%;
  padding: 0.5rem 1rem 0.5rem 2.5rem;
  border: 1px solid #ddd;
  border-radius: 20px;
}

.search-box i {
  position: absolute;
  left: 1rem;
  top: 50%;
  transform: translateY(-50%);
  color: #999;
}

.organizers-list {
  max-height: 500px;
  overflow-y: auto;
  padding-right: 0.5rem;
}

.organizer-card {
  border: 1px solid #eee;
  border-radius: 10px;
  padding: 1.5rem;
  margin-bottom: 1rem;
  transition: all 0.3s ease;
}

.organizer-card:hover {
  border-color: var(--primary-color);
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.organizer-card.selected {
  border: 2px solid var(--primary-color);
  background-color: rgba(132, 64, 98, 0.05);
}

.organizer-main {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1rem;
}

.organizer-avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid white;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.default-avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: var(--secondary-color);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary-color);
  font-size: 1.5rem;
}

.specialty {
  display: inline-block;
  background-color: var(--secondary-color);
  color: var(--primary-color);
  padding: 0.2rem 0.8rem;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
}

.rating {
  color: #ffc107;
  font-size: 0.9rem;
  margin-top: 0.3rem;
}

.organizer-details {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 0.8rem;
  font-size: 0.9rem;
  margin-bottom: 1rem;
}

.organizer-details p {
  margin: 0;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.skills-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  margin-top: 0.5rem;
}

.skill-tag {
  background-color: #f0f0f0;
  padding: 0.2rem 0.8rem;
  border-radius: 20px;
  font-size: 0.8rem;
}

.assignment-actions {
  display: flex;
  justify-content: flex-end;
  gap: 1rem;
  margin-top: 2rem;
  padding-top: 1.5rem;
  border-top: 1px solid #eee;
}

.btn-cancel, .btn-confirm, .btn-select {
  padding: 0.8rem 1.5rem;
  border-radius: 30px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.3s ease;
  border: none;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}

.btn-cancel {
  background-color: #f1f1f1;
  color: #666;
}

.btn-cancel:hover {
  background-color: #e0e0e0;
}

.btn-confirm {
  background-color: var(--primary-color);
  color: white;
}

.btn-confirm:hover {
  background-color: #6a3457;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(132, 64, 98, 0.3);
}

.btn-confirm:disabled {
  background-color: #ccc;
  cursor: not-allowed;
  transform: none;
  box-shadow: none;
}

.btn-select {
  background-color: var(--primary-color);
  color: white;
  padding: 0.5rem 1rem;
  font-size: 0.9rem;
}

.btn-select:hover {
  background-color: #6a3457;
}

.no-organizers {
  text-align: center;
  padding: 2rem;
  color: #666;
}

.no-organizers i {
  font-size: 2rem;
  color: var(--primary-color);
  margin-bottom: 1rem;
}

/* Animations */
.animate__animated {
  animation-duration: 2.9s;
}

.animate__fadeInLeft {
  animation-name: fadeInLeft;
}

.animate__fadeInRight {
  animation-name: fadeInRight;
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translateX(20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Responsive */
@media (max-width: 768px) {
  .assignment-container {
    flex-direction: column;
    padding: 1rem;
  }
  
  .offer-section, .organizers-section {
    width: 100%;
    padding: 1.5rem;
  }
  
  .grid-details, .organizer-details {
    grid-template-columns: 1fr;
  }
  
  .assignment-actions {
    flex-direction: column;
  }
  
  .btn-cancel, .btn-confirm {
    width: 100%;
  }
}

/* Custom scrollbar */
.organizers-list::-webkit-scrollbar {
  width: 8px;
}

.organizers-list::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

.organizers-list::-webkit-scrollbar-thumb {
  background: var(--secondary-color);
  border-radius: 10px;
}

.organizers-list::-webkit-scrollbar-thumb:hover {
  background: var(--primary-color);
}
</style>
 <!------------------------------------------------------------------------------------------------------------------------------->
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    // Sélectionner un organisateur et activer le bouton de validation
    window.selectOrganizer = function (button) {
        const card = button.closest('.organizer-card');
        document.querySelectorAll('.organizer-card').forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        selectedOrganizerId = card.dataset.organizerId;
        document.getElementById('assignButton').disabled = false;
    };

    // Assigner un organisateur à une offre
    document.getElementById(\"assignButton\").addEventListener(\"click\", async function (event) {
        event.preventDefault();

        if (!selectedOrganizerId) {
            alert(\"Veuillez sélectionner un organisateur.\");
            return;
        }

        // Afficher la modale de confirmation
        const modal = document.getElementById(\"confirmationModal\");
        const backdrop = document.getElementById(\"modalBackdrop\");
        modal.style.display = \"block\";
        backdrop.style.display = \"block\";

        // Attendre la réponse de l'utilisateur
        const isConfirmed = await new Promise((resolve) => {
            document.getElementById(\"confirmYes\").onclick = () => {
                modal.style.display = \"none\";
                backdrop.style.display = \"none\";
                resolve(true);
            };

            document.getElementById(\"confirmCancel\").onclick = () => {
                modal.style.display = \"none\";
                backdrop.style.display = \"none\";
                resolve(false);
            };
        });

        if (!isConfirmed) {
            return;
        }

        try {
            // Récupérer l'ID de l'offre depuis les données Twig
            const offreId = {{ offer.id }};

            // Envoyer les données au serveur via Fetch API
            const response = await fetch(`/offre/affecter/\${offreId}`, {
                method: \"PUT\",
                headers: {
                    \"Content-Type\": \"application/json\"
                },
                body: JSON.stringify({
                    organizerId: selectedOrganizerId,
                    _token: '{{ csrf_token('assign' ~ offer.id) }}'
                })
            });

            const result = await response.json();

            if (response.ok) {
                // Afficher le message de succès
                const successModal = document.getElementById(\"successModal\");
                const successBackdrop = document.getElementById(\"successModalBackdrop\");
                successModal.style.display = \"block\";
                successBackdrop.style.display = \"block\";

                document.getElementById(\"closeSuccessModal\").onclick = () => {
                    successModal.style.display = \"none\";
                    successBackdrop.style.display = \"none\";
                    window.location.href = document.referrer;
                };
            } else {
                // Afficher le message d'erreur
                const errorModal = document.getElementById(\"errorModal\");
                const errorBackdrop = document.getElementById(\"errorModalBackdrop\");
                errorModal.style.display = \"block\";
                errorBackdrop.style.display = \"block\";
                document.getElementById(\"closeErrorModal\").onclick = () => {
                    errorModal.style.display = \"none\";
                    errorBackdrop.style.display = \"none\";
                };
            }
        } catch (error) {
            console.error(\"Erreur réseau:\", error);
            const errorModal = document.getElementById(\"errorModal\");
            const errorBackdrop = document.getElementById(\"errorModalBackdrop\");
            errorModal.style.display = \"block\";
            errorBackdrop.style.display = \"block\";
            document.getElementById(\"closeErrorModal\").onclick = () => {
                errorModal.style.display = \"none\";
                errorBackdrop.style.display = \"none\";
            };
        }
    });
});

</script>

<!------------------------------------------------------------------------------------------------------------------------------->
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
{% endblock %}", "offers/afecterOffre.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\offers\\afecterOffre.html.twig");
    }
}
