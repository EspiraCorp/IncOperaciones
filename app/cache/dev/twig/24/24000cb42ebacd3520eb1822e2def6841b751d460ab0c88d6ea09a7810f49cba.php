<?php

/* IncentivesOperacionesBundle:Contacto:edit.html.twig */
class __TwigTemplate_d66558fafffc77bdb6e47f45dc521ab8fbe332e9ef870a634111e6caac7ac433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Contacto:edit.html.twig", 1);
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
        $__internal_38565e413fd58f7173e20bae1b201e76469f6b2af54838cf6f94690d7ca0a6e8 = $this->env->getExtension("native_profiler");
        $__internal_38565e413fd58f7173e20bae1b201e76469f6b2af54838cf6f94690d7ca0a6e8->enter($__internal_38565e413fd58f7173e20bae1b201e76469f6b2af54838cf6f94690d7ca0a6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Contacto:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38565e413fd58f7173e20bae1b201e76469f6b2af54838cf6f94690d7ca0a6e8->leave($__internal_38565e413fd58f7173e20bae1b201e76469f6b2af54838cf6f94690d7ca0a6e8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_411eee63b09e76065487dd381f4b80b69fc5d7a570b5b58aebe4c564b6670023 = $this->env->getExtension("native_profiler");
        $__internal_411eee63b09e76065487dd381f4b80b69fc5d7a570b5b58aebe4c564b6670023->enter($__internal_411eee63b09e76065487dd381f4b80b69fc5d7a570b5b58aebe4c564b6670023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Contacto";
        
        $__internal_411eee63b09e76065487dd381f4b80b69fc5d7a570b5b58aebe4c564b6670023->leave($__internal_411eee63b09e76065487dd381f4b80b69fc5d7a570b5b58aebe4c564b6670023_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_39c0edb202e9c1e0060b723875ffbf32ad675b361602b5d42e46d0f77fb9ba12 = $this->env->getExtension("native_profiler");
        $__internal_39c0edb202e9c1e0060b723875ffbf32ad675b361602b5d42e46d0f77fb9ba12->enter($__internal_39c0edb202e9c1e0060b723875ffbf32ad675b361602b5d42e46d0f77fb9ba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Editar Contacto<div class=\"box-icon\"><a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a><a class=\"btn btn-close btn-round\" href=\"#\"><i class=\"icon-remove\"></i></a></div>
    </div>
    <div class=\"box-content\">
\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("incentives_operaciones_contacto_editar");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\tEdicion del contacto 
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
\t\t\t<input type='hidden' name='id' value=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<input type=\"submit\" />
\t\t</form>
\t</div>
</div>
";
        
        $__internal_39c0edb202e9c1e0060b723875ffbf32ad675b361602b5d42e46d0f77fb9ba12->leave($__internal_39c0edb202e9c1e0060b723875ffbf32ad675b361602b5d42e46d0f77fb9ba12_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Contacto:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  71 => 12,  67 => 11,  60 => 9,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Editar Contacto{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Editar Contacto<div class="box-icon"><a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a><a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a></div>*/
/*     </div>*/
/*     <div class="box-content">*/
/* 		<form action="{{ path('incentives_operaciones_contacto_editar') }}" method="POST" {{ form_enctype(form) }}>*/
/* 			Edicion del contacto */
/* 			{{ id }}*/
/* 			<input type='hidden' name='id' value={{ id }}>*/
/* 			{{ form_widget(form) }}*/
/* 			<input type="submit" />*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
