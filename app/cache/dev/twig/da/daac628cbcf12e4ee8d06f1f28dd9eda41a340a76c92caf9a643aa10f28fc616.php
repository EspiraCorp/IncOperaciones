<?php

/* IncentivesCatalogoBundle:Programa:datos.html.twig */
class __TwigTemplate_d2e11ae88e20756366f9fd284b8fbf604371f96d7d426c7092e4b1399fd6d4d8 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesCatalogoBundle:Programa:datos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b68fbd9f13437f04ab9466aa7b239197d68f16a588e26e354e0b69c7b0c2e493 = $this->env->getExtension("native_profiler");
        $__internal_b68fbd9f13437f04ab9466aa7b239197d68f16a588e26e354e0b69c7b0c2e493->enter($__internal_b68fbd9f13437f04ab9466aa7b239197d68f16a588e26e354e0b69c7b0c2e493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Programa:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68fbd9f13437f04ab9466aa7b239197d68f16a588e26e354e0b69c7b0c2e493->leave($__internal_b68fbd9f13437f04ab9466aa7b239197d68f16a588e26e354e0b69c7b0c2e493_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fab9e927860e4cef805994bdd23f57b9e197a3efe072bc3d7854d37c3eb20703 = $this->env->getExtension("native_profiler");
        $__internal_fab9e927860e4cef805994bdd23f57b9e197a3efe072bc3d7854d37c3eb20703->enter($__internal_fab9e927860e4cef805994bdd23f57b9e197a3efe072bc3d7854d37c3eb20703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Programa";
        
        $__internal_fab9e927860e4cef805994bdd23f57b9e197a3efe072bc3d7854d37c3eb20703->leave($__internal_fab9e927860e4cef805994bdd23f57b9e197a3efe072bc3d7854d37c3eb20703_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_bdd5b74397b03d12ef59f1fd2be76cae0f6371e258a9abc847f1990be375f7bb = $this->env->getExtension("native_profiler");
        $__internal_bdd5b74397b03d12ef59f1fd2be76cae0f6371e258a9abc847f1990be375f7bb->enter($__internal_bdd5b74397b03d12ef59f1fd2be76cae0f6371e258a9abc847f1990be375f7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Programa
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("programa");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programa_editar", array("id" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t</i>Datos Programa</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Nombre</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Descripcion</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "descripcion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha inicio</td><td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "fechainicio", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha fin</td><td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "fechafin", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Iva</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "iva", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Centro Costos</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "centrocostos", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Días de entrega</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "diasentrega", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span5\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_nuevo", array("id" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\tCatalogos
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogos"]) ? $context["catalogos"] : $this->getContext($context, "catalogos")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
            echo "\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 67
            if (($this->getAttribute($context["catalogo"], "estado", array()) == "0")) {
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_estado", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tInactiva</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_estado", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tActiva</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t

";
        
        $__internal_bdd5b74397b03d12ef59f1fd2be76cae0f6371e258a9abc847f1990be375f7bb->leave($__internal_bdd5b74397b03d12ef59f1fd2be76cae0f6371e258a9abc847f1990be375f7bb_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf33e74751bee2a6381e75fab1a1ba4525115cdf6c1d13f039d22fe1c0d7bebf = $this->env->getExtension("native_profiler");
        $__internal_cf33e74751bee2a6381e75fab1a1ba4525115cdf6c1d13f039d22fe1c0d7bebf->enter($__internal_cf33e74751bee2a6381e75fab1a1ba4525115cdf6c1d13f039d22fe1c0d7bebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
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
        // line 118
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
        // line 140
        echo $this->env->getExtension('routing')->getUrl("proveedores_estado", array("id" => "+parrafo+"));
        echo "\",\t
\t\t// \t\t\tfunction() {
\t\t// \t\t\t\talert( \"Actualizacion realizada.\" );
\t\t// \t\t\t} );
\t\t// \t});
\t\t// })
\t</script>
";
        
        $__internal_cf33e74751bee2a6381e75fab1a1ba4525115cdf6c1d13f039d22fe1c0d7bebf->leave($__internal_cf33e74751bee2a6381e75fab1a1ba4525115cdf6c1d13f039d22fe1c0d7bebf_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Programa:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 140,  241 => 118,  205 => 86,  199 => 85,  186 => 77,  178 => 74,  171 => 71,  164 => 68,  162 => 67,  158 => 66,  154 => 65,  147 => 63,  127 => 46,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  73 => 19,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Programa{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Programa*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('programa') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				<a href="{{ path('programa_editar',  {"id": programa.id}) }}">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-edit icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				</i>Datos Programa</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Nombre</td><td>{{ programa.nombre }}</td></tr>*/
/* 						<tr><td>Cliente</td><td>{{ programa.cliente.nombre}}</td></tr>*/
/* 						<tr><td>Descripcion</td><td>{{ programa.descripcion }}</td></tr>*/
/* 						<tr><td>Fecha inicio</td><td>{{ programa.fechainicio | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Fecha fin</td><td>{{ programa.fechafin | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Iva</td><td>{{ programa.iva }}</td></tr>*/
/* 						<tr><td>Centro Costos</td><td>{{ programa.centrocostos }}</td></tr>*/
/* 						<tr><td>Días de entrega</td><td>{{ programa.diasentrega }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span5">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('catalogo_nuevo',  {"id": programa.id}) }}">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					Catalogos*/
/* 				</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Nombre</th>*/
/* 						<th>Descripcion</th>*/
/* 						<th>Estado</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for catalogo in catalogos %}		*/
/* 							<tr>*/
/* 								<td>{{ catalogo.nombre }}</td>*/
/* 								<td>{{ catalogo.descripcion }}</td>*/
/* 								<td>{% if (catalogo.estado=='0') %}*/
/* 										<a class="btn btn-danger 1" onClick=confirmar('{{ url("catalogo_estado", {"id": catalogo.id}) }}') href="#">*/
/* 										Inactiva</a>*/
/* 									{% else %}*/
/* 										<a class="btn btn-success 1" onClick=confirmar('{{ url("catalogo_estado", {"id": catalogo.id}) }}') href="#">*/
/* 										Activa</a>*/
/* 									{% endif %}*/
/* 								</td>*/
/* 							</tr>			*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
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
