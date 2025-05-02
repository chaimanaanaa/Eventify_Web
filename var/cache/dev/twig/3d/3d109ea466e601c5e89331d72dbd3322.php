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

/* organizers/statistique.html.twig */
class __TwigTemplate_f076610a2ba524371d8a95b8c6ee952a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organizers/statistique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organizers/statistique.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "organizers/statistique.html.twig", 1);
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
    <!-- Lien vers le fichier CSS externe -->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("filesOrganisateur/organisateur.css"), "html", null, true);
        yield "\">

    <style>
        /* Animation pour faire glisser les boîtes de statistiques de gauche à droite */
        .stat-card {
            opacity: 0;
            transform: translateX(-50px);
            animation: slideIn 0.7s forwards;
        }

        /* Définir un délai pour chaque carte afin qu'elles apparaissent dans l'ordre */
        .stat-card:nth-child(1) {
            animation-delay: 0.2s;
        }
        .stat-card:nth-child(2) {
            animation-delay: 0.4s;
        }
        .stat-card:nth-child(3) {
            animation-delay: 0.6s;
        }

        /* Définition de l'animation de glissement */
        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Amélioration de la transition du bouton de retour */
        img {
            transition: transform 0.3s ease;
        }
        img:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulterOffreCoteAdmin");
        yield "\">
                        <img 
                            src=\"filesOrganisateur/imageOrganisateur/retoureFlecheOr.png\" 
                            alt=\"Retour\" 
                            style=\"z-index: 9999; position: absolute; top: 75px; left: 300px; width: 30px; height: 30px;\">
                    </a>

                    <!-- Statistiques -->
                    <div class=\"container mt-5\" style=\"width:1500px;margin-left:10px;margin-right:100px;z-index:30;\">
                        <h1 class=\"text-center mb-5\" style=\"color: #844062;\">Statistical dashboard</h1>
                        
                        <div class=\"row\">
                            <!-- Graphique 1 : Statut des offres -->
                            <div class=\"col-md-4 stat-card\">
                                <div class=\"card shadow\">
                                    <div class=\"card-header\" style=\" color: white;\">
                                        <h3 class=\"card-title\">Status of offers</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <canvas id=\"offerStatusChart\" height=\"250\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Graphique 2 : Disponibilité des organisateurs -->
                            <div class=\"col-md-4 stat-card\">
                                <div class=\"card shadow\">
                                    <div class=\"card-header\" style=\" color: white;\">
                                        <h3 class=\"card-title\">Availability of organizers</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <canvas id=\"organizerStatusChart\" height=\"250\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Graphique 3 : Types d'événements -->
                            <div class=\"col-md-4 stat-card\">
                                <div class=\"card shadow\">
                                    <div class=\"card-header\" style=\" color: white;\">
                                        <h3 class=\"card-title\">Types of events</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <canvas id=\"eventTypeChart\" height=\"250\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Script des graphiques -->
                    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // 1. Graphique des statuts d'offres
                        const offerCtx = document.getElementById('offerStatusChart').getContext('2d');
                        new Chart(offerCtx, {
                            type: 'doughnut',
                            data: {
                                labels: ['Processed', 'Pending', 'Cancelled'],
                                datasets: [{
                                    data: [";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["treatedOffers"]) || array_key_exists("treatedOffers", $context) ? $context["treatedOffers"] : (function () { throw new RuntimeError('Variable "treatedOffers" does not exist.', 115, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingOffers"]) || array_key_exists("pendingOffers", $context) ? $context["pendingOffers"] : (function () { throw new RuntimeError('Variable "pendingOffers" does not exist.', 115, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["canceledOffers"]) || array_key_exists("canceledOffers", $context) ? $context["canceledOffers"] : (function () { throw new RuntimeError('Variable "canceledOffers" does not exist.', 115, $this->source); })()), "html", null, true);
        yield "],
                                    backgroundColor: [
                                        'rgba(3, 195, 236, 0.7)', 
                                        'rgba(255, 171, 0, 0.7)', 
                                        'rgba(105, 108, 255, 0.7)'
                                    ],
                                    borderColor: [
                                        'rgba(3, 195, 236, 1)', 
                                        'rgba(255, 171, 0, 1)', 
                                        'rgba(105, 108, 255, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        position: 'bottom',
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(context) {
                                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                                const value = context.raw;
                                                const percentage = Math.round((value / total) * 100);
                                                return `\${context.label}: \${value} (\${percentage}%)`;
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        // 2. Graphique de disponibilité des organisateurs
                        const organizerCtx = document.getElementById('organizerStatusChart').getContext('2d');
                        new Chart(organizerCtx, {
                            type: 'pie',
                            data: {
                                labels: ['Available', 'Unavailable'],
                                datasets: [{
                                    data: [";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["availableOrganizers"]) || array_key_exists("availableOrganizers", $context) ? $context["availableOrganizers"] : (function () { throw new RuntimeError('Variable "availableOrganizers" does not exist.', 156, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unavailableOrganizers"]) || array_key_exists("unavailableOrganizers", $context) ? $context["unavailableOrganizers"] : (function () { throw new RuntimeError('Variable "unavailableOrganizers" does not exist.', 156, $this->source); })()), "html", null, true);
        yield "],
                                    backgroundColor: [
                                        'rgba(75, 192, 192, 0.7)', 
                                        'rgba(255, 159, 64, 0.7)'
                                    ],
                                    borderColor: [
                                        'rgba(75, 192, 192, 1)', 
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        position: 'bottom',
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(context) {
                                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                                const value = context.raw;
                                                const percentage = Math.round((value / total) * 100);
                                                return `\${context.label}: \${value} (\${percentage}%)`;
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        // 3. Graphique des types d'événements
                        const eventTypes = ";
        // line 189
        yield json_encode((isset($context["eventTypes"]) || array_key_exists("eventTypes", $context) ? $context["eventTypes"] : (function () { throw new RuntimeError('Variable "eventTypes" does not exist.', 189, $this->source); })()));
        yield ";
                        const eventTypeLabels = eventTypes.map(item => item.type || 'Non spécifié');
                        const eventTypeData = eventTypes.map(item => item.count);

                        const eventCtx = document.getElementById('eventTypeChart').getContext('2d');
                        new Chart(eventCtx, {
                            type: 'bar',
                            data: {
                                labels: eventTypeLabels,
                                datasets: [{
                                    label: \"Number of offers\",
                                    data: eventTypeData,
                                    backgroundColor: 'rgba(153, 102, 255, 0.7)',
                                    borderColor: 'rgba(153, 102, 255, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            stepSize: 1
                                        }
                                    }
                                },
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                }
                            }
                        });
                    });
                    </script>

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                                <div class=\"mb-2 mb-md-0\">
                                    &#169;
                                    <script>document.write(new Date().getFullYear());</script>, made with ❤️ by
                                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062;\">Eventify</a>
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
    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>
    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>
    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"admin/assets/vendor/js/menu.js\"></script>

    <!-- Vendors JS -->
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>

    <!-- Main JS -->
    <script src=\"admin/assets/js/main.js\"></script>

    <!-- Page JS -->
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>

    <!-- GitHub Widget -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>

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
        return "organizers/statistique.html.twig";
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
        return array (  281 => 189,  243 => 156,  195 => 115,  131 => 54,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block content %}
<head>
    <!-- Lien vers le fichier CSS externe -->
    <link rel=\"stylesheet\" href=\"{{ asset('filesOrganisateur/organisateur.css') }}\">

    <style>
        /* Animation pour faire glisser les boîtes de statistiques de gauche à droite */
        .stat-card {
            opacity: 0;
            transform: translateX(-50px);
            animation: slideIn 0.7s forwards;
        }

        /* Définir un délai pour chaque carte afin qu'elles apparaissent dans l'ordre */
        .stat-card:nth-child(1) {
            animation-delay: 0.2s;
        }
        .stat-card:nth-child(2) {
            animation-delay: 0.4s;
        }
        .stat-card:nth-child(3) {
            animation-delay: 0.6s;
        }

        /* Définition de l'animation de glissement */
        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Amélioration de la transition du bouton de retour */
        img {
            transition: transform 0.3s ease;
        }
        img:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <a href=\"{{ path('app_consulterOffreCoteAdmin') }}\">
                        <img 
                            src=\"filesOrganisateur/imageOrganisateur/retoureFlecheOr.png\" 
                            alt=\"Retour\" 
                            style=\"z-index: 9999; position: absolute; top: 75px; left: 300px; width: 30px; height: 30px;\">
                    </a>

                    <!-- Statistiques -->
                    <div class=\"container mt-5\" style=\"width:1500px;margin-left:10px;margin-right:100px;z-index:30;\">
                        <h1 class=\"text-center mb-5\" style=\"color: #844062;\">Statistical dashboard</h1>
                        
                        <div class=\"row\">
                            <!-- Graphique 1 : Statut des offres -->
                            <div class=\"col-md-4 stat-card\">
                                <div class=\"card shadow\">
                                    <div class=\"card-header\" style=\" color: white;\">
                                        <h3 class=\"card-title\">Status of offers</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <canvas id=\"offerStatusChart\" height=\"250\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Graphique 2 : Disponibilité des organisateurs -->
                            <div class=\"col-md-4 stat-card\">
                                <div class=\"card shadow\">
                                    <div class=\"card-header\" style=\" color: white;\">
                                        <h3 class=\"card-title\">Availability of organizers</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <canvas id=\"organizerStatusChart\" height=\"250\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Graphique 3 : Types d'événements -->
                            <div class=\"col-md-4 stat-card\">
                                <div class=\"card shadow\">
                                    <div class=\"card-header\" style=\" color: white;\">
                                        <h3 class=\"card-title\">Types of events</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <canvas id=\"eventTypeChart\" height=\"250\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Script des graphiques -->
                    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // 1. Graphique des statuts d'offres
                        const offerCtx = document.getElementById('offerStatusChart').getContext('2d');
                        new Chart(offerCtx, {
                            type: 'doughnut',
                            data: {
                                labels: ['Processed', 'Pending', 'Cancelled'],
                                datasets: [{
                                    data: [{{ treatedOffers }}, {{ pendingOffers }}, {{ canceledOffers }}],
                                    backgroundColor: [
                                        'rgba(3, 195, 236, 0.7)', 
                                        'rgba(255, 171, 0, 0.7)', 
                                        'rgba(105, 108, 255, 0.7)'
                                    ],
                                    borderColor: [
                                        'rgba(3, 195, 236, 1)', 
                                        'rgba(255, 171, 0, 1)', 
                                        'rgba(105, 108, 255, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        position: 'bottom',
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(context) {
                                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                                const value = context.raw;
                                                const percentage = Math.round((value / total) * 100);
                                                return `\${context.label}: \${value} (\${percentage}%)`;
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        // 2. Graphique de disponibilité des organisateurs
                        const organizerCtx = document.getElementById('organizerStatusChart').getContext('2d');
                        new Chart(organizerCtx, {
                            type: 'pie',
                            data: {
                                labels: ['Available', 'Unavailable'],
                                datasets: [{
                                    data: [{{ availableOrganizers }}, {{ unavailableOrganizers }}],
                                    backgroundColor: [
                                        'rgba(75, 192, 192, 0.7)', 
                                        'rgba(255, 159, 64, 0.7)'
                                    ],
                                    borderColor: [
                                        'rgba(75, 192, 192, 1)', 
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        position: 'bottom',
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(context) {
                                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                                const value = context.raw;
                                                const percentage = Math.round((value / total) * 100);
                                                return `\${context.label}: \${value} (\${percentage}%)`;
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        // 3. Graphique des types d'événements
                        const eventTypes = {{ eventTypes|json_encode|raw }};
                        const eventTypeLabels = eventTypes.map(item => item.type || 'Non spécifié');
                        const eventTypeData = eventTypes.map(item => item.count);

                        const eventCtx = document.getElementById('eventTypeChart').getContext('2d');
                        new Chart(eventCtx, {
                            type: 'bar',
                            data: {
                                labels: eventTypeLabels,
                                datasets: [{
                                    label: \"Number of offers\",
                                    data: eventTypeData,
                                    backgroundColor: 'rgba(153, 102, 255, 0.7)',
                                    borderColor: 'rgba(153, 102, 255, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            stepSize: 1
                                        }
                                    }
                                },
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                }
                            }
                        });
                    });
                    </script>

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                                <div class=\"mb-2 mb-md-0\">
                                    &#169;
                                    <script>document.write(new Date().getFullYear());</script>, made with ❤️ by
                                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062;\">Eventify</a>
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
    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>
    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>
    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"admin/assets/vendor/js/menu.js\"></script>

    <!-- Vendors JS -->
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>

    <!-- Main JS -->
    <script src=\"admin/assets/js/main.js\"></script>

    <!-- Page JS -->
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>

    <!-- GitHub Widget -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>

    <script src=\"filesOrganisateur/afficherOrganisateur.js\"></script>

    <!-- Inclure jsPDF -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>

    <!-- Inclure le plugin autoTable pour jsPDF -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js\"></script>




</body>
</html>
{% endblock %}
", "organizers/statistique.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\organizers\\statistique.html.twig");
    }
}
