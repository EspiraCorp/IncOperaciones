<?php

/* IncentivesCatalogoBundle:Producto:agregarPrecio.html.twig */
class __TwigTemplate_a88d00d4bb1d5bb124afbd1182e86bb364b37f65b1d7e95c5e33de1d8fbf67ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:agregarPrecio.html.twig", 1);
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
        $__internal_9aa335ee6854992979a941a9114b7d8ec44f7c62553140fe0ba016ebf5620b48 = $this->env->getExtension("native_profiler");
        $__internal_9aa335ee6854992979a941a9114b7d8ec44f7c62553140fe0ba016ebf5620b48->enter($__internal_9aa335ee6854992979a941a9114b7d8ec44f7c62553140fe0ba016ebf5620b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:agregarPrecio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa335ee6854992979a941a9114b7d8ec44f7c62553140fe0ba016ebf5620b48->leave($__internal_9aa335ee6854992979a941a9114b7d8ec44f7c62553140fe0ba016ebf5620b48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adb39ac56bd26dd3a9a6520d4a9f99d790952347348158406c0fc6b4031a90a0 = $this->env->getExtension("native_profiler");
        $__internal_adb39ac56bd26dd3a9a6520d4a9f99d790952347348158406c0fc6b4031a90a0->enter($__internal_adb39ac56bd26dd3a9a6520d4a9f99d790952347348158406c0fc6b4031a90a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar precio";
        
        $__internal_adb39ac56bd26dd3a9a6520d4a9f99d790952347348158406c0fc6b4031a90a0->leave($__internal_adb39ac56bd26dd3a9a6520d4a9f99d790952347348158406c0fc6b4031a90a0_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_1de4970611944af0a60b03ab53a2b3c003368e4e2380481aae333d59a5cedef8 = $this->env->getExtension("native_profiler");
        $__internal_1de4970611944af0a60b03ab53a2b3c003368e4e2380481aae333d59a5cedef8->enter($__internal_1de4970611944af0a60b03ab53a2b3c003368e4e2380481aae333d59a5cedef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
    <div class=\"box span12\">
        <div class=\"box-header well\" data-original-title>
            <h2><i class=\"icon-edit\"></i>Nuevo precio</h2>
            <div class=\"box-icon\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
            </div>
        </div>
        <div class=\"box-content\">
            <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_agregarprecio", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioDolares", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioDolares", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "principal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "principal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                </fieldset>

                <div class=\"row-fluid sortable ui-sortable\">

                </div>  
                <div class=\"form-actions\">
                \t<input type=\"submit\" name=\"Enviar\">
                \t
                </div>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_1de4970611944af0a60b03ab53a2b3c003368e4e2380481aae333d59a5cedef8->leave($__internal_1de4970611944af0a60b03ab53a2b3c003368e4e2380481aae333d59a5cedef8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:agregarPrecio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 51,  120 => 39,  115 => 37,  108 => 33,  103 => 31,  96 => 27,  91 => 25,  84 => 21,  79 => 19,  73 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Agregar precio{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/*     <div class="box span12">*/
/*         <div class="box-header well" data-original-title>*/
/*             <h2><i class="icon-edit"></i>Nuevo precio</h2>*/
/*             <div class="box-icon">*/
/*                 <a href="{{ path('producto_datos', {'id': id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="box-content">*/
/*             <form action="{{ path('producto_agregarprecio', {'id': id}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*                 {{ form_errors(form) }}*/
/*                 <fieldset>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.proveedor, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.proveedor, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.precio, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.precio, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.precioDolares, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.precioDolares, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.principal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.principal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </fieldset>*/
/* */
/*                 <div class="row-fluid sortable ui-sortable">*/
/* */
/*                 </div>  */
/*                 <div class="form-actions">*/
/*                 	<input type="submit" name="Enviar">*/
/*                 	*/
/*                 </div>*/
/*             {{ form_widget(form._token) }}*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
