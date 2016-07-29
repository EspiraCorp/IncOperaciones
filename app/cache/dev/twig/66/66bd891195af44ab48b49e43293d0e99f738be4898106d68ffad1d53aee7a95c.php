<?php

/* IncentivesInventarioBundle:Inventario:planillacierre.html.twig */
class __TwigTemplate_3b43c694806584c489462b2af748052aee1dc39b117fbbb5b725b24eb1c864cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:planillacierre.html.twig", 1);
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
        $__internal_45d4c76e96c0cbcfccff8b106ffaf706dec75a4c7c4d3e8226db02b4534d1f7e = $this->env->getExtension("native_profiler");
        $__internal_45d4c76e96c0cbcfccff8b106ffaf706dec75a4c7c4d3e8226db02b4534d1f7e->enter($__internal_45d4c76e96c0cbcfccff8b106ffaf706dec75a4c7c4d3e8226db02b4534d1f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:planillacierre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45d4c76e96c0cbcfccff8b106ffaf706dec75a4c7c4d3e8226db02b4534d1f7e->leave($__internal_45d4c76e96c0cbcfccff8b106ffaf706dec75a4c7c4d3e8226db02b4534d1f7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6db19c5acb7092dc347927811c93cc5facb75e06f46f9c257af6abbc7e8ab5b8 = $this->env->getExtension("native_profiler");
        $__internal_6db19c5acb7092dc347927811c93cc5facb75e06f46f9c257af6abbc7e8ab5b8->enter($__internal_6db19c5acb7092dc347927811c93cc5facb75e06f46f9c257af6abbc7e8ab5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cierre de Planillas";
        
        $__internal_6db19c5acb7092dc347927811c93cc5facb75e06f46f9c257af6abbc7e8ab5b8->leave($__internal_6db19c5acb7092dc347927811c93cc5facb75e06f46f9c257af6abbc7e8ab5b8_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_b3e673ba6a0a86efe8cc83e1678ce7dc5d5ce87d46a3262aee323621366911a5 = $this->env->getExtension("native_profiler");
        $__internal_b3e673ba6a0a86efe8cc83e1678ce7dc5d5ce87d46a3262aee323621366911a5->enter($__internal_b3e673ba6a0a86efe8cc83e1678ce7dc5d5ce87d46a3262aee323621366911a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
    <div class=\"box span12\">
        <div class=\"box-header well\" data-original-title>
            <h2><i class=\"icon-edit\"></i>Cierre de Planillas</h2>
        </div>
        <div class=\"box-content\">
            <table class=\"table table-bordered table-striped\">
                <tr>
                    <th>Planilla</th>
                    <th>Fecha Generación</th>
                    <th>Cantidad Pendiente</th>
                </tr>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")));
        foreach ($context['_seq'] as $context["_key"] => $context["planilla"]) {
            // line 19
            echo "                    <tr><td><a href=\"";
            echo $this->env->getExtension('routing')->getPath("inventario_planilla_cierre_detalle");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], 0, array(), "array"), "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "total", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planilla'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </table>
        </div>
        <div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")), "getTotalItemCount", array()), "html", null, true);
        echo "   Planillas
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 31
        echo $this->env->getExtension('knp_pagination')->render((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")));
        echo "                    
                </div>
        </div>
    </div>
    </div>
</div>
";
        
        $__internal_b3e673ba6a0a86efe8cc83e1678ce7dc5d5ce87d46a3262aee323621366911a5->leave($__internal_b3e673ba6a0a86efe8cc83e1678ce7dc5d5ce87d46a3262aee323621366911a5_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:planillacierre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  99 => 28,  93 => 24,  84 => 21,  80 => 20,  71 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Cierre de Planillas{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/*     <div class="box span12">*/
/*         <div class="box-header well" data-original-title>*/
/*             <h2><i class="icon-edit"></i>Cierre de Planillas</h2>*/
/*         </div>*/
/*         <div class="box-content">*/
/*             <table class="table table-bordered table-striped">*/
/*                 <tr>*/
/*                     <th>Planilla</th>*/
/*                     <th>Fecha Generación</th>*/
/*                     <th>Cantidad Pendiente</th>*/
/*                 </tr>*/
/*                 {% for planilla in planillas %}*/
/*                     <tr><td><a href="{{ path("inventario_planilla_cierre_detalle") }}/{{ planilla[0].id }}">{{ planilla[0].id }}</a></td>*/
/*                         <td>{{ planilla[0].fecha | date("Y-m-d") }}</td>*/
/*                         <td>{{ planilla.total }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*         <div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ planillas.getItemNumberPerPage*(planillas.getCurrentPageNumber-1)+1  }} a {{ planillas.getItemNumberPerPage*planillas.getCurrentPageNumber }} de {{ planillas.getTotalItemCount }}   Planillas*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(planillas) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
