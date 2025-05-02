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

/* forums/forums.html.twig */
class __TwigTemplate_e3d63ea242f1dae7a42fd85b4a2c9357 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/forums.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forums/forums.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forums/forums.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
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

        // line 7
        yield "<head>
<meta name=\"csrf-token\" content=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("translate"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
  <style>
    /* ================ Styles généraux ================ */
    .search-container {
        position: relative;
    }

    .search-loader {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #844062;
        font-size: 1.2rem;
    }

    .btn-outline-custom {
        border-color: #ADC29B;
        color: #844062;
    }

    .btn-outline-custom:hover {
        background-color: #ADC29B;
        color: white;
    }

    .active {
        background-color: #ADC29B !important;
        color: white !important;
        border-color: #ADC29B !important;
    }

    /* ================ Section commentaires ================ */
    .comments-section {
        display: none;
        margin-top: 15px;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 5px;
    }

    .comments-section.show {
        display: block;
    }

    /* ================ Commentaires individuels ================ */
    .comment {
        padding: 10px;
        margin-bottom: 10px;
        background-color: white;
        border-radius: 5px;
        border-left: 3px solid #ADC29B;
    }

    .comment-actions {
        display: flex;
        gap: 8px;
        margin-top: 10px;
    }

    .btn-edit-comment, .btn-delete-comment {
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.8rem;
        transition: all 0.2s;
    }

    .btn-edit-comment {
        background-color: #f8f9fa;
        border: 1px solid #ADC29B;
        color: #844062;
    }

    .btn-edit-comment:hover {
        background-color: #ADC29B;
        color: white;
    }

    .btn-delete-comment {
        background-color: #f8f9fa;
        border: 1px solid #dc3545;
        color: #dc3545;
    }

    .btn-delete-comment:hover {
        background-color: #dc3545;
        color: white;
    }

    .comment-count {
        margin-left: 5px;
        background-color: #844062;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 0.8rem;
    }

    .edit-comment-form {
        display: none;
        margin-top: 10px;
    }

    /* ================ Formulaire de commentaire ================ */
    .comment-form {
        display: flex;
        align-items: flex-end;
        gap: 10px;
        margin-top: 15px;
        width: 100%;
    }

    .comment-input-container {
        position: relative;
        flex-grow: 1;
        width: calc(100% - 120px);
    }

    .comment-input-container textarea {
        width: 100% !important;
        padding: 8px 45px 8px 15px;
        border-radius: 20px;
        border: 1px solid #ADC29B;
        resize: none;
        min-height: 40px;
        transition: border-color 0.3s ease;
        max-width: 100%;
    }
    
    .comment-input-container textarea:focus {
        border-color: #844062;
        box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
        outline: none;
    }

    /* ================ Boutons ================ */
    .btn-post-comment {
        background-color: #844062;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 8px 15px;
        font-weight: 600;
        white-space: nowrap;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-post-comment:hover {
        background-color: #6d3354;
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    /* ================ Emojis ================ */
    .emoji-container {
        position: absolute;
        right: 10px;
        bottom: 10px;
    }

    .emoji-toggle-btn {
        background: none;
        border: none;
        color: #844062;
        font-size: 1.2rem;
        cursor: pointer;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .emoji-toggle-btn:hover {
        background-color: #f0f0f0;
    }

    .emoji-window {
        position: absolute;
        bottom: 40px;
        right: 0;
        width: 400px;
        background: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        padding: 10px;
        z-index: 1000;
        display: none;
    }

    .emoji-window.show {
        display: block;
    }

    .emoji-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .emoji-item {
        cursor: pointer;
        font-size: 1.5rem;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        transition: all 0.2s;
    }

    .emoji-item:hover {
        transform: scale(1.2);
        background-color: #f0f0f0;
    }

   /* ================ Boutons Like/Dislike/Commentaires ================ */
.card-actions {
    display: flex;
    gap: 10px;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #e9ebee;
}

.btn-like, .btn-dislike, .btn-comments, .btn-share {
    flex: 1;
    background: none;
    border: none;
    border-radius: 4px;
    padding: 8px 0;
    font-size: 0.9rem;
    color: #65676b;
    transition: all 0.3s ease;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}

.btn-like:hover, .btn-dislike:hover, .btn-comments:hover, .btn-share:hover {
    background-color: #f2f3f5;
    cursor: pointer;
}

.btn-like.active {
    color: #1877f2;
}

.btn-dislike.active {
    color: #f02849;
}

.btn-comments.active {
    color: #844062;
}

.btn-share.active {
    color: #45bd62; /* Vert pour le partage */
}

.btn-like i, .btn-dislike i, .btn-comments i, .btn-share i {
    font-size: 1rem;
}

.like-count, .dislike-count, .comment-count, .share-count {
    font-weight: 500;
    color: inherit; /* Utilise la couleur du parent */
    background: none; /* Supprime le fond */
    border-radius: 0; /* Supprime le bord arrondi */
    padding: 0; /* Réinitialise le padding */
    margin-left: 4px; /* Petit espace après l'icône */
}

/* Animation pour les boutons */
.btn-like:active, .btn-dislike:active, .btn-comments:active, .btn-share:active {
    transform: scale(0.95);
}

/* Effet de remplissage pour les boutons actifs */
.btn-like.active::before, 
.btn-dislike.active::before, 
.btn-comments.active::before,
.btn-share.active::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: currentColor;
    opacity: 0.1;
    border-radius: 4px;
}

/* Style pour les boutons actifs (après clic) */
.btn-like.active i {
    color: #1877f2;
}

.btn-dislike.active i {
    color: #f02849;
}

.btn-comments.active i {
    color: #844062;
}

.btn-share.active i {
    color: #45bd62;
}
    /* ================ Responsive ================ */
    @media (max-width: 576px) {
        .comment-form {
            flex-direction: column;
            align-items: flex-end;
        }
        
        .btn-post-comment {
            margin-top: 10px;
        }

        .card-actions {
            flex-direction: column;
            gap: 8px;
        }

        .btn-like, .btn-dislike, .btn-comments {
            justify-content: flex-start;
            padding: 8px 12px;
        }
    }


    .btn-share {
    background: none;
    border: none;
    color: #65676b;
    cursor: pointer;
    padding: 8px 12px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.btn-share:hover {
    background-color: #f0f2f5;
}

.share-modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.share-options {
    background: white;
    padding: 20px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.share-options a, .share-options button {
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #333;
    border: none;
    background: none;
    cursor: pointer;
    text-align: left;
}

.share-options a:hover, .share-options button:hover {
    background-color: #f0f2f5;
}





/* ================ Bouton Create Forum ================ */
.btn-create-forum {
    background-color: #844062; /* Couleur principale */
    color: white;
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 8px rgba(132, 64, 98, 0.3);
    height: 46px;
}

.btn-create-forum:hover {
    background-color: #6d3354; /* Version plus sombre au survol */
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(132, 64, 98, 0.4);
}

.btn-create-forum:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px rgba(132, 64, 98, 0.3);
}

.btn-create-forum i {
    font-size: 1.1em;
    margin-right: 10px;
    transition: transform 0.3s ease;
}

.btn-create-forum:hover i {
    transform: scale(1.1);
}

/* Animation au clic */
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.btn-create-forum:focus {
    animation: pulse 0.5s ease;
    outline: none;
}

/* Responsive */
@media (max-width: 768px) {
    .btn-create-forum {
        padding: 8px 15px;
        font-size: 0.9rem;
        height: 42px;
    }
    
    .btn-create-forum i {
        margin-right: 8px;
        font-size: 1em;
    }
}

@media (max-width: 576px) {
    .btn-create-forum {
        width: 100%;
    }
}


/* Styles pour la traduction des descriptions de forum */
.forum-translation {
    margin: 15px 0;
    position: relative;
}

.translation-tools {
    display: flex;
    gap: 10px;
    margin-top: 10px;
    align-items: center;
}

.language-picker {
    flex-grow: 1;
    padding: 8px 12px;
    border: 1px solid #ADC29B;
    border-radius: 6px;
    background-color: white;
    color: #844062;
    font-size: 0.9rem;
}

.translate-btn {
    background-color: #844062;
    color: white;
    border: none;
    border-radius: 6px;
    padding: 8px 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.9rem;
    transition: all 0.2s;
}

.translate-btn:hover {
    background-color: #6d3354;
    transform: translateY(-1px);
}

.translate-btn i {
    font-size: 0.9rem;
}

.translation-status {
    font-size: 0.8rem;
    color: #6c757d;
    margin-top: 5px;
    font-style: italic;
    display: none;
}

/* Animation de chargement */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.translating .translate-btn::after {
    content: \"\";
    display: inline-block;
    width: 12px;
    height: 12px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top-color: white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin-left: 5px;
}









 /* ================ Nouveaux styles pour la section de traduction ================ */
    .translation-section {
        margin-top: 50px;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    .translation-section h3 {
        text-align: center;
        color: #844062;
        margin-bottom: 20px;
    }
    .translation-section form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .translation-section input[type=\"text\"] {
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }
    .translation-section input[type=\"text\"]:focus {
        border-color: #844062;
        box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
    }
    .translation-section select {
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }
    .translation-section select:focus {
        border-color: #844062;
        box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
    }
    .translation-section button {
        padding: 10px;
        background-color: #844062;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .translation-section button:hover {
        background-color: #6d3354;
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .translation-section p {
        margin-top: 20px;
        font-size: 1.1rem;
        color: #333;
    }
    .translation-section span {
        font-weight: bold;
        color: #844062;
    }



    /* Ajoutez ces styles à votre feuille CSS */
.translation-status {
    font-size: 0.8rem;
    margin-top: 5px;
    display: none;
    padding: 5px;
    border-radius: 4px;
}

.translation-status.loading {
    color: #844062;
    background-color: #f8f9fa;
}

.translation-status.success {
    color: #28a745;
    background-color: #e6ffed;
}

.translation-status.error {
    color: #dc3545;
    background-color: #ffe6e6;
}

.fa-spinner {
    animation: spin 1s linear infinite;
    margin-right: 5px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
    </head>
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <div class=\"section-overlay\" style=\"background: url('images/test2.png') center/cover no-repeat;\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\"></div>
        </div>
    </div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
</section>

<div style=\"height: 100px;\"></div>
<div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 2000\">
        ";
        // line 695
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 695, $this->source); })()), "flashes", ["error"], "method", false, false, false, 695));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 696
            yield "            <div class=\"alert alert-danger alert-dismissible fade show\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                ";
            // line 698
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        yield "    </div>
<div class=\"container mt-4\">
    <div class=\"row align-items-center mb-4 g-3\">
        <!-- Barre de recherche améliorée -->
        <div class=\"col-md-8\">
            <div class=\"search-container position-relative\">
                <div class=\"input-group\">
                    <span class=\"input-group-text bg-white border-end-0\">
                        <i class=\"fas fa-search text-muted\"></i>
                    </span>
                    <input 
                        type=\"text\" 
                        id=\"dynamicSearchInput\"
                        class=\"form-control border-start-0 ps-0\" 
                        placeholder=\"Search...\" 
                        aria-label=\"Recherche dynamique\"
                        autocomplete=\"off\"
                        value=\"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 719, $this->source); })()), "request", [], "any", false, false, false, 719), "query", [], "any", false, false, false, 719), "get", ["search"], "method", false, false, false, 719), "html", null, true);
        yield "\"
                        style=\"height: 45px; border-radius: 0 8px 8px 0\">
                </div>
                <div class=\"search-loader d-none position-absolute end-0 top-50 translate-middle-y me-3\">
                    <i class=\"fas fa-spinner fa-spin text-purple\"></i>
                </div>
            </div>
        </div>

        <!-- Bouton Create Forum stylisé -->
        ";
        // line 729
        if ( !(isset($context["is_ajax_request"]) || array_key_exists("is_ajax_request", $context) ? $context["is_ajax_request"] : (function () { throw new RuntimeError('Variable "is_ajax_request" does not exist.', 729, $this->source); })())) {
            // line 730
            yield "        <div class=\"col-md-4\">
            <a href=\"";
            // line 731
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums_new");
            yield "\" class=\"btn btn-create-forum w-100\">
    <i class=\"fas fa-plus-circle me-2\"></i> Create Forum
</a>
        </div>
        ";
        }
        // line 736
        yield "    </div>
