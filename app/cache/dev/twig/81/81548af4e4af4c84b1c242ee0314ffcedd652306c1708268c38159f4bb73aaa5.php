<?php

/* IncentivesSolicitudesBundle:Solicitudes:asignar.html.twig */
class __TwigTemplate_91ea354e7c4dce6e1370471358a78cf96895289432a168468eb33689ec41dfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Solicitudes:asignar.html.twig", 1);
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
        $__internal_0318850b3564813ba68655c0fcef10eceb5da5fdc2f9db734e8e992092c124cb = $this->env->getExtension("native_profiler");
        $__internal_0318850b3564813ba68655c0fcef10eceb5da5fdc2f9db734e8e992092c124cb->enter($__internal_0318850b3564813ba68655c0fcef10eceb5da5fdc2f9db734e8e992092c124cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:asignar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0318850b3564813ba68655c0fcef10eceb5da5fdc2f9db734e8e992092c124cb->leave($__internal_0318850b3564813ba68655c0fcef10eceb5da5fdc2f9db734e8e992092c124cb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d45a889a11f520e9e608f80c2c9742ec7191672bf831a12c207f3c5c54a9583 = $this->env->getExtension("native_profiler");
        $__internal_4d45a889a11f520e9e608f80c2c9742ec7191672bf831a12c207f3c5c54a9583->enter($__internal_4d45a889a11f520e9e608f80c2c9742ec7191672bf831a12c207f3c5c54a9583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignar Solicitud";
        
        $__internal_4d45a889a11f520e9e608f80c2c9742ec7191672bf831a12c207f3c5c54a9583->leave($__internal_4d45a889a11f520e9e608f80c2c9742ec7191672bf831a12c207f3c5c54a9583_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_ef75c19ef0816d5bb832db0676c75acc37ea7b9669ce84cc27c5d226d0ed9c9a = $this->env->getExtension("native_profiler");
        $__internal_ef75c19ef0816d5bb832db0676c75acc37ea7b9669ce84cc27c5d226d0ed9c9a->enter($__internal_ef75c19ef0816d5bb832db0676c75acc37ea7b9669ce84cc27c5d226d0ed9c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
    <h2><i class=\"icon-edit\"></i>Asignar Solicitud</h2>
     <div class=\"box-icon\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("solicitudes_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
    </div>
</div>
<div class=\"box-content\">
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("solicitudes_asignar");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <fieldset>
            <div class=\"control-group\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsable", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"controls\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsable", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                </div>
            </div>
            <div class=\"control-group\">
        </fieldset>
    <div class=\"form-actions\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    </div>
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
    </form>
</div>
</div>
 </div>
";
        
        $__internal_ef75c19ef0816d5bb832db0676c75acc37ea7b9669ce84cc27c5d226d0ed9c9a->leave($__internal_ef75c19ef0816d5bb832db0676c75acc37ea7b9669ce84cc27c5d226d0ed9c9a_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c63bb6ca7f743878e227a078d7ef5aabe8727a1f76d448cee46c70f44598491c = $this->env->getExtension("native_profiler");
        $__internal_c63bb6ca7f743878e227a078d7ef5aabe8727a1f76d448cee46c70f44598491c->enter($__internal_c63bb6ca7f743878e227a078d7ef5aabe8727a1f76d448cee46c70f44598491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_c63bb6ca7f743878e227a078d7ef5aabe8727a1f76d448cee46c70f44598491c->leave($__internal_c63bb6ca7f743878e227a078d7ef5aabe8727a1f76d448cee46c70f44598491c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:asignar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  116 => 34,  103 => 27,  98 => 25,  89 => 19,  84 => 17,  78 => 14,  70 => 13,  61 => 9,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::basePop.html.twig' %}*/
/* {% block title %}Asignar Solicitud{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*     <h2><i class="icon-edit"></i>Asignar Solicitud</h2>*/
/*      <div class="box-icon">*/
/*         <a href="{{ path('solicitudes_datos') }}/{{ solicitud }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*     </div>*/
/* </div>*/
/* <div class="box-content">*/
/*     <form action="{{ path('solicitudes_asignar') }}/{{ solicitud }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*         {{ form_errors(form) }}*/
/*         <fieldset>*/
/*             <div class="control-group">*/
/*                 {{ form_label(form.responsable, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                 <div class="controls">*/
/*                     {{ form_widget(form.responsable, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*         </fieldset>*/
/*     <div class="form-actions">*/
/*         {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/*     </div>*/
/*     {{ form_widget(form._token) }}*/
/*     </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*    */
/* {% endblock %}*/
/* */
