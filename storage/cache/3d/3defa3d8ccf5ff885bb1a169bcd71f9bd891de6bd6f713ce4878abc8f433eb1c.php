<?php

/* ToolsShop/template/common/header.twig */
class __TwigTemplate_b8a46903bced0b0a5b2d62f45d1f5f04fb040a06fed135c71f5b43c8ea5bfa99 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"https://fonts.googleapis.com/css?family=PT+Sans:400,700\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/";
        // line 26
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\" />

<!-- Codezeel www.codezeel.com - Start -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 30
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/codezeel/carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 31
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/codezeel/custom.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 32
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/codezeel/bootstrap.min.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 33
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/codezeel/lightbox.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 34
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/codezeel/animate.css\" />

";
        // line 36
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 37
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
            echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
            echo "/stylesheet/codezeel/rtl.css\">
";
        }
        // line 39
        echo "
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "<link href=\"style.href\" type=\"text/css\" rel=\"style.rel\" media=\"style.media\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "

";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 49
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 53
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 56
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "<!-- Codezeel www.codezeel.com - Start -->
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/custom.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/jstree.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/codezeel.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/jquery.custom.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/jquery.formalize.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/lightbox/lightbox-2.6.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/tabs.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/jquery.elevatezoom.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/bootstrap-notify.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/doubletaptogo.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/parallax.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/codezeel/owl.carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<!-- Codezeel www.codezeel.com - End -->

<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
</head>

";
        // line 78
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 79
            $context["layoutclass"] = "layout-3";
        } elseif ((        // line 80
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 81
            if ((isset($context["column_left"]) ? $context["column_left"] : null)) {
                // line 82
                $context["layoutclass"] = "layout-2 left-col";
            } elseif (            // line 83
(isset($context["column_right"]) ? $context["column_right"] : null)) {
                // line 84
                $context["layoutclass"] = "layout-2 right-col";
            }
        } else {
            // line 87
            $context["layoutclass"] = "layout-1";
        }
        // line 89
        echo "
<body class=\"";
        // line 90
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " ";
        echo (isset($context["layoutclass"]) ? $context["layoutclass"] : null);
        echo "\">
<nav id=\"top\">
\t<div class=\"container\">
    \t<div id=\"top-links\" class=\"nav pull-left\">
\t\t\t
\t\t</div>
\t\t
\t\t
  </div>
</nav>

<div class=\"header-container\">
<header>
\t<div class=\"container\">
    \t<div class=\"row\">
\t\t\t<div class=\"header-main\">
\t\t\t\t";
        // line 106
        echo (isset($context["headertop"]) ? $context["headertop"] : null);
        echo "
\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t";
        // line 109
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 110
            echo "\t\t\t\t\t  \t<h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
\t\t\t\t\t  \t";
        }
        // line 112
        echo "\t\t\t\t\t</div>
\t\t\t\t </div>
\t\t\t\t<div class=\"head-right-bottom\">
\t\t\t\t\t<div class=\"header-cart\">";
        // line 115
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 118
        echo "\t\t\t\t<div class=\"dropdown myaccount\">
