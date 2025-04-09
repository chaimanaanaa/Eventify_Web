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

/* forums/forums.html.twig */
class __TwigTemplate_e3d63ea242f1dae7a42fd85b4a2c9357 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/forums.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/forums.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forums/forums.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/forums.css"), "html", null, true);
        yield "\">
<style>
    /* Styles pour les cartes */
    .card {
        width: 85%;
        max-width: 600px;
        margin: 0 auto 1.5rem;
        border: 2px solid #000 !important;
        border-radius: 10px !important;
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        background-color: #adc29b !important;
        border-bottom: 1px solid #adc29b !important;
    }
    .card-img-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background-color: #f8f9fa;
        overflow: hidden;
        max-height: 300px;
        width: 100%;
        margin: 0 auto;
    }
    .card-img-container img {
        max-height: 100%;
        max-width: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: block;
        margin: 0 auto;
    }
    .card-body {
        padding: 1rem;
    }
    .card-text {
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
    }
    .card-actions {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }
    .btn-like,
    .btn-dislike {
        flex: 1;
    }
    .btn-comments {
        flex: 2;
    }
    /* Boutons */
    .btn-primary {
        background-color: #844062;
        border-color: #844062;
    }
    .btn-primary:hover {
        background-color: #6a3250;
        border-color: #6a3250;
    }
    .btn-delete {
        background-color: #844062;
        color: white;
        border: none;
        padding: 0.25rem 0.5rem;
        border-radius: 0.2rem;
        transition: all 0.3s;
    }
    .btn-delete:hover {
        background-color: #6a3250;
        transform: scale(1.05);
    }
    .btn-delete i {
        margin-right: 0.25rem;
    }
    /* Filtres */
    .btn-outline-custom {
        color: #844062;
        border-color: #844062;
        background-color: transparent;
    }
    .btn-outline-custom:hover {
        color: white;
        background-color: #844062;
        border-color: #844062;
    }
    .btn-group .btn.active {
        background-color: #844062;
        border-color: #844062;
        color: white;
    }
    .btn-group {
        display: inline-flex;
        flex-wrap: wrap;
        gap: 8px;
        justify-content: center;
    }
    .btn-group .btn {
        flex: 0 1 auto;
        min-width: 120px;
        text-align: center;
        transition: all 0.3s ease;
    }
    .btn-group .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(132, 64, 98, 0.2);
    }

    /* Styles pour les commentaires */
    .comments-section {
        margin-top: 20px;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        display: none;
    }
    
    .comment {
        background-color: white;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    
    .comment-content {
        padding: 10px;
        margin-bottom: 10px;
        white-space: pre-wrap;
        background-color: #f0f2f5;
        border-radius: 5px;
    }
    
    .edit-comment-form {
        margin-top: 10px;
        padding: 10px;
        background-color: #f8f9fa;
        border-radius: 5px;
        display: none;
    }
    
    .edit-comment-form textarea {
        width: 100%;
        min-height: 100px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ced4da;
        margin-bottom: 10px;
    }
    
    .comment-actions {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
    }
    
    .btn-edit-comment {
        background-color: #17a2b8;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        cursor: pointer;
    }
    
    .btn-delete-comment {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        cursor: pointer;
    }
    
    .btn-save-comment {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        cursor: pointer;
    }
    
    .comment-date {
        font-size: 0.8rem;
        color: #6c757d;
        margin-bottom: 5px;
    }
    
    .no-comments {
        text-align: center;
        padding: 20px;
        color: #6c757d;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .card {
            width: 95%;
        }
        .card-img-container {
            max-height: 250px;
        }
        .btn-group .btn {
            min-width: 100px;
            padding: 0.375rem 0.5rem;
            font-size: 0.875rem;
        }
        .comment-actions {
            flex-wrap: wrap;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 232
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

        // line 233
        yield "<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                <h1 class=\"text-white mb-4 pb-2\">Event Listing</h1>
                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>
            </div>
        </div>
    </div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
</section>
<div style=\"height: 100px;\"></div>
<div class=\"container mt-4\">
    <div class=\"row align-items-center mb-4\">
        <div class=\"col-md-8\">
            <form method=\"GET\" action=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
        yield "\" class=\"d-flex\">
                <input type=\"text\" 
                       name=\"search\" 
                       class=\"form-control me-2\" 
                       placeholder=\"Search forums...\" 
                       value=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "request", [], "any", false, false, false, 271), "query", [], "any", false, false, false, 271), "get", ["search"], "method", false, false, false, 271), "html", null, true);
        yield "\"
                       aria-label=\"Search\">
                <button type=\"submit\" class=\"btn btn-outline-primary\">
                    <i class=\"fas fa-search\"></i> Search
                </button>
            </form>
        </div>
        <div class=\"col-md-4 text-md-end\">
            <a href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums_new");
        yield "\" class=\"btn btn-primary\" style=\"background-color: #844062; border-color: #844062;\">
                <i class=\"fas fa-plus\"></i> Create Forum
            </a>
        </div>
    </div>
