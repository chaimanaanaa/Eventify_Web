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

/* events/eventsBack.html.twig */
class __TwigTemplate_dd891d15a9e5307146461fc872a8e3f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/eventsBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/eventsBack.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "events/eventsBack.html.twig", 1);
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
        yield "  <body style=\"font-family: 'Poppins', sans-serif;\">
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <div class=\"layout-page\">
          <nav class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\" id=\"layout-navbar\">
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none\">
              <a class=\"nav-item nav-link px-0 me-xl-6\" href=\"javascript:void(0)\">
                <i class=\"icon-base bx bx-menu icon-md\"></i>
              </a>
            </div>
          </nav>

          <div class=\"content-wrapper\">
            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <h4 class=\"fw-bold py-3 mb-4\">Gestion des Événements</h4>

              <div class=\"mb-4\">
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_newOff");
        yield "\" class=\"btn btn-primary gradient-btn\">
                  <i class=\"bx bx-plus\"></i> Ajouter un événement
                </a>
        <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_list");
        yield "\" class=\"btn btn-info gradient-btn\">
        <i class=\"bx bx-list-ul\"></i> Consulter Réservations
    </a>
              </div>

              <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 31
            yield "                <div class=\"col\">
                  <div class=\"card-flip-container animated-card\">
                    <div class=\"card-flip\">
                      <!-- Face avant -->
                      <div class=\"card-front\">
                        <div class=\"card h-100 glass-card\">
                          <img 
                            src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imageven", [], "any", false, false, false, 38))), "html", null, true);
            yield "\" 
                            class=\"card-img-top\" 
                            alt=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 40), "html", null, true);
            yield "\"
                            style=\"height: 200px; object-fit: cover; border-radius: 1rem 1rem 0 0;\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 43), 0, 25), "html", null, true);
            yield "...</h5>
                            <div class=\"mb-3\">
                              <span class=\"badge bg-label-primary\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-grid\">
                              <button class=\"btn btn-primary flip-btn\">Voir détails</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Face arrière -->
                      <div class=\"card-back\">
                        <div class=\"card h-100 glass-card\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title\">Détails de l'événement</h5>
                            <p><i class=\"bx bx-text\"></i> <strong>Description :</strong> ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 58), "html", null, true);
            yield "</p>
                            <p><i class=\"bx bx-map\"></i> <strong>Lieu :</strong> ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 59), "html", null, true);
            yield "</p>
                            <p><i class=\"bx bx-category-alt\"></i> <strong>Catégorie :</strong> ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 60), "html", null, true);
            yield "</p>
                            <p><i class=\"bx bx-money\"></i> <strong>Prix estimé :</strong> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "prixEstime", [], "any", false, false, false, 61), "html", null, true);
            yield " €</p>
                            <div class=\"d-grid\">
                              <button class=\"btn btn-secondary flip-btn\">Retour</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                ";
            $context['_iterated'] = true;
        }
        // line 71
        if (!$context['_iterated']) {
            // line 72
            yield "                <div class=\"col-12\">
                  <div class=\"alert alert-warning\">Aucun événement trouvé</div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "              </div>
            </div>

            <footer class=\"content-footer footer bg-footer-theme\">
              <div class=\"container-xxl\">
                <div class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                  <div class=\"mb-2 mb-md-0\">
                    &#169;
                    <script>document.write(new Date().getFullYear());</script>,
                    made with ❤️ by
                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062\">Eventify</a>
                  </div>
                </div>
              </div>
            </footer>
            <div class=\"content-backdrop fade\"></div>
          </div>
        </div>
      </div>
      <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>

    <!-- Custom Styles -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

      .gradient-btn {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%) !important;
        border: none;
        color: white !important;
      }

      .gradient-btn:hover {
        background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%) !important;
      }

      .card-flip-container {
        perspective: 1000px;
        min-height: 400px;
      }

      .card-flip {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
      }

      .card-flip-container.flipped .card-flip {
        transform: rotateY(180deg);
      }

      .card-front,
      .card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 1rem;
      }

      .card-back {
        transform: rotateY(180deg);
      }

      .glass-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        border: 1px solid rgba(255, 255, 255, 0.18);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .glass-card:hover {
        animation: pulse 0.6s ease-in-out;
      }

      @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.015); }
        100% { transform: scale(1); }
      }

      .animated-card {
        animation: fadeInUp 1s ease-in-out;
      }

      @keyframes fadeInUp {
        0% {
          opacity: 0;
          transform: translateY(30px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>

    <!-- JavaScript -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const flipButtons = document.querySelectorAll('.flip-btn');
        flipButtons.forEach(button => {
          button.addEventListener('click', function () {
            const container = this.closest('.card-flip-container');
            container.classList.toggle('flipped');
          });
        });
      });
    </script>

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
        return "events/eventsBack.html.twig";
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
        return array (  194 => 76,  185 => 72,  183 => 71,  168 => 61,  164 => 60,  160 => 59,  156 => 58,  140 => 45,  135 => 43,  129 => 40,  124 => 38,  115 => 31,  110 => 30,  101 => 24,  95 => 21,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block content %}
  <body style=\"font-family: 'Poppins', sans-serif;\">
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <div class=\"layout-page\">
          <nav class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\" id=\"layout-navbar\">
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none\">
              <a class=\"nav-item nav-link px-0 me-xl-6\" href=\"javascript:void(0)\">
                <i class=\"icon-base bx bx-menu icon-md\"></i>
              </a>
            </div>
          </nav>

          <div class=\"content-wrapper\">
            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <h4 class=\"fw-bold py-3 mb-4\">Gestion des Événements</h4>

              <div class=\"mb-4\">
                <a href=\"{{ path('app_event_newOff') }}\" class=\"btn btn-primary gradient-btn\">
                  <i class=\"bx bx-plus\"></i> Ajouter un événement
                </a>
        <a href=\"{{ path('app_reservation_list') }}\" class=\"btn btn-info gradient-btn\">
        <i class=\"bx bx-list-ul\"></i> Consulter Réservations
    </a>
              </div>

              <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
                {% for event in events %}
                <div class=\"col\">
                  <div class=\"card-flip-container animated-card\">
                    <div class=\"card-flip\">
                      <!-- Face avant -->
                      <div class=\"card-front\">
                        <div class=\"card h-100 glass-card\">
                          <img 
                            src=\"{{ asset('uploads/images/' ~ event.imageven) }}\" 
                            class=\"card-img-top\" 
                            alt=\"{{ event.description }}\"
                            style=\"height: 200px; object-fit: cover; border-radius: 1rem 1rem 0 0;\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ event.description|slice(0, 25) }}...</h5>
                            <div class=\"mb-3\">
                              <span class=\"badge bg-label-primary\">{{ event.categorie }}</span>
                            </div>
                            <div class=\"d-grid\">
                              <button class=\"btn btn-primary flip-btn\">Voir détails</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Face arrière -->
                      <div class=\"card-back\">
                        <div class=\"card h-100 glass-card\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title\">Détails de l'événement</h5>
                            <p><i class=\"bx bx-text\"></i> <strong>Description :</strong> {{ event.description }}</p>
                            <p><i class=\"bx bx-map\"></i> <strong>Lieu :</strong> {{ event.lieu }}</p>
                            <p><i class=\"bx bx-category-alt\"></i> <strong>Catégorie :</strong> {{ event.categorie }}</p>
                            <p><i class=\"bx bx-money\"></i> <strong>Prix estimé :</strong> {{ event.prixEstime }} €</p>
                            <div class=\"d-grid\">
                              <button class=\"btn btn-secondary flip-btn\">Retour</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {% else %}
                <div class=\"col-12\">
                  <div class=\"alert alert-warning\">Aucun événement trouvé</div>
                </div>
                {% endfor %}
              </div>
            </div>

            <footer class=\"content-footer footer bg-footer-theme\">
              <div class=\"container-xxl\">
                <div class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                  <div class=\"mb-2 mb-md-0\">
                    &#169;
                    <script>document.write(new Date().getFullYear());</script>,
                    made with ❤️ by
                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062\">Eventify</a>
                  </div>
                </div>
              </div>
            </footer>
            <div class=\"content-backdrop fade\"></div>
          </div>
        </div>
      </div>
      <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>

    <!-- Custom Styles -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

      .gradient-btn {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%) !important;
        border: none;
        color: white !important;
      }

      .gradient-btn:hover {
        background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%) !important;
      }

      .card-flip-container {
        perspective: 1000px;
        min-height: 400px;
      }

      .card-flip {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
      }

      .card-flip-container.flipped .card-flip {
        transform: rotateY(180deg);
      }

      .card-front,
      .card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 1rem;
      }

      .card-back {
        transform: rotateY(180deg);
      }

      .glass-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        border: 1px solid rgba(255, 255, 255, 0.18);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .glass-card:hover {
        animation: pulse 0.6s ease-in-out;
      }

      @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.015); }
        100% { transform: scale(1); }
      }

      .animated-card {
        animation: fadeInUp 1s ease-in-out;
      }

      @keyframes fadeInUp {
        0% {
          opacity: 0;
          transform: translateY(30px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>

    <!-- JavaScript -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const flipButtons = document.querySelectorAll('.flip-btn');
        flipButtons.forEach(button => {
          button.addEventListener('click', function () {
            const container = this.closest('.card-flip-container');
            container.classList.toggle('flipped');
          });
        });
      });
    </script>

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
  </body>
{% endblock %}
", "events/eventsBack.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\events\\eventsBack.html.twig");
    }
}
