<?php

/* IncentivesCatalogoBundle:Maestro:listado.html.twig */
class __TwigTemplate_5b2799bb95a5e6cbc6888c5e93aa7f85f491c865fbc2449b451e28f290a4d4c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:listado.html.twig", 1);
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
        $__internal_73b9edc2ee9caf667a832f10d0d1d8097610c22aabcb266f8ef47a5baaa84bed = $this->env->getExtension("native_profiler");
        $__internal_73b9edc2ee9caf667a832f10d0d1d8097610c22aabcb266f8ef47a5baaa84bed->enter($__internal_73b9edc2ee9caf667a832f10d0d1d8097610c22aabcb266f8ef47a5baaa84bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b9edc2ee9caf667a832f10d0d1d8097610c22aabcb266f8ef47a5baaa84bed->leave($__internal_73b9edc2ee9caf667a832f10d0d1d8097610c22aabcb266f8ef47a5baaa84bed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2436ae9e9dbedd704e63888971badbb5c00d97ec6a0088a1b05d1f194779bf88 = $this->env->getExtension("native_profiler");
        $__internal_2436ae9e9dbedd704e63888971badbb5c00d97ec6a0088a1b05d1f194779bf88->enter($__internal_2436ae9e9dbedd704e63888971badbb5c00d97ec6a0088a1b05d1f194779bf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesCatalogoBundle:Catalogo:nuevo";
        
        $__internal_2436ae9e9dbedd704e63888971badbb5c00d97ec6a0088a1b05d1f194779bf88->leave($__internal_2436ae9e9dbedd704e63888971badbb5c00d97ec6a0088a1b05d1f194779bf88_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_1edb5ad626cb918f6cbbc4882e5b74109aab6e51a1904f6523132dddf496d1d5 = $this->env->getExtension("native_profiler");
        $__internal_1edb5ad626cb918f6cbbc4882e5b74109aab6e51a1904f6523132dddf496d1d5->enter($__internal_1edb5ad626cb918f6cbbc4882e5b74109aab6e51a1904f6523132dddf496d1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
        echo " class=\"form-horizontal\">
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
                    <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "nombre", array()), "html", null, true);
            echo "</th>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
            foreach ($context['_seq'] as $context["_key"] => $context["catalogos"]) {
                // line 29
                echo "                        <td>
                            <div>
                                ";
                // line 31
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesCatalogoBundle:Maestro:nuevo", array("producto" => $this->getAttribute($context["productos"], "id", array()), "catalogo" => $this->getAttribute($context["catalogos"], "id", array()))));
                echo "
                                ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_nuevo", array("producto" => $this->getAttribute($context["productos"], "id", array()), "catalogo" => $this->getAttribute($context["catalogos"], "id", array()))), "html", null, true);
                echo "
                            </div>
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </table>
    </fieldset>        
<div class=\"form-actions\">
</div>
";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_1edb5ad626cb918f6cbbc4882e5b74109aab6e51a1904f6523132dddf496d1d5->leave($__internal_1edb5ad626cb918f6cbbc4882e5b74109aab6e51a1904f6523132dddf496d1d5_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  137 => 38,  130 => 36,  120 => 32,  116 => 31,  112 => 29,  108 => 28,  104 => 27,  101 => 26,  97 => 25,  94 => 24,  85 => 22,  81 => 21,  73 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/* <form action="{{ path('productocatalogo_listado') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
/*                     <th>{{ productos.nombre }}</th>*/
/*                     {% for catalogos in catalogo %}*/
/*                         <td>*/
/*                             <div>*/
/*                                 {{ render(controller('IncentivesCatalogoBundle:Maestro:nuevo', { "producto": productos.id, "catalogo": catalogos.id})) }}*/
/*                                 {{ path('productocatalogo_nuevo',  {"producto": productos.id, "catalogo": catalogos.id}) }}*/
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
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
