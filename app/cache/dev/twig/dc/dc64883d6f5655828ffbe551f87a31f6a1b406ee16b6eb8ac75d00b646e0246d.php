<?php

/* IncentivesCatalogoBundle:Cliente:estado.html.twig */
class __TwigTemplate_c523b5fd59b2371a2b5f062abaaa3aa18de57bc733029b942af269a887cc9744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Cliente:estado.html.twig", 1);
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
        $__internal_0fe5c77c6c7bcf71073245a3b135a420ae73ea7b750f15e76cc71012e50ea115 = $this->env->getExtension("native_profiler");
        $__internal_0fe5c77c6c7bcf71073245a3b135a420ae73ea7b750f15e76cc71012e50ea115->enter($__internal_0fe5c77c6c7bcf71073245a3b135a420ae73ea7b750f15e76cc71012e50ea115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Cliente:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe5c77c6c7bcf71073245a3b135a420ae73ea7b750f15e76cc71012e50ea115->leave($__internal_0fe5c77c6c7bcf71073245a3b135a420ae73ea7b750f15e76cc71012e50ea115_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fefc3e9c21ec52a20ac7f72686e2fd6fcaa1e9364e9e952c815d0936158b484d = $this->env->getExtension("native_profiler");
        $__internal_fefc3e9c21ec52a20ac7f72686e2fd6fcaa1e9364e9e952c815d0936158b484d->enter($__internal_fefc3e9c21ec52a20ac7f72686e2fd6fcaa1e9364e9e952c815d0936158b484d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesCatalogoBundle:Cliente:estado";
        
        $__internal_fefc3e9c21ec52a20ac7f72686e2fd6fcaa1e9364e9e952c815d0936158b484d->leave($__internal_fefc3e9c21ec52a20ac7f72686e2fd6fcaa1e9364e9e952c815d0936158b484d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_296cb0106e33e28fcfa435c91756db88febc3a224069cb6ee9c05babf6b3f43c = $this->env->getExtension("native_profiler");
        $__internal_296cb0106e33e28fcfa435c91756db88febc3a224069cb6ee9c05babf6b3f43c->enter($__internal_296cb0106e33e28fcfa435c91756db88febc3a224069cb6ee9c05babf6b3f43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Cliente:estado page</h1>
";
        
        $__internal_296cb0106e33e28fcfa435c91756db88febc3a224069cb6ee9c05babf6b3f43c->leave($__internal_296cb0106e33e28fcfa435c91756db88febc3a224069cb6ee9c05babf6b3f43c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Cliente:estado.html.twig";
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
/* {% block title %}IncentivesCatalogoBundle:Cliente:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Cliente:estado page</h1>*/
/* {% endblock %}*/
/* */
