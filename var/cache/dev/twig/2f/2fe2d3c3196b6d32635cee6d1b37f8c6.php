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
class __TwigTemplate_1f29543e54e4dcefd6605ea5d7b44910 extends Template
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

    // line 3
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

        // line 4
        yield "<head>
<meta name=\"csrf-token\" content=\"";
        // line 5
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

    /* ================ Section de contrôle en haut ================ */
.header-controls {
    padding: 15px 0;
}

.header-controls .d-flex {
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.sort-container {
    display: flex;
    align-items: center;
}

.sort-container form {
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.sort-container .form-select {
    border-color: #ADC29B;
    color: #844062;
    min-width: 150px;
    height: 46px;
}

.sort-container .form-select:focus {
    border-color: #844062;
    box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
}

.sort-container label {
    color: #844062;
    font-weight: 500;
}

.buttons-container {
    display: flex;
    align-items: center;
    gap: 20px; /* Espacement entre Create Forum et History */
}

/* ================ Boutons Create Forum et History ================ */
.btn-create-forum,
.btn-primary#history-toggle {
    min-width: 180px;
    height: 50px;
    padding: 15px 20px;
    font-size: 1rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    background-color: #844062;
    color: white;
    border: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 8px rgba(132, 64, 98, 0.3);
    transition: all 0.3s ease;
}

.btn-create-forum:hover,
.btn-primary#history-toggle:hover {
    background-color: #6d3354;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(132, 64, 98, 0.4);
}

.btn-create-forum:active,
.btn-primary#history-toggle:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px rgba(132, 64, 98, 0.3);
}

.btn-create-forum i,
.btn-primary#history-toggle i {
    font-size: 1.2rem;
    margin-right: 8px;
    transition: transform 0.3s ease;
}

.btn-create-forum:hover i,
.btn-primary#history-toggle:hover i {
    transform: scale(1.1);
}

.btn-create-forum:focus,
.btn-primary#history-toggle:focus {
    animation: pulse 0.5s ease;
    outline: none;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
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

/* Styles pour les erreurs de validation */
.invalid-feedback {
    color: #dc3545;
    font-size: 0.875em;
    margin-top: 0.25rem;
}

.is-invalid {
    border-color: #dc3545 !important;
}

/* Animation pour les erreurs */
@keyframes shake {
    0%, 100% { transform: translateX(0); }
    20%, 60% { transform: translateX(-5px); }
    40%, 80% { transform: translateX(5px); }
}

.shake {
    animation: shake 0.5s;
}

/* Badword alert */
.badword-alert {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 2000;
    max-width: 300px;
}

.fade-out {
    opacity: 0;
    transition: opacity 0.5s ease-out;
}

/* Style pour la section auteur */
.author-info {
    background-color: #f8f9fa;
    border-radius: 8px 8px 0 0;
}

.initials-avatar {
    font-weight: bold;
    font-size: 1.1rem;
}

/* Style pour la date */
.text-muted {
    color: #6c757d;
    font-size: 0.85rem;
}

/* Animation des coeurs */
.heart-animation {
    position: fixed;
    pointer-events: none;
    animation: heart-fly 3s ease-in-out forwards;
    font-size: 20px;
    z-index: 1000;
}

@keyframes heart-fly {
    0% {
        transform: translate(0, 0) scale(0.5);
        opacity: 1;
    }
    50% {
        transform: translate(0, -100px) scale(1);
        opacity: 0.8;
    }
    100% {
        transform: translate(var(--random-x), var(--random-y)) scale(0.2);
        opacity: 0;
    }
}

/* Animation de confetti like coeur */
.confetti {
    position: fixed;
    width: 10px;
    height: 10px;
    background-color: #f00;
    opacity: 0;
    animation: confetti-fall 3s ease-in forwards;
    z-index: 1000;
}

@keyframes confetti-fall {
    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
    }
    100% {
        transform: translateY(100vh) rotate(360deg);
        opacity: 0;
    }
}

/*dislike-animation*/
/* Animation des dislikes */
.dislike-animation {
    position: fixed;
    pointer-events: none;
    animation: dislike-fly 3s ease-in-out forwards;
    font-size: 20px;
    z-index: 1000;
}

@keyframes dislike-fly {
    0% {
        transform: translate(0, 0) scale(0.5);
        opacity: 1;
    }
    50% {
        transform: translate(0, 50px) scale(1);
        opacity: 0.8;
    }
    100% {
        transform: translate(var(--random-x), var(--random-y)) scale(0.2);
        opacity: 0;
    }
}


.active {
    background-color: #ADC29B !important;
    color: #844006 !important;
    border-color: #ADC29B !important;
}



/* ================ Auto-complétion ================ */
.suggestion-box {
    position: absolute;
    bottom: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 1px solid #ADC29B;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    z-index: 1000;
    max-height: 200px;
    overflow-y: auto;
    display: none;
}

.suggestion-item {
    padding: 8px 12px;
    cursor: pointer;
    transition: all 0.2s;
    border-bottom: 1px solid #f0f0f0;
}

.suggestion-item:hover {
    background-color: #f8f9fa;
    color: #844062;
}

.suggestion-loading {
    padding: 8px 12px;
    color: #6c757d;
    font-style: italic;
}





/* ================ Styles pour la section de contrôle en haut ================ */
.header-controls {
    padding: 15px 0;
}

.header-controls .d-flex {
    align-items: center;
    justify-content: space-between;
}

.search-container {
    position: relative;
    flex-grow: 1;
    max-width: 500px;
}

.search-container .input-group {
    width: 100%;
}

.sort-container {
    display: flex;
    align-items: center;
}

.sort-container form {
    margin: 0;
}

.sort-container .form-select {
    border-color: #ADC29B;
    color: #844062;
    min-width: 150px;
}

.sort-container .form-select:focus {
    border-color: #844062;
    box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
}

.sort-container label {
    color: #844062;
    font-weight: 500;
}

/* Responsive */
@media (max-width: 768px) {
    .header-controls .d-flex {
        flex-direction: column;
        align-items: stretch;
        gap: 15px;
    }

    .search-container {
        max-width: 100%;
    }

    .sort-container {
        width: 100%;
    }

    .sort-container .form-select {
        width: 100%;
    }

    .d-flex.gap-2 {
        justify-content: center;
        flex-wrap: wrap;
    }
}

@media (max-width: 576px) {
    .header-controls .d-flex {
        gap: 10px;
    }

    .sort-container label {
        font-size: 0.9rem;
    }

    .sort-container .form-select {
        font-size: 0.9rem;
    }
}

/* ================ Styles pour les boutons History et Create Forum ================ */
.btn-primary#history-toggle,
.btn-create-forum {
    min-width: 180px; /* Largeur identique pour les deux boutons */
    height: 50px; /* Hauteur légèrement augmentée */
    padding: 15px 20px; /* Padding plus généreux pour une apparence plus grande */
    font-size: 1rem; /* Taille de police légèrement augmentée */
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    transition: all 0.3s ease;
}

/* Style spécifique pour le bouton History */
.btn-primary#history-toggle {
    background-color: #844062;
    border: none;
    color: white;
    box-shadow: 0 2px 8px rgba(132, 64, 98, 0.3);
}

.btn-primary#history-toggle:hover {
    background-color: #6d3354;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(132, 64, 98, 0.4);
}



.btn-create-forum:hover {
    background-color: #6d3354;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(132, 64, 98, 0.4);
}

.btn-create-forum i,
.btn-primary#history-toggle i {
    font-size: 1.2rem; /* Icônes légèrement plus grandes */
    margin-right: 8px;
    transition: transform 0.3s ease;
}

.btn-create-forum:hover i,
.btn-primary#history-toggle:hover i {
    transform: scale(1.1);
}

/* Animation au clic */
.btn-create-forum:focus,
.btn-primary#history-toggle:focus {
    animation: pulse 0.5s ease;
    outline: none;
}

/* Responsive */
@media (max-width: 768px) {
    .btn-primary#history-toggle,
    .btn-create-forum {
        min-width: 150px; /* Largeur réduite pour les écrans moyens */
        height: 46px;
        padding: 10px 15px;
        font-size: 0.95rem;
    }

    .btn-create-forum i,
    .btn-primary#history-toggle i {
        font-size: 1.1rem;
        margin-right: 6px;
    }
}

@media (max-width: 576px) {
    .btn-primary#history-toggle,
    .btn-create-forum {
        min-width: 100%; /* Prend toute la largeur sur petits écrans */
        font-size: 0.9rem;
    }
}


.search-container {
    position: relative;
    flex-grow: 1;
    max-width: 500px; /* Nouvelle largeur */
}

.search-container .form-control {
    font-size: 1.1rem; /* Police plus grande */
    padding: 12px; /* Padding plus confortable */
}

.search-container .input-group {
    height: 50px; /* Hauteur augmentée */
}

@media (max-width: 768px) {
    .header-controls .d-flex {
        flex-direction: column;
        align-items: stretch;
        gap: 15px;
    }

    .search-container {
        max-width: 100%; /* Pleine largeur sur petits écrans */
    }
}


</style>
</head>

<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <div class=\"section-overlay\" style=\"background: url('images/test7.jpg') center/cover no-repeat;\"></div>
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
        // line 1098
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1098, $this->source); })()), "flashes", ["error"], "method", false, false, false, 1098));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 1099
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">
            <i class=\"fas fa-exclamation-triangle me-2\"></i>
            ";
            // line 1101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1105
        yield "</div>
<div class=\"container mt-4\">
    <div class=\"row align-items-center mb-4 g-3 header-controls\">
    <div class=\"col-12 d-flex align-items-center flex-wrap\">
        <!-- Barre de recherche -->
        <div class=\"search-container\" style=\"max-width: 400px;\">
            <div class=\"input-group\">
                <span class=\"input-group-text\">
                    <i class=\"fas fa-search\"></i>
                </span>
                <input 
                    type=\"text\" 
                    id=\"dynamicSearchInput\"
                    class=\"form-control\" 
                    placeholder=\"Search forums...\" 
                    aria-label=\"Recherche dynamique\"
                    autocomplete=\"off\"
                    value=\"";
        // line 1122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1122, $this->source); })()), "request", [], "any", false, false, false, 1122), "query", [], "any", false, false, false, 1122), "get", ["search"], "method", false, false, false, 1122), "html", null, true);
        yield "\">
            </div>
            <div class=\"search-loader d-none position-absolute end-0 top-50 translate-middle-y me-3\">
                <i class=\"fas fa-spinner fa-spin text-purple\"></i>
            </div>
        </div>

        <!-- Sort by -->
        <div class=\"sort-container\">
            <form method=\"GET\" action=\"";
        // line 1131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
        yield "\" class=\"d-flex align-items-center gap-2\">
                ";
        // line 1132
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1132, $this->source); })()), "request", [], "any", false, false, false, 1132), "query", [], "any", false, false, false, 1132), "get", ["category"], "method", false, false, false, 1132)) {
            // line 1133
            yield "                    <input type=\"hidden\" name=\"category\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1133, $this->source); })()), "request", [], "any", false, false, false, 1133), "query", [], "any", false, false, false, 1133), "get", ["category"], "method", false, false, false, 1133), "html", null, true);
            yield "\">
                ";
        }
        // line 1135
        yield "                <label for=\"sort\" class=\"me-2 text-nowrap\">
                    <i class=\"fas fa-sort-amount-down me-1\"></i>Sort by:
                </label>
                <select name=\"sort\" id=\"sort\" class=\"form-select\" onchange=\"this.form.submit()\" style=\"height: 46px;\">
                    <option value=\"newest\" ";
        // line 1139
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1139, $this->source); })()), "request", [], "any", false, false, false, 1139), "query", [], "any", false, false, false, 1139), "get", ["sort"], "method", false, false, false, 1139) == "newest")) ? ("selected") : (""));
        yield ">
                        <i class=\"fas fa-clock me-1\"></i>Newest
                    </option>
                    <option value=\"oldest\" ";
        // line 1142
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1142, $this->source); })()), "request", [], "any", false, false, false, 1142), "query", [], "any", false, false, false, 1142), "get", ["sort"], "method", false, false, false, 1142) == "oldest")) ? ("selected") : (""));
        yield ">
                        <i class=\"fas fa-history me-1\"></i>Oldest
                    </option>
                    <option value=\"popular\" ";
        // line 1145
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1145, $this->source); })()), "request", [], "any", false, false, false, 1145), "query", [], "any", false, false, false, 1145), "get", ["sort"], "method", false, false, false, 1145) == "popular")) ? ("selected") : (""));
        yield ">
                        <i class=\"fas fa-fire me-1\"></i>Popular
                    </option>
                </select>
            </form>
        </div>

        <!-- Boutons Create Forum et History -->
        <div class=\"buttons-container d-flex align-items-center\">
            ";
        // line 1154
        if ( !(isset($context["is_ajax_request"]) || array_key_exists("is_ajax_request", $context) ? $context["is_ajax_request"] : (function () { throw new RuntimeError('Variable "is_ajax_request" does not exist.', 1154, $this->source); })())) {
            // line 1155
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums_new");
            yield "\" class=\"btn btn-create-forum\">
                <i class=\"fas fa-plus-circle\"></i> Create Forum
            </a>
            ";
        }
        // line 1159
        yield "            <button id=\"history-toggle\" class=\"btn btn-primary\" style=\"background-color: #844062; border: none; height: 49px;\">
                <i class=\"fas fa-history me-1\"></i> History
            </button>
        </div>
    </div>
