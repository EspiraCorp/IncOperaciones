<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fa44dcb6990f1ed8737516895317eeba8efac0b2b57d5548043b18d3150de44d extends Twig_Template
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
        $__internal_37beaf9a7738dd3ba5ffa325bfcb57d1449c1fa6845e55e9b4016939591deedb = $this->env->getExtension("native_profiler");
        $__internal_37beaf9a7738dd3ba5ffa325bfcb57d1449c1fa6845e55e9b4016939591deedb->enter($__internal_37beaf9a7738dd3ba5ffa325bfcb57d1449c1fa6845e55e9b4016939591deedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_37beaf9a7738dd3ba5ffa325bfcb57d1449c1fa6845e55e9b4016939591deedb->leave($__internal_37beaf9a7738dd3ba5ffa325bfcb57d1449c1fa6845e55e9b4016939591deedb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
