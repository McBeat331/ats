<?php

/* ToolsShop/template/extension/module/newsletters.twig */
class __TwigTemplate_828967ddf7fd221e39f742f18ca80415e48691d8fff71e68fd02461be411afcc extends Twig_Template
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
        echo "<script>
\t\tfunction subscribe()
\t\t{
\t\t\tvar emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
\t\t\tvar email = \$('#txtemail').val();
\t\t\tif(email != \"\")
\t\t\t{
\t\t\t\tif(!emailpattern.test(email))
\t\t\t\t{
\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\tvar str = '<span class=\"error\">Invalid Email</span>';
\t\t\t\t\t\$('#txtemail').after('<div class=\"text-danger\">Invalid Email</div>');

\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=extension/module/newsletters/news',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdata: 'email=' + \$('#txtemail').val(),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t\t\$('#txtemail').after('<div class=\"text-danger\">' + json.message + '</div>');
\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\$('#txtemail').after('<div class=\"text-danger\">Email Is Require</div>');
\t\t\t\t\$(email).focus();

\t\t\t\treturn false;
\t\t\t}
\t\t}
</script>

<div class=\"newsletter\">
\t<h5 class=\"news-title\">";
        // line 48
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h5>
\t<div class=\"newsletter-message\">";
        // line 49
        echo (isset($context["newsletter_description"]) ? $context["newsletter_description"] : null);
        echo "</div>
\t<div class=\"newsright\">
\t\t<form action=\"\" method=\"post\">
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 53
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "</label>
\t\t\t\t<div class=\"input-news\">
\t\t\t\t  <input type=\"email\" name=\"txtemail\" id=\"txtemail\" value=\"\" placeholder=\"";
        // line 55
        echo (isset($context["text_placeholder"]) ? $context["text_placeholder"] : null);
        echo "\" class=\"form-control input-lg\"  /> 
\t\t\t\t</div>\t\t\t
\t\t\t\t<div class=\"subscribe-btn\">
\t\t\t\t  <button type=\"submit\" class=\"btn btn-default btn-lg\" onclick=\"return subscribe();\">";
        // line 58
        echo (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null);
        echo "</i></button>   
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "ToolsShop/template/extension/module/newsletters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 58,  84 => 55,  79 => 53,  72 => 49,  68 => 48,  19 => 1,);
    }
}
/* <script>*/
/* 		function subscribe()*/
/* 		{*/
/* 			var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;*/
/* 			var email = $('#txtemail').val();*/
/* 			if(email != "")*/
/* 			{*/
/* 				if(!emailpattern.test(email))*/
/* 				{*/
/* 					$('.text-danger').remove();*/
/* 					var str = '<span class="error">Invalid Email</span>';*/
/* 					$('#txtemail').after('<div class="text-danger">Invalid Email</div>');*/
/* */
/* 					return false;*/
/* 				}*/
/* 				else*/
/* 				{*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=extension/module/newsletters/news',*/
/* 						type: 'post',*/
/* 						data: 'email=' + $('#txtemail').val(),*/
/* 						dataType: 'json',*/
/* 						*/
/* 									*/
/* 						success: function(json) {*/
/* 						*/
/* 						$('.text-danger').remove();*/
/* 						$('#txtemail').after('<div class="text-danger">' + json.message + '</div>');*/
/* 						*/
/* 						}*/
/* 						*/
/* 					});*/
/* 					return false;*/
/* 				}*/
/* 			}*/
/* 			else*/
/* 			{*/
/* 				$('.text-danger').remove();*/
/* 				$('#txtemail').after('<div class="text-danger">Email Is Require</div>');*/
/* 				$(email).focus();*/
/* */
/* 				return false;*/
/* 			}*/
/* 		}*/
/* </script>*/
/* */
/* <div class="newsletter">*/
/* 	<h5 class="news-title">{{ heading_title }}</h5>*/
/* 	<div class="newsletter-message">{{ newsletter_description }}</div>*/
/* 	<div class="newsright">*/
/* 		<form action="" method="post">*/
/* 			<div class="form-group required">*/
/* 				<label class="col-sm-2 control-label" for="input-firstname">{{ text_email }}</label>*/
/* 				<div class="input-news">*/
/* 				  <input type="email" name="txtemail" id="txtemail" value="" placeholder="{{ text_placeholder }}" class="form-control input-lg"  /> */
/* 				</div>			*/
/* 				<div class="subscribe-btn">*/
/* 				  <button type="submit" class="btn btn-default btn-lg" onclick="return subscribe();">{{ text_subscribe }}</i></button>   */
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
