<?php

/* IncentivesRedencionesBundle:Redencion:justificacion.html.twig */
class __TwigTemplate_143f9d10e43d2f83e9870cb4d6139cfc54047c947f90284a29afe368b0576ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:justificacion.html.twig", 1);
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
        $__internal_b0a6e95412e9cdedba9234e6ea729510fe5929b8e986a1cf492dedcd436f54f4 = $this->env->getExtension("native_profiler");
        $__internal_b0a6e95412e9cdedba9234e6ea729510fe5929b8e986a1cf492dedcd436f54f4->enter($__internal_b0a6e95412e9cdedba9234e6ea729510fe5929b8e986a1cf492dedcd436f54f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:justificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0a6e95412e9cdedba9234e6ea729510fe5929b8e986a1cf492dedcd436f54f4->leave($__internal_b0a6e95412e9cdedba9234e6ea729510fe5929b8e986a1cf492dedcd436f54f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcb629bf2b4b70cf86f4abc78adcb9471af98c74d43608a73bcd28fca08308d0 = $this->env->getExtension("native_profiler");
        $__internal_dcb629bf2b4b70cf86f4abc78adcb9471af98c74d43608a73bcd28fca08308d0->enter($__internal_dcb629bf2b4b70cf86f4abc78adcb9471af98c74d43608a73bcd28fca08308d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Justificación Envio";
        
        $__internal_dcb629bf2b4b70cf86f4abc78adcb9471af98c74d43608a73bcd28fca08308d0->leave($__internal_dcb629bf2b4b70cf86f4abc78adcb9471af98c74d43608a73bcd28fca08308d0_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_14a4439d1aa4e74343c661f6fcc5d203d3ee0c971a4608390cb1a5ce950352ba = $this->env->getExtension("native_profiler");
        $__internal_14a4439d1aa4e74343c661f6fcc5d203d3ee0c971a4608390cb1a5ce950352ba->enter($__internal_14a4439d1aa4e74343c661f6fcc5d203d3ee0c971a4608390cb1a5ce950352ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Justificación Envio</h2>
                        <div class=\"box-icon\">
                            <a href=\"\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("redenciones_justificacion");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "id", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <input type='hidden' name='id' value=";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "id", array()), "html", null, true);
        echo ">
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "justificacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "justificacion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacionJustificacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacionJustificacion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        
<div class=\"form-actions\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_14a4439d1aa4e74343c661f6fcc5d203d3ee0c971a4608390cb1a5ce950352ba->leave($__internal_14a4439d1aa4e74343c661f6fcc5d203d3ee0c971a4608390cb1a5ce950352ba_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:justificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  109 => 33,  101 => 28,  96 => 26,  89 => 22,  84 => 20,  78 => 17,  74 => 16,  64 => 15,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Justificación Envio{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Justificación Envio</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('redenciones_justificacion') }}/{{ redencion.id }}/{{ planilla }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ redencion.id }}>*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.justificacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.justificacion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.observacionJustificacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.observacionJustificacion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         */
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
