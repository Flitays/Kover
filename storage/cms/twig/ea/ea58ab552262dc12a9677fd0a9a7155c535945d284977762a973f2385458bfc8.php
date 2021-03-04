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

/* D:\OpenServer\domains\localhost/themes/kovry/pages/home.htm */
class __TwigTemplate_d4d9d121979646735d67c1ae5687edaca551970b7ee08504489751cf817c0766 extends \Twig\Template
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
        $tags = array("component" => 2);
        $filters = array("theme" => 17);
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
        echo "<div class=\"text-center pt-4 logo-tag\">
  ";
        // line 2
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "title/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['class'] = "mt-5 mb-3 text-white"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "
  ";
        // line 4
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "title/subtitle.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "text-white"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "  <button type=\"button\" class=\"btn btn-warning font-weight-bold mt-5 mb-5\"><a class=\"text-white\" target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?tt=50b5c43057\">В КАТАЛОГ</a></button>
</div>

<main class=\"bg-white text-md-center pt-5 mt-3 pb-4 text-center\">
  ";
        // line 9
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "main/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['class'] = "title_main"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "
  ";
        // line 11
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "main/subtitle.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "after-header"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "
  <hr>

  <div class=\"row\">
    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[17][]=7804&tt=50b5c43057\"><img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item1.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 19
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_1.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "      </small><br>
      <div class=\"d-flex select text-center\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[17][]=7804&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[17][]=7806&tt=50b5c43057\"><img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item2.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 30
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_2.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 31
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[17][]=7806&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[17][]=7807&tt=50b5c43057\"><img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item3.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 41
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_3.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[17][]=7807&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23001&tt=50b5c43057\"><img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item4.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 52
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_4.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 53
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23001&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23006&tt=50b5c43057\"><img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item1.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 63
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_5.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 64
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23006&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23021&tt=50b5c43057\"><img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item2.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 74
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_6.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 75
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23021&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23021&tt=50b5c43057\"><img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item3.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 85
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_7.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 86
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23021&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23014&tt=50b5c43057\"><img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item4.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 96
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_8.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 97
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23014&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23010&tt=50b5c43057\"><img src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item1.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 107
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_9.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 108
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23010&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23007&tt=50b5c43057\"><img src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item2.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 118
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_10.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 119
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23007&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23019&tt=50b5c43057\"><img src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item3.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 129
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_11.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 130
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23019&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>

    <div class=\"item col-xl-3 col-lg-4 col-md-6 col-sm-12 text-left text-md-center text-lg-left\">
      <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23019&tt=50b5c43057\"><img src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/card-item4.png");
        echo "\"></a><br>
      <small class=\"type\">
        ";
        // line 140
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "cards/card_12.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['class'] = "type"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 141
        echo "      </small><br>
      <div class=\"d-flex select\">
        <small class=\"sircle\"></small>
        <a target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?&fSt=filter&prop[22][]=23015&tt=50b5c43057\"></strong><strong>Выбрать</strong></a>
      </div>
    </div>
  </div>
</main>

<div class=\"text-center\">
  <button type=\"button\" class=\"show-all btn btn-warning text-white font-weight-bold mt-5 mb-5\"><a class=\"text-white\" target=\"_blank\" href=\"https://xn--24-6kcaozhd0abqe.xn--p1ai/category/index.html?tt=50b5c43057\">СМОТРЕТЬ ВСЕ</a></button>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost/themes/kovry/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 141,  359 => 140,  354 => 138,  344 => 130,  337 => 129,  332 => 127,  322 => 119,  315 => 118,  310 => 116,  300 => 108,  293 => 107,  288 => 105,  278 => 97,  271 => 96,  266 => 94,  256 => 86,  249 => 85,  244 => 83,  234 => 75,  227 => 74,  222 => 72,  212 => 64,  205 => 63,  200 => 61,  190 => 53,  183 => 52,  178 => 50,  168 => 42,  161 => 41,  156 => 39,  146 => 31,  139 => 30,  134 => 28,  124 => 20,  117 => 19,  112 => 17,  105 => 12,  98 => 11,  95 => 10,  88 => 9,  82 => 5,  75 => 4,  72 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "D:\\OpenServer\\domains\\localhost/themes/kovry/pages/home.htm", "");
    }
}
