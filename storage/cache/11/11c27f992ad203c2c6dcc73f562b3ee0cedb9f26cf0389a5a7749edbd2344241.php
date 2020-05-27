<?php

/* ToolsShop/template/common/home.twig */
class __TwigTemplate_541d4a8312f57d741ad40133e19b61422800605a9795c6bfc2ef794762275be4 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"content-top\">
\t";
        // line 3
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
</div>
<div class=\"row home_row\">
\t";
        // line 6
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 7
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 9
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t\t";
        // line 15
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t</div>
    ";
        // line 17
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>


";
        // line 21
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "


<script type=\"text/javascript\"><!--

\$(document).ready(function(){
\t\$('#testimonial-carousel').owlCarousel({
\t\titems: 1,
\t\tsingleItem: true,
\t\tnavigation: false,
\t\tpagination: true,
\t\tautoPlay: true
\t});
\t// Custom Navigation Events
\t\$(\".cztestimonial_next\").click(function(){
\t\t\$('#testimonial-carousel').trigger('owl.next');
\t})
\t\$(\".cztestimonial_prev\").click(function(){
\t\t\$('#testimonial-carousel').trigger('owl.prev');
\t});\t
\t\t
\t \$('#ourcategory-carousel').owlCarousel({
\t\titems: 6,
\t\tsingleItem: false,
\t\tnavigation: false,
\t\titemsDesktop : [1199,4], 
\t\titemsDesktopSmall : [991,3],
\t\titemsTablet : [767,3], 
\t\titemsTabletSmall: [500,2], 
\t\titemsMobile : [400,1],
\t\tpagination: true
\t});
});\t
--></script>";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  64 => 17,  59 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  30 => 6,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="content-top">*/
/* 	{{ content_top }}*/
/* </div>*/
/* <div class="row home_row">*/
/* 	{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/* 		{{ content_bottom }}*/
/* 	</div>*/
/*     {{ column_right }}*/
/* </div>*/
/* */
/* */
/* {{ footer }}*/
/* */
/* */
/* <script type="text/javascript"><!--*/
/* */
/* $(document).ready(function(){*/
/* 	$('#testimonial-carousel').owlCarousel({*/
/* 		items: 1,*/
/* 		singleItem: true,*/
/* 		navigation: false,*/
/* 		pagination: true,*/
/* 		autoPlay: true*/
/* 	});*/
/* 	// Custom Navigation Events*/
/* 	$(".cztestimonial_next").click(function(){*/
/* 		$('#testimonial-carousel').trigger('owl.next');*/
/* 	})*/
/* 	$(".cztestimonial_prev").click(function(){*/
/* 		$('#testimonial-carousel').trigger('owl.prev');*/
/* 	});	*/
/* 		*/
/* 	 $('#ourcategory-carousel').owlCarousel({*/
/* 		items: 6,*/
/* 		singleItem: false,*/
/* 		navigation: false,*/
/* 		itemsDesktop : [1199,4], */
/* 		itemsDesktopSmall : [991,3],*/
/* 		itemsTablet : [767,3], */
/* 		itemsTabletSmall: [500,2], */
/* 		itemsMobile : [400,1],*/
/* 		pagination: true*/
/* 	});*/
/* });	*/
/* --></script>*/
