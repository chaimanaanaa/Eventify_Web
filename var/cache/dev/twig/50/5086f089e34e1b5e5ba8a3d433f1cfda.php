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

/* login/update_profile.html.twig */
class __TwigTemplate_7438fc39235ce9960575bdd306fc1444 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/update_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/update_profile.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
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
            <img src=\"images/11.jpg\" alt=\"Background Image\" class=\"background-image\" style=\"width: 100%; height: 100%; margin-top: -150px;\">
        </div>

        <a href=\"";
        // line 40
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

       

        <!-- Section centrale : Formulaire -->
        <div class=\"center-section\" style=\"margin-top: -230px;\">
            <h1 class=\"main-title\" style=\"font-size:45px\">Update Profile</h1>
            <p class=\"subtitle\">With Eventify you can easily update your account</p>

            <form id=\"update-profile-form\" class=\"update-profile-form\" method=\"post\" action=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_update_profile");
        yield "\" enctype=\"multipart/form-data\">
                <!-- Ligne 1 : First Name & Last Name -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"firstName\">First Name</label>
                        <input type=\"text\" id=\"firstName\" name=\"firstName\" value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "firstName", [], "any", false, false, false, 70), "html", null, true);
        yield "\" placeholder=\"First Name\" required>
                        <span class=\"error-message\" id=\"firstNameError\"></span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"lastName\">Last Name</label>
                        <input type=\"text\" id=\"lastName\" name=\"lastName\" value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "lastName", [], "any", false, false, false, 75), "html", null, true);
        yield "\" placeholder=\"Last Name\" required>
                        <span class=\"error-message\" id=\"lastNameError\"></span>
                    </div>
                </div>

                <!-- Ligne 2 : Date of Birth & CIN -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"dateOfBirth\">Date of birth</label>
                        <input type=\"date\" id=\"dateOfBirth\" name=\"dateOfBirth\" value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "dateNaissance", [], "any", false, false, false, 84), "Y-m-d"), "html", null, true);
        yield "\" required>
                        <span class=\"error-message\" id=\"birthDateError\"></span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cin\">CIN</label>
                        <input type=\"text\" id=\"cin\" name=\"cin\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "cin", [], "any", false, false, false, 89), "html", null, true);
        yield "\" placeholder=\"CIN\" required>
                        <span class=\"error-message\" id=\"cinError\"></span>
                    </div>
                </div>

                <!-- Ligne 3 : Phone Number  -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"phoneNumber\">Phone number</label>
                        <input type=\"tel\" id=\"phoneNumber\" name=\"phoneNumber\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "numTlf", [], "any", false, false, false, 98), "html", null, true);
        yield "\" placeholder=\"Phone Number\" required>
                        <span class=\"error-message\" id=\"phoneNumberError\"></span>
                    </div>
                    
                </div>

               

                <!-- Ligne 5 :  Email -->
                <div class=\"form-row\">
                    
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "email", [], "any", false, false, false, 111), "html", null, true);
        yield "\" placeholder=\"Email\" required>
                        <span class=\"error-message\" id=\"emailError\"></span>
                    </div>
                </div>
                <input type=\"file\" id=\"fileInput\" name=\"fileInput\" accept=\"image/*\" style=\"display: none;\" onchange=\"displaySelectedImage(event)\">
                <!-- Champ caché pour la photo capturé a traver cam -->
                <input type=\"hidden\" id=\"capturedPhoto\" name=\"capturedPhoto\">
               
                <!-- Bouton update -->
                <button type=\"submit\" class=\"signup-btn\">Update</button>
            </form>
            
        </div>
        
        


        
        <!-- Section droite : Image sélectionnée -->
        <div class=\"right-section\" style=\"margin-top: -330px;\">
            <!--frame pour le camera-->
            <div class=\"camera-container\">
                <video id=\"camera-stream\" autoplay style=\"width: 100%; height: auto; display: none;\"></video>
                <canvas id=\"photo-canvas\" style=\"display: none;\"></canvas>
            </div>
            
            <div class=\"image-frame\">
                <img 
                    src=\"";
        // line 139
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "img", [], "any", false, false, false, 139)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "img", [], "any", false, false, false, 139), "html", null, true)) : ("images/profill.png"));
        yield "\" 
                    alt=\"User Profile Picture\" 
                    class=\"rounded-circle\" 
                    style=\"width: 100%; height: 100%; object-fit: cover;\"
                >
            </div>
            <div class=\"image-buttons\">
                <button type=\"button\" class=\"gallery-btn\" onclick=\"openGallery()\">
                    <img src=\"images/WhatsApp_Image_2025-02-21_at_22.33.28-removebg-preview.png\" alt=\"Select from Gallery\">
                </button>
                <span>or</span>
                <button type=\"button\" class=\"camera-btn\">
                    <img src=\"images/appareil-photo.png\" alt=\"Take Photo\">
                </button>
                <!-- Champ caché pour sélectionner un fichier -->
                <input type=\"file\" id=\"fileInput\" name=\"fileInput\" accept=\"image/*\" style=\"display: none;\" onchange=\"displaySelectedImage(event)\">
            </div>
        </div>
        ";
        // line 157
        if ((isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 157, $this->source); })())) {
            // line 158
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 158, $this->source); })()), "type", [], "any", false, false, false, 158), "html", null, true);
            yield " alert-dismissible fade show\" role=\"alert\">
        ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 159, $this->source); })()), "message", [], "any", false, false, false, 159), "html", null, true);
            yield "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
