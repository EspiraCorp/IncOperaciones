<?php

/* IncentivesSolicitudesBundle:Requisiciones:emailAprobacion.txt.twig */
class __TwigTemplate_b11bf2ac98bde0919e4efc45111ea16cf4a284b3f03a1220d362f0dfe890e805 extends Twig_Template
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
        $__internal_5dd4ac897d8b3f86a6c2cbbb4fcc41d4aefda4d4fb67fa2de241ccb564cb25d8 = $this->env->getExtension("native_profiler");
        $__internal_5dd4ac897d8b3f86a6c2cbbb4fcc41d4aefda4d4fb67fa2de241ccb564cb25d8->enter($__internal_5dd4ac897d8b3f86a6c2cbbb4fcc41d4aefda4d4fb67fa2de241ccb564cb25d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Requisiciones:emailAprobacion.txt.twig"));

        // line 1
        echo "Existe un nuevo producto aprobado para compra en la solicitud ";
        echo $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array());
        echo ".

";
        
        $__internal_5dd4ac897d8b3f86a6c2cbbb4fcc41d4aefda4d4fb67fa2de241ccb564cb25d8->leave($__internal_5dd4ac897d8b3f86a6c2cbbb4fcc41d4aefda4d4fb67fa2de241ccb564cb25d8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Requisiciones:emailAprobacion.txt.twig";
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
