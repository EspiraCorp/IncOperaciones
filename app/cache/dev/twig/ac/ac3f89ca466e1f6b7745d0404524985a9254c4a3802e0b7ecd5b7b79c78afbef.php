<?php

/* IncentivesRedencionesBundle:Guia:nueva.html.twig */
class __TwigTemplate_3499a0f5047e2c803e1532d444092dc632a2cca44f8defaa03879395f9c71ab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Guia:nueva.html.twig", 1);
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
        $__internal_5bdda0e86f2a19238561967949cc7fac2247251d0fc2a24da5295fa6684f60fc = $this->env->getExtension("native_profiler");
        $__internal_5bdda0e86f2a19238561967949cc7fac2247251d0fc2a24da5295fa6684f60fc->enter($__internal_5bdda0e86f2a19238561967949cc7fac2247251d0fc2a24da5295fa6684f60fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Guia:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bdda0e86f2a19238561967949cc7fac2247251d0fc2a24da5295fa6684f60fc->leave($__internal_5bdda0e86f2a19238561967949cc7fac2247251d0fc2a24da5295fa6684f60fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e1ef6356a5739816a6b240431272a13ca4cf39d08382f59b9e4f7497ec82054 = $this->env->getExtension("native_profiler");
        $__internal_2e1ef6356a5739816a6b240431272a13ca4cf39d08382f59b9e4f7497ec82054->enter($__internal_2e1ef6356a5739816a6b240431272a13ca4cf39d08382f59b9e4f7497ec82054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nueva Orden";
        
        $__internal_2e1ef6356a5739816a6b240431272a13ca4cf39d08382f59b9e4f7497ec82054->leave($__internal_2e1ef6356a5739816a6b240431272a13ca4cf39d08382f59b9e4f7497ec82054_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_b43897f88b5caa5f5dd440d3c72a03282bbd17da4a9f45d3b4bf22948e9f7fd2 = $this->env->getExtension("native_profiler");
        $__internal_b43897f88b5caa5f5dd440d3c72a03282bbd17da4a9f45d3b4bf22948e9f7fd2->enter($__internal_b43897f88b5caa5f5dd440d3c72a03282bbd17da4a9f45d3b4bf22948e9f7fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Nueva Orden</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ordenes");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ordenes_nueva");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courier", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courier", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordenProducto", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordenProducto", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")));
        foreach ($context['_seq'] as $context["_key"] => $context["redenciones"]) {
            // line 30
            echo "            \t";
            if (($this->getAttribute($context["redenciones"], "ordenesProducto", array()) == $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordenProducto", array()))) {
                // line 31
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["redenciones"], "id", array()), "html", null, true);
                echo "
            \t";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redenciones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
        <div class=\"control-group\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guia", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guia", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>

    </fieldset>
<div class=\"form-actions\">
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_b43897f88b5caa5f5dd440d3c72a03282bbd17da4a9f45d3b4bf22948e9f7fd2->leave($__internal_b43897f88b5caa5f5dd440d3c72a03282bbd17da4a9f45d3b4bf22948e9f7fd2_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Guia:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  150 => 50,  141 => 44,  136 => 42,  129 => 38,  124 => 36,  120 => 34,  114 => 33,  108 => 31,  105 => 30,  101 => 29,  96 => 27,  91 => 25,  84 => 21,  79 => 19,  73 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Nueva Orden{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Nueva Orden</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('ordenes') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('ordenes_nueva') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.courier, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.courier, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.ordenProducto, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.ordenProducto, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*             {% for redenciones in redencion %}*/
/*             	{% if redenciones.ordenesProducto==form.ordenProducto %}*/
/* 					{{ redenciones.id }}*/
/*             	{% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.guia, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.guia, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.valor, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.valor, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
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
