<?php

/* IncentivesSolicitudesBundle:Cotizaciones:nueva.html.twig */
class __TwigTemplate_d4cf2799c39df475686adc1e63e0bc4cf78741fd1a40606e4024c3b9a530f5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesSolicitudesBundle:Cotizaciones:nueva.html.twig", 1);
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
        $__internal_bb26d2531b48b705106cabea8733ee014ea3efb38a239ec908b2be3ba724a3a9 = $this->env->getExtension("native_profiler");
        $__internal_bb26d2531b48b705106cabea8733ee014ea3efb38a239ec908b2be3ba724a3a9->enter($__internal_bb26d2531b48b705106cabea8733ee014ea3efb38a239ec908b2be3ba724a3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb26d2531b48b705106cabea8733ee014ea3efb38a239ec908b2be3ba724a3a9->leave($__internal_bb26d2531b48b705106cabea8733ee014ea3efb38a239ec908b2be3ba724a3a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf70468702bc0d7e355e6ca14786b671c7d90e37250e0b9e9efe9119a201cdd7 = $this->env->getExtension("native_profiler");
        $__internal_cf70468702bc0d7e355e6ca14786b671c7d90e37250e0b9e9efe9119a201cdd7->enter($__internal_cf70468702bc0d7e355e6ca14786b671c7d90e37250e0b9e9efe9119a201cdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cotización Nueva";
        
        $__internal_cf70468702bc0d7e355e6ca14786b671c7d90e37250e0b9e9efe9119a201cdd7->leave($__internal_cf70468702bc0d7e355e6ca14786b671c7d90e37250e0b9e9efe9119a201cdd7_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_bc9bf25092b893f09a59ad58106acfa9d4d6e1b31e34a801fae7f68885dadf35 = $this->env->getExtension("native_profiler");
        $__internal_bc9bf25092b893f09a59ad58106acfa9d4d6e1b31e34a801fae7f68885dadf35->enter($__internal_bc9bf25092b893f09a59ad58106acfa9d4d6e1b31e34a801fae7f68885dadf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Cotización Nueva</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cotizaciones");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("cotizaciones_nueva");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'widget', array("id" => "fechaCreacion"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaVencimiento", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaVencimiento", array()), 'widget', array("id" => "fechaVencimiento"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logistica", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logistica", array()), 'widget', array("id" => "fechaCreacion"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condiciones", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condiciones", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>

    </fieldset>
<div class=\"form-actions\">
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_bc9bf25092b893f09a59ad58106acfa9d4d6e1b31e34a801fae7f68885dadf35->leave($__internal_bc9bf25092b893f09a59ad58106acfa9d4d6e1b31e34a801fae7f68885dadf35_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4899801b920474073270b80c1941d85b8fc3daec513b310ba7d76d761de14468 = $this->env->getExtension("native_profiler");
        $__internal_4899801b920474073270b80c1941d85b8fc3daec513b310ba7d76d761de14468->enter($__internal_4899801b920474073270b80c1941d85b8fc3daec513b310ba7d76d761de14468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fechaCreacion\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaVencimiento\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

";
        
        $__internal_4899801b920474073270b80c1941d85b8fc3daec513b310ba7d76d761de14468->leave($__internal_4899801b920474073270b80c1941d85b8fc3daec513b310ba7d76d761de14468_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 62,  162 => 61,  149 => 53,  144 => 51,  135 => 45,  130 => 43,  123 => 39,  118 => 37,  111 => 33,  106 => 31,  99 => 27,  94 => 25,  87 => 21,  82 => 19,  76 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Cotización Nueva{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Cotización Nueva</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('cotizaciones') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('cotizaciones_nueva') }}/{{ solicitud }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaCreacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaCreacion, { 'id': 'fechaCreacion' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaVencimiento, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaVencimiento, { 'id': 'fechaVencimiento' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.logistica, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.logistica, { 'id': 'fechaCreacion' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.condiciones, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.condiciones, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.observaciones, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.observaciones, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
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
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#fechaCreacion" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaVencimiento" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
