<?php

/* IncentivesOperacionesBundle:Calificacion:planes.html.twig */
class __TwigTemplate_0874710854ad9ecb16dea6622bfb06f5b91cec60bfbabc8d39f0ed183a3d134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Calificacion:planes.html.twig", 2);
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
        $__internal_3960af0f6ab893e90cf756db8f6c79361254608c772815bec96f363264c7cbbf = $this->env->getExtension("native_profiler");
        $__internal_3960af0f6ab893e90cf756db8f6c79361254608c772815bec96f363264c7cbbf->enter($__internal_3960af0f6ab893e90cf756db8f6c79361254608c772815bec96f363264c7cbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Calificacion:planes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3960af0f6ab893e90cf756db8f6c79361254608c772815bec96f363264c7cbbf->leave($__internal_3960af0f6ab893e90cf756db8f6c79361254608c772815bec96f363264c7cbbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_857ff1857e44698e8f10e1999040dc4921d466ef5d67fa929ab56ba179214c81 = $this->env->getExtension("native_profiler");
        $__internal_857ff1857e44698e8f10e1999040dc4921d466ef5d67fa929ab56ba179214c81->enter($__internal_857ff1857e44698e8f10e1999040dc4921d466ef5d67fa929ab56ba179214c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aprobar Plan de Accion";
        
        $__internal_857ff1857e44698e8f10e1999040dc4921d466ef5d67fa929ab56ba179214c81->leave($__internal_857ff1857e44698e8f10e1999040dc4921d466ef5d67fa929ab56ba179214c81_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ca443f188e6e7b1fbfb3103e222d46590426238d190b97786bb0c7765b24413e = $this->env->getExtension("native_profiler");
        $__internal_ca443f188e6e7b1fbfb3103e222d46590426238d190b97786bb0c7765b24413e->enter($__internal_ca443f188e6e7b1fbfb3103e222d46590426238d190b97786bb0c7765b24413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_ca443f188e6e7b1fbfb3103e222d46590426238d190b97786bb0c7765b24413e->leave($__internal_ca443f188e6e7b1fbfb3103e222d46590426238d190b97786bb0c7765b24413e_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_ec47a58a4f9849b44724504ab82e5e8c18251fe929e82b7fefec393aca1eef5a = $this->env->getExtension("native_profiler");
        $__internal_ec47a58a4f9849b44724504ab82e5e8c18251fe929e82b7fefec393aca1eef5a->enter($__internal_ec47a58a4f9849b44724504ab82e5e8c18251fe929e82b7fefec393aca1eef5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Aprobar Plan de Accion</h2>
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
                            <th>Plan</th>
                            <th>Total</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["_key"] => $context["calificacion"]) {
            // line 31
            echo "                          <tr>
                            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calificacion_datos", array("id" => $this->getAttribute($context["calificacion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["calificacion"], "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "periodo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "numero", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calificacion"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "calificacion", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["calificacion"], "planAccion", array()), 72), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["calificacion"], "planAccion", array()), 72), "html", null, true);
            echo "</a></td>
                            <td><a class=\"btn btn-success\" id=\"enlaceajax";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["calificacion"], "id", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plan_estado", array("id" => $this->getAttribute($context["calificacion"], "id", array()))), "html", null, true);
            echo "\">Aprobar</a></div></td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calificacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                           <tr>
                             <th>Id</th>
                            <th>Proveedor</th>
                            <th>Periodo</th>
                            <th>N°</th>
                            <th>Fecha</th>
                            <th>Plan</th>
                            <th>Total</th>
                            <th></th>
                          </tr>                          
                        </tfoot>
                      </table>
                    </div>    
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_ec47a58a4f9849b44724504ab82e5e8c18251fe929e82b7fefec393aca1eef5a->leave($__internal_ec47a58a4f9849b44724504ab82e5e8c18251fe929e82b7fefec393aca1eef5a_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a50f82e67a54ad8efdc1a8bd698b4585a593761f2dab05f258ef1c2d53463ee0 = $this->env->getExtension("native_profiler");
        $__internal_a50f82e67a54ad8efdc1a8bd698b4585a593761f2dab05f258ef1c2d53463ee0->enter($__internal_a50f82e67a54ad8efdc1a8bd698b4585a593761f2dab05f258ef1c2d53463ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        // line 65
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
        
        $__internal_a50f82e67a54ad8efdc1a8bd698b4585a593761f2dab05f258ef1c2d53463ee0->leave($__internal_a50f82e67a54ad8efdc1a8bd698b4585a593761f2dab05f258ef1c2d53463ee0_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Calificacion:planes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 65,  176 => 64,  170 => 63,  144 => 42,  133 => 39,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  101 => 32,  98 => 31,  94 => 30,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Aprobar Plan de Accion{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Aprobar Plan de Accion</h2>*/
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
/*                             <th>Plan</th>*/
/*                             <th>Total</th>*/
/*                             <th></th>*/
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
/*                             <td><a href="{{ calificacion.planAccion | slice(72) }}">{{ calificacion.planAccion | slice(72) }}</a></td>*/
/*                             <td><a class="btn btn-success" id="enlaceajax{{ calificacion.id }}" href="{{ path("plan_estado", {"id": calificacion.id}) }}">Aprobar</a></div></td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                            <tr>*/
/*                              <th>Id</th>*/
/*                             <th>Proveedor</th>*/
/*                             <th>Periodo</th>*/
/*                             <th>N°</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Plan</th>*/
/*                             <th>Total</th>*/
/*                             <th></th>*/
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
