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

/* marketplace/show.html.twig */
class __TwigTemplate_a594c6ed7ba49f2716a5de64b8692fd7 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/show.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        yield "Vue en Direct - Eventify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "<div class=\"live-view-container\">
  <!-- Massive logo in top right -->
  <div class=\"mega-logo\">
    <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Eventify\">
  </div>
  

  <!-- Full-screen live container -->
  <div id=\"live-container\">
    <!-- Waiting animation -->
    <div class=\"waiting-screen\">
      <div class=\"camera-animation\">
        <div class=\"camera-icon\">
          <div class=\"camera-body\">
            <div class=\"camera-lens\"></div>
          </div>
        </div>
        <div class=\"signal-bars\">
          <div class=\"bar\"></div>
          <div class=\"bar\"></div>
          <div class=\"bar\"></div>
          <div class=\"bar\"></div>
          <div class=\"bar\"></div>
        </div>
        <p>Connexion en cours...</p>
      </div>
    </div>
  </div>

  <!-- Bottom controls -->
  <div class=\"live-controls\">
    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"back-btn\">
      <i class=\"bi bi-arrow-left\"></i> Quitter le direct
    </a>
    <div class=\"live-indicator\">
      <span class=\"pulse\"></span>
      EN DIRECT
    </div>
  </div>
</div>

<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    const liveURL = \"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["liveURL"]) || array_key_exists("liveURL", $context) ? $context["liveURL"] : (function () { throw new RuntimeError('Variable "liveURL" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "\";
    const container = document.getElementById(\"live-container\");
    
    function checkStream() {
      const img = new Image();
      img.src = liveURL;
      img.className = \"live-stream\";
      img.alt = \"Diffusion en direct\";

      img.onload = function() {
        container.innerHTML = \"\";
        container.appendChild(img);
      };

      img.onerror = function() {
        setTimeout(checkStream, 3000);
      };
    }

    checkStream();
  });
</script>

