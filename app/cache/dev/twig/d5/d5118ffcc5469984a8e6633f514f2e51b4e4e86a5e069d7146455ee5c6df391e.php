<?php

/* IncentivesCatalogoBundle:Maestro:listado5.html.twig */
class __TwigTemplate_8596fa9304850db2b900e7f3f356f3d0e27d89f8fcfbb1de358c5c7f05ece8aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:listado5.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dedc0d032e3d693aa6a55e70629b3bb6175732747aeff0205028f916648d3584 = $this->env->getExtension("native_profiler");
        $__internal_dedc0d032e3d693aa6a55e70629b3bb6175732747aeff0205028f916648d3584->enter($__internal_dedc0d032e3d693aa6a55e70629b3bb6175732747aeff0205028f916648d3584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:listado5.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dedc0d032e3d693aa6a55e70629b3bb6175732747aeff0205028f916648d3584->leave($__internal_dedc0d032e3d693aa6a55e70629b3bb6175732747aeff0205028f916648d3584_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f44591759cfa4575891ab9178bd611b52ad4a3b1d4cda4c10ff75461d31386cc = $this->env->getExtension("native_profiler");
        $__internal_f44591759cfa4575891ab9178bd611b52ad4a3b1d4cda4c10ff75461d31386cc->enter($__internal_f44591759cfa4575891ab9178bd611b52ad4a3b1d4cda4c10ff75461d31386cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ui-lightness/jquery-ui.css"), "html", null, true);
        echo "\">
    <style type='text/css'>
    #tabs {
        font-size: .8em !important;
        width:auto;
        margin:5px;
        padding:0;
        border:0 !important;
        overflow:hidden;
    }

    /*scrollable tabs css*/
    .ui-scrollable-tabs { overflow:hidden; position:relative; width:800px; }

    .ui-scrollable-tabs .ui-tabs-nav {
        width:1000000px;
        padding:1px 0 0 1px;
        border-left:none;
        border-right:none;
        padding-top:1px;
        position:relative;
    }

    .ui-scrollable-tabs .ui-tabs .ui-tabs-closable li a {
        padding-right:5px;
    }

    .ui-scrollable-tabs .ui-tabs-nav-arrows {
        left: 0;
        margin: 0;
        margin:0 5px;
        padding: 0;
        position: absolute;
        right: 0;
        top: 5px;
    }

    /*IE7 fix*/
    *:first-child+html .ui-scrollable-tabs .ui-tabs-nav-arrows {
        z-index:1;
    }

    .ui-scrollable-tabs .ui-tabs .ui-tabs-nav li {
        margin:0 1px 0;
    }

    .ui-tabs-nav li .ui-tabs-close {
        float:left;
        margin-top:8px;
        margin-right:4px;
        border:none;
        cursor:pointer;
    }

    .ui-scrollable-tabs .ui-tabs-nav-arrows .ui-tabs-arrow-next { float:right; }

    .ui-scrollable-tabs .ui-tabs-nav-arrows .ui-tabs-arrow-previous { float:left; }

    .ui-scrollable-tabs .ui-tabs-nav-arrows li {
        list-style:none;
        position:relative;
        cursor:pointer;
        margin:0;
        padding:0;
        display:none;
        z-index:1;
    }

    .ui-scrollable-tabs .ui-tabs-nav-arrows li a {
        display: block;
        padding:8px 0 9px;
    }
    </style>
";
        
        $__internal_f44591759cfa4575891ab9178bd611b52ad4a3b1d4cda4c10ff75461d31386cc->leave($__internal_f44591759cfa4575891ab9178bd611b52ad4a3b1d4cda4c10ff75461d31386cc_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fb966974c0905efed3c8fe342df62d0f7ab25ebf2e62bfaafc57b1314fced01 = $this->env->getExtension("native_profiler");
        $__internal_0fb966974c0905efed3c8fe342df62d0f7ab25ebf2e62bfaafc57b1314fced01->enter($__internal_0fb966974c0905efed3c8fe342df62d0f7ab25ebf2e62bfaafc57b1314fced01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollabletab.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.init.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function(){
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 89
            echo "            \$(\"#cat";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\").click(function(evento){
                evento.preventDefault();
                \$(\"#catalogo";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\").load(\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_grupo", array("id" => $this->getAttribute($context["catalogos"], "id", array()), "pagina" => (isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")), "str_filtro" => (isset($context["str_filtro"]) ? $context["str_filtro"] : $this->getContext($context, "str_filtro")), "parametros" => (isset($context["parametros"]) ? $context["parametros"] : $this->getContext($context, "parametros")))), "html", null, true);
            echo "\");
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        })
    </script>
";
        
        $__internal_0fb966974c0905efed3c8fe342df62d0f7ab25ebf2e62bfaafc57b1314fced01->leave($__internal_0fb966974c0905efed3c8fe342df62d0f7ab25ebf2e62bfaafc57b1314fced01_prof);

    }

    // line 98
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d6f1599aa630d4ba9b9a08f84c1ba06673108c3ba625685612296cd0c530bf18 = $this->env->getExtension("native_profiler");
        $__internal_d6f1599aa630d4ba9b9a08f84c1ba06673108c3ba625685612296cd0c530bf18->enter($__internal_d6f1599aa630d4ba9b9a08f84c1ba06673108c3ba625685612296cd0c530bf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 99
        echo "<div class=\"box span12\">
    <div data-original-title=\"\" class=\"box-header well\">
        <h2><i class=\"icon-th\"></i> Manager de Productos</h2>
    </div>
    <div class=\"box-content\">
        <form action=\"\" method=\"POST\" ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), 'enctype');
        echo " class=\"form-horizontal\">
        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), 'errors');
        echo "
        <div class=\"row-fluid\">
            <div class=\"span3\"><h5>Nombre</h5></div>
            <div class=\"span3\"><h5>Categoria</h5></div>
            <div class=\"span3\"><h5>Referencia</h5></div>
            <div class=\"span3\"><h5>Marca</h5></div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span3\">";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "nombre", array()), 'widget');
        echo "</div>
            <div class=\"span3\">";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "categoria", array()), 'widget');
        echo "</div>
            <div class=\"span3\">";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "referencia", array()), 'widget');
        echo "</div>
            <div class=\"span3\">";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "marca", array()), 'widget');
        echo "</div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span3\"><h5>EAN</h5></div>
            <div class=\"span3\"><h5>SKU</h5></div>
            <div class=\"span3\"><h5>Clasificacion</h5></div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span3\">";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "codEAN", array()), 'widget');
        echo "</div>
            <div class=\"span3\">";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "codInc", array()), 'widget');
        echo "</div>
            <div class=\"span3\">";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "productoclasificacion", array()), 'widget');
        echo "</div>
            <div class=\"span3\">";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</div>
        </div>
        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "_token", array()), 'widget');
        echo "
        </form>                   
    </div>
