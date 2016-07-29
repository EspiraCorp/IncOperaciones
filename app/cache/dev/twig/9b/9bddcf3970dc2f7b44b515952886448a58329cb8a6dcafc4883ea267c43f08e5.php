<?php

/* IncentivesCatalogoBundle:Maestro:importar.html.twig */
class __TwigTemplate_17dcf7c8cb16e01943213da0a73dfab01a093eb897038145feb6162a56d543bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:importar.html.twig", 1);
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
        $__internal_8f32420dd5b0860aed866e1cc4f38d6e09fcf647236139a5e7a5575c3d4c9695 = $this->env->getExtension("native_profiler");
        $__internal_8f32420dd5b0860aed866e1cc4f38d6e09fcf647236139a5e7a5575c3d4c9695->enter($__internal_8f32420dd5b0860aed866e1cc4f38d6e09fcf647236139a5e7a5575c3d4c9695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:importar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f32420dd5b0860aed866e1cc4f38d6e09fcf647236139a5e7a5575c3d4c9695->leave($__internal_8f32420dd5b0860aed866e1cc4f38d6e09fcf647236139a5e7a5575c3d4c9695_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_697d1f6e86b26304a64b00cdc1fcca978060c0f2831a12032dedabec402ca1e8 = $this->env->getExtension("native_profiler");
        $__internal_697d1f6e86b26304a64b00cdc1fcca978060c0f2831a12032dedabec402ca1e8->enter($__internal_697d1f6e86b26304a64b00cdc1fcca978060c0f2831a12032dedabec402ca1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cargar Catalogo";
        
        $__internal_697d1f6e86b26304a64b00cdc1fcca978060c0f2831a12032dedabec402ca1e8->leave($__internal_697d1f6e86b26304a64b00cdc1fcca978060c0f2831a12032dedabec402ca1e8_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_f9860ac1606e1cd48eb1fff9cd2ad59c4a94727305b898de98e95d81b9c51c43 = $this->env->getExtension("native_profiler");
        $__internal_f9860ac1606e1cd48eb1fff9cd2ad59c4a94727305b898de98e95d81b9c51c43->enter($__internal_f9860ac1606e1cd48eb1fff9cd2ad59c4a94727305b898de98e95d81b9c51c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Carga Masiva Catalogo</h2>
                        <a class=\"btn btn-mini btn-success\" style=\"margin-left: 20px\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("productocatalogo_formato");
        echo "\">
                            <i class=\"icon-zoom-in icon-white\"></i>
                            Formato
                        </a>
                        
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_importar", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
    
<div class=\"form-actions\">
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_f9860ac1606e1cd48eb1fff9cd2ad59c4a94727305b898de98e95d81b9c51c43->leave($__internal_f9860ac1606e1cd48eb1fff9cd2ad59c4a94727305b898de98e95d81b9c51c43_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:importar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  101 => 30,  92 => 24,  87 => 22,  81 => 19,  75 => 18,  68 => 14,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Cargar Catalogo{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Carga Masiva Catalogo</h2>*/
/*                         <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ path('productocatalogo_formato') }}">*/
/*                             <i class="icon-zoom-in icon-white"></i>*/
/*                             Formato*/
/*                         </a>*/
/*                         */
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('catalogo_datos',  {"id": id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('productocatalogo_importar', {"id": id}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
