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

/* forums/edit.html.twig */
class __TwigTemplate_52e5363da230ec040ecc667a059b8077 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forums/edit.html.twig", 1);
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

.btn-back i {
    transition: transform 0.3s ease;
}

.btn-back:hover i {
    transform: translateX(-3px);
}

/* Styles personnalisés pour les radio buttons */
.radio-group {
    background-color: transparent;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
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
</style>
</head>

<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <div class=\"section-overlay\" style=\"background: url('images/test2.png') center/cover no-repeat;\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">
           
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>

<div style=\"height: 100px;\"></div>

<div class=\"row mb-3\">
    <div class=\"col-12\">
        <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
        yield "\" class=\"btn btn-back\">
            <i class=\"fas fa-arrow-left me-2\"></i>
        </a>
    </div>
</div>

<div class=\"container mt-5\">
    <div class=\"row align-items-center\">
        <!-- Colonne pour l'image à gauche -->
        <div class=\"col-md-6 d-none d-md-block\">
            <div class=\"text-center\">
                <img src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/post.png"), "html", null, true);
        yield "\" alt=\"Forum Illustration\" class=\"img-fluid rounded shadow\" style=\"max-height: 500px;\">
            </div>
        </div>
        
        <!-- Colonne pour le formulaire à droite -->
        <div class=\"col-md-6\">
            <form action=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148)]), "html", null, true);
        yield "\" method=\"post\" class=\"custom-form membership-form shadow-lg p-4\" role=\"form\" enctype=\"multipart/form-data\">
                <h4 class=\"text-white mb-4\">Edit Forum</h4>
                
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151), "html", null, true);
        yield "\">
                
                <!-- Radio buttons pour la catégorie -->
                <div class=\"radio-group\">
                    <span class=\"category-label\">Category</span>
                    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "categorie", [], "any", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 157
            yield "                        <label class=\"radio-option\">
                            ";
            // line 158
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "d-none"]]);
            yield "
                            <span class=\"radio-checkmark\"></span>
                            ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 160), "label", [], "any", false, false, false, 160), "html", null, true);
            yield "
                        </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "                </div>
                
                <div class=\"form-floating mb-3\">
                    ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "description", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description", "style" => "height: 150px"]]);
        yield "
                    <label for=\"floatingTextarea\">Description</label>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label text-white\">Image</label>
                    <div class=\"position-relative\">
                        ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "imageFile", [], "any", false, false, false, 173), 'widget', ["attr" => ["class" => "form-control d-none", "onchange" => "previewImage(this)"]]);
        yield "
                        <label for=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "imageFile", [], "any", false, false, false, 174), "vars", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174), "html", null, true);
        yield "\" class=\"btn btn-outline-light w-100\">
                            <i class=\"fas fa-image me-2\"></i> Change Image
                        </label>
                        <div id=\"imagePreview\" class=\"mt-3 text-center\">
                            ";
        // line 178
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 178, $this->source); })()), "img", [], "any", false, false, false, 178)) && is_string($_v1 = "img_") && str_starts_with($_v0, $_v1))) {
            // line 179
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 179, $this->source); })()), "img", [], "any", false, false, false, 179)]), "html", null, true);
            yield "\" 
                                     class=\"img-fluid rounded\" style=\"max-height: 200px;\">
                            ";
        }
        // line 182
        yield "                        </div>
                    </div>
                </div>
                
                ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "_token", [], "any", false, false, false, 186), 'row');
        yield "
                
                <button type=\"submit\" class=\"form-control btn btn-primary mt-3\" style=\"background-color: #844062;\">
                    <i class=\"fas fa-save me-2\"></i> Save Changes
                </button>
            </form>
        </div>
    </div>
    <div style=\"height: 100px;\"></div>
</div>

