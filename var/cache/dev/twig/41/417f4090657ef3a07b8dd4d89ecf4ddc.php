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
<style>
  /* Styles pour les cartes */
  .card {
      width: 85%;
      max-width: 600px;
      margin: 0 auto 1.5rem;
      border: 2px solid #ADC29B !important;
      border-radius: 10px !important;
      transition: transform 0.3s ease;
      border-color: #ADC29B;
  }

  .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }

  .card-header {
      background-color: #ADC29B !important;
      border-bottom: 1px solid #ADC29B !important;
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
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
    
  .btn-like, .btn-dislike {
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

  /* Commentaires */
  .comments-section {
      display: none;
      padding: 15px;
      background-color: #f8f9fa;
      border-top: 1px solid #eee;
      border-radius: 0 0 8px 8px;
  }
    
  .comment {
      padding: 10px;
      margin-bottom: 10px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
  }
    
  .comment-form {
      margin-top: 15px;
  }

  /* Animations */
  @keyframes fadeOut {
      from { opacity: 1; }
      to { opacity: 0; transform: translateY(-20px); }
  }

  .fade-out {
      animation: fadeOut 0.3s forwards;
  }

  @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
  }

  .flash-message {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 1000;
      min-width: 300px;
      animation: fadeIn 0.3s;
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
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 205
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

        // line 206
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
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
        yield "\" class=\"d-flex\">
                <input type=\"text\" 
                       name=\"search\" 
                       class=\"form-control me-2\" 
                       placeholder=\"Search forums...\" 
                       value=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "query", [], "any", false, false, false, 249), "get", ["search"], "method", false, false, false, 249), "html", null, true);
        yield "\"
                       aria-label=\"Search\">
                <button type=\"submit\" class=\"btn btn-outline-primary\">
                    <i class=\"fas fa-search\"></i> Search
                </button>
            </form>
        </div>

      <div class=\"col-md-4 text-md-end\">
    <a href=\"";
        // line 258
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
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
        yield "\" 
                   class=\"btn ";
        // line 270
        yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "request", [], "any", false, false, false, 270), "query", [], "any", false, false, false, 270), "get", ["category"], "method", false, false, false, 270)) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   All
                </a>
                <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Mariage"]);
        yield "\" 
                   class=\"btn ";
        // line 274
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 274, $this->source); })()), "request", [], "any", false, false, false, 274), "query", [], "any", false, false, false, 274), "get", ["category"], "method", false, false, false, 274) == "Mariage")) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   Mariage
                </a>
                <a href=\"";
        // line 277
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Anniversaire"]);
        yield "\" 
                   class=\"btn ";
        // line 278
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "request", [], "any", false, false, false, 278), "query", [], "any", false, false, false, 278), "get", ["category"], "method", false, false, false, 278) == "Anniversaire")) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   Anniversaire
                </a>
                <a href=\"";
        // line 281
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Graduation"]);
        yield "\" 
                   class=\"btn ";
        // line 282
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "request", [], "any", false, false, false, 282), "query", [], "any", false, false, false, 282), "get", ["category"], "method", false, false, false, 282) == "Graduation")) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   Graduation
                </a>
                <a href=\"";
        // line 285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Baby Shower"]);
        yield "\" 
                   class=\"btn ";
        // line 286
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "request", [], "any", false, false, false, 286), "query", [], "any", false, false, false, 286), "get", ["category"], "method", false, false, false, 286) == "Baby Shower")) ? ("active") : ("btn-outline-custom"));
        yield "\">
                   Baby Shower
                </a>
            </div>
        </div>
    </div>
</div>