</div>
    <!-- Panneau d'historique -->
    <div id=\"history-panel\" class=\"d-none position-fixed bg-white p-3 shadow rounded\" 
         style=\"right:20px; top:120px; width:350px; max-height:500px; overflow-y:auto; z-index:1000;\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-history me-2\"></i>Historique des actions
            </h5>
            <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"document.getElementById('history-panel').classList.add('d-none')\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div id=\"history-content\">
            ";
        // line 1177
        $context["persistent_history"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1177, $this->source); })()), "session", [], "any", false, false, false, 1177), "get", ["persistent_history", []], "method", false, false, false, 1177));
        // line 1178
        yield "            ";
        $context["history_flashes"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1178, $this->source); })()), "flashes", ["history"], "method", false, false, false, 1178));
        // line 1179
        yield "            ";
        $context["all_history"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::merge((isset($context["persistent_history"]) || array_key_exists("persistent_history", $context) ? $context["persistent_history"] : (function () { throw new RuntimeError('Variable "persistent_history" does not exist.', 1179, $this->source); })()), (isset($context["history_flashes"]) || array_key_exists("history_flashes", $context) ? $context["history_flashes"] : (function () { throw new RuntimeError('Variable "history_flashes" does not exist.', 1179, $this->source); })())), 0, 10);
        // line 1180
        yield "            ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["all_history"]) || array_key_exists("all_history", $context) ? $context["all_history"] : (function () { throw new RuntimeError('Variable "all_history" does not exist.', 1180, $this->source); })()))) {
            // line 1181
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["all_history"]) || array_key_exists("all_history", $context) ? $context["all_history"] : (function () { throw new RuntimeError('Variable "all_history" does not exist.', 1181, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1182
                yield "                    <div class=\"mb-3 p-3 border-bottom history-item\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"badge bg-";
                // line 1184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", true, true, false, 1184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 1184), "primary")) : ("primary")), "html", null, true);
                yield " text-white\">
                                <i class=\"fas fa-";
                // line 1185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true, false, 1185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1185), "info-circle")) : ("info-circle")), "html", null, true);
                yield " me-1\"></i>
                                ";
                // line 1186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 1186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1186), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "action", [], "any", false, false, false, 1186)))) : (Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "action", [], "any", false, false, false, 1186)))), "html", null, true);
                yield "
                            </span>
                            <small class=\"text-muted\">";
                // line 1188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "time", [], "any", false, false, false, 1188), "html", null, true);
                yield "</small>
                        </div>
                        <div class=\"fw-bold\">";
                // line 1190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 1190), "html", null, true);
                yield "</div>
                        <div class=\"d-flex justify-content-between align-items-center mt-1\">
                            <small class=\"text-muted\">Par ";
                // line 1192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 1192), "html", null, true);
                yield "</small>
                            <small class=\"text-muted\">#";
                // line 1193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 1193), "html", null, true);
                yield "</small>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1197
            yield "            ";
        } else {
            // line 1198
            yield "                <div class=\"text-muted text-center py-3\">
                    <i class=\"fas fa-info-circle me-1\"></i> Aucune action récente
                </div>
            ";
        }
        // line 1202
        yield "        </div>
    </div>
</div>

<div class=\"container mt-4\">
    <div id=\"forums-container\">
        ";
        // line 1208
        if ( !((array_key_exists("is_ajax_request", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_ajax_request"]) || array_key_exists("is_ajax_request", $context) ? $context["is_ajax_request"] : (function () { throw new RuntimeError('Variable "is_ajax_request" does not exist.', 1208, $this->source); })()), false)) : (false))) {
            // line 1209
            yield "            <!-- Filtres de catégorie améliorés -->
            <div class=\"category-buttons mb-4\">
                <div class=\"row\">
                    <div class=\"col-12 d-flex justify-content-center\">
                        <div class=\"btn-group\" role=\"group\">
                            <a href=\"";
            // line 1214
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
            yield "\" 
                               class=\"btn ";
            // line 1215
            yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1215, $this->source); })()), "request", [], "any", false, false, false, 1215), "query", [], "any", false, false, false, 1215), "get", ["category"], "method", false, false, false, 1215)) ? ("active") : (""));
            yield "\">
                               <i class=\"fas fa-th-large me-2\"></i>All
                            </a>
                            <a href=\"";
            // line 1218
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Mariage"]);
            yield "\" 
                               class=\"btn ";
            // line 1219
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1219, $this->source); })()), "request", [], "any", false, false, false, 1219), "query", [], "any", false, false, false, 1219), "get", ["category"], "method", false, false, false, 1219) == "Mariage")) ? ("active") : (""));
            yield "\">
                               <i class=\"fas fa-ring me-2\"></i>Mariage
                            </a>
                            <a href=\"";
            // line 1222
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Anniversaire"]);
            yield "\" 
                               class=\"btn ";
            // line 1223
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1223, $this->source); })()), "request", [], "any", false, false, false, 1223), "query", [], "any", false, false, false, 1223), "get", ["category"], "method", false, false, false, 1223) == "Anniversaire")) ? ("active") : (""));
            yield "\">
                               <i class=\"fas fa-birthday-cake me-2\"></i>Anniversaire
                            </a>
                            <a href=\"";
            // line 1226
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Graduation"]);
            yield "\" 
                               class=\"btn ";
            // line 1227
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1227, $this->source); })()), "request", [], "any", false, false, false, 1227), "query", [], "any", false, false, false, 1227), "get", ["category"], "method", false, false, false, 1227) == "Graduation")) ? ("active") : (""));
            yield "\">
                               <i class=\"fas fa-graduation-cap me-2\"></i>Graduation
                            </a>
                            <a href=\"";
            // line 1230
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums", ["category" => "Baby_Shower"]);
            yield "\" 
                               class=\"btn ";
            // line 1231
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1231, $this->source); })()), "request", [], "any", false, false, false, 1231), "query", [], "any", false, false, false, 1231), "get", ["category"], "method", false, false, false, 1231) == "Baby_Shower")) ? ("active") : (""));
            yield "\">
                               <i class=\"fas fa-baby me-2\"></i>Baby Shower
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 1239
        yield "        <!-- Reste du contenu des forums reste inchangé -->
        <!-- ... (le reste du code pour la liste des forums reste identique) ... -->
    </div>
