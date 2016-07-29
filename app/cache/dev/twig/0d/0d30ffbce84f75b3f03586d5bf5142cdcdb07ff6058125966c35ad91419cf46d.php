<?php

/* IncentivesCatalogoBundle:Catalogos:navegar.html.twig */
class __TwigTemplate_f07db16847b55311bc5d753df1bdfa0a514410fa3e81397d969a62632c9c465b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:navegar.html.twig", 1);
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
        $__internal_0bb9680201a07a61663401feef64197b02ae3778c26f728a084aed47a7c823e9 = $this->env->getExtension("native_profiler");
        $__internal_0bb9680201a07a61663401feef64197b02ae3778c26f728a084aed47a7c823e9->enter($__internal_0bb9680201a07a61663401feef64197b02ae3778c26f728a084aed47a7c823e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:navegar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bb9680201a07a61663401feef64197b02ae3778c26f728a084aed47a7c823e9->leave($__internal_0bb9680201a07a61663401feef64197b02ae3778c26f728a084aed47a7c823e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a93e6b17a25baace270cd0fa6d3378924536c01591359ca3854fcbe024be8f57 = $this->env->getExtension("native_profiler");
        $__internal_a93e6b17a25baace270cd0fa6d3378924536c01591359ca3854fcbe024be8f57->enter($__internal_a93e6b17a25baace270cd0fa6d3378924536c01591359ca3854fcbe024be8f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Imagenes";
        
        $__internal_a93e6b17a25baace270cd0fa6d3378924536c01591359ca3854fcbe024be8f57->leave($__internal_a93e6b17a25baace270cd0fa6d3378924536c01591359ca3854fcbe024be8f57_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9873cd87e8cd24d99c6d84246091970d50c894ed3b160377768ee82e4e38504f = $this->env->getExtension("native_profiler");
        $__internal_9873cd87e8cd24d99c6d84246091970d50c894ed3b160377768ee82e4e38504f->enter($__internal_9873cd87e8cd24d99c6d84246091970d50c894ed3b160377768ee82e4e38504f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_9873cd87e8cd24d99c6d84246091970d50c894ed3b160377768ee82e4e38504f->leave($__internal_9873cd87e8cd24d99c6d84246091970d50c894ed3b160377768ee82e4e38504f_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_2873b0856021739bb3ce1fc35833c8bd18bad24d3415644eced0f1fe13ec501c = $this->env->getExtension("native_profiler");
        $__internal_2873b0856021739bb3ce1fc35833c8bd18bad24d3415644eced0f1fe13ec501c->enter($__internal_2873b0856021739bb3ce1fc35833c8bd18bad24d3415644eced0f1fe13ec501c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Imagenes</h2>
\t\t\t<div class=\"box-icon\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div class=\"file-manager ui-helper-reset ui-helper-clearfix ui-widget ui-widget-content ui-corner-all elfinder elfinder-ltr ui-resizable elfinder-disabled\" style=\"width: auto; height: 400px;\">
      </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_2873b0856021739bb3ce1fc35833c8bd18bad24d3415644eced0f1fe13ec501c->leave($__internal_2873b0856021739bb3ce1fc35833c8bd18bad24d3415644eced0f1fe13ec501c_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64954e914dba2b6cf1a31b2a046155b9a5e7f162be3969debb37fca3c4b70300 = $this->env->getExtension("native_profiler");
        $__internal_64954e914dba2b6cf1a31b2a046155b9a5e7f162be3969debb37fca3c4b70300->enter($__internal_64954e914dba2b6cf1a31b2a046155b9a5e7f162be3969debb37fca3c4b70300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "
";
        // line 25
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


";
        
        $__internal_64954e914dba2b6cf1a31b2a046155b9a5e7f162be3969debb37fca3c4b70300->leave($__internal_64954e914dba2b6cf1a31b2a046155b9a5e7f162be3969debb37fca3c4b70300_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:navegar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  90 => 23,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Imagenes{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Imagenes</h2>*/
/* 			<div class="box-icon">*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div class="file-manager ui-helper-reset ui-helper-clearfix ui-widget ui-widget-content ui-corner-all elfinder elfinder-ltr ui-resizable elfinder-disabled" style="width: auto; height: 400px;">*/
/*       </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
