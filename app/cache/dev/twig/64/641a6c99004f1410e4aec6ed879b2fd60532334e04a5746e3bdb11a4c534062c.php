<?php

/* IncentivesRedencionesBundle:Redencion:listadoCompleto.html.twig */
class __TwigTemplate_a58dc72673fceb7d9aed47c5c3e491bc44dc620a324f0a01b024675ddb9193c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:listadoCompleto.html.twig", 1);
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
        $__internal_446bf40d9ffbe1c30d1eec79f3029c5637f7c84fa5391c81f14b6ee5e303164a = $this->env->getExtension("native_profiler");
        $__internal_446bf40d9ffbe1c30d1eec79f3029c5637f7c84fa5391c81f14b6ee5e303164a->enter($__internal_446bf40d9ffbe1c30d1eec79f3029c5637f7c84fa5391c81f14b6ee5e303164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:listadoCompleto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446bf40d9ffbe1c30d1eec79f3029c5637f7c84fa5391c81f14b6ee5e303164a->leave($__internal_446bf40d9ffbe1c30d1eec79f3029c5637f7c84fa5391c81f14b6ee5e303164a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c47fea89981c413235144bede53187d06d5709df76e459c01070852ae01487c = $this->env->getExtension("native_profiler");
        $__internal_1c47fea89981c413235144bede53187d06d5709df76e459c01070852ae01487c->enter($__internal_1c47fea89981c413235144bede53187d06d5709df76e459c01070852ae01487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones Listado General";
        
        $__internal_1c47fea89981c413235144bede53187d06d5709df76e459c01070852ae01487c->leave($__internal_1c47fea89981c413235144bede53187d06d5709df76e459c01070852ae01487c_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ca7b3b2cccbb307ad092aef66e807f0af2e32821d0742149f6bf7f2b3a25d894 = $this->env->getExtension("native_profiler");
        $__internal_ca7b3b2cccbb307ad092aef66e807f0af2e32821d0742149f6bf7f2b3a25d894->enter($__internal_ca7b3b2cccbb307ad092aef66e807f0af2e32821d0742149f6bf7f2b3a25d894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_ca7b3b2cccbb307ad092aef66e807f0af2e32821d0742149f6bf7f2b3a25d894->leave($__internal_ca7b3b2cccbb307ad092aef66e807f0af2e32821d0742149f6bf7f2b3a25d894_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_9b2ca6225e4e8297e77b15930c5f26619f96accbc3a41f773ce045b9ec609f3f = $this->env->getExtension("native_profiler");
        $__internal_9b2ca6225e4e8297e77b15930c5f26619f96accbc3a41f773ce045b9ec609f3f->enter($__internal_9b2ca6225e4e8297e77b15930c5f26619f96accbc3a41f773ce045b9ec609f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Redenciones Listado General</h2>
      <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("redenciones_exportarcompleto");
        echo "\" title=\"Descargar\">
            <button class=\"btn btn-small\">
              <i class=\"icon-download\"></i>
            </button>
          </a>
\t\t</div>
\t\t<div class=\"box-content\">
      ";
        // line 19
        if (((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")) != null)) {
            // line 20
            echo "\t\t\t<div id=\"dashboard\">                  
         <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"redenciones\" class=\"table table-bordered table-striped\">
                           <form action=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("redenciones_completo");
            echo "\"  enctype=\"multipart/form-data\" method=\"POST\" class=\"form-horizontal\">
                            <div class=\"box-icon\">
                              <input type=\"submit\" value=\"Buscar\" class='btn btn-primary'>
                            </div>
                        <thead style=\"display:table-row-group;\">
                          <tr>
                            <th>";
            // line 29
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Codigo", "r.codigoredencion");
            echo "</th>
                            <th>";
            // line 30
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Participante", "pt.nombre");
            echo "</th>
                            <th>";
            // line 31
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Documento", "pt.documento");
            echo "</th>
                            <th>";
            // line 32
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Programa", "pg.nombre");
            echo "</th>
                            <th>";
            // line 33
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Producto", "p.nombre");
            echo "</th>
                            <th>";
            // line 34
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Puntos", "r.puntos");
            echo "</th>
                            <th>";
            // line 35
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Estado", "e.id");
            echo "</th>
                            <th>";
            // line 36
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Guia", "g.guia");
            echo "</th>
                            <th>";
            // line 37
            echo $this->env->getExtension('knp_pagination')->sortable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "Fecha", "r.fecha");
            echo "</th>
                          </tr>
                          <tr>
                            <th><input type=\"text\" id=\"redenciones_codigo\" name=\"redenciones[codigoredencion]\"  style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_participante\" name=\"redenciones[nombre]\" style=\"width: 150px\"></th>
                              <th><input type=\"text\" id=\"redenciones_documento\" name=\"redenciones[documento]\"  style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_programa\" name=\"redenciones[programa]\"  style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_producto\" name=\"redenciones[producto]\"  style=\"width: 200px\"></th>
                              <th><input type=\"text\" id=\"redenciones_puntos\" name=\"redenciones[puntos]\"  style=\"width: 100px\"></th>
                              <th>";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "redencionestado", array()), 'widget', array("attr" => array("style" => "width:100px")));
            echo "</th>
                              <th><input type=\"text\" id=\"redenciones_guia\" name=\"redenciones[guia]\" style=\"width: 100px\"></th>
                              <th><input type=\"text\" id=\"redenciones_fecha\" name=\"redenciones[fecha]\"  style=\"width: 100px\"></th>
                          </tr>
                        </thead>
                        </form>
                        <tbody>
                          ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
                // line 54
                echo "                          <tr>
                            <td><a href=\"";
                // line 55
                echo $this->env->getExtension('routing')->getPath("redenciones_datosredencion");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "codigoredencion", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "nombre", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "documento", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "productocatalogo", array()), "producto", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "puntos", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "redencionestado", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>
                                  ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["redencion"], "despacho", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["despacho"]) {
                    // line 64
                    echo "                                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["despacho"], "despachoguia", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["despachoguia"]) {
                        // line 65
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["despacho"], "despachoguia", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["guia"]) {
                            // line 66
                            echo "                                          ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["guia"], "guia", array()), "guia", array()), "html", null, true);
                            echo " - 
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guia'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "                                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['despachoguia'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['despacho'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                              </td>
                            <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redencion"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                          </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                        </tbody>
                      </table>
                    </div>
            </div>
            ";
        } else {
            // line 79
            echo "            <div class=\"alert alert-info\">
                      No existen redenciones asociadas al programa
                    </div>
            ";
        }
        // line 83
        echo "\t\t</div>
\t\t<div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 86
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")), "getTotalItemCount", array()), "html", null, true);
        echo " Redenciones
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 89
        echo $this->env->getExtension('knp_pagination')->render((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        echo "                    
                </div>
        </div>
    </div>
\t</div>
</div>
";
        
        $__internal_9b2ca6225e4e8297e77b15930c5f26619f96accbc3a41f773ce045b9ec609f3f->leave($__internal_9b2ca6225e4e8297e77b15930c5f26619f96accbc3a41f773ce045b9ec609f3f_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58def4d7134f59de58b2ec4d9463250649ff84eeb464d98bf4f41c16cb732e83 = $this->env->getExtension("native_profiler");
        $__internal_58def4d7134f59de58b2ec4d9463250649ff84eeb464d98bf4f41c16cb732e83->enter($__internal_58def4d7134f59de58b2ec4d9463250649ff84eeb464d98bf4f41c16cb732e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "
";
        // line 99
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  
  </script>

";
        
        $__internal_58def4d7134f59de58b2ec4d9463250649ff84eeb464d98bf4f41c16cb732e83->leave($__internal_58def4d7134f59de58b2ec4d9463250649ff84eeb464d98bf4f41c16cb732e83_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:listadoCompleto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 99,  291 => 98,  285 => 97,  271 => 89,  261 => 86,  256 => 83,  250 => 79,  243 => 74,  234 => 71,  231 => 70,  225 => 69,  219 => 68,  210 => 66,  205 => 65,  200 => 64,  196 => 63,  191 => 61,  187 => 60,  183 => 59,  179 => 58,  175 => 57,  171 => 56,  163 => 55,  160 => 54,  156 => 53,  146 => 46,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  93 => 23,  88 => 20,  86 => 19,  76 => 12,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Redenciones Listado General{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Redenciones Listado General</h2>*/
/*       <a href="{{ path('redenciones_exportarcompleto') }}" title="Descargar">*/
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
/*                            <form action="{{ path('redenciones_completo') }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">*/
/*                             <div class="box-icon">*/
/*                               <input type="submit" value="Buscar" class='btn btn-primary'>*/
/*                             </div>*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Codigo', 'r.codigoredencion') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Participante', 'pt.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Documento', 'pt.documento') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(redenciones, 'Programa', 'pg.nombre') }}</th>*/
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
/*                               <th><input type="text" id="redenciones_programa" name="redenciones[programa]"  style="width: 100px"></th>*/
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
/*                             <td>{{ redencion.participante.programa.nombre }}</a></td>*/
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
/*                             <td>{{ redencion.fecha | date("d/m/Y") }}</td>*/
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
