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

/* logistics/logisticsBack.html.twig */
class __TwigTemplate_00e08250a35e01b87623d936321c50a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logistics/logisticsBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logistics/logisticsBack.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "logistics/logisticsBack.html.twig", 1);
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
        // line 147
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
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
            <h2 class=\"h5 mb-0\"><i class=\"fas fa-boxes me-2\"></i>Logistics Management</h2>
        </div>
        
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"w-5\">#</th>
                            <th class=\"w-10\">Type</th>
                            <th class=\"w-15\">Category</th>
                            <th class=\"w-20\">Name</th>
                            <th class=\"w-5\">Qty</th>
                            <th class=\"w-5\">Capacity</th>
                            <th class=\"w-10\">Price</th>
                            <th class=\"w-15\">Location</th>
                            <th class=\"w-10\">Image</th>
                            <th class=\"w-10 text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 71, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            yield "                            <tr>
                                <td><span class=\"badge bg-secondary\">#";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 73), "html", null, true);
            yield "</span></td>
                                <td>
                                    ";
            // line 75
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 75)) == "venue")) {
                // line 76
                yield "                                        <span class=\"badge\" style=\"background-color: #844062; color: white;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 76), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 77
$context["item"], "type", [], "any", false, false, false, 77)) == "equipment")) {
                // line 78
                yield "                                        <span class=\"badge\" style=\"background-color: #3a86ff; color: white;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 78), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 80
                yield "                                        <span class=\"badge bg-dark text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 80), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 82
            yield "                                </td>
                                <td>
                                    ";
            // line 84
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 84)) {
                // line 85
                yield "                                        <span class=\"badge\" style=\"background-color: #38b000; color: white;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 87
                yield "                                        <span class=\"badge bg-light text-dark\">Uncategorized</span>
                                    ";
            }
            // line 89
            yield "                                </td>
                                <td class=\"fw-semibold\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                                <td class=\"fw-medium\">
                                    ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 92), "html", null, true);
            yield "
                                </td>
                                <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "capacite", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                                <td class=\"fw-bold\" style=\"color: black;\">
                                    ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 96), 2), "html", null, true);
            yield " Dt
                                </td>
                                <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lieux", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 100
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 100)) {
                // line 101
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 101)), "html", null, true);
                yield "\" 
                                             class=\"img-thumbnail\" 
                                             style=\"width: 60px; height: 60px; object-fit: cover;\"
                                             alt=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 104), "html", null, true);
                yield "\">
                                    ";
            } else {
                // line 106
                yield "                                        <span class=\"badge bg-light text-dark\">No image</span>
                                    ";
            }
            // line 108
            yield "                                </td>
                                <td class=\"text-end\">
                                    <div class=\"d-flex gap-2 justify-content-end\">
                                        <a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistic_delete_back", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-danger btn-sm px-3 py-1\"
                                           onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                            <i class=\"fas fa-trash-alt me-1\"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 119
        if (!$context['_iterated']) {
            // line 120
            yield "                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                        <h5 class=\"text-muted\">No logistics items found</h5>
                                        
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
// Initialize Bootstrap tooltips
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
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
        return "logistics/logisticsBack.html.twig";
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
        return array (  336 => 130,  321 => 120,  319 => 119,  306 => 111,  301 => 108,  297 => 106,  292 => 104,  285 => 101,  283 => 100,  278 => 98,  273 => 96,  268 => 94,  263 => 92,  258 => 90,  255 => 89,  251 => 87,  245 => 85,  243 => 84,  239 => 82,  233 => 80,  227 => 78,  225 => 77,  220 => 76,  218 => 75,  213 => 73,  210 => 72,  205 => 71,  179 => 47,  166 => 46,  123 => 147,  121 => 46,  77 => 4,  64 => 3,  41 => 1,);
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
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
            <h2 class=\"h5 mb-0\"><i class=\"fas fa-boxes me-2\"></i>Logistics Management</h2>
        </div>
        
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"w-5\">#</th>
                            <th class=\"w-10\">Type</th>
                            <th class=\"w-15\">Category</th>
                            <th class=\"w-20\">Name</th>
                            <th class=\"w-5\">Qty</th>
                            <th class=\"w-5\">Capacity</th>
                            <th class=\"w-10\">Price</th>
                            <th class=\"w-15\">Location</th>
                            <th class=\"w-10\">Image</th>
                            <th class=\"w-10 text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in logistic %}
                            <tr>
                                <td><span class=\"badge bg-secondary\">#{{ item.id }}</span></td>
                                <td>
                                    {% if item.type|lower == 'venue' %}
                                        <span class=\"badge\" style=\"background-color: #844062; color: white;\">{{ item.type }}</span>
                                    {% elseif item.type|lower == 'equipment' %}
                                        <span class=\"badge\" style=\"background-color: #3a86ff; color: white;\">{{ item.type }}</span>
                                    {% else %}
                                        <span class=\"badge bg-dark text-white\">{{ item.type }}</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if item.category %}
                                        <span class=\"badge\" style=\"background-color: #38b000; color: white;\">{{ item.category.name }}</span>
                                    {% else %}
                                        <span class=\"badge bg-light text-dark\">Uncategorized</span>
                                    {% endif %}
                                </td>
                                <td class=\"fw-semibold\">{{ item.nom }}</td>
                                <td class=\"fw-medium\">
                                    {{ item.quantite }}
                                </td>
                                <td>{{ item.capacite }}</td>
                                <td class=\"fw-bold\" style=\"color: black;\">
                                    {{ item.prix|number_format(2) }} Dt
                                </td>
                                <td>{{ item.lieux }}</td>
                                <td>
                                    {% if item.image %}
                                        <img src=\"{{ asset(item.image) }}\" 
                                             class=\"img-thumbnail\" 
                                             style=\"width: 60px; height: 60px; object-fit: cover;\"
                                             alt=\"{{ item.nom }}\">
                                    {% else %}
                                        <span class=\"badge bg-light text-dark\">No image</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-end\">
                                    <div class=\"d-flex gap-2 justify-content-end\">
                                        <a href=\"{{ path('app_logistic_delete_back', {id: item.id}) }}\" 
                                           class=\"btn btn-danger btn-sm px-3 py-1\"
                                           onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                            <i class=\"fas fa-trash-alt me-1\"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                        <h5 class=\"text-muted\">No logistics items found</h5>
                                        
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
// Initialize Bootstrap tooltips
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
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
{% endblock %}", "logistics/logisticsBack.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\logistics\\logisticsBack.html.twig");
    }
}
