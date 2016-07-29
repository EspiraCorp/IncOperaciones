<?php

/* IncentivesOrdenesBundle:Ordenes:pdffinal.html.twig */
class __TwigTemplate_bc2fdb097d98964fb44e97696012cad48a89cb1c9c1ff1857a43c9503f754b78 extends Twig_Template
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
        $__internal_516c918756ac8066149978d0a9970392a45585cb7b7cd4a45f62fc2c3cfe713b = $this->env->getExtension("native_profiler");
        $__internal_516c918756ac8066149978d0a9970392a45585cb7b7cd4a45f62fc2c3cfe713b->enter($__internal_516c918756ac8066149978d0a9970392a45585cb7b7cd4a45f62fc2c3cfe713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:pdffinal.html.twig"));

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
<b>ORDEN DE COMPRA</b>
CÓDIGO: TOD-FOR-008
DOCUMENTO VIGENTE A PARTIR DEL 04/08/2015
VERSIÓN 3
</pre>
<div class=\"marco\">
\t <div class=\"derecha\">Consecutivo No.: ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "consecutivo", array()), "html", null, true);
        echo "</div>
\t \t<table class=\"tabla1\">
\t \t\t<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
\t \t\t<tr>
\t \t\t\t<td colspan=\"2\">Proveedor:</td>
\t \t\t\t<td colspan=\"3\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "proveedor", array()), "nombre", array()), "html", null, true);
        echo "</td>
\t \t\t\t<td></td>
\t \t\t\t<td colspan=\"2\">Fecha de solicitud:</td>
\t \t\t\t<td colspan=\"3\">";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "fechaCreacion", array()), "d-M-Y"), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td colspan=\"2\">Contacto:</td>
\t \t\t\t<td colspan=\"3\">";
        // line 82
        if ((null === (isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")))) {
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "nombres", array()), "html", null, true);
        }
        echo "</td>
\t \t\t\t<td></td>
\t \t\t\t<td colspan=\"2\">Fecha de entrega:</td>
\t \t\t\t<td colspan=\"3\"></td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td colspan=\"2\">Ciudad:</td>
\t \t\t\t<td colspan=\"3\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "proveedor", array()), "sedeprincipal", array()), "html", null, true);
        echo "</td>
\t \t\t\t<td></td>
\t \t\t\t<td colspan=\"2\">Forma de pago:</td>
\t \t\t\t<td colspan=\"3\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "proveedor", array()), "condicionescomerciales", array()), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr>
\t \t\t\t<td colspan=\"2\">Centro de Costo:</td>
\t \t\t\t<td colspan=\"3\"></td>
\t \t\t\t<td></td>
\t \t\t\t<td colspan=\"2\">Cancelado SI/NO:</td>
\t \t\t\t<td colspan=\"3\">";
        // line 99
        if (($this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "cancelado", array()) == 0)) {
            echo "NO";
        } else {
            echo "SI";
        }
        echo "</td>
\t \t\t</tr>
\t \t</table>
\t \t<table class=\"tabla2\">
\t \t\t<tr>
\t \t\t\t<th>REFERENCIA</th>
\t \t\t\t<th>ID</th>
\t \t\t\t<th>OC</th>
\t \t\t\t<th>CC</th>
\t \t\t\t<th>CANTIDAD</th>
\t \t\t\t<th>VALOR UNITARIO</th>
\t \t\t\t<th>DESCUENTO</th>
\t \t\t\t<th>VALOR TOTAL</th>
\t \t\t</tr>
\t \t\t";
        // line 113
        $context["linea"] = 0;
        // line 114
        echo "\t \t\t";
        $context["totalunidades"] = 0;
        // line 115
        echo "\t \t\t";
        $context["subtotal"] = 0;
        // line 116
        echo "\t \t\t";
        $context["totaliva"] = 0;
        // line 117
        echo "\t \t\t";
        $context["totalPago"] = 0;
        // line 118
        echo "\t \t\t";
        $context["descuento"] = 0;
        // line 119
        echo "\t \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 120
            echo "\t \t\t<tr>
