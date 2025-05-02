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

/* baseAdmin.html.twig */
class __TwigTemplate_e8948f883b7b57c7bee30dce12532839 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'profil' => [$this, 'block_profil'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\" class=\"layout-menu-fixed layout-compact\" data-assets-path=\"admin/assets/\" data-template=\"vertical-menu-template-free\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Dashboard - Admin</title>
    <meta name=\"description\" content=\"\" />

  
    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/fonts/iconify-icons.css\" />
    <!-- Flatpickr CSS -->
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/css/core.css\" />
    <link rel=\"stylesheet\" href=\"admin/assets/css/demo.css\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css\" />
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/libs/apex-charts/apex-charts.css\" />

    <!-- Custom CSS -->
    <style>
        /* Style pour le lien actif */
        .menu-link.active {
            background-color: #f8f9fa; /* Couleur de fond */
            color: #ADC29B; /* Couleur du texte */
            font-weight: bold;
            border-left: 4px solid #ADC29B; /* Bordure gauche pour indiquer l'élément actif */
        }

        .positionProfil {
            position: fixed; /* Utilise fixed pour qu'il reste visible même au scroll */
            top: 20px;       /* Ajuste la position verticale */
            right: 40px;     /* Ajuste la position horizontale */
            z-index: 9999;   /* Assure qu'il est au-dessus de tous les autres éléments */            padding: 10px;   /* Espacement interne pour améliorer le rendu */
            border-radius: 50%; /* Optionnel : pour donner un effet arrondi */
        }
        
    </style>

    <!-- Helpers -->
    <script src=\"admin/assets/vendor/js/helpers.js\"></script>
    <script src=\"admin/assets/js/config.js\"></script>
</head>

<body>
    
    ";
        // line 52
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 171
        yield "

    ";
        // line 173
        yield from $this->unwrap()->yieldBlock('profil', $context, $blocks);
        // line 238
        yield "
    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 239, $this->source); })()), "flashes", ["success"], "method", false, false, false, 239));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 240
            yield "    <div class=\"alert alert-success\">
        ";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "flashes", ["error"], "method", false, false, false, 244));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 245
            yield "    <div class=\"alert alert-danger\">
        ";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        yield "

    ";
        // line 251
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 253
        yield "



   






    <!-- Script pour gérer la classe active -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuLinks = document.querySelectorAll('.menu-link');

            // Ajouter un gestionnaire d'événements pour chaque lien
            menuLinks.forEach(link => {
                link.addEventListener('click', function () {
                    // Supprimer la classe 'active' de tous les liens
                    menuLinks.forEach(item => item.classList.remove('active'));

                    // Ajouter la classe 'active' au lien cliqué
                    this.classList.add('active');
                });
            });

            // Optionnel : Mettre en surbrillance le lien basé sur l'URL courante
            const currentPath = window.location.pathname;
            menuLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 53
        yield "    <!-- Menu -->
    <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\" style=\"background-color: #e0d6cf;\">
        <div class=\"app-brand demo\">
            <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"app-brand-link\">
                <span class=\"app-brand-logo demo\">
                    <img src=\"admin/assets/img/backgrounds/logo.png\" alt=\"Logo\" width=\"150\" />
                </span>
            </a>
          <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\" style=\"background-color: #844062;  border: 7px solid #e0d6cf;\">
                <i class=\"bx bx-chevron-left d-block d-xl-none align-middle\" ></i>
            </a>
        </div>
        <div class=\"menu-divider mt-0\"></div>
        <div class=\"menu-inner-shadow\"></div>
        <ul class=\"menu-inner py-1\">
            <!-- Dashboards Dropdown -->
            <li class=\"menu-item active open\">
                <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" style=\"background-color:#844062 ; color : white ; \">
                    <i class=\"menu-icon tf-icons bx bx-home-smile\"></i>
                    <div class=\"text-truncate\" data-i18n=\"Dashboards\">Dashboards</div>
                </a>
                <ul class=\"menu-sub\">
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/analysee.png\" alt=\"Logo\" width=\"32\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Analytics\">Analytics</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/staff.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Staff\">Staff</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventsBack");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/events.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 20px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Events\">Events</div>
                        </a>
                    </li>


<!--
<li class=\"menu-item\">
    <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logisticsBack");
        yield "\" class=\"menu-link\">
        <img src=\"admin/assets/img/backgrounds/Logistics.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
        <div class=\"text-truncate\" data-i18n=\"Logistics\">Logistics</div>
    </a>
