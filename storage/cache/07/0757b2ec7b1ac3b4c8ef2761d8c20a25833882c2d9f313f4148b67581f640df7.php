<?php

/* ToolsShop/template/information/blogger.twig */
class __TwigTemplate_1d1b82fbaeb965b7eb80b63232900f78ad87b7945e8d9fd686f43c1f0e61d194 extends Twig_Template
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
\t<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
\t\t<li><a href=\"";
            // line 5
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "   
\t</ul>
\t
\t<div class=\"row\">";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
\t\t";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "\t\t";
            $context["class"] = "col-sm-6";
            // line 12
            echo "\t\t";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "\t\t";
            $context["class"] = "col-sm-9";
            // line 14
            echo "\t\t";
        } else {
            // line 15
            echo "\t\t";
            $context["class"] = "col-sm-12";
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "\t\t
\t\t<div id=\"content\" class=\"";
        // line 18
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "  single-blog\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo " 
\t\t<h1>";
        // line 19
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t
\t\t";
        // line 21
        if ($this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : null), "image", array())) {
            echo " 
\t\t<div class=\"blog-img\">
\t\t\t<img src=\"";
            // line 23
            echo $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : null), "image", array());
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"img-thumbnail\" />
\t\t</div>
\t\t";
        }
        // line 25
        echo " 
    
\t\t<div class=\"blog-date\">";
        // line 27
        echo (isset($context["date"]) ? $context["date"] : null);
        echo "</div>
\t\t<div class=\"blog-desc\">";
        // line 28
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>

\t\t";
        // line 30
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 31
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 34
        echo " 
\t\t
\t\t";
        // line 36
        if ((isset($context["blog_comments"]) ? $context["blog_comments"] : null)) {
            echo " 
\t\t\t<legend>";
            // line 37
            echo (isset($context["text_your_comments"]) ? $context["text_your_comments"] : null);
            echo "</legend>
\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blog_comments"]) ? $context["blog_comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_comment"]) {
                echo " 
\t\t\t\t<div class=\"view-comment\">
\t\t\t\t\t<div class=\"panel panel-default\" style=\"margin-bottom: 10px; padding-top: 5px;\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"user_icon\"><i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t<div class=\"name\">";
                // line 44
                echo $this->getAttribute($context["blog_comment"], "author", array());
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"date\">";
                // line 45
                echo $this->getAttribute($context["blog_comment"], "date_added", array());
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t <div class=\"comment_info\">
\t\t\t\t\t\t\t\t<div class=\"comment-text\">";
                // line 48
                echo $this->getAttribute($context["blog_comment"], "comment", array());
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo " 
\t\t";
        }
        // line 54
        echo " 
       
