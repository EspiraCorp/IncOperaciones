<?php

/* IncentivesOperacionesBundle:Proveedor:productoporproveedor.html.twig */
class __TwigTemplate_6b3342ae9229ee58f1bc499e2dbcd4a4bdf91b4f48d26432062272936cb78543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:productoporproveedor.html.twig", 3);
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
        $__internal_2ecd596dd68127ee9d17de0ca49b49d764506f2192e0fbd6646f2a10af6cb661 = $this->env->getExtension("native_profiler");
        $__internal_2ecd596dd68127ee9d17de0ca49b49d764506f2192e0fbd6646f2a10af6cb661->enter($__internal_2ecd596dd68127ee9d17de0ca49b49d764506f2192e0fbd6646f2a10af6cb661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:productoporproveedor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecd596dd68127ee9d17de0ca49b49d764506f2192e0fbd6646f2a10af6cb661->leave($__internal_2ecd596dd68127ee9d17de0ca49b49d764506f2192e0fbd6646f2a10af6cb661_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_56bd441aa755131ba24406aa1b915385385167e2f1ce036091361345e99c6dea = $this->env->getExtension("native_profiler");
        $__internal_56bd441aa755131ba24406aa1b915385385167e2f1ce036091361345e99c6dea->enter($__internal_56bd441aa755131ba24406aa1b915385385167e2f1ce036091361345e99c6dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Producto por Proveedor";
        
        $__internal_56bd441aa755131ba24406aa1b915385385167e2f1ce036091361345e99c6dea->leave($__internal_56bd441aa755131ba24406aa1b915385385167e2f1ce036091361345e99c6dea_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_33c3fa78ae1c259f28d3804451d3a9c8974fe5284cab544a8a7c07531567e307 = $this->env->getExtension("native_profiler");
        $__internal_33c3fa78ae1c259f28d3804451d3a9c8974fe5284cab544a8a7c07531567e307->enter($__internal_33c3fa78ae1c259f28d3804451d3a9c8974fe5284cab544a8a7c07531567e307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Producto por proveedor</h2>
                        <a class=\"btn btn-mini btn-success\" style=\"margin-left: 20px\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_formato_proveedor", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
                            <i class=\"icon-zoom-in icon-white\"></i>
                            Formato
                        </a>
                        
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("proveedores");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("proveedores_importar_proveedor");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
    
<div class=\"form-actions\">
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_33c3fa78ae1c259f28d3804451d3a9c8974fe5284cab544a8a7c07531567e307->leave($__internal_33c3fa78ae1c259f28d3804451d3a9c8974fe5284cab544a8a7c07531567e307_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:productoporproveedor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  101 => 32,  92 => 26,  87 => 24,  81 => 21,  75 => 20,  68 => 16,  59 => 10,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Producto por Proveedor{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Producto por proveedor</h2>*/
/*                         <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ path('producto_formato_proveedor',  {"id": id}) }}">*/
/*                             <i class="icon-zoom-in icon-white"></i>*/
/*                             Formato*/
/*                         </a>*/
/*                         */
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('proveedores_importar_proveedor') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
