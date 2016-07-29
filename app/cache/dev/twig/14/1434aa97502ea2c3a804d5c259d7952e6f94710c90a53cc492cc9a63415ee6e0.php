<?php

/* IncentivesCatalogoBundle:Catalogos:aprobar.html.twig */
class __TwigTemplate_12a0a8fd22dfd1fa54fa9a186791cea774c2a3edfadc1c0032ec757b1755dd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:aprobar.html.twig", 1);
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
        $__internal_b8d4f89615a566fca03752ada931985177788973e251eee3e46277e8118ca329 = $this->env->getExtension("native_profiler");
        $__internal_b8d4f89615a566fca03752ada931985177788973e251eee3e46277e8118ca329->enter($__internal_b8d4f89615a566fca03752ada931985177788973e251eee3e46277e8118ca329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:aprobar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d4f89615a566fca03752ada931985177788973e251eee3e46277e8118ca329->leave($__internal_b8d4f89615a566fca03752ada931985177788973e251eee3e46277e8118ca329_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21e3a8b08b3c24ab880391de2ad5604709aae40d782d1108ff4fe3d14b106bd1 = $this->env->getExtension("native_profiler");
        $__internal_21e3a8b08b3c24ab880391de2ad5604709aae40d782d1108ff4fe3d14b106bd1->enter($__internal_21e3a8b08b3c24ab880391de2ad5604709aae40d782d1108ff4fe3d14b106bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogo";
        
        $__internal_21e3a8b08b3c24ab880391de2ad5604709aae40d782d1108ff4fe3d14b106bd1->leave($__internal_21e3a8b08b3c24ab880391de2ad5604709aae40d782d1108ff4fe3d14b106bd1_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_80da7b4734302d9f210e758013dbdee4027e67ee7c70ddec86646e1c30385b1b = $this->env->getExtension("native_profiler");
        $__internal_80da7b4734302d9f210e758013dbdee4027e67ee7c70ddec86646e1c30385b1b->enter($__internal_80da7b4734302d9f210e758013dbdee4027e67ee7c70ddec86646e1c30385b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_80da7b4734302d9f210e758013dbdee4027e67ee7c70ddec86646e1c30385b1b->leave($__internal_80da7b4734302d9f210e758013dbdee4027e67ee7c70ddec86646e1c30385b1b_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_c49a18152843a01f8bb7f9109692672fe94977d948e42a668312e09fb99ca375 = $this->env->getExtension("native_profiler");
        $__internal_c49a18152843a01f8bb7f9109692672fe94977d948e42a668312e09fb99ca375->enter($__internal_c49a18152843a01f8bb7f9109692672fe94977d948e42a668312e09fb99ca375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Catalogo</h2>
      <a class=\"btn btn-primary\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_aprobar", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "resumido" => 1)), "html", null, true);
        echo "\">
        Resumido
       </a>
      <div class=\"box-icon\">
          <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
      </div>
\t\t</div>
\t\t<div class=\"box-content\">
      ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                          <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">

                            <table class=\"table table-bordered table-striped\">
                            <tr>
                              <th>Catálogo</th><th colspan=\"2\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "nombre", array()), "html", null, true);
        echo "</th>
                              <th>Programa</th><th colspan=\"2\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")), "programa", array()), "nombre", array()), "html", null, true);
        echo "</th>
                              <th><div class=\"box-icon\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</</th>
                            </tr>
                            <tr>
                              <th>";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Nombre", "p.nombre");
        echo "</th>
                              <th>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Categoria", "c.nombre");
        echo "</th>
                              <th>";
        // line 32
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Referencia", "p.referencia");
        echo "</th>
                              <th>";
        // line 33
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Marca", "p.marca");
        echo "</th>
                              <th>";
        // line 34
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "SKU", "p.codInc");
        echo "</th>
                              <th>";
        // line 35
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Estado", "pc.activo");
        echo "</th>
                              <th>";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Valor", "pc.precioTemporal");
        echo "</th>
                            </tr>
                            <tr>
                              <th>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referencia", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                              <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                              <th>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codInc", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                              <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("style" => "width:80px")));
        echo "</th>
                              <th><input type=\"text\" style=\"width:150px\" maxlength=\"255\" name=\"producto[precio]\" id=\"producto_precio\"></th>
                              </tr>
                          </table>
                        </form>
      <div align=\"rigth\">Todos<input id=\"checktodos\" name=\"checktodos\" type=\"checkbox\" /></div>
      <br>
      ";
        // line 51
        $context["valorventa"] = 0;
        // line 52
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 53
            echo "        ";
            $context["i"] = 0;
            // line 54
            echo "          <div class=\"box span10\">
            <div class=\"box-header well\" data-original-title=\"\">
              <h2>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"box-content\">
                  <div style=\"float: left; width: 200px;\"><ul class=\"thumbnails gallery\">
                    ";
            // line 60
            if ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array())) {
                // line 61
                echo "                    <li id=\"imagen-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"thumbnail\" style=\"widht: 100px\">
                      <a class=\"cboxElement\" href=\"../../../";
                // line 62
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), "html", null, true);
                echo "\" style=\"background:url(../../../";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), 0,  -4), "html", null, true);
                echo "_min.jpg)\">
                        <img alt=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
                echo "\" src=\"../../../";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()), 0, array(), "array"), "path", array()), 0), 0,  -4), "html", null, true);
                echo "_min.jpg\" style=\"display: block;\">
                      </a>
                    </li>
                    ";
            }
            // line 67
            echo "                  </ul>
                   <span>Aprobar <input type=\"checkbox\" id=\"producto_";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\"></span>
                  </div>
              <div style=\"float: left; width: 600px;\">
              <table class=\"table\" style=\"width: 600px !important;\">
                <tbody>
                  <tr>
                    <td>Nombre </td><td> ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                  </tr>
                  <tr>
                    <td>Referencia </td><td> ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
                  </tr>
                  <tr>
                    <td width=\"200px\">Descripción </td><td> ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "descripcion", array()), "html", null, true);
            echo "</td>
                  </tr>
                   <tr>
                    <td>Marca </td><td> ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "marca", array()), "html", null, true);
            echo "</td>
                  </tr>
                  <tr>
                    <td>Categoria </td><td> ";
            // line 86
            if ((null === $this->getAttribute($context["producto"], "categoria", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "categoria", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                  </tr>
                  ";
            // line 88
            if ((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT"))) {
                // line 89
                echo "                  <tr>
                    <td>Precio de Compra </td><td> \$ ";
                // line 90
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round($this->getAttribute($context["producto"], "precioTemporal", array()), 0, "ceil"), 0, ",", "."), "html", null, true);
                echo "</td>
                  </tr>
                  <tr>
                    <td>Incremento </td><td> ";
                // line 93
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round($this->getAttribute($context["producto"], "incrementoTemporal", array()), 0, "ceil"), 0, ",", "."), "html", null, true);
                echo " %</td>
                  </tr>
                  <tr>
                    <td>Logistica </td><td> \$ ";
                // line 96
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round($this->getAttribute($context["producto"], "logisticaTemporal", array()), 0, "ceil"), 0, ",", "."), "html", null, true);
                echo "</td>
                  </tr>
                  ";
            }
            // line 99
            echo "                  ";
            if (((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR")) || $this->env->getExtension('security')->isGranted("ROLE_ASISCOMP")) || $this->env->getExtension('security')->isGranted("ROLE_LOGIS")) || $this->env->getExtension('security')->isGranted("ROLE_CAT")) || $this->env->getExtension('security')->isGranted("ROLE_EJEC")) || $this->env->getExtension('security')->isGranted("ROLE_COM")) || $this->env->getExtension('security')->isGranted("ROLE_CLI"))) {
                // line 100
                echo "                   <tr>
                     ";
                // line 101
                $context["valorventa"] = (($this->getAttribute($context["producto"], "precioTemporal", array()) / (1 - ($this->getAttribute($context["producto"], "incrementoTemporal", array()) / 100))) + $this->getAttribute($context["producto"], "logisticaTemporal", array()));
                // line 102
                echo "                    <td>Precio de Venta Nuevo </td><td> \$ ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")), 2, "ceil"), 2, ",", "."), "html", null, true);
                echo "</td>
                  </tr>
                  <tr>
