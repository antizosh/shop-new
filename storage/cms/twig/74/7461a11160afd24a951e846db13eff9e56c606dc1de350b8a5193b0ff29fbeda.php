<?php

/* /home/ubuntu/workspace/themes/demo/partials/header.htm */
class __TwigTemplate_f3705c705e1b5171dc18c929ef4d4e080ee25d06161ff0772965c2cca2881a62 extends Twig_Template
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
        echo "<div id=\"container\">
          <div id=\"header\">
            <img class='logo'  src=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.png");
        echo "\"> <h1>Интернет магазин Крокодил</h1>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/demo/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"container\">
          <div id=\"header\">
            <img class='logo'  src=\"{{'assets/images/logo.png'|theme}}\"> <h1>Интернет магазин Крокодил</h1>
        </div>";
    }
}
