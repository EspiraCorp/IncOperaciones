<?php

/* IncentivesSolicitudesBundle:Solicitudes:listado.html.twig */
class __TwigTemplate_9b6eda5ccba9bc0c3c3035b65e2c73ce1f8bad902a0f6bc96e8a05645eda6e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesSolicitudesBundle:Solicitudes:listado.html.twig", 2);
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
        $__internal_3fdf5bd37f03bc4ef7ed9392c6f15dd717247bbb5b7b151b75589fe47b6fa2fe = $this->env->getExtension("native_profiler");
        $__internal_3fdf5bd37f03bc4ef7ed9392c6f15dd717247bbb5b7b151b75589fe47b6fa2fe->enter($__internal_3fdf5bd37f03bc4ef7ed9392c6f15dd717247bbb5b7b151b75589fe47b6fa2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fdf5bd37f03bc4ef7ed9392c6f15dd717247bbb5b7b151b75589fe47b6fa2fe->leave($__internal_3fdf5bd37f03bc4ef7ed9392c6f15dd717247bbb5b7b151b75589fe47b6fa2fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20720786c2d14f293d29edd8af8e33038e284830f3893e8e174104e9f10c8587 = $this->env->getExtension("native_profiler");
        $__internal_20720786c2d14f293d29edd8af8e33038e284830f3893e8e174104e9f10c8587->enter($__internal_20720786c2d14f293d29edd8af8e33038e284830f3893e8e174104e9f10c8587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Solicitudes Cotizacion";
        
        $__internal_20720786c2d14f293d29edd8af8e33038e284830f3893e8e174104e9f10c8587->leave($__internal_20720786c2d14f293d29edd8af8e33038e284830f3893e8e174104e9f10c8587_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_335deac35fb81c66b829f457214c8b0bc3035d28efc363abade9f55c1445399f = $this->env->getExtension("native_profiler");
        $__internal_335deac35fb81c66b829f457214c8b0bc3035d28efc363abade9f55c1445399f->enter($__internal_335deac35fb81c66b829f457214c8b0bc3035d28efc363abade9f55c1445399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_335deac35fb81c66b829f457214c8b0bc3035d28efc363abade9f55c1445399f->leave($__internal_335deac35fb81c66b829f457214c8b0bc3035d28efc363abade9f55c1445399f_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_4d39cc15085cccefad6a65b2cdb199f6b1d93036a987e30b06a1202afadc170c = $this->env->getExtension("native_profiler");
        $__internal_4d39cc15085cccefad6a65b2cdb199f6b1d93036a987e30b06a1202afadc170c->enter($__internal_4d39cc15085cccefad6a65b2cdb199f6b1d93036a987e30b06a1202afadc170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Solicitudes Cotizacion</h2>
\t\t\t<div class=\"box-icon\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("solicitudes_nueva");
        echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"cotizaciones\" class=\"display\">
                        <thead  style=\"display:table-row-group;\">
                          <tr>
\t\t\t\t\t\t\t<th>Id</th>
                            <th>Titulo</th>
                            <th>Fecha Solicitud</th>
                            <th>Tipo</th>
                            <th>Prioridad</th>
                            <th>Programa</th>
                            <th>Solicitante</th>
                            <th>Estado</th>
                        </thead>
                        <tbody>
                          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 33
            echo "                          <tr>
\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitudes_datos", array("id" => $this->getAttribute($context["solicitud"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "titulo", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitud"], "fechaSolicitud", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "tipo", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "prioridad", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "solicitante", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "estado", array()), "nombre", array()), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                          <tr>
\t\t\t\t\t\t\t<th>Id</th>
                            <th>Titulo</th>
                            <th>Fecha Solicitud</th>
                            <th>Tipo</th>
                            <th>Prioridad</th>
                            <th>Programa</th>
\t\t\t    <th>Solicitante</th>
                            <th>Estado</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>    
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_4d39cc15085cccefad6a65b2cdb199f6b1d93036a987e30b06a1202afadc170c->leave($__internal_4d39cc15085cccefad6a65b2cdb199f6b1d93036a987e30b06a1202afadc170c_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02b38312835e080d469c8c31d71ef5f0adbb2a381c81b5c0fe5fbc532c710e9f = $this->env->getExtension("native_profiler");
        $__internal_02b38312835e080d469c8c31d71ef5f0adbb2a381c81b5c0fe5fbc532c710e9f->enter($__internal_02b38312835e080d469c8c31d71ef5f0adbb2a381c81b5c0fe5fbc532c710e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "
";
        // line 67
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script type=\"text/javascript\">
  \$(document).ready(function() {
  //    inifuntion
   var table = \$('#cotizaciones').dataTable({
  
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
        
        $__internal_02b38312835e080d469c8c31d71ef5f0adbb2a381c81b5c0fe5fbc532c710e9f->leave($__internal_02b38312835e080d469c8c31d71ef5f0adbb2a381c81b5c0fe5fbc532c710e9f_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 67,  177 => 66,  171 => 65,  145 => 44,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  110 => 35,  106 => 34,  103 => 33,  99 => 32,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Solicitudes Cotizacion{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Solicitudes Cotizacion</h2>*/
/* 			<div class="box-icon">*/
/*                 <a href="{{ path('solicitudes_nueva') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="cotizaciones" class="display">*/
/*                         <thead  style="display:table-row-group;">*/
/*                           <tr>*/
/* 							<th>Id</th>*/
/*                             <th>Titulo</th>*/
/*                             <th>Fecha Solicitud</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Prioridad</th>*/
/*                             <th>Programa</th>*/
/*                             <th>Solicitante</th>*/
/*                             <th>Estado</th>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for solicitud in listado %}*/
/*                           <tr>*/
/* 							<td>{{ solicitud.id }}</td>*/
/*                             <td><a href="{{ path("solicitudes_datos", {"id": solicitud.id}) }}">{{ solicitud.titulo }}</a></td>*/
/*                             <td>{{ solicitud.fechaSolicitud | date("Y-m-d") }}</td>*/
/*                             <td>{{ solicitud.tipo.nombre }}</td>*/
/*                             <td>{{ solicitud.prioridad.nombre }}</td>*/
/*                             <td>{{ solicitud.programa.nombre }}</td>*/
/*                             <td>{{ solicitud.solicitante.nombre }}</td>*/
/*                             <td>{{ solicitud.estado.nombre }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/* 							<th>Id</th>*/
/*                             <th>Titulo</th>*/
/*                             <th>Fecha Solicitud</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Prioridad</th>*/
/*                             <th>Programa</th>*/
/* 			    <th>Solicitante</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
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
/*    var table = $('#cotizaciones').dataTable({*/
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
/* */