</div>


<div class=\"container mt-5\">
    <div id=\"forums-container\">
        ";
        // line 742
        if ( !((array_key_exists("is_ajax_request", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_ajax_request"]) || array_key_exists("is_ajax_request", $context) ? $context["is_ajax_request"] : (function () { throw new RuntimeError('Variable "is_ajax_request" does not exist.', 742, $this->source); })()), false)) : (false))) {
            // line 743
            yield "            <div class=\"row mb-4\">
                <div class=\"col-12 d-flex justify-content-center\">
                    <div class=\"btn-group\" role=\"group\">
                        <a href=\"";
            // line 746
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
            yield "\" 
                           class=\"btn ";
            // line 747
            yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 747, $this->source); })()), "request", [], "any", false, false, false, 747), "query", [], "any", false, false, false, 747), "get", ["category"], "method", false, false, false, 747)) ? ("active") : ("btn-outline-custom"));
            yield "\" 
                           style=\"width: auto;\">
                           All
                        </a>
                        <a href=\"";
            // line 751
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Mariage"]);
            yield "\" 
                           class=\"btn ";
            // line 752
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 752, $this->source); })()), "request", [], "any", false, false, false, 752), "query", [], "any", false, false, false, 752), "get", ["category"], "method", false, false, false, 752) == "Mariage")) ? ("active") : ("btn-outline-custom"));
            yield "\" 
                           style=\"width: auto;\">
                           Mariage
                        </a>
                        <a href=\"";
            // line 756
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Anniversaire"]);
            yield "\" 
                           class=\"btn ";
            // line 757
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 757, $this->source); })()), "request", [], "any", false, false, false, 757), "query", [], "any", false, false, false, 757), "get", ["category"], "method", false, false, false, 757) == "Anniversaire")) ? ("active") : ("btn-outline-custom"));
            yield "\" 
                           style=\"width: auto;\">
                           Anniversaire
                        </a>
                        <a href=\"";
            // line 761
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Graduation"]);
            yield "\" 
                           class=\"btn ";
            // line 762
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 762, $this->source); })()), "request", [], "any", false, false, false, 762), "query", [], "any", false, false, false, 762), "get", ["category"], "method", false, false, false, 762) == "Graduation")) ? ("active") : ("btn-outline-custom"));
            yield "\" 
                           style=\"width: auto;\">
                           Graduation
                        </a>
                        <a href=\"";
            // line 766
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Baby_Shower"]);
            yield "\" 
                           class=\"btn ";
            // line 767
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 767, $this->source); })()), "request", [], "any", false, false, false, 767), "query", [], "any", false, false, false, 767), "get", ["category"], "method", false, false, false, 767) == "Baby_Shower")) ? ("active") : ("btn-outline-custom"));
            yield "\" 
                           style=\"width: auto;\">
                           Baby Shower
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"row mb-4\">
    <div class=\"col-md-6 offset-md-3\">
        <form method=\"GET\" action=\"";
            // line 777
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
            yield "\" class=\"d-flex align-items-center justify-content-center\">
            ";
            // line 778
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 778, $this->source); })()), "request", [], "any", false, false, false, 778), "query", [], "any", false, false, false, 778), "get", ["category"], "method", false, false, false, 778)) {
                // line 779
                yield "                <input type=\"hidden\" name=\"category\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 779, $this->source); })()), "request", [], "any", false, false, false, 779), "query", [], "any", false, false, false, 779), "get", ["category"], "method", false, false, false, 779), "html", null, true);
                yield "\">
            ";
            }
            // line 781
            yield "            <label for=\"sort\" class=\"me-2 text-nowrap\" style=\"color: #844062;\">
                <i class=\"fas fa-sort me-1\"></i>Sort by:
            </label>
            <select name=\"sort\" id=\"sort\" class=\"form-select\" onchange=\"this.form.submit()\">
                <option value=\"newest\" ";
            // line 785
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 785, $this->source); })()), "request", [], "any", false, false, false, 785), "query", [], "any", false, false, false, 785), "get", ["sort"], "method", false, false, false, 785) == "newest")) ? ("selected") : (""));
            yield ">
                    Newest
                </option>
                <option value=\"oldest\" ";
            // line 788
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 788, $this->source); })()), "request", [], "any", false, false, false, 788), "query", [], "any", false, false, false, 788), "get", ["sort"], "method", false, false, false, 788) == "oldest")) ? ("selected") : (""));
            yield ">
                    Oldest
                </option>
                <option value=\"popular\" ";
            // line 791
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 791, $this->source); })()), "request", [], "any", false, false, false, 791), "query", [], "any", false, false, false, 791), "get", ["sort"], "method", false, false, false, 791) == "popular")) ? ("selected") : (""));
            yield ">
                    Popular 
                </option>
            </select>
        </form>
    </div>
</div>
        ";
        }
        // line 799
        yield "         
         ";
        // line 800
        if ((isset($context["single_forum_mode"]) || array_key_exists("single_forum_mode", $context) ? $context["single_forum_mode"] : (function () { throw new RuntimeError('Variable "single_forum_mode" does not exist.', 800, $this->source); })())) {
            // line 801
            yield "    <div class=\"col-12 mb-3\">
        <a href=\"";
            // line 802
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
            yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> 
        </a>
    </div>
";
        }
        // line 807
        yield "


        <div class=\"row justify-content-center\" id=\"forumsList\">
            ";
        // line 811
        if ((array_key_exists("forums", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 811, $this->source); })())))) {
            // line 812
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 812, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 813
                yield "                    <div class=\"col-lg-8 col-md-10 mb-4\">
                        <div class=\"card shadow-lg forum-card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                                <h3 class=\"h5 mb-0\">";
                // line 816
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 816)), "html", null, true);
                yield "</h3>
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 818
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 818)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-light me-2\">
                                        <i class=\"fas fa-edit me-1\"></i> Edit
                                    </a>
                                    <form method=\"POST\" action=\"";
                // line 821
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 821)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 822
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-forum"), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-outline-light\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
                                            <i class=\"fas fa-trash me-1\"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"card-img-container text-center\">
                                ";
                // line 830
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 830)) && is_string($_v1 = "img_") && str_starts_with($_v0, $_v1))) {
                    // line 831
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 831)]), "html", null, true);
                    yield "\" 
                                         alt=\"Image du forum ";
                    // line 832
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 832), "html", null, true);
                    yield "\"
                                         class=\"img-fluid mx-auto d-block\">
                                ";
                } else {
                    // line 835
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default_image.png"), "html", null, true);
                    yield "\" 
                                         alt=\"\"
                                         class=\"img-fluid mx-auto d-block\">
                                ";
                }
                // line 839
                yield "                            </div>
                            <div class=\"card-body text-center\">
    <!-- Description avec système de traduction -->
    <div class=\"forum-translation\">
        <p class=\"card-text forum-description\" 
           id=\"forum-description-";
                // line 844
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 844), "html", null, true);
                yield "\"
           data-original-text=\"";
                // line 845
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 845), "html_attr");
                yield "\">
            ";
                // line 846
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 846), "html", null, true);
                yield "
        </p>
        
        <div class=\"translation-tools\">
            <select class=\"language-picker\" data-forum-id=\"";
                // line 850
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 850), "html", null, true);
                yield "\">
                <option value=\"\">Choose a language</option>
                <option value=\"fr\">Français</option>
                <option value=\"en\">Anglais</option>
                <option value=\"ar\">Arabe</option>
            </select>
            
            <button class=\"translate-btn\" data-forum-id=\"";
                // line 857
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 857), "html", null, true);
                yield "\">
                <i class=\"fas fa-language\"></i> translate
            </button>
        </div>
        
        <div class=\"translation-status\" id=\"translation-status-";
                // line 862
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 862), "html", null, true);
                yield "\"></div>
    </div>
                               <div class=\"card-actions\">
    <button class=\"btn btn-outline-primary btn-like\" data-forum-id=\"";
                // line 865
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 865), "html", null, true);
                yield "\">
        <i class=\"far fa-thumbs-up\"></i> Like 
        <span class=\"like-count\">";
                // line 867
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "reactions", [], "any", false, false, false, 867)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "reactions", [], "any", false, false, false, 867), 0, [], "array", false, false, false, 867), "nblike", [], "any", false, false, false, 867), "html", null, true)) : (0));
                yield "</span>
    </button>
    <button class=\"btn btn-outline-danger btn-dislike\" data-forum-id=\"";
                // line 869
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 869), "html", null, true);
                yield "\">
        <i class=\"far fa-thumbs-down\"></i> Dislike 
        <span class=\"dislike-count\">";
                // line 871
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "reactions", [], "any", false, false, false, 871)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "reactions", [], "any", false, false, false, 871), 0, [], "array", false, false, false, 871), "nbdislike", [], "any", false, false, false, 871), "html", null, true)) : (0));
                yield "</span>
    </button>
                                   <button class=\"btn btn-outline-secondary btn-comments\" data-forum-id=\"";
                // line 873
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 873), "html", null, true);
                yield "\">
                                   
    <i class=\"far fa-comment\"></i> Comments 
    <span class=\"comment-count\">";
                // line 876
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 876)), "html", null, true);
                yield "</span>
    
