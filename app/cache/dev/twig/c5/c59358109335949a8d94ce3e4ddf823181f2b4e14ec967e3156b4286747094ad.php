<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_02242065b9c84c6a34276981c357605c31828827c6a7f862bc265dc8b08a8df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae2c567fbedd24e951fcfb2fc86fb0ed77e38f43b53323412a0b407fb0a8ffd = $this->env->getExtension("native_profiler");
        $__internal_eae2c567fbedd24e951fcfb2fc86fb0ed77e38f43b53323412a0b407fb0a8ffd->enter($__internal_eae2c567fbedd24e951fcfb2fc86fb0ed77e38f43b53323412a0b407fb0a8ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eae2c567fbedd24e951fcfb2fc86fb0ed77e38f43b53323412a0b407fb0a8ffd->leave($__internal_eae2c567fbedd24e951fcfb2fc86fb0ed77e38f43b53323412a0b407fb0a8ffd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_61fbab6dd99f734255feea5f8d3d714babfd324021730ec859f17ca92226eb3f = $this->env->getExtension("native_profiler");
        $__internal_61fbab6dd99f734255feea5f8d3d714babfd324021730ec859f17ca92226eb3f->enter($__internal_61fbab6dd99f734255feea5f8d3d714babfd324021730ec859f17ca92226eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_61fbab6dd99f734255feea5f8d3d714babfd324021730ec859f17ca92226eb3f->leave($__internal_61fbab6dd99f734255feea5f8d3d714babfd324021730ec859f17ca92226eb3f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