</div>

        ";
        // line 1244
        if ((isset($context["single_forum_mode"]) || array_key_exists("single_forum_mode", $context) ? $context["single_forum_mode"] : (function () { throw new RuntimeError('Variable "single_forum_mode" does not exist.', 1244, $this->source); })())) {
            // line 1245
            yield "            <div class=\"col-12 mb-3\">
                <a href=\"";
            // line 1246
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums");
            yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Back
                </a>
            </div>
        ";
        }
        // line 1251
        yield "
        <!-- Liste des forums -->
        <div class=\"row justify-content-center\" id=\"forumsList\">
            ";
        // line 1254
        if ((array_key_exists("forums", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 1254, $this->source); })())))) {
            // line 1255
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 1255, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 1256
                yield "                    <div class=\"col-lg-8 col-md-10 mb-4\">
                        <div class=\"card shadow-lg forum-card\">
                            <!-- En-tête du forum -->
                            <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                                <h3 class=\"h5 mb-0\">";
                // line 1260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 1260)), "html", null, true);
                yield "</h3>
                                <div class=\"btn-group\">
                                    ";
                // line 1262
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 1262, $this->source); })()), "get", ["user_id"], "method", false, false, false, 1262) && CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1262)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 1262, $this->source); })()), "get", ["user_id"], "method", false, false, false, 1262) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1262), "id", [], "any", false, false, false, 1262)))) {
                    // line 1263
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1263)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-light me-2\">
                                            <i class=\"fas fa-edit me-1\"></i> Edit
                                        </a>
                                        <form method=\"POST\" action=\"";
                    // line 1266
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1266)]), "html", null, true);
                    yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 1267
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-forum"), "html", null, true);
                    yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-outline-light\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
                                                <i class=\"fas fa-trash me-1\"></i> Delete
                                            </button>
                                        </form>
                                    ";
                }
                // line 1273
                yield "                                </div>
                            </div>

                            <!-- Informations de l'auteur -->
                            <div class=\"author-info d-flex align-items-center p-3\" style=\"border-bottom: 1px solid #eee;\">
                                ";
                // line 1278
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", true, true, false, 1278) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1278)))) {
                    // line 1279
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, true, false, 1279), "img", [], "any", true, true, false, 1279) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1279), "img", [], "any", false, false, false, 1279)))) {
                        // line 1280
                        yield "                                        <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1280), "img", [], "any", false, false, false, 1280)), "html", null, true);
                        yield "\"
                                             alt=\"Photo de profil\"
                                             class=\"rounded-circle me-3\"
                                             style=\"width: 50px; height: 50px; object-fit: cover; border: 2px solid #ADC29B;\">
                                    ";
                    } else {
                        // line 1285
                        yield "                                        <div class=\"rounded-circle me-3 d-flex align-items-center justify-content-center initials-avatar\"
                                             style=\"width: 50px; height: 50px; background-color: #844062; color: white;\">
                                            ";
                        // line 1287
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, true, false, 1287), "firstName", [], "any", true, true, false, 1287) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, true, false, 1287), "lastName", [], "any", true, true, false, 1287))) {
                            // line 1288
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1288), "firstName", [], "any", false, false, false, 1288))), "html", null, true);
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1288), "lastName", [], "any", false, false, false, 1288))), "html", null, true);
                            yield "
                                            ";
                        } else {
                            // line 1290
                            yield "                                                <i class=\"fas fa-user\"></i>
                                            ";
                        }
                        // line 1292
                        yield "                                        </div>
                                    ";
                    }
                    // line 1294
                    yield "                                    
                                    <div>
                                        <h6 class=\"mb-0\" style=\"color: #844062; font-weight: 600;\">
                                            ";
                    // line 1297
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, true, false, 1297), "firstName", [], "any", true, true, false, 1297) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, true, false, 1297), "lastName", [], "any", true, true, false, 1297))) {
                        // line 1298
                        yield "                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1298), "firstName", [], "any", false, false, false, 1298), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "user", [], "any", false, false, false, 1298), "lastName", [], "any", false, false, false, 1298), "html", null, true);
                        yield "
                                            ";
                    } else {
                        // line 1300
                        yield "                                                Utilisateur
                                            ";
                    }
                    // line 1302
                    yield "                                        </h6>
                                        <small class=\"text-muted\">
                                            <i class=\"far fa-clock me-1\"></i> ";
                    // line 1304
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "date", [], "any", false, false, false, 1304), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                        </small>
                                    </div>
                                ";
                } else {
                    // line 1308
                    yield "                                    <div class=\"rounded-circle me-3 d-flex align-items-center justify-content-center\"
                                         style=\"width: 50px; height: 50px; background-color: #6c757d; color: white;\">
                                        <i class=\"fas fa-user-secret\"></i>
                                    </div>
                                    <div>
                                        <h6 class=\"mb-0\" style=\"color: #6c757d; font-weight: 600;\">
                                            Anonymous
                                        </h6>
                                        <small class=\"text-muted\">
                                            <i class=\"far fa-clock me-1\"></i> ";
                    // line 1317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "date", [], "any", false, false, false, 1317), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                        </small>
                                    </div>
                                ";
                }
                // line 1321
                yield "                            </div>

                            <!-- Image du forum -->
                            <div class=\"card-img-container text-center\">
                                ";
                // line 1325
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 1325) != "default.jpg")) {
                    // line 1326
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "img", [], "any", false, false, false, 1326)]), "html", null, true);
                    yield "\" 
                                         alt=\"Image du forum ";
                    // line 1327
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "categorie", [], "any", false, false, false, 1327), "html", null, true);
                    yield "\"
                                         class=\"img-fluid mx-auto d-block\">
                                ";
                } else {
                    // line 1330
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default_forum.jpg"), "html", null, true);
                    yield "\" 
                                         alt=\"Image par défaut\"
                                         class=\"img-fluid mx-auto d-block\">
                                ";
                }
                // line 1334
                yield "                            </div>

                            <!-- Corps du forum -->
                            <div class=\"card-body text-center\">
                                <!-- Description avec traduction -->
                                <div class=\"forum-translation\">
                                    <p class=\"card-text forum-description\" 
                                       id=\"forum-description-";
                // line 1341
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1341), "html", null, true);
                yield "\"
                                       data-original-text=\"";
                // line 1342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 1342), "html_attr");
                yield "\">
                                        ";
                // line 1343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 1343), "html", null, true);
                yield "
                                    </p>
                                    
                                    <div class=\"translation-tools\">
                                        <select class=\"language-picker\" data-forum-id=\"";
                // line 1347
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1347), "html", null, true);
                yield "\">
                                            <option value=\"\">Choose a language</option>
                                            <option value=\"fr\">Français</option>
                                            <option value=\"en\">Anglais</option>
                                            <option value=\"ar\">Arabe</option>
                                        </select>
                                        
                                        <button class=\"translate-btn\" data-forum-id=\"";
                // line 1354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1354), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-language\"></i> translate
                                        </button>
                                    </div>
                                    
                                    <div class=\"translation-status\" id=\"translation-status-";
                // line 1359
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1359), "html", null, true);
                yield "\"></div>
                                </div>

                                <!-- Actions (like, dislike, comment, share) -->
                                <div class=\"card-actions\">
                                    <button class=\"btn btn-outline-primary btn-like\" data-forum-id=\"";
                // line 1364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1364), "html", null, true);
                yield "\">
                                        <i class=\"far fa-thumbs-up\"></i> Like 
                                        <span class=\"like-count\">";
                // line 1366
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "reactions", [], "any", false, false, false, 1366)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "reactions", [], "any", false, false, false, 1366), 0, [], "array", false, false, false, 1366), "nblike", [], "any", false, false, false, 1366), "html", null, true)) : (0));
                yield "</span>
                                    </button>
                                    <button class=\"btn btn-outline-danger btn-dislike\" data-forum-id=\"";
                // line 1368
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1368), "html", null, true);
                yield "\">
                                        <i class=\"far fa-thumbs-down\"></i> Dislike 
                                        <span class=\"dislike-count\">";
                // line 1370
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "reactions", [], "any", false, false, false, 1370)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "reactions", [], "any", false, false, false, 1370), 0, [], "array", false, false, false, 1370), "nbdislike", [], "any", false, false, false, 1370), "html", null, true)) : (0));
                yield "</span>
                                    </button>
                                    <button class=\"btn btn-outline-secondary btn-comments\" data-forum-id=\"";
                // line 1372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1372), "html", null, true);
                yield "\">
                                        <i class=\"far fa-comment\"></i> Comments 
                                        <span class=\"comment-count\">";
                // line 1374
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 1374)), "html", null, true);
                yield "</span>
                                    </button>
                                    <button class=\"btn-share\" onclick=\"shareForum('";
                // line 1376
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "getId", [], "method", false, false, false, 1376), "html", null, true);
                yield "')\">
                                        <i class=\"fas fa-share\"></i> Share
                                    </button>
                                </div>

                                <!-- Section des commentaires -->
                                <div id=\"comments-";
                // line 1382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1382), "html", null, true);
                yield "\" class=\"comments-section\">
                                    <div class=\"existing-comments\">
                                        ";
                // line 1384
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "comments", [], "any", false, false, false, 1384));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 1385
                    yield "                                            <div class=\"comment\" id=\"comment-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1385), "html", null, true);
                    yield "\">
                                                <div class=\"comment-author d-flex align-items-center mb-2\">
                                                    ";
                    // line 1387
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 1387), "img", [], "any", false, false, false, 1387)) {
                        // line 1388
                        yield "                                                        <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 1388), "img", [], "any", false, false, false, 1388)), "html", null, true);
                        yield "\"
                                                             alt=\"";
                        // line 1389
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 1389), "firstName", [], "any", false, false, false, 1389), "html", null, true);
                        yield "\"
                                                             class=\"rounded-circle me-2\"
                                                             style=\"width: 36px; height: 36px; object-fit: cover; border: 1px solid #ADC29B;\">
                                                    ";
                    } else {
                        // line 1393
                        yield "                                                        <div class=\"rounded-circle me-2 d-flex align-items-center justify-content-center\"
                                                             style=\"width: 36px; height: 36px; background-color: #844062; color: white; font-size: 0.8rem;\">
                                                            ";
                        // line 1395
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 1395), "firstName", [], "any", false, false, false, 1395))), "html", null, true);
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 1395), "lastName", [], "any", false, false, false, 1395))), "html", null, true);
                        yield "
                                                        </div>
                                                    ";
                    }
                    // line 1398
                    yield "                                                    <div>
                                                        <strong style=\"color: #844062;\">";
                    // line 1399
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 1399), "firstName", [], "any", false, false, false, 1399), "html", null, true);
                    yield "</strong>
                                                        <small class=\"text-muted ms-2\">";
                    // line 1400
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 1400), "d/m/Y H:i"), "html", null, true);
                    yield "</small>
                                                    </div>
                                                </div>

                                                <div class=\"comment-content\" id=\"comment-content-";
                    // line 1404
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1404), "html", null, true);
                    yield "\">
                                                    ";
                    // line 1405
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sujet", [], "any", false, false, false, 1405), "html", null, true);
                    yield "
                                                </div>

                                                <div class=\"comment-actions\">
                                                    ";
                    // line 1409
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 1409, $this->source); })()), "get", ["user_id"], "method", false, false, false, 1409) && CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 1409)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 1409, $this->source); })()), "get", ["user_id"], "method", false, false, false, 1409) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 1409), "id", [], "any", false, false, false, 1409)))) {
                        // line 1410
                        yield "                                                        <button class=\"btn-edit-comment\" onclick=\"
                                                            document.getElementById('comment-content-";
                        // line 1411
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1411), "html", null, true);
                        yield "').style.display = 'none';
                                                            document.querySelector('#comment-";
                        // line 1412
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1412), "html", null, true);
                        yield " .btn-edit-comment').style.display = 'none';
                                                            document.querySelector('#comment-";
                        // line 1413
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1413), "html", null, true);
                        yield " .btn-delete-comment').style.display = 'none';
                                                            document.querySelector('#comment-";
                        // line 1414
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1414), "html", null, true);
                        yield " .btn-sentiment').style.display = 'none';
                                                            document.getElementById('edit-form-";
                        // line 1415
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1415), "html", null, true);
                        yield "').style.display = 'block';
                                                            document.querySelector('#edit-form-";
                        // line 1416
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1416), "html", null, true);
                        yield " textarea').focus();
                                                        \">
                                                            <i class=\"fas fa-edit\"></i> Edit
                                                        </button>
                                                        <form method=\"POST\" action=\"";
                        // line 1420
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1420)]), "html", null, true);
                        yield "\" class=\"d-inline\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 1421
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1421))), "html", null, true);
                        yield "\">
                                                            <button type=\"submit\" class=\"btn-delete-comment\" style=\"border-color: #ADC29B; color: #844062;\" onclick=\"return confirm('Are you sure you want to delete this comment?')\">
                                                                <i class=\"fas fa-trash\"></i> Delete
                                                            </button>
                                                        </form>
                                                    ";
                    }
                    // line 1427
                    yield "                                                    
                                                    <!-- Bouton d'analyse de sentiment pour le commentaire -->
                                                    <button type=\"button\" class=\"btn-sentiment\" 
                                                            onclick=\"analyzeCommentSentiment('";
                    // line 1430
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1430), "html", null, true);
                    yield "')\"
                                                            style=\"background: #ADC29B; color: white; padding: 4px 8px; border-radius: 4px; border: none;\">
                                                        <i class=\"fas fa-feather-alt\"></i> Analyze
                                                    </button>
                                                    
                                                    <!-- Résultat de l'analyse -->
                                                    <span id=\"sentiment-result-";
                    // line 1436
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1436), "html", null, true);
                    yield "\" class=\"sentiment-feedback ms-2\"></span>

                                                    <form id=\"edit-form-";
                    // line 1438
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1438), "html", null, true);
                    yield "\" class=\"edit-comment-form\" method=\"POST\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1438)]), "html", null, true);
                    yield "\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 1439
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "IdCmn", [], "any", false, false, false, 1439))), "html", null, true);
                    yield "\">
                                                        <textarea name=\"content\" class=\"form-control\">";
                    // line 1440
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sujet", [], "any", false, false, false, 1440), "html", null, true);
                    yield "</textarea>
                                                        <button type=\"submit\" class=\"btn btn-sm mt-2\" style=\"border-color: #ADC29B; color: #844062;\">
                                                            <i class=\"fas fa-save\"></i> Save
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        ";
                    $context['_iterated'] = true;
                }
                // line 1447
                if (!$context['_iterated']) {
                    // line 1448
                    yield "                                            <div class=\"no-comments\">
                                                <i class=\"far fa-comment-dots\"></i> NO COMMENTS
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1452
                yield "                                    </div>
                                    
                                    <div class=\"comment-form\">
                                        <form action=\"";
                // line 1455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_add", ["forumId" => CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1455)]), "html", null, true);
                yield "\" 
                                              method=\"post\" 
                                              class=\"d-flex align-items-end gap-2 w-100\" 
                                              id=\"comment-form-";
                // line 1458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1458), "html", null, true);
                yield "\"
                                              onsubmit=\"return validateComment(this)\">
                                            <div class=\"comment-input-container position-relative flex-grow-1\">
                                                <textarea name=\"comment_content\" 
                                                          id=\"comment-textarea-";
                // line 1462
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1462), "html", null, true);
                yield "\"
                                                          class=\"form-control ";
                // line 1463
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1463, $this->source); })()), "session", [], "any", false, false, false, 1463), "get", [("comment_errors_" . CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1463))], "method", false, false, false, 1463)) ? ("is-invalid shake") : (""));
                yield "\"
                                                          rows=\"1\" 
                                                          placeholder=\"Write a comment...\"
                                                          style=\"width: 100%; min-height: 40px; padding-right: 40px;\">";
                // line 1466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1466, $this->source); })()), "session", [], "any", false, false, false, 1466), "get", [("comment_content_" . CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1466))], "method", false, false, false, 1466), "html", null, true);
                yield "</textarea>
                                                
                                                
                                                
                                                <!-- Boîte de suggestions -->
                                                <div class=\"suggestion-box\" id=\"suggestion-box-";
                // line 1471
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1471), "html", null, true);
                yield "\"></div>
                                                
                                                <!-- Affichage du résultat du sentiment -->
                                                <div id=\"sentiment-result-";
                // line 1474
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1474), "html", null, true);
                yield "\" class=\"mt-1\"></div>
                                                
                                                ";
                // line 1476
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1476, $this->source); })()), "session", [], "any", false, false, false, 1476), "get", [("comment_errors_" . CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1476))], "method", false, false, false, 1476)) {
                    // line 1477
                    yield "                                                    <div class=\"invalid-feedback d-block mt-1\">
                                                        ";
                    // line 1478
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1478, $this->source); })()), "session", [], "any", false, false, false, 1478), "get", [("comment_errors_" . CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1478))], "method", false, false, false, 1478));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 1479
                        yield "                                                            <div>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                        yield "</div>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1481
                    yield "                                                    </div>
                                                ";
                }
                // line 1483
                yield "                                        
                                                <div class=\"emoji-container\">
                                                    <button type=\"button\" class=\"emoji-toggle-btn\" id=\"emoji-toggle-";
                // line 1485
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1485), "html", null, true);
                yield "\">
                                                        <i class=\"far fa-smile\"></i>
                                                    </button>
                                                    <div class=\"emoji-window\" id=\"emoji-window-";
                // line 1488
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 1488), "html", null, true);
                yield "\">
                                                        <div class=\"emoji-list\">
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
            // line 1506
            yield "            ";
        } else {
            // line 1507
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-warning text-center py-4\">
                        <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle me-2\"></i>
                            ";
            // line 1510
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1510, $this->source); })()), "request", [], "any", false, false, false, 1510), "query", [], "any", false, false, false, 1510), "get", ["search"], "method", false, false, false, 1510)) {
                // line 1511
                yield "                                No results for \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1511, $this->source); })()), "request", [], "any", false, false, false, 1511), "query", [], "any", false, false, false, 1511), "get", ["search"], "method", false, false, false, 1511), "html", null, true);
                yield "\"
                            ";
            } else {
                // line 1513
                yield "                                No forum found
                            ";
            }
            // line 1515
            yield "                        </h4>
                        <p class=\"mb-0\">Be the first to create a forum!</p>
                        <a href=\"";
            // line 1517
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forums_new");
            yield "\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-plus me-2\"></i>Create forum
                        </a>
                    </div>
                </div>
            ";
        }
        // line 1523
        yield "        </div>
    </div>
