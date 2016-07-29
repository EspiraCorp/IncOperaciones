<?php

/* IncentivesCatalogoBundle:Maestro:listado4.html.twig */
class __TwigTemplate_2ab4dde4b86d5af9d6ff84b806d0517ed847a6d3a4d839fccbbaefe1464678b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:listado4.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6f39675adc722ac9b8e499483f3a01c540d212dcb33f1e2e00cd8826cd13686a = $this->env->getExtension("native_profiler");
        $__internal_6f39675adc722ac9b8e499483f3a01c540d212dcb33f1e2e00cd8826cd13686a->enter($__internal_6f39675adc722ac9b8e499483f3a01c540d212dcb33f1e2e00cd8826cd13686a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:listado4.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f39675adc722ac9b8e499483f3a01c540d212dcb33f1e2e00cd8826cd13686a->leave($__internal_6f39675adc722ac9b8e499483f3a01c540d212dcb33f1e2e00cd8826cd13686a_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_0c83cb25fd668e3b17600713aaef53b79750a4720d494991290dc13c1b32b3ae = $this->env->getExtension("native_profiler");
        $__internal_0c83cb25fd668e3b17600713aaef53b79750a4720d494991290dc13c1b32b3ae->enter($__internal_0c83cb25fd668e3b17600713aaef53b79750a4720d494991290dc13c1b32b3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "
<div class=\"box span12\">
    <div class=\"box-content\">
        <div style=\"background: white; width: 200px; float: left;\" class=\"box\">
            <div class=\"box-header well\"><h2>PRODUCTOS</h2></div>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
            // line 10
            echo "                 <div style=\"height: 240px; width: 180px;\" class=\"box span3\">
                    <div data-original-title=\"\" class=\"box-header well\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "nombre", array()), "html", null, true);
            echo "
                    </div>
                     <div class=\"box-content\">
                        <div style=\"height: 100px; width: 100px;\">
                           
                        </div>
                        <div>
                            <strong>Referencia:</strong> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "referencia", array()), "html", null, true);
            echo "<br>
                            <strong>Marca:</strong> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "referencia", array()), "html", null, true);
            echo "<br>
                            <strong>Categoria:</strong> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "referencia", array()), "html", null, true);
            echo "<br>
                            <a id=\"enlaceajax15\" class=\"btn btn-success\" href=\"/operaciones/web/app_dev.php/proveedores/estado/15\">Activo</a>
                        </div>      
                    </div>       
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>

        <div id=\"tabs\" style=\"background: white; width: 800px;  float: left;\">
        <ul>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 32
            echo "            <li id=\"cat";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\"><a id=\"#catalogo";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\" href=\"#catalogo";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "nombre", array()), "html", null, true);
            echo "</span></a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </ul>
        
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 37
            echo "            <div id=\"catalogo";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\" >

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>  
    </div>
    <div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 45
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 48
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "                    
                </div>
        </div>
    </div>
</div>

";
        
        $__internal_0c83cb25fd668e3b17600713aaef53b79750a4720d494991290dc13c1b32b3ae->leave($__internal_0c83cb25fd668e3b17600713aaef53b79750a4720d494991290dc13c1b32b3ae_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e356a3b395549211b6a9ec006c51a7a2173781392b7e34fdcf2831d8f875967 = $this->env->getExtension("native_profiler");
        $__internal_2e356a3b395549211b6a9ec006c51a7a2173781392b7e34fdcf2831d8f875967->enter($__internal_2e356a3b395549211b6a9ec006c51a7a2173781392b7e34fdcf2831d8f875967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.0.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
    <script>
        \$( \"#tabs\" ).tabs().scrollabletab()//jQuery scrollable dataTables_info;
    </script>
    <script>
        \$(document).ready(function(){
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 66
            echo "            \$(\"#cat";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\").click(function(evento){
                evento.preventDefault();
                \$(\"#catalogo";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\").load(\"";
            echo $this->env->getExtension('routing')->getPath("productocatalogo_grupo");
            echo "\");
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        })
    </script>
";
        
        $__internal_2e356a3b395549211b6a9ec006c51a7a2173781392b7e34fdcf2831d8f875967->leave($__internal_2e356a3b395549211b6a9ec006c51a7a2173781392b7e34fdcf2831d8f875967_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:listado4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 71,  189 => 68,  183 => 66,  179 => 65,  169 => 58,  166 => 57,  160 => 56,  146 => 48,  136 => 45,  130 => 41,  119 => 37,  115 => 36,  111 => 34,  96 => 32,  92 => 31,  86 => 27,  74 => 21,  70 => 20,  66 => 19,  56 => 12,  52 => 10,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block cuerpo %}*/
/* */
/* <div class="box span12">*/
/*     <div class="box-content">*/
/*         <div style="background: white; width: 200px; float: left;" class="box">*/
/*             <div class="box-header well"><h2>PRODUCTOS</h2></div>*/
/*             {% for productos in pagination %}*/
/*                  <div style="height: 240px; width: 180px;" class="box span3">*/
/*                     <div data-original-title="" class="box-header well">*/
/*                         {{ productos.nombre }}*/
/*                     </div>*/
/*                      <div class="box-content">*/
/*                         <div style="height: 100px; width: 100px;">*/
/*                            */
/*                         </div>*/
/*                         <div>*/
/*                             <strong>Referencia:</strong> {{ productos.referencia }}<br>*/
/*                             <strong>Marca:</strong> {{ productos.referencia }}<br>*/
/*                             <strong>Categoria:</strong> {{ productos.referencia }}<br>*/
/*                             <a id="enlaceajax15" class="btn btn-success" href="/operaciones/web/app_dev.php/proveedores/estado/15">Activo</a>*/
/*                         </div>      */
/*                     </div>       */
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         <div id="tabs" style="background: white; width: 800px;  float: left;">*/
/*         <ul>*/
/*         {% for catalogos in catalogo %}*/
/*             <li id="cat{{ catalogos.id }}"><a id="#catalogo{{ catalogos.id }}" href="#catalogo{{ catalogos.id }}"><span>{{ catalogos.nombre }}</span></a></li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*         */
/*         {% for catalogos in catalogo %}*/
/*             <div id="catalogo{{ catalogos.id }}" >*/
/* */
/*             </div>*/
/*         {% endfor %}*/
/*         </div>  */
/*     </div>*/
/*     <div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ pagination.getItemNumberPerPage*(pagination.getCurrentPageNumber-1)+1  }} a {{ pagination.getItemNumberPerPage*pagination.getCurrentPageNumber }} de {{ pagination.getTotalItemCount }}   Productos*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(pagination) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script src="{{ asset('js/jquery-2.0.2.js') }}" type="text/javascript"></script>*/
/*     <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>*/
/*     <script>*/
/*         $( "#tabs" ).tabs().scrollabletab()//jQuery scrollable dataTables_info;*/
/*     </script>*/
/*     <script>*/
/*         $(document).ready(function(){*/
/*             {% for catalogos in catalogo %}*/
/*             $("#cat{{ catalogos.id }}").click(function(evento){*/
/*                 evento.preventDefault();*/
/*                 $("#catalogo{{ catalogos.id }}").load("{{ path('productocatalogo_grupo') }}");*/
/*             });*/
/*             {% endfor %}*/
/*         })*/
/*     </script>*/
/* {% endblock %}*/