\t\t\t\t\t  ";
                // line 105
                $context["valorAnterior"] = 0;
                // line 106
                echo "\t\t\t\t\t  ";
                if ((($this->getAttribute($context["producto"], "precio", array()) != 0) && ($this->getAttribute($context["producto"], "incremento", array()) != 0))) {
                    // line 107
                    echo "\t\t\t\t\t\t";
                    $context["valorAnterior"] = (($this->getAttribute($context["producto"], "precio", array()) / (1 - ($this->getAttribute($context["producto"], "incremento", array()) / 100))) + $this->getAttribute($context["producto"], "logistica", array()));
                    // line 108
                    echo "\t\t\t\t\t  ";
                }
                echo " 
                    <td>Precio de Venta Actual </td><td> \$ ";
                // line 109
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["valorAnterior"]) ? $context["valorAnterior"] : $this->getContext($context, "valorAnterior")), 2, "ceil"), 2, ",", "."), "html", null, true);
                echo "</td>
                  </tr>
                  <tr>
                     ";
                // line 112
                $context["comparativo"] = "Se Mantiene";
                // line 113
                echo "                     ";
                if (((isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")) > (isset($context["valorAnterior"]) ? $context["valorAnterior"] : $this->getContext($context, "valorAnterior")))) {
                    // line 114
                    echo "                       ";
                    $context["comparativo"] = "Subio";
                    // line 115
                    echo "                     ";
                } elseif (((isset($context["valorventa"]) ? $context["valorventa"] : $this->getContext($context, "valorventa")) < (isset($context["valorAnterior"]) ? $context["valorAnterior"] : $this->getContext($context, "valorAnterior")))) {
                    echo "  
                       ";
                    // line 116
                    $context["comparativo"] = "Bajo";
                    // line 117
                    echo "                     ";
                }
                // line 118
                echo "                     ";
                if (($this->getAttribute($context["producto"], "precio", array()) == 0)) {
                    // line 119
                    echo "                       ";
                    $context["comparativo"] = "-";
                    // line 120
                    echo "                     ";
                }
                // line 121
                echo "                    <td>Comparativo </td><td> ";
                echo twig_escape_filter($this->env, (isset($context["comparativo"]) ? $context["comparativo"] : $this->getContext($context, "comparativo")), "html", null, true);
                echo "</td>
                  </tr>
                  ";
            }
            // line 124
            echo "                  <tr>
                    <td>Puntos </td><td> ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "puntosTemporal", array()), "html", null, true);
            echo "</td>
                  </tr>
                </tbody>
              </table>     
              </div>
            </div>
          </div>       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "\t
        

