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
class __TwigTemplate_794cf4adaad6d22d94dcbe7b89208951 extends Template
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
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #222;
            background-color: #f0f2f5;
            padding: 0;
            margin: 0;
            min-height: 100vh;
        }
        
        .receipt-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            border-top: 6px solid #ADC29B;
            position: relative;
        }
        
        .receipt-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px dashed #d1d9e6;
        }
        
        .receipt-header h2 {
            color: #1a2e35;
            margin: 0 0 10px;
            font-weight: 700;
            font-size: 28px;
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
        }
        
        .receipt-item:last-child {
            border-bottom: none;
        }
        
        .item-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 15px;
            border: 1px solid #e1e8ed;
        }
        
        .item-details {
            flex-grow: 1;
        }
        
        .item-name {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
        }
        
        .item-price {
            font-weight: 700;
            color: #1a2e35;
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
        }
        
        .total-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 16px;
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
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            border: none;
            transition: all 0.2s ease;
            font-weight: 600;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid #ADC29B;
            color: #ADC29B;
        }
        
        .btn-outline:hover {
            background-color: #f0f4f8;
        }
        
        .btn-primary {
            background-color: #ADC29B;
            color: white;
            box-shadow: 0 2px 10px rgba(173, 194, 155, 0.3);
        }
        
        .btn-primary:hover {
            background-color: #9bb486;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(173, 194, 155, 0.4);
        }
        
        .btn-danger {
            background-color: transparent;
            color: #ff4444;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
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
            border-radius: 6px;
            text-align: center;
            font-size: 15px;
            border: 1px solid transparent;
        }
        
        .alert-success {
            background-color: #f0fff4;
            border-color: #c6f6d5;
            color: #2f855a;
        }
        
        .alert-warning {
            background-color: #fffaf0;
            border-color: #fed7aa;
            color: #c05621;
        }
        
        .thank-you-message {
            text-align: center;
            margin: 25px 0;
            color: #4a5568;
            font-style: italic;
            line-height: 1.6;
        }
        
        .empty-cart-message {
            text-align: center;
            padding: 40px 0;
            color: #718096;
            font-size: 18px;
        }
        
        .eventify-logo {
            display: block;
            margin: 30px auto 0;
            height: 200px;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class=\"receipt-container\">
        <div class=\"receipt-header\">
            <h2>Your Order Receipt</h2>
            <div class=\"receipt-date\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F j, Y"), "html", null, true);
        yield "</div>
        </div>
