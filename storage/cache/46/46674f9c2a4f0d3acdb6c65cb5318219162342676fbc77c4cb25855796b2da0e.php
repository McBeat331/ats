<?php

/* ToolsShop/template/extension/module/codezeeltabs.twig */
class __TwigTemplate_287f26e21209a91ce9b43cb6b26050896701bd5f5ce2df90f93e7da5662b25f3 extends Twig_Template
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
<div class=\"container\">
\t<div class=\"tab-head\">
\t\t<div class=\"hometab-heading box-heading\">";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
\t\t<div id=\"tabs\" class=\"htabs\">
\t\t  <ul class='etabs'>
\t\t\t<li class='tab'>
\t\t\t\t";
        // line 8
        if ((isset($context["latestproducts"]) ? $context["latestproducts"] : null)) {
            // line 9
            echo "\t\t\t\t\t<a href=\"#tab-latest\">";
            echo (isset($context["tab_latest"]) ? $context["tab_latest"] : null);
            echo "</a>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t</li>
\t\t\t<li class='tab'>
\t\t\t\t";
        // line 13
        if ((isset($context["bestsellersproducts"]) ? $context["bestsellersproducts"] : null)) {
            // line 14
            echo "\t\t\t\t<a href=\"#tab-bestseller\">";
            echo (isset($context["tab_bestseller"]) ? $context["tab_bestseller"] : null);
            echo "</a>
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t</li>\t
\t\t\t<li class='tab'>
\t\t\t\t";
        // line 18
        if ((isset($context["specialproducts"]) ? $context["specialproducts"] : null)) {
            // line 19
            echo "\t\t\t\t\t<a href=\"#tab-special\">";
            echo (isset($context["tab_special"]) ? $context["tab_special"] : null);
            echo "</a>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

";
        // line 26
        if ((isset($context["latestproducts"]) ? $context["latestproducts"] : null)) {
            // line 27
            echo "<div id=\"tab-latest\" class=\"tab-content\">
\t<div class=\"box\">
\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t";
            // line 31
            $context["sliderFor"] = 6;
            // line 32
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, (isset($context["latestproducts"]) ? $context["latestproducts"] : null));
            // line 33
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 34
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                // line 35
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t<div class=\"box-product ";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "tablatest-carousel";
            } else {
                echo "tablatest-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latestproducts"]) ? $context["latestproducts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "\t\t\t\t\t\t\t<div class=\"";
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 46
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 48
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 49
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 53
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 56
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 57
                    echo "   
\t\t\t\t\t\t\t\t\t\t\t<span class=\"saleicon sale\">Sale</span>  
\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t   ";
                // line 61
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"percentsaving\">";
                    echo $this->getAttribute($context["product"], "percentsaving", array());
                    echo "% off</div>
\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 68
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\" data-toggle=\"tooltip\" title=\"";
                // line 70
                echo (isset($context["quick_view"]) ? $context["quick_view"] : null);
                echo "\"> <a class=\"quickbox\" href=\"";
                echo $this->getAttribute($context["product"], "quick", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 72
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo " \" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 74
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 82
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 86
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 88
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 119
            if (((isset($context["productCount"]) ? $context["productCount"] : null) < (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                // line 120
                echo "\t\t\t\t\t<div class=\"cz-status\">
\t\t\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t\t\t\t";
                // line 122
                echo (isset($context["text_no_products"]) ? $context["text_no_products"] : null);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"viewmore\">
\t\t\t\t\t\t<button class=\"btn btn-default gridcount\">";
                // line 125
                echo (isset($context["text_view_more"]) ? $context["text_view_more"] : null);
                echo "</button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t
\t\t\t </div>
\t\t\t <span class=\"tablatest_default_width\" style=\"display:none; visibility:hidden\"></span>
 </div>
";
        }
        // line 133
        echo " 
";
        // line 134
        if ((isset($context["bestsellersproducts"]) ? $context["bestsellersproducts"] : null)) {
            // line 135
            echo " <div id=\"tab-bestseller\" class=\"tab-content\">
    \t  <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
            // line 138
            $context["sliderFor"] = 6;
            // line 139
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, (isset($context["bestsellersproducts"]) ? $context["bestsellersproducts"] : null));
            // line 140
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 141
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                // line 142
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 147
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"box-product ";
            // line 148
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "tabbestseller-carousel";
            } else {
                echo "tabbestseller-grid";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bestsellersproducts"]) ? $context["bestsellersproducts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 150
                echo "\t\t\t\t\t\t\t<div class=\"";
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 154
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 156
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 157
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 161
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 164
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 165
                    echo "   
\t\t\t\t\t\t\t\t\t\t\t<span class=\"saleicon sale\">Sale</span>  
\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t   ";
                // line 169
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"percentsaving\">";
                    echo $this->getAttribute($context["product"], "percentsaving", array());
                    echo "% off</div>
\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t   <div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 174
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\" data-toggle=\"tooltip\" title=\"";
                // line 176
                echo (isset($context["quick_view"]) ? $context["quick_view"] : null);
                echo "\"> <a class=\"quickbox\" href=\"";
                echo $this->getAttribute($context["product"], "quick", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 178
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo " \" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 180
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 188
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 191
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 192
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 193
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 194
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 196
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 199
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 205
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 206
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 225
            if (((isset($context["productCount"]) ? $context["productCount"] : null) < (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                // line 226
                echo "\t\t\t\t\t<div class=\"cz-status\">
\t\t\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t\t\t\t";
                // line 228
                echo (isset($context["text_no_products"]) ? $context["text_no_products"] : null);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"viewmore\">
\t\t\t\t\t\t<button class=\"btn btn-default gridcount\">";
                // line 231
                echo (isset($context["text_view_more"]) ? $context["text_view_more"] : null);
                echo "</button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 234
            echo "\t\t\t\t
\t\t\t </div>
\t\t <span class=\"tabbestseller_default_width\" style=\"display:none; visibility:hidden\"></span> 
 </div>
";
        }
        // line 239
        echo "
";
        // line 240
        if ((isset($context["specialproducts"]) ? $context["specialproducts"] : null)) {
            // line 241
            echo " <div id=\"tab-special\" class=\"tab-content\">
    \t <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 245
            $context["sliderFor"] = 6;
            // line 246
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, (isset($context["specialproducts"]) ? $context["specialproducts"] : null));
            // line 247
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 248
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                // line 249
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 254
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"box-product ";
            // line 255
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "tabspecial-carousel";
            } else {
                echo "tabspecial-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["specialproducts"]) ? $context["specialproducts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 257
                echo "\t\t\t\t\t\t\t<div class=\"";
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 261
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 262
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 263
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 264
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 267
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 268
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 271
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 272
                    echo "   
\t\t\t\t\t\t\t\t\t\t\t<span class=\"saleicon sale\">Sale</span>  
\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 275
                echo "\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t   ";
                // line 276
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 277
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"percentsaving\">";
                    echo $this->getAttribute($context["product"], "percentsaving", array());
                    echo "% off</div>
\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 279
                echo "\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 281
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\" data-toggle=\"tooltip\" title=\"";
                // line 283
                echo (isset($context["quick_view"]) ? $context["quick_view"] : null);
                echo "\"> <a class=\"quickbox\" href=\"";
                echo $this->getAttribute($context["product"], "quick", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 285
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo " \" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 287
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 294
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 297
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 298
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 299
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 300
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 301
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 303
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 305
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 306
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 308
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 310
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 313
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 314
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 315
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 317
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 319
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 330
            if (((isset($context["productCount"]) ? $context["productCount"] : null) < (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                // line 331
                echo "\t\t\t\t\t<div class=\"cz-status\">
\t\t\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t\t\t\t";
                // line 333
                echo (isset($context["text_no_products"]) ? $context["text_no_products"] : null);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"viewmore\">
\t\t\t\t\t\t<button class=\"btn btn-default gridcount\">";
                // line 336
                echo (isset($context["text_view_more"]) ? $context["text_view_more"] : null);
                echo "</button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 339
            echo "\t\t\t\t
\t\t\t </div>
\t\t <span class=\"tabspecial_default_width\" style=\"display:none; visibility:hidden\"></span> 
 </div>
";
        }
        // line 344
        echo "
</div></div>

<script type=\"text/javascript\">
\$('#tabs a').tabs();
</script> ";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/extension/module/codezeeltabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  895 => 344,  888 => 339,  882 => 336,  876 => 333,  872 => 331,  870 => 330,  865 => 327,  853 => 320,  847 => 319,  843 => 317,  839 => 315,  836 => 314,  832 => 313,  827 => 310,  823 => 308,  815 => 306,  812 => 305,  804 => 303,  798 => 301,  796 => 300,  793 => 299,  791 => 298,  788 => 297,  781 => 294,  769 => 287,  762 => 285,  755 => 283,  748 => 281,  744 => 279,  738 => 277,  736 => 276,  733 => 275,  728 => 272,  723 => 271,  720 => 270,  711 => 268,  706 => 267,  696 => 264,  688 => 263,  683 => 262,  681 => 261,  669 => 257,  665 => 256,  651 => 255,  648 => 254,  641 => 249,  639 => 248,  636 => 247,  633 => 246,  631 => 245,  625 => 241,  623 => 240,  620 => 239,  613 => 234,  607 => 231,  601 => 228,  597 => 226,  595 => 225,  590 => 222,  575 => 212,  569 => 211,  565 => 209,  561 => 207,  558 => 206,  554 => 205,  550 => 203,  546 => 201,  538 => 199,  535 => 198,  527 => 196,  521 => 194,  519 => 193,  516 => 192,  514 => 191,  511 => 190,  505 => 188,  492 => 180,  485 => 178,  478 => 176,  471 => 174,  467 => 172,  461 => 170,  459 => 169,  456 => 168,  451 => 165,  446 => 164,  443 => 163,  434 => 161,  429 => 160,  419 => 157,  411 => 156,  406 => 155,  404 => 154,  392 => 150,  388 => 149,  374 => 148,  371 => 147,  364 => 142,  362 => 141,  359 => 140,  356 => 139,  354 => 138,  349 => 135,  347 => 134,  344 => 133,  337 => 128,  331 => 125,  325 => 122,  321 => 120,  319 => 119,  314 => 116,  300 => 107,  294 => 106,  290 => 104,  286 => 102,  283 => 101,  279 => 100,  275 => 98,  271 => 96,  263 => 94,  260 => 93,  252 => 91,  246 => 89,  244 => 88,  241 => 87,  239 => 86,  236 => 85,  229 => 82,  216 => 74,  209 => 72,  202 => 70,  195 => 68,  189 => 64,  183 => 62,  181 => 61,  178 => 60,  173 => 57,  168 => 56,  165 => 55,  156 => 53,  151 => 52,  141 => 49,  133 => 48,  128 => 47,  126 => 46,  114 => 42,  110 => 41,  95 => 40,  88 => 35,  86 => 34,  83 => 33,  80 => 32,  78 => 31,  72 => 27,  70 => 26,  63 => 21,  57 => 19,  55 => 18,  51 => 16,  45 => 14,  43 => 13,  39 => 11,  33 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="hometab box">*/
/* <div class="container">*/
/* 	<div class="tab-head">*/
/* 		<div class="hometab-heading box-heading">{{ heading_title }}</div>*/
/* 		<div id="tabs" class="htabs">*/
/* 		  <ul class='etabs'>*/
/* 			<li class='tab'>*/
/* 				{% if latestproducts %}*/
/* 					<a href="#tab-latest">{{ tab_latest }}</a>*/
/* 				{% endif %}*/
/* 			</li>*/
/* 			<li class='tab'>*/
/* 				{% if bestsellersproducts %}*/
/* 				<a href="#tab-bestseller">{{ tab_bestseller }}</a>*/
/* 				{% endif %}*/
/* 			</li>	*/
/* 			<li class='tab'>*/
/* 				{% if specialproducts %}*/
/* 					<a href="#tab-special">{{ tab_special }}</a>*/
/* 				{% endif %}*/
/* 			</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% if latestproducts %}*/
/* <div id="tab-latest" class="tab-content">*/
/* 	<div class="box">*/
/* 				<div class="box-content">*/
/* */
/* 					{% set sliderFor = 6 %}*/
/* 					{%	set productCount = latestproducts|length %}*/
/* 					*/
/* 						{% if productCount >= sliderFor %}*/
/* 						<div class="customNavigation">*/
/* 							<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 							<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 						</div>	*/
/* 					{% endif %}*/
/* 					<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %} productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}tablatest-carousel{% else %}tablatest-grid{% endif %}">*/
/* 					{% for product in latestproducts %}*/
/* 							<div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/* 								<div class="product-block product-thumb transition">*/
/* 									<div class="product-block-inner">	  	*/
/* 										<div class="image">*/
/* 											{% if product.thumb_swap %}*/
/* 											<a href="{{ product.href }}">*/
/* 												<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive reg-image"/>*/
/* 												<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 											</a>*/
/* 											{% else %}*/
/* 											<a href="{{ product.href }}">*/
/* 												<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/></a>*/
/* 											{% endif %}*/
/* 											*/
/* 											{% if not product.special %}        */
/* 											  {% else %}   */
/* 											<span class="saleicon sale">Sale</span>  */
/* 										   {% endif %}*/
/* 										   */
/* 										   {% if product.special %}*/
/* 												<div class="percentsaving">{{ product.percentsaving }}% off</div>*/
/* 										   {% endif %}*/
/* 										   */
/* 										   */
/* 										   */
/* 											<div class="button-group">*/
/* 												<button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');">*/
/* 													<i class="fa fa-heart"></i></button>*/
/* 												<div class="quickview-button" data-toggle="tooltip" title="{{ quick_view }}"> <a class="quickbox" href="{{ product.quick }}">*/
/* 													<i class="fa fa-eye" aria-hidden="true"></i></a></div>*/
/* 												<button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');">*/
/* 													<i class="fa fa-exchange"></i></button>*/
/* 												<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');"><span>{{ button_cart }}</span></button>*/
/* 											</div>*/
/* 											*/
/* 											*/
/* 										</div>*/
/* 										<div class="product-details">*/
/* 											<div class="caption">*/
/* 												*/
/* 												<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 												*/
/* 												{# <p class="desc"><?php echo $product['description']; ?></p> #}*/
/* 												*/
/* 												{% if product.price %}*/
/* 													<p class="price">*/
/* 													{% if not product.special %}*/
/* 													{{ product.price }}*/
/* 													{% else %}*/
/* 													<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 													{% endif %}*/
/* 													{% if product.tax %}*/
/* 													<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 													{% endif %}*/
/* 													</p>*/
/* 												{% endif %}*/
/* 												*/
/* 												<div class="rating">*/
/* 													 {% for i in 1..5 %}*/
/* 													 {% if product.rating < i %}*/
/* 													 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													 {% else %}*/
/* 													 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													 {% endif %}*/
/* 													 {% endfor %}*/
/* 												</div>*/
/* 												*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				{% if productCount < sliderFor %}*/
/* 					<div class="cz-status">*/
/* 						<i class="fa fa-frown-o"></i>*/
/* 						{{ text_no_products }}*/
/* 					</div>*/
/* 					<div class="viewmore">*/
/* 						<button class="btn btn-default gridcount">{{ text_view_more }}</button>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				*/
/* 			 </div>*/
/* 			 <span class="tablatest_default_width" style="display:none; visibility:hidden"></span>*/
/*  </div>*/
/* {% endif %}*/
/*  */
/* {% if bestsellersproducts %}*/
/*  <div id="tab-bestseller" class="tab-content">*/
/*     	  <div class="box">*/
/* 				<div class="box-content">*/
/* 					{% set sliderFor = 6 %}*/
/* 					{%	set productCount = bestsellersproducts|length %}*/
/* 					*/
/* 					{% if productCount >= sliderFor %}*/
/* 						<div class="customNavigation">*/
/* 							<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 							<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 						</div>	*/
/* 					{% endif %}*/
/* 					*/
/* 					<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %} productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}tabbestseller-carousel{% else %}tabbestseller-grid{% endif %}">*/
/* 						{% for product in bestsellersproducts %}*/
/* 							<div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/* 								<div class="product-block product-thumb transition">*/
/* 									<div class="product-block-inner">	  	*/
/* 										<div class="image">*/
/* 											{% if product.thumb_swap %}*/
/* 											<a href="{{ product.href }}">*/
/* 												<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive reg-image"/>*/
/* 												<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 											</a>*/
/* 											{% else %}*/
/* 											<a href="{{ product.href }}">*/
/* 												<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/></a>*/
/* 											{% endif %}*/
/* 											*/
/* 											{% if not product.special %}        */
/* 											  {% else %}   */
/* 											<span class="saleicon sale">Sale</span>  */
/* 										   {% endif %}*/
/* 										   */
/* 										   {% if product.special %}*/
/* 												<div class="percentsaving">{{ product.percentsaving }}% off</div>*/
/* 										   {% endif %}*/
/* 										   */
/* 										   <div class="button-group">*/
/* 												<button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');">*/
/* 													<i class="fa fa-heart"></i></button>*/
/* 												<div class="quickview-button" data-toggle="tooltip" title="{{ quick_view }}"> <a class="quickbox" href="{{ product.quick }}">*/
/* 													<i class="fa fa-eye" aria-hidden="true"></i></a></div>*/
/* 												<button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');">*/
/* 													<i class="fa fa-exchange"></i></button>*/
/* 												<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');"><span>{{ button_cart }}</span></button>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 										*/
/* 										<div class="product-details">*/
/* 											<div class="caption">*/
/* 												 */
/* 												<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 												{# <p class="desc"><?php echo $product['description']; ?></p> #}*/
/* 												*/
/* 												{% if product.price %}*/
/* 													<p class="price">*/
/* 													{% if not product.special %}*/
/* 													{{ product.price }}*/
/* 													{% else %}*/
/* 													<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 													{% endif %}*/
/* 													{% if product.tax %}*/
/* 													<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 													{% endif %}*/
/* 													</p>*/
/* 												{% endif %}*/
/* 												*/
/* 												<div class="rating">*/
/* 													 {% for i in 1..5 %}*/
/* 													 {% if product.rating < i %}*/
/* 													 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													 {% else %}*/
/* 													 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													 {% endif %}*/
/* 													 {% endfor %}*/
/* 												</div>*/
/* 												*/
/* 												*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				{% if productCount < sliderFor %}*/
/* 					<div class="cz-status">*/
/* 						<i class="fa fa-frown-o"></i>*/
/* 						{{ text_no_products }}*/
/* 					</div>*/
/* 					<div class="viewmore">*/
/* 						<button class="btn btn-default gridcount">{{ text_view_more }}</button>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				*/
/* 			 </div>*/
/* 		 <span class="tabbestseller_default_width" style="display:none; visibility:hidden"></span> */
/*  </div>*/
/* {% endif %}*/
/* */
/* {% if specialproducts %}*/
/*  <div id="tab-special" class="tab-content">*/
/*     	 <div class="box">*/
/* 				<div class="box-content">*/
/* 					*/
/* 					{% set sliderFor = 6 %}*/
/* 					{% set productCount = specialproducts|length %}*/
/* 					*/
/* 					{% if productCount >= sliderFor %}*/
/* 						<div class="customNavigation">*/
/* 							<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 							<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 						</div>	*/
/* 					{% endif %}*/
/* 					*/
/* 					<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %} productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}tabspecial-carousel{% else %}tabspecial-grid{% endif %}">*/
/* 					{% for product in specialproducts %}*/
/* 							<div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/* 								<div class="product-block product-thumb transition">*/
/* 									<div class="product-block-inner">	  	*/
/* 										<div class="image">*/
/* 											{% if product.thumb_swap %}*/
/* 											<a href="{{ product.href }}">*/
/* 												<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive reg-image"/>*/
/* 												<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 											</a>*/
/* 											{% else %}*/
/* 											<a href="{{ product.href }}">*/
/* 												<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/></a>*/
/* 											{% endif %}*/
/* 											*/
/* 											{% if not product.special %}        */
/* 											  {% else %}   */
/* 											<span class="saleicon sale">Sale</span>  */
/* 										   {% endif %}*/
/* 										   */
/* 										   {% if product.special %}*/
/* 												<div class="percentsaving">{{ product.percentsaving }}% off</div>*/
/* 										   {% endif %}*/
/* 										   */
/* 											<div class="button-group">*/
/* 												<button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');">*/
/* 													<i class="fa fa-heart"></i></button>*/
/* 												<div class="quickview-button" data-toggle="tooltip" title="{{ quick_view }}"> <a class="quickbox" href="{{ product.quick }}">*/
/* 													<i class="fa fa-eye" aria-hidden="true"></i></a></div>*/
/* 												<button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');">*/
/* 													<i class="fa fa-exchange"></i></button>*/
/* 												<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');"><span>{{ button_cart }}</span></button>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 										<div class="product-details">*/
/* 											<div class="caption">*/
/* 												*/
/* 												<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 												*/
/* 												{# <p class="desc"><?php echo $product['description']; ?></p> #}*/
/* 												*/
/* 												{% if product.price %}*/
/* 													<p class="price">*/
/* 													{% if not product.special %}*/
/* 													{{ product.price }}*/
/* 													{% else %}*/
/* 													<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 													{% endif %}*/
/* 													{% if product.tax %}*/
/* 													<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 													{% endif %}*/
/* 													</p>*/
/* 												{% endif %}*/
/* 												*/
/* 												*/
/* 												<div class="rating">*/
/* 													 {% for i in 1..5 %}*/
/* 													 {% if product.rating < i %}*/
/* 													 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													 {% else %}*/
/* 													 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													 {% endif %}*/
/* 													 {% endfor %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				{% if productCount < sliderFor %}*/
/* 					<div class="cz-status">*/
/* 						<i class="fa fa-frown-o"></i>*/
/* 						{{ text_no_products }}*/
/* 					</div>*/
/* 					<div class="viewmore">*/
/* 						<button class="btn btn-default gridcount">{{ text_view_more }}</button>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				*/
/* 			 </div>*/
/* 		 <span class="tabspecial_default_width" style="display:none; visibility:hidden"></span> */
/*  </div>*/
/* {% endif %}*/
/* */
/* </div></div>*/
/* */
/* <script type="text/javascript">*/
/* $('#tabs a').tabs();*/
/* </script> */
