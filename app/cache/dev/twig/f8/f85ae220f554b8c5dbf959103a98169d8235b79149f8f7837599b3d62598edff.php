<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_51d1307f9a4c851aa8c3bf9224fd986f1ac361e9ac4449a188663dc9a472027a extends Twig_Template
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
        $__internal_388a76d1e0e2dff94cd9579e0392c815845892d14daf6f3eb953d6aaed8a8e19 = $this->env->getExtension("native_profiler");
        $__internal_388a76d1e0e2dff94cd9579e0392c815845892d14daf6f3eb953d6aaed8a8e19->enter($__internal_388a76d1e0e2dff94cd9579e0392c815845892d14daf6f3eb953d6aaed8a8e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_388a76d1e0e2dff94cd9579e0392c815845892d14daf6f3eb953d6aaed8a8e19->leave($__internal_388a76d1e0e2dff94cd9579e0392c815845892d14daf6f3eb953d6aaed8a8e19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
