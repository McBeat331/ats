<?php

/* ToolsShop/template/product/product.twig */
class __TwigTemplate_16cd566c1e7b8a40227035f8a2a3f3a0de8a0ff0552eeca9e3d3fe41fee5eb28 extends Twig_Template
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
<div id=\"product-product\" class=\"container\">
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
            $context["class"] = "col-sm-6 productpage";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9 productpage";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12 productpage";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\"> ";
        // line 17
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "        ";
            $context["class"] = "col-sm-6 product-left";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "        ";
            $context["class"] = "col-sm-5 product-left";
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> 
\t\t<div class=\"product-info\">\t\t
\t\t ";
        // line 24
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 25
            echo "          <div class=\"left product-image thumbnails\">
         ";
            // line 26
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                echo "      
\t   <!-- Codezeel Cloud-Zoom Image Effect Start -->
\t  \t<div class=\"image\"><a class=\"thumbnail\" href=\"";
                // line 28
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img id=\"tmzoom\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-zoom-image=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a></div> 
      ";
            }
            // line 30
            echo "      ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 31
                echo "\t  \t ";
                $context["sliderFor"] = 3;
                // line 32
                echo "\t\t ";
                $context["imageCount"] = twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null));
                echo " 
\t\t \t
\t\t <div class=\"additional-carousel\">\t
\t\t  ";
                // line 35
                if (((isset($context["imageCount"]) ? $context["imageCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    // line 36
                    echo "\t\t  \t<div class=\"customNavigation\">
\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t</div> 
\t\t ";
                }
                // line 40
                echo "      
\t\t <div id=\"additional-carousel\" class=\"image-additional ";
                // line 41
                if (((isset($context["imageCount"]) ? $context["imageCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "product-carousel";
                }
                echo "\">
\t\t\t<div class=\"slider-item\">
\t\t\t\t<div class=\"product-block\">
\t\t\t\t\t<a href=\"";
                // line 44
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-zoom-image=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" width=\"80\" height=\"95\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t\t\t
\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 49
                    echo "\t\t\t\t<div class=\"slider-item\">
\t\t\t\t<div class=\"product-block\">\t\t
        \t\t\t<a href=\"";
                    // line 51
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-zoom-image=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" width=\"80\" height=\"95\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></a>
\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t\t
    \t  </div>
\t\t  <span class=\"additional_default_width\" style=\"display:none; visibility:hidden\"></span>
\t\t  </div>
\t\t";
            }
            // line 58
            echo "\t\t  \t  

\t<!-- Codezeel Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 63
        echo "\t</div>
\t</div>
\t
        ";
        // line 66
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 67
            echo "        ";
            $context["class"] = "col-sm-6 product-right";
            // line 68
            echo "        ";
        } else {
            // line 69
            echo "        ";
            $context["class"] = "col-sm-7 product-right";
            // line 70
            echo "        ";
        }
        // line 71
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          
\t\t  <h3 class=\"product-title\">";
        // line 73
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
\t\t  
\t\t  ";
        // line 75
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 76
            echo "          <div class=\"rating-wrapper\">
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 78
                echo "              ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 79
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "<a href=\"\" class=\"review-count\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>  <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\" class=\"write-review\"><i class=\"fa fa-pencil\"></i>";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
           
          </div>
          ";
        }
        // line 83
        echo "\t\t  
          <ul class=\"list-unstyled attr\">
            ";
        // line 85
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 86
            echo "            <li><span class=\"desc\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo ": </span><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
            ";
        }
        // line 88
        echo "            <li><span class=\"desc\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " </span> ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
            ";
        // line 89
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 90
            echo "            <li><span class=\"desc\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " </span> ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
            ";
        }
        // line 92
        echo "            <li><span class=\"desc\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " </span> ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
          </ul>
\t\t  
          ";
        // line 95
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 96
            echo "          <ul class=\"list-unstyled price\">
            ";
            // line 97
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 98
                echo "            <li>
              <h3 class=\"product-price\">";
                // line 99
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h3>
            </li>
            ";
            } else {
                // line 102
                echo "            <li>
\t\t\t\t<span class=\"old-price\" style=\"text-decoration: line-through;\">";
                // line 103
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
\t\t\t</li>
            <li>
\t\t\t\t<h3 class=\"special-price\">";
                // line 106
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h3>
\t\t\t</li>
\t\t\t";
            }
            // line 109
            echo "            ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 110
                echo "            <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
            ";
            }
            // line 112
            echo "            ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 113
                echo "            <li class=\"rewardpoint\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 115
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 116
                echo "           
            ";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 118
                    echo "            <li class=\"discount\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "            ";
            }
            // line 121
            echo "          </ul>
          ";
        }
        // line 123
        echo "\t\t  
          <div id=\"product\">
