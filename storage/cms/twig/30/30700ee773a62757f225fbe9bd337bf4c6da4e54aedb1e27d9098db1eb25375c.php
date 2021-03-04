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

/* D:\OpenServer\domains\localhost/themes/kovry/partials/site/header.htm */
class __TwigTemplate_18169fb2330ac7e9b620e15ceaa6c34d80d00754ca1082af5ec193dff54d00b2 extends \Twig\Template
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
        $tags = array("component" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
        echo "<!-- Nav -->
<header class=\"d-flex container\">

    ";
        // line 4
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/logo.htm"        ;
        $context['__cms_component_params']['fixture'] = "strong"        ;
        $context['__cms_component_params']['class'] = "text-light logo-brand"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "
    ";
        // line 6
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/number.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "ml-auto text-white phone"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost/themes/kovry/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 7,  77 => 6,  74 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "D:\\OpenServer\\domains\\localhost/themes/kovry/partials/site/header.htm", "");
    }
}
