<?php

/* ToolsShop/template/product/quick_view.twig */
class __TwigTemplate_baa9237a3c4eae10e78e72cef67ae9c7c9ebb71883d1f9e84e99bc0866a1b112 extends Twig_Template
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
<div class=\"quickview\">
<div class=\"quickview-container\">
  
  
    <div id=\"content\" class=\"productpage-quickview\">";
        // line 6
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"\">
       ";
        // line 9
        echo "\t\t        
\t\t<div class=\"col-sm-6 product-left\">
\t\t<div class=\"product-info\">
        ";
        // line 12
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 13
            echo "    \t\t<div class=\"left product-image thumbnails\">
      \t";
            // line 14
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 15
                echo "\t  
\t\t<!-- Codezeel Cloud Zoom Image Effect Start -->
\t\t<div class=\"image\"><a class=\"thumbnail\" title=\"";
                // line 17
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
\t\t";
            }
            // line 19
            echo "      \t";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                echo " 
\t\t\t";
                // line 20
                $context["sliderFor"] = 3;
                // line 21
                echo "\t\t\t";
                $context["imageCount"] = twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null));
                echo "\t\t\t 
\t  \t";
            }
            // line 23
            echo "\t\t<!-- Codezeel Cloud Zoom Image Effect End-->
    \t</div>
    \t";
        }
        // line 26
        echo "\t\t</div>
        </div>

        <div class=\"col-sm-6 product-right\">
          <h3 class=\"product-title\">";
        // line 30
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>

\t\t  ";
        // line 32
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 33
            echo "          <div class=\"rating-wrapper\">            
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 35
                echo "              ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    // line 36
                    echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t  ";
                } else {
                    // line 38
                    echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t  ";
                }
                // line 40
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t  </div>
          ";
        }
        // line 43
        echo "\t\t  
          <ul class=\"list-unstyled short-desc attr\">
            ";
        // line 45
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 46
            echo "            <li><span class=\"desc\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo ": </span><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
            ";
        }
        // line 48
        echo "            <li><span class=\"desc\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " </span>";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
            ";
        // line 49
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 50
            echo "            <li><span class=\"desc\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " </span>";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
            ";
        }
        // line 52
        echo "            <li><span class=\"desc\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " </span>";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
          </ul>
\t\t  
\t\t  
\t\t ";
        // line 56
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 57
            echo "          <ul class=\"list-unstyled price\">
            ";
            // line 58
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 59
                echo "            <li>
              <h3 class=\"product-price\">";
                // line 60
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h3>
            </li>
            ";
            } else {
                // line 63
                echo "            <li><span class=\"old-price\" style=\"text-decoration: line-through;\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span> </li>
            <li><h3 class=\"special-price\">";
                // line 64
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h3></li>
            ";
            }
            // line 66
            echo "            ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 67
                echo "            <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo "<span>";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</span></li>
            ";
            }
            // line 69
            echo "            ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 70
                echo "            <li class=\"rewardpoint\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 72
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 73
                echo "            <li>
            </li>
            ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 76
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
                // line 78
                echo "            ";
            }
            // line 79
            echo "          </ul>
          ";
        }
        // line 81
        echo "         
          <div id=\"product2\">
           ";
        // line 83
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 84
            echo "            <hr>
            <h3>";
            // line 85
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 87
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 88
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 89
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 90
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 91
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 93
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 94
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 95
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 96
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "              </select>
            </div>
            ";
                }
                // line 101
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 102
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 103
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 104
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 105
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 107
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 108
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
                        // line 109
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 110
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 111
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 112
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo " </div>
            </div>
            ";
                }
                // line 117
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 118
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 119
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 120
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 121
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 123
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 124
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
                        // line 125
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 126
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 127
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 128
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo " </div>
            </div>
            ";
                }
                // line 133
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 134
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 135
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 136
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
                // line 139
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 140
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 141
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 142
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
                // line 145
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 146
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 147
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 148
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 149
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 152
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 153
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 154
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 156
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
                // line 162
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 163
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 164
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 166
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
                // line 172
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 173
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 174
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 176
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
                // line 182
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "            ";
        }
        // line 184
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 185
            echo "            <hr>
            <h3>";
            // line 186
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 189
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 191
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
            // line 193
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 197
        echo "            
\t\t
\t\t\t<div class=\"form-group cart-block qty\">
              \t<label class=\"control-label\" for=\"input-quantity\">";
        // line 200
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
             \t<input type=\"text\" name=\"quantity\" value=\"";
        // line 201
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              \t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 202
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
              
              \t<button type=\"button\" id=\"button-cart2\" data-loading-text=\"";
        // line 204
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button> 
\t\t\t  \t<button type=\"button\"  class=\"btn btn-default wishlist\" title=\"";
        // line 205
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"parent.wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">{ button_wishlist }}</button>
            \t<button type=\"button\"  class=\"btn btn-default compare\" title=\"";
        // line 206
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"parent.compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</button>
            </div>
            ";
        // line 208
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 209
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 211
        echo "\t\t</div>
