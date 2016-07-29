<?php

/* IncentivesOrdenesBundle:OrdenRedencion:generar.html.twig */
class __TwigTemplate_95af781af77d39e21a9c49a1e302b204e20a3e7570451836dbf2629c1b10b48d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:OrdenRedencion:generar.html.twig", 1);
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
        $__internal_3e8148d54f34b9feb6552bd139b6565957b8ad621aea0b2bfd27c08d213f9391 = $this->env->getExtension("native_profiler");
        $__internal_3e8148d54f34b9feb6552bd139b6565957b8ad621aea0b2bfd27c08d213f9391->enter($__internal_3e8148d54f34b9feb6552bd139b6565957b8ad621aea0b2bfd27c08d213f9391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:OrdenRedencion:generar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e8148d54f34b9feb6552bd139b6565957b8ad621aea0b2bfd27c08d213f9391->leave($__internal_3e8148d54f34b9feb6552bd139b6565957b8ad621aea0b2bfd27c08d213f9391_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79a7c0dd2159e3f039459fa9b4261c5773551e37ce427b8fdf89c087bd073453 = $this->env->getExtension("native_profiler");
        $__internal_79a7c0dd2159e3f039459fa9b4261c5773551e37ce427b8fdf89c087bd073453->enter($__internal_79a7c0dd2159e3f039459fa9b4261c5773551e37ce427b8fdf89c087bd073453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:OrdenRedencion:generar";
        
        $__internal_79a7c0dd2159e3f039459fa9b4261c5773551e37ce427b8fdf89c087bd073453->leave($__internal_79a7c0dd2159e3f039459fa9b4261c5773551e37ce427b8fdf89c087bd073453_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09528d99060827412fe35a1170302c398ecd163875b1bd8f937659bf155aec4c = $this->env->getExtension("native_profiler");
        $__internal_09528d99060827412fe35a1170302c398ecd163875b1bd8f937659bf155aec4c->enter($__internal_09528d99060827412fe35a1170302c398ecd163875b1bd8f937659bf155aec4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the OrdenRedencion:generar page</h1>
";
        
        $__internal_09528d99060827412fe35a1170302c398ecd163875b1bd8f937659bf155aec4c->leave($__internal_09528d99060827412fe35a1170302c398ecd163875b1bd8f937659bf155aec4c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:OrdenRedencion:generar.html.twig";
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
/* {% block title %}IncentivesRedencionesBundle:OrdenRedencion:generar{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the OrdenRedencion:generar page</h1>*/
/* {% endblock %}*/
/* */
