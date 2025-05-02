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

/* home/about.html.twig */
class __TwigTemplate_a039ff370cd90efed6896a423320937f extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">

    <div class=\"section-overlay\"></div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-6 col-12\">

                <h1 class=\"text-white mb-4 pb-2\">Event Listing</h1>

                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>
            </div>

        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>
";
        // line 27
        yield "<section class=\"about-section section-padding\" id=\"section_2\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-12 col-12 text-center\">
                <h2 class=\"mb-lg-5 mb-4\">About Eventify</h2>
            </div>

            <div class=\"col-lg-5 col-12 me-auto mb-4 mb-lg-0\">
                
                <p class=\"p-about\" ><strong>Eventify</strong>  is an all-in-one platform designed to simplify event planning. <br>From weddings and graduations to anniversaries and baby showers, we provide the tools you need to organize memorable experiences with ease.</p>
            </div>
            <div class=\"col-lg-5 col-12 me-auto mb-4 mb-lg-0\">
                
                <img src=\"images/about.jpg\" style=\"width: 400px; transform: translate(200px, -150px);\" alt=\"about\">
            </div>

            <!--fazet lusers elly ky t3ady souris tetla3lek contact te3hom-->
            <!--
            <div class=\"col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0\">
                <div class=\"member-block\">
                    <div class=\"member-block-image-wrap\">
                        <img src=\"images/members/portrait-young-handsome-businessman-wearing-suit-standing-with-crossed-arms-with-isolated-studio-white-background.jpg\" class=\"member-block-image img-fluid\" alt=\"\">

                        <ul class=\"social-icon\">
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-twitter\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-whatsapp\"></a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"member-block-info d-flex align-items-center\">
                        <h4>Michael</h4>

                        <p class=\"ms-auto\">Founder</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-12\">
                <div class=\"member-block\">
                    <div class=\"member-block-image-wrap\">
                        <img src=\"images/members/successful-asian-lady-boss-red-blazer-holding-clipboard-with-documens-pen-working-looking-happy-white-background.jpg\" class=\"member-block-image img-fluid\" alt=\"\">

                        <ul class=\"social-icon\">
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-linkedin\"></a>
                            </li>
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-twitter\"></a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"member-block-info d-flex align-items-center\">
                        <h4>Sandy</h4>

                        <p class=\"ms-auto\">Co-Founder</p>
                    </div>
                </div>
            </div>-->

        </div>
    </div>
</section>

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
        return "home/about.html.twig";
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
        return array (  99 => 27,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%extends \"base.html.twig\" %}


{%block content %}
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">

    <div class=\"section-overlay\"></div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-6 col-12\">

                <h1 class=\"text-white mb-4 pb-2\">Event Listing</h1>

                <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Explore Events</a>
            </div>

        </div>
    </div>

    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path> <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path><path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path></svg>
</section>
{# écrivez votre code ici#}
<section class=\"about-section section-padding\" id=\"section_2\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-12 col-12 text-center\">
                <h2 class=\"mb-lg-5 mb-4\">About Eventify</h2>
            </div>

            <div class=\"col-lg-5 col-12 me-auto mb-4 mb-lg-0\">
                
                <p class=\"p-about\" ><strong>Eventify</strong>  is an all-in-one platform designed to simplify event planning. <br>From weddings and graduations to anniversaries and baby showers, we provide the tools you need to organize memorable experiences with ease.</p>
            </div>
            <div class=\"col-lg-5 col-12 me-auto mb-4 mb-lg-0\">
                
                <img src=\"images/about.jpg\" style=\"width: 400px; transform: translate(200px, -150px);\" alt=\"about\">
            </div>

            <!--fazet lusers elly ky t3ady souris tetla3lek contact te3hom-->
            <!--
            <div class=\"col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0\">
                <div class=\"member-block\">
                    <div class=\"member-block-image-wrap\">
                        <img src=\"images/members/portrait-young-handsome-businessman-wearing-suit-standing-with-crossed-arms-with-isolated-studio-white-background.jpg\" class=\"member-block-image img-fluid\" alt=\"\">

                        <ul class=\"social-icon\">
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-twitter\"></a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-whatsapp\"></a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"member-block-info d-flex align-items-center\">
                        <h4>Michael</h4>

                        <p class=\"ms-auto\">Founder</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-12\">
                <div class=\"member-block\">
                    <div class=\"member-block-image-wrap\">
                        <img src=\"images/members/successful-asian-lady-boss-red-blazer-holding-clipboard-with-documens-pen-working-looking-happy-white-background.jpg\" class=\"member-block-image img-fluid\" alt=\"\">

                        <ul class=\"social-icon\">
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-linkedin\"></a>
                            </li>
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link bi-twitter\"></a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"member-block-info d-flex align-items-center\">
                        <h4>Sandy</h4>

                        <p class=\"ms-auto\">Co-Founder</p>
                    </div>
                </div>
            </div>-->

        </div>
    </div>
</section>

{%endblock %}", "home/about.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\home\\about.html.twig");
    }
}
