<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_45fe5167b169f4b75ee25d4d55e257d8ae24f57be7e338818da41cd2d08c9c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d3629bd097e4b2ccd7efaaf514262563cfd36d8d539821bb888ed2a8e249925e = $this->env->getExtension("native_profiler");
        $__internal_d3629bd097e4b2ccd7efaaf514262563cfd36d8d539821bb888ed2a8e249925e->enter($__internal_d3629bd097e4b2ccd7efaaf514262563cfd36d8d539821bb888ed2a8e249925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3629bd097e4b2ccd7efaaf514262563cfd36d8d539821bb888ed2a8e249925e->leave($__internal_d3629bd097e4b2ccd7efaaf514262563cfd36d8d539821bb888ed2a8e249925e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a5c2e1db484dcb1e601e36f996493bb9b955c70dbfb2964fe18d14bb77df2c8 = $this->env->getExtension("native_profiler");
        $__internal_0a5c2e1db484dcb1e601e36f996493bb9b955c70dbfb2964fe18d14bb77df2c8->enter($__internal_0a5c2e1db484dcb1e601e36f996493bb9b955c70dbfb2964fe18d14bb77df2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a5c2e1db484dcb1e601e36f996493bb9b955c70dbfb2964fe18d14bb77df2c8->leave($__internal_0a5c2e1db484dcb1e601e36f996493bb9b955c70dbfb2964fe18d14bb77df2c8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f43513b748c575fabbed8f38f0d57fd0f8d632aad44106baf7199408e0eebf7e = $this->env->getExtension("native_profiler");
        $__internal_f43513b748c575fabbed8f38f0d57fd0f8d632aad44106baf7199408e0eebf7e->enter($__internal_f43513b748c575fabbed8f38f0d57fd0f8d632aad44106baf7199408e0eebf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f43513b748c575fabbed8f38f0d57fd0f8d632aad44106baf7199408e0eebf7e->leave($__internal_f43513b748c575fabbed8f38f0d57fd0f8d632aad44106baf7199408e0eebf7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3bee39adb75f80db70fccbcda75b4e839dd0b9f52ee7dee117b35ca3c5d0d2c = $this->env->getExtension("native_profiler");
        $__internal_e3bee39adb75f80db70fccbcda75b4e839dd0b9f52ee7dee117b35ca3c5d0d2c->enter($__internal_e3bee39adb75f80db70fccbcda75b4e839dd0b9f52ee7dee117b35ca3c5d0d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e3bee39adb75f80db70fccbcda75b4e839dd0b9f52ee7dee117b35ca3c5d0d2c->leave($__internal_e3bee39adb75f80db70fccbcda75b4e839dd0b9f52ee7dee117b35ca3c5d0d2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
