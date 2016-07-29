<?php

/* IncentivesRedencionesBundle:Redencion:datosredencion.html.twig */
class __TwigTemplate_b35eb5fc33a44254283d9a4365b10d719361b1582071a95c7a0f860a7adb7cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:datosredencion.html.twig", 1);
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
        $__internal_5faa10d440baa5b8255ea875ad2d9cbb7735f3739ccdbfc8a6e21e04d7b058c6 = $this->env->getExtension("native_profiler");
        $__internal_5faa10d440baa5b8255ea875ad2d9cbb7735f3739ccdbfc8a6e21e04d7b058c6->enter($__internal_5faa10d440baa5b8255ea875ad2d9cbb7735f3739ccdbfc8a6e21e04d7b058c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:datosredencion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5faa10d440baa5b8255ea875ad2d9cbb7735f3739ccdbfc8a6e21e04d7b058c6->leave($__internal_5faa10d440baa5b8255ea875ad2d9cbb7735f3739ccdbfc8a6e21e04d7b058c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1131dcb8dfb3f8dcdc02f0fc8b55c5cb25c8dbe4143ab589c5d1d4542d12ee5b = $this->env->getExtension("native_profiler");
        $__internal_1131dcb8dfb3f8dcdc02f0fc8b55c5cb25c8dbe4143ab589c5d1d4542d12ee5b->enter($__internal_1131dcb8dfb3f8dcdc02f0fc8b55c5cb25c8dbe4143ab589c5d1d4542d12ee5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Redencion";
        
        $__internal_1131dcb8dfb3f8dcdc02f0fc8b55c5cb25c8dbe4143ab589c5d1d4542d12ee5b->leave($__internal_1131dcb8dfb3f8dcdc02f0fc8b55c5cb25c8dbe4143ab589c5d1d4542d12ee5b_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4c80d5816e9d54d4540e14de1fd6538a4091574750699b5d09f777aa44da39ba = $this->env->getExtension("native_profiler");
        $__internal_4c80d5816e9d54d4540e14de1fd6538a4091574750699b5d09f777aa44da39ba->enter($__internal_4c80d5816e9d54d4540e14de1fd6538a4091574750699b5d09f777aa44da39ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_4c80d5816e9d54d4540e14de1fd6538a4091574750699b5d09f777aa44da39ba->leave($__internal_4c80d5816e9d54d4540e14de1fd6538a4091574750699b5d09f777aa44da39ba_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_aa11de42db45fde1a31b2e8aa28a6e8be9ce5718b4ebde08978e8d503adf9536 = $this->env->getExtension("native_profiler");
        $__internal_aa11de42db45fde1a31b2e8aa28a6e8be9ce5718b4ebde08978e8d503adf9536->enter($__internal_aa11de42db45fde1a31b2e8aa28a6e8be9ce5718b4ebde08978e8d503adf9536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "
<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Datos Redencion 
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("redenciones_editarenvio");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "id", array()), "html", null, true);
        echo "\" title=\"Editar Envio\">
            <button class=\"btn btn-primary\">
              <i class=\"icon-edit icon-white\"></i>
            </button>
          </a>

      ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "redencionestado", array()), "id", array()) < 4)) {
            // line 20
            echo "       <a href=\"";
            echo $this->env->getExtension('routing')->getPath("redenciones_editarproducto");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "id", array()), "html", null, true);
            echo "\" title=\"Editar Envio\">
            <button class=\"btn btn-primary btn-info\">
              <i class=\"icon-barcode icon-white\"></i>
            </button>
          </a>
      ";
        }
        // line 26
        echo "        <div class=\"box-icon\">
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("redenciones_programa");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "programa", array()), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
    </div>
