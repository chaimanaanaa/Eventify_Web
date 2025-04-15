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

/* forums/forumsBack.html.twig */
class __TwigTemplate_80df71830533a5f5e9429ee16446598e extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/forumsBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/forumsBack.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "forums/forumsBack.html.twig", 1);
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
        yield "  <!-- Layout wrapper -->
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
                  id=\"dynamicSearchInput\"
                  class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                  placeholder=\"Search...\"
                  aria-label=\"Search...\"
                  value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "query", [], "any", false, false, false, 28), "get", ["search"], "method", false, false, false, 28), "html", null, true);
        yield "\"
                />
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
            <div class=\"d-flex justify-content-between align-items-center\">
              <h4 class=\"fw-bold py-3 mb-4\">Gestion des forums</h4>
              <div>
                <button onclick=\"showStatistics()\" class=\"btn btn-info mb-4 me-2\">
                  <i class=\"fas fa-chart-bar me-1\"></i> Statistiques
                </button>
                <button onclick=\"generateAllForumsPDF()\" class=\"btn btn-primary mb-4\">
                  <i class=\"fas fa-file-pdf me-1\"></i> Exporter PDF
                </button>
              </div>
            </div>

            <!-- Section Statistiques -->
            <div id=\"statisticsSection\" class=\"mb-4\" style=\"display: none;\">
              <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                  <h5 class=\"card-title mb-0\">Statistiques des forums</h5>
                  <button onclick=\"refreshStatistics()\" class=\"btn btn-sm btn-outline-primary\">
                    <i class=\"fas fa-sync-alt me-1\"></i> Actualiser
                  </button>
                </div>
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col-md-6\">
                      <div class=\"card mb-4\">
                        <div class=\"card-header\">
                          <h6 class=\"mb-0\">Répartition par catégorie</h6>
                        </div>
                        <div class=\"card-body\">
                          <canvas id=\"categoryChart\" height=\"250\"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-md-6\">
                      <div class=\"card mb-4\">
                        <div class=\"card-header\">
                          <h6 class=\"mb-0\">Activité des 7 derniers jours</h6>
                        </div>
                        <div class=\"card-body\">
                          <canvas id=\"activityChart\" height=\"250\"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-md-4\">
                      <div class=\"card mb-4\">
                        <div class=\"card-body text-center\">
                          <h3 class=\"mb-1\" id=\"totalForums\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 89, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-muted mb-0\">Forums créés</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-md-4\">
                      <div class=\"card mb-4\">
                        <div class=\"card-body text-center\">
                          <h3 class=\"mb-1\" id=\"totalComments\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 97, $this->source); })()), function ($__sum__, $__forum__) use ($context, $macros) { $context["sum"] = $__sum__; $context["forum"] = $__forum__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 97, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 97, $this->source); })()), "comments", [], "any", false, false, false, 97))); }, 0), "html", null, true);
        yield "</h3>
                          <p class=\"text-muted mb-0\">Commentaires</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-md-4\">
                      <div class=\"card mb-4\">
                        <div class=\"card-body text-center\">
                          <h3 class=\"mb-1\" id=\"todayForums\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 105, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 105, $this->source); })()), "date", [], "any", false, false, false, 105), "Y-m-d") == $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")); })), "html", null, true);
        yield "</h3>
                          <p class=\"text-muted mb-0\">Aujourd'hui</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Filtres et recherche -->
            <div class=\"row mb-4\">
              <div class=\"col-12 d-flex justify-content-center\">
                <div class=\"btn-group\" role=\"group\">
                  <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forumsBack");
        yield "\" 
                    class=\"btn ";
        // line 120
        yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "request", [], "any", false, false, false, 120), "query", [], "any", false, false, false, 120), "has", ["category"], "method", false, false, false, 120)) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\" 
                    style=\"";
        // line 121
        yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "query", [], "any", false, false, false, 121), "has", ["category"], "method", false, false, false, 121)) ? ("background-color: #844062; border-color: #844062;") : ("color: #844062; border-color: #844062;"));
        yield " width: auto;\">
                    All
                  </a>
                  <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forumsBack", ["category" => "Mariage"]);
        yield "\" 
                    class=\"btn ";
        // line 125
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "request", [], "any", false, false, false, 125), "query", [], "any", false, false, false, 125), "get", ["category"], "method", false, false, false, 125) == "Mariage")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\" 
                    style=\"";
        // line 126
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "query", [], "any", false, false, false, 126), "get", ["category"], "method", false, false, false, 126) == "Mariage")) ? ("background-color: #844062; border-color: #844062;") : ("color: #844062; border-color: #844062;"));
        yield " width: auto;\">
                    Mariage
                  </a>
                  <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forumsBack", ["category" => "Anniversaire"]);
        yield "\" 
                    class=\"btn ";
        // line 130
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "request", [], "any", false, false, false, 130), "query", [], "any", false, false, false, 130), "get", ["category"], "method", false, false, false, 130) == "Anniversaire")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\" 
                    style=\"";
        // line 131
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "query", [], "any", false, false, false, 131), "get", ["category"], "method", false, false, false, 131) == "Anniversaire")) ? ("background-color: #844062; border-color: #844062;") : ("color: #844062; border-color: #844062;"));
        yield " width: auto;\">
                    Anniversaire
                  </a>
                  <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forumsBack", ["category" => "Graduation"]);
        yield "\" 
                    class=\"btn ";
        // line 135
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "query", [], "any", false, false, false, 135), "get", ["category"], "method", false, false, false, 135) == "Graduation")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\" 
                    style=\"";
        // line 136
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "query", [], "any", false, false, false, 136), "get", ["category"], "method", false, false, false, 136) == "Graduation")) ? ("background-color: #844062; border-color: #844062;") : ("color: #844062; border-color: #844062;"));
        yield " width: auto;\">
                    Graduation
                  </a>
                  <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forumsBack", ["category" => "Baby_Shower"]);
        yield "\" 
                    class=\"btn ";
        // line 140
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "query", [], "any", false, false, false, 140), "get", ["category"], "method", false, false, false, 140) == "Baby_Shower")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\" 
                    style=\"";
        // line 141
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "request", [], "any", false, false, false, 141), "query", [], "any", false, false, false, 141), "get", ["category"], "method", false, false, false, 141) == "Baby_Shower")) ? ("background-color: #844062; border-color: #844062;") : ("color: #844062; border-color: #844062;"));
        yield " width: auto;\">
                    Baby Shower
                  </a>
                </div>
              </div>
            </div>

            <div class=\"row mb-4\">
              <div class=\"col-md-6 offset-md-3\">
                <form method=\"GET\" action=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forumsBack");
        yield "\" class=\"d-flex align-items-center justify-content-center\">
                  ";
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "query", [], "any", false, false, false, 151), "get", ["category"], "method", false, false, false, 151)) {
            // line 152
            yield "                    <input type=\"hidden\" name=\"category\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "query", [], "any", false, false, false, 152), "get", ["category"], "method", false, false, false, 152), "html", null, true);
            yield "\">
                  ";
        }
        // line 154
        yield "                  <label for=\"sort\" class=\"me-2 text-nowrap\">
                    <i class=\"fas fa-sort me-1\"></i>Sort by:
                  </label>
                  <select name=\"sort\" id=\"sort\" class=\"form-select\" style=\"border-color: #844062;\" onchange=\"this.form.submit()\">
                    <option value=\"newest\" ";
        // line 158
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "request", [], "any", false, false, false, 158), "query", [], "any", false, false, false, 158), "get", ["sort"], "method", false, false, false, 158) == "newest")) ? ("selected") : (""));
        yield ">Newest</option>
                    <option value=\"oldest\" ";
        // line 159
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "request", [], "any", false, false, false, 159), "query", [], "any", false, false, false, 159), "get", ["sort"], "method", false, false, false, 159) == "oldest")) ? ("selected") : (""));
        yield ">Oldest</option>
                    <option value=\"popular\" ";
        // line 160
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, false, 160), "query", [], "any", false, false, false, 160), "get", ["sort"], "method", false, false, false, 160) == "popular")) ? ("selected") : (""));
        yield ">Popular</option>
                  </select>
                </form>
              </div>
            </div>

            <!-- Liste des forums -->
            <div class=\"row justify-content-center\" id=\"forumsList\">
              ";
        // line 168
        if ((array_key_exists("forums", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 168, $this->source); })())))) {
            // line 169
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 169, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 170
                yield "                  <div class=\"col-lg-8 col-md-10 mb-4\">
                    <div class=\"card shadow-lg forum-card pdf-export-content\" data-id=\"";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 171), "html", null, true);
                yield "\">
                      <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                        <h3 class=\"h5 mb-0\">";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 173)), "html", null, true);
                yield "</h3>
                        <div>
                          <button onclick=\"generateForumPDF(";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 175), "html", null, true);
                yield ")\" class=\"btn btn-sm btn-pdf me-2\">
                            <i class=\"fas fa-file-pdf me-1\"></i> PDF
                          </button>
                         <form method=\"POST\" action=\"";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                yield "\" class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-forum"), "html", null, true);
                yield "\">
    <input type=\"hidden\" name=\"redirect_to\" value=\"back\">
    <button type=\"submit\" class=\"btn btn-sm btn-delete\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
        <i class=\"fas fa-trash me-1\"></i> Delete
    </button>
