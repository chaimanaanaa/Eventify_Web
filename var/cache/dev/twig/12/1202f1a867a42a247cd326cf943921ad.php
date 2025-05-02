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

/* logistics/logisticForm.html.twig */
class __TwigTemplate_8aedbefc13b8dc7047b592bf24d51724 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logistics/logisticForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logistics/logisticForm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "logistics/logisticForm.html.twig", 1);
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
        yield "<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center text-white\" id=\"section_1\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formLog.png"), "html", null, true);
        yield "'); background-size: cover; background-position: center;\">
    <div class=\"section-overlay\"></div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                ";
        // line 12
        if ((array_key_exists("logistic", $context) && (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "                    <h1 class=\"display-4\">Edit Logistic Item</h1>
                ";
        } else {
            // line 15
            yield "                    <h1 class=\"display-4\">Add a New Logistic</h1>
                ";
        }
        // line 17
        yield "            </div>
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>

<section class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">
        ";
        // line 26
        if ((array_key_exists("logistic", $context) && (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 26, $this->source); })()))) {
            yield "Edit Logistic Item";
        } else {
            yield "Add a New Logistic";
        }
        // line 27
        yield "    </h1>

    ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((        // line 30
array_key_exists("logistic", $context) && (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 30, $this->source); })()))) ? ("app_logistic_update") : ("app_logistics"))), "method" => "POST", "attr" => ["enctype" => "multipart/form-data", "class" => "needs-validation", "novalidate" => true]]);
        // line 37
        yield "

    ";
        // line 39
        if ((array_key_exists("logistic", $context) && (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 39, $this->source); })()))) {
            // line 40
            yield "        <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
    ";
        }
        // line 42
        yield "
    <div class=\"row g-3\">
        <!-- Type Field -->
        <div class=\"col-md-6\">
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Type"]);
        yield "
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-tags\"></i></span>
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => ("form-select rounded-end" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "valid", [], "any", false, false, false, 51)) ? ("") : (" is-invalid")))]]);
        // line 53
        yield "
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Category Field -->
        <div class=\"col-md-6\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "category", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Category"]);
        yield "
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-folder\"></i></span>
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "category", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => ("form-select rounded-end" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "category", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "valid", [], "any", false, false, false, 67)) ? ("") : (" is-invalid")))]]);
        // line 69
        yield "
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "category", [], "any", false, false, false, 71), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Name Field -->
        <div class=\"col-md-6\">
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "nom", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Name"]);
        yield "
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-box\"></i></span>
                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "nom", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => ("form-control rounded-end" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 83
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "nom", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "valid", [], "any", false, false, false, 83)) ? ("") : (" is-invalid"))), "placeholder" => "Enter item name"]]);
        // line 86
        yield "
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "nom", [], "any", false, false, false, 88), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Price Field -->
        <div class=\"col-md-6\">
            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "prix", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Price"]);
        yield "
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "prix", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => ("form-control rounded-end" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 100
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "prix", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "valid", [], "any", false, false, false, 100)) ? ("") : (" is-invalid"))), "placeholder" => "Enter price"]]);
        // line 103
        yield "
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "prix", [], "any", false, false, false, 105), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Quantity Field -->
        <div class=\"col-md-4\">
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "quantite", [], "any", false, false, false, 112), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Quantity"]);
        yield "
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-cubes\"></i></span>
                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "quantite", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => ("form-control rounded-end" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 117
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "quantite", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "valid", [], "any", false, false, false, 117)) ? ("") : (" is-invalid"))), "placeholder" => "Enter quantity"]]);
        // line 120
        yield "
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "quantite", [], "any", false, false, false, 122), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Capacity Field -->
        <div class=\"col-md-4\">
            ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "capacite", [], "any", false, false, false, 129), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Capacity"]);
        yield "
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-users\"></i></span>
                ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "capacite", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => ("form-control rounded-end" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 134
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "capacite", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "valid", [], "any", false, false, false, 134)) ? ("") : (" is-invalid"))), "placeholder" => "Enter capacity"]]);
        // line 137
        yield "
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "capacite", [], "any", false, false, false, 139), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Location Field -->
        <div class=\"col-md-4\">
            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "lieux", [], "any", false, false, false, 146), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Location"]);
        yield "
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-map-marker-alt\"></i></span>
                ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "lieux", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => ("form-control rounded-end" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 151
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "lieux", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "valid", [], "any", false, false, false, 151)) ? ("") : (" is-invalid"))), "placeholder" => "Enter location"]]);
        // line 154
        yield "
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "lieux", [], "any", false, false, false, 156), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Description Field -->
        <div class=\"col-12\">
            ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "description", [], "any", false, false, false, 163), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Description"]);
        yield "
            ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "description", [], "any", false, false, false, 164), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 166
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "description", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "valid", [], "any", false, false, false, 166)) ? ("") : (" is-invalid"))), "rows" => 3, "placeholder" => "Enter item description"]]);
        // line 170
        yield "
            <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "description", [], "any", false, false, false, 172), 'errors');
        yield "
            </div>
        </div>

        <!-- Image Upload Field -->
        <div class=\"col-md-6\">
            ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "imageFile", [], "any", false, false, false, 178), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Item Image"]);
        yield "
            ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "imageFile", [], "any", false, false, false, 179), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 181
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "imageFile", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "valid", [], "any", false, false, false, 181)) ? ("") : (" is-invalid"))), "accept" => "image/jpeg,image/png"]]);
        // line 184
        yield "
            <small class=\"form-text text-muted\">Accepted formats: JPG, PNG (max 2MB)</small>
            <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "imageFile", [], "any", false, false, false, 187), 'errors');
        yield "
            </div>
        </div>

        <!-- Current Image Preview -->
        ";
        // line 192
        if (((array_key_exists("logistic", $context) && (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 192, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 192, $this->source); })()), "image", [], "any", false, false, false, 192))) {
            // line 193
            yield "            <div class=\"col-md-6\">
                <div class=\"border p-3 rounded bg-light\">
                    <p class=\"fw-semibold mb-2\"><i class=\"fas fa-image me-1\"></i> Current Image:</p>
                    <img src=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 196, $this->source); })()), "image", [], "any", false, false, false, 196)), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Current logistic item image\">
                </div>
            </div>
        ";
        }
        // line 200
        yield "    </div>

    <div class=\"d-flex justify-content-between mt-4 mb-5\">
        <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"btn btn-secondary px-4\">
            <i class=\"fas fa-arrow-left me-1\"></i> Back to Marketplace
        </a>
        <div>
            <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"btn btn-danger px-4 me-2\">
                <i class=\"fas fa-times me-1\"></i> Cancel
            </a>
            <button type=\"submit\" class=\"btn btn-primary px-4\">
                <i class=\"fas ";
        // line 211
        yield (((array_key_exists("logistic", $context) && (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 211, $this->source); })()))) ? ("fa-save") : ("fa-plus-circle"));
        yield " me-1\"></i>
                ";
        // line 212
        yield (((array_key_exists("logistic", $context) && (isset($context["logistic"]) || array_key_exists("logistic", $context) ? $context["logistic"] : (function () { throw new RuntimeError('Variable "logistic" does not exist.', 212, $this->source); })()))) ? ("Update") : ("Add"));
        yield "
            </button>
        </div>
    </div>

    ";
        // line 217
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), 'form_end');
        yield "