</li>   
-->

<li class=\"menu-item ";
        // line 104
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "attributes", [], "any", false, false, false, 104), "get", ["_route"], "method", false, false, false, 104), ["app_logisticsBack", "category_list"])) {
            yield "active open";
        }
        yield "\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <img src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/img/backgrounds/Logistics.png"), "html", null, true);
        yield "\" alt=\"Logo\" width=\"20\" style=\"margin-right: 20px;\" />
        <div class=\"text-truncate\" data-i18n=\"Eventify Shop\">Eventify Shop</div>
        <i class=\"menu-arrow\"></i>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 111
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "request", [], "any", false, false, false, 111), "attributes", [], "any", false, false, false, 111), "get", ["_route"], "method", false, false, false, 111) == "app_logisticsBack")) {
            yield "active";
        }
        yield "\">
            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logisticsBack");
        yield "\" class=\"menu-link\">
                <div class=\"text-truncate\" data-i18n=\"Logistics\">Logistics</div>
            </a>
        </li>
        <li class=\"menu-item ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "attributes", [], "any", false, false, false, 116), "get", ["_route"], "method", false, false, false, 116) == "category_list")) {
            yield "active";
        }
        yield "\">
            <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
        yield "\" class=\"menu-link\">
                <div class=\"text-truncate\" data-i18n=\"Categories\">Categories</div>
            </a>
        </li>
    </ul>
