<?php

/* IncentivesRedencionesBundle:Default:index.html.twig */
class __TwigTemplate_555affeedf17ed0ca94e30f2f3461a8f2be2c859847d947cccf1c96d3fca2052 extends Twig_Template
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
        $__internal_6108d70e66f1c0ff296758f9a73098c1329cacab597c45124b561e1f6ca5de5b = $this->env->getExtension("native_profiler");
        $__internal_6108d70e66f1c0ff296758f9a73098c1329cacab597c45124b561e1f6ca5de5b->enter($__internal_6108d70e66f1c0ff296758f9a73098c1329cacab597c45124b561e1f6ca5de5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_6108d70e66f1c0ff296758f9a73098c1329cacab597c45124b561e1f6ca5de5b->leave($__internal_6108d70e66f1c0ff296758f9a73098c1329cacab597c45124b561e1f6ca5de5b_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Default:index.html.twig";
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
