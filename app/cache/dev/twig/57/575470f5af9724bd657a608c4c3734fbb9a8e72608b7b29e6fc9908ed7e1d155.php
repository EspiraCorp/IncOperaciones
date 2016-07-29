<?php

/* IncentivesCatalogoBundle:Programa:editar.html.twig */
class __TwigTemplate_dfd480a5f93abbc768d33538c60f4094ac6036c72f736fcb20d4cb7344726332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Programa:editar.html.twig", 1);
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
        $__internal_a2f77eb1a66f182af8ef4cc48eeadb6640932ec94ad42c69e3e5969f3de53c55 = $this->env->getExtension("native_profiler");
        $__internal_a2f77eb1a66f182af8ef4cc48eeadb6640932ec94ad42c69e3e5969f3de53c55->enter($__internal_a2f77eb1a66f182af8ef4cc48eeadb6640932ec94ad42c69e3e5969f3de53c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Programa:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f77eb1a66f182af8ef4cc48eeadb6640932ec94ad42c69e3e5969f3de53c55->leave($__internal_a2f77eb1a66f182af8ef4cc48eeadb6640932ec94ad42c69e3e5969f3de53c55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_056e5b71d80780416af02ff2e87a9741aee556e018a1dd2cdc5c466bea409627 = $this->env->getExtension("native_profiler");
        $__internal_056e5b71d80780416af02ff2e87a9741aee556e018a1dd2cdc5c466bea409627->enter($__internal_056e5b71d80780416af02ff2e87a9741aee556e018a1dd2cdc5c466bea409627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesCatalogoBundle:Producto:nuevo";
        
        $__internal_056e5b71d80780416af02ff2e87a9741aee556e018a1dd2cdc5c466bea409627->leave($__internal_056e5b71d80780416af02ff2e87a9741aee556e018a1dd2cdc5c466bea409627_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_0d510a1123a054ca59f1d19c953fbbd242145a159e0ed15d14f9b79427c927ce = $this->env->getExtension("native_profiler");
        $__internal_0d510a1123a054ca59f1d19c953fbbd242145a159e0ed15d14f9b79427c927ce->enter($__internal_0d510a1123a054ca59f1d19c953fbbd242145a159e0ed15d14f9b79427c927ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Editar Programa</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programa_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("programa_editar");
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
            * ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'widget', array("id" => "fechaInicio"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafin", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafin", array()), 'widget', array("id" => "fechaFin"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iva", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                Si ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iva", array()), 0, array(), "array"), 'widget');
        echo "
                No ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iva", array()), 1, array(), "array"), 'widget');
        echo "
             </div>
        </div> 
        <div class=\"control-group\">
            * ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centrocostos", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centrocostos", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div> 
        <div class=\"control-group\">
            * ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diasentrega", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diasentrega", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>  

    </fieldset>
    <div class=\"row-fluid sortable ui-sortable\">

    </div>  
<div class=\"form-actions\">
    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_0d510a1123a054ca59f1d19c953fbbd242145a159e0ed15d14f9b79427c927ce->leave($__internal_0d510a1123a054ca59f1d19c953fbbd242145a159e0ed15d14f9b79427c927ce_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fd119d04da3c0cfa211b9aeb9e651302b300c4e25e657d2beb0c05e48899928 = $this->env->getExtension("native_profiler");
        $__internal_0fd119d04da3c0cfa211b9aeb9e651302b300c4e25e657d2beb0c05e48899928->enter($__internal_0fd119d04da3c0cfa211b9aeb9e651302b300c4e25e657d2beb0c05e48899928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    
    ";
        // line 79
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fechaInicio\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaFin\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

";
        
        $__internal_0fd119d04da3c0cfa211b9aeb9e651302b300c4e25e657d2beb0c05e48899928->leave($__internal_0fd119d04da3c0cfa211b9aeb9e651302b300c4e25e657d2beb0c05e48899928_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Programa:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 79,  201 => 78,  195 => 77,  182 => 70,  177 => 68,  165 => 59,  160 => 57,  153 => 53,  148 => 51,  141 => 47,  137 => 46,  132 => 44,  125 => 40,  120 => 38,  113 => 34,  108 => 32,  101 => 28,  96 => 26,  89 => 22,  84 => 20,  78 => 17,  74 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}IncentivesCatalogoBundle:Producto:nuevo{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Editar Programa</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('programa_datos', {'id': id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('programa_editar') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.nombre, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.nombre, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.descripcion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.descripcion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.fechainicio, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechainicio, { 'id': 'fechaInicio' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.fechafin, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechafin, { 'id': 'fechaFin' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.iva, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 Si {{ form_widget(form.iva[0]) }}*/
/*                 No {{ form_widget(form.iva[1]) }}*/
/*              </div>*/
/*         </div> */
/*         <div class="control-group">*/
/*             * {{ form_label(form.centrocostos, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.centrocostos, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div> */
/*         <div class="control-group">*/
/*             * {{ form_label(form.diasentrega, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.diasentrega, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>  */
/* */
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
/* {% block javascripts %}*/
/*     */
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#fechaInicio" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaFin" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* {% endblock %}*/
