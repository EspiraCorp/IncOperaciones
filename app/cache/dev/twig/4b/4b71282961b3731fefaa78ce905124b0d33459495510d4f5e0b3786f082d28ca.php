<?php

/* IncentivesOrdenesBundle:Ordenes:ingresolistado.html.twig */
class __TwigTemplate_02007b00a670021f570e832a588b82a2084398ce0b56d9b7ea0dcd2dedb948e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:Ordenes:ingresolistado.html.twig", 1);
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
        $__internal_68ad0bab64be8311a701b18bc2ea168b258f335458e0baa398ed7024cf02f7d7 = $this->env->getExtension("native_profiler");
        $__internal_68ad0bab64be8311a701b18bc2ea168b258f335458e0baa398ed7024cf02f7d7->enter($__internal_68ad0bab64be8311a701b18bc2ea168b258f335458e0baa398ed7024cf02f7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:ingresolistado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ad0bab64be8311a701b18bc2ea168b258f335458e0baa398ed7024cf02f7d7->leave($__internal_68ad0bab64be8311a701b18bc2ea168b258f335458e0baa398ed7024cf02f7d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e10e94823694c156db13d6c5ad674744190738245cfeac52cfc963c7afff1d1b = $this->env->getExtension("native_profiler");
        $__internal_e10e94823694c156db13d6c5ad674744190738245cfeac52cfc963c7afff1d1b->enter($__internal_e10e94823694c156db13d6c5ad674744190738245cfeac52cfc963c7afff1d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ordenes de compra - Ingresos";
        
        $__internal_e10e94823694c156db13d6c5ad674744190738245cfeac52cfc963c7afff1d1b->leave($__internal_e10e94823694c156db13d6c5ad674744190738245cfeac52cfc963c7afff1d1b_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_95d2d15d1be96d81be0f03eaa9da42c9d41cd2464571f410af00be5dd4dc2fbe = $this->env->getExtension("native_profiler");
        $__internal_95d2d15d1be96d81be0f03eaa9da42c9d41cd2464571f410af00be5dd4dc2fbe->enter($__internal_95d2d15d1be96d81be0f03eaa9da42c9d41cd2464571f410af00be5dd4dc2fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_95d2d15d1be96d81be0f03eaa9da42c9d41cd2464571f410af00be5dd4dc2fbe->leave($__internal_95d2d15d1be96d81be0f03eaa9da42c9d41cd2464571f410af00be5dd4dc2fbe_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_71f9d488c7b8fb077ff2fd893c96b2eef39489cc7e04c4d334b512d5d9623cc0 = $this->env->getExtension("native_profiler");
        $__internal_71f9d488c7b8fb077ff2fd893c96b2eef39489cc7e04c4d334b512d5d9623cc0->enter($__internal_71f9d488c7b8fb077ff2fd893c96b2eef39489cc7e04c4d334b512d5d9623cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Ordenes de compra</h2>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                   <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"ordenes\" class=\"display\">
                        <thead>
                          <tr>
                            <td>Numero</td>
                            <td>Proveedor</td>
                            <td>Pais</td>
                            <td>Fecha solicitud</td>
                            <td>Fecha entrega</td>
                            <td>Cancelado</td>
                            <td>Valor total</td>
                            <td>Tipo</td>
                            <td>Estado</td>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["orden"]) {
            // line 32
            echo "                          <tr>
                            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_ingreso", array("id" => $this->getAttribute($context["orden"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "consecutivo", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "pais", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orden"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orden"], "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            if ($this->getAttribute($context["orden"], "cancelado", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["orden"], "total", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "ordenesTipo", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orden"], "ordenesEstado", array()), "nombre", array()), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orden'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </tbody>
                      </table>
                    </div>      
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_71f9d488c7b8fb077ff2fd893c96b2eef39489cc7e04c4d334b512d5d9623cc0->leave($__internal_71f9d488c7b8fb077ff2fd893c96b2eef39489cc7e04c4d334b512d5d9623cc0_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77ef20b7d61bdaa6e9fd661833aab8e5ebd97d8aa4be5e8368df833c53b16974 = $this->env->getExtension("native_profiler");
        $__internal_77ef20b7d61bdaa6e9fd661833aab8e5ebd97d8aa4be5e8368df833c53b16974->enter($__internal_77ef20b7d61bdaa6e9fd661833aab8e5ebd97d8aa4be5e8368df833c53b16974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "
";
        // line 55
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\">
   \$(document).ready(function() {
          \$('#ordenes').DataTable();
      } );
      
      function confirmar(ruta)
      {
        if (confirm(\"Desea cambiar el estado del producto\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>

";
        
        $__internal_77ef20b7d61bdaa6e9fd661833aab8e5ebd97d8aa4be5e8368df833c53b16974->leave($__internal_77ef20b7d61bdaa6e9fd661833aab8e5ebd97d8aa4be5e8368df833c53b16974_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:ingresolistado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 55,  169 => 54,  163 => 53,  149 => 44,  140 => 41,  136 => 40,  132 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  102 => 33,  99 => 32,  95 => 31,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Ordenes de compra - Ingresos{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Ordenes de compra</h2>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                    <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="ordenes" class="display">*/
/*                         <thead>*/
/*                           <tr>*/
/*                             <td>Numero</td>*/
/*                             <td>Proveedor</td>*/
/*                             <td>Pais</td>*/
/*                             <td>Fecha solicitud</td>*/
/*                             <td>Fecha entrega</td>*/
/*                             <td>Cancelado</td>*/
/*                             <td>Valor total</td>*/
/*                             <td>Tipo</td>*/
/*                             <td>Estado</td>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for orden in listado %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path("ordenes_ingreso", {"id": orden.id}) }}">{{ orden.consecutivo }}</a></td>*/
/*                             <td>{{ orden.proveedor.nombre }}</td>*/
/*                             <td>{{ orden.pais.nombre }}</td>*/
/*                             <td>{{ orden.fechaCreacion | date("Y-m-d") }}</td>*/
/*                             <td>{{ orden.fechaVencimiento | date("Y-m-d") }}</td>*/
/*                             <td>{% if orden.cancelado %}Si{% else %}No{% endif %}</td>*/
/*                             <td>{{ orden.total|number_format(2, ',', '.')  }}</td>*/
/*                             <td>{{ orden.ordenesTipo.nombre }}</td>*/
/*                             <td>{{ orden.ordenesEstado.nombre }}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                       </table>*/
/*                     </div>      */
/*             </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/*   <script type="text/javascript">*/
/*    $(document).ready(function() {*/
/*           $('#ordenes').DataTable();*/
/*       } );*/
/*       */
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado del producto")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
