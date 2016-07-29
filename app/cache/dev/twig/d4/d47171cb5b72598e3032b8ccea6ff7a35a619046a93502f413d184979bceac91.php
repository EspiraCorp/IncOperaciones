<?php

/* IncentivesSolicitudesBundle:Solicitudes:ordenesDespacho.html.twig */
class __TwigTemplate_257d6c3667e6ce5edf5bb06ee52b2fa52848eab1d32f3303b1e964978309b2ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesSolicitudesBundle:Solicitudes:ordenesDespacho.html.twig", 1);
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
        $__internal_7f015f2ef94e9548e3e21b526f23b7b8b49149b740bbd6648b505de18fed0513 = $this->env->getExtension("native_profiler");
        $__internal_7f015f2ef94e9548e3e21b526f23b7b8b49149b740bbd6648b505de18fed0513->enter($__internal_7f015f2ef94e9548e3e21b526f23b7b8b49149b740bbd6648b505de18fed0513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:ordenesDespacho.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f015f2ef94e9548e3e21b526f23b7b8b49149b740bbd6648b505de18fed0513->leave($__internal_7f015f2ef94e9548e3e21b526f23b7b8b49149b740bbd6648b505de18fed0513_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_026f97b011bfb87d05561e03978a24068d40be5485ed975a36f818a5a4093170 = $this->env->getExtension("native_profiler");
        $__internal_026f97b011bfb87d05561e03978a24068d40be5485ed975a36f818a5a4093170->enter($__internal_026f97b011bfb87d05561e03978a24068d40be5485ed975a36f818a5a4093170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Orden Despacho";
        
        $__internal_026f97b011bfb87d05561e03978a24068d40be5485ed975a36f818a5a4093170->leave($__internal_026f97b011bfb87d05561e03978a24068d40be5485ed975a36f818a5a4093170_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_068bf780d005420d77bd18ed42eb4f1880b1c0fb4a8086446da8907f1bbdb301 = $this->env->getExtension("native_profiler");
        $__internal_068bf780d005420d77bd18ed42eb4f1880b1c0fb4a8086446da8907f1bbdb301->enter($__internal_068bf780d005420d77bd18ed42eb4f1880b1c0fb4a8086446da8907f1bbdb301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
    <h2><i class=\"icon-edit\"></i>Agregar Orden Despacho</h2>
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
        echo $this->env->getExtension('routing')->getPath("solicitudes_ordenesDespacho");
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
        
        $__internal_068bf780d005420d77bd18ed42eb4f1880b1c0fb4a8086446da8907f1bbdb301->leave($__internal_068bf780d005420d77bd18ed42eb4f1880b1c0fb4a8086446da8907f1bbdb301_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c43122544f9d948cd10bdf6c8e4fdfea7b1d9d62ef30097a9f5200f30a17c557 = $this->env->getExtension("native_profiler");
        $__internal_c43122544f9d948cd10bdf6c8e4fdfea7b1d9d62ef30097a9f5200f30a17c557->enter($__internal_c43122544f9d948cd10bdf6c8e4fdfea7b1d9d62ef30097a9f5200f30a17c557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
";
        
        $__internal_c43122544f9d948cd10bdf6c8e4fdfea7b1d9d62ef30097a9f5200f30a17c557->leave($__internal_c43122544f9d948cd10bdf6c8e4fdfea7b1d9d62ef30097a9f5200f30a17c557_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:ordenesDespacho.html.twig";
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
/* {% block title %}Orden Despacho{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*     <h2><i class="icon-edit"></i>Agregar Orden Despacho</h2>*/
/*      <div class="box-icon">*/
/*         <a href="{{ path('solicitudes_datos') }}/{{ solicitud }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*     </div>*/
/* </div>*/
/* <div class="box-content">*/
/*     <form action="{{ path('solicitudes_ordenesDespacho') }}/{{ solicitud }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
