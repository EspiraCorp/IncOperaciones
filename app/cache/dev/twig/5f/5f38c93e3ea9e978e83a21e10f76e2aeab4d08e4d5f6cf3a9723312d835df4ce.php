<?php

/* IncentivesGarantiasBundle:Redenciones:aprobacionrecompra.html.twig */
class __TwigTemplate_eb2daf9002e62a204a21ce1f5a842058aa74b35a674a702d4521c5d1010b6fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:aprobacionrecompra.html.twig", 1);
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
        $__internal_1bee175f53e8ac2778cde833335d533f50d55431cb856b5e0680f87b8c5790c5 = $this->env->getExtension("native_profiler");
        $__internal_1bee175f53e8ac2778cde833335d533f50d55431cb856b5e0680f87b8c5790c5->enter($__internal_1bee175f53e8ac2778cde833335d533f50d55431cb856b5e0680f87b8c5790c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Redenciones:aprobacionrecompra.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bee175f53e8ac2778cde833335d533f50d55431cb856b5e0680f87b8c5790c5->leave($__internal_1bee175f53e8ac2778cde833335d533f50d55431cb856b5e0680f87b8c5790c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7473319a44368027c22ff0661a270dde1a36d7db992f3a1c0ecc263dd9b90359 = $this->env->getExtension("native_profiler");
        $__internal_7473319a44368027c22ff0661a270dde1a36d7db992f3a1c0ecc263dd9b90359->enter($__internal_7473319a44368027c22ff0661a270dde1a36d7db992f3a1c0ecc263dd9b90359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Novedad";
        
        $__internal_7473319a44368027c22ff0661a270dde1a36d7db992f3a1c0ecc263dd9b90359->leave($__internal_7473319a44368027c22ff0661a270dde1a36d7db992f3a1c0ecc263dd9b90359_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_ffefc2b10f74747641a24ede09df7c29ef10fec8ee05e51048e35f8ec178b24c = $this->env->getExtension("native_profiler");
        $__internal_ffefc2b10f74747641a24ede09df7c29ef10fec8ee05e51048e35f8ec178b24c->enter($__internal_ffefc2b10f74747641a24ede09df7c29ef10fec8ee05e51048e35f8ec178b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Acción a realizar
        <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("garantiasrecompra_aprobacion");
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
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "catalogos", array()), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Participante</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Documento</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "documento", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Fecha de solicitud</td><td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
            <tr><td>Valor</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "valor", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Codigo</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "codigoredencion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Estado Redención</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "redencionestado", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Observación Garantia</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedad"]) ? $context["novedad"] : $this->getContext($context, "novedad")), "observacion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Observación Acción</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedad"]) ? $context["novedad"] : $this->getContext($context, "novedad")), "observacionaccion", array()), "html", null, true);
        echo "</td></tr>
            
          </tbody>
        </table>
    </div>
        <div class=\"box-content\">
            <div class=\"estado\" >
                <a class=\"btn btn-info\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getUrl("garantiasrecompra_aprobar");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedad"]) ? $context["novedad"] : $this->getContext($context, "novedad")), "id", array()), "html", null, true);
        echo "\")>
                    <i class=\"icon-ok icon-white\" align='rigth'></i>                                    
                    Aprobar                                      
                </a>
                                                
                <a class=\"btn btn-danger\" href='";
        // line 49
        echo $this->env->getExtension('routing')->getUrl("garantiasrecompra_cancelar");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedad"]) ? $context["novedad"] : $this->getContext($context, "novedad")), "id", array()), "html", null, true);
        echo "\"'>
                    <i class=\"icon-trash icon-white\" align='rigth'></i>                                    
                    Cancelar                                      
                </a>
                                                
          </div>
        </div>

  </div>

  ";
        
        $__internal_ffefc2b10f74747641a24ede09df7c29ef10fec8ee05e51048e35f8ec178b24c->leave($__internal_ffefc2b10f74747641a24ede09df7c29ef10fec8ee05e51048e35f8ec178b24c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:aprobacionrecompra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  123 => 44,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  81 => 29,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Novedad{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Acción a realizar*/
/*         <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('garantiasrecompra_aprobacion') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
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
/*             <tr><td>Estado Redención</td><td>{{ redencion.redencionestado.nombre }}</td></tr>*/
/*             <tr><td>Observación Garantia</td><td>{{ novedad.observacion }}</td></tr>*/
/*             <tr><td>Observación Acción</td><td>{{ novedad.observacionaccion }}</td></tr>*/
/*             */
/*           </tbody>*/
/*         </table>*/
/*     </div>*/
/*         <div class="box-content">*/
/*             <div class="estado" >*/
/*                 <a class="btn btn-info" href="{{ url('garantiasrecompra_aprobar') }}/{{ novedad.id }}")>*/
/*                     <i class="icon-ok icon-white" align='rigth'></i>                                    */
/*                     Aprobar                                      */
/*                 </a>*/
/*                                                 */
/*                 <a class="btn btn-danger" href='{{ url('garantiasrecompra_cancelar') }}/{{ novedad.id }}"'>*/
/*                     <i class="icon-trash icon-white" align='rigth'></i>                                    */
/*                     Cancelar                                      */
/*                 </a>*/
/*                                                 */
/*           </div>*/
/*         </div>*/
/* */
/*   </div>*/
/* */
/*   {% endblock %}*/
/* */
