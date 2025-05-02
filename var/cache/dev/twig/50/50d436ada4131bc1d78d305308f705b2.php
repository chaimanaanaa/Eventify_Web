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

/* marketplace/test.html.twig */
class __TwigTemplate_0f9fd023b366ef73bef514ec0ec17418 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "marketplace/test.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/darkmode.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
<!-- Add Leaflet CSS -->
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\"/>

<!-- Error Toast Container -->
<div id=\"errorToast\" class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 1100; display: none;\">
    <div class=\"toast align-items-center text-white bg-danger border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                <span id=\"errorMessage\"></span>
            </div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>

<!-- Success Toast Container -->
<div id=\"successToast\" class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 1100; display: none;\">
    <div class=\"toast align-items-center text-white bg-success border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>
                <span id=\"successMessage\"></span>
            </div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>

<!-- Info Toast Container -->
<div id=\"infoToast\" class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 1100; display: none;\">
    <div class=\"toast align-items-center text-white bg-info border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\">
                <i class=\"bi bi-info-circle-fill me-2\"></i>
                <span id=\"infoMessage\"></span>
            </div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>

<!-- Image Zoom Modal -->
<div class=\"modal fade\" id=\"imageZoomModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-xl\">
        <div class=\"modal-content bg-transparent border-0\">
            <div class=\"modal-header border-0\">
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center\">
                <div style=\"overflow: auto; max-height: 80vh;\">
                    <img id=\"zoomedImage\" src=\"\" class=\"img-fluid shadow-lg\" style=\"max-width: 100%; cursor: zoom-in; transition: transform 0.2s ease-out; transform-origin: center center;\">
                </div>
                <div class=\"mt-3\">
                    <button class=\"btn btn-primary me-2\" id=\"zoomInBtn\">
                        <i class=\"bi bi-zoom-in\"></i> Zoom In
                    </button>
                    <button class=\"btn btn-primary\" id=\"zoomOutBtn\">
                        <i class=\"bi bi-zoom-out\"></i> Zoom Out
                    </button>
                    <button class=\"btn btn-secondary\" id=\"resetZoomBtn\">
                        <i class=\"bi bi-arrow-counterclockwise\"></i> Reset
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Favorites Modal -->
<div class=\"modal fade\" id=\"favoritesModal\" tabindex=\"-1\" aria-labelledby=\"favoritesModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"favoritesModalLabel\">
                    <i class=\"bi bi-heart-fill text-danger me-2\"></i>My Favorites
                </h5>
                <div class=\"d-flex gap-2\">
                    <button type=\"button\" class=\"btn btn-outline-danger\" id=\"removeAllFavorites\">
                        <i class=\"bi bi-trash me-1\"></i>Remove All
                    </button>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
            </div>
            <div class=\"modal-body\">
                <div id=\"favoritesContent\">
                    <div class=\"text-center py-5\">
                        <i class=\"bi bi-heart text-muted\" style=\"font-size: 3rem;\"></i>
                        <h4 class=\"mt-3\">No favorites yet</h4>
                        <p>Click the heart icon on items to save them here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Preview Modal -->
<div class=\"modal fade\" id=\"mapPreviewModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Location Preview</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body p-0\">
                <div id=\"mapPreview\" style=\"height: 400px; width: 100%;\"></div>
            </div>
        </div>
    </div>
</div>

<!-- Hero Section -->
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\" style=\"background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/cart.png'); background-size: cover; background-position: center; min-height: 60vh;\">
    <div class=\"container position-relative z-index-1\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-12 text-center text-lg-start\">
                <h1 class=\"eventify-title display-4 fw-bold mb-4 text-white\">Welcome to Eventify Marketplace</h1>
                <p class=\"lead text-white mb-4\">Discover everything you need for your perfect event</p>
                
                <!-- Search Bar with Voice Search -->
                <div class=\"search-container bg-white rounded-pill shadow-sm mb-4\" style=\"max-width: 600px;\">
                    <div class=\"input-group\">
                        <input type=\"text\" id=\"searchInput\" class=\"form-control border-0 rounded-pill py-3 px-4\" placeholder=\"Search for venues, equipment...\">
                        <button class=\"btn btn-outline-secondary rounded-pill px-3\" type=\"button\" id=\"voiceSearchBtn\">
                            <i class=\"bi bi-mic-fill\"></i>
                        </button>
                        <button class=\"btn btn-primary rounded-pill px-4\" type=\"button\" id=\"searchButton\">
                            <i class=\"bi bi-search\"></i> Search
                        </button>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class=\"d-flex gap-2 justify-content-center justify-content-lg-start align-items-center flex-wrap\">
                    <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_view");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"bi bi-cart3\"></i> View Cart
                        <span class=\"badge bg-light text-primary ms-2\">
                            ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "session", [], "any", false, false, false, 143), "get", ["cart_count", 0], "method", false, false, false, 143), "html", null, true);
        yield "
                        </span>
                    </a>
                    
                    <button type=\"button\" class=\"btn btn-outline-light px-3 py-2 rounded-pill d-flex align-items-center\" data-bs-toggle=\"modal\" data-bs-target=\"#favoritesModal\">
                        <i class=\"bi bi-heart-fill me-2 text-danger\"></i>Favorites
                    </button>
                    
                    <a href=\"#marketplace\" class=\"btn btn-outline-light px-3 py-2 rounded-pill\">
                        <i class=\"bi bi-grid me-2\"></i>Browse
                    </a>
                    
                    <button class=\"theme-toggle btn btn-light px-3 py-2 rounded-pill shadow-sm\" id=\"themeToggle\" title=\"Toggle theme\">
                        <i class=\"bi bi-sun\"></i>
                        <i class=\"bi bi-moon\"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"none\" style=\"position: absolute; bottom: 0; left: 0; width: 100%; height: auto;\">
        <path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
</section>

<!-- Marketplace Section -->
<div class=\"container mt-5\" id=\"marketplace\">
    <div class=\"row\">
        <!-- Filter Column -->
        <div class=\"col-md-3 order-md-2 mb-4\">
            <div class=\"card shadow-sm sticky-top\" style=\"top: 20px;\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-funnel me-2\"></i>Filters</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid mb-4\">
                        <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics");
        yield "\" class=\"btn btn-primary\">
                            <i class=\"bi bi-plus-circle me-1\"></i> Add Logistic
                        </a>
                    </div>
                    
                    <!-- Category Filter -->
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-bold d-block mb-3\">Categories</label>
                        <div class=\"category-filter\">
                            <a href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" 
                               class=\"category-item ";
        // line 196
        if ( !(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 196, $this->source); })())) {
            yield "active";
        }
        yield " d-flex align-items-center mb-2 p-2 rounded-3\">
                                <div class=\"category-icon bg-light-primary d-flex align-items-center justify-content-center rounded-2 me-3\" style=\"width: 40px; height: 40px;\">
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </div>
                                <span>All Categories</span>
                            </a>
                            
                            ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 203, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 204
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop", ["categoryId" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 204)]), "html", null, true);
            yield "\" 
                                   class=\"category-item ";
            // line 205
            if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 205, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 205))) {
                yield "active";
            }
            yield " d-flex align-items-center mb-2 p-2 rounded-3\">
                                    <div class=\"category-img rounded-2 me-3 overflow-hidden\" style=\"width: 40px; height: 40px;\">
                                        <img src=\"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 207)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 207), "html", null, true);
            yield "\" class=\"img-fluid h-100 w-100 object-fit-cover\">
                                    </div>
                                    <span>";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 209), "html", null, true);
            yield "</span>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "                        </div>
                    </div>
                    
                    <!-- Type Filter -->
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Type</label>
                        <select class=\"form-select\" id=\"typeFilter\">
                            <option value=\"\">All Types</option>
                            <option value=\"equipment\">Equipment</option>
                            <option value=\"venue\">Venue</option>
                        </select>
                    </div>

                    <!-- Price Filter -->
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Price Range (TND)</label>
                        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"10000\" step=\"10\" id=\"priceRange\">
                        <div class=\"d-flex justify-content-between\">
                            <span id=\"minPrice\">0</span>
                            <span id=\"maxPrice\">10000</span>
                        </div>
                    </div>
                    
                    <button class=\"btn btn-outline-danger w-100\" id=\"resetFilters\">
                        <i class=\"bi bi-x-circle me-1\"></i>Reset Filters
                    </button>
                </div>
            </div>
        </div>

        <!-- Items Column -->
        <div class=\"col-md-9 order-md-1\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h2 class=\"mb-0\">
                    ";
        // line 246
        if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 246, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["categories"] ?? null), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 246, $this->source); })()), [], "array", true, true, false, 246))) {
            // line 247
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 247, $this->source); })()), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 247, $this->source); })()), [], "array", false, false, false, 247), "image", [], "any", false, false, false, 247)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 247, $this->source); })()), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 247, $this->source); })()), [], "array", false, false, false, 247), "name", [], "any", false, false, false, 247), "html", null, true);
            yield "\" style=\"width: 32px; height: 32px; object-fit: cover; border-radius: 6px;\" class=\"me-2\">
                        ";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 248, $this->source); })()), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 248, $this->source); })()), [], "array", false, false, false, 248), "name", [], "any", false, false, false, 248), "html", null, true);
            yield "
                    ";
        } else {
            // line 250
            yield "                        <i class=\"bi bi-grid-fill me-2 text-primary\"></i>All Items
                    ";
        }
        // line 252
        yield "                </h2>
                <span class=\"badge bg-primary rounded-pill px-3 py-2\" id=\"itemCount\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 253, $this->source); })())), "html", null, true);
        yield " items</span>
            </div>

            ";
        // line 256
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 256, $this->source); })()))) {
            // line 257
            yield "                <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4\" id=\"itemsContainer\">
                    ";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 258, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 259
                yield "                        <div class=\"col item-card\"
                             data-name=\"";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 260)), "html", null, true);
                yield "\"
                             data-description=\"";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 261)), "html", null, true);
                yield "\"
                             data-type=\"";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 262)), "html", null, true);
                yield "\"
                             data-price=\"";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 263), "html", null, true);
                yield "\"
                             data-address=\"";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lieux", [], "any", false, false, false, 264), "html", null, true);
                yield "\">
                            <div class=\"card h-100 shadow-hover\">
                                ";
                // line 266
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 266), "id", [], "any", false, false, false, 266) == (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 266, $this->source); })()))) {
                    // line 267
                    yield "                                    <span class=\"position-absolute top-0 start-0 m-2 badge bg-warning\" style=\"z-index: 10;\">
                                        <i class=\"bi bi-star-fill me-1\"></i>Your Item
                                    </span>
                                ";
                } else {
                    // line 271
                    yield "                                    <button class=\"btn btn-sm btn-outline-danger toggle-favorite position-absolute top-0 end-0 m-2\" 
                                            data-item-id=\"";
                    // line 272
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 272), "html", null, true);
                    yield "\"
                                            data-is-favorite=\"false\"
                                            title=\"Add to favorites\"
                                            style=\"z-index: 10;\">
                                        <i class=\"bi bi-heart\"></i>
                                    </button>
                                ";
                }
                // line 279
                yield "                                
                                <div class=\"position-relative\">
                                    <img src=\"";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 281)), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 281), "html", null, true);
                yield "\" style=\"height: 200px; object-fit: cover;\">
                                    <div class=\"position-absolute top-0 end-0 m-2\">
                                        <button class=\"btn btn-sm btn-light rounded-circle favorite-btn\" data-item-id=\"";
                // line 283
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 283), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-heart\"></i>
                                        </button>
                                    </div>
                                    <!-- Add zoom button -->
                                    <div class=\"position-absolute top-0 start-0 m-2\">
                                        <button class=\"btn btn-sm btn-light rounded-circle zoom-image-btn\" data-image-src=\"";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 289)), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-zoom-in\"></i>
                                        </button>
                                    </div>
                                    <!-- Add map preview button -->
                                    <div class=\"position-absolute bottom-0 end-0 m-2\">
                                        <button class=\"btn btn-sm btn-primary rounded-circle map-preview-btn\" 
                                                data-bs-toggle=\"modal\" 
                                                data-bs-target=\"#mapPreviewModal\"
                                                data-address=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lieux", [], "any", false, false, false, 298), "html", null, true);
                yield "\">
                                            <i class=\"bi bi-geo-alt\"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 305), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text text-muted\">";
                // line 306
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 306)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 306), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 306), "html", null, true)));
                yield "</p>
                                    
                                    <div class=\"item-details\" style=\"max-height: 0; overflow: hidden; transition: max-height 0.3s ease;\">
                                        <hr class=\"my-2\">
                                        <div class=\"row small text-muted\">
                                            <div class=\"col-6\">
                                                <div><i class=\"bi bi-tag me-1\"></i> ";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 312), "html", null, true);
                yield "</div>
                                                <div><i class=\"bi bi-box me-1\"></i> ";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 313), "html", null, true);
                yield "</div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div><i class=\"bi bi-people me-1\"></i> ";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "capacite", [], "any", false, false, false, 316), "html", null, true);
                yield "</div>
                                                <div><i class=\"bi bi-geo-alt me-1\"></i> ";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lieux", [], "any", false, false, false, 317), "html", null, true);
                yield "</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                        <span class=\"h5 text-primary mb-0\">";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 323), "html", null, true);
                yield " TND</span>
                                        <button class=\"btn btn-sm btn-outline-secondary toggle-details\">
                                            <i class=\"bi bi-three-dots\"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class=\"card-footer bg-transparent\">
                                    ";
                // line 331
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 331), "id", [], "any", false, false, false, 331) == (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 331, $this->source); })()))) {
                    // line 332
                    yield "                                        <div class=\"d-flex justify-content-end gap-2\">
                                            <a href=\"";
                    // line 333
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistic_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 333)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-primary\">
                                                <i class=\"bi bi-pencil-square me-1\"></i>Edit
                                            </a>
                                            <form method=\"post\" action=\"";
                    // line 336
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistic_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 336)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Are you sure?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 337
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 337))), "html", null, true);
                    yield "\">
                                                <button class=\"btn btn-sm btn-outline-danger\">
                                                    <i class=\"bi bi-trash me-1\"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    ";
                } else {
                    // line 344
                    yield "    <div class=\"d-flex gap-2\">  <!-- Horizontal layout -->
    <!-- Add to Cart Button -->
    <a href=\"";
                    // line 346
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 346)]), "html", null, true);
                    yield "\" 
       class=\"btn btn-primary add-to-cart-btn icon-button\">
        <span class=\"button-content\">
            <i class=\"bi bi-cart-plus\"></i>
            <span class=\"button-text\">Add to Cart</span>
        </span>
    </a>

    <!-- Live View Button -->
    <a href=\"";
                    // line 355
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_live", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 355)]), "html", null, true);
                    yield "\" 
       class=\"btn btn-success live-btn icon-button\">
        <span class=\"button-content\">
            <i class=\"bi bi-broadcast\"></i>
            <span class=\"button-text\">Live</span>
        </span>
        <span class=\"live-dot\"></span>
    </a>
