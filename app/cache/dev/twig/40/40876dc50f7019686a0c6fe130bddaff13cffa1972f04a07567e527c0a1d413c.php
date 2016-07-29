<?php

/* IncentivesSolicitudesBundle:Requisiciones:pdf.html.twig */
class __TwigTemplate_bde82ebdfd3e07fe0c8f4f45230d79dbbc872a1464797173a4edee8ce34ae766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22cb3220c90e2bac970b229021c194e80fa6c273d5e859007fd33379f5669760 = $this->env->getExtension("native_profiler");
        $__internal_22cb3220c90e2bac970b229021c194e80fa6c273d5e859007fd33379f5669760->enter($__internal_22cb3220c90e2bac970b229021c194e80fa6c273d5e859007fd33379f5669760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Requisiciones:pdf.html.twig"));

        // line 1
        echo "<style>
body {
\tfont: 10pt Verdana;
}
.marco {
  border-width:1px;
  border-style:solid;
  border-color:#000000;
  padding:10px 50px;
}
.marcoinverso {
\tbackground-color:#000;
\tpadding:10px 50px;
\tcolor:#fff;
}
pre {
\tfont: 9pt Verdana;
  text-align:center;
}
.derecha {
  text-align:right;
}
.tabla1{
\tmargin: 10px;
\twidth:100%;
\tpadding: .5em;
}
.tabla2{
\tborder-collapse: collapse;
\twidth:100%;
\tborder: 1px solid #000;
}
.tabla2 td{
\tfont: 8pt Verdana;
  text-align:center;
  border: 1px solid #000;
}
.total{
\tfont: bold 11pt Verdana;
\tbackground-color:#ccc;
}
.invisible{
\tborder: 0px;
\tbackground-color:#fff;
}
th{
\tfont: bold 11pt Verdana;
  text-align:center;
  background-color:#ffcc00;
  border: 1px solid #000;
}
#columna1 {
  width:200px;
}
#columna2 { 
  margin-left:220px;
  margin-right:20px;
  margin-top:10px;  
  background-color:#ffffbb;
}
</style>
<body>
<pre class=\"marco\">
<b>COTIZACIÓN</b>\t\t\t\t\t\t
CÓDIGO: OPE-FOR-003\t\t\t\t\t\t
DOCUMENTO VIGENTE A PARTIR DEL 01/02/2011\t\t\t\t\t\t
VERSIÓN 2\t\t\t\t\t\t
</pre>
<div class=\"marco\">
\t <div class=\"derecha\">Consecutivo No.: ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "consecutivo", array()), "html", null, true);
        echo "</div>
\t \t<table class=\"tabla1\">
\t \t\t<tr><td></td><td>
\t \t\t<tr>
\t \t\t\t<td>Fecha de cotización:</td>
\t \t\t\t<td>";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "fechaCreacion", array()), "d-M-Y"), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td>Cotización vigente hasta el:</td>
\t \t\t\t<td>";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "fechaVencimiento", array()), "d-M-Y"), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td>A continuación presento propuesta según especificaciones requeridas, así:</td>
\t \t\t\t<td></td>
\t \t\t</tr>
\t \t\tCotización vigente hasta el:
\t \t\t
\t \t</table>
\t \t<table class=\"tabla2\">
\t \t\t<tr>
\t \t\t\t<th>PRODUCTO</th>
\t \t\t\t<th>DESCRIPCION</th>
\t \t\t\t<th>CANTIDAD</th>
\t \t\t\t<th>VALOR UNITARIO</th>
\t \t\t\t<th>LOGISTICA INDIVIDUAL</th>
\t \t\t\t<th>VALOR TOTAL</th>
\t \t\t</tr>
\t \t\t";
        // line 97
        $context["linea"] = 0;
        // line 98
        echo "\t \t\t";
        $context["totalunidades"] = 0;
        // line 99
        echo "\t \t\t";
        $context["subtotal"] = 0;
        // line 100
        echo "\t \t\t";
        $context["totaliva"] = 0;
        // line 101
        echo "\t \t\t";
        $context["totalPago"] = 0;
        // line 102
        echo "\t \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 103
            echo "\t \t\t<tr>
