<?php

/* IncentivesFacturacionBundle:Facturas:pdf.html.twig */
class __TwigTemplate_2b61fb436552cfe63515f389b289df7f025c24881f8c2490b46ee35a346c18b3 extends Twig_Template
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
        $__internal_c4bc9f5fd5793e56d61204d026dd8dc657fd997caaf56399b5863dff988aa1b3 = $this->env->getExtension("native_profiler");
        $__internal_c4bc9f5fd5793e56d61204d026dd8dc657fd997caaf56399b5863dff988aa1b3->enter($__internal_c4bc9f5fd5793e56d61204d026dd8dc657fd997caaf56399b5863dff988aa1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:pdf.html.twig"));

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
<b>PRE-FACTURA GENERAL</b>
CÓDIGO: TOD-FOR-013
DDOCUMENTO VIGENTE A PARTIR DEL 05/05/2011
ÚLTIMA ACTUALIZACION 10/10/2011
VERSION 2
</pre>
<div class=\"marco\">
\t <div class=\"derecha\">Consecutivo No.: ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "numero", array()), "html", null, true);
        echo "</div>
\t \t<table class=\"tabla1\">
\t \t\t<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
\t \t\t<tr>
\t \t\t\t<td>Cliente:</td>
\t \t\t\t<td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td>Programa:</td>
\t \t\t\t<td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td>Centro de Costos:</td>
\t \t\t\t<td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "programa", array()), "centrocostos", array()), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td>Periodo:</td>
\t \t\t\t<td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "periodo", array()), "periodo", array()), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td>Fecha de reporte:</td>
\t \t\t\t<td>";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "fecha", array()), "d-M-Y"), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t</table>
\t \t<h2>CONCEPTO: PREMIOS CON LOGÍSTICA</h2>
\t \t<table class=\"tabla2\">
\t \t\t<tr>
\t \t\t\t<th>ID</th>
\t \t\t\t<th>CANTIDAD</th>
\t \t\t\t<th>DESCRIPCION</th>
\t \t\t\t<th>VALOR UNITARIO</th>
\t \t\t\t<th>PRECIO TOTAL</th>
\t \t\t</tr>
\t \t\t";
        // line 104
        $context["totalunidades"] = 0;
        // line 105
        echo "\t \t\t";
        $context["subtotal"] = 0;
        // line 106
        echo "\t \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 107
            echo "\t \t\t<tr>
\t \t\t\t<td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descripcion", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 111
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "valorunitario", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "valortotal", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t";
            // line 113
            $context["subtotal"] = ((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["item"], "valortotal", array()));
            // line 114
            echo "\t \t\t\t\t";
            $context["totalunidades"] = ((isset($context["totalunidades"]) ? $context["totalunidades"] : $this->getContext($context, "totalunidades")) + $this->getAttribute($context["item"], "cantidad", array()));
            // line 115
            echo "\t \t\t</tr>
\t \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t \t\t<tr>
\t \t\t\t<td>TOTAL</td>
\t \t\t\t<td>";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["totalunidades"]) ? $context["totalunidades"] : $this->getContext($context, "totalunidades")), "html", null, true);
        echo "</td>
\t \t\t\t<td></td>
\t \t\t\t<td></td>
\t \t\t\t<td></td>
\t \t\t</tr>
\t \t\t<tr class=\"total\">
\t \t\t\t<td colspan=\"3\" class=\"invisible\"></td>
\t \t\t\t<td>TOTAL A PAGAR</td>
\t \t\t\t<td>\$ ";
        // line 127
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t</table>
\t \t<br>
\t \t
\t \t<h2>CONCEPTO: LOGÍSTICA</h2>
\t \t<table class=\"tabla2\">
\t \t\t<tr>
\t \t\t\t<th>ID</th>
\t \t\t\t<th>CANTIDAD</th>
\t \t\t\t<th>DESCRIPCION</th>
\t \t\t\t<th>VALOR UNITARIO</th>
\t \t\t\t<th>VALOR TOTAL</th>
\t \t\t</tr>
\t \t\t";
        // line 141
        $context["totalunidades"] = 0;
        // line 142
        echo "\t \t\t";
        $context["subtotal"] = 0;
        // line 143
        echo "\t \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logistica"]) ? $context["logistica"] : $this->getContext($context, "logistica")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 144
            echo "\t \t\t<tr>
\t \t\t\t<td></td>
\t \t\t\t<td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descripcion", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 148
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "valorunitario", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 149
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "valortotal", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t";
            // line 150
            $context["subtotal"] = ((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["item"], "valortotal", array()));
            // line 151
            echo "\t \t\t</tr>
\t \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "\t \t\t<tr class=\"total\">
\t \t\t\t<td colspan=\"3\" class=\"invisible\"></td>
\t \t\t\t<td>GRAN TOTAL</td>
\t \t\t\t<td>\$ ";
        // line 156
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr><td colspan=\"5\">El precio NO incluye IVA</td></tr>
\t \t</table>


</div>
</body>

