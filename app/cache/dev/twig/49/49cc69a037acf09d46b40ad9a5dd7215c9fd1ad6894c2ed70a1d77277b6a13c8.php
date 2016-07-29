<?php

/* IncentivesOperacionesBundle:Proveedor:calificacion.html.twig */
class __TwigTemplate_c0ed70088b4914399ac3e30f2dae4bedfe09f2bd46e13282cfaba92c938d4506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:calificacion.html.twig", 2);
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
        $__internal_7dca2c5855e452d3e244967e4e32306e95d75ccba56df2b8ff811e4e64edfb11 = $this->env->getExtension("native_profiler");
        $__internal_7dca2c5855e452d3e244967e4e32306e95d75ccba56df2b8ff811e4e64edfb11->enter($__internal_7dca2c5855e452d3e244967e4e32306e95d75ccba56df2b8ff811e4e64edfb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:calificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dca2c5855e452d3e244967e4e32306e95d75ccba56df2b8ff811e4e64edfb11->leave($__internal_7dca2c5855e452d3e244967e4e32306e95d75ccba56df2b8ff811e4e64edfb11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2353e507755e8784332a73a606e8716966bf6b8368e353c5d0cbb67cf0f67f20 = $this->env->getExtension("native_profiler");
        $__internal_2353e507755e8784332a73a606e8716966bf6b8368e353c5d0cbb67cf0f67f20->enter($__internal_2353e507755e8784332a73a606e8716966bf6b8368e353c5d0cbb67cf0f67f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calificar proveedor";
        
        $__internal_2353e507755e8784332a73a606e8716966bf6b8368e353c5d0cbb67cf0f67f20->leave($__internal_2353e507755e8784332a73a606e8716966bf6b8368e353c5d0cbb67cf0f67f20_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d50271d538dfd5bb693b54d3f5e6de0ef8465ba20ca28cc6c002aec74d1128e4 = $this->env->getExtension("native_profiler");
        $__internal_d50271d538dfd5bb693b54d3f5e6de0ef8465ba20ca28cc6c002aec74d1128e4->enter($__internal_d50271d538dfd5bb693b54d3f5e6de0ef8465ba20ca28cc6c002aec74d1128e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Calificar Proveedor</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_calificacion", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
    <table class=\"table table-bordered table-striped\">
        <tbody>
            <tr><th colspan=\"6\">INFORMACIÓN GENERAL DEL PROVEEDOR</th></tr>
            <tr><td>Razon Social Proveedor</td><td colspan=\"5\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Direccion</td><td colspan=\"5\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "direccion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Telefono</td><td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "telefono", array()), "html", null, true);
        echo "</td>
                <td>E-mail</td><td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "correo", array()), "html", null, true);
        echo "</td>
                <td>Fax</td><td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "fax", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Documento</td><td colspan=\"5\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "tipodocumento", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "numerodocumento", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Periodo</td><td colspan=\"5\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("id" => "periodo"));
        echo "</td></tr>
            <tr><td>Fecha</td><td colspan=\"5\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("id" => "fecha"));
        echo "</td></tr>
        </tbody>
    </table>
    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr><th colspan=\"7\">EVALUACIÓN DEL PROVEEDOR (BIENES Y/O SERVICIOS) - Calificación de 1 a 5 (5 max)</th></tr>
            <tr><td colspan=\"4\">A. ELEGIBILIDAD TÉCNICA (ETC) (corresponde al 40%)</td>
                <td>PUNTAJE</td>
                <td>RESULTADO</td>
            </tr>
        </thead>
        <tbody>
            <tr><th>1. CE =</th>
                <td colspan=\"3\">Cumplimiento en las Entregas  (oportunidad en los tiempos de respuesta, documentación y/o bienes requeridos)</td>
                <td><div class=\"ind\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ce", array()), 'widget', array("id" => "ind-1"));
        echo "</div></td>
                <td>
                    <div id=\"resultado-1\"></div>
                </td>
            </tr>
            <tr><th>2. CPI =</th>
                <td colspan=\"3\">Calidad del Producto, insumos, materiales o Servicio</td>
                <td><div class=\"ind\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cpi", array()), 'widget', array("id" => "ind-2"));
        echo "</div></td>
                <td>
                    <div id=\"resultado-2\"></div>
                </td>
            </tr>
            <tr><th>3. BEP =</th>
                <td colspan=\"3\">Bienes y servicios ejecutados conforme a lo pactado (cumplimiento de criterios especificados en orden de compra de bienes y servicios)</td>
                <td><div class=\"ind\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bep", array()), 'widget', array("id" => "ind-3"));
        echo "</div></td>
                <td>
                    <div id=\"resultado-3\"></div>
                </td>
            </tr>
            <tr><th>4. PD =</th>
                <td colspan=\"3\">\"Productos con Devoluciones o defectos, servicios no conformes. El proveedor ha presentado productos/servicios no conformes\"</td>
                <td><div class=\"ind\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pd", array()), 'widget', array("id" => "ind-4"));
        echo "</div></td>
                <td>
                    <div id=\"resultado-4\"></div>
                </td>
            </tr>
            <tr><th colspan=\"5\">ETC = 15(CE+CPI+DPI+BEP+EX+PD)</th>
                <td>
                    <b><div id=\"resultado-7\"></div></b>
                </td>
            </tr>
        </tbody>
        <thead> 
            <tr><td colspan=\"4\">B. ELEGIBILIDAD COMERCIAL Y FINANCIERA (ECF) corresponde al 60%</td>
                <td>PUNTAJE</td>
                <td>RESULTADO</td>
            </tr>
        </thead>
        <tbody>
            <tr><th>1. AOC =</th>
                <td colspan=\"3\">Atención Oportuna al Cliente </td>
                <td><div class=\"ind\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aoc", array()), 'widget', array("id" => "ind-5"));
        echo "</div></td>
                <td>
                    <div id=\"resultado-5\"></div>
                </td>
            </tr>
            <tr><th>2. CFP =</th>
                <td colspan=\"3\">Condiciones de Pago  ≤ 60 días y ≥ 90 días</td>
                <td><div class=\"ind\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cfp", array()), 'widget', array("id" => "ind-6"));
        echo "</div></td>
                <td>
                    <div id=\"resultado-6\"></div>
                </td>
            </tr>
            <tr><th colspan=\"5\">ECF =10 (RC+CP+AOC+AFH+SGC+CFP) =</th>
                <td>
                    <b><div id=\"resultado-8\"></div></b>
                </td>
            </tr>
            <tr><th colspan=\"5\">C. CALIFICACIÓN TOTAL  REP=(ETC+ECF) EVALUACIÓN TOTAL DEL PROVEEDOR </th>
                <td>
                    <b>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calificacion", array()), 'widget', array("id" => "resultado-9", "attr" => array("read_only" => "true")));
        echo "</b>
                </td>
            </tr>
            <tr><th colspan=\"4\">OBSERVACIONES GENERALES</th>
                <th colspan=\"2\">RANGO DE RESULTADOS</th>
            </tr>
            <tr><td rowspan=\"3\" colspan=\"4\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'widget');
        echo "</td>
                <td>> 0 a 50 </td>
                <td>NO CONTINUA</td>
            </tr>
            <tr><td>> 50,1 a 70 </td>
                <td>CONTINUA CON OBSERVACIONES </td>
            </tr>
            <tr><td>> 70,1 a 100</td>
                <td>CONTINUA</td>
            </tr>

        </tbody>
    </table>
    </fieldset>
            
