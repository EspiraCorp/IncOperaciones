<?php

/* IncentivesOperacionesBundle:Proveedor:pass.html.twig */
class __TwigTemplate_07adc9fd6f016f7cc0d48e284356c417890bef6c8964b37078e1f2890415835d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "IncentivesOperacionesBundle:Proveedor:pass.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basePop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa3137b4804fb7d9eed71e59bec4802ce97f907fb13c3e638f8c15197ea7863f = $this->env->getExtension("native_profiler");
        $__internal_fa3137b4804fb7d9eed71e59bec4802ce97f907fb13c3e638f8c15197ea7863f->enter($__internal_fa3137b4804fb7d9eed71e59bec4802ce97f907fb13c3e638f8c15197ea7863f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:pass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3137b4804fb7d9eed71e59bec4802ce97f907fb13c3e638f8c15197ea7863f->leave($__internal_fa3137b4804fb7d9eed71e59bec4802ce97f907fb13c3e638f8c15197ea7863f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac370bdb06bb882b6689a8898be652e8d4529ad328e5579f6738a81a9086c5b7 = $this->env->getExtension("native_profiler");
        $__internal_ac370bdb06bb882b6689a8898be652e8d4529ad328e5579f6738a81a9086c5b7->enter($__internal_ac370bdb06bb882b6689a8898be652e8d4529ad328e5579f6738a81a9086c5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actualizacion de contraseña";
        
        $__internal_ac370bdb06bb882b6689a8898be652e8d4529ad328e5579f6738a81a9086c5b7->leave($__internal_ac370bdb06bb882b6689a8898be652e8d4529ad328e5579f6738a81a9086c5b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3113358a76bb6bf6f9849899d53ccc92f0a6ebc456ba9b9dbdd5ab2fcd2ed303 = $this->env->getExtension("native_profiler");
        $__internal_3113358a76bb6bf6f9849899d53ccc92f0a6ebc456ba9b9dbdd5ab2fcd2ed303->enter($__internal_3113358a76bb6bf6f9849899d53ccc92f0a6ebc456ba9b9dbdd5ab2fcd2ed303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('cuerpo', $context, $blocks);
        
        $__internal_3113358a76bb6bf6f9849899d53ccc92f0a6ebc456ba9b9dbdd5ab2fcd2ed303->leave($__internal_3113358a76bb6bf6f9849899d53ccc92f0a6ebc456ba9b9dbdd5ab2fcd2ed303_prof);

    }

    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_8af2b7915dfb6eb3fe03ae5ea0be0edaae34aa30ca6f2cc106108fa0d8393049 = $this->env->getExtension("native_profiler");
        $__internal_8af2b7915dfb6eb3fe03ae5ea0be0edaae34aa30ca6f2cc106108fa0d8393049->enter($__internal_8af2b7915dfb6eb3fe03ae5ea0be0edaae34aa30ca6f2cc106108fa0d8393049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Actualizacion de contraseña<div class=\"box-icon\"><a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a><a class=\"btn btn-close btn-round\" href=\"#\"><i class=\"icon-remove\"></i></a></div>
    </div>
    <div class=\"box-content\">
\t\t<form class=\"form-horizontal\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("proveedores_actualizarpassword");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t
\t\t\t<fieldset>
\t\t\t\tActualizacion de contraseña
\t\t\t\t<input type='hidden' name='id' value=";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
\t\t\t\t<input type='hidden' name='pass' value=";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["pass"]) ? $context["pass"] : $this->getContext($context, "pass")), "html", null, true);
        echo ">
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
\t\t\t    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t    <input type=\"submit\">
\t\t\t</fieldset>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_8af2b7915dfb6eb3fe03ae5ea0be0edaae34aa30ca6f2cc106108fa0d8393049->leave($__internal_8af2b7915dfb6eb3fe03ae5ea0be0edaae34aa30ca6f2cc106108fa0d8393049_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:pass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  73 => 10,  66 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::basePop.html.twig' %}*/
/* {% block title %}Actualizacion de contraseña{% endblock %}*/
/* {% block body %}*/
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Actualizacion de contraseña<div class="box-icon"><a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a><a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a></div>*/
/*     </div>*/
/*     <div class="box-content">*/
/* 		<form class="form-horizontal" action="{{ path('proveedores_actualizarpassword') }}" method="POST" {{ form_enctype(form) }}>*/
/* 			*/
/* 			<fieldset>*/
/* 				Actualizacion de contraseña*/
/* 				<input type='hidden' name='id' value={{ id }}>*/
/* 				<input type='hidden' name='pass' value={{ pass }}>*/
/* 				{{ form_errors(form) }}*/
/* 			    {{ form_row(form.password) }}*/
/* 			    {{ form_rest(form) }}*/
/* 			    <input type="submit">*/
/* 			</fieldset>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
