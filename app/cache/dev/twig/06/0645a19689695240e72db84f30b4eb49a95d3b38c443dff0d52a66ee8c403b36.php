<?php

/* IncentivesInventarioBundle:Inventario:salida.html.twig */
class __TwigTemplate_f8b0d21c543438debe171691266f4b4ae4be04640abcbdd226dd096daf8a4248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:salida.html.twig", 1);
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
        $__internal_ce5cbc2dc314a52abe0da926b8cc42b5365cc3b48adf120280fc9aa62ad5c937 = $this->env->getExtension("native_profiler");
        $__internal_ce5cbc2dc314a52abe0da926b8cc42b5365cc3b48adf120280fc9aa62ad5c937->enter($__internal_ce5cbc2dc314a52abe0da926b8cc42b5365cc3b48adf120280fc9aa62ad5c937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:salida.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce5cbc2dc314a52abe0da926b8cc42b5365cc3b48adf120280fc9aa62ad5c937->leave($__internal_ce5cbc2dc314a52abe0da926b8cc42b5365cc3b48adf120280fc9aa62ad5c937_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7fff29b4b75bd59921fb63a0e7a3f3b285624f2e720dae5f20787cde9f79e59 = $this->env->getExtension("native_profiler");
        $__internal_e7fff29b4b75bd59921fb63a0e7a3f3b285624f2e720dae5f20787cde9f79e59->enter($__internal_e7fff29b4b75bd59921fb63a0e7a3f3b285624f2e720dae5f20787cde9f79e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Producto Inventario";
        
        $__internal_e7fff29b4b75bd59921fb63a0e7a3f3b285624f2e720dae5f20787cde9f79e59->leave($__internal_e7fff29b4b75bd59921fb63a0e7a3f3b285624f2e720dae5f20787cde9f79e59_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_1233a031961b31a775de3db7fb8bdd171ec8af248b8d996fb4b4507abba80ad2 = $this->env->getExtension("native_profiler");
        $__internal_1233a031961b31a775de3db7fb8bdd171ec8af248b8d996fb4b4507abba80ad2->enter($__internal_1233a031961b31a775de3db7fb8bdd171ec8af248b8d996fb4b4507abba80ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Datos Producto Inventario
        <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("inventario_listadosalida");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
    </div>
</div>

<div class=\"box span12\">
    <div class=\"box-content span6\">
        <div class=\"box-header well\">
            <h2></i>Datos Producto</h2>
        </div>
        <table class=\"table table-bordered table-striped\">
          <tbody>
            <tr><td>Nombre</td><td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "producto", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Referencia</td><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "producto", array()), "referencia", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Marca</td><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "producto", array()), "marca", array()), "html", null, true);
        echo "</td></tr>
            ";
        // line 27
        if ((null === $this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "orden", array()))) {
        } else {
            // line 28
            echo "                <tr><td>Orden Compra</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "orden", array()), "consecutivo", array()), "html", null, true);
            echo "</td></tr>
                <tr><td>Proveedor</td><td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "orden", array()), "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        // line 31
        echo "            <tr><td>Fecha Ingreso</td><td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "fechaEntrada", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
            <tr><td>Planilla</td><td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "planilla", array()), "id", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Fecha Salida</td><td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "fechaSalida", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
            <tr><td>Estado</td><td></td></tr>
            <tr><td>Observacion</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")), "observacion", array()), "html", null, true);
        echo "</td></tr>
          </tbody>
        </table>
    </div>

";
        // line 40
        if ((null === (isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")))) {
            // line 41
            echo "
";
        } else {
            // line 43
            echo "    <div class=\"box-content span6\">
        
        <div class=\"box-header well\">
            <h2></i>Datos Redencion</h2>
        </div>
        <table class=\"table table-bordered table-striped\">
          <tbody>
            <tr><td>Programa</td><td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "catalogos", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Participante</td><td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "nombre", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Documento</td><td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "documento", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Fecha de solicitud</td><td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</td></tr>
            <tr><td>Valor</td><td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "valor", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Codigo</td><td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "codigoredencion", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Estado</td><td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "redencionestado", array()), "nombre", array()), "html", null, true);
            echo "</td></tr>
          </tbody>
        </table>
    </div>
  </div>
 ";
        }
        // line 61
        echo " 
  
  
  
  
  <div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Salida de Inventario</h2>
                        
                    </div>
