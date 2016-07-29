<?php

/* IncentivesOrdenesBundle:Ordenes:detalleproductorequisicion.html.twig */
class __TwigTemplate_87ae578e90946f66e575f8cf2a719d03d584c0981cc2b1439595ac832a3385b0 extends Twig_Template
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
        $__internal_3d46514fad4ce0da3eeee34a55a40846ae0d78c27823fef25c86f44ddf5c9837 = $this->env->getExtension("native_profiler");
        $__internal_3d46514fad4ce0da3eeee34a55a40846ae0d78c27823fef25c86f44ddf5c9837->enter($__internal_3d46514fad4ce0da3eeee34a55a40846ae0d78c27823fef25c86f44ddf5c9837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:detalleproductorequisicion.html.twig"));

        // line 1
        echo "<table>
    <tr>
        <th>Id</th>
        <th>Programa</th>
        <th>Centro Costos</th>
        <th>Valor Compra</th>
        <th>Valor Venta</th>
        <th>Rentabilidad</th>
    </tr>
";
        // line 10
        $context["ij"] = 0;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 12
            echo "    <tr>
        ";
            // line 13
            $context["ij"] = ((isset($context["ij"]) ? $context["ij"] : $this->getContext($context, "ij")) + 1);
            // line 14
            echo "        <td>";
            echo twig_escape_filter($this->env, (isset($context["ij"]) ? $context["ij"] : $this->getContext($context, "ij")), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "ordenesCompra", array()), "solicitud", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "ordenesCompra", array()), "solicitud", array()), "programa", array()), "centrocostos", array()), "html", null, true);
            echo "</td>
        ";
            // line 17
            $context["rentabilidad"] = 0;
            // line 18
            echo "        ";
            $context["valorventa"] = 0;
            // line 19
            echo "            ";
            if ((($this->getAttribute($context["producto"], "valorunidad", array()) != 0) && ($this->getAttribute($context["producto"], "incremento", array()) != 0))) {
                // line 20
                echo "                ";
                $context["valorventa"] = ($this->getAttribute($context["producto"], "precioCliente", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100)));
                // line 21
                echo "                ";
                if ((($this->getAttribute($context["producto"], "valorunidad", array()) != 0) && ($this->getAttribute($context["producto"], "incremento", array()) != 0))) {
                    // line 22
                    echo "                    ";
                    $context["rentabilidad"] = ((1 - (($this->getAttribute($context["producto"], "valorunidad", array()) - ($this->getAttribute($context["producto"], "descuento", array()) / $this->getAttribute($context["producto"], "cantidad", array()))) / (isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")))) * 100);
                    // line 23
                    echo "                ";
                }
                // line 24
                echo "            ";
            }
            // line 25
            echo "        <td>\$";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "valorunidad", array()), 2, ",", "."), "html", null, true);
            echo "</td>
        <td>\$";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")), 2, ",", "."), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidad"]) ? $context["rentabilidad"] : $this->getContext($context, "rentabilidad")), 2, ",", "."), "html", null, true);
            echo "%</td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</table>

";
        
        $__internal_3d46514fad4ce0da3eeee34a55a40846ae0d78c27823fef25c86f44ddf5c9837->leave($__internal_3d46514fad4ce0da3eeee34a55a40846ae0d78c27823fef25c86f44ddf5c9837_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:detalleproductorequisicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  89 => 27,  85 => 26,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  57 => 17,  53 => 16,  49 => 15,  44 => 14,  42 => 13,  39 => 12,  35 => 11,  33 => 10,  22 => 1,);
    }
}
/* <table>*/
/*     <tr>*/
/*         <th>Id</th>*/
/*         <th>Programa</th>*/
/*         <th>Centro Costos</th>*/
/*         <th>Valor Compra</th>*/
/*         <th>Valor Venta</th>*/
/*         <th>Rentabilidad</th>*/
/*     </tr>*/
/* {% set ij = 0 %}*/
/* {% for producto in productos %}*/
/*     <tr>*/
/*         {% set ij = ij + 1 %}*/
/*         <td>{{ ij }}</td>*/
/*         <td>{{ producto.ordenesCompra.solicitud.programa.nombre }}</td>*/
/*         <td>{{ producto.ordenesCompra.solicitud.programa.centrocostos }}</td>*/
/*         {% set rentabilidad = 0 %}*/
/*         {% set valorventa = 0 %}*/
/*             {% if (producto.valorunidad!=0 and producto.incremento!=0) %}*/
/*                 {% set valorventa = producto.precioCliente/(1-(producto.incremento/100)) %}*/
/*                 {% if (producto.valorunidad!=0 and producto.incremento!=0) %}*/
/*                     {% set rentabilidad = (1-((producto.valorunidad - (producto.descuento/producto.cantidad))/valorventa ))*100 %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         <td>${{ producto.valorunidad |number_format(2, ',', '.') }}</td>*/
/*         <td>${{ valorventa |number_format(2, ',', '.') }}</td>*/
/*         <td>{{ rentabilidad |number_format(2, ',', '.') }}%</td>*/
/*     </tr>*/
/* */
/* {% endfor %}*/
/* </table>*/
/* */
/* */
