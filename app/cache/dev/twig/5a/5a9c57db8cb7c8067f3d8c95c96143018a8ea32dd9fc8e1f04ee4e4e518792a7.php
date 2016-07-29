<?php

/* IncentivesSolicitudesBundle:Cotizaciones:verificar.html.twig */
class __TwigTemplate_a7ebe686d1015745b67f833bd103824a84db8b5dd4762ba4b1341bdccd03e98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Cotizaciones:verificar.html.twig", 1);
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
        $__internal_8f8c2345a6914e2e26cb63a31f66007b5c78ec67e1686e08cefd75dfe9969629 = $this->env->getExtension("native_profiler");
        $__internal_8f8c2345a6914e2e26cb63a31f66007b5c78ec67e1686e08cefd75dfe9969629->enter($__internal_8f8c2345a6914e2e26cb63a31f66007b5c78ec67e1686e08cefd75dfe9969629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:verificar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f8c2345a6914e2e26cb63a31f66007b5c78ec67e1686e08cefd75dfe9969629->leave($__internal_8f8c2345a6914e2e26cb63a31f66007b5c78ec67e1686e08cefd75dfe9969629_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f3545dddefdcd09556763348df2f075026a0582ea0a6b8e20ff2c097bae041e = $this->env->getExtension("native_profiler");
        $__internal_3f3545dddefdcd09556763348df2f075026a0582ea0a6b8e20ff2c097bae041e->enter($__internal_3f3545dddefdcd09556763348df2f075026a0582ea0a6b8e20ff2c097bae041e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Valores";
        
        $__internal_3f3545dddefdcd09556763348df2f075026a0582ea0a6b8e20ff2c097bae041e->leave($__internal_3f3545dddefdcd09556763348df2f075026a0582ea0a6b8e20ff2c097bae041e_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_a610b2be7effdca492db17946f30a22c4e9956151376738d0046b667030d939e = $this->env->getExtension("native_profiler");
        $__internal_a610b2be7effdca492db17946f30a22c4e9956151376738d0046b667030d939e->enter($__internal_a610b2be7effdca492db17946f30a22c4e9956151376738d0046b667030d939e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
\t\t\t\t\t\t\t<td>Cantidad ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Valor Unidad ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorunidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t        <tr>
\t\t\t\t\t\t\t<td> Incremento ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incremento", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td> Logistica Individual ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logistica", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t</fieldset>
\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_a610b2be7effdca492db17946f30a22c4e9956151376738d0046b667030d939e->leave($__internal_a610b2be7effdca492db17946f30a22c4e9956151376738d0046b667030d939e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efb2038a426e9551976fcd09894ab25157857c123f7935ca6d12aa5db3217010 = $this->env->getExtension("native_profiler");
        $__internal_efb2038a426e9551976fcd09894ab25157857c123f7935ca6d12aa5db3217010->enter($__internal_efb2038a426e9551976fcd09894ab25157857c123f7935ca6d12aa5db3217010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_efb2038a426e9551976fcd09894ab25157857c123f7935ca6d12aa5db3217010->leave($__internal_efb2038a426e9551976fcd09894ab25157857c123f7935ca6d12aa5db3217010_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:verificar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  135 => 44,  122 => 37,  114 => 32,  107 => 28,  101 => 25,  95 => 22,  89 => 19,  82 => 15,  78 => 14,  70 => 13,  61 => 9,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
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
/* 							<td>Cantidad {{ form_widget(form.cantidad, { 'attr': {'class': 'input-xlarge focused'} }) }}</td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Valor Unidad {{ form_widget(form.valorunidad, { 'attr': {'class': 'input-xlarge focused'} }) }}</td>*/
/* 						</tr>*/
/* 				        <tr>*/
/* 							<td> Incremento {{ form_widget(form.incremento, { 'attr': {'class': 'input-xlarge focused'} }) }}</td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td> Logistica Individual {{ form_widget(form.logistica, { 'attr': {'class': 'input-xlarge focused'} }) }}</td>*/
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
