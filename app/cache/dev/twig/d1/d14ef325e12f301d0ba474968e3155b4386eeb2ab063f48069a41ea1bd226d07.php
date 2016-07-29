<?php

/* IncentivesRedencionesBundle:Redencion:listado.html.twig */
class __TwigTemplate_796566272f471cd354d32e2deb3c40b53e1da46ea32d4598439968ab4d587a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:listado.html.twig", 1);
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
        $__internal_307580b84b14d3525543a5edb380e0b1b324c6b23cd36815503dfc18fbcb4926 = $this->env->getExtension("native_profiler");
        $__internal_307580b84b14d3525543a5edb380e0b1b324c6b23cd36815503dfc18fbcb4926->enter($__internal_307580b84b14d3525543a5edb380e0b1b324c6b23cd36815503dfc18fbcb4926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_307580b84b14d3525543a5edb380e0b1b324c6b23cd36815503dfc18fbcb4926->leave($__internal_307580b84b14d3525543a5edb380e0b1b324c6b23cd36815503dfc18fbcb4926_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0478c5cda270ffcc64c817ec954dce80eb9e65cf6bbd3699e5571711b735237d = $this->env->getExtension("native_profiler");
        $__internal_0478c5cda270ffcc64c817ec954dce80eb9e65cf6bbd3699e5571711b735237d->enter($__internal_0478c5cda270ffcc64c817ec954dce80eb9e65cf6bbd3699e5571711b735237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones por programa";
        
        $__internal_0478c5cda270ffcc64c817ec954dce80eb9e65cf6bbd3699e5571711b735237d->leave($__internal_0478c5cda270ffcc64c817ec954dce80eb9e65cf6bbd3699e5571711b735237d_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_10b41f48e36e97ce899cc7f7ef2dd2e9485c4423c5a1c4e4e603b020f215c03a = $this->env->getExtension("native_profiler");
        $__internal_10b41f48e36e97ce899cc7f7ef2dd2e9485c4423c5a1c4e4e603b020f215c03a->enter($__internal_10b41f48e36e97ce899cc7f7ef2dd2e9485c4423c5a1c4e4e603b020f215c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_10b41f48e36e97ce899cc7f7ef2dd2e9485c4423c5a1c4e4e603b020f215c03a->leave($__internal_10b41f48e36e97ce899cc7f7ef2dd2e9485c4423c5a1c4e4e603b020f215c03a_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_893e5f72d14581ab4eba4de07c564a7b11c14075eea68862bf861a8572ca9e67 = $this->env->getExtension("native_profiler");
        $__internal_893e5f72d14581ab4eba4de07c564a7b11c14075eea68862bf861a8572ca9e67->enter($__internal_893e5f72d14581ab4eba4de07c564a7b11c14075eea68862bf861a8572ca9e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
                            <th>Sin autorizar</th>
\t\t\t    <th>Canceladas</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redenciones_programa", array("programa" => $this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "total", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            if ((($this->env->getExtension('security')->isGranted("ROLE_EJEC") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_DIR"))) {
                // line 32
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redenciones_datos", array("id" => $this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "pendientes", array()), "html", null, true);
                echo "
                            ";
            } else {
                // line 34
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "pendientes", array()), "html", null, true);
                echo "
                            ";
            }
            // line 36
            echo "                            </td>
\t\t\t    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "canceladas", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
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
        // line 41
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Programa</th>
                            <th>Redenciones</th>
                            <th>Sin autorizar</th>
\t\t\t    <th>Canceladas</th>
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
        
        $__internal_893e5f72d14581ab4eba4de07c564a7b11c14075eea68862bf861a8572ca9e67->leave($__internal_893e5f72d14581ab4eba4de07c564a7b11c14075eea68862bf861a8572ca9e67_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bb424128049dbff29aff5843afeff2ae8b51a34124321f68b99be9164b50444 = $this->env->getExtension("native_profiler");
        $__internal_1bb424128049dbff29aff5843afeff2ae8b51a34124321f68b99be9164b50444->enter($__internal_1bb424128049dbff29aff5843afeff2ae8b51a34124321f68b99be9164b50444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "
";
        // line 61
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
        
        $__internal_1bb424128049dbff29aff5843afeff2ae8b51a34124321f68b99be9164b50444->leave($__internal_1bb424128049dbff29aff5843afeff2ae8b51a34124321f68b99be9164b50444_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  173 => 60,  167 => 59,  144 => 41,  131 => 38,  127 => 37,  124 => 36,  118 => 34,  110 => 32,  108 => 31,  104 => 30,  98 => 29,  95 => 28,  91 => 27,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
/*                             <th>Sin autorizar</th>*/
/* 			    <th>Canceladas</th>*/
/*                             <th>Fecha ultima autorizacion</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for programa in programas  %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path("redenciones_programa", {"programa": programa[0].id }) }}">{{ programa[0].nombre }}</a></td>*/
/*                             <td>{{ programa.total }}</td>*/
/*                             <td>{% if is_granted('ROLE_EJEC') or is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') %}*/
/*                                 <a href="{{ path("redenciones_datos", {"id": programa[0].id }) }}">{{ programa.pendientes }}*/
/*                             {% else %}*/
/*                                 {{ programa.pendientes }}*/
/*                             {% endif %}*/
/*                             </td>*/
/* 			    <td>{{ programa.canceladas }}</td>*/
/*                             <td>{% if (programa.fecha) %}{{ programa.fecha | date("Y-m-d") }}{% else %}Aun no se han hecho autorizaciones{% endif %}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Programa</th>*/
/*                             <th>Redenciones</th>*/
/*                             <th>Sin autorizar</th>*/
/* 			    <th>Canceladas</th>*/
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
