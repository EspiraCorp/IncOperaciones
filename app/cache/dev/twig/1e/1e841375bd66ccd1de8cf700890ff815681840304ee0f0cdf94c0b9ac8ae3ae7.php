<?php

/* IncentivesCatalogoBundle:Producto:listadouniversal.html.twig */
class __TwigTemplate_bcc22043782521a081b177156a9dc82e07af6a217cf99757b4d5601f85488868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:listadouniversal.html.twig", 1);
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
        $__internal_ebe862467778ebb102047e6274323e352f0973cc21f303e21fed9ab0ca322431 = $this->env->getExtension("native_profiler");
        $__internal_ebe862467778ebb102047e6274323e352f0973cc21f303e21fed9ab0ca322431->enter($__internal_ebe862467778ebb102047e6274323e352f0973cc21f303e21fed9ab0ca322431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:listadouniversal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe862467778ebb102047e6274323e352f0973cc21f303e21fed9ab0ca322431->leave($__internal_ebe862467778ebb102047e6274323e352f0973cc21f303e21fed9ab0ca322431_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1eebab2cd3b14b8d95b54cab45e57689272f28f72425d6fae29eb30c07a09daa = $this->env->getExtension("native_profiler");
        $__internal_1eebab2cd3b14b8d95b54cab45e57689272f28f72425d6fae29eb30c07a09daa->enter($__internal_1eebab2cd3b14b8d95b54cab45e57689272f28f72425d6fae29eb30c07a09daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Productos General";
        
        $__internal_1eebab2cd3b14b8d95b54cab45e57689272f28f72425d6fae29eb30c07a09daa->leave($__internal_1eebab2cd3b14b8d95b54cab45e57689272f28f72425d6fae29eb30c07a09daa_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_44a3456352692ccc2c1d7560a28a633f5356af96b937b7752097f504bbd1a4bb = $this->env->getExtension("native_profiler");
        $__internal_44a3456352692ccc2c1d7560a28a633f5356af96b937b7752097f504bbd1a4bb->enter($__internal_44a3456352692ccc2c1d7560a28a633f5356af96b937b7752097f504bbd1a4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_44a3456352692ccc2c1d7560a28a633f5356af96b937b7752097f504bbd1a4bb->leave($__internal_44a3456352692ccc2c1d7560a28a633f5356af96b937b7752097f504bbd1a4bb_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_24436dbc4183f37f99b3850507a5245309354bc00428af58dff5ac0415e108d7 = $this->env->getExtension("native_profiler");
        $__internal_24436dbc4183f37f99b3850507a5245309354bc00428af58dff5ac0415e108d7->enter($__internal_24436dbc4183f37f99b3850507a5245309354bc00428af58dff5ac0415e108d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Productos General</h2>
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
                   
                    <div id=\"tabla\" class=\"table table-bordered table-striped\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"productos\" class=\"display\">
                        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                          <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("producto_listadouniversal");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
                            <div class=\"box-icon\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</div>
                        <thead style=\"display:table-row-group;\">
                          <tr>
\t\t\t                      <th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Id", "p.id");
        echo "</th>
                            <th>";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Nombre", "p.nombre");
        echo "</th>
                            <th>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Categoria", "c.nombre");
        echo "</th>
                            <th>";
        // line 32
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Referencia", "p.referencia");
        echo "</th>
                            <th>";
        // line 33
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Marca", "p.marca");
        echo "</th>
                            <th>";
        // line 34
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "EAN", "p.codEAN");
        echo "</th>
                            <th>";
        // line 35
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "SKU", "p.codInc");
        echo "</th>
                            <th>";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Estado", "e.nombre");
        echo "</th>
                          </tr>
                          <tr>
                            <th><input type=\"text\" id=\"producto_id\" name=\"producto[id]\" style=\"width: 40px\"></th>
\t\t\t                      <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referencia", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codEAN", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codInc", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("style" => "width:80px")));
        echo "</th>
                          </tr>
                        </thead>
                        </form>
                        <tbody>
                          ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 52
            echo "                          <tr>
\t\t\t                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_datos", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 55
            if ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "categoria", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "marca", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codEAN", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</td>
                            <td>
                              ";
            // line 61
            if ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estado", array())) {
                // line 62
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estado", array()), "id", array()) != 1)) {
                    echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estado", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Inactivo</a>
                                ";
                } else {
                    // line 63
                    echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estado", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Activo</a>
                                ";
                }
                // line 65
                echo "                              ";
            }
            // line 66
            echo "                            </td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </tbody>
                      </table>
                    </div>   
            </div>
\t\t</div>
\t\t
\t\t<div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 77
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 80
        echo $this->env->getExtension('knp_pagination')->render((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "                    
                </div>
        </div>
    </div>
\t</div>
</div>
";
        
        $__internal_24436dbc4183f37f99b3850507a5245309354bc00428af58dff5ac0415e108d7->leave($__internal_24436dbc4183f37f99b3850507a5245309354bc00428af58dff5ac0415e108d7_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23c0bb8fa7084e8e380738c93611bf923b78e9b63e77502c498f6d2d8401acf9 = $this->env->getExtension("native_profiler");
        $__internal_23c0bb8fa7084e8e380738c93611bf923b78e9b63e77502c498f6d2d8401acf9->enter($__internal_23c0bb8fa7084e8e380738c93611bf923b78e9b63e77502c498f6d2d8401acf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "
";
        // line 90
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\">
  
      function confirmar(ruta)
      {
        if (confirm(\"Desea cambiar el estado del producto\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
 
    \$(document).ready(function(){
        \$('[data-toggle=\"tooltip\"]').tooltip();   
    });
</script>

";
        
        $__internal_23c0bb8fa7084e8e380738c93611bf923b78e9b63e77502c498f6d2d8401acf9->leave($__internal_23c0bb8fa7084e8e380738c93611bf923b78e9b63e77502c498f6d2d8401acf9_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:listadouniversal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 90,  290 => 89,  284 => 88,  270 => 80,  260 => 77,  250 => 69,  242 => 66,  239 => 65,  233 => 63,  225 => 62,  223 => 61,  218 => 59,  214 => 58,  210 => 57,  206 => 56,  200 => 55,  194 => 54,  190 => 53,  187 => 52,  183 => 51,  175 => 46,  171 => 45,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  110 => 26,  104 => 25,  100 => 24,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Productos General{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Productos General</h2>*/
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
/*                     <div id="tabla" class="table table-bordered table-striped" cellspacing="0" width="100%">*/
/*                       <table id="productos" class="display">*/
/*                         {{ form_start(form, { attr: {novalidate: 'novalidate'} }) }}*/
/*                           <form action="{{ path('producto_listadouniversal') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*                             <div class="box-icon">{{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}</div>*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/* 			                      <th>{{ knp_pagination_sortable(productos, 'Id', 'p.id') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Nombre', 'p.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Categoria', 'c.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Referencia', 'p.referencia') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Marca', 'p.marca') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'EAN', 'p.codEAN') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'SKU', 'p.codInc') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Estado', 'e.nombre') }}</th>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th><input type="text" id="producto_id" name="producto[id]" style="width: 40px"></th>*/
/* 			                      <th>{{ form_widget(form.nombre, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.categoria, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.referencia, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.marca, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.codEAN, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.codInc, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.estado, { 'attr': { 'style' : 'width:80px' }} ) }}</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         </form>*/
/*                         <tbody>*/
/*                           {% for producto in productos %}*/
/*                           <tr>*/
/* 			                <td>{{ producto.producto.id }}</td>*/
/*                             <td><a href="{{ path("producto_datos", {"id": producto.producto.id}) }}">{{ producto.producto.nombre }}</a></td>*/
/*                             <td>{% if (producto.producto.categoria) %}{{ producto.producto.categoria.nombre }}{% endif %}</td>*/
/*                             <td>{{ producto.producto.referencia }}</td>*/
/*                             <td>{{ producto.producto.marca }}</td>*/
/*                             <td>{{ producto.producto.codEAN }}</td>*/
/*                             <td>{{ producto.producto.codInc }}</td>*/
/*                             <td>*/
/*                               {% if (producto.producto.estado) %}*/
/*                                 {% if (producto.producto.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("producto_estado", {"id": producto.producto.id}) }}')" href="#">Inactivo</a>*/
/*                                 {% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("producto_estado", {"id": producto.producto.id}) }}')" href="#">Activo</a>*/
/*                                 {% endif %}*/
/*                               {% endif %}*/
/*                             </td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                       </table>*/
/*                     </div>   */
/*             </div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ productos.getItemNumberPerPage*(productos.getCurrentPageNumber-1)+1  }} a {{ productos.getItemNumberPerPage*productos.getCurrentPageNumber }} de {{ productos.getTotalItemCount }}   Productos*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(productos) }}                    */
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
/*   <script type="text/javascript">*/
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
/*  */
/*     $(document).ready(function(){*/
/*         $('[data-toggle="tooltip"]').tooltip();   */
/*     });*/
/* </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
