<?php

/* IncentivesInventarioBundle:Logistica:cargardespachos.html.twig */
class __TwigTemplate_b4425ff850551b54cdd7e0e15d92ca8e1a095971184d2afcf40e56f1131d064f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Logistica:cargardespachos.html.twig", 3);
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
        $__internal_5a5c0dbb469e47b6657d0e98d88ce943daba2a9cf44b0de05ab12d90a5a49b26 = $this->env->getExtension("native_profiler");
        $__internal_5a5c0dbb469e47b6657d0e98d88ce943daba2a9cf44b0de05ab12d90a5a49b26->enter($__internal_5a5c0dbb469e47b6657d0e98d88ce943daba2a9cf44b0de05ab12d90a5a49b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Logistica:cargardespachos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a5c0dbb469e47b6657d0e98d88ce943daba2a9cf44b0de05ab12d90a5a49b26->leave($__internal_5a5c0dbb469e47b6657d0e98d88ce943daba2a9cf44b0de05ab12d90a5a49b26_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f00ab7f5773a8b4f8dea7d44b19a3552df937a49b42c94cbd9154a0c5511bf25 = $this->env->getExtension("native_profiler");
        $__internal_f00ab7f5773a8b4f8dea7d44b19a3552df937a49b42c94cbd9154a0c5511bf25->enter($__internal_f00ab7f5773a8b4f8dea7d44b19a3552df937a49b42c94cbd9154a0c5511bf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carga Despachos";
        
        $__internal_f00ab7f5773a8b4f8dea7d44b19a3552df937a49b42c94cbd9154a0c5511bf25->leave($__internal_f00ab7f5773a8b4f8dea7d44b19a3552df937a49b42c94cbd9154a0c5511bf25_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_2f7c5a21e99cb4dae16838f1515e698c4e4a31b1c0b18ba800fac65da13f5a1b = $this->env->getExtension("native_profiler");
        $__internal_2f7c5a21e99cb4dae16838f1515e698c4e4a31b1c0b18ba800fac65da13f5a1b->enter($__internal_2f7c5a21e99cb4dae16838f1515e698c4e4a31b1c0b18ba800fac65da13f5a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Carga Despachos</h2>                        
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("proveedores");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("inventario_cargardespachos");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
    
<div class=\"form-actions\">
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_2f7c5a21e99cb4dae16838f1515e698c4e4a31b1c0b18ba800fac65da13f5a1b->leave($__internal_2f7c5a21e99cb4dae16838f1515e698c4e4a31b1c0b18ba800fac65da13f5a1b_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Logistica:cargardespachos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  93 => 27,  84 => 21,  79 => 19,  73 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Carga Despachos{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Carga Despachos</h2>                        */
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('inventario_cargardespachos') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.excel, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.excel, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     */
/* <div class="form-actions">*/
/*     {{ form_widget(form.cargar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
