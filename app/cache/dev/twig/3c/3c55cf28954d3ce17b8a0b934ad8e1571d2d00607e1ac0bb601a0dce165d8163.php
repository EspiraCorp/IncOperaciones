<?php

/* IncentivesSolicitudesBundle:Solicitudes:email.txt.twig */
class __TwigTemplate_7fa8c4026ed84bfbc70a14c7a8bf3667d27ef8c7068b866935dc04ed2168ff56 extends Twig_Template
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
        $__internal_2e587c5e0ea2ad3293e74fa4a5afb606b9fe15090712cc61bbdd0d84f631f201 = $this->env->getExtension("native_profiler");
        $__internal_2e587c5e0ea2ad3293e74fa4a5afb606b9fe15090712cc61bbdd0d84f631f201->enter($__internal_2e587c5e0ea2ad3293e74fa4a5afb606b9fe15090712cc61bbdd0d84f631f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:email.txt.twig"));

        // line 1
        echo "La solicitud ";
        echo $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array());
        echo " ha sido ";
        echo (isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion"));
        echo ".

";
        
        $__internal_2e587c5e0ea2ad3293e74fa4a5afb606b9fe15090712cc61bbdd0d84f631f201->leave($__internal_2e587c5e0ea2ad3293e74fa4a5afb606b9fe15090712cc61bbdd0d84f631f201_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:email.txt.twig";
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
/* La solicitud {{ solicitud.id }} ha sido {{ accion }}.*/
/* */
/* */
