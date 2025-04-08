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

/* login/index.html.twig */
class __TwigTemplate_763ff308abb5a75b0fafef0c8012cb3d extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        yield "

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Get Started Now</title>
    
     <!-- CSS FILES -->    

     <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">

     <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

     <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap\" rel=\"stylesheet\">

     <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
  

     <link href=\"css/bootstrap-icons.css\" rel=\"stylesheet\">
      

     <link href=\"css/templatemo-tiya-golf-club.css\" rel=\"stylesheet\">
     <link rel=\"stylesheet\" href=\"css/signup.css\">  
             

</head>
<body>

  
   
    <svg xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z\"></path></svg>
           
        <div class=\"container\">
        <!-- Section gauche : Image de fond -->

        <div >
            <img src=\"images/3.jpg\" alt=\"Background Image\" class=\"background-image\" style=\"width: 100%; height: 100%; margin-top: -150px;\">
        </div>

        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"postionHome\">
            <img 
                src=\"images/home3.png\" 
                alt=\"Home\" 
                style=\"
                    z-index: 9999; 
                    position: absolute; 
                    top: 50px; 
                    left: 30px; 
                    width: 30px; 
                    height: 30px;
                    transition: transform 0.3s ease; /* Transition fluide */
                \" 
                onmouseover=\"this.style.transform='scale(1.2)';\" 
                onmouseout=\"this.style.transform='scale(1)';\"
            >
        </a>

       
       
       
        
        <div class=\"offcanvas offcanvas-end show\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\" style=\"visibility: visible;\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <p>Enter your Credentials to access your account</p>
            <div class=\"offcanvas-body d-flex flex-column\">
                <form id=\"login-form\" class=\"custom-form member-login-form\" action=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" role=\"form\">
                    <div class=\"member-login-form-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-number\">Email</label>
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
                            <label class=\"form-check-label\" for=\"flexCheckDefault\">Remember me</label>
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
                        <strong class=\"text-black me-3\">Don't have an account?</strong>
                        <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\" class=\"contact-link\">Create Account</a>
                    </p>
                </div>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>

        <!-- Section droite :  -->
        <div class=\"right-section\" style=\"margin-top: -330px;\">
           
            <div class=\"login-page\" style=\"margin-right: 290px;\">
                <div class=\"content\">
                    <h2>Welcome to Eventify</h2>
                    <p style=\"display: flex; align-items: center;\">
                        Join us and plan your dream event today! 
                        <span style=\"margin-left: 10px;\">➡️</span>
                    </p>
                    
                    <div class=\"features\">
                        <div class=\"feature\">
                            <h3>🎯 Easy Planning</h3>
                            <p>From weddings to graduations, manage it all in one place.</p>
                        </div>
                        <div class=\"feature\">
                            <h3>💬 Real-Time Support</h3>
                            <p>Our team is here to help you every step of the way.</p>
                        </div>
                        <div class=\"feature\">
                            <h3>📸 Memorable Moments</h3>
                            <p>Capture and cherish every special memory.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
    
    
    
    <script>
    
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
    
            if (passwordField.type === 'password') {
                passwordField.type = 'text'; // Affiche le mot de passe
                eyeIcon.src = 'images/oeil.png'; // Change l'image pour l'œil ouvert
            } else {
                passwordField.type = 'password'; // Masque le mot de passe
                eyeIcon.src = 'images/oeil (1).png'; // Change l'image pour l'œil fermé
            }
        }



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
</body>
</html>





























";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/index.html.twig";
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
        return array (  157 => 102,  123 => 71,  91 => 42,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Get Started Now</title>
    
     <!-- CSS FILES -->    

     <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">

     <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

     <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap\" rel=\"stylesheet\">

     <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
  

     <link href=\"css/bootstrap-icons.css\" rel=\"stylesheet\">
      

     <link href=\"css/templatemo-tiya-golf-club.css\" rel=\"stylesheet\">
     <link rel=\"stylesheet\" href=\"css/signup.css\">  
             

</head>
<body>

  
   
    <svg xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z\"></path></svg>
           
        <div class=\"container\">
        <!-- Section gauche : Image de fond -->

        <div >
            <img src=\"images/3.jpg\" alt=\"Background Image\" class=\"background-image\" style=\"width: 100%; height: 100%; margin-top: -150px;\">
        </div>

        <a href=\"{{ path('app_home') }}\" class=\"postionHome\">
            <img 
                src=\"images/home3.png\" 
                alt=\"Home\" 
                style=\"
                    z-index: 9999; 
                    position: absolute; 
                    top: 50px; 
                    left: 30px; 
                    width: 30px; 
                    height: 30px;
                    transition: transform 0.3s ease; /* Transition fluide */
                \" 
                onmouseover=\"this.style.transform='scale(1.2)';\" 
                onmouseout=\"this.style.transform='scale(1)';\"
            >
        </a>

       
       
       
        
        <div class=\"offcanvas offcanvas-end show\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\" style=\"visibility: visible;\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <p>Enter your Credentials to access your account</p>
            <div class=\"offcanvas-body d-flex flex-column\">
                <form id=\"login-form\" class=\"custom-form member-login-form\" action=\"{{ path('app_login') }}\" method=\"post\" role=\"form\">
                    <div class=\"member-login-form-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-number\">Email</label>
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
                            <label class=\"form-check-label\" for=\"flexCheckDefault\">Remember me</label>
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
                        <strong class=\"text-black me-3\">Don't have an account?</strong>
                        <a href=\"{{path('app_signup')}}\" class=\"contact-link\">Create Account</a>
                    </p>
                </div>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>

        <!-- Section droite :  -->
        <div class=\"right-section\" style=\"margin-top: -330px;\">
           
            <div class=\"login-page\" style=\"margin-right: 290px;\">
                <div class=\"content\">
                    <h2>Welcome to Eventify</h2>
                    <p style=\"display: flex; align-items: center;\">
                        Join us and plan your dream event today! 
                        <span style=\"margin-left: 10px;\">➡️</span>
                    </p>
                    
                    <div class=\"features\">
                        <div class=\"feature\">
                            <h3>🎯 Easy Planning</h3>
                            <p>From weddings to graduations, manage it all in one place.</p>
                        </div>
                        <div class=\"feature\">
                            <h3>💬 Real-Time Support</h3>
                            <p>Our team is here to help you every step of the way.</p>
                        </div>
                        <div class=\"feature\">
                            <h3>📸 Memorable Moments</h3>
                            <p>Capture and cherish every special memory.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
    
    
    
    <script>
    
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
    
            if (passwordField.type === 'password') {
                passwordField.type = 'text'; // Affiche le mot de passe
                eyeIcon.src = 'images/oeil.png'; // Change l'image pour l'œil ouvert
            } else {
                passwordField.type = 'password'; // Masque le mot de passe
                eyeIcon.src = 'images/oeil (1).png'; // Change l'image pour l'œil fermé
            }
        }



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
</body>
</html>





























", "login/index.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\login\\index.html.twig");
    }
}
