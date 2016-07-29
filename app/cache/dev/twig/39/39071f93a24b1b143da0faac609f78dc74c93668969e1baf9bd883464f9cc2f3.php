<?php

/* IncentivesSolicitudesBundle:Default:index.html.twig */
class __TwigTemplate_62f04340175aa4f2fe3966a48c652b5fbab0ef120ee5c90551704c52717ec771 extends Twig_Template
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
        $__internal_8f845171e760728f43f9493ad6cd46a26783df0b420799620de805036f5d49c7 = $this->env->getExtension("native_profiler");
        $__internal_8f845171e760728f43f9493ad6cd46a26783df0b420799620de805036f5d49c7->enter($__internal_8f845171e760728f43f9493ad6cd46a26783df0b420799620de805036f5d49c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_8f845171e760728f43f9493ad6cd46a26783df0b420799620de805036f5d49c7->leave($__internal_8f845171e760728f43f9493ad6cd46a26783df0b420799620de805036f5d49c7_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Default:index.html.twig";
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
