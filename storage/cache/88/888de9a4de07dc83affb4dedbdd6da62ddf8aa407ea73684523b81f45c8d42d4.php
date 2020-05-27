<?php

/* extension/module/blogger/form.twig */
class __TwigTemplate_4462ba6db4ac6d9149955e76f63bcc93b50faa0a0ad8e2e3f437bb1383c557c6 extends Twig_Template
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
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 19
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo " 

    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 29
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                <li><a href=\"#language";
            // line 38
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  
              </ul>
              <div class=\"tab-content\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                <div class=\"tab-pane\" id=\"language";
            // line 43
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 45
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"blogger_description[";
            // line 47
            echo $this->getAttribute($context["language"], "language_id", array());
            echo " ][title]\" value=\"";
            echo (($this->getAttribute((isset($context["blogger_description"]) ? $context["blogger_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["blogger_description"]) ? $context["blogger_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\" id=\"input-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 48
            if ($this->getAttribute($this->getAttribute((isset($context["error_title"]) ? $context["error_title"] : null), "language", array()), "language_id", array())) {
                echo " 
                      <div class=\"text-danger\">";
                // line 49
                echo $this->getAttribute($this->getAttribute((isset($context["error_title"]) ? $context["error_title"] : null), "language", array()), "language_id", array());
                echo "</div>
                      ";
            }
            // line 50
            echo " 
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 54
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"blogger_description[";
            // line 56
            echo $this->getAttribute($context["language"], "language_id", array());
            echo " ][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["blogger_description"]) ? $context["blogger_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["blogger_description"]) ? $context["blogger_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "  </textarea>
                      ";
            // line 57
            if ($this->getAttribute($this->getAttribute((isset($context["error_description"]) ? $context["error_description"] : null), "language", array()), "language_id", array())) {
                echo " 
                      <div class=\"text-danger\">";
                // line 58
                echo $this->getAttribute($this->getAttribute((isset($context["error_description"]) ? $context["error_description"] : null), "language", array()), "language_id", array());
                echo "</div>
                      ";
            }
            // line 59
            echo " 
                    </div>
                  </div>
\t\t\t\t  </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo " 
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 68
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 71
        if ((isset($context["status"]) ? $context["status"] : null)) {
            echo " 
                    <option value=\"1\" selected=\"selected\">";
            // line 72
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 73
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                     ";
        } else {
            // line 74
            echo "   
                    <option value=\"1\">";
            // line 75
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 76
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 77
        echo " 
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 82
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 83
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 84
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-module\">";
        // line 88
        echo (isset($context["entry_module"]) ? $context["entry_module"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_id\" id=\"input-module\" class=\"form-control\">
                    <option value=\"\">";
        // line 91
        echo (isset($context["text_unallocated"]) ? $context["text_unallocated"] : null);
        echo "</option>
                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogger_modules"]) ? $context["blogger_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            echo " 
                    <optgroup label=\"";
            // line 93
            echo $this->getAttribute($context["module"], "name", array());
            echo "\">
                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "module", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " 
                    ";
                // line 95
                if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["module_id"]) ? $context["module_id"] : null))) {
                    echo " 
                    <option value=\"";
                    // line 96
                    echo $this->getAttribute($context["module"], "module_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                     ";
                } else {
                    // line 97
                    echo "   
                    <option value=\"";
                    // line 98
                    echo $this->getAttribute($context["module"], "module_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                    ";
                }
                // line 99
                echo " 
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo " 
                    </optgroup>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "  
                  </select>
                  ";
        // line 104
        if ((isset($context["error_module"]) ? $context["error_module"] : null)) {
            echo " 
                  <div class=\"text-danger\">";
            // line 105
            echo (isset($context["error_module"]) ? $context["error_module"] : null);
            echo "</div>
                  ";
        }
        // line 106
        echo " 
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>  
<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
";
        // line 130
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/blogger/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 130,  351 => 106,  346 => 105,  342 => 104,  338 => 102,  330 => 100,  323 => 99,  316 => 98,  313 => 97,  306 => 96,  302 => 95,  296 => 94,  292 => 93,  286 => 92,  282 => 91,  276 => 88,  269 => 84,  263 => 83,  259 => 82,  252 => 77,  247 => 76,  243 => 75,  240 => 74,  235 => 73,  231 => 72,  227 => 71,  221 => 68,  214 => 63,  204 => 59,  199 => 58,  195 => 57,  185 => 56,  178 => 54,  172 => 50,  167 => 49,  163 => 48,  153 => 47,  146 => 45,  141 => 43,  135 => 42,  130 => 39,  114 => 38,  108 => 37,  100 => 32,  96 => 31,  91 => 29,  85 => 26,  79 => 22,  72 => 19,  68 => 18,  60 => 12,  50 => 11,  44 => 10,  39 => 8,  33 => 7,  29 => 6,  19 => 1,);
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
/*   </div>  */
/*    <div class="container-fluid">*/
/*      {% if error_warning %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/* */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-blogger" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %} */
/*                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                   {% endfor %}  */
/*               </ul>*/
/*               <div class="tab-content">*/
/*                 {% for language in languages %} */
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-title{{ language.language_id }}">{{ entry_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="blogger_description[{{ language.language_id }} ][title]" value="{{ blogger_description[language.language_id] ? blogger_description[language.language_id].title : '' }}" placeholder="{{ entry_title }}" id="input-title{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_title.language.language_id %} */
/*                       <div class="text-danger">{{ error_title.language.language_id }}</div>*/
/*                       {% endif %} */
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="blogger_description[{{ language.language_id }} ][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" class="form-control">{{ blogger_description[language.language_id] ? blogger_description[language.language_id].description }}  </textarea>*/
/*                       {% if error_description.language.language_id %} */
/*                       <div class="text-danger">{{ error_description.language.language_id }}</div>*/
/*                       {% endif %} */
/*                     </div>*/
/*                   </div>*/
/* 				  </div>*/
/*                  {% endfor %} */
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     {% if status %} */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                      {% else %}   */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %} */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="image" value="{{ image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-module">{{ entry_module }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="module_id" id="input-module" class="form-control">*/
/*                     <option value="">{{ text_unallocated }}</option>*/
/*                     {% for module in blogger_modules %} */
/*                     <optgroup label="{{ module.name }}">*/
/*                     {% for module in module.module %} */
/*                     {% if module.module_id == module_id %} */
/*                     <option value="{{ module.module_id }}" selected="selected">{{ module.name }}</option>*/
/*                      {% else %}   */
/*                     <option value="{{ module.module_id }}">{{ module.name }}</option>*/
/*                     {% endif %} */
/*                      {% endfor %} */
/*                     </optgroup>*/
/*                     {% endfor %}  */
/*                   </select>*/
/*                   {% if error_module %} */
/*                   <div class="text-danger">{{ error_module }}</div>*/
/*                   {% endif %} */
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/* <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/* <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/* <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/* */
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>  */
/* <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* //--></script>*/
/* {{ footer }} */
