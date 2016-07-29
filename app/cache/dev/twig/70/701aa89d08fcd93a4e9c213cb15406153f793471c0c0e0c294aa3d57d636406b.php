<?php

/* IncentivesOrdenesBundle:Ordenes:ingreso.html.twig */
class __TwigTemplate_9b40240881a94eabbfeb68f09eb96bcfca9f16b2eb13c6eadd43bb36a50d4626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:Ordenes:ingreso.html.twig", 1);
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
        $__internal_e077346417e2eb8d303d5e24187db5b162aeacc90b2b07a77119fbec18659437 = $this->env->getExtension("native_profiler");
        $__internal_e077346417e2eb8d303d5e24187db5b162aeacc90b2b07a77119fbec18659437->enter($__internal_e077346417e2eb8d303d5e24187db5b162aeacc90b2b07a77119fbec18659437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:ingreso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e077346417e2eb8d303d5e24187db5b162aeacc90b2b07a77119fbec18659437->leave($__internal_e077346417e2eb8d303d5e24187db5b162aeacc90b2b07a77119fbec18659437_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4784d6b369f2907c73d7b536f28c1df09dd4c6df46478a40be444d3ba1229ba0 = $this->env->getExtension("native_profiler");
        $__internal_4784d6b369f2907c73d7b536f28c1df09dd4c6df46478a40be444d3ba1229ba0->enter($__internal_4784d6b369f2907c73d7b536f28c1df09dd4c6df46478a40be444d3ba1229ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ingreso Orden";
        
        $__internal_4784d6b369f2907c73d7b536f28c1df09dd4c6df46478a40be444d3ba1229ba0->leave($__internal_4784d6b369f2907c73d7b536f28c1df09dd4c6df46478a40be444d3ba1229ba0_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_e9f6d2105fd12b84f72c45ea304b09d758b90ddae4c4bbd393576be20bc64ab5 = $this->env->getExtension("native_profiler");
        $__internal_e9f6d2105fd12b84f72c45ea304b09d758b90ddae4c4bbd393576be20bc64ab5->enter($__internal_e9f6d2105fd12b84f72c45ea304b09d758b90ddae4c4bbd393576be20bc64ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Ingreso Orden\t
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ordenes_ingreso_listado");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span12\">
\t    <div class=\"box-content\">
\t    \t
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>Datos Orden</h2>
\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "rutapdfcodes", array()), 5)), "html", null, true);
        echo "\"  class=\"btn btn-info\">
\t\t\t\t\t\t<i class=\"icon-barcode icon-white\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Consecutivo</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "consecutivo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Proveedor</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "proveedor", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de solicitud</td><td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de entrega</td><td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cancelado</td>
\t\t\t\t\t\t\t";
        // line 34
        if (($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "cancelado", array()) == true)) {
            // line 35
            echo "\t\t\t\t\t\t\t\t<td>Si</td>
\t\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t\t<td>No</td>
\t\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr><td>Estado</td><td>";
        // line 40
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
\t\t\t\t\t";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 1)) {
            // line 57
            echo "\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-small btn-success\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\tProductos
\t\t\t\t</h2>
\t\t\t</div>\t


\t\t\t";
        // line 68
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) != 0)) {
            // line 69
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Referencia</th>
\t\t\t\t\t\t<th>Codigo de Barras</th>
\t\t\t\t\t\t<th>Codigo Incentives</th>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Cantidad Solicitada</th>
\t\t\t\t\t\t<th>Valor unitario</th>
\t\t\t\t\t\t<th>Valor total</th>
\t\t\t\t\t\t<th>Cantidad Inventario</th>\t\t\t\t\t\t
\t\t\t\t\t\t<th>Cantidad a Ingresar</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 84
            $context["total"] = 0;
            // line 85
            echo "\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 86
            $context["i"] = 0;
            // line 87
            echo "\t\t\t\t\t\t";
            $context["j"] = 0;
            // line 88
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["productoOrden"]) {
                // line 89
                echo "\t\t\t\t\t\t\t\t";
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 90
                echo "\t\t\t\t\t\t\t\t";
                $context["form1"] = $this->getAttribute((isset($context["matriz"]) ? $context["matriz"] : $this->getContext($context, "matriz")), $this->getAttribute($context["productoOrden"], "id", array()), array(), "array");
                // line 91
                echo "\t\t\t\t\t\t\t\t<form action=\"";
                echo $this->env->getExtension('routing')->getPath("ordenes_procesarvalores");
                echo "\" method=\"POST\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'enctype');
                echo " id=\"item";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productoOrden"], "id", array()), "html", null, true);
                echo "\" class=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productoOrden"], "producto", array()), "referencia", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productoOrden"], "producto", array()), "codEAN", array()), "html", null, true);
                echo "</td>\t
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productoOrden"], "producto", array()), "codInc", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productoOrden"], "producto", array()), "descripcion", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["productoOrden"], "cantidad", array()), "html", null, true);
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" onClick=\"detalle('";
                echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                echo "')\" class=\"btn btn-success\">+</a></td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["productoOrden"], "valorunidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["productoOrden"], "valortotal", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["productoOrden"], "cantidadrecibida", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t";
                // line 101
                if ( !$this->env->getExtension('security')->isGranted("ROLE_BOD")) {
                    echo "\t
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 102
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "cantidadrecibida", array()), 'widget');
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t                                <div class=\"controls\">
\t\t\t\t                                    <input type=\"hidden\" name=\"producto\" value=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productoOrden"], "id", array()), "html", null, true);
                    echo "\"/>
