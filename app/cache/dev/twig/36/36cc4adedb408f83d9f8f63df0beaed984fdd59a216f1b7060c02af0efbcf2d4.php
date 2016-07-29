<?php

/* IncentivesSolicitudesBundle:Solicitudes:cargardespachos.html.twig */
class __TwigTemplate_0479a2ca0ca79b9b1f824ac37d647429158c9f9eeddbcf0697b6adcfb625ad5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Solicitudes:cargardespachos.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basePop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b71dfda180477252ea3eda861e955c14bba820edb84811944bfb88c99ac936d6 = $this->env->getExtension("native_profiler");
        $__internal_b71dfda180477252ea3eda861e955c14bba820edb84811944bfb88c99ac936d6->enter($__internal_b71dfda180477252ea3eda861e955c14bba820edb84811944bfb88c99ac936d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:cargardespachos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71dfda180477252ea3eda861e955c14bba820edb84811944bfb88c99ac936d6->leave($__internal_b71dfda180477252ea3eda861e955c14bba820edb84811944bfb88c99ac936d6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_895dbf0398fc753973b01de61c2e694d1f932f6c4e29d769e353b6225e5658c8 = $this->env->getExtension("native_profiler");
        $__internal_895dbf0398fc753973b01de61c2e694d1f932f6c4e29d769e353b6225e5658c8->enter($__internal_895dbf0398fc753973b01de61c2e694d1f932f6c4e29d769e353b6225e5658c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carga Despachos";
        
        $__internal_895dbf0398fc753973b01de61c2e694d1f932f6c4e29d769e353b6225e5658c8->leave($__internal_895dbf0398fc753973b01de61c2e694d1f932f6c4e29d769e353b6225e5658c8_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6a861da6f0ba37c8b36ad79b20170fbcab98260aa67f979a85111c7c0e1adf26 = $this->env->getExtension("native_profiler");
        $__internal_6a861da6f0ba37c8b36ad79b20170fbcab98260aa67f979a85111c7c0e1adf26->enter($__internal_6a861da6f0ba37c8b36ad79b20170fbcab98260aa67f979a85111c7c0e1adf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Carga Despachos</h2>                        
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("solicitudes_ordenesDespacho");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("solicitudes_cargardespachos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
    
<div class=\"form-actions\">
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
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
        
        $__internal_6a861da6f0ba37c8b36ad79b20170fbcab98260aa67f979a85111c7c0e1adf26->leave($__internal_6a861da6f0ba37c8b36ad79b20170fbcab98260aa67f979a85111c7c0e1adf26_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:cargardespachos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  97 => 27,  88 => 21,  83 => 19,  77 => 16,  69 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::basePop.html.twig' %}*/
/* {% block title %}Carga Despachos{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Carga Despachos</h2>                        */
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('solicitudes_ordenesDespacho') }}/{{ solicitud }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('solicitudes_cargardespachos') }}/{{ solicitud }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
