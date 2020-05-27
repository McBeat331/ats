<?php

/* ToolsShop/template/product/category.twig */
class __TwigTemplate_9a90831ca5e0f97c4be21cc4ed14f1733375a052dbcf3abac70251d44a22cdde extends Twig_Template
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
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"page-title\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 18
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 19
            echo "      <div class=\"row category_thumb\">
        ";
            // line 20
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 21
                echo "        <div class=\"col-sm-2 category_img\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 23
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 24
                echo "        <div class=\"col-sm-10 category_description\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 26
            echo "      </div>     
      ";
        }
        // line 28
        echo "       ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 29
            echo "      <h3 class=\"refine-search\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
      <div class=\"row\">
        <div class=\"col-sm-12 category_list\">
          <ul>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 34
                echo "            <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "          </ul>
        </div>
      </div>
      ";
        }
        // line 40
        echo "\t   
      ";
        // line 41
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 42
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" data-toggle=\"tooltip\" title=\"";
            // line 45
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" data-toggle=\"tooltip\" title=\"";
            // line 46
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>            
          </div>
        </div>
\t\t<div class=\"compare-total\"><a href=\"";
            // line 49
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\"> ";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
\t\t<div class=\"pagination-right\">
\t\t <div class=\"sort-by-wrapper\">
\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t  <label class=\"control-label\" for=\"input-sort\">";
            // line 53
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t";
                // line 58
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 59
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo " </option>
\t\t\t\t ";
                }
                // line 63
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t </div>
\t\t <div class=\"show-wrapper\">
\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t  <label class=\"control-label\" for=\"input-limit\">";
            // line 69
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 74
                echo "\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 75
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 77
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo " </option>
\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t</div>
      </div>
\t  </div>
\t  
      <div class=\"row cat_prod\">
        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 88
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
\t\t  \t<div class=\"product-block-inner\">
\t\t\t\t<div class=\"image\">\t\t\t\t\t
\t\t\t\t\t";
                // line 92
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 93
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 94
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 95
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                } else {
                    // line 98
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 99
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 103
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t";
                } else {
                    // line 105
                    echo "\t\t\t\t\t\t<div class=\"saleback\">
\t\t\t\t\t\t\t<span class=\"saleicon sale\">Sale</span>         
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 110
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t\t<div class=\"percentsaving\">";
                    // line 111
                    echo $this->getAttribute($context["product"], "percentsaving", array());
                    echo "% off</div>
\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" title=\"";
                // line 115
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t<div class=\"quickview-button\" data-toggle=\"tooltip\" title=\"";
                // line 116
                echo (isset($context["quick_view"]) ? $context["quick_view"] : null);
                echo "\"> <a class=\"quickbox\" href=\"";
                echo $this->getAttribute($context["product"], "quick", array());
                echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t<button type=\"button\" class=\"compare\" data-toggle=\"tooltip\" title=\"";
                // line 118
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t<div class=\"bottom-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 120
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t    </div>
\t\t\t\t  \t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
            \t
\t\t\t\t<div class=\"product-details\">
              \t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<h4><a href=\"";
                // line 130
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"desc\">";
                // line 132
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t   
\t\t\t\t\t\t<div class=\"rating list-rate\">
\t\t\t\t\t\t  ";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 136
                    echo "\t\t\t\t\t\t\t ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 137
                        echo "\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t ";
                    } else {
                        // line 139
                        echo "\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t ";
                    }
                    // line 141
                    echo "\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t   
\t\t\t\t\t   ";
                // line 144
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 145
                    echo "\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                    // line 146
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 147
                        echo "\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 149
                        echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 151
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 152
                        echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t  ";
                }
                // line 156
                echo "\t\t\t\t\t  
\t\t\t\t\t    <div class=\"rating\">
\t\t\t\t\t\t  ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 159
                    echo "\t\t\t\t\t\t\t ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 160
                        echo "\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t ";
                    } else {
                        // line 162
                        echo "\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t ";
                    }
                    // line 164
                    echo "\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 167
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "      </div>
       <div class=\"pagination-wrapper\">
