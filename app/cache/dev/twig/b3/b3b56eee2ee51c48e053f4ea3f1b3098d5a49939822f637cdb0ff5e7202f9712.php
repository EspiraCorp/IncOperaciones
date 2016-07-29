<?php

/* IncentivesCatalogoBundle:Producto:buscar.html.twig */
class __TwigTemplate_96e44a37b768e977b0c1b63f906ee41cd9cfeb8518564895eaab6b8542ad95f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesCatalogoBundle:Producto:buscar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basePop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c889799dba7ee48474e1e378e9eeafe3ec68cd4495c82c474b144a1af3808a06 = $this->env->getExtension("native_profiler");
        $__internal_c889799dba7ee48474e1e378e9eeafe3ec68cd4495c82c474b144a1af3808a06->enter($__internal_c889799dba7ee48474e1e378e9eeafe3ec68cd4495c82c474b144a1af3808a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:buscar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c889799dba7ee48474e1e378e9eeafe3ec68cd4495c82c474b144a1af3808a06->leave($__internal_c889799dba7ee48474e1e378e9eeafe3ec68cd4495c82c474b144a1af3808a06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32b7fb9b0897bd9ec6456029dd66f3f526ad196df24bdc1c3fc9062fdd3b69c0 = $this->env->getExtension("native_profiler");
        $__internal_32b7fb9b0897bd9ec6456029dd66f3f526ad196df24bdc1c3fc9062fdd3b69c0->enter($__internal_32b7fb9b0897bd9ec6456029dd66f3f526ad196df24bdc1c3fc9062fdd3b69c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Productos";
        
        $__internal_32b7fb9b0897bd9ec6456029dd66f3f526ad196df24bdc1c3fc9062fdd3b69c0->leave($__internal_32b7fb9b0897bd9ec6456029dd66f3f526ad196df24bdc1c3fc9062fdd3b69c0_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_175d2c231414b307cb37c075c8fb9085009a1a2093e9f5c065dcd761fd5da9e9 = $this->env->getExtension("native_profiler");
        $__internal_175d2c231414b307cb37c075c8fb9085009a1a2093e9f5c065dcd761fd5da9e9->enter($__internal_175d2c231414b307cb37c075c8fb9085009a1a2093e9f5c065dcd761fd5da9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_175d2c231414b307cb37c075c8fb9085009a1a2093e9f5c065dcd761fd5da9e9->leave($__internal_175d2c231414b307cb37c075c8fb9085009a1a2093e9f5c065dcd761fd5da9e9_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_8e031fc22f94a655415406fb783ea5d183e993877fb4f7846145f5a640989fd1 = $this->env->getExtension("native_profiler");
        $__internal_8e031fc22f94a655415406fb783ea5d183e993877fb4f7846145f5a640989fd1->enter($__internal_8e031fc22f94a655415406fb783ea5d183e993877fb4f7846145f5a640989fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">

                   
                    <div id=\"tabla\" class=\"table table-bordered table-striped\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"productos\" class=\"display\">
                        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                          <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
                            <div class=\"box-icon\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</div>
                        <thead style=\"display:table-row-group;\">
                          <tr>
\t\t\t                      <th>";
        // line 19
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Id", "p.id");
        echo "</th>
                            <th>";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Nombre", "p.nombre");
        echo "</th>
                            <th>";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Categoria", "c.nombre");
        echo "</th>
                            <th>";
        // line 22
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Referencia", "p.referencia");
        echo "</th>
                            <th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Marca", "p.marca");
        echo "</th>
                            <th>";
        // line 24
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "EAN", "p.codEAN");
        echo "</th>
                            <th>";
        // line 25
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "SKU", "p.codInc");
        echo "</th>
                            <th>";
        // line 26
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Precio", "pp.precio");
        echo "</th>
                            <th>Catalogos</th>
                            <th>";
        // line 28
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Estado", "e.nombre");
        echo "</th>
                          </tr>
                          <tr>
                            <th><input type=\"text\" id=\"producto_id\" name=\"producto[id]\" style=\"width: 40px\"></th>
\t\t\t                      <th>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referencia", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codEAN", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codInc", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th style=\"width: 300px\">Min<input type=\"text\" id=\"precio_min\" name=\"producto[precio_min]\" style=\"width: 60px\">
                            Max<input type=\"text\" id=\"precio_max\" name=\"producto[precio_max]\" style=\"width: 60px\"></th>
                            <th></th>
                            <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("style" => "width:80px")));
        echo "</th>
                          </tr>
                        </thead>
                        </form>
                        <tbody>
                          ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 47
            echo "                            <tr>
  \t\t\t                      <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()), "html", null, true);
            echo "</td>
                              <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_datos", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
                              <td>";
            // line 50
            if ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "categoria", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                              <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "marca", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codEAN", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 55
            if ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "productoprecio", array())) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "productoprecio", array()), 0, array(), "array"), "precio", array()), 0, ",", "."), "html", null, true);
            }
            echo "</td>
                              <td><div data-toggle=\"tooltip\">";
            // line 56
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "productocatalogo", array())), "html", null, true);
            echo "</div></td>
                              <td>
                                ";
            // line 58
            if ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estado", array())) {
                // line 59
                echo "                                  ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estado", array()), "id", array()) != 1)) {
                    echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estado", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Inactivo</a>
                                  ";
                } else {
                    // line 60
                    echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estado", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Activo</a>
                                  ";
                }
                // line 62
                echo "                                ";
            }
            // line 63
            echo "                              </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </tbody>
                      </table>
                    </div>   
            </div>
