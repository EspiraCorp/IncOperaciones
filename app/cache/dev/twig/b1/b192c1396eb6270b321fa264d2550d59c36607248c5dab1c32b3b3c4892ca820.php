<?php

/* IncentivesRedencionesBundle:Redencion:listadoprograma.html.twig */
class __TwigTemplate_20f72bb9f07162a658e42fc9af5bf2c91b2f3023ee6dafd1b23431ba63aaabc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:listadoprograma.html.twig", 1);
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
        $__internal_64f26f7f8b00c0180e98f9c5d1f688c2353f221ea41186197cb29d187b9a47b5 = $this->env->getExtension("native_profiler");
        $__internal_64f26f7f8b00c0180e98f9c5d1f688c2353f221ea41186197cb29d187b9a47b5->enter($__internal_64f26f7f8b00c0180e98f9c5d1f688c2353f221ea41186197cb29d187b9a47b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:listadoprograma.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f26f7f8b00c0180e98f9c5d1f688c2353f221ea41186197cb29d187b9a47b5->leave($__internal_64f26f7f8b00c0180e98f9c5d1f688c2353f221ea41186197cb29d187b9a47b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b94692f1b281f7721ac1fed63628628e56b4aa458ea4cbee2659aaf8222555e8 = $this->env->getExtension("native_profiler");
        $__internal_b94692f1b281f7721ac1fed63628628e56b4aa458ea4cbee2659aaf8222555e8->enter($__internal_b94692f1b281f7721ac1fed63628628e56b4aa458ea4cbee2659aaf8222555e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones por programa";
        
        $__internal_b94692f1b281f7721ac1fed63628628e56b4aa458ea4cbee2659aaf8222555e8->leave($__internal_b94692f1b281f7721ac1fed63628628e56b4aa458ea4cbee2659aaf8222555e8_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ce912855dbcb4eef62c3a80ebfc1302679b12933f101f403fc041a87c1d62ed3 = $this->env->getExtension("native_profiler");
        $__internal_ce912855dbcb4eef62c3a80ebfc1302679b12933f101f403fc041a87c1d62ed3->enter($__internal_ce912855dbcb4eef62c3a80ebfc1302679b12933f101f403fc041a87c1d62ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_ce912855dbcb4eef62c3a80ebfc1302679b12933f101f403fc041a87c1d62ed3->leave($__internal_ce912855dbcb4eef62c3a80ebfc1302679b12933f101f403fc041a87c1d62ed3_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_94f6d6a1b5949ada9c8e367e1313362d64b5b8e7f35e8fde5f3b0e8715f968a5 = $this->env->getExtension("native_profiler");
        $__internal_94f6d6a1b5949ada9c8e367e1313362d64b5b8e7f35e8fde5f3b0e8715f968a5->enter($__internal_94f6d6a1b5949ada9c8e367e1313362d64b5b8e7f35e8fde5f3b0e8715f968a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Redenciones por programa</h2>
      <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("redenciones");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
      <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redenciones_exportar", array("programa" => (isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")))), "html", null, true);
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
                      <table id=\"redenciones\" class=\"table table-bordered table-striped\">
                           <form action=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("redenciones_programa");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "html", null, true);
            echo "\"  enctype=\"multipart/form-data\" method=\"POST\" class=\"form-horizontal\">
                            <div class=\"box-icon\">
                              <input type=\"submit\" value=\"Buscar\" class='btn btn-primary'>
                            </div>
                        <thead style=\"display:table-row-group;\">
                          <tr>
                            <th>";
            // line 34
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Codigo", "r.codigoredencion");
            echo "</th>
                            <th>";
            // line 35
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Participante", "pt.nombre");
            echo "</th>
                            <th>";
            // line 36
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Documento", "pt.documento");
            echo "</th>
                            <th>";
            // line 37
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Producto", "p.nombre");
            echo "</th>
                            <th>";
            // line 38
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Puntos", "r.puntos");
            echo "</th>
                            <th>";
            // line 39
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Estado", "e.id");
            echo "</th>
                            <th>";
            // line 40
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Guia", "g.guia");
            echo "</th>
                            <th>";
            // line 41
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Fecha", "r.fecha");
            echo "</th>
                          </tr>
                          <tr>
                            <th><input type=\"text\" id=\"redenciones_codigo\" name=\"redenciones[codigoredencion]\"  style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_participante\" name=\"redenciones[nombre]\" style=\"width: 150px\"></th>
                              <th><input type=\"text\" id=\"redenciones_documento\" name=\"redenciones[documento]\"  style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_producto\" name=\"redenciones[producto]\"  style=\"width: 200px\"></th>
                              <th><input type=\"text\" id=\"redenciones_puntos\" name=\"redenciones[puntos]\"  style=\"width: 100px\"></th>
                              <th>";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "redencionestado", array()), 'widget', array("attr" => array("style" => "width:100px")));
            echo "</th>
                              <th><input type=\"text\" id=\"redenciones_guia\" name=\"redenciones[guia]\" style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_fecha\" name=\"redenciones[fecha]\"  style=\"width: 100px\"></th>
                          </tr>
                        </thead>
                        </form>
                        <tbody>
                          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
                // line 57
                echo "                          <tr>
                            <td><a href=\"";
                // line 58
                echo $this->env->getExtension('routing')->getPath("redenciones_datosredencion");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "codigoredencion", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "nombre", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "documento", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "puntos", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redencionestado", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>
                                  ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["redencion"], "despacho", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["despacho"]) {
                    // line 66
                    echo "                                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["despacho"], "despachoguia", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["despachoguia"]) {
                        // line 67
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["despacho"], "despachoguia", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["guia"]) {
                            // line 68
                            echo "                                          ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["guia"], "guia", array()), "guia", array()), "html", null, true);
                            echo " - 
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guia'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 70
                        echo "                                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['despachoguia'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['despacho'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                              </td>
                            <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redencion"], "fecha", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                          </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                        </tbody>
                      </table>
                    </div>
            </div>
            ";
        } else {
            // line 81
            echo "            <div class=\"alert alert-info\">
                      No existen redenciones asociadas al programa
                    </div>
            ";
        }
        // line 85
        echo "\t\t</div>