</div>

<div class=\"box span12\">
    <div class=\"box-content\">
        <div style=\"background: white; width: 200px; float: left;\" class=\"box\">
            <div class=\"box-header well\"><h2>PRODUCTOS</h2></div>
             <div class=\"well\">
            <h4></h4>
            </div>
            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
            // line 142
            echo "                 <div style=\"height: 240px; width: 180px;\" class=\"box span3\">
                    <div data-original-title=\"\" class=\"box-header well\">
                        ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "nombre", array()), "html", null, true);
            echo "
                    </div>
                     <div class=\"box-content\">
                        <div style=\"height: 100px; width: 100px;\">
                            ";
            // line 148
            $context["i"] = 0;
            // line 149
            echo "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) ? $context["imagenes"] : $this->getContext($context, "imagenes")));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 150
                echo "                            ";
                if ((($this->getAttribute($this->getAttribute($context["imagen"], "producto", array()), "id", array()) == $this->getAttribute($context["productos"], "id", array())) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 1))) {
                    echo "                  
                              
                                  <a class=\"cboxElement\" href=\"../../../";
                    // line 152
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["imagen"], "path", array()), 0), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "nombre", array()), "html", null, true);
                    echo "\" style=\"background:url(../../../";
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($context["imagen"], "path", array()), 0), 0,  -4), "html", null, true);
                    echo "_min.jpg)\">
                                    <img class=\"grayscale\" src=\"../../../";
                    // line 153
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($context["imagen"], "path", array()), 0), 0,  -4), "html", null, true);
                    echo "_min.jpg\" style=\"display: block;\">
                                  </a>
                                
                              ";
                    // line 156
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 157
                    echo "                            ";
                }
                // line 158
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                        </div>
                        <div>
                            <strong>Referencia:</strong> ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "referencia", array()), "html", null, true);
            echo "<br>
                            <strong>Marca:</strong> ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "marca", array()), "html", null, true);
            echo "<br>
                            <strong>Categoria:</strong> ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productos"], "categoria", array()), "nombre", array()), "html", null, true);
            echo "<br>
                            <a id=\"enlaceajax15\" class=\"btn btn-success\">Activo</a>
                        </div>      
                    </div>       
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "        </div>

        <div id=\"tabs\">
        <ul>
            ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 174
            echo "                <li ><a id=\"cat";
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
        // line 176
        echo "        </ul>

        ";
        // line 178
        $context["i"] = 0;
        // line 179
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 180
            echo "            <div id=\"catalogo";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\" class=\"box\" style=\"background: white;\">
                ";
            // line 181
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                // line 182
                echo "                 ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesCatalogoBundle:Maestro:grupo", array("id" => $this->getAttribute($context["catalogos"], "id", array()), "pagina" => (isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")), "str_filtro" => (isset($context["str_filtro"]) ? $context["str_filtro"] : $this->getContext($context, "str_filtro")), "parametros" => (isset($context["parametros"]) ? $context["parametros"] : $this->getContext($context, "parametros")))));
                echo "
                ";
            }
            // line 184
            echo "            </div>
            ";
            // line 185
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 186
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    </div>

    </div>
    <div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 192
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 195
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "                    
                </div>
        </div>
    </div>
</div>
";
        
        $__internal_d6f1599aa630d4ba9b9a08f84c1ba06673108c3ba625685612296cd0c530bf18->leave($__internal_d6f1599aa630d4ba9b9a08f84c1ba06673108c3ba625685612296cd0c530bf18_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:listado5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 195,  411 => 192,  404 => 187,  398 => 186,  396 => 185,  393 => 184,  387 => 182,  385 => 181,  380 => 180,  375 => 179,  373 => 178,  369 => 176,  356 => 174,  352 => 173,  346 => 169,  334 => 163,  330 => 162,  326 => 161,  316 => 158,  313 => 157,  311 => 156,  305 => 153,  297 => 152,  291 => 150,  286 => 149,  284 => 148,  277 => 144,  273 => 142,  269 => 141,  254 => 129,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  226 => 116,  222 => 115,  218 => 114,  214 => 113,  203 => 105,  199 => 104,  192 => 99,  186 => 98,  177 => 94,  166 => 91,  160 => 89,  156 => 88,  150 => 85,  146 => 84,  142 => 83,  138 => 82,  133 => 81,  127 => 80,  46 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/ui-lightness/jquery-ui.css') }}">*/
/*     <style type='text/css'>*/
/*     #tabs {*/
/*         font-size: .8em !important;*/
/*         width:auto;*/
/*         margin:5px;*/
/*         padding:0;*/
/*         border:0 !important;*/
/*         overflow:hidden;*/
/*     }*/
/* */
/*     /*scrollable tabs css*//* */
/*     .ui-scrollable-tabs { overflow:hidden; position:relative; width:800px; }*/
/* */
/*     .ui-scrollable-tabs .ui-tabs-nav {*/
/*         width:1000000px;*/
/*         padding:1px 0 0 1px;*/
/*         border-left:none;*/
/*         border-right:none;*/
/*         padding-top:1px;*/
/*         position:relative;*/
/*     }*/
/* */
/*     .ui-scrollable-tabs .ui-tabs .ui-tabs-closable li a {*/
/*         padding-right:5px;*/
/*     }*/
/* */
/*     .ui-scrollable-tabs .ui-tabs-nav-arrows {*/
/*         left: 0;*/
/*         margin: 0;*/
/*         margin:0 5px;*/
/*         padding: 0;*/
/*         position: absolute;*/
/*         right: 0;*/
/*         top: 5px;*/
/*     }*/
/* */
/*     /*IE7 fix*//* */
/*     *:first-child+html .ui-scrollable-tabs .ui-tabs-nav-arrows {*/
/*         z-index:1;*/
/*     }*/
/* */
/*     .ui-scrollable-tabs .ui-tabs .ui-tabs-nav li {*/
/*         margin:0 1px 0;*/
/*     }*/
/* */
/*     .ui-tabs-nav li .ui-tabs-close {*/
/*         float:left;*/
/*         margin-top:8px;*/
/*         margin-right:4px;*/
/*         border:none;*/
/*         cursor:pointer;*/
/*     }*/
/* */
/*     .ui-scrollable-tabs .ui-tabs-nav-arrows .ui-tabs-arrow-next { float:right; }*/
/* */
/*     .ui-scrollable-tabs .ui-tabs-nav-arrows .ui-tabs-arrow-previous { float:left; }*/
/* */
/*     .ui-scrollable-tabs .ui-tabs-nav-arrows li {*/
/*         list-style:none;*/
/*         position:relative;*/
/*         cursor:pointer;*/
/*         margin:0;*/
/*         padding:0;*/
/*         display:none;*/
/*         z-index:1;*/
/*     }*/
/* */
/*     .ui-scrollable-tabs .ui-tabs-nav-arrows li a {*/
/*         display: block;*/
/*         padding:8px 0 9px;*/
/*     }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.scrollabletab.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.init.js') }}"></script>*/
/*     <script>*/
/*         $(document).ready(function(){*/
/*             {% for catalogos in catalogo %}*/
/*             $("#cat{{ catalogos.id }}").click(function(evento){*/
/*                 evento.preventDefault();*/
/*                 $("#catalogo{{ catalogos.id }}").load("{{ path('productocatalogo_grupo', { 'id': catalogos.id , 'pagina': pagina, 'str_filtro': str_filtro, 'parametros': parametros }) }}");*/
/*             });*/
/*             {% endfor %}*/
/*         })*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div data-original-title="" class="box-header well">*/
/*         <h2><i class="icon-th"></i> Manager de Productos</h2>*/
/*     </div>*/
/*     <div class="box-content">*/
/*         <form action="" method="POST" {{ form_enctype(filtros) }} class="form-horizontal">*/
/*         {{ form_errors(filtros) }}*/
/*         <div class="row-fluid">*/
/*             <div class="span3"><h5>Nombre</h5></div>*/
/*             <div class="span3"><h5>Categoria</h5></div>*/
/*             <div class="span3"><h5>Referencia</h5></div>*/
/*             <div class="span3"><h5>Marca</h5></div>*/
/*         </div>*/
/*         <div class="row-fluid">*/
/*             <div class="span3">{{ form_widget(filtros.nombre) }}</div>*/
/*             <div class="span3">{{ form_widget(filtros.categoria) }}</div>*/
/*             <div class="span3">{{ form_widget(filtros.referencia) }}</div>*/
/*             <div class="span3">{{ form_widget(filtros.marca) }}</div>*/
/*         </div>*/
/*         <div class="row-fluid">*/
/*             <div class="span3"><h5>EAN</h5></div>*/
/*             <div class="span3"><h5>SKU</h5></div>*/
/*             <div class="span3"><h5>Clasificacion</h5></div>*/
/*         </div>*/
/*         <div class="row-fluid">*/
/*             <div class="span3">{{ form_widget(filtros.codEAN) }}</div>*/
/*             <div class="span3">{{ form_widget(filtros.codInc) }}</div>*/
/*             <div class="span3">{{ form_widget(filtros.productoclasificacion) }}</div>*/
/*             <div class="span3">{{ form_widget(filtros.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}</div>*/
/*         </div>*/
/*         {{ form_widget(filtros._token) }}*/
/*         </form>                   */
/*     </div>*/
/* </div>*/
/* */
/* <div class="box span12">*/
/*     <div class="box-content">*/
/*         <div style="background: white; width: 200px; float: left;" class="box">*/
/*             <div class="box-header well"><h2>PRODUCTOS</h2></div>*/
/*              <div class="well">*/
/*             <h4></h4>*/
/*             </div>*/
/*             {% for productos in pagination %}*/
/*                  <div style="height: 240px; width: 180px;" class="box span3">*/
/*                     <div data-original-title="" class="box-header well">*/
/*                         {{ productos.nombre }}*/
/*                     </div>*/
/*                      <div class="box-content">*/
/*                         <div style="height: 100px; width: 100px;">*/
/*                             {% set i=0 %}*/
/*                            {% for imagen in imagenes %}*/
/*                             {% if (imagen.producto.id==productos.id and i<1) %}                  */
/*                               */
/*                                   <a class="cboxElement" href="../../../{{ imagen.path | slice (0)}}" title="{{ productos.nombre }}" style="background:url(../../../{{(imagen.path| slice (0))[:-4]}}_min.jpg)">*/
/*                                     <img class="grayscale" src="../../../{{ imagen.path | slice(0)[:-4]}}_min.jpg" style="display: block;">*/
/*                                   </a>*/
/*                                 */
/*                               {% set i=i+1 %}*/
/*                             {% endif %}*/
/*                           {% endfor %} */
/*                         </div>*/
/*                         <div>*/
/*                             <strong>Referencia:</strong> {{ productos.referencia }}<br>*/
/*                             <strong>Marca:</strong> {{ productos.marca }}<br>*/
/*                             <strong>Categoria:</strong> {{ productos.categoria.nombre }}<br>*/
/*                             <a id="enlaceajax15" class="btn btn-success">Activo</a>*/
/*                         </div>      */
/*                     </div>       */
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         <div id="tabs">*/
/*         <ul>*/
/*             {% for catalogos in catalogo %}*/
/*                 <li ><a id="cat{{ catalogos.id }}" href="#catalogo{{ catalogos.id }}"><span>{{ catalogos.nombre }}</span></a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/* */
/*         {% set i=0 %}*/
/*         {% for catalogos in catalogo %}*/
/*             <div id="catalogo{{ catalogos.id }}" class="box" style="background: white;">*/
/*                 {% if (i==0) %}*/
/*                  {{ render(controller('IncentivesCatalogoBundle:Maestro:grupo', { 'id': catalogos.id , 'pagina': pagina, 'str_filtro': str_filtro, 'parametros': parametros })) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% set i = i+1 %}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
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
/* {% endblock %}*/
/* */
