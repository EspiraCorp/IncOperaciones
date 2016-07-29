<?php

/* IncentivesOperacionesBundle:Proveedor:email.txt.twig */
class __TwigTemplate_c42609a529b6cf4521de72dbe5b1c4aacc9883d49508929ad2f30e9c08a1de17 extends Twig_Template
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
        $__internal_92a32ad62251917a20b978728561d8db1486b2d747782a7423d069f877870666 = $this->env->getExtension("native_profiler");
        $__internal_92a32ad62251917a20b978728561d8db1486b2d747782a7423d069f877870666->enter($__internal_92a32ad62251917a20b978728561d8db1486b2d747782a7423d069f877870666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:email.txt.twig"));

        // line 1
        echo "Bogotá, Colombia. 

Apreciado ";
        // line 3
        echo $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array());
        echo ",

Desde hoy, al haber diligenciado su inscripción en nuestra plataforma tecnológica su empresa hace parte de nuestro selecto grupo de proveedores, agradecemos el tiempo empleado en la realización del registro. 

Igualmente, le invitamos a formalizar la inscripción y adjuntar la documentación necesaria para culminar satisfactoriamente esta actividad.

Para actualizar su contraseña por favor ingrese a la siguiente direccion.

";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("proveedores_actualizarpassword", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "pass" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "password", array())));
        echo "

USUARIO: ";
        // line 13
        echo $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array());
        echo "
";
        
        $__internal_92a32ad62251917a20b978728561d8db1486b2d747782a7423d069f877870666->leave($__internal_92a32ad62251917a20b978728561d8db1486b2d747782a7423d069f877870666_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  37 => 11,  26 => 3,  22 => 1,);
    }
}
/* Bogotá, Colombia. */
/* */
/* Apreciado {{ usuario.nombre }},*/
/* */
/* Desde hoy, al haber diligenciado su inscripción en nuestra plataforma tecnológica su empresa hace parte de nuestro selecto grupo de proveedores, agradecemos el tiempo empleado en la realización del registro. */
/* */
/* Igualmente, le invitamos a formalizar la inscripción y adjuntar la documentación necesaria para culminar satisfactoriamente esta actividad.*/
/* */
/* Para actualizar su contraseña por favor ingrese a la siguiente direccion.*/
/* */
/* {{ url('proveedores_actualizarpassword', {'id': usuario.id, 'pass': usuario.password}) }}*/
/* */
/* USUARIO: {{ usuario.username }}*/
/* */
