<?php

/* IncentivesCatalogoBundle:Maestro:listado3.html.twig */
class __TwigTemplate_79f7e1fdc45e87b09afbac59f9b9d55e44a7c0c583ee291c5e7d167737e07a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:listado3.html.twig", 1);
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
        $__internal_0e75a69a2dacd466b820f2e29e0df9eae12a09d340b585b435cfe3648130fc2e = $this->env->getExtension("native_profiler");
        $__internal_0e75a69a2dacd466b820f2e29e0df9eae12a09d340b585b435cfe3648130fc2e->enter($__internal_0e75a69a2dacd466b820f2e29e0df9eae12a09d340b585b435cfe3648130fc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:listado3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e75a69a2dacd466b820f2e29e0df9eae12a09d340b585b435cfe3648130fc2e->leave($__internal_0e75a69a2dacd466b820f2e29e0df9eae12a09d340b585b435cfe3648130fc2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6d04c5b410ae652169c8aa2a245225fd671296b55e25e4352017f8264f63c75 = $this->env->getExtension("native_profiler");
        $__internal_f6d04c5b410ae652169c8aa2a245225fd671296b55e25e4352017f8264f63c75->enter($__internal_f6d04c5b410ae652169c8aa2a245225fd671296b55e25e4352017f8264f63c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesCatalogoBundle:Catalogo:nuevo";
        
        $__internal_f6d04c5b410ae652169c8aa2a245225fd671296b55e25e4352017f8264f63c75->leave($__internal_f6d04c5b410ae652169c8aa2a245225fd671296b55e25e4352017f8264f63c75_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_71e3477e386605db525c8818e1e94ba42c7387705091f7c29d3f07990b68d014 = $this->env->getExtension("native_profiler");
        $__internal_71e3477e386605db525c8818e1e94ba42c7387705091f7c29d3f07990b68d014->enter($__internal_71e3477e386605db525c8818e1e94ba42c7387705091f7c29d3f07990b68d014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "
<div style=\"background: white; width: 200px; float: left;\" class=\"box\">
    <div class=\"box-header well\"><h2>PRODUCTOS</h2></div>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")));
        foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
            // line 10
            echo "         <div style=\"height: 240px; width: 180px;\" class=\"box span3\">
            <div data-original-title=\"\" class=\"box-header well\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "nombre", array()), "html", null, true);
            echo "
            </div>
             <div class=\"box-content\">
                <div style=\"height: 100px; width: 100px;\">
                    ";
            // line 16
            $context["i"] = 0;
            // line 17
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")));
            foreach ($context['_seq'] as $context["_key"] => $context["imagenes"]) {
                // line 18
                echo "                        ";
                if ((($this->getAttribute($this->getAttribute($context["imagenes"], "producto", array()), "id", array()) == $this->getAttribute($context["productos"], "id", array())) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 1))) {
                    // line 19
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($context["imagenes"], "path", array()), 8), 0,  -4), "html", null, true);
                    echo "_min.jpg\" height=\"100\">
                            ";
                    // line 20
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 21
                    echo "                        ";
                }
                // line 22
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagenes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>
                <div>
                    <strong>Referencia:</strong> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "referencia", array()), "html", null, true);
            echo "<br>
                    <strong>Marca:</strong> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "referencia", array()), "html", null, true);
            echo "<br>
                    <strong>Categoria:</strong> ";
            // line 27
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
        // line 33
        echo "</div>

