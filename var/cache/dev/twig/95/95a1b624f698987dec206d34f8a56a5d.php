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

/* base.html.twig */
class __TwigTemplate_fe6a33cf2ea68e993d136ecf41ee8298 extends Template
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
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Eventify</title>
    <!-- CSS FILES -->                
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap\" rel=\"stylesheet\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"css/templatemo-tiya-golf-club.css\" rel=\"stylesheet\">
    
    <!-- Leaflet CSS -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
    <!-- Custom CSS -->
    <style>
        /* Style pour le lien actif */
        .nav-link.active {
            color: #007bff; /* Bleu */
            font-weight: bold;
        }
    </style>
</head>
<body>
    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 138
        yield "    ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 140
        yield "    ";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 265
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 29
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

        // line 30
        yield "    <nav class=\"navbar navbar-expand-lg\">                
        <div class=\"container\">
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <img src=\"images/WhatsApp_Image_2025-02-21_at_20.44.51-removebg-preview.png\" class=\"img-fluid navbar-logo\" alt=\"Tiya Golf Club\">
            </a>
            <div class=\"d-lg-none ms-auto me-3\">
                <a class=\"btn custom-btn custom-border-btn\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample\" role=\"button\" aria-controls=\"offcanvasExample\">Login</a>
            </div>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-lg-auto\">
                    <li >
                        <a class=\"nav-link click-scroll\" style=\"background-color: transparent; color: #ADC29B;\" href=\"#\">.</a>
                    </li>

                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>

                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">About</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Events</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservations");
        yield "\">Reservations</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
        yield "\">Forums</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_complaints");
        yield "\">Complaints</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_organizers");
        yield "\">Organizers</a>
                    </li>
                    <li class=\" dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarLightDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Shop</a>
                        <ul class=\"dropdown-menu dropdown-menu-light\" aria-labelledby=\"navbarLightDropdownMenuLink\">
                            <li><a class=\"dropdown-item nav-link\" href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics");
        yield "\">Logistics</a></li>
                            <li><a class=\"dropdown-item nav-link\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace");
        yield "\">Marketplace</a></li>
                        </ul>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"><img src=\"images/profil3.png\" style=\"width: 40px;height:30px\"></a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"><img src=\"images/eteindre1.png\" style=\"width: 35px;height:30px\"></a>
                    </li>
                </ul>
                <div class=\"d-none d-lg-block ms-lg-3\">
                    <a class=\"btn custom-btn custom-border-btn\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample\" role=\"button\" aria-controls=\"offcanvasExample\">LogIn</a>
                </div>
            </div>
        </div>
    </nav>
    <div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\">                
        <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Welcome back!</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
        </div>
        <p>Enter your Credentials to access your account</p>
        <div class=\"offcanvas-body d-flex flex-column\">
            <form id=\"login-form\" class=\"custom-form member-login-form\" action=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" role=\"form\">
                <div class=\"member-login-form-body\">
                    <div class=\"mb-4\">
                        <label class=\"form-label mb-2\" for=\"member-login-number\">email</label>
                        <input type=\"text\" name=\"member-login-number\" id=\"member-login-number\" class=\"form-control\" placeholder=\"name@gmail.com\" required>
                    </div>
                    <div class=\"mb-4\">
                        <label class=\"form-label mb-2\" for=\"member-login-password\">Password</label>
                        <div class=\"input-wrapper\">
                            <input type=\"password\" name=\"member-login-password\" id=\"member-login-password\"  class=\"form-control\" placeholder=\"Password\" required>
                            <button type=\"button\" class=\"toggle-password\" onclick=\"togglePasswordVisibilityLogIn()\">
                                <img id=\"eye-icon2\" src=\"images/oeil (1).png\" alt=\"Toggle Password Visibility login\">
                            </button>
                        </div>
                    </div>
                    <div class=\"form-check mb-4\">
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                        <label class=\"form-check-label\" for=\"flexCheckDefault\">
                            Remember me
                        </label>
                    </div>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"submit\" class=\"form-control\">Login</button>
                    </div>
                    <div class=\"text-center my-4\">
                        <a href=\"#\">Forgotten password?</a>
                    </div>
                </div>
            </form>
           
            <div class=\"mt-auto mb-5\">
                <p class=\"offcanvas-header p-login\">
                    <strong class=\"text-black me-3\">don't have an account?</strong>
                    <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\" class=\"contact-link\">
                        Create Account
                    </a>
                </p>
            </div>
        </div>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
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

        // line 139
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 141
        yield "    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <footer>
                    <div class=\"footer-container\">
                        <div class=\"footer-logo\">
                            <h2>Eventify</h2>
                            <p>For all your events: Weddings, Anniversaries, Graduations, Baby Showers, and more!</p>
                        </div>
                        <div class=\"footer-links\">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">About Us</a></li>
                                <li><a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Events</a></li>
                                <li><a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_complaints");
        yield "\">Complaints</a></li>
                                <li><a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_organizers");
        yield "\">Organizers</a></li>
                            </ul>
                        </div>
                        <div class=\"footer-contact\">
                            <h2>Contact Us</h2>
                            <p>Email: eventify@gmail.com</p>
                            <p>Phone: +216 20308557</p>
                            <p>Address: Pôle Technologique El Ghazala,
                                2088 Ariana,
                                Tunisie</p>
                        </div>
                        <div class=\"footer-social\">
                            <h2>Follow Us</h2>
                            <a href=\"https://www.facebook.com/profile.php?id=100091914981214&locale=fr_FR\"><i class=\"social-icon-link bi-facebook\"></i></a>
                            <a href=\"#\"><i class=\"social-icon-link bi-instagram\"></i></a>
                            <a href=\"#\"><i class=\"social-icon-link bi-whatsapp\"></i></a>
                        </div>
                    </div>
                    <!-- Map Section -->
                    <div class=\"footer-map\" style=\"height: 300px; margin-top: 20px;\">
                        <div id=\"map\" style=\"width: 100%; height: 100%;\"></div>
                    </div>
                    <div class=\"footer-bottom\">
                        <div class=\"footer-bottom-content\">
                           
                            <p>&copy; 2025 Eventify. All Rights Reserved.</p>
                        </div>
                    </div>
                    <a class=\"flechePos\" href=\"#\"><img src=\"images/top.png\" alt=\"top\" style=\"width:100px;height:100px\"></a>
                </footer>
            </div>
        </div>
        
        <!-- Leaflet JS -->
        <script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>
        <!-- Initialize the Map -->
        <script>
            // Coordinates for the static location (latitude, longitude)
            var latitude = 36.8801; // Replace with your desired latitude
            var longitude = 10.2134; // Replace with your desired longitude
            // Initialize the map
            var map = L.map('map').setView([latitude, longitude], 15); // Zoom level: 15
            // Add a tile layer from OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);
            // Custom red marker icon
            var redIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
                iconSize: [25, 41], // Size of the icon
                iconAnchor: [12, 41], // Point of the icon which corresponds to marker's location
                popupAnchor: [1, -34], // Point from which the popup should open relative to the iconAnchor
                shadowSize: [41, 41] // Size of the shadow
            });
            // Add a marker with the custom red icon
            L.marker([latitude, longitude], { icon: redIcon }).addTo(map)
                .bindPopup('Eventify Headquarters') // Popup text
                .openPopup();

                function togglePasswordVisibilityLogIn() {
                    const passwordField = document.getElementById('member-login-password');
                    const eyeIcon = document.getElementById('eye-icon2');
            
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text'; // Affiche le mot de passe
                        eyeIcon.src = 'images/oeil.png'; // Change l'image pour l'œil ouvert
                    } else {
                        passwordField.type = 'password'; // Masque le mot de passe
                        eyeIcon.src = 'images/oeil (1).png'; // Change l'image pour l'œil fermé
                    }
                }
        </script>

        <!-- JAVASCRIPT FILES -->
        <script src=\"js/jquery.min.js\"></script>
        <script src=\"js/bootstrap.bundle.min.js\"></script>
        <script src=\"js/jquery.sticky.js\"></script>
        <script src=\"js/click-scroll.js\"></script>
        <script src=\"js/animated-headline.js\"></script>
        <script src=\"js/modernizr.js\"></script>
        <script src=\"js/custom.js\"></script>
        <!-- Highlight Active Link -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const navLinks = document.querySelectorAll('.nav-link');

                // Add click event listeners to all links
                navLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        // Remove 'active' class from all links
                        navLinks.forEach(item => item.classList.remove('active'));

                        // Add 'active' class to the clicked link
                        this.classList.add('active');
                    });
                });

                // Optional: Highlight the link based on the current URL
                const currentPath = window.location.pathname;
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === currentPath) {
                        link.classList.add('active');
                    }
                });
            });
        </script>
    </footer>
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  337 => 156,  333 => 155,  329 => 154,  325 => 153,  311 => 141,  298 => 140,  287 => 139,  274 => 138,  254 => 129,  218 => 96,  199 => 80,  193 => 77,  186 => 73,  182 => 72,  174 => 67,  168 => 64,  162 => 61,  156 => 58,  150 => 55,  144 => 52,  137 => 48,  118 => 32,  114 => 30,  101 => 29,  89 => 265,  86 => 140,  83 => 138,  81 => 29,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Eventify</title>
    <!-- CSS FILES -->                
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap\" rel=\"stylesheet\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"css/templatemo-tiya-golf-club.css\" rel=\"stylesheet\">
    
    <!-- Leaflet CSS -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
    <!-- Custom CSS -->
    <style>
        /* Style pour le lien actif */
        .nav-link.active {
            color: #007bff; /* Bleu */
            font-weight: bold;
        }
    </style>
