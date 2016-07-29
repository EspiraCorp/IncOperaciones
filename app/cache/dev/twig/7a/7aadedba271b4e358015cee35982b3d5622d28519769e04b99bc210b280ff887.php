<?php

/* IncentivesRedencionesBundle:Redencion:programastotalpass.html.twig */
class __TwigTemplate_a5a65764197420fa10dc81ad14c6f15f7c71dc668e1dab83a5beae09acad9913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:programastotalpass.html.twig", 1);
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
        $__internal_3b4b21ad019f0bb50b8de275fa685764521e4b099dfa9c911cf0ecc92e939654 = $this->env->getExtension("native_profiler");
        $__internal_3b4b21ad019f0bb50b8de275fa685764521e4b099dfa9c911cf0ecc92e939654->enter($__internal_3b4b21ad019f0bb50b8de275fa685764521e4b099dfa9c911cf0ecc92e939654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:programastotalpass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4b21ad019f0bb50b8de275fa685764521e4b099dfa9c911cf0ecc92e939654->leave($__internal_3b4b21ad019f0bb50b8de275fa685764521e4b099dfa9c911cf0ecc92e939654_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25786adb5dec75635489c4a03eebd56cade2dc10f76f14ab358e525b71f6e149 = $this->env->getExtension("native_profiler");
        $__internal_25786adb5dec75635489c4a03eebd56cade2dc10f76f14ab358e525b71f6e149->enter($__internal_25786adb5dec75635489c4a03eebd56cade2dc10f76f14ab358e525b71f6e149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones por programa";
        
        $__internal_25786adb5dec75635489c4a03eebd56cade2dc10f76f14ab358e525b71f6e149->leave($__internal_25786adb5dec75635489c4a03eebd56cade2dc10f76f14ab358e525b71f6e149_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d3415ebda251c2524c9dd28ac29313aebfef002b183a6d9d68ca180e20468384 = $this->env->getExtension("native_profiler");
        $__internal_d3415ebda251c2524c9dd28ac29313aebfef002b183a6d9d68ca180e20468384->enter($__internal_d3415ebda251c2524c9dd28ac29313aebfef002b183a6d9d68ca180e20468384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_d3415ebda251c2524c9dd28ac29313aebfef002b183a6d9d68ca180e20468384->leave($__internal_d3415ebda251c2524c9dd28ac29313aebfef002b183a6d9d68ca180e20468384_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_ff28e7ef7252098c41443aee7c01713d6c9dfc0ee113f5736b26f5fc735fe39c = $this->env->getExtension("native_profiler");
        $__internal_ff28e7ef7252098c41443aee7c01713d6c9dfc0ee113f5736b26f5fc735fe39c->enter($__internal_ff28e7ef7252098c41443aee7c01713d6c9dfc0ee113f5736b26f5fc735fe39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programas"]) ? $context["programas"] : $this->getContext($context, "programas")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 26
            echo "                          <tr>
                            <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redenciones_listadototalpass", array("programa" => $this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "total", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
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
        // line 32
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
        
        $__internal_ff28e7ef7252098c41443aee7c01713d6c9dfc0ee113f5736b26f5fc735fe39c->leave($__internal_ff28e7ef7252098c41443aee7c01713d6c9dfc0ee113f5736b26f5fc735fe39c_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0104b7af12669a1d09836d4bcd0ea07475dce28245ca104b45d4b167c3d8776e = $this->env->getExtension("native_profiler");
        $__internal_0104b7af12669a1d09836d4bcd0ea07475dce28245ca104b45d4b167c3d8776e->enter($__internal_0104b7af12669a1d09836d4bcd0ea07475dce28245ca104b45d4b167c3d8776e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "
";
        // line 50
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
        
        $__internal_0104b7af12669a1d09836d4bcd0ea07475dce28245ca104b45d4b167c3d8776e->leave($__internal_0104b7af12669a1d09836d4bcd0ea07475dce28245ca104b45d4b167c3d8776e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:programastotalpass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 50,  146 => 49,  140 => 48,  119 => 32,  106 => 29,  102 => 28,  96 => 27,  93 => 26,  89 => 25,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
/*                             <td><a href="{{ path("redenciones_listadototalpass", {"programa": programa[0].id }) }}">{{ programa[0].nombre }}</a></td>*/
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
/* */
