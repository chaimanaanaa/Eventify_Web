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
class __TwigTemplate_a2aa6e1e31b29df0639aa47f2204d2fb extends Template
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
        yield "<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\" style=\"background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/cart.png'); background-size: cover; background-position: center; min-height: 60vh;\">
    <div class=\"container position-relative z-index-1\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-12 text-center text-lg-start\">
                <h1 class=\"eventify-title display-4 fw-bold mb-4 text-white\">Welcome to Eventify Marketplace</h1>
                <p class=\"lead text-white mb-4\">Discover everything you need for your perfect event</p>
                
                <!-- Search bar in hero section -->
                <div class=\"search-container bg-white rounded-pill shadow-sm mb-4\" style=\"max-width: 600px;\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control border-0 rounded-pill py-3 px-4\" placeholder=\"Search for  venues, equipment...\">
                        <button class=\"btn btn-primary rounded-pill px-4\" type=\"button\">
                            <i class=\"bi bi-search\"></i> Search
                        </button>
                    </div>
                </div>
                
                <div class=\"d-flex gap-3 justify-content-center justify-content-lg-start\">
                    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_view");
        yield "\" class=\"btn btn-primary btn-lg px-4 py-2 rounded-pill\">
                        <i class=\"bi bi-cart3 me-2\"></i>View Cart
                    </a>
                    <a href=\"#marketplace\" class=\"btn btn-outline-light btn-lg px-4 py-2 rounded-pill\">
                        Browse Items
                    </a>
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

