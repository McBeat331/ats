<?php

/* ToolsShop/template/extension/module/blogger.twig */
class __TwigTemplate_a6b68a2c36f9a0232e7b024bfcb0be39a42c6c8908c68e845aab084def4034da extends Twig_Template
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
        echo "<div class=\"box blogs\">
\t<div class=\"container\">
\t\t";
        // line 3
        $context["sliderFor"] = 4;
        // line 4
        echo "\t\t";
        $context["blogCount"] = twig_length_filter($this->env, (isset($context["blogs"]) ? $context["blogs"] : null));
        // line 5
        echo "\t
\t\t<div class=\"box-head\">
\t\t\t<div class=\"box-heading\">";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t";
        // line 10
        if (((isset($context["blogCount"]) ? $context["blogCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            // line 11
            echo "\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t<a class=\"fa prev czblog_prev\"></a>
\t\t\t\t\t<a class=\"fa next czblog_next\"></a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 16
        echo "\t\t\t
\t\t\t<div class=\"box-product ";
        // line 17
        if (((isset($context["blogCount"]) ? $context["blogCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo " owl-carousel blogcarousel ";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if (((isset($context["blogCount"]) ? $context["blogCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "blog-carousel";
        } else {
            echo "blog-grid";
        }
        echo "\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo " 
\t\t\t\t\t<div class=\"";
            // line 19
            if (((isset($context["blogCount"]) ? $context["blogCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "blog-item";
            } else {
                echo " product-items";
            }
            echo "\">
\t\t\t\t\t\t<div class=\"product-block\">
\t\t\t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t\t";
            // line 22
            if ($this->getAttribute($context["blog"], "image", array())) {
                echo " 
\t\t\t\t\t\t\t\t<div class=\"blog-left\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 25
                echo $this->getAttribute($context["blog"], "image", array());
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"post-image-hover\"> </div>
\t\t\t\t\t\t\t\t\t\t<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 27
                echo $this->getAttribute($context["blog"], "image", array());
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 28
                echo $this->getAttribute($context["blog"], "href", array());
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"date-comment\">
\t\t\t\t\t\t\t\t\t\t<div class=\"date-time\"> <i class=\"fa fa-calendar\"></i>  ";
                // line 32
                echo $this->getAttribute($context["blog"], "date_added", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"write-comment\"> <i class=\"fa fa-comment-o\"></i> <a href=\"";
                // line 33
                echo $this->getAttribute($context["blog"], "href", array());
                echo "\"> ";
                echo $this->getAttribute($context["blog"], "total_comments", array());
                echo "  ";
                echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
                echo "</a> </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo " \t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"blog-right\">  
\t\t\t\t\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 41
            echo $this->getAttribute($context["blog"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["blog"], "title", array());
            echo "</a> </h4>
\t\t\t\t\t\t\t\t\t";
            // line 46
            echo "\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "   
\t\t\t</div>
\t\t\t<div class=\"buttons text-center\">
\t\t\t\t<button type=\"button\" onclick=\"location='";
        // line 53
        echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
        echo " ';\" class=\"btn btn-primary\">";
        echo (isset($context["button_all_blogs"]) ? $context["button_all_blogs"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div> 
</div>
<span class=\"blog_default_width\" style=\"display:none; visibility:hidden\"></span>

<script type=\"text/javascript\"><!--

\$(document).ready(function(){
\t\$('.blogcarousel').owlCarousel({
\t\titems: 4,
\t\tsingleItem: false,
\t\tnavigation: false,
\t\tpagination: false,
\t\titemsDesktop : [1199,3],
\t\titemsDesktopSmall :\t[991,2],
\t\titemsTablet :\t[575,1]
\t});
\t// Custom Navigation Events
\t\$(\".czblog_next\").click(function(){
\t\t\$('.blogcarousel').trigger('owl.next');
\t})
\t\$(\".czblog_prev\").click(function(){
\t\t\$('.blogcarousel').trigger('owl.prev');
\t});\t
});\t
--></script>";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  144 => 50,  134 => 46,  128 => 41,  123 => 38,  110 => 33,  106 => 32,  99 => 28,  95 => 27,  86 => 25,  80 => 22,  70 => 19,  64 => 18,  50 => 17,  47 => 16,  40 => 11,  38 => 10,  32 => 7,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="box blogs">*/
/* 	<div class="container">*/
/* 		{% set sliderFor = 4 %}*/
/* 		{% set blogCount = blogs|length %}*/
/* 	*/
/* 		<div class="box-head">*/
/* 			<div class="box-heading">{{ heading_title }}</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			{% if blogCount >= sliderFor %}*/
/* 				<div class="customNavigation">*/
/* 					<a class="fa prev czblog_prev"></a>*/
/* 					<a class="fa next czblog_next"></a>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			*/
/* 			<div class="box-product {% if blogCount >= sliderFor %} owl-carousel blogcarousel {% else %} productbox-grid{% endif %}" id="{% if blogCount >= sliderFor %}blog-carousel{% else %}blog-grid{% endif %}">*/
/* 				{% for blog in blogs %} */
/* 					<div class="{% if blogCount >= sliderFor %}blog-item{% else %} product-items{% endif %}">*/
/* 						<div class="product-block">*/
/* 							<div class="product-block-inner">*/
/* 								{% if blog.image %} */
/* 								<div class="blog-left">*/
/* 									<div class="blog-image">*/
/* 										<img src="{{ blog.image }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" />*/
/* 										<div class="post-image-hover"> </div>*/
/* 										<p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="{{ blog.image }}" data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>*/
/* 											<a class="icon readmore_link" title="Click to view Read More " href="{{ blog.href }}"><i class="fa fa-link"></i></a>*/
/* 										</p>*/
/* 									</div>*/
/* 									<div class="date-comment">*/
/* 										<div class="date-time"> <i class="fa fa-calendar"></i>  {{ blog.date_added }}</div>*/
/* 										<div class="write-comment"> <i class="fa fa-comment-o"></i> <a href="{{ blog.href }}"> {{ blog.total_comments }}  {{ entry_comment }}</a> </div>*/
/* 										*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 								{% endif %} 	*/
/* 								*/
/* 								<div class="blog-right">  */
/* 									<h4 class="blog_title"><a href="{{ blog.href }}">{{ blog.title }}</a> </h4>*/
/* 									{# <div class="blog-desc"> {{ blog.description }}  </div> */
/* 									<div class="view-blog">*/
/* 										<div class="read-more"> <a href="{{ blog.href }}"> <i class="fa fa-link"></i> {{ text_read_more }}</a> </div>*/
/* 									</div> #}*/
/* 								</div> */
/* 							</div>*/
/* 						</div>*/
/* 				</div>*/
/* 				{% endfor %}   */
/* 			</div>*/
/* 			<div class="buttons text-center">*/
/* 				<button type="button" onclick="location='{{ all_blogs }} ';" class="btn btn-primary">{{ button_all_blogs }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div> */
/* </div>*/
/* <span class="blog_default_width" style="display:none; visibility:hidden"></span>*/
/* */
/* <script type="text/javascript"><!--*/
/* */
/* $(document).ready(function(){*/
/* 	$('.blogcarousel').owlCarousel({*/
/* 		items: 4,*/
/* 		singleItem: false,*/
/* 		navigation: false,*/
/* 		pagination: false,*/
/* 		itemsDesktop : [1199,3],*/
/* 		itemsDesktopSmall :	[991,2],*/
/* 		itemsTablet :	[575,1]*/
/* 	});*/
/* 	// Custom Navigation Events*/
/* 	$(".czblog_next").click(function(){*/
/* 		$('.blogcarousel').trigger('owl.next');*/
/* 	})*/
/* 	$(".czblog_prev").click(function(){*/
/* 		$('.blogcarousel').trigger('owl.prev');*/
/* 	});	*/
/* });	*/
/* --></script>*/
