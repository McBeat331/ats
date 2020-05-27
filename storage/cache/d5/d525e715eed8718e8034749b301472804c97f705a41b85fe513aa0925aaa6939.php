<?php

/* ToolsShop/template/product/search.twig */
class __TwigTemplate_344663a2888cf8d305bb0dd29481de5e0ca7fa20a51bff72db5c0fa6d3532077 extends Twig_Template
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
<div id=\"product-search\" class=\"container\">
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
      <label class=\"control-label \" for=\"input-search\">";
        // line 18
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 21
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3 sort\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 25
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            echo "            ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 28
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            } else {
                // line 30
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "            ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 34
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                } else {
                    // line 36
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    echo "            ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 40
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    } else {
                        // line 42
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    }
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
        <div class=\"col-sm-3 search_subcategory\">
          <label class=\"checkbox-inline\">
           ";
        // line 51
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 52
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 54
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 56
        echo "            ";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>
      </div>
      <p>
          <label class=\"checkbox-inline\">
          ";
        // line 61
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 62
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 64
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 66
        echo "          ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 68
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      <h2>";
        // line 69
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h2>
      ";
        // line 70
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 71
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" data-toggle=\"tooltip\" title=\"";
            // line 74
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" data-toggle=\"tooltip\" title=\"";
            // line 75
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          </div>
        </div>
\t\t<div class=\"compare-total\"><a href=\"";
            // line 78
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
\t\t<div class=\"pagination-right\">
\t\t <div class=\"sort-by-wrapper\">
\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t  <label class=\"control-label\" for=\"input-sort\">";
            // line 82
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t";
                // line 87
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 88
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 90
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo " </option>
\t\t\t\t ";
                }
                // line 92
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t </div>
\t\t <div class=\"show-wrapper\">
\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t  <label class=\"control-label\" for=\"input-limit\">";
            // line 98
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 103
                echo "\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 104
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 106
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo " </option>
\t\t\t\t";
                }
                // line 108
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t</div>
      </div>
\t  </div>
      <br />
      <div class=\"row cat_prod\">
        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 117
                echo "        <div class=\"product-layout product-list col-xs-12\">
        \t<div class=\"product-block product-thumb\">
\t\t  \t\t<div class=\"product-block-inner\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t";
                // line 121
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 122
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 123
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 124
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                } else {
                    // line 127
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 128
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 131
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 132
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t\t";
                } else {
                    // line 134
                    echo "\t\t\t\t\t\t<div class=\"saleback\">
\t\t\t\t\t\t<span class=\"saleicon sale\">Sale</span>         
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 139
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t\t\t<div class=\"percentsaving\">";
                    // line 140
                    echo $this->getAttribute($context["product"], "percentsaving", array());
                    echo "% off</div>
\t\t\t\t\t\t";
                }
                // line 142
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" title=\"";
                // line 144
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<div class=\"quickview-button\" data-toggle=\"tooltip\" title=\"";
                // line 145
                echo (isset($context["quick_view"]) ? $context["quick_view"] : null);
                echo "\"> <a class=\"quickbox\" href=\"";
                echo $this->getAttribute($context["product"], "quick", array());
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"compare\" data-toggle=\"tooltip\" title=\"";
                // line 147
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 148
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t 
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 157
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"rating list-rate\">
\t\t\t\t\t\t\t\t";
                // line 160
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 164
                        echo "\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 166
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   
\t\t\t\t\t\t   <p class=\"desc\">";
                // line 169
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t   ";
                // line 171
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 172
                    echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                    // line 173
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 176
                        echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 178
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 179
                        echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 181
                    echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t   ";
                }
                // line 183
                echo "\t\t\t\t\t  
\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t  ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 187
                        echo "\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 189
                        echo "\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t ";
                    }
                    // line 191
                    echo "\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t    <button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 194
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
        \t</div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "      </div>
       <div class=\"pagination-wrapper\">
