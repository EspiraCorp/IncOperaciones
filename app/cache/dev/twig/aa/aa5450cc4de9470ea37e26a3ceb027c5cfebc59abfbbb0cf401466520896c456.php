<?php

/* IncentivesFacturacionBundle:Rentabilidad:listado.html.twig */
class __TwigTemplate_763e6b2527bb1cb349e49f2418cea1fd4518ac5f5ed517e6b98717443e58c99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Rentabilidad:listado.html.twig", 1);
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
        $__internal_127cd810b239c3c571d420c4d4de2abbf72a92c9b97d915f80e0bd79bedfe857 = $this->env->getExtension("native_profiler");
        $__internal_127cd810b239c3c571d420c4d4de2abbf72a92c9b97d915f80e0bd79bedfe857->enter($__internal_127cd810b239c3c571d420c4d4de2abbf72a92c9b97d915f80e0bd79bedfe857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Rentabilidad:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_127cd810b239c3c571d420c4d4de2abbf72a92c9b97d915f80e0bd79bedfe857->leave($__internal_127cd810b239c3c571d420c4d4de2abbf72a92c9b97d915f80e0bd79bedfe857_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f40f7840d4f8f559f5225c4de309517de03a0e18250b0954a60486149d90bf24 = $this->env->getExtension("native_profiler");
        $__internal_f40f7840d4f8f559f5225c4de309517de03a0e18250b0954a60486149d90bf24->enter($__internal_f40f7840d4f8f559f5225c4de309517de03a0e18250b0954a60486149d90bf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rentabilidad";
        
        $__internal_f40f7840d4f8f559f5225c4de309517de03a0e18250b0954a60486149d90bf24->leave($__internal_f40f7840d4f8f559f5225c4de309517de03a0e18250b0954a60486149d90bf24_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0b6c44df48c0414b8b31943603e31f8ebaf8501ea6e827cd06a481555786f8ef = $this->env->getExtension("native_profiler");
        $__internal_0b6c44df48c0414b8b31943603e31f8ebaf8501ea6e827cd06a481555786f8ef->enter($__internal_0b6c44df48c0414b8b31943603e31f8ebaf8501ea6e827cd06a481555786f8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_0b6c44df48c0414b8b31943603e31f8ebaf8501ea6e827cd06a481555786f8ef->leave($__internal_0b6c44df48c0414b8b31943603e31f8ebaf8501ea6e827cd06a481555786f8ef_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_cd41b34b99808a8fc6304bd3bc358ce029155be2731be54a3b6cbf2997f3dc99 = $this->env->getExtension("native_profiler");
        $__internal_cd41b34b99808a8fc6304bd3bc358ce029155be2731be54a3b6cbf2997f3dc99->enter($__internal_cd41b34b99808a8fc6304bd3bc358ce029155be2731be54a3b6cbf2997f3dc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Rentabilidad</h2>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
          <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"programas\" class=\"display\">
                        <thead style=\"display:table-row-group;\" >
                          <tr>
                            <th>Programa</th>
                            <th>Cliente</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 28
            echo "                              <tr>
                                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rentabilidad_programa", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "nombre", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["programa"], "cliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programa"], "fechainicio", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programa"], "fechafin", array()), "Y-m-d"), "html", null, true);
            echo " </td>
                                <td>";
            // line 33
            if (($this->getAttribute($context["programa"], "estado", array()) == "0")) {
                echo "Inactivo";
            } else {
                echo "Activo";
            }
            echo "</td>
                              </tr>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Programa</th>
                            <th>Cliente</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
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
        
        $__internal_cd41b34b99808a8fc6304bd3bc358ce029155be2731be54a3b6cbf2997f3dc99->leave($__internal_cd41b34b99808a8fc6304bd3bc358ce029155be2731be54a3b6cbf2997f3dc99_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3398e3c55198f26a718c711994913821c8b9256d5ed215b045e6e75a71d9f9b = $this->env->getExtension("native_profiler");
        $__internal_a3398e3c55198f26a718c711994913821c8b9256d5ed215b045e6e75a71d9f9b->enter($__internal_a3398e3c55198f26a718c711994913821c8b9256d5ed215b045e6e75a71d9f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "
";
        // line 56
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script type=\"text/javascript\">
 \$(document).ready(function() {
//    inifuntion
 var table = \$('#programas').dataTable({

            \"sDom\": 'T<\"clear\">lfrtip',
             \"bPaginate\": true,
             \"bLengthChange\": true,
             \"bFilter\": true,
             \"bSort\": true,
             \"bInfo\": false,
             \"bAutoWidth\": true,
             \"bJQueryUI\": false,
             \"sPaginationType\": \"full_numbers\",
             \"iDisplayLength\": 20,
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
        
        $__internal_a3398e3c55198f26a718c711994913821c8b9256d5ed215b045e6e75a71d9f9b->leave($__internal_a3398e3c55198f26a718c711994913821c8b9256d5ed215b045e6e75a71d9f9b_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Rentabilidad:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 56,  158 => 55,  152 => 54,  129 => 36,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  98 => 29,  95 => 28,  91 => 27,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Rentabilidad{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Rentabilidad</h2>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*           <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="programas" class="display">*/
/*                         <thead style="display:table-row-group;" >*/
/*                           <tr>*/
/*                             <th>Programa</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Fecha Inicio</th>*/
/*                             <th>Fecha Fin</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                               {% for programa in listado %}*/
/*                               <tr>*/
/*                                 <td><a href="{{ path("rentabilidad_programa", {"id": programa.id}) }}">{{ programa.nombre }}</a></td>*/
/*                                 <td>{{ programa.cliente.nombre }}</td>*/
/*                                 <td>{{ programa.fechainicio | date("Y-m-d")  }}</td>*/
/*                                 <td>{{ programa.fechafin | date("Y-m-d") }} </td>*/
/*                                 <td>{% if (programa.estado=='0') %}Inactivo{% else %}Activo{% endif %}</td>*/
/*                               </tr>*/
/*                               {% endfor %}*/
/*                             </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Programa</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Fecha Inicio</th>*/
/*                             <th>Fecha Fin</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>*/
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
/* 	<script type="text/javascript">*/
/*  $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#programas').dataTable({*/
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
/*              "iDisplayLength": 20,*/
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
