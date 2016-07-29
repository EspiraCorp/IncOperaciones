<?php

/* IncentivesRedencionesBundle:Participante:listado.html.twig */
class __TwigTemplate_ec356a11de3d04c9daa2659ab1b4b5f06facdb9f0d88ffd25ada2b614439978d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Participante:listado.html.twig", 1);
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
        $__internal_98a859a9bd9bdc2b219a705036657b71c83913846bb56eaa7b8e41cef0889f0b = $this->env->getExtension("native_profiler");
        $__internal_98a859a9bd9bdc2b219a705036657b71c83913846bb56eaa7b8e41cef0889f0b->enter($__internal_98a859a9bd9bdc2b219a705036657b71c83913846bb56eaa7b8e41cef0889f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Participante:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a859a9bd9bdc2b219a705036657b71c83913846bb56eaa7b8e41cef0889f0b->leave($__internal_98a859a9bd9bdc2b219a705036657b71c83913846bb56eaa7b8e41cef0889f0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b76014a7169ac02043e7dfc672cec531362795a1c341a059ec45656ea7079089 = $this->env->getExtension("native_profiler");
        $__internal_b76014a7169ac02043e7dfc672cec531362795a1c341a059ec45656ea7079089->enter($__internal_b76014a7169ac02043e7dfc672cec531362795a1c341a059ec45656ea7079089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Participantes";
        
        $__internal_b76014a7169ac02043e7dfc672cec531362795a1c341a059ec45656ea7079089->leave($__internal_b76014a7169ac02043e7dfc672cec531362795a1c341a059ec45656ea7079089_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7fabd0510070c80ffcf009594a12614e53ae7c54f90774cad172447837b63047 = $this->env->getExtension("native_profiler");
        $__internal_7fabd0510070c80ffcf009594a12614e53ae7c54f90774cad172447837b63047->enter($__internal_7fabd0510070c80ffcf009594a12614e53ae7c54f90774cad172447837b63047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_7fabd0510070c80ffcf009594a12614e53ae7c54f90774cad172447837b63047->leave($__internal_7fabd0510070c80ffcf009594a12614e53ae7c54f90774cad172447837b63047_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_4a94249fb937241f60841edc31a29c5daa44c7a70aa0805e874f3fe767037426 = $this->env->getExtension("native_profiler");
        $__internal_4a94249fb937241f60841edc31a29c5daa44c7a70aa0805e874f3fe767037426->enter($__internal_4a94249fb937241f60841edc31a29c5daa44c7a70aa0805e874f3fe767037426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Participantes</h2>
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
        echo $this->env->getExtension('routing')->getPath("participante_nuevo");
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
        
        $__internal_4a94249fb937241f60841edc31a29c5daa44c7a70aa0805e874f3fe767037426->leave($__internal_4a94249fb937241f60841edc31a29c5daa44c7a70aa0805e874f3fe767037426_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b9a42be481de54822a2342779977fb60910ecab2121ee6b9659ac861afdc757 = $this->env->getExtension("native_profiler");
        $__internal_7b9a42be481de54822a2342779977fb60910ecab2121ee6b9659ac861afdc757->enter($__internal_7b9a42be481de54822a2342779977fb60910ecab2121ee6b9659ac861afdc757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
          ['Nombre', 'Documento','Ciudad','Direccion','Telefono', 'Celular', 'Llave','Programa', 'Estado'],
          ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["participante"]) {
            // line 59
            echo "                [ '<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("participante_editar", array("id" => $this->getAttribute($context["participante"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["participante"], "nombre", array()), "html", null, true);
            echo "</a>',
                 '";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participante"], "tipodocumento", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["participante"], "documento", array()), "html", null, true);
            echo " ',
                 '";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participante"], "ciudad", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["participante"], "direccion", array()), "html", null, true);
            echo "',
                 '";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["participante"], "telefono", array()), "html", null, true);
            echo "',
                 '";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["participante"], "celular", array()), "html", null, true);
            echo "',
                 '";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["participante"], "llave", array()), "html", null, true);
            echo "',
                 '";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participante"], "programa", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 67
            if (($this->getAttribute($this->getAttribute($context["participante"], "participanteestado", array()), "id", array()) == "2")) {
                echo "<span class=\"label label-warning\">Inactivo</span>";
            } elseif (($this->getAttribute($this->getAttribute($context["participante"], "participanteestado", array()), "id", array()) == "3")) {
                echo "<span class=\"label label-important\">Retirado</span>";
            } else {
                echo "<span class=\"label label-success\">Activo</span>";
            }
            echo "',],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
            'filterColumnLabel': 'Programa',
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
            'filterColumnLabel': 'Ciudad',
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
        
        $__internal_7b9a42be481de54822a2342779977fb60910ecab2121ee6b9659ac861afdc757->leave($__internal_7b9a42be481de54822a2342779977fb60910ecab2121ee6b9659ac861afdc757_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Participante:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 69,  185 => 67,  181 => 66,  177 => 65,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  155 => 60,  148 => 59,  144 => 58,  130 => 47,  127 => 46,  121 => 45,  93 => 23,  84 => 17,  76 => 12,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Participantes{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Participantes</h2>*/
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
/*         <a href="{{ path('participante_nuevo') }}" title="Agregar">*/
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
/*           ['Nombre', 'Documento','Ciudad','Direccion','Telefono', 'Celular', 'Llave','Programa', 'Estado'],*/
/*           {% for participante in listado %}*/
/*                 [ '<a href="{{ path("participante_editar", {"id": participante.id}) }}">{{ participante.nombre }}</a>',*/
/*                  '{{ participante.tipodocumento.nombre }} {{ participante.documento }} ',*/
/*                  '{{ participante.ciudad.nombre }}',*/
/*                  '{{ participante.direccion }}',*/
/*                  '{{ participante.telefono }}',*/
/*                  '{{ participante.celular }}',*/
/*                  '{{ participante.llave }}',*/
/*                  '{{ participante.programa.nombre }}',*/
/*                  '{% if (participante.participanteestado.id=='2') %}<span class="label label-warning">Inactivo</span>{% elseif (participante.participanteestado.id=='3') %}<span class="label label-important">Retirado</span>{% else %}<span class="label label-success">Activo</span>{% endif %}',],*/
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
/*             'filterColumnLabel': 'Programa',*/
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
/*             'filterColumnLabel': 'Ciudad',*/
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
