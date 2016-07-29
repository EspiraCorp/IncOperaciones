<?php

/* IncentivesSolicitudesBundle:Solicitudes:datos.html.twig */
class __TwigTemplate_f82d367558d569ee0cc02553fe82813711054bd8f8f9d5fd2965844eb43f4336 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesSolicitudesBundle:Solicitudes:datos.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03592089994a015d09bb456e271a2a3a6837b2dd08800117fcc8328ba523fafd = $this->env->getExtension("native_profiler");
        $__internal_03592089994a015d09bb456e271a2a3a6837b2dd08800117fcc8328ba523fafd->enter($__internal_03592089994a015d09bb456e271a2a3a6837b2dd08800117fcc8328ba523fafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Solicitudes:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03592089994a015d09bb456e271a2a3a6837b2dd08800117fcc8328ba523fafd->leave($__internal_03592089994a015d09bb456e271a2a3a6837b2dd08800117fcc8328ba523fafd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7093dff22ea9ee0d1f60a84153dbaabceda823fa6cddf54c225c1acfffe26ee = $this->env->getExtension("native_profiler");
        $__internal_d7093dff22ea9ee0d1f60a84153dbaabceda823fa6cddf54c225c1acfffe26ee->enter($__internal_d7093dff22ea9ee0d1f60a84153dbaabceda823fa6cddf54c225c1acfffe26ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Solicitud";
        
        $__internal_d7093dff22ea9ee0d1f60a84153dbaabceda823fa6cddf54c225c1acfffe26ee->leave($__internal_d7093dff22ea9ee0d1f60a84153dbaabceda823fa6cddf54c225c1acfffe26ee_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_2f9217c542299f4cbcb747d4575828c9eb4ef73b0afbb4d1df0745d10f63d61e = $this->env->getExtension("native_profiler");
        $__internal_2f9217c542299f4cbcb747d4575828c9eb4ef73b0afbb4d1df0745d10f63d61e->enter($__internal_2f9217c542299f4cbcb747d4575828c9eb4ef73b0afbb4d1df0745d10f63d61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Solicitudes
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("solicitudes");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span4\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t";
        // line 20
        if (((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT"))) {
            // line 21
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitudes_editar", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 28
        if ((($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 1) && ($this->env->getExtension('security')->isGranted("ROLE_COM") || $this->env->getExtension('security')->isGranted("ROLE_EJEC")))) {
            // line 29
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitudes_editar", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t
\t\t\t\t\tDatos Solicitud</h2>
\t\t\t</div>
\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Id</td><td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Titulo</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "titulo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Tipo</td><td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tipo", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Prioridad</td><td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prioridad", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Descripción</td><td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha Solicitud</td><td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaSolicitud", array())), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Solicitante</td><td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "solicitante", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Estado</td><td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Accion</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"estado\" >
\t\t\t\t\t\t\t\t\t\t";
        // line 52
        if (($this->env->getExtension('security')->isGranted("ROLE_DIR") && ($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 1))) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" onClick='confirmar(\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_aceptar", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
            echo "\")'>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok icon-white\" align='rigth'></i>\t
\t\t\t\t\t\t\t\t\t\t\t\tAceptar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        if ((($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_EJEC")) || $this->env->getExtension('security')->isGranted("ROLE_COM"))) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 1) || ($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 2))) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" onClick='confirmar(\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_cancelar", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
                echo "\")'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash icon-white\" align='rigth'></i>\t
\t\t\t\t\t\t\t\t\t\t\t\t\tCancelar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        if ((($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_EJEC")) && ($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 2))) {
            echo "\t
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" onClick='confirmar(\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_cerrar", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
            echo "\")'>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok icon-white\" align='rigth'></i>\t
\t\t\t\t\t\t\t\t\t\t\t\tCerrar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 77
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>
\t
\t<div class=\"box span6\">
\t   \t<div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) != 3)) {
            // line 90
            echo "\t\t\t\t<a id=\"agregar_archivos\" href=\"";
            echo $this->env->getExtension('routing')->getPath("solicitudes_archivos");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t</i>Archivos</h2>
\t\t\t</div>
\t\t\t";
        // line 98
        if (array_key_exists("archivos", $context)) {
            // line 99
            echo "\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t    \t\t<tr>
\t\t    \t\t\t<th>Archivo</th>
\t\t    \t\t\t<th>Fecha</th>
\t\t    \t\t\t<th>Estado</th>
\t\t    \t\t</tr>
\t\t    \t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["archivos"]) ? $context["archivos"] : $this->getContext($context, "archivos")));
            foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
                // line 106
                echo "\t\t    \t\t<tr>
\t\t    \t\t\t<td width=\"300px\"><a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute($context["archivo"], "archivo", array()), 5)), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["archivo"], "archivo", array()), "html", null, true);
                echo "</a></td>
\t\t    \t\t\t<td width=\"150px\">";
                // line 108
                if (($this->getAttribute($context["archivo"], "fechaModificacion", array()) != null)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["archivo"], "fechaModificacion", array()), "Y-m-d h:i:s"), "html", null, true);
                    echo " ";
                }
                echo "</td>
\t\t    \t\t\t<td>";
                // line 109
                if (($this->getAttribute($this->getAttribute($context["archivo"], "estado", array()), "id", array()) != 1)) {
                    echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_archivo_estado", array("id" => $this->getAttribute($context["archivo"], "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Inactivo</a>";
                } else {
                    echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_archivo_estado", array("id" => $this->getAttribute($context["archivo"], "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Activo</a>";
                }
                echo "</td>
\t\t    \t\t</tr>
\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t\t    \t</table>
\t\t    ";
        }
        // line 114
        echo "\t  \t</div>
\t</div>
\t
\t<div class=\"box span6\">
\t   \t<div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t";
        // line 121
        if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) != 3)) {
            // line 122
            echo "\t\t\t\t<a id=\"agregar_ordenesDespacho\" href=\"";
            echo $this->env->getExtension('routing')->getPath("solicitudes_cargardespachos");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t</i>Ordenes de Despacho</h2>
\t\t\t</div>
\t\t\t";
        // line 130
        if (array_key_exists("ordenesDespacho", $context)) {
            // line 131
            echo "\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t    \t\t<tr>
\t\t    \t\t\t<th>Ordenes de Despacho</th>
\t\t    \t\t\t<th>Fecha</th>
\t\t    \t\t\t<th>Estado</th>
\t\t    \t\t</tr>
\t\t    \t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ordenesDespacho"]) ? $context["ordenesDespacho"] : $this->getContext($context, "ordenesDespacho")));
            foreach ($context['_seq'] as $context["_key"] => $context["ordenDespacho"]) {
                // line 138
                echo "\t\t    \t\t<tr>
\t\t    \t\t\t<td><a href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute($context["ordenDespacho"], "archivo", array()), 5)), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ordenDespacho"], "archivo", array()), "html", null, true);
                echo "</a></td>
\t\t    \t\t\t<td width=\"150px\">";
                // line 140
                if (($this->getAttribute($context["ordenDespacho"], "fechaModificacion", array()) != null)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ordenDespacho"], "fechaModificacion", array()), "Y-m-d"), "html", null, true);
                    echo " ";
                }
                echo "</td>
\t\t    \t\t\t<td>";
                // line 141
                if (($this->getAttribute($this->getAttribute($context["ordenDespacho"], "estado", array()), "id", array()) != 1)) {
                    echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_archivo_estado", array("id" => $this->getAttribute($context["ordenDespacho"], "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Inactivo</a>";
                } else {
                    echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_archivo_estado", array("id" => $this->getAttribute($context["ordenDespacho"], "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Activo</a>";
                }
                echo "</td>
\t\t    \t\t</tr>
\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordenDespacho'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t    \t</table>
\t\t    ";
        }
        // line 146
        echo "\t  \t</div>
\t</div>
\t
\t <div class=\"box span6\">
\t    \t<div class=\"box-content\">
\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t<h2>
\t\t\t\t\t";
        // line 153
        if ($this->env->getExtension('security')->isGranted("ROLE_DIR")) {
            // line 154
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 2)) {
                // line 155
                echo "\t\t\t\t\t\t<a id=\"asignar_responsable\" href=\"";
                echo $this->env->getExtension('routing')->getPath("solicitudes_asignar");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t</i>Responsables</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 164
        if (array_key_exists("responsables", $context)) {
            // line 165
            echo "\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<th>Responsable</th>
\t\t\t    \t\t\t<th>Rol</th>
\t\t\t    \t\t\t<th>Estado</th>
\t\t\t    \t\t</tr>
\t\t\t    \t";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : $this->getContext($context, "responsables")));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 172
                echo "\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<td>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["responsable"], "responsable", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td>";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["responsable"], "responsable", array()), "grupos", array()), 0, array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td>";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["responsable"], "estado", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t</tr>
\t\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "\t\t\t    \t</table>
\t\t\t    ";
        }
        // line 180
        echo "\t    \t</div>
