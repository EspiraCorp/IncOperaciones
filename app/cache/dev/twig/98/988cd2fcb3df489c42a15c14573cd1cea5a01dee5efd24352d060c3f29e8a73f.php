<?php

/* IncentivesCatalogoBundle:Programa:nuevo.html.twig */
class __TwigTemplate_0c7c63d01d520a88e1c9770928f7e4c02fd217977aa5194793d0b5ef3e53795c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Programa:nuevo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_cb1d6e16a3bee702c88d841683803083dd0f3fa151c6359fa80dc78176294697 = $this->env->getExtension("native_profiler");
        $__internal_cb1d6e16a3bee702c88d841683803083dd0f3fa151c6359fa80dc78176294697->enter($__internal_cb1d6e16a3bee702c88d841683803083dd0f3fa151c6359fa80dc78176294697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Programa:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1d6e16a3bee702c88d841683803083dd0f3fa151c6359fa80dc78176294697->leave($__internal_cb1d6e16a3bee702c88d841683803083dd0f3fa151c6359fa80dc78176294697_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b4e155f24e1faaffb85a460997907daf5596e975d8eea91bffdb8dab3a224e0 = $this->env->getExtension("native_profiler");
        $__internal_1b4e155f24e1faaffb85a460997907daf5596e975d8eea91bffdb8dab3a224e0->enter($__internal_1b4e155f24e1faaffb85a460997907daf5596e975d8eea91bffdb8dab3a224e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Programa";
        
        $__internal_1b4e155f24e1faaffb85a460997907daf5596e975d8eea91bffdb8dab3a224e0->leave($__internal_1b4e155f24e1faaffb85a460997907daf5596e975d8eea91bffdb8dab3a224e0_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_5048541f5b1cd5dd5476f1f30c5c61fa7e2fef1213679b9055ed7fe91241a5d1 = $this->env->getExtension("native_profiler");
        $__internal_5048541f5b1cd5dd5476f1f30c5c61fa7e2fef1213679b9055ed7fe91241a5d1->enter($__internal_5048541f5b1cd5dd5476f1f30c5c61fa7e2fef1213679b9055ed7fe91241a5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Nuevo Programa</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("programa");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("programa_nuevo");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <input type='hidden' name='id' value=";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
    <fieldset>
        <div class=\"control-group\">
            * ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'widget', array("id" => "fechaInicio"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            *  ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafin", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafin", array()), 'widget', array("id" => "fechaFin"));
        echo "
            </div>
        </div>
    </fieldset>
<div class=\"form-actions\">
    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_5048541f5b1cd5dd5476f1f30c5c61fa7e2fef1213679b9055ed7fe91241a5d1->leave($__internal_5048541f5b1cd5dd5476f1f30c5c61fa7e2fef1213679b9055ed7fe91241a5d1_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb7b77520773296d6dd232382ff435adbd73582d3502de311cc3ffae62da5f43 = $this->env->getExtension("native_profiler");
        $__internal_fb7b77520773296d6dd232382ff435adbd73582d3502de311cc3ffae62da5f43->enter($__internal_fb7b77520773296d6dd232382ff435adbd73582d3502de311cc3ffae62da5f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fechaInicio\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaFin\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

";
        
        $__internal_fb7b77520773296d6dd232382ff435adbd73582d3502de311cc3ffae62da5f43->leave($__internal_fb7b77520773296d6dd232382ff435adbd73582d3502de311cc3ffae62da5f43_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Programa:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  151 => 55,  138 => 47,  133 => 45,  125 => 40,  120 => 38,  113 => 34,  108 => 32,  101 => 28,  96 => 26,  89 => 22,  84 => 20,  78 => 17,  74 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Nuevo Programa{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Nuevo Programa</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('programa') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('programa_nuevo') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.nombre, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.nombre, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.descripcion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.descripcion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.fechainicio, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechainicio, { 'id': 'fechaInicio' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             *  {{ form_label(form.fechafin, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechafin, { 'id': 'fechaFin' }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/* <div class="form-actions">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#fechaInicio" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaFin" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* {% endblock %}*/
