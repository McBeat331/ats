<?php

/* ToolsShop/template/common/footer.twig */
class __TwigTemplate_1d6368c6f21f5dd04ce1f2929ac2822b110976319e1256e7e456ec73f8f3030b extends Twig_Template
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
        echo "<footer>
\t   
\t<div id=\"footer\" class=\"container\">
\t\t
    \t<div class=\"row\">
      \t\t<div class=\"footer-blocks\">
\t\t\t\t
\t  
\t\t\t  ";
        // line 9
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 10
            echo "\t\t\t\t  <div id=\"info\" class=\"col-sm-3 column\">
\t\t\t\t\t<h5>";
            // line 11
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 14
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
            echo "\">";
            echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t  </div>
\t\t\t  ";
        }
        // line 20
        echo "\t\t\t   
\t\t\t  <div id=\"extra-link\" class=\"col-sm-3 column\">
\t\t\t\t<h5>";
        // line 22
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t  <li><a href=\"";
        // line 24
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
\t\t\t\t  <li><a href=\"";
        // line 25
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
\t\t\t\t  <li><a href=\"";
        // line 26
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
\t\t\t\t  <li><a href=\"";
        // line 27
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
\t\t\t\t  <li><a href=\"";
        // line 28
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>\t  
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t  
\t\t\t  
\t\t\t  <div class=\"col-sm-3 column\">
\t\t\t\t<h5>";
        // line 34
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t  <li><a href=\"";
        // line 36
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
\t\t\t\t  <li><a href=\"";
        // line 37
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
\t\t\t\t  <li><a href=\"";
        // line 38
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t  <li><a href=\"";
        // line 39
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
\t\t\t\t  <li><a href=\"";
        // line 40
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t  <div class=\"footerleft\">
\t\t\t\t<?php echo \$footerleft; ?> 
\t\t\t\t";
        // line 45
        echo (isset($context["footerleft"]) ? $context["footerleft"] : null);
        echo "
\t   \t\t</div>
\t\t\t <div class=\"col-sm-3 column footerright\">
\t\t\t\t";
        // line 48
        echo (isset($context["footerright"]) ? $context["footerright"] : null);
        echo "
\t\t\t</div>
    \t</div>
   \t\t</div>
    </div>

\t<div id=\"bottom-footer\" class=\"bottomfooter\">
    \t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 66
        echo "\t\t\t\t
\t\t\t\t<p id=\"powered\" class=\"powered\">";
        // line 67
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
\t\t\t\t";
        // line 68
        echo (isset($context["footerbottom"]) ? $context["footerbottom"] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 74
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> 
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 76,  184 => 74,  180 => 73,  172 => 68,  168 => 67,  165 => 66,  153 => 48,  147 => 45,  137 => 40,  131 => 39,  125 => 38,  119 => 37,  113 => 36,  108 => 34,  97 => 28,  91 => 27,  85 => 26,  79 => 25,  73 => 24,  68 => 22,  64 => 20,  54 => 16,  43 => 14,  39 => 13,  34 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <footer>*/
/* 	   */
/* 	<div id="footer" class="container">*/
/* 		*/
/*     	<div class="row">*/
/*       		<div class="footer-blocks">*/
/* 				*/
/* 	  */
/* 			  {% if informations %}*/
/* 				  <div id="info" class="col-sm-3 column">*/
/* 					<h5>{{ text_information }}</h5>*/
/* 					<ul class="list-unstyled">*/
/* 						{% for information in informations %}*/
/* 						<li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/* 						{% endfor %}*/
/* 						<li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* 					</ul>*/
/* 				  </div>*/
/* 			  {% endif %}*/
/* 			   */
/* 			  <div id="extra-link" class="col-sm-3 column">*/
/* 				<h5>{{ text_extra }}</h5>*/
/* 				<ul class="list-unstyled">*/
/* 				  <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/* 				  <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/* 				  <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/* 				  <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/* 				  <li><a href="{{ contact }}">{{ text_contact }}</a></li>	  */
/* 				</ul>*/
/* 			  </div>*/
/* 			  */
/* 			  */
/* 			  <div class="col-sm-3 column">*/
/* 				<h5>{{ text_account }}</h5>*/
/* 				<ul class="list-unstyled">*/
/* 				  <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 				  <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 				  <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/* 				  <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/* 				  <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/* 				</ul>*/
/* 			  </div>*/
/* 			  <div class="footerleft">*/
/* 				<?php echo $footerleft; ?> */
/* 				{{ footerleft }}*/
/* 	   		</div>*/
/* 			 <div class="col-sm-3 column footerright">*/
/* 				{{ footerright }}*/
/* 			</div>*/
/*     	</div>*/
/*    		</div>*/
/*     </div>*/
/* */
/* 	<div id="bottom-footer" class="bottomfooter">*/
/*     	<div class="container">*/
/* 			<div class="row">*/
/* 				{# <ul class="list-unstyled">*/
/* 					<li><a href="{{ special }}">{{ text_special }}</a></li>*/
/* 					<li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/* 					<li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/* 					<li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/* 					<li><a href="{{ return }}">{{ text_return }}</a></li>*/
/* 					<li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* 					<li class="contact"><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 				</ul> #}*/
/* 				*/
/* 				<p id="powered" class="powered">{{ powered }}</p>*/
/* 				{{ footerbottom }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //--> */
/* <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->*/
/* </body></html>*/
