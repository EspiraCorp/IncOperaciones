<?php

/* IncentivesCatalogoBundle:Catalogos:intervalosEditar.html.twig */
class __TwigTemplate_b2a0cd8a933a6ca395bb1f2e3c44e0947d12f0e882a5ddad707cdaf962abb193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesCatalogoBundle:Catalogos:intervalosEditar.html.twig", 1);
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
        $__internal_6c2396faf4e93643b12420a577d5f2147014b97bb6169793015253f79dfec97b = $this->env->getExtension("native_profiler");
        $__internal_6c2396faf4e93643b12420a577d5f2147014b97bb6169793015253f79dfec97b->enter($__internal_6c2396faf4e93643b12420a577d5f2147014b97bb6169793015253f79dfec97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:intervalosEditar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c2396faf4e93643b12420a577d5f2147014b97bb6169793015253f79dfec97b->leave($__internal_6c2396faf4e93643b12420a577d5f2147014b97bb6169793015253f79dfec97b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc22e2bd389af39c5de4c48da1f4febeece724a1a3589188368972d3b48a8856 = $this->env->getExtension("native_profiler");
        $__internal_cc22e2bd389af39c5de4c48da1f4febeece724a1a3589188368972d3b48a8856->enter($__internal_cc22e2bd389af39c5de4c48da1f4febeece724a1a3589188368972d3b48a8856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Intervalo";
        
        $__internal_cc22e2bd389af39c5de4c48da1f4febeece724a1a3589188368972d3b48a8856->leave($__internal_cc22e2bd389af39c5de4c48da1f4febeece724a1a3589188368972d3b48a8856_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_4cccb61cacf515dfec5d9c02efc3b75d2dec37ccf8591bef9f53560f6cb6ac4f = $this->env->getExtension("native_profiler");
        $__internal_4cccb61cacf515dfec5d9c02efc3b75d2dec37ccf8591bef9f53560f6cb6ac4f->enter($__internal_4cccb61cacf515dfec5d9c02efc3b75d2dec37ccf8591bef9f53560f6cb6ac4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Editar Intervalo</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("catalogo_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("catalogo_intervaloseditar");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minimo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minimo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maximo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maximo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntos", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntos", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
<div class=\"form-actions\">
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_4cccb61cacf515dfec5d9c02efc3b75d2dec37ccf8591bef9f53560f6cb6ac4f->leave($__internal_4cccb61cacf515dfec5d9c02efc3b75d2dec37ccf8591bef9f53560f6cb6ac4f_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:intervalosEditar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  122 => 37,  116 => 34,  111 => 32,  104 => 28,  99 => 26,  92 => 22,  87 => 20,  81 => 17,  77 => 16,  69 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::basePop.html.twig' %}*/
/* */
/* {% block title %}Agregar Intervalo{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Editar Intervalo</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('catalogo_datos') }}/{{ catalogo }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('catalogo_intervaloseditar') }}/{{ id }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.minimo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.minimo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.maximo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.maximo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.puntos, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.puntos, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
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
