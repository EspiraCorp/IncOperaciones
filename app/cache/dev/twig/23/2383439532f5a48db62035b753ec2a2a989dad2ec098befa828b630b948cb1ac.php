<?php

/* IncentivesOperacionesBundle:Contacto:able.html.twig */
class __TwigTemplate_089605808811626f309ef3c3927266f531a1db4a8bfb398488f3bf766a9c6be9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Contacto:able.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6db6230604ab475998b46f0cce354554b4806baa596abc75cc8cf7fa98660ac = $this->env->getExtension("native_profiler");
        $__internal_d6db6230604ab475998b46f0cce354554b4806baa596abc75cc8cf7fa98660ac->enter($__internal_d6db6230604ab475998b46f0cce354554b4806baa596abc75cc8cf7fa98660ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Contacto:able.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6db6230604ab475998b46f0cce354554b4806baa596abc75cc8cf7fa98660ac->leave($__internal_d6db6230604ab475998b46f0cce354554b4806baa596abc75cc8cf7fa98660ac_prof);

    }

    // line 2
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_cf3d56024250ff1c24558afd3beed202fa3a6605ea82c8aa68a2b6bd21056582 = $this->env->getExtension("native_profiler");
        $__internal_cf3d56024250ff1c24558afd3beed202fa3a6605ea82c8aa68a2b6bd21056582->enter($__internal_cf3d56024250ff1c24558afd3beed202fa3a6605ea82c8aa68a2b6bd21056582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 3
        if (((isset($context["estado"]) ? $context["estado"] : $this->getContext($context, "estado")) == 0)) {
            // line 4
            echo "Deshabilitado
";
        } else {
            // line 6
            echo "Habilitado
";
        }
        // line 8
        echo "contacto ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "nombres", array()), "html", null, true);
        echo "
";
        
        $__internal_cf3d56024250ff1c24558afd3beed202fa3a6605ea82c8aa68a2b6bd21056582->leave($__internal_cf3d56024250ff1c24558afd3beed202fa3a6605ea82c8aa68a2b6bd21056582_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Contacto:able.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 6,  42 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block cuerpo %}*/
/* {% if (estado==0) %}*/
/* Deshabilitado*/
/* {% else %}*/
/* Habilitado*/
/* {% endif %}*/
/* contacto {{ id }} {{ contacto.nombres }}*/
/* {% endblock %}*/
/* */
