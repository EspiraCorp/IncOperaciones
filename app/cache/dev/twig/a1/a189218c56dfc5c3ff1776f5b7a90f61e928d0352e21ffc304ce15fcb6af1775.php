<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e46023352157ba24a78d9900f20b64c55d76a26a61dc37fe48d90ca0e5bc5599 extends Twig_Template
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
        $__internal_2cea14e81918c8680ecf9bf6f6ec0a5aa6d5ca248193df94f90938b805820588 = $this->env->getExtension("native_profiler");
        $__internal_2cea14e81918c8680ecf9bf6f6ec0a5aa6d5ca248193df94f90938b805820588->enter($__internal_2cea14e81918c8680ecf9bf6f6ec0a5aa6d5ca248193df94f90938b805820588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2cea14e81918c8680ecf9bf6f6ec0a5aa6d5ca248193df94f90938b805820588->leave($__internal_2cea14e81918c8680ecf9bf6f6ec0a5aa6d5ca248193df94f90938b805820588_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