";
        }
        // line 163
        yield "    </div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
    
    
    
    
    <!--script pour le camera-->
    <script>
        document.querySelector('.camera-btn').addEventListener('click', function () {
            console.log('Camera button clicked');
            const video = document.getElementById('camera-stream');
            const canvas = document.getElementById('photo-canvas');
            const capturedPhotoInput = document.getElementById('capturedPhoto');
            const imageFrame = document.querySelector('.image-frame');
        
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    console.log('Camera access granted');
                    video.srcObject = stream;
                    video.style.display = 'block';
        
                    setTimeout(function () {
                        console.log('Capturing photo...');
                        canvas.width = video.videoWidth;
                        canvas.height = video.videoHeight;
        
                        const context = canvas.getContext('2d');
                        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        
                        // Convertir l'image en base64 et la stocker dans le champ caché
                        const imageData = canvas.toDataURL('image/png');
                        console.log('Image captured:', imageData);
                        capturedPhotoInput.value = imageData;
                        console.log('Captured photo input value:', capturedPhotoInput.value);
        
                        // Afficher l'image capturée dans le conteneur
                        imageFrame.innerHTML = `<img src=\"\${imageData}\" alt=\"Captured Photo\" style=\"width: 100%; height: auto; border-radius: 10px;\">`;
        
                        // Arrêter la caméra
                        const tracks = stream.getTracks();
                        tracks.forEach(track => track.stop());
        
                        video.style.display = 'none';
                    }, 4000);
                })
                .catch(function (error) {
                    console.error('Error accessing the camera:', error);
                    alert('Unable to access the camera. Please check your permissions.');
                });
        });
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
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/update_profile.html.twig";
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
        return array (  247 => 163,  240 => 159,  235 => 158,  233 => 157,  212 => 139,  181 => 111,  165 => 98,  153 => 89,  145 => 84,  133 => 75,  125 => 70,  117 => 65,  89 => 40,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
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
            <img src=\"images/11.jpg\" alt=\"Background Image\" class=\"background-image\" style=\"width: 100%; height: 100%; margin-top: -150px;\">
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

       

        <!-- Section centrale : Formulaire -->
        <div class=\"center-section\" style=\"margin-top: -230px;\">
            <h1 class=\"main-title\" style=\"font-size:45px\">Update Profile</h1>
            <p class=\"subtitle\">With Eventify you can easily update your account</p>

            <form id=\"update-profile-form\" class=\"update-profile-form\" method=\"post\" action=\"{{ path('app_update_profile') }}\" enctype=\"multipart/form-data\">
                <!-- Ligne 1 : First Name & Last Name -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"firstName\">First Name</label>
                        <input type=\"text\" id=\"firstName\" name=\"firstName\" value=\"{{ user.firstName }}\" placeholder=\"First Name\" required>
                        <span class=\"error-message\" id=\"firstNameError\"></span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"lastName\">Last Name</label>
                        <input type=\"text\" id=\"lastName\" name=\"lastName\" value=\"{{ user.lastName }}\" placeholder=\"Last Name\" required>
                        <span class=\"error-message\" id=\"lastNameError\"></span>
                    </div>
                </div>

                <!-- Ligne 2 : Date of Birth & CIN -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"dateOfBirth\">Date of birth</label>
                        <input type=\"date\" id=\"dateOfBirth\" name=\"dateOfBirth\" value=\"{{ user.dateNaissance|date('Y-m-d') }}\" required>
                        <span class=\"error-message\" id=\"birthDateError\"></span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cin\">CIN</label>
                        <input type=\"text\" id=\"cin\" name=\"cin\" value=\"{{ user.cin }}\" placeholder=\"CIN\" required>
                        <span class=\"error-message\" id=\"cinError\"></span>
                    </div>
                </div>

                <!-- Ligne 3 : Phone Number  -->
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"phoneNumber\">Phone number</label>
                        <input type=\"tel\" id=\"phoneNumber\" name=\"phoneNumber\" value=\"{{ user.numTlf }}\" placeholder=\"Phone Number\" required>
                        <span class=\"error-message\" id=\"phoneNumberError\"></span>
                    </div>
                    
                </div>

               

                <!-- Ligne 5 :  Email -->
                <div class=\"form-row\">
                    
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input type=\"email\" id=\"email\" name=\"email\" value=\"{{ user.email }}\" placeholder=\"Email\" required>
                        <span class=\"error-message\" id=\"emailError\"></span>
                    </div>
                </div>
                <input type=\"file\" id=\"fileInput\" name=\"fileInput\" accept=\"image/*\" style=\"display: none;\" onchange=\"displaySelectedImage(event)\">
                <!-- Champ caché pour la photo capturé a traver cam -->
                <input type=\"hidden\" id=\"capturedPhoto\" name=\"capturedPhoto\">
               
                <!-- Bouton update -->
                <button type=\"submit\" class=\"signup-btn\">Update</button>
            </form>
            
        </div>
        
        


        
        <!-- Section droite : Image sélectionnée -->
        <div class=\"right-section\" style=\"margin-top: -330px;\">
            <!--frame pour le camera-->
            <div class=\"camera-container\">
                <video id=\"camera-stream\" autoplay style=\"width: 100%; height: auto; display: none;\"></video>
                <canvas id=\"photo-canvas\" style=\"display: none;\"></canvas>
            </div>
            
            <div class=\"image-frame\">
                <img 
                    src=\"{{ user.img ?: 'images/profill.png' }}\" 
                    alt=\"User Profile Picture\" 
                    class=\"rounded-circle\" 
                    style=\"width: 100%; height: 100%; object-fit: cover;\"
                >
            </div>
            <div class=\"image-buttons\">
                <button type=\"button\" class=\"gallery-btn\" onclick=\"openGallery()\">
                    <img src=\"images/WhatsApp_Image_2025-02-21_at_22.33.28-removebg-preview.png\" alt=\"Select from Gallery\">
                </button>
                <span>or</span>
                <button type=\"button\" class=\"camera-btn\">
                    <img src=\"images/appareil-photo.png\" alt=\"Take Photo\">
                </button>
                <!-- Champ caché pour sélectionner un fichier -->
                <input type=\"file\" id=\"fileInput\" name=\"fileInput\" accept=\"image/*\" style=\"display: none;\" onchange=\"displaySelectedImage(event)\">
            </div>
        </div>
        {% if alert %}
    <div class=\"alert alert-{{ alert.type }} alert-dismissible fade show\" role=\"alert\">
        {{ alert.message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
{% endif %}
    </div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
    
    
    
    
    <!--script pour le camera-->
    <script>
        document.querySelector('.camera-btn').addEventListener('click', function () {
            console.log('Camera button clicked');
            const video = document.getElementById('camera-stream');
            const canvas = document.getElementById('photo-canvas');
            const capturedPhotoInput = document.getElementById('capturedPhoto');
            const imageFrame = document.querySelector('.image-frame');
        
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    console.log('Camera access granted');
                    video.srcObject = stream;
                    video.style.display = 'block';
        
                    setTimeout(function () {
                        console.log('Capturing photo...');
                        canvas.width = video.videoWidth;
                        canvas.height = video.videoHeight;
        
                        const context = canvas.getContext('2d');
                        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        
                        // Convertir l'image en base64 et la stocker dans le champ caché
                        const imageData = canvas.toDataURL('image/png');
                        console.log('Image captured:', imageData);
                        capturedPhotoInput.value = imageData;
                        console.log('Captured photo input value:', capturedPhotoInput.value);
        
                        // Afficher l'image capturée dans le conteneur
                        imageFrame.innerHTML = `<img src=\"\${imageData}\" alt=\"Captured Photo\" style=\"width: 100%; height: auto; border-radius: 10px;\">`;
        
                        // Arrêter la caméra
                        const tracks = stream.getTracks();
                        tracks.forEach(track => track.stop());
        
                        video.style.display = 'none';
                    }, 4000);
                })
                .catch(function (error) {
                    console.error('Error accessing the camera:', error);
                    alert('Unable to access the camera. Please check your permissions.');
                });
        });
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
</html>", "login/update_profile.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\login\\update_profile.html.twig");
    }
}
