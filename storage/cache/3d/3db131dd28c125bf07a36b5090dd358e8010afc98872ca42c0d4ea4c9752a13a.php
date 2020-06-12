<?php

/* default/template/extension/quickcheckout/checkout.twig */
class __TwigTemplate_3a91d425820b248c00657f73f1067e61ed7f6d041ec462ebf5b0b7ebf0374497 extends Twig_Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
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
            echo "   
    ";
            // line 14
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
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t  ";
        // line 18
        if (false) {
            // line 19
            echo "\t  <!-- FontAwesome for themes that require it -->
\t  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t  ";
        }
        // line 22
        echo "\t  <div id=\"warning-messages\">
\t  \t";
        // line 23
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 24
            echo "\t\t  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t  </div>
\t\t";
        }
        // line 28
        echo "\t  </div>
\t  <div id=\"success-messages\"></div>
\t  ";
        // line 30
        if ((isset($context["mobile_stylesheet"]) ? $context["mobile_stylesheet"] : null)) {
            // line 31
            echo "\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 701px) and (max-width: 99999px)\" href=\"";
            echo (isset($context["stylesheet"]) ? $context["stylesheet"] : null);
            echo "\" />
\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 1px) and (max-width: 700px)\" href=\"";
            // line 32
            echo (isset($context["mobile_stylesheet"]) ? $context["mobile_stylesheet"] : null);
            echo "\" />
\t  ";
        } else {
            // line 33
            echo "   
\t  <link rel=\"stylesheet\" href=\"";
            // line 34
            echo (isset($context["stylesheet"]) ? $context["stylesheet"] : null);
            echo "\" />
\t  ";
        }
        // line 36
        echo "
\t  ";
        // line 37
        if ((isset($context["html_header"]) ? $context["html_header"] : null)) {
            echo " 
\t  ";
            // line 38
            echo (isset($context["html_header"]) ? $context["html_header"] : null);
            echo " 
\t  ";
        }
        // line 39
        echo " 

\t  <div id=\"quickcheckoutconfirm\">
\t  \t";
        // line 42
        if (((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "4")) {
            echo " 
\t\t\t<div class=\"qc-col-0\">
\t\t\t\t";
            // line 44
            if (( !(isset($context["logged"]) ? $context["logged"] : null) && (isset($context["login_module"]) ? $context["login_module"] : null))) {
                echo " 
\t\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 45
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "login", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "login", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t  <div id=\"login-box\">
\t\t\t\t\t\t<div id=\"checkout\">
\t\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
                // line 48
                echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
                echo "</div>
\t\t\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 49
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"or\">";
                // line 51
                echo (isset($context["text_or"]) ? $context["text_or"] : null);
                echo "</div>
\t\t\t\t\t </div>
\t\t\t\t\t </div>
\t\t\t\t";
            }
            // line 54
            echo " 
\t\t\t\t
\t\t\t\t<div class=\"qc-step\" data-col=\"";
            // line 56
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_address", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_address", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"payment-address\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 58
            echo (( !(isset($context["logged"]) ? $context["logged"] : null)) ? ((isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null)) : ((isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null)));
            echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\">";
            // line 59
            echo (((isset($context["guest"]) ? $context["guest"] : null)) ? ((isset($context["guest"]) ? $context["guest"] : null)) : ((isset($context["payment_address"]) ? $context["payment_address"] : null)));
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 63
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step ";
                // line 64
                if ( !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null)) {
                    echo "hidden";
                }
                echo "\" data-col=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_address", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_address", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t<div id=\"shipping-address\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
                // line 66
                echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
                echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 67
                echo (((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) ? ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) : (""));
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 70
            echo " 

\t\t\t\t";
            // line 72
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step ";
                // line 73
                if ( !(isset($context["shipping_module"]) ? $context["shipping_module"] : null)) {
                    echo "hidden";
                }
                echo "\" data-col=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_method", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_method", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t<div id=\"shipping-method\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
                // line 75
                echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
                echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 80
            echo "
\t\t\t\t<div class=\"qc-step ";
            // line 81
            if ( !(isset($context["payment_module"]) ? $context["payment_module"] : null)) {
                echo "hidden";
            }
            echo "\" data-col=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_method", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_method", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"payment-method\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
            // line 83
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 88
            if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 89
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "cart", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "cart", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t</div> 
\t\t\t\t";
            }
            // line 95
            echo "
\t\t\t\t";
            // line 96
            if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                echo " 
\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 97
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "coupons", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "coupons", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                // line 99
                echo (isset($context["voucher"]) ? $context["voucher"] : null);
                echo "</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 103
            echo "\t\t\t\t
\t\t\t\t<div class=\"qc-step\" data-col=\"";
            // line 104
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "confirm", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "confirm", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"terms\">
\t\t\t\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 106
            echo (isset($context["terms"]) ? $context["terms"] : null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"qc-col-1 col-md-";
            // line 111
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 1, array(), "array");
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-";
            // line 113
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array");
            echo "\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"qc-col-2 col-md-";
            // line 115
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) {
                echo twig_round((($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 2, array(), "array") / $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) * 12), 0, "floor");
            } else {
                echo "0";
            }
            echo "\">
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"qc-col-3 col-md-";
            // line 117
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) {
                echo (12 - twig_round((($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 2, array(), "array") / $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) * 12), 0, "floor"));
            } else {
                echo "0";
            }
            echo "\">
\t\t    \t\t\t</div>
\t\t\t\t\t\t<div class=\"qc-col-4 col-md-12\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script>
\t\t\t\$(function() {
\t\t\t\t\$('.qc-step').each(function(){
\t\t\t\t\t\$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));\t
\t\t\t\t})
\t\t\t\t\$('.qc-step').tsort({attr:'data-row'});
\t\t\t})
\t\t\t</script>