</form>
                        </div>
                      </div>
                      
                      <div class=\"card-img-container text-center\">
                        ";
                // line 189
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 189)) && is_string($_v1 = "img_") && str_starts_with($_v0, $_v1))) {
                    // line 190
                    yield "                          <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 190)]), "html", null, true);
                    yield "\" 
                              alt=\"Image du forum ";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 191), "html", null, true);
                    yield "\"
                              class=\"img-fluid mx-auto d-block\">
                        ";
                } else {
                    // line 194
                    yield "                          <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default_image.png"), "html", null, true);
                    yield "\" 
                              alt=\"\"
                              class=\"img-fluid mx-auto d-block\">
                        ";
                }
                // line 198
                yield "                      </div>
                      
                      <div class=\"card-body text-center\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                          <small class=\"text-muted\">
                            <i class=\"far fa-calendar-alt me-1\"></i> ";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "date", [], "any", false, false, false, 203), "d/m/Y"), "html", null, true);
                yield "
                          </small>
                          <span class=\"badge bg-label-primary\">";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 205)), "html", null, true);
                yield " commentaires</span>
                        </div>
                        
                        <p class=\"card-text forum-description\">
                          ";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 209), "html", null, true);
                yield "
                        </p>
                        
                        <div class=\"card-actions\">
                          <button class=\"btn btn-comments\" data-forum-id=\"";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 213), "html", null, true);
                yield "\" style=\"background-color: #844062; color: white;\">
                            <i class=\"far fa-comment\"></i> Commentaires 
                            <span class=\"comment-count\">";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 215)), "html", null, true);
                yield "</span>
                          </button>
                        </div>
                        
                        <div id=\"comments-";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 219), "html", null, true);
                yield "\" class=\"comments-section\" style=\"display: none;\">
                          <div class=\"existing-comments\">
                            ";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 221));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 222
                    yield "                              <div class=\"comment\" id=\"comment-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 222), "html", null, true);
                    yield "\">
                                <div class=\"comment-header d-flex justify-content-between align-items-center mb-2\">
                                  <small class=\"text-muted\">
                                    <i class=\"far fa-clock me-1\"></i> ";
                    // line 225
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 225), "d/m/Y H:i"), "html", null, true);
                    yield "
                                  </small>
                                  <form method=\"POST\" action=\"";
                    // line 227
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "idCmn", [], "any", false, false, false, 227)]), "html", null, true);
                    yield "\" class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 228
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "idCmn", [], "any", false, false, false, 228))), "html", null, true);
                    yield "\">
    <input type=\"hidden\" name=\"redirect_to\" value=\"back\">
    <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Supprimer ce commentaire ?')\">
        <i class=\"fas fa-trash\"></i> Delete
    </button>
</form>
                                </div>
                                <div class=\"comment-content p-3 bg-light rounded\">
                                  ";
                    // line 236
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sujet", [], "any", false, false, false, 236), "html", null, true);
                    yield "
                                </div>
                              </div>
                            ";
                    $context['_iterated'] = true;
                }
                // line 239
                if (!$context['_iterated']) {
                    // line 240
                    yield "                              <div class=\"no-comments text-center py-4\">
                                <i class=\"far fa-comment-dots fa-2x mb-2\"></i>
                                <p class=\"mb-0\">Aucun commentaire</p>
                              </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 245
                yield "                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['forum'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            yield "              ";
        } else {
            // line 252
            yield "                <div class=\"col-12\">
                  <div class=\"alert alert-warning text-center py-4\">
                    <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>
                      ";
            // line 255
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 255, $this->source); })()), "request", [], "any", false, false, false, 255), "query", [], "any", false, false, false, 255), "get", ["search"], "method", false, false, false, 255)) {
                // line 256
                yield "                        Aucun résultat pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 256, $this->source); })()), "request", [], "any", false, false, false, 256), "query", [], "any", false, false, false, 256), "get", ["search"], "method", false, false, false, 256), "html", null, true);
                yield "\"
                      ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 257
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 257, $this->source); })()), "request", [], "any", false, false, false, 257), "query", [], "any", false, false, false, 257), "get", ["category"], "method", false, false, false, 257)) {
                // line 258
                yield "                        Aucun forum dans la catégorie \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 258, $this->source); })()), "request", [], "any", false, false, false, 258), "query", [], "any", false, false, false, 258), "get", ["category"], "method", false, false, false, 258), "html", null, true);
                yield "\"
                      ";
            } else {
                // line 260
                yield "                        Aucun forum trouvé
                      ";
            }
            // line 262
            yield "                    </h4>
                  </div>
                </div>
              ";
        }
        // line 266
        yield "            </div>
          </div>
          <!-- / Content -->
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- / Layout wrapper -->
  </div>

  <!-- Conteneur caché pour l'export PDF -->
  <div id=\"pdf-export-container\" style=\"position: absolute; left: -9999px; top: 0; width: 210mm; background: #ffffff; padding: 20px;\"></div>

  <style>
    /* Styles pour les boutons */
    .btn-pdf {
      background-color: #17a2b8 !important;
      color: white !important;
      border: none !important;
      padding: 5px 10px !important;
      border-radius: 4px !important;
    }
    
    .btn-delete {
      background-color: #dc3545 !important;
      color: white !important;
      border: none !important;
      padding: 5px 10px !important;
      border-radius: 4px !important;
    }
    
    .btn-comments {
      border: none;
      border-radius: 4px;
      padding: 8px 0;
      background: #844062;
      color: #ffffff;
    }
    
    /* Styles pour l'export PDF */
    .pdf-export-content {
      background: #ffffff !important;
      margin-bottom: 20px !important;
      box-shadow: none !important;
    }
    
    .pdf-export-content .card-header {
      background-color: #ADC29B !important;
      color: white !important;
    }
    
    /* Styles normaux pour l'affichage web */
    .forum-card {
      border: none;
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s ease;
      background: #ffffff;
    }
    
    .forum-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .card-img-container img {
      max-height: 300px;
      object-fit: cover;
      width: 100%;
    }
    
    .comments-section {
      display: none;
      margin-top: 15px;
      padding: 15px;
      background: #f8f9fa;
      border-radius: 5px;
    }
    
    .comment {
      padding: 10px;
      margin-bottom: 15px;
      background: #ffffff;
      border-radius: 5px;
      border-left: 3px solid #ADC29B;
    }
    
    .comment-count {
      background: #ffffff;
      color: #844062;
      border-radius: 50%;
      padding: 2px 6px;
    }
  </style>

  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
  
  <script>

