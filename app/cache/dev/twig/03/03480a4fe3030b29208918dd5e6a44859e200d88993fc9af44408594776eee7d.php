<?php

/* IncentivesInventarioBundle:Inventario:listadosalida.html.twig */
class __TwigTemplate_9ac35282f6948e6a1b14e5ba85aeb515c77b5e8487591774dfcdf04d7a91d9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:listadosalida.html.twig", 1);
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
        $__internal_c4d0c67b1e997bc1c7885f1e0113406042b977c018f6b4005a33b2a26afb49d0 = $this->env->getExtension("native_profiler");
        $__internal_c4d0c67b1e997bc1c7885f1e0113406042b977c018f6b4005a33b2a26afb49d0->enter($__internal_c4d0c67b1e997bc1c7885f1e0113406042b977c018f6b4005a33b2a26afb49d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:listadosalida.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d0c67b1e997bc1c7885f1e0113406042b977c018f6b4005a33b2a26afb49d0->leave($__internal_c4d0c67b1e997bc1c7885f1e0113406042b977c018f6b4005a33b2a26afb49d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63aea2c37314493fea039e05d2269998bc1800db9d53e36ff5498d9ffd155842 = $this->env->getExtension("native_profiler");
        $__internal_63aea2c37314493fea039e05d2269998bc1800db9d53e36ff5498d9ffd155842->enter($__internal_63aea2c37314493fea039e05d2269998bc1800db9d53e36ff5498d9ffd155842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inventario por salir";
        
        $__internal_63aea2c37314493fea039e05d2269998bc1800db9d53e36ff5498d9ffd155842->leave($__internal_63aea2c37314493fea039e05d2269998bc1800db9d53e36ff5498d9ffd155842_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6da630b2199471452ad62d51e16e48e0d83ae4aca948c3b4edab5ed88628d7f2 = $this->env->getExtension("native_profiler");
        $__internal_6da630b2199471452ad62d51e16e48e0d83ae4aca948c3b4edab5ed88628d7f2->enter($__internal_6da630b2199471452ad62d51e16e48e0d83ae4aca948c3b4edab5ed88628d7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_6da630b2199471452ad62d51e16e48e0d83ae4aca948c3b4edab5ed88628d7f2->leave($__internal_6da630b2199471452ad62d51e16e48e0d83ae4aca948c3b4edab5ed88628d7f2_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_8f11327e0842fcdb3cbf03129bc01592827096c04609bbe1336a651ec7b63510 = $this->env->getExtension("native_profiler");
        $__internal_8f11327e0842fcdb3cbf03129bc01592827096c04609bbe1336a651ec7b63510->enter($__internal_8f11327e0842fcdb3cbf03129bc01592827096c04609bbe1336a651ec7b63510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Inventario por salir</h2>

      <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
          <div id=\"tabla\" class=\"table table-bordered table-striped\" cellspacing=\"0\" width=\"100%\">
            <table id=\"inventario\" class=\"display\">
              <form action=\"\" method=\"POST\" class=\"form-horizontal\">
              <thead style=\"display:table-row-group;\"  >
                <tr>
                  <th>Id</th>
                  <th>Codigo</th>
                  <th>Producto</th>
                  <th>Marca</th>
                  <th>Referencia</th>
                  <th>Sku</th>
                  <th>Fecha Entrada</th>
                  <th>OC</th>
                  <th>Observación</th>
                  <th>Salida</th>
                </tr>
                <tr>
                  <th></th>
                  <th><input type=\"text\" id=\"inventario_codigo\" name=\"inventario[codigo]\" style=\"width: 60px\"></th>
                  <th><input type=\"text\" id=\"inventario_producto\" name=\"inventario[nombre]\" style=\"width: 120px\"></th>
                  <th><input type=\"text\" id=\"inventario_marca\" name=\"inventario[marca]\" style=\"width: 60px\"></th>
                  <th><input type=\"text\" id=\"inventario_referencia\" name=\"inventario[referencia]\" style=\"width: 80px\"></th>
                  <th><input type=\"text\" id=\"inventario_codInc\" name=\"inventario[codInc]\" style=\"width: 60px\"></th>
                  <th><input type=\"text\" id=\"inventario_fechaEntrada\" name=\"inventario[fechaEntrada]\" style=\"width: 100px\"></th>
                  <th><input type=\"text\" id=\"inventario_ordenCompra\" name=\"inventario[ordenCompra]\" style=\"width: 80px\"></th>
                  <th><input type=\"text\" id=\"inventario_observacion\" name=\"inventario[observacion]\" style=\"width: 120px\"></th>
                  <th><button type=\"submit\" id=\"inventario_Enviar\" name=\"inventario[Enviar]\" class=\"btn btn-primary\">Enviar</button></th>
                </tr>
              </thead>
              </form>
              <tbody>
                          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["registro"]) {
            // line 53
            echo "                          <tr>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "id", array(), "array"), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inventario_salida", array("id" => $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "id", array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "codigo", array(), "array"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 56
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "nombre", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 57
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "marca", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 58
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "referencia", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 59
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "codInc", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "fechaEntrada", array(), "array"), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "orden", array(), "array"))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "orden", array(), "array"), "consecutivo", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "observacion", array(), "array"), "html", null, true);
            echo "</td>
                            <td><input type=\"checkbox\" name=\"id\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "id", array(), "array"), "html", null, true);
            echo "\"></td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
            </table>
          </div>
          <div>
            <div align=\"rigth\">Todos<input id=\"checktodos\" name=\"checktodos\" type=\"checkbox\" /></div>
              <input type=\"submit\" value=\"Salida\" onclick='check_value(\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("inventario_listadosalida");
        echo "\")'>
            </div>
          </div>
          
              <div class=\"box span11\">
                <div class=\"box-content\">
                        <div class=\"dataTables_info\">Mostrando ";
        // line 77
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                        </div>
                        <div class=\"pagination pagination-centered\">
                                ";
        // line 80
        echo $this->env->getExtension('knp_pagination')->render((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        echo "                    
                        </div>
                </div>
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_8f11327e0842fcdb3cbf03129bc01592827096c04609bbe1336a651ec7b63510->leave($__internal_8f11327e0842fcdb3cbf03129bc01592827096c04609bbe1336a651ec7b63510_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21c458a2bf49250f43db77269058d72b130204540cb136712c05e29d67b782df = $this->env->getExtension("native_profiler");
        $__internal_21c458a2bf49250f43db77269058d72b130204540cb136712c05e29d67b782df->enter($__internal_21c458a2bf49250f43db77269058d72b130204540cb136712c05e29d67b782df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "
";
        // line 91
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

    <script>
        \$( \"#inventario_fechaEntrada\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>
    
    ";
        // line 143
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_21c458a2bf49250f43db77269058d72b130204540cb136712c05e29d67b782df->leave($__internal_21c458a2bf49250f43db77269058d72b130204540cb136712c05e29d67b782df_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:listadosalida.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 143,  236 => 91,  233 => 90,  227 => 89,  212 => 80,  202 => 77,  193 => 71,  186 => 66,  177 => 63,  173 => 62,  165 => 61,  161 => 60,  154 => 59,  147 => 58,  140 => 57,  133 => 56,  127 => 55,  123 => 54,  120 => 53,  116 => 52,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Inventario por salir{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Inventario por salir</h2>*/
/* */
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*           <div id="tabla" class="table table-bordered table-striped" cellspacing="0" width="100%">*/
/*             <table id="inventario" class="display">*/
/*               <form action="" method="POST" class="form-horizontal">*/
/*               <thead style="display:table-row-group;"  >*/
/*                 <tr>*/
/*                   <th>Id</th>*/
/*                   <th>Codigo</th>*/
/*                   <th>Producto</th>*/
/*                   <th>Marca</th>*/
/*                   <th>Referencia</th>*/
/*                   <th>Sku</th>*/
/*                   <th>Fecha Entrada</th>*/
/*                   <th>OC</th>*/
/*                   <th>Observación</th>*/
/*                   <th>Salida</th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <th></th>*/
/*                   <th><input type="text" id="inventario_codigo" name="inventario[codigo]" style="width: 60px"></th>*/
/*                   <th><input type="text" id="inventario_producto" name="inventario[nombre]" style="width: 120px"></th>*/
/*                   <th><input type="text" id="inventario_marca" name="inventario[marca]" style="width: 60px"></th>*/
/*                   <th><input type="text" id="inventario_referencia" name="inventario[referencia]" style="width: 80px"></th>*/
/*                   <th><input type="text" id="inventario_codInc" name="inventario[codInc]" style="width: 60px"></th>*/
/*                   <th><input type="text" id="inventario_fechaEntrada" name="inventario[fechaEntrada]" style="width: 100px"></th>*/
/*                   <th><input type="text" id="inventario_ordenCompra" name="inventario[ordenCompra]" style="width: 80px"></th>*/
/*                   <th><input type="text" id="inventario_observacion" name="inventario[observacion]" style="width: 120px"></th>*/
/*                   <th><button type="submit" id="inventario_Enviar" name="inventario[Enviar]" class="btn btn-primary">Enviar</button></th>*/
/*                 </tr>*/
/*               </thead>*/
/*               </form>*/
/*               <tbody>*/
/*                           {% for registro in listado %}*/
/*                           <tr>*/
/*                             <td>{{ registro['inventario']['id'] }}</td>*/
/*                             <td><a href="{{ path("inventario_salida", {"id": registro['inventario']['id'] }) }}">{{ registro['inventario']['codigo'] }}</a></td>*/
/*                             <td>{% if registro['inventario']['producto'] is not null %}{{ registro['inventario']['producto']['nombre'] }} {% endif %}</td>*/
/*                             <td>{% if registro['inventario']['producto'] is not null %}{{ registro['inventario']['producto']['marca'] }} {% endif %}</td>*/
/*                             <td>{% if registro['inventario']['producto'] is not null %}{{ registro['inventario']['producto']['referencia'] }} {% endif %}</td>*/
/*                             <td>{% if registro['inventario']['producto'] is not null %}{{ registro['inventario']['producto']['codInc'] }} {% endif %}</td>*/
/*                             <td>{{ registro['inventario']['fechaEntrada'] | date("Y-m-d") }}</td>*/
/*                             <td>{% if registro['inventario']['orden'] is not null %} {{ registro['inventario']['orden']['consecutivo'] }} {% endif %}</td>*/
/*                             <td>{{ registro['inventario']['observacion'] }}</td>*/
/*                             <td><input type="checkbox" name="id" value="{{ registro['inventario']['id'] }}"></td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*           <div>*/
/*             <div align="rigth">Todos<input id="checktodos" name="checktodos" type="checkbox" /></div>*/
/*               <input type="submit" value="Salida" onclick='check_value("{{ path("inventario_listadosalida") }}")'>*/
/*             </div>*/
/*           </div>*/
/*           */
/*               <div class="box span11">*/
/*                 <div class="box-content">*/
/*                         <div class="dataTables_info">Mostrando {{ listado.getItemNumberPerPage*(listado.getCurrentPageNumber-1)+1  }} a {{ listado.getItemNumberPerPage*listado.getCurrentPageNumber }} de {{ listado.getTotalItemCount }}   Productos*/
/*                         </div>*/
/*                         <div class="pagination pagination-centered">*/
/*                                 {{ knp_pagination_render(listado) }}                    */
/*                         </div>*/
/*                 </div>*/
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
/*     <script type="text/javascript">*/
/*   */
/*       $(document).ready(function(){*/
/*        */
/*         //Checkbox*/
/*         $("#checktodos").change(function(){*/
/*           $(':checkbox').each( function(indice, elemento) {*/
/*             if($("#checktodos").is(":checked")){*/
/*               $(this).attr("checked",true);*/
/*       	$(this).parent().addClass("checked");*/
/*             } else {*/
/*               $(this).attr("checked",false);*/
/*       	$(this).parent().removeClass("checked");*/
/*             }*/
/*           });*/
/*         });*/
/*        */
/*       });*/
/*         */
/*       function check_value(ruta)*/
/*       { */
/*         var arreglo="";*/
/*       	var chk=document.getElementsByName('id');*/
/*           for (var i = 0; i < chk.length; i++) {*/
/*               if(chk[i].checked){*/
/*                 arreglo=arreglo+chk[i].value+",";*/
/*               	//self.location=ruta+"/"+chk[i].value;*/
/*               }*/
/*           }*/
/*           self.location=ruta+"/"+arreglo;*/
/*       }*/
/*   */
/*     </script>*/
/*   */
/*     <script type="text/javascript">*/
/*       */
/*       function confirmar(ruta)*/
/*       {*/
/*           if (confirm("Desea cambiar el estado")==true){*/
/*               self.location=ruta;*/
/*           }else{*/
/*               alert("OK");*/
/*           }*/
/*       }*/
/*     </script>*/
/* */
/*     <script>*/
/*         $( "#inventario_fechaEntrada" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/*     */
/*     {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