</button>
<button class=\"btn-share\" onclick=\"shareForum('";
                // line 879
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "getId", [], "method", false, false, false, 879), "html", null, true);
                yield "')\">
    <i class=\"fas fa-share\"></i> Share
</button>
                                </div>
                                <div id=\"comments-";
                // line 883
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 883), "html", null, true);
                yield "\" class=\"comments-section\">
                                    <div class=\"existing-comments\">
                                        ";
                // line 885
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 885));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 886
                    yield "                                            <div class=\"comment\" id=\"comment-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 886), "html", null, true);
                    yield "\">
                                                <div class=\"comment-date\">
                                                    ";
                    // line 888
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 888), "d/m/Y H:i"), "html", null, true);
                    yield "
                                                </div>
                                                <div class=\"comment-content\" id=\"comment-content-";
                    // line 890
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 890), "html", null, true);
                    yield "\">
                                                    ";
                    // line 891
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sujet", [], "any", false, false, false, 891), "html", null, true);
                    yield "
                                                </div>
                                                <div class=\"comment-actions\">
                                                    <button class=\"btn-edit-comment\" onclick=\"
                                                        document.getElementById('comment-content-";
                    // line 895
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 895), "html", null, true);
                    yield "').style.display = 'none';
                                                        document.querySelector('#comment-";
                    // line 896
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 896), "html", null, true);
                    yield " .btn-edit-comment').style.display = 'none';
                                                        document.querySelector('#comment-";
                    // line 897
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 897), "html", null, true);
                    yield " .btn-delete-comment').style.display = 'none';
                                                        document.getElementById('edit-form-";
                    // line 898
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 898), "html", null, true);
                    yield "').style.display = 'block';
                                                        document.querySelector('#edit-form-";
                    // line 899
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 899), "html", null, true);
                    yield " textarea').focus();
                                                    \">
                                                        <i class=\"fas fa-edit\"></i> Edit
                                                    </button>
                                                    <form method=\"POST\" action=\"";
                    // line 903
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 903)]), "html", null, true);
                    yield "\" class=\"d-inline\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 904
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 904))), "html", null, true);
                    yield "\">
                                                        <button type=\"submit\" class=\"btn-delete-comment\" style=\"border-color: #ADC29B; color: #844062;\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?')\">
                                                            <i class=\"fas fa-trash\"></i> Delete
                                                        </button>
                                                    </form>
                                                    <form id=\"edit-form-";
                    // line 909
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 909), "html", null, true);
                    yield "\" class=\"edit-comment-form\" method=\"POST\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 909)]), "html", null, true);
                    yield "\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 910
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 910))), "html", null, true);
                    yield "\">
                                                        <textarea name=\"content\" class=\"form-control\">";
                    // line 911
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sujet", [], "any", false, false, false, 911), "html", null, true);
                    yield "</textarea>
                                                        <button type=\"submit\" class=\"btn btn-sm mt-2\" style=\"border-color: #ADC29B; color: #844062;\">
                                                            <i class=\"fas fa-save\"></i> Enregistrer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        ";
                    $context['_iterated'] = true;
                }
                // line 918
                if (!$context['_iterated']) {
                    // line 919
                    yield "                                            <div class=\"no-comments\">
                                                <i class=\"far fa-comment-dots\"></i> NO COMMENTS
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 923
                yield "                                    </div>
             <div class=\"comment-form\">
    <form action=\"";
                // line 925
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_add", ["forumId" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 925)]), "html", null, true);
                yield "\" method=\"POST\" class=\"d-flex align-items-end gap-2 w-100\">
        <div class=\"comment-input-container position-relative flex-grow-1\" style=\"width: 85%;\">
            <textarea name=\"comment_content\" id=\"comment-textarea-";
                // line 927
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 927), "html", null, true);
                yield "\" 
                      class=\"form-control\" rows=\"1\" 
                      placeholder=\"Write a comment...\" required
                      style=\"width: 100%; min-height: 40px; padding-right: 40px;\"></textarea>
            
            <div class=\"emoji-container\">
                <button type=\"button\" class=\"emoji-toggle-btn\" id=\"emoji-toggle-";
                // line 933
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 933), "html", null, true);
                yield "\">
                    <i class=\"far fa-smile\"></i>
                </button>
                <div class=\"emoji-window\" id=\"emoji-window-";
                // line 936
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 936), "html", null, true);
                yield "\">
                    <div class=\"emoji-list\">
                        <!-- Les émojis seront insérés ici par JavaScript -->
                        😀 😃 😄 😁 😆 😅 😂 🤣 😊 😇
                    </div>
                </div>
            </div>
        </div>
        
        <button type=\"submit\" class=\"btn btn-post-comment\" style=\"width: 15%; min-width: 80px; margin-bottom: 8px;\">
            <i class=\"far fa-paper-plane\"></i> 
        </button>
    </form>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['forum'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 955
            yield "            ";
        } else {
            // line 956
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-warning text-center py-4\">
                        <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>
                            ";
            // line 959
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 959, $this->source); })()), "request", [], "any", false, false, false, 959), "query", [], "any", false, false, false, 959), "get", ["search"], "method", false, false, false, 959)) {
                // line 960
                yield "                                No results for \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 960, $this->source); })()), "request", [], "any", false, false, false, 960), "query", [], "any", false, false, false, 960), "get", ["search"], "method", false, false, false, 960), "html", null, true);
                yield "\"
                            ";
            } else {
                // line 962
                yield "                                No forum found
                            ";
            }
            // line 964
            yield "                        </h4>
                        <p class=\"mb-0\">Be the first to create a forum!</p>
                        <a href=\"";
            // line 966
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums_new");
            yield "\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-plus me-2\"></i>Create forum
                        </a>
                    </div>
                </div>
            ";
        }
        // line 972
        yield "        </div>
    </div>
</div>









<div style=\"height: 100px;\"></div>
   <script>

 




document.addEventListener('DOMContentLoaded', function() {
    // Gestion des traductions
    document.querySelectorAll('.translate-btn').forEach(btn => {
        btn.addEventListener('click', async function() {
            const forumId = this.dataset.forumId;
            const descriptionElement = document.getElementById(`forum-description-\${forumId}`);
            const statusElement = document.getElementById(`translation-status-\${forumId}`);
            const languageSelector = document.querySelector(`.language-picker[data-forum-id=\"\${forumId}\"]`);
            const targetLanguage = languageSelector.value;
            
            // Validation
            if (!targetLanguage) {
                showStatus(statusElement, \"Veuillez sélectionner une langue\", 'error');
                return;
            }
            
            const originalText = descriptionElement.dataset.originalText;
            
            // Si déjà traduit dans cette langue
            if (descriptionElement.dataset.currentLang === targetLanguage) {
                return;
            }
            
            // Revenir à l'original si sélectionné
            if (targetLanguage === 'original') {
                resetToOriginal(forumId);
                return;
            }
            
            // UI de chargement
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Traduction...';
            showStatus(statusElement, \"Traduction en cours...\", 'loading');
            
            try {
                const response = await fetch(`/forum/translate/\${forumId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        text: originalText,
                        targetLang: targetLanguage
                    })
                });
                
                const data = await response.json();
                
                if (response.ok && data.translatedText) {
                    updateTranslationUI(forumId, data.translatedText, targetLanguage);
                    showStatus(statusElement, `Traduit en \${getLanguageName(targetLanguage)}`, 'success');
                } else {
                    throw new Error(data.error || 'Échec de la traduction');
                }
            } catch (error) {
                console.error(\"Erreur:\", error);
                showStatus(statusElement, \"Erreur: \" + error.message, 'error');
            } finally {
                this.innerHTML = '<i class=\"fas fa-language\"></i> translate';
            }
        });
    });
    
    // Fonctions utilitaires
    function showStatus(element, message, type) {
        element.textContent = message;
        element.style.display = 'block';
        element.className = 'translation-status ' + type;
        
        if (type !== 'loading') {
            setTimeout(() => element.style.display = 'none', 3000);
        }
    }
    
    function updateTranslationUI(forumId, translatedText, lang) {
        const descElement = document.getElementById(`forum-description-\${forumId}`);
        descElement.textContent = translatedText;
        descElement.dataset.currentLang = lang;
        
        // Ajouter bouton de retour si nécessaire
        if (!document.getElementById(`revert-\${forumId}`)) {
            const revertBtn = document.createElement('button');
            revertBtn.id = `revert-\${forumId}`;
            revertBtn.className = 'btn btn-sm btn-outline-secondary mt-2';
            revertBtn.innerHTML = '<i class=\"fas fa-undo\"></i> Original';
            revertBtn.onclick = () => resetToOriginal(forumId);
            document.getElementById(`translation-status-\${forumId}`).after(revertBtn);
        }
    }
    
    function resetToOriginal(forumId) {
        const descElement = document.getElementById(`forum-description-\${forumId}`);
        const originalText = descElement.dataset.originalText;
        descElement.textContent = originalText;
        descElement.removeAttribute('data-current-lang');
        document.querySelector(`.language-picker[data-forum-id=\"\${forumId}\"]`).value = '';
        
        const revertBtn = document.getElementById(`revert-\${forumId}`);
        if (revertBtn) revertBtn.remove();
    }
    
    function getLanguageName(code) {
        const languages = {
            'fr': 'Français',
            'en': 'Anglais',
            'ar': 'Arabe'
        };
        return languages[code] || code;
    }
});






// Liste des emojis disponibles
const EMOJIS = [
    \"😀\", \"😃\", \"😄\", \"😁\", \"😆\", \"😅\", \"😂\", \"🤣\", \"😊\", \"😇\",
    \"🙂\", \"🙃\", \"😉\", \"😌\", \"😍\", \"🥰\", \"😘\", \"😗\", \"😙\", \"😚\",
    \"😋\", \"😛\", \"😝\", \"😜\", \"🤪\", \"🤨\", \"🧐\", \"🤓\", \"😎\", 
    \"🤩\", \"🥳\", \"😏\", \"😒\", \"😞\", \"😔\", \"😟\", \"😕\", \"🙁\", \"☹️\",
    \"❤️\", \"👍\", \"👎\", \"👏\", \"🙌\", \"🤝\", \"🙏\"
];

// Fonction pour générer les emojis
function generateEmojis() {
    document.querySelectorAll('.emoji-list').forEach(container => {
        container.innerHTML = '';
        
        EMOJIS.forEach(emoji => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'emoji-item';
            btn.textContent = emoji;
            btn.onclick = function() {
                const forumId = this.closest('.comment-form').querySelector('textarea').id.split('-')[2];
                insertEmoji(forumId, emoji);
            };
            container.appendChild(btn);
        });
    });
}

// Fonction pour insérer un emoji
function insertEmoji(forumId, emoji) {
    const textarea = document.getElementById(`comment-textarea-\${forumId}`);
    const startPos = textarea.selectionStart;
    const endPos = textarea.selectionEnd;
    
    textarea.value = textarea.value.substring(0, startPos) + emoji + textarea.value.substring(endPos);
    textarea.selectionStart = textarea.selectionEnd = startPos + emoji.length;
    textarea.focus();
}

// Fonction pour initialiser les boutons de commentaires
function initializeCommentButtons() {
    document.querySelectorAll('.btn-comments').forEach(button => {
        // Supprimer d'abord les anciens écouteurs
        button.removeEventListener('click', handleCommentButtonClick);
        // Ajouter le nouvel écouteur
        button.addEventListener('click', handleCommentButtonClick);
    });
}

// Gestionnaire d'événement pour les boutons de commentaires
function handleCommentButtonClick() {
    const forumId = this.dataset.forumId;
    const section = document.getElementById('comments-' + forumId);
    section.classList.toggle('show');
    this.classList.toggle('active');
}

// Fonction pour initialiser les emojis
function initializeEmojis() {
    generateEmojis();
    
    // Gestion des clics sur les boutons emoji
    document.querySelectorAll('.emoji-toggle-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const container = this.closest('.emoji-container');
            const window = container.querySelector('.emoji-window');
            window.style.display = window.style.display === 'block' ? 'none' : 'block';
        });
    });
}

// Fonction pour réinitialiser tout après une recherche AJAX
function initializeAfterAjax() {
    initializeCommentButtons();
    initializeEmojis();
    addForumIdToFormAction();
}

// Fonction pour ajouter l'ID du forum aux actions des formulaires
function addForumIdToFormAction() {
    document.querySelectorAll('.comment-form form').forEach(form => {
        const forumId = form.action.split('/').pop();
        form.action = form.action.includes('?') ? form.action : form.action + '?openForum=' + forumId;
    });
    
    document.querySelectorAll('.edit-comment-form').forEach(form => {
        const forumId = form.closest('.comments-section').id.split('-')[1];
        form.action = form.action.includes('?') ? form.action : form.action + '?openForum=' + forumId;
    });
}

// Recherche dynamique
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('dynamicSearchInput');
    const loader = document.querySelector('.search-loader');
    let searchTimeout;
    let lastRequest;

    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.trim();
        
        loader.classList.remove('d-none');
        
        if (lastRequest) {
            lastRequest.abort();
        }
        
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            performSearch(searchTerm);
        }, 300);
    });

    function performSearch(searchTerm) {
        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        
        params.set('search', searchTerm);
        params.set('ajax', '1');
        
        // Garder les autres paramètres
        const category = url.searchParams.get('category');
        const sort = url.searchParams.get('sort');
        
        if (category) params.set('category', category);
        if (sort) params.set('sort', sort);
        
        lastRequest = new XMLHttpRequest();
        lastRequest.open('GET', `\${url.pathname}?\${params.toString()}`, true);
        lastRequest.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        
        lastRequest.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                const parser = new DOMParser();
                const doc = parser.parseFromString(this.response, 'text/html');
                const newContent = doc.getElementById('forumsList');
                
                if (newContent) {
                    document.getElementById('forumsList').outerHTML = newContent.outerHTML;
                    initializeAfterAjax();
                }
            }
            loader.classList.add('d-none');
        };
        
        lastRequest.send();
    }

    // Gestion des clics en dehors des emojis
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.emoji-container') && !e.target.matches('.emoji-toggle-btn')) {
            document.querySelectorAll('.emoji-window').forEach(w => w.style.display = 'none');
        }
    });

    // Initialisation au premier chargement
    initializeAfterAjax();

    // Garder ouvert le forum concerné après action
    const urlParams = new URLSearchParams(window.location.search);
    const openForumId = urlParams.get('openForum');
    if (openForumId) {
        const section = document.getElementById('comments-' + openForumId);
        const button = document.querySelector(`.btn-comments[data-forum-id=\"\${openForumId}\"]`);
        if (section && button) {
            section.classList.add('show');
            button.classList.add('active');
        }
    }
});



