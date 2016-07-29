<?php

/* IncentivesOperacionesBundle:Convocatorias:datos.html.twig */
class __TwigTemplate_32bcd0eaf046a795f7dd11c9e95f506f18980d0dfffc7d4456dadde69934e351 extends Twig_Template
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
        // line 2
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesOperacionesBundle:Convocatorias:datos.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c474fdfa6925bfdd581462ed16a6b73fbf850cc1cb31a7d5be4ba371c6cb619 = $this->env->getExtension("native_profiler");
        $__internal_4c474fdfa6925bfdd581462ed16a6b73fbf850cc1cb31a7d5be4ba371c6cb619->enter($__internal_4c474fdfa6925bfdd581462ed16a6b73fbf850cc1cb31a7d5be4ba371c6cb619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Convocatorias:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c474fdfa6925bfdd581462ed16a6b73fbf850cc1cb31a7d5be4ba371c6cb619->leave($__internal_4c474fdfa6925bfdd581462ed16a6b73fbf850cc1cb31a7d5be4ba371c6cb619_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cfbb6de9289efeb2976fec463370c2562027da57cfe3b3597217981a94dc558 = $this->env->getExtension("native_profiler");
        $__internal_8cfbb6de9289efeb2976fec463370c2562027da57cfe3b3597217981a94dc558->enter($__internal_8cfbb6de9289efeb2976fec463370c2562027da57cfe3b3597217981a94dc558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Convocatoria";
        
        $__internal_8cfbb6de9289efeb2976fec463370c2562027da57cfe3b3597217981a94dc558->leave($__internal_8cfbb6de9289efeb2976fec463370c2562027da57cfe3b3597217981a94dc558_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_4eb5293d85a3ecc0c47399cfdf64653c442dad09bc9d641ba72bdbe4e55ae127 = $this->env->getExtension("native_profiler");
        $__internal_4eb5293d85a3ecc0c47399cfdf64653c442dad09bc9d641ba72bdbe4e55ae127->enter($__internal_4eb5293d85a3ecc0c47399cfdf64653c442dad09bc9d641ba72bdbe4e55ae127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Convocatorias
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("convocatorias");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span6\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t";
        // line 20
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 21
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("convocatorias_editar", array("id" => $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "id", array()))), "html", null, true);
            echo "\" title=\"Editar Convocatoria\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\tDatos Convocatoria</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Titulo</td><td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "titulo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Descripción</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "descripcion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha Inicio</td><td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "fechaInicio", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha Fin</td><td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "fechaFin", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t";
        // line 36
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 37
            echo "\t\t\t\t\t\t<tr><td>Solicitud</td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitudes_datos", array("id" => $this->getAttribute($this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "solicitud", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "solicitud", array()), "id", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "solicitud", array()), "titulo", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "solicitud", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "solicitud", array()), "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
            echo "</td>\t
\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t<tr><td>Estado</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "estado", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>
\t
\t<div class=\"box span4\">
\t   \t<div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t";
        // line 51
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 52
            echo "\t\t\t\t\t<a id=\"agregar_archivos\" href=\"";
            echo $this->env->getExtension('routing')->getPath("convocatorias_archivos");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t</i>Archivos</h2>
\t\t\t</div>
\t\t\t";
        // line 60
        if (array_key_exists("archivos", $context)) {
            // line 61
            echo "\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t    \t\t<tr>
\t\t    \t\t\t<th>Archivo</th>
\t\t    \t\t\t<th>Estado</th>
\t\t    \t\t</tr>
\t\t    \t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["archivos"]) ? $context["archivos"] : $this->getContext($context, "archivos")));
            foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
                // line 67
                echo "\t\t    \t\t<tr>
\t\t    \t\t\t<td><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute($context["archivo"], "archivo", array()), 5)), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["archivo"], "archivo", array()), "html", null, true);
                echo "</a></td>