\t \t\t\t<td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codEAN", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cc"]) ? $context["cc"] : $this->getContext($context, "cc")), $this->getAttribute($context["producto"], "id", array()), array(), "array"), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 127
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "valorunidad", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t<td>\$ ";
            // line 128
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "valortotal", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t\t";
            // line 129
            $context["totalunidades"] = ((isset($context["totalunidades"]) ? $context["totalunidades"] : $this->getContext($context, "totalunidades")) + $this->getAttribute($context["producto"], "cantidad", array()));
            // line 130
            echo "\t \t\t\t";
            $context["subtotal"] = ((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["producto"], "valortotal", array()));
            // line 131
            echo "\t \t\t\t";
            if (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estadoIva", array()) == 1)) {
                // line 132
                echo "\t \t\t\t\t";
                $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "iva", array()) / 100) * (($this->getAttribute($context["producto"], "valorunidad", array()) * $this->getAttribute($context["producto"], "cantidad", array())) - $this->getAttribute($context["producto"], "descuento", array()))));
                // line 133
                echo "\t \t\t\t";
            }
            // line 134
            echo "\t \t\t\t";
            $context["descuento"] = ((isset($context["descuento"]) ? $context["descuento"] : $this->getContext($context, "descuento")) + $this->getAttribute($context["producto"], "descuento", array()));
            // line 135
            echo "\t \t\t</tr>
