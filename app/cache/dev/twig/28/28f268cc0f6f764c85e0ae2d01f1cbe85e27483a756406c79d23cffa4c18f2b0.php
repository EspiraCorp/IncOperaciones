<?php

/* IncentivesOrdenesBundle:Ordenes:detalleingreso.html.twig */
class __TwigTemplate_144ff43dfdd7fc342b7b40f072e2b22ea073658c8f170fe7a09aedff378fa4dd extends Twig_Template
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
        $__internal_9fc6ed783ef334e512bddca88e98bf94c2c09aaa61485d61b25d1d9ec656b6bf = $this->env->getExtension("native_profiler");
        $__internal_9fc6ed783ef334e512bddca88e98bf94c2c09aaa61485d61b25d1d9ec656b6bf->enter($__internal_9fc6ed783ef334e512bddca88e98bf94c2c09aaa61485d61b25d1d9ec656b6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:detalleingreso.html.twig"));

        // line 1
        echo "<table>
    <tr>
        <th>Redencion</th>
        <th>Programa</th>
        <th>Participante</th>
        <th>Documento</th>
        <th>Fecha</th>
        <th>Valor Venta</th>
        <th>Rentabilidad</th>
        <th></th>
    </tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
            // line 13
            echo "    <tr>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "codigoredencion", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "documento", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redencion"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
        ";
            // line 19
            $context["rentabilidad"] = 0;
            // line 20
            echo "        ";
            $context["valorventa"] = 0;
            // line 21
            echo "        ";
            if ((($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "precio", array()) != 0) && ($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "incremento", array()) != 0))) {
                // line 22
                echo "            ";
                $context["valorventa"] = ($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "precio", array()) / (1 - ($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "incremento", array()) / 100)));
                // line 23
                echo "            ";
                $context["rentabilidad"] = ((1 - (($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "valorunidad", array()) - ($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "descuento", array()) / $this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "cantidad", array()))) / (isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")))) * 100);
                // line 24
                echo "        ";
            }
            // line 25
            echo "        <td>\$";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")), 2, ",", "."), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidad"]) ? $context["rentabilidad"] : $this->getContext($context, "rentabilidad")), 2, ",", "."), "html", null, true);
            echo "%</td>
        <td>
            ";
            // line 28
            if (($this->getAttribute($this->getAttribute($context["redencion"], "redencionestado", array()), "id", array()) == 3)) {
                // line 29
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("ordenes_ingreso_redencion");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-info\">Ingresar</a>
            ";
            } else {
                // line 31
                echo "                Ingresado
            ";
            }
            // line 33
            echo "        </td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table>
";
        
        $__internal_9fc6ed783ef334e512bddca88e98bf94c2c09aaa61485d61b25d1d9ec656b6bf->leave($__internal_9fc6ed783ef334e512bddca88e98bf94c2c09aaa61485d61b25d1d9ec656b6bf_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:detalleingreso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  103 => 33,  99 => 31,  91 => 29,  89 => 28,  84 => 26,  79 => 25,  76 => 24,  73 => 23,  70 => 22,  67 => 21,  64 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  39 => 13,  35 => 12,  22 => 1,);
    }
}
/* <table>*/
/*     <tr>*/
/*         <th>Redencion</th>*/
/*         <th>Programa</th>*/
/*         <th>Participante</th>*/
/*         <th>Documento</th>*/
/*         <th>Fecha</th>*/
/*         <th>Valor Venta</th>*/
/*         <th>Rentabilidad</th>*/
/*         <th></th>*/
/*     </tr>*/
/* {% for redencion in redenciones %}*/
/*     <tr>*/
/*         <td>{{ redencion.codigoredencion }}</td>*/
/*         <td>{{ redencion.participante.programa.nombre }}</td>*/
/*         <td>{{ redencion.participante.nombre }}</td>*/
/*         <td>{{ redencion.participante.documento }}</td>*/
/*         <td>{{ redencion.fecha | date("Y-m-d") }}</td>*/
/*         {% set rentabilidad = 0 %}*/
/*         {% set valorventa = 0 %}*/
/*         {% if (redencion.productocatalogo.precio!=0 and redencion.productocatalogo.incremento!=0) %}*/
/*             {% set valorventa = redencion.productocatalogo.precio/(1-(redencion.productocatalogo.incremento/100)) %}*/
/*             {% set rentabilidad = (1-((redencion.ordenesProducto.valorunidad - (redencion.ordenesProducto.descuento/redencion.ordenesProducto.cantidad))/valorventa ))*100 %}*/
/*         {% endif %}*/
/*         <td>${{ valorventa |number_format(2, ',', '.') }}</td>*/
/*         <td>{{ rentabilidad |number_format(2, ',', '.') }}%</td>*/
/*         <td>*/
/*             {% if redencion.redencionestado.id == 3 %}*/
/*                 <a href="{{ path("ordenes_ingreso_redencion") }}/{{ redencion.id }}" class="btn btn-info">Ingresar</a>*/
/*             {% else %}*/
/*                 Ingresado*/
/*             {% endif %}*/
/*         </td>*/
/*     </tr>*/
/* */
/* {% endfor %}*/
/* </table>*/
/* */
