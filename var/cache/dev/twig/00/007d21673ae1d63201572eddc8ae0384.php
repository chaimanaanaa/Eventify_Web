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

/* events/events.html.twig */
class __TwigTemplate_b15f8a49a8c501279ad4ef02b1f3396c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "events/events.html.twig", 1);
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
    <!-- Contenu hero existant -->
</section>
<div style=\"height:10px;\">.</div>
<section class=\"events-section py-5\">
    <div class=\"container\">
        <h4 class=\"fw-bold py-3 mb-4 text-center\">Liste des Événements</h4>
        
        <div class=\"mb-4 text-end\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"bx bx-plus\"></i> Ajouter un événement
            </a>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events_personalise");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"bx bx-filter\"></i> Événements Personnalisés
            </a>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-info\">
        <i class=\"bx bx-list-ul\"></i> Consulter mes réservations
    </a>
        </div>

        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 26
            yield "            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <img src=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imageven", [], "any", false, false, false, 28))), "html", null, true);
            yield "\" 
                         class=\"card-img-top\" 
                         alt=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 30), "html", null, true);
            yield "\"
                         style=\"height: 200px; object-fit: cover;\">
                    
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 34), 0, 25), "html", null, true);
            yield "</h5>
                        <span class=\"badge bg-primary\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
                        <span class=\"badge bg-secondary\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                        
                        <div class=\"mt-3 d-flex justify-content-between\">
                            <button class=\"btn btn-sm btn-outline-primary details-btn\" 
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#detailsModal\"
                                    data-event-id=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 42), "html", null, true);
            yield "\"
                                    data-description=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 43), "html", null, true);
            yield "\"
                                    data-lieu=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 44), "html", null, true);
            yield "\"
                                    data-prix=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "prixEstime", [], "any", false, false, false, 45), "html", null, true);
            yield "\"
                                    data-categorie=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 46), "html", null, true);
            yield "\">
                                Détails
                            </button>
                            
                            ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 50) != "offert")) {
                // line 51
                yield "                            <div class=\"btn-group\">
                                <button class=\"btn btn-sm btn-warning edit-btn\" 
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#editModal\"
                                        data-event-id=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 55), "html", null, true);
                yield "\"
                                        data-description=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 56), "html", null, true);
                yield "\"
                                        data-lieu=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 57), "html", null, true);
                yield "\"
                                        data-prix=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "prixEstime", [], "any", false, false, false, 58), "html", null, true);
                yield "\"
                                        data-categorie=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 59), "html", null, true);
                yield "\"
                                        data-image=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imageven", [], "any", false, false, false, 60), "html", null, true);
                yield "\"
                                        data-edit-url=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 61)]), "html", null, true);
                yield "\">
                                    Modifier
                                </button>
                                <form action=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getIdEvent", [], "method", false, false, false, 64)]), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getIdEvent", [], "method", false, false, false, 65))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr ?')\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                            ";
            }
            // line 72
            yield "                            <!-- Bouton Réserver -->
                            <button class=\"btn btn-sm btn-success reserve-btn\" 
                                    data-event-id=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 74), "html", null, true);
            yield "\"
                                    data-csrf-token=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reserve-event"), "html", null, true);
            yield "\"
                                    data-reserve-url=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\">
                                Réserver
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center\">Aucun événement trouvé</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "        </div>
    </div>
