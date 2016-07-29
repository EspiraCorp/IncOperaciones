<?php

/* IncentivesRedencionesBundle:Redencion:programastotalpassold.html.twig */
class __TwigTemplate_51af4abeffee399671e593a8b9893080507d38bd663573d781ab160eb83a86a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Redencion:programastotalpassold.html.twig", 1);
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
        $__internal_a1273d3ba5d2becd10f9a27eba508db2e0df8a358cf5f8f30dbea60144aa879a = $this->env->getExtension("native_profiler");
        $__internal_a1273d3ba5d2becd10f9a27eba508db2e0df8a358cf5f8f30dbea60144aa879a->enter($__internal_a1273d3ba5d2becd10f9a27eba508db2e0df8a358cf5f8f30dbea60144aa879a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Redencion:programastotalpassold.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1273d3ba5d2becd10f9a27eba508db2e0df8a358cf5f8f30dbea60144aa879a->leave($__internal_a1273d3ba5d2becd10f9a27eba508db2e0df8a358cf5f8f30dbea60144aa879a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92fda555e2676a8e05fd3750f2ba8053aa0aef9d2ac3cfa58dc040643cfefe90 = $this->env->getExtension("native_profiler");
        $__internal_92fda555e2676a8e05fd3750f2ba8053aa0aef9d2ac3cfa58dc040643cfefe90->enter($__internal_92fda555e2676a8e05fd3750f2ba8053aa0aef9d2ac3cfa58dc040643cfefe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones por programa";
        
        $__internal_92fda555e2676a8e05fd3750f2ba8053aa0aef9d2ac3cfa58dc040643cfefe90->leave($__internal_92fda555e2676a8e05fd3750f2ba8053aa0aef9d2ac3cfa58dc040643cfefe90_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_70885b7151bae4b7ee08916aec9973816644c8101913573159c7db36c9e2581d = $this->env->getExtension("native_profiler");
        $__internal_70885b7151bae4b7ee08916aec9973816644c8101913573159c7db36c9e2581d->enter($__internal_70885b7151bae4b7ee08916aec9973816644c8101913573159c7db36c9e2581d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_70885b7151bae4b7ee08916aec9973816644c8101913573159c7db36c9e2581d->leave($__internal_70885b7151bae4b7ee08916aec9973816644c8101913573159c7db36c9e2581d_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_2d717aa7e755295a7a46aeefe3b2608989be1ce7a1b673fd5060a0a8145f91ec = $this->env->getExtension("native_profiler");
        $__internal_2d717aa7e755295a7a46aeefe3b2608989be1ce7a1b673fd5060a0a8145f91ec->enter($__internal_2d717aa7e755295a7a46aeefe3b2608989be1ce7a1b673fd5060a0a8145f91ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Redenciones por programa</h2>
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
        
        $__internal_2d717aa7e755295a7a46aeefe3b2608989be1ce7a1b673fd5060a0a8145f91ec->leave($__internal_2d717aa7e755295a7a46aeefe3b2608989be1ce7a1b673fd5060a0a8145f91ec_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a1391a25ecdbd81e571d0aea8204577f5ebd9948da24dceb5cfee5fb0c68f4a = $this->env->getExtension("native_profiler");
        $__internal_8a1391a25ecdbd81e571d0aea8204577f5ebd9948da24dceb5cfee5fb0c68f4a->enter($__internal_8a1391a25ecdbd81e571d0aea8204577f5ebd9948da24dceb5cfee5fb0c68f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redenciones_listadototalpass", array("programa" => $this->getAttribute($context["programas"], "id", array()))), "html", null, true);
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
        
        $__internal_8a1391a25ecdbd81e571d0aea8204577f5ebd9948da24dceb5cfee5fb0c68f4a->leave($__internal_8a1391a25ecdbd81e571d0aea8204577f5ebd9948da24dceb5cfee5fb0c68f4a_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Redencion:programastotalpassold.html.twig";
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
/* {% block title %}Redenciones por programa{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Redenciones por programa</h2>*/
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
/*                 [ '<a href="{{ path("redenciones_listadototalpass", {"programa": programas.id }) }}">{{ programas.nombre }}</a>',*/
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
/*         var stringFilter4 = new google.visualization.ControlWrapper({*/
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
