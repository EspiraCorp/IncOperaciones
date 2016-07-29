<?php

/* IncentivesGarantiasBundle:Redenciones:listadoreenvios.html.twig */
class __TwigTemplate_655ad35f9ef4459551f52796f66c71391e2d82c5e08b0d0e4e6e1975975c757a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:listadoreenvios.html.twig", 1);
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
        $__internal_1bb60a4ec9f9736590786f9829ec24ba18d73f6a0eeb589fa0f770f18eab5117 = $this->env->getExtension("native_profiler");
        $__internal_1bb60a4ec9f9736590786f9829ec24ba18d73f6a0eeb589fa0f770f18eab5117->enter($__internal_1bb60a4ec9f9736590786f9829ec24ba18d73f6a0eeb589fa0f770f18eab5117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Redenciones:listadoreenvios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb60a4ec9f9736590786f9829ec24ba18d73f6a0eeb589fa0f770f18eab5117->leave($__internal_1bb60a4ec9f9736590786f9829ec24ba18d73f6a0eeb589fa0f770f18eab5117_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec1adfd05b801db9cb7a6244031042c55aeb8e9fce56db48f18f0f3a62c7b42e = $this->env->getExtension("native_profiler");
        $__internal_ec1adfd05b801db9cb7a6244031042c55aeb8e9fce56db48f18f0f3a62c7b42e->enter($__internal_ec1adfd05b801db9cb7a6244031042c55aeb8e9fce56db48f18f0f3a62c7b42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Novedades - Editar Envio";
        
        $__internal_ec1adfd05b801db9cb7a6244031042c55aeb8e9fce56db48f18f0f3a62c7b42e->leave($__internal_ec1adfd05b801db9cb7a6244031042c55aeb8e9fce56db48f18f0f3a62c7b42e_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d31824efd044d3aa6766ef3bcd1e6a09a6b1349227d2677b265444628b50cfc3 = $this->env->getExtension("native_profiler");
        $__internal_d31824efd044d3aa6766ef3bcd1e6a09a6b1349227d2677b265444628b50cfc3->enter($__internal_d31824efd044d3aa6766ef3bcd1e6a09a6b1349227d2677b265444628b50cfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_d31824efd044d3aa6766ef3bcd1e6a09a6b1349227d2677b265444628b50cfc3->leave($__internal_d31824efd044d3aa6766ef3bcd1e6a09a6b1349227d2677b265444628b50cfc3_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_13086a86409a9b66b6285eaafa3f054984381692ce3158673bbbbad013c493f0 = $this->env->getExtension("native_profiler");
        $__internal_13086a86409a9b66b6285eaafa3f054984381692ce3158673bbbbad013c493f0->enter($__internal_13086a86409a9b66b6285eaafa3f054984381692ce3158673bbbbad013c493f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Novedades - Editar Envio</h2>
      <div class=\"box-icon\">
        <div class=\"box-icon\">
                   
                </div>
      </div>
      
\t\t</div>
\t\t<div class=\"box-content\">
      ";
        // line 20
        if (((isset($context["novedades"]) ? $context["novedades"] : $this->getContext($context, "novedades")) != null)) {
            // line 21
            echo "\t\t\t  <div id=\"dashboard\">                  
                  <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"redenciones\" class=\"display\">
                        <thead style=\"display:table-row-group;\">
                          <tr>
\t\t\t                      <th>Programa</th>
                            <th>Fecha</th>
                            <th>Codigo Redencion</th>
                            <th>Participante</th>
                            <th>Documento</th>
                            <th>Observacion</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["novedades"]) ? $context["novedades"] : $this->getContext($context, "novedades")));
            foreach ($context['_seq'] as $context["_key"] => $context["novedad"]) {
                // line 38
                echo "                          <tr>
\t\t\t                      <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["novedad"], "fecha", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 41
                echo $this->env->getExtension('routing')->getPath("garantias_editarenvio");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "codigoredencion", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "documento", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["novedad"], "observacion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "tipo", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "estado", array()), "nombre", array()), "html", null, true);
                echo "</td>
                          </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['novedad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                          <tr>
\t\t\t                      <th>Programa</th>
                            <th>Fecha</th>
                            <th>Codigo Redencion</th>
                            <th>Participante</th>
                            <th>Documento</th>
                            <th>Observacion</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>    
        </div>
        ";
        } else {
            // line 66
            echo "        <div class=\"alert alert-info\">
            No existen novedades
        </div>
      ";
        }
        // line 70
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_13086a86409a9b66b6285eaafa3f054984381692ce3158673bbbbad013c493f0->leave($__internal_13086a86409a9b66b6285eaafa3f054984381692ce3158673bbbbad013c493f0_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9fff5a628ee30564ad3cea9dae9660c99060f0af05e5da6424ddbec9337d6ef = $this->env->getExtension("native_profiler");
        $__internal_f9fff5a628ee30564ad3cea9dae9660c99060f0af05e5da6424ddbec9337d6ef->enter($__internal_f9fff5a628ee30564ad3cea9dae9660c99060f0af05e5da6424ddbec9337d6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "
";
        // line 77
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t
 <script type=\"text/javascript\">
      \$(document).ready(function() {
//    inifuntion
       var table = \$('#redenciones').dataTable({

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
        
        $__internal_f9fff5a628ee30564ad3cea9dae9660c99060f0af05e5da6424ddbec9337d6ef->leave($__internal_f9fff5a628ee30564ad3cea9dae9660c99060f0af05e5da6424ddbec9337d6ef_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:listadoreenvios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 77,  193 => 76,  187 => 75,  177 => 70,  171 => 66,  152 => 49,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  119 => 41,  115 => 40,  111 => 39,  108 => 38,  104 => 37,  86 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Novedades - Editar Envio{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Novedades - Editar Envio</h2>*/
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                    */
/*                 </div>*/
/*       </div>*/
/*       */
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {% if novedades!=null %}*/
/* 			  <div id="dashboard">                  */
/*                   <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="redenciones" class="display">*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/* 			                      <th>Programa</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Codigo Redencion</th>*/
/*                             <th>Participante</th>*/
/*                             <th>Documento</th>*/
/*                             <th>Observacion</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for novedad in novedades %}*/
/*                           <tr>*/
/* 			                      <td>{{ novedad.redencion.participante.programa.nombre }}</td>*/
/*                             <td>{{ novedad.fecha | date("Y-m-d") }}</td>*/
/*                             <td><a href="{{ path("garantias_editarenvio") }}/{{ novedad.redencion.id }}">{{ novedad.redencion.codigoredencion }}</a></td>*/
/*                             <td>{{ novedad.redencion.participante.nombre }}</td>*/
/*                             <td>{{ novedad.redencion.participante.documento }}</td>*/
/*                             <td>{{ novedad.observacion }}</td>*/
/*                             <td>{{ novedad.tipo.nombre }}</td>*/
/*                             <td>{{ novedad.estado.nombre }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/* 			                      <th>Programa</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Codigo Redencion</th>*/
/*                             <th>Participante</th>*/
/*                             <th>Documento</th>*/
/*                             <th>Observacion</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>    */
/*         </div>*/
/*         {% else %}*/
/*         <div class="alert alert-info">*/
/*             No existen novedades*/
/*         </div>*/
/*       {% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* 	*/
/*  <script type="text/javascript">*/
/*       $(document).ready(function() {*/
/* //    inifuntion*/
/*        var table = $('#redenciones').dataTable({*/
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
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