</section>
<!-- Modale de modification -->
<div class=\"modal fade\" id=\"editModal\" tabindex=\"-1\" aria-labelledby=\"editModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"editModalLabel\">Modifier l'événement</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <form id=\"editForm\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit-event"), "html", null, true);
        yield "\">
                    <input type=\"hidden\" id=\"editEventId\" name=\"id\">
                    
                    <div class=\"mb-3\">
                        <label for=\"editDescription\" class=\"form-label\">Description</label>
                        <textarea class=\"form-control\" id=\"editDescription\" name=\"description\" rows=\"3\" required></textarea>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <label for=\"editLieu\" class=\"form-label\">Lieu</label>
                            <input type=\"text\" class=\"form-control\" id=\"editLieu\" name=\"lieu\" required>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <label for=\"editCategorie\" class=\"form-label\">Catégorie</label>
                            <select class=\"form-select\" id=\"editCategorie\" name=\"categorie\" required>
                                <option value=\"Wedding\">Wedding</option>
                                <option value=\"Birthday\">Birthday</option>
                                <option value=\"Baby Gender\">Baby Gender</option>
                                <option value=\"Soutenance\">Soutenance</option>
                            </select>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <label for=\"editPrix\" class=\"form-label\">Prix estimé (€)</label>
                            <input type=\"number\" class=\"form-control\" id=\"editPrix\" name=\"prix\" step=\"0.01\" required>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <label for=\"editImage\" class=\"form-label\">Image</label>
                            <input type=\"file\" class=\"form-control\" id=\"editImage\" name=\"image\">
                            <small class=\"text-muted\">Laisser vide pour garder l'image actuelle</small>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modale de détails -->
