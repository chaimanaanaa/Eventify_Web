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

/* organizers/modifierOrganisateurBack.html.twig */
class __TwigTemplate_63aaed02704ae49d814c79b246a54d18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organizers/modifierOrganisateurBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organizers/modifierOrganisateurBack.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "organizers/modifierOrganisateurBack.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/organisateur.css"), "html", null, true);
        yield "\">
</head>
<body>
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <div class=\"layout-page\">
                <div class=\"content-wrapper\">
                    <!-- Modale de confirmation -->
                    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
                        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
                            <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to modify this organizer?</p>
                            <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
                            <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
                        </div>
                    </div>
                    <div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

                    <!-- Modale de succès -->
                    <div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
                        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
                            <p style=\"font-size: 16px; margin-bottom: 15px;\">Organizer modified successfully!</p>
                            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
                        </div>
                    </div>
                    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

                    <!-- Modale d'erreur -->
                    <div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
                        <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
                            <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while modifying the organizer.</p>
                            <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
                        </div>
                    </div>
                    <div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

                    <!-- Bouton de retour -->
                    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_organizersBack");
        yield "\">
                        <img 
                            src=\"filesOrganisateur/imageOrganisateur/retoureFlecheOr.png\" 
                            alt=\"Retour\" 
                            style=\"z-index: 9999; position: absolute; top: 75px; left: 300px; width: 30px; height: 30px; transition: transform 0.3s ease;\"
                            onmouseover=\"this.style.transform='scale(1.2)';\" 
                            onmouseout=\"this.style.transform='scale(1)';\"
                        >
                    </a>

                    <!-- Formulaire -->
                    <div class=\"form-container\" style=\"width:900px;\">
                        <h2 style=\"text-align: center; margin-bottom: 20px;font-weight:bold;color:black;font-Family:Calibri;\">Organizer CV</h2>

                        <!-- Données organisateur -->
                        <div id=\"organizerData\"
                            data-employment=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["organisateur"] ?? null), "getEmployment", [], "method", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 57, $this->source); })()), "getEmployment", [], "method", false, false, false, 57), "")) : ("")), "html", null, true);
        yield "\"
                            data-languages=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["organisateur"] ?? null), "getLonguage", [], "method", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 58, $this->source); })()), "getLonguage", [], "method", false, false, false, 58), "")) : ("")), "html", null, true);
        yield "\"
                            data-skills=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["organisateur"] ?? null), "getSkills", [], "method", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 59, $this->source); })()), "getSkills", [], "method", false, false, false, 59), "")) : ("")), "html", null, true);
        yield "\"
                            data-id-org=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 60, $this->source); })()), "getId", [], "method", false, false, false, 60), "html", null, true);
        yield "\">
                        </div>

                        <!-- Personal Details -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Personal details :</h3>
                            <div style=\"display: flex; flex-direction: column; align-items: center; margin-bottom: 20px;\">
                                <img src=\"";
        // line 67
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 67, $this->source); })()), "getImageOrg", [], "method", false, false, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 67, $this->source); })()), "getImageOrg", [], "method", false, false, false, 67)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/imageOrganisateur/1.jpg"), "html", null, true)));
        yield "\" alt=\"Upload Photo\" class=\"profile-image\">
                                <button class=\"custom-button\" style=\"margin-top: 10px; margin-bottom:20px;\" id=\"uploadPhotoButton\">Photo</button>
                                <input type=\"file\" id=\"imageUpload\" accept=\"image/*\" style=\"display: none;\">
                            </div>
                            <label for=\"nomOrg\">Given Name</label>
                            <input type=\"text\" id=\"nomOrg\" name=\"nom_org\" placeholder=\"Given Name\" value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 72, $this->source); })()), "getNomOrg", [], "method", false, false, false, 72), "html", null, true);
        yield "\"><br><br>

                            <label for=\"prenomOrg\">Family Name</label>
                            <input type=\"text\" id=\"prenomOrg\" name=\"prenom_org\" placeholder=\"Family Name\" value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 75, $this->source); })()), "getPrenomOrg", [], "method", false, false, false, 75), "html", null, true);
        yield "\"><br><br>

                            <label for=\"emailOrg\">Email Address</label>
                            <input type=\"email\" id=\"emailOrg\" name=\"email_org\" placeholder=\"Email Address\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 78, $this->source); })()), "getEmailOrg", [], "method", false, false, false, 78), "html", null, true);
        yield "\"><br><br>

                            <label for=\"numOrg\">Phone Number</label>
                            <input type=\"text\" id=\"numOrg\" name=\"num_tel\" placeholder=\"Phone Number\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 81, $this->source); })()), "getNumTel", [], "method", false, false, false, 81), "html", null, true);
        yield "\"><br><br>

                            <label for=\"city\">City</label>
                            <input type=\"text\" id=\"city\" name=\"city\" placeholder=\"City\" value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 84, $this->source); })()), "getCity", [], "method", false, false, false, 84), "html", null, true);
        yield "\"><br><br>

                            <label for=\"date_naissance\">Birth Date</label>
                            <input type=\"date\" id=\"date_naissance\" name=\"date_naissance\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 87, $this->source); })()), "getDateNaissance", [], "method", false, false, false, 87), "html", null, true);
        yield "\"><br><br>
                        </div>

                        <!-- Employment -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Employment :</h3>
                            <div style=\"display: flex; justify-content: space-between; margin-bottom: 10px;\">
                                <label style=\"font-weight: bold;\">Add Employment</label>
                                <button id=\"addEmploymentButton\" class=\"add-button\">+</button>
                            </div>
                            <div id=\"employmentContainer\"></div>
                            <div id=\"employmentInputContainer\" class=\"input-container\">
                                <input type=\"text\" id=\"employmentInput\" placeholder=\"Enter employment type\">
                                <button class=\"add-button\" id=\"addEmployment\">Add</button>
                                <button class=\"cancel-button\" id=\"cancelEmployment\">Cancel</button>
                            </div>
                        </div>

                        <!-- Langues -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Langues :</h3>
                            <div style=\"display: flex; justify-content: space-between; margin-bottom: 10px;\">
                                <label style=\"font-weight: bold;\">Add Langues</label>
                                <button id=\"addLanguageButton\" class=\"add-button\">+</button>
                            </div>
                            <div id=\"languageContainer\"></div>
                            <div id=\"languageInputContainer\" class=\"input-container\">
                                <input type=\"text\" id=\"languageInput\" placeholder=\"Enter language\">
                                <button class=\"add-button\" id=\"addLanguage\">Add</button>
                                <button class=\"cancel-button\" id=\"cancelLanguage\">Cancel</button>
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Skills :</h3>
                            <div style=\"display: flex; justify-content: space-between; margin-bottom: 10px;\">
                                <label style=\"font-weight: bold;\">Add Skills</label>
                                <button id=\"addSkillButton\" class=\"add-button\">+</button>
                            </div>
                            <div id=\"skillContainer\"></div>
                            <div id=\"skillInputContainer\" class=\"input-container\">
                                <input type=\"text\" id=\"skillInput\" placeholder=\"Enter a skill\">
                                <button class=\"add-button\" id=\"addSkill\">Add</button>
                                <button class=\"cancel-button\" id=\"cancelSkill\">Cancel</button>
                            </div>
                        </div>

                        <!-- Professional Background -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Professional Background :</h3>
                            <label for=\"specialiteCombo\">Speciality</label>
                            <select id=\"specialiteCombo\" name=\"specialite\">
                                <option value=\"\">Select Speciality</option>
                                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specialites"]) || array_key_exists("specialites", $context) ? $context["specialites"] : (function () { throw new RuntimeError('Variable "specialites" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
            // line 142
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["specialite"], "html", null, true);
            yield "\" ";
            if (($context["specialite"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 142, $this->source); })()), "getSpecialite", [], "method", false, false, false, 142))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["specialite"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['specialite'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "                            </select><br><br>

                            <label for=\"dateExp\">Years Of Experience</label>
                            <input type=\"date\" id=\"dateExp\" onchange=\"calculateExperience()\">
                            <input type=\"text\" id=\"nbExp\" name=\"nbexp\" placeholder=\"Years of Experience\" readonly value=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 148, $this->source); })()), "getNbexp", [], "method", false, false, false, 148), "html", null, true);
        yield "\"><br><br>
                        </div>

                        <!-- Employment-related Information -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Employment-related Information :</h3>
                            <label for=\"salaire\">Salary</label>
                            <input type=\"text\" id=\"salaire\" name=\"salaire\" placeholder=\"Salary\" value=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 155, $this->source); })()), "getSalaire", [], "method", false, false, false, 155), "html", null, true);
        yield "\"><br><br>

                            <label for=\"dateEmbauche\">Hiring Date</label>
                            <input type=\"date\" id=\"dateEmbauche\" name=\"date_embauche\" value=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 158, $this->source); })()), "getDateEmbauche", [], "method", false, false, false, 158), "html", null, true);
        yield "\"><br><br>

                            <label for=\"stateFilter\">State:</label>
                            <select name=\"state\" id=\"stateFilter\">
                                <option value=\"Available\" ";
        // line 162
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 162, $this->source); })()), "getStatut", [], "method", false, false, false, 162) == "Available")) {
            yield "selected";
        }
        yield ">Available</option>
                                <option value=\"Not available\" ";
        // line 163
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateur"]) || array_key_exists("organisateur", $context) ? $context["organisateur"] : (function () { throw new RuntimeError('Variable "organisateur" does not exist.', 163, $this->source); })()), "getStatut", [], "method", false, false, false, 163) == "Not available")) {
            yield "selected";
        }
        yield ">Not available</option>
                            </select><br><br>
                        </div>

                        <!-- Boutons -->
                        <div style=\"display: flex; justify-content: center; gap: 20px; margin-top: 20px;\">
                            <button class=\"submit-button\" id=\"AddOrganizer\">Modify</button>
                            <button class=\"submit-button\" id=\"handleClear\">Clear</button>
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                                <div class=\"mb-2 mb-md-0\">
                                    © <script>document.write(new Date().getFullYear());</script>, made with ❤️ by
                                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062\">Eventify</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>
    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/js/bootstrap.js\"></script>
    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"admin/assets/vendor/js/menu.js\"></script>
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>
    <script src=\"admin/assets/js/main.js\"></script>
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <script src=\"filesOrganisateur/modifierOrganisateur2.js\"></script>
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
        return "organizers/modifierOrganisateurBack.html.twig";
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
        return array (  308 => 163,  302 => 162,  295 => 158,  289 => 155,  279 => 148,  273 => 144,  258 => 142,  254 => 141,  197 => 87,  191 => 84,  185 => 81,  179 => 78,  173 => 75,  167 => 72,  159 => 67,  149 => 60,  145 => 59,  141 => 58,  137 => 57,  118 => 41,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block content %}
