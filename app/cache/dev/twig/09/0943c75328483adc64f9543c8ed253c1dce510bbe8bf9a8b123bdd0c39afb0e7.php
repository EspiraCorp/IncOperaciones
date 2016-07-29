<?php

/* IncentivesInventarioBundle:Inventario:planilladatos.html.twig */
class __TwigTemplate_440a18bff9e9d5c7b13f6dad653047d1d7926fe425177ff2f94e3e9d48ca58a1 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesInventarioBundle:Inventario:planilladatos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfb442536a25792503177d8fd26f01fc8b970fb6488000e9ebc38f7862945597 = $this->env->getExtension("native_profiler");
        $__internal_cfb442536a25792503177d8fd26f01fc8b970fb6488000e9ebc38f7862945597->enter($__internal_cfb442536a25792503177d8fd26f01fc8b970fb6488000e9ebc38f7862945597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:planilladatos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfb442536a25792503177d8fd26f01fc8b970fb6488000e9ebc38f7862945597->leave($__internal_cfb442536a25792503177d8fd26f01fc8b970fb6488000e9ebc38f7862945597_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_96f8025b4ccf465ea4f6ba2d1b1f40fe5aa28b21b78aaa0e0d05573efb4e6063 = $this->env->getExtension("native_profiler");
        $__internal_96f8025b4ccf465ea4f6ba2d1b1f40fe5aa28b21b78aaa0e0d05573efb4e6063->enter($__internal_96f8025b4ccf465ea4f6ba2d1b1f40fe5aa28b21b78aaa0e0d05573efb4e6063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Planilla";
        
        $__internal_96f8025b4ccf465ea4f6ba2d1b1f40fe5aa28b21b78aaa0e0d05573efb4e6063->leave($__internal_96f8025b4ccf465ea4f6ba2d1b1f40fe5aa28b21b78aaa0e0d05573efb4e6063_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_a62aeeeace53b2cc57782369e008aa2060d23dfc7d469e17c44a23eff51445f8 = $this->env->getExtension("native_profiler");
        $__internal_a62aeeeace53b2cc57782369e008aa2060d23dfc7d469e17c44a23eff51445f8->enter($__internal_a62aeeeace53b2cc57782369e008aa2060d23dfc7d469e17c44a23eff51445f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "
";
        // line 5
        $context["pendientes"] = 0;
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "planillatipo", array()), "id", array()) != 2)) {
            // line 7
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["redencionesPlanilla"]) ? $context["redencionesPlanilla"] : $this->getContext($context, "redencionesPlanilla")));
            foreach ($context['_seq'] as $context["_key"] => $context["inventario"]) {
                // line 8
                echo "\t\t\t    \t\t";
                $context["diasMax"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["inventario"], "redencion", array()), "participante", array()), "programa", array()), "diasentrega", array()) - 3);
                // line 9
                echo "\t\t\t    \t\t";
                $context["diferencia"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["inventario"], "redencion", array()), "fecha", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method");
                // line 10
                echo "\t\t\t\t\t\t";
                $context["dias"] = $this->getAttribute((isset($context["diferencia"]) ? $context["diferencia"] : $this->getContext($context, "diferencia")), "days", array());
                // line 11
                echo "\t\t\t\t\t\t";
                if (((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")) > (isset($context["diasMax"]) ? $context["diasMax"] : $this->getContext($context, "diasMax")))) {
                    $context["pendientes"] = ((isset($context["pendientes"]) ? $context["pendientes"] : $this->getContext($context, "pendientes")) + 1);
                }
                echo "\t\t    \t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inventario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 14
        echo "
<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Planilla
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("planillas_lista");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span6\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t
\t\t\t\t</i>Datos Planilla</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Id</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha</td><td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "fecha", array())), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Archivo</td><td>
\t\t\t\t\t\t\t";
        // line 39
        if (((isset($context["pendientes"]) ? $context["pendientes"] : $this->getContext($context, "pendientes")) == 0)) {
            // line 40
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("inventario_planilla_actualizar");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
            echo "/1\" target=\"_blank\" onClick=confirmar(\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("inventario_listado_planilla_estado", array("id" => $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()))), "html", null, true);
            echo "\")>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "ruta", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t</td></tr>
\t\t\t\t\t\t<tr><td>Pais</td><td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "pais", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Categoria</td><td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "categoria", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Requisiciones</td><td>";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "planillaestado", array()), "id", array()) != 2)) {
            echo "<a class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("planilla_requisicion");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
            echo "\">Agregar</a>";
        }
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t    
\t    ";
        // line 50
        if (array_key_exists("costoslogistica", $context)) {
            // line 51
            echo "\t    <div class=\"box span8\t\">
\t    \t<div class=\"box-content\">
\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("inventario_planilla_costos");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t</i>Costos Logistica</h2>
\t\t\t\t</div>
\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t    \t\t<tr><th>Descripción</th>
\t\t    \t\t\t<th>Cantidad</th>
\t\t    \t\t\t<th>Valor Unitario</th>
\t\t    \t\t\t<th>Valor Total</th>
\t\t    \t\t</tr>
\t\t    \t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["costoslogistica"]) ? $context["costoslogistica"] : $this->getContext($context, "costoslogistica")));
            foreach ($context['_seq'] as $context["_key"] => $context["costo"]) {
                // line 69
                echo "\t\t    \t\t<tr>
\t\t    \t\t\t<td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["costo"], "descripcion", array()), "html", null, true);
                echo "</td>
