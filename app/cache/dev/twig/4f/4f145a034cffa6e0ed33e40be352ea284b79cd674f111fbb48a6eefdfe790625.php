<?php

/* IncentivesSolicitudesBundle:Cotizaciones:emailAprobacion.txt.twig */
class __TwigTemplate_6dce9535cfea17f59a98a829cebfbc2c824dd6db6ecef223d06eb52cdd4ba623 extends Twig_Template
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
        $__internal_08f2e4c1d6e0f410657ab3ce67c5bf40f49e7ffa1a7891a224569f7b7d3c22c0 = $this->env->getExtension("native_profiler");
        $__internal_08f2e4c1d6e0f410657ab3ce67c5bf40f49e7ffa1a7891a224569f7b7d3c22c0->enter($__internal_08f2e4c1d6e0f410657ab3ce67c5bf40f49e7ffa1a7891a224569f7b7d3c22c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:emailAprobacion.txt.twig"));

        // line 1
        echo "Existe un nuevo producto aprobado para compra en la solicitud ";
        echo $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array());
        echo ".

";
        
        $__internal_08f2e4c1d6e0f410657ab3ce67c5bf40f49e7ffa1a7891a224569f7b7d3c22c0->leave($__internal_08f2e4c1d6e0f410657ab3ce67c5bf40f49e7ffa1a7891a224569f7b7d3c22c0_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:emailAprobacion.txt.twig";
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
