<?php

/* ToolsShop/template/information/blogger_blogs.twig */
class __TwigTemplate_bdf3e2ac97ddc72282544e1b53397aa9950598eab7ff6475d47255b92414b481 extends Twig_Template
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
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
\t<li><a href=\"";
            // line 5
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t";
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
        echo "   
\t\t<div id=\"content\" class=\"";
        // line 18
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "  all-blog\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo " 
\t\t<h1>";
        // line 19
        echo (isset($context["text_blogs"]) ? $context["text_blogs"] : null);
        echo "</h1>
      
\t\t";
        // line 21
        if ((isset($context["blogs"]) ? $context["blogs"] : null)) {
            echo " 
\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
\t\t\t\t<div class=\"panel-default\">
\t\t\t\t";
                // line 25
                echo "\t\t\t\t";
                if ($this->getAttribute($context["blog"], "blog_data", array())) {
                    echo " 
\t\t\t\t\t";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["blog"], "blog_data", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                        echo " 
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t
\t\t\t\t\t\t\t<div class=\"blog-left-content\">
\t\t\t\t\t\t\t\t<h5 class=\"blog-title\"><a href=\"";
                        // line 31
                        echo $this->getAttribute($context["topic"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["topic"], "title", array());
                        echo "</a></h5>
\t\t\t\t\t\t\t\t";
                        // line 32
                        if ($this->getAttribute($context["topic"], "image", array())) {
                            echo " 
\t\t\t\t\t\t\t\t\t<div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 34
                            echo $this->getAttribute($context["topic"], "image", array());
                            echo "\" alt=\"";
                            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                            echo "\" title=\"";
                            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                            echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"post-image-hover\"> </div>
\t\t\t\t\t\t\t\t\t\t<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                            // line 36
                            echo $this->getAttribute($context["topic"], "image", array());
                            echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"";
                            // line 37
                            echo $this->getAttribute($context["topic"], "href", array());
                            echo "\"><i class=\"fa fa-link\"></i></a></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 39
                        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"blog-right-content\">
\t\t  \t\t\t\t\t\t<div class=\"blog-date-comment\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-date\">";
                        // line 44
                        echo $this->getAttribute($context["topic"], "date_added", array());
                        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"comment-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"write-comment-count\"> ";
                        // line 46
                        echo $this->getAttribute($context["topic"], "total_comments", array());
                        echo "  ";
                        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
                        echo " </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"write-comment\"><a href=\"";
                        // line 47
                        echo $this->getAttribute($context["topic"], "href", array());
                        echo "\">";
                        echo (isset($context["text_leave_comment"]) ? $context["text_leave_comment"] : null);
                        echo "</a></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"blog-desc\">";
                        // line 52
                        echo $this->getAttribute($context["topic"], "description", array());
                        echo "</div>
\t\t\t\t\t\t\t<div class=\"read-more\"> <a href=\"";
                        // line 53
                        echo $this->getAttribute($context["topic"], "href", array());
                        echo "\"  class=\"btn btn-default\"> <i class=\"fa fa-link\"></i> ";
                        echo (isset($context["text_read_more"]) ? $context["text_read_more"] : null);
                        echo "</a> </div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "\t\t\t\t";
                } else {
                    echo "   
\t\t\t\t\t<div class=\"panel-body text-center\">";
                    // line 58
                    echo (isset($context["text_no_blogs"]) ? $context["text_no_blogs"] : null);
                    echo "</div>
\t\t\t\t";
                }
                // line 59
                echo " 
\t\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t";
        } else {
            echo "   
\t\t<div class=\"panel-body text-center\">";
            // line 63
            echo (isset($context["text_no_blogs"]) ? $context["text_no_blogs"] : null);
            echo "</div>
\t\t";
        }
        // line 64
        echo " 
\t
\t";
        // line 66
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
\t";
        // line 67
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 69
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/information/blogger_blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 69,  220 => 67,  216 => 66,  212 => 64,  207 => 63,  202 => 62,  194 => 59,  189 => 58,  184 => 57,  172 => 53,  168 => 52,  158 => 47,  152 => 46,  147 => 44,  140 => 39,  134 => 37,  130 => 36,  121 => 34,  116 => 32,  110 => 31,  100 => 26,  95 => 25,  88 => 22,  84 => 21,  79 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  50 => 10,  46 => 9,  41 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }} */
/* <div class="container">*/
/* 	<ul class="breadcrumb">*/
/* 	{% for breadcrumb in breadcrumbs %} */
/* 	<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 	{% endfor %}  */
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
/*    */
/* 		<div id="content" class="{{ class }}  all-blog">{{ content_top }} */
/* 		<h1>{{ text_blogs }}</h1>*/
/*       */
/* 		{% if blogs %} */
/* 			{% for blog in blogs %} */
/* 				<div class="panel-default">*/
/* 				{# <h4>{{ blog.name }}</h4> #}*/
/* 				{% if blog.blog_data %} */
/* 					{% for topic in blog.blog_data %} */
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-body">*/
/* 		*/
/* 							<div class="blog-left-content">*/
/* 								<h5 class="blog-title"><a href="{{ topic.href }}">{{ topic.title }}</a></h5>*/
/* 								{% if topic.image %} */
/* 									<div class="blog-image">*/
/* 										<img src="{{ topic.image }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" />*/
/* 										<div class="post-image-hover"> </div>*/
/* 										<p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="{{ topic.image }}" data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>*/
/* 											<a class="icon readmore_link" title="Click to view Read More " href="{{ topic.href }}"><i class="fa fa-link"></i></a></p>*/
/* 									</div>*/
/* 								{% endif %} */
/* 							</div>*/
/* 							*/
/* 							<div class="blog-right-content">*/
/* 		  						<div class="blog-date-comment">*/
/* 									<div class="blog-date">{{ topic.date_added}}</div>*/
/* 									<div class="comment-wrapper">*/
/* 										<div class="write-comment-count"> {{ topic.total_comments }}  {{ entry_comment }} </div>*/
/* 										<div class="write-comment"><a href="{{ topic.href }}">{{ text_leave_comment }}</a></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="blog-desc">{{ topic.description }}</div>*/
/* 							<div class="read-more"> <a href="{{ topic.href }}"  class="btn btn-default"> <i class="fa fa-link"></i> {{ text_read_more }}</a> </div>	*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				{% else %}   */
/* 					<div class="panel-body text-center">{{ text_no_blogs }}</div>*/
/* 				{% endif %} */
/* 				</div>*/
/* 		{% endfor %}*/
/* 		{% else %}   */
/* 		<div class="panel-body text-center">{{ text_no_blogs }}</div>*/
/* 		{% endif %} */
/* 	*/
/* 	{{ content_bottom }}</div>*/
/* 	{{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