<!--
        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 238));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 239
            yield "            <div class=\"alert alert-warning\">
                ";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        yield "
        ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "flashes", ["success"], "method", false, false, false, 244));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 245
            yield "            <div class=\"alert alert-success\">
                ";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        yield "-->

        <div class=\"receipt-items\">
            ";
        // line 251
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 251, $this->source); })()))) {
            // line 252
            yield "                <div class=\"empty-cart-message\">
                    <i class=\"fas fa-shopping-cart fa-3x mb-3\" style=\"color: #ADC29B;\"></i>
                    <p>Your cart is empty</p>
                </div>
            ";
        } else {
            // line 257
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 257, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 258
                yield "                <div class=\"receipt-item\">
                    <img src=\"";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 259), "html", null, true);
                yield "\" class=\"item-image\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 259), "html", null, true);
                yield "\">
                    <div class=\"item-details\">
                        <div class=\"item-name\">";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 261), "html", null, true);
                yield "</div>
                        <div class=\"item-price\">";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 262), "html", null, true);
                yield " DT</div>
                    </div>
                    <div class=\"item-remove\">
                        <a href=\"";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 265)]), "html", null, true);
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
            // line 272
            yield "            ";
        }
        // line 273
        yield "        </div>

        ";
        // line 275
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 275, $this->source); })()))) {
            // line 276
            yield "        <div class=\"receipt-totals\">
            <div class=\"total-line\">
                <span>Subtotal:</span>
                <span>";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSum"]) || array_key_exists("totalSum", $context) ? $context["totalSum"] : (function () { throw new RuntimeError('Variable "totalSum" does not exist.', 279, $this->source); })()), "html", null, true);
            yield " DT</span>
            </div>
            <div class=\"total-line\">
                <span>Shipping:</span>
                <span>7 DT</span>
            </div>
            <div class=\"total-line\">
                <span>Total:</span>
                <span>";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["totalSum"]) || array_key_exists("totalSum", $context) ? $context["totalSum"] : (function () { throw new RuntimeError('Variable "totalSum" does not exist.', 287, $this->source); })()) + 7), "html", null, true);
            yield " DT</span>
            </div>
        </div>
        ";
        }
        // line 291
        yield "
        <div class=\"button-group\">
            <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"btn btn-outline\">Back to Shop</a>
            ";
        // line 294
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 294, $this->source); })()))) {
            // line 295
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_view");
            yield "\" class=\"btn btn-primary\">Proceed to Checkout</a>
            ";
        }
        // line 297
        yield "        </div>

        <div class=\"thank-you-message\">
            <p>Thank you for shopping with us. Your satisfaction is our priority. 💚</p>
        </div>

        <img src=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Eventify Logo\" class=\"eventify-logo\">
        
        <div class=\"receipt-footer\">
            <p>&copy; ";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Eventify. All rights reserved.</p>
        </div>
    </div>
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
        return array (  442 => 306,  436 => 303,  428 => 297,  422 => 295,  420 => 294,  416 => 293,  412 => 291,  405 => 287,  394 => 279,  389 => 276,  387 => 275,  383 => 273,  380 => 272,  367 => 265,  361 => 262,  357 => 261,  350 => 259,  347 => 258,  342 => 257,  335 => 252,  333 => 251,  328 => 248,  319 => 246,  316 => 245,  312 => 244,  309 => 243,  300 => 240,  297 => 239,  293 => 238,  287 => 235,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<head>
    <link rel=\"stylesheet\" href=\"{{ asset('css/cart.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #222;
            background-color: #f0f2f5;
            padding: 0;
            margin: 0;
            min-height: 100vh;
        }
        
        .receipt-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            border-top: 6px solid #ADC29B;
            position: relative;
        }
        
        .receipt-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px dashed #d1d9e6;
        }
        
        .receipt-header h2 {
            color: #1a2e35;
            margin: 0 0 10px;
            font-weight: 700;
            font-size: 28px;
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
        }
        
        .receipt-item:last-child {
            border-bottom: none;
        }
        
        .item-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 15px;
            border: 1px solid #e1e8ed;
        }
        
        .item-details {
            flex-grow: 1;
        }
        
        .item-name {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
        }
        
        .item-price {
            font-weight: 700;
            color: #1a2e35;
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
        }
        
        .total-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 16px;
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
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            border: none;
            transition: all 0.2s ease;
            font-weight: 600;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid #ADC29B;
            color: #ADC29B;
        }
        
        .btn-outline:hover {
            background-color: #f0f4f8;
        }
        
        .btn-primary {
            background-color: #ADC29B;
            color: white;
            box-shadow: 0 2px 10px rgba(173, 194, 155, 0.3);
        }
        
        .btn-primary:hover {
            background-color: #9bb486;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(173, 194, 155, 0.4);
        }
        
        .btn-danger {
            background-color: transparent;
            color: #ff4444;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
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
            border-radius: 6px;
            text-align: center;
            font-size: 15px;
            border: 1px solid transparent;
        }
        
        .alert-success {
            background-color: #f0fff4;
            border-color: #c6f6d5;
            color: #2f855a;
        }
        
        .alert-warning {
            background-color: #fffaf0;
            border-color: #fed7aa;
            color: #c05621;
        }
        
        .thank-you-message {
            text-align: center;
            margin: 25px 0;
            color: #4a5568;
            font-style: italic;
            line-height: 1.6;
        }
        
        .empty-cart-message {
            text-align: center;
            padding: 40px 0;
            color: #718096;
            font-size: 18px;
        }
        
        .eventify-logo {
            display: block;
            margin: 30px auto 0;
            height: 200px;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class=\"receipt-container\">
        <div class=\"receipt-header\">
            <h2>Your Order Receipt</h2>
            <div class=\"receipt-date\">{{ \"now\"|date(\"F j, Y\") }}</div>
        </div>
<!--
        {% for message in app.flashes('warning') %}
            <div class=\"alert alert-warning\">
                {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}-->

        <div class=\"receipt-items\">
            {% if cartItems is empty %}
                <div class=\"empty-cart-message\">
                    <i class=\"fas fa-shopping-cart fa-3x mb-3\" style=\"color: #ADC29B;\"></i>
                    <p>Your cart is empty</p>
                </div>
            {% else %}
                {% for item in cartItems %}
                <div class=\"receipt-item\">
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
        {% endif %}

        <div class=\"button-group\">
            <a href=\"{{ path('app_shop') }}\" class=\"btn btn-outline\">Back to Shop</a>
            {% if cartItems is not empty %}
                <a href=\"{{ path('cart_view') }}\" class=\"btn btn-primary\">Proceed to Checkout</a>
            {% endif %}
        </div>

        <div class=\"thank-you-message\">
            <p>Thank you for shopping with us. Your satisfaction is our priority. 💚</p>
        </div>

        <img src=\"{{ asset('images/logo.png') }}\" alt=\"Eventify Logo\" class=\"eventify-logo\">
        
        <div class=\"receipt-footer\">
            <p>&copy; {{ \"now\"|date(\"Y\") }} Eventify. All rights reserved.</p>
        </div>
    </div>
</body>", "marketplace/panier.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\marketplace\\panier.html.twig");
    }
}
