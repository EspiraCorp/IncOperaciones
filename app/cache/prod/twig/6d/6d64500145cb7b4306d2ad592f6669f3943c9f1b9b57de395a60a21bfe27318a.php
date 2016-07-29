<?php

/* IncentivesSolicitudesBundle:Requisiciones:nueva.html.twig */
class __TwigTemplate_a0c4274c23eb72e551b606a93b7dce6352186ae83441d7c47032ebb544f24387 extends Twig_Template
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
        $__internal_b04b2496c02bd67630af4df1ccb59ccea7cc5b95f03338b7e6297e51d54bf6ba = $this->env->getExtension("native_profiler");
        $__internal_b04b2496c02bd67630af4df1ccb59ccea7cc5b95f03338b7e6297e51d54bf6ba->enter($__internal_b04b2496c02bd67630af4df1ccb59ccea7cc5b95f03338b7e6297e51d54bf6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Requisiciones:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b04b2496c02bd67630af4df1ccb59ccea7cc5b95f03338b7e6297e51d54bf6ba->leave($__internal_b04b2496c02bd67630af4df1ccb59ccea7cc5b95f03338b7e6297e51d54bf6ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53e2824c761155ebde077da7de87d8a74d88d1befec8eae0f6a79dd2cd4f0bfe = $this->env->getExtension("native_profiler");
        $__internal_53e2824c761155ebde077da7de87d8a74d88d1befec8eae0f6a79dd2cd4f0bfe->enter($__internal_53e2824c761155ebde077da7de87d8a74d88d1befec8eae0f6a79dd2cd4f0bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Requisición Nueva";
        
        $__internal_53e2824c761155ebde077da7de87d8a74d88d1befec8eae0f6a79dd2cd4f0bfe->leave($__internal_53e2824c761155ebde077da7de87d8a74d88d1befec8eae0f6a79dd2cd4f0bfe_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_b017a3f66b8e5d0244b1e11b352e04a003c343ee0df29901ddfb4acac876416d = $this->env->getExtension("native_profiler");
        $__internal_b017a3f66b8e5d0244b1e11b352e04a003c343ee0df29901ddfb4acac876416d->enter($__internal_b017a3f66b8e5d0244b1e11b352e04a003c343ee0df29901ddfb4acac876416d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
        
        $__internal_b017a3f66b8e5d0244b1e11b352e04a003c343ee0df29901ddfb4acac876416d->leave($__internal_b017a3f66b8e5d0244b1e11b352e04a003c343ee0df29901ddfb4acac876416d_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be2a3730310296ef95ece5765dfadd4d38e7d5e4caa5284c67badbdb6fdc1ba0 = $this->env->getExtension("native_profiler");
        $__internal_be2a3730310296ef95ece5765dfadd4d38e7d5e4caa5284c67badbdb6fdc1ba0->enter($__internal_be2a3730310296ef95ece5765dfadd4d38e7d5e4caa5284c67badbdb6fdc1ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fechaCreacion\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaVencimiento\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

";
        
        $__internal_be2a3730310296ef95ece5765dfadd4d38e7d5e4caa5284c67badbdb6fdc1ba0->leave($__internal_be2a3730310296ef95ece5765dfadd4d38e7d5e4caa5284c67badbdb6fdc1ba0_prof);

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
