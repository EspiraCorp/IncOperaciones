<?php

/* IncentivesCatalogoBundle:Cliente:nuevo.html.twig */
class __TwigTemplate_7746244eb9f560e0d34ec318c899a0f38bf092de7d4358e96d25a025a5af855f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Cliente:nuevo.html.twig", 1);
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
        $__internal_1992470bff9510f77fbe9fffbf390c49bf2df6f9ba27f5632ffd2c310cd57970 = $this->env->getExtension("native_profiler");
        $__internal_1992470bff9510f77fbe9fffbf390c49bf2df6f9ba27f5632ffd2c310cd57970->enter($__internal_1992470bff9510f77fbe9fffbf390c49bf2df6f9ba27f5632ffd2c310cd57970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Cliente:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1992470bff9510f77fbe9fffbf390c49bf2df6f9ba27f5632ffd2c310cd57970->leave($__internal_1992470bff9510f77fbe9fffbf390c49bf2df6f9ba27f5632ffd2c310cd57970_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_985dce8be942df87b15af48cf5c4c82939313aed1f89649eb6fd2db584542314 = $this->env->getExtension("native_profiler");
        $__internal_985dce8be942df87b15af48cf5c4c82939313aed1f89649eb6fd2db584542314->enter($__internal_985dce8be942df87b15af48cf5c4c82939313aed1f89649eb6fd2db584542314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Cliente";
        
        $__internal_985dce8be942df87b15af48cf5c4c82939313aed1f89649eb6fd2db584542314->leave($__internal_985dce8be942df87b15af48cf5c4c82939313aed1f89649eb6fd2db584542314_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_51937fdba8193c560e8376225e861dff115eab3691e7ecfc978691a39e429fe0 = $this->env->getExtension("native_profiler");
        $__internal_51937fdba8193c560e8376225e861dff115eab3691e7ecfc978691a39e429fe0->enter($__internal_51937fdba8193c560e8376225e861dff115eab3691e7ecfc978691a39e429fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Nuevo Cliente</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("cliente_nuevo");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            * ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodocumento", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodocumento", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero_documento", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero_documento", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>

    </fieldset>
    <div class=\"row-fluid sortable ui-sortable\">
        <div class=\"programa box span10\" data-prototype=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programa", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-user\"></i>Programa</h2>
            </div>
         </div> 
    </div>  
<div class=\"form-actions\">
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_51937fdba8193c560e8376225e861dff115eab3691e7ecfc978691a39e429fe0->leave($__internal_51937fdba8193c560e8376225e861dff115eab3691e7ecfc978691a39e429fe0_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b1b753db099838fb7b4a9a6aa2ab7b8bcbd2fb33051279e32a7a0feaa223c3c = $this->env->getExtension("native_profiler");
        $__internal_3b1b753db099838fb7b4a9a6aa2ab7b8bcbd2fb33051279e32a7a0feaa223c3c->enter($__internal_3b1b753db099838fb7b4a9a6aa2ab7b8bcbd2fb33051279e32a7a0feaa223c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        // Get the div that holds the collection of addresses
        var collectionHolder = \$('div.programa');

        var Holder = \$('button.btn-primary');

        // setup an \"add a address\" link
        var \$newLinkLi = \$('<button class=\"btn\"><a href=\"#\">Agregar un programa</a></button>');

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
            var titulo=\$('<div class=\"box-header well\" data-original-title=\"\">Agregar programa</div>;');
            var prototype = collectionHolder.data('prototype');

            // get the new index
            var index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a address\" link li
            var \$newFormLi = \$('<div class=\"box span4\" id=\"programa'+ index +'\"><div class=\"box-header well\" data-original-title=\"\">Agregar programa<div class=\"box-icon\"><a class=\"btn btn-closer btn-round\"  id=\"closeprograma'+ index +'\" href=\"#\"><i class=\"icon-remove\"></i></a></div></div></div>').append(newForm);
            collectionHolder.append(\$newFormLi);

            var \$Closer = \$('#closeprograma'+ index);

             \$Closer.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                \$( \"div\" ).remove( \"#programa\"+ index );
            });
        }
    </script>

";
        
        $__internal_3b1b753db099838fb7b4a9a6aa2ab7b8bcbd2fb33051279e32a7a0feaa223c3c->leave($__internal_3b1b753db099838fb7b4a9a6aa2ab7b8bcbd2fb33051279e32a7a0feaa223c3c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Cliente:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 75,  182 => 74,  169 => 66,  164 => 64,  154 => 57,  145 => 51,  140 => 49,  133 => 45,  128 => 43,  121 => 39,  116 => 37,  109 => 33,  104 => 31,  97 => 27,  92 => 25,  85 => 21,  80 => 19,  74 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Nuevo Cliente{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Nuevo Cliente</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('cliente') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('cliente_nuevo') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.nombre, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.nombre, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.tipodocumento, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.tipodocumento, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.numero_documento, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.numero_documento, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.direccion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.direccion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.telefono, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.telefono, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.correo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.correo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/*     <div class="row-fluid sortable ui-sortable">*/
/*         <div class="programa box span10" data-prototype="{{ form_widget(form.programa.vars.prototype)|e }}">*/
/*             <div class="box-header well" data-original-title>*/
/*                 <h2><i class="icon-user"></i>Programa</h2>*/
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
/*     <script>*/
/*         // Get the div that holds the collection of addresses*/
/*         var collectionHolder = $('div.programa');*/
/* */
/*         var Holder = $('button.btn-primary');*/
/* */
/*         // setup an "add a address" link*/
/*         var $newLinkLi = $('<button class="btn"><a href="#">Agregar un programa</a></button>');*/
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
/*             var titulo=$('<div class="box-header well" data-original-title="">Agregar programa</div>;');*/
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
/*             var $newFormLi = $('<div class="box span4" id="programa'+ index +'"><div class="box-header well" data-original-title="">Agregar programa<div class="box-icon"><a class="btn btn-closer btn-round"  id="closeprograma'+ index +'" href="#"><i class="icon-remove"></i></a></div></div></div>').append(newForm);*/
/*             collectionHolder.append($newFormLi);*/
/* */
/*             var $Closer = $('#closeprograma'+ index);*/
/* */
/*              $Closer.on('click', function(e) {*/
/*                 // prevent the link from creating a "#" on the URL*/
/*                 e.preventDefault();*/
/* */
/*                 $( "div" ).remove( "#programa"+ index );*/
/*             });*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
