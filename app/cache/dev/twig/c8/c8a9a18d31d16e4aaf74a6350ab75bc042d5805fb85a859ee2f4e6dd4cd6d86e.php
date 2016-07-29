<?php

/* IncentivesCatalogoBundle:Catalogos:datos.html.twig */
class __TwigTemplate_e18ef9f65955e24640d41d750f2bff73a659a7d7550d65c74cf1be86dd7b70fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:datos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_fda6b8cecea7f30128df5bc1e87ddb7edb6e6d70e272f00b8581f274feef933e = $this->env->getExtension("native_profiler");
        $__internal_fda6b8cecea7f30128df5bc1e87ddb7edb6e6d70e272f00b8581f274feef933e->enter($__internal_fda6b8cecea7f30128df5bc1e87ddb7edb6e6d70e272f00b8581f274feef933e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:datos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fda6b8cecea7f30128df5bc1e87ddb7edb6e6d70e272f00b8581f274feef933e->leave($__internal_fda6b8cecea7f30128df5bc1e87ddb7edb6e6d70e272f00b8581f274feef933e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_97ec751a20ca8ef97d7ce3045ed76139bc7e80700dcc8962e6d259820322eaec = $this->env->getExtension("native_profiler");
        $__internal_97ec751a20ca8ef97d7ce3045ed76139bc7e80700dcc8962e6d259820322eaec->enter($__internal_97ec751a20ca8ef97d7ce3045ed76139bc7e80700dcc8962e6d259820322eaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Catalogo";
        
        $__internal_97ec751a20ca8ef97d7ce3045ed76139bc7e80700dcc8962e6d259820322eaec->leave($__internal_97ec751a20ca8ef97d7ce3045ed76139bc7e80700dcc8962e6d259820322eaec_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_4138306c438063f9625fc5f7bcd6f9a9e5528c236cfc1c60580efcc3ded2cb09 = $this->env->getExtension("native_profiler");
        $__internal_4138306c438063f9625fc5f7bcd6f9a9e5528c236cfc1c60580efcc3ded2cb09->enter($__internal_4138306c438063f9625fc5f7bcd6f9a9e5528c236cfc1c60580efcc3ded2cb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Catalogo
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("catalogo");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span6\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t";
        // line 19
        if ((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT"))) {
            // line 20
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_editar", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</i>Datos Catalogo</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Nombre</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t";
        // line 34
        if ((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT"))) {
            // line 35
            echo "\t\t\t\t\t\t<tr><td>Descripcion</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "descripcion", array()), "html", null, true);
            echo "</td></tr>
\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t<tr><td>Valor punto</td><td>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "valorpunto", array()), 6, ",", "."), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha inicio</td><td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "programa", array()), "fechainicio", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha fin</td><td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "programa", array()), "fechafin", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t\t<div class=\"box span10\">
\t    \t<div class=\"box-content\">
\t    \t";
        // line 45
        if ((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_EJEC")) || $this->env->getExtension('security')->isGranted("ROLE_COM")) || $this->env->getExtension('security')->isGranted("ROLE_CLI"))) {
            // line 46
            echo "\t\t\t\t<a class=\"btn btn-small btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_aprobar", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "\">Aprobar</a>\t    \t
\t    \t";
        }
        // line 48
        echo "\t\t\t";
        if (((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT")) || $this->env->getExtension('security')->isGranted("ROLE_EJEC")) || $this->env->getExtension('security')->isGranted("ROLE_COM")) || $this->env->getExtension('security')->isGranted("ROLE_CLIDEMO"))) {
            echo "\t
\t\t\t\t<a class=\"btn btn-small btn-primary\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_indicadores", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "\">Indicadores</a>
\t\t    \t\t<a class=\"btn btn-small btn-primary\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "\">Galeria</a>
\t\t\t";
        }
        // line 52
        echo "\t\t\t";
        if (($this->env->getExtension('security')->isGranted("ROLE_CLI") && ((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")) == 1))) {
            // line 53
            echo "\t\t    \t\t<a class=\"btn btn-small btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "\">Galeria</a>
\t\t\t";
        }
        // line 55
        echo "
\t    \t\t";
        // line 56
        if (((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT")) || $this->env->getExtension('security')->isGranted("ROLE_DIS"))) {
            // line 57
            echo "\t\t    \t\t<a class=\"btn btn-small btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_importar", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "\">Carga Masiva</a>
\t\t    \t\t<a class=\"btn btn-small btn-info\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_catalogoim", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "\">Exportar</a>
\t\t    \t\t<a class=\"btn btn-small btn-info\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_imagenes", array("catalogo" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "\">Imagenes</a>
\t\t    \t";
        }
        // line 61
        echo "\t\t    \t\t<a class=\"btn btn-small btn-info\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_formatocambios", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
        echo "\">Cambios</a>
                    
                    ";
        // line 63
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR"))) {
            // line 64
            echo "                        <a class=\"btn btn-small btn-danger\" onClick=\"confirmar('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_realcular", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
            echo "')\" href=\"\" }}\">Actualizar Puntos</a>
                    ";
        }
        // line 66
        echo "\t    \t</div>
\t    </div>

\t    ";
        // line 69
        if ((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT")) || $this->env->getExtension('security')->isGranted("ROLE_EJEC")) || $this->env->getExtension('security')->isGranted("ROLE_COM"))) {
            // line 70
            echo "\t\t    ";
            if (array_key_exists("intervalos", $context)) {
                // line 71
                echo "\t\t\t    <div class=\"box span10\">
\t\t\t    \t<div class=\"box-content\">
\t\t\t\t    \t<div class=\"box-header well\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t<a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_intervalos", array("id" => $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</i>Intervalos</h2>
\t\t\t\t\t\t</div>
\t\t\t\t    \t<table class=\"table table-bordered table-striped\">
\t\t\t\t    \t\t<tr><th>Minimo</th><th>Maximo</th><th>Valor Punto</th></tr>
\t\t\t\t    \t";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["intervalos"]) ? $context["intervalos"] : $this->getContext($context, "intervalos")));
                foreach ($context['_seq'] as $context["_key"] => $context["intervalo"]) {
                    // line 85
                    echo "\t\t\t\t    \t\t<tr><td >";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["intervalo"], "minimo", array()), 2, ",", "."), "html", null, true);
                    echo "</td>
\t\t\t\t    \t\t\t<td align=\"right\">";
                    // line 86
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["intervalo"], "maximo", array()), 2, ",", "."), "html", null, true);
                    echo "</td>
\t\t\t\t    \t\t\t<td align=\"right\">";
                    // line 87
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["intervalo"], "puntos", array()), 6, ",", "."), "html", null, true);
                    echo "</td>
\t\t\t\t\t    \t\t<td>
\t\t\t\t\t    \t\t\t<a class=\"editar_intervalo\" href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_intervaloseditar", array("id" => $this->getAttribute($context["intervalo"], "id", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t    \t\t</tr>
\t\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervalo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "\t\t\t\t    \t</table>
\t\t\t    \t</div>
\t\t\t    </div>
\t    \t";
            }
            // line 101
            echo "\t    ";
        }
        // line 102
        echo "\t</div>


";
        
        $__internal_4138306c438063f9625fc5f7bcd6f9a9e5528c236cfc1c60580efcc3ded2cb09->leave($__internal_4138306c438063f9625fc5f7bcd6f9a9e5528c236cfc1c60580efcc3ded2cb09_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71aadf0e06c63b6e5037ae5addf432db022e214c2d5227e7167c0a33ffdf0e34 = $this->env->getExtension("native_profiler");
        $__internal_71aadf0e06c63b6e5037ae5addf432db022e214c2d5227e7167c0a33ffdf0e34->enter($__internal_71aadf0e06c63b6e5037ae5addf432db022e214c2d5227e7167c0a33ffdf0e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>

\tfunction confirmar(ruta)
\t{
\t  if (confirm(\"Cambiar estado\")==true){
\t  \tself.location=ruta;
\t  }else{
\t  \talert(\"OK\");
\t  }
\t  
\t}

        var x;
\t\tx=\$(document);
\t\tx.ready(inicializarEventos);

\t\tfunction inicializarEventos()
\t\t{
\t\t var x;
\t\t x=\$(\"div.estado a\");
\t\t x.each(resaltarParrafos);
\t\t}
\t\t
\t\t\$(\".editar_intervalo\").colorbox({rel: 'gal', title: function(){
\t\t  var url = \$(this).attr('href');
\t\t}});
\t</script>
    
    <script type=\"text/javascript\">
      function confirmar(ruta)
      {
        if (confirm(\"Se realizara el recálculo de puntajes del catálogo seleccionado.\")==true){
            self.location=ruta;
        }
        
      }
  </script>
";
        
        $__internal_71aadf0e06c63b6e5037ae5addf432db022e214c2d5227e7167c0a33ffdf0e34->leave($__internal_71aadf0e06c63b6e5037ae5addf432db022e214c2d5227e7167c0a33ffdf0e34_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 108,  274 => 107,  264 => 102,  261 => 101,  255 => 97,  241 => 89,  236 => 87,  232 => 86,  227 => 85,  223 => 84,  211 => 75,  205 => 71,  202 => 70,  200 => 69,  195 => 66,  189 => 64,  187 => 63,  181 => 61,  176 => 59,  172 => 58,  167 => 57,  165 => 56,  162 => 55,  156 => 53,  153 => 52,  148 => 50,  144 => 49,  139 => 48,  133 => 46,  131 => 45,  122 => 39,  118 => 38,  113 => 37,  107 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  86 => 26,  76 => 20,  74 => 19,  62 => 10,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Datos Catalogo{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Catalogo*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('catalogo') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				{% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') %}*/
/* 				<a href="{{ path('catalogo_editar',  {"id": catalogo.id}) }}">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-edit icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				{% endif %}*/
/* 				</i>Datos Catalogo</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Nombre</td><td>{{ catalogo.nombre }}</td></tr>*/
/* 						<tr><td>Programa</td><td>{{ catalogo.programa.nombre}}</td></tr>*/
/* 						<tr><td>Cliente</td><td>{{ catalogo.programa.cliente.nombre }}</td></tr>*/
/* 						{% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') %}*/
/* 						<tr><td>Descripcion</td><td>{{ catalogo.descripcion }}</td></tr>*/
/* 						{% endif %}*/
/* 						<tr><td>Valor punto</td><td>{{ catalogo.valorpunto|number_format(6, ',', '.') }}</td></tr>*/
/* 						<tr><td>Fecha inicio</td><td>{{ catalogo.programa.fechainicio | date("Y-m-d") }}</td></tr>*/
/* 						<tr><td>Fecha fin</td><td>{{ catalogo.programa.fechafin | date("Y-m-d") }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 		<div class="box span10">*/
/* 	    	<div class="box-content">*/
/* 	    	{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_DIR') or is_granted('ROLE_EJEC') or is_granted('ROLE_COM') or is_granted('ROLE_CLI') %}*/
/* 				<a class="btn btn-small btn-primary" href="{{ path('catalogo_aprobar',  {"id": catalogo.id}) }}">Aprobar</a>	    	*/
/* 	    	{% endif %}*/
/* 			{% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') or  is_granted('ROLE_EJEC') or  is_granted('ROLE_COM') or is_granted('ROLE_CLIDEMO') %}	*/
/* 				<a class="btn btn-small btn-primary" href="{{ path('catalogo_indicadores',  {"id": catalogo.id}) }}">Indicadores</a>*/
/* 		    		<a class="btn btn-small btn-primary" href="{{ path('catalogo_galeria',  {"id": catalogo.id}) }}">Galeria</a>*/
/* 			{% endif %}*/
/* 			{% if is_granted('ROLE_CLI') and galeria==1 %}*/
/* 		    		<a class="btn btn-small btn-primary" href="{{ path('catalogo_galeria',  {"id": catalogo.id}) }}">Galeria</a>*/
/* 			{% endif %}*/
/* */
/* 	    		{% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') or is_granted('ROLE_DIS') %}*/
/* 		    		<a class="btn btn-small btn-info" href="{{ path('productocatalogo_importar',  {"id": catalogo.id}) }}">Carga Masiva</a>*/
/* 		    		<a class="btn btn-small btn-info" href="{{ path('productocatalogo_catalogoim',  {"id": catalogo.id}) }}">Exportar</a>*/
/* 		    		<a class="btn btn-small btn-info" href="{{ path('productocatalogo_imagenes',  {"catalogo": catalogo.id}) }}">Imagenes</a>*/
/* 		    	{% endif %}*/
/* 		    		<a class="btn btn-small btn-info" href="{{ path('productocatalogo_formatocambios',  {"id": catalogo.id}) }}">Cambios</a>*/
/*                     */
/*                     {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') %}*/
/*                         <a class="btn btn-small btn-danger" onClick="confirmar('{{ url("catalogo_realcular", {"id": catalogo.id}) }}')" href="" }}">Actualizar Puntos</a>*/
/*                     {% endif %}*/
/* 	    	</div>*/
/* 	    </div>*/
/* */
/* 	    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') or is_granted('ROLE_EJEC') or is_granted('ROLE_COM') %}*/
/* 		    {% if intervalos is defined %}*/
/* 			    <div class="box span10">*/
/* 			    	<div class="box-content">*/
/* 				    	<div class="box-header well">*/
/* 							<h2>*/
/* 							<a href="{{ path('catalogo_intervalos',  {"id": catalogo.id}) }}">*/
/* 								<button class="btn btn-primary">*/
/* 									<i class="icon-edit icon-white"></i>*/
/* 								</button>*/
/* 							</a>*/
/* 							</i>Intervalos</h2>*/
/* 						</div>*/
/* 				    	<table class="table table-bordered table-striped">*/
/* 				    		<tr><th>Minimo</th><th>Maximo</th><th>Valor Punto</th></tr>*/
/* 				    	{% for intervalo in intervalos %}*/
/* 				    		<tr><td >{{ intervalo.minimo|number_format(2, ',', '.') }}</td>*/
/* 				    			<td align="right">{{ intervalo.maximo|number_format(2, ',', '.') }}</td>*/
/* 				    			<td align="right">{{ intervalo.puntos|number_format(6, ',', '.') }}</td>*/
/* 					    		<td>*/
/* 					    			<a class="editar_intervalo" href="{{ path('catalogo_intervaloseditar',  {"id": intervalo.id}) }}">*/
/* 										<button class="btn btn-primary">*/
/* 											<i class="icon-edit icon-white"></i>*/
/* 										</button>*/
/* 									</a>*/
/* 								</td>*/
/* 				    		</tr>*/
/* 				    	{% endfor %}*/
/* 				    	</table>*/
/* 			    	</div>*/
/* 			    </div>*/
/* 	    	{% endif %}*/
/* 	    {% endif %}*/
/* 	</div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* */
/* 	function confirmar(ruta)*/
/* 	{*/
/* 	  if (confirm("Cambiar estado")==true){*/
/* 	  	self.location=ruta;*/
/* 	  }else{*/
/* 	  	alert("OK");*/
/* 	  }*/
/* 	  */
/* 	}*/
/* */
/*         var x;*/
/* 		x=$(document);*/
/* 		x.ready(inicializarEventos);*/
/* */
/* 		function inicializarEventos()*/
/* 		{*/
/* 		 var x;*/
/* 		 x=$("div.estado a");*/
/* 		 x.each(resaltarParrafos);*/
/* 		}*/
/* 		*/
/* 		$(".editar_intervalo").colorbox({rel: 'gal', title: function(){*/
/* 		  var url = $(this).attr('href');*/
/* 		}});*/
/* 	</script>*/
/*     */
/*     <script type="text/javascript">*/
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Se realizara el recálculo de puntajes del catálogo seleccionado.")==true){*/
/*             self.location=ruta;*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/* {% endblock %}*/
/* */
