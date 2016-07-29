<?php

/* IncentivesInventarioBundle:Inventario:redenciones.html.twig */
class __TwigTemplate_f6ce8938cc2c3b517909733f159d366f2c9db37fc5e1199c8450dd3c3d3e6b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:redenciones.html.twig", 1);
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
        $__internal_6bc12f98b77c62426c01cbdf79b130bc582742262eabaaa0e13949885d691068 = $this->env->getExtension("native_profiler");
        $__internal_6bc12f98b77c62426c01cbdf79b130bc582742262eabaaa0e13949885d691068->enter($__internal_6bc12f98b77c62426c01cbdf79b130bc582742262eabaaa0e13949885d691068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:redenciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc12f98b77c62426c01cbdf79b130bc582742262eabaaa0e13949885d691068->leave($__internal_6bc12f98b77c62426c01cbdf79b130bc582742262eabaaa0e13949885d691068_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aa49eec65873b522bdfa375a214ec76ffd72b93c94acf7fd8ab94bc05ef6d45 = $this->env->getExtension("native_profiler");
        $__internal_9aa49eec65873b522bdfa375a214ec76ffd72b93c94acf7fd8ab94bc05ef6d45->enter($__internal_9aa49eec65873b522bdfa375a214ec76ffd72b93c94acf7fd8ab94bc05ef6d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Envio - Redenciones por programa";
        
        $__internal_9aa49eec65873b522bdfa375a214ec76ffd72b93c94acf7fd8ab94bc05ef6d45->leave($__internal_9aa49eec65873b522bdfa375a214ec76ffd72b93c94acf7fd8ab94bc05ef6d45_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0cf4630fe1c355615242027a22977489416cfad79d59adc31ac1bdaa7607c221 = $this->env->getExtension("native_profiler");
        $__internal_0cf4630fe1c355615242027a22977489416cfad79d59adc31ac1bdaa7607c221->enter($__internal_0cf4630fe1c355615242027a22977489416cfad79d59adc31ac1bdaa7607c221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_0cf4630fe1c355615242027a22977489416cfad79d59adc31ac1bdaa7607c221->leave($__internal_0cf4630fe1c355615242027a22977489416cfad79d59adc31ac1bdaa7607c221_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d1ca98c6a1c36d8c9ad532b5d783bac58c3a3e5a861549341d6aec549785f466 = $this->env->getExtension("native_profiler");
        $__internal_d1ca98c6a1c36d8c9ad532b5d783bac58c3a3e5a861549341d6aec549785f466->enter($__internal_d1ca98c6a1c36d8c9ad532b5d783bac58c3a3e5a861549341d6aec549785f466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Datos Envio - Redenciones por programa</h2>
      <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("inventario_programas");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
      <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redenciones_exportar", array("programa" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()))), "html", null, true);
        echo "\" title=\"Descargar\">
            <button class=\"btn btn-small\">
              <i class=\"icon-download\"></i>
            </button>
          </a>
      ";
        // line 39
        echo "\t\t</div>
\t\t<div class=\"box-content\">
      ";
        // line 41
        if (((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")) != null)) {
            // line 42
            echo "\t\t\t<div id=\"dashboard\">                  
                    <div class=\"row-fluid\">
                        <div id=\"control1\" class=\"span3\"></div>
                        <div id=\"control6\" class=\"span3\"></div>
                        <div id=\"control2\" class=\"span3\"></div>
                        
                    </div>    
                    <div class=\"row-fluid\">
                        <div id=\"control3\" class=\"span3\"></div>         
                        <div id=\"control4\" class=\"span3\"></div>
                        <div id=\"control5\" class=\"span3\"></div>
                    </div>    
                    <div id=\"tabla\" class=\"row-fluid\"></div>           
            </div>
            ";
        } else {
            // line 57
            echo "            <div class=\"alert alert-info\">
                      No existen redenciones asociadas al programa
                    </div>
            ";
        }
        // line 61
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_d1ca98c6a1c36d8c9ad532b5d783bac58c3a3e5a861549341d6aec549785f466->leave($__internal_d1ca98c6a1c36d8c9ad532b5d783bac58c3a3e5a861549341d6aec549785f466_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f797ab401921ab09d3b008ba25b485ac0f6f06c69fb7e26bd5490a5935de0d6e = $this->env->getExtension("native_profiler");
        $__internal_f797ab401921ab09d3b008ba25b485ac0f6f06c69fb7e26bd5490a5935de0d6e->enter($__internal_f797ab401921ab09d3b008ba25b485ac0f6f06c69fb7e26bd5490a5935de0d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "
";
        // line 68
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script type=\"text/javascript\" src=\"//www.google.com/jsapi\"></script>
    <script type=\"text/javascript\">
      google.load('visualization', '1.1', {packages: ['controls']});
    </script>
    <script type=\"text/javascript\">
      function drawVisualization() {
        // Prepare the data.
        var data = google.visualization.arrayToDataTable([
          ['Participante','Documento', 'Producto','Codigo','Estado','Fecha'],
          ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")));
        foreach ($context['_seq'] as $context["_key"] => $context["redenciones"]) {
            // line 80
            echo "                [ '<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("garantias_editarenvio", array("redencion" => $this->getAttribute($context["redenciones"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redenciones"], "participante", array()), "nombre", array()), "html", null, true);
            echo "</a>',
                '";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redenciones"], "participante", array()), "documento", array()), "html", null, true);
            echo "',
                 '";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redenciones"], "productocatalogo", array()), "producto", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["redenciones"], "codigoredencion", array()), "html", null, true);
            echo "',
                 '";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redenciones"], "redencionestado", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["redenciones"], "fecha", array()), "d-M-Y"), "html", null, true);
            echo "',],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redenciones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        ]);
      
        // Define a StringFilter control for the 'Name' column
        var stringFilter = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control1',
          'options': {
            'filterColumnLabel': 'Participante',
            'matchType': 'any'
          }
        });

        var stringFilter2 = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control2',
          'options': {
            'filterColumnLabel': 'Producto',
            'matchType': 'any'
          }
        });

        var stringFilter3 = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'control3',
          'options': {
            'filterColumnLabel': 'Estado',
            'ui': {
              'allowTyping': true,
              'allowMultiple': true
            }
          }
        });

        var stringFilter4 = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'control4',
          'options': {
            'filterColumnLabel': 'Fecha',
            'ui': {
              'allowTyping': true,
              'allowMultiple': true
            }
          }
        });

        var stringFilter5 = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control5',
          'options': {
            'filterColumnLabel': 'Codigo',
            'matchType': 'any'
          }
        });
        var stringFilter6 = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control6',
          'options': {
            'filterColumnLabel': 'Documento',
            'matchType': 'any'
          }
        });
      
        // Define a table visualization
        var table = new google.visualization.ChartWrapper({
                'chartType': 'Table',
                'containerId': 'tabla',
            options: {
              showRowNumber: true,
              page: 'enable',
              pageSize: 25,
              pagingSymbols: {
                  prev: '<<',
                  next: '>>'
              },
              pagingButtonsConfiguration: 'auto',
              'allowHtml': true,
          }
        });

        // Create the dashboard.
        var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard')).
          // Configure the string filter to affect the table contents
          bind(stringFilter, table).
          bind(stringFilter2, table).
          bind(stringFilter3, table).
          bind(stringFilter4, table).
          bind(stringFilter5, table).
          bind(stringFilter6, table).
          // Draw the dashboard
          draw(data);
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>

  <script type=\"text/javascript\">
      function confirmar(ruta)
      {
        if (confirm(\"Desea cambiar el estado\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>

";
        
        $__internal_f797ab401921ab09d3b008ba25b485ac0f6f06c69fb7e26bd5490a5935de0d6e->leave($__internal_f797ab401921ab09d3b008ba25b485ac0f6f06c69fb7e26bd5490a5935de0d6e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:redenciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 87,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  165 => 81,  158 => 80,  154 => 79,  140 => 68,  137 => 67,  131 => 66,  121 => 61,  115 => 57,  98 => 42,  96 => 41,  92 => 39,  84 => 17,  78 => 14,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Datos Envio - Redenciones por programa{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Datos Envio - Redenciones por programa</h2>*/
/*       <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('inventario_programas') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/*       <a href="{{ path('redenciones_exportar', {"programa": programa.id}) }}" title="Descargar">*/
/*             <button class="btn btn-small">*/
/*               <i class="icon-download"></i>*/
/*             </button>*/
/*           </a>*/
/*       {# <a href="{{ path('proveedores_importar') }}" title="Carga Masiva">*/
/*             <button class="btn btn-small">*/
/*               <i class="icon-upload"></i>*/
/*             </button>*/
/*           </a>*/
/*       <a href="{{ path('proveedores_exportar') }}" title="Descargar">*/
/*             <button class="btn btn-small">*/
/*               <i class="icon-download"></i>*/
/*             </button>*/
/*           </a>*/
/* 			<div class="box-icon">  */
/*         <a href="{{ path('participante_nuevo') }}" title="Agregar">*/
/*             <button class="btn btn-small btn-success">*/
/*               <i class="icon-plus icon-white"></i>*/
/*             </button>*/
/*           </a>*/
/* 			</div> #}*/
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {% if redencion!=null %}*/
/* 			<div id="dashboard">                  */
/*                     <div class="row-fluid">*/
/*                         <div id="control1" class="span3"></div>*/
/*                         <div id="control6" class="span3"></div>*/
/*                         <div id="control2" class="span3"></div>*/
/*                         */
/*                     </div>    */
/*                     <div class="row-fluid">*/
/*                         <div id="control3" class="span3"></div>         */
/*                         <div id="control4" class="span3"></div>*/
/*                         <div id="control5" class="span3"></div>*/
/*                     </div>    */
/*                     <div id="tabla" class="row-fluid"></div>           */
/*             </div>*/
/*             {% else %}*/
/*             <div class="alert alert-info">*/
/*                       No existen redenciones asociadas al programa*/
/*                     </div>*/
/*             {% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* 	<script type="text/javascript" src="//www.google.com/jsapi"></script>*/
/*     <script type="text/javascript">*/
/*       google.load('visualization', '1.1', {packages: ['controls']});*/
/*     </script>*/
/*     <script type="text/javascript">*/
/*       function drawVisualization() {*/
/*         // Prepare the data.*/
/*         var data = google.visualization.arrayToDataTable([*/
/*           ['Participante','Documento', 'Producto','Codigo','Estado','Fecha'],*/
/*           {% for redenciones in redencion %}*/
/*                 [ '<a href="{{ path("garantias_editarenvio", {"redencion": redenciones.id }) }}">{{ redenciones.participante.nombre }}</a>',*/
/*                 '{{ redenciones.participante.documento }}',*/
/*                  '{{ redenciones.productocatalogo.producto.nombre }}',*/
/*                  '{{ redenciones.codigoredencion }}',*/
/*                  '{{ redenciones.redencionestado.nombre }}',*/
/*                  '{{ redenciones.fecha | date("d-M-Y") }}',],*/
/*             {% endfor %}*/
/*         ]);*/
/*       */
/*         // Define a StringFilter control for the 'Name' column*/
/*         var stringFilter = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control1',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Participante',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter2 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control2',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Producto',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter3 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'CategoryFilter',*/
/*           'containerId': 'control3',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Estado',*/
/*             'ui': {*/
/*               'allowTyping': true,*/
/*               'allowMultiple': true*/
/*             }*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter4 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'CategoryFilter',*/
/*           'containerId': 'control4',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Fecha',*/
/*             'ui': {*/
/*               'allowTyping': true,*/
/*               'allowMultiple': true*/
/*             }*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter5 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control5',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Codigo',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/*         var stringFilter6 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control6',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Documento',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/*       */
/*         // Define a table visualization*/
/*         var table = new google.visualization.ChartWrapper({*/
/*                 'chartType': 'Table',*/
/*                 'containerId': 'tabla',*/
/*             options: {*/
/*               showRowNumber: true,*/
/*               page: 'enable',*/
/*               pageSize: 25,*/
/*               pagingSymbols: {*/
/*                   prev: '<<',*/
/*                   next: '>>'*/
/*               },*/
/*               pagingButtonsConfiguration: 'auto',*/
/*               'allowHtml': true,*/
/*           }*/
/*         });*/
/* */
/*         // Create the dashboard.*/
/*         var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard')).*/
/*           // Configure the string filter to affect the table contents*/
/*           bind(stringFilter, table).*/
/*           bind(stringFilter2, table).*/
/*           bind(stringFilter3, table).*/
/*           bind(stringFilter4, table).*/
/*           bind(stringFilter5, table).*/
/*           bind(stringFilter6, table).*/
/*           // Draw the dashboard*/
/*           draw(data);*/
/*       }*/
/*       */
/* */
/*       google.setOnLoadCallback(drawVisualization);*/
/*     </script>*/
/* */
/*   <script type="text/javascript">*/
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado")==true){*/
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
/* */
