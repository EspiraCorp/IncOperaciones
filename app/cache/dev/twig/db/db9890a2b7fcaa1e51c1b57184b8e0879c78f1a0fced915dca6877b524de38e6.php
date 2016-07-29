<?php

/* IncentivesOperacionesBundle:Calificacion:datos.html.twig */
class __TwigTemplate_44bccce56ffb94fa43fd57df9ad8dbee99c9d762f00a2748d47e096f7e0d322a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Calificacion:datos.html.twig", 2);
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
        $__internal_57dcf54466547a1d9be94f33542945bb5bd35f594ec027e411e5e5fb97eee0ff = $this->env->getExtension("native_profiler");
        $__internal_57dcf54466547a1d9be94f33542945bb5bd35f594ec027e411e5e5fb97eee0ff->enter($__internal_57dcf54466547a1d9be94f33542945bb5bd35f594ec027e411e5e5fb97eee0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Calificacion:datos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57dcf54466547a1d9be94f33542945bb5bd35f594ec027e411e5e5fb97eee0ff->leave($__internal_57dcf54466547a1d9be94f33542945bb5bd35f594ec027e411e5e5fb97eee0ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3938c8534bfc9d50af9ec468c445cdcba22b923c1f4c784f390b55769fac177e = $this->env->getExtension("native_profiler");
        $__internal_3938c8534bfc9d50af9ec468c445cdcba22b923c1f4c784f390b55769fac177e->enter($__internal_3938c8534bfc9d50af9ec468c445cdcba22b923c1f4c784f390b55769fac177e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calificacion Proveedor";
        
        $__internal_3938c8534bfc9d50af9ec468c445cdcba22b923c1f4c784f390b55769fac177e->leave($__internal_3938c8534bfc9d50af9ec468c445cdcba22b923c1f4c784f390b55769fac177e_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_309250033354f10017725903cf6ac5e9a186263d1bc97a4cf9a0cd7899e79d9e = $this->env->getExtension("native_profiler");
        $__internal_309250033354f10017725903cf6ac5e9a186263d1bc97a4cf9a0cd7899e79d9e->enter($__internal_309250033354f10017725903cf6ac5e9a186263d1bc97a4cf9a0cd7899e79d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Calificacion Proveedor</h2>
                        ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 10
            echo "                            <a class=\"btn btn-mini btn-success\" style=\"margin-left: 20px\" href=\"";
            echo $this->env->getExtension('routing')->getPath("proveedores_cargaplan");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">
                                <i class=\" icon-white\"></i>
                                Cargar Plan de Acción
                            </a>
                        ";
        } else {
            // line 15
            echo "                        <div class=\"box-icon\">
                            <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("calificaciones");
            echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                        ";
        }
        // line 19
        echo "                    </div>
<div class=\"box-content\">
    <fieldset>
    <table class=\"table table-bordered table-striped\">
        <tbody>
            <tr><th colspan=\"6\">INFORMACIÓN GENERAL DEL PROVEEDOR</th></tr>
            <tr><td>Razon Social Proveedor</td><td colspan=\"5\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Direccion</td><td colspan=\"5\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "direccion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Telefono</td><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "telefono", array()), "html", null, true);
        echo "</td>
                <td>E-mail</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "correo", array()), "html", null, true);
        echo "</td>
                <td>Fax</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "fax", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Documento</td><td colspan=\"5\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "numero_documento", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Periodo</td><td colspan=\"3\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "periodo", array()), "html", null, true);
        echo "</td>
                <td>N°</td><td colspan=\"1\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "numero", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Fecha</td><td colspan=\"5\">";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
        </tbody>
    </table>
    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr><th colspan=\"7\">EVALUACIÓN DEL PROVEEDOR (BIENES Y/O SERVICIOS)</th></tr>
            <tr><td colspan=\"4\">A. ELEGIBILIDAD TÉCNICA (ETC) (corresponde al 40%)</td>
                <td>PUNTAJE</td>
                <td>RESULTADO</td>
            </tr>
        </thead>
        <tbody>
            <tr><th>1. CE =</th>
                <td colspan=\"3\">Cumplimiento en las Entregas  (oportunidad en los tiempos de respuesta, documentación y/o bienes requeridos)</td>
                <td><div class=\"ind\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "ce", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-1\">";
        // line 49
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "ce", array()) / 10), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th>2. CPI =</th>
                <td colspan=\"3\">Calidad del Producto, insumos, materiales o Servicio</td>
                <td><div class=\"ind\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cpi", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-2\">";
        // line 56
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cpi", array()) / 10), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th>3. BEP =</th>
                <td colspan=\"3\">Bienes y servicios ejecutados conforme a lo pactado (cumplimiento de criterios especificados en orden de compra de bienes y servicios)</td>
                <td><div class=\"ind\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "bep", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-3\">";
        // line 63
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "bep", array()) / 10), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th>4. PD =</th>
                <td colspan=\"3\">\"Productos con Devoluciones o defectos, servicios no conformes. El proveedor ha presentado productos/servicios no conformes\"</td>
                <td><div class=\"ind\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "pd", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-4\">";
        // line 70
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "pd", array()) / 10), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th colspan=\"5\">ETC = 15(CE+CPI+DPI+BEP+EX+PD)</th>
                <td>
                    <b><div id=\"resultado-7\">";
        // line 75
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "ce", array()) + $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cpi", array())) + $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "bep", array())) + $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "pd", array())) * 2), "html", null, true);
        echo "</div></b>
                </td>
            </tr>
        </tbody>
        <thead> 
            <tr><td colspan=\"4\">B. ELEGIBILIDAD COMERCIAL Y FINANCIERA (ECF) corresponde al 60%</td>
                <td>PUNTAJE</td>
                <td>RESULTADO</td>
            </tr>
        </thead>
        <tbody>
            <tr><th>1. AOC =</th>
                <td colspan=\"3\">Atención Oportuna al Cliente </td>
                <td><div class=\"ind\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "aoc", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-5\">";
        // line 90
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "aoc", array()) / (2 / 0.6)), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th>2. CFP =</th>
                <td colspan=\"3\">Condiciones de Pago  ≤ 60 días y ≥ 90 días</td>
                <td><div class=\"ind\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cfp", array()), "html", null, true);
        echo "</div></td>
                <td>
                    <div id=\"resultado-6\">";
        // line 97
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cfp", array()) / (2 / 0.6)), "html", null, true);
        echo "</div>
                </td>
            </tr>
            <tr><th colspan=\"5\">ECF =10 (RC+CP+AOC+AFH+SGC+CFP) =</th>
                <td>
                    <b><div id=\"resultado-8\">";
        // line 102
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "cfp", array()) + $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "aoc", array())) * 6), "html", null, true);
        echo "</div></b>
                </td>
            </tr>
            <tr><th colspan=\"5\">C. CALIFICACIÓN TOTAL  REP=(ETC+ECF) EVALUACIÓN TOTAL DEL PROVEEDOR </th>
                <td>
                    <b>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()), "html", null, true);
        echo "</b>
                </td>
            </tr>
            <tr><th colspan=\"4\">OBSERVACIONES GENERALES</th>
                <th colspan=\"2\">RANGO DE RESULTADOS</th>
            </tr>
            <tr><td rowspan=\"3\" colspan=\"4\"></td>
                <td>> 0 a 50 </td>
                <td>NO CONTINUA</td>
            </tr>
            <tr><td>> 50,1 a 70 </td>
                <td>CONTINUA CON OBSERVACIONES </td>
            </tr>
            <tr><td>> 70,1 a 100</td>
                <td>CONTINUA</td>
            </tr>

        </tbody>
    </table>
    </fieldset>
