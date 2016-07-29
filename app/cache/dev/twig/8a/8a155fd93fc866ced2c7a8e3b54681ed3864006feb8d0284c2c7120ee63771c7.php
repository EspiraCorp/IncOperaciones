<?php

/* IncentivesBaseBundle:Campos:Pais.html.twig */
class __TwigTemplate_8ebe76e69808e5b33193d667ff16b6dddcb040825cdda89032216cabb485f90a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesBaseBundle:Campos:Pais.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd9cadac122e079073fb8035cabd5ba795331568f06c01c67936ad92418eaef7 = $this->env->getExtension("native_profiler");
        $__internal_cd9cadac122e079073fb8035cabd5ba795331568f06c01c67936ad92418eaef7->enter($__internal_cd9cadac122e079073fb8035cabd5ba795331568f06c01c67936ad92418eaef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Campos:Pais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd9cadac122e079073fb8035cabd5ba795331568f06c01c67936ad92418eaef7->leave($__internal_cd9cadac122e079073fb8035cabd5ba795331568f06c01c67936ad92418eaef7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e91d1bc3bf84bbbf04afac83d8aa26b305758392a4ce87f56aaaa43e59d2dcf = $this->env->getExtension("native_profiler");
        $__internal_3e91d1bc3bf84bbbf04afac83d8aa26b305758392a4ce87f56aaaa43e59d2dcf->enter($__internal_3e91d1bc3bf84bbbf04afac83d8aa26b305758392a4ce87f56aaaa43e59d2dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesBaseBundle:Campos:Pais";
        
        $__internal_3e91d1bc3bf84bbbf04afac83d8aa26b305758392a4ce87f56aaaa43e59d2dcf->leave($__internal_3e91d1bc3bf84bbbf04afac83d8aa26b305758392a4ce87f56aaaa43e59d2dcf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35d098fe73da6ca3412f7d800178c9dca2e3c83fcca8b10c16220683e3423141 = $this->env->getExtension("native_profiler");
        $__internal_35d098fe73da6ca3412f7d800178c9dca2e3c83fcca8b10c16220683e3423141->enter($__internal_35d098fe73da6ca3412f7d800178c9dca2e3c83fcca8b10c16220683e3423141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Campos:Pais page</h1>
";
        
        $__internal_35d098fe73da6ca3412f7d800178c9dca2e3c83fcca8b10c16220683e3423141->leave($__internal_35d098fe73da6ca3412f7d800178c9dca2e3c83fcca8b10c16220683e3423141_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Campos:Pais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}IncentivesBaseBundle:Campos:Pais{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Campos:Pais page</h1>*/
/* {% endblock %}*/
/* */