\t\t    \t\t\t<td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["costo"], "cantidad", array()), "html", null, true);
                echo "</td>
\t\t    \t\t\t<td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["costo"], "valorUnitario", array()), "html", null, true);
                echo "</td>
\t\t    \t\t\t<td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["costo"], "valorTotal", array()), "html", null, true);
                echo "</td>
\t\t    \t\t</tr>
\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['costo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t    \t</table>
\t    \t</div>
\t    </div>
\t    ";
        }
        // line 80
        echo "\t</div>

\t";
        // line 82
        if (($this->getAttribute($this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "planillatipo", array()), "id", array()) != 2)) {
            // line 83
            echo "\t\t";
            if (array_key_exists("redencionesPlanilla", $context)) {
                // line 84
                echo "\t\t    <div class=\"box span12\">
\t\t    \t<div class=\"box-content\">
\t\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t\t<h2>Justificacion Envios</h2>
\t\t\t\t\t</div>
\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t    \t\t<tr><th>Redencion</th>
\t\t\t    \t\t\t<th>Producto</th>
\t\t\t    \t\t\t<th>Referencia</th>
\t\t\t    \t\t\t<th>Programa</th>
\t\t\t    \t\t\t<th>Fecha Redencion</th>
\t\t\t    \t\t\t<th>Días</th>
\t\t\t    \t\t\t<th></th>
\t\t\t    \t\t</tr>
\t\t\t    \t";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["redencionesPlanilla"]) ? $context["redencionesPlanilla"] : $this->getContext($context, "redencionesPlanilla")));
                foreach ($context['_seq'] as $context["_key"] => $context["inventario"]) {
                    // line 99
                    echo "\t
\t\t\t    \t\t";
                    // line 100
                    $context["diasMax"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["inventario"], "redencion", array()), "participante", array()), "programa", array()), "diasentrega", array()) - 3);
                    // line 101
                    echo "\t\t\t    \t\t";
                    $context["diferencia"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["inventario"], "redencion", array()), "fecha", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method");
                    // line 102
                    echo "\t\t\t\t\t\t";
                    $context["dias"] = $this->getAttribute((isset($context["diferencia"]) ? $context["diferencia"] : $this->getContext($context, "diferencia")), "days", array());
                    // line 103
                    echo "\t\t\t\t\t\t";
                    if (((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")) > (isset($context["diasMax"]) ? $context["diasMax"] : $this->getContext($context, "diasMax")))) {
                        // line 104
                        echo "\t\t\t\t\t\t \t<tr>
\t\t\t\t    \t\t\t<td>";
                        // line 105
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventario"], "redencion", array()), "codigoredencion", array()), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t\t<td>";
                        // line 106
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventario"], "producto", array()), "nombre", array()), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t\t<td>";
                        // line 107
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventario"], "producto", array()), "referencia", array()), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t\t<td>";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["inventario"], "redencion", array()), "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t\t<td>";
                        // line 109
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["inventario"], "redencion", array()), "fecha", array()), "Y-m-d"), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t\t<td>";
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t\t<td><a class=\"btn btn-success\" href=\"";
                        // line 111
                        echo $this->env->getExtension('routing')->getPath("redenciones_justificacion");
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventario"], "redencion", array()), "id", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
                        echo "\">Justificar</a></td>