\t\t\t\t                                    ";
                    // line 107
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
                    echo "
\t\t\t\t                                </div>
\t\t\t\t                            </div>
\t\t\t\t                        </td>
\t\t\t\t                        <td id=\"resultado";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productoOrden"], "id", array()), "html", null, true);
                    echo "\"></td>
\t\t\t\t                        ";
                }
                // line 113
                echo "\t\t                            </tr>
\t\t                    \t";
                // line 114
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "_token", array()), 'widget');
                echo "
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t";
                // line 116
                if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenestipo", array()), "id", array()) == 2)) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t<tr id=\"detalle_";
                    echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                    echo "\" class=\"hide\">
\t\t\t\t\t\t\t\t\t<td colspan=\"1\"></td>
\t\t\t\t\t\t\t\t\t<td colspan=\"11\">
\t\t\t\t\t                    <div>";
                    // line 120
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesOrdenesBundle:Ordenes:detalleIngreso", array("productoOrden" => $this->getAttribute($context["productoOrden"], "id", array()))));
                    echo "</div>
\t\t\t\t\t                </td>
\t\t\t\t\t            </tr>
\t\t\t\t\t            ";
                }
                // line 124
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productoOrden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 129
        echo "\t\t</div>
\t</div>
";
        
        $__internal_e9f6d2105fd12b84f72c45ea304b09d758b90ddae4c4bbd393576be20bc64ab5->leave($__internal_e9f6d2105fd12b84f72c45ea304b09d758b90ddae4c4bbd393576be20bc64ab5_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa0788f54a5de97ac7ab1fe04aa4460089add008d1f2e2d4696d8eebef6527ac = $this->env->getExtension("native_profiler");
        $__internal_fa0788f54a5de97ac7ab1fe04aa4460089add008d1f2e2d4696d8eebef6527ac->enter($__internal_fa0788f54a5de97ac7ab1fe04aa4460089add008d1f2e2d4696d8eebef6527ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script>
\t\tfunction detalle(id){
\t        \$('#detalle_'+id).toggle();
\t    }
    </script>
\t
";
        
        $__internal_fa0788f54a5de97ac7ab1fe04aa4460089add008d1f2e2d4696d8eebef6527ac->leave($__internal_fa0788f54a5de97ac7ab1fe04aa4460089add008d1f2e2d4696d8eebef6527ac_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:ingreso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 134,  313 => 133,  304 => 129,  296 => 125,  290 => 124,  283 => 120,  276 => 117,  274 => 116,  269 => 114,  266 => 113,  261 => 111,  254 => 107,  250 => 106,  243 => 102,  239 => 101,  235 => 100,  231 => 99,  227 => 98,  219 => 97,  215 => 96,  211 => 95,  207 => 94,  203 => 93,  193 => 91,  190 => 90,  187 => 89,  182 => 88,  179 => 87,  177 => 86,  174 => 85,  172 => 84,  155 => 69,  153 => 68,  146 => 63,  138 => 57,  136 => 56,  117 => 40,  114 => 39,  110 => 37,  106 => 35,  104 => 34,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  76 => 21,  62 => 10,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Ingreso Orden{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Ingreso Orden	*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('ordenes_ingreso_listado') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/* 	    <div class="box-content">*/
/* 	    	*/
/* 	    	<div class="box-header well">*/
/* 				<h2>Datos Orden</h2>*/
/* 				<div class="box-icon">*/
/* 					<a href="{{asset(ordenes.rutapdfcodes | slice (5))}}"  class="btn btn-info">*/
/* 						<i class="icon-barcode icon-white"></i>*/
/* 					</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
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
/* 					{% if ordenes.ordenesEstado.id==1 %}*/
/* 						<a href="">*/
/* 							<button class="btn btn-small btn-success" style="display: none;">*/
/* 								<i class="icon-plus icon-white"></i>*/
/* 							</button>*/
/* 						</a>*/
/* 					{% endif %}*/
/* 					Productos*/
/* 				</h2>*/
/* 			</div>	*/
/* */
/* */
/* 			{% if productos | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Referencia</th>*/
/* 						<th>Codigo de Barras</th>*/
/* 						<th>Codigo Incentives</th>*/
/* 						<th>Descripcion</th>*/
/* 						<th>Cantidad Solicitada</th>*/
/* 						<th>Valor unitario</th>*/
/* 						<th>Valor total</th>*/
/* 						<th>Cantidad Inventario</th>						*/
/* 						<th>Cantidad a Ingresar</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% set total=0 %}*/
/* 				<tbody>*/
/* 						{% set i=0 %}*/
/* 						{% set j=0 %}*/
/* 							{% for productoOrden in productos %}*/
/* 								{% set j=j+1 %}*/
/* 								{% set form1 = matriz[productoOrden.id] %}*/
/* 								<form action="{{ path("ordenes_procesarvalores") }}" method="POST" {{ form_enctype(form1) }} id="item{{ productoOrden.id }}" class="form-horizontal">*/
/* 									<tr>*/
/* 										<td>{{ productoOrden.producto.referencia }}</td>*/
/* 										<td>{{ productoOrden.producto.codEAN  }}</td>	*/
/* 										<td>{{ productoOrden.producto.codInc  }}</td>*/
/* 										<td>{{ productoOrden.producto.descripcion  }}</td>*/
/* 										<td>{{ productoOrden.cantidad  }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="{{ i }}" onClick="detalle('{{ j }}')" class="btn btn-success">+</a></td>*/
/* 										<td>{{ productoOrden.valorunidad  }}</td>*/
/* 										<td>{{ productoOrden.valortotal  }}</td>*/
/* 										<td>{{ productoOrden.cantidadrecibida }}</td>*/
/* 										{% if not is_granted('ROLE_BOD') %}	*/
/* 										<td>{{ form_widget(form1.cantidadrecibida) }}</td>*/
/* 										<td>*/
/* 											<div class="control-group">*/
/* 				                                <div class="controls">*/
/* 				                                    <input type="hidden" name="producto" value="{{ productoOrden.id }}"/>*/
/* 				                                    {{ form_widget(form1.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* 				                                </div>*/
/* 				                            </div>*/
/* 				                        </td>*/
/* 				                        <td id="resultado{{ productoOrden.id }}"></td>*/
/* 				                        {% endif %}*/
/* 		                            </tr>*/
/* 		                    	{{ form_widget(form1._token) }}*/
/* 								</form>*/
/* 								{% if (ordenes.ordenestipo.id == 2) %}*/
/* 								<tr id="detalle_{{ j }}" class="hide">*/
/* 									<td colspan="1"></td>*/
/* 									<td colspan="11">*/
/* 					                    <div>{{ render(controller('IncentivesOrdenesBundle:Ordenes:detalleIngreso', { 'productoOrden': productoOrden.id })) }}</div>*/
/* 					                </td>*/
/* 					            </tr>*/
/* 					            {% endif %}*/
/* 							{% endfor %}*/
/* 						{% set i=i+1 %}				*/
/* 				</tbody>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* */
/* 	<script>*/
/* 		function detalle(id){*/
/* 	        $('#detalle_'+id).toggle();*/
/* 	    }*/
/*     </script>*/
/* 	*/
/* {% endblock %}*/
