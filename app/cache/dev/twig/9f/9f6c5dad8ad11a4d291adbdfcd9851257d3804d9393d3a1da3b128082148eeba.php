<?php

/* IncentivesOrdenesBundle:Ordenes:detalleproductoorden.html.twig */
class __TwigTemplate_0201fd2bc564b3d9b505c5e261fe1c082ce857825ddd2876eff7a2418a7dea42 extends Twig_Template
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
        $__internal_1ed694bbdf0c4da727d7ab3cf6e8926f0ade9f2385ec36f80d4e62a2d73de396 = $this->env->getExtension("native_profiler");
        $__internal_1ed694bbdf0c4da727d7ab3cf6e8926f0ade9f2385ec36f80d4e62a2d73de396->enter($__internal_1ed694bbdf0c4da727d7ab3cf6e8926f0ade9f2385ec36f80d4e62a2d73de396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:detalleproductoorden.html.twig"));

        // line 1
        echo "<table>
    <tr>
        <th>Id</th>
        <th>Redencion</th>
        <th>Programa</th>
        <th>Participante</th>
        <th>Documento</th>
        <th>Fecha</th>
        <th>Valor Compra</th>
        <th>Valor Venta</th>
        <th>Rentabilidad</th>
    </tr>
";
        // line 13
        $context["ij"] = 0;
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
            // line 15
            echo "    <tr>
        ";
            // line 16
            $context["ij"] = ((isset($context["ij"]) ? $context["ij"] : $this->getContext($context, "ij")) + 1);
            // line 17
            echo "        <td>";
            echo twig_escape_filter($this->env, (isset($context["ij"]) ? $context["ij"] : $this->getContext($context, "ij")), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "codigoredencion", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "documento", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redencion"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
        ";
            // line 23
            $context["rentabilidad"] = 0;
            // line 24
            echo "        ";
            $context["valorventa"] = 0;
            // line 25
            echo "        ";
            $context["valorcompra"] = $this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "precio", array());
            // line 26
            echo "        ";
            if ((($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "precio", array()) != 0) && ($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "incremento", array()) != 0))) {
                // line 27
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "ordenesCompra", array()), "trm", array()) != 0)) {
                    // line 28
                    echo "                ";
                    $context["valorcompra"] = ($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "valorunidad", array()) / $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "ordenesCompra", array()), "trm", array()));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "            ";
                $context["valorventa"] = ((isset($context["valorcompra"]) ? $context["valorcompra"] : $this->getContext($context, "valorcompra")) / (1 - ($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "incremento", array()) / 100)));
                // line 31
                echo "            ";
                $context["rentabilidad"] = ((1 - (($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "valorunidad", array()) - ($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "descuento", array()) / $this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "cantidad", array()))) / (isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")))) * 100);
                // line 32
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "ordenesCompra", array()), "trm", array()) != 0)) {
                    // line 33
                    echo "                 ";
                    $context["rentabilidad"] = ((1 - ((($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "valorunidad", array()) - ($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "descuento", array()) / $this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "cantidad", array()))) / $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "ordenesCompra", array()), "trm", array())) / (isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")))) * 100);
                    // line 34
                    echo "            ";
                }
                // line 35
                echo "        ";
            }
            // line 36
            echo "        <td>\$";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorcompra"]) ? $context["valorcompra"] : $this->getContext($context, "valorcompra")), 2, ",", "."), "html", null, true);
            echo "</td>
        <td>\$";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")), 2, ",", "."), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidad"]) ? $context["rentabilidad"] : $this->getContext($context, "rentabilidad")), 2, ",", "."), "html", null, true);
            echo "%</td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</table>
";
        
        $__internal_1ed694bbdf0c4da727d7ab3cf6e8926f0ade9f2385ec36f80d4e62a2d73de396->leave($__internal_1ed694bbdf0c4da727d7ab3cf6e8926f0ade9f2385ec36f80d4e62a2d73de396_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:detalleproductoorden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  119 => 38,  115 => 37,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  80 => 26,  77 => 25,  74 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  47 => 17,  45 => 16,  42 => 15,  38 => 14,  36 => 13,  22 => 1,);
    }
}
/* <table>*/
/*     <tr>*/
/*         <th>Id</th>*/
/*         <th>Redencion</th>*/
/*         <th>Programa</th>*/
/*         <th>Participante</th>*/
/*         <th>Documento</th>*/
/*         <th>Fecha</th>*/
/*         <th>Valor Compra</th>*/
/*         <th>Valor Venta</th>*/
/*         <th>Rentabilidad</th>*/
/*     </tr>*/
/* {% set ij = 0 %}*/
/* {% for redencion in redenciones %}*/
/*     <tr>*/
/*         {% set ij = ij + 1 %}*/
/*         <td>{{ ij }}</td>*/
/*         <td>{{ redencion.codigoredencion }}</td>*/
/*         <td>{{ redencion.participante.programa.nombre }}</td>*/
/*         <td>{{ redencion.participante.nombre }}</td>*/
/*         <td>{{ redencion.participante.documento }}</td>*/
/*         <td>{{ redencion.fecha | date("Y-m-d") }}</td>*/
/*         {% set rentabilidad = 0 %}*/
/*         {% set valorventa = 0 %}*/
/*         {% set valorcompra = redencion.productocatalogo.precio %}*/
/*         {% if (redencion.productocatalogo.precio!=0 and redencion.productocatalogo.incremento!=0) %}*/
/*             {% if (redencion.ordenesProducto.ordenesCompra.trm!=0) %}*/
/*                 {% set valorcompra = (redencion.ordenesProducto.valorunidad/redencion.ordenesProducto.ordenesCompra.trm) %}*/
/*             {% endif %}*/
/*             {% set valorventa = valorcompra/(1-(redencion.productocatalogo.incremento/100)) %}*/
/*             {% set rentabilidad = (1-((redencion.ordenesProducto.valorunidad - (redencion.ordenesProducto.descuento/redencion.ordenesProducto.cantidad))/valorventa ))*100 %}*/
/*             {% if (redencion.ordenesProducto.ordenesCompra.trm!=0) %}*/
/*                  {% set rentabilidad = (1-(((redencion.ordenesProducto.valorunidad - (redencion.ordenesProducto.descuento/redencion.ordenesProducto.cantidad))/redencion.ordenesProducto.ordenesCompra.trm)/valorventa ))*100 %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <td>${{ valorcompra |number_format(2, ',', '.') }}</td>*/
/*         <td>${{ valorventa |number_format(2, ',', '.') }}</td>*/
/*         <td>{{ rentabilidad |number_format(2, ',', '.') }}%</td>*/
/*     </tr>*/
/* */
/* {% endfor %}*/
/* </table>*/
/* */
