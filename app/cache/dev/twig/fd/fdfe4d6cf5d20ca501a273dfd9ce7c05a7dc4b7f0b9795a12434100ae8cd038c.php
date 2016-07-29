<?php

/* IncentivesInventarioBundle:Courier:listado.html.twig */
class __TwigTemplate_2c5a75e252fb7bb6b06b1a980c6d60d0e341667343565979c9a502083aa867d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Courier:listado.html.twig", 1);
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
        $__internal_3090b8a7708060acac1ef2be4f717ff4c10581ba01f3cbef8bd6749129e7b809 = $this->env->getExtension("native_profiler");
        $__internal_3090b8a7708060acac1ef2be4f717ff4c10581ba01f3cbef8bd6749129e7b809->enter($__internal_3090b8a7708060acac1ef2be4f717ff4c10581ba01f3cbef8bd6749129e7b809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Courier:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3090b8a7708060acac1ef2be4f717ff4c10581ba01f3cbef8bd6749129e7b809->leave($__internal_3090b8a7708060acac1ef2be4f717ff4c10581ba01f3cbef8bd6749129e7b809_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8108cf5e1b9671e23dfa00e3622a6fa77ee1dfdd78cc38a88299db491db5fd44 = $this->env->getExtension("native_profiler");
        $__internal_8108cf5e1b9671e23dfa00e3622a6fa77ee1dfdd78cc38a88299db491db5fd44->enter($__internal_8108cf5e1b9671e23dfa00e3622a6fa77ee1dfdd78cc38a88299db491db5fd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Courier";
        
        $__internal_8108cf5e1b9671e23dfa00e3622a6fa77ee1dfdd78cc38a88299db491db5fd44->leave($__internal_8108cf5e1b9671e23dfa00e3622a6fa77ee1dfdd78cc38a88299db491db5fd44_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1c820481de16d3c2f6068a08f7fd7cdd31f002817201de693fff6e49d9228e20 = $this->env->getExtension("native_profiler");
        $__internal_1c820481de16d3c2f6068a08f7fd7cdd31f002817201de693fff6e49d9228e20->enter($__internal_1c820481de16d3c2f6068a08f7fd7cdd31f002817201de693fff6e49d9228e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_1c820481de16d3c2f6068a08f7fd7cdd31f002817201de693fff6e49d9228e20->leave($__internal_1c820481de16d3c2f6068a08f7fd7cdd31f002817201de693fff6e49d9228e20_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d255b7fa5d23e10eeae69e90d97d59daca17bfc71729396c0859e8087f5d6f82 = $this->env->getExtension("native_profiler");
        $__internal_d255b7fa5d23e10eeae69e90d97d59daca17bfc71729396c0859e8087f5d6f82->enter($__internal_d255b7fa5d23e10eeae69e90d97d59daca17bfc71729396c0859e8087f5d6f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Courier</h2>
      <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("proveedores_importar");
        echo "\" title=\"Carga Masiva\">
            <button class=\"btn btn-small\">
              <i class=\"icon-upload\"></i>
            </button>
          </a>
      <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("proveedores_exportar");
        echo "\" title=\"Descargar\">
            <button class=\"btn btn-small\">
              <i class=\"icon-download\"></i>
            </button>
          </a>
\t\t\t<div class=\"box-icon\">  
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("inventario_courier_nuevo");
        echo "\" title=\"Agregar\">
            <button class=\"btn btn-small btn-success\">
              <i class=\"icon-plus icon-white\"></i>
            </button>
          </a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                    <div class=\"row-fluid\">
                        <div id=\"control1\" class=\"span3\"></div>
                        <div id=\"control2\" class=\"span3\"></div>
                        <div id=\"control3\" class=\"span3\"></div>
                        <div id=\"control4\" class=\"span3\"></div>
                    </div>
                    <div id=\"tabla\" class=\"row-fluid\"></div>  
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_d255b7fa5d23e10eeae69e90d97d59daca17bfc71729396c0859e8087f5d6f82->leave($__internal_d255b7fa5d23e10eeae69e90d97d59daca17bfc71729396c0859e8087f5d6f82_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27c969f8861fd4bdebd9e2fea8e3c272e06455df48894191e29b85ef400de2a0 = $this->env->getExtension("native_profiler");
        $__internal_27c969f8861fd4bdebd9e2fea8e3c272e06455df48894191e29b85ef400de2a0->enter($__internal_27c969f8861fd4bdebd9e2fea8e3c272e06455df48894191e29b85ef400de2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "
";
        // line 47
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
          ['Nombre', 'Documento', 'Direccion','Telefono', 'Correo', 'Estado'],
          ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courier"]) ? $context["courier"] : $this->getContext($context, "courier")));
        foreach ($context['_seq'] as $context["_key"] => $context["couriers"]) {
            // line 59
            echo "                [ '<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("participante_editar", array("id" => $this->getAttribute($context["couriers"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["couriers"], "nombre", array()), "html", null, true);
            echo "</a>',
                 '";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couriers"], "tipodocumento", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["couriers"], "documento", array()), "html", null, true);
            echo " ',
                 '";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["couriers"], "direccion", array()), "html", null, true);
            echo "',
                 '";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["couriers"], "telefono", array()), "html", null, true);
            echo "',
                 '";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["couriers"], "correo", array()), "html", null, true);
            echo "',
                 '";
            // line 64
            if (($this->getAttribute($context["couriers"], "estado", array()) == "0")) {
                echo "<a class=\"btn btn-danger\" id=\"enlaceajax";
                echo twig_escape_filter($this->env, $this->getAttribute($context["couriers"], "id", array()), "html", null, true);
                echo "\" href=\"#\">Inactivo</a>";
            } else {
                echo "<a class=\"btn btn-success\" id=\"enlaceajax";
                echo twig_escape_filter($this->env, $this->getAttribute($context["couriers"], "id", array()), "html", null, true);
                echo "\" href=\"#\">Activo</a>";
            }
            echo "<div id=\"destino";
            echo twig_escape_filter($this->env, $this->getAttribute($context["couriers"], "id", array()), "html", null, true);
            echo "\"></div>',],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couriers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        ]);
      
        // Define a StringFilter control for the 'Name' column
        var stringFilter = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control1',
          'options': {
            'filterColumnLabel': 'Nombre',
            'matchType': 'any'
          }
        });

        var stringFilter2 = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control2',
          'options': {
            'filterColumnLabel': 'Documento',
            'matchType': 'any'
          }
        });

        var stringFilter3 = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'control3',
          'options': {
            'filterColumnLabel': 'Correo',
            'ui': {
              'allowTyping': true,
              'allowMultiple': true
            }
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
        
        $__internal_27c969f8861fd4bdebd9e2fea8e3c272e06455df48894191e29b85ef400de2a0->leave($__internal_27c969f8861fd4bdebd9e2fea8e3c272e06455df48894191e29b85ef400de2a0_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Courier:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 66,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  155 => 60,  148 => 59,  144 => 58,  130 => 47,  127 => 46,  121 => 45,  93 => 23,  84 => 17,  76 => 12,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Courier{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Courier</h2>*/
/*       <a href="{{ path('proveedores_importar') }}" title="Carga Masiva">*/
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
/*         <a href="{{ path('inventario_courier_nuevo') }}" title="Agregar">*/
/*             <button class="btn btn-small btn-success">*/
/*               <i class="icon-plus icon-white"></i>*/
/*             </button>*/
/*           </a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                     <div class="row-fluid">*/
/*                         <div id="control1" class="span3"></div>*/
/*                         <div id="control2" class="span3"></div>*/
/*                         <div id="control3" class="span3"></div>*/
/*                         <div id="control4" class="span3"></div>*/
/*                     </div>*/
/*                     <div id="tabla" class="row-fluid"></div>  */
/*             </div>*/
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
/*           ['Nombre', 'Documento', 'Direccion','Telefono', 'Correo', 'Estado'],*/
/*           {% for couriers in courier %}*/
/*                 [ '<a href="{{ path("participante_editar", {"id": couriers.id}) }}">{{ couriers.nombre }}</a>',*/
/*                  '{{ couriers.tipodocumento.nombre }} {{ couriers.documento }} ',*/
/*                  '{{ couriers.direccion }}',*/
/*                  '{{ couriers.telefono }}',*/
/*                  '{{ couriers.correo }}',*/
/*                  '{% if (couriers.estado=='0') %}<a class="btn btn-danger" id="enlaceajax{{ couriers.id }}" href="#">Inactivo</a>{% else %}<a class="btn btn-success" id="enlaceajax{{ couriers.id }}" href="#">Activo</a>{% endif %}<div id="destino{{ couriers.id }}"></div>',],*/
/*             {% endfor %}*/
/*         ]);*/
/*       */
/*         // Define a StringFilter control for the 'Name' column*/
/*         var stringFilter = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control1',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Nombre',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter2 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control2',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Documento',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter3 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'CategoryFilter',*/
/*           'containerId': 'control3',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Correo',*/
/*             'ui': {*/
/*               'allowTyping': true,*/
/*               'allowMultiple': true*/
/*             }*/
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