document.querySelectorAll('.btn-like, .btn-dislike').forEach(btn => {
    btn.addEventListener('click', async function() {
        const button = this;
        const forumId = button.dataset.forumId;
        const isLike = button.classList.contains('btn-like');
        
        // Désactiver le bouton pendant la requête
        button.disabled = true;
        
        try {
            const response = await fetch(`/reaction/\${isLike ? 'like' : 'dislike'}/\${forumId}`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                }
            });
            
            const data = await response.json();
            
            if (data.status === 'success') {
                // Mise à jour des compteurs
                document.querySelectorAll(`.btn-like[data-forum-id=\"\${forumId}\"] .like-count`).forEach(el => {
                    el.textContent = data.nblike;
                });
                document.querySelectorAll(`.btn-dislike[data-forum-id=\"\${forumId}\"] .dislike-count`).forEach(el => {
                    el.textContent = data.nbdislike;
                });
                
                // Mise à jour visuelle
                const likeBtn = document.querySelector(`.btn-like[data-forum-id=\"\${forumId}\"]`);
                const dislikeBtn = document.querySelector(`.btn-dislike[data-forum-id=\"\${forumId}\"]`);
                
                likeBtn.classList.toggle('active', data.current_action === 'like');
                dislikeBtn.classList.toggle('active', data.current_action === 'dislike');
            }
        } catch (error) {
            console.error('Error:', error);
        } finally {
            button.disabled = false;
        }
    });
});

// Initialisation
document.querySelectorAll('.btn-like, .btn-dislike').forEach(btn => {
    btn.addEventListener('click', handleReaction);
});



function shareForum(forumId) {
    const shareUrl = `\${window.location.origin}/forums?show_forum=\${forumId}`;
    
    if (navigator.share) {
        navigator.share({
            title: 'Forum intéressant',
            text: 'Regardez ce forum',
            url: shareUrl
        }).catch(err => console.error('Erreur de partage:', err));
    } else {
        // Fallback pour desktop
        const modalHtml = `
            <div class=\"share-modal\">
                <div class=\"share-options\">
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=\${encodeURIComponent(shareUrl)}\" target=\"_blank\">
                        <i class=\"fab fa-facebook\"></i> Facebook
                    </a>
                    <button onclick=\"copyToClipboard('\${shareUrl}')\">
                        <i class=\"fas fa-copy\"></i> Copier le lien
                    </button>
                </div>
            </div>`;
        
        const div = document.createElement('div');
        div.innerHTML = modalHtml;
        document.body.appendChild(div);
    }
}
function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
        .then(() => alert('Lien copié avec succès!'))
        .catch(err => console.error('Erreur:', err));
}




// Détection des mots interdits avant soumission
document.querySelectorAll('.comment-form form').forEach(form => {
    form.addEventListener('submit', function(e) {
        const textarea = this.querySelector('textarea');
        const content = textarea.value.toLowerCase();
        const badwords = [
            'fuck', 'shit', 'stupid', 'bitch', 'damn', 
            'merde', 'putain', 'connard', 'salope', 'bad'
        ];
        
        // Création d'une alerte stylisée
        function showBadWordAlert(message) {
            // Supprimer les anciennes alertes
            const oldAlert = document.querySelector('.badword-alert');
            if (oldAlert) oldAlert.remove();
            
            // Créer une nouvelle alerte
            const alertDiv = document.createElement('div');
            alertDiv.className = 'badword-alert alert alert-danger position-fixed';
            alertDiv.style.top = '20px';
            alertDiv.style.right = '20px';
            alertDiv.style.zIndex = '2000';
            alertDiv.style.maxWidth = '300px';
            alertDiv.innerHTML = `
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                \${message}
                <button type=\"button\" class=\"btn-close ms-2\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            `;
            
            document.body.appendChild(alertDiv);
            
            // Fermeture automatique après 5 secondes
            setTimeout(() => {
                alertDiv.classList.add('fade-out');
                setTimeout(() => alertDiv.remove(), 500);
            }, 5000);
        }

        // Vérification des mots interdits
        const foundWords = badwords.filter(word => content.includes(word.toLowerCase()));
        
        if (foundWords.length > 0) {
            e.preventDefault();
            showBadWordAlert(`Mot(s) interdit(s) détecté(s) : \${foundWords.join(', ')}`);
            textarea.focus();
            
            // Animation pour mettre en évidence le champ
            textarea.classList.add('is-invalid');
            setTimeout(() => {
                textarea.classList.remove('is-invalid');
            }, 2000);
            
            return false;
        }
    });
});

// Style pour l'animation et l'alerte
const style = document.createElement('style');
style.textContent = `
    .fade-out {
        opacity: 0;
        transition: opacity 0.5s ease-out;
    }
    .is-invalid {
        border-color: #dc3545 !important;
        animation: shake 0.5s;
    }
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        20%, 60% { transform: translateX(-5px); }
        40%, 80% { transform: translateX(5px); }
    }
`;
document.head.appendChild(style);








// Traduction
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du clic sur le bouton de traduction
    document.querySelectorAll('.translate-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const forumId = this.dataset.forumId;
            const langSelect = document.querySelector(`.language-selector[data-forum-id=\"\${forumId}\"]`);
            const targetLang = langSelect.value;
            const descriptionElement = document.getElementById(`forum-description-\${forumId}`);
            
            // Si retour au texte original
            if (targetLang === 'original') {
                descriptionElement.textContent = this.dataset.originalText;
                langSelect.classList.remove('border', 'border-success');
                this.classList.remove('active');
                this.querySelector('.btn-text').textContent = 'Traduire';
                return;
            }

            // Feedback visuel
            const originalBtnHtml = this.innerHTML;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> <span class=\"btn-text\">Traduction...</span>';
            this.disabled = true;
            
            // Animation de chargement
            descriptionElement.style.opacity = '0.7';

            // Appel AJAX
            fetch(`/api/forum/\${forumId}/translate`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    lang: targetLang
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur de traduction');
                }
                return response.json();
            })
            .then(data => {
                // Mise à jour de l'interface
                descriptionElement.textContent = data.translated;
                descriptionElement.style.opacity = '1';
                
                // Ajout indicateur de langue
                let indicator = descriptionElement.querySelector('.translation-indicator');
                if (!indicator) {
                    indicator = document.createElement('small');
                    indicator.className = 'translation-indicator text-muted d-block mt-1';
                    descriptionElement.appendChild(indicator);
                }
                indicator.textContent = `(Traduit en \${getLanguageName(targetLang)})`;
                
                // Style bouton actif
                this.classList.add('active');
                langSelect.classList.add('border', 'border-success');
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Échec de la traduction: ' + error.message);
                descriptionElement.textContent = this.dataset.originalText;
            })
            .finally(() => {
                this.innerHTML = originalBtnHtml;
                this.querySelector('.btn-text').textContent = 'Retraduire';
                this.disabled = false;
            });
        });
    });

    // Helper pour les noms de langues
    function getLanguageName(code) {
        const languages = {
            'fr': 'Français',
            'es': 'Espagnol', 
            'de': 'Allemand',
            'ar': 'Arabe'
        };
        return languages[code] || code;
    }
});


