<?php

/* IncentivesOperacionesBundle:Contacto:pass.html.twig */
class __TwigTemplate_6dddf448f76273146741c1b90c9eada3e4893673d74b6b58def384d27af851b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Contacto:pass.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22e59e6d238cc0a1ca3ef2107ce6de30c879250328ae2ec0f34ce7a915fee2ae = $this->env->getExtension("native_profiler");
        $__internal_22e59e6d238cc0a1ca3ef2107ce6de30c879250328ae2ec0f34ce7a915fee2ae->enter($__internal_22e59e6d238cc0a1ca3ef2107ce6de30c879250328ae2ec0f34ce7a915fee2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Contacto:pass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e59e6d238cc0a1ca3ef2107ce6de30c879250328ae2ec0f34ce7a915fee2ae->leave($__internal_22e59e6d238cc0a1ca3ef2107ce6de30c879250328ae2ec0f34ce7a915fee2ae_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcc1fbc9f481b01b2ee4c00676197a87c8a84e8cf1b260a844165ab31cb913da = $this->env->getExtension("native_profiler");
        $__internal_bcc1fbc9f481b01b2ee4c00676197a87c8a84e8cf1b260a844165ab31cb913da->enter($__internal_bcc1fbc9f481b01b2ee4c00676197a87c8a84e8cf1b260a844165ab31cb913da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actualizacion de contraseña";
        
        $__internal_bcc1fbc9f481b01b2ee4c00676197a87c8a84e8cf1b260a844165ab31cb913da->leave($__internal_bcc1fbc9f481b01b2ee4c00676197a87c8a84e8cf1b260a844165ab31cb913da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06000cde65c33a766515299a836ecf71bd113a70ff63d4b812ea0ab2dda20b9b = $this->env->getExtension("native_profiler");
        $__internal_06000cde65c33a766515299a836ecf71bd113a70ff63d4b812ea0ab2dda20b9b->enter($__internal_06000cde65c33a766515299a836ecf71bd113a70ff63d4b812ea0ab2dda20b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('cuerpo', $context, $blocks);
        
        $__internal_06000cde65c33a766515299a836ecf71bd113a70ff63d4b812ea0ab2dda20b9b->leave($__internal_06000cde65c33a766515299a836ecf71bd113a70ff63d4b812ea0ab2dda20b9b_prof);

    }

    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_3d38a301252f3e395f45e883fba45274e6816d876709f3d9e2fb322ec0055900 = $this->env->getExtension("native_profiler");
        $__internal_3d38a301252f3e395f45e883fba45274e6816d876709f3d9e2fb322ec0055900->enter($__internal_3d38a301252f3e395f45e883fba45274e6816d876709f3d9e2fb322ec0055900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Actualizacion de contraseña<div class=\"box-icon\"><a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a><a class=\"btn btn-close btn-round\" href=\"#\"><i class=\"icon-remove\"></i></a></div>
    </div>
    <div class=\"box-content\">
\t\t<form class=\"form-horizontal\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("incentives_operaciones_contacto_actualizarpassword");
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
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
\t\t\t    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t    <input type=\"submit\">
\t\t\t</fieldset>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_3d38a301252f3e395f45e883fba45274e6816d876709f3d9e2fb322ec0055900->leave($__internal_3d38a301252f3e395f45e883fba45274e6816d876709f3d9e2fb322ec0055900_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Contacto:pass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 17,  90 => 16,  86 => 15,  82 => 14,  73 => 10,  66 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Actualizacion de contraseña{% endblock %}*/
/* {% block body %}*/
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Actualizacion de contraseña<div class="box-icon"><a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a><a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a></div>*/
/*     </div>*/
/*     <div class="box-content">*/
/* 		<form class="form-horizontal" action="{{ path('incentives_operaciones_contacto_actualizarpassword') }}" method="POST" {{ form_enctype(form) }}>*/
/* 			*/
/* 			<fieldset>*/
/* 				Actualizacion de contraseña*/
/* 				<input type='hidden' name='id' value={{ id }}>*/
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
