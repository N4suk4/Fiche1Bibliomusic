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

/* components.html.twig */
class __TwigTemplate_c1cbde4f99b49fab1de04df13f95fc05 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components.html.twig"));

        // line 18
        yield "
";
        // line 22
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_card($__title__ = null, $__subtitle__ = null, $__href__ = null, $__img_src__ = null, $__img_alt__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "title" => $__title__,
            "subtitle" => $__subtitle__,
            "href" => $__href__,
            "img_src" => $__img_src__,
            "img_alt" => $__img_alt__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "card"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "card"));

            // line 2
            yield "    <div class=\"card\">
        <div class=\"ratio ratio-1x1\">
            <img src=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img_src"]) || array_key_exists("img_src", $context) ? $context["img_src"] : (function () { throw new RuntimeError('Variable "img_src" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img_alt"]) || array_key_exists("img_alt", $context) ? $context["img_alt"] : (function () { throw new RuntimeError('Variable "img_alt" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\" class=\"card-img-top object-fit-cover\">
        </div>

        <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "</h5>
            
            ";
            // line 10
            if ( !(null === (isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new RuntimeError('Variable "subtitle" does not exist.', 10, $this->source); })()))) {
                // line 11
                yield "                <p class=\"card-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new RuntimeError('Variable "subtitle" does not exist.', 11, $this->source); })()), "html", null, true);
                yield "</p>
            ";
            }
            // line 13
            yield "
            ";
            // line 14
            yield CoreExtension::callMacro($macros["_self"], "macro_btn", ["Show", "primary", (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function macro_btn($__label__ = null, $__theme__ = null, $__href__ = null, $__size__ = "md", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "label" => $__label__,
            "theme" => $__theme__,
            "href" => $__href__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "btn"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "btn"));

            // line 20
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 20, $this->source); })()), "html", null, true);
            yield " btn-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "</a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function macro_nav_item($__label__ = null, $__href__ = null, $__active__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "label" => $__label__,
            "href" => $__href__,
            "active" => $__active__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nav_item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nav_item"));

            // line 24
            yield "    <li class=\"nav-item\">
        <a 
            class=\"nav-link ";
            // line 26
            yield (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 26, $this->source); })())) ? ("active") : (""));
            yield "\" 
            aria-current=\"page\" 
            href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "\"
        >";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "</a>
    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components.html.twig";
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
        return array (  206 => 29,  202 => 28,  197 => 26,  193 => 24,  173 => 23,  152 => 20,  131 => 19,  115 => 14,  112 => 13,  106 => 11,  104 => 10,  99 => 8,  90 => 4,  86 => 2,  64 => 1,  52 => 22,  49 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro card(title, subtitle, href, img_src, img_alt) %}
    <div class=\"card\">
        <div class=\"ratio ratio-1x1\">
            <img src=\"{{ img_src }}\" alt=\"{{ img_alt }}\" class=\"card-img-top object-fit-cover\">
        </div>

        <div class=\"card-body\">
            <h5 class=\"card-title\">{{ title }}</h5>
            
            {% if subtitle is not null %}
                <p class=\"card-text\">{{ subtitle }}</p>
            {% endif %}

            {{ _self.btn('Show', 'primary', href) }}
        </div>
    </div>
{% endmacro %}

{% macro btn(label, theme, href, size = \"md\") %}
    <a href=\"{{ href }}\" class=\"btn btn-{{ theme }} btn-{{ size }}\">{{ label }}</a>
{% endmacro %}

{% macro nav_item(label, href, active = false) %}
    <li class=\"nav-item\">
        <a 
            class=\"nav-link {{ active ? 'active':'' }}\" 
            aria-current=\"page\" 
            href=\"{{ href }}\"
        >{{ label }}</a>
    </li>
{% endmacro %}", "components.html.twig", "/Users/sebastienbenoit/Desktop/EPSI/SN2/E6/Fiche1Bibliomusic/templates/components.html.twig");
    }
}
