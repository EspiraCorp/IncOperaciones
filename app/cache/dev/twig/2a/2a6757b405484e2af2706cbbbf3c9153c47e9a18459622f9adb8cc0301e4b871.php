<?php

/* IncentivesSolicitudesBundle:Requisiciones:listado.html.twig */
class __TwigTemplate_916b05b043798b0a2fcf09234df65dfc4c8aa135d0a77dc629fa031bc10c9b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesSolicitudesBundle:Requisiciones:listado.html.twig", 1);
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
        $__internal_88005af2b56192550059134dfe99849b9f194cf5e2dd8453335df5f61553e33a = $this->env->getExtension("native_profiler");
        $__internal_88005af2b56192550059134dfe99849b9f194cf5e2dd8453335df5f61553e33a->enter($__internal_88005af2b56192550059134dfe99849b9f194cf5e2dd8453335df5f61553e33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Requisiciones:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88005af2b56192550059134dfe99849b9f194cf5e2dd8453335df5f61553e33a->leave($__internal_88005af2b56192550059134dfe99849b9f194cf5e2dd8453335df5f61553e33a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ca933f3d7ce13e7cd7c8e890fa238eca904dee351fe9504ae71ffbee668eef9 = $this->env->getExtension("native_profiler");
        $__internal_4ca933f3d7ce13e7cd7c8e890fa238eca904dee351fe9504ae71ffbee668eef9->enter($__internal_4ca933f3d7ce13e7cd7c8e890fa238eca904dee351fe9504ae71ffbee668eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Requisiciones";
        
        $__internal_4ca933f3d7ce13e7cd7c8e890fa238eca904dee351fe9504ae71ffbee668eef9->leave($__internal_4ca933f3d7ce13e7cd7c8e890fa238eca904dee351fe9504ae71ffbee668eef9_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3dcc10b6cc52b4c2e7691b23bf0a0b440796a7d3b8139142e16e9c9b3321cba3 = $this->env->getExtension("native_profiler");
        $__internal_3dcc10b6cc52b4c2e7691b23bf0a0b440796a7d3b8139142e16e9c9b3321cba3->enter($__internal_3dcc10b6cc52b4c2e7691b23bf0a0b440796a7d3b8139142e16e9c9b3321cba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_3dcc10b6cc52b4c2e7691b23bf0a0b440796a7d3b8139142e16e9c9b3321cba3->leave($__internal_3dcc10b6cc52b4c2e7691b23bf0a0b440796a7d3b8139142e16e9c9b3321cba3_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_b0ecf881c550a7b0bed4ed9097a8551f24f084e08e05ad9a93f5c27d519b7481 = $this->env->getExtension("native_profiler");
        $__internal_b0ecf881c550a7b0bed4ed9097a8551f24f084e08e05ad9a93f5c27d519b7481->enter($__internal_b0ecf881c550a7b0bed4ed9097a8551f24f084e08e05ad9a93f5c27d519b7481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Requisiciones</h2>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"requisiciones\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Id</th>
                            <th>Consecutivo</th>
                            <th>Fecha Creacion</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["requisicion"]) {
            // line 26
            echo "                          <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["requisicion"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("requisicion_datos", array("id" => $this->getAttribute($context["requisicion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["requisicion"], "consecutivo", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["requisicion"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requisicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Id</th>
                            <th>Consecutivo</th>
                            <th>Fecha Creacion</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>   
\t\t</div>
\t</div>
</div>
";
        
        $__internal_b0ecf881c550a7b0bed4ed9097a8551f24f084e08e05ad9a93f5c27d519b7481->leave($__internal_b0ecf881c550a7b0bed4ed9097a8551f24f084e08e05ad9a93f5c27d519b7481_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56de645eaf81faeb54185ebd2b29858d353cd1d78cdbad99096e91a284e2ee50 = $this->env->getExtension("native_profiler");
        $__internal_56de645eaf81faeb54185ebd2b29858d353cd1d78cdbad99096e91a284e2ee50->enter($__internal_56de645eaf81faeb54185ebd2b29858d353cd1d78cdbad99096e91a284e2ee50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "
";
        // line 49
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\">
 \$(document).ready(function() {
//    inifuntion
 var table = \$('#requisiciones').dataTable({

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
        
        $__internal_56de645eaf81faeb54185ebd2b29858d353cd1d78cdbad99096e91a284e2ee50->leave($__internal_56de645eaf81faeb54185ebd2b29858d353cd1d78cdbad99096e91a284e2ee50_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Requisiciones:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 49,  141 => 48,  135 => 47,  115 => 32,  106 => 29,  100 => 28,  96 => 27,  93 => 26,  89 => 25,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Requisiciones{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Requisiciones</h2>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="requisiciones" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Consecutivo</th>*/
/*                             <th>Fecha Creacion</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for requisicion in listado %}*/
/*                           <tr>*/
/*                             <td>{{ requisicion.id }}</td>*/
/*                             <td><a href="{{ path("requisicion_datos", {"id": requisicion.id}) }}">{{ requisicion.consecutivo }}</a></td>*/
/*                             <td>{{ requisicion.fechaCreacion | date("Y-m-d") }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Consecutivo</th>*/
/*                             <th>Fecha Creacion</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>   */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/*   <script type="text/javascript">*/
/*  $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#requisiciones').dataTable({*/
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
/* {% endblock %}*/
/* */
/* */
