<?php

/* IncentivesInventarioBundle:Inventario:listadoPlanilla.html.twig */
class __TwigTemplate_1cbdb201db170bd68313fc3595ca3e8b930ab6d43d67326f67f7078738b864c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:listadoPlanilla.html.twig", 1);
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
        $__internal_2e9ca8fd613d106a1eab98378fff14cfeed845f20439803273aa2dd11f184fef = $this->env->getExtension("native_profiler");
        $__internal_2e9ca8fd613d106a1eab98378fff14cfeed845f20439803273aa2dd11f184fef->enter($__internal_2e9ca8fd613d106a1eab98378fff14cfeed845f20439803273aa2dd11f184fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:listadoPlanilla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9ca8fd613d106a1eab98378fff14cfeed845f20439803273aa2dd11f184fef->leave($__internal_2e9ca8fd613d106a1eab98378fff14cfeed845f20439803273aa2dd11f184fef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fe8904c18fd5d38d4e64499938ed803470dc9ebbdf42d5e92f591acbc89fa5b = $this->env->getExtension("native_profiler");
        $__internal_3fe8904c18fd5d38d4e64499938ed803470dc9ebbdf42d5e92f591acbc89fa5b->enter($__internal_3fe8904c18fd5d38d4e64499938ed803470dc9ebbdf42d5e92f591acbc89fa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Planillas";
        
        $__internal_3fe8904c18fd5d38d4e64499938ed803470dc9ebbdf42d5e92f591acbc89fa5b->leave($__internal_3fe8904c18fd5d38d4e64499938ed803470dc9ebbdf42d5e92f591acbc89fa5b_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1f9576c8bf2f1aced183013d3fb49833befca27ae890d0503d872f8108c3b5d3 = $this->env->getExtension("native_profiler");
        $__internal_1f9576c8bf2f1aced183013d3fb49833befca27ae890d0503d872f8108c3b5d3->enter($__internal_1f9576c8bf2f1aced183013d3fb49833befca27ae890d0503d872f8108c3b5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_1f9576c8bf2f1aced183013d3fb49833befca27ae890d0503d872f8108c3b5d3->leave($__internal_1f9576c8bf2f1aced183013d3fb49833befca27ae890d0503d872f8108c3b5d3_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_66633c2ff1888bea5647cdd0eca648594551dd6fe7bdb0d51221b1a62728cb0c = $this->env->getExtension("native_profiler");
        $__internal_66633c2ff1888bea5647cdd0eca648594551dd6fe7bdb0d51221b1a62728cb0c->enter($__internal_66633c2ff1888bea5647cdd0eca648594551dd6fe7bdb0d51221b1a62728cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Planillas</h2>
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
                    <hr>
                    
            </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_66633c2ff1888bea5647cdd0eca648594551dd6fe7bdb0d51221b1a62728cb0c->leave($__internal_66633c2ff1888bea5647cdd0eca648594551dd6fe7bdb0d51221b1a62728cb0c_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cdc8b66b62c3289bce6a3140e76180a0c6b7cfe1645cf606ae65cf28f4b52a6 = $this->env->getExtension("native_profiler");
        $__internal_4cdc8b66b62c3289bce6a3140e76180a0c6b7cfe1645cf606ae65cf28f4b52a6->enter($__internal_4cdc8b66b62c3289bce6a3140e76180a0c6b7cfe1645cf606ae65cf28f4b52a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "
";
        // line 32
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
          ['Consecutivo', 'Fecha' ,'Estado'],
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planillas"]) ? $context["planillas"] : $this->getContext($context, "planillas")));
        foreach ($context['_seq'] as $context["_key"] => $context["planilla"]) {
            // line 44
            echo "            [ '<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "ruta", array()), "html", null, true);
            echo "\" target=\"_blank\" onClick=confirmar(\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("inventario_listado_planilla_estado", array("id" => $this->getAttribute($context["planilla"], "id", array()))), "html", null, true);
            echo "\")>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planilla"], "id", array()), "html", null, true);
            echo "</a>',
             '";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planilla"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "',
             '";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planilla"], "planillaestado", array()), "nombre", array()), "html", null, true);
            echo "',],
    \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planilla'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        ]);
      
        // Define a StringFilter control for the 'Name' column
        var stringFilter = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control1',
          'options': {
            'filterColumnLabel': 'Consecutivo',
            'matchType': 'any'
          }
        });

        var stringFilter2 = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'control2',
          'options': {
            'filterColumnLabel': 'Fecha',
            'ui': {
              'allowTyping': true,
              'allowMultiple': true
            }
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
            self.location=ruta;
      }
  </script>

";
        
        $__internal_4cdc8b66b62c3289bce6a3140e76180a0c6b7cfe1645cf606ae65cf28f4b52a6->leave($__internal_4cdc8b66b62c3289bce6a3140e76180a0c6b7cfe1645cf606ae65cf28f4b52a6_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:listadoPlanilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  137 => 46,  133 => 45,  124 => 44,  120 => 43,  106 => 32,  103 => 31,  97 => 30,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Planillas{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Planillas</h2>*/
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
/*                     <hr>*/
/*                     */
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
/*           ['Consecutivo', 'Fecha' ,'Estado'],*/
/*           {% for planilla in planillas %}*/
/*             [ '<a href="{{ planilla.ruta }}" target="_blank" onClick=confirmar("{{ url("inventario_listado_planilla_estado", {"id": planilla.id}) }}")>{{ planilla.id }}</a>',*/
/*              '{{ planilla.fecha | date("Y-m-d") }}',*/
/*              '{{ planilla.planillaestado.nombre }}',],*/
/*     	  {% endfor %}*/
/*         ]);*/
/*       */
/*         // Define a StringFilter control for the 'Name' column*/
/*         var stringFilter = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control1',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Consecutivo',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter2 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'CategoryFilter',*/
/*           'containerId': 'control2',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Fecha',*/
/*             'ui': {*/
/*               'allowTyping': true,*/
/*               'allowMultiple': true*/
/*             }*/
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
/*       { */
/*             self.location=ruta;*/
/*       }*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