<script>
    function previewImage(input) {
        const previewContainer = document.getElementById('imagePreview');
        const previewImg = previewContainer.querySelector('img');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                if (!previewImg) {
                    const newImg = document.createElement('img');
                    newImg.src = e.target.result;
                    newImg.className = 'img-fluid rounded';
                    newImg.style.maxHeight = '200px';
                    previewContainer.innerHTML = '';
                    previewContainer.appendChild(newImg);
                } else {
                    previewImg.src = e.target.result;
                }
                previewContainer.style.display = 'block';
            }
            
            reader.readAsDataURL(input.files[0]);
        }
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
        return "forums/edit.html.twig";
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
        return array (  304 => 186,  298 => 182,  291 => 179,  289 => 178,  282 => 174,  278 => 173,  268 => 166,  263 => 163,  254 => 160,  249 => 158,  246 => 157,  242 => 156,  234 => 151,  228 => 148,  219 => 142,  205 => 131,  76 => 4,  63 => 3,  40 => 1,);
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

.btn-back i {
    transition: transform 0.3s ease;
}

.btn-back:hover i {
    transform: translateX(-3px);
}

/* Styles personnalisés pour les radio buttons */
.radio-group {
    background-color: transparent;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
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
</style>
</head>

<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <div class=\"section-overlay\" style=\"background: url('images/test2.png') center/cover no-repeat;\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">
           
        </div>
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
    <div class=\"row align-items-center\">
        <!-- Colonne pour l'image à gauche -->
        <div class=\"col-md-6 d-none d-md-block\">
            <div class=\"text-center\">
                <img src=\"{{ asset('images/post.png') }}\" alt=\"Forum Illustration\" class=\"img-fluid rounded shadow\" style=\"max-height: 500px;\">
            </div>
        </div>
        
        <!-- Colonne pour le formulaire à droite -->
        <div class=\"col-md-6\">
            <form action=\"{{ path('app_forum_edit', {'id': forum.id}) }}\" method=\"post\" class=\"custom-form membership-form shadow-lg p-4\" role=\"form\" enctype=\"multipart/form-data\">
                <h4 class=\"text-white mb-4\">Edit Forum</h4>
                
                <input type=\"hidden\" name=\"id\" value=\"{{ forum.id }}\">
                
                <!-- Radio buttons pour la catégorie -->
                <div class=\"radio-group\">
                    <span class=\"category-label\">Category</span>
                    {% for child in form.categorie %}
                        <label class=\"radio-option\">
                            {{ form_widget(child, {'attr': {'class': 'd-none'}}) }}
                            <span class=\"radio-checkmark\"></span>
                            {{ child.vars.label }}
                        </label>
                    {% endfor %}
                </div>
                
                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description', 'style': 'height: 150px'}}) }}
                    <label for=\"floatingTextarea\">Description</label>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label text-white\">Image</label>
                    <div class=\"position-relative\">
                        {{ form_widget(form.imageFile, {'attr': {'class': 'form-control d-none', 'onchange': 'previewImage(this)'}}) }}
                        <label for=\"{{ form.imageFile.vars.id }}\" class=\"btn btn-outline-light w-100\">
                            <i class=\"fas fa-image me-2\"></i> Change Image
                        </label>
                        <div id=\"imagePreview\" class=\"mt-3 text-center\">
                            {% if forum.img starts with 'img_' %}
                                <img src=\"{{ path('app_forum_image', {'id': forum.img}) }}\" 
                                     class=\"img-fluid rounded\" style=\"max-height: 200px;\">
                            {% endif %}
                        </div>
                    </div>
                </div>
                
                {{ form_row(form._token) }}
                
                <button type=\"submit\" class=\"form-control btn btn-primary mt-3\" style=\"background-color: #844062;\">
                    <i class=\"fas fa-save me-2\"></i> Save Changes
                </button>
            </form>
        </div>
    </div>
    <div style=\"height: 100px;\"></div>
</div>

<script>
    function previewImage(input) {
        const previewContainer = document.getElementById('imagePreview');
        const previewImg = previewContainer.querySelector('img');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                if (!previewImg) {
                    const newImg = document.createElement('img');
                    newImg.src = e.target.result;
                    newImg.className = 'img-fluid rounded';
                    newImg.style.maxHeight = '200px';
                    previewContainer.innerHTML = '';
                    previewContainer.appendChild(newImg);
                } else {
                    previewImg.src = e.target.result;
                }
                previewContainer.style.display = 'block';
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
{% endblock %}", "forums/edit.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\forums\\edit.html.twig");
    }
}
