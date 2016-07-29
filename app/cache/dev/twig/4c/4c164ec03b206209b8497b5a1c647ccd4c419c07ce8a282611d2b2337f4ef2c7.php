<?php

/* IncentivesOperacionesBundle:Proveedor:datos.html.twig */
class __TwigTemplate_873d9f4c2f195e53320b3fd0a591c0331ce06fc6ad1a91565f5be4e9a48e120d extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesOperacionesBundle:Proveedor:datos.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dc3e3c55cf0ffaf9cbe4952b17c5d5ae7b83cfb5c02cc324458b52c8362824a = $this->env->getExtension("native_profiler");
        $__internal_7dc3e3c55cf0ffaf9cbe4952b17c5d5ae7b83cfb5c02cc324458b52c8362824a->enter($__internal_7dc3e3c55cf0ffaf9cbe4952b17c5d5ae7b83cfb5c02cc324458b52c8362824a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc3e3c55cf0ffaf9cbe4952b17c5d5ae7b83cfb5c02cc324458b52c8362824a->leave($__internal_7dc3e3c55cf0ffaf9cbe4952b17c5d5ae7b83cfb5c02cc324458b52c8362824a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_607821215001a2822ab51dd2ed26dd463cc736f5cb37add6e6efc4ccb78abfdb = $this->env->getExtension("native_profiler");
        $__internal_607821215001a2822ab51dd2ed26dd463cc736f5cb37add6e6efc4ccb78abfdb->enter($__internal_607821215001a2822ab51dd2ed26dd463cc736f5cb37add6e6efc4ccb78abfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Proveedor";
        
        $__internal_607821215001a2822ab51dd2ed26dd463cc736f5cb37add6e6efc4ccb78abfdb->leave($__internal_607821215001a2822ab51dd2ed26dd463cc736f5cb37add6e6efc4ccb78abfdb_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_cfb389e9746434d1ab3e9f46543e886624d6a68b9b551a9e03e8cc24d4695364 = $this->env->getExtension("native_profiler");
        $__internal_cfb389e9746434d1ab3e9f46543e886624d6a68b9b551a9e03e8cc24d4695364->enter($__internal_cfb389e9746434d1ab3e9f46543e886624d6a68b9b551a9e03e8cc24d4695364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Proveedores
        ";
        // line 9
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 10
            echo "        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("proveedores");
            echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    \t";
        }
        // line 16
        echo "    </div>
</div>
    <div class=\"box span6\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t";
        // line 22
        if ((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_CAT"))) {
            // line 23
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_editar", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
            echo "\" title=\"Editar proveedor\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t</i>Datos Proveedor</h2>
\t\t\t\t";
        // line 30
        if ((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_CAT"))) {
            // line 31
            echo "\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_proveedor", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-info\" title=\"Productos\">
\t\t            \t\t<i class=\"icon-barcode icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_importar_proveedor", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-info\" title=\"Asignar productos a proveedor\">
\t\t            \t\t<i class=\"icon-list-alt icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_correo_ingreso", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-info\" title=\"Enviar correo de ingreso\">
\t\t\t\t\t           <i class=\"icon-envelope icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Nombre</td><td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Tipo de Documento</td><td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "tipodocumento", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Documento</td><td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "numerodocumento", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Correo</td><td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "correo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Categoria</td><td>";
        // line 51
        if ((null === $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "categoria", array()))) {
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "categoria", array()), "nombre", array()), "html", null, true);
        }
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Clasificacion</td><td>";
        // line 52
        if ((null === $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "proveedorclasificacion", array()))) {
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "proveedorclasificacion", array()), "nombre", array()), "html", null, true);
        }
        echo "</td></tr>
                        <tr><td>Area</td><td>";
        // line 53
        if ((null === $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "proveedorarea", array()))) {
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "proveedorarea", array()), "nombre", array()), "html", null, true);
        }
        echo "</td></tr>
                        <tr><td>Tipo</td><td>";
        // line 54
        if ((null === $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "proveedortipo", array()))) {
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "proveedortipo", array()), "nombre", array()), "html", null, true);
        }
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Registro Camara</td><td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "registrocamara", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Sede Principal</td><td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "sedeprincipal", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Dirección</td><td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "direccion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Teléfono</td><td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "telefono", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Línea de Atención</td><td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "lineaAtencion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Tiempo de Entrega</td><td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "tiempoEntrega", array()), "html", null, true);
        echo " días</td></tr>
