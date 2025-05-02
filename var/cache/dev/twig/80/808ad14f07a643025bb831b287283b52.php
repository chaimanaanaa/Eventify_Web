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

/* logistics/FormCategory.html.twig */
class __TwigTemplate_6ab345c2c6dcf984a6eb6b170a20caf2 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logistics/FormCategory.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logistics/FormCategory.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "logistics/FormCategory.html.twig", 1);
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
        yield "  <!-- Your existing layout wrapper and navbar code remains exactly the same -->

  ";
        // line 6
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 105
        yield "
  <!-- Your existing footer and closing tags remain exactly the same -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "  <div class=\"container py-4\">
      <div class=\"row justify-content-center\">
          <div class=\"col-lg-8\">
              <div class=\"card shadow-sm\">
                  <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                      <h2 class=\"h4 mb-0\">
                          <i class=\"fas ";
        // line 13
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)) ? ("fa-edit") : ("fa-plus-circle"));
        yield " me-2\"></i>
                          ";
        // line 14
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)) ? ("Edit Category") : ("Create New Category"));
        yield "
                      </h2>
                      <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                          <i class=\"fas fa-list me-1\"></i> View List
                      </a>
                  </div>
                  
                  <div class=\"card-body\">
                      ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "enctype" => "multipart/form-data", "id" => "categoryForm"]]);
        // line 29
        yield "
                      
                      <div class=\"row g-3\">
                          <!-- Name Field -->
                          <div class=\"col-md-6\">
                              ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Category Name"]);
        yield "
                              <div class=\"input-group\">
                                  <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                                  ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control rounded-end", "placeholder" => "Enter category name"]]);
        // line 40
        yield "
                              </div>
                              ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), 'errors');
        yield "
                          </div>
                          
                          <!-- Image Upload Field -->
                          <div class=\"col-md-6\">
                              ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "image", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Category Image"]);
        yield "
                              ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        // line 51
        yield "
                              ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52), 'errors');
        yield "
                              <small class=\"form-text text-muted\">
                                  Recommended size: 500x500px (JPG/PNG/WebP, max 20MB)
                              </small>
                          </div>
                          
                          <!-- Description Field -->
                          <div class=\"col-12\">
                              ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Description"]);
        yield "
                              ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Enter category description"]]);
        // line 65
        yield "
                              ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'errors');
        yield "
                          </div>
                          
                          <!-- Current Image Preview -->
                          ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 70, $this->source); })()), "image", [], "any", false, false, false, 70)) {
            // line 71
            yield "                          <div class=\"col-12\">
                              <div class=\"border p-3 rounded bg-light\">
                                  <p class=\"fw-semibold mb-2\"><i class=\"fas fa-image me-1\"></i> Current Image:</p>
                                  <div class=\"d-flex align-items-center\">
                                      <img src=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 75, $this->source); })()), "image", [], "any", false, false, false, 75)), "html", null, true);
            yield "\" 
                                           class=\"img-thumbnail me-3\" 
                                           style=\"width: 120px; height: 120px; object-fit: cover;\" 
                                           alt=\"Current category image\">
                                      <p class=\"small text-muted mb-0\">
                                          Upload a new image to replace the current one.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          ";
        }
        // line 86
        yield "                      </div>
                      
      <div class=\"d-flex justify-content-end gap-3 mt-4\">
    <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
        yield "\" class=\"btn btn-danger px-4\" id=\"cancelButton\">
        <i class=\"fas fa-times me-1\"></i> Cancel
    </a>
    <button type=\"submit\" class=\"btn btn-primary px-4\" id=\"submitButton\">
        <i class=\"fas ";
        // line 93
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)) ? ("fa-save") : ("fa-plus-circle"));
        yield " me-1\"></i>
        ";
        // line 94
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)) ? ("Update") : ("Create"));
        yield "
    </button>
