<?php

/* IncentivesFacturacionBundle:Facturas:detallefacturasolicitudes.html.twig */
class __TwigTemplate_3f2433a92f4521b9b53a69847e79938034201bd9a38ac340dbf7e982ae8f2dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3fa8a1f326e3d13d1a46386bebb6296f57c31eaea638e121cb8fedb0209ea27 = $this->env->getExtension("native_profiler");
        $__internal_d3fa8a1f326e3d13d1a46386bebb6296f57c31eaea638e121cb8fedb0209ea27->enter($__internal_d3fa8a1f326e3d13d1a46386bebb6296f57c31eaea638e121cb8fedb0209ea27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:detallefacturasolicitudes.html.twig"));

        // line 1
        echo "<div><h2>Cotizaciones</h2></div>
<table>
    <tr>
        <th>Id</th>
        <th>Solicitud</th>
        <th>Programa</th>
        <th>Centro Costos</th>
        <th>Cotización</th>
        <th>Fecha Aprobacion</th>
        <th>Sku</th>
        <th>Producto</th>
        <th>Marca</th>
        <th>Referencia</th>
        <th>Cantidad</th>
        <th>Valor Venta</th>
        <th>Valor Total</th>
    </tr>
";
        // line 18
        $context["ij"] = 0;
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cotizaciones"]) ? $context["cotizaciones"] : $this->getContext($context, "cotizaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 20
            echo "    <tr>
        ";
            // line 21
            $context["ij"] = ((isset($context["ij"]) ? $context["ij"] : $this->getContext($context, "ij")) + 1);
            // line 22
            echo "        
        ";
            // line 23
            $context["valorVenta"] = (($this->getAttribute($context["producto"], "valorunidad", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100))) + $this->getAttribute($context["producto"], "logistica", array()));
            // line 24
            echo "        ";
            $context["valorTotal"] = ((isset($context["valorVenta"]) ? $context["valorVenta"] : $this->getContext($context, "valorVenta")) * $this->getAttribute($context["producto"], "cantidad", array()));
            // line 25
            echo "        <td>";
            echo twig_escape_filter($this->env, (isset($context["ij"]) ? $context["ij"] : $this->getContext($context, "ij")), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "cotizacion", array()), "solicitud", array()), "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "cotizacion", array()), "solicitud", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "cotizacion", array()), "solicitud", array()), "programa", array()), "centrocostos", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "cotizacion", array()), "consecutivo", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "fechaModificacion", array())), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "marca", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
        <td>\$";
            // line 36
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorVenta"]) ? $context["valorVenta"] : $this->getContext($context, "valorVenta")), 2, ",", "."), "html", null, true);
            echo "</td>
        <td>\$";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorTotal"]) ? $context["valorTotal"] : $this->getContext($context, "valorTotal")), 2, ",", "."), "html", null, true);
            echo "</td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</table>

<div><h2>Requisiciones</h2></div>
<table>
    <tr>
        <th>Id</th>
        <th>Requisicion</th>
        <th>Programa</th>
        <th>Centro Costos</th>
        <th>Cotización</th>
        <th>Fecha Aprobacion</th>
        <th>Sku</th>
        <th>Producto</th>
        <th>Marca</th>
        <th>Referencia</th>
        <th>Cantidad</th>
        <th>Valor Venta</th>
        <th>Valor Total</th>
    </tr>
";
        // line 60
        $context["ij"] = 0;
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requisiciones"]) ? $context["requisiciones"] : $this->getContext($context, "requisiciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 62
            echo "    <tr>
        ";
            // line 63
            $context["ij"] = ((isset($context["ij"]) ? $context["ij"] : $this->getContext($context, "ij")) + 1);
            // line 64
            echo "        
        ";
            // line 65
            $context["valorVenta"] = (($this->getAttribute($context["producto"], "valorunidad", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100))) + $this->getAttribute($context["producto"], "logistica", array()));
            // line 66
            echo "        ";
            $context["valorTotal"] = ((isset($context["valorVenta"]) ? $context["valorVenta"] : $this->getContext($context, "valorVenta")) * $this->getAttribute($context["producto"], "cantidad", array()));
            // line 67
            echo "        <td>";
            echo twig_escape_filter($this->env, (isset($context["ij"]) ? $context["ij"] : $this->getContext($context, "ij")), "html", null, true);
            echo "</td>
        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "requisicion", array()), "solicitud", array()), "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "requisicion", array()), "solicitud", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "requisicion", array()), "solicitud", array()), "programa", array()), "centrocostos", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "requisicion", array()), "consecutivo", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "fechaModificacion", array())), "html", null, true);
            echo "</td>
        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "marca", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
        <td>\$";
            // line 78
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorVenta"]) ? $context["valorVenta"] : $this->getContext($context, "valorVenta")), 2, ",", "."), "html", null, true);
            echo "</td>
        <td>\$";
            // line 79
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorTotal"]) ? $context["valorTotal"] : $this->getContext($context, "valorTotal")), 2, ",", "."), "html", null, true);
            echo "</td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "</table>

