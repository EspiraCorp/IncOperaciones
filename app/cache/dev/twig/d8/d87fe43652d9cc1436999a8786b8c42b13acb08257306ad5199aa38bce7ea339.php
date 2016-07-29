<?php

/* IncentivesOperacionesBundle:Calificacion:pdf.html.twig */
class __TwigTemplate_0ebfdf9a8722da9b6326152dd6a12f1ed74054f2271ec0d08ccb83dfa4c6c27d extends Twig_Template
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
        $__internal_a976a526725a5c6fde02ee2d780050907865812b319a38cce98d81813cdb6237 = $this->env->getExtension("native_profiler");
        $__internal_a976a526725a5c6fde02ee2d780050907865812b319a38cce98d81813cdb6237->enter($__internal_a976a526725a5c6fde02ee2d780050907865812b319a38cce98d81813cdb6237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Calificacion:pdf.html.twig"));

        // line 1
        echo "<style>
body {
    font: 10pt Verdana;
}
.marco {
  border-width:1px;
  border-style:solid;
  border-color:#000000;
  padding:10px 50px;
}
.marcoinverso {
    background-color:#000;
    padding:10px 50px;
    color:#fff;
}
pre {
    font: 9pt Verdana;
  text-align:center;
}
.derecha {
  text-align:right;
}
.tabla1{
    margin: 10px;
    width:100%;
    padding: .5em;
    border: 1px solid #000;
}
.tabla2{
    border-collapse: collapse;
    width:100%;
    border: 1px solid #000;
}
.tabla2 td{
    font: 8pt Verdana;
  text-align:center;
  border: 1px solid #000;
}
.total{
    font: bold 11pt Verdana;
    background-color:#ccc;
}
.invisible{
    border: 0px;
    background-color:#fff;
}
th{
    font: bold 11pt Verdana;
  text-align:center;
  background-color:#ffcc00;
  border: 1px solid #000;
}

td{
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

<div class=\"marco\">
<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Calificacion Proveedor</h2>
                    </div>
<div class=\"box-content\">
    <fieldset>
    <table class=\"table table-bordered table-striped\">
        <tbody>
            <tr><th colspan=\"6\">INFORMACIÓN GENERAL DEL PROVEEDOR</th></tr>
            <tr><td>Razon Social Proveedor</td><td colspan=\"5\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Direccion</td><td colspan=\"5\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "direccion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Telefono</td><td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "telefono", array()), "html", null, true);
        echo "</td>
                <td>E-mail</td><td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "correo", array()), "html", null, true);
        echo "</td>
                <td>Fax</td><td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "fax", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Documento</td><td colspan=\"5\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "numero_documento", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Fecha</td><td colspan=\"5\">";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
        </tbody>
    </table>
    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr><th colspan=\"7\">EVALUACIÓN DEL PROVEEDOR (BIENES Y/O SERVICIOS)</th></tr>
            <tr><td colspan=\"4\">A. ELEGIBILIDAD TÉCNICA (ETC) (corresponde al 40%)</td>
                <td>PUNTAJE</td>
                <td>RESULTADO</td>
            </tr>
        </thead>
        <tbody>
            <tr><th>1. CE =</th>
                <td colspan=\"3\">Cumplimiento en las Entregas  (oportunidad en los tiempos de respuesta, documentación y/o bienes requeridos)</td>
                <td><div class=\"ind\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "ce", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-1\">";
        // line 101
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "ce", array()) / 10), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th>2. CPI =</th>
                <td colspan=\"3\">Calidad del Producto, insumos, materiales o Servicio</td>
                <td><div class=\"ind\">";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cpi", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-2\">";
        // line 108
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cpi", array()) / 10), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th>3. BEP =</th>
                <td colspan=\"3\">Bienes y servicios ejecutados conforme a lo pactado (cumplimiento de criterios especificados en orden de compra de bienes y servicios)</td>
                <td><div class=\"ind\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "bep", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-3\">";
        // line 115
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "bep", array()) / 10), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th>4. PD =</th>
                <td colspan=\"3\">\"Productos con Devoluciones o defectos, servicios no conformes. El proveedor ha presentado productos/servicios no conformes\"</td>
                <td><div class=\"ind\">";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "pd", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-4\">";
        // line 122
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "pd", array()) / 10), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th colspan=\"5\">ETC = 15(CE+CPI+DPI+BEP+EX+PD)</th>
                <td>
                    <b><div id=\"resultado-7\">";
        // line 127
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "ce", array()) + $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cpi", array())) + $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "bep", array())) + $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "pd", array())) * 2), "html", null, true);
        echo "</div></b>
                </td>
            </tr>
        </tbody>
        <thead> 
            <tr><td colspan=\"4\">B. ELEGIBILIDAD COMERCIAL Y FINANCIERA (ECF) corresponde al 60%</td>
                <td>PUNTAJE</td>
                <td>RESULTADO</td>
            </tr>
        </thead>
        <tbody>
            <tr><th>1. AOC =</th>
                <td colspan=\"3\">Atención Oportuna al Cliente </td>
                <td><div class=\"ind\">";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "aoc", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-5\">";
        // line 142
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "aoc", array()) / (2 / 0.6)), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th>2. CFP =</th>
                <td colspan=\"3\">Condiciones de Pago  ≤ 60 días y ≥ 90 días</td>
                <td><div class=\"ind\">";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cfp", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-6\">";
        // line 149
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cfp", array()) / (2 / 0.6)), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th colspan=\"5\">ECF =10 (RC+CP+AOC+AFH+SGC+CFP) =</th>
                <td>
                    <b><div id=\"resultado-8\">";
        // line 154
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cfp", array()) + $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "aoc", array())) * 6), "html", null, true);
        echo "</div></b>
                </td>
            </tr>
            <tr><th colspan=\"5\">C. CALIFICACIÓN TOTAL  REP=(ETC+ECF) EVALUACIÓN TOTAL DEL PROVEEDOR </th>
                <td>
                    <b>";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()), "html", null, true);
        echo "</b>
                </td>
            </tr>
            <tr><th colspan=\"4\">OBSERVACIONES GENERALES</th>
                <th colspan=\"2\">RANGO DE RESULTADOS</th>
            </tr>
            <tr><td rowspan=\"3\" colspan=\"4\"></td>
                <td>> 0 a 50 </td>
                <td>NO CONTINUA</td>
            </tr>
            <tr><td>> 50,1 a 70 </td>
                <td>CONTINUA CON OBSERVACIONES </td>
            </tr>
            <tr><td>> 70,1 a 100</td>
                <td>CONTINUA</td>
            </tr>

        </tbody>
    </table>
    </fieldset>
