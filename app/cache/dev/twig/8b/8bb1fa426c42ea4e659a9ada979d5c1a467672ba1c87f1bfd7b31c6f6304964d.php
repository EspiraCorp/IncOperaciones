<?php

/* IncentivesCatalogoBundle:Maestro:listado2.html.twig */
class __TwigTemplate_af3df16a76e70b7c28861ecd0b4c429d5d70704d433b0c622ed5185442246a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:listado2.html.twig", 1);
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
        $__internal_ff5bea1808c37e959d4006940fa9b1c385192b2264940aeff9dbf36937c62874 = $this->env->getExtension("native_profiler");
        $__internal_ff5bea1808c37e959d4006940fa9b1c385192b2264940aeff9dbf36937c62874->enter($__internal_ff5bea1808c37e959d4006940fa9b1c385192b2264940aeff9dbf36937c62874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:listado2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff5bea1808c37e959d4006940fa9b1c385192b2264940aeff9dbf36937c62874->leave($__internal_ff5bea1808c37e959d4006940fa9b1c385192b2264940aeff9dbf36937c62874_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44657d6cc74026ce10c3f098841c5958dfc4d1ab5be6f261970e0c9f45ab2d0c = $this->env->getExtension("native_profiler");
        $__internal_44657d6cc74026ce10c3f098841c5958dfc4d1ab5be6f261970e0c9f45ab2d0c->enter($__internal_44657d6cc74026ce10c3f098841c5958dfc4d1ab5be6f261970e0c9f45ab2d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesCatalogoBundle:Catalogo:nuevo";
        
        $__internal_44657d6cc74026ce10c3f098841c5958dfc4d1ab5be6f261970e0c9f45ab2d0c->leave($__internal_44657d6cc74026ce10c3f098841c5958dfc4d1ab5be6f261970e0c9f45ab2d0c_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_9a89c73799dbdf42094dafaa75bb578436d9028583e9bc76f613edd243481006 = $this->env->getExtension("native_profiler");
        $__internal_9a89c73799dbdf42094dafaa75bb578436d9028583e9bc76f613edd243481006->enter($__internal_9a89c73799dbdf42094dafaa75bb578436d9028583e9bc76f613edd243481006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Nuevo Catalogo</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("catalogo");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("productocatalogo_listado");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <table>
            <tr>
                <th>Productos</th>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
            // line 22
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "nombre", array()), "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tr>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")));
        foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
            // line 26
            echo "                <tr>
                    <th>
                        ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "nombre", array()), "html", null, true);
            echo "<br>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "referencia", array()), "html", null, true);
            echo "<br>
                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "marca", array()), "html", null, true);
            echo "<br>
                        ";
            // line 31
            $context["i"] = 0;
            // line 32
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")));
            foreach ($context['_seq'] as $context["_key"] => $context["imagenes"]) {
                // line 33
                echo "                            ";
                if ((($this->getAttribute($this->getAttribute($context["imagenes"], "producto", array()), "id", array()) == $this->getAttribute($context["productos"], "id", array())) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 1))) {
                    // line 34
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($context["imagenes"], "path", array()), 8), 0,  -4), "html", null, true);
                    echo "_min.jpg\">
                                ";
                    // line 35
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 36
                    echo "                            ";
                }
                // line 37
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagenes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    </th>
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
            foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
                // line 40
                echo "                        <td>
                            <div class=";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "id", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["catalogos"], "id", array()), "html", null, true);
                echo ">
                                ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["matrizv"]) ? $context["matrizv"] : $this->getContext($context, "matrizv")), $this->getAttribute($context["productos"], "id", array()), array(), "array"), $this->getAttribute($context["catalogos"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["elementos"]) {
                    // line 43
                    echo "                                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["elementos"], 'row');
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                            </div>
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </table>
    </fieldset>        
<div class=\"form-actions\">
</div>
";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
<input type=\"submit\">
</form>
</div>
</div>
 </div>
";
        
        $__internal_9a89c73799dbdf42094dafaa75bb578436d9028583e9bc76f613edd243481006->leave($__internal_9a89c73799dbdf42094dafaa75bb578436d9028583e9bc76f613edd243481006_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:listado2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 54,  187 => 50,  180 => 48,  172 => 45,  163 => 43,  159 => 42,  153 => 41,  150 => 40,  146 => 39,  143 => 38,  137 => 37,  134 => 36,  132 => 35,  127 => 34,  124 => 33,  119 => 32,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 26,  97 => 25,  94 => 24,  85 => 22,  81 => 21,  73 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}IncentivesCatalogoBundle:Catalogo:nuevo{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Nuevo Catalogo</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('catalogo') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('productocatalogo_listado') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <table>*/
/*             <tr>*/
/*                 <th>Productos</th>*/
/*                 {% for catalogos in catalogo %}*/
/*                     <th>{{ catalogos.nombre }}</th>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*             {% for productos in producto %}*/
/*                 <tr>*/
/*                     <th>*/
/*                         {{ productos.nombre }}<br>*/
/*                         {{ productos.referencia }}<br>*/
/*                         {{ productos.marca }}<br>*/
/*                         {% set i=0 %}*/
/*                         {% for imagenes in imagen%}*/
/*                             {% if imagenes.producto.id == productos.id and i<1 %}*/
/*                                 <img src="{{(imagenes.path| slice (8))[:-4]}}_min.jpg">*/
/*                                 {% set i=i+1 %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </th>*/
/*                     {% for catalogos in catalogo %}*/
/*                         <td>*/
/*                             <div class={{productos.id}} {{catalogos.id}}>*/
/*                                 {% for elementos in matrizv[productos.id][catalogos.id] %}*/
/*                                     {{ form_row(elementos) }}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </td>*/
/*                     {% endfor %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </fieldset>        */
/* <div class="form-actions">*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* <input type="submit">*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
