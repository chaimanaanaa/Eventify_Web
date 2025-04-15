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
class __TwigTemplate_ad538a8d20cecf50e5f6ea484ab70382 extends Template
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
        // line 204
        yield "                <div class=\"radio-group\">
                    <span class=\"category-label\">Category</span>
                    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "categorie", [], "any", false, false, false, 206));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 207
            yield "                        <label class=\"radio-option\">
                            ";
            // line 208
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "d-none category-radio"]]);
            yield "
                            <span class=\"radio-checkmark\"></span>
                            ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 210), "label", [], "any", false, false, false, 210), "html", null, true);
            yield "
                        </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "categorie", [], "any", false, false, false, 213), "vars", [], "any", false, false, false, 213), "errors", [], "any", false, false, false, 213)) > 0)) {
            // line 214
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "categorie", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "errors", [], "any", false, false, false, 215));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 216
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 216), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            yield "                        </div>
                    ";
        }
        // line 220
        yield "                </div>
                
                ";
        // line 223
        yield "                <div class=\"form-floating mb-3\">
                    ";
        // line 224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "description", [], "any", false, false, false, 224), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 226
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "description", [], "any", false, false, false, 226), "vars", [], "any", false, false, false, 226), "errors", [], "any", false, false, false, 226)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Description", "style" => "height: 150px", "id" => "forumDescription"]]);
        // line 231
        yield "
                    <label for=\"forumDescription\">Description</label>
                    ";
        // line 233
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "description", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "errors", [], "any", false, false, false, 233)) > 0)) {
            // line 234
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "description", [], "any", false, false, false, 235), "vars", [], "any", false, false, false, 235), "errors", [], "any", false, false, false, 235));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 236
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 236), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            yield "                        </div>
                    ";
        }
        // line 240
        yield "                </div>
                
                 ";
        // line 243
        yield "                <div class=\"mb-3\">
                    <label class=\"form-label text-white\">Image</label>
                    
                    ";
        // line 247
        yield "                    ";
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "imageFile", [], "any", false, false, false, 247), "setRendered", [], "any", false, false, false, 247);
        // line 248
        yield "                    
                    ";
        // line 250
        yield "                    <input type=\"file\" id=\"forumImageUpload\" 
                           name=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "imageFile", [], "any", false, false, false, 251), "vars", [], "any", false, false, false, 251), "full_name", [], "any", false, false, false, 251), "html", null, true);
        yield "\"
                           class=\"form-control d-none\" 
                           accept=\"image/*\"
                           onchange=\"previewImage(this)\">
                    
                    ";
        // line 257
        yield "                    <button type=\"button\" class=\"btn btn-outline-light w-100\" 
                            onclick=\"document.getElementById('forumImageUpload').click()\">
                        <i class=\"fas fa-image me-2\"></i> Select Image
                    </button>
                    
                    ";
        // line 263
        yield "                    <div class=\"text-center mt-3\">
                        <img id=\"imagePreview\" class=\"image-preview\" src=\"#\" alt=\"Preview\"/>
                    </div>
                    
                    ";
        // line 268
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "imageFile", [], "any", false, false, false, 268), 'errors');
        yield "
                </div>


                <button type=\"submit\" class=\"form-control btn btn-primary mt-3\">
                    <i class=\"fas fa-save me-2\"></i> Create Forum
                </button>
            ";
        // line 275
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), 'form_end');
        yield "
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
        return array (  433 => 275,  422 => 268,  416 => 263,  409 => 257,  401 => 251,  398 => 250,  395 => 248,  392 => 247,  387 => 243,  383 => 240,  379 => 238,  370 => 236,  366 => 235,  363 => 234,  361 => 233,  357 => 231,  355 => 226,  354 => 224,  351 => 223,  347 => 220,  343 => 218,  334 => 216,  330 => 215,  327 => 214,  324 => 213,  315 => 210,  310 => 208,  307 => 207,  303 => 206,  299 => 204,  293 => 200,  285 => 195,  279 => 191,  269 => 187,  266 => 186,  262 => 185,  252 => 178,  76 => 4,  63 => 3,  40 => 1,);
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
                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.description, {
                        'attr': {
                            'class': 'form-control' ~ (form.description.vars.errors|length > 0 ? ' is-invalid' : ''),
                            'placeholder': 'Description',
                            'style': 'height: 150px',
                            'id': 'forumDescription'
                        }
                    }) }}
                    <label for=\"forumDescription\">Description</label>
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


                <button type=\"submit\" class=\"form-control btn btn-primary mt-3\">
                    <i class=\"fas fa-save me-2\"></i> Create Forum
                </button>
            {{ form_end(form) }}
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
</script>
{% endblock %}", "forums/addforum.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\forums\\addforum.html.twig");
    }
}