<div id=\"tabs\" style=\"background: white; width: 800px; float: left;\">
<ul>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 38
            echo "    <li><a href=\"#catalogo";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "nombre", array()), "html", null, true);
            echo "</span></a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 42
            echo "    <div id=\"catalogo";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
            echo "\" >
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")));
            foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
                // line 44
                echo "            <div class=\"row-fluid\">
                <div class=\"span10 well\" style=\"height: 240px; background-color: #EDEDED;\">
                ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["matrizv"]) ? $context["matrizv"] : $this->getContext($context, "matrizv")), $this->getAttribute($context["productos"], "id", array()), array(), "array"), $this->getAttribute($context["catalogos"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["elementos"]) {
                    // line 47
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["elementos"], 'row');
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
</div>

";
        
        $__internal_71e3477e386605db525c8818e1e94ba42c7387705091f7c29d3f07990b68d014->leave($__internal_71e3477e386605db525c8818e1e94ba42c7387705091f7c29d3f07990b68d014_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33c4cc94561ea141aa71c4b88d54647e949392baa0c70cb0adac63ce7a30874d = $this->env->getExtension("native_profiler");
        $__internal_33c4cc94561ea141aa71c4b88d54647e949392baa0c70cb0adac63ce7a30874d->enter($__internal_33c4cc94561ea141aa71c4b88d54647e949392baa0c70cb0adac63ce7a30874d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "<script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
<script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
<script>
\$( \"#tabs\" ).tabs();
</script>
";
        
        $__internal_33c4cc94561ea141aa71c4b88d54647e949392baa0c70cb0adac63ce7a30874d->leave($__internal_33c4cc94561ea141aa71c4b88d54647e949392baa0c70cb0adac63ce7a30874d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:listado3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 60,  203 => 59,  193 => 54,  186 => 52,  178 => 49,  169 => 47,  165 => 46,  161 => 44,  157 => 43,  152 => 42,  148 => 41,  145 => 40,  134 => 38,  130 => 37,  124 => 33,  112 => 27,  108 => 26,  104 => 25,  100 => 23,  94 => 22,  91 => 21,  89 => 20,  84 => 19,  81 => 18,  76 => 17,  74 => 16,  67 => 12,  63 => 10,  59 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}IncentivesCatalogoBundle:Catalogo:nuevo{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* */
/* <div style="background: white; width: 200px; float: left;" class="box">*/
/*     <div class="box-header well"><h2>PRODUCTOS</h2></div>*/
/*     {% for productos in producto %}*/
/*          <div style="height: 240px; width: 180px;" class="box span3">*/
/*             <div data-original-title="" class="box-header well">*/
/*                 {{ productos.nombre }}*/
/*             </div>*/
/*              <div class="box-content">*/
/*                 <div style="height: 100px; width: 100px;">*/
/*                     {% set i=0 %}*/
/*                     {% for imagenes in imagen%}*/
/*                         {% if imagenes.producto.id == productos.id and i<1 %}*/
/*                             <img src="{{(imagenes.path| slice (8))[:-4]}}_min.jpg" height="100">*/
/*                             {% set i=i+1 %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div>*/
/*                     <strong>Referencia:</strong> {{ productos.referencia }}<br>*/
/*                     <strong>Marca:</strong> {{ productos.referencia }}<br>*/
/*                     <strong>Categoria:</strong> {{ productos.referencia }}<br>*/
/*                     <a id="enlaceajax15" class="btn btn-success" href="/operaciones/web/app_dev.php/proveedores/estado/15">Activo</a>*/
/*                 </div>      */
/*             </div>       */
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* <div id="tabs" style="background: white; width: 800px; float: left;">*/
/* <ul>*/
/* {% for catalogos in catalogo %}*/
/*     <li><a href="#catalogo{{ catalogos.id }}"><span>{{ catalogos.nombre }}</span></a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% for catalogos in catalogo %}*/
/*     <div id="catalogo{{ catalogos.id }}" >*/
/*         {% for productos in producto %}*/
/*             <div class="row-fluid">*/
/*                 <div class="span10 well" style="height: 240px; background-color: #EDEDED;">*/
/*                 {% for elementos in matrizv[productos.id][catalogos.id] %}*/
/*                     {{ form_row(elementos) }}*/
/*                 {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script src="http://code.jquery.com/jquery-1.9.1.js"></script>*/
/* <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>*/
/* <script>*/
/* $( "#tabs" ).tabs();*/
/* </script>*/
/* {% endblock %}*/
