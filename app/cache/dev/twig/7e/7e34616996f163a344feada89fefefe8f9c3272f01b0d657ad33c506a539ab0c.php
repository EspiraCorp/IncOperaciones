<?php

/* IncentivesGarantiasBundle:Redenciones:semaforo.html.twig */
class __TwigTemplate_f786246d44c510c0d24a40773ce4d3420283cba7614a39696c7d97d31056f481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:semaforo.html.twig", 1);
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
        $__internal_e175d0f16f02f3d9967c63338a71a3ed1db03db92de4735c706546e13274f592 = $this->env->getExtension("native_profiler");
        $__internal_e175d0f16f02f3d9967c63338a71a3ed1db03db92de4735c706546e13274f592->enter($__internal_e175d0f16f02f3d9967c63338a71a3ed1db03db92de4735c706546e13274f592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesGarantiasBundle:Redenciones:semaforo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e175d0f16f02f3d9967c63338a71a3ed1db03db92de4735c706546e13274f592->leave($__internal_e175d0f16f02f3d9967c63338a71a3ed1db03db92de4735c706546e13274f592_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_322251df69d2ae4a234d2e0516febfdae8586f558a66fe4a9419fb474636109b = $this->env->getExtension("native_profiler");
        $__internal_322251df69d2ae4a234d2e0516febfdae8586f558a66fe4a9419fb474636109b->enter($__internal_322251df69d2ae4a234d2e0516febfdae8586f558a66fe4a9419fb474636109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redenciones por programa";
        
        $__internal_322251df69d2ae4a234d2e0516febfdae8586f558a66fe4a9419fb474636109b->leave($__internal_322251df69d2ae4a234d2e0516febfdae8586f558a66fe4a9419fb474636109b_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ec28414d99fd9af4cc561257be2fd7bb7c6aaa9da368caa5e7d0a442ce47fc7a = $this->env->getExtension("native_profiler");
        $__internal_ec28414d99fd9af4cc561257be2fd7bb7c6aaa9da368caa5e7d0a442ce47fc7a->enter($__internal_ec28414d99fd9af4cc561257be2fd7bb7c6aaa9da368caa5e7d0a442ce47fc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_ec28414d99fd9af4cc561257be2fd7bb7c6aaa9da368caa5e7d0a442ce47fc7a->leave($__internal_ec28414d99fd9af4cc561257be2fd7bb7c6aaa9da368caa5e7d0a442ce47fc7a_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_16420f37283d1b0ba1b7c145fab99205b17b307920b2a106a38fb164e727d0e2 = $this->env->getExtension("native_profiler");
        $__internal_16420f37283d1b0ba1b7c145fab99205b17b307920b2a106a38fb164e727d0e2->enter($__internal_16420f37283d1b0ba1b7c145fab99205b17b307920b2a106a38fb164e727d0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Redenciones por programa</h2>
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
        
        $__internal_16420f37283d1b0ba1b7c145fab99205b17b307920b2a106a38fb164e727d0e2->leave($__internal_16420f37283d1b0ba1b7c145fab99205b17b307920b2a106a38fb164e727d0e2_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c482c8b6a42cbbcc17f47af5afdeba8bb34c77f8d65e3f9f124b4a74c059b47 = $this->env->getExtension("native_profiler");
        $__internal_5c482c8b6a42cbbcc17f47af5afdeba8bb34c77f8d65e3f9f124b4a74c059b47->enter($__internal_5c482c8b6a42cbbcc17f47af5afdeba8bb34c77f8d65e3f9f124b4a74c059b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
          ['Programa', 'Redencion','Participante','Creacion', 'Autorizado', 'En Compra', 'En Alistamiento', 'Despacho'  ],
          ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")));
        foreach ($context['_seq'] as $context["_key"] => $context["historia"]) {
            // line 59
            echo "            ";
            $context["i"] = 1;
            // line 60
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["redencion"]) {
                // line 61
                echo "                ";
                if (($this->getAttribute($this->getAttribute($context["historia"], "redencion", array()), "id", array()) == $this->getAttribute($context["redencion"], "id", array()))) {
                    // line 62
                    echo "                  [ '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "programa", array()), "nombre", array()), "html", null, true);
                    echo "',
                   '";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["redencion"], "id", array()), "html", null, true);
                    echo "',
                   '";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["redencion"], "participante", array()), "nombre", array()), "html", null, true);
                    echo "',
                   '";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
                    if (($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 1, array(), "array") <= 5)) {
                        echo "<a class=\"btn btn-mini btn-success\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Menos de 5 dias sin autorizar.\"><i class=\"icon-thumbs-up\"></i></a>";
                    } elseif ((($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 1, array(), "array") > 5) && ($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 1, array(), "array") < 10))) {
                        echo "<a class=\"btn btn-mini btn-warning\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"sin autorizar.\"><i class=\"icon-hand-right\"></i></a>";
                    } else {
                        echo "<a class=\"btn btn-mini btn-danger\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Mas de 10 dias sin autorizar.\"><i class=\"icon-thumbs-down\"></i></a>";
                    }
                    echo "',
                   '";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 2, array(), "array"), "html", null, true);
                    if (($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 2, array(), "array") <= 5)) {
                        echo "<a class=\"btn btn-mini btn-success\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Menos de 5 dias sin autorizar.\"><i class=\"icon-thumbs-up\"></i></a>";
                    } elseif ((($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 2, array(), "array") > 5) && ($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 2, array(), "array") < 10))) {
                        echo "<a class=\"btn btn-mini btn-warning\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"sin autorizar.\"><i class=\"icon-hand-right\"></i></a>";
                    } else {
                        echo "<a class=\"btn btn-mini btn-danger\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Mas de 10 dias sin autorizar.\"><i class=\"icon-thumbs-down\"></i></a>";
                    }
                    echo "',
                   '";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 3, array(), "array"), "html", null, true);
                    if (($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 3, array(), "array") <= 5)) {
                        echo "<a class=\"btn btn-mini btn-success\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Menos de 5 dias sin autorizar.\"><i class=\"icon-thumbs-up\"></i></a>";
                    } elseif ((($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 3, array(), "array") > 5) && ($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 3, array(), "array") < 10))) {
                        echo "<a class=\"btn btn-mini btn-warning\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"sin autorizar.\"><i class=\"icon-hand-right\"></i></a>";
                    } else {
                        echo "<a class=\"btn btn-mini btn-danger\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Mas de 10 dias sin autorizar.\"><i class=\"icon-thumbs-down\"></i></a>";
                    }
                    echo "',
                   '";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 4, array(), "array"), "html", null, true);
                    if (($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 4, array(), "array") <= 5)) {
                        echo "<a class=\"btn btn-mini btn-success\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Menos de 5 dias sin autorizar.\"><i class=\"icon-thumbs-up\"></i></a>";
                    } elseif ((($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 4, array(), "array") > 5) && ($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 4, array(), "array") < 10))) {
                        echo "<a class=\"btn btn-mini btn-warning\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"sin autorizar.\"><i class=\"icon-hand-right\"></i></a>";
                    } else {
                        echo "<a class=\"btn btn-mini btn-danger\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Mas de 10 dias sin autorizar.\"><i class=\"icon-thumbs-down\"></i></a>";
                    }
                    echo "',
                   '";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 5, array(), "array"), "html", null, true);
                    if (($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 5, array(), "array") <= 5)) {
                        echo "<a class=\"btn btn-mini btn-success\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Menos de 5 dias sin autorizar.\"><i class=\"icon-thumbs-up\"></i></a>";
                    } elseif ((($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 5, array(), "array") > 5) && ($this->getAttribute($this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), $this->getAttribute($context["redencion"], "id", array()), array(), "array"), 5, array(), "array") < 10))) {
                        echo "<a class=\"btn btn-mini btn-warning\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"sin autorizar.\"><i class=\"icon-hand-right\"></i></a>";
                    } else {
                        echo "<a class=\"btn btn-mini btn-danger\" href=\"#\" data-rel=\"tooltip\" data-original-title=\"Mas de 10 dias sin autorizar.\"><i class=\"icon-thumbs-down\"></i></a>";
                    }
                    echo "',],
                ";
                }
                // line 71
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redencion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 73
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
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
            'filterColumnLabel': 'Redencion',
            'matchType': 'any'
          }
        });

        var stringFilter3 = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'control3',
          'options': {
            'filterColumnLabel': 'Participante',
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
        
        $__internal_5c482c8b6a42cbbcc17f47af5afdeba8bb34c77f8d65e3f9f124b4a74c059b47->leave($__internal_5c482c8b6a42cbbcc17f47af5afdeba8bb34c77f8d65e3f9f124b4a74c059b47_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:semaforo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 74,  237 => 73,  234 => 72,  228 => 71,  216 => 69,  205 => 68,  194 => 67,  183 => 66,  172 => 65,  168 => 64,  164 => 63,  159 => 62,  156 => 61,  151 => 60,  148 => 59,  144 => 58,  130 => 47,  127 => 46,  121 => 45,  93 => 23,  84 => 17,  76 => 12,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
/*           ['Programa', 'Redencion','Participante','Creacion', 'Autorizado', 'En Compra', 'En Alistamiento', 'Despacho'  ],*/
/*           {% for historia in historico %}*/
/*             {% set i=1 %}*/
/*               {% for redencion in redenciones %}*/
/*                 {% if historia.redencion.id == redencion.id %}*/
/*                   [ '{{ redencion.participante.programa.nombre }}',*/
/*                    '{{ redencion.id }}',*/
/*                    '{{ redencion.participante.nombre }}',*/
/*                    '{{ dias[redencion.id][0] }}{% if dias[redencion.id][1]<=5 %}<a class="btn btn-mini btn-success" href="#" data-rel="tooltip" data-original-title="Menos de 5 dias sin autorizar."><i class="icon-thumbs-up"></i></a>{% elseif dias[redencion.id][1]>5 and dias[redencion.id][1]<10 %}<a class="btn btn-mini btn-warning" href="#" data-rel="tooltip" data-original-title="sin autorizar."><i class="icon-hand-right"></i></a>{% else %}<a class="btn btn-mini btn-danger" href="#" data-rel="tooltip" data-original-title="Mas de 10 dias sin autorizar."><i class="icon-thumbs-down"></i></a>{% endif %}',*/
/*                    '{{ dias[redencion.id][2] }}{% if dias[redencion.id][2]<=5 %}<a class="btn btn-mini btn-success" href="#" data-rel="tooltip" data-original-title="Menos de 5 dias sin autorizar."><i class="icon-thumbs-up"></i></a>{% elseif dias[redencion.id][2]>5 and dias[redencion.id][2]<10 %}<a class="btn btn-mini btn-warning" href="#" data-rel="tooltip" data-original-title="sin autorizar."><i class="icon-hand-right"></i></a>{% else %}<a class="btn btn-mini btn-danger" href="#" data-rel="tooltip" data-original-title="Mas de 10 dias sin autorizar."><i class="icon-thumbs-down"></i></a>{% endif %}',*/
/*                    '{{ dias[redencion.id][3] }}{% if dias[redencion.id][3]<=5 %}<a class="btn btn-mini btn-success" href="#" data-rel="tooltip" data-original-title="Menos de 5 dias sin autorizar."><i class="icon-thumbs-up"></i></a>{% elseif dias[redencion.id][3]>5 and dias[redencion.id][3]<10 %}<a class="btn btn-mini btn-warning" href="#" data-rel="tooltip" data-original-title="sin autorizar."><i class="icon-hand-right"></i></a>{% else %}<a class="btn btn-mini btn-danger" href="#" data-rel="tooltip" data-original-title="Mas de 10 dias sin autorizar."><i class="icon-thumbs-down"></i></a>{% endif %}',*/
/*                    '{{ dias[redencion.id][4] }}{% if dias[redencion.id][4]<=5 %}<a class="btn btn-mini btn-success" href="#" data-rel="tooltip" data-original-title="Menos de 5 dias sin autorizar."><i class="icon-thumbs-up"></i></a>{% elseif dias[redencion.id][4]>5 and dias[redencion.id][4]<10 %}<a class="btn btn-mini btn-warning" href="#" data-rel="tooltip" data-original-title="sin autorizar."><i class="icon-hand-right"></i></a>{% else %}<a class="btn btn-mini btn-danger" href="#" data-rel="tooltip" data-original-title="Mas de 10 dias sin autorizar."><i class="icon-thumbs-down"></i></a>{% endif %}',*/
/*                    '{{ dias[redencion.id][5] }}{% if dias[redencion.id][5]<=5 %}<a class="btn btn-mini btn-success" href="#" data-rel="tooltip" data-original-title="Menos de 5 dias sin autorizar."><i class="icon-thumbs-up"></i></a>{% elseif dias[redencion.id][5]>5 and dias[redencion.id][5]<10 %}<a class="btn btn-mini btn-warning" href="#" data-rel="tooltip" data-original-title="sin autorizar."><i class="icon-hand-right"></i></a>{% else %}<a class="btn btn-mini btn-danger" href="#" data-rel="tooltip" data-original-title="Mas de 10 dias sin autorizar."><i class="icon-thumbs-down"></i></a>{% endif %}',],*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             {% set i=i+1 %}*/
/*           {% endfor %}*/
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
/*             'filterColumnLabel': 'Redencion',*/
/*             'matchType': 'any'*/
/*           }*/
/*         });*/
/* */
/*         var stringFilter3 = new google.visualization.ControlWrapper({*/
/*           'controlType': 'CategoryFilter',*/
/*           'containerId': 'control3',*/
/*           'options': {*/
/*             'filterColumnLabel': 'Participante',*/
/*             'ui': {*/
/*               'allowTyping': true,*/
/*               'allowMultiple': true*/
/*             }*/
/*           }*/
/*         });*/
/* */
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
