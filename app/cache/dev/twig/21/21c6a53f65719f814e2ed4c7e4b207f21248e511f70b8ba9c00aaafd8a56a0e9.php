<?php

/* IncentivesSolicitudesBundle:Cotizaciones:aprobarproducto.html.twig */
class __TwigTemplate_1bb41225b2be34d93a5f5c5548d973e8ed75d2e1559fe674d87dde093dec986b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Cotizaciones:aprobarproducto.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basePop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40988959e30b836eca66717adfecf60774e773c99025ea29165995c86cb85bd2 = $this->env->getExtension("native_profiler");
        $__internal_40988959e30b836eca66717adfecf60774e773c99025ea29165995c86cb85bd2->enter($__internal_40988959e30b836eca66717adfecf60774e773c99025ea29165995c86cb85bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:aprobarproducto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40988959e30b836eca66717adfecf60774e773c99025ea29165995c86cb85bd2->leave($__internal_40988959e30b836eca66717adfecf60774e773c99025ea29165995c86cb85bd2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_04166ccc87c0b6beec714b23b741c738444623a206658e0569c25f916e2d1984 = $this->env->getExtension("native_profiler");
        $__internal_04166ccc87c0b6beec714b23b741c738444623a206658e0569c25f916e2d1984->enter($__internal_04166ccc87c0b6beec714b23b741c738444623a206658e0569c25f916e2d1984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aprobar Producto";
        
        $__internal_04166ccc87c0b6beec714b23b741c738444623a206658e0569c25f916e2d1984->leave($__internal_04166ccc87c0b6beec714b23b741c738444623a206658e0569c25f916e2d1984_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_b4e98bb8b31a602c241273e31343a2fda299034de78d21385e0cae6c40c96279 = $this->env->getExtension("native_profiler");
        $__internal_b4e98bb8b31a602c241273e31343a2fda299034de78d21385e0cae6c40c96279->enter($__internal_b4e98bb8b31a602c241273e31343a2fda299034de78d21385e0cae6c40c96279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\" data-original-title>
\t    \t<h2><i class=\"icon-edit\"></i>Aprobar Producto</h2>
\t     \t<div class=\"box-icon\">
\t        \t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("cotizaciones_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
\t    \t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("cotizaciones_aprobar_producto");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
\t\t\t    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t    <input type='hidden' name='id' value=";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
\t\t\t    <fieldset>
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t        Cantidad ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t</fieldset>
\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_b4e98bb8b31a602c241273e31343a2fda299034de78d21385e0cae6c40c96279->leave($__internal_b4e98bb8b31a602c241273e31343a2fda299034de78d21385e0cae6c40c96279_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d26b4cdb32a5cc3661e750793b43cac0264f2cf6da31e6a2c2ebc712a6378bd = $this->env->getExtension("native_profiler");
        $__internal_4d26b4cdb32a5cc3661e750793b43cac0264f2cf6da31e6a2c2ebc712a6378bd->enter($__internal_4d26b4cdb32a5cc3661e750793b43cac0264f2cf6da31e6a2c2ebc712a6378bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_4d26b4cdb32a5cc3661e750793b43cac0264f2cf6da31e6a2c2ebc712a6378bd->leave($__internal_4d26b4cdb32a5cc3661e750793b43cac0264f2cf6da31e6a2c2ebc712a6378bd_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:aprobarproducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  119 => 37,  106 => 30,  98 => 25,  90 => 20,  82 => 15,  78 => 14,  70 => 13,  61 => 9,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::basePop.html.twig' %}*/
/* {% block title %}Aprobar Producto{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well" data-original-title>*/
/* 	    	<h2><i class="icon-edit"></i>Aprobar Producto</h2>*/
/* 	     	<div class="box-icon">*/
/* 	        	<a href="{{ path('cotizaciones_datos') }}/{{ cotizacion }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/* 	    	</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<form action="{{ path('cotizaciones_aprobar_producto') }}/{{ id }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/* 			    {{ form_errors(form) }}*/
/* 			    <input type='hidden' name='id' value={{ id }}>*/
/* 			    <fieldset>*/
/* 					<table>*/
/* 						<tr>*/
/* 							<td> */
/* 						        Cantidad {{ form_widget(form.cantidad, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 							</td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td> */
/* 							    {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* 							</td>*/
/* 						</tr>*/
/* 					</table>*/
/* 			</fieldset>*/
/* 			{{ form_widget(form._token) }}*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*    */
/* {% endblock %}*/