\t\t</div>
\t\t
\t\t<div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 77
        echo $this->env->getExtension('knp_pagination')->render((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "                    
                </div>
        </div>
    </div>
\t</div>
</div>
";
        
        $__internal_8e031fc22f94a655415406fb783ea5d183e993877fb4f7846145f5a640989fd1->leave($__internal_8e031fc22f94a655415406fb783ea5d183e993877fb4f7846145f5a640989fd1_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df29bd0ff31c08488e7da55969a06b50207ab554464003221c6c908c0b9e9d51 = $this->env->getExtension("native_profiler");
        $__internal_df29bd0ff31c08488e7da55969a06b50207ab554464003221c6c908c0b9e9d51->enter($__internal_df29bd0ff31c08488e7da55969a06b50207ab554464003221c6c908c0b9e9d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "
";
        // line 87
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
        
        $__internal_df29bd0ff31c08488e7da55969a06b50207ab554464003221c6c908c0b9e9d51->leave($__internal_df29bd0ff31c08488e7da55969a06b50207ab554464003221c6c908c0b9e9d51_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:buscar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 87,  286 => 86,  280 => 85,  266 => 77,  256 => 74,  246 => 66,  238 => 63,  235 => 62,  229 => 60,  221 => 59,  219 => 58,  214 => 56,  208 => 55,  204 => 54,  200 => 53,  196 => 52,  192 => 51,  186 => 50,  180 => 49,  176 => 48,  173 => 47,  169 => 46,  161 => 41,  154 => 37,  150 => 36,  146 => 35,  142 => 34,  138 => 33,  134 => 32,  127 => 28,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  88 => 16,  82 => 15,  78 => 14,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::basePop.html.twig" %}*/
/* */
/* {% block title %}Productos{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* */
/*                    */
/*                     <div id="tabla" class="table table-bordered table-striped" cellspacing="0" width="100%">*/
/*                       <table id="productos" class="display">*/
/*                         {{ form_start(form, { attr: {novalidate: 'novalidate'} }) }}*/
/*                           <form action="{{ path('producto') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
/*                             <th>{{ knp_pagination_sortable(productos, 'Precio', 'pp.precio') }}</th>*/
/*                             <th>Catalogos</th>*/
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
/*                             <th style="width: 300px">Min<input type="text" id="precio_min" name="producto[precio_min]" style="width: 60px">*/
/*                             Max<input type="text" id="precio_max" name="producto[precio_max]" style="width: 60px"></th>*/
/*                             <th></th>*/
/*                             <th>{{ form_widget(form.estado, { 'attr': { 'style' : 'width:80px' }} ) }}</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         </form>*/
/*                         <tbody>*/
/*                           {% for producto in productos %}*/
/*                             <tr>*/
/*   			                      <td>{{ producto.producto.id }}</td>*/
/*                               <td><a href="{{ path("producto_datos", {"id": producto.producto.id}) }}">{{ producto.producto.nombre }}</a></td>*/
/*                               <td>{% if (producto.producto.categoria) %}{{ producto.producto.categoria.nombre }}{% endif %}</td>*/
/*                               <td>{{ producto.producto.referencia }}</td>*/
/*                               <td>{{ producto.producto.marca }}</td>*/
/*                               <td>{{ producto.producto.codEAN }}</td>*/
/*                               <td>{{ producto.producto.codInc }}</td>*/
/*                               <td>{% if producto.producto.productoprecio %}{{ producto.producto.productoprecio[0].precio|number_format(0, ',', '.') }}{% endif %}</td>*/
/*                               <td><div data-toggle="tooltip">{{ producto.producto.productocatalogo|length }}</div></td>*/
/*                               <td>*/
/*                                 {% if (producto.producto.estado) %}*/
/*                                   {% if (producto.producto.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("producto_estado", {"id": producto.producto.id}) }}')" href="#">Inactivo</a>*/
/*                                   {% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("producto_estado", {"id": producto.producto.id}) }}')" href="#">Activo</a>*/
/*                                   {% endif %}*/
/*                                 {% endif %}*/
/*                               </td>*/
/*                             </tr>*/
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
