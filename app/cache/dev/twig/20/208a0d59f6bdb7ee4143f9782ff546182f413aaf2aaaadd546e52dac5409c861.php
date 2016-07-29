<?php

/* IncentivesFacturacionBundle:Presupuesto:detalle.html.twig */
class __TwigTemplate_aec0b91b6fe712634d80ed945f1027b1316c745ce604e8df13693254e13dc120 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesFacturacionBundle:Presupuesto:detalle.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be16012878f67faa6ed8b47833608da093f9ce5ca64034c7c36eb03a67cc91a9 = $this->env->getExtension("native_profiler");
        $__internal_be16012878f67faa6ed8b47833608da093f9ce5ca64034c7c36eb03a67cc91a9->enter($__internal_be16012878f67faa6ed8b47833608da093f9ce5ca64034c7c36eb03a67cc91a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Presupuesto:detalle.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be16012878f67faa6ed8b47833608da093f9ce5ca64034c7c36eb03a67cc91a9->leave($__internal_be16012878f67faa6ed8b47833608da093f9ce5ca64034c7c36eb03a67cc91a9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e82f267df8f2c6a8298467c98519603e5123e2bd5b2b8a423254b075a41237c = $this->env->getExtension("native_profiler");
        $__internal_8e82f267df8f2c6a8298467c98519603e5123e2bd5b2b8a423254b075a41237c->enter($__internal_8e82f267df8f2c6a8298467c98519603e5123e2bd5b2b8a423254b075a41237c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Presupuesto Programa";
        
        $__internal_8e82f267df8f2c6a8298467c98519603e5123e2bd5b2b8a423254b075a41237c->leave($__internal_8e82f267df8f2c6a8298467c98519603e5123e2bd5b2b8a423254b075a41237c_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d51872f6e0a8f6b6223316cae06d9ec164600cb7040b216692afea17b83b4305 = $this->env->getExtension("native_profiler");
        $__internal_d51872f6e0a8f6b6223316cae06d9ec164600cb7040b216692afea17b83b4305->enter($__internal_d51872f6e0a8f6b6223316cae06d9ec164600cb7040b216692afea17b83b4305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "
<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box\">
\t    <div class=\"box-header well\" data-original-title=\"\">
\t        Presupuesto Programa
\t        <div class=\"box-icon\">
\t\t\t\t\t<div class=\"box-icon\">
\t                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("presupuesto_listado");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
\t                </div>
\t    \t</div>
\t    </div>
\t</div>

\t <div class=\"box span10\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>Datos Programa</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Nombre</td><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "nombre", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>Cliente</td><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Descripcion</td><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "descripcion", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>Fecha inicio</td><td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "fechainicio", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha fin</td><td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "fechafin", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>Iva</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "iva", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Logistica</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "logistica", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>Días de entrega</td><td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "diasentrega", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span12\">
\t    <div class=\"box-content\">
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Area</th>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Presupuesto</th>
\t\t\t\t\t\t<th>Ejecutado</th>
\t\t\t\t\t\t<th>%</th>
\t\t\t\t\t\t<th>Editar</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            echo "\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presupuestos"]) ? $context["presupuestos"] : $this->getContext($context, "presupuestos")), $this->getAttribute($context["area"], "id", array()), array(), "array"), "descripcion", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presupuestos"]) ? $context["presupuestos"] : $this->getContext($context, "presupuestos")), $this->getAttribute($context["area"], "id", array()), array(), "array"), "valor", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presupuestos"]) ? $context["presupuestos"] : $this->getContext($context, "presupuestos")), $this->getAttribute($context["area"], "id", array()), array(), "array"), "ejecutado", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presupuestos"]) ? $context["presupuestos"] : $this->getContext($context, "presupuestos")), $this->getAttribute($context["area"], "id", array()), array(), "array"), "porc", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupuesto_editar", array("programa" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()), "area" => $this->getAttribute($context["area"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Total</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presupuestos"]) ? $context["presupuestos"] : $this->getContext($context, "presupuestos")), "total", array(), "array"), "valor", array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presupuestos"]) ? $context["presupuestos"] : $this->getContext($context, "presupuestos")), "total", array(), "array"), "ejecutado", array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presupuestos"]) ? $context["presupuestos"] : $this->getContext($context, "presupuestos")), "total", array(), "array"), "porc", array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>\t

