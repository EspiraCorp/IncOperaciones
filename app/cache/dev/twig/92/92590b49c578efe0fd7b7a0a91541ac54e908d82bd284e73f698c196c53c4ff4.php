<?php

/* IncentivesBaseBundle:Usuarios:nombre.html.twig */
class __TwigTemplate_31d315312288d8d58148433294695b32b5f6e16ba905b2df3db2bfcab3aed4b6 extends Twig_Template
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
        $__internal_f02e35f5e2cca0877406745df5a861fdf4f46ddb30034f1802207ed789c7e1e2 = $this->env->getExtension("native_profiler");
        $__internal_f02e35f5e2cca0877406745df5a861fdf4f46ddb30034f1802207ed789c7e1e2->enter($__internal_f02e35f5e2cca0877406745df5a861fdf4f46ddb30034f1802207ed789c7e1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Usuarios:nombre.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["userName"]) ? $context["userName"] : $this->getContext($context, "userName")), "html", null, true);
        
        $__internal_f02e35f5e2cca0877406745df5a861fdf4f46ddb30034f1802207ed789c7e1e2->leave($__internal_f02e35f5e2cca0877406745df5a861fdf4f46ddb30034f1802207ed789c7e1e2_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Usuarios:nombre.html.twig";
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
/* {{ userName }}*/
