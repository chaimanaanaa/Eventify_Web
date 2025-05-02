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

/* offers/afecterOffreAi.html.twig */
class __TwigTemplate_547e1b12935de5371f755bb3195bca0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/afecterOffreAi.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/afecterOffreAi.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "offers/afecterOffreAi.html.twig", 1);
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
    <script type=\"module\" src=\"https://unpkg.com/@splinetool/viewer@1.9.82/build/spline-viewer.js\"></script>

    <style>
        /* Slide-in animations */
        @keyframes slideInFromLeft {
            from { opacity: 0; transform: translateX(-100px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInFromRight {
            from { opacity: 0; transform: translateX(100px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* Hover effect for organizer card */
        .card-organisateur:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            perspective: 1000px;
            overflow: visible;
        }

        .card-organisateur img {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            transform-style: preserve-3d;
        }

        .card-organisateur:hover img {
            transform: translateY(-80px) scale(1.05) rotateX(8deg);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        /* Hover effect for AI card */
        .card-ai:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Animation on page load */
        .slide-in-left {
            animation: slideInFromLeft 1.5s ease forwards;
        }

        .slide-in-right {
            animation: slideInFromRight 1.5s ease forwards;
        }

        /* Assign button */
        .BtnAffecter {
            background-color: #007BFF;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .BtnAffecter:hover {
            transform: translateY(-5px);
            background-color: #0056b3;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Confirmation Modal -->
    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to assign this organizer to this offer?</p>
            <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
            <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
        </div>
    </div>
    <div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

    <!-- Success Modal -->
    <div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Offer assigned successfully!</p>
            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>
    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

    <!-- Error Modal -->
    <div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while assigning this offer.</p>
            <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>
    <div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <div class=\"layout-page\">
                <div class=\"content-wrapper\">
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <h1 style=\"color:#844062;\"><i>AI-Based Assignment</i></h1>
                        <div style=\"height:200px;\">
                            <spline-viewer url=\"https://prod.spline.design/vWNhmSs7Y-ImMLkL/scene.splinecode\"></spline-viewer>
                        </div>

                        <!-- Two-column layout -->
                        <div class=\"row\">
                            <!-- Left Container: Organizer Information -->
                            <div class=\"col-lg-6 mb-4 slide-in-left\">
                                <div class=\"card h-100 card-organisateur\">
                                    <div class=\"card-body\">
                                        ";
        // line 120
        if ((isset($context["noMatch"]) || array_key_exists("noMatch", $context) ? $context["noMatch"] : (function () { throw new RuntimeError('Variable "noMatch" does not exist.', 120, $this->source); })())) {
            // line 121
            yield "                                            <p style=\"color: orange; text-align: center;\"><strong>No organizer matches this offer.</strong></p>
                                        ";
        } elseif (        // line 122
(isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 122, $this->source); })())) {
            // line 123
            yield "                                            <ul class=\"list-unstyled\">
                                                <li><center><img src=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 124, $this->source); })()), "getImageOrg", [], "method", false, false, false, 124)), "html", null, true);
            yield "\" alt=\"Photo de l'organisateur\" class=\"img-fluid rounded-circle mb-3\" style=\"width: 300px;height:300px;\" /></center></li>
                                                <li><strong>Name:</strong> ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 125, $this->source); })()), "nomOrg", [], "any", false, false, false, 125), "html", null, true);
            yield "</li>
                                                <li><strong>Surname:</strong> ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 126, $this->source); })()), "prenomOrg", [], "any", false, false, false, 126), "html", null, true);
            yield "</li>
                                                <li><strong>Email:</strong> ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 127, $this->source); })()), "emailOrg", [], "any", false, false, false, 127), "html", null, true);
            yield "</li>
                                                <li><strong>Phone Number:</strong> ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 128, $this->source); })()), "getNumTel", [], "method", false, false, false, 128), "html", null, true);
            yield "</li>
                                                <li><strong>Specialty:</strong> ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 129, $this->source); })()), "specialite", [], "any", false, false, false, 129), "html", null, true);
            yield "</li>
                                                <li><strong>Experience:</strong> ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 130, $this->source); })()), "nbexp", [], "any", false, false, false, 130), "html", null, true);
            yield " years</li>
                                                <li><strong>City:</strong> ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 131, $this->source); })()), "getCity", [], "method", false, false, false, 131), "html", null, true);
            yield "</li>
                                                <li><strong>Salary:</strong> ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 132, $this->source); })()), "salaire", [], "any", false, false, false, 132), "html", null, true);
            yield " €</li>
                                                <li><strong>Languages:</strong> ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 133, $this->source); })()), "longuage", [], "any", false, false, false, 133), "html", null, true);
            yield "</li>
                                                <li><strong>Employment:</strong> ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 134, $this->source); })()), "getEmployment", [], "method", false, false, false, 134), "html", null, true);
            yield "</li>
                                                <li><strong>Skills:</strong> ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 135, $this->source); })()), "skills", [], "any", false, false, false, 135), "html", null, true);
            yield "</li>
                                                <li><strong>Status:</strong> ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 136, $this->source); })()), "getStatut", [], "method", false, false, false, 136), "html", null, true);
            yield "</li>
                                            </ul>
                                            <center><button class=\"BtnAffecter\" id=\"assignButton\">Assign</button></center>
                                        ";
        } else {
            // line 140
            yield "                                            <p style=\"color: red; text-align: center;\">Recommended organizer not found.</p>
                                        ";
        }
        // line 142
        yield "                                    </div>
                                </div>
                            </div>

                            <!-- Right Container: AI Response -->
                            <div class=\"col-lg-6 mb-4 slide-in-right\">
                                <div class=\"card h-100 card-ai\">
                                    <div class=\"card-header d-flex align-items-center justify-content-between\">
                                        <h5 class=\"card-title m-0 me-2\">AI Response</h5>
                                    </div>
                                    <div class=\"card-body\" style=\"max-height: 600px; overflow-y: auto;\">
                                        <pre id=\"ai-response\" style=\"background-color: #f4f4f4; padding: 10px; white-space: pre-wrap;\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reponseIA"]) || array_key_exists("reponseIA", $context) ? $context["reponseIA"] : (function () { throw new RuntimeError('Variable "reponseIA" does not exist.', 153, $this->source); })()));
        yield "</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Two-column layout -->
                    </div>

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                                <div class=\"mb-2 mb-md-0\">
                                    © <script>document.write(new Date().getFullYear());</script>, made with ❤️ by
                                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062;\">Eventify</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                </div>
            </div>
        </div>
        <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>

    <!-- Core JS -->
    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>
    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>
    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"admin/assets/vendor/js/menu.js\"></script>
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>
    <script src=\"admin/assets/js/main.js\"></script>
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>

    <!-- Custom Script -->
    <script>
        // Typewriter effect for AI response
        function typeWriter(text, element, delay = 20) {
            let index = 0;
            element.textContent = ''; // Clear existing content
            const interval = setInterval(() => {
                if (index < text.length) {
                    element.textContent += text.charAt(index);
                    index++;
                } else {
                    clearInterval(interval);
                }
            }, delay);
        }

        // Initialize AI response animation
        document.addEventListener(\"DOMContentLoaded\", () => {
            const aiResponseText = \"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reponseIA"]) || array_key_exists("reponseIA", $context) ? $context["reponseIA"] : (function () { throw new RuntimeError('Variable "reponseIA" does not exist.', 208, $this->source); })()), "js"), "html", null, true);
        yield "\" || \"No response from AI.\";
            const aiResponseElement = document.getElementById(\"ai-response\");
            typeWriter(aiResponseText, aiResponseElement);
        });

        // Remove Spline viewer logo link
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                const splineViewer = document.querySelector('spline-viewer');
                const shadow = splineViewer?.shadowRoot;
                if (shadow) {
                    const logoLink = shadow.querySelector('a');
                    if (logoLink) {
                        logoLink.remove();
                        console.log('Lien supprimé.');
                    }
                } else {
                    console.log('Le shadow DOM est fermé.');
                }
            }, 1);
        });

        // Assign button logic
        document.addEventListener(\"DOMContentLoaded\", function () {
            const assignButton = document.getElementById(\"assignButton\");
            if (assignButton) { // Only attach listener if button exists
                assignButton.addEventListener(\"click\", async function (event) {
                    event.preventDefault();

                    // Show confirmation modal
                    const modal = document.getElementById(\"confirmationModal\");
                    const backdrop = document.getElementById(\"modalBackdrop\");
                    modal.style.display = \"block\";
                    backdrop.style.display = \"block\";

                    // Wait for user confirmation
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

                    if (!isConfirmed) return;

                    try {
                        const offreId = ";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 260, $this->source); })()), "id", [], "any", false, false, false, 260), "html", null, true);
        yield ";
                        const organisateurId = ";
        // line 261
        yield (((isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 261, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organisateurRecommande"]) || array_key_exists("organisateurRecommande", $context) ? $context["organisateurRecommande"] : (function () { throw new RuntimeError('Variable "organisateurRecommande" does not exist.', 261, $this->source); })()), "id", [], "any", false, false, false, 261), "html", null, true)) : ("null"));
        yield ";

                        const response = await fetch(`/offre/affecter/\${offreId}`, {
                            method: \"PUT\",
                            headers: {
                                \"Content-Type\": \"application/json\"
                            },
                            body: JSON.stringify({
                                organizerId: organisateurId,
                                _token: '";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("assign" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 270, $this->source); })()), "id", [], "any", false, false, false, 270))), "html", null, true);
        yield "'
                            })
                        });

                        const result = await response.json();

                        if (response.ok) {
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
                        errorBackdrop.style.display = \"none\";
                        document.getElementById(\"closeErrorModal\").onclick = () => {
                            errorModal.style.display = \"none\";
                            errorBackdrop.style.display = \"none\";
                        };
                    }
                });
            }
        });
    </script>
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
        return "offers/afecterOffreAi.html.twig";
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
        return array (  405 => 270,  393 => 261,  389 => 260,  334 => 208,  276 => 153,  263 => 142,  259 => 140,  252 => 136,  248 => 135,  244 => 134,  240 => 133,  236 => 132,  232 => 131,  228 => 130,  224 => 129,  220 => 128,  216 => 127,  212 => 126,  208 => 125,  204 => 124,  201 => 123,  199 => 122,  196 => 121,  194 => 120,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block content %}
<head>
    <script type=\"module\" src=\"https://unpkg.com/@splinetool/viewer@1.9.82/build/spline-viewer.js\"></script>

    <style>
        /* Slide-in animations */
        @keyframes slideInFromLeft {
            from { opacity: 0; transform: translateX(-100px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInFromRight {
            from { opacity: 0; transform: translateX(100px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* Hover effect for organizer card */
        .card-organisateur:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            perspective: 1000px;
            overflow: visible;
        }

        .card-organisateur img {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            transform-style: preserve-3d;
        }

        .card-organisateur:hover img {
            transform: translateY(-80px) scale(1.05) rotateX(8deg);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        /* Hover effect for AI card */
        .card-ai:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Animation on page load */
        .slide-in-left {
            animation: slideInFromLeft 1.5s ease forwards;
        }

        .slide-in-right {
            animation: slideInFromRight 1.5s ease forwards;
        }

        /* Assign button */
        .BtnAffecter {
            background-color: #007BFF;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .BtnAffecter:hover {
            transform: translateY(-5px);
            background-color: #0056b3;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Confirmation Modal -->
    <div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to assign this organizer to this offer?</p>
            <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
            <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
        </div>
    </div>
    <div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

    <!-- Success Modal -->
    <div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px;\">Offer assigned successfully!</p>
            <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>
    <div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

    <!-- Error Modal -->
    <div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
        <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
            <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while assigning this offer.</p>
            <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
        </div>
    </div>
    <div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <div class=\"layout-page\">
                <div class=\"content-wrapper\">
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <h1 style=\"color:#844062;\"><i>AI-Based Assignment</i></h1>
                        <div style=\"height:200px;\">
                            <spline-viewer url=\"https://prod.spline.design/vWNhmSs7Y-ImMLkL/scene.splinecode\"></spline-viewer>
                        </div>

                        <!-- Two-column layout -->
                        <div class=\"row\">
                            <!-- Left Container: Organizer Information -->
                            <div class=\"col-lg-6 mb-4 slide-in-left\">
                                <div class=\"card h-100 card-organisateur\">
                                    <div class=\"card-body\">
                                        {% if noMatch %}
                                            <p style=\"color: orange; text-align: center;\"><strong>No organizer matches this offer.</strong></p>
                                        {% elseif organisateurRecommande %}
                                            <ul class=\"list-unstyled\">
                                                <li><center><img src=\"{{ asset(organisateurRecommande.getImageOrg()) }}\" alt=\"Photo de l'organisateur\" class=\"img-fluid rounded-circle mb-3\" style=\"width: 300px;height:300px;\" /></center></li>
                                                <li><strong>Name:</strong> {{ organisateurRecommande.nomOrg }}</li>
                                                <li><strong>Surname:</strong> {{ organisateurRecommande.prenomOrg }}</li>
                                                <li><strong>Email:</strong> {{ organisateurRecommande.emailOrg }}</li>
                                                <li><strong>Phone Number:</strong> {{ organisateurRecommande.getNumTel() }}</li>
                                                <li><strong>Specialty:</strong> {{ organisateurRecommande.specialite }}</li>
                                                <li><strong>Experience:</strong> {{ organisateurRecommande.nbexp }} years</li>
                                                <li><strong>City:</strong> {{ organisateurRecommande.getCity() }}</li>
                                                <li><strong>Salary:</strong> {{ organisateurRecommande.salaire }} €</li>
                                                <li><strong>Languages:</strong> {{ organisateurRecommande.longuage }}</li>
                                                <li><strong>Employment:</strong> {{ organisateurRecommande.getEmployment() }}</li>
                                                <li><strong>Skills:</strong> {{ organisateurRecommande.skills }}</li>
                                                <li><strong>Status:</strong> {{ organisateurRecommande.getStatut() }}</li>
                                            </ul>
                                            <center><button class=\"BtnAffecter\" id=\"assignButton\">Assign</button></center>
                                        {% else %}
                                            <p style=\"color: red; text-align: center;\">Recommended organizer not found.</p>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>

                            <!-- Right Container: AI Response -->
                            <div class=\"col-lg-6 mb-4 slide-in-right\">
                                <div class=\"card h-100 card-ai\">
                                    <div class=\"card-header d-flex align-items-center justify-content-between\">
                                        <h5 class=\"card-title m-0 me-2\">AI Response</h5>
                                    </div>
                                    <div class=\"card-body\" style=\"max-height: 600px; overflow-y: auto;\">
                                        <pre id=\"ai-response\" style=\"background-color: #f4f4f4; padding: 10px; white-space: pre-wrap;\">{{ reponseIA|escape }}</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Two-column layout -->
                    </div>

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                                <div class=\"mb-2 mb-md-0\">
                                    © <script>document.write(new Date().getFullYear());</script>, made with ❤️ by
                                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062;\">Eventify</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                </div>
            </div>
        </div>
        <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>

    <!-- Core JS -->
    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>
    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>
    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"admin/assets/vendor/js/menu.js\"></script>
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>
    <script src=\"admin/assets/js/main.js\"></script>
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>

    <!-- Custom Script -->
    <script>
        // Typewriter effect for AI response
        function typeWriter(text, element, delay = 20) {
            let index = 0;
            element.textContent = ''; // Clear existing content
            const interval = setInterval(() => {
                if (index < text.length) {
                    element.textContent += text.charAt(index);
                    index++;
                } else {
                    clearInterval(interval);
                }
            }, delay);
        }

        // Initialize AI response animation
        document.addEventListener(\"DOMContentLoaded\", () => {
            const aiResponseText = \"{{ reponseIA|escape('js') }}\" || \"No response from AI.\";
            const aiResponseElement = document.getElementById(\"ai-response\");
            typeWriter(aiResponseText, aiResponseElement);
        });

        // Remove Spline viewer logo link
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                const splineViewer = document.querySelector('spline-viewer');
                const shadow = splineViewer?.shadowRoot;
                if (shadow) {
                    const logoLink = shadow.querySelector('a');
                    if (logoLink) {
                        logoLink.remove();
                        console.log('Lien supprimé.');
                    }
                } else {
                    console.log('Le shadow DOM est fermé.');
                }
            }, 1);
        });

        // Assign button logic
        document.addEventListener(\"DOMContentLoaded\", function () {
            const assignButton = document.getElementById(\"assignButton\");
            if (assignButton) { // Only attach listener if button exists
                assignButton.addEventListener(\"click\", async function (event) {
                    event.preventDefault();

                    // Show confirmation modal
                    const modal = document.getElementById(\"confirmationModal\");
                    const backdrop = document.getElementById(\"modalBackdrop\");
                    modal.style.display = \"block\";
                    backdrop.style.display = \"block\";

                    // Wait for user confirmation
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

                    if (!isConfirmed) return;

                    try {
                        const offreId = {{ offer.id }};
                        const organisateurId = {{ organisateurRecommande ? organisateurRecommande.id : 'null' }};

                        const response = await fetch(`/offre/affecter/\${offreId}`, {
                            method: \"PUT\",
                            headers: {
                                \"Content-Type\": \"application/json\"
                            },
                            body: JSON.stringify({
                                organizerId: organisateurId,
                                _token: '{{ csrf_token('assign' ~ offer.id) }}'
                            })
                        });

                        const result = await response.json();

                        if (response.ok) {
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
                        errorBackdrop.style.display = \"none\";
                        document.getElementById(\"closeErrorModal\").onclick = () => {
                            errorModal.style.display = \"none\";
                            errorBackdrop.style.display = \"none\";
                        };
                    }
                });
            }
        });
    </script>
</body>
</html>
{% endblock %}", "offers/afecterOffreAi.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\offers\\afecterOffreAi.html.twig");
    }
}
