<?php

/* ToolsShop/template/common/search.twig */
class __TwigTemplate_a20912495aa0371a10267eece065d54e33d8d44f15ee460414a7a57af9d9faae extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
\t<span class=\"search_button\"></span>
\t<div class=\"search_toggle\">
\t\t<div id=\"searchbox\">
\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 5
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
\t\t\t<span class=\"input-group-btn\">
\t\t\t<button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i></button>
\t\t\t</span>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/* 	<span class="search_button"></span>*/
/* 	<div class="search_toggle">*/
/* 		<div id="searchbox">*/
/* 			<input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/* 			<span class="input-group-btn">*/
/* 			<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>*/
/* 			</span>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
