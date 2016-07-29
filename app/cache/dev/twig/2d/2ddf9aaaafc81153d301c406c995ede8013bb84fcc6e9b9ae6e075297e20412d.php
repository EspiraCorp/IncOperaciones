<?php

/* IncentivesOperacionesBundle:Proveedor:exportar.html.twig */
class __TwigTemplate_6faafb3aff7e81a032ac4cc11c1c60418bc2a176c772c55c4f8cace723515a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:exportar.html.twig", 3);
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
        $__internal_d72ea021a391e311b7fda2141240b5d83d5c05215260d2de31b1694462bfd639 = $this->env->getExtension("native_profiler");
        $__internal_d72ea021a391e311b7fda2141240b5d83d5c05215260d2de31b1694462bfd639->enter($__internal_d72ea021a391e311b7fda2141240b5d83d5c05215260d2de31b1694462bfd639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:exportar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d72ea021a391e311b7fda2141240b5d83d5c05215260d2de31b1694462bfd639->leave($__internal_d72ea021a391e311b7fda2141240b5d83d5c05215260d2de31b1694462bfd639_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b4fab87cff3a6f02bccd9fc79548eb43be0dedfb41fb66014b88ae8aa848be0 = $this->env->getExtension("native_profiler");
        $__internal_0b4fab87cff3a6f02bccd9fc79548eb43be0dedfb41fb66014b88ae8aa848be0->enter($__internal_0b4fab87cff3a6f02bccd9fc79548eb43be0dedfb41fb66014b88ae8aa848be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Reporte";
        
        $__internal_0b4fab87cff3a6f02bccd9fc79548eb43be0dedfb41fb66014b88ae8aa848be0->leave($__internal_0b4fab87cff3a6f02bccd9fc79548eb43be0dedfb41fb66014b88ae8aa848be0_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_8be9c1d1585f26e1b02170b1482a663a3f6dab46ec3b107ee3073dcd21e20049 = $this->env->getExtension("native_profiler");
        $__internal_8be9c1d1585f26e1b02170b1482a663a3f6dab46ec3b107ee3073dcd21e20049->enter($__internal_8be9c1d1585f26e1b02170b1482a663a3f6dab46ec3b107ee3073dcd21e20049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Generar Reporte</h2>
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
        echo $this->env->getExtension('routing')->getPath("proveedores_exportar");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    <fieldset>
            <div class=\"controls\">
               <input name='go' type='submit' value='Exportar' />
            </div>
        </div>
    </fieldset>
    

</form>
</div>
</div>
 </div>
";
        
        $__internal_8be9c1d1585f26e1b02170b1482a663a3f6dab46ec3b107ee3073dcd21e20049->leave($__internal_8be9c1d1585f26e1b02170b1482a663a3f6dab46ec3b107ee3073dcd21e20049_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:exportar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Generar Reporte{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Generar Reporte</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('proveedores_exportar') }}" method="POST" class="form-horizontal">*/
/*     <fieldset>*/
/*             <div class="controls">*/
/*                <input name='go' type='submit' value='Exportar' />*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     */
/* */
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
