<?php

/* IncentivesCatalogoBundle:Maestro:editarpremio.html.twig */
class __TwigTemplate_0e4a832186efc335d5e090c59cf0438e9c9c32d5faf2ffc5ab3b46a1c908e947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesCatalogoBundle:Maestro:editarpremio.html.twig", 1);
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
        $__internal_771bb5ea0ad9ee70c888c7e21718a2103b97375dd3fe3b5cb0ee57b98ce6a36c = $this->env->getExtension("native_profiler");
        $__internal_771bb5ea0ad9ee70c888c7e21718a2103b97375dd3fe3b5cb0ee57b98ce6a36c->enter($__internal_771bb5ea0ad9ee70c888c7e21718a2103b97375dd3fe3b5cb0ee57b98ce6a36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:editarpremio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_771bb5ea0ad9ee70c888c7e21718a2103b97375dd3fe3b5cb0ee57b98ce6a36c->leave($__internal_771bb5ea0ad9ee70c888c7e21718a2103b97375dd3fe3b5cb0ee57b98ce6a36c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7405039846708a1bac7ee7ca61eeaede010883196160eacbaed2dceda72d3511 = $this->env->getExtension("native_profiler");
        $__internal_7405039846708a1bac7ee7ca61eeaede010883196160eacbaed2dceda72d3511->enter($__internal_7405039846708a1bac7ee7ca61eeaede010883196160eacbaed2dceda72d3511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Premio";
        
        $__internal_7405039846708a1bac7ee7ca61eeaede010883196160eacbaed2dceda72d3511->leave($__internal_7405039846708a1bac7ee7ca61eeaede010883196160eacbaed2dceda72d3511_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_b7de20f1191adcc6eec6067e967a7a86929c4d692ba31743a95f861b3217e150 = $this->env->getExtension("native_profiler");
        $__internal_b7de20f1191adcc6eec6067e967a7a86929c4d692ba31743a95f861b3217e150->enter($__internal_b7de20f1191adcc6eec6067e967a7a86929c4d692ba31743a95f861b3217e150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
    <div class=\"box span12\">
        <div class=\"box-header well\" data-original-title>
            <h2><i class=\"icon-edit\"></i>Editar Premio</h2>
        </div>
        <div class=\"box-content\">
            <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_editarpremio", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <fieldset>
                    <div class=\"control-group\">
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incrementoTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incrementoTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logisticaTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logisticaTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agotado", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agotado", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                </fieldset>

                <div class=\"row-fluid sortable ui-sortable\">

                </div>  
                 <div class=\"form-actions\">
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"Enviar\" value=\"Enviar\">
                </div>
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_b7de20f1191adcc6eec6067e967a7a86929c4d692ba31743a95f861b3217e150->leave($__internal_b7de20f1191adcc6eec6067e967a7a86929c4d692ba31743a95f861b3217e150_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:editarpremio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 59,  138 => 48,  133 => 46,  126 => 42,  121 => 40,  114 => 36,  109 => 34,  102 => 30,  97 => 28,  90 => 24,  85 => 22,  78 => 18,  73 => 16,  67 => 13,  61 => 12,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::basePop.html.twig" %}*/
/* */
/* {% block title %}Editar Premio{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/*     <div class="box span12">*/
/*         <div class="box-header well" data-original-title>*/
/*             <h2><i class="icon-edit"></i>Editar Premio</h2>*/
/*         </div>*/
/*         <div class="box-content">*/
/*             <form action="{{ path('productocatalogo_editarpremio',  {"id": id}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*                 {{ form_errors(form) }}*/
/*                 <fieldset>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.categoria, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.categoria, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                      <div class="control-group">*/
/*                         {{ form_label(form.puntosTemporal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.puntosTemporal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.precioTemporal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.precioTemporal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                      <div class="control-group">*/
/*                         {{ form_label(form.incrementoTemporal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.incrementoTemporal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                      <div class="control-group">*/
/*                         {{ form_label(form.logisticaTemporal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.logisticaTemporal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                      <div class="control-group">*/
/*                         {{ form_label(form.agotado, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.agotado, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </fieldset>*/
/* */
/*                 <div class="row-fluid sortable ui-sortable">*/
/* */
/*                 </div>  */
/*                  <div class="form-actions">*/
/*                     <input class="btn btn-primary" type="submit" name="Enviar" value="Enviar">*/
/*                 </div>*/
/*             {{ form_widget(form._token) }}*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
