<?php

/* IncentivesSolicitudesBundle:Requisiciones:datos.html.twig */
class __TwigTemplate_6bb2eefcc412f5e5e2a93de1ba42f3083bd94950cf2b5caa5825e20b176a4bb1 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesSolicitudesBundle:Requisiciones:datos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3456dd9efd23e95ed7d6f20b7fece4f476aadaeaacc7a0622a0a05d73c2a685 = $this->env->getExtension("native_profiler");
        $__internal_c3456dd9efd23e95ed7d6f20b7fece4f476aadaeaacc7a0622a0a05d73c2a685->enter($__internal_c3456dd9efd23e95ed7d6f20b7fece4f476aadaeaacc7a0622a0a05d73c2a685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Requisiciones:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3456dd9efd23e95ed7d6f20b7fece4f476aadaeaacc7a0622a0a05d73c2a685->leave($__internal_c3456dd9efd23e95ed7d6f20b7fece4f476aadaeaacc7a0622a0a05d73c2a685_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_56e6f7214501c1f9d9fbf80e5429715129c1b7114a5d20c5edc6acb6283d897d = $this->env->getExtension("native_profiler");
        $__internal_56e6f7214501c1f9d9fbf80e5429715129c1b7114a5d20c5edc6acb6283d897d->enter($__internal_56e6f7214501c1f9d9fbf80e5429715129c1b7114a5d20c5edc6acb6283d897d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Requisición";
        
        $__internal_56e6f7214501c1f9d9fbf80e5429715129c1b7114a5d20c5edc6acb6283d897d->leave($__internal_56e6f7214501c1f9d9fbf80e5429715129c1b7114a5d20c5edc6acb6283d897d_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_f8b0b7afd15497b0c4749e69e9b7e8cf339df9ee7dd1e6a973a40334f3555520 = $this->env->getExtension("native_profiler");
        $__internal_f8b0b7afd15497b0c4749e69e9b7e8cf339df9ee7dd1e6a973a40334f3555520->enter($__internal_f8b0b7afd15497b0c4749e69e9b7e8cf339df9ee7dd1e6a973a40334f3555520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Requisición\t
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("solicitudes_datos");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requisicion"]) ? $context["requisicion"] : $this->getContext($context, "requisicion")), "solicitud", array()), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span12\">
\t    <div class=\"box-content\">
\t    \t
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>

\t\t\t\t</i>Datos Requisición</h2>
\t\t\t\t
\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute((isset($context["requisicion"]) ? $context["requisicion"] : $this->getContext($context, "requisicion")), "rutapdf", array()), 5)), "html", null, true);
        echo "\"  class=\"btn btn-info\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"icon-download-alt icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Consecutivo</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisicion"]) ? $context["requisicion"] : $this->getContext($context, "requisicion")), "consecutivo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Solicitud</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requisicion"]) ? $context["requisicion"] : $this->getContext($context, "requisicion")), "solicitud", array()), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requisicion"]) ? $context["requisicion"] : $this->getContext($context, "requisicion")), "solicitud", array()), "titulo", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["requisicion"]) ? $context["requisicion"] : $this->getContext($context, "requisicion")), "solicitud", array()), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["requisicion"]) ? $context["requisicion"] : $this->getContext($context, "requisicion")), "solicitud", array()), "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

\t

