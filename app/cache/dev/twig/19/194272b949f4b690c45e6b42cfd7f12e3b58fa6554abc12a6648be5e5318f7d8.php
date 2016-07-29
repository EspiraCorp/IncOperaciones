<?php

/* IncentivesOrdenesBundle:Default:index.html.twig */
class __TwigTemplate_7f491d6495780e7413e498a5ed828bc8761af81362b3f7291840db9f1d932bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_706e1116bc129b2932706dce8c39cb5e2f0ca4f024d722db2dd3c4190bac9f41 = $this->env->getExtension("native_profiler");
        $__internal_706e1116bc129b2932706dce8c39cb5e2f0ca4f024d722db2dd3c4190bac9f41->enter($__internal_706e1116bc129b2932706dce8c39cb5e2f0ca4f024d722db2dd3c4190bac9f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_706e1116bc129b2932706dce8c39cb5e2f0ca4f024d722db2dd3c4190bac9f41->leave($__internal_706e1116bc129b2932706dce8c39cb5e2f0ca4f024d722db2dd3c4190bac9f41_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