\t    </div>


\t\t<div class=\"box span6\">
\t    \t<div class=\"box-content\">
\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t<h2>
\t\t\t\t\t\t<a id=\"agregar_observacion\" href=\"";
        // line 188
        echo $this->env->getExtension('routing')->getPath("solicitud_observaciones");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</i>Observaciones</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 195
        if (array_key_exists("responsables", $context)) {
            // line 196
            echo "\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<th width=\"600\">Observacion</th>
\t\t\t    \t\t\t<th>Usuario</th>
\t\t\t    \t\t\t<th>Fecha</th>
\t\t\t    \t\t</tr>
\t\t\t    \t";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["observaciones"]) ? $context["observaciones"] : $this->getContext($context, "observaciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
                // line 203
                echo "\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<td>";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["observacion"], "observacion", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td>";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["observacion"], "usuario", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td>";
                // line 206
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["observacion"], "fechaModificacion", array()), "Y-m-d h:i:s"), "html", null, true);
                echo "</td>
\t\t\t    \t\t</tr>
\t\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "\t\t\t    \t</table>
\t\t\t    ";
        }
        // line 211
        echo "\t    \t</div>
\t    </div>\t
\t
\t
\t";
        // line 215
        if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tipo", array()), "id", array()) == 2)) {
            // line 216
            echo "\t\t";
            if ((($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP"))) {
                // line 217
                echo "\t\t\t";
                if (array_key_exists("convocatorias", $context)) {
                    // line 218
                    echo "\t\t\t    <div class=\"box span8\">
\t\t\t    \t<div class=\"box-content\">
\t\t\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t";
                    // line 222
                    if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 2)) {
                        // line 223
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('routing')->getPath("convocatorias_nueva");
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 229
                    echo "\t\t\t\t\t\t\t</i>Convocatorias</h2>
\t\t\t\t\t\t</div>
\t\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t\t    \t\t<tr>
\t\t\t\t    \t\t\t<th>Id</th>
\t\t\t\t    \t\t\t<th>Titulo</th>
\t\t\t\t    \t\t\t<th>Archivo</th>
\t\t\t\t    \t\t\t<th>Fecha Inicio</th>
\t\t\t\t    \t\t\t<th>Fecha Fin</th>
\t\t\t\t    \t\t</tr>
\t\t\t\t    \t";
                    // line 239
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["convocatorias"]) ? $context["convocatorias"] : $this->getContext($context, "convocatorias")));
                    foreach ($context['_seq'] as $context["_key"] => $context["convocatoria"]) {
                        // line 240
                        echo "\t\t\t\t    \t\t<tr>
\t\t\t\t    \t\t\t<td>";
                        // line 241
                        echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "id", array()), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t\t<td><a href=\"";
                        // line 242
                        echo $this->env->getExtension('routing')->getPath("convocatorias_datos");
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "titulo", array()), "html", null, true);
                        echo "</a></td>
\t\t\t\t    \t\t\t<td><a href=\"";
                        // line 243
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute($context["convocatoria"], "ruta", array()), 5)), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "archivo", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["convocatoria"], "archivo", array()), "html", null, true);
                        echo "</a></td>
\t\t\t\t    \t\t\t<td>";
                        // line 244
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["convocatoria"], "fechaInicio", array()), "Y-m-d"), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t\t<td>";
                        // line 245
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["convocatoria"], "fechaFin", array()), "Y-m-d"), "html", null, true);
                        echo "</td>
