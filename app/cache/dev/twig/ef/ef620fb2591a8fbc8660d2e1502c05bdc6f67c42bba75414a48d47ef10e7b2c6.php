<?php

/* IncentivesCatalogoBundle:Producto:listado.html.2.twig */
class __TwigTemplate_128e253aff500aa72610c01f1ecfa0312cd93a75abf7fad2e6ec655402687524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:listado.html.2.twig", 1);
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
        $__internal_699d5f484a413dcbc6c99030cd0374a8e8f2a6dd3e6e8dac2978333f34f341e4 = $this->env->getExtension("native_profiler");
        $__internal_699d5f484a413dcbc6c99030cd0374a8e8f2a6dd3e6e8dac2978333f34f341e4->enter($__internal_699d5f484a413dcbc6c99030cd0374a8e8f2a6dd3e6e8dac2978333f34f341e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:listado.html.2.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699d5f484a413dcbc6c99030cd0374a8e8f2a6dd3e6e8dac2978333f34f341e4->leave($__internal_699d5f484a413dcbc6c99030cd0374a8e8f2a6dd3e6e8dac2978333f34f341e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03cc48bb8bf8a4f5edb491158f8ab36e6d1014e651d01aca27bb86eb9538a22b = $this->env->getExtension("native_profiler");
        $__internal_03cc48bb8bf8a4f5edb491158f8ab36e6d1014e651d01aca27bb86eb9538a22b->enter($__internal_03cc48bb8bf8a4f5edb491158f8ab36e6d1014e651d01aca27bb86eb9538a22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Productos";
        
        $__internal_03cc48bb8bf8a4f5edb491158f8ab36e6d1014e651d01aca27bb86eb9538a22b->leave($__internal_03cc48bb8bf8a4f5edb491158f8ab36e6d1014e651d01aca27bb86eb9538a22b_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_81449a46bcb3ae3d63960e9f332dfbb66f2127afd1517f512e728efba00176b9 = $this->env->getExtension("native_profiler");
        $__internal_81449a46bcb3ae3d63960e9f332dfbb66f2127afd1517f512e728efba00176b9->enter($__internal_81449a46bcb3ae3d63960e9f332dfbb66f2127afd1517f512e728efba00176b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_81449a46bcb3ae3d63960e9f332dfbb66f2127afd1517f512e728efba00176b9->leave($__internal_81449a46bcb3ae3d63960e9f332dfbb66f2127afd1517f512e728efba00176b9_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_85633db8e34b99d966df3354ca68568961465979f65bcd183eca5503e8106145 = $this->env->getExtension("native_profiler");
        $__internal_85633db8e34b99d966df3354ca68568961465979f65bcd183eca5503e8106145->enter($__internal_85633db8e34b99d966df3354ca68568961465979f65bcd183eca5503e8106145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Productos</h2>
      <div class=\"box-icon\"> 
              <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("producto_editar_mas");
        echo "\" title=\"Edicion Masiva\" class=\"btn btn-round\"><i class=\"icon-edit\"></i></a>
              <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("producto_importar");
        echo "\" title=\"Carga Masiva\" class=\"btn btn-round\"><i class=\"icon-upload\"></i></a>
              <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("producto_exportar");
        echo "\" title=\"Descargar\" class=\"btn btn-round\"><i class=\"icon-download\"></i></a>
              <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("producto_nuevo");
        echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
      </div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                   
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"productos\" class=\"display\">
                        <thead style=\"display:table-row-group;\">
                          <tr>
\t\t\t                      <th>Id</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Referencia</th>
                            <th>Marca</th>
                            <th>EAN</th>
                            <th>SKU</th>
                            <th>Catalogos</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 39
            echo "                          <tr>
\t\t\t                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_datos", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "marca", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codEAN", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</td>
                            <td><div data-toggle=\"tooltip\">";
            // line 47
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "productocatalogo", array())), "html", null, true);
            echo "</div></td>
                            <td>";
            // line 48
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estado", array()), "id", array()) != 1)) {
                echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estado", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Inactivo</a>";
            } else {
                echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estado", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Activo</a>";
            }
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </tbody>
                        <tfoot style=\"display: table-header-group;\">
                          <tr>
\t\t\t                <th>Id</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Referencia</th>
                            <th>Marca</th>
                            <th>EAN</th>
                            <th>SKU</th>
                            <th>Peso</th>
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
        
        $__internal_85633db8e34b99d966df3354ca68568961465979f65bcd183eca5503e8106145->leave($__internal_85633db8e34b99d966df3354ca68568961465979f65bcd183eca5503e8106145_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7d0b1e0363806f73c5171a0f7f8a86c9183a0863869ed418852ba629d97b6a5 = $this->env->getExtension("native_profiler");
        $__internal_c7d0b1e0363806f73c5171a0f7f8a86c9183a0863869ed418852ba629d97b6a5->enter($__internal_c7d0b1e0363806f73c5171a0f7f8a86c9183a0863869ed418852ba629d97b6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "
";
        // line 75
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\">
     \$(document).ready(function() {
//    inifuntion
 var table = \$('#productos').dataTable({

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
        if (confirm(\"Desea cambiar el estado del producto\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>
  
  <script>
\$(document).ready(function(){
    \$('[data-toggle=\"tooltip\"]').tooltip();   
});
</script>

";
        
        $__internal_c7d0b1e0363806f73c5171a0f7f8a86c9183a0863869ed418852ba629d97b6a5->leave($__internal_c7d0b1e0363806f73c5171a0f7f8a86c9183a0863869ed418852ba629d97b6a5_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:listado.html.2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 75,  205 => 74,  199 => 73,  172 => 51,  155 => 48,  151 => 47,  147 => 46,  143 => 45,  139 => 44,  135 => 43,  131 => 42,  125 => 41,  121 => 40,  118 => 39,  114 => 38,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Productos{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Productos</h2>*/
/*       <div class="box-icon"> */
/*               <a href="{{ path('producto_editar_mas') }}" title="Edicion Masiva" class="btn btn-round"><i class="icon-edit"></i></a>*/
/*               <a href="{{ path('producto_importar') }}" title="Carga Masiva" class="btn btn-round"><i class="icon-upload"></i></a>*/
/*               <a href="{{ path('producto_exportar') }}" title="Descargar" class="btn btn-round"><i class="icon-download"></i></a>*/
/*               <a href="{{ path('producto_nuevo') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/*       </div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                    */
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="productos" class="display">*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/* 			                      <th>Id</th>*/
/*                             <th>Nombre</th>*/
/*                             <th>Categoria</th>*/
/*                             <th>Referencia</th>*/
/*                             <th>Marca</th>*/
/*                             <th>EAN</th>*/
/*                             <th>SKU</th>*/
/*                             <th>Catalogos</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for producto in listado %}*/
/*                           <tr>*/
/* 			                <td>{{ producto.producto.id }}</td>*/
/*                             <td><a href="{{ path("producto_datos", {"id": producto.producto.id}) }}">{{ producto.producto.nombre }}</a></td>*/
/*                             <td>{{ producto.producto.categoria.nombre }}</td>*/
/*                             <td>{{ producto.producto.referencia }}</td>*/
/*                             <td>{{ producto.producto.marca }}</td>*/
/*                             <td>{{ producto.producto.codEAN }}</td>*/
/*                             <td>{{ producto.producto.codInc }}</td>*/
/*                             <td><div data-toggle="tooltip">{{ producto.producto.productocatalogo|length }}</div></td>*/
/*                             <td>{% if (producto.producto.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("producto_estado", {"id": producto.producto.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("producto_estado", {"id": producto.producto.id}) }}')" href="#">Activo</a>{% endif %}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                         <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/* 			                <th>Id</th>*/
/*                             <th>Nombre</th>*/
/*                             <th>Categoria</th>*/
/*                             <th>Referencia</th>*/
/*                             <th>Marca</th>*/
/*                             <th>EAN</th>*/
/*                             <th>SKU</th>*/
/*                             <th>Peso</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>   */
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
/*   <script type="text/javascript">*/
/*      $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#productos').dataTable({*/
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
/*   */
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado del producto")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/*   */
/*   <script>*/
/* $(document).ready(function(){*/
/*     $('[data-toggle="tooltip"]').tooltip();   */
/* });*/
/* </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
