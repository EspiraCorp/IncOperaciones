<?php

/* IncentivesInventarioBundle:Inventario:listado.html.twig */
class __TwigTemplate_4c24c8574929441bb07fcbf5ff885d1caacb8846381ccb94b296bc308e254275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:listado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inventario";
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Inventario</h2>
\t\t\t<div class=\"box-icon\">
\t    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("inventario_exportar");
        echo "\" title=\"Reporte Inventario\" class=\"btn btn-primary\">
            <i class=\"icon-download icon-white\"></i>
        </a>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("inventario_exportar_detalle");
        echo "\" title=\"Reporte Detallado\" class=\"btn btn-info\">
            <i class=\"icon-download-alt icon-white\"></i>
        </a>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("inventario_ingreso");
        echo "\" title=\"Ingresar\" class=\"btn btn-primary btn-success\">
            <i class=\"icon-plus icon-white\"></i>
        </a>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("inventario_listadosalida");
        echo "\" title=\"Salida\" class=\"btn btn-primary btn-warning\">
            <i class=\"icon-minus icon-white\"></i>
        </a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"ordenes\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Id</th>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th>Referencia</th>
                            <th>SKU</th>
                            <th>C. Ingreso</th>
                            <th>C. Salida</th>
                            <th>C. Asignada</th>
                            <th>C. Disponible</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 46
            echo "                          
                            ";
            // line 47
            $context["ocupada"] = 0;
            // line 48
            echo "                            
                            ";
            // line 49
            if (($this->getAttribute($context["producto"], "asignada", array(), "array") > $this->getAttribute($context["producto"], "salida", array(), "array"))) {
                // line 50
                echo "                                ";
                $context["ocupada"] = $this->getAttribute($context["producto"], "asignada", array(), "array");
                // line 51
                echo "                            ";
            } else {
                // line 52
                echo "                                ";
                $context["ocupada"] = $this->getAttribute($context["producto"], "salida", array(), "array");
                // line 53
                echo "                            ";
            }
            // line 54
            echo "                          <tr>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "inventario", array(), "array"), "producto", array(), "array"), "id", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "inventario", array(), "array"), "producto", array(), "array"), "nombre", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "inventario", array(), "array"), "producto", array(), "array"), "marca", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "inventario", array(), "array"), "producto", array(), "array"), "referencia", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "inventario", array(), "array"), "producto", array(), "array"), "codInc", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "ingresada", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "salida", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "asignada", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            $context["total"] = $this->getAttribute($context["producto"], "disponible", array(), "array");
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                           <tr>
                            <th>Id</th>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th>Referencia</th>
                            <th>SKU</th>
                            <th>C. Ingreso</th>
                            <th>C. Salida</th>
                            <th>C. Asignada</th>
                            <th>C. Disponible</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>   
\t\t</div>
\t</div>
</div>
";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "
";
        // line 89
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\">
 \$(document).ready(function() {
//    inifuntion
 var table = \$('#ordenes').dataTable({

            \"sDom\": 'T<\"clear\">lfrtip',
             \"bPaginate\": true,
             \"bLengthChange\": true,
             \"bFilter\": true,
             \"bSort\": true,
             \"bInfo\": false,
             \"bAutoWidth\": true,
             \"bJQueryUI\": false,
             \"sPaginationType\": \"full_numbers\",
             \"iDisplayLength\": 50,
             \"aLengthMenu\": [ [10, 25, 50, -1], [10, 25, 50, \"Todo\"] ],
              initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = \$('<select style=\"width: 100%\"><option value=\"\"></option></select>')
                            .appendTo( \$(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = \$.fn.dataTable.util.escapeRegex(
                                    \$(this).val()
                                );
         
                                column
                                    .search( val ? '^'+val+'\$' : '', true, false )
                                    .draw();
                            } );
         
                        column.data().unique().sort().each( function ( d, j ) {
                            //limpiar
                            //d
                            select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                        } );
                    } );
                }
    });

})
  </script>

