<?php

/* IncentivesGarantiasBundle:Redenciones:estado.html.twig */
class __TwigTemplate_4eda5115dfe522aeaf50299b77f53feecac1461e222d9a8bb1a93c6dadf21232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:estado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d148181299a394764790fbc4f796b33acc1599a5c26c03ad6e5bc4f6e304f67 = $this->env->getExtension("native_profiler");
        $__internal_1d148181299a394764790fbc4f796b33acc1599a5c26c03ad6e5bc4f6e304f67->enter($__internal_1d148181299a394764790fbc4f796b33acc1599a5c26c03ad6e5bc4f6e304f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Redenciones:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d148181299a394764790fbc4f796b33acc1599a5c26c03ad6e5bc4f6e304f67->leave($__internal_1d148181299a394764790fbc4f796b33acc1599a5c26c03ad6e5bc4f6e304f67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67f2b0abb54c12b76d3c4cbc7c18a41e7499eb9d9b01369906a8fc7094005dfc = $this->env->getExtension("native_profiler");
        $__internal_67f2b0abb54c12b76d3c4cbc7c18a41e7499eb9d9b01369906a8fc7094005dfc->enter($__internal_67f2b0abb54c12b76d3c4cbc7c18a41e7499eb9d9b01369906a8fc7094005dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:Redencion:estado";
        
        $__internal_67f2b0abb54c12b76d3c4cbc7c18a41e7499eb9d9b01369906a8fc7094005dfc->leave($__internal_67f2b0abb54c12b76d3c4cbc7c18a41e7499eb9d9b01369906a8fc7094005dfc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_975c21890b22072ba90fe6be9c5cfa7d476401103a8b628e426617ab998234a7 = $this->env->getExtension("native_profiler");
        $__internal_975c21890b22072ba90fe6be9c5cfa7d476401103a8b628e426617ab998234a7->enter($__internal_975c21890b22072ba90fe6be9c5cfa7d476401103a8b628e426617ab998234a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Redencion:estado page</h1>
";
        
        $__internal_975c21890b22072ba90fe6be9c5cfa7d476401103a8b628e426617ab998234a7->leave($__internal_975c21890b22072ba90fe6be9c5cfa7d476401103a8b628e426617ab998234a7_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:estado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}IncentivesRedencionesBundle:Redencion:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Redencion:estado page</h1>*/
/* {% endblock %}*/
/* */