</div>

<style>
    /* Container styling */
    .button-container {
        width: 100%;
        background: rgba(255,255,255,0.9);
        border-radius: 0 0 10px 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Base button styles */
    .icon-button {
        width: 45px;
        height: 45px;
        padding: 0;
        border-radius: 50% !important;
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        border: none;
    }

    /* Button content container */
    .button-content {
        display: flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        transition: all 0.3s ease;
    }

    /* Icon styling */
    .icon-button i {
        font-size: 1.2rem;
        position: absolute;
        transition: all 0.3s ease;
    }

    /* Text styling - hidden by default */
    .button-text {
        opacity: 0;
        width: 0;
        transition: all 0.3s ease;
        margin-left: 0;
        font-weight: 500;
    }

    /* Hover effects */
    .icon-button:hover {
        width: auto;
        padding: 0 18px;
        border-radius: 25px !important;
    }

    .icon-button:hover .button-text {
        opacity: 1;
        width: auto;
        margin-left: 28px; /* Extra space for smooth transition */
    }

    .icon-button:hover i {
        left: 15px;
    }

    /* Live dot indicator - centered with icon */
    .live-dot {
        position: absolute;
        width: 8px;
        height: 8px;
        background: #ff4757;
        border-radius: 50%;
        top: 10px;
        right: 10px;
        animation: pulse 1.5s infinite;
        box-shadow: 0 0 0 0 rgba(255, 71, 87, 0.7);
    }

    @keyframes pulse {
        0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 71, 87, 0.7); }
        70% { transform: scale(1.3); box-shadow: 0 0 0 8px rgba(255, 71, 87, 0); }
        100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 71, 87, 0); }
    }

    /* Button colors */
    .add-to-cart-btn {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
    }

    .live-btn {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .button-container {
            gap: 2px;
        }
        .icon-button {
            width: 42px;
            height: 42px;
        }
        .icon-button:hover {
            padding: 0 15px;
        }
    }
</style>



";
                }
                // line 477
                yield "

                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 483
            yield "                </div>
                
                <!-- Pagination -->
                <div class=\"d-flex justify-content-center\">
                    <div id=\"itemsPagination\" class=\"mb-5\"></div>
                </div>
            ";
        } else {
            // line 490
            yield "                <div class=\"text-center py-5 my-5\">
                    <i class=\"bi bi-box-seam display-4 text-muted mb-4\"></i>
                    <h3 class=\"text-muted\">No items found</h3>
                    <p class=\"text-muted\">Try adjusting your filters or check back later.</p>
                    <div class=\"mt-4\">
                        <a href=\"";
            // line 495
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics");
            yield "\" class=\"btn btn-primary\">
                            <i class=\"bi bi-plus-circle me-1\"></i> Add Your First Logistic
                        </a>
                    </div>
                </div>
            ";
        }
        // line 501
        yield "        </div>
    </div>
</div>

<style>
    /* Button Styles */
    .btn {
        transition: all 0.2s ease;
    }
    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    /* Badge Styles */
    .badge {
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
        min-width: 1.5em;
    }
    
    /* Favorite Button */
    .toggle-favorite {
        width: 32px;
        height: 32px;
        padding: 0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,0.8);
        transition: all 0.2s ease;
    }
    .toggle-favorite:hover {
        transform: scale(1.1) !important;
    }
    .bi-heart-fill {
        color: #dc3545;
    }
    
    /* Zoom Button */
    .zoom-image-btn {
        width: 32px;
        height: 32px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0.8;
        transition: all 0.2s ease;
    }
    .zoom-image-btn:hover {
        opacity: 1;
        transform: scale(1.1);
    }
    
    /* Toast Notification */
    .toast-container {
        animation: fadeIn 0.3s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* Card Hover Effect */
    .shadow-hover {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .shadow-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    /* Image Zoom Modal */
    #imageZoomModal .modal-content {
        background-color: rgba(0,0,0,0.8);
    }
    #zoomedImage {
        transition: transform 0.2s ease-out;
        transform-origin: center center;
    }
    #zoomInBtn:disabled, #zoomOutBtn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    /* Pagination Styles */
    .pagination {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        justify-content: center;
    }
    .pagination .page-link {
        border: 1px solid #dee2e6;
        background: #fff;
        color: #007bff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        cursor: pointer;
        transition: background 0.2s;
    }
    .pagination .page-link.active, 
    .pagination .page-link:hover {
        background: #007bff;
        color: #fff;
    }
    
    /* Dark Mode Adjustments */
    [data-theme=\"dark\"] .toggle-favorite {
        background: rgba(0,0,0,0.5);
    }
    [data-theme=\"dark\"] .btn-outline-light {
        border-color: rgba(255,255,255,0.2);
    }
    [data-theme=\"dark\"] .shadow-hover:hover {
        box-shadow: 0 10px 20px rgba(255,255,255,0.1);
    }
    [data-theme=\"dark\"] .pagination .page-link {
        background: #2c3034;
        border-color: #3d4145;
        color: #f8f9fa;
    }
    [data-theme=\"dark\"] .pagination .page-link.active,
    [data-theme=\"dark\"] .pagination .page-link:hover {
        background: #0d6efd;
    }

    /* Voice Search Button Styles */
    #voiceSearchBtn {
        position: relative;
    }

    #voiceSearchBtn.recording {
        background-color: #dc3545;
        color: white;
    }

    #voiceSearchBtn.recording::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
        100% {
            transform: translate(-50%, -50%) scale(2);
            opacity: 0;
        }
    }
</style>

