<?php

/* IncentivesFacturacionBundle:Facturas:datos.html.twig */
class __TwigTemplate_3310edb1cb0d20e8e3e7f250cb9553df84461168dc553d1e9c188cfda90ffb12 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesFacturacionBundle:Facturas:datos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b308a3db8c23c22200dcd2d6a31c34be0addb9704fed7d5341fe603c8295023 = $this->env->getExtension("native_profiler");
        $__internal_7b308a3db8c23c22200dcd2d6a31c34be0addb9704fed7d5341fe603c8295023->enter($__internal_7b308a3db8c23c22200dcd2d6a31c34be0addb9704fed7d5341fe603c8295023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b308a3db8c23c22200dcd2d6a31c34be0addb9704fed7d5341fe603c8295023->leave($__internal_7b308a3db8c23c22200dcd2d6a31c34be0addb9704fed7d5341fe603c8295023_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3a6a0031b7898708aad2225997636ef731e975ec283a5a2d4cc456442dc8647 = $this->env->getExtension("native_profiler");
        $__internal_f3a6a0031b7898708aad2225997636ef731e975ec283a5a2d4cc456442dc8647->enter($__internal_f3a6a0031b7898708aad2225997636ef731e975ec283a5a2d4cc456442dc8647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Factura";
        
        $__internal_f3a6a0031b7898708aad2225997636ef731e975ec283a5a2d4cc456442dc8647->leave($__internal_f3a6a0031b7898708aad2225997636ef731e975ec283a5a2d4cc456442dc8647_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d385818ceb248a48468d6340f37fbd2972f07b693ba406eb67edd792cb3e362c = $this->env->getExtension("native_profiler");
        $__internal_d385818ceb248a48468d6340f37fbd2972f07b693ba406eb67edd792cb3e362c->enter($__internal_d385818ceb248a48468d6340f37fbd2972f07b693ba406eb67edd792cb3e362c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Facturas\t
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("facturas_listado");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "programa", array()), "id", array()), "html", null, true);
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
\t\t\t\t
\t\t\t\t</i>Datos Factura</h2>

\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Facturas"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "numero", array()), "html", null, true);
        echo ".pdf\" target=\"_blank\" class=\"btn btn-info\">
\t\t\t\t\t\t\t<i class=\"icon-download-alt icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Facturas"), "html", null, true);
        echo "/../DetalleFactura_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "numero", array()), "html", null, true);
        echo ".xlsx\" target=\"_blank\" class=\"btn btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-th icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t</div>
\t\t\t

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Numero</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "numero", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha Factura</td><td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Periodo</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "periodo", array()), "periodo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha Inicio</td><td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "fechaInicio", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha Fin</td><td>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "fechaFin", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t\t
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\tPREMIOS
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t";
        // line 59
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) != 0)) {
            // line 60
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Valor Unitario</th>
\t\t\t\t\t\t<th>Valor Total</th>
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descripcion", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>\$ ";
                // line 77
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "valorUnitario", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>\$ ";
                // line 78
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "valorTotal", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
                // line 79
                $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + ($this->getAttribute($context["item"], "valorTotal", array()) * 0.16));
                // line 80
                echo "\t\t\t\t\t\t";
                $context["subtotal"] = ((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["item"], "valorTotal", array()));
                // line 81
                echo "\t\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan='3'>Subtotal</th>
\t\t\t\t\t\t<td>\$ ";
            // line 85
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 91
        echo "\t\t</div>
\t</div>
\t
\t<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t\t
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_agregarlogistica", array("id" => $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "id", array()))), "html", null, true);
        echo "\" id=\"factura_agregarlogistica\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\tLOGISTICA
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t";
        // line 108
        if ((twig_length_filter($this->env, (isset($context["logistica"]) ? $context["logistica"] : $this->getContext($context, "logistica"))) != 0)) {
            // line 109
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Valor Unitario</th>
\t\t\t\t\t\t<th>Valor Total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 118
            $context["total"] = 0;
            // line 119
            echo "\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 120
            $context["subtotal"] = 0;
            // line 121
            echo "\t \t\t\t\t";
            $context["totaliva"] = 0;
            // line 122
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logistica"]) ? $context["logistica"] : $this->getContext($context, "logistica")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descripcion", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>\$ ";
                // line 126
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "valorUnitario", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>\$ ";
                // line 127
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "valorTotal", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
                // line 128
                $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + ($this->getAttribute($context["item"], "valorTotal", array()) * 0.16));
                // line 129
                echo "\t\t\t\t\t\t";
                $context["subtotal"] = ((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["item"], "valorTotal", array()));
                // line 130
                echo "\t\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan='3'>Subtotal</th>
\t\t\t\t\t\t<td>\$ ";
            // line 134
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 140
        echo "\t\t</div>
\t</div>
\t
";
        
        $__internal_d385818ceb248a48468d6340f37fbd2972f07b693ba406eb67edd792cb3e362c->leave($__internal_d385818ceb248a48468d6340f37fbd2972f07b693ba406eb67edd792cb3e362c_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97c8bdf5d58e2ab9ba6fd09c44952b28af24dca63cbb7291d75c04e6b1a80dbd = $this->env->getExtension("native_profiler");
        $__internal_97c8bdf5d58e2ab9ba6fd09c44952b28af24dca63cbb7291d75c04e6b1a80dbd->enter($__internal_97c8bdf5d58e2ab9ba6fd09c44952b28af24dca63cbb7291d75c04e6b1a80dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\t\$(\"#factura_agregarlogistica\").colorbox({href:\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_agregarlogistica", array("id" => $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "id", array()))), "html", null, true);
        echo "\"});
