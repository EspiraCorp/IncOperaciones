<?php

/* IncentivesFacturacionBundle:Rentabilidad:rentabilidadgeneral.html.twig */
class __TwigTemplate_b1393bcd85c06e11a6b01b0abafc120d0583a11c77248cdd171eabc1b71895bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Rentabilidad:rentabilidadgeneral.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_425371d5cac35b699012cc4fd8f204c7c693ba3cde4c0c2769a90f1ba3fc0335 = $this->env->getExtension("native_profiler");
        $__internal_425371d5cac35b699012cc4fd8f204c7c693ba3cde4c0c2769a90f1ba3fc0335->enter($__internal_425371d5cac35b699012cc4fd8f204c7c693ba3cde4c0c2769a90f1ba3fc0335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Rentabilidad:rentabilidadgeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425371d5cac35b699012cc4fd8f204c7c693ba3cde4c0c2769a90f1ba3fc0335->leave($__internal_425371d5cac35b699012cc4fd8f204c7c693ba3cde4c0c2769a90f1ba3fc0335_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_041cc92149e476848890215e6ddfaf3de2d721a060282b2265ed8ce219612189 = $this->env->getExtension("native_profiler");
        $__internal_041cc92149e476848890215e6ddfaf3de2d721a060282b2265ed8ce219612189->enter($__internal_041cc92149e476848890215e6ddfaf3de2d721a060282b2265ed8ce219612189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rentabilidad General";
        
        $__internal_041cc92149e476848890215e6ddfaf3de2d721a060282b2265ed8ce219612189->leave($__internal_041cc92149e476848890215e6ddfaf3de2d721a060282b2265ed8ce219612189_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d165b02159a1c11fa721c2471f6ff0824da1f627b536eb10b2b0f752ec35adf4 = $this->env->getExtension("native_profiler");
        $__internal_d165b02159a1c11fa721c2471f6ff0824da1f627b536eb10b2b0f752ec35adf4->enter($__internal_d165b02159a1c11fa721c2471f6ff0824da1f627b536eb10b2b0f752ec35adf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Rentabilidad General</h2>
                    </div>
<div class=\"box-content\">


    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("rentabilidad_general");
        echo "\" method=\"POST\" class=\"form-horizontal\">
        <table class=\"table table-bordered table-striped\">
                <tr>
                    <th>Fecha Inicio:</th>
                    <th><input type=\"text\" name=\"rentabilidad[fechaInicio]\" id=\"fechaInicio\" value=\"";
        // line 18
        if ( !(null === (isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "fechaInicio", array()), "html", null, true);
        }
        echo "\"></th>
                    <th>Fecha Fin:</th>
                    <th><input type=\"text\" name=\"rentabilidad[fechaFin]\" id=\"fechaFin\" value=\"";
        // line 20
        if ( !(null === (isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "fechaFin", array()), "html", null, true);
        }
        echo "\"></th>
                    <th><button type=\"submit\" id=\"rentabilidad_Enviar\" name=\"rentabilidad[Enviar]\" class=\"btn btn-primary\">Enviar</button></th>
                </tr>
        </table>
    </form>  

    <table class=\"table table-bordered table-striped\">
        <tr>
            <th rowspan=\"2\">Categoria</th>
            <th rowspan=\"2\">Cantidad</th>
            <th colspan=\"3\" align=\"center\">Compras</th>
            <th colspan=\"3\" align=\"center\">Logistica</th>
            <th rowspan=\"2\">Días Entrega</th>
        </tr>
        <tr>
            <th>Total Compras</th>
            <th>Total Ventas</th>
            <th>Rentabilidad</th>
            
            <th>Total Compras</th>
            <th>Total Ventas</th>
            <th>Rentabilidad</th>
        </tr>
        ";
        // line 43
        $context["i"] = 0;
        // line 44
        echo "        ";
        $context["j"] = 0;
        // line 45
        echo "        ";
        $context["cantidad"] = 0;
        // line 46
        echo "        ";
        $context["totalCompras"] = 0;
        // line 47
        echo "        ";
        $context["totalVentas"] = 0;
        // line 48
        echo "        ";
        $context["totalLogistica"] = 0;
        // line 49
        echo "        ";
        $context["totalCostoLogistica"] = 0;
        // line 50
        echo "        ";
        $context["totalDias"] = 0;
        // line 51
        echo "        ";
        $context["rentabilidadCompras"] = 0;
        // line 52
        echo "        ";
        $context["rentabilidadLogistica"] = 0;
        // line 53
        echo "
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 55
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 56
            echo "            ";
            $context["cantidad"] = ((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) + $this->getAttribute($context["categoria"], "total", array()));
            // line 57
            echo "            ";
            $context["totalCompras"] = ((isset($context["totalCompras"]) ? $context["totalCompras"] : $this->getContext($context, "totalCompras")) + $this->getAttribute($context["categoria"], "compra", array()));
            // line 58
            echo "            ";
            $context["totalVentas"] = ((isset($context["totalVentas"]) ? $context["totalVentas"] : $this->getContext($context, "totalVentas")) + $this->getAttribute($context["categoria"], "venta", array()));
            // line 59
            echo "            ";
            $context["totalCostoLogistica"] = ((isset($context["totalCostoLogistica"]) ? $context["totalCostoLogistica"] : $this->getContext($context, "totalCostoLogistica")) + $this->getAttribute($context["categoria"], "logisticaCompra", array()));
            // line 60
            echo "            ";
            $context["totalLogistica"] = ((isset($context["totalLogistica"]) ? $context["totalLogistica"] : $this->getContext($context, "totalLogistica")) + $this->getAttribute($context["categoria"], "logisticaVenta", array()));
            // line 61
            echo "            ";
            $context["totalDias"] = ((isset($context["totalDias"]) ? $context["totalDias"] : $this->getContext($context, "totalDias")) + $this->getAttribute($context["categoria"], "dias", array()));
            // line 62
            echo "            ";
            if (($this->getAttribute($context["categoria"], "dias", array()) > 0)) {
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
            }
            // line 63
            echo "            <tr>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], "redenciones", array()), "productocatalogo", array()), "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td align=\"right\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "total", array()), "html", null, true);
            echo "</td>

                <td align=\"right\">\$ ";
            // line 67
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "compra", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                <td align=\"right\">\$ ";
            // line 68
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "venta", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                ";
            // line 69
            if (($this->getAttribute($context["categoria"], "venta", array()) > 0)) {
                $context["rentabilidadCompras"] = ((1 - ($this->getAttribute($context["categoria"], "compra", array()) / $this->getAttribute($context["categoria"], "venta", array()))) * 100);
            }
            // line 70
            echo "                <td align=\"right\"> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidadCompras"]) ? $context["rentabilidadCompras"] : $this->getContext($context, "rentabilidadCompras")), 2, ",", "."), "html", null, true);
            echo "%</td>

                <td align=\"right\">\$ ";
            // line 72
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "logisticaCompra", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                <td align=\"right\">\$ ";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "logisticaVenta", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                ";
            // line 74
            if (($this->getAttribute($context["categoria"], "logisticaVenta", array()) > 0)) {
                $context["rentabilidadLogistica"] = ((1 - ($this->getAttribute($context["categoria"], "logisticaCompra", array()) / $this->getAttribute($context["categoria"], "logisticaVenta", array()))) * 100);
            }
            // line 75
            echo "                <td align=\"right\"> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidadLogistica"]) ? $context["rentabilidadLogistica"] : $this->getContext($context, "rentabilidadLogistica")), 2, ",", "."), "html", null, true);
            echo "%</td>
                <td align=\"right\">";
            // line 76
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "dias", array()), 0, ",", "."), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "         <tr>
            ";
        // line 80
        $context["rentabilidadCompras"] = 0;
        // line 81
        echo "            ";
        $context["rentabilidadLogistica"] = 0;
        // line 82
        echo "            ";
        if (((isset($context["totalVentas"]) ? $context["totalVentas"] : $this->getContext($context, "totalVentas")) != 0)) {
            $context["rentabilidadCompras"] = ((1 - ((isset($context["totalCompras"]) ? $context["totalCompras"] : $this->getContext($context, "totalCompras")) / (isset($context["totalVentas"]) ? $context["totalVentas"] : $this->getContext($context, "totalVentas")))) * 100);
        }
        // line 83
        echo "            ";
        if (((isset($context["totalLogistica"]) ? $context["totalLogistica"] : $this->getContext($context, "totalLogistica")) != 0)) {
            $context["rentabilidadLogistica"] = ((1 - ((isset($context["totalCostoLogistica"]) ? $context["totalCostoLogistica"] : $this->getContext($context, "totalCostoLogistica")) / (isset($context["totalLogistica"]) ? $context["totalLogistica"] : $this->getContext($context, "totalLogistica")))) * 100);
        }
        // line 84
        echo "            <th>TOTAL</th>
            <th>";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
        echo "</th>
            <th>\$ ";
        // line 86
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCompras"]) ? $context["totalCompras"] : $this->getContext($context, "totalCompras")), 0, ",", "."), "html", null, true);
        echo "</th>
            <th>\$ ";
        // line 87
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalVentas"]) ? $context["totalVentas"] : $this->getContext($context, "totalVentas")), 0, ",", "."), "html", null, true);
        echo "</th>
            <th>";
        // line 88
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidadCompras"]) ? $context["rentabilidadCompras"] : $this->getContext($context, "rentabilidadCompras")), 2, ",", "."), "html", null, true);
        echo " %</th>
            <th>\$ ";
        // line 89
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCostoLogistica"]) ? $context["totalCostoLogistica"] : $this->getContext($context, "totalCostoLogistica")), 0, ",", "."), "html", null, true);
        echo "</th>
            <th>\$ ";
        // line 90
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalLogistica"]) ? $context["totalLogistica"] : $this->getContext($context, "totalLogistica")), 0, ",", "."), "html", null, true);
        echo "</th>
            <th>";
        // line 91
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidadLogistica"]) ? $context["rentabilidadLogistica"] : $this->getContext($context, "rentabilidadLogistica")), 2, ",", "."), "html", null, true);
        echo " %</th>
            ";
        // line 92
        $context["promDias"] = 0;
        // line 93
        echo "            ";
        if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) > 0)) {
            $context["promDias"] = ((isset($context["totalDias"]) ? $context["totalDias"] : $this->getContext($context, "totalDias")) / (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")));
        }
        // line 94
        echo "            <th>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["promDias"]) ? $context["promDias"] : $this->getContext($context, "promDias")), 0, ",", "."), "html", null, true);
        echo "</th>
        </tr>
    </table>
</div>
</div>
 </div>
";
        
        $__internal_d165b02159a1c11fa721c2471f6ff0824da1f627b536eb10b2b0f752ec35adf4->leave($__internal_d165b02159a1c11fa721c2471f6ff0824da1f627b536eb10b2b0f752ec35adf4_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dac8fe1ab5088b04b3e47923b346618040c3f96987dfcb0fb7c1ae282f52c291 = $this->env->getExtension("native_profiler");
        $__internal_dac8fe1ab5088b04b3e47923b346618040c3f96987dfcb0fb7c1ae282f52c291->enter($__internal_dac8fe1ab5088b04b3e47923b346618040c3f96987dfcb0fb7c1ae282f52c291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    function detalle(id){
        \$('#detalle_'+id).toggle();
    }

    \$( \"#fechaInicio\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    \$( \"#fechaFin\" ).datepicker({ dateFormat: 'yy-mm-dd' });
</script>
";
        
        $__internal_dac8fe1ab5088b04b3e47923b346618040c3f96987dfcb0fb7c1ae282f52c291->leave($__internal_dac8fe1ab5088b04b3e47923b346618040c3f96987dfcb0fb7c1ae282f52c291_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Rentabilidad:rentabilidadgeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 103,  295 => 102,  280 => 94,  275 => 93,  273 => 92,  269 => 91,  265 => 90,  261 => 89,  257 => 88,  253 => 87,  249 => 86,  245 => 85,  242 => 84,  237 => 83,  232 => 82,  229 => 81,  227 => 80,  224 => 79,  215 => 76,  210 => 75,  206 => 74,  202 => 73,  198 => 72,  192 => 70,  188 => 69,  184 => 68,  180 => 67,  175 => 65,  171 => 64,  168 => 63,  163 => 62,  160 => 61,  157 => 60,  154 => 59,  151 => 58,  148 => 57,  145 => 56,  142 => 55,  138 => 54,  135 => 53,  132 => 52,  129 => 51,  126 => 50,  123 => 49,  120 => 48,  117 => 47,  114 => 46,  111 => 45,  108 => 44,  106 => 43,  78 => 20,  71 => 18,  64 => 14,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Rentabilidad General{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Rentabilidad General</h2>*/
/*                     </div>*/
/* <div class="box-content">*/
/* */
/* */
/*     <form action="{{ path('rentabilidad_general') }}" method="POST" class="form-horizontal">*/
/*         <table class="table table-bordered table-striped">*/
/*                 <tr>*/
/*                     <th>Fecha Inicio:</th>*/
/*                     <th><input type="text" name="rentabilidad[fechaInicio]" id="fechaInicio" value="{% if filtros  is not null %}{{ filtros.fechaInicio }}{% endif %}"></th>*/
/*                     <th>Fecha Fin:</th>*/
/*                     <th><input type="text" name="rentabilidad[fechaFin]" id="fechaFin" value="{% if filtros  is not null %}{{ filtros.fechaFin }}{% endif %}"></th>*/
/*                     <th><button type="submit" id="rentabilidad_Enviar" name="rentabilidad[Enviar]" class="btn btn-primary">Enviar</button></th>*/
/*                 </tr>*/
/*         </table>*/
/*     </form>  */
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <tr>*/
/*             <th rowspan="2">Categoria</th>*/
/*             <th rowspan="2">Cantidad</th>*/
/*             <th colspan="3" align="center">Compras</th>*/
/*             <th colspan="3" align="center">Logistica</th>*/
/*             <th rowspan="2">Días Entrega</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Total Compras</th>*/
/*             <th>Total Ventas</th>*/
/*             <th>Rentabilidad</th>*/
/*             */
/*             <th>Total Compras</th>*/
/*             <th>Total Ventas</th>*/
/*             <th>Rentabilidad</th>*/
/*         </tr>*/
/*         {% set i = 0 %}*/
/*         {% set j = 0 %}*/
/*         {% set cantidad = 0 %}*/
/*         {% set totalCompras = 0 %}*/
/*         {% set totalVentas = 0 %}*/
/*         {% set totalLogistica = 0 %}*/
/*         {% set totalCostoLogistica = 0 %}*/
/*         {% set totalDias = 0 %}*/
/*         {% set rentabilidadCompras = 0 %}*/
/*         {% set rentabilidadLogistica = 0 %}*/
/* */
/*         {% for categoria in categorias %}*/
/*             {% set i=i+1 %}*/
/*             {% set cantidad = cantidad + categoria.total %}*/
/*             {% set totalCompras = totalCompras + categoria.compra %}*/
/*             {% set totalVentas = totalVentas + categoria.venta %}*/
/*             {% set totalCostoLogistica = totalCostoLogistica + categoria.logisticaCompra %}*/
/*             {% set totalLogistica = totalLogistica + categoria.logisticaVenta %}*/
/*             {% set totalDias = totalDias + categoria.dias %}*/
/*             {% if(categoria.dias > 0) %}{% set j = j + 1 %}{% endif %}*/
/*             <tr>*/
/*                 <td>{{ categoria.redenciones.productocatalogo.producto.categoria.nombre }}</td>*/
/*                 <td align="right">{{ categoria.total }}</td>*/
/* */
/*                 <td align="right">$ {{ categoria.compra | number_format(0, ',', '.') }}</td>*/
/*                 <td align="right">$ {{ categoria.venta | number_format(0, ',', '.') }}</td>*/
/*                 {% if categoria.venta > 0 %}{% set rentabilidadCompras = (1 - (categoria.compra/categoria.venta))*100 %}{% endif %}*/
/*                 <td align="right"> {{ rentabilidadCompras| number_format(2, ',', '.') }}%</td>*/
/* */
/*                 <td align="right">$ {{ categoria.logisticaCompra | number_format(0, ',', '.') }}</td>*/
/*                 <td align="right">$ {{ categoria.logisticaVenta | number_format(0, ',', '.') }}</td>*/
/*                 {% if categoria.logisticaVenta  > 0 %}{% set rentabilidadLogistica = (1 - (categoria.logisticaCompra/categoria.logisticaVenta))*100 %}{% endif %}*/
/*                 <td align="right"> {{ rentabilidadLogistica| number_format(2, ',', '.') }}%</td>*/
/*                 <td align="right">{{ categoria.dias | number_format(0, ',', '.') }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*          <tr>*/
/*             {% set rentabilidadCompras = 0 %}*/
/*             {% set rentabilidadLogistica = 0 %}*/
/*             {% if totalVentas != 0 %}{% set rentabilidadCompras = (1 - (totalCompras/totalVentas))*100 %}{% endif %}*/
/*             {% if totalLogistica != 0 %}{% set rentabilidadLogistica = (1 - (totalCostoLogistica/totalLogistica))*100 %}{% endif %}*/
/*             <th>TOTAL</th>*/
/*             <th>{{ cantidad }}</th>*/
/*             <th>$ {{ totalCompras | number_format(0, ',', '.') }}</th>*/
/*             <th>$ {{ totalVentas   | number_format(0, ',', '.') }}</th>*/
/*             <th>{{ rentabilidadCompras | number_format(2, ',', '.') }} %</th>*/
/*             <th>$ {{ totalCostoLogistica | number_format(0, ',', '.') }}</th>*/
/*             <th>$ {{ totalLogistica | number_format(0, ',', '.') }}</th>*/
/*             <th>{{ rentabilidadLogistica | number_format(2, ',', '.') }} %</th>*/
/*             {% set promDias = 0%}*/
/*             {% if j>0 %}{% set promDias = totalDias/j %}{% endif %}*/
/*             <th>{{ promDias | number_format(0, ',', '.') }}</th>*/
/*         </tr>*/
/*     </table>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script>*/
/*     function detalle(id){*/
/*         $('#detalle_'+id).toggle();*/
/*     }*/
/* */
/*     $( "#fechaInicio" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     $( "#fechaFin" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/* </script>*/
/* {% endblock %}*/
/* */
