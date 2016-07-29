<?php

/* IncentivesFacturacionBundle:Facturas:proveedor.html.twig */
class __TwigTemplate_b7baa6ff10e329df3da2a4265c6374c73d40a81e73b4e0a003110772d810b180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Facturas:proveedor.html.twig", 1);
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
        $__internal_b0d4c94ea264b63057f42069dd001503feec818f5829e7e69c05c1b72fbec70b = $this->env->getExtension("native_profiler");
        $__internal_b0d4c94ea264b63057f42069dd001503feec818f5829e7e69c05c1b72fbec70b->enter($__internal_b0d4c94ea264b63057f42069dd001503feec818f5829e7e69c05c1b72fbec70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:proveedor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0d4c94ea264b63057f42069dd001503feec818f5829e7e69c05c1b72fbec70b->leave($__internal_b0d4c94ea264b63057f42069dd001503feec818f5829e7e69c05c1b72fbec70b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7b7a540855972cb68825b59acf1e2888833a45388beaed9199febdbf04fa55c = $this->env->getExtension("native_profiler");
        $__internal_f7b7a540855972cb68825b59acf1e2888833a45388beaed9199febdbf04fa55c->enter($__internal_f7b7a540855972cb68825b59acf1e2888833a45388beaed9199febdbf04fa55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesOperacionesBundle:Odernes:proveedor";
        
        $__internal_f7b7a540855972cb68825b59acf1e2888833a45388beaed9199febdbf04fa55c->leave($__internal_f7b7a540855972cb68825b59acf1e2888833a45388beaed9199febdbf04fa55c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_685d01ba22c08d8e7c2a69f1fc764bd58ab20195bd0a34ed4fbc183b4d86063e = $this->env->getExtension("native_profiler");
        $__internal_685d01ba22c08d8e7c2a69f1fc764bd58ab20195bd0a34ed4fbc183b4d86063e->enter($__internal_685d01ba22c08d8e7c2a69f1fc764bd58ab20195bd0a34ed4fbc183b4d86063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Odernes:proveedor page</h1>
";
        
        $__internal_685d01ba22c08d8e7c2a69f1fc764bd58ab20195bd0a34ed4fbc183b4d86063e->leave($__internal_685d01ba22c08d8e7c2a69f1fc764bd58ab20195bd0a34ed4fbc183b4d86063e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:proveedor.html.twig";
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
