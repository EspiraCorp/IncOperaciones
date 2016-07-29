<?php

/* IncentivesCatalogoBundle:Maestro:maestro.html.twig */
class __TwigTemplate_62110db059b8b7f0d4a41ad0c3068761a4545324e9b16a0804a9d3f47f57d415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:maestro.html.twig", 1);
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
        $__internal_d8035854ebc5af984d4cb1177eb13c68bbc7d59e9dc5494ae25f118034c0c869 = $this->env->getExtension("native_profiler");
        $__internal_d8035854ebc5af984d4cb1177eb13c68bbc7d59e9dc5494ae25f118034c0c869->enter($__internal_d8035854ebc5af984d4cb1177eb13c68bbc7d59e9dc5494ae25f118034c0c869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:maestro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8035854ebc5af984d4cb1177eb13c68bbc7d59e9dc5494ae25f118034c0c869->leave($__internal_d8035854ebc5af984d4cb1177eb13c68bbc7d59e9dc5494ae25f118034c0c869_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aef662d1a994210fdef8ca7d60c9e841565c238a3f786c390bd9101aa4308dfc = $this->env->getExtension("native_profiler");
        $__internal_aef662d1a994210fdef8ca7d60c9e841565c238a3f786c390bd9101aa4308dfc->enter($__internal_aef662d1a994210fdef8ca7d60c9e841565c238a3f786c390bd9101aa4308dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catálogo Maestro";
        
        $__internal_aef662d1a994210fdef8ca7d60c9e841565c238a3f786c390bd9101aa4308dfc->leave($__internal_aef662d1a994210fdef8ca7d60c9e841565c238a3f786c390bd9101aa4308dfc_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1da80db91d6666a820efc259c6d41d6890fdaa2ea8c460265781e67128e41503 = $this->env->getExtension("native_profiler");
        $__internal_1da80db91d6666a820efc259c6d41d6890fdaa2ea8c460265781e67128e41503->enter($__internal_1da80db91d6666a820efc259c6d41d6890fdaa2ea8c460265781e67128e41503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_1da80db91d6666a820efc259c6d41d6890fdaa2ea8c460265781e67128e41503->leave($__internal_1da80db91d6666a820efc259c6d41d6890fdaa2ea8c460265781e67128e41503_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6d0cafc013ff9f8ffdb5630fe135c8d3f87edc9f3907cd29e0a992b70e35305d = $this->env->getExtension("native_profiler");
        $__internal_6d0cafc013ff9f8ffdb5630fe135c8d3f87edc9f3907cd29e0a992b70e35305d->enter($__internal_6d0cafc013ff9f8ffdb5630fe135c8d3f87edc9f3907cd29e0a992b70e35305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\" style=\"width: 1500px\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Catálogo Maestro</h2>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
                   
                    <div id=\"tabla\" class=\"table table-bordered table-striped\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"productos\" class=\"display\">
                        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                          <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
                        <thead style=\"display:table-row-group;\">
                          <tr>
\t\t\t                      <th>";
        // line 22
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Id", "p.id");
        echo "</th>
                            <th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Nombre", "p.nombre");
        echo "</th>
                            <th>";
        // line 24
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Categoria", "c.nombre");
        echo "</th>
                            <th>";
        // line 25
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Referencia", "p.referencia");
        echo "</th>
                            <th>";
        // line 26
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Marca", "p.marca");
        echo "</th>
                            <th>";
        // line 27
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "EAN", "p.codEAN");
        echo "</th>
                            <th>";
        // line 28
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "SKU", "p.codInc");
        echo "</th>
                            <th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "Estado", "e.nombre");
        echo "</th>
                            <th>Catalogo</th>
                            <th>Puntos Min</th>
                            <th>Puntos Max</th>
                            <th>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</th>
                          </tr>
                          <tr>
                            <th><input type=\"text\" id=\"producto_id\" name=\"producto[id]\" style=\"width: 40px\"></th>
\t\t\t                      <th>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referencia", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codEAN", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codInc", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("style" => "width:80px")));
        echo "</th>
                            <th>
                              <select style=\"width:140px\" name=\"producto[catalogo][]\" id=\"producto_catalogo\" multiple>
                                <option selected=\"selected\" value=\"\">Seleccionar</option>
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogos"]) ? $context["catalogos"] : $this->getContext($context, "catalogos")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
            // line 48
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "nombre", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                              </select>
                            </th>
                            <th><input type=\"text\" id=\"producto_puntos_min\" name=\"producto[puntos_min]\" style=\"width: 40px\"></th>
                            <th><input type=\"text\" id=\"producto_puntos_max\" name=\"producto[puntos_max]\" style=\"width: 40px\"></th>
                            <th></th>
                          </tr>
                        </thead>
                        </table>
                        </form>
                        <div id=\"scrollable\">
                        <table id=\"productos\" >
                        <tbody>
                          ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 63
            echo "                          <tr>
                            ";
            // line 64
            $context["i"] = 0;
            // line 65
            echo "                            <td class=\"headcol\" style=\"background-color: #ffffff\">
                              <div class=\"box span\" style=\"height: 300px; width:250px\">
                                <div class=\"box-header well\" data-original-title=\"\">
                                  <h2>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
            echo "</h2>
                                  <div style=\"position: relative; left: 50px;\">";
            // line 69
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "estado", array()), "id", array()) != 1)) {
                // line 70
                echo "                                            <a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("productomaestro_estado", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Inactivo</a>
                                          ";
            } else {
                // line 72
                echo "                                            <a class=\"btn btn-success 1\" onClick=\"confirmar('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("productomaestro_estado", array("id" => $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()))), "html", null, true);
                echo "')\" href=\"#\">Activo</a>
                                          ";
            }
            // line 74
            echo "                                    </div>
                                </div>
                                <div class=\"box-content\" >
                                      <ul class=\"thumbnails gallery\">
                                        ";
            // line 78
            $context["i"] = 0;
            // line 79
            echo "                                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "imagenproducto", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 80
                echo "                                        ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 1)) {
                    echo "                  
                                          <li id=\"imagen-";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "id", array()), "html", null, true);
                    echo "\" class=\"thumbnail\" style=\"widht: 100px\">
                                              <a class=\"cboxElement\" href=\"../../../";
                    // line 82
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["imagen"], "path", array()), 0), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
                    echo "\" style=\"background:url(../../../";
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($context["imagen"], "path", array()), 0), 0,  -4), "html", null, true);
                    echo "_min.jpg)\">
                                                <img class=\"grayscale\" src=\"../../../";
                    // line 83
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_slice($this->env, $this->getAttribute($context["imagen"], "path", array()), 0), 0,  -4), "html", null, true);
                    echo "_min.jpg\" style=\"display: block;\">
                                              </a>
                                            </li>
                                          ";
                    // line 86
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 87
                    echo "                                        ";
                }
                // line 88
                echo "                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                      </ul>
                                  <table class=\"table\">
                                    <tbody>
                                      <tr>
                                        <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                      </tr>
                                      <tr>
                                        <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
            echo "</td>
                                      </tr>
                                      <tr>
                                        <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "marca", array()), "html", null, true);
            echo "</td>
                                      </tr>            
                                    </tbody>
                                  </table>     
                                  
                                </div>
                              </div>
                              </td>
                              ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["catalogos"]) ? $context["catalogos"] : $this->getContext($context, "catalogos")));
            foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
                // line 108
                echo "                                 <td style=\"background-color: #ffffff\">
                                  <div class=\"box span\" style=\"height: 300px; width:250px\">
                                    <div class=\"box-content\">
                                      <table class=\"table\">
                                        <tr><th colspan=\"3\" style=\"text-align: center;\">";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "nombre", array()), "html", null, true);
                echo "</th></tr>
                                        <tr><th></th><th>Actual</th><th>Nuevo</th></tr>
                                        ";
                // line 114
                $context["pe"] = 0;
                // line 115
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "productocatalogo", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["productocatalogo"]) {
                    // line 116
                    echo "                                          ";
                    $context["pc"] = 0;
                    // line 117
                    echo "                                          ";
                    if (($this->getAttribute($this->getAttribute($context["productocatalogo"], "catalogos", array()), "id", array()) == $this->getAttribute($context["catalogo"], "id", array()))) {
                        // line 118
                        echo "                                            ";
                        $context["pc"] = 1;
                        // line 119
                        echo "                                              ";
                        if (((isset($context["pc"]) ? $context["pc"] : $this->getContext($context, "pc")) == 1)) {
                            // line 120
                            echo "                                                <tr>
                                                    <td>Valor</td>
                                                    <td>";
                            // line 122
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "precio", array()), "html", null, true);
                            echo "</td>
                                                    <td>";
                            // line 123
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "precioTemporal", array()), "html", null, true);
                            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Incremento</td>
                                                    <td>";
                            // line 127
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "incremento", array()), "html", null, true);
                            echo "</td>
                                                    <td>";
                            // line 128
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "incrementoTemporal", array()), "html", null, true);
                            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Logistica</td>
                                                    <td>";
                            // line 132
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "logistica", array()), "html", null, true);
                            echo "</td>
                                                    <td>";
                            // line 133
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "logisticaTemporal", array()), "html", null, true);
                            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Puntos</td>
                                                    <td>";
                            // line 137
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "puntos", array()), "html", null, true);
                            echo "</td>
                                                    <td>";
                            // line 138
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "puntosTemporal", array()), "html", null, true);
                            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Categoria</td>
                                                    <td colspan=\"2\">";
                            // line 142
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productocatalogo"], "categoria", array()), "nombre", array()), "html", null, true);
                            echo "</td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                      ";
                            // line 146
                            if (($this->getAttribute($context["productocatalogo"], "activo", array()) == 1)) {
                                // line 147
                                echo "                                                        <a class=\"btn btn-success 1\" href=\"#\" ";
                                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DIR"))) {
                                    // line 148
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"confirmar('";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("productocatalogo_estadopremio", array("id" => $this->getAttribute($context["productocatalogo"], "id", array()))), "html", null, true);
                                    echo "')\"";
                                }
                                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tActivo</a>
                                                      ";
                            } else {
                                // line 151
                                echo "                                                        <a class=\"btn btn-danger 1\" href=\"#\" onclick=\"confirmar('";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("productocatalogo_estadopremio", array("id" => $this->getAttribute($context["productocatalogo"], "id", array()))), "html", null, true);
                                echo "')\">Inactivo</a>
                                                      ";
                            }
                            // line 153
                            echo "                                                  </td>
                                                  <td colspan=\"2\">
                                                      <div class=\"editar\" href=\"";
                            // line 155
                            echo $this->env->getExtension('routing')->getPath("productocatalogo_editarpremio");
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["productocatalogo"], "id", array()), "html", null, true);
                            echo "\"><a class=\"btn btn-primary\">Editar</a></div>
                                                  </td> 
                                                </tr>
                                              </tr>
                                                ";
                            // line 159
                            $context["pe"] = 1;
                            // line 160
                            echo "                                              ";
                        }
                        // line 161
                        echo "                                            ";
                    }
                    // line 162
                    echo "                                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productocatalogo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                                          ";
                if (((isset($context["pe"]) ? $context["pe"] : $this->getContext($context, "pe")) == 0)) {
                    // line 164
                    echo "                                               <tr>
                                                <td colspan=\"3\"  style=\"text-align: center;\">
                                                    <div class=\"agregar\"  href=\"";
                    // line 166
                    echo $this->env->getExtension('routing')->getPath("productocatalogo_nuevopremio");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "id", array()), "html", null, true);
                    echo "\"><a class=\"btn btn-info\">Agregar</a></div>
                                                </td> 
                                              </tr>
                                          ";
                }
                // line 170
                echo "                                      </table>
                                    </div>
                                  </div>
                                </td>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                              </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "  
                        </tbody>
                      </table>
                    </div>
                </div>   
            </div>