</section>
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
        return "logistics/logisticForm.html.twig";
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
        return array (  386 => 217,  378 => 212,  374 => 211,  367 => 207,  360 => 203,  355 => 200,  348 => 196,  343 => 193,  341 => 192,  333 => 187,  328 => 184,  326 => 181,  325 => 179,  321 => 178,  312 => 172,  308 => 170,  306 => 166,  305 => 164,  301 => 163,  291 => 156,  287 => 154,  285 => 151,  284 => 149,  278 => 146,  268 => 139,  264 => 137,  262 => 134,  261 => 132,  255 => 129,  245 => 122,  241 => 120,  239 => 117,  238 => 115,  232 => 112,  222 => 105,  218 => 103,  216 => 100,  215 => 98,  209 => 95,  199 => 88,  195 => 86,  193 => 83,  192 => 81,  186 => 78,  176 => 71,  172 => 69,  170 => 67,  169 => 65,  163 => 62,  153 => 55,  149 => 53,  147 => 51,  146 => 49,  140 => 46,  134 => 42,  128 => 40,  126 => 39,  122 => 37,  120 => 30,  119 => 29,  115 => 27,  109 => 26,  98 => 17,  94 => 15,  90 => 13,  88 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center text-white\" id=\"section_1\" style=\"background-image: url('{{ asset('images/formLog.png') }}'); background-size: cover; background-position: center;\">
    <div class=\"section-overlay\"></div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                {% if logistic is defined and logistic %}
                    <h1 class=\"display-4\">Edit Logistic Item</h1>
                {% else %}
                    <h1 class=\"display-4\">Add a New Logistic</h1>
                {% endif %}
            </div>
        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>

<section class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">
        {% if logistic is defined and logistic %}Edit Logistic Item{% else %}Add a New Logistic{% endif %}
    </h1>

    {{ form_start(form, {
        'action': path(logistic is defined and logistic ? 'app_logistic_update' : 'app_logistics'),
        'method': 'POST',
        'attr': { 
            'enctype': 'multipart/form-data', 
            'class': 'needs-validation', 
            'novalidate': true 
        }
    }) }}

    {% if logistic is defined and logistic %}
        <input type=\"hidden\" name=\"id\" value=\"{{ logistic.id }}\">
    {% endif %}

    <div class=\"row g-3\">
        <!-- Type Field -->
        <div class=\"col-md-6\">
            {{ form_label(form.type, 'Type', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-tags\"></i></span>
                {{ form_widget(form.type, {
                    'attr': {
                        'class': 'form-select rounded-end' ~ (form.type.vars.valid ? '' : ' is-invalid'),
                    }
                }) }}
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    {{ form_errors(form.type) }}
                </div>
            </div>
        </div>

        <!-- Category Field -->
        <div class=\"col-md-6\">
            {{ form_label(form.category, 'Category', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-folder\"></i></span>
                {{ form_widget(form.category, {
                    'attr': {
                        'class': 'form-select rounded-end' ~ (form.category.vars.valid ? '' : ' is-invalid'),
                    }
                }) }}
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    {{ form_errors(form.category) }}
                </div>
            </div>
        </div>

        <!-- Name Field -->
        <div class=\"col-md-6\">
            {{ form_label(form.nom, 'Name', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-box\"></i></span>
                {{ form_widget(form.nom, {
                    'attr': {
                        'class': 'form-control rounded-end' ~ (form.nom.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Enter item name'
                    }
                }) }}
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    {{ form_errors(form.nom) }}
                </div>
            </div>
        </div>

        <!-- Price Field -->
        <div class=\"col-md-6\">
            {{ form_label(form.prix, 'Price', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                {{ form_widget(form.prix, {
                    'attr': {
                        'class': 'form-control rounded-end' ~ (form.prix.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Enter price'
                    }
                }) }}
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    {{ form_errors(form.prix) }}
                </div>
            </div>
        </div>

        <!-- Quantity Field -->
        <div class=\"col-md-4\">
            {{ form_label(form.quantite, 'Quantity', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-cubes\"></i></span>
                {{ form_widget(form.quantite, {
                    'attr': {
                        'class': 'form-control rounded-end' ~ (form.quantite.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Enter quantity'
                    }
                }) }}
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    {{ form_errors(form.quantite) }}
                </div>
            </div>
        </div>

        <!-- Capacity Field -->
        <div class=\"col-md-4\">
            {{ form_label(form.capacite, 'Capacity', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-users\"></i></span>
                {{ form_widget(form.capacite, {
                    'attr': {
                        'class': 'form-control rounded-end' ~ (form.capacite.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Enter capacity'
                    }
                }) }}
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    {{ form_errors(form.capacite) }}
                </div>
            </div>
        </div>

        <!-- Location Field -->
        <div class=\"col-md-4\">
            {{ form_label(form.lieux, 'Location', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            <div class=\"input-group has-validation\">
                <span class=\"input-group-text\"><i class=\"fas fa-map-marker-alt\"></i></span>
                {{ form_widget(form.lieux, {
                    'attr': {
                        'class': 'form-control rounded-end' ~ (form.lieux.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Enter location'
                    }
                }) }}
                <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                    {{ form_errors(form.lieux) }}
                </div>
            </div>
        </div>

        <!-- Description Field -->
        <div class=\"col-12\">
            {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            {{ form_widget(form.description, {
                'attr': {
                    'class': 'form-control' ~ (form.description.vars.valid ? '' : ' is-invalid'),
                    'rows': 3,
                    'placeholder': 'Enter item description'
                }
            }) }}
            <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                {{ form_errors(form.description) }}
            </div>
        </div>

        <!-- Image Upload Field -->
        <div class=\"col-md-6\">
            {{ form_label(form.imageFile, 'Item Image', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
            {{ form_widget(form.imageFile, {
                'attr': {
                    'class': 'form-control' ~ (form.imageFile.vars.valid ? '' : ' is-invalid'),
                    'accept': 'image/jpeg,image/png'
                }
            }) }}
            <small class=\"form-text text-muted\">Accepted formats: JPG, PNG (max 2MB)</small>
            <div class=\"invalid-feedback\" style=\"color: red; font-size: 0.875em;\">
                {{ form_errors(form.imageFile) }}
            </div>
        </div>

        <!-- Current Image Preview -->
        {% if logistic is defined and logistic and logistic.image %}
            <div class=\"col-md-6\">
                <div class=\"border p-3 rounded bg-light\">
                    <p class=\"fw-semibold mb-2\"><i class=\"fas fa-image me-1\"></i> Current Image:</p>
                    <img src=\"{{ asset(logistic.image) }}\" class=\"img-thumbnail\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Current logistic item image\">
                </div>
            </div>
        {% endif %}
    </div>

    <div class=\"d-flex justify-content-between mt-4 mb-5\">
        <a href=\"{{ path('app_shop') }}\" class=\"btn btn-secondary px-4\">
            <i class=\"fas fa-arrow-left me-1\"></i> Back to Marketplace
        </a>
        <div>
            <a href=\"{{ path('app_shop') }}\" class=\"btn btn-danger px-4 me-2\">
                <i class=\"fas fa-times me-1\"></i> Cancel
            </a>
            <button type=\"submit\" class=\"btn btn-primary px-4\">
                <i class=\"fas {{ logistic is defined and logistic ? 'fa-save' : 'fa-plus-circle' }} me-1\"></i>
                {{ logistic is defined and logistic ? 'Update' : 'Add' }}
            </button>
        </div>
    </div>

    {{ form_end(form) }}
</section>
{% endblock %}", "logistics/logisticForm.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\logistics\\logisticForm.html.twig");
    }
}
