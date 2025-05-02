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

/* marketplace/thank_you.html.twig */
class __TwigTemplate_02346f00271fa083ee55064724ef8b32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/thank_you.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/thank_you.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #222;
            background-color: #f0f2f5;
            padding: 0;
            margin: 0;
            min-height: 100vh;
            background-image: linear-gradient(135deg, #f5f7fa 0%, #f0f2f5 100%);
        }
        
        .receipt-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-top: 6px solid #ADC29B;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .receipt-container:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
            transform: translateY(-2px);
        }
        
        .receipt-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px dashed #d1d9e6;
            position: relative;
        }
        
        .receipt-header h2 {
            color: #1a2e35;
            margin: 0 0 10px;
            font-weight: 700;
            font-size: 28px;
            position: relative;
            display: inline-block;
        }
        
        .receipt-header h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: #ADC29B;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 3px;
        }
        
        .order-details {
            margin: 30px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px solid #e1e8ed;
        }
        
        .order-details p {
            margin: 10px 0;
            font-size: 16px;
            color: #2d3748;
        }
        
        .order-details strong {
            color: #1a2e35;
            font-weight: 600;
        }
        
        .qr-section {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            border: 1px solid #e1e8ed;
        }
        
        .qr-code {
            max-width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .qr-code img {
            width: 100%;
            height: auto;
        }
        
        .download-section {
            text-align: center;
            margin: 20px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #ADC29B;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(173, 194, 155, 0.3);
        }
        
        .btn:hover {
            background-color: #9bb486;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(173, 194, 155, 0.4);
        }
        
        .thank-you-message {
            text-align: center;
            margin: 30px 0;
            color: #4a5568;
            font-style: italic;
            line-height: 1.6;
            position: relative;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #ADC29B;
        }
        
        .back-to-shop {
            text-align: center;
            margin-top: 30px;
        }
        
        .back-to-shop a {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background-color: transparent;
            color: #ADC29B;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            border: 2px solid #ADC29B;
            transition: all 0.3s ease;
        }
        
        .back-to-shop a:hover {
            background-color: #f0f4f8;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(173, 194, 155, 0.2);
        }
        
        .back-to-shop i {
            margin-right: 8px;
        }
        
        .receipt-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px dashed #d1d9e6;
            color: #5a6b7c;
            font-size: 14px;
        }
        
        .eventify-logo {
            display: block;
            margin: 30px auto 0;
            height: 120px;
            opacity: 0.8;
            transition: all 0.3s ease;
        }
        
        .eventify-logo:hover {
            opacity: 1;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class=\"receipt-container animate__animated animate__fadeIn\">
        <div class=\"receipt-header\">
            <h2>Thank You for Your Order!</h2>
            <div class=\"receipt-date\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F j, Y"), "html", null, true);
        yield "</div>
        </div>

        <div class=\"order-details animate__animated animate__fadeInUp\">
            <p><strong>Order ID:</strong> ";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 204, $this->source); })()), "html", null, true);
        yield "</p>
            <p><strong>Total Amount:</strong> ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 205, $this->source); })()), "html", null, true);
        yield " DT</p>
            <p><strong>Payment Method:</strong> ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 206, $this->source); })())), "html", null, true);
        yield "</p>
            <p><strong>Date:</strong> ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F j, Y, g:i a"), "html", null, true);
        yield "</p>
        </div>

        ";
        // line 210
        if ((isset($context["qrCodePath"]) || array_key_exists("qrCodePath", $context) ? $context["qrCodePath"] : (function () { throw new RuntimeError('Variable "qrCodePath" does not exist.', 210, $this->source); })())) {
            // line 211
            yield "        <div class=\"qr-section animate__animated animate__fadeInUp\">
            <h3>Order QR Code</h3>
            <div class=\"qr-code\">
                <img src=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["qrCodePath"]) || array_key_exists("qrCodePath", $context) ? $context["qrCodePath"] : (function () { throw new RuntimeError('Variable "qrCodePath" does not exist.', 214, $this->source); })())), "html", null, true);
            yield "\" alt=\"Order QR Code\">
            </div>
        </div>
        ";
        }
        // line 218
        yield "
        ";
        // line 219
        if ((isset($context["pdfPath"]) || array_key_exists("pdfPath", $context) ? $context["pdfPath"] : (function () { throw new RuntimeError('Variable "pdfPath" does not exist.', 219, $this->source); })())) {
            // line 220
            yield "        <div class=\"download-section animate__animated animate__fadeInUp\">
            <a href=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["pdfPath"]) || array_key_exists("pdfPath", $context) ? $context["pdfPath"] : (function () { throw new RuntimeError('Variable "pdfPath" does not exist.', 221, $this->source); })())), "html", null, true);
            yield "\" download class=\"btn\">
                <i class=\"fas fa-download\"></i> Download Receipt
            </a>
        </div>
        ";
        }
        // line 226
        yield "
        <div class=\"thank-you-message animate__animated animate__fadeInUp\">
            <p><i class=\"fas fa-leaf\" style=\"color: #ADC29B;\"></i> Thank you for shopping with us. Your satisfaction is our priority.</p>
        </div>

        <div class=\"back-to-shop animate__animated animate__fadeInUp\">
            <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\">
                <i class=\"fas fa-arrow-left\"></i> Back to Shop
            </a>
        </div>

        <img src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Eventify Logo\" class=\"eventify-logo\">
        
        <div class=\"receipt-footer\">
            <p>&copy; ";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Eventify. All rights reserved.</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/thank_you.html.twig";
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
        return array (  326 => 240,  320 => 237,  312 => 232,  304 => 226,  296 => 221,  293 => 220,  291 => 219,  288 => 218,  281 => 214,  276 => 211,  274 => 210,  268 => 207,  264 => 206,  260 => 205,  256 => 204,  249 => 200,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #222;
            background-color: #f0f2f5;
            padding: 0;
            margin: 0;
            min-height: 100vh;
            background-image: linear-gradient(135deg, #f5f7fa 0%, #f0f2f5 100%);
        }
        
        .receipt-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-top: 6px solid #ADC29B;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .receipt-container:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
            transform: translateY(-2px);
        }
        
        .receipt-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px dashed #d1d9e6;
            position: relative;
        }
        
        .receipt-header h2 {
            color: #1a2e35;
            margin: 0 0 10px;
            font-weight: 700;
            font-size: 28px;
            position: relative;
            display: inline-block;
        }
        
        .receipt-header h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: #ADC29B;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 3px;
        }
        
        .order-details {
            margin: 30px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px solid #e1e8ed;
        }
        
        .order-details p {
            margin: 10px 0;
            font-size: 16px;
            color: #2d3748;
        }
        
        .order-details strong {
            color: #1a2e35;
            font-weight: 600;
        }
        
        .qr-section {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            border: 1px solid #e1e8ed;
        }
        
        .qr-code {
            max-width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .qr-code img {
            width: 100%;
            height: auto;
        }
        
        .download-section {
            text-align: center;
            margin: 20px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #ADC29B;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(173, 194, 155, 0.3);
        }
        
        .btn:hover {
            background-color: #9bb486;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(173, 194, 155, 0.4);
        }
        
        .thank-you-message {
            text-align: center;
            margin: 30px 0;
            color: #4a5568;
            font-style: italic;
            line-height: 1.6;
            position: relative;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #ADC29B;
        }
        
        .back-to-shop {
            text-align: center;
            margin-top: 30px;
        }
        
        .back-to-shop a {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background-color: transparent;
            color: #ADC29B;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            border: 2px solid #ADC29B;
            transition: all 0.3s ease;
        }
        
        .back-to-shop a:hover {
            background-color: #f0f4f8;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(173, 194, 155, 0.2);
        }
        
        .back-to-shop i {
            margin-right: 8px;
        }
        
        .receipt-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px dashed #d1d9e6;
            color: #5a6b7c;
            font-size: 14px;
        }
        
        .eventify-logo {
            display: block;
            margin: 30px auto 0;
            height: 120px;
            opacity: 0.8;
            transition: all 0.3s ease;
        }
        
        .eventify-logo:hover {
            opacity: 1;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class=\"receipt-container animate__animated animate__fadeIn\">
        <div class=\"receipt-header\">
            <h2>Thank You for Your Order!</h2>
            <div class=\"receipt-date\">{{ \"now\"|date(\"F j, Y\") }}</div>
        </div>

        <div class=\"order-details animate__animated animate__fadeInUp\">
            <p><strong>Order ID:</strong> {{ orderId }}</p>
            <p><strong>Total Amount:</strong> {{ total }} DT</p>
            <p><strong>Payment Method:</strong> {{ paymentMethod|capitalize }}</p>
            <p><strong>Date:</strong> {{ \"now\"|date(\"F j, Y, g:i a\") }}</p>
        </div>

        {% if qrCodePath %}
        <div class=\"qr-section animate__animated animate__fadeInUp\">
            <h3>Order QR Code</h3>
            <div class=\"qr-code\">
                <img src=\"{{ asset(qrCodePath) }}\" alt=\"Order QR Code\">
            </div>
        </div>
        {% endif %}

        {% if pdfPath %}
        <div class=\"download-section animate__animated animate__fadeInUp\">
            <a href=\"{{ asset(pdfPath) }}\" download class=\"btn\">
                <i class=\"fas fa-download\"></i> Download Receipt
            </a>
        </div>
        {% endif %}

        <div class=\"thank-you-message animate__animated animate__fadeInUp\">
            <p><i class=\"fas fa-leaf\" style=\"color: #ADC29B;\"></i> Thank you for shopping with us. Your satisfaction is our priority.</p>
        </div>

        <div class=\"back-to-shop animate__animated animate__fadeInUp\">
            <a href=\"{{ path('app_shop') }}\">
                <i class=\"fas fa-arrow-left\"></i> Back to Shop
            </a>
        </div>

        <img src=\"{{ asset('images/logo.png') }}\" alt=\"Eventify Logo\" class=\"eventify-logo\">
        
        <div class=\"receipt-footer\">
            <p>&copy; {{ \"now\"|date(\"Y\") }} Eventify. All rights reserved.</p>
        </div>
    </div>
</body>
</html>", "marketplace/thank_you.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\marketplace\\thank_you.html.twig");
    }
}
