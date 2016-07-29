<?php

/* IncentivesGarantiasBundle:Redenciones:listadonovedades.html.twig */
class __TwigTemplate_31ef298b24d815f06d7abb861c6cfec0647fc6b9e0c5ca5c4e41cd493f376086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:listadonovedades.html.twig", 1);
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
        $__internal_bfc487aa1695019f7757506ef90af1e4fe52a0b0a250eb36f8c252e6c06fc2c6 = $this->env->getExtension("native_profiler");
        $__internal_bfc487aa1695019f7757506ef90af1e4fe52a0b0a250eb36f8c252e6c06fc2c6->enter($__internal_bfc487aa1695019f7757506ef90af1e4fe52a0b0a250eb36f8c252e6c06fc2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Redenciones:listadonovedades.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc487aa1695019f7757506ef90af1e4fe52a0b0a250eb36f8c252e6c06fc2c6->leave($__internal_bfc487aa1695019f7757506ef90af1e4fe52a0b0a250eb36f8c252e6c06fc2c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78776934129ac6a610be88f2c177457ad82aff643588498d65205762825a9db1 = $this->env->getExtension("native_profiler");
        $__internal_78776934129ac6a610be88f2c177457ad82aff643588498d65205762825a9db1->enter($__internal_78776934129ac6a610be88f2c177457ad82aff643588498d65205762825a9db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Novedades";
        
        $__internal_78776934129ac6a610be88f2c177457ad82aff643588498d65205762825a9db1->leave($__internal_78776934129ac6a610be88f2c177457ad82aff643588498d65205762825a9db1_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cd3b562efcc8d8d9b0a0890de0a3f2e2ce3346a56a7e22e51c5555ca9aa7e68e = $this->env->getExtension("native_profiler");
        $__internal_cd3b562efcc8d8d9b0a0890de0a3f2e2ce3346a56a7e22e51c5555ca9aa7e68e->enter($__internal_cd3b562efcc8d8d9b0a0890de0a3f2e2ce3346a56a7e22e51c5555ca9aa7e68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_cd3b562efcc8d8d9b0a0890de0a3f2e2ce3346a56a7e22e51c5555ca9aa7e68e->leave($__internal_cd3b562efcc8d8d9b0a0890de0a3f2e2ce3346a56a7e22e51c5555ca9aa7e68e_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_f85765f7cac4c355cf0ca6b15b2c89158e8857dc04dcd04a524ecfcfd9709653 = $this->env->getExtension("native_profiler");
        $__internal_f85765f7cac4c355cf0ca6b15b2c89158e8857dc04dcd04a524ecfcfd9709653->enter($__internal_f85765f7cac4c355cf0ca6b15b2c89158e8857dc04dcd04a524ecfcfd9709653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Novedades</h2>
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
                  <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"redenciones\" class=\"display\">
                        <thead style=\"display:table-row-group;\">
                          <tr>
\t\t\t                <th>Programa</th>
                            <th>Fecha</th>
                            <th>Codigo Redencion</th>
                            <th>Participante</th>
                            <th>Documento</th>
                            <th>Observacion</th>
                            <th>Solucion</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["novedades"]) ? $context["novedades"] : $this->getContext($context, "novedades")));
            foreach ($context['_seq'] as $context["_key"] => $context["novedad"]) {
                // line 39
                echo "                          <tr>
\t\t\t                      <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["novedad"], "fecha", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 42
                echo $this->env->getExtension('routing')->getPath("garantiasnovedades_accion");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["novedad"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "codigoredencion", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["novedad"], "redencion", array()), "participante", array()), "documento", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["novedad"], "observacion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["novedad"], "solucion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "tipo", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["novedad"], "estado", array()), "nombre", array()), "html", null, true);
                echo "</td>
                          </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['novedad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                          <tr>
\t\t\t                      <th>Programa</th>
                            <th>Fecha</th>
                            <th>Codigo Redencion</th>
                            <th>Participante</th>
                            <th>Documento</th>
                            <th>Observacion</th>
                            <th>Solucion</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>    
        </div>
            ";
        } else {
            // line 69
            echo "            <div class=\"alert alert-info\">
                      No existen novedades
                    </div>
            ";
        }
        // line 73
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_f85765f7cac4c355cf0ca6b15b2c89158e8857dc04dcd04a524ecfcfd9709653->leave($__internal_f85765f7cac4c355cf0ca6b15b2c89158e8857dc04dcd04a524ecfcfd9709653_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_634d3d5b17e1fb1a51a606b5acb9be228f1b51c172ca50a51dc29d76964cb5ef = $this->env->getExtension("native_profiler");
        $__internal_634d3d5b17e1fb1a51a606b5acb9be228f1b51c172ca50a51dc29d76964cb5ef->enter($__internal_634d3d5b17e1fb1a51a606b5acb9be228f1b51c172ca50a51dc29d76964cb5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "
";
        // line 80
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
        
        $__internal_634d3d5b17e1fb1a51a606b5acb9be228f1b51c172ca50a51dc29d76964cb5ef->leave($__internal_634d3d5b17e1fb1a51a606b5acb9be228f1b51c172ca50a51dc29d76964cb5ef_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:listadonovedades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 80,  199 => 79,  193 => 78,  183 => 73,  177 => 69,  157 => 51,  148 => 48,  144 => 47,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  120 => 42,  116 => 41,  112 => 40,  109 => 39,  105 => 38,  86 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Novedades{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Novedades</h2>*/
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                    */
/*                 </div>*/
/*       </div>*/
/*       */
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {% if novedades!=null %}*/
/* 			<div id="dashboard">                  */
/*                   <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="redenciones" class="display">*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/* 			                <th>Programa</th>*/
/*                             <th>Fecha</th>*/
/*                             <th>Codigo Redencion</th>*/
/*                             <th>Participante</th>*/
/*                             <th>Documento</th>*/
/*                             <th>Observacion</th>*/
/*                             <th>Solucion</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for novedad in novedades %}*/
/*                           <tr>*/
/* 			                      <td>{{ novedad.redencion.participante.programa.nombre }}</td>*/
/*                             <td>{{ novedad.fecha | date("Y-m-d") }}</td>*/
/*                             <td><a href="{{ path("garantiasnovedades_accion") }}/{{ novedad.id }}">{{ novedad.redencion.codigoredencion }}</a></td>*/
/*                             <td>{{ novedad.redencion.participante.nombre }}</td>*/
/*                             <td>{{ novedad.redencion.participante.documento }}</td>*/
/*                             <td>{{ novedad.observacion }}</td>*/
/*                             <td>{{ novedad.solucion }}</td>*/
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
/*                             <th>Solucion</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>    */
/*         </div>*/
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
/*     <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#redenciones').dataTable({*/
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
/* {% endblock %}*/
/* */
/* */