\t\t   ";
        // line 125
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 126
            echo "            <h3 class=\"product-option\">";
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 128
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 129
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 130
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 131
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 132
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 134
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 135
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 136
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 137
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "              </select>
            </div>
            ";
                }
                // line 142
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 143
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 144
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 145
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 146
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 148
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 149
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 150
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 151
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 152
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 153
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo " </div>
            </div>
            ";
                }
                // line 158
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 159
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 160
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 161
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 162
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 164
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 165
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 166
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 167
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 168
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 169
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo " </div>
            </div>
            ";
                }
                // line 174
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 175
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 176
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 177
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 180
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 181
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 182
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 183
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 186
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 187
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 188
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 189
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 190
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 193
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 194
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 195
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 197
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 203
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 204
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 205
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 207
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 213
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 214
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 215
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 217
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 223
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "            ";
        }
        // line 225
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 226
            echo "            <hr>
            <h3>";
            // line 227
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 230
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 232
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 238
        echo "            <div class=\"form-group qty\">
              \t<label class=\"control-label\" for=\"input-quantity\">";
        // line 239
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
              \t<input type=\"text\" name=\"quantity\" value=\"";
        // line 240
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              \t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 241
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
          \t\t";
        // line 242
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 243
            echo "            \t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            \t";
        }
        // line 245
        echo "\t\t\t\t
\t\t\t  \t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 246
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
            \t<button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default wishlist\" title=\"";
        // line 247
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"></button>
            \t<button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default compare\" title=\"";
        // line 248
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"></button>
           </div>
            
           <hr>
\t\t\t <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 253
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
\t\t\t</div>
          </div>
\t\t  
\t\t   <!-- product page tab code start-->
\t\t ";
        // line 260
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 261
            echo "         ";
            $context["class"] = "col-sm-6";
            // line 262
            echo "         ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 263
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 264
            echo "         ";
        } else {
            // line 265
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 266
            echo "        ";
        }
        // line 267
        echo "\t\t
\t  <div id=\"tabs_info\" class=\"product-tab ";
        // line 268
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 270
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
            ";
        // line 271
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 272
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
            ";
        }
        // line 274
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 275
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
            ";
        }
        // line 277
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 279
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 280
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 281
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 284
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 286
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 291
                    echo "                <tr>
                  <td>";
                    // line 292
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 293
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            echo "              </table>
            </div>
            ";
        }
        // line 301
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 302
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h3>";
            // line 305
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h3>
                ";
            // line 306
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 307
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 309
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 310
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 315
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 317
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 322
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 323
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 333
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 335
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 338
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 342
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 344
            echo "              </form>
            </div>
            ";
        }
        // line 346
        echo "</div>
\t\t  </div>
      </div>
\t  
\t <!-- Codezeel Related Products Start -->\t
\t ";
        // line 351
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 352
            echo "\t  <div class=\"box related\">
\t\t  <div class=\"box-head\">
\t\t\t\t<div class=\"box-heading\">";
            // line 354
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</div>
\t\t  </div>
\t\t  
\t\t  <div class=\"box-content\">
\t\t\t <div id=\"products-related\" class=\"related-products\">
\t\t\t\t
\t\t\t\t";
            // line 360
            $context["sliderFor"] = 6;
            // line 361
            echo "\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 363
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                // line 364
                echo "\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t</div>\t
\t\t\t\t";
            }
            // line 369
            echo "\t\t\t\t
\t\t\t\t<div class=\"box-product ";
            // line 370
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "related-carousel";
            } else {
                echo "related-grid";
            }
            echo "\">
