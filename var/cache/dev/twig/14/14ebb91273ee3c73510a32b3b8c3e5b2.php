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

/* event/new.html.twig */
class __TwigTemplate_c5d294fee46253ef2f0e563aa27051fd extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Personalize Your Event";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow event-form-card\">
                <div class=\"card-header\" style=\"background-color: #ADC29B; color: white;\">
                    <h2 class=\"h4 mb-0\"><i class=\"fas fa-calendar-plus me-2\"></i>Personalize Your Event</h2>
                </div>
                
                <div class=\"card-body\">
                    <h3 class=\"form-title\">Add new Pack</h3>
                    
";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "event-form", "novalidate" => "novalidate"]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Select your event's category</label>
                                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "categorie", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "categorie", [], "any", false, false, false, 22), 'errors');
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Add your event's date</label>
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Tap event's place</label>
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "lieu", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lieu", [], "any", false, false, false, 35), 'errors');
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Estimated Price</label>
                                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prixEstime", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prixEstime", [], "any", false, false, false, 40), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Add number of guests</label>
                                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nbInvite", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "nbInvite", [], "any", false, false, false, 48), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\">Describe your event</label>
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "rows" => "4"]]);
        yield "
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3 text-end\">
                            <label class=\"form-label d-block\">Upload Image</label>
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "imageven", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "d-none", "id" => "event_imageven", "onchange" => "previewImage(event)"]]);
        yield "
                            <button type=\"button\" class=\"btn upload-btn\" onclick=\"document.getElementById('event_imageven').click();\">upload image</button>
                            <div id=\"image-preview\" class=\"mt-2\"></div>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn personalize-btn\">Personalize</button>
                        </div>
                    ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
                </div>
                
                <div class=\"card-footer text-end\">
                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn custom-btn smoothscroll\">
                        <i class=\"fas fa-arrow-left me-2\"></i>
                        Back to Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('image-preview');
        preview.innerHTML = ''; // Réinitialiser l'aperçu

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '200px';
                img.style.maxHeight = '200px';
                preview.appendChild(img);
            };
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
        return "event/new.html.twig";
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
        return array (  213 => 72,  206 => 68,  195 => 60,  187 => 55,  183 => 54,  174 => 48,  170 => 47,  160 => 40,  156 => 39,  149 => 35,  145 => 34,  135 => 27,  131 => 26,  124 => 22,  120 => 21,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personalize Your Event{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow event-form-card\">
                <div class=\"card-header\" style=\"background-color: #ADC29B; color: white;\">
                    <h2 class=\"h4 mb-0\"><i class=\"fas fa-calendar-plus me-2\"></i>Personalize Your Event</h2>
                </div>
                
                <div class=\"card-body\">
                    <h3 class=\"form-title\">Add new Pack</h3>
                    
{{ form_start(form, {'attr': {'class': 'event-form', 'novalidate': 'novalidate'}}) }}
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Select your event's category</label>
                                {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.categorie) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Add your event's date</label>
                                {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.date) }}
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Tap event's place</label>
                                {{ form_widget(form.lieu, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.lieu) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Estimated Price</label>
                                {{ form_widget(form.prixEstime, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.prixEstime) }}
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Add number of guests</label>
                                {{ form_widget(form.nbInvite, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.nbInvite) }}
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\">Describe your event</label>
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': '4'}}) }}
                            {{ form_errors(form.description) }}
                        </div>

                        <div class=\"mb-3 text-end\">
                            <label class=\"form-label d-block\">Upload Image</label>
                            {{ form_widget(form.imageven, {'attr': {'class': 'd-none', 'id': 'event_imageven', 'onchange': 'previewImage(event)'}}) }}
                            <button type=\"button\" class=\"btn upload-btn\" onclick=\"document.getElementById('event_imageven').click();\">upload image</button>
                            <div id=\"image-preview\" class=\"mt-2\"></div>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn personalize-btn\">Personalize</button>
                        </div>
                    {{ form_end(form) }}
                </div>
                
                <div class=\"card-footer text-end\">
                    <a href=\"{{ path('app_event_index') }}\" class=\"btn custom-btn smoothscroll\">
                        <i class=\"fas fa-arrow-left me-2\"></i>
                        Back to Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('image-preview');
        preview.innerHTML = ''; // Réinitialiser l'aperçu

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '200px';
                img.style.maxHeight = '200px';
                preview.appendChild(img);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
{% endblock %}", "event/new.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\event\\new.html.twig");
    }
}
