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

/* home/index.html.twig */
class __TwigTemplate_4502709c0584a00f45ff8ec989b39591 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 2);
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
        yield "<main>

    
";
        // line 9
        yield "
    <section class=\"hero-section d-flex justify-content-center align-items-center\" id=\"section_1\">

        <!-- Vidéo en arrière-plan -->
        <video autoplay muted loop playsinline class=\"background-video\">
            <source src=\"images/WhatsApp Vidéo 2025-03-19 à 23.40.45_d6b8e525.mp4\" type=\"video/mp4\">
            Your browser does not support the video tag.
        </video>

        <div class=\"section-overlay\"></div>

        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z\"></path></svg>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-6 col-12 mb-5 mb-lg-0\">
                    <h2 class=\"text-white\">Planify your event with us</h2>

                    <h1 class=\"cd-headline rotate-1 text-white mb-4 pb-2\">
                        <span>\"Eventify: \"</span>
                        <span class=\"cd-words-wrapper\">
                            <b class=\"is-visible\">Plan</b>
                            <b>Celebrate</b>
                            <b>Remember</b>
                        </span>
                    </h1>

                    <div class=\"custom-btn-group\">
                       
                        <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Personalize your event</a>
                     
                        <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\" class=\"link smoothscroll\">Become a member</a>
                    </div>
                </div>

               

            </div>
        </div>

        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
    </section>

";
        // line 54
        yield "
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

   
<!-- ------------------- SECTION 3 :  ------------- -->

    <section class=\"section-bg-image\" >
        <svg viewBox=\"0 0 1265 144\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"rgba(255, 255, 255, 1)\" d=\"M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z\" stroke-width=\"0\"></path> <path fill=\"rgba(255, 255, 255, 1)\" d=\"M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z\" stroke-width=\"0\"></path><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z\" stroke-width=\"0\"></path><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z\" stroke-width=\"0\"></path></svg>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-6 col-12\">
                    <div class=\"section-bg-image-block\">
                        <h2 class=\"mb-lg-3\">Get our newsletter</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore.</p>

                        <form action=\"#\" method=\"get\" class=\"custom-form mt-lg-4 mt-2\" role=\"form\">
                            <div class=\"input-group input-group-lg\">
                                <span class=\"input-group-text bi-envelope\" id=\"basic-addon1\"></span>

                                <input type=\"email\" name=\"email\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" class=\"form-control\" placeholder=\"Email address\" required=\"\">

                                <button type=\"submit\" class=\"form-control\">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <svg viewBox=\"0 0 1265 144\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"rgba(255, 255, 255, 1)\" d=\"M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z\" stroke-width=\"0\"></path> <path fill=\"rgba(255, 255, 255, 1)\" d=\"M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z\" stroke-width=\"0\"></path><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z\" stroke-width=\"0\"></path><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z\" stroke-width=\"0\"></path></svg>
    </section>
<!-- ------------------- SECTION 4 :  ------------- -->

    <section class=\"membership-section section-padding\" >
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4\">
                    <h2><span>Membership</span> at Tiya</h2>
                </div>

                <div class=\"col-lg-6 col-12 mb-3 mb-lg-0\">
                    <h4 class=\"mb-4 pb-lg-2\">Membership Fees</h4>

                    <div class=\"table-responsive\">
                        <table class=\"table text-center\">
                            <thead>
                                <tr>
                                    <th style=\"width: 34%;\">Yearly Access</th>
                                    
                                    <th style=\"width: 22%;\">T1 \$420</th>
                                    
                                    <th style=\"width: 22%;\">T2 \$640</th>
                                    
                                    <th style=\"width: 22%;\">T3 \$860</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Golf Insurance</th>
                                    
                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                    
                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                    
                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Club Facilities</th>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Country Club</th>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Weekend Seasonal</th>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Premium Courses</th>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Pro's Networking</th>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"col-lg-5 col-12 mx-auto\">
                <h4 class=\"mb-4 pb-lg-2\">Please join us!</h4>
                    <form action=\"#\" method=\"post\" class=\"custom-form membership-form shadow-lg\" role=\"form\">
                        <h4 class=\"text-white mb-4\">Become a member</h4>

                            <div class=\"form-floating\">
                                <input type=\"text\" name=\"full-name\" id=\"full-name\" class=\"form-control\" placeholder=\"Full Name\" required=\"\">
                                
                                <label for=\"floatingInput\">Full Name</label>
                            </div>

                            <div class=\"form-floating\">
                                <input type=\"email\" name=\"email\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" class=\"form-control\" placeholder=\"Email address\" required=\"\">
                                
                                <label for=\"floatingInput\">Email address</label>
                            </div>

                            <div class=\"form-floating\">
                                <textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Describe message here\"></textarea>
                                
                                <label for=\"floatingTextarea\"> Comments</label>
                            </div>

                            <button type=\"submit\" class=\"form-control\">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
