<?php

/* IncentivesOperacionesBundle:Contacto:email.txt.twig */
class __TwigTemplate_559a7b525aa2ec94290fdfb2ccddc1abcacb0e3dfc0f6c10ec7d9a2eb9271001 extends Twig_Template
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
        $__internal_00db8ca5fdff1a1716345f26878eb3ce8d30218ac9c0fc272974a7ec3e30815e = $this->env->getExtension("native_profiler");
        $__internal_00db8ca5fdff1a1716345f26878eb3ce8d30218ac9c0fc272974a7ec3e30815e->enter($__internal_00db8ca5fdff1a1716345f26878eb3ce8d30218ac9c0fc272974a7ec3e30815e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Contacto:email.txt.twig"));

        // line 1
        echo "Buen dia.

Señor ";
        // line 3
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "nombres", array());
        echo " nos comunicamos con usted para informarle que sus datos se encuentran registrados en la plataforma de operaciones de Incentives como contacto asociado al proveedor ";
        echo $this->getAttribute($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "proveedor", array()), "nombre", array());
        echo ".

Sus datos de contacto son
Usuario: ";
        // line 6
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "correo", array());
        echo "

Para actualizar su contraseña puede ingresar a la siguiente direccion.

<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("incentives_operaciones_contacto_actualizarpassword", array("id" => $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "id", array()), "pass" => $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "password", array())));
        echo "\">Cambiar clave.</a>

Gracias por su atencion.";
        
        $__internal_00db8ca5fdff1a1716345f26878eb3ce8d30218ac9c0fc272974a7ec3e30815e->leave($__internal_00db8ca5fdff1a1716345f26878eb3ce8d30218ac9c0fc272974a7ec3e30815e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Contacto:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  34 => 6,  26 => 3,  22 => 1,);
    }
}
/* Buen dia.*/
/* */
/* Señor {{ contacto.nombres }} nos comunicamos con usted para informarle que sus datos se encuentran registrados en la plataforma de operaciones de Incentives como contacto asociado al proveedor {{ contacto.proveedor.nombre }}.*/
/* */
/* Sus datos de contacto son*/
/* Usuario: {{ contacto.correo }}*/
/* */
/* Para actualizar su contraseña puede ingresar a la siguiente direccion.*/
/* */
/* <a href="{{ url('incentives_operaciones_contacto_actualizarpassword', {'id': contacto.id, 'pass': contacto.password}) }}">Cambiar clave.</a>*/
/* */
/* Gracias por su atencion.*/
