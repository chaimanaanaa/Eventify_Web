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

/* forums/addforum.html.twig */
class __TwigTemplate_8be33de7bd2a5f20a4007ee0f23ec078 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/addforum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/addforum.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forums/addforum.html.twig", 1);
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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<style>
    /* Style spécifique pour le bouton Retour */
    .btn-back {
        background-color: #ADC29B;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .btn-back:hover {
        background-color: #8aa778;
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        color: white;
    }

    /* Style pour les messages de validation */
    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 0.25rem;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
        display: block;
        color: #dc3545;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        animation: fadeIn 0.3s ease-out;
    }

    .is-invalid {
        border-color: #dc3545 !important;
    }

    /* Animation pour les messages */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Styles personnalisés pour les radio buttons */
    .radio-group {
        background-color: transparent;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        position: relative;
    }

    .radio-option {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 15px;
        cursor: pointer;
        font-size: 16px;
        color: white;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .radio-option input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .radio-checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 22px;
        width: 22px;
        background-color: transparent;
        border: 2px solid #ADC29B;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .radio-option:hover input ~ .radio-checkmark {
        background-color: rgba(173, 194, 155, 0.1);
    }

    .radio-option input:checked ~ .radio-checkmark {
        background-color: transparent;
        border-color: #ADC29B;
    }

    .radio-checkmark:after {
        content: \"\";
        position: absolute;
        display: none;
    }

    .radio-option input:checked ~ .radio-checkmark:after {
        display: block;
    }

    .radio-option .radio-checkmark:after {
        top: 3px;
        left: 3px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ADC29B;
    }

    /* Style pour le label de la catégorie */
    .category-label {
        color: white;
        margin-bottom: 15px;
        display: block;
        font-weight: 500;
    }

    /* Style pour la prévisualisation de l'image */
    .image-preview {
        max-width: 100%;
        max-height: 200px;
        border-radius: 8px;
        display: none;
        margin-top: 10px;
    }

    /* Style pour le bouton d'upload */
    .btn-outline-light {
        border-color: rgba(255, 255, 255, 0.2);
        color: white;
        transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.3);
    }

    /* Style pour le bouton de soumission */
    .btn-primary {
        background-color: #844062;
        border-color: #844062;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #6d3354;
        border-color: #6d3354;
        transform: translateY(-2px);
    }
</style>
</head>

<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <div class=\"section-overlay\" style=\"background: url('images/test2.png') center/cover no-repeat;\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\"></div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>

<div style=\"height: 100px;\"></div>
<div class=\"row mb-3\">
    <div class=\"col-12\">
        <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
        yield "\" class=\"btn btn-back\">
            <i class=\"fas fa-arrow-left me-2\"></i> 
        </a>
    </div>
</div>