";
        
        $__internal_d51872f6e0a8f6b6223316cae06d9ec164600cb7040b216692afea17b83b4305->leave($__internal_d51872f6e0a8f6b6223316cae06d9ec164600cb7040b216692afea17b83b4305_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16c27e51ff2c22ef2e4ad4d95129a8e78db99173c86e436187d4d34d2e9d620d = $this->env->getExtension("native_profiler");
        $__internal_16c27e51ff2c22ef2e4ad4d95129a8e78db99173c86e436187d4d34d2e9d620d->enter($__internal_16c27e51ff2c22ef2e4ad4d95129a8e78db99173c86e436187d4d34d2e9d620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
";
        
        $__internal_16c27e51ff2c22ef2e4ad4d95129a8e78db99173c86e436187d4d34d2e9d620d->leave($__internal_16c27e51ff2c22ef2e4ad4d95129a8e78db99173c86e436187d4d34d2e9d620d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Presupuesto:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 84,  201 => 83,  185 => 73,  181 => 72,  177 => 71,  172 => 68,  158 => 60,  153 => 58,  149 => 57,  145 => 56,  141 => 55,  137 => 54,  130 => 52,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  62 => 11,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Presupuesto Programa{% endblock %}*/
/* {% block cuerpo %}*/
/* */
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box">*/
/* 	    <div class="box-header well" data-original-title="">*/
/* 	        Presupuesto Programa*/
/* 	        <div class="box-icon">*/
/* 					<div class="box-icon">*/
/* 	                    <a href="{{ path('presupuesto_listado') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/* 	                </div>*/
/* 	    	</div>*/
/* 	    </div>*/
/* 	</div>*/
/* */
/* 	 <div class="box span10">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>Datos Programa</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Nombre</td><td>{{ programa.nombre }}</td>*/
/* 							<td>Cliente</td><td>{{ programa.cliente.nombre}}</td></tr>*/
/* 						<tr><td>Descripcion</td><td>{{ programa.descripcion }}</td>*/
/* 							<td>Fecha inicio</td><td>{{ programa.fechainicio | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Fecha fin</td><td>{{ programa.fechafin | date("Y-m-d") }}</td>*/
/* 							<td>Iva</td><td>{{ programa.iva }}</td></tr>*/
/* 						<tr><td>Logistica</td><td>{{ programa.logistica }}</td>*/
/* 							<td>Días de entrega</td><td>{{ programa.diasentrega }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span12">*/
/* 	    <div class="box-content">*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Area</th>*/
/* 						<th>Descripcion</th>*/
/* 						<th>Presupuesto</th>*/
/* 						<th>Ejecutado</th>*/
/* 						<th>%</th>*/
/* 						<th>Editar</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for area in areas %}		*/
/* 					<tr>*/
/* 						<td>{{ area.nombre }}</td>*/
/* 						<td>{{ presupuestos[area.id]['descripcion'] }}</td>*/
/* 						<td>{{ presupuestos[area.id]['valor'] }}</td>*/
/* 						<td>{{ presupuestos[area.id]['ejecutado'] }}</td>*/
/* 						<td>{{ presupuestos[area.id]['porc'] }}</td>*/
/* 						<td>*/
/* 							<a href="{{ path('presupuesto_editar',  {"programa": programa.id, "area": area.id}) }}">*/
/* 								<button class="btn btn-primary">*/
/* 									<i class="icon-edit icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 						</td>*/
/* 					</tr>			*/
/* 					{% endfor %}*/
/* 					<tr>*/
/* 						<td>Total</td>*/
/* 						<td></td>*/
/* 						<td>{{ presupuestos['total']['valor'] }}</td>*/
/* 						<td>{{ presupuestos['total']['ejecutado'] }}</td>*/
/* 						<td>{{ presupuestos['total']['porc'] }}</td>*/
/* 					</tr>*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* </div>	*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	*/
/* {% endblock %}*/
/* */
