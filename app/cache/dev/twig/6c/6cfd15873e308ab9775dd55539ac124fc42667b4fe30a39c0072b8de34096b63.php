<?php

/* IncentivesCatalogoBundle:Catalogos:estado.html.twig */
class __TwigTemplate_8a36e40644e6240f5477ba436249359f24170c14b069bdd0d08c2088c85305f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:estado.html.twig", 1);
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
        $__internal_a130f43dbb6160d7189ff9b7c0ddc1c8253ae295ca88a7a52b910818a34715b4 = $this->env->getExtension("native_profiler");
        $__internal_a130f43dbb6160d7189ff9b7c0ddc1c8253ae295ca88a7a52b910818a34715b4->enter($__internal_a130f43dbb6160d7189ff9b7c0ddc1c8253ae295ca88a7a52b910818a34715b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a130f43dbb6160d7189ff9b7c0ddc1c8253ae295ca88a7a52b910818a34715b4->leave($__internal_a130f43dbb6160d7189ff9b7c0ddc1c8253ae295ca88a7a52b910818a34715b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab8df1302fc0b30410a7aaabb6eab3e752d383c367a9b8ff5fb9e6a2356645f7 = $this->env->getExtension("native_profiler");
        $__internal_ab8df1302fc0b30410a7aaabb6eab3e752d383c367a9b8ff5fb9e6a2356645f7->enter($__internal_ab8df1302fc0b30410a7aaabb6eab3e752d383c367a9b8ff5fb9e6a2356645f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesCatalogoBundle:Catalogo:estado";
        
        $__internal_ab8df1302fc0b30410a7aaabb6eab3e752d383c367a9b8ff5fb9e6a2356645f7->leave($__internal_ab8df1302fc0b30410a7aaabb6eab3e752d383c367a9b8ff5fb9e6a2356645f7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d88093034162dbfa1157befe7e70a73044fac106d3cca9b7cbb9be42b568da27 = $this->env->getExtension("native_profiler");
        $__internal_d88093034162dbfa1157befe7e70a73044fac106d3cca9b7cbb9be42b568da27->enter($__internal_d88093034162dbfa1157befe7e70a73044fac106d3cca9b7cbb9be42b568da27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Catalogo:estado page</h1>
";
        
        $__internal_d88093034162dbfa1157befe7e70a73044fac106d3cca9b7cbb9be42b568da27->leave($__internal_d88093034162dbfa1157befe7e70a73044fac106d3cca9b7cbb9be42b568da27_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:estado.html.twig";
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
/* {% block title %}IncentivesCatalogoBundle:Catalogo:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Catalogo:estado page</h1>*/
/* {% endblock %}*/
/* */
