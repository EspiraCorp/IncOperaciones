<?php

/* IncentivesGarantiasBundle:Redenciones:listado.html.twig */
class __TwigTemplate_2524370a87999f2bde7e5fd8cb0759e28e25dad4c443102b7ad33610dfdf9a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:listado.html.twig", 3);
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
        $__internal_00c1b6849ef43174ebd59e46b6acf4a6a3971423a17c477e792f6721d65f0958 = $this->env->getExtension("native_profiler");
        $__internal_00c1b6849ef43174ebd59e46b6acf4a6a3971423a17c477e792f6721d65f0958->enter($__internal_00c1b6849ef43174ebd59e46b6acf4a6a3971423a17c477e792f6721d65f0958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Redenciones:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00c1b6849ef43174ebd59e46b6acf4a6a3971423a17c477e792f6721d65f0958->leave($__internal_00c1b6849ef43174ebd59e46b6acf4a6a3971423a17c477e792f6721d65f0958_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d5034e88daeb0f24fbc554d04a7d7e3130889fb46d85e5ed78ad64ff5f103a3 = $this->env->getExtension("native_profiler");
        $__internal_9d5034e88daeb0f24fbc554d04a7d7e3130889fb46d85e5ed78ad64ff5f103a3->enter($__internal_9d5034e88daeb0f24fbc554d04a7d7e3130889fb46d85e5ed78ad64ff5f103a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones por programa";
        
        $__internal_9d5034e88daeb0f24fbc554d04a7d7e3130889fb46d85e5ed78ad64ff5f103a3->leave($__internal_9d5034e88daeb0f24fbc554d04a7d7e3130889fb46d85e5ed78ad64ff5f103a3_prof);

    }

    // line 6
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1041e0905dd9dc03623464f11ce55314c58c866215e86854b08137e8250c8633 = $this->env->getExtension("native_profiler");
        $__internal_1041e0905dd9dc03623464f11ce55314c58c866215e86854b08137e8250c8633->enter($__internal_1041e0905dd9dc03623464f11ce55314c58c866215e86854b08137e8250c8633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 7
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_1041e0905dd9dc03623464f11ce55314c58c866215e86854b08137e8250c8633->leave($__internal_1041e0905dd9dc03623464f11ce55314c58c866215e86854b08137e8250c8633_prof);

    }

    // line 9
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_08491cfba5adadfe6a57e5a0b9a8c9d6d1efde5995cb5b26cd155c8011c859ce = $this->env->getExtension("native_profiler");
        $__internal_08491cfba5adadfe6a57e5a0b9a8c9d6d1efde5995cb5b26cd155c8011c859ce->enter($__internal_08491cfba5adadfe6a57e5a0b9a8c9d6d1efde5995cb5b26cd155c8011c859ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 10
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Redenciones por programa</h2>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
          <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"programas_redenciones\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Programa</th>
                            <th>Redenciones</th>
                            <th>Fecha ultima autorizacion</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programas"]) ? $context["programas"] : $this->getContext($context, "programas")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 28
            echo "                          <tr>
                            <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("garantiasredenciones_programa", array("programa" => $this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "total", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            if ($this->getAttribute($context["programa"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programa"], "fecha", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "Aun no se han hecho autorizaciones";
            }
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Programa</th>
                            <th>Redenciones</th>
                            <th>Fecha ultima autorizacion</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
      </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_08491cfba5adadfe6a57e5a0b9a8c9d6d1efde5995cb5b26cd155c8011c859ce->leave($__internal_08491cfba5adadfe6a57e5a0b9a8c9d6d1efde5995cb5b26cd155c8011c859ce_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_632321746cc3771be849ff0b965da155e897b929d6156b00ae9456e7ecc1849c = $this->env->getExtension("native_profiler");
        $__internal_632321746cc3771be849ff0b965da155e897b929d6156b00ae9456e7ecc1849c->enter($__internal_632321746cc3771be849ff0b965da155e897b929d6156b00ae9456e7ecc1849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "
";
        // line 52
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

 <script type=\"text/javascript\">
 \$(document).ready(function() {
//    inifuntion
 var table = \$('#programas_redenciones').dataTable({

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
        
        $__internal_632321746cc3771be849ff0b965da155e897b929d6156b00ae9456e7ecc1849c->leave($__internal_632321746cc3771be849ff0b965da155e897b929d6156b00ae9456e7ecc1849c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  146 => 51,  140 => 50,  119 => 34,  106 => 31,  102 => 30,  96 => 29,  93 => 28,  89 => 27,  70 => 10,  64 => 9,  55 => 7,  49 => 6,  37 => 5,  11 => 3,);
    }
}
/* */
/* */
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
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*           <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="programas_redenciones" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Programa</th>*/
/*                             <th>Redenciones</th>*/
/*                             <th>Fecha ultima autorizacion</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for programa in programas  %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path("garantiasredenciones_programa", {"programa": programa[0].id }) }}">{{ programa[0].nombre }}</a></td>*/
/*                             <td>{{ programa.total }}</td>*/
/*                             <td>{% if (programa.fecha) %}{{ programa.fecha | date("Y-m-d") }}{% else %}Aun no se han hecho autorizaciones{% endif %}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Programa</th>*/
/*                             <th>Redenciones</th>*/
/*                             <th>Fecha ultima autorizacion</th>*/
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
/*  <script type="text/javascript">*/
/*  $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#programas_redenciones').dataTable({*/
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
