<?php

/* IncentivesOrdenesBundle:OrdenRedencion:detallesegmentado.html.twig */
class __TwigTemplate_3cd4bbc5214bbef8a1a47efbc489eb86d1f0c0fa764ac0443be96054d7f4b48a extends Twig_Template
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
        $__internal_2f8df50bfce13173232129d27fdcd68c333b85fccfb061156694ecf6b5e94b1d = $this->env->getExtension("native_profiler");
        $__internal_2f8df50bfce13173232129d27fdcd68c333b85fccfb061156694ecf6b5e94b1d->enter($__internal_2f8df50bfce13173232129d27fdcd68c333b85fccfb061156694ecf6b5e94b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:OrdenRedencion:detallesegmentado.html.twig"));

        // line 1
        echo "<table>
    <tr>
        <th></th>
        <th>Redencion</th>
        <th>Programa</th>
        <th>Participante</th>
        <th>Documento</th>
        <th>Fecha</th>
        <th>Producto</th>
        <th>Sku</th>
        <th>Precio</th>
        <th>Proveedor</th>
        <th>Precio</th>
        <th>Proveedor</th>
    </tr>
";
        // line 16
        $context["i"] = 0;
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
            // line 18
            echo "        ";
            $context["ocultar"] = 0;
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "productoprecio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["precio"]) {
                // line 20
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["precio"], "proveedor", array()), "id", array()) == 327)) {
                    // line 21
                    echo "                ";
                    $context["ocultar"] = 1;
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['precio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
    ";
            // line 24
            if (((isset($context["ocultar"]) ? $context["ocultar"] : $this->getContext($context, "ocultar")) == 0)) {
                echo " 
    ";
                // line 25
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 26
                echo "    <tr>
        <td>";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
        <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "codigoredencion", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "nombre", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "documento", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redencion"], "fecha", array()), "Y-m-d"), "html", null, true);
                echo "</td>
        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "codInc", array()), "html", null, true);
                echo "</td>
        ";
                // line 35
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "productoprecio", array()))) {
                    // line 36
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "productoprecio", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["precio"]) {
                        // line 37
                        echo "                <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["precio"], "precio", array()), "html", null, true);
                        echo "</td>
                <td>";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["precio"], "proveedor", array()), "nombre", array()), "html", null, true);
                        echo "</td>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['precio'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "        ";
                } else {
                    // line 41
                    echo "            <td></td>
            <td></td>
        ";
                }
                // line 44
                echo "        
    </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</table>";
        
        $__internal_2f8df50bfce13173232129d27fdcd68c333b85fccfb061156694ecf6b5e94b1d->leave($__internal_2f8df50bfce13173232129d27fdcd68c333b85fccfb061156694ecf6b5e94b1d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:OrdenRedencion:detallesegmentado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  139 => 44,  134 => 41,  131 => 40,  123 => 38,  118 => 37,  113 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  76 => 26,  74 => 25,  70 => 24,  62 => 23,  59 => 22,  56 => 21,  53 => 20,  48 => 19,  45 => 18,  41 => 17,  39 => 16,  22 => 1,);
    }
}
/* <table>*/
/*     <tr>*/
/*         <th></th>*/
/*         <th>Redencion</th>*/
/*         <th>Programa</th>*/
/*         <th>Participante</th>*/
/*         <th>Documento</th>*/
/*         <th>Fecha</th>*/
/*         <th>Producto</th>*/
/*         <th>Sku</th>*/
/*         <th>Precio</th>*/
/*         <th>Proveedor</th>*/
/*         <th>Precio</th>*/
/*         <th>Proveedor</th>*/
/*     </tr>*/
/* {% set i = 0%}*/
/* {% for redencion in redenciones %}*/
/*         {% set ocultar = 0 %}*/
/*         {% for precio in redencion.productocatalogo.producto.productoprecio %}*/
/*             {% if(precio.proveedor.id==327) %}*/
/*                 {% set ocultar = 1 %}*/
/*             {% endif %}*/
/*         {% endfor %}   */
/*     {% if(ocultar == 0) %} */
/*     {% set i=i+1 %}*/
/*     <tr>*/
/*         <td>{{i}}</td>*/
/*         <td>{{ redencion.codigoredencion }}</td>*/
/*         <td>{{ redencion.participante.programa.nombre }}</td>*/
/*         <td>{{ redencion.participante.nombre }}</td>*/
/*         <td>{{ redencion.participante.documento }}</td>*/
/*         <td>{{ redencion.fecha | date("Y-m-d") }}</td>*/
/*         <td>{{ redencion.productocatalogo.producto.nombre }}</td>*/
/*         <td>{{ redencion.productocatalogo.producto.codInc }}</td>*/
/*         {% if redencion.productocatalogo.producto.productoprecio is not null  %}*/
/*         {% for precio in redencion.productocatalogo.producto.productoprecio %}*/
/*                 <td>{{ precio.precio }}</td>*/
/*                 <td>{{ precio.proveedor.nombre }}</td>*/
/*         {% endfor %}*/
/*         {% else %}*/
/*             <td></td>*/
/*             <td></td>*/
/*         {% endif %}*/
/*         */
/*     </tr>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* </table>*/
