<?php

/* IncentivesOrdenesBundle:OrdenRedencion:editarvalores.html.twig */
class __TwigTemplate_992c93d0c08489d5165df629dff08488489334053c513e65f8f88434e3db3a00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesOrdenesBundle:OrdenRedencion:editarvalores.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bcbe54f691921ca115844b723172d68c540b8f11148ea1bed88c6198ebd54e5 = $this->env->getExtension("native_profiler");
        $__internal_7bcbe54f691921ca115844b723172d68c540b8f11148ea1bed88c6198ebd54e5->enter($__internal_7bcbe54f691921ca115844b723172d68c540b8f11148ea1bed88c6198ebd54e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:OrdenRedencion:editarvalores.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bcbe54f691921ca115844b723172d68c540b8f11148ea1bed88c6198ebd54e5->leave($__internal_7bcbe54f691921ca115844b723172d68c540b8f11148ea1bed88c6198ebd54e5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_57f012427e4f05625fd8300ed07400278dbdb6008b66d402e5b31876b25121a9 = $this->env->getExtension("native_profiler");
        $__internal_57f012427e4f05625fd8300ed07400278dbdb6008b66d402e5b31876b25121a9->enter($__internal_57f012427e4f05625fd8300ed07400278dbdb6008b66d402e5b31876b25121a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Orden";
        
        $__internal_57f012427e4f05625fd8300ed07400278dbdb6008b66d402e5b31876b25121a9->leave($__internal_57f012427e4f05625fd8300ed07400278dbdb6008b66d402e5b31876b25121a9_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_22855c3eda3392ca25c49fedc8b7fb46ecf1ea467fcbcfe5dfb22412866b22bd = $this->env->getExtension("native_profiler");
        $__internal_22855c3eda3392ca25c49fedc8b7fb46ecf1ea467fcbcfe5dfb22412866b22bd->enter($__internal_22855c3eda3392ca25c49fedc8b7fb46ecf1ea467fcbcfe5dfb22412866b22bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Orden\t
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_datos", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span12\">
\t    <div class=\"box-content\">
\t    \t
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_editar", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "nombre", array()) == "Abierta")) {
            // line 22
            echo "\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</a>
\t\t\t\t</i>Datos Orden</h2>
\t\t\t\t
\t\t\t</div>
\t\t\t

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Consecutivo</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "consecutivo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Proveedor</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "proveedor", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de solicitud</td><td>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de entrega</td><td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cancelado</td>
\t\t\t\t\t\t\t";
        // line 39
        if (($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "cancelado", array()) == true)) {
            // line 40
            echo "\t\t\t\t\t\t\t\t<td>Si</td>
\t\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t\t<td>No</td>
\t\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr><td>Estado</td><td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "nombre", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

\t

\t<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t\t
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_agregarproducto", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "nombre", array()) == "Abierta")) {
            // line 63
            echo "\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t</a>
\t\t\t\t\tProductos
\t\t\t\t</h2>
\t\t\t</div>\t\t\t

\t\t\t<form action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenredencion_valores", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
\t\t\t    <div class=\"ordenesProducto\" data-prototype=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordenesProducto", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
\t\t\t    </div>
\t\t\t    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t</form>


\t\t\t";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) != 0)) {
            // line 81
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Referencia</th>
\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t<th>Codigo de Barras</th>
\t\t\t\t\t\t<th>Codigo Incentives</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Cantidad Recibida</th>
\t\t\t\t\t\t<th>Valor Unitario</th>
\t\t\t\t\t\t<th>Descuento</th>
\t\t\t\t\t\t<th>Valor Total</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 96
            $context["total"] = 0;
            // line 97
            echo "\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 98
            $context["j"] = 0;
            // line 99
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                echo "\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                // line 101
                $context["i"] = 0;
                // line 102
                echo "\t\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codEAN", array()), "html", null, true);
                echo "</td>\t
\t\t\t\t\t\t\t\t<td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
                echo "</td>\t\t
\t\t\t\t\t\t\t\t<td>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidadrecibida", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>\$ ";
                // line 108
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "valorunidad", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>\$ ";
                // line 109
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "descuento", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>\$ ";
                // line 110
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valortotal", array()) - $this->getAttribute($context["producto"], "descuento", array())), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 112
                $context["total"] = (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["producto"], "valortotal", array())) - $this->getAttribute($context["producto"], "descuento", array()));
                // line 113
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td colspan=\"2\">";
                // line 114
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesOrdenesBundle:OrdenRedencion:valores", array("id" => $this->getAttribute($context["producto"], "id", array()))));
                echo "</td>
\t\t\t\t\t\t\t\t";
                // line 115
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 116
                echo "\t\t\t\t\t\t\t<td><a class=\"btn btn-danger\" id=\"ordenproducto_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenredencion_eliminar", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
                echo "\">Eliminar</a></td>
\t
\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 120
                if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenestipo", array()), "id", array()) == 2)) {
                    // line 121
                    echo "\t\t\t\t\t\t<tr id=\"detalle_";
                    echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<td colspan=\"1\"></td>
\t\t\t\t\t\t\t<td colspan=\"11\">
\t\t\t                    <div>";
                    // line 124
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesOrdenesBundle:Ordenes:editarProductoOrden", array("productoOrden" => $this->getAttribute($context["producto"], "id", array()))));
                    echo "</div>
\t\t\t                </td>
\t\t\t            </tr>
\t\t            ";
                }
                // line 128
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 132
        echo "\t\t</div>
