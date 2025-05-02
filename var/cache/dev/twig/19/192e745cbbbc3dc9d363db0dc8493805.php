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

/* reservation/index.html.twig */
class __TwigTemplate_28a278ec3655b9c257dce98b13df3f8c extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mes Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
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
        yield "<div class=\"container py-5\">
    <h4 class=\"fw-bold py-3 mb-4\">Mes Réservations</h4>

    ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "        <div class=\"alert alert-warning text-center\">Aucun événement réservé.</div>
    ";
        } else {
            // line 12
            yield "        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 14
                yield "            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <img src=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imageven", [], "any", false, false, false, 16))), "html", null, true);
                yield "\" 
                         class=\"card-img-top\" 
                         alt=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 18), "html", null, true);
                yield "\"
                         style=\"height: 200px; object-fit: cover;\">
                    
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 22), "html", null, true);
                yield "</h5>
                        <p><strong>Lieu :</strong> ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 23), "html", null, true);
                yield "</p>
                        <p><strong>Prix estimé :</strong> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "prixEstime", [], "any", false, false, false, 24), "html", null, true);
                yield " €</p>
                        <p><strong>Catégorie :</strong> ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 25), "html", null, true);
                yield "</p>

                        <!-- Bouton Annuler Réservation -->
                        <form action=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["idRes" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reservationId", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reservationId", [], "any", false, false, false, 29))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
                                Annuler Réservation
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "        </div>
    ";
        }
        // line 40
        yield "</div>
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
        return "reservation/index.html.twig";
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
        return array (  175 => 40,  171 => 38,  156 => 29,  152 => 28,  146 => 25,  142 => 24,  138 => 23,  134 => 22,  127 => 18,  122 => 16,  118 => 14,  114 => 13,  111 => 12,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Réservations{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <h4 class=\"fw-bold py-3 mb-4\">Mes Réservations</h4>

    {% if events is empty %}
        <div class=\"alert alert-warning text-center\">Aucun événement réservé.</div>
    {% else %}
        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            {% for event in events %}
            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <img src=\"{{ asset('Uploads/images/' ~ event.imageven) }}\" 
                         class=\"card-img-top\" 
                         alt=\"{{ event.description }}\"
                         style=\"height: 200px; object-fit: cover;\">
                    
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ event.description }}</h5>
                        <p><strong>Lieu :</strong> {{ event.lieu }}</p>
                        <p><strong>Prix estimé :</strong> {{ event.prixEstime }} €</p>
                        <p><strong>Catégorie :</strong> {{ event.categorie }}</p>

                        <!-- Bouton Annuler Réservation -->
                        <form action=\"{{ path('app_reservation_delete', {'idRes': event.reservationId}) }}\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.reservationId) }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
                                Annuler Réservation
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}", "reservation/index.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\reservation\\index.html.twig");
    }
}
