<?php

/* IncentivesBaseBundle:Campos:Departamento.html.twig */
class __TwigTemplate_03ec34be47c84319d2e914ce732053603161a1652eee25449b17b6eac0a70c7f extends Twig_Template
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
        $__internal_7f18539fbec6f02a121ef41f5de7e54d92f426898a9e036a38c4075af8f7103a = $this->env->getExtension("native_profiler");
        $__internal_7f18539fbec6f02a121ef41f5de7e54d92f426898a9e036a38c4075af8f7103a->enter($__internal_7f18539fbec6f02a121ef41f5de7e54d92f426898a9e036a38c4075af8f7103a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Campos:Departamento.html.twig"));

        // line 1
        echo "<select class=\"input-xlarge focused\" name=\"proveedores[departamento]\" id=\"proveedores_departamento\">
\t<option value=\"\">Seleccione una opcion</option>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 4
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "nombre", array()), "html", null, true);
            echo "</option>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</select>
";
        
        $__internal_7f18539fbec6f02a121ef41f5de7e54d92f426898a9e036a38c4075af8f7103a->leave($__internal_7f18539fbec6f02a121ef41f5de7e54d92f426898a9e036a38c4075af8f7103a_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Campos:Departamento.html.twig";
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
/* <select class="input-xlarge focused" name="proveedores[departamento]" id="proveedores_departamento">*/
/* 	<option value="">Seleccione una opcion</option>*/
/* 	{% for departamento in listado %}*/
/* 		<option value="{{ departamento.id }}">{{ departamento.nombre }}</option>*/
/* 	{% endfor %}*/
/* </select>*/
/* */
