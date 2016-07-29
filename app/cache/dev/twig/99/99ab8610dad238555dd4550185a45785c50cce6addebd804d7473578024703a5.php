<?php

/* IncentivesOrdenesBundle:OrdenRedencion:listado.html.twig */
class __TwigTemplate_b4ee8013c8d441caabafb7cbaaf30b559ddd4d263676631da50ee5b092b3bd0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:OrdenRedencion:listado.html.twig", 1);
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
        $__internal_60517ec3a049b95d9cf3ec3bb0f0bd6d80b530fdbd51c9f3bc1be9c38a4030ed = $this->env->getExtension("native_profiler");
        $__internal_60517ec3a049b95d9cf3ec3bb0f0bd6d80b530fdbd51c9f3bc1be9c38a4030ed->enter($__internal_60517ec3a049b95d9cf3ec3bb0f0bd6d80b530fdbd51c9f3bc1be9c38a4030ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:OrdenRedencion:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60517ec3a049b95d9cf3ec3bb0f0bd6d80b530fdbd51c9f3bc1be9c38a4030ed->leave($__internal_60517ec3a049b95d9cf3ec3bb0f0bd6d80b530fdbd51c9f3bc1be9c38a4030ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db61ed25e91b5ef80e791974b45ee6d1b5880491038907da176ce69eacceb07c = $this->env->getExtension("native_profiler");
        $__internal_db61ed25e91b5ef80e791974b45ee6d1b5880491038907da176ce69eacceb07c->enter($__internal_db61ed25e91b5ef80e791974b45ee6d1b5880491038907da176ce69eacceb07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:OrdenRedencion:listado";
        
        $__internal_db61ed25e91b5ef80e791974b45ee6d1b5880491038907da176ce69eacceb07c->leave($__internal_db61ed25e91b5ef80e791974b45ee6d1b5880491038907da176ce69eacceb07c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b789ef213534252634d5ce3e90c0e13a6c6c741043acceee2b58274336514d0d = $this->env->getExtension("native_profiler");
        $__internal_b789ef213534252634d5ce3e90c0e13a6c6c741043acceee2b58274336514d0d->enter($__internal_b789ef213534252634d5ce3e90c0e13a6c6c741043acceee2b58274336514d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the OrdenRedencion:listado page</h1>
";
        
        $__internal_b789ef213534252634d5ce3e90c0e13a6c6c741043acceee2b58274336514d0d->leave($__internal_b789ef213534252634d5ce3e90c0e13a6c6c741043acceee2b58274336514d0d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:OrdenRedencion:listado.html.twig";
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
/* {% block title %}IncentivesRedencionesBundle:OrdenRedencion:listado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the OrdenRedencion:listado page</h1>*/
/* {% endblock %}*/
/* */
