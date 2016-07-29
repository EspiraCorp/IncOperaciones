<?php

/* IncentivesFacturacionBundle:Facturas:listado.html.twig */
class __TwigTemplate_82a9804d0620aa1e5cadb04c59a1398fc66b49bc7b156a4de2460bdcc24892af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Facturas:listado.html.twig", 1);
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
        $__internal_c4f5d2cf6594b8fb7939e19bfff8fd9450ecea95327a3007c4f2bb7a7f3da258 = $this->env->getExtension("native_profiler");
        $__internal_c4f5d2cf6594b8fb7939e19bfff8fd9450ecea95327a3007c4f2bb7a7f3da258->enter($__internal_c4f5d2cf6594b8fb7939e19bfff8fd9450ecea95327a3007c4f2bb7a7f3da258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f5d2cf6594b8fb7939e19bfff8fd9450ecea95327a3007c4f2bb7a7f3da258->leave($__internal_c4f5d2cf6594b8fb7939e19bfff8fd9450ecea95327a3007c4f2bb7a7f3da258_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ce5cc9a5ffbeafcffd8f820cbc15e4373e24f074f90c3158c7695878a72647a = $this->env->getExtension("native_profiler");
        $__internal_4ce5cc9a5ffbeafcffd8f820cbc15e4373e24f074f90c3158c7695878a72647a->enter($__internal_4ce5cc9a5ffbeafcffd8f820cbc15e4373e24f074f90c3158c7695878a72647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Facturación";
        
        $__internal_4ce5cc9a5ffbeafcffd8f820cbc15e4373e24f074f90c3158c7695878a72647a->leave($__internal_4ce5cc9a5ffbeafcffd8f820cbc15e4373e24f074f90c3158c7695878a72647a_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_22a2d0405a1b708e34e376b1fcd52673cbbc67a907b27ebff42b0aafc34b05a9 = $this->env->getExtension("native_profiler");
        $__internal_22a2d0405a1b708e34e376b1fcd52673cbbc67a907b27ebff42b0aafc34b05a9->enter($__internal_22a2d0405a1b708e34e376b1fcd52673cbbc67a907b27ebff42b0aafc34b05a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_22a2d0405a1b708e34e376b1fcd52673cbbc67a907b27ebff42b0aafc34b05a9->leave($__internal_22a2d0405a1b708e34e376b1fcd52673cbbc67a907b27ebff42b0aafc34b05a9_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_5b33167b9e7baf820a01323d2b83bea87599ec3dd4449ca52a261bcc7fd36a14 = $this->env->getExtension("native_profiler");
        $__internal_5b33167b9e7baf820a01323d2b83bea87599ec3dd4449ca52a261bcc7fd36a14->enter($__internal_5b33167b9e7baf820a01323d2b83bea87599ec3dd4449ca52a261bcc7fd36a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Facturación</h2>
\t\t\t<div class=\"box-icon\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("factura_generarsegmentado");
        echo "\" title=\"Generar\" class=\"btn btn-primary btn-info\">
                    <i class=\"icon-cog icon-white\"></i>
                </a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
          <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"programas\" class=\"display\">
                        <thead style=\"display:table-row-group;\" >
                          <tr>
                            <th>Programa</th>
                            <th>Cliente</th>
                            <th>Ultimo Período</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                              ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 32
            echo "                              <tr>
                                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturas_listado", array("programa" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "nombre", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["programa"], "cliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "fechaFactura", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
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
        // line 39
        echo "                            </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Programa</th>
                            <th>Cliente</th>
                            <th>Ultimo Período</th>
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
        
        $__internal_5b33167b9e7baf820a01323d2b83bea87599ec3dd4449ca52a261bcc7fd36a14->leave($__internal_5b33167b9e7baf820a01323d2b83bea87599ec3dd4449ca52a261bcc7fd36a14_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8591a60a250cca50cf4d88af953b63ecf2e76a44cea61da63ee3323216085ebc = $this->env->getExtension("native_profiler");
        $__internal_8591a60a250cca50cf4d88af953b63ecf2e76a44cea61da63ee3323216085ebc->enter($__internal_8591a60a250cca50cf4d88af953b63ecf2e76a44cea61da63ee3323216085ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "
";
        // line 58
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
        
        $__internal_8591a60a250cca50cf4d88af953b63ecf2e76a44cea61da63ee3323216085ebc->leave($__internal_8591a60a250cca50cf4d88af953b63ecf2e76a44cea61da63ee3323216085ebc_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 58,  160 => 57,  154 => 56,  132 => 39,  119 => 36,  115 => 35,  111 => 34,  105 => 33,  102 => 32,  98 => 31,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Facturación{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Facturación</h2>*/
/* 			<div class="box-icon">*/
/*                 <a href="{{ path('factura_generarsegmentado') }}" title="Generar" class="btn btn-primary btn-info">*/
/*                     <i class="icon-cog icon-white"></i>*/
/*                 </a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*           <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="programas" class="display">*/
/*                         <thead style="display:table-row-group;" >*/
/*                           <tr>*/
/*                             <th>Programa</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Ultimo Período</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                               {% for programa in listado %}*/
/*                               <tr>*/
/*                                 <td><a href="{{ path("facturas_listado", {"programa": programa.id}) }}">{{ programa.nombre }}</a></td>*/
/*                                 <td>{{ programa.cliente.nombre }}</td>*/
/*                                 <td>{{ programa.fechaFactura }}</td>*/
/*                                 <td>{% if (programa.estado=='0') %}Inactivo{% else %}Activo{% endif %}</td>*/
/*                               </tr>*/
/*                               {% endfor %}*/
/*                             </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Programa</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Ultimo Período</th>*/
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