async function translateText(forumId, text, lang) {
    const button = document.querySelector(`.translate-btn[data-forum-id=\"\${forumId}\"]`);
    const targetElement = document.getElementById(`forum-description-\${forumId}`);
    
    // Sauvegarde du texte original
    if (!button.dataset.originalText) {
        button.dataset.originalText = text;
    }

    // Affichage du loader
    button.disabled = true;
    button.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';

    try {
        const response = await fetch(`/api/forum/\${forumId}/translate`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ lang: lang })
        });

        const data = await response.json();
        
        if (!response.ok) throw new Error(data.error || 'Erreur de traduction');
        
        targetElement.textContent = data.translated;
        
    } catch (error) {
        console.error('Erreur:', error);
        alert('La traduction a échoué : ' + error.message);
    } finally {
        button.innerHTML = '<i class=\"fas fa-language\"></i>';
        button.disabled = false;
    }
}

// Utilisation exemple :
// translateText(123, \"Hello world\", \"fr\");


</script>
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
        return "forums/forums.html.twig";
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
        return array (  1297 => 972,  1288 => 966,  1284 => 964,  1280 => 962,  1274 => 960,  1272 => 959,  1267 => 956,  1264 => 955,  1239 => 936,  1233 => 933,  1224 => 927,  1219 => 925,  1215 => 923,  1206 => 919,  1204 => 918,  1192 => 911,  1188 => 910,  1182 => 909,  1174 => 904,  1170 => 903,  1163 => 899,  1159 => 898,  1155 => 897,  1151 => 896,  1147 => 895,  1140 => 891,  1136 => 890,  1131 => 888,  1125 => 886,  1120 => 885,  1115 => 883,  1108 => 879,  1102 => 876,  1096 => 873,  1091 => 871,  1086 => 869,  1081 => 867,  1076 => 865,  1070 => 862,  1062 => 857,  1052 => 850,  1045 => 846,  1041 => 845,  1037 => 844,  1030 => 839,  1022 => 835,  1016 => 832,  1011 => 831,  1009 => 830,  998 => 822,  994 => 821,  988 => 818,  983 => 816,  978 => 813,  973 => 812,  971 => 811,  965 => 807,  957 => 802,  954 => 801,  952 => 800,  949 => 799,  938 => 791,  932 => 788,  926 => 785,  920 => 781,  914 => 779,  912 => 778,  908 => 777,  895 => 767,  891 => 766,  884 => 762,  880 => 761,  873 => 757,  869 => 756,  862 => 752,  858 => 751,  851 => 747,  847 => 746,  842 => 743,  840 => 742,  832 => 736,  824 => 731,  821 => 730,  819 => 729,  806 => 719,  787 => 702,  777 => 698,  773 => 696,  769 => 695,  79 => 8,  76 => 7,  63 => 6,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}




