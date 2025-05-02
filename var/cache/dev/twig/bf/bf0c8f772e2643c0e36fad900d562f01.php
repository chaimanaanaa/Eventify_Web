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

/* organizers/organizers.html.twig */
class __TwigTemplate_9e35ded1321dcf4c20ce97b791a08e21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organizers/organizers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organizers/organizers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "organizers/organizers.html.twig", 1);
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
        yield " <head>
    
        <!-- Lien vers le fichier CSS externe -->
        <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/organisateur.css"), "html", null, true);
        yield "\">



</head>

<body>
        <section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
<!------------------------------------- banner --------------------------------------------------------->
        <div class=\"section-overlay\" style=\"background: url('filesOrganisateur/imageOrganisateur/banner.png') center/cover no-repeat;\">
        </div>
<!----------------------------------------------------------------->

            <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12\">
                         <h1 class=\"text-white mb-4 pb-2\">Submit & Manage Your Requests</h1> 

                          <!--<h1 class=\"mb-4 pb-2\" style=\"color: black;\">Submit & Manage Your Requests</h1>-->

                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddYourRequest");
        yield "\" class=\"btn custom-btn smoothscroll me-3 SendRequest\">Submit Your Requests</a>
                        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ConsulterYourRequest");
        yield "\" class=\"btn custom-btn smoothscroll me-3 SendRequest\">Manage Your Requests</a>
                    </div>

                </div>
            </div>

            <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
        </section>


<div style=\"height: 100px;background-color:white;\">.</div>
<!----------------------------------------------------- 5idmti tibda min hne ---------------------------------------------->

<!-------------------------------------------------les alertes ------------------------------------------------------------------------------>
<!------------------------- Alerte --------------------------->

<!-- Modale de confirmation -->
<div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to send this message?</p>
        <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
        <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
    </div>
</div>
<div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale de succès -->
<div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px;\">Message sent successfully!</p>
        <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale d'erreur générique -->
<div id=\"genericErrorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while sending this message.</p>
        <button id=\"closeGenericErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"genericErrorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale d'erreur spécifique (message vide) -->
<div id=\"emptyMessageErrorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">The message cannot be empty.</p>
        <button id=\"closeEmptyMessageErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"emptyMessageErrorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>
<!------------------------- ------------------------------------------- --------------------------->
<div class=\"organizers-container\" style=\"background-color:white;\">
  
        
<!-- Barre de recherche et filtre -->
<div class=\"filters\" style=\"  position: absolute;  top: 500px; left: 200px; \">
        <div>
            <div class=\"class=\"filters\"\">
                <input
                    type=\"text\"
                    placeholder=\"Search...\"
                    aria-label=\"Search...\" 
                    id=\"searchInput\"
                    
                    />
            </div>
        </div>

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
        
</div>


<!-------------------------------- Conteneur flottant pour afficher les détails ------------------------------------------------->
<div id=\"floatingDetails\" style=\"margin-left:200px;margin-top:25px; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); background-color: white; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: none; z-index: 9996; width: 700px; max-width: 90%;\">
    <button id=\"closeFloatingDetails\" style=\"background-color: #844062 ;border-radius:5px; color: white; border: none; padding: 5px 10px; cursor: pointer; float: right;\">Fermer</button><br><br>
    <div class=\"floating-content\" style=\"display: flex; flex-wrap: wrap; align-items: center; gap: 20px;\">
<div style=\"position: absolute; top: 100px; left: -450px; display: flex; flex-direction: column; align-items: center;\">
    <img class=\"imageOrg\" id=\"floatingImage\" src=\"\" alt=\"Profile\" style=\"background-color:white; width: 350px; height: 350px; border: 2px solid #844062; flex-shrink: 0; border-radius: 20px; margin-bottom: 10px;\" />
    <textarea id=\"descriptionInput\" placeholder=\"Write your description here...\" style=\"width: 350px; height: 100px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; resize: none; margin-bottom: 10px;\"></textarea>
    <button id=\"sendButton\" class =\"SendTeleBtn\" style=\"background-color: transparent; border: none; padding: 10px; border-radius: 5px; cursor: pointer; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;\">
        <img src=\"filesOrganisateur/imageOrganisateur/contacOrg.png\" alt=\"Send\" style=\"width: 70px; height: 70px;\">
    </button>
