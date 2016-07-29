<?php

/* IncentivesOperacionesBundle:Convocatorias:notificar.html.twig */
class __TwigTemplate_cfd5c1936b3d5ae1ab663de61129e8ed2ad6988b479b41425fd0b3e230fc9c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Convocatorias:notificar.html.twig", 1);
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
        $__internal_53f63fb847b0dc9c5fae5ef7b8fdcc3d0a7b356bfe1f3ecbbcf11ada53f77864 = $this->env->getExtension("native_profiler");
        $__internal_53f63fb847b0dc9c5fae5ef7b8fdcc3d0a7b356bfe1f3ecbbcf11ada53f77864->enter($__internal_53f63fb847b0dc9c5fae5ef7b8fdcc3d0a7b356bfe1f3ecbbcf11ada53f77864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Convocatorias:notificar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f63fb847b0dc9c5fae5ef7b8fdcc3d0a7b356bfe1f3ecbbcf11ada53f77864->leave($__internal_53f63fb847b0dc9c5fae5ef7b8fdcc3d0a7b356bfe1f3ecbbcf11ada53f77864_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc377bf07192c01927e7e1dc04b2b8484ed3eacf58ae11474d71bf00c9ab15a1 = $this->env->getExtension("native_profiler");
        $__internal_dc377bf07192c01927e7e1dc04b2b8484ed3eacf58ae11474d71bf00c9ab15a1->enter($__internal_dc377bf07192c01927e7e1dc04b2b8484ed3eacf58ae11474d71bf00c9ab15a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesOperacionesBundle:Convocatorias:notificar";
        
        $__internal_dc377bf07192c01927e7e1dc04b2b8484ed3eacf58ae11474d71bf00c9ab15a1->leave($__internal_dc377bf07192c01927e7e1dc04b2b8484ed3eacf58ae11474d71bf00c9ab15a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bbdbf2dacda3400b772f7dea2e7dde92d407a029433d37f4c4de4aa41ba6179 = $this->env->getExtension("native_profiler");
        $__internal_2bbdbf2dacda3400b772f7dea2e7dde92d407a029433d37f4c4de4aa41ba6179->enter($__internal_2bbdbf2dacda3400b772f7dea2e7dde92d407a029433d37f4c4de4aa41ba6179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Convocatorias:notificar page</h1>
";
        
        $__internal_2bbdbf2dacda3400b772f7dea2e7dde92d407a029433d37f4c4de4aa41ba6179->leave($__internal_2bbdbf2dacda3400b772f7dea2e7dde92d407a029433d37f4c4de4aa41ba6179_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Convocatorias:notificar.html.twig";
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
/* {% block title %}IncentivesOperacionesBundle:Convocatorias:notificar{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Convocatorias:notificar page</h1>*/
/* {% endblock %}*/
/* */