<div class=\"container mt-5\" id=\"marketplace\">
    <div class=\"row\">
        <!-- Filter Column with Create Buttons -->
        <div class=\"col-md-3 order-md-2 mb-4\">
            <div class=\"card shadow-sm sticky-top\" style=\"top: 20px;\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-funnel me-2\"></i>Filters</h5>
                    
                </div>
                <div class=\"card-body\">
                    <!-- Create Logistic Button -->
                    <div class=\"d-grid mb-4\">
                        <a href=\"";
        // line 56
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
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" 
                               class=\"category-item ";
        // line 66
        if ( !(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 66, $this->source); })())) {
            yield "active";
        }
        yield " d-flex align-items-center mb-2 p-2 rounded-3\">
                                <div class=\"category-icon bg-light-primary d-flex align-items-center justify-content-center rounded-2 me-3\" style=\"width: 40px; height: 40px;\">
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </div>
                                <span>All Categories</span>
                            </a>
                            
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 74
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop", ["categoryId" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" 
                                   class=\"category-item ";
            // line 75
            if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 75, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 75))) {
                yield "active";
            }
            yield " d-flex align-items-center mb-2 p-2 rounded-3\">
                                    <div class=\"category-img rounded-2 me-3 overflow-hidden\" style=\"width: 40px; height: 40px;\">
                                        <img src=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 77)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 77), "html", null, true);
            yield "\" class=\"img-fluid h-100 w-100 object-fit-cover\">
                                    </div>
                                    <span>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 79), "html", null, true);
            yield "</span>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                        </div>
                    </div>
                    
                    <!-- Type Filter -->
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Type</label>
                        <select class=\"form-select\">
                            <option>All Types</option>
                            <option>Equipment</option>
                            <option>Venue</option>
                            <option>Service</option>
                        </select>
                    </div>
                    
                    <!-- Reset Button -->
                    <button class=\"btn btn-outline-danger w-100\" onclick=\"window.location.href='";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "'\">
                        <i class=\"bi bi-x-circle me-1\"></i>Reset Filters
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content Column -->
        <div class=\"col-md-9 order-md-1\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h2 class=\"mb-0\">
                    ";
        // line 108
        if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 108, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["categories"] ?? null), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 108, $this->source); })()), [], "array", true, true, false, 108))) {
            // line 109
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 109, $this->source); })()), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 109, $this->source); })()), [], "array", false, false, false, 109), "image", [], "any", false, false, false, 109)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 109, $this->source); })()), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 109, $this->source); })()), [], "array", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
            yield "\" style=\"width: 32px; height: 32px; object-fit: cover; border-radius: 6px;\" class=\"me-2\">
                        ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 110, $this->source); })()), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 110, $this->source); })()), [], "array", false, false, false, 110), "name", [], "any", false, false, false, 110), "html", null, true);
            yield "
                    ";
        } else {
            // line 112
            yield "                        <i class=\"bi bi-grid-fill me-2 text-primary\"></i>All Items
                    ";
        }
        // line 114
        yield "                </h2>
                <span class=\"badge bg-primary rounded-pill px-3 py-2\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 115, $this->source); })())), "html", null, true);
        yield " items</span>
            </div>

            ";
        // line 118
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 118, $this->source); })()))) {
            // line 119
            yield "                <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 121
                yield "                        <div class=\"col\">
                            <div class=\"card h-100 shadow-hover\">
                                ";
                // line 123
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123) == (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 123, $this->source); })()))) {
                    // line 124
                    yield "                                    <span class=\"position-absolute top-0 start-0 m-2 badge bg-warning\" style=\"z-index: 10;\">
                                        <i class=\"bi bi-star-fill me-1\"></i>Your Item
                                    </span>
                                ";
                }
                // line 128
                yield "                                
                                <div class=\"card-img-top position-relative\" style=\"height: 200px; overflow: hidden;\">
                                    ";
                // line 130
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 130)) {
                    // line 131
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 131)), "html", null, true);
                    yield "\" class=\"img-fluid h-100 w-100 object-fit-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 131), "html", null, true);
                    yield "\">
                                    ";
                } else {
                    // line 133
                    yield "                                        <div class=\"d-flex align-items-center justify-content-center bg-light h-100\">
                                            <i class=\"bi bi-image text-muted\" style=\"font-size: 3rem;\"></i>
                                        </div>
                                    ";
                }
                // line 137
                yield "                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 140), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text text-muted\">";
                // line 141
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 141)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 141), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 141), "html", null, true)));
                yield "</p>
                                    
                                    <div class=\"item-details\" style=\"max-height: 0; overflow: hidden; transition: max-height 0.3s ease;\">
                                        <hr class=\"my-2\">
                                        <div class=\"row small text-muted\">
                                            <div class=\"col-6\">
                                                <div><i class=\"bi bi-tag me-1\"></i> ";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 147), "html", null, true);
                yield "</div>
                                                <div><i class=\"bi bi-box me-1\"></i> ";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 148), "html", null, true);
                yield "</div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div><i class=\"bi bi-people me-1\"></i> ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "capacite", [], "any", false, false, false, 151), "html", null, true);
                yield "</div>
                                                <div><i class=\"bi bi-geo-alt me-1\"></i> ";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lieux", [], "any", false, false, false, 152), "html", null, true);
                yield "</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                        <span class=\"h5 text-primary mb-0\">";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 158), "html", null, true);
                yield " TND</span>
                                        <button class=\"btn btn-sm btn-outline-secondary toggle-details\">
                                            <i class=\"bi bi-three-dots\"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class=\"card-footer bg-transparent\">
                                    ";
                // line 166
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 166), "id", [], "any", false, false, false, 166) == (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 166, $this->source); })()))) {
                    // line 167
                    yield "                                        <div class=\"d-flex justify-content-end gap-2\">
                                            <a href=\"";
                    // line 168
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistic_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-primary\">
                                                <i class=\"bi bi-pencil-square me-1\"></i>Edit
                                            </a>
                                            <form method=\"post\" action=\"";
                    // line 171
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistic_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 171)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Are you sure?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 172))), "html", null, true);
                    yield "\">
                                                <button class=\"btn btn-sm btn-outline-danger\">
                                                    <i class=\"bi bi-trash me-1\"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    ";
                } else {
                    // line 179
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                    yield "\" class=\"btn btn-primary w-100\">
                                            <i class=\"bi bi-cart-plus me-1\"></i>Add to Cart
                                        </a>
                                    ";
                }
                // line 183
                yield "                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            yield "                </div>
            ";
        } else {
            // line 189
            yield "                <div class=\"text-center py-5 my-5\">
                    <i class=\"bi bi-box-seam display-4 text-muted mb-4\"></i>
                    <h3 class=\"text-muted\">No items found</h3>
                    <p class=\"text-muted\">Try adjusting your filters or check back later.</p>
                    <div class=\"mt-4\">
                        <a href=\"";
            // line 194
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics");
            yield "\" class=\"btn btn-primary\">
                            <i class=\"bi bi-plus-circle me-1\"></i> Add Your First Logistic
                        </a>
                    </div>
                </div>
            ";
        }
        // line 200
        yield "        </div>
    </div>
</div>