</div>
<div class=\"container mt-3\">
    <div class=\"row mb-4\">
        <div class=\"col-12 d-flex justify-content-center\">
            <div class=\"btn-group\" role=\"group\">
                <a href=\"";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
        yield "\" 
                   class=\"btn ";
        // line 290
        yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "request", [], "any", false, false, false, 290), "query", [], "any", false, false, false, 290), "get", ["category"], "method", false, false, false, 290)) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   All
                </a>
                <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Mariage"]);
        yield "\" 
                   class=\"btn ";
        // line 294
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 294, $this->source); })()), "request", [], "any", false, false, false, 294), "query", [], "any", false, false, false, 294), "get", ["category"], "method", false, false, false, 294) == "Mariage")) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   Mariage
                </a>
                <a href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Anniversaire"]);
        yield "\" 
                   class=\"btn ";
        // line 298
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "request", [], "any", false, false, false, 298), "query", [], "any", false, false, false, 298), "get", ["category"], "method", false, false, false, 298) == "Anniversaire")) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   Anniversaire
                </a>
                <a href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Graduation"]);
        yield "\" 
                   class=\"btn ";
        // line 302
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 302, $this->source); })()), "request", [], "any", false, false, false, 302), "query", [], "any", false, false, false, 302), "get", ["category"], "method", false, false, false, 302) == "Graduation")) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   Graduation
                </a>
                <a href=\"";
        // line 305
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Baby Shower"]);
        yield "\" 
                   class=\"btn ";
        // line 306
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "request", [], "any", false, false, false, 306), "query", [], "any", false, false, false, 306), "get", ["category"], "method", false, false, false, 306) == "Baby Shower")) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   Baby Shower
                </a>
            </div>
        </div>
    </div>
