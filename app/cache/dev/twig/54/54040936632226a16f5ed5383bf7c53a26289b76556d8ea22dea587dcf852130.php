<?php

/* IncentivesCatalogoBundle:Producto:cargaImagen.html.twig */
class __TwigTemplate_f19e62de063e7b6d920098580c814734fba6b71ab9dbfccd6668344b6ff0dcde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:cargaImagen.html.twig", 1);
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
        $__internal_cae7edd429b9d45a4c4718f595f9d7cf6ddd6e3e5737ebfc416e5d46c0c4c701 = $this->env->getExtension("native_profiler");
        $__internal_cae7edd429b9d45a4c4718f595f9d7cf6ddd6e3e5737ebfc416e5d46c0c4c701->enter($__internal_cae7edd429b9d45a4c4718f595f9d7cf6ddd6e3e5737ebfc416e5d46c0c4c701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:cargaImagen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae7edd429b9d45a4c4718f595f9d7cf6ddd6e3e5737ebfc416e5d46c0c4c701->leave($__internal_cae7edd429b9d45a4c4718f595f9d7cf6ddd6e3e5737ebfc416e5d46c0c4c701_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0519d476595170a37735a941515ea37eaae872025d56884a516dc6f99005648c = $this->env->getExtension("native_profiler");
        $__internal_0519d476595170a37735a941515ea37eaae872025d56884a516dc6f99005648c->enter($__internal_0519d476595170a37735a941515ea37eaae872025d56884a516dc6f99005648c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesCatalogoBundle:Producto:nuevo";
        
        $__internal_0519d476595170a37735a941515ea37eaae872025d56884a516dc6f99005648c->leave($__internal_0519d476595170a37735a941515ea37eaae872025d56884a516dc6f99005648c_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_65c251ca975333e94e4e969a4e091cb1010492683239d337a607352d0ca340cd = $this->env->getExtension("native_profiler");
        $__internal_65c251ca975333e94e4e969a4e091cb1010492683239d337a607352d0ca340cd->enter($__internal_65c251ca975333e94e4e969a4e091cb1010492683239d337a607352d0ca340cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Nueva imagen</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("producto_agregarimagen");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    <input type='hidden' name='id' value=";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    </fieldset>

    <div class=\"row-fluid sortable ui-sortable\">

    </div>  
<div class=\"form-actions\">
\t<input type=\"submit\" name=\"Enviar\">
\t
</div>
";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_65c251ca975333e94e4e969a4e091cb1010492683239d337a607352d0ca340cd->leave($__internal_65c251ca975333e94e4e969a4e091cb1010492683239d337a607352d0ca340cd_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:cargaImagen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  88 => 22,  83 => 20,  77 => 17,  73 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}IncentivesCatalogoBundle:Producto:nuevo{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Nueva imagen</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('producto_datos', {'id': id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('producto_agregarimagen') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.path, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.path, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/* */
/*     <div class="row-fluid sortable ui-sortable">*/
/* */
/*     </div>  */
/* <div class="form-actions">*/
/* 	<input type="submit" name="Enviar">*/
/* 	*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