<div><h2>Logistica</h2></div>
";
        
        $__internal_d3fa8a1f326e3d13d1a46386bebb6296f57c31eaea638e121cb8fedb0209ea27->leave($__internal_d3fa8a1f326e3d13d1a46386bebb6296f57c31eaea638e121cb8fedb0209ea27_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:detallefacturasolicitudes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 83,  208 => 79,  204 => 78,  200 => 77,  196 => 76,  192 => 75,  188 => 74,  184 => 73,  180 => 72,  176 => 71,  172 => 70,  168 => 69,  164 => 68,  159 => 67,  156 => 66,  154 => 65,  151 => 64,  149 => 63,  146 => 62,  142 => 61,  140 => 60,  119 => 41,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  65 => 26,  60 => 25,  57 => 24,  55 => 23,  52 => 22,  50 => 21,  47 => 20,  43 => 19,  41 => 18,  22 => 1,);
    }
}
/* <div><h2>Cotizaciones</h2></div>*/
/* <table>*/
/*     <tr>*/
/*         <th>Id</th>*/
/*         <th>Solicitud</th>*/
/*         <th>Programa</th>*/
/*         <th>Centro Costos</th>*/
/*         <th>Cotización</th>*/
/*         <th>Fecha Aprobacion</th>*/
/*         <th>Sku</th>*/
/*         <th>Producto</th>*/
/*         <th>Marca</th>*/
/*         <th>Referencia</th>*/
/*         <th>Cantidad</th>*/
/*         <th>Valor Venta</th>*/
/*         <th>Valor Total</th>*/
/*     </tr>*/
/* {% set ij = 0 %}*/
/* {% for producto in cotizaciones %}*/
/*     <tr>*/
/*         {% set ij = ij + 1 %}*/
/*         */
/*         {% set valorVenta = producto.valorunidad/(1-(producto.incremento/100)) + producto.logistica %}*/
/*         {% set valorTotal = valorVenta * producto.cantidad %}*/
/*         <td>{{ ij }}</td>*/
/*         <td>{{ producto.cotizacion.solicitud.id }}</td>*/
/*         <td>{{ producto.cotizacion.solicitud.programa.nombre }}</td>*/
/*         <td>{{ producto.cotizacion.solicitud.programa.centrocostos }}</td>*/
/*         <td>{{ producto.cotizacion.consecutivo }}</td>*/
/*         <td>{{ producto.producto.fechaModificacion | date }}</td>*/
/*         <td>{{ producto.producto.codInc }}</td>*/
/*         <td>{{ producto.producto.nombre }}</td>*/
/*         <td>{{ producto.producto.marca }}</td>*/
/*         <td>{{ producto.producto.referencia }}</td>*/
/*         <td>{{ producto.cantidad }}</td>*/
/*         <td>${{ valorVenta |number_format(2, ',', '.') }}</td>*/
/*         <td>${{ valorTotal |number_format(2, ',', '.') }}</td>*/
/*     </tr>*/
/* */
/* {% endfor %}*/
/* </table>*/
/* */
/* <div><h2>Requisiciones</h2></div>*/
/* <table>*/
/*     <tr>*/
/*         <th>Id</th>*/
/*         <th>Requisicion</th>*/
/*         <th>Programa</th>*/
/*         <th>Centro Costos</th>*/
/*         <th>Cotización</th>*/
/*         <th>Fecha Aprobacion</th>*/
/*         <th>Sku</th>*/
/*         <th>Producto</th>*/
/*         <th>Marca</th>*/
/*         <th>Referencia</th>*/
/*         <th>Cantidad</th>*/
/*         <th>Valor Venta</th>*/
/*         <th>Valor Total</th>*/
/*     </tr>*/
/* {% set ij = 0 %}*/
/* {% for producto in requisiciones %}*/
/*     <tr>*/
/*         {% set ij = ij + 1 %}*/
/*         */
/*         {% set valorVenta = producto.valorunidad/(1-(producto.incremento/100)) + producto.logistica %}*/
/*         {% set valorTotal = valorVenta * producto.cantidad %}*/
/*         <td>{{ ij }}</td>*/
/*         <td>{{ producto.requisicion.solicitud.id }}</td>*/
/*         <td>{{ producto.requisicion.solicitud.programa.nombre }}</td>*/
/*         <td>{{ producto.requisicion.solicitud.programa.centrocostos }}</td>*/
/*         <td>{{ producto.requisicion.consecutivo }}</td>*/
/*         <td>{{ producto.producto.fechaModificacion | date }}</td>*/
/*         <td>{{ producto.producto.codInc }}</td>*/
/*         <td>{{ producto.producto.nombre }}</td>*/
/*         <td>{{ producto.producto.marca }}</td>*/
/*         <td>{{ producto.producto.referencia }}</td>*/
/*         <td>{{ producto.cantidad }}</td>*/
/*         <td>${{ valorVenta |number_format(2, ',', '.') }}</td>*/
/*         <td>${{ valorTotal |number_format(2, ',', '.') }}</td>*/
/*     </tr>*/
/* */
/* {% endfor %}*/
/* </table>*/
/* */
/* <div><h2>Logistica</h2></div>*/
/* */