\t\t";
        } else {
            // line 135
            echo "
\t\t\t<div id=\"quickcheckout-disable\">
\t\t\t  ";
            // line 137
            if (( !(isset($context["logged"]) ? $context["logged"] : null) && (isset($context["login_module"]) ? $context["login_module"] : null))) {
                echo " 
\t\t\t  <div class=\"quickcheckoutmid\" id=\"login-box\">
\t\t\t\t<div id=\"checkout\">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
                // line 140
                echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 141
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"or\">";
                // line 143
                echo (isset($context["text_or"]) ? $context["text_or"] : null);
                echo "</div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 145
            echo " 
\t\t\t  <div class=\"quickcheckoutleft\">
\t\t\t\t<div id=\"payment-address\">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 148
            echo (( !(isset($context["logged"]) ? $context["logged"] : null)) ? ((isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null)) : ((isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null)));
            echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
            // line 149
            echo (((isset($context["guest"]) ? $context["guest"] : null)) ? ((isset($context["guest"]) ? $context["guest"] : null)) : ((isset($context["payment_address"]) ? $context["payment_address"] : null)));
            echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 151
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div id=\"shipping-address\" ";
                // line 152
                if ( !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
                // line 153
                echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 154
                echo (((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) ? ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) : (""));
                echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 156
            echo " 
\t\t\t  </div>
\t\t\t  <div class=\"quickcheckoutright\">
\t\t\t\t";
            // line 159
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div id=\"shipping-method\" ";
                // line 160
                if ( !(isset($context["shipping_module"]) ? $context["shipping_module"] : null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
                // line 161
                echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 165
            echo "\t\t\t\t<div id=\"payment-method\" ";
            if ( !(isset($context["payment_module"]) ? $context["payment_module"] : null)) {
                echo "class=\"hidden\"";
            }
            echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
            // line 166
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  ";
            // line 170
            if (((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "2")) {
                echo " 
\t\t\t\t<div class=\"quickcheckoutleft\">
\t\t\t\t  ";
                // line 172
                if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                    echo " 
\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t  ";
                }
                // line 177
                echo "\t\t\t\t</div>
\t\t\t\t<div style=\"clear:right;\"></div>
\t\t\t\t<div class=\"quickcheckoutright\">
\t\t\t\t  ";
                // line 180
                if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                    echo " 
\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                    // line 182
                    echo (isset($context["voucher"]) ? $context["voucher"] : null);
                    echo "</div>
\t\t\t\t  </div>
\t\t\t\t  ";
                }
                // line 185
                echo "\t\t\t\t</div>
\t\t\t  ";
            } elseif (((            // line 186
(isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "1") || ((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "3"))) {
                // line 187
                echo "\t\t\t\t";
                if (((((isset($context["cart_module"]) ? $context["cart_module"] : null) || (isset($context["voucher_module"]) ? $context["voucher_module"] : null)) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                    // line 188
                    echo "\t\t\t\t<div class=\"quickcheckoutleft extra-width\">
\t\t\t\t  ";
                    // line 189
                    if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                        // line 190
                        echo "\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t  ";
                    }
                    // line 194
                    echo "\t\t\t\t  ";
                    if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                        // line 195
                        echo "\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                        // line 196
                        echo (isset($context["voucher"]) ? $context["voucher"] : null);
                        echo "</div>
\t\t\t\t  </div>
\t\t\t\t  ";
                    }
                    // line 199
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 200
                echo " 
\t\t\t  ";
            }
            // line 202
            echo "\t\t\t  <div style=\"clear: both;\"></div>
\t\t\t</div>

\t\t\t<div class=\"quickcheckoutmid\">
\t\t\t  <div id=\"terms\">
\t\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 207
            echo (isset($context["terms"]) ? $context["terms"] : null);
            echo "</div>
\t\t\t  </div>
\t\t\t</div>

\t\t";
        }
        // line 212
        echo "
\t  </div>

\t  ";
        // line 215
        if ((isset($context["html_footer"]) ? $context["html_footer"] : null)) {
            // line 216
            echo "\t  ";
            echo (isset($context["html_footer"]) ? $context["html_footer"] : null);
            echo "
\t  ";
        }
        // line 218
        echo "
\t";
        // line 219
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  ";
        // line 220
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>

";
        // line 223
        if ((isset($context["custom_css"]) ? $context["custom_css"] : null)) {
            // line 224
            echo "<style type=\"text/css\">
";
            // line 225
            echo (isset($context["custom_css"]) ? $context["custom_css"] : null);
            echo "
</style>
";
        }
        // line 227
        echo " 
<script type=\"text/javascript\"><!--
";
        // line 229
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\$(window).load(function() {
    \$.blockUI({
\t\tmessage: '<h1 style=\"color:#ffffff;\">";
            // line 232
            echo (isset($context["text_please_wait"]) ? $context["text_please_wait"] : null);
            echo "</h1>',
\t\tcss: {
\t\t\tborder: 'none',
\t\t\tpadding: '15px',
\t\t\tbackgroundColor: '#000000',
\t\t\t'-webkit-border-radius': '10px',
\t\t\t'-moz-border-radius': '10px',
\t\t\t'-khtml-border-radius': '10px',
\t\t\t'border-radius': '10px',
\t\t\topacity: .8,
\t\t\tcolor: '#ffffff'
\t\t}
\t});
\t
\tsetTimeout(function() {
\t\t\$.unblockUI();
\t}, 2000);
});
";
        }
        // line 250
        echo " 

";
        // line 252
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 253
            echo "\t";
            if ((isset($context["save_data"]) ? $context["save_data"] : null)) {
                // line 254
                echo "\t// Save form data
\t\$(document).on('change', '#payment-address input[type=\\'text\\'], #payment-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 265
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 269
                echo " 
\t\t});
\t});

\t\$(document).on('change', '#shipping-address input[type=\\'text\\'], #shipping-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'password\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 283
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 287
                echo " 
\t\t});
\t});
\t";
            }
            // line 290
            echo " 
\t
\t";
            // line 292
            if ((isset($context["login_module"]) ? $context["login_module"] : null)) {
                echo " 
\t// Login Form Clicked
\t\$(document).on('click', '#button-login', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/login/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#checkout #login :input'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-login').prop('disabled', true);
\t\t\t\t\$('#button-login').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-login').prop('disabled', false);
\t\t\t\t\$('#button-login').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t},
\t\t\t";
                // line 322
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 326
                echo " 
\t\t});
\t});
\t";
            }
            // line 329
            echo " 

// Validate Register
function validateRegister() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/register/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 359
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').after('<div class=\"text-danger\">' + json['error']['password'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').after('<div class=\"text-danger\">' + json['error']['confirm'] + '</div>');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 367
            echo " 
\t\t\t\t";
            // line 368
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 376
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 378
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (shipping_address) {
\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t} else {
\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 386
                echo "  
\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 388
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 391
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 395
            echo " 
\t});
}

// Validate Guest Payment Address
function validateGuestAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {\t\t
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 427
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 437
            echo " 
\t\t\t\t";
            // line 438
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 444
            echo " 
\t\t\t} else {
\t\t\t\tvar create_account = \$('#payment-address input[name=\\'create_account\\']:checked').val();

\t\t\t\t";
            // line 448
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 460
                echo "   
\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t\t";
            }
            // line 467
            echo "\t\t\t}
\t\t},
\t\t";
            // line 469
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 473
            echo " 
\t});
}

// Validate Guest Shipping Address
function validateGuestShippingAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping/validate',
\t\ttype: 'post',
\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address select, #shipping-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 505
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 515
            echo " 
\t\t\t\t";
            // line 516
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 522
            echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
            // line 527
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 531
            echo " 
\t});
}

// Confirm Payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidateGuestAddress();
});
";
        } else {
            // line 544
            echo "   
// Validate Payment Address
function validatePaymentAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_address/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 573
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 583
            echo " 
\t\t\t\t";
            // line 584
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 590
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 592
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t\tvalidateShippingAddress();
\t\t\t\t";
            } else {
                // line 594
                echo "   
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 597
            echo "\t\t\t}
\t\t},
\t\t";
            // line 599
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 603
            echo " 
\t});
}

