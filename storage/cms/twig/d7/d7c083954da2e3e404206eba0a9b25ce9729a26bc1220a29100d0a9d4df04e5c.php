<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\OpenServer\domains\localhost/plugins/samuell/contenteditor/components/contenteditor/default.htm */
class __TwigTemplate_dae09d455587bdf32b8a83c9020b7b891474180a0a0c42c35fb37ec66f72ca31 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 1, "put" => 11, "for" => 15);
        $filters = array("escape" => 1, "raw" => 7, "json_encode" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'put', 'for'],
                ['escape', 'raw', 'json_encode'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 1)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        } else {
            echo "div";
        }
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 2)) {
            echo "data-fixture data-ce-tag=\"p\"";
        } else {
            echo "data-editable";
        }
        // line 3
        echo "    data-component=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 3, $this->source), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "file", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\"
    data-tools=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tools", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 6)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", [], "any", false, false, true, 7), 7, $this->source);
        echo "
</";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 8)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        } else {
            echo "div";
        }
        echo ">

";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "renderCount", [], "any", false, false, true, 10) == 1)) {
            // line 11
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'            );
            // line 12
            echo "    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "palettes", [], "any", false, false, true, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 16
                echo "            new ContentTools.Style('";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, true, 16)) ? (twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, true, 16)) : (twig_get_attribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, true, 16))), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "', ";
                echo json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["style"], "allowed_tags", [], "any", false, false, true, 16), 16, $this->source));
                echo "),
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ]);
    editor.toolbox().tools([
                                [
                                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "buttons", [], "any", false, false, true, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 22
                echo "                                    '";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 22, $this->source), "html", null, true);
                echo "',
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    ";
            // line 11
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 34
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 35
            echo "        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    ";
            // line 34
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost/plugins/samuell/contenteditor/components/contenteditor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 34,  171 => 35,  168 => 34,  166 => 11,  155 => 24,  146 => 22,  142 => 21,  137 => 18,  124 => 16,  120 => 15,  115 => 12,  112 => 11,  110 => 10,  101 => 8,  97 => 7,  89 => 6,  85 => 5,  81 => 4,  76 => 3,  69 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "D:\\OpenServer\\domains\\localhost/plugins/samuell/contenteditor/components/contenteditor/default.htm", "");
    }
}