</div>
<div class=\"row mb-4\">
    <div class=\"col-md-6 offset-md-3\">
        <form method=\"GET\" class=\"d-flex align-items-center justify-content-center\">
            ";
        // line 316
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "request", [], "any", false, false, false, 316), "query", [], "any", false, false, false, 316), "get", ["category"], "method", false, false, false, 316)) {
            // line 317
            yield "                <input type=\"hidden\" name=\"category\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 317, $this->source); })()), "request", [], "any", false, false, false, 317), "query", [], "any", false, false, false, 317), "get", ["category"], "method", false, false, false, 317), "html", null, true);
            yield "\">
            ";
        }
        // line 319
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "request", [], "any", false, false, false, 319), "query", [], "any", false, false, false, 319), "get", ["search"], "method", false, false, false, 319)) {
            // line 320
            yield "                <input type=\"hidden\" name=\"search\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "request", [], "any", false, false, false, 320), "query", [], "any", false, false, false, 320), "get", ["search"], "method", false, false, false, 320), "html", null, true);
            yield "\">
            ";
        }
        // line 322
        yield "            <label for=\"sort\" class=\"me-2 text-nowrap\" style=\"color: #844062;\">
                <i class=\"fas fa-sort me-1\"></i>Trier par :
            </label>
            <select name=\"sort\" id=\"sort\" class=\"form-select\" 
                    style=\"border-color: #ADC29B; color: #844062; width: auto;\"
                    onchange=\"this.form.submit()\">
                <option value=\"newest\" ";
        // line 328
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "request", [], "any", false, false, false, 328), "query", [], "any", false, false, false, 328), "get", ["sort"], "method", false, false, false, 328) == "newest")) {
            yield "selected";
        }
        yield ">
                    Plus récent
                </option>
                <option value=\"oldest\" ";
        // line 331
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "request", [], "any", false, false, false, 331), "query", [], "any", false, false, false, 331), "get", ["sort"], "method", false, false, false, 331) == "oldest")) {
            yield "selected";
        }
        yield ">
                    Plus ancien
                </option>
                <option value=\"popular\" ";
        // line 334
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "request", [], "any", false, false, false, 334), "query", [], "any", false, false, false, 334), "get", ["sort"], "method", false, false, false, 334) == "popular")) {
            yield "selected";
        }
        yield ">
                    Plus populaire
                </option>
            </select>
        </form>
    </div>
