<?php

/* IncentivesFacturacionBundle:Facturas:facturasprograma.html.twig */
class __TwigTemplate_f1e7fee37a6ad82ebe1ae35a7c486c19ae5739a9c5064293b2da4de1852050d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Facturas:facturasprograma.html.twig", 1);
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
        $__internal_72e538db057da98c73fb98a0ac5d9ef5f581da1f1adbf7f0f65c1bc3f5df2b92 = $this->env->getExtension("native_profiler");
        $__internal_72e538db057da98c73fb98a0ac5d9ef5f581da1f1adbf7f0f65c1bc3f5df2b92->enter($__internal_72e538db057da98c73fb98a0ac5d9ef5f581da1f1adbf7f0f65c1bc3f5df2b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:facturasprograma.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e538db057da98c73fb98a0ac5d9ef5f581da1f1adbf7f0f65c1bc3f5df2b92->leave($__internal_72e538db057da98c73fb98a0ac5d9ef5f581da1f1adbf7f0f65c1bc3f5df2b92_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e8c3ca4c4dd071b6a344b1fcd4e6ce879daee50a3271cb44c23ac3df8fc02c9 = $this->env->getExtension("native_profiler");
        $__internal_7e8c3ca4c4dd071b6a344b1fcd4e6ce879daee50a3271cb44c23ac3df8fc02c9->enter($__internal_7e8c3ca4c4dd071b6a344b1fcd4e6ce879daee50a3271cb44c23ac3df8fc02c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Facturas Programa";
        
        $__internal_7e8c3ca4c4dd071b6a344b1fcd4e6ce879daee50a3271cb44c23ac3df8fc02c9->leave($__internal_7e8c3ca4c4dd071b6a344b1fcd4e6ce879daee50a3271cb44c23ac3df8fc02c9_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_93d20a913f6a4647e79b985eb0e9d0eae231e6f61a035262cbd48ea6aacfc9fa = $this->env->getExtension("native_profiler");
        $__internal_93d20a913f6a4647e79b985eb0e9d0eae231e6f61a035262cbd48ea6aacfc9fa->enter($__internal_93d20a913f6a4647e79b985eb0e9d0eae231e6f61a035262cbd48ea6aacfc9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_93d20a913f6a4647e79b985eb0e9d0eae231e6f61a035262cbd48ea6aacfc9fa->leave($__internal_93d20a913f6a4647e79b985eb0e9d0eae231e6f61a035262cbd48ea6aacfc9fa_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_dfffc3ff351795e6437d87edcca99806d662b9206e7a6222e64473b72dd22151 = $this->env->getExtension("native_profiler");
        $__internal_dfffc3ff351795e6437d87edcca99806d662b9206e7a6222e64473b72dd22151->enter($__internal_dfffc3ff351795e6437d87edcca99806d662b9206e7a6222e64473b72dd22151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Facturas Programa</h2>
\t\t\t<div class=\"box-icon\">
              <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("factura_nueva");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()), "html", null, true);
        echo "\" title=\"Nueva Factura\" class=\"btn btn-primary btn-sm\">
                  <i class=\"icon-plus icon-white\"></i>
              </a> 
      </div>
\t\t</div>
\t\t
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
\t\t\t  <table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
          <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"facturas\" class=\"display\">
                        <thead style=\"display:table-row-group;\" >
                          <tr>
                            <th>Numero</th>
                            <th>Periodo</th>
                            <th>Pais</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 40
            echo "                            <tr>
                              <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_datos", array("id" => $this->getAttribute($context["factura"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "numero", array()), "html", null, true);
            echo "</a></td>
                              <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["factura"], "periodo", array()), "periodo", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["factura"], "pais", array()), "nombre", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["factura"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                              <td></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Numero</th>
                            <th>Periodo</th>
                            <th>Pais</th>
                            <th>Fecha</th>
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
        
        $__internal_dfffc3ff351795e6437d87edcca99806d662b9206e7a6222e64473b72dd22151->leave($__internal_dfffc3ff351795e6437d87edcca99806d662b9206e7a6222e64473b72dd22151_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a4d414d4e0dc7935a80a9cf0a01825e06943d2e18f27e901167b67bd7e45cb5 = $this->env->getExtension("native_profiler");
        $__internal_0a4d414d4e0dc7935a80a9cf0a01825e06943d2e18f27e901167b67bd7e45cb5->enter($__internal_0a4d414d4e0dc7935a80a9cf0a01825e06943d2e18f27e901167b67bd7e45cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "
";
        // line 68
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script type=\"text/javascript\">
 \$(document).ready(function() {
//    inifuntion
 var table = \$('#facturas').dataTable({

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
        
        $__internal_0a4d414d4e0dc7935a80a9cf0a01825e06943d2e18f27e901167b67bd7e45cb5->leave($__internal_0a4d414d4e0dc7935a80a9cf0a01825e06943d2e18f27e901167b67bd7e45cb5_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:facturasprograma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 68,  174 => 67,  168 => 66,  145 => 48,  135 => 44,  131 => 43,  127 => 42,  121 => 41,  118 => 40,  114 => 39,  96 => 24,  92 => 23,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Facturas Programa{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Facturas Programa</h2>*/
/* 			<div class="box-icon">*/
/*               <a href="{{ path('factura_nueva') }}/{{ programa.id }}" title="Nueva Factura" class="btn btn-primary btn-sm">*/
/*                   <i class="icon-plus icon-white"></i>*/
/*               </a> */
/*       </div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/* 			  <table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Programa</td><td>{{ programa.nombre }}</td></tr>*/
/* 						<tr><td>Cliente</td><td>{{ programa.cliente.nombre }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/*           <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="facturas" class="display">*/
/*                         <thead style="display:table-row-group;" >*/
/*                           <tr>*/
/*                             <th>Numero</th>*/
/*                             <th>Periodo</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for factura in listado %}*/
/*                             <tr>*/
/*                               <td><a href="{{ path("factura_datos", {"id": factura.id}) }}">{{ factura.numero }}</a></td>*/
/*                               <td>{{ factura.periodo.periodo }}</td>*/
/*                               <td>{{ factura.pais.nombre }}</td>*/
/*                               <td>{{ factura.fecha | date("Y-m-d") }}</td>*/
/*                               <td></td>*/
/*                             </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Numero</th>*/
/*                             <th>Periodo</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Fecha</th>*/
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
/*  var table = $('#facturas').dataTable({*/
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
