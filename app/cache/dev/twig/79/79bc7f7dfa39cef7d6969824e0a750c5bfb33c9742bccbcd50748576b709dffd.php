<?php

/* IncentivesBaseBundle:Usuarios:nuevo.html.twig */
class __TwigTemplate_f5c10233467fe40ad77a06abe529d252151cca1083bbd37a4d9fed71fcf0f91d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesBaseBundle:Usuarios:nuevo.html.twig", 3);
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
        $__internal_70af87f8b9557b568eb155cedec9c68919f40073706eb8dbbb082b2e1f981f7b = $this->env->getExtension("native_profiler");
        $__internal_70af87f8b9557b568eb155cedec9c68919f40073706eb8dbbb082b2e1f981f7b->enter($__internal_70af87f8b9557b568eb155cedec9c68919f40073706eb8dbbb082b2e1f981f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Usuarios:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70af87f8b9557b568eb155cedec9c68919f40073706eb8dbbb082b2e1f981f7b->leave($__internal_70af87f8b9557b568eb155cedec9c68919f40073706eb8dbbb082b2e1f981f7b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61c8a029de531deb7e01ffa0709b17d257bfc6f1b05c85757fdf0643c7fc3146 = $this->env->getExtension("native_profiler");
        $__internal_61c8a029de531deb7e01ffa0709b17d257bfc6f1b05c85757fdf0643c7fc3146->enter($__internal_61c8a029de531deb7e01ffa0709b17d257bfc6f1b05c85757fdf0643c7fc3146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Usuario";
        
        $__internal_61c8a029de531deb7e01ffa0709b17d257bfc6f1b05c85757fdf0643c7fc3146->leave($__internal_61c8a029de531deb7e01ffa0709b17d257bfc6f1b05c85757fdf0643c7fc3146_prof);

    }

    // line 6
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_47b819fe50b450e75712f0a8f4c098ae597041dec94c0e1e7936d47fd0e22748 = $this->env->getExtension("native_profiler");
        $__internal_47b819fe50b450e75712f0a8f4c098ae597041dec94c0e1e7936d47fd0e22748->enter($__internal_47b819fe50b450e75712f0a8f4c098ae597041dec94c0e1e7936d47fd0e22748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 7
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-edit\"></i>Usuario Nuevo</h2>
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
        echo $this->env->getExtension('routing')->getPath("usuarios_nuevo");
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
\t\t</div>\t\t<div class=\"control-group\">
\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t</div>
\t\t</div>

\t</fieldset>

\t
<div class=\"form-actions\">
\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_47b819fe50b450e75712f0a8f4c098ae597041dec94c0e1e7936d47fd0e22748->leave($__internal_47b819fe50b450e75712f0a8f4c098ae597041dec94c0e1e7936d47fd0e22748_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Usuarios:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 73,  178 => 71,  167 => 63,  162 => 61,  155 => 57,  150 => 55,  144 => 52,  139 => 50,  132 => 46,  127 => 44,  120 => 40,  115 => 38,  108 => 34,  103 => 32,  96 => 28,  91 => 26,  84 => 22,  79 => 20,  73 => 17,  67 => 16,  60 => 12,  53 => 7,  47 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Incentives/BaseBundle/Resources/views/Cuentas/register.html.twig #}*/
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Nuevo Usuario{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/* 						<h2><i class="icon-edit"></i>Usuario Nuevo</h2>*/
/* 						<div class="box-icon">*/
/* 							<a href="{{ path('usuarios') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* <div class="box-content">*/
/* <form action="{{ path('usuarios_nuevo') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
/* 		</div>		<div class="control-group">*/
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
/* 	*/
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