{% block content %}
<head>
<meta name=\"csrf-token\" content=\"{{ csrf_token('translate') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
  <style>
    /* ================ Styles généraux ================ */
    .search-container {
        position: relative;
    }

    .search-loader {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #844062;
        font-size: 1.2rem;
    }

    .btn-outline-custom {
        border-color: #ADC29B;
        color: #844062;
    }

    .btn-outline-custom:hover {
        background-color: #ADC29B;
        color: white;
    }

    .active {
        background-color: #ADC29B !important;
        color: white !important;
        border-color: #ADC29B !important;
    }

    /* ================ Section commentaires ================ */
    .comments-section {
        display: none;
        margin-top: 15px;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 5px;
    }

    .comments-section.show {
        display: block;
    }

    /* ================ Commentaires individuels ================ */
    .comment {
        padding: 10px;
        margin-bottom: 10px;
        background-color: white;
        border-radius: 5px;
        border-left: 3px solid #ADC29B;
    }

    .comment-actions {
        display: flex;
        gap: 8px;
        margin-top: 10px;
    }

    .btn-edit-comment, .btn-delete-comment {
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.8rem;
        transition: all 0.2s;
    }

    .btn-edit-comment {
        background-color: #f8f9fa;
        border: 1px solid #ADC29B;
        color: #844062;
    }

    .btn-edit-comment:hover {
        background-color: #ADC29B;
        color: white;
    }

    .btn-delete-comment {
        background-color: #f8f9fa;
        border: 1px solid #dc3545;
        color: #dc3545;
    }

    .btn-delete-comment:hover {
        background-color: #dc3545;
        color: white;
    }

    .comment-count {
        margin-left: 5px;
        background-color: #844062;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 0.8rem;
    }

    .edit-comment-form {
        display: none;
        margin-top: 10px;
    }

    /* ================ Formulaire de commentaire ================ */
    .comment-form {
        display: flex;
        align-items: flex-end;
        gap: 10px;
        margin-top: 15px;
        width: 100%;
    }

    .comment-input-container {
        position: relative;
        flex-grow: 1;
        width: calc(100% - 120px);
    }

    .comment-input-container textarea {
        width: 100% !important;
        padding: 8px 45px 8px 15px;
        border-radius: 20px;
        border: 1px solid #ADC29B;
        resize: none;
        min-height: 40px;
        transition: border-color 0.3s ease;
        max-width: 100%;
    }
    
    .comment-input-container textarea:focus {
        border-color: #844062;
        box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
        outline: none;
    }

    /* ================ Boutons ================ */
    .btn-post-comment {
        background-color: #844062;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 8px 15px;
        font-weight: 600;
        white-space: nowrap;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-post-comment:hover {
        background-color: #6d3354;
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    /* ================ Emojis ================ */
    .emoji-container {
        position: absolute;
        right: 10px;
        bottom: 10px;
    }

    .emoji-toggle-btn {
        background: none;
        border: none;
        color: #844062;
        font-size: 1.2rem;
        cursor: pointer;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .emoji-toggle-btn:hover {
        background-color: #f0f0f0;
    }

    .emoji-window {
        position: absolute;
        bottom: 40px;
        right: 0;
        width: 400px;
        background: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        padding: 10px;
        z-index: 1000;
        display: none;
    }

    .emoji-window.show {
        display: block;
    }

    .emoji-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .emoji-item {
        cursor: pointer;
        font-size: 1.5rem;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        transition: all 0.2s;
    }

    .emoji-item:hover {
        transform: scale(1.2);
        background-color: #f0f0f0;
    }

   /* ================ Boutons Like/Dislike/Commentaires ================ */
.card-actions {
    display: flex;
    gap: 10px;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #e9ebee;
}

.btn-like, .btn-dislike, .btn-comments, .btn-share {
    flex: 1;
    background: none;
    border: none;
    border-radius: 4px;
    padding: 8px 0;
    font-size: 0.9rem;
    color: #65676b;
    transition: all 0.3s ease;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}

.btn-like:hover, .btn-dislike:hover, .btn-comments:hover, .btn-share:hover {
    background-color: #f2f3f5;
    cursor: pointer;
}

.btn-like.active {
    color: #1877f2;
}

.btn-dislike.active {
    color: #f02849;
}

.btn-comments.active {
    color: #844062;
}

.btn-share.active {
    color: #45bd62; /* Vert pour le partage */
}

.btn-like i, .btn-dislike i, .btn-comments i, .btn-share i {
    font-size: 1rem;
}

.like-count, .dislike-count, .comment-count, .share-count {
    font-weight: 500;
    color: inherit; /* Utilise la couleur du parent */
    background: none; /* Supprime le fond */
    border-radius: 0; /* Supprime le bord arrondi */
    padding: 0; /* Réinitialise le padding */
    margin-left: 4px; /* Petit espace après l'icône */
}

/* Animation pour les boutons */
.btn-like:active, .btn-dislike:active, .btn-comments:active, .btn-share:active {
    transform: scale(0.95);
}

/* Effet de remplissage pour les boutons actifs */
.btn-like.active::before, 
.btn-dislike.active::before, 
.btn-comments.active::before,
.btn-share.active::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: currentColor;
    opacity: 0.1;
    border-radius: 4px;
}

/* Style pour les boutons actifs (après clic) */
.btn-like.active i {
    color: #1877f2;
}

.btn-dislike.active i {
    color: #f02849;
}

.btn-comments.active i {
    color: #844062;
}

.btn-share.active i {
    color: #45bd62;
}
    /* ================ Responsive ================ */
    @media (max-width: 576px) {
        .comment-form {
            flex-direction: column;
            align-items: flex-end;
        }
        
        .btn-post-comment {
            margin-top: 10px;
        }

        .card-actions {
            flex-direction: column;
            gap: 8px;
        }

        .btn-like, .btn-dislike, .btn-comments {
            justify-content: flex-start;
            padding: 8px 12px;
        }
    }


    .btn-share {
    background: none;
    border: none;
    color: #65676b;
    cursor: pointer;
    padding: 8px 12px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.btn-share:hover {
    background-color: #f0f2f5;
}

.share-modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.share-options {
    background: white;
    padding: 20px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.share-options a, .share-options button {
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #333;
    border: none;
    background: none;
    cursor: pointer;
    text-align: left;
}

.share-options a:hover, .share-options button:hover {
    background-color: #f0f2f5;
}





/* ================ Bouton Create Forum ================ */
.btn-create-forum {
    background-color: #844062; /* Couleur principale */
    color: white;
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 8px rgba(132, 64, 98, 0.3);
    height: 46px;
}

.btn-create-forum:hover {
    background-color: #6d3354; /* Version plus sombre au survol */
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(132, 64, 98, 0.4);
}

.btn-create-forum:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px rgba(132, 64, 98, 0.3);
}

.btn-create-forum i {
    font-size: 1.1em;
    margin-right: 10px;
    transition: transform 0.3s ease;
}

.btn-create-forum:hover i {
    transform: scale(1.1);
}

/* Animation au clic */
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.btn-create-forum:focus {
    animation: pulse 0.5s ease;
    outline: none;
}

/* Responsive */
@media (max-width: 768px) {
    .btn-create-forum {
        padding: 8px 15px;
        font-size: 0.9rem;
        height: 42px;
    }
    
    .btn-create-forum i {
        margin-right: 8px;
        font-size: 1em;
    }
}

@media (max-width: 576px) {
    .btn-create-forum {
        width: 100%;
    }
}


/* Styles pour la traduction des descriptions de forum */
.forum-translation {
    margin: 15px 0;
    position: relative;
}

.translation-tools {
    display: flex;
    gap: 10px;
    margin-top: 10px;
    align-items: center;
}

.language-picker {
    flex-grow: 1;
    padding: 8px 12px;
    border: 1px solid #ADC29B;
    border-radius: 6px;
    background-color: white;
    color: #844062;
    font-size: 0.9rem;
}

.translate-btn {
    background-color: #844062;
    color: white;
    border: none;
    border-radius: 6px;
    padding: 8px 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.9rem;
    transition: all 0.2s;
}

.translate-btn:hover {
    background-color: #6d3354;
    transform: translateY(-1px);
}

.translate-btn i {
    font-size: 0.9rem;
}

.translation-status {
    font-size: 0.8rem;
    color: #6c757d;
    margin-top: 5px;
    font-style: italic;
    display: none;
}

/* Animation de chargement */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.translating .translate-btn::after {
    content: \"\";
    display: inline-block;
    width: 12px;
    height: 12px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top-color: white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin-left: 5px;
}









 /* ================ Nouveaux styles pour la section de traduction ================ */
    .translation-section {
        margin-top: 50px;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    .translation-section h3 {
        text-align: center;
        color: #844062;
        margin-bottom: 20px;
    }
    .translation-section form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .translation-section input[type=\"text\"] {
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }
    .translation-section input[type=\"text\"]:focus {
        border-color: #844062;
        box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
    }
    .translation-section select {
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }
    .translation-section select:focus {
        border-color: #844062;
        box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
    }
    .translation-section button {
        padding: 10px;
        background-color: #844062;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .translation-section button:hover {
        background-color: #6d3354;
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .translation-section p {
        margin-top: 20px;
        font-size: 1.1rem;
        color: #333;
    }
    .translation-section span {
        font-weight: bold;
        color: #844062;
    }



    /* Ajoutez ces styles à votre feuille CSS */
.translation-status {
    font-size: 0.8rem;
    margin-top: 5px;
    display: none;
    padding: 5px;
    border-radius: 4px;
}

.translation-status.loading {
    color: #844062;
    background-color: #f8f9fa;
}

.translation-status.success {
    color: #28a745;
    background-color: #e6ffed;
}

.translation-status.error {
    color: #dc3545;
    background-color: #ffe6e6;
}

.fa-spinner {
    animation: spin 1s linear infinite;
    margin-right: 5px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
    </head>
<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <div class=\"section-overlay\" style=\"background: url('images/test2.png') center/cover no-repeat;\"></div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ADC29B\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ADC29B\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\"></div>
        </div>
    </div>
    <svg viewBox=\"0 0 1962 178\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <path fill=\"#ffffff\" d=\"M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z\" stroke-width=\"0\"></path>
        <path fill=\"#ffffff\" d=\"M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z\" stroke-width=\"0\"></path>
    </svg>
</section>

<div style=\"height: 100px;\"></div>
<div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 2000\">
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger alert-dismissible fade show\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    </div>
<div class=\"container mt-4\">
    <div class=\"row align-items-center mb-4 g-3\">
        <!-- Barre de recherche améliorée -->
        <div class=\"col-md-8\">
            <div class=\"search-container position-relative\">
                <div class=\"input-group\">
                    <span class=\"input-group-text bg-white border-end-0\">
                        <i class=\"fas fa-search text-muted\"></i>
                    </span>
                    <input 
                        type=\"text\" 
                        id=\"dynamicSearchInput\"
                        class=\"form-control border-start-0 ps-0\" 
                        placeholder=\"Search...\" 
                        aria-label=\"Recherche dynamique\"
                        autocomplete=\"off\"
                        value=\"{{ app.request.query.get('search') }}\"
                        style=\"height: 45px; border-radius: 0 8px 8px 0\">
                </div>
                <div class=\"search-loader d-none position-absolute end-0 top-50 translate-middle-y me-3\">
                    <i class=\"fas fa-spinner fa-spin text-purple\"></i>
                </div>
            </div>
        </div>

        <!-- Bouton Create Forum stylisé -->
        {% if not is_ajax_request %}
        <div class=\"col-md-4\">
            <a href=\"{{ path('app_forums_new') }}\" class=\"btn btn-create-forum w-100\">
    <i class=\"fas fa-plus-circle me-2\"></i> Create Forum
</a>
        </div>
        {% endif %}
    </div>
</div>


<div class=\"container mt-5\">
    <div id=\"forums-container\">
        {% if not is_ajax_request|default(false) %}
            <div class=\"row mb-4\">
                <div class=\"col-12 d-flex justify-content-center\">
                    <div class=\"btn-group\" role=\"group\">
                        <a href=\"{{ path('app_forums') }}\" 
                           class=\"btn {{ not app.request.query.get('category') ? 'active' : 'btn-outline-custom' }}\" 
                           style=\"width: auto;\">
                           All
                        </a>
                        <a href=\"{{ path('app_forums', {'category': 'Mariage'}) }}\" 
                           class=\"btn {{ app.request.query.get('category') == 'Mariage' ? 'active' : 'btn-outline-custom' }}\" 
                           style=\"width: auto;\">
                           Mariage
                        </a>
                        <a href=\"{{ path('app_forums', {'category': 'Anniversaire'}) }}\" 
                           class=\"btn {{ app.request.query.get('category') == 'Anniversaire' ? 'active' : 'btn-outline-custom' }}\" 
                           style=\"width: auto;\">
                           Anniversaire
                        </a>
                        <a href=\"{{ path('app_forums', {'category': 'Graduation'}) }}\" 
                           class=\"btn {{ app.request.query.get('category') == 'Graduation' ? 'active' : 'btn-outline-custom' }}\" 
                           style=\"width: auto;\">
                           Graduation
                        </a>
                        <a href=\"{{ path('app_forums', {'category': 'Baby_Shower'}) }}\" 
                           class=\"btn {{ app.request.query.get('category') == 'Baby_Shower' ? 'active' : 'btn-outline-custom' }}\" 
                           style=\"width: auto;\">
                           Baby Shower
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"row mb-4\">
    <div class=\"col-md-6 offset-md-3\">
        <form method=\"GET\" action=\"{{ path('app_forums') }}\" class=\"d-flex align-items-center justify-content-center\">
            {% if app.request.query.get('category') %}
                <input type=\"hidden\" name=\"category\" value=\"{{ app.request.query.get('category') }}\">
            {% endif %}
            <label for=\"sort\" class=\"me-2 text-nowrap\" style=\"color: #844062;\">
                <i class=\"fas fa-sort me-1\"></i>Sort by:
            </label>
            <select name=\"sort\" id=\"sort\" class=\"form-select\" onchange=\"this.form.submit()\">
                <option value=\"newest\" {{ app.request.query.get('sort') == 'newest' ? 'selected' }}>
                    Newest
                </option>
                <option value=\"oldest\" {{ app.request.query.get('sort') == 'oldest' ? 'selected' }}>
                    Oldest
                </option>
                <option value=\"popular\" {{ app.request.query.get('sort') == 'popular' ? 'selected' }}>
                    Popular 
                </option>
            </select>
        </form>
    </div>
</div>
        {% endif %}
         
         {% if single_forum_mode %}
    <div class=\"col-12 mb-3\">
        <a href=\"{{ path('app_forums') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> 
        </a>
    </div>
{% endif %}



        <div class=\"row justify-content-center\" id=\"forumsList\">
            {% if forums is defined and forums is not empty %}
                {% for forum in forums %}
                    <div class=\"col-lg-8 col-md-10 mb-4\">
                        <div class=\"card shadow-lg forum-card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                                <h3 class=\"h5 mb-0\">{{ forum.categorie|upper }}</h3>
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('app_forum_edit', {'id': forum.id}) }}\" class=\"btn btn-sm btn-outline-light me-2\">
                                        <i class=\"fas fa-edit me-1\"></i> Edit
                                    </a>
                                    <form method=\"POST\" action=\"{{ path('app_forum_delete', {'id': forum.id}) }}\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-forum') }}\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-outline-light\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
                                            <i class=\"fas fa-trash me-1\"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"card-img-container text-center\">
                                {% if forum.img starts with 'img_' %}
                                    <img src=\"{{ path('app_forum_image', {'id': forum.img}) }}\" 
                                         alt=\"Image du forum {{ forum.categorie }}\"
                                         class=\"img-fluid mx-auto d-block\">
                                {% else %}
                                    <img src=\"{{ asset('default_image.png') }}\" 
                                         alt=\"\"
                                         class=\"img-fluid mx-auto d-block\">
                                {% endif %}
                            </div>
                            <div class=\"card-body text-center\">
    <!-- Description avec système de traduction -->
    <div class=\"forum-translation\">
        <p class=\"card-text forum-description\" 
           id=\"forum-description-{{ forum.id }}\"
           data-original-text=\"{{ forum.description|e('html_attr') }}\">
            {{ forum.description }}
        </p>
        
        <div class=\"translation-tools\">
            <select class=\"language-picker\" data-forum-id=\"{{ forum.id }}\">
                <option value=\"\">Choose a language</option>
                <option value=\"fr\">Français</option>
                <option value=\"en\">Anglais</option>
                <option value=\"ar\">Arabe</option>
            </select>
            
            <button class=\"translate-btn\" data-forum-id=\"{{ forum.id }}\">
                <i class=\"fas fa-language\"></i> translate
            </button>
        </div>
        
        <div class=\"translation-status\" id=\"translation-status-{{ forum.id }}\"></div>
    </div>
                               <div class=\"card-actions\">
    <button class=\"btn btn-outline-primary btn-like\" data-forum-id=\"{{ forum.id }}\">
        <i class=\"far fa-thumbs-up\"></i> Like 
        <span class=\"like-count\">{{ forum.reactions|length > 0 ? forum.reactions[0].nblike : 0 }}</span>
    </button>
    <button class=\"btn btn-outline-danger btn-dislike\" data-forum-id=\"{{ forum.id }}\">
        <i class=\"far fa-thumbs-down\"></i> Dislike 
        <span class=\"dislike-count\">{{ forum.reactions|length > 0 ? forum.reactions[0].nbdislike : 0 }}</span>
    </button>
                                   <button class=\"btn btn-outline-secondary btn-comments\" data-forum-id=\"{{ forum.id }}\">
                                   
    <i class=\"far fa-comment\"></i> Comments 
    <span class=\"comment-count\">{{ forum.comments|length }}</span>
    
</button>
<button class=\"btn-share\" onclick=\"shareForum('{{ forum.getId() }}')\">
    <i class=\"fas fa-share\"></i> Share
</button>
                                </div>
                                <div id=\"comments-{{ forum.id }}\" class=\"comments-section\">
                                    <div class=\"existing-comments\">
                                        {% for comment in forum.comments %}
                                            <div class=\"comment\" id=\"comment-{{ comment.IdCmn }}\">
                                                <div class=\"comment-date\">
                                                    {{ comment.date|date('d/m/Y H:i') }}
                                                </div>
                                                <div class=\"comment-content\" id=\"comment-content-{{ comment.IdCmn }}\">
                                                    {{ comment.sujet }}
                                                </div>
                                                <div class=\"comment-actions\">
                                                    <button class=\"btn-edit-comment\" onclick=\"
                                                        document.getElementById('comment-content-{{ comment.IdCmn }}').style.display = 'none';
                                                        document.querySelector('#comment-{{ comment.IdCmn }} .btn-edit-comment').style.display = 'none';
                                                        document.querySelector('#comment-{{ comment.IdCmn }} .btn-delete-comment').style.display = 'none';
                                                        document.getElementById('edit-form-{{ comment.IdCmn }}').style.display = 'block';
                                                        document.querySelector('#edit-form-{{ comment.IdCmn }} textarea').focus();
                                                    \">
                                                        <i class=\"fas fa-edit\"></i> Edit
                                                    </button>
                                                    <form method=\"POST\" action=\"{{ path('comment_delete', {'id': comment.IdCmn}) }}\" class=\"d-inline\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-comment' ~ comment.IdCmn) }}\">
                                                        <button type=\"submit\" class=\"btn-delete-comment\" style=\"border-color: #ADC29B; color: #844062;\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?')\">
                                                            <i class=\"fas fa-trash\"></i> Delete
                                                        </button>
                                                    </form>
                                                    <form id=\"edit-form-{{ comment.IdCmn }}\" class=\"edit-comment-form\" method=\"POST\" action=\"{{ path('comment_edit', {'id': comment.IdCmn}) }}\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-comment' ~ comment.IdCmn) }}\">
                                                        <textarea name=\"content\" class=\"form-control\">{{ comment.sujet }}</textarea>
                                                        <button type=\"submit\" class=\"btn btn-sm mt-2\" style=\"border-color: #ADC29B; color: #844062;\">
                                                            <i class=\"fas fa-save\"></i> Enregistrer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        {% else %}
                                            <div class=\"no-comments\">
                                                <i class=\"far fa-comment-dots\"></i> NO COMMENTS
                                            </div>
                                        {% endfor %}
                                    </div>
             <div class=\"comment-form\">
    <form action=\"{{ path('app_comment_add', {'forumId': forum.id}) }}\" method=\"POST\" class=\"d-flex align-items-end gap-2 w-100\">
        <div class=\"comment-input-container position-relative flex-grow-1\" style=\"width: 85%;\">
            <textarea name=\"comment_content\" id=\"comment-textarea-{{ forum.id }}\" 
                      class=\"form-control\" rows=\"1\" 
                      placeholder=\"Write a comment...\" required
                      style=\"width: 100%; min-height: 40px; padding-right: 40px;\"></textarea>
            
            <div class=\"emoji-container\">
                <button type=\"button\" class=\"emoji-toggle-btn\" id=\"emoji-toggle-{{ forum.id }}\">
                    <i class=\"far fa-smile\"></i>
                </button>
                <div class=\"emoji-window\" id=\"emoji-window-{{ forum.id }}\">
                    <div class=\"emoji-list\">
                        <!-- Les émojis seront insérés ici par JavaScript -->
                        😀 😃 😄 😁 😆 😅 😂 🤣 😊 😇
                    </div>
                </div>
            </div>
        </div>
        
        <button type=\"submit\" class=\"btn btn-post-comment\" style=\"width: 15%; min-width: 80px; margin-bottom: 8px;\">
            <i class=\"far fa-paper-plane\"></i> 
        </button>
    </form>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"col-12\">
                    <div class=\"alert alert-warning text-center py-4\">
                        <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>
                            {% if app.request.query.get('search') %}
                                No results for \"{{ app.request.query.get('search') }}\"
                            {% else %}
                                No forum found
                            {% endif %}
                        </h4>
                        <p class=\"mb-0\">Be the first to create a forum!</p>
                        <a href=\"{{ path('app_forums_new') }}\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-plus me-2\"></i>Create forum
                        </a>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>









<div style=\"height: 100px;\"></div>
   <script>

 




document.addEventListener('DOMContentLoaded', function() {
    // Gestion des traductions
    document.querySelectorAll('.translate-btn').forEach(btn => {
        btn.addEventListener('click', async function() {
            const forumId = this.dataset.forumId;
            const descriptionElement = document.getElementById(`forum-description-\${forumId}`);
            const statusElement = document.getElementById(`translation-status-\${forumId}`);
            const languageSelector = document.querySelector(`.language-picker[data-forum-id=\"\${forumId}\"]`);
            const targetLanguage = languageSelector.value;
            
            // Validation
            if (!targetLanguage) {
                showStatus(statusElement, \"Veuillez sélectionner une langue\", 'error');
                return;
            }
            
            const originalText = descriptionElement.dataset.originalText;
            
            // Si déjà traduit dans cette langue
            if (descriptionElement.dataset.currentLang === targetLanguage) {
                return;
            }
            
            // Revenir à l'original si sélectionné
            if (targetLanguage === 'original') {
                resetToOriginal(forumId);
                return;
            }
            
            // UI de chargement
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Traduction...';
            showStatus(statusElement, \"Traduction en cours...\", 'loading');
            
            try {
                const response = await fetch(`/forum/translate/\${forumId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        text: originalText,
                        targetLang: targetLanguage
                    })
                });
                
                const data = await response.json();
                
                if (response.ok && data.translatedText) {
                    updateTranslationUI(forumId, data.translatedText, targetLanguage);
                    showStatus(statusElement, `Traduit en \${getLanguageName(targetLanguage)}`, 'success');
                } else {
                    throw new Error(data.error || 'Échec de la traduction');
                }
            } catch (error) {
                console.error(\"Erreur:\", error);
                showStatus(statusElement, \"Erreur: \" + error.message, 'error');
            } finally {
                this.innerHTML = '<i class=\"fas fa-language\"></i> translate';
            }
        });
    });
    
    // Fonctions utilitaires
    function showStatus(element, message, type) {
        element.textContent = message;
        element.style.display = 'block';
        element.className = 'translation-status ' + type;
        
        if (type !== 'loading') {
            setTimeout(() => element.style.display = 'none', 3000);
        }
    }
    
    function updateTranslationUI(forumId, translatedText, lang) {
        const descElement = document.getElementById(`forum-description-\${forumId}`);
        descElement.textContent = translatedText;
        descElement.dataset.currentLang = lang;
        
        // Ajouter bouton de retour si nécessaire
        if (!document.getElementById(`revert-\${forumId}`)) {
            const revertBtn = document.createElement('button');
            revertBtn.id = `revert-\${forumId}`;
            revertBtn.className = 'btn btn-sm btn-outline-secondary mt-2';
            revertBtn.innerHTML = '<i class=\"fas fa-undo\"></i> Original';
            revertBtn.onclick = () => resetToOriginal(forumId);
            document.getElementById(`translation-status-\${forumId}`).after(revertBtn);
        }
    }
    
    function resetToOriginal(forumId) {
        const descElement = document.getElementById(`forum-description-\${forumId}`);
        const originalText = descElement.dataset.originalText;
        descElement.textContent = originalText;
        descElement.removeAttribute('data-current-lang');
        document.querySelector(`.language-picker[data-forum-id=\"\${forumId}\"]`).value = '';
        
        const revertBtn = document.getElementById(`revert-\${forumId}`);
        if (revertBtn) revertBtn.remove();
    }
    
    function getLanguageName(code) {
        const languages = {
            'fr': 'Français',
            'en': 'Anglais',
            'ar': 'Arabe'
        };
        return languages[code] || code;
    }
});






// Liste des emojis disponibles
const EMOJIS = [
    \"😀\", \"😃\", \"😄\", \"😁\", \"😆\", \"😅\", \"😂\", \"🤣\", \"😊\", \"😇\",
    \"🙂\", \"🙃\", \"😉\", \"😌\", \"😍\", \"🥰\", \"😘\", \"😗\", \"😙\", \"😚\",
    \"😋\", \"😛\", \"😝\", \"😜\", \"🤪\", \"🤨\", \"🧐\", \"🤓\", \"😎\", 
    \"🤩\", \"🥳\", \"😏\", \"😒\", \"😞\", \"😔\", \"😟\", \"😕\", \"🙁\", \"☹️\",
    \"❤️\", \"👍\", \"👎\", \"👏\", \"🙌\", \"🤝\", \"🙏\"
];

// Fonction pour générer les emojis
function generateEmojis() {
    document.querySelectorAll('.emoji-list').forEach(container => {
        container.innerHTML = '';
        
        EMOJIS.forEach(emoji => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'emoji-item';
            btn.textContent = emoji;
            btn.onclick = function() {
                const forumId = this.closest('.comment-form').querySelector('textarea').id.split('-')[2];
                insertEmoji(forumId, emoji);
            };
            container.appendChild(btn);
        });
    });
}

// Fonction pour insérer un emoji
function insertEmoji(forumId, emoji) {
    const textarea = document.getElementById(`comment-textarea-\${forumId}`);
    const startPos = textarea.selectionStart;
    const endPos = textarea.selectionEnd;
    
    textarea.value = textarea.value.substring(0, startPos) + emoji + textarea.value.substring(endPos);
    textarea.selectionStart = textarea.selectionEnd = startPos + emoji.length;
    textarea.focus();
}

// Fonction pour initialiser les boutons de commentaires
function initializeCommentButtons() {
    document.querySelectorAll('.btn-comments').forEach(button => {
        // Supprimer d'abord les anciens écouteurs
        button.removeEventListener('click', handleCommentButtonClick);
        // Ajouter le nouvel écouteur
        button.addEventListener('click', handleCommentButtonClick);
    });
}

// Gestionnaire d'événement pour les boutons de commentaires
function handleCommentButtonClick() {
    const forumId = this.dataset.forumId;
    const section = document.getElementById('comments-' + forumId);
    section.classList.toggle('show');
    this.classList.toggle('active');
}

// Fonction pour initialiser les emojis
function initializeEmojis() {
    generateEmojis();
    
    // Gestion des clics sur les boutons emoji
    document.querySelectorAll('.emoji-toggle-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const container = this.closest('.emoji-container');
            const window = container.querySelector('.emoji-window');
            window.style.display = window.style.display === 'block' ? 'none' : 'block';
        });
    });
}

// Fonction pour réinitialiser tout après une recherche AJAX
function initializeAfterAjax() {
    initializeCommentButtons();
    initializeEmojis();
    addForumIdToFormAction();
}

// Fonction pour ajouter l'ID du forum aux actions des formulaires
function addForumIdToFormAction() {
    document.querySelectorAll('.comment-form form').forEach(form => {
        const forumId = form.action.split('/').pop();
        form.action = form.action.includes('?') ? form.action : form.action + '?openForum=' + forumId;
    });
    
    document.querySelectorAll('.edit-comment-form').forEach(form => {
        const forumId = form.closest('.comments-section').id.split('-')[1];
        form.action = form.action.includes('?') ? form.action : form.action + '?openForum=' + forumId;
    });
}

// Recherche dynamique
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('dynamicSearchInput');
    const loader = document.querySelector('.search-loader');
    let searchTimeout;
    let lastRequest;

    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.trim();
        
        loader.classList.remove('d-none');
        
        if (lastRequest) {
            lastRequest.abort();
        }
        
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            performSearch(searchTerm);
        }, 300);
    });

    function performSearch(searchTerm) {
        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        
        params.set('search', searchTerm);
        params.set('ajax', '1');
        
        // Garder les autres paramètres
        const category = url.searchParams.get('category');
        const sort = url.searchParams.get('sort');
        
        if (category) params.set('category', category);
        if (sort) params.set('sort', sort);
        
        lastRequest = new XMLHttpRequest();
        lastRequest.open('GET', `\${url.pathname}?\${params.toString()}`, true);
        lastRequest.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        
        lastRequest.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                const parser = new DOMParser();
                const doc = parser.parseFromString(this.response, 'text/html');
                const newContent = doc.getElementById('forumsList');
                
                if (newContent) {
                    document.getElementById('forumsList').outerHTML = newContent.outerHTML;
                    initializeAfterAjax();
                }
            }
            loader.classList.add('d-none');
        };
        
        lastRequest.send();
    }

    // Gestion des clics en dehors des emojis
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.emoji-container') && !e.target.matches('.emoji-toggle-btn')) {
            document.querySelectorAll('.emoji-window').forEach(w => w.style.display = 'none');
        }
    });

    // Initialisation au premier chargement
    initializeAfterAjax();

    // Garder ouvert le forum concerné après action
    const urlParams = new URLSearchParams(window.location.search);
    const openForumId = urlParams.get('openForum');
    if (openForumId) {
        const section = document.getElementById('comments-' + openForumId);
        const button = document.querySelector(`.btn-comments[data-forum-id=\"\${openForumId}\"]`);
        if (section && button) {
            section.classList.add('show');
            button.classList.add('active');
        }
    }
});



