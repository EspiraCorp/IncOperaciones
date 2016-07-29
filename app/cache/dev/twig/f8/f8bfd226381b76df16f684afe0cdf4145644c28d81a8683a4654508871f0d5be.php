<?php

/* IncentivesInventarioBundle:Inventario:costoslogistica.html.twig */
class __TwigTemplate_fd247de0a6afaddbaa2cfd204c8e61f0ad7a42dd9ccfd6f7cb4a653a9c982d14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:costoslogistica.html.twig", 1);
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
        $__internal_0e701c6a6d42741077979bc4a24105f3b8ada3903fc7524113a19b1625fc5c36 = $this->env->getExtension("native_profiler");
        $__internal_0e701c6a6d42741077979bc4a24105f3b8ada3903fc7524113a19b1625fc5c36->enter($__internal_0e701c6a6d42741077979bc4a24105f3b8ada3903fc7524113a19b1625fc5c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:costoslogistica.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e701c6a6d42741077979bc4a24105f3b8ada3903fc7524113a19b1625fc5c36->leave($__internal_0e701c6a6d42741077979bc4a24105f3b8ada3903fc7524113a19b1625fc5c36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25e59f905f6e662b1bcf2737969c7fc56ad0827adfb87a1e259ab2cd29ec6ba1 = $this->env->getExtension("native_profiler");
        $__internal_25e59f905f6e662b1bcf2737969c7fc56ad0827adfb87a1e259ab2cd29ec6ba1->enter($__internal_25e59f905f6e662b1bcf2737969c7fc56ad0827adfb87a1e259ab2cd29ec6ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Costos Logistica";
        
        $__internal_25e59f905f6e662b1bcf2737969c7fc56ad0827adfb87a1e259ab2cd29ec6ba1->leave($__internal_25e59f905f6e662b1bcf2737969c7fc56ad0827adfb87a1e259ab2cd29ec6ba1_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_44985b373408081918dfb3d61abb852d62d4ff4783b4e1e616c1d34650b482ad = $this->env->getExtension("native_profiler");
        $__internal_44985b373408081918dfb3d61abb852d62d4ff4783b4e1e616c1d34650b482ad->enter($__internal_44985b373408081918dfb3d61abb852d62d4ff4783b4e1e616c1d34650b482ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Costos Logistica
        <div class=\"box-icon\">
                </div>
    </div>
</div>

  <div class=\"box span12\">

<div class=\"box-content\">
<form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inventario_planilla_costos", array("planilla" => (isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorUnitario", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorUnitario", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        
    </fieldset>
 <div class=\"form-actions\">
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>

  ";
        
        $__internal_44985b373408081918dfb3d61abb852d62d4ff4783b4e1e616c1d34650b482ad->leave($__internal_44985b373408081918dfb3d61abb852d62d4ff4783b4e1e616c1d34650b482ad_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:costoslogistica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  116 => 41,  107 => 35,  102 => 33,  95 => 29,  90 => 27,  83 => 23,  78 => 21,  72 => 18,  66 => 17,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Costos Logistica{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Costos Logistica*/
/*         <div class="box-icon">*/
/*                 </div>*/
/*     </div>*/
/* </div>*/
/* */
/*   <div class="box span12">*/
/* */
/* <div class="box-content">*/
/* <form action="{{ path('inventario_planilla_costos', {"planilla": planilla}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.descripcion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.descripcion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.cantidad, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.cantidad, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.valorUnitario, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.valorUnitario, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </fieldset>*/
/*  <div class="form-actions">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/* */
/*   {% endblock %}*/
/* */
