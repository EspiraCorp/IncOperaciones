<?php

/* IncentivesOperacionesBundle:Proveedor:able.html.twig */
class __TwigTemplate_7ac1d62269629b07fc425d5501887d749897ebe7980d456c10b680eb8ac2bd6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0be1557eb2b02ab3a287f91804ec3c3f5c74933116fba3eb13eac4e9e8de4f83 = $this->env->getExtension("native_profiler");
        $__internal_0be1557eb2b02ab3a287f91804ec3c3f5c74933116fba3eb13eac4e9e8de4f83->enter($__internal_0be1557eb2b02ab3a287f91804ec3c3f5c74933116fba3eb13eac4e9e8de4f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:able.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (((isset($context["estado"]) ? $context["estado"] : $this->getContext($context, "estado")) == 0)) {
            // line 3
            echo "Deshabilitado
";
        } else {
            // line 5
            echo "Habilitado
";
        }
        // line 7
        echo "</div>
proveedor ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "nombre", array()), "html", null, true);
        echo "
";
        
        $__internal_0be1557eb2b02ab3a287f91804ec3c3f5c74933116fba3eb13eac4e9e8de4f83->leave($__internal_0be1557eb2b02ab3a287f91804ec3c3f5c74933116fba3eb13eac4e9e8de4f83_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:able.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {% if (estado==0) %}*/
/* Deshabilitado*/
/* {% else %}*/
/* Habilitado*/
/* {% endif %}*/
/* </div>*/
/* proveedor {{ id }} {{ proveedor.nombre }}*/
/* */