</li>





                    <li class=\"menu-item\">
                        <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_complaintsBack");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Complaints.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Complaints\">Complaints</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forumsBack");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Forums.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Forums\">Forums</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_organizersBack");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Organizers.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Organizers\">Organizers</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offersBack");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Offers.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Offers\">Offers</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_update_profile_back");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/accounts.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Account\">Account</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logoutBack");
        yield "\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Logout.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Logout\">Logout</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_profil(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profil"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profil"));

        // line 174
        yield "    <ul class=\"navbar-nav flex-row align-items-center ms-md-auto positionProfil\">
               
        <!-- User -->
        <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
          <a
            class=\"nav-link dropdown-toggle hide-arrow p-0\"
            href=\"javascript:void(0);\"
            data-bs-toggle=\"dropdown\">
            <div class=\"avatar avatar-online\">
              <img src=\"";
        // line 183
        yield ((((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "img", [], "any", false, false, false, 183))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "img", [], "any", false, false, false, 183), "html", null, true)) : ("admin/assets/img/avatars/1.png"));
        yield "\" alt class=\" rounded-circle\" />
            </div>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li>
              <a class=\"dropdown-item\" href=\"#\">
                <div class=\"d-flex\">
                  <div class=\"flex-shrink-0 me-3\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"";
        // line 192
        yield ((((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "img", [], "any", false, false, false, 192))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "img", [], "any", false, false, false, 192), "html", null, true)) : ("admin/assets/img/avatars/1.png"));
        yield "\" alt class=\" rounded-circle\" />
                    </div>
                  </div>
                  <div class=\"flex-grow-1\">
                    <h6 class=\"mb-0\">";
        // line 196
        yield (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "firstName", [], "any", false, false, false, 196) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "lastName", [], "any", false, false, false, 196)), "html", null, true)) : ("Guest"));
        yield "</h6>
                    <small class=\"text-body-secondary\">";
        // line 197
        yield (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 197, $this->source); })())) ? ("Admin") : ("Visitor"));
        yield "</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class=\"dropdown-divider my-1\"></div>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_update_profile_back");
        yield "\">
                <i class=\"icon-base bx bx-user icon-md me-3\"></i><span>My Profile</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"#\">
                <i class=\"icon-base bx bx-cog icon-md me-3\"></i><span>Settings</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"#\">
                <span class=\"d-flex align-items-center align-middle\">
                  <i class=\"flex-shrink-0 icon-base bx bx-credit-card icon-md me-3\"></i
                  ><span class=\"flex-grow-1 align-middle\">Billing Plan</span>
                  <span class=\"flex-shrink-0 badge rounded-pill bg-danger\">4</span>
                </span>
              </a>
            </li>
            <li>
              <div class=\"dropdown-divider my-1\"></div>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logoutBack");
        yield "\">
                <i class=\"icon-base bx bx-power-off icon-md me-3\"></i><span>Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 251
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

        // line 252
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "baseAdmin.html.twig";
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
        return array (  517 => 252,  504 => 251,  483 => 228,  458 => 206,  446 => 197,  442 => 196,  435 => 192,  423 => 183,  412 => 174,  399 => 173,  376 => 159,  367 => 153,  358 => 147,  349 => 141,  340 => 135,  331 => 129,  316 => 117,  310 => 116,  303 => 112,  297 => 111,  289 => 106,  282 => 104,  272 => 97,  260 => 88,  251 => 82,  242 => 76,  219 => 56,  214 => 53,  201 => 52,  153 => 253,  151 => 251,  147 => 249,  138 => 246,  135 => 245,  131 => 244,  122 => 241,  119 => 240,  115 => 239,  112 => 238,  110 => 173,  106 => 171,  104 => 52,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\" class=\"layout-menu-fixed layout-compact\" data-assets-path=\"admin/assets/\" data-template=\"vertical-menu-template-free\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Dashboard - Admin</title>
    <meta name=\"description\" content=\"\" />

  
    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/fonts/iconify-icons.css\" />
    <!-- Flatpickr CSS -->
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/css/core.css\" />
    <link rel=\"stylesheet\" href=\"admin/assets/css/demo.css\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css\" />
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/libs/apex-charts/apex-charts.css\" />

    <!-- Custom CSS -->
    <style>
        /* Style pour le lien actif */
        .menu-link.active {
            background-color: #f8f9fa; /* Couleur de fond */
            color: #ADC29B; /* Couleur du texte */
            font-weight: bold;
            border-left: 4px solid #ADC29B; /* Bordure gauche pour indiquer l'élément actif */
        }

        .positionProfil {
            position: fixed; /* Utilise fixed pour qu'il reste visible même au scroll */
            top: 20px;       /* Ajuste la position verticale */
            right: 40px;     /* Ajuste la position horizontale */
            z-index: 9999;   /* Assure qu'il est au-dessus de tous les autres éléments */            padding: 10px;   /* Espacement interne pour améliorer le rendu */
            border-radius: 50%; /* Optionnel : pour donner un effet arrondi */
        }
        
    </style>

    <!-- Helpers -->
    <script src=\"admin/assets/vendor/js/helpers.js\"></script>
    <script src=\"admin/assets/js/config.js\"></script>
</head>

<body>
    
    {% block header %}
    <!-- Menu -->
    <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\" style=\"background-color: #e0d6cf;\">
        <div class=\"app-brand demo\">
            <a href=\"{{path('app_dashboard')}}\" class=\"app-brand-link\">
                <span class=\"app-brand-logo demo\">
                    <img src=\"admin/assets/img/backgrounds/logo.png\" alt=\"Logo\" width=\"150\" />
                </span>
            </a>
          <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\" style=\"background-color: #844062;  border: 7px solid #e0d6cf;\">
                <i class=\"bx bx-chevron-left d-block d-xl-none align-middle\" ></i>
            </a>
        </div>
        <div class=\"menu-divider mt-0\"></div>
        <div class=\"menu-inner-shadow\"></div>
        <ul class=\"menu-inner py-1\">
            <!-- Dashboards Dropdown -->
            <li class=\"menu-item active open\">
                <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" style=\"background-color:#844062 ; color : white ; \">
                    <i class=\"menu-icon tf-icons bx bx-home-smile\"></i>
                    <div class=\"text-truncate\" data-i18n=\"Dashboards\">Dashboards</div>
                </a>
                <ul class=\"menu-sub\">
                    <li class=\"menu-item\">
                        <a href=\"{{path('app_dashboard')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/analysee.png\" alt=\"Logo\" width=\"32\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Analytics\">Analytics</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{path('app_staff')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/staff.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Staff\">Staff</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{path('app_eventsBack')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/events.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 20px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Events\">Events</div>
                        </a>
                    </li>


<!--
<li class=\"menu-item\">
    <a href=\"{{path('app_logisticsBack')}}\" class=\"menu-link\">
        <img src=\"admin/assets/img/backgrounds/Logistics.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
        <div class=\"text-truncate\" data-i18n=\"Logistics\">Logistics</div>
    </a>
</li>   
-->

<li class=\"menu-item {% if app.request.attributes.get('_route') in ['app_logisticsBack', 'category_list'] %}active open{% endif %}\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <img src=\"{{ asset('admin/assets/img/backgrounds/Logistics.png') }}\" alt=\"Logo\" width=\"20\" style=\"margin-right: 20px;\" />
        <div class=\"text-truncate\" data-i18n=\"Eventify Shop\">Eventify Shop</div>
        <i class=\"menu-arrow\"></i>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_logisticsBack' %}active{% endif %}\">
            <a href=\"{{ path('app_logisticsBack') }}\" class=\"menu-link\">
                <div class=\"text-truncate\" data-i18n=\"Logistics\">Logistics</div>
            </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'category_list' %}active{% endif %}\">
            <a href=\"{{ path('category_list') }}\" class=\"menu-link\">
                <div class=\"text-truncate\" data-i18n=\"Categories\">Categories</div>
            </a>
        </li>
    </ul>
