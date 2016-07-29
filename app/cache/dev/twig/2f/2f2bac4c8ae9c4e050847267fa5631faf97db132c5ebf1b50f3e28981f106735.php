<?php

/* IncentivesOrdenesBundle:Ordenes:productosprecio.html.twig */
class __TwigTemplate_63f7129e73b776e3ca58471bdce5595244f5f5d295ed9dedf02fbc7001a99d73 extends Twig_Template
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
        $__internal_7b92a7531af07646bd4fe35991313027ac33828ac60a35b5ed9a1d9b123bdf28 = $this->env->getExtension("native_profiler");
        $__internal_7b92a7531af07646bd4fe35991313027ac33828ac60a35b5ed9a1d9b123bdf28->enter($__internal_7b92a7531af07646bd4fe35991313027ac33828ac60a35b5ed9a1d9b123bdf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:productosprecio.html.twig"));

        // line 1
        echo "<select>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 3
            echo "     
\t<option value=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array(), "array"), "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array(), "array"), "nombre", array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array(), "array"), "referencia", array(), "array"), "html", null, true);
            echo "</option>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</select>



";
        
        $__internal_7b92a7531af07646bd4fe35991313027ac33828ac60a35b5ed9a1d9b123bdf28->leave($__internal_7b92a7531af07646bd4fe35991313027ac33828ac60a35b5ed9a1d9b123bdf28_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:productosprecio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <select>*/
/* {% for producto in productos %}*/
/*      */
/* 	<option value="{{ producto['producto']['id'] }}">{{ producto['producto']['nombre'] }} - {{ producto['producto']['referencia'] }}</option>*/
/* */
/* {% endfor %}*/
/* </select>*/
/* */
/* */
/* */
/* */
