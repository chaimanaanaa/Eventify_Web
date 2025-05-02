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

/* marketplace/order_receipt.html.twig */
class __TwigTemplate_4d18c62466a30171e1e2dfc26d150bae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/order_receipt.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/order_receipt.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Your Receipt</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            max-width: 100%;
            margin: 0 auto;
            line-height: 1.6;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .receipt-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            background: white;
        }
        .item-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #eee;
        }
        .warranty-badge {
            background-color: #f0f7ff;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .action-button {
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .return-btn {
            background: #fff8e6;
            color: #e67e22;
            border: 1px solid #ffd166;
        }
        .help-btn {
            background: #e6f7ff;
            color: #3498db;
            border: 1px solid #90e0ef;
        }
        .total-row {
            font-weight: bold;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid #eee;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h2><i class=\"fas fa-receipt\"></i> Your Digital Receipt</h2>
        <p>Thank you for your purchase!</p>
    </div>
    
    <div class=\"receipt-card\">
        <p><strong>Order #";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "</strong></p>
        <p>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["orderDate"]) || array_key_exists("orderDate", $context) ? $context["orderDate"] : (function () { throw new RuntimeError('Variable "orderDate" does not exist.', 83, $this->source); })()), "F j, Y • g:i a"), "html", null, true);
        yield "</p>
        
        <h3>Items Purchased:</h3>
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            yield "        <div class=\"item-row\">
            <span>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 88), "html", null, true);
            yield "</span>
            <span>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 89), 2, ".", ","), "html", null, true);
            yield " DT</span>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "        
        <div class=\"total-row\">
            <span>Total:</span>
            <span>";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["orderTotal"]) || array_key_exists("orderTotal", $context) ? $context["orderTotal"] : (function () { throw new RuntimeError('Variable "orderTotal" does not exist.', 95, $this->source); })()), 2, ".", ","), "html", null, true);
        yield " DT</span>
        </div>
        
        <div class=\"warranty-badge\">
            <h3><i class=\"fas fa-shield-alt\"></i> Warranty Activated</h3>
            <p>Valid until: ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["warrantyEnd"]) || array_key_exists("warrantyEnd", $context) ? $context["warrantyEnd"] : (function () { throw new RuntimeError('Variable "warrantyEnd" does not exist.', 100, $this->source); })()), "M j, Y"), "html", null, true);
        yield "</p>
        </div>
        
        <div class=\"action-buttons\">
            <a href=\"#\" class=\"action-button return-btn\">
                <i class=\"fas fa-undo\"></i> Start Return
            </a>
            <a href=\"#\" class=\"action-button help-btn\">
                <i class=\"fas fa-headset\"></i> Get Help
            </a>
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
        return "marketplace/order_receipt.html.twig";
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
        return array (  174 => 100,  166 => 95,  161 => 92,  152 => 89,  148 => 88,  145 => 87,  141 => 86,  135 => 83,  131 => 82,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Your Receipt</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            max-width: 100%;
            margin: 0 auto;
            line-height: 1.6;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .receipt-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            background: white;
        }
        .item-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #eee;
        }
        .warranty-badge {
            background-color: #f0f7ff;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .action-button {
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .return-btn {
            background: #fff8e6;
            color: #e67e22;
            border: 1px solid #ffd166;
        }
        .help-btn {
            background: #e6f7ff;
            color: #3498db;
            border: 1px solid #90e0ef;
        }
        .total-row {
            font-weight: bold;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid #eee;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h2><i class=\"fas fa-receipt\"></i> Your Digital Receipt</h2>
        <p>Thank you for your purchase!</p>
    </div>
    
    <div class=\"receipt-card\">
        <p><strong>Order #{{ orderId }}</strong></p>
        <p>{{ orderDate|date('F j, Y • g:i a') }}</p>
        
        <h3>Items Purchased:</h3>
        {% for item in items %}
        <div class=\"item-row\">
            <span>{{ item.name }}</span>
            <span>{{ item.price|number_format(2, '.', ',') }} DT</span>
        </div>
        {% endfor %}
        
        <div class=\"total-row\">
            <span>Total:</span>
            <span>{{ orderTotal|number_format(2, '.', ',') }} DT</span>
        </div>
        
        <div class=\"warranty-badge\">
            <h3><i class=\"fas fa-shield-alt\"></i> Warranty Activated</h3>
            <p>Valid until: {{ warrantyEnd|date('M j, Y') }}</p>
        </div>
        
        <div class=\"action-buttons\">
            <a href=\"#\" class=\"action-button return-btn\">
                <i class=\"fas fa-undo\"></i> Start Return
            </a>
            <a href=\"#\" class=\"action-button help-btn\">
                <i class=\"fas fa-headset\"></i> Get Help
            </a>
        </div>
    </div>
</body>
</html>", "marketplace/order_receipt.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\marketplace\\order_receipt.html.twig");
    }
}
