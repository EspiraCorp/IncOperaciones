<?php

/* IncentivesOrdenesBundle:Ordenes:email.txt.twig */
class __TwigTemplate_02974367f6f088b19bbc797efcb3ebda1276f5501936c1754ce1f64462e42737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73a74e81fc789960016de03329c5179a09ec171a3d3501fa03847e7b40c9089f = $this->env->getExtension("native_profiler");
        $__internal_73a74e81fc789960016de03329c5179a09ec171a3d3501fa03847e7b40c9089f->enter($__internal_73a74e81fc789960016de03329c5179a09ec171a3d3501fa03847e7b40c9089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:email.txt.twig"));

        // line 1
        echo "Bogotá, Colombia.

SEÑOR PROVEEDOR

Se le informa que la Orden de compra N° ";
        // line 5
        echo $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "consecutivo", array());
        echo ", se encuentra disponible en la plataforma tecnológica, le invitamos a proceder con la respectiva Orden de Despacho dentro de la fecha pactada.

Cordialmente, 

División de Compras.
";
        
        $__internal_73a74e81fc789960016de03329c5179a09ec171a3d3501fa03847e7b40c9089f->leave($__internal_73a74e81fc789960016de03329c5179a09ec171a3d3501fa03847e7b40c9089f_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* Bogotá, Colombia.*/
/* */
/* SEÑOR PROVEEDOR*/
/* */
/* Se le informa que la Orden de compra N° {{ orden.consecutivo }}, se encuentra disponible en la plataforma tecnológica, le invitamos a proceder con la respectiva Orden de Despacho dentro de la fecha pactada.*/
/* */
/* Cordialmente, */
/* */
/* División de Compras.*/
/* */
