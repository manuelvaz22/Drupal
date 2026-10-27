<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/themes/claro/templates/classy/misc/help-section.html.twig */
class __TwigTemplate_cf4e91d14713d6e0b96a7276c0c2edfc extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "<div class=\"clearfix\">
  <h2 id=\"";
        // line 17
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId(($context["plugin_id"] ?? null)), "html", null, true);
        yield "\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h2>
  <p>";
        // line 18
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
        yield "</p>
  ";
        // line 19
        if ((($tmp = ($context["links"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "    ";
            // line 21
            yield "    ";
            $context["size"] = (int) floor((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["links"] ?? null)) / 4));
            // line 22
            yield "    ";
            if (((($context["size"] ?? null) * 4) < Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["links"] ?? null)))) {
                // line 23
                yield "      ";
                $context["size"] = (($context["size"] ?? null) + 1);
                // line 24
                yield "    ";
            }
            // line 25
            yield "
    ";
            // line 27
            yield "    ";
            $context["count"] = 0;
            // line 28
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 29
                yield "      ";
                if ((($context["count"] ?? null) == 0)) {
                    // line 30
                    yield "        ";
                    // line 31
                    yield "        <div class=\"layout-column layout-column--quarter\"><ul>
      ";
                }
                // line 33
                yield "      <li>";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["link"], "html", null, true);
                yield "</li>
      ";
                // line 34
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 35
                yield "      ";
                if ((($context["count"] ?? null) >= ($context["size"] ?? null))) {
                    // line 36
                    yield "        ";
                    // line 37
                    yield "        ";
                    $context["count"] = 0;
                    // line 38
                    yield "        </ul></div>
      ";
                }
                // line 40
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 41
            yield "
    ";
            // line 43
            yield "    ";
            if ((($context["count"] ?? null) > 0)) {
                // line 44
                yield "      </ul></div>
    ";
            }
            // line 46
            yield "  ";
        } else {
            // line 47
            yield "    <p>";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "</p>
  ";
        }
        // line 49
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["plugin_id", "title", "description", "links", "empty"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/classy/misc/help-section.html.twig";
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
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  139 => 49,  133 => 47,  130 => 46,  126 => 44,  123 => 43,  120 => 41,  113 => 40,  109 => 38,  106 => 37,  104 => 36,  101 => 35,  99 => 34,  94 => 33,  90 => 31,  88 => 30,  85 => 29,  80 => 28,  77 => 27,  74 => 25,  71 => 24,  68 => 23,  65 => 22,  62 => 21,  60 => 20,  58 => 19,  54 => 18,  48 => 17,  45 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/classy/misc/help-section.html.twig", "/var/www/html/web/core/themes/claro/templates/classy/misc/help-section.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 19, "set" => 21, "for" => 28];
        static $filters = ["escape" => 17, "clean_id" => 17, "length" => 21];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "set", 2 => "for"],
                [0 => "escape", 1 => "clean_id", 2 => "length"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
