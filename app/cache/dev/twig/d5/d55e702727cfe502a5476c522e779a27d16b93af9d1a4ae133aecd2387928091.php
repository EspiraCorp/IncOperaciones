<?php

/* IncentivesOperacionesBundle:Convocatorias:proveedor.html.twig */
class __TwigTemplate_1c5ffc711b6876a7006cea4e6946e792c0308518ecfb8a7fb74af5f1e850b13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Convocatorias:proveedor.html.twig", 1);
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
        $__internal_2017687bc11806b0bd2325ddf1d7d20675dd4a4b477e32cb8fed4fd63a864e41 = $this->env->getExtension("native_profiler");
        $__internal_2017687bc11806b0bd2325ddf1d7d20675dd4a4b477e32cb8fed4fd63a864e41->enter($__internal_2017687bc11806b0bd2325ddf1d7d20675dd4a4b477e32cb8fed4fd63a864e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Convocatorias:proveedor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2017687bc11806b0bd2325ddf1d7d20675dd4a4b477e32cb8fed4fd63a864e41->leave($__internal_2017687bc11806b0bd2325ddf1d7d20675dd4a4b477e32cb8fed4fd63a864e41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9abb4ca92829c5adea2a6feb87e10cc3813281f4451d18190ed221c1d681fee = $this->env->getExtension("native_profiler");
        $__internal_b9abb4ca92829c5adea2a6feb87e10cc3813281f4451d18190ed221c1d681fee->enter($__internal_b9abb4ca92829c5adea2a6feb87e10cc3813281f4451d18190ed221c1d681fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesOperacionesBundle:Convocatorias:proveedor";
        
        $__internal_b9abb4ca92829c5adea2a6feb87e10cc3813281f4451d18190ed221c1d681fee->leave($__internal_b9abb4ca92829c5adea2a6feb87e10cc3813281f4451d18190ed221c1d681fee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_615a0a6b5170ffcee95213bd96b93418bc155415775209d9ee28b00ea87f3942 = $this->env->getExtension("native_profiler");
        $__internal_615a0a6b5170ffcee95213bd96b93418bc155415775209d9ee28b00ea87f3942->enter($__internal_615a0a6b5170ffcee95213bd96b93418bc155415775209d9ee28b00ea87f3942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Convocatorias:proveedor page</h1>
";
        
        $__internal_615a0a6b5170ffcee95213bd96b93418bc155415775209d9ee28b00ea87f3942->leave($__internal_615a0a6b5170ffcee95213bd96b93418bc155415775209d9ee28b00ea87f3942_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Convocatorias:proveedor.html.twig";
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
/* {% block title %}IncentivesOperacionesBundle:Convocatorias:proveedor{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Convocatorias:proveedor page</h1>*/
/* {% endblock %}*/
/* */