<style>
  /* Base styles */
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden;
    font-family: 'Segoe UI', sans-serif;
  }
  
  .live-view-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: #ADC29B;
    display: flex;
    flex-direction: column;
    z-index: 1000;
  }

  /* Massive top-right logo */
  .mega-logo {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 20;
    animation: slideIn 0.8s ease-out;
  }

  .mega-logo img {
    height: 150px; /* Massive size */
    opacity: 0.9;
    transition: all 0.3s ease;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));
  }

  .mega-logo img:hover {
    opacity: 1;
    transform: scale(1.05) rotate(-2deg);
  }

  /* Live container */
  #live-container {
    flex: 1;
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
  }

  .live-stream {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Waiting screen */
  .waiting-screen {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: rgba(173, 194, 155, 0.9);
    z-index: 5;
  }

  .camera-animation {
    text-align: center;
  }

  .camera-icon {
    display: inline-block;
    margin-bottom: 30px;
    animation: pulse 2s infinite;
  }

  .camera-body {
    width: 80px;
    height: 60px;
    background-color: #844062;
    border-radius: 10px;
    position: relative;
    display: inline-block;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  }

  .camera-lens {
    width: 35px;
    height: 35px;
    background-color: white;
    border-radius: 50%;
    position: absolute;
    top: 12px;
    left: 22px;
    border: 3px solid #844062;
  }

  .signal-bars {
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 30px;
    gap: 4px;
    margin-bottom: 15px;
  }

  .signal-bars .bar {
    width: 6px;
    background-color: #844062;
    border-radius: 3px;
    animation: signalBars 1.5s infinite ease-in-out;
  }

  .signal-bars .bar:nth-child(1) { height: 8px; animation-delay: 0.1s; }
  .signal-bars .bar:nth-child(2) { height: 16px; animation-delay: 0.2s; }
  .signal-bars .bar:nth-child(3) { height: 24px; animation-delay: 0.3s; }
  .signal-bars .bar:nth-child(4) { height: 16px; animation-delay: 0.4s; }
  .signal-bars .bar:nth-child(5) { height: 8px; animation-delay: 0.5s; }

  .waiting-screen p {
    color: #844062;
    font-weight: 500;
    font-size: 1.1rem;
    margin-top: 10px;
  }

  /* Bottom controls */
  .live-controls {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 10;
    background: linear-gradient(to top, rgba(0,0,0,0.3) 0%, transparent 100%);
  }

  .back-btn {
    color: white;
    text-decoration: none;
    font-size: 0.9rem;
    padding: 8px 15px;
    border-radius: 20px;
    background: rgba(132, 64, 98, 0.7);
    backdrop-filter: blur(5px);
    transition: all 0.2s;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .back-btn:hover {
    background: rgba(132, 64, 98, 0.9);
  }

  .live-indicator {
    color: white;
    font-size: 0.9rem;
    font-weight: 600;
    padding: 8px 15px;
    border-radius: 20px;
    background: rgba(220, 53, 69, 0.7);
    backdrop-filter: blur(5px);
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .pulse {
    width: 10px;
    height: 10px;
    background: #ff6b6b;
    border-radius: 50%;
    animation: pulse 1.5s infinite;
  }

  /* Animations */
  @keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.3); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
  }

  @keyframes signalBars {
    0%, 100% { transform: scaleY(1); }
    50% { transform: scaleY(0.6); }
  }

  @keyframes slideIn {
    from { transform: translateX(100px); opacity: 0; }
    to { transform: translateX(0); opacity: 0.9; }
  }

  /* Responsive */
  @media (max-width: 768px) {
    .mega-logo img {
      height: 100px;
    }
  }

  @media (max-width: 480px) {
    .mega-logo img {
      height: 80px;
    }
    
    .live-controls {
      padding: 10px;
    }
    
    .back-btn, .live-indicator {
      font-size: 0.8rem;
      padding: 6px 12px;
    }
  }
</style>
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
        return "marketplace/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 47,  138 => 35,  107 => 7,  102 => 4,  89 => 3,  66 => 1,  55 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block title %}Vue en Direct - Eventify{% endblock %}

{% block body %}
<div class=\"live-view-container\">
  <!-- Massive logo in top right -->
  <div class=\"mega-logo\">
    <img src=\"{{ asset('images/logo.png') }}\" alt=\"Eventify\">
  </div>
  

  <!-- Full-screen live container -->
  <div id=\"live-container\">
    <!-- Waiting animation -->
    <div class=\"waiting-screen\">
      <div class=\"camera-animation\">
        <div class=\"camera-icon\">
          <div class=\"camera-body\">
            <div class=\"camera-lens\"></div>
          </div>
        </div>
        <div class=\"signal-bars\">
          <div class=\"bar\"></div>
          <div class=\"bar\"></div>
          <div class=\"bar\"></div>
          <div class=\"bar\"></div>
          <div class=\"bar\"></div>
        </div>
        <p>Connexion en cours...</p>
      </div>
    </div>
  </div>

  <!-- Bottom controls -->
  <div class=\"live-controls\">
    <a href=\"{{ path('app_shop') }}\" class=\"back-btn\">
      <i class=\"bi bi-arrow-left\"></i> Quitter le direct
    </a>
    <div class=\"live-indicator\">
      <span class=\"pulse\"></span>
      EN DIRECT
    </div>
  </div>
</div>

<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    const liveURL = \"{{ liveURL }}\";
    const container = document.getElementById(\"live-container\");
    
    function checkStream() {
      const img = new Image();
      img.src = liveURL;
      img.className = \"live-stream\";
      img.alt = \"Diffusion en direct\";

      img.onload = function() {
        container.innerHTML = \"\";
        container.appendChild(img);
      };

      img.onerror = function() {
        setTimeout(checkStream, 3000);
      };
    }

    checkStream();
  });
</script>

