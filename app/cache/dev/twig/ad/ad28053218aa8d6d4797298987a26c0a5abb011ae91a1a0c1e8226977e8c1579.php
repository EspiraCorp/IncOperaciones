<?php

/* IncentivesInventarioBundle:Inventario:cierreentrega.html.twig */
class __TwigTemplate_03c40dc2418eea34f9792b7aec15aa69b8f587607c63ee80f008bdc06f8ea8e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:cierreentrega.html.twig", 1);
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
        $__internal_073a98145a95c68bd02e35237899de6c6aeeca531fcc9e04fde70cee366f35c7 = $this->env->getExtension("native_profiler");
        $__internal_073a98145a95c68bd02e35237899de6c6aeeca531fcc9e04fde70cee366f35c7->enter($__internal_073a98145a95c68bd02e35237899de6c6aeeca531fcc9e04fde70cee366f35c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:cierreentrega.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073a98145a95c68bd02e35237899de6c6aeeca531fcc9e04fde70cee366f35c7->leave($__internal_073a98145a95c68bd02e35237899de6c6aeeca531fcc9e04fde70cee366f35c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcb529a32551fc30a59ffeb0287a2b4cb0d94ebb5a0fada608489f13e120c5d5 = $this->env->getExtension("native_profiler");
        $__internal_dcb529a32551fc30a59ffeb0287a2b4cb0d94ebb5a0fada608489f13e120c5d5->enter($__internal_dcb529a32551fc30a59ffeb0287a2b4cb0d94ebb5a0fada608489f13e120c5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cierre Entrega";
        
        $__internal_dcb529a32551fc30a59ffeb0287a2b4cb0d94ebb5a0fada608489f13e120c5d5->leave($__internal_dcb529a32551fc30a59ffeb0287a2b4cb0d94ebb5a0fada608489f13e120c5d5_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6f4789f66dd36e1357c9555d33c599ff36cc8efd59348e85ceacbefe43e60fa6 = $this->env->getExtension("native_profiler");
        $__internal_6f4789f66dd36e1357c9555d33c599ff36cc8efd59348e85ceacbefe43e60fa6->enter($__internal_6f4789f66dd36e1357c9555d33c599ff36cc8efd59348e85ceacbefe43e60fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Cierre Entrega
        <div class=\"box-icon\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("inventario_planilla_cierre_detalle");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
        </div>
    </div>
</div>

    <div class=\"box span6\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t
\t\t\t\t</i>Datos Envio</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Guia</td><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guia"]) ? $context["guia"] : $this->getContext($context, "guia")), "guia", array()), "guia", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Redencion</td><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["guia"]) ? $context["guia"] : $this->getContext($context, "guia")), "inventario", array()), "redencion", array()), "codigoredencion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["guia"]) ? $context["guia"] : $this->getContext($context, "guia")), "inventario", array()), "redencion", array()), "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Participante</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["guia"]) ? $context["guia"] : $this->getContext($context, "guia")), "inventario", array()), "redencion", array()), "participante", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Producto</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["guia"]) ? $context["guia"] : $this->getContext($context, "guia")), "inventario", array()), "producto", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Marca</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["guia"]) ? $context["guia"] : $this->getContext($context, "guia")), "inventario", array()), "producto", array()), "marca", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Referencia</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["guia"]) ? $context["guia"] : $this->getContext($context, "guia")), "inventario", array()), "producto", array()), "referencia", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

<div class=\"box span12\">
    <div class=\"box-content\">
        <form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("inventario_planilla_cierre_entrega");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            <fieldset>
                <div class=\"control-group\">
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cierreEstado", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                    <div class=\"controls\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cierreEstado", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                    </div>
                </div>
                <div id=\"div_devolucion\" class=\"control-group\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "devolucionTipo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                    <div class=\"controls\">
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "devolucionTipo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                    </div>
                </div>
                <div id=\"div_fecha\" class=\"control-group\">
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEntrega", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                    <div class=\"controls\">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEntrega", array()), 'widget', array("id" => "fechaEntrega"));
        echo "
                    </div>
                </div>
                <div class=\"control-group\">
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                    <div class=\"controls\">
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'widget', array("id" => "fechaEntrega"));
        echo "
                    </div>
                </div>
            </fieldset>
         <div class=\"form-actions\">
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>
        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        </form>
    </div>
