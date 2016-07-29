<?php

/* IncentivesOrdenesBundle:Ordenes:editarproductoorden.html.twig */
class __TwigTemplate_ff2d9c7ded9a0d5e3026bf712fd1360b0234103b702d44498af13a4ab2613b97 extends Twig_Template
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
        $__internal_ba34e2bb0ef0b2e9bc1bac04d45e7153ac6b2390b3f7453f202aaecad68cda95 = $this->env->getExtension("native_profiler");
        $__internal_ba34e2bb0ef0b2e9bc1bac04d45e7153ac6b2390b3f7453f202aaecad68cda95->enter($__internal_ba34e2bb0ef0b2e9bc1bac04d45e7153ac6b2390b3f7453f202aaecad68cda95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:editarproductoorden.html.twig"));

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
                $context["rentabilidad"] = ((1 - ($this->getAttribute($this->getAttribute($context["redencion"], "ordenesProducto", array()), "valorunidad", array()) / (isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")))) * 100);
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
        <td><a class=\"btn\" id=\"redencion_";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "id", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenredencion_eliminarred", array("id" => $this->getAttribute($context["redencion"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a></td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</table>";
        
        $__internal_ba34e2bb0ef0b2e9bc1bac04d45e7153ac6b2390b3f7453f202aaecad68cda95->leave($__internal_ba34e2bb0ef0b2e9bc1bac04d45e7153ac6b2390b3f7453f202aaecad68cda95_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:editarproductoorden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  88 => 27,  84 => 26,  79 => 25,  76 => 24,  73 => 23,  70 => 22,  67 => 21,  64 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  39 => 13,  35 => 12,  22 => 1,);
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
/*             {% set rentabilidad = (1-(redencion.ordenesProducto.valorunidad/valorventa))*100 %}*/
/*         {% endif %}*/
/*         <td>${{ valorventa |number_format(2, ',', '.') }}</td>*/
/*         <td>{{ rentabilidad |number_format(2, ',', '.') }}%</td>*/
/*         <td><a class="btn" id="redencion_{{ redencion.id }}" href="{{ path("ordenredencion_eliminarred", {"id": redencion.id}) }}">Eliminar</a></td>*/
/*     </tr>*/
/* */
/* {% endfor %}*/
/* </table>*/
