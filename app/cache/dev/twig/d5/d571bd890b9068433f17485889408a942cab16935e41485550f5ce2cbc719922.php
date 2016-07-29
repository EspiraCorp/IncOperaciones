<?php

/* IncentivesCatalogoBundle:Catalogos:catalogoimagenes.html.twig */
class __TwigTemplate_c8c4cfe65894b765cb279761c9fcf1dd3ed1fa29d9fcba6abf4aac87eb7914cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:catalogoimagenes.html.twig", 1);
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
        $__internal_efe1844e8b4135f188a7c780debb14a11af29515bd8e219c41257e75fec9c115 = $this->env->getExtension("native_profiler");
        $__internal_efe1844e8b4135f188a7c780debb14a11af29515bd8e219c41257e75fec9c115->enter($__internal_efe1844e8b4135f188a7c780debb14a11af29515bd8e219c41257e75fec9c115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:catalogoimagenes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe1844e8b4135f188a7c780debb14a11af29515bd8e219c41257e75fec9c115->leave($__internal_efe1844e8b4135f188a7c780debb14a11af29515bd8e219c41257e75fec9c115_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f168d956c1990b0a786a844d1b8b09564655cb1d98a1ca560ee71b5dbc8c2c02 = $this->env->getExtension("native_profiler");
        $__internal_f168d956c1990b0a786a844d1b8b09564655cb1d98a1ca560ee71b5dbc8c2c02->enter($__internal_f168d956c1990b0a786a844d1b8b09564655cb1d98a1ca560ee71b5dbc8c2c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogo Imagenes";
        
        $__internal_f168d956c1990b0a786a844d1b8b09564655cb1d98a1ca560ee71b5dbc8c2c02->leave($__internal_f168d956c1990b0a786a844d1b8b09564655cb1d98a1ca560ee71b5dbc8c2c02_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_dbf214dac144f62f32b1e7d82bc6f55c6c933d6abd1a58112091bd59831331ed = $this->env->getExtension("native_profiler");
        $__internal_dbf214dac144f62f32b1e7d82bc6f55c6c933d6abd1a58112091bd59831331ed->enter($__internal_dbf214dac144f62f32b1e7d82bc6f55c6c933d6abd1a58112091bd59831331ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_dbf214dac144f62f32b1e7d82bc6f55c6c933d6abd1a58112091bd59831331ed->leave($__internal_dbf214dac144f62f32b1e7d82bc6f55c6c933d6abd1a58112091bd59831331ed_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_796cb4b12b20803d747fe366d7b132cfc8f8c0e7a0d4d67e934e156a7b4d8897 = $this->env->getExtension("native_profiler");
        $__internal_796cb4b12b20803d747fe366d7b132cfc8f8c0e7a0d4d67e934e156a7b4d8897->enter($__internal_796cb4b12b20803d747fe366d7b132cfc8f8c0e7a0d4d67e934e156a7b4d8897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Catalogo Imagenes</h2> 
      <a class=\"btn btn-mini btn-success\" style=\"margin-left: 20px\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_imagenes", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
        echo "\">
        Descargar Completo
      </a>
      <div class=\"box-icon\">
          <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_datos", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
      </div>
\t\t</div>
\t\t<div class=\"box-content\">
      ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                          <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">

                            <table class=\"table table-bordered table-striped\">
                            <tr>
                              <th>Catálogo</th><th colspan=\"2\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "nombre", array()), "html", null, true);
        echo "</th>
                              <th>Programa</th><th colspan=\"2\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "programa", array()), "nombre", array()), "html", null, true);
        echo "</th>
                              <th><div class=\"box-icon\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</</th>
                            </tr>
                            <tr>
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
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "SKU", "p.codInc");
        echo "</th>
                              <th>";
        // line 35
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Estado", "pc.activo");
        echo "</th>
                              <th>";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Valor", "pc.precio");
        echo "</th>
                            </tr>
                            <tr>
                              <th>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referencia", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                              <th>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codInc", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                              <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("style" => "width:80px")));
        echo "</th>
                              <th><input type=\"text\" style=\"width:150px\" maxlength=\"255\" name=\"producto[precio]\" id=\"producto_precio\"></th>
                              </tr>
                          </table>
                        </form>
      <div align=\"rigth\">Todos<input id=\"checktodos\" name=\"checktodos\" type=\"checkbox\" /></div>
      <br>
      ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 52
            echo "        ";
            $context["i"] = 0;
            // line 53
            echo "          <div class=\"box span\" style=\"height: 330px; width:230px\">
            <div class=\"box-header well\" data-original-title=\"\">
              <h2>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"box-content\">
                  <ul class=\"thumbnails gallery\">
                    ";
            // line 59
            if ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array())) {
                // line 60
                echo "                    <li id=\"imagen-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"thumbnail\" style=\"widht: 100px\">
                      <a class=\"cboxElement\" href=\"../../../../";
                // line 61
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), "html", null, true);
                echo "\" style=\"background:url(../../../../";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), 0,  -4), "html", null, true);
                echo "_min.jpg)\">
                        <img alt=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
                echo "\" src=\"../../../";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), 0,  -4), "html", null, true);
                echo "_min.jpg\" style=\"display: block;\">
                      </a>
                    </li>
                    ";
            }
            // line 66
            echo "                  </ul>
              <table class=\"table\">
                <tbody>
                  <tr>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                  </tr>
                  <tr>
                    <td>Puntos: ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "puntos", array()), "html", null, true);
            echo "</td>
                  </tr>
                  ";
            // line 75
            if ((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT")) || $this->env->getExtension('security')->isGranted("ROLE_EJEC")) || $this->env->getExtension('security')->isGranted("ROLE_COM"))) {
                // line 76
                echo "                   <tr>
                     ";
                // line 77
                $context["valorventa"] = (($this->getAttribute($context["producto"], "precio", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100))) + $this->getAttribute($context["producto"], "logistica", array()));
                // line 78
                echo "                    <td>Precio de Venta: \$ ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")), 0, "ceil"), 0, ",", "."), "html", null, true);
                echo "</td>
                  </tr>
                  ";
            }
            // line 81
            echo "                  <tr align=\"center\">
                    <td align=\"center\">Seleccionar <input type=\"checkbox\" id=\"producto_";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\"></a></td>
                  </tr>
                </tbody>
              </table>     
              
            </div>
          </div>       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "  
        
