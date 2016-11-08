<?php

/* /home/ubuntu/workspace/plugins/rainlab/builder/components/recorddetails/default.htm */
class __TwigTemplate_998b359f8253a4e5d3dc95731009b1a389a77e882d0cce508526b4bed054ff6b extends Twig_Template
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
        $context["record"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "record", array());
        // line 2
        $context["displayColumn"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if ((isset($context["record"]) ? $context["record"] : null)) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["displayColumn"]) ? $context["displayColumn"] : null)), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["notFoundMessage"]) ? $context["notFoundMessage"] : null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/rainlab/builder/components/recorddetails/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set record = __SELF__.record %}
{% set displayColumn = __SELF__.displayColumn %}
{% set notFoundMessage = __SELF__.notFoundMessage %}

{% if record %}
    {{ attribute(record, displayColumn) }}
{% else %}
    {{ notFoundMessage }}
{% endif %}";
    }
}