<div class=\"form-actions\">
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_d50271d538dfd5bb693b54d3f5e6de0ef8465ba20ca28cc6c002aec74d1128e4->leave($__internal_d50271d538dfd5bb693b54d3f5e6de0ef8465ba20ca28cc6c002aec74d1128e4_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a106a3e645de8dc1e4e3bc72bf1e5ce99115bbbeb8e8f6d672034a798c4e6dca = $this->env->getExtension("native_profiler");
        $__internal_a106a3e645de8dc1e4e3bc72bf1e5ce99115bbbeb8e8f6d672034a798c4e6dca->enter($__internal_a106a3e645de8dc1e4e3bc72bf1e5ce99115bbbeb8e8f6d672034a798c4e6dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script>
        \$( \"#fecha\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>
    
    <script>
        
        \$(document).ready(inicializarEventos);
        
        function inicializarEventos()
        {
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 147
            echo "                \$(\"#ind-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\").change(function() {
                    var x=\$(\"#ind-";
            // line 148
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\");
                    var valor = parseInt(x.val(), 10);
                    if(valor<0 || valor>5 || !\$.isNumeric(valor)){
                        alert(\"el valor no es valido\");
                        \$(  this ).focusout();
                        \$( this ).val('');
                        return false;
                    }else{
                        x.focusout(procesar);    
                    }
                });

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "        }

        function procesar()
        {
            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 166
            echo "                var x=\$(\"#ind-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\");
                var y=\$(\"#resultado-";
            // line 167
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\");
                y.text(x.val()/(4/0.4));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(5, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 171
            echo "                var x=\$(\"#ind-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\");
                var y=\$(\"#resultado-";
            // line 172
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\");
                y.text(x.val()/(2/0.6));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "            var y=\$(\"#resultado-7\");
            y.text((eval(\$(\"#ind-1\").val())+eval(\$(\"#ind-2\").val())+eval(\$(\"#ind-3\").val())+eval(\$(\"#ind-4\").val()))*2);
            var y=\$(\"#resultado-8\");
            y.text((eval(\$(\"#ind-5\").val())+eval(\$(\"#ind-6\").val()))*6);
            var y=\$(\"#resultado-9\");
            y.val((eval(\$(\"#resultado-7\").text())+eval(\$(\"#resultado-8\").text())));
            
            
        }
    </script>
";
        
        $__internal_a106a3e645de8dc1e4e3bc72bf1e5ce99115bbbeb8e8f6d672034a798c4e6dca->leave($__internal_a106a3e645de8dc1e4e3bc72bf1e5ce99115bbbeb8e8f6d672034a798c4e6dca_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:calificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 175,  341 => 172,  336 => 171,  331 => 170,  322 => 167,  317 => 166,  313 => 165,  307 => 161,  288 => 148,  283 => 147,  279 => 146,  263 => 134,  257 => 133,  244 => 126,  239 => 124,  235 => 123,  216 => 107,  207 => 101,  192 => 89,  182 => 82,  159 => 62,  149 => 55,  139 => 48,  129 => 41,  112 => 27,  108 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  74 => 15,  68 => 14,  61 => 10,  54 => 5,  48 => 4,  36 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Calificar proveedor{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Calificar Proveedor</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores_datos',  {"id": id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('proveedores_calificacion',  {"id": id}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*     <table class="table table-bordered table-striped">*/
/*         <tbody>*/
/*             <tr><th colspan="6">INFORMACIÓN GENERAL DEL PROVEEDOR</th></tr>*/
/*             <tr><td>Razon Social Proveedor</td><td colspan="5">{{ proveedor.nombre }}</td></tr>*/
/*             <tr><td>Direccion</td><td colspan="5">{{ proveedor.direccion }}</td></tr>*/
/*             <tr><td>Telefono</td><td>{{ proveedor.telefono }}</td>*/
/*                 <td>E-mail</td><td>{{ proveedor.correo }}</td>*/
/*                 <td>Fax</td><td>{{ proveedor.fax }}</td></tr>*/
/*             <tr><td>Documento</td><td colspan="5">{{ proveedor.tipodocumento.nombre }} {{ proveedor.numerodocumento }}</td></tr>*/
/*             <tr><td>Periodo</td><td colspan="5">{{ form_widget(form.periodo, { 'id': 'periodo' })}}</td></tr>*/
/*             <tr><td>Fecha</td><td colspan="5">{{ form_widget(form.fecha, { 'id': 'fecha' })}}</td></tr>*/
/*         </tbody>*/
/*     </table>*/
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr><th colspan="7">EVALUACIÓN DEL PROVEEDOR (BIENES Y/O SERVICIOS) - Calificación de 1 a 5 (5 max)</th></tr>*/
/*             <tr><td colspan="4">A. ELEGIBILIDAD TÉCNICA (ETC) (corresponde al 40%)</td>*/
/*                 <td>PUNTAJE</td>*/
/*                 <td>RESULTADO</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr><th>1. CE =</th>*/
/*                 <td colspan="3">Cumplimiento en las Entregas  (oportunidad en los tiempos de respuesta, documentación y/o bienes requeridos)</td>*/
/*                 <td><div class="ind">{{ form_widget(form.ce, { 'id': 'ind-1' }) }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-1"></div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>2. CPI =</th>*/
/*                 <td colspan="3">Calidad del Producto, insumos, materiales o Servicio</td>*/
/*                 <td><div class="ind">{{ form_widget(form.cpi, { 'id': 'ind-2' }) }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-2"></div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>3. BEP =</th>*/
/*                 <td colspan="3">Bienes y servicios ejecutados conforme a lo pactado (cumplimiento de criterios especificados en orden de compra de bienes y servicios)</td>*/
/*                 <td><div class="ind">{{ form_widget(form.bep, { 'id': 'ind-3' }) }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-3"></div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>4. PD =</th>*/
/*                 <td colspan="3">"Productos con Devoluciones o defectos, servicios no conformes. El proveedor ha presentado productos/servicios no conformes"</td>*/
/*                 <td><div class="ind">{{ form_widget(form.pd, { 'id': 'ind-4' }) }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-4"></div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">ETC = 15(CE+CPI+DPI+BEP+EX+PD)</th>*/
/*                 <td>*/
/*                     <b><div id="resultado-7"></div></b>*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*         <thead> */
/*             <tr><td colspan="4">B. ELEGIBILIDAD COMERCIAL Y FINANCIERA (ECF) corresponde al 60%</td>*/
/*                 <td>PUNTAJE</td>*/
/*                 <td>RESULTADO</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr><th>1. AOC =</th>*/
/*                 <td colspan="3">Atención Oportuna al Cliente </td>*/
/*                 <td><div class="ind">{{ form_widget(form.aoc, { 'id': 'ind-5' }) }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-5"></div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>2. CFP =</th>*/
/*                 <td colspan="3">Condiciones de Pago  ≤ 60 días y ≥ 90 días</td>*/
/*                 <td><div class="ind">{{ form_widget(form.cfp, { 'id': 'ind-6' }) }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-6"></div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">ECF =10 (RC+CP+AOC+AFH+SGC+CFP) =</th>*/
/*                 <td>*/
/*                     <b><div id="resultado-8"></div></b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">C. CALIFICACIÓN TOTAL  REP=(ETC+ECF) EVALUACIÓN TOTAL DEL PROVEEDOR </th>*/
/*                 <td>*/
/*                     <b>{{ form_widget(form.calificacion, { 'id': 'resultado-9', 'attr': {'read_only': 'true'} }) }}</b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="4">OBSERVACIONES GENERALES</th>*/
/*                 <th colspan="2">RANGO DE RESULTADOS</th>*/
/*             </tr>*/
/*             <tr><td rowspan="3" colspan="4">{{ form_widget(form.observacion) }}</td>*/
/*                 <td>> 0 a 50 </td>*/
/*                 <td>NO CONTINUA</td>*/
/*             </tr>*/
/*             <tr><td>> 50,1 a 70 </td>*/
/*                 <td>CONTINUA CON OBSERVACIONES </td>*/
/*             </tr>*/
/*             <tr><td>> 70,1 a 100</td>*/
/*                 <td>CONTINUA</td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/*     </fieldset>*/
/*             */
/* <div class="form-actions">*/
/*     <input type="hidden" name="id" value="{{ id }}">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     */
/*     <script>*/
/*         $( "#fecha" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/*     */
/*     <script>*/
/*         */
/*         $(document).ready(inicializarEventos);*/
/*         */
/*         function inicializarEventos()*/
/*         {*/
/*             {% for i in 1..6 %}*/
/*                 $("#ind-{{ i }}").change(function() {*/
/*                     var x=$("#ind-{{i}}");*/
/*                     var valor = parseInt(x.val(), 10);*/
/*                     if(valor<0 || valor>5 || !$.isNumeric(valor)){*/
/*                         alert("el valor no es valido");*/
/*                         $(  this ).focusout();*/
/*                         $( this ).val('');*/
/*                         return false;*/
/*                     }else{*/
/*                         x.focusout(procesar);    */
/*                     }*/
/*                 });*/
/* */
/*             {% endfor %}*/
/*         }*/
/* */
/*         function procesar()*/
/*         {*/
/*             {% for i in 1..4 %}*/
/*                 var x=$("#ind-{{i}}");*/
/*                 var y=$("#resultado-{{i}}");*/
/*                 y.text(x.val()/(4/0.4));*/
/*             {% endfor %}*/
/*             {% for i in 5..6 %}*/
/*                 var x=$("#ind-{{i}}");*/
/*                 var y=$("#resultado-{{i}}");*/
/*                 y.text(x.val()/(2/0.6));*/
/*             {% endfor %}*/
/*             var y=$("#resultado-7");*/
/*             y.text((eval($("#ind-1").val())+eval($("#ind-2").val())+eval($("#ind-3").val())+eval($("#ind-4").val()))*2);*/
/*             var y=$("#resultado-8");*/
/*             y.text((eval($("#ind-5").val())+eval($("#ind-6").val()))*6);*/
/*             var y=$("#resultado-9");*/
/*             y.val((eval($("#resultado-7").text())+eval($("#resultado-8").text())));*/
/*             */
/*             */
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
