<?php

/* IncentivesOrdenesBundle:OrdenRedencion:estado.html.twig */
class __TwigTemplate_838d0eb6cb853571e3c38109ff7cbe206bf3fcffa22f1466060cad53d2630d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:OrdenRedencion:estado.html.twig", 1);
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
        $__internal_804bf55ae8477e5b26b914daad5c604f556a0cf88099b68c00ca2de1e919b310 = $this->env->getExtension("native_profiler");
        $__internal_804bf55ae8477e5b26b914daad5c604f556a0cf88099b68c00ca2de1e919b310->enter($__internal_804bf55ae8477e5b26b914daad5c604f556a0cf88099b68c00ca2de1e919b310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:OrdenRedencion:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804bf55ae8477e5b26b914daad5c604f556a0cf88099b68c00ca2de1e919b310->leave($__internal_804bf55ae8477e5b26b914daad5c604f556a0cf88099b68c00ca2de1e919b310_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_903323f57f3a0922ac7172a8a0aeed9488b4ca68d88cac1fc714202ee572297e = $this->env->getExtension("native_profiler");
        $__internal_903323f57f3a0922ac7172a8a0aeed9488b4ca68d88cac1fc714202ee572297e->enter($__internal_903323f57f3a0922ac7172a8a0aeed9488b4ca68d88cac1fc714202ee572297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:OrdenRedencion:estado";
        
        $__internal_903323f57f3a0922ac7172a8a0aeed9488b4ca68d88cac1fc714202ee572297e->leave($__internal_903323f57f3a0922ac7172a8a0aeed9488b4ca68d88cac1fc714202ee572297e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e8c1f714e85a7075d284a0213818e51068842a06c8eb2fafdeef39ed0516c80 = $this->env->getExtension("native_profiler");
        $__internal_3e8c1f714e85a7075d284a0213818e51068842a06c8eb2fafdeef39ed0516c80->enter($__internal_3e8c1f714e85a7075d284a0213818e51068842a06c8eb2fafdeef39ed0516c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the OrdenRedencion:estado page</h1>
";
        
        $__internal_3e8c1f714e85a7075d284a0213818e51068842a06c8eb2fafdeef39ed0516c80->leave($__internal_3e8c1f714e85a7075d284a0213818e51068842a06c8eb2fafdeef39ed0516c80_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:OrdenRedencion:estado.html.twig";
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
/* {% block title %}IncentivesRedencionesBundle:OrdenRedencion:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the OrdenRedencion:estado page</h1>*/
/* {% endblock %}*/
/* */
