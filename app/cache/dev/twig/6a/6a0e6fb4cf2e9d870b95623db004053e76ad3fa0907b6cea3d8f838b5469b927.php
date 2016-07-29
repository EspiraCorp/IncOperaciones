<?php

/* IncentivesOperacionesBundle:Proveedor:listado_nuevo.html.twig */
class __TwigTemplate_178dd0f4294e6fa93510b060f2f3e687869fec751b87fd55b866b9c1dd88aaf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:listado_nuevo.html.twig", 2);
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
        $__internal_5c316ec9545357c401f2cc4daa58efb4516c03e1d4f068886c5b5af4733ad7e9 = $this->env->getExtension("native_profiler");
        $__internal_5c316ec9545357c401f2cc4daa58efb4516c03e1d4f068886c5b5af4733ad7e9->enter($__internal_5c316ec9545357c401f2cc4daa58efb4516c03e1d4f068886c5b5af4733ad7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:listado_nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c316ec9545357c401f2cc4daa58efb4516c03e1d4f068886c5b5af4733ad7e9->leave($__internal_5c316ec9545357c401f2cc4daa58efb4516c03e1d4f068886c5b5af4733ad7e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d4aeb32f2b5065656a988b15887c7b0a505238927f98b8433fd0cece1c38f71 = $this->env->getExtension("native_profiler");
        $__internal_9d4aeb32f2b5065656a988b15887c7b0a505238927f98b8433fd0cece1c38f71->enter($__internal_9d4aeb32f2b5065656a988b15887c7b0a505238927f98b8433fd0cece1c38f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proveedores";
        
        $__internal_9d4aeb32f2b5065656a988b15887c7b0a505238927f98b8433fd0cece1c38f71->leave($__internal_9d4aeb32f2b5065656a988b15887c7b0a505238927f98b8433fd0cece1c38f71_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ac42440178055b75473812169bab074c5ac9af3ea244b99e27acb1e4b99d40ae = $this->env->getExtension("native_profiler");
        $__internal_ac42440178055b75473812169bab074c5ac9af3ea244b99e27acb1e4b99d40ae->enter($__internal_ac42440178055b75473812169bab074c5ac9af3ea244b99e27acb1e4b99d40ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_ac42440178055b75473812169bab074c5ac9af3ea244b99e27acb1e4b99d40ae->leave($__internal_ac42440178055b75473812169bab074c5ac9af3ea244b99e27acb1e4b99d40ae_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_27451c15c6680087987bd1f6b86f718a2375a710f1fe4c1a6a93180f0d712710 = $this->env->getExtension("native_profiler");
        $__internal_27451c15c6680087987bd1f6b86f718a2375a710f1fe4c1a6a93180f0d712710->enter($__internal_27451c15c6680087987bd1f6b86f718a2375a710f1fe4c1a6a93180f0d712710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\" style=\"width: 1600px !important\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Proveedores</h2>
\t\t\t<div class=\"box-icon\"> 
              <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("proveedores_importar");
        echo "\" title=\"Carga Masiva\" class=\"btn btn-round\"><i class=\"icon-upload\"></i></a>
              <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("proveedores_exportar");
        echo "\" title=\"Descargar\" class=\"btn btn-round\"><i class=\"icon-download\"></i></a>
              <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("proveedores_nuevo");
        echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div id=\"tabla\" class=\"table table-bordered table-striped\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"proveedores\" class=\"display\">
                      ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                        <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("proveedores");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
                        <div class=\"box-icon\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</div>
                        <thead  style=\"display:table-row-group;\">
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Identificacion</th>
                            <th>Pais</th>
                            <th>Ciudad</th>
                            <th>Correo</th>
                            <th>Calificación</th>
                            <th>Documentos</th>
                            <th>Catalogos</th>
                            <th>Estado</th>
                          </tr>
                          <tr>
                            
                            <th><input type=\"text\" id=\"proveedor_id\" name=\"proveedores[id]\" style=\"width: 40px\" value=\"";
        // line 40
        if ($this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : null), "id", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "id", array()), "html", null, true);
        }
        echo "\"></th>
                            <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("style" => "width: 150px")));
        echo "</th>
                            <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero_documento", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("style" => "width:80px")));
        echo "</th>
                          </tr>
                        </thead>
                        </form>
                        <tbody>
                          ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 55
            echo "                          <tr>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_datos", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "numerodocumento", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            if ((null === $this->getAttribute($context["proveedor"], "pais", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "pais", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 60
            if ((null === $this->getAttribute($context["proveedor"], "ciudad", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proveedor"], "ciudad", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "correo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "calificacion", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "html", null, true);
            echo "</td>
                            <td><div class=\"progress ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "clasedoc", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "html", null, true);
            echo " progress-striped\"><div class=\"bar\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "documentos", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "html", null, true);
            echo "%\"></div></div></td>
                            <td>";
            // line 64
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "catalogo", array(), "any", false, true), $this->getAttribute($context["proveedor"], "id", array()), array(), "array", false, true), "fecha", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "catalogo", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo " ";
            if ($this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "clasecat", array(), "any", false, true), $this->getAttribute($context["proveedor"], "id", array()), array(), "array", true, true)) {
                echo "<a class=\"btn ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : $this->getContext($context, "detalle")), "clasecat", array()), $this->getAttribute($context["proveedor"], "id", array()), array(), "array"), "html", null, true);
                echo "\" href=\"#\"><i class=\"icon-warning-sign\"></i></a>";
            }
            echo "</td>
                            <td>";
            // line 65
            if (($this->getAttribute($this->getAttribute($context["proveedor"], "estado", array()), "id", array()) != 1)) {
                echo "<a class=\"btn btn-danger\" id=\"enlaceajax";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
                echo "\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("proveedores_estado", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Inactivo</a>";
            } else {
                echo "<a class=\"btn btn-success\" id=\"enlaceajax";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
                echo "\" href=\"#\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("proveedores_estado", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
                echo "')\">Activo</a>";
            }
            echo "<div id=\"destino";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
            echo "\"></div></td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </tbody>
                      </table>
                    </div>  
            </div>
\t\t</div>
    <div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getTotalItemCount", array()), "html", null, true);
        echo "   Proveedores
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 78
        echo $this->env->getExtension('knp_pagination')->render((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        echo "                    
                </div>
        </div>
    </div>
\t</div>
</div>
";
        
        $__internal_27451c15c6680087987bd1f6b86f718a2375a710f1fe4c1a6a93180f0d712710->leave($__internal_27451c15c6680087987bd1f6b86f718a2375a710f1fe4c1a6a93180f0d712710_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bedf598bd5a8c5719274619eb75fcd98af333c9cf0bdc400ed51aa8c1fa07b7d = $this->env->getExtension("native_profiler");
        $__internal_bedf598bd5a8c5719274619eb75fcd98af333c9cf0bdc400ed51aa8c1fa07b7d->enter($__internal_bedf598bd5a8c5719274619eb75fcd98af333c9cf0bdc400ed51aa8c1fa07b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "
";
        // line 88
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\"> 
  function confirmar(ruta)
      {
        if (confirm(\"Desea cambiar el estado del proveedor\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>

";
        
        $__internal_bedf598bd5a8c5719274619eb75fcd98af333c9cf0bdc400ed51aa8c1fa07b7d->leave($__internal_bedf598bd5a8c5719274619eb75fcd98af333c9cf0bdc400ed51aa8c1fa07b7d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:listado_nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 88,  284 => 87,  278 => 86,  264 => 78,  254 => 75,  245 => 68,  222 => 65,  210 => 64,  204 => 63,  200 => 62,  196 => 61,  189 => 60,  182 => 59,  178 => 58,  172 => 57,  168 => 56,  165 => 55,  161 => 54,  153 => 49,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  124 => 40,  105 => 24,  99 => 23,  95 => 22,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Proveedores{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12" style="width: 1600px !important">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Proveedores</h2>*/
/* 			<div class="box-icon"> */
/*               <a href="{{ path('proveedores_importar') }}" title="Carga Masiva" class="btn btn-round"><i class="icon-upload"></i></a>*/
/*               <a href="{{ path('proveedores_exportar') }}" title="Descargar" class="btn btn-round"><i class="icon-download"></i></a>*/
/*               <a href="{{ path('proveedores_nuevo') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div id="tabla" class="table table-bordered table-striped" cellspacing="0" width="100%">*/
/*                       <table id="proveedores" class="display">*/
/*                       {{ form_start(form, { attr: {novalidate: 'novalidate'} }) }}*/
/*                         <form action="{{ path('proveedores') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*                         <div class="box-icon">{{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}</div>*/
/*                         <thead  style="display:table-row-group;">*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Nombre</th>*/
/*                             <th>Identificacion</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Ciudad</th>*/
/*                             <th>Correo</th>*/
/*                             <th>Calificación</th>*/
/*                             <th>Documentos</th>*/
/*                             <th>Catalogos</th>*/
/*                             <th>Estado</th>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             */
/*                             <th><input type="text" id="proveedor_id" name="proveedores[id]" style="width: 40px" value="{%if filtros.id is defined %}{{ filtros.id }}{% endif %}"></th>*/
/*                             <th>{{ form_widget(form.nombre, { 'attr': { 'style' : 'width: 150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.numero_documento, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.pais, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.ciudad, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.correo, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th></th>*/
/*                             <th></th>*/
/*                             <th></th>*/
/*                             <th>{{ form_widget(form.estado, { 'attr': { 'style' : 'width:80px' }} ) }}</th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         </form>*/
/*                         <tbody>*/
/*                           {% for proveedor in listado %}*/
/*                           <tr>*/
/*                             <td>{{ proveedor.id }}</td>*/
/*                             <td><a href="{{ path("proveedores_datos", {"id": proveedor.id}) }}">{{ proveedor.nombre }}</a></td>*/
/*                             <td>{{ proveedor.numerodocumento }}</td>*/
/*                             <td>{% if proveedor.pais is null %}{% else %}{{ proveedor.pais.nombre }}{% endif %}</td>*/
/*                             <td>{% if proveedor.ciudad is null %}{% else %}{{ proveedor.ciudad.nombre }}{% endif %}</td>*/
/*                             <td>{{ proveedor.correo }}</td>*/
/*                             <td>{{ detalle.calificacion[proveedor.id] }}</td>*/
/*                             <td><div class="progress {{ detalle.clasedoc[proveedor.id] }} progress-striped"><div class="bar" style="width: {{ detalle.documentos[proveedor.id] }}%"></div></div></td>*/
/*                             <td>{%if detalle.catalogo[proveedor.id].fecha is defined %}{{ detalle.catalogo[proveedor.id].fecha | date("Y-m-d") }}{% endif %} {%if detalle.clasecat[proveedor.id] is defined %}<a class="btn {{ detalle.clasecat[proveedor.id] }}" href="#"><i class="icon-warning-sign"></i></a>{% endif %}</td>*/
/*                             <td>{% if (proveedor.estado.id!=1) %}<a class="btn btn-danger" id="enlaceajax{{ proveedor.id }}" onClick="confirmar('{{ url("proveedores_estado", {"id": proveedor.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success" id="enlaceajax{{ proveedor.id }}" href="#" onClick="confirmar('{{ url("proveedores_estado", {"id": proveedor.id}) }}')">Activo</a>{% endif %}<div id="destino{{ proveedor.id }}"></div></td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                       </table>*/
/*                     </div>  */
/*             </div>*/
/* 		</div>*/
/*     <div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ listado.getItemNumberPerPage*(listado.getCurrentPageNumber-1)+1  }} a {{ listado.getItemNumberPerPage*listado.getCurrentPageNumber }} de {{ listado.getTotalItemCount }}   Proveedores*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(listado) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/*   <script type="text/javascript"> */
/*   function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado del proveedor")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
