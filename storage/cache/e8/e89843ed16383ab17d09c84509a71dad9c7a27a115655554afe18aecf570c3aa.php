<?php

/* ToolsShop/template/common/currency.twig */
class __TwigTemplate_1e8b50e7cc64396524ee50ed99af222a4a630275474023959fd7a11d82f8701e extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<div class=\"pull-left\">
  <form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
  <div class=\"btn-group\">
      <button class=\"btn btn-link\">
\t\t  ";
            // line 6
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "
\t\t  ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 8
                echo "\t\t  ";
                if (($this->getAttribute($context["currency"], "symbol_left", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    // line 9
                    echo "\t\t  <strong>";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "</strong> 
\t\t  ";
                } elseif (($this->getAttribute(                // line 10
$context["currency"], "symbol_right", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " 
\t\t  <strong>";
                    // line 11
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "</strong>
\t\t  ";
                }
                // line 13
                echo "\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
      </button>
      <ul class=\"currency-menu\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 17
                echo "        ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 18
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 19
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "</button>
        </li>
        ";
                } else {
                    // line 22
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 23
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "</button>
        </li>
        ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 30
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
</div>
";
        }
        // line 33
        echo " ";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  105 => 30,  100 => 27,  94 => 26,  86 => 23,  83 => 22,  75 => 19,  72 => 18,  69 => 17,  65 => 16,  55 => 13,  50 => 11,  46 => 10,  41 => 9,  38 => 8,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <div class="pull-left">*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*   <div class="btn-group">*/
/*       <button class="btn btn-link">*/
/* 		  {{ text_currency }}*/
/* 		  {% for currency in currencies %}*/
/* 		  {% if currency.symbol_left and currency.code == code %}*/
/* 		  <strong>{{ currency.symbol_left }}</strong> */
/* 		  {% elseif currency.symbol_right and currency.code == code %} */
/* 		  <strong>{{ currency.symbol_right }}</strong>*/
/* 		  {% endif %}*/
/* 		  {% endfor %} */
/*       </button>*/
/*       <ul class="currency-menu">*/
/*         {% for currency in currencies %}*/
/*         {% if currency.symbol_left %}*/
/*         <li>*/
/*           <button class="currency-select btn btn-link btn-block" type="button" name="{{ currency.code }}">{{ currency.symbol_left }}</button>*/
/*         </li>*/
/*         {% else %}*/
/*         <li>*/
/*           <button class="currency-select btn btn-link btn-block" type="button" name="{{ currency.code }}">{{ currency.symbol_right }}</button>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* </div>*/
/* {% endif %} */
