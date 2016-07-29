<?php

/* IncentivesFacturacionBundle:Facturas:nuevaRequisiciones.html.twig */
class __TwigTemplate_7b270cce4c882284145fc7859f5d023a768ecd940959075b535065f0e6536495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Facturas:nuevaRequisiciones.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef603b4d46a5db82f9d39c190d0b257d5a7fa07334d23fdea8e1b0fd0aff536d = $this->env->getExtension("native_profiler");
        $__internal_ef603b4d46a5db82f9d39c190d0b257d5a7fa07334d23fdea8e1b0fd0aff536d->enter($__internal_ef603b4d46a5db82f9d39c190d0b257d5a7fa07334d23fdea8e1b0fd0aff536d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:nuevaRequisiciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef603b4d46a5db82f9d39c190d0b257d5a7fa07334d23fdea8e1b0fd0aff536d->leave($__internal_ef603b4d46a5db82f9d39c190d0b257d5a7fa07334d23fdea8e1b0fd0aff536d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69d7171b5a6bea863f456eb652f1ab1c27460662fe02630e6bb8177599456cda = $this->env->getExtension("native_profiler");
        $__internal_69d7171b5a6bea863f456eb652f1ab1c27460662fe02630e6bb8177599456cda->enter($__internal_69d7171b5a6bea863f456eb652f1ab1c27460662fe02630e6bb8177599456cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nueva Factura Requisiciones";
        
        $__internal_69d7171b5a6bea863f456eb652f1ab1c27460662fe02630e6bb8177599456cda->leave($__internal_69d7171b5a6bea863f456eb652f1ab1c27460662fe02630e6bb8177599456cda_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_8b94292bd0d5092da9785187b0cca390da8909885f046f68a30a4f99a8ae8d56 = $this->env->getExtension("native_profiler");
        $__internal_8b94292bd0d5092da9785187b0cca390da8909885f046f68a30a4f99a8ae8d56->enter($__internal_8b94292bd0d5092da9785187b0cca390da8909885f046f68a30a4f99a8ae8d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span8\">
    <div class=\"box-header well\" data-original-title>
        <h2><i class=\"icon-edit\"></i>Nueva Factura Requisiciones</h2>
            <div class=\"box-icon\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturas_listado", array("programa" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
            </div>
    </div>
<div class=\"box-content\">
    <table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
<form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("factura_requisicionesgenerar");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
    <fieldset>
        <input type='hidden' name='programa' value=";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()), "html", null, true);
        echo ">
        <div class=\"control-group\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("id" => "fecha", "value" => twig_date_format_filter($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio")), "Y-m-d")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("id" => "fecha", "value" => twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "Y-m-d")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'widget', array("id" => "fecha", "value" => twig_date_format_filter($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio")), "Y-m-d")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaFin", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaFin", array()), 'widget', array("id" => "fecha", "value" => twig_date_format_filter($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin")), "Y-m-d")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logistica", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logistica", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>

<div class=\"form-actions\">
    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_8b94292bd0d5092da9785187b0cca390da8909885f046f68a30a4f99a8ae8d56->leave($__internal_8b94292bd0d5092da9785187b0cca390da8909885f046f68a30a4f99a8ae8d56_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f4c890861a6a64d9deabb0c0d93bd1712048084bf51147ed56fd479599b7fae = $this->env->getExtension("native_profiler");
        $__internal_4f4c890861a6a64d9deabb0c0d93bd1712048084bf51147ed56fd479599b7fae->enter($__internal_4f4c890861a6a64d9deabb0c0d93bd1712048084bf51147ed56fd479599b7fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fecha\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaInicio\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaFin\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>


";
        
        $__internal_4f4c890861a6a64d9deabb0c0d93bd1712048084bf51147ed56fd479599b7fae->leave($__internal_4f4c890861a6a64d9deabb0c0d93bd1712048084bf51147ed56fd479599b7fae_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:nuevaRequisiciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 67,  172 => 66,  159 => 59,  154 => 57,  145 => 51,  140 => 49,  133 => 45,  128 => 43,  121 => 39,  116 => 37,  109 => 33,  104 => 31,  97 => 27,  92 => 25,  87 => 23,  80 => 21,  74 => 18,  70 => 17,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Nueva Factura Requisiciones{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span8">*/
/*     <div class="box-header well" data-original-title>*/
/*         <h2><i class="icon-edit"></i>Nueva Factura Requisiciones</h2>*/
/*             <div class="box-icon">*/
/*                 <a href="{{ path('facturas_listado', {"programa": programa.id }) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*             </div>*/
/*     </div>*/
/* <div class="box-content">*/
/*     <table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Programa</td><td>{{ programa.nombre }}</td></tr>*/
/* 						<tr><td>Cliente</td><td>{{ programa.cliente.nombre }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* <form action="{{ path('factura_requisicionesgenerar') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     <fieldset>*/
/*         <input type='hidden' name='programa' value={{ programa.id }}>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.periodo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.periodo, { 'id': 'fecha', 'value' :  fechaInicio|date("Y-m-d") }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fecha, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fecha, { 'id': 'fecha', 'value' :  fecha|date("Y-m-d") }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaInicio, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaInicio, { 'id': 'fecha', 'value' :  fechaInicio|date("Y-m-d") }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaFin, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaFin, { 'id': 'fecha', 'value' :  fechaFin|date("Y-m-d") }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.logistica, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.logistica, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/* */
/* <div class="form-actions">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#fecha" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaInicio" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaFin" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
