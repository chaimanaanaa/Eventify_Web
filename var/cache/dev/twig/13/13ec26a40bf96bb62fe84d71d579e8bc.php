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

/* @EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig */
class __TwigTemplate_c0628c448fc9689e4f330870320a8d08 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 82
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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
            yield "    ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "ewz_recaptcha_ajax", [], "any", false, false, false, 3)) {
                // line 4
                yield "      ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 4, $this->source); })()), "options", [], "any", false, false, false, 4), "size", [], "any", false, false, false, 4) == "invisible") &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 4), "callback", [], "any", true, true, false, 4))) {
                    // line 5
                    yield "        ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 5, $this->source); })()), "options", [], "any", false, false, false, 5), ["callback" => "onReCaptchaSuccess"]);
                    // line 6
                    yield "        ";
                    $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 6, $this->source); })()), ["options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 6, $this->source); })())]);
                    // line 7
                    yield "
        <script>
          var onReCaptchaSuccess = function() {
            var errorDivs = document.getElementsByClassName('recaptcha-error');
            if (errorDivs.length) {
              errorDivs[0].className = '';
            }

            var errorMsgs = document.getElementsByClassName('recaptcha-error-message');
            if (errorMsgs.length) {
              errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
            }

            var forms = document.getElementsByClassName('recaptcha-form');
            if (forms.length) {
              var recaptchaSubmitEvent = document.createEvent('Event');
              recaptchaSubmitEvent.initEvent('submit', true, true);
              forms[0].addEventListener('submit', function (e) {
              e.target.submit();
              }, false);
              forms[0].dispatchEvent(recaptchaSubmitEvent);
            }
          };
        </script>
      ";
                }
                // line 32
                yield "
      <script src=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "url_challenge", [], "any", false, false, false, 33), "html", null, true);
                yield "\"";
                // line 34
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 34), "defer", [], "any", true, true, false, 34) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })()), "options", [], "any", false, false, false, 34), "defer", [], "any", false, false, false, 34))) {
                    yield " defer";
                }
                // line 35
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 35), "async", [], "any", true, true, false, 35) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()), "options", [], "any", false, false, false, 35), "async", [], "any", false, false, false, 35))) {
                    yield " async";
                }
                // line 36
                yield "></script>
      <div class=\"g-recaptcha\" data-theme=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), "options", [], "any", false, false, false, 37), "theme", [], "any", false, false, false, 37), "html", null, true);
                yield "\" data-size=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), "options", [], "any", false, false, false, 37), "size", [], "any", false, false, false, 37), "html", null, true);
                yield "\" data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), "options", [], "any", false, false, false, 37), "type", [], "any", false, false, false, 37), "html", null, true);
                yield "\" data-sitekey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "public_key", [], "any", false, false, false, 37), "html", null, true);
                yield "\"";
                // line 38
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 38), "callback", [], "any", true, true, false, 38)) {
                    yield " data-callback=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), "options", [], "any", false, false, false, 38), "callback", [], "any", false, false, false, 38), "html", null, true);
                    yield "\"";
                }
                // line 39
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 39), "errorCallback", [], "any", true, true, false, 39)) {
                    yield " data-error-callback=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 39, $this->source); })()), "options", [], "any", false, false, false, 39), "errorCallback", [], "any", false, false, false, 39), "html", null, true);
                    yield "\"";
                }
                // line 40
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 40), "expiredCallback", [], "any", true, true, false, 40)) {
                    yield " data-expired-callback=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), "options", [], "any", false, false, false, 40), "expiredCallback", [], "any", false, false, false, 40), "html", null, true);
                    yield "\"";
                }
                // line 41
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 41), "bind", [], "any", true, true, false, 41)) {
                    yield " data-bind=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), "options", [], "any", false, false, false, 41), "bind", [], "any", false, false, false, 41), "html", null, true);
                    yield "\"";
                }
                // line 42
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 42), "badge", [], "any", true, true, false, 42)) {
                    yield " data-badge=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })()), "options", [], "any", false, false, false, 42), "badge", [], "any", false, false, false, 42), "html", null, true);
                    yield "\"";
                }
                // line 43
                yield "></div>
      <noscript>
        <div style=\"width: 302px; height: 352px;\">
          <div style=\"width: 302px; height: 352px; position: relative;\">
            <div style=\"width: 302px; height: 352px; position: absolute;\">
              <iframe src=\"https://";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "ewz_recaptcha_api_host", [], "any", false, false, false, 48), "html", null, true);
                yield "/recaptcha/api/fallback?k=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "public_key", [], "any", false, false, false, 48), "html", null, true);
                yield "\"
                  style=\"width: 302px; height:352px; border-style: none; overflow: hidden;\"
              >
              </iframe>
            </div>
            <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;\">
              <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                    class=\"g-recaptcha-response\"
                    style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0; padding: 0; resize: none;\"
              >
              </textarea>
            </div>
          </div>
        </div>
      </noscript>
    ";
            } else {
                // line 64
                yield "      <div id=\"ewz_recaptcha_div\"></div>

      <script>
      (function() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.onload = function() {
          Recaptcha.create('";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "vars", [], "any", false, false, false, 71), "public_key", [], "any", false, false, false, 71), "html", null, true);
                yield "', 'ewz_recaptcha_div', ";
                yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 71, $this->source); })()), "options", [], "any", false, false, false, 71), [])) : ([])));
                yield ");
        };
        script.src = '";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "url_api", [], "any", false, false, false, 73), "html", null, true);
                yield "';
        ";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 74), "defer", [], "any", true, true, false, 74) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 74, $this->source); })()), "options", [], "any", false, false, false, 74), "defer", [], "any", false, false, false, 74))) {
                    yield "script.defer = true;";
                }
                // line 75
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 75), "async", [], "any", true, true, false, 75) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 75, $this->source); })()), "options", [], "any", false, false, false, 75), "async", [], "any", false, false, false, 75))) {
                    yield "script.async = true;";
                }
                // line 76
                yield "        document.getElementsByTagName('head')[0].appendChild(script);
      })();
      </script>
    ";
            }
            // line 80
            yield "  ";
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
        return "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  237 => 80,  231 => 76,  226 => 75,  222 => 74,  218 => 73,  211 => 71,  202 => 64,  181 => 48,  174 => 43,  168 => 42,  162 => 41,  156 => 40,  150 => 39,  144 => 38,  135 => 37,  132 => 36,  128 => 35,  124 => 34,  121 => 33,  118 => 32,  91 => 7,  88 => 6,  85 => 5,  82 => 4,  79 => 3,  76 => 2,  63 => 1,  51 => 82,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block ewz_recaptcha_widget %}
  {% if form.vars.ewz_recaptcha_enabled %}
    {% if not form.vars.ewz_recaptcha_ajax %}
      {% if attr.options.size == 'invisible' and attr.options.callback is not defined %}
        {% set options = attr.options|merge({'callback': 'onReCaptchaSuccess'}) %}
        {% set attr = attr|merge({'options': options}) %}

        <script>
          var onReCaptchaSuccess = function() {
            var errorDivs = document.getElementsByClassName('recaptcha-error');
            if (errorDivs.length) {
              errorDivs[0].className = '';
            }

            var errorMsgs = document.getElementsByClassName('recaptcha-error-message');
            if (errorMsgs.length) {
              errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
            }

            var forms = document.getElementsByClassName('recaptcha-form');
            if (forms.length) {
              var recaptchaSubmitEvent = document.createEvent('Event');
              recaptchaSubmitEvent.initEvent('submit', true, true);
              forms[0].addEventListener('submit', function (e) {
              e.target.submit();
              }, false);
              forms[0].dispatchEvent(recaptchaSubmitEvent);
            }
          };
        </script>
      {% endif %}

      <script src=\"{{ form.vars.url_challenge }}\"
        {%- if attr.options.defer is defined and attr.options.defer %} defer{% endif -%}
        {%- if attr.options.async is defined and attr.options.async %} async{% endif -%}
      ></script>
      <div class=\"g-recaptcha\" data-theme=\"{{ attr.options.theme }}\" data-size=\"{{ attr.options.size }}\" data-type=\"{{ attr.options.type }}\" data-sitekey=\"{{ form.vars.public_key }}\"
         {%- if attr.options.callback is defined %} data-callback=\"{{ attr.options.callback }}\"{% endif -%}
         {%- if attr.options.errorCallback is defined %} data-error-callback=\"{{ attr.options.errorCallback }}\"{% endif -%}
         {%- if attr.options.expiredCallback is defined %} data-expired-callback=\"{{ attr.options.expiredCallback }}\"{% endif -%}
         {%- if attr.options.bind is defined %} data-bind=\"{{ attr.options.bind }}\"{% endif -%}
         {%- if attr.options.badge is defined %} data-badge=\"{{ attr.options.badge }}\"{% endif -%}
      ></div>
      <noscript>
        <div style=\"width: 302px; height: 352px;\">
          <div style=\"width: 302px; height: 352px; position: relative;\">
            <div style=\"width: 302px; height: 352px; position: absolute;\">
              <iframe src=\"https://{{ form.vars.ewz_recaptcha_api_host }}/recaptcha/api/fallback?k={{ form.vars.public_key }}\"
                  style=\"width: 302px; height:352px; border-style: none; overflow: hidden;\"
              >
              </iframe>
            </div>
            <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;\">
              <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                    class=\"g-recaptcha-response\"
                    style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0; padding: 0; resize: none;\"
              >
              </textarea>
            </div>
          </div>
        </div>
      </noscript>
    {% else %}
      <div id=\"ewz_recaptcha_div\"></div>

      <script>
      (function() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.onload = function() {
          Recaptcha.create('{{ form.vars.public_key }}', 'ewz_recaptcha_div', {{ attr.options|default({})|json_encode|raw }});
        };
        script.src = '{{ form.vars.url_api }}';
        {% if attr.options.defer is defined and attr.options.defer %}script.defer = true;{% endif %}
        {% if attr.options.async is defined and attr.options.async %}script.async = true;{% endif %}
        document.getElementsByTagName('head')[0].appendChild(script);
      })();
      </script>
    {% endif %}
  {% endif %}
{% endblock ewz_recaptcha_widget %}

", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\vendor\\excelwebzone\\recaptcha-bundle\\src\\Resources\\views\\Form\\ewz_recaptcha_widget.html.twig");
    }
}