<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        ";
        // line 296
        if ((array_key_exists("forums", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 296, $this->source); })())))) {
            // line 297
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 297, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 298
                yield "                <div class=\"col-lg-8 col-md-10 mb-4\">
                    <div class=\"card shadow-lg forum-card\" id=\"forum-";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 299), "html", null, true);
                yield "\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                            <h3 class=\"h5 mb-0\">";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 301)), "html", null, true);
                yield "</h3>
                            <div class=\"btn-group\">
                                <a href=\"";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 303)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-sm btn-outline-light me-2\">
                                   <i class=\"fas fa-edit me-1\"></i> Edit
                                </a>
                                
                                <form method=\"POST\" action=\"";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 308)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-forum"), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-light\" 
                                            title=\"Delete\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
                                        <i class=\"fas fa-trash me-1\"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        


     
  
                       <div class=\"card-img-container text-center\"> <!-- Ajout de text-center -->
    ";
                // line 323
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 323)) && is_string($_v1 = "img_") && str_starts_with($_v0, $_v1))) {
                    // line 324
                    yield "        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 324)]), "html", null, true);
                    yield "\" 
             alt=\"Image du forum ";
                    // line 325
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 325), "html", null, true);
                    yield "\"
             class=\"img-fluid mx-auto d-block\"> <!-- Classes importantes -->
    ";
                } else {
                    // line 328
                    yield "        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default_image.png"), "html", null, true);
                    yield "\" 
             alt=\"Image par défaut\"
             class=\"img-fluid mx-auto d-block\"> <!-- Classes importantes -->
    ";
                }
                // line 332
                yield "</div>
                        
                        <div class=\"card-body\">
                            <p class=\"card-text\">";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 335), "html", null, true);
                yield "</p>
                            
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <small class=\"text-muted\">
                                    <i class=\"far fa-calendar-alt mr-1\"></i>
                                    ";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "date", [], "any", false, false, false, 340), "d/m/Y à H\\hi"), "html", null, true);
                yield "
                                </small>
                            </div>
                            
                            <div class=\"card-actions\">
                                <button class=\"btn btn-outline-primary btn-like\">
                                    <i class=\"far fa-thumbs-up\"></i> Like
                                </button>
                                <button class=\"btn btn-outline-danger btn-dislike\">
                                    <i class=\"far fa-thumbs-down\"></i> Dislike
                                </button>
                                <button class=\"btn btn-outline-secondary btn-comments\" 
                                        onclick=\"toggleComments('comments-";
                // line 352
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 352), "html", null, true);
                yield "', this)\">
                                    <i class=\"far fa-comment\"></i> Comment
                                </button>
                            </div>

                            <div id=\"comments-";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 357), "html", null, true);
                yield "\" class=\"comments-section\">
                                <h5>Comments</h5>
                                <div class=\"existing-comments\">
                                    ";
                // line 360
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", true, true, false, 360)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 360), [])) : ([])));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 361
                    yield "                                        <div class=\"comment\">
                                            <small class=\"text-muted\">";
                    // line 362
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 362), "d/m/Y H:i"), "html", null, true);
                    yield "</small>
                                            <p class=\"mb-0 mt-1\">";
                    // line 363
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 363), "html", null, true);
                    yield "</p>
                                        </div>
                                    ";
                    $context['_iterated'] = true;
                }
                // line 365
                if (!$context['_iterated']) {
                    // line 366
                    yield "                                        <p class=\"text-muted\">No comments yet.</p>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 368
                yield "                                </div>
                            
                                <form class=\"comment-form\" data-forum-id=\"";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 370), "html", null, true);
                yield "\">
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control\" name=\"content\" rows=\"2\" placeholder=\"Your comment...\" required></textarea>
                                    </div>
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 374
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("comment"), "html", null, true);
                yield " \">
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['forum'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            yield "        ";
        } else {
            // line 383
            yield "            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center py-4\">
                    <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>No forum found</h4>
                    <p class=\"mb-0\">Be the first to create a forum!</p>
                    <a href=\"";
            // line 387
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums_new");
            yield "\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i>Create forum
                    </a>
                </div>
            </div>
        ";
        }
        // line 393
        yield "    </div>
</div>

