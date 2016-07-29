<?php

/* IncentivesInventarioBundle:Courier:estado.html.twig */
class __TwigTemplate_1d94e7fa6f6b887b2805962fab34f2f0cab0d4a3660d9fecdd40c29d1fc8017f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Courier:estado.html.twig", 1);
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
        $__internal_d8f93d74977a481e3a04b7c03047a89e4f87a740d2cb39c836914881fbba3cb0 = $this->env->getExtension("native_profiler");
        $__internal_d8f93d74977a481e3a04b7c03047a89e4f87a740d2cb39c836914881fbba3cb0->enter($__internal_d8f93d74977a481e3a04b7c03047a89e4f87a740d2cb39c836914881fbba3cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Courier:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f93d74977a481e3a04b7c03047a89e4f87a740d2cb39c836914881fbba3cb0->leave($__internal_d8f93d74977a481e3a04b7c03047a89e4f87a740d2cb39c836914881fbba3cb0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c3d3884afe3d6026cdbd22ea4e75a9540414a2a850d7c4c9e1282afdfaa368e = $this->env->getExtension("native_profiler");
        $__internal_9c3d3884afe3d6026cdbd22ea4e75a9540414a2a850d7c4c9e1282afdfaa368e->enter($__internal_9c3d3884afe3d6026cdbd22ea4e75a9540414a2a850d7c4c9e1282afdfaa368e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesInventarioBundle:Courier:estado";
        
        $__internal_9c3d3884afe3d6026cdbd22ea4e75a9540414a2a850d7c4c9e1282afdfaa368e->leave($__internal_9c3d3884afe3d6026cdbd22ea4e75a9540414a2a850d7c4c9e1282afdfaa368e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f0d9528bf17623f253e1035cf97abf7afa8461e994d5077fdea114798e15afa = $this->env->getExtension("native_profiler");
        $__internal_1f0d9528bf17623f253e1035cf97abf7afa8461e994d5077fdea114798e15afa->enter($__internal_1f0d9528bf17623f253e1035cf97abf7afa8461e994d5077fdea114798e15afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Courier:estado page</h1>
";
        
        $__internal_1f0d9528bf17623f253e1035cf97abf7afa8461e994d5077fdea114798e15afa->leave($__internal_1f0d9528bf17623f253e1035cf97abf7afa8461e994d5077fdea114798e15afa_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Courier:estado.html.twig";
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
/* {% block title %}IncentivesInventarioBundle:Courier:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Courier:estado page</h1>*/
/* {% endblock %}*/
/* */
