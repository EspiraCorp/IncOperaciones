<?php

/* IncentivesCatalogoBundle:Catalogos:galeria.html.twig */
class __TwigTemplate_70e6d57f719debad9ff3147e80a9b73d274b054a18f9829682d3073caf28d018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:galeria.html.twig", 1);
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
        $__internal_42c787c60429b774d828f19357e38e380cce9c034c03541317b53ec59c194505 = $this->env->getExtension("native_profiler");
        $__internal_42c787c60429b774d828f19357e38e380cce9c034c03541317b53ec59c194505->enter($__internal_42c787c60429b774d828f19357e38e380cce9c034c03541317b53ec59c194505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:galeria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42c787c60429b774d828f19357e38e380cce9c034c03541317b53ec59c194505->leave($__internal_42c787c60429b774d828f19357e38e380cce9c034c03541317b53ec59c194505_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa2a4dedd09f3d169dcbb5b0bdd29404d1004ef8fbb2833e9aa1caf364ac5836 = $this->env->getExtension("native_profiler");
        $__internal_aa2a4dedd09f3d169dcbb5b0bdd29404d1004ef8fbb2833e9aa1caf364ac5836->enter($__internal_aa2a4dedd09f3d169dcbb5b0bdd29404d1004ef8fbb2833e9aa1caf364ac5836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogo";
        
        $__internal_aa2a4dedd09f3d169dcbb5b0bdd29404d1004ef8fbb2833e9aa1caf364ac5836->leave($__internal_aa2a4dedd09f3d169dcbb5b0bdd29404d1004ef8fbb2833e9aa1caf364ac5836_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ca6b37140f04e2432b8de50bb1379c1e37ff71a7b59582f1a1297ec8edbfb22e = $this->env->getExtension("native_profiler");
        $__internal_ca6b37140f04e2432b8de50bb1379c1e37ff71a7b59582f1a1297ec8edbfb22e->enter($__internal_ca6b37140f04e2432b8de50bb1379c1e37ff71a7b59582f1a1297ec8edbfb22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_ca6b37140f04e2432b8de50bb1379c1e37ff71a7b59582f1a1297ec8edbfb22e->leave($__internal_ca6b37140f04e2432b8de50bb1379c1e37ff71a7b59582f1a1297ec8edbfb22e_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6cca82bb86d485d3f8dc547729fd82755928b110b335cad6dd6b631ef0644049 = $this->env->getExtension("native_profiler");
        $__internal_6cca82bb86d485d3f8dc547729fd82755928b110b335cad6dd6b631ef0644049->enter($__internal_6cca82bb86d485d3f8dc547729fd82755928b110b335cad6dd6b631ef0644049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
  <div class=\"box span12\">
    <div class=\"box-header well\">
      <h2><i class=\"icon-th-list\"></i>Catalogo</h2>
      <div class=\"box-icon\">
          <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
      </div>
    </div>
    <div class=\"box-content\">
      ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                          <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">

                            <table class=\"table table-bordered table-striped\">
                            <tr>
                              <th>Catálogo</th><th colspan=\"2\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "nombre", array()), "html", null, true);
        echo "</th>
                              <th>Programa</th><th colspan=\"2\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "programa", array()), "nombre", array()), "html", null, true);
        echo "</th>
                              <th><div class=\"box-icon\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</</th>
                            </tr>
                            <tr>
                              <th>";
        // line 27
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Nombre", "p.nombre");
        echo "</th>
                              <th>";
        // line 28
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Categoria", "c.nombre");
        echo "</th>
                              <th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Referencia", "p.referencia");
        echo "</th>
                              <th>";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Marca", "p.marca");
        echo "</th>
                              <th>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "SKU", "p.codInc");
        echo "</th>
                              <th>";
        // line 32
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Estado", "pc.activo");
        echo "</th>
                              <th>";
        // line 33
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Valor", "pc.precio");
        echo "</th>
                            </tr>
                            <tr>
                              <th>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referencia", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                              <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codInc", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                              <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("style" => "width:80px")));
        echo "</th>
                              <th><input type=\"text\" style=\"width:150px\" maxlength=\"255\" name=\"producto[precio]\" id=\"producto_precio\"></th>
                            </tr>
                            ";
        // line 44
        if ( !$this->env->getExtension('security')->isGranted("ROLE_CLI")) {
            // line 45
            echo "                            <tr>
                              <th>Tipo de Vista</th>
                              <th><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "vista" => 1)), "html", null, true);
            echo "\" class=\"btn btn-primary\">Participante</a></th>
                              <th><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "vista" => 2)), "html", null, true);
            echo "\" class=\"btn btn-primary\">Cliente</a></th>
                              <th><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "vista" => 3)), "html", null, true);
            echo "\" class=\"btn btn-primary\">D. Comercial</a></th>
                              <th><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "vista" => 4)), "html", null, true);
            echo "\" class=\"btn btn-primary\">Ejecutivo</a></th>
                              <th><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "vista" => 5)), "html", null, true);
            echo "\" class=\"btn btn-primary\">Operaciones</a></th>
                              <th><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_galeria", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "vista" => 0)), "html", null, true);
            echo "\" class=\"btn btn-primary\">Todos</a></th>
                             </tr>
                             ";
        }
        // line 55
        echo "                          </table>
                        </form>
      <br>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 59
            echo "        ";
            $context["i"] = 0;
            // line 60
            echo "          <div class=\"box span\" style=\"height: 330px; width:230px\">
            <div class=\"box-header well\" data-original-title=\"\">
              <h2>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"box-content\">
                  <ul class=\"thumbnails gallery\">
                    ";
            // line 66
            if ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array())) {
                // line 67
                echo "                    <li id=\"imagen-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"thumbnail\" style=\"widht: 100px\">
                      <a class=\"cboxElement\" href=\"../../../../";
                // line 68
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), "html", null, true);
                echo "\" style=\"background:url(../../../../";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), 0,  -4), "html", null, true);
                echo "_min.jpg)\">
                        <img alt=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
                echo "\" src=\"../../../";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), 0,  -4), "html", null, true);
                echo "_min.jpg\" style=\"display: block;\">
                      </a>
                    </li>
                    ";
            }
            // line 73
            echo "                  </ul>
              <table class=\"table\">
                <tbody>
                  <tr>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                  </tr>
                  <tr>
                    <td>REF: ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
                  </tr>
                  <tr>
                    <td>Puntos: ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "puntos", array()), "html", null, true);
            echo "</td>
                  </tr>
                  ";
            // line 85
            if (((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT")) || $this->env->getExtension('security')->isGranted("ROLE_EJEC")) || $this->env->getExtension('security')->isGranted("ROLE_COM")) || ($this->env->getExtension('security')->isGranted("ROLE_CLI") && ((isset($context["precioVenta"]) ? $context["precioVenta"] : $this->getContext($context, "precioVenta")) == 1)))) {
                // line 86
                echo "                   <tr>
                     ";
                // line 87
                $context["valorventa"] = (($this->getAttribute($context["producto"], "precio", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100))) + $this->getAttribute($context["producto"], "logistica", array()));
                // line 88
                echo "                    <td>Precio de Venta: \$ ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")), 2, "ceil"), 2, ",", "."), "html", null, true);
                echo "</td>
                  </tr>
                  ";
            }
            // line 91
            echo "                 
                </tbody>
              </table>     
              
            </div>
          </div>       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  
        

    </div>

   <div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 104
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 107
        echo $this->env->getExtension('knp_pagination')->render((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "                    
                </div>
        </div>
    </div>

  </div>

</div>
";
        
        $__internal_6cca82bb86d485d3f8dc547729fd82755928b110b335cad6dd6b631ef0644049->leave($__internal_6cca82bb86d485d3f8dc547729fd82755928b110b335cad6dd6b631ef0644049_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d69942f09bba610ef9f73991f903f84f7bda0217339deae1a0b2ac12f58fdc7 = $this->env->getExtension("native_profiler");
        $__internal_0d69942f09bba610ef9f73991f903f84f7bda0217339deae1a0b2ac12f58fdc7->enter($__internal_0d69942f09bba610ef9f73991f903f84f7bda0217339deae1a0b2ac12f58fdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_0d69942f09bba610ef9f73991f903f84f7bda0217339deae1a0b2ac12f58fdc7->leave($__internal_0d69942f09bba610ef9f73991f903f84f7bda0217339deae1a0b2ac12f58fdc7_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:galeria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 118,  328 => 117,  312 => 107,  302 => 104,  293 => 97,  281 => 91,  274 => 88,  272 => 87,  269 => 86,  267 => 85,  262 => 83,  256 => 80,  250 => 77,  244 => 73,  235 => 69,  229 => 68,  224 => 67,  222 => 66,  215 => 62,  211 => 60,  208 => 59,  204 => 58,  199 => 55,  193 => 52,  189 => 51,  185 => 50,  181 => 49,  177 => 48,  173 => 47,  169 => 45,  167 => 44,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  141 => 36,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  105 => 24,  101 => 23,  97 => 22,  88 => 18,  84 => 17,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Catalogo{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/*   <div class="box span12">*/
/*     <div class="box-header well">*/
/*       <h2><i class="icon-th-list"></i>Catalogo</h2>*/
/*       <div class="box-icon">*/
/*           <a href="{{ path('catalogo_datos', {"id": id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*       </div>*/
/*     </div>*/
/*     <div class="box-content">*/
/*       {{ form_start(form, { attr: {novalidate: 'novalidate'} }) }}*/
/*                           <form action="{{ path('catalogo_galeria', {"id": id}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/* */
/*                             <table class="table table-bordered table-striped">*/
/*                             <tr>*/
/*                               <th>Catálogo</th><th colspan="2">{{ catalogo.nombre }}</th>*/
/*                               <th>Programa</th><th colspan="2">{{ catalogo.programa.nombre }}</th>*/
/*                               <th><div class="box-icon">{{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}</</th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Nombre', 'p.nombre') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Categoria', 'c.nombre') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Referencia', 'p.referencia') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Marca', 'p.marca') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'SKU', 'p.codInc') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Estado', 'pc.activo') }}</th>*/
/*                               <th>{{ knp_pagination_sortable(productos, 'Valor', 'pc.precio') }}</th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                               <th>{{ form_widget(form.nombre, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.categoria, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.referencia, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.marca, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.codInc, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.estado, { 'attr': { 'style' : 'width:80px' }} ) }}</th>*/
/*                               <th><input type="text" style="width:150px" maxlength="255" name="producto[precio]" id="producto_precio"></th>*/
/*                             </tr>*/
/*                             {% if not is_granted('ROLE_CLI') %}*/
/*                             <tr>*/
/*                               <th>Tipo de Vista</th>*/
/*                               <th><a href="{{ path('catalogo_galeria', {"id": id, "vista": 1}) }}" class="btn btn-primary">Participante</a></th>*/
/*                               <th><a href="{{ path('catalogo_galeria', {"id": id, "vista": 2}) }}" class="btn btn-primary">Cliente</a></th>*/
/*                               <th><a href="{{ path('catalogo_galeria', {"id": id, "vista": 3}) }}" class="btn btn-primary">D. Comercial</a></th>*/
/*                               <th><a href="{{ path('catalogo_galeria', {"id": id, "vista": 4}) }}" class="btn btn-primary">Ejecutivo</a></th>*/
/*                               <th><a href="{{ path('catalogo_galeria', {"id": id, "vista": 5}) }}" class="btn btn-primary">Operaciones</a></th>*/
/*                               <th><a href="{{ path('catalogo_galeria', {"id": id, "vista": 0}) }}" class="btn btn-primary">Todos</a></th>*/
/*                              </tr>*/
/*                              {% endif %}*/
/*                           </table>*/
/*                         </form>*/
/*       <br>*/
/*         {% for producto in productos %}*/
/*         {% set i=0 %}*/
/*           <div class="box span" style="height: 330px; width:230px">*/
/*             <div class="box-header well" data-original-title="">*/
/*               <h2>{{ producto.producto.codInc }}</h2>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                   <ul class="thumbnails gallery">*/
/*                     {% if(producto.producto.imagenproducto) %}*/
/*                     <li id="imagen-{{producto.producto.imagenproducto[0].id}}" class="thumbnail" style="widht: 100px">*/
/*                       <a class="cboxElement" href="../../../../{{ producto.producto.imagenproducto[0].path | slice (0)}}" style="background:url(../../../../{{(producto.producto.imagenproducto[0].path| slice (0))[:-4]}}_min.jpg)">*/
/*                         <img alt="{{ producto.producto.codInc }}" src="../../../{{(producto.producto.imagenproducto[0].path| slice (0))[:-4]}}_min.jpg" style="display: block;">*/
/*                       </a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                   </ul>*/
/*               <table class="table">*/
/*                 <tbody>*/
/*                   <tr>*/
/*                     <td>{{ producto.producto.nombre }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>REF: {{ producto.producto.referencia }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>Puntos: {{ producto.puntos }}</td>*/
/*                   </tr>*/
/*                   {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') or is_granted('ROLE_EJEC') or is_granted('ROLE_COM') or (is_granted('ROLE_CLI') and precioVenta==1) %}*/
/*                    <tr>*/
/*                      {% set valorventa =  producto.precio/(1-(producto.incremento/100)) + producto.logistica %}*/
/*                     <td>Precio de Venta: $ {{ (valorventa |round(2, 'ceil'))|number_format(2, ',', '.') }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                  */
/*                 </tbody>*/
/*               </table>     */
/*               */
/*             </div>*/
/*           </div>       */
/*         {% endfor %}  */
/*         */
/* */
/*     </div>*/
/* */
/*    <div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ productos.getItemNumberPerPage*(productos.getCurrentPageNumber-1)+1  }} a {{ productos.getItemNumberPerPage*productos.getCurrentPageNumber }} de {{ productos.getTotalItemCount }}   Productos*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(productos) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