</div>

<div style=\"height: 100px;\"></div>

<script>
//////////////////////////////////////////////////////badwords
// Fonction de validation côté client
async function validateComment(form) {
    const textarea = form.querySelector('textarea');
    const content = textarea.value.trim();
    const forumId = form.id.split('-')[2];
    const feedback = document.getElementById(`badword-feedback-\${forumId}`);
    
    // Validation basique
    if (content.length < 5) {
        feedback.textContent = 'Le commentaire doit contenir au moins 5 caractères';
        feedback.style.display = 'block';
        textarea.classList.add('is-invalid');
        return false;
    }
    
    // Vérification des mots interdits
    const hasBadWords = await checkBadWords(content);
    if (hasBadWords) {
        const useCensored = confirm('Votre commentaire contient des mots inappropriés. Voulez-vous utiliser une version corrigée?');
        if (useCensored) {
            const censored = await getCensoredText(content);
            textarea.value = censored;
        } else {
            return false;
        }
    }
    
    return true;
}

// Vérification en temps réel
async function checkBadWordsLive(textarea) {
    const content = textarea.value;
    const forumId = textarea.id.split('-')[2];
    const feedback = document.getElementById(`badword-feedback-\${forumId}`);
    
    if (content.length > 3) { // Seulement si assez de texte
        const hasBadWords = await checkBadWords(content);
        if (hasBadWords) {
            feedback.textContent = 'Mot(s) inapproprié(s) détecté(s)';
            feedback.style.display = 'block';
            textarea.classList.add('is-badword');
        } else {
            feedback.style.display = 'none';
            textarea.classList.remove('is-badword');
        }
    } else {
        feedback.style.display = 'none';
        textarea.classList.remove('is-badword');
    }
}

// Fonctions API
async function checkBadWords(text) {
    try {
        const response = await fetch(`https://www.purgomalum.com/service/containsprofanity?text=\${encodeURIComponent(text)}`);
        return await response.text() === 'true';
    } catch (error) {
        console.error('API Error:', error);
        return false;
    }
}

async function getCensoredText(text) {
    try {
        const response = await fetch(`https://www.purgomalum.com/service/json?text=\${encodeURIComponent(text)}`);
        const data = await response.json();
        return data.result || text;
    } catch (error) {
        console.error('API Error:', error);
        return text;
    }
}



///////////////////////////////////////////////////////traduction
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

   document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('dynamicSearchInput');
    const loader = document.querySelector('.search-loader');
    let searchTimeout;
    let lastController;

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.trim();
            
            if (searchTerm.length > 0) {
                loader.classList.remove('d-none');
                
                // Annuler la requête précédente
                if (lastController) {
                    lastController.abort();
                }
                
                clearTimeout(searchTimeout);
                
                searchTimeout = setTimeout(() => {
                    performSearch(searchTerm);
                }, 300);
            } else {
                loader.classList.add('d-none');
                resetSearchResults();
            }
        });
    }

    function resetSearchResults() {
        const url = new URL(window.location.href);
        url.searchParams.delete('search');
        
        const controller = new AbortController();
        lastController = controller;
        
        fetch(url.toString(), {
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            signal: controller.signal
        })
        .then(response => {
            if (!response.ok) throw new Error('Network error');
            return response.text();
        })
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newContent = doc.getElementById('forumsList');
            
            if (newContent) {
                document.getElementById('forumsList').innerHTML = newContent.innerHTML;
                initializeAfterAjax();
            }
        })
        .catch(error => {
            if (error.name !== 'AbortError') {
                console.error('Error:', error);
            }
        });
    }

    function performSearch(searchTerm) {
        const url = new URL(window.location.href);
        const params = new URLSearchParams();
        
        params.set('search', searchTerm);
        params.set('ajax', '1');
        
        // Garder les autres paramètres
        const currentParams = new URLSearchParams(window.location.search);
        ['category', 'sort'].forEach(param => {
            if (currentParams.has(param)) {
                params.set(param, currentParams.get(param));
            }
        });
        
        const controller = new AbortController();
        lastController = controller;
        
        fetch(`\${url.pathname}?\${params.toString()}`, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            signal: controller.signal
        })
        .then(response => {
            if (!response.ok) throw new Error('Search failed');
            return response.text();
        })
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newContent = doc.getElementById('forumsList');
            
            if (newContent) {
                document.getElementById('forumsList').innerHTML = newContent.innerHTML;
                initializeAfterAjax();
            }
        })
        .catch(error => {
            if (error.name !== 'AbortError') {
                console.error('Error:', error);
                document.getElementById('forumsList').innerHTML = `
                    <div class=\"col-12\">
                        <div class=\"alert alert-danger text-center py-4\">
                            <h4 class=\"alert-heading\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                Search error
                            </h4>
                            <p class=\"mb-0\">Please try again</p>
                        </div>
                    </div>`;
            }
        })
        .finally(() => {
            loader.classList.add('d-none');
        });
    }

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
        const forumId = this.dataset.forumId;
        const isLike = this.classList.contains('btn-like');
        
        try {
            const response = await fetch(`/reaction/\${isLike ? 'like' : 'dislike'}/\${forumId}`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            
            const data = await response.json();
            
            if (data.status === 'success') {
                // Mise à jour des compteurs
                document.querySelectorAll(`.btn-like[data-forum-id=\"\${forumId}\"] .like-count`)
                    .forEach(el => el.textContent = data.nblike);
                
                document.querySelectorAll(`.btn-dislike[data-forum-id=\"\${forumId}\"] .dislike-count`)
                    .forEach(el => el.textContent = data.nbdislike);
                
                // Mise à jour visuelle
                const likeBtn = document.querySelector(`.btn-like[data-forum-id=\"\${forumId}\"]`);
                const dislikeBtn = document.querySelector(`.btn-dislike[data-forum-id=\"\${forumId}\"]`);
                
                likeBtn.classList.toggle('active', data.current_action === 'like');
                dislikeBtn.classList.toggle('active', data.current_action === 'dislike');
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });
});




//share


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



document.addEventListener('DOMContentLoaded', function() {
    // Validation IMMÉDIATE au clic
    document.querySelectorAll('.comment-form form').forEach(form => {
        // Intercepter le clic sur le bouton
        const submitBtn = form.querySelector('button[type=\"submit\"]');
        
        submitBtn.addEventListener('click', function(e) {
            const textarea = form.querySelector('textarea');
            const content = textarea.value;
            
            // Supprimer les erreurs précédentes
            textarea.classList.remove('is-invalid', 'shake');
            const existingError = textarea.nextElementSibling;
            if (existingError && existingError.classList.contains('invalid-feedback')) {
                existingError.remove();
            }
            
            // Validation IMMÉDIATE
            if (content === '') {
                e.preventDefault();
                showError(textarea, 'Le sujet ne peut pas être vide');
                return false;
            }
            
            if (content.length < 5) {
                e.preventDefault();
                showError(textarea, 'Le sujet doit contenir au moins 5 caractères');
                return false;
            }
        });
    });
    
    function showError(element, message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'invalid-feedback d-block mt-1';
        errorDiv.innerHTML = `<div>\${message}</div>`;
        
        element.parentNode.insertBefore(errorDiv, element.nextSibling);
        element.classList.add('is-invalid', 'shake');
        
        setTimeout(() => element.classList.remove('shake'), 500);
        element.focus();
    }
    
    // Suppression des erreurs lors de la saisie
    document.querySelectorAll('.comment-form textarea').forEach(textarea => {
        textarea.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                this.classList.remove('is-invalid');
                const errorDiv = this.nextElementSibling;
                if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
                    errorDiv.remove();
                }
            }
        });
    });
});


// Debug des clics
document.addEventListener('DOMContentLoaded', function() {
    // Écouteur pour les boutons Edit
    document.querySelectorAll('[id^=\"edit-forum-\"]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            console.log('Edit clické', this.href);
        });
    });

    // Écouteur pour les formulaires Delete
    document.querySelectorAll('[id^=\"delete-form-\"]').forEach(form => {
        form.addEventListener('submit', function(e) {
            console.log('Delete soumis', this.action);
        });
    });
});




