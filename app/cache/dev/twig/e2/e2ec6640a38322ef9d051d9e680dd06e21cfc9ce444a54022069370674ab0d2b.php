<?php

/* IncentivesCatalogoBundle:Default:index.html.twig */
class __TwigTemplate_ef16d6c02996dbf5d8208a9e6210e344ce21a859479c60f454f1b06285bd9aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caba38e0cde619b2289ed64272ab55da447749b4e1ac2f583163512b8e21b74f = $this->env->getExtension("native_profiler");
        $__internal_caba38e0cde619b2289ed64272ab55da447749b4e1ac2f583163512b8e21b74f->enter($__internal_caba38e0cde619b2289ed64272ab55da447749b4e1ac2f583163512b8e21b74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caba38e0cde619b2289ed64272ab55da447749b4e1ac2f583163512b8e21b74f->leave($__internal_caba38e0cde619b2289ed64272ab55da447749b4e1ac2f583163512b8e21b74f_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* */
