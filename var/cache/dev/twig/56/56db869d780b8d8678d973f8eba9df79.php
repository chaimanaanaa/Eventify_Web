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

/* logistics/categoryList.html.twig */
class __TwigTemplate_6aefe612625ec93c8b5957e87469ea2c extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logistics/categoryList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logistics/categoryList.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "logistics/categoryList.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">

        <!-- Layout container -->
        <div class=\"layout-page\">
          <!-- Navbar -->

          <nav
            class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\"
            id=\"layout-navbar\">
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none\">
              <a class=\"nav-item nav-link px-0 me-xl-6\" href=\"javascript:void(0)\">
                <i class=\"icon-base bx bx-menu icon-md\"></i>
              </a>
            </div>

            <div class=\"navbar-nav-right d-flex align-items-center justify-content-end\" id=\"navbar-collapse\">
              <!-- Search -->
              <div class=\"navbar-nav align-items-center me-auto\">
                <div class=\"nav-item d-flex align-items-center\">
                  <span class=\"w-px-22 h-px-22\"><i class=\"icon-base bx bx-search icon-md\"></i></span>
                  <input
                    type=\"text\"
                    class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                    placeholder=\"Search...\"
                    aria-label=\"Search...\" />
                </div>
              </div>
              <!-- /Search -->
            </div>
          </nav>

          <!-- / Navbar -->






";
        // line 46
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 146
        yield "
<!-- Footer -->
          <footer class=\"content-footer footer bg-footer-theme\">
            <div class=\"container-xxl\">
              <div
                class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                <div class=\"mb-2 mb-md-0\">
                  &#169;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062\">Eventify</a>
                </div>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class=\"content-backdrop fade\"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class=\"layout-overlay layout-menu-toggle\"></div>
  </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 class=\"mb-0\"><i class=\"fas fa-boxes me-2\"></i> Categories</h2>
        <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_create");
        yield "\" class=\"btn btn-primary hover-zoom\">
            <i class=\"fas fa-plus-circle me-1\"></i> New Category
        </a>
    </div>

    ";
        // line 55
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 55, $this->source); })())) > 0)) {
            // line 56
            yield "    <div class=\"row\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 58
                yield "        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card h-100 shadow-sm border-0 hover-zoom-card\">
                <div class=\"card-img-top position-relative\" style=\"height: 200px; overflow: hidden;\">
                    ";
                // line 61
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 61)) {
                    // line 62
                    yield "                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 62)), "html", null, true);
                    yield "\" 
                         class=\"img-fluid h-100 w-100 object-fit-cover hover-zoom-img\"
                         alt=\"";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 64), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 66
                    yield "                    <div class=\"d-flex align-items-center justify-content-center h-100 bg-light\">
                        <i class=\"fas fa-image fa-3x text-muted\"></i>
                    </div>
                    ";
                }
                // line 70
                yield "                    <span class=\"badge bg-primary position-absolute top-0 end-0 m-2 hover-zoom\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 70), "html", null, true);
                yield "</span>
                </div>
                
                <div class=\"card-body\">
                    <h5 class=\"card-title mb-3\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 74), "html", null, true);
                yield "</h5>
                    
                    <p class=\"card-text text-muted mb-4\">
                        ";
                // line 77
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 77)) {
                    // line 78
                    yield "                            ";
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 78)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 78), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 78), "html", null, true)));
                    yield "
                        ";
                } else {
                    // line 80
                    yield "                            <span class=\"fst-italic\">No description</span>
                        ";
                }
                // line 82
                yield "                    </p>
                </div>
                
                <div class=\"card-footer bg-white border-0 d-flex justify-content-end gap-2\">
                    <a href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" 
                       class=\"btn btn-sm btn-warning hover-zoom\">
                        <i class=\"fas fa-edit me-1\"></i> Edit
                    </a>
                    <form method=\"post\" action=\"";
                // line 90
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_delete");
                yield "\" 
                          onsubmit=\"return confirm('Delete this category?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 92))), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"id\" value=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 93), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"btn btn-sm btn-danger hover-zoom\">
                            <i class=\"fas fa-trash-alt me-1\"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "    </div>
    ";
        } else {
            // line 104
            yield "    <div class=\"card shadow-sm border-0 hover-zoom-card\">
        <div class=\"card-body text-center py-5\">
            <i class=\"fas fa-box-open fa-4x text-muted mb-4\"></i>
            <h3 class=\"text-muted\">No Categories Found</h3>
            <p class=\"text-muted mb-4\">Get started by creating your first category</p>
            <a href=\"";
            // line 109
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_create");
            yield "\" class=\"btn btn-primary px-4 hover-zoom\">
                <i class=\"fas fa-plus-circle me-1\"></i> Create Category
            </a>
        </div>
    </div>
    ";
        }
        // line 115
        yield "</div>

<style>
    /* Zoom effect styles */
    .hover-zoom-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-zoom-card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .hover-zoom-img {
        transition: transform 0.5s ease;
    }
    .hover-zoom-card:hover .hover-zoom-img {
        transform: scale(1.05);
    }
    .hover-zoom {
        transition: transform 0.2s ease;
    }
    .hover-zoom:hover {
        transform: scale(1.05);
    }
    .badge.hover-zoom {
        transition: transform 0.3s ease;
    }
    .hover-zoom-card:hover .badge.hover-zoom {
        transform: scale(1.1);
    }