<div class=\"modal fade\" id=\"detailsModal\" tabindex=\"-1\" aria-labelledby=\"detailsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"detailsModalLabel\">Détails de l'événement</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p><strong>Description:</strong> <span id=\"detailsDescription\"></span></p>
                <p><strong>Lieu:</strong> <span id=\"detailsLieu\"></span></p>
                <p><strong>Prix estimé:</strong> <span id=\"detailsPrix\"></span> €</p>
                <p><strong>Catégorie:</strong> <span id=\"detailsCategorie\"></span></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'ouverture de la modale de modification
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const eventId = this.dataset.eventId;
            
            // Remplir les champs du formulaire
            document.getElementById('editEventId').value = eventId;
            document.getElementById('editDescription').value = this.dataset.description;
            document.getElementById('editLieu').value = this.dataset.lieu;
            document.getElementById('editPrix').value = this.dataset.prix;
            
            // Sélectionner la catégorie correcte
            const categorieSelect = document.getElementById('editCategorie');
            Array.from(categorieSelect.options).forEach(option => {
                option.selected = (option.value === this.dataset.categorie);
            });
        });
    });

    // Soumission du formulaire de modification
    document.getElementById('editForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const eventId = document.getElementById('editEventId').value;

      
   fetch(`/event/\${eventId}/edit`, {
    method: 'POST',
    body: formData,
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
})
        .then(response => {
            if (response.ok) {
                window.location.reload();
            } else {
                alert('Une erreur est survenue lors de la modification');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Erreur de connexion au serveur');
        });
    });

    // Gestion des détails
    document.querySelectorAll('.details-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('detailsDescription').textContent = this.dataset.description;
            document.getElementById('detailsLieu').textContent = this.dataset.lieu;
            document.getElementById('detailsPrix').textContent = this.dataset.prix;
            document.getElementById('detailsCategorie').textContent = this.dataset.categorie;
        });
    });

    // Gestion de la réservation
    document.querySelectorAll('.reserve-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const eventId = this.dataset.eventId;
            const csrfToken = this.dataset.csrfToken;
            const reserveUrl = this.dataset.reserveUrl;

            fetch(reserveUrl, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `_token=\${encodeURIComponent(csrfToken)}`
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Erreur lors de la réservation');
                }
            })
            .then(data => {
                if (data.status === 'success') {
                    alert(data.message);
                    window.location.reload();
                } else {
                    alert(data.message || 'Une erreur est survenue');
                }
            })
            .catch(error => {
                console.error('Erreur réseau :', error);
                alert('Erreur de connexion au serveur.');
            });
        });
    });
});
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
        return "events/events.html.twig";
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
        return array (  271 => 101,  256 => 88,  247 => 84,  245 => 83,  233 => 76,  229 => 75,  225 => 74,  221 => 72,  211 => 65,  207 => 64,  201 => 61,  197 => 60,  193 => 59,  189 => 58,  185 => 57,  181 => 56,  177 => 55,  171 => 51,  169 => 50,  162 => 46,  158 => 45,  154 => 44,  150 => 43,  146 => 42,  137 => 36,  133 => 35,  129 => 34,  122 => 30,  117 => 28,  113 => 26,  108 => 25,  99 => 19,  93 => 16,  87 => 13,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <!-- Contenu hero existant -->
</section>
<div style=\"height:10px;\">.</div>
<section class=\"events-section py-5\">
    <div class=\"container\">
        <h4 class=\"fw-bold py-3 mb-4 text-center\">Liste des Événements</h4>
        
        <div class=\"mb-4 text-end\">
            <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-primary\">
                <i class=\"bx bx-plus\"></i> Ajouter un événement
            </a>
            <a href=\"{{ path('app_events_personalise') }}\" class=\"btn btn-secondary\">
                <i class=\"bx bx-filter\"></i> Événements Personnalisés
            </a>
        <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-info\">
        <i class=\"bx bx-list-ul\"></i> Consulter mes réservations
    </a>
        </div>

        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            {% for event in events %}
            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <img src=\"{{ asset('Uploads/images/' ~ event.imageven) }}\" 
                         class=\"card-img-top\" 
                         alt=\"{{ event.description }}\"
                         style=\"height: 200px; object-fit: cover;\">
                    
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ event.description|slice(0, 25) }}</h5>
                        <span class=\"badge bg-primary\">{{ event.categorie }}</span>
                        <span class=\"badge bg-secondary\">{{ event.type }}</span>
                        
                        <div class=\"mt-3 d-flex justify-content-between\">
                            <button class=\"btn btn-sm btn-outline-primary details-btn\" 
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#detailsModal\"
                                    data-event-id=\"{{ event.idEvent }}\"
                                    data-description=\"{{ event.description }}\"
                                    data-lieu=\"{{ event.lieu }}\"
                                    data-prix=\"{{ event.prixEstime }}\"
                                    data-categorie=\"{{ event.categorie }}\">
                                Détails
                            </button>
                            
                            {% if event.type != 'offert' %}
                            <div class=\"btn-group\">
                                <button class=\"btn btn-sm btn-warning edit-btn\" 
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#editModal\"
                                        data-event-id=\"{{ event.idEvent }}\"
                                        data-description=\"{{ event.description }}\"
                                        data-lieu=\"{{ event.lieu }}\"
                                        data-prix=\"{{ event.prixEstime }}\"
                                        data-categorie=\"{{ event.categorie }}\"
                                        data-image=\"{{ event.imageven }}\"
                                        data-edit-url=\"{{ path('app_event_edit', {'id': event.idEvent}) }}\">
                                    Modifier
                                </button>
                                <form action=\"{{ path('app_event_delete', {'id': event.getIdEvent()}) }}\" method=\"post\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.getIdEvent()) }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr ?')\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                            {% endif %}
                            <!-- Bouton Réserver -->
                            <button class=\"btn btn-sm btn-success reserve-btn\" 
                                    data-event-id=\"{{ event.idEvent }}\"
                                    data-csrf-token=\"{{ csrf_token('reserve-event') }}\"
                                    data-reserve-url=\"{{ path('app_reservation_create', {'id': event.idEvent}) }}\">
                                Réserver
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center\">Aucun événement trouvé</div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
<!-- Modale de modification -->
<div class=\"modal fade\" id=\"editModal\" tabindex=\"-1\" aria-labelledby=\"editModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"editModalLabel\">Modifier l'événement</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <form id=\"editForm\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-event') }}\">
                    <input type=\"hidden\" id=\"editEventId\" name=\"id\">
                    
                    <div class=\"mb-3\">
                        <label for=\"editDescription\" class=\"form-label\">Description</label>
                        <textarea class=\"form-control\" id=\"editDescription\" name=\"description\" rows=\"3\" required></textarea>
                    </div>
                    
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <label for=\"editLieu\" class=\"form-label\">Lieu</label>
                            <input type=\"text\" class=\"form-control\" id=\"editLieu\" name=\"lieu\" required>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <label for=\"editCategorie\" class=\"form-label\">Catégorie</label>
                            <select class=\"form-select\" id=\"editCategorie\" name=\"categorie\" required>
                                <option value=\"Wedding\">Wedding</option>
                                <option value=\"Birthday\">Birthday</option>
                                <option value=\"Baby Gender\">Baby Gender</option>
                                <option value=\"Soutenance\">Soutenance</option>
                            </select>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <label for=\"editPrix\" class=\"form-label\">Prix estimé (€)</label>
                            <input type=\"number\" class=\"form-control\" id=\"editPrix\" name=\"prix\" step=\"0.01\" required>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <label for=\"editImage\" class=\"form-label\">Image</label>
                            <input type=\"file\" class=\"form-control\" id=\"editImage\" name=\"image\">
                            <small class=\"text-muted\">Laisser vide pour garder l'image actuelle</small>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modale de détails -->
