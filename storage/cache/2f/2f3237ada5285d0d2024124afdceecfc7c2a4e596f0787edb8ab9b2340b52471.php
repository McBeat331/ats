<?php

/* ToolsShop/template/extension/module/category_tab.twig */
class __TwigTemplate_0a2a3f802083f17820dbab7eac46038e3b841c124d32ca5734f2fef20f179d68 extends Twig_Template
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
        echo "<div class=\"hometab box\">
\t<div class=\"container\">
\t\t<div class=\"tab-head\">
\t\t\t<div class=\"hometab-heading box-heading\">";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>

\t\t\t<div id=\"categorytabs\" class=\"htabs\">
\t\t\t\t<ul class=\"etabs\">
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "\t\t\t\t\t\t<li class=\"tab\"><a href=\"#categorytab-";
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["category"], "category_name", array());
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
 \t\t
\t\t";
        // line 15
        $context["category_cnt"] = 0;
        echo " 
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "\t\t\t<div id=\"categorytab-";
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\" class=\"tab-content\">
\t\t\t\t<div class=\"box\">
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t";
            // line 20
            if (($this->getAttribute($context["category"], "category_id", array()) != $this->getAttribute($context["category"], "target_category_id", array()))) {
                // line 21
                echo "\t\t\t\t\t\t\t<div id=\"tab_spinner\"></div>
\t\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 24
                $context["sliderFor"] = 6;
                // line 25
                echo "\t\t\t\t\t\t\t";
                $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
                // line 26
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 27
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"box-product ";
                // line 34
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "product-carousel";
                } else {
                    echo " productbox-grid";
                }
                echo "\" 
\t\t\t\t\t\t\t\tid=\"";
                // line 35
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "tabcategory";
                    echo (isset($context["category_cnt"]) ? $context["category_cnt"] : null);
                    echo "-carousel";
                } else {
                    echo "tabcategory";
                    echo (isset($context["category_cnt"]) ? $context["category_cnt"] : null);
                    echo "-grid";
                }
                echo "\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                    if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                        echo "slider-item";
                    } else {
                        echo "product-items";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t \t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 42
                    if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 44
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                        // line 45
                        echo $this->getAttribute($context["product"], "thumb_swap", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 49
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 55
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo " \" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 57
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo " \" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                    // line 59
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo " ');\"><span>";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                    // line 65
                    echo $this->getAttribute($context["product"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 69
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 71
                        if ( !$this->getAttribute($context["product"], "special", array())) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span> <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t<span class=\"tabcategory";
            // line 96
            echo (isset($context["category_cnt"]) ? $context["category_cnt"] : null);
            echo "_default_width\" style=\"display:none; visibility:hidden\"></span> 
\t\t";
            // line 97
            $context["category_cnt"] = ((isset($context["category_cnt"]) ? $context["category_cnt"] : null) + 1);
            echo " 
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t</div>
</div>

<script type=\"text/javascript\">
\t\$('#categorytabs a').tabs();
</script> ";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/extension/module/category_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 99,  277 => 97,  273 => 96,  267 => 92,  263 => 90,  249 => 81,  245 => 79,  237 => 77,  234 => 76,  226 => 74,  220 => 72,  218 => 71,  215 => 70,  213 => 69,  210 => 68,  203 => 65,  192 => 59,  185 => 57,  178 => 55,  173 => 52,  163 => 49,  158 => 48,  148 => 45,  140 => 44,  135 => 43,  133 => 42,  121 => 38,  117 => 37,  104 => 35,  96 => 34,  93 => 33,  86 => 28,  84 => 27,  81 => 26,  78 => 25,  76 => 24,  73 => 23,  69 => 21,  67 => 20,  60 => 17,  56 => 16,  52 => 15,  46 => 11,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="hometab box">*/
/* 	<div class="container">*/
/* 		<div class="tab-head">*/
/* 			<div class="hometab-heading box-heading">{{ heading_title }}</div>*/
/* */
/* 			<div id="categorytabs" class="htabs">*/
/* 				<ul class="etabs">*/
/* 					{% for category in categories %}*/
/* 						<li class="tab"><a href="#categorytab-{{ category.category_id }}" data-toggle="tab">{{ category.category_name }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/*  		*/
/* 		{% set category_cnt = 0 %} */
/* 		{% for category in categories %}*/
/* 			<div id="categorytab-{{ category.category_id }}" class="tab-content">*/
/* 				<div class="box">*/
/* 					<div class="box-content">*/
/* 						{% if category.category_id != category.target_category_id %}*/
/* 							<div id="tab_spinner"></div>*/
/* 						{% else %}*/
/* 						*/
/* 							{% set sliderFor = 6 %}*/
/* 							{% set productCount = products|length %}*/
/* 							*/
/* 							{% if productCount >= sliderFor %}*/
/* 								<div class="customNavigation">*/
/* 									<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 									<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 								</div>	*/
/* 							{% endif %}*/
/* 						*/
/* 							<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %} productbox-grid{% endif %}" */
/* 								id="{% if productCount >= sliderFor %}tabcategory{{ category_cnt }}-carousel{% else %}tabcategory{{ category_cnt }}-grid{% endif %}">*/
/* 							 */
/* 								{% for product in products %}*/
/* 									<div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/* 								 		<div class="product-block product-thumb transition">*/
/* 											<div class="product-block-inner">*/
/* 												<div class="image">*/
/* 													{% if product.thumb_swap %}*/
/* 														<a href="{{ product.href }}">*/
/* 															<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/>*/
/* 															<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 														</a>*/
/* 													{% else %}*/
/* 														<a href="{{ product.href }}">*/
/* 															<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/>*/
/* 														</a>*/
/* 													{% endif %}*/
/* */
/* 													*/
/* 													<div class="button-group">*/
/* 														<button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');">*/
/* 															<i class="fa fa-heart"></i></button>*/
/* 														<button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');">*/
/* 															<i class="fa fa-exchange"></i></button>*/
/* 														<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');"><span>{{ button_cart }}</span></button>*/
/* 													</div>*/
/* 												</div>*/
/* 											*/
/* 												 <div class="product-details">*/
/* 													<div class="caption">*/
/* 														<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 														*/
/* 														{# <p class="desc">{{ product.description }}</p> #}*/
/* 														*/
/* 														{% if product.price %}*/
/* 															<p class="price">*/
/* 															{% if not product.special %}*/
/* 															{{ product.price }}*/
/* 															{% else %}*/
/* 															<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 															{% endif %}*/
/* 															{% if product.tax %}*/
/* 															<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 															{% endif %}*/
/* 															</p>*/
/* 														{% endif %}*/
/* 														*/
/* */
/* 														*/
/* 													</div>*/
/* 												 </div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 		<span class="tabcategory{{ category_cnt }}_default_width" style="display:none; visibility:hidden"></span> */
/* 		{% set category_cnt =  category_cnt + 1 %} */
/* 		{% endfor %}*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* 	$('#categorytabs a').tabs();*/
/* </script> */
