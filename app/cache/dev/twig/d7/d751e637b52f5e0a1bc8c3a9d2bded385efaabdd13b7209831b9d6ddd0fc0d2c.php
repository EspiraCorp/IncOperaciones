<?php

/* IncentivesOperacionesBundle:Convocatorias:cargaproveedor.html.twig */
class __TwigTemplate_7af2f3ff3c656e6b08e113cd94442eb5ab46aeddf9ba24054838f0c74ef4a280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Convocatorias:cargaproveedor.html.twig", 2);
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
        $__internal_8ea0dbf189b751a8b543bf9f8a7dad6bbbc26c07217246155ccd54bc5e8d1701 = $this->env->getExtension("native_profiler");
        $__internal_8ea0dbf189b751a8b543bf9f8a7dad6bbbc26c07217246155ccd54bc5e8d1701->enter($__internal_8ea0dbf189b751a8b543bf9f8a7dad6bbbc26c07217246155ccd54bc5e8d1701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Convocatorias:cargaproveedor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ea0dbf189b751a8b543bf9f8a7dad6bbbc26c07217246155ccd54bc5e8d1701->leave($__internal_8ea0dbf189b751a8b543bf9f8a7dad6bbbc26c07217246155ccd54bc5e8d1701_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b76fe4b7cc1eab3af250d47a48fca25e8fb77a0ae2cf35e07c287cb2ba49b1b7 = $this->env->getExtension("native_profiler");
        $__internal_b76fe4b7cc1eab3af250d47a48fca25e8fb77a0ae2cf35e07c287cb2ba49b1b7->enter($__internal_b76fe4b7cc1eab3af250d47a48fca25e8fb77a0ae2cf35e07c287cb2ba49b1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carga de Datos";
        
        $__internal_b76fe4b7cc1eab3af250d47a48fca25e8fb77a0ae2cf35e07c287cb2ba49b1b7->leave($__internal_b76fe4b7cc1eab3af250d47a48fca25e8fb77a0ae2cf35e07c287cb2ba49b1b7_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6c86de259250fb3c35241639fac1e9f1adcd591a25096335417ee8450c59336e = $this->env->getExtension("native_profiler");
        $__internal_6c86de259250fb3c35241639fac1e9f1adcd591a25096335417ee8450c59336e->enter($__internal_6c86de259250fb3c35241639fac1e9f1adcd591a25096335417ee8450c59336e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
    <h2><i class=\"icon-edit\"></i>Carga de Datos</h2>
     <div class=\"box-icon\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("convocatorias_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
    </div>
</div>
<div class=\"box-content\">
<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("convocatorias_cargaproveedor");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "archivo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "archivo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
<div class=\"form-actions\">
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_6c86de259250fb3c35241639fac1e9f1adcd591a25096335417ee8450c59336e->leave($__internal_6c86de259250fb3c35241639fac1e9f1adcd591a25096335417ee8450c59336e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Convocatorias:cargaproveedor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  108 => 31,  100 => 26,  95 => 24,  88 => 20,  83 => 18,  77 => 15,  69 => 14,  60 => 10,  53 => 5,  47 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Carga de Datos{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*     <h2><i class="icon-edit"></i>Carga de Datos</h2>*/
/*      <div class="box-icon">*/
/*         <a href="{{ path('convocatorias_datos') }}/{{ id }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*     </div>*/
/* </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('convocatorias_cargaproveedor') }}/{{ id }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.archivo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.archivo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.observacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.observacion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
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
