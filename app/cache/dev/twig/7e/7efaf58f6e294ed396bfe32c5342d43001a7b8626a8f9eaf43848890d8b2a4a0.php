<?php

/* IncentivesOrdenesBundle:Ordenes:datos.html.twig */
class __TwigTemplate_d8dabcf21356d49f84ee0c2e4e8e26a73a0a7fac3272f084defce3da15ba9390 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesOrdenesBundle:Ordenes:datos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4396cf027c613cfac604ceffa58c302cf1f63ecb5d8e0ae77339bdb97e0f3fa5 = $this->env->getExtension("native_profiler");
        $__internal_4396cf027c613cfac604ceffa58c302cf1f63ecb5d8e0ae77339bdb97e0f3fa5->enter($__internal_4396cf027c613cfac604ceffa58c302cf1f63ecb5d8e0ae77339bdb97e0f3fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4396cf027c613cfac604ceffa58c302cf1f63ecb5d8e0ae77339bdb97e0f3fa5->leave($__internal_4396cf027c613cfac604ceffa58c302cf1f63ecb5d8e0ae77339bdb97e0f3fa5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6d396f352fc7a3910864048c3a1eb97dd776e2f2ad40a5eb4256810589ed961 = $this->env->getExtension("native_profiler");
        $__internal_b6d396f352fc7a3910864048c3a1eb97dd776e2f2ad40a5eb4256810589ed961->enter($__internal_b6d396f352fc7a3910864048c3a1eb97dd776e2f2ad40a5eb4256810589ed961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Orden";
        
        $__internal_b6d396f352fc7a3910864048c3a1eb97dd776e2f2ad40a5eb4256810589ed961->leave($__internal_b6d396f352fc7a3910864048c3a1eb97dd776e2f2ad40a5eb4256810589ed961_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_f4f34460bd47a2a5dbd015784e55e16157e39ce62247a158e5aba80afb594730 = $this->env->getExtension("native_profiler");
        $__internal_f4f34460bd47a2a5dbd015784e55e16157e39ce62247a158e5aba80afb594730->enter($__internal_f4f34460bd47a2a5dbd015784e55e16157e39ce62247a158e5aba80afb594730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Orden\t
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ordenes");
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
\t\t\t\t    ";
        // line 20
        if (($this->env->getExtension('security')->isGranted("ROLE_DIR") || ($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 1))) {
            // line 21
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_editar", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</i>Datos Orden</h2>
\t\t\t\t
\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "rutapdf", array()), 5)), "html", null, true);
        echo "\"  class=\"btn btn-info\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"icon-download-alt icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 35
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 36
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_slice($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "rutapdfcodes", array()), 5)), "html", null, true);
            echo "\"  class=\"btn btn-info\">
\t\t\t\t\t\t\t<i class=\"icon-barcode icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 39
            if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 5)) {
                // line 40
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenredencion_pdffinal", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                echo "\"  class=\"btn btn-info\">
\t\t\t\t\t\t\t<i class=\"icon-download icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 44
            echo "
\t\t\t\t\t";
            // line 45
            if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) != 1)) {
                // line 46
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_correo", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                echo "\"  class=\"btn btn-info\">
\t\t\t\t\t\t\t<i class=\"icon-envelope icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Consecutivo</td><td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "consecutivo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Proveedor</td><td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "proveedor", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 59
        if ( !(null === $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "programa", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "programa", array()), "nombre", array()), "html", null, true);
        }
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de solicitud</td><td>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de entrega</td><td>";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Tipo Moneda</td><td>";
        // line 62
        if ( !(null === $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "monedaTipo", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "monedaTipo", array()), "nombre", array()), "html", null, true);
        }
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>TRM</td><td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "trm", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cancelado</td>
\t\t\t\t\t\t\t";
        // line 65
        if (($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "cancelado", array()) == true)) {
            // line 66
            echo "\t\t\t\t\t\t\t\t<td>Si</td>
\t\t\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t\t\t<td>No</td>
\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr><td>Estado</td><td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "nombre", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 73
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 74
            echo "\t\t\t\t\t\t<tr><td>Acción</td><td>
\t\t\t\t\t\t\t\t<div class=\"estado\" >
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 77
            if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 1)) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" onClick='confirmar(\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ordenredencion_aprobar", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                echo "\")'>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok icon-white\" align='rigth'></i>\t
