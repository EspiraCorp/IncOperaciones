<?php

/* IncentivesOperacionesBundle:Contacto:nuevo.html.twig */
class __TwigTemplate_e40a33522369700ec85e9b9b599935866e2a429939fe802893250ed1bf1623d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Contacto:nuevo.html.twig", 1);
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
        $__internal_3ee8fd2c4912379e6080df38ab166135d5fb13761cc2be7f8a45ea870a07f4c8 = $this->env->getExtension("native_profiler");
        $__internal_3ee8fd2c4912379e6080df38ab166135d5fb13761cc2be7f8a45ea870a07f4c8->enter($__internal_3ee8fd2c4912379e6080df38ab166135d5fb13761cc2be7f8a45ea870a07f4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Contacto:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee8fd2c4912379e6080df38ab166135d5fb13761cc2be7f8a45ea870a07f4c8->leave($__internal_3ee8fd2c4912379e6080df38ab166135d5fb13761cc2be7f8a45ea870a07f4c8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2b9ca38dbdc8953bc76d14655ca9394bb20ef1034bfbea54eefdf970bf877e6 = $this->env->getExtension("native_profiler");
        $__internal_a2b9ca38dbdc8953bc76d14655ca9394bb20ef1034bfbea54eefdf970bf877e6->enter($__internal_a2b9ca38dbdc8953bc76d14655ca9394bb20ef1034bfbea54eefdf970bf877e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Contacto";
        
        $__internal_a2b9ca38dbdc8953bc76d14655ca9394bb20ef1034bfbea54eefdf970bf877e6->leave($__internal_a2b9ca38dbdc8953bc76d14655ca9394bb20ef1034bfbea54eefdf970bf877e6_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_2de4fcc3e0af373baf79de27ec5817e5f5c0972c1013f74d8c0f6e07448461d5 = $this->env->getExtension("native_profiler");
        $__internal_2de4fcc3e0af373baf79de27ec5817e5f5c0972c1013f74d8c0f6e07448461d5->enter($__internal_2de4fcc3e0af373baf79de27ec5817e5f5c0972c1013f74d8c0f6e07448461d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Nuevo Contacto
        <div class=\"box-icon\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
        </div>
    </div>
    <div class=\"box-content\">
\t\t<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("contacto_nuevo");
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
        echo "

\t\t\t    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'row');
        echo "

\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" value=\"Enviar\"/>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_2de4fcc3e0af373baf79de27ec5817e5f5c0972c1013f74d8c0f6e07448461d5->leave($__internal_2de4fcc3e0af373baf79de27ec5817e5f5c0972c1013f74d8c0f6e07448461d5_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Contacto:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  81 => 16,  76 => 14,  72 => 13,  66 => 12,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Nuevo Contacto{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Nuevo Contacto*/
/*         <div class="box-icon">*/
/*             <a href="{{ path("proveedores_datos", {"id": id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="box-content">*/
/* 		<form action="{{ path('contacto_nuevo') }}" method="POST" {{ form_enctype(form) }}>*/
/* 			<input type='hidden' name='id' value={{ id }}>*/
/* 				{{ form_errors(form) }}*/
/* */
/* 			    {{ form_row(form.nombres) }}*/
/* */
/* 			{{ form_rest(form) }}*/
/* 			<input type="submit" value="Enviar"/>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
