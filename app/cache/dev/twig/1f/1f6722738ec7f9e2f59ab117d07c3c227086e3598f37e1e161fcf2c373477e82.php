<?php

/* IncentivesSolicitudesBundle:Requisiciones:nueva.html.twig */
class __TwigTemplate_2bfe15fc033628b8410d477057698da90468ec1f22a86ee68ee473476b661ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesSolicitudesBundle:Requisiciones:nueva.html.twig", 1);
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
        $__internal_b892ff0d4933de4fa8b9545ffa4a111f0a22bc80f81544831bb025eddf55c32c = $this->env->getExtension("native_profiler");
        $__internal_b892ff0d4933de4fa8b9545ffa4a111f0a22bc80f81544831bb025eddf55c32c->enter($__internal_b892ff0d4933de4fa8b9545ffa4a111f0a22bc80f81544831bb025eddf55c32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Requisiciones:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b892ff0d4933de4fa8b9545ffa4a111f0a22bc80f81544831bb025eddf55c32c->leave($__internal_b892ff0d4933de4fa8b9545ffa4a111f0a22bc80f81544831bb025eddf55c32c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_509ff8e9dd073d434c6feaa17f84b6ac67f68b9574c83d4f7b22cd09b2dc1ddc = $this->env->getExtension("native_profiler");
        $__internal_509ff8e9dd073d434c6feaa17f84b6ac67f68b9574c83d4f7b22cd09b2dc1ddc->enter($__internal_509ff8e9dd073d434c6feaa17f84b6ac67f68b9574c83d4f7b22cd09b2dc1ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Requisición Nueva";
        
        $__internal_509ff8e9dd073d434c6feaa17f84b6ac67f68b9574c83d4f7b22cd09b2dc1ddc->leave($__internal_509ff8e9dd073d434c6feaa17f84b6ac67f68b9574c83d4f7b22cd09b2dc1ddc_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_c30b30c0a03d4cc2f6890c6deed80e55b32754668a3ebfda65fdd5fb3586a1a8 = $this->env->getExtension("native_profiler");
        $__internal_c30b30c0a03d4cc2f6890c6deed80e55b32754668a3ebfda65fdd5fb3586a1a8->enter($__internal_c30b30c0a03d4cc2f6890c6deed80e55b32754668a3ebfda65fdd5fb3586a1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Requisición Nueva</h2>
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
        echo $this->env->getExtension('routing')->getPath("requisiciones_nueva");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>

    </fieldset>
<div class=\"form-actions\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_c30b30c0a03d4cc2f6890c6deed80e55b32754668a3ebfda65fdd5fb3586a1a8->leave($__internal_c30b30c0a03d4cc2f6890c6deed80e55b32754668a3ebfda65fdd5fb3586a1a8_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab3d1c5a4fb8d2eec452eb77d968822a16276efe7e2d0277836c45e38142f9e2 = $this->env->getExtension("native_profiler");
        $__internal_ab3d1c5a4fb8d2eec452eb77d968822a16276efe7e2d0277836c45e38142f9e2->enter($__internal_ab3d1c5a4fb8d2eec452eb77d968822a16276efe7e2d0277836c45e38142f9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fechaCreacion\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaVencimiento\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

";
        
        $__internal_ab3d1c5a4fb8d2eec452eb77d968822a16276efe7e2d0277836c45e38142f9e2->leave($__internal_ab3d1c5a4fb8d2eec452eb77d968822a16276efe7e2d0277836c45e38142f9e2_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Requisiciones:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  126 => 43,  113 => 35,  108 => 33,  99 => 27,  94 => 25,  87 => 21,  82 => 19,  76 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Requisición Nueva{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Requisición Nueva</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('cotizaciones') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('requisiciones_nueva') }}/{{ solicitud }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaCreacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaCreacion, { 'id': 'fechaCreacion' }) }}*/
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
