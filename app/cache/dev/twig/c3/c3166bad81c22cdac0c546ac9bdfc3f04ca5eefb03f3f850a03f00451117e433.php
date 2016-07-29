<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8836608a49edcd6fdaddcdb356c8751c2346481ff7539828c60ed801b73df536 extends Twig_Template
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
        $__internal_91fe7bd5a3486de79b873ec2116df5431993afb4a46df07a6e08b58001939831 = $this->env->getExtension("native_profiler");
        $__internal_91fe7bd5a3486de79b873ec2116df5431993afb4a46df07a6e08b58001939831->enter($__internal_91fe7bd5a3486de79b873ec2116df5431993afb4a46df07a6e08b58001939831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_91fe7bd5a3486de79b873ec2116df5431993afb4a46df07a6e08b58001939831->leave($__internal_91fe7bd5a3486de79b873ec2116df5431993afb4a46df07a6e08b58001939831_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
