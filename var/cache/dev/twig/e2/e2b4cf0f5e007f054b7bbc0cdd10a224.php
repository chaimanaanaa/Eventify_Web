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

/* login/blockedPage.html.twig */
class __TwigTemplate_64ff925b39ff197183df620b539162f5 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/blockedPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/blockedPage.html.twig"));

        // line 1
        yield "<!doctype html>

<html lang=\"en\" class=\"layout-wide\" data-assets-path=\"admin/assets/\" data-template=\"vertical-menu-template-free\">
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Demo: Error - Pages | Sneat - Bootstrap Dashboard FREE</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"admin/assets/img/favicon/favicon.ico\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"admin/assets/vendor/fonts/iconify-icons.css\" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel=\"stylesheet\" href=\"admin/assets/vendor/css/core.css\" />
    <link rel=\"stylesheet\" href=\"admin/assets/css/demo.css\" />

    <!-- Vendors CSS -->

    <link rel=\"stylesheet\" href=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css\" />

    <!-- endbuild -->

    <!-- Page CSS -->
    <!-- Page -->
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/css/pages/page-misc.css\" />

    <!-- Helpers -->
    <script src=\"admin/assets/vendor/js/helpers.js\"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src=\"admin/assets/js/config.js\"></script>
  </head>

  <body>
    <!-- Content -->

    <!-- Error -->
    <div class=\"container-xxl container-p-y\">
      <div class=\"misc-wrapper\">
        <h1 class=\"mb-2 mx-2\" style=\"line-height: 6rem; font-size: 6rem\">404</h1>
        <h4 class=\"mb-2 mx-2\">Page Not Found️ ⚠️</h4>
        <p class=\"mb-6 mx-2\"> Your Account has been blocked by the admin</p>
        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-primary\" style=\"background-color: #844062;\">Back to home</a>
        <div class=\"mt-6\">
          <img
            src=\"admin/assets/img/illustrations/page-misc-error-light.png\"
            alt=\"page-misc-error-light\"
            width=\"500\"
            class=\"img-fluid\" />
        </div>
      </div>
    </div>
    <!-- /Error -->

    <!-- / Content -->

   

    <!-- Core JS -->

    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>

    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>

    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>

    <script src=\"admin/assets/vendor/js/menu.js\"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->

    <script src=\"admin/assets/js/main.js\"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/blockedPage.html.twig";
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
        return array (  109 => 60,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>

<html lang=\"en\" class=\"layout-wide\" data-assets-path=\"admin/assets/\" data-template=\"vertical-menu-template-free\">
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Demo: Error - Pages | Sneat - Bootstrap Dashboard FREE</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"admin/assets/img/favicon/favicon.ico\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"admin/assets/vendor/fonts/iconify-icons.css\" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel=\"stylesheet\" href=\"admin/assets/vendor/css/core.css\" />
    <link rel=\"stylesheet\" href=\"admin/assets/css/demo.css\" />

    <!-- Vendors CSS -->

    <link rel=\"stylesheet\" href=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css\" />

    <!-- endbuild -->

    <!-- Page CSS -->
    <!-- Page -->
    <link rel=\"stylesheet\" href=\"admin/assets/vendor/css/pages/page-misc.css\" />

    <!-- Helpers -->
    <script src=\"admin/assets/vendor/js/helpers.js\"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src=\"admin/assets/js/config.js\"></script>
  </head>

  <body>
    <!-- Content -->

    <!-- Error -->
    <div class=\"container-xxl container-p-y\">
      <div class=\"misc-wrapper\">
        <h1 class=\"mb-2 mx-2\" style=\"line-height: 6rem; font-size: 6rem\">404</h1>
        <h4 class=\"mb-2 mx-2\">Page Not Found️ ⚠️</h4>
        <p class=\"mb-6 mx-2\"> Your Account has been blocked by the admin</p>
        <a href=\"{{path('app_home')}}\" class=\"btn btn-primary\" style=\"background-color: #844062;\">Back to home</a>
        <div class=\"mt-6\">
          <img
            src=\"admin/assets/img/illustrations/page-misc-error-light.png\"
            alt=\"page-misc-error-light\"
            width=\"500\"
            class=\"img-fluid\" />
        </div>
      </div>
    </div>
    <!-- /Error -->

    <!-- / Content -->

   

    <!-- Core JS -->

    <script src=\"admin/assets/vendor/libs/jquery/jquery.js\"></script>

    <script src=\"admin/assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"admin/assets/vendor/js/bootstrap.js\"></script>

    <script src=\"admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>

    <script src=\"admin/assets/vendor/js/menu.js\"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->

    <script src=\"admin/assets/js/main.js\"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
  </body>
</html>
", "login/blockedPage.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\login\\blockedPage.html.twig");
    }
}
