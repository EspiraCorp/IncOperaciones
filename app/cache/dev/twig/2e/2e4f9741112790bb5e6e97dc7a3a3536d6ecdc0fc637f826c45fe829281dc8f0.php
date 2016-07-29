<?php

/* IncentivesInventarioBundle:Default:index.html.twig */
class __TwigTemplate_f4e9242a338b74d7bb39b3ebe43b305688dde6e66d1bcd465573775713b2a0a1 extends Twig_Template
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
        $__internal_7eb2b34e0f8a49e6729f02e505a00f595885ba17d6412d4a92eaa45260ecb42a = $this->env->getExtension("native_profiler");
        $__internal_7eb2b34e0f8a49e6729f02e505a00f595885ba17d6412d4a92eaa45260ecb42a->enter($__internal_7eb2b34e0f8a49e6729f02e505a00f595885ba17d6412d4a92eaa45260ecb42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_7eb2b34e0f8a49e6729f02e505a00f595885ba17d6412d4a92eaa45260ecb42a->leave($__internal_7eb2b34e0f8a49e6729f02e505a00f595885ba17d6412d4a92eaa45260ecb42a_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