";
        
        $__internal_c4bc9f5fd5793e56d61204d026dd8dc657fd997caaf56399b5863dff988aa1b3->leave($__internal_c4bc9f5fd5793e56d61204d026dd8dc657fd997caaf56399b5863dff988aa1b3_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 156,  261 => 153,  254 => 151,  252 => 150,  248 => 149,  244 => 148,  240 => 147,  236 => 146,  232 => 144,  227 => 143,  224 => 142,  222 => 141,  205 => 127,  194 => 119,  190 => 117,  183 => 115,  180 => 114,  178 => 113,  174 => 112,  170 => 111,  166 => 110,  162 => 109,  158 => 108,  155 => 107,  150 => 106,  147 => 105,  145 => 104,  130 => 92,  123 => 88,  116 => 84,  109 => 80,  102 => 76,  94 => 71,  22 => 1,);
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
/* <b>PRE-FACTURA GENERAL</b>*/
/* CÓDIGO: TOD-FOR-013*/
/* DDOCUMENTO VIGENTE A PARTIR DEL 05/05/2011*/
/* ÚLTIMA ACTUALIZACION 10/10/2011*/
/* VERSION 2*/
/* </pre>*/
/* <div class="marco">*/
/* 	 <div class="derecha">Consecutivo No.: {{ factura.numero }}</div>*/
/* 	 	<table class="tabla1">*/
/* 	 		<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>*/
/* 	 		<tr>*/
/* 	 			<td>Cliente:</td>*/
/* 	 			<td>{{ factura.programa.cliente.nombre }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td>Programa:</td>*/
/* 	 			<td>{{ factura.programa.nombre }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td>Centro de Costos:</td>*/
/* 	 			<td>{{ factura.programa.centrocostos }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td>Periodo:</td>*/
/* 	 			<td>{{ factura.periodo.periodo }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td>Fecha de reporte:</td>*/
/* 	 			<td>{{ factura.fecha | date("d-M-Y") }}</td>*/
/* 	 		</tr>*/
/* 	 	</table>*/
/* 	 	<h2>CONCEPTO: PREMIOS CON LOGÍSTICA</h2>*/
/* 	 	<table class="tabla2">*/
/* 	 		<tr>*/
/* 	 			<th>ID</th>*/
/* 	 			<th>CANTIDAD</th>*/
/* 	 			<th>DESCRIPCION</th>*/
/* 	 			<th>VALOR UNITARIO</th>*/
/* 	 			<th>PRECIO TOTAL</th>*/
/* 	 		</tr>*/
/* 	 		{% set totalunidades=0 %}*/
/* 	 		{% set subtotal=0 %}*/
/* 	 		{% for item in productos %}*/
/* 	 		<tr>*/
/* 	 			<td>{{ item.producto.codInc }}</td>*/
/* 	 			<td>{{ item.cantidad }}</td>*/
/* 	 			<td>{{ item.descripcion }}</td>*/
/* 	 			<td>$ {{ item.valorunitario |number_format(2, ',', '.') }}</td>*/
/* 	 			<td>$ {{ item.valortotal |number_format(2, ',', '.') }}</td>*/
/* 	 			{% set subtotal = subtotal + item.valortotal %}*/
/* 	 				{% set totalunidades = totalunidades + item.cantidad %}*/
/* 	 		</tr>*/
/* 	 		{% endfor %}*/
/* 	 		<tr>*/
/* 	 			<td>TOTAL</td>*/
/* 	 			<td>{{ totalunidades }}</td>*/
/* 	 			<td></td>*/
/* 	 			<td></td>*/
/* 	 			<td></td>*/
/* 	 		</tr>*/
/* 	 		<tr class="total">*/
/* 	 			<td colspan="3" class="invisible"></td>*/
/* 	 			<td>TOTAL A PAGAR</td>*/
/* 	 			<td>$ {{ subtotal |number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 	</table>*/
/* 	 	<br>*/
/* 	 	*/
/* 	 	<h2>CONCEPTO: LOGÍSTICA</h2>*/
/* 	 	<table class="tabla2">*/
/* 	 		<tr>*/
/* 	 			<th>ID</th>*/
/* 	 			<th>CANTIDAD</th>*/
/* 	 			<th>DESCRIPCION</th>*/
/* 	 			<th>VALOR UNITARIO</th>*/
/* 	 			<th>VALOR TOTAL</th>*/
/* 	 		</tr>*/
/* 	 		{% set totalunidades=0 %}*/
/* 	 		{% set subtotal=0 %}*/
/* 	 		{% for item in logistica %}*/
/* 	 		<tr>*/
/* 	 			<td></td>*/
/* 	 			<td>{{ item.cantidad }}</td>*/
/* 	 			<td>{{ item.descripcion }}</td>*/
/* 	 			<td>$ {{ item.valorunitario|number_format(2, ',', '.')  }}</td>*/
/* 	 			<td>$ {{ item.valortotal|number_format(2, ',', '.')  }}</td>*/
/* 	 			{% set subtotal = subtotal + item.valortotal %}*/
/* 	 		</tr>*/
/* 	 		{% endfor %}*/
/* 	 		<tr class="total">*/
/* 	 			<td colspan="3" class="invisible"></td>*/
/* 	 			<td>GRAN TOTAL</td>*/
/* 	 			<td>$ {{ subtotal|number_format(2, ',', '.')  }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr><td colspan="5">El precio NO incluye IVA</td></tr>*/
/* 	 	</table>*/
/* */
/* */
/* </div>*/
/* </body>*/
/* */
/* */
