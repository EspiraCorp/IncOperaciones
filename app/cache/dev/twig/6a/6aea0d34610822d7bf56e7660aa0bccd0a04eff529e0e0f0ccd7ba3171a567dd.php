<?php

/* IncentivesInventarioBundle:Inventario:emailDespacho.txt.twig */
class __TwigTemplate_ee32ad2c96fed0f67ed0c904b3c16901695ec7113689314fd6e2e666eab746a3 extends Twig_Template
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
        $__internal_3e0a287692e7595cd77dd56c9d578f6d23fae02da731cdc51c16ad6d7431af83 = $this->env->getExtension("native_profiler");
        $__internal_3e0a287692e7595cd77dd56c9d578f6d23fae02da731cdc51c16ad6d7431af83->enter($__internal_3e0a287692e7595cd77dd56c9d578f6d23fae02da731cdc51c16ad6d7431af83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:emailDespacho.txt.twig"));

        // line 1
        echo "Existe un nuevo producto aprobado para compra en la solicitud ";
        echo $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array());
        echo ".

";
        
        $__internal_3e0a287692e7595cd77dd56c9d578f6d23fae02da731cdc51c16ad6d7431af83->leave($__internal_3e0a287692e7595cd77dd56c9d578f6d23fae02da731cdc51c16ad6d7431af83_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:emailDespacho.txt.twig";
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
/* Existe un nuevo producto aprobado para compra en la solicitud {{ solicitud.id }}.*/
/* */
/* */