<style>
    /* Existing styles... */
    
    /* New button styles */
    .card-header .btn-success {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }
    
    .empty-state-button {
        transition: all 0.3s ease;
    }
    
    .empty-state-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* New hover effect for cards */
    .shadow-hover {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    
    .shadow-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
</style>

<script>
    // Toggle additional details
    document.querySelectorAll('.toggle-details').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const details = this.closest('.card-body').querySelector('.item-details');
            details.style.maxHeight = details.style.maxHeight === '0px' ? '100px' : '0px';
            this.innerHTML = details.style.maxHeight === '0px' ? 
                '<i class=\"bi bi-three-dots\"></i>' : 
                '<i class=\"bi bi-x\"></i>';
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
        return array (  406 => 200,  397 => 194,  390 => 189,  386 => 187,  377 => 183,  369 => 179,  359 => 172,  355 => 171,  349 => 168,  346 => 167,  344 => 166,  333 => 158,  324 => 152,  320 => 151,  314 => 148,  310 => 147,  301 => 141,  297 => 140,  292 => 137,  286 => 133,  278 => 131,  276 => 130,  272 => 128,  266 => 124,  264 => 123,  260 => 121,  256 => 120,  253 => 119,  251 => 118,  245 => 115,  242 => 114,  238 => 112,  233 => 110,  226 => 109,  224 => 108,  210 => 97,  193 => 82,  184 => 79,  177 => 77,  170 => 75,  165 => 74,  161 => 73,  149 => 66,  145 => 65,  133 => 56,  96 => 22,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\" style=\"background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/cart.png'); background-size: cover; background-position: center; min-height: 60vh;\">
    <div class=\"container position-relative z-index-1\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-12 text-center text-lg-start\">
                <h1 class=\"eventify-title display-4 fw-bold mb-4 text-white\">Welcome to Eventify Marketplace</h1>
                <p class=\"lead text-white mb-4\">Discover everything you need for your perfect event</p>
                
                <!-- Search bar in hero section -->
                <div class=\"search-container bg-white rounded-pill shadow-sm mb-4\" style=\"max-width: 600px;\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control border-0 rounded-pill py-3 px-4\" placeholder=\"Search for  venues, equipment...\">
                        <button class=\"btn btn-primary rounded-pill px-4\" type=\"button\">
                            <i class=\"bi bi-search\"></i> Search
                        </button>
                    </div>
                </div>
                
                <div class=\"d-flex gap-3 justify-content-center justify-content-lg-start\">
                    <a href=\"{{ path('cart_view') }}\" class=\"btn btn-primary btn-lg px-4 py-2 rounded-pill\">
                        <i class=\"bi bi-cart3 me-2\"></i>View Cart
                    </a>
                    <a href=\"#marketplace\" class=\"btn btn-outline-light btn-lg px-4 py-2 rounded-pill\">
                        Browse Items
                    </a>
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

<div class=\"container mt-5\" id=\"marketplace\">
    <div class=\"row\">
        <!-- Filter Column with Create Buttons -->
        <div class=\"col-md-3 order-md-2 mb-4\">
            <div class=\"card shadow-sm sticky-top\" style=\"top: 20px;\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\"><i class=\"bi bi-funnel me-2\"></i>Filters</h5>
                    
                </div>
                <div class=\"card-body\">
                    <!-- Create Logistic Button -->
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
                        <select class=\"form-select\">
                            <option>All Types</option>
                            <option>Equipment</option>
                            <option>Venue</option>
                            <option>Service</option>
                        </select>
                    </div>
                    
                    <!-- Reset Button -->
                    <button class=\"btn btn-outline-danger w-100\" onclick=\"window.location.href='{{ path('app_shop') }}'\">
                        <i class=\"bi bi-x-circle me-1\"></i>Reset Filters
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content Column -->
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
                <span class=\"badge bg-primary rounded-pill px-3 py-2\">{{ logistic|length }} items</span>
            </div>

            {% if logistic is not empty %}
                <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
                    {% for item in logistic %}
                        <div class=\"col\">
                            <div class=\"card h-100 shadow-hover\">
                                {% if item.user.id == currentUserId %}
                                    <span class=\"position-absolute top-0 start-0 m-2 badge bg-warning\" style=\"z-index: 10;\">
                                        <i class=\"bi bi-star-fill me-1\"></i>Your Item
                                    </span>
                                {% endif %}
                                
                                <div class=\"card-img-top position-relative\" style=\"height: 200px; overflow: hidden;\">
                                    {% if item.image %}
                                        <img src=\"{{ asset(item.image) }}\" class=\"img-fluid h-100 w-100 object-fit-cover\" alt=\"{{ item.nom }}\">
                                    {% else %}
                                        <div class=\"d-flex align-items-center justify-content-center bg-light h-100\">
                                            <i class=\"bi bi-image text-muted\" style=\"font-size: 3rem;\"></i>
                                        </div>
                                    {% endif %}
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
                                        <a href=\"{{ path('cart_add', { 'id': item.id }) }}\" class=\"btn btn-primary w-100\">
                                            <i class=\"bi bi-cart-plus me-1\"></i>Add to Cart
                                        </a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
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
    /* Existing styles... */
    
    /* New button styles */
    .card-header .btn-success {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }
    
    .empty-state-button {
        transition: all 0.3s ease;
    }
    
    .empty-state-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* New hover effect for cards */
    .shadow-hover {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    
    .shadow-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
</style>

<script>
    // Toggle additional details
    document.querySelectorAll('.toggle-details').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const details = this.closest('.card-body').querySelector('.item-details');
            details.style.maxHeight = details.style.maxHeight === '0px' ? '100px' : '0px';
            this.innerHTML = details.style.maxHeight === '0px' ? 
                '<i class=\"bi bi-three-dots\"></i>' : 
                '<i class=\"bi bi-x\"></i>';
        });
    });
</script>
{% endblock %}", "marketplace/test.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\marketplace\\test.html.twig");
    }
}