\t\t\t\t";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 372
                echo "\t\t\t\t\t<div class=\"";
                if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t";
                // line 376
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 377
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 378
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 379
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 382
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 383
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 385
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 386
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 387
                    echo "   
\t\t\t\t\t\t\t\t\t<span class=\"saleicon sale\">Sale</span>  
\t\t\t\t\t\t\t\t\t";
                }
                // line 390
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 391
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo "        
\t\t\t\t\t\t\t\t\t\t<div class=\"percentsaving\">";
                    // line 392
                    echo $this->getAttribute($context["product"], "percentsaving", array());
                    echo "% off</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 394
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 396
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\" data-toggle=\"tooltip\" title=\"";
                // line 398
                echo (isset($context["quick_view"]) ? $context["quick_view"] : null);
                echo "\"> <a class=\"quickbox\" href=\"";
                echo $this->getAttribute($context["product"], "quick", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 400
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo " \" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 402
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 411
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 414
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 415
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 416
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 417
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 418
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 420
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 422
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 423
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 425
                    echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 427
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 429
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 430
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 432
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 435
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 436
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 446
            echo "\t\t\t\t</div>
\t\t\t </div>
\t\t   </div>
\t\t   <span class=\"related_default_width\" style=\"display:none; visibility:hidden\"></span>
\t\t</div>
        ";
        }
        // line 452
        echo "\t\t<!-- Codezeel Related Products End -->
\t\t
        ";
        // line 454
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 455
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 456
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 457
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
        ";
                } else {
                    // line 458
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 459
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 461
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 462
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$.notify({
\t\t\t\t\tmessage: json['success'],
\t\t\t\t\ttarget: '_blank'
\t\t\t\t},{
\t\t\t\t\t// settings
\t\t\t\t\telement: 'body',
\t\t\t\t\tposition: null,
\t\t\t\t\ttype: \"info\",
\t\t\t\t\tallow_dismiss: true,
\t\t\t\t\tnewest_on_top: false,
\t\t\t\t\tplacement: {
\t\t\t\t\t\tfrom: \"top\",
\t\t\t\t\t\talign: \"center\"
\t\t\t\t\t},
\t\t\t\t\toffset: 0,
\t\t\t\t\tspacing: 10,
\t\t\t\t\tz_index: 2031,
\t\t\t\t\tdelay: 5000,
\t\t\t\t\ttimer: 1000,
\t\t\t\t\turl_target: '_blank',
\t\t\t\t\tmouse_over: null,
\t\t\t\t\tanimate: {
\t\t\t\t\t\tenter: 'animated fadeInDown',
\t\t\t\t\t\texit: 'animated fadeOutUp'
\t\t\t\t\t},
\t\t\t\t\tonShow: null,
\t\t\t\t\tonShown: null,
\t\t\t\t\tonClose: null,
\t\t\t\t\tonClosed: null,
\t\t\t\t\ticon_type: 'class',
\t\t\t\t\ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
\t\t\t\t\t\t'<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
\t\t\t\t\t\t'<div class=\"progress\" data-notify=\"progressbar\">' +
\t\t\t\t\t\t\t'<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
\t\t\t\t\t'</div>' 
\t\t\t\t});

\t\t\t\t\$('#cart > button').html('<i class=\"fa fa-shopping-cart\"></i><span id=\"cart-total\"> ' + json['total'] + '</span><span id=\"cart-total-mobile\">' + json['total'][0] + '</span>');

\t\t\t\t//\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 578
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 583
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 589
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 656
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 660
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

//\$(document).ready(function() {
//\t\$('.thumbnails').magnificPopup({
//\t\ttype:'image',
//\t\tdelegate: 'a',
//\t\tgallery: {
//\t\t\tenabled: true
//\t\t}
//\t});
//});


\$(document).ready(function() {
if (\$(window).width() > 767) {
\t\t\$(\"#tmzoom\").elevateZoom({
\t\t\t\t
\t\t\t\tgallery:'additional-carousel',
\t\t\t\t//inner zoom\t\t\t\t 
\t\t\t\t\t\t\t\t 
\t\t\t\tzoomType : \"inner\", 
\t\t\t\tcursor: \"crosshair\" 
\t\t\t\t
\t\t\t\t/*//tint
\t\t\t\t
\t\t\t\ttint:true, 
\t\t\t\ttintColour:'#F90', 
\t\t\t\ttintOpacity:0.5
\t\t\t\t
\t\t\t\t//lens zoom
\t\t\t\t
\t\t\t\tzoomType : \"lens\", 
\t\t\t\tlensShape : \"round\", 
\t\t\t\tlensSize : 200 
\t\t\t\t
\t\t\t\t//Mousewheel zoom
\t\t\t\t
\t\t\t\tscrollZoom : true*/
\t\t\t\t
\t\t\t\t
\t\t\t});
\t\tvar z_index = 0;
     \t\t\t    \t\t
     \t\t\t    \t\t\$(document).on('click', '.thumbnail', function () {
     \t\t\t    \t\t  \$('.thumbnails').magnificPopup('open', z_index);
     \t\t\t    \t\t  return false;
     \t\t\t    \t\t});
\t\t\t    \t\t
     \t\t\t    \t\t\$('.additional-carousel a').click(function() {
     \t\t\t    \t\t\tvar smallImage = \$(this).attr('data-image');
     \t\t\t    \t\t\tvar largeImage = \$(this).attr('data-zoom-image');
     \t\t\t    \t\t\tvar ez =   \$('#tmzoom').data('elevateZoom');\t
     \t\t\t    \t\t\t\$('.thumbnail').attr('href', largeImage);  
     \t\t\t    \t\t\tez.swaptheimage(smallImage, largeImage); 
     \t\t\t    \t\t\tz_index = \$(this).index('#additional-carousel a');
     \t\t\t    \t\t\treturn false;
     \t\t\t    \t\t});
\t\t\t
\t}else{
\t\t\$(document).on('click', '.thumbnail', function () {
\t\t\$('.thumbnails').magnificPopup('open', 0);
\t\treturn false;
\t\t});
\t}
});
\$(document).ready(function() {     
\t\$('.thumbnails').magnificPopup({
\t\tdelegate: 'a.elevatezoom-gallery',
\t\ttype: 'image',
\t\ttLoading: 'Loading image #%curr%...',
\t\tmainClass: 'mfp-with-zoom',
\t\tgallery: {
\t\t\tenabled: true,
\t\t\tnavigateByImgClick: true,
\t\t\tpreload: [0,1] // Will preload 0 - before current, and 1 after the current image
\t\t},
\t\timage: {
\t\t\ttError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
\t\t\ttitleSrc: function(item) {
\t\t\t\treturn item.el.attr('title');
\t\t\t}
\t\t}
\t});
});


