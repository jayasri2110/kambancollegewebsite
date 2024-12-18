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

/* themes/kamban/kcas_theme/page.html.twig */
class __TwigTemplate_742e46e28ed4a360ed950af6b415e641 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <head-placeholder token=\"";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 4, $this->source), "html", null, true);
        yield "\"></head-placeholder>
    <title>";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 5, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 6, $this->source), "html", null, true);
        yield "\"></css-placeholder>
    <js-placeholder token=\"";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 7, $this->source), "html", null, true);
        yield "\"></js-placeholder>
    <!-- Ensure the correct path for the external CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source), "html", null, true);
        yield "/css/external.css\">
</head>
<body>

   <!-- Top Header -->
<header class=\"top-header\">
    ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 15)) {
            // line 16
            yield "        <div class=\"container\">
            <ul class=\"top-header-menu\">
                ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            yield "
            </ul>
        </div>
    ";
        }
        // line 22
        yield "</header>


    <!-- Logo and Banner Header -->
    <header class=\"logo-header\">
        ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo_header", [], "any", false, false, true, 27)) {
            // line 28
            yield "            <div class=\"container\">
                ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo_header", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 32
        yield "    </header>

    <!-- Menu Header with Dropdowns -->
    <nav class=\"menu-header\">
        ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu_header", [], "any", false, false, true, 36)) {
            // line 37
            yield "            <div class=\"container\">
                ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu_header", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 41
        yield "    </nav>

    <!-- Slider Section -->
    <section class=\"slider\">
        ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 45)) {
            // line 46
            yield "            <div class=\"container slider-wrapper\">
                ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 50
        yield "    </section>

    <!-- Main Content with Left and Right Sidebars -->
    <section class=\"main-content\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Left Sidebar -->
                ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 57)) {
            // line 58
            yield "                    <aside class=\"sidebar-left col-md-3\">
                        ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            yield "
                    </aside>
                ";
        }
        // line 62
        yield "
                <!-- Main Content -->
                <div class=\"content-section col-md-6\">
                    ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        yield "
                </div>

                <!-- Right Sidebar -->
                ";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 69)) {
            // line 70
            yield "                    <aside class=\"sidebar-right col-md-3\">
                        ";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            yield "
                    </aside>
                ";
        }
        // line 74
        yield "            </div>
        </div>
    </section>
    <div class=\"info-bits-container\">
  <div class=\"recent-posts\">
    ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "recent_posts", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        yield "
  </div>
  <div class=\"events-activities\">
    ";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "events_activities", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        yield "
  </div>
</div>


    <!-- Gallery of 6 Images -->
    <div class=\"gallery\">
  <div class=\"gallery-title\">
    ";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "gallery_title", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        yield "
  </div>
  <div class=\"gallery-top\">
    <div class=\"block gallery-left\">
      ";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "gallery_top_left", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        yield "
    </div>
    <div class=\"block gallery-center\">
      ";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "gallery_top_center", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        yield "
    </div>
    <div class=\"block gallery-right\">
      ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "gallery_top_right", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        yield "
    </div>
  </div>
</div>


    <!-- Blue Bottom Section -->
<div class=\"blue-bottom\">
  <div class=\"blue-bottom-blocks\">
    <div class=\"block\">
      ";
        // line 110
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blue_bottom_block_1", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        yield "
    </div>
    <div class=\"block\">
      ";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blue_bottom_block_2", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        yield "
    </div>
    <div class=\"block\">
      ";
        // line 116
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blue_bottom_block_3", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        yield "
    </div>
    <div class=\"block\">
      ";
        // line 119
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blue_bottom_block_4", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        yield "
    </div>
  </div>
</div>



<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"col-md-3\">
            ";
        // line 129
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        yield "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 132
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
        yield "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 135
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        yield "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 138
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        yield "
        </div>
    </div>
</footer>
<copy block>
  <div class=\"copy\">
  ";
        // line 144
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copy", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        yield "
  </div>



    <js-bottom-placeholder token=\"";
        // line 149
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 149, $this->source), "html", null, true);
        yield "\"></js-bottom-placeholder>
</body>
</html>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["placeholder_token", "head_title", "directory", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/kamban/kcas_theme/page.html.twig";
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
        return array (  305 => 149,  297 => 144,  288 => 138,  282 => 135,  276 => 132,  270 => 129,  257 => 119,  251 => 116,  245 => 113,  239 => 110,  226 => 100,  220 => 97,  214 => 94,  207 => 90,  196 => 82,  190 => 79,  183 => 74,  177 => 71,  174 => 70,  172 => 69,  165 => 65,  160 => 62,  154 => 59,  151 => 58,  149 => 57,  140 => 50,  134 => 47,  131 => 46,  129 => 45,  123 => 41,  117 => 38,  114 => 37,  112 => 36,  106 => 32,  100 => 29,  97 => 28,  95 => 27,  88 => 22,  81 => 18,  77 => 16,  75 => 15,  66 => 9,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/kamban/kcas_theme/page.html.twig", "C:\\xampp\\htdocs\\kambancollege\\themes\\kamban\\kcas_theme\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 4, "safe_join" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'safe_join'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