\t\t    \t\t\t<td>";
                // line 69
                if (($this->getAttribute($this->getAttribute($context["archivo"], "estado", array()), "id", array()) != 1)) {
                    echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("convocatorias_archivo_estado", array("id" => $this->getAttribute($context["archivo"], "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Inactivo</a>";
                } else {
                    echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("convocatorias_archivo_estado", array("id" => $this->getAttribute($context["archivo"], "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Activo</a>";
                }
                echo "</td>
\t\t    \t\t</tr>
\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t    \t</table>
\t\t    ";
        }
        // line 74
        echo "\t  \t</div>
\t</div>

\t<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\tProveedores
\t\t\t\t</h2>
\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t";
        // line 84
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 85
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("convocatorias_proveedor", array("id" => $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "id", array()))), "html", null, true);
            echo "\" title=\"Adicionar Proveedor\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t\t<th>Archivo</th>
\t\t\t\t\t\t\t<th>Fecha de Carga</th>
\t\t\t\t\t\t\t<th>Observación</th>
\t\t\t\t\t\t\t";
        // line 101
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 102
            echo "\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) ? $context["proveedores"] : $this->getContext($context, "proveedores")));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 108
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute($context["proveedor"], "ruta", array()), 5)), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "archivo", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "archivo", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proveedor"], "fechaCarga", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "observacion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 113
            if ($this->env->getExtension('security')->isGranted("ROLE_PROV")) {
                // line 114
                echo "\t\t\t\t\t\t\t<td>";
                if (($this->getAttribute($this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "estado", array()), "id", array()) == 1)) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->env->getExtension('routing')->getPath("convocatorias_cargaproveedor");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-small btn-info\">Cargar</a>
\t\t\t\t\t\t\t\t";
                }
                // line 116
                echo "</td>
