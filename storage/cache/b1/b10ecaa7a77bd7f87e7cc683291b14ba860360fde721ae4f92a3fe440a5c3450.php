<?php

/* ToolsShop/template/extension/module/featured.twig */
class __TwigTemplate_fa4e0619029535cf37e466f06f8752063a96e78eaa0c557e2b5f4ad308f0c774 extends Twig_Template
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
        echo "<div class=\"box featured\">
<div class=\"container\">
\t<div class=\"box-head\">
\t\t<div class=\"box-heading\">";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
\t</div>
\t<div class=\"box-content\">
\t\t";
        // line 7
        $context["sliderFor"] = 6;
        // line 8
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
        // line 9
        echo "\t\t";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            // line 10
            echo "\t\t\t<div class=\"customNavigation\">
\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t</div>\t
\t\t";
        }
        // line 15
        echo "\t
\t\t<div class=\"box-product ";
        // line 16
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "product-carousel";
        } else {
            echo "productbox-grid";
        }
        echo "\" id=\"";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "featured-carousel";
        } else {
            echo "featured-grid";
        }
        echo "\">
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
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
            // line 22
            if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                // line 23
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 24
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 25
                echo $this->getAttribute($context["product"], "thumb_swap", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 29
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 32
            if ( !$this->getAttribute($context["product"], "special", array())) {
                echo "        
\t\t\t\t\t\t";
            } else {
                // line 33
                echo "   
\t\t\t\t\t\t<span class=\"saleicon sale\">Sale</span>  
\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 37
            if ($this->getAttribute($context["product"], "special", array())) {
                echo "        
\t\t\t\t\t\t\t<div class=\"percentsaving\">";
                // line 38
                echo $this->getAttribute($context["product"], "percentsaving", array());
                echo "% off</div>
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4><a href=\"";
            // line 49
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 52
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 53
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 54
                echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                // line 55
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 68
                echo "\t\t\t\t\t\t\t\t ";
                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t ";
                } else {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t ";
                }
                // line 73
                echo "\t\t\t\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo " \" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<div class=\"quickview-button\" data-toggle=\"tooltip\" title=\"";
            // line 78
            echo (isset($context["quick_view"]) ? $context["quick_view"] : null);
            echo "\"> <a class=\"quickbox\" href=\"";
            echo $this->getAttribute($context["product"], "quick", array());
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 80
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo " \" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
            // line 81
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><span>";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span> </button>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t
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
        // line 90
        echo "\t\t</div>
\t</div>
</div>
</div>
<span class=\"featured_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 90,  248 => 81,  242 => 80,  235 => 78,  229 => 77,  224 => 74,  218 => 73,  214 => 71,  210 => 69,  207 => 68,  203 => 67,  199 => 65,  195 => 63,  187 => 61,  184 => 60,  176 => 58,  170 => 56,  168 => 55,  165 => 54,  163 => 53,  160 => 52,  153 => 49,  142 => 40,  137 => 38,  133 => 37,  130 => 36,  125 => 33,  120 => 32,  117 => 31,  108 => 29,  103 => 28,  93 => 25,  85 => 24,  80 => 23,  78 => 22,  66 => 18,  62 => 17,  48 => 16,  45 => 15,  38 => 10,  35 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="box featured">*/
/* <div class="container">*/
/* 	<div class="box-head">*/
/* 		<div class="box-heading">{{ heading_title }}</div>*/
/* 	</div>*/
/* 	<div class="box-content">*/
/* 		{% set sliderFor = 6 %}*/
/* 		{% set productCount = products|length %}*/
/* 		{% if productCount >= sliderFor %}*/
/* 			<div class="customNavigation">*/
/* 				<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 				<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 			</div>	*/
/* 		{% endif %}*/
/* 	*/
/* 		<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %}productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}featured-carousel{% else %}featured-grid{% endif %}">*/
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
/* 						{% else %}   */
/* 						<span class="saleicon sale">Sale</span>  */
/* 						{% endif %}*/
/* 						*/
/* 						{% if product.special %}        */
/* 							<div class="percentsaving">{{ product.percentsaving }}% off</div>*/
/* 						{% endif %}*/
/* 												*/
/* 						*/
/* 						*/
/* 							*/
/* 					</div>*/
/* 					*/
/* 					<div class="product-details">*/
/* 						<div class="caption">*/
/* 									*/
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
/* 							<div class="button-group">*/
/* 							<button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/* 							<div class="quickview-button" data-toggle="tooltip" title="{{ quick_view }}"> <a class="quickbox" href="{{ product.quick }}">*/
/* 								<i class="fa fa-eye" aria-hidden="true"></i></a></div>*/
/* 							<button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-exchange"></i></button>*/
/* 							<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');"><span>{{ button_cart }}</span> </button>*/
/* 						    </div>*/
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
/* <span class="featured_default_width" style="display:none; visibility:hidden"></span>*/
/* */