</head>
<body>
    {% block header %}
    <nav class=\"navbar navbar-expand-lg\">                
        <div class=\"container\">
            <a href=\"{{path('app_home')}}\">
                <img src=\"images/WhatsApp_Image_2025-02-21_at_20.44.51-removebg-preview.png\" class=\"img-fluid navbar-logo\" alt=\"Tiya Golf Club\">
            </a>
            <div class=\"d-lg-none ms-auto me-3\">
                <a class=\"btn custom-btn custom-border-btn\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample\" role=\"button\" aria-controls=\"offcanvasExample\">Login</a>
            </div>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-lg-auto\">
                    <li >
                        <a class=\"nav-link click-scroll\" style=\"background-color: transparent; color: #ADC29B;\" href=\"#\">.</a>
                    </li>

                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_home')}}\">Home</a>

                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_about')}}\">About</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_events')}}\">Events</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_reservations')}}\">Reservations</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_forums')}}\">Forums</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_complaints')}}\">Complaints</a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_organizers')}}\">Organizers</a>
                    </li>
                    <li class=\" dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarLightDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Shop</a>
                        <ul class=\"dropdown-menu dropdown-menu-light\" aria-labelledby=\"navbarLightDropdownMenuLink\">
                            <li><a class=\"dropdown-item nav-link\" href=\"{{path('app_logistics')}}\">Logistics</a></li>
                            <li><a class=\"dropdown-item nav-link\" href=\"{{path('app_marketplace')}}\">Marketplace</a></li>
                        </ul>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_profile')}}\"><img src=\"images/profil3.png\" style=\"width: 40px;height:30px\"></a>
                    </li>
                    <li >
                        <a class=\"nav-link click-scroll\" href=\"{{path('app_logout')}}\"><img src=\"images/eteindre1.png\" style=\"width: 35px;height:30px\"></a>
                    </li>
                </ul>
                <div class=\"d-none d-lg-block ms-lg-3\">
                    <a class=\"btn custom-btn custom-border-btn\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample\" role=\"button\" aria-controls=\"offcanvasExample\">LogIn</a>
                </div>
            </div>
        </div>
    </nav>
    <div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\">                
        <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Welcome back!</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
        </div>
        <p>Enter your Credentials to access your account</p>
        <div class=\"offcanvas-body d-flex flex-column\">
            <form id=\"login-form\" class=\"custom-form member-login-form\" action=\"{{ path('app_login') }}\" method=\"post\" role=\"form\">
                <div class=\"member-login-form-body\">
                    <div class=\"mb-4\">
                        <label class=\"form-label mb-2\" for=\"member-login-number\">email</label>
                        <input type=\"text\" name=\"member-login-number\" id=\"member-login-number\" class=\"form-control\" placeholder=\"name@gmail.com\" required>
                    </div>
                    <div class=\"mb-4\">
                        <label class=\"form-label mb-2\" for=\"member-login-password\">Password</label>
                        <div class=\"input-wrapper\">
                            <input type=\"password\" name=\"member-login-password\" id=\"member-login-password\"  class=\"form-control\" placeholder=\"Password\" required>
                            <button type=\"button\" class=\"toggle-password\" onclick=\"togglePasswordVisibilityLogIn()\">
                                <img id=\"eye-icon2\" src=\"images/oeil (1).png\" alt=\"Toggle Password Visibility login\">
                            </button>
                        </div>
                    </div>
                    <div class=\"form-check mb-4\">
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                        <label class=\"form-check-label\" for=\"flexCheckDefault\">
                            Remember me
                        </label>
                    </div>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"submit\" class=\"form-control\">Login</button>
                    </div>
                    <div class=\"text-center my-4\">
                        <a href=\"#\">Forgotten password?</a>
                    </div>
                </div>
            </form>
           
            <div class=\"mt-auto mb-5\">
                <p class=\"offcanvas-header p-login\">
                    <strong class=\"text-black me-3\">don't have an account?</strong>
                    <a href=\"{{path('app_signup')}}\" class=\"contact-link\">
                        Create Account
                    </a>
                </p>
            </div>
        </div>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
    </div>
    {% endblock %}
    {% block content %}
    {% endblock %}
    {% block footer %}
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <footer>
                    <div class=\"footer-container\">
                        <div class=\"footer-logo\">
                            <h2>Eventify</h2>
                            <p>For all your events: Weddings, Anniversaries, Graduations, Baby Showers, and more!</p>
                        </div>
                        <div class=\"footer-links\">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href=\"{{path('app_about')}}\">About Us</a></li>
                                <li><a href=\"{{path('app_events')}}\">Events</a></li>
                                <li><a href=\"{{path('app_complaints')}}\">Complaints</a></li>
                                <li><a href=\"{{path('app_organizers')}}\">Organizers</a></li>
                            </ul>
                        </div>
                        <div class=\"footer-contact\">
                            <h2>Contact Us</h2>
                            <p>Email: eventify@gmail.com</p>
                            <p>Phone: +216 20308557</p>
                            <p>Address: Pôle Technologique El Ghazala,
                                2088 Ariana,
                                Tunisie</p>
                        </div>
                        <div class=\"footer-social\">
                            <h2>Follow Us</h2>
                            <a href=\"https://www.facebook.com/profile.php?id=100091914981214&locale=fr_FR\"><i class=\"social-icon-link bi-facebook\"></i></a>
                            <a href=\"#\"><i class=\"social-icon-link bi-instagram\"></i></a>
                            <a href=\"#\"><i class=\"social-icon-link bi-whatsapp\"></i></a>
                        </div>
                    </div>
                    <!-- Map Section -->
                    <div class=\"footer-map\" style=\"height: 300px; margin-top: 20px;\">
                        <div id=\"map\" style=\"width: 100%; height: 100%;\"></div>
                    </div>
                    <div class=\"footer-bottom\">
                        <div class=\"footer-bottom-content\">
                           
                            <p>&copy; 2025 Eventify. All Rights Reserved.</p>
                        </div>
                    </div>
                    <a class=\"flechePos\" href=\"#\"><img src=\"images/top.png\" alt=\"top\" style=\"width:100px;height:100px\"></a>
                </footer>
            </div>
        </div>
        
        <!-- Leaflet JS -->
        <script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>
        <!-- Initialize the Map -->
        <script>
            // Coordinates for the static location (latitude, longitude)
            var latitude = 36.8801; // Replace with your desired latitude
            var longitude = 10.2134; // Replace with your desired longitude
            // Initialize the map
            var map = L.map('map').setView([latitude, longitude], 15); // Zoom level: 15
            // Add a tile layer from OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);
            // Custom red marker icon
            var redIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
                iconSize: [25, 41], // Size of the icon
                iconAnchor: [12, 41], // Point of the icon which corresponds to marker's location
                popupAnchor: [1, -34], // Point from which the popup should open relative to the iconAnchor
                shadowSize: [41, 41] // Size of the shadow
            });
            // Add a marker with the custom red icon
            L.marker([latitude, longitude], { icon: redIcon }).addTo(map)
                .bindPopup('Eventify Headquarters') // Popup text
                .openPopup();

                function togglePasswordVisibilityLogIn() {
                    const passwordField = document.getElementById('member-login-password');
                    const eyeIcon = document.getElementById('eye-icon2');
            
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text'; // Affiche le mot de passe
                        eyeIcon.src = 'images/oeil.png'; // Change l'image pour l'œil ouvert
                    } else {
                        passwordField.type = 'password'; // Masque le mot de passe
                        eyeIcon.src = 'images/oeil (1).png'; // Change l'image pour l'œil fermé
                    }
                }
        </script>

        <!-- JAVASCRIPT FILES -->
        <script src=\"js/jquery.min.js\"></script>
        <script src=\"js/bootstrap.bundle.min.js\"></script>
        <script src=\"js/jquery.sticky.js\"></script>
        <script src=\"js/click-scroll.js\"></script>
        <script src=\"js/animated-headline.js\"></script>
        <script src=\"js/modernizr.js\"></script>
        <script src=\"js/custom.js\"></script>
        <!-- Highlight Active Link -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const navLinks = document.querySelectorAll('.nav-link');

                // Add click event listeners to all links
                navLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        // Remove 'active' class from all links
                        navLinks.forEach(item => item.classList.remove('active'));

                        // Add 'active' class to the clicked link
                        this.classList.add('active');
                    });
                });

                // Optional: Highlight the link based on the current URL
                const currentPath = window.location.pathname;
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === currentPath) {
                        link.classList.add('active');
                    }
                });
            });
        </script>
    </footer>
    {% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\base.html.twig");
    }
}