<style>
  /* Base styles */
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden;
    font-family: 'Segoe UI', sans-serif;
  }
  
  .live-view-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: #ADC29B;
    display: flex;
    flex-direction: column;
    z-index: 1000;
  }

  /* Massive top-right logo */
  .mega-logo {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 20;
    animation: slideIn 0.8s ease-out;
  }

  .mega-logo img {
    height: 150px; /* Massive size */
    opacity: 0.9;
    transition: all 0.3s ease;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));
  }

  .mega-logo img:hover {
    opacity: 1;
    transform: scale(1.05) rotate(-2deg);
  }

  /* Live container */
  #live-container {
    flex: 1;
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
  }

  .live-stream {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Waiting screen */
  .waiting-screen {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: rgba(173, 194, 155, 0.9);
    z-index: 5;
  }

  .camera-animation {
    text-align: center;
  }

  .camera-icon {
    display: inline-block;
    margin-bottom: 30px;
    animation: pulse 2s infinite;
  }

  .camera-body {
    width: 80px;
    height: 60px;
    background-color: #844062;
    border-radius: 10px;
    position: relative;
    display: inline-block;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  }

  .camera-lens {
    width: 35px;
    height: 35px;
    background-color: white;
    border-radius: 50%;
    position: absolute;
    top: 12px;
    left: 22px;
    border: 3px solid #844062;
  }

  .signal-bars {
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 30px;
    gap: 4px;
    margin-bottom: 15px;
  }

  .signal-bars .bar {
    width: 6px;
    background-color: #844062;
    border-radius: 3px;
    animation: signalBars 1.5s infinite ease-in-out;
  }

  .signal-bars .bar:nth-child(1) { height: 8px; animation-delay: 0.1s; }
  .signal-bars .bar:nth-child(2) { height: 16px; animation-delay: 0.2s; }
  .signal-bars .bar:nth-child(3) { height: 24px; animation-delay: 0.3s; }
  .signal-bars .bar:nth-child(4) { height: 16px; animation-delay: 0.4s; }
  .signal-bars .bar:nth-child(5) { height: 8px; animation-delay: 0.5s; }

  .waiting-screen p {
    color: #844062;
    font-weight: 500;
    font-size: 1.1rem;
    margin-top: 10px;
  }

  /* Bottom controls */
  .live-controls {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 10;
    background: linear-gradient(to top, rgba(0,0,0,0.3) 0%, transparent 100%);
  }

  .back-btn {
    color: white;
    text-decoration: none;
    font-size: 0.9rem;
    padding: 8px 15px;
    border-radius: 20px;
    background: rgba(132, 64, 98, 0.7);
    backdrop-filter: blur(5px);
    transition: all 0.2s;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .back-btn:hover {
    background: rgba(132, 64, 98, 0.9);
  }

  .live-indicator {
    color: white;
    font-size: 0.9rem;
    font-weight: 600;
    padding: 8px 15px;
    border-radius: 20px;
    background: rgba(220, 53, 69, 0.7);
    backdrop-filter: blur(5px);
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .pulse {
    width: 10px;
    height: 10px;
    background: #ff6b6b;
    border-radius: 50%;
    animation: pulse 1.5s infinite;
  }

  /* Animations */
  @keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.3); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
  }

  @keyframes signalBars {
    0%, 100% { transform: scaleY(1); }
    50% { transform: scaleY(0.6); }
  }

  @keyframes slideIn {
    from { transform: translateX(100px); opacity: 0; }
    to { transform: translateX(0); opacity: 0.9; }
  }

  /* Responsive */
  @media (max-width: 768px) {
    .mega-logo img {
      height: 100px;
    }
  }

  @media (max-width: 480px) {
    .mega-logo img {
      height: 80px;
    }
    
    .live-controls {
      padding: 10px;
    }
    
    .back-btn, .live-indicator {
      font-size: 0.8rem;
      padding: 6px 12px;
    }
  }
</style>
{% endblock %}", "marketplace/show.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\marketplace\\show.html.twig");
    }
}
