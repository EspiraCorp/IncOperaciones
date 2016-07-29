<?php

/* IncentivesInventarioBundle:Inventario:planilla.html.twig */
class __TwigTemplate_ce1ddbf7c477389ad04599be152b5d4cd2be3b30beeb59f398820922e817892b extends Twig_Template
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
        $__internal_5cf2d0b660df7a84bbff13b7447e179d1222a047ae0b46ee45f522474f5d87b5 = $this->env->getExtension("native_profiler");
        $__internal_5cf2d0b660df7a84bbff13b7447e179d1222a047ae0b46ee45f522474f5d87b5->enter($__internal_5cf2d0b660df7a84bbff13b7447e179d1222a047ae0b46ee45f522474f5d87b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:planilla.html.twig"));

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
<b>Planilla de inventario</b>
Asignaciones del ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "Y-m-d"), "html", null, true);
        echo "
</pre>
<div class=\"marco\">
\t<table>
\t\t<tr>
\t\t\t<th>Producto</th>
\t\t\t<th>Codigo EAN</th>
\t\t\t<th>Marca</th>
\t\t\t<th>Programa</th>
\t\t\t<th>Participante</th>
\t\t\t<th>Documento</th>
\t\t\t<th>Direccion</th>
\t\t</tr>
";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")));
        foreach ($context['_seq'] as $context["_key"] => $context["inventarios"]) {
            // line 79
            echo "\t";
            if (((twig_date_format_filter($this->env, twig_date_converter($this->env, $this->getAttribute($context["inventarios"], "fechaSalida", array())), "m/d/Y") >= twig_date_format_filter($this->env, twig_date_converter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), "m/d/Y")) && (twig_date_format_filter($this->env, twig_date_converter($this->env, $this->getAttribute($context["inventarios"], "fechaSalida", array())), "m/d/Y") < twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_converter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), "+1 day"), "m/d/Y")))) {
                // line 80
                echo "\t\t<tr>
\t\t\t<td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventarios"], "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventarios"], "producto", array()), "codEAN", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventarios"], "producto", array()), "marca", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["inventarios"], "redencion", array()), "productocatalogo", array()), "catalogos", array()), "programa", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inventarios"], "redencion", array()), "participante", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["inventarios"], "redencion", array()), "participante", array()), "tipodocumento", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inventarios"], "redencion", array()), "participante", array()), "documento", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inventarios"], "redencion", array()), "participante", array()), "direccion", array()), "html", null, true);
                echo "</td>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inventarios'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "</div>
</body>

";
        
        $__internal_5cf2d0b660df7a84bbff13b7447e179d1222a047ae0b46ee45f522474f5d87b5->leave($__internal_5cf2d0b660df7a84bbff13b7447e179d1222a047ae0b46ee45f522474f5d87b5_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:planilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 90,  140 => 87,  134 => 86,  130 => 85,  126 => 84,  122 => 83,  118 => 82,  114 => 81,  111 => 80,  108 => 79,  104 => 78,  88 => 65,  22 => 1,);
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
/* <b>Planilla de inventario</b>*/
/* Asignaciones del {{ fecha | date("Y-m-d") }}*/
/* </pre>*/
/* <div class="marco">*/
/* 	<table>*/
/* 		<tr>*/
/* 			<th>Producto</th>*/
/* 			<th>Codigo EAN</th>*/
/* 			<th>Marca</th>*/
/* 			<th>Programa</th>*/
/* 			<th>Participante</th>*/
/* 			<th>Documento</th>*/
/* 			<th>Direccion</th>*/
/* 		</tr>*/
/* {% for inventarios in inventario %}*/
/* 	{% if (date(inventarios.fechaSalida)|date("m/d/Y") >= date(fecha)|date("m/d/Y") and date(inventarios.fechaSalida)|date("m/d/Y") < date(fecha)|date_modify("+1 day")|date("m/d/Y")) %}*/
/* 		<tr>*/
/* 			<td>{{ inventarios.producto.nombre }}</td>*/
/* 			<td>{{ inventarios.producto.codEAN }}</td>*/
/* 			<td>{{ inventarios.producto.marca }}</td>*/
/* 			<td>{{ inventarios.redencion.productocatalogo.catalogos.programa.nombre }}</td>*/
/* 			<td>{{ inventarios.redencion.participante.nombre }}</td>*/
/* 			<td>{{ inventarios.redencion.participante.tipodocumento.nombre }} {{ inventarios.redencion.participante.documento }}</td>*/
/* 			<td>{{ inventarios.redencion.participante.direccion }}</td>*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* </div>*/
/* </body>*/
/* */
/* */