</div>

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
<!---------------API SENDING telegramme Messages------------------------------>
<script>
document.getElementById('sendButton').addEventListener('click', function () {
    // Récupérez le texte de la zone de description
    const description = document.getElementById('descriptionInput').value;

    // Vérifiez si le message est vide
    if (description.trim() === \"\") {
        const emptyMessageErrorModal = document.getElementById(\"emptyMessageErrorModal\");
        const emptyMessageErrorBackdrop = document.getElementById(\"emptyMessageErrorModalBackdrop\");
        emptyMessageErrorModal.style.display = \"block\";
        emptyMessageErrorBackdrop.style.display = \"block\";

        document.getElementById(\"closeEmptyMessageErrorModal\").onclick = () => {
            emptyMessageErrorModal.style.display = \"none\";
            emptyMessageErrorBackdrop.style.display = \"none\";
        };
        return;
    }

    // Envoyez le message au backend Symfony
    fetch('/send-message', { 
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ message: description })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            // Afficher la modale de succès
            const successModal = document.getElementById(\"successModal\");
            const successBackdrop = document.getElementById(\"successModalBackdrop\");
            successModal.style.display = \"block\";
            successBackdrop.style.display = \"block\";

            document.getElementById(\"closeSuccessModal\").onclick = () => {
                successModal.style.display = \"none\";
                successBackdrop.style.display = \"none\";
                document.getElementById('descriptionInput').value = \"\";
                //window.location.href = document.referrer; // Redirection vers la page précédente
            };
        } else if (data.error) {
            // Afficher la modale d'erreur générique
            const genericErrorModal = document.getElementById(\"genericErrorModal\");
            const genericErrorBackdrop = document.getElementById(\"genericErrorModalBackdrop\");
            genericErrorModal.style.display = \"block\";
            genericErrorBackdrop.style.display = \"block\";

            document.getElementById(\"closeGenericErrorModal\").onclick = () => {
                genericErrorModal.style.display = \"none\";
                genericErrorBackdrop.style.display = \"none\";
            };
        }
    })
    .catch(error => {
        console.error(\"Erreur réseau :\", error);

        // Afficher la modale d'erreur générique en cas d'échec réseau
        const genericErrorModal = document.getElementById(\"genericErrorModal\");
        const genericErrorBackdrop = document.getElementById(\"genericErrorModalBackdrop\");
        genericErrorModal.style.display = \"block\";
        genericErrorBackdrop.style.display = \"block\";

        document.getElementById(\"closeGenericErrorModal\").onclick = () => {
            genericErrorModal.style.display = \"none\";
            genericErrorBackdrop.style.display = \"none\";
        };
    });
});
</script>


<!------------------------------------------------- Conteneur principal pour les cartes -------------------------------------------->
<div class=\"cards-grid\" id=\"organizersGrid\" style=\"margin-top:64px;\">
    ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["organizers"]) || array_key_exists("organizers", $context) ? $context["organizers"] : (function () { throw new RuntimeError('Variable "organizers" does not exist.', 227, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["organizer"]) {
            // line 228
            yield "        <div class=\"card\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getId", [], "method", false, false, false, 228), "html", null, true);
            yield "\"  data-state=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getStatut", [], "method", false, false, false, 228), "html", null, true);
            yield "\" data-search=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getNomOrg", [], "method", false, false, false, 228), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getPrenomOrg", [], "method", false, false, false, 228), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getEmailOrg", [], "method", false, false, false, 228), "html", null, true);
            yield "   ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getSpecialite", [], "method", false, false, false, 228), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getNbexp", [], "method", false, false, false, 228), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getSalaire", [], "method", false, false, false, 228), "html", null, true);
            yield "\">
            <img src=\"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getImageOrg", [], "method", false, false, false, 229)), "html", null, true);
            yield "\" alt=\"Profile\" class=\"imageOrg RotationChargementPageImoRG\" />
            <div class=\"card-info\">
                <p><strong>";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getNomOrg", [], "method", false, false, false, 231), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getPrenomOrg", [], "method", false, false, false, 231), "html", null, true);
            yield "</strong></p>
                <p>";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getEmailOrg", [], "method", false, false, false, 232), "html", null, true);
            yield "</p>
                <p>Speciality : ";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getSpecialite", [], "method", false, false, false, 233), "html", null, true);
            yield "</p>
                <p>years of experience : ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getNbexp", [], "method", false, false, false, 234), "html", null, true);
            yield " ans</p>
                <p>Salary : ";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getSalaire", [], "method", false, false, false, 235), "html", null, true);
            yield " DT</p>
                <p class=\"state\" >State : <span class=\"status-value\">";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getStatut", [], "method", false, false, false, 236), "html", null, true);
            yield "</span></p>
            </div>
            <div class=\"card-actions\">
                <button class=\"action-btn details-btn\" data-id=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "getId", [], "method", false, false, false, 239), "html", null, true);
            yield "\"><i class=\"fa-solid fa-eye\"></i> Détails</button>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['organizer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        yield "</div>