<div style=\"height: 100px;\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 399
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

        // line 400
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Fonction pour basculer l'affichage des commentaires
    function toggleComments(commentSectionId, button) {
        const commentsSection = document.getElementById(commentSectionId);
        
        // Masquer toutes les autres sections de commentaires
        document.querySelectorAll('.comments-section').forEach(section => {
            if (section.id !== commentSectionId) {
                section.style.display = 'none';
                const correspondingBtn = section.closest('.card-body').querySelector('.btn-comments');
                if (correspondingBtn) {
                    correspondingBtn.classList.remove('active');
                    correspondingBtn.innerHTML = '<i class=\"far fa-comment\"></i> Comment';
                }
            }
        });
        
        // Basculer la section actuelle
        if (commentsSection.style.display === 'none') {
            commentsSection.style.display = 'block';
            button.innerHTML = '<i class=\"far fa-comment\"></i> Hide';
            button.classList.add('active');
        } else {
            commentsSection.style.display = 'none';
            button.innerHTML = '<i class=\"far fa-comment\"></i> Comment';
            button.classList.remove('active');
        }
    }

    // Initialisation - masquer toutes les sections de commentaires au chargement
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.comments-section').forEach(section => {
            section.style.display = 'none';
        });

        // Gestion des formulaires de commentaires
        document.querySelectorAll('.comment-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const content = this.querySelector('[name=\"content\"]').value.trim();
                const forumId = this.dataset.forumId;
                const csrfToken = this.querySelector('[name=\"_token\"]').value;
                
                if (content) {
                    fetch(`/forum/\${forumId}/comment`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-Token': csrfToken
                        },
                        body: JSON.stringify({ 
                            content: content,
                            _token: csrfToken
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const commentsList = this.closest('.comments-section').querySelector('.existing-comments');
                            const noCommentsMsg = commentsList.querySelector('.text-muted');
                            
                            if (noCommentsMsg) {
                                noCommentsMsg.remove();
                            }
                            
                            const commentHtml = `
                                <div class=\"comment\">
                                    <small class=\"text-muted\">\${data.comment.createdAt}</small>
                                    <p class=\"mb-0 mt-1\">\${data.comment.content}</p>
                                </div>
                            `;
                            
                            commentsList.insertAdjacentHTML('afterbegin', commentHtml);
                            this.reset();
                        }
                    });
                }
            });
        });

        // Gestion de la suppression des forums
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const forumId = this.closest('.forum-card').id.split('-')[1];
                handleDeleteForum(e, forumId);
            });
        });
    });

    function handleDeleteForum(event, forumId) {
        if (!confirm('Are you sure you want to delete this forum? This action cannot be undone.')) {
            return;
        }

        const card = document.getElementById(`forum-\${forumId}`);
        const form = event.target.closest('form');
        const btn = event.target;
        const originalHtml = btn.innerHTML;
        const csrfToken = form.querySelector('[name=\"_token\"]').value;

        btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';
        btn.disabled = true;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': csrfToken
            },
            body: JSON.stringify({ _token: csrfToken })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                card.classList.add('fade-out');
                card.addEventListener('animationend', () => {
                    card.remove();
                    showFlashMessage('success', data.message || 'Forum deleted successfully!');
                    
                    if (!document.querySelector('.forum-card')) {
                        document.querySelector('.container.mt-3').innerHTML = `
                            <div class=\"alert alert-warning text-center py-4\">
                                <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>No forum found</h4>
                                <p class=\"mb-0\">Be the first to create a forum!</p>
                                <a href=\"";
        // line 526
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums_new");
        yield "\" class=\"btn btn-primary mt-3\">
                                    <i class=\"fas fa-plus me-2\"></i>Create forum
                                </a>
                            </div>
                        `;
                    }
                }, { once: true });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            btn.innerHTML = originalHtml;
            btn.disabled = false;
            showFlashMessage('danger', error.message || 'An error occurred while deleting');
        });
    }

    function showFlashMessage(type, message) {
        document.querySelectorAll('.flash-message').forEach(el => el.remove());

        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-\${type} alert-dismissible fade show flash-message`;
        alertDiv.innerHTML = `
            \${message}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        `;
        
        document.body.appendChild(alertDiv);
        
        setTimeout(() => {
            alertDiv.classList.remove('show');
            setTimeout(() => alertDiv.remove(), 150);
        }, 3000);
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
        return array (  773 => 526,  644 => 400,  631 => 399,  616 => 393,  607 => 387,  601 => 383,  598 => 382,  584 => 374,  577 => 370,  573 => 368,  566 => 366,  564 => 365,  557 => 363,  553 => 362,  550 => 361,  545 => 360,  539 => 357,  531 => 352,  516 => 340,  508 => 335,  503 => 332,  495 => 328,  489 => 325,  484 => 324,  482 => 323,  465 => 309,  461 => 308,  453 => 303,  448 => 301,  443 => 299,  440 => 298,  435 => 297,  433 => 296,  420 => 286,  416 => 285,  410 => 282,  406 => 281,  400 => 278,  396 => 277,  390 => 274,  386 => 273,  380 => 270,  376 => 269,  362 => 258,  350 => 249,  342 => 244,  302 => 206,  289 => 205,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
{{ parent() }}
<style>
  /* Styles pour les cartes */
  .card {
      width: 85%;
      max-width: 600px;
      margin: 0 auto 1.5rem;
      border: 2px solid #ADC29B !important;
      border-radius: 10px !important;
      transition: transform 0.3s ease;
      border-color: #ADC29B;
  }

  .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }

  .card-header {
      background-color: #ADC29B !important;
      border-bottom: 1px solid #ADC29B !important;
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
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
    
  .btn-like, .btn-dislike {
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

  /* Commentaires */
  .comments-section {
      display: none;
      padding: 15px;
      background-color: #f8f9fa;
      border-top: 1px solid #eee;
      border-radius: 0 0 8px 8px;
  }
    
  .comment {
      padding: 10px;
      margin-bottom: 10px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
  }
    
  .comment-form {
      margin-top: 15px;
  }

  /* Animations */
  @keyframes fadeOut {
      from { opacity: 1; }
      to { opacity: 0; transform: translateY(-20px); }
  }

  .fade-out {
      animation: fadeOut 0.3s forwards;
  }

  @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
  }

  .flash-message {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 1000;
      min-width: 300px;
      animation: fadeIn 0.3s;
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
                        


     
  
                       <div class=\"card-img-container text-center\"> <!-- Ajout de text-center -->
    {% if forum.img starts with 'img_' %}
        <img src=\"{{ path('app_forum_image', {'id': forum.img}) }}\" 
             alt=\"Image du forum {{ forum.categorie }}\"
             class=\"img-fluid mx-auto d-block\"> <!-- Classes importantes -->
    {% else %}
        <img src=\"{{ asset('default_image.png') }}\" 
             alt=\"Image par défaut\"
             class=\"img-fluid mx-auto d-block\"> <!-- Classes importantes -->
    {% endif %}
</div>
                        
                        <div class=\"card-body\">
                            <p class=\"card-text\">{{ forum.description }}</p>
                            
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <small class=\"text-muted\">
                                    <i class=\"far fa-calendar-alt mr-1\"></i>
                                    {{ forum.date|date('d/m/Y à H\\\\hi') }}
                                </small>
                            </div>
                            
                            <div class=\"card-actions\">
                                <button class=\"btn btn-outline-primary btn-like\">
                                    <i class=\"far fa-thumbs-up\"></i> Like
                                </button>
                                <button class=\"btn btn-outline-danger btn-dislike\">
                                    <i class=\"far fa-thumbs-down\"></i> Dislike
                                </button>
                                <button class=\"btn btn-outline-secondary btn-comments\" 
                                        onclick=\"toggleComments('comments-{{ forum.id }}', this)\">
                                    <i class=\"far fa-comment\"></i> Comment
                                </button>
                            </div>

                            <div id=\"comments-{{ forum.id }}\" class=\"comments-section\">
                                <h5>Comments</h5>
                                <div class=\"existing-comments\">
                                    {% for comment in forum.comments|default([]) %}
                                        <div class=\"comment\">
                                            <small class=\"text-muted\">{{ comment.createdAt|date('d/m/Y H:i') }}</small>
                                            <p class=\"mb-0 mt-1\">{{ comment.content }}</p>
                                        </div>
                                    {% else %}
                                        <p class=\"text-muted\">No comments yet.</p>
                                    {% endfor %}
                                </div>
                            
                                <form class=\"comment-form\" data-forum-id=\"{{ forum.id }}\">
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control\" name=\"content\" rows=\"2\" placeholder=\"Your comment...\" required></textarea>
                                    </div>
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('comment') }} \">
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Post</button>
                                </form>
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
    // Fonction pour basculer l'affichage des commentaires
    function toggleComments(commentSectionId, button) {
        const commentsSection = document.getElementById(commentSectionId);
        
        // Masquer toutes les autres sections de commentaires
        document.querySelectorAll('.comments-section').forEach(section => {
            if (section.id !== commentSectionId) {
                section.style.display = 'none';
                const correspondingBtn = section.closest('.card-body').querySelector('.btn-comments');
                if (correspondingBtn) {
                    correspondingBtn.classList.remove('active');
                    correspondingBtn.innerHTML = '<i class=\"far fa-comment\"></i> Comment';
                }
            }
        });
        
        // Basculer la section actuelle
        if (commentsSection.style.display === 'none') {
            commentsSection.style.display = 'block';
            button.innerHTML = '<i class=\"far fa-comment\"></i> Hide';
            button.classList.add('active');
        } else {
            commentsSection.style.display = 'none';
            button.innerHTML = '<i class=\"far fa-comment\"></i> Comment';
            button.classList.remove('active');
        }
    }

    // Initialisation - masquer toutes les sections de commentaires au chargement
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.comments-section').forEach(section => {
            section.style.display = 'none';
        });

        // Gestion des formulaires de commentaires
        document.querySelectorAll('.comment-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const content = this.querySelector('[name=\"content\"]').value.trim();
                const forumId = this.dataset.forumId;
                const csrfToken = this.querySelector('[name=\"_token\"]').value;
                
                if (content) {
                    fetch(`/forum/\${forumId}/comment`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-Token': csrfToken
                        },
                        body: JSON.stringify({ 
                            content: content,
                            _token: csrfToken
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const commentsList = this.closest('.comments-section').querySelector('.existing-comments');
                            const noCommentsMsg = commentsList.querySelector('.text-muted');
                            
                            if (noCommentsMsg) {
                                noCommentsMsg.remove();
                            }
                            
                            const commentHtml = `
                                <div class=\"comment\">
                                    <small class=\"text-muted\">\${data.comment.createdAt}</small>
                                    <p class=\"mb-0 mt-1\">\${data.comment.content}</p>
                                </div>
                            `;
                            
                            commentsList.insertAdjacentHTML('afterbegin', commentHtml);
                            this.reset();
                        }
                    });
                }
            });
        });

        // Gestion de la suppression des forums
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const forumId = this.closest('.forum-card').id.split('-')[1];
                handleDeleteForum(e, forumId);
            });
        });
    });

    function handleDeleteForum(event, forumId) {
        if (!confirm('Are you sure you want to delete this forum? This action cannot be undone.')) {
            return;
        }

        const card = document.getElementById(`forum-\${forumId}`);
        const form = event.target.closest('form');
        const btn = event.target;
        const originalHtml = btn.innerHTML;
        const csrfToken = form.querySelector('[name=\"_token\"]').value;

        btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';
        btn.disabled = true;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': csrfToken
            },
            body: JSON.stringify({ _token: csrfToken })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                card.classList.add('fade-out');
                card.addEventListener('animationend', () => {
                    card.remove();
                    showFlashMessage('success', data.message || 'Forum deleted successfully!');
                    
                    if (!document.querySelector('.forum-card')) {
                        document.querySelector('.container.mt-3').innerHTML = `
                            <div class=\"alert alert-warning text-center py-4\">
                                <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>No forum found</h4>
                                <p class=\"mb-0\">Be the first to create a forum!</p>
                                <a href=\"{{ path('app_forums_new') }}\" class=\"btn btn-primary mt-3\">
                                    <i class=\"fas fa-plus me-2\"></i>Create forum
                                </a>
                            </div>
                        `;
                    }
                }, { once: true });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            btn.innerHTML = originalHtml;
            btn.disabled = false;
            showFlashMessage('danger', error.message || 'An error occurred while deleting');
        });
    }

    function showFlashMessage(type, message) {
        document.querySelectorAll('.flash-message').forEach(el => el.remove());

        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-\${type} alert-dismissible fade show flash-message`;
        alertDiv.innerHTML = `
            \${message}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        `;
        
        document.body.appendChild(alertDiv);
        
        setTimeout(() => {
            alertDiv.classList.remove('show');
            setTimeout(() => alertDiv.remove(), 150);
        }, 3000);
    }
</script>
{% endblock %}", "forums/forums.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\forums\\forums.html.twig");
    }
}