\t\t</div>
\t\t
\t\t<div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 186
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")), "getTotalItemCount", array()), "html", null, true);
        echo "   Productos
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 189
        echo $this->env->getExtension('knp_pagination')->render((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "                    
                </div>
        </div>
    </div>
\t</div>
</div>
";
        
        $__internal_6d0cafc013ff9f8ffdb5630fe135c8d3f87edc9f3907cd29e0a992b70e35305d->leave($__internal_6d0cafc013ff9f8ffdb5630fe135c8d3f87edc9f3907cd29e0a992b70e35305d_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d28d402ea12f8f5073d960b4880e48e24eac2e3a70c1aee12e21a2c9ec0b946 = $this->env->getExtension("native_profiler");
        $__internal_9d28d402ea12f8f5073d960b4880e48e24eac2e3a70c1aee12e21a2c9ec0b946->enter($__internal_9d28d402ea12f8f5073d960b4880e48e24eac2e3a70c1aee12e21a2c9ec0b946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "
<style type = \"text/css\" >
        #scrollable{ 
            width: 1100px; 
            overflow-x:scroll;  
            margin-left:22em; 
            overflow-y:visible;
            padding-bottom:1px;
        }
        .headcol {
            position:absolute; 
            width:5em; 
            left:0;
            top:auto;
            border-right: 0px none black; 
            border-top-width:3px; /*only relevant for first row*/
            margin-top:-3px; /*compensate for top border*/
            margin-left:18em; 
        }
</style>

";
        // line 219
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\">
  
    function confirmar(ruta)
    {
      if (confirm(\"Desea cambiar el estado del producto\")==true){
        self.location=ruta;
      }else{
        alert(\"OK\");
      }
    }

    \$(\".agregar\").colorbox({href: this.href});
    \$(\".editar\").colorbox({href: this.href});
</script>

";
        
        $__internal_9d28d402ea12f8f5073d960b4880e48e24eac2e3a70c1aee12e21a2c9ec0b946->leave($__internal_9d28d402ea12f8f5073d960b4880e48e24eac2e3a70c1aee12e21a2c9ec0b946_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:maestro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 219,  517 => 198,  511 => 197,  497 => 189,  487 => 186,  475 => 176,  468 => 175,  458 => 170,  447 => 166,  443 => 164,  440 => 163,  434 => 162,  431 => 161,  428 => 160,  426 => 159,  417 => 155,  413 => 153,  407 => 151,  398 => 148,  395 => 147,  393 => 146,  386 => 142,  379 => 138,  375 => 137,  368 => 133,  364 => 132,  357 => 128,  353 => 127,  346 => 123,  342 => 122,  338 => 120,  335 => 119,  332 => 118,  329 => 117,  326 => 116,  321 => 115,  319 => 114,  314 => 112,  308 => 108,  304 => 107,  293 => 99,  287 => 96,  281 => 93,  269 => 88,  266 => 87,  264 => 86,  258 => 83,  250 => 82,  246 => 81,  241 => 80,  236 => 79,  234 => 78,  228 => 74,  222 => 72,  216 => 70,  214 => 69,  210 => 68,  205 => 65,  203 => 64,  200 => 63,  196 => 62,  182 => 50,  171 => 48,  167 => 47,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  129 => 33,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  86 => 19,  82 => 18,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Catálogo Maestro{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable" style="width: 1500px">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Catálogo Maestro</h2>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*                    */
/*                     <div id="tabla" class="table table-bordered table-striped" cellspacing="0" width="100%">*/
/*                       <table id="productos" class="display">*/
/*                         {{ form_start(form, { attr: {novalidate: 'novalidate'} }) }}*/
/*                           <form action="{{ path('producto') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/* 			                      <th>{{ knp_pagination_sortable(productos, 'Id', 'p.id') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Nombre', 'p.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Categoria', 'c.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Referencia', 'p.referencia') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Marca', 'p.marca') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'EAN', 'p.codEAN') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'SKU', 'p.codInc') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(productos, 'Estado', 'e.nombre') }}</th>*/
/*                             <th>Catalogo</th>*/
/*                             <th>Puntos Min</th>*/
/*                             <th>Puntos Max</th>*/
/*                             <th>{{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}</th>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th><input type="text" id="producto_id" name="producto[id]" style="width: 40px"></th>*/
/* 			                      <th>{{ form_widget(form.nombre, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.categoria, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.referencia, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.marca, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.codEAN, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.codInc, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.estado, { 'attr': { 'style' : 'width:80px' }} ) }}</th>*/
/*                             <th>*/
/*                               <select style="width:140px" name="producto[catalogo][]" id="producto_catalogo" multiple>*/
/*                                 <option selected="selected" value="">Seleccionar</option>*/
/*                                 {% for catalogo in catalogos %}*/
/*                                     <option value="{{ catalogo.id }}">{{ catalogo.nombre }}</option>*/
/*                                 {% endfor %}*/
/*                               </select>*/
/*                             </th>*/
/*                             <th><input type="text" id="producto_puntos_min" name="producto[puntos_min]" style="width: 40px"></th>*/
/*                             <th><input type="text" id="producto_puntos_max" name="producto[puntos_max]" style="width: 40px"></th>*/
/*                             <th></th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         </table>*/
/*                         </form>*/
/*                         <div id="scrollable">*/
/*                         <table id="productos" >*/
/*                         <tbody>*/
/*                           {% for producto in productos %}*/
/*                           <tr>*/
/*                             {% set i=0 %}*/
/*                             <td class="headcol" style="background-color: #ffffff">*/
/*                               <div class="box span" style="height: 300px; width:250px">*/
/*                                 <div class="box-header well" data-original-title="">*/
/*                                   <h2>{{ producto.producto.codInc }}</h2>*/
/*                                   <div style="position: relative; left: 50px;">{% if (producto.producto.estado.id!=1) %}*/
/*                                             <a class="btn btn-danger 1" onClick="confirmar('{{ url("productomaestro_estado", {"id": producto.producto.id}) }}')" href="#">Inactivo</a>*/
/*                                           {% else %}*/
/*                                             <a class="btn btn-success 1" onClick="confirmar('{{ url("productomaestro_estado", {"id": producto.producto.id}) }}')" href="#">Activo</a>*/
/*                                           {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="box-content" >*/
/*                                       <ul class="thumbnails gallery">*/
/*                                         {% set i=0 %}*/
/*                                        {% for imagen in producto.producto.imagenproducto %}*/
/*                                         {% if i<1 %}                  */
/*                                           <li id="imagen-{{imagen.id}}" class="thumbnail" style="widht: 100px">*/
/*                                               <a class="cboxElement" href="../../../{{ imagen.path | slice (0)}}" title="{{ producto.producto.codInc }}" style="background:url(../../../{{(imagen.path| slice (0))[:-4]}}_min.jpg)">*/
/*                                                 <img class="grayscale" src="../../../{{ imagen.path | slice(0)[:-4]}}_min.jpg" style="display: block;">*/
/*                                               </a>*/
/*                                             </li>*/
/*                                           {% set i=i+1 %}*/
/*                                         {% endif %}*/
/*                                       {% endfor %} */
/*                                       </ul>*/
/*                                   <table class="table">*/
/*                                     <tbody>*/
/*                                       <tr>*/
/*                                         <td>{{ producto.producto.nombre }}</td>*/
/*                                       </tr>*/
/*                                       <tr>*/
/*                                         <td>{{ producto.producto.referencia }}</td>*/
/*                                       </tr>*/
/*                                       <tr>*/
/*                                         <td>{{ producto.producto.marca }}</td>*/
/*                                       </tr>            */
/*                                     </tbody>*/
/*                                   </table>     */
/*                                   */
/*                                 </div>*/
/*                               </div>*/
/*                               </td>*/
/*                               {% for catalogo in catalogos %}*/
/*                                  <td style="background-color: #ffffff">*/
/*                                   <div class="box span" style="height: 300px; width:250px">*/
/*                                     <div class="box-content">*/
/*                                       <table class="table">*/
/*                                         <tr><th colspan="3" style="text-align: center;">{{ catalogo.nombre }}</th></tr>*/
/*                                         <tr><th></th><th>Actual</th><th>Nuevo</th></tr>*/
/*                                         {% set pe=0 %}*/
/*                                         {% for productocatalogo in producto.producto.productocatalogo %}*/
/*                                           {% set pc=0 %}*/
/*                                           {% if(productocatalogo.catalogos.id == catalogo.id) %}*/
/*                                             {% set pc = 1 %}*/
/*                                               {% if pc == 1 %}*/
/*                                                 <tr>*/
/*                                                     <td>Valor</td>*/
/*                                                     <td>{{ productocatalogo.precio }}</td>*/
/*                                                     <td>{{ productocatalogo.precioTemporal }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>Incremento</td>*/
/*                                                     <td>{{ productocatalogo.incremento }}</td>*/
/*                                                     <td>{{ productocatalogo.incrementoTemporal }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>Logistica</td>*/
/*                                                     <td>{{ productocatalogo.logistica }}</td>*/
/*                                                     <td>{{ productocatalogo.logisticaTemporal }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>Puntos</td>*/
/*                                                     <td>{{ productocatalogo.puntos }}</td>*/
/*                                                     <td>{{ productocatalogo.puntosTemporal }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>Categoria</td>*/
/*                                                     <td colspan="2">{{ productocatalogo.categoria.nombre }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                   <td>*/
/*                                                       {% if(productocatalogo.activo == 1) %}*/
/*                                                         <a class="btn btn-success 1" href="#" {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_DIR') %}*/
/* 																								onclick="confirmar('{{ url("productocatalogo_estadopremio", {"id": productocatalogo.id}) }}')"{% endif %}>*/
/* 																								Activo</a>*/
/*                                                       {% else %}*/
/*                                                         <a class="btn btn-danger 1" href="#" onclick="confirmar('{{ url("productocatalogo_estadopremio", {"id": productocatalogo.id}) }}')">Inactivo</a>*/
/*                                                       {% endif %}*/
/*                                                   </td>*/
/*                                                   <td colspan="2">*/
/*                                                       <div class="editar" href="{{ path('productocatalogo_editarpremio') }}/{{ productocatalogo.id }}"><a class="btn btn-primary">Editar</a></div>*/
/*                                                   </td> */
/*                                                 </tr>*/
/*                                               </tr>*/
/*                                                 {% set pe = 1 %}*/
/*                                               {% endif %}*/
/*                                             {% endif %}*/
/*                                           {% endfor %}*/
/*                                           {% if pe==0 %}*/
/*                                                <tr>*/
/*                                                 <td colspan="3"  style="text-align: center;">*/
/*                                                     <div class="agregar"  href="{{ path('productocatalogo_nuevopremio') }}/{{ producto.producto.id }}/{{ catalogo.id }}"><a class="btn btn-info">Agregar</a></div>*/
/*                                                 </td> */
/*                                               </tr>*/
/*                                           {% endif %}*/
/*                                       </table>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                 </td>*/
/*                               {% endfor %}*/
/*                               </tr>*/
/*                             {% endfor %}  */
/*                         </tbody>*/
/*                       </table>*/
/*                     </div>*/
/*                 </div>   */
/*             </div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ productos.getItemNumberPerPage*(productos.getCurrentPageNumber-1)+1  }} a {{ productos.getItemNumberPerPage*productos.getCurrentPageNumber }} de {{ productos.getTotalItemCount }}   Productos*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(productos) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* <style type = "text/css" >*/
/*         #scrollable{ */
/*             width: 1100px; */
/*             overflow-x:scroll;  */
/*             margin-left:22em; */
/*             overflow-y:visible;*/
/*             padding-bottom:1px;*/
/*         }*/
/*         .headcol {*/
/*             position:absolute; */
/*             width:5em; */
/*             left:0;*/
/*             top:auto;*/
/*             border-right: 0px none black; */
/*             border-top-width:3px; /*only relevant for first row*//* */
/*             margin-top:-3px; /*compensate for top border*//* */
/*             margin-left:18em; */
/*         }*/
/* </style>*/
/* */
/* {{ parent() }}*/
/* */
/*   <script type="text/javascript">*/
/*   */
/*     function confirmar(ruta)*/
/*     {*/
/*       if (confirm("Desea cambiar el estado del producto")==true){*/
/*         self.location=ruta;*/
/*       }else{*/
/*         alert("OK");*/
/*       }*/
/*     }*/
/* */
/*     $(".agregar").colorbox({href: this.href});*/
/*     $(".editar").colorbox({href: this.href});*/
/* </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
