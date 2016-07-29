<?php

/* IncentivesCatalogoBundle:Programa:nuevo1.html.twig */
class __TwigTemplate_bcd238094605cb4a4242628775cef4da0d60866e5c5dda4e3d0d6f1cdfffe5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Programa:nuevo1.html.twig", 1);
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
        $__internal_8d7e1fa2a88e58075f093b3f8cc5c354f549a84afe75ad0f3059e344f20a0944 = $this->env->getExtension("native_profiler");
        $__internal_8d7e1fa2a88e58075f093b3f8cc5c354f549a84afe75ad0f3059e344f20a0944->enter($__internal_8d7e1fa2a88e58075f093b3f8cc5c354f549a84afe75ad0f3059e344f20a0944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Programa:nuevo1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d7e1fa2a88e58075f093b3f8cc5c354f549a84afe75ad0f3059e344f20a0944->leave($__internal_8d7e1fa2a88e58075f093b3f8cc5c354f549a84afe75ad0f3059e344f20a0944_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bca41082dd9cfea2b07143a74e80de68ede33ae78e14383463766716b62527e = $this->env->getExtension("native_profiler");
        $__internal_1bca41082dd9cfea2b07143a74e80de68ede33ae78e14383463766716b62527e->enter($__internal_1bca41082dd9cfea2b07143a74e80de68ede33ae78e14383463766716b62527e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Programa";
        
        $__internal_1bca41082dd9cfea2b07143a74e80de68ede33ae78e14383463766716b62527e->leave($__internal_1bca41082dd9cfea2b07143a74e80de68ede33ae78e14383463766716b62527e_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_c3f7e7cd2cf9cd8f15fcf3917f10e1bc33b7b51aaa5987e47d6822337defa223 = $this->env->getExtension("native_profiler");
        $__internal_c3f7e7cd2cf9cd8f15fcf3917f10e1bc33b7b51aaa5987e47d6822337defa223->enter($__internal_c3f7e7cd2cf9cd8f15fcf3917f10e1bc33b7b51aaa5987e47d6822337defa223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'widget', array("id" => "fechaInicio"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafin", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafin", array()), 'widget', array("id" => "fechaFin"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iva", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                Si ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iva", array()), 0, array(), "array"), 'widget');
        echo "
                No ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iva", array()), 1, array(), "array"), 'widget');
        echo "
             </div>
        </div> 
        <div class=\"control-group\">
            *  ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centrocostos", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centrocostos", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diasentrega", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diasentrega", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>  


    </fieldset>
    <div class=\"row-fluid sortable ui-sortable\">
        <div class=\"catalogos box span10\" data-prototype=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "catalogos", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-user\"></i>Catalogo</h2>
            </div>
         </div> 
    </div>  
<div class=\"form-actions\">
    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_c3f7e7cd2cf9cd8f15fcf3917f10e1bc33b7b51aaa5987e47d6822337defa223->leave($__internal_c3f7e7cd2cf9cd8f15fcf3917f10e1bc33b7b51aaa5987e47d6822337defa223_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ec4436d8770579c5ecdd0d73088959484c62a50eb5696937e0ca69c12246d05 = $this->env->getExtension("native_profiler");
        $__internal_5ec4436d8770579c5ecdd0d73088959484c62a50eb5696937e0ca69c12246d05->enter($__internal_5ec4436d8770579c5ecdd0d73088959484c62a50eb5696937e0ca69c12246d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fechaInicio\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaFin\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

    <script>
        // Get the div that holds the collection of addresses
        var collectionHolder = \$('div.catalogos');

        var Holder = \$('button.btn-primary');

        // setup an \"add a address\" link
        var \$newLinkLi = \$('<button class=\"btn\"><a href=\"#\">Agregar un catalogo</a></button>');

        \$(function(){

            // add the \"add a address\" anchor and li to the addresses div
            Holder.parent().append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            collectionHolder.data('index', collectionHolder.find(':input').length);

            \$newLinkLi.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new address form (see next code block)
                addTagForm(collectionHolder);
            });

        });


        function addTagForm(collectionHolder) {
            // Get the data-prototype explained earlier
            var titulo=\$('<div class=\"box-header well\" data-original-title=\"\">Agregar catalogo</div>;');
            var prototype = collectionHolder.data('prototype');

            // get the new index
            var index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a address\" link li
            var \$newFormLi = \$('<div class=\"box span4\" id=\"catalogos'+ index +'\"><div class=\"box-header well\" data-original-title=\"\">Agregar catalogo<div class=\"box-icon\"><a class=\"btn btn-closer btn-round\"  id=\"closecatalogos'+ index +'\" href=\"#\"><i class=\"icon-remove\"></i></a></div></div></div>').append(newForm);
            collectionHolder.append(\$newFormLi);

            var \$Closer = \$('#closecatalogos'+ index);

             \$Closer.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                \$( \"div\" ).remove( \"#catalogos\"+ index );
            });
        }
    </script>

";
        
        $__internal_5ec4436d8770579c5ecdd0d73088959484c62a50eb5696937e0ca69c12246d05->leave($__internal_5ec4436d8770579c5ecdd0d73088959484c62a50eb5696937e0ca69c12246d05_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Programa:nuevo1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 90,  215 => 89,  202 => 81,  197 => 79,  187 => 72,  177 => 65,  172 => 63,  165 => 59,  160 => 57,  153 => 53,  149 => 52,  144 => 50,  137 => 46,  132 => 44,  125 => 40,  120 => 38,  113 => 34,  108 => 32,  101 => 28,  96 => 26,  89 => 22,  84 => 20,  78 => 17,  74 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*             * {{ form_label(form.cliente, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.cliente, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
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
/*             * {{ form_label(form.fechafin, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechafin, { 'id': 'fechaFin' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.iva, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 Si {{ form_widget(form.iva[0]) }}*/
/*                 No {{ form_widget(form.iva[1]) }}*/
/*              </div>*/
/*         </div> */
/*         <div class="control-group">*/
/*             *  {{ form_label(form.centrocostos, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.centrocostos, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.diasentrega, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.diasentrega, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>  */
/* */
/* */
/*     </fieldset>*/
/*     <div class="row-fluid sortable ui-sortable">*/
/*         <div class="catalogos box span10" data-prototype="{{ form_widget(form.catalogos.vars.prototype)|e }}">*/
/*             <div class="box-header well" data-original-title>*/
/*                 <h2><i class="icon-user"></i>Catalogo</h2>*/
/*             </div>*/
/*          </div> */
/*     </div>  */
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
/*     <script>*/
/*         // Get the div that holds the collection of addresses*/
/*         var collectionHolder = $('div.catalogos');*/
/* */
/*         var Holder = $('button.btn-primary');*/
/* */
/*         // setup an "add a address" link*/
/*         var $newLinkLi = $('<button class="btn"><a href="#">Agregar un catalogo</a></button>');*/
/* */
/*         $(function(){*/
/* */
/*             // add the "add a address" anchor and li to the addresses div*/
/*             Holder.parent().append($newLinkLi);*/
/* */
/*             // count the current form inputs we have (e.g. 2), use that as the new*/
/*             // index when inserting a new item (e.g. 2)*/
/*             collectionHolder.data('index', collectionHolder.find(':input').length);*/
/* */
/*             $newLinkLi.on('click', function(e) {*/
/*                 // prevent the link from creating a "#" on the URL*/
/*                 e.preventDefault();*/
/* */
/*                 // add a new address form (see next code block)*/
/*                 addTagForm(collectionHolder);*/
/*             });*/
/* */
/*         });*/
/* */
/* */
/*         function addTagForm(collectionHolder) {*/
/*             // Get the data-prototype explained earlier*/
/*             var titulo=$('<div class="box-header well" data-original-title="">Agregar catalogo</div>;');*/
/*             var prototype = collectionHolder.data('prototype');*/
/* */
/*             // get the new index*/
/*             var index = collectionHolder.data('index');*/
/* */
/*             // Replace '__name__' in the prototype's HTML to*/
/*             // instead be a number based on how many items we have*/
/*             var newForm = prototype.replace(/__name__/g, index);*/
/* */
/*             // increase the index with one for the next item*/
/*             collectionHolder.data('index', index + 1);*/
/* */
/*             // Display the form in the page in an li, before the "Add a address" link li*/
/*             var $newFormLi = $('<div class="box span4" id="catalogos'+ index +'"><div class="box-header well" data-original-title="">Agregar catalogo<div class="box-icon"><a class="btn btn-closer btn-round"  id="closecatalogos'+ index +'" href="#"><i class="icon-remove"></i></a></div></div></div>').append(newForm);*/
/*             collectionHolder.append($newFormLi);*/
/* */
/*             var $Closer = $('#closecatalogos'+ index);*/
/* */
/*              $Closer.on('click', function(e) {*/
/*                 // prevent the link from creating a "#" on the URL*/
/*                 e.preventDefault();*/
/* */
/*                 $( "div" ).remove( "#catalogos"+ index );*/
/*             });*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
