<?php

/* IncentivesOrdenesBundle:Ordenes:agregarproductocotizaciones.html.twig */
class __TwigTemplate_26c204802f188437262b10f47028bc4a40a6089e6db773c17bd89d22d188158c extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesOrdenesBundle:Ordenes:agregarproductocotizaciones.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9719d76542c6254384df750d52bdbd4b997800cd3c32df18814dd097c4638d51 = $this->env->getExtension("native_profiler");
        $__internal_9719d76542c6254384df750d52bdbd4b997800cd3c32df18814dd097c4638d51->enter($__internal_9719d76542c6254384df750d52bdbd4b997800cd3c32df18814dd097c4638d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:agregarproductocotizaciones.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9719d76542c6254384df750d52bdbd4b997800cd3c32df18814dd097c4638d51->leave($__internal_9719d76542c6254384df750d52bdbd4b997800cd3c32df18814dd097c4638d51_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7a78212c9bb22134db6265b91ab74ae5ce63990b987c9ed7c89034105c8eab2 = $this->env->getExtension("native_profiler");
        $__internal_e7a78212c9bb22134db6265b91ab74ae5ce63990b987c9ed7c89034105c8eab2->enter($__internal_e7a78212c9bb22134db6265b91ab74ae5ce63990b987c9ed7c89034105c8eab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Orden";
        
        $__internal_e7a78212c9bb22134db6265b91ab74ae5ce63990b987c9ed7c89034105c8eab2->leave($__internal_e7a78212c9bb22134db6265b91ab74ae5ce63990b987c9ed7c89034105c8eab2_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d00f06bffc8ccb6473b941c997f5d7f4756a2ebf4ce1cf6098dd9398cbefcdc4 = $this->env->getExtension("native_profiler");
        $__internal_d00f06bffc8ccb6473b941c997f5d7f4756a2ebf4ce1cf6098dd9398cbefcdc4->enter($__internal_d00f06bffc8ccb6473b941c997f5d7f4756a2ebf4ce1cf6098dd9398cbefcdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Agregar Productos de Cotizacion\t
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_datos", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span12\">
\t    <div class=\"box-content\">
\t    \t
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>Agregar Productos de Cotizacion</h2>
\t\t\t\t
\t\t\t</div>
\t\t\t

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Consecutivo</td><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "consecutivo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Proveedor</td><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "proveedor", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de solicitud</td><td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de entrega</td><td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cancelado</td>
\t\t\t\t\t\t\t";
        // line 31
        if (($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "cancelado", array()) == true)) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<td>Si</td>
\t\t\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t\t\t<td>No</td>
\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr><td>Estado</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "nombre", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t\t
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\tProductos x Agregar
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t";
        // line 55
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) != 0)) {
            // line 56
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Referencia</th>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Valor Unitario</th>
\t\t\t\t\t\t<th>Logistica Individual</th>
\t\t\t\t\t\t<th>Valor total</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 69
            $context["total"] = 0;
            // line 70
            echo "\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 71
            $context["subtotal"] = 0;
            // line 72
            echo "\t \t\t\t\t";
            $context["totaliva"] = 0;
            // line 73
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                echo "\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "descripcion", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 79
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "valorunidad", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 80
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "logistica", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 81
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valortotal", array()) + ($this->getAttribute($context["producto"], "logistica", array()) * $this->getAttribute($context["producto"], "cantidad", array()))), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 83
                if ((($this->getAttribute($this->getAttribute($context["producto"], "estado", array()), "id", array()) == 2) && (($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")))) {
                    echo "\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" id=\"productagregar_";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_agregarproducto_cotizaciones", array("id" => $this->getAttribute($context["producto"], "id", array()), "ordencompra" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\" align='rigth'></i>\t\t\t
\t\t\t\t\t\t\t\t\tAgregar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 95
        echo "\t\t</div>
\t</div>
";
        
        $__internal_d00f06bffc8ccb6473b941c997f5d7f4756a2ebf4ce1cf6098dd9398cbefcdc4->leave($__internal_d00f06bffc8ccb6473b941c997f5d7f4756a2ebf4ce1cf6098dd9398cbefcdc4_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb25c27e73a36d887648cef4c325f21c7b7b096fbd13bf079de8d7acfc484ea5 = $this->env->getExtension("native_profiler");
        $__internal_bb25c27e73a36d887648cef4c325f21c7b7b096fbd13bf079de8d7acfc484ea5->enter($__internal_bb25c27e73a36d887648cef4c325f21c7b7b096fbd13bf079de8d7acfc484ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
";
        
        $__internal_bb25c27e73a36d887648cef4c325f21c7b7b096fbd13bf079de8d7acfc484ea5->leave($__internal_bb25c27e73a36d887648cef4c325f21c7b7b096fbd13bf079de8d7acfc484ea5_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:agregarproductocotizaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 100,  231 => 99,  222 => 95,  217 => 92,  209 => 89,  199 => 84,  195 => 83,  190 => 81,  186 => 80,  182 => 79,  178 => 78,  174 => 77,  170 => 76,  166 => 75,  158 => 73,  155 => 72,  153 => 71,  150 => 70,  148 => 69,  133 => 56,  131 => 55,  110 => 37,  107 => 36,  103 => 34,  99 => 32,  97 => 31,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Orden{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Agregar Productos de Cotizacion	*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('ordenes_datos',  {"id": ordenes.id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/* 	    <div class="box-content">*/
/* 	    	*/
/* 	    	<div class="box-header well">*/
/* 				<h2>Agregar Productos de Cotizacion</h2>*/
/* 				*/
/* 			</div>*/
/* 			*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Consecutivo</td><td>{{ ordenes.consecutivo }}</td></tr>*/
/* 						<tr><td>Proveedor</td><td>{{ ordenes.proveedor.nombre }}</td></tr>*/
/* 						<tr><td>Fecha de solicitud</td><td>{{ ordenes.fechaCreacion | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Fecha de entrega</td><td>{{ ordenes.fechaVencimiento | date("Y-m-d")  }}</td></tr>*/
/* 						<tr><td>Cancelado</td>*/
/* 							{% if ordenes.cancelado==true %}*/
/* 								<td>Si</td>*/
/* 							{% else %}*/
/* 								<td>No</td>*/
/* 							{% endif %}*/
/* 						</tr>*/
/* 						<tr><td>Estado</td><td>{{ ordenes.ordenesEstado.nombre }}*/
/* 							*/
/* 							</td>*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <div class="box span12">*/
/* 		<div class="box-content">*/
/* 			*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					Productos x Agregar*/
/* 				</h2>*/
/* 			</div>*/
/* */
/* 			{% if productos | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Referencia</th>*/
/* 						<th>Nombre</th>*/
/* 						<th>Descripcion</th>*/
/* 						<th>Cantidad</th>*/
/* 						<th>Valor Unitario</th>*/
/* 						<th>Logistica Individual</th>*/
/* 						<th>Valor total</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% set total=0 %}*/
/* 				<tbody>*/
/* 					{% set subtotal=0 %}*/
/* 	 				{% set totaliva = 0 %}*/
/* 					{% for producto in productos %}	*/
/* 					<tr>*/
/* 							<td>{{ producto.producto.referencia }}</td>*/
/* 							<td>{{ producto.producto.nombre }}</td>*/
/* 							<td>{{ producto.producto.descripcion }}</td>*/
/* 							<td>{{ producto.cantidad }}</td>*/
/* 							<td>$ {{ producto.valorunidad|number_format(2, ',', '.') }}</td>*/
/* 							<td>$ {{ producto.logistica|number_format(2, ',', '.') }}</td>*/
/* 							<td>$ {{ (producto.valortotal + (producto.logistica*producto.cantidad))|number_format(2, ',', '.') }}</td>*/
/* 							<td>*/
/* 								{% if( producto.estado.id == 2 and (is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP'))) %}	*/
/* 								<a class="btn btn-success" id="productagregar_{{ producto.id }}" href="{{ path("ordenes_agregarproducto_cotizaciones", {"id": producto.id, "ordencompra": ordenes.id}) }}">*/
/* 									<i class="icon-plus icon-white" align='rigth'></i>			*/
/* 									Agregar										*/
/* 								</a>*/
/* 								{% endif %}*/
/* 							</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	*/
/* {% endblock %}*/
/* */
