<?php

/* IncentivesFacturacionBundle:Facturas:generar.html.twig */
class __TwigTemplate_68efc3a16afd48aa424ec2684bb25aef4a3241bca2cbba9b37b65bd29a007d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Facturas:generar.html.twig", 1);
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
        $__internal_0df2dd558e1ddcb7189dd58f37889a3aee908373716fd2941f3d93c96c4cf486 = $this->env->getExtension("native_profiler");
        $__internal_0df2dd558e1ddcb7189dd58f37889a3aee908373716fd2941f3d93c96c4cf486->enter($__internal_0df2dd558e1ddcb7189dd58f37889a3aee908373716fd2941f3d93c96c4cf486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:generar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0df2dd558e1ddcb7189dd58f37889a3aee908373716fd2941f3d93c96c4cf486->leave($__internal_0df2dd558e1ddcb7189dd58f37889a3aee908373716fd2941f3d93c96c4cf486_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b8cc49152922da53b817d57e8b9648648b62776e3dea912490bb1e5c9f53c99 = $this->env->getExtension("native_profiler");
        $__internal_1b8cc49152922da53b817d57e8b9648648b62776e3dea912490bb1e5c9f53c99->enter($__internal_1b8cc49152922da53b817d57e8b9648648b62776e3dea912490bb1e5c9f53c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nueva Factura";
        
        $__internal_1b8cc49152922da53b817d57e8b9648648b62776e3dea912490bb1e5c9f53c99->leave($__internal_1b8cc49152922da53b817d57e8b9648648b62776e3dea912490bb1e5c9f53c99_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_90337342ae6235ad155d2b80d508c3c34f9da1d9a7c1cfb16a4fee86b129e403 = $this->env->getExtension("native_profiler");
        $__internal_90337342ae6235ad155d2b80d508c3c34f9da1d9a7c1cfb16a4fee86b129e403->enter($__internal_90337342ae6235ad155d2b80d508c3c34f9da1d9a7c1cfb16a4fee86b129e403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title>
        <h2><i class=\"icon-edit\"></i>Nueva Factura</h2>
            <div class=\"box-icon\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturas_listado", array("programa" => (isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
            </div>
    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_generar", array("id" => (isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <input type='hidden' name='programa' value=";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "html", null, true);
        echo ">

        <div class=\"control-group\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("id" => "fecha"));
        echo "
            </div>
        </div>
         <div class=\"control-group\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("id" => "periodo"));
        echo "
            </div>
        </div>
    </fieldset>

    
<div class=\"form-actions\">
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
        
        $__internal_90337342ae6235ad155d2b80d508c3c34f9da1d9a7c1cfb16a4fee86b129e403->leave($__internal_90337342ae6235ad155d2b80d508c3c34f9da1d9a7c1cfb16a4fee86b129e403_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8115c59365018dca9d895afc5fbff74c1ed5380a8b13d3776544fba8539f807e = $this->env->getExtension("native_profiler");
        $__internal_8115c59365018dca9d895afc5fbff74c1ed5380a8b13d3776544fba8539f807e->enter($__internal_8115c59365018dca9d895afc5fbff74c1ed5380a8b13d3776544fba8539f807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fecha\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

";
        
        $__internal_8115c59365018dca9d895afc5fbff74c1ed5380a8b13d3776544fba8539f807e->leave($__internal_8115c59365018dca9d895afc5fbff74c1ed5380a8b13d3776544fba8539f807e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:generar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  130 => 45,  117 => 38,  112 => 36,  102 => 29,  97 => 27,  90 => 23,  85 => 21,  79 => 18,  74 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Nueva Factura{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title>*/
/*         <h2><i class="icon-edit"></i>Nueva Factura</h2>*/
/*             <div class="box-icon">*/
/*                 <a href="{{ path('facturas_listado', {"programa": programa}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*             </div>*/
/*     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('factura_generar', {"id": programa}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <input type='hidden' name='programa' value={{ programa }}>*/
/* */
/*         <div class="control-group">*/
/*             {{ form_label(form.fecha, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fecha, { 'id': 'fecha' }) }}*/
/*             </div>*/
/*         </div>*/
/*          <div class="control-group">*/
/*             {{ form_label(form.periodo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.periodo, { 'id': 'periodo' }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/* */
/*     */
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
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#fecha" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