//like-coeur
document.querySelectorAll('.btn-like').forEach(btn => {
    btn.addEventListener('click', async function() {
        const forumId = this.dataset.forumId;
        const buttonRect = this.getBoundingClientRect();
        
        // Créer des coeurs animés
        createHearts(buttonRect.left + buttonRect.width/2, buttonRect.top);
        
        // Désactiver le bouton pendant la requête
        this.disabled = true;
        
        try {
            const response = await fetch(`/reaction/like/\${forumId}`, {
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
            this.disabled = false;
        }
    });
});

function createHearts(x, y) {
    const colors = ['#ff0000', '#ff69b4', '#ff1493', '#c71585'];
    const hearts = ['❤️', '💖', '💗', '💓', '💞', '💕'];
    
    for (let i = 0; i < 15; i++) {
        const heart = document.createElement('div');
        heart.className = 'heart-animation';
        heart.innerHTML = hearts[Math.floor(Math.random() * hearts.length)];
        heart.style.left = `\${x}px`;
        heart.style.top = `\${y}px`;
        heart.style.color = colors[Math.floor(Math.random() * colors.length)];
        
        // Position finale aléatoire
        const randomX = (Math.random() - 0.5) * 200;
        const randomY = -Math.random() * 200 - 100;
        heart.style.setProperty('--random-x', `\${randomX}px`);
        heart.style.setProperty('--random-y', `\${randomY}px`);
        
        document.body.appendChild(heart);
        
        // Supprimer après l'animation
        setTimeout(() => {
            heart.remove();
        }, 3000);
    }
    
    // Ajouter aussi des confettis
    createConfetti(x, y);
}

function createConfetti(x, y) {
    const colors = ['#ff0000', '#ff69b4', '#00ff00', '#ffff00', '#00ffff', '#ff00ff'];
    
    for (let i = 0; i < 30; i++) {
        const confetti = document.createElement('div');
        confetti.className = 'confetti';
        confetti.style.left = `\${x + (Math.random() - 0.5) * 100}px`;
        confetti.style.top = `\${y}px`;
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        confetti.style.width = `\${Math.random() * 8 + 4}px`;
        confetti.style.height = `\${Math.random() * 8 + 4}px`;
        confetti.style.animationDuration = `\${Math.random() * 2 + 2}s`;
        
        document.body.appendChild(confetti);
        
        setTimeout(() => {
            confetti.remove();
        }, 3000);
    }
}

async function sendLikeRequest(forumId, button) {
    button.disabled = true;
    
    try {
        const response = await fetch(`/reaction/like/\${forumId}`, {
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
            
            // Mise à jour visuelle
            const likeBtn = document.querySelector(`.btn-like[data-forum-id=\"\${forumId}\"]`);
            likeBtn.classList.toggle('active', data.current_action === 'like');
        }
    } catch (error) {
        console.error('Error:', error);
    } finally {
        button.disabled = false;
    }
}

//dislike-emoji

document.querySelectorAll('.btn-dislike').forEach(btn => {
    btn.addEventListener('click', async function() {
        const forumId = this.dataset.forumId;
        const buttonRect = this.getBoundingClientRect();
        
        // Créer des animations de dislike (pouces vers le bas)
        createDislikeAnimation(buttonRect.left + buttonRect.width/2, buttonRect.top);
        
        // Désactiver le bouton pendant la requête
        this.disabled = true;
        
        try {
            const response = await fetch(`/reaction/dislike/\${forumId}`, {
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
            this.disabled = false;
        }
    });
});

function createDislikeAnimation(x, y) {
    const thumbs = ['👎', '🤮', '😠', '💔']; // Emojis pour le dislike
    const colors = ['#ff0000', '#8b0000', '#800080', '#4b0082']; // Couleurs sombres
    
    for (let i = 0; i < 10; i++) {
        const thumb = document.createElement('div');
        thumb.className = 'dislike-animation';
        thumb.innerHTML = thumbs[Math.floor(Math.random() * thumbs.length)];
        thumb.style.left = `\${x}px`;
        thumb.style.top = `\${y}px`;
        thumb.style.color = colors[Math.floor(Math.random() * colors.length)];
        
        // Position finale aléatoire
        const randomX = (Math.random() - 0.5) * 200;
        const randomY = Math.random() * 200 + 50; // Descendent vers le bas
        thumb.style.setProperty('--random-x', `\${randomX}px`);
        thumb.style.setProperty('--random-y', `\${randomY}px`);
        
        document.body.appendChild(thumb);
        
        // Supprimer après l'animation
        setTimeout(() => {
            thumb.remove();
        }, 3000);
    }
}

//generate_mot

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.comment-input-container textarea').forEach(textarea => {
        const forumId = textarea.id.split('-')[2];
        const suggestionBox = document.getElementById(`suggestion-box-\${forumId}`);

        textarea.addEventListener('input', async (e) => {
            const text = e.target.value.trim();
            const lastWord = getLastWord(text);

            if (lastWord.length < 2) {
                hideSuggestions();
                return;
            }

            showLoading();

            try {
                const res = await fetch(`https://api.datamuse.com/words?sp=\${lastWord}*&max=5`);
                const words = await res.json();

                const suggestions = words.map(w => w.word).filter(w => w !== lastWord);

                if (suggestions.length > 0) {
                    showSuggestions(suggestions);
                } else {
                    hideSuggestions();
                }

            } catch (err) {
                console.error(\"Erreur avec Datamuse :\", err);
                showError(\"Erreur de réseau\");
            }
        });

        function getLastWord(text) {
            const words = text.split(/\\s+/);
            return words[words.length - 1] || '';
        }

        function showSuggestions(suggestions) {
            suggestionBox.innerHTML = '';
            suggestions.forEach(word => {
                const div = document.createElement('div');
                div.className = 'suggestion-item';
                div.textContent = word;
                div.style.cursor = 'pointer';
                div.style.padding = '5px';
                div.style.borderBottom = '1px solid #ddd';
                div.addEventListener('click', () => applySuggestion(word));
                suggestionBox.appendChild(div);
            });
            suggestionBox.style.display = 'block';
        }

        function applySuggestion(word) {
            const words = textarea.value.trim().split(/\\s+/);
            words[words.length - 1] = word;
            textarea.value = words.join(' ') + ' ';
            hideSuggestions();
            textarea.focus();
        }

        function showLoading() {
            suggestionBox.innerHTML = '<div style=\"padding:5px; color:gray;\">...</div>';
            suggestionBox.style.display = 'block';
        }

        function hideSuggestions() {
            suggestionBox.style.display = 'none';
        }

        function showError(message) {
            suggestionBox.innerHTML = `<div style=\"color:red; padding:5px;\">\${message}</div>`;
            suggestionBox.style.display = 'block';
        }
    });
});







/////////////////////////////history
document.addEventListener('turbo:before-stream-render', (event) => {
    const stream = event.detail.newStream;
    
    if (stream.action === 'append' && stream.target === 'history-content') {
        const template = stream.template;
        const data = template.dataset;
        
        // Création de l'entrée d'historique
        const entry = document.createElement('div');
        entry.className = 'mb-2 p-2 border-bottom';
        entry.innerHTML = `
            <div class=\"d-flex justify-content-between\">
                <span class=\"badge \${getBadgeClass(data.action)}\">
                    \${data.action.toUpperCase()}
                </span>
                <small class=\"text-muted\">\${data.time}</small>
            </div>
            <div>\${data.title}</div>
            <small class=\"text-muted\">Par \${data.user}</small>
        `;
        
        // Remplacement du template par notre entrée personnalisée
        template.replaceWith(entry);
    }
});

function getBadgeClass(action) {
    switch(action) {
        case 'create': return 'bg-success';
        case 'update': return 'bg-warning';
        case 'delete': return 'bg-danger';
        default: return 'bg-secondary';
    }
}
// Remplacer l'ancien gestionnaire de clic par ceci :
document.getElementById('history-toggle').addEventListener('click', function() {
    const panel = document.getElementById('history-panel');
    panel.classList.toggle('d-none');
    
    // Animation fluide
    if (!panel.classList.contains('d-none')) {
        panel.style.opacity = '0';
        panel.style.transform = 'translateY(20px)';
        panel.style.transition = 'all 0.3s ease';
        
        setTimeout(() => {
            panel.style.opacity = '1';
            panel.style.transform = 'translateY(0)';
        }, 10);
    }
});



///sentiment
function analyzeCommentSentiment(commentId) {
    const commentContent = document.getElementById(`comment-content-\${commentId}`).textContent.trim();
    const resultElement = document.getElementById(`sentiment-result-\${commentId}`);
    
    if (!commentContent) {
        resultElement.innerHTML = '<span class=\"text-danger\">No content to analyze</span>';
        return;
    }
    
    resultElement.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Analyzing...';
    
    fetch('/api/sentiment', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ comment: commentContent })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            resultElement.innerHTML = `Sentiment: \${data.result}`;
        } else {
            resultElement.innerHTML = `<span class=\"text-danger\">\${data.message || 'Analysis failed'}</span>`;
        }
    })
    .catch(error => {
        resultElement.innerHTML = '<span class=\"text-danger\">Error analyzing sentiment</span>';
        console.error('Error:', error);
    });
}


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
        return array (  2004 => 1523,  1995 => 1517,  1991 => 1515,  1987 => 1513,  1981 => 1511,  1979 => 1510,  1974 => 1507,  1971 => 1506,  1947 => 1488,  1941 => 1485,  1937 => 1483,  1933 => 1481,  1924 => 1479,  1920 => 1478,  1917 => 1477,  1915 => 1476,  1910 => 1474,  1904 => 1471,  1896 => 1466,  1890 => 1463,  1886 => 1462,  1879 => 1458,  1873 => 1455,  1868 => 1452,  1859 => 1448,  1857 => 1447,  1845 => 1440,  1841 => 1439,  1835 => 1438,  1830 => 1436,  1821 => 1430,  1816 => 1427,  1807 => 1421,  1803 => 1420,  1796 => 1416,  1792 => 1415,  1788 => 1414,  1784 => 1413,  1780 => 1412,  1776 => 1411,  1773 => 1410,  1771 => 1409,  1764 => 1405,  1760 => 1404,  1753 => 1400,  1749 => 1399,  1746 => 1398,  1739 => 1395,  1735 => 1393,  1728 => 1389,  1723 => 1388,  1721 => 1387,  1715 => 1385,  1710 => 1384,  1705 => 1382,  1696 => 1376,  1691 => 1374,  1686 => 1372,  1681 => 1370,  1676 => 1368,  1671 => 1366,  1666 => 1364,  1658 => 1359,  1650 => 1354,  1640 => 1347,  1633 => 1343,  1629 => 1342,  1625 => 1341,  1616 => 1334,  1608 => 1330,  1602 => 1327,  1597 => 1326,  1595 => 1325,  1589 => 1321,  1582 => 1317,  1571 => 1308,  1564 => 1304,  1560 => 1302,  1556 => 1300,  1548 => 1298,  1546 => 1297,  1541 => 1294,  1537 => 1292,  1533 => 1290,  1526 => 1288,  1524 => 1287,  1520 => 1285,  1511 => 1280,  1508 => 1279,  1506 => 1278,  1499 => 1273,  1490 => 1267,  1486 => 1266,  1479 => 1263,  1477 => 1262,  1472 => 1260,  1466 => 1256,  1461 => 1255,  1459 => 1254,  1454 => 1251,  1446 => 1246,  1443 => 1245,  1441 => 1244,  1434 => 1239,  1423 => 1231,  1419 => 1230,  1413 => 1227,  1409 => 1226,  1403 => 1223,  1399 => 1222,  1393 => 1219,  1389 => 1218,  1383 => 1215,  1379 => 1214,  1372 => 1209,  1370 => 1208,  1362 => 1202,  1356 => 1198,  1353 => 1197,  1343 => 1193,  1339 => 1192,  1334 => 1190,  1329 => 1188,  1324 => 1186,  1320 => 1185,  1316 => 1184,  1312 => 1182,  1307 => 1181,  1304 => 1180,  1301 => 1179,  1298 => 1178,  1296 => 1177,  1276 => 1159,  1268 => 1155,  1266 => 1154,  1254 => 1145,  1248 => 1142,  1242 => 1139,  1236 => 1135,  1230 => 1133,  1228 => 1132,  1224 => 1131,  1212 => 1122,  1193 => 1105,  1183 => 1101,  1179 => 1099,  1175 => 1098,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
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

    /* ================ Section de contrôle en haut ================ */
.header-controls {
    padding: 15px 0;
}

.header-controls .d-flex {
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.sort-container {
    display: flex;
    align-items: center;
}

.sort-container form {
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.sort-container .form-select {
    border-color: #ADC29B;
    color: #844062;
    min-width: 150px;
    height: 46px;
}

.sort-container .form-select:focus {
    border-color: #844062;
    box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
}

.sort-container label {
    color: #844062;
    font-weight: 500;
}

.buttons-container {
    display: flex;
    align-items: center;
    gap: 20px; /* Espacement entre Create Forum et History */
}

/* ================ Boutons Create Forum et History ================ */
.btn-create-forum,
.btn-primary#history-toggle {
    min-width: 180px;
    height: 50px;
    padding: 15px 20px;
    font-size: 1rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    background-color: #844062;
    color: white;
    border: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 8px rgba(132, 64, 98, 0.3);
    transition: all 0.3s ease;
}

.btn-create-forum:hover,
.btn-primary#history-toggle:hover {
    background-color: #6d3354;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(132, 64, 98, 0.4);
}

.btn-create-forum:active,
.btn-primary#history-toggle:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px rgba(132, 64, 98, 0.3);
}

.btn-create-forum i,
.btn-primary#history-toggle i {
    font-size: 1.2rem;
    margin-right: 8px;
    transition: transform 0.3s ease;
}

.btn-create-forum:hover i,
.btn-primary#history-toggle:hover i {
    transform: scale(1.1);
}

.btn-create-forum:focus,
.btn-primary#history-toggle:focus {
    animation: pulse 0.5s ease;
    outline: none;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
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

/* Styles pour les erreurs de validation */
.invalid-feedback {
    color: #dc3545;
    font-size: 0.875em;
    margin-top: 0.25rem;
}

.is-invalid {
    border-color: #dc3545 !important;
}

/* Animation pour les erreurs */
@keyframes shake {
    0%, 100% { transform: translateX(0); }
    20%, 60% { transform: translateX(-5px); }
    40%, 80% { transform: translateX(5px); }
}

.shake {
    animation: shake 0.5s;
}

/* Badword alert */
.badword-alert {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 2000;
    max-width: 300px;
}

.fade-out {
    opacity: 0;
    transition: opacity 0.5s ease-out;
}

/* Style pour la section auteur */
.author-info {
    background-color: #f8f9fa;
    border-radius: 8px 8px 0 0;
}

.initials-avatar {
    font-weight: bold;
    font-size: 1.1rem;
}

/* Style pour la date */
.text-muted {
    color: #6c757d;
    font-size: 0.85rem;
}

/* Animation des coeurs */
.heart-animation {
    position: fixed;
    pointer-events: none;
    animation: heart-fly 3s ease-in-out forwards;
    font-size: 20px;
    z-index: 1000;
}

@keyframes heart-fly {
    0% {
        transform: translate(0, 0) scale(0.5);
        opacity: 1;
    }
    50% {
        transform: translate(0, -100px) scale(1);
        opacity: 0.8;
    }
    100% {
        transform: translate(var(--random-x), var(--random-y)) scale(0.2);
        opacity: 0;
    }
}

/* Animation de confetti like coeur */
.confetti {
    position: fixed;
    width: 10px;
    height: 10px;
    background-color: #f00;
    opacity: 0;
    animation: confetti-fall 3s ease-in forwards;
    z-index: 1000;
}

@keyframes confetti-fall {
    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
    }
    100% {
        transform: translateY(100vh) rotate(360deg);
        opacity: 0;
    }
}

/*dislike-animation*/
/* Animation des dislikes */
.dislike-animation {
    position: fixed;
    pointer-events: none;
    animation: dislike-fly 3s ease-in-out forwards;
    font-size: 20px;
    z-index: 1000;
}

@keyframes dislike-fly {
    0% {
        transform: translate(0, 0) scale(0.5);
        opacity: 1;
    }
    50% {
        transform: translate(0, 50px) scale(1);
        opacity: 0.8;
    }
    100% {
        transform: translate(var(--random-x), var(--random-y)) scale(0.2);
        opacity: 0;
    }
}


.active {
    background-color: #ADC29B !important;
    color: #844006 !important;
    border-color: #ADC29B !important;
}



/* ================ Auto-complétion ================ */
.suggestion-box {
    position: absolute;
    bottom: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 1px solid #ADC29B;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    z-index: 1000;
    max-height: 200px;
    overflow-y: auto;
    display: none;
}

.suggestion-item {
    padding: 8px 12px;
    cursor: pointer;
    transition: all 0.2s;
    border-bottom: 1px solid #f0f0f0;
}

.suggestion-item:hover {
    background-color: #f8f9fa;
    color: #844062;
}

.suggestion-loading {
    padding: 8px 12px;
    color: #6c757d;
    font-style: italic;
}





