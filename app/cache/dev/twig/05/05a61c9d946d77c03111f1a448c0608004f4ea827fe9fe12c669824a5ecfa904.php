<?php

/* IncentivesBaseBundle:Default:index.html.twig */
class __TwigTemplate_aeb51092da214dd22ce307def3558bce78af3aa065d6a072caa31d60085a5628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesBaseBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c4db2c34721a3421b79ec524799ed9800cfdca9e9e86b54a1f92f5ea9567d40 = $this->env->getExtension("native_profiler");
        $__internal_3c4db2c34721a3421b79ec524799ed9800cfdca9e9e86b54a1f92f5ea9567d40->enter($__internal_3c4db2c34721a3421b79ec524799ed9800cfdca9e9e86b54a1f92f5ea9567d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c4db2c34721a3421b79ec524799ed9800cfdca9e9e86b54a1f92f5ea9567d40->leave($__internal_3c4db2c34721a3421b79ec524799ed9800cfdca9e9e86b54a1f92f5ea9567d40_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebbeea9a2daea7dbca59076a78abf5176ecf2662b37ff6bc70eb49c59ae07d24 = $this->env->getExtension("native_profiler");
        $__internal_ebbeea9a2daea7dbca59076a78abf5176ecf2662b37ff6bc70eb49c59ae07d24->enter($__internal_ebbeea9a2daea7dbca59076a78abf5176ecf2662b37ff6bc70eb49c59ae07d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_ebbeea9a2daea7dbca59076a78abf5176ecf2662b37ff6bc70eb49c59ae07d24->leave($__internal_ebbeea9a2daea7dbca59076a78abf5176ecf2662b37ff6bc70eb49c59ae07d24_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58f7661d8468c16dcc018603068405ae98c3b211d5b12ea555f930997c264cec = $this->env->getExtension("native_profiler");
        $__internal_58f7661d8468c16dcc018603068405ae98c3b211d5b12ea555f930997c264cec->enter($__internal_58f7661d8468c16dcc018603068405ae98c3b211d5b12ea555f930997c264cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
";
        // line 11
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_58f7661d8468c16dcc018603068405ae98c3b211d5b12ea555f930997c264cec->leave($__internal_58f7661d8468c16dcc018603068405ae98c3b211d5b12ea555f930997c264cec_prof);

    }

    // line 15
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_e73a68679d2c7b1b46d54141436328746ec2c80886d87ed673c6f09eebab2e15 = $this->env->getExtension("native_profiler");
        $__internal_e73a68679d2c7b1b46d54141436328746ec2c80886d87ed673c6f09eebab2e15->enter($__internal_e73a68679d2c7b1b46d54141436328746ec2c80886d87ed673c6f09eebab2e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 16
        echo "
<div class=\"row-fluid sortable ui-sortable\">
\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header well\">
\t\t\t\t\t\t<h2><i class=\"icon-th\"></i> Tabs</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a class=\"btn btn-setting btn-round\" href=\"#\"><i class=\"icon-cog\"></i></a>
\t\t\t\t\t\t\t<a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a>
\t\t\t\t\t\t\t<a class=\"btn btn-close btn-round\" href=\"#\"><i class=\"icon-remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul id=\"myTab\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#info\">Info</a></li>
\t\t\t\t\t\t\t<li><a href=\"#custom\">Custom</a></li>
\t\t\t\t\t\t\t<li><a href=\"#messages\">Messages</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t\t\t<div id=\"info\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t<h3>Charisma <small>a fully featued template</small></h3>
\t\t\t\t\t\t\t\t<p>Its a fully featured, responsive template for your admin panel. Its optimized for tablet and mobile phones. Scan the QR code below to view it in your mobile device.</p> <img src=\"img/qrcode136.png\" class=\"charisma_qr center\" alt=\"QR Code\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"custom\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<h3>Custom <small>small text</small></h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"messages\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<h3>Messages <small>small text</small></h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->\t
\t\t\t\t\t\t
\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div data-original-title=\"\" class=\"box-header well\">
\t\t\t\t\t\t<h2><i class=\"icon-list-alt\"></i> Realtime Traffic</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a>
\t\t\t\t\t\t\t<a class=\"btn btn-close btn-round\" href=\"#\"><i class=\"icon-remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<div style=\"height: 190px; padding: 0px; position: relative;\" id=\"realtimechart\"><canvas class=\"base\" width=\"322\" height=\"190\"></canvas><canvas class=\"overlay\" width=\"322\" height=\"190\" style=\"position: absolute; left: 0px; top: 0px;\"></canvas><div style=\"font-size:smaller\" class=\"tickLabels\"><div style=\"color:#545454\" class=\"yAxis y1Axis\"><div style=\"position:absolute;text-align:right;top:177px;right:304px;width:18px\" class=\"tickLabel\">0</div><div style=\"position:absolute;text-align:right;top:132px;right:304px;width:18px\" class=\"tickLabel\">25</div><div style=\"position:absolute;text-align:right;top:86px;right:304px;width:18px\" class=\"tickLabel\">50</div><div style=\"position:absolute;text-align:right;top:41px;right:304px;width:18px\" class=\"tickLabel\">75</div><div style=\"position:absolute;text-align:right;top:-5px;right:304px;width:18px\" class=\"tickLabel\">100</div></div></div></div>
\t\t\t\t\t\t\t<p class=\"clearfix\">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
\t\t\t\t\t\t\t<p>Time between updates: <input type=\"text\" style=\"text-align: right; width:5em\" value=\"\" id=\"updateInterval\"> milliseconds</p>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t</div>

";
        
        $__internal_e73a68679d2c7b1b46d54141436328746ec2c80886d87ed673c6f09eebab2e15->leave($__internal_e73a68679d2c7b1b46d54141436328746ec2c80886d87ed673c6f09eebab2e15_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  74 => 15,  64 => 11,  61 => 10,  55 => 9,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* */
/* <div class="row-fluid sortable ui-sortable">*/
/* 				<div class="box span6">*/
/* 					<div class="box-header well">*/
/* 						<h2><i class="icon-th"></i> Tabs</h2>*/
/* 						<div class="box-icon">*/
/* 							<a class="btn btn-setting btn-round" href="#"><i class="icon-cog"></i></a>*/
/* 							<a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>*/
/* 							<a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="box-content">*/
/* 						<ul id="myTab" class="nav nav-tabs">*/
/* 							<li class="active"><a href="#info">Info</a></li>*/
/* 							<li><a href="#custom">Custom</a></li>*/
/* 							<li><a href="#messages">Messages</a></li>*/
/* 						</ul>*/
/* 						 */
/* 						<div class="tab-content" id="myTabContent">*/
/* 							<div id="info" class="tab-pane active">*/
/* 								<h3>Charisma <small>a fully featued template</small></h3>*/
/* 								<p>Its a fully featured, responsive template for your admin panel. Its optimized for tablet and mobile phones. Scan the QR code below to view it in your mobile device.</p> <img src="img/qrcode136.png" class="charisma_qr center" alt="QR Code">*/
/* 							</div>*/
/* 							<div id="custom" class="tab-pane">*/
/* 								<h3>Custom <small>small text</small></h3>*/
/* 								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>*/
/* 								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>*/
/* 							</div>*/
/* 							<div id="messages" class="tab-pane">*/
/* 								<h3>Messages <small>small text</small></h3>*/
/* 								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>*/
/* 								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div><!--/span-->	*/
/* 						*/
/* 				<div class="box span6">*/
/* 					<div data-original-title="" class="box-header well">*/
/* 						<h2><i class="icon-list-alt"></i> Realtime Traffic</h2>*/
/* 						<div class="box-icon">*/
/* 							<a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>*/
/* 							<a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="box-content">*/
/* 						<div style="height: 190px; padding: 0px; position: relative;" id="realtimechart"><canvas class="base" width="322" height="190"></canvas><canvas class="overlay" width="322" height="190" style="position: absolute; left: 0px; top: 0px;"></canvas><div style="font-size:smaller" class="tickLabels"><div style="color:#545454" class="yAxis y1Axis"><div style="position:absolute;text-align:right;top:177px;right:304px;width:18px" class="tickLabel">0</div><div style="position:absolute;text-align:right;top:132px;right:304px;width:18px" class="tickLabel">25</div><div style="position:absolute;text-align:right;top:86px;right:304px;width:18px" class="tickLabel">50</div><div style="position:absolute;text-align:right;top:41px;right:304px;width:18px" class="tickLabel">75</div><div style="position:absolute;text-align:right;top:-5px;right:304px;width:18px" class="tickLabel">100</div></div></div></div>*/
/* 							<p class="clearfix">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>*/
/* 							<p>Time between updates: <input type="text" style="text-align: right; width:5em" value="" id="updateInterval"> milliseconds</p>*/
/* 					</div>*/
/* 				</div><!--/span-->*/
/* 			</div>*/
/* */
/* {% endblock %}*/
/* */
