<?php

/* IncentivesInventarioBundle:Inventario:programas.html.twig */
class __TwigTemplate_f350d66220b403eb957e39fd43937315d18467b8a6c6d776af6c3380135d809d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:programas.html.twig", 1);
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
        $__internal_42c992d92bb73532ad28a683bc09cb8b3ad69e540d4b76209ddee807150f3db2 = $this->env->getExtension("native_profiler");
        $__internal_42c992d92bb73532ad28a683bc09cb8b3ad69e540d4b76209ddee807150f3db2->enter($__internal_42c992d92bb73532ad28a683bc09cb8b3ad69e540d4b76209ddee807150f3db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:programas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42c992d92bb73532ad28a683bc09cb8b3ad69e540d4b76209ddee807150f3db2->leave($__internal_42c992d92bb73532ad28a683bc09cb8b3ad69e540d4b76209ddee807150f3db2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_021a6e5d83b0c2ff16e0baee0f427a99e4e853cb477baea5a5b65730feb4909f = $this->env->getExtension("native_profiler");
        $__internal_021a6e5d83b0c2ff16e0baee0f427a99e4e853cb477baea5a5b65730feb4909f->enter($__internal_021a6e5d83b0c2ff16e0baee0f427a99e4e853cb477baea5a5b65730feb4909f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Envios - Redenciones por programa";
        
        $__internal_021a6e5d83b0c2ff16e0baee0f427a99e4e853cb477baea5a5b65730feb4909f->leave($__internal_021a6e5d83b0c2ff16e0baee0f427a99e4e853cb477baea5a5b65730feb4909f_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_94a16e8d97c4f6fb17acf4f12bbc8033c64b3dc0c0275dd856888f21858be938 = $this->env->getExtension("native_profiler");
        $__internal_94a16e8d97c4f6fb17acf4f12bbc8033c64b3dc0c0275dd856888f21858be938->enter($__internal_94a16e8d97c4f6fb17acf4f12bbc8033c64b3dc0c0275dd856888f21858be938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_94a16e8d97c4f6fb17acf4f12bbc8033c64b3dc0c0275dd856888f21858be938->leave($__internal_94a16e8d97c4f6fb17acf4f12bbc8033c64b3dc0c0275dd856888f21858be938_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_cfbe672aa0b32f8a4cb1074067f9aadca066f2b043b583b6d1a0b7d86da078dc = $this->env->getExtension("native_profiler");
        $__internal_cfbe672aa0b32f8a4cb1074067f9aadca066f2b043b583b6d1a0b7d86da078dc->enter($__internal_cfbe672aa0b32f8a4cb1074067f9aadca066f2b043b583b6d1a0b7d86da078dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Envios - Redenciones por programa</h2>
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
        
        $__internal_cfbe672aa0b32f8a4cb1074067f9aadca066f2b043b583b6d1a0b7d86da078dc->leave($__internal_cfbe672aa0b32f8a4cb1074067f9aadca066f2b043b583b6d1a0b7d86da078dc_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c31b8b4aecf4d83d993f27e8d2fae1ab71313a3900c4f33a13ebcfade1d5b8f8 = $this->env->getExtension("native_profiler");
        $__internal_c31b8b4aecf4d83d993f27e8d2fae1ab71313a3900c4f33a13ebcfade1d5b8f8->enter($__internal_c31b8b4aecf4d83d993f27e8d2fae1ab71313a3900c4f33a13ebcfade1d5b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "
";
        // line 30
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
          ['Programa', 'Redenciones','Fecha ultima autorizacion'],
          ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")));
        foreach ($context['_seq'] as $context["_key"] => $context["programas"]) {
            // line 42
            echo "                [ '<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inventario_redenciones", array("programa" => $this->getAttribute($context["programas"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programas"], "nombre", array()), "html", null, true);
            echo "</a>',
                 '";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), $this->getAttribute($context["programas"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
            echo "',
                 '";
            // line 44
            if (($this->getAttribute((isset($context["fechas"]) ? $context["fechas"] : $this->getContext($context, "fechas")), $this->getAttribute($context["programas"], "id", array()), array(), "array") == $this->getAttribute((isset($context["fechas"]) ? $context["fechas"] : $this->getContext($context, "fechas")), 0, array(), "array"))) {
                echo "Aun no se han hecho autorizaciones";
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fechas"]) ? $context["fechas"] : $this->getContext($context, "fechas")), $this->getAttribute($context["programas"], "id", array()), array(), "array"), "Y-m-d"), "html", null, true);
            }
            echo "',],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        ]);
      
        // Define a StringFilter control for the 'Name' column
        var stringFilter = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control1',
          'options': {
            'filterColumnLabel': 'Programa',
            'matchType': 'any'
          }
        });

        var stringFilter2 = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control2',
          'options': {
            'filterColumnLabel': 'Redenciones',
            'matchType': 'any'
          }
        });

          var stringFilter4 = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'control4',
          'options': {
            'filterColumnLabel': 'Fecha ultima autorizacion',
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
          bind(stringFilter4, table).
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
        
        $__internal_c31b8b4aecf4d83d993f27e8d2fae1ab71313a3900c4f33a13ebcfade1d5b8f8->leave($__internal_c31b8b4aecf4d83d993f27e8d2fae1ab71313a3900c4f33a13ebcfade1d5b8f8_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:programas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  133 => 44,  129 => 43,  122 => 42,  118 => 41,  104 => 30,  101 => 29,  95 => 28,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Envios - Redenciones por programa{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Envios - Redenciones por programa</h2>*/
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
/*           ['Programa', 'Redenciones','Fecha ultima autorizacion'],*/
/*           {% for programas in programa %}*/
/*                 [ '<a href="{{ path("inventario_redenciones", {"programa": programas.id }) }}">{{ programas.nombre }}</a>',*/
/*                  '{{ listado[programas.id][0] }}',*/
/*                  '{% if (fechas[programas.id] ==fechas[0]) %}Aun no se han hecho autorizaciones{% else %}{{ fechas[programas.id] | date("Y-m-d") }}{% endif %}',],*/
/*             {% endfor %}*/
/*         ]);*/
/*       */
/*         // Define a StringFilter control for the 'Name' column*/
/*         var stringFilter = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control1',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Programa',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter2 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control2',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Redenciones',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*           var stringFilter4 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'CategoryFilter',*/
/*           'containerId': 'control4',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Fecha ultima autorizacion',*/
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
/*           bind(stringFilter4, table).*/
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
