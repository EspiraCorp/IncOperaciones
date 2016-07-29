<?php

/* IncentivesOrdenesBundle:OrdenRedencion:generarsegmentado.html.twig */
class __TwigTemplate_27e82221797b44321b08406038b7c2ac1de6970eca5a1fd16ad232abbaef8ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:OrdenRedencion:generarsegmentado.html.twig", 1);
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
        $__internal_ec9019a1515f1c4ae98d174a51f98881b2afcf034d9cd52ef773450cb74ab34b = $this->env->getExtension("native_profiler");
        $__internal_ec9019a1515f1c4ae98d174a51f98881b2afcf034d9cd52ef773450cb74ab34b->enter($__internal_ec9019a1515f1c4ae98d174a51f98881b2afcf034d9cd52ef773450cb74ab34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:OrdenRedencion:generarsegmentado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec9019a1515f1c4ae98d174a51f98881b2afcf034d9cd52ef773450cb74ab34b->leave($__internal_ec9019a1515f1c4ae98d174a51f98881b2afcf034d9cd52ef773450cb74ab34b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d0bd502cdb060e70f24f9d9e7e01a214459c2a8601e99688263b97da57aecbb = $this->env->getExtension("native_profiler");
        $__internal_9d0bd502cdb060e70f24f9d9e7e01a214459c2a8601e99688263b97da57aecbb->enter($__internal_9d0bd502cdb060e70f24f9d9e7e01a214459c2a8601e99688263b97da57aecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Ordenes";
        
        $__internal_9d0bd502cdb060e70f24f9d9e7e01a214459c2a8601e99688263b97da57aecbb->leave($__internal_9d0bd502cdb060e70f24f9d9e7e01a214459c2a8601e99688263b97da57aecbb_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_3b2f01e61fcfc0473918974ca8d0de1e06808921bb123979cd7897145af29658 = $this->env->getExtension("native_profiler");
        $__internal_3b2f01e61fcfc0473918974ca8d0de1e06808921bb123979cd7897145af29658->enter($__internal_3b2f01e61fcfc0473918974ca8d0de1e06808921bb123979cd7897145af29658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Generar Ordenes</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ordenes");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">

    <table class=\"table table-bordered table-striped\">
        <tr>
            <th>País</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th></th>
        </tr>
        ";
        // line 23
        $context["i"] = 0;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 25
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 26
            echo "            <tr><td width=\"200px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "productocatalogo", array()), "catalogos", array()), "pais", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "productocatalogo", array()), "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "total", array()), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" onClick=\"detalle('";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "')\" class=\"btn btn-success\">+</a></td>
                <td>
                    <a class=\"btn btn-info\" onClick=\"post('";
            // line 30
            echo $this->env->getExtension('routing')->getPath("ordenes_generarsegmentado");
            echo "', {pais:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "productocatalogo", array()), "catalogos", array()), "pais", array()), "id", array()), "html", null, true);
            echo ", categoria: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "productocatalogo", array()), "producto", array()), "categoria", array()), "id", array()), "html", null, true);
            echo "})\">Generar</a>
                </td>
            </tr>
            <tr id=\"detalle_";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"hide\">
                <td></td>
\t\t\t\t<td colspan=\"3\">
                    <div>";
            // line 36
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesOrdenesBundle:OrdenRedencion:detalleSegmentado", array("categoria" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "productocatalogo", array()), "producto", array()), "categoria", array()), "id", array()), "pais" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "productocatalogo", array()), "catalogos", array()), "pais", array()), "id", array()))));
            echo "</div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </table>
</div>
</div>
 </div>
";
        
        $__internal_3b2f01e61fcfc0473918974ca8d0de1e06808921bb123979cd7897145af29658->leave($__internal_3b2f01e61fcfc0473918974ca8d0de1e06808921bb123979cd7897145af29658_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1052db26e79be50c44118e610b9fae8872313a607af2024946cfa30901324c4 = $this->env->getExtension("native_profiler");
        $__internal_f1052db26e79be50c44118e610b9fae8872313a607af2024946cfa30901324c4->enter($__internal_f1052db26e79be50c44118e610b9fae8872313a607af2024946cfa30901324c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
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
        
        $__internal_f1052db26e79be50c44118e610b9fae8872313a607af2024946cfa30901324c4->leave($__internal_f1052db26e79be50c44118e610b9fae8872313a607af2024946cfa30901324c4_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:OrdenRedencion:generarsegmentado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 47,  141 => 46,  130 => 40,  120 => 36,  114 => 33,  104 => 30,  95 => 28,  91 => 27,  86 => 26,  83 => 25,  78 => 24,  76 => 23,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Generar Ordenes{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Generar Ordenes</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('ordenes') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <tr>*/
/*             <th>País</th>*/
/*             <th>Categoria</th>*/
/*             <th>Cantidad</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% set i=0 %}*/
/*         {% for categoria in redenciones %}*/
/*             {% set i=i+1 %}*/
/*             <tr><td width="200px">{{ categoria[0].productocatalogo.catalogos.pais.nombre }}</td>*/
/*                 <td>{{ categoria[0].productocatalogo.producto.categoria.nombre }}</td>*/
/*                 <td>{{ categoria.total }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="{{ i }}" onClick="detalle('{{ i }}')" class="btn btn-success">+</a></td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" onClick="post('{{ path('ordenes_generarsegmentado') }}', {pais:{{ categoria[0].productocatalogo.catalogos.pais.id }}, categoria: {{ categoria[0].productocatalogo.producto.categoria.id }}})">Generar</a>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr id="detalle_{{ i }}" class="hide">*/
/*                 <td></td>*/
/* 				<td colspan="3">*/
/*                     <div>{{ render(controller('IncentivesOrdenesBundle:OrdenRedencion:detalleSegmentado', { 'categoria': categoria[0].productocatalogo.producto.categoria.id , 'pais': categoria[0].productocatalogo.catalogos.pais.id })) }}</div>*/
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
