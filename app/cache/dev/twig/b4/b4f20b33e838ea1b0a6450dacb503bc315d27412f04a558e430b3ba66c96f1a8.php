<?php

/* IncentivesRedencionesBundle:Redencion:estado.html.twig */
class __TwigTemplate_0d92ac3a89e32ea920c8eb15381c02e670b31b12c4795fb51ae903d90b057e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:estado.html.twig", 1);
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
        $__internal_70827acb351432fae3f84d41570e7d165e6e3b22a6536b89e5d541abd39ffa25 = $this->env->getExtension("native_profiler");
        $__internal_70827acb351432fae3f84d41570e7d165e6e3b22a6536b89e5d541abd39ffa25->enter($__internal_70827acb351432fae3f84d41570e7d165e6e3b22a6536b89e5d541abd39ffa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70827acb351432fae3f84d41570e7d165e6e3b22a6536b89e5d541abd39ffa25->leave($__internal_70827acb351432fae3f84d41570e7d165e6e3b22a6536b89e5d541abd39ffa25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75fd8f233b7173338b8753b8233fd391e6c2beb1304637db3e70381c96b1811d = $this->env->getExtension("native_profiler");
        $__internal_75fd8f233b7173338b8753b8233fd391e6c2beb1304637db3e70381c96b1811d->enter($__internal_75fd8f233b7173338b8753b8233fd391e6c2beb1304637db3e70381c96b1811d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:Redencion:estado";
        
        $__internal_75fd8f233b7173338b8753b8233fd391e6c2beb1304637db3e70381c96b1811d->leave($__internal_75fd8f233b7173338b8753b8233fd391e6c2beb1304637db3e70381c96b1811d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_73a5f54e850b753eb9101385cb54d6c574d5534ebccbab1891d7103604de5bab = $this->env->getExtension("native_profiler");
        $__internal_73a5f54e850b753eb9101385cb54d6c574d5534ebccbab1891d7103604de5bab->enter($__internal_73a5f54e850b753eb9101385cb54d6c574d5534ebccbab1891d7103604de5bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Redencion:estado page</h1>
";
        
        $__internal_73a5f54e850b753eb9101385cb54d6c574d5534ebccbab1891d7103604de5bab->leave($__internal_73a5f54e850b753eb9101385cb54d6c574d5534ebccbab1891d7103604de5bab_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:estado.html.twig";
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
/* {% block title %}IncentivesRedencionesBundle:Redencion:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Redencion:estado page</h1>*/
/* {% endblock %}*/
/* */
