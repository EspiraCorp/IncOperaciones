<?php

/* IncentivesOrdenesBundle:Ordenes:proveedor.html.twig */
class __TwigTemplate_0234b3487903181f8e9ee80a9e1e0d77438f481687421c6b817cb17a8f9a3b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:Ordenes:proveedor.html.twig", 1);
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
        $__internal_69ef1699bdbeae894aaa898c56041bd5836d74a4d5d0b49f0d055a2eb58e4fcd = $this->env->getExtension("native_profiler");
        $__internal_69ef1699bdbeae894aaa898c56041bd5836d74a4d5d0b49f0d055a2eb58e4fcd->enter($__internal_69ef1699bdbeae894aaa898c56041bd5836d74a4d5d0b49f0d055a2eb58e4fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:proveedor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69ef1699bdbeae894aaa898c56041bd5836d74a4d5d0b49f0d055a2eb58e4fcd->leave($__internal_69ef1699bdbeae894aaa898c56041bd5836d74a4d5d0b49f0d055a2eb58e4fcd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b45a2ef0bbdfcda7607caa97cfa0ff68050f8bf94ebc1a131ed4a080a8260c5a = $this->env->getExtension("native_profiler");
        $__internal_b45a2ef0bbdfcda7607caa97cfa0ff68050f8bf94ebc1a131ed4a080a8260c5a->enter($__internal_b45a2ef0bbdfcda7607caa97cfa0ff68050f8bf94ebc1a131ed4a080a8260c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesOperacionesBundle:Odernes:proveedor";
        
        $__internal_b45a2ef0bbdfcda7607caa97cfa0ff68050f8bf94ebc1a131ed4a080a8260c5a->leave($__internal_b45a2ef0bbdfcda7607caa97cfa0ff68050f8bf94ebc1a131ed4a080a8260c5a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_765e5dd730d06edb45e9d3034cefefc53a9db85db006980e8e781cfc11b5db67 = $this->env->getExtension("native_profiler");
        $__internal_765e5dd730d06edb45e9d3034cefefc53a9db85db006980e8e781cfc11b5db67->enter($__internal_765e5dd730d06edb45e9d3034cefefc53a9db85db006980e8e781cfc11b5db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Odernes:proveedor page</h1>
";
        
        $__internal_765e5dd730d06edb45e9d3034cefefc53a9db85db006980e8e781cfc11b5db67->leave($__internal_765e5dd730d06edb45e9d3034cefefc53a9db85db006980e8e781cfc11b5db67_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:proveedor.html.twig";
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
/* {% block title %}IncentivesOperacionesBundle:Odernes:proveedor{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Odernes:proveedor page</h1>*/
/* {% endblock %}*/
/* */