</div>
<div class=\"box span12\">
    <div class=\"box span6\">
      <div class=\"box-content\">
        
        <div class=\"box-header well\">
        <h2>
        
        </i>Datos Redencion</h2>
        </h2>
      </div>
      

        <table class=\"table table-bordered table-striped\">
          <tbody>
            <tr><td>Programa</td><td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "catalogos", array()), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Participante</td><td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Documento</td><td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "documento", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Fecha de solicitud</td><td>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
            <tr><td>Valor</td><td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "valor", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Codigo</td><td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "codigoredencion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Estado</td><td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "redencionestado", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            
          </tbody>
        </table>
    </div>
  </div>
  
  <div class=\"box span6\">
      <div class=\"box-content\">
        <div class=\"box-header well\">
          <h2></i>Datos Producto</h2>
        </div>
        <table class=\"table table-bordered table-striped\">
          <tbody>
            <tr><td colspan=\"2\">
              ";
        // line 67
        if ((twig_length_filter($this->env, (isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen"))) > 0)) {
            // line 68
            echo "              <a href=\"../../../";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), 0, array(), "array"), "path", array()), 0), "html", null, true);
            echo "\" target='_blank'><img src=\"../../../";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), 0, array(), "array"), "path", array()), 0), 0,  -4), "html", null, true);
            echo "_min.jpg\"><a>
              ";
        }
        // line 70
        echo "              </td></tr>
            <tr><td>Sku</td><td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "producto", array()), "codInc", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Nombre</td><td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "producto", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Descripcion</td><td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "producto", array()), "descripcion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Categoria</td><td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "categoria", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
          </tbody>
        </table>
    </div>
  </div>
</div>

<div class=\"box span12\">
  <div class=\"box span6\">
      <div class=\"box-content\">
        
        <div class=\"box-header well\">
        <h2>
        
        </i>Datos Envio</h2>
        </h2>
      </div>
      

        <table class=\"table table-bordered table-striped\">
          <tbody>
            <tr><td>Dirección</td><td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "direccion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Barrio</td><td>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "barrio", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Ciudad</td><td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "ciudadNombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Departamento</td><td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "departamentoNombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Teléfono</td><td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "telefono", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Celular</td><td>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "celular", array()), "html", null, true);
        echo "</td></tr> 
          </tbody>
        </table>
    </div>
  </div>

  <div class=\"box span6\">
      <div class=\"box-content\">
        
        <div class=\"box-header well\">
        <h2>
        
        </i>Datos Contacto</h2>
        </h2>
      </div>
      

        <table class=\"table table-bordered table-striped\">
          <tbody>
\t    <tr><td>Nombre</td><td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "nombrecontacto", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Cédula</td><td>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "documentocontacto", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Dirección</td><td>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "direccioncontacto", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Teléfono</td><td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "telefonocontacto", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Barrio</td><td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "barriocontacto", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Ciudad</td><td>";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "ciudadcontacto", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Departamento</td><td>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "departamentocontacto", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Celular</td><td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosenvio"]) ? $context["datosenvio"] : $this->getContext($context, "datosenvio")), "celularcontacto", array()), "html", null, true);
        echo "</td></tr> 
          </tbody>
        </table>
    </div>
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
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")));
        foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
            echo " 
          <tr>
              <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["datos"], "redencionestado", array()), "nombre", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["datos"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td>
              <td>";
            // line 161
            if ((null === $this->getAttribute($context["datos"], "ordenesproducto", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["datos"], "ordenesproducto", array()), "ordenescompra", array()), "consecutivo", array()), "html", null, true);
            }
            echo "</td>
              <td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "observacion", array()), "html", null, true);
            echo "</td>
              <td></td>
          </tr>         
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "
    </div>
  </div>