document.addEventListener('DOMContentLoaded', function() {
    // Gestion des formulaires de suppression
    document.querySelectorAll('form[method=\"POST\"]').forEach(form => {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            if (!confirm('Are you sure you want to delete this item?')) {
                return;
            }

            try {
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: new FormData(this),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                if (response.ok) {
                    // Suppression visuelle de l'élément
                    const itemToRemove = this.closest('.forum-card, .comment');
                    if (itemToRemove) {
                        itemToRemove.remove();
                    }
                    
                    // Mise à jour des compteurs
                    const countElement = this.querySelector('.comment-count') || 
                                       document.querySelector('.comment-count');
                    if (countElement) {
                        countElement.textContent = parseInt(countElement.textContent) - 1;
                    }
                } else {
                    const error = await response.json();
                    alert(error.message || 'Error during deletion');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred');
            }
        });
    });
});





    // Initialiser jsPDF
    const { jsPDF } = window.jspdf;
    
    // Variables globales
    let categoryChart, activityChart;
    const primaryColor = '#844062';
    const secondaryColor = '#ADC29B';

    // =============================================
    // FONCTIONS DE GESTION DES STATISTIQUES
    // =============================================
    
    function calculateStatistics() {
      const forumElements = document.querySelectorAll('.forum-card');
      const today = new Date().toISOString().split('T')[0];
      
      let stats = {
        totalForums: forumElements.length,
        totalComments: 0,
        todayForums: 0,
        categories: {
          'Mariage': 0,
          'Anniversaire': 0,
          'Graduation': 0,
          'Baby_Shower': 0
        },
        activity: {
          labels: [],
          forums: [0, 0, 0, 0, 0, 0, 0],
          comments: [0, 0, 0, 0, 0, 0, 0]
        }
      };

      // Générer les labels pour les 7 derniers jours
      const date = new Date();
      for (let i = 6; i >= 0; i--) {
        const d = new Date(date);
        d.setDate(d.getDate() - i);
        stats.activity.labels.push(d.toLocaleDateString('fr-FR', {day: '2-digit', month: '2-digit'}));
      }

      // Analyser chaque forum
      forumElements.forEach(forum => {
        // Catégorie
        const category = forum.querySelector('.card-header h3').textContent.trim();
        if (stats.categories.hasOwnProperty(category)) {
          stats.categories[category]++;
        }

        // Commentaires
        const commentCount = parseInt(forum.querySelector('.comment-count').textContent) || 0;
        stats.totalComments += commentCount;

        // Date du forum
        const dateText = forum.querySelector('.text-muted').textContent;
        if (dateText.includes(today)) {
          stats.todayForums++;
        }

        // Activité (simplifié)
        const randomDay = Math.floor(Math.random() * 7);
        stats.activity.forums[randomDay]++;
        stats.activity.comments[randomDay] += commentCount;
      });

      return stats;
    }

    function loadStatistics() {
      const statsData = calculateStatistics();
      
      // Mettre à jour les indicateurs
      document.getElementById('totalForums').textContent = statsData.totalForums;
      document.getElementById('totalComments').textContent = statsData.totalComments;
      document.getElementById('todayForums').textContent = statsData.todayForums;

      // Détruire les anciens graphiques
      if (categoryChart) categoryChart.destroy();
      if (activityChart) activityChart.destroy();

      // Graphique des catégories
      const categoryCtx = document.getElementById('categoryChart').getContext('2d');
      categoryChart = new Chart(categoryCtx, {
        type: 'doughnut',
        data: {
          labels: Object.keys(statsData.categories),
          datasets: [{
            data: Object.values(statsData.categories),
            backgroundColor: [primaryColor, secondaryColor, '#FFCE56', '#36A2EB'],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom'
            }
          }
        }
      });

      // Graphique d'activité
      const activityCtx = document.getElementById('activityChart').getContext('2d');
      activityChart = new Chart(activityCtx, {
        type: 'bar',
        data: {
          labels: statsData.activity.labels,
          datasets: [
            {
              label: 'Forums',
              data: statsData.activity.forums,
              backgroundColor: primaryColor,
              borderRadius: 4
            },
            {
              label: 'Commentaires',
              data: statsData.activity.comments,
              backgroundColor: secondaryColor,
              borderRadius: 4
            }
          ]
        },
        options: {
          responsive: true,
          scales: {
            y: { beginAtZero: true }
          }
        }
      });
    }

    function showStatistics() {
      const section = document.getElementById('statisticsSection');
      section.style.display = section.style.display === 'none' ? 'block' : 'none';
      
      if (section.style.display === 'block') {
        loadStatistics();
      }
    }
    
    function refreshStatistics() {
      loadStatistics();
      toastMessage('Statistiques actualisées', 'success');
    }

    // =============================================
    // FONCTIONS DE GÉNÉRATION DE PDF
    // =============================================
    
    window.generateForumPDF = async function(forumId) {
      try {
          const forumCard = document.querySelector(`.pdf-export-content[data-id=\"\${forumId}\"]`);
          if (!forumCard) {
              throw new Error(`Forum avec ID \${forumId} non trouvé`);
          }

          // Créer un conteneur temporaire
          const tempContainer = document.createElement('div');
          tempContainer.style.position = 'absolute';
          tempContainer.style.left = '-9999px';
          tempContainer.style.width = '210mm';
          tempContainer.style.padding = '20px';
          tempContainer.style.backgroundColor = '#ffffff';
          document.body.appendChild(tempContainer);

          // Cloner le contenu avec styles simplifiés
          const content = forumCard.cloneNode(true);
          content.style.width = '100%';
          content.style.padding = '20px';
          content.style.backgroundColor = '#ffffff';
          
          // Nettoyer les éléments
          content.querySelectorAll('button, [onclick], .comments-section').forEach(el => el.remove());
          
          // Appliquer des styles simplifiés et normaliser les couleurs
          content.querySelectorAll('*').forEach(el => {
            el.style.boxShadow = 'none';
            el.style.transition = 'none';
            el.style.transform = 'none';
            
            // Normaliser les couleurs
            const styles = window.getComputedStyle(el);
            if (styles.color.includes('color(')) {
                el.style.color = '#000000';
            }
            if (styles.backgroundColor.includes('color(')) {
                el.style.backgroundColor = '#ffffff';
            }
          });

          tempContainer.innerHTML = `
            <h2 style=\"color:#844062;text-align:center;border-bottom:1px solid #eee;padding-bottom:10px;margin-bottom:20px;\">
              Fiche Forum - \${content.querySelector('h3').textContent}
            </h2>
          `;
          tempContainer.appendChild(content);

          // Générer le PDF
          const canvas = await html2canvas(tempContainer, {
              scale: 2,
              backgroundColor: '#ffffff',
              logging: true,
              useCORS: true,
              ignoreElements: (element) => {
                  const styles = window.getComputedStyle(element);
                  return styles.color.includes('color(') || 
                         styles.backgroundColor.includes('color(');
              }
          });

          const doc = new jsPDF('portrait', 'mm', 'a4');
          const imgData = canvas.toDataURL('image/png');
          const pageWidth = doc.internal.pageSize.getWidth();
          const pageHeight = (canvas.height * pageWidth) / canvas.width;

          doc.addImage(imgData, 'PNG', 0, 0, pageWidth, pageHeight);
          doc.save(`forum_\${forumId}.pdf`);
          
          // Nettoyer
          document.body.removeChild(tempContainer);

      } catch (error) {
          console.error(\"Erreur génération PDF:\", error);
          alert(\"Erreur lors de la génération du PDF: \" + error.message);
      }
    };

    window.generateAllForumsPDF = async function() {
      try {
          // Afficher un indicateur de chargement
          const loader = document.createElement('div');
          loader.style.position = 'fixed';
          loader.style.top = '0';
          loader.style.left = '0';
          loader.style.width = '100%';
          loader.style.height = '100%';
          loader.style.backgroundColor = 'rgba(0,0,0,0.5)';
          loader.style.zIndex = '10000';
          loader.style.display = 'flex';
          loader.style.justifyContent = 'center';
          loader.style.alignItems = 'center';
          loader.innerHTML = '<div style=\"color:white;font-size:20px;\">Génération du PDF en cours...</div>';
          document.body.appendChild(loader);

          // Créer un conteneur temporaire pour le PDF
          const pdfContainer = document.createElement('div');
          pdfContainer.style.width = '210mm';
          pdfContainer.style.padding = '20px';
          pdfContainer.style.backgroundColor = '#ffffff';
          pdfContainer.style.position = 'absolute';
          pdfContainer.style.left = '-9999px';
          document.body.appendChild(pdfContainer);

          // Ajouter l'en-tête
          pdfContainer.innerHTML = `
            <h1 style=\"color:#844062;text-align:center;border-bottom:1px solid #eee;padding-bottom:10px;margin-bottom:30px;\">
              Liste complète des Forums - \${new Date().toLocaleDateString()}
            </h1>
            <div id=\"pdf-content\"></div>
          `;

          // Récupérer tous les forums (même ceux non visibles)
          const forumCards = document.querySelectorAll('.forum-card');
          const pdfContent = pdfContainer.querySelector('#pdf-content');

          // Cloner chaque forum avec son style adapté pour le PDF
          forumCards.forEach((card, index) => {
              const clone = card.cloneNode(true);
              clone.classList.add('pdf-export-content');
              clone.style.marginBottom = '30px';
              clone.style.pageBreakAfter = (index < forumCards.length - 1) ? 'always' : 'auto';
              
              // Nettoyer les éléments inutiles
              clone.querySelectorAll('button, .comments-section').forEach(el => el.remove());
              
              // Appliquer les styles PDF et normaliser les couleurs
              clone.querySelectorAll('*').forEach(el => {
                  el.style.boxShadow = 'none';
                  el.style.transition = 'none';
                  el.style.transform = 'none';
                  
                  // Normaliser les couleurs
                  const styles = window.getComputedStyle(el);
                  if (styles.color.includes('color(')) {
                      el.style.color = '#000000';
                  }
                  if (styles.backgroundColor.includes('color(')) {
                      el.style.backgroundColor = '#ffffff';
                  }
              });
              
              pdfContent.appendChild(clone);
          });

          // Laisser le temps au rendu
          await new Promise(resolve => setTimeout(resolve, 1000));

          // Normaliser toutes les couleurs avant capture
          pdfContainer.querySelectorAll('*').forEach(el => {
              const styles = window.getComputedStyle(el);
              if (styles.color.includes('color(')) {
                  el.style.color = '#000000';
              }
              if (styles.backgroundColor.includes('color(')) {
                  el.style.backgroundColor = '#ffffff';
              }
          });

          // Capturer tout le contenu avec html2canvas
          const canvas = await html2canvas(pdfContainer, {
              scale: 1,
              logging: true,
              useCORS: true,
              scrollX: 0,
              scrollY: 0,
              windowHeight: pdfContainer.scrollHeight + 100,
              backgroundColor: '#ffffff',
              ignoreElements: (element) => {
                  const styles = window.getComputedStyle(element);
                  return styles.color.includes('color(') || 
                         styles.backgroundColor.includes('color(');
              }
          });

          // Générer le PDF
          const doc = new jsPDF('p', 'mm', 'a4');
          const imgData = canvas.toDataURL('image/png');
          const pageWidth = doc.internal.pageSize.getWidth();
          const pageHeight = (canvas.height * pageWidth) / canvas.width;

          doc.addImage(imgData, 'PNG', 0, 0, pageWidth, pageHeight);
          doc.save(`forums_complets_\${new Date().toISOString().split('T')[0]}.pdf`);
          
          // Nettoyer
          document.body.removeChild(pdfContainer);
          document.body.removeChild(loader);

      } catch (error) {
          console.error(\"Erreur génération PDF:\", error);
          alert(\"Erreur lors de la génération du PDF complet: \" + error.message);
          if (loader) document.body.removeChild(loader);
          if (pdfContainer) document.body.removeChild(pdfContainer);
      }
    };

    // =============================================
    // FONCTIONS UTILITAIRES
    // =============================================
    
    function toastMessage(message, type = 'info') {
      // Implémentez un système de notification/toast si nécessaire
      console.log(`\${type.toUpperCase()}: \${message}`);
    }
    
    function setupCommentButtons() {
      document.querySelectorAll('.btn-comments').forEach(button => {
        button.addEventListener('click', function() {
          const forumId = this.getAttribute('data-forum-id');
          const commentSection = document.getElementById(`comments-\${forumId}`);
          
          if (commentSection.style.display === 'none') {
            commentSection.style.display = 'block';
            this.classList.add('active');
          } else {
            commentSection.style.display = 'none';
            this.classList.remove('active');
          }
        });
      });
    }

    // =============================================
    // INITIALISATION
    // =============================================
    
    document.addEventListener('DOMContentLoaded', function() {
      setupCommentButtons();
      
      // Gestion de la recherche
      const searchInput = document.getElementById('dynamicSearchInput');
      if (searchInput) {
        searchInput.addEventListener('input', function(e) {
          clearTimeout(this.searchTimeout);
          this.searchTimeout = setTimeout(() => {
            console.log('Recherche:', e.target.value.trim());
          }, 300);
        });
      }
      
      // Ouvrir les commentaires si spécifié dans l'URL
      const urlParams = new URLSearchParams(window.location.search);
      const openForumId = urlParams.get('openForum');
      if (openForumId) {
        const section = document.getElementById(`comments-\${openForumId}`);
        const button = document.querySelector(`.btn-comments[data-forum-id=\"\${openForumId}\"]`);
        if (section && button) {
          section.style.display = 'block';
          button.classList.add('active');
        }
      }
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
        return "forums/forumsBack.html.twig";
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
        return array (  521 => 266,  515 => 262,  511 => 260,  505 => 258,  503 => 257,  498 => 256,  496 => 255,  491 => 252,  488 => 251,  477 => 245,  467 => 240,  465 => 239,  457 => 236,  446 => 228,  442 => 227,  437 => 225,  430 => 222,  425 => 221,  420 => 219,  413 => 215,  408 => 213,  401 => 209,  394 => 205,  389 => 203,  382 => 198,  374 => 194,  368 => 191,  363 => 190,  361 => 189,  348 => 179,  344 => 178,  338 => 175,  333 => 173,  328 => 171,  325 => 170,  320 => 169,  318 => 168,  307 => 160,  303 => 159,  299 => 158,  293 => 154,  287 => 152,  285 => 151,  281 => 150,  269 => 141,  265 => 140,  261 => 139,  255 => 136,  251 => 135,  247 => 134,  241 => 131,  237 => 130,  233 => 129,  227 => 126,  223 => 125,  219 => 124,  213 => 121,  209 => 120,  205 => 119,  188 => 105,  177 => 97,  166 => 89,  102 => 28,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block content %}
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
                  id=\"dynamicSearchInput\"
                  class=\"form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none\"
                  placeholder=\"Search...\"
                  aria-label=\"Search...\"
                  value=\"{{ app.request.query.get('search') }}\"
                />
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
            <div class=\"d-flex justify-content-between align-items-center\">
              <h4 class=\"fw-bold py-3 mb-4\">Gestion des forums</h4>
              <div>
                <button onclick=\"showStatistics()\" class=\"btn btn-info mb-4 me-2\">
                  <i class=\"fas fa-chart-bar me-1\"></i> Statistiques
                </button>
                <button onclick=\"generateAllForumsPDF()\" class=\"btn btn-primary mb-4\">
                  <i class=\"fas fa-file-pdf me-1\"></i> Exporter PDF
                </button>
              </div>
            </div>

            <!-- Section Statistiques -->
            <div id=\"statisticsSection\" class=\"mb-4\" style=\"display: none;\">
              <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                  <h5 class=\"card-title mb-0\">Statistiques des forums</h5>
                  <button onclick=\"refreshStatistics()\" class=\"btn btn-sm btn-outline-primary\">
                    <i class=\"fas fa-sync-alt me-1\"></i> Actualiser
                  </button>
                </div>
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col-md-6\">
                      <div class=\"card mb-4\">
                        <div class=\"card-header\">
                          <h6 class=\"mb-0\">Répartition par catégorie</h6>
                        </div>
                        <div class=\"card-body\">
                          <canvas id=\"categoryChart\" height=\"250\"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-md-6\">
                      <div class=\"card mb-4\">
                        <div class=\"card-header\">
                          <h6 class=\"mb-0\">Activité des 7 derniers jours</h6>
                        </div>
                        <div class=\"card-body\">
                          <canvas id=\"activityChart\" height=\"250\"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-md-4\">
                      <div class=\"card mb-4\">
                        <div class=\"card-body text-center\">
                          <h3 class=\"mb-1\" id=\"totalForums\">{{ forums|length }}</h3>
                          <p class=\"text-muted mb-0\">Forums créés</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-md-4\">
                      <div class=\"card mb-4\">
                        <div class=\"card-body text-center\">
                          <h3 class=\"mb-1\" id=\"totalComments\">{{ forums|reduce((sum, forum) => sum + forum.comments|length, 0) }}</h3>
                          <p class=\"text-muted mb-0\">Commentaires</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-md-4\">
                      <div class=\"card mb-4\">
                        <div class=\"card-body text-center\">
                          <h3 class=\"mb-1\" id=\"todayForums\">{{ forums|filter(f => f.date|date('Y-m-d') == 'now'|date('Y-m-d'))|length }}</h3>
                          <p class=\"text-muted mb-0\">Aujourd'hui</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Filtres et recherche -->
            <div class=\"row mb-4\">
              <div class=\"col-12 d-flex justify-content-center\">
                <div class=\"btn-group\" role=\"group\">
                  <a href=\"{{ path('app_forumsBack') }}\" 
                    class=\"btn {{ not app.request.query.has('category') ? 'btn-primary' : 'btn-outline-primary' }}\" 
                    style=\"{{ not app.request.query.has('category') ? 'background-color: #844062; border-color: #844062;' : 'color: #844062; border-color: #844062;' }} width: auto;\">
                    All
                  </a>
                  <a href=\"{{ path('app_forumsBack', {'category': 'Mariage'}) }}\" 
                    class=\"btn {{ app.request.query.get('category') == 'Mariage' ? 'btn-primary' : 'btn-outline-primary' }}\" 
                    style=\"{{ app.request.query.get('category') == 'Mariage' ? 'background-color: #844062; border-color: #844062;' : 'color: #844062; border-color: #844062;' }} width: auto;\">
                    Mariage
                  </a>
                  <a href=\"{{ path('app_forumsBack', {'category': 'Anniversaire'}) }}\" 
                    class=\"btn {{ app.request.query.get('category') == 'Anniversaire' ? 'btn-primary' : 'btn-outline-primary' }}\" 
                    style=\"{{ app.request.query.get('category') == 'Anniversaire' ? 'background-color: #844062; border-color: #844062;' : 'color: #844062; border-color: #844062;' }} width: auto;\">
                    Anniversaire
                  </a>
                  <a href=\"{{ path('app_forumsBack', {'category': 'Graduation'}) }}\" 
                    class=\"btn {{ app.request.query.get('category') == 'Graduation' ? 'btn-primary' : 'btn-outline-primary' }}\" 
                    style=\"{{ app.request.query.get('category') == 'Graduation' ? 'background-color: #844062; border-color: #844062;' : 'color: #844062; border-color: #844062;' }} width: auto;\">
                    Graduation
                  </a>
                  <a href=\"{{ path('app_forumsBack', {'category': 'Baby_Shower'}) }}\" 
                    class=\"btn {{ app.request.query.get('category') == 'Baby_Shower' ? 'btn-primary' : 'btn-outline-primary' }}\" 
                    style=\"{{ app.request.query.get('category') == 'Baby_Shower' ? 'background-color: #844062; border-color: #844062;' : 'color: #844062; border-color: #844062;' }} width: auto;\">
                    Baby Shower
                  </a>
                </div>
              </div>
            </div>

            <div class=\"row mb-4\">
              <div class=\"col-md-6 offset-md-3\">
                <form method=\"GET\" action=\"{{ path('app_forumsBack') }}\" class=\"d-flex align-items-center justify-content-center\">
                  {% if app.request.query.get('category') %}
                    <input type=\"hidden\" name=\"category\" value=\"{{ app.request.query.get('category') }}\">
                  {% endif %}
                  <label for=\"sort\" class=\"me-2 text-nowrap\">
                    <i class=\"fas fa-sort me-1\"></i>Sort by:
                  </label>
                  <select name=\"sort\" id=\"sort\" class=\"form-select\" style=\"border-color: #844062;\" onchange=\"this.form.submit()\">
                    <option value=\"newest\" {{ app.request.query.get('sort') == 'newest' ? 'selected' }}>Newest</option>
                    <option value=\"oldest\" {{ app.request.query.get('sort') == 'oldest' ? 'selected' }}>Oldest</option>
                    <option value=\"popular\" {{ app.request.query.get('sort') == 'popular' ? 'selected' }}>Popular</option>
                  </select>
                </form>
              </div>
            </div>

            <!-- Liste des forums -->
            <div class=\"row justify-content-center\" id=\"forumsList\">
              {% if forums is defined and forums is not empty %}
                {% for forum in forums %}
                  <div class=\"col-lg-8 col-md-10 mb-4\">
                    <div class=\"card shadow-lg forum-card pdf-export-content\" data-id=\"{{ forum.id }}\">
                      <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                        <h3 class=\"h5 mb-0\">{{ forum.categorie|upper }}</h3>
                        <div>
                          <button onclick=\"generateForumPDF({{ forum.id }})\" class=\"btn btn-sm btn-pdf me-2\">
                            <i class=\"fas fa-file-pdf me-1\"></i> PDF
                          </button>
                         <form method=\"POST\" action=\"{{ path('app_forum_delete', {'id': forum.id}) }}\" class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-forum') }}\">
    <input type=\"hidden\" name=\"redirect_to\" value=\"back\">
    <button type=\"submit\" class=\"btn btn-sm btn-delete\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
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
                              alt=\"\"
                              class=\"img-fluid mx-auto d-block\">
                        {% endif %}
                      </div>
                      
                      <div class=\"card-body text-center\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                          <small class=\"text-muted\">
                            <i class=\"far fa-calendar-alt me-1\"></i> {{ forum.date|date('d/m/Y') }}
                          </small>
                          <span class=\"badge bg-label-primary\">{{ forum.comments|length }} commentaires</span>
                        </div>
                        
                        <p class=\"card-text forum-description\">
                          {{ forum.description }}
                        </p>
                        
                        <div class=\"card-actions\">
                          <button class=\"btn btn-comments\" data-forum-id=\"{{ forum.id }}\" style=\"background-color: #844062; color: white;\">
                            <i class=\"far fa-comment\"></i> Commentaires 
                            <span class=\"comment-count\">{{ forum.comments|length }}</span>
                          </button>
                        </div>
                        
                        <div id=\"comments-{{ forum.id }}\" class=\"comments-section\" style=\"display: none;\">
                          <div class=\"existing-comments\">
                            {% for comment in forum.comments %}
                              <div class=\"comment\" id=\"comment-{{ comment.IdCmn }}\">
                                <div class=\"comment-header d-flex justify-content-between align-items-center mb-2\">
                                  <small class=\"text-muted\">
                                    <i class=\"far fa-clock me-1\"></i> {{ comment.date|date('d/m/Y H:i') }}
                                  </small>
                                  <form method=\"POST\" action=\"{{ path('comment_delete', {'id': comment.idCmn}) }}\" class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-comment' ~ comment.idCmn) }}\">
    <input type=\"hidden\" name=\"redirect_to\" value=\"back\">
    <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Supprimer ce commentaire ?')\">
        <i class=\"fas fa-trash\"></i> Delete
    </button>
</form>
                                </div>
                                <div class=\"comment-content p-3 bg-light rounded\">
                                  {{ comment.sujet }}
                                </div>
                              </div>
                            {% else %}
                              <div class=\"no-comments text-center py-4\">
                                <i class=\"far fa-comment-dots fa-2x mb-2\"></i>
                                <p class=\"mb-0\">Aucun commentaire</p>
                              </div>
                            {% endfor %}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                {% endfor %}
              {% else %}
                <div class=\"col-12\">
                  <div class=\"alert alert-warning text-center py-4\">
                    <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>
                      {% if app.request.query.get('search') %}
                        Aucun résultat pour \"{{ app.request.query.get('search') }}\"
                      {% elseif app.request.query.get('category') %}
                        Aucun forum dans la catégorie \"{{ app.request.query.get('category') }}\"
                      {% else %}
                        Aucun forum trouvé
                      {% endif %}
                    </h4>
                  </div>
                </div>
              {% endif %}
            </div>
          </div>
          <!-- / Content -->
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- / Layout wrapper -->
  </div>

  <!-- Conteneur caché pour l'export PDF -->
  <div id=\"pdf-export-container\" style=\"position: absolute; left: -9999px; top: 0; width: 210mm; background: #ffffff; padding: 20px;\"></div>

  <style>
    /* Styles pour les boutons */
    .btn-pdf {
      background-color: #17a2b8 !important;
      color: white !important;
      border: none !important;
      padding: 5px 10px !important;
      border-radius: 4px !important;
    }
    
    .btn-delete {
      background-color: #dc3545 !important;
      color: white !important;
      border: none !important;
      padding: 5px 10px !important;
      border-radius: 4px !important;
    }
    
    .btn-comments {
      border: none;
      border-radius: 4px;
      padding: 8px 0;
      background: #844062;
      color: #ffffff;
    }
    
    /* Styles pour l'export PDF */
    .pdf-export-content {
      background: #ffffff !important;
      margin-bottom: 20px !important;
      box-shadow: none !important;
    }
    
    .pdf-export-content .card-header {
      background-color: #ADC29B !important;
      color: white !important;
    }
    
    /* Styles normaux pour l'affichage web */
    .forum-card {
      border: none;
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s ease;
      background: #ffffff;
    }
    
    .forum-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .card-img-container img {
      max-height: 300px;
      object-fit: cover;
      width: 100%;
    }
    
    .comments-section {
      display: none;
      margin-top: 15px;
      padding: 15px;
      background: #f8f9fa;
      border-radius: 5px;
    }
    
    .comment {
      padding: 10px;
      margin-bottom: 15px;
      background: #ffffff;
      border-radius: 5px;
      border-left: 3px solid #ADC29B;
    }
    
    .comment-count {
      background: #ffffff;
      color: #844062;
      border-radius: 50%;
      padding: 2px 6px;
    }
  </style>

  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
  
  <script>

document.addEventListener('DOMContentLoaded', function() {
    // Gestion des formulaires de suppression
    document.querySelectorAll('form[method=\"POST\"]').forEach(form => {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            if (!confirm('Are you sure you want to delete this item?')) {
                return;
            }

            try {
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: new FormData(this),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                if (response.ok) {
                    // Suppression visuelle de l'élément
                    const itemToRemove = this.closest('.forum-card, .comment');
                    if (itemToRemove) {
                        itemToRemove.remove();
                    }
                    
                    // Mise à jour des compteurs
                    const countElement = this.querySelector('.comment-count') || 
                                       document.querySelector('.comment-count');
                    if (countElement) {
                        countElement.textContent = parseInt(countElement.textContent) - 1;
                    }
                } else {
                    const error = await response.json();
                    alert(error.message || 'Error during deletion');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred');
            }
        });
    });
});





    // Initialiser jsPDF
    const { jsPDF } = window.jspdf;
    
    // Variables globales
    let categoryChart, activityChart;
    const primaryColor = '#844062';
    const secondaryColor = '#ADC29B';

    // =============================================
    // FONCTIONS DE GESTION DES STATISTIQUES
    // =============================================
    
    function calculateStatistics() {
      const forumElements = document.querySelectorAll('.forum-card');
      const today = new Date().toISOString().split('T')[0];
      
      let stats = {
        totalForums: forumElements.length,
        totalComments: 0,
        todayForums: 0,
        categories: {
          'Mariage': 0,
          'Anniversaire': 0,
          'Graduation': 0,
          'Baby_Shower': 0
        },
        activity: {
          labels: [],
          forums: [0, 0, 0, 0, 0, 0, 0],
          comments: [0, 0, 0, 0, 0, 0, 0]
        }
      };

      // Générer les labels pour les 7 derniers jours
      const date = new Date();
      for (let i = 6; i >= 0; i--) {
        const d = new Date(date);
        d.setDate(d.getDate() - i);
        stats.activity.labels.push(d.toLocaleDateString('fr-FR', {day: '2-digit', month: '2-digit'}));
      }

      // Analyser chaque forum
      forumElements.forEach(forum => {
        // Catégorie
        const category = forum.querySelector('.card-header h3').textContent.trim();
        if (stats.categories.hasOwnProperty(category)) {
          stats.categories[category]++;
        }

        // Commentaires
        const commentCount = parseInt(forum.querySelector('.comment-count').textContent) || 0;
        stats.totalComments += commentCount;

        // Date du forum
        const dateText = forum.querySelector('.text-muted').textContent;
        if (dateText.includes(today)) {
          stats.todayForums++;
        }

        // Activité (simplifié)
        const randomDay = Math.floor(Math.random() * 7);
        stats.activity.forums[randomDay]++;
        stats.activity.comments[randomDay] += commentCount;
      });

      return stats;
    }

    function loadStatistics() {
      const statsData = calculateStatistics();
      
      // Mettre à jour les indicateurs
      document.getElementById('totalForums').textContent = statsData.totalForums;
      document.getElementById('totalComments').textContent = statsData.totalComments;
      document.getElementById('todayForums').textContent = statsData.todayForums;

      // Détruire les anciens graphiques
      if (categoryChart) categoryChart.destroy();
      if (activityChart) activityChart.destroy();

      // Graphique des catégories
      const categoryCtx = document.getElementById('categoryChart').getContext('2d');
      categoryChart = new Chart(categoryCtx, {
        type: 'doughnut',
        data: {
          labels: Object.keys(statsData.categories),
          datasets: [{
            data: Object.values(statsData.categories),
            backgroundColor: [primaryColor, secondaryColor, '#FFCE56', '#36A2EB'],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom'
            }
          }
        }
      });

      // Graphique d'activité
      const activityCtx = document.getElementById('activityChart').getContext('2d');
      activityChart = new Chart(activityCtx, {
        type: 'bar',
        data: {
          labels: statsData.activity.labels,
          datasets: [
            {
              label: 'Forums',
              data: statsData.activity.forums,
              backgroundColor: primaryColor,
              borderRadius: 4
            },
            {
              label: 'Commentaires',
              data: statsData.activity.comments,
              backgroundColor: secondaryColor,
              borderRadius: 4
            }
          ]
        },
        options: {
          responsive: true,
          scales: {
            y: { beginAtZero: true }
          }
        }
      });
    }

    function showStatistics() {
      const section = document.getElementById('statisticsSection');
      section.style.display = section.style.display === 'none' ? 'block' : 'none';
      
      if (section.style.display === 'block') {
        loadStatistics();
      }
    }
    
    function refreshStatistics() {
      loadStatistics();
      toastMessage('Statistiques actualisées', 'success');
    }

    // =============================================
    // FONCTIONS DE GÉNÉRATION DE PDF
    // =============================================
    
    window.generateForumPDF = async function(forumId) {
      try {
          const forumCard = document.querySelector(`.pdf-export-content[data-id=\"\${forumId}\"]`);
          if (!forumCard) {
              throw new Error(`Forum avec ID \${forumId} non trouvé`);
          }

          // Créer un conteneur temporaire
          const tempContainer = document.createElement('div');
          tempContainer.style.position = 'absolute';
          tempContainer.style.left = '-9999px';
          tempContainer.style.width = '210mm';
          tempContainer.style.padding = '20px';
          tempContainer.style.backgroundColor = '#ffffff';
          document.body.appendChild(tempContainer);

          // Cloner le contenu avec styles simplifiés
          const content = forumCard.cloneNode(true);
          content.style.width = '100%';
          content.style.padding = '20px';
          content.style.backgroundColor = '#ffffff';
          
          // Nettoyer les éléments
          content.querySelectorAll('button, [onclick], .comments-section').forEach(el => el.remove());
          
          // Appliquer des styles simplifiés et normaliser les couleurs
          content.querySelectorAll('*').forEach(el => {
            el.style.boxShadow = 'none';
            el.style.transition = 'none';
            el.style.transform = 'none';
            
            // Normaliser les couleurs
            const styles = window.getComputedStyle(el);
            if (styles.color.includes('color(')) {
                el.style.color = '#000000';
            }
            if (styles.backgroundColor.includes('color(')) {
                el.style.backgroundColor = '#ffffff';
            }
          });

          tempContainer.innerHTML = `
            <h2 style=\"color:#844062;text-align:center;border-bottom:1px solid #eee;padding-bottom:10px;margin-bottom:20px;\">
              Fiche Forum - \${content.querySelector('h3').textContent}
            </h2>
          `;
          tempContainer.appendChild(content);

          // Générer le PDF
          const canvas = await html2canvas(tempContainer, {
              scale: 2,
              backgroundColor: '#ffffff',
              logging: true,
              useCORS: true,
              ignoreElements: (element) => {
                  const styles = window.getComputedStyle(element);
                  return styles.color.includes('color(') || 
                         styles.backgroundColor.includes('color(');
              }
          });

          const doc = new jsPDF('portrait', 'mm', 'a4');
          const imgData = canvas.toDataURL('image/png');
          const pageWidth = doc.internal.pageSize.getWidth();
          const pageHeight = (canvas.height * pageWidth) / canvas.width;

          doc.addImage(imgData, 'PNG', 0, 0, pageWidth, pageHeight);
          doc.save(`forum_\${forumId}.pdf`);
          
          // Nettoyer
          document.body.removeChild(tempContainer);

      } catch (error) {
          console.error(\"Erreur génération PDF:\", error);
          alert(\"Erreur lors de la génération du PDF: \" + error.message);
      }
    };

    window.generateAllForumsPDF = async function() {
      try {
          // Afficher un indicateur de chargement
          const loader = document.createElement('div');
          loader.style.position = 'fixed';
          loader.style.top = '0';
          loader.style.left = '0';
          loader.style.width = '100%';
          loader.style.height = '100%';
          loader.style.backgroundColor = 'rgba(0,0,0,0.5)';
          loader.style.zIndex = '10000';
          loader.style.display = 'flex';
          loader.style.justifyContent = 'center';
          loader.style.alignItems = 'center';
          loader.innerHTML = '<div style=\"color:white;font-size:20px;\">Génération du PDF en cours...</div>';
          document.body.appendChild(loader);

          // Créer un conteneur temporaire pour le PDF
          const pdfContainer = document.createElement('div');
          pdfContainer.style.width = '210mm';
          pdfContainer.style.padding = '20px';
          pdfContainer.style.backgroundColor = '#ffffff';
          pdfContainer.style.position = 'absolute';
          pdfContainer.style.left = '-9999px';
          document.body.appendChild(pdfContainer);

          // Ajouter l'en-tête
          pdfContainer.innerHTML = `
            <h1 style=\"color:#844062;text-align:center;border-bottom:1px solid #eee;padding-bottom:10px;margin-bottom:30px;\">
              Liste complète des Forums - \${new Date().toLocaleDateString()}
            </h1>
            <div id=\"pdf-content\"></div>
          `;

          // Récupérer tous les forums (même ceux non visibles)
          const forumCards = document.querySelectorAll('.forum-card');
          const pdfContent = pdfContainer.querySelector('#pdf-content');

          // Cloner chaque forum avec son style adapté pour le PDF
          forumCards.forEach((card, index) => {
              const clone = card.cloneNode(true);
              clone.classList.add('pdf-export-content');
              clone.style.marginBottom = '30px';
              clone.style.pageBreakAfter = (index < forumCards.length - 1) ? 'always' : 'auto';
              
              // Nettoyer les éléments inutiles
              clone.querySelectorAll('button, .comments-section').forEach(el => el.remove());
              
              // Appliquer les styles PDF et normaliser les couleurs
              clone.querySelectorAll('*').forEach(el => {
                  el.style.boxShadow = 'none';
                  el.style.transition = 'none';
                  el.style.transform = 'none';
                  
                  // Normaliser les couleurs
                  const styles = window.getComputedStyle(el);
                  if (styles.color.includes('color(')) {
                      el.style.color = '#000000';
                  }
                  if (styles.backgroundColor.includes('color(')) {
                      el.style.backgroundColor = '#ffffff';
                  }
              });
              
              pdfContent.appendChild(clone);
          });

          // Laisser le temps au rendu
          await new Promise(resolve => setTimeout(resolve, 1000));

          // Normaliser toutes les couleurs avant capture
          pdfContainer.querySelectorAll('*').forEach(el => {
              const styles = window.getComputedStyle(el);
              if (styles.color.includes('color(')) {
                  el.style.color = '#000000';
              }
              if (styles.backgroundColor.includes('color(')) {
                  el.style.backgroundColor = '#ffffff';
              }
          });

          // Capturer tout le contenu avec html2canvas
          const canvas = await html2canvas(pdfContainer, {
              scale: 1,
              logging: true,
              useCORS: true,
              scrollX: 0,
              scrollY: 0,
              windowHeight: pdfContainer.scrollHeight + 100,
              backgroundColor: '#ffffff',
              ignoreElements: (element) => {
                  const styles = window.getComputedStyle(element);
                  return styles.color.includes('color(') || 
                         styles.backgroundColor.includes('color(');
              }
          });

          // Générer le PDF
          const doc = new jsPDF('p', 'mm', 'a4');
          const imgData = canvas.toDataURL('image/png');
          const pageWidth = doc.internal.pageSize.getWidth();
          const pageHeight = (canvas.height * pageWidth) / canvas.width;

          doc.addImage(imgData, 'PNG', 0, 0, pageWidth, pageHeight);
          doc.save(`forums_complets_\${new Date().toISOString().split('T')[0]}.pdf`);
          
          // Nettoyer
          document.body.removeChild(pdfContainer);
          document.body.removeChild(loader);

      } catch (error) {
          console.error(\"Erreur génération PDF:\", error);
          alert(\"Erreur lors de la génération du PDF complet: \" + error.message);
          if (loader) document.body.removeChild(loader);
          if (pdfContainer) document.body.removeChild(pdfContainer);
      }
    };

    // =============================================
    // FONCTIONS UTILITAIRES
    // =============================================
    
    function toastMessage(message, type = 'info') {
      // Implémentez un système de notification/toast si nécessaire
      console.log(`\${type.toUpperCase()}: \${message}`);
    }
    
    function setupCommentButtons() {
      document.querySelectorAll('.btn-comments').forEach(button => {
        button.addEventListener('click', function() {
          const forumId = this.getAttribute('data-forum-id');
          const commentSection = document.getElementById(`comments-\${forumId}`);
          
          if (commentSection.style.display === 'none') {
            commentSection.style.display = 'block';
            this.classList.add('active');
          } else {
            commentSection.style.display = 'none';
            this.classList.remove('active');
          }
        });
      });
    }

    // =============================================
    // INITIALISATION
    // =============================================
    
    document.addEventListener('DOMContentLoaded', function() {
      setupCommentButtons();
      
      // Gestion de la recherche
      const searchInput = document.getElementById('dynamicSearchInput');
      if (searchInput) {
        searchInput.addEventListener('input', function(e) {
          clearTimeout(this.searchTimeout);
          this.searchTimeout = setTimeout(() => {
            console.log('Recherche:', e.target.value.trim());
          }, 300);
        });
      }
      
      // Ouvrir les commentaires si spécifié dans l'URL
      const urlParams = new URLSearchParams(window.location.search);
      const openForumId = urlParams.get('openForum');
      if (openForumId) {
        const section = document.getElementById(`comments-\${openForumId}`);
        const button = document.querySelector(`.btn-comments[data-forum-id=\"\${openForumId}\"]`);
        if (section && button) {
          section.style.display = 'block';
          button.classList.add('active');
        }
      }
    });
  </script>
{% endblock %}", "forums/forumsBack.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\forums\\forumsBack.html.twig");
    }
}