";
            // line 607
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
// Validate Shipping Address
function validateShippingAddress() {
\tvar payment_mode = \$('input[name=\"payment_address\"]:checked').val();
\tif (payment_mode == 'new') {
\t\t";
                // line 612
                if (((isset($context["logged"]) ? $context["logged"] : null) &&  !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null))) {
                    // line 613
                    echo "\t\t\tvar addressType = '#payment-address';
\t\t\tvar shipping_mode = 'input[name=\"shipping_address\"]:checked, ';
\t\t";
                } else {
                    // line 616
                    echo "\t\t\tvar addressType = '#shipping-address';
\t\t\tvar shipping_mode = '';
\t\t";
                }
                // line 619
                echo "\t} else {
\t\tvar addressType = '#shipping-address';
\t\tvar shipping_mode = '';
\t}
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/shipping_address/validate',
\t\ttype: 'post',
\t\tdata: \$(shipping_mode + addressType +' input[type=\\'text\\'], '+addressType +' input[type=\\'password\\'], '+addressType +' input[type=\\'checkbox\\']:checked, '+addressType +' input[type=\\'radio\\']:checked, '+addressType +' select, '+addressType +' textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
                // line 649
                if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 659
                echo " 
\t\t\t\t";
                // line 660
                if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 666
                echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
                // line 671
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
                }
                // line 675
                echo " 
\t});
}
";
            }
            // line 678
            echo " 

// Confirm payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidatePaymentAddress();
});
";
        }
        // line 689
        echo "// Close if logged php

// Payment Method
function reloadPaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 700
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 703
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 707
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 709
        echo " 
\t\t},
\t\t";
        // line 711
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 715
        echo " 
\t});
}

function reloadPaymentMethodById(address_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,
\t\ttype: 'post',
\t\tdata: \$('#payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 727
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 730
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 734
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 736
        echo " 
\t\t},
\t\t";
        // line 738
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 742
        echo " 
\t});
}

// Validate Payment Method
function validatePaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-method select, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'checkbox\\']:checked, #payment-method textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tvalidateTerms();
\t\t\t}
\t\t},
\t\t";
        // line 777
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 781
        echo " 
\t});
}

// Shipping Method
";
        // line 786
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\tfunction reloadShippingMethod(type) {
\t\tif (type == 'payment') {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 801
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 804
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 808
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 812
            echo " 
\t\t});
\t}

\tfunction reloadShippingMethodById(address_id) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 824
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 827
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 831
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 835
            echo " 
\t\t});
\t}

\t// Validate Shipping Method
\tfunction validateShippingMethod() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method select, #shipping-method input[type=\\'radio\\']:checked, #shipping-method textarea, #shipping-method input[type=\\'text\\']'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t\t
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t},
\t\t\t";
            // line 870
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 874
            echo " 
\t\t});
\t}
";
        }
        // line 877
        echo " 

// Validate confirm button
function validateTerms() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/terms/validate',
\t\ttype: 'post',
\t\tdata: \$('#terms input[type=\\'checkbox\\']:checked'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tloadConfirm();
\t\t\t}
\t\t},
\t\t";
        // line 910
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 914
        echo " 
\t});
}

// Load confirm
function loadConfirm() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/confirm',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t";
        // line 925
        if ((isset($context["confirmation_page"]) ? $context["confirmation_page"] : null)) {
            echo " 
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\t";
            // line 928
            if ((isset($context["slide_effect"]) ? $context["slide_effect"] : null)) {
                echo " 
\t\t\t\t\$('#quickcheckoutconfirm').slideUp('slow');
\t\t\t\t";
            } else {
                // line 930
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').html('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 932
            echo " 
\t\t\t
\t\t\t\t";
            // line 934
            if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
                echo " 
\t\t\t\t\$.blockUI({
\t\t\t\t\tmessage: '<h1 style=\"color:#ffffff;\">";
                // line 936
                echo (isset($context["text_please_wait"]) ? $context["text_please_wait"] : null);
                echo "</h1>',
\t\t\t\t\tcss: {
\t\t\t\t\t\tborder: 'none',
\t\t\t\t\t\tpadding: '15px',
\t\t\t\t\t\tbackgroundColor: '#000000',
\t\t\t\t\t\t'-webkit-border-radius': '10px',
\t\t\t\t\t\t'-moz-border-radius': '10px',
\t\t\t\t\t\t'-khtml-border-radius': '10px',
\t\t\t\t\t\t'border-radius': '10px',
\t\t\t\t\t\topacity: .8,
\t\t\t\t\t\tcolor: '#ffffff'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t";
            }
            // line 949
            echo " 
\t\t\t";
        }
        // line 951
        echo "\t\t},
\t\tsuccess: function(html) {
\t\t\t";
        // line 953
        if ((isset($context["confirmation_page"]) ? $context["confirmation_page"] : null)) {
            echo " 
\t\t\t\t";
            // line 954
            if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
                echo " 
\t\t\t\t\$.unblockUI();
\t\t\t\t";
            }
            // line 956
            echo " 
\t\t\t\t
\t\t\t\t\$('#quickcheckoutconfirm').hide().html(html);
\t\t\t\t
\t\t\t\t";
            // line 960
            if ( !(isset($context["auto_submit"]) ? $context["auto_submit"] : null)) {
                echo " 
\t\t\t\t\t";
                // line 961
                if ((isset($context["slide_effect"]) ? $context["slide_effect"] : null)) {
                    echo " 
\t\t\t\t\t\$('#quickcheckoutconfirm').slideDown('slow');
\t\t\t\t\t";
                } else {
                    // line 963
                    echo "   
\t\t\t\t\t\$('#quickcheckoutconfirm').show();
\t\t\t\t\t";
                }
                // line 965
                echo " 
\t\t\t\t";
            } else {
                // line 966
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 969
            echo "\t\t\t";
        } else {
            echo "   
\t\t\t\t\$('#terms .terms').hide();
\t\t\t\t\$('#payment').html(html).slideDown('fast');
\t\t\t\t
\t\t\t\t";
            // line 973
            if ((isset($context["auto_submit"]) ? $context["auto_submit"] : null)) {
                echo " 
\t\t\t\t\$('#payment').hide().after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 975
            echo " 
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: \$('#terms').offset().top }, 'slow');
\t\t\t\t
\t\t\t\tdisableCheckout();
\t\t\t";
        }
        // line 981
        echo "\t\t},
\t\t";
        // line 982
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 986
        echo " 
\t});
}

// Load cart
";
        // line 991
        if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
            echo " 
function loadCart() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('.tooltip').remove();
\t\t\t
\t\t\tmoduleLoad(\$('#cart1'), ";
            // line 1000
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#cart1'), ";
            // line 1003
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t
\t\t\t\$('#cart1 .quickcheckout-content').html(html);
\t\t},
\t\t";
            // line 1007
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1011
            echo " 
\t});
}

\t";
            // line 1015
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\$(document).ready(function(){
\t\tloadCart();
\t});
\t";
            }
            // line 1019
            echo " 
";
        }
        // line 1020
        echo " 

";
        // line 1022
        if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
            echo " 
