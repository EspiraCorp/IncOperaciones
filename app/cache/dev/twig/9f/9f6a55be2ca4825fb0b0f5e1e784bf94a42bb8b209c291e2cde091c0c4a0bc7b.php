<?php

/* IncentivesFacturacionBundle:Rentabilidad:rentabilidadprograma.html.twig */
class __TwigTemplate_e1d11180be8f7837d90553a6735986ba33c473ba58642da1d574f492f18c1c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Rentabilidad:rentabilidadprograma.html.twig", 1);
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
        $__internal_7e8d2865c1df625ded538d7fa0573ce2f29af05e41c8052e42fba9c536b9d63d = $this->env->getExtension("native_profiler");
        $__internal_7e8d2865c1df625ded538d7fa0573ce2f29af05e41c8052e42fba9c536b9d63d->enter($__internal_7e8d2865c1df625ded538d7fa0573ce2f29af05e41c8052e42fba9c536b9d63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Rentabilidad:rentabilidadprograma.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e8d2865c1df625ded538d7fa0573ce2f29af05e41c8052e42fba9c536b9d63d->leave($__internal_7e8d2865c1df625ded538d7fa0573ce2f29af05e41c8052e42fba9c536b9d63d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8596b7c05ca39edc4c88c421ee8687bde7142e4629825f0a400ed8868ba32d64 = $this->env->getExtension("native_profiler");
        $__internal_8596b7c05ca39edc4c88c421ee8687bde7142e4629825f0a400ed8868ba32d64->enter($__internal_8596b7c05ca39edc4c88c421ee8687bde7142e4629825f0a400ed8868ba32d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rentabilidad Programa";
        
        $__internal_8596b7c05ca39edc4c88c421ee8687bde7142e4629825f0a400ed8868ba32d64->leave($__internal_8596b7c05ca39edc4c88c421ee8687bde7142e4629825f0a400ed8868ba32d64_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_45382bbf767f4eab42e3ba0bedb7cae147c2721648720f58ed952e00117579f5 = $this->env->getExtension("native_profiler");
        $__internal_45382bbf767f4eab42e3ba0bedb7cae147c2721648720f58ed952e00117579f5->enter($__internal_45382bbf767f4eab42e3ba0bedb7cae147c2721648720f58ed952e00117579f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Rentabilidad Programa</h2>
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("rentabilidad_exportar");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-success\">Detalle</a>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("rentabilidad");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">


    <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("rentabilidad_programa");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()), "html", null, true);
        echo "\" method=\"POST\" class=\"form-horizontal\">
        <table class=\"table table-bordered table-striped\">
                <tr>
                    <th>Programa</th>
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "nombre", array()), "html", null, true);
        echo "</th>
                    <th>Cliente</th>
                    <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</th>
                    <th></th>
                </tr>
                <tr>
                    <th>Fecha Inicio:</th>
                    <th><input type=\"text\" name=\"rentabilidad[fechaInicio]\" id=\"fechaInicio\" value=\"";
        // line 29
        if ( !(null === (isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "fechaInicio", array()), "html", null, true);
        }
        echo "\"></th>
                    <th>Fecha Fin:</th>
                    <th><input type=\"text\" name=\"rentabilidad[fechaFin]\" id=\"fechaFin\" value=\"";
        // line 31
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
        // line 54
        $context["i"] = 0;
        // line 55
        echo "        ";
        $context["j"] = 0;
        // line 56
        echo "        ";
        $context["cantidad"] = 0;
        // line 57
        echo "        ";
        $context["totalCompras"] = 0;
        // line 58
        echo "        ";
        $context["totalVentas"] = 0;
        // line 59
        echo "        ";
        $context["totalLogistica"] = 0;
        // line 60
        echo "        ";
        $context["totalCostoLogistica"] = 0;
        // line 61
        echo "        ";
        $context["totalDias"] = 0;
        // line 62
        echo "        ";
        $context["rentabilidadCompras"] = 0;
        // line 63
        echo "        ";
        $context["rentabilidadLogistica"] = 0;
        // line 64
        echo "
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 66
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 67
            echo "            ";
            $context["cantidad"] = ((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) + $this->getAttribute($context["categoria"], "total", array()));
            // line 68
            echo "            ";
            $context["totalCompras"] = ((isset($context["totalCompras"]) ? $context["totalCompras"] : $this->getContext($context, "totalCompras")) + $this->getAttribute($context["categoria"], "compra", array()));
            // line 69
            echo "            ";
            $context["totalVentas"] = ((isset($context["totalVentas"]) ? $context["totalVentas"] : $this->getContext($context, "totalVentas")) + $this->getAttribute($context["categoria"], "venta", array()));
            // line 70
            echo "            ";
            $context["totalCostoLogistica"] = ((isset($context["totalCostoLogistica"]) ? $context["totalCostoLogistica"] : $this->getContext($context, "totalCostoLogistica")) + $this->getAttribute($context["categoria"], "logisticaCompra", array()));
            // line 71
            echo "            ";
            $context["totalLogistica"] = ((isset($context["totalLogistica"]) ? $context["totalLogistica"] : $this->getContext($context, "totalLogistica")) + $this->getAttribute($context["categoria"], "logisticaVenta", array()));
            // line 72
            echo "            ";
            $context["totalDias"] = ((isset($context["totalDias"]) ? $context["totalDias"] : $this->getContext($context, "totalDias")) + $this->getAttribute($context["categoria"], "dias", array()));
            // line 73
            echo "            ";
            if (($this->getAttribute($context["categoria"], "dias", array()) > 0)) {
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
            }
            // line 74
            echo "            <tr>
                <td><a id=\"";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" onClick=\"detalle('";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "')\" class=\"btn btn-success\">+</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], "redenciones", array()), "productocatalogo", array()), "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td align=\"right\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "total", array()), "html", null, true);
            echo "</td>

                <td align=\"right\">\$ ";
            // line 78
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "compra", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                <td align=\"right\">\$ ";
            // line 79
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "venta", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                ";
            // line 80
            if (($this->getAttribute($context["categoria"], "venta", array()) > 0)) {
                $context["rentabilidadCompras"] = ((1 - ($this->getAttribute($context["categoria"], "compra", array()) / $this->getAttribute($context["categoria"], "venta", array()))) * 100);
            }
            // line 81
            echo "                <td align=\"right\"> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidadCompras"]) ? $context["rentabilidadCompras"] : $this->getContext($context, "rentabilidadCompras")), 2, ",", "."), "html", null, true);
            echo "%</td>

                <td align=\"right\">\$ ";
            // line 83
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "logisticaCompra", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                <td align=\"right\">\$ ";
            // line 84
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "logisticaVenta", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                ";
            // line 85
            if (($this->getAttribute($context["categoria"], "logisticaVenta", array()) > 0)) {
                $context["rentabilidadLogistica"] = ((1 - ($this->getAttribute($context["categoria"], "logisticaCompra", array()) / $this->getAttribute($context["categoria"], "logisticaVenta", array()))) * 100);
            }
            // line 86
            echo "                <td align=\"right\"> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidadLogistica"]) ? $context["rentabilidadLogistica"] : $this->getContext($context, "rentabilidadLogistica")), 2, ",", "."), "html", null, true);
            echo "%</td>
                <td align=\"right\">";
            // line 87
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["categoria"], "dias", array()), 0, ",", "."), "html", null, true);
            echo "</td>
            </tr>
            <tr id=\"detalle_";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"hide\">
                <td colspan=\"9\">
                    <div>";
            // line 91
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesFacturacionBundle:Rentabilidad:rentabilidadPremios", array("categoria" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], "redenciones", array()), "productocatalogo", array()), "producto", array()), "categoria", array()), "id", array()), "programa" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()))));
            echo "</div>
                </td>
            </tr></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "         <tr>
            ";
        // line 97
        $context["rentabilidadCompras"] = 0;
        // line 98
        echo "            ";
        $context["rentabilidadLogistica"] = 0;
        // line 99
        echo "            ";
        if (((isset($context["totalVentas"]) ? $context["totalVentas"] : $this->getContext($context, "totalVentas")) != 0)) {
            $context["rentabilidadCompras"] = ((1 - ((isset($context["totalCompras"]) ? $context["totalCompras"] : $this->getContext($context, "totalCompras")) / (isset($context["totalVentas"]) ? $context["totalVentas"] : $this->getContext($context, "totalVentas")))) * 100);
        }
        // line 100
        echo "            ";
        if (((isset($context["totalLogistica"]) ? $context["totalLogistica"] : $this->getContext($context, "totalLogistica")) != 0)) {
            $context["rentabilidadLogistica"] = ((1 - ((isset($context["totalCostoLogistica"]) ? $context["totalCostoLogistica"] : $this->getContext($context, "totalCostoLogistica")) / (isset($context["totalLogistica"]) ? $context["totalLogistica"] : $this->getContext($context, "totalLogistica")))) * 100);
        }
        // line 101
        echo "            <th>TOTAL</th>
            <th>";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
        echo "</th>
            <th>\$ ";
        // line 103
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCompras"]) ? $context["totalCompras"] : $this->getContext($context, "totalCompras")), 0, ",", "."), "html", null, true);
        echo "</th>
            <th>\$ ";
        // line 104
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalVentas"]) ? $context["totalVentas"] : $this->getContext($context, "totalVentas")), 0, ",", "."), "html", null, true);
        echo "</th>
            <th>";
        // line 105
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidadCompras"]) ? $context["rentabilidadCompras"] : $this->getContext($context, "rentabilidadCompras")), 2, ",", "."), "html", null, true);
        echo " %</th>
            <th>\$ ";
        // line 106
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCostoLogistica"]) ? $context["totalCostoLogistica"] : $this->getContext($context, "totalCostoLogistica")), 0, ",", "."), "html", null, true);
        echo "</th>
            <th>\$ ";
        // line 107
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalLogistica"]) ? $context["totalLogistica"] : $this->getContext($context, "totalLogistica")), 0, ",", "."), "html", null, true);
        echo "</th>
            <th>";
        // line 108
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["rentabilidadLogistica"]) ? $context["rentabilidadLogistica"] : $this->getContext($context, "rentabilidadLogistica")), 2, ",", "."), "html", null, true);
        echo " %</th>
            ";
        // line 109
        $context["promDias"] = 0;
        // line 110
        echo "            ";
        if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) > 0)) {
            $context["promDias"] = ((isset($context["totalDias"]) ? $context["totalDias"] : $this->getContext($context, "totalDias")) / (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")));
        }
        // line 111
        echo "            <th>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["promDias"]) ? $context["promDias"] : $this->getContext($context, "promDias")), 0, ",", "."), "html", null, true);
        echo "</th>
        </tr>
    </table>
</div>
</div>
 </div>
";
        
        $__internal_45382bbf767f4eab42e3ba0bedb7cae147c2721648720f58ed952e00117579f5->leave($__internal_45382bbf767f4eab42e3ba0bedb7cae147c2721648720f58ed952e00117579f5_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a14669929a492a6c036eb0f862d02bf9fb3a6f6f8490b7a2d637f148080e4970 = $this->env->getExtension("native_profiler");
        $__internal_a14669929a492a6c036eb0f862d02bf9fb3a6f6f8490b7a2d637f148080e4970->enter($__internal_a14669929a492a6c036eb0f862d02bf9fb3a6f6f8490b7a2d637f148080e4970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
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
        
        $__internal_a14669929a492a6c036eb0f862d02bf9fb3a6f6f8490b7a2d637f148080e4970->leave($__internal_a14669929a492a6c036eb0f862d02bf9fb3a6f6f8490b7a2d637f148080e4970_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Rentabilidad:rentabilidadprograma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 120,  338 => 119,  323 => 111,  318 => 110,  316 => 109,  312 => 108,  308 => 107,  304 => 106,  300 => 105,  296 => 104,  292 => 103,  288 => 102,  285 => 101,  280 => 100,  275 => 99,  272 => 98,  270 => 97,  267 => 96,  256 => 91,  251 => 89,  246 => 87,  241 => 86,  237 => 85,  233 => 84,  229 => 83,  223 => 81,  219 => 80,  215 => 79,  211 => 78,  206 => 76,  198 => 75,  195 => 74,  190 => 73,  187 => 72,  184 => 71,  181 => 70,  178 => 69,  175 => 68,  172 => 67,  169 => 66,  165 => 65,  162 => 64,  159 => 63,  156 => 62,  153 => 61,  150 => 60,  147 => 59,  144 => 58,  141 => 57,  138 => 56,  135 => 55,  133 => 54,  105 => 31,  98 => 29,  90 => 24,  85 => 22,  76 => 18,  67 => 12,  60 => 10,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Rentabilidad Programa{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Rentabilidad Programa</h2>*/
/*                         <a href="{{ path('rentabilidad_exportar') }}/{{ programa.id }}" class="btn btn-success">Detalle</a>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('rentabilidad') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* */
/* */
/*     <form action="{{ path('rentabilidad_programa') }}/{{ programa.id }}" method="POST" class="form-horizontal">*/
/*         <table class="table table-bordered table-striped">*/
/*                 <tr>*/
/*                     <th>Programa</th>*/
/*                     <th>{{ programa.nombre }}</th>*/
/*                     <th>Cliente</th>*/
/*                     <th>{{ programa.cliente.nombre }}</th>*/
/*                     <th></th>*/
/*                 </tr>*/
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
/*                 <td><a id="{{ i }}" onClick="detalle('{{ i }}')" class="btn btn-success">+</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ categoria.redenciones.productocatalogo.producto.categoria.nombre }}</td>*/
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
/*             <tr id="detalle_{{ i }}" class="hide">*/
/*                 <td colspan="9">*/
/*                     <div>{{ render(controller('IncentivesFacturacionBundle:Rentabilidad:rentabilidadPremios', { 'categoria': categoria.redenciones.productocatalogo.producto.categoria.id , 'programa': programa.id })) }}</div>*/
/*                 </td>*/
/*             </tr></td>*/
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
