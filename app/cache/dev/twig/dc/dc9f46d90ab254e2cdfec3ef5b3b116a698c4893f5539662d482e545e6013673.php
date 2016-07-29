<?php

/* IncentivesCatalogoBundle:Programa:listado.html.twig */
class __TwigTemplate_821a23b1239a0d09687bc2aa17816051d49c642bccba7afc19aef187d566ae5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Programa:listado.html.twig", 1);
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
        $__internal_0d035307257690c0d09bec61842b151b288e8c164250175bbd83e53a2d8f6e55 = $this->env->getExtension("native_profiler");
        $__internal_0d035307257690c0d09bec61842b151b288e8c164250175bbd83e53a2d8f6e55->enter($__internal_0d035307257690c0d09bec61842b151b288e8c164250175bbd83e53a2d8f6e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Programa:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d035307257690c0d09bec61842b151b288e8c164250175bbd83e53a2d8f6e55->leave($__internal_0d035307257690c0d09bec61842b151b288e8c164250175bbd83e53a2d8f6e55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b9cec492eb2f726ed835749e54f458095fd7ee6ebeb6380d191b20216e61516 = $this->env->getExtension("native_profiler");
        $__internal_6b9cec492eb2f726ed835749e54f458095fd7ee6ebeb6380d191b20216e61516->enter($__internal_6b9cec492eb2f726ed835749e54f458095fd7ee6ebeb6380d191b20216e61516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Programas";
        
        $__internal_6b9cec492eb2f726ed835749e54f458095fd7ee6ebeb6380d191b20216e61516->leave($__internal_6b9cec492eb2f726ed835749e54f458095fd7ee6ebeb6380d191b20216e61516_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_07a21e7aecf12a2798628491bedd1390f5d9d8d4bb3dbba789f22933545396ad = $this->env->getExtension("native_profiler");
        $__internal_07a21e7aecf12a2798628491bedd1390f5d9d8d4bb3dbba789f22933545396ad->enter($__internal_07a21e7aecf12a2798628491bedd1390f5d9d8d4bb3dbba789f22933545396ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_07a21e7aecf12a2798628491bedd1390f5d9d8d4bb3dbba789f22933545396ad->leave($__internal_07a21e7aecf12a2798628491bedd1390f5d9d8d4bb3dbba789f22933545396ad_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_2d1550d5f9bc7c1fc095de4f4e23a0593234715060708b8337e4285e6dadb224 = $this->env->getExtension("native_profiler");
        $__internal_2d1550d5f9bc7c1fc095de4f4e23a0593234715060708b8337e4285e6dadb224->enter($__internal_2d1550d5f9bc7c1fc095de4f4e23a0593234715060708b8337e4285e6dadb224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
    <div class=\"box-header well\">
      <h2><i class=\"icon-th-list\"></i>Programas</h2>
      <div class=\"box-icon\"> 
              <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("programa_nuevo");
        echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
      </div>
    </div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
              <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"programas\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Cliente</th>
                            <th>Descripcion</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 32
            echo "                          <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programa_datos", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["programa"], "cliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "descripcion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programa"], "fechainicio", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programa"], "fechafin", array()), "Y-m-d"), "html", null, true);
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
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Cliente</th>
                            <th>Descripcion</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div> 
     </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_2d1550d5f9bc7c1fc095de4f4e23a0593234715060708b8337e4285e6dadb224->leave($__internal_2d1550d5f9bc7c1fc095de4f4e23a0593234715060708b8337e4285e6dadb224_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd6fe7cd23e64355b562fa930ecec2c7f15da4ac9bea586b1bc01e05bcd92525 = $this->env->getExtension("native_profiler");
        $__internal_fd6fe7cd23e64355b562fa930ecec2c7f15da4ac9bea586b1bc01e05bcd92525->enter($__internal_fd6fe7cd23e64355b562fa930ecec2c7f15da4ac9bea586b1bc01e05bcd92525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "
";
        // line 62
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
             \"iDisplayLength\": 10,
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
        
        $__internal_fd6fe7cd23e64355b562fa930ecec2c7f15da4ac9bea586b1bc01e05bcd92525->leave($__internal_fd6fe7cd23e64355b562fa930ecec2c7f15da4ac9bea586b1bc01e05bcd92525_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Programa:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 62,  166 => 61,  160 => 60,  136 => 41,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  109 => 34,  105 => 33,  102 => 32,  98 => 31,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Programas{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/*     <div class="box-header well">*/
/*       <h2><i class="icon-th-list"></i>Programas</h2>*/
/*       <div class="box-icon"> */
/*               <a href="{{ path('programa_nuevo') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/*       </div>*/
/*     </div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*               <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="programas" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Nombre</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Descripcion</th>*/
/*                             <th>Fecha Inicio</th>*/
/*                             <th>Fecha Fin</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for programa in listado %}*/
/*                           <tr>*/
/*                             <td>{{ programa.id }}</td>*/
/*                             <td><a href="{{ path("programa_datos", {"id": programa.id}) }}">{{ programa.nombre }}</a></td>*/
/*                             <td>{{ programa.cliente.nombre }}</td>*/
/*                             <td>{{ programa.descripcion }}</td>*/
/*                             <td>{{ programa.fechainicio | date("Y-m-d") }}</td>*/
/*                             <td>{{ programa.fechafin | date("Y-m-d") }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Nombre</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Descripcion</th>*/
/*                             <th>Fecha Inicio</th>*/
/*                             <th>Fecha Fin</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div> */
/*      </div>*/
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
/*              "iDisplayLength": 10,*/
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
/* </script>*/
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
