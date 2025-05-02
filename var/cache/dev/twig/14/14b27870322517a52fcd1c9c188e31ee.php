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

/* dashboard/index.html.twig */
class __TwigTemplate_c4a40f8387ac6b99d2e62ff22d3513b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "dashboard/index.html.twig", 3);
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
          <nav class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\" id=\"layout-navbar\">
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

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <div class=\"row\">
                <div class=\"col-xxl-8 mb-6 order-0\">
                  <div class=\"card\">
                    <div class=\"d-flex align-items-start row\">
                      <div class=\"col-sm-7\">
                        <div class=\"card-body\">
                          <h5 class=\"card-title text-primary mb-3\">Congratulations John! 🎉</h5>
                          <p class=\"mb-6\">
                            You have done 72% more sales today.<br />Check your new badge in your profile.
                          </p>

                          <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">View Badges</a>
                        </div>
                      </div>
                      <div class=\"col-sm-5 text-center text-sm-left\">
                        <div class=\"card-body pb-0 px-0 px-md-6\">
                          <img
                            src=\"admin/assets/img/illustrations/man-with-laptop.png\"
                            height=\"175\"
                            alt=\"View Badge User\" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-xxl-4 col-lg-12 col-md-4 order-1\">
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-12 col-6 mb-6\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div class=\"card-title d-flex align-items-start justify-content-between mb-4\">
                            <div class=\"avatar flex-shrink-0\">
                              <img
                                src=\"admin/assets/img/icons/unicons/chart-success.png\"
                                alt=\"chart success\"
                                class=\"rounded\" />
                            </div>
                            <div class=\"dropdown\">
                              <button
                                class=\"btn p-0\"
                                type=\"button\"
                                id=\"cardOpt3\"
                                data-bs-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\">
                                <i class=\"icon-base bx bx-dots-vertical-rounded text-body-secondary\"></i>
                              </button>
                              <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt3\">
                                <a class=\"dropdown-item\" href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff");
        yield "\">View More</a>
                               
                              </div>
                            </div>
                          </div>
                          <p class=\"mb-1\">Total Users</p>
                          
                          <small class=\"text-success fw-medium\"
                            ><i class=\"icon-base bx bx-up-arrow-alt\"></i>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users"]) || array_key_exists("total_users", $context) ? $context["total_users"] : (function () { throw new RuntimeError('Variable "total_users" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12 col-6 mb-6\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div class=\"card-title d-flex align-items-start justify-content-between mb-4\">
                            <div class=\"avatar flex-shrink-0\">
                              <img
                                src=\"admin/assets/img/icons/unicons/wallet-info.png\"
                                alt=\"wallet info\"
                                class=\"rounded\" />
                            </div>
                            <div class=\"dropdown\">
                              <button
                                class=\"btn p-0\"
                                type=\"button\"
                                id=\"cardOpt6\"
                                data-bs-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\">
                                <i class=\"icon-base bx bx-dots-vertical-rounded text-body-secondary\"></i>
                              </button>
                              <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class=\"mb-1\">Sales</p>
                          <h4 class=\"card-title mb-3\">\$4,679</h4>
                          <small class=\"text-success fw-medium\"
                            ><i class=\"icon-base bx bx-up-arrow-alt\"></i> +28.42%</small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class=\"col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6 total-revenue\">
                  <div class=\"card\">
                    <div class=\"row row-bordered g-0\">
                      <div class=\"col-lg-8\">
                        <div class=\"card-header d-flex align-items-center justify-content-between\">
                          <div class=\"card-title mb-0\">
                            <h5 class=\"m-0 me-2\">Total Revenue</h5>
                          </div>
                          <div class=\"dropdown\">
                            <button
                              class=\"btn p-0\"
                              type=\"button\"
                              id=\"totalRevenue\"
                              data-bs-toggle=\"dropdown\"
                              aria-haspopup=\"true\"
                              aria-expanded=\"false\">
                              <i class=\"icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary\"></i>
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"totalRevenue\">
                              <a class=\"dropdown-item\" href=\"javascript:void(0);\">Select All</a>
                              <a class=\"dropdown-item\" href=\"javascript:void(0);\">Refresh</a>
                              <a class=\"dropdown-item\" href=\"javascript:void(0);\">Share</a>
                            </div>
                          </div>
                        </div>
                        <div id=\"totalRevenueChart\" class=\"px-3\"></div>
                      </div>
                      <div class=\"col-lg-4\">
                        <div class=\"card-body px-xl-9 py-12 d-flex align-items-center flex-column\">
                          <div class=\"text-center mb-6\">
                            <div class=\"btn-group\">
                              <button type=\"button\" class=\"btn btn-outline-primary\">
                                <script>
                                  document.write(new Date().getFullYear() - 1);
                                </script>
                              </button>
                              <button
                                type=\"button\"
                                class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\"
                                data-bs-toggle=\"dropdown\"
                                aria-expanded=\"false\">
                                <span class=\"visually-hidden\">Toggle Dropdown</span>
                              </button>
                              <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">2021</a></li>
                                <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">2020</a></li>
                                <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">2019</a></li>
                              </ul>
                            </div>
                          </div>

                          <div id=\"growthChart\"></div>
                          <div class=\"text-center fw-medium my-6\">62% Company Growth</div>

                          <div class=\"d-flex gap-11 justify-content-between\">
                            <div class=\"d-flex\">
                              <div class=\"avatar me-2\">
                                <span class=\"avatar-initial rounded-2 bg-label-primary\"
                                  ><i class=\"icon-base bx bx-dollar icon-lg text-primary\"></i
                                ></span>
                              </div>
                              <div class=\"d-flex flex-column\">
                                <small>
                                  <script>
                                    document.write(new Date().getFullYear() - 1);
                                  </script>
                                </small>
                                <h6 class=\"mb-0\">\$32.5k</h6>
                              </div>
                            </div>
                            <div class=\"d-flex\">
                              <div class=\"avatar me-2\">
                                <span class=\"avatar-initial rounded-2 bg-label-info\"
                                  ><i class=\"icon-base bx bx-wallet icon-lg text-info\"></i
                                ></span>
                              </div>
                              <div class=\"d-flex flex-column\">
                                <small>
                                  <script>
                                    document.write(new Date().getFullYear() - 2);
                                  </script>
                                </small>
                                <h6 class=\"mb-0\">\$41.2k</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class=\"col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2 profile-report\">
                  <div class=\"row\">
                    <div class=\"col-6 mb-6 payments\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div class=\"card-title d-flex align-items-start justify-content-between mb-4\">
                            <div class=\"avatar flex-shrink-0\">
                              <img src=\"admin/assets/img/icons/unicons/paypal.png\" alt=\"paypal\" class=\"rounded\" />
                            </div>
                            <div class=\"dropdown\">
                              <button
                                class=\"btn p-0\"
                                type=\"button\"
                                id=\"cardOpt4\"
                                data-bs-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\">
                                <i class=\"icon-base bx bx-dots-vertical-rounded text-body-secondary\"></i>
                              </button>
                              <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt4\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class=\"mb-1\">Payments</p>
                          <h4 class=\"card-title mb-3\">\$2,456</h4>
                          <small class=\"text-danger fw-medium\"
                            ><i class=\"icon-base bx bx-down-arrow-alt\"></i> -14.82%</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"col-6 mb-6 transactions\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div class=\"card-title d-flex align-items-start justify-content-between mb-4\">
                            <div class=\"avatar flex-shrink-0\">
                              <img src=\"admin/assets/img/icons/unicons/cc-primary.png\" alt=\"Credit Card\" class=\"rounded\" />
                            </div>
                            <div class=\"dropdown\">
                              <button
                                class=\"btn p-0\"
                                type=\"button\"
                                id=\"cardOpt1\"
                                data-bs-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\">
                                <i class=\"icon-base bx bx-dots-vertical-rounded text-body-secondary\"></i>
                              </button>
                              <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class=\"mb-1\">Transactions</p>
                          <h4 class=\"card-title mb-3\">\$14,857</h4>
                          <small class=\"text-success fw-medium\"
                            ><i class=\"icon-base bx bx-up-arrow-alt\"></i> +28.14%</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"col-12 mb-6 profile-report\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div
                            class=\"d-flex justify-content-between align-items-center flex-sm-row flex-column gap-10 flex-wrap\">
                            <div class=\"d-flex flex-sm-column flex-row align-items-start justify-content-between\">
                              <div class=\"card-title mb-6\">
                                <h5 class=\"text-nowrap mb-1\">Profile Report</h5>
                                <span class=\"badge bg-label-warning\">YEAR 2022</span>
                              </div>
                              <div class=\"mt-sm-auto\">
                                <span class=\"text-success text-nowrap fw-medium\"
                                  ><i class=\"icon-base bx bx-up-arrow-alt\"></i> 68.2%</span
                                >
                                <h4 class=\"mb-0\">\$84,686k</h4>
                              </div>
                            </div>
                            <div id=\"profileReportChart\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <!-- user Statistics -->
               
<div class=\"col-md-6 col-lg-4 col-xl-4 order-0 mb-6\">
  <div class=\"card h-100\">
    <div class=\"card-header d-flex justify-content-between\">
      <div class=\"card-title mb-0\">
        <h5 class=\"mb-1 me-2\">Users' Statistics</h5>
        <p class=\"card-subtitle\">Statistics by Role</p>
      </div>
    </div>
    <div class=\"card-body\">
      <div class=\"d-flex justify-content-between align-items-center mb-6\">
        <div class=\"d-flex flex-column align-items-center gap-1\">
          <h3 class=\"mb-1\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 342, $this->source); })()), "html", null, true);
        yield "</h3>
          <small>Total Roles</small>
        </div>
        <!-- Conteneur pour le graphique -->
        <div id=\"userStatisticsChart\" style=\"width: 120px; height: 120px;\"></div>
      </div>
      <ul class=\"p-0 m-0\">
        <li class=\"d-flex align-items-center mb-5\">
          <div class=\"avatar flex-shrink-0 me-3\">
            <span class=\"avatar-initial rounded bg-label-primary\">
              <i class=\"icon-base bx bx-user\"></i>
            </span>
          </div>
          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
            <div class=\"me-2\">
              <h6 class=\"mb-0\">Client</h6>
              <small>Who wanna book an event or an equipment</small>
            </div>
            <div class=\"user-progress\">
              <h6 class=\"mb-0\">";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientCount"]) || array_key_exists("clientCount", $context) ? $context["clientCount"] : (function () { throw new RuntimeError('Variable "clientCount" does not exist.', 361, $this->source); })()), "html", null, true);
        yield "</h6>
            </div>
          </div>
        </li>
        <li class=\"d-flex align-items-center mb-5\">
          <div class=\"avatar flex-shrink-0 me-3\">
            <span class=\"avatar-initial rounded bg-label-success\">
              <i class=\"icon-base bx bx-user\"></i>
            </span>
          </div>
          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
            <div class=\"me-2\">
              <h6 class=\"mb-0\">Partner</h6>
              <small>Who wanna propose equipment or local</small>
            </div>
            <div class=\"user-progress\">
              <h6 class=\"mb-0\">";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["partnerCount"]) || array_key_exists("partnerCount", $context) ? $context["partnerCount"] : (function () { throw new RuntimeError('Variable "partnerCount" does not exist.', 377, $this->source); })()), "html", null, true);
        yield "</h6>
            </div>
          </div>
        </li>
        <li class=\"d-flex align-items-center mb-5\">
          <div class=\"avatar flex-shrink-0 me-3\">
            <span class=\"avatar-initial rounded bg-label-info\">
              <i class=\"icon-base bx bx-user\"></i>
            </span>
          </div>
          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
            <div class=\"me-2\">
              <h6 class=\"mb-0\">Admin</h6>
              <small>The Administrator</small>
            </div>
            <div class=\"user-progress\">
              <h6 class=\"mb-0\">";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["adminCount"]) || array_key_exists("adminCount", $context) ? $context["adminCount"] : (function () { throw new RuntimeError('Variable "adminCount" does not exist.', 393, $this->source); })()), "html", null, true);
        yield "</h6>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class=\"col-md-6 col-lg-4 order-1 mb-6\">
                  <div class=\"card h-100\">
                    <div class=\"card-header nav-align-top\">
                      <ul class=\"nav nav-pills flex-wrap row-gap-2\" role=\"tablist\">
                        <li class=\"nav-item\">
                          <button
                            type=\"button\"
                            class=\"nav-link active\"
                            role=\"tab\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#navs-tabs-line-card-income\"
                            aria-controls=\"navs-tabs-line-card-income\"
                            aria-selected=\"true\">
                            Income
                          </button>
                        </li>
                        <li class=\"nav-item\">
                          <button type=\"button\" class=\"nav-link\" role=\"tab\">Expenses</button>
                        </li>
                        <li class=\"nav-item\">
                          <button type=\"button\" class=\"nav-link\" role=\"tab\">Profit</button>
                        </li>
                      </ul>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"tab-content p-0\">
                        <div class=\"tab-pane fade show active\" id=\"navs-tabs-line-card-income\" role=\"tabpanel\">
                          <div class=\"d-flex mb-6\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                              <img src=\"admin/assets/img/icons/unicons/wallet.png\" alt=\"User\" />
                            </div>
                            <div>
                              <p class=\"mb-0\">Total Balance</p>
                              <div class=\"d-flex align-items-center\">
                                <h6 class=\"mb-0 me-1\">\$459.10</h6>
                                <small class=\"text-success fw-medium\">
                                  <i class=\"icon-base bx bx-chevron-up icon-lg\"></i>
                                  42.9%
                                </small>
                              </div>
                            </div>
                          </div>
                          <div id=\"incomeChart\"></div>
                          <div class=\"d-flex align-items-center justify-content-center mt-6 gap-3\">
                            <div class=\"flex-shrink-0\">
                              <div id=\"expensesOfWeek\"></div>
                            </div>
                            <div>
                              <h6 class=\"mb-0\">Income this week</h6>
                              <small>\$39k less than last week</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class=\"col-md-6 col-lg-4 order-2 mb-6\">
                  <div class=\"card h-100\">
                    <div class=\"card-header d-flex align-items-center justify-content-between\">
                      <h5 class=\"card-title m-0 me-2\">Transactions</h5>
                      <div class=\"dropdown\">
                        <button
                          class=\"btn text-body-secondary p-0\"
                          type=\"button\"
                          id=\"transactionID\"
                          data-bs-toggle=\"dropdown\"
                          aria-haspopup=\"true\"
                          aria-expanded=\"false\">
                          <i class=\"icon-base bx bx-dots-vertical-rounded icon-lg\"></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"transactionID\">
                          <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last 28 Days</a>
                          <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last Month</a>
                          <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class=\"card-body pt-4\">
                      <ul class=\"p-0 m-0\">
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/paypal.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Paypal</small>
                              <h6 class=\"fw-normal mb-0\">Send money</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">+82.6</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/wallet.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Wallet</small>
                              <h6 class=\"fw-normal mb-0\">Mac'D</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">+270.69</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/chart.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Transfer</small>
                              <h6 class=\"fw-normal mb-0\">Refund</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">+637.91</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/cc-primary.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Credit Card</small>
                              <h6 class=\"fw-normal mb-0\">Ordered Food</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">-838.71</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/wallet.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Wallet</small>
                              <h6 class=\"fw-normal mb-0\">Starbucks</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">+203.33</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/cc-warning.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Mastercard</small>
                              <h6 class=\"fw-normal mb-0\">Ordered Food</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">-92.45</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class=\"content-footer footer bg-footer-theme >
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
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var options = {
          series: [";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientCount"]) || array_key_exists("clientCount", $context) ? $context["clientCount"] : (function () { throw new RuntimeError('Variable "clientCount" does not exist.', 624, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["partnerCount"]) || array_key_exists("partnerCount", $context) ? $context["partnerCount"] : (function () { throw new RuntimeError('Variable "partnerCount" does not exist.', 624, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["adminCount"]) || array_key_exists("adminCount", $context) ? $context["adminCount"] : (function () { throw new RuntimeError('Variable "adminCount" does not exist.', 624, $this->source); })()), "html", null, true);
        yield "],
          chart: {
            type: 'donut',
            height: 120
          },
          labels: ['Client', 'Partner', 'Admin'],
          colors: ['#7367F0', '#28C76F', '#00CFE8'],
          legend: {
            show: false
          },
          dataLabels: {
            enabled: true,
            style: {
              colors: ['#000000'] // Définit la couleur du texte en noir
            }
          }
        };
    
        var chart = new ApexCharts(document.querySelector(\"#userStatisticsChart\"), options);
        chart.render();
      });
    </script>

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
        return "dashboard/index.html.twig";
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
        return array (  712 => 624,  478 => 393,  459 => 377,  440 => 361,  418 => 342,  178 => 105,  167 => 97,  76 => 8,  63 => 7,  40 => 3,);
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
          <nav class=\"layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme\" id=\"layout-navbar\">
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

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <div class=\"row\">
                <div class=\"col-xxl-8 mb-6 order-0\">
                  <div class=\"card\">
                    <div class=\"d-flex align-items-start row\">
                      <div class=\"col-sm-7\">
                        <div class=\"card-body\">
                          <h5 class=\"card-title text-primary mb-3\">Congratulations John! 🎉</h5>
                          <p class=\"mb-6\">
                            You have done 72% more sales today.<br />Check your new badge in your profile.
                          </p>

                          <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">View Badges</a>
                        </div>
                      </div>
                      <div class=\"col-sm-5 text-center text-sm-left\">
                        <div class=\"card-body pb-0 px-0 px-md-6\">
                          <img
                            src=\"admin/assets/img/illustrations/man-with-laptop.png\"
                            height=\"175\"
                            alt=\"View Badge User\" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-xxl-4 col-lg-12 col-md-4 order-1\">
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-12 col-6 mb-6\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div class=\"card-title d-flex align-items-start justify-content-between mb-4\">
                            <div class=\"avatar flex-shrink-0\">
                              <img
                                src=\"admin/assets/img/icons/unicons/chart-success.png\"
                                alt=\"chart success\"
                                class=\"rounded\" />
                            </div>
                            <div class=\"dropdown\">
                              <button
                                class=\"btn p-0\"
                                type=\"button\"
                                id=\"cardOpt3\"
                                data-bs-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\">
                                <i class=\"icon-base bx bx-dots-vertical-rounded text-body-secondary\"></i>
                              </button>
                              <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt3\">
                                <a class=\"dropdown-item\" href=\"{{path('app_staff')}}\">View More</a>
                               
                              </div>
                            </div>
                          </div>
                          <p class=\"mb-1\">Total Users</p>
                          
                          <small class=\"text-success fw-medium\"
                            ><i class=\"icon-base bx bx-up-arrow-alt\"></i>{{total_users}}</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12 col-6 mb-6\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div class=\"card-title d-flex align-items-start justify-content-between mb-4\">
                            <div class=\"avatar flex-shrink-0\">
                              <img
                                src=\"admin/assets/img/icons/unicons/wallet-info.png\"
                                alt=\"wallet info\"
                                class=\"rounded\" />
                            </div>
                            <div class=\"dropdown\">
                              <button
                                class=\"btn p-0\"
                                type=\"button\"
                                id=\"cardOpt6\"
                                data-bs-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\">
                                <i class=\"icon-base bx bx-dots-vertical-rounded text-body-secondary\"></i>
                              </button>
                              <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class=\"mb-1\">Sales</p>
                          <h4 class=\"card-title mb-3\">\$4,679</h4>
                          <small class=\"text-success fw-medium\"
                            ><i class=\"icon-base bx bx-up-arrow-alt\"></i> +28.42%</small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class=\"col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6 total-revenue\">
                  <div class=\"card\">
                    <div class=\"row row-bordered g-0\">
                      <div class=\"col-lg-8\">
                        <div class=\"card-header d-flex align-items-center justify-content-between\">
                          <div class=\"card-title mb-0\">
                            <h5 class=\"m-0 me-2\">Total Revenue</h5>
                          </div>
                          <div class=\"dropdown\">
                            <button
                              class=\"btn p-0\"
                              type=\"button\"
                              id=\"totalRevenue\"
                              data-bs-toggle=\"dropdown\"
                              aria-haspopup=\"true\"
                              aria-expanded=\"false\">
                              <i class=\"icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary\"></i>
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"totalRevenue\">
                              <a class=\"dropdown-item\" href=\"javascript:void(0);\">Select All</a>
                              <a class=\"dropdown-item\" href=\"javascript:void(0);\">Refresh</a>
                              <a class=\"dropdown-item\" href=\"javascript:void(0);\">Share</a>
                            </div>
                          </div>
                        </div>
                        <div id=\"totalRevenueChart\" class=\"px-3\"></div>
                      </div>
                      <div class=\"col-lg-4\">
                        <div class=\"card-body px-xl-9 py-12 d-flex align-items-center flex-column\">
                          <div class=\"text-center mb-6\">
                            <div class=\"btn-group\">
                              <button type=\"button\" class=\"btn btn-outline-primary\">
                                <script>
                                  document.write(new Date().getFullYear() - 1);
                                </script>
                              </button>
                              <button
                                type=\"button\"
                                class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\"
                                data-bs-toggle=\"dropdown\"
                                aria-expanded=\"false\">
                                <span class=\"visually-hidden\">Toggle Dropdown</span>
                              </button>
                              <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">2021</a></li>
                                <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">2020</a></li>
                                <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">2019</a></li>
                              </ul>
                            </div>
                          </div>

                          <div id=\"growthChart\"></div>
                          <div class=\"text-center fw-medium my-6\">62% Company Growth</div>

                          <div class=\"d-flex gap-11 justify-content-between\">
                            <div class=\"d-flex\">
                              <div class=\"avatar me-2\">
                                <span class=\"avatar-initial rounded-2 bg-label-primary\"
                                  ><i class=\"icon-base bx bx-dollar icon-lg text-primary\"></i
                                ></span>
                              </div>
                              <div class=\"d-flex flex-column\">
                                <small>
                                  <script>
                                    document.write(new Date().getFullYear() - 1);
                                  </script>
                                </small>
                                <h6 class=\"mb-0\">\$32.5k</h6>
                              </div>
                            </div>
                            <div class=\"d-flex\">
                              <div class=\"avatar me-2\">
                                <span class=\"avatar-initial rounded-2 bg-label-info\"
                                  ><i class=\"icon-base bx bx-wallet icon-lg text-info\"></i
                                ></span>
                              </div>
                              <div class=\"d-flex flex-column\">
                                <small>
                                  <script>
                                    document.write(new Date().getFullYear() - 2);
                                  </script>
                                </small>
                                <h6 class=\"mb-0\">\$41.2k</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class=\"col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2 profile-report\">
                  <div class=\"row\">
                    <div class=\"col-6 mb-6 payments\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div class=\"card-title d-flex align-items-start justify-content-between mb-4\">
                            <div class=\"avatar flex-shrink-0\">
                              <img src=\"admin/assets/img/icons/unicons/paypal.png\" alt=\"paypal\" class=\"rounded\" />
                            </div>
                            <div class=\"dropdown\">
                              <button
                                class=\"btn p-0\"
                                type=\"button\"
                                id=\"cardOpt4\"
                                data-bs-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\">
                                <i class=\"icon-base bx bx-dots-vertical-rounded text-body-secondary\"></i>
                              </button>
                              <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt4\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class=\"mb-1\">Payments</p>
                          <h4 class=\"card-title mb-3\">\$2,456</h4>
                          <small class=\"text-danger fw-medium\"
                            ><i class=\"icon-base bx bx-down-arrow-alt\"></i> -14.82%</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"col-6 mb-6 transactions\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div class=\"card-title d-flex align-items-start justify-content-between mb-4\">
                            <div class=\"avatar flex-shrink-0\">
                              <img src=\"admin/assets/img/icons/unicons/cc-primary.png\" alt=\"Credit Card\" class=\"rounded\" />
                            </div>
                            <div class=\"dropdown\">
                              <button
                                class=\"btn p-0\"
                                type=\"button\"
                                id=\"cardOpt1\"
                                data-bs-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\">
                                <i class=\"icon-base bx bx-dots-vertical-rounded text-body-secondary\"></i>
                              </button>
                              <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class=\"mb-1\">Transactions</p>
                          <h4 class=\"card-title mb-3\">\$14,857</h4>
                          <small class=\"text-success fw-medium\"
                            ><i class=\"icon-base bx bx-up-arrow-alt\"></i> +28.14%</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"col-12 mb-6 profile-report\">
                      <div class=\"card h-100\">
                        <div class=\"card-body\">
                          <div
                            class=\"d-flex justify-content-between align-items-center flex-sm-row flex-column gap-10 flex-wrap\">
                            <div class=\"d-flex flex-sm-column flex-row align-items-start justify-content-between\">
                              <div class=\"card-title mb-6\">
                                <h5 class=\"text-nowrap mb-1\">Profile Report</h5>
                                <span class=\"badge bg-label-warning\">YEAR 2022</span>
                              </div>
                              <div class=\"mt-sm-auto\">
                                <span class=\"text-success text-nowrap fw-medium\"
                                  ><i class=\"icon-base bx bx-up-arrow-alt\"></i> 68.2%</span
                                >
                                <h4 class=\"mb-0\">\$84,686k</h4>
                              </div>
                            </div>
                            <div id=\"profileReportChart\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <!-- user Statistics -->
               
<div class=\"col-md-6 col-lg-4 col-xl-4 order-0 mb-6\">
  <div class=\"card h-100\">
    <div class=\"card-header d-flex justify-content-between\">
      <div class=\"card-title mb-0\">
        <h5 class=\"mb-1 me-2\">Users' Statistics</h5>
        <p class=\"card-subtitle\">Statistics by Role</p>
      </div>
    </div>
    <div class=\"card-body\">
      <div class=\"d-flex justify-content-between align-items-center mb-6\">
        <div class=\"d-flex flex-column align-items-center gap-1\">
          <h3 class=\"mb-1\">{{ totalCount }}</h3>
          <small>Total Roles</small>
        </div>
        <!-- Conteneur pour le graphique -->
        <div id=\"userStatisticsChart\" style=\"width: 120px; height: 120px;\"></div>
      </div>
      <ul class=\"p-0 m-0\">
        <li class=\"d-flex align-items-center mb-5\">
          <div class=\"avatar flex-shrink-0 me-3\">
            <span class=\"avatar-initial rounded bg-label-primary\">
              <i class=\"icon-base bx bx-user\"></i>
            </span>
          </div>
          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
            <div class=\"me-2\">
              <h6 class=\"mb-0\">Client</h6>
              <small>Who wanna book an event or an equipment</small>
            </div>
            <div class=\"user-progress\">
              <h6 class=\"mb-0\">{{ clientCount }}</h6>
            </div>
          </div>
        </li>
        <li class=\"d-flex align-items-center mb-5\">
          <div class=\"avatar flex-shrink-0 me-3\">
            <span class=\"avatar-initial rounded bg-label-success\">
              <i class=\"icon-base bx bx-user\"></i>
            </span>
          </div>
          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
            <div class=\"me-2\">
              <h6 class=\"mb-0\">Partner</h6>
              <small>Who wanna propose equipment or local</small>
            </div>
            <div class=\"user-progress\">
              <h6 class=\"mb-0\">{{ partnerCount }}</h6>
            </div>
          </div>
        </li>
        <li class=\"d-flex align-items-center mb-5\">
          <div class=\"avatar flex-shrink-0 me-3\">
            <span class=\"avatar-initial rounded bg-label-info\">
              <i class=\"icon-base bx bx-user\"></i>
            </span>
          </div>
          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
            <div class=\"me-2\">
              <h6 class=\"mb-0\">Admin</h6>
              <small>The Administrator</small>
            </div>
            <div class=\"user-progress\">
              <h6 class=\"mb-0\">{{ adminCount }}</h6>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class=\"col-md-6 col-lg-4 order-1 mb-6\">
                  <div class=\"card h-100\">
                    <div class=\"card-header nav-align-top\">
                      <ul class=\"nav nav-pills flex-wrap row-gap-2\" role=\"tablist\">
                        <li class=\"nav-item\">
                          <button
                            type=\"button\"
                            class=\"nav-link active\"
                            role=\"tab\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#navs-tabs-line-card-income\"
                            aria-controls=\"navs-tabs-line-card-income\"
                            aria-selected=\"true\">
                            Income
                          </button>
                        </li>
                        <li class=\"nav-item\">
                          <button type=\"button\" class=\"nav-link\" role=\"tab\">Expenses</button>
                        </li>
                        <li class=\"nav-item\">
                          <button type=\"button\" class=\"nav-link\" role=\"tab\">Profit</button>
                        </li>
                      </ul>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"tab-content p-0\">
                        <div class=\"tab-pane fade show active\" id=\"navs-tabs-line-card-income\" role=\"tabpanel\">
                          <div class=\"d-flex mb-6\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                              <img src=\"admin/assets/img/icons/unicons/wallet.png\" alt=\"User\" />
                            </div>
                            <div>
                              <p class=\"mb-0\">Total Balance</p>
                              <div class=\"d-flex align-items-center\">
                                <h6 class=\"mb-0 me-1\">\$459.10</h6>
                                <small class=\"text-success fw-medium\">
                                  <i class=\"icon-base bx bx-chevron-up icon-lg\"></i>
                                  42.9%
                                </small>
                              </div>
                            </div>
                          </div>
                          <div id=\"incomeChart\"></div>
                          <div class=\"d-flex align-items-center justify-content-center mt-6 gap-3\">
                            <div class=\"flex-shrink-0\">
                              <div id=\"expensesOfWeek\"></div>
                            </div>
                            <div>
                              <h6 class=\"mb-0\">Income this week</h6>
                              <small>\$39k less than last week</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class=\"col-md-6 col-lg-4 order-2 mb-6\">
                  <div class=\"card h-100\">
                    <div class=\"card-header d-flex align-items-center justify-content-between\">
                      <h5 class=\"card-title m-0 me-2\">Transactions</h5>
                      <div class=\"dropdown\">
                        <button
                          class=\"btn text-body-secondary p-0\"
                          type=\"button\"
                          id=\"transactionID\"
                          data-bs-toggle=\"dropdown\"
                          aria-haspopup=\"true\"
                          aria-expanded=\"false\">
                          <i class=\"icon-base bx bx-dots-vertical-rounded icon-lg\"></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"transactionID\">
                          <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last 28 Days</a>
                          <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last Month</a>
                          <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class=\"card-body pt-4\">
                      <ul class=\"p-0 m-0\">
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/paypal.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Paypal</small>
                              <h6 class=\"fw-normal mb-0\">Send money</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">+82.6</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/wallet.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Wallet</small>
                              <h6 class=\"fw-normal mb-0\">Mac'D</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">+270.69</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/chart.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Transfer</small>
                              <h6 class=\"fw-normal mb-0\">Refund</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">+637.91</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/cc-primary.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Credit Card</small>
                              <h6 class=\"fw-normal mb-0\">Ordered Food</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">-838.71</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center mb-6\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/wallet.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Wallet</small>
                              <h6 class=\"fw-normal mb-0\">Starbucks</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">+203.33</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class=\"d-flex align-items-center\">
                          <div class=\"avatar flex-shrink-0 me-3\">
                            <img src=\"admin/assets/img/icons/unicons/cc-warning.png\" alt=\"User\" class=\"rounded\" />
                          </div>
                          <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                            <div class=\"me-2\">
                              <small class=\"d-block\">Mastercard</small>
                              <h6 class=\"fw-normal mb-0\">Ordered Food</h6>
                            </div>
                            <div class=\"user-progress d-flex align-items-center gap-2\">
                              <h6 class=\"fw-normal mb-0\">-92.45</h6>
                              <span class=\"text-body-secondary\">USD</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class=\"content-footer footer bg-footer-theme >
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
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var options = {
          series: [{{ clientCount }}, {{ partnerCount }}, {{ adminCount }}],
          chart: {
            type: 'donut',
            height: 120
          },
          labels: ['Client', 'Partner', 'Admin'],
          colors: ['#7367F0', '#28C76F', '#00CFE8'],
          legend: {
            show: false
          },
          dataLabels: {
            enabled: true,
            style: {
              colors: ['#000000'] // Définit la couleur du texte en noir
            }
          }
        };
    
        var chart = new ApexCharts(document.querySelector(\"#userStatisticsChart\"), options);
        chart.render();
      });
    </script>

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
{% endblock %}", "dashboard/index.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\dashboard\\index.html.twig");
    }
}
