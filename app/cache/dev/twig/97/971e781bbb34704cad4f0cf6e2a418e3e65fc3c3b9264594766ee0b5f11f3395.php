<?php

/* IncentivesSolicitudesBundle:Requisiciones:email.txt.twig */
class __TwigTemplate_923affd62dad8f5c11cfaecfd9c1d17a8934abf7221272c66aed60618e162da0 extends Twig_Template
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
        $__internal_301e883fad243247dc9bd5b693adcca1aa9e3a8193f496004dbfb7d47e1329d8 = $this->env->getExtension("native_profiler");
        $__internal_301e883fad243247dc9bd5b693adcca1aa9e3a8193f496004dbfb7d47e1329d8->enter($__internal_301e883fad243247dc9bd5b693adcca1aa9e3a8193f496004dbfb7d47e1329d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Requisiciones:email.txt.twig"));

        // line 1
        echo "La cotización ";
        echo $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "consecutivo", array());
        echo " tal correspondiente a la solicitud ";
        echo $this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "solicitud", array()), "id", array());
        echo " se encuentra ";
        echo (isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion"));
        echo ".";
        
        $__internal_301e883fad243247dc9bd5b693adcca1aa9e3a8193f496004dbfb7d47e1329d8->leave($__internal_301e883fad243247dc9bd5b693adcca1aa9e3a8193f496004dbfb7d47e1329d8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Requisiciones:email.txt.twig";
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
/* La cotización {{ cotizacion.consecutivo }} tal correspondiente a la solicitud {{ cotizacion.solicitud.id }} se encuentra {{ accion }}.*/
