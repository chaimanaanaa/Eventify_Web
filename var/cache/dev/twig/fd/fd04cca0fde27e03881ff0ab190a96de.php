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

/* complaints/show1.html.twig */
class __TwigTemplate_a93091437836d4d80240f9ef969096a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complaints/show1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complaints/show1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "complaints/show1.html.twig", 1);
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
        yield "<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
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
                <h1 class=\"text-white mb-4 pb-2\">Event Listing</h1>
                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>
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
<div style=\"height:100px;\">.</div>
<section class=\"reclamation-list\">
    <div class=\"container\">
        <h2 class=\"mb-4\">Reclamation List</h2>
        <div class=\"row\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["reclamation"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 41
            yield "                <div class=\"card-container\">
                    <div class=\"card-inner\">
                        <!-- Front of Card -->
                        <div class=\"card-front\">
                            <h5>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 45), "html", null, true);
            yield "</h5>
                            <p><strong>Date:</strong> ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 46), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                            ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "imgRec", [], "any", false, false, false, 47)) {
                // line 48
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "imgRec", [], "any", false, false, false, 48))), "html", null, true);
                yield "\" alt=\"Image\" class=\"img-fluid\">
                            ";
            } else {
                // line 50
                yield "                                <p>No Image</p>
                            ";
            }
            // line 52
            yield "                            <p><strong>Status:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statu", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
                            
                            <!-- Response count badge -->
                            ";
            // line 55
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 55)) > 0)) {
                // line 56
                yield "                                <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success\">
                                    ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 57)), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 60
            yield "                        </div>
                        
                        <!-- Back of Card -->
                        <div class=\"card-back\">
                            <p><strong>Subject:</strong> ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 64), "html", null, true);
            yield "</p>
                            
                            <div class=\"card-actions mt-3\">
                                <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"bi bi-pencil\"></i> Edit
                                </a>
                                <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-sm btn-outline-danger delete-btn\"
                                   data-id=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 72), "html", null, true);
            yield "\"
                                   onclick=\"return confirm('Delete this reclamation?')\">
                                    <i class=\"bi bi-trash\"></i> Delete
                                </a>
                            </div>
                            
                            <!-- RESPONSE SECTION ADDED HERE -->
                            <div class=\"responses-section mt-3\">
                                ";
            // line 80
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 80)) > 0)) {
                // line 81
                yield "                                <button class=\"btn btn-sm btn-outline-info w-100 toggle-response\" 
                                        type=\"button\" 
                                        data-bs-toggle=\"collapse\" 
                                        data-bs-target=\"#responses-";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 84), "html", null, true);
                yield "\"
                                        onclick=\"event.stopPropagation()\">
                                    <i class=\"bi bi-chevron-down\"></i> 
                                    View Responses (";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 87)), "html", null, true);
                yield ")
                                </button>
                                    
                                    <div class=\"collapse mt-2\" id=\"responses-";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 90), "html", null, true);
                yield "\">
                                        ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                    // line 92
                    yield "                                            <div class=\"response-card card mb-2\">
                                                <div class=\"card-body p-2\">
                                                    <div class=\"d-flex justify-content-between\">
                                                        <small class=\"text-muted\">
                                                            ";
                    // line 96
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["response"], "user", [], "any", false, false, false, 96)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["response"], "user", [], "any", false, false, false, 96), "email", [], "any", false, false, false, 96), "html", null, true)) : ("Admin"));
                    yield "
                                                        </small>
                                                        <small class=\"text-muted\">
                                                            ";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "date", [], "any", false, false, false, 99), "Y-m-d H:i"), "html", null, true);
                    yield "
                                                        </small>
                                                    </div>
                                                    <p class=\"mb-0 mt-1\">";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "text", [], "any", false, false, false, 102), "html", null, true);
                    yield "</p>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['response'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                yield "                                    </div>
                                ";
            } else {
                // line 108
                yield "                                    <div class=\"alert alert-info mb-0 p-2 text-center\">
                                        No responses yet
                                    </div>
                                ";
            }
            // line 112
            yield "                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 116
        if (!$context['_iterated']) {
            // line 117
            yield "                <div class=\"col-12 text-center\">
                    <p>No reclamations found.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "            
            <div class=\"card-container add-card-container\">
                <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_add");
        yield "\" id=\"add-btn-card\" class=\"add-btn-card\">
                    <span>+</span>
                    <span>Add New</span>
                </a>
            </div>
        </div>
    </div>
</section>

<div style=\"height:100px;\">.</div>
    <script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rec_card.js"), "html", null, true);
        yield "\"></script>
 <link rel=\"stylesheet\" href=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/rec_card.css"), "html", null, true);
        yield "\">
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
        return "complaints/show1.html.twig";
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
        return array (  302 => 134,  298 => 133,  285 => 123,  281 => 121,  272 => 117,  270 => 116,  262 => 112,  256 => 108,  252 => 106,  242 => 102,  236 => 99,  230 => 96,  224 => 92,  220 => 91,  216 => 90,  210 => 87,  204 => 84,  199 => 81,  197 => 80,  186 => 72,  181 => 70,  175 => 67,  169 => 64,  163 => 60,  157 => 57,  154 => 56,  152 => 55,  145 => 52,  141 => 50,  135 => 48,  133 => 47,  129 => 46,  125 => 45,  119 => 41,  114 => 40,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
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
                <h1 class=\"text-white mb-4 pb-2\">Event Listing</h1>
                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>
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
<div style=\"height:100px;\">.</div>
<section class=\"reclamation-list\">
    <div class=\"container\">
        <h2 class=\"mb-4\">Reclamation List</h2>
        <div class=\"row\">
            {% for reclamation in reclamation %}
                <div class=\"card-container\">
                    <div class=\"card-inner\">
                        <!-- Front of Card -->
                        <div class=\"card-front\">
                            <h5>{{ reclamation.titre }}</h5>
                            <p><strong>Date:</strong> {{ reclamation.date|date('Y-m-d H:i') }}</p>
                            {% if reclamation.imgRec %}
                                <img src=\"{{ asset('uploads/' ~ reclamation.imgRec) }}\" alt=\"Image\" class=\"img-fluid\">
                            {% else %}
                                <p>No Image</p>
                            {% endif %}
                            <p><strong>Status:</strong> {{ reclamation.statu }}</p>
                            
                            <!-- Response count badge -->
                            {% if reclamation.reponses|length > 0 %}
                                <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success\">
                                    {{ reclamation.reponses|length }}
                                </span>
                            {% endif %}
                        </div>
                        
                        <!-- Back of Card -->
                        <div class=\"card-back\">
                            <p><strong>Subject:</strong> {{ reclamation.sujet }}</p>
                            
                            <div class=\"card-actions mt-3\">
                                <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"bi bi-pencil\"></i> Edit
                                </a>
                                <a href=\"{{ path('app_reclamation_delete', {id: reclamation.id}) }}\" 
                                   class=\"btn btn-sm btn-outline-danger delete-btn\"
                                   data-id=\"{{ reclamation.id }}\"
                                   onclick=\"return confirm('Delete this reclamation?')\">
                                    <i class=\"bi bi-trash\"></i> Delete
                                </a>
                            </div>
                            
                            <!-- RESPONSE SECTION ADDED HERE -->
                            <div class=\"responses-section mt-3\">
                                {% if reclamation.reponses|length > 0 %}
                                <button class=\"btn btn-sm btn-outline-info w-100 toggle-response\" 
                                        type=\"button\" 
                                        data-bs-toggle=\"collapse\" 
                                        data-bs-target=\"#responses-{{ reclamation.id }}\"
                                        onclick=\"event.stopPropagation()\">
                                    <i class=\"bi bi-chevron-down\"></i> 
                                    View Responses ({{ reclamation.reponses|length }})
                                </button>
                                    
                                    <div class=\"collapse mt-2\" id=\"responses-{{ reclamation.id }}\">
                                        {% for response in reclamation.reponses %}
                                            <div class=\"response-card card mb-2\">
                                                <div class=\"card-body p-2\">
                                                    <div class=\"d-flex justify-content-between\">
                                                        <small class=\"text-muted\">
                                                            {{ response.user ? response.user.email : 'Admin' }}
                                                        </small>
                                                        <small class=\"text-muted\">
                                                            {{ response.date|date('Y-m-d H:i') }}
                                                        </small>
                                                    </div>
                                                    <p class=\"mb-0 mt-1\">{{ response.text }}</p>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                {% else %}
                                    <div class=\"alert alert-info mb-0 p-2 text-center\">
                                        No responses yet
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p>No reclamations found.</p>
                </div>
            {% endfor %}
            
            <div class=\"card-container add-card-container\">
                <a href=\"{{ path('app_reclamation_add') }}\" id=\"add-btn-card\" class=\"add-btn-card\">
                    <span>+</span>
                    <span>Add New</span>
                </a>
            </div>
        </div>
    </div>
</section>

<div style=\"height:100px;\">.</div>
    <script src=\"{{ asset('js/rec_card.js') }}\"></script>
 <link rel=\"stylesheet\" href=\"{{ asset('css/rec_card.css') }}\">
{% endblock %}
", "complaints/show1.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\complaints\\show1.html.twig");
    }
}
