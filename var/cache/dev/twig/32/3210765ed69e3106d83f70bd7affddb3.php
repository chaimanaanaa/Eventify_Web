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

/* marketplace/panier.html.twig */
class __TwigTemplate_1b8c1aebed253939373aea47f40857c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/panier.html.twig"));

        // line 1
        yield "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        yield "\">
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
        
        .receipt-date {
            color: #5a6b7c;
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .receipt-items {
            margin-bottom: 25px;
        }
        
        .receipt-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #e1e8ed;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .receipt-item:hover {
            background-color: #fafcfc;
            transform: translateX(5px);
        }
        
        .receipt-item:last-child {
            border-bottom: none;
        }
        
        .item-image {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 15px;
            border: 1px solid #e1e8ed;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .item-image:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .item-details {
            flex-grow: 1;
        }
        
        .item-name {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
            font-size: 16px;
        }
        
        .item-price {
            font-weight: 700;
            color: #1a2e35;
            font-size: 16px;
        }
        
        .item-remove {
            margin-left: 15px;
        }
        
        .receipt-totals {
            margin: 25px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px solid #e1e8ed;
            position: relative;
            overflow: hidden;
        }
        
        .receipt-totals:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: #ADC29B;
        }
        
        .total-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .total-line:hover {
            transform: translateX(5px);
        }
        
        .total-line:last-child {
            margin-bottom: 0;
            padding-top: 12px;
            border-top: 1px dashed #d1d9e6;
            font-weight: 800;
            font-size: 18px;
            color: #1a2e35;
        }
        
        .receipt-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px dashed #d1d9e6;
            color: #5a6b7c;
            font-size: 14px;
        }
        
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            gap: 15px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
            font-weight: 600;
            flex: 1;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid #ADC29B;
            color: #ADC29B;
        }
        
        .btn-outline:hover {
            background-color: #f0f4f8;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(173, 194, 155, 0.2);
        }
        
        .btn-primary {
            background-color: #ADC29B;
            color: white;
            box-shadow: 0 4px 12px rgba(173, 194, 155, 0.3);
        }
        
        .btn-primary:hover {
            background-color: #9bb486;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(173, 194, 155, 0.4);
        }
        
        .btn-danger {
            background-color: transparent;
            color: #ff4444;
            padding: 8px;
            font-size: 16px;
            border-radius: 50%;
            border: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
            background-color: #ffeeee;
            animation: shake 0.5s;
            animation-iteration-count: 1;
        }
        
        @keyframes shake {
            0% { transform: translateX(0) rotate(0deg); }
            20% { transform: translateX(-3px) rotate(-5deg); }
            40% { transform: translateX(3px) rotate(5deg); }
            60% { transform: translateX(-3px) rotate(-5deg); }
            80% { transform: translateX(3px) rotate(5deg); }
            100% { transform: translateX(0) rotate(0deg); }
        }
        
        .alert {
            padding: 15px 20px;
            margin-bottom: 25px;
            border-radius: 8px;
            text-align: center;
            font-size: 15px;
            border: 1px solid transparent;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .alert:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
        }
        
        .alert-success {
            background-color: #f0fff4;
            border-color: #c6f6d5;
            color: #2f855a;
        }
        
        .alert-success:before {
            background-color: #48bb78;
        }
        
        .alert-warning {
            background-color: #fffaf0;
            border-color: #fed7aa;
            color: #c05621;
        }
        
        .alert-warning:before {
            background-color: #ed8936;
        }
        
        .thank-you-message {
            text-align: center;
            margin: 25px 0;
            color: #4a5568;
            font-style: italic;
            line-height: 1.6;
            position: relative;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #ADC29B;
        }
        
        .empty-cart-message {
            text-align: center;
            padding: 40px 0;
            color: #718096;
            font-size: 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .empty-cart-icon {
            font-size: 48px;
            color: #ADC29B;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
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
        
        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
        }
        
        .progress-steps:before {
            content: '';
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
            height: 2px;
            background: #e1e8ed;
            z-index: 1;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e1e8ed;
            color: #718096;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 8px;
            border: 2px solid white;
        }
        
        .step.active .step-number {
            background: #ADC29B;
            color: white;
            box-shadow: 0 0 0 4px rgba(173, 194, 155, 0.2);
        }
        
        .step-label {
            font-size: 12px;
            color: #718096;
            text-align: center;
        }
        
        .step.active .step-label {
            color: #1a2e35;
            font-weight: 600;
        }
        
        .coupon-box {
            display: flex;
            margin: 20px 0;
            gap: 10px;
        }
        
        .coupon-input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #e1e8ed;
            border-radius: 8px;
            font-size: 14px;
        }
        
        .coupon-btn {
            padding: 12px 20px;
            background: #ADC29B;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .coupon-btn:hover {
            background: #9bb486;
        }
        
        .payment-methods {
            margin: 20px 0;
        }
        
        .payment-method {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 1px solid #e1e8ed;
            border-radius: 8px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .payment-method:hover {
            border-color: #ADC29B;
            background: #f8f9fa;
        }
        
        .payment-method input {
            margin-right: 15px;
        }
        
        .payment-icon {
            margin-right: 15px;
            font-size: 24px;
            color: #5a6b7c;
        }
        
        .stripe-badge {
            background: #635bff;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            margin-left: 10px;
        }
        
        .cash-badge {
            background: #10b981;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class=\"receipt-container animate__animated animate__fadeIn\">
        <div class=\"receipt-header\">
            <h2>Your Order Receipt</h2>
            <div class=\"receipt-date\">";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F j, Y"), "html", null, true);
        yield "</div>
        </div>

        <!-- Progress Steps (Visual Only) -->
        <div class=\"progress-steps\">
            <div class=\"step active\">
                <div class=\"step-number\">1</div>
                <div class=\"step-label\">Cart</div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">2</div>
                <div class=\"step-label\">Details</div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">3</div>
                <div class=\"step-label\">Payment</div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">4</div>
                <div class=\"step-label\">Complete</div>
            </div>
        </div>

        ";
        // line 509
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 509, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 509));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 510
            yield "            <div class=\"alert alert-warning animate__animated animate__shakeX\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                ";
            // line 512
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 515
        yield "
        ";
        // line 516
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 516, $this->source); })()), "flashes", ["success"], "method", false, false, false, 516));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 517
            yield "            <div class=\"alert alert-success animate__animated animate__bounceIn\">
                <i class=\"fas fa-check-circle me-2\"></i>
                ";
            // line 519
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        yield "
        <div class=\"receipt-items\">
            ";
        // line 524
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 524, $this->source); })()))) {
            // line 525
            yield "                <div class=\"empty-cart-message\">
                    <div class=\"empty-cart-icon\">
                        <i class=\"fas fa-shopping-cart\"></i>
                    </div>
                    <p>Your cart is empty</p>
                    <a href=\"";
            // line 530
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            yield "\" class=\"btn btn-outline mt-3\">
                        <i class=\"fas fa-arrow-left me-2\"></i> Continue Shopping
                    </a>
                </div>
            ";
        } else {
            // line 535
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 535, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 536
                yield "                <div class=\"receipt-item animate__animated animate__fadeIn\">
                    <img src=\"";
                // line 537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 537), "html", null, true);
                yield "\" class=\"item-image\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 537), "html", null, true);
                yield "\">
                    <div class=\"item-details\">
                        <div class=\"item-name\">";
                // line 539
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 539), "html", null, true);
                yield "</div>
                        <div class=\"item-price\">";
                // line 540
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 540), "html", null, true);
                yield " DT</div>
                    </div>
                    <div class=\"item-remove\">
                        <a href=\"";
                // line 543
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 543)]), "html", null, true);
                yield "\" class=\"btn btn-danger\" 
                           onclick=\"return confirm('Are you sure you want to remove this item?');\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </a>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 550
            yield "            ";
        }
        // line 551
        yield "        </div>

        ";
        // line 553
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 553, $this->source); })()))) {
            // line 554
            yield "        
        
        <div class=\"receipt-totals\">
            <div class=\"total-line\">
                <span>Subtotal:</span>
                <span>";
            // line 559
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSum"]) || array_key_exists("totalSum", $context) ? $context["totalSum"] : (function () { throw new RuntimeError('Variable "totalSum" does not exist.', 559, $this->source); })()), "html", null, true);
            yield " DT</span>
            </div>
            <div class=\"total-line\">
                <span>Shipping:</span>
                <span>7 DT</span>
            </div>
            
            <div class=\"total-line\">
                <span>Total:</span>
                <span>";
            // line 568
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["totalSum"]) || array_key_exists("totalSum", $context) ? $context["totalSum"] : (function () { throw new RuntimeError('Variable "totalSum" does not exist.', 568, $this->source); })()) + 7), "html", null, true);
            yield " DT</span>
            </div>
        </div>
        
        <!-- Payment Methods - Stripe and Cash on Delivery -->
        <div class=\"payment-options\" style=\"margin-top: 30px;\">
            <h3 style=\"margin-bottom: 20px; color: #1a2e35;\">Choose Payment Method</h3>
            
            <div class=\"payment-buttons\" style=\"display: flex; gap: 15px; justify-content: center;\">
                <form action=\"";
            // line 577
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_checkout_session");
            yield "\" method=\"POST\" style=\"flex: 1;\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"
                        width: 100%;
                        padding: 15px 24px;
                        background: linear-gradient(135deg, #635bff 0%, #8a85ff 100%);
                        color: white;
                        border: none;
                        border-radius: 12px;
                        font-size: 16px;
                        font-weight: 600;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 12px;
                        box-shadow: 0 4px 15px rgba(99, 91, 255, 0.2);
                    \">
                        <img src=\"https://cdn.worldvectorlogo.com/logos/stripe-4.svg\" alt=\"Stripe\" style=\"width: 24px; height: 24px; filter: brightness(0) invert(1);\">
                        <span>Pay with Stripe</span>
                    </button>
                </form>

                <form action=\"";
            // line 600
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_cash");
            yield "\" method=\"POST\" style=\"flex: 1;\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"
                        width: 100%;
                        padding: 15px 24px;
                        background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
                        color: white;
                        border: none;
                        border-radius: 12px;
                        font-size: 16px;
                        font-weight: 600;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 12px;
                        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.2);
                    \">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"color: white;\">
                            <rect x=\"1\" y=\"4\" width=\"22\" height=\"16\" rx=\"2\" ry=\"2\"></rect>
                            <line x1=\"1\" y1=\"10\" x2=\"23\" y2=\"10\"></line>
                            <path d=\"M7 14h.01\"></path>
                            <path d=\"M11 14h.01\"></path>
                            <path d=\"M15 14h.01\"></path>
                        </svg>
                        <span>Cash on Delivery</span>
                    </button>
                </form>
            </div>
        </div>
        ";
        }
        // line 631
        yield "
        ";
        // line 632
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 632, $this->source); })()))) {
            // line 633
            yield "            <div class=\"button-group\">
                <a href=\"";
            // line 634
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            yield "\" class=\"btn btn-outline\">
                    <i class=\"fas fa-arrow-left\"></i> Continue Shopping
                </a>
            </div>
        ";
        }
        // line 639
        yield "
        <div class=\"thank-you-message animate__animated animate__fadeInUp\">
            <p><i class=\"fas fa-leaf me-2\" style=\"color: #ADC29B;\"></i> Thank you for shopping with us. Your satisfaction is our priority.</p>
        </div>

        <img src=\"";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Eventify Logo\" class=\"eventify-logo\">
        
        <div class=\"receipt-footer\">
            <p>&copy; ";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Eventify. All rights reserved.</p>
        </div>
    </div>

    <script>
        // Simple animations for visual demonstration
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cart items sequentially
            const items = document.querySelectorAll('.receipt-item');
            items.forEach((item, index) => {
                item.style.animationDelay = `\${index * 0.1}s`;
            });
            
            // Payment method selection
            const paymentMethods = document.querySelectorAll('.payment-method');
            paymentMethods.forEach(method => {
                method.addEventListener('click', function() {
                    paymentMethods.forEach(m => m.style.borderColor = '#e1e8ed');
                    this.style.borderColor = '#ADC29B';
                    const radio = this.querySelector('input');
                    radio.checked = true;
                });
            });
            
            // Coupon button effect
            const couponBtn = document.querySelector('.coupon-btn');
            if (couponBtn) {
                couponBtn.addEventListener('click', function() {
                    this.textContent = 'Applying...';
                    setTimeout(() => {
                        this.textContent = 'Applied!';
                        this.style.backgroundColor = '#48bb78';
                    }, 1000);
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Handle payment buttons
            document.querySelectorAll('.payment-button').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const paymentType = this.dataset.paymentType;
                    const url = paymentType === 'stripe' ? '";
        // line 690
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_checkout_session");
        yield "' : '";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_cash");
        yield "';
                    
                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Add popup to the page
                            document.body.insertAdjacentHTML('beforeend', data.popup);
                            
                            // Handle popup close
                            document.querySelector('.close-popup').addEventListener('click', function() {
                                document.querySelector('.thank-you-popup').remove();
                                window.location.reload(); // Reload to update cart
                            });
                            
                            // Close popup when clicking outside
                            document.querySelector('.thank-you-popup').addEventListener('click', function(e) {
                                if (e.target === this) {
                                    this.remove();
                                    window.location.reload(); // Reload to update cart
                                }
                            });
                        } else {
                            alert(data.error || 'An error occurred during payment');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred during payment');
                    });
                });
            });
        });
    </script>
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/panier.html.twig";
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
        return array (  835 => 690,  789 => 647,  783 => 644,  776 => 639,  768 => 634,  765 => 633,  763 => 632,  760 => 631,  726 => 600,  700 => 577,  688 => 568,  676 => 559,  669 => 554,  667 => 553,  663 => 551,  660 => 550,  647 => 543,  641 => 540,  637 => 539,  630 => 537,  627 => 536,  622 => 535,  614 => 530,  607 => 525,  605 => 524,  601 => 522,  592 => 519,  588 => 517,  584 => 516,  581 => 515,  572 => 512,  568 => 510,  564 => 509,  538 => 486,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<head>
    <link rel=\"stylesheet\" href=\"{{ asset('css/cart.css') }}\">
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
        
        .receipt-date {
            color: #5a6b7c;
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .receipt-items {
            margin-bottom: 25px;
        }
        
        .receipt-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #e1e8ed;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .receipt-item:hover {
            background-color: #fafcfc;
            transform: translateX(5px);
        }
        
        .receipt-item:last-child {
            border-bottom: none;
        }
        
        .item-image {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 15px;
            border: 1px solid #e1e8ed;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .item-image:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .item-details {
            flex-grow: 1;
        }
        
        .item-name {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
            font-size: 16px;
        }
        
        .item-price {
            font-weight: 700;
            color: #1a2e35;
            font-size: 16px;
        }
        
        .item-remove {
            margin-left: 15px;
        }
        
        .receipt-totals {
            margin: 25px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px solid #e1e8ed;
            position: relative;
            overflow: hidden;
        }
        
        .receipt-totals:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: #ADC29B;
        }
        
        .total-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .total-line:hover {
            transform: translateX(5px);
        }
        
        .total-line:last-child {
            margin-bottom: 0;
            padding-top: 12px;
            border-top: 1px dashed #d1d9e6;
            font-weight: 800;
            font-size: 18px;
            color: #1a2e35;
        }
        
        .receipt-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px dashed #d1d9e6;
            color: #5a6b7c;
            font-size: 14px;
        }
        
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            gap: 15px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
            font-weight: 600;
            flex: 1;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid #ADC29B;
            color: #ADC29B;
        }
        
        .btn-outline:hover {
            background-color: #f0f4f8;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(173, 194, 155, 0.2);
        }
        
        .btn-primary {
            background-color: #ADC29B;
            color: white;
            box-shadow: 0 4px 12px rgba(173, 194, 155, 0.3);
        }
        
        .btn-primary:hover {
            background-color: #9bb486;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(173, 194, 155, 0.4);
        }
        
        .btn-danger {
            background-color: transparent;
            color: #ff4444;
            padding: 8px;
            font-size: 16px;
            border-radius: 50%;
            border: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
            background-color: #ffeeee;
            animation: shake 0.5s;
            animation-iteration-count: 1;
        }
        
        @keyframes shake {
            0% { transform: translateX(0) rotate(0deg); }
            20% { transform: translateX(-3px) rotate(-5deg); }
            40% { transform: translateX(3px) rotate(5deg); }
            60% { transform: translateX(-3px) rotate(-5deg); }
            80% { transform: translateX(3px) rotate(5deg); }
            100% { transform: translateX(0) rotate(0deg); }
        }
        
        .alert {
            padding: 15px 20px;
            margin-bottom: 25px;
            border-radius: 8px;
            text-align: center;
            font-size: 15px;
            border: 1px solid transparent;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .alert:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
        }
        
        .alert-success {
            background-color: #f0fff4;
            border-color: #c6f6d5;
            color: #2f855a;
        }
        
        .alert-success:before {
            background-color: #48bb78;
        }
        
        .alert-warning {
            background-color: #fffaf0;
            border-color: #fed7aa;
            color: #c05621;
        }
        
        .alert-warning:before {
            background-color: #ed8936;
        }
        
        .thank-you-message {
            text-align: center;
            margin: 25px 0;
            color: #4a5568;
            font-style: italic;
            line-height: 1.6;
            position: relative;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #ADC29B;
        }
        
        .empty-cart-message {
            text-align: center;
            padding: 40px 0;
            color: #718096;
            font-size: 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .empty-cart-icon {
            font-size: 48px;
            color: #ADC29B;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
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
        
        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
        }
        
        .progress-steps:before {
            content: '';
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
            height: 2px;
            background: #e1e8ed;
            z-index: 1;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e1e8ed;
            color: #718096;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 8px;
            border: 2px solid white;
        }
        
        .step.active .step-number {
            background: #ADC29B;
            color: white;
            box-shadow: 0 0 0 4px rgba(173, 194, 155, 0.2);
        }
        
        .step-label {
            font-size: 12px;
            color: #718096;
            text-align: center;
        }
        
        .step.active .step-label {
            color: #1a2e35;
            font-weight: 600;
        }
        
        .coupon-box {
            display: flex;
            margin: 20px 0;
            gap: 10px;
        }
        
        .coupon-input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #e1e8ed;
            border-radius: 8px;
            font-size: 14px;
        }
        
        .coupon-btn {
            padding: 12px 20px;
            background: #ADC29B;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .coupon-btn:hover {
            background: #9bb486;
        }
        
        .payment-methods {
            margin: 20px 0;
        }
        
        .payment-method {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 1px solid #e1e8ed;
            border-radius: 8px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .payment-method:hover {
            border-color: #ADC29B;
            background: #f8f9fa;
        }
        
        .payment-method input {
            margin-right: 15px;
        }
        
        .payment-icon {
            margin-right: 15px;
            font-size: 24px;
            color: #5a6b7c;
        }
        
        .stripe-badge {
            background: #635bff;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            margin-left: 10px;
        }
        
        .cash-badge {
            background: #10b981;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class=\"receipt-container animate__animated animate__fadeIn\">
        <div class=\"receipt-header\">
            <h2>Your Order Receipt</h2>
            <div class=\"receipt-date\">{{ \"now\"|date(\"F j, Y\") }}</div>
        </div>

        <!-- Progress Steps (Visual Only) -->
        <div class=\"progress-steps\">
            <div class=\"step active\">
                <div class=\"step-number\">1</div>
                <div class=\"step-label\">Cart</div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">2</div>
                <div class=\"step-label\">Details</div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">3</div>
                <div class=\"step-label\">Payment</div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">4</div>
                <div class=\"step-label\">Complete</div>
            </div>
        </div>

        {% for message in app.flashes('warning') %}
            <div class=\"alert alert-warning animate__animated animate__shakeX\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success animate__animated animate__bounceIn\">
                <i class=\"fas fa-check-circle me-2\"></i>
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"receipt-items\">
            {% if cartItems is empty %}
                <div class=\"empty-cart-message\">
                    <div class=\"empty-cart-icon\">
                        <i class=\"fas fa-shopping-cart\"></i>
                    </div>
                    <p>Your cart is empty</p>
                    <a href=\"{{ path('app_shop') }}\" class=\"btn btn-outline mt-3\">
                        <i class=\"fas fa-arrow-left me-2\"></i> Continue Shopping
                    </a>
                </div>
            {% else %}
                {% for item in cartItems %}
                <div class=\"receipt-item animate__animated animate__fadeIn\">
                    <img src=\"{{ item.img }}\" class=\"item-image\" alt=\"{{ item.name }}\">
                    <div class=\"item-details\">
                        <div class=\"item-name\">{{ item.name }}</div>
                        <div class=\"item-price\">{{ item.prix }} DT</div>
                    </div>
                    <div class=\"item-remove\">
                        <a href=\"{{ path('cart_remove', {'id': item.id}) }}\" class=\"btn btn-danger\" 
                           onclick=\"return confirm('Are you sure you want to remove this item?');\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </a>
                    </div>
                </div>
                {% endfor %}
            {% endif %}
        </div>

        {% if cartItems is not empty %}
        
        
        <div class=\"receipt-totals\">
            <div class=\"total-line\">
                <span>Subtotal:</span>
                <span>{{ totalSum }} DT</span>
            </div>
            <div class=\"total-line\">
                <span>Shipping:</span>
                <span>7 DT</span>
            </div>
            
            <div class=\"total-line\">
                <span>Total:</span>
                <span>{{ totalSum + 7 }} DT</span>
            </div>
        </div>
        
        <!-- Payment Methods - Stripe and Cash on Delivery -->
        <div class=\"payment-options\" style=\"margin-top: 30px;\">
            <h3 style=\"margin-bottom: 20px; color: #1a2e35;\">Choose Payment Method</h3>
            
            <div class=\"payment-buttons\" style=\"display: flex; gap: 15px; justify-content: center;\">
                <form action=\"{{ path('create_checkout_session') }}\" method=\"POST\" style=\"flex: 1;\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"
                        width: 100%;
                        padding: 15px 24px;
                        background: linear-gradient(135deg, #635bff 0%, #8a85ff 100%);
                        color: white;
                        border: none;
                        border-radius: 12px;
                        font-size: 16px;
                        font-weight: 600;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 12px;
                        box-shadow: 0 4px 15px rgba(99, 91, 255, 0.2);
                    \">
                        <img src=\"https://cdn.worldvectorlogo.com/logos/stripe-4.svg\" alt=\"Stripe\" style=\"width: 24px; height: 24px; filter: brightness(0) invert(1);\">
                        <span>Pay with Stripe</span>
                    </button>
                </form>

                <form action=\"{{ path('payment_cash') }}\" method=\"POST\" style=\"flex: 1;\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"
                        width: 100%;
                        padding: 15px 24px;
                        background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
                        color: white;
                        border: none;
                        border-radius: 12px;
                        font-size: 16px;
                        font-weight: 600;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 12px;
                        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.2);
                    \">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"color: white;\">
                            <rect x=\"1\" y=\"4\" width=\"22\" height=\"16\" rx=\"2\" ry=\"2\"></rect>
                            <line x1=\"1\" y1=\"10\" x2=\"23\" y2=\"10\"></line>
                            <path d=\"M7 14h.01\"></path>
                            <path d=\"M11 14h.01\"></path>
                            <path d=\"M15 14h.01\"></path>
                        </svg>
                        <span>Cash on Delivery</span>
                    </button>
                </form>
            </div>
        </div>
        {% endif %}

        {% if cartItems is not empty %}
            <div class=\"button-group\">
                <a href=\"{{ path('app_shop') }}\" class=\"btn btn-outline\">
                    <i class=\"fas fa-arrow-left\"></i> Continue Shopping
                </a>
            </div>
        {% endif %}

        <div class=\"thank-you-message animate__animated animate__fadeInUp\">
            <p><i class=\"fas fa-leaf me-2\" style=\"color: #ADC29B;\"></i> Thank you for shopping with us. Your satisfaction is our priority.</p>
        </div>

        <img src=\"{{ asset('images/logo.png') }}\" alt=\"Eventify Logo\" class=\"eventify-logo\">
        
        <div class=\"receipt-footer\">
            <p>&copy; {{ \"now\"|date(\"Y\") }} Eventify. All rights reserved.</p>
        </div>
    </div>

    <script>
        // Simple animations for visual demonstration
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cart items sequentially
            const items = document.querySelectorAll('.receipt-item');
            items.forEach((item, index) => {
                item.style.animationDelay = `\${index * 0.1}s`;
            });
            
            // Payment method selection
            const paymentMethods = document.querySelectorAll('.payment-method');
            paymentMethods.forEach(method => {
                method.addEventListener('click', function() {
                    paymentMethods.forEach(m => m.style.borderColor = '#e1e8ed');
                    this.style.borderColor = '#ADC29B';
                    const radio = this.querySelector('input');
                    radio.checked = true;
                });
            });
            
            // Coupon button effect
            const couponBtn = document.querySelector('.coupon-btn');
            if (couponBtn) {
                couponBtn.addEventListener('click', function() {
                    this.textContent = 'Applying...';
                    setTimeout(() => {
                        this.textContent = 'Applied!';
                        this.style.backgroundColor = '#48bb78';
                    }, 1000);
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Handle payment buttons
            document.querySelectorAll('.payment-button').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const paymentType = this.dataset.paymentType;
                    const url = paymentType === 'stripe' ? '{{ path('create_checkout_session') }}' : '{{ path('payment_cash') }}';
                    
                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Add popup to the page
                            document.body.insertAdjacentHTML('beforeend', data.popup);
                            
                            // Handle popup close
                            document.querySelector('.close-popup').addEventListener('click', function() {
                                document.querySelector('.thank-you-popup').remove();
                                window.location.reload(); // Reload to update cart
                            });
                            
                            // Close popup when clicking outside
                            document.querySelector('.thank-you-popup').addEventListener('click', function(e) {
                                if (e.target === this) {
                                    this.remove();
                                    window.location.reload(); // Reload to update cart
                                }
                            });
                        } else {
                            alert(data.error || 'An error occurred during payment');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred during payment');
                    });
                });
            });
        });
    </script>
</body>", "marketplace/panier.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\marketplace\\panier.html.twig");
    }
}
