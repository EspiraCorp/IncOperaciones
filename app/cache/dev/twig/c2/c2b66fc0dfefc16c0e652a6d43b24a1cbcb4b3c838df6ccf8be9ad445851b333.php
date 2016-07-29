<?php

/* IncentivesBaseBundle:Usuarios:editar.html.twig */
class __TwigTemplate_ce12612f1a90a611e4ddc45cc1cd3c2c9f0c80cdf17c283602247c18e0283750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesBaseBundle:Usuarios:editar.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28ba36dbcb0926a1a2969ea9490640e258b06e3b3ec4140cba5013e30b5eb4eb = $this->env->getExtension("native_profiler");
        $__internal_28ba36dbcb0926a1a2969ea9490640e258b06e3b3ec4140cba5013e30b5eb4eb->enter($__internal_28ba36dbcb0926a1a2969ea9490640e258b06e3b3ec4140cba5013e30b5eb4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Usuarios:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ba36dbcb0926a1a2969ea9490640e258b06e3b3ec4140cba5013e30b5eb4eb->leave($__internal_28ba36dbcb0926a1a2969ea9490640e258b06e3b3ec4140cba5013e30b5eb4eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cce40b26d21d505ef28aac8ea422294599ded696bc6592769a01edf289c35db = $this->env->getExtension("native_profiler");
        $__internal_8cce40b26d21d505ef28aac8ea422294599ded696bc6592769a01edf289c35db->enter($__internal_8cce40b26d21d505ef28aac8ea422294599ded696bc6592769a01edf289c35db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Usuario";
        
        $__internal_8cce40b26d21d505ef28aac8ea422294599ded696bc6592769a01edf289c35db->leave($__internal_8cce40b26d21d505ef28aac8ea422294599ded696bc6592769a01edf289c35db_prof);

    }

    // line 6
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_161323aab871ea69d0768ba13ba155ea245db12726321134443ef4a37b5c0000 = $this->env->getExtension("native_profiler");
        $__internal_161323aab871ea69d0768ba13ba155ea245db12726321134443ef4a37b5c0000->enter($__internal_161323aab871ea69d0768ba13ba155ea245db12726321134443ef4a37b5c0000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 7
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-edit\"></i>Editar Usuario</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("usuarios");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
<div class=\"box-content\">
<form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("usuarios_editar");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<fieldset>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupos", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupos", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>

\t</fieldset>

\t<input type='hidden' name='id' value=";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
<div class=\"form-actions\">
\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_161323aab871ea69d0768ba13ba155ea245db12726321134443ef4a37b5c0000->leave($__internal_161323aab871ea69d0768ba13ba155ea245db12726321134443ef4a37b5c0000_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Usuarios:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 74,  184 => 72,  179 => 70,  170 => 64,  165 => 62,  158 => 58,  153 => 56,  146 => 52,  141 => 50,  134 => 46,  129 => 44,  122 => 40,  117 => 38,  110 => 34,  105 => 32,  98 => 28,  93 => 26,  86 => 22,  81 => 20,  75 => 17,  67 => 16,  60 => 12,  53 => 7,  47 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Incentives/BaseBundle/Resources/views/Cuentas/register.html.twig #}*/
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Editar Usuario{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/* 						<h2><i class="icon-edit"></i>Editar Usuario</h2>*/
/* 						<div class="box-icon">*/
/* 							<a href="{{ path('usuarios') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* <div class="box-content">*/
/* <form action="{{ path('usuarios_editar') }}/{{ id }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/* 	{{ form_errors(form) }}*/
/* 	<fieldset>*/
/* 		<div class="control-group">*/
/* 			{{ form_label(form.nombre, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.nombre, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="control-group">*/
/* 			{{ form_label(form.username, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.username, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="control-group">*/
/* 			{{ form_label(form.email, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.email, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="control-group">*/
/* 			{{ form_label(form.grupos, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.grupos, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="control-group">*/
/* 			{{ form_label(form.proveedor, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.proveedor, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="control-group">*/
/* 			{{ form_label(form.cliente, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.cliente, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="control-group">*/
/* 			{{ form_label(form.password, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.password, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="control-group">*/
/* 			{{ form_label(form.isActive, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.isActive, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</fieldset>*/
/* */
/* 	<input type='hidden' name='id' value={{ id }}>*/
/* <div class="form-actions">*/
/* 	{{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
