<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb8fa98f71b64289277447e083f2def6cb39fdcce3724dceba839af333ae8d87 extends Twig_Template
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
        $__internal_257b99d26cea20b4350c28b3e3f6acfe2db277caa8c6eef749eac5c4d81b4217 = $this->env->getExtension("native_profiler");
        $__internal_257b99d26cea20b4350c28b3e3f6acfe2db277caa8c6eef749eac5c4d81b4217->enter($__internal_257b99d26cea20b4350c28b3e3f6acfe2db277caa8c6eef749eac5c4d81b4217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257b99d26cea20b4350c28b3e3f6acfe2db277caa8c6eef749eac5c4d81b4217->leave($__internal_257b99d26cea20b4350c28b3e3f6acfe2db277caa8c6eef749eac5c4d81b4217_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab271262f2b6c584c19be64694fef1fea7d9c8f99cc440c803679217ca1924bb = $this->env->getExtension("native_profiler");
        $__internal_ab271262f2b6c584c19be64694fef1fea7d9c8f99cc440c803679217ca1924bb->enter($__internal_ab271262f2b6c584c19be64694fef1fea7d9c8f99cc440c803679217ca1924bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ab271262f2b6c584c19be64694fef1fea7d9c8f99cc440c803679217ca1924bb->leave($__internal_ab271262f2b6c584c19be64694fef1fea7d9c8f99cc440c803679217ca1924bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1876eb063b93b9c13c9ec6ba08c2ecc080cbee9a6f596dae776b9e450edf3e3 = $this->env->getExtension("native_profiler");
        $__internal_c1876eb063b93b9c13c9ec6ba08c2ecc080cbee9a6f596dae776b9e450edf3e3->enter($__internal_c1876eb063b93b9c13c9ec6ba08c2ecc080cbee9a6f596dae776b9e450edf3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c1876eb063b93b9c13c9ec6ba08c2ecc080cbee9a6f596dae776b9e450edf3e3->leave($__internal_c1876eb063b93b9c13c9ec6ba08c2ecc080cbee9a6f596dae776b9e450edf3e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2dd988a318b4bee5fbf1c99b8f79cd6b47a6767beddc2dcf5d26b3c3b3aaa85 = $this->env->getExtension("native_profiler");
        $__internal_b2dd988a318b4bee5fbf1c99b8f79cd6b47a6767beddc2dcf5d26b3c3b3aaa85->enter($__internal_b2dd988a318b4bee5fbf1c99b8f79cd6b47a6767beddc2dcf5d26b3c3b3aaa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b2dd988a318b4bee5fbf1c99b8f79cd6b47a6767beddc2dcf5d26b3c3b3aaa85->leave($__internal_b2dd988a318b4bee5fbf1c99b8f79cd6b47a6767beddc2dcf5d26b3c3b3aaa85_prof);

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