</div>
";
        
        $__internal_6f4789f66dd36e1357c9555d33c599ff36cc8efd59348e85ceacbefe43e60fa6->leave($__internal_6f4789f66dd36e1357c9555d33c599ff36cc8efd59348e85ceacbefe43e60fa6_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f7b2f9e9e4498aeab96b3f99513d3e6d96e1ca6955fe944973d0bf89d1203b8 = $this->env->getExtension("native_profiler");
        $__internal_8f7b2f9e9e4498aeab96b3f99513d3e6d96e1ca6955fe944973d0bf89d1203b8->enter($__internal_8f7b2f9e9e4498aeab96b3f99513d3e6d96e1ca6955fe944973d0bf89d1203b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fechaEntrega\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        
        \$( document ).ready(function() {
            \$(\"#div_devolucion\").hide();
        });
        
        \$( \"#cierre_cierreEstado\" ).change(function() {
            var estado = \$( \"#cierre_cierreEstado option:selected\" ).val();
            if( estado == 3 ){
                \$(\"#div_fecha\").hide();
                \$(\"#div_devolucion\").show();
            }else{
                \$(\"#div_fecha\").show();
                \$(\"#div_devolucion\").hide();
            }
        });
    </script>


";
        
        $__internal_8f7b2f9e9e4498aeab96b3f99513d3e6d96e1ca6955fe944973d0bf89d1203b8->leave($__internal_8f7b2f9e9e4498aeab96b3f99513d3e6d96e1ca6955fe944973d0bf89d1203b8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:cierreentrega.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 77,  197 => 76,  185 => 70,  180 => 68,  172 => 63,  167 => 61,  160 => 57,  155 => 55,  148 => 51,  143 => 49,  136 => 45,  131 => 43,  125 => 40,  115 => 39,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  60 => 10,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Cierre Entrega{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Cierre Entrega*/
/*         <div class="box-icon">*/
/*             <a href="{{ path('inventario_planilla_cierre_detalle') }}/{{ planilla }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				*/
/* 				</i>Datos Envio</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Guia</td><td>{{ guia.guia.guia }}</td></tr>*/
/* 						<tr><td>Redencion</td><td>{{ guia.inventario.redencion.codigoredencion }}</td></tr>*/
/* 						<tr><td>Programa</td><td>{{ guia.inventario.redencion.participante.programa.nombre }}</td></tr>*/
/* 						<tr><td>Participante</td><td>{{ guia.inventario.redencion.participante.nombre }}</td></tr>*/
/* 						<tr><td>Producto</td><td>{{ guia.inventario.producto.nombre }}</td></tr>*/
/* 						<tr><td>Marca</td><td>{{ guia.inventario.producto.marca }}</td></tr>*/
/* 						<tr><td>Referencia</td><td>{{ guia.inventario.producto.referencia }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <div class="box span12">*/
/*     <div class="box-content">*/
/*         <form action="{{ path("inventario_planilla_cierre_entrega") }}/{{ id }}/{{ planilla }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*             {{ form_errors(form) }}*/
/*             <fieldset>*/
/*                 <div class="control-group">*/
/*                     {{ form_label(form.cierreEstado, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                     <div class="controls">*/
/*                         {{ form_widget(form.cierreEstado, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="div_devolucion" class="control-group">*/
/*                     {{ form_label(form.devolucionTipo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                     <div class="controls">*/
/*                         {{ form_widget(form.devolucionTipo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="div_fecha" class="control-group">*/
/*                     {{ form_label(form.fechaEntrega, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                     <div class="controls">*/
/*                         {{ form_widget(form.fechaEntrega, { 'id': 'fechaEntrega'}) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     {{ form_label(form.observacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                     <div class="controls">*/
/*                         {{ form_widget(form.observacion, { 'id': 'fechaEntrega'}) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </fieldset>*/
/*          <div class="form-actions">*/
/*             {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/*         </div>*/
/*         {{ form_widget(form._token) }}*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#fechaEntrega" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         */
/*         $( document ).ready(function() {*/
/*             $("#div_devolucion").hide();*/
/*         });*/
/*         */
/*         $( "#cierre_cierreEstado" ).change(function() {*/
/*             var estado = $( "#cierre_cierreEstado option:selected" ).val();*/
/*             if( estado == 3 ){*/
/*                 $("#div_fecha").hide();*/
/*                 $("#div_devolucion").show();*/
/*             }else{*/
/*                 $("#div_fecha").show();*/
/*                 $("#div_devolucion").hide();*/
/*             }*/
/*         });*/
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
