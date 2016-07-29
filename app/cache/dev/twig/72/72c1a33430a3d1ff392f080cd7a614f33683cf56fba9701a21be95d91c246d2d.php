<?php

/* IncentivesBaseBundle:Usuarios:creado.html.twig */
class __TwigTemplate_d4878c8b5a5b471b8e1cfbfe72adc21067886de8e2bf6265f781a42777770684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesBaseBundle:Usuarios:creado.html.twig", 2);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8b88e0e5249e9def45bf580c2aebc2498d5a69be8ab76ed0bde816539acc47a = $this->env->getExtension("native_profiler");
        $__internal_d8b88e0e5249e9def45bf580c2aebc2498d5a69be8ab76ed0bde816539acc47a->enter($__internal_d8b88e0e5249e9def45bf580c2aebc2498d5a69be8ab76ed0bde816539acc47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Usuarios:creado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8b88e0e5249e9def45bf580c2aebc2498d5a69be8ab76ed0bde816539acc47a->leave($__internal_d8b88e0e5249e9def45bf580c2aebc2498d5a69be8ab76ed0bde816539acc47a_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_331712efcd480b3519f8743d1bc78cfd8247e46a2bbc0c7e55e094d01dca8124 = $this->env->getExtension("native_profiler");
        $__internal_331712efcd480b3519f8743d1bc78cfd8247e46a2bbc0c7e55e094d01dca8124->enter($__internal_331712efcd480b3519f8743d1bc78cfd8247e46a2bbc0c7e55e094d01dca8124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<h1>Usuario registrado</h1>

";
        
        $__internal_331712efcd480b3519f8743d1bc78cfd8247e46a2bbc0c7e55e094d01dca8124->leave($__internal_331712efcd480b3519f8743d1bc78cfd8247e46a2bbc0c7e55e094d01dca8124_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Usuarios:creado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block cuerpo %}*/
/* <h1>Usuario registrado</h1>*/
/* */
/* {% endblock %}*/
