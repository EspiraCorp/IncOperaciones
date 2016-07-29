<?php

/* IncentivesCatalogoBundle:Catalogos:intervalos.html.twig */
class __TwigTemplate_81f73ed4c33d9a8b65888cb9563103a810dc2fda972b77c4fb5d91faa055c53a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:intervalos.html.twig", 1);
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
        $__internal_698a2693c80768f72c91aa7ed2aabbede7f14935f6c4f405979de9c580a6c8df = $this->env->getExtension("native_profiler");
        $__internal_698a2693c80768f72c91aa7ed2aabbede7f14935f6c4f405979de9c580a6c8df->enter($__internal_698a2693c80768f72c91aa7ed2aabbede7f14935f6c4f405979de9c580a6c8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:intervalos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_698a2693c80768f72c91aa7ed2aabbede7f14935f6c4f405979de9c580a6c8df->leave($__internal_698a2693c80768f72c91aa7ed2aabbede7f14935f6c4f405979de9c580a6c8df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_543c43c9d3ee38b3e32fd8ab20a6bbb7c8189fa9fa712a6afcd73945a1e75813 = $this->env->getExtension("native_profiler");
        $__internal_543c43c9d3ee38b3e32fd8ab20a6bbb7c8189fa9fa712a6afcd73945a1e75813->enter($__internal_543c43c9d3ee38b3e32fd8ab20a6bbb7c8189fa9fa712a6afcd73945a1e75813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Intervalo";
        
        $__internal_543c43c9d3ee38b3e32fd8ab20a6bbb7c8189fa9fa712a6afcd73945a1e75813->leave($__internal_543c43c9d3ee38b3e32fd8ab20a6bbb7c8189fa9fa712a6afcd73945a1e75813_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_1b21d8055fbf82d988430fdbc45275b96e298a0a5ac5f4c1d1e5c22951bb5e91 = $this->env->getExtension("native_profiler");
        $__internal_1b21d8055fbf82d988430fdbc45275b96e298a0a5ac5f4c1d1e5c22951bb5e91->enter($__internal_1b21d8055fbf82d988430fdbc45275b96e298a0a5ac5f4c1d1e5c22951bb5e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Agregar Intervalo</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("catalogo_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("catalogo_intervalos");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <input type='hidden' name='id' value=";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minimo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minimo", array()), 'widget', array("value" => (isset($context["minimo"]) ? $context["minimo"] : $this->getContext($context, "minimo"))));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maximo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maximo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntos", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntos", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
<div class=\"form-actions\">
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_1b21d8055fbf82d988430fdbc45275b96e298a0a5ac5f4c1d1e5c22951bb5e91->leave($__internal_1b21d8055fbf82d988430fdbc45275b96e298a0a5ac5f4c1d1e5c22951bb5e91_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:intervalos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  120 => 37,  114 => 34,  109 => 32,  102 => 28,  97 => 26,  90 => 22,  85 => 20,  79 => 17,  75 => 16,  69 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Agregar Intervalo{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Agregar Intervalo</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('catalogo_datos') }}/{{ id }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('catalogo_intervalos') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.minimo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.minimo, {'value' :  minimo }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.maximo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.maximo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.puntos, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.puntos, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
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
