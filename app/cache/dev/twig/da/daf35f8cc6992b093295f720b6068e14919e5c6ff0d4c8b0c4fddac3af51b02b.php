<?php

/* IncentivesOperacionesBundle:Proveedor:listado.html.twig */
class __TwigTemplate_2a79238baaa9143f5713894705ba1254dea0a2018e3728e4d270070ed37a4368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:listado.html.twig", 2);
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
        $__internal_27dfc239d9cc1bb6c563a5b1e99fcadf3a47735405d462402400709627e9a57d = $this->env->getExtension("native_profiler");
        $__internal_27dfc239d9cc1bb6c563a5b1e99fcadf3a47735405d462402400709627e9a57d->enter($__internal_27dfc239d9cc1bb6c563a5b1e99fcadf3a47735405d462402400709627e9a57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27dfc239d9cc1bb6c563a5b1e99fcadf3a47735405d462402400709627e9a57d->leave($__internal_27dfc239d9cc1bb6c563a5b1e99fcadf3a47735405d462402400709627e9a57d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63518076f4a82a918f42ba6e49f9412039d65a627d708162ad9d40ed7c2d68cf = $this->env->getExtension("native_profiler");
        $__internal_63518076f4a82a918f42ba6e49f9412039d65a627d708162ad9d40ed7c2d68cf->enter($__internal_63518076f4a82a918f42ba6e49f9412039d65a627d708162ad9d40ed7c2d68cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proveedores";
        
        $__internal_63518076f4a82a918f42ba6e49f9412039d65a627d708162ad9d40ed7c2d68cf->leave($__internal_63518076f4a82a918f42ba6e49f9412039d65a627d708162ad9d40ed7c2d68cf_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bde6e8f305f8d09424d50776dd18f261745c135248dfe4fb696f77710a274271 = $this->env->getExtension("native_profiler");
        $__internal_bde6e8f305f8d09424d50776dd18f261745c135248dfe4fb696f77710a274271->enter($__internal_bde6e8f305f8d09424d50776dd18f261745c135248dfe4fb696f77710a274271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_bde6e8f305f8d09424d50776dd18f261745c135248dfe4fb696f77710a274271->leave($__internal_bde6e8f305f8d09424d50776dd18f261745c135248dfe4fb696f77710a274271_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_a5febb4cd69b8d9122f62d202ba3e94109e339b7ce3a9d0524fe89056a43982b = $this->env->getExtension("native_profiler");
        $__internal_a5febb4cd69b8d9122f62d202ba3e94109e339b7ce3a9d0524fe89056a43982b->enter($__internal_a5febb4cd69b8d9122f62d202ba3e94109e339b7ce3a9d0524fe89056a43982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\" style=\"width: 1300px !important\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Proveedores</h2>
\t\t\t<div class=\"box-icon\"> 
              <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("proveedores_importar");
        echo "\" title=\"Carga Masiva\" class=\"btn btn-round\"><i class=\"icon-upload\"></i></a>
              <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("proveedores_exportar");
        echo "\" title=\"Descargar\" class=\"btn btn-round\"><i class=\"icon-download\"></i></a>
              <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("proveedores_nuevo");
        echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div class=\"row-fluid\">
                        <div id=\"control1\" class=\"span3\"></div>
                        <div id=\"control2\" class=\"span3\"></div>
                        <div id=\"control3\" class=\"span3\"></div>
                        <div id=\"control4\" class=\"span3\"></div>
                    </div>
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"proveedores\" class=\"display\">
                        <thead  style=\"display:table-row-group;\">
                          <tr>
                            <th>Nombre</th>
                            <th>Identificacion</th>
                            <th>Pais</th>
                            <th>Ciudad</th>
                            <th>Clasificacion</th>
                            <th>Area</th>
                            <th>Tipo</th>
                            <th>Correo</th>
                            <th>Calificación</th>
                            <th>Documentos</th>
                            <th>Catalogos</th>
                            <th>Estado</th>
                          </tr>
                          
                        </thead>
                        <tbody>
                          ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 47
            echo "                          <tr>
                            <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_datos", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "numerodocumento", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            if ((null === $this->getAttribute($context["proveedor"], "pais", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "pais", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 51
            if ((null === $this->getAttribute($context["proveedor"], "ciudad", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "ciudad", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 52
            if ((null === $this->getAttribute($context["proveedor"], "pais", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "pais", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 53
            if ((null === $this->getAttribute($context["proveedor"], "proveedorarea", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "proveedorarea", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 54
            if ((null === $this->getAttribute($context["proveedor"], "proveedortipo", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "proveedortipo", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 55
            if ((null === $this->getAttribute($context["proveedor"], "proveedorclasificacion", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "proveedorclasificacion", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "correo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "calificacion", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "html", null, true);
            echo "</td>
                            <td><div class=\"progress ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "clasedoc", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "html", null, true);
            echo " progress-striped\"><div class=\"bar\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "documentos", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "html", null, true);
            echo "%\"></div></div></td>
                            <td>";
            // line 59
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "catalogo", array(), "any", false, true), $this->getAttribute($context["proveedor"], "id", array()), array(), "array", false, true), "fecha", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "catalogo", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo " ";
            if ($this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "clasecat", array(), "any", false, true), $this->getAttribute($context["proveedor"], "id", array()), array(), "array", true, true)) {
                echo "<a class=\"btn ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "clasecat", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "html", null, true);
                echo "\" href=\"#\"><i class=\"icon-warning-sign\"></i></a>";
            }
            echo "</td>
                            <td>";
            // line 60
            if (($this->getAttribute($this->getAttribute($context["proveedor"], "estado", array()), "id", array()) != 1)) {
                echo "<a class=\"btn btn-danger\" id=\"enlaceajax";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_estado", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
                echo "\">Inactivo</a>";
            } else {
                echo "<a class=\"btn btn-success\" id=\"enlaceajax";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_estado", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
                echo "\">Activo</a>";
            }
            echo "<div id=\"destino";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
            echo "\"></div></td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                          <tr>
                           <th>Nombre</th>
                            <th>Identificacion</th>
                            <th>Pais</th>
                            <th>Ciudad</th>
                            <th>Clasificacion</th>
                            <th>Area</th>
                            <th>Tipo</th>
                            <th>Correo</th>
                            <th>Calificación</th>
                            <th>Documentos</th>
                            <th>Catalogos</th>
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
        
        $__internal_a5febb4cd69b8d9122f62d202ba3e94109e339b7ce3a9d0524fe89056a43982b->leave($__internal_a5febb4cd69b8d9122f62d202ba3e94109e339b7ce3a9d0524fe89056a43982b_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed563d992cc579877a1a2ce8bb47ef80af275b84f3b988df28e55b94dc54791b = $this->env->getExtension("native_profiler");
        $__internal_ed563d992cc579877a1a2ce8bb47ef80af275b84f3b988df28e55b94dc54791b->enter($__internal_ed563d992cc579877a1a2ce8bb47ef80af275b84f3b988df28e55b94dc54791b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "
";
        // line 91
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\"> 
  \$(document).ready(function() {
//    inifuntion
 var table = \$('#proveedores').dataTable({

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
  function confirmar(ruta)
      {
        if (confirm(\"Desea cambiar el estado del proveedor\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>

";
        
        $__internal_ed563d992cc579877a1a2ce8bb47ef80af275b84f3b988df28e55b94dc54791b->leave($__internal_ed563d992cc579877a1a2ce8bb47ef80af275b84f3b988df28e55b94dc54791b_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 91,  264 => 90,  258 => 89,  227 => 63,  204 => 60,  192 => 59,  186 => 58,  182 => 57,  178 => 56,  171 => 55,  164 => 54,  157 => 53,  150 => 52,  143 => 51,  136 => 50,  132 => 49,  126 => 48,  123 => 47,  119 => 46,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Proveedores{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12" style="width: 1300px !important">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Proveedores</h2>*/
/* 			<div class="box-icon"> */
/*               <a href="{{ path('proveedores_importar') }}" title="Carga Masiva" class="btn btn-round"><i class="icon-upload"></i></a>*/
/*               <a href="{{ path('proveedores_exportar') }}" title="Descargar" class="btn btn-round"><i class="icon-download"></i></a>*/
/*               <a href="{{ path('proveedores_nuevo') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div class="row-fluid">*/
/*                         <div id="control1" class="span3"></div>*/
/*                         <div id="control2" class="span3"></div>*/
/*                         <div id="control3" class="span3"></div>*/
/*                         <div id="control4" class="span3"></div>*/
/*                     </div>*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="proveedores" class="display">*/
/*                         <thead  style="display:table-row-group;">*/
/*                           <tr>*/
/*                             <th>Nombre</th>*/
/*                             <th>Identificacion</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Ciudad</th>*/
/*                             <th>Clasificacion</th>*/
/*                             <th>Area</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Correo</th>*/
/*                             <th>Calificación</th>*/
/*                             <th>Documentos</th>*/
/*                             <th>Catalogos</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                           */
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for proveedor in listado %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path("proveedores_datos", {"id": proveedor.id}) }}">{{ proveedor.nombre }}</a></td>*/
/*                             <td>{{ proveedor.numerodocumento }}</td>*/
/*                             <td>{% if proveedor.pais is null %}{% else %}{{ proveedor.pais.nombre }}{% endif %}</td>*/
/*                             <td>{% if proveedor.ciudad is null %}{% else %}{{ proveedor.ciudad.nombre }}{% endif %}</td>*/
/*                             <td>{% if proveedor.pais is null %}{% else %}{{ proveedor.pais.nombre }}{% endif %}</td>*/
/*                             <td>{% if proveedor.proveedorarea is null %}{% else %}{{ proveedor.proveedorarea.nombre }}{% endif %}</td>*/
/*                             <td>{% if proveedor.proveedortipo is null %}{% else %}{{ proveedor.proveedortipo.nombre }}{% endif %}</td>*/
/*                             <td>{% if proveedor.proveedorclasificacion is null %}{% else %}{{ proveedor.proveedorclasificacion.nombre }}{% endif %}</td>*/
/*                             <td>{{ proveedor.correo }}</td>*/
/*                             <td>{{ detalle.calificacion[proveedor.id] }}</td>*/
/*                             <td><div class="progress {{ detalle.clasedoc[proveedor.id] }} progress-striped"><div class="bar" style="width: {{ detalle.documentos[proveedor.id] }}%"></div></div></td>*/
/*                             <td>{%if detalle.catalogo[proveedor.id].fecha is defined %}{{ detalle.catalogo[proveedor.id].fecha | date("Y-m-d") }}{% endif %} {%if detalle.clasecat[proveedor.id] is defined %}<a class="btn {{ detalle.clasecat[proveedor.id] }}" href="#"><i class="icon-warning-sign"></i></a>{% endif %}</td>*/
/*                             <td>{% if (proveedor.estado.id!=1) %}<a class="btn btn-danger" id="enlaceajax{{ proveedor.id }}" href="{{ path("proveedores_estado", {"id": proveedor.id}) }}">Inactivo</a>{% else %}<a class="btn btn-success" id="enlaceajax{{ proveedor.id }}" href="{{ path("proveedores_estado", {"id": proveedor.id}) }}">Activo</a>{% endif %}<div id="destino{{ proveedor.id }}"></div></td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                            <th>Nombre</th>*/
/*                             <th>Identificacion</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Ciudad</th>*/
/*                             <th>Clasificacion</th>*/
/*                             <th>Area</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Correo</th>*/
/*                             <th>Calificación</th>*/
/*                             <th>Documentos</th>*/
/*                             <th>Catalogos</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                           */
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>  */
/*             </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/*   <script type="text/javascript"> */
/*   $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#proveedores').dataTable({*/
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
/*   function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado del proveedor")==true){*/
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
