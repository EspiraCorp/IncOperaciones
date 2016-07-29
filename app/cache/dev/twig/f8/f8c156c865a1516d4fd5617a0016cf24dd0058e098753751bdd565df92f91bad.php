<?php

/* IncentivesSolicitudesBundle:Cotizaciones:listado.html.twig */
class __TwigTemplate_b5154a4cc6af997ac4a2b710469c30da394021fe454a12a0180e41d60a40ebf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesSolicitudesBundle:Cotizaciones:listado.html.twig", 1);
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
        $__internal_e3fb28ecbbe31b90645c583ad207b90f7ead1b656b05dfa4723053d43ca14732 = $this->env->getExtension("native_profiler");
        $__internal_e3fb28ecbbe31b90645c583ad207b90f7ead1b656b05dfa4723053d43ca14732->enter($__internal_e3fb28ecbbe31b90645c583ad207b90f7ead1b656b05dfa4723053d43ca14732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3fb28ecbbe31b90645c583ad207b90f7ead1b656b05dfa4723053d43ca14732->leave($__internal_e3fb28ecbbe31b90645c583ad207b90f7ead1b656b05dfa4723053d43ca14732_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dffb1a4978650a429c7c269ff88296d21a54215677681fba85723dad212f3e9 = $this->env->getExtension("native_profiler");
        $__internal_3dffb1a4978650a429c7c269ff88296d21a54215677681fba85723dad212f3e9->enter($__internal_3dffb1a4978650a429c7c269ff88296d21a54215677681fba85723dad212f3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cotizaciones";
        
        $__internal_3dffb1a4978650a429c7c269ff88296d21a54215677681fba85723dad212f3e9->leave($__internal_3dffb1a4978650a429c7c269ff88296d21a54215677681fba85723dad212f3e9_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f6ccb712031db277a611f2806f376a79138fe89ef5abc3007592b3141183825a = $this->env->getExtension("native_profiler");
        $__internal_f6ccb712031db277a611f2806f376a79138fe89ef5abc3007592b3141183825a->enter($__internal_f6ccb712031db277a611f2806f376a79138fe89ef5abc3007592b3141183825a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_f6ccb712031db277a611f2806f376a79138fe89ef5abc3007592b3141183825a->leave($__internal_f6ccb712031db277a611f2806f376a79138fe89ef5abc3007592b3141183825a_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_48c4ca07a2c6181b950ba4dbafab331a6256ae6dbdfd4c7e6f9211bf48ea99b7 = $this->env->getExtension("native_profiler");
        $__internal_48c4ca07a2c6181b950ba4dbafab331a6256ae6dbdfd4c7e6f9211bf48ea99b7->enter($__internal_48c4ca07a2c6181b950ba4dbafab331a6256ae6dbdfd4c7e6f9211bf48ea99b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Cotizaciones</h2>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"ordenes\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Id</th>
                            <th>Consecutivo</th>
                            <th>Fecha Creacion</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["cotizacion"]) {
            // line 27
            echo "                          <tr>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cotizacion"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_datos", array("id" => $this->getAttribute($context["cotizacion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cotizacion"], "consecutivo", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cotizacion"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cotizacion"], "estado", array()), "nombre", array()), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotizacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Id</th>
                            <th>Consecutivo</th>
                            <th>Fecha Creacion</th>
                            <th>Estado</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>   
\t\t</div>
\t</div>
</div>
";
        
        $__internal_48c4ca07a2c6181b950ba4dbafab331a6256ae6dbdfd4c7e6f9211bf48ea99b7->leave($__internal_48c4ca07a2c6181b950ba4dbafab331a6256ae6dbdfd4c7e6f9211bf48ea99b7_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ff02dcc120ff89ddc8983699783430342ebb17d6b6fa4dd2187732c49bd7d17 = $this->env->getExtension("native_profiler");
        $__internal_6ff02dcc120ff89ddc8983699783430342ebb17d6b6fa4dd2187732c49bd7d17->enter($__internal_6ff02dcc120ff89ddc8983699783430342ebb17d6b6fa4dd2187732c49bd7d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "
";
        // line 52
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
        
        $__internal_6ff02dcc120ff89ddc8983699783430342ebb17d6b6fa4dd2187732c49bd7d17->leave($__internal_6ff02dcc120ff89ddc8983699783430342ebb17d6b6fa4dd2187732c49bd7d17_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  147 => 51,  141 => 50,  120 => 34,  111 => 31,  107 => 30,  101 => 29,  97 => 28,  94 => 27,  90 => 26,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Cotizaciones{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Cotizaciones</h2>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="ordenes" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Consecutivo</th>*/
/*                             <th>Fecha Creacion</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for cotizacion in listado %}*/
/*                           <tr>*/
/*                             <td>{{ cotizacion.id }}</td>*/
/*                             <td><a href="{{ path("cotizaciones_datos", {"id": cotizacion.id}) }}">{{ cotizacion.consecutivo }}</a></td>*/
/*                             <td>{{ cotizacion.fechaCreacion | date("Y-m-d") }}</td>*/
/*                             <td>{{ cotizacion.estado.nombre }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Consecutivo</th>*/
/*                             <th>Fecha Creacion</th>*/
/*                             <th>Estado</th>*/
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
