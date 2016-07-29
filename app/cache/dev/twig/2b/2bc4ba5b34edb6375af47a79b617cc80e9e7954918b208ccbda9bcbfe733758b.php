<?php

/* IncentivesInventarioBundle:Inventario:listado.html.twig */
class __TwigTemplate_3695ae0e0d9064f9fd99673a33a74f4a461097f274c74b55a543ee27ee33e7ee extends Twig_Template
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
        $__internal_b1cc3f3a5d465ebc1d7fecdabba606924a3956256c87deae2f649fbc8e034f11 = $this->env->getExtension("native_profiler");
        $__internal_b1cc3f3a5d465ebc1d7fecdabba606924a3956256c87deae2f649fbc8e034f11->enter($__internal_b1cc3f3a5d465ebc1d7fecdabba606924a3956256c87deae2f649fbc8e034f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1cc3f3a5d465ebc1d7fecdabba606924a3956256c87deae2f649fbc8e034f11->leave($__internal_b1cc3f3a5d465ebc1d7fecdabba606924a3956256c87deae2f649fbc8e034f11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44decda9fd65f0b4fa15d2f3c788a05e81dabc6083199313d010e16748890e9b = $this->env->getExtension("native_profiler");
        $__internal_44decda9fd65f0b4fa15d2f3c788a05e81dabc6083199313d010e16748890e9b->enter($__internal_44decda9fd65f0b4fa15d2f3c788a05e81dabc6083199313d010e16748890e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inventario";
        
        $__internal_44decda9fd65f0b4fa15d2f3c788a05e81dabc6083199313d010e16748890e9b->leave($__internal_44decda9fd65f0b4fa15d2f3c788a05e81dabc6083199313d010e16748890e9b_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3847fdd7f1c141ea8f915e9c93cf716aa61065c22d1f4bdc687274b759416c1a = $this->env->getExtension("native_profiler");
        $__internal_3847fdd7f1c141ea8f915e9c93cf716aa61065c22d1f4bdc687274b759416c1a->enter($__internal_3847fdd7f1c141ea8f915e9c93cf716aa61065c22d1f4bdc687274b759416c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_3847fdd7f1c141ea8f915e9c93cf716aa61065c22d1f4bdc687274b759416c1a->leave($__internal_3847fdd7f1c141ea8f915e9c93cf716aa61065c22d1f4bdc687274b759416c1a_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_07be7235d8ebeadd8f329e28cadd35334e3ab64ac4eba4604a130ae3ab3cc590 = $this->env->getExtension("native_profiler");
        $__internal_07be7235d8ebeadd8f329e28cadd35334e3ab64ac4eba4604a130ae3ab3cc590->enter($__internal_07be7235d8ebeadd8f329e28cadd35334e3ab64ac4eba4604a130ae3ab3cc590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
        
        $__internal_07be7235d8ebeadd8f329e28cadd35334e3ab64ac4eba4604a130ae3ab3cc590->leave($__internal_07be7235d8ebeadd8f329e28cadd35334e3ab64ac4eba4604a130ae3ab3cc590_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4af9e3687d7996bb0ac5763a96cf66ebd17aeaf5f240d8bfcc335498c7b34342 = $this->env->getExtension("native_profiler");
        $__internal_4af9e3687d7996bb0ac5763a96cf66ebd17aeaf5f240d8bfcc335498c7b34342->enter($__internal_4af9e3687d7996bb0ac5763a96cf66ebd17aeaf5f240d8bfcc335498c7b34342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4af9e3687d7996bb0ac5763a96cf66ebd17aeaf5f240d8bfcc335498c7b34342->leave($__internal_4af9e3687d7996bb0ac5763a96cf66ebd17aeaf5f240d8bfcc335498c7b34342_prof);

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
        return array (  227 => 89,  224 => 88,  218 => 87,  192 => 66,  182 => 63,  178 => 62,  174 => 61,  170 => 60,  166 => 59,  162 => 58,  158 => 57,  154 => 56,  150 => 55,  147 => 54,  144 => 53,  141 => 52,  138 => 51,  135 => 50,  133 => 49,  130 => 48,  128 => 47,  125 => 46,  121 => 45,  95 => 22,  89 => 19,  83 => 16,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