<div class=\"container mt-5\">
    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "flashes", ["error"], "method", false, false, false, 185));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 186
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            ";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "    
    <div class=\"row align-items-center\">
        <div class=\"col-md-6 d-none d-md-block\">
            <div class=\"text-center\">
                <img src=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/post.png"), "html", null, true);
        yield "\" alt=\"Forum Illustration\" class=\"img-fluid rounded shadow\" style=\"max-height: 500px;\">
            </div>
        </div>
        
        <div class=\"col-md-6\">
            ";
        // line 200
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), 'form_start', ["attr" => ["class" => "custom-form membership-form shadow-lg p-4", "id" => "forumForm"]]);
        yield "
                <h4 class=\"text-white mb-4\">New Forum</h4>
                

                
                ";
        // line 206
        yield "                <div class=\"radio-group\">
                    <span class=\"category-label\">Category</span>
                    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "categorie", [], "any", false, false, false, 208));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 209
            yield "                        <label class=\"radio-option\">
                            ";
            // line 210
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "d-none category-radio"]]);
            yield "
                            <span class=\"radio-checkmark\"></span>
                            ";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 212), "label", [], "any", false, false, false, 212), "html", null, true);
            yield "
                        </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "categorie", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "errors", [], "any", false, false, false, 215)) > 0)) {
            // line 216
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "categorie", [], "any", false, false, false, 217), "vars", [], "any", false, false, false, 217), "errors", [], "any", false, false, false, 217));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 218
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 218), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            yield "                        </div>
                    ";
        }
        // line 222
        yield "                </div>
                
                ";
        // line 225
        yield "                <div class=\"form-floating mb-3 position-relative\">
    <textarea id=\"speechResult\" 
              name=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "description", [], "any", false, false, false, 227), "vars", [], "any", false, false, false, 227), "full_name", [], "any", false, false, false, 227), "html", null, true);
        yield "\"
              class=\"form-control ";
        // line 228
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "description", [], "any", false, false, false, 228), "vars", [], "any", false, false, false, 228), "errors", [], "any", false, false, false, 228)) > 0)) ? ("is-invalid") : (""));
        yield "\"
              placeholder=\"Description\"
              style=\"height: 150px; padding-right: 40px;\"></textarea>
    <label for=\"speechResult\">Description</label>
    
    ";
        // line 234
        yield "    <button type=\"button\" 
            onclick=\"startRecognition()\"
            class=\"btn btn-sm position-absolute bg-transparent border-0\"
            style=\"right: 10px; bottom: 15px; z-index: 10; color: #844062;\"
            title=\"Dictée vocale\">
        <i class=\"fas fa-microphone\"></i>
    </button>
    
    ";
        // line 242
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "description", [], "any", false, false, false, 242), "vars", [], "any", false, false, false, 242), "errors", [], "any", false, false, false, 242)) > 0)) {
            // line 243
            yield "        <div class=\"invalid-feedback\">
            ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "description", [], "any", false, false, false, 244), "vars", [], "any", false, false, false, 244), "errors", [], "any", false, false, false, 244));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 245
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 245), "html", null, true);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            yield "        </div>
    ";
        }
        // line 249
        yield "</div>

                
                 ";
        // line 253
        yield "                <div class=\"mb-3\">
                    <label class=\"form-label text-white\">Image</label>
                    
                    ";
        // line 257
        yield "                    ";
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "imageFile", [], "any", false, false, false, 257), "setRendered", [], "any", false, false, false, 257);
        // line 258
        yield "                    
                    ";
        // line 260
        yield "                    <input type=\"file\" id=\"forumImageUpload\" 
                           name=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "imageFile", [], "any", false, false, false, 261), "vars", [], "any", false, false, false, 261), "full_name", [], "any", false, false, false, 261), "html", null, true);
        yield "\"
                           class=\"form-control d-none\" 
                           accept=\"image/*\"
                           onchange=\"previewImage(this)\">
                    
                    ";
        // line 267
        yield "                    <button type=\"button\" class=\"btn btn-outline-light w-100\" 
                            onclick=\"document.getElementById('forumImageUpload').click()\">
                        <i class=\"fas fa-image me-2\"></i> Select Image
                    </button>
                    
                    ";
        // line 273
        yield "                    <div class=\"text-center mt-3\">
                        <img id=\"imagePreview\" class=\"image-preview\" src=\"#\" alt=\"Preview\"/>
                    </div>
                    
                    ";
        // line 278
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "imageFile", [], "any", false, false, false, 278), 'errors');
        yield "
                </div>
                  
                  <div class=\"mb-3 form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"anonymous\" name=\"anonymous\">
    <label class=\"form-check-label\" for=\"anonymous\">
        <i class=\"fas fa-user-secret me-1\"></i> Publier anonymement
    </label>
    <small class=\"text-muted d-block\">Votre nom ne sera pas affiché</small>
</div>

                <button type=\"submit\" class=\"form-control btn btn-primary mt-3\">
                    <i class=\"fas fa-save me-2\"></i> Create Forum
                </button>
            
        </div>
    </div>
    <div style=\"height: 100px;\"></div>
