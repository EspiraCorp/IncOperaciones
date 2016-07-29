<?php

/* IncentivesInventarioBundle:Logistica:importarguias.html.twig */
class __TwigTemplate_bfa4dbc3dfadaac720e7d72d209f1d95dbb68eb1817c3d85e3d1d2588dfecb99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Logistica:importarguias.html.twig", 3);
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
        $__internal_b19122e96090a12320dd84658d395100a4f01825bbedbe43ba6cd31e1a95c41a = $this->env->getExtension("native_profiler");
        $__internal_b19122e96090a12320dd84658d395100a4f01825bbedbe43ba6cd31e1a95c41a->enter($__internal_b19122e96090a12320dd84658d395100a4f01825bbedbe43ba6cd31e1a95c41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Logistica:importarguias.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b19122e96090a12320dd84658d395100a4f01825bbedbe43ba6cd31e1a95c41a->leave($__internal_b19122e96090a12320dd84658d395100a4f01825bbedbe43ba6cd31e1a95c41a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_87532375345f542eda1aa1a5203a8952bd7c3e65b2bd9980c84b7f6908518802 = $this->env->getExtension("native_profiler");
        $__internal_87532375345f542eda1aa1a5203a8952bd7c3e65b2bd9980c84b7f6908518802->enter($__internal_87532375345f542eda1aa1a5203a8952bd7c3e65b2bd9980c84b7f6908518802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carga Guias";
        
        $__internal_87532375345f542eda1aa1a5203a8952bd7c3e65b2bd9980c84b7f6908518802->leave($__internal_87532375345f542eda1aa1a5203a8952bd7c3e65b2bd9980c84b7f6908518802_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d31a0ebdc10a8868b51f9bd2583e609efd9d098f11b4761e48765ff36bf4e8db = $this->env->getExtension("native_profiler");
        $__internal_d31a0ebdc10a8868b51f9bd2583e609efd9d098f11b4761e48765ff36bf4e8db->enter($__internal_d31a0ebdc10a8868b51f9bd2583e609efd9d098f11b4761e48765ff36bf4e8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Carga Masiva de Guias</h2>                        
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("proveedores");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("logistica_importar_guias");
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
        
        $__internal_d31a0ebdc10a8868b51f9bd2583e609efd9d098f11b4761e48765ff36bf4e8db->leave($__internal_d31a0ebdc10a8868b51f9bd2583e609efd9d098f11b4761e48765ff36bf4e8db_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Logistica:importarguias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  93 => 27,  84 => 21,  79 => 19,  73 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Carga Guias{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Carga Masiva de Guias</h2>                        */
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('logistica_importar_guias') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
