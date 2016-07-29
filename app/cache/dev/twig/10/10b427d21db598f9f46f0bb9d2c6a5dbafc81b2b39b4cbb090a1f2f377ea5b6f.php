<?php

/* IncentivesGarantiasBundle:Default:index.html.twig */
class __TwigTemplate_58216deeb18a4a0de05aef27f2190c304b34fb95b0533ac969cf168fccec7818 extends Twig_Template
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
        $__internal_489fd593f7f41bcbed22b4d04324c7aea83daf4e2563d009e06260bd688fd941 = $this->env->getExtension("native_profiler");
        $__internal_489fd593f7f41bcbed22b4d04324c7aea83daf4e2563d009e06260bd688fd941->enter($__internal_489fd593f7f41bcbed22b4d04324c7aea83daf4e2563d009e06260bd688fd941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_489fd593f7f41bcbed22b4d04324c7aea83daf4e2563d009e06260bd688fd941->leave($__internal_489fd593f7f41bcbed22b4d04324c7aea83daf4e2563d009e06260bd688fd941_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Default:index.html.twig";
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
