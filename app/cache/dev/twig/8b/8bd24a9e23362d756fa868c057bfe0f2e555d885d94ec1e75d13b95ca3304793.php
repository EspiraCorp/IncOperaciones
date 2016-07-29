<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_92bb89d3756cb1713a02ea09ba5b5a06786e29d200b41dc8babb1c0f96500b9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_507f8e3607fc26bee610673c6d3f7c65fa776f658171d5ac8b9024b6bb73a54e = $this->env->getExtension("native_profiler");
        $__internal_507f8e3607fc26bee610673c6d3f7c65fa776f658171d5ac8b9024b6bb73a54e->enter($__internal_507f8e3607fc26bee610673c6d3f7c65fa776f658171d5ac8b9024b6bb73a54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_507f8e3607fc26bee610673c6d3f7c65fa776f658171d5ac8b9024b6bb73a54e->leave($__internal_507f8e3607fc26bee610673c6d3f7c65fa776f658171d5ac8b9024b6bb73a54e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ff700d7caf381e93db93509208079ef155d1b4ba1283b619ec0b44b8528e41e = $this->env->getExtension("native_profiler");
        $__internal_0ff700d7caf381e93db93509208079ef155d1b4ba1283b619ec0b44b8528e41e->enter($__internal_0ff700d7caf381e93db93509208079ef155d1b4ba1283b619ec0b44b8528e41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0ff700d7caf381e93db93509208079ef155d1b4ba1283b619ec0b44b8528e41e->leave($__internal_0ff700d7caf381e93db93509208079ef155d1b4ba1283b619ec0b44b8528e41e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0efbfaf2b575504eaaad8b77ba93b2497471118953502c7c8b302ed4bcbbbd01 = $this->env->getExtension("native_profiler");
        $__internal_0efbfaf2b575504eaaad8b77ba93b2497471118953502c7c8b302ed4bcbbbd01->enter($__internal_0efbfaf2b575504eaaad8b77ba93b2497471118953502c7c8b302ed4bcbbbd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0efbfaf2b575504eaaad8b77ba93b2497471118953502c7c8b302ed4bcbbbd01->leave($__internal_0efbfaf2b575504eaaad8b77ba93b2497471118953502c7c8b302ed4bcbbbd01_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5041350a3434db44c4f5229a0490b1898ce20ebd9563b79f28bd32698d861b45 = $this->env->getExtension("native_profiler");
        $__internal_5041350a3434db44c4f5229a0490b1898ce20ebd9563b79f28bd32698d861b45->enter($__internal_5041350a3434db44c4f5229a0490b1898ce20ebd9563b79f28bd32698d861b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_5041350a3434db44c4f5229a0490b1898ce20ebd9563b79f28bd32698d861b45->leave($__internal_5041350a3434db44c4f5229a0490b1898ce20ebd9563b79f28bd32698d861b45_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_eac0c87dbf3a2615d63a9a47b0be57e8f54115d7dbb20b2d1902ccbf7b8ba6e0 = $this->env->getExtension("native_profiler");
        $__internal_eac0c87dbf3a2615d63a9a47b0be57e8f54115d7dbb20b2d1902ccbf7b8ba6e0->enter($__internal_eac0c87dbf3a2615d63a9a47b0be57e8f54115d7dbb20b2d1902ccbf7b8ba6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_eac0c87dbf3a2615d63a9a47b0be57e8f54115d7dbb20b2d1902ccbf7b8ba6e0->leave($__internal_eac0c87dbf3a2615d63a9a47b0be57e8f54115d7dbb20b2d1902ccbf7b8ba6e0_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
