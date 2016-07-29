<?php

/* IncentivesCatalogoBundle:Maestro:grupo.html.twig */
class __TwigTemplate_eb3922bbf92fe124e0b36140c7d7374dcd0ab846709e2f8d09b78dafa190168f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f60564ad32c9fca3f6ee489ba9607115e9b083d400c4b5b628faf0718040783a = $this->env->getExtension("native_profiler");
        $__internal_f60564ad32c9fca3f6ee489ba9607115e9b083d400c4b5b628faf0718040783a->enter($__internal_f60564ad32c9fca3f6ee489ba9607115e9b083d400c4b5b628faf0718040783a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:grupo.html.twig"));

        // line 1
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_f60564ad32c9fca3f6ee489ba9607115e9b083d400c4b5b628faf0718040783a->leave($__internal_f60564ad32c9fca3f6ee489ba9607115e9b083d400c4b5b628faf0718040783a_prof);

    }

    // line 1
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_86b973ca4a42cf7dee039e40097c7c3aca0a6a3a05f92b12228d26f9ada2e923 = $this->env->getExtension("native_profiler");
        $__internal_86b973ca4a42cf7dee039e40097c7c3aca0a6a3a05f92b12228d26f9ada2e923->enter($__internal_86b973ca4a42cf7dee039e40097c7c3aca0a6a3a05f92b12228d26f9ada2e923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 2
        echo "    <div class=\"span8\">
        <div class=\"well\">
            <h4>Valor punto: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "valorpunto", array()), "html", null, true);
        echo "</h4>
        </div>
    </div>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")));
        foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
            // line 8
            echo "                <div class=\"row-fluid\">
                    <div class=\"span8 well\" style=\"height: 240px; background-color: #EDEDED;\">
                    ";
            // line 10
            $context["form"] = $this->getAttribute($this->getAttribute((isset($context["matrizv"]) ? $context["matrizv"] : $this->getContext($context, "matrizv")), $this->getAttribute($context["productos"], "id", array()), array(), "array"), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array(), "array");
            // line 11
            echo "                        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("productocatalogo_procesar");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " id=\"item";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"form-horizontal\">
                        ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                        <fieldset>
                            <div class=\"control-group\">
                                ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                                <div class=\"controls\">
                                    ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activo", array()), 'widget', array("id" => ((("activo" . $this->getAttribute($context["productos"], "id", array())) . "_") . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntos", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                                <div class=\"controls\">
                                    ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntos", array()), 'widget', array("id" => ((("puntos" . $this->getAttribute($context["productos"], "id", array())) . "_") . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
            echo "
                                </div>
                            </div>
                             <div class=\"control-group\">
                                ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actualizacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                                <div class=\"controls\">
                                    Automatica";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actualizacion", array()), 0, array(), "array"), 'widget', array("id" => ((("automatica" . $this->getAttribute($context["productos"], "id", array())) . "_") . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
            echo "
                                    Manual";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actualizacion", array()), 1, array(), "array"), 'widget', array("id" => ((("manual" . $this->getAttribute($context["productos"], "id", array())) . "_") . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <input type=\"hidden\" name=\"producto\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "\"/>
                                    <input type=\"hidden\" name=\"catalogo\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"/>
                                    ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
                                </div>
                            </div>
                        </fieldset>
                    ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
            echo "
                    </form>
                    </div>
                    <div id=\"resultado";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"></div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_86b973ca4a42cf7dee039e40097c7c3aca0a6a3a05f92b12228d26f9ada2e923->leave($__internal_86b973ca4a42cf7dee039e40097c7c3aca0a6a3a05f92b12228d26f9ada2e923_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8517b251163dd3f97d4f17f6ea6d1bf1c941afce35a978d0149f6a4492b4f388 = $this->env->getExtension("native_profiler");
        $__internal_8517b251163dd3f97d4f17f6ea6d1bf1c941afce35a978d0149f6a4492b4f388->enter($__internal_8517b251163dd3f97d4f17f6ea6d1bf1c941afce35a978d0149f6a4492b4f388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")));
        foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
            // line 51
            echo "        <script>
            // Attach a submit handler to the form
            \$(\"#item";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").submit(function( event ) {
                // Stop form from submitting normally
                event.preventDefault();
                // Send the data using post
                var form=\$(this); 
                var posting = \$.post( '";
            // line 58
            echo $this->env->getExtension('routing')->getPath("productocatalogo_procesar");
            echo "',form.serialize() );
                // Put the results in a div
                posting.done(function( data ) {
                    var content = data;
                    \$( \"#resultado";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" ).html( content );
                });
            });


            \$(document).ready(function(){
                \$(\"#activo";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").click(function(evento){
                    if(\$(\"#activo";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").is(':checked')){
                        \$(\"#puntos";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").removeAttr('disabled');
                        \$(\"#automatica";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").removeAttr('disabled');
                        \$(\"#manual";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").removeAttr('disabled');
                    }else{
                        \$(\"#puntos";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").attr('disabled','disabled');
                        \$(\"#automatica";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").attr('disabled','disabled');
                        \$(\"#manual";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").attr('disabled','disabled');
                    }
                });

                \$(\"#automatica";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").click(function(evento){

                    \$.post( \"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("productocatalogo_calcular");
            echo "\", { producto: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo ", catalogo: ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " })
                        .done(function( data ) {
                       
                        \$(\"#puntos";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\").val(data);
                    });
                });   
            })
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8517b251163dd3f97d4f17f6ea6d1bf1c941afce35a978d0149f6a4492b4f388->leave($__internal_8517b251163dd3f97d4f17f6ea6d1bf1c941afce35a978d0149f6a4492b4f388_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:grupo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 85,  259 => 82,  252 => 80,  243 => 76,  237 => 75,  231 => 74,  224 => 72,  218 => 71,  212 => 70,  206 => 69,  200 => 68,  189 => 62,  182 => 58,  172 => 53,  168 => 51,  163 => 50,  157 => 49,  141 => 44,  135 => 41,  128 => 37,  124 => 36,  120 => 35,  112 => 30,  108 => 29,  103 => 27,  96 => 23,  91 => 21,  84 => 17,  79 => 15,  73 => 12,  62 => 11,  60 => 10,  56 => 8,  52 => 7,  46 => 4,  42 => 2,  36 => 1,  29 => 49,  26 => 48,  24 => 1,);
    }
}
/* {% block cuerpo %}*/
/*     <div class="span8">*/
/*         <div class="well">*/
/*             <h4>Valor punto: {{ catalogo.valorpunto}}</h4>*/
/*         </div>*/
/*     </div>*/
/*             {% for productos in producto %}*/
/*                 <div class="row-fluid">*/
/*                     <div class="span8 well" style="height: 240px; background-color: #EDEDED;">*/
/*                     {% set form = matrizv[productos.id][id] %}*/
/*                         <form action="{{ path('productocatalogo_procesar') }}" method="POST" {{ form_enctype(form) }} id="item{{ productos.id }}_{{ id }}" class="form-horizontal">*/
/*                         {{ form_errors(form) }}*/
/*                         <fieldset>*/
/*                             <div class="control-group">*/
/*                                 {{ form_label(form.activo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                                 <div class="controls">*/
/*                                     {{ form_widget(form.activo, { 'id': 'activo'~productos.id~'_'~id }) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="control-group">*/
/*                                 {{ form_label(form.puntos, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                                 <div class="controls">*/
/*                                     {{ form_widget(form.puntos, { 'id': 'puntos'~productos.id~'_'~id }) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                              <div class="control-group">*/
/*                                 {{ form_label(form.actualizacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                                 <div class="controls">*/
/*                                     Automatica{{ form_widget(form.actualizacion[0], { 'id': 'automatica'~productos.id~'_'~id }) }}*/
/*                                     Manual{{ form_widget(form.actualizacion[1], { 'id': 'manual'~productos.id~'_'~id }) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="control-group">*/
/*                                 <div class="controls">*/
/*                                     <input type="hidden" name="producto" value="{{ productos.id }}"/>*/
/*                                     <input type="hidden" name="catalogo" value="{{ id }}"/>*/
/*                                     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </fieldset>*/
/*                     {{ form_widget(form._token) }}*/
/*                     </form>*/
/*                     </div>*/
/*                     <div id="resultado{{ productos.id }}_{{ id }}"></div>*/
/*                 </div>*/
/*         {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% for productos in producto %}*/
/*         <script>*/
/*             // Attach a submit handler to the form*/
/*             $("#item{{ productos.id }}_{{ id }}").submit(function( event ) {*/
/*                 // Stop form from submitting normally*/
/*                 event.preventDefault();*/
/*                 // Send the data using post*/
/*                 var form=$(this); */
/*                 var posting = $.post( '{{ path("productocatalogo_procesar") }}',form.serialize() );*/
/*                 // Put the results in a div*/
/*                 posting.done(function( data ) {*/
/*                     var content = data;*/
/*                     $( "#resultado{{ productos.id }}_{{ id }}" ).html( content );*/
/*                 });*/
/*             });*/
/* */
/* */
/*             $(document).ready(function(){*/
/*                 $("#activo{{ productos.id }}_{{ id }}").click(function(evento){*/
/*                     if($("#activo{{ productos.id }}_{{ id }}").is(':checked')){*/
/*                         $("#puntos{{ productos.id }}_{{ id }}").removeAttr('disabled');*/
/*                         $("#automatica{{ productos.id }}_{{ id }}").removeAttr('disabled');*/
/*                         $("#manual{{ productos.id }}_{{ id }}").removeAttr('disabled');*/
/*                     }else{*/
/*                         $("#puntos{{ productos.id }}_{{ id }}").attr('disabled','disabled');*/
/*                         $("#automatica{{ productos.id }}_{{ id }}").attr('disabled','disabled');*/
/*                         $("#manual{{ productos.id }}_{{ id }}").attr('disabled','disabled');*/
/*                     }*/
/*                 });*/
/* */
/*                 $("#automatica{{ productos.id }}_{{ id }}").click(function(evento){*/
/* */
/*                     $.post( "{{ path('productocatalogo_calcular') }}", { producto: {{ productos.id }}, catalogo: {{ id }} })*/
/*                         .done(function( data ) {*/
/*                        */
/*                         $("#puntos{{ productos.id }}_{{ id }}").val(data);*/
/*                     });*/
/*                 });   */
/*             })*/
/*         </script>*/
/*     {% endfor %}*/
/* {% endblock %}*/
