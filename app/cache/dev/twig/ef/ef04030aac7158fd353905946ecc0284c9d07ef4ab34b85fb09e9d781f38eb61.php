<?php

/* IncentivesCatalogoBundle:Catalogos:listado_borrar.html.twig */
class __TwigTemplate_46144dde65ff89900fc0492de810d2f851a40c913f58297bdfdec6b6c0406cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:listado_borrar.html.twig", 1);
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
        $__internal_6d89cd99e04fe452043c4dad7fbdab660cd7ad22ed34794af569bdeca109e205 = $this->env->getExtension("native_profiler");
        $__internal_6d89cd99e04fe452043c4dad7fbdab660cd7ad22ed34794af569bdeca109e205->enter($__internal_6d89cd99e04fe452043c4dad7fbdab660cd7ad22ed34794af569bdeca109e205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:listado_borrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d89cd99e04fe452043c4dad7fbdab660cd7ad22ed34794af569bdeca109e205->leave($__internal_6d89cd99e04fe452043c4dad7fbdab660cd7ad22ed34794af569bdeca109e205_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6eeb3955d5dfd495372adf70c4e0086233678b88d2d54ff13a798d6c569d15d2 = $this->env->getExtension("native_profiler");
        $__internal_6eeb3955d5dfd495372adf70c4e0086233678b88d2d54ff13a798d6c569d15d2->enter($__internal_6eeb3955d5dfd495372adf70c4e0086233678b88d2d54ff13a798d6c569d15d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogos";
        
        $__internal_6eeb3955d5dfd495372adf70c4e0086233678b88d2d54ff13a798d6c569d15d2->leave($__internal_6eeb3955d5dfd495372adf70c4e0086233678b88d2d54ff13a798d6c569d15d2_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e2c89fae7e7fbc8b13227e37ae360976861be79e6c8810ddd3886176ddd9dd6c = $this->env->getExtension("native_profiler");
        $__internal_e2c89fae7e7fbc8b13227e37ae360976861be79e6c8810ddd3886176ddd9dd6c->enter($__internal_e2c89fae7e7fbc8b13227e37ae360976861be79e6c8810ddd3886176ddd9dd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_e2c89fae7e7fbc8b13227e37ae360976861be79e6c8810ddd3886176ddd9dd6c->leave($__internal_e2c89fae7e7fbc8b13227e37ae360976861be79e6c8810ddd3886176ddd9dd6c_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_66c2ffc1777e2189c43700e0d6279eb24bad4ab6beec719f8a56f32ae2b29b78 = $this->env->getExtension("native_profiler");
        $__internal_66c2ffc1777e2189c43700e0d6279eb24bad4ab6beec719f8a56f32ae2b29b78->enter($__internal_66c2ffc1777e2189c43700e0d6279eb24bad4ab6beec719f8a56f32ae2b29b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Catalogos</h2>
      <div class=\"box-icon\"> 
          <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("catalogo_nuevo");
        echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
      </div>
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
        
        $__internal_66c2ffc1777e2189c43700e0d6279eb24bad4ab6beec719f8a56f32ae2b29b78->leave($__internal_66c2ffc1777e2189c43700e0d6279eb24bad4ab6beec719f8a56f32ae2b29b78_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d7483437a4d0780009c653b65cd959dc517d11e999321522ea3a506108caa35 = $this->env->getExtension("native_profiler");
        $__internal_2d7483437a4d0780009c653b65cd959dc517d11e999321522ea3a506108caa35->enter($__internal_2d7483437a4d0780009c653b65cd959dc517d11e999321522ea3a506108caa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "
";
        // line 33
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
          ['Nombre', 'Programa', 'Cliente','Fecha Inicio', 'Fecha Fin', 'Valor punto','Puntos maximos','Pais','Estado'],
          ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
            // line 45
            echo "                [ '<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_datos", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "nombre", array()), "html", null, true);
            echo "</a>',
                 '";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "fechainicio", array()), "Y-m-d"), "html", null, true);
            echo "',
                 '";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "fechafin", array()), "Y-m-d"), "html", null, true);
            echo "',
                 '";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "valorPunto", array()), "html", null, true);
            echo "',
                 '";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "puntosMaximos", array()), "html", null, true);
            echo "',
                 '";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "pais", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 53
            if (($this->getAttribute($this->getAttribute($context["catalogo"], "estado", array()), "id", array()) != 1)) {
                echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar(\\'";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_estado", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                echo "\\')\" href=\"#\">Inactivo</a>";
            } else {
                echo "<a class=\"btn btn-success 1\" onClick=\"confirmar(\\'";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_estado", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                echo "\\')\" href=\"#\">Activo</a>";
            }
            echo "',],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        
        $__internal_2d7483437a4d0780009c653b65cd959dc517d11e999321522ea3a506108caa35->leave($__internal_2d7483437a4d0780009c653b65cd959dc517d11e999321522ea3a506108caa35_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:listado_borrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 55,  163 => 53,  159 => 52,  155 => 51,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  135 => 46,  128 => 45,  124 => 44,  110 => 33,  107 => 32,  101 => 31,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Catalogos{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Catalogos</h2>*/
/*       <div class="box-icon"> */
/*           <a href="{{ path('catalogo_nuevo') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/*       </div>*/
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
/*           ['Nombre', 'Programa', 'Cliente','Fecha Inicio', 'Fecha Fin', 'Valor punto','Puntos maximos','Pais','Estado'],*/
/*           {% for catalogo in listado %}*/
/*                 [ '<a href="{{ path("catalogo_datos", {"id": catalogo.id}) }}">{{ catalogo.nombre }}</a>',*/
/*                  '{{ catalogo.programa.nombre }}',*/
/*                  '{{ catalogo.programa.cliente.nombre }}',*/
/*                  '{{ catalogo.programa.fechainicio | date("Y-m-d")  }}',*/
/*                  '{{ catalogo.programa.fechafin | date("Y-m-d") }}',*/
/*                  '{{ catalogo.valorPunto }}',*/
/*                  '{{ catalogo.puntosMaximos }}',*/
/*                  '{{ catalogo.pais.nombre }}',*/
/*                  '{% if (catalogo.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar(\'{{ url("catalogo_estado", {"id": catalogo.id}) }}\')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar(\'{{ url("catalogo_estado", {"id": catalogo.id}) }}\')" href="#">Activo</a>{% endif %}',],*/
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