\t\t\t\t\t\t<tr><td>Sedes</td><td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "sedes", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Datos Sedes</td><td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "datossedes", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Página Web</td><td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "pagina", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de Creación</td><td>";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Actividades Económicas</td><td>";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aeconomica"]) ? $context["aeconomica"] : $this->getContext($context, "aeconomica")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "codigo", array()), "html", null, true);
            echo " - ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_documentos_carga", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
        echo "\" title=\"Agregar Documento\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\tDocumentos
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["archivo"]) ? $context["archivo"] : $this->getContext($context, "archivo")));
        foreach ($context['_seq'] as $context["_key"] => $context["archivos"]) {
            echo "\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute($context["archivos"], "ruta", array()), 5)), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["archivos"], "archivo", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["archivos"], "archivo", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["archivos"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 96
            if (($this->getAttribute($this->getAttribute($context["archivos"], "estado", array()), "id", array()) != 1)) {
                echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("proveedores_archivo_estado", array("id" => $this->getAttribute($context["archivos"], "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Inactivo</a>";
            } else {
                echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("proveedores_archivo_estado", array("id" => $this->getAttribute($context["archivos"], "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Activo</a>";
            }
            echo "</td>
\t\t\t\t\t\t\t</tr>\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t
\t<div class=\"box span5\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_catalogo_carga", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
        echo "\" title=\"Cargar Catalogo\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\tCatálogos</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            echo "\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute($context["catalogos"], "ruta", array()), 5)), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "archivo", array()), "html", null, true);
            echo "\" target='_blank'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "archivo", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["catalogos"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 128
            if (($this->getAttribute($this->getAttribute($context["catalogos"], "estado", array()), "id", array()) != 1)) {
                echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("proveedores_catalogo_estado", array("id" => $this->getAttribute($context["catalogos"], "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Inactivo</a>";
            } else {
                echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("proveedores_catalogo_estado", array("id" => $this->getAttribute($context["catalogos"], "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Activo</a>";
            }
            echo "</td>
\t\t\t\t\t\t</tr>\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t
\t<div class=\"box span5\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t";
        // line 140
        if (((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP"))) {
            // line 141
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_calificacion", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
            echo "\" title=\"Calificar Proveedor\">
\t\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 147
        echo "\t\t\t\tCalificación</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Periodo</th>
\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t<th>Calificación</th>
\t\t\t\t\t\t<th>Plan Acción</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calificacion"]) ? $context["calificacion"] : $this->getContext($context, "calificacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["calif"]) {
            echo "\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["calif"], "periodo", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["calif"], "numero", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calificacion_datos", array("id" => $this->getAttribute($context["calif"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["calif"], "calificacion", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>";
            // line 164
            if (($this->getAttribute($context["calif"], "planAccion", array(), "any", true, true) && ($this->getAttribute($context["calif"], "planAccion", array()) != ""))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["calif"], "planAccion", array()), 72), "html", null, true);
                echo "\">Descargar</a>";
            }
            echo "</td>
\t\t\t\t\t\t</tr>\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto_nuevo", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
        echo "\" title=\"Agregar Contacto\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>\t
\t\t\t\t\tContactos
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t\t<th>Correo</th>
\t\t\t\t\t\t\t<th>Teléfono</th>
\t\t\t\t\t\t\t<th>Cargo</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")));
        foreach ($context['_seq'] as $context["_key"] => $context["contactos"]) {
            // line 196
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactos"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactos"], "nombres", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactos"], "correo", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactos"], "telefono", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactos"], "cargo", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

</div>

";
        
        $__internal_cfb389e9746434d1ab3e9f46543e886624d6a68b9b551a9e03e8cc24d4695364->leave($__internal_cfb389e9746434d1ab3e9f46543e886624d6a68b9b551a9e03e8cc24d4695364_prof);

    }

    // line 213
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eef70ac9a0d126f72d57b9ab4566a7077204b9fd897a9d8160887d45c9da2284 = $this->env->getExtension("native_profiler");
        $__internal_eef70ac9a0d126f72d57b9ab4566a7077204b9fd897a9d8160887d45c9da2284->enter($__internal_eef70ac9a0d126f72d57b9ab4566a7077204b9fd897a9d8160887d45c9da2284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 214
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

\t\t// function resaltarParrafos()
\t\t// {
\t\t//  var x=\$(this);
\t\t//  var parrafo=(x.attr('id'));
\t\t//  parrafo=parseInt(parrafo);
\t\t//  alert(parrafo);
\t\t//  \$(\"#\"+parrafo).click(function(evento){
\t\t//                evento.preventDefault();
\t\t//                \$(\"#destino\").load(\"";
        // line 246
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
        // line 268
        echo $this->env->getExtension('routing')->getUrl("proveedores_estado", array("id" => "+parrafo+"));
        echo "\",\t
\t\t// \t\t\tfunction() {
\t\t// \t\t\t\talert( \"Actualizacion realizada.\" );
\t\t// \t\t\t} );
\t\t// \t});
\t\t// })
\t</script>
";
        
        $__internal_eef70ac9a0d126f72d57b9ab4566a7077204b9fd897a9d8160887d45c9da2284->leave($__internal_eef70ac9a0d126f72d57b9ab4566a7077204b9fd897a9d8160887d45c9da2284_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 268,  543 => 246,  507 => 214,  501 => 213,  487 => 204,  478 => 201,  474 => 200,  470 => 199,  466 => 198,  462 => 197,  459 => 196,  455 => 195,  433 => 176,  422 => 167,  409 => 164,  403 => 163,  399 => 162,  395 => 161,  388 => 159,  374 => 147,  364 => 141,  362 => 140,  351 => 131,  334 => 128,  330 => 127,  323 => 126,  316 => 124,  297 => 108,  286 => 99,  269 => 96,  265 => 95,  258 => 94,  251 => 92,  231 => 75,  210 => 65,  206 => 64,  202 => 63,  198 => 62,  194 => 61,  190 => 60,  186 => 59,  182 => 58,  178 => 57,  174 => 56,  170 => 55,  163 => 54,  156 => 53,  149 => 52,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  120 => 43,  112 => 38,  106 => 35,  100 => 32,  97 => 31,  95 => 30,  92 => 29,  82 => 23,  80 => 22,  72 => 16,  65 => 12,  61 => 10,  59 => 9,  53 => 5,  47 => 4,  35 => 3,  20 => 2,);
    }
}
/* {#% extends '::base.html.twig' %#}*/
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Proveedor{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Proveedores*/
/*         {% if not is_granted('ROLE_PROV')  %}*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('proveedores') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     	{% endif %}*/
/*     </div>*/
/* </div>*/
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				{% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP')) or is_granted('ROLE_CAT') %}*/
/* 					<a href="{{ path('proveedores_editar',  {"id": proveedor.id}) }}" title="Editar proveedor">*/
/* 						<button class="btn btn-primary">*/
/* 							<i class="icon-edit icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 				{% endif %}*/
/* 				</i>Datos Proveedor</h2>*/
/* 				{% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_CAT'))  %}*/
/* 					<div class="box-icon">*/
/* 						<a href="{{ path('productos_proveedor',  {"id": proveedor.id}) }}"  class="btn btn-info" title="Productos">*/
/* 		            		<i class="icon-barcode icon-white"></i>*/
/* 						</a>*/
/* 						<a href="{{ path('proveedores_importar_proveedor',  {"id": proveedor.id}) }}"  class="btn btn-info" title="Asignar productos a proveedor">*/
/* 		            		<i class="icon-list-alt icon-white"></i>*/
/* 						</a>*/
/* 						<a href="{{ path('proveedores_correo_ingreso',  {"id": proveedor.id}) }}"  class="btn btn-info" title="Enviar correo de ingreso">*/
/* 					           <i class="icon-envelope icon-white"></i>*/
/* 						</a>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Nombre</td><td>{{ proveedor.nombre }}</td></tr>*/
/* 						<tr><td>Tipo de Documento</td><td>{{ proveedor.tipodocumento.nombre }}</td></tr>*/
/* 						<tr><td>Documento</td><td>{{ proveedor.numerodocumento }}</td></tr>*/
/* 						<tr><td>Correo</td><td>{{ proveedor.correo }}</td></tr>*/
/* 						<tr><td>Categoria</td><td>{% if proveedor.categoria is null %}{% else %}{{ proveedor.categoria.nombre }}{% endif %}</td></tr>*/
/* 						<tr><td>Clasificacion</td><td>{% if proveedor.proveedorclasificacion is null %}{% else %}{{ proveedor.proveedorclasificacion.nombre }}{% endif %}</td></tr>*/
/*                         <tr><td>Area</td><td>{% if proveedor.proveedorarea is null %}{% else %}{{ proveedor.proveedorarea.nombre }}{% endif %}</td></tr>*/
/*                         <tr><td>Tipo</td><td>{% if proveedor.proveedortipo is null %}{% else %}{{ proveedor.proveedortipo.nombre }}{% endif %}</td></tr>*/
/* 						<tr><td>Registro Camara</td><td>{{ proveedor.registrocamara }}</td></tr>*/
/* 						<tr><td>Sede Principal</td><td>{{ proveedor.sedeprincipal }}</td></tr>*/
/* 						<tr><td>Dirección</td><td>{{ proveedor.direccion }}</td></tr>*/
/* 						<tr><td>Teléfono</td><td>{{ proveedor.telefono }}</td></tr>*/
/* 						<tr><td>Línea de Atención</td><td>{{ proveedor.lineaAtencion }}</td></tr>*/
/* 						<tr><td>Tiempo de Entrega</td><td>{{ proveedor.tiempoEntrega }} días</td></tr>*/
/* 						<tr><td>Sedes</td><td>{{ proveedor.sedes }}</td></tr>*/
/* 						<tr><td>Datos Sedes</td><td>{{ proveedor.datossedes }}</td></tr>*/
/* 						<tr><td>Página Web</td><td>{{ proveedor.pagina }}</td></tr>*/
/* 						<tr><td>Fecha de Creación</td><td>{{ proveedor.fecha | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Actividades Económicas</td><td>{% for actividad in aeconomica %}{{actividad.codigo}} - {% endfor %}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span5">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('proveedores_documentos_carga',  {"id": proveedor.id}) }}" title="Agregar Documento">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					Documentos*/
/* 				</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Nombre</th>*/
/* 						<th>Fecha</th>*/
/* 						<th>Estado</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for archivos in archivo %}		*/
/* 							<tr>*/
/* 								<td><a href="{{asset(archivos.ruta | slice (5))}}{{archivos.archivo}}" target="_blank">{{archivos.archivo}}</a></td>*/
/* 								<td>{{archivos.fecha | date("Y-m-d")}}</td>*/
/* 								<td>{% if (archivos.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("proveedores_archivo_estado", {"id": archivos.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("proveedores_archivo_estado", {"id": archivos.id}) }}')" href="#">Activo</a>{% endif %}</td>*/
/* 							</tr>			*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="box span5">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('proveedores_catalogo_carga',  {"id": proveedor.id}) }}" title="Cargar Catalogo">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 				Catálogos</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Nombre</th>*/
/* 						<th>Fecha</th>*/
/* 						<th>Estado</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for catalogos in catalogo %}		*/
/* 						<tr>*/
/* 							<td><a href="{{asset(catalogos.ruta | slice (5))}}{{catalogos.archivo}}" target='_blank'>{{catalogos.archivo}}</a></td>*/
/* 							<td>{{catalogos.fecha | date("Y-m-d") }}</td>*/
/* 							<td>{% if (catalogos.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("proveedores_catalogo_estado", {"id": catalogos.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("proveedores_catalogo_estado", {"id": catalogos.id}) }}')" href="#">Activo</a>{% endif %}</td>*/
/* 						</tr>			*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="box span5">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					{% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP'))  %}*/
/* 						<a href="{{ path('proveedores_calificacion',  {"id": proveedor.id}) }}" title="Calificar Proveedor">*/
/* 							<button class="btn btn-small btn-success">*/
/* 								<i class="icon-plus icon-white"></i>*/
/* 							</button>*/
/* 						</a>*/
/* 					{% endif %}*/
/* 				Calificación</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Periodo</th>*/
/* 						<th>N°</th>*/
/* 						<th>Calificación</th>*/
/* 						<th>Plan Acción</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for calif in calificacion %}		*/
/* 						<tr>*/
/* 							<td>{{calif.periodo }}</td>*/
/* 							<td>{{calif.numero }}</td>*/
/* 							<td><a href="{{ path("calificacion_datos", {"id": calif.id}) }}">{{calif.calificacion}}</a></td>*/
/* 							<td>{% if calif.planAccion is defined and calif.planAccion!="" %}<a href="{{ calif.planAccion | slice(72) }}">Descargar</a>{% endif %}</td>*/
/* 						</tr>			*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span12">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('contacto_nuevo',  {"id": proveedor.id}) }}" title="Agregar Contacto">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>	*/
/* 					Contactos*/
/* 				</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>Id</th>*/
/* 							<th>Nombre</th>*/
/* 							<th>Correo</th>*/
/* 							<th>Teléfono</th>*/
/* 							<th>Cargo</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{% for contactos in contacto %}*/
/* 						<tr>*/
/* 							<td>{{contactos.id}}</td>*/
/* 							<td>{{contactos.nombres}}</td>*/
/* 							<td>{{contactos.correo}}</td>*/
/* 							<td>{{contactos.telefono}}</td>*/
/* 							<td>{{contactos.cargo}}</td>*/
/* 						</tr>*/
/* 						{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
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
