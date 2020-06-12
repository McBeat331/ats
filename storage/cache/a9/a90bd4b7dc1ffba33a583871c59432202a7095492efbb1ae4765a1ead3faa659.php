<?php

/* extension/module/formcreator_list.twig */
class __TwigTemplate_6dcce934fa5f6f94e60f904ceb2cb91fb8c886a89bd08d008a5cd4b39454b15e extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t <div class=\"dropdown\" style=\"display: inline-block;\">
\t\t\t\t\t\t<button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"edit-module\" title=\"";
        // line 7
        echo (isset($context["text_setting_form"]) ? $context["text_setting_form"] : null);
        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"edit-module\">
\t\t\t\t\t\t\t";
        // line 12
        if ((isset($context["feedback_module_options"]) ? $context["feedback_module_options"] : null)) {
            // line 13
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["feedback_module_options"]) ? $context["feedback_module_options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module_edit"]) {
                // line 14
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["module_edit"], "module_url", array());
                echo "\">";
                echo $this->getAttribute($context["module_edit"], "module_name", array());
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module_edit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t\t\t\t ";
        } else {
            // line 17
            echo "\t\t\t\t\t\t\t\t<li class=\"text-danger\">";
            echo (isset($context["error_nomodule"]) ? $context["error_nomodule"] : null);
            echo "</li>
\t\t\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t 
\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 22
        echo (isset($context["add_module"]) ? $context["add_module"] : null);
        echo "\" form=\"form-account\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_create_form"]) ? $context["button_create_form"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t\t<a href=\"";
        // line 23
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 24
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["button_text_confirm"]) ? $context["button_text_confirm"] : null);
        echo "') ? \$('#form-list').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 26
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 29
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 35
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 36
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 40
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-list-ol\"></i> ";
        // line 42
        echo (isset($context["text_feedback_list"]) ? $context["text_feedback_list"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t<div class=\"well\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
        // line 49
        echo (isset($context["text_filter_name_form"]) ? $context["text_filter_name_form"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_name\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 51
        echo (isset($context["text_filter_all_form"]) ? $context["text_filter_all_form"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["module_names"]) ? $context["module_names"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["feedback_name"]) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["filter_name"]) ? $context["filter_name"] : null) == $this->getAttribute($context["feedback_name"], "module_name", array()))) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t\t\t <option value=\"";
                echo $this->getAttribute($context["feedback_name"], "module_name", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["feedback_name"], "module_name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t <option value=\"";
                echo $this->getAttribute($context["feedback_name"], "module_name", array());
                echo "\">";
                echo $this->getAttribute($context["feedback_name"], "module_name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 57
            echo " \t
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
        // line 64
        echo (isset($context["text_filter_text_form"]) ? $context["text_filter_text_form"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_text\" value=\"";
        // line 65
        echo (isset($context["filter_text"]) ? $context["filter_text"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_entry_text"]) ? $context["text_entry_text"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" autocomplete=\"off\"><ul class=\"dropdown-menu\"></ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"filter_noread\">";
        // line 70
        echo (isset($context["text_filter_status"]) ? $context["text_filter_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"filter_noread\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 72
        if (((isset($context["filter_noread"]) ? $context["filter_noread"] : null) == "noread")) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            echo (isset($context["text_filter_allstatus"]) ? $context["text_filter_allstatus"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"noread\" selected=\"selected\">";
            // line 74
            echo (isset($context["text_status_noread"]) ? $context["text_status_noread"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"read\">";
            // line 75
            echo (isset($context["text_status_read"]) ? $context["text_status_read"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } elseif ((        // line 76
(isset($context["filter_noread"]) ? $context["filter_noread"] : null) == "read")) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            echo (isset($context["text_filter_allstatus"]) ? $context["text_filter_allstatus"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t <option value=\"noread\">";
            // line 78
            echo (isset($context["text_status_noread"]) ? $context["text_status_noread"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"read\" selected=\"selected\">";
            // line 79
            echo (isset($context["text_status_read"]) ? $context["text_status_read"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">";
            echo (isset($context["text_filter_allstatus"]) ? $context["text_filter_allstatus"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t <option value=\"noread\">";
            // line 82
            echo (isset($context["text_status_noread"]) ? $context["text_status_noread"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"read\">";
            // line 83
            echo (isset($context["text_status_read"]) ? $context["text_status_read"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo " 
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i>";
        // line 90
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<form role=\"form\" action=\"";
        // line 95
        echo (isset($context["deleteFeedback"]) ? $context["deleteFeedback"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-list\" class=\"form-horizontal\">
\t\t\t\t<div>
\t\t\t\t ";
        // line 97
        if ((isset($context["feedbacks"]) ? $context["feedbacks"] : null)) {
            // line 98
            echo "\t\t\t\t <div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"></td>
\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\">
\t\t\t\t\t\t\t\t";
            // line 103
            if (((isset($context["sort"]) ? $context["sort"] : null) == "fedback_id")) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["sort_id"]) ? $context["sort_id"] : null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
                echo "\">ID</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["sort_id"]) ? $context["sort_id"] : null);
                echo "\">ID</a>
\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 110
            if (((isset($context["sort"]) ? $context["sort"] : null) == "date")) {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["sort_date"]) ? $context["sort_date"] : null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
                echo "\">";
                echo (isset($context["text_date"]) ? $context["text_date"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["sort_date"]) ? $context["sort_date"] : null);
                echo "\">";
                echo (isset($context["text_date"]) ? $context["text_date"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo " 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 117
            if (((isset($context["sort"]) ? $context["sort"] : null) == "module_name")) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
                echo "\">";
                echo (isset($context["text_name_form"]) ? $context["text_name_form"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
                echo "\">";
                echo (isset($context["text_name_form"]) ? $context["text_name_form"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 121
            echo " 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 123
            echo (isset($context["text_page_send"]) ? $context["text_page_send"] : null);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 124
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["feedbacks"]) ? $context["feedbacks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
                // line 129
                echo "\t\t\t\t\t\t\t\t <tr> 
\t\t\t\t\t\t\t\t\t <td><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 130
                echo $this->getAttribute($context["feedback"], "fedback_id", array());
                echo "\"></td>
\t\t\t\t\t\t\t\t\t <td>";
                // line 131
                echo $this->getAttribute($context["feedback"], "fedback_id", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t <td>";
                // line 132
                echo $this->getAttribute($context["feedback"], "date", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t <td>";
                // line 133
                echo $this->getAttribute($context["feedback"], "module_name", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t <td><a href=\"";
                // line 134
                echo $this->getAttribute($context["feedback"], "page_link", array());
                echo "\" target=\"_blank\">";
                echo (isset($context["text_page_link"]) ? $context["text_page_link"] : null);
                echo "</a></td>
\t\t\t\t\t\t\t\t\t <td>";
                // line 135
                echo $this->getAttribute($context["feedback"], "status", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t\t\t \t";
                // line 137
                if (($this->getAttribute($context["feedback"], "status", array()) == (isset($context["text_status_noread"]) ? $context["text_status_noread"] : null))) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t \t\t<button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" title=\"";
                    echo (isset($context["text_more"]) ? $context["text_more"] : null);
                    echo "\" data-target=\"#feedbackMore_";
                    echo $this->getAttribute($context["feedback"], "fedback_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" title=\"";
                    echo (isset($context["text_more"]) ? $context["text_more"] : null);
                    echo "\" data-target=\"#feedbackMore_";
                    echo $this->getAttribute($context["feedback"], "fedback_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 145
                echo " 
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t </tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t </table>
\t\t\t\t </div>
\t\t\t\t";
        } else {
            // line 153
            echo "\t\t\t\t\t<h2>";
            echo (isset($context["text_nomassage"]) ? $context["text_nomassage"] : null);
            echo "</h2>
\t\t\t\t";
        }
        // line 154
        echo " 
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 157
        if ((isset($context["feedbacks"]) ? $context["feedbacks"] : null)) {
            // line 158
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["feedbacks"]) ? $context["feedbacks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
                // line 159
                echo "\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"feedbackMore_";
                echo $this->getAttribute($context["feedback"], "fedback_id", array());
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"feedbackMoreLabel\">";
                // line 164
                echo $this->getAttribute($context["feedback"], "module_name", array());
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\">";
                // line 165
                echo (isset($context["text_massage_number"]) ? $context["text_massage_number"] : null);
                echo $this->getAttribute($context["feedback"], "fedback_id", array());
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t\t\t\t\t <form role=\"form\" action=\"";
                // line 169
                echo (isset($context["saveFeedback"]) ? $context["saveFeedback"] : null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-feedback";
                echo $this->getAttribute($context["feedback"], "fedback_id", array());
                echo "\" class=\"form-horizontal\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 173
                echo (isset($context["text_popup_value"]) ? $context["text_popup_value"] : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 174
                echo (isset($context["text_popup_data"]) ? $context["text_popup_data"] : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 177
                if ($this->getAttribute($context["feedback"], "feedback_array", array())) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feedback"], "feedback_array", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field_values"]) {
                        // line 179
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 180
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["field_values"]);
                        foreach ($context['_seq'] as $context["field_name"] => $context["field_value"]) {
                            // line 181
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["field_name"] != "required")) {
                                // line 182
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<td> ";
                                echo $context["field_name"];
                                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                // line 183
                                if (twig_test_iterable($context["field_value"])) {
                                    // line 184
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t<td> ";
                                    echo twig_join_filter($context["field_value"], ", ");
                                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 186
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<td> ";
                                    echo $context["field_value"];
                                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 188
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            }
                            // line 189
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 190
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_values'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 192
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 194
                echo (isset($context["text_popup_date"]) ? $context["text_popup_date"] : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 195
                echo $this->getAttribute($context["feedback"], "date", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 198
                echo (isset($context["text_page_send"]) ? $context["text_page_send"] : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 199
                echo $this->getAttribute($context["feedback"], "page_link", array());
                echo "\" target=\"_blank\">";
                echo (isset($context["text_page_link"]) ? $context["text_page_link"] : null);
                echo "</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 202
                echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"feedback_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 205
                if (($this->getAttribute($context["feedback"], "status", array()) == (isset($context["text_status_noread"]) ? $context["text_status_noread"] : null))) {
                    // line 206
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"noread\" selected=\"selected\">";
                    echo (isset($context["text_status_noread"]) ? $context["text_status_noread"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"read\">";
                    // line 207
                    echo (isset($context["text_status_read"]) ? $context["text_status_read"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"noread\">";
                    echo (isset($context["text_status_noread"]) ? $context["text_status_noread"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"read\" selected=\"selected\">";
                    // line 210
                    echo (isset($context["text_status_read"]) ? $context["text_status_read"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 211
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"feedback_id\" value=\"";
                // line 213
                echo $this->getAttribute($context["feedback"], "fedback_id", array());
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
                // line 222
                echo (isset($context["text_popup_close"]) ? $context["text_popup_close"] : null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#form-feedback";
                // line 223
                echo $this->getAttribute($context["feedback"], "fedback_id", array());
                echo "').submit();\" class=\"btn btn-primary\">";
                echo (isset($context["button_save"]) ? $context["button_save"] : null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "\t\t\t\t";
        }
        // line 230
        echo "\t\t\t\t <div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 231
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 232
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=extension/module/formcreator/getlist&user_token=";
        // line 240
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('select[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}
\t var filter_text = \$('input[name=\\'filter_text\\']').val();

\tif (filter_text) {
\t\turl += '&filter_text=' + encodeURIComponent(filter_text);
\t}
\tvar filter_noread = \$('select[name=\\'filter_noread\\']').val();

\tif (filter_noread) {
\t\turl += '&filter_noread=' + encodeURIComponent(filter_noread);
\t}

\tlocation = url;
});
\t</script>
";
        // line 261
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/formcreator_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 261,  650 => 240,  639 => 232,  635 => 231,  632 => 230,  629 => 229,  615 => 223,  611 => 222,  599 => 213,  595 => 211,  590 => 210,  585 => 209,  580 => 207,  575 => 206,  573 => 205,  567 => 202,  559 => 199,  555 => 198,  549 => 195,  545 => 194,  542 => 193,  539 => 192,  532 => 190,  526 => 189,  523 => 188,  517 => 186,  511 => 184,  509 => 183,  504 => 182,  501 => 181,  497 => 180,  494 => 179,  489 => 178,  487 => 177,  481 => 174,  477 => 173,  468 => 169,  460 => 165,  456 => 164,  447 => 159,  442 => 158,  440 => 157,  435 => 154,  429 => 153,  423 => 149,  414 => 145,  404 => 142,  394 => 138,  392 => 137,  387 => 135,  381 => 134,  377 => 133,  373 => 132,  369 => 131,  365 => 130,  362 => 129,  358 => 128,  351 => 124,  347 => 123,  343 => 121,  335 => 120,  325 => 118,  323 => 117,  318 => 114,  310 => 113,  300 => 111,  298 => 110,  294 => 108,  288 => 106,  280 => 104,  278 => 103,  271 => 98,  269 => 97,  264 => 95,  256 => 90,  248 => 84,  243 => 83,  239 => 82,  234 => 81,  229 => 79,  225 => 78,  220 => 77,  218 => 76,  214 => 75,  210 => 74,  205 => 73,  203 => 72,  198 => 70,  188 => 65,  184 => 64,  177 => 59,  170 => 57,  162 => 56,  154 => 54,  151 => 53,  147 => 52,  143 => 51,  138 => 49,  128 => 42,  124 => 40,  116 => 36,  114 => 35,  108 => 31,  97 => 29,  93 => 28,  88 => 26,  81 => 24,  75 => 23,  69 => 22,  64 => 19,  58 => 17,  55 => 16,  44 => 14,  39 => 13,  37 => 12,  29 => 7,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 			 <div class="dropdown" style="display: inline-block;">*/
/* 						<button class="btn btn-primary dropdown-toggle" type="button" id="edit-module" title="{{ text_setting_form }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/* 							<i class="fa fa-cogs"></i>*/
/* 							<span class="caret"></span>*/
/* 						</button>*/
/* 						<ul class="dropdown-menu" aria-labelledby="edit-module">*/
/* 							{% if feedback_module_options %}*/
/* 								{% for module_edit in feedback_module_options %}*/
/* 									<li><a href="{{ module_edit.module_url }}">{{ module_edit.module_name }}</a></li>*/
/* 								{% endfor %}*/
/* 							 {% else %}*/
/* 								<li class="text-danger">{{ error_nomodule }}</li>*/
/* 							{% endif %}*/
/* 						</ul>*/
/* 					 */
/* 				</div>*/
/* 				<a href="{{ add_module }}" form="form-account" data-toggle="tooltip" title="{{ button_create_form }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 				<button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ button_text_confirm }}') ? $('#form-list').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/* 			</div>*/
/* 			<h1>{{ heading_title }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error_warning %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-list-ol"></i> {{ text_feedback_list }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 			<div class="well">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-4">*/
/* 						<div class="form-group">*/
/* 								<label class="control-label" for="input-name">{{ text_filter_name_form }}</label>*/
/* 								<select class="form-control" name="filter_name">*/
/* 										<option value="">{{ text_filter_all_form }}</option>*/
/* 										{% for feedback_name in module_names %}*/
/* 											{% if filter_name == feedback_name.module_name%}*/
/* 												 <option value="{{ feedback_name.module_name}}" selected="selected">{{ feedback_name.module_name}}</option>*/
/* 											{% else %}*/
/* 												 <option value="{{ feedback_name.module_name}}">{{ feedback_name.module_name}}</option>*/
/* 											{% endif %} 	*/
/* 										{% endfor %}*/
/* 								</select> */
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-4">*/
/* 						<div class="form-group">*/
/* 								<label class="control-label" for="input-name">{{ text_filter_text_form }}</label>*/
/* 								<input type="text" name="filter_text" value="{{ filter_text }}" placeholder="{{ text_entry_text }}" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2">*/
/* 						<div class="form-group">*/
/* 								<label class="control-label" for="filter_noread">{{ text_filter_status }}</label>*/
/* 								<select name="filter_noread" class="form-control">*/
/* 									{% if filter_noread == 'noread' %}*/
/* 										<option value="">{{ text_filter_allstatus }}</option>*/
/* 										<option value="noread" selected="selected">{{ text_status_noread }}</option>*/
/* 										<option value="read">{{ text_status_read }}</option>*/
/* 									{% elseif  filter_noread == 'read' %}*/
/* 										<option value="">{{ text_filter_allstatus }}</option>*/
/* 										 <option value="noread">{{ text_status_noread }}</option>*/
/* 										<option value="read" selected="selected">{{ text_status_read }}</option>*/
/* 									{% else %}*/
/* 										<option value="" selected="selected">{{ text_filter_allstatus }}</option>*/
/* 										 <option value="noread">{{ text_status_noread }}</option>*/
/* 										<option value="read">{{ text_status_read }}</option>*/
/* 									{% endif %} */
/* 								</select>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2">*/
/* 							<div class="form-group">*/
/* 								<button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i>{{ button_filter }}</button>*/
/* 							</div>*/
/* 						</div>*/
/* 				</div>*/
/* 			</div>*/
/* 				<form role="form" action="{{ deleteFeedback }}" method="post" enctype="multipart/form-data" id="form-list" class="form-horizontal">*/
/* 				<div>*/
/* 				 {% if feedbacks %}*/
/* 				 <div class="table-responsive">*/
/* 					<table class="table table-striped table-bordered table-hover">*/
/* 						<thead>*/
/* 							<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>*/
/* 							<td style="width: 1px;" class="text-center">*/
/* 								{% if sort == 'fedback_id' %}*/
/* 										<a href="{{ sort_id }}" class="{{ order|lower }}">ID</a>*/
/* 								{% else %}*/
/* 										<a href="{{ sort_id }}">ID</a>*/
/* 								{% endif %}*/
/* 							</td>*/
/* 							<td>*/
/* 								{% if sort == 'date' %}*/
/* 										<a href="{{ sort_date }}" class="{{ order|lower }}">{{ text_date }}</a>*/
/* 								{% else %}*/
/* 										<a href="{{ sort_date }}">{{ text_date }}</a>*/
/* 								{% endif %} */
/* 							</td>*/
/* 							<td>*/
/* 								{% if sort == 'module_name' %}*/
/* 										<a href="{{ sort_name }}" class="{{ order|lower }}">{{ text_name_form }}</a>*/
/* 								{% else %}*/
/* 										<a href="{{ sort_name }}">{{ text_name_form }}</a>*/
/* 								{% endif %} */
/* 							</td>*/
/* 							<td>{{ text_page_send }}</td>*/
/* 							<td>{{ entry_status }}</td>*/
/* 							<td></td>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 								{% for feedback in feedbacks %}*/
/* 								 <tr> */
/* 									 <td><input type="checkbox" name="selected[]" value="{{ feedback.fedback_id}}"></td>*/
/* 									 <td>{{ feedback.fedback_id}}</td>*/
/* 									 <td>{{ feedback.date}}</td>*/
/* 									 <td>{{ feedback.module_name}}</td>*/
/* 									 <td><a href="{{ feedback.page_link}}" target="_blank">{{ text_page_link }}</a></td>*/
/* 									 <td>{{ feedback.status}}</td>*/
/* 									 <td>*/
/* 									 	{% if feedback.status == text_status_noread %}*/
/* 									 		<button type="button" class="btn btn-warning" data-toggle="modal" title="{{ text_more }}" data-target="#feedbackMore_{{ feedback.fedback_id}}">*/
/* 												<i class="fa fa-eye"></i>*/
/* 												</button>*/
/* 										{% else %}*/
/* 											<button type="button" class="btn btn-success" data-toggle="modal" title="{{ text_more }}" data-target="#feedbackMore_{{ feedback.fedback_id}}">*/
/* 												<i class="fa fa-eye"></i>*/
/* 											</button>*/
/* 										{% endif %} */
/* 									</td>*/
/* 								 </tr>*/
/* 								{% endfor %}*/
/* 						</tbody>*/
/* 					 </table>*/
/* 				 </div>*/
/* 				{% else %}*/
/* 					<h2>{{ text_nomassage }}</h2>*/
/* 				{% endif %} */
/* 				</div>*/
/* 			</form>*/
/* 			{% if feedbacks %}*/
/* 					{% for feedback in feedbacks %}*/
/* 								<div class="modal fade" id="feedbackMore_{{ feedback.fedback_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/* 									<div class="modal-dialog" role="document">*/
/* 										<div class="modal-content">*/
/* 											<div class="modal-header">*/
/* 												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 												<h4 class="modal-title" id="feedbackMoreLabel">{{ feedback.module_name}}</h4>*/
/* 												<h5 class="modal-title">{{ text_massage_number }}{{ feedback.fedback_id}}</h5>*/
/* 											</div>*/
/* 											<div class="modal-body">*/
/* */
/* 											 <form role="form" action="{{ saveFeedback }}" method="post" enctype="multipart/form-data" id="form-feedback{{ feedback.fedback_id}}" class="form-horizontal"> */
/* 												<div class="table-responsive">*/
/* 													<table class="table table-striped table-bordered">*/
/* 														<thead>*/
/* 															<td>{{ text_popup_value }}</td>*/
/* 															<td>{{ text_popup_data }}</td>*/
/* 														</thead>*/
/* 														<tbody>*/
/* 															{% if feedback.feedback_array %}*/
/* 																{% for field_values in feedback.feedback_array %}*/
/* 																	<tr>*/
/* 																		{% for field_name, field_value in field_values %}*/
/* 																			{% if field_name != 'required' %}*/
/* 																			 	<td> {{ field_name }}</td>*/
/* 																			 	{% if field_value is iterable %}*/
/* 																			 		<td> {{ field_value|join(', ') }} </td>*/
/* 																				{% else %}*/
/* 																				 	<td> {{ field_value }} </td>*/
/* 																				{% endif %}*/
/* 																		 	{% endif %}*/
/* 																		{% endfor %}*/
/* 																	</tr>*/
/* 																{% endfor %}*/
/* 															{% endif %}*/
/* 																<tr>*/
/* 																	<td>{{ text_popup_date}}</td>*/
/* 																	<td>{{ feedback.date}}</td>*/
/* 																</tr>*/
/* 																<tr>*/
/* 																	<td>{{ text_page_send }}</td>*/
/* 																	<td><a href="{{ feedback.page_link}}" target="_blank">{{ text_page_link }}</a></td>*/
/* 																</tr>*/
/* 																<tr>*/
/* 																	<td>{{ entry_status }}</td>*/
/* 																	<td>*/
/* 																		<select name="feedback_status" class="form-control">*/
/* 																			{% if feedback.status == text_status_noread %}*/
/* 																				<option value="noread" selected="selected">{{ text_status_noread }}</option>*/
/* 																				<option value="read">{{ text_status_read }}</option>*/
/* 																			{% else %}*/
/* 																				<option value="noread">{{ text_status_noread }}</option>*/
/* 																				<option value="read" selected="selected">{{ text_status_read }}</option>*/
/* 																			{% endif %} */
/* 																		</select>*/
/* 																		<input type="hidden" name="feedback_id" value="{{ feedback.fedback_id}}"/>*/
/* 																	</td>*/
/* 																</tr>*/
/* 														</tbody>*/
/* 													</table>*/
/* 												</div>*/
/* 												</form>*/
/* 											</div>*/
/* 											<div class="modal-footer">*/
/* 												<button type="button" class="btn btn-default" data-dismiss="modal">{{ text_popup_close }}</button>*/
/* 												<button type="button" onclick="$('#form-feedback{{ feedback.fedback_id}}').submit();" class="btn btn-primary">{{ button_save }}</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 				 <div class="row">*/
/* 					<div class="col-sm-6 text-left">{{ pagination }}</div>*/
/* 					<div class="col-sm-6 text-right">{{ results }}</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = 'index.php?route=extension/module/formcreator/getlist&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('select[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* 	 var filter_text = $('input[name=\'filter_text\']').val();*/
/* */
/* 	if (filter_text) {*/
/* 		url += '&filter_text=' + encodeURIComponent(filter_text);*/
/* 	}*/
/* 	var filter_noread = $('select[name=\'filter_noread\']').val();*/
/* */
/* 	if (filter_noread) {*/
/* 		url += '&filter_noread=' + encodeURIComponent(filter_noread);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* 	</script>*/
/* {{ footer }}*/
