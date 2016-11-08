<?php

/* /home/ubuntu/workspace/themes/demo/pages/categories.htm */
class __TwigTemplate_e887bcaa82c8f55c9df19b110f8b9bfcfbf36b3674dc49ce7c95fe8e40161e5e extends Twig_Template
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
        echo "<div id=\"menu\">
<ul>
                    
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "
  </ul>
</div>
 
 
 
 <div id=\"content\">
    
   ";
        // line 13
        $context["record"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "record", array());
        // line 14
        $context["displayColumn"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "displayColumn", array());
        // line 15
        $context["notFoundMessage"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "notFoundMessage", array());
        // line 16
        echo "
";
        // line 17
        if ((isset($context["record"]) ? $context["record"] : null)) {
            // line 18
            echo "    
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "       <a href=\"/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "slug", array()), "html", null, true);
                echo "\"><h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</h2></a>
    
    <img src=";
                // line 22
                echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()));
                echo ">
    <p> ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "price", array()), "html", null, true);
                echo " </p>
       
       
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 28
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["notFoundMessage"]) ? $context["notFoundMessage"] : null), "html", null, true);
            echo "
";
        }
        // line 30
        echo "                    </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/demo/pages/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  68 => 23,  64 => 22,  56 => 20,  52 => 19,  49 => 18,  47 => 17,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"menu\">
<ul>
                    
{% component 'builderList' %}

  </ul>
</div>
 
 
 
 <div id=\"content\">
    
   {% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    
    {%for item in record.items%}
       <a href=\"/product/{{item.slug}}\"><h2>{{ item.name}}</h2></a>
    
    <img src={{record.image|media}}>
    <p> {{record.price}} </p>
       
       
       {%endfor%}
{% else %}
    {{ notFoundMessage }}
{% endif %}
                    </div>";
    }
}
