<?php

/* IncentivesOperacionesBundle:Proveedor:importar.html.twig */
class __TwigTemplate_51fb72ff04e86d08c8ba927ef0fc74dd01cec39f23c62c2803398a5707a4fbc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:importar.html.twig", 3);
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
        $__internal_8b7a5be47d0713440d44b49782341ff880f3feadbc33fa54e3422f48171937b9 = $this->env->getExtension("native_profiler");
        $__internal_8b7a5be47d0713440d44b49782341ff880f3feadbc33fa54e3422f48171937b9->enter($__internal_8b7a5be47d0713440d44b49782341ff880f3feadbc33fa54e3422f48171937b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:importar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b7a5be47d0713440d44b49782341ff880f3feadbc33fa54e3422f48171937b9->leave($__internal_8b7a5be47d0713440d44b49782341ff880f3feadbc33fa54e3422f48171937b9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_52fea801c664fbd95776ec3608f4143eaa71301eb0431068bc05a58664fd336f = $this->env->getExtension("native_profiler");
        $__internal_52fea801c664fbd95776ec3608f4143eaa71301eb0431068bc05a58664fd336f->enter($__internal_52fea801c664fbd95776ec3608f4143eaa71301eb0431068bc05a58664fd336f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nueva Convocatoria";
        
        $__internal_52fea801c664fbd95776ec3608f4143eaa71301eb0431068bc05a58664fd336f->leave($__internal_52fea801c664fbd95776ec3608f4143eaa71301eb0431068bc05a58664fd336f_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_0a99ab349a6899e11628f7ba5d6d8d722c6517150214e31335efe52da5117e3d = $this->env->getExtension("native_profiler");
        $__internal_0a99ab349a6899e11628f7ba5d6d8d722c6517150214e31335efe52da5117e3d->enter($__internal_0a99ab349a6899e11628f7ba5d6d8d722c6517150214e31335efe52da5117e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Carga Masiva de Proveedores</h2>
                        <a class=\"btn btn-mini btn-success\" style=\"margin-left: 20px\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("proveedores_formato");
        echo "\">
                            <i class=\"icon-zoom-in icon-white\"></i>
                            Formato
                        </a>
                        
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("proveedores");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("proveedores_importar");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
    
<div class=\"form-actions\">
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_0a99ab349a6899e11628f7ba5d6d8d722c6517150214e31335efe52da5117e3d->leave($__internal_0a99ab349a6899e11628f7ba5d6d8d722c6517150214e31335efe52da5117e3d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:importar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  101 => 32,  92 => 26,  87 => 24,  81 => 21,  75 => 20,  68 => 16,  59 => 10,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Nueva Convocatoria{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Carga Masiva de Proveedores</h2>*/
/*                         <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ path('proveedores_formato') }}">*/
/*                             <i class="icon-zoom-in icon-white"></i>*/
/*                             Formato*/
/*                         </a>*/
/*                         */
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('proveedores_importar') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