</li>





                    <li class=\"menu-item\">
                        <a href=\"{{path('app_complaintsBack')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Complaints.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Complaints\">Complaints</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{path('app_forumsBack')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Forums.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Forums\">Forums</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{path('app_organizersBack')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Organizers.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Organizers\">Organizers</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{path('app_offersBack')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Offers.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Offers\">Offers</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{path('app_update_profile_back')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/accounts.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Account\">Account</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{path('app_logoutBack')}}\" class=\"menu-link\">
                            <img src=\"admin/assets/img/backgrounds/Logout.png\" alt=\"Logo\" width=\"20\" style=\"margin-right: 10px;\" />
                            <div class=\"text-truncate\" data-i18n=\"Logout\">Logout</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>


    {% endblock %}


    {% block profil %}
    <ul class=\"navbar-nav flex-row align-items-center ms-md-auto positionProfil\">
               
        <!-- User -->
        <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
          <a
            class=\"nav-link dropdown-toggle hide-arrow p-0\"
            href=\"javascript:void(0);\"
            data-bs-toggle=\"dropdown\">
            <div class=\"avatar avatar-online\">
              <img src=\"{{ user and user.img ? user.img : 'admin/assets/img/avatars/1.png' }}\" alt class=\" rounded-circle\" />
            </div>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li>
              <a class=\"dropdown-item\" href=\"#\">
                <div class=\"d-flex\">
                  <div class=\"flex-shrink-0 me-3\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"{{ user and user.img ? user.img : 'admin/assets/img/avatars/1.png' }}\" alt class=\" rounded-circle\" />
                    </div>
                  </div>
                  <div class=\"flex-grow-1\">
                    <h6 class=\"mb-0\">{{ user ? user.firstName ~ ' ' ~ user.lastName : 'Guest' }}</h6>
                    <small class=\"text-body-secondary\">{{ user ? 'Admin' : 'Visitor' }}</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class=\"dropdown-divider my-1\"></div>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"{{path('app_update_profile_back')}}\">
                <i class=\"icon-base bx bx-user icon-md me-3\"></i><span>My Profile</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"#\">
                <i class=\"icon-base bx bx-cog icon-md me-3\"></i><span>Settings</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"#\">
                <span class=\"d-flex align-items-center align-middle\">
                  <i class=\"flex-shrink-0 icon-base bx bx-credit-card icon-md me-3\"></i
                  ><span class=\"flex-grow-1 align-middle\">Billing Plan</span>
                  <span class=\"flex-shrink-0 badge rounded-pill bg-danger\">4</span>
                </span>
              </a>
            </li>
            <li>
              <div class=\"dropdown-divider my-1\"></div>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"{{path('app_logoutBack')}}\">
                <i class=\"icon-base bx bx-power-off icon-md me-3\"></i><span>Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>

    {% endblock %}

    {% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}
{% for message in app.flashes('error') %}
    <div class=\"alert alert-danger\">
        {{ message }}
    </div>
{% endfor %}


    {% block content %}
    {% endblock %}




   






    <!-- Script pour gérer la classe active -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuLinks = document.querySelectorAll('.menu-link');

            // Ajouter un gestionnaire d'événements pour chaque lien
            menuLinks.forEach(link => {
                link.addEventListener('click', function () {
                    // Supprimer la classe 'active' de tous les liens
                    menuLinks.forEach(item => item.classList.remove('active'));

                    // Ajouter la classe 'active' au lien cliqué
                    this.classList.add('active');
                });
            });

            // Optionnel : Mettre en surbrillance le lien basé sur l'URL courante
            const currentPath = window.location.pathname;
            menuLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>", "baseAdmin.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\baseAdmin.html.twig");
    }
}