</div>
           




<div style=\"height: 100px;background-color:white;\">.</div>



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
        return "organizers/organizers.html.twig";
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
        return array (  375 => 243,  365 => 239,  359 => 236,  355 => 235,  351 => 234,  347 => 233,  343 => 232,  337 => 231,  332 => 229,  313 => 228,  309 => 227,  111 => 32,  107 => 31,  81 => 8,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%extends \"base.html.twig\" %}


{%block content %}
 <head>
    
        <!-- Lien vers le fichier CSS externe -->
        <link rel=\"stylesheet\" href=\"{{ asset('filesOrganisateur/organisateur.css') }}\">



</head>

<body>
        <section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
<!------------------------------------- banner --------------------------------------------------------->
        <div class=\"section-overlay\" style=\"background: url('filesOrganisateur/imageOrganisateur/banner.png') center/cover no-repeat;\">
        </div>
<!----------------------------------------------------------------->

            <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12\">
                         <h1 class=\"text-white mb-4 pb-2\">Submit & Manage Your Requests</h1> 

                          <!--<h1 class=\"mb-4 pb-2\" style=\"color: black;\">Submit & Manage Your Requests</h1>-->

                        <a href=\"{{ path('app_AddYourRequest') }}\" class=\"btn custom-btn smoothscroll me-3 SendRequest\">Submit Your Requests</a>
                        <a href=\"{{ path('app_ConsulterYourRequest') }}\" class=\"btn custom-btn smoothscroll me-3 SendRequest\">Manage Your Requests</a>
                    </div>

                </div>
            </div>

            <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
        </section>


<div style=\"height: 100px;background-color:white;\">.</div>
<!----------------------------------------------------- 5idmti tibda min hne ---------------------------------------------->

<!-------------------------------------------------les alertes ------------------------------------------------------------------------------>
<!------------------------- Alerte --------------------------->

<!-- Modale de confirmation -->
<div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to send this message?</p>
        <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
        <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
    </div>
</div>
<div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale de succès -->
<div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px;\">Message sent successfully!</p>
        <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale d'erreur générique -->
<div id=\"genericErrorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while sending this message.</p>
        <button id=\"closeGenericErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"genericErrorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale d'erreur spécifique (message vide) -->
<div id=\"emptyMessageErrorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">The message cannot be empty.</p>
        <button id=\"closeEmptyMessageErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"emptyMessageErrorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>
<!------------------------- ------------------------------------------- --------------------------->
<div class=\"organizers-container\" style=\"background-color:white;\">
  
        
<!-- Barre de recherche et filtre -->
<div class=\"filters\" style=\"  position: absolute;  top: 500px; left: 200px; \">
        <div>
            <div class=\"class=\"filters\"\">
                <input
                    type=\"text\"
                    placeholder=\"Search...\"
                    aria-label=\"Search...\" 
                    id=\"searchInput\"
                    
                    />
            </div>
        </div>

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
        
</div>


<!-------------------------------- Conteneur flottant pour afficher les détails ------------------------------------------------->
<div id=\"floatingDetails\" style=\"margin-left:200px;margin-top:25px; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); background-color: white; border: 1px solid #ddd; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: none; z-index: 9996; width: 700px; max-width: 90%;\">
    <button id=\"closeFloatingDetails\" style=\"background-color: #844062 ;border-radius:5px; color: white; border: none; padding: 5px 10px; cursor: pointer; float: right;\">Fermer</button><br><br>
    <div class=\"floating-content\" style=\"display: flex; flex-wrap: wrap; align-items: center; gap: 20px;\">
<div style=\"position: absolute; top: 100px; left: -450px; display: flex; flex-direction: column; align-items: center;\">
    <img class=\"imageOrg\" id=\"floatingImage\" src=\"\" alt=\"Profile\" style=\"background-color:white; width: 350px; height: 350px; border: 2px solid #844062; flex-shrink: 0; border-radius: 20px; margin-bottom: 10px;\" />
    <textarea id=\"descriptionInput\" placeholder=\"Write your description here...\" style=\"width: 350px; height: 100px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; resize: none; margin-bottom: 10px;\"></textarea>
    <button id=\"sendButton\" class =\"SendTeleBtn\" style=\"background-color: transparent; border: none; padding: 10px; border-radius: 5px; cursor: pointer; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;\">
        <img src=\"filesOrganisateur/imageOrganisateur/contacOrg.png\" alt=\"Send\" style=\"width: 70px; height: 70px;\">
    </button>
</div>

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
<!---------------API SENDING telegramme Messages------------------------------>
<script>
document.getElementById('sendButton').addEventListener('click', function () {
    // Récupérez le texte de la zone de description
    const description = document.getElementById('descriptionInput').value;

    // Vérifiez si le message est vide
    if (description.trim() === \"\") {
        const emptyMessageErrorModal = document.getElementById(\"emptyMessageErrorModal\");
        const emptyMessageErrorBackdrop = document.getElementById(\"emptyMessageErrorModalBackdrop\");
        emptyMessageErrorModal.style.display = \"block\";
        emptyMessageErrorBackdrop.style.display = \"block\";

        document.getElementById(\"closeEmptyMessageErrorModal\").onclick = () => {
            emptyMessageErrorModal.style.display = \"none\";
            emptyMessageErrorBackdrop.style.display = \"none\";
        };
        return;
    }

    // Envoyez le message au backend Symfony
    fetch('/send-message', { 
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ message: description })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            // Afficher la modale de succès
            const successModal = document.getElementById(\"successModal\");
            const successBackdrop = document.getElementById(\"successModalBackdrop\");
            successModal.style.display = \"block\";
            successBackdrop.style.display = \"block\";

            document.getElementById(\"closeSuccessModal\").onclick = () => {
                successModal.style.display = \"none\";
                successBackdrop.style.display = \"none\";
                document.getElementById('descriptionInput').value = \"\";
                //window.location.href = document.referrer; // Redirection vers la page précédente
            };
        } else if (data.error) {
            // Afficher la modale d'erreur générique
            const genericErrorModal = document.getElementById(\"genericErrorModal\");
            const genericErrorBackdrop = document.getElementById(\"genericErrorModalBackdrop\");
            genericErrorModal.style.display = \"block\";
            genericErrorBackdrop.style.display = \"block\";

            document.getElementById(\"closeGenericErrorModal\").onclick = () => {
                genericErrorModal.style.display = \"none\";
                genericErrorBackdrop.style.display = \"none\";
            };
        }
    })
    .catch(error => {
        console.error(\"Erreur réseau :\", error);

        // Afficher la modale d'erreur générique en cas d'échec réseau
        const genericErrorModal = document.getElementById(\"genericErrorModal\");
        const genericErrorBackdrop = document.getElementById(\"genericErrorModalBackdrop\");
        genericErrorModal.style.display = \"block\";
        genericErrorBackdrop.style.display = \"block\";

        document.getElementById(\"closeGenericErrorModal\").onclick = () => {
            genericErrorModal.style.display = \"none\";
            genericErrorBackdrop.style.display = \"none\";
        };
    });
});
</script>


<!------------------------------------------------- Conteneur principal pour les cartes -------------------------------------------->
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
                <button class=\"action-btn details-btn\" data-id=\"{{ organizer.getId() }}\"><i class=\"fa-solid fa-eye\"></i> Détails</button>
            </div>
        </div>
    {% endfor %}
</div>




</div>
           




<div style=\"height: 100px;background-color:white;\">.</div>



    <script src=\"filesOrganisateur/afficherOrganisateur.js\"></script>


    <!-- Inclure jsPDF -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>

<!-- Inclure le plugin autoTable pour jsPDF -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js\"></script>
   
</body>
</html>

{%endblock %}


", "organizers/organizers.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\organizers\\organizers.html.twig");
    }
}