\t\t";
        // line 56
        if ((isset($context["allow_comments"]) ? $context["allow_comments"] : null)) {
            echo " 
    \t\t<div class=\"block-title\"><legend>";
            // line 57
            echo (isset($context["button_comment_add"]) ? $context["button_comment_add"] : null);
            echo "</legend></div>
\t\t\t\t<div class=\"panel panel-default\" id=\"add-comment\">
\t\t\t\t";
            // line 59
            if (((isset($context["login_required"]) ? $context["login_required"] : null) &&  !(isset($context["is_logged"]) ? $context["is_logged"] : null))) {
                echo " 
\t\t        \t<h4 class=\"text-center\">";
                // line 60
                echo (isset($context["text_login_required"]) ? $context["text_login_required"] : null);
                echo "</h4>
        \t\t";
            } else {
                // line 62
                echo "        \t\t\t<form action=\"";
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group required\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-author\"><b>";
                // line 64
                echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
                echo "</b></label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"author\" value=\"";
                // line 66
                echo (isset($context["author"]) ? $context["author"] : null);
                echo "\" id=\"input-author\" placeholder=\"";
                echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
                // line 67
                if ((isset($context["error_author"]) ? $context["error_author"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    // line 68
                    echo (isset($context["error_author"]) ? $context["error_author"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group required\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-email\"><b>";
                // line 74
                echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
                echo "</b></label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
                // line 76
                echo (isset($context["email"]) ? $context["email"] : null);
                echo "\" id=\"input-email\" placeholder=\"";
                echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
                // line 77
                if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    // line 78
                    echo (isset($context["error_email"]) ? $context["error_email"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 79
                echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-comment\"><b>";
                // line 84
                echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
                echo "</b></label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\" />";
                // line 86
                echo (isset($context["comment"]) ? $context["comment"] : null);
                echo "</textarea>
\t\t\t\t\t\t\t\t";
                // line 87
                if ((isset($context["error_comment"]) ? $context["error_comment"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    // line 88
                    echo (isset($context["error_comment"]) ? $context["error_comment"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
          \t\t\t\t";
                // line 92
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo " 
\t\t\t\t\t  <input type=\"hidden\" name=\"auto_approve\" value=\"";
                // line 93
                echo (isset($context["auto_approve"]) ? $context["auto_approve"] : null);
                echo "\" />
\t\t\t\t\t  <div class=\"buttons text-right\"><input class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 94
                echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
                echo "\" /></div>
        \t\t</form>
\t\t\t";
            }
            // line 96
            echo " 
\t\t\t</div>
       </div>
        ";
        }
        // line 99
        echo " 
\t";
        // line 100
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  \t";
        // line 101
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 103
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/information/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 103,  306 => 101,  302 => 100,  299 => 99,  293 => 96,  285 => 94,  281 => 93,  277 => 92,  272 => 89,  267 => 88,  263 => 87,  259 => 86,  254 => 84,  247 => 79,  242 => 78,  238 => 77,  232 => 76,  227 => 74,  220 => 69,  215 => 68,  211 => 67,  205 => 66,  200 => 64,  194 => 62,  189 => 60,  185 => 59,  180 => 57,  176 => 56,  172 => 54,  168 => 53,  156 => 48,  150 => 45,  146 => 44,  135 => 38,  131 => 37,  127 => 36,  123 => 34,  116 => 31,  112 => 30,  107 => 28,  103 => 27,  99 => 25,  89 => 23,  84 => 21,  79 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  50 => 10,  46 => 9,  41 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }} */
/* <div class="container">*/
/* 	<ul class="breadcrumb">*/
/* 		{% for breadcrumb in breadcrumbs %} */
/* 		<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 		{% endfor %}   */
/* 	</ul>*/
/* 	*/
/* 	<div class="row">{{ column_left }} */
/* 		{% if column_left and column_right %}*/
/* 		{% set class = 'col-sm-6' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 		{% set class = 'col-sm-9' %}*/
/* 		{% else %}*/
/* 		{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		*/
/* 		<div id="content" class="{{ class }}  single-blog">{{ content_top }} */
/* 		<h1>{{ heading_title }}</h1>*/
/* 		*/
/* 		{% if blogs.image %} */
/* 		<div class="blog-img">*/
/* 			<img src="{{ blogs.image }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" />*/
/* 		</div>*/
/* 		{% endif %} */
/*     */
/* 		<div class="blog-date">{{ date }}</div>*/
/* 		<div class="blog-desc">{{ description }}</div>*/
/* */
/* 		{% if success %} */
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }} */
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %} */
/* 		*/
/* 		{% if blog_comments %} */
/* 			<legend>{{ text_your_comments }}</legend>*/
/* 			{% for blog_comment in blog_comments %} */
/* 				<div class="view-comment">*/
/* 					<div class="panel panel-default" style="margin-bottom: 10px; padding-top: 5px;">*/
/* 						<div class="row">*/
/* 							 <div class="col-sm-3">*/
/* 								<div class="user_icon"><i class="fa fa-user"></i>*/
/* 								<div class="name">{{ blog_comment.author }}</div>*/
/* 								<div class="date">{{ blog_comment.date_added }}</div>*/
/* 							</div>*/
/* 							 <div class="comment_info">*/
/* 								<div class="comment-text">{{ blog_comment.comment }}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %} */
/* 		{% endif %} */
/*        */
/* 		{% if allow_comments %} */
/*     		<div class="block-title"><legend>{{ button_comment_add }}</legend></div>*/
/* 				<div class="panel panel-default" id="add-comment">*/
/* 				{% if login_required and not is_logged %} */
/* 		        	<h4 class="text-center">{{ text_login_required }}</h4>*/
/*         		{% else %}*/
/*         			<form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/* 						<div class="form-group required" style="margin-top: 10px;">*/
/* 							<label class="col-sm-3 control-label" for="input-author"><b>{{ entry_author }}</b></label>*/
/* 							<div class="col-sm-8">*/
/* 								<input type="text" name="author" value="{{ author }}" id="input-author" placeholder="{{ entry_author }}" class="form-control" />*/
/* 								{% if error_author %} */
/* 								<div class="text-danger">{{ error_author }}</div>*/
/* 								{% endif %} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group required" style="margin-top: 10px;">*/
/* 							<label class="col-sm-3 control-label" for="input-email"><b>{{ entry_email }}</b></label>*/
/* 							<div class="col-sm-8">*/
/* 								<input type="text" name="email" value="{{ email }}" id="input-email" placeholder="{{ entry_email }}" class="form-control" />*/
/* 								{% if error_email %} */
/* 								<div class="text-danger">{{ error_email }}</div>*/
/* 								{% endif %} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group" style="margin-top: 10px;">*/
/* 							<label class="col-sm-3 control-label" for="input-comment"><b>{{ entry_comment }}</b></label>*/
/* 							<div class="col-sm-8">*/
/* 								<textarea name="comment" rows="10" id="input-comment" class="form-control" />{{ comment }}</textarea>*/
/* 								{% if error_comment %} */
/* 								<div class="text-danger">{{ error_comment }}</div>*/
/* 								{% endif %} */
/* 							</div>*/
/* 						</div>*/
/*           				{{ captcha }} */
/* 					  <input type="hidden" name="auto_approve" value="{{ auto_approve }}" />*/
/* 					  <div class="buttons text-right"><input class="btn btn-primary" type="submit" value="{{ button_submit }}" data-toggle="tooltip" title="{{ button_submit }}" /></div>*/
/*         		</form>*/
/* 			{% endif %} */
/* 			</div>*/
/*        </div>*/
/*         {% endif %} */
/* 	{{ content_bottom }}</div>*/
/*   	{{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