document.querySelectorAll('.btn-like, .btn-dislike').forEach(btn => {
    btn.addEventListener('click', async function() {
        const button = this;
        const forumId = button.dataset.forumId;
        const isLike = button.classList.contains('btn-like');
        
        // Désactiver le bouton pendant la requête
        button.disabled = true;
        
        try {
            const response = await fetch(`/reaction/\${isLike ? 'like' : 'dislike'}/\${forumId}`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                }
            });
            
            const data = await response.json();
            
            if (data.status === 'success') {
                // Mise à jour des compteurs
                document.querySelectorAll(`.btn-like[data-forum-id=\"\${forumId}\"] .like-count`).forEach(el => {
                    el.textContent = data.nblike;
                });
                document.querySelectorAll(`.btn-dislike[data-forum-id=\"\${forumId}\"] .dislike-count`).forEach(el => {
                    el.textContent = data.nbdislike;
                });
                
                // Mise à jour visuelle
                const likeBtn = document.querySelector(`.btn-like[data-forum-id=\"\${forumId}\"]`);
                const dislikeBtn = document.querySelector(`.btn-dislike[data-forum-id=\"\${forumId}\"]`);
                
                likeBtn.classList.toggle('active', data.current_action === 'like');
                dislikeBtn.classList.toggle('active', data.current_action === 'dislike');
            }
        } catch (error) {
            console.error('Error:', error);
        } finally {
            button.disabled = false;
        }
    });
});