</div>

<script>
// Fonction pour prévisualiser l'image sélectionnée
function previewImage(input) {
    const preview = document.getElementById('imagePreview');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.style.display = 'none';
    }
}



document.addEventListener('DOMContentLoaded', function() {
    // Masquer les messages d'erreur
    const descriptionField = document.getElementById('forumDescription');
    if (descriptionField) {
        descriptionField.addEventListener('input', function() {
            const errorDiv = this.nextElementSibling.nextElementSibling;
            if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
                errorDiv.style.display = 'none';
                this.classList.remove('is-invalid');
            }
        });
    }
    

    // Masquer les erreurs de catégorie
    const categoryRadios = document.querySelectorAll('.category-radio');
    categoryRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            const errorDiv = this.closest('.radio-group').querySelector('.invalid-feedback');
            if (errorDiv) {
                errorDiv.style.display = 'none';
            }
        });
    });
});

//


function startRecognition() {
    if (!('webkitSpeechRecognition' in window)) {
        alert(\"Ce navigateur ne supporte pas la reconnaissance vocale. Utilise Google Chrome !\");
        return;
    }

    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.interimResults = true;
    recognition.lang = 'fr-FR';

    recognition.onresult = function(event) {
        let interimTranscript = '';
        let finalTranscript = '';

        for (let i = event.resultIndex; i < event.results.length; i++) {
            const transcript = event.results[i][0].transcript;
            if (event.results[i].isFinal) {
                finalTranscript += transcript;
            } else {
                interimTranscript += transcript;
            }
        }

        document.getElementById(\"speechResult\").value = finalTranscript || interimTranscript;
    };

    recognition.onerror = function(event) {
        if(event.error === 'no-speech') {
            console.log(\"Aucun son détecté - nouvelle tentative...\");
            recognition.stop();
            setTimeout(() => recognition.start(), 500);
        } else {
            console.error(\"Erreur reconnaissance vocale:\", event.error);
        }
    };

    recognition.onend = function() {
        recognition.start(); // Redémarre automatiquement
    };

    recognition.start();
}


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
        return "forums/addforum.html.twig";
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
        return array (  441 => 278,  435 => 273,  428 => 267,  420 => 261,  417 => 260,  414 => 258,  411 => 257,  406 => 253,  401 => 249,  397 => 247,  388 => 245,  384 => 244,  381 => 243,  379 => 242,  369 => 234,  361 => 228,  357 => 227,  353 => 225,  349 => 222,  345 => 220,  336 => 218,  332 => 217,  329 => 216,  326 => 215,  317 => 212,  312 => 210,  309 => 209,  305 => 208,  301 => 206,  293 => 200,  285 => 195,  279 => 191,  269 => 187,  266 => 186,  262 => 185,  252 => 178,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
<head>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<style>
    /* Style spécifique pour le bouton Retour */
    .btn-back {
        background-color: #ADC29B;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .btn-back:hover {
        background-color: #8aa778;
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        color: white;
    }

    /* Style pour les messages de validation */
    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 0.25rem;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
        display: block;
        color: #dc3545;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        animation: fadeIn 0.3s ease-out;
    }

    .is-invalid {
        border-color: #dc3545 !important;
    }

    /* Animation pour les messages */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Styles personnalisés pour les radio buttons */
    .radio-group {
        background-color: transparent;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        position: relative;
    }

    .radio-option {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 15px;
        cursor: pointer;
        font-size: 16px;
        color: white;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .radio-option input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .radio-checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 22px;
        width: 22px;
        background-color: transparent;
        border: 2px solid #ADC29B;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .radio-option:hover input ~ .radio-checkmark {
        background-color: rgba(173, 194, 155, 0.1);
    }

    .radio-option input:checked ~ .radio-checkmark {
        background-color: transparent;
        border-color: #ADC29B;
    }

    .radio-checkmark:after {
        content: \"\";
        position: absolute;
        display: none;
    }

    .radio-option input:checked ~ .radio-checkmark:after {
        display: block;
    }

    .radio-option .radio-checkmark:after {
        top: 3px;
        left: 3px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ADC29B;
    }

    /* Style pour le label de la catégorie */
    .category-label {
        color: white;
        margin-bottom: 15px;
        display: block;
        font-weight: 500;
    }

    /* Style pour la prévisualisation de l'image */
    .image-preview {
        max-width: 100%;
        max-height: 200px;
        border-radius: 8px;
        display: none;
        margin-top: 10px;
    }

    /* Style pour le bouton d'upload */
    .btn-outline-light {
        border-color: rgba(255, 255, 255, 0.2);
        color: white;
        transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.3);
    }

    /* Style pour le bouton de soumission */
    .btn-primary {
        background-color: #844062;
        border-color: #844062;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #6d3354;
        border-color: #6d3354;
        transform: translateY(-2px);
    }
</style>
</head>

<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <div class=\"section-overlay\" style=\"background: url('images/test2.png') center/cover no-repeat;\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\"></div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>

<div style=\"height: 100px;\"></div>
<div class=\"row mb-3\">
    <div class=\"col-12\">
        <a href=\"{{ path('app_forums') }}\" class=\"btn btn-back\">
            <i class=\"fas fa-arrow-left me-2\"></i> 
        </a>
    </div>
</div>

<div class=\"container mt-5\">
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
    
    <div class=\"row align-items-center\">
        <div class=\"col-md-6 d-none d-md-block\">
            <div class=\"text-center\">
                <img src=\"{{ asset('images/post.png') }}\" alt=\"Forum Illustration\" class=\"img-fluid rounded shadow\" style=\"max-height: 500px;\">
            </div>
        </div>
        
        <div class=\"col-md-6\">
            {{ form_start(form, {'attr': {'class': 'custom-form membership-form shadow-lg p-4', 'id': 'forumForm'}}) }}
                <h4 class=\"text-white mb-4\">New Forum</h4>
                

                
                {# Champ Catégorie #}
                <div class=\"radio-group\">
                    <span class=\"category-label\">Category</span>
                    {% for child in form.categorie %}
                        <label class=\"radio-option\">
                            {{ form_widget(child, {'attr': {'class': 'd-none category-radio'}}) }}
                            <span class=\"radio-checkmark\"></span>
                            {{ child.vars.label }}
                        </label>
                    {% endfor %}
                    {% if form.categorie.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback\">
                            {% for error in form.categorie.vars.errors %}
                                {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
                
                {# Champ Description #}
                <div class=\"form-floating mb-3 position-relative\">
    <textarea id=\"speechResult\" 
              name=\"{{ form.description.vars.full_name }}\"
              class=\"form-control {{ form.description.vars.errors|length > 0 ? 'is-invalid' : '' }}\"
              placeholder=\"Description\"
              style=\"height: 150px; padding-right: 40px;\"></textarea>
    <label for=\"speechResult\">Description</label>
    
    {# Bouton microphone avec onclick direct #}
    <button type=\"button\" 
            onclick=\"startRecognition()\"
            class=\"btn btn-sm position-absolute bg-transparent border-0\"
            style=\"right: 10px; bottom: 15px; z-index: 10; color: #844062;\"
            title=\"Dictée vocale\">
        <i class=\"fas fa-microphone\"></i>
    </button>
    
    {% if form.description.vars.errors|length > 0 %}
        <div class=\"invalid-feedback\">
            {% for error in form.description.vars.errors %}
                {{ error.message }}
            {% endfor %}
        </div>
    {% endif %}
</div>

                
                 {# SECTION IMAGE CORRIGÉE - SOLUTION DÉFINITIVE #}
                <div class=\"mb-3\">
                    <label class=\"form-label text-white\">Image</label>
                    
                    {# Solution 1: Désactivez complètement le rendu automatique #}
                    {% do form.imageFile.setRendered %}
                    
                    {# Votre champ personnalisé #}
                    <input type=\"file\" id=\"forumImageUpload\" 
                           name=\"{{ form.imageFile.vars.full_name }}\"
                           class=\"form-control d-none\" 
                           accept=\"image/*\"
                           onchange=\"previewImage(this)\">
                    
                    {# Bouton personnalisé unique #}
                    <button type=\"button\" class=\"btn btn-outline-light w-100\" 
                            onclick=\"document.getElementById('forumImageUpload').click()\">
                        <i class=\"fas fa-image me-2\"></i> Select Image
                    </button>
                    
                    {# Prévisualisation #}
                    <div class=\"text-center mt-3\">
                        <img id=\"imagePreview\" class=\"image-preview\" src=\"#\" alt=\"Preview\"/>
                    </div>
                    
                    {# Affichez les erreurs si nécessaire #}
                    {{ form_errors(form.imageFile) }}
                </div>
                  
                  <div class=\"mb-3 form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"anonymous\" name=\"anonymous\">
    <label class=\"form-check-label\" for=\"anonymous\">
        <i class=\"fas fa-user-secret me-1\"></i> Publier anonymement
    </label>
    <small class=\"text-muted d-block\">Votre nom ne sera pas affiché</small>
</div>

                <button type=\"submit\" class=\"form-control btn btn-primary mt-3\">
                    <i class=\"fas fa-save me-2\"></i> Create Forum
                </button>
            
        </div>
    </div>
    <div style=\"height: 100px;\"></div>
</div>

<script>
// Fonction pour prévisualiser l'image sélectionnée
function previewImage(input) {
    const preview = document.getElementById('imagePreview');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.style.display = 'none';
    }
}



document.addEventListener('DOMContentLoaded', function() {
    // Masquer les messages d'erreur
    const descriptionField = document.getElementById('forumDescription');
    if (descriptionField) {
        descriptionField.addEventListener('input', function() {
            const errorDiv = this.nextElementSibling.nextElementSibling;
            if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
                errorDiv.style.display = 'none';
                this.classList.remove('is-invalid');
            }
        });
    }
    

    // Masquer les erreurs de catégorie
    const categoryRadios = document.querySelectorAll('.category-radio');
    categoryRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            const errorDiv = this.closest('.radio-group').querySelector('.invalid-feedback');
            if (errorDiv) {
                errorDiv.style.display = 'none';
            }
        });
    });
});

//


function startRecognition() {
    if (!('webkitSpeechRecognition' in window)) {
        alert(\"Ce navigateur ne supporte pas la reconnaissance vocale. Utilise Google Chrome !\");
        return;
    }

    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.interimResults = true;
    recognition.lang = 'fr-FR';

    recognition.onresult = function(event) {
        let interimTranscript = '';
        let finalTranscript = '';

        for (let i = event.resultIndex; i < event.results.length; i++) {
            const transcript = event.results[i][0].transcript;
            if (event.results[i].isFinal) {
                finalTranscript += transcript;
            } else {
                interimTranscript += transcript;
            }
        }

        document.getElementById(\"speechResult\").value = finalTranscript || interimTranscript;
    };

    recognition.onerror = function(event) {
        if(event.error === 'no-speech') {
            console.log(\"Aucun son détecté - nouvelle tentative...\");
            recognition.stop();
            setTimeout(() => recognition.start(), 500);
        } else {
            console.error(\"Erreur reconnaissance vocale:\", event.error);
        }
    };

    recognition.onend = function() {
        recognition.start(); // Redémarre automatiquement
    };

    recognition.start();
}


</script>
{% endblock %}", "forums/addforum.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\forums\\addforum.html.twig");
    }
}
