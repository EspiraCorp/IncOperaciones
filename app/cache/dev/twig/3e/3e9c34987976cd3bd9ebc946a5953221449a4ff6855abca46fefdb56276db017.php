<?php

/* IncentivesOperacionesBundle:Contacto:index.html.twig */
class __TwigTemplate_250ec8c1c3f03a86d54fd9e70f68b9c0df43e1f92269356b6db3839dddcecd27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Contacto:index.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b0b8f7274bb7a38e60bdc7c96088da558821e5d1b632a0564cee05d066cb872 = $this->env->getExtension("native_profiler");
        $__internal_5b0b8f7274bb7a38e60bdc7c96088da558821e5d1b632a0564cee05d066cb872->enter($__internal_5b0b8f7274bb7a38e60bdc7c96088da558821e5d1b632a0564cee05d066cb872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Contacto:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b0b8f7274bb7a38e60bdc7c96088da558821e5d1b632a0564cee05d066cb872->leave($__internal_5b0b8f7274bb7a38e60bdc7c96088da558821e5d1b632a0564cee05d066cb872_prof);

    }

    // line 2
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_871ac60bba6d0ebf21b494db38fa55a5af5f28a926210ac0db3f98a459240552 = $this->env->getExtension("native_profiler");
        $__internal_871ac60bba6d0ebf21b494db38fa55a5af5f28a926210ac0db3f98a459240552->enter($__internal_871ac60bba6d0ebf21b494db38fa55a5af5f28a926210ac0db3f98a459240552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 3
        echo "Registro agregado.
";
        
        $__internal_871ac60bba6d0ebf21b494db38fa55a5af5f28a926210ac0db3f98a459240552->leave($__internal_871ac60bba6d0ebf21b494db38fa55a5af5f28a926210ac0db3f98a459240552_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Contacto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block cuerpo %}*/
/* Registro agregado.*/
/* {% endblock %}*/