// Initialisation
document.querySelectorAll('.btn-like, .btn-dislike').forEach(btn => {
    btn.addEventListener('click', handleReaction);
});



function shareForum(forumId) {
    const shareUrl = `\${window.location.origin}/forums?show_forum=\${forumId}`;
    
    if (navigator.share) {
        navigator.share({
            title: 'Forum intéressant',
            text: 'Regardez ce forum',
            url: shareUrl
        }).catch(err => console.error('Erreur de partage:', err));
    } else {
        // Fallback pour desktop
        const modalHtml = `
            <div class=\"share-modal\">
                <div class=\"share-options\">
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=\${encodeURIComponent(shareUrl)}\" target=\"_blank\">
                        <i class=\"fab fa-facebook\"></i> Facebook
                    </a>
                    <button onclick=\"copyToClipboard('\${shareUrl}')\">
                        <i class=\"fas fa-copy\"></i> Copier le lien
                    </button>
                </div>
            </div>`;
        
        const div = document.createElement('div');
        div.innerHTML = modalHtml;
        document.body.appendChild(div);
    }
}
function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
        .then(() => alert('Lien copié avec succès!'))
        .catch(err => console.error('Erreur:', err));
}




// Détection des mots interdits avant soumission
document.querySelectorAll('.comment-form form').forEach(form => {
    form.addEventListener('submit', function(e) {
        const textarea = this.querySelector('textarea');
        const content = textarea.value.toLowerCase();
        const badwords = [
            'fuck', 'shit', 'stupid', 'bitch', 'damn', 
            'merde', 'putain', 'connard', 'salope', 'bad'
        ];
        
        // Création d'une alerte stylisée
        function showBadWordAlert(message) {
            // Supprimer les anciennes alertes
            const oldAlert = document.querySelector('.badword-alert');
            if (oldAlert) oldAlert.remove();
            
            // Créer une nouvelle alerte
            const alertDiv = document.createElement('div');
            alertDiv.className = 'badword-alert alert alert-danger position-fixed';
            alertDiv.style.top = '20px';
            alertDiv.style.right = '20px';
            alertDiv.style.zIndex = '2000';
            alertDiv.style.maxWidth = '300px';
            alertDiv.innerHTML = `
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                \${message}
                <button type=\"button\" class=\"btn-close ms-2\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            `;
            
            document.body.appendChild(alertDiv);
            
            // Fermeture automatique après 5 secondes
            setTimeout(() => {
                alertDiv.classList.add('fade-out');
                setTimeout(() => alertDiv.remove(), 500);
            }, 5000);
        }

        // Vérification des mots interdits
        const foundWords = badwords.filter(word => content.includes(word.toLowerCase()));
        
        if (foundWords.length > 0) {
            e.preventDefault();
            showBadWordAlert(`Mot(s) interdit(s) détecté(s) : \${foundWords.join(', ')}`);
            textarea.focus();
            
            // Animation pour mettre en évidence le champ
            textarea.classList.add('is-invalid');
            setTimeout(() => {
                textarea.classList.remove('is-invalid');
            }, 2000);
            
            return false;
        }
    });
});

// Style pour l'animation et l'alerte
const style = document.createElement('style');
style.textContent = `
    .fade-out {
        opacity: 0;
        transition: opacity 0.5s ease-out;
    }
    .is-invalid {
        border-color: #dc3545 !important;
        animation: shake 0.5s;
    }
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        20%, 60% { transform: translateX(-5px); }
        40%, 80% { transform: translateX(5px); }
    }
`;
document.head.appendChild(style);








// Traduction
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du clic sur le bouton de traduction
    document.querySelectorAll('.translate-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const forumId = this.dataset.forumId;
            const langSelect = document.querySelector(`.language-selector[data-forum-id=\"\${forumId}\"]`);
            const targetLang = langSelect.value;
            const descriptionElement = document.getElementById(`forum-description-\${forumId}`);
            
            // Si retour au texte original
            if (targetLang === 'original') {
                descriptionElement.textContent = this.dataset.originalText;
                langSelect.classList.remove('border', 'border-success');
                this.classList.remove('active');
                this.querySelector('.btn-text').textContent = 'Traduire';
                return;
            }

            // Feedback visuel
            const originalBtnHtml = this.innerHTML;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> <span class=\"btn-text\">Traduction...</span>';
            this.disabled = true;
            
            // Animation de chargement
            descriptionElement.style.opacity = '0.7';

            // Appel AJAX
            fetch(`/api/forum/\${forumId}/translate`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    lang: targetLang
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur de traduction');
                }
                return response.json();
            })
            .then(data => {
                // Mise à jour de l'interface
                descriptionElement.textContent = data.translated;
                descriptionElement.style.opacity = '1';
                
                // Ajout indicateur de langue
                let indicator = descriptionElement.querySelector('.translation-indicator');
                if (!indicator) {
                    indicator = document.createElement('small');
                    indicator.className = 'translation-indicator text-muted d-block mt-1';
                    descriptionElement.appendChild(indicator);
                }
                indicator.textContent = `(Traduit en \${getLanguageName(targetLang)})`;
                
                // Style bouton actif
                this.classList.add('active');
                langSelect.classList.add('border', 'border-success');
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Échec de la traduction: ' + error.message);
                descriptionElement.textContent = this.dataset.originalText;
            })
            .finally(() => {
                this.innerHTML = originalBtnHtml;
                this.querySelector('.btn-text').textContent = 'Retraduire';
                this.disabled = false;
            });
        });
    });

    // Helper pour les noms de langues
    function getLanguageName(code) {
        const languages = {
            'fr': 'Français',
            'es': 'Espagnol', 
            'de': 'Allemand',
            'ar': 'Arabe'
        };
        return languages[code] || code;
    }
});


async function translateText(forumId, text, lang) {
    const button = document.querySelector(`.translate-btn[data-forum-id=\"\${forumId}\"]`);
    const targetElement = document.getElementById(`forum-description-\${forumId}`);
    
    // Sauvegarde du texte original
    if (!button.dataset.originalText) {
        button.dataset.originalText = text;
    }

    // Affichage du loader
    button.disabled = true;
    button.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';

    try {
        const response = await fetch(`/api/forum/\${forumId}/translate`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ lang: lang })
        });

        const data = await response.json();
        
        if (!response.ok) throw new Error(data.error || 'Erreur de traduction');
        
        targetElement.textContent = data.translated;
        
    } catch (error) {
        console.error('Erreur:', error);
        alert('La traduction a échoué : ' + error.message);
    } finally {
        button.innerHTML = '<i class=\"fas fa-language\"></i>';
        button.disabled = false;
    }
}

// Utilisation exemple :
// translateText(123, \"Hello world\", \"fr\");


</script>
{% endblock %}


 
", "forums/forums.html.twig", "C:\\Users\\MSI-PC\\Downloads\\eventifySymfonyBDMrygla\\eventifySymfony\\templates\\forums\\forums.html.twig");
    }
}
