<?php

/* IncentivesOrdenesBundle:OrdenRedencion:pendientes.html.twig */
class __TwigTemplate_70cef91e2d5ca914f5e1137bac31adf3b1dddc315830026998df087eaf18239b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:OrdenRedencion:pendientes.html.twig", 1);
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
        $__internal_72ce4fdf495714ac66db88bc14e3b5252a1ee9c3dab1bd84c7fe879db32a1228 = $this->env->getExtension("native_profiler");
        $__internal_72ce4fdf495714ac66db88bc14e3b5252a1ee9c3dab1bd84c7fe879db32a1228->enter($__internal_72ce4fdf495714ac66db88bc14e3b5252a1ee9c3dab1bd84c7fe879db32a1228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:OrdenRedencion:pendientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ce4fdf495714ac66db88bc14e3b5252a1ee9c3dab1bd84c7fe879db32a1228->leave($__internal_72ce4fdf495714ac66db88bc14e3b5252a1ee9c3dab1bd84c7fe879db32a1228_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1183b5a81cc1d20145271c416ba4da55babfd15632115831882a8dbf16fb74a5 = $this->env->getExtension("native_profiler");
        $__internal_1183b5a81cc1d20145271c416ba4da55babfd15632115831882a8dbf16fb74a5->enter($__internal_1183b5a81cc1d20145271c416ba4da55babfd15632115831882a8dbf16fb74a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nueva Orden";
        
        $__internal_1183b5a81cc1d20145271c416ba4da55babfd15632115831882a8dbf16fb74a5->leave($__internal_1183b5a81cc1d20145271c416ba4da55babfd15632115831882a8dbf16fb74a5_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6e77b9e28d1245ca7c4478958c154da1b0322c74da13879263954da322c84349 = $this->env->getExtension("native_profiler");
        $__internal_6e77b9e28d1245ca7c4478958c154da1b0322c74da13879263954da322c84349->enter($__internal_6e77b9e28d1245ca7c4478958c154da1b0322c74da13879263954da322c84349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Nueva Orden</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ordenes");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ordenredencion_pendientes");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'widget', array("id" => "fechaCreacion"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaVencimiento", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaVencimiento", array()), 'widget', array("id" => "fechaVencimiento"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        
    </fieldset>
    <div class=\"row-fluid sortable ui-sortable\">
        <div class=\"ordenesProducto box span10\" data-prototype=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordenesProducto", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            <div class=\"box-header well\" data-original-title>            
                <h2><i class=\"icon-user\"></i>Productos</h2>
            </div>
            <div class=\"box-content\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Agregar</th>
                            <th>Producto</th>
                            <th>Cantidad pendiente</th>
                            <th>Orden Original</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 60
        $context["i"] = 0;
        // line 61
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")));
        foreach ($context['_seq'] as $context["_key"] => $context["orden"]) {
            // line 62
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 63
                echo "                                ";
                if ((($this->getAttribute($context["producto"], "ordenesCompra", array()) == $context["orden"]) && ($this->getAttribute($context["producto"], "cantidadrecibida", array()) != $this->getAttribute($context["producto"], "cantidad", array())))) {
                    // line 64
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 65
                    echo "                                 <tr>
                                    <td><input type=\"checkbox\" name=\"agregar[";
                    // line 66
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "]\" value=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                    echo "></td>
                                    <td>";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 68
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "cantidad", array()) - $this->getAttribute($context["producto"], "cantidadrecibida", array())), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "ordenesCompra", array()), "id", array()), "html", null, true);
                    echo "</td>
                                 </tr>
                                ";
                }
                // line 72
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orden'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </tbody>
                </table>   
                </div>
        </div> 
    </div>  
<div class=\"form-actions\">
    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_6e77b9e28d1245ca7c4478958c154da1b0322c74da13879263954da322c84349->leave($__internal_6e77b9e28d1245ca7c4478958c154da1b0322c74da13879263954da322c84349_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be6b3066225d4a9625b34a70f2c09755b22afd14974c55b3404f2e6c67a598bc = $this->env->getExtension("native_profiler");
        $__internal_be6b3066225d4a9625b34a70f2c09755b22afd14974c55b3404f2e6c67a598bc->enter($__internal_be6b3066225d4a9625b34a70f2c09755b22afd14974c55b3404f2e6c67a598bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <script>
        \$( \"#fechaCreacion\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaVencimiento\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

";
        
        $__internal_be6b3066225d4a9625b34a70f2c09755b22afd14974c55b3404f2e6c67a598bc->leave($__internal_be6b3066225d4a9625b34a70f2c09755b22afd14974c55b3404f2e6c67a598bc_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:OrdenRedencion:pendientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 91,  227 => 90,  214 => 82,  209 => 80,  201 => 74,  195 => 73,  189 => 72,  183 => 69,  179 => 68,  175 => 67,  169 => 66,  166 => 65,  163 => 64,  160 => 63,  155 => 62,  150 => 61,  148 => 60,  130 => 45,  121 => 39,  116 => 37,  109 => 33,  104 => 31,  97 => 27,  92 => 25,  85 => 21,  80 => 19,  74 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Nueva Orden{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Nueva Orden</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('ordenes') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('ordenredencion_pendientes') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.proveedor, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.proveedor, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaCreacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaCreacion, { 'id': 'fechaCreacion' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaVencimiento, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaVencimiento, { 'id': 'fechaVencimiento' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.observaciones, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.observaciones, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </fieldset>*/
/*     <div class="row-fluid sortable ui-sortable">*/
/*         <div class="ordenesProducto box span10" data-prototype="{{ form_widget(form.ordenesProducto.vars.prototype)|e }}">*/
/*             <div class="box-header well" data-original-title>            */
/*                 <h2><i class="icon-user"></i>Productos</h2>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                 <table class="table">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Agregar</th>*/
/*                             <th>Producto</th>*/
/*                             <th>Cantidad pendiente</th>*/
/*                             <th>Orden Original</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% set i=0 %}*/
/*                         {% for orden in ordenes %}*/
/*                             {% for producto in productos %}*/
/*                                 {% if (producto.ordenesCompra==orden and producto.cantidadrecibida!=producto.cantidad) %}*/
/*                                 {% set i=i+1 %}*/
/*                                  <tr>*/
/*                                     <td><input type="checkbox" name="agregar[{{ i }}]" value={{ producto.id }}></td>*/
/*                                     <td>{{ producto.producto.nombre }}</td>*/
/*                                     <td>{{ producto.cantidad-producto.cantidadrecibida }}</td>*/
/*                                     <td>{{ producto.ordenesCompra.id }}</td>*/
/*                                  </tr>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>   */
/*                 </div>*/
/*         </div> */
/*     </div>  */
/* <div class="form-actions">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*    <script>*/
/*         $( "#fechaCreacion" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaVencimiento" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* {% endblock %}*/
