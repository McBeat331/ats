<?php

/* extension/module/blogger.twig */
class __TwigTemplate_1ae6271ae2e4c574d69014aedcc76651c0898d19326fc8d2122154eafdea9d62 extends Twig_Template
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
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-blogger\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
       <li><a href=\"";
            // line 11
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  
         
      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
     ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo " 

 ";
        // line 25
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 26
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo " 


    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 32
        echo (isset($context["text_view_list"]) ? $context["text_view_list"] : null);
        echo " 
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>

   
      <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 39
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 42
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\" class=\"form-horizontal\">
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 43
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\" />
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 45
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 47
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 48
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 49
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 50
        echo " 
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 54
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 57
        if ((isset($context["status"]) ? $context["status"] : null)) {
            echo " 
                <option value=\"1\" selected=\"selected\">";
            // line 58
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 59
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                 ";
        } else {
            // line 60
            echo "   
                <option value=\"1\">";
            // line 61
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 62
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 63
        echo " 
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-width\"><span data-toggle=\"tooltip\" title=\"";
        // line 68
        echo (isset($context["help_image"]) ? $context["help_image"] : null);
        echo "\">";
        echo (isset($context["entry_image_size"]) ? $context["entry_image_size"] : null);
        echo "</span></label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 70
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 71
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 72
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
              ";
        }
        // line 73
        echo " 
            </div>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 76
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 77
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 78
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
              ";
        }
        // line 79
        echo " 
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 83
        echo (isset($context["help_limit"]) ? $context["help_limit"] : null);
        echo "\">";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 85
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-char-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 89
        echo (isset($context["help_char_limit"]) ? $context["help_char_limit"] : null);
        echo "\">";
        echo (isset($context["entry_char_limit"]) ? $context["entry_char_limit"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"char_limit\" value=\"";
        // line 91
        echo (isset($context["char_limit"]) ? $context["char_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_char_limit"]) ? $context["entry_char_limit"] : null);
        echo "\" id=\"input-char-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 95
        echo (isset($context["help_allow_comments"]) ? $context["help_allow_comments"] : null);
        echo "\">";
        echo (isset($context["entry_allow_comments"]) ? $context["entry_allow_comments"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 98
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            echo " 
                <input type=\"radio\" name=\"comments\" value=\"1\" checked=\"checked\" />
                ";
            // line 100
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " 
                 ";
        } else {
            // line 101
            echo "   
                <input type=\"radio\" name=\"comments\" value=\"1\" />
                ";
            // line 103
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " 
                ";
        }
        // line 104
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 107
        if ( !(isset($context["comments"]) ? $context["comments"] : null)) {
            echo " 
                <input type=\"radio\" name=\"comments\" value=\"0\" checked=\"checked\" />
                ";
            // line 109
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " 
                 ";
        } else {
            // line 110
            echo "   
                <input type=\"radio\" name=\"comments\" value=\"0\" />
                ";
            // line 112
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " 
                ";
        }
        // line 113
        echo " 
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 118
        echo (isset($context["help_login_required"]) ? $context["help_login_required"] : null);
        echo "\">";
        echo (isset($context["entry_login_required"]) ? $context["entry_login_required"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 121
        if ((isset($context["login"]) ? $context["login"] : null)) {
            echo " 
                <input type=\"radio\" name=\"login\" value=\"1\" checked=\"checked\" />
                ";
            // line 123
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " 
                 ";
        } else {
            // line 124
            echo "   
                <input type=\"radio\" name=\"login\" value=\"1\" />
                ";
            // line 126
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " 
                ";
        }
        // line 127
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 130
        if ( !(isset($context["login"]) ? $context["login"] : null)) {
            echo " 
                <input type=\"radio\" name=\"login\" value=\"0\" checked=\"checked\" />
                ";
            // line 132
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " 
                 ";
        } else {
            // line 133
            echo "   
                <input type=\"radio\" name=\"login\" value=\"0\" />
                ";
            // line 135
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " 
                ";
        }
        // line 136
        echo " 
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 141
        echo (isset($context["help_auto_approve"]) ? $context["help_auto_approve"] : null);
        echo "\">";
        echo (isset($context["entry_auto_approve"]) ? $context["entry_auto_approve"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 144
        if ((isset($context["auto_approve"]) ? $context["auto_approve"] : null)) {
            echo " 
                <input type=\"radio\" name=\"auto_approve\" value=\"1\" checked=\"checked\" />
                ";
            // line 146
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " 
                 ";
        } else {
            // line 147
            echo "   
                <input type=\"radio\" name=\"auto_approve\" value=\"1\" />
                ";
            // line 149
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " 
                ";
        }
        // line 150
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 153
        if ( !(isset($context["auto_approve"]) ? $context["auto_approve"] : null)) {
            echo " 
                <input type=\"radio\" name=\"auto_approve\" value=\"0\" checked=\"checked\" />
                ";
            // line 155
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " 
                 ";
        } else {
            // line 156
            echo "   
                <input type=\"radio\" name=\"auto_approve\" value=\"0\" />
                ";
            // line 158
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " 
                ";
        }
        // line 159
        echo " 
              </label>
            </div>
          </div>
          <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 166
        echo (isset($context["column_title"]) ? $context["column_title"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 167
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 168
        echo (isset($context["column_comments"]) ? $context["column_comments"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 169
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 170
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            ";
        // line 173
        if ((isset($context["blogger_entries"]) ? $context["blogger_entries"] : null)) {
            echo " 
            <tbody>
              ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blogger_entries"]) ? $context["blogger_entries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                echo " 
              <tr>
                <td class=\"text-left\">";
                // line 177
                echo $this->getAttribute($context["entry"], "title", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 178
                echo $this->getAttribute($context["entry"], "status", array());
                echo "</td>
                <td class=\"text-right\">";
                // line 179
                echo $this->getAttribute($context["entry"], "total_comments", array());
                echo "</td>
                <td class=\"text-right\">";
                // line 180
                echo $this->getAttribute($context["entry"], "date_added", array());
                echo "</td>
                <td class=\"text-right\">

                  <a onclick=\"confirm('";
                // line 183
                echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
                echo " ') ? location.href='";
                echo $this->getAttribute($context["entry"], "delete", array());
                echo " ' : false;\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                  <a href=\"";
                // line 184
                echo $this->getAttribute($context["entry"], "comments", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_comments"]) ? $context["button_comments"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                  <a href=\"";
                // line 185
                echo $this->getAttribute($context["entry"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  </td>
              </tr>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "  
            </tbody>
               ";
        }
        // line 190
        echo " 
            <tfoot>
              ";
        // line 192
        if ((isset($context["add_blog"]) ? $context["add_blog"] : null)) {
            echo " 
              <tr>
                <td class=\"text-right\" colspan=\"5\"><button type=\"button\" onclick=\"location = '";
            // line 194
            echo (isset($context["add_blog"]) ? $context["add_blog"] : null);
            echo " ';\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_add_blog"]) ? $context["button_add_blog"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
               ";
        } else {
            // line 196
            echo "   
              <tr>
                <td class=\"text-center\" colspan=\"5\">";
            // line 198
            echo (isset($context["text_save_module"]) ? $context["text_save_module"] : null);
            echo "</td>
              </tr>
              ";
        }
        // line 200
        echo " 
            </tfoot>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 208
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 208,  555 => 200,  549 => 198,  545 => 196,  537 => 194,  532 => 192,  528 => 190,  523 => 188,  511 => 185,  505 => 184,  497 => 183,  491 => 180,  487 => 179,  483 => 178,  479 => 177,  472 => 175,  467 => 173,  461 => 170,  457 => 169,  453 => 168,  449 => 167,  445 => 166,  436 => 159,  431 => 158,  427 => 156,  422 => 155,  417 => 153,  412 => 150,  407 => 149,  403 => 147,  398 => 146,  393 => 144,  385 => 141,  378 => 136,  373 => 135,  369 => 133,  364 => 132,  359 => 130,  354 => 127,  349 => 126,  345 => 124,  340 => 123,  335 => 121,  327 => 118,  320 => 113,  315 => 112,  311 => 110,  306 => 109,  301 => 107,  296 => 104,  291 => 103,  287 => 101,  282 => 100,  277 => 98,  269 => 95,  260 => 91,  253 => 89,  244 => 85,  237 => 83,  231 => 79,  226 => 78,  222 => 77,  216 => 76,  211 => 73,  206 => 72,  202 => 71,  196 => 70,  189 => 68,  182 => 63,  177 => 62,  173 => 61,  170 => 60,  165 => 59,  161 => 58,  157 => 57,  151 => 54,  145 => 50,  140 => 49,  136 => 48,  130 => 47,  125 => 45,  120 => 43,  116 => 42,  110 => 39,  100 => 32,  95 => 29,  88 => 26,  84 => 25,  80 => 23,  73 => 20,  69 => 19,  60 => 12,  50 => 11,  44 => 10,  39 => 8,  33 => 7,  29 => 6,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }} */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-blogger" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %} */
/*        <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*  {% endfor %}  */
/*          */
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="container-fluid">*/
/*      {% if error_warning %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/* */
/*  {% if success %} */
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/* */
/* */
/*     <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_view_list }} */
/*      <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/* */
/*    */
/*       <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-blogger" class="form-horizontal">*/
/*           <input type="hidden" name="module_id" value="{{ module_id }}" />*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-8">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %} */
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %} */
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-8">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %} */
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                  {% else %}   */
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %} */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-width"><span data-toggle="tooltip" title="{{ help_image }}">{{ entry_image_size }}</span></label>*/
/*             <div class="col-sm-4">*/
/*               <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*               {% if error_width %} */
/*               <div class="text-danger">{{ error_width }}</div>*/
/*               {% endif %} */
/*             </div>*/
/*             <div class="col-sm-4">*/
/*               <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*               {% if error_height %} */
/*               <div class="text-danger">{{ error_height }}</div>*/
/*               {% endif %} */
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-limit"><span data-toggle="tooltip" title="{{ help_limit }}">{{ entry_limit }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <input type="text" name="limit" value="{{ limit }}" placeholder="{{ entry_limit }}" id="input-limit" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-char-limit"><span data-toggle="tooltip" title="{{ help_char_limit }}">{{ entry_char_limit }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <input type="text" name="char_limit" value="{{ char_limit }}" placeholder="{{ entry_char_limit }}" id="input-char-limit" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ help_allow_comments }}">{{ entry_allow_comments }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <label class="radio-inline">*/
/*                 {% if comments %} */
/*                 <input type="radio" name="comments" value="1" checked="checked" />*/
/*                 {{ text_yes }} */
/*                  {% else %}   */
/*                 <input type="radio" name="comments" value="1" />*/
/*                 {{ text_yes }} */
/*                 {% endif %} */
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not comments %} */
/*                 <input type="radio" name="comments" value="0" checked="checked" />*/
/*                 {{ text_no }} */
/*                  {% else %}   */
/*                 <input type="radio" name="comments" value="0" />*/
/*                 {{ text_no }} */
/*                 {% endif %} */
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ help_login_required }}">{{ entry_login_required }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <label class="radio-inline">*/
/*                 {% if login %} */
/*                 <input type="radio" name="login" value="1" checked="checked" />*/
/*                 {{ text_yes }} */
/*                  {% else %}   */
/*                 <input type="radio" name="login" value="1" />*/
/*                 {{ text_yes }} */
/*                 {% endif %} */
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not login %} */
/*                 <input type="radio" name="login" value="0" checked="checked" />*/
/*                 {{ text_no }} */
/*                  {% else %}   */
/*                 <input type="radio" name="login" value="0" />*/
/*                 {{ text_no }} */
/*                 {% endif %} */
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ help_auto_approve }}">{{ entry_auto_approve }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <label class="radio-inline">*/
/*                 {% if auto_approve %} */
/*                 <input type="radio" name="auto_approve" value="1" checked="checked" />*/
/*                 {{ text_yes }} */
/*                  {% else %}   */
/*                 <input type="radio" name="auto_approve" value="1" />*/
/*                 {{ text_yes }} */
/*                 {% endif %} */
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not auto_approve %} */
/*                 <input type="radio" name="auto_approve" value="0" checked="checked" />*/
/*                 {{ text_no }} */
/*                  {% else %}   */
/*                 <input type="radio" name="auto_approve" value="0" />*/
/*                 {{ text_no }} */
/*                 {% endif %} */
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <table class="table table-striped table-bordered table-hover">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">{{ column_title }}</td>*/
/*                 <td class="text-left">{{ column_status }}</td>*/
/*                 <td class="text-right">{{ column_comments }}</td>*/
/*                 <td class="text-right">{{ column_date_added }}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             {% if blogger_entries %} */
/*             <tbody>*/
/*               {% for entry in blogger_entries %} */
/*               <tr>*/
/*                 <td class="text-left">{{ entry.title }}</td>*/
/*                 <td class="text-left">{{ entry.status }}</td>*/
/*                 <td class="text-right">{{ entry.total_comments }}</td>*/
/*                 <td class="text-right">{{ entry.date_added }}</td>*/
/*                 <td class="text-right">*/
/* */
/*                   <a onclick="confirm('{{ text_confirm }} ') ? location.href='{{ entry.delete }} ' : false;" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                   <a href="{{ entry.comments }}" data-toggle="tooltip" title="{{ button_comments }}" class="btn btn-info"><i class="fa fa-eye"></i></a>*/
/*                   <a href="{{ entry.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                   </td>*/
/*               </tr>*/
/*              {% endfor %}  */
/*             </tbody>*/
/*                {% endif %} */
/*             <tfoot>*/
/*               {% if add_blog %} */
/*               <tr>*/
/*                 <td class="text-right" colspan="5"><button type="button" onclick="location = '{{ add_blog }} ';" data-toggle="tooltip" title="{{ button_add_blog }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*               </tr>*/
/*                {% else %}   */
/*               <tr>*/
/*                 <td class="text-center" colspan="5">{{ text_save_module }}</td>*/
/*               </tr>*/
/*               {% endif %} */
/*             </tfoot>*/
/*           </table>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
