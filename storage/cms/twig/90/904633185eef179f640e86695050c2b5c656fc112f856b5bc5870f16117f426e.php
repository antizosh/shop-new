<?php

/* /home/ubuntu/workspace/themes/demo/layouts/fallback.htm */
class __TwigTemplate_a0e145f85d9018970135918666d06945b7fec087380c7ea24b719c080bb08adc extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% page %}";
    }
}