\t\t\t\t    \t\t</tr>
\t\t\t\t    \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['convocatoria'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 248
                    echo "\t\t\t\t    \t</table>
\t\t\t    \t</div>
\t\t\t    </div>
\t\t    ";
                }
                // line 252
                echo "\t\t";
            }
            echo "\t\t    
\t    
\t    <div class=\"box span8\">
\t   \t<div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t";
            // line 258
            if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) != 3)) {
                // line 259
                echo "\t\t\t\t<a id=\"agregar_precotizacion\" href=\"";
                echo $this->env->getExtension('routing')->getPath("solicitudes_precotizacion");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t";
            }
            // line 265
            echo "\t\t\t\t</i>Precotizaciones
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t";
            // line 268
            if (array_key_exists("precotizaciones", $context)) {
                // line 269
                echo "\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t    \t\t<tr>
\t\t    \t\t\t<th>Precotización</th>
\t\t    \t\t\t<th>Fecha</th>
\t\t    \t\t\t<th>Estado</th>
\t\t    \t\t</tr>
\t\t    \t";
                // line 275
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["precotizaciones"]) ? $context["precotizaciones"] : $this->getContext($context, "precotizaciones")));
                foreach ($context['_seq'] as $context["_key"] => $context["precotizacion"]) {
                    // line 276
                    echo "\t\t    \t\t<tr>
\t\t    \t\t\t<td><a href=\"";
                    // line 277
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute($context["precotizacion"], "archivo", array()), 5)), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["precotizacion"], "archivo", array()), "html", null, true);
                    echo "</a></td>
\t\t    \t\t\t<td width=\"150px\">";
                    // line 278
                    if (($this->getAttribute($context["precotizacion"], "fechaModificacion", array()) != null)) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["precotizacion"], "fechaModificacion", array()), "Y-m-d"), "html", null, true);
                        echo " ";
                    }
                    echo "</td>
\t\t    \t\t\t<td>";
                    // line 279
                    if (($this->getAttribute($this->getAttribute($context["precotizacion"], "estado", array()), "id", array()) != 1)) {
                        echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_archivo_estado", array("id" => $this->getAttribute($context["precotizacion"], "id", array()))), "html", null, true);
                        echo "')\" href=\"#\">Inactivo</a>";
                    } else {
                        echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("solicitud_archivo_estado", array("id" => $this->getAttribute($context["precotizacion"], "id", array()))), "html", null, true);
                        echo "')\" href=\"#\">Activo</a>";
                    }
                    echo "</td>
\t\t    \t\t</tr>
\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['precotizacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 282
                echo "\t\t    \t</table>
\t\t    ";
            }
            // line 284
            echo "\t  \t</div>
\t</div>
\t
\t\t";
            // line 287
            if (array_key_exists("cotizaciones", $context)) {
                // line 288
                echo "\t\t\t    <div class=\"box span8\">
\t\t\t    \t<div class=\"box-content\">
\t\t\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t";
                // line 292
                if ((($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP"))) {
                    // line 293
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 2)) {
                        // line 294
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('routing')->getPath("cotizaciones_nueva");
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 300
                    echo "\t\t\t\t\t\t\t";
                }
                // line 301
                echo "\t\t\t\t\t\t\t</i>Cotizaciones</h2>
\t\t\t\t\t\t</div>
\t\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t\t    \t\t<tr>
\t\t\t\t    \t\t\t<th>Id</th>
\t\t\t\t    \t\t\t<th>Consecutivo</th>
\t\t\t\t    \t\t\t<th>Archivo</th>
\t\t\t\t    \t\t\t<th>Fecha Creación</th>
\t\t\t\t    \t\t\t<th>Estado</th>
\t\t\t\t    \t\t</tr>
\t\t\t\t    \t";
                // line 311
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cotizaciones"]) ? $context["cotizaciones"] : $this->getContext($context, "cotizaciones")));
                foreach ($context['_seq'] as $context["_key"] => $context["cotizacion"]) {
                    // line 312
                    echo "\t\t\t\t    \t\t<tr>
\t\t\t\t    \t\t\t<td>";
                    // line 313
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cotizacion"], "id", array()), "html", null, true);
                    echo "</td>
\t\t\t\t    \t\t\t<td><a href=\"";
                    // line 314
                    echo $this->env->getExtension('routing')->getPath("cotizaciones_datos");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cotizacion"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cotizacion"], "consecutivo", array()), "html", null, true);
                    echo "</a></td>
\t\t\t\t    \t\t\t<td>";
                    // line 315
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cotizacion"], "id", array()), "html", null, true);
                    echo "</td>
\t\t\t\t    \t\t\t<td>";
                    // line 316
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cotizacion"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                    echo "</td>
\t\t\t\t    \t\t\t<td>";
                    // line 317
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cotizacion"], "estado", array()), "nombre", array()), "html", null, true);
                    echo "</td>
\t\t\t\t    \t\t</tr>
\t\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotizacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                echo "\t\t\t\t    \t</table>
\t\t\t    \t</div>
\t\t\t    </div>
\t   \t";
            }
            // line 324
            echo "\t";
        }
        // line 325
        echo "\t    
\t    <div class=\"box span8\">
\t    \t<div class=\"box-content\">
\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t<h2>
\t\t\t\t\t";
        // line 330
        if ((($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP"))) {
            // line 331
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 2)) {
                // line 332
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("ordenes_nueva_solicitud");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 338
            echo "\t\t\t\t\t";
        }
        // line 339
        echo "\t\t\t\t\t</i>Ordenes de Compra</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 341
        if (array_key_exists("ordenes", $context)) {
            // line 342
            echo "\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<th>Id</th>
\t\t\t    \t\t\t<th>Consecutivo</th>
\t\t\t    \t\t\t<th>Archivo</th>
\t\t\t    \t\t\t<th>Proveedor</th>
\t\t\t    \t\t\t<th>Fecha Creación</th>
\t\t\t    \t\t\t<th>Estado</th>
\t\t\t    \t\t</tr>
\t\t\t    \t";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")));
            foreach ($context['_seq'] as $context["_key"] => $context["orden"]) {
                // line 352
                echo "\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<td>";
                // line 353
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td><a href=\"";
                // line 354
                echo $this->env->getExtension('routing')->getPath("ordenes_datos");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "consecutivo", array()), "html", null, true);
                echo "</a></td>
