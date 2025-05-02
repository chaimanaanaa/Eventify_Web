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

/* marketplace/_favorites_content.html.twig */
class __TwigTemplate_2de690f709a19b667aa7d472b9beb1c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/_favorites_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/_favorites_content.html.twig"));

        // line 1
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <div class=\"d-flex justify-content-end mb-4\">
        <button class=\"btn btn-primary add-all-to-cart\">
            <i class=\"bi bi-cart-plus me-2\"></i>Add All to Cart
        </button>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2 g-4\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
                // line 9
                yield "            <div class=\"col\">
                <div class=\"card h-100\">
                    <div class=\"card-img-top position-relative\" style=\"height: 200px; overflow: hidden;\">
                        ";
                // line 12
                if (CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_image", [], "any", false, false, false, 12)) {
                    // line 13
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_image", [], "any", false, false, false, 13)), "html", null, true);
                    yield "\" class=\"img-fluid h-100 w-100 object-fit-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_name", [], "any", false, false, false, 13), "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 15
                    yield "                            <div class=\"d-flex align-items-center justify-content-center bg-light h-100\">
                                <i class=\"bi bi-image text-muted\" style=\"font-size: 3rem;\"></i>
                            </div>
                        ";
                }
                // line 19
                yield "                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_name", [], "any", false, false, false, 21), "html", null, true);
                yield "</h5>
                        <p class=\"card-text text-muted\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_price", [], "any", false, false, false, 22), "html", null, true);
                yield " TND</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Added: ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "added_at", [], "any", false, false, false, 23), "html", null, true);
                yield "</small></p>
                    </div>
                    <div class=\"card-footer bg-transparent\">
                        <div class=\"d-flex gap-2\">
                            <button class=\"btn btn-outline-danger flex-grow-1 remove-favorite\" data-id=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_id", [], "any", false, false, false, 27), "html", null, true);
                yield "\">
                                <i class=\"bi bi-heart-fill me-2\"></i>Remove
                            </button>
                            <button class=\"btn btn-primary flex-grow-1 add-to-cart\" data-id=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_id", [], "any", false, false, false, 30), "html", null, true);
                yield "\">
                                <i class=\"bi bi-cart-plus me-2\"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "    </div>
";
        } else {
            // line 40
            yield "    <div class=\"text-center py-5\">
        <i class=\"bi bi-heart text-muted\" style=\"font-size: 3rem;\"></i>
        <h4 class=\"mt-3\">No favorites yet</h4>
        <p>Click the heart icon on items to save them here</p>
    </div>
";
        }
        // line 45
        yield " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/_favorites_content.html.twig";
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
        return array (  134 => 45,  126 => 40,  122 => 38,  108 => 30,  102 => 27,  95 => 23,  91 => 22,  87 => 21,  83 => 19,  77 => 15,  69 => 13,  67 => 12,  62 => 9,  58 => 8,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if favorites|length > 0 %}
    <div class=\"d-flex justify-content-end mb-4\">
        <button class=\"btn btn-primary add-all-to-cart\">
            <i class=\"bi bi-cart-plus me-2\"></i>Add All to Cart
        </button>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2 g-4\">
        {% for favorite in favorites %}
            <div class=\"col\">
                <div class=\"card h-100\">
                    <div class=\"card-img-top position-relative\" style=\"height: 200px; overflow: hidden;\">
                        {% if favorite.logistique_image %}
                            <img src=\"{{ asset(favorite.logistique_image) }}\" class=\"img-fluid h-100 w-100 object-fit-cover\" alt=\"{{ favorite.logistique_name }}\">
                        {% else %}
                            <div class=\"d-flex align-items-center justify-content-center bg-light h-100\">
                                <i class=\"bi bi-image text-muted\" style=\"font-size: 3rem;\"></i>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ favorite.logistique_name }}</h5>
                        <p class=\"card-text text-muted\">{{ favorite.logistique_price }} TND</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Added: {{ favorite.added_at }}</small></p>
                    </div>
                    <div class=\"card-footer bg-transparent\">
                        <div class=\"d-flex gap-2\">
                            <button class=\"btn btn-outline-danger flex-grow-1 remove-favorite\" data-id=\"{{ favorite.logistique_id }}\">
                                <i class=\"bi bi-heart-fill me-2\"></i>Remove
                            </button>
                            <button class=\"btn btn-primary flex-grow-1 add-to-cart\" data-id=\"{{ favorite.logistique_id }}\">
                                <i class=\"bi bi-cart-plus me-2\"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% else %}
    <div class=\"text-center py-5\">
        <i class=\"bi bi-heart text-muted\" style=\"font-size: 3rem;\"></i>
        <h4 class=\"mt-3\">No favorites yet</h4>
        <p>Click the heart icon on items to save them here</p>
    </div>
{% endif %} ", "marketplace/_favorites_content.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\marketplace\\_favorites_content.html.twig");
    }
}