// Validate Coupon
\$(document).on('click', '#button-coupon', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',
\t\ttype: 'post',
\t\tdata: \$('#coupon-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').prop('disabled', true);
\t\t\t\$('#button-coupon').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').prop('disabled', false);
\t\t\t\$('#coupon-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1054
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1058
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1060
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1064
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1066
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1068
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1075
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1081
                echo " 
\t\t\t";
            }
            // line 1082
            echo " 
\t\t\t
\t\t\t";
            // line 1084
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1086
            echo " 
\t\t},
\t\t";
            // line 1088
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1092
            echo " 
\t});
});

\$(document).on('click', '#button-voucher', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',
\t\ttype: 'post',
\t\tdata: \$('#voucher-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').prop('disabled', true);
\t\t\t\$('#button-voucher').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').prop('disabled', false);
\t\t\t\$('#voucher-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1126
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1130
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1132
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1136
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1138
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1140
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1147
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1153
                echo " 
\t\t\t";
            }
            // line 1155
            echo "\t\t\t
\t\t\t";
            // line 1156
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1158
            echo " 
\t\t},
\t\t";
            // line 1160
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1164
            echo " 
\t});
});

\$(document).on('click', '#button-reward', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateReward',
\t\ttype: 'post',
\t\tdata: \$('#reward-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').prop('disabled', true);
\t\t\t\$('#button-reward').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').prop('disabled', false);
\t\t\t\$('#reward-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1198
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1202
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1204
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1208
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1210
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1212
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1219
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1225
                echo " 
\t\t\t";
            }
            // line 1227
            echo "\t\t\t
\t\t\t";
            // line 1228
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1230
            echo " 
\t\t},
\t\t";
            // line 1232
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1236
            echo " 
\t});
});
";
        }
        // line 1240
        echo "
";
        // line 1241
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\$(document).on('focusout', 'input[name=\\'postcode\\']', function() {
\t";
            // line 1243
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\treloadShippingMethod('payment');
\t} else {
\t\treloadShippingMethod('shipping');
\t}
\t";
            } else {
                // line 1249
                echo "   
\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\treloadShippingMethod('shipping');
\t} else {
\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t}
\t";
            }
            // line 1255
            echo " 
});
";
        }
        // line 1258
        echo "
";
        // line 1259
        if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
            echo " 
\t\$(document).on('keydown', 'input', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
\t\$(document).on('change', 'select', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
";
        }
        // line 1270
        echo " 

";
        // line 1272
        if ((isset($context["edit_cart"]) ? $context["edit_cart"] : null)) {
            echo " 
\$(document).on('click', '.button-update', function() {

\tvar quantity = \$(this).parents('.quantity').find('input.qc-product-qantity');
\tif (quantity.length){
\t\tif (\$(this).data('type')=='increase') {
\t\t\tquantity.val(parseInt(quantity.val())+1);
\t\t} else if (\$(this).data('type')=='decrease') {
\t\t\tquantity.val(parseInt(quantity.val())-1);
\t\t}
\t}
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update',
\t\ttype: 'post',
\t\tdata: \$('#cart1 :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t//\$('#cart1 .button-update').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\t\$('#button-payment-method').attr(\"disabled\", true);
\t\t\t\t} else if (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').html('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t\t\$('#button-payment-method').attr(\"disabled\", true);
\t\t\t\t} else {
\t\t\t\t\t\$('#warning-messages').html('');
\t\t\t\t\t\$('#button-payment-method').removeAttr(\"disabled\");
\t\t\t\t}

\t\t\t\t";
            // line 1308
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1312
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1314
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1318
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1320
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1322
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1329
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1335
                echo " 
\t\t\t\t";
            }
            // line 1336
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 1338
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1340
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1343
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1347
            echo " 
\t});
});

\$(document).on('click', '.button-remove', function() {
\tvar remove_id = \$(this).attr('data-remove');

\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,
\t\ttype: 'get',
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#cart1 .button-remove').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\t";
            // line 1366
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1370
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1372
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1376
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1378
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1380
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1387
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1393
                echo " 
\t\t\t\t";
            }
            // line 1395
            echo "\t\t\t\t
\t\t\t\t";
            // line 1396
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1398
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1401
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1405
            echo " 
\t});

\treturn false;
});
";
        }
        // line 1411
        echo "
\$('.date').datetimepicker({
\tformat: 'YYYY-MM-DD',
\tlocale: 'ru'
});

\$('.time').datetimepicker({
\tformat: 'HH:mm',
\tlocale: 'ru'
});

\$('.datetime').datetimepicker({
\tlocale: 'ru'
});
//--></script>
";
        // line 1426
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 1427
            echo "\t<script type=\"text/javascript\"><!--