</div>
                      
                      ";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        yield "
                  </div>
              </div>
          </div>
      </div>
  </div>
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
        return "logistics/FormCategory.html.twig";
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
        return array (  245 => 98,  238 => 94,  234 => 93,  227 => 89,  222 => 86,  208 => 75,  202 => 71,  200 => 70,  193 => 66,  190 => 65,  188 => 61,  184 => 60,  173 => 52,  170 => 51,  168 => 48,  164 => 47,  156 => 42,  152 => 40,  150 => 37,  144 => 34,  137 => 29,  135 => 22,  126 => 16,  121 => 14,  117 => 13,  109 => 7,  96 => 6,  83 => 105,  81 => 6,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block content %}
  <!-- Your existing layout wrapper and navbar code remains exactly the same -->

  {% block body %}
  <div class=\"container py-4\">
      <div class=\"row justify-content-center\">
          <div class=\"col-lg-8\">
              <div class=\"card shadow-sm\">
                  <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                      <h2 class=\"h4 mb-0\">
                          <i class=\"fas {{ category.id ? 'fa-edit' : 'fa-plus-circle' }} me-2\"></i>
                          {{ category.id ? 'Edit Category' : 'Create New Category' }}
                      </h2>
                      <a href=\"{{ path('category_list') }}\" class=\"btn btn-outline-secondary btn-sm\">
                          <i class=\"fas fa-list me-1\"></i> View List
                      </a>
                  </div>
                  
                  <div class=\"card-body\">
                      {{ form_start(form, {
                          'attr': {
                              'class': 'needs-validation',
                              'novalidate': true,
                              'enctype': 'multipart/form-data',
                              'id': 'categoryForm'
                          }
                      }) }}
                      
                      <div class=\"row g-3\">
                          <!-- Name Field -->
                          <div class=\"col-md-6\">
                              {{ form_label(form.name, 'Category Name', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                              <div class=\"input-group\">
                                  <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                                  {{ form_widget(form.name, {'attr': {
                                      'class': 'form-control rounded-end',
                                      'placeholder': 'Enter category name'
                                  }}) }}
                              </div>
                              {{ form_errors(form.name) }}
                          </div>
                          
                          <!-- Image Upload Field -->
                          <div class=\"col-md-6\">
                              {{ form_label(form.image, 'Category Image', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                              {{ form_widget(form.image, {'attr': {
                                  'class': 'form-control',
                                  'accept': 'image/*'
                              }}) }}
                              {{ form_errors(form.image) }}
                              <small class=\"form-text text-muted\">
                                  Recommended size: 500x500px (JPG/PNG/WebP, max 20MB)
                              </small>
                          </div>
                          
                          <!-- Description Field -->
                          <div class=\"col-12\">
                              {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                              {{ form_widget(form.description, {'attr': {
                                  'class': 'form-control',
                                  'rows': 3,
                                  'placeholder': 'Enter category description'
                              }}) }}
                              {{ form_errors(form.description) }}
                          </div>
                          
                          <!-- Current Image Preview -->
                          {% if category.image %}
                          <div class=\"col-12\">
                              <div class=\"border p-3 rounded bg-light\">
                                  <p class=\"fw-semibold mb-2\"><i class=\"fas fa-image me-1\"></i> Current Image:</p>
                                  <div class=\"d-flex align-items-center\">
                                      <img src=\"{{ asset(category.image) }}\" 
                                           class=\"img-thumbnail me-3\" 
                                           style=\"width: 120px; height: 120px; object-fit: cover;\" 
                                           alt=\"Current category image\">
                                      <p class=\"small text-muted mb-0\">
                                          Upload a new image to replace the current one.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          {% endif %}
                      </div>
                      
      <div class=\"d-flex justify-content-end gap-3 mt-4\">
    <a href=\"{{ path('category_list') }}\" class=\"btn btn-danger px-4\" id=\"cancelButton\">
        <i class=\"fas fa-times me-1\"></i> Cancel
    </a>
    <button type=\"submit\" class=\"btn btn-primary px-4\" id=\"submitButton\">
        <i class=\"fas {{ category.id ? 'fa-save' : 'fa-plus-circle' }} me-1\"></i>
        {{ category.id ? 'Update' : 'Create' }}
    </button>
</div>
                      
                      {{ form_end(form) }}
                  </div>
              </div>
          </div>
      </div>
  </div>
  {% endblock %}

  <!-- Your existing footer and closing tags remain exactly the same -->
{% endblock %}", "logistics/FormCategory.html.twig", "C:\\Users\\user\\Desktop\\metier+bundles qr code+pdf+fv+cmr+excel\\templates\\logistics\\FormCategory.html.twig");
    }
}
