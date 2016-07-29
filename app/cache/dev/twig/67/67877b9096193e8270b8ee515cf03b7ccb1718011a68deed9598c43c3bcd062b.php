<?php

/* IncentivesRedencionesBundle:Redencion:editarproducto.html.twig */
class __TwigTemplate_76d3e95976af6292ef79e54a74d772c0c0d294849d44404c821f450d0a26bb8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:editarproducto.html.twig", 1);
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
        $__internal_8c92e99bd3d0c8f5e6373d38ca78d37c0568b7310c33289cf0e6a6775717393d = $this->env->getExtension("native_profiler");
        $__internal_8c92e99bd3d0c8f5e6373d38ca78d37c0568b7310c33289cf0e6a6775717393d->enter($__internal_8c92e99bd3d0c8f5e6373d38ca78d37c0568b7310c33289cf0e6a6775717393d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:editarproducto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c92e99bd3d0c8f5e6373d38ca78d37c0568b7310c33289cf0e6a6775717393d->leave($__internal_8c92e99bd3d0c8f5e6373d38ca78d37c0568b7310c33289cf0e6a6775717393d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeabcb0bf7f73beb4405b9268ccb7ad29cdddfea49f14f455a2fa3aa0d41fc31 = $this->env->getExtension("native_profiler");
        $__internal_eeabcb0bf7f73beb4405b9268ccb7ad29cdddfea49f14f455a2fa3aa0d41fc31->enter($__internal_eeabcb0bf7f73beb4405b9268ccb7ad29cdddfea49f14f455a2fa3aa0d41fc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Producto Redencion";
        
        $__internal_eeabcb0bf7f73beb4405b9268ccb7ad29cdddfea49f14f455a2fa3aa0d41fc31->leave($__internal_eeabcb0bf7f73beb4405b9268ccb7ad29cdddfea49f14f455a2fa3aa0d41fc31_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d9e8f7478ebf085e27950e078131a65b58446f5b6f560184de6396fe74f57bb8 = $this->env->getExtension("native_profiler");
        $__internal_d9e8f7478ebf085e27950e078131a65b58446f5b6f560184de6396fe74f57bb8->enter($__internal_d9e8f7478ebf085e27950e078131a65b58446f5b6f560184de6396fe74f57bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Editar Producto Redencion</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("redenciones_datosredencion");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
    <h6>Recuerde que para poder editar el producto este debe existir en el catálogo. (No es necesario aprobarlo)</h6><br><br>
<form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("redenciones_editarproducto");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <input type='hidden' name='id' value=";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "html", null, true);
        echo ">
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productocatalogo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productocatalogo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
<div class=\"form-actions\">
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
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
        
        $__internal_d9e8f7478ebf085e27950e078131a65b58446f5b6f560184de6396fe74f57bb8->leave($__internal_d9e8f7478ebf085e27950e078131a65b58446f5b6f560184de6396fe74f57bb8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:editarproducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  100 => 27,  93 => 23,  88 => 21,  82 => 18,  78 => 17,  70 => 16,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Editar Producto Redencion{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Editar Producto Redencion</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('redenciones_datosredencion') }}/{{ redencion }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/*     <h6>Recuerde que para poder editar el producto este debe existir en el catálogo. (No es necesario aprobarlo)</h6><br><br>*/
/* <form action="{{ path('redenciones_editarproducto') }}/{{ redencion }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ redencion }}>*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.productocatalogo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.productocatalogo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
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
