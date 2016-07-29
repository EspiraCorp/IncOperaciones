<?php

/* IncentivesOperacionesBundle:Proveedor:prueba.html.twig */
class __TwigTemplate_2dbab35f25482f6b7f863bf6e202943818833ac0c61c6c888449fae31c7efd80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:prueba.html.twig", 2);
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
        $__internal_48a82080ec33013a64cad17e68a91a22b12a3d0aaa8a14350d2a15281ded0e51 = $this->env->getExtension("native_profiler");
        $__internal_48a82080ec33013a64cad17e68a91a22b12a3d0aaa8a14350d2a15281ded0e51->enter($__internal_48a82080ec33013a64cad17e68a91a22b12a3d0aaa8a14350d2a15281ded0e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:prueba.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a82080ec33013a64cad17e68a91a22b12a3d0aaa8a14350d2a15281ded0e51->leave($__internal_48a82080ec33013a64cad17e68a91a22b12a3d0aaa8a14350d2a15281ded0e51_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffca30fbcaac68afefc9673ff9cb522779600211cb6707c2a785d1e197b7433c = $this->env->getExtension("native_profiler");
        $__internal_ffca30fbcaac68afefc9673ff9cb522779600211cb6707c2a785d1e197b7433c->enter($__internal_ffca30fbcaac68afefc9673ff9cb522779600211cb6707c2a785d1e197b7433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar proveedor";
        
        $__internal_ffca30fbcaac68afefc9673ff9cb522779600211cb6707c2a785d1e197b7433c->leave($__internal_ffca30fbcaac68afefc9673ff9cb522779600211cb6707c2a785d1e197b7433c_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_d1d4c4a2b3c1e3da147ac74a315e135055d5940598f6929f74f09d5c2f673aec = $this->env->getExtension("native_profiler");
        $__internal_d1d4c4a2b3c1e3da147ac74a315e135055d5940598f6929f74f09d5c2f673aec->enter($__internal_d1d4c4a2b3c1e3da147ac74a315e135055d5940598f6929f74f09d5c2f673aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"box span12\">
    <div class=\"box-header well\" data-original-title=\"\">
        Editar Proveedor<div class=\"box-icon\"><a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a><a class=\"btn btn-close btn-round\" href=\"#\"><i class=\"icon-remove\"></i></a></div>
    </div>
    <div class=\"row\">
        <div class=\"span12\">
            <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("incentives_operaciones_prueba");
        echo "\" method=\"POST\" novalidate>
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "province", array()), 'row');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <button type=\"submit\" class=\"btn btn-success\">
                    Guardar
                </button>
            </form>
        </div>
    </div>
";
        
        $__internal_d1d4c4a2b3c1e3da147ac74a315e135055d5940598f6929f74f09d5c2f673aec->leave($__internal_d1d4c4a2b3c1e3da147ac74a315e135055d5940598f6929f74f09d5c2f673aec_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:prueba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/incentives/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Editar proveedor{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="box span12">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Editar Proveedor<div class="box-icon"><a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a><a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a></div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <form action="{{ path('incentives_operaciones_prueba') }}" method="POST" novalidate>*/
/*                 {{ form_row(form.address) }}*/
/*                 {{ form_row(form.country) }}*/
/*                 {{ form_row(form.province) }}*/
/*                 {{ form_row(form.city) }}*/
/*                 {{ form_rest(form) }}*/
/*                 <button type="submit" class="btn btn-success">*/
/*                     Guardar*/
/*                 </button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