\t\t<div class=\"content_product_block\">";
        // line 212
        echo (isset($context["productblock"]) ? $context["productblock"] : null);
        echo " </div> \t
\t\t</div>
\t
\t\t</div>
\t\t</div>
\t\t
\t";
        // line 218
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
\t</div>
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
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart2').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product2 input[type=\\'text\\'], #product2 input[type=\\'hidden\\'], #product2 input[type=\\'radio\\']:checked, #product2 input[type=\\'checkbox\\']:checked, #product2 select, #product2 textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart2').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart2').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();
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

\t\tif (json['success']) {
\t\t\t\tif (parent) {

\t\t\t\tparent.\$.notify({
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

\t\t\t\t\tparent.\$('#cart > button').html('<i class=\"fa fa-shopping-cart\"></i> ' + json['total']);

\t\t\t\tparent.\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t\t
\t\t\t\t} else {
\t\t\t\t\t
\t\t\t\t\t\$('#cart > button').html('<i class=\"fa fa-shopping-cart\"></i> ' + json['total']);
\t\t\t\t\t
\t\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t\t
\t\t\t\t};
\t\t\t\t
\t\t\t\t

\t\t\t\t//\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t
      }
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
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
        // line 421
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 425
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
\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

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
//\t\t\tenabled:true
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
     \t\t\t    \t\t\tz_index = \$(this).index('.additional-carousel a');
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

\$('#tabs a').tabs();
\$('#custom_tab a').tabs();
\$('#top').remove();
\$('.top_button').remove();


//--></script>
";
        // line 543
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
<style>
nav, header, .wrap-breadcrumb {
    display: none;
}
.content_product_block { display:none; }
.content_header_top, .page-title  { display:none; }

footer {
    display: none;
}
.content-top-breadcum {
    display: none;
}
#powered {
    display: none;
}
#container {
    width: 850px;
}
.top_button { display:none !important; }

