<?php

/* IncentivesFacturacionBundle:Rentabilidad:rentabilidadpremios.html.twig */
class __TwigTemplate_a196c91f304cd33b8179fc1925a73b991ef4194463115e838ba70354c73ccdef extends Twig_Template
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
        $__internal_84e02068a9c66d02262567f361047f26190b2c0be5307c1542236d74286f26ad = $this->env->getExtension("native_profiler");
        $__internal_84e02068a9c66d02262567f361047f26190b2c0be5307c1542236d74286f26ad->enter($__internal_84e02068a9c66d02262567f361047f26190b2c0be5307c1542236d74286f26ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Rentabilidad:rentabilidadpremios.html.twig"));

        // line 1
        echo "<table>
    <tr>
        <th>Redencion</th>
        <th>Participante</th>
        <th>Documento</th>
        <th>Fecha</th>
        <th>Producto</th>
        <th>Sku</th>
        <th>Precio Compra</th>
        <th>Incremento</th>
        <th>Precio Venta</th>
        <th>Rentabilidad</th> 
        <th>Logistica Compra</th>
        <th>Logistica Venta</th>
        <th>Rentabilidad</th> 
        <th>Días Entrega</th> 
    </tr>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
            // line 19
            echo "    <tr>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "codigoredencion", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "documento", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redencion"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "codInc", array()), "html", null, true);
            echo "</td>
        <td>\$ ";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["redencion"], "valorOrden", array()), 0, ",", "."), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["redencion"], "incremento", array()), 0, ",", "."), "html", null, true);
            echo " %</td>
        ";
            // line 28
            $context["valorVenta"] = ($this->getAttribute($context["redencion"], "valorCompra", array()) / (1 - ($this->getAttribute($context["redencion"], "incremento", array()) / 100)));
            // line 29
            echo "        <td>\$ ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorVenta"]) ? $context["valorVenta"] : $this->getContext($context, "valorVenta")), 0, ",", "."), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((1 - ($this->getAttribute($context["redencion"], "valorOrden", array()) / (isset($context["valorVenta"]) ? $context["valorVenta"] : $this->getContext($context, "valorVenta")))) * 100), 2, ",", "."), "html", null, true);
            echo " %</td>
        <td>\$ ";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["redencion"], "valorLogistica", array()), 0, ",", "."), "html", null, true);
            echo "</td>
        <td>\$ ";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["redencion"], "logistica", array()), 0, ",", "."), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((1 - ($this->getAttribute($context["redencion"], "valorLogistica", array()) / $this->getAttribute($context["redencion"], "logistica", array()))) * 100), 2, ",", "."), "html", null, true);
            echo " %</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "diasEntrega", array()), "html", null, true);
            echo "</td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
</table>";
        
        $__internal_84e02068a9c66d02262567f361047f26190b2c0be5307c1542236d74286f26ad->leave($__internal_84e02068a9c66d02262567f361047f26190b2c0be5307c1542236d74286f26ad_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Rentabilidad:rentabilidadpremios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  82 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  52 => 21,  48 => 20,  45 => 19,  41 => 18,  22 => 1,);
    }
}
/* <table>*/
/*     <tr>*/
/*         <th>Redencion</th>*/
/*         <th>Participante</th>*/
/*         <th>Documento</th>*/
/*         <th>Fecha</th>*/
/*         <th>Producto</th>*/
/*         <th>Sku</th>*/
/*         <th>Precio Compra</th>*/
/*         <th>Incremento</th>*/
/*         <th>Precio Venta</th>*/
/*         <th>Rentabilidad</th> */
/*         <th>Logistica Compra</th>*/
/*         <th>Logistica Venta</th>*/
/*         <th>Rentabilidad</th> */
/*         <th>Días Entrega</th> */
/*     </tr>*/
/*     {% for redencion in redenciones %}*/
/*     <tr>*/
/*         <td>{{ redencion.codigoredencion }}</td>*/
/*         <td>{{ redencion.participante.nombre }}</td>*/
/*         <td>{{ redencion.participante.documento }}</td>*/
/*         <td>{{ redencion.fecha | date("Y-m-d") }}</td>*/
/*         <td>{{ redencion.productocatalogo.producto.nombre }}</td>*/
/*         <td>{{ redencion.productocatalogo.producto.codInc }}</td>*/
/*         <td>$ {{ redencion.valorOrden | number_format(0, ',', '.') }}</td>*/
/*         <td>{{ redencion.incremento | number_format(0, ',', '.') }} %</td>*/
/*         {% set valorVenta = redencion.valorCompra/(1-(redencion.incremento/100)) %}*/
/*         <td>$ {{ valorVenta | number_format(0, ',', '.') }}</td>*/
/*         <td>{{ ((1-(redencion.valorOrden/valorVenta))*100) | number_format(2, ',', '.') }} %</td>*/
/*         <td>$ {{ redencion.valorLogistica | number_format(0, ',', '.') }}</td>*/
/*         <td>$ {{ redencion.logistica | number_format(0, ',', '.') }}</td>*/
/*         <td>{{ ((1-(redencion.valorLogistica/redencion.logistica))*100) | number_format(2, ',', '.') }} %</td>*/
/*         <td>{{ redencion.diasEntrega }}</td>*/
/*     </tr>*/
/* */
/* {% endfor %}*/
/* */
/* </table>*/