</div>
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        ";
        // line 343
        if ((array_key_exists("forums", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 343, $this->source); })())))) {
            // line 344
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 344, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 345
                yield "                <div class=\"col-lg-8 col-md-10 mb-4\">
                    <div class=\"card shadow-lg forum-card\" id=\"forum-";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 346), "html", null, true);
                yield "\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                            <h3 class=\"h5 mb-0\">";
                // line 348
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 348)), "html", null, true);
                yield "</h3>
                            <div class=\"btn-group\">
                                <a href=\"";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 350)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-sm btn-outline-light me-2\">
                                   <i class=\"fas fa-edit me-1\"></i> Edit
                                </a>
                                <form method=\"POST\" action=\"";
                // line 354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 354)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-forum"), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-light\" 
                                            title=\"Delete\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
                                        <i class=\"fas fa-trash me-1\"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class=\"card-img-container text-center\">
                            ";
                // line 364
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 364)) && is_string($_v1 = "img_") && str_starts_with($_v0, $_v1))) {
                    // line 365
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 365)]), "html", null, true);
                    yield "\" 
                                     alt=\"Image du forum ";
                    // line 366
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 366), "html", null, true);
                    yield "\"
                                     class=\"img-fluid mx-auto d-block\">
                            ";
                } else {
                    // line 369
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default_image.png"), "html", null, true);
                    yield "\" 
                                     alt=\"Image par défaut\"
                                     class=\"img-fluid mx-auto d-block\">
                            ";
                }
                // line 373
                yield "                        </div>
                        <div class=\"card-body text-center\">
                            <p class=\"card-text\">";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 375), "html", null, true);
                yield "</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                            </div>
                            <div class=\"card-actions\">
                                <button class=\"btn btn-outline-primary btn-like\">
                                    <i class=\"far fa-thumbs-up\"></i> Like
                                </button>
                                <button class=\"btn btn-outline-danger btn-dislike\">
                                    <i class=\"far fa-thumbs-down\"></i> Dislike
                                </button>
                                <button class=\"btn btn-outline-secondary btn-comments\" 
                                        onclick=\"toggleComments('";
                // line 386
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 386), "html", null, true);
                yield "')\">
                                    <i class=\"far fa-comment\"></i> Commentaires
                                </button>
                            </div>
                            <div id=\"comments-";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 390), "html", null, true);
                yield "\" class=\"comments-section\">
                                <div class=\"existing-comments\">
                                    ";
                // line 392
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 392));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 393
                    yield "                                        <div class=\"comment\" id=\"comment-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 393), "html", null, true);
                    yield "\">
                                            <div class=\"comment-date\">
                                                ";
                    // line 395
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 395), "d/m/Y H:i"), "html", null, true);
                    yield "
                                            </div>
                                            <div class=\"comment-content\" id=\"comment-content-";
                    // line 397
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 397), "html", null, true);
                    yield "\">
                                                ";
                    // line 398
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sujet", [], "any", false, false, false, 398), "html", null, true);
                    yield "
                                            </div>
                                            <div class=\"comment-actions\">
                                                <button class=\"btn-edit-comment\" onclick=\"showEditForm(";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 401), "html", null, true);
                    yield ")\">
                                                    <i class=\"fas fa-edit\"></i> Modifier
                                                </button>
                                                <form method=\"POST\" action=\"";
                    // line 404
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 404)]), "html", null, true);
                    yield "\" class=\"d-inline\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 405
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 405))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn-delete-comment\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?')\">
                                                        <i class=\"fas fa-trash\"></i> Supprimer
                                                    </button>
                                                </form>
                                                <form id=\"edit-form-";
                    // line 410
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 410), "html", null, true);
                    yield "\" class=\"edit-comment-form\" method=\"POST\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 410)]), "html", null, true);
                    yield "\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 411
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 411))), "html", null, true);
                    yield "\">
                                                    <textarea name=\"content\" class=\"form-control\">";
                    // line 412
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sujet", [], "any", false, false, false, 412), "html", null, true);
                    yield "</textarea>
                                                    <button type=\"submit\" class=\"btn-save-comment\">
                                                        <i class=\"fas fa-save\"></i> Enregistrer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    ";
                    $context['_iterated'] = true;
                }
                // line 419
                if (!$context['_iterated']) {
                    // line 420
                    yield "                                        <div class=\"no-comments\">
                                            <i class=\"far fa-comment-dots\"></i> Aucun commentaire
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 424
                yield "                                </div>
                                <div class=\"comment-form mt-3\">
                                    <form action=\"";
                // line 426
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_add", ["forumId" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 426)]), "html", null, true);
                yield "\" method=\"POST\">
                                        <textarea name=\"comment_content\" 
                                                  class=\"form-control\" 
                                                  rows=\"3\" 
                                                  placeholder=\"Ajouter un commentaire...\" 
                                                  required></textarea>
                                        <button type=\"submit\" class=\"btn btn-primary mt-2\">
                                            <i class=\"far fa-paper-plane\"></i> Poster
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['forum'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 442
            yield "        ";
        } else {
            // line 443
            yield "            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center py-4\">
                    <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>No forum found</h4>
                    <p class=\"mb-0\">Be the first to create a forum!</p>
                    <a href=\"";
            // line 447
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums_new");
            yield "\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i>Create forum
                    </a>
                </div>
            </div>
        ";
        }
        // line 453
        yield "    </div>
</div>
<div style=\"height: 100px;\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 458
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 459
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Toggle comments visibility
    function toggleComments(forumId) {
        const section = document.getElementById(`comments-\${forumId}`);
        const button = document.querySelector(`button[onclick=\"toggleComments('\${forumId}')\"]`);
        if (section.style.display === \"none\" || section.style.display === \"\") {
            section.style.display = \"block\";
            button.innerHTML = '<i class=\"far fa-comment\"></i> Masquer';
            button.classList.add('active');
        } else {
            section.style.display = \"none\";
            button.innerHTML = '<i class=\"far fa-comment\"></i> Commentaires';
            button.classList.remove('active');
        }
    }

    // Show edit form
    function showEditForm(commentId) {
        // Hide comment content and action buttons
        document.getElementById(`comment-content-\${commentId}`).style.display = 'none';
        document.querySelector(`#comment-\${commentId} .btn-edit-comment`).style.display = 'none';
        document.querySelector(`#comment-\${commentId} .btn-delete-comment`).style.display = 'none';

        // Show edit form
        const editForm = document.getElementById(`edit-form-\${commentId}`);
        editForm.style.display = 'block';
        editForm.querySelector('textarea').focus();
    }

    // Handle form submission
    document.addEventListener('DOMContentLoaded', function() {
        // Hide comments on load
        document.querySelectorAll('.comments-section').forEach(section => {
            section.style.display = 'none';
        });

        // Handle edit form submission
        document.querySelectorAll('.edit-comment-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                const saveBtn = form.querySelector('.btn-save-comment');
                saveBtn.disabled = true;
                saveBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Enregistrement...';
                
                // You could add AJAX here if needed, but the form will submit normally
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
        return "forums/forums.html.twig";
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
        return array (  753 => 459,  740 => 458,  726 => 453,  717 => 447,  711 => 443,  708 => 442,  686 => 426,  682 => 424,  673 => 420,  671 => 419,  659 => 412,  655 => 411,  649 => 410,  641 => 405,  637 => 404,  631 => 401,  625 => 398,  621 => 397,  616 => 395,  610 => 393,  605 => 392,  600 => 390,  593 => 386,  579 => 375,  575 => 373,  567 => 369,  561 => 366,  556 => 365,  554 => 364,  542 => 355,  538 => 354,  531 => 350,  526 => 348,  521 => 346,  518 => 345,  513 => 344,  511 => 343,  497 => 334,  489 => 331,  481 => 328,  473 => 322,  467 => 320,  464 => 319,  458 => 317,  456 => 316,  443 => 306,  439 => 305,  433 => 302,  429 => 301,  423 => 298,  419 => 297,  413 => 294,  409 => 293,  403 => 290,  399 => 289,  386 => 279,  375 => 271,  367 => 266,  332 => 233,  319 => 232,  82 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('css/forums.css') }}\">
<style>
    /* Styles pour les cartes */
    .card {
        width: 85%;
        max-width: 600px;
        margin: 0 auto 1.5rem;
        border: 2px solid #000 !important;
        border-radius: 10px !important;
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        background-color: #adc29b !important;
        border-bottom: 1px solid #adc29b !important;
    }
    .card-img-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background-color: #f8f9fa;
        overflow: hidden;
        max-height: 300px;
        width: 100%;
        margin: 0 auto;
    }
    .card-img-container img {
        max-height: 100%;
        max-width: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: block;
        margin: 0 auto;
    }
    .card-body {
        padding: 1rem;
    }
    .card-text {
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
    }
    .card-actions {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }
    .btn-like,
    .btn-dislike {
        flex: 1;
    }
    .btn-comments {
        flex: 2;
    }
    /* Boutons */
    .btn-primary {
        background-color: #844062;
        border-color: #844062;
    }
    .btn-primary:hover {
        background-color: #6a3250;
        border-color: #6a3250;
    }
    .btn-delete {
        background-color: #844062;
        color: white;
        border: none;
        padding: 0.25rem 0.5rem;
        border-radius: 0.2rem;
        transition: all 0.3s;
    }
    .btn-delete:hover {
        background-color: #6a3250;
        transform: scale(1.05);
    }
    .btn-delete i {
        margin-right: 0.25rem;
    }
    /* Filtres */
    .btn-outline-custom {
        color: #844062;
        border-color: #844062;
        background-color: transparent;
    }
    .btn-outline-custom:hover {
        color: white;
        background-color: #844062;
        border-color: #844062;
    }
    .btn-group .btn.active {
        background-color: #844062;
        border-color: #844062;
        color: white;
    }
    .btn-group {
        display: inline-flex;
        flex-wrap: wrap;
        gap: 8px;
        justify-content: center;
    }
    .btn-group .btn {
        flex: 0 1 auto;
        min-width: 120px;
        text-align: center;
        transition: all 0.3s ease;
    }
    .btn-group .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(132, 64, 98, 0.2);
    }

    /* Styles pour les commentaires */
    .comments-section {
        margin-top: 20px;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        display: none;
    }
    
    .comment {
        background-color: white;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    
    .comment-content {
        padding: 10px;
        margin-bottom: 10px;
        white-space: pre-wrap;
        background-color: #f0f2f5;
        border-radius: 5px;
    }
    
    .edit-comment-form {
        margin-top: 10px;
        padding: 10px;
        background-color: #f8f9fa;
        border-radius: 5px;
        display: none;
    }
    
    .edit-comment-form textarea {
        width: 100%;
        min-height: 100px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ced4da;
        margin-bottom: 10px;
    }
    
    .comment-actions {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
    }
    
    .btn-edit-comment {
        background-color: #17a2b8;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        cursor: pointer;
    }
    
    .btn-delete-comment {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        cursor: pointer;
    }
    
    .btn-save-comment {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        cursor: pointer;
    }
    
    .comment-date {
        font-size: 0.8rem;
        color: #6c757d;
        margin-bottom: 5px;
    }
    
    .no-comments {
        text-align: center;
        padding: 20px;
        color: #6c757d;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .card {
            width: 95%;
        }
        .card-img-container {
            max-height: 250px;
        }
        .btn-group .btn {
            min-width: 100px;
            padding: 0.375rem 0.5rem;
            font-size: 0.875rem;
        }
        .comment-actions {
            flex-wrap: wrap;
        }
    }
</style>
{% endblock %}

{% block content %}
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                <h1 class=\"text-white mb-4 pb-2\">Event Listing</h1>
                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>
            </div>
        </div>
    </div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
</section>
<div style=\"height: 100px;\"></div>
<div class=\"container mt-4\">
    <div class=\"row align-items-center mb-4\">
        <div class=\"col-md-8\">
            <form method=\"GET\" action=\"{{ path('app_forums') }}\" class=\"d-flex\">
                <input type=\"text\" 
                       name=\"search\" 
                       class=\"form-control me-2\" 
                       placeholder=\"Search forums...\" 
                       value=\"{{ app.request.query.get('search') }}\"
                       aria-label=\"Search\">
                <button type=\"submit\" class=\"btn btn-outline-primary\">
                    <i class=\"fas fa-search\"></i> Search
                </button>
            </form>
        </div>
        <div class=\"col-md-4 text-md-end\">
            <a href=\"{{ path('app_forums_new') }}\" class=\"btn btn-primary\" style=\"background-color: #844062; border-color: #844062;\">
                <i class=\"fas fa-plus\"></i> Create Forum
            </a>
        </div>
    </div>
</div>
<div class=\"container mt-3\">
    <div class=\"row mb-4\">
        <div class=\"col-12 d-flex justify-content-center\">
            <div class=\"btn-group\" role=\"group\">
                <a href=\"{{ path('app_forums') }}\" 
                   class=\"btn {{ not app.request.query.get('category') ? 'active' : 'btn-outline-custom' }}\">
                   All
                </a>
                <a href=\"{{ path('app_forums', {'category': 'Mariage'}) }}\" 
                   class=\"btn {{ app.request.query.get('category') == 'Mariage' ? 'active' : 'btn-outline-custom' }}\">
                   Mariage
                </a>
                <a href=\"{{ path('app_forums', {'category': 'Anniversaire'}) }}\" 
                   class=\"btn {{ app.request.query.get('category') == 'Anniversaire' ? 'active' : 'btn-outline-custom' }}\">
                   Anniversaire
                </a>
                <a href=\"{{ path('app_forums', {'category': 'Graduation'}) }}\" 
                   class=\"btn {{ app.request.query.get('category') == 'Graduation' ? 'active' : 'btn-outline-custom' }}\">
                   Graduation
                </a>
                <a href=\"{{ path('app_forums', {'category': 'Baby Shower'}) }}\" 
                   class=\"btn {{ app.request.query.get('category') == 'Baby Shower' ? 'active' : 'btn-outline-custom' }}\">
                   Baby Shower
                </a>
            </div>
        </div>
    </div>
</div>
<div class=\"row mb-4\">
    <div class=\"col-md-6 offset-md-3\">
        <form method=\"GET\" class=\"d-flex align-items-center justify-content-center\">
            {% if app.request.query.get('category') %}
                <input type=\"hidden\" name=\"category\" value=\"{{ app.request.query.get('category') }}\">
            {% endif %}
            {% if app.request.query.get('search') %}
                <input type=\"hidden\" name=\"search\" value=\"{{ app.request.query.get('search') }}\">
            {% endif %}
            <label for=\"sort\" class=\"me-2 text-nowrap\" style=\"color: #844062;\">
                <i class=\"fas fa-sort me-1\"></i>Trier par :
            </label>
            <select name=\"sort\" id=\"sort\" class=\"form-select\" 
                    style=\"border-color: #ADC29B; color: #844062; width: auto;\"
                    onchange=\"this.form.submit()\">
                <option value=\"newest\" {% if app.request.query.get('sort') == 'newest' %}selected{% endif %}>
                    Plus récent
                </option>
                <option value=\"oldest\" {% if app.request.query.get('sort') == 'oldest' %}selected{% endif %}>
                    Plus ancien
                </option>
                <option value=\"popular\" {% if app.request.query.get('sort') == 'popular' %}selected{% endif %}>
                    Plus populaire
                </option>
            </select>
        </form>
    </div>
</div>
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        {% if forums is defined and forums is not empty %}
            {% for forum in forums %}
                <div class=\"col-lg-8 col-md-10 mb-4\">
                    <div class=\"card shadow-lg forum-card\" id=\"forum-{{ forum.id }}\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                            <h3 class=\"h5 mb-0\">{{ forum.categorie|upper }}</h3>
                            <div class=\"btn-group\">
                                <a href=\"{{ path('app_forum_edit', {'id': forum.id}) }}\" 
                                   class=\"btn btn-sm btn-outline-light me-2\">
                                   <i class=\"fas fa-edit me-1\"></i> Edit
                                </a>
                                <form method=\"POST\" action=\"{{ path('app_forum_delete', {'id': forum.id}) }}\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-forum') }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-light\" 
                                            title=\"Delete\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
                                        <i class=\"fas fa-trash me-1\"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class=\"card-img-container text-center\">
                            {% if forum.img starts with 'img_' %}
                                <img src=\"{{ path('app_forum_image', {'id': forum.img}) }}\" 
                                     alt=\"Image du forum {{ forum.categorie }}\"
                                     class=\"img-fluid mx-auto d-block\">
                            {% else %}
                                <img src=\"{{ asset('default_image.png') }}\" 
                                     alt=\"Image par défaut\"
                                     class=\"img-fluid mx-auto d-block\">
                            {% endif %}
                        </div>
                        <div class=\"card-body text-center\">
                            <p class=\"card-text\">{{ forum.description }}</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                            </div>
                            <div class=\"card-actions\">
                                <button class=\"btn btn-outline-primary btn-like\">
                                    <i class=\"far fa-thumbs-up\"></i> Like
                                </button>
                                <button class=\"btn btn-outline-danger btn-dislike\">
                                    <i class=\"far fa-thumbs-down\"></i> Dislike
                                </button>
                                <button class=\"btn btn-outline-secondary btn-comments\" 
                                        onclick=\"toggleComments('{{ forum.id }}')\">
                                    <i class=\"far fa-comment\"></i> Commentaires
                                </button>
                            </div>
                            <div id=\"comments-{{ forum.id }}\" class=\"comments-section\">
                                <div class=\"existing-comments\">
                                    {% for comment in forum.comments %}
                                        <div class=\"comment\" id=\"comment-{{ comment.IdCmn }}\">
                                            <div class=\"comment-date\">
                                                {{ comment.date|date('d/m/Y H:i') }}
                                            </div>
                                            <div class=\"comment-content\" id=\"comment-content-{{ comment.IdCmn }}\">
                                                {{ comment.sujet }}
                                            </div>
                                            <div class=\"comment-actions\">
                                                <button class=\"btn-edit-comment\" onclick=\"showEditForm({{ comment.IdCmn }})\">
                                                    <i class=\"fas fa-edit\"></i> Modifier
                                                </button>
                                                <form method=\"POST\" action=\"{{ path('comment_delete', {'id': comment.IdCmn}) }}\" class=\"d-inline\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-comment' ~ comment.IdCmn) }}\">
                                                    <button type=\"submit\" class=\"btn-delete-comment\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?')\">
                                                        <i class=\"fas fa-trash\"></i> Supprimer
                                                    </button>
                                                </form>
                                                <form id=\"edit-form-{{ comment.IdCmn }}\" class=\"edit-comment-form\" method=\"POST\" action=\"{{ path('comment_edit', {'id': comment.IdCmn}) }}\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-comment' ~ comment.IdCmn) }}\">
                                                    <textarea name=\"content\" class=\"form-control\">{{ comment.sujet }}</textarea>
                                                    <button type=\"submit\" class=\"btn-save-comment\">
                                                        <i class=\"fas fa-save\"></i> Enregistrer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    {% else %}
                                        <div class=\"no-comments\">
                                            <i class=\"far fa-comment-dots\"></i> Aucun commentaire
                                        </div>
                                    {% endfor %}
                                </div>
                                <div class=\"comment-form mt-3\">
                                    <form action=\"{{ path('app_comment_add', {'forumId': forum.id}) }}\" method=\"POST\">
                                        <textarea name=\"comment_content\" 
                                                  class=\"form-control\" 
                                                  rows=\"3\" 
                                                  placeholder=\"Ajouter un commentaire...\" 
                                                  required></textarea>
                                        <button type=\"submit\" class=\"btn btn-primary mt-2\">
                                            <i class=\"far fa-paper-plane\"></i> Poster
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% else %}
            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center py-4\">
                    <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>No forum found</h4>
                    <p class=\"mb-0\">Be the first to create a forum!</p>
                    <a href=\"{{ path('app_forums_new') }}\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i>Create forum
                    </a>
                </div>
            </div>
        {% endif %}
    </div>
