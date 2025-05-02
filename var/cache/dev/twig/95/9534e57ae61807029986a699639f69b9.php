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

/* marketplace/thank_you_popup.html.twig */
class __TwigTemplate_87643f36c064bd96f8b83abcb0ab2d79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/thank_you_popup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/thank_you_popup.html.twig"));

        // line 1
        yield "<div class=\"thank-you-popup\">
    <div class=\"popup-content\">
        <div class=\"popup-header\">
            <h2>Thank You for Your Order!</h2>
            <button class=\"close-popup\">&times;</button>
        </div>
        
        <div class=\"popup-body\">
            <div class=\"order-summary\">
                <p><strong>Order ID:</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</p>
                <p><strong>Total:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 11, $this->source); })()), "html", null, true);
        yield " DT</p>
                <p><strong>Payment Method:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "</p>
            </div>

            ";
        // line 15
        if ((isset($context["qrCodePath"]) || array_key_exists("qrCodePath", $context) ? $context["qrCodePath"] : (function () { throw new RuntimeError('Variable "qrCodePath" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "            <div class=\"qr-code\">
                <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["qrCodePath"]) || array_key_exists("qrCodePath", $context) ? $context["qrCodePath"] : (function () { throw new RuntimeError('Variable "qrCodePath" does not exist.', 17, $this->source); })())), "html", null, true);
            yield "\" alt=\"Order QR Code\">
            </div>
            ";
        }
        // line 20
        yield "
            ";
        // line 21
        if ((isset($context["pdfPath"]) || array_key_exists("pdfPath", $context) ? $context["pdfPath"] : (function () { throw new RuntimeError('Variable "pdfPath" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "            <div class=\"pdf-download\">
                <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["pdfPath"]) || array_key_exists("pdfPath", $context) ? $context["pdfPath"] : (function () { throw new RuntimeError('Variable "pdfPath" does not exist.', 23, $this->source); })())), "html", null, true);
            yield "\" download class=\"btn btn-primary\">
                    Download Receipt
                </a>
            </div>
            ";
        }
        // line 28
        yield "        </div>
    </div>
</div>

<style>
.thank-you-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    width: 90%;
    max-width: 500px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.popup-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.popup-header h2 {
    margin: 0;
    color: #333;
}

.close-popup {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #666;
}

.popup-body {
    text-align: center;
}

.order-summary {
    margin-bottom: 20px;
    text-align: left;
}

.qr-code {
    margin: 20px 0;
}

.qr-code img {
    max-width: 200px;
    height: auto;
}

.pdf-download {
    margin-top: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Close popup when clicking the close button
    document.querySelector('.close-popup').addEventListener('click', function() {
        document.querySelector('.thank-you-popup').style.display = 'none';
    });

    // Close popup when clicking outside
    document.querySelector('.thank-you-popup').addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });
});
</script> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/thank_you_popup.html.twig";
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
        return array (  100 => 28,  92 => 23,  89 => 22,  87 => 21,  84 => 20,  78 => 17,  75 => 16,  73 => 15,  67 => 12,  63 => 11,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"thank-you-popup\">
    <div class=\"popup-content\">
        <div class=\"popup-header\">
            <h2>Thank You for Your Order!</h2>
            <button class=\"close-popup\">&times;</button>
        </div>
        
        <div class=\"popup-body\">
            <div class=\"order-summary\">
                <p><strong>Order ID:</strong> {{ orderId }}</p>
                <p><strong>Total:</strong> {{ total }} DT</p>
                <p><strong>Payment Method:</strong> {{ paymentMethod|capitalize }}</p>
            </div>

            {% if qrCodePath %}
            <div class=\"qr-code\">
                <img src=\"{{ asset(qrCodePath) }}\" alt=\"Order QR Code\">
            </div>
            {% endif %}

            {% if pdfPath %}
            <div class=\"pdf-download\">
                <a href=\"{{ asset(pdfPath) }}\" download class=\"btn btn-primary\">
                    Download Receipt
                </a>
            </div>
            {% endif %}
        </div>
    </div>
</div>

<style>
.thank-you-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    width: 90%;
    max-width: 500px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.popup-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.popup-header h2 {
    margin: 0;
    color: #333;
}

.close-popup {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #666;
}

.popup-body {
    text-align: center;
}

.order-summary {
    margin-bottom: 20px;
    text-align: left;
}

.qr-code {
    margin: 20px 0;
}

.qr-code img {
    max-width: 200px;
    height: auto;
}

.pdf-download {
    margin-top: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Close popup when clicking the close button
    document.querySelector('.close-popup').addEventListener('click', function() {
        document.querySelector('.thank-you-popup').style.display = 'none';
    });

    // Close popup when clicking outside
    document.querySelector('.thank-you-popup').addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });
});
</script> ", "marketplace/thank_you_popup.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\marketplace\\thank_you_popup.html.twig");
    }
}
