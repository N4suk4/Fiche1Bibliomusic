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

/* navbar.html.twig */
class __TwigTemplate_7d660bbd6c399a40f2dc3cfa46b81075 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        $macros["component"] = $this->macros["component"] = $this->loadTemplate("components.html.twig", "navbar.html.twig", 1)->unwrap();
        // line 2
        yield "<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Music Library</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                ";
        // line 10
        yield CoreExtension::callMacro($macros["component"], "macro_nav_item", ["Artists", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_index"), (is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", ["_route"], "method", false, false, false, 13)) && is_string($__internal_compile_1 = "app_artist") && str_starts_with($__internal_compile_0, $__internal_compile_1))], 10, $context, $this->getSourceContext());
        // line 14
        yield "
                ";
        // line 15
        yield CoreExtension::callMacro($macros["component"], "macro_nav_item", ["Releases", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_release_index"), (is_string($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "attributes", [], "any", false, false, false, 18), "get", ["_route"], "method", false, false, false, 18)) && is_string($__internal_compile_3 = "app_release") && str_starts_with($__internal_compile_2, $__internal_compile_3))], 15, $context, $this->getSourceContext());
        // line 19
        yield "
                ";
        // line 20
        yield CoreExtension::callMacro($macros["component"], "macro_nav_item", ["Tracks", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_index"), (is_string($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "attributes", [], "any", false, false, false, 23), "get", ["_route"], "method", false, false, false, 23)) && is_string($__internal_compile_5 = "app_track") && str_starts_with($__internal_compile_4, $__internal_compile_5))], 20, $context, $this->getSourceContext());
        // line 24
        yield "
            </ul>

            <ul class=\"navbar-nav\">
                ";
        // line 28
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 29
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a>
                    </li>
                ";
        } else {
            // line 36
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "firstname", [], "any", false, false, false, 38), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "lastname", [], "any", false, false, false, 38), "html", null, true);
            yield "
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 42
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                    </li>
                ";
        }
        // line 45
        yield "            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navbar.html.twig";
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
        return array (  120 => 45,  114 => 42,  105 => 38,  101 => 36,  95 => 33,  89 => 30,  86 => 29,  84 => 28,  78 => 24,  76 => 23,  75 => 20,  72 => 19,  70 => 18,  69 => 15,  66 => 14,  64 => 13,  63 => 10,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"components.html.twig\" as component %}
<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Music Library</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                {{ component.nav_item(
                    'Artists',
                    path('app_artist_index'),
                    app.request.attributes.get('_route') starts with 'app_artist'
                ) }}
                {{ component.nav_item(
                    'Releases',
                    path('app_release_index'),
                    app.request.attributes.get('_route') starts with 'app_release'
                ) }}
                {{ component.nav_item(
                    'Tracks',
                    path('app_track_index'),
                    app.request.attributes.get('_route') starts with 'app_track'
                ) }}
            </ul>

            <ul class=\"navbar-nav\">
                {% if not is_granted('ROLE_USER') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            {{ app.user.firstname }} {{ app.user.lastname }}
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Logout</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>", "navbar.html.twig", "/Users/sebastienbenoit/Desktop/EPSI/SN2/E6/Fiche1Bibliomusic/templates/navbar.html.twig");
    }
}
