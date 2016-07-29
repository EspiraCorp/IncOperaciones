<?php

/* IncentivesInventarioBundle:Courier:datos.html.twig */
class __TwigTemplate_f9137b9b3cb3b86fab6ab4f47d5d63d15235fba19e0b8f3b99a2e8db6bb87243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Courier:datos.html.twig", 1);
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
        $__internal_fcc8afd31e5e48bac64f7c15874ce1e97f8f31ed73c15407713653c7a2ef52de = $this->env->getExtension("native_profiler");
        $__internal_fcc8afd31e5e48bac64f7c15874ce1e97f8f31ed73c15407713653c7a2ef52de->enter($__internal_fcc8afd31e5e48bac64f7c15874ce1e97f8f31ed73c15407713653c7a2ef52de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Courier:datos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc8afd31e5e48bac64f7c15874ce1e97f8f31ed73c15407713653c7a2ef52de->leave($__internal_fcc8afd31e5e48bac64f7c15874ce1e97f8f31ed73c15407713653c7a2ef52de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad150b21625d002bbab0f539646732df5d47cb4e130f45124a3bdfb137eb944e = $this->env->getExtension("native_profiler");
        $__internal_ad150b21625d002bbab0f539646732df5d47cb4e130f45124a3bdfb137eb944e->enter($__internal_ad150b21625d002bbab0f539646732df5d47cb4e130f45124a3bdfb137eb944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesInventarioBundle:Courier:datos";
        
        $__internal_ad150b21625d002bbab0f539646732df5d47cb4e130f45124a3bdfb137eb944e->leave($__internal_ad150b21625d002bbab0f539646732df5d47cb4e130f45124a3bdfb137eb944e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_030a623037d63556ee90e1176057d45e5236b0163e85d0dc30901072af3877fe = $this->env->getExtension("native_profiler");
        $__internal_030a623037d63556ee90e1176057d45e5236b0163e85d0dc30901072af3877fe->enter($__internal_030a623037d63556ee90e1176057d45e5236b0163e85d0dc30901072af3877fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Courier:datos page</h1>
";
        
        $__internal_030a623037d63556ee90e1176057d45e5236b0163e85d0dc30901072af3877fe->leave($__internal_030a623037d63556ee90e1176057d45e5236b0163e85d0dc30901072af3877fe_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Courier:datos.html.twig";
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
/* {% block title %}IncentivesInventarioBundle:Courier:datos{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Courier:datos page</h1>*/
/* {% endblock %}*/
/* */
