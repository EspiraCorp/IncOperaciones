<?php

/* IncentivesGarantiasBundle:Redenciones:listadorecompras.html.twig */
class __TwigTemplate_31d2c89104dd273aee12356bb759bfe30ea2872fe8ada1e545c66626621a7d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:listadorecompras.html.twig", 1);
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
        $__internal_298a67b85e8f27f4e47dba9e00d138e41ac8a616e562d38e342ef66fd4d7df85 = $this->env->getExtension("native_profiler");
        $__internal_298a67b85e8f27f4e47dba9e00d138e41ac8a616e562d38e342ef66fd4d7df85->enter($__internal_298a67b85e8f27f4e47dba9e00d138e41ac8a616e562d38e342ef66fd4d7df85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Redenciones:listadorecompras.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_298a67b85e8f27f4e47dba9e00d138e41ac8a616e562d38e342ef66fd4d7df85->leave($__internal_298a67b85e8f27f4e47dba9e00d138e41ac8a616e562d38e342ef66fd4d7df85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9497355ad10c92aadc028c4a699224b254e93d63659803f12874b7d9985a4ff5 = $this->env->getExtension("native_profiler");
        $__internal_9497355ad10c92aadc028c4a699224b254e93d63659803f12874b7d9985a4ff5->enter($__internal_9497355ad10c92aadc028c4a699224b254e93d63659803f12874b7d9985a4ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recompras";
        
        $__internal_9497355ad10c92aadc028c4a699224b254e93d63659803f12874b7d9985a4ff5->leave($__internal_9497355ad10c92aadc028c4a699224b254e93d63659803f12874b7d9985a4ff5_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_97616546ce1016b8080dd180b57941aabd09ce2276fc7a4d11a95337d1eb52aa = $this->env->getExtension("native_profiler");
        $__internal_97616546ce1016b8080dd180b57941aabd09ce2276fc7a4d11a95337d1eb52aa->enter($__internal_97616546ce1016b8080dd180b57941aabd09ce2276fc7a4d11a95337d1eb52aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_97616546ce1016b8080dd180b57941aabd09ce2276fc7a4d11a95337d1eb52aa->leave($__internal_97616546ce1016b8080dd180b57941aabd09ce2276fc7a4d11a95337d1eb52aa_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_94b9cfe12cdad7a606fa2ba389a205c36e95dce23ddde7356ec0aaeed7f61dbb = $this->env->getExtension("native_profiler");
        $__internal_94b9cfe12cdad7a606fa2ba389a205c36e95dce23ddde7356ec0aaeed7f61dbb->enter($__internal_94b9cfe12cdad7a606fa2ba389a205c36e95dce23ddde7356ec0aaeed7f61dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Recompras</h2>
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
            echo "\t\t\t<div id=\"dashboard\">
\t\t\t    <table id=\"redenciones\" class=\"display\">                 
                    <thead style=\"display:table-row-group;\">
                          <tr>
\t\t\t                <th>Programa</th>
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
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["novedades"]) ? $context["novedades"] : $this->getContext($context, "novedades")));
            foreach ($context['_seq'] as $context["_key"] => $context["novedad"]) {
                // line 37
                echo "                          <tr>
\t\t\t                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["novedad"], "fecha", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 40
                echo $this->env->getExtension('routing')->getPath("garantiasrecompra_aprobacion");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["novedad"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "codigoredencion", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "documento", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["novedad"], "observacion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "tipo", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "estado", array()), "nombre", array()), "html", null, true);
                echo "</td>
                          </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['novedad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
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
            // line 65
            echo "            <div class=\"alert alert-info\">
                      No existen novedades
                    </div>
            ";
        }
        // line 69
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_94b9cfe12cdad7a606fa2ba389a205c36e95dce23ddde7356ec0aaeed7f61dbb->leave($__internal_94b9cfe12cdad7a606fa2ba389a205c36e95dce23ddde7356ec0aaeed7f61dbb_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3823f2a43b968451a78c419f7a3bad21a198b15f1cf49880dd920c393712adaa = $this->env->getExtension("native_profiler");
        $__internal_3823f2a43b968451a78c419f7a3bad21a198b15f1cf49880dd920c393712adaa->enter($__internal_3823f2a43b968451a78c419f7a3bad21a198b15f1cf49880dd920c393712adaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "
";
        // line 76
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

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
        
        $__internal_3823f2a43b968451a78c419f7a3bad21a198b15f1cf49880dd920c393712adaa->leave($__internal_3823f2a43b968451a78c419f7a3bad21a198b15f1cf49880dd920c393712adaa_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:listadorecompras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 76,  192 => 75,  186 => 74,  176 => 69,  170 => 65,  151 => 48,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  126 => 41,  118 => 40,  114 => 39,  110 => 38,  107 => 37,  103 => 36,  86 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Recompras{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Recompras</h2>*/
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                    */
/*                 </div>*/
/*       </div>*/
/*       */
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {% if novedades!=null %}*/
/* 			<div id="dashboard">*/
/* 			    <table id="redenciones" class="display">                 */
/*                     <thead style="display:table-row-group;">*/
/*                           <tr>*/
/* 			                <th>Programa</th>*/
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
/* 			                <td>{{ novedad.redencion.participante.programa.nombre }}</td>*/
/*                             <td>{{ novedad.fecha | date("Y-m-d") }}</td>*/
/*                             <td><a href="{{ path("garantiasrecompra_aprobacion") }}/{{ novedad.id }}">{{ novedad.redencion.codigoredencion }}</a></td>*/
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
/*                     </div>             */
/*             </div>*/
/*             {% else %}*/
/*             <div class="alert alert-info">*/
/*                       No existen novedades*/
/*                     </div>*/
/*             {% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* <script type="text/javascript">*/
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
/* */
/* </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
