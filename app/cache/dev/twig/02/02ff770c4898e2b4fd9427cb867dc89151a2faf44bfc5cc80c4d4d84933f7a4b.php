<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1a6e8599c15f02d445760f65aa75046861e429d7d9b6a15b3b66800079f81e40 extends Twig_Template
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
        $__internal_6d89313897a0c601f44e30989b1fa8696bcc6838b7d268796ae63c72e5552af0 = $this->env->getExtension("native_profiler");
        $__internal_6d89313897a0c601f44e30989b1fa8696bcc6838b7d268796ae63c72e5552af0->enter($__internal_6d89313897a0c601f44e30989b1fa8696bcc6838b7d268796ae63c72e5552af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6d89313897a0c601f44e30989b1fa8696bcc6838b7d268796ae63c72e5552af0->leave($__internal_6d89313897a0c601f44e30989b1fa8696bcc6838b7d268796ae63c72e5552af0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
