<?php

/* IncentivesGarantiasBundle:Redenciones:datos.html.twig */
class __TwigTemplate_5146a63c8f6e6e564c273c84c6fa1278dfb84243b7d3580f82e7b162908510b2 extends Twig_Template
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
        $__internal_392980e16b30822d14ad65daf3948e02f07ce0196a933b926aad1796e4ba2589 = $this->env->getExtension("native_profiler");
        $__internal_392980e16b30822d14ad65daf3948e02f07ce0196a933b926aad1796e4ba2589->enter($__internal_392980e16b30822d14ad65daf3948e02f07ce0196a933b926aad1796e4ba2589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Redenciones:datos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392980e16b30822d14ad65daf3948e02f07ce0196a933b926aad1796e4ba2589->leave($__internal_392980e16b30822d14ad65daf3948e02f07ce0196a933b926aad1796e4ba2589_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6e45e9e788831c4d38560c4be9efd5fb91a65bd5e07d967e5a6018f9df2d942 = $this->env->getExtension("native_profiler");
        $__internal_f6e45e9e788831c4d38560c4be9efd5fb91a65bd5e07d967e5a6018f9df2d942->enter($__internal_f6e45e9e788831c4d38560c4be9efd5fb91a65bd5e07d967e5a6018f9df2d942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Redencion";
        
        $__internal_f6e45e9e788831c4d38560c4be9efd5fb91a65bd5e07d967e5a6018f9df2d942->leave($__internal_f6e45e9e788831c4d38560c4be9efd5fb91a65bd5e07d967e5a6018f9df2d942_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9225c91329088d66390ea72da1d5cca968c0d571c137b9bb444ea501454f7918 = $this->env->getExtension("native_profiler");
        $__internal_9225c91329088d66390ea72da1d5cca968c0d571c137b9bb444ea501454f7918->enter($__internal_9225c91329088d66390ea72da1d5cca968c0d571c137b9bb444ea501454f7918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_9225c91329088d66390ea72da1d5cca968c0d571c137b9bb444ea501454f7918->leave($__internal_9225c91329088d66390ea72da1d5cca968c0d571c137b9bb444ea501454f7918_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_18a56df825369ebe276ff4f8f7d17aa3137d295fa668b10ee1b0885272ddbc86 = $this->env->getExtension("native_profiler");
        $__internal_18a56df825369ebe276ff4f8f7d17aa3137d295fa668b10ee1b0885272ddbc86->enter($__internal_18a56df825369ebe276ff4f8f7d17aa3137d295fa668b10ee1b0885272ddbc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
        
        $__internal_18a56df825369ebe276ff4f8f7d17aa3137d295fa668b10ee1b0885272ddbc86->leave($__internal_18a56df825369ebe276ff4f8f7d17aa3137d295fa668b10ee1b0885272ddbc86_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_585a731e04cfdcd4f6a6b29045a7f2b154921d106f94dd678049fad0f8d4f0ab = $this->env->getExtension("native_profiler");
        $__internal_585a731e04cfdcd4f6a6b29045a7f2b154921d106f94dd678049fad0f8d4f0ab->enter($__internal_585a731e04cfdcd4f6a6b29045a7f2b154921d106f94dd678049fad0f8d4f0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "
";
        // line 93
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


";
        
        $__internal_585a731e04cfdcd4f6a6b29045a7f2b154921d106f94dd678049fad0f8d4f0ab->leave($__internal_585a731e04cfdcd4f6a6b29045a7f2b154921d106f94dd678049fad0f8d4f0ab_prof);

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
        return array (  223 => 93,  220 => 92,  214 => 91,  202 => 84,  192 => 80,  185 => 79,  181 => 78,  177 => 77,  170 => 75,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  88 => 19,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