<!-- ------------------- SECTION 5 :  ------------- -->


    <section class=\"events-section section-bg section-padding\" >
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-12 col-12\">
                    <h2 class=\"mb-lg-3\">Upcoming Events</h2>
                </div>

                <div class=\"row custom-block mb-3\">
                    <div class=\"col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0\">
                        <div class=\"custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0\">
                            <h6 class=\"custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0\">24</h6>
                            
                            <strong class=\"text-white\">Feb 2048</strong>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-8 col-12 order-1 order-lg-0\">
                        <div class=\"custom-block-image-wrap\">
                            <a href=\"event-detail.html\">
                                <img src=\"images/professional-golf-player.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">

                                <i class=\"custom-block-icon bi-link\"></i>
                            </a>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-12 order-3 order-lg-0\">
                        <div class=\"custom-block-info mt-2 mt-lg-0\">
                            <a href=\"event-detail.html\" class=\"events-title mb-3\">Private activities</a>

                            <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class=\"d-flex flex-wrap border-top mt-4 pt-3\">

                                <div class=\"mb-4 mb-lg-0\">
                                    <div class=\"d-flex flex-wrap align-items-center mb-1\">
                                        <span class=\"custom-block-span\">Location:</span>

                                        <p class=\"mb-0\">National Center, NYC</p>
                                    </div>

                                    <div class=\"d-flex flex-wrap align-items-center\">
                                        <span class=\"custom-block-span\">Ticket:</span>

                                        <p class=\"mb-0\">\$250</p>
                                    </div>
                                </div>

                                <div class=\"d-flex align-items-center ms-lg-auto\">
                                    <a href=\"event-detail.html\" class=\"btn custom-btn\">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row custom-block custom-block-bg\">
                    <div class=\"col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0\">
                        <div class=\"custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0\">
                            <h6 class=\"custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0\">28</h6>
                            
                            <strong class=\"text-white\">Feb 2048</strong>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-8 col-12 order-1 order-lg-0\">
                        <div class=\"custom-block-image-wrap\">
                            <a href=\"event-detail.html\">
                                <img src=\"images/girl-taking-selfie-with-friends-golf-field.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">

                                <i class=\"custom-block-icon bi-link\"></i>
                            </a>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-12 order-3 order-lg-0\">
                        <div class=\"custom-block-info mt-2 mt-lg-0\">
                            <a href=\"event-detail.html\" class=\"events-title mb-3\">Group tournament activities</a>

                            <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class=\"d-flex flex-wrap border-top mt-4 pt-3\">

                                <div class=\"mb-4 mb-lg-0\">
                                    <div class=\"d-flex flex-wrap align-items-center mb-1\">
                                        <span class=\"custom-block-span\">Location:</span>

                                        <p class=\"mb-0\">National Center, NYC</p>
                                    </div>

                                    <div class=\"d-flex flex-wrap align-items-center\">
                                        <span class=\"custom-block-span\">Ticket:</span>

                                        <p class=\"mb-0\">\$350</p>
                                    </div>
                                </div>

                                <div class=\"d-flex align-items-center ms-lg-auto\">
                                    <a href=\"event-detail.html\" class=\"btn custom-btn\">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<!-- ------------------- SECTION 6 :  ------------- -->

    <section class=\"contact-section section-padding\" >
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-5 col-12\">
                    <form action=\"#\" method=\"post\" class=\"custom-form contact-form\" role=\"form\">
                        <h2 class=\"mb-4 pb-2\">Contact Tiya</h2>

                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-12\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" name=\"full-name\" id=\"full-name\" class=\"form-control\" placeholder=\"Full Name\" required=\"\">
                                    
                                    <label for=\"floatingInput\">Full Name</label>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-md-6 col-12\"> 
                                <div class=\"form-floating\">
                                    <input type=\"email\" name=\"email\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" class=\"form-control\" placeholder=\"Email address\" required=\"\">
                                    
                                    <label for=\"floatingInput\">Email address</label>
                                </div>
                            </div>

                            <div class=\"col-lg-12 col-12\">
                                <div class=\"form-floating\">
                                    <textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Describe message here\"></textarea>
                                    
                                    <label for=\"floatingTextarea\">Message</label>
                                </div>

                                <button type=\"submit\" class=\"form-control\">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=\"col-lg-6 col-12\">
                    <div class=\"contact-info mt-5\">
                        <div class=\"contact-info-item\">
                            <div class=\"contact-info-body\">
                                <strong>London, United Kingdom</strong>

                                <p class=\"mt-2 mb-1\">
                                    <a href=\"tel: 010-020-0340\" class=\"contact-link\">
                                        (020) 
                                        010-020-0340
                                    </a>
                                </p>

                                <p class=\"mb-0\">
                                    <a href=\"mailto:info@company.com\" class=\"contact-link\">
                                        info@company.com
                                    </a>
                                </p>
                            </div>

                            <div class=\"contact-info-footer\">
                                <a href=\"#\">Directions</a>
                            </div>
                        </div>

                        <img src=\"images/WorldMap.svg\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- ------------------- SECTION 7 :  ------------- -->

    <section class=\"about-section section-padding\">
        <!--fazet lusers elly ky t3ady souris tetla3lek contact te3hom-->
              
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
              </div>

     </section>