\t \t\t\t<td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "descripcion", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valorunidad", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100))), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 108
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "logistica", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 109
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valortotal", array()) + ($this->getAttribute($context["producto"], "logistica", array()) * $this->getAttribute($context["producto"], "cantidad", array()))), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t";
            // line 110
            $context["totalunidades"] = ((isset($context["totalunidades"]) ? $context["totalunidades"] : $this->getContext($context, "totalunidades")) + $this->getAttribute($context["producto"], "cantidad", array()));
            // line 111
            echo "\t \t\t\t";
            $context["subtotal"] = (((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["producto"], "valortotal", array())) + ($this->getAttribute($context["producto"], "logistica", array()) * $this->getAttribute($context["producto"], "cantidad", array())));
            // line 112
            echo "\t \t\t\t";
            if (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estadoIva", array()) == 1)) {
                // line 113
                echo "\t \t\t\t\t";
                $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "iva", array()) / 100) * $this->getAttribute($context["producto"], "valortotal", array())));
                // line 114
                echo "\t \t\t\t";
            }
            // line 115
            echo "\t \t\t</tr>
\t \t\t\t";
            // line 116
            $context["linea"] = ((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")) + 1);
            // line 117
            echo "\t \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
\t \t\t";
        // line 119
        $context["restantes"] = (9 - (isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")));
        // line 120
        echo "\t \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["restantes"]) ? $context["restantes"] : $this->getContext($context, "restantes"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 121
            echo "\t \t\t<tr>
\t \t\t\t<td>-</td>
\t \t\t\t<td></td>
\t \t\t\t<td></td>
\t \t\t\t<td></td>
\t \t\t\t<td></td>
\t \t\t\t<td> </td>
\t \t\t</tr>
\t \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "\t \t\t";
        $context["totaliva"] = (isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva"));
        // line 131
        echo "\t \t\t";
        $context["totalPago"] = (((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal"))) + $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "logistica", array()));
        // line 132
        echo "\t \t\t<tr class=\"total\">
\t \t\t\t<td colspan=\"2\">TOTAL UNIDADES</td>
\t \t\t\t<td>";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["totalunidades"]) ? $context["totalunidades"] : $this->getContext($context, "totalunidades")), "html", null, true);
        echo "</td>
\t \t\t\t<td></td>
\t \t\t\t<td>SUBTOTAL</td>
\t \t\t\t<td>\$ ";
        // line 137
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t
\t \t\t<tr class=\"total\">
\t \t\t\t<td class=\"invisible\" colspan=\"4\" ></td>
\t \t\t\t<td>LOGISTICA CONSOLIDADA</td>
\t \t\t\t<td>\$ ";
        // line 143
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "logistica", array()), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr class=\"total\">
\t \t\t\t<td colspan=\"4\" class=\"invisible\"></td>
\t \t\t\t<td>IVA</td>
\t \t\t\t<td>\$ ";
        // line 148
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr class=\"total\">
\t \t\t\t<td colspan=\"4\" class=\"invisible\"></td>
\t \t\t\t<td>TOTAL</td>
\t \t\t\t<td>\$ ";
        // line 153
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPago"]) ? $context["totalPago"] : $this->getContext($context, "totalPago")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t</table>
\t \t<br>
\t \t<div class=\"marco\">
\t \t\t<b>OBSERVACIONES:</b>
 \t\t\t";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "observaciones", array()), "html", null, true);
        echo "
 \t\t</div>
 \t\t<div class=\"marco\">
 \t\t\t<b>CONDICIONES COMERCIALES:</b>
 \t\t\t";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "condiciones", array()), "html", null, true);
        echo "
 \t\t</div>
\t \t<br>
 </div>
</body>


";
        
        $__internal_22cb3220c90e2bac970b229021c194e80fa6c273d5e859007fd33379f5669760->leave($__internal_22cb3220c90e2bac970b229021c194e80fa6c273d5e859007fd33379f5669760_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Requisiciones:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 163,  274 => 159,  265 => 153,  257 => 148,  249 => 143,  240 => 137,  234 => 134,  230 => 132,  227 => 131,  224 => 130,  210 => 121,  205 => 120,  203 => 119,  200 => 118,  194 => 117,  192 => 116,  189 => 115,  186 => 114,  183 => 113,  180 => 112,  177 => 111,  175 => 110,  171 => 109,  167 => 108,  163 => 107,  159 => 106,  155 => 105,  151 => 104,  148 => 103,  143 => 102,  140 => 101,  137 => 100,  134 => 99,  131 => 98,  129 => 97,  108 => 79,  101 => 75,  93 => 70,  22 => 1,);
    }
}
/* <style>*/
/* body {*/
/* 	font: 10pt Verdana;*/
/* }*/
/* .marco {*/
/*   border-width:1px;*/
/*   border-style:solid;*/
/*   border-color:#000000;*/
/*   padding:10px 50px;*/
/* }*/
/* .marcoinverso {*/
/* 	background-color:#000;*/
/* 	padding:10px 50px;*/
/* 	color:#fff;*/
/* }*/
/* pre {*/
/* 	font: 9pt Verdana;*/
/*   text-align:center;*/
/* }*/
/* .derecha {*/
/*   text-align:right;*/
/* }*/
/* .tabla1{*/
/* 	margin: 10px;*/
/* 	width:100%;*/
/* 	padding: .5em;*/
/* }*/
/* .tabla2{*/
/* 	border-collapse: collapse;*/
/* 	width:100%;*/
/* 	border: 1px solid #000;*/
/* }*/
/* .tabla2 td{*/
/* 	font: 8pt Verdana;*/
/*   text-align:center;*/
/*   border: 1px solid #000;*/
/* }*/
/* .total{*/
/* 	font: bold 11pt Verdana;*/
/* 	background-color:#ccc;*/
/* }*/
/* .invisible{*/
/* 	border: 0px;*/
/* 	background-color:#fff;*/
/* }*/
/* th{*/
/* 	font: bold 11pt Verdana;*/
/*   text-align:center;*/
/*   background-color:#ffcc00;*/
/*   border: 1px solid #000;*/
/* }*/
/* #columna1 {*/
/*   width:200px;*/
/* }*/
/* #columna2 { */
/*   margin-left:220px;*/
/*   margin-right:20px;*/
/*   margin-top:10px;  */
/*   background-color:#ffffbb;*/
/* }*/
/* </style>*/
/* <body>*/
/* <pre class="marco">*/
/* <b>COTIZACIÓN</b>						*/
/* CÓDIGO: OPE-FOR-003						*/
/* DOCUMENTO VIGENTE A PARTIR DEL 01/02/2011						*/
/* VERSIÓN 2						*/
/* </pre>*/
/* <div class="marco">*/
/* 	 <div class="derecha">Consecutivo No.: {{ cotizacion.consecutivo }}</div>*/
/* 	 	<table class="tabla1">*/
/* 	 		<tr><td></td><td>*/
/* 	 		<tr>*/
/* 	 			<td>Fecha de cotización:</td>*/
/* 	 			<td>{{ cotizacion.fechaCreacion | date("d-M-Y") }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td>Cotización vigente hasta el:</td>*/
/* 	 			<td>{{ cotizacion.fechaVencimiento | date("d-M-Y") }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td>A continuación presento propuesta según especificaciones requeridas, así:</td>*/
/* 	 			<td></td>*/
/* 	 		</tr>*/
/* 	 		Cotización vigente hasta el:*/
/* 	 		*/
/* 	 	</table>*/
/* 	 	<table class="tabla2">*/
/* 	 		<tr>*/
/* 	 			<th>PRODUCTO</th>*/
/* 	 			<th>DESCRIPCION</th>*/
/* 	 			<th>CANTIDAD</th>*/
/* 	 			<th>VALOR UNITARIO</th>*/
/* 	 			<th>LOGISTICA INDIVIDUAL</th>*/
/* 	 			<th>VALOR TOTAL</th>*/
/* 	 		</tr>*/
/* 	 		{% set linea = 0 %}*/
/* 	 		{% set totalunidades = 0 %}*/
/* 	 		{% set subtotal = 0 %}*/
/* 	 		{% set totaliva = 0 %}*/
/* 	 		{% set totalPago = 0 %}*/
/* 	 		{% for producto in productos %}*/
/* 	 		<tr>*/
/* 	 			<td>{{ producto.producto.nombre }}</td>*/
/* 	 			<td>{{ producto.producto.descripcion }}</td>*/
/* 	 			<td>{{ producto.cantidad }}</td>*/
/* 	 			<td>$ {{ (producto.valorunidad/(1 - (producto.incremento/100)))|number_format(2, ',', '.') }}</td>*/
/* 	 			<td>$ {{ producto.logistica|number_format(2, ',', '.') }}</td>*/
/* 	 			<td>$ {{ (producto.valortotal+(producto.logistica*producto.cantidad))|number_format(2, ',', '.') }}</td>*/
/* 	 			{% set totalunidades = totalunidades + producto.cantidad %}*/
/* 	 			{% set subtotal = subtotal + producto.valortotal+(producto.logistica*producto.cantidad) %}*/
/* 	 			{% if(producto.producto.estadoIva==1) %}*/
/* 	 				{% set totaliva = totaliva + (producto.producto.iva/100)*producto.valortotal %}*/
/* 	 			{% endif %}*/
/* 	 		</tr>*/
/* 	 			{% set linea = linea + 1 %}*/
/* 	 		{% endfor %}*/
/* */
/* 	 		{% set restantes = 9 - linea %}*/
/* 	 		{% for i in range(1, restantes) %}*/
/* 	 		<tr>*/
/* 	 			<td>-</td>*/
/* 	 			<td></td>*/
/* 	 			<td></td>*/
/* 	 			<td></td>*/
/* 	 			<td></td>*/
/* 	 			<td> </td>*/
/* 	 		</tr>*/
/* 	 		{% endfor %}*/
/* 	 		{% set totaliva = totaliva %}*/
/* 	 		{% set totalPago = totaliva + subtotal + cotizacion.logistica %}*/
/* 	 		<tr class="total">*/
/* 	 			<td colspan="2">TOTAL UNIDADES</td>*/
/* 	 			<td>{{ totalunidades }}</td>*/
/* 	 			<td></td>*/
/* 	 			<td>SUBTOTAL</td>*/
/* 	 			<td>$ {{ subtotal|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		*/
/* 	 		<tr class="total">*/
/* 	 			<td class="invisible" colspan="4" ></td>*/
/* 	 			<td>LOGISTICA CONSOLIDADA</td>*/
/* 	 			<td>$ {{ cotizacion.logistica|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr class="total">*/
/* 	 			<td colspan="4" class="invisible"></td>*/
/* 	 			<td>IVA</td>*/
/* 	 			<td>$ {{ totaliva|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr class="total">*/
/* 	 			<td colspan="4" class="invisible"></td>*/
/* 	 			<td>TOTAL</td>*/
/* 	 			<td>$ {{ totalPago|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 	</table>*/
/* 	 	<br>*/
/* 	 	<div class="marco">*/
/* 	 		<b>OBSERVACIONES:</b>*/
/*  			{{ cotizacion.observaciones }}*/
/*  		</div>*/
/*  		<div class="marco">*/
/*  			<b>CONDICIONES COMERCIALES:</b>*/
/*  			{{ cotizacion.condiciones }}*/
/*  		</div>*/
/* 	 	<br>*/
/*  </div>*/
/* </body>*/
/* */
/* */
/* */
