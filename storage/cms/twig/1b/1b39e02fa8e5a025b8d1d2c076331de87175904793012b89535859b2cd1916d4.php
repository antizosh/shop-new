<?php

/* /home/ubuntu/workspace/themes/demo/pages/product.htm */
class __TwigTemplate_cc99323670e65e5406f09cb4383d601f95fa8b67e6ddf5e821d704c95a45a230 extends Twig_Template
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
                  ";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "                 </div>
                    <div id=\"content\">
                        ";
        // line 7
        $context["record"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "record", array());
        // line 8
        echo "                        ";
        $context["displayColumn"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "displayColumn", array());
        // line 9
        echo "                        ";
        $context["notFoundMessage"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "notFoundMessage", array());
        // line 10
        echo "
                        ";
        // line 11
        if ((isset($context["record"]) ? $context["record"] : null)) {
            // line 12
            echo "                            <div class=\"col-md-12\">
                            <div class=\"col-md-6\" class=\"item\">
                              <img src=\"";
            // line 14
            echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()));
            echo "\" class=\"img-responsive\">
                             </div>
                             </div>
                             <div class=\"col-md-6\">
                            <h1>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["displayColumn"]) ? $context["displayColumn"] : null)), "html", null, true);
            echo "</h1>
                            <p class=\"item_product\"> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "description", array()), "html", null, true);
            echo " </p>
                            <p class=\"item_product\"> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "price", array()), "html", null, true);
            echo " </p>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video_url", array()), "html", null, true);
            echo "
                            <iframe width=\"560\" height=\"315\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video_url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
                           </div> 
                        
                                ";
        } else {
            // line 26
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["notFoundMessage"]) ? $context["notFoundMessage"] : null), "html", null, true);
            echo "
                                    ";
        }
        // line 28
        echo "                    </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/demo/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  79 => 26,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  49 => 14,  45 => 12,  43 => 11,  40 => 10,  37 => 9,  34 => 8,  32 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"navigation\">
              </div>
                <div id=\"menu\">
                  {% component 'builderList' %}
                 </div>
                    <div id=\"content\">
                        {% set record = builderDetails.record %}
                        {% set displayColumn = builderDetails.displayColumn %}
                        {% set notFoundMessage = builderDetails.notFoundMessage %}

                        {% if record %}
                            <div class=\"col-md-12\">
                            <div class=\"col-md-6\" class=\"item\">
                              <img src=\"{{record.image|media}}\" class=\"img-responsive\">
                             </div>
                             </div>
                             <div class=\"col-md-6\">
                            <h1>{{ attribute(record, displayColumn) }}</h1>
                            <p class=\"item_product\"> {{record.description}} </p>
                            <p class=\"item_product\"> {{record.price}} </p>
                            {{record.video_url}}
                            <iframe width=\"560\" height=\"315\" src=\"{{record.video_url}}\" frameborder=\"0\" allowfullscreen></iframe>
                           </div> 
                        
                                {% else %}
                            {{ notFoundMessage }}
                                    {% endif %}
                    </div>";
    }
}
