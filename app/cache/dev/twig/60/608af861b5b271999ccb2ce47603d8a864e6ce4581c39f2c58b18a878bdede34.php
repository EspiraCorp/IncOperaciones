<?php

/* IncentivesRedencionesBundle:Guia:planilla.html.twig */
class __TwigTemplate_6fee81389957093e4d206f34d352f06495b6dce775e13275689dcfe198778856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Guia:planilla.html.twig", 1);
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
        $__internal_51b1dbbfd407aa2e78c4bf5167efe299dd9c815a835f812f781bd818e5064245 = $this->env->getExtension("native_profiler");
        $__internal_51b1dbbfd407aa2e78c4bf5167efe299dd9c815a835f812f781bd818e5064245->enter($__internal_51b1dbbfd407aa2e78c4bf5167efe299dd9c815a835f812f781bd818e5064245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Guia:planilla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b1dbbfd407aa2e78c4bf5167efe299dd9c815a835f812f781bd818e5064245->leave($__internal_51b1dbbfd407aa2e78c4bf5167efe299dd9c815a835f812f781bd818e5064245_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d5ca991a9360111a1dcacad56adae7c5ed1d17b56f5bc2639d61a977322cf2c = $this->env->getExtension("native_profiler");
        $__internal_2d5ca991a9360111a1dcacad56adae7c5ed1d17b56f5bc2639d61a977322cf2c->enter($__internal_2d5ca991a9360111a1dcacad56adae7c5ed1d17b56f5bc2639d61a977322cf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:Guia:planilla";
        
        $__internal_2d5ca991a9360111a1dcacad56adae7c5ed1d17b56f5bc2639d61a977322cf2c->leave($__internal_2d5ca991a9360111a1dcacad56adae7c5ed1d17b56f5bc2639d61a977322cf2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_518be267981e7dbd734612e94486a47faf89f9642906780575489f80ef2d1e79 = $this->env->getExtension("native_profiler");
        $__internal_518be267981e7dbd734612e94486a47faf89f9642906780575489f80ef2d1e79->enter($__internal_518be267981e7dbd734612e94486a47faf89f9642906780575489f80ef2d1e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Guia:planilla page</h1>
";
        
        $__internal_518be267981e7dbd734612e94486a47faf89f9642906780575489f80ef2d1e79->leave($__internal_518be267981e7dbd734612e94486a47faf89f9642906780575489f80ef2d1e79_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Guia:planilla.html.twig";
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
/* {% block title %}IncentivesRedencionesBundle:Guia:planilla{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Guia:planilla page</h1>*/
/* {% endblock %}*/
/* */
