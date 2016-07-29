<?php

/* IncentivesOperacionesBundle:Proveedor:carga.html.twig */
class __TwigTemplate_5b6b8557fc146e4894736fd6d674ec7d8892af71669f595d55e09c2c5154c30d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:carga.html.twig", 1);
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
        $__internal_79fb822bc7cb6cc19ed3ac8db9465898f99b687b7a3f9541bb985ac8a3912848 = $this->env->getExtension("native_profiler");
        $__internal_79fb822bc7cb6cc19ed3ac8db9465898f99b687b7a3f9541bb985ac8a3912848->enter($__internal_79fb822bc7cb6cc19ed3ac8db9465898f99b687b7a3f9541bb985ac8a3912848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:carga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79fb822bc7cb6cc19ed3ac8db9465898f99b687b7a3f9541bb985ac8a3912848->leave($__internal_79fb822bc7cb6cc19ed3ac8db9465898f99b687b7a3f9541bb985ac8a3912848_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_731b3b34081a441fb17cec12cb974d422b9b7da28894b630e754c88fc0c1aa0a = $this->env->getExtension("native_profiler");
        $__internal_731b3b34081a441fb17cec12cb974d422b9b7da28894b630e754c88fc0c1aa0a->enter($__internal_731b3b34081a441fb17cec12cb974d422b9b7da28894b630e754c88fc0c1aa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carga de Documentos";
        
        $__internal_731b3b34081a441fb17cec12cb974d422b9b7da28894b630e754c88fc0c1aa0a->leave($__internal_731b3b34081a441fb17cec12cb974d422b9b7da28894b630e754c88fc0c1aa0a_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_bbc11ebce906dcedf05182ce3173a52bb15d1451d05a18f7c90095b809189630 = $this->env->getExtension("native_profiler");
        $__internal_bbc11ebce906dcedf05182ce3173a52bb15d1451d05a18f7c90095b809189630->enter($__internal_bbc11ebce906dcedf05182ce3173a52bb15d1451d05a18f7c90095b809189630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Carga de Documentos<div class=\"box-icon\"><a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a><a class=\"btn btn-close btn-round\" href=\"#\"><i class=\"icon-remove\"></i></a></div>
    </div>
    <div class=\"box-content\">
\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("proveedores_documentos_carga");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t<input type='hidden' name='id' value=";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" value=\"Enviar\"/>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_bbc11ebce906dcedf05182ce3173a52bb15d1451d05a18f7c90095b809189630->leave($__internal_bbc11ebce906dcedf05182ce3173a52bb15d1451d05a18f7c90095b809189630_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:carga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  70 => 11,  66 => 10,  60 => 9,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Carga de Documentos{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Carga de Documentos<div class="box-icon"><a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a><a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a></div>*/
/*     </div>*/
/*     <div class="box-content">*/
/* 		<form action="{{ path('proveedores_documentos_carga') }}" method="POST" {{ form_enctype(form) }}>*/
/* 			<input type='hidden' name='id' value={{ id }}>*/
/* 				{{ form_errors(form) }}*/
/* 				{{ form_rest(form) }}*/
/* 			<input type="submit" value="Enviar"/>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
