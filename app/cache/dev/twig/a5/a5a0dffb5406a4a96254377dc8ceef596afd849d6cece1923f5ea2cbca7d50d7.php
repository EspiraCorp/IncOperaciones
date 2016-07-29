<?php

/* IncentivesCatalogoBundle:Maestro:nuevopremio.html.twig */
class __TwigTemplate_d954eea9bf027f919e55fad6987baee42e927880d5086a62ce0d6eab2238e549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesCatalogoBundle:Maestro:nuevopremio.html.twig", 1);
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
        $__internal_f80943cae87fcf5806c013b80be86a553e22eaba0733e2cff932abf5a220eba4 = $this->env->getExtension("native_profiler");
        $__internal_f80943cae87fcf5806c013b80be86a553e22eaba0733e2cff932abf5a220eba4->enter($__internal_f80943cae87fcf5806c013b80be86a553e22eaba0733e2cff932abf5a220eba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:nuevopremio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80943cae87fcf5806c013b80be86a553e22eaba0733e2cff932abf5a220eba4->leave($__internal_f80943cae87fcf5806c013b80be86a553e22eaba0733e2cff932abf5a220eba4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bcef35a9bf9af9e7b90c4ce3e65df34cd0839831d5461c9a921aa1093fd5a66 = $this->env->getExtension("native_profiler");
        $__internal_6bcef35a9bf9af9e7b90c4ce3e65df34cd0839831d5461c9a921aa1093fd5a66->enter($__internal_6bcef35a9bf9af9e7b90c4ce3e65df34cd0839831d5461c9a921aa1093fd5a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Premio";
        
        $__internal_6bcef35a9bf9af9e7b90c4ce3e65df34cd0839831d5461c9a921aa1093fd5a66->leave($__internal_6bcef35a9bf9af9e7b90c4ce3e65df34cd0839831d5461c9a921aa1093fd5a66_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_2575f590325f9a0aca76dd971c027177fc96e8d6e325ea3ebfacef9ef3d376ff = $this->env->getExtension("native_profiler");
        $__internal_2575f590325f9a0aca76dd971c027177fc96e8d6e325ea3ebfacef9ef3d376ff->enter($__internal_2575f590325f9a0aca76dd971c027177fc96e8d6e325ea3ebfacef9ef3d376ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
    <div class=\"box span12\">
        <div class=\"box-header well\" data-original-title>
            <h2><i class=\"icon-edit\"></i>Nuevo Premio</h2>
        </div>
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_nuevopremio", array("producto" => (isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "catalogo" => (isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <table>
                    <td class=\"control-group\">
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </td>
                     <div class=\"control-group\">
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incrementoTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incrementoTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logisticaTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logisticaTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agotado", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agotado", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                </table>

                <div class=\"row-fluid sortable ui-sortable\">

                </div>  
                <div class=\"form-actions\">
                \t<input class=\"btn btn-primary\" type=\"submit\" name=\"Enviar\" value=\"Enviar\">
                </div>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            </form>
    </div>
</div>
";
        
        $__internal_2575f590325f9a0aca76dd971c027177fc96e8d6e325ea3ebfacef9ef3d376ff->leave($__internal_2575f590325f9a0aca76dd971c027177fc96e8d6e325ea3ebfacef9ef3d376ff_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:nuevopremio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  137 => 47,  132 => 45,  125 => 41,  120 => 39,  113 => 35,  108 => 33,  101 => 29,  96 => 27,  89 => 23,  84 => 21,  77 => 17,  72 => 15,  66 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::basePop.html.twig" %}*/
/* */
/* {% block title %}Agregar Premio{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/*     <div class="box span12">*/
/*         <div class="box-header well" data-original-title>*/
/*             <h2><i class="icon-edit"></i>Nuevo Premio</h2>*/
/*         </div>*/
/*             <form action="{{ path('productocatalogo_nuevopremio',  {'producto': producto, 'catalogo': catalogo}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*                 {{ form_errors(form) }}*/
/*                 <table>*/
/*                     <td class="control-group">*/
/*                         {{ form_label(form.categoria, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.categoria, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </td>*/
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
/*                     <div class="control-group">*/
/*                         {{ form_label(form.agotado, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.agotado, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </table>*/
/* */
/*                 <div class="row-fluid sortable ui-sortable">*/
/* */
/*                 </div>  */
/*                 <div class="form-actions">*/
/*                 	<input class="btn btn-primary" type="submit" name="Enviar" value="Enviar">*/
/*                 </div>*/
/*             {{ form_widget(form._token) }}*/
/*             </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
