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

/* complaints/showback.html.twig */
class __TwigTemplate_b116727466e988c2c05554bef172fb5f extends Template
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
        // line 3
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complaints/showback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complaints/showback.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "complaints/showback.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
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

        // line 8
        yield "
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



<section class=\"reclamation-list\">
    <div class=\"container\">
        <h2 class=\"mb-4\">Reclamation List</h2>
        
        <div class=\"accordion\" id=\"reclamationsAccordion\">
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 58
            yield "                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\" id=\"heading";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\">
                        <button class=\"accordion-button collapsed\" 
                                type=\"button\" 
                                data-bs-toggle=\"collapse\" 
                                data-bs-target=\"#collapse";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\" 
                                aria-expanded=\"false\" 
                                aria-controls=\"collapse";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\"
                                data-id=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\"
                                data-update-url=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_update_status");
            yield "\"
                                data-csrf-token=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("update_reclamation_" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 68))), "html", null, true);
            yield "\">
                            <span class=\"badge bg-";
            // line 69
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statu", [], "any", false, false, false, 69) == "Resolved")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 70
$context["reclamation"], "statu", [], "any", false, false, false, 70) == "In Progress")) ? ("warning") : ("danger"))));
            yield " me-2\">
                                ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statu", [], "any", false, false, false, 71), "html", null, true);
            yield "
                            </span>
                            ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 73), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 73), "Y-m-d"), "html", null, true);
            yield ")
                        </button>
                    </h2>
                    <div id=\"collapse";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "\" 
                         class=\"accordion-collapse collapse\" 
                         aria-labelledby=\"heading";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield "\" 
                         data-bs-parent=\"#reclamationsAccordion\">
                        <div class=\"accordion-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <p><strong>Subject:</strong> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 83), "html", null, true);
            yield "</p>
                                    <p><strong>Description:</strong> ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
                                    <p><strong>Date:</strong> ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 85), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                                    
                                    <!-- Simple Response Form -->
<form class=\"response-form mt-3\" 
      action=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" 
      method=\"POST\"
      onsubmit=\"submitResponse(event, this)\">
    
    <textarea name=\"text\" class=\"form-control mb-2\"></textarea>
    
    <div class=\"error-messages text-danger mb-2\" style=\"display:none;\"></div>
    
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reponse"), "html", null, true);
            yield "\">
    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Submit</button>
</form>

