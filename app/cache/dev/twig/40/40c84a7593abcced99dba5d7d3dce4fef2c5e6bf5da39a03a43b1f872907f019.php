<?php

/* IncentivesInventarioBundle:Inventario:planillas.html.twig */
class __TwigTemplate_00e0a3938c56e651066ee74bfdd381b07cd7035d0cde84e21652f5d337cc49e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:planillas.html.twig", 1);
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
        $__internal_b36e3391e718efbacc9249e923adb49486ab074cfa77a1b311216d4405d94e4d = $this->env->getExtension("native_profiler");
        $__internal_b36e3391e718efbacc9249e923adb49486ab074cfa77a1b311216d4405d94e4d->enter($__internal_b36e3391e718efbacc9249e923adb49486ab074cfa77a1b311216d4405d94e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:planillas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b36e3391e718efbacc9249e923adb49486ab074cfa77a1b311216d4405d94e4d->leave($__internal_b36e3391e718efbacc9249e923adb49486ab074cfa77a1b311216d4405d94e4d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d23e1191dbbcf4f153218f94cbdb7ae15fef020ce2bc994f33c5ae628ad0d3e = $this->env->getExtension("native_profiler");
        $__internal_8d23e1191dbbcf4f153218f94cbdb7ae15fef020ce2bc994f33c5ae628ad0d3e->enter($__internal_8d23e1191dbbcf4f153218f94cbdb7ae15fef020ce2bc994f33c5ae628ad0d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Planillas";
        
        $__internal_8d23e1191dbbcf4f153218f94cbdb7ae15fef020ce2bc994f33c5ae628ad0d3e->leave($__internal_8d23e1191dbbcf4f153218f94cbdb7ae15fef020ce2bc994f33c5ae628ad0d3e_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_25fbb85cfd6daa71c10bb7a4ec5478bac0848d31df6315abeb33634283461233 = $this->env->getExtension("native_profiler");
        $__internal_25fbb85cfd6daa71c10bb7a4ec5478bac0848d31df6315abeb33634283461233->enter($__internal_25fbb85cfd6daa71c10bb7a4ec5478bac0848d31df6315abeb33634283461233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_25fbb85cfd6daa71c10bb7a4ec5478bac0848d31df6315abeb33634283461233->leave($__internal_25fbb85cfd6daa71c10bb7a4ec5478bac0848d31df6315abeb33634283461233_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_e8521341a799de6f6dbf40c4e4d6c45cd32be3e4a5abccc2a45a256f8b81b157 = $this->env->getExtension("native_profiler");
        $__internal_e8521341a799de6f6dbf40c4e4d6c45cd32be3e4a5abccc2a45a256f8b81b157->enter($__internal_e8521341a799de6f6dbf40c4e4d6c45cd32be3e4a5abccc2a45a256f8b81b157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Planillas</h2>
        <div class=\"box-icon\">
        ";
        // line 13
        if (((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_BOD"))) {
            // line 14
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("planillas_nueva");
            echo "\" title=\"Requisiciones\" class=\"btn btn-primary btn-sm\">
              <i class=\"icon-plus icon-white\"></i>
          </a>
          <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("planillas_generarsegmentado");
            echo "\" title=\"Generar\" class=\"btn btn-primary btn-info\">
              <i class=\"icon-cog icon-white\"></i>
          </a>
        ";
        }
        // line 21
        echo "        </div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
          <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"planillas\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Consecutivo</th>
                            <th>Tipo</th>
                            <th>Pais</th>
                            <th>Categoria</th>
                            <th>Fecha</th>
                            <th>Descargar</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")));
        foreach ($context['_seq'] as $context["_key"] => $context["planilla"]) {
            // line 40
            echo "                          <tr>
                            <td><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("planillas_datos");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "id", array()), "html", null, true);
            echo "\" onClick=confirmar(\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("inventario_listado_planilla_estado", array("id" => $this->getAttribute($context["planilla"], "id", array()))), "html", null, true);
            echo "\")>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], "planillatipo", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], "pais", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planilla"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("inventario_planilla_actualizar");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "id", array()), "html", null, true);
            echo "/1\" target=\"_blank\" onClick=confirmar(\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("inventario_listado_planilla_estado", array("id" => $this->getAttribute($context["planilla"], "id", array()))), "html", null, true);
            echo "\")>Descargar</a></td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], "planillaestado", array()), "nombre", array()), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planilla'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Consecutivo</th>
                            <th>Tipo</th>
                            <th>Pais</th>
                            <th>Categoria</th>
                            <th>Fecha</th>
                            <th>Descargar</th>
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
        
        $__internal_e8521341a799de6f6dbf40c4e4d6c45cd32be3e4a5abccc2a45a256f8b81b157->leave($__internal_e8521341a799de6f6dbf40c4e4d6c45cd32be3e4a5abccc2a45a256f8b81b157_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab3c44abed865025204673f07f8b1b862696ff24ffddde48e6fdba2504562f13 = $this->env->getExtension("native_profiler");
        $__internal_ab3c44abed865025204673f07f8b1b862696ff24ffddde48e6fdba2504562f13->enter($__internal_ab3c44abed865025204673f07f8b1b862696ff24ffddde48e6fdba2504562f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "
";
        // line 72
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\">
 \$(document).ready(function() {
//    inifuntion
 var table = \$('#planillas').dataTable({

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
            self.location=ruta;
      }
  </script>

";
        
        $__internal_ab3c44abed865025204673f07f8b1b862696ff24ffddde48e6fdba2504562f13->leave($__internal_ab3c44abed865025204673f07f8b1b862696ff24ffddde48e6fdba2504562f13_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:planillas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 72,  194 => 71,  188 => 70,  163 => 50,  154 => 47,  146 => 46,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  120 => 41,  117 => 40,  113 => 39,  93 => 21,  86 => 17,  79 => 14,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Planillas{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Planillas</h2>*/
/*         <div class="box-icon">*/
/*         {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_LOGIS') or is_granted('ROLE_BOD') %}*/
/*           <a href="{{ path('planillas_nueva') }}" title="Requisiciones" class="btn btn-primary btn-sm">*/
/*               <i class="icon-plus icon-white"></i>*/
/*           </a>*/
/*           <a href="{{ path('planillas_generarsegmentado') }}" title="Generar" class="btn btn-primary btn-info">*/
/*               <i class="icon-cog icon-white"></i>*/
/*           </a>*/
/*         {% endif %}*/
/*         </div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*           <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="planillas" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Consecutivo</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Categoria</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Descargar</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for planilla in planillas %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path('planillas_datos') }}/{{ planilla.id }}" onClick=confirmar("{{ url("inventario_listado_planilla_estado", {"id": planilla.id}) }}")>{{ planilla.id }}</a></td>*/
/*                             <td>{{ planilla.planillatipo.nombre }}</td>*/
/*                             <td>{{ planilla.pais.nombre }}</td>*/
/*                             <td>{{ planilla.categoria.nombre }}</td>*/
/*                             <td>{{ planilla.fecha | date("Y-m-d") }}</td>*/
/*                             <td><a href="{{ path('inventario_planilla_actualizar') }}/{{ planilla.id }}/1" target="_blank" onClick=confirmar("{{ url("inventario_listado_planilla_estado", {"id": planilla.id}) }}")>Descargar</a></td>*/
/*                             <td>{{ planilla.planillaestado.nombre }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Consecutivo</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Categoria</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Descargar</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>   */
/*       </div>*/
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
/*  $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#planillas').dataTable({*/
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
/* */
/*   <script type="text/javascript">*/
/*       function confirmar(ruta)*/
/*       { */
/*             self.location=ruta;*/
/*       }*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
