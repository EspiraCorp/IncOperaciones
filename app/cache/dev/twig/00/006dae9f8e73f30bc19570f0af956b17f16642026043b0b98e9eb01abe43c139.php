<?php

/* IncentivesServiciosBundle:Default:index.html.twig */
class __TwigTemplate_46b73bfcfe3060d6ede3c8ce86b8c9ef410354963ad402375e60093a77aaad5a extends Twig_Template
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
        $__internal_2357d0e82322ba7b91f2f72dac0158f7f0c933afb4d819e1142726cffbccc555 = $this->env->getExtension("native_profiler");
        $__internal_2357d0e82322ba7b91f2f72dac0158f7f0c933afb4d819e1142726cffbccc555->enter($__internal_2357d0e82322ba7b91f2f72dac0158f7f0c933afb4d819e1142726cffbccc555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesServiciosBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_2357d0e82322ba7b91f2f72dac0158f7f0c933afb4d819e1142726cffbccc555->leave($__internal_2357d0e82322ba7b91f2f72dac0158f7f0c933afb4d819e1142726cffbccc555_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesServiciosBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
