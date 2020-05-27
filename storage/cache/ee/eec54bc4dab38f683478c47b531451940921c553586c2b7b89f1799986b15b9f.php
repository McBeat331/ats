<?php

/* ToolsShop/template/common/menu.twig */
class __TwigTemplate_84038595502b2476617707ee13d1139ae2c9a6b9ce872dcdfedf2b5bb651865d extends Twig_Template
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
        echo "<nav class=\"nav-container\" role=\"navigation\">
<div class=\"nav-inner\">
<div class=\"container\">
<!-- ======= Menu Code START ========= -->
";
        // line 5
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 6
            echo "<!-- Opencart 3 level Category Menu-->
<div id=\"menu\" class=\"main-menu\">
\t  ";
            // line 9
            echo " 
      <ul class=\"nav navbar-nav\">
\t  \t
    \t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 14
                    echo "\t\t\t<li class=\"top_level dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>

\t\t\t<div class=\"dropdown-menu megamenu column";
                    // line 16
                    echo $this->getAttribute($context["category"], "column", array());
                    echo "\">
            <div class=\"dropdown-inner\">
\t\t\t  ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 19
                        echo "\t\t\t\t<ul class=\"list-unstyled childs_1\">
                ";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 21
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories START -->
\t\t\t\t\t";
                            // line 22
                            if ($this->getAttribute($context["child"], "childs", array())) {
                                // line 23
                                echo "\t\t\t\t\t  <li class=\"dropdown\"><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a>

\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t              <div class=\"dropdown-inner\">
\t\t\t              ";
                                // line 27
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["child"], "childs", array()), (twig_length_filter($this->env, $this->getAttribute($context["child"], "childs", array())) / twig_round($this->getAttribute($context["child"], "column", array()), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 28
                                    echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t\t  ";
                                    // line 29
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 30
                                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                                        echo $this->getAttribute($context["childs_2"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["childs_2"], "name", array());
                                        echo "</a></li>
\t\t\t\t\t\t\t  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 32
                                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 34
                                echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t  </li>
\t\t\t\t\t";
                            } else {
                                // line 39
                                echo "\t\t\t\t\t  <li><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a></li>
\t\t\t\t\t";
                            }
                            // line 41
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories END -->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "              
\t\t\t    </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "            </div>
\t\t\t</div>
\t\t\t</li>
        ";
                } else {
                    // line 50
                    echo "\t\t\t<li class=\"top_level\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 52
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t";
            if ((isset($context["blog_enable"]) ? $context["blog_enable"] : null)) {
                // line 54
                echo "\t\t\t<li class=\"top_level\"> <a href=\"";
                echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
                echo "\">";
                echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
                echo " </a></li>       
\t\t";
            }
            // line 56
            echo "  </ul>  
</div>
";
        }
        // line 59
        echo "</div>
</div>



<!--  =============================================== Mobile menu start  =============================================  -->
<div id=\"res-menu\" class=\"main-menu nav-container1 container\">
\t<div class=\"nav-responsive\"><span>";
        // line 66
        echo (isset($context["text_menu"]) ? $context["text_menu"] : null);
        echo "</span><div class=\"expandable\"></div></div>
    <ul class=\"main-navigation\">
\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 69
            echo "\t\t\t<li class=\"top_level dropdown\"><a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a>
\t\t\t";
            // line 70
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 71
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 72
                    echo "\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 74
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute($context["child"], "childs", array())) {
                            // line 75
                            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                            // line 76
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
\t\t\t\t\t\t\t\t";
                            // line 77
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["child"], "childs", array()), (twig_length_filter($this->env, $this->getAttribute($context["child"], "childs", array())) / twig_round($this->getAttribute($context["child"], "column", array()), 1, "ceil"))));
                            foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                // line 78
                                echo "\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t\t\t\t  ";
                                // line 79
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                    // line 80
                                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo $this->getAttribute($context["childs_2"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["childs_2"], "name", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 82
                                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t  ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 84
                            echo "\t\t\t\t\t\t\t</li>\t\t\t
\t\t\t\t\t\t";
                        } else {
                            // line 86
                            echo "\t\t\t\t\t\t  <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
\t\t\t\t\t\t";
                        }
                        // line 88
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "\t\t\t";
            }
            // line 92
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t";
        if ((isset($context["blog_enable"]) ? $context["blog_enable"] : null)) {
            // line 95
            echo "\t\t\t\t<li> <a href=\"";
            echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
            echo "\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo " </a></li>       
\t\t";
        }
        // line 97
        echo "\t</ul>
</div>


