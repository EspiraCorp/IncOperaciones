<?php

/* IncentivesOperacionesBundle:Proveedor:catalogo.html.twig */
class __TwigTemplate_3d8d5cff0f0ea28455cc39d4895d3f4710aee425405ac52356f44a92b46e6d02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:catalogo.html.twig", 1);
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
        $__internal_ec18865c12b4489263cf521c3ad0ed975aabb6655a245f68fee945cfc469819a = $this->env->getExtension("native_profiler");
        $__internal_ec18865c12b4489263cf521c3ad0ed975aabb6655a245f68fee945cfc469819a->enter($__internal_ec18865c12b4489263cf521c3ad0ed975aabb6655a245f68fee945cfc469819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:catalogo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec18865c12b4489263cf521c3ad0ed975aabb6655a245f68fee945cfc469819a->leave($__internal_ec18865c12b4489263cf521c3ad0ed975aabb6655a245f68fee945cfc469819a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3154e2ac03f7fc6e3a21845aab708cfcdf5935a2f6c90dacf4bd51ef73511cf = $this->env->getExtension("native_profiler");
        $__internal_e3154e2ac03f7fc6e3a21845aab708cfcdf5935a2f6c90dacf4bd51ef73511cf->enter($__internal_e3154e2ac03f7fc6e3a21845aab708cfcdf5935a2f6c90dacf4bd51ef73511cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Catalogo";
        
        $__internal_e3154e2ac03f7fc6e3a21845aab708cfcdf5935a2f6c90dacf4bd51ef73511cf->leave($__internal_e3154e2ac03f7fc6e3a21845aab708cfcdf5935a2f6c90dacf4bd51ef73511cf_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_5f3d5843e287b94f844563b60722493f906a5209ec7c4e4c1a7ae9ab00a3f832 = $this->env->getExtension("native_profiler");
        $__internal_5f3d5843e287b94f844563b60722493f906a5209ec7c4e4c1a7ae9ab00a3f832->enter($__internal_5f3d5843e287b94f844563b60722493f906a5209ec7c4e4c1a7ae9ab00a3f832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Nuevo Catalogo<div class=\"box-icon\"><a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a><a class=\"btn btn-close btn-round\" href=\"#\"><i class=\"icon-remove\"></i></a></div>
    </div>
    <div class=\"box-content\">
\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("proveedores_catalogo");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t<input type='hidden' name='id' value=";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
\t\t\t   
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" value=\"Enviar\"/>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_5f3d5843e287b94f844563b60722493f906a5209ec7c4e4c1a7ae9ab00a3f832->leave($__internal_5f3d5843e287b94f844563b60722493f906a5209ec7c4e4c1a7ae9ab00a3f832_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:catalogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  71 => 12,  66 => 10,  60 => 9,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Nuevo Catalogo{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Nuevo Catalogo<div class="box-icon"><a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a><a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a></div>*/
/*     </div>*/
/*     <div class="box-content">*/
/* 		<form action="{{ path('proveedores_catalogo') }}" method="POST" {{ form_enctype(form) }}>*/
/* 			<input type='hidden' name='id' value={{ id }}>*/
/* 			   */
/* 				{{ form_errors(form) }}*/
/* 				{{ form_rest(form) }}*/
/* 			<input type="submit" value="Enviar"/>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
