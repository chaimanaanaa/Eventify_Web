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

/* marketplace/favorites.html.twig */
class __TwigTemplate_9b8b7e9983b8786f0aa0e2486a7f0691 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/favorites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/favorites.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 70
        yield " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "My Favorites";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4\">My Favorites</h1>
    
    ";
        // line 8
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            yield "        <div class=\"row\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
                // line 11
                yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <img src=\"";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_image", [], "any", false, false, false, 13), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_name", [], "any", false, false, false, 13), "html", null, true);
                yield "\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_name", [], "any", false, false, false, 15), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\">Price: ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_price", [], "any", false, false, false, 16), "html", null, true);
                yield " €</p>
                            <p class=\"card-text\"><small class=\"text-muted\">Added: ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "added_at", [], "any", false, false, false, 17), "html", null, true);
                yield "</small></p>
                            <button class=\"btn btn-danger remove-favorite\" data-id=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "logistique_id", [], "any", false, false, false, 18), "html", null, true);
                yield "\">
                                <i class=\"fas fa-heart\"></i> Remove from Favorites
                            </button>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "        </div>
    ";
        } else {
            // line 27
            yield "        <div class=\"alert alert-info\">
            You haven't added any items to your favorites yet.
        </div>
    ";
        }
        // line 31
        yield "</div>

";
        // line 33
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const removeButtons = document.querySelectorAll('.remove-favorite');
    
    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const logistiqueId = this.dataset.id;
            
            fetch(`/favorites/remove/\${logistiqueId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    this.closest('.col-md-4').remove();
                    
                    // If no favorites left, show message
                    if (document.querySelectorAll('.col-md-4').length === 0) {
                        const container = document.querySelector('.container');
                        container.innerHTML = `
                            <h1 class=\"mb-4\">My Favorites</h1>
                            <div class=\"alert alert-info\">
                                You haven't added any items to your favorites yet.
                            </div>
                        `;
                    }
                }
            });
        });
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
        return "marketplace/favorites.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  195 => 34,  172 => 33,  168 => 31,  162 => 27,  158 => 25,  145 => 18,  141 => 17,  137 => 16,  133 => 15,  126 => 13,  122 => 11,  118 => 10,  115 => 9,  113 => 8,  108 => 5,  95 => 4,  72 => 2,  61 => 70,  59 => 4,  56 => 3,  54 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block title %}My Favorites{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4\">My Favorites</h1>
    
    {% if favorites|length > 0 %}
        <div class=\"row\">
            {% for favorite in favorites %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <img src=\"{{ favorite.logistique_image }}\" class=\"card-img-top\" alt=\"{{ favorite.logistique_name }}\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ favorite.logistique_name }}</h5>
                            <p class=\"card-text\">Price: {{ favorite.logistique_price }} €</p>
                            <p class=\"card-text\"><small class=\"text-muted\">Added: {{ favorite.added_at }}</small></p>
                            <button class=\"btn btn-danger remove-favorite\" data-id=\"{{ favorite.logistique_id }}\">
                                <i class=\"fas fa-heart\"></i> Remove from Favorites
                            </button>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"alert alert-info\">
            You haven't added any items to your favorites yet.
        </div>
    {% endif %}
</div>

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const removeButtons = document.querySelectorAll('.remove-favorite');
    
    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const logistiqueId = this.dataset.id;
            
            fetch(`/favorites/remove/\${logistiqueId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    this.closest('.col-md-4').remove();
                    
                    // If no favorites left, show message
                    if (document.querySelectorAll('.col-md-4').length === 0) {
                        const container = document.querySelector('.container');
                        container.innerHTML = `
                            <h1 class=\"mb-4\">My Favorites</h1>
                            <div class=\"alert alert-info\">
                                You haven't added any items to your favorites yet.
                            </div>
                        `;
                    }
                }
            });
        });
    });
});
</script>
{% endblock %}
{% endblock %} ", "marketplace/favorites.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\marketplace\\favorites.html.twig");
    }
}