\t\t\t    \t\t\t</tr>
\t\t\t\t\t\t";
                    }
                    // line 114
                    echo "\t\t\t    \t\t
\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inventario'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t    \t</table>
\t\t    \t</div>
\t\t    </div>
\t\t    ";
            }
            // line 120
            echo "\t\t";
        }
        // line 121
        echo "
";
        
        $__internal_a62aeeeace53b2cc57782369e008aa2060d23dfc7d469e17c44a23eff51445f8->leave($__internal_a62aeeeace53b2cc57782369e008aa2060d23dfc7d469e17c44a23eff51445f8_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6699139e2be69baae0e03f0d90f48fa5a8dc75de9e449fd8b572c879c8a09d8 = $this->env->getExtension("native_profiler");
        $__internal_d6699139e2be69baae0e03f0d90f48fa5a8dc75de9e449fd8b572c879c8a09d8->enter($__internal_d6699139e2be69baae0e03f0d90f48fa5a8dc75de9e449fd8b572c879c8a09d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t <script type=\"text/javascript\">
      function confirmar(ruta)
      { 
            self.location=ruta;
      }
  </script>

";
        
        $__internal_d6699139e2be69baae0e03f0d90f48fa5a8dc75de9e449fd8b572c879c8a09d8->leave($__internal_d6699139e2be69baae0e03f0d90f48fa5a8dc75de9e449fd8b572c879c8a09d8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:planilladatos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 125,  325 => 124,  317 => 121,  314 => 120,  308 => 116,  301 => 114,  291 => 111,  287 => 110,  283 => 109,  279 => 108,  275 => 107,  271 => 106,  267 => 105,  264 => 104,  261 => 103,  258 => 102,  255 => 101,  253 => 100,  250 => 99,  246 => 98,  230 => 84,  227 => 83,  225 => 82,  221 => 80,  215 => 76,  206 => 73,  202 => 72,  198 => 71,  194 => 70,  191 => 69,  187 => 68,  169 => 55,  163 => 51,  161 => 50,  147 => 45,  143 => 44,  139 => 43,  136 => 42,  124 => 40,  122 => 39,  117 => 37,  113 => 36,  95 => 21,  86 => 14,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  60 => 7,  58 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Planilla{% endblock %}*/
/* {% block cuerpo %}*/
/* */
/* {% set pendientes = 0 %}*/
/* {% if(planilla.planillatipo.id != 2) %}*/
/* 	{% for inventario in redencionesPlanilla %}*/
/* 			    		{% set diasMax = inventario.redencion.participante.programa.diasentrega - 3 %}*/
/* 			    		{% set diferencia = date(inventario.redencion.fecha).diff(date("now")) %}*/
/* 						{% set dias = diferencia.days %}*/
/* 						{% if dias > diasMax %}{% set pendientes = pendientes + 1 %}{% endif %}		    		*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* */
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Planilla*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('planillas_lista') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				*/
/* 				</i>Datos Planilla</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Id</td><td>{{ planilla.id }}</td></tr>*/
/* 						<tr><td>Fecha</td><td>{{ planilla.fecha | date}}</td></tr>*/
/* 						<tr><td>Archivo</td><td>*/
/* 							{% if pendientes == 0 %}*/
/* 							<a href="{{ path('inventario_planilla_actualizar') }}/{{ planilla.id }}/1" target="_blank" onClick=confirmar("{{ url("inventario_listado_planilla_estado", {"id": planilla.id}) }}")>{{ planilla.ruta }}</a>*/
/* 							{% endif %}*/
/* 						</td></tr>*/
/* 						<tr><td>Pais</td><td>{{ planilla.pais.nombre }}</td></tr>*/
/* 						<tr><td>Categoria</td><td>{{ planilla.categoria.nombre }}</td></tr>*/
/* 						<tr><td>Requisiciones</td><td>{% if planilla.planillaestado.id != 2 %}<a class="btn btn-success" href="{{ path('planilla_requisicion') }}/{{ planilla.id }}">Agregar</a>{% endif %}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	    */
/* 	    {% if costoslogistica is defined %}*/
/* 	    <div class="box span8	">*/
/* 	    	<div class="box-content">*/
/* 		    	<div class="box-header well">*/
/* 					<h2>*/
/* 					<a href="{{ path('inventario_planilla_costos') }}/{{ planilla.id }}">*/
/* 						<button class="btn btn-primary">*/
/* 							<i class="icon-edit icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					</i>Costos Logistica</h2>*/
/* 				</div>*/
/* 		    	<table class="table table-bordered table-striped">*/
/* 		    		<tr><th>Descripción</th>*/
/* 		    			<th>Cantidad</th>*/
/* 		    			<th>Valor Unitario</th>*/
/* 		    			<th>Valor Total</th>*/
/* 		    		</tr>*/
/* 		    	{% for costo in costoslogistica %}*/
/* 		    		<tr>*/
/* 		    			<td>{{ costo.descripcion }}</td>*/
/* 		    			<td>{{ costo.cantidad }}</td>*/
/* 		    			<td>{{ costo.valorUnitario }}</td>*/
/* 		    			<td>{{ costo.valorTotal }}</td>*/
/* 		    		</tr>*/
/* 		    	{% endfor %}*/
/* 		    	</table>*/
/* 	    	</div>*/
/* 	    </div>*/
/* 	    {% endif %}*/
/* 	</div>*/
/* */
/* 	{% if(planilla.planillatipo.id != 2) %}*/
/* 		{% if redencionesPlanilla is defined %}*/
/* 		    <div class="box span12">*/
/* 		    	<div class="box-content">*/
/* 			    	<div class="box-header well">*/
/* 						<h2>Justificacion Envios</h2>*/
/* 					</div>*/
/* 			    	<table class="table table-bordered table-striped">*/
/* 			    		<tr><th>Redencion</th>*/
/* 			    			<th>Producto</th>*/
/* 			    			<th>Referencia</th>*/
/* 			    			<th>Programa</th>*/
/* 			    			<th>Fecha Redencion</th>*/
/* 			    			<th>Días</th>*/
/* 			    			<th></th>*/
/* 			    		</tr>*/
/* 			    	{% for inventario in redencionesPlanilla %}*/
/* 	*/
/* 			    		{% set diasMax = inventario.redencion.participante.programa.diasentrega - 3 %}*/
/* 			    		{% set diferencia = date(inventario.redencion.fecha).diff(date("now")) %}*/
/* 						{% set dias = diferencia.days %}*/
/* 						{% if dias > diasMax %}*/
/* 						 	<tr>*/
/* 				    			<td>{{ inventario.redencion.codigoredencion }}</td>*/
/* 				    			<td>{{ inventario.producto.nombre }}</td>*/
/* 				    			<td>{{ inventario.producto.referencia }}</td>*/
/* 				    			<td>{{ inventario.redencion.participante.programa.nombre }}</td>*/
/* 				    			<td>{{ inventario.redencion.fecha | date("Y-m-d") }}</td>*/
/* 				    			<td>{{ dias }}</td>*/
/* 				    			<td><a class="btn btn-success" href="{{ path('redenciones_justificacion') }}/{{ inventario.redencion.id }}/{{ planilla.id }}">Justificar</a></td>*/
/* 			    			</tr>*/
/* 						{% endif %}*/
/* 			    		*/
/* 			    	{% endfor %}*/
/* 			    	</table>*/
/* 		    	</div>*/
/* 		    </div>*/
/* 		    {% endif %}*/
/* 		{% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	 <script type="text/javascript">*/
/*       function confirmar(ruta)*/
/*       { */
/*             self.location=ruta;*/
/*       }*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
