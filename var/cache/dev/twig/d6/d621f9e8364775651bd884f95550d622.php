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
class __TwigTemplate_3c2f1071ae58f403f3873676e3e30bae extends Template
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
                    id=\"logisticsSearch\"
                    class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                    placeholder=\"Search logistics...\"
                    aria-label=\"Search logistics\" />
                </div>
              </div>
              <!-- /Search -->
            </div>
          </nav>

          <!-- / Navbar -->

";
        // line 41
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 219
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

    // line 41
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

        // line 42
        yield "<div class=\"container-fluid py-4\">
    <div class=\"card shadow-sm border-0\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center border-bottom\">
            <h2 class=\"h5 mb-0 text-primary\"><i class=\"fas fa-truck-loading me-2\"></i>Logistics Management</h2>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_transactions");
        yield "\" class=\"btn btn-success d-flex align-items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-excel-fill me-2\" viewBox=\"0 0 16 16\">
                        <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5.884 4.68 8 7.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 8l2.233 2.68a.5.5 0 0 1-.768.64L8 8.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 8 5.116 5.32a.5.5 0 1 1 .768-.64z\"/>
                    </svg>
                    list of transactions
                </a>
            </div>
        </div>
        
        <div class=\"card-body px-0\">
            <div class=\"table-responsive rounded-3\">
                <table class=\"table table-hover align-middle mb-0\" id=\"logisticsTable\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-4 w-5\">#</th>
                            <th class=\"w-10\">Type</th>
                            <th class=\"w-15\">Category</th>
                            <th class=\"w-20\">Name</th>
                            <th class=\"w-5\">Qty</th>
                            <th class=\"w-5\">Capacity</th>
                            <th class=\"w-10\">Price</th>
                            <th class=\"w-15\">Location</th>
                            <th class=\"w-10\">Image</th>
                            <th class=\"pe-4 w-10 text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 74, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            yield "                            <tr class=\"logistics-row\">
                                <td class=\"ps-4\"><span class=\"badge bg-secondary\">#";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "</span></td>
                                <td class=\"searchable\">
                                    ";
            // line 78
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 78)) == "venue")) {
                // line 79
                yield "                                        <span class=\"badge rounded-pill\" style=\"background-color: #844062; color: white;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 79), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 80
$context["item"], "type", [], "any", false, false, false, 80)) == "equipment")) {
                // line 81
                yield "                                        <span class=\"badge rounded-pill\" style=\"background-color: #3a86ff; color: white;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 81), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 83
                yield "                                        <span class=\"badge rounded-pill bg-dark text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 83), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 85
            yield "                                </td>
                                <td class=\"searchable\">
                                    ";
            // line 87
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 87)) {
                // line 88
                yield "                                        <span class=\"badge rounded-pill\" style=\"background-color: #38b000; color: white;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 90
                yield "                                        <span class=\"badge rounded-pill bg-light text-dark\">Uncategorized</span>
                                    ";
            }
            // line 92
            yield "                                </td>
                                <td class=\"fw-semibold searchable\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                                <td class=\"fw-medium searchable\">
                                    <span class=\"badge bg-primary rounded-pill\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 95), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"searchable\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "capacite", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                                <td class=\"fw-bold searchable\" style=\"color: #2a4365;\">
                                    ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 99), 2), "html", null, true);
            yield " <small>Dt</small>
                                </td>
                                <td class=\"searchable\">
                                    <i class=\"fas fa-map-marker-alt text-danger me-1\"></i> ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lieux", [], "any", false, false, false, 102), "html", null, true);
            yield "
                                </td>
                                <td>
                                    ";
            // line 105
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 105)) {
                // line 106
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 106)), "html", null, true);
                yield "\" 
                                             class=\"img-thumbnail rounded\" 
                                             style=\"width: 60px; height: 60px; object-fit: cover;\"
                                             alt=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 109), "html", null, true);
                yield "\">
                                    ";
            } else {
                // line 111
                yield "                                        <span class=\"badge bg-light text-dark\">No image</span>
                                    ";
            }
            // line 113
            yield "                                </td>
                                <td class=\"pe-4 text-end\">
                                    <div class=\"d-flex gap-2 justify-content-end\">
                                        <a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistic_delete_back", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-danger btn-sm px-3 py-1 d-flex align-items-center\"
                                           onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                            <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-md-inline\">Delete</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 124
        if (!$context['_iterated']) {
            // line 125
            yield "                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                        <h5 class=\"text-muted\">No logistics items found</h5>
                                        <p class=\"text-muted small\">Add new items to get started</p>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "                    </tbody>
                </table>
            </div>
            
            ";
        // line 139
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 139, $this->source); })())) > 0)) {
            // line 140
            yield "            <div class=\"d-flex justify-content-between align-items-center px-4 pt-3\">
                <div class=\"text-muted small\">
                    Showing <span class=\"fw-semibold\">1</span> to <span class=\"fw-semibold\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 142, $this->source); })())), "html", null, true);
            yield "</span> of <span class=\"fw-semibold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 142, $this->source); })())), "html", null, true);
            yield "</span> entries
                </div>
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination pagination-sm mb-0\">
                        <li class=\"page-item disabled\">
                            <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Previous</a>
                        </li>
                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                        <li class=\"page-item disabled\">
                            <a class=\"page-link\" href=\"#\">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            ";
        }
        // line 157
        yield "        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Search functionality
    const searchInput = document.getElementById('logisticsSearch');
    const logisticsRows = document.querySelectorAll('.logistics-row');
    
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        logisticsRows.forEach(row => {
            let found = false;
            const searchableCells = row.querySelectorAll('.searchable');
            
            searchableCells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(searchTerm)) {
                    found = true;
                }
            });
            
            if (found) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
        
        // Show \"no results\" message if no rows are visible
        const visibleRows = document.querySelectorAll('.logistics-row:not([style*=\"display: none\"])');
        const noResultsRow = document.querySelector('#logisticsTable tbody tr:not(.logistics-row)');
        
        if (visibleRows.length === 0 && logisticsRows.length > 0) {
            if (!noResultsRow) {
                const tbody = document.querySelector('#logisticsTable tbody');
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td colspan=\"10\" class=\"text-center py-5\">
                        <div class=\"d-flex flex-column align-items-center\">
                            <i class=\"fas fa-search fa-3x text-muted mb-3\"></i>
                            <h5 class=\"text-muted\">No matching items found</h5>
                            <p class=\"text-muted small\">Try different search terms</p>
                        </div>
                    </td>
                `;
                tbody.appendChild(tr);
            }
        } else if (noResultsRow) {
            noResultsRow.remove();
        }
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
        return array (  374 => 157,  354 => 142,  350 => 140,  348 => 139,  342 => 135,  327 => 125,  325 => 124,  312 => 116,  307 => 113,  303 => 111,  298 => 109,  291 => 106,  289 => 105,  283 => 102,  277 => 99,  272 => 97,  267 => 95,  262 => 93,  259 => 92,  255 => 90,  249 => 88,  247 => 87,  243 => 85,  237 => 83,  231 => 81,  229 => 80,  224 => 79,  222 => 78,  217 => 76,  214 => 75,  209 => 74,  179 => 47,  172 => 42,  159 => 41,  118 => 219,  116 => 41,  77 => 4,  64 => 3,  41 => 1,);
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
                    id=\"logisticsSearch\"
                    class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                    placeholder=\"Search logistics...\"
                    aria-label=\"Search logistics\" />
                </div>
              </div>
              <!-- /Search -->
            </div>
          </nav>

          <!-- / Navbar -->

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"card shadow-sm border-0\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center border-bottom\">
            <h2 class=\"h5 mb-0 text-primary\"><i class=\"fas fa-truck-loading me-2\"></i>Logistics Management</h2>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('download_transactions') }}\" class=\"btn btn-success d-flex align-items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-excel-fill me-2\" viewBox=\"0 0 16 16\">
                        <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5.884 4.68 8 7.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 8l2.233 2.68a.5.5 0 0 1-.768.64L8 8.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 8 5.116 5.32a.5.5 0 1 1 .768-.64z\"/>
                    </svg>
                    list of transactions
                </a>
            </div>
        </div>
        
        <div class=\"card-body px-0\">
            <div class=\"table-responsive rounded-3\">
                <table class=\"table table-hover align-middle mb-0\" id=\"logisticsTable\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-4 w-5\">#</th>
                            <th class=\"w-10\">Type</th>
                            <th class=\"w-15\">Category</th>
                            <th class=\"w-20\">Name</th>
                            <th class=\"w-5\">Qty</th>
                            <th class=\"w-5\">Capacity</th>
                            <th class=\"w-10\">Price</th>
                            <th class=\"w-15\">Location</th>
                            <th class=\"w-10\">Image</th>
                            <th class=\"pe-4 w-10 text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in logistic %}
                            <tr class=\"logistics-row\">
                                <td class=\"ps-4\"><span class=\"badge bg-secondary\">#{{ item.id }}</span></td>
                                <td class=\"searchable\">
                                    {% if item.type|lower == 'venue' %}
                                        <span class=\"badge rounded-pill\" style=\"background-color: #844062; color: white;\">{{ item.type }}</span>
                                    {% elseif item.type|lower == 'equipment' %}
                                        <span class=\"badge rounded-pill\" style=\"background-color: #3a86ff; color: white;\">{{ item.type }}</span>
                                    {% else %}
                                        <span class=\"badge rounded-pill bg-dark text-white\">{{ item.type }}</span>
                                    {% endif %}
                                </td>
                                <td class=\"searchable\">
                                    {% if item.category %}
                                        <span class=\"badge rounded-pill\" style=\"background-color: #38b000; color: white;\">{{ item.category.name }}</span>
                                    {% else %}
                                        <span class=\"badge rounded-pill bg-light text-dark\">Uncategorized</span>
                                    {% endif %}
                                </td>
                                <td class=\"fw-semibold searchable\">{{ item.nom }}</td>
                                <td class=\"fw-medium searchable\">
                                    <span class=\"badge bg-primary rounded-pill\">{{ item.quantite }}</span>
                                </td>
                                <td class=\"searchable\">{{ item.capacite }}</td>
                                <td class=\"fw-bold searchable\" style=\"color: #2a4365;\">
                                    {{ item.prix|number_format(2) }} <small>Dt</small>
                                </td>
                                <td class=\"searchable\">
                                    <i class=\"fas fa-map-marker-alt text-danger me-1\"></i> {{ item.lieux }}
                                </td>
                                <td>
                                    {% if item.image %}
                                        <img src=\"{{ asset(item.image) }}\" 
                                             class=\"img-thumbnail rounded\" 
                                             style=\"width: 60px; height: 60px; object-fit: cover;\"
                                             alt=\"{{ item.nom }}\">
                                    {% else %}
                                        <span class=\"badge bg-light text-dark\">No image</span>
                                    {% endif %}
                                </td>
                                <td class=\"pe-4 text-end\">
                                    <div class=\"d-flex gap-2 justify-content-end\">
                                        <a href=\"{{ path('app_logistic_delete_back', {id: item.id}) }}\" 
                                           class=\"btn btn-danger btn-sm px-3 py-1 d-flex align-items-center\"
                                           onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                            <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-md-inline\">Delete</span>
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
                                        <p class=\"text-muted small\">Add new items to get started</p>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            
            {% if logistic|length > 0 %}
            <div class=\"d-flex justify-content-between align-items-center px-4 pt-3\">
                <div class=\"text-muted small\">
                    Showing <span class=\"fw-semibold\">1</span> to <span class=\"fw-semibold\">{{ logistic|length }}</span> of <span class=\"fw-semibold\">{{ logistic|length }}</span> entries
                </div>
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination pagination-sm mb-0\">
                        <li class=\"page-item disabled\">
                            <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Previous</a>
                        </li>
                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                        <li class=\"page-item disabled\">
                            <a class=\"page-link\" href=\"#\">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            {% endif %}
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Search functionality
    const searchInput = document.getElementById('logisticsSearch');
    const logisticsRows = document.querySelectorAll('.logistics-row');
    
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        logisticsRows.forEach(row => {
            let found = false;
            const searchableCells = row.querySelectorAll('.searchable');
            
            searchableCells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(searchTerm)) {
                    found = true;
                }
            });
            
            if (found) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
        
        // Show \"no results\" message if no rows are visible
        const visibleRows = document.querySelectorAll('.logistics-row:not([style*=\"display: none\"])');
        const noResultsRow = document.querySelector('#logisticsTable tbody tr:not(.logistics-row)');
        
        if (visibleRows.length === 0 && logisticsRows.length > 0) {
            if (!noResultsRow) {
                const tbody = document.querySelector('#logisticsTable tbody');
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td colspan=\"10\" class=\"text-center py-5\">
                        <div class=\"d-flex flex-column align-items-center\">
                            <i class=\"fas fa-search fa-3x text-muted mb-3\"></i>
                            <h5 class=\"text-muted\">No matching items found</h5>
                            <p class=\"text-muted small\">Try different search terms</p>
                        </div>
                    </td>
                `;
                tbody.appendChild(tr);
            }
        } else if (noResultsRow) {
            noResultsRow.remove();
        }
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
{% endblock %}", "logistics/logisticsBack.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\logistics\\logisticsBack.html.twig");
    }
}
