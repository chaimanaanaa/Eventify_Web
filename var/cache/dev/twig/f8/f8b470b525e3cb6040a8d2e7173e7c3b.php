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

/* offers/ajouterOffreFront.html.twig */
class __TwigTemplate_8ebcb64559d527fed1bdd15848456867 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/ajouterOffreFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offers/ajouterOffreFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offers/ajouterOffreFront.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/offre.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
</head>

<body>
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                <h1 class=\"text-white mb-4 pb-2\">Submit Your Requests</h1>
                <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ConsulterYourRequest");
        yield "\" class=\"btn custom-btn smoothscroll me-3 actionBtn\">Manage Your Requests</a>
            </div>
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
</section>

<div style=\"height: 100px;background-color:white;\"></div>

";
        // line 44
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 49
        yield "
<a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_organizers");
        yield "\">
    <img 
        src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/imageOrganisateur/retoureFlecheOr.png"), "html", null, true);
        yield "\" 
        alt=\"Retour\" 
        style=\"
            z-index: 9999; 
            position: absolute; 
            top: 500px; 
            left: 100px; 
            width: 30px; 
            height: 30px;
            transition: transform 0.3s ease;\"
        onmouseover=\"this.style.transform='scale(1.2)';\" 
        onmouseout=\"this.style.transform='scale(1)';\"
    >
</a>

<!-- Modale de confirmation -->
<div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to add this offer?</p>
        <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
        <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
    </div>
</div>
<div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale de succès -->
<div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px;\">Offer added successfully!</p>
        <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale d'erreur -->
