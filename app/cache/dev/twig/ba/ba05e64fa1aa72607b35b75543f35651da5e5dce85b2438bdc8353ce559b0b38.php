<?php

/* IncentivesInventarioBundle:Inventario:cierredetalle.html.twig */
class __TwigTemplate_aee5ee1511a2c6d76acd95fc6522684bd260a60c4372174efe9e5470af0ac2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:cierredetalle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7b7981a878b49748e1f0a90e9cb9c4ae1f80bacbb86ad2f11a2ddafdc582ad2 = $this->env->getExtension("native_profiler");
        $__internal_e7b7981a878b49748e1f0a90e9cb9c4ae1f80bacbb86ad2f11a2ddafdc582ad2->enter($__internal_e7b7981a878b49748e1f0a90e9cb9c4ae1f80bacbb86ad2f11a2ddafdc582ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:cierredetalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7b7981a878b49748e1f0a90e9cb9c4ae1f80bacbb86ad2f11a2ddafdc582ad2->leave($__internal_e7b7981a878b49748e1f0a90e9cb9c4ae1f80bacbb86ad2f11a2ddafdc582ad2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_274631402292fbef5f4bfa970a6d28281cfbb73b7e0381dfa7f76835bf3b03ab = $this->env->getExtension("native_profiler");
        $__internal_274631402292fbef5f4bfa970a6d28281cfbb73b7e0381dfa7f76835bf3b03ab->enter($__internal_274631402292fbef5f4bfa970a6d28281cfbb73b7e0381dfa7f76835bf3b03ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Planilla ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
        
        $__internal_274631402292fbef5f4bfa970a6d28281cfbb73b7e0381dfa7f76835bf3b03ab->leave($__internal_274631402292fbef5f4bfa970a6d28281cfbb73b7e0381dfa7f76835bf3b03ab_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_5fac1bcdf253a190160937fb874c7c39c5156a0c4298c9d3143fcc536ed6f422 = $this->env->getExtension("native_profiler");
        $__internal_5fac1bcdf253a190160937fb874c7c39c5156a0c4298c9d3143fcc536ed6f422->enter($__internal_5fac1bcdf253a190160937fb874c7c39c5156a0c4298c9d3143fcc536ed6f422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
    <div class=\"box span12\">
        <div class=\"box-header well\" data-original-title>
            <h2><i class=\"icon-edit\"></i>Planilla ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
        echo "</h2>
            \t<div class=\"box-icon\">
            \t    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(""), "html", null, true);
        echo "Planillas/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "ruta", array()), "html", null, true);
        echo "\"  class=\"btn btn-info\" target=\"_blank\">
    \t\t\t\t\t<i class=\"icon-download-alt icon-white\"></i>
    \t\t\t\t</a>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("inventario_planilla_cierre");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
        </div>
        <div class=\"box-content\">
            <table class=\"table table-bordered table-striped\">
                <tr>
                    <th>ID</th>
                    <th>Redención</th>
                    <th>Programa</th>
                    <th>Participante</th>
                    <th>Producto</th>
                    <th>Guia</th>
                    <th>Operador</th>
                    <th>Valor</th>
                    <th>Fecha</th>
                    <th>N° Dias</th>
                </tr>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guias"]) ? $context["guias"] : $this->getContext($context, "guias")));
        foreach ($context['_seq'] as $context["_key"] => $context["guia"]) {
            // line 32
            echo "                    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guia"], "id", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("inventario_planilla_cierre_entrega");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guia"], "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planilla"]) ? $context["planilla"] : $this->getContext($context, "planilla")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["guia"], "inventario", array()), "redencion", array()), "codigoredencion", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["guia"], "inventario", array()), "redencion", array()), "participante", array()), "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["guia"], "inventario", array()), "redencion", array()), "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["guia"], "inventario", array()), "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["guia"], "guia", array()), "guia", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["guia"], "guia", array()), "operador", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["guia"], "guia", array()), "valor", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["guia"], "guia", array()), "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["guia"], "guia", array()), "fecha", array())), "diff", array(0 => twig_date_converter($this->env)), "method");
            // line 42
            echo "                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "%a días"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </table>
        </div>
    </div>
</div>
";
        
        $__internal_5fac1bcdf253a190160937fb874c7c39c5156a0c4298c9d3143fcc536ed6f422->leave($__internal_5fac1bcdf253a190160937fb874c7c39c5156a0c4298c9d3143fcc536ed6f422_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:cierredetalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  141 => 42,  139 => 41,  135 => 40,  131 => 39,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  101 => 33,  96 => 32,  92 => 31,  72 => 14,  64 => 11,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Planilla {{ planilla.id }}{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/*     <div class="box span12">*/
/*         <div class="box-header well" data-original-title>*/
/*             <h2><i class="icon-edit"></i>Planilla {{ planilla.id }}</h2>*/
/*             	<div class="box-icon">*/
/*             	    <a href="{{ asset("") }}Planillas/{{ planilla.ruta }}"  class="btn btn-info" target="_blank">*/
/*     					<i class="icon-download-alt icon-white"></i>*/
/*     				</a>*/
/*                     <a href="{{ path('inventario_planilla_cierre') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*         </div>*/
/*         <div class="box-content">*/
/*             <table class="table table-bordered table-striped">*/
/*                 <tr>*/
/*                     <th>ID</th>*/
/*                     <th>Redención</th>*/
/*                     <th>Programa</th>*/
/*                     <th>Participante</th>*/
/*                     <th>Producto</th>*/
/*                     <th>Guia</th>*/
/*                     <th>Operador</th>*/
/*                     <th>Valor</th>*/
/*                     <th>Fecha</th>*/
/*                     <th>N° Dias</th>*/
/*                 </tr>*/
/*                 {% for guia in guias %}*/
/*                     <tr><td>{{ guia.id }}</td>*/
/*                         <td><a href="{{ path("inventario_planilla_cierre_entrega") }}/{{ guia.id }}/{{ planilla.id }}">{{ guia.inventario.redencion.codigoredencion }}</a></td>*/
/*                         <td>{{ guia.inventario.redencion.participante.nombre }}</td>*/
/*                         <td>{{ guia.inventario.redencion.participante.programa.nombre }}</td>*/
/*                         <td>{{ guia.inventario.producto.nombre }}</td>*/
/*                         <td>{{ guia.guia.guia }}</td>*/
/*                         <td>{{ guia.guia.operador }}</td>*/
/*                         <td>{{ guia.guia.valor }}</td>*/
/*                         <td>{{ guia.guia.fecha | date("Y-m-d") }}</td>*/
/*                         <td>{% set difference = date(guia.guia.fecha).diff(date()) %}*/
/*                         {{ difference | date("%a días") }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