/* ================ Styles pour la section de contrôle en haut ================ */
.header-controls {
    padding: 15px 0;
}

.header-controls .d-flex {
    align-items: center;
    justify-content: space-between;
}

.search-container {
    position: relative;
    flex-grow: 1;
    max-width: 500px;
}

.search-container .input-group {
    width: 100%;
}

.sort-container {
    display: flex;
    align-items: center;
}

.sort-container form {
    margin: 0;
}

.sort-container .form-select {
    border-color: #ADC29B;
    color: #844062;
    min-width: 150px;
}

.sort-container .form-select:focus {
    border-color: #844062;
    box-shadow: 0 0 0 0.2rem rgba(132, 64, 98, 0.25);
}

.sort-container label {
    color: #844062;
    font-weight: 500;
}

/* Responsive */
@media (max-width: 768px) {
    .header-controls .d-flex {
        flex-direction: column;
        align-items: stretch;
        gap: 15px;
    }

    .search-container {
        max-width: 100%;
    }

    .sort-container {
        width: 100%;
    }

    .sort-container .form-select {
        width: 100%;
    }

    .d-flex.gap-2 {
        justify-content: center;
        flex-wrap: wrap;
    }
}

@media (max-width: 576px) {
    .header-controls .d-flex {
        gap: 10px;
    }

    .sort-container label {
        font-size: 0.9rem;
    }

    .sort-container .form-select {
        font-size: 0.9rem;
    }
}

/* ================ Styles pour les boutons History et Create Forum ================ */
.btn-primary#history-toggle,
.btn-create-forum {
    min-width: 180px; /* Largeur identique pour les deux boutons */
    height: 50px; /* Hauteur légèrement augmentée */
    padding: 15px 20px; /* Padding plus généreux pour une apparence plus grande */
    font-size: 1rem; /* Taille de police légèrement augmentée */
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    transition: all 0.3s ease;
}

/* Style spécifique pour le bouton History */
.btn-primary#history-toggle {
    background-color: #844062;
    border: none;
    color: white;
    box-shadow: 0 2px 8px rgba(132, 64, 98, 0.3);
}

.btn-primary#history-toggle:hover {
    background-color: #6d3354;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(132, 64, 98, 0.4);
}



.btn-create-forum:hover {
    background-color: #6d3354;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(132, 64, 98, 0.4);
}

.btn-create-forum i,
.btn-primary#history-toggle i {
    font-size: 1.2rem; /* Icônes légèrement plus grandes */
    margin-right: 8px;
    transition: transform 0.3s ease;
}

.btn-create-forum:hover i,
.btn-primary#history-toggle:hover i {
    transform: scale(1.1);
}

/* Animation au clic */
.btn-create-forum:focus,
.btn-primary#history-toggle:focus {
    animation: pulse 0.5s ease;
    outline: none;
}

/* Responsive */
@media (max-width: 768px) {
    .btn-primary#history-toggle,
    .btn-create-forum {
        min-width: 150px; /* Largeur réduite pour les écrans moyens */
        height: 46px;
        padding: 10px 15px;
        font-size: 0.95rem;
    }

    .btn-create-forum i,
    .btn-primary#history-toggle i {
        font-size: 1.1rem;
        margin-right: 6px;
    }
}

@media (max-width: 576px) {
    .btn-primary#history-toggle,
    .btn-create-forum {
        min-width: 100%; /* Prend toute la largeur sur petits écrans */
        font-size: 0.9rem;
    }
}


.search-container {
    position: relative;
    flex-grow: 1;
    max-width: 500px; /* Nouvelle largeur */
}

.search-container .form-control {
    font-size: 1.1rem; /* Police plus grande */
    padding: 12px; /* Padding plus confortable */
}

.search-container .input-group {
    height: 50px; /* Hauteur augmentée */
}

@media (max-width: 768px) {
    .header-controls .d-flex {
        flex-direction: column;
        align-items: stretch;
        gap: 15px;
    }

    .search-container {
        max-width: 100%; /* Pleine largeur sur petits écrans */
    }
}


</style>
</head>

<section class=\"hero-section hero-50 d-flex justify-content-center align-items-center\" id=\"section_1\">
    <div class=\"section-overlay\"></div>
    <div class=\"section-overlay\" style=\"background: url('images/test7.jpg') center/cover no-repeat;\"></div>
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
    <div class=\"row align-items-center mb-4 g-3 header-controls\">
    <div class=\"col-12 d-flex align-items-center flex-wrap\">
        <!-- Barre de recherche -->
        <div class=\"search-container\" style=\"max-width: 400px;\">
            <div class=\"input-group\">
                <span class=\"input-group-text\">
                    <i class=\"fas fa-search\"></i>
                </span>
                <input 
                    type=\"text\" 
                    id=\"dynamicSearchInput\"
                    class=\"form-control\" 
                    placeholder=\"Search forums...\" 
                    aria-label=\"Recherche dynamique\"
                    autocomplete=\"off\"
                    value=\"{{ app.request.query.get('search') }}\">
            </div>
            <div class=\"search-loader d-none position-absolute end-0 top-50 translate-middle-y me-3\">
                <i class=\"fas fa-spinner fa-spin text-purple\"></i>
            </div>
        </div>

        <!-- Sort by -->
        <div class=\"sort-container\">
            <form method=\"GET\" action=\"{{ path('app_forums') }}\" class=\"d-flex align-items-center gap-2\">
                {% if app.request.query.get('category') %}
                    <input type=\"hidden\" name=\"category\" value=\"{{ app.request.query.get('category') }}\">
                {% endif %}
                <label for=\"sort\" class=\"me-2 text-nowrap\">
                    <i class=\"fas fa-sort-amount-down me-1\"></i>Sort by:
                </label>
                <select name=\"sort\" id=\"sort\" class=\"form-select\" onchange=\"this.form.submit()\" style=\"height: 46px;\">
                    <option value=\"newest\" {{ app.request.query.get('sort') == 'newest' ? 'selected' }}>
                        <i class=\"fas fa-clock me-1\"></i>Newest
                    </option>
                    <option value=\"oldest\" {{ app.request.query.get('sort') == 'oldest' ? 'selected' }}>
                        <i class=\"fas fa-history me-1\"></i>Oldest
                    </option>
                    <option value=\"popular\" {{ app.request.query.get('sort') == 'popular' ? 'selected' }}>
                        <i class=\"fas fa-fire me-1\"></i>Popular
                    </option>
                </select>
            </form>
        </div>

        <!-- Boutons Create Forum et History -->
        <div class=\"buttons-container d-flex align-items-center\">
            {% if not is_ajax_request %}
            <a href=\"{{ path('app_forums_new') }}\" class=\"btn btn-create-forum\">
                <i class=\"fas fa-plus-circle\"></i> Create Forum
            </a>
            {% endif %}
            <button id=\"history-toggle\" class=\"btn btn-primary\" style=\"background-color: #844062; border: none; height: 49px;\">
                <i class=\"fas fa-history me-1\"></i> History
            </button>
        </div>
    </div>
</div>
    <!-- Panneau d'historique -->
    <div id=\"history-panel\" class=\"d-none position-fixed bg-white p-3 shadow rounded\" 
         style=\"right:20px; top:120px; width:350px; max-height:500px; overflow-y:auto; z-index:1000;\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-history me-2\"></i>Historique des actions
            </h5>
            <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"document.getElementById('history-panel').classList.add('d-none')\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div id=\"history-content\">
            {% set persistent_history = app.session.get('persistent_history', [])|reverse %}
            {% set history_flashes = app.flashes('history')|reverse %}
            {% set all_history = persistent_history|merge(history_flashes)|slice(0, 10) %}
            {% if all_history is not empty %}
                {% for item in all_history %}
                    <div class=\"mb-3 p-3 border-bottom history-item\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"badge bg-{{ item.color|default('primary') }} text-white\">
                                <i class=\"fas fa-{{ item.icon|default('info-circle') }} me-1\"></i>
                                {{ item.label|default(item.action|capitalize) }}
                            </span>
                            <small class=\"text-muted\">{{ item.time }}</small>
                        </div>
                        <div class=\"fw-bold\">{{ item.title }}</div>
                        <div class=\"d-flex justify-content-between align-items-center mt-1\">
                            <small class=\"text-muted\">Par {{ item.user }}</small>
                            <small class=\"text-muted\">#{{ item.id }}</small>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"text-muted text-center py-3\">
                    <i class=\"fas fa-info-circle me-1\"></i> Aucune action récente
                </div>
            {% endif %}
        </div>
    </div>
</div>

<div class=\"container mt-4\">
    <div id=\"forums-container\">
        {% if not is_ajax_request|default(false) %}
            <!-- Filtres de catégorie améliorés -->
            <div class=\"category-buttons mb-4\">
                <div class=\"row\">
                    <div class=\"col-12 d-flex justify-content-center\">
                        <div class=\"btn-group\" role=\"group\">
                            <a href=\"{{ path('app_forums') }}\" 
                               class=\"btn {{ not app.request.query.get('category') ? 'active' : '' }}\">
                               <i class=\"fas fa-th-large me-2\"></i>All
                            </a>
                            <a href=\"{{ path('app_forums', {'category': 'Mariage'}) }}\" 
                               class=\"btn {{ app.request.query.get('category') == 'Mariage' ? 'active' : '' }}\">
                               <i class=\"fas fa-ring me-2\"></i>Mariage
                            </a>
                            <a href=\"{{ path('app_forums', {'category': 'Anniversaire'}) }}\" 
                               class=\"btn {{ app.request.query.get('category') == 'Anniversaire' ? 'active' : '' }}\">
                               <i class=\"fas fa-birthday-cake me-2\"></i>Anniversaire
                            </a>
                            <a href=\"{{ path('app_forums', {'category': 'Graduation'}) }}\" 
                               class=\"btn {{ app.request.query.get('category') == 'Graduation' ? 'active' : '' }}\">
                               <i class=\"fas fa-graduation-cap me-2\"></i>Graduation
                            </a>
                            <a href=\"{{ path('app_forums', {'category': 'Baby_Shower'}) }}\" 
                               class=\"btn {{ app.request.query.get('category') == 'Baby_Shower' ? 'active' : '' }}\">
                               <i class=\"fas fa-baby me-2\"></i>Baby Shower
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
        <!-- Reste du contenu des forums reste inchangé -->
        <!-- ... (le reste du code pour la liste des forums reste identique) ... -->
    </div>
