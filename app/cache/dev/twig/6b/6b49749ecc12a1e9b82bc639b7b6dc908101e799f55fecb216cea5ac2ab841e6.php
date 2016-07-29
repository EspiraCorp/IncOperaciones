<?php

/* IncentivesFacturacionBundle:Presupuesto:listado.html.twig */
class __TwigTemplate_b6c5d0106314ca813bd97fc3c428c34afdf5eee27a8ece877882cec32d9cf2a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Presupuesto:listado.html.twig", 1);
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
        $__internal_8df6183a80d9d2ca4b8d983e6893b4a838f2897ffe4dbe2b4e21f0f97e62a860 = $this->env->getExtension("native_profiler");
        $__internal_8df6183a80d9d2ca4b8d983e6893b4a838f2897ffe4dbe2b4e21f0f97e62a860->enter($__internal_8df6183a80d9d2ca4b8d983e6893b4a838f2897ffe4dbe2b4e21f0f97e62a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Presupuesto:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df6183a80d9d2ca4b8d983e6893b4a838f2897ffe4dbe2b4e21f0f97e62a860->leave($__internal_8df6183a80d9d2ca4b8d983e6893b4a838f2897ffe4dbe2b4e21f0f97e62a860_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22cbdc59c03fe3be9b816df0f9cd9c42e832268199484d4df21b362277e486b5 = $this->env->getExtension("native_profiler");
        $__internal_22cbdc59c03fe3be9b816df0f9cd9c42e832268199484d4df21b362277e486b5->enter($__internal_22cbdc59c03fe3be9b816df0f9cd9c42e832268199484d4df21b362277e486b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Presupuesto";
        
        $__internal_22cbdc59c03fe3be9b816df0f9cd9c42e832268199484d4df21b362277e486b5->leave($__internal_22cbdc59c03fe3be9b816df0f9cd9c42e832268199484d4df21b362277e486b5_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7f6a17d470ad28ecbd7bf1c63bdd30860a922063b70dfd77f93a89575bf45216 = $this->env->getExtension("native_profiler");
        $__internal_7f6a17d470ad28ecbd7bf1c63bdd30860a922063b70dfd77f93a89575bf45216->enter($__internal_7f6a17d470ad28ecbd7bf1c63bdd30860a922063b70dfd77f93a89575bf45216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_7f6a17d470ad28ecbd7bf1c63bdd30860a922063b70dfd77f93a89575bf45216->leave($__internal_7f6a17d470ad28ecbd7bf1c63bdd30860a922063b70dfd77f93a89575bf45216_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_61efb0b5a85487d3cfa50a156b5d8e3dbb7a77c7b96134ee09046ecc98780760 = $this->env->getExtension("native_profiler");
        $__internal_61efb0b5a85487d3cfa50a156b5d8e3dbb7a77c7b96134ee09046ecc98780760->enter($__internal_61efb0b5a85487d3cfa50a156b5d8e3dbb7a77c7b96134ee09046ecc98780760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
    <div class=\"box-header well\">
      <h2><i class=\"icon-th-list\"></i>Presupuesto</h2>
    </div>
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
        
        $__internal_61efb0b5a85487d3cfa50a156b5d8e3dbb7a77c7b96134ee09046ecc98780760->leave($__internal_61efb0b5a85487d3cfa50a156b5d8e3dbb7a77c7b96134ee09046ecc98780760_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a147dd8ad8e63cd19778f5b9390ea7d3f30c52c3fb4d399783f0951f06e7f3ca = $this->env->getExtension("native_profiler");
        $__internal_a147dd8ad8e63cd19778f5b9390ea7d3f30c52c3fb4d399783f0951f06e7f3ca->enter($__internal_a147dd8ad8e63cd19778f5b9390ea7d3f30c52c3fb4d399783f0951f06e7f3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
          ['Nombre', 'Cliente' ,'Descripcion', 'Fecha Inicio', 'Fecha Fin', 'Estado'],
          ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 42
            echo "                [ '<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupuesto_detalle", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "nombre", array()), "html", null, true);
            echo "</a>',
                 '";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["programa"], "cliente", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "descripcion", array()), "html", null, true);
            echo "',
                 '";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programa"], "fechainicio", array()), "Y-m-d"), "html", null, true);
            echo "',
                 '";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programa"], "fechafin", array()), "Y-m-d"), "html", null, true);
            echo "',
                 '";
            // line 47
            if (($this->getAttribute($context["programa"], "estado", array()) == "0")) {
                echo "Inactivo";
            } else {
                echo "Activo";
            }
            echo "',],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
            'filterColumnLabel': 'Cliente',
            'matchType': 'any'
          }
        });

        var stringFilter3 = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'control3',
          'options': {
            'filterColumnLabel': 'Fecha Inicio',
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
            'filterColumnLabel': 'Fecha Fin',
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
        
        $__internal_a147dd8ad8e63cd19778f5b9390ea7d3f30c52c3fb4d399783f0951f06e7f3ca->leave($__internal_a147dd8ad8e63cd19778f5b9390ea7d3f30c52c3fb4d399783f0951f06e7f3ca_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Presupuesto:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 49,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  122 => 42,  118 => 41,  104 => 30,  101 => 29,  95 => 28,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Presupuesto{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/*     <div class="box-header well">*/
/*       <h2><i class="icon-th-list"></i>Presupuesto</h2>*/
/*     </div>*/
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
/*           ['Nombre', 'Cliente' ,'Descripcion', 'Fecha Inicio', 'Fecha Fin', 'Estado'],*/
/*           {% for programa in listado %}*/
/*                 [ '<a href="{{ path("presupuesto_detalle", {"id": programa.id}) }}">{{ programa.nombre }}</a>',*/
/*                  '{{ programa.cliente.nombre }}',*/
/*                  '{{ programa.descripcion }}',*/
/*                  '{{ programa.fechainicio | date("Y-m-d")  }}',*/
/*                  '{{ programa.fechafin | date("Y-m-d") }}',*/
/*                  '{% if (programa.estado=='0') %}Inactivo{% else %}Activo{% endif %}',],*/
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
/*             'filterColumnLabel': 'Cliente',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter3 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'CategoryFilter',*/
/*           'containerId': 'control3',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Fecha Inicio',*/
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
/*             'filterColumnLabel': 'Fecha Fin',*/
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