</div>

";
        // line 129
        if ($this->env->getExtension('security')->isGranted("ROLE_DIR")) {
            // line 130
            echo "<div class=\"box span11\">
        <div class=\"box-content\">
                <div style=\"padding-left: 400px\">
                    <input type=\"submit\" value=\"Autorizar\" class=\"btn btn-success\" onclick='check_value(\"";
            // line 133
            echo $this->env->getExtension('routing')->getPath("calificacion_aprobar");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "id", array()), "html", null, true);
            echo "/autorizar\")'>
                    <input type=\"submit\" value=\"Rechazar\" class=\"btn btn-danger\" onclick='check_value(\"";
            // line 134
            echo $this->env->getExtension('routing')->getPath("calificacion_aprobar");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "id", array()), "html", null, true);
            echo "/rechazar\")'>
                </div>
        </div>
    </div>
</div>
";
        }
        // line 140
        echo "</div>
 </div>
";
        
        $__internal_309250033354f10017725903cf6ac5e9a186263d1bc97a4cf9a0cd7899e79d9e->leave($__internal_309250033354f10017725903cf6ac5e9a186263d1bc97a4cf9a0cd7899e79d9e_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66696d834687380ec83ce9dac85ae16577b1b9df3f5a7869802d3f5f3fef27cb = $this->env->getExtension("native_profiler");
        $__internal_66696d834687380ec83ce9dac85ae16577b1b9df3f5a7869802d3f5f3fef27cb->enter($__internal_66696d834687380ec83ce9dac85ae16577b1b9df3f5a7869802d3f5f3fef27cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    function check_value(ruta)
    { 
        self.location=ruta;
    }
  </script>
";
        
        $__internal_66696d834687380ec83ce9dac85ae16577b1b9df3f5a7869802d3f5f3fef27cb->leave($__internal_66696d834687380ec83ce9dac85ae16577b1b9df3f5a7869802d3f5f3fef27cb_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Calificacion:datos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 145,  299 => 144,  290 => 140,  279 => 134,  273 => 133,  268 => 130,  266 => 129,  241 => 107,  233 => 102,  225 => 97,  220 => 95,  212 => 90,  207 => 88,  191 => 75,  183 => 70,  178 => 68,  170 => 63,  165 => 61,  157 => 56,  152 => 54,  144 => 49,  139 => 47,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  82 => 19,  76 => 16,  73 => 15,  62 => 10,  60 => 9,  54 => 5,  48 => 4,  36 => 3,  11 => 2,);
    }
}
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Calificacion Proveedor{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Calificacion Proveedor</h2>*/
/*                         {% if is_granted('ROLE_PROV') %}*/
/*                             <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ path('proveedores_cargaplan') }}/{{ datos[0].id }}">*/
/*                                 <i class=" icon-white"></i>*/
/*                                 Cargar Plan de Acción*/
/*                             </a>*/
/*                         {% else %}*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('calificaciones') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/* <div class="box-content">*/
/*     <fieldset>*/
/*     <table class="table table-bordered table-striped">*/
/*         <tbody>*/
/*             <tr><th colspan="6">INFORMACIÓN GENERAL DEL PROVEEDOR</th></tr>*/
/*             <tr><td>Razon Social Proveedor</td><td colspan="5">{{ datos[0].proveedor.nombre }}</td></tr>*/
/*             <tr><td>Direccion</td><td colspan="5">{{ datos[0].proveedor.direccion }}</td></tr>*/
/*             <tr><td>Telefono</td><td>{{ datos[0].proveedor.telefono }}</td>*/
/*                 <td>E-mail</td><td>{{ datos[0].proveedor.correo }}</td>*/
/*                 <td>Fax</td><td>{{ datos[0].proveedor.fax }}</td></tr>*/
/*             <tr><td>Documento</td><td colspan="5">{{ datos[0].proveedor.numero_documento }}</td></tr>*/
/*             <tr><td>Periodo</td><td colspan="3">{{ datos[0].periodo }}</td>*/
/*                 <td>N°</td><td colspan="1">{{ datos[0].numero }}</td></tr>*/
/*             <tr><td>Fecha</td><td colspan="5">{{ datos[0].fecha | date("Y-m-d") }}</td></tr>*/
/*         </tbody>*/
/*     </table>*/
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr><th colspan="7">EVALUACIÓN DEL PROVEEDOR (BIENES Y/O SERVICIOS)</th></tr>*/
/*             <tr><td colspan="4">A. ELEGIBILIDAD TÉCNICA (ETC) (corresponde al 40%)</td>*/
/*                 <td>PUNTAJE</td>*/
/*                 <td>RESULTADO</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr><th>1. CE =</th>*/
/*                 <td colspan="3">Cumplimiento en las Entregas  (oportunidad en los tiempos de respuesta, documentación y/o bienes requeridos)</td>*/
/*                 <td><div class="ind">{{ datos[0].ce }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-1">{{ (datos[0].ce)/10 }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>2. CPI =</th>*/
/*                 <td colspan="3">Calidad del Producto, insumos, materiales o Servicio</td>*/
/*                 <td><div class="ind">{{ datos[0].cpi }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-2">{{ (datos[0].cpi)/10 }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>3. BEP =</th>*/
/*                 <td colspan="3">Bienes y servicios ejecutados conforme a lo pactado (cumplimiento de criterios especificados en orden de compra de bienes y servicios)</td>*/
/*                 <td><div class="ind">{{ datos[0].bep }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-3">{{ (datos[0].bep)/10 }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>4. PD =</th>*/
/*                 <td colspan="3">"Productos con Devoluciones o defectos, servicios no conformes. El proveedor ha presentado productos/servicios no conformes"</td>*/
/*                 <td><div class="ind">{{ datos[0].pd }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-4">{{ (datos[0].pd)/10 }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">ETC = 15(CE+CPI+DPI+BEP+EX+PD)</th>*/
/*                 <td>*/
/*                     <b><div id="resultado-7">{{ (datos[0].ce + datos[0].cpi + datos[0].bep + datos[0].pd)*2  }}</div></b>*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*         <thead> */
/*             <tr><td colspan="4">B. ELEGIBILIDAD COMERCIAL Y FINANCIERA (ECF) corresponde al 60%</td>*/
/*                 <td>PUNTAJE</td>*/
/*                 <td>RESULTADO</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr><th>1. AOC =</th>*/
/*                 <td colspan="3">Atención Oportuna al Cliente </td>*/
/*                 <td><div class="ind">{{ datos[0].aoc }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-5">{{ datos[0].aoc/(2/0.6) }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th>2. CFP =</th>*/
/*                 <td colspan="3">Condiciones de Pago  ≤ 60 días y ≥ 90 días</td>*/
/*                 <td><div class="ind">{{ datos[0].cfp }}</div></td>*/
/*                 <td>*/
/*                     <div id="resultado-6">{{ datos[0].cfp/(2/0.6) }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">ECF =10 (RC+CP+AOC+AFH+SGC+CFP) =</th>*/
/*                 <td>*/
/*                     <b><div id="resultado-8">{{ (datos[0].cfp + datos[0].aoc)*6  }}</div></b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="5">C. CALIFICACIÓN TOTAL  REP=(ETC+ECF) EVALUACIÓN TOTAL DEL PROVEEDOR </th>*/
/*                 <td>*/
/*                     <b>{{ datos[0].calificacion }}</b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr><th colspan="4">OBSERVACIONES GENERALES</th>*/
/*                 <th colspan="2">RANGO DE RESULTADOS</th>*/
/*             </tr>*/
/*             <tr><td rowspan="3" colspan="4"></td>*/
/*                 <td>> 0 a 50 </td>*/
/*                 <td>NO CONTINUA</td>*/
/*             </tr>*/
/*             <tr><td>> 50,1 a 70 </td>*/
/*                 <td>CONTINUA CON OBSERVACIONES </td>*/
/*             </tr>*/
/*             <tr><td>> 70,1 a 100</td>*/
/*                 <td>CONTINUA</td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/*     </fieldset>*/
/* </div>*/
/* */
/* {% if is_granted('ROLE_DIR') %}*/
/* <div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div style="padding-left: 400px">*/
/*                     <input type="submit" value="Autorizar" class="btn btn-success" onclick='check_value("{{ path("calificacion_aprobar")}}/{{ datos[0].id }}/autorizar")'>*/
/*                     <input type="submit" value="Rechazar" class="btn btn-danger" onclick='check_value("{{ path("calificacion_aprobar")}}/{{ datos[0].id }}/rechazar")'>*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*   <script>*/
/*     function check_value(ruta)*/
/*     { */
/*         self.location=ruta;*/
/*     }*/
/*   </script>*/
/* {% endblock %}*/
/* */
