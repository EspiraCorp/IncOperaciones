<?php

/* IncentivesCatalogoBundle:Maestro:datos.html.twig */
class __TwigTemplate_e9511a30fabbf144c9595de722eeba98ca779a0d22d54b09aff772bcb75f40b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesCatalogoBundle:Maestro:datos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f5f35c946513887b0df805bf837f8ad136280ca83e15ffe8d2259021938f9d6 = $this->env->getExtension("native_profiler");
        $__internal_3f5f35c946513887b0df805bf837f8ad136280ca83e15ffe8d2259021938f9d6->enter($__internal_3f5f35c946513887b0df805bf837f8ad136280ca83e15ffe8d2259021938f9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f5f35c946513887b0df805bf837f8ad136280ca83e15ffe8d2259021938f9d6->leave($__internal_3f5f35c946513887b0df805bf837f8ad136280ca83e15ffe8d2259021938f9d6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_02d09e66917470f0fc9aca66126dd839f4cdc0a1eecad6a5ad816caee9540ecc = $this->env->getExtension("native_profiler");
        $__internal_02d09e66917470f0fc9aca66126dd839f4cdc0a1eecad6a5ad816caee9540ecc->enter($__internal_02d09e66917470f0fc9aca66126dd839f4cdc0a1eecad6a5ad816caee9540ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Producto";
        
        $__internal_02d09e66917470f0fc9aca66126dd839f4cdc0a1eecad6a5ad816caee9540ecc->leave($__internal_02d09e66917470f0fc9aca66126dd839f4cdc0a1eecad6a5ad816caee9540ecc_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_532f7fa8d2d1776656a89ab3abaf844085f2b38941265b709171edaaeca805d9 = $this->env->getExtension("native_profiler");
        $__internal_532f7fa8d2d1776656a89ab3abaf844085f2b38941265b709171edaaeca805d9->enter($__internal_532f7fa8d2d1776656a89ab3abaf844085f2b38941265b709171edaaeca805d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Productos
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span6\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_editar", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t</i>Datos Producto</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Nombre</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Categoria</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "categoria", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Calasificación</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "productoclasificacion", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Referencia</td><td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "referencia", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Marca</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "marca", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Descripcion</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "descripcion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Codigo EAN</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "codEAN", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Codigo Incentives</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "codInc", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Dimensiones</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "Alto", array()), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "Largo", array()), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "Ancho", array()), "html", null, true);
        echo " cm.</td></tr>
\t\t\t\t\t\t<tr><td>Peso</td><td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "peso", array()), "html", null, true);
        echo " Kg.</td></tr>
\t\t\t\t\t\t<tr><td>IVA</td><td>";
        // line 39
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "iva", array()) * 100), "html", null, true);
        echo " %</td></tr>
\t\t\t\t\t\t<tr><td>Logistica</td><td>";
        // line 40
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "logistica", array()) * 100), "html", null, true);
        echo " %</td></tr>
