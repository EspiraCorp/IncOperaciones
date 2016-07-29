<?php

/* IncentivesRedencionesBundle:Redencion:listadototalpass.html.twig */
class __TwigTemplate_198b58f07737bd872087ad01da8d4b5ca9bfe42547447315c016954456d88f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:listadototalpass.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
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
        $__internal_97dce2d3f1cf38d12cc6970e3fc09a9bdba9c527f8a8185d4418905693c609f4 = $this->env->getExtension("native_profiler");
        $__internal_97dce2d3f1cf38d12cc6970e3fc09a9bdba9c527f8a8185d4418905693c609f4->enter($__internal_97dce2d3f1cf38d12cc6970e3fc09a9bdba9c527f8a8185d4418905693c609f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:listadototalpass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97dce2d3f1cf38d12cc6970e3fc09a9bdba9c527f8a8185d4418905693c609f4->leave($__internal_97dce2d3f1cf38d12cc6970e3fc09a9bdba9c527f8a8185d4418905693c609f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c232ba4836df9ca17a2fbe2587b6228d3a9a60d0b93ffc4adcd37636cf458ba1 = $this->env->getExtension("native_profiler");
        $__internal_c232ba4836df9ca17a2fbe2587b6228d3a9a60d0b93ffc4adcd37636cf458ba1->enter($__internal_c232ba4836df9ca17a2fbe2587b6228d3a9a60d0b93ffc4adcd37636cf458ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones Total Pass";
        
        $__internal_c232ba4836df9ca17a2fbe2587b6228d3a9a60d0b93ffc4adcd37636cf458ba1->leave($__internal_c232ba4836df9ca17a2fbe2587b6228d3a9a60d0b93ffc4adcd37636cf458ba1_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7e3f1af1876676da94b0e5ec0602f3616fac4c27b7404d8e37c2dfb38094b1e3 = $this->env->getExtension("native_profiler");
        $__internal_7e3f1af1876676da94b0e5ec0602f3616fac4c27b7404d8e37c2dfb38094b1e3->enter($__internal_7e3f1af1876676da94b0e5ec0602f3616fac4c27b7404d8e37c2dfb38094b1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_7e3f1af1876676da94b0e5ec0602f3616fac4c27b7404d8e37c2dfb38094b1e3->leave($__internal_7e3f1af1876676da94b0e5ec0602f3616fac4c27b7404d8e37c2dfb38094b1e3_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_f45a4aa8ec1a068200aef96fcacb35202492543c74c7fe298143026861508580 = $this->env->getExtension("native_profiler");
        $__internal_f45a4aa8ec1a068200aef96fcacb35202492543c74c7fe298143026861508580->enter($__internal_f45a4aa8ec1a068200aef96fcacb35202492543c74c7fe298143026861508580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Redenciones Total Pass</h2>
      <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("redenciones_programastotalpass");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
      <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redenciones_exportartotalpass", array("programa" => (isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")))), "html", null, true);
        echo "\" title=\"Descargar\">
            <button class=\"btn btn-small\">
              <i class=\"icon-download\"></i>
            </button>
          </a>
\t\t</div>
\t\t<div class=\"box-content\">
      ";
        // line 24
        if (((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")) != null)) {
            // line 25
            echo "\t\t\t<div id=\"dashboard\">                  
         <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"redenciones\" class=\"display\">
                        <thead>
                          <tr>
                            <td>Id</td>
\t\t\t    <td>Codigo</td>
                            <td>Participante</td>
                            <td>Documento</td>
                            <td>Valor</td>
                            <td>Puntos</td>
                            <td>Codigo TP</td>
                            <td>Respuesta TP</td>
                            <td>Fecha</td>
                            <td>Estado</td>
                          </tr>
                        </thead>
                        <tbody>
                          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
                // line 44
                echo "                            <tr>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "id", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "codigoredencion", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "participante", array(), "array"), "nombre", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "participante", array(), "array"), "documento", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "valor", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "puntos", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "totalPass", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "mensajeTotalPass", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "fecha", array(), "array"), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "redenciones", array(), "array"), "redencionestado", array(), "array"), "nombre", array(), "array"), "html", null, true);
                echo "</td>
                          </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                        </tbody>
                      </table>
                    </div>
            </div>
            ";
        } else {
            // line 62
            echo "            <div class=\"alert alert-info\">
                      No existen redenciones asociadas al programa
                    </div>
            ";
        }
        // line 66
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_f45a4aa8ec1a068200aef96fcacb35202492543c74c7fe298143026861508580->leave($__internal_f45a4aa8ec1a068200aef96fcacb35202492543c74c7fe298143026861508580_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99ba0e2700853a4e745c2deda839b4e188331d638452288fa4423b5098f8db3c = $this->env->getExtension("native_profiler");
        $__internal_99ba0e2700853a4e745c2deda839b4e188331d638452288fa4423b5098f8db3c->enter($__internal_99ba0e2700853a4e745c2deda839b4e188331d638452288fa4423b5098f8db3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "
";
        // line 73
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\">
    \$(document).ready(function() {
          \$('#redenciones').DataTable();
      } );
      
  </script>

";
        
        $__internal_99ba0e2700853a4e745c2deda839b4e188331d638452288fa4423b5098f8db3c->leave($__internal_99ba0e2700853a4e745c2deda839b4e188331d638452288fa4423b5098f8db3c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:listadototalpass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 73,  197 => 72,  191 => 71,  181 => 66,  175 => 62,  168 => 57,  159 => 54,  155 => 53,  151 => 52,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  120 => 44,  116 => 43,  96 => 25,  94 => 24,  84 => 17,  78 => 14,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Redenciones Total Pass{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Redenciones Total Pass</h2>*/
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('redenciones_programastotalpass') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/*       <a href="{{ path('redenciones_exportartotalpass', {"programa": programa }) }}" title="Descargar">*/
/*             <button class="btn btn-small">*/
/*               <i class="icon-download"></i>*/
/*             </button>*/
/*           </a>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {% if redenciones!=null %}*/
/* 			<div id="dashboard">                  */
/*          <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="redenciones" class="display">*/
/*                         <thead>*/
/*                           <tr>*/
/*                             <td>Id</td>*/
/* 			    <td>Codigo</td>*/
/*                             <td>Participante</td>*/
/*                             <td>Documento</td>*/
/*                             <td>Valor</td>*/
/*                             <td>Puntos</td>*/
/*                             <td>Codigo TP</td>*/
/*                             <td>Respuesta TP</td>*/
/*                             <td>Fecha</td>*/
/*                             <td>Estado</td>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for redencion in redenciones %}*/
/*                             <tr>*/
/*                             <td>{{ redencion['redenciones']['id'] }}</td>*/
/* 			    <td>{{ redencion['redenciones']['codigoredencion'] }}</td>*/
/*                             <td>{{ redencion['redenciones']['participante']['nombre'] }}</td>*/
/*                             <td>{{ redencion['redenciones']['participante']['documento'] }}</td>*/
/*                             <td>{{ redencion['redenciones']['valor'] }}</td>*/
/*                             <td>{{ redencion['redenciones']['puntos'] }}</td>*/
/*                             <td>{{ redencion['redenciones']['totalPass'] }}</td>*/
/*                             <td>{{ redencion['redenciones']['mensajeTotalPass'] }}</td>*/
/*                             <td>{{ redencion['redenciones']['fecha'] | date("Y-m-d") }}</td>*/
/*                             <td>{{ redencion['redenciones']['redencionestado']['nombre'] }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                       </table>*/
/*                     </div>*/
/*             </div>*/
/*             {% else %}*/
/*             <div class="alert alert-info">*/
/*                       No existen redenciones asociadas al programa*/
/*                     </div>*/
/*             {% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*           $('#redenciones').DataTable();*/
/*       } );*/
/*       */
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