\t\t<div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 88
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getTotalItemCount", array()), "html", null, true);
        echo " Redenciones
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 91
        echo $this->env->getExtension('knp_pagination')->render((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        echo "                    
                </div>
        </div>
    </div>
\t</div>
</div>
";
        
        $__internal_94f6d6a1b5949ada9c8e367e1313362d64b5b8e7f35e8fde5f3b0e8715f968a5->leave($__internal_94f6d6a1b5949ada9c8e367e1313362d64b5b8e7f35e8fde5f3b0e8715f968a5_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36ef8e0e2155e325fc75af5e2445e03c9daac44599a188d443d8cbd8f22459bf = $this->env->getExtension("native_profiler");
        $__internal_36ef8e0e2155e325fc75af5e2445e03c9daac44599a188d443d8cbd8f22459bf->enter($__internal_36ef8e0e2155e325fc75af5e2445e03c9daac44599a188d443d8cbd8f22459bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "
";
        // line 101
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  
  </script>

";
        
        $__internal_36ef8e0e2155e325fc75af5e2445e03c9daac44599a188d443d8cbd8f22459bf->leave($__internal_36ef8e0e2155e325fc75af5e2445e03c9daac44599a188d443d8cbd8f22459bf_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:listadoprograma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 101,  292 => 100,  286 => 99,  272 => 91,  262 => 88,  257 => 85,  251 => 81,  244 => 76,  235 => 73,  232 => 72,  226 => 71,  220 => 70,  211 => 68,  206 => 67,  201 => 66,  197 => 65,  192 => 63,  188 => 62,  184 => 61,  180 => 60,  176 => 59,  168 => 58,  165 => 57,  161 => 56,  151 => 49,  140 => 41,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  101 => 28,  96 => 25,  94 => 24,  84 => 17,  78 => 14,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Redenciones por programa{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Redenciones por programa</h2>*/
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('redenciones') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/*       <a href="{{ path('redenciones_exportar', {"programa": programa}) }}" title="Descargar">*/
/*             <button class="btn btn-small">*/
/*               <i class="icon-download"></i>*/
/*             </button>*/
/*           </a>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {% if redenciones!=null %}*/
/* 			<div id="dashboard">                  */
/*          <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="redenciones" class="table table-bordered table-striped">*/
/*                            <form action="{{ path('redenciones_programa') }}/{{ programa }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">*/
/*                             <div class="box-icon">*/
/*                               <input type="submit" value="Buscar" class='btn btn-primary'>*/
/*                             </div>*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Codigo', 'r.codigoredencion') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Participante', 'pt.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Documento', 'pt.documento') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Producto', 'p.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Puntos', 'r.puntos') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Estado', 'e.id') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Guia', 'g.guia') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Fecha', 'r.fecha') }}</th>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th><input type="text" id="redenciones_codigo" name="redenciones[codigoredencion]"  style="width: 100px"></th>*/
/*                               <th><input type="text" id="redenciones_participante" name="redenciones[nombre]" style="width: 150px"></th>*/
/*                               <th><input type="text" id="redenciones_documento" name="redenciones[documento]"  style="width: 100px"></th>*/
/*                               <th><input type="text" id="redenciones_producto" name="redenciones[producto]"  style="width: 200px"></th>*/
/*                               <th><input type="text" id="redenciones_puntos" name="redenciones[puntos]"  style="width: 100px"></th>*/
/*                               <th>{{ form_widget(form.redencionestado, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                               <th><input type="text" id="redenciones_guia" name="redenciones[guia]" style="width: 100px"></th>*/
/*                               <th><input type="text" id="redenciones_fecha" name="redenciones[fecha]"  style="width: 100px"></th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         </form>*/
/*                         <tbody>*/
/*                           {% for redencion in redenciones %}*/
/*                           <tr>*/
/*                             <td><a href="{{ path("redenciones_datosredencion") }}/{{redencion.id }}">{{ redencion.codigoredencion }}</a></td>*/
/*                             <td>{{ redencion.participante.nombre }}</a></td>*/
/*                             <td>{{ redencion.participante.documento }}</a></td>*/
/*                             <td>{{ redencion.productocatalogo.producto.nombre }}</td>*/
/*                             <td>{{ redencion.puntos }}</a></td>*/
/*                             <td>{{ redencion.redencionestado.nombre }}</td>*/
/*                             <td>*/
/*                                   {% for despacho in redencion.despacho %}*/
/*                                       {% for despachoguia in despacho.despachoguia %}*/
/*                                         {% for guia in despacho.despachoguia %}*/
/*                                           {{ guia.guia.guia }} - */
/*                                         {% endfor %}*/
/*                                       {% endfor %}*/
/*                                   {% endfor %}*/
/*                               </td>*/
/*                             <td>{{ redencion.fecha | date("Y-m-d") }}</td>*/
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
/* 		<div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ redenciones.getItemNumberPerPage*(redenciones.getCurrentPageNumber-1)+1  }} a {{ redenciones.getItemNumberPerPage*redenciones.getCurrentPageNumber }} de {{ redenciones.getTotalItemCount }} Redenciones*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(redenciones) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/*   */
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
