<?php

/* IncentivesCatalogoBundle:Producto:importar.html.twig */
class __TwigTemplate_bf08b2147df93acc61518b22632a861676d5c32def2cdcff9eef9a6e20345aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:importar.html.twig", 3);
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
        $__internal_71cabecc873b0bee5f60aff194390d6ee9362d200fe262e6b590150ec479112b = $this->env->getExtension("native_profiler");
        $__internal_71cabecc873b0bee5f60aff194390d6ee9362d200fe262e6b590150ec479112b->enter($__internal_71cabecc873b0bee5f60aff194390d6ee9362d200fe262e6b590150ec479112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:importar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71cabecc873b0bee5f60aff194390d6ee9362d200fe262e6b590150ec479112b->leave($__internal_71cabecc873b0bee5f60aff194390d6ee9362d200fe262e6b590150ec479112b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_48ca1e5aadc25dfabddf283f5110ab4d5762a18d8c00956f07928a927290c245 = $this->env->getExtension("native_profiler");
        $__internal_48ca1e5aadc25dfabddf283f5110ab4d5762a18d8c00956f07928a927290c245->enter($__internal_48ca1e5aadc25dfabddf283f5110ab4d5762a18d8c00956f07928a927290c245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carga Masiva de Productos";
        
        $__internal_48ca1e5aadc25dfabddf283f5110ab4d5762a18d8c00956f07928a927290c245->leave($__internal_48ca1e5aadc25dfabddf283f5110ab4d5762a18d8c00956f07928a927290c245_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_ce5f7eae9397c50778bd1e331c89d0d1ba0f3e376018cbf94d22dfea46fcdd40 = $this->env->getExtension("native_profiler");
        $__internal_ce5f7eae9397c50778bd1e331c89d0d1ba0f3e376018cbf94d22dfea46fcdd40->enter($__internal_ce5f7eae9397c50778bd1e331c89d0d1ba0f3e376018cbf94d22dfea46fcdd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Carga Masiva de Productos</h2>
                        <a class=\"btn btn-mini btn-success\" style=\"margin-left: 20px\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("producto_formato");
        echo "\">
                            <i class=\"icon-zoom-in icon-white\"></i>
                            Formato
                        </a>
 <a class=\"btn btn-mini btn-notice\" style=\"margin-left: 20px\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("producto_imagenmasivo");
        echo "\">
        <i class=\"icon-film icon-white\"></i>
        Procesar Imagenes
    </a>
                        
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("producto_importar");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
    
<div class=\"form-actions\">
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_ce5f7eae9397c50778bd1e331c89d0d1ba0f3e376018cbf94d22dfea46fcdd40->leave($__internal_ce5f7eae9397c50778bd1e331c89d0d1ba0f3e376018cbf94d22dfea46fcdd40_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:importar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  108 => 36,  99 => 30,  94 => 28,  88 => 25,  82 => 24,  75 => 20,  66 => 14,  59 => 10,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Carga Masiva de Productos{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Carga Masiva de Productos</h2>*/
/*                         <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ path('producto_formato') }}">*/
/*                             <i class="icon-zoom-in icon-white"></i>*/
/*                             Formato*/
/*                         </a>*/
/*  <a class="btn btn-mini btn-notice" style="margin-left: 20px" href="{{ path('producto_imagenmasivo') }}">*/
/*         <i class="icon-film icon-white"></i>*/
/*         Procesar Imagenes*/
/*     </a>*/
/*                         */
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('producto') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('producto_importar') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
