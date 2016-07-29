<?php

/* IncentivesCatalogoBundle:Producto:datos.html.twig */
class __TwigTemplate_a0e507ba6fa26587cc2231a75e9d261483ec2ba41220253d3b1ea3387fd2da95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesCatalogoBundle:Producto:datos.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a81a0f594bd65fd9a03e1c1b8cdfb4901198cdcc0187f263a564d0707f837fa = $this->env->getExtension("native_profiler");
        $__internal_7a81a0f594bd65fd9a03e1c1b8cdfb4901198cdcc0187f263a564d0707f837fa->enter($__internal_7a81a0f594bd65fd9a03e1c1b8cdfb4901198cdcc0187f263a564d0707f837fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:datos.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a81a0f594bd65fd9a03e1c1b8cdfb4901198cdcc0187f263a564d0707f837fa->leave($__internal_7a81a0f594bd65fd9a03e1c1b8cdfb4901198cdcc0187f263a564d0707f837fa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa0aed1dfc43d7f65014c8c66b18562aef59cdbbb30bdaf384a48c17eb5c45f2 = $this->env->getExtension("native_profiler");
        $__internal_fa0aed1dfc43d7f65014c8c66b18562aef59cdbbb30bdaf384a48c17eb5c45f2->enter($__internal_fa0aed1dfc43d7f65014c8c66b18562aef59cdbbb30bdaf384a48c17eb5c45f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Producto";
        
        $__internal_fa0aed1dfc43d7f65014c8c66b18562aef59cdbbb30bdaf384a48c17eb5c45f2->leave($__internal_fa0aed1dfc43d7f65014c8c66b18562aef59cdbbb30bdaf384a48c17eb5c45f2_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6946f898d1e7a95aaca9abe1561d8cebdcf6b5ed8eeefb9233489187e316f7ed = $this->env->getExtension("native_profiler");
        $__internal_6946f898d1e7a95aaca9abe1561d8cebdcf6b5ed8eeefb9233489187e316f7ed->enter($__internal_6946f898d1e7a95aaca9abe1561d8cebdcf6b5ed8eeefb9233489187e316f7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Productos
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span6\">
\t    <div class=\"box-content\">
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_editar", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"icon-edit icon-white\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t</i>Datos Producto</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Nombre</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Tipo</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "tipo", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Categoria</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "categoria", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Clasificación</td><td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "productoclasificacion", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Referencia</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "referencia", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Marca</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "marca", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Descripcion</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "descripcion", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Codigo EAN</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "codEAN", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Codigo Incentives</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "codInc", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Dimensiones</td><td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "Alto", array()), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "Largo", array()), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "Ancho", array()), "html", null, true);
        echo " cm.</td></tr>
\t\t\t\t\t\t<tr><td>Peso</td><td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "peso", array()), "html", null, true);
        echo " Kg.</td></tr>
\t\t\t\t\t\t<tr><td>IVA</td><td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "iva", array()), "html", null, true);
        echo " %</td></tr>
\t\t\t\t\t\t<tr><td>Logistica</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "logistica", array()), "html", null, true);
        echo " </td></tr>
\t\t\t\t\t\t<tr><td>Incremento</td><td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "incremento", array()), "html", null, true);
        echo " %</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span5\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_agregarimagen", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\tImagenes
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Imagenes</th>
\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")));
        foreach ($context['_seq'] as $context["_key"] => $context["imagenes"]) {
            echo "\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href=\"../../../";
            // line 70
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["imagenes"], "path", array()), 0), "html", null, true);
            echo "\" target='_blank'><img src=\"../../../";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($context["imagenes"], "path", array()), 0), 0,  -4), "html", null, true);
            echo "_min.jpg\"><a></td>