<head>
    <link rel=\"stylesheet\" href=\"{{ asset('filesOrganisateur/organisateur.css') }}\">
</head>
<body>
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <div class=\"layout-page\">
                <div class=\"content-wrapper\">
                    <!-- Modale de confirmation -->
                    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
                        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
                            <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to modify this organizer?</p>
                            <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
                            <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
                        </div>
                    </div>
                    <div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

                    <!-- Modale de succès -->
                    <div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
                        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
                            <p style=\"font-size: 16px; margin-bottom: 15px;\">Organizer modified successfully!</p>
                            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
                        </div>
                    </div>
                    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

                    <!-- Modale d'erreur -->
                    <div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
                        <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
                            <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while modifying the organizer.</p>
                            <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
                        </div>
                    </div>
                    <div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

                    <!-- Bouton de retour -->
                    <a href=\"{{ path('app_organizersBack') }}\">
                        <img 
                            src=\"filesOrganisateur/imageOrganisateur/retoureFlecheOr.png\" 
                            alt=\"Retour\" 
                            style=\"z-index: 9999; position: absolute; top: 75px; left: 300px; width: 30px; height: 30px; transition: transform 0.3s ease;\"
                            onmouseover=\"this.style.transform='scale(1.2)';\" 
                            onmouseout=\"this.style.transform='scale(1)';\"
                        >
                    </a>

                    <!-- Formulaire -->
                    <div class=\"form-container\" style=\"width:900px;\">
                        <h2 style=\"text-align: center; margin-bottom: 20px;font-weight:bold;color:black;font-Family:Calibri;\">Organizer CV</h2>

                        <!-- Données organisateur -->
                        <div id=\"organizerData\"
                            data-employment=\"{{ organisateur.getEmployment() | default('') }}\"
                            data-languages=\"{{ organisateur.getLonguage() | default('') }}\"
                            data-skills=\"{{ organisateur.getSkills() | default('') }}\"
                            data-id-org=\"{{ organisateur.getId() }}\">
                        </div>

                        <!-- Personal Details -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Personal details :</h3>
                            <div style=\"display: flex; flex-direction: column; align-items: center; margin-bottom: 20px;\">
                                <img src=\"{{ organisateur.getImageOrg() ? asset(organisateur.getImageOrg()) : asset('filesOrganisateur/imageOrganisateur/1.jpg') }}\" alt=\"Upload Photo\" class=\"profile-image\">
                                <button class=\"custom-button\" style=\"margin-top: 10px; margin-bottom:20px;\" id=\"uploadPhotoButton\">Photo</button>
                                <input type=\"file\" id=\"imageUpload\" accept=\"image/*\" style=\"display: none;\">
                            </div>
                            <label for=\"nomOrg\">Given Name</label>
                            <input type=\"text\" id=\"nomOrg\" name=\"nom_org\" placeholder=\"Given Name\" value=\"{{ organisateur.getNomOrg() }}\"><br><br>

                            <label for=\"prenomOrg\">Family Name</label>
                            <input type=\"text\" id=\"prenomOrg\" name=\"prenom_org\" placeholder=\"Family Name\" value=\"{{ organisateur.getPrenomOrg() }}\"><br><br>

                            <label for=\"emailOrg\">Email Address</label>
                            <input type=\"email\" id=\"emailOrg\" name=\"email_org\" placeholder=\"Email Address\" value=\"{{ organisateur.getEmailOrg() }}\"><br><br>

                            <label for=\"numOrg\">Phone Number</label>
                            <input type=\"text\" id=\"numOrg\" name=\"num_tel\" placeholder=\"Phone Number\" value=\"{{ organisateur.getNumTel() }}\"><br><br>

                            <label for=\"city\">City</label>
                            <input type=\"text\" id=\"city\" name=\"city\" placeholder=\"City\" value=\"{{ organisateur.getCity() }}\"><br><br>

                            <label for=\"date_naissance\">Birth Date</label>
                            <input type=\"date\" id=\"date_naissance\" name=\"date_naissance\" value=\"{{ organisateur.getDateNaissance() }}\"><br><br>
                        </div>

                        <!-- Employment -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Employment :</h3>
                            <div style=\"display: flex; justify-content: space-between; margin-bottom: 10px;\">
                                <label style=\"font-weight: bold;\">Add Employment</label>
                                <button id=\"addEmploymentButton\" class=\"add-button\">+</button>
                            </div>
                            <div id=\"employmentContainer\"></div>
                            <div id=\"employmentInputContainer\" class=\"input-container\">
                                <input type=\"text\" id=\"employmentInput\" placeholder=\"Enter employment type\">
                                <button class=\"add-button\" id=\"addEmployment\">Add</button>
                                <button class=\"cancel-button\" id=\"cancelEmployment\">Cancel</button>
                            </div>
                        </div>

                        <!-- Langues -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Langues :</h3>
                            <div style=\"display: flex; justify-content: space-between; margin-bottom: 10px;\">
                                <label style=\"font-weight: bold;\">Add Langues</label>
                                <button id=\"addLanguageButton\" class=\"add-button\">+</button>
                            </div>
                            <div id=\"languageContainer\"></div>
                            <div id=\"languageInputContainer\" class=\"input-container\">
                                <input type=\"text\" id=\"languageInput\" placeholder=\"Enter language\">
                                <button class=\"add-button\" id=\"addLanguage\">Add</button>
                                <button class=\"cancel-button\" id=\"cancelLanguage\">Cancel</button>
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Skills :</h3>
                            <div style=\"display: flex; justify-content: space-between; margin-bottom: 10px;\">
                                <label style=\"font-weight: bold;\">Add Skills</label>
                                <button id=\"addSkillButton\" class=\"add-button\">+</button>
                            </div>
                            <div id=\"skillContainer\"></div>
                            <div id=\"skillInputContainer\" class=\"input-container\">
                                <input type=\"text\" id=\"skillInput\" placeholder=\"Enter a skill\">
                                <button class=\"add-button\" id=\"addSkill\">Add</button>
                                <button class=\"cancel-button\" id=\"cancelSkill\">Cancel</button>
                            </div>
                        </div>

                        <!-- Professional Background -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Professional Background :</h3>
                            <label for=\"specialiteCombo\">Speciality</label>
                            <select id=\"specialiteCombo\" name=\"specialite\">
                                <option value=\"\">Select Speciality</option>
                                {% for specialite in specialites %}
                                    <option value=\"{{ specialite }}\" {% if specialite == organisateur.getSpecialite() %}selected{% endif %}>{{ specialite }}</option>
                                {% endfor %}
                            </select><br><br>

                            <label for=\"dateExp\">Years Of Experience</label>
                            <input type=\"date\" id=\"dateExp\" onchange=\"calculateExperience()\">
                            <input type=\"text\" id=\"nbExp\" name=\"nbexp\" placeholder=\"Years of Experience\" readonly value=\"{{ organisateur.getNbexp() }}\"><br><br>
                        </div>

                        <!-- Employment-related Information -->
                        <div class=\"titled-pane\">
                            <h3 style=\"font-weight:bold;color:#844062;\">Employment-related Information :</h3>
                            <label for=\"salaire\">Salary</label>
                            <input type=\"text\" id=\"salaire\" name=\"salaire\" placeholder=\"Salary\" value=\"{{ organisateur.getSalaire() }}\"><br><br>

                            <label for=\"dateEmbauche\">Hiring Date</label>
                            <input type=\"date\" id=\"dateEmbauche\" name=\"date_embauche\" value=\"{{ organisateur.getDateEmbauche() }}\"><br><br>

                            <label for=\"stateFilter\">State:</label>
                            <select name=\"state\" id=\"stateFilter\">
                                <option value=\"Available\" {% if organisateur.getStatut() == 'Available' %}selected{% endif %}>Available</option>
                                <option value=\"Not available\" {% if organisateur.getStatut() == 'Not available' %}selected{% endif %}>Not available</option>
                            </select><br><br>
                        </div>

                        <!-- Boutons -->
                        <div style=\"display: flex; justify-content: center; gap: 20px; margin-top: 20px;\">
                            <button class=\"submit-button\" id=\"AddOrganizer\">Modify</button>
                            <button class=\"submit-button\" id=\"handleClear\">Clear</button>
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                                <div class=\"mb-2 mb-md-0\">
                                    © <script>document.write(new Date().getFullYear());</script>, made with ❤️ by
                                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062\">Eventify</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>
    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/js/bootstrap.js\"></script>
    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"admin/assets/vendor/js/menu.js\"></script>
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>
    <script src=\"admin/assets/js/main.js\"></script>
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <script src=\"filesOrganisateur/modifierOrganisateur2.js\"></script>
</body>
</html>
{% endblock %}", "organizers/modifierOrganisateurBack.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\organizers\\modifierOrganisateurBack.html.twig");
    }
}
