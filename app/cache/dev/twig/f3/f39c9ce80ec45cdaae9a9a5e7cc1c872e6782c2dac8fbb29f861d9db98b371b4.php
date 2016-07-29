<?php

/* IncentivesSolicitudesBundle:Cotizaciones:datos.html.twig */
class __TwigTemplate_42910b847d655177e5e2daa5f30ac3e134e3891c31fbe5221e62c75ed173a907 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesSolicitudesBundle:Cotizaciones:datos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_057dfb1031ba5c86524dbafb7e7fbf24a2c627048430220403bfc5da37565916 = $this->env->getExtension("native_profiler");
        $__internal_057dfb1031ba5c86524dbafb7e7fbf24a2c627048430220403bfc5da37565916->enter($__internal_057dfb1031ba5c86524dbafb7e7fbf24a2c627048430220403bfc5da37565916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057dfb1031ba5c86524dbafb7e7fbf24a2c627048430220403bfc5da37565916->leave($__internal_057dfb1031ba5c86524dbafb7e7fbf24a2c627048430220403bfc5da37565916_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c71ee317f0689cf4738ce685795759e0264d10dc9e5d0d681b5456976f836bbd = $this->env->getExtension("native_profiler");
        $__internal_c71ee317f0689cf4738ce685795759e0264d10dc9e5d0d681b5456976f836bbd->enter($__internal_c71ee317f0689cf4738ce685795759e0264d10dc9e5d0d681b5456976f836bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Cotización";
        
        $__internal_c71ee317f0689cf4738ce685795759e0264d10dc9e5d0d681b5456976f836bbd->leave($__internal_c71ee317f0689cf4738ce685795759e0264d10dc9e5d0d681b5456976f836bbd_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_efdaf758888f271375ef1a1bceb7ccad64356a4eb4be2a34537e6b4563bab698 = $this->env->getExtension("native_profiler");
        $__internal_efdaf758888f271375ef1a1bceb7ccad64356a4eb4be2a34537e6b4563bab698->enter($__internal_efdaf758888f271375ef1a1bceb7ccad64356a4eb4be2a34537e6b4563bab698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Cotización\t
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("solicitudes_datos");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "solicitud", array()), "id", array()), "html", null, true);
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

\t\t\t\t</i>Datos Cotización</h2>
\t\t\t\t
\t\t\t\t";
        // line 23
        if (((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT"))) {
            // line 24
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_editar", array("id" => $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t
\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "rutapdf", array()), 5)), "html", null, true);
        echo "\"  class=\"btn btn-info\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"icon-download-alt icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 33
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 34
            echo "\t
\t\t\t\t\t\t";
            // line 35
            if (($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) != 1)) {
                // line 36
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_correo", array("id" => $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "id", array()))), "html", null, true);
                echo "\"  class=\"btn btn-info\">
\t\t\t\t\t\t\t\t<i class=\"icon-envelope icon-white\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Consecutivo</td><td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "consecutivo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de solicitud</td><td>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Vigente Hasta</td><td>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Logistica Consolidada</td><td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "logistica", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Solicitud</td><td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "solicitud", array()), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "solicitud", array()), "titulo", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "solicitud", array()), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "solicitud", array()), "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<tr><td>Estado</td><td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Accion</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"estado\" >
\t\t\t\t\t\t\t\t\t\t";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 1)) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" onClick='confirmar(\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cotizaciones_finalizar", array("id" => $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "id", array()))), "html", null, true);
            echo "\")'>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok icon-white\" align='rigth'></i>\t
\t\t\t\t\t\t\t\t\t\t\t\tEnviar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 67
        if ((($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 1) || ($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 2))) {
            echo "\t
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" onClick='confirmar(\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cotizaciones_cancelar", array("id" => $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "id", array()))), "html", null, true);
            echo "\")'>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash icon-white\" align='rigth'></i>\t