\t\t</div>

   <div class=\"box span11\">
        <div class=\"box-content\">
                <div style=\"padding-left: 400px\">
                    <input type=\"submit\" value=\"Autorizar\" class=\"btn btn-success\" onclick='check_value(\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("catalogo_estadoaprobar", array("accion" => "autorizar"));
        echo "\")'>
                    <input type=\"submit\" value=\"Rechazar\" class=\"btn btn-danger\" onclick='check_value(\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("catalogo_estadoaprobar", array("accion" => "cancelar"));
        echo "\")'>
                </div>
                <div class=\"dataTables_info\">Mostrando ";
        // line 143
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 146
        echo $this->env->getExtension('knp_pagination')->render((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "                    
                </div>
        </div>
    </div>

\t</div>

</div>
";
        
        $__internal_c49a18152843a01f8bb7f9109692672fe94977d948e42a668312e09fb99ca375->leave($__internal_c49a18152843a01f8bb7f9109692672fe94977d948e42a668312e09fb99ca375_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbb39203e7c6ba305305b9666cf0b6d4687a5a5c894966b7651a2a80b1a10118 = $this->env->getExtension("native_profiler");
        $__internal_dbb39203e7c6ba305305b9666cf0b6d4687a5a5c894966b7651a2a80b1a10118->enter($__internal_dbb39203e7c6ba305305b9666cf0b6d4687a5a5c894966b7651a2a80b1a10118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
  \$(document).ready(function(){
   
    //Checkbox
    \$(\"#checktodos\").change(function(){
      \$(':checkbox').each( function(indice, elemento) {
        if(\$(\"#checktodos\").is(\":checked\")){
          \$(this).attr(\"checked\",true);
  \t\$(this).parent().addClass(\"checked\");
        } else {
          \$(this).attr(\"checked\",false);
  \t\$(this).parent().removeClass(\"checked\");
        }
      });
    });
   
});
  
    function check_value(ruta)
    { 
      var arreglo=\"\";
      var chk=document.getElementsByName('id');
        for (var i = 0; i < chk.length; i++) {
            if(chk[i].checked){
              arreglo=arreglo+chk[i].value+\",\";
              //self.location=ruta+\"/\"+chk[i].value;
            }
        }
        
        if(arreglo.length==0){
\t\t\talert(\"Seleccione algún premio para aprobar.\");
\t\t\treturn false;
        }
        
        self.location=ruta+\"/\"+arreglo+\"/\"+";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ";
    }

      function confirmar(ruta)
      {
        if (confirm(\"Desea aprobar\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>
";
        
        $__internal_dbb39203e7c6ba305305b9666cf0b6d4687a5a5c894966b7651a2a80b1a10118->leave($__internal_dbb39203e7c6ba305305b9666cf0b6d4687a5a5c894966b7651a2a80b1a10118_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:aprobar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 192,  425 => 157,  419 => 156,  403 => 146,  393 => 143,  388 => 141,  384 => 140,  374 => 132,  360 => 125,  357 => 124,  350 => 121,  347 => 120,  344 => 119,  341 => 118,  338 => 117,  336 => 116,  331 => 115,  328 => 114,  325 => 113,  323 => 112,  317 => 109,  312 => 108,  309 => 107,  306 => 106,  304 => 105,  297 => 102,  295 => 101,  292 => 100,  289 => 99,  283 => 96,  277 => 93,  271 => 90,  268 => 89,  266 => 88,  258 => 86,  252 => 83,  246 => 80,  240 => 77,  234 => 74,  223 => 68,  220 => 67,  211 => 63,  205 => 62,  200 => 61,  198 => 60,  191 => 56,  187 => 54,  184 => 53,  179 => 52,  177 => 51,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  117 => 30,  111 => 27,  107 => 26,  103 => 25,  94 => 21,  90 => 20,  83 => 16,  76 => 12,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Catalogo</h2>*/
/*       <a class="btn btn-primary" href="{{ path('catalogo_aprobar',  {"id": id, 'resumido': 1}) }}">*/
/*         Resumido*/
/*        </a>*/
/*       <div class="box-icon">*/
/*           <a href="{{ path('catalogo_datos', {"id": id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*       </div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/*       {{ form_start(form, { attr: {novalidate: 'novalidate'} }) }}*/
/*                           <form action="{{ path('producto') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
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
/*                               <th>{{ knp_pagination_sortable(productos, 'Valor', 'pc.precioTemporal') }}</th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                               <th>{{ form_widget(form.nombre, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.categoria, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.referencia, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.marca, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.codInc, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                               <th>{{ form_widget(form.estado, { 'attr': { 'style' : 'width:80px' }} ) }}</th>*/
/*                               <th><input type="text" style="width:150px" maxlength="255" name="producto[precio]" id="producto_precio"></th>*/
/*                               </tr>*/
/*                           </table>*/
/*                         </form>*/
/*       <div align="rigth">Todos<input id="checktodos" name="checktodos" type="checkbox" /></div>*/
/*       <br>*/
/*       {% set valorventa =  0 %}*/
/*         {% for producto in productos %}*/
/*         {% set i=0 %}*/
/*           <div class="box span10">*/
/*             <div class="box-header well" data-original-title="">*/
/*               <h2>{{ producto.producto.codInc }}</h2>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                   <div style="float: left; width: 200px;"><ul class="thumbnails gallery">*/
/*                     {% if(producto.producto.imagenproducto) %}*/
/*                     <li id="imagen-{{producto.producto.imagenproducto[0].id}}" class="thumbnail" style="widht: 100px">*/
/*                       <a class="cboxElement" href="../../../{{ producto.producto.imagenproducto[0].path | slice (0)}}" style="background:url(../../../{{(producto.producto.imagenproducto[0].path| slice (0))[:-4]}}_min.jpg)">*/
/*                         <img alt="{{ producto.producto.codInc }}" src="../../../{{(producto.producto.imagenproducto[0].path| slice (0))[:-4]}}_min.jpg" style="display: block;">*/
/*                       </a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                   </ul>*/
/*                    <span>Aprobar <input type="checkbox" id="producto_{{ producto.id }}" name="id" value="{{ producto.id }}"></span>*/
/*                   </div>*/
/*               <div style="float: left; width: 600px;">*/
/*               <table class="table" style="width: 600px !important;">*/
/*                 <tbody>*/
/*                   <tr>*/
/*                     <td>Nombre </td><td> {{ producto.producto.nombre }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>Referencia </td><td> {{ producto.producto.referencia }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td width="200px">Descripción </td><td> {{ producto.producto.descripcion }}</td>*/
/*                   </tr>*/
/*                    <tr>*/
/*                     <td>Marca </td><td> {{ producto.producto.marca }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>Categoria </td><td> {% if producto.categoria is null %}{% else %}{{ producto.categoria.nombre }}{% endif %}</td>*/
/*                   </tr>*/
/*                   {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') %}*/
/*                   <tr>*/
/*                     <td>Precio de Compra </td><td> $ {{ (producto.precioTemporal |round(0, 'ceil'))|number_format(0, ',', '.') }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>Incremento </td><td> {{ (producto.incrementoTemporal |round(0, 'ceil'))|number_format(0, ',', '.') }} %</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>Logistica </td><td> $ {{ (producto.logisticaTemporal |round(0, 'ceil'))|number_format(0, ',', '.') }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                   {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') or is_granted('ROLE_ASISCOMP') or is_granted('ROLE_LOGIS') or is_granted('ROLE_CAT') or is_granted('ROLE_EJEC') or is_granted('ROLE_COM') or is_granted('ROLE_CLI') %}*/
/*                    <tr>*/
/*                      {% set valorventa =  producto.precioTemporal/(1-(producto.incrementoTemporal/100)) + producto.logisticaTemporal %}*/
/*                     <td>Precio de Venta Nuevo </td><td> $ {{ (valorventa |round(2, 'ceil'))|number_format(2, ',', '.') }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/* 					  {% set valorAnterior=0 %}*/
/* 					  {% if (producto.precio!=0 and producto.incremento!=0) %}*/
/* 						{% set valorAnterior =  producto.precio/(1-(producto.incremento/100)) + producto.logistica %}*/
/* 					  {% endif %} */
/*                     <td>Precio de Venta Actual </td><td> $ {{ (valorAnterior |round(2, 'ceil'))|number_format(2, ',', '.') }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                      {% set comparativo = "Se Mantiene"  %}*/
/*                      {% if  (valorventa > valorAnterior) %}*/
/*                        {% set comparativo = "Subio"  %}*/
/*                      {% elseif  (valorventa < valorAnterior) %}  */
/*                        {% set comparativo = "Bajo"  %}*/
/*                      {% endif  %}*/
/*                      {% if producto.precio == 0 %}*/
/*                        {% set comparativo = "-"  %}*/
/*                      {% endif  %}*/
/*                     <td>Comparativo </td><td> {{ comparativo }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                   <tr>*/
/*                     <td>Puntos </td><td> {{ producto.puntosTemporal }}</td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*               </table>     */
/*               </div>*/
/*             </div>*/
/*           </div>       */
/*         {% endfor %}	*/
/*         */
/* */
/* 		</div>*/
/* */
/*    <div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div style="padding-left: 400px">*/
/*                     <input type="submit" value="Autorizar" class="btn btn-success" onclick='check_value("{{ path("catalogo_estadoaprobar", {"accion": "autorizar"}) }}")'>*/
/*                     <input type="submit" value="Rechazar" class="btn btn-danger" onclick='check_value("{{ path("catalogo_estadoaprobar", {"accion": "cancelar"}) }}")'>*/
/*                 </div>*/
/*                 <div class="dataTables_info">Mostrando {{ productos.getItemNumberPerPage*(productos.getCurrentPageNumber-1)+1  }} a {{ productos.getItemNumberPerPage*productos.getCurrentPageNumber }} de {{ productos.getTotalItemCount }}   Productos*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(productos) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* 	</div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*   <script>*/
/*   $(document).ready(function(){*/
/*    */
/*     //Checkbox*/
/*     $("#checktodos").change(function(){*/
/*       $(':checkbox').each( function(indice, elemento) {*/
/*         if($("#checktodos").is(":checked")){*/
/*           $(this).attr("checked",true);*/
/*   	$(this).parent().addClass("checked");*/
/*         } else {*/
/*           $(this).attr("checked",false);*/
/*   	$(this).parent().removeClass("checked");*/
/*         }*/
/*       });*/
/*     });*/
/*    */
/* });*/
/*   */
/*     function check_value(ruta)*/
/*     { */
/*       var arreglo="";*/
/*       var chk=document.getElementsByName('id');*/
/*         for (var i = 0; i < chk.length; i++) {*/
/*             if(chk[i].checked){*/
/*               arreglo=arreglo+chk[i].value+",";*/
/*               //self.location=ruta+"/"+chk[i].value;*/
/*             }*/
/*         }*/
/*         */
/*         if(arreglo.length==0){*/
/* 			alert("Seleccione algún premio para aprobar.");*/
/* 			return false;*/
/*         }*/
/*         */
/*         self.location=ruta+"/"+arreglo+"/"+{{ id }};*/
/*     }*/
/* */
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea aprobar")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/* {% endblock %}*/
/* */
/* */