\t\t\t\t\t\t\t<a href=\"";
        // line 119
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 120
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t<span class=\"box-sub-heading\">";
        // line 121
        echo (isset($context["text_dec"]) ? $context["text_dec"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right myaccount-menu\">
\t\t\t\t\t\t\t\t";
        // line 125
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 126
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 127
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 128
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 129
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 130
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 133
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 135
        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 136
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 137
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"lang-curr\">
\t\t\t\t\t\t\t\t\t";
        // line 140
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 141
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t";
        // line 145
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
\t\t\t";
        // line 147
        echo "\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</header>
";
        // line 152
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
</div>

<div class=\"wrap-breadcrumb parallax-breadcrumb\">
\t<div class=\"container\"></div>
</div>

<!-- ======= Quick view JS ========= -->
<script> 

function quickbox(){
 if (\$(window).width() > 767) {
\t\t\$('.quickview-button').magnificPopup({
\t\t\ttype:'iframe',
\t\t\tdelegate: 'a',
\t\t\tpreloader: true,
\t\t\ttLoading: 'Loading image #%curr%...',
\t\t});
 }\t
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});

</script>";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 152,  404 => 147,  400 => 145,  393 => 141,  389 => 140,  379 => 137,  371 => 136,  362 => 135,  355 => 133,  348 => 132,  341 => 130,  335 => 129,  329 => 128,  323 => 127,  316 => 126,  314 => 125,  307 => 121,  303 => 120,  297 => 119,  294 => 118,  289 => 115,  284 => 112,  276 => 110,  264 => 109,  258 => 106,  237 => 90,  234 => 89,  231 => 87,  227 => 84,  225 => 83,  223 => 82,  221 => 81,  219 => 80,  217 => 79,  215 => 78,  193 => 58,  185 => 56,  181 => 55,  170 => 53,  166 => 52,  163 => 51,  154 => 49,  150 => 48,  137 => 46,  133 => 45,  129 => 43,  122 => 41,  118 => 40,  115 => 39,  109 => 37,  107 => 36,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  79 => 26,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* */
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">*/
/* <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">*/
/* <link href="catalog/view/theme/{{ mytemplate }}/stylesheet/stylesheet.css" rel="stylesheet" />*/
/* */
/* <!-- Codezeel www.codezeel.com - Start -->*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/magnific/magnific-popup.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/codezeel/carousel.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/codezeel/custom.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/codezeel/bootstrap.min.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/codezeel/lightbox.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/codezeel/animate.css" />*/
/* */
/* {% if direction == 'rtl' %}*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/codezeel/rtl.css">*/
/* {% endif %}*/
/* */
/* {% for style in styles %}*/
/* <link href="style.href" type="text/css" rel="style.rel" media="style.media" />*/
/* {% endfor %}*/
/* */
/* */
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* <!-- Codezeel www.codezeel.com - Start -->*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/custom.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/jstree.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/carousel.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/codezeel.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/jquery.custom.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/jquery.formalize.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/lightbox/lightbox-2.6.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/tabs.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/jquery.elevatezoom.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/bootstrap-notify.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/doubletaptogo.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/parallax.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/codezeel/owl.carousel.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js"></script>*/
/* <!-- Codezeel www.codezeel.com - End -->*/
/* */
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* </head>*/
/* */
/* {% if (column_left and column_right) %}*/
/* {% set layoutclass = 'layout-3' %}*/
/* {% elseif (column_left or column_right) %}*/
/* {% if column_left %}*/
/* {% set layoutclass = 'layout-2 left-col' %}*/
/* {% elseif column_right %}*/
/* {% set layoutclass = 'layout-2 right-col' %}*/
/* {% endif %}*/
/* {% else %}*/
/* {% set layoutclass = 'layout-1' %}*/
/* {% endif %}*/
/* */
/* <body class="{{ class }} {{ layoutclass }}">*/
/* <nav id="top">*/
/* 	<div class="container">*/
/*     	<div id="top-links" class="nav pull-left">*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 		*/
/*   </div>*/
/* </nav>*/
/* */
/* <div class="header-container">*/
/* <header>*/
/* 	<div class="container">*/
/*     	<div class="row">*/
/* 			<div class="header-main">*/
/* 				{{ headertop }}*/
/* 				<div class="header-logo">*/
/* 					<div id="logo">*/
/* 						{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/* 					  	<h1><a href="{{ home }}">{{ name }}</a></h1>*/
/* 					  	{% endif %}*/
/* 					</div>*/
/* 				 </div>*/
/* 				<div class="head-right-bottom">*/
/* 					<div class="header-cart">{{ cart }}</div>*/
/* 				</div>*/
/* 				{# <div class="headertopright"> #}*/
/* 				<div class="dropdown myaccount">*/
/* 							<a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown">*/
/* 								<span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span>*/
/* 								<span class="box-sub-heading">{{ text_dec }}</span>*/
/* 								<i class="fa fa-angle-down" aria-hidden="true"></i></a>*/
/* 								*/
/* 							<ul class="dropdown-menu dropdown-menu-right myaccount-menu">*/
/* 								{% if logged %}*/
/* 								<li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 								<li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 								<li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* 								<li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* 								<li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/* 								{% else %}*/
/* 								<li><a href="{{ register }}">{{ text_register }}</a></li>*/
/* 								<li><a href="{{ login }}">{{ text_login }}</a></li>*/
/* 								{% endif %}*/
/* 								<li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}">{{ text_wishlist }}</a></li>*/
/* 								<li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}">{{ text_shopping_cart }}</a></li>*/
/* 								<li><a href="{{ checkout }}" title="{{ text_checkout }}">{{ text_checkout }}</a></li>*/
/* 								*/
/* 								<div class="lang-curr">*/
/* 									{{ language }}*/
/* 									{{ currency }}*/
/* 								</div>*/
/* 							</ul>*/
/* 						</div>*/
/* 				{{ search }}*/
/* 			{# </div> #}*/
/* 			*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </header>*/
/* {{ menu }}*/
/* </div>*/
/* */
/* <div class="wrap-breadcrumb parallax-breadcrumb">*/
/* 	<div class="container"></div>*/
/* </div>*/
/* */
/* <!-- ======= Quick view JS ========= -->*/
/* <script> */
/* */
/* function quickbox(){*/
/*  if ($(window).width() > 767) {*/
/* 		$('.quickview-button').magnificPopup({*/
/* 			type:'iframe',*/
/* 			delegate: 'a',*/
/* 			preloader: true,*/
/* 			tLoading: 'Loading image #%curr%...',*/
/* 		});*/
/*  }	*/
/* }*/
/* jQuery(document).ready(function() {quickbox();});*/
/* jQuery(window).resize(function() {quickbox();});*/
/* */
/* </script>*/