\t\t\t\t\t\t<tr><td>Incremento</td><td>";
        // line 41
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "incremento", array()) * 100), "html", null, true);
        echo " %</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span5\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_agregarimagen", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\tImagenes
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Imagenes</th>
\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")));
        foreach ($context['_seq'] as $context["_key"] => $context["imagenes"]) {
            echo "\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["imagenes"], "path", array()), 8), "html", null, true);
            echo "\" target='_blank'><img src=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($context["imagenes"], "path", array()), 8), 0,  -4), "html", null, true);
            echo "_min.jpg\"><a></td>
\t\t\t\t\t\t\t\t<td>";
            // line 70
            if (($this->getAttribute($context["imagenes"], "estado", array()) == "0")) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadoimagen", array("id" => $this->getAttribute($context["imagenes"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tInactiva</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadoimagen", array("id" => $this->getAttribute($context["imagenes"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tActiva</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagenes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span6\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_agregarprecio", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>\t
\t\t\t\t\tPrecios
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Proveedor</th>
\t\t\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t\t\t<th>Principal</th>
\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productoprecio"]) ? $context["productoprecio"] : $this->getContext($context, "productoprecio")));
        foreach ($context['_seq'] as $context["_key"] => $context["precio"]) {
            // line 108
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["precio"], "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_editarprecio", array("id" => $this->getAttribute($context["precio"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["precio"], "precio", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["precio"], "principal", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 112
            if (($this->getAttribute($context["precio"], "estado", array()) == "0")) {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadoprecio", array("id" => $this->getAttribute($context["precio"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tInactivo</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadoprecio", array("id" => $this->getAttribute($context["precio"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tActivo</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['precio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>
\t

";
        
        $__internal_532f7fa8d2d1776656a89ab3abaf844085f2b38941265b709171edaaeca805d9->leave($__internal_532f7fa8d2d1776656a89ab3abaf844085f2b38941265b709171edaaeca805d9_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30fcc3b1749f6b397b4068c95f5ab70e9070bb6f19ffcb0bfa5a678f2a66a040 = $this->env->getExtension("native_profiler");
        $__internal_30fcc3b1749f6b397b4068c95f5ab70e9070bb6f19ffcb0bfa5a678f2a66a040->enter($__internal_30fcc3b1749f6b397b4068c95f5ab70e9070bb6f19ffcb0bfa5a678f2a66a040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>

\tfunction confirmar(ruta)
\t{
\t  if (confirm(\"Cambiar estado\")==true){
\t  \tself.location=ruta;
\t  }else{
\t  \talert(\"OK\");
\t  }
\t  
\t}

        var x;
\t\tx=\$(document);
\t\tx.ready(inicializarEventos);

\t\tfunction inicializarEventos()
\t\t{
\t\t var x;
\t\t x=\$(\"div.estado a\");
\t\t x.each(resaltarParrafos);
\t\t}

\t\t// function resaltarParrafos()
\t\t// {
\t\t//  var x=\$(this);
\t\t//  var parrafo=(x.attr('id'));
\t\t//  parrafo=parseInt(parrafo);
\t\t//  alert(parrafo);
\t\t//  \$(\"#\"+parrafo).click(function(evento){
\t\t//                evento.preventDefault();
\t\t//                \$(\"#destino\").load(\"";
        // line 163
        echo $this->env->getExtension('routing')->getUrl("proveedores_estado", array("id" => "+parrafo+"));
        echo "\"),\t
\t\t// \t\t\t\t\tfunction() {
\t\t// \t\t\t\t\t\talert( \"Actualizacion realizada.\" );
\t\t// \t\t\t\t\t} );
\t\t//        });
\t\t// }

        // x=\$(\"div.estado a\");
        // x.each(mostrar);

        // function mostrar()
        // {
        // \tvar x=\$(this);
        // \talert (x.attr('id'));
        // }

  //       function resaltarParrafos(){
  //       \tvar x=\$(this);
\t\t// \tvar parrafo=(x.attr('id'));
\t\t// \talert(parrafo);
\t\t// \t\$('div.estado').click(function(evento){
\t\t// \t\tevento.preventDefault();
\t\t// \t\t\$(\"#destino\").load(\"";
        // line 185
        echo $this->env->getExtension('routing')->getUrl("proveedores_estado", array("id" => "+parrafo+"));
        echo "\",\t
\t\t// \t\t\tfunction() {
\t\t// \t\t\t\talert( \"Actualizacion realizada.\" );
\t\t// \t\t\t} );
\t\t// \t});
\t\t// })
\t</script>
";
        
        $__internal_30fcc3b1749f6b397b4068c95f5ab70e9070bb6f19ffcb0bfa5a678f2a66a040->leave($__internal_30fcc3b1749f6b397b4068c95f5ab70e9070bb6f19ffcb0bfa5a678f2a66a040_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 185,  339 => 163,  303 => 131,  297 => 130,  284 => 122,  276 => 119,  269 => 116,  262 => 113,  260 => 112,  256 => 111,  250 => 110,  246 => 109,  243 => 108,  239 => 107,  218 => 89,  207 => 80,  199 => 77,  192 => 74,  185 => 71,  183 => 70,  177 => 69,  170 => 67,  151 => 51,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  73 => 19,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Producto{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Productos*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('producto') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				<a href="{{ path('producto_editar',  {"id": producto.id}) }}">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-edit icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				</i>Datos Producto</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Nombre</td><td>{{ producto.nombre }}</td></tr>*/
/* 						<tr><td>Categoria</td><td>{{ producto.categoria.nombre}}</td></tr>*/
/* 						<tr><td>Calasificación</td><td>{{ producto.productoclasificacion.nombre}}</td></tr>*/
/* 						<tr><td>Referencia</td><td>{{ producto.referencia }}</td></tr>*/
/* 						<tr><td>Marca</td><td>{{ producto.marca }}</td></tr>*/
/* 						<tr><td>Descripcion</td><td>{{ producto.descripcion }}</td></tr>*/
/* 						<tr><td>Codigo EAN</td><td>{{ producto.codEAN }}</td></tr>*/
/* 						<tr><td>Codigo Incentives</td><td>{{ producto.codInc }}</td></tr>*/
/* 						<tr><td>Dimensiones</td><td>{{ producto.Alto }} x {{ producto.Largo }} x {{ producto.Ancho }} cm.</td></tr>*/
/* 						<tr><td>Peso</td><td>{{ producto.peso }} Kg.</td></tr>*/
/* 						<tr><td>IVA</td><td>{{ producto.iva*100 }} %</td></tr>*/
/* 						<tr><td>Logistica</td><td>{{ producto.logistica*100 }} %</td></tr>*/
/* 						<tr><td>Incremento</td><td>{{ producto.incremento*100 }} %</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span5">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('producto_agregarimagen',  {"id": producto.id}) }}">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					Imagenes*/
/* 				</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Imagenes</th>*/
/* 						<th>Estado</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for imagenes in imagen %}		*/
/* 							<tr>*/
/* 								<td><a href="{{imagenes.path| slice (8)}}" target='_blank'><img src="{{(imagenes.path| slice (8))[:-4]}}_min.jpg"><a></td>*/
/* 								<td>{% if (imagenes.estado=='0') %}*/
/* 										<a class="btn btn-danger 1" onClick=confirmar('{{ url("producto_estadoimagen", {"id": imagenes.id}) }}') href="#">*/
/* 										Inactiva</a>*/
/* 									{% else %}*/
/* 										<a class="btn btn-success 1" onClick=confirmar('{{ url("producto_estadoimagen", {"id": imagenes.id}) }}') href="#">*/
/* 										Activa</a>*/
/* 									{% endif %}*/
/* 								</td>*/
/* 							</tr>			*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span6">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('producto_agregarprecio',  {"id": producto.id}) }}">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>	*/
/* 					Precios*/
/* 				</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>Proveedor</th>*/
/* 							<th>Precio</th>*/
/* 							<th>Principal</th>*/
/* 							<th>Estado</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{% for precio in productoprecio %}*/
/* 						<tr>*/
/* 							<td>{{precio.proveedor.nombre}}</td>*/
/* 							<td><a href="{{ path("producto_editarprecio", {"id": precio.id}) }}">{{precio.precio}}</a></td>*/
/* 							<td>{{precio.principal}}</td>*/
/* 							<td>{% if (precio.estado=='0') %}*/
/* 										<a class="btn btn-danger 1" onClick=confirmar('{{ url("producto_estadoprecio", {"id": precio.id}) }}') href="#">*/
/* 										Inactivo</a>*/
/* 									{% else %}*/
/* 										<a class="btn btn-success 1" onClick=confirmar('{{ url("producto_estadoprecio", {"id": precio.id}) }}') href="#">*/
/* 										Activo</a>*/
/* 									{% endif %}*/
/* 								</td>*/
/* 						</tr>*/
/* 						{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* */
/* 	function confirmar(ruta)*/
/* 	{*/
/* 	  if (confirm("Cambiar estado")==true){*/
/* 	  	self.location=ruta;*/
/* 	  }else{*/
/* 	  	alert("OK");*/
/* 	  }*/
/* 	  */
/* 	}*/
/* */
/*         var x;*/
/* 		x=$(document);*/
/* 		x.ready(inicializarEventos);*/
/* */
/* 		function inicializarEventos()*/
/* 		{*/
/* 		 var x;*/
/* 		 x=$("div.estado a");*/
/* 		 x.each(resaltarParrafos);*/
/* 		}*/
/* */
/* 		// function resaltarParrafos()*/
/* 		// {*/
/* 		//  var x=$(this);*/
/* 		//  var parrafo=(x.attr('id'));*/
/* 		//  parrafo=parseInt(parrafo);*/
/* 		//  alert(parrafo);*/
/* 		//  $("#"+parrafo).click(function(evento){*/
/* 		//                evento.preventDefault();*/
/* 		//                $("#destino").load("{{ url('proveedores_estado', {'id':"+parrafo+"}) }}"),	*/
/* 		// 					function() {*/
/* 		// 						alert( "Actualizacion realizada." );*/
/* 		// 					} );*/
/* 		//        });*/
/* 		// }*/
/* */
/*         // x=$("div.estado a");*/
/*         // x.each(mostrar);*/
/* */
/*         // function mostrar()*/
/*         // {*/
/*         // 	var x=$(this);*/
/*         // 	alert (x.attr('id'));*/
/*         // }*/
/* */
/*   //       function resaltarParrafos(){*/
/*   //       	var x=$(this);*/
/* 		// 	var parrafo=(x.attr('id'));*/
/* 		// 	alert(parrafo);*/
/* 		// 	$('div.estado').click(function(evento){*/
/* 		// 		evento.preventDefault();*/
/* 		// 		$("#destino").load("{{ url('proveedores_estado', {'id':"+parrafo+"}) }}",	*/
/* 		// 			function() {*/
/* 		// 				alert( "Actualizacion realizada." );*/
/* 		// 			} );*/
/* 		// 	});*/
/* 		// })*/
/* 	</script>*/
/* {% endblock %}*/
/* */
