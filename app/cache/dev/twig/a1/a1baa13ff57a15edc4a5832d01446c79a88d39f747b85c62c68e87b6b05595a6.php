<?php

/* IncentivesCatalogoBundle:Producto:catalogoproducto.html.twig */
class __TwigTemplate_0a92d2067872e64cfc8143aa33dffd26c931362c1d1aff8fc628fcfe3c55d62b extends Twig_Template
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
        $__internal_248817706e0170f6297465a47469ea24de1ab3fcae40fa90c77f2a0d7b65bc5b = $this->env->getExtension("native_profiler");
        $__internal_248817706e0170f6297465a47469ea24de1ab3fcae40fa90c77f2a0d7b65bc5b->enter($__internal_248817706e0170f6297465a47469ea24de1ab3fcae40fa90c77f2a0d7b65bc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:catalogoproducto.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["catalogo"], "producto", array()), "catalogos", array()), "nombre", array()), "html", null, true);
            echo "<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_248817706e0170f6297465a47469ea24de1ab3fcae40fa90c77f2a0d7b65bc5b->leave($__internal_248817706e0170f6297465a47469ea24de1ab3fcae40fa90c77f2a0d7b65bc5b_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:catalogoproducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for catalogo in listado %}*/
/*     {{ catalogo.producto.catalogos.nombre }}<br/>*/
/* {% endfor %}*/
