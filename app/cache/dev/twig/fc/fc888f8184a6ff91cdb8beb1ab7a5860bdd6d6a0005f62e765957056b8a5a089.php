<?php

/* IncentivesInventarioBundle:Inventario:historico.html.twig */
class __TwigTemplate_36e9881f6665532d1e152c9039150a9b91b1c72dc8d835a6a0c3073af3546083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:historico.html.twig", 1);
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
        $__internal_ee66e14a19cd0e3380ba6afdad2cb2bcd5c7f98b079d8730cf2a9a742eb90708 = $this->env->getExtension("native_profiler");
        $__internal_ee66e14a19cd0e3380ba6afdad2cb2bcd5c7f98b079d8730cf2a9a742eb90708->enter($__internal_ee66e14a19cd0e3380ba6afdad2cb2bcd5c7f98b079d8730cf2a9a742eb90708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:historico.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee66e14a19cd0e3380ba6afdad2cb2bcd5c7f98b079d8730cf2a9a742eb90708->leave($__internal_ee66e14a19cd0e3380ba6afdad2cb2bcd5c7f98b079d8730cf2a9a742eb90708_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9e0f77cd9e146b038925e1e6968febd11b256da2b944e64d1690bfb5b75d419 = $this->env->getExtension("native_profiler");
        $__internal_d9e0f77cd9e146b038925e1e6968febd11b256da2b944e64d1690bfb5b75d419->enter($__internal_d9e0f77cd9e146b038925e1e6968febd11b256da2b944e64d1690bfb5b75d419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inventario";
        
        $__internal_d9e0f77cd9e146b038925e1e6968febd11b256da2b944e64d1690bfb5b75d419->leave($__internal_d9e0f77cd9e146b038925e1e6968febd11b256da2b944e64d1690bfb5b75d419_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e6ccc29682584c279c84147f0e5a944eec17006475c23c41f3c5f7285229a711 = $this->env->getExtension("native_profiler");
        $__internal_e6ccc29682584c279c84147f0e5a944eec17006475c23c41f3c5f7285229a711->enter($__internal_e6ccc29682584c279c84147f0e5a944eec17006475c23c41f3c5f7285229a711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_e6ccc29682584c279c84147f0e5a944eec17006475c23c41f3c5f7285229a711->leave($__internal_e6ccc29682584c279c84147f0e5a944eec17006475c23c41f3c5f7285229a711_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_f21048ed2e8a19175092e0212131aa6635ef5557b9a147c237721c5721157132 = $this->env->getExtension("native_profiler");
        $__internal_f21048ed2e8a19175092e0212131aa6635ef5557b9a147c237721c5721157132->enter($__internal_f21048ed2e8a19175092e0212131aa6635ef5557b9a147c237721c5721157132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Productos</h2>
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
        echo $this->env->getExtension('routing')->getPath("inventario_listado");
        echo "\" title=\"Agregar\">
            <button class=\"btn btn-round\">
              <i class=\"icon-arrow-left\"></i>
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
        
        $__internal_f21048ed2e8a19175092e0212131aa6635ef5557b9a147c237721c5721157132->leave($__internal_f21048ed2e8a19175092e0212131aa6635ef5557b9a147c237721c5721157132_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e367e43a6c33f440fd04222b5701f54f59ead2e8c48fe65ca66e4fcd3323b95a = $this->env->getExtension("native_profiler");
        $__internal_e367e43a6c33f440fd04222b5701f54f59ead2e8c48fe65ca66e4fcd3323b95a->enter($__internal_e367e43a6c33f440fd04222b5701f54f59ead2e8c48fe65ca66e4fcd3323b95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
          ['Producto', 'Cantidad' ,'Fecha Ingreso', 'Cantidad', 'Fecha Salida', 'Cantidad', 'Orden','Observacion'],
          ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inventario"]) ? $context["inventario"] : $this->getContext($context, "inventario")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 59
            echo "                [ '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "',
                 '";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "',
                 '";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "fechaEntrada", array()), "html", null, true);
            echo "',
                 '";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "marca", array()), "html", null, true);
            echo "',
                 '";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "fechaSalida", array()), "html", null, true);
            echo "',
                 '";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "',
                 '";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "peso", array()), "html", null, true);
            echo "',
                 '";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "',],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        ]);
      
        // Define a StringFilter control for the 'Name' column
        var stringFilter = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control1',
          'options': {
            'filterColumnLabel': 'Producto',
            'matchType': 'any'
          }
        });

        var stringFilter2 = new google.visualization.ControlWrapper({
          'controlType': 'StringFilter',
          'containerId': 'control2',
          'options': {
            'filterColumnLabel': 'Orden',
            'matchType': 'any'
          }
        });

        var stringFilter3 = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'control3',
          'options': {
            'filterColumnLabel': 'Fecha Ingreso',
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
        if (confirm(\"Desea cambiar el estado del producto\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>

";
        
        $__internal_e367e43a6c33f440fd04222b5701f54f59ead2e8c48fe65ca66e4fcd3323b95a->leave($__internal_e367e43a6c33f440fd04222b5701f54f59ead2e8c48fe65ca66e4fcd3323b95a_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:historico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 68,  177 => 66,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  148 => 59,  144 => 58,  130 => 47,  127 => 46,  121 => 45,  93 => 23,  84 => 17,  76 => 12,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Inventario{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Productos</h2>*/
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
/*         <a href="{{ path('inventario_listado') }}" title="Agregar">*/
/*             <button class="btn btn-round">*/
/*               <i class="icon-arrow-left"></i>*/
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
/*           ['Producto', 'Cantidad' ,'Fecha Ingreso', 'Cantidad', 'Fecha Salida', 'Cantidad', 'Orden','Observacion'],*/
/*           {% for producto in inventario %}*/
/*                 [ '{{ producto.producto.nombre }}',*/
/*                  '{{ producto.cantidad }}',*/
/*                  '{{ producto.fechaEntrada }}',*/
/*                  '{{ producto.producto.marca }}',*/
/*                  '{{ producto.fechaSalida }}',*/
/*                  '{{ producto.producto.codInc }}',*/
/*                  '{{ producto.producto.peso }}',*/
/*                  '{{ producto.id }}',],*/
/*             {% endfor %}*/
/*         ]);*/
/*       */
/*         // Define a StringFilter control for the 'Name' column*/
/*         var stringFilter = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control1',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Producto',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter2 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'StringFilter',*/
/*           'containerId': 'control2',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Orden',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter3 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'CategoryFilter',*/
/*           'containerId': 'control3',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Fecha Ingreso',*/
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
/*       {*/
/*         if (confirm("Desea cambiar el estado del producto")==true){*/
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
