<?php

/* IncentivesOperacionesBundle:Convocatorias:archivo.html.twig */
class __TwigTemplate_57d2744efd38000c4f52ebcb968b6793fb400e35ecd19bb9fe36773e21db49d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesOperacionesBundle:Convocatorias:archivo.html.twig", 1);
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
        $__internal_8d2595180b9f5be5380ee426cbc3d4d9ffa63ac6d7711d0e4b940c2427dbeeea = $this->env->getExtension("native_profiler");
        $__internal_8d2595180b9f5be5380ee426cbc3d4d9ffa63ac6d7711d0e4b940c2427dbeeea->enter($__internal_8d2595180b9f5be5380ee426cbc3d4d9ffa63ac6d7711d0e4b940c2427dbeeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Convocatorias:archivo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d2595180b9f5be5380ee426cbc3d4d9ffa63ac6d7711d0e4b940c2427dbeeea->leave($__internal_8d2595180b9f5be5380ee426cbc3d4d9ffa63ac6d7711d0e4b940c2427dbeeea_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_597f747f2c84eeea594350b071abcc4be21c8be4c28f83946aded3de100476fc = $this->env->getExtension("native_profiler");
        $__internal_597f747f2c84eeea594350b071abcc4be21c8be4c28f83946aded3de100476fc->enter($__internal_597f747f2c84eeea594350b071abcc4be21c8be4c28f83946aded3de100476fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Archivo";
        
        $__internal_597f747f2c84eeea594350b071abcc4be21c8be4c28f83946aded3de100476fc->leave($__internal_597f747f2c84eeea594350b071abcc4be21c8be4c28f83946aded3de100476fc_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_1c403fc0c310e49b6f8b00e5fc0ed9b9b4756c24661b362ee8433abae9f2f857 = $this->env->getExtension("native_profiler");
        $__internal_1c403fc0c310e49b6f8b00e5fc0ed9b9b4756c24661b362ee8433abae9f2f857->enter($__internal_1c403fc0c310e49b6f8b00e5fc0ed9b9b4756c24661b362ee8433abae9f2f857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
    <h2><i class=\"icon-edit\"></i>Agregar Archivo</h2>
     <div class=\"box-icon\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("convocatorias_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
    </div>
</div>
<div class=\"box-content\">
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("convocatorias_archivos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "html", null, true);
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
        
        $__internal_1c403fc0c310e49b6f8b00e5fc0ed9b9b4756c24661b362ee8433abae9f2f857->leave($__internal_1c403fc0c310e49b6f8b00e5fc0ed9b9b4756c24661b362ee8433abae9f2f857_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8226acda4a1564b13d794c526f499353e4fc6cebfbcf802727768d982d79f15c = $this->env->getExtension("native_profiler");
        $__internal_8226acda4a1564b13d794c526f499353e4fc6cebfbcf802727768d982d79f15c->enter($__internal_8226acda4a1564b13d794c526f499353e4fc6cebfbcf802727768d982d79f15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_8226acda4a1564b13d794c526f499353e4fc6cebfbcf802727768d982d79f15c->leave($__internal_8226acda4a1564b13d794c526f499353e4fc6cebfbcf802727768d982d79f15c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Convocatorias:archivo.html.twig";
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
/* {% block title %}Agregar Archivo{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*     <h2><i class="icon-edit"></i>Agregar Archivo</h2>*/
/*      <div class="box-icon">*/
/*         <a href="{{ path('convocatorias_datos') }}/{{ convocatoria }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*     </div>*/
/* </div>*/
/* <div class="box-content">*/
/*     <form action="{{ path('convocatorias_archivos') }}/{{ convocatoria }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
