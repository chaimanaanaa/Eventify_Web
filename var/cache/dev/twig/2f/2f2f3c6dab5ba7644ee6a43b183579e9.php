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

/* complaints/edit.html.twig */
class __TwigTemplate_0dfbae707c4dca7fcb4af9abed36a681 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complaints/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complaints/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "complaints/edit.html.twig", 1);
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
        yield "
<div class=\"container mt-4\">
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Edit Reclamation</h2>
        </div>
        <div class=\"card-body\">
            ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit"), "method" => "POST", "attr" => ["enctype" => "multipart/form-data", "novalidate" => "novalidate"]]);
        // line 38
        yield "
            
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "\">

            ";
        // line 43
        yield "            ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "valid", [], "any", false, false, false, 43)) {
            // line 44
            yield "                <div class=\"alert alert-danger\">
                    <strong>Please fix these errors:</strong>
                    ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'errors');
            yield "
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "children", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 48
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48)) > 0)) {
                    // line 49
                    yield "                            <div class=\"mt-2\">
                                <strong>";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 50), "label", [], "any", false, false, false, 50), "html", null, true);
                    yield ":</strong>
                                ";
                    // line 51
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                    yield "
                            </div>
                        ";
                }
                // line 54
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                </div>
            ";
        }
        // line 57
        yield "
            ";
        // line 59
        yield "            <div class=\"mb-3\">
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "date", [], "any", false, false, false, 60), 'label');
        yield "
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "date", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 63
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "date", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63))) ? (" is-invalid") : ("")))]]);
        // line 65
        yield "
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "date", [], "any", false, false, false, 66), 'errors');
        yield "
            </div>
            
            ";
        // line 70
        yield "            <div class=\"mb-3\">
                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "titre", [], "any", false, false, false, 71), 'label');
        yield "
                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "titre", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "titre", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74))) ? (" is-invalid") : ("")))]]);
        // line 76
        yield "
                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "titre", [], "any", false, false, false, 77), 'errors');
        yield "
            </div>
            
            ";
        // line 81
        yield "            <div class=\"mb-3\">
                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "sujet", [], "any", false, false, false, 82), 'label');
        yield "
                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "sujet", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "sujet", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "errors", [], "any", false, false, false, 85))) ? (" is-invalid") : ("")))]]);
        // line 87
        yield "
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "sujet", [], "any", false, false, false, 88), 'errors');
        yield "
            </div>
            
            ";
        // line 92
        yield "            <div class=\"mb-3\">
                <label class=\"form-label\">Current Image</label>
                ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 94, $this->source); })()), "imgRec", [], "any", false, false, false, 94)) {
            // line 95
            yield "                    <img id=\"image-preview\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 95, $this->source); })()), "imgRec", [], "any", false, false, false, 95))), "html", null, true);
            yield "\" 
                         class=\"img-thumbnail mb-2\" 
                         style=\"max-height: 200px\">
                ";
        } else {
            // line 99
            yield "                    <img id=\"image-preview\" src=\"#\" 
                         class=\"img-thumbnail mb-2\" 
                         style=\"max-height: 200px; display: none;\">
                    <p class=\"text-muted\">No image</p>
                ";
        }
        // line 104
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "imageFile", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 106
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "imageFile", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "errors", [], "any", false, false, false, 106))) ? (" is-invalid") : ("")))]]);
        // line 108
        yield "
                ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "imageFile", [], "any", false, false, false, 109), 'errors');
        yield "
            </div>
            
            <div class=\"d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_lister");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
            </div>
            
            ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
    <script src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rec_card.js"), "html", null, true);
        yield "\"></script>
 <link rel=\"stylesheet\" href=\"";
        // line 122
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
        return "complaints/edit.html.twig";
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
        return array (  273 => 122,  269 => 121,  262 => 117,  256 => 114,  248 => 109,  245 => 108,  243 => 106,  241 => 104,  234 => 99,  226 => 95,  224 => 94,  220 => 92,  214 => 88,  211 => 87,  209 => 85,  208 => 83,  204 => 82,  201 => 81,  195 => 77,  192 => 76,  190 => 74,  189 => 72,  185 => 71,  182 => 70,  176 => 66,  173 => 65,  171 => 63,  170 => 61,  166 => 60,  163 => 59,  160 => 57,  156 => 55,  150 => 54,  144 => 51,  140 => 50,  137 => 49,  134 => 48,  130 => 47,  126 => 46,  122 => 44,  119 => 43,  114 => 40,  110 => 38,  108 => 34,  99 => 27,  76 => 5,  63 => 4,  40 => 1,);
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
            <h2 class=\"mb-0\">Edit Reclamation</h2>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {
                'action': path('app_reclamation_edit'),
                'method': 'POST',
                'attr': {'enctype': 'multipart/form-data', 'novalidate': 'novalidate'}
            }) }}
            
            <input type=\"hidden\" name=\"id\" value=\"{{ reclamation.id }}\">

            {# Global Form Errors #}
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
                {{ form_label(form.date) }}
                {{ form_widget(form.date, {
                    'attr': {
                        'class': 'form-control' ~ (form.date.vars.errors|length ? ' is-invalid' : '')
                    }
                }) }}
                {{ form_errors(form.date) }}
            </div>
            
            {# Title Field #}
            <div class=\"mb-3\">
                {{ form_label(form.titre) }}
                {{ form_widget(form.titre, {
                    'attr': {
                        'class': 'form-control' ~ (form.titre.vars.errors|length ? ' is-invalid' : '')
                    }
                }) }}
                {{ form_errors(form.titre) }}
            </div>
            
            {# Subject Field #}
            <div class=\"mb-3\">
                {{ form_label(form.sujet) }}
                {{ form_widget(form.sujet, {
                    'attr': {
                        'class': 'form-control' ~ (form.sujet.vars.errors|length ? ' is-invalid' : '')
                    }
                }) }}
                {{ form_errors(form.sujet) }}
            </div>
            
            {# Image Field #}
            <div class=\"mb-3\">
                <label class=\"form-label\">Current Image</label>
                {% if reclamation.imgRec %}
                    <img id=\"image-preview\" src=\"{{ asset('uploads/' ~ reclamation.imgRec) }}\" 
                         class=\"img-thumbnail mb-2\" 
                         style=\"max-height: 200px\">
                {% else %}
                    <img id=\"image-preview\" src=\"#\" 
                         class=\"img-thumbnail mb-2\" 
                         style=\"max-height: 200px; display: none;\">
                    <p class=\"text-muted\">No image</p>
                {% endif %}
                {{ form_widget(form.imageFile, {
                    'attr': {
                        'class': 'form-control' ~ (form.imageFile.vars.errors|length ? ' is-invalid' : '')
                    }
                }) }}
                {{ form_errors(form.imageFile) }}
            </div>
            
            <div class=\"d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                <a href=\"{{ path('app_reclamation_lister') }}\" class=\"btn btn-secondary\">Cancel</a>
            </div>
            
            {{ form_end(form) }}
        </div>
    </div>
</div>
    <script src=\"{{ asset('js/rec_card.js') }}\"></script>
 <link rel=\"stylesheet\" href=\"{{ asset('css/rec_card.css') }}\">
{% endblock %}", "complaints/edit.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\complaints\\edit.html.twig");
    }
}
