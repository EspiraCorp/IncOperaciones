<?php

/* IncentivesCatalogoBundle:Catalogos:indicadores.html.twig */
class __TwigTemplate_38e676fe5fa59922516244125701e6098cdeeea6b76554bf3079c79e573d2e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesCatalogoBundle:Catalogos:indicadores.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a3807bb95ed36646ead6470b0637e8eb50fb5d89f9375fd1cc690009d8479c = $this->env->getExtension("native_profiler");
        $__internal_97a3807bb95ed36646ead6470b0637e8eb50fb5d89f9375fd1cc690009d8479c->enter($__internal_97a3807bb95ed36646ead6470b0637e8eb50fb5d89f9375fd1cc690009d8479c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:indicadores.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a3807bb95ed36646ead6470b0637e8eb50fb5d89f9375fd1cc690009d8479c->leave($__internal_97a3807bb95ed36646ead6470b0637e8eb50fb5d89f9375fd1cc690009d8479c_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6c267d192f6e4c254f74f3d54cdde7d0a2236d3f539b8f3c506037f567132759 = $this->env->getExtension("native_profiler");
        $__internal_6c267d192f6e4c254f74f3d54cdde7d0a2236d3f539b8f3c506037f567132759->enter($__internal_6c267d192f6e4c254f74f3d54cdde7d0a2236d3f539b8f3c506037f567132759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Indicadores
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_datos", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
\t
\t    <div class=\"box span10\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_editar", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t</a>
\t\t\t\t</i>Categorias</h2>
\t\t\t</div>
\t    \t<div class=\"box-content\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Numero</th>
\t\t\t\t\t\t\t<th>Nombre Categoria</th>
\t\t\t\t\t\t\t<th>Visibles</th>
\t\t\t\t\t\t\t<th>Por Aprobar Operaciones</th>
\t\t\t\t\t\t\t<th>Por Aprobar Ejecutivo</th>
\t\t\t\t\t\t\t<th>Por Aprobar Director</th>
\t\t\t\t\t\t\t<th>Por Aprobar Cliente</th>
\t\t\t\t\t\t\t<th>Inactivos /Rechazados</th>
\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 38
        $context["i"] = 1;
        // line 39
        echo "\t\t\t\t\t\t";
        $context["total"] = 0;
        // line 40
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 41
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "visibles", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "operaciones", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "comercial", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "director", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "cliente", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "inactivos", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "total", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            // line 52
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 53
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
</div>


";
        
        $__internal_6c267d192f6e4c254f74f3d54cdde7d0a2236d3f539b8f3c506037f567132759->leave($__internal_6c267d192f6e4c254f74f3d54cdde7d0a2236d3f539b8f3c506037f567132759_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9676e4513e5f59c581ddc477e4c36f6fd65c4ee0478061b1a1d624163bcb106d = $this->env->getExtension("native_profiler");
        $__internal_9676e4513e5f59c581ddc477e4c36f6fd65c4ee0478061b1a1d624163bcb106d->enter($__internal_9676e4513e5f59c581ddc477e4c36f6fd65c4ee0478061b1a1d624163bcb106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9676e4513e5f59c581ddc477e4c36f6fd65c4ee0478061b1a1d624163bcb106d->leave($__internal_9676e4513e5f59c581ddc477e4c36f6fd65c4ee0478061b1a1d624163bcb106d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:indicadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 67,  157 => 66,  140 => 54,  134 => 53,  132 => 52,  127 => 50,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  92 => 41,  87 => 40,  84 => 39,  82 => 38,  59 => 18,  48 => 10,  40 => 4,  34 => 3,  19 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Indicadores*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('catalogo_datos',  {"id": catalogo.id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* 	*/
/* 	    <div class="box span10">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				<a href="{{ path('catalogo_editar',  {"id": catalogo.id}) }}">*/
/* 				</a>*/
/* 				</i>Categorias</h2>*/
/* 			</div>*/
/* 	    	<div class="box-content">*/
/* 				<table class="table">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>Numero</th>*/
/* 							<th>Nombre Categoria</th>*/
/* 							<th>Visibles</th>*/
/* 							<th>Por Aprobar Operaciones</th>*/
/* 							<th>Por Aprobar Ejecutivo</th>*/
/* 							<th>Por Aprobar Director</th>*/
/* 							<th>Por Aprobar Cliente</th>*/
/* 							<th>Inactivos /Rechazados</th>*/
/* 							<th>Total</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{% set i=1 %}*/
/* 						{% set total=0 %}*/
/* 						{% for categoria in categorias %}*/
/* 							<tr>*/
/* 								<th>{{ i }}</th>*/
/* 								<td>{{ categoria.nombre }}</td>*/
/* 								<td>{{ categoria.visibles }}</td>*/
/* 								<td>{{ categoria.operaciones }}</td>*/
/* 								<td>{{ categoria.comercial }}</td>*/
/* 								<td>{{ categoria.director }}</td>*/
/* 								<td>{{ categoria.cliente }}</td>*/
/* 								<td>{{ categoria.inactivos }}</td>*/
/* 								<td>{{ categoria.total }}</td>*/
/* 							</tr>*/
/* 							{% set i=i+1 %}*/
/* 						{% endfor %}*/
/* 						*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
