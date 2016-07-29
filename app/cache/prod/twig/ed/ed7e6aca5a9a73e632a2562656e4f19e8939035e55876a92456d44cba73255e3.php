<?php

/* IncentivesGarantiasBundle:Redenciones:listadoprograma.html.twig */
class __TwigTemplate_865183b59e1e8083bd440c982664c59626160bb9af82da1a9a8c7326fc48d241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:listadoprograma.html.twig", 1);
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
        echo "Redenciones por programa";
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
\t\t\t<h2><i class=\"icon-th-list\"></i>Redenciones por programa</h2>
      <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("garantias_redenciones");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
      <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redenciones_exportar", array("programa" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()))), "html", null, true);
        echo "\" title=\"Descargar\">
            <button class=\"btn btn-small\">
              <i class=\"icon-download\"></i>
            </button>
          </a>
      ";
        // line 39
        echo "\t\t</div>
\t\t<div class=\"box-content\">
      ";
        // line 41
        if (((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")) != null)) {
            // line 42
            echo "\t\t\t    <div id=\"dashboard\">                  
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"redenciones\" class=\"display\">
                        <thead style=\"display:table-row-group;\">
                          <tr>
\t\t\t                <th>Participante</th>
                            <th>Documento</th>
                            <th>Producto</th>
                            <th>Codigo</th>
                            <th>Estado</th>
                            <th>Guia</th>
                            <th>Fecha</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")));
            foreach ($context['_seq'] as $context["_key"] => $context["redenciones"]) {
                // line 58
                echo "                          <tr>
\t\t\t                      <td><a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("garantiasredenciones_datos", array("redencion" => $this->getAttribute($context["redenciones"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redenciones"], "participante", array()), "nombre", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redenciones"], "participante", array()), "documento", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redenciones"], "productocatalogo", array()), "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["redenciones"], "codigoredencion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redenciones"], "redencionestado", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 64
                if ((twig_length_filter($this->env, $this->getAttribute($context["redenciones"], "inventario", array())) > 0)) {
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redenciones"], "inventario", array()), 0, array(), "array"), "guia", array())) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["redenciones"], "inventario", array()), 0, array(), "array"), "guia", array()), 0, array(), "array"), "guia", array()), "html", null, true);
                    }
                }
                echo "</td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redenciones"], "fecha", array()), "d-M-Y"), "html", null, true);
                echo "</td>
                          </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redenciones'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                          <tr>
\t\t\t                      <th>Participante</th>
                            <th>Documento</th>
                            <th>Producto</th>
                            <th>Codigo</th>
                            <th>Estado</th>
                            <th>Guia</th>
                            <th>Fecha</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>  
            </div>
            ";
        } else {
            // line 84
            echo "            <div class=\"alert alert-info\">
                      No existen redenciones asociadas al programa
                    </div>
            ";
        }
        // line 88
        echo "\t\t</div>
\t</div>
</div>
";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
        echo "
";
        // line 95
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

  <script type=\"text/javascript\">
      function confirmar(ruta)
      {
        if (confirm(\"Desea cambiar el estado\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>

";
    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:listadoprograma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 95,  174 => 94,  171 => 93,  164 => 88,  158 => 84,  140 => 68,  131 => 65,  123 => 64,  119 => 63,  115 => 62,  111 => 61,  107 => 60,  101 => 59,  98 => 58,  94 => 57,  77 => 42,  75 => 41,  71 => 39,  63 => 17,  57 => 14,  49 => 8,  46 => 7,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Redenciones por programa{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Redenciones por programa</h2>*/
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('garantias_redenciones') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/*       <a href="{{ path('redenciones_exportar', {"programa": programa.id}) }}" title="Descargar">*/
/*             <button class="btn btn-small">*/
/*               <i class="icon-download"></i>*/
/*             </button>*/
/*           </a>*/
/*       {# <a href="{{ path('proveedores_importar') }}" title="Carga Masiva">*/
/*             <button class="btn btn-small">*/
/*               <i class="icon-upload"></i>*/
/*             </button>*/
/*           </a>*/
/*       <a href="{{ path('proveedores_exportar') }}" title="Descargar">*/
/*             <button class="btn btn-small">*/
/*               <i class="icon-download"></i>*/
/*             </button>*/
/*           </a>*/
/* 			<div class="box-icon">  */
/*         <a href="{{ path('participante_nuevo') }}" title="Agregar">*/
/*             <button class="btn btn-small btn-success">*/
/*               <i class="icon-plus icon-white"></i>*/
/*             </button>*/
/*           </a>*/
/* 			</div> #}*/
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {% if redencion!=null %}*/
/* 			    <div id="dashboard">                  */
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="redenciones" class="display">*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/* 			                <th>Participante</th>*/
/*                             <th>Documento</th>*/
/*                             <th>Producto</th>*/
/*                             <th>Codigo</th>*/
/*                             <th>Estado</th>*/
/*                             <th>Guia</th>*/
/*                             <th>Fecha</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for redenciones in redencion %}*/
/*                           <tr>*/
/* 			                      <td><a href="{{ path("garantiasredenciones_datos", {"redencion": redenciones.id }) }}">{{ redenciones.participante.nombre }}</a></td>*/
/*                             <td>{{ redenciones.participante.documento }}</td>*/
/*                             <td>{{ redenciones.productocatalogo.producto.nombre }}</td>*/
/*                             <td>{{ redenciones.codigoredencion }}</td>*/
/*                             <td>{{ redenciones.redencionestado.nombre }}</td>*/
/*                             <td>{% if redenciones.inventario|length >0 %}{% if redenciones.inventario[0].guia|length >0 %}{{ redenciones.inventario[0].guia[0].guia }}{% endif %}{% endif %}</td>*/
/*                             <td>{{ redenciones.fecha | date("d-M-Y") }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/* 			                      <th>Participante</th>*/
/*                             <th>Documento</th>*/
/*                             <th>Producto</th>*/
/*                             <th>Codigo</th>*/
/*                             <th>Estado</th>*/
/*                             <th>Guia</th>*/
/*                             <th>Fecha</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>  */
/*             </div>*/
/*             {% else %}*/
/*             <div class="alert alert-info">*/
/*                       No existen redenciones asociadas al programa*/
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
/*     </script>*/
/* */
/*   <script type="text/javascript">*/
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
