<?php

/* IncentivesRedencionesBundle:Redencion:nueva.html.twig */
class __TwigTemplate_c9ff37db0876e5004951d4a1da81d9ff034cdf32662a4c667892d9f3d4197570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:nueva.html.twig", 1);
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
        $__internal_f3a61703ecc4c8479623e05c8411cf5e2f74b4dd5f044028f4946b82575cdbba = $this->env->getExtension("native_profiler");
        $__internal_f3a61703ecc4c8479623e05c8411cf5e2f74b4dd5f044028f4946b82575cdbba->enter($__internal_f3a61703ecc4c8479623e05c8411cf5e2f74b4dd5f044028f4946b82575cdbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3a61703ecc4c8479623e05c8411cf5e2f74b4dd5f044028f4946b82575cdbba->leave($__internal_f3a61703ecc4c8479623e05c8411cf5e2f74b4dd5f044028f4946b82575cdbba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df89b93b69c1c646df91d0e672545daf9db1a9fd0130a070171f4380c68b8c4d = $this->env->getExtension("native_profiler");
        $__internal_df89b93b69c1c646df91d0e672545daf9db1a9fd0130a070171f4380c68b8c4d->enter($__internal_df89b93b69c1c646df91d0e672545daf9db1a9fd0130a070171f4380c68b8c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:Redencion:nueva";
        
        $__internal_df89b93b69c1c646df91d0e672545daf9db1a9fd0130a070171f4380c68b8c4d->leave($__internal_df89b93b69c1c646df91d0e672545daf9db1a9fd0130a070171f4380c68b8c4d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_20e01371c9cf8636b18b83fe26e346d5f543bf4a8daa925a5ffae831b56402a8 = $this->env->getExtension("native_profiler");
        $__internal_20e01371c9cf8636b18b83fe26e346d5f543bf4a8daa925a5ffae831b56402a8->enter($__internal_20e01371c9cf8636b18b83fe26e346d5f543bf4a8daa925a5ffae831b56402a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Redencion:nueva page</h1>
";
        
        $__internal_20e01371c9cf8636b18b83fe26e346d5f543bf4a8daa925a5ffae831b56402a8->leave($__internal_20e01371c9cf8636b18b83fe26e346d5f543bf4a8daa925a5ffae831b56402a8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:nueva.html.twig";
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
/* {% block title %}IncentivesRedencionesBundle:Redencion:nueva{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Redencion:nueva page</h1>*/
/* {% endblock %}*/
/* */