</div>

        {% if single_forum_mode %}
            <div class=\"col-12 mb-3\">
                <a href=\"{{ path('app_forums') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Back
                </a>
            </div>
        {% endif %}

        <!-- Liste des forums -->
        <div class=\"row justify-content-center\" id=\"forumsList\">
            {% if forums is defined and forums is not empty %}
                {% for forum in forums %}
                    <div class=\"col-lg-8 col-md-10 mb-4\">
                        <div class=\"card shadow-lg forum-card\">
                            <!-- En-tête du forum -->
                            <div class=\"card-header d-flex justify-content-between align-items-center\" style=\"background-color: #ADC29B; color: white;\">
                                <h3 class=\"h5 mb-0\">{{ forum.categorie|upper }}</h3>
                                <div class=\"btn-group\">
                                    {% if session.get('user_id') and forum.user and session.get('user_id') == forum.user.id %}
                                        <a href=\"{{ path('app_forum_edit', {'id': forum.id}) }}\" class=\"btn btn-sm btn-outline-light me-2\">
                                            <i class=\"fas fa-edit me-1\"></i> Edit
                                        </a>
                                        <form method=\"POST\" action=\"{{ path('app_forum_delete', {'id': forum.id}) }}\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-forum') }}\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-outline-light\" onclick=\"return confirm('Are you sure you want to delete this forum?')\">
                                                <i class=\"fas fa-trash me-1\"></i> Delete
                                            </button>
                                        </form>
                                    {% endif %}
                                </div>
                            </div>

                            <!-- Informations de l'auteur -->
                            <div class=\"author-info d-flex align-items-center p-3\" style=\"border-bottom: 1px solid #eee;\">
                                {% if forum.user is defined and forum.user is not null %}
                                    {% if forum.user.img is defined and forum.user.img is not null %}
                                        <img src=\"{{ asset(forum.user.img) }}\"
                                             alt=\"Photo de profil\"
                                             class=\"rounded-circle me-3\"
                                             style=\"width: 50px; height: 50px; object-fit: cover; border: 2px solid #ADC29B;\">
                                    {% else %}
                                        <div class=\"rounded-circle me-3 d-flex align-items-center justify-content-center initials-avatar\"
                                             style=\"width: 50px; height: 50px; background-color: #844062; color: white;\">
                                            {% if forum.user.firstName is defined and forum.user.lastName is defined %}
                                                {{ forum.user.firstName|first|upper }}{{ forum.user.lastName|first|upper }}
                                            {% else %}
                                                <i class=\"fas fa-user\"></i>
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                    
                                    <div>
                                        <h6 class=\"mb-0\" style=\"color: #844062; font-weight: 600;\">
                                            {% if forum.user.firstName is defined and forum.user.lastName is defined %}
                                                {{ forum.user.firstName }} {{ forum.user.lastName }}
                                            {% else %}
                                                Utilisateur
                                            {% endif %}
                                        </h6>
                                        <small class=\"text-muted\">
                                            <i class=\"far fa-clock me-1\"></i> {{ forum.date|date('d/m/Y à H:i') }}
                                        </small>
                                    </div>
                                {% else %}
                                    <div class=\"rounded-circle me-3 d-flex align-items-center justify-content-center\"
                                         style=\"width: 50px; height: 50px; background-color: #6c757d; color: white;\">
                                        <i class=\"fas fa-user-secret\"></i>
                                    </div>
                                    <div>
                                        <h6 class=\"mb-0\" style=\"color: #6c757d; font-weight: 600;\">
                                            Anonymous
                                        </h6>
                                        <small class=\"text-muted\">
                                            <i class=\"far fa-clock me-1\"></i> {{ forum.date|date('d/m/Y à H:i') }}
                                        </small>
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Image du forum -->
                            <div class=\"card-img-container text-center\">
                                {% if forum.img != 'default.jpg' %}
                                    <img src=\"{{ path('app_forum_image', {'id': forum.img}) }}\" 
                                         alt=\"Image du forum {{ forum.categorie }}\"
                                         class=\"img-fluid mx-auto d-block\">
                                {% else %}
                                    <img src=\"{{ asset('images/default_forum.jpg') }}\" 
                                         alt=\"Image par défaut\"
                                         class=\"img-fluid mx-auto d-block\">
                                {% endif %}
                            </div>

                            <!-- Corps du forum -->
                            <div class=\"card-body text-center\">
                                <!-- Description avec traduction -->
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

                                <!-- Actions (like, dislike, comment, share) -->
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

                                <!-- Section des commentaires -->
                                <div id=\"comments-{{ forum.id }}\" class=\"comments-section\">
                                    <div class=\"existing-comments\">
                                        {% for comment in forum.comments %}
                                            <div class=\"comment\" id=\"comment-{{ comment.IdCmn }}\">
                                                <div class=\"comment-author d-flex align-items-center mb-2\">
                                                    {% if comment.user.img %}
                                                        <img src=\"{{ asset(comment.user.img) }}\"
                                                             alt=\"{{ comment.user.firstName }}\"
                                                             class=\"rounded-circle me-2\"
                                                             style=\"width: 36px; height: 36px; object-fit: cover; border: 1px solid #ADC29B;\">
                                                    {% else %}
                                                        <div class=\"rounded-circle me-2 d-flex align-items-center justify-content-center\"
                                                             style=\"width: 36px; height: 36px; background-color: #844062; color: white; font-size: 0.8rem;\">
                                                            {{ comment.user.firstName|first|upper }}{{ comment.user.lastName|first|upper }}
                                                        </div>
                                                    {% endif %}
                                                    <div>
                                                        <strong style=\"color: #844062;\">{{ comment.user.firstName }}</strong>
                                                        <small class=\"text-muted ms-2\">{{ comment.date|date('d/m/Y H:i') }}</small>
                                                    </div>
                                                </div>

                                                <div class=\"comment-content\" id=\"comment-content-{{ comment.IdCmn }}\">
                                                    {{ comment.sujet }}
                                                </div>

                                                <div class=\"comment-actions\">
                                                    {% if session.get('user_id') and comment.user and session.get('user_id') == comment.user.id %}
                                                        <button class=\"btn-edit-comment\" onclick=\"
                                                            document.getElementById('comment-content-{{ comment.IdCmn }}').style.display = 'none';
                                                            document.querySelector('#comment-{{ comment.IdCmn }} .btn-edit-comment').style.display = 'none';
                                                            document.querySelector('#comment-{{ comment.IdCmn }} .btn-delete-comment').style.display = 'none';
                                                            document.querySelector('#comment-{{ comment.IdCmn }} .btn-sentiment').style.display = 'none';
                                                            document.getElementById('edit-form-{{ comment.IdCmn }}').style.display = 'block';
                                                            document.querySelector('#edit-form-{{ comment.IdCmn }} textarea').focus();
                                                        \">
                                                            <i class=\"fas fa-edit\"></i> Edit
                                                        </button>
                                                        <form method=\"POST\" action=\"{{ path('comment_delete', {'id': comment.IdCmn}) }}\" class=\"d-inline\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-comment' ~ comment.IdCmn) }}\">
                                                            <button type=\"submit\" class=\"btn-delete-comment\" style=\"border-color: #ADC29B; color: #844062;\" onclick=\"return confirm('Are you sure you want to delete this comment?')\">
                                                                <i class=\"fas fa-trash\"></i> Delete
                                                            </button>
                                                        </form>
                                                    {% endif %}
                                                    
                                                    <!-- Bouton d'analyse de sentiment pour le commentaire -->
                                                    <button type=\"button\" class=\"btn-sentiment\" 
                                                            onclick=\"analyzeCommentSentiment('{{ comment.IdCmn }}')\"
                                                            style=\"background: #ADC29B; color: white; padding: 4px 8px; border-radius: 4px; border: none;\">
                                                        <i class=\"fas fa-feather-alt\"></i> Analyze
                                                    </button>
                                                    
                                                    <!-- Résultat de l'analyse -->
                                                    <span id=\"sentiment-result-{{ comment.IdCmn }}\" class=\"sentiment-feedback ms-2\"></span>

                                                    <form id=\"edit-form-{{ comment.IdCmn }}\" class=\"edit-comment-form\" method=\"POST\" action=\"{{ path('comment_edit', {'id': comment.IdCmn}) }}\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-comment' ~ comment.IdCmn) }}\">
                                                        <textarea name=\"content\" class=\"form-control\">{{ comment.sujet }}</textarea>
                                                        <button type=\"submit\" class=\"btn btn-sm mt-2\" style=\"border-color: #ADC29B; color: #844062;\">
                                                            <i class=\"fas fa-save\"></i> Save
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
                                        <form action=\"{{ path('app_comment_add', {'forumId': forum.id}) }}\" 
                                              method=\"post\" 
                                              class=\"d-flex align-items-end gap-2 w-100\" 
                                              id=\"comment-form-{{ forum.id }}\"
                                              onsubmit=\"return validateComment(this)\">
                                            <div class=\"comment-input-container position-relative flex-grow-1\">
                                                <textarea name=\"comment_content\" 
                                                          id=\"comment-textarea-{{ forum.id}}\"
                                                          class=\"form-control {{ app.session.get('comment_errors_' ~ forum.id) ? 'is-invalid shake' : '' }}\"
                                                          rows=\"1\" 
                                                          placeholder=\"Write a comment...\"
                                                          style=\"width: 100%; min-height: 40px; padding-right: 40px;\">{{ app.session.get('comment_content_' ~ forum.id) }}</textarea>
                                                
                                                
                                                
                                                <!-- Boîte de suggestions -->
                                                <div class=\"suggestion-box\" id=\"suggestion-box-{{ forum.id }}\"></div>
                                                
                                                <!-- Affichage du résultat du sentiment -->
                                                <div id=\"sentiment-result-{{ forum.id }}\" class=\"mt-1\"></div>
                                                
                                                {% if app.session.get('comment_errors_' ~ forum.id) %}
                                                    <div class=\"invalid-feedback d-block mt-1\">
                                                        {% for error in app.session.get('comment_errors_' ~ forum.id) %}
                                                            <div>{{ error }}</div>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}
                                        
                                                <div class=\"emoji-container\">
                                                    <button type=\"button\" class=\"emoji-toggle-btn\" id=\"emoji-toggle-{{ forum.id }}\">
                                                        <i class=\"far fa-smile\"></i>
                                                    </button>
                                                    <div class=\"emoji-window\" id=\"emoji-window-{{ forum.id }}\">
                                                        <div class=\"emoji-list\">
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
//////////////////////////////////////////////////////badwords
// Fonction de validation côté client
async function validateComment(form) {
    const textarea = form.querySelector('textarea');
    const content = textarea.value.trim();
    const forumId = form.id.split('-')[2];
    const feedback = document.getElementById(`badword-feedback-\${forumId}`);
    
    // Validation basique
    if (content.length < 5) {
        feedback.textContent = 'Le commentaire doit contenir au moins 5 caractères';
        feedback.style.display = 'block';
        textarea.classList.add('is-invalid');
        return false;
    }
    
    // Vérification des mots interdits
    const hasBadWords = await checkBadWords(content);
    if (hasBadWords) {
        const useCensored = confirm('Votre commentaire contient des mots inappropriés. Voulez-vous utiliser une version corrigée?');
        if (useCensored) {
            const censored = await getCensoredText(content);
            textarea.value = censored;
        } else {
            return false;
        }
    }
    
    return true;
}

// Vérification en temps réel
async function checkBadWordsLive(textarea) {
    const content = textarea.value;
    const forumId = textarea.id.split('-')[2];
    const feedback = document.getElementById(`badword-feedback-\${forumId}`);
    
    if (content.length > 3) { // Seulement si assez de texte
        const hasBadWords = await checkBadWords(content);
        if (hasBadWords) {
            feedback.textContent = 'Mot(s) inapproprié(s) détecté(s)';
            feedback.style.display = 'block';
            textarea.classList.add('is-badword');
        } else {
            feedback.style.display = 'none';
            textarea.classList.remove('is-badword');
        }
    } else {
        feedback.style.display = 'none';
        textarea.classList.remove('is-badword');
    }
}

// Fonctions API
async function checkBadWords(text) {
    try {
        const response = await fetch(`https://www.purgomalum.com/service/containsprofanity?text=\${encodeURIComponent(text)}`);
        return await response.text() === 'true';
    } catch (error) {
        console.error('API Error:', error);
        return false;
    }
}

async function getCensoredText(text) {
    try {
        const response = await fetch(`https://www.purgomalum.com/service/json?text=\${encodeURIComponent(text)}`);
        const data = await response.json();
        return data.result || text;
    } catch (error) {
        console.error('API Error:', error);
        return text;
    }
}



///////////////////////////////////////////////////////traduction
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

   document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('dynamicSearchInput');
    const loader = document.querySelector('.search-loader');
    let searchTimeout;
    let lastController;

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.trim();
            
            if (searchTerm.length > 0) {
                loader.classList.remove('d-none');
                
                // Annuler la requête précédente
                if (lastController) {
                    lastController.abort();
                }
                
                clearTimeout(searchTimeout);
                
                searchTimeout = setTimeout(() => {
                    performSearch(searchTerm);
                }, 300);
            } else {
                loader.classList.add('d-none');
                resetSearchResults();
            }
        });
    }

    function resetSearchResults() {
        const url = new URL(window.location.href);
        url.searchParams.delete('search');
        
        const controller = new AbortController();
        lastController = controller;
        
        fetch(url.toString(), {
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            signal: controller.signal
        })
        .then(response => {
            if (!response.ok) throw new Error('Network error');
            return response.text();
        })
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newContent = doc.getElementById('forumsList');
            
            if (newContent) {
                document.getElementById('forumsList').innerHTML = newContent.innerHTML;
                initializeAfterAjax();
            }
        })
        .catch(error => {
            if (error.name !== 'AbortError') {
                console.error('Error:', error);
            }
        });
    }

    function performSearch(searchTerm) {
        const url = new URL(window.location.href);
        const params = new URLSearchParams();
        
        params.set('search', searchTerm);
        params.set('ajax', '1');
        
        // Garder les autres paramètres
        const currentParams = new URLSearchParams(window.location.search);
        ['category', 'sort'].forEach(param => {
            if (currentParams.has(param)) {
                params.set(param, currentParams.get(param));
            }
        });
        
        const controller = new AbortController();
        lastController = controller;
        
        fetch(`\${url.pathname}?\${params.toString()}`, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            signal: controller.signal
        })
        .then(response => {
            if (!response.ok) throw new Error('Search failed');
            return response.text();
        })
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newContent = doc.getElementById('forumsList');
            
            if (newContent) {
                document.getElementById('forumsList').innerHTML = newContent.innerHTML;
                initializeAfterAjax();
            }
        })
        .catch(error => {
            if (error.name !== 'AbortError') {
                console.error('Error:', error);
                document.getElementById('forumsList').innerHTML = `
                    <div class=\"col-12\">
                        <div class=\"alert alert-danger text-center py-4\">
                            <h4 class=\"alert-heading\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                Search error
                            </h4>
                            <p class=\"mb-0\">Please try again</p>
                        </div>
                    </div>`;
            }
        })
        .finally(() => {
            loader.classList.add('d-none');
        });
    }

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
        const forumId = this.dataset.forumId;
        const isLike = this.classList.contains('btn-like');
        
        try {
            const response = await fetch(`/reaction/\${isLike ? 'like' : 'dislike'}/\${forumId}`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            
            const data = await response.json();
            
            if (data.status === 'success') {
                // Mise à jour des compteurs
                document.querySelectorAll(`.btn-like[data-forum-id=\"\${forumId}\"] .like-count`)
                    .forEach(el => el.textContent = data.nblike);
                
                document.querySelectorAll(`.btn-dislike[data-forum-id=\"\${forumId}\"] .dislike-count`)
                    .forEach(el => el.textContent = data.nbdislike);
                
                // Mise à jour visuelle
                const likeBtn = document.querySelector(`.btn-like[data-forum-id=\"\${forumId}\"]`);
                const dislikeBtn = document.querySelector(`.btn-dislike[data-forum-id=\"\${forumId}\"]`);
                
                likeBtn.classList.toggle('active', data.current_action === 'like');
                dislikeBtn.classList.toggle('active', data.current_action === 'dislike');
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });
});




