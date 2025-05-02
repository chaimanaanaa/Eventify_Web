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

/* @EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig */
class __TwigTemplate_7dd05ee508cc17e18187bf4e0fa17e58 extends Template
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
            'ewz_recaptcha_widget' => [$this, 'block_ewz_recaptcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('ewz_recaptcha_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ewz_recaptcha_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ewz_recaptcha_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ewz_recaptcha_widget"));

        // line 2
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "ewz_recaptcha_enabled", [], "any", false, false, false, 2)) {
            // line 3
            yield "    <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "ewz_recaptcha_api_uri", [], "any", false, false, false, 3), "html", null, true);
            yield "?render=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "public_key", [], "any", false, false, false, 3), "html", null, true);
            yield "\"></script>

    ";
            // line 5
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "ewz_recaptcha_hide_badge", [], "any", false, false, false, 5)) {
                // line 6
                yield "      <link rel=\"stylesheet\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/ewzrecaptcha/css/recaptcha.css"), "html", null, true);
                yield "\">
    ";
            }
            // line 8
            yield "
    ";
            // line 9
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'widget');
            yield "

    <script";
            // line 11
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 11), "script_nonce_csp", [], "any", true, true, false, 11) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "script_nonce_csp", [], "any", false, false, false, 11) === ""))) {
                yield " nonce=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "script_nonce_csp", [], "any", false, false, false, 11), "html", null, true);
                yield "\"";
            }
            yield ">
      var grecaptchaInput = document.getElementById('";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "');
      grecaptchaInput.value = ''; // Always reset the value to get a brand new challenge
      var grecaptchaForm = grecaptchaInput.form;
      grecaptchaForm.addEventListener('submit', function (e) {
        e.preventDefault();

        grecaptcha.ready(function () {
          grecaptcha.execute('";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "public_key", [], "any", false, false, false, 19), "html", null, true);
            yield "', { action: '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 19), "action_name", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "action_name", [], "any", false, false, false, 19), Twig\Extension\CoreExtension::constant("EWZ\\Bundle\\RecaptchaBundle\\Form\\Type\\EWZRecaptchaV3Type::DEFAULT_ACTION_NAME"))) : (Twig\Extension\CoreExtension::constant("EWZ\\Bundle\\RecaptchaBundle\\Form\\Type\\EWZRecaptchaV3Type::DEFAULT_ACTION_NAME"))), "html", null, true);
            yield "' }).then(function (token) {
            grecaptchaInput.value = token;
            HTMLFormElement.prototype.submit.call(grecaptchaForm);
          });
        });
      }, false);
    </script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  117 => 19,  107 => 12,  99 => 11,  94 => 9,  91 => 8,  85 => 6,  83 => 5,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block ewz_recaptcha_widget %}
  {% if form.vars.ewz_recaptcha_enabled %}
    <script src=\"{{ form.vars.ewz_recaptcha_api_uri }}?render={{ form.vars.public_key }}\"></script>

    {% if form.vars.ewz_recaptcha_hide_badge %}
      <link rel=\"stylesheet\" href=\"{{ asset('/bundles/ewzrecaptcha/css/recaptcha.css') }}\">
    {% endif %}

    {{ form_widget(form) }}

    <script{% if form.vars.script_nonce_csp is defined and form.vars.script_nonce_csp is not same as('') %} nonce=\"{{ form.vars.script_nonce_csp }}\"{% endif %}>
      var grecaptchaInput = document.getElementById('{{ id }}');
      grecaptchaInput.value = ''; // Always reset the value to get a brand new challenge
      var grecaptchaForm = grecaptchaInput.form;
      grecaptchaForm.addEventListener('submit', function (e) {
        e.preventDefault();

        grecaptcha.ready(function () {
          grecaptcha.execute('{{ form.vars.public_key }}', { action: '{{ form.vars.action_name|default(constant('EWZ\\\\Bundle\\\\RecaptchaBundle\\\\Form\\\\Type\\\\EWZRecaptchaV3Type::DEFAULT_ACTION_NAME')) }}' }).then(function (token) {
            grecaptchaInput.value = token;
            HTMLFormElement.prototype.submit.call(grecaptchaForm);
          });
        });
      }, false);
    </script>
  {% endif %}
{% endblock %}
", "@EWZRecaptcha/Form/v3/ewz_recaptcha_widget.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\vendor\\excelwebzone\\recaptcha-bundle\\src\\Resources\\views\\Form\\v3\\ewz_recaptcha_widget.html.twig");
    }
}
