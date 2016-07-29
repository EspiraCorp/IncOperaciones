<?php

/* IncentivesInventarioBundle:Inventario:importar.html.twig */
class __TwigTemplate_ccfee8a4f18d65e1d628fde69c104c4252a4caaea861693b9fcf97ddc74b44d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:importar.html.twig", 3);
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
        $__internal_da4cc000828d1226edd29c750172fd7c1db9a62fd1b3a7efe75030485626aab8 = $this->env->getExtension("native_profiler");
        $__internal_da4cc000828d1226edd29c750172fd7c1db9a62fd1b3a7efe75030485626aab8->enter($__internal_da4cc000828d1226edd29c750172fd7c1db9a62fd1b3a7efe75030485626aab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:importar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4cc000828d1226edd29c750172fd7c1db9a62fd1b3a7efe75030485626aab8->leave($__internal_da4cc000828d1226edd29c750172fd7c1db9a62fd1b3a7efe75030485626aab8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5b3def8a86104df29709cedffc387a1b2f0613bffbb9b27ce604bd6e74206b1 = $this->env->getExtension("native_profiler");
        $__internal_b5b3def8a86104df29709cedffc387a1b2f0613bffbb9b27ce604bd6e74206b1->enter($__internal_b5b3def8a86104df29709cedffc387a1b2f0613bffbb9b27ce604bd6e74206b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carga Guias";
        
        $__internal_b5b3def8a86104df29709cedffc387a1b2f0613bffbb9b27ce604bd6e74206b1->leave($__internal_b5b3def8a86104df29709cedffc387a1b2f0613bffbb9b27ce604bd6e74206b1_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_002d4ffe62ae4f69b2a47b1959dda2ed3a4b3941c1fe8cc721f695d661788cc2 = $this->env->getExtension("native_profiler");
        $__internal_002d4ffe62ae4f69b2a47b1959dda2ed3a4b3941c1fe8cc721f695d661788cc2->enter($__internal_002d4ffe62ae4f69b2a47b1959dda2ed3a4b3941c1fe8cc721f695d661788cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
        echo $this->env->getExtension('routing')->getPath("inventario_cargarguias");
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
        
        $__internal_002d4ffe62ae4f69b2a47b1959dda2ed3a4b3941c1fe8cc721f695d661788cc2->leave($__internal_002d4ffe62ae4f69b2a47b1959dda2ed3a4b3941c1fe8cc721f695d661788cc2_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:importar.html.twig";
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
/* <form action="{{ path('inventario_cargarguias') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
