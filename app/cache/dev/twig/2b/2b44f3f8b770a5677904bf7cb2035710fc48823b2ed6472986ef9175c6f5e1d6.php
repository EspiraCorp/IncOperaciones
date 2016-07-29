<?php

/* IncentivesCatalogoBundle:Producto:formatoporproveedor.html.twig */
class __TwigTemplate_0cd13c97083bf3902a81a7b65730cc19f9575879103e844825a123849c427799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:formatoporproveedor.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a754cedbed849a68cd1d0997f8e1188f4e628457f08cc1363eaeb353beb2eec = $this->env->getExtension("native_profiler");
        $__internal_5a754cedbed849a68cd1d0997f8e1188f4e628457f08cc1363eaeb353beb2eec->enter($__internal_5a754cedbed849a68cd1d0997f8e1188f4e628457f08cc1363eaeb353beb2eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:formatoporproveedor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a754cedbed849a68cd1d0997f8e1188f4e628457f08cc1363eaeb353beb2eec->leave($__internal_5a754cedbed849a68cd1d0997f8e1188f4e628457f08cc1363eaeb353beb2eec_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a39a5512b28432e3c915b5ee06df687541b0afba950d72235836ee07df7e6dab = $this->env->getExtension("native_profiler");
        $__internal_a39a5512b28432e3c915b5ee06df687541b0afba950d72235836ee07df7e6dab->enter($__internal_a39a5512b28432e3c915b5ee06df687541b0afba950d72235836ee07df7e6dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Formato por proveedor";
        
        $__internal_a39a5512b28432e3c915b5ee06df687541b0afba950d72235836ee07df7e6dab->leave($__internal_a39a5512b28432e3c915b5ee06df687541b0afba950d72235836ee07df7e6dab_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d2864370c4e93d49d1c2f70be91a41e95837b27d256a85e6d720fb00ef6838c6 = $this->env->getExtension("native_profiler");
        $__internal_d2864370c4e93d49d1c2f70be91a41e95837b27d256a85e6d720fb00ef6838c6->enter($__internal_d2864370c4e93d49d1c2f70be91a41e95837b27d256a85e6d720fb00ef6838c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Edición Masiva</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
    <a class=\"btn btn-mini btn-success\" style=\"margin-left: 20px\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("producto_formato_proveedor");
        echo "\">
        <i class=\"icon-zoom-in icon-white\"></i>
        Formato Edición por proveedor
    </a>
<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("producto_editar_mas");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    <fieldset>
          <!--   <div class=\"controls\">
               <input name='go' type='submit' value='Formato Edición' />
            </div> -->
    </fieldset>
    

</form>
";
        // line 29
        echo "
";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
 
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "excel", array()), 'row');
        echo "
 
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" value=\"Carga\" onclick=\"return confirm('Esta seguro de actualizar la base de datos?')\"/>
";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



</div>
</div>
 </div>
";
        
        $__internal_d2864370c4e93d49d1c2f70be91a41e95837b27d256a85e6d720fb00ef6838c6->leave($__internal_d2864370c4e93d49d1c2f70be91a41e95837b27d256a85e6d720fb00ef6838c6_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:formatoporproveedor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  103 => 35,  98 => 33,  93 => 31,  89 => 30,  86 => 29,  74 => 19,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Generar Formato por proveedor{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Edición Masiva</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('producto') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/*     <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ path('producto_formato_proveedor') }}">*/
/*         <i class="icon-zoom-in icon-white"></i>*/
/*         Formato Edición por proveedor*/
/*     </a>*/
/* <form action="{{ path('producto_editar_mas') }}" method="POST" class="form-horizontal">*/
/*     <fieldset>*/
/*           <!--   <div class="controls">*/
/*                <input name='go' type='submit' value='Formato Edición' />*/
/*             </div> -->*/
/*     </fieldset>*/
/*     */
/* */
/* </form>*/
/* {#{{form(form)}}#}*/
/* */
/* {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*  */
/*     {{ form_row(form.excel) }}*/
/*  */
/*     {{ form_rest(form) }}*/
/*     <input type="submit" value="Carga" onclick="return confirm('Esta seguro de actualizar la base de datos?')"/>*/
/* {{ form_end(form) }}*/
/* */
/* */
/* */
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* */
/* {#*/
/* {% block javascripts %}*/
/* */
/*             <!-- jQuery -->*/
/*             <script src="{{ asset('js/jquery-1.7.2.min.js') }}" type="text/javascript"></script>*/
/*             <script type="text/javascript">*/
/*                 //      $('input').click(function() {*/
/* */
/*                 //     var $this = $(this),*/
/*                 //         val = $this.val();*/
/* */
/*                 //     if (confirm("are you sure?")) {*/
/*                 //         $this.closest('form').submit();*/
/*                 //     }*/
/*                 // });*/
/*             </script>*/
/* */
/* */
/* {% endblock %}*/
/* #}*/
