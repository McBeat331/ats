<?php

/* ToolsShop/template/extension/module/latest.twig */
class __TwigTemplate_34e5bcba62bd146ece503f207a9039bc3455af9aa344bf7b0025439e35feece8 extends Twig_Template
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
        echo "<div class=\"box latest\">
<div class=\"container\">
\t<div class=\"box-heading\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  \t<div class=\"box-content\">
\t
\t\t";
        // line 6
        $context["sliderFor"] = 6;
        // line 7
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
        // line 8
        echo "\t\t";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            // line 9
            echo "\t\t\t<div class=\"customNavigation\">
\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t</div>\t
\t\t";
        }
        // line 14
        echo "\t
\t\t<div class=\"box-product ";
        // line 15
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "product-carousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "latest-carousel";
        } else {
            echo "latest-grid";
        }
        echo "\">
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "\t\t<div class=\"";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t";
            // line 21
            if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                // line 22
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 23
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 24
                echo $this->getAttribute($context["product"], "thumb_swap", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 28
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 31
            if ( !$this->getAttribute($context["product"], "special", array())) {
                echo "        
\t\t\t\t\t\t  ";
            } else {
                // line 32
                echo "   
\t\t\t\t\t\t<span class=\"saleicon sale\">Sale</span>  
\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t   
\t\t\t\t\t    ";
            // line 36
            if ($this->getAttribute($context["product"], "special", array())) {
                echo "        
\t\t\t\t\t\t\t<div class=\"percentsaving\">";
                // line 37
                echo $this->getAttribute($context["product"], "percentsaving", array());
                echo "% off</div>
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t   
\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 41
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo " \" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<div class=\"quickview-button\" data-toggle=\"tooltip\" title=\"";
            // line 42
            echo (isset($context["quick_view"]) ? $context["quick_view"] : null);
            echo "\"> <a class=\"quickbox\" href=\"";
            echo $this->getAttribute($context["product"], "quick", array());
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 44
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo " \" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
            // line 45
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><span>";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span> </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "\t\t\t\t\t\t\t\t ";
                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t ";
                } else {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t ";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4><a href=\"";
            // line 64
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 67
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 68
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                // line 70
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t</div>
\t</div>
</div>
</div>
<span class=\"latest_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 87,  250 => 80,  246 => 78,  238 => 76,  235 => 75,  227 => 73,  221 => 71,  219 => 70,  216 => 69,  214 => 68,  211 => 67,  204 => 64,  200 => 62,  194 => 61,  190 => 59,  186 => 57,  183 => 56,  179 => 55,  164 => 45,  158 => 44,  151 => 42,  145 => 41,  141 => 39,  136 => 37,  132 => 36,  129 => 35,  124 => 32,  119 => 31,  116 => 30,  107 => 28,  102 => 27,  92 => 24,  84 => 23,  79 => 22,  77 => 21,  65 => 17,  61 => 16,  47 => 15,  44 => 14,  37 => 9,  34 => 8,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="box latest">*/
/* <div class="container">*/
/* 	<div class="box-heading">{{ heading_title }}</div>*/
/*   	<div class="box-content">*/
/* 	*/
/* 		{% set sliderFor = 6 %}*/
/* 		{% set productCount = products|length %}*/
/* 		{% if productCount >= sliderFor %}*/
/* 			<div class="customNavigation">*/
/* 				<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 				<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 			</div>	*/
/* 		{% endif %}*/
/* 	*/
/* 		<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %} productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}latest-carousel{% else %}latest-grid{% endif %}">*/
/* 		{% for product in products %}*/
/* 		<div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/* 			<div class="product-block product-thumb transition">*/
/* 				<div class="product-block-inner">	  	*/
/* 					<div class="image">*/
/* 						{% if product.thumb_swap %}*/
/* 						<a href="{{ product.href }}">*/
/* 							<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive reg-image"/>*/
/* 							<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 						</a>*/
/* 						{% else %}*/
/* 						<a href="{{ product.href }}">*/
/* 							<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/></a>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% if not product.special %}        */
/* 						  {% else %}   */
/* 						<span class="saleicon sale">Sale</span>  */
/* 						{% endif %}*/
/* 					   */
/* 					    {% if product.special %}        */
/* 							<div class="percentsaving">{{ product.percentsaving }}% off</div>*/
/* 						{% endif %}*/
/* 					   */
/* 						<div class="button-group">*/
/* 							<button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/* 							<div class="quickview-button" data-toggle="tooltip" title="{{ quick_view }}"> <a class="quickbox" href="{{ product.quick }}">*/
/* 								<i class="fa fa-eye" aria-hidden="true"></i></a></div>*/
/* 							<button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-exchange"></i></button>*/
/* 							<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');"><span>{{ button_cart }}</span> </button>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 					</div>*/
/* 			*/
/* 					<div class="product-details">*/
/* 						<div class="caption">*/
/* 						*/
/* 							<div class="rating">*/
/* 								 {% for i in 1..5 %}*/
/* 								 {% if product.rating < i %}*/
/* 								 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								 {% else %}*/
/* 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								 {% endif %}*/
/* 								 {% endfor %}*/
/* 							</div>*/
/* 							*/
/* 							<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 							*/
/* 							{# <p class="desc">{{ product.description }}</p> #}*/
/* 							*/
/* 							{% if product.price %}*/
/* 								<p class="price">*/
/* 								{% if not product.special %}*/
/* 								{{ product.price }}*/
/* 								{% else %}*/
/* 								<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 								{% endif %}*/
/* 								{% if product.tax %}*/
/* 								<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 								{% endif %}*/
/* 								</p>*/
/* 							{% endif %}*/
/* 							*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* <span class="latest_default_width" style="display:none; visibility:hidden"></span>*/
/* */