</nav>  
</div>
";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 97,  295 => 95,  292 => 94,  285 => 92,  282 => 91,  275 => 89,  269 => 88,  261 => 86,  257 => 84,  250 => 82,  239 => 80,  235 => 79,  232 => 78,  228 => 77,  222 => 76,  219 => 75,  216 => 74,  212 => 73,  209 => 72,  204 => 71,  202 => 70,  195 => 69,  191 => 68,  186 => 66,  177 => 59,  172 => 56,  164 => 54,  161 => 53,  155 => 52,  147 => 50,  141 => 46,  133 => 43,  126 => 41,  118 => 39,  111 => 34,  104 => 32,  93 => 30,  89 => 29,  86 => 28,  82 => 27,  72 => 23,  70 => 22,  67 => 21,  63 => 20,  60 => 19,  56 => 18,  51 => 16,  43 => 14,  40 => 13,  36 => 12,  31 => 9,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <nav class="nav-container" role="navigation">*/
/* <div class="nav-inner">*/
/* <div class="container">*/
/* <!-- ======= Menu Code START ========= -->*/
/* {% if categories %}*/
/* <!-- Opencart 3 level Category Menu-->*/
/* <div id="menu" class="main-menu">*/
/* 	  {# <div class="nav-responsive"><span>Menu</span><div class="expandable"></div></div> #}*/
/*  */
/*       <ul class="nav navbar-nav">*/
/* 	  	*/
/*     	{% for category in categories %}*/
/*         {% if category.children %}*/
/* 			<li class="top_level dropdown"><a href="{{ category.href }}">{{ category.name }}</a>*/
/* */
/* 			<div class="dropdown-menu megamenu column{{ category.column }}">*/
/*             <div class="dropdown-inner">*/
/* 			  {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/* 				<ul class="list-unstyled childs_1">*/
/*                 {% for child in children %}*/
/* 					<!-- 2 Level Sub Categories START -->*/
/* 					{% if child.childs %}*/
/* 					  <li class="dropdown"><a href="{{ child.href }}">{{ child.name }}</a>*/
/* */
/* 						  <div class="dropdown-menu">*/
/* 			              <div class="dropdown-inner">*/
/* 			              {% for childs_col in child.childs|batch(child.childs|length / child.column|round(1, 'ceil')) %}*/
/* 							<ul class="list-unstyled childs_2">*/
/* 							  {% for childs_2 in childs_col %}*/
/* 								<li><a href="{{ childs_2.href }}">{{ childs_2.name }}</a></li>*/
/* 							  {% endfor %}*/
/* 							</ul>*/
/* 						  {% endfor %}*/
/* 						  </div>*/
/* 						  </div>*/
/* */
/* 					  </li>*/
/* 					{% else %}*/
/* 					  <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/* 					{% endif %}*/
/* 					<!-- 2 Level Sub Categories END -->*/
/*                 {% endfor %}*/
/*               */
/* 			    </ul>*/
/*               {% endfor %}*/
/*             </div>*/
/* 			</div>*/
/* 			</li>*/
/*         {% else %}*/
/* 			<li class="top_level"><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/* 		{% if blog_enable %}*/
/* 			<li class="top_level"> <a href="{{all_blogs}}">{{ text_blog }} </a></li>       */
/* 		{% endif %}*/
/*   </ul>  */
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* */
/* */
/* */
/* <!--  =============================================== Mobile menu start  =============================================  -->*/
/* <div id="res-menu" class="main-menu nav-container1 container">*/
/* 	<div class="nav-responsive"><span>{{ text_menu }}</span><div class="expandable"></div></div>*/
/*     <ul class="main-navigation">*/
/* 		{% for category in categories %}*/
/* 			<li class="top_level dropdown"><a href="{{ category.href }}">{{ category.name }}</a>*/
/* 			{% if category.children %}*/
/* 				{% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/* 				<ul>*/
/* 					{% for child in children %}*/
/* 						{% if child.childs %}*/
/* 							<li>*/
/* 								<a href="{{ child.href }}">{{ child.name }}</a>*/
/* 								{% for childs_col in child.childs|batch(child.childs|length / child.column|round(1, 'ceil')) %}*/
/* 									<ul class="list-unstyled childs_2">*/
/* 									  {% for childs_2 in childs_col %}*/
/* 										<li><a href="{{ childs_2.href }}">{{ childs_2.name }}</a></li>*/
/* 									  {% endfor %}*/
/* 									</ul>*/
/* 								  {% endfor %}*/
/* 							</li>			*/
/* 						{% else %}*/
/* 						  <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 		{% if blog_enable %}*/
/* 				<li> <a href="{{all_blogs}}">{{ text_blog }} </a></li>       */
/* 		{% endif %}*/
/* 	</ul>*/
/* </div>*/
/* */
/* */
/* </nav>  */
/* </div>*/
/* */
