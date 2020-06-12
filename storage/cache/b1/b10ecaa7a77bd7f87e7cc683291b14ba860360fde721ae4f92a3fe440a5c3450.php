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
\t<div class=\"box-head\"><div class=\"box-heading\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div></div>
\t<div class=\"box-content\">
        ";
        // line 5
        $context["sliderFor"] = 5;
        // line 6
        echo "        ";
        $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
        // line 7
        echo "        ";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            // line 8
            echo "\t\t\t<div class=\"customNavigation\">
\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t</div>
        ";
        }
        // line 13
        echo "\t
\t\t<div class=\"box-product ";
        // line 14
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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
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
            // line 20
            if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                // line 21
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 22
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 23
                echo $this->getAttribute($context["product"], "thumb_swap", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 27
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4><a href=\"";
            // line 40
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 43
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 44
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 45
                echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                // line 46
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t\t

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 60
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo " \" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-heart\"></i></button>

\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 62
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo " \" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
            // line 63
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
        // line 72
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
        return array (  210 => 72,  193 => 63,  187 => 62,  180 => 60,  174 => 56,  170 => 54,  162 => 52,  159 => 51,  151 => 49,  145 => 47,  143 => 46,  140 => 45,  138 => 44,  135 => 43,  128 => 40,  115 => 29,  106 => 27,  101 => 26,  91 => 23,  83 => 22,  78 => 21,  76 => 20,  64 => 16,  60 => 15,  46 => 14,  43 => 13,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="box featured">*/
/* <div class="container">*/
/* 	<div class="box-head"><div class="box-heading">{{ heading_title }}</div></div>*/
/* 	<div class="box-content">*/
/*         {% set sliderFor = 5 %}*/
/*         {% set productCount = products|length %}*/
/*         {% if productCount >= sliderFor %}*/
/* 			<div class="customNavigation">*/
/* 				<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 				<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 			</div>*/
/*         {% endif %}*/
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
/* */
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
/* */
/* 							*/
/* 							<div class="button-group">*/
/* 							<button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/* */
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
