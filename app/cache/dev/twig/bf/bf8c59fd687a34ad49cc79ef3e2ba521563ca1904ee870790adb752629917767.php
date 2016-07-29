<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1f76126d6a0a08e256e814420f94a3e6993d699b4618a67db84afc9b0b2b91e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c90a845acc3b12bddb1a569c3ed2e783b50884ced38c940d7deed3dc8acbcf46 = $this->env->getExtension("native_profiler");
        $__internal_c90a845acc3b12bddb1a569c3ed2e783b50884ced38c940d7deed3dc8acbcf46->enter($__internal_c90a845acc3b12bddb1a569c3ed2e783b50884ced38c940d7deed3dc8acbcf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90a845acc3b12bddb1a569c3ed2e783b50884ced38c940d7deed3dc8acbcf46->leave($__internal_c90a845acc3b12bddb1a569c3ed2e783b50884ced38c940d7deed3dc8acbcf46_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ea856e9ebe3336ec882d8fc7dd26e498caab350d28aae71ab0acadd600f8976 = $this->env->getExtension("native_profiler");
        $__internal_0ea856e9ebe3336ec882d8fc7dd26e498caab350d28aae71ab0acadd600f8976->enter($__internal_0ea856e9ebe3336ec882d8fc7dd26e498caab350d28aae71ab0acadd600f8976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0ea856e9ebe3336ec882d8fc7dd26e498caab350d28aae71ab0acadd600f8976->leave($__internal_0ea856e9ebe3336ec882d8fc7dd26e498caab350d28aae71ab0acadd600f8976_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_832a153cc6a62e3ebca859ea0531f16d6e1f565a2dd3b174ed4699c114f110c2 = $this->env->getExtension("native_profiler");
        $__internal_832a153cc6a62e3ebca859ea0531f16d6e1f565a2dd3b174ed4699c114f110c2->enter($__internal_832a153cc6a62e3ebca859ea0531f16d6e1f565a2dd3b174ed4699c114f110c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_832a153cc6a62e3ebca859ea0531f16d6e1f565a2dd3b174ed4699c114f110c2->leave($__internal_832a153cc6a62e3ebca859ea0531f16d6e1f565a2dd3b174ed4699c114f110c2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