\t \t\t\t";
            // line 136
            $context["linea"] = ((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")) + 1);
            // line 137
            echo "\t \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "
\t \t\t";
        // line 139
        $context["restantes"] = (9 - (isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")));
        // line 140
        echo "\t \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["restantes"]) ? $context["restantes"] : $this->getContext($context, "restantes"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 141
            echo "\t \t\t<tr>
\t \t\t\t<td>-</td>
\t \t\t\t<td></td>
\t \t\t\t<td></td>
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
        // line 152
        echo "\t \t\t";
        $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + ($this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "domicilio", array()) * 0.16));
        // line 153
        echo "\t \t\t";
        $context["totalPago"] = ((((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal"))) - (isset($context["descuento"]) ? $context["descuento"] : $this->getContext($context, "descuento"))) + $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "domicilio", array()));
        // line 154
        echo "\t \t\t<tr class=\"total\">
\t \t\t\t<td colspan=\"4\">TOTAL UNIDADES</td>
\t \t\t\t<td>";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["totalunidades"]) ? $context["totalunidades"] : $this->getContext($context, "totalunidades")), "html", null, true);
        echo "</td>
\t \t\t\t<td></td>
\t \t\t\t<td>SUBTOTAL</td>
\t \t\t\t<td>\$ ";
        // line 159
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr class=\"total\">
\t \t\t\t<td class=\"invisible\" colspan=\"6\" ></td>
\t \t\t\t<td>DESCUENTOS</td>
\t \t\t\t<td>\$ ";
        // line 164
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["descuento"]) ? $context["descuento"] : $this->getContext($context, "descuento")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr class=\"total\">
\t \t\t\t<td class=\"invisible\" colspan=\"6\" ></td>
\t \t\t\t<td>DOMICILIO</td>
\t \t\t\t<td>\$ ";
        // line 169
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "domicilio", array()), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t";
        // line 171
        if (($this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "comisionBancaria", array()) != 0)) {
            // line 172
            echo "\t \t\t<tr class=\"total\">
\t \t\t\t<td class=\"invisible\" colspan=\"7\" ></td>
\t \t\t\t<td>COMISION BANCARIA</td>
\t \t\t\t<td>\$ ";
            // line 175
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "comisionBancaria", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t</tr>
\t \t\t";
        }
        // line 178
        echo "\t \t\t";
        if (($this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "servicioLogistico", array()) != 0)) {
            // line 179
            echo "\t \t\t<tr class=\"total\">
\t \t\t\t<td class=\"invisible\" colspan=\"7\" ></td>
\t \t\t\t<td>SERVICIO LOGISTICO</td>
\t \t\t\t<td>\$ ";
            // line 182
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "servicioLogistico", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t \t\t</tr>
\t \t\t";
        }
        // line 185
        echo "\t \t\t<tr class=\"total\">
\t \t\t\t<td colspan=\"6\" class=\"invisible\"></td>
\t \t\t\t<td>IVA</td>
\t \t\t\t<td>\$ ";
        // line 188
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t\t<tr class=\"total\">
\t \t\t\t<td colspan=\"6\" class=\"invisible\"></td>
\t \t\t\t<td>TOTAL A PAGAR</td>
\t \t\t\t<td>\$ ";
        // line 193
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPago"]) ? $context["totalPago"] : $this->getContext($context, "totalPago")), 2, ",", "."), "html", null, true);
        echo "</td>
\t \t\t</tr>
\t \t</table>
\t \t<br>
\t \t<div class=\"marco\">
 \t\t\t";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "observaciones", array()), "html", null, true);
        echo "
 \t\t</div>
\t \t<br>
 \t\t<div class=\"marcoinverso\">
 \t\t\tI M P O R T A N T E :       Para radicar factura es INDISPENSABLE traer Factura Original con 2 copias para Incentives y Copia de la Orden de Compra
 \t\t</div>
 \t\t<div class=\"marco\">
 \t\t\tOBSERVACIONES: ENTREGAR EN INCLOGISTIC EN LA CARRERA 69 #75-63, TELEFONO 6054071 CONTACTO COMPRADORA RESPONSABLE DE LA ORDEN DE COMPRA,  RADICACION DE FACTURA ORIGINAL CON DOS COPIAS Y ADJUNTAR ORDEN DE COMPRA EN LA DIRECCION CARRERA 69 #75-63 - PERSONA CONTACTO RECEPCIONISTA. HORARIO DE RADICACION LUNES A VIERNES 8:00 am - 12:00 pm.
 \t\t</div>
 \t\t<br>
 \t\t<table class=\"tabla1\">
\t \t\t<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
\t \t\t<tr>
\t \t\t\t<td colspan=\"2\">Se pago la suma de:</td>
\t \t\t\t<td colspan=\"3\">____________</td>
\t \t\t\t<td></td>
\t \t\t\t<td colspan=\"2\">Firma quien Autoriza la Orden: </td>
\t \t\t\t<td colspan=\"3\"> ____________ </td>
\t \t\t</tr>
\t \t</table>
\t \t<pre>
<b>ENTREGA Y RADICACION DE FACTURA CON DOS COPIAS Y ADJUNTAR ORDEN DE COMPRA EN LA CARRERA 69 #75-63</b>
Incentives S.A.S
Nit. 830.133.132-6
CARRERA 69 #75-63
Tel. 6054071  
Bogotá - Colombia
\t \t</pre>

</div>
</body>

";
        
        $__internal_516c918756ac8066149978d0a9970392a45585cb7b7cd4a45f62fc2c3cfe713b->leave($__internal_516c918756ac8066149978d0a9970392a45585cb7b7cd4a45f62fc2c3cfe713b_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:pdffinal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 198,  352 => 193,  344 => 188,  339 => 185,  333 => 182,  328 => 179,  325 => 178,  319 => 175,  314 => 172,  312 => 171,  307 => 169,  299 => 164,  291 => 159,  285 => 156,  281 => 154,  278 => 153,  275 => 152,  259 => 141,  254 => 140,  252 => 139,  249 => 138,  243 => 137,  241 => 136,  238 => 135,  235 => 134,  232 => 133,  229 => 132,  226 => 131,  223 => 130,  221 => 129,  217 => 128,  213 => 127,  209 => 126,  205 => 125,  201 => 124,  197 => 123,  193 => 122,  189 => 121,  186 => 120,  181 => 119,  178 => 118,  175 => 117,  172 => 116,  169 => 115,  166 => 114,  164 => 113,  143 => 99,  133 => 92,  127 => 89,  114 => 82,  107 => 78,  101 => 75,  93 => 70,  22 => 1,);
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
/* <b>ORDEN DE COMPRA</b>*/
/* CÓDIGO: TOD-FOR-008*/
/* DOCUMENTO VIGENTE A PARTIR DEL 04/08/2015*/
/* VERSIÓN 3*/
/* </pre>*/
/* <div class="marco">*/
/* 	 <div class="derecha">Consecutivo No.: {{ orden.consecutivo }}</div>*/
/* 	 	<table class="tabla1">*/
/* 	 		<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>*/
/* 	 		<tr>*/
/* 	 			<td colspan="2">Proveedor:</td>*/
/* 	 			<td colspan="3">{{ orden.proveedor.nombre }}</td>*/
/* 	 			<td></td>*/
/* 	 			<td colspan="2">Fecha de solicitud:</td>*/
/* 	 			<td colspan="3">{{ orden.fechaCreacion | date("d-M-Y") }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td colspan="2">Contacto:</td>*/
/* 	 			<td colspan="3">{% if contacto is null %}{% else %}{{ contacto.nombres }}{% endif %}</td>*/
/* 	 			<td></td>*/
/* 	 			<td colspan="2">Fecha de entrega:</td>*/
/* 	 			<td colspan="3"></td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td colspan="2">Ciudad:</td>*/
/* 	 			<td colspan="3">{{ orden.proveedor.sedeprincipal }}</td>*/
/* 	 			<td></td>*/
/* 	 			<td colspan="2">Forma de pago:</td>*/
/* 	 			<td colspan="3">{{ orden.proveedor.condicionescomerciales }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr>*/
/* 	 			<td colspan="2">Centro de Costo:</td>*/
/* 	 			<td colspan="3"></td>*/
/* 	 			<td></td>*/
/* 	 			<td colspan="2">Cancelado SI/NO:</td>*/
/* 	 			<td colspan="3">{% if (orden.cancelado==0) %}NO{% else %}SI{% endif %}</td>*/
/* 	 		</tr>*/
/* 	 	</table>*/
/* 	 	<table class="tabla2">*/
/* 	 		<tr>*/
/* 	 			<th>REFERENCIA</th>*/
/* 	 			<th>ID</th>*/
/* 	 			<th>OC</th>*/
/* 	 			<th>CC</th>*/
/* 	 			<th>CANTIDAD</th>*/
/* 	 			<th>VALOR UNITARIO</th>*/
/* 	 			<th>DESCUENTO</th>*/
/* 	 			<th>VALOR TOTAL</th>*/
/* 	 		</tr>*/
/* 	 		{% set linea = 0 %}*/
/* 	 		{% set totalunidades = 0 %}*/
/* 	 		{% set subtotal = 0 %}*/
/* 	 		{% set totaliva = 0 %}*/
/* 	 		{% set totalPago = 0 %}*/
/* 	 		{% set descuento = 0 %}*/
/* 	 		{% for producto in productos %}*/
/* 	 		<tr>*/
/* 	 			<td>{{ producto.producto.referencia }}</td>*/
/* 	 			<td>{{ producto.producto.codInc }}</td>*/
/* 	 			<td>{{ producto.producto.codEAN }}</td>*/
/* 	 			<td>{{ cc[producto.id] }}</td>*/
/* 	 			<td>{{ producto.producto.nombre }}</td>*/
/* 	 			<td>{{ producto.cantidad }}</td>*/
/* 	 			<td>$ {{ producto.valorunidad|number_format(2, ',', '.') }}</td>*/
/* 	 			<td>$ {{ producto.valortotal|number_format(2, ',', '.') }}</td>*/
/* 	 			{% set totalunidades = totalunidades + producto.cantidad %}*/
/* 	 			{% set subtotal = subtotal + producto.valortotal %}*/
/* 	 			{% if(producto.producto.estadoIva==1) %}*/
/* 	 				{% set totaliva = totaliva + (producto.producto.iva/100)*(producto.valorunidad*producto.cantidad - producto.descuento) %}*/
/* 	 			{% endif %}*/
/* 	 			{% set descuento = descuento + producto.descuento %}*/
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
/* 	 			<td></td>*/
/* 	 			<td></td>*/
/* 	 			<td> </td>*/
/* 	 		</tr>*/
/* 	 		{% endfor %}*/
/* 	 		{% set totaliva = totaliva + (orden.domicilio * 0.16) %}*/
/* 	 		{% set totalPago = totaliva + subtotal - descuento + orden.domicilio %}*/
/* 	 		<tr class="total">*/
/* 	 			<td colspan="4">TOTAL UNIDADES</td>*/
/* 	 			<td>{{ totalunidades }}</td>*/
/* 	 			<td></td>*/
/* 	 			<td>SUBTOTAL</td>*/
/* 	 			<td>$ {{ subtotal|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr class="total">*/
/* 	 			<td class="invisible" colspan="6" ></td>*/
/* 	 			<td>DESCUENTOS</td>*/
/* 	 			<td>$ {{ descuento|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr class="total">*/
/* 	 			<td class="invisible" colspan="6" ></td>*/
/* 	 			<td>DOMICILIO</td>*/
/* 	 			<td>$ {{ orden.domicilio|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		{% if(orden.comisionBancaria!=0) %}*/
/* 	 		<tr class="total">*/
/* 	 			<td class="invisible" colspan="7" ></td>*/
/* 	 			<td>COMISION BANCARIA</td>*/
/* 	 			<td>$ {{ orden.comisionBancaria|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		{% endif %}*/
/* 	 		{% if(orden.servicioLogistico!=0) %}*/
/* 	 		<tr class="total">*/
/* 	 			<td class="invisible" colspan="7" ></td>*/
/* 	 			<td>SERVICIO LOGISTICO</td>*/
/* 	 			<td>$ {{ orden.servicioLogistico|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		{% endif %}*/
/* 	 		<tr class="total">*/
/* 	 			<td colspan="6" class="invisible"></td>*/
/* 	 			<td>IVA</td>*/
/* 	 			<td>$ {{ totaliva|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 		<tr class="total">*/
/* 	 			<td colspan="6" class="invisible"></td>*/
/* 	 			<td>TOTAL A PAGAR</td>*/
/* 	 			<td>$ {{ totalPago|number_format(2, ',', '.') }}</td>*/
/* 	 		</tr>*/
/* 	 	</table>*/
/* 	 	<br>*/
/* 	 	<div class="marco">*/
/*  			{{ orden.observaciones }}*/
/*  		</div>*/
/* 	 	<br>*/
/*  		<div class="marcoinverso">*/
/*  			I M P O R T A N T E :       Para radicar factura es INDISPENSABLE traer Factura Original con 2 copias para Incentives y Copia de la Orden de Compra*/
/*  		</div>*/
/*  		<div class="marco">*/
/*  			OBSERVACIONES: ENTREGAR EN INCLOGISTIC EN LA CARRERA 69 #75-63, TELEFONO 6054071 CONTACTO COMPRADORA RESPONSABLE DE LA ORDEN DE COMPRA,  RADICACION DE FACTURA ORIGINAL CON DOS COPIAS Y ADJUNTAR ORDEN DE COMPRA EN LA DIRECCION CARRERA 69 #75-63 - PERSONA CONTACTO RECEPCIONISTA. HORARIO DE RADICACION LUNES A VIERNES 8:00 am - 12:00 pm.*/
/*  		</div>*/
/*  		<br>*/
/*  		<table class="tabla1">*/
/* 	 		<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>*/
/* 	 		<tr>*/
/* 	 			<td colspan="2">Se pago la suma de:</td>*/
/* 	 			<td colspan="3">____________</td>*/
/* 	 			<td></td>*/
/* 	 			<td colspan="2">Firma quien Autoriza la Orden: </td>*/
/* 	 			<td colspan="3"> ____________ </td>*/
/* 	 		</tr>*/
/* 	 	</table>*/
/* 	 	<pre>*/
/* <b>ENTREGA Y RADICACION DE FACTURA CON DOS COPIAS Y ADJUNTAR ORDEN DE COMPRA EN LA CARRERA 69 #75-63</b>*/
/* Incentives S.A.S*/
/* Nit. 830.133.132-6*/
/* CARRERA 69 #75-63*/
/* Tel. 6054071  */
/* Bogotá - Colombia*/
/* 	 	</pre>*/
/* */
/* </div>*/
/* </body>*/
/* */
/* */