";
    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 89,  197 => 88,  194 => 87,  171 => 66,  161 => 63,  157 => 62,  153 => 61,  149 => 60,  145 => 59,  141 => 58,  137 => 57,  133 => 56,  129 => 55,  126 => 54,  123 => 53,  120 => 52,  117 => 51,  114 => 50,  112 => 49,  109 => 48,  107 => 47,  104 => 46,  100 => 45,  74 => 22,  68 => 19,  62 => 16,  56 => 13,  49 => 8,  46 => 7,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Inventario{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Inventario</h2>*/
/* 			<div class="box-icon">*/
/* 	    <a href="{{ path('inventario_exportar') }}" title="Reporte Inventario" class="btn btn-primary">*/
/*             <i class="icon-download icon-white"></i>*/
/*         </a>*/
/*         <a href="{{ path('inventario_exportar_detalle') }}" title="Reporte Detallado" class="btn btn-info">*/
/*             <i class="icon-download-alt icon-white"></i>*/
/*         </a>*/
/*         <a href="{{ path('inventario_ingreso') }}" title="Ingresar" class="btn btn-primary btn-success">*/
/*             <i class="icon-plus icon-white"></i>*/
/*         </a>*/
/*         <a href="{{ path('inventario_listadosalida') }}" title="Salida" class="btn btn-primary btn-warning">*/
/*             <i class="icon-minus icon-white"></i>*/
/*         </a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="ordenes" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Producto</th>*/
/*                             <th>Marca</th>*/
/*                             <th>Referencia</th>*/
/*                             <th>SKU</th>*/
/*                             <th>C. Ingreso</th>*/
/*                             <th>C. Salida</th>*/
/*                             <th>C. Asignada</th>*/
/*                             <th>C. Disponible</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for producto in productos %}*/
/*                           */
/*                             {% set ocupada = 0 %}*/
/*                             */
/*                             {% if producto['asignada'] > producto['salida']%}*/
/*                                 {% set ocupada = producto['asignada'] %}*/
/*                             {% else %}*/
/*                                 {% set ocupada = producto['salida'] %}*/
/*                             {% endif %}*/
/*                           <tr>*/
/*                             <td>{{ producto['inventario']['producto']['id'] }}</td>*/
/*                             <td>{{ producto['inventario']['producto']['nombre'] }}</td>*/
/*                             <td>{{ producto['inventario']['producto']['marca'] }}</td>*/
/*                             <td>{{ producto['inventario']['producto']['referencia'] }}</td>*/
/*                             <td>{{ producto['inventario']['producto']['codInc'] }}</td>*/
/*                             <td>{{ producto['ingresada'] }}</td>*/
/*                             <td>{{ producto['salida'] }}</td>*/
/*                             <td>{{ producto['asignada'] }}</td>*/
/*                             <td>{% set total = producto['disponible'] %}{{ total }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                            <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Producto</th>*/
/*                             <th>Marca</th>*/
/*                             <th>Referencia</th>*/
/*                             <th>SKU</th>*/
/*                             <th>C. Ingreso</th>*/
/*                             <th>C. Salida</th>*/
/*                             <th>C. Asignada</th>*/
/*                             <th>C. Disponible</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>   */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/*   <script type="text/javascript">*/
/*  $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#ordenes').dataTable({*/
/* */
/*             "sDom": 'T<"clear">lfrtip',*/
/*              "bPaginate": true,*/
/*              "bLengthChange": true,*/
/*              "bFilter": true,*/
/*              "bSort": true,*/
/*              "bInfo": false,*/
/*              "bAutoWidth": true,*/
/*              "bJQueryUI": false,*/
/*              "sPaginationType": "full_numbers",*/
/*              "iDisplayLength": 50,*/
/*              "aLengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "Todo"] ],*/
/*               initComplete: function () {*/
/*                     this.api().columns().every( function () {*/
/*                         var column = this;*/
/*                         var select = $('<select style="width: 100%"><option value=""></option></select>')*/
/*                             .appendTo( $(column.footer()).empty() )*/
/*                             .on( 'change', function () {*/
/*                                 var val = $.fn.dataTable.util.escapeRegex(*/
/*                                     $(this).val()*/
/*                                 );*/
/*          */
/*                                 column*/
/*                                     .search( val ? '^'+val+'$' : '', true, false )*/
/*                                     .draw();*/
/*                             } );*/
/*          */
/*                         column.data().unique().sort().each( function ( d, j ) {*/
/*                             //limpiar*/
/*                             //d*/
/*                             select.append( '<option value="'+d+'">'+d+'</option>' )*/
/*                         } );*/
/*                     } );*/
/*                 }*/
/*     });*/
/* */
/* })*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