//--></script> 
";
        // line 773
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1745 => 773,  1629 => 660,  1622 => 656,  1552 => 589,  1543 => 583,  1535 => 578,  1416 => 462,  1411 => 461,  1402 => 459,  1395 => 458,  1385 => 457,  1381 => 456,  1376 => 455,  1374 => 454,  1370 => 452,  1362 => 446,  1347 => 436,  1341 => 435,  1336 => 432,  1329 => 430,  1325 => 429,  1321 => 427,  1317 => 425,  1309 => 423,  1306 => 422,  1298 => 420,  1292 => 418,  1290 => 417,  1287 => 416,  1285 => 415,  1282 => 414,  1275 => 411,  1261 => 402,  1254 => 400,  1247 => 398,  1240 => 396,  1236 => 394,  1231 => 392,  1227 => 391,  1224 => 390,  1219 => 387,  1214 => 386,  1211 => 385,  1202 => 383,  1197 => 382,  1187 => 379,  1179 => 378,  1174 => 377,  1172 => 376,  1160 => 372,  1156 => 371,  1142 => 370,  1139 => 369,  1132 => 364,  1130 => 363,  1124 => 361,  1122 => 360,  1113 => 354,  1109 => 352,  1107 => 351,  1100 => 346,  1095 => 344,  1089 => 342,  1080 => 338,  1074 => 335,  1069 => 333,  1056 => 323,  1052 => 322,  1044 => 317,  1039 => 315,  1031 => 310,  1027 => 309,  1023 => 307,  1021 => 306,  1017 => 305,  1012 => 302,  1009 => 301,  1004 => 298,  997 => 296,  988 => 293,  984 => 292,  981 => 291,  977 => 290,  970 => 286,  966 => 284,  962 => 283,  958 => 281,  956 => 280,  952 => 279,  948 => 277,  942 => 275,  939 => 274,  933 => 272,  931 => 271,  927 => 270,  922 => 268,  919 => 267,  916 => 266,  913 => 265,  910 => 264,  907 => 263,  904 => 262,  901 => 261,  899 => 260,  889 => 253,  879 => 248,  873 => 247,  867 => 246,  864 => 245,  858 => 243,  856 => 242,  852 => 241,  848 => 240,  844 => 239,  841 => 238,  835 => 234,  824 => 232,  820 => 231,  816 => 230,  810 => 227,  807 => 226,  804 => 225,  801 => 224,  795 => 223,  782 => 217,  775 => 215,  768 => 214,  765 => 213,  752 => 207,  745 => 205,  738 => 204,  735 => 203,  722 => 197,  715 => 195,  708 => 194,  705 => 193,  697 => 190,  689 => 189,  685 => 188,  678 => 187,  675 => 186,  663 => 183,  657 => 182,  650 => 181,  647 => 180,  635 => 177,  629 => 176,  622 => 175,  619 => 174,  614 => 171,  606 => 169,  599 => 168,  597 => 167,  592 => 166,  576 => 165,  570 => 164,  566 => 162,  560 => 161,  556 => 160,  549 => 159,  546 => 158,  541 => 155,  533 => 153,  526 => 152,  524 => 151,  520 => 150,  502 => 149,  496 => 148,  492 => 146,  486 => 145,  482 => 144,  475 => 143,  472 => 142,  467 => 139,  460 => 137,  453 => 136,  451 => 135,  444 => 134,  440 => 133,  436 => 132,  430 => 131,  424 => 130,  417 => 129,  414 => 128,  410 => 127,  405 => 126,  403 => 125,  399 => 123,  395 => 121,  392 => 120,  381 => 118,  377 => 117,  374 => 116,  371 => 115,  363 => 113,  360 => 112,  352 => 110,  349 => 109,  343 => 106,  337 => 103,  334 => 102,  328 => 99,  325 => 98,  323 => 97,  320 => 96,  318 => 95,  309 => 92,  301 => 90,  299 => 89,  292 => 88,  282 => 86,  280 => 85,  276 => 83,  261 => 79,  254 => 78,  250 => 77,  247 => 76,  245 => 75,  240 => 73,  234 => 71,  231 => 70,  228 => 69,  225 => 68,  222 => 67,  220 => 66,  215 => 63,  208 => 58,  201 => 54,  179 => 51,  175 => 49,  171 => 48,  152 => 44,  144 => 41,  141 => 40,  134 => 36,  132 => 35,  125 => 32,  122 => 31,  119 => 30,  104 => 28,  99 => 26,  96 => 25,  94 => 24,  88 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6 productpage' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9 productpage' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12 productpage' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row"> {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6 product-left' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-5 product-left' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}"> */
/* 		<div class="product-info">		*/
/* 		 {% if thumb or images %}*/
/*           <div class="left product-image thumbnails">*/
/*          {% if thumb %}      */
/* 	   <!-- Codezeel Cloud-Zoom Image Effect Start -->*/
/* 	  	<div class="image"><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img id="tmzoom" src="{{ thumb }}" data-zoom-image="{{ popup }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></div> */
/*       {% endif %}*/
/*       {% if images %}*/
/* 	  	 {% set sliderFor = 3 %}*/
/* 		 {% set imageCount = images|length %} */
/* 		 	*/
/* 		 <div class="additional-carousel">	*/
/* 		  {% if imageCount >= sliderFor %}*/
/* 		  	<div class="customNavigation">*/
/* 				<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 				<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 			</div> */
/* 		 {% endif %}      */
/* 		 <div id="additional-carousel" class="image-additional {% if imageCount >= sliderFor %}product-carousel{% endif %}">*/
/* 			<div class="slider-item">*/
/* 				<div class="product-block">*/
/* 					<a href="{{ popup }}" title="{{ heading_title }}" class="elevatezoom-gallery" data-image="{{ thumb }}" data-zoom-image="{{ popup }}"><img src="{{ thumb }}" width="80" height="95" title="{{ heading_title }}" alt="{{ heading_title }}" /></a>*/
/* 				</div>*/
/* 			</div>		*/
/* 				*/
/* 			{% for  image in images %}*/
/* 				<div class="slider-item">*/
/* 				<div class="product-block">		*/
/*         			<a href="{{ image.popup }}" title="{{ heading_title }}" class="elevatezoom-gallery" data-image="{{ image.thumb }}" data-zoom-image="{{ image.popup }}"><img src="{{ image.thumb }}" width="80" height="95" title="{{ heading_title }}" alt="{{ heading_title }}" /></a>*/
/* 				</div>*/
/* 				</div>		*/
/* 	        {% endfor %}				*/
/*     	  </div>*/
/* 		  <span class="additional_default_width" style="display:none; visibility:hidden"></span>*/
/* 		  </div>*/
/* 		{% endif %}		  	  */
/* */
/* 	<!-- Codezeel Cloud-Zoom Image Effect End-->*/
/*     </div>*/
/*     {% endif %}*/
/* 	</div>*/
/* 	</div>*/
/* 	*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6 product-right' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-7 product-right' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           */
/* 		  <h3 class="product-title">{{ heading_title }}</h3>*/
/* 		  */
/* 		  {% if review_status %}*/
/*           <div class="rating-wrapper">*/
/*             {% for i in 1..5 %}*/
/*               {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*               {% endfor %}<a href="" class="review-count" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a>  <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" class="write-review"><i class="fa fa-pencil"></i>{{ text_write }}</a>*/
/*            */
/*           </div>*/
/*           {% endif %}*/
/* 		  */
/*           <ul class="list-unstyled attr">*/
/*             {% if manufacturer %}*/
/*             <li><span class="desc">{{ text_manufacturer }}: </span><a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li><span class="desc">{{ text_model }} </span> {{ model }}</li>*/
/*             {% if reward %}*/
/*             <li><span class="desc">{{ text_reward }} </span> {{ reward }}</li>*/
/*             {% endif %}*/
/*             <li><span class="desc">{{ text_stock }} </span> {{ stock }}</li>*/
/*           </ul>*/
/* 		  */
/*           {% if price %}*/
/*           <ul class="list-unstyled price">*/
/*             {% if not special %}*/
/*             <li>*/
/*               <h3 class="product-price">{{ price }}</h3>*/
/*             </li>*/
/*             {% else %}*/
/*             <li>*/
/* 				<span class="old-price" style="text-decoration: line-through;">{{ price }}</span>*/
/* 			</li>*/
/*             <li>*/
/* 				<h3 class="special-price">{{ special }}</h3>*/
/* 			</li>*/
/* 			{% endif %}*/
/*             {% if tax %}*/
/*             <li class="price-tax">{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li class="rewardpoint">{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*            */
/*             {% for discount in discounts %}*/
/*             <li class="discount">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/* 		  */
/*           <div id="product">*/
/* 		   {% if options %}*/
/*             <h3 class="product-option">{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="form-group qty">*/
/*               	<label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*               	<input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/*               	<input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*           		{% if minimum > 1 %}*/
/*             	<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             	{% endif %}*/
/* 				*/
/* 			  	<button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*             	<button type="button" data-toggle="tooltip" class="btn btn-default wishlist" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"></button>*/
/*             	<button type="button" data-toggle="tooltip" class="btn btn-default compare" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"></button>*/
/*            </div>*/
/*             */
/*            <hr>*/
/* 			 <!-- AddThis Button BEGIN -->*/
/*             <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/*             <!-- AddThis Button END --> */
/* 			</div>*/
/*           </div>*/
/* 		  */
/* 		   <!-- product page tab code start-->*/
/* 		 {% if column_left and column_right %}*/
/*          {% set class = 'col-sm-6' %}*/
/*          {%  elseif column_left or column_right %}*/
/*          {% set class = 'col-sm-12' %}*/
/*          {% else %}*/
/*          {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/* 		*/
/* 	  <div id="tabs_info" class="product-tab {{ class }}">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*             <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h3>{{ text_write }}</h3>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}</div>*/
/* 		  </div>*/
/*       </div>*/
/* 	  */
/* 	 <!-- Codezeel Related Products Start -->	*/
/* 	 {% if products %}*/
/* 	  <div class="box related">*/
/* 		  <div class="box-head">*/
/* 				<div class="box-heading">{{ text_related }}</div>*/
/* 		  </div>*/
/* 		  */
/* 		  <div class="box-content">*/
/* 			 <div id="products-related" class="related-products">*/
/* 				*/
/* 				{% set sliderFor = 6 %}*/
/* 				{% set productCount = products|length %} */
/* 				*/
/* 				{% if productCount >= sliderFor %}*/
/* 					<div class="customNavigation">*/
/* 						<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 						<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 					</div>	*/
/* 				{% endif %}*/
/* 				*/
/* 				<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %}productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}related-carousel{% else %}related-grid{% endif %}">*/
/* 				{% for product in products %}*/
/* 					<div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/* 						<div class="product-block product-thumb transition">*/
/* 							<div class="product-block-inner">*/
/* 								<div class="image">*/
/* 									{% if product.thumb_swap %}*/
/* 									<a href="{{ product.href }}">*/
/* 										<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive reg-image"/>*/
/* 										<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 									</a>*/
/* 									{% else %}*/
/* 									<a href="{{ product.href }}">*/
/* 										<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/></a>*/
/* 									{% endif %}*/
/* 									*/
/* 									{% if not product.special %}        */
/* 									{% else %}   */
/* 									<span class="saleicon sale">Sale</span>  */
/* 									{% endif %}*/
/* 									*/
/* 									{% if product.special %}        */
/* 										<div class="percentsaving">{{ product.percentsaving }}% off</div>*/
/* 									{% endif %}*/
/* 						*/
/* 									<div class="button-group">*/
/* 										<button class="wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');">*/
/* 											<i class="fa fa-heart"></i></button>*/
/* 										<div class="quickview-button" data-toggle="tooltip" title="{{ quick_view }}"> <a class="quickbox" href="{{ product.quick }}">*/
/* 											<i class="fa fa-eye" aria-hidden="true"></i></a></div>*/
/* 										<button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');">*/
/* 											<i class="fa fa-exchange"></i></button>*/
/* 										<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');"><span>{{ button_cart }}</span></button>*/
/* 									</div>*/
/* 																													*/
/* 									*/
/* 								</div>*/
/* 								*/
/* 								<div class="product-details">*/
/* 									<div class="caption">*/
/* 									*/
/* 										<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 										*/
/* 										{# <p class="desc"><?php echo $product['description']; ?></p> #}*/
/* 										*/
/* 										{% if product.price %}*/
/* 											<p class="price">*/
/* 											{% if not product.special %}*/
/* 											{{ product.price }}*/
/* 											{% else %}*/
/* 											<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 											{% endif %}*/
/* 											{% if product.tax %}*/
/* 											<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 											{% endif %}*/
/* 											</p>*/
/* 										{% endif %}*/
/* 										*/
/* 										<div class="rating">*/
/* 											{% for j in 1..5 %}*/
/* 											{% if product.rating < j %} */
/* 											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> */
/* 											{% else %} */
/* 											<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> */
/* 											{% endif %}*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 										*/
/* 									</div>*/
/* 								*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 			 </div>*/
/* 		   </div>*/
/* 		   <span class="related_default_width" style="display:none; visibility:hidden"></span>*/
/* 		</div>*/
/*         {% endif %}*/
/* 		<!-- Codezeel Related Products End -->*/
/* 		*/
/*         {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} </p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().before('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.before('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$.notify({*/
/* 					message: json['success'],*/
/* 					target: '_blank'*/
/* 				},{*/
/* 					// settings*/
/* 					element: 'body',*/
/* 					position: null,*/
/* 					type: "info",*/
/* 					allow_dismiss: true,*/
/* 					newest_on_top: false,*/
/* 					placement: {*/
/* 						from: "top",*/
/* 						align: "center"*/
/* 					},*/
/* 					offset: 0,*/
/* 					spacing: 10,*/
/* 					z_index: 2031,*/
/* 					delay: 5000,*/
/* 					timer: 1000,*/
/* 					url_target: '_blank',*/
/* 					mouse_over: null,*/
/* 					animate: {*/
/* 						enter: 'animated fadeInDown',*/
/* 						exit: 'animated fadeOutUp'*/
/* 					},*/
/* 					onShow: null,*/
/* 					onShown: null,*/
/* 					onClose: null,*/
/* 					onClosed: null,*/
/* 					icon_type: 'class',*/
/* 					template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +*/
/* 						'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button>' +*/
/* 						'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +*/
/* 						'<div class="progress" data-notify="progressbar">' +*/
/* 							'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +*/
/* 						'</div>' +*/
/* 						'<a href="{3}" target="{4}" data-notify="url"></a>' +*/
/* 					'</div>' */
/* 				});*/
/* */
/* 				$('#cart > button').html('<i class="fa fa-shopping-cart"></i><span id="cart-total"> ' + json['total'] + '</span><span id="cart-total-mobile">' + json['total'][0] + '</span>');*/
/* */
/* 				//$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* //$(document).ready(function() {*/
/* //	$('.thumbnails').magnificPopup({*/
/* //		type:'image',*/
/* //		delegate: 'a',*/
/* //		gallery: {*/
/* //			enabled: true*/
/* //		}*/
/* //	});*/
/* //});*/
/* */
/* */
/* $(document).ready(function() {*/
/* if ($(window).width() > 767) {*/
/* 		$("#tmzoom").elevateZoom({*/
/* 				*/
/* 				gallery:'additional-carousel',*/
/* 				//inner zoom				 */
/* 								 */
/* 				zoomType : "inner", */
/* 				cursor: "crosshair" */
/* 				*/
/* 				/*//* /tint*/
/* 				*/
/* 				tint:true, */
/* 				tintColour:'#F90', */
/* 				tintOpacity:0.5*/
/* 				*/
/* 				//lens zoom*/
/* 				*/
/* 				zoomType : "lens", */
/* 				lensShape : "round", */
/* 				lensSize : 200 */
/* 				*/
/* 				//Mousewheel zoom*/
/* 				*/
/* 				scrollZoom : true*//* */
/* 				*/
/* 				*/
/* 			});*/
/* 		var z_index = 0;*/
/*      			    		*/
/*      			    		$(document).on('click', '.thumbnail', function () {*/
/*      			    		  $('.thumbnails').magnificPopup('open', z_index);*/
/*      			    		  return false;*/
/*      			    		});*/
/* 			    		*/
/*      			    		$('.additional-carousel a').click(function() {*/
/*      			    			var smallImage = $(this).attr('data-image');*/
/*      			    			var largeImage = $(this).attr('data-zoom-image');*/
/*      			    			var ez =   $('#tmzoom').data('elevateZoom');	*/
/*      			    			$('.thumbnail').attr('href', largeImage);  */
/*      			    			ez.swaptheimage(smallImage, largeImage); */
/*      			    			z_index = $(this).index('#additional-carousel a');*/
/*      			    			return false;*/
/*      			    		});*/
/* 			*/
/* 	}else{*/
/* 		$(document).on('click', '.thumbnail', function () {*/
/* 		$('.thumbnails').magnificPopup('open', 0);*/
/* 		return false;*/
/* 		});*/
/* 	}*/
/* });*/
/* $(document).ready(function() {     */
/* 	$('.thumbnails').magnificPopup({*/
/* 		delegate: 'a.elevatezoom-gallery',*/
/* 		type: 'image',*/
/* 		tLoading: 'Loading image #%curr%...',*/
/* 		mainClass: 'mfp-with-zoom',*/
/* 		gallery: {*/
/* 			enabled: true,*/
/* 			navigateByImgClick: true,*/
/* 			preload: [0,1] // Will preload 0 - before current, and 1 after the current image*/
/* 		},*/
/* 		image: {*/
/* 			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',*/
/* 			titleSrc: function(item) {*/
/* 				return item.el.attr('title');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* */
/* //--></script> */
/* {{ footer }} */
/* */
