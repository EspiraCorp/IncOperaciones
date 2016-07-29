<?php

/* IncentivesCatalogoBundle:Producto:editarmas.html.twig */
class __TwigTemplate_1306fc6cc20466bda2ee3c0a3f4b00fd75b0b849325cbb0cac855c4ca9ef407a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:editarmas.html.twig", 3);
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
        $__internal_dacf97bfa049b3632c6621810f5c2292ea09a1544e7f81794e2c9fc551c28524 = $this->env->getExtension("native_profiler");
        $__internal_dacf97bfa049b3632c6621810f5c2292ea09a1544e7f81794e2c9fc551c28524->enter($__internal_dacf97bfa049b3632c6621810f5c2292ea09a1544e7f81794e2c9fc551c28524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:editarmas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dacf97bfa049b3632c6621810f5c2292ea09a1544e7f81794e2c9fc551c28524->leave($__internal_dacf97bfa049b3632c6621810f5c2292ea09a1544e7f81794e2c9fc551c28524_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_60461a8c0febfef747eff85b236580987749f3da466924a237d695c1109c6edf = $this->env->getExtension("native_profiler");
        $__internal_60461a8c0febfef747eff85b236580987749f3da466924a237d695c1109c6edf->enter($__internal_60461a8c0febfef747eff85b236580987749f3da466924a237d695c1109c6edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Formato";
        
        $__internal_60461a8c0febfef747eff85b236580987749f3da466924a237d695c1109c6edf->leave($__internal_60461a8c0febfef747eff85b236580987749f3da466924a237d695c1109c6edf_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_03b08c90835e86d12184037a464e1407ab41a3b7b16d08a8530e8a02daf4c830 = $this->env->getExtension("native_profiler");
        $__internal_03b08c90835e86d12184037a464e1407ab41a3b7b16d08a8530e8a02daf4c830->enter($__internal_03b08c90835e86d12184037a464e1407ab41a3b7b16d08a8530e8a02daf4c830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
        echo $this->env->getExtension('routing')->getPath("producto_formato_edicion");
        echo "\">
        <i class=\"icon-zoom-in icon-white\"></i>
        Formato Edición
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
        
        $__internal_03b08c90835e86d12184037a464e1407ab41a3b7b16d08a8530e8a02daf4c830->leave($__internal_03b08c90835e86d12184037a464e1407ab41a3b7b16d08a8530e8a02daf4c830_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:editarmas.html.twig";
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
/* {% block title %}Generar Formato{% endblock %}*/
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
/*     <a class="btn btn-mini btn-success" style="margin-left: 20px" href="{{ path('producto_formato_edicion') }}">*/
/*         <i class="icon-zoom-in icon-white"></i>*/
/*         Formato Edición*/
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
/* */
