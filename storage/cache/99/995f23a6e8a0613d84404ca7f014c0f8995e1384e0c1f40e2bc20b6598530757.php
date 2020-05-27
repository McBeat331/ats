<?php

/* ToolsShop/template/extension/module/carousel.twig */
class __TwigTemplate_e0ef0e12158e0af8e4091d14fa389eb9d63d6db212bbcf71a41dfee3b0e1f382 extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"banners-slider-carousel box\">
\t<div class=\"container\">
\t<div class=\"box-heading\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
\t<div class=\"carousel-block\">
\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"prev fa fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"next fa fa-arrow-right\">&nbsp;</a>
\t\t</div>
\t\t<div class=\"product-carousel\" id=\"module-";
        // line 9
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "-carousel\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 11
            echo "\t\t\t\t<div class=\"slider-item\">
\t\t\t\t\t<div class=\"product-block\">
\t\t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t";
            // line 14
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 15
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" /></a>
\t\t\t\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" />
\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</div>
\t</div>
  \t</div>
</div>
<span class=\"module_default_width\" style=\"display:none; visibility:hidden\"></span>";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  67 => 19,  59 => 17,  49 => 15,  47 => 14,  42 => 11,  38 => 10,  34 => 9,  25 => 3,  19 => 1,);
    }
}
/* <div id="carousel-{{ module }}" class="banners-slider-carousel box">*/
/* 	<div class="container">*/
/* 	<div class="box-heading">{{ heading_title }}</div>*/
/* 	<div class="carousel-block">*/
/* 		<div class="customNavigation">*/
/* 			<a class="prev fa fa-arrow-left">&nbsp;</a>*/
/* 			<a class="next fa fa-arrow-right">&nbsp;</a>*/
/* 		</div>*/
/* 		<div class="product-carousel" id="module-{{ module }}-carousel">*/
/* 			{% for banner in banners %}*/
/* 				<div class="slider-item">*/
/* 					<div class="product-block">*/
/* 						<div class="product-block-inner">*/
/* 							{% if banner.link %}*/
/* 							<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" /></a>*/
/* 							{% else %}*/
/* 							<img src="{{ banner.image }}" alt="{{ banner.title }}" />*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/*   	</div>*/
/* </div>*/
/* <span class="module_default_width" style="display:none; visibility:hidden"></span>*/