</div>
<div style=\"height: 100px;\"></div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    // Toggle comments visibility
    function toggleComments(forumId) {
        const section = document.getElementById(`comments-\${forumId}`);
        const button = document.querySelector(`button[onclick=\"toggleComments('\${forumId}')\"]`);
        if (section.style.display === \"none\" || section.style.display === \"\") {
            section.style.display = \"block\";
            button.innerHTML = '<i class=\"far fa-comment\"></i> Masquer';
            button.classList.add('active');
        } else {
            section.style.display = \"none\";
            button.innerHTML = '<i class=\"far fa-comment\"></i> Commentaires';
            button.classList.remove('active');
        }
    }

    // Show edit form
    function showEditForm(commentId) {
        // Hide comment content and action buttons
        document.getElementById(`comment-content-\${commentId}`).style.display = 'none';
        document.querySelector(`#comment-\${commentId} .btn-edit-comment`).style.display = 'none';
        document.querySelector(`#comment-\${commentId} .btn-delete-comment`).style.display = 'none';

        // Show edit form
        const editForm = document.getElementById(`edit-form-\${commentId}`);
        editForm.style.display = 'block';
        editForm.querySelector('textarea').focus();
    }

    // Handle form submission
    document.addEventListener('DOMContentLoaded', function() {
        // Hide comments on load
        document.querySelectorAll('.comments-section').forEach(section => {
            section.style.display = 'none';
        });

        // Handle edit form submission
        document.querySelectorAll('.edit-comment-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                const saveBtn = form.querySelector('.btn-save-comment');
                saveBtn.disabled = true;
                saveBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Enregistrement...';
                
                // You could add AJAX here if needed, but the form will submit normally
            });
        });
    });
    
</script>
{% endblock %}", "forums/forums.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\forums\\forums.html.twig");
    }
}
