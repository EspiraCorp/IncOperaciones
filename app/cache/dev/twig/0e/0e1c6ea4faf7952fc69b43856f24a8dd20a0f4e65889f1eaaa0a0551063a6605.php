<?php

/* IncentivesSolicitudesBundle:Cotizaciones:email.txt.twig */
class __TwigTemplate_339c1a64c8b14159274084dadb989e7cb47d58bb94032bd9a3c0a1123be9c0b1 extends Twig_Template
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
        $__internal_5bfd4ae063a01877d520dc80eb9a70effafacf841c90f912aac4e9fa795d1057 = $this->env->getExtension("native_profiler");
        $__internal_5bfd4ae063a01877d520dc80eb9a70effafacf841c90f912aac4e9fa795d1057->enter($__internal_5bfd4ae063a01877d520dc80eb9a70effafacf841c90f912aac4e9fa795d1057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:email.txt.twig"));

        // line 1
        echo "La cotización ";
        echo $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "consecutivo", array());
        echo " tal correspondiente a la solicitud ";
        echo $this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "solicitud", array()), "id", array());
        echo " se encuentra ";
        echo (isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion"));
        echo ".";
        
        $__internal_5bfd4ae063a01877d520dc80eb9a70effafacf841c90f912aac4e9fa795d1057->leave($__internal_5bfd4ae063a01877d520dc80eb9a70effafacf841c90f912aac4e9fa795d1057_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:email.txt.twig";
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