</main>
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
        return "home/index.html.twig";
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
        return array (  130 => 54,  115 => 41,  81 => 9,  76 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{%extends \"base.html.twig\" %}

{%block content %}
<main>

    
{# SECTION 1 il welcome :  hedhi matfas5ouch wa matbadlouch itnajam ta5ou minha  il code ------------- #}

    <section class=\"hero-section d-flex justify-content-center align-items-center\" id=\"section_1\">

        <!-- Vidéo en arrière-plan -->
        <video autoplay muted loop playsinline class=\"background-video\">
            <source src=\"images/WhatsApp Vidéo 2025-03-19 à 23.40.45_d6b8e525.mp4\" type=\"video/mp4\">
            Your browser does not support the video tag.
        </video>

        <div class=\"section-overlay\"></div>

        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ADC29B\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z\"></path></svg>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-6 col-12 mb-5 mb-lg-0\">
                    <h2 class=\"text-white\">Planify your event with us</h2>

                    <h1 class=\"cd-headline rotate-1 text-white mb-4 pb-2\">
                        <span>\"Eventify: \"</span>
                        <span class=\"cd-words-wrapper\">
                            <b class=\"is-visible\">Plan</b>
                            <b>Celebrate</b>
                            <b>Remember</b>
                        </span>
                    </h1>

                    <div class=\"custom-btn-group\">
                       
                        <a href=\"#\" class=\"btn custom-btn smoothscroll me-3\">Personalize your event</a>
                     
                        <a href=\"{{path('app_signup')}}\" class=\"link smoothscroll\">Become a member</a>
                    </div>
                </div>

               

            </div>
        </div>

        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z\"></path></svg>
    </section>

{# ------------------- SECTION 2 : il about  hedhi matfas5ouch wa matbadlouch itnajam ta5ou minha  il code ------------- #}

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

   
<!-- ------------------- SECTION 3 :  ------------- -->

    <section class=\"section-bg-image\" >
        <svg viewBox=\"0 0 1265 144\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"rgba(255, 255, 255, 1)\" d=\"M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z\" stroke-width=\"0\"></path> <path fill=\"rgba(255, 255, 255, 1)\" d=\"M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z\" stroke-width=\"0\"></path><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z\" stroke-width=\"0\"></path><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z\" stroke-width=\"0\"></path></svg>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-6 col-12\">
                    <div class=\"section-bg-image-block\">
                        <h2 class=\"mb-lg-3\">Get our newsletter</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore.</p>

                        <form action=\"#\" method=\"get\" class=\"custom-form mt-lg-4 mt-2\" role=\"form\">
                            <div class=\"input-group input-group-lg\">
                                <span class=\"input-group-text bi-envelope\" id=\"basic-addon1\"></span>

                                <input type=\"email\" name=\"email\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" class=\"form-control\" placeholder=\"Email address\" required=\"\">

                                <button type=\"submit\" class=\"form-control\">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <svg viewBox=\"0 0 1265 144\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z\" stroke-width=\"0\"></path> <path fill=\"rgba(255, 255, 255, 1)\" d=\"M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z\" stroke-width=\"0\"></path> <path fill=\"rgba(255, 255, 255, 1)\" d=\"M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z\" stroke-width=\"0\"></path><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z\" stroke-width=\"0\"></path><path fill=\"rgba(255, 255, 255, 1)\" d=\"M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z\" stroke-width=\"0\"></path></svg>
    </section>
<!-- ------------------- SECTION 4 :  ------------- -->

    <section class=\"membership-section section-padding\" >
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4\">
                    <h2><span>Membership</span> at Tiya</h2>
                </div>

                <div class=\"col-lg-6 col-12 mb-3 mb-lg-0\">
                    <h4 class=\"mb-4 pb-lg-2\">Membership Fees</h4>

                    <div class=\"table-responsive\">
                        <table class=\"table text-center\">
                            <thead>
                                <tr>
                                    <th style=\"width: 34%;\">Yearly Access</th>
                                    
                                    <th style=\"width: 22%;\">T1 \$420</th>
                                    
                                    <th style=\"width: 22%;\">T2 \$640</th>
                                    
                                    <th style=\"width: 22%;\">T3 \$860</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Golf Insurance</th>
                                    
                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                    
                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                    
                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Club Facilities</th>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Country Club</th>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Weekend Seasonal</th>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Premium Courses</th>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th scope=\"row\" class=\"text-start\">Pro's Networking</th>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-x-circle-fill\"></i>
                                    </td>

                                    <td>
                                        <i class=\"bi-check-circle-fill\"></i>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"col-lg-5 col-12 mx-auto\">
                <h4 class=\"mb-4 pb-lg-2\">Please join us!</h4>
                    <form action=\"#\" method=\"post\" class=\"custom-form membership-form shadow-lg\" role=\"form\">
                        <h4 class=\"text-white mb-4\">Become a member</h4>

                            <div class=\"form-floating\">
                                <input type=\"text\" name=\"full-name\" id=\"full-name\" class=\"form-control\" placeholder=\"Full Name\" required=\"\">
                                
                                <label for=\"floatingInput\">Full Name</label>
                            </div>

                            <div class=\"form-floating\">
                                <input type=\"email\" name=\"email\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" class=\"form-control\" placeholder=\"Email address\" required=\"\">
                                
                                <label for=\"floatingInput\">Email address</label>
                            </div>

                            <div class=\"form-floating\">
                                <textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Describe message here\"></textarea>
                                
                                <label for=\"floatingTextarea\"> Comments</label>
                            </div>

                            <button type=\"submit\" class=\"form-control\">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
<!-- ------------------- SECTION 5 :  ------------- -->


    <section class=\"events-section section-bg section-padding\" >
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-12 col-12\">
                    <h2 class=\"mb-lg-3\">Upcoming Events</h2>
                </div>

                <div class=\"row custom-block mb-3\">
                    <div class=\"col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0\">
                        <div class=\"custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0\">
                            <h6 class=\"custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0\">24</h6>
                            
                            <strong class=\"text-white\">Feb 2048</strong>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-8 col-12 order-1 order-lg-0\">
                        <div class=\"custom-block-image-wrap\">
                            <a href=\"event-detail.html\">
                                <img src=\"images/professional-golf-player.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">

                                <i class=\"custom-block-icon bi-link\"></i>
                            </a>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-12 order-3 order-lg-0\">
                        <div class=\"custom-block-info mt-2 mt-lg-0\">
                            <a href=\"event-detail.html\" class=\"events-title mb-3\">Private activities</a>

                            <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class=\"d-flex flex-wrap border-top mt-4 pt-3\">

                                <div class=\"mb-4 mb-lg-0\">
                                    <div class=\"d-flex flex-wrap align-items-center mb-1\">
                                        <span class=\"custom-block-span\">Location:</span>

                                        <p class=\"mb-0\">National Center, NYC</p>
                                    </div>

                                    <div class=\"d-flex flex-wrap align-items-center\">
                                        <span class=\"custom-block-span\">Ticket:</span>

                                        <p class=\"mb-0\">\$250</p>
                                    </div>
                                </div>

                                <div class=\"d-flex align-items-center ms-lg-auto\">
                                    <a href=\"event-detail.html\" class=\"btn custom-btn\">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row custom-block custom-block-bg\">
                    <div class=\"col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0\">
                        <div class=\"custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0\">
                            <h6 class=\"custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0\">28</h6>
                            
                            <strong class=\"text-white\">Feb 2048</strong>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-8 col-12 order-1 order-lg-0\">
                        <div class=\"custom-block-image-wrap\">
                            <a href=\"event-detail.html\">
                                <img src=\"images/girl-taking-selfie-with-friends-golf-field.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">

                                <i class=\"custom-block-icon bi-link\"></i>
                            </a>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-12 order-3 order-lg-0\">
                        <div class=\"custom-block-info mt-2 mt-lg-0\">
                            <a href=\"event-detail.html\" class=\"events-title mb-3\">Group tournament activities</a>

                            <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class=\"d-flex flex-wrap border-top mt-4 pt-3\">

                                <div class=\"mb-4 mb-lg-0\">
                                    <div class=\"d-flex flex-wrap align-items-center mb-1\">
                                        <span class=\"custom-block-span\">Location:</span>

                                        <p class=\"mb-0\">National Center, NYC</p>
                                    </div>

                                    <div class=\"d-flex flex-wrap align-items-center\">
                                        <span class=\"custom-block-span\">Ticket:</span>

                                        <p class=\"mb-0\">\$350</p>
                                    </div>
                                </div>

                                <div class=\"d-flex align-items-center ms-lg-auto\">
                                    <a href=\"event-detail.html\" class=\"btn custom-btn\">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<!-- ------------------- SECTION 6 :  ------------- -->

    <section class=\"contact-section section-padding\" >
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-5 col-12\">
                    <form action=\"#\" method=\"post\" class=\"custom-form contact-form\" role=\"form\">
                        <h2 class=\"mb-4 pb-2\">Contact Tiya</h2>

                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-12\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" name=\"full-name\" id=\"full-name\" class=\"form-control\" placeholder=\"Full Name\" required=\"\">
                                    
                                    <label for=\"floatingInput\">Full Name</label>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-md-6 col-12\"> 
                                <div class=\"form-floating\">
                                    <input type=\"email\" name=\"email\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" class=\"form-control\" placeholder=\"Email address\" required=\"\">
                                    
                                    <label for=\"floatingInput\">Email address</label>
                                </div>
                            </div>

                            <div class=\"col-lg-12 col-12\">
                                <div class=\"form-floating\">
                                    <textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Describe message here\"></textarea>
                                    
                                    <label for=\"floatingTextarea\">Message</label>
                                </div>

                                <button type=\"submit\" class=\"form-control\">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=\"col-lg-6 col-12\">
                    <div class=\"contact-info mt-5\">
                        <div class=\"contact-info-item\">
                            <div class=\"contact-info-body\">
                                <strong>London, United Kingdom</strong>

                                <p class=\"mt-2 mb-1\">
                                    <a href=\"tel: 010-020-0340\" class=\"contact-link\">
                                        (020) 
                                        010-020-0340
                                    </a>
                                </p>

                                <p class=\"mb-0\">
                                    <a href=\"mailto:info@company.com\" class=\"contact-link\">
                                        info@company.com
                                    </a>
                                </p>
                            </div>

                            <div class=\"contact-info-footer\">
                                <a href=\"#\">Directions</a>
                            </div>
                        </div>

                        <img src=\"images/WorldMap.svg\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- ------------------- SECTION 7 :  ------------- -->

    <section class=\"about-section section-padding\">
        <!--fazet lusers elly ky t3ady souris tetla3lek contact te3hom-->
              
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
              </div>

     </section>

</main>
{% endblock %}


", "home/index.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\home\\index.html.twig");
    }
}
