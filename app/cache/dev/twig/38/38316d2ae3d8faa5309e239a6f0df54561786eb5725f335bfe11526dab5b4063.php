<?php

/* IncentivesInventarioBundle:Inventario:listadoliberar.html.twig */
class __TwigTemplate_44daf52d963ed5abbed7ea36b999d1f4431f238a83b14f830a506d82d3eed8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:listadoliberar.html.twig", 1);
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
        $__internal_f0e6411945ba1c13b537b5f8e12867b4749304974da0c8fc6692d982496b68d3 = $this->env->getExtension("native_profiler");
        $__internal_f0e6411945ba1c13b537b5f8e12867b4749304974da0c8fc6692d982496b68d3->enter($__internal_f0e6411945ba1c13b537b5f8e12867b4749304974da0c8fc6692d982496b68d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:listadoliberar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e6411945ba1c13b537b5f8e12867b4749304974da0c8fc6692d982496b68d3->leave($__internal_f0e6411945ba1c13b537b5f8e12867b4749304974da0c8fc6692d982496b68d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6641f2a7d3d74a4af414bcc7702c5b5fac7aa76ce47d753853ba0bf8d7111fcc = $this->env->getExtension("native_profiler");
        $__internal_6641f2a7d3d74a4af414bcc7702c5b5fac7aa76ce47d753853ba0bf8d7111fcc->enter($__internal_6641f2a7d3d74a4af414bcc7702c5b5fac7aa76ce47d753853ba0bf8d7111fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liberar Inventario";
        
        $__internal_6641f2a7d3d74a4af414bcc7702c5b5fac7aa76ce47d753853ba0bf8d7111fcc->leave($__internal_6641f2a7d3d74a4af414bcc7702c5b5fac7aa76ce47d753853ba0bf8d7111fcc_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2c8bea87a01f31ef6c23e9d90f26c16a4d9813f681cfad37b5415f90a201e52b = $this->env->getExtension("native_profiler");
        $__internal_2c8bea87a01f31ef6c23e9d90f26c16a4d9813f681cfad37b5415f90a201e52b->enter($__internal_2c8bea87a01f31ef6c23e9d90f26c16a4d9813f681cfad37b5415f90a201e52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_2c8bea87a01f31ef6c23e9d90f26c16a4d9813f681cfad37b5415f90a201e52b->leave($__internal_2c8bea87a01f31ef6c23e9d90f26c16a4d9813f681cfad37b5415f90a201e52b_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_82ebf2fa6a2d3058cdf23a5acb8d6a9a4838b13cdffa2f2823182db0194467a4 = $this->env->getExtension("native_profiler");
        $__internal_82ebf2fa6a2d3058cdf23a5acb8d6a9a4838b13cdffa2f2823182db0194467a4->enter($__internal_82ebf2fa6a2d3058cdf23a5acb8d6a9a4838b13cdffa2f2823182db0194467a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Liberar Inventario</h2>

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
                            <th>Redención</th>
                            <th>OC</th>
                            <th>Planilla</th>
                            <th>Observación</th>
                            <th>Liberar</th>
                          </tr>
                  <tr>
                    <th></th>
                    <th><input type=\"text\" id=\"inventario_codigo\" name=\"inventario[codigo]\" style=\"width: 60px\"></th>
                    <th><input type=\"text\" id=\"inventario_producto\" name=\"inventario[nombre]\" style=\"width: 120px\"></th>
                    <th><input type=\"text\" id=\"inventario_marca\" name=\"inventario[marca]\" style=\"width: 60px\"></th>
                    <th><input type=\"text\" id=\"inventario_referencia\" name=\"inventario[referencia]\" style=\"width: 80px\"></th>
                    <th><input type=\"text\" id=\"inventario_codInc\" name=\"inventario[codInc]\" style=\"width: 60px\"></th>
                    <th><input type=\"text\" id=\"inventario_fechaEntrada\" name=\"inventario[fechaEntrada]\" style=\"width: 100px\"></th>
                    <th><input type=\"text\" id=\"inventario_redencion\" name=\"inventario[redencion]\" style=\"width: 100px\"></th>
                    <th><input type=\"text\" id=\"inventario_ordenCompra\" name=\"inventario[ordenCompra]\" style=\"width: 80px\"></th>
                    <th><input type=\"text\" id=\"inventario_planilla\" name=\"inventario[planilla]\" style=\"width: 60px\"></th>
                    <th><input type=\"text\" id=\"inventario_observacion\" name=\"inventario[observacion]\" style=\"width: 120px\"></th>
                    <th><button type=\"submit\" id=\"inventario_Enviar\" name=\"inventario[Enviar]\" class=\"btn btn-primary\">Enviar</button></th>
                  </tr>
              </thead>
              </form>
              <tbody>
                          ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["registro"]) {
            // line 57
            echo "                          <tr>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "id", array(), "array"), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inventario_salida", array("id" => $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "id", array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "codigo", array(), "array"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 60
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "nombre", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 61
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "marca", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 62
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "referencia", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 63
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "producto", array(), "array"), "codInc", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "fechaEntrada", array(), "array"), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "redencion", array(), "array"))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "redencion", array(), "array"), "codigoredencion", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 66
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "orden", array(), "array"))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "orden", array(), "array"), "consecutivo", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 67
            if ( !(null === $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "planilla", array(), "array"))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "planilla", array(), "array"), "id", array(), "array"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "observacion", array(), "array"), "html", null, true);
            echo "</td>
                            <td><input type=\"checkbox\" name=\"id\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["registro"], "inventario", array(), "array"), "id", array(), "array"), "html", null, true);
            echo "\"></td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "              </tbody>
            </table>
          </div>
          <div>
            <div align=\"rigth\">Todos<input id=\"checktodos\" name=\"checktodos\" type=\"checkbox\" /></div>
              <input type=\"submit\" value=\"Liberar\" onclick='check_value(\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("inventario_listadoliberar");
        echo "\")'>
            </div>
          </div>
          
              <div class=\"box span11\">
                <div class=\"box-content\">
                        <div class=\"dataTables_info\">Mostrando ";
        // line 83
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                        </div>
                        <div class=\"pagination pagination-centered\">
                                ";
        // line 86
        echo $this->env->getExtension('knp_pagination')->render((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        echo "                    
                        </div>
                </div>
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_82ebf2fa6a2d3058cdf23a5acb8d6a9a4838b13cdffa2f2823182db0194467a4->leave($__internal_82ebf2fa6a2d3058cdf23a5acb8d6a9a4838b13cdffa2f2823182db0194467a4_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d947ee80cac0e94299140ef8712c4322d9c6de7d060b0a7a472c2f1c52d9628 = $this->env->getExtension("native_profiler");
        $__internal_8d947ee80cac0e94299140ef8712c4322d9c6de7d060b0a7a472c2f1c52d9628->enter($__internal_8d947ee80cac0e94299140ef8712c4322d9c6de7d060b0a7a472c2f1c52d9628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "
";
        // line 97
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
        
        $__internal_8d947ee80cac0e94299140ef8712c4322d9c6de7d060b0a7a472c2f1c52d9628->leave($__internal_8d947ee80cac0e94299140ef8712c4322d9c6de7d060b0a7a472c2f1c52d9628_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:listadoliberar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 97,  253 => 96,  247 => 95,  232 => 86,  222 => 83,  213 => 77,  206 => 72,  197 => 69,  193 => 68,  185 => 67,  177 => 66,  169 => 65,  165 => 64,  158 => 63,  151 => 62,  144 => 61,  137 => 60,  131 => 59,  127 => 58,  124 => 57,  120 => 56,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Liberar Inventario{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Liberar Inventario</h2>*/
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
/*                             <th>Id</th>*/
/*                             <th>Codigo</th>*/
/*                             <th>Producto</th>*/
/*                             <th>Marca</th>*/
/*                             <th>Referencia</th>*/
/*                             <th>Sku</th>*/
/*                             <th>Fecha Entrada</th>*/
/*                             <th>Redención</th>*/
/*                             <th>OC</th>*/
/*                             <th>Planilla</th>*/
/*                             <th>Observación</th>*/
/*                             <th>Liberar</th>*/
/*                           </tr>*/
/*                   <tr>*/
/*                     <th></th>*/
/*                     <th><input type="text" id="inventario_codigo" name="inventario[codigo]" style="width: 60px"></th>*/
/*                     <th><input type="text" id="inventario_producto" name="inventario[nombre]" style="width: 120px"></th>*/
/*                     <th><input type="text" id="inventario_marca" name="inventario[marca]" style="width: 60px"></th>*/
/*                     <th><input type="text" id="inventario_referencia" name="inventario[referencia]" style="width: 80px"></th>*/
/*                     <th><input type="text" id="inventario_codInc" name="inventario[codInc]" style="width: 60px"></th>*/
/*                     <th><input type="text" id="inventario_fechaEntrada" name="inventario[fechaEntrada]" style="width: 100px"></th>*/
/*                     <th><input type="text" id="inventario_redencion" name="inventario[redencion]" style="width: 100px"></th>*/
/*                     <th><input type="text" id="inventario_ordenCompra" name="inventario[ordenCompra]" style="width: 80px"></th>*/
/*                     <th><input type="text" id="inventario_planilla" name="inventario[planilla]" style="width: 60px"></th>*/
/*                     <th><input type="text" id="inventario_observacion" name="inventario[observacion]" style="width: 120px"></th>*/
/*                     <th><button type="submit" id="inventario_Enviar" name="inventario[Enviar]" class="btn btn-primary">Enviar</button></th>*/
/*                   </tr>*/
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
/*                             <td>{% if registro['inventario']['redencion'] is not null %} {{ registro['inventario']['redencion']['codigoredencion'] }} {% endif %}</td>*/
/*                             <td>{% if registro['inventario']['orden'] is not null %} {{ registro['inventario']['orden']['consecutivo'] }} {% endif %}</td>*/
/*                             <td>{% if registro['inventario']['planilla'] is not null %} {{ registro['inventario']['planilla']['id'] }} {% endif %}</td>*/
/*                             <td>{{ registro['inventario']['observacion'] }}</td>*/
/*                             <td><input type="checkbox" name="id" value="{{ registro['inventario']['id'] }}"></td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*           <div>*/
/*             <div align="rigth">Todos<input id="checktodos" name="checktodos" type="checkbox" /></div>*/
/*               <input type="submit" value="Liberar" onclick='check_value("{{ path("inventario_listadoliberar") }}")'>*/
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
/* <script type="text/javascript">*/
/* */
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
/* */
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
/* </script>*/
/* */
/* <script type="text/javascript">*/
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/* </script>*/
/* */
/*     <script>*/
/*         $( "#inventario_fechaEntrada" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