<div class=\"modal fade\" id=\"detailsModal\" tabindex=\"-1\" aria-labelledby=\"detailsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"detailsModalLabel\">Détails de l'événement</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p><strong>Description:</strong> <span id=\"detailsDescription\"></span></p>
                <p><strong>Lieu:</strong> <span id=\"detailsLieu\"></span></p>
                <p><strong>Prix estimé:</strong> <span id=\"detailsPrix\"></span> €</p>
                <p><strong>Catégorie:</strong> <span id=\"detailsCategorie\"></span></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'ouverture de la modale de modification
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const eventId = this.dataset.eventId;
            
            // Remplir les champs du formulaire
            document.getElementById('editEventId').value = eventId;
            document.getElementById('editDescription').value = this.dataset.description;
            document.getElementById('editLieu').value = this.dataset.lieu;
            document.getElementById('editPrix').value = this.dataset.prix;
            
            // Sélectionner la catégorie correcte
            const categorieSelect = document.getElementById('editCategorie');
            Array.from(categorieSelect.options).forEach(option => {
                option.selected = (option.value === this.dataset.categorie);
            });
        });
    });

    // Soumission du formulaire de modification
    document.getElementById('editForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const eventId = document.getElementById('editEventId').value;

      
   fetch(`/event/\${eventId}/edit`, {
    method: 'POST',
    body: formData,
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
})
        .then(response => {
            if (response.ok) {
                window.location.reload();
            } else {
                alert('Une erreur est survenue lors de la modification');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Erreur de connexion au serveur');
        });
    });

    // Gestion des détails
    document.querySelectorAll('.details-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('detailsDescription').textContent = this.dataset.description;
            document.getElementById('detailsLieu').textContent = this.dataset.lieu;
            document.getElementById('detailsPrix').textContent = this.dataset.prix;
            document.getElementById('detailsCategorie').textContent = this.dataset.categorie;
        });
    });

    // Gestion de la réservation
    document.querySelectorAll('.reserve-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const eventId = this.dataset.eventId;
            const csrfToken = this.dataset.csrfToken;
            const reserveUrl = this.dataset.reserveUrl;

            fetch(reserveUrl, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `_token=\${encodeURIComponent(csrfToken)}`
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Erreur lors de la réservation');
                }
            })
            .then(data => {
                if (data.status === 'success') {
                    alert(data.message);
                    window.location.reload();
                } else {
                    alert(data.message || 'Une erreur est survenue');
                }
            })
            .catch(error => {
                console.error('Erreur réseau :', error);
                alert('Erreur de connexion au serveur.');
            });
        });
    });
});
</script>

{% endblock %}", "events/events.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\events\\events.html.twig");
    }
}
