<?php

/* IncentivesInventarioBundle:Inventario:planillarequisicion.html.twig */
class __TwigTemplate_5bf3f9860e62af0202abf1752b16965434be7f04b9eebf422a5af90417378321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:planillarequisicion.html.twig", 1);
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
        $__internal_424d3f0036ce5344535b74f901dc778aa8fb651173c92f95358b0757fd435996 = $this->env->getExtension("native_profiler");
        $__internal_424d3f0036ce5344535b74f901dc778aa8fb651173c92f95358b0757fd435996->enter($__internal_424d3f0036ce5344535b74f901dc778aa8fb651173c92f95358b0757fd435996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:planillarequisicion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_424d3f0036ce5344535b74f901dc778aa8fb651173c92f95358b0757fd435996->leave($__internal_424d3f0036ce5344535b74f901dc778aa8fb651173c92f95358b0757fd435996_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e45ba6669e7e796719a773979b24881c424e5b4faa8edcc56a43e7630286f58 = $this->env->getExtension("native_profiler");
        $__internal_6e45ba6669e7e796719a773979b24881c424e5b4faa8edcc56a43e7630286f58->enter($__internal_6e45ba6669e7e796719a773979b24881c424e5b4faa8edcc56a43e7630286f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Productos";
        
        $__internal_6e45ba6669e7e796719a773979b24881c424e5b4faa8edcc56a43e7630286f58->leave($__internal_6e45ba6669e7e796719a773979b24881c424e5b4faa8edcc56a43e7630286f58_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d15ae76efc673abf27d3996549db8cc7700488e7abe3ca210bbc953858056f5e = $this->env->getExtension("native_profiler");
        $__internal_d15ae76efc673abf27d3996549db8cc7700488e7abe3ca210bbc953858056f5e->enter($__internal_d15ae76efc673abf27d3996549db8cc7700488e7abe3ca210bbc953858056f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_d15ae76efc673abf27d3996549db8cc7700488e7abe3ca210bbc953858056f5e->leave($__internal_d15ae76efc673abf27d3996549db8cc7700488e7abe3ca210bbc953858056f5e_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_59b71a1cb62c63e9d45482ca7c4c283382f324f6bba4357ff34591543acc81e0 = $this->env->getExtension("native_profiler");
        $__internal_59b71a1cb62c63e9d45482ca7c4c283382f324f6bba4357ff34591543acc81e0->enter($__internal_59b71a1cb62c63e9d45482ca7c4c283382f324f6bba4357ff34591543acc81e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Agregar Productos</h2>
\t\t\t<div class=\"box-icon\">
                            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("planillas_lista");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
        
\t\t</div>
\t\t<div class=\"box-content\">
\t\t     <div class=\"box-header well\">
        <h2>
        
        </i>Datos Planilla</h2>
        </h2>
      </div>
      

        <table class=\"table table-bordered table-striped\">
          <tbody>
            <tr><td>Número</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Tipo</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "planillatipo", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Pais</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "pais", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Categoria</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "categoria", array()), "nombre", array()), "html", null, true);
        echo "<td></td></tr>
            
          </tbody>
        </table>
\t\t\t<div id=\"dashboard\">
          <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"planillas\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Producto</th>
                            <th>Fecha Entrada</th>
                            <th>OC</th>
                            <th>Cantidad</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")));
        foreach ($context['_seq'] as $context["_key"] => $context["registro"]) {
            // line 49
            echo "                          <tr>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "nombre", array(), "array"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "marca", array(), "array"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "referencia", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "fechaEntrada", array(), "array"), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            if ((null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "orden", array(), "array"))) {
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "orden", array(), "array"), "consecutivo", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["registro"], "total", array(), "array"), "html", null, true);
            echo "</td>
                            <td>
                             <a class=\"btn btn-success\" href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("planilla_agregar");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "id", array(), "array"), "html", null, true);
            echo "\">Agregar</a></td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Producto</th>
                            <th>Fecha Entrada</th>
                            <th>OC</th>
                            <th>Cantidad</th>
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
        
        $__internal_59b71a1cb62c63e9d45482ca7c4c283382f324f6bba4357ff34591543acc81e0->leave($__internal_59b71a1cb62c63e9d45482ca7c4c283382f324f6bba4357ff34591543acc81e0_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79cb3c271617a868671eaf986d54ba5a7312d4e17dadec4cdd7fdfc13430c1a0 = $this->env->getExtension("native_profiler");
        $__internal_79cb3c271617a868671eaf986d54ba5a7312d4e17dadec4cdd7fdfc13430c1a0->enter($__internal_79cb3c271617a868671eaf986d54ba5a7312d4e17dadec4cdd7fdfc13430c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "
";
        // line 79
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
        
        $__internal_79cb3c271617a868671eaf986d54ba5a7312d4e17dadec4cdd7fdfc13430c1a0->leave($__internal_79cb3c271617a868671eaf986d54ba5a7312d4e17dadec4cdd7fdfc13430c1a0_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:planillarequisicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 79,  204 => 78,  198 => 77,  174 => 58,  161 => 55,  156 => 53,  146 => 52,  142 => 51,  134 => 50,  131 => 49,  127 => 48,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Agregar Productos{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Agregar Productos</h2>*/
/* 			<div class="box-icon">*/
/*                             <a href="{{ path('planillas_lista') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*         */
/* 		</div>*/
/* 		<div class="box-content">*/
/* 		     <div class="box-header well">*/
/*         <h2>*/
/*         */
/*         </i>Datos Planilla</h2>*/
/*         </h2>*/
/*       </div>*/
/*       */
/* */
/*         <table class="table table-bordered table-striped">*/
/*           <tbody>*/
/*             <tr><td>Número</td><td>{{ planilla.id }}</td></tr>*/
/*             <tr><td>Tipo</td><td>{{ planilla.planillatipo.nombre }}</td></tr>*/
/*             <tr><td>Pais</td><td>{{ planilla.pais.nombre }}</td></tr>*/
/*             <tr><td>Categoria</td><td>{{ planilla.categoria.nombre }}<td></td></tr>*/
/*             */
/*           </tbody>*/
/*         </table>*/
/* 			<div id="dashboard">*/
/*           <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="planillas" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Producto</th>*/
/*                             <th>Fecha Entrada</th>*/
/*                             <th>OC</th>*/
/*                             <th>Cantidad</th>*/
/*                             <th></th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for registro in inventario %}*/
/*                           <tr>*/
/*                             <td>{{ registro['inventario']['producto']['nombre'] }} / {{ registro['inventario']['producto']['marca'] }} / {{ registro['inventario']['producto']['referencia'] }}</td>*/
/*                             <td>{{ registro['inventario']['fechaEntrada'] | date("Y-m-d") }}</td>*/
/*                             <td>{% if registro['inventario']['orden'] is null %} {% else %} {{ registro['inventario']['orden']['consecutivo'] }} {% endif %}</td>*/
/*                             <td>{{ registro['total'] }}</td>*/
/*                             <td>*/
/*                              <a class="btn btn-success" href="{{ path("planilla_agregar")}}/{{ id }}/{{registro['inventario']['producto']['id']}}">Agregar</a></td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Producto</th>*/
/*                             <th>Fecha Entrada</th>*/
/*                             <th>OC</th>*/
/*                             <th>Cantidad</th>*/
/*                             <th></th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>   */
/*       </div>*/
/* 		</div>*/
/*     */
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
/* */