</style>
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
        return "logistics/categoryList.html.twig";
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
        return array (  305 => 115,  296 => 109,  289 => 104,  285 => 102,  270 => 93,  266 => 92,  261 => 90,  254 => 86,  248 => 82,  244 => 80,  238 => 78,  236 => 77,  230 => 74,  222 => 70,  216 => 66,  211 => 64,  205 => 62,  203 => 61,  198 => 58,  194 => 57,  191 => 56,  189 => 55,  181 => 50,  176 => 47,  163 => 46,  122 => 146,  120 => 46,  77 => 5,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}


{% block content %}
  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">

        <!-- Layout container -->
        <div class=\"layout-page\">
          <!-- Navbar -->

          <nav
            class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\"
            id=\"layout-navbar\">
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none\">
              <a class=\"nav-item nav-link px-0 me-xl-6\" href=\"javascript:void(0)\">
                <i class=\"icon-base bx bx-menu icon-md\"></i>
              </a>
            </div>

            <div class=\"navbar-nav-right d-flex align-items-center justify-content-end\" id=\"navbar-collapse\">
              <!-- Search -->
              <div class=\"navbar-nav align-items-center me-auto\">
                <div class=\"nav-item d-flex align-items-center\">
                  <span class=\"w-px-22 h-px-22\"><i class=\"icon-base bx bx-search icon-md\"></i></span>
                  <input
                    type=\"text\"
                    class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                    placeholder=\"Search...\"
                    aria-label=\"Search...\" />
                </div>
              </div>
              <!-- /Search -->
            </div>
          </nav>

          <!-- / Navbar -->






{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 class=\"mb-0\"><i class=\"fas fa-boxes me-2\"></i> Categories</h2>
        <a href=\"{{ path('category_create') }}\" class=\"btn btn-primary hover-zoom\">
            <i class=\"fas fa-plus-circle me-1\"></i> New Category
        </a>
    </div>

    {% if categories|length > 0 %}
    <div class=\"row\">
        {% for category in categories %}
        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card h-100 shadow-sm border-0 hover-zoom-card\">
                <div class=\"card-img-top position-relative\" style=\"height: 200px; overflow: hidden;\">
                    {% if category.image %}
                    <img src=\"{{ asset(category.image) }}\" 
                         class=\"img-fluid h-100 w-100 object-fit-cover hover-zoom-img\"
                         alt=\"{{ category.name }}\">
                    {% else %}
                    <div class=\"d-flex align-items-center justify-content-center h-100 bg-light\">
                        <i class=\"fas fa-image fa-3x text-muted\"></i>
                    </div>
                    {% endif %}
                    <span class=\"badge bg-primary position-absolute top-0 end-0 m-2 hover-zoom\">#{{ category.id }}</span>
                </div>
                
                <div class=\"card-body\">
                    <h5 class=\"card-title mb-3\">{{ category.name }}</h5>
                    
                    <p class=\"card-text text-muted mb-4\">
                        {% if category.description %}
                            {{ category.description|length > 100 ? category.description|slice(0, 100) ~ '...' : category.description }}
                        {% else %}
                            <span class=\"fst-italic\">No description</span>
                        {% endif %}
                    </p>
                </div>
                
                <div class=\"card-footer bg-white border-0 d-flex justify-content-end gap-2\">
                    <a href=\"{{ path('category_edit', {'id': category.id}) }}\" 
                       class=\"btn btn-sm btn-warning hover-zoom\">
                        <i class=\"fas fa-edit me-1\"></i> Edit
                    </a>
                    <form method=\"post\" action=\"{{ path('category_delete') }}\" 
                          onsubmit=\"return confirm('Delete this category?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                        <input type=\"hidden\" name=\"id\" value=\"{{ category.id }}\">
                        <button type=\"submit\" class=\"btn btn-sm btn-danger hover-zoom\">
                            <i class=\"fas fa-trash-alt me-1\"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    {% else %}
    <div class=\"card shadow-sm border-0 hover-zoom-card\">
        <div class=\"card-body text-center py-5\">
            <i class=\"fas fa-box-open fa-4x text-muted mb-4\"></i>
            <h3 class=\"text-muted\">No Categories Found</h3>
            <p class=\"text-muted mb-4\">Get started by creating your first category</p>
            <a href=\"{{ path('category_create') }}\" class=\"btn btn-primary px-4 hover-zoom\">
                <i class=\"fas fa-plus-circle me-1\"></i> Create Category
            </a>
        </div>
    </div>
    {% endif %}
</div>

<style>
    /* Zoom effect styles */
    .hover-zoom-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-zoom-card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .hover-zoom-img {
        transition: transform 0.5s ease;
    }
    .hover-zoom-card:hover .hover-zoom-img {
        transform: scale(1.05);
    }
    .hover-zoom {
        transition: transform 0.2s ease;
    }
    .hover-zoom:hover {
        transform: scale(1.05);
    }
    .badge.hover-zoom {
        transition: transform 0.3s ease;
    }
    .hover-zoom-card:hover .badge.hover-zoom {
        transform: scale(1.1);
    }
</style>
{% endblock %}

<!-- Footer -->
          <footer class=\"content-footer footer bg-footer-theme\">
            <div class=\"container-xxl\">
              <div
                class=\"footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column\">
                <div class=\"mb-2 mb-md-0\">
                  &#169;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href=\"#\" target=\"_blank\" class=\"footer-link\" style=\"color: #844062\">Eventify</a>
                </div>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class=\"content-backdrop fade\"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class=\"layout-overlay layout-menu-toggle\"></div>
  </body>
</html>
{% endblock %}", "logistics/categoryList.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\logistics\\categoryList.html.twig");
    }
}