</div>
</div>
</div>
 </div>
 </div>
";
        
        $__internal_a976a526725a5c6fde02ee2d780050907865812b319a38cce98d81813cdb6237->leave($__internal_a976a526725a5c6fde02ee2d780050907865812b319a38cce98d81813cdb6237_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Calificacion:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 159,  237 => 154,  229 => 149,  224 => 147,  216 => 142,  211 => 140,  195 => 127,  187 => 122,  182 => 120,  174 => 115,  169 => 113,  161 => 108,  156 => 106,  148 => 101,  143 => 99,  126 => 85,  122 => 84,  118 => 83,  114 => 82,  110 => 81,  106 => 80,  102 => 79,  22 => 1,);
    }
}
/* <style>*/
/* body {*/
/*     font: 10pt Verdana;*/
/* }*/
/* .marco {*/
/*   border-width:1px;*/
/*   border-style:solid;*/
/*   border-color:#000000;*/
/*   padding:10px 50px;*/
/* }*/
/* .marcoinverso {*/
/*     background-color:#000;*/
/*     padding:10px 50px;*/
/*     color:#fff;*/
/* }*/
/* pre {*/
/*     font: 9pt Verdana;*/
/*   text-align:center;*/
/* }*/
/* .derecha {*/
/*   text-align:right;*/
/* }*/
/* .tabla1{*/
/*     margin: 10px;*/
/*     width:100%;*/
/*     padding: .5em;*/
/*     border: 1px solid #000;*/
/* }*/
/* .tabla2{*/
/*     border-collapse: collapse;*/
/*     width:100%;*/
/*     border: 1px solid #000;*/
/* }*/
/* .tabla2 td{*/
/*     font: 8pt Verdana;*/
/*   text-align:center;*/
/*   border: 1px solid #000;*/
/* }*/
/* .total{*/
/*     font: bold 11pt Verdana;*/
/*     background-color:#ccc;*/
/* }*/
/* .invisible{*/
/*     border: 0px;*/
/*     background-color:#fff;*/
/* }*/
/* th{*/
/*     font: bold 11pt Verdana;*/
/*   text-align:center;*/
/*   background-color:#ffcc00;*/
/*   border: 1px solid #000;*/
/* }*/
/* */
/* td{*/
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
/* */
/* <div class="marco">*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Calificacion Proveedor</h2>*/
/*                     </div>*/
/* <div class="box-content">*/
/*     <fieldset>*/
/*     <table class="table table-bordered table-striped">*/
/*         <tbody>*/
/*             <tr><th colspan="6">INFORMACIÓN GENERAL DEL PROVEEDOR</th></tr>*/
/*             <tr><td>Razon Social Proveedor</td><td colspan="5">{{ datos[0].proveedor.nombre }}</td></tr>*/
/*             <tr><td>Direccion</td><td colspan="5">{{ datos[0].proveedor.direccion }}</td></tr>*/
/*             <tr><td>Telefono</td><td>{{ datos[0].proveedor.telefono }}</td>*/
/*                 <td>E-mail</td><td>{{ datos[0].proveedor.correo }}</td>*/
/*                 <td>Fax</td><td>{{ datos[0].proveedor.fax }}</td></tr>*/
/*             <tr><td>Documento</td><td colspan="5">{{ datos[0].proveedor.numero_documento }}</td></tr>*/
/*             <tr><td>Fecha</td><td colspan="5">{{ datos[0].fecha | date("Y-m-d") }}</td></tr>*/
/*         </tbody>*/
/*     </table>*/
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr><th colspan="7">EVALUACIÓN DEL PROVEEDOR (BIENES Y/O SERVICIOS)</th></tr>*/
/*             <tr><td colspan="4">A. ELEGIBILIDAD TÉCNICA (ETC) (corresponde al 40%)</td>*/
/*                 <td>PUNTAJE</td>*/
/*                 <td>RESULTADO</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr><th>1. CE =</th>*/
/*                 <td colspan="3">Cumplimiento en las Entregas  (oportunidad en los tiempos de respuesta, documentación y/o bienes requeridos)</td>*/
/*                 <td><div class="ind">{{ datos[0].ce }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-1">{{ (datos[0].ce)/10 }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>2. CPI =</th>*/
/*                 <td colspan="3">Calidad del Producto, insumos, materiales o Servicio</td>*/
/*                 <td><div class="ind">{{ datos[0].cpi }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-2">{{ (datos[0].cpi)/10 }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>3. BEP =</th>*/
/*                 <td colspan="3">Bienes y servicios ejecutados conforme a lo pactado (cumplimiento de criterios especificados en orden de compra de bienes y servicios)</td>*/
/*                 <td><div class="ind">{{ datos[0].bep }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-3">{{ (datos[0].bep)/10 }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>4. PD =</th>*/
/*                 <td colspan="3">"Productos con Devoluciones o defectos, servicios no conformes. El proveedor ha presentado productos/servicios no conformes"</td>*/
/*                 <td><div class="ind">{{ datos[0].pd }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-4">{{ (datos[0].pd)/10 }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">ETC = 15(CE+CPI+DPI+BEP+EX+PD)</th>*/
/*                 <td>*/
/*                     <b><div id="resultado-7">{{ (datos[0].ce + datos[0].cpi + datos[0].bep + datos[0].pd)*2  }}</div></b>*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*         <thead> */
/*             <tr><td colspan="4">B. ELEGIBILIDAD COMERCIAL Y FINANCIERA (ECF) corresponde al 60%</td>*/
/*                 <td>PUNTAJE</td>*/
/*                 <td>RESULTADO</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr><th>1. AOC =</th>*/
/*                 <td colspan="3">Atención Oportuna al Cliente </td>*/
/*                 <td><div class="ind">{{ datos[0].aoc }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-5">{{ datos[0].aoc/(2/0.6) }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>2. CFP =</th>*/
/*                 <td colspan="3">Condiciones de Pago  ≤ 60 días y ≥ 90 días</td>*/
/*                 <td><div class="ind">{{ datos[0].cfp }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-6">{{ datos[0].cfp/(2/0.6) }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">ECF =10 (RC+CP+AOC+AFH+SGC+CFP) =</th>*/
/*                 <td>*/
/*                     <b><div id="resultado-8">{{ (datos[0].cfp + datos[0].aoc)*6  }}</div></b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">C. CALIFICACIÓN TOTAL  REP=(ETC+ECF) EVALUACIÓN TOTAL DEL PROVEEDOR </th>*/
/*                 <td>*/
/*                     <b>{{ datos[0].calificacion }}</b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="4">OBSERVACIONES GENERALES</th>*/
/*                 <th colspan="2">RANGO DE RESULTADOS</th>*/
/*             </tr>*/
/*             <tr><td rowspan="3" colspan="4"></td>*/
/*                 <td>> 0 a 50 </td>*/
/*                 <td>NO CONTINUA</td>*/
/*             </tr>*/
/*             <tr><td>> 50,1 a 70 </td>*/
/*                 <td>CONTINUA CON OBSERVACIONES </td>*/
/*             </tr>*/
/*             <tr><td>> 70,1 a 100</td>*/
/*                 <td>CONTINUA</td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/*     </fieldset>*/
/* </div>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/*  </div>*/
/* */
