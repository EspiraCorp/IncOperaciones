<?php

/* IncentivesOperacionesBundle:Calificacion:pendientes.html.twig */
class __TwigTemplate_4c358f59e8917e28beafbab9b98ca3c1d691c8dbd09ddfce8df006a065a61743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Calificacion:pendientes.html.twig", 2);
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
        $__internal_2f4b0a9a14978a31d9dfe1264560b4f417120bba44dd0bb46936a89c8f352acc = $this->env->getExtension("native_profiler");
        $__internal_2f4b0a9a14978a31d9dfe1264560b4f417120bba44dd0bb46936a89c8f352acc->enter($__internal_2f4b0a9a14978a31d9dfe1264560b4f417120bba44dd0bb46936a89c8f352acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Calificacion:pendientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f4b0a9a14978a31d9dfe1264560b4f417120bba44dd0bb46936a89c8f352acc->leave($__internal_2f4b0a9a14978a31d9dfe1264560b4f417120bba44dd0bb46936a89c8f352acc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_894ca04a6122462008614b80837c4ce6222d500d42b39b7cec560c466a68934a = $this->env->getExtension("native_profiler");
        $__internal_894ca04a6122462008614b80837c4ce6222d500d42b39b7cec560c466a68934a->enter($__internal_894ca04a6122462008614b80837c4ce6222d500d42b39b7cec560c466a68934a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Califiaciones Pendientes";
        
        $__internal_894ca04a6122462008614b80837c4ce6222d500d42b39b7cec560c466a68934a->leave($__internal_894ca04a6122462008614b80837c4ce6222d500d42b39b7cec560c466a68934a_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fdfc40fd1d490a6237521a2551abc6668b2bc995e8042e848692ac515ba754a2 = $this->env->getExtension("native_profiler");
        $__internal_fdfc40fd1d490a6237521a2551abc6668b2bc995e8042e848692ac515ba754a2->enter($__internal_fdfc40fd1d490a6237521a2551abc6668b2bc995e8042e848692ac515ba754a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_fdfc40fd1d490a6237521a2551abc6668b2bc995e8042e848692ac515ba754a2->leave($__internal_fdfc40fd1d490a6237521a2551abc6668b2bc995e8042e848692ac515ba754a2_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_c081e83e9d32cce3fb099533c743c7f3b0b44a424ecece6676b8a940a26da846 = $this->env->getExtension("native_profiler");
        $__internal_c081e83e9d32cce3fb099533c743c7f3b0b44a424ecece6676b8a940a26da846->enter($__internal_c081e83e9d32cce3fb099533c743c7f3b0b44a424ecece6676b8a940a26da846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Califiaciones Pendientes
\t\t\t
\t\t\t</h2>
      <div class=\"box-icon\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("calificacion_exportar");
        echo "\"  class=\"btn btn-info\" title=\"Reporte Calificación\">
                        <i class=\"icon-list-alt icon-white\"></i>
                    </a>
        </div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"convocatorias\" class=\"display\">
                        <thead  style=\"display:table-row-group;\">
                          <tr>
                            <th>Id</th>
                            <th>Proveedor</th>
                            <th>Periodo</th>
                            <th>N°</th>
                            <th>Fecha</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["_key"] => $context["calificacion"]) {
            // line 36
            echo "                          <tr>
                            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calificacion_datos", array("id" => $this->getAttribute($context["calificacion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["calificacion"], "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "periodo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "numero", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calificacion"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "calificacion", array()), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calificacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                           <tr>
                            <th>Id</th>
                            <th>Proveedor</th>
                            <th>Fecha</th>
                            <th>Total</th>
                          </tr>                          
                        </tfoot>
                      </table>
                    </div>    
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_c081e83e9d32cce3fb099533c743c7f3b0b44a424ecece6676b8a940a26da846->leave($__internal_c081e83e9d32cce3fb099533c743c7f3b0b44a424ecece6676b8a940a26da846_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03d83f457a02ac76cfb3a2e4962620af2319c9dd5c8213bee6ecd202b4598db9 = $this->env->getExtension("native_profiler");
        $__internal_03d83f457a02ac76cfb3a2e4962620af2319c9dd5c8213bee6ecd202b4598db9->enter($__internal_03d83f457a02ac76cfb3a2e4962620af2319c9dd5c8213bee6ecd202b4598db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "
";
        // line 64
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script type=\"text/javascript\">
  \$(document).ready(function() {
  //    inifuntion
   var table = \$('#convocatorias').dataTable({
  
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
  
  function confirmar(ruta)
      {
        if (confirm(\"Desea cambiar el estado del proveedor\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>
\t  
\t  
\t  
\t</script>
";
        
        $__internal_03d83f457a02ac76cfb3a2e4962620af2319c9dd5c8213bee6ecd202b4598db9->leave($__internal_03d83f457a02ac76cfb3a2e4962620af2319c9dd5c8213bee6ecd202b4598db9_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Calificacion:pendientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 64,  168 => 63,  162 => 62,  140 => 45,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  109 => 37,  106 => 36,  102 => 35,  79 => 15,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Califiaciones Pendientes{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Califiaciones Pendientes*/
/* 			*/
/* 			</h2>*/
/*       <div class="box-icon">*/
/*                     <a href="{{ path('calificacion_exportar') }}"  class="btn btn-info" title="Reporte Calificación">*/
/*                         <i class="icon-list-alt icon-white"></i>*/
/*                     </a>*/
/*         </div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="convocatorias" class="display">*/
/*                         <thead  style="display:table-row-group;">*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Proveedor</th>*/
/*                             <th>Periodo</th>*/
/*                             <th>N°</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Total</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for calificacion in datos %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path("calificacion_datos", {"id": calificacion.id}) }}">{{ calificacion.id }}</a></td>*/
/*                             <td>{{ calificacion.proveedor.nombre }}</td>*/
/*                             <td>{{ calificacion.periodo }}</td>*/
/*                             <td>{{ calificacion.numero }}</td>*/
/*                             <td>{{ calificacion.fecha | date("Y-m-d") }}</td>*/
/*                             <td>{{ calificacion.calificacion }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                            <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Proveedor</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Total</th>*/
/*                           </tr>                          */
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>    */
/*             </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* 	<script type="text/javascript">*/
/*   $(document).ready(function() {*/
/*   //    inifuntion*/
/*    var table = $('#convocatorias').dataTable({*/
/*   */
/*               "sDom": 'T<"clear">lfrtip',*/
/*                "bPaginate": true,*/
/*                "bLengthChange": true,*/
/*                "bFilter": true,*/
/*                "bSort": true,*/
/*                "bInfo": false,*/
/*                "bAutoWidth": true,*/
/*                "bJQueryUI": false,*/
/*                "sPaginationType": "full_numbers",*/
/*                "iDisplayLength": 50,*/
/*                "aLengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "Todo"] ],*/
/*                 initComplete: function () {*/
/*                       this.api().columns().every( function () {*/
/*                           var column = this;*/
/*                           var select = $('<select style="width: 100%"><option value=""></option></select>')*/
/*                               .appendTo( $(column.footer()).empty() )*/
/*                               .on( 'change', function () {*/
/*                                   var val = $.fn.dataTable.util.escapeRegex(*/
/*                                       $(this).val()*/
/*                                   );*/
/*            */
/*                                   column*/
/*                                       .search( val ? '^'+val+'$' : '', true, false )*/
/*                                       .draw();*/
/*                               } );*/
/*            */
/*                           column.data().unique().sort().each( function ( d, j ) {*/
/*                               //limpiar*/
/*                               //d*/
/*                               select.append( '<option value="'+d+'">'+d+'</option>' )*/
/*                           } );*/
/*                       } );*/
/*                   }*/
/*       });*/
/*   */
/*   })*/
/*   */
/*   function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado del proveedor")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/* 	  */
/* 	  */
/* 	  */
/* 	</script>*/
/* {% endblock %}*/
/* */