\t\t\t\t\t\t\t";
            } else {
                // line 118
                echo "\t\t\t\t\t\t\t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("convocatorias_correoa", array("id" => $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "id", array()), "id_prov" => $this->getAttribute($this->getAttribute($context["proveedor"], "proveedor", array()), "id", array()))), "html", null, true);
                echo "\"  class=\"btn btn-info\" title=\"Enviar notificación\">
\t\t\t\t\t\t\t\t<i class=\"icon-envelope icon-white\"></i>
\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>


</div>

";
        
        $__internal_4eb5293d85a3ecc0c47399cfdf64653c442dad09bc9d641ba72bdbe4e55ae127->leave($__internal_4eb5293d85a3ecc0c47399cfdf64653c442dad09bc9d641ba72bdbe4e55ae127_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53b50851276711fd99e297d9a76f7c270c2aa6f26c31b69d288a015ac00956ba = $this->env->getExtension("native_profiler");
        $__internal_53b50851276711fd99e297d9a76f7c270c2aa6f26c31b69d288a015ac00956ba->enter($__internal_53b50851276711fd99e297d9a76f7c270c2aa6f26c31b69d288a015ac00956ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>

\tfunction confirmar(ruta)
\t{
\t  if (confirm(\"Deseo eliminar el documento\")==true){
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
\t\t
\t\$(\"#agregar_archivos\").colorbox({href:\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("convocatorias_archivos", array("id" => $this->getAttribute((isset($context["convocatoria"]) ? $context["convocatoria"] : $this->getContext($context, "convocatoria")), "id", array()))), "html", null, true);
        echo "\"});

\t</script>
";
        
        $__internal_53b50851276711fd99e297d9a76f7c270c2aa6f26c31b69d288a015ac00956ba->leave($__internal_53b50851276711fd99e297d9a76f7c270c2aa6f26c31b69d288a015ac00956ba_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Convocatorias:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 159,  329 => 135,  323 => 134,  308 => 124,  301 => 122,  293 => 118,  289 => 116,  281 => 115,  278 => 114,  276 => 113,  272 => 112,  268 => 111,  261 => 110,  257 => 109,  254 => 108,  250 => 107,  245 => 104,  241 => 102,  239 => 101,  228 => 92,  217 => 85,  215 => 84,  203 => 74,  199 => 72,  182 => 69,  176 => 68,  173 => 67,  169 => 66,  162 => 61,  160 => 60,  156 => 58,  144 => 52,  142 => 51,  128 => 41,  123 => 39,  119 => 38,  110 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  85 => 27,  75 => 21,  73 => 20,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  20 => 2,);
    }
}
/* {#% extends '::base.html.twig' %#}*/
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Convocatoria{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Convocatorias*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('convocatorias') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				{% if not is_granted('ROLE_PROV') %}*/
/* 				<a href="{{ path('convocatorias_editar', {"id": convocatoria.id} ) }}" title="Editar Convocatoria">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-edit icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				{% endif %}*/
/* 				Datos Convocatoria</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Titulo</td><td>{{ convocatoria.titulo }}</td></tr>*/
/* 						<tr><td>Descripción</td><td>{{ convocatoria.descripcion }}</td></tr>*/
/* 						<tr><td>Fecha Inicio</td><td>{{ convocatoria.fechaInicio | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Fecha Fin</td><td>{{ convocatoria.fechaFin | date("Y-m-d") }}</td></tr>*/
/* 						{% if not is_granted('ROLE_PROV') %}*/
/* 						<tr><td>Solicitud</td><td><a href="{{ path('solicitudes_datos', {"id": convocatoria.solicitud.id} ) }}">{{ convocatoria.solicitud.id }} - {{ convocatoria.solicitud.titulo }}</a></td>*/
/* 						<tr><td>Programa</td><td>{{ convocatoria.solicitud.programa.nombre }}</td>							*/
/* 						<tr><td>Cliente</td><td>{{ convocatoria.solicitud.programa.cliente.nombre }}</td>	*/
/* 						{% endif %}*/
/* 						<tr><td>Estado</td><td>{{ convocatoria.estado.nombre }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="box span4">*/
/* 	   	<div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				{% if not is_granted('ROLE_PROV') %}*/
/* 					<a id="agregar_archivos" href="{{ path('convocatorias_archivos') }}/{{ convocatoria.id }}">*/
/* 						<button class="btn btn-primary">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 				{% endif %}*/
/* 				</i>Archivos</h2>*/
/* 			</div>*/
/* 			{% if archivos is defined %}*/
/* 		    	<table class="table table-bordered table-striped">*/
/* 		    		<tr>*/
/* 		    			<th>Archivo</th>*/
/* 		    			<th>Estado</th>*/
/* 		    		</tr>*/
/* 		    	{% for archivo in archivos %}*/
/* 		    		<tr>*/
/* 		    			<td><a href="{{asset(archivo.archivo | slice (5))}}" target="_blank">{{ archivo.archivo  }}</a></td>*/
/* 		    			<td>{% if (archivo.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("convocatorias_archivo_estado", {"id": archivo.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("convocatorias_archivo_estado", {"id": archivo.id}) }}')" href="#">Activo</a>{% endif %}</td>*/
/* 		    		</tr>*/
/* 		    	{% endfor %}*/
/* 		    	</table>*/
/* 		    {% endif %}*/
/* 	  	</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span12">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					Proveedores*/
/* 				</h2>*/
/* 				<div class="box-icon">*/
/* 					{% if not is_granted('ROLE_PROV') %}*/
/* 					<a href="{{ path('convocatorias_proveedor',  {"id": convocatoria.id}) }}" title="Adicionar Proveedor">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>Nombre</th>*/
/* 							<th>Archivo</th>*/
/* 							<th>Fecha de Carga</th>*/
/* 							<th>Observación</th>*/
/* 							{% if not is_granted('ROLE_PROV') %}*/
/* 							<th></th>*/
/* 							{% endif %}*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{% for proveedor in proveedores %}*/
/* 						<tr>*/
/* 							<td>{{ proveedor.proveedor.nombre }}</td>*/
/* 							<td><a href="{{ asset(proveedor.ruta | slice(5))}}{{proveedor.archivo}}" target="_blank">{{proveedor.archivo}}</a></td>*/
/* 							<td>{{ proveedor.fechaCarga | date("Y-m-d") }}</td>*/
/* 							<td>{{ proveedor.observacion }}</td>*/
/* 							{% if is_granted('ROLE_PROV') %}*/
/* 							<td>{% if convocatoria.estado.id == 1 %}*/
/* 								<a href="{{ path('convocatorias_cargaproveedor') }}/{{ convocatoria.id }}" class="btn btn-small btn-info">Cargar</a>*/
/* 								{% endif %}</td>*/
/* 							{% else %}*/
/* 							<td><a href="{{ path('convocatorias_correoa',  {"id": convocatoria.id, "id_prov": proveedor.proveedor.id}) }}"  class="btn btn-info" title="Enviar notificación">*/
/* 								<i class="icon-envelope icon-white"></i>*/
/* 							</a></td>*/
/* 							{% endif %}*/
/* 						</tr>*/
/* 						{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* */
/* 	function confirmar(ruta)*/
/* 	{*/
/* 	  if (confirm("Deseo eliminar el documento")==true){*/
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
/* 		*/
/* 	$("#agregar_archivos").colorbox({href:"{{ path('convocatorias_archivos',  {"id": convocatoria.id}) }}"});*/
/* */
/* 	</script>*/
/* {% endblock %}*/
/* */
