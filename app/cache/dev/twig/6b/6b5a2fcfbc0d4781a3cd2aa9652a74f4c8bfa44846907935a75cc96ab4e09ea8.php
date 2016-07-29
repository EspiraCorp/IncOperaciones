<?php

/* IncentivesFacturacionBundle:Presupuesto:editar.html.twig */
class __TwigTemplate_eb7d4f1b3f1ed8a72a56304e70eccb93d460c53bffd2a3775572c7af6b09634a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Presupuesto:editar.html.twig", 1);
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
        $__internal_3692c55f16d06a143635591db387f80c55b3e75b2af5a33a6ac564c43cbf347f = $this->env->getExtension("native_profiler");
        $__internal_3692c55f16d06a143635591db387f80c55b3e75b2af5a33a6ac564c43cbf347f->enter($__internal_3692c55f16d06a143635591db387f80c55b3e75b2af5a33a6ac564c43cbf347f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Presupuesto:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3692c55f16d06a143635591db387f80c55b3e75b2af5a33a6ac564c43cbf347f->leave($__internal_3692c55f16d06a143635591db387f80c55b3e75b2af5a33a6ac564c43cbf347f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0a6598cd8392c426cb248deb075f76602b69dbed939981dfa3fcf3d1e512378 = $this->env->getExtension("native_profiler");
        $__internal_f0a6598cd8392c426cb248deb075f76602b69dbed939981dfa3fcf3d1e512378->enter($__internal_f0a6598cd8392c426cb248deb075f76602b69dbed939981dfa3fcf3d1e512378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Presupuesto";
        
        $__internal_f0a6598cd8392c426cb248deb075f76602b69dbed939981dfa3fcf3d1e512378->leave($__internal_f0a6598cd8392c426cb248deb075f76602b69dbed939981dfa3fcf3d1e512378_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_ae4c5f1308f24d163a4008da4bb31ccfe273d2cc96c6563e75bd4c2e8ce5c41e = $this->env->getExtension("native_profiler");
        $__internal_ae4c5f1308f24d163a4008da4bb31ccfe273d2cc96c6563e75bd4c2e8ce5c41e->enter($__internal_ae4c5f1308f24d163a4008da4bb31ccfe273d2cc96c6563e75bd4c2e8ce5c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Editar Presupuesto</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("presupuesto_detalle", array("id" => 30));
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            * ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
         <div class=\"control-group\">
            * ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensual", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensual", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        

    </fieldset>
    <div class=\"row-fluid sortable ui-sortable\">

    </div>  
<div class=\"form-actions\">
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_ae4c5f1308f24d163a4008da4bb31ccfe273d2cc96c6563e75bd4c2e8ce5c41e->leave($__internal_ae4c5f1308f24d163a4008da4bb31ccfe273d2cc96c6563e75bd4c2e8ce5c41e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36652cf039b78d8e4a16f466ac1d4184a74f7a58b3617ef94efa7b67f649127e = $this->env->getExtension("native_profiler");
        $__internal_36652cf039b78d8e4a16f466ac1d4184a74f7a58b3617ef94efa7b67f649127e->enter($__internal_36652cf039b78d8e4a16f466ac1d4184a74f7a58b3617ef94efa7b67f649127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    
    ";
        // line 54
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_36652cf039b78d8e4a16f466ac1d4184a74f7a58b3617ef94efa7b67f649127e->leave($__internal_36652cf039b78d8e4a16f466ac1d4184a74f7a58b3617ef94efa7b67f649127e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Presupuesto:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 54,  141 => 53,  135 => 52,  122 => 45,  117 => 43,  104 => 33,  99 => 31,  92 => 27,  87 => 25,  80 => 21,  75 => 19,  69 => 16,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Editar Presupuesto{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Editar Presupuesto</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path("presupuesto_detalle", {"id": 30}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="" method="POST" class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.valor, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.valor   , { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*          <div class="control-group">*/
/*             * {{ form_label(form.mensual, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.mensual , { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.descripcion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.descripcion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         */
/* */
/*     </fieldset>*/
/*     <div class="row-fluid sortable ui-sortable">*/
/* */
/*     </div>  */
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
/*     */
/*     {{ parent() }}*/
/* */
/* {% endblock %}*/
