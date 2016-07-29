<?php

/* IncentivesCatalogoBundle:Producto:imagenesmas.html.twig */
class __TwigTemplate_1ddda0a82b7655208b328153ee3014837ac8e0ab2bf8f6f1fbff28377c473888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:imagenesmas.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc3302cc2196c0be72009e25a41c8974f9eee6f432d5be8b475b7a86cfdea109 = $this->env->getExtension("native_profiler");
        $__internal_fc3302cc2196c0be72009e25a41c8974f9eee6f432d5be8b475b7a86cfdea109->enter($__internal_fc3302cc2196c0be72009e25a41c8974f9eee6f432d5be8b475b7a86cfdea109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:imagenesmas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc3302cc2196c0be72009e25a41c8974f9eee6f432d5be8b475b7a86cfdea109->leave($__internal_fc3302cc2196c0be72009e25a41c8974f9eee6f432d5be8b475b7a86cfdea109_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81269c5d59352f04572f01763d1e4b02b4459cc5bcc14cc49e518d51e9e93f28 = $this->env->getExtension("native_profiler");
        $__internal_81269c5d59352f04572f01763d1e4b02b4459cc5bcc14cc49e518d51e9e93f28->enter($__internal_81269c5d59352f04572f01763d1e4b02b4459cc5bcc14cc49e518d51e9e93f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Productos";
        
        $__internal_81269c5d59352f04572f01763d1e4b02b4459cc5bcc14cc49e518d51e9e93f28->leave($__internal_81269c5d59352f04572f01763d1e4b02b4459cc5bcc14cc49e518d51e9e93f28_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3337c4a29f32180eb199417b66abab8f11d8495d26e247b14fcf359b1e705823 = $this->env->getExtension("native_profiler");
        $__internal_3337c4a29f32180eb199417b66abab8f11d8495d26e247b14fcf359b1e705823->enter($__internal_3337c4a29f32180eb199417b66abab8f11d8495d26e247b14fcf359b1e705823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_3337c4a29f32180eb199417b66abab8f11d8495d26e247b14fcf359b1e705823->leave($__internal_3337c4a29f32180eb199417b66abab8f11d8495d26e247b14fcf359b1e705823_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_04569aa327fb78991184e397a918bf52eb12324fb81a6d1dea014ea1aad73c58 = $this->env->getExtension("native_profiler");
        $__internal_04569aa327fb78991184e397a918bf52eb12324fb81a6d1dea014ea1aad73c58->enter($__internal_04569aa327fb78991184e397a918bf52eb12324fb81a6d1dea014ea1aad73c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "
";
        
        $__internal_04569aa327fb78991184e397a918bf52eb12324fb81a6d1dea014ea1aad73c58->leave($__internal_04569aa327fb78991184e397a918bf52eb12324fb81a6d1dea014ea1aad73c58_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_042821e1c92ab6b843568b8e255b124e9c89c1a83d8612f4051d51916bd537d7 = $this->env->getExtension("native_profiler");
        $__internal_042821e1c92ab6b843568b8e255b124e9c89c1a83d8612f4051d51916bd537d7->enter($__internal_042821e1c92ab6b843568b8e255b124e9c89c1a83d8612f4051d51916bd537d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "
";
        // line 13
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t

";
        
        $__internal_042821e1c92ab6b843568b8e255b124e9c89c1a83d8612f4051d51916bd537d7->leave($__internal_042821e1c92ab6b843568b8e255b124e9c89c1a83d8612f4051d51916bd537d7_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:imagenesmas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  84 => 12,  78 => 11,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Productos{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* 	*/
/* */
/* {% endblock %}*/
/* */
/* */
