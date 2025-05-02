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
class __TwigTemplate_53ee58987611d227b33a3bd25a65c145 extends Template
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

       
       
       
        <!-- partie pour login-->
        <div class=\"offcanvas offcanvas-end show\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\" style=\"visibility: visible;\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <div class=\"mb-4\">
                <p class=\"form-label mb-2\">Login with Face Recognition!</p>
                <div class=\"camera-container\">
                    <video id=\"camera\" autoplay muted style=\"width: 200px; height: auto; border-radius: 10px;margin-left:80px;\"></video>
                    <canvas id=\"capturedCanvas\" style=\"display: none;\"></canvas>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"button\" class=\"form-control\" onclick=\"capturePhoto()\" style=\"background-color:#844062;color:white;margin-left:10px;\">Capture Photo</button>
                    </div>
                    
                </div>
            </div>
            <input type=\"hidden\" id=\"capturedPhoto\" name=\"capturedPhoto\">
            <!-- Champ caché pour stocker le descripteur de visage généré par Face API -->
                <input type=\"hidden\" id=\"faceDescriptor\" name=\"faceDescriptor\">
            <span style=\"margin-left:60px;\">-----------Or-----------</span>
                <p>Enter your Credentials to access your account</p>
            <div class=\"offcanvas-body d-flex flex-column\">
                <form id=\"login-form\" class=\"custom-form member-login-form\" action=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" role=\"form\">
                    <div class=\"member-login-form-body\">
                       
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-number\">Email</label>
                            <input type=\"text\" name=\"member-login-number\" id=\"member-login-number\" class=\"form-control\" 
                                   value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 92, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"name@gmail.com\" required autocomplete=\"new-email\">
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-password\">Password</label>
                            <div class=\"input-wrapper\">
                                <input type=\"password\" name=\"member-login-password\" id=\"member-login-password\"  class=\"form-control\" placeholder=\"Password\" required autocomplete=\"new-password\">
                                <button type=\"button\" class=\"toggle-password\" onclick=\"togglePasswordVisibilityLogIn()\">
                                    <img id=\"eye-icon2\" src=\"images/oeil (1).png\" alt=\"Toggle Password Visibility login\">
                                </button>
                            </div>
                        </div>
                        <div class=\"form-check mb-4\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"flexCheckDefault\">
                            <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                Remember me
                            </label>
                        </div>
                        <div class=\"d-flex flex-column w-100\">
                            <button type=\"submit\" class=\"btn custom-btn custom-border-btn mb-3\">Login</button>
                        </div>
                        <div class=\"d-flex flex-column w-100\">
                            <button type=\"button\" class=\"btn custom-btn custom-border-btn mb-3\" style=\"margin-top:10px;\" onclick=\"compareFaces()\">Login with Face Recognition</button>
                            
                           
                        </div>
                        
                        <div class=\"text-center my-4\">
                            <a href=\"#\" class=\"forgot-password-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#forgotPasswordOffcanvas\">Forgotten password?</a>
                        </div>
                    </div>
                </form>
               
                <div class=\"mt-auto mb-5\">
                    <p class=\"offcanvas-header p-login\">
                        <strong class=\"text-black me-3\">Don't have an account?</strong>
                        <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\" class=\"contact-link\">Create Account</a>
                    </p>
                </div>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>
        
        ";
        // line 134
        if ((array_key_exists("alert", $context) &&  !(null === (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 134, $this->source); })())))) {
            // line 135
            yield "        <div class=\"alert-container\">
            <div class=\"alert alert-";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 136, $this->source); })()), "type", [], "any", false, false, false, 136), "html", null, true);
            yield "\">
                <span>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 137, $this->source); })()), "message", [], "any", false, false, false, 137), "html", null, true);
            yield "</span>
                <button class=\"close-btn\" onclick=\"closeAlert()\">×</button>
            </div>
        </div>
    ";
        }
        // line 142
        yield "

        
        <!-- partie pour forgot password-->

        <div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"forgotPasswordOffcanvas\" aria-labelledby=\"forgotPasswordOffcanvasLabel\">
            <div class=\"offcanvas-header\">
                <!-- Flèche de retour -->
                <button type=\"button\" class=\"btn btn-link text-decoration-none\" onclick=\"switchToLoginOffcanvas()\" aria-label=\"Back\">
                    <img src=\"images/fleche.png\" alt=\"Back\" style=\"width: 24px; height: 24px;\">
                </button>
                <h5 class=\"offcanvas-title ms-2\" id=\"forgotPasswordOffcanvasLabel\">Forgot Password!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <p style=\"margin-top: 30px;\">Enter your email to reset your password</p>
            <div class=\"offcanvas-body d-flex flex-column\" style=\"margin-top: 60px;\">
                <form id=\"forgot-password-form\" class=\"custom-form\" action=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" method=\"post\" role=\"form\">
                    <div class=\"mb-4\">
                        <label class=\"form-label mb-2\" for=\"forgot-password-email\">Email</label>
                        <input type=\"email\" name=\"forgot-password-email\" id=\"forgot-password-email\" class=\"form-control\" placeholder=\"name@gmail.com\" required>
                    </div>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"submit\" class=\"form-control\">Send</button>
                    </div>
                </form>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>

        <!-- Section droite :  -->
        <div class=\"right-section\" style=\"margin-top: -330px;\">
           
            <div class=\"login-page\" style=\"margin-right: 290px;\">
                <div >
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
    <!--scripts pour reconnaissance faciale-->
    <script defer src=\"https://cdn.jsdelivr.net/npm/@tensorflow/tfjs\"></script>
    <script defer src=\"https://cdn.jsdelivr.net/npm/@vladmandic/face-api/dist/face-api.min.js\"></script>
    <script>
        let videoStream;
    
        async function startCamera() {
            const video = document.getElementById('camera');
            videoStream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = videoStream;
        }
    
        function capturePhoto() {
            const video = document.getElementById('camera');
            const canvas = document.getElementById('capturedCanvas');
            const context = canvas.getContext('2d');
    
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
    
            // Convertir l'image capturée en base64
            const capturedPhoto = canvas.toDataURL('image/png');
            document.getElementById('capturedPhoto').value = capturedPhoto;
    
            alert('Photo captured! You can now log in.');
        }
    
        async function loadFaceAPI() {
            console.log('Loading Face API models...');
            await faceapi.nets.ssdMobilenetv1.loadFromUri('/models'); // Charger les modèles
            await faceapi.nets.faceRecognitionNet.loadFromUri('/models');
            await faceapi.nets.faceLandmark68Net.loadFromUri('/models');
            console.log('Face API models loaded successfully!');
        }
    
        async function compareFaces() {
            const capturedPhoto = document.getElementById('capturedPhoto').value;
            if (!capturedPhoto) {
                alert('Please capture a photo first.');
                return;
            }
        
            const image = await faceapi.fetchImage(capturedPhoto);
            const detections = await faceapi.detectSingleFace(image).withFaceLandmarks().withFaceDescriptor();
        
            if (!detections) {
                alert('No face detected. Please try again.');
                return;
            }
        
            const descriptor = detections.descriptor;
        
            // Envoyer les données au serveur pour comparaison
            const response = await fetch('/compare-faces', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ descriptors: descriptor })
            });
        
            const result = await response.json();
            if (result.success) {
                alert('Face recognized! Redirecting...');
                window.location.href = result.redirect; // Rediriger en fonction du rôle
            } else {
                alert('Face not recognized. Please try again.');
            }
        }
    
        // Démarrer la caméra et charger Face API
        window.onload = async () => {
            await loadFaceAPI();
            await startCamera();
        };
    </script>
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
     <script src=\"js/user.js\"></script>
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
        return array (  230 => 158,  212 => 142,  204 => 137,  200 => 136,  197 => 135,  195 => 134,  185 => 127,  147 => 92,  138 => 86,  91 => 42,  48 => 1,);
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

       
       
       
        <!-- partie pour login-->
        <div class=\"offcanvas offcanvas-end show\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\" style=\"visibility: visible;\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <div class=\"mb-4\">
                <p class=\"form-label mb-2\">Login with Face Recognition!</p>
                <div class=\"camera-container\">
                    <video id=\"camera\" autoplay muted style=\"width: 200px; height: auto; border-radius: 10px;margin-left:80px;\"></video>
                    <canvas id=\"capturedCanvas\" style=\"display: none;\"></canvas>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"button\" class=\"form-control\" onclick=\"capturePhoto()\" style=\"background-color:#844062;color:white;margin-left:10px;\">Capture Photo</button>
                    </div>
                    
                </div>
            </div>
            <input type=\"hidden\" id=\"capturedPhoto\" name=\"capturedPhoto\">
            <!-- Champ caché pour stocker le descripteur de visage généré par Face API -->
                <input type=\"hidden\" id=\"faceDescriptor\" name=\"faceDescriptor\">
            <span style=\"margin-left:60px;\">-----------Or-----------</span>
                <p>Enter your Credentials to access your account</p>
            <div class=\"offcanvas-body d-flex flex-column\">
                <form id=\"login-form\" class=\"custom-form member-login-form\" action=\"{{ path('app_login') }}\" method=\"post\" role=\"form\">
                    <div class=\"member-login-form-body\">
                       
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-number\">Email</label>
                            <input type=\"text\" name=\"member-login-number\" id=\"member-login-number\" class=\"form-control\" 
                                   value=\"{{ email }}\" placeholder=\"name@gmail.com\" required autocomplete=\"new-email\">
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label mb-2\" for=\"member-login-password\">Password</label>
                            <div class=\"input-wrapper\">
                                <input type=\"password\" name=\"member-login-password\" id=\"member-login-password\"  class=\"form-control\" placeholder=\"Password\" required autocomplete=\"new-password\">
                                <button type=\"button\" class=\"toggle-password\" onclick=\"togglePasswordVisibilityLogIn()\">
                                    <img id=\"eye-icon2\" src=\"images/oeil (1).png\" alt=\"Toggle Password Visibility login\">
                                </button>
                            </div>
                        </div>
                        <div class=\"form-check mb-4\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"flexCheckDefault\">
                            <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                Remember me
                            </label>
                        </div>
                        <div class=\"d-flex flex-column w-100\">
                            <button type=\"submit\" class=\"btn custom-btn custom-border-btn mb-3\">Login</button>
                        </div>
                        <div class=\"d-flex flex-column w-100\">
                            <button type=\"button\" class=\"btn custom-btn custom-border-btn mb-3\" style=\"margin-top:10px;\" onclick=\"compareFaces()\">Login with Face Recognition</button>
                            
                           
                        </div>
                        
                        <div class=\"text-center my-4\">
                            <a href=\"#\" class=\"forgot-password-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#forgotPasswordOffcanvas\">Forgotten password?</a>
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
        
        {% if alert is defined and alert is not null %}
        <div class=\"alert-container\">
            <div class=\"alert alert-{{ alert.type }}\">
                <span>{{ alert.message }}</span>
                <button class=\"close-btn\" onclick=\"closeAlert()\">×</button>
            </div>
        </div>
    {% endif %}


        
        <!-- partie pour forgot password-->

        <div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"forgotPasswordOffcanvas\" aria-labelledby=\"forgotPasswordOffcanvasLabel\">
            <div class=\"offcanvas-header\">
                <!-- Flèche de retour -->
                <button type=\"button\" class=\"btn btn-link text-decoration-none\" onclick=\"switchToLoginOffcanvas()\" aria-label=\"Back\">
                    <img src=\"images/fleche.png\" alt=\"Back\" style=\"width: 24px; height: 24px;\">
                </button>
                <h5 class=\"offcanvas-title ms-2\" id=\"forgotPasswordOffcanvasLabel\">Forgot Password!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <p style=\"margin-top: 30px;\">Enter your email to reset your password</p>
            <div class=\"offcanvas-body d-flex flex-column\" style=\"margin-top: 60px;\">
                <form id=\"forgot-password-form\" class=\"custom-form\" action=\"{{ path('app_forgot_password') }}\" method=\"post\" role=\"form\">
                    <div class=\"mb-4\">
                        <label class=\"form-label mb-2\" for=\"forgot-password-email\">Email</label>
                        <input type=\"email\" name=\"forgot-password-email\" id=\"forgot-password-email\" class=\"form-control\" placeholder=\"name@gmail.com\" required>
                    </div>
                    <div class=\"col-lg-5 col-md-7 col-8 mx-auto\">
                        <button type=\"submit\" class=\"form-control\">Send</button>
                    </div>
                </form>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
        </div>

        <!-- Section droite :  -->
        <div class=\"right-section\" style=\"margin-top: -330px;\">
           
            <div class=\"login-page\" style=\"margin-right: 290px;\">
                <div >
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
    <!--scripts pour reconnaissance faciale-->
    <script defer src=\"https://cdn.jsdelivr.net/npm/@tensorflow/tfjs\"></script>
    <script defer src=\"https://cdn.jsdelivr.net/npm/@vladmandic/face-api/dist/face-api.min.js\"></script>
    <script>
        let videoStream;
    
        async function startCamera() {
            const video = document.getElementById('camera');
            videoStream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = videoStream;
        }
    
        function capturePhoto() {
            const video = document.getElementById('camera');
            const canvas = document.getElementById('capturedCanvas');
            const context = canvas.getContext('2d');
    
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
    
            // Convertir l'image capturée en base64
            const capturedPhoto = canvas.toDataURL('image/png');
            document.getElementById('capturedPhoto').value = capturedPhoto;
    
            alert('Photo captured! You can now log in.');
        }
    
        async function loadFaceAPI() {
            console.log('Loading Face API models...');
            await faceapi.nets.ssdMobilenetv1.loadFromUri('/models'); // Charger les modèles
            await faceapi.nets.faceRecognitionNet.loadFromUri('/models');
            await faceapi.nets.faceLandmark68Net.loadFromUri('/models');
            console.log('Face API models loaded successfully!');
        }
    
        async function compareFaces() {
            const capturedPhoto = document.getElementById('capturedPhoto').value;
            if (!capturedPhoto) {
                alert('Please capture a photo first.');
                return;
            }
        
            const image = await faceapi.fetchImage(capturedPhoto);
            const detections = await faceapi.detectSingleFace(image).withFaceLandmarks().withFaceDescriptor();
        
            if (!detections) {
                alert('No face detected. Please try again.');
                return;
            }
        
            const descriptor = detections.descriptor;
        
            // Envoyer les données au serveur pour comparaison
            const response = await fetch('/compare-faces', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ descriptors: descriptor })
            });
        
            const result = await response.json();
            if (result.success) {
                alert('Face recognized! Redirecting...');
                window.location.href = result.redirect; // Rediriger en fonction du rôle
            } else {
                alert('Face not recognized. Please try again.');
            }
        }
    
        // Démarrer la caméra et charger Face API
        window.onload = async () => {
            await loadFaceAPI();
            await startCamera();
        };
    </script>
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
     <script src=\"js/user.js\"></script>
</body>
</html>





























", "login/index.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\login\\index.html.twig");
    }
}
