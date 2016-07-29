<?php

/* IncentivesCatalogoBundle:Maestro:general.html.twig */
class __TwigTemplate_0c93457ffdae433f446d697ca40760ce659167ea45e731e59a8300545b6647f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:general.html.twig", 1);
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
        $__internal_18d163326536f941352a57112cad07444856cffbdfcc2a758df32cced68ae580 = $this->env->getExtension("native_profiler");
        $__internal_18d163326536f941352a57112cad07444856cffbdfcc2a758df32cced68ae580->enter($__internal_18d163326536f941352a57112cad07444856cffbdfcc2a758df32cced68ae580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:general.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18d163326536f941352a57112cad07444856cffbdfcc2a758df32cced68ae580->leave($__internal_18d163326536f941352a57112cad07444856cffbdfcc2a758df32cced68ae580_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92c7659fc4cab4cd99efcc6fcf9ff0ec416582bed7d3e558823aad025b509cce = $this->env->getExtension("native_profiler");
        $__internal_92c7659fc4cab4cd99efcc6fcf9ff0ec416582bed7d3e558823aad025b509cce->enter($__internal_92c7659fc4cab4cd99efcc6fcf9ff0ec416582bed7d3e558823aad025b509cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Maestro";
        
        $__internal_92c7659fc4cab4cd99efcc6fcf9ff0ec416582bed7d3e558823aad025b509cce->leave($__internal_92c7659fc4cab4cd99efcc6fcf9ff0ec416582bed7d3e558823aad025b509cce_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_51c5e81a0a9843b8d23c41410d5b74137d9083c662cebf9fa7c885a4e45fba3d = $this->env->getExtension("native_profiler");
        $__internal_51c5e81a0a9843b8d23c41410d5b74137d9083c662cebf9fa7c885a4e45fba3d->enter($__internal_51c5e81a0a9843b8d23c41410d5b74137d9083c662cebf9fa7c885a4e45fba3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Maestro</h2>
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
        echo $this->env->getExtension('routing')->getPath("maestro");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <fieldset>
      
    </fieldset>
    
<div class=\"form-actions\">
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_51c5e81a0a9843b8d23c41410d5b74137d9083c662cebf9fa7c885a4e45fba3d->leave($__internal_51c5e81a0a9843b8d23c41410d5b74137d9083c662cebf9fa7c885a4e45fba3d_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64ca9a14d584630e98768e88c8e7c8a583f8ee9bc940f3a24b5f3e520a9ed5d9 = $this->env->getExtension("native_profiler");
        $__internal_64ca9a14d584630e98768e88c8e7c8a583f8ee9bc940f3a24b5f3e520a9ed5d9->enter($__internal_64ca9a14d584630e98768e88c8e7c8a583f8ee9bc940f3a24b5f3e520a9ed5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        // Get the div that holds the collection of addresses
        var collectionHolder = \$('div.contactos');

        var Holder = \$('button.btn-primary');

        // setup an \"add a address\" link
        var \$newLinkLi = \$('<button class=\"btn\"><a href=\"#\">Agregar un contacto</a></button>');

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
            var titulo=\$('<div class=\"box-header well\" data-original-title=\"\">Agregar Imagen</div>;');
            var prototype = collectionHolder.data('prototype');

            // get the new index
            var index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a address\" link li
            var \$newFormLi = \$('<div class=\"box span4\" id=\"contacto'+ index +'\"><div class=\"box-header well\" data-original-title=\"\">Agregar Contacto<div class=\"box-icon\"><a class=\"btn btn-closer btn-round\"  id=\"closecontacto'+ index +'\" href=\"#\"><i class=\"icon-remove\"></i></a></div></div></div>').append(newForm);
            collectionHolder.append(\$newFormLi);

            var \$Closer = \$('#closecontacto'+ index);

             \$Closer.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                \$( \"div\" ).remove( \"#contacto\"+ index );
            });
        }
    </script>

";
        
        $__internal_64ca9a14d584630e98768e88c8e7c8a583f8ee9bc940f3a24b5f3e520a9ed5d9->leave($__internal_64ca9a14d584630e98768e88c8e7c8a583f8ee9bc940f3a24b5f3e520a9ed5d9_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  102 => 32,  89 => 25,  84 => 23,  74 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Maestro{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Maestro</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('cliente') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('maestro') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/* */
/*     <fieldset>*/
/*       */
/*     </fieldset>*/
/*     */
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
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         // Get the div that holds the collection of addresses*/
/*         var collectionHolder = $('div.contactos');*/
/* */
/*         var Holder = $('button.btn-primary');*/
/* */
/*         // setup an "add a address" link*/
/*         var $newLinkLi = $('<button class="btn"><a href="#">Agregar un contacto</a></button>');*/
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
/*             var titulo=$('<div class="box-header well" data-original-title="">Agregar Imagen</div>;');*/
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
/*             var $newFormLi = $('<div class="box span4" id="contacto'+ index +'"><div class="box-header well" data-original-title="">Agregar Contacto<div class="box-icon"><a class="btn btn-closer btn-round"  id="closecontacto'+ index +'" href="#"><i class="icon-remove"></i></a></div></div></div>').append(newForm);*/
/*             collectionHolder.append($newFormLi);*/
/* */
/*             var $Closer = $('#closecontacto'+ index);*/
/* */
/*              $Closer.on('click', function(e) {*/
/*                 // prevent the link from creating a "#" on the URL*/
/*                 e.preventDefault();*/
/* */
/*                 $( "div" ).remove( "#contacto"+ index );*/
/*             });*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
