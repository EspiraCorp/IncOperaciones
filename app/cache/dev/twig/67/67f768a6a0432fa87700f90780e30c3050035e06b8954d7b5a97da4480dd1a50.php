<?php

/* IncentivesOrdenesBundle:Ordenes:listado.html.twig */
class __TwigTemplate_44c0e8367f83ae06ae59ebb49a5067111a7862c5870e20fa988a236dee089333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:Ordenes:listado.html.twig", 1);
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
        $__internal_aad75ff552c893a08c5c806fbc3caf6050f414e165fad506a05224205f56823c = $this->env->getExtension("native_profiler");
        $__internal_aad75ff552c893a08c5c806fbc3caf6050f414e165fad506a05224205f56823c->enter($__internal_aad75ff552c893a08c5c806fbc3caf6050f414e165fad506a05224205f56823c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aad75ff552c893a08c5c806fbc3caf6050f414e165fad506a05224205f56823c->leave($__internal_aad75ff552c893a08c5c806fbc3caf6050f414e165fad506a05224205f56823c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b2acf561a2c8c96fe7f212e8034c2806a176a74b2d465c9b73d96df55520a4c = $this->env->getExtension("native_profiler");
        $__internal_6b2acf561a2c8c96fe7f212e8034c2806a176a74b2d465c9b73d96df55520a4c->enter($__internal_6b2acf561a2c8c96fe7f212e8034c2806a176a74b2d465c9b73d96df55520a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ordenes de compra";
        
        $__internal_6b2acf561a2c8c96fe7f212e8034c2806a176a74b2d465c9b73d96df55520a4c->leave($__internal_6b2acf561a2c8c96fe7f212e8034c2806a176a74b2d465c9b73d96df55520a4c_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fdd3d705987f8e930db9382a4ed4af1bf50952206ece30aceeb7bc9d6e9a0350 = $this->env->getExtension("native_profiler");
        $__internal_fdd3d705987f8e930db9382a4ed4af1bf50952206ece30aceeb7bc9d6e9a0350->enter($__internal_fdd3d705987f8e930db9382a4ed4af1bf50952206ece30aceeb7bc9d6e9a0350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_fdd3d705987f8e930db9382a4ed4af1bf50952206ece30aceeb7bc9d6e9a0350->leave($__internal_fdd3d705987f8e930db9382a4ed4af1bf50952206ece30aceeb7bc9d6e9a0350_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_3bd0a65bf50edbf71268699f50b8fbb277bb33056680b6dae95de0a454c487e1 = $this->env->getExtension("native_profiler");
        $__internal_3bd0a65bf50edbf71268699f50b8fbb277bb33056680b6dae95de0a454c487e1->enter($__internal_3bd0a65bf50edbf71268699f50b8fbb277bb33056680b6dae95de0a454c487e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Ordenes de compra</h2>
\t\t\t<div class=\"box-icon\">
    \t    ";
        // line 13
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 14
            echo "    \t    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("tracking_reporte");
            echo "\" title=\"Reporte Tracking\" class=\"btn btn-primary\">
                <i class=\"icon-plane icon-white\"></i>
            </a> 
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("ordenes_nueva");
            echo "\" title=\"Agregar\" class=\"btn btn-primary btn-success\">
                <i class=\"icon-plus icon-white\"></i>
            </a>
            <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("ordenes_generarsegmentado");
            echo "\" title=\"Generar\" class=\"btn btn-primary btn-info\">
                <i class=\"icon-cog icon-white\"></i>
            </a>
            
            <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("ordenes_exportar");
            echo "\" title=\"Exportar Listado\" class=\"btn btn-info\">
                <i class=\"icon-th icon-white\"></i>
            </a>
            
            <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("ordenes_exportar_productos");
            echo "\" title=\"Productos Orden\" class=\"btn btn-info\">
                <i class=\"icon-barcode icon-white\"></i>
            </a>
            
            ";
            // line 32
            if ($this->env->getExtension('security')->isGranted("ROLE_EJEC")) {
                // line 33
                echo "    \t    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("ordenredencion_totalpass");
                echo "\" title=\"Generar Total Pass\" class=\"btn btn-primary btn-danger\">
                <i class=\"icon-tags icon-white\"></i>
            </a>
            ";
            }
            // line 37
            echo "\t\t\t
\t\t\t";
        }
        // line 39
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"ordenes\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Id</th>
                            <th>Numero</th>
                            <th>Proveedor</th>
                            <th>Pais</th>
                            <th>Categoria</th>
                            <th>Fecha solicitud</th>
                            <th>Fecha entrega</th>
                            <th>Valor total</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["orden"]) {
            // line 61
            echo "                          <tr>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_datos", array("id" => $this->getAttribute($context["orden"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "consecutivo", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "pais", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orden"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orden"], "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["orden"], "total", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "ordenesTipo", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "ordenesEstado", array()), "nombre", array()), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orden'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Id</th>
                            <th>Numero</th>
                            <th>Proveedor</th>
                            <th>Pais</th>
                            <th>Categoria</th>
                            <th>Fecha solicitud</th>
                            <th>Fecha entrega</th>
                            <th>Valor total</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>   
\t\t</div>
\t</div>
</div>
";
        
        $__internal_3bd0a65bf50edbf71268699f50b8fbb277bb33056680b6dae95de0a454c487e1->leave($__internal_3bd0a65bf50edbf71268699f50b8fbb277bb33056680b6dae95de0a454c487e1_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f73a90cb1f2603281c4b9e7b0c090a144ef978107439740d5f3588b84e79508e = $this->env->getExtension("native_profiler");
        $__internal_f73a90cb1f2603281c4b9e7b0c090a144ef978107439740d5f3588b84e79508e->enter($__internal_f73a90cb1f2603281c4b9e7b0c090a144ef978107439740d5f3588b84e79508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "
";
        // line 98
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
        
        $__internal_f73a90cb1f2603281c4b9e7b0c090a144ef978107439740d5f3588b84e79508e->leave($__internal_f73a90cb1f2603281c4b9e7b0c090a144ef978107439740d5f3588b84e79508e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 98,  237 => 97,  231 => 96,  204 => 74,  195 => 71,  191 => 70,  187 => 69,  183 => 68,  179 => 67,  175 => 66,  171 => 65,  167 => 64,  161 => 63,  157 => 62,  154 => 61,  150 => 60,  127 => 39,  123 => 37,  115 => 33,  113 => 32,  106 => 28,  99 => 24,  92 => 20,  86 => 17,  79 => 14,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Ordenes de compra{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Ordenes de compra</h2>*/
/* 			<div class="box-icon">*/
/*     	    {% if not is_granted('ROLE_PROV') %}*/
/*     	    <a href="{{ path('tracking_reporte') }}" title="Reporte Tracking" class="btn btn-primary">*/
/*                 <i class="icon-plane icon-white"></i>*/
/*             </a> */
/*             <a href="{{ path('ordenes_nueva') }}" title="Agregar" class="btn btn-primary btn-success">*/
/*                 <i class="icon-plus icon-white"></i>*/
/*             </a>*/
/*             <a href="{{ path('ordenes_generarsegmentado') }}" title="Generar" class="btn btn-primary btn-info">*/
/*                 <i class="icon-cog icon-white"></i>*/
/*             </a>*/
/*             */
/*             <a href="{{ path('ordenes_exportar') }}" title="Exportar Listado" class="btn btn-info">*/
/*                 <i class="icon-th icon-white"></i>*/
/*             </a>*/
/*             */
/*             <a href="{{ path('ordenes_exportar_productos') }}" title="Productos Orden" class="btn btn-info">*/
/*                 <i class="icon-barcode icon-white"></i>*/
/*             </a>*/
/*             */
/*             {% if is_granted('ROLE_EJEC') %}*/
/*     	    <a href="{{ path('ordenredencion_totalpass') }}" title="Generar Total Pass" class="btn btn-primary btn-danger">*/
/*                 <i class="icon-tags icon-white"></i>*/
/*             </a>*/
/*             {% endif %}*/
/* 			*/
/* 			{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="ordenes" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Numero</th>*/
/*                             <th>Proveedor</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Categoria</th>*/
/*                             <th>Fecha solicitud</th>*/
/*                             <th>Fecha entrega</th>*/
/*                             <th>Valor total</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for orden in listado %}*/
/*                           <tr>*/
/*                             <td>{{ orden.id }}</td>*/
/*                             <td><a href="{{ path("ordenes_datos", {"id": orden.id}) }}">{{ orden.consecutivo }}</a></td>*/
/*                             <td>{{ orden.proveedor.nombre }}</td>*/
/*                             <td>{{ orden.pais.nombre }}</td>*/
/*                             <td>{{ orden.categoria.nombre }}</td>*/
/*                             <td>{{ orden.fechaCreacion | date("Y-m-d") }}</td>*/
/*                             <td>{{ orden.fechaVencimiento | date("Y-m-d") }}</td>*/
/*                             <td>{{ orden.total|number_format(2, ',', '.')  }}</td>*/
/*                             <td>{{ orden.ordenesTipo.nombre }}</td>*/
/*                             <td>{{ orden.ordenesEstado.nombre }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Numero</th>*/
/*                             <th>Proveedor</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Categoria</th>*/
/*                             <th>Fecha solicitud</th>*/
/*                             <th>Fecha entrega</th>*/
/*                             <th>Valor total</th>*/
/*                             <th>Tipo</th>*/
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