\t</script>
";
        
        $__internal_97c8bdf5d58e2ab9ba6fd09c44952b28af24dca63cbb7291d75c04e6b1a80dbd->leave($__internal_97c8bdf5d58e2ab9ba6fd09c44952b28af24dca63cbb7291d75c04e6b1a80dbd_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 148,  328 => 146,  322 => 145,  312 => 140,  303 => 134,  299 => 132,  292 => 130,  289 => 129,  287 => 128,  283 => 127,  279 => 126,  275 => 125,  271 => 124,  263 => 122,  260 => 121,  258 => 120,  255 => 119,  253 => 118,  242 => 109,  240 => 108,  228 => 99,  218 => 91,  209 => 85,  205 => 83,  198 => 81,  195 => 80,  193 => 79,  189 => 78,  185 => 77,  181 => 76,  177 => 75,  169 => 73,  166 => 72,  164 => 71,  161 => 70,  159 => 69,  148 => 60,  146 => 59,  127 => 43,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  88 => 27,  80 => 24,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Factura{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Facturas	*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('facturas_listado') }}/{{ factura.programa.id }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/* 	    <div class="box-content">*/
/* 	    	*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				*/
/* 				</i>Datos Factura</h2>*/
/* */
/* 				<div class="box-icon">*/
/* 						<a href="{{asset('Facturas')}}/{{factura.numero}}.pdf" target="_blank" class="btn btn-info">*/
/* 							<i class="icon-download-alt icon-white"></i>*/
/* 						</a>*/
/* 						<a href="{{asset('Facturas')}}/../DetalleFactura_{{factura.numero}}.xlsx" target="_blank" class="btn btn-success">*/
/* 							<i class="icon-th icon-white"></i>*/
/* 						</a>*/
/* 					</div>*/
/* */
/* 			</div>*/
/* 			*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Numero</td><td>{{ factura.numero }}</td></tr>*/
/* 						<tr><td>Cliente</td><td>{{ factura.programa.cliente.nombre }}</td></tr>*/
/* 						<tr><td>Programa</td><td>{{ factura.programa.nombre }}</td></tr>*/
/* 						<tr><td>Fecha Factura</td><td>{{ factura.fecha | date("Y-m-d")  }}</td></tr>*/
/* 						<tr><td>Periodo</td><td>{{ factura.periodo.periodo }}</td></tr>*/
/* 						<tr><td>Fecha Inicio</td><td>{{ factura.fechaInicio | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Fecha Fin</td><td>{{ factura.fechaFin | date("Y-m-d") }}</td></tr>												*/
/* 					*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span12">*/
/* 		<div class="box-content">*/
/* 			*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					PREMIOS*/
/* 				</h2>*/
/* 			</div>*/
/* */
/* 			{% if productos | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Descripcion</th>*/
/* 						<th>Cantidad</th>*/
/* 						<th>Valor Unitario</th>*/
/* 						<th>Valor Total</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% set total=0 %}*/
/* 				<tbody>*/
/* 					{% set subtotal=0 %}*/
/* 	 				{% set totaliva = 0 %}*/
/* 					{% for item in productos %}	*/
/* 					<tr>*/
/* 						<td>{{ item.descripcion }}</td>*/
/* 						<td>{{ item.cantidad }}</td>*/
/* 						<td>$ {{ item.valorUnitario|number_format(2, ',', '.') }}</td>*/
/* 						<td>$ {{ item.valorTotal|number_format(2, ',', '.') }}</td>*/
/* 						{% set totaliva = totaliva + (item.valorTotal*(0.16)) %}*/
/* 						{% set subtotal = subtotal+item.valorTotal %}*/
/* 					</tr>					*/
/* 					{% endfor %}*/
/* 					<tr>*/
/* 						<th colspan='3'>Subtotal</th>*/
/* 						<td>$ {{ subtotal|number_format(2, ',', '.') }}</td>*/
/* 					</tr>*/
/* 					*/
/* 				</tbody>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="box span12">*/
/* 		<div class="box-content">*/
/* 			*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('factura_agregarlogistica',  {"id": factura.id}) }}" id="factura_agregarlogistica">*/
/* 								<button class="btn btn-primary">*/
/* 									<i class="icon-plus icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 					LOGISTICA*/
/* 				</h2>*/
/* 			</div>*/
/* */
/* 			{% if logistica | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Descripcion</th>*/
/* 						<th>Cantidad</th>*/
/* 						<th>Valor Unitario</th>*/
/* 						<th>Valor Total</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% set total=0 %}*/
/* 				<tbody>*/
/* 					{% set subtotal=0 %}*/
/* 	 				{% set totaliva = 0 %}*/
/* 					{% for item in logistica %}	*/
/* 					<tr>*/
/* 						<td>{{ item.descripcion }}</td>*/
/* 						<td>{{ item.cantidad }}</td>*/
/* 						<td>$ {{ item.valorUnitario|number_format(2, ',', '.') }}</td>*/
/* 						<td>$ {{ item.valorTotal|number_format(2, ',', '.') }}</td>*/
/* 						{% set totaliva = totaliva + (item.valorTotal*(0.16)) %}*/
/* 						{% set subtotal = subtotal+item.valorTotal %}*/
/* 					</tr>					*/
/* 					{% endfor %}*/
/* 					<tr>*/
/* 						<th colspan='3'>Subtotal</th>*/
/* 						<td>$ {{ subtotal|number_format(2, ',', '.') }}</td>*/
/* 					</tr>*/
/* 					*/
/* 				</tbody>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* 		$("#factura_agregarlogistica").colorbox({href:"{{ path('factura_agregarlogistica',  {"id": factura.id}) }}"});*/
/* 	</script>*/
/* {% endblock %}*/
/* */
