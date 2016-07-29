<?php

/* IncentivesOrdenesBundle:Ordenes:emaillogistico.txt.twig */
class __TwigTemplate_80574bd485d8e92e2eb94b136b3b741c648e2f0f7e10e8b587135a7f7536366f extends Twig_Template
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
        $__internal_654889377b869e6193b049997a8883bb63a5be0b8281d3898c8c90bec44376e2 = $this->env->getExtension("native_profiler");
        $__internal_654889377b869e6193b049997a8883bb63a5be0b8281d3898c8c90bec44376e2->enter($__internal_654889377b869e6193b049997a8883bb63a5be0b8281d3898c8c90bec44376e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:emaillogistico.txt.twig"));

        // line 1
        echo "Se le informa que la Orden de compra N° ";
        echo $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "consecutivo", array());
        echo ", ha sido aprobada y debe generarse la planilla correspondiente.

Cordialmente, 

División de Compras.
";
        
        $__internal_654889377b869e6193b049997a8883bb63a5be0b8281d3898c8c90bec44376e2->leave($__internal_654889377b869e6193b049997a8883bb63a5be0b8281d3898c8c90bec44376e2_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:emaillogistico.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Se le informa que la Orden de compra N° {{ orden.consecutivo }}, ha sido aprobada y debe generarse la planilla correspondiente.*/
/* */
/* Cordialmente, */
/* */
/* División de Compras.*/
/* */
