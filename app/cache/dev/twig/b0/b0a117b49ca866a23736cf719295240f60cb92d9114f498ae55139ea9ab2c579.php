<?php

/* IncentivesCatalogoBundle:Programa:estado.html.twig */
class __TwigTemplate_20c12ad8e302ff540e7560923f97ca3e4b7168fbb59ba17c291577598f34616d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Programa:estado.html.twig", 1);
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
        $__internal_32582d8c26346a8616802003e5fa4cedf80c2b8076f9d37119acfff5e5b6c8f5 = $this->env->getExtension("native_profiler");
        $__internal_32582d8c26346a8616802003e5fa4cedf80c2b8076f9d37119acfff5e5b6c8f5->enter($__internal_32582d8c26346a8616802003e5fa4cedf80c2b8076f9d37119acfff5e5b6c8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Programa:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32582d8c26346a8616802003e5fa4cedf80c2b8076f9d37119acfff5e5b6c8f5->leave($__internal_32582d8c26346a8616802003e5fa4cedf80c2b8076f9d37119acfff5e5b6c8f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0bee3a7d4facc67a22413cb18b97e7fe1c1cf8d75eef755d6d0f8b30c8b1769 = $this->env->getExtension("native_profiler");
        $__internal_c0bee3a7d4facc67a22413cb18b97e7fe1c1cf8d75eef755d6d0f8b30c8b1769->enter($__internal_c0bee3a7d4facc67a22413cb18b97e7fe1c1cf8d75eef755d6d0f8b30c8b1769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesCatalogoBundle:Programa:estado";
        
        $__internal_c0bee3a7d4facc67a22413cb18b97e7fe1c1cf8d75eef755d6d0f8b30c8b1769->leave($__internal_c0bee3a7d4facc67a22413cb18b97e7fe1c1cf8d75eef755d6d0f8b30c8b1769_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62b49624ef9eef3237acb0dfbc1dfd89ed896b30911f191d700ac8c4bac6095a = $this->env->getExtension("native_profiler");
        $__internal_62b49624ef9eef3237acb0dfbc1dfd89ed896b30911f191d700ac8c4bac6095a->enter($__internal_62b49624ef9eef3237acb0dfbc1dfd89ed896b30911f191d700ac8c4bac6095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Programa:estado page</h1>
";
        
        $__internal_62b49624ef9eef3237acb0dfbc1dfd89ed896b30911f191d700ac8c4bac6095a->leave($__internal_62b49624ef9eef3237acb0dfbc1dfd89ed896b30911f191d700ac8c4bac6095a_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Programa:estado.html.twig";
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
/* {% block title %}IncentivesCatalogoBundle:Programa:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Programa:estado page</h1>*/
/* {% endblock %}*/
/* */
