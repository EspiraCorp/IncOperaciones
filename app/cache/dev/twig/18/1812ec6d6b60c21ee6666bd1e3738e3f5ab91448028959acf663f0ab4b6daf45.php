<?php

/* IncentivesFacturacionBundle:Facturas:email.txt.twig */
class __TwigTemplate_e7df5685550a9ac8f98c4503f51042d9f4fd9285cc93308b6b1620c884a09c97 extends Twig_Template
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
        $__internal_2676dc1861a03f03fa94df5ec9c6c3402c056968c3a39acf3220542fc2ddd0c9 = $this->env->getExtension("native_profiler");
        $__internal_2676dc1861a03f03fa94df5ec9c6c3402c056968c3a39acf3220542fc2ddd0c9->enter($__internal_2676dc1861a03f03fa94df5ec9c6c3402c056968c3a39acf3220542fc2ddd0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:email.txt.twig"));

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
        
        $__internal_2676dc1861a03f03fa94df5ec9c6c3402c056968c3a39acf3220542fc2ddd0c9->leave($__internal_2676dc1861a03f03fa94df5ec9c6c3402c056968c3a39acf3220542fc2ddd0c9_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:email.txt.twig";
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
