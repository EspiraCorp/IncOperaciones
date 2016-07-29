<?php

/* IncentivesOperacionesBundle:Convocatorias:aconvocatoria.txt.twig */
class __TwigTemplate_76eeb68250134fe4ad35baed0a2ba4dbdf4aa11b4e2f833104aa5e448d824e73 extends Twig_Template
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
        $__internal_4b993c09fdec89db46d05931c2002b04aaea1e9a98dbaa27a62564f1816227ee = $this->env->getExtension("native_profiler");
        $__internal_4b993c09fdec89db46d05931c2002b04aaea1e9a98dbaa27a62564f1816227ee->enter($__internal_4b993c09fdec89db46d05931c2002b04aaea1e9a98dbaa27a62564f1816227ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Convocatorias:aconvocatoria.txt.twig"));

        // line 1
        echo "Bogotá, Colombia.

Se les informa a todos los proveedores de INC GROUP que se encuentran abiertas las convocatorias  para la presentación de Cotizaciones u ofertas de precios para la adquisición del producto y/o servicio: 

";
        // line 5
        echo $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "titulo", array());
        echo ", Le invitamos a consultar las bases de esta convocatoria privada en http://www.grupo-inc.com/ 

Cordialmente, 

División de Compras.
";
        
        $__internal_4b993c09fdec89db46d05931c2002b04aaea1e9a98dbaa27a62564f1816227ee->leave($__internal_4b993c09fdec89db46d05931c2002b04aaea1e9a98dbaa27a62564f1816227ee_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Convocatorias:aconvocatoria.txt.twig";
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
/* Se les informa a todos los proveedores de INC GROUP que se encuentran abiertas las convocatorias  para la presentación de Cotizaciones u ofertas de precios para la adquisición del producto y/o servicio: */
/* */
/* {{ convocatoria.titulo }}, Le invitamos a consultar las bases de esta convocatoria privada en http://www.grupo-inc.com/ */
/* */
/* Cordialmente, */
/* */
/* División de Compras.*/
/* */
