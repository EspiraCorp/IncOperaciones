<?php

/* IncentivesOperacionesBundle:Convocatorias:nuevoproveedor.html.twig */
class __TwigTemplate_36cb1afa433ea119a58a7ff758975c41e0d0540113c27ed1ee718051a341793c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Convocatorias:nuevoproveedor.html.twig", 1);
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
        $__internal_7756f25c7a02612d75481a72dd11826e9e7f5e0781224999078ed7df78ca72ad = $this->env->getExtension("native_profiler");
        $__internal_7756f25c7a02612d75481a72dd11826e9e7f5e0781224999078ed7df78ca72ad->enter($__internal_7756f25c7a02612d75481a72dd11826e9e7f5e0781224999078ed7df78ca72ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Convocatorias:nuevoproveedor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7756f25c7a02612d75481a72dd11826e9e7f5e0781224999078ed7df78ca72ad->leave($__internal_7756f25c7a02612d75481a72dd11826e9e7f5e0781224999078ed7df78ca72ad_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_271c0749df9f252fd2979f1fde15602a1e6df9fc2f7e7ad7c8799d7c3d2906fa = $this->env->getExtension("native_profiler");
        $__internal_271c0749df9f252fd2979f1fde15602a1e6df9fc2f7e7ad7c8799d7c3d2906fa->enter($__internal_271c0749df9f252fd2979f1fde15602a1e6df9fc2f7e7ad7c8799d7c3d2906fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agregar Proveedor";
        
        $__internal_271c0749df9f252fd2979f1fde15602a1e6df9fc2f7e7ad7c8799d7c3d2906fa->leave($__internal_271c0749df9f252fd2979f1fde15602a1e6df9fc2f7e7ad7c8799d7c3d2906fa_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_9bee500859e3aa236f4a7998b9f60316a8c6bb6cf691d70a4fab9c5b806899da = $this->env->getExtension("native_profiler");
        $__internal_9bee500859e3aa236f4a7998b9f60316a8c6bb6cf691d70a4fab9c5b806899da->enter($__internal_9bee500859e3aa236f4a7998b9f60316a8c6bb6cf691d70a4fab9c5b806899da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Agregar Proveedor
        <div class=\"box-icon\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("convocatorias_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
        </div>
    </div>
    <div class=\"box-content\">
\t\t<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("convocatorias_proveedor", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t<input type='hidden' name='id' value=";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t\t\t    

\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" value=\"Enviar\"/>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_9bee500859e3aa236f4a7998b9f60316a8c6bb6cf691d70a4fab9c5b806899da->leave($__internal_9bee500859e3aa236f4a7998b9f60316a8c6bb6cf691d70a4fab9c5b806899da_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Convocatorias:nuevoproveedor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  76 => 14,  72 => 13,  66 => 12,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Agregar Proveedor{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Agregar Proveedor*/
/*         <div class="box-icon">*/
/*             <a href="{{ path("convocatorias_datos", {"id": id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="box-content">*/
/* 		<form action="{{ path('convocatorias_proveedor', {"id": id}) }}" method="POST" {{ form_enctype(form) }}>*/
/* 			<input type='hidden' name='id' value={{ id }}>*/
/* 				{{ form_errors(form) }}			    */
/* */
/* 			{{ form_rest(form) }}*/
/* 			<input type="submit" value="Enviar"/>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
