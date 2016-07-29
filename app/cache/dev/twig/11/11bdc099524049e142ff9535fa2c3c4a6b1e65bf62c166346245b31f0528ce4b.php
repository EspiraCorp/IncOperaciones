<?php

/* IncentivesBaseBundle:Campos:Ciudad.html.twig */
class __TwigTemplate_97fa8719691d4d7e4e0a29e0c70a28960ae108d705d4e03af5c93c95559bc3f0 extends Twig_Template
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
        $__internal_d4b041784d8ff086f3387f539b32524fa3a6069d0e716b20e8f5fcf9c621ac07 = $this->env->getExtension("native_profiler");
        $__internal_d4b041784d8ff086f3387f539b32524fa3a6069d0e716b20e8f5fcf9c621ac07->enter($__internal_d4b041784d8ff086f3387f539b32524fa3a6069d0e716b20e8f5fcf9c621ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Campos:Ciudad.html.twig"));

        // line 1
        echo "<select class=\"input-xlarge focused\" name=\"proveedores[ciudad]\" id=\"proveedores_ciudad\">
\t<option value=\"\">Seleccione una opcion</option>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 4
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "nombre", array()), "html", null, true);
            echo "</option>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</select>
";
        
        $__internal_d4b041784d8ff086f3387f539b32524fa3a6069d0e716b20e8f5fcf9c621ac07->leave($__internal_d4b041784d8ff086f3387f539b32524fa3a6069d0e716b20e8f5fcf9c621ac07_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Campos:Ciudad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <select class="input-xlarge focused" name="proveedores[ciudad]" id="proveedores_ciudad">*/
/* 	<option value="">Seleccione una opcion</option>*/
/* 	{% for ciudad in listado %}*/
/* 		<option value="{{ ciudad.id }}">{{ ciudad.nombre }}</option>*/
/* 	{% endfor %}*/
/* </select>*/
/* */