\t\t  \t\$('#button-payment-method').attr(\"disabled\", true);
\t//--></script>
";
        }
        // line 1431
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2364 => 1431,  2358 => 1427,  2356 => 1426,  2339 => 1411,  2331 => 1405,  2323 => 1401,  2318 => 1398,  2312 => 1396,  2309 => 1395,  2305 => 1393,  2295 => 1387,  2286 => 1380,  2281 => 1378,  2275 => 1376,  2269 => 1372,  2263 => 1370,  2256 => 1366,  2235 => 1347,  2227 => 1343,  2222 => 1340,  2216 => 1338,  2212 => 1336,  2208 => 1335,  2198 => 1329,  2189 => 1322,  2184 => 1320,  2178 => 1318,  2172 => 1314,  2166 => 1312,  2159 => 1308,  2120 => 1272,  2116 => 1270,  2101 => 1259,  2098 => 1258,  2093 => 1255,  2084 => 1249,  2074 => 1243,  2069 => 1241,  2066 => 1240,  2060 => 1236,  2052 => 1232,  2048 => 1230,  2042 => 1228,  2039 => 1227,  2035 => 1225,  2025 => 1219,  2016 => 1212,  2011 => 1210,  2005 => 1208,  1999 => 1204,  1993 => 1202,  1986 => 1198,  1950 => 1164,  1942 => 1160,  1938 => 1158,  1932 => 1156,  1929 => 1155,  1925 => 1153,  1915 => 1147,  1906 => 1140,  1901 => 1138,  1895 => 1136,  1889 => 1132,  1883 => 1130,  1876 => 1126,  1840 => 1092,  1832 => 1088,  1828 => 1086,  1822 => 1084,  1818 => 1082,  1814 => 1081,  1804 => 1075,  1795 => 1068,  1790 => 1066,  1784 => 1064,  1778 => 1060,  1772 => 1058,  1765 => 1054,  1730 => 1022,  1726 => 1020,  1722 => 1019,  1714 => 1015,  1708 => 1011,  1700 => 1007,  1693 => 1003,  1687 => 1000,  1675 => 991,  1668 => 986,  1660 => 982,  1657 => 981,  1649 => 975,  1643 => 973,  1635 => 969,  1630 => 966,  1626 => 965,  1621 => 963,  1615 => 961,  1611 => 960,  1605 => 956,  1599 => 954,  1595 => 953,  1591 => 951,  1587 => 949,  1570 => 936,  1565 => 934,  1561 => 932,  1556 => 930,  1550 => 928,  1544 => 925,  1531 => 914,  1523 => 910,  1488 => 877,  1482 => 874,  1474 => 870,  1437 => 835,  1429 => 831,  1422 => 827,  1416 => 824,  1402 => 812,  1394 => 808,  1387 => 804,  1381 => 801,  1363 => 786,  1356 => 781,  1348 => 777,  1311 => 742,  1303 => 738,  1299 => 736,  1293 => 734,  1286 => 730,  1280 => 727,  1266 => 715,  1258 => 711,  1254 => 709,  1248 => 707,  1241 => 703,  1235 => 700,  1222 => 689,  1208 => 678,  1202 => 675,  1194 => 671,  1187 => 666,  1177 => 660,  1174 => 659,  1160 => 649,  1128 => 619,  1123 => 616,  1118 => 613,  1116 => 612,  1108 => 607,  1102 => 603,  1094 => 599,  1090 => 597,  1085 => 594,  1079 => 592,  1075 => 590,  1065 => 584,  1062 => 583,  1048 => 573,  1017 => 544,  1001 => 531,  993 => 527,  986 => 522,  976 => 516,  973 => 515,  959 => 505,  925 => 473,  917 => 469,  913 => 467,  904 => 460,  888 => 448,  882 => 444,  872 => 438,  869 => 437,  855 => 427,  821 => 395,  813 => 391,  808 => 388,  803 => 386,  791 => 378,  787 => 376,  775 => 368,  772 => 367,  760 => 359,  728 => 329,  722 => 326,  714 => 322,  681 => 292,  677 => 290,  671 => 287,  663 => 283,  647 => 269,  639 => 265,  626 => 254,  623 => 253,  621 => 252,  617 => 250,  595 => 232,  589 => 229,  585 => 227,  579 => 225,  576 => 224,  574 => 223,  568 => 220,  564 => 219,  561 => 218,  555 => 216,  553 => 215,  548 => 212,  540 => 207,  533 => 202,  529 => 200,  525 => 199,  519 => 196,  516 => 195,  513 => 194,  507 => 190,  505 => 189,  502 => 188,  499 => 187,  497 => 186,  494 => 185,  488 => 182,  483 => 180,  478 => 177,  470 => 172,  465 => 170,  458 => 166,  451 => 165,  444 => 161,  438 => 160,  434 => 159,  429 => 156,  423 => 154,  419 => 153,  413 => 152,  409 => 151,  404 => 149,  400 => 148,  395 => 145,  389 => 143,  384 => 141,  380 => 140,  374 => 137,  370 => 135,  345 => 117,  336 => 115,  331 => 113,  326 => 111,  318 => 106,  311 => 104,  308 => 103,  301 => 99,  294 => 97,  290 => 96,  287 => 95,  276 => 89,  272 => 88,  264 => 83,  253 => 81,  250 => 80,  242 => 75,  231 => 73,  227 => 72,  223 => 70,  216 => 67,  212 => 66,  201 => 64,  197 => 63,  190 => 59,  186 => 58,  179 => 56,  175 => 54,  168 => 51,  163 => 49,  159 => 48,  151 => 45,  147 => 44,  142 => 42,  137 => 39,  132 => 38,  128 => 37,  125 => 36,  120 => 34,  117 => 33,  112 => 32,  107 => 31,  105 => 30,  101 => 28,  93 => 24,  91 => 23,  88 => 22,  83 => 19,  81 => 18,  77 => 17,  70 => 16,  67 => 15,  65 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  49 => 9,  45 => 8,  41 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %} */
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %} */
/*   </ul>*/
/*   <div class="row">{{ column_left }} */
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}   */
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/* 	  {% if false %}*/
/* 	  <!-- FontAwesome for themes that require it -->*/
/* 	  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/* 	  {% endif %}*/
/* 	  <div id="warning-messages">*/
/* 	  	{% if error_warning %}*/
/* 		  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 		    <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		  </div>*/
/* 		{% endif %}*/
/* 	  </div>*/
/* 	  <div id="success-messages"></div>*/
/* 	  {% if mobile_stylesheet %}*/
/* 	  <link rel="stylesheet" media="screen and (min-width: 701px) and (max-width: 99999px)" href="{{ stylesheet }}" />*/
/* 	  <link rel="stylesheet" media="screen and (min-width: 1px) and (max-width: 700px)" href="{{ mobile_stylesheet }}" />*/
/* 	  {% else %}   */
/* 	  <link rel="stylesheet" href="{{ stylesheet }}" />*/
/* 	  {% endif %}*/
/* */
/* 	  {% if html_header %} */
/* 	  {{ html_header }} */
/* 	  {% endif %} */
/* */
/* 	  <div id="quickcheckoutconfirm">*/
/* 	  	{% if quickcheckout_layout == '4' %} */
/* 			<div class="qc-col-0">*/
/* 				{% if not logged and login_module %} */
/* 					<div class="qc-step" data-col="{{ step['login']['column'] }}" data-row="{{ step['login']['row'] }}">*/
/* 					  <div id="login-box">*/
/* 						<div id="checkout">*/
/* 						  <div class="quickcheckout-heading"><i class="fa fa-sign-in"></i> {{ text_checkout_option }}</div>*/
/* 						  <div class="quickcheckout-content">{{ login }}</div>*/
/* 						</div>*/
/* 						<div class="or">{{ text_or }}</div>*/
/* 					 </div>*/
/* 					 </div>*/
/* 				{% endif %} */
/* 				*/
/* 				<div class="qc-step" data-col="{{ step['payment_address']['column'] }}" data-row="{{ step['payment_address']['row'] }}">*/
/* 					<div id="payment-address">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ not logged ? text_checkout_account : text_checkout_payment_address }}</div>*/
/* 					  <div class="quickcheckout-content">{{ guest ? guest : payment_address }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{% if shipping_required %} */
/* 				<div class="qc-step {% if not show_shipping_address %}{{ 'hidden' }}{% endif %}" data-col="{{ step['shipping_address']['column'] }}" data-row="{{ step['shipping_address']['row'] }}">*/
/* 					<div id="shipping-address">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ text_checkout_shipping_address }}</div>*/
/* 					  <div class="quickcheckout-content">{{ shipping_address ? shipping_address }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endif %} */
/* */
/* 				{% if shipping_required %} */
/* 				<div class="qc-step {% if not shipping_module %}{{ 'hidden' }}{% endif %}" data-col="{{ step['shipping_method']['column'] }}" data-row="{{ step['shipping_method']['row'] }}">*/
/* 					<div id="shipping-method">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-truck"></i> {{ text_checkout_shipping_method }}</div>*/
/* 					  <div class="quickcheckout-content"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				<div class="qc-step {% if not payment_module %}{{ 'hidden' }}{% endif %}" data-col="{{ step['payment_method']['column'] }}" data-row="{{ step['payment_method']['row'] }}">*/
/* 					<div id="payment-method">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-credit-card"></i> {{ text_checkout_payment_method }}</div>*/
/* 					  <div class="quickcheckout-content"></div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{% if cart_module %} */
/* 				<div class="qc-step" data-col="{{ step['cart']['column'] }}" data-row="{{ step['cart']['row'] }}">*/
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				</div> */
/* 				{% endif %}*/
/* */
/* 				{% if voucher_module or coupon_module or reward_module %} */
/* 				<div class="qc-step" data-col="{{ step['coupons']['column'] }}" data-row="{{ step['coupons']['row'] }}">*/
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				<div class="qc-step" data-col="{{ step['confirm']['column'] }}" data-row="{{ step['confirm']['row'] }}">*/
/* 					<div id="terms">*/
/* 						<div class="quickcheckout-content text-right">{{ terms }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="qc-col-1 col-md-{{ column[1] }}">*/
/* 				</div>*/
/* 				<div class="col-md-{{ column[4] }}">*/
/* 					<div class="row">*/
/* 						<div class="qc-col-2 col-md-{% if column[4] %}{{ ((column[2] / column[4])*12)|round(0, 'floor') }}{% else %}{{ '0' }}{% endif %}">*/
/* 		    			</div>*/
/* 		    			<div class="qc-col-3 col-md-{% if column[4] %}{{ 12 - ((column[2] / column[4])*12)|round(0, 'floor') }}{% else %}{{ '0' }}{% endif %}">*/
/* 		    			</div>*/
/* 						<div class="qc-col-4 col-md-12">*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<script>*/
/* 			$(function() {*/
/* 				$('.qc-step').each(function(){*/
/* 					$(this).appendTo('.qc-col-' + $(this).attr('data-col'));	*/
/* 				})*/
/* 				$('.qc-step').tsort({attr:'data-row'});*/
/* 			})*/
/* 			</script>*/
/* */
/* 		{% else %}*/
/* */
/* 			<div id="quickcheckout-disable">*/
/* 			  {% if not logged and login_module %} */
/* 			  <div class="quickcheckoutmid" id="login-box">*/
/* 				<div id="checkout">*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-sign-in"></i> {{ text_checkout_option }}</div>*/
/* 				  <div class="quickcheckout-content">{{ login }}</div>*/
/* 				</div>*/
/* 				<div class="or">{{ text_or }}</div>*/
/* 			  </div>*/
/* 			  {% endif %} */
/* 			  <div class="quickcheckoutleft">*/
/* 				<div id="payment-address">*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ not logged ? text_checkout_account : text_checkout_payment_address }}</div>*/
/* 				  <div class="quickcheckout-content">{{ guest ? guest : payment_address }}</div>*/
/* 				</div>*/
/* 				{% if shipping_required %} */
/* 				<div id="shipping-address" {% if not show_shipping_address %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ text_checkout_shipping_address }}</div>*/
/* 				  <div class="quickcheckout-content">{{ shipping_address ? shipping_address }}</div>*/
/* 				</div>*/
/* 				{% endif %} */
/* 			  </div>*/
/* 			  <div class="quickcheckoutright">*/
/* 				{% if shipping_required %} */
/* 				<div id="shipping-method" {% if not shipping_module %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-truck"></i> {{ text_checkout_shipping_method }}</div>*/
/* 				  <div class="quickcheckout-content"></div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				<div id="payment-method" {% if not payment_module %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-credit-card"></i> {{ text_checkout_payment_method }}</div>*/
/* 				  <div class="quickcheckout-content"></div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  {% if quickcheckout_layout == '2' %} */
/* 				<div class="quickcheckoutleft">*/
/* 				  {% if cart_module %} */
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 				<div style="clear:right;"></div>*/
/* 				<div class="quickcheckoutright">*/
/* 				  {% if voucher_module or coupon_module or reward_module %} */
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 			  {% elseif quickcheckout_layout == '1' or quickcheckout_layout == '3' %}*/
/* 				{% if cart_module or voucher_module or coupon_module or reward_module %}*/
/* 				<div class="quickcheckoutleft extra-width">*/
/* 				  {% if cart_module %}*/
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				  {% if voucher_module or coupon_module or reward_module %}*/
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 				{% endif %} */
/* 			  {% endif %}*/
/* 			  <div style="clear: both;"></div>*/
/* 			</div>*/
/* */
/* 			<div class="quickcheckoutmid">*/
/* 			  <div id="terms">*/
/* 				<div class="quickcheckout-content text-right">{{ terms }}</div>*/
/* 			  </div>*/
/* 			</div>*/
/* */
/* 		{% endif %}*/
/* */
/* 	  </div>*/
/* */
/* 	  {% if html_footer %}*/
/* 	  {{ html_footer }}*/
/* 	  {% endif %}*/
/* */
/* 	{{ content_bottom }}</div>*/
/*   {{ column_right }}</div>*/
/* </div>*/
/* */
/* {% if custom_css %}*/
/* <style type="text/css">*/
/* {{ custom_css }}*/
/* </style>*/
/* {% endif %} */
/* <script type="text/javascript"><!--*/
/* {% if load_screen %} */
/* $(window).load(function() {*/
/*     $.blockUI({*/
/* 		message: '<h1 style="color:#ffffff;">{{ text_please_wait }}</h1>',*/
/* 		css: {*/
/* 			border: 'none',*/
/* 			padding: '15px',*/
/* 			backgroundColor: '#000000',*/
/* 			'-webkit-border-radius': '10px',*/
/* 			'-moz-border-radius': '10px',*/
/* 			'-khtml-border-radius': '10px',*/
/* 			'border-radius': '10px',*/
/* 			opacity: .8,*/
/* 			color: '#ffffff'*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	setTimeout(function() {*/
/* 		$.unblockUI();*/
/* 	}, 2000);*/
/* });*/
/* {% endif %} */
/* */
/* {% if not logged %}*/
/* 	{% if save_data %}*/
/* 	// Save form data*/
/* 	$(document).on('change', '#payment-address input[type=\'text\'], #payment-address select', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',*/
/* 			type: 'post',*/
/* 			data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				// No action needed*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* */
/* 	$(document).on('change', '#shipping-address input[type=\'text\'], #shipping-address select', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',*/
/* 			type: 'post',*/
/* 			data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'password\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-address textarea'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				// No action needed*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* 	{% endif %} */
/* 	*/
/* 	{% if login_module %} */
/* 	// Login Form Clicked*/
/* 	$(document).on('click', '#button-login', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/login/validate',*/
/* 			type: 'post',*/
/* 			data: $('#checkout #login :input'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				$('#button-login').prop('disabled', true);*/
/* 				$('#button-login').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-login').prop('disabled', false);*/
/* 				$('#button-login').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				$('.alert').remove();*/
/* */
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* 	{% endif %} */
/* */
/* // Validate Register*/
/* function validateRegister() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/register/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 							*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					if (json['error']['password']) {*/
/* 						$('#payment-address input[name=\'password\']').after('<div class="text-danger">' + json['error']['password'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['error']['confirm']) {*/
/* 						$('#payment-address input[name=\'confirm\']').after('<div class="text-danger">' + json['error']['confirm'] + '</div>');*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					if (json['error']['password']) {*/
/* 						$('#payment-address input[name=\'password\']').css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* */
/* 					if (json['error']['confirm']) {*/
/* 						$('#payment-address input[name=\'confirm\']').css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				{% if shipping_required %} */
/* 				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').val();*/
/* */
/* 				if (shipping_address) {*/
/* 					validateShippingMethod();*/
/* 				} else {*/
/* 					validateGuestShippingAddress();*/
/* 				}*/
/* 				{% else %}  */
/* 				validatePaymentMethod();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Guest Payment Address*/
/* function validateGuestAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/guest/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {		*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				var create_account = $('#payment-address input[name=\'create_account\']:checked').val();*/
/* */
/* 				{% if shipping_required %} */
/* 				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').val();*/
/* */
/* 				if (create_account) {*/
/* 					validateRegister();*/
/* 				} else {*/
/* 					if (shipping_address) {*/
/* 						validateShippingMethod();*/
/* 					} else {*/
/* 						validateGuestShippingAddress();*/
/* 					}*/
/* 				}*/
/* 				{% else %}   */
/* 				if (create_account) {*/
/* 					validateRegister();*/
/* 				} else {*/
/* 					validatePaymentMethod();*/
/* 				}*/
/* 				{% endif %}*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Guest Shipping Address*/
/* function validateGuestShippingAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/guest_shipping/validate',*/
/* 		type: 'post',*/
/* 		data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address select, #shipping-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				validateShippingMethod();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Confirm Payment*/
/* $(document).on('click', '#button-payment-method', function() {*/
/* 	$('#button-payment-method').prop('disabled', true);*/
/* 	$('#button-payment-method').button('loading');*/
/* 	*/
/* 	$('#button-payment-method').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 	*/
/* 	validateGuestAddress();*/
/* });*/
/* {% else %}   */
/* // Validate Payment Address*/
/* function validatePaymentAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_address/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				{% if shipping_required %} */
/* 					validateShippingAddress();*/
/* 				{% else %}   */
/* 					validatePaymentMethod();*/
/* 				{% endif %}*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* {% if shipping_required %} */
/* // Validate Shipping Address*/
/* function validateShippingAddress() {*/
/* 	var payment_mode = $('input[name="payment_address"]:checked').val();*/
/* 	if (payment_mode == 'new') {*/
/* 		{% if logged and not show_shipping_address %}*/
/* 			var addressType = '#payment-address';*/
/* 			var shipping_mode = 'input[name="shipping_address"]:checked, ';*/
/* 		{% else %}*/
/* 			var addressType = '#shipping-address';*/
/* 			var shipping_mode = '';*/
/* 		{% endif %}*/
/* 	} else {*/
/* 		var addressType = '#shipping-address';*/
/* 		var shipping_mode = '';*/
/* 	}*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/shipping_address/validate',*/
/* 		type: 'post',*/
/* 		data: $(shipping_mode + addressType +' input[type=\'text\'], '+addressType +' input[type=\'password\'], '+addressType +' input[type=\'checkbox\']:checked, '+addressType +' input[type=\'radio\']:checked, '+addressType +' select, '+addressType +' textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				validateShippingMethod();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* {% endif %} */
/* */
/* // Confirm payment*/
/* $(document).on('click', '#button-payment-method', function() {*/
/* 	$('#button-payment-method').prop('disabled', true);*/
/* 	$('#button-payment-method').button('loading');*/
/* 	*/
/* 	$('#button-payment-method').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 	*/
/* 	validatePaymentAddress();*/
/* });*/
/* {% endif %}// Close if logged php*/
/* */
/* // Payment Method*/
/* function reloadPaymentMethod() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea, #payment-method input[type=\'text\'], #payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			moduleLoad($('#payment-method'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#payment-method'), {{ loading_display }} );*/
/* 			*/
/* 			$('#payment-method .quickcheckout-content').html(html);*/
/* 			*/
/* 			{% if load_screen %} */
/* 			$.unblockUI();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* function reloadPaymentMethodById(address_id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,*/
/* 		type: 'post',*/
/* 		data: $('#payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			moduleLoad($('#payment-method'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#payment-method'), {{ loading_display }} );*/
/* 			*/
/* 			$('#payment-method .quickcheckout-content').html(html);*/
/* 			*/
/* 			{% if load_screen %} */
/* 			$.unblockUI();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Payment Method*/
/* function validatePaymentMethod() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-method select, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'checkbox\']:checked, #payment-method textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			} else {*/
/* 				validateTerms();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Shipping Method*/
/* {% if shipping_required %} */
/* 	function reloadShippingMethod(type) {*/
/* 		if (type == 'payment') {*/
/* 			var post_data = $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		} else {*/
/* 			var post_data = $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		}*/
/* 		*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method',*/
/* 			type: 'post',*/
/* 			data: post_data,*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				moduleLoad($('#shipping-method'), {{ loading_display }} );*/
/* 			},*/
/* 			success: function(html) {*/
/* 				moduleLoaded($('#shipping-method'), {{ loading_display }} );*/
/* 				*/
/* 				$('#shipping-method .quickcheckout-content').html(html);*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* */
/* 	function reloadShippingMethodById(address_id) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,*/
/* 			type: 'post',*/
/* 			data: $('#shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea'),*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				moduleLoad($('#shipping-method'), {{ loading_display }} );*/
/* 			},*/
/* 			success: function(html) {*/
/* 				moduleLoaded($('#shipping-method'), {{ loading_display }} );*/
/* 				*/
/* 				$('#shipping-method .quickcheckout-content').html(html);*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* */
/* 	// Validate Shipping Method*/
/* 	function validateShippingMethod() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method/validate',*/
/* 			type: 'post',*/
/* 			data: $('#shipping-method select, #shipping-method input[type=\'radio\']:checked, #shipping-method textarea, #shipping-method input[type=\'text\']'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* */
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					$('#button-payment-method').prop('disabled', false);*/
/* 					$('#button-payment-method').button('reset');*/
/* 					$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 					*/
/* 					$('.fa-spinner').remove();*/
/* 					*/
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 					if (json['error']['warning']) {*/
/* 						$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 						$('.alert-danger').fadeIn('slow');*/
/* 					}*/
/* 				} else {*/
/* 					validatePaymentMethod();*/
/* 				}*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* {% endif %} */
/* */
/* // Validate confirm button*/
/* function validateTerms() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/terms/validate',*/
/* 		type: 'post',*/
/* 		data: $('#terms input[type=\'checkbox\']:checked'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			}*/
/* 		*/
/* 			if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			} else {*/
/* 				loadConfirm();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Load confirm*/
/* function loadConfirm() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/confirm',*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			{% if confirmation_page %} */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			*/
/* 				{% if slide_effect %} */
/* 				$('#quickcheckoutconfirm').slideUp('slow');*/
/* 				{% else %}   */
/* 				$('#quickcheckoutconfirm').html('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %} */
/* 			*/
/* 				{% if load_screen %} */
/* 				$.blockUI({*/
/* 					message: '<h1 style="color:#ffffff;">{{ text_please_wait }}</h1>',*/
/* 					css: {*/
/* 						border: 'none',*/
/* 						padding: '15px',*/
/* 						backgroundColor: '#000000',*/
/* 						'-webkit-border-radius': '10px',*/
/* 						'-moz-border-radius': '10px',*/
/* 						'-khtml-border-radius': '10px',*/
/* 						'border-radius': '10px',*/
/* 						opacity: .8,*/
/* 						color: '#ffffff'*/
/* 					}*/
/* 				});*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 		},*/
/* 		success: function(html) {*/
/* 			{% if confirmation_page %} */
/* 				{% if load_screen %} */
/* 				$.unblockUI();*/
/* 				{% endif %} */
/* 				*/
/* 				$('#quickcheckoutconfirm').hide().html(html);*/
/* 				*/
/* 				{% if not auto_submit %} */
/* 					{% if slide_effect %} */
/* 					$('#quickcheckoutconfirm').slideDown('slow');*/
/* 					{% else %}   */
/* 					$('#quickcheckoutconfirm').show();*/
/* 					{% endif %} */
/* 				{% else %}   */
/* 				$('#quickcheckoutconfirm').after('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %}*/
/* 			{% else %}   */
/* 				$('#terms .terms').hide();*/
/* 				$('#payment').html(html).slideDown('fast');*/
/* 				*/
/* 				{% if auto_submit %} */
/* 				$('#payment').hide().after('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %} */
/* 				*/
/* 				$('html, body').animate({ scrollTop: $('#terms').offset().top }, 'slow');*/
/* 				*/
/* 				disableCheckout();*/
/* 			{% endif %}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Load cart*/
/* {% if cart_module %} */
/* function loadCart() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart',*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('.tooltip').remove();*/
/* 			*/
/* 			moduleLoad($('#cart1'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#cart1'), {{ loading_display }} );*/
/* 			*/
/* 			$('#cart1 .quickcheckout-content').html(html);*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* 	{% if not shipping_required %} */
/* 	$(document).ready(function(){*/
/* 		loadCart();*/
/* 	});*/
/* 	{% endif %} */
/* {% endif %} */
/* */
/* {% if voucher_module or coupon_module or reward_module %} */
/* // Validate Coupon*/
/* $(document).on('click', '#button-coupon', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',*/
/* 		type: 'post',*/
/* 		data: $('#coupon-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-coupon').prop('disabled', true);*/
/* 			$('#button-coupon').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-coupon').prop('disabled', false);*/
/* 			$('#coupon-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %} */
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-voucher', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',*/
/* 		type: 'post',*/
/* 		data: $('#voucher-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher').prop('disabled', true);*/
/* 			$('#button-voucher').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher').prop('disabled', false);*/
/* 			$('#voucher-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-reward', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateReward',*/
/* 		type: 'post',*/
/* 		data: $('#reward-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward').prop('disabled', true);*/
/* 			$('#button-reward').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward').prop('disabled', false);*/
/* 			$('#reward-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* {% endif %}*/
/* */
/* {% if shipping_required %} */
/* $(document).on('focusout', 'input[name=\'postcode\']', function() {*/
/* 	{% if not logged %} */
/* 	if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 		reloadShippingMethod('payment');*/
/* 	} else {*/
/* 		reloadShippingMethod('shipping');*/
/* 	}*/
/* 	{% else %}   */
/* 	if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 		reloadShippingMethod('shipping');*/
/* 	} else {*/
/* 		reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 	}*/
/* 	{% endif %} */
/* });*/
/* {% endif %}*/
/* */
/* {% if highlight_error %} */
/* 	$(document).on('keydown', 'input', function() {*/
/* 		$(this).css('background', '').css('border', '');*/
/* 		*/
/* 		$(this).siblings('.text-danger').remove();*/
/* 	});*/
/* 	$(document).on('change', 'select', function() {*/
/* 		$(this).css('background', '').css('border', '');*/
/* 		*/
/* 		$(this).siblings('.text-danger').remove();*/
/* 	});*/
/* {% endif %} */
/* */
/* {% if edit_cart %} */
/* $(document).on('click', '.button-update', function() {*/
/* */
/* 	var quantity = $(this).parents('.quantity').find('input.qc-product-qantity');*/
/* 	if (quantity.length){*/
/* 		if ($(this).data('type')=='increase') {*/
/* 			quantity.val(parseInt(quantity.val())+1);*/
/* 		} else if ($(this).data('type')=='decrease') {*/
/* 			quantity.val(parseInt(quantity.val())-1);*/
/* 		}*/
/* 	}*/
/* 	*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart/update',*/
/* 		type: 'post',*/
/* 		data: $('#cart1 :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			//$('#cart1 .button-update').prop('disabled', true);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else {*/
/* 				if (json['error']['stock']) {*/
/* 					$('#button-payment-method').attr("disabled", true);*/
/* 				} else if (json['error']['warning']) {*/
/* 						$('#warning-messages').html('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 						$('.alert-danger').fadeIn('slow');*/
/* 						$('#button-payment-method').attr("disabled", true);*/
/* 				} else {*/
/* 					$('#warning-messages').html('');*/
/* 					$('#button-payment-method').removeAttr("disabled");*/
/* 				}*/
/* */
/* 				{% if not logged %} */
/* 					if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('payment');*/
/* 						{% endif %} */
/* 					} else {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('shipping');*/
/* 						{% endif %} */
/* 					}*/
/* 				{% else %}   */
/* 					if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 						reloadPaymentMethod();*/
/* 					} else {*/
/* 						reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 						reloadShippingMethod('shipping');*/
/* 					} else {*/
/* 						reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					{% endif %} */
/* 				{% endif %} */
/* 				*/
/* 				{% if not shipping_required %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '.button-remove', function() {*/
/* 	var remove_id = $(this).attr('data-remove');*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,*/
/* 		type: 'get',*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#cart1 .button-remove').prop('disabled', true);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else {*/
/* 				{% if not logged %} */
/* 					if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('payment');*/
/* 						{% endif %} */
/* 					} else {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('shipping');*/
/* 						{% endif %} */
/* 					}*/
/* 				{% else %}   */
/* 					if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 						reloadPaymentMethod();*/
/* 					} else {*/
/* 						reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 						reloadShippingMethod('shipping');*/
/* 					} else {*/
/* 						reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					{% endif %} */
/* 				{% endif %}*/
/* 				*/
/* 				{% if not shipping_required %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* */
/* 	return false;*/
/* });*/
/* {% endif %}*/
/* */
/* $('.date').datetimepicker({*/
/* 	format: 'YYYY-MM-DD',*/
/* 	locale: 'ru'*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	format: 'HH:mm',*/
/* 	locale: 'ru'*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	locale: 'ru'*/
/* });*/
/* //--></script>*/
/* {% if error_warning %}*/
/* 	<script type="text/javascript"><!--*/
/* 		  	$('#button-payment-method').attr("disabled", true);*/
/* 	//--></script>*/
/* {% endif %}*/
/* {{ footer }}*/