\t\t\t\t\t\t\t\t\t\t\t\tAprobar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 2) || ($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 4))) {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" onClick='confirmar(\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ordenredencion_cerrar", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                echo "\")'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok icon-white\" align='rigth'></i>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tCerrar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 1) || ($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 2))) {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" onClick='confirmar(\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ordenredencion_cancelar", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                echo "\")'>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash icon-white\" align='rigth'></i>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tCancelar\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t</tbody>
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
        // line 112
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 113
            echo "\t\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesEstado", array()), "id", array()) == 1) || $this->env->getExtension('security')->isGranted("ROLE_DIR"))) {
                // line 114
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenredencion_editarvalores", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 120
                if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenesTipo", array()), "id", array()) == 1)) {
                    // line 121
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_producto_cotizaciones", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 127
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- <a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_agregarproducto", array("id" => $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a> -->
\t\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\tProductos
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t";
        // line 141
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) != 0)) {
            // line 142
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Referencia</th>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Codigo de Barras</th>
\t\t\t\t\t\t<th>Codigo Incentives</th>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Cantidad recibida</th>
\t\t\t\t\t\t<th>Valor unitario</th>
\t\t\t\t\t\t<th>Descuento</th>
\t\t\t\t\t\t<th>Valor total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 157
            $context["total"] = 0;
            // line 158
            echo "\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 159
            $context["subtotal"] = 0;
            // line 160
            echo "\t \t\t\t\t";
            $context["totaliva"] = 0;
            // line 161
            echo "\t \t\t\t\t";
            $context["descuento"] = 0;
            // line 162
            echo "\t \t\t\t\t";
            $context["j"] = 0;
            // line 163
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                echo "\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                // line 165
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 166
                echo "\t\t\t\t\t\t";
                $context["i"] = 0;
                // line 167
                echo "\t\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codEAN", array()), "html", null, true);
                echo "</td>\t
\t\t\t\t\t\t\t\t<td>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
                echo "</td>\t
\t\t\t\t\t\t\t\t<td>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "descripcion", array()), "html", null, true);
                echo "</td>\t
\t\t\t\t\t\t\t\t<td>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" onClick=\"detalle('";
                echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                echo "')\" class=\"btn btn-success\">+</a></td>
\t\t\t\t\t\t\t\t<td>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidadrecibida", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>\$ ";
                // line 174
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "valorunidad", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>\$ ";
                // line 175
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "descuento", array()), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>\$ ";
                // line 176
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["producto"], "valortotal", array()) - $this->getAttribute($context["producto"], "descuento", array())), 2, ",", "."), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
                // line 177
                if (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estadoIva", array()) == true)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + (($this->getAttribute($context["producto"], "valortotal", array()) - $this->getAttribute($context["producto"], "descuento", array())) * ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "iva", array()) / 100)));
                    // line 179
                    echo "\t\t\t\t\t\t\t\t";
                }
                echo "\t
\t\t\t\t\t\t\t\t";
                // line 180
                $context["descuento"] = ((isset($context["descuento"]) ? $context["descuento"] : $this->getContext($context, "descuento")) + $this->getAttribute($context["producto"], "descuento", array()));
                // line 181
                echo "\t\t\t\t\t\t\t\t";
                $context["subtotal"] = (((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + $this->getAttribute($context["producto"], "valortotal", array())) - $this->getAttribute($context["producto"], "descuento", array()));
                echo "\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 182
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 183
                echo "
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t";
                // line 186
                if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenestipo", array()), "id", array()) == 2)) {
                    // line 187
                    echo "\t\t\t\t\t<tr id=\"detalle_";
                    echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                    echo "\" class=\"hide\">
\t\t\t\t\t\t<td colspan=\"1\"></td>
\t\t\t\t\t\t<td colspan=\"11\">
\t\t                    <div>";
                    // line 190
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesOrdenesBundle:Ordenes:detalleProductoOrden", array("productoOrden" => $this->getAttribute($context["producto"], "id", array()))));
                    echo "</div>
\t\t                </td>
\t\t            </tr>
\t\t            ";
                }
                // line 194
                echo "\t\t            
