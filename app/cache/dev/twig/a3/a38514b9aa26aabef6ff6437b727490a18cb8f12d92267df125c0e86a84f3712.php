<?php

/* IncentivesOperacionesBundle:Proveedor:formato.html.twig */
class __TwigTemplate_daf4a88fdb0754b3bb2971fea2ddccdbad8f679cf7e95d41da0a3b5994ab35b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:formato.html.twig", 3);
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
        $__internal_f1a6fa578ab151091ed3bebc4c25edddab80c764869cc4605e8522a132609ffb = $this->env->getExtension("native_profiler");
        $__internal_f1a6fa578ab151091ed3bebc4c25edddab80c764869cc4605e8522a132609ffb->enter($__internal_f1a6fa578ab151091ed3bebc4c25edddab80c764869cc4605e8522a132609ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:formato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a6fa578ab151091ed3bebc4c25edddab80c764869cc4605e8522a132609ffb->leave($__internal_f1a6fa578ab151091ed3bebc4c25edddab80c764869cc4605e8522a132609ffb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c5c6b8179c549eab0e551827fd9b6ff518019b9265d19fd8a94e4ad5e47cc6c = $this->env->getExtension("native_profiler");
        $__internal_2c5c6b8179c549eab0e551827fd9b6ff518019b9265d19fd8a94e4ad5e47cc6c->enter($__internal_2c5c6b8179c549eab0e551827fd9b6ff518019b9265d19fd8a94e4ad5e47cc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Formato";
        
        $__internal_2c5c6b8179c549eab0e551827fd9b6ff518019b9265d19fd8a94e4ad5e47cc6c->leave($__internal_2c5c6b8179c549eab0e551827fd9b6ff518019b9265d19fd8a94e4ad5e47cc6c_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_c09724a09df5dbf520a34fd191f1ea6f6caffb30f3efb23c80c477519d62f206 = $this->env->getExtension("native_profiler");
        $__internal_c09724a09df5dbf520a34fd191f1ea6f6caffb30f3efb23c80c477519d62f206->enter($__internal_c09724a09df5dbf520a34fd191f1ea6f6caffb30f3efb23c80c477519d62f206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Generar Formato</h2>
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
        echo $this->env->getExtension('routing')->getPath("proveedores_formato");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    <fieldset>
            <div class=\"controls\">
               <input name='go' type='submit' value='Formato' />
            </div>
        </div>
    </fieldset>
    

</form>
</div>
</div>
 </div>
";
        
        $__internal_c09724a09df5dbf520a34fd191f1ea6f6caffb30f3efb23c80c477519d62f206->leave($__internal_c09724a09df5dbf520a34fd191f1ea6f6caffb30f3efb23c80c477519d62f206_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:formato.html.twig";
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
/* {% block title %}Generar Formato{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Generar Formato</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('proveedores_formato') }}" method="POST" class="form-horizontal">*/
/*     <fieldset>*/
/*             <div class="controls">*/
/*                <input name='go' type='submit' value='Formato' />*/
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
