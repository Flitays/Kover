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

/* D:\OpenServer\domains\localhost/themes/kovry/layouts/default.htm */
class __TwigTemplate_392bd9b7f4a99af52a914e474cc987cdbc2d66f86e06cc76cc7f05ecaee025bb extends \Twig\Template
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
        $tags = array("styles" => 11, "partial" => 18, "page" => 22, "framework" => 31, "scripts" => 32);
        $filters = array("theme" => 7, "escape" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['theme', 'escape'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/favicon.svg");
        echo "\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/css/style.css");
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</title>
    ";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 12
        echo "</head>

<body>



    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "
    <div class=\"logo\"></div>
    <div class=\"container\">
        ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "    </div>

    ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "

    <!-- Scripts -->
    <script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/js/script.js");
        echo "\" charset=\"utf-8\"></script>

    ";
        // line 31
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 32
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 33
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost/themes/kovry/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  134 => 32,  123 => 31,  118 => 29,  113 => 26,  109 => 25,  105 => 23,  103 => 22,  98 => 19,  94 => 18,  86 => 12,  83 => 11,  79 => 10,  75 => 9,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "D:\\OpenServer\\domains\\localhost/themes/kovry/layouts/default.htm", "");
    }
}
