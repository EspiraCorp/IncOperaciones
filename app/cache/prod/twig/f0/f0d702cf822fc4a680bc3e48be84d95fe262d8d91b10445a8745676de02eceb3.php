<?php

/* IncentivesGarantiasBundle:Redenciones:datos.html.twig */
class __TwigTemplate_487d4ba8f9997e9c39f47f104baa6cf2dc63ca67f44b97dd3e9af708b1dfa9dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:datos.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Datos Redencion";
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Datos Redencion 
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("garantiasnovedad_nueva");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "id", array()), "html", null, true);
        echo "\" title=\"Registrar Novedad\">
            <button class=\"btn btn-primary\">
              <i class=\"icon-edit icon-white\"></i>
            </button>
          </a>
        <div class=\"box-icon\">
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("garantiasredenciones_programa");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "programa", array()), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
    </div>
</div>
    <div class=\"box span12\">
      <div class=\"box-content\">
        
        <div class=\"box-header well\">
        <h2>
        
        </i>Datos Redencion</h2>
        </h2>
      </div>
      

        <table class=\"table table-bordered table-striped\">
          <tbody>
            <tr><td>Programa</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "catalogos", array()), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Participante</td><td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Documento</td><td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "documento", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Fecha de solicitud</td><td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
            <tr><td>Valor</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "valor", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Codigo</td><td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "codigoredencion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Estado</td><td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "redencionestado", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            
          </tbody>
        </table>
    </div>
  </div>


  <div class=\"box span12\">
    <div class=\"box-content\">
      
        <div class=\"box-header well\">
        <h2>
            <a href=\"\">
              <button class=\"btn btn-small btn-success\" style=\"display: none;\">
                <i class=\"icon-plus icon-white\"></i>
              </button>
            </a>
          Historico
        </h2>
      </div>
      <table class=\"table table-bordered table-striped\">
        <thead>
          <tr>
            <th>Estado</th>
            <th>Fecha</th>
            <th>Orden Compra</th>
            <th>Observacion</th>
            <th>Guia</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")));
        foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
            echo " 
          <tr>
              <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["datos"], "redencionestado", array()), "nombre", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["datos"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
              <td>";
            // line 79
            if ((null === $this->getAttribute($context["datos"], "ordenesproducto", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["datos"], "ordenesproducto", array()), "ordenescompra", array()), "consecutivo", array()), "html", null, true);
            }
            echo "</td>
              <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "observacion", array()), "html", null, true);
            echo "</td>
              <td></td>
          </tr>         
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
    </div>
  </div>


";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "
";
        // line 93
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


";
    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 93,  193 => 92,  190 => 91,  181 => 84,  171 => 80,  164 => 79,  160 => 78,  156 => 77,  149 => 75,  114 => 43,  110 => 42,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  67 => 19,  56 => 13,  49 => 8,  46 => 7,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Datos Redencion{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* */
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Datos Redencion */
/*         <a href="{{ path('garantiasnovedad_nueva') }}/{{ redencion.id }}" title="Registrar Novedad">*/
/*             <button class="btn btn-primary">*/
/*               <i class="icon-edit icon-white"></i>*/
/*             </button>*/
/*           </a>*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('garantiasredenciones_programa') }}/{{ redencion.participante.programa.id }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/*       <div class="box-content">*/
/*         */
/*         <div class="box-header well">*/
/*         <h2>*/
/*         */
/*         </i>Datos Redencion</h2>*/
/*         </h2>*/
/*       </div>*/
/*       */
/* */
/*         <table class="table table-bordered table-striped">*/
/*           <tbody>*/
/*             <tr><td>Programa</td><td>{{ redencion.productocatalogo.catalogos.programa.nombre }}</td></tr>*/
/*             <tr><td>Participante</td><td>{{ redencion.participante.nombre }}</td></tr>*/
/*             <tr><td>Documento</td><td>{{ redencion.participante.documento }}</td></tr>*/
/*             <tr><td>Fecha de solicitud</td><td>{{ redencion.fecha | date("Y-m-d") }}</td></tr>*/
/*             <tr><td>Valor</td><td>{{ redencion.valor }}</td></tr>*/
/*             <tr><td>Codigo</td><td>{{ redencion.codigoredencion }}</td></tr>*/
/*             <tr><td>Estado</td><td>{{ redencion.redencionestado.nombre }}</td></tr>*/
/*             */
/*           </tbody>*/
/*         </table>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/*   <div class="box span12">*/
/*     <div class="box-content">*/
/*       */
/*         <div class="box-header well">*/
/*         <h2>*/
/*             <a href="">*/
/*               <button class="btn btn-small btn-success" style="display: none;">*/
/*                 <i class="icon-plus icon-white"></i>*/
/*               </button>*/
/*             </a>*/
/*           Historico*/
/*         </h2>*/
/*       </div>*/
/*       <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*           <tr>*/
/*             <th>Estado</th>*/
/*             <th>Fecha</th>*/
/*             <th>Orden Compra</th>*/
/*             <th>Observacion</th>*/
/*             <th>Guia</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           {% for datos in historico %} */
/*           <tr>*/
/*               <td>{{ datos.redencionestado.nombre }}</td>*/
/*               <td>{{ datos.fecha | date("Y-m-d") }}</td>*/
/*               <td>{% if datos.ordenesproducto is null %}{% else %}{{ datos.ordenesproducto.ordenescompra.consecutivo }}{% endif %}</td>*/
/*               <td>{{ datos.observacion }}</td>*/
/*               <td></td>*/
/*           </tr>         */
/*           {% endfor %}*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
