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

/* D:\OpenServer\domains\localhost/themes/kovry/partials/site/footer.htm */
class __TwigTemplate_638946bea5091e42c39f5b3640de930d1609b681a8d09799b241e4f07a1a5b97 extends \Twig\Template
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
        $tags = array("component" => 8);
        $filters = array("theme" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['theme'],
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
        echo "<footer>
        <div class=\"container text-white\">
          <div class=\"row\">
            <span class=\"col-xl-1 col-0\"></span>
            <div class=\"col-xl-10 col-12 footer-block d-flex\">
  
              <div class=\"footer-block-left\">
                ";
        // line 8
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "outro/logo.htm"        ;
        $context['__cms_component_params']['fixture'] = "strong"        ;
        $context['__cms_component_params']['class'] = "text-light"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "  
                ";
        // line 10
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "outro/lowlogo.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "
  
                <!-- <div class=\"left-block-rules\">
                  <small>Правила и условия</small>
                  <small>Политика конфеденциальности</small>
                </div> -->
  
                <small class=\"Copyright\">Copyright © 2021 . KoverStore. All rights reserved.</small>
              </div>
  
              <div class=\"footer-block-right ml-auto d-flex flex-column text-right\">
                <span>Наши соц сети</span>
  
                <a href=\"#\">Facebook   <img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/facebook.svg");
        echo "\"></a>
                <a href=\"#\">Twitter   <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/twitter.svg");
        echo "\"></a>
                <a href=\"#\">Instagram   <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/instagram.svg");
        echo "\"></a>
  
                <div class=\"rules d-flex flex-column\">
                  <small>Правила и условия</small>
                  <small>Политика конфеденциальности</small>
                </div>
              </div>
  
            </div>
            <span class=\"col-xl-1 col-0\"></span>
          </div>
        </div>
      </footer>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost/themes/kovry/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  106 => 25,  102 => 24,  87 => 11,  81 => 10,  78 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "D:\\OpenServer\\domains\\localhost/themes/kovry/partials/site/footer.htm", "");
    }
}