<script>
function submitResponse(event, form) {
    event.preventDefault();
    
    fetch(form.action, {
        method: 'POST',
        body: new FormData(form)
    })
    .then(response => response.json())
    .then(data => {
        if (!data.success) {
            const errorDiv = form.querySelector('.error-messages');
            errorDiv.innerHTML = data.errors.join('<br>');
            errorDiv.style.display = 'block';
            form.querySelector('textarea').classList.add('is-invalid');
        } else {
            window.location.reload(); // Success!
        }
    });
}
</script>
                                </div>
                                <div class=\"col-md-4\">
                                    ";
            // line 124
            if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "imgRec", [], "any", false, false, false, 124)) {
                // line 125
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "imgRec", [], "any", false, false, false, 125))), "html", null, true);
                yield "\" 
                                             alt=\"Reclamation Image\" class=\"img-fluid rounded mb-3\">
                                    ";
            } else {
                // line 128
                yield "                                        <div class=\"alert alert-secondary\">No Image</div>
                                    ";
            }
            // line 130
            yield "                                </div>
                            </div>
                            
                            <!-- Responses List -->
                            <div class=\"responses mt-4\">
                                ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 135));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 136
                yield "                                    <div class=\"card mb-2\">
                                        <div class=\"card-body\">
                                            <p>";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "text", [], "any", false, false, false, 138), "html", null, true);
                yield "</p>
                                            <small class=\"text-muted\">
                                                 ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "date", [], "any", false, false, false, 140), "Y-m-d H:i"), "html", null, true);
                yield "
                                            </small>
                                        </div>
                                    </div>
                                ";
                $context['_iterated'] = true;
            }
            // line 144
            if (!$context['_iterated']) {
                // line 145
                yield "                                    <div class=\"alert alert-info\">No responses yet</div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['response'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            yield "                            </div>
                            
                            ";
            // line 150
            yield "                            <div class=\"d-flex justify-content-end mt-3\">
                                <!-- Keep your existing action buttons here -->
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 156
        if (!$context['_iterated']) {
            // line 157
            yield "                <div class=\"alert alert-info\">No reclamations found.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "        </div>
    </div>

    <!-- Simple JavaScript at the bottom -->
    >
</section>


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
                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style =\"color : #844062\">Eventify</a>
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
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <script> document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(button => {
        // Track if update is in progress
        let isUpdating = false;
        
        button.addEventListener('click', async function(e) {
            // Only handle when expanding (not collapsing)
            if (!this.classList.contains('collapsed') || isUpdating) {
                return;
            }
            
            isUpdating = true;
            const target = this.dataset.bsTarget;
            const collapse = bootstrap.Collapse.getOrCreateInstance(document.querySelector(target));
            
            try {
                // Show loading state
                const originalHtml = this.innerHTML;
                this.innerHTML = `<span class=\"spinner-border spinner-border-sm\"></span>`;
                this.disabled = true;
                
                // Get data attributes
                const reclamationId = this.dataset.id;
                const updateUrl = this.dataset.updateUrl;
                const csrfToken = this.dataset.csrfToken;
                
                // Validate required data
                if (!reclamationId || !updateUrl || !csrfToken) {
                    throw new Error('Missing required data attributes');
                }
                
                // Prepare form data
                const formData = new FormData();
                formData.append('id', reclamationId);
                formData.append('status', 'In Progress');
                formData.append('_token', csrfToken);
                
                // Send update request
                const response = await fetch(updateUrl, {
                    method: 'POST',
                    body: formData
                });
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: \${response.status}`);
                }
                
                const data = await response.json();
                
                if (data.success) {
                    // Update badge
                    const badge = this.querySelector('.badge');
                    if (badge) {
                        badge.textContent = data.newStatus;
                        badge.className = `badge \${data.badgeClass} me-2`;
                    }
                    
                    // Toggle accordion after successful update
                    collapse.toggle();
                } else {
                    throw new Error(data.message || 'Update failed');
                }
            } catch (error) {
                console.error('Update error:', error);
                showAlert(`Error: \${error.message}`, 'danger');
            } finally {
                isUpdating = false;
                this.disabled = false;
                // Don't restore HTML to maintain visual state
            }
        });
    });
    
    function showAlert(message, type) {
        const alert = document.createElement('div');
        alert.className = `alert alert-\${type} alert-dismissible fade show position-fixed top-0 end-0 m-3`;
        alert.style.zIndex = '1100';
        alert.innerHTML = `
            \${message}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        `;
        document.body.appendChild(alert);
        
        // Auto-dismiss after 5 seconds
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    }
});
fetch(updateUrl, {
  method: 'POST',
  body: formData
})
.then(async response => {
  const text = await response.text();
  console.log('Raw response:', text);
  
  try {
    const data = JSON.parse(text);
    if (!response.ok) {
      throw new Error(data.message || 'Request failed');
    }
    return data;
  } catch (e) {
    throw new Error(`Invalid JSON: \${text}`);
  }
})
.then(data => {
  console.log('Parsed response:', data);
  // Handle response
})
.catch(error => {
  console.error('Fetch error:', error);
  showAlert(error.message, 'danger');
});</script>
    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>

    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>

    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>

    <script src=\"admin/assets/vendor/js/menu.js\"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>

    <!-- Main JS -->

    <script src=\"admin/assets/js/main.js\"></script>

    <!-- Page JS -->
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
  </body>
</html>
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
        return "complaints/showback.html.twig";
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
        return array (  325 => 159,  318 => 157,  316 => 156,  306 => 150,  302 => 147,  295 => 145,  293 => 144,  284 => 140,  279 => 138,  275 => 136,  270 => 135,  263 => 130,  259 => 128,  252 => 125,  250 => 124,  220 => 97,  209 => 89,  202 => 85,  198 => 84,  194 => 83,  186 => 78,  181 => 76,  173 => 73,  168 => 71,  164 => 70,  163 => 69,  159 => 68,  155 => 67,  151 => 66,  147 => 65,  142 => 63,  135 => 59,  132 => 58,  127 => 57,  76 => 8,  63 => 7,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{%extends \"baseAdmin.html.twig\" %}



{%block content %}

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



<section class=\"reclamation-list\">
    <div class=\"container\">
        <h2 class=\"mb-4\">Reclamation List</h2>
        
        <div class=\"accordion\" id=\"reclamationsAccordion\">
            {% for reclamation in reclamations %}
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\" id=\"heading{{ reclamation.id }}\">
                        <button class=\"accordion-button collapsed\" 
                                type=\"button\" 
                                data-bs-toggle=\"collapse\" 
                                data-bs-target=\"#collapse{{ reclamation.id }}\" 
                                aria-expanded=\"false\" 
                                aria-controls=\"collapse{{ reclamation.id }}\"
                                data-id=\"{{ reclamation.id }}\"
                                data-update-url=\"{{ path('reclamation_update_status') }}\"
                                data-csrf-token=\"{{ csrf_token('update_reclamation_' ~ reclamation.id) }}\">
                            <span class=\"badge bg-{{ reclamation.statu == 'Resolved' ? 'success' : 
                                  (reclamation.statu == 'In Progress' ? 'warning' : 'danger') }} me-2\">
                                {{ reclamation.statu }}
                            </span>
                            {{ reclamation.titre }} ({{ reclamation.date|date('Y-m-d') }})
                        </button>
                    </h2>
                    <div id=\"collapse{{ reclamation.id }}\" 
                         class=\"accordion-collapse collapse\" 
                         aria-labelledby=\"heading{{ reclamation.id }}\" 
                         data-bs-parent=\"#reclamationsAccordion\">
                        <div class=\"accordion-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <p><strong>Subject:</strong> {{ reclamation.sujet }}</p>
                                    <p><strong>Description:</strong> {{ reclamation.sujet }}</p>
                                    <p><strong>Date:</strong> {{ reclamation.date|date('Y-m-d H:i') }}</p>
                                    
                                    <!-- Simple Response Form -->
<form class=\"response-form mt-3\" 
      action=\"{{ path('reponse_add', {'id': reclamation.id}) }}\" 
      method=\"POST\"
      onsubmit=\"submitResponse(event, this)\">
    
    <textarea name=\"text\" class=\"form-control mb-2\"></textarea>
    
    <div class=\"error-messages text-danger mb-2\" style=\"display:none;\"></div>
    
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reponse') }}\">
    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Submit</button>
</form>

<script>
function submitResponse(event, form) {
    event.preventDefault();
    
    fetch(form.action, {
        method: 'POST',
        body: new FormData(form)
    })
    .then(response => response.json())
    .then(data => {
        if (!data.success) {
            const errorDiv = form.querySelector('.error-messages');
            errorDiv.innerHTML = data.errors.join('<br>');
            errorDiv.style.display = 'block';
            form.querySelector('textarea').classList.add('is-invalid');
        } else {
            window.location.reload(); // Success!
        }
    });
}
</script>
                                </div>
                                <div class=\"col-md-4\">
                                    {% if reclamation.imgRec %}
                                        <img src=\"{{ asset('uploads/' ~ reclamation.imgRec) }}\" 
                                             alt=\"Reclamation Image\" class=\"img-fluid rounded mb-3\">
                                    {% else %}
                                        <div class=\"alert alert-secondary\">No Image</div>
                                    {% endif %}
                                </div>
                            </div>
                            
                            <!-- Responses List -->
                            <div class=\"responses mt-4\">
                                {% for response in reclamation.reponses %}
                                    <div class=\"card mb-2\">
                                        <div class=\"card-body\">
                                            <p>{{ response.text }}</p>
                                            <small class=\"text-muted\">
                                                 {{ response.date|date('Y-m-d H:i') }}
                                            </small>
                                        </div>
                                    </div>
                                {% else %}
                                    <div class=\"alert alert-info\">No responses yet</div>
                                {% endfor %}
                            </div>
                            
                            {# Admin actions #}
                            <div class=\"d-flex justify-content-end mt-3\">
                                <!-- Keep your existing action buttons here -->
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"alert alert-info\">No reclamations found.</div>
            {% endfor %}
        </div>
    </div>

    <!-- Simple JavaScript at the bottom -->
    >
</section>


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
                    <a href=\"#\" target=\"_blank\" class=\"footer-link\" style =\"color : #844062\">Eventify</a>
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
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <script> document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(button => {
        // Track if update is in progress
        let isUpdating = false;
        
        button.addEventListener('click', async function(e) {
            // Only handle when expanding (not collapsing)
            if (!this.classList.contains('collapsed') || isUpdating) {
                return;
            }
            
            isUpdating = true;
            const target = this.dataset.bsTarget;
            const collapse = bootstrap.Collapse.getOrCreateInstance(document.querySelector(target));
            
            try {
                // Show loading state
                const originalHtml = this.innerHTML;
                this.innerHTML = `<span class=\"spinner-border spinner-border-sm\"></span>`;
                this.disabled = true;
                
                // Get data attributes
                const reclamationId = this.dataset.id;
                const updateUrl = this.dataset.updateUrl;
                const csrfToken = this.dataset.csrfToken;
                
                // Validate required data
                if (!reclamationId || !updateUrl || !csrfToken) {
                    throw new Error('Missing required data attributes');
                }
                
                // Prepare form data
                const formData = new FormData();
                formData.append('id', reclamationId);
                formData.append('status', 'In Progress');
                formData.append('_token', csrfToken);
                
                // Send update request
                const response = await fetch(updateUrl, {
                    method: 'POST',
                    body: formData
                });
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: \${response.status}`);
                }
                
                const data = await response.json();
                
                if (data.success) {
                    // Update badge
                    const badge = this.querySelector('.badge');
                    if (badge) {
                        badge.textContent = data.newStatus;
                        badge.className = `badge \${data.badgeClass} me-2`;
                    }
                    
                    // Toggle accordion after successful update
                    collapse.toggle();
                } else {
                    throw new Error(data.message || 'Update failed');
                }
            } catch (error) {
                console.error('Update error:', error);
                showAlert(`Error: \${error.message}`, 'danger');
            } finally {
                isUpdating = false;
                this.disabled = false;
                // Don't restore HTML to maintain visual state
            }
        });
    });
    
    function showAlert(message, type) {
        const alert = document.createElement('div');
        alert.className = `alert alert-\${type} alert-dismissible fade show position-fixed top-0 end-0 m-3`;
        alert.style.zIndex = '1100';
        alert.innerHTML = `
            \${message}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        `;
        document.body.appendChild(alert);
        
        // Auto-dismiss after 5 seconds
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    }
});
fetch(updateUrl, {
  method: 'POST',
  body: formData
})
.then(async response => {
  const text = await response.text();
  console.log('Raw response:', text);
  
  try {
    const data = JSON.parse(text);
    if (!response.ok) {
      throw new Error(data.message || 'Request failed');
    }
    return data;
  } catch (e) {
    throw new Error(`Invalid JSON: \${text}`);
  }
})
.then(data => {
  console.log('Parsed response:', data);
  // Handle response
})
.catch(error => {
  console.error('Fetch error:', error);
  showAlert(error.message, 'danger');
});</script>
    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>

    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>

    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>

    <script src=\"admin/assets/vendor/js/menu.js\"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=\"admin/assets/vendor/libs/apex-charts/apexcharts.js\"></script>

    <!-- Main JS -->

    <script src=\"admin/assets/js/main.js\"></script>

    <!-- Page JS -->
    <script src=\"admin/assets/js/dashboards-analytics.js\"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
  </body>
</html>
{% endblock %}", "complaints/showback.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\complaints\\showback.html.twig");
    }
}