\t\t\t<div class=\"col-sm-6 text-left page-link\">";
            // line 178
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right page-result\">";
            // line 179
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
\t   </div>     
      ";
        }
        // line 182
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            echo " 
      <p>";
            // line 183
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 185
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 188
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 189
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 191
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 191,  534 => 189,  529 => 188,  521 => 185,  516 => 183,  511 => 182,  505 => 179,  501 => 178,  497 => 176,  478 => 167,  474 => 165,  468 => 164,  464 => 162,  460 => 160,  457 => 159,  453 => 158,  449 => 156,  445 => 154,  437 => 152,  434 => 151,  426 => 149,  420 => 147,  418 => 146,  415 => 145,  413 => 144,  409 => 142,  403 => 141,  399 => 139,  395 => 137,  392 => 136,  388 => 135,  382 => 132,  375 => 130,  358 => 120,  351 => 118,  344 => 116,  338 => 115,  334 => 113,  329 => 111,  325 => 110,  322 => 109,  316 => 105,  311 => 103,  308 => 102,  298 => 99,  293 => 98,  283 => 95,  275 => 94,  270 => 93,  268 => 92,  262 => 88,  258 => 87,  249 => 80,  243 => 79,  235 => 77,  227 => 75,  224 => 74,  220 => 73,  213 => 69,  206 => 64,  200 => 63,  192 => 61,  184 => 59,  182 => 58,  176 => 57,  169 => 53,  160 => 49,  154 => 46,  150 => 45,  145 => 42,  143 => 41,  140 => 40,  134 => 36,  123 => 34,  119 => 33,  111 => 29,  108 => 28,  104 => 26,  98 => 24,  95 => 23,  85 => 21,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1 class="page-title">{{ heading_title }}</h1>*/
/*       {% if thumb  or  description %}*/
/*       <div class="row category_thumb">*/
/*         {% if thumb %}*/
/*         <div class="col-sm-2 category_img"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10 category_description">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>     */
/*       {% endif %}*/
/*        {% if categories %}*/
/*       <h3 class="refine-search">{{ text_refine }}</h3>*/
/*       <div class="row">*/
/*         <div class="col-sm-12 category_list">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* 	   */
/*       {% if products %}*/
/*       <div class="category_filter">*/
/*         <div class="col-md-4 btn-list-grid">*/
/*           <div class="btn-group">*/
/*             <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/* 			<button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>            */
/*           </div>*/
/*         </div>*/
/* 		<div class="compare-total"><a href="{{ compare }}" id="compare-total"> {{ text_compare }}</a></div>*/
/* 		<div class="pagination-right">*/
/* 		 <div class="sort-by-wrapper">*/
/* 			<div class="col-md-2 text-right sort-by">*/
/* 			  <label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/* 			</div>*/
/* 			<div class="col-md-3 text-right sort">*/
/* 			  <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 				{% for sorts in sorts %} */
/* 				{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 				<option value="{{ sorts.href }} " selected="selected">{{ sorts.text }}</option>*/
/* 				{% else %}*/
/* 				<option value="{{ sorts.href }} ">{{ sorts.text }} </option>*/
/* 				 {% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		 </div>*/
/* 		 <div class="show-wrapper">*/
/* 			<div class="col-md-1 text-right show">*/
/* 			  <label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/* 			</div>*/
/* 			<div class="col-md-2 text-right limit">*/
/* 			  <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 				{% for limits in limits %}*/
/* 				{% if limits.value == limit %}*/
/* 				<option value="{{ limits.href }} " selected="selected">{{ limits.text }}</option>*/
/* 				{% else %}*/
/* 				<option value="{{ limits.href }} ">{{ limits.text }} </option>*/
/* 				{% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		</div>*/
/*       </div>*/
/* 	  </div>*/
/* 	  */
/*       <div class="row cat_prod">*/
/*         {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-block product-thumb">*/
/* 		  	<div class="product-block-inner">*/
/* 				<div class="image">					*/
/* 					{% if product.thumb_swap %}*/
/* 						<a href="{{ product.href }}">*/
/* 							<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive reg-image"/>*/
/* 							<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 						</a>*/
/* 					{% else %}*/
/* 						<a href="{{ product.href }}">*/
/* 							<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/>*/
/* 						</a>*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if not product.special %}        */
/* 					{% else %}*/
/* 						<div class="saleback">*/
/* 							<span class="saleicon sale">Sale</span>         */
/* 						</div>*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if product.special %}        */
/* 						<div class="percentsaving">{{ product.percentsaving }}% off</div>*/
/* 					{% endif %}*/
/* 						*/
/* 					<div class="button-group">*/
/* 						<button type="button" class="wishlist" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 						<div class="quickview-button" data-toggle="tooltip" title="{{ quick_view }}"> <a class="quickbox" href="{{ product.quick }}">*/
/* 							<i class="fa fa-eye" aria-hidden="true"></i></a></div>*/
/* 						<button type="button" class="compare" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* 						<div class="bottom-btn">*/
/* 							<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }} ');"><span>{{ button_cart }}</span></button>*/
/* 					    </div>*/
/* 				  	</div>*/
/* 					*/
/* 					*/
/* 				</div>*/
/*             	*/
/* 				<div class="product-details">*/
/*               		<div class="caption">*/
/* 											*/
/* 						<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 						*/
/* 						<p class="desc">{{ product.description }}</p>*/
/* 					   */
/* 						<div class="rating list-rate">*/
/* 						  {% for i in 1..5 %}*/
/* 							 {% if product.rating < i %}*/
/* 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 							 {% else %}*/
/* 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 							 {% endif %}*/
/* 							 {% endfor %}*/
/* 						</div>*/
/* 					   */
/* 					   {% if product.price %}*/
/* 							<p class="price">*/
/* 							{% if not product.special %}*/
/* 							{{ product.price }}*/
/* 							{% else %}*/
/* 							<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 							{% endif %}*/
/* 							{% if product.tax %}*/
/* 							<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 							{% endif %}*/
/* 							</p>*/
/* 					  {% endif %}*/
/* 					  */
/* 					    <div class="rating">*/
/* 						  {% for i in 1..5 %}*/
/* 							 {% if product.rating < i %}*/
/* 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 							 {% else %}*/
/* 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 							 {% endif %}*/
/* 							 {% endfor %}*/
/* 						</div>*/
/* 						*/
/* 						<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }} ');"><span>{{ button_cart }}</span></button>*/
/* 						*/
/* 						*/
/* 				  </div>*/
/* 				</div>*/
/* 			</div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*        <div class="pagination-wrapper">*/
/* 			<div class="col-sm-6 text-left page-link">{{ pagination }}</div>*/
/* 			<div class="col-sm-6 text-right page-result">{{ results }}</div>*/
/* 	   </div>     */
/*       {% endif %}*/
/*       {% if not categories  and  not products %} */
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
