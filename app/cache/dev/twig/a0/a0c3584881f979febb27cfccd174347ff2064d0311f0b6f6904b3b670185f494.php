<?php

/* IncentivesSolicitudesBundle:Solicitudes:precotizacion.html.twig */
class __TwigTemplate_a64e2d79a85618597ae80885995d5c3492c22b100c058f077b5bf758bebc3221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Solicitudes:precotizacion.html.twig", 1);
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
        $__internal_2694e3a46ec625b73876a0fcc28ac527a74102429f744423da7ae67562720c3b = $this->env->getExtension("native_profiler");
        $__internal_2694e3a46ec625b73876a0fcc28ac527a74102429f744423da7ae67562720c3b->enter($__internal_2694e3a46ec625b73876a0fcc28ac527a74102429f744423da7ae67562720c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:precotizacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2694e3a46ec625b73876a0fcc28ac527a74102429f744423da7ae67562720c3b->leave($__internal_2694e3a46ec625b73876a0fcc28ac527a74102429f744423da7ae67562720c3b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_755e746bf62396bdca42bbe8555da90c9fe49d09b37c382616330f59469336d7 = $this->env->getExtension("native_profiler");
        $__internal_755e746bf62396bdca42bbe8555da90c9fe49d09b37c382616330f59469336d7->enter($__internal_755e746bf62396bdca42bbe8555da90c9fe49d09b37c382616330f59469336d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Precotización";
        
        $__internal_755e746bf62396bdca42bbe8555da90c9fe49d09b37c382616330f59469336d7->leave($__internal_755e746bf62396bdca42bbe8555da90c9fe49d09b37c382616330f59469336d7_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_3261181d358880c2d532afd8b1672d0f0c2f2bc7215c79e19b4490cff04ce5df = $this->env->getExtension("native_profiler");
        $__internal_3261181d358880c2d532afd8b1672d0f0c2f2bc7215c79e19b4490cff04ce5df->enter($__internal_3261181d358880c2d532afd8b1672d0f0c2f2bc7215c79e19b4490cff04ce5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
    <h2><i class=\"icon-edit\"></i>Agregar Precotización</h2>
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
        echo $this->env->getExtension('routing')->getPath("solicitudes_precotizacion");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "archivo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"controls\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "archivo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
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
        
        $__internal_3261181d358880c2d532afd8b1672d0f0c2f2bc7215c79e19b4490cff04ce5df->leave($__internal_3261181d358880c2d532afd8b1672d0f0c2f2bc7215c79e19b4490cff04ce5df_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e2e31b69d260349ef5be1d5fd2bd86639d200c0253955b1c899da08849be648 = $this->env->getExtension("native_profiler");
        $__internal_2e2e31b69d260349ef5be1d5fd2bd86639d200c0253955b1c899da08849be648->enter($__internal_2e2e31b69d260349ef5be1d5fd2bd86639d200c0253955b1c899da08849be648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_2e2e31b69d260349ef5be1d5fd2bd86639d200c0253955b1c899da08849be648->leave($__internal_2e2e31b69d260349ef5be1d5fd2bd86639d200c0253955b1c899da08849be648_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:precotizacion.html.twig";
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
/* {% block title %}Precotización{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*     <h2><i class="icon-edit"></i>Agregar Precotización</h2>*/
/*      <div class="box-icon">*/
/*         <a href="{{ path('solicitudes_datos') }}/{{ solicitud }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*     </div>*/
/* </div>*/
/* <div class="box-content">*/
/*     <form action="{{ path('solicitudes_precotizacion') }}/{{ solicitud }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*         {{ form_errors(form) }}*/
/*         <fieldset>*/
/*             <div class="control-group">*/
/*                 {{ form_label(form.archivo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                 <div class="controls">*/
/*                     {{ form_widget(form.archivo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
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
