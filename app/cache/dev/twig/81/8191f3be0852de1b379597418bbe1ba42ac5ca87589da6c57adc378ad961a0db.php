<?php

/* IncentivesSolicitudesBundle:Requisiciones:verificar.html.twig */
class __TwigTemplate_718ab674cbee79161982d04e2ebf06f71354bf7646a47fd891db440036f9fd20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Requisiciones:verificar.html.twig", 1);
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
        $__internal_cb585ac9d892bd0ab611cd4ef7e62cba914279901cb1aa1e035cf13757e02051 = $this->env->getExtension("native_profiler");
        $__internal_cb585ac9d892bd0ab611cd4ef7e62cba914279901cb1aa1e035cf13757e02051->enter($__internal_cb585ac9d892bd0ab611cd4ef7e62cba914279901cb1aa1e035cf13757e02051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Requisiciones:verificar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb585ac9d892bd0ab611cd4ef7e62cba914279901cb1aa1e035cf13757e02051->leave($__internal_cb585ac9d892bd0ab611cd4ef7e62cba914279901cb1aa1e035cf13757e02051_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6133cbda5dff7b75882b2ee737cead54802291be2d1a413e7b863d2cf1990d53 = $this->env->getExtension("native_profiler");
        $__internal_6133cbda5dff7b75882b2ee737cead54802291be2d1a413e7b863d2cf1990d53->enter($__internal_6133cbda5dff7b75882b2ee737cead54802291be2d1a413e7b863d2cf1990d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Valores";
        
        $__internal_6133cbda5dff7b75882b2ee737cead54802291be2d1a413e7b863d2cf1990d53->leave($__internal_6133cbda5dff7b75882b2ee737cead54802291be2d1a413e7b863d2cf1990d53_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_efb34b3b158a4c8f1405eb19612b8df3834bad3f2daea487ef114b6d2b728d60 = $this->env->getExtension("native_profiler");
        $__internal_efb34b3b158a4c8f1405eb19612b8df3834bad3f2daea487ef114b6d2b728d60->enter($__internal_efb34b3b158a4c8f1405eb19612b8df3834bad3f2daea487ef114b6d2b728d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\" data-original-title>
\t    \t<h2><i class=\"icon-edit\"></i>Editar VAlores</h2>
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
        echo $this->env->getExtension('routing')->getPath("cotizaciones_valores");
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
\t\t\t\t\t\t        Valor Unidad ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorunidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td> Logistica Individual ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logistica", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t</fieldset>
\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_efb34b3b158a4c8f1405eb19612b8df3834bad3f2daea487ef114b6d2b728d60->leave($__internal_efb34b3b158a4c8f1405eb19612b8df3834bad3f2daea487ef114b6d2b728d60_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_433b3cbdf2976d8f4d80b727826210e33e433248084f9d39ef12aa09617fe238 = $this->env->getExtension("native_profiler");
        $__internal_433b3cbdf2976d8f4d80b727826210e33e433248084f9d39ef12aa09617fe238->enter($__internal_433b3cbdf2976d8f4d80b727826210e33e433248084f9d39ef12aa09617fe238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_433b3cbdf2976d8f4d80b727826210e33e433248084f9d39ef12aa09617fe238->leave($__internal_433b3cbdf2976d8f4d80b727826210e33e433248084f9d39ef12aa09617fe238_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Requisiciones:verificar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  134 => 46,  121 => 39,  113 => 34,  105 => 29,  98 => 25,  90 => 20,  82 => 15,  78 => 14,  70 => 13,  61 => 9,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::basePop.html.twig' %}*/
/* {% block title %}Editar Valores{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well" data-original-title>*/
/* 	    	<h2><i class="icon-edit"></i>Editar VAlores</h2>*/
/* 	     	<div class="box-icon">*/
/* 	        	<a href="{{ path('cotizaciones_datos') }}/{{ cotizacion }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/* 	    	</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<form action="{{ path('cotizaciones_valores') }}/{{ id }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
/* 						        Valor Unidad {{ form_widget(form.valorunidad, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 							</td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td> Logistica Individual {{ form_widget(form.logistica, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
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