";
        
        $__internal_aa11de42db45fde1a31b2e8aa28a6e8be9ce5718b4ebde08978e8d503adf9536->leave($__internal_aa11de42db45fde1a31b2e8aa28a6e8be9ce5718b4ebde08978e8d503adf9536_prof);

    }

    // line 173
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_210ed185e97edef9fce2431682e2e3938eb52a64b4830e4c14b918df7bec268b = $this->env->getExtension("native_profiler");
        $__internal_210ed185e97edef9fce2431682e2e3938eb52a64b4830e4c14b918df7bec268b->enter($__internal_210ed185e97edef9fce2431682e2e3938eb52a64b4830e4c14b918df7bec268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 174
        echo "
";
        // line 175
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


";
        
        $__internal_210ed185e97edef9fce2431682e2e3938eb52a64b4830e4c14b918df7bec268b->leave($__internal_210ed185e97edef9fce2431682e2e3938eb52a64b4830e4c14b918df7bec268b_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:datosredencion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 175,  374 => 174,  368 => 173,  356 => 166,  346 => 162,  339 => 161,  335 => 160,  331 => 159,  324 => 157,  290 => 126,  286 => 125,  282 => 124,  278 => 123,  274 => 122,  270 => 121,  266 => 120,  262 => 119,  240 => 100,  236 => 99,  232 => 98,  228 => 97,  224 => 96,  220 => 95,  196 => 74,  192 => 73,  188 => 72,  184 => 71,  181 => 70,  173 => 68,  171 => 67,  153 => 52,  149 => 51,  145 => 50,  141 => 49,  137 => 48,  133 => 47,  129 => 46,  105 => 27,  102 => 26,  90 => 20,  88 => 19,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
/*         <a href="{{ path('redenciones_editarenvio') }}/{{ redencion.id }}" title="Editar Envio">*/
/*             <button class="btn btn-primary">*/
/*               <i class="icon-edit icon-white"></i>*/
/*             </button>*/
/*           </a>*/
/* */
/*       {% if(redencion.redencionestado.id < 4) %}*/
/*        <a href="{{ path('redenciones_editarproducto') }}/{{ redencion.id }}" title="Editar Envio">*/
/*             <button class="btn btn-primary btn-info">*/
/*               <i class="icon-barcode icon-white"></i>*/
/*             </button>*/
/*           </a>*/
/*       {% endif %}*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('redenciones_programa') }}/{{ redencion.participante.programa.id }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* <div class="box span12">*/
/*     <div class="box span6">*/
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
/*   */
/*   <div class="box span6">*/
/*       <div class="box-content">*/
/*         <div class="box-header well">*/
/*           <h2></i>Datos Producto</h2>*/
/*         </div>*/
/*         <table class="table table-bordered table-striped">*/
/*           <tbody>*/
/*             <tr><td colspan="2">*/
/*               {% if imagen|length > 0 %}*/
/*               <a href="../../../{{ imagen[0].path| slice (0) }}" target='_blank'><img src="../../../{{( imagen[0].path| slice (0))[:-4]}}_min.jpg"><a>*/
/*               {% endif %}*/
/*               </td></tr>*/
/*             <tr><td>Sku</td><td>{{ redencion.productocatalogo.producto.codInc }}</td></tr>*/
/*             <tr><td>Nombre</td><td>{{ redencion.productocatalogo.producto.nombre }}</td></tr>*/
/*             <tr><td>Descripcion</td><td>{{ redencion.productocatalogo.producto.descripcion }}</td></tr>*/
/*             <tr><td>Categoria</td><td>{{ redencion.productocatalogo.categoria.nombre }}</td></tr>*/
/*           </tbody>*/
/*         </table>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="box span12">*/
/*   <div class="box span6">*/
/*       <div class="box-content">*/
/*         */
/*         <div class="box-header well">*/
/*         <h2>*/
/*         */
/*         </i>Datos Envio</h2>*/
/*         </h2>*/
/*       </div>*/
/*       */
/* */
/*         <table class="table table-bordered table-striped">*/
/*           <tbody>*/
/*             <tr><td>Dirección</td><td>{{ datosenvio.direccion }}</td></tr>*/
/*             <tr><td>Barrio</td><td>{{ datosenvio.barrio }}</td></tr>*/
/*             <tr><td>Ciudad</td><td>{{ datosenvio.ciudadNombre }}</td></tr>*/
/*             <tr><td>Departamento</td><td>{{ datosenvio.departamentoNombre }}</td></tr>*/
/*             <tr><td>Teléfono</td><td>{{ datosenvio.telefono }}</td></tr>*/
/*             <tr><td>Celular</td><td>{{ datosenvio.celular }}</td></tr> */
/*           </tbody>*/
/*         </table>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="box span6">*/
/*       <div class="box-content">*/
/*         */
/*         <div class="box-header well">*/
/*         <h2>*/
/*         */
/*         </i>Datos Contacto</h2>*/
/*         </h2>*/
/*       </div>*/
/*       */
/* */
/*         <table class="table table-bordered table-striped">*/
/*           <tbody>*/
/* 	    <tr><td>Nombre</td><td>{{ datosenvio.nombrecontacto }}</td></tr>*/
/*             <tr><td>Cédula</td><td>{{ datosenvio.documentocontacto }}</td></tr>*/
/*             <tr><td>Dirección</td><td>{{ datosenvio.direccioncontacto }}</td></tr>*/
/*             <tr><td>Teléfono</td><td>{{ datosenvio.telefonocontacto  }}</td></tr>*/
/*             <tr><td>Barrio</td><td>{{ datosenvio.barriocontacto  }}</td></tr>*/
/*             <tr><td>Ciudad</td><td>{{ datosenvio.ciudadcontacto  }}</td></tr>*/
/*             <tr><td>Departamento</td><td>{{ datosenvio.departamentocontacto  }}</td></tr>*/
/*             <tr><td>Celular</td><td>{{ datosenvio.celularcontacto  }}</td></tr> */
/*           </tbody>*/
/*         </table>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
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