<div class=\"box-content\">
<form action=\"\" method=\"POST\" ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salio", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salio", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>
 <div class=\"form-actions\">
    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>

  ";
        
        $__internal_1233a031961b31a775de3db7fb8bdd171ec8af248b8d996fb4b4507abba80ad2->leave($__internal_1233a031961b31a775de3db7fb8bdd171ec8af248b8d996fb4b4507abba80ad2_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:salida.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 91,  219 => 89,  211 => 84,  206 => 82,  199 => 78,  194 => 76,  188 => 73,  184 => 72,  171 => 61,  162 => 56,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  129 => 43,  125 => 41,  123 => 40,  115 => 35,  110 => 33,  106 => 32,  101 => 31,  96 => 29,  91 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Datos Producto Inventario{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Datos Producto Inventario*/
/*         <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('inventario_listadosalida') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="box span12">*/
/*     <div class="box-content span6">*/
/*         <div class="box-header well">*/
/*             <h2></i>Datos Producto</h2>*/
/*         </div>*/
/*         <table class="table table-bordered table-striped">*/
/*           <tbody>*/
/*             <tr><td>Nombre</td><td>{{ inventario.producto.nombre }}</td></tr>*/
/*             <tr><td>Referencia</td><td>{{ inventario.producto.referencia }}</td></tr>*/
/*             <tr><td>Marca</td><td>{{ inventario.producto.marca }}</td></tr>*/
/*             {% if inventario.orden is null %}{% else %}*/
/*                 <tr><td>Orden Compra</td><td>{{ inventario.orden.consecutivo }}</td></tr>*/
/*                 <tr><td>Proveedor</td><td>{{ inventario.orden.proveedor.nombre }}</td></tr>*/
/*             {% endif %}*/
/*             <tr><td>Fecha Ingreso</td><td>{{ inventario.fechaEntrada | date("Y-m-d")}}</td></tr>*/
/*             <tr><td>Planilla</td><td>{{ inventario.planilla.id }}</td></tr>*/
/*             <tr><td>Fecha Salida</td><td>{{ inventario.fechaSalida | date("Y-m-d")  }}</td></tr>*/
/*             <tr><td>Estado</td><td></td></tr>*/
/*             <tr><td>Observacion</td><td>{{ inventario.observacion }}</td></tr>*/
/*           </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% if redencion is null %}*/
/* */
/* {% else %}*/
/*     <div class="box-content span6">*/
/*         */
/*         <div class="box-header well">*/
/*             <h2></i>Datos Redencion</h2>*/
/*         </div>*/
/*         <table class="table table-bordered table-striped">*/
/*           <tbody>*/
/*             <tr><td>Programa</td><td>{{ redencion.productocatalogo.catalogos.programa.nombre }}</td></tr>*/
/*             <tr><td>Participante</td><td>{{ redencion.participante.nombre }}</td></tr>*/
/*             <tr><td>Documento</td><td>{{ redencion.participante.documento }}</td></tr>*/
/*             <tr><td>Fecha de solicitud</td><td>{{ redencion.fecha | date("Y-m-d") }}</td></tr>*/
/*             <tr><td>Valor</td><td>{{ redencion.valor }}</td></tr>*/
/*             <tr><td>Codigo</td><td>{{ redencion.codigoredencion }}</td></tr>*/
/*             <tr><td>Estado</td><td>{{ redencion.redencionestado.nombre }}</td></tr>*/
/*           </tbody>*/
/*         </table>*/
/*     </div>*/
/*   </div>*/
/*  {% endif %} */
/*   */
/*   */
/*   */
/*   */
/*   <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Salida de Inventario</h2>*/
/*                         */
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.salio, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.salio, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.observacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.observacion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*  <div class="form-actions">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/* */
/*   {% endblock %}*/
/* */
