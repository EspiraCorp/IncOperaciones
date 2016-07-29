<?php

/* IncentivesCatalogoBundle:Cliente:listado.html.twig */
class __TwigTemplate_a40f0e313c1d18fac011033e84359f0686a45549e7b6b5f958614fae3cedfd96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Cliente:listado.html.twig", 1);
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
        $__internal_6aef91f807705794bd674dacf93f175e0f2e0dfae8cdcdd37256eacf35ba9503 = $this->env->getExtension("native_profiler");
        $__internal_6aef91f807705794bd674dacf93f175e0f2e0dfae8cdcdd37256eacf35ba9503->enter($__internal_6aef91f807705794bd674dacf93f175e0f2e0dfae8cdcdd37256eacf35ba9503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Cliente:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aef91f807705794bd674dacf93f175e0f2e0dfae8cdcdd37256eacf35ba9503->leave($__internal_6aef91f807705794bd674dacf93f175e0f2e0dfae8cdcdd37256eacf35ba9503_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e54cf6803657b9a6e36430e106d735f86dedc822e31af2e6c2a615e38b2272a6 = $this->env->getExtension("native_profiler");
        $__internal_e54cf6803657b9a6e36430e106d735f86dedc822e31af2e6c2a615e38b2272a6->enter($__internal_e54cf6803657b9a6e36430e106d735f86dedc822e31af2e6c2a615e38b2272a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clientes";
        
        $__internal_e54cf6803657b9a6e36430e106d735f86dedc822e31af2e6c2a615e38b2272a6->leave($__internal_e54cf6803657b9a6e36430e106d735f86dedc822e31af2e6c2a615e38b2272a6_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4f8bd459212391d90011fb1a08a6b2afb4bc6ae827808c4dcc044f924d6a6eaf = $this->env->getExtension("native_profiler");
        $__internal_4f8bd459212391d90011fb1a08a6b2afb4bc6ae827808c4dcc044f924d6a6eaf->enter($__internal_4f8bd459212391d90011fb1a08a6b2afb4bc6ae827808c4dcc044f924d6a6eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_4f8bd459212391d90011fb1a08a6b2afb4bc6ae827808c4dcc044f924d6a6eaf->leave($__internal_4f8bd459212391d90011fb1a08a6b2afb4bc6ae827808c4dcc044f924d6a6eaf_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_36e2973556b6ae4b41d34d5e7dd5df5d3b95514f83bddce7ac9d4b2d1b86adce = $this->env->getExtension("native_profiler");
        $__internal_36e2973556b6ae4b41d34d5e7dd5df5d3b95514f83bddce7ac9d4b2d1b86adce->enter($__internal_36e2973556b6ae4b41d34d5e7dd5df5d3b95514f83bddce7ac9d4b2d1b86adce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
      <h2><i class=\"icon-th-list\"></i>Clientes</h2>
      <div class=\"box-icon\">
           ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_DIR")) {
            // line 14
            echo "              <a href=\"";
            echo $this->env->getExtension('routing')->getPath("cliente_nuevo");
            echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
            ";
        }
        // line 16
        echo "      </div>
    </div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"clientes\" class=\"display\">
                        <thead style=\"display:table-row-group;\"  >
                          <tr>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 33
            echo "                          <tr>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_datos", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cliente"], "tipodocumento", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "numerodocumento", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "direccion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefono", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "correo", array()), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>    
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_36e2973556b6ae4b41d34d5e7dd5df5d3b95514f83bddce7ac9d4b2d1b86adce->leave($__internal_36e2973556b6ae4b41d34d5e7dd5df5d3b95514f83bddce7ac9d4b2d1b86adce_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f177bb8cf80c88488af93da0f9b3036bc41249fcc556fee2cdaad83e1f55ff6 = $this->env->getExtension("native_profiler");
        $__internal_8f177bb8cf80c88488af93da0f9b3036bc41249fcc556fee2cdaad83e1f55ff6->enter($__internal_8f177bb8cf80c88488af93da0f9b3036bc41249fcc556fee2cdaad83e1f55ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "
";
        // line 61
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t
    <script type=\"text/javascript\">
 \$(document).ready(function() {
//    inifuntion
 var table = \$('#clientes').dataTable({

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
        if (confirm(\"Desea cambiar el estado del producto\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>

";
        
        $__internal_8f177bb8cf80c88488af93da0f9b3036bc41249fcc556fee2cdaad83e1f55ff6->leave($__internal_8f177bb8cf80c88488af93da0f9b3036bc41249fcc556fee2cdaad83e1f55ff6_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Cliente:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  168 => 60,  162 => 59,  139 => 41,  130 => 38,  126 => 37,  122 => 36,  116 => 35,  110 => 34,  107 => 33,  103 => 32,  85 => 16,  79 => 14,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Clientes{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/*       <h2><i class="icon-th-list"></i>Clientes</h2>*/
/*       <div class="box-icon">*/
/*            {% if is_granted('ROLE_DIR') %}*/
/*               <a href="{{ path('cliente_nuevo') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/*             {% endif %}*/
/*       </div>*/
/*     </div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="clientes" class="display">*/
/*                         <thead style="display:table-row-group;"  >*/
/*                           <tr>*/
/*                             <th>Nombre</th>*/
/*                             <th>Documento</th>*/
/*                             <th>Direccion</th>*/
/*                             <th>Telefono</th>*/
/*                             <th>Correo</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for cliente in listado %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path("cliente_datos", {"id": cliente.id}) }}">{{ cliente.nombre }}</a></td>*/
/*                             <td>{{ cliente.tipodocumento.nombre }} {{ cliente.numerodocumento }}</td>*/
/*                             <td>{{ cliente.direccion }}</td>*/
/*                             <td>{{ cliente.telefono }}</td>*/
/*                             <td>{{ cliente.correo }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Nombre</th>*/
/*                             <th>Documento</th>*/
/*                             <th>Direccion</th>*/
/*                             <th>Telefono</th>*/
/*                             <th>Correo</th>*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>    */
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
/* 	*/
/*     <script type="text/javascript">*/
/*  $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#clientes').dataTable({*/
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
/*         if (confirm("Desea cambiar el estado del producto")==true){*/
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
