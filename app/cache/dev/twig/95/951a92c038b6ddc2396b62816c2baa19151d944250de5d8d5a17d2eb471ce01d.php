<?php

/* IncentivesSolicitudesBundle:Solicitudes:observaciones.html.twig */
class __TwigTemplate_4258eb7c55b483d6143027b7b9b6ffb2c79a5ba8752c103ea402597223e41814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Solicitudes:observaciones.html.twig", 1);
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
        $__internal_bcf41768c893966a7afa7ab054216be5c90f339a09c70c184a14bedac1cd4c45 = $this->env->getExtension("native_profiler");
        $__internal_bcf41768c893966a7afa7ab054216be5c90f339a09c70c184a14bedac1cd4c45->enter($__internal_bcf41768c893966a7afa7ab054216be5c90f339a09c70c184a14bedac1cd4c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:observaciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf41768c893966a7afa7ab054216be5c90f339a09c70c184a14bedac1cd4c45->leave($__internal_bcf41768c893966a7afa7ab054216be5c90f339a09c70c184a14bedac1cd4c45_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b9788eb3c75d435e64219673ab06edc261c7d6b51eeb539f0797cb2d8ba17f8 = $this->env->getExtension("native_profiler");
        $__internal_5b9788eb3c75d435e64219673ab06edc261c7d6b51eeb539f0797cb2d8ba17f8->enter($__internal_5b9788eb3c75d435e64219673ab06edc261c7d6b51eeb539f0797cb2d8ba17f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Comentario";
        
        $__internal_5b9788eb3c75d435e64219673ab06edc261c7d6b51eeb539f0797cb2d8ba17f8->leave($__internal_5b9788eb3c75d435e64219673ab06edc261c7d6b51eeb539f0797cb2d8ba17f8_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_c8d1b2fbd82e164c77bff8ba844d111919b050ad37bc21e88c76e8223e9d2438 = $this->env->getExtension("native_profiler");
        $__internal_c8d1b2fbd82e164c77bff8ba844d111919b050ad37bc21e88c76e8223e9d2438->enter($__internal_c8d1b2fbd82e164c77bff8ba844d111919b050ad37bc21e88c76e8223e9d2438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
    <h2><i class=\"icon-edit\"></i>Agregar Comentario</h2>
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
        echo $this->env->getExtension('routing')->getPath("solicitud_observaciones");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"controls\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
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
        
        $__internal_c8d1b2fbd82e164c77bff8ba844d111919b050ad37bc21e88c76e8223e9d2438->leave($__internal_c8d1b2fbd82e164c77bff8ba844d111919b050ad37bc21e88c76e8223e9d2438_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c2314bbe9df54035699f27ce44c3d44935bcba9a01dee2bb6579724e43e63f7 = $this->env->getExtension("native_profiler");
        $__internal_6c2314bbe9df54035699f27ce44c3d44935bcba9a01dee2bb6579724e43e63f7->enter($__internal_6c2314bbe9df54035699f27ce44c3d44935bcba9a01dee2bb6579724e43e63f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_6c2314bbe9df54035699f27ce44c3d44935bcba9a01dee2bb6579724e43e63f7->leave($__internal_6c2314bbe9df54035699f27ce44c3d44935bcba9a01dee2bb6579724e43e63f7_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:observaciones.html.twig";
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
/* {% block title %}Agregar Comentario{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*     <h2><i class="icon-edit"></i>Agregar Comentario</h2>*/
/*      <div class="box-icon">*/
/*         <a href="{{ path('solicitudes_datos') }}/{{ solicitud }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*     </div>*/
/* </div>*/
/* <div class="box-content">*/
/*     <form action="{{ path('solicitud_observaciones') }}/{{ solicitud }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*         {{ form_errors(form) }}*/
/*         <fieldset>*/
/*             <div class="control-group">*/
/*                 {{ form_label(form.observacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                 <div class="controls">*/
/*                     {{ form_widget(form.observacion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
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
