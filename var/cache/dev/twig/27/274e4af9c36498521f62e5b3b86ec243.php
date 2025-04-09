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
        yield "<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">

    <div class=\"section-overlay\"></div>
    
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                <h1 class=\"text-white mb-4 pb-2\">Edit Forum</h1>
                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Back to Forums</a>
            </div>
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>

<div style=\"height: 100px;\"></div>

<div class=\"container mt-5\">
    <div class=\"row align-items-center\">  ";
        // line 26
        yield "        ";
        // line 27
        yield "        <div class=\"col-md-6 d-none d-md-block\">  ";
        // line 28
        yield "            <div class=\"text-center\">
                <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/13.png"), "html", null, true);
        yield "\" alt=\"Forum Illustration\" class=\"img-fluid rounded shadow\" style=\"max-height: 500px;\">
            </div>
        </div>
        
        ";
        // line 34
        yield "        <div class=\"col-md-6\">
            <form action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" method=\"post\" class=\"custom-form membership-form shadow-lg p-4\" role=\"form\" enctype=\"multipart/form-data\">
                <h4 class=\"text-white mb-4\">Edit Forum</h4>
                
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        yield "\">
                
                <div class=\"form-floating mb-3\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "categorie", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Category"]]);
        yield "
                    <label for=\"floatingInput\">Category</label>
                </div>
                
                <div class=\"form-floating mb-3\">
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description", "style" => "height: 150px"]]);
        yield "
                    <label for=\"floatingTextarea\">Description</label>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label text-white\">Image</label>
                    <div class=\"position-relative\">
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "imageFile", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control d-none", "onchange" => "previewImage(this)"]]);
        yield "
                        <label for=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "imageFile", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        yield "\" class=\"btn btn-outline-light w-100\">
                            <i class=\"fas fa-image me-2\"></i> Change Image
                        </label>
                        <div id=\"imagePreview\" class=\"mt-3 text-center\">
                            ";
        // line 58
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 58, $this->source); })()), "img", [], "any", false, false, false, 58)) && is_string($_v1 = "img_") && str_starts_with($_v0, $_v1))) {
            // line 59
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 59, $this->source); })()), "img", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" 
                                     class=\"img-fluid rounded\" style=\"max-height: 200px;\">
                            ";
        }
        // line 62
        yield "                        </div>
                    </div>
                </div>
                
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "_token", [], "any", false, false, false, 66), 'row');
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
        return array (  172 => 66,  166 => 62,  159 => 59,  157 => 58,  150 => 54,  146 => 53,  136 => 46,  128 => 41,  122 => 38,  116 => 35,  113 => 34,  106 => 29,  103 => 28,  101 => 27,  99 => 26,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">

    <div class=\"section-overlay\"></div>
    
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                <h1 class=\"text-white mb-4 pb-2\">Edit Forum</h1>
                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Back to Forums</a>
            </div>
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>

<div style=\"height: 100px;\"></div>

<div class=\"container mt-5\">
    <div class=\"row align-items-center\">  {# Changement ici pour aligner verticalement #}
        {# Colonne pour l'image à gauche #}
        <div class=\"col-md-6 d-none d-md-block\">  {# Caché sur mobile #}
            <div class=\"text-center\">
                <img src=\"{{ asset('images/13.png') }}\" alt=\"Forum Illustration\" class=\"img-fluid rounded shadow\" style=\"max-height: 500px;\">
            </div>
        </div>
        
        {# Colonne pour le formulaire à droite #}
        <div class=\"col-md-6\">
            <form action=\"{{ path('app_forum_edit', {'id': forum.id}) }}\" method=\"post\" class=\"custom-form membership-form shadow-lg p-4\" role=\"form\" enctype=\"multipart/form-data\">
                <h4 class=\"text-white mb-4\">Edit Forum</h4>
                
                <input type=\"hidden\" name=\"id\" value=\"{{ forum.id }}\">
                
                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.categorie, {'attr': {'class': 'form-control', 'placeholder': 'Category'}}) }}
                    <label for=\"floatingInput\">Category</label>
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
