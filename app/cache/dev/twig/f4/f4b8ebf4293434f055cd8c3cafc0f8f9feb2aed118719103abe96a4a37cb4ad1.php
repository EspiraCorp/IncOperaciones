<?php

/* IncentivesOperacionesBundle:Proveedor:cargaplan.html.twig */
class __TwigTemplate_1ed5e6bacddbe800a3090b6d6dd54486def2b38ff81f16182adfd21566168959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:cargaplan.html.twig", 2);
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
        $__internal_e238fbc1e54c67ea22c16f325d5e62768f98f10f06cb454bc8beb03689e79dd3 = $this->env->getExtension("native_profiler");
        $__internal_e238fbc1e54c67ea22c16f325d5e62768f98f10f06cb454bc8beb03689e79dd3->enter($__internal_e238fbc1e54c67ea22c16f325d5e62768f98f10f06cb454bc8beb03689e79dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:cargaplan.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e238fbc1e54c67ea22c16f325d5e62768f98f10f06cb454bc8beb03689e79dd3->leave($__internal_e238fbc1e54c67ea22c16f325d5e62768f98f10f06cb454bc8beb03689e79dd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47d05fcc46922573ac3e8210517545cbbc2eac5f1f067227fa715f60bf79d212 = $this->env->getExtension("native_profiler");
        $__internal_47d05fcc46922573ac3e8210517545cbbc2eac5f1f067227fa715f60bf79d212->enter($__internal_47d05fcc46922573ac3e8210517545cbbc2eac5f1f067227fa715f60bf79d212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cargar Plan de Acción";
        
        $__internal_47d05fcc46922573ac3e8210517545cbbc2eac5f1f067227fa715f60bf79d212->leave($__internal_47d05fcc46922573ac3e8210517545cbbc2eac5f1f067227fa715f60bf79d212_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_dfc4fc5bb6aa170b1c0b3110e210611de9ec731d0b10b2937f16eeabca162f49 = $this->env->getExtension("native_profiler");
        $__internal_dfc4fc5bb6aa170b1c0b3110e210611de9ec731d0b10b2937f16eeabca162f49->enter($__internal_dfc4fc5bb6aa170b1c0b3110e210611de9ec731d0b10b2937f16eeabca162f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Cargar Plan de Acción</h2>
                        <a class=\"btn btn-mini btn-success\" style=\"margin-left: 20px\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Calificacion/planAccion.doc"), "html", null, true);
        echo "\">
                                <i class=\" icon-white\"></i>
                                Formato
                            </a>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("proveedores_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_cargaplan", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "planaccion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "planaccion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacionproveedor", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacionproveedor", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset> 
<div class=\"form-actions\">
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_dfc4fc5bb6aa170b1c0b3110e210611de9ec731d0b10b2937f16eeabca162f49->leave($__internal_dfc4fc5bb6aa170b1c0b3110e210611de9ec731d0b10b2937f16eeabca162f49_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:cargaplan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  117 => 36,  113 => 35,  105 => 30,  100 => 28,  93 => 24,  88 => 22,  82 => 19,  76 => 18,  67 => 14,  59 => 9,  53 => 5,  47 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Cargar Plan de Acción{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Cargar Plan de Acción</h2>*/
/*                         <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ asset('Calificacion/planAccion.doc') }}">*/
/*                                 <i class=" icon-white"></i>*/
/*                                 Formato*/
/*                             </a>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores_datos') }}/{{ id }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('proveedores_cargaplan',  {"id": id}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.planaccion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.planaccion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.observacionproveedor, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.observacionproveedor, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset> */
/* <div class="form-actions">*/
/*     <input type="hidden" name="id" value="{{ id }}">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
