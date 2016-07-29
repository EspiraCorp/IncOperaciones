<?php

/* IncentivesFacturacionBundle:Facturas:agregarlogistica.html.twig */
class __TwigTemplate_c6aeecdd32801884f567c808c95bbbafc4098eb7c9709f6c22dc8b5aad95d6c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesFacturacionBundle:Facturas:agregarlogistica.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basePop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c041500bb12fa2fca7fc08b0568827995aef0e0b2396fba0859800c13f92d478 = $this->env->getExtension("native_profiler");
        $__internal_c041500bb12fa2fca7fc08b0568827995aef0e0b2396fba0859800c13f92d478->enter($__internal_c041500bb12fa2fca7fc08b0568827995aef0e0b2396fba0859800c13f92d478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:agregarlogistica.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c041500bb12fa2fca7fc08b0568827995aef0e0b2396fba0859800c13f92d478->leave($__internal_c041500bb12fa2fca7fc08b0568827995aef0e0b2396fba0859800c13f92d478_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc0ba465c26c5ae46d70c96a84fe3d9c5dc94080a68b5a41836d0a928cfbc917 = $this->env->getExtension("native_profiler");
        $__internal_cc0ba465c26c5ae46d70c96a84fe3d9c5dc94080a68b5a41836d0a928cfbc917->enter($__internal_cc0ba465c26c5ae46d70c96a84fe3d9c5dc94080a68b5a41836d0a928cfbc917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Logistica";
        
        $__internal_cc0ba465c26c5ae46d70c96a84fe3d9c5dc94080a68b5a41836d0a928cfbc917->leave($__internal_cc0ba465c26c5ae46d70c96a84fe3d9c5dc94080a68b5a41836d0a928cfbc917_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_84daff286032e7facdb534f1bc0fccd6065cef25ecc84995a1d9cc7a67cb2f7b = $this->env->getExtension("native_profiler");
        $__internal_84daff286032e7facdb534f1bc0fccd6065cef25ecc84995a1d9cc7a67cb2f7b->enter($__internal_84daff286032e7facdb534f1bc0fccd6065cef25ecc84995a1d9cc7a67cb2f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Agregar Logistica</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("factura_agregarlogistica");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <input type='hidden' name='id' value=";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorUnitario", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorUnitario", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
    <div class=\"row-fluid sortable ui-sortable\">

    </div>  
<div class=\"form-actions\">
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_84daff286032e7facdb534f1bc0fccd6065cef25ecc84995a1d9cc7a67cb2f7b->leave($__internal_84daff286032e7facdb534f1bc0fccd6065cef25ecc84995a1d9cc7a67cb2f7b_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:agregarlogistica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  125 => 42,  114 => 34,  109 => 32,  102 => 28,  97 => 26,  90 => 22,  85 => 20,  79 => 17,  75 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::basePop.html.twig" %}*/
/* */
/* {% block title %}Agregar Logistica{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Agregar Logistica</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('factura_datos', {'id': id} ) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('factura_agregarlogistica') }}/{{ id }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.descripcion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.descripcion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.cantidad, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.cantidad, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.valorUnitario, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.valorUnitario, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     <div class="row-fluid sortable ui-sortable">*/
/* */
/*     </div>  */
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
/* */