\t<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t\t
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t";
        // line 49
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 50
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("requisiciones_agregarproducto", array("id" => $this->getAttribute((isset($context["requisicion"]) ? $context["requisicion"] : $this->getContext($context, "requisicion")), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\tProductos
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t";
        // line 60
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) != 0)) {
            // line 61
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Imagen</th>
\t\t\t\t\t\t<th>Referencia</th>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Valor Unitario</th>
\t\t\t\t\t\t<th>Valor Venta</th>
\t\t\t\t\t\t<th>Logistica Individual</th>
\t\t\t\t\t\t<th>Valor Total</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 76
            $context["total"] = 0;
            // line 77
            echo "\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 78
            $context["subtotal"] = 0;
            // line 79
            echo "\t \t\t\t\t";
            $context["totaliva"] = 0;
            // line 80
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                echo "\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                // line 82
                $context["rutaImagen"] = "";
                // line 83
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                    // line 84
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["imagen"], "estado", array()) == 1)) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t";
                        $context["rutaImagen"] = $this->getAttribute($context["imagen"], "path", array());
                        // line 86
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<td><a href=\"../../../";
                // line 90
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen")), 0), "html", null, true);
                echo "\" target='_blank'><img src=\"../../../";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, (isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen")), 0), 0,  -4), "html", null, true);
                echo "_min.jpg\" width=\"100\" height=\"100\"><a></td>
\t\t\t\t\t\t\t<td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "descripcion", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 95
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "valorunidad", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 96
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valorunidad", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100))), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 97
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "logistica", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 98
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valortotal", array()) + ($this->getAttribute($context["producto"], "logistica", array()) * $this->getAttribute($context["producto"], "cantidad", array()))), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t";
                // line 99
                if (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estadoIva", array()) == true)) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + ($this->getAttribute($context["producto"], "valortotal", array()) * ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "iva", array()) / 100)));
                    // line 101
                    echo "\t\t\t\t\t\t\t\t";
                }
                echo "\t
\t\t\t\t\t\t\t";
                // line 102
                $context["subtotal"] = (((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["producto"], "valortotal", array())) + ($this->getAttribute($context["producto"], "logistica", array()) * $this->getAttribute($context["producto"], "cantidad", array())));
                // line 103
                echo "
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 109
        echo "\t\t</div>
\t</div>



";
        
        $__internal_f8b0b7afd15497b0c4749e69e9b7e8cf339df9ee7dd1e6a973a40334f3555520->leave($__internal_f8b0b7afd15497b0c4749e69e9b7e8cf339df9ee7dd1e6a973a40334f3555520_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f1d37f66ef9689769ab0a1f7316443fde5ec2394e624c92c3679e4070d39d91 = $this->env->getExtension("native_profiler");
        $__internal_8f1d37f66ef9689769ab0a1f7316443fde5ec2394e624c92c3679e4070d39d91->enter($__internal_8f1d37f66ef9689769ab0a1f7316443fde5ec2394e624c92c3679e4070d39d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
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
\t
\t";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            echo "\t
\t\t\$(\"#productoeditar_";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\").colorbox({href:\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_valores", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\"});\t
\t\t\$(\"#productoaprobar_";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\").colorbox({href:\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_aprobar_producto", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\"});\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t

\t</script>
";
        
        $__internal_8f1d37f66ef9689769ab0a1f7316443fde5ec2394e624c92c3679e4070d39d91->leave($__internal_8f1d37f66ef9689769ab0a1f7316443fde5ec2394e624c92c3679e4070d39d91_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Requisiciones:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 134,  313 => 132,  307 => 131,  301 => 130,  284 => 117,  278 => 116,  266 => 109,  261 => 106,  253 => 103,  251 => 102,  246 => 101,  243 => 100,  241 => 99,  237 => 98,  233 => 97,  229 => 96,  225 => 95,  221 => 94,  217 => 93,  213 => 92,  209 => 91,  203 => 90,  199 => 88,  193 => 87,  190 => 86,  187 => 85,  184 => 84,  179 => 83,  177 => 82,  169 => 80,  166 => 79,  164 => 78,  161 => 77,  159 => 76,  142 => 61,  140 => 60,  134 => 56,  124 => 50,  122 => 49,  106 => 36,  102 => 35,  96 => 34,  92 => 33,  80 => 24,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Requisición{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Requisición	*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('solicitudes_datos') }}/{{ requisicion.solicitud.id }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/* 	    <div class="box-content">*/
/* 	    	*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* */
/* 				</i>Datos Requisición</h2>*/
/* 				*/
/* 					<div class="box-icon">*/
/* 						<a href="{{asset(requisicion.rutapdf | slice (5))}}"  class="btn btn-info" target="_blank">*/
/* 							<i class="icon-download-alt icon-white"></i>*/
/* 						</a>*/
/* 					</div>*/
/* 			</div>*/
/* 			*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Consecutivo</td><td>{{ requisicion.consecutivo }}</td></tr>*/
/* 						<tr><td>Solicitud</td><td>{{ requisicion.solicitud.id }} - {{ requisicion.solicitud.titulo }}</td>*/
/* 						<tr><td>Programa</td><td>{{ requisicion.solicitud.programa.nombre }}</td>							*/
/* 						<tr><td>Cliente</td><td>{{ requisicion.solicitud.programa.cliente.nombre }}</td>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	*/
/* */
/* 	<div class="box span12">*/
/* 		<div class="box-content">*/
/* 			*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					{% if not is_granted('ROLE_PROV') %}*/
/* 							<a href="{{ path('requisiciones_agregarproducto',  {"id": requisicion.id}) }}">*/
/* 								<button class="btn btn-primary">*/
/* 									<i class="icon-plus icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 					{% endif %}*/
/* 					Productos*/
/* 				</h2>*/
/* 			</div>*/
/* */
/* 			{% if productos | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Imagen</th>*/
/* 						<th>Referencia</th>*/
/* 						<th>Nombre</th>*/
/* 						<th>Descripcion</th>*/
/* 						<th>Cantidad</th>*/
/* 						<th>Valor Unitario</th>*/
/* 						<th>Valor Venta</th>*/
/* 						<th>Logistica Individual</th>*/
/* 						<th>Valor Total</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% set total=0 %}*/
/* 				<tbody>*/
/* 					{% set subtotal=0 %}*/
/* 	 				{% set totaliva = 0 %}*/
/* 					{% for producto in productos %}	*/
/* 					<tr>*/
/* 						{% set rutaImagen = "" %}*/
/* 						{% for imagen in producto.producto.imagenproducto %}*/
/* 							{% if imagen.estado==1 %}*/
/* 								{% set rutaImagen = imagen.path %}*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 						*/
/* 						*/
/* 							<td><a href="../../../{{ rutaImagen | slice (0)}}" target='_blank'><img src="../../../{{( rutaImagen| slice (0))[:-4]}}_min.jpg" width="100" height="100"><a></td>*/
/* 							<td>{{ producto.producto.referencia }}</td>*/
/* 							<td>{{ producto.producto.nombre }}</td>*/
/* 							<td>{{ producto.producto.descripcion }}</td>*/
/* 							<td>{{ producto.cantidad }}</td>*/
/* 							<td>$ {{ producto.valorunidad|number_format(2, ',', '.') }}</td>*/
/* 							<td>$ {{ (producto.valorunidad/(1 - (producto.incremento/100)))|number_format(2, ',', '.') }}</td>*/
/* 							<td>$ {{ producto.logistica|number_format(2, ',', '.') }}</td>*/
/* 							<td>$ {{ (producto.valortotal + (producto.logistica*producto.cantidad))|number_format(2, ',', '.') }}</td>*/
/* 							{% if producto.producto.estadoIva == true %}*/
/* 									{% set totaliva = totaliva + (producto.valortotal*(producto.producto.iva/100)) %}*/
/* 								{% endif %}	*/
/* 							{% set subtotal = subtotal+producto.valortotal + (producto.logistica*producto.cantidad)  %}*/
/* */
/* 					</tr>*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
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
/* 	*/
/* 	{% for producto in productos %}	*/
/* 		$("#productoeditar_{{ producto.id }}").colorbox({href:"{{ path('cotizaciones_valores',  {"id": producto.id})}}"});	*/
/* 		$("#productoaprobar_{{ producto.id }}").colorbox({href:"{{ path('cotizaciones_aprobar_producto',  {"id": producto.id})}}"});	*/
/* 	{% endfor %}*/
/* 	*/
/* */
/* 	</script>*/
/* {% endblock %}*/
/* */