\t</div>



";
        
        $__internal_22855c3eda3392ca25c49fedc8b7fb46ecf1ea467fcbcfe5dfb22412866b22bd->leave($__internal_22855c3eda3392ca25c49fedc8b7fb46ecf1ea467fcbcfe5dfb22412866b22bd_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1579c15b5f3240799e956d593b6f455751ca4817b3b234b65c6bc4271f2799d8 = $this->env->getExtension("native_profiler");
        $__internal_1579c15b5f3240799e956d593b6f455751ca4817b3b234b65c6bc4271f2799d8->enter($__internal_1579c15b5f3240799e956d593b6f455751ca4817b3b234b65c6bc4271f2799d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>


\t// Get the div that holds the collection of addresses
        var collectionHolder = \$('div.ordenesProducto');

        var Holder = \$('button.btn-small');

        // setup an \"add a address\" link
        //var \$newLinkLi = \$('<button class=\"btn btn-small btn-success\"><a href=\"#\"><i class=\"icon-plus icon-white\"></i></a></button>');

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
            var titulo=\$('<div class=\"box-header well\" data-original-title=\"\">Agregar producto</div>;');
            var prototype = collectionHolder.data('prototype');

            // get the new index
            var index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a address\" link li
            var \$newFormLi = \$('<div class=\"box span4\" id=\"ordenesProducto'+ index +'\"><div class=\"box-header well\" data-original-title=\"\">Agregar Producto<div class=\"box-icon\"><a class=\"btn btn-closer btn-round\"  id=\"closeordenesProducto'+ index +'\" href=\"#\"><i class=\"icon-remove\"></i></a></div></div></div>').append(newForm);
            collectionHolder.append(\$newFormLi);

            var \$Closer = \$('#closeordenesProducto'+ index);

             \$Closer.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                \$( \"div\" ).remove( \"#ordenesProducto\"+ index );
            });
        }

                var x;
\t\tx=\$(document);
\t\tx.ready(inicializarEventos);

