<?php

/* IncentivesCatalogoBundle:Cliente:datos.html.twig */
class __TwigTemplate_deaf5c5fc72d10d59af1eef9beff767d3023da00a782b58ec529b0bbefd79c96 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesCatalogoBundle:Cliente:datos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a3a408edd75df0a542dc1c997a80473027b42e482632e1f636da5329ecbf7e5 = $this->env->getExtension("native_profiler");
        $__internal_1a3a408edd75df0a542dc1c997a80473027b42e482632e1f636da5329ecbf7e5->enter($__internal_1a3a408edd75df0a542dc1c997a80473027b42e482632e1f636da5329ecbf7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Cliente:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a3a408edd75df0a542dc1c997a80473027b42e482632e1f636da5329ecbf7e5->leave($__internal_1a3a408edd75df0a542dc1c997a80473027b42e482632e1f636da5329ecbf7e5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bc680c16617a64179a12602f285b8fccc5ca56d157c2117dd4e3cb395a60ff8 = $this->env->getExtension("native_profiler");
        $__internal_7bc680c16617a64179a12602f285b8fccc5ca56d157c2117dd4e3cb395a60ff8->enter($__internal_7bc680c16617a64179a12602f285b8fccc5ca56d157c2117dd4e3cb395a60ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Cliente";
        
        $__internal_7bc680c16617a64179a12602f285b8fccc5ca56d157c2117dd4e3cb395a60ff8->leave($__internal_7bc680c16617a64179a12602f285b8fccc5ca56d157c2117dd4e3cb395a60ff8_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6b8d9629211eeea1364daa1db5c873ba16b3e0aa83eed230215679114808ce72 = $this->env->getExtension("native_profiler");
        $__internal_6b8d9629211eeea1364daa1db5c873ba16b3e0aa83eed230215679114808ce72->enter($__internal_6b8d9629211eeea1364daa1db5c873ba16b3e0aa83eed230215679114808ce72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Cliente
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("cliente");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_editar", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t</i>Datos Cliente</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Nombre</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Documento</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "tipodocumento", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "numerodocumento", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Direccion</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "direccion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Telefono</td><td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Correo</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "correo", array()), "html", null, true);
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
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programa_nuevo", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\tProgramas
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t";
        // line 51
        if ((twig_length_filter($this->env, (isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa"))) != 0)) {
            // line 52
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Fecha de inicio</th>
\t\t\t\t\t\t<th>Fecha finalizacion</th>
\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")));
            foreach ($context['_seq'] as $context["_key"] => $context["programas"]) {
                echo "\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["programas"], "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programas"], "fechainicio", array()), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programas"], "fechafin", array()), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 67
                if (($this->getAttribute($context["programas"], "estado", array()) == "0")) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger 1\" onClick=confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("programa_estado", array("id" => $this->getAttribute($context["programas"], "id", array()))), "html", null, true);
                    echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tInactiva</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success 1\" onClick=confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("programa_estado", array("id" => $this->getAttribute($context["programas"], "id", array()))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 80
        echo "\t\t</div>
\t</div>

\t<div class=\"box span6\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("catalogo");
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-th-list icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>\t
\t\t\t\t\tCatalogos
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t";
        // line 95
        if ((twig_length_filter($this->env, (isset($context["catalogos"]) ? $context["catalogos"] : $this->getContext($context, "catalogos"))) != 0)) {
            // line 96
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t\t<th>Programa</th>
\t\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["catalogos"]) ? $context["catalogos"] : $this->getContext($context, "catalogos")));
            foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
                // line 107
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "descripcion", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
                // line 111
                if (($this->getAttribute($context["catalogo"], "estado", array()) == "0")) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger 1\" onClick=confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_estado", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                    echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tInactivo</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success 1\" onClick=confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_estado", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                    echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tActivo</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
        }
        // line 124
        echo "\t\t</div>
\t</div>
\t

";
        
        $__internal_6b8d9629211eeea1364daa1db5c873ba16b3e0aa83eed230215679114808ce72->leave($__internal_6b8d9629211eeea1364daa1db5c873ba16b3e0aa83eed230215679114808ce72_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1126af4a2ab285d0d8b5c419ed2c270b7548ef94cfbcbcd584b61d9995901aba = $this->env->getExtension("native_profiler");
        $__internal_1126af4a2ab285d0d8b5c419ed2c270b7548ef94cfbcbcd584b61d9995901aba->enter($__internal_1126af4a2ab285d0d8b5c419ed2c270b7548ef94cfbcbcd584b61d9995901aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

\t</script>
";
        
        $__internal_1126af4a2ab285d0d8b5c419ed2c270b7548ef94cfbcbcd584b61d9995901aba->leave($__internal_1126af4a2ab285d0d8b5c419ed2c270b7548ef94cfbcbcd584b61d9995901aba_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Cliente:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 131,  283 => 130,  272 => 124,  267 => 121,  259 => 118,  252 => 115,  245 => 112,  243 => 111,  239 => 110,  235 => 109,  231 => 108,  228 => 107,  224 => 106,  212 => 96,  210 => 95,  199 => 87,  190 => 80,  185 => 77,  177 => 74,  170 => 71,  163 => 68,  161 => 67,  157 => 66,  153 => 65,  149 => 64,  142 => 62,  130 => 52,  128 => 51,  117 => 43,  104 => 33,  100 => 32,  96 => 31,  90 => 30,  86 => 29,  73 => 19,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Cliente{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Cliente*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('cliente') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				<a href="{{ path('cliente_editar',  {"id": cliente.id}) }}">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-edit icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				</i>Datos Cliente</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Nombre</td><td>{{ cliente.nombre }}</td></tr>*/
/* 						<tr><td>Documento</td><td>{{ cliente.tipodocumento.nombre}} {{ cliente.numerodocumento }}</td></tr>*/
/* 						<tr><td>Direccion</td><td>{{ cliente.direccion }}</td></tr>*/
/* 						<tr><td>Telefono</td><td>{{ cliente.telefono }}</td></tr>*/
/* 						<tr><td>Correo</td><td>{{ cliente.correo }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span5">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('programa_nuevo',  {"id": cliente.id}) }}">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					Programas*/
/* 				</h2>*/
/* 			</div>*/
/* 			{% if programa | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Nombre</th>*/
/* 						<th>Fecha de inicio</th>*/
/* 						<th>Fecha finalizacion</th>*/
/* 						<th>Estado</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for programas in programa %}		*/
/* 							<tr>*/
/* 								<td>{{ programas.nombre }}</td>*/
/* 								<td>{{ programas.fechainicio | date("d-m-Y") }}</td>*/
/* 								<td>{{ programas.fechafin | date("d-m-Y") }}</td>*/
/* 								<td>{% if (programas.estado=='0') %}*/
/* 										<a class="btn btn-danger 1" onClick=confirmar('{{ url("programa_estado", {"id": programas.id}) }}') href="#">*/
/* 										Inactiva</a>*/
/* 									{% else %}*/
/* 										<a class="btn btn-success 1" onClick=confirmar('{{ url("programa_estado", {"id": programas.id}) }}') href="#">*/
/* 										Activa</a>*/
/* 									{% endif %}*/
/* 								</td>*/
/* 							</tr>			*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span6">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('catalogo') }}">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-th-list icon-white"></i>*/
/* 						</button>*/
/* 					</a>	*/
/* 					Catalogos*/
/* 				</h2>*/
/* 			</div>*/
/* 			{% if catalogos | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>Nombre</th>*/
/* 							<th>Programa</th>*/
/* 							<th>Descripcion</th>*/
/* 							<th>Estado</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{% for catalogo in catalogos %}*/
/* 						<tr>*/
/* 							<td>{{catalogo.nombre}}</td>*/
/* 							<td>{{catalogo.programa.nombre}}</td>*/
/* 							<td>{{catalogo.descripcion}}</td>							*/
/* 							<td>{% if (catalogo.estado=='0') %}*/
/* 										<a class="btn btn-danger 1" onClick=confirmar('{{ url("catalogo_estado", {"id": catalogo.id}) }}') href="#">*/
/* 										Inactivo</a>*/
/* 									{% else %}*/
/* 										<a class="btn btn-success 1" onClick=confirmar('{{ url("catalogo_estado", {"id": catalogo.id}) }}') href="#">*/
/* 										Activo</a>*/
/* 									{% endif %}*/
/* 								</td>*/
/* 						</tr>*/
/* 						{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 				{% endif %}*/
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
/* 	</script>*/
/* {% endblock %}*/
/* */
