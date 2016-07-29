<?php

/* IncentivesRedencionesBundle:Guia:estado.html.twig */
class __TwigTemplate_4369cfa1d0eb339d3995417f56fbb8f1f310793a2450f765a5538950585393b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Guia:estado.html.twig", 1);
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
        $__internal_de6284e104fbcfee41e140fe6a1180b05f06f964550cffb3efa133dde3d1934b = $this->env->getExtension("native_profiler");
        $__internal_de6284e104fbcfee41e140fe6a1180b05f06f964550cffb3efa133dde3d1934b->enter($__internal_de6284e104fbcfee41e140fe6a1180b05f06f964550cffb3efa133dde3d1934b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Guia:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de6284e104fbcfee41e140fe6a1180b05f06f964550cffb3efa133dde3d1934b->leave($__internal_de6284e104fbcfee41e140fe6a1180b05f06f964550cffb3efa133dde3d1934b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ec96f850cdce59dfb79fb0dd5f954c6c6347ebd661c4a12a7f1d5647ce69cfe = $this->env->getExtension("native_profiler");
        $__internal_4ec96f850cdce59dfb79fb0dd5f954c6c6347ebd661c4a12a7f1d5647ce69cfe->enter($__internal_4ec96f850cdce59dfb79fb0dd5f954c6c6347ebd661c4a12a7f1d5647ce69cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:Guia:estado";
        
        $__internal_4ec96f850cdce59dfb79fb0dd5f954c6c6347ebd661c4a12a7f1d5647ce69cfe->leave($__internal_4ec96f850cdce59dfb79fb0dd5f954c6c6347ebd661c4a12a7f1d5647ce69cfe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_37f69dc2e2dc347988c5308503e45d58c4b046e5fd96e0938ee5b391808cbbbc = $this->env->getExtension("native_profiler");
        $__internal_37f69dc2e2dc347988c5308503e45d58c4b046e5fd96e0938ee5b391808cbbbc->enter($__internal_37f69dc2e2dc347988c5308503e45d58c4b046e5fd96e0938ee5b391808cbbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Guia:estado page</h1>
";
        
        $__internal_37f69dc2e2dc347988c5308503e45d58c4b046e5fd96e0938ee5b391808cbbbc->leave($__internal_37f69dc2e2dc347988c5308503e45d58c4b046e5fd96e0938ee5b391808cbbbc_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Guia:estado.html.twig";
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
/* {% block title %}IncentivesRedencionesBundle:Guia:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Guia:estado page</h1>*/
/* {% endblock %}*/
/* */