\t\t\t<div class=\"col-sm-6 text-left page-link\">";
            // line 205
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right page-result\">";
            // line 206
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
\t   </div>  
      ";
        } else {
            // line 209
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 211
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 212
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 214
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';
\t
\tvar search = \$('#content input[name=\\'search\\']').prop('value');
\t
\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');
\t
\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}
\t
\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');
\t
\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}
\t\t
\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');
\t
\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 214,  612 => 212,  607 => 211,  601 => 209,  595 => 206,  591 => 205,  587 => 203,  568 => 194,  564 => 192,  558 => 191,  554 => 189,  550 => 187,  547 => 186,  543 => 185,  539 => 183,  535 => 181,  527 => 179,  524 => 178,  516 => 176,  510 => 174,  508 => 173,  505 => 172,  503 => 171,  498 => 169,  494 => 167,  488 => 166,  484 => 164,  480 => 162,  477 => 161,  473 => 160,  465 => 157,  449 => 148,  443 => 147,  436 => 145,  430 => 144,  426 => 142,  421 => 140,  417 => 139,  414 => 138,  408 => 134,  403 => 132,  400 => 131,  390 => 128,  385 => 127,  375 => 124,  367 => 123,  362 => 122,  360 => 121,  354 => 117,  350 => 116,  341 => 109,  335 => 108,  327 => 106,  319 => 104,  316 => 103,  312 => 102,  305 => 98,  298 => 93,  292 => 92,  284 => 90,  276 => 88,  274 => 87,  268 => 86,  261 => 82,  252 => 78,  246 => 75,  242 => 74,  237 => 71,  235 => 70,  231 => 69,  227 => 68,  221 => 66,  217 => 64,  213 => 62,  211 => 61,  202 => 56,  198 => 54,  194 => 52,  192 => 51,  186 => 47,  180 => 46,  174 => 45,  168 => 44,  160 => 42,  152 => 40,  149 => 39,  144 => 38,  136 => 36,  128 => 34,  125 => 33,  120 => 32,  112 => 30,  104 => 28,  101 => 27,  97 => 26,  93 => 25,  84 => 21,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-search" class="container">*/
/*   <ul class="breadcrumb">*/
/*      {% for breadcrumb in breadcrumbs %}*/
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
/*       <label class="control-label " for="input-search">{{ entry_search }}</label>*/
/*       <div class="row">*/
/*         <div class="col-sm-4">*/
/*           <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/*         </div>*/
/*         <div class="col-sm-3 sort">*/
/*           <select name="category_id" class="form-control">*/
/*             <option value="0">{{ text_category }}</option>*/
/*             {% for category_1 in categories %}*/
/*             {% if category_1.category_id == category_id %}*/
/*             <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_2 in category_1.children %}*/
/*             {% if category_2.category_id == category_id %}*/
/*             <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_3 in category_2.children %}*/
/*             {% if category_3.category_id == category_id %}*/
/*             <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-sm-3 search_subcategory">*/
/*           <label class="checkbox-inline">*/
/*            {% if sub_category %}*/
/*             <input type="checkbox" name="sub_category" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="sub_category" value="1" />*/
/*             {% endif %}*/
/*             {{ text_sub_category }}</label>*/
/*         </div>*/
/*       </div>*/
/*       <p>*/
/*           <label class="checkbox-inline">*/
/*           {% if description %}*/
/*           <input type="checkbox" name="description" value="1" id="description" checked="checked" />*/
/*           {% else %}*/
/*           <input type="checkbox" name="description" value="1" id="description" />*/
/*           {% endif %}*/
/*           {{ entry_description }}</label>*/
/*       </p>*/
/*       <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary" />*/
/*       <h2>{{ text_search }}</h2>*/
/*       {% if products %}*/
/*       <div class="category_filter">*/
/*         <div class="col-md-4 btn-list-grid">*/
/*           <div class="btn-group">*/
/*             <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/* 			<button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*           </div>*/
/*         </div>*/
/* 		<div class="compare-total"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
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
/*       <br />*/
/*       <div class="row cat_prod">*/
/*         {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*         	<div class="product-block product-thumb">*/
/* 		  		<div class="product-block-inner">*/
/* 					<div class="image">*/
/* 						{% if product.thumb_swap %}*/
/* 							<a href="{{ product.href }}">*/
/* 								<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive reg-image"/>*/
/* 								<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 							</a>*/
/* 						{% else %}*/
/* 							<a href="{{ product.href }}">*/
/* 								<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/>*/
/* 							</a>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% if not product.special %}        */
/* 						{% else %}*/
/* 						<div class="saleback">*/
/* 						<span class="saleicon sale">Sale</span>         */
/* 						</div>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% if product.special %}        */
/* 							<div class="percentsaving">{{ product.percentsaving }}% off</div>*/
/* 						{% endif %}*/
/* 							*/
/* 						<div class="button-group">*/
/* 							<button type="button" class="wishlist" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 							<div class="quickview-button" data-toggle="tooltip" title="{{ quick_view }}"> <a class="quickbox" href="{{ product.quick }}">*/
/* 								<i class="fa fa-eye" aria-hidden="true"></i></a></div>*/
/* 							<button type="button" class="compare" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* 							<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }} ');"><span>{{ button_cart }}</span></button>*/
/* 						</div>	*/
/* 						*/
/* 										*/
/* 					</div>*/
/* 				*/
/* 					<div class="product-details">*/
/* 						<div class="caption">*/
/* 						 */
/* 							<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 							*/
/* 							<div class="rating list-rate">*/
/* 								{% for i in 1..5 %}*/
/* 								{% if product.rating < i %}*/
/* 								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								{% else %}*/
/* 								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								{% endif %}*/
/* 								{% endfor %}*/
/* 						   </div>*/
/* 						   */
/* 						   <p class="desc">{{ product.description }}</p>*/
/* 											   */
/* 						   {% if product.price %}*/
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
/* 						   {% endif %}*/
/* 					  */
/* 							<div class="rating">*/
/* 							  {% for i in 1..5 %}*/
/* 								 {% if product.rating < i %}*/
/* 								 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								 {% else %}*/
/* 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								 {% endif %}*/
/* 								 {% endfor %}*/
/* 						    </div>*/
/* 							*/
/* 						    <button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }} ');"><span>{{ button_cart }}</span></button>				*/
/* 					*/
/* 						   */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/*         	</div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*        <div class="pagination-wrapper">*/
/* 			<div class="col-sm-6 text-left page-link">{{ pagination }}</div>*/
/* 			<div class="col-sm-6 text-right page-result">{{ results }}</div>*/
/* 	   </div>  */
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* <script type="text/javascript"><!--*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* 	*/
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* 	*/
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* 	*/
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* 	*/
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* 	*/
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* 		*/
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* 	*/
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
