<?php

/* IncentivesRedencionesBundle:Redencion:datos.html.twig */
class __TwigTemplate_8561b06c7e030735ac2afd1bd0c9abce5d220a74c2e741cc51235096dddecf57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:datos.html.twig", 1);
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
        $__internal_705a988a2006ea86a654fb8b2ac1fa213fcd76219755d58a83f47c89694712a6 = $this->env->getExtension("native_profiler");
        $__internal_705a988a2006ea86a654fb8b2ac1fa213fcd76219755d58a83f47c89694712a6->enter($__internal_705a988a2006ea86a654fb8b2ac1fa213fcd76219755d58a83f47c89694712a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:datos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705a988a2006ea86a654fb8b2ac1fa213fcd76219755d58a83f47c89694712a6->leave($__internal_705a988a2006ea86a654fb8b2ac1fa213fcd76219755d58a83f47c89694712a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7696013335ecd99adffeb5255ea7325a65536148f55cc4677d4287b07ac9d09f = $this->env->getExtension("native_profiler");
        $__internal_7696013335ecd99adffeb5255ea7325a65536148f55cc4677d4287b07ac9d09f->enter($__internal_7696013335ecd99adffeb5255ea7325a65536148f55cc4677d4287b07ac9d09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones por programa";
        
        $__internal_7696013335ecd99adffeb5255ea7325a65536148f55cc4677d4287b07ac9d09f->leave($__internal_7696013335ecd99adffeb5255ea7325a65536148f55cc4677d4287b07ac9d09f_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4e532a9d4115b8a262efcf9702033cbeb4b6d8f3c5afa0a31d56f44ab2e78924 = $this->env->getExtension("native_profiler");
        $__internal_4e532a9d4115b8a262efcf9702033cbeb4b6d8f3c5afa0a31d56f44ab2e78924->enter($__internal_4e532a9d4115b8a262efcf9702033cbeb4b6d8f3c5afa0a31d56f44ab2e78924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_4e532a9d4115b8a262efcf9702033cbeb4b6d8f3c5afa0a31d56f44ab2e78924->leave($__internal_4e532a9d4115b8a262efcf9702033cbeb4b6d8f3c5afa0a31d56f44ab2e78924_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_8dc42306fd6f61f9a96a894d4043c507c0b16dd892b6b48659652f819782cccb = $this->env->getExtension("native_profiler");
        $__internal_8dc42306fd6f61f9a96a894d4043c507c0b16dd892b6b48659652f819782cccb->enter($__internal_8dc42306fd6f61f9a96a894d4043c507c0b16dd892b6b48659652f819782cccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Redenciones por programa</h2>

      <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("redenciones");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
\t\t\t  <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"tabla_redenciones\" class=\"table table-bordered table-striped\">
                        <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("redenciones_datos");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"  enctype=\"multipart/form-data\" method=\"POST\" class=\"form-horizontal\">
                            <div class=\"box-icon\">
                              Todos<input id=\"checktodos\" name=\"checktodos\" type=\"checkbox\" />
                              <input type=\"submit\" value=\"Buscar\" class='btn btn-primary'>
                              
                            </div>
                          <thead  style=\"display:table-row-group;\" >
                            <tr>
                              <th>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Codigo", "r.codigoredencion");
        echo "</th>
                              <th>";
        // line 32
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Participante", "pt.nombre");
        echo "</th>
                              <th>";
        // line 33
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Documento", "pt.documento");
        echo "</th>
                              <th>";
        // line 34
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Producto", "p.nombre");
        echo "</th>
                              <th>";
        // line 35
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Puntos", "r.puntos");
        echo "</th>
                              <th>";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Catalogo", "pc.catalogos");
        echo "</th>
                              <th>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Fecha", "r.fecha");
        echo "</th>
                              <th>Modificar</th>
                            </tr>
                             <tr>
                              <th><input type=\"text\" id=\"redenciones_codigo\" name=\"redenciones[codigoredencion]\"   style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_participante\" name=\"redenciones[nombre]\"  style=\"width: 150px\"></th>
                              <th><input type=\"text\" id=\"redenciones_documento\" name=\"redenciones[documento]\"  style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_producto\" name=\"redenciones[producto]\"  style=\"width: 250px\"></th>
                              <th><input type=\"text\" id=\"redenciones_puntos\" name=\"redenciones[puntos]\"  style=\"width: 100px\"></th>
                              <th>
\t\t\t\t\t\t\t\t  <select style=\"width:140px\" name=\"redenciones[catalogo]\" id=\"redenciones_catalogo\">
\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"\">Seleccionar</option>
\t\t\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogos"]) ? $context["catalogos"] : $this->getContext($context, "catalogos")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "nombre", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t</th>
                              <th><input type=\"text\" id=\"redenciones_fecha\" name=\"redenciones[fecha]\" style=\"width: 100px\"></th>
                              <th></th>
                            </tr>
                          </thead>
                        </form>
                        <tbody>
                          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
            // line 61
            echo "                \t                 <tr>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "codigoredencion", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "tipodocumento", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "documento", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "puntos", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "catalogos", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redencion"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</a></td>
                                    <td><input type=\"checkbox\" id=\"redencion_";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "id", array()), "html", null, true);
            echo "\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "id", array()), "html", null, true);
            echo "\"></a></td>
                                  </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </tbody>
                      </table>
                    </div>
                    
                    <div id=\"tabla\" class=\"row-fluid\"></div>  
                    <input type=\"submit\" value=\"Autorizar\" 
                    \t\tonclick='check_value(\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("redenciones_estado", array("accion" => "autorizar"));
        echo "\")'>
                    <input type=\"submit\" value=\"Cancelar\" 
                    \t\tonclick='check_value(\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("redenciones_estado", array("accion" => "cancelar"));
        echo "\")'>
            </div>
\t\t</div>
\t\t<div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getTotalItemCount", array()), "html", null, true);
        echo " Redenciones
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 88
        echo $this->env->getExtension('knp_pagination')->render((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        echo "                    
                </div>
        </div>
    </div>
\t</div>
</div>
";
        
        $__internal_8dc42306fd6f61f9a96a894d4043c507c0b16dd892b6b48659652f819782cccb->leave($__internal_8dc42306fd6f61f9a96a894d4043c507c0b16dd892b6b48659652f819782cccb_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a96dce871181807942b6f5b2a54e997de4b6c2d2af350edffbd63288fc76a5d = $this->env->getExtension("native_profiler");
        $__internal_6a96dce871181807942b6f5b2a54e997de4b6c2d2af350edffbd63288fc76a5d->enter($__internal_6a96dce871181807942b6f5b2a54e997de4b6c2d2af350edffbd63288fc76a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "
";
        // line 98
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\">
\$(document).ready(function(){
 
  //Checkbox
  \$(\"#checktodos\").change(function(){
    \$(':checkbox').each( function(indice, elemento) {
      if(\$(\"#checktodos\").is(\":checked\")){
        \$(this).attr(\"checked\",true);
\t\$(this).parent().addClass(\"checked\");
      } else {
        \$(this).attr(\"checked\",false);
\t\$(this).parent().removeClass(\"checked\");
      }
    });
  });
 
});
    
    function check_value(ruta)
    { 
      var arreglo=\"\";
    \tvar chk=document.getElementsByName('id');
        for (var i = 0; i < chk.length; i++) {
            if(chk[i].checked){
              arreglo=arreglo+chk[i].value+\",\";
            \t//self.location=ruta+\"/\"+chk[i].value;
            }
        }
        self.location=ruta+\"/\"+arreglo;
    }

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
        
        $__internal_6a96dce871181807942b6f5b2a54e997de4b6c2d2af350edffbd63288fc76a5d->leave($__internal_6a96dce871181807942b6f5b2a54e997de4b6c2d2af350edffbd63288fc76a5d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 98,  266 => 97,  260 => 96,  246 => 88,  236 => 85,  228 => 80,  223 => 78,  215 => 72,  204 => 69,  200 => 68,  196 => 67,  192 => 66,  188 => 65,  182 => 64,  178 => 63,  174 => 62,  171 => 61,  167 => 60,  157 => 52,  146 => 50,  142 => 49,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  90 => 23,  79 => 15,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
/* */
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('redenciones') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/* 			  <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="tabla_redenciones" class="table table-bordered table-striped">*/
/*                         <form action="{{ path('redenciones_datos') }}/{{ id }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">*/
/*                             <div class="box-icon">*/
/*                               Todos<input id="checktodos" name="checktodos" type="checkbox" />*/
/*                               <input type="submit" value="Buscar" class='btn btn-primary'>*/
/*                               */
/*                             </div>*/
/*                           <thead  style="display:table-row-group;" >*/
/*                             <tr>*/
/*                               <th>{{ knp_pagination_sortable(redenciones, 'Codigo', 'r.codigoredencion') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(redenciones, 'Participante', 'pt.nombre') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(redenciones, 'Documento', 'pt.documento') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(redenciones, 'Producto', 'p.nombre') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(redenciones, 'Puntos', 'r.puntos') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(redenciones, 'Catalogo', 'pc.catalogos') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(redenciones, 'Fecha', 'r.fecha') }}</th>*/
/*                               <th>Modificar</th>*/
/*                             </tr>*/
/*                              <tr>*/
/*                               <th><input type="text" id="redenciones_codigo" name="redenciones[codigoredencion]"   style="width: 100px"></th>*/
/*                               <th><input type="text" id="redenciones_participante" name="redenciones[nombre]"  style="width: 150px"></th>*/
/*                               <th><input type="text" id="redenciones_documento" name="redenciones[documento]"  style="width: 100px"></th>*/
/*                               <th><input type="text" id="redenciones_producto" name="redenciones[producto]"  style="width: 250px"></th>*/
/*                               <th><input type="text" id="redenciones_puntos" name="redenciones[puntos]"  style="width: 100px"></th>*/
/*                               <th>*/
/* 								  <select style="width:140px" name="redenciones[catalogo]" id="redenciones_catalogo">*/
/* 									<option selected="selected" value="">Seleccionar</option>*/
/* 									{% for catalogo in catalogos %}*/
/* 										<option value="{{ catalogo.id }}">{{ catalogo.nombre }}</option>*/
/* 									{% endfor %}*/
/* 								  </select>*/
/* 								</th>*/
/*                               <th><input type="text" id="redenciones_fecha" name="redenciones[fecha]" style="width: 100px"></th>*/
/*                               <th></th>*/
/*                             </tr>*/
/*                           </thead>*/
/*                         </form>*/
/*                         <tbody>*/
/*                           {% for redencion in redenciones %}*/
/*                 	                 <tr>*/
/*                                     <td>{{ redencion.codigoredencion }}</td>*/
/*                                     <td>{{ redencion.participante.nombre}}</td>*/
/*                                     <td>{{ redencion.participante.tipodocumento.nombre }} {{ redencion.participante.documento }}</a></td>*/
/*                                     <td>{{ redencion.productocatalogo.producto.nombre }}</a></td>*/
/*                                     <td>{{ redencion.puntos }}</a></td>*/
/*                                     <td>{{ redencion.productocatalogo.catalogos.nombre }}</a></td>*/
/*                                     <td>{{ redencion.fecha | date("Y-m-d") }}</a></td>*/
/*                                     <td><input type="checkbox" id="redencion_{{ redencion.id }}" name="id" value="{{ redencion.id }}"></a></td>*/
/*                                   </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                       </table>*/
/*                     </div>*/
/*                     */
/*                     <div id="tabla" class="row-fluid"></div>  */
/*                     <input type="submit" value="Autorizar" */
/*                     		onclick='check_value("{{ path("redenciones_estado", {"accion": "autorizar"}) }}")'>*/
/*                     <input type="submit" value="Cancelar" */
/*                     		onclick='check_value("{{ path("redenciones_estado", {"accion": "cancelar"}) }}")'>*/
/*             </div>*/
/* 		</div>*/
/* 		<div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ redenciones.getItemNumberPerPage*(redenciones.getCurrentPageNumber-1)+1  }} a {{ redenciones.getItemNumberPerPage*redenciones.getCurrentPageNumber }} de {{ redenciones.getTotalItemCount }} Redenciones*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(redenciones) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* <script type="text/javascript">*/
/* $(document).ready(function(){*/
/*  */
/*   //Checkbox*/
/*   $("#checktodos").change(function(){*/
/*     $(':checkbox').each( function(indice, elemento) {*/
/*       if($("#checktodos").is(":checked")){*/
/*         $(this).attr("checked",true);*/
/* 	$(this).parent().addClass("checked");*/
/*       } else {*/
/*         $(this).attr("checked",false);*/
/* 	$(this).parent().removeClass("checked");*/
/*       }*/
/*     });*/
/*   });*/
/*  */
/* });*/
/*     */
/*     function check_value(ruta)*/
/*     { */
/*       var arreglo="";*/
/*     	var chk=document.getElementsByName('id');*/
/*         for (var i = 0; i < chk.length; i++) {*/
/*             if(chk[i].checked){*/
/*               arreglo=arreglo+chk[i].value+",";*/
/*             	//self.location=ruta+"/"+chk[i].value;*/
/*             }*/
/*         }*/
/*         self.location=ruta+"/"+arreglo;*/
/*     }*/
/* */
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*       */
/*       */
/*     */
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
