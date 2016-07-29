<?php

/* IncentivesOperacionesBundle:Convocatorias:listado.html.twig */
class __TwigTemplate_3ff5dc14699868f0793893fbe639d5c31e4de92838cce4742d543fe8036449fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Convocatorias:listado.html.twig", 2);
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
        $__internal_bdfdaa67c0e1331f1baffa11798ac581a15c5535b145da398bac8f3b07b2bbd3 = $this->env->getExtension("native_profiler");
        $__internal_bdfdaa67c0e1331f1baffa11798ac581a15c5535b145da398bac8f3b07b2bbd3->enter($__internal_bdfdaa67c0e1331f1baffa11798ac581a15c5535b145da398bac8f3b07b2bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Convocatorias:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdfdaa67c0e1331f1baffa11798ac581a15c5535b145da398bac8f3b07b2bbd3->leave($__internal_bdfdaa67c0e1331f1baffa11798ac581a15c5535b145da398bac8f3b07b2bbd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e73747724b41c732a97f3cd58e24a286718a72f5622fc9e2d3860216be8cffb0 = $this->env->getExtension("native_profiler");
        $__internal_e73747724b41c732a97f3cd58e24a286718a72f5622fc9e2d3860216be8cffb0->enter($__internal_e73747724b41c732a97f3cd58e24a286718a72f5622fc9e2d3860216be8cffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Convocatorias";
        
        $__internal_e73747724b41c732a97f3cd58e24a286718a72f5622fc9e2d3860216be8cffb0->leave($__internal_e73747724b41c732a97f3cd58e24a286718a72f5622fc9e2d3860216be8cffb0_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_60f3a98f26611ca078c16902dd5d045c1e727fe54825bc4e71341614a32a0b81 = $this->env->getExtension("native_profiler");
        $__internal_60f3a98f26611ca078c16902dd5d045c1e727fe54825bc4e71341614a32a0b81->enter($__internal_60f3a98f26611ca078c16902dd5d045c1e727fe54825bc4e71341614a32a0b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_60f3a98f26611ca078c16902dd5d045c1e727fe54825bc4e71341614a32a0b81->leave($__internal_60f3a98f26611ca078c16902dd5d045c1e727fe54825bc4e71341614a32a0b81_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_bbcc64c02332890836a0346e8ac39aac3fcdf7dcb0ebe2563c37a60e21206905 = $this->env->getExtension("native_profiler");
        $__internal_bbcc64c02332890836a0346e8ac39aac3fcdf7dcb0ebe2563c37a60e21206905->enter($__internal_bbcc64c02332890836a0346e8ac39aac3fcdf7dcb0ebe2563c37a60e21206905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Convocatorias</h2>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"convocatorias\" class=\"display\">
                        <thead  style=\"display:table-row-group;\">
                          <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Solicitud</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            ";
        // line 24
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            echo "<th>Estado</th>";
        }
        // line 25
        echo "                          </tr>
                          
                        </thead>
                        <tbody>
                          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["convocatoria"]) {
            // line 30
            echo "                          <tr>
                            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("convocatorias_datos", array("id" => $this->getAttribute($context["convocatoria"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "titulo", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "descripcion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["convocatoria"], "solicitud", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["convocatoria"], "fechaInicio", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["convocatoria"], "fechaFin", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            ";
            // line 36
            if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
                echo "<td>";
                if (($this->getAttribute($this->getAttribute($context["convocatoria"], "estado", array()), "id", array()) != 1)) {
                    echo "<a class=\"btn btn-danger\" id=\"enlaceajax";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "id", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_estado", array("id" => $this->getAttribute($context["convocatoria"], "id", array()))), "html", null, true);
                    echo "\">Inactivo</a>";
                } else {
                    echo "<a class=\"btn btn-success\" id=\"enlaceajax";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "id", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_estado", array("id" => $this->getAttribute($context["convocatoria"], "id", array()))), "html", null, true);
                    echo "\">Activo</a><div id=\"destino";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "id", array()), "html", null, true);
                    echo "\"></div>";
                }
                // line 37
                echo "                            ";
            }
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['convocatoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Titulo</th>
                            <th>Archivo</th>
                            <th>Solicitud</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            ";
        // line 48
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            echo "<th>Estado</th>";
        }
        // line 49
        echo "                          </tr>
                          
                        </tfoot>
                      </table>
                    </div>    
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_bbcc64c02332890836a0346e8ac39aac3fcdf7dcb0ebe2563c37a60e21206905->leave($__internal_bbcc64c02332890836a0346e8ac39aac3fcdf7dcb0ebe2563c37a60e21206905_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c87d188e9d10998314bf25a1e83b57d0c417681f686b0bb2334f8fab2f8c93bb = $this->env->getExtension("native_profiler");
        $__internal_c87d188e9d10998314bf25a1e83b57d0c417681f686b0bb2334f8fab2f8c93bb->enter($__internal_c87d188e9d10998314bf25a1e83b57d0c417681f686b0bb2334f8fab2f8c93bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "
";
        // line 62
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
        
        $__internal_c87d188e9d10998314bf25a1e83b57d0c417681f686b0bb2334f8fab2f8c93bb->leave($__internal_c87d188e9d10998314bf25a1e83b57d0c417681f686b0bb2334f8fab2f8c93bb_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Convocatorias:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 62,  191 => 61,  185 => 60,  169 => 49,  165 => 48,  155 => 40,  145 => 37,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  105 => 31,  102 => 30,  98 => 29,  92 => 25,  88 => 24,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Convocatorias{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Convocatorias</h2>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="convocatorias" class="display">*/
/*                         <thead  style="display:table-row-group;">*/
/*                           <tr>*/
/*                             <th>Titulo</th>*/
/*                             <th>Descripcion</th>*/
/*                             <th>Solicitud</th>*/
/*                             <th>Fecha Inicio</th>*/
/*                             <th>Fecha Fin</th>*/
/*                             {% if not is_granted('ROLE_PROV') %}<th>Estado</th>{% endif %}*/
/*                           </tr>*/
/*                           */
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for convocatoria in listado %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path("convocatorias_datos", {"id": convocatoria.id}) }}">{{ convocatoria.titulo }}</a></td>*/
/*                             <td>{{ convocatoria.descripcion }}</td>*/
/*                             <td>{{ convocatoria.solicitud.id }}</td>*/
/*                             <td>{{ convocatoria.fechaInicio | date("Y-m-d") }}</td>*/
/*                             <td>{{ convocatoria.fechaFin | date("Y-m-d") }}</td>*/
/*                             {% if not is_granted('ROLE_PROV') %}<td>{% if (convocatoria.estado.id!=1) %}<a class="btn btn-danger" id="enlaceajax{{ convocatoria.id }}" href="{{ path("proveedores_estado", {"id": convocatoria.id}) }}">Inactivo</a>{% else %}<a class="btn btn-success" id="enlaceajax{{ convocatoria.id }}" href="{{ path("proveedores_estado", {"id": convocatoria.id}) }}">Activo</a><div id="destino{{ convocatoria.id }}"></div>{% endif %}*/
/*                             {% endif %}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Titulo</th>*/
/*                             <th>Archivo</th>*/
/*                             <th>Solicitud</th>*/
/*                             <th>Fecha Inicio</th>*/
/*                             <th>Fecha Fin</th>*/
/*                             {% if not is_granted('ROLE_PROV') %}<th>Estado</th>{% endif %}*/
/*                           </tr>*/
/*                           */
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