\t\tfunction inicializarEventos()
\t\t{
\t\t var x;
\t\t x=\$(\"div.estado a\");
\t\t x.each(resaltarParrafos);
\t\t}

\tfunction confirmar(ruta)
\t{
\t  if (confirm(\"Cambiar estado\")==true){
\t  \tself.location=ruta;
\t  }else{
\t  \talert(\"OK\");
\t  }
\t  
\t}

\t</script>
";
        
        $__internal_1579c15b5f3240799e956d593b6f455751ca4817b3b234b65c6bc4271f2799d8->leave($__internal_1579c15b5f3240799e956d593b6f455751ca4817b3b234b65c6bc4271f2799d8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:OrdenRedencion:editarvalores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 140,  320 => 139,  308 => 132,  303 => 129,  297 => 128,  290 => 124,  283 => 121,  281 => 120,  271 => 116,  269 => 115,  265 => 114,  262 => 113,  260 => 112,  255 => 110,  251 => 109,  247 => 108,  243 => 107,  239 => 106,  235 => 105,  231 => 104,  227 => 103,  222 => 102,  220 => 101,  212 => 99,  210 => 98,  207 => 97,  205 => 96,  188 => 81,  186 => 80,  179 => 76,  175 => 75,  170 => 73,  164 => 72,  157 => 67,  151 => 63,  149 => 62,  145 => 61,  126 => 45,  123 => 44,  119 => 42,  115 => 40,  113 => 39,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  86 => 26,  80 => 22,  78 => 21,  74 => 20,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Orden{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Orden	*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('ordenes_datos',  {"id": ordenes.id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/* 	    <div class="box-content">*/
/* 	    	*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				<a href="{{ path('ordenes_editar',  {"id": ordenes.id}) }}">*/
/* 					{% if (ordenes.ordenesEstado.nombre =='Abierta') %}*/
/* 						<button class="btn btn-primary">*/
/* 							<i class="icon-edit icon-white"></i>*/
/* 						</button>*/
/* 					{% endif %}*/
/* 				</a>*/
/* 				</i>Datos Orden</h2>*/
/* 				*/
/* 			</div>*/
/* 			*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Consecutivo</td><td>{{ ordenes.consecutivo }}</td></tr>*/
/* 						<tr><td>Proveedor</td><td>{{ ordenes.proveedor.nombre }}</td></tr>*/
/* 						<tr><td>Fecha de solicitud</td><td>{{ ordenes.fechaCreacion | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Fecha de entrega</td><td>{{ ordenes.fechaVencimiento | date("Y-m-d")  }}</td></tr>*/
/* 						<tr><td>Cancelado</td>*/
/* 							{% if ordenes.cancelado==true %}*/
/* 								<td>Si</td>*/
/* 							{% else %}*/
/* 								<td>No</td>*/
/* 							{% endif %}*/
/* 						</tr>*/
/* 						<tr><td>Estado</td><td>{{ ordenes.ordenesEstado.nombre }}*/
/* 							*/
/* 							</td>*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	*/
/* */
/* 	<div class="box span12">*/
/* 		<div class="box-content">*/
/* 			*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('ordenes_agregarproducto',  {"id": ordenes.id}) }}">*/
/* 					{% if (ordenes.ordenesEstado.nombre =='Abierta') %}*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					{% endif %}*/
/* 				</a>*/
/* 					Productos*/
/* 				</h2>*/
/* 			</div>			*/
/* */
/* 			<form action="{{ path("ordenredencion_valores", {"id": ordenes.id}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/* 			    <div class="ordenesProducto" data-prototype="{{ form_widget(form.ordenesProducto.vars.prototype)|e }}">*/
/* 			    </div>*/
/* 			    {{ form_errors(form) }}*/
/* 				{{ form_widget(form._token) }}*/
/* 			</form>*/
/* */
/* */
/* 			{% if productos | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Referencia</th>*/
/* 						<th>Id</th>*/
/* 						<th>Codigo de Barras</th>*/
/* 						<th>Codigo Incentives</th>*/
/* 						<th>Cantidad</th>*/
/* 						<th>Cantidad Recibida</th>*/
/* 						<th>Valor Unitario</th>*/
/* 						<th>Descuento</th>*/
/* 						<th>Valor Total</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% set total=0 %}*/
/* 				<tbody>*/
/* 					{% set j=0 %}*/
/* 					{% for producto in productos %}	*/
/* 					<tr>*/
/* 						{% set i=0 %}*/
/* 								<td>{{ producto.producto.referencia }}</td>*/
/* 								<td>{{ producto.producto.id }}</td>*/
/* 								<td>{{ producto.producto.codEAN  }}</td>	*/
/* 								<td>{{ producto.producto.codInc  }}</td>		*/
/* 								<td>{{ producto.cantidad  }}</td>*/
/* 								<td>{{ producto.cantidadrecibida  }}</td>*/
/* 								<td>$ {{ producto.valorunidad|number_format(2, ',', '.') }}</td>*/
/* 								<td>$ {{ producto.descuento|number_format(2, ',', '.') }}</td>*/
/* 								<td>$ {{ (producto.valortotal - producto.descuento )|number_format(2, ',', '.') }}</td>*/
/* 								*/
/* 								{% set total= total + producto.valortotal - producto.descuento %}*/
/* 								*/
/* 								<td colspan="2">{{ render(controller('IncentivesOrdenesBundle:OrdenRedencion:valores', { "id": producto.id})) }}</td>*/
/* 								{% set i=i+1 %}*/
/* 							<td><a class="btn btn-danger" id="ordenproducto_{{ producto.id }}" href="{{ path("ordenredencion_eliminar", {"id": producto.id}) }}">Eliminar</a></td>*/
/* 	*/
/* 						</tr>	*/
/* 						*/
/* 						{% if (ordenes.ordenestipo.id == 2) %}*/
/* 						<tr id="detalle_{{ j }}">*/
/* 							<td colspan="1"></td>*/
/* 							<td colspan="11">*/
/* 			                    <div>{{ render(controller('IncentivesOrdenesBundle:Ordenes:editarProductoOrden', { 'productoOrden': producto.id })) }}</div>*/
/* 			                </td>*/
/* 			            </tr>*/
/* 		            {% endif %}*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* */
/* */
/* 	// Get the div that holds the collection of addresses*/
/*         var collectionHolder = $('div.ordenesProducto');*/
/* */
/*         var Holder = $('button.btn-small');*/
/* */
/*         // setup an "add a address" link*/
/*         //var $newLinkLi = $('<button class="btn btn-small btn-success"><a href="#"><i class="icon-plus icon-white"></i></a></button>');*/
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
/*             var titulo=$('<div class="box-header well" data-original-title="">Agregar producto</div>;');*/
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
/*             var $newFormLi = $('<div class="box span4" id="ordenesProducto'+ index +'"><div class="box-header well" data-original-title="">Agregar Producto<div class="box-icon"><a class="btn btn-closer btn-round"  id="closeordenesProducto'+ index +'" href="#"><i class="icon-remove"></i></a></div></div></div>').append(newForm);*/
/*             collectionHolder.append($newFormLi);*/
/* */
/*             var $Closer = $('#closeordenesProducto'+ index);*/
/* */
/*              $Closer.on('click', function(e) {*/
/*                 // prevent the link from creating a "#" on the URL*/
/*                 e.preventDefault();*/
/* */
/*                 $( "div" ).remove( "#ordenesProducto"+ index );*/
/*             });*/
/*         }*/
/* */
/*                 var x;*/
/* 		x=$(document);*/
/* 		x.ready(inicializarEventos);*/
/* */
/* 		function inicializarEventos()*/
/* 		{*/
/* 		 var x;*/
/* 		 x=$("div.estado a");*/
/* 		 x.each(resaltarParrafos);*/
/* 		}*/
/* */
/* 	function confirmar(ruta)*/
/* 	{*/
/* 	  if (confirm("Cambiar estado")==true){*/
/* 	  	self.location=ruta;*/
/* 	  }else{*/
/* 	  	alert("OK");*/
/* 	  }*/
/* 	  */
/* 	}*/
/* */
/* 	</script>*/
/* {% endblock %}*/
/* */