\t\t            ";
                // line 195
                if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "ordenestipo", array()), "id", array()) == 1)) {
                    // line 196
                    echo "\t\t\t\t\t<tr id=\"detalle_";
                    echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
                    echo "\" class=\"hide\">
\t\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t\t\t<td colspan=\"6\">
\t\t                    <div>";
                    // line 199
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesOrdenesBundle:Ordenes:detalleProductoRequisicion", array("productoOrden" => $this->getAttribute($context["producto"], "id", array()))));
                    echo "</div>
\t\t                </td>
\t\t            </tr>
\t\t            ";
                }
                // line 203
                echo "
\t\t\t\t\t";
                // line 204
                if (($this->getAttribute($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "proveedor", array()), "id", array()) == 79)) {
                    // line 205
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"1\"></td>
\t\t\t\t\t\t\t<td colspan=\"10\">
\t\t\t\t\t\t\t";
                    // line 208
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["tracking"]) ? $context["tracking"] : $this->getContext($context, "tracking")), $this->getAttribute($context["producto"], "id", array()), array(), "array")) > 0)) {
                        // line 209
                        echo "\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>O. Amazon</th>
\t\t\t\t\t\t\t\t\t\t<th>Tracking</th>
\t\t\t\t\t\t\t\t\t\t<th>Tarjeta</th>
\t\t\t\t\t\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                        // line 217
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tracking"]) ? $context["tracking"] : $this->getContext($context, "tracking")), $this->getAttribute($context["producto"], "id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                            // line 218
                            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 219
                            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "ordenAmazon", array()), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 220
                            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "tracking", array()), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 221
                            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "tarjeta", array()), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 222
                            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "precio", array()), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 223
                            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "cantidad", array()), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 226
                        echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t";
                    }
                    // line 228
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesOrdenesBundle:OrdenRedencion:tracking", array("id" => $this->getAttribute($context["producto"], "id", array()))));
                    echo "</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t";
                }
                // line 233
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan='9'>Subtotal</th>
\t\t\t\t\t\t<td>\$ ";
            // line 237
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t \t\t\t<th colspan='9'>Domicilio</th>
\t\t\t \t\t\t<td>\$ ";
            // line 241
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "domicilio", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t \t\t</tr>
\t\t\t \t\t<tr>
\t\t\t \t\t\t<th colspan='9'>Servicio Logistico</th>
\t\t\t \t\t\t<td>\$ ";
            // line 245
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "servicioLogistico", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t \t\t</tr>
\t\t\t \t\t<tr>
\t\t\t \t\t\t<th colspan='9'>Comisicon Bancaria</th>
\t\t\t \t\t\t<td>\$ ";
            // line 249
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "comisionBancaria", array()), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t \t\t</tr>
\t\t\t \t\t
\t\t\t \t\t<!-- <tr>
\t\t\t \t\t\t<th colspan='9'>Descuentos</th>
\t\t\t \t\t\t<td>\$ ";
            // line 254
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["descuento"]) ? $context["descuento"] : $this->getContext($context, "descuento")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t \t\t</tr> -->
\t\t\t \t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 259
            if (($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "aplicaIva", array()) == 1)) {
                echo " ";
                $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + ($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "domicilio", array()) * 0.16));
                echo " ";
            }
            // line 260
            echo "\t \t\t\t\t\t";
            if (($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "aplicaIva", array()) == 1)) {
                echo " ";
                $context["totaliva"] = ((isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")) + ($this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "comisionBancaria", array()) * 0.16));
                echo " ";
            }
            // line 261
            echo "\t \t\t
\t\t\t\t\t\t<th colspan='9'>IVA</th>
\t\t\t\t\t\t<td>\$ ";
            // line 263
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan='9'>Valor total</th>
\t\t\t\t\t\t";
            // line 267
            $context["total"] = (((((isset($context["subtotal"]) ? $context["subtotal"] : $this->getContext($context, "subtotal")) + (isset($context["totaliva"]) ? $context["totaliva"] : $this->getContext($context, "totaliva"))) + $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "domicilio", array())) + $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "servicioLogistico", array())) + $this->getAttribute((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")), "comisionBancaria", array()));
            // line 268
            echo "\t\t\t\t\t\t<td>\$ ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 2, ",", "."), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 273
        echo "\t\t</div>
\t</div>



";
        
        $__internal_f4f34460bd47a2a5dbd015784e55e16157e39ce62247a158e5aba80afb594730->leave($__internal_f4f34460bd47a2a5dbd015784e55e16157e39ce62247a158e5aba80afb594730_prof);

    }

    // line 280
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69bf4d08ea6bac785018c28e1d15714dd12bf2abeacf8642ec1f4e1736820f9c = $this->env->getExtension("native_profiler");
        $__internal_69bf4d08ea6bac785018c28e1d15714dd12bf2abeacf8642ec1f4e1736820f9c->enter($__internal_69bf4d08ea6bac785018c28e1d15714dd12bf2abeacf8642ec1f4e1736820f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 281
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
\t function detalle(id){
        \$('#detalle_'+id).toggle();
    }

\t</script>
";
        
        $__internal_69bf4d08ea6bac785018c28e1d15714dd12bf2abeacf8642ec1f4e1736820f9c->leave($__internal_69bf4d08ea6bac785018c28e1d15714dd12bf2abeacf8642ec1f4e1736820f9c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 281,  620 => 280,  608 => 273,  599 => 268,  597 => 267,  590 => 263,  586 => 261,  579 => 260,  573 => 259,  565 => 254,  557 => 249,  550 => 245,  543 => 241,  536 => 237,  532 => 235,  525 => 233,  516 => 228,  512 => 226,  503 => 223,  499 => 222,  495 => 221,  491 => 220,  487 => 219,  484 => 218,  480 => 217,  470 => 209,  468 => 208,  463 => 205,  461 => 204,  458 => 203,  451 => 199,  444 => 196,  442 => 195,  439 => 194,  432 => 190,  425 => 187,  423 => 186,  418 => 183,  416 => 182,  411 => 181,  409 => 180,  404 => 179,  401 => 178,  399 => 177,  395 => 176,  391 => 175,  387 => 174,  383 => 173,  375 => 172,  371 => 171,  367 => 170,  363 => 169,  359 => 168,  354 => 167,  351 => 166,  349 => 165,  341 => 163,  338 => 162,  335 => 161,  332 => 160,  330 => 159,  327 => 158,  325 => 157,  308 => 142,  306 => 141,  300 => 137,  295 => 134,  286 => 128,  283 => 127,  273 => 121,  271 => 120,  261 => 114,  258 => 113,  256 => 112,  242 => 100,  235 => 95,  226 => 90,  223 => 89,  214 => 84,  211 => 83,  202 => 78,  200 => 77,  195 => 74,  193 => 73,  188 => 71,  185 => 70,  181 => 68,  177 => 66,  175 => 65,  170 => 63,  164 => 62,  160 => 61,  156 => 60,  150 => 59,  146 => 58,  142 => 57,  134 => 51,  131 => 50,  123 => 46,  121 => 45,  118 => 44,  110 => 40,  108 => 39,  101 => 36,  99 => 35,  93 => 32,  86 => 27,  76 => 21,  74 => 20,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Orden{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Orden	*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('ordenes') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/* 	    <div class="box-content">*/
/* 	    	*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				    {% if (is_granted('ROLE_DIR') or ordenes.ordenesEstado.id == 1)%}*/
/* 					<a href="{{ path('ordenes_editar',  {"id": ordenes.id}) }}">*/
/* 						<button class="btn btn-primary">*/
/* 							<i class="icon-edit icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					{% endif %}*/
/* 					*/
/* 					*/
/* 				</i>Datos Orden</h2>*/
/* 				*/
/* 					<div class="box-icon">*/
/* 						<a href="{{asset(ordenes.rutapdf | slice (5))}}"  class="btn btn-info" target="_blank">*/
/* 							<i class="icon-download-alt icon-white"></i>*/
/* 						</a>*/
/* 					{% if not is_granted('ROLE_PROV') %}*/
/* 						<a href="{{asset(ordenes.rutapdfcodes | slice (5))}}"  class="btn btn-info">*/
/* 							<i class="icon-barcode icon-white"></i>*/
/* 						</a>*/
/* 					{% if (ordenes.ordenesEstado.id == 5) %}*/
/* 						<a href="{{ path('ordenredencion_pdffinal',  {"id": ordenes.id}) }}"  class="btn btn-info">*/
/* 							<i class="icon-download icon-white"></i>*/
/* 						</a>*/
/* 					{% endif %}*/
/* */
/* 					{% if (ordenes.ordenesEstado.id != 1) %}*/
/* 						<a href="{{ path('ordenes_correo',  {"id": ordenes.id}) }}"  class="btn btn-info">*/
/* 							<i class="icon-envelope icon-white"></i>*/
/* 						</a>*/
/* 					{% endif %}*/
/* 					{% endif %}*/
/* 					</div>*/
/* 			</div>*/
/* 			*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Consecutivo</td><td>{{ ordenes.consecutivo }}</td></tr>*/
/* 						<tr><td>Proveedor</td><td>{{ ordenes.proveedor.nombre }}</td></tr>*/
/* 						<tr><td>Programa</td><td>{% if ordenes.programa is not null %}{{ ordenes.programa.nombre }}{% endif %}</td></tr>*/
/* 						<tr><td>Fecha de solicitud</td><td>{{ ordenes.fechaCreacion | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Fecha de entrega</td><td>{{ ordenes.fechaVencimiento | date("Y-m-d")  }}</td></tr>*/
/* 						<tr><td>Tipo Moneda</td><td>{% if ordenes.monedaTipo is not null %}{{ ordenes.monedaTipo.nombre }}{% endif %}</td></tr>*/
/* 						<tr><td>TRM</td><td>{{ ordenes.trm  }}</td></tr>*/
/* 						<tr><td>Cancelado</td>*/
/* 							{% if ordenes.cancelado==true %}*/
/* 								<td>Si</td>*/
/* 							{% else %}*/
/* 								<td>No</td>*/
/* 							{% endif %}*/
/* 						</tr>*/
/* 						<tr><td>Estado</td><td>{{ ordenes.ordenesEstado.nombre }}</td>*/
/* 						</tr>*/
/* 						{% if not is_granted('ROLE_PROV') %}*/
/* 						<tr><td>Acción</td><td>*/
/* 								<div class="estado" >*/
/* 									*/
/* 										{% if (ordenes.ordenesEstado.id == 1) %}*/
/* 												<a class="btn btn-info" onClick='confirmar("{{ url('ordenredencion_aprobar', {'id': ordenes.id}) }}")'>*/
/* 												<i class="icon-ok icon-white" align='rigth'></i>	*/
/* 												Aprobar										*/
/* 											</a>*/
/* 										{% endif %}*/
/* 										{% if (ordenes.ordenesEstado.id == 2 or ordenes.ordenesEstado.id == 4) %}*/
/* 											<a class="btn btn-info" onClick='confirmar("{{ url('ordenredencion_cerrar', {'id': ordenes.id }) }}")'>*/
/* 													<i class="icon-ok icon-white" align='rigth'></i>									*/
/* 													Cerrar										*/
/* 												</a>*/
/* 										{% endif %}*/
/* 										{% if (ordenes.ordenesEstado.id == 1 or ordenes.ordenesEstado.id == 2) %}*/
/* 											<a class="btn btn-danger" onClick='confirmar("{{ url('ordenredencion_cancelar', {'id': ordenes.id }) }}")'>*/
/* 												<i class="icon-trash icon-white" align='rigth'></i>			*/
/* 													Cancelar										*/
/* 											</a>*/
/* 										{% endif %}*/
/* 									*/
/* 								</div>*/
/* 							</td>*/
/* 						</tr>*/
/* 						{% endif %}*/
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
/* 							{% if ordenes.ordenesEstado.id==1 or is_granted('ROLE_DIR') %}*/
/* 							<a href="{{ path('ordenredencion_editarvalores',  {"id": ordenes.id}) }}">*/
/* 								<button class="btn btn-primary">*/
/* 									<i class="icon-edit icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 							*/
/* 							{% if ordenes.ordenesTipo.id==1  %}*/
/* 							<a href="{{ path('ordenes_producto_cotizaciones',  {"id": ordenes.id}) }}">*/
/* 								<button class="btn btn-info">*/
/* 									<i class="icon-plus icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 							{% endif %}*/
/* 							*/
/* 							<!-- <a href="{{ path('ordenes_agregarproducto',  {"id": ordenes.id}) }}">*/
/* 								<button class="btn btn-info">*/
/* 									<i class="icon-plus icon-white"></i>*/
/* 								</button>*/
/* 							</a> -->*/
/* 						{% endif %}*/
/* 						*/
/* 						*/
/* 					{% endif %}*/
/* 					Productos*/
/* 				</h2>*/
/* 			</div>*/
/* */
/* 			{% if productos | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Referencia</th>*/
/* 						<th>Nombre</th>*/
/* 						<th>Codigo de Barras</th>*/
/* 						<th>Codigo Incentives</th>*/
/* 						<th>Descripcion</th>*/
/* 						<th>Cantidad</th>*/
/* 						<th>Cantidad recibida</th>*/
/* 						<th>Valor unitario</th>*/
/* 						<th>Descuento</th>*/
/* 						<th>Valor total</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% set total=0 %}*/
/* 				<tbody>*/
/* 					{% set subtotal=0 %}*/
/* 	 				{% set totaliva = 0 %}*/
/* 	 				{% set descuento = 0 %}*/
/* 	 				{% set j=0 %}*/
/* 					{% for producto in productos %}	*/
/* 					<tr>*/
/* 						{% set j=j+1 %}*/
/* 						{% set i=0 %}*/
/* 								<td>{{ producto.producto.referencia }}</td>*/
/* 								<td>{{ producto.producto.nombre }}</td>*/
/* 								<td>{{ producto.producto.codEAN }}</td>	*/
/* 								<td>{{ producto.producto.codInc }}</td>	*/
/* 								<td>{{ producto.producto.descripcion  }}</td>	*/
/* 								<td>{{ producto.cantidad }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="{{ i }}" onClick="detalle('{{ j }}')" class="btn btn-success">+</a></td>*/
/* 								<td>{{ producto.cantidadrecibida  }}</td>*/
/* 								<td>$ {{ producto.valorunidad|number_format(2, ',', '.') }}</td>*/
/* 								<td>$ {{ producto.descuento|number_format(2, ',', '.') }}</td>*/
/* 								<td>$ {{ (producto.valortotal - producto.descuento)|number_format(2, ',', '.') }}</td>*/
/* 								{% if producto.producto.estadoIva == true %}*/
/* 										{% set totaliva = totaliva + ((producto.valortotal - producto.descuento)*(producto.producto.iva/100)) %}*/
/* 								{% endif %}	*/
/* 								{% set descuento = descuento + producto.descuento %}*/
/* 								{% set subtotal = subtotal + producto.valortotal - producto.descuento  %}				*/
/* 								{% set i=i+1 %}*/
/* */
/* 					</tr>*/
/* 					*/
/* 					{% if (ordenes.ordenestipo.id == 2) %}*/
/* 					<tr id="detalle_{{ j }}" class="hide">*/
/* 						<td colspan="1"></td>*/
/* 						<td colspan="11">*/
/* 		                    <div>{{ render(controller('IncentivesOrdenesBundle:Ordenes:detalleProductoOrden', { 'productoOrden': producto.id })) }}</div>*/
/* 		                </td>*/
/* 		            </tr>*/
/* 		            {% endif %}*/
/* 		            */
/* 		            {% if (ordenes.ordenestipo.id == 1) %}*/
/* 					<tr id="detalle_{{ j }}" class="hide">*/
/* 						<td colspan="3"></td>*/
/* 						<td colspan="6">*/
/* 		                    <div>{{ render(controller('IncentivesOrdenesBundle:Ordenes:detalleProductoRequisicion', { 'productoOrden': producto.id })) }}</div>*/
/* 		                </td>*/
/* 		            </tr>*/
/* 		            {% endif %}*/
/* */
/* 					{% if ordenes.proveedor.id == 79 %}*/
/* 						<tr>*/
/* 							<td colspan="1"></td>*/
/* 							<td colspan="10">*/
/* 							{% if(tracking[producto.id]|length > 0) %}*/
/* 								<table class="table table-bordered table-striped">*/
/* 									<tr>*/
/* 										<th>O. Amazon</th>*/
/* 										<th>Tracking</th>*/
/* 										<th>Tarjeta</th>*/
/* 										<th>Precio</th>*/
/* 										<th>Cantidad</th>*/
/* 									</tr>*/
/* 									{% for track in tracking[producto.id] %}*/
/* 									<tr>*/
/* 										<td>{{ track.ordenAmazon }}</td>*/
/* 										<td>{{ track.tracking }}</td>*/
/* 										<td>{{ track.tarjeta }}</td>*/
/* 										<td>{{ track.precio }}</td>*/
/* 										<td>{{ track.cantidad }}</td>*/
/* 									</tr>*/
/* 									{% endfor %}*/
/* 								</table>*/
/* 							{% endif %}*/
/* 							{{ render(controller('IncentivesOrdenesBundle:OrdenRedencion:tracking', { "id": producto.id})) }}</td>*/
/* 							</td>*/
/* 						</tr>*/
/* 						*/
/* 					{% endif %}*/
/* */
/* 					{% endfor %}*/
/* 					<tr>*/
/* 						<th colspan='9'>Subtotal</th>*/
/* 						<td>$ {{ subtotal|number_format(2, ',', '.') }}</td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 			 			<th colspan='9'>Domicilio</th>*/
/* 			 			<td>$ {{ ordenes.domicilio|number_format(2, ',', '.') }}</td>*/
/* 			 		</tr>*/
/* 			 		<tr>*/
/* 			 			<th colspan='9'>Servicio Logistico</th>*/
/* 			 			<td>$ {{ ordenes.servicioLogistico|number_format(2, ',', '.') }}</td>*/
/* 			 		</tr>*/
/* 			 		<tr>*/
/* 			 			<th colspan='9'>Comisicon Bancaria</th>*/
/* 			 			<td>$ {{ ordenes.comisionBancaria|number_format(2, ',', '.') }}</td>*/
/* 			 		</tr>*/
/* 			 		*/
/* 			 		<!-- <tr>*/
/* 			 			<th colspan='9'>Descuentos</th>*/
/* 			 			<td>$ {{ descuento|number_format(2, ',', '.') }}</td>*/
/* 			 		</tr> -->*/
/* 			 		*/
/* 					<tr>*/
/* 						*/
/* 						{% if ordenes.aplicaIva==1 %} {% set totaliva = totaliva + (ordenes.domicilio * 0.16) %} {% endif %}*/
/* 	 					{% if ordenes.aplicaIva==1 %} {% set totaliva = totaliva + (ordenes.comisionBancaria * 0.16) %} {% endif %}*/
/* 	 		*/
/* 						<th colspan='9'>IVA</th>*/
/* 						<td>$ {{ totaliva|number_format(2, ',', '.') }}</td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<th colspan='9'>Valor total</th>*/
/* 						{% set total = subtotal + totaliva + ordenes.domicilio + ordenes.servicioLogistico + ordenes.comisionBancaria %}*/
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
/* 	 function detalle(id){*/
/*         $('#detalle_'+id).toggle();*/
/*     }*/
/* */
/* 	</script>*/
/* {% endblock %}*/
/* */