//share


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



document.addEventListener('DOMContentLoaded', function() {
    // Validation IMMÉDIATE au clic
    document.querySelectorAll('.comment-form form').forEach(form => {
        // Intercepter le clic sur le bouton
        const submitBtn = form.querySelector('button[type=\"submit\"]');
        
        submitBtn.addEventListener('click', function(e) {
            const textarea = form.querySelector('textarea');
            const content = textarea.value;
            
            // Supprimer les erreurs précédentes
            textarea.classList.remove('is-invalid', 'shake');
            const existingError = textarea.nextElementSibling;
            if (existingError && existingError.classList.contains('invalid-feedback')) {
                existingError.remove();
            }
            
            // Validation IMMÉDIATE
            if (content === '') {
                e.preventDefault();
                showError(textarea, 'Le sujet ne peut pas être vide');
                return false;
            }
            
            if (content.length < 5) {
                e.preventDefault();
                showError(textarea, 'Le sujet doit contenir au moins 5 caractères');
                return false;
            }
        });
    });
    
    function showError(element, message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'invalid-feedback d-block mt-1';
        errorDiv.innerHTML = `<div>\${message}</div>`;
        
        element.parentNode.insertBefore(errorDiv, element.nextSibling);
        element.classList.add('is-invalid', 'shake');
        
        setTimeout(() => element.classList.remove('shake'), 500);
        element.focus();
    }
    
    // Suppression des erreurs lors de la saisie
    document.querySelectorAll('.comment-form textarea').forEach(textarea => {
        textarea.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                this.classList.remove('is-invalid');
                const errorDiv = this.nextElementSibling;
                if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
                    errorDiv.remove();
                }
            }
        });
    });
});


// Debug des clics
document.addEventListener('DOMContentLoaded', function() {
    // Écouteur pour les boutons Edit
    document.querySelectorAll('[id^=\"edit-forum-\"]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            console.log('Edit clické', this.href);
        });
    });

    // Écouteur pour les formulaires Delete
    document.querySelectorAll('[id^=\"delete-form-\"]').forEach(form => {
        form.addEventListener('submit', function(e) {
            console.log('Delete soumis', this.action);
        });
    });
});




//like-coeur
document.querySelectorAll('.btn-like').forEach(btn => {
    btn.addEventListener('click', async function() {
        const forumId = this.dataset.forumId;
        const buttonRect = this.getBoundingClientRect();
        
        // Créer des coeurs animés
        createHearts(buttonRect.left + buttonRect.width/2, buttonRect.top);
        
        // Désactiver le bouton pendant la requête
        this.disabled = true;
        
        try {
            const response = await fetch(`/reaction/like/\${forumId}`, {
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
            this.disabled = false;
        }
    });
});

function createHearts(x, y) {
    const colors = ['#ff0000', '#ff69b4', '#ff1493', '#c71585'];
    const hearts = ['❤️', '💖', '💗', '💓', '💞', '💕'];
    
    for (let i = 0; i < 15; i++) {
        const heart = document.createElement('div');
        heart.className = 'heart-animation';
        heart.innerHTML = hearts[Math.floor(Math.random() * hearts.length)];
        heart.style.left = `\${x}px`;
        heart.style.top = `\${y}px`;
        heart.style.color = colors[Math.floor(Math.random() * colors.length)];
        
        // Position finale aléatoire
        const randomX = (Math.random() - 0.5) * 200;
        const randomY = -Math.random() * 200 - 100;
        heart.style.setProperty('--random-x', `\${randomX}px`);
        heart.style.setProperty('--random-y', `\${randomY}px`);
        
        document.body.appendChild(heart);
        
        // Supprimer après l'animation
        setTimeout(() => {
            heart.remove();
        }, 3000);
    }
    
    // Ajouter aussi des confettis
    createConfetti(x, y);
}

function createConfetti(x, y) {
    const colors = ['#ff0000', '#ff69b4', '#00ff00', '#ffff00', '#00ffff', '#ff00ff'];
    
    for (let i = 0; i < 30; i++) {
        const confetti = document.createElement('div');
        confetti.className = 'confetti';
        confetti.style.left = `\${x + (Math.random() - 0.5) * 100}px`;
        confetti.style.top = `\${y}px`;
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        confetti.style.width = `\${Math.random() * 8 + 4}px`;
        confetti.style.height = `\${Math.random() * 8 + 4}px`;
        confetti.style.animationDuration = `\${Math.random() * 2 + 2}s`;
        
        document.body.appendChild(confetti);
        
        setTimeout(() => {
            confetti.remove();
        }, 3000);
    }
}

async function sendLikeRequest(forumId, button) {
    button.disabled = true;
    
    try {
        const response = await fetch(`/reaction/like/\${forumId}`, {
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
            
            // Mise à jour visuelle
            const likeBtn = document.querySelector(`.btn-like[data-forum-id=\"\${forumId}\"]`);
            likeBtn.classList.toggle('active', data.current_action === 'like');
        }
    } catch (error) {
        console.error('Error:', error);
    } finally {
        button.disabled = false;
    }
}

//dislike-emoji

document.querySelectorAll('.btn-dislike').forEach(btn => {
    btn.addEventListener('click', async function() {
        const forumId = this.dataset.forumId;
        const buttonRect = this.getBoundingClientRect();
        
        // Créer des animations de dislike (pouces vers le bas)
        createDislikeAnimation(buttonRect.left + buttonRect.width/2, buttonRect.top);
        
        // Désactiver le bouton pendant la requête
        this.disabled = true;
        
        try {
            const response = await fetch(`/reaction/dislike/\${forumId}`, {
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
            this.disabled = false;
        }
    });
});

function createDislikeAnimation(x, y) {
    const thumbs = ['👎', '🤮', '😠', '💔']; // Emojis pour le dislike
    const colors = ['#ff0000', '#8b0000', '#800080', '#4b0082']; // Couleurs sombres
    
    for (let i = 0; i < 10; i++) {
        const thumb = document.createElement('div');
        thumb.className = 'dislike-animation';
        thumb.innerHTML = thumbs[Math.floor(Math.random() * thumbs.length)];
        thumb.style.left = `\${x}px`;
        thumb.style.top = `\${y}px`;
        thumb.style.color = colors[Math.floor(Math.random() * colors.length)];
        
        // Position finale aléatoire
        const randomX = (Math.random() - 0.5) * 200;
        const randomY = Math.random() * 200 + 50; // Descendent vers le bas
        thumb.style.setProperty('--random-x', `\${randomX}px`);
        thumb.style.setProperty('--random-y', `\${randomY}px`);
        
        document.body.appendChild(thumb);
        
        // Supprimer après l'animation
        setTimeout(() => {
            thumb.remove();
        }, 3000);
    }
}

//generate_mot

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.comment-input-container textarea').forEach(textarea => {
        const forumId = textarea.id.split('-')[2];
        const suggestionBox = document.getElementById(`suggestion-box-\${forumId}`);

        textarea.addEventListener('input', async (e) => {
            const text = e.target.value.trim();
            const lastWord = getLastWord(text);

            if (lastWord.length < 2) {
                hideSuggestions();
                return;
            }

            showLoading();

            try {
                const res = await fetch(`https://api.datamuse.com/words?sp=\${lastWord}*&max=5`);
                const words = await res.json();

                const suggestions = words.map(w => w.word).filter(w => w !== lastWord);

                if (suggestions.length > 0) {
                    showSuggestions(suggestions);
                } else {
                    hideSuggestions();
                }

            } catch (err) {
                console.error(\"Erreur avec Datamuse :\", err);
                showError(\"Erreur de réseau\");
            }
        });

        function getLastWord(text) {
            const words = text.split(/\\s+/);
            return words[words.length - 1] || '';
        }

        function showSuggestions(suggestions) {
            suggestionBox.innerHTML = '';
            suggestions.forEach(word => {
                const div = document.createElement('div');
                div.className = 'suggestion-item';
                div.textContent = word;
                div.style.cursor = 'pointer';
                div.style.padding = '5px';
                div.style.borderBottom = '1px solid #ddd';
                div.addEventListener('click', () => applySuggestion(word));
                suggestionBox.appendChild(div);
            });
            suggestionBox.style.display = 'block';
        }

        function applySuggestion(word) {
            const words = textarea.value.trim().split(/\\s+/);
            words[words.length - 1] = word;
            textarea.value = words.join(' ') + ' ';
            hideSuggestions();
            textarea.focus();
        }

        function showLoading() {
            suggestionBox.innerHTML = '<div style=\"padding:5px; color:gray;\">...</div>';
            suggestionBox.style.display = 'block';
        }

        function hideSuggestions() {
            suggestionBox.style.display = 'none';
        }

        function showError(message) {
            suggestionBox.innerHTML = `<div style=\"color:red; padding:5px;\">\${message}</div>`;
            suggestionBox.style.display = 'block';
        }
    });
});







/////////////////////////////history
document.addEventListener('turbo:before-stream-render', (event) => {
    const stream = event.detail.newStream;
    
    if (stream.action === 'append' && stream.target === 'history-content') {
        const template = stream.template;
        const data = template.dataset;
        
        // Création de l'entrée d'historique
        const entry = document.createElement('div');
        entry.className = 'mb-2 p-2 border-bottom';
        entry.innerHTML = `
            <div class=\"d-flex justify-content-between\">
                <span class=\"badge \${getBadgeClass(data.action)}\">
                    \${data.action.toUpperCase()}
                </span>
                <small class=\"text-muted\">\${data.time}</small>
            </div>
            <div>\${data.title}</div>
            <small class=\"text-muted\">Par \${data.user}</small>
        `;
        
        // Remplacement du template par notre entrée personnalisée
        template.replaceWith(entry);
    }
});

function getBadgeClass(action) {
    switch(action) {
        case 'create': return 'bg-success';
        case 'update': return 'bg-warning';
        case 'delete': return 'bg-danger';
        default: return 'bg-secondary';
    }
}
// Remplacer l'ancien gestionnaire de clic par ceci :
document.getElementById('history-toggle').addEventListener('click', function() {
    const panel = document.getElementById('history-panel');
    panel.classList.toggle('d-none');
    
    // Animation fluide
    if (!panel.classList.contains('d-none')) {
        panel.style.opacity = '0';
        panel.style.transform = 'translateY(20px)';
        panel.style.transition = 'all 0.3s ease';
        
        setTimeout(() => {
            panel.style.opacity = '1';
            panel.style.transform = 'translateY(0)';
        }, 10);
    }
});



///sentiment
function analyzeCommentSentiment(commentId) {
    const commentContent = document.getElementById(`comment-content-\${commentId}`).textContent.trim();
    const resultElement = document.getElementById(`sentiment-result-\${commentId}`);
    
    if (!commentContent) {
        resultElement.innerHTML = '<span class=\"text-danger\">No content to analyze</span>';
        return;
    }
    
    resultElement.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Analyzing...';
    
    fetch('/api/sentiment', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ comment: commentContent })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            resultElement.innerHTML = `Sentiment: \${data.result}`;
        } else {
            resultElement.innerHTML = `<span class=\"text-danger\">\${data.message || 'Analysis failed'}</span>`;
        }
    })
    .catch(error => {
        resultElement.innerHTML = '<span class=\"text-danger\">Error analyzing sentiment</span>';
        console.error('Error:', error);
    });
}


</script>
{% endblock %}", "forums/forums.html.twig", "C:\\Users\\MSI-PC\\Desktop\\eventifySymfonyIntegrationFinale\\templates\\forums\\forums.html.twig");
    }
}