\t\t\t    \t\t\t<td>";
                // line 355
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td>";
                // line 356
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "proveedor", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td>";
                // line 357
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orden"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td>";
                // line 358
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "ordenesestado", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t</tr>
\t\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "\t\t\t    \t</table>
\t\t\t    ";
        }
        // line 363
        echo "\t    \t</div>
\t    </div>

\t    <div class=\"box span8\">
\t\t    \t<div class=\"box-content\">
\t\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t<h2>
\t\t\t\t\t\t";
        // line 370
        if ((($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP"))) {
            // line 371
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 2)) {
                // line 372
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("requisiciones_nueva");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 378
            echo "\t\t\t\t\t\t";
        }
        // line 379
        echo "\t\t\t\t\t\t</i>Requisiciones</h2>
\t\t\t\t\t</div>
\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<th>Id</th>
\t\t\t    \t\t\t<th>Consecutivo</th>
\t\t\t    \t\t\t<th>Archivo</th>
\t\t\t    \t\t\t<th>Fecha Creación</th>
\t\t\t    \t\t</tr>
\t\t\t    \t";
        // line 388
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requisiciones"]) ? $context["requisiciones"] : $this->getContext($context, "requisiciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["requisicion"]) {
            // line 389
            echo "\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<td>";
            // line 390
            echo twig_escape_filter($this->env, $this->getAttribute($context["requisicion"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t    \t\t\t<td><a href=\"";
            // line 391
            echo $this->env->getExtension('routing')->getPath("requisiciones_datos");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["requisicion"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["requisicion"], "consecutivo", array()), "html", null, true);
            echo "</a></td>
\t\t\t    \t\t\t<td>";
            // line 392
            echo twig_escape_filter($this->env, $this->getAttribute($context["requisicion"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t    \t\t\t<td>";
            // line 393
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["requisicion"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t    \t\t</tr>
\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requisicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "\t\t\t    \t</table>
\t\t    \t</div>
\t\t    </div>


\t    <div class=\"box span8\">
\t    \t<div class=\"box-content\">
\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t<h2>
\t\t\t\t\t";
        // line 405
        if (((($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS"))) {
            // line 406
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "estado", array()), "id", array()) == 2)) {
                // line 407
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("planillas_nueva_solicitud");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t <a href=\"";
                // line 413
                echo $this->env->getExtension('routing')->getPath("logistica_despacho_solicitudes");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
                echo "\" title=\"Generar\" class=\"btn btn-primary btn-info\">
\t\t\t\t              <i class=\"icon-cog icon-white\"></i>
\t\t\t\t          </a>
\t\t\t\t\t\t";
            }
            // line 417
            echo "\t\t\t\t\t";
        }
        // line 418
        echo "\t\t\t\t\t</i>Planillas</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 420
        if (array_key_exists("planillas", $context)) {
            // line 421
            echo "\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<th>Planilla</th>
\t\t\t    \t\t\t<th>Fecha Creación</th>
\t\t\t    \t\t\t<th>Descargar</th>
\t\t\t    \t\t\t<th>Estado</th>
\t\t\t    \t\t</tr>
\t\t\t    \t";
            // line 428
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")));
            foreach ($context['_seq'] as $context["_key"] => $context["planilla"]) {
                // line 429
                echo "\t\t\t    \t\t<tr>
\t\t\t    \t\t\t<td><a href=\"";
                // line 430
                echo $this->env->getExtension('routing')->getPath("planillas_datos");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "id", array()), "html", null, true);
                echo "</a></td>
\t\t\t    \t\t\t<td>";
                // line 431
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planilla"], "fecha", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t    \t\t\t<td><a href=\"";
                // line 432
                echo $this->env->getExtension('routing')->getPath("inventario_planilla_actualizar");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "id", array()), "html", null, true);
                echo "/1\" target=\"_blank\" onClick=confirmar(\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("inventario_listado_planilla_estado", array("id" => $this->getAttribute($context["planilla"], "id", array()))), "html", null, true);
                echo "\")>Descargar</a></td>
\t\t\t    \t\t\t<td>";
                // line 433
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], "planillaestado", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t    \t\t</tr>
\t\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planilla'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            echo "\t\t\t    \t</table>
\t\t\t    ";
        }
        // line 438
        echo "\t    \t</div>
\t    </div>
</div>

";
        
        $__internal_2f9217c542299f4cbcb747d4575828c9eb4ef73b0afbb4d1df0745d10f63d61e->leave($__internal_2f9217c542299f4cbcb747d4575828c9eb4ef73b0afbb4d1df0745d10f63d61e_prof);

    }

    // line 444
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f904b24144e84fe4f35f61cf98710119a1ccdbc38404d8533acdcd15a3cf4244 = $this->env->getExtension("native_profiler");
        $__internal_f904b24144e84fe4f35f61cf98710119a1ccdbc38404d8533acdcd15a3cf4244->enter($__internal_f904b24144e84fe4f35f61cf98710119a1ccdbc38404d8533acdcd15a3cf4244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 445
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
\t\t\$(\"#asignar_responsable\").colorbox({href:\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitudes_asignar", array("solicitud" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\"});
\t\t\$(\"#agregar_observacion\").colorbox({href:\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_observaciones", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\"});
\t\t\$(\"#agregar_archivos\").colorbox({href:\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitudes_archivos", array("solicitud" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\"});
\t\t\$(\"#agregar_ordenesDespacho\").colorbox({href:\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitudes_cargardespachos", array("solicitud" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\"});
\t\t\$(\"#agregar_precotizacion\").colorbox({href:\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitudes_precotizacion", array("solicitud" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\"});

\t</script>
\t
\t<script>
\t\tfunction confirmar(ruta)
      \t{
\t        if (confirm(\"Desea cambiar el estado del archivo\")==true){
\t            self.location=ruta;
\t        }else{
\t            alert(\"OK\");
\t        }
\t\t}
  </script>
";
        
        $__internal_f904b24144e84fe4f35f61cf98710119a1ccdbc38404d8533acdcd15a3cf4244->leave($__internal_f904b24144e84fe4f35f61cf98710119a1ccdbc38404d8533acdcd15a3cf4244_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Solicitudes:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1069 => 473,  1065 => 472,  1061 => 471,  1057 => 470,  1053 => 469,  1025 => 445,  1019 => 444,  1008 => 438,  1004 => 436,  995 => 433,  987 => 432,  983 => 431,  975 => 430,  972 => 429,  968 => 428,  959 => 421,  957 => 420,  953 => 418,  950 => 417,  941 => 413,  929 => 407,  926 => 406,  924 => 405,  913 => 396,  904 => 393,  900 => 392,  892 => 391,  888 => 390,  885 => 389,  881 => 388,  870 => 379,  867 => 378,  855 => 372,  852 => 371,  850 => 370,  841 => 363,  837 => 361,  828 => 358,  824 => 357,  820 => 356,  816 => 355,  808 => 354,  804 => 353,  801 => 352,  797 => 351,  786 => 342,  784 => 341,  780 => 339,  777 => 338,  765 => 332,  762 => 331,  760 => 330,  753 => 325,  750 => 324,  744 => 320,  735 => 317,  731 => 316,  727 => 315,  719 => 314,  715 => 313,  712 => 312,  708 => 311,  696 => 301,  693 => 300,  681 => 294,  678 => 293,  676 => 292,  670 => 288,  668 => 287,  663 => 284,  659 => 282,  642 => 279,  634 => 278,  628 => 277,  625 => 276,  621 => 275,  613 => 269,  611 => 268,  606 => 265,  594 => 259,  592 => 258,  582 => 252,  576 => 248,  567 => 245,  563 => 244,  556 => 243,  548 => 242,  544 => 241,  541 => 240,  537 => 239,  525 => 229,  513 => 223,  511 => 222,  505 => 218,  502 => 217,  499 => 216,  497 => 215,  491 => 211,  487 => 209,  478 => 206,  474 => 205,  470 => 204,  467 => 203,  463 => 202,  455 => 196,  453 => 195,  441 => 188,  431 => 180,  427 => 178,  418 => 175,  414 => 174,  410 => 173,  407 => 172,  403 => 171,  395 => 165,  393 => 164,  389 => 162,  386 => 161,  374 => 155,  371 => 154,  369 => 153,  360 => 146,  356 => 144,  339 => 141,  331 => 140,  325 => 139,  322 => 138,  318 => 137,  310 => 131,  308 => 130,  304 => 128,  292 => 122,  290 => 121,  281 => 114,  277 => 112,  260 => 109,  252 => 108,  246 => 107,  243 => 106,  239 => 105,  231 => 99,  229 => 98,  225 => 96,  213 => 90,  211 => 89,  197 => 77,  188 => 71,  184 => 70,  181 => 69,  178 => 68,  170 => 63,  165 => 62,  163 => 61,  160 => 60,  151 => 54,  148 => 53,  146 => 52,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  123 => 44,  119 => 43,  115 => 42,  111 => 41,  107 => 40,  100 => 35,  90 => 29,  88 => 28,  85 => 27,  75 => 21,  73 => 20,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  20 => 2,);
    }
}
/* {#% extends '::basep.html.twig' %#}*/
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Solicitud{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Solicitudes*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('solicitudes') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span4">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 					{% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT')) %}*/
/* 					<a href="{{ path('solicitudes_editar',  {"id": solicitud.id}) }}">*/
/* 						<button class="btn btn-primary">*/
/* 							<i class="icon-edit icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if (solicitud.estado.id==1 and (is_granted('ROLE_COM') or is_granted('ROLE_EJEC')) ) %}*/
/* 					<a href="{{ path('solicitudes_editar',  {"id": solicitud.id}) }}">*/
/* 						<button class="btn btn-primary">*/
/* 							<i class="icon-edit icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					{% endif %}*/
/* 					*/
/* 					Datos Solicitud</h2>*/
/* 			</div>*/
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Id</td><td>{{ solicitud.id }}</td></tr>*/
/* 						<tr><td>Titulo</td><td>{{ solicitud.titulo }}</td></tr>*/
/* 						<tr><td>Tipo</td><td>{{ solicitud.tipo.nombre }}</td></tr>*/
/* 						<tr><td>Programa</td><td>{{ solicitud.programa.nombre }}</td></tr>*/
/* 						<tr><td>Prioridad</td><td>{{ solicitud.prioridad.nombre }}</td></tr>*/
/* 						<tr><td>Descripción</td><td>{{ solicitud.descripcion }}</td></tr>*/
/* 						<tr><td>Fecha Solicitud</td><td>{{ solicitud.fechaSolicitud | date}}</td></tr>*/
/* 						<tr><td>Solicitante</td><td>{{ solicitud.solicitante.nombre }}</td></tr>*/
/* 						<tr><td>Estado</td><td>{{ solicitud.estado.nombre }}</td></tr>*/
/* 						<tr><td>Accion</td>*/
/* 							<td>*/
/* 								<div class="estado" >*/
/* 										{% if (is_granted('ROLE_DIR') and solicitud.estado.id == 1) %}*/
/* 										*/
/* 											<a class="btn btn-success" onClick='confirmar("{{ url('solicitud_aceptar', {'id': solicitud.id}) }}")'>*/
/* 												<i class="icon-ok icon-white" align='rigth'></i>	*/
/* 												Aceptar										*/
/* 											</a>*/
/* 											*/
/* 										{% endif %}*/
/* 										*/
/* 										{% if (is_granted('ROLE_DIR') or is_granted('ROLE_EJEC') or is_granted('ROLE_COM')) %}*/
/* 											{% if (solicitud.estado.id == 1 or solicitud.estado.id == 2) %}	*/
/* 												<a class="btn btn-danger" onClick='confirmar("{{ url('solicitud_cancelar', {'id': solicitud.id}) }}")'>*/
/* 													<i class="icon-trash icon-white" align='rigth'></i>	*/
/* 													Cancelar										*/
/* 												</a>*/
/* 											{% endif %}*/
/* 										{% endif %}*/
/* 										*/
/* 										{% if ((is_granted('ROLE_DIR')  or is_granted('ROLE_EJEC'))  and solicitud.estado.id == 2) %}	*/
/* 											<a class="btn btn-info" onClick='confirmar("{{ url('solicitud_cerrar', {'id': solicitud.id}) }}")'>*/
/* 												<i class="icon-ok icon-white" align='rigth'></i>	*/
/* 												Cerrar										*/
/* 											</a>*/
/* 											*/
/* 										{% endif %}*/
/* */
/* 								</div>*/
/* 						</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="box span6">*/
/* 	   	<div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				{% if (solicitud.estado.id != 3) %}*/
/* 				<a id="agregar_archivos" href="{{ path('solicitudes_archivos') }}/{{ solicitud.id }}">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-plus icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				{% endif %}*/
/* 				</i>Archivos</h2>*/
/* 			</div>*/
/* 			{% if archivos is defined %}*/
/* 		    	<table class="table table-bordered table-striped">*/
/* 		    		<tr>*/
/* 		    			<th>Archivo</th>*/
/* 		    			<th>Fecha</th>*/
/* 		    			<th>Estado</th>*/
/* 		    		</tr>*/
/* 		    	{% for archivo in archivos %}*/
/* 		    		<tr>*/
/* 		    			<td width="300px"><a href="{{asset(archivo.archivo | slice (5))}}" target="_blank">{{ archivo.archivo  }}</a></td>*/
/* 		    			<td width="150px">{% if (archivo.fechaModificacion != null) %} {{archivo.fechaModificacion | date("Y-m-d h:i:s") }} {% endif %}</td>*/
/* 		    			<td>{% if (archivo.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("solicitud_archivo_estado", {"id": archivo.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("solicitud_archivo_estado", {"id": archivo.id}) }}')" href="#">Activo</a>{% endif %}</td>*/
/* 		    		</tr>*/
/* 		    	{% endfor %}*/
/* 		    	</table>*/
/* 		    {% endif %}*/
/* 	  	</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="box span6">*/
/* 	   	<div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				{% if (solicitud.estado.id != 3) %}*/
/* 				<a id="agregar_ordenesDespacho" href="{{ path('solicitudes_cargardespachos') }}/{{ solicitud.id }}">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-plus icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				{% endif %}*/
/* 				</i>Ordenes de Despacho</h2>*/
/* 			</div>*/
/* 			{% if ordenesDespacho is defined %}*/
/* 		    	<table class="table table-bordered table-striped">*/
/* 		    		<tr>*/
/* 		    			<th>Ordenes de Despacho</th>*/
/* 		    			<th>Fecha</th>*/
/* 		    			<th>Estado</th>*/
/* 		    		</tr>*/
/* 		    	{% for ordenDespacho in ordenesDespacho %}*/
/* 		    		<tr>*/
/* 		    			<td><a href="{{asset(ordenDespacho.archivo | slice (5))}}" target="_blank">{{ ordenDespacho.archivo  }}</a></td>*/
/* 		    			<td width="150px">{% if (ordenDespacho.fechaModificacion != null) %} {{ordenDespacho.fechaModificacion | date("Y-m-d") }} {% endif %}</td>*/
/* 		    			<td>{% if (ordenDespacho.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("solicitud_archivo_estado", {"id": ordenDespacho.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("solicitud_archivo_estado", {"id": ordenDespacho.id}) }}')" href="#">Activo</a>{% endif %}</td>*/
/* 		    		</tr>*/
/* 		    	{% endfor %}*/
/* 		    	</table>*/
/* 		    {% endif %}*/
/* 	  	</div>*/
/* 	</div>*/
/* 	*/
/* 	 <div class="box span6">*/
/* 	    	<div class="box-content">*/
/* 		    	<div class="box-header well">*/
/* 					<h2>*/
/* 					{% if is_granted('ROLE_DIR') %}*/
/* 						{% if (solicitud.estado.id == 2) %}*/
/* 						<a id="asignar_responsable" href="{{ path('solicitudes_asignar') }}/{{ solicitud.id }}">*/
/* 							<button class="btn btn-primary">*/
/* 								<i class="icon-plus icon-white"></i>*/
/* 							</button>*/
/* 						</a>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 					</i>Responsables</h2>*/
/* 				</div>*/
/* 				{% if responsables is defined %}*/
/* 			    	<table class="table table-bordered table-striped">*/
/* 			    		<tr>*/
/* 			    			<th>Responsable</th>*/
/* 			    			<th>Rol</th>*/
/* 			    			<th>Estado</th>*/
/* 			    		</tr>*/
/* 			    	{% for responsable in responsables %}*/
/* 			    		<tr>*/
/* 			    			<td>{{ responsable.responsable.nombre }}</td>*/
/* 			    			<td>{{ responsable.responsable.grupos[0].nombre }}</td>*/
/* 			    			<td>{{ responsable.estado.nombre }}</td>*/
/* 			    		</tr>*/
/* 			    	{% endfor %}*/
/* 			    	</table>*/
/* 			    {% endif %}*/
/* 	    	</div>*/
/* 	    </div>*/
/* */
/* */
/* 		<div class="box span6">*/
/* 	    	<div class="box-content">*/
/* 		    	<div class="box-header well">*/
/* 					<h2>*/
/* 						<a id="agregar_observacion" href="{{ path('solicitud_observaciones') }}/{{ solicitud.id }}">*/
/* 							<button class="btn btn-primary">*/
/* 								<i class="icon-plus icon-white"></i>*/
/* 							</button>*/
/* 						</a>*/
/* 					</i>Observaciones</h2>*/
/* 				</div>*/
/* 				{% if responsables is defined %}*/
/* 			    	<table class="table table-bordered table-striped">*/
/* 			    		<tr>*/
/* 			    			<th width="600">Observacion</th>*/
/* 			    			<th>Usuario</th>*/
/* 			    			<th>Fecha</th>*/
/* 			    		</tr>*/
/* 			    	{% for observacion in observaciones %}*/
/* 			    		<tr>*/
/* 			    			<td>{{ observacion.observacion }}</td>*/
/* 			    			<td>{{ observacion.usuario.nombre }}</td>*/
/* 			    			<td>{{ observacion.fechaModificacion | date("Y-m-d h:i:s")  }}</td>*/
/* 			    		</tr>*/
/* 			    	{% endfor %}*/
/* 			    	</table>*/
/* 			    {% endif %}*/
/* 	    	</div>*/
/* 	    </div>	*/
/* 	*/
/* 	*/
/* 	{% if solicitud.tipo.id ==2 %}*/
/* 		{% if (is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP')) %}*/
/* 			{% if convocatorias is defined %}*/
/* 			    <div class="box span8">*/
/* 			    	<div class="box-content">*/
/* 				    	<div class="box-header well">*/
/* 							<h2>*/
/* 							{% if (solicitud.estado.id == 2) %}*/
/* 							<a href="{{ path('convocatorias_nueva') }}/{{ solicitud.id }}">*/
/* 								<button class="btn btn-primary">*/
/* 									<i class="icon-plus icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 							{% endif %}*/
/* 							</i>Convocatorias</h2>*/
/* 						</div>*/
/* 				    	<table class="table table-bordered table-striped">*/
/* 				    		<tr>*/
/* 				    			<th>Id</th>*/
/* 				    			<th>Titulo</th>*/
/* 				    			<th>Archivo</th>*/
/* 				    			<th>Fecha Inicio</th>*/
/* 				    			<th>Fecha Fin</th>*/
/* 				    		</tr>*/
/* 				    	{% for convocatoria in convocatorias %}*/
/* 				    		<tr>*/
/* 				    			<td>{{ convocatoria.id }}</td>*/
/* 				    			<td><a href="{{ path("convocatorias_datos") }}/{{ convocatoria.id }}">{{ convocatoria.titulo }}</a></td>*/
/* 				    			<td><a href="{{asset(convocatoria.ruta | slice (5))}}{{convocatoria.archivo}}" target="_blank">{{ convocatoria.archivo  }}</a></td>*/
/* 				    			<td>{{ convocatoria.fechaInicio | date("Y-m-d") }}</td>*/
/* 				    			<td>{{ convocatoria.fechaFin | date("Y-m-d")  }}</td>*/
/* 				    		</tr>*/
/* 				    	{% endfor %}*/
/* 				    	</table>*/
/* 			    	</div>*/
/* 			    </div>*/
/* 		    {% endif %}*/
/* 		{% endif %}		    */
/* 	    */
/* 	    <div class="box span8">*/
/* 	   	<div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				{% if (solicitud.estado.id != 3) %}*/
/* 				<a id="agregar_precotizacion" href="{{ path('solicitudes_precotizacion') }}/{{ solicitud.id }}">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-plus icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				{% endif %}*/
/* 				</i>Precotizaciones*/
/* 				</h2>*/
/* 			</div>*/
/* 			{% if precotizaciones is defined %}*/
/* 		    	<table class="table table-bordered table-striped">*/
/* 		    		<tr>*/
/* 		    			<th>Precotización</th>*/
/* 		    			<th>Fecha</th>*/
/* 		    			<th>Estado</th>*/
/* 		    		</tr>*/
/* 		    	{% for precotizacion in precotizaciones %}*/
/* 		    		<tr>*/
/* 		    			<td><a href="{{asset(precotizacion.archivo | slice (5))}}" target="_blank">{{ precotizacion.archivo  }}</a></td>*/
/* 		    			<td width="150px">{% if (precotizacion.fechaModificacion != null) %} {{precotizacion.fechaModificacion | date("Y-m-d") }} {% endif %}</td>*/
/* 		    			<td>{% if (precotizacion.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("solicitud_archivo_estado", {"id": precotizacion.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("solicitud_archivo_estado", {"id": precotizacion.id}) }}')" href="#">Activo</a>{% endif %}</td>*/
/* 		    		</tr>*/
/* 		    	{% endfor %}*/
/* 		    	</table>*/
/* 		    {% endif %}*/
/* 	  	</div>*/
/* 	</div>*/
/* 	*/
/* 		{% if cotizaciones is defined %}*/
/* 			    <div class="box span8">*/
/* 			    	<div class="box-content">*/
/* 				    	<div class="box-header well">*/
/* 							<h2>*/
/* 							{% if (is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP')) %}*/
/* 								{% if (solicitud.estado.id == 2) %}*/
/* 								<a href="{{ path('cotizaciones_nueva') }}/{{ solicitud.id }}">*/
/* 									<button class="btn btn-primary">*/
/* 										<i class="icon-plus icon-white"></i>*/
/* 									</button>*/
/* 								</a>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* 							</i>Cotizaciones</h2>*/
/* 						</div>*/
/* 				    	<table class="table table-bordered table-striped">*/
/* 				    		<tr>*/
/* 				    			<th>Id</th>*/
/* 				    			<th>Consecutivo</th>*/
/* 				    			<th>Archivo</th>*/
/* 				    			<th>Fecha Creación</th>*/
/* 				    			<th>Estado</th>*/
/* 				    		</tr>*/
/* 				    	{% for cotizacion in cotizaciones %}*/
/* 				    		<tr>*/
/* 				    			<td>{{ cotizacion.id }}</td>*/
/* 				    			<td><a href="{{ path("cotizaciones_datos") }}/{{ cotizacion.id }}">{{ cotizacion.consecutivo}}</a></td>*/
/* 				    			<td>{{ cotizacion.id }}</td>*/
/* 				    			<td>{{ cotizacion.fechaCreacion | date("Y-m-d") }}</td>*/
/* 				    			<td>{{ cotizacion.estado.nombre }}</td>*/
/* 				    		</tr>*/
/* 				    	{% endfor %}*/
/* 				    	</table>*/
/* 			    	</div>*/
/* 			    </div>*/
/* 	   	{% endif %}*/
/* 	{% endif %}*/
/* 	    */
/* 	    <div class="box span8">*/
/* 	    	<div class="box-content">*/
/* 		    	<div class="box-header well">*/
/* 					<h2>*/
/* 					{% if is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP') %}*/
/* 						{% if (solicitud.estado.id == 2) %}*/
/* 						<a href="{{ path('ordenes_nueva_solicitud') }}/{{ solicitud.id }}">*/
/* 							<button class="btn btn-primary">*/
/* 								<i class="icon-plus icon-white"></i>*/
/* 							</button>*/
/* 						</a>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 					</i>Ordenes de Compra</h2>*/
/* 				</div>*/
/* 				{% if ordenes is defined %}*/
/* 			    	<table class="table table-bordered table-striped">*/
/* 			    		<tr>*/
/* 			    			<th>Id</th>*/
/* 			    			<th>Consecutivo</th>*/
/* 			    			<th>Archivo</th>*/
/* 			    			<th>Proveedor</th>*/
/* 			    			<th>Fecha Creación</th>*/
/* 			    			<th>Estado</th>*/
/* 			    		</tr>*/
/* 			    	{% for orden in ordenes %}*/
/* 			    		<tr>*/
/* 			    			<td>{{ orden.id }}</td>*/
/* 			    			<td><a href="{{ path("ordenes_datos") }}/{{ orden.id }}">{{ orden.consecutivo}}</a></td>*/
/* 			    			<td>{{ orden.id }}</td>*/
/* 			    			<td>{{ orden.proveedor.nombre }}</td>*/
/* 			    			<td>{{ orden.fechaCreacion | date("Y-m-d") }}</td>*/
/* 			    			<td>{{ orden.ordenesestado.nombre }}</td>*/
/* 			    		</tr>*/
/* 			    	{% endfor %}*/
/* 			    	</table>*/
/* 			    {% endif %}*/
/* 	    	</div>*/
/* 	    </div>*/
/* */
/* 	    <div class="box span8">*/
/* 		    	<div class="box-content">*/
/* 			    	<div class="box-header well">*/
/* 					<h2>*/
/* 						{% if (is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP')) %}*/
/* 							{% if (solicitud.estado.id == 2) %}*/
/* 							<a href="{{ path('requisiciones_nueva') }}/{{ solicitud.id }}">*/
/* 								<button class="btn btn-primary">*/
/* 									<i class="icon-plus icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 							{% endif %}*/
/* 						{% endif %}*/
/* 						</i>Requisiciones</h2>*/
/* 					</div>*/
/* 			    	<table class="table table-bordered table-striped">*/
/* 			    		<tr>*/
/* 			    			<th>Id</th>*/
/* 			    			<th>Consecutivo</th>*/
/* 			    			<th>Archivo</th>*/
/* 			    			<th>Fecha Creación</th>*/
/* 			    		</tr>*/
/* 			    	{% for requisicion in requisiciones %}*/
/* 			    		<tr>*/
/* 			    			<td>{{ requisicion.id }}</td>*/
/* 			    			<td><a href="{{ path("requisiciones_datos") }}/{{ requisicion.id }}">{{ requisicion.consecutivo}}</a></td>*/
/* 			    			<td>{{ requisicion.id }}</td>*/
/* 			    			<td>{{ requisicion.fechaCreacion | date("Y-m-d") }}</td>*/
/* 			    		</tr>*/
/* 			    	{% endfor %}*/
/* 			    	</table>*/
/* 		    	</div>*/
/* 		    </div>*/
/* */
/* */
/* 	    <div class="box span8">*/
/* 	    	<div class="box-content">*/
/* 		    	<div class="box-header well">*/
/* 					<h2>*/
/* 					{% if is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') %}*/
/* 						{% if (solicitud.estado.id == 2) %}*/
/* 						<a href="{{ path('planillas_nueva_solicitud') }}/{{ solicitud.id }}">*/
/* 							<button class="btn btn-primary">*/
/* 								<i class="icon-plus icon-white"></i>*/
/* 							</button>*/
/* 						</a>*/
/* 						*/
/* 						 <a href="{{ path('logistica_despacho_solicitudes') }}/{{ solicitud.id }}" title="Generar" class="btn btn-primary btn-info">*/
/* 				              <i class="icon-cog icon-white"></i>*/
/* 				          </a>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 					</i>Planillas</h2>*/
/* 				</div>*/
/* 				{% if planillas is defined %}*/
/* 			    	<table class="table table-bordered table-striped">*/
/* 			    		<tr>*/
/* 			    			<th>Planilla</th>*/
/* 			    			<th>Fecha Creación</th>*/
/* 			    			<th>Descargar</th>*/
/* 			    			<th>Estado</th>*/
/* 			    		</tr>*/
/* 			    	{% for planilla in planillas %}*/
/* 			    		<tr>*/
/* 			    			<td><a href="{{ path("planillas_datos") }}/{{ planilla.id }}">{{ planilla.id}}</a></td>*/
/* 			    			<td>{{ planilla.fecha | date("Y-m-d") }}</td>*/
/* 			    			<td><a href="{{ path('inventario_planilla_actualizar') }}/{{ planilla.id }}/1" target="_blank" onClick=confirmar("{{ url("inventario_listado_planilla_estado", {"id": planilla.id}) }}")>Descargar</a></td>*/
/* 			    			<td>{{ planilla.planillaestado.nombre }}</td>*/
/* 			    		</tr>*/
/* 			    	{% endfor %}*/
/* 			    	</table>*/
/* 			    {% endif %}*/
/* 	    	</div>*/
/* 	    </div>*/
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
/* 		$("#asignar_responsable").colorbox({href:"{{ path('solicitudes_asignar',  {"solicitud": solicitud.id}) }}"});*/
/* 		$("#agregar_observacion").colorbox({href:"{{ path('solicitud_observaciones',  {"id": solicitud.id}) }}"});*/
/* 		$("#agregar_archivos").colorbox({href:"{{ path('solicitudes_archivos',  {"solicitud": solicitud.id}) }}"});*/
/* 		$("#agregar_ordenesDespacho").colorbox({href:"{{ path('solicitudes_cargardespachos',  {"solicitud": solicitud.id}) }}"});*/
/* 		$("#agregar_precotizacion").colorbox({href:"{{ path('solicitudes_precotizacion',  {"solicitud": solicitud.id}) }}"});*/
/* */
/* 	</script>*/
/* 	*/
/* 	<script>*/
/* 		function confirmar(ruta)*/
/*       	{*/
/* 	        if (confirm("Desea cambiar el estado del archivo")==true){*/
/* 	            self.location=ruta;*/
/* 	        }else{*/
/* 	            alert("OK");*/
/* 	        }*/
/* 		}*/
/*   </script>*/
/* {% endblock %}*/
/* */
/* */
