<?php

/* IncentivesBaseBundle:Usuarios:email.txt.twig */
class __TwigTemplate_819d3299c8a60e750de5426e16c62cff4c8befa7fa0390da9a076c611aff12a9 extends Twig_Template
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
        $__internal_abd82b62a78408ff52907f7759faaa1757c525c437e1c685a1e7fc3b46832cd9 = $this->env->getExtension("native_profiler");
        $__internal_abd82b62a78408ff52907f7759faaa1757c525c437e1c685a1e7fc3b46832cd9->enter($__internal_abd82b62a78408ff52907f7759faaa1757c525c437e1c685a1e7fc3b46832cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Usuarios:email.txt.twig"));

        // line 1
        echo "Para actualizar su contraseña por favor ingrese a la siguiente direccion.

";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("proveedores_actualizarpassword", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "pass" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "password", array())));
        echo "

";
        
        $__internal_abd82b62a78408ff52907f7759faaa1757c525c437e1c685a1e7fc3b46832cd9->leave($__internal_abd82b62a78408ff52907f7759faaa1757c525c437e1c685a1e7fc3b46832cd9_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Usuarios:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* Para actualizar su contraseña por favor ingrese a la siguiente direccion.*/
/* */
/* {{ url('proveedores_actualizarpassword', {'id': usuario.id, 'pass': usuario.password}) }}*/
/* */
/* */