\t\t\t\t\t\t\t\t<td>";
            // line 71
            if (($this->getAttribute($context["imagenes"], "estado", array()) == "0")) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadoimagen", array("id" => $this->getAttribute($context["imagenes"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tInactiva</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadoimagen", array("id" => $this->getAttribute($context["imagenes"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tActiva</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagenes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span6\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_agregarprecio", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>\t
\t\t\t\t\tPrecios
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Proveedor</th>
\t\t\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t\t\t<th>Precio Dolares</th>
\t\t\t\t\t\t\t<th>Principal</th>
\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productoprecio"]) ? $context["productoprecio"] : $this->getContext($context, "productoprecio")));
        foreach ($context['_seq'] as $context["_key"] => $context["precio"]) {
            // line 110
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_editarprecio", array("id" => $this->getAttribute($context["precio"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["precio"], "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["precio"], "precio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["precio"], "precioDolares", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["precio"], "principal", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 115
            if (($this->getAttribute($this->getAttribute($context["precio"], "estado", array()), "id", array()) == 0)) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadoprecio", array("id" => $this->getAttribute($context["precio"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tInactivo</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadoprecio", array("id" => $this->getAttribute($context["precio"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tActivo</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['precio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>
\t
\t\t<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_nuevocatalogo", array("producto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-plus icon-white\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>\t
\t\t\t\t\tCatalogos
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Catalogo</th>
\t\t\t\t\t\t\t<th>Programa</th>
\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t<th>Puntos</th>
\t\t\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t\t\t<th>Incremento (%)</th>
\t\t\t\t\t\t\t<th>Logistica</th>
\t\t\t\t\t\t\t<th>Puntos Temporal</th>
\t\t\t\t\t\t\t<th>Precio Temporal</th>
\t\t\t\t\t\t\t<th>Incremento Temporal (%)</th>
\t\t\t\t\t\t\t<th>Logistica Temporal</th>
\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productocatalogo"]) ? $context["productocatalogo"] : $this->getContext($context, "productocatalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
            // line 161
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_editarcatalogo", array("productocatalogo" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "catalogos", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["catalogo"], "catalogos", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["catalogo"], "catalogos", array()), "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "puntos", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "precio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "incremento", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "logistica", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "puntosTemporal", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "precioTemporal", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "incrementoTemporal", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "logisticaTemporal", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 173
            if (($this->getAttribute($context["catalogo"], "activo", array()) == 0)) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger 1\" onClick=confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadopremio", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                echo "') href=\"#\">
\t\t\t\t\t\t\t\t\t\tInactivo</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success 1\" ";
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR"))) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonClick=confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("producto_estadopremio", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                    echo "')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 180
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\tActivo</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 183
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>
\t

";
        
        $__internal_6946f898d1e7a95aaca9abe1561d8cebdcf6b5ed8eeefb9233489187e316f7ed->leave($__internal_6946f898d1e7a95aaca9abe1561d8cebdcf6b5ed8eeefb9233489187e316f7ed_prof);

    }

    // line 195
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61ab37e3ef40ee328fc721a6d7c20e5e9ac937a36af84f2933d87c130d464e37 = $this->env->getExtension("native_profiler");
        $__internal_61ab37e3ef40ee328fc721a6d7c20e5e9ac937a36af84f2933d87c130d464e37->enter($__internal_61ab37e3ef40ee328fc721a6d7c20e5e9ac937a36af84f2933d87c130d464e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 196
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

\t\t// function resaltarParrafos()
\t\t// {
\t\t//  var x=\$(this);
\t\t//  var parrafo=(x.attr('id'));
\t\t//  parrafo=parseInt(parrafo);
\t\t//  alert(parrafo);
\t\t//  \$(\"#\"+parrafo).click(function(evento){
\t\t//                evento.preventDefault();
\t\t//                \$(\"#destino\").load(\"";
        // line 228
        echo $this->env->getExtension('routing')->getUrl("proveedores_estado", array("id" => "+parrafo+"));
        echo "\"),\t
\t\t// \t\t\t\t\tfunction() {
\t\t// \t\t\t\t\t\talert( \"Actualizacion realizada.\" );
\t\t// \t\t\t\t\t} );
\t\t//        });
\t\t// }

        // x=\$(\"div.estado a\");
        // x.each(mostrar);

        // function mostrar()
        // {
        // \tvar x=\$(this);
        // \talert (x.attr('id'));
        // }

  //       function resaltarParrafos(){
  //       \tvar x=\$(this);
\t\t// \tvar parrafo=(x.attr('id'));
\t\t// \talert(parrafo);
\t\t// \t\$('div.estado').click(function(evento){
\t\t// \t\tevento.preventDefault();
\t\t// \t\t\$(\"#destino\").load(\"";
        // line 250
        echo $this->env->getExtension('routing')->getUrl("proveedores_estado", array("id" => "+parrafo+"));
        echo "\",\t
\t\t// \t\t\tfunction() {
\t\t// \t\t\t\talert( \"Actualizacion realizada.\" );
\t\t// \t\t\t} );
\t\t// \t});
\t\t// })
\t</script>
";
        
        $__internal_61ab37e3ef40ee328fc721a6d7c20e5e9ac937a36af84f2933d87c130d464e37->leave($__internal_61ab37e3ef40ee328fc721a6d7c20e5e9ac937a36af84f2933d87c130d464e37_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 250,  473 => 228,  437 => 196,  431 => 195,  418 => 187,  409 => 183,  404 => 180,  398 => 178,  395 => 177,  388 => 174,  386 => 173,  382 => 172,  378 => 171,  374 => 170,  370 => 169,  366 => 168,  362 => 167,  358 => 166,  354 => 165,  350 => 164,  346 => 163,  340 => 162,  337 => 161,  333 => 160,  304 => 134,  293 => 125,  285 => 122,  278 => 119,  271 => 116,  269 => 115,  265 => 114,  261 => 113,  257 => 112,  251 => 111,  248 => 110,  244 => 109,  222 => 90,  211 => 81,  203 => 78,  196 => 75,  189 => 72,  187 => 71,  181 => 70,  174 => 68,  155 => 52,  142 => 42,  138 => 41,  134 => 40,  130 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  73 => 19,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Producto{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Productos*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('producto') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span6">*/
/* 	    <div class="box-content">*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				<a href="{{ path('producto_editar',  {"id": producto.id}) }}">*/
/* 					<button class="btn btn-primary">*/
/* 						<i class="icon-edit icon-white"></i>*/
/* 					</button>*/
/* 				</a>*/
/* 				</i>Datos Producto</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Nombre</td><td>{{ producto.nombre }}</td></tr>*/
/* 						<tr><td>Tipo</td><td>{{ producto.tipo.nombre}}</td></tr>*/
/* 						<tr><td>Categoria</td><td>{{ producto.categoria.nombre}}</td></tr>*/
/* 						<tr><td>Clasificación</td><td>{{ producto.productoclasificacion.nombre}}</td></tr>*/
/* 						<tr><td>Referencia</td><td>{{ producto.referencia }}</td></tr>*/
/* 						<tr><td>Marca</td><td>{{ producto.marca }}</td></tr>*/
/* 						<tr><td>Descripcion</td><td>{{ producto.descripcion }}</td></tr>*/
/* 						<tr><td>Codigo EAN</td><td>{{ producto.codEAN }}</td></tr>*/
/* 						<tr><td>Codigo Incentives</td><td>{{ producto.codInc }}</td></tr>*/
/* 						<tr><td>Dimensiones</td><td>{{ producto.Alto }} x {{ producto.Largo }} x {{ producto.Ancho }} cm.</td></tr>*/
/* 						<tr><td>Peso</td><td>{{ producto.peso }} Kg.</td></tr>*/
/* 						<tr><td>IVA</td><td>{{ producto.iva }} %</td></tr>*/
/* 						<tr><td>Logistica</td><td>{{ producto.logistica }} </td></tr>*/
/* 						<tr><td>Incremento</td><td>{{ producto.incremento }} %</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span5">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('producto_agregarimagen',  {"id": producto.id}) }}">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>*/
/* 					Imagenes*/
/* 				</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Imagenes</th>*/
/* 						<th>Estado</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for imagenes in imagen %}		*/
/* 							<tr>*/
/* 								<td><a href="../../../{{imagenes.path| slice (0)}}" target='_blank'><img src="../../../{{(imagenes.path| slice (0))[:-4]}}_min.jpg"><a></td>*/
/* 								<td>{% if (imagenes.estado=='0') %}*/
/* 										<a class="btn btn-danger 1" onClick=confirmar('{{ url("producto_estadoimagen", {"id": imagenes.id}) }}') href="#">*/
/* 										Inactiva</a>*/
/* 									{% else %}*/
/* 										<a class="btn btn-success 1" onClick=confirmar('{{ url("producto_estadoimagen", {"id": imagenes.id}) }}') href="#">*/
/* 										Activa</a>*/
/* 									{% endif %}*/
/* 								</td>*/
/* 							</tr>			*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span6">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('producto_agregarprecio',  {"id": producto.id}) }}">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>	*/
/* 					Precios*/
/* 				</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>Proveedor</th>*/
/* 							<th>Precio</th>*/
/* 							<th>Precio Dolares</th>*/
/* 							<th>Principal</th>*/
/* 							<th>Estado</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{% for precio in productoprecio %}*/
/* 						<tr>*/
/* 							<td><a href="{{ path("producto_editarprecio", {"id": precio.id}) }}">{{precio.proveedor.nombre}}</a></td>*/
/* 							<td>{{ precio.precio }}</td>*/
/* 							<td>{{ precio.precioDolares }}</td>*/
/* 							<td>{{ precio.principal }}</td>*/
/* 							<td>{% if (precio.estado.id==0) %}*/
/* 										<a class="btn btn-danger 1" onClick=confirmar('{{ url("producto_estadoprecio", {"id": precio.id}) }}') href="#">*/
/* 										Inactivo</a>*/
/* 									{% else %}*/
/* 										<a class="btn btn-success 1" onClick=confirmar('{{ url("producto_estadoprecio", {"id": precio.id}) }}') href="#">*/
/* 										Activo</a>*/
/* 									{% endif %}*/
/* 								</td>*/
/* 						</tr>*/
/* 						{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 		<div class="box span12">*/
/* 		<div class="box-content">*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('productocatalogo_nuevocatalogo',  {"producto": producto.id}) }}">*/
/* 						<button class="btn btn-small btn-success">*/
/* 							<i class="icon-plus icon-white"></i>*/
/* 						</button>*/
/* 					</a>	*/
/* 					Catalogos*/
/* 				</h2>*/
/* 			</div>*/
/* 			<table class="table table-bordered table-striped">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>Catalogo</th>*/
/* 							<th>Programa</th>*/
/* 							<th>Cliente</th>*/
/* 							<th>Puntos</th>*/
/* 							<th>Precio</th>*/
/* 							<th>Incremento (%)</th>*/
/* 							<th>Logistica</th>*/
/* 							<th>Puntos Temporal</th>*/
/* 							<th>Precio Temporal</th>*/
/* 							<th>Incremento Temporal (%)</th>*/
/* 							<th>Logistica Temporal</th>*/
/* 							<th>Estado</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{% for catalogo in productocatalogo %}*/
/* 						<tr>*/
/* 							<td><a href="{{ path("productocatalogo_editarcatalogo", {"productocatalogo": catalogo.id}) }}">{{ catalogo.catalogos.nombre }}</a></td>*/
/* 							<td>{{ catalogo.catalogos.programa.nombre }}</td>*/
/* 							<td>{{ catalogo.catalogos.programa.cliente.nombre }}</td>*/
/* 							<td>{{ catalogo.puntos }}</td>*/
/* 							<td>{{ catalogo.precio }}</td>*/
/* 							<td>{{ catalogo.incremento }}</td>*/
/* 							<td>{{ catalogo.logistica }}</td>*/
/* 							<td>{{ catalogo.puntosTemporal }}</td>*/
/* 							<td>{{ catalogo.precioTemporal }}</td>*/
/* 							<td>{{ catalogo.incrementoTemporal }}</td>*/
/* 							<td>{{ catalogo.logisticaTemporal }}</td>*/
/* 							<td>{% if (catalogo.activo==0) %}*/
/* 										<a class="btn btn-danger 1" onClick=confirmar('{{ url("producto_estadopremio", {"id": catalogo.id}) }}') href="#">*/
/* 										Inactivo</a>*/
/* 									{% else %}*/
/* 										<a class="btn btn-success 1" {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') %}*/
/* 																	onClick=confirmar('{{ url("producto_estadopremio", {"id": catalogo.id}) }}')*/
/* 																	{% endif %}*/
/* 																	href="#">*/
/* 										Activo</a>*/
/* 									{% endif %}*/
/* 								</td>*/
/* 							*/
/* 						</tr>*/
/* 						{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
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
/* */
/* 		// function resaltarParrafos()*/
/* 		// {*/
/* 		//  var x=$(this);*/
/* 		//  var parrafo=(x.attr('id'));*/
/* 		//  parrafo=parseInt(parrafo);*/
/* 		//  alert(parrafo);*/
/* 		//  $("#"+parrafo).click(function(evento){*/
/* 		//                evento.preventDefault();*/
/* 		//                $("#destino").load("{{ url('proveedores_estado', {'id':"+parrafo+"}) }}"),	*/
/* 		// 					function() {*/
/* 		// 						alert( "Actualizacion realizada." );*/
/* 		// 					} );*/
/* 		//        });*/
/* 		// }*/
/* */
/*         // x=$("div.estado a");*/
/*         // x.each(mostrar);*/
/* */
/*         // function mostrar()*/
/*         // {*/
/*         // 	var x=$(this);*/
/*         // 	alert (x.attr('id'));*/
/*         // }*/
/* */
/*   //       function resaltarParrafos(){*/
/*   //       	var x=$(this);*/
/* 		// 	var parrafo=(x.attr('id'));*/
/* 		// 	alert(parrafo);*/
/* 		// 	$('div.estado').click(function(evento){*/
/* 		// 		evento.preventDefault();*/
/* 		// 		$("#destino").load("{{ url('proveedores_estado', {'id':"+parrafo+"}) }}",	*/
/* 		// 			function() {*/
/* 		// 				alert( "Actualizacion realizada." );*/
/* 		// 			} );*/
/* 		// 	});*/
/* 		// })*/
/* 	</script>*/
/* {% endblock %}*/
/* */
