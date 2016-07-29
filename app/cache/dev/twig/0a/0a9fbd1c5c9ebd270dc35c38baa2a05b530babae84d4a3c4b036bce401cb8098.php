<?php

/* IncentivesOrdenesBundle:Ordenes:emailcancelar.txt.twig */
class __TwigTemplate_58ec6c5bb594f2ff0f7f728309f6d3043c20e117fb3e4cec0ca25a97ae6cf7b2 extends Twig_Template
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
        $__internal_922aef11450ee82f1b6dad2b9e254c3ce63a1f82bbc481210d924afe3503274f = $this->env->getExtension("native_profiler");
        $__internal_922aef11450ee82f1b6dad2b9e254c3ce63a1f82bbc481210d924afe3503274f->enter($__internal_922aef11450ee82f1b6dad2b9e254c3ce63a1f82bbc481210d924afe3503274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:emailcancelar.txt.twig"));

        // line 1
        echo "Bogotá, Colombia.

SEÑOR PROVEEDOR

Se le informa que la Orden de compra N° ";
        // line 5
        echo $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "consecutivo", array());
        echo ", ha sido cancelada.

Cordialmente, 

División de Compras.
";
        
        $__internal_922aef11450ee82f1b6dad2b9e254c3ce63a1f82bbc481210d924afe3503274f->leave($__internal_922aef11450ee82f1b6dad2b9e254c3ce63a1f82bbc481210d924afe3503274f_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:emailcancelar.txt.twig";
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
/* Se le informa que la Orden de compra N° {{ orden.consecutivo }}, ha sido cancelada.*/
/* */
/* Cordialmente, */
/* */
/* División de Compras.*/
/* */
