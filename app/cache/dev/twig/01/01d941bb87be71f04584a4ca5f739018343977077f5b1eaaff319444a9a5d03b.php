<?php

/* IncentivesSolicitudesBundle:Solicitudes:archivo.html.twig */
class __TwigTemplate_ba9277930f14cc5afad0785c37ca4a6b13f1d982c67a9cc5e17595f78028b6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Solicitudes:archivo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basePop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac7b664688a742484e656eefd2728e9f8abfa5ca3b26f05227e4b9b736318a93 = $this->env->getExtension("native_profiler");
        $__internal_ac7b664688a742484e656eefd2728e9f8abfa5ca3b26f05227e4b9b736318a93->enter($__internal_ac7b664688a742484e656eefd2728e9f8abfa5ca3b26f05227e4b9b736318a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:archivo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac7b664688a742484e656eefd2728e9f8abfa5ca3b26f05227e4b9b736318a93->leave($__internal_ac7b664688a742484e656eefd2728e9f8abfa5ca3b26f05227e4b9b736318a93_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a5064c5da8c12046841efdb724d78d435da50ce4188ff3b87e0e943131e2c42 = $this->env->getExtension("native_profiler");
        $__internal_9a5064c5da8c12046841efdb724d78d435da50ce4188ff3b87e0e943131e2c42->enter($__internal_9a5064c5da8c12046841efdb724d78d435da50ce4188ff3b87e0e943131e2c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Archivo";
        
        $__internal_9a5064c5da8c12046841efdb724d78d435da50ce4188ff3b87e0e943131e2c42->leave($__internal_9a5064c5da8c12046841efdb724d78d435da50ce4188ff3b87e0e943131e2c42_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_9fc06f0204fb12ff5435dabf7dbc92e2e2b732c5df3d7b0bb45d90d061f6a4ae = $this->env->getExtension("native_profiler");
        $__internal_9fc06f0204fb12ff5435dabf7dbc92e2e2b732c5df3d7b0bb45d90d061f6a4ae->enter($__internal_9fc06f0204fb12ff5435dabf7dbc92e2e2b732c5df3d7b0bb45d90d061f6a4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
    <h2><i class=\"icon-edit\"></i>Agregar Archivo</h2>
     <div class=\"box-icon\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("solicitudes_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
    </div>
</div>
<div class=\"box-content\">
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("solicitudes_archivos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <fieldset>
            <div class=\"control-group\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "archivo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"controls\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "archivo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                </div>
            </div>
            <div class=\"control-group\">
        </fieldset>
    <div class=\"form-actions\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    </div>
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
    </form>
</div>
</div>
 </div>
";
        
        $__internal_9fc06f0204fb12ff5435dabf7dbc92e2e2b732c5df3d7b0bb45d90d061f6a4ae->leave($__internal_9fc06f0204fb12ff5435dabf7dbc92e2e2b732c5df3d7b0bb45d90d061f6a4ae_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_641b599318a3da37fcac1761458ec9a60286c016aa305c9ec8dbd7cf425ba1b3 = $this->env->getExtension("native_profiler");
        $__internal_641b599318a3da37fcac1761458ec9a60286c016aa305c9ec8dbd7cf425ba1b3->enter($__internal_641b599318a3da37fcac1761458ec9a60286c016aa305c9ec8dbd7cf425ba1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_641b599318a3da37fcac1761458ec9a60286c016aa305c9ec8dbd7cf425ba1b3->leave($__internal_641b599318a3da37fcac1761458ec9a60286c016aa305c9ec8dbd7cf425ba1b3_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:archivo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  116 => 34,  103 => 27,  98 => 25,  89 => 19,  84 => 17,  78 => 14,  70 => 13,  61 => 9,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::basePop.html.twig' %}*/
/* {% block title %}Agregar Archivo{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*     <h2><i class="icon-edit"></i>Agregar Archivo</h2>*/
/*      <div class="box-icon">*/
/*         <a href="{{ path('solicitudes_datos') }}/{{ solicitud }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*     </div>*/
/* </div>*/
/* <div class="box-content">*/
/*     <form action="{{ path('solicitudes_archivos') }}/{{ solicitud }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*         {{ form_errors(form) }}*/
/*         <fieldset>*/
/*             <div class="control-group">*/
/*                 {{ form_label(form.archivo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                 <div class="controls">*/
/*                     {{ form_widget(form.archivo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*         </fieldset>*/
/*     <div class="form-actions">*/
/*         {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/*     </div>*/
/*     {{ form_widget(form._token) }}*/
/*     </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*    */
/* {% endblock %}*/
/* */
