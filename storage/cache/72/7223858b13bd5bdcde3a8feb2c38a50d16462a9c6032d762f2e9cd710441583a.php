<?php

/* default/template/extension/module/formcreator_modal.twig */
class __TwigTemplate_f49e8fe91e1d010a832f7155ea0e561dd07b9218488528c9439f9e3d877681fa extends Twig_Template
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
        echo "<button type=\"button\" class=\"btn btn-primary\" id=\"feedbackButton";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\" data-toggle=\"modal\" data-target=\"#feedbackModal";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\">
  ";
        // line 2
        echo (isset($context["button_name"]) ? $context["button_name"] : null);
        echo "
</button>
<div class=\"modal fade\" id=\"feedbackModal";
        // line 4
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"feedbackModalLabel";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content col-md-12\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h3 class=\"modal-title\" id=\"feedbackModalLabel";
        // line 9
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\">";
        echo (isset($context["module_name"]) ? $context["module_name"] : null);
        echo "</h3>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" data-toggle=\"validator\" enctype=\"multipart/form-data\" id=\"form-formcreator";
        // line 12
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\">
          ";
        // line 13
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 14
            echo "          ";
            $context["k"] = 0;
            // line 15
            echo "          ";
            $context["field_row"] = 0;
            // line 16
            echo "             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 17
                echo "             ";
                $context["field_row"] = ((isset($context["field_row"]) ? $context["field_row"] : null) + 1);
                // line 18
                echo "               ";
                if ((($this->getAttribute($context["field"], "type", array()) == "input") && $this->getAttribute($context["field"], "field_status", array()))) {
                    // line 19
                    echo "                 ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        // line 20
                        echo "                    <div class=\"form-group required\">
                      <label class=\"control-label\" for=\"formInput";
                        // line 21
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                      <input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 22
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "]\" id=\"formInput";
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\">
                      <div class=\"help-block with-errors\"></div>
                      <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 24
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][required]\" value=\"input\">
                    </div>
                  ";
                    } else {
                        // line 27
                        echo "                    <div class=\"form-group\">
                      <label for=\"formInput";
                        // line 28
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                      <input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 29
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "]\" id=\"formInput";
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\">
                    </div>
                   ";
                    }
                    // line 32
                    echo "               ";
                } elseif ((($this->getAttribute($context["field"], "type", array()) == "textarea") && $this->getAttribute($context["field"], "field_status", array()))) {
                    // line 33
                    echo "                    ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        // line 34
                        echo "                      <div class=\"form-group required\">
                        <label class=\"control-label\" for=\"formInputText";
                        // line 35
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                        <textarea class=\"form-control\" name=\"form_input[";
                        // line 36
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "]\" id=\"formInputText";
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" rows=\"3\" data-minlength=\"5\" required=\"\" placeholder=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\"></textarea>
                        <div class=\"help-block with-errors\"></div>
                        <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 38
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][required]\" value=\"textarea\">
                      </div>
                     ";
                    } else {
                        // line 41
                        echo "                        <div class=\"form-group\">
                          <label for=\"formInputText";
                        // line 42
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                          <textarea class=\"form-control\" name=\"form_input[";
                        // line 43
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "]\" id=\"formInputText";
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" rows=\"3\" placeholder=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\"></textarea>
                       </div>
                      ";
                    }
                    // line 46
                    echo "                 ";
                } elseif ((($this->getAttribute($context["field"], "type", array()) == "select") && $this->getAttribute($context["field"], "field_status", array()))) {
                    // line 47
                    echo "                       ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        // line 48
                        echo "                          <div class=\"form-group required\">
                            <label for=\"formInputSelect";
                        // line 49
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                            <select class=\"form-control\"  name=\"form_input[";
                        // line 50
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "]\" id=\"formInputSelect";
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">
                               ";
                        // line 51
                        $context["field_count"] = (twig_length_filter($this->env, $this->getAttribute($context["field"], "option", array())) - 1);
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["field_count"]) ? $context["field_count"] : null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 53
                            echo "                                <option >";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "</option>
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                            </select>
                           
                          </div>
                        ";
                    } else {
                        // line 59
                        echo "                          <div class=\"form-group\">
                            <label for=\"formInputSelect";
                        // line 60
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                            <select class=\"form-control\" name=\"form_input[";
                        // line 61
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "]\" id=\"formInputSelect";
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">
                               ";
                        // line 62
                        $context["field_count"] = (twig_length_filter($this->env, $this->getAttribute($context["field"], "option", array())) - 1);
                        // line 63
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["field_count"]) ? $context["field_count"] : null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 64
                            echo "                                <option>";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "</option>
                                 ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                            </select>
                          </div>
                        ";
                    }
                    // line 69
                    echo "                 ";
                } elseif ((($this->getAttribute($context["field"], "type", array()) == "radio") && $this->getAttribute($context["field"], "field_status", array()))) {
                    // line 70
                    echo "                       ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        // line 71
                        echo "                          <div class=\"form-group required\">
                            <label for=\"formInputRadio";
                        // line 72
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                            <div class=\"radio\" id=\"formInputRadio";
                        // line 73
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">
                               ";
                        // line 74
                        $context["field_count"] = (twig_length_filter($this->env, $this->getAttribute($context["field"], "option", array())) - 1);
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["field_count"]) ? $context["field_count"] : null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 76
                            echo "                                <div><label><input required=\"\" type=\"radio\" name=\"form_input[";
                            echo (isset($context["field_row"]) ? $context["field_row"] : null);
                            echo "][";
                            echo $this->getAttribute($context["field"], "name", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "</label></div>
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        echo "                            </div>
                            <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 79
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][required]\" value=\"radio\">
                          </div>
                        ";
                    } else {
                        // line 82
                        echo "                          <div class=\"form-group\">
                            <label for=\"formInputRadio";
                        // line 83
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                            <div class=\"radio\" id=\"formInputRadio";
                        // line 84
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">
                               ";
                        // line 85
                        $context["field_count"] = (twig_length_filter($this->env, $this->getAttribute($context["field"], "option", array())) - 1);
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["field_count"]) ? $context["field_count"] : null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 87
                            echo "                                <div><label><input type=\"radio\" name=\"form_input[";
                            echo (isset($context["field_row"]) ? $context["field_row"] : null);
                            echo "][";
                            echo $this->getAttribute($context["field"], "name", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "</label></div>
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "                            </div>
                          </div>
                         ";
                    }
                    // line 92
                    echo "                    ";
                } elseif ((($this->getAttribute($context["field"], "type", array()) == "checkbox") && $this->getAttribute($context["field"], "field_status", array()))) {
                    // line 93
                    echo "                       ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        // line 94
                        echo "                          <div class=\"form-group required\">
                            <label for=\"formInputCheckbox";
                        // line 95
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                            <div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 96
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">
                               ";
                        // line 97
                        $context["field_count"] = (twig_length_filter($this->env, $this->getAttribute($context["field"], "option", array())) - 1);
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["field_count"]) ? $context["field_count"] : null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 99
                            echo "                                <div><label> <input type=\"checkbox\" name=\"form_input[";
                            echo (isset($context["field_row"]) ? $context["field_row"] : null);
                            echo "][";
                            echo $this->getAttribute($context["field"], "name", array());
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "</label></div>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 101
                        echo "                            </div>
                            <div class=\"help-block with-errors\"></div>
                            <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 103
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][required]\" value=\"checkbox\">
                          </div>
                        ";
                    } else {
                        // line 106
                        echo "                          <div class=\"form-group\">
                            <label for=\"formInputCheckbox";
                        // line 107
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                            <div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 108
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">
                              ";
                        // line 109
                        $context["field_count"] = (twig_length_filter($this->env, $this->getAttribute($context["field"], "option", array())) - 1);
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["field_count"]) ? $context["field_count"] : null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 111
                            echo "                                <div><label><input type=\"checkbox\" name=\"form_input[";
                            echo (isset($context["field_row"]) ? $context["field_row"] : null);
                            echo "][";
                            echo $this->getAttribute($context["field"], "name", array());
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($context["field"], "option", array(), "array"), $context["i"], array(), "array");
                            echo "</label></div>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "                            </div>
                          </div>
                       ";
                    }
                    // line 116
                    echo "                 ";
                } elseif ((($this->getAttribute($context["field"], "type", array()) == "date") && $this->getAttribute($context["field"], "field_status", array()))) {
                    // line 117
                    echo "                    ";
                    $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                    // line 118
                    echo "                    ";
                    if (((isset($context["k"]) ? $context["k"] : null) == 1)) {
                        // line 119
                        echo "                      <script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.js\"></script>
                      <script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.ru.js\"></script>
                      <link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/bootstrap-datepicker.css\" />
                    ";
                    }
                    // line 123
                    echo "                  ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        // line 124
                        echo "                    <div class=\"form-group required\">
                      <label class=\"control-label\" for=\"formInputDate";
                        // line 125
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                        <input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 126
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "]\" id=\"formInputDate";
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\">
                        <div class=\"help-block with-errors\"></div>
                      <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 128
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][required]\" value=\"input\">
                    </div>
                  ";
                    } else {
                        // line 131
                        echo "                    <div class=\"form-group\">
                      <label for=\"formInputDate";
                        // line 132
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"control-label\">";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "</label>
                        <input type=\"text\" id=\"formInputDate";
                        // line 133
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "-";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "\" class=\"form-control\" name=\"form_input[";
                        echo (isset($context["field_row"]) ? $context["field_row"] : null);
                        echo "][";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "]\"  placeholder=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\">
                    </div>
                  ";
                    }
                    // line 135
                    echo " 
                   <script type=\"text/javascript\">
                      \$(function () {
                          \$('#formInputDate";
                    // line 138
                    echo (isset($context["module_id"]) ? $context["module_id"] : null);
                    echo "-";
                    echo (isset($context["field_row"]) ? $context["field_row"] : null);
                    echo "').datepicker({
                            language: 'ru',
                          });
                      });
                  </script>
              ";
                }
                // line 143
                echo " 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "          ";
        }
        echo " 
          <div class=\"hidden-inputs\">
            <input type=\"hidden\" name=\"link_page\" value=\"http://";
        // line 147
        echo (isset($context["domain"]) ? $context["domain"] : null);
        echo "\" />
            <input type=\"hidden\" name=\"module_name\" value=\"";
        // line 148
        echo (isset($context["module_name"]) ? $context["module_name"] : null);
        echo "\" />
            <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 149
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\" />
            <input type=\"hidden\" name=\"form_success\" value=\"";
        // line 150
        echo (isset($context["form_success"]) ? $context["form_success"] : null);
        echo "\" />
          </div>
          <div class=\"col-sm-12 form-group text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 153
        echo (isset($context["button_send"]) ? $context["button_send"] : null);
        echo "</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">
      \$('#form-formcreator";
        // line 162
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "').on('submit', function(e) {
        e.preventDefault(); 
        var that = \$(e.target);          
        \$.ajax({                 
          url: 'index.php?route=extension/module/formcreator/send',
          type: 'post', 
          data: \$(this).serialize(), 
          dataType:'json', 
          success: function(data) {
            if (data['error']) {
              \$('#feedbackModal .text-danger').remove();
              if (data['error']) {
                var error = \$('<span class=\"text-danger\">'+ data['error'] +'</span>');
                \$('#feedbackModal .modal-body').prepend(error);
              }
              return;
            }
            \$('#feedbackModal .text-danger').remove();
            alertForm({form: that, msg: data['success']});
            that.find('input[type=\\'text\\']').val('');
            that.find('textarea').val('');
          }, 
        });
      });
      function alertForm(alert) {
        var div = \$('<div class=\"text-left alert alert-success\" style=\"display: none;\">' + alert.msg + '</div>');        
        alert.form.prepend(div);
        div.slideDown(400).delay(3000).slideUp(400, function() {
          alert.form.closest('.modal').modal('hide');
          div.remove();    
        });
      }
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/formcreator_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 162,  603 => 153,  597 => 150,  593 => 149,  589 => 148,  585 => 147,  579 => 145,  572 => 143,  561 => 138,  556 => 135,  542 => 133,  534 => 132,  531 => 131,  525 => 128,  512 => 126,  504 => 125,  501 => 124,  498 => 123,  492 => 119,  489 => 118,  486 => 117,  483 => 116,  478 => 113,  461 => 111,  456 => 110,  454 => 109,  448 => 108,  440 => 107,  437 => 106,  431 => 103,  427 => 101,  410 => 99,  405 => 98,  403 => 97,  397 => 96,  389 => 95,  386 => 94,  383 => 93,  380 => 92,  375 => 89,  360 => 87,  355 => 86,  353 => 85,  347 => 84,  339 => 83,  336 => 82,  330 => 79,  327 => 78,  312 => 76,  307 => 75,  305 => 74,  299 => 73,  291 => 72,  288 => 71,  285 => 70,  282 => 69,  277 => 66,  268 => 64,  263 => 63,  261 => 62,  251 => 61,  243 => 60,  240 => 59,  234 => 55,  225 => 53,  220 => 52,  218 => 51,  208 => 50,  200 => 49,  197 => 48,  194 => 47,  191 => 46,  177 => 43,  169 => 42,  166 => 41,  160 => 38,  147 => 36,  139 => 35,  136 => 34,  133 => 33,  130 => 32,  116 => 29,  108 => 28,  105 => 27,  99 => 24,  86 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  49 => 12,  41 => 9,  31 => 4,  26 => 2,  19 => 1,);
    }
}
/* <button type="button" class="btn btn-primary" id="feedbackButton{{ module_id }}" data-toggle="modal" data-target="#feedbackModal{{ module_id }}">*/
/*   {{ button_name }}*/
/* </button>*/
/* <div class="modal fade" id="feedbackModal{{ module_id }}" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel{{ module_id }}">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content col-md-12">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h3 class="modal-title" id="feedbackModalLabel{{ module_id }}">{{ module_name }}</h3>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <form role="form" data-toggle="validator" enctype="multipart/form-data" id="form-formcreator{{ module_id }}">*/
/*           {% if fields %}*/
/*           {% set k = 0 %}*/
/*           {% set field_row = 0 %}*/
/*              {% for field in fields %}*/
/*              {% set field_row = field_row + 1 %}*/
/*                {% if field.type == 'input'  and  field.field_status %}*/
/*                  {% if field.required %}*/
/*                     <div class="form-group required">*/
/*                       <label class="control-label" for="formInput{{ module_id }}-{{ field_row }}">{{ field.name }}</label>*/
/*                       <input type="text" class="form-control" name="form_input[{{ field_row }}][{{ field.name}}]" id="formInput{{ module_id }}-{{ field_row }}" data-minlength="3" required="" placeholder="{{ field.name }}">*/
/*                       <div class="help-block with-errors"></div>*/
/*                       <input type="hidden" class="form-control" name="form_input[{{ field_row }}][required]" value="input">*/
/*                     </div>*/
/*                   {% else %}*/
/*                     <div class="form-group">*/
/*                       <label for="formInput{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                       <input type="text" class="form-control" name="form_input[{{ field_row }}][{{ field.name }}]" id="formInput{{ module_id }}-{{ field_row }}" placeholder="{{ field.name }}">*/
/*                     </div>*/
/*                    {% endif %}*/
/*                {% elseif  field.type == 'textarea'  and  field.field_status %}*/
/*                     {% if field.required %}*/
/*                       <div class="form-group required">*/
/*                         <label class="control-label" for="formInputText{{ module_id }}-{{ field_row }}">{{ field.name }}</label>*/
/*                         <textarea class="form-control" name="form_input[{{ field_row }}][{{ field.name }}]" id="formInputText{{ module_id }}-{{ field_row }}" rows="3" data-minlength="5" required="" placeholder="{{ field.name }}"></textarea>*/
/*                         <div class="help-block with-errors"></div>*/
/*                         <input type="hidden" class="form-control" name="form_input[{{ field_row }}][required]" value="textarea">*/
/*                       </div>*/
/*                      {% else %}*/
/*                         <div class="form-group">*/
/*                           <label for="formInputText{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                           <textarea class="form-control" name="form_input[{{ field_row }}][{{ field.name }}]" id="formInputText{{ module_id }}-{{ field_row }}" rows="3" placeholder="{{ field.name }}"></textarea>*/
/*                        </div>*/
/*                       {% endif %}*/
/*                  {% elseif  field.type == 'select'  and  field.field_status %}*/
/*                        {% if field.required %}*/
/*                           <div class="form-group required">*/
/*                             <label for="formInputSelect{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                             <select class="form-control"  name="form_input[{{ field_row }}][{{ field.name }}]" id="formInputSelect{{ module_id }}-{{ field_row }}">*/
/*                                {% set field_count = field.option|length - 1 %}*/
/* 															{% for i in 0..field_count %}*/
/*                                 <option >{{ field['option'][i]}}</option>*/
/*                                {% endfor %}*/
/*                             </select>*/
/*                            */
/*                           </div>*/
/*                         {% else %}*/
/*                           <div class="form-group">*/
/*                             <label for="formInputSelect{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                             <select class="form-control" name="form_input[{{ field_row }}][{{ field.name }}]" id="formInputSelect{{ module_id }}-{{ field_row }}">*/
/*                                {% set field_count = field.option|length - 1 %}*/
/* 															{% for i in 0..field_count %}*/
/*                                 <option>{{ field['option'][i]}}</option>*/
/*                                  {% endfor %}*/
/*                             </select>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                  {% elseif  field.type == 'radio'  and  field.field_status %}*/
/*                        {% if field.required%}*/
/*                           <div class="form-group required">*/
/*                             <label for="formInputRadio{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                             <div class="radio" id="formInputRadio{{ module_id }}-{{ field_row }}">*/
/*                                {% set field_count = field.option|length - 1 %}*/
/* 															{% for i in 0..field_count %}*/
/*                                 <div><label><input required="" type="radio" name="form_input[{{ field_row }}][{{ field.name }}]" value="{{ field['option'][i]}}">{{ field['option'][i]}}</label></div>*/
/*                                {% endfor %}*/
/*                             </div>*/
/*                             <input type="hidden" class="form-control" name="form_input[{{ field_row }}][required]" value="radio">*/
/*                           </div>*/
/*                         {% else %}*/
/*                           <div class="form-group">*/
/*                             <label for="formInputRadio{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                             <div class="radio" id="formInputRadio{{ module_id }}-{{ field_row }}">*/
/*                                {% set field_count = field.option|length - 1 %}*/
/* 															{% for i in 0..field_count %}*/
/*                                 <div><label><input type="radio" name="form_input[{{ field_row }}][{{ field.name }}]" value="{{ field['option'][i]}}">{{ field['option'][i]}}</label></div>*/
/*                                {% endfor %}*/
/*                             </div>*/
/*                           </div>*/
/*                          {% endif %}*/
/*                     {% elseif  field.type == 'checkbox'  and  field.field_status %}*/
/*                        {% if field.required%}*/
/*                           <div class="form-group required">*/
/*                             <label for="formInputCheckbox{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                             <div class="checkbox" id="formInputCheckbox{{ module_id }}-{{ field_row }}">*/
/*                                {% set field_count = field.option|length - 1 %}*/
/* 															{% for i in 0..field_count %}*/
/*                                 <div><label> <input type="checkbox" name="form_input[{{ field_row }}][{{ field.name }}][{{ i }}]" value="{{ field['option'][i]}}">{{ field['option'][i]}}</label></div>*/
/*                               {% endfor %}*/
/*                             </div>*/
/*                             <div class="help-block with-errors"></div>*/
/*                             <input type="hidden" class="form-control" name="form_input[{{ field_row }}][required]" value="checkbox">*/
/*                           </div>*/
/*                         {% else %}*/
/*                           <div class="form-group">*/
/*                             <label for="formInputCheckbox{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                             <div class="checkbox" id="formInputCheckbox{{ module_id }}-{{ field_row }}">*/
/*                               {% set field_count = field.option|length - 1 %}*/
/* 															{% for i in 0..field_count %}*/
/*                                 <div><label><input type="checkbox" name="form_input[{{ field_row }}][{{ field.name }}][{{ i }}]" value="{{ field['option'][i]}}">{{ field['option'][i]}}</label></div>*/
/*                               {% endfor %}*/
/*                             </div>*/
/*                           </div>*/
/*                        {% endif %}*/
/*                  {% elseif  field.type == 'date'  and  field.field_status %}*/
/*                     {% set k = k + 1 %}*/
/*                     {% if k == 1 %}*/
/*                       <script type="text/javascript" src="catalog/view/javascript/bootstrap/js/bootstrap-datepicker.js"></script>*/
/*                       <script type="text/javascript" src="catalog/view/javascript/bootstrap/js/bootstrap-datepicker.ru.js"></script>*/
/*                       <link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/bootstrap-datepicker.css" />*/
/*                     {% endif %}*/
/*                   {% if field.required %}*/
/*                     <div class="form-group required">*/
/*                       <label class="control-label" for="formInputDate{{ module_id }}-{{ field_row }}">{{ field.name }}</label>*/
/*                         <input type="text" class="form-control" name="form_input[{{ field_row }}][{{ field.name}}]" id="formInputDate{{ module_id }}-{{ field_row }}" data-minlength="3" required="" placeholder="{{ field.name }}">*/
/*                         <div class="help-block with-errors"></div>*/
/*                       <input type="hidden" class="form-control" name="form_input[{{ field_row }}][required]" value="input">*/
/*                     </div>*/
/*                   {% else %}*/
/*                     <div class="form-group">*/
/*                       <label for="formInputDate{{ module_id }}-{{ field_row }}" class="control-label">{{ field.name }}</label>*/
/*                         <input type="text" id="formInputDate{{ module_id }}-{{ field_row }}" class="form-control" name="form_input[{{ field_row }}][{{ field.name }}]"  placeholder="{{ field.name }}">*/
/*                     </div>*/
/*                   {% endif %} */
/*                    <script type="text/javascript">*/
/*                       $(function () {*/
/*                           $('#formInputDate{{ module_id }}-{{ field_row }}').datepicker({*/
/*                             language: 'ru',*/
/*                           });*/
/*                       });*/
/*                   </script>*/
/*               {% endif %} */
/*             {% endfor %}*/
/*           {% endif %} */
/*           <div class="hidden-inputs">*/
/*             <input type="hidden" name="link_page" value="http://{{ domain }}" />*/
/*             <input type="hidden" name="module_name" value="{{ module_name }}" />*/
/*             <input type="hidden" name="module_id" value="{{ module_id }}" />*/
/*             <input type="hidden" name="form_success" value="{{ form_success }}" />*/
/*           </div>*/
/*           <div class="col-sm-12 form-group text-center">*/
/*             <button type="submit" class="btn btn-primary">{{ button_send }}</button>*/
/*           </div>*/
/*       </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*       $('#form-formcreator{{ module_id }}').on('submit', function(e) {*/
/*         e.preventDefault(); */
/*         var that = $(e.target);          */
/*         $.ajax({                 */
/*           url: 'index.php?route=extension/module/formcreator/send',*/
/*           type: 'post', */
/*           data: $(this).serialize(), */
/*           dataType:'json', */
/*           success: function(data) {*/
/*             if (data['error']) {*/
/*               $('#feedbackModal .text-danger').remove();*/
/*               if (data['error']) {*/
/*                 var error = $('<span class="text-danger">'+ data['error'] +'</span>');*/
/*                 $('#feedbackModal .modal-body').prepend(error);*/
/*               }*/
/*               return;*/
/*             }*/
/*             $('#feedbackModal .text-danger').remove();*/
/*             alertForm({form: that, msg: data['success']});*/
/*             that.find('input[type=\'text\']').val('');*/
/*             that.find('textarea').val('');*/
/*           }, */
/*         });*/
/*       });*/
/*       function alertForm(alert) {*/
/*         var div = $('<div class="text-left alert alert-success" style="display: none;">' + alert.msg + '</div>');        */
/*         alert.form.prepend(div);*/
/*         div.slideDown(400).delay(3000).slideUp(400, function() {*/
/*           alert.form.closest('.modal').modal('hide');*/
/*           div.remove();    */
/*         });*/
/*       }*/
/* </script>*/
/* */
