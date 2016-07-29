<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_243733ba4d352e67f79f6298c88e1205e5ebad052d1e2024b1469e757377bad6 extends Twig_Template
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
        $__internal_09d903895449d746f0ab38e32a09a3c6bb2c0edd95dfdc2d36202a363f27fbb0 = $this->env->getExtension("native_profiler");
        $__internal_09d903895449d746f0ab38e32a09a3c6bb2c0edd95dfdc2d36202a363f27fbb0->enter($__internal_09d903895449d746f0ab38e32a09a3c6bb2c0edd95dfdc2d36202a363f27fbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_09d903895449d746f0ab38e32a09a3c6bb2c0edd95dfdc2d36202a363f27fbb0->leave($__internal_09d903895449d746f0ab38e32a09a3c6bb2c0edd95dfdc2d36202a363f27fbb0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
