<?php

/* /home/ubuntu/workspace/themes/demo/layouts/my.htm */
class __TwigTemplate_7b13b7fdeb140844bfd0bc9d7e8d6240ec9cb516199dadcaf7e73f714fdceae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
      <title> Интернет магазин Крокодил
          </title>
          <link href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
          <link href=\"https://fonts.googleapis.com/css?family=Lobster\" rel=\"stylesheet\">
          <link href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        
        ";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "      </head> 
      <body>
          
          <ul class=\"menu\">
              <li><a href=\"/hom\">Главная</a></li>
                     <li><a href=\"\">Вход</a></li>
                         <li><a href=\"\">Регистрация</a></li>
                             <li><a href=\"/basket\">Корзина</a></li>
          </ul>
          
          
          ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "          ";
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 26
        echo "          ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "      
       <!-- Scripts -->
        <script src=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 32
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 33
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 34
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/demo/layouts/my.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  92 => 33,  85 => 32,  81 => 31,  77 => 30,  73 => 29,  69 => 27,  64 => 26,  61 => 25,  57 => 24,  44 => 13,  41 => 12,  36 => 10,  32 => 9,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
      <title> Интернет магазин Крокодил
          </title>
          <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
          <link href=\"https://fonts.googleapis.com/css?family=Lobster\" rel=\"stylesheet\">
          <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        
        {% styles %}
      </head> 
      <body>
          
          <ul class=\"menu\">
              <li><a href=\"/hom\">Главная</a></li>
                     <li><a href=\"\">Вход</a></li>
                         <li><a href=\"\">Регистрация</a></li>
                             <li><a href=\"/basket\">Корзина</a></li>
          </ul>
          
          
          {%partial 'header'%}
          {%page%}
          {%partial 'footer'%}
      
       <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>";
    }
}
