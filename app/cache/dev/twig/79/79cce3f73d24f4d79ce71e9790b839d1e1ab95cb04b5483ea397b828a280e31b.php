<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cf0b98728070e823a35314b0cbe76084defa5dc979174232248b46d7f926c594 extends Twig_Template
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
        $__internal_20134b5e444f5b6cb681517dce08880d8c540263129b8c9857536233d475ae45 = $this->env->getExtension("native_profiler");
        $__internal_20134b5e444f5b6cb681517dce08880d8c540263129b8c9857536233d475ae45->enter($__internal_20134b5e444f5b6cb681517dce08880d8c540263129b8c9857536233d475ae45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_20134b5e444f5b6cb681517dce08880d8c540263129b8c9857536233d475ae45->leave($__internal_20134b5e444f5b6cb681517dce08880d8c540263129b8c9857536233d475ae45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