</style>
";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/product/quick_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 543,  956 => 425,  949 => 421,  743 => 218,  734 => 212,  731 => 211,  725 => 209,  723 => 208,  714 => 206,  708 => 205,  702 => 204,  697 => 202,  693 => 201,  689 => 200,  684 => 197,  678 => 193,  667 => 191,  663 => 190,  659 => 189,  653 => 186,  650 => 185,  647 => 184,  644 => 183,  638 => 182,  625 => 176,  618 => 174,  611 => 173,  608 => 172,  595 => 166,  588 => 164,  581 => 163,  578 => 162,  565 => 156,  558 => 154,  551 => 153,  548 => 152,  540 => 149,  532 => 148,  528 => 147,  521 => 146,  518 => 145,  506 => 142,  500 => 141,  493 => 140,  490 => 139,  478 => 136,  472 => 135,  465 => 134,  462 => 133,  457 => 130,  449 => 128,  442 => 127,  440 => 126,  435 => 125,  419 => 124,  413 => 123,  409 => 121,  403 => 120,  399 => 119,  392 => 118,  389 => 117,  384 => 114,  376 => 112,  369 => 111,  367 => 110,  363 => 109,  345 => 108,  339 => 107,  335 => 105,  329 => 104,  325 => 103,  318 => 102,  315 => 101,  310 => 98,  303 => 96,  296 => 95,  294 => 94,  287 => 93,  283 => 92,  279 => 91,  273 => 90,  267 => 89,  260 => 88,  257 => 87,  253 => 86,  249 => 85,  246 => 84,  244 => 83,  240 => 81,  236 => 79,  233 => 78,  222 => 76,  218 => 75,  214 => 73,  211 => 72,  203 => 70,  200 => 69,  192 => 67,  189 => 66,  184 => 64,  179 => 63,  173 => 60,  170 => 59,  168 => 58,  165 => 57,  163 => 56,  153 => 52,  145 => 50,  143 => 49,  136 => 48,  126 => 46,  124 => 45,  120 => 43,  116 => 41,  110 => 40,  106 => 38,  102 => 36,  99 => 35,  95 => 34,  92 => 33,  90 => 32,  85 => 30,  79 => 26,  74 => 23,  68 => 21,  66 => 20,  61 => 19,  48 => 17,  44 => 15,  42 => 14,  39 => 13,  37 => 12,  32 => 9,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="quickview">*/
/* <div class="quickview-container">*/
/*   */
/*   */
/*     <div id="content" class="productpage-quickview">{{ content_top }}*/
/*       <div class="">*/
/*        {# <h2 class="page-title">{{ heading_title }}</h2> #}*/
/* 		        */
/* 		<div class="col-sm-6 product-left">*/
/* 		<div class="product-info">*/
/*         {% if thumb or images %}*/
/*     		<div class="left product-image thumbnails">*/
/*       	{% if thumb %}*/
/* 	  */
/* 		<!-- Codezeel Cloud Zoom Image Effect Start -->*/
/* 		<div class="image"><a class="thumbnail" title="{{ heading_title }}"><img id="tmzoom" src="{{ thumb }}" data-zoom-image="{{ popup }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></div> */
/* 		{% endif %}*/
/*       	{% if images %} */
/* 			{% set sliderFor = 3 %}*/
/* 			{% set imageCount = images|length %}			 */
/* 	  	{% endif %}*/
/* 		<!-- Codezeel Cloud Zoom Image Effect End-->*/
/*     	</div>*/
/*     	{% endif %}*/
/* 		</div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6 product-right">*/
/*           <h3 class="product-title">{{ heading_title }}</h3>*/
/* */
/* 		  {% if review_status %}*/
/*           <div class="rating-wrapper">            */
/*               {% for i in 1..5 %}*/
/*               {% if rating < i %}*/
/* 			  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 			  {% else %}*/
/* 			  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 			  {% endif %}*/
/*               {% endfor %}*/
/* 		  </div>*/
/*           {% endif %}*/
/* 		  */
/*           <ul class="list-unstyled short-desc attr">*/
/*             {% if manufacturer %}*/
/*             <li><span class="desc">{{ text_manufacturer }}: </span><a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li><span class="desc">{{ text_model }} </span>{{ model }}</li>*/
/*             {% if reward %}*/
/*             <li><span class="desc">{{ text_reward }} </span>{{ reward }}</li>*/
/*             {% endif %}*/
/*             <li><span class="desc">{{ text_stock }} </span>{{ stock }}</li>*/
/*           </ul>*/
/* 		  */
/* 		  */
/* 		 {% if price %}*/
/*           <ul class="list-unstyled price">*/
/*             {% if not special %}*/
/*             <li>*/
/*               <h3 class="product-price">{{ price }}</h3>*/
/*             </li>*/
/*             {% else %}*/
/*             <li><span class="old-price" style="text-decoration: line-through;">{{ price }}</span> </li>*/
/*             <li><h3 class="special-price">{{ special }}</h3></li>*/
/*             {% endif %}*/
/*             {% if tax %}*/
/*             <li class="price-tax">{{ text_tax }}<span>{{ tax }}</span></li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li class="rewardpoint">{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*             <li>*/
/*             </li>*/
/*             {% for discount in discounts %}*/
/*             <li class="discount">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*          */
/*           <div id="product2">*/
/*            {% if options %}*/
/*             <hr>*/
/*             <h3>{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
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
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
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
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
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
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
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
/*             */
/* 		*/
/* 			<div class="form-group cart-block qty">*/
/*               	<label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*              	<input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/*               	<input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               */
/*               	<button type="button" id="button-cart2" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button> */
/* 			  	<button type="button"  class="btn btn-default wishlist" title="{{ button_wishlist }}" onclick="parent.wishlist.add('{{ product_id }}');">{ button_wishlist }}</button>*/
/*             	<button type="button"  class="btn btn-default compare" title="{{ button_compare }}" onclick="parent.compare.add('{{ product_id }}');">{{ button_compare }}</button>*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/* 		</div>*/
/* 		<div class="content_product_block">{{ productblock }} </div> 	*/
/* 		</div>*/
/* 	*/
/* 		</div>*/
/* 		</div>*/
/* 		*/
/* 	{{ content_bottom }}</div>*/
/* 	</div>*/
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
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart2').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product2 input[type=\'text\'], #product2 input[type=\'hidden\'], #product2 input[type=\'radio\']:checked, #product2 input[type=\'checkbox\']:checked, #product2 select, #product2 textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart2').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart2').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
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
/* 		if (json['success']) {*/
/* 				if (parent) {*/
/* */
/* 				parent.$.notify({*/
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
/* 					parent.$('#cart > button').html('<i class="fa fa-shopping-cart"></i> ' + json['total']);*/
/* */
/* 				parent.$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 					*/
/* 				} else {*/
/* 					*/
/* 					$('#cart > button').html('<i class="fa fa-shopping-cart"></i> ' + json['total']);*/
/* 					*/
/* 					$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 					*/
/* 				};*/
/* 				*/
/* 				*/
/* */
/* 				//$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				*/
/*       }*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
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
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*   e.preventDefault();*/
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
/* 			$('.alert-success, .alert-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
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
/* //			enabled:true*/
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
/*      			    			z_index = $(this).index('.additional-carousel a');*/
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
/* $('#tabs a').tabs();*/
/* $('#custom_tab a').tabs();*/
/* $('#top').remove();*/
/* $('.top_button').remove();*/
/* */
/* */
/* //--></script>*/
/* {{ footer }}*/
/* <style>*/
/* nav, header, .wrap-breadcrumb {*/
/*     display: none;*/
/* }*/
/* .content_product_block { display:none; }*/
/* .content_header_top, .page-title  { display:none; }*/
/* */
/* footer {*/
/*     display: none;*/
/* }*/
/* .content-top-breadcum {*/
/*     display: none;*/
/* }*/
/* #powered {*/
/*     display: none;*/
/* }*/
/* #container {*/
/*     width: 850px;*/
/* }*/
/* .top_button { display:none !important; }*/
/* */
/* </style>*/
/* */
