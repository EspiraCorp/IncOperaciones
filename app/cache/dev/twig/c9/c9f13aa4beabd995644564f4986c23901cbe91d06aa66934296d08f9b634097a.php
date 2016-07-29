<?php

/* IncentivesFacturacionBundle:Facturas:generarsegmentado.html.twig */
class __TwigTemplate_0c0e0f9fac5c06c202029680a4ef3bc416ff8416febc2d3b8c0646f9cda9c2f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Facturas:generarsegmentado.html.twig", 1);
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
        $__internal_dc3aba5787111c9bbc08369ade447f49f18eb8a5f71a9d552c0af4a458adfbbb = $this->env->getExtension("native_profiler");
        $__internal_dc3aba5787111c9bbc08369ade447f49f18eb8a5f71a9d552c0af4a458adfbbb->enter($__internal_dc3aba5787111c9bbc08369ade447f49f18eb8a5f71a9d552c0af4a458adfbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:generarsegmentado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3aba5787111c9bbc08369ade447f49f18eb8a5f71a9d552c0af4a458adfbbb->leave($__internal_dc3aba5787111c9bbc08369ade447f49f18eb8a5f71a9d552c0af4a458adfbbb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_713d7db5cf30402297c5becf5a4ed6a2a835194a6cc21402e076af8bd4a69c2c = $this->env->getExtension("native_profiler");
        $__internal_713d7db5cf30402297c5becf5a4ed6a2a835194a6cc21402e076af8bd4a69c2c->enter($__internal_713d7db5cf30402297c5becf5a4ed6a2a835194a6cc21402e076af8bd4a69c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Facturas";
        
        $__internal_713d7db5cf30402297c5becf5a4ed6a2a835194a6cc21402e076af8bd4a69c2c->leave($__internal_713d7db5cf30402297c5becf5a4ed6a2a835194a6cc21402e076af8bd4a69c2c_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_e2122f2e29df3cb95a91c2260f6af9f29b9978c4fbb444b047d97bc9dc0dd435 = $this->env->getExtension("native_profiler");
        $__internal_e2122f2e29df3cb95a91c2260f6af9f29b9978c4fbb444b047d97bc9dc0dd435->enter($__internal_e2122f2e29df3cb95a91c2260f6af9f29b9978c4fbb444b047d97bc9dc0dd435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Generar Facturas</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("facturacion_listado");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">

    <table class=\"table table-bordered table-striped\">
        <tr>
            <th colspan=\"6\"><h3>Redenciones</h3></th>
        <tr>
        <tr>
            <th>País</th>
            <th>Programa</th>
            <th>Cantidad</th>
            <th>Fecha Inicial</th>
            <th>Ultima Fecha</th>
            <th></th>
        </tr>
        ";
        // line 28
        $context["i"] = 0;
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
            // line 30
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 31
            echo "            <tr><td width=\"200px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "pais", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "programa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "total", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "fechaInicio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "fechaFin", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" onClick=\"post('";
            // line 37
            echo $this->env->getExtension('routing')->getPath("factura_redencionesgenerar");
            echo "', {pais: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "idpais", array()), "html", null, true);
            echo ", programa: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "idPrograma", array()), "html", null, true);
            echo "})\">Generar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </table>
    
    <table class=\"table table-bordered table-striped\">
        <tr>
            <th colspan=\"6\"><h3>Solicitudes</h3></th>
        <tr>
        <tr>
            <th>Programa</th>
            <th></th>
        </tr>
        ";
        // line 51
        $context["i"] = 0;
        // line 52
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 53
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 54
            echo "            <tr><td><a id=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" onClick=\"detalle('";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "')\" class=\"btn btn-success\">+</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "programa", array()), "html", null, true);
            echo "</td>
                <td width=\"100px\">
                    <a class=\"btn btn-info\" onClick=\"post('";
            // line 56
            echo $this->env->getExtension('routing')->getPath("factura_requisicionesgenerar");
            echo "', {programa: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "idPrograma", array()), "html", null, true);
            echo "})\">Generar</a>
                </td>
            </tr>
            <tr id=\"detalle_";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"hide\">
\t\t\t\t<td colspan=\"2\">
                    <div>";
            // line 61
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesFacturacionBundle:Facturas:detalleFacturaSolicitudes", array("programa" => $this->getAttribute($context["solicitud"], "idPrograma", array()))));
            echo "</div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </table>
    
    
    <table class=\"table table-bordered table-striped\">
        <tr>
            <th colspan=\"6\"><h3>Logistica</h3></th>
        <tr>
        <tr>
            <th>País</th>
            <th>Programa</th>
            <th>Cantidad</th>
            <th></th>
        </tr>
        ";
        // line 78
        $context["i"] = 0;
        // line 79
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logisticas"]) ? $context["logisticas"] : $this->getContext($context, "logisticas")));
        foreach ($context['_seq'] as $context["_key"] => $context["logistica"]) {
            // line 80
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 81
            echo "            <tr><td width=\"200px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["logistica"], "pais", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["logistica"], "programa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["logistica"], "total", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" onClick=\"post('";
            // line 85
            echo $this->env->getExtension('routing')->getPath("factura_logisticagenerar");
            echo "')\">Generar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logistica'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </table>
</div>
</div>
 </div>
";
        
        $__internal_e2122f2e29df3cb95a91c2260f6af9f29b9978c4fbb444b047d97bc9dc0dd435->leave($__internal_e2122f2e29df3cb95a91c2260f6af9f29b9978c4fbb444b047d97bc9dc0dd435_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a50bdf6e9d43b761fbe3ff0971638e9c1de4688e60ad88812abfaaa8450f61ec = $this->env->getExtension("native_profiler");
        $__internal_a50bdf6e9d43b761fbe3ff0971638e9c1de4688e60ad88812abfaaa8450f61ec->enter($__internal_a50bdf6e9d43b761fbe3ff0971638e9c1de4688e60ad88812abfaaa8450f61ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    function post(path, parameters) {
        var form = \$('<form></form>');
    
        form.attr(\"method\", \"post\");
        form.attr(\"action\", path);
    
        \$.each(parameters, function(key, value) {
            var field = \$('<input></input>');
    
            field.attr(\"type\", \"hidden\");
            field.attr(\"name\", key);
            field.attr(\"value\", value);
            form.append(field);
        });
    
        // The form needs to be a part of the document in
        // order for us to be able to submit it.
        \$(document.body).append(form);
        form.submit();
    }

    function detalle(id){
        \$('#detalle_'+id).toggle();
    }
  </script>
";
        
        $__internal_a50bdf6e9d43b761fbe3ff0971638e9c1de4688e60ad88812abfaaa8450f61ec->leave($__internal_a50bdf6e9d43b761fbe3ff0971638e9c1de4688e60ad88812abfaaa8450f61ec_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:generarsegmentado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 96,  242 => 95,  231 => 89,  221 => 85,  216 => 83,  212 => 82,  207 => 81,  204 => 80,  199 => 79,  197 => 78,  182 => 65,  172 => 61,  167 => 59,  159 => 56,  149 => 54,  146 => 53,  141 => 52,  139 => 51,  127 => 41,  113 => 37,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  91 => 31,  88 => 30,  83 => 29,  81 => 28,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Generar Facturas{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Generar Facturas</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('facturacion_listado') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <tr>*/
/*             <th colspan="6"><h3>Redenciones</h3></th>*/
/*         <tr>*/
/*         <tr>*/
/*             <th>País</th>*/
/*             <th>Programa</th>*/
/*             <th>Cantidad</th>*/
/*             <th>Fecha Inicial</th>*/
/*             <th>Ultima Fecha</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% set i=0 %}*/
/*         {% for redencion in redenciones %}*/
/*             {% set i=i+1 %}*/
/*             <tr><td width="200px">{{ redencion.pais }}</td>*/
/*                 <td>{{ redencion.programa }}</td>*/
/*                 <td>{{ redencion.total }}</td>*/
/*                 <td>{{ redencion.fechaInicio }}</td>*/
/*                 <td>{{ redencion.fechaFin }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" onClick="post('{{ path('factura_redencionesgenerar') }}', {pais: {{ redencion.idpais }}, programa: {{ redencion.idPrograma }}})">Generar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     */
/*     <table class="table table-bordered table-striped">*/
/*         <tr>*/
/*             <th colspan="6"><h3>Solicitudes</h3></th>*/
/*         <tr>*/
/*         <tr>*/
/*             <th>Programa</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% set i=0 %}*/
/*         {% for solicitud in solicitudes %}*/
/*             {% set i=i+1 %}*/
/*             <tr><td><a id="{{ i }}" onClick="detalle('{{ i }}')" class="btn btn-success">+</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ solicitud.programa }}</td>*/
/*                 <td width="100px">*/
/*                     <a class="btn btn-info" onClick="post('{{ path('factura_requisicionesgenerar') }}', {programa: {{ solicitud.idPrograma }}})">Generar</a>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr id="detalle_{{ i }}" class="hide">*/
/* 				<td colspan="2">*/
/*                     <div>{{ render(controller('IncentivesFacturacionBundle:Facturas:detalleFacturaSolicitudes', { 'programa': solicitud.idPrograma })) }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     */
/*     */
/*     <table class="table table-bordered table-striped">*/
/*         <tr>*/
/*             <th colspan="6"><h3>Logistica</h3></th>*/
/*         <tr>*/
/*         <tr>*/
/*             <th>País</th>*/
/*             <th>Programa</th>*/
/*             <th>Cantidad</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% set i=0 %}*/
/*         {% for logistica in logisticas %}*/
/*             {% set i=i+1 %}*/
/*             <tr><td width="200px">{{ logistica.pais }}</td>*/
/*                 <td>{{ logistica.programa }}</td>*/
/*                 <td>{{ logistica.total }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" onClick="post('{{ path('factura_logisticagenerar') }}')">Generar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*   <script>*/
/*     function post(path, parameters) {*/
/*         var form = $('<form></form>');*/
/*     */
/*         form.attr("method", "post");*/
/*         form.attr("action", path);*/
/*     */
/*         $.each(parameters, function(key, value) {*/
/*             var field = $('<input></input>');*/
/*     */
/*             field.attr("type", "hidden");*/
/*             field.attr("name", key);*/
/*             field.attr("value", value);*/
/*             form.append(field);*/
/*         });*/
/*     */
/*         // The form needs to be a part of the document in*/
/*         // order for us to be able to submit it.*/
/*         $(document.body).append(form);*/
/*         form.submit();*/
/*     }*/
/* */
/*     function detalle(id){*/
/*         $('#detalle_'+id).toggle();*/
/*     }*/
/*   </script>*/
/* {% endblock %}*/
/* */