<script>
    // Theme Toggle
    const themeToggle = document.getElementById('themeToggle');
    const currentTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', currentTheme);
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
    });

    // Show Error Popup
    function showError(message) {
        const toastContainer = document.getElementById('errorToast');
        const errorMessage = document.getElementById('errorMessage');
        
        errorMessage.textContent = message;
        toastContainer.style.display = 'block';
        
        const toastEl = toastContainer.querySelector('.toast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
        
        setTimeout(() => {
            toast.hide();
        }, 5000);
    }

    // Initialize Image Zoom Modal
    function initImageZoom() {
        const zoomModal = new bootstrap.Modal(document.getElementById('imageZoomModal'));
        const zoomedImage = document.getElementById('zoomedImage');
        const zoomInBtn = document.getElementById('zoomInBtn');
        const zoomOutBtn = document.getElementById('zoomOutBtn');
        const resetZoomBtn = document.getElementById('resetZoomBtn');
        
        let currentScale = 1;
        const scaleStep = 0.25;
        const maxScale = 3;
        const minScale = 0.5;
        
        function updateZoomButtons() {
            zoomInBtn.disabled = currentScale >= maxScale;
            zoomOutBtn.disabled = currentScale <= minScale;
        }
        
        // Handle zoom in button
        zoomInBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (currentScale < maxScale) {
                currentScale = Math.min(currentScale + scaleStep, maxScale);
                zoomedImage.style.transform = `scale(\${currentScale})`;
                updateZoomButtons();
            }
        });
        
        // Handle zoom out button
        zoomOutBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (currentScale > minScale) {
                currentScale = Math.max(currentScale - scaleStep, minScale);
                zoomedImage.style.transform = `scale(\${currentScale})`;
                updateZoomButtons();
            }
        });
        
        // Handle reset zoom button
        resetZoomBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            currentScale = 1;
            zoomedImage.style.transform = 'scale(1)';
            updateZoomButtons();
        });
        
        // Reset zoom when modal closes
        document.getElementById('imageZoomModal').addEventListener('hidden.bs.modal', () => {
            currentScale = 1;
            zoomedImage.style.transform = 'scale(1)';
            updateZoomButtons();
        });
        
        // Handle click on zoom buttons
        document.querySelectorAll('.zoom-image-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const imgSrc = this.getAttribute('data-image-src');
                zoomedImage.src = imgSrc;
                zoomModal.show();
                updateZoomButtons();
            });
        });
        
        // Allow zooming by clicking on the image
        zoomedImage.addEventListener('click', function(e) {
            e.stopPropagation();
            if (e.ctrlKey || e.metaKey) {
                // Zoom out with Ctrl/Cmd click
                currentScale = Math.max(currentScale - scaleStep, minScale);
            } else {
                // Zoom in with regular click
                currentScale = Math.min(currentScale + scaleStep, maxScale);
            }
            this.style.transform = `scale(\${currentScale})`;
            updateZoomButtons();
        });
        
        // Prevent modal close when clicking on image or buttons
        document.querySelector('.modal-content').addEventListener('click', (e) => {
            e.stopPropagation();
        });
        
        // Initialize button states
        updateZoomButtons();
    }

    // Show Toast Messages
    function showToast(type, message) {
        const toastContainer = document.getElementById(`\${type}Toast`);
        const messageElement = document.getElementById(`\${type}Message`);
        
        messageElement.textContent = message;
        toastContainer.style.display = 'block';
        
        const toastEl = toastContainer.querySelector('.toast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
        
        setTimeout(() => {
            toast.hide();
        }, 3000);
    }

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize image zoom functionality
        initImageZoom();
        
        // Check initial favorites state for all items
        document.querySelectorAll('.toggle-favorite').forEach(button => {
            const itemId = button.dataset.itemId;
            fetch(`/favorites/check/\${itemId}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.isFavorite) {
                    const icon = button.querySelector('i');
                    icon.classList.remove('bi-heart');
                    icon.classList.add('bi-heart-fill');
                    button.classList.add('text-danger');
                }
            });
        });
        
        // Favorite Button Click Handler
        document.querySelectorAll('.toggle-favorite').forEach(button => {
            button.addEventListener('click', function() {
                // Check if the item belongs to the current user
                const card = this.closest('.card');
                const isUserItem = card.querySelector('.badge.bg-warning') !== null;
                
                if (isUserItem) {
                    showToast('error', 'You cannot add your own items to favorites');
                    return;
                }

                const itemId = this.dataset.itemId;
                const icon = this.querySelector('i');
                const itemName = this.closest('.card').querySelector('.card-title').textContent;
                const isCurrentlyFavorite = icon.classList.contains('bi-heart-fill');
                
                if (isCurrentlyFavorite) {
                    // Remove from favorites
                    fetch(`/favorites/remove/\${itemId}`, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            icon.classList.remove('bi-heart-fill');
                            icon.classList.add('bi-heart');
                            this.classList.remove('text-danger');
                            showToast('info', `\"\${itemName}\" removed from favorites`);
                        }
                    })
                    .catch(error => {
                        showToast('error', 'An error occurred while removing from favorites');
                    });
                } else {
                    // Add to favorites
                    fetch(`/favorites/add/\${itemId}`, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            icon.classList.remove('bi-heart');
                            icon.classList.add('bi-heart-fill');
                            this.classList.add('text-danger');
                            showToast('success', `\"\${itemName}\" added to favorites!`);
                        }
                    })
                    .catch(error => {
                        showToast('error', 'An error occurred while adding to favorites');
                    });
                }
            });
        });

        // Handle direct add to cart buttons in the main list
        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const itemId = this.getAttribute('href').split('/').pop();
                const itemName = this.closest('.card').querySelector('.card-title').textContent;
                
                fetch(`/cartadd/\${itemId}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showToast('success', `\"\${itemName}\" added to cart!`);
                        // Update cart count
                        const cartCount = document.querySelector('.badge.bg-light.text-primary');
                        if (cartCount) {
                            cartCount.textContent = data.cartCount;
                        }
                    } else if (data.error) {
                        showToast('error', data.error);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showToast('error', 'An error occurred while adding to cart');
                });
            });
        });

        // Handle add to cart buttons in favorites modal
        document.getElementById('favoritesContent').addEventListener('click', function(e) {
            const target = e.target.closest('button');
            if (!target) return;

            if (target.classList.contains('remove-favorite')) {
                const itemId = target.dataset.id;
                const itemName = target.closest('.card').querySelector('.card-title').textContent;
                
                fetch(`/favorites/remove/\${itemId}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        target.closest('.col').remove();
                        showToast('info', `\"\${itemName}\" removed from favorites`);
                        
                        // Update the heart icon in the marketplace if visible
                        const marketplaceHeart = document.querySelector(`.toggle-favorite[data-item-id=\"\${itemId}\"]`);
                        if (marketplaceHeart) {
                            const icon = marketplaceHeart.querySelector('i');
                            icon.classList.remove('bi-heart-fill');
                            icon.classList.add('bi-heart');
                            marketplaceHeart.classList.remove('text-danger');
                        }
                        
                        // If no favorites left, show empty state
                        if (document.querySelectorAll('#favoritesContent .col').length === 0) {
                            document.getElementById('favoritesContent').innerHTML = `
                                <div class=\"text-center py-5\">
                                    <i class=\"bi bi-heart text-muted\" style=\"font-size: 3rem;\"></i>
                                    <h4 class=\"mt-3\">No favorites yet</h4>
                                    <p>Click the heart icon on items to save them here</p>
                                </div>
                            `;
                        }
                    }
                })
                .catch(error => {
                    showToast('error', 'Failed to remove from favorites');
                });
            } else if (target.classList.contains('add-to-cart')) {
                const itemId = target.dataset.id;
                const itemName = target.closest('.card').querySelector('.card-title').textContent;
                
                fetch(`/cartadd/\${itemId}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showToast('success', `\"\${itemName}\" added to cart!`);
                        // Update cart count
                        const cartCount = document.querySelector('.badge.bg-light.text-primary');
                        if (cartCount) {
                            cartCount.textContent = data.cartCount;
                        }
                    } else if (data.error) {
                        showToast('error', data.error);
                    }
                })
                .catch(error => {
                    showToast('error', 'Failed to add to cart');
                });
            } else if (target.classList.contains('add-all-to-cart')) {
                const items = document.querySelectorAll('.add-to-cart');
                let addedCount = 0;
                let failedCount = 0;
                
                items.forEach(button => {
                    const itemId = button.dataset.id;
                    const itemName = button.closest('.card').querySelector('.card-title').textContent;
                    
                    fetch(`/cartadd/\${itemId}`, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            addedCount++;
                        } else {
                            failedCount++;
                        }
                        
                        // If this is the last item, show summary
                        if (addedCount + failedCount === items.length) {
                            if (addedCount > 0) {
                                showToast('success', `Added \${addedCount} items to cart!`);
                                // Update cart count
                                const cartCount = document.querySelector('.badge.bg-light.text-primary');
                                if (cartCount) {
                                    cartCount.textContent = parseInt(cartCount.textContent) + addedCount;
                                }
                            }
                            if (failedCount > 0) {
                                showToast('error', `Failed to add \${failedCount} items to cart`);
                            }
                        }
                    })
                    .catch(error => {
                        failedCount++;
                        if (addedCount + failedCount === items.length) {
                            if (addedCount > 0) {
                                showToast('success', `Added \${addedCount} items to cart!`);
                                // Update cart count
                                const cartCount = document.querySelector('.badge.bg-light.text-primary');
                                if (cartCount) {
                                    cartCount.textContent = parseInt(cartCount.textContent) + addedCount;
                                }
                            }
                            if (failedCount > 0) {
                                showToast('error', `Failed to add \${failedCount} items to cart`);
                            }
                        }
                    });
                });
            }
        });

        // Toggle Item Details
        document.querySelectorAll('.toggle-details').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const details = this.closest('.card-body').querySelector('.item-details');
                details.style.maxHeight = details.style.maxHeight === '0px' ? '100px' : '0px';
                this.innerHTML = details.style.maxHeight === '0px' ? 
                    '<i class=\"bi bi-three-dots\"></i>' : 
                    '<i class=\"bi bi-x\"></i>';
                if(document.documentElement.getAttribute('data-theme') === 'dark') {
                    this.classList.toggle('btn-outline-light', details.style.maxHeight !== '0px');
                }
            });
        });

        // Search and Filter Functionality
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');
        const typeFilter = document.getElementById('typeFilter');
        const priceRange = document.getElementById('priceRange');
        const minPrice = document.getElementById('minPrice');
        const maxPrice = document.getElementById('maxPrice');
        const resetFilters = document.getElementById('resetFilters');
        const itemCards = Array.from(document.querySelectorAll('.item-card'));
        const itemCount = document.getElementById('itemCount');
        const itemsPagination = document.getElementById('itemsPagination');

        let currentPage = 1;
        const itemsPerPage = 6;

        // Set initial price range max based on items
        let maxItemPrice = 0;
        itemCards.forEach(card => {
            const price = parseFloat(card.dataset.price || \"0\");
            if (price > maxItemPrice) maxItemPrice = price;
        });
        priceRange.max = Math.ceil(maxItemPrice / 10) * 10 || 10000;
        maxPrice.textContent = priceRange.max;

        function getFilteredCards() {
            const searchTerm = searchInput.value.trim().toLowerCase();
            const selectedType = typeFilter ? typeFilter.value.toLowerCase() : '';
            const selectedPrice = parseFloat(priceRange.value);

            return itemCards.filter(card => {
                const name = card.dataset.name || '';
                const desc = card.dataset.description || '';
                const type = card.dataset.type || '';
                const price = parseFloat(card.dataset.price || \"0\");

                const matchesSearch = !searchTerm || name.includes(searchTerm) || desc.includes(searchTerm);
                const matchesType = !selectedType || type === selectedType;
                const matchesPrice = price <= selectedPrice;

                return matchesSearch && matchesType && matchesPrice;
            });
        }

        function showPage(filteredCards, page) {
            itemCards.forEach(card => card.style.display = 'none');
            const totalPages = Math.ceil(filteredCards.length / itemsPerPage) || 1;
            if (page > totalPages) page = 1;
            const startIdx = (page - 1) * itemsPerPage;
            const endIdx = startIdx + itemsPerPage;
            filteredCards.slice(startIdx, endIdx).forEach(card => {
                card.style.display = '';
            });
            if (itemCount) itemCount.textContent = filteredCards.length + ' items';
            renderPagination(totalPages, page, filteredCards);

            // Show \"No items found\" message if no items match the search
            if (filteredCards.length === 0) {
                const noItemsMessage = document.createElement('div');
                noItemsMessage.className = 'text-center py-5 my-5';
                noItemsMessage.innerHTML = `
                    <i class=\"bi bi-search display-4 text-muted mb-4\"></i>
                    <h3 class=\"text-muted\">No items found</h3>
                    <p class=\"text-muted\">No items match your search criteria. Try adjusting your filters or search terms.</p>
                    <div class=\"mt-4\">
                        <button class=\"btn btn-outline-primary\" id=\"resetSearch\">
                            <i class=\"bi bi-arrow-counterclockwise me-1\"></i>Reset Search
                        </button>
                    </div>
                `;
                
                // Remove any existing no items message
                const existingMessage = document.querySelector('#itemsContainer .text-center');
                if (existingMessage) {
                    existingMessage.remove();
                }
                
                // Add the new message
                document.getElementById('itemsContainer').appendChild(noItemsMessage);
                
                // Add event listener to reset button
                document.getElementById('resetSearch').addEventListener('click', function() {
                    searchInput.value = '';
                    if (typeFilter) typeFilter.value = '';
                    priceRange.value = priceRange.max;
                    maxPrice.textContent = priceRange.max;
                    performSearchAndFilter();
                });
            } else {
                // Remove the no items message if it exists
                const existingMessage = document.querySelector('#itemsContainer .text-center');
                if (existingMessage) {
                    existingMessage.remove();
                }
            }
        }

        function renderPagination(totalPages, page, filteredCards) {
            itemsPagination.innerHTML = '';
            if (totalPages <= 1) return;
            
            const pagination = document.createElement('div');
            pagination.className = 'pagination';

            // Previous button
            if (page > 1) {
                const prevBtn = document.createElement('span');
                prevBtn.className = 'page-link';
                prevBtn.innerHTML = '&laquo;';
                prevBtn.addEventListener('click', () => {
                    currentPage = page - 1;
                    showPage(filteredCards, currentPage);
                    window.scrollTo({top: 0, behavior: 'smooth'});
                });
                pagination.appendChild(prevBtn);
            }

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const pageBtn = document.createElement('span');
                pageBtn.className = 'page-link' + (i === page ? ' active' : '');
                pageBtn.textContent = i;
                pageBtn.addEventListener('click', () => {
                    currentPage = i;
                    showPage(filteredCards, currentPage);
                    window.scrollTo({top: 0, behavior: 'smooth'});
                });
                pagination.appendChild(pageBtn);
            }

            // Next button
            if (page < totalPages) {
                const nextBtn = document.createElement('span');
                nextBtn.className = 'page-link';
                nextBtn.innerHTML = '&raquo;';
                nextBtn.addEventListener('click', () => {
                    currentPage = page + 1;
                    showPage(filteredCards, currentPage);
                    window.scrollTo({top: 0, behavior: 'smooth'});
                });
                pagination.appendChild(nextBtn);
            }

            itemsPagination.appendChild(pagination);
        }

        function performSearchAndFilter() {
            const filteredCards = getFilteredCards();
            const totalPages = Math.ceil(filteredCards.length / itemsPerPage) || 1;
            if (currentPage > totalPages) currentPage = 1;
            showPage(filteredCards, currentPage);
        }

        // Event Listeners for Search/Filter
        priceRange.addEventListener('input', function() {
            maxPrice.textContent = priceRange.value;
            currentPage = 1;
            performSearchAndFilter();
        });

        if (typeFilter) typeFilter.addEventListener('change', function() {
            currentPage = 1;
            performSearchAndFilter();
        });

        searchInput.addEventListener('input', function() {
            currentPage = 1;
            performSearchAndFilter();
        });
        searchButton.addEventListener('click', function() {
            currentPage = 1;
            performSearchAndFilter();
        });
        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                currentPage = 1;
                performSearchAndFilter();
            }
        });

        resetFilters.addEventListener('click', function() {
            searchInput.value = '';
            if (typeFilter) typeFilter.value = '';
            priceRange.value = priceRange.max;
            maxPrice.textContent = priceRange.max;
            currentPage = 1;
            performSearchAndFilter();
        });

        // Initial state
        priceRange.value = priceRange.max;
        maxPrice.textContent = priceRange.max;
        performSearchAndFilter();

        // Load favorites when modal is shown
        const favoritesModal = document.getElementById('favoritesModal');
        favoritesModal.addEventListener('show.bs.modal', function () {
            fetch('/favorites', {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('favoritesContent').innerHTML = html;
            })
            .catch(error => {
                showToast('error', 'Failed to load favorites');
            });
        });

        // Handle Remove All Favorites button
        document.getElementById('removeAllFavorites').addEventListener('click', function() {
            if (confirm('Are you sure you want to remove all items from favorites?')) {
                fetch('/favorites/remove-all', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Clear the favorites content
                        document.getElementById('favoritesContent').innerHTML = `
                            <div class=\"text-center py-5\">
                                <i class=\"bi bi-heart text-muted\" style=\"font-size: 3rem;\"></i>
                                <h4 class=\"mt-3\">No favorites yet</h4>
                                <p>Click the heart icon on items to save them here</p>
                            </div>
                        `;
                        
                        // Update all heart icons in the marketplace
                        document.querySelectorAll('.toggle-favorite').forEach(button => {
                            const icon = button.querySelector('i');
                            icon.classList.remove('bi-heart-fill');
                            icon.classList.add('bi-heart');
                            button.classList.remove('text-danger');
                        });
                        
                        showToast('info', 'All items removed from favorites');
                    } else {
                        showToast('error', 'Failed to remove all favorites');
                    }
                })
                .catch(error => {
                    showToast('error', 'Failed to remove all favorites');
                });
            }
        });
        

        // Voice Search Functionality
        const voiceSearchBtn = document.getElementById('voiceSearchBtn');
        let recognition = null;

        if ('webkitSpeechRecognition' in window) {
            recognition = new webkitSpeechRecognition();
            recognition.continuous = false;
            recognition.interimResults = false;
            recognition.lang = 'en-US';

            recognition.onstart = function() {
                voiceSearchBtn.classList.add('recording');
                searchInput.value = ''; // Clear the search input when starting
                showToast('info', 'Listening...');
            };

            recognition.onresult = function(event) {
                const transcript = event.results[0][0].transcript;
                searchInput.value = transcript;
                performSearchAndFilter(); // Use the existing search function
            };

            recognition.onerror = function(event) {
                voiceSearchBtn.classList.remove('recording');
                showToast('error', 'Voice recognition error: ' + event.error);
            };

            recognition.onend = function() {
                voiceSearchBtn.classList.remove('recording');
            };

            voiceSearchBtn.addEventListener('click', function() {
                if (voiceSearchBtn.classList.contains('recording')) {
                    recognition.stop();
                    searchInput.value = ''; // Clear the search input when stopping
                    // Reset all filters and show all items
                    if (typeFilter) typeFilter.value = '';
                    priceRange.value = priceRange.max;
                    maxPrice.textContent = priceRange.max;
                    performSearchAndFilter(); // This will now show all items
                } else {
                    recognition.start();
                }
            });
        } else {
            voiceSearchBtn.style.display = 'none';
            console.log('Speech recognition not supported');
        }

        // Search functionality
        function performSearch(query) {
            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('search', query);
            window.location.href = currentUrl.toString();
        }

        document.getElementById('searchBtn').addEventListener('click', function() {
            performSearch(searchInput.value);
        });

        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch(searchInput.value);
            }
        });
        
    });

    // Initialize map when modal is shown
    document.addEventListener('DOMContentLoaded', function() {
        let map;
        let marker;
        
        // Initialize map when modal is shown
        document.getElementById('mapPreviewModal').addEventListener('shown.bs.modal', function(event) {
            const button = event.relatedTarget;
            const address = button.getAttribute('data-address');
            
            // Use OpenStreetMap Nominatim API for geocoding
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=\${encodeURIComponent(address)}`)
                .then(response => response.json())
                .then(data => {
                    if (data && data.length > 0) {
                        const lat = parseFloat(data[0].lat);
                        const lon = parseFloat(data[0].lon);
                        
                        if (!map) {
                            map = L.map('mapPreview').setView([lat, lon], 15);
                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
                            }).addTo(map);
                        } else {
                            map.setView([lat, lon], 15);
                        }
                        
                        if (marker) {
                            map.removeLayer(marker);
                        }
                        
                        marker = L.marker([lat, lon]).addTo(map);
                        marker.bindPopup(`<b>\${address}</b>`).openPopup();
                    } else {
                        // If no location found, show a message
                        const mapContainer = document.getElementById('mapPreview');
                        mapContainer.innerHTML = '<div class=\"text-center p-5\"><i class=\"bi bi-exclamation-triangle text-warning\" style=\"font-size: 2rem;\"></i><p class=\"mt-3\">Location not found</p></div>';
                    }
                })
                .catch(error => {
                    console.error('Geocoding error:', error);
                    const mapContainer = document.getElementById('mapPreview');
                    mapContainer.innerHTML = '<div class=\"text-center p-5\"><i class=\"bi bi-exclamation-triangle text-danger\" style=\"font-size: 2rem;\"></i><p class=\"mt-3\">Error loading location</p></div>';
                });
        });
        
        // Clean up map when modal is hidden
        document.getElementById('mapPreviewModal').addEventListener('hidden.bs.modal', function() {
            if (map) {
                map.remove();
                map = null;
                marker = null;
            }
        });
    });
</script>

<script>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
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
        return "marketplace/test.html.twig";
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
        return array (  737 => 501,  728 => 495,  721 => 490,  712 => 483,  701 => 477,  576 => 355,  564 => 346,  560 => 344,  550 => 337,  546 => 336,  540 => 333,  537 => 332,  535 => 331,  524 => 323,  515 => 317,  511 => 316,  505 => 313,  501 => 312,  492 => 306,  488 => 305,  478 => 298,  466 => 289,  457 => 283,  450 => 281,  446 => 279,  436 => 272,  433 => 271,  427 => 267,  425 => 266,  420 => 264,  416 => 263,  412 => 262,  408 => 261,  404 => 260,  401 => 259,  397 => 258,  394 => 257,  392 => 256,  386 => 253,  383 => 252,  379 => 250,  374 => 248,  367 => 247,  365 => 246,  329 => 212,  320 => 209,  313 => 207,  306 => 205,  301 => 204,  297 => 203,  285 => 196,  281 => 195,  269 => 186,  223 => 143,  217 => 140,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %} 
{% block content %}
<link rel=\"stylesheet\" href=\"{{ asset('css/darkmode.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
<!-- Add Leaflet CSS -->
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\"/>

<!-- Error Toast Container -->
<div id=\"errorToast\" class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 1100; display: none;\">
    <div class=\"toast align-items-center text-white bg-danger border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                <span id=\"errorMessage\"></span>
            </div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>

<!-- Success Toast Container -->
<div id=\"successToast\" class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 1100; display: none;\">
    <div class=\"toast align-items-center text-white bg-success border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>
                <span id=\"successMessage\"></span>
            </div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>

<!-- Info Toast Container -->
<div id=\"infoToast\" class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 1100; display: none;\">
    <div class=\"toast align-items-center text-white bg-info border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\">
                <i class=\"bi bi-info-circle-fill me-2\"></i>
                <span id=\"infoMessage\"></span>
            </div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>

<!-- Image Zoom Modal -->
<div class=\"modal fade\" id=\"imageZoomModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-xl\">
        <div class=\"modal-content bg-transparent border-0\">
            <div class=\"modal-header border-0\">
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center\">
                <div style=\"overflow: auto; max-height: 80vh;\">
                    <img id=\"zoomedImage\" src=\"\" class=\"img-fluid shadow-lg\" style=\"max-width: 100%; cursor: zoom-in; transition: transform 0.2s ease-out; transform-origin: center center;\">
                </div>
                <div class=\"mt-3\">
                    <button class=\"btn btn-primary me-2\" id=\"zoomInBtn\">
                        <i class=\"bi bi-zoom-in\"></i> Zoom In
                    </button>
                    <button class=\"btn btn-primary\" id=\"zoomOutBtn\">
                        <i class=\"bi bi-zoom-out\"></i> Zoom Out
                    </button>
                    <button class=\"btn btn-secondary\" id=\"resetZoomBtn\">
                        <i class=\"bi bi-arrow-counterclockwise\"></i> Reset
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Favorites Modal -->
<div class=\"modal fade\" id=\"favoritesModal\" tabindex=\"-1\" aria-labelledby=\"favoritesModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"favoritesModalLabel\">
                    <i class=\"bi bi-heart-fill text-danger me-2\"></i>My Favorites
                </h5>
                <div class=\"d-flex gap-2\">
                    <button type=\"button\" class=\"btn btn-outline-danger\" id=\"removeAllFavorites\">
                        <i class=\"bi bi-trash me-1\"></i>Remove All
                    </button>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
            </div>
            <div class=\"modal-body\">
                <div id=\"favoritesContent\">
                    <div class=\"text-center py-5\">
                        <i class=\"bi bi-heart text-muted\" style=\"font-size: 3rem;\"></i>
                        <h4 class=\"mt-3\">No favorites yet</h4>
                        <p>Click the heart icon on items to save them here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Preview Modal -->
<div class=\"modal fade\" id=\"mapPreviewModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Location Preview</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body p-0\">
                <div id=\"mapPreview\" style=\"height: 400px; width: 100%;\"></div>
            </div>
        </div>
    </div>
</div>

<!-- Hero Section -->
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\" style=\"background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/cart.png'); background-size: cover; background-position: center; min-height: 60vh;\">
    <div class=\"container position-relative z-index-1\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-12 text-center text-lg-start\">
                <h1 class=\"eventify-title display-4 fw-bold mb-4 text-white\">Welcome to Eventify Marketplace</h1>
                <p class=\"lead text-white mb-4\">Discover everything you need for your perfect event</p>
                
                <!-- Search Bar with Voice Search -->
                <div class=\"search-container bg-white rounded-pill shadow-sm mb-4\" style=\"max-width: 600px;\">
                    <div class=\"input-group\">
                        <input type=\"text\" id=\"searchInput\" class=\"form-control border-0 rounded-pill py-3 px-4\" placeholder=\"Search for venues, equipment...\">
                        <button class=\"btn btn-outline-secondary rounded-pill px-3\" type=\"button\" id=\"voiceSearchBtn\">
                            <i class=\"bi bi-mic-fill\"></i>
                        </button>
                        <button class=\"btn btn-primary rounded-pill px-4\" type=\"button\" id=\"searchButton\">
                            <i class=\"bi bi-search\"></i> Search
                        </button>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class=\"d-flex gap-2 justify-content-center justify-content-lg-start align-items-center flex-wrap\">
                    <a href=\"{{ path('cart_view') }}\" class=\"btn btn-primary\">
                        <i class=\"bi bi-cart3\"></i> View Cart
                        <span class=\"badge bg-light text-primary ms-2\">
                            {{ app.session.get('cart_count', 0) }}
                        </span>
                    </a>
                    
                    <button type=\"button\" class=\"btn btn-outline-light px-3 py-2 rounded-pill d-flex align-items-center\" data-bs-toggle=\"modal\" data-bs-target=\"#favoritesModal\">
                        <i class=\"bi bi-heart-fill me-2 text-danger\"></i>Favorites
                    </button>
                    
                    <a href=\"#marketplace\" class=\"btn btn-outline-light px-3 py-2 rounded-pill\">
                        <i class=\"bi bi-grid me-2\"></i>Browse
                    </a>
                    
                    <button class=\"theme-toggle btn btn-light px-3 py-2 rounded-pill shadow-sm\" id=\"themeToggle\" title=\"Toggle theme\">
                        <i class=\"bi bi-sun\"></i>
                        <i class=\"bi bi-moon\"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"none\" style=\"position: absolute; bottom: 0; left: 0; width: 100%; height: auto;\">
        <path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
</section>

<!-- Marketplace Section -->
<div class=\"container mt-5\" id=\"marketplace\">
    <div class=\"row\">
        <!-- Filter Column -->
        <div class=\"col-md-3 order-md-2 mb-4\">
            <div class=\"card shadow-sm sticky-top\" style=\"top: 20px;\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-funnel me-2\"></i>Filters</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid mb-4\">
                        <a href=\"{{ path('app_logistics') }}\" class=\"btn btn-primary\">
                            <i class=\"bi bi-plus-circle me-1\"></i> Add Logistic
                        </a>
                    </div>
                    
                    <!-- Category Filter -->
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-bold d-block mb-3\">Categories</label>
                        <div class=\"category-filter\">
                            <a href=\"{{ path('app_shop') }}\" 
                               class=\"category-item {% if not selectedCategory %}active{% endif %} d-flex align-items-center mb-2 p-2 rounded-3\">
                                <div class=\"category-icon bg-light-primary d-flex align-items-center justify-content-center rounded-2 me-3\" style=\"width: 40px; height: 40px;\">
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </div>
                                <span>All Categories</span>
                            </a>
                            
                            {% for category in categories %}
                                <a href=\"{{ path('app_shop', { 'categoryId': category.id }) }}\" 
                                   class=\"category-item {% if selectedCategory == category.id %}active{% endif %} d-flex align-items-center mb-2 p-2 rounded-3\">
                                    <div class=\"category-img rounded-2 me-3 overflow-hidden\" style=\"width: 40px; height: 40px;\">
                                        <img src=\"{{ asset(category.image) }}\" alt=\"{{ category.name }}\" class=\"img-fluid h-100 w-100 object-fit-cover\">
                                    </div>
                                    <span>{{ category.name }}</span>
                                </a>
                            {% endfor %}
                        </div>
                    </div>
                    
                    <!-- Type Filter -->
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Type</label>
                        <select class=\"form-select\" id=\"typeFilter\">
                            <option value=\"\">All Types</option>
                            <option value=\"equipment\">Equipment</option>
                            <option value=\"venue\">Venue</option>
                        </select>
                    </div>

                    <!-- Price Filter -->
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Price Range (TND)</label>
                        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"10000\" step=\"10\" id=\"priceRange\">
                        <div class=\"d-flex justify-content-between\">
                            <span id=\"minPrice\">0</span>
                            <span id=\"maxPrice\">10000</span>
                        </div>
                    </div>
                    
                    <button class=\"btn btn-outline-danger w-100\" id=\"resetFilters\">
                        <i class=\"bi bi-x-circle me-1\"></i>Reset Filters
                    </button>
                </div>
            </div>
        </div>

        <!-- Items Column -->
        <div class=\"col-md-9 order-md-1\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h2 class=\"mb-0\">
                    {% if selectedCategory and categories[selectedCategory] is defined %}
                        <img src=\"{{ asset(categories[selectedCategory].image) }}\" alt=\"{{ categories[selectedCategory].name }}\" style=\"width: 32px; height: 32px; object-fit: cover; border-radius: 6px;\" class=\"me-2\">
                        {{ categories[selectedCategory].name }}
                    {% else %}
                        <i class=\"bi bi-grid-fill me-2 text-primary\"></i>All Items
                    {% endif %}
                </h2>
                <span class=\"badge bg-primary rounded-pill px-3 py-2\" id=\"itemCount\">{{ logistic|length }} items</span>
            </div>

            {% if logistic is not empty %}
                <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4\" id=\"itemsContainer\">
                    {% for item in logistic %}
                        <div class=\"col item-card\"
                             data-name=\"{{ item.nom|lower }}\"
                             data-description=\"{{ item.description|lower }}\"
                             data-type=\"{{ item.type|lower }}\"
                             data-price=\"{{ item.prix }}\"
                             data-address=\"{{ item.lieux }}\">
                            <div class=\"card h-100 shadow-hover\">
                                {% if item.user.id == currentUserId %}
                                    <span class=\"position-absolute top-0 start-0 m-2 badge bg-warning\" style=\"z-index: 10;\">
                                        <i class=\"bi bi-star-fill me-1\"></i>Your Item
                                    </span>
                                {% else %}
                                    <button class=\"btn btn-sm btn-outline-danger toggle-favorite position-absolute top-0 end-0 m-2\" 
                                            data-item-id=\"{{ item.id }}\"
                                            data-is-favorite=\"false\"
                                            title=\"Add to favorites\"
                                            style=\"z-index: 10;\">
                                        <i class=\"bi bi-heart\"></i>
                                    </button>
                                {% endif %}
                                
                                <div class=\"position-relative\">
                                    <img src=\"{{ asset(item.image) }}\" class=\"card-img-top\" alt=\"{{ item.nom }}\" style=\"height: 200px; object-fit: cover;\">
                                    <div class=\"position-absolute top-0 end-0 m-2\">
                                        <button class=\"btn btn-sm btn-light rounded-circle favorite-btn\" data-item-id=\"{{ item.id }}\">
                                            <i class=\"bi bi-heart\"></i>
                                        </button>
                                    </div>
                                    <!-- Add zoom button -->
                                    <div class=\"position-absolute top-0 start-0 m-2\">
                                        <button class=\"btn btn-sm btn-light rounded-circle zoom-image-btn\" data-image-src=\"{{ asset(item.image) }}\">
                                            <i class=\"bi bi-zoom-in\"></i>
                                        </button>
                                    </div>
                                    <!-- Add map preview button -->
                                    <div class=\"position-absolute bottom-0 end-0 m-2\">
                                        <button class=\"btn btn-sm btn-primary rounded-circle map-preview-btn\" 
                                                data-bs-toggle=\"modal\" 
                                                data-bs-target=\"#mapPreviewModal\"
                                                data-address=\"{{ item.lieux }}\">
                                            <i class=\"bi bi-geo-alt\"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ item.nom }}</h5>
                                    <p class=\"card-text text-muted\">{{ item.description|length > 100 ? item.description|slice(0, 100) ~ '...' : item.description }}</p>
                                    
                                    <div class=\"item-details\" style=\"max-height: 0; overflow: hidden; transition: max-height 0.3s ease;\">
                                        <hr class=\"my-2\">
                                        <div class=\"row small text-muted\">
                                            <div class=\"col-6\">
                                                <div><i class=\"bi bi-tag me-1\"></i> {{ item.type }}</div>
                                                <div><i class=\"bi bi-box me-1\"></i> {{ item.quantite }}</div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div><i class=\"bi bi-people me-1\"></i> {{ item.capacite }}</div>
                                                <div><i class=\"bi bi-geo-alt me-1\"></i> {{ item.lieux }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                        <span class=\"h5 text-primary mb-0\">{{ item.prix }} TND</span>
                                        <button class=\"btn btn-sm btn-outline-secondary toggle-details\">
                                            <i class=\"bi bi-three-dots\"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class=\"card-footer bg-transparent\">
                                    {% if item.user.id == currentUserId %}
                                        <div class=\"d-flex justify-content-end gap-2\">
                                            <a href=\"{{ path('app_logistic_update', { 'id': item.id }) }}\" class=\"btn btn-sm btn-outline-primary\">
                                                <i class=\"bi bi-pencil-square me-1\"></i>Edit
                                            </a>
                                            <form method=\"post\" action=\"{{ path('app_logistic_delete', {'id': item.id}) }}\" onsubmit=\"return confirm('Are you sure?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ item.id) }}\">
                                                <button class=\"btn btn-sm btn-outline-danger\">
                                                    <i class=\"bi bi-trash me-1\"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    {% else %}
    <div class=\"d-flex gap-2\">  <!-- Horizontal layout -->
    <!-- Add to Cart Button -->
    <a href=\"{{ path('cart_add', { 'id': item.id }) }}\" 
       class=\"btn btn-primary add-to-cart-btn icon-button\">
        <span class=\"button-content\">
            <i class=\"bi bi-cart-plus\"></i>
            <span class=\"button-text\">Add to Cart</span>
        </span>
    </a>

    <!-- Live View Button -->
    <a href=\"{{ path('app_live', { 'id': item.id }) }}\" 
       class=\"btn btn-success live-btn icon-button\">
        <span class=\"button-content\">
            <i class=\"bi bi-broadcast\"></i>
            <span class=\"button-text\">Live</span>
        </span>
        <span class=\"live-dot\"></span>
    </a>
</div>

<style>
    /* Container styling */
    .button-container {
        width: 100%;
        background: rgba(255,255,255,0.9);
        border-radius: 0 0 10px 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Base button styles */
    .icon-button {
        width: 45px;
        height: 45px;
        padding: 0;
        border-radius: 50% !important;
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        border: none;
    }

    /* Button content container */
    .button-content {
        display: flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        transition: all 0.3s ease;
    }

    /* Icon styling */
    .icon-button i {
        font-size: 1.2rem;
        position: absolute;
        transition: all 0.3s ease;
    }

    /* Text styling - hidden by default */
    .button-text {
        opacity: 0;
        width: 0;
        transition: all 0.3s ease;
        margin-left: 0;
        font-weight: 500;
    }

    /* Hover effects */
    .icon-button:hover {
        width: auto;
        padding: 0 18px;
        border-radius: 25px !important;
    }

    .icon-button:hover .button-text {
        opacity: 1;
        width: auto;
        margin-left: 28px; /* Extra space for smooth transition */
    }

    .icon-button:hover i {
        left: 15px;
    }

    /* Live dot indicator - centered with icon */
    .live-dot {
        position: absolute;
        width: 8px;
        height: 8px;
        background: #ff4757;
        border-radius: 50%;
        top: 10px;
        right: 10px;
        animation: pulse 1.5s infinite;
        box-shadow: 0 0 0 0 rgba(255, 71, 87, 0.7);
    }

    @keyframes pulse {
        0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 71, 87, 0.7); }
        70% { transform: scale(1.3); box-shadow: 0 0 0 8px rgba(255, 71, 87, 0); }
        100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 71, 87, 0); }
    }

    /* Button colors */
    .add-to-cart-btn {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
    }

    .live-btn {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .button-container {
            gap: 2px;
        }
        .icon-button {
            width: 42px;
            height: 42px;
        }
        .icon-button:hover {
            padding: 0 15px;
        }
    }
</style>



{% endif %}


                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                
                <!-- Pagination -->
                <div class=\"d-flex justify-content-center\">
                    <div id=\"itemsPagination\" class=\"mb-5\"></div>
                </div>
            {% else %}
                <div class=\"text-center py-5 my-5\">
                    <i class=\"bi bi-box-seam display-4 text-muted mb-4\"></i>
                    <h3 class=\"text-muted\">No items found</h3>
                    <p class=\"text-muted\">Try adjusting your filters or check back later.</p>
                    <div class=\"mt-4\">
                        <a href=\"{{ path('app_logistics') }}\" class=\"btn btn-primary\">
                            <i class=\"bi bi-plus-circle me-1\"></i> Add Your First Logistic
                        </a>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<style>
    /* Button Styles */
    .btn {
        transition: all 0.2s ease;
    }
    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    /* Badge Styles */
    .badge {
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
        min-width: 1.5em;
    }
    
    /* Favorite Button */
    .toggle-favorite {
        width: 32px;
        height: 32px;
        padding: 0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,0.8);
        transition: all 0.2s ease;
    }
    .toggle-favorite:hover {
        transform: scale(1.1) !important;
    }
    .bi-heart-fill {
        color: #dc3545;
    }
    
    /* Zoom Button */
    .zoom-image-btn {
        width: 32px;
        height: 32px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0.8;
        transition: all 0.2s ease;
    }
    .zoom-image-btn:hover {
        opacity: 1;
        transform: scale(1.1);
    }
    
    /* Toast Notification */
    .toast-container {
        animation: fadeIn 0.3s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* Card Hover Effect */
    .shadow-hover {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .shadow-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    /* Image Zoom Modal */
    #imageZoomModal .modal-content {
        background-color: rgba(0,0,0,0.8);
    }
    #zoomedImage {
        transition: transform 0.2s ease-out;
        transform-origin: center center;
    }
    #zoomInBtn:disabled, #zoomOutBtn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    /* Pagination Styles */
    .pagination {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        justify-content: center;
    }
    .pagination .page-link {
        border: 1px solid #dee2e6;
        background: #fff;
        color: #007bff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        cursor: pointer;
        transition: background 0.2s;
    }
    .pagination .page-link.active, 
    .pagination .page-link:hover {
        background: #007bff;
        color: #fff;
    }
    
    /* Dark Mode Adjustments */
    [data-theme=\"dark\"] .toggle-favorite {
        background: rgba(0,0,0,0.5);
    }
    [data-theme=\"dark\"] .btn-outline-light {
        border-color: rgba(255,255,255,0.2);
    }
    [data-theme=\"dark\"] .shadow-hover:hover {
        box-shadow: 0 10px 20px rgba(255,255,255,0.1);
    }
    [data-theme=\"dark\"] .pagination .page-link {
        background: #2c3034;
        border-color: #3d4145;
        color: #f8f9fa;
    }
    [data-theme=\"dark\"] .pagination .page-link.active,
    [data-theme=\"dark\"] .pagination .page-link:hover {
        background: #0d6efd;
    }

    /* Voice Search Button Styles */
    #voiceSearchBtn {
        position: relative;
    }

    #voiceSearchBtn.recording {
        background-color: #dc3545;
        color: white;
    }

    #voiceSearchBtn.recording::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
        100% {
            transform: translate(-50%, -50%) scale(2);
            opacity: 0;
        }
    }
</style>

<script>
    // Theme Toggle
    const themeToggle = document.getElementById('themeToggle');
    const currentTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', currentTheme);
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
    });

    // Show Error Popup
    function showError(message) {
        const toastContainer = document.getElementById('errorToast');
        const errorMessage = document.getElementById('errorMessage');
        
        errorMessage.textContent = message;
        toastContainer.style.display = 'block';
        
        const toastEl = toastContainer.querySelector('.toast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
        
        setTimeout(() => {
            toast.hide();
        }, 5000);
    }

    // Initialize Image Zoom Modal
    function initImageZoom() {
        const zoomModal = new bootstrap.Modal(document.getElementById('imageZoomModal'));
        const zoomedImage = document.getElementById('zoomedImage');
        const zoomInBtn = document.getElementById('zoomInBtn');
        const zoomOutBtn = document.getElementById('zoomOutBtn');
        const resetZoomBtn = document.getElementById('resetZoomBtn');
        
        let currentScale = 1;
        const scaleStep = 0.25;
        const maxScale = 3;
        const minScale = 0.5;
        
        function updateZoomButtons() {
            zoomInBtn.disabled = currentScale >= maxScale;
            zoomOutBtn.disabled = currentScale <= minScale;
        }
        
        // Handle zoom in button
        zoomInBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (currentScale < maxScale) {
                currentScale = Math.min(currentScale + scaleStep, maxScale);
                zoomedImage.style.transform = `scale(\${currentScale})`;
                updateZoomButtons();
            }
        });
        
        // Handle zoom out button
        zoomOutBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (currentScale > minScale) {
                currentScale = Math.max(currentScale - scaleStep, minScale);
                zoomedImage.style.transform = `scale(\${currentScale})`;
                updateZoomButtons();
            }
        });
        
        // Handle reset zoom button
        resetZoomBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            currentScale = 1;
            zoomedImage.style.transform = 'scale(1)';
            updateZoomButtons();
        });
        
        // Reset zoom when modal closes
        document.getElementById('imageZoomModal').addEventListener('hidden.bs.modal', () => {
            currentScale = 1;
            zoomedImage.style.transform = 'scale(1)';
            updateZoomButtons();
        });
        
        // Handle click on zoom buttons
        document.querySelectorAll('.zoom-image-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const imgSrc = this.getAttribute('data-image-src');
                zoomedImage.src = imgSrc;
                zoomModal.show();
                updateZoomButtons();
            });
        });
        
        // Allow zooming by clicking on the image
        zoomedImage.addEventListener('click', function(e) {
            e.stopPropagation();
            if (e.ctrlKey || e.metaKey) {
                // Zoom out with Ctrl/Cmd click
                currentScale = Math.max(currentScale - scaleStep, minScale);
            } else {
                // Zoom in with regular click
                currentScale = Math.min(currentScale + scaleStep, maxScale);
            }
            this.style.transform = `scale(\${currentScale})`;
            updateZoomButtons();
        });
        
        // Prevent modal close when clicking on image or buttons
        document.querySelector('.modal-content').addEventListener('click', (e) => {
            e.stopPropagation();
        });
        
        // Initialize button states
        updateZoomButtons();
    }

    // Show Toast Messages
    function showToast(type, message) {
        const toastContainer = document.getElementById(`\${type}Toast`);
        const messageElement = document.getElementById(`\${type}Message`);
        
        messageElement.textContent = message;
        toastContainer.style.display = 'block';
        
        const toastEl = toastContainer.querySelector('.toast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
        
        setTimeout(() => {
            toast.hide();
        }, 3000);
    }

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize image zoom functionality
        initImageZoom();
        
        // Check initial favorites state for all items
        document.querySelectorAll('.toggle-favorite').forEach(button => {
            const itemId = button.dataset.itemId;
            fetch(`/favorites/check/\${itemId}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.isFavorite) {
                    const icon = button.querySelector('i');
                    icon.classList.remove('bi-heart');
                    icon.classList.add('bi-heart-fill');
                    button.classList.add('text-danger');
                }
            });
        });
        
        // Favorite Button Click Handler
        document.querySelectorAll('.toggle-favorite').forEach(button => {
            button.addEventListener('click', function() {
                // Check if the item belongs to the current user
                const card = this.closest('.card');
                const isUserItem = card.querySelector('.badge.bg-warning') !== null;
                
                if (isUserItem) {
                    showToast('error', 'You cannot add your own items to favorites');
                    return;
                }

                const itemId = this.dataset.itemId;
                const icon = this.querySelector('i');
                const itemName = this.closest('.card').querySelector('.card-title').textContent;
                const isCurrentlyFavorite = icon.classList.contains('bi-heart-fill');
                
                if (isCurrentlyFavorite) {
                    // Remove from favorites
                    fetch(`/favorites/remove/\${itemId}`, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            icon.classList.remove('bi-heart-fill');
                            icon.classList.add('bi-heart');
                            this.classList.remove('text-danger');
                            showToast('info', `\"\${itemName}\" removed from favorites`);
                        }
                    })
                    .catch(error => {
                        showToast('error', 'An error occurred while removing from favorites');
                    });
                } else {
                    // Add to favorites
                    fetch(`/favorites/add/\${itemId}`, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            icon.classList.remove('bi-heart');
                            icon.classList.add('bi-heart-fill');
                            this.classList.add('text-danger');
                            showToast('success', `\"\${itemName}\" added to favorites!`);
                        }
                    })
                    .catch(error => {
                        showToast('error', 'An error occurred while adding to favorites');
                    });
                }
            });
        });

        // Handle direct add to cart buttons in the main list
        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const itemId = this.getAttribute('href').split('/').pop();
                const itemName = this.closest('.card').querySelector('.card-title').textContent;
                
                fetch(`/cartadd/\${itemId}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showToast('success', `\"\${itemName}\" added to cart!`);
                        // Update cart count
                        const cartCount = document.querySelector('.badge.bg-light.text-primary');
                        if (cartCount) {
                            cartCount.textContent = data.cartCount;
                        }
                    } else if (data.error) {
                        showToast('error', data.error);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showToast('error', 'An error occurred while adding to cart');
                });
            });
        });

        // Handle add to cart buttons in favorites modal
        document.getElementById('favoritesContent').addEventListener('click', function(e) {
            const target = e.target.closest('button');
            if (!target) return;

            if (target.classList.contains('remove-favorite')) {
                const itemId = target.dataset.id;
                const itemName = target.closest('.card').querySelector('.card-title').textContent;
                
                fetch(`/favorites/remove/\${itemId}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        target.closest('.col').remove();
                        showToast('info', `\"\${itemName}\" removed from favorites`);
                        
                        // Update the heart icon in the marketplace if visible
                        const marketplaceHeart = document.querySelector(`.toggle-favorite[data-item-id=\"\${itemId}\"]`);
                        if (marketplaceHeart) {
                            const icon = marketplaceHeart.querySelector('i');
                            icon.classList.remove('bi-heart-fill');
                            icon.classList.add('bi-heart');
                            marketplaceHeart.classList.remove('text-danger');
                        }
                        
                        // If no favorites left, show empty state
                        if (document.querySelectorAll('#favoritesContent .col').length === 0) {
                            document.getElementById('favoritesContent').innerHTML = `
                                <div class=\"text-center py-5\">
                                    <i class=\"bi bi-heart text-muted\" style=\"font-size: 3rem;\"></i>
                                    <h4 class=\"mt-3\">No favorites yet</h4>
                                    <p>Click the heart icon on items to save them here</p>
                                </div>
                            `;
                        }
                    }
                })
                .catch(error => {
                    showToast('error', 'Failed to remove from favorites');
                });
            } else if (target.classList.contains('add-to-cart')) {
                const itemId = target.dataset.id;
                const itemName = target.closest('.card').querySelector('.card-title').textContent;
                
                fetch(`/cartadd/\${itemId}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showToast('success', `\"\${itemName}\" added to cart!`);
                        // Update cart count
                        const cartCount = document.querySelector('.badge.bg-light.text-primary');
                        if (cartCount) {
                            cartCount.textContent = data.cartCount;
                        }
                    } else if (data.error) {
                        showToast('error', data.error);
                    }
                })
                .catch(error => {
                    showToast('error', 'Failed to add to cart');
                });
            } else if (target.classList.contains('add-all-to-cart')) {
                const items = document.querySelectorAll('.add-to-cart');
                let addedCount = 0;
                let failedCount = 0;
                
                items.forEach(button => {
                    const itemId = button.dataset.id;
                    const itemName = button.closest('.card').querySelector('.card-title').textContent;
                    
                    fetch(`/cartadd/\${itemId}`, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            addedCount++;
                        } else {
                            failedCount++;
                        }
                        
                        // If this is the last item, show summary
                        if (addedCount + failedCount === items.length) {
                            if (addedCount > 0) {
                                showToast('success', `Added \${addedCount} items to cart!`);
                                // Update cart count
                                const cartCount = document.querySelector('.badge.bg-light.text-primary');
                                if (cartCount) {
                                    cartCount.textContent = parseInt(cartCount.textContent) + addedCount;
                                }
                            }
                            if (failedCount > 0) {
                                showToast('error', `Failed to add \${failedCount} items to cart`);
                            }
                        }
                    })
                    .catch(error => {
                        failedCount++;
                        if (addedCount + failedCount === items.length) {
                            if (addedCount > 0) {
                                showToast('success', `Added \${addedCount} items to cart!`);
                                // Update cart count
                                const cartCount = document.querySelector('.badge.bg-light.text-primary');
                                if (cartCount) {
                                    cartCount.textContent = parseInt(cartCount.textContent) + addedCount;
                                }
                            }
                            if (failedCount > 0) {
                                showToast('error', `Failed to add \${failedCount} items to cart`);
                            }
                        }
                    });
                });
            }
        });

        // Toggle Item Details
        document.querySelectorAll('.toggle-details').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const details = this.closest('.card-body').querySelector('.item-details');
                details.style.maxHeight = details.style.maxHeight === '0px' ? '100px' : '0px';
                this.innerHTML = details.style.maxHeight === '0px' ? 
                    '<i class=\"bi bi-three-dots\"></i>' : 
                    '<i class=\"bi bi-x\"></i>';
                if(document.documentElement.getAttribute('data-theme') === 'dark') {
                    this.classList.toggle('btn-outline-light', details.style.maxHeight !== '0px');
                }
            });
        });

        // Search and Filter Functionality
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');
        const typeFilter = document.getElementById('typeFilter');
        const priceRange = document.getElementById('priceRange');
        const minPrice = document.getElementById('minPrice');
        const maxPrice = document.getElementById('maxPrice');
        const resetFilters = document.getElementById('resetFilters');
        const itemCards = Array.from(document.querySelectorAll('.item-card'));
        const itemCount = document.getElementById('itemCount');
        const itemsPagination = document.getElementById('itemsPagination');

        let currentPage = 1;
        const itemsPerPage = 6;

        // Set initial price range max based on items
        let maxItemPrice = 0;
        itemCards.forEach(card => {
            const price = parseFloat(card.dataset.price || \"0\");
            if (price > maxItemPrice) maxItemPrice = price;
        });
        priceRange.max = Math.ceil(maxItemPrice / 10) * 10 || 10000;
        maxPrice.textContent = priceRange.max;

        function getFilteredCards() {
            const searchTerm = searchInput.value.trim().toLowerCase();
            const selectedType = typeFilter ? typeFilter.value.toLowerCase() : '';
            const selectedPrice = parseFloat(priceRange.value);

            return itemCards.filter(card => {
                const name = card.dataset.name || '';
                const desc = card.dataset.description || '';
                const type = card.dataset.type || '';
                const price = parseFloat(card.dataset.price || \"0\");

                const matchesSearch = !searchTerm || name.includes(searchTerm) || desc.includes(searchTerm);
                const matchesType = !selectedType || type === selectedType;
                const matchesPrice = price <= selectedPrice;

                return matchesSearch && matchesType && matchesPrice;
            });
        }

        function showPage(filteredCards, page) {
            itemCards.forEach(card => card.style.display = 'none');
            const totalPages = Math.ceil(filteredCards.length / itemsPerPage) || 1;
            if (page > totalPages) page = 1;
            const startIdx = (page - 1) * itemsPerPage;
            const endIdx = startIdx + itemsPerPage;
            filteredCards.slice(startIdx, endIdx).forEach(card => {
                card.style.display = '';
            });
            if (itemCount) itemCount.textContent = filteredCards.length + ' items';
            renderPagination(totalPages, page, filteredCards);

            // Show \"No items found\" message if no items match the search
            if (filteredCards.length === 0) {
                const noItemsMessage = document.createElement('div');
                noItemsMessage.className = 'text-center py-5 my-5';
                noItemsMessage.innerHTML = `
                    <i class=\"bi bi-search display-4 text-muted mb-4\"></i>
                    <h3 class=\"text-muted\">No items found</h3>
                    <p class=\"text-muted\">No items match your search criteria. Try adjusting your filters or search terms.</p>
                    <div class=\"mt-4\">
                        <button class=\"btn btn-outline-primary\" id=\"resetSearch\">
                            <i class=\"bi bi-arrow-counterclockwise me-1\"></i>Reset Search
                        </button>
                    </div>
                `;
                
                // Remove any existing no items message
                const existingMessage = document.querySelector('#itemsContainer .text-center');
                if (existingMessage) {
                    existingMessage.remove();
                }
                
                // Add the new message
                document.getElementById('itemsContainer').appendChild(noItemsMessage);
                
                // Add event listener to reset button
                document.getElementById('resetSearch').addEventListener('click', function() {
                    searchInput.value = '';
                    if (typeFilter) typeFilter.value = '';
                    priceRange.value = priceRange.max;
                    maxPrice.textContent = priceRange.max;
                    performSearchAndFilter();
                });
            } else {
                // Remove the no items message if it exists
                const existingMessage = document.querySelector('#itemsContainer .text-center');
                if (existingMessage) {
                    existingMessage.remove();
                }
            }
        }

        function renderPagination(totalPages, page, filteredCards) {
            itemsPagination.innerHTML = '';
            if (totalPages <= 1) return;
            
            const pagination = document.createElement('div');
            pagination.className = 'pagination';

            // Previous button
            if (page > 1) {
                const prevBtn = document.createElement('span');
                prevBtn.className = 'page-link';
                prevBtn.innerHTML = '&laquo;';
                prevBtn.addEventListener('click', () => {
                    currentPage = page - 1;
                    showPage(filteredCards, currentPage);
                    window.scrollTo({top: 0, behavior: 'smooth'});
                });
                pagination.appendChild(prevBtn);
            }

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const pageBtn = document.createElement('span');
                pageBtn.className = 'page-link' + (i === page ? ' active' : '');
                pageBtn.textContent = i;
                pageBtn.addEventListener('click', () => {
                    currentPage = i;
                    showPage(filteredCards, currentPage);
                    window.scrollTo({top: 0, behavior: 'smooth'});
                });
                pagination.appendChild(pageBtn);
            }

            // Next button
            if (page < totalPages) {
                const nextBtn = document.createElement('span');
                nextBtn.className = 'page-link';
                nextBtn.innerHTML = '&raquo;';
                nextBtn.addEventListener('click', () => {
                    currentPage = page + 1;
                    showPage(filteredCards, currentPage);
                    window.scrollTo({top: 0, behavior: 'smooth'});
                });
                pagination.appendChild(nextBtn);
            }

            itemsPagination.appendChild(pagination);
        }

        function performSearchAndFilter() {
            const filteredCards = getFilteredCards();
            const totalPages = Math.ceil(filteredCards.length / itemsPerPage) || 1;
            if (currentPage > totalPages) currentPage = 1;
            showPage(filteredCards, currentPage);
        }

        // Event Listeners for Search/Filter
        priceRange.addEventListener('input', function() {
            maxPrice.textContent = priceRange.value;
            currentPage = 1;
            performSearchAndFilter();
        });

        if (typeFilter) typeFilter.addEventListener('change', function() {
            currentPage = 1;
            performSearchAndFilter();
        });

        searchInput.addEventListener('input', function() {
            currentPage = 1;
            performSearchAndFilter();
        });
        searchButton.addEventListener('click', function() {
            currentPage = 1;
            performSearchAndFilter();
        });
        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                currentPage = 1;
                performSearchAndFilter();
            }
        });

        resetFilters.addEventListener('click', function() {
            searchInput.value = '';
            if (typeFilter) typeFilter.value = '';
            priceRange.value = priceRange.max;
            maxPrice.textContent = priceRange.max;
            currentPage = 1;
            performSearchAndFilter();
        });

        // Initial state
        priceRange.value = priceRange.max;
        maxPrice.textContent = priceRange.max;
        performSearchAndFilter();

        // Load favorites when modal is shown
        const favoritesModal = document.getElementById('favoritesModal');
        favoritesModal.addEventListener('show.bs.modal', function () {
            fetch('/favorites', {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('favoritesContent').innerHTML = html;
            })
            .catch(error => {
                showToast('error', 'Failed to load favorites');
            });
        });

        // Handle Remove All Favorites button
        document.getElementById('removeAllFavorites').addEventListener('click', function() {
            if (confirm('Are you sure you want to remove all items from favorites?')) {
                fetch('/favorites/remove-all', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Clear the favorites content
                        document.getElementById('favoritesContent').innerHTML = `
                            <div class=\"text-center py-5\">
                                <i class=\"bi bi-heart text-muted\" style=\"font-size: 3rem;\"></i>
                                <h4 class=\"mt-3\">No favorites yet</h4>
                                <p>Click the heart icon on items to save them here</p>
                            </div>
                        `;
                        
                        // Update all heart icons in the marketplace
                        document.querySelectorAll('.toggle-favorite').forEach(button => {
                            const icon = button.querySelector('i');
                            icon.classList.remove('bi-heart-fill');
                            icon.classList.add('bi-heart');
                            button.classList.remove('text-danger');
                        });
                        
                        showToast('info', 'All items removed from favorites');
                    } else {
                        showToast('error', 'Failed to remove all favorites');
                    }
                })
                .catch(error => {
                    showToast('error', 'Failed to remove all favorites');
                });
            }
        });
        

        // Voice Search Functionality
        const voiceSearchBtn = document.getElementById('voiceSearchBtn');
        let recognition = null;

        if ('webkitSpeechRecognition' in window) {
            recognition = new webkitSpeechRecognition();
            recognition.continuous = false;
            recognition.interimResults = false;
            recognition.lang = 'en-US';

            recognition.onstart = function() {
                voiceSearchBtn.classList.add('recording');
                searchInput.value = ''; // Clear the search input when starting
                showToast('info', 'Listening...');
            };

            recognition.onresult = function(event) {
                const transcript = event.results[0][0].transcript;
                searchInput.value = transcript;
                performSearchAndFilter(); // Use the existing search function
            };

            recognition.onerror = function(event) {
                voiceSearchBtn.classList.remove('recording');
                showToast('error', 'Voice recognition error: ' + event.error);
            };

            recognition.onend = function() {
                voiceSearchBtn.classList.remove('recording');
            };

            voiceSearchBtn.addEventListener('click', function() {
                if (voiceSearchBtn.classList.contains('recording')) {
                    recognition.stop();
                    searchInput.value = ''; // Clear the search input when stopping
                    // Reset all filters and show all items
                    if (typeFilter) typeFilter.value = '';
                    priceRange.value = priceRange.max;
                    maxPrice.textContent = priceRange.max;
                    performSearchAndFilter(); // This will now show all items
                } else {
                    recognition.start();
                }
            });
        } else {
            voiceSearchBtn.style.display = 'none';
            console.log('Speech recognition not supported');
        }

        // Search functionality
        function performSearch(query) {
            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('search', query);
            window.location.href = currentUrl.toString();
        }

        document.getElementById('searchBtn').addEventListener('click', function() {
            performSearch(searchInput.value);
        });

        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch(searchInput.value);
            }
        });
        
    });

    // Initialize map when modal is shown
    document.addEventListener('DOMContentLoaded', function() {
        let map;
        let marker;
        
        // Initialize map when modal is shown
        document.getElementById('mapPreviewModal').addEventListener('shown.bs.modal', function(event) {
            const button = event.relatedTarget;
            const address = button.getAttribute('data-address');
            
            // Use OpenStreetMap Nominatim API for geocoding
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=\${encodeURIComponent(address)}`)
                .then(response => response.json())
                .then(data => {
                    if (data && data.length > 0) {
                        const lat = parseFloat(data[0].lat);
                        const lon = parseFloat(data[0].lon);
                        
                        if (!map) {
                            map = L.map('mapPreview').setView([lat, lon], 15);
                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
                            }).addTo(map);
                        } else {
                            map.setView([lat, lon], 15);
                        }
                        
                        if (marker) {
                            map.removeLayer(marker);
                        }
                        
                        marker = L.marker([lat, lon]).addTo(map);
                        marker.bindPopup(`<b>\${address}</b>`).openPopup();
                    } else {
                        // If no location found, show a message
                        const mapContainer = document.getElementById('mapPreview');
                        mapContainer.innerHTML = '<div class=\"text-center p-5\"><i class=\"bi bi-exclamation-triangle text-warning\" style=\"font-size: 2rem;\"></i><p class=\"mt-3\">Location not found</p></div>';
                    }
                })
                .catch(error => {
                    console.error('Geocoding error:', error);
                    const mapContainer = document.getElementById('mapPreview');
                    mapContainer.innerHTML = '<div class=\"text-center p-5\"><i class=\"bi bi-exclamation-triangle text-danger\" style=\"font-size: 2rem;\"></i><p class=\"mt-3\">Error loading location</p></div>';
                });
        });
        
        // Clean up map when modal is hidden
        document.getElementById('mapPreviewModal').addEventListener('hidden.bs.modal', function() {
            if (map) {
                map.remove();
                map = null;
                marker = null;
            }
        });
    });
</script>

<script>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
</script>

{% endblock %}", "marketplace/test.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\marketplace\\test.html.twig");
    }
}
