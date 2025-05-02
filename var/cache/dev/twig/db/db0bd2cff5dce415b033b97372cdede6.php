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

/* complaints/add.html.twig */
class __TwigTemplate_def7e35c01e54c612887d0bd8bcefcee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complaints/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complaints/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "complaints/add.html.twig", 1);
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
        yield "<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">

    <div class=\"section-overlay\"></div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-6 col-12\">

                <h1 class=\"text-white mb-4 pb-2\">Event Listing</h1>

                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>
            </div>

        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>
";
        // line 27
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Add New Reclamation</h2>
        </div>
        <div class=\"card-body\">
            ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
            
            ";
        // line 36
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "_token", [], "any", false, false, false, 36), 'widget');
        yield "
            
            ";
        // line 39
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 40
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 41
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield " alert-dismissible fade show\">
                        ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "
            ";
        // line 49
        yield "            ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "valid", [], "any", false, false, false, 49)) {
            // line 50
            yield "                <div class=\"alert alert-danger\">
                    <strong>Please fix these errors:</strong>
                    ";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'errors');
            yield "
                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "children", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 54
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54)) > 0)) {
                    // line 55
                    yield "                            <div class=\"mt-2\">
                                <strong>";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 56), "label", [], "any", false, false, false, 56), "html", null, true);
                    yield ":</strong>
                                ";
                    // line 57
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                    yield "
                            </div>
                        ";
                }
                // line 60
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "                </div>
            ";
        }
        // line 63
        yield "
            ";
        // line 65
        yield "            <div class=\"mb-3\">
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "date", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "date", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "date", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67))) ? (" is-invalid") : ("")))]]);
        yield "
                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "date", [], "any", false, false, false, 68), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>

            ";
        // line 72
        yield "            <div class=\"mb-3\">
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "titre", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "titre", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "titre", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74))) ? (" is-invalid") : ("")))]]);
        yield "
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "titre", [], "any", false, false, false, 75), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>

            ";
        // line 79
        yield "            <div class=\"mb-3\">
                ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "sujet", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "sujet", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "sujet", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "errors", [], "any", false, false, false, 81))) ? (" is-invalid") : (""))), "rows" => 4]]);
        yield "
                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "sujet", [], "any", false, false, false, 82), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>

            ";
        // line 86
        yield "            <div class=\"mb-3\">
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "imageFile", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "imageFile", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "imageFile", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88))) ? (" is-invalid") : ("")))]]);
        yield "
                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "imageFile", [], "any", false, false, false, 89), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
                <small class=\"form-text text-muted\">Allowed formats: JPG, PNG, GIF (Max 2MB)</small>
                <img id=\"imagePreview\" src=\"#\" alt=\"Preview\" class=\"img-thumbnail mt-2 d-none\" style=\"max-height: 200px;\">
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
<script>
    function previewImage(input) {
        const preview = document.getElementById('imagePreview');
        const file = input.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        
        if (file) {
            reader.readAsDataURL(file);
        }
    }
    
    // Attach event listener after DOM loads
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.querySelector('.file-upload');
        if (fileInput) {
            fileInput.addEventListener('change', function() {
                previewImage(this);
            });
        }
    });
</script>
    <script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rec_card.js"), "html", null, true);
        yield "\"></script>
 <link rel=\"stylesheet\" href=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/rec_card.css"), "html", null, true);
        yield "\">
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
        return "complaints/add.html.twig";
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
        return array (  304 => 126,  300 => 125,  267 => 95,  258 => 89,  254 => 88,  250 => 87,  247 => 86,  241 => 82,  237 => 81,  233 => 80,  230 => 79,  224 => 75,  220 => 74,  216 => 73,  213 => 72,  207 => 68,  203 => 67,  199 => 66,  196 => 65,  193 => 63,  189 => 61,  183 => 60,  177 => 57,  173 => 56,  170 => 55,  167 => 54,  163 => 53,  159 => 52,  155 => 50,  152 => 49,  149 => 47,  143 => 46,  133 => 42,  128 => 41,  123 => 40,  118 => 39,  112 => 36,  107 => 33,  99 => 27,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%extends \"base.html.twig\" %}


{%block content %}
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">

    <div class=\"section-overlay\"></div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-6 col-12\">

                <h1 class=\"text-white mb-4 pb-2\">Event Listing</h1>

                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>
            </div>

        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>
{# écrivez votre code ici#}
<div class=\"container mt-4\">
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Add New Reclamation</h2>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
            
            {# 1. CSRF Token - MUST be right after form_start #}
            {{ form_widget(form._token) }}
            
            {# 2. Flash Messages - shows success/error messages from controller #}
            {% for type, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ type }} alert-dismissible fade show\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}
            {% endfor %}

            {# 3. Global Form Errors #}
            {% if not form.vars.valid %}
                <div class=\"alert alert-danger\">
                    <strong>Please fix these errors:</strong>
                    {{ form_errors(form) }}
                    {% for child in form.children %}
                        {% if child.vars.errors|length > 0 %}
                            <div class=\"mt-2\">
                                <strong>{{ child.vars.label }}:</strong>
                                {{ form_errors(child) }}
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            {% endif %}

            {# Date Field #}
            <div class=\"mb-3\">
                {{ form_label(form.date, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.date, {'attr': {'class': 'form-control' ~ (form.date.vars.errors|length ? ' is-invalid' : '')}}) }}
                {{ form_errors(form.date, {'attr': {'class': 'invalid-feedback'}}) }}
            </div>

            {# Title Field #}
            <div class=\"mb-3\">
                {{ form_label(form.titre, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.titre, {'attr': {'class': 'form-control' ~ (form.titre.vars.errors|length ? ' is-invalid' : '')}}) }}
                {{ form_errors(form.titre, {'attr': {'class': 'invalid-feedback'}}) }}
            </div>

            {# Subject Field #}
            <div class=\"mb-3\">
                {{ form_label(form.sujet, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.sujet, {'attr': {'class': 'form-control' ~ (form.sujet.vars.errors|length ? ' is-invalid' : ''), 'rows': 4}}) }}
                {{ form_errors(form.sujet, {'attr': {'class': 'invalid-feedback'}}) }}
            </div>

            {# Image Field #}
            <div class=\"mb-3\">
                {{ form_label(form.imageFile, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.imageFile, {'attr': {'class': 'form-control' ~ (form.imageFile.vars.errors|length ? ' is-invalid' : '')}}) }}
                {{ form_errors(form.imageFile, {'attr': {'class': 'invalid-feedback'}}) }}
                <small class=\"form-text text-muted\">Allowed formats: JPG, PNG, GIF (Max 2MB)</small>
                <img id=\"imagePreview\" src=\"#\" alt=\"Preview\" class=\"img-thumbnail mt-2 d-none\" style=\"max-height: 200px;\">
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            {{ form_end(form) }}
        </div>
    </div>
</div>
<script>
    function previewImage(input) {
        const preview = document.getElementById('imagePreview');
        const file = input.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        
        if (file) {
            reader.readAsDataURL(file);
        }
    }
    
    // Attach event listener after DOM loads
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.querySelector('.file-upload');
        if (fileInput) {
            fileInput.addEventListener('change', function() {
                previewImage(this);
            });
        }
    });
</script>
    <script src=\"{{ asset('js/rec_card.js') }}\"></script>
 <link rel=\"stylesheet\" href=\"{{ asset('css/rec_card.css') }}\">
{% endblock %}

", "complaints/add.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\complaints\\add.html.twig");
    }
}
