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

/* profile/profileBack.html.twig */
class __TwigTemplate_f5419ead95bdd270e59b67d5ef1ab882 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profileBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profileBack.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "profile/profileBack.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        // line 6
        yield "<body>
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
                  <!-- Search -->
                  <div class=\"navbar-nav align-items-center me-auto\">
                    <div class=\"nav-item d-flex align-items-center\">
                      <span class=\"w-px-22 h-px-22\"><i class=\"icon-base bx bx-search icon-md\"></i></span>
                      <input
                        type=\"text\"
                        class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                        placeholder=\"Search...\"
                        aria-label=\"Search...\" />
                    </div>
                  </div>
                  <!-- /Search -->
                </div>
              </nav>
    
              <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                              <div class=\"nav-align-top\">
                                <ul class=\"nav nav-pills flex-column flex-md-row mb-6 gap-md-0 gap-2\">
                                  <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"javascript:void(0);\" style=\"background-color: #844062; color: white;\"
                                      ><i class=\"icon-base bx bx-user icon-sm me-1_5\"></i> Account</a
                                    >
                                  </li>
                                  <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_complaintsBack");
        yield "\" style=\"transition: background-color 0.3s; color: black;\"
                                       onmouseover=\"this.style.backgroundColor='#e0d6cf'; this.style.color='black';\"
                                       onmouseout=\"this.style.backgroundColor=''; this.style.color='';\">
                                        <i class=\"icon-base bx bx-bell icon-sm me-1_5\"></i> Complaints
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                  <a class=\"nav-link\" href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventsBack");
        yield "\" style=\"transition: background-color 0.3s; color: black;\"
                                     onmouseover=\"this.style.backgroundColor='#e0d6cf'; this.style.color='black';\"
                                     onmouseout=\"this.style.backgroundColor=''; this.style.color='';\">
                                      <i class=\"icon-base bx bx-link-alt icon-sm me-1_5\"></i> Pack
                                  </a>
                              </li>
                                </ul>
                              </div>
                                <div class=\"card mb-6\">
                                    <!-- Account -->
                                    <div class=\"card-body\">
                                        ";
        // line 105
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })())) {
            // line 106
            yield "                                        <form id=\"formAccountSettings\" method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_update_profile_back");
            yield "\" enctype=\"multipart/form-data\">
                                            <div class=\"d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom\">
                                                <div
                                                    class=\"d-block w-px-100 h-px-100 rounded image-frame\"
                                                    id=\"uploadedAvatar\"
                                                    style=\"background-image: url(";
            // line 111
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "img", [], "any", false, false, false, 111)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "img", [], "any", false, false, false, 111), "html", null, true)) : ("admin/assets/img/avatars/1.png"));
            yield "); background-size: cover; background-position: center;\">
                                                </div>
                                                <div class=\"button-wrapper\">
                                                    <label for=\"upload\" class=\"btn  me-3 mb-4\" tabindex=\"0\" style=\"background-color: #ADC29B; color: white;\">
                                                        <span class=\"d-none d-sm-block\">Upload new photo</span>
                                                        <i class=\"icon-base bx bx-upload d-block d-sm-none\"></i>
                                                        <input
                                                            type=\"file\"
                                                            id=\"upload\"
                                                            class=\"account-file-input\"
                                                            name=\"fileInput\"
                                                            hidden
                                                            accept=\"image/*\" />
                                                    </label>
                                                    <button 
                                                    type=\"button\" 
                                                    class=\"btn btn-outline-secondary account-image-reset mb-4\" 
                                                    style=\"border-color: #ADC29B; color: #ADC29B; transition: background-color 0.3s, color 0.3s;\"
                                                    onmouseover=\"this.style.backgroundColor='#ADC29B'; this.style.color='white';\"
                                                    onmouseout=\"this.style.backgroundColor=''; this.style.color='#ADC29B';\">
                                                    <i class=\"icon-base bx bx-reset d-block d-sm-none\"></i>
                                                    <span class=\"d-none d-sm-block\">Reset</span>
                                                </button>
                                                </div>
                                            </div>

                                            <div class=\"row g-6\">
                                                <!-- First Name -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"firstName\" class=\"form-label\">First Name</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"text\"
                                                        id=\"firstName\"
                                                        name=\"firstName\"
                                                        value=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "firstName", [], "any", false, false, false, 146), "html", null, true);
            yield "\"
                                                        required />
                                                </div>

                                                <!-- Last Name -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"lastName\" class=\"form-label\">Last Name</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"text\"
                                                        id=\"lastName\"
                                                        name=\"lastName\"
                                                        value=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "lastName", [], "any", false, false, false, 158), "html", null, true);
            yield "\"
                                                        required />
                                                </div>

                                                <!-- Date of Birth -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"dateOfBirth\" class=\"form-label\">Date of Birth</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"date\"
                                                        id=\"dateOfBirth\"
                                                        name=\"dateOfBirth\"
                                                        value=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 170, $this->source); })()), "dateNaissance", [], "any", false, false, false, 170), "Y-m-d"), "html", null, true);
            yield "\"
                                                        required />
                                                </div>

                                                <!-- CIN -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"cin\" class=\"form-label\">CIN</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"text\"
                                                        id=\"cin\"
                                                        name=\"cin\"
                                                        value=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "cin", [], "any", false, false, false, 182), "html", null, true);
            yield "\"
                                                        required />
                                                </div>

                                                <!-- Phone Number -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"phoneNumber\" class=\"form-label\">Phone Number</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"text\"
                                                        id=\"phoneNumber\"
                                                        name=\"phoneNumber\"
                                                        value=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 194, $this->source); })()), "numTlf", [], "any", false, false, false, 194), "html", null, true);
            yield "\"
                                                        required />
                                                </div>

                                                <!-- Email -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"email\" class=\"form-label\">E-mail</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"email\"
                                                        id=\"email\"
                                                        name=\"email\"
                                                        value=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 206, $this->source); })()), "email", [], "any", false, false, false, 206), "html", null, true);
            yield "\"
                                                        required />
                                                </div>
                                            </div>

                                            <div class=\"mt-6\">
                                                <button type=\"submit\" class=\"btn  me-3\"style=\"background-color: #ADC29B; color: white;\">Save changes</button>
                                                <button 
                                                        type=\"reset\" 
                                                        class=\"btn btn-outline-secondary\" 
                                                        style=\"border-color: #ADC29B; color: #ADC29B; transition: background-color 0.3s, color 0.3s;\"
                                                        onmouseover=\"this.style.backgroundColor='#ADC29B'; this.style.color='white';\"
                                                        onmouseout=\"this.style.backgroundColor=''; this.style.color='#ADC29B';\">
                                                        Cancel
                                                    </button>
                                            </div>
                                        </form>
                                        ";
        } else {
            // line 224
            yield "                                        <div class=\"alert alert-danger\">
                                            <strong>Error:</strong> User data is not available. Please log in again.
                                        </div>
                                        ";
        }
        // line 228
        yield "                                    </div>
                                    <!-- /Account -->
                                </div>
                                <div class=\"card\">
                                  <h5 class=\"card-header\">Delete Account</h5>
                                  <div class=\"card-body\">
                                    <div class=\"mb-6 col-12 mb-0\">
                                      <div class=\"alert alert-warning\">
                                        <h5 class=\"alert-heading mb-1\">Are you sure you want to delete your account?</h5>
                                        <p class=\"mb-0\">Once you delete your account, there is no going back. Please be certain.</p>
                                      </div>
                                    </div>
                                    <form id=\"formAccountDeactivation\" method=\"post\" action=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_account_back");
        yield "\" onsubmit=\"return validateAccountDeletion();\">
                                      <div class=\"form-check my-8 ms-2\">
                                        <input
                                            class=\"form-check-input\"
                                            type=\"checkbox\"
                                            name=\"accountActivation\"
                                            id=\"accountActivation\"
                                            style=\"accent-color: #ADC29B !important;\" />
                                        <label 
                                            class=\"form-check-label\" 
                                            for=\"accountActivation\">
                                           
                                            I confirm my account Deletion
                                        </label>
                                    </div>
                                      <button type=\"submit\" class=\"btn btn-danger deactivate-account\">Delete Account</button>
                                  </form>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

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
                                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color : #844062\">Eventify</a>
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
    <!-- Flatpickr JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
   
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr(\"#dateOfBirth\", {
                dateFormat: \"Y-m-d\", // Format jj/mm/aaaa
                maxDate: \"2007-12-31\", // Dernière date autorisée
                defaultDate: \"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 303, $this->source); })()), "dateNaissance", [], "any", false, false, false, 303), "Y-m-d"), "html", null, true);
        yield "\", // Date par défaut
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
   
   
    <!--script pour ouvrir gallery-->
    <script>
        document.getElementById('upload').addEventListener('change', function (event) {
            const file = event.target.files[0]; // Récupérer le fichier sélectionné
            if (file) {
                const reader = new FileReader(); // Utiliser FileReader pour lire le fichier
                reader.onload = function (e) {
                    const uploadedAvatar = document.getElementById('uploadedAvatar');
                    uploadedAvatar.style.backgroundImage = `url('\${e.target.result}')`; // Mettre à jour l'image
                };
                reader.readAsDataURL(file); // Lire le fichier comme une URL de données
            }
        });

        // Bouton Reset pour réinitialiser l'image par défaut
        document.querySelector('.account-image-reset').addEventListener('click', function () {
            const uploadedAvatar = document.getElementById('uploadedAvatar');
            uploadedAvatar.style.backgroundImage = \"url('admin/assets/img/avatars/1.png')\"; // Réinitialiser l'image par défaut
            document.getElementById('upload').value = ''; // Réinitialiser l'input file
        });
    </script>
</body>
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
        return "profile/profileBack.html.twig";
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
        return array (  414 => 303,  348 => 240,  334 => 228,  328 => 224,  307 => 206,  292 => 194,  277 => 182,  262 => 170,  247 => 158,  232 => 146,  194 => 111,  185 => 106,  183 => 105,  169 => 94,  159 => 87,  76 => 6,  63 => 5,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}



{% block content %}
<body>
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
                  <!-- Search -->
                  <div class=\"navbar-nav align-items-center me-auto\">
                    <div class=\"nav-item d-flex align-items-center\">
                      <span class=\"w-px-22 h-px-22\"><i class=\"icon-base bx bx-search icon-md\"></i></span>
                      <input
                        type=\"text\"
                        class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                        placeholder=\"Search...\"
                        aria-label=\"Search...\" />
                    </div>
                  </div>
                  <!-- /Search -->
                </div>
              </nav>
    
              <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                              <div class=\"nav-align-top\">
                                <ul class=\"nav nav-pills flex-column flex-md-row mb-6 gap-md-0 gap-2\">
                                  <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"javascript:void(0);\" style=\"background-color: #844062; color: white;\"
                                      ><i class=\"icon-base bx bx-user icon-sm me-1_5\"></i> Account</a
                                    >
                                  </li>
                                  <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('app_complaintsBack') }}\" style=\"transition: background-color 0.3s; color: black;\"
                                       onmouseover=\"this.style.backgroundColor='#e0d6cf'; this.style.color='black';\"
                                       onmouseout=\"this.style.backgroundColor=''; this.style.color='';\">
                                        <i class=\"icon-base bx bx-bell icon-sm me-1_5\"></i> Complaints
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                  <a class=\"nav-link\" href=\"{{ path('app_eventsBack') }}\" style=\"transition: background-color 0.3s; color: black;\"
                                     onmouseover=\"this.style.backgroundColor='#e0d6cf'; this.style.color='black';\"
                                     onmouseout=\"this.style.backgroundColor=''; this.style.color='';\">
                                      <i class=\"icon-base bx bx-link-alt icon-sm me-1_5\"></i> Pack
                                  </a>
                              </li>
                                </ul>
                              </div>
                                <div class=\"card mb-6\">
                                    <!-- Account -->
                                    <div class=\"card-body\">
                                        {% if user %}
                                        <form id=\"formAccountSettings\" method=\"post\" action=\"{{ path('app_update_profile_back') }}\" enctype=\"multipart/form-data\">
                                            <div class=\"d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom\">
                                                <div
                                                    class=\"d-block w-px-100 h-px-100 rounded image-frame\"
                                                    id=\"uploadedAvatar\"
                                                    style=\"background-image: url({{ user.img ?: 'admin/assets/img/avatars/1.png' }}); background-size: cover; background-position: center;\">
                                                </div>
                                                <div class=\"button-wrapper\">
                                                    <label for=\"upload\" class=\"btn  me-3 mb-4\" tabindex=\"0\" style=\"background-color: #ADC29B; color: white;\">
                                                        <span class=\"d-none d-sm-block\">Upload new photo</span>
                                                        <i class=\"icon-base bx bx-upload d-block d-sm-none\"></i>
                                                        <input
                                                            type=\"file\"
                                                            id=\"upload\"
                                                            class=\"account-file-input\"
                                                            name=\"fileInput\"
                                                            hidden
                                                            accept=\"image/*\" />
                                                    </label>
                                                    <button 
                                                    type=\"button\" 
                                                    class=\"btn btn-outline-secondary account-image-reset mb-4\" 
                                                    style=\"border-color: #ADC29B; color: #ADC29B; transition: background-color 0.3s, color 0.3s;\"
                                                    onmouseover=\"this.style.backgroundColor='#ADC29B'; this.style.color='white';\"
                                                    onmouseout=\"this.style.backgroundColor=''; this.style.color='#ADC29B';\">
                                                    <i class=\"icon-base bx bx-reset d-block d-sm-none\"></i>
                                                    <span class=\"d-none d-sm-block\">Reset</span>
                                                </button>
                                                </div>
                                            </div>

                                            <div class=\"row g-6\">
                                                <!-- First Name -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"firstName\" class=\"form-label\">First Name</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"text\"
                                                        id=\"firstName\"
                                                        name=\"firstName\"
                                                        value=\"{{ user.firstName }}\"
                                                        required />
                                                </div>

                                                <!-- Last Name -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"lastName\" class=\"form-label\">Last Name</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"text\"
                                                        id=\"lastName\"
                                                        name=\"lastName\"
                                                        value=\"{{ user.lastName }}\"
                                                        required />
                                                </div>

                                                <!-- Date of Birth -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"dateOfBirth\" class=\"form-label\">Date of Birth</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"date\"
                                                        id=\"dateOfBirth\"
                                                        name=\"dateOfBirth\"
                                                        value=\"{{ user.dateNaissance|date('Y-m-d') }}\"
                                                        required />
                                                </div>

                                                <!-- CIN -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"cin\" class=\"form-label\">CIN</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"text\"
                                                        id=\"cin\"
                                                        name=\"cin\"
                                                        value=\"{{ user.cin }}\"
                                                        required />
                                                </div>

                                                <!-- Phone Number -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"phoneNumber\" class=\"form-label\">Phone Number</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"text\"
                                                        id=\"phoneNumber\"
                                                        name=\"phoneNumber\"
                                                        value=\"{{ user.numTlf }}\"
                                                        required />
                                                </div>

                                                <!-- Email -->
                                                <div class=\"col-md-6\">
                                                    <label for=\"email\" class=\"form-label\">E-mail</label>
                                                    <input
                                                        class=\"form-control\"
                                                        type=\"email\"
                                                        id=\"email\"
                                                        name=\"email\"
                                                        value=\"{{ user.email }}\"
                                                        required />
                                                </div>
                                            </div>

                                            <div class=\"mt-6\">
                                                <button type=\"submit\" class=\"btn  me-3\"style=\"background-color: #ADC29B; color: white;\">Save changes</button>
                                                <button 
                                                        type=\"reset\" 
                                                        class=\"btn btn-outline-secondary\" 
                                                        style=\"border-color: #ADC29B; color: #ADC29B; transition: background-color 0.3s, color 0.3s;\"
                                                        onmouseover=\"this.style.backgroundColor='#ADC29B'; this.style.color='white';\"
                                                        onmouseout=\"this.style.backgroundColor=''; this.style.color='#ADC29B';\">
                                                        Cancel
                                                    </button>
                                            </div>
                                        </form>
                                        {% else %}
                                        <div class=\"alert alert-danger\">
                                            <strong>Error:</strong> User data is not available. Please log in again.
                                        </div>
                                        {% endif %}
                                    </div>
                                    <!-- /Account -->
                                </div>
                                <div class=\"card\">
                                  <h5 class=\"card-header\">Delete Account</h5>
                                  <div class=\"card-body\">
                                    <div class=\"mb-6 col-12 mb-0\">
                                      <div class=\"alert alert-warning\">
                                        <h5 class=\"alert-heading mb-1\">Are you sure you want to delete your account?</h5>
                                        <p class=\"mb-0\">Once you delete your account, there is no going back. Please be certain.</p>
                                      </div>
                                    </div>
                                    <form id=\"formAccountDeactivation\" method=\"post\" action=\"{{ path('app_delete_account_back') }}\" onsubmit=\"return validateAccountDeletion();\">
                                      <div class=\"form-check my-8 ms-2\">
                                        <input
                                            class=\"form-check-input\"
                                            type=\"checkbox\"
                                            name=\"accountActivation\"
                                            id=\"accountActivation\"
                                            style=\"accent-color: #ADC29B !important;\" />
                                        <label 
                                            class=\"form-check-label\" 
                                            for=\"accountActivation\">
                                           
                                            I confirm my account Deletion
                                        </label>
                                    </div>
                                      <button type=\"submit\" class=\"btn btn-danger deactivate-account\">Delete Account</button>
                                  </form>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

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
                                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color : #844062\">Eventify</a>
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
    <!-- Flatpickr JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
   
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr(\"#dateOfBirth\", {
                dateFormat: \"Y-m-d\", // Format jj/mm/aaaa
                maxDate: \"2007-12-31\", // Dernière date autorisée
                defaultDate: \"{{ user.dateNaissance|date('Y-m-d') }}\", // Date par défaut
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
   
   
    <!--script pour ouvrir gallery-->
    <script>
        document.getElementById('upload').addEventListener('change', function (event) {
            const file = event.target.files[0]; // Récupérer le fichier sélectionné
            if (file) {
                const reader = new FileReader(); // Utiliser FileReader pour lire le fichier
                reader.onload = function (e) {
                    const uploadedAvatar = document.getElementById('uploadedAvatar');
                    uploadedAvatar.style.backgroundImage = `url('\${e.target.result}')`; // Mettre à jour l'image
                };
                reader.readAsDataURL(file); // Lire le fichier comme une URL de données
            }
        });

        // Bouton Reset pour réinitialiser l'image par défaut
        document.querySelector('.account-image-reset').addEventListener('click', function () {
            const uploadedAvatar = document.getElementById('uploadedAvatar');
            uploadedAvatar.style.backgroundImage = \"url('admin/assets/img/avatars/1.png')\"; // Réinitialiser l'image par défaut
            document.getElementById('upload').value = ''; // Réinitialiser l'input file
        });
    </script>
</body>
{% endblock %}", "profile/profileBack.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\profile\\profileBack.html.twig");
    }
}
