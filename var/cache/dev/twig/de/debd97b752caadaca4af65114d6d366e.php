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

/* staff/staff.html.twig */
class __TwigTemplate_e7beeb61def18c45eb44358b93e3e535 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/staff.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/staff.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "staff/staff.html.twig", 3);
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
                        id=\"searchInput\"
                        class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                        placeholder=\"Search...\"
                        aria-label=\"Search...\" />
                </div>
            </div>
              <!-- /Search -->
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->
            <div class=\"container-xxl flex-grow-1 container-p-y\" >
              <div class=\"row\" style=\"margin-left: 240px;\">
                <div class=\"col-xxl-8 mb-6 order-0\">
                  <div class=\"card\">
                    <div class=\"d-flex align-items-start row\">
                      <div class=\"col-sm-5 text-center text-sm-left\">
                        <div class=\"d-flex align-items-center\">
                          <!-- Image -->
                          <img
                              src=\"admin/assets/img/illustrations/man-with-laptop.png\"
                              height=\"175\"
                              alt=\"View Badge User\"
                              class=\"ms-11 me-3\" />
                          
                          <h2 class=\"text-body-secondary\">";
        // line 66
        yield (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })())) ? ("Admin") : ("Visitor"));
        yield "</h2>
                      </div>
                    </div>
                  </div>
                </div>
                
                

              
              </div>
            </div>

            <!-- Contextual Classes -->

            <div class=\"card\">
              <div class=\"d-flex justify-content-between align-items-center\">
               
                <div class=\"d-flex align-items-center\">
                  <img src=\"images/imageDefaut1.png\" style=\"width: 40px; height: 30px;\" alt=\"Profile\">
                  <h5 class=\"card-header mb-0\" style=\"color: #844062;\">Eventify Users</h5>
                </div>
                <div class=\"d-flex justify-content-between align-items-center \">
                    <div class=\"btn-group me-3\">
                      <button type=\"button\" class=\"btn\" style=\"background-color: #844062; color: white;\">Filter By</button>
                      <button
                        type=\"button\"
                        class=\"btn dropdown-toggle dropdown-toggle-split\"
                        data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\"
                        style=\"background-color: #844062; color: white;\">
                        <span class=\"visually-hidden\">Toggle Dropdown</span>
                      </button>
                      <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item filter-link\" data-filter=\"firstName\" href=\"javascript:void(0);\">First Name</a></li>
                        <li><a class=\"dropdown-item filter-link\" data-filter=\"email\" href=\"javascript:void(0);\">Email</a></li>
                        <li><a class=\"dropdown-item filter-link\" data-filter=\"dateOfBirth\" href=\"javascript:void(0);\">Date Of Birth</a></li>
                        <li>
                          <hr class=\"dropdown-divider\" />
                        </li>
                        <li><a class=\"dropdown-item filter-link\" data-filter=\"accountStatus\" href=\"javascript:void(0);\">Account Status</a></li>
                      </ul>
                    </div>
                    <a  href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("staff_export");
        yield "\" role=\"button\" >
                      <img src=\"images/exceller.png\" style=\"width: 40px; height: 30px; margin-right:20px;\" alt=\"Profile\">
                  </a>
                </div>
              </div>
              <div class=\"table-responsive text-nowrap\">
                <table class=\"table\" id=\"userTable\">
                  <thead style=\"background-color: #ADC29B; color: white;\">
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Photo</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>Date of Birth</th>
                      <th>Gender</th>
                      <th>CIN</th>
                      <th>Role</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class=\"table-border-bottom-0\">
                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 130, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 131
            yield "                    <tr style=\"background-color: ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 131) % 2 != 0)) {
                yield "#fff";
            } else {
                yield "#e0d6cf";
            }
            yield ";\">
                      <td>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 132), "html", null, true);
            yield "</td>
                      <td>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 133), "html", null, true);
            yield "</td>
                      <td>
                        <img src=\"";
            // line 135
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "img", [], "any", false, false, false, 135)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "img", [], "any", false, false, false, 135), "html", null, true)) : ("admin/assets/img/avatars/default.png"));
            yield "\" alt=\"Avatar\" class=\"rounded-circle\" style=\"width:50px; height:40px;\" />
                      </td>
                      <td>
                        <span class=\"badge ";
            // line 138
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "blocked", [], "any", false, false, false, 138) == 0)) ? ("bg-label-success") : ("bg-label-danger"));
            yield "\">
                          ";
            // line 139
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "blocked", [], "any", false, false, false, 139) == 0)) ? ("Active") : ("Blocked"));
            yield "
                        </span>
                      </td>
                      <td>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>
                      <td>";
            // line 143
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateNaissance", [], "any", false, false, false, 143)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateNaissance", [], "any", false, false, false, 143), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "</td>
                      <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "genre", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                      <td>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 145), "html", null, true);
            yield "</td>
                      <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 146), "html", null, true);
            yield "</td>
                      <td>
                        <div class=\"dropdown\">
                          <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                            <i class=\"icon-base bx bx-dots-vertical-rounded\"></i>
                          </button>
                          <div class=\"dropdown-menu\">
                            <form method=\"post\" action=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_toggle_block", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            yield "\">
                              <button type=\"submit\" class=\"dropdown-item\">
                                ";
            // line 155
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "blocked", [], "any", false, false, false, 155) == 0)) {
                // line 156
                yield "                                <i class=\"icon-base bx bx-block me-1\"></i> Block
                                ";
            } else {
                // line 158
                yield "                                <i class=\"icon-base bx bx-check-circle me-1\"></i> Unblock
                                ";
            }
            // line 160
            yield "                              </button>
                            </form>
                          </div>
                        </div>
                      </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 166
        if (!$context['_iterated']) {
            // line 167
            yield "                    <tr>
                      <td colspan=\"10\" class=\"text-center\">No users found.</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "                  </tbody>
                </table>
              </div>
            </div>
              <!--/ Contextual Classes -->
            <!-- / Content -->

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

    <!--script pour envoyer la requete ajax recherche -->
    <script>
      document.getElementById('searchInput').addEventListener('input', function () {
          const searchTerm = this.value;
    
          // Envoyer une requête AJAX au serveur
          fetch(`/staff/search?q=\${encodeURIComponent(searchTerm)}`)
              .then(response => response.json())
              .then(data => {
                  // Mettre à jour le tableau avec les résultats
                  const tableBody = document.querySelector('#userTable tbody');
                  tableBody.innerHTML = ''; // Vider le tableau
    
                  if (data.length === 0) {
                      tableBody.innerHTML = '<tr><td colspan=\"10\" class=\"text-center\">No users found.</td></tr>';
                  } else {
                    data.forEach(user => {
                      const row = `
                          <tr style=\"background-color: \${data.indexOf(user) % 2 === 0 ? '#fff' : '#e0d6cf'};\">
                              <td>\${user.firstName}</td>
                              <td>\${user.lastName}</td>
                              <td>
                                  <img src=\"\${user.img || 'admin/assets/img/avatars/default.png'}\" alt=\"Avatar\" class=\"rounded-circle\" style=\"width:50px; height:40px;\" />
                              </td>
                              <td>
                                  <span class=\"badge \${user.blocked === 1 ? 'bg-label-danger' : 'bg-label-success'}\">
                                      \${user.blocked === 1 ? 'Blocked' : 'Active'}
                                  </span>
                              </td>
                              <td>\${user.email}</td>
                              <td>\${user.dateOfBirth ? user.dateOfBirth : 'N/A'}</td>
                              <td>\${user.genre}</td>
                              <td>\${user.cin}</td>
                              <td>\${user.role}</td>
                              <td>
                                  <div class=\"dropdown\">
                                      <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                          <i class=\"icon-base bx bx-dots-vertical-rounded\"></i>
                                      </button>
                                      <div class=\"dropdown-menu\">
                                          <form method=\"post\" action=\"/user/toggle-block/\${user.id}\">
                                              <button type=\"submit\" class=\"dropdown-item\">
                                                  \${user.blocked === 1 ? 
                                                      '<i class=\"icon-base bx bx-check-circle me-1\"></i> Unblock' : 
                                                      '<i class=\"icon-base bx bx-block me-1\"></i> Block'}
                                              </button>
                                          </form>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                      `;
                      tableBody.innerHTML += row;
                  });
                  }
              })
              .catch(error => console.error('Error fetching search results:', error));
      });
    </script>

    <!--script pour envoyer la requete ajax filtre -->
    <script>
      document.querySelectorAll('.filter-link').forEach(link => {
        link.addEventListener('click', function () {
          const filterBy = this.getAttribute('data-filter');
      
          // Envoyer une requête AJAX au serveur
          fetch(`/staff/filter?filterBy=\${encodeURIComponent(filterBy)}`)
            .then(response => response.json())
            .then(data => {
              // Mettre à jour le tableau avec les résultats
              const tableBody = document.querySelector('#userTable tbody');
              tableBody.innerHTML = ''; // Vider le tableau
      
              if (data.length === 0) {
                tableBody.innerHTML = '<tr><td colspan=\"10\" class=\"text-center\">No users found.</td></tr>';
              } else {
                data.forEach(user => {
                  const row = `
                    <tr style=\"background-color: \${data.indexOf(user) % 2 === 0 ? '#fff' : '#e0d6cf'};\">
                      <td>\${user.firstName}</td>
                      <td>\${user.lastName}</td>
                      <td>
                        <img src=\"\${user.img || 'admin/assets/img/avatars/default.png'}\" alt=\"Avatar\" class=\"rounded-circle\" style=\"width:50px; height:40px;\" />
                      </td>
                      <td>
                        <span class=\"badge \${user.blocked === 1 ? 'bg-label-danger' : 'bg-label-success'}\">
                          \${user.blocked === 1 ? 'Blocked' : 'Active'}
                        </span>
                      </td>
                      <td>\${user.email}</td>
                      <td>\${user.dateOfBirth ? user.dateOfBirth : 'N/A'}</td>
                      <td>\${user.genre}</td>
                      <td>\${user.cin}</td>
                      <td>\${user.role}</td>
                      <td>
                        <div class=\"dropdown\">
                          <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                            <i class=\"icon-base bx bx-dots-vertical-rounded\"></i>
                          </button>
                          <div class=\"dropdown-menu\">
                            <form method=\"post\" action=\"/user/toggle-block/\${user.id}\">
                              <button type=\"submit\" class=\"dropdown-item\">
                                \${user.blocked === 1 ? 
                                  '<i class=\"icon-base bx bx-check-circle me-1\"></i> Unblock' : 
                                  '<i class=\"icon-base bx bx-block me-1\"></i> Block'}
                              </button>
                            </form>
                          </div>
                        </div>
                      </td>
                    </tr>
                  `;
                  tableBody.innerHTML += row;
                });
              }
            })
            .catch(error => console.error('Error fetching filter results:', error));
        });
      });
    </script>

    <!-- Core JS -->

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
        return "staff/staff.html.twig";
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
        return array (  328 => 171,  319 => 167,  317 => 166,  299 => 160,  295 => 158,  291 => 156,  289 => 155,  284 => 153,  274 => 146,  270 => 145,  266 => 144,  262 => 143,  258 => 142,  252 => 139,  248 => 138,  242 => 135,  237 => 133,  233 => 132,  224 => 131,  206 => 130,  181 => 108,  136 => 66,  76 => 8,  63 => 7,  40 => 3,);
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
                        id=\"searchInput\"
                        class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                        placeholder=\"Search...\"
                        aria-label=\"Search...\" />
                </div>
            </div>
              <!-- /Search -->
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->
            <div class=\"container-xxl flex-grow-1 container-p-y\" >
              <div class=\"row\" style=\"margin-left: 240px;\">
                <div class=\"col-xxl-8 mb-6 order-0\">
                  <div class=\"card\">
                    <div class=\"d-flex align-items-start row\">
                      <div class=\"col-sm-5 text-center text-sm-left\">
                        <div class=\"d-flex align-items-center\">
                          <!-- Image -->
                          <img
                              src=\"admin/assets/img/illustrations/man-with-laptop.png\"
                              height=\"175\"
                              alt=\"View Badge User\"
                              class=\"ms-11 me-3\" />
                          
                          <h2 class=\"text-body-secondary\">{{ user ? 'Admin' : 'Visitor' }}</h2>
                      </div>
                    </div>
                  </div>
                </div>
                
                

              
              </div>
            </div>

            <!-- Contextual Classes -->

            <div class=\"card\">
              <div class=\"d-flex justify-content-between align-items-center\">
               
                <div class=\"d-flex align-items-center\">
                  <img src=\"images/imageDefaut1.png\" style=\"width: 40px; height: 30px;\" alt=\"Profile\">
                  <h5 class=\"card-header mb-0\" style=\"color: #844062;\">Eventify Users</h5>
                </div>
                <div class=\"d-flex justify-content-between align-items-center \">
                    <div class=\"btn-group me-3\">
                      <button type=\"button\" class=\"btn\" style=\"background-color: #844062; color: white;\">Filter By</button>
                      <button
                        type=\"button\"
                        class=\"btn dropdown-toggle dropdown-toggle-split\"
                        data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\"
                        style=\"background-color: #844062; color: white;\">
                        <span class=\"visually-hidden\">Toggle Dropdown</span>
                      </button>
                      <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item filter-link\" data-filter=\"firstName\" href=\"javascript:void(0);\">First Name</a></li>
                        <li><a class=\"dropdown-item filter-link\" data-filter=\"email\" href=\"javascript:void(0);\">Email</a></li>
                        <li><a class=\"dropdown-item filter-link\" data-filter=\"dateOfBirth\" href=\"javascript:void(0);\">Date Of Birth</a></li>
                        <li>
                          <hr class=\"dropdown-divider\" />
                        </li>
                        <li><a class=\"dropdown-item filter-link\" data-filter=\"accountStatus\" href=\"javascript:void(0);\">Account Status</a></li>
                      </ul>
                    </div>
                    <a  href=\"{{ path('staff_export') }}\" role=\"button\" >
                      <img src=\"images/exceller.png\" style=\"width: 40px; height: 30px; margin-right:20px;\" alt=\"Profile\">
                  </a>
                </div>
              </div>
              <div class=\"table-responsive text-nowrap\">
                <table class=\"table\" id=\"userTable\">
                  <thead style=\"background-color: #ADC29B; color: white;\">
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Photo</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>Date of Birth</th>
                      <th>Gender</th>
                      <th>CIN</th>
                      <th>Role</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class=\"table-border-bottom-0\">
                    {% for user in users %}
                    <tr style=\"background-color: {% if loop.index is odd %}#fff{% else %}#e0d6cf{% endif %};\">
                      <td>{{ user.firstName }}</td>
                      <td>{{ user.lastName }}</td>
                      <td>
                        <img src=\"{{ user.img ?: 'admin/assets/img/avatars/default.png' }}\" alt=\"Avatar\" class=\"rounded-circle\" style=\"width:50px; height:40px;\" />
                      </td>
                      <td>
                        <span class=\"badge {{ user.blocked == 0 ? 'bg-label-success' : 'bg-label-danger' }}\">
                          {{ user.blocked == 0 ? 'Active' : 'Blocked' }}
                        </span>
                      </td>
                      <td>{{ user.email }}</td>
                      <td>{{ user.dateNaissance ? user.dateNaissance|date('Y-m-d') : 'N/A' }}</td>
                      <td>{{ user.genre }}</td>
                      <td>{{ user.cin }}</td>
                      <td>{{ user.role }}</td>
                      <td>
                        <div class=\"dropdown\">
                          <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                            <i class=\"icon-base bx bx-dots-vertical-rounded\"></i>
                          </button>
                          <div class=\"dropdown-menu\">
                            <form method=\"post\" action=\"{{ path('app_user_toggle_block', { id: user.id }) }}\">
                              <button type=\"submit\" class=\"dropdown-item\">
                                {% if user.blocked == 0 %}
                                <i class=\"icon-base bx bx-block me-1\"></i> Block
                                {% else %}
                                <i class=\"icon-base bx bx-check-circle me-1\"></i> Unblock
                                {% endif %}
                              </button>
                            </form>
                          </div>
                        </div>
                      </td>
                    </tr>
                    {% else %}
                    <tr>
                      <td colspan=\"10\" class=\"text-center\">No users found.</td>
                    </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
              <!--/ Contextual Classes -->
            <!-- / Content -->

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

    <!--script pour envoyer la requete ajax recherche -->
    <script>
      document.getElementById('searchInput').addEventListener('input', function () {
          const searchTerm = this.value;
    
          // Envoyer une requête AJAX au serveur
          fetch(`/staff/search?q=\${encodeURIComponent(searchTerm)}`)
              .then(response => response.json())
              .then(data => {
                  // Mettre à jour le tableau avec les résultats
                  const tableBody = document.querySelector('#userTable tbody');
                  tableBody.innerHTML = ''; // Vider le tableau
    
                  if (data.length === 0) {
                      tableBody.innerHTML = '<tr><td colspan=\"10\" class=\"text-center\">No users found.</td></tr>';
                  } else {
                    data.forEach(user => {
                      const row = `
                          <tr style=\"background-color: \${data.indexOf(user) % 2 === 0 ? '#fff' : '#e0d6cf'};\">
                              <td>\${user.firstName}</td>
                              <td>\${user.lastName}</td>
                              <td>
                                  <img src=\"\${user.img || 'admin/assets/img/avatars/default.png'}\" alt=\"Avatar\" class=\"rounded-circle\" style=\"width:50px; height:40px;\" />
                              </td>
                              <td>
                                  <span class=\"badge \${user.blocked === 1 ? 'bg-label-danger' : 'bg-label-success'}\">
                                      \${user.blocked === 1 ? 'Blocked' : 'Active'}
                                  </span>
                              </td>
                              <td>\${user.email}</td>
                              <td>\${user.dateOfBirth ? user.dateOfBirth : 'N/A'}</td>
                              <td>\${user.genre}</td>
                              <td>\${user.cin}</td>
                              <td>\${user.role}</td>
                              <td>
                                  <div class=\"dropdown\">
                                      <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                          <i class=\"icon-base bx bx-dots-vertical-rounded\"></i>
                                      </button>
                                      <div class=\"dropdown-menu\">
                                          <form method=\"post\" action=\"/user/toggle-block/\${user.id}\">
                                              <button type=\"submit\" class=\"dropdown-item\">
                                                  \${user.blocked === 1 ? 
                                                      '<i class=\"icon-base bx bx-check-circle me-1\"></i> Unblock' : 
                                                      '<i class=\"icon-base bx bx-block me-1\"></i> Block'}
                                              </button>
                                          </form>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                      `;
                      tableBody.innerHTML += row;
                  });
                  }
              })
              .catch(error => console.error('Error fetching search results:', error));
      });
    </script>

    <!--script pour envoyer la requete ajax filtre -->
    <script>
      document.querySelectorAll('.filter-link').forEach(link => {
        link.addEventListener('click', function () {
          const filterBy = this.getAttribute('data-filter');
      
          // Envoyer une requête AJAX au serveur
          fetch(`/staff/filter?filterBy=\${encodeURIComponent(filterBy)}`)
            .then(response => response.json())
            .then(data => {
              // Mettre à jour le tableau avec les résultats
              const tableBody = document.querySelector('#userTable tbody');
              tableBody.innerHTML = ''; // Vider le tableau
      
              if (data.length === 0) {
                tableBody.innerHTML = '<tr><td colspan=\"10\" class=\"text-center\">No users found.</td></tr>';
              } else {
                data.forEach(user => {
                  const row = `
                    <tr style=\"background-color: \${data.indexOf(user) % 2 === 0 ? '#fff' : '#e0d6cf'};\">
                      <td>\${user.firstName}</td>
                      <td>\${user.lastName}</td>
                      <td>
                        <img src=\"\${user.img || 'admin/assets/img/avatars/default.png'}\" alt=\"Avatar\" class=\"rounded-circle\" style=\"width:50px; height:40px;\" />
                      </td>
                      <td>
                        <span class=\"badge \${user.blocked === 1 ? 'bg-label-danger' : 'bg-label-success'}\">
                          \${user.blocked === 1 ? 'Blocked' : 'Active'}
                        </span>
                      </td>
                      <td>\${user.email}</td>
                      <td>\${user.dateOfBirth ? user.dateOfBirth : 'N/A'}</td>
                      <td>\${user.genre}</td>
                      <td>\${user.cin}</td>
                      <td>\${user.role}</td>
                      <td>
                        <div class=\"dropdown\">
                          <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                            <i class=\"icon-base bx bx-dots-vertical-rounded\"></i>
                          </button>
                          <div class=\"dropdown-menu\">
                            <form method=\"post\" action=\"/user/toggle-block/\${user.id}\">
                              <button type=\"submit\" class=\"dropdown-item\">
                                \${user.blocked === 1 ? 
                                  '<i class=\"icon-base bx bx-check-circle me-1\"></i> Unblock' : 
                                  '<i class=\"icon-base bx bx-block me-1\"></i> Block'}
                              </button>
                            </form>
                          </div>
                        </div>
                      </td>
                    </tr>
                  `;
                  tableBody.innerHTML += row;
                });
              }
            })
            .catch(error => console.error('Error fetching filter results:', error));
        });
      });
    </script>

    <!-- Core JS -->

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
{% endblock %}", "staff/staff.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\staff\\staff.html.twig");
    }
}