\t\t\t\t\t\t\t\t\t\t\t\tCancelar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td></tr>
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
        // line 87
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 88
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 1)) {
                // line 89
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_agregarproducto", array("id" => $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\tProductos
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t";
        // line 100
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) != 0)) {
            // line 101
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
            // line 116
            $context["total"] = 0;
            // line 117
            echo "\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 118
            $context["subtotal"] = 0;
            // line 119
            echo "\t \t\t\t\t";
            $context["totaliva"] = 0;
            // line 120
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                echo "\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                // line 122
                $context["rutaImagen"] = "";
                // line 123
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                    // line 124
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["imagen"], "estado", array()) == 1)) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t";
                        $context["rutaImagen"] = $this->getAttribute($context["imagen"], "path", array());
                        // line 126
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<td><a href=\"../../../";
                // line 130
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen")), 0), "html", null, true);
                echo "\" target='_blank'><img src=\"../../../";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, (isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen")), 0), 0,  -4), "html", null, true);
                echo "_min.jpg\" width=\"100\" height=\"100\"><a></td>
\t\t\t\t\t\t\t<td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "descripcion", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 135
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "valorunidad", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 136
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valorunidad", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100))), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 137
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "logistica", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>\$ ";
                // line 138
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valortotal", array()) + ($this->getAttribute($context["producto"], "logistica", array()) * $this->getAttribute($context["producto"], "cantidad", array()))), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td> ";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "estado", array()), "nombre", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t\t";
                // line 140
                if (((($this->getAttribute($this->getAttribute($context["producto"], "estado", array()), "id", array()) == 1) && ($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 1)) && (($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")))) {
                    echo "\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" id=\"productoeditar_";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\" align='rigth'></i>\t\t\t
\t\t\t\t\t\t\t\t\tEditar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t";
                if (((($this->getAttribute($this->getAttribute($context["producto"], "estado", array()), "id", array()) == 1) && ($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 1)) && (($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_ASIS")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")))) {
                    echo "\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" id=\"productoeliminar_";
                    // line 147
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_eliminar_producto", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-trash icon-white\" align='rigth'></i>\t\t\t
\t\t\t\t\t\t\t\t\tEliminar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a><br><br>
\t\t\t\t\t\t\t\t";
                }
                // line 152
                echo "\t\t\t\t\t\t\t\t";
                if (((($this->getAttribute($this->getAttribute($context["producto"], "estado", array()), "id", array()) == 1) && (($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 2) || ($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 3))) && ($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_EJEC")))) {
                    echo "\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" id=\"productoaprobar_";
                    // line 153
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_aprobar_producto", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-ok icon-white\" align='rigth'></i>\t\t\t
\t\t\t\t\t\t\t\t\tAprobar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t\t\t\t\t";
                if (((($this->getAttribute($this->getAttribute($context["producto"], "estado", array()), "id", array()) == 1) && (($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 2) || ($this->getAttribute($this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "estado", array()), "id", array()) == 3))) && ($this->env->getExtension('security')->isGranted("ROLE_DIR") || $this->env->getExtension('security')->isGranted("ROLE_EJEC")))) {
                    echo "\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" id=\"productorechazar_";
                    // line 159
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_rechazar_producto", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-trash icon-white\" align='rigth'></i>\t\t\t
\t\t\t\t\t\t\t\t\tRechazar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                // line 165
                if (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estadoIva", array()) == true)) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + ($this->getAttribute($context["producto"], "valortotal", array()) * ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "iva", array()) / 100)));
                    // line 167
                    echo "\t\t\t\t\t\t\t\t";
                }
                echo "\t
\t\t\t\t\t\t\t";
                // line 168
                $context["subtotal"] = (((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["producto"], "valortotal", array())) + ($this->getAttribute($context["producto"], "logistica", array()) * $this->getAttribute($context["producto"], "cantidad", array())));
                // line 169
                echo "
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan='8'>Subtotal</th>
\t\t\t\t\t\t<td>\$ ";
            // line 174
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan='8'>Logistica Consolidada</th>
\t\t\t\t\t\t<td>\$ ";
            // line 179
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "logistica", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan='8'>IVA</th>
\t\t\t\t\t\t<td>\$ ";
            // line 184
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan='8'>Valor total</th>
\t\t\t\t\t\t";
            // line 188
            $context["total"] = (((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + (isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva"))) + $this->getAttribute((isset($context["cotizacion"]) ? $context["cotizacion"] : $this->getContext($context, "cotizacion")), "logistica", array()));
            // line 189
            echo "\t\t\t\t\t\t<td>\$ ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 194
        echo "\t\t</div>
\t</div>



";
        
        $__internal_efdaf758888f271375ef1a1bceb7ccad64356a4eb4be2a34537e6b4563bab698->leave($__internal_efdaf758888f271375ef1a1bceb7ccad64356a4eb4be2a34537e6b4563bab698_prof);

    }

    // line 201
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_817d53efa678af6a473fc54396c5a82028e4bdbeef9dd1ae4e57aa276152b18e = $this->env->getExtension("native_profiler");
        $__internal_817d53efa678af6a473fc54396c5a82028e4bdbeef9dd1ae4e57aa276152b18e->enter($__internal_817d53efa678af6a473fc54396c5a82028e4bdbeef9dd1ae4e57aa276152b18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 202
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
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            echo "\t
\t\t\$(\"#productoeditar_";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\").colorbox({href:\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_valores", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\"});\t
\t\t\$(\"#productoaprobar_";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\").colorbox({href:\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_aprobar_producto", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\"});\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t

\t</script>
";
        
        $__internal_817d53efa678af6a473fc54396c5a82028e4bdbeef9dd1ae4e57aa276152b18e->leave($__internal_817d53efa678af6a473fc54396c5a82028e4bdbeef9dd1ae4e57aa276152b18e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 219,  501 => 217,  495 => 216,  489 => 215,  472 => 202,  466 => 201,  454 => 194,  445 => 189,  443 => 188,  436 => 184,  428 => 179,  420 => 174,  416 => 172,  408 => 169,  406 => 168,  401 => 167,  398 => 166,  396 => 165,  393 => 164,  383 => 159,  378 => 158,  368 => 153,  363 => 152,  353 => 147,  348 => 146,  340 => 141,  336 => 140,  332 => 139,  328 => 138,  324 => 137,  320 => 136,  316 => 135,  312 => 134,  308 => 133,  304 => 132,  300 => 131,  294 => 130,  290 => 128,  284 => 127,  281 => 126,  278 => 125,  275 => 124,  270 => 123,  268 => 122,  260 => 120,  257 => 119,  255 => 118,  252 => 117,  250 => 116,  233 => 101,  231 => 100,  225 => 96,  222 => 95,  212 => 89,  209 => 88,  207 => 87,  191 => 73,  183 => 68,  179 => 67,  176 => 66,  167 => 60,  164 => 59,  162 => 58,  155 => 54,  151 => 53,  147 => 52,  141 => 51,  137 => 50,  133 => 49,  129 => 48,  125 => 47,  117 => 41,  114 => 40,  106 => 36,  104 => 35,  101 => 34,  99 => 33,  93 => 30,  89 => 28,  81 => 24,  79 => 23,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Cotización{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Cotización	*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('solicitudes_datos') }}/{{ cotizacion.solicitud.id }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
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
/* 				</i>Datos Cotización</h2>*/
/* 				*/
/* 				{% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT')) %}*/
/* 					<a href="{{ path('cotizaciones_editar',  {"id": cotizacion.id}) }}" class="btn btn-primary">*/
/* 						<i class="icon-edit icon-white"></i>*/
/* 					</a>*/
/* 					{% endif %}*/
/* 				*/
/* 					<div class="box-icon">*/
/* 						<a href="{{asset(cotizacion.rutapdf | slice (5))}}"  class="btn btn-info" target="_blank">*/
/* 							<i class="icon-download-alt icon-white"></i>*/
/* 						</a>*/
/* 					{% if not is_granted('ROLE_PROV') %}*/
/* 	*/
/* 						{% if (cotizacion.estado.id != 1) %}*/
/* 							<a href="{{ path('ordenes_correo',  {"id": cotizacion.id}) }}"  class="btn btn-info">*/
/* 								<i class="icon-envelope icon-white"></i>*/
/* 							</a>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 					</div>*/
/* 			</div>*/
/* 			*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Consecutivo</td><td>{{ cotizacion.consecutivo }}</td></tr>*/
/* 						<tr><td>Fecha de solicitud</td><td>{{ cotizacion.fechaCreacion | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Vigente Hasta</td><td>{{ cotizacion.fechaCreacion | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Logistica Consolidada</td><td>{{ cotizacion.logistica }}</td></tr>*/
/* 						<tr><td>Solicitud</td><td>{{ cotizacion.solicitud.id }} - {{ cotizacion.solicitud.titulo }}</td>*/
/* 						<tr><td>Programa</td><td>{{ cotizacion.solicitud.programa.nombre }}</td>							*/
/* 						<tr><td>Cliente</td><td>{{ cotizacion.solicitud.programa.cliente.nombre }}</td>							*/
/* 						<tr><td>Estado</td><td>{{ cotizacion.estado.nombre }}</td></tr>*/
/* 						<tr><td>Accion</td>*/
/* 							<td>*/
/* 								<div class="estado" >*/
/* 										{% if (cotizacion.estado.id == 1) %}*/
/* 										*/
/* 											<a class="btn btn-success" onClick='confirmar("{{ url('cotizaciones_finalizar', {'id': cotizacion.id}) }}")'>*/
/* 												<i class="icon-ok icon-white" align='rigth'></i>	*/
/* 												Enviar										*/
/* 											</a>*/
/* 											*/
/* 										{% endif %}*/
/* 										*/
/* 										{% if (cotizacion.estado.id == 1 or cotizacion.estado.id == 2) %}	*/
/* 											<a class="btn btn-danger" onClick='confirmar("{{ url('cotizaciones_cancelar', {'id': cotizacion.id}) }}")'>*/
/* 												<i class="icon-trash icon-white" align='rigth'></i>	*/
/* 												Cancelar										*/
/* 											</a>*/
/* 										{% endif %}*/
/* 								</div>*/
/* 						</td></tr>*/
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
/* 							{% if cotizacion.estado.id==1 %}*/
/* 							<a href="{{ path('cotizaciones_agregarproducto',  {"id": cotizacion.id}) }}">*/
/* 								<button class="btn btn-primary">*/
/* 									<i class="icon-plus icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 						{% endif %}*/
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
/* 							<td> {{ producto.estado.nombre }}<br>*/
/* 								{% if( producto.estado.id == 1 and cotizacion.estado.id == 1 and (is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP'))) %}	*/
/* 								<a class="btn btn-primary" id="productoeditar_{{ producto.id }}">*/
/* 									<i class="icon-edit icon-white" align='rigth'></i>			*/
/* 									Editar										*/
/* 								</a>*/
/* 								{% endif %}*/
/* 								{% if( producto.estado.id == 1 and cotizacion.estado.id == 1 and (is_granted('ROLE_DIR') or is_granted('ROLE_ASIS') or is_granted('ROLE_ASISCOMP'))) %}	*/
/* 								<a class="btn btn-danger" id="productoeliminar_{{ producto.id }}" href="{{ path("cotizaciones_eliminar_producto", {"id": producto.id}) }}">*/
/* 									<i class="icon-trash icon-white" align='rigth'></i>			*/
/* 									Eliminar										*/
/* 								</a><br><br>*/
/* 								{% endif %}*/
/* 								{% if( producto.estado.id == 1 and (cotizacion.estado.id == 2 or cotizacion.estado.id == 3) and (is_granted('ROLE_DIR') or is_granted('ROLE_EJEC'))) %}	*/
/* 								<a class="btn btn-success" id="productoaprobar_{{ producto.id }}" href="{{ path("cotizaciones_aprobar_producto", {"id": producto.id}) }}">*/
/* 									<i class="icon-ok icon-white" align='rigth'></i>			*/
/* 									Aprobar										*/
/* 								</a>*/
/* 								{% endif %}*/
/* 								{% if( producto.estado.id == 1 and (cotizacion.estado.id == 2 or cotizacion.estado.id == 3) and (is_granted('ROLE_DIR') or is_granted('ROLE_EJEC') )) %}	*/
/* 								<a class="btn btn-danger" id="productorechazar_{{ producto.id }}" href="{{ path("cotizaciones_rechazar_producto", {"id": producto.id}) }}">*/
/* 									<i class="icon-trash icon-white" align='rigth'></i>			*/
/* 									Rechazar										*/
/* 								</a>*/
/* 								{% endif %}*/
/* 							</td>*/
/* 							{% if producto.producto.estadoIva == true %}*/
/* 									{% set totaliva = totaliva + (producto.valortotal*(producto.producto.iva/100)) %}*/
/* 								{% endif %}	*/
/* 							{% set subtotal = subtotal+producto.valortotal + (producto.logistica*producto.cantidad)  %}*/
/* */
/* 					</tr>*/
/* 					{% endfor %}*/
/* 					<tr>*/
/* 						<th colspan='8'>Subtotal</th>*/
/* 						<td>$ {{ subtotal|number_format(2, ',', '.') }}</td>*/
/* 					</tr>*/
/* 					*/
/* 					<tr>*/
/* 						<th colspan='8'>Logistica Consolidada</th>*/
/* 						<td>$ {{ cotizacion.logistica|number_format(2, ',', '.') }}</td>*/
/* 					</tr>*/
/* 					*/
/* 					<tr>*/
/* 						<th colspan='8'>IVA</th>*/
/* 						<td>$ {{ totaliva|number_format(2, ',', '.') }}</td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<th colspan='8'>Valor total</th>*/
/* 						{% set total = subtotal + totaliva + cotizacion.logistica %}*/
/* 						<td>$ {{ total|number_format(2, ',', '.') }}</td>*/
/* 					</tr>*/
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
