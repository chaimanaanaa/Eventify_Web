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

/* reservation/list.html.twig */
class __TwigTemplate_d40d8464a2f2b7f7ceb562585be83662 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/list.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "reservation/list.html.twig", 1);
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

        yield "Liste des Réservations";
        
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
        yield "  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <!-- Layout container -->
        <div class=\"layout-page\">
          <!-- Navbar -->
          <nav class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\" id=\"layout-navbar\">
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
              <h4 class=\"fw-bold py-3 mb-4\">Liste des Réservations</h4>

              ";
        // line 43
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 43, $this->source); })()))) {
            // line 44
            yield "                <div class=\"alert alert-warning text-center\">Aucune réservation trouvée.</div>
              ";
        } else {
            // line 46
            yield "                <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
                  ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 48
                yield "                  <div class=\"col\">
                    <div class=\"card-flip-container animated-card\">
                      <div class=\"card-flip\">
                        <!-- Face avant -->
                        <div class=\"card-front\">
                          <div class=\"card h-100 glass-card\">
                            <img 
                              src=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 55), "imageven", [], "any", false, false, false, 55))), "html", null, true);
                yield "\" 
                              class=\"card-img-top\" 
                              alt=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 57), "description", [], "any", false, false, false, 57), "html", null, true);
                yield "\"
                              style=\"height: 200px; object-fit: cover; border-radius: 1rem 1rem 0 0;\">
                            <div class=\"card-body\">
                              <h5 class=\"card-title\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 60), "description", [], "any", false, false, false, 60), 0, 25), "html", null, true);
                yield "...</h5>
                              <div class=\"mb-3\">
                                <span class=\"badge bg-label-primary\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 62), "categorie", [], "any", false, false, false, 62), "html", null, true);
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
                              <h5 class=\"card-title\">Détails de la Réservation</h5>
                              <p><i class=\"bx bx-text\"></i> <strong>Description :</strong> ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 75), "description", [], "any", false, false, false, 75), "html", null, true);
                yield "</p>
                              <p><i class=\"bx bx-map\"></i> <strong>Lieu :</strong> ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 76), "lieu", [], "any", false, false, false, 76), "html", null, true);
                yield "</p>
                              <p><i class=\"bx bx-category-alt\"></i> <strong>Catégorie :</strong> ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 77), "categorie", [], "any", false, false, false, 77), "html", null, true);
                yield "</p>
                              <p><i class=\"bx bx-money\"></i> <strong>Prix estimé :</strong> ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 78), "prixEstime", [], "any", false, false, false, 78), "html", null, true);
                yield " €</p>
                              <p><i class=\"bx bx-calendar\"></i> <strong>Date de réservation :</strong> ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 79), "d/m/Y H:i"), "html", null, true);
                yield "</p>
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "                </div>
              ";
        }
        // line 92
        yield "            </div>
            <!-- / Content -->

            <!-- Footer -->
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
        return "reservation/list.html.twig";
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
        return array (  230 => 92,  226 => 90,  209 => 79,  205 => 78,  201 => 77,  197 => 76,  193 => 75,  177 => 62,  172 => 60,  166 => 57,  161 => 55,  152 => 48,  148 => 47,  145 => 46,  141 => 44,  139 => 43,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block title %}Liste des Réservations{% endblock %}

{% block content %}
  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <!-- Layout container -->
        <div class=\"layout-page\">
          <!-- Navbar -->
          <nav class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\" id=\"layout-navbar\">
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
              <h4 class=\"fw-bold py-3 mb-4\">Liste des Réservations</h4>

              {% if reservations is empty %}
                <div class=\"alert alert-warning text-center\">Aucune réservation trouvée.</div>
              {% else %}
                <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
                  {% for reservation in reservations %}
                  <div class=\"col\">
                    <div class=\"card-flip-container animated-card\">
                      <div class=\"card-flip\">
                        <!-- Face avant -->
                        <div class=\"card-front\">
                          <div class=\"card h-100 glass-card\">
                            <img 
                              src=\"{{ asset('uploads/images/' ~ reservation.event.imageven) }}\" 
                              class=\"card-img-top\" 
                              alt=\"{{ reservation.event.description }}\"
                              style=\"height: 200px; object-fit: cover; border-radius: 1rem 1rem 0 0;\">
                            <div class=\"card-body\">
                              <h5 class=\"card-title\">{{ reservation.event.description|slice(0, 25) }}...</h5>
                              <div class=\"mb-3\">
                                <span class=\"badge bg-label-primary\">{{ reservation.event.categorie }}</span>
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
                              <h5 class=\"card-title\">Détails de la Réservation</h5>
                              <p><i class=\"bx bx-text\"></i> <strong>Description :</strong> {{ reservation.event.description }}</p>
                              <p><i class=\"bx bx-map\"></i> <strong>Lieu :</strong> {{ reservation.event.lieu }}</p>
                              <p><i class=\"bx bx-category-alt\"></i> <strong>Catégorie :</strong> {{ reservation.event.categorie }}</p>
                              <p><i class=\"bx bx-money\"></i> <strong>Prix estimé :</strong> {{ reservation.event.prixEstime }} €</p>
                              <p><i class=\"bx bx-calendar\"></i> <strong>Date de réservation :</strong> {{ reservation.date|date('d/m/Y H:i') }}</p>
                              <div class=\"d-grid\">
                                <button class=\"btn btn-secondary flip-btn\">Retour</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {% endfor %}
                </div>
              {% endif %}
            </div>
            <!-- / Content -->

            <!-- Footer -->
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
{% endblock %}", "reservation/list.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\reservation\\list.html.twig");
    }
}