\t\t</div>

   <div class=\"box span11\">
        <div class=\"box-content\">
                <div style=\"padding-left: 400px\">
                    <input type=\"submit\" value=\"Descargar\" class=\"btn btn-success\" onclick='check_value(\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("catalogo_imagenes");
        echo "\")'>
                </div>
                <div class=\"dataTables_info\">Mostrando ";
        // line 98
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 101
        echo $this->env->getExtension('knp_pagination')->render((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "                    
                </div>
        </div>
    </div>

\t</div>

</div>
";
        
        $__internal_796cb4b12b20803d747fe366d7b132cfc8f8c0e7a0d4d67e934e156a7b4d8897->leave($__internal_796cb4b12b20803d747fe366d7b132cfc8f8c0e7a0d4d67e934e156a7b4d8897_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20459f68ad4f31840f9e6060b33f45815206b03cbdc98c24ceb65ed83bdb3387 = $this->env->getExtension("native_profiler");
        $__internal_20459f68ad4f31840f9e6060b33f45815206b03cbdc98c24ceb65ed83bdb3387->enter($__internal_20459f68ad4f31840f9e6060b33f45815206b03cbdc98c24ceb65ed83bdb3387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
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
      var chk=document.getElementsByName('id');
        for (var i = 0; i < chk.length; i++) {
            if(chk[i].checked){
              arreglo=arreglo+chk[i].value+\",\";
              //self.location=ruta+\"/\"+chk[i].value;
            }
        }
        
        if(arreglo.length==0){
\t\t\talert(\"Seleccione algún premio para aprobar.\");
\t\t\treturn false;
        }
        
        self.location=ruta+\"/\"+";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()), "html", null, true);
        echo "+\"/\"+arreglo;
    }

      function confirmar(ruta)
      {
        if (confirm(\"Desea descargar los items seleccionados\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>
";
        
        $__internal_20459f68ad4f31840f9e6060b33f45815206b03cbdc98c24ceb65ed83bdb3387->leave($__internal_20459f68ad4f31840f9e6060b33f45815206b03cbdc98c24ceb65ed83bdb3387_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:catalogoimagenes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 147,  313 => 112,  307 => 111,  291 => 101,  281 => 98,  276 => 96,  267 => 89,  251 => 82,  248 => 81,  241 => 78,  239 => 77,  236 => 76,  234 => 75,  229 => 73,  223 => 70,  217 => 66,  208 => 62,  202 => 61,  197 => 60,  195 => 59,  188 => 55,  184 => 53,  181 => 52,  177 => 51,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  117 => 30,  111 => 27,  107 => 26,  103 => 25,  94 => 21,  90 => 20,  83 => 16,  76 => 12,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Catalogo Imagenes{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Catalogo Imagenes</h2> */
/*       <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ path("catalogo_imagenes", {"id": catalogo.id }) }}">*/
/*         Descargar Completo*/
/*       </a>*/
/*       <div class="box-icon">*/
/*           <a href="{{ path('catalogo_datos', {"id": catalogo.id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*       </div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {{ form_start(form, { attr: {novalidate: 'novalidate'} }) }}*/
/*                           <form action="{{ path('producto') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/* */
/*                             <table class="table table-bordered table-striped">*/
/*                             <tr>*/
/*                               <th>Catálogo</th><th colspan="2">{{ catalogo.nombre }}</th>*/
/*                               <th>Programa</th><th colspan="2">{{ catalogo.programa.nombre }}</th>*/
/*                               <th><div class="box-icon">{{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}</</th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Nombre', 'p.nombre') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Categoria', 'c.nombre') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Referencia', 'p.referencia') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Marca', 'p.marca') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'SKU', 'p.codInc') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Estado', 'pc.activo') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Valor', 'pc.precio') }}</th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                               <th>{{ form_widget(form.nombre, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.categoria, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.referencia, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.marca, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.codInc, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.estado, { 'attr': { 'style' : 'width:80px' }} ) }}</th>*/
/*                               <th><input type="text" style="width:150px" maxlength="255" name="producto[precio]" id="producto_precio"></th>*/
/*                               </tr>*/
/*                           </table>*/
/*                         </form>*/
/*       <div align="rigth">Todos<input id="checktodos" name="checktodos" type="checkbox" /></div>*/
/*       <br>*/
/*       {% for producto in productos %}*/
/*         {% set i=0 %}*/
/*           <div class="box span" style="height: 330px; width:230px">*/
/*             <div class="box-header well" data-original-title="">*/
/*               <h2>{{ producto.producto.codInc }}</h2>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                   <ul class="thumbnails gallery">*/
/*                     {% if(producto.producto.imagenproducto) %}*/
/*                     <li id="imagen-{{producto.producto.imagenproducto[0].id}}" class="thumbnail" style="widht: 100px">*/
/*                       <a class="cboxElement" href="../../../../{{ producto.producto.imagenproducto[0].path | slice (0)}}" style="background:url(../../../../{{(producto.producto.imagenproducto[0].path| slice (0))[:-4]}}_min.jpg)">*/
/*                         <img alt="{{ producto.producto.codInc }}" src="../../../{{(producto.producto.imagenproducto[0].path| slice (0))[:-4]}}_min.jpg" style="display: block;">*/
/*                       </a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                   </ul>*/
/*               <table class="table">*/
/*                 <tbody>*/
/*                   <tr>*/
/*                     <td>{{ producto.producto.nombre }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>Puntos: {{ producto.puntos }}</td>*/
/*                   </tr>*/
/*                   {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') or is_granted('ROLE_EJEC') or is_granted('ROLE_COM') %}*/
/*                    <tr>*/
/*                      {% set valorventa =  producto.precio/(1-(producto.incremento/100)) + producto.logistica %}*/
/*                     <td>Precio de Venta: $ {{ (valorventa |round(0, 'ceil'))|number_format(0, ',', '.') }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                   <tr align="center">*/
/*                     <td align="center">Seleccionar <input type="checkbox" id="producto_{{ producto.id }}" name="id" value="{{ producto.id }}"></a></td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*               </table>     */
/*               */
/*             </div>*/
/*           </div>       */
/*         {% endfor %}  */
/*         */
/* 		</div>*/
/* */
/*    <div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div style="padding-left: 400px">*/
/*                     <input type="submit" value="Descargar" class="btn btn-success" onclick='check_value("{{ path("catalogo_imagenes") }}")'>*/
/*                 </div>*/
/*                 <div class="dataTables_info">Mostrando {{ productos.getItemNumberPerPage*(productos.getCurrentPageNumber-1)+1  }} a {{ productos.getItemNumberPerPage*productos.getCurrentPageNumber }} de {{ productos.getTotalItemCount }}   Productos*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(productos) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* 	</div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*   <script>*/
/*   $(document).ready(function(){*/
/*    */
/*     //Checkbox*/
/*     $("#checktodos").change(function(){*/
/*       $(':checkbox').each( function(indice, elemento) {*/
/*         if($("#checktodos").is(":checked")){*/
/*           $(this).attr("checked",true);*/
/*   	$(this).parent().addClass("checked");*/
/*         } else {*/
/*           $(this).attr("checked",false);*/
/*   	$(this).parent().removeClass("checked");*/
/*         }*/
/*       });*/
/*     });*/
/*    */
/* });*/
/*   */
/*     function check_value(ruta)*/
/*     { */
/*       var arreglo="";*/
/*       var chk=document.getElementsByName('id');*/
/*         for (var i = 0; i < chk.length; i++) {*/
/*             if(chk[i].checked){*/
/*               arreglo=arreglo+chk[i].value+",";*/
/*               //self.location=ruta+"/"+chk[i].value;*/
/*             }*/
/*         }*/
/*         */
/*         if(arreglo.length==0){*/
/* 			alert("Seleccione algún premio para aprobar.");*/
/* 			return false;*/
/*         }*/
/*         */
/*         self.location=ruta+"/"+{{ catalogo.id }}+"/"+arreglo;*/
/*     }*/
/* */
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea descargar los items seleccionados")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/* {% endblock %}*/
/* */
