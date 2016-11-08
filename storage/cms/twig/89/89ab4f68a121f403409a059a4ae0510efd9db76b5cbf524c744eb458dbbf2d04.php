<?php

/* /home/ubuntu/workspace/themes/demo/pages/hom.htm */
class __TwigTemplate_589433cc15b6a1e2efe9dd5cf338b188e97b7eb478fcef1ab558aa7e6053a08c extends Twig_Template
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
        echo "<div id=\"navigation\">
            </div>
                <div id=\"menu\">
                  <ul>
                      ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "                  </ul>
               </div>
                   <div id=\"content\">
                   ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                        
                     <a href=\"/product/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "slug", array()), "html", null, true);
            echo "\"> <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</h2></a> 
                       
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                     </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/demo/pages/hom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  41 => 11,  38 => 10,  34 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"navigation\">
            </div>
                <div id=\"menu\">
                  <ul>
                      {% component 'builderList' %}
                  </ul>
               </div>
                   <div id=\"content\">
                   {%for item in items %}
                        
                     <a href=\"/product/{{item.slug}}\"> <h2>{{item.name}}</h2></a> 
                       
                   {%endfor%}
                     </div>";
    }
}