<div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while adding the offer.</p>
        <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<div class=\"custom-container\">
    <form method=\"POST\" class=\"custom-form\">
        <div class=\"custom-row\">
            <!-- Left Column -->
            <div class=\"custom-column\">
                <div class=\"custom-field\">
                    <label for=\"objet\" class=\"custom-label\">Request Subject:</label>
                    <input type=\"text\" id=\"objet\" name=\"objet\" class=\"custom-input\" placeholder=\"Enter Subject\">
                </div>

                <div class=\"custom-field\">
                    <div class=\"custom-flex\">
                        <label for=\"description\" class=\"custom-label\" style=\"background-color:transparent\">Description:</label>
                        <button type=\"button\" id=\"aiGenerateButton\" class=\"custom-button custom-button-secondary actionBtn\" style=\"padding: 0; border: none; background: none;\">
                            <img src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/imageOrganisateur/robot.png"), "html", null, true);
        yield "\" 
                                 id=\"aiRobotImage\"
                                 alt=\"Generate with AI\" 
                                 style=\"width: 50px; height: 50px; vertical-align: middle; transition: transform 0.3s ease;\"
                                 title=\"Generate with AI\">
                        </button>
                    </div>
                    <textarea id=\"description\" name=\"description\" class=\"custom-textarea\" rows=\"6\" placeholder=\"Enter Description\"></textarea>
                </div>

                <div class=\"custom-field\">
                    <label for=\"type_evenement\" class=\"custom-label\">Event Type:</label>
                    <select id=\"type_evenement\" name=\"type_evenement\" class=\"custom-select\">
                        <option value=\"\">Select Speciality</option>
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specialites"]) || array_key_exists("specialites", $context) ? $context["specialites"] : (function () { throw new RuntimeError('Variable "specialites" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
            // line 124
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["specialite"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["specialite"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['specialite'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "                    </select>
                </div>

                <div class=\"custom-field\">
                    <label for=\"lieu_event\" class=\"custom-label\">Location:</label>
                    <input type=\"text\" id=\"lieu_event\" name=\"lieu_event\" class=\"custom-input\" placeholder=\"Enter Location\">
                </div>
            </div>

            <!-- Middle Column -->
            <div class=\"custom-column\">
                <div class=\"custom-field\">
                    <label for=\"date_debut_event\" class=\"custom-label\">Start Date:</label>
                    <input type=\"date\" id=\"date_debut_event\" name=\"date_debut_event\" class=\"custom-input\" min=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\">
                </div>

                <div class=\"custom-field\">
                    <label for=\"date_fin_event\" class=\"custom-label\">End Date:</label>
                    <input type=\"date\" id=\"date_fin_event\" name=\"date_fin_event\" class=\"custom-input\" disabled>
                </div>

                <div class=\"custom-field\">
                    <label for=\"budget\" class=\"custom-label\">Budget:</label>
                    <input type=\"number\" step=\"0.01\" id=\"budget\" name=\"budget\" class=\"custom-input\" placeholder=\"Enter Budget\">
                </div>

                <div class=\"custom-field\">
                    <label for=\"nombre_invite\" class=\"custom-label\">Number of Guests:</label>
                    <input type=\"number\" id=\"nombre_invite\" name=\"nombre_invite\" class=\"custom-input\" placeholder=\"Enter Number of Guests\">
                </div>
            </div>

            <!-- Right Column (Weather Analysis) -->
            <div class=\"custom-card\">
                <button type=\"button\" class=\"custom-button custom-button-primary actionBtn\">Analyse Weather</button>
                <div id=\"weatherInfo\" class=\"custom-weather-info\" 
                    style=\"margin-top: 15px; padding: 10px; background: #f8f9fa; border-radius: 5px;\"></div>
            </div>
        </div><br><br>

        <!-- Submit Buttons -->
        <div class=\"custom-row custom-submit-buttons\" style=\"position: absolute; top: 1190px; left: 500px;\">
            <div class=\"custom-column-full\">
                <button id=\"AddOffre\" type=\"submit\" class=\"submitRequest\">Submit Request</button>
                <button id=\"handleClear\" type=\"reset\" class=\"submitRequest\">Clear</button>
            </div>
        </div>
    </form>
</div>

<script src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/ajouterOffre2.js"), "html", null, true);
        yield "\"></script>
</body>
<div style=\"height: 100px;background-color:white;\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        yield "    <script>
        const afficherOffreUrl = \"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ConsulterYourRequest");
        yield "\";
    </script>
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
        return "offers/ajouterOffreFront.html.twig";
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
        return array (  313 => 46,  310 => 45,  297 => 44,  282 => 176,  242 => 139,  227 => 126,  216 => 124,  212 => 123,  195 => 109,  135 => 52,  130 => 50,  127 => 49,  125 => 44,  104 => 26,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
<head>
    <link rel=\"stylesheet\" href=\"{{ asset('filesOrganisateur/offre.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
</head>

<body>
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                <h1 class=\"text-white mb-4 pb-2\">Submit Your Requests</h1>
                <a href=\"{{ path('app_ConsulterYourRequest') }}\" class=\"btn custom-btn smoothscroll me-3 actionBtn\">Manage Your Requests</a>
            </div>
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
</section>

<div style=\"height: 100px;background-color:white;\"></div>

{% block javascripts %}
    <script>
        const afficherOffreUrl = \"{{ path('app_ConsulterYourRequest') }}\";
    </script>
{% endblock %}

<a href=\"{{ path('app_organizers') }}\">
    <img 
        src=\"{{ asset('filesOrganisateur/imageOrganisateur/retoureFlecheOr.png') }}\" 
        alt=\"Retour\" 
        style=\"
            z-index: 9999; 
            position: absolute; 
            top: 500px; 
            left: 100px; 
            width: 30px; 
            height: 30px;
            transition: transform 0.3s ease;\"
        onmouseover=\"this.style.transform='scale(1.2)';\" 
        onmouseout=\"this.style.transform='scale(1)';\"
    >
</a>

<!-- Modale de confirmation -->
<div id=\"confirmationModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px;\">Are you sure you want to add this offer?</p>
        <button id=\"confirmYes\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Yes</button>
        <button id=\"confirmCancel\" style=\"background-color: #e0d6cf; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Cancel</button>
    </div>
</div>
<div id=\"modalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale de succès -->
<div id=\"successModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px;\">Offer added successfully!</p>
        <button id=\"closeSuccessModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"successModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<!-- Modale d'erreur -->
<div id=\"errorModal\" style=\"display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; z-index: 9999;\">
    <div style=\"background-color: #f8d7da; padding: 15px; border-radius: 8px; text-align: center;\">
        <p style=\"font-size: 16px; margin-bottom: 15px; color: #721c24;\">An error occurred while adding the offer.</p>
        <button id=\"closeErrorModal\" style=\"background-color: #844062; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">OK</button>
    </div>
</div>
<div id=\"errorModalBackdrop\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;\"></div>

<div class=\"custom-container\">
    <form method=\"POST\" class=\"custom-form\">
        <div class=\"custom-row\">
            <!-- Left Column -->
            <div class=\"custom-column\">
                <div class=\"custom-field\">
                    <label for=\"objet\" class=\"custom-label\">Request Subject:</label>
                    <input type=\"text\" id=\"objet\" name=\"objet\" class=\"custom-input\" placeholder=\"Enter Subject\">
                </div>

                <div class=\"custom-field\">
                    <div class=\"custom-flex\">
                        <label for=\"description\" class=\"custom-label\" style=\"background-color:transparent\">Description:</label>
                        <button type=\"button\" id=\"aiGenerateButton\" class=\"custom-button custom-button-secondary actionBtn\" style=\"padding: 0; border: none; background: none;\">
                            <img src=\"{{ asset('filesOrganisateur/imageOrganisateur/robot.png') }}\" 
                                 id=\"aiRobotImage\"
                                 alt=\"Generate with AI\" 
                                 style=\"width: 50px; height: 50px; vertical-align: middle; transition: transform 0.3s ease;\"
                                 title=\"Generate with AI\">
                        </button>
                    </div>
                    <textarea id=\"description\" name=\"description\" class=\"custom-textarea\" rows=\"6\" placeholder=\"Enter Description\"></textarea>
                </div>

                <div class=\"custom-field\">
                    <label for=\"type_evenement\" class=\"custom-label\">Event Type:</label>
                    <select id=\"type_evenement\" name=\"type_evenement\" class=\"custom-select\">
                        <option value=\"\">Select Speciality</option>
                        {% for specialite in specialites %}
                            <option value=\"{{ specialite }}\">{{ specialite }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"custom-field\">
                    <label for=\"lieu_event\" class=\"custom-label\">Location:</label>
                    <input type=\"text\" id=\"lieu_event\" name=\"lieu_event\" class=\"custom-input\" placeholder=\"Enter Location\">
                </div>
            </div>

            <!-- Middle Column -->
            <div class=\"custom-column\">
                <div class=\"custom-field\">
                    <label for=\"date_debut_event\" class=\"custom-label\">Start Date:</label>
                    <input type=\"date\" id=\"date_debut_event\" name=\"date_debut_event\" class=\"custom-input\" min=\"{{ \"now\"|date(\"Y-m-d\") }}\">
                </div>

                <div class=\"custom-field\">
                    <label for=\"date_fin_event\" class=\"custom-label\">End Date:</label>
                    <input type=\"date\" id=\"date_fin_event\" name=\"date_fin_event\" class=\"custom-input\" disabled>
                </div>

                <div class=\"custom-field\">
                    <label for=\"budget\" class=\"custom-label\">Budget:</label>
                    <input type=\"number\" step=\"0.01\" id=\"budget\" name=\"budget\" class=\"custom-input\" placeholder=\"Enter Budget\">
                </div>

                <div class=\"custom-field\">
                    <label for=\"nombre_invite\" class=\"custom-label\">Number of Guests:</label>
                    <input type=\"number\" id=\"nombre_invite\" name=\"nombre_invite\" class=\"custom-input\" placeholder=\"Enter Number of Guests\">
                </div>
            </div>

            <!-- Right Column (Weather Analysis) -->
            <div class=\"custom-card\">
                <button type=\"button\" class=\"custom-button custom-button-primary actionBtn\">Analyse Weather</button>
                <div id=\"weatherInfo\" class=\"custom-weather-info\" 
                    style=\"margin-top: 15px; padding: 10px; background: #f8f9fa; border-radius: 5px;\"></div>
            </div>
        </div><br><br>

        <!-- Submit Buttons -->
        <div class=\"custom-row custom-submit-buttons\" style=\"position: absolute; top: 1190px; left: 500px;\">
            <div class=\"custom-column-full\">
                <button id=\"AddOffre\" type=\"submit\" class=\"submitRequest\">Submit Request</button>
                <button id=\"handleClear\" type=\"reset\" class=\"submitRequest\">Clear</button>
            </div>
        </div>
    </form>
</div>

<script src=\"{{ asset('filesOrganisateur/ajouterOffre2.js') }}\"></script>
</body>
<div style=\"height: 100px;background-color:white;\"></div>
{% endblock %}", "offers/ajouterOffreFront.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\offers\\ajouterOffreFront.html.twig");
    }
}
