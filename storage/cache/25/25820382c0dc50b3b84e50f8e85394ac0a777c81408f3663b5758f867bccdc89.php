<?php

/* ToolsShop/template/extension/module/filter.twig */
class __TwigTemplate_e23286fdea2be0ab2d1324c1ed83531a141a3aa9cdd4cb1653cd71e22f26f8f1 extends Twig_Template
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
        echo "<div class=\"box sidebarFilter\">
\t<div class=\"box-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
\t<div class=\"filterbox\">
\t\t<div class=\"list-group-filter\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " 
\t\t\t<a class=\"list-group-item group-name\">";
            // line 6
            echo $this->getAttribute($context["filter_group"], "name", array());
            echo "</a>
\t\t\t<div class=\"list-group-item\">
\t\t\t  \t<div id=\"filter-group";
            // line 8
            echo $this->getAttribute($context["filter_group"], "filter_group_id", array());
            echo "\">
\t\t\t  \t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["filter_group"], "filter", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 10
                echo "\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label>
\t\t\t\t\t\t";
                // line 12
                if (twig_in_filter($this->getAttribute($context["filter"], "filter_id", array()), (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                    // line 13
                    echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo $this->getAttribute($context["filter"], "filter_id", array());
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t";
                    // line 14
                    echo $this->getAttribute($context["filter"], "name", array());
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo $this->getAttribute($context["filter"], "filter_id", array());
                    echo "\" />
\t\t\t\t\t\t";
                    // line 17
                    echo $this->getAttribute($context["filter"], "name", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</div>
\t\t<div class=\"panel-footer text-right\">
\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 27
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tfilter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});

\tlocation = '";
        // line 39
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "&filter=' + filter.join(',');
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 39,  93 => 27,  89 => 25,  81 => 22,  73 => 19,  68 => 17,  63 => 16,  58 => 14,  53 => 13,  51 => 12,  47 => 10,  43 => 9,  39 => 8,  34 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="box sidebarFilter">*/
/* 	<div class="box-heading">{{ heading_title }}</div>*/
/* 	<div class="filterbox">*/
/* 		<div class="list-group-filter">*/
/* 			{% for filter_group in filter_groups %} */
/* 			<a class="list-group-item group-name">{{ filter_group.name }}</a>*/
/* 			<div class="list-group-item">*/
/* 			  	<div id="filter-group{{ filter_group.filter_group_id }}">*/
/* 			  	{% for filter in filter_group.filter %}*/
/* 				<div class="checkbox">*/
/* 					<label>*/
/* 						{% if filter.filter_id in filter_category %}*/
/* 						<input type="checkbox" name="filter[]" value="{{ filter.filter_id }}" checked="checked" />*/
/* 						{{ filter.name }}*/
/* 						{% else %}*/
/* 						<input type="checkbox" name="filter[]" value="{{ filter.filter_id }}" />*/
/* 						{{ filter.name }}*/
/* 						{% endif %}*/
/* 					</label>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 		<div class="panel-footer text-right">*/
/* 			<button type="button" id="button-filter" class="btn btn-primary">{{ button_filter }}</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	filter = [];*/
/* */
/* 	$('input[name^=\'filter\']:checked').each(function(element) {*/
/* 		filter.push(this.value);*/
/* 	});*/
/* */
/* 	location = '{{ action }}&filter=' + filter.join(',');*/
/* });*/
/* //--></script>*/
/* */
