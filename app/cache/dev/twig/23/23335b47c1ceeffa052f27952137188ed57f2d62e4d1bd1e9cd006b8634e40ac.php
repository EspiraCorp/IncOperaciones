<?php

/* IncentivesInventarioBundle:Inventario:generarsegmentado.html.twig */
class __TwigTemplate_be08beb65f3ff95ecc6b379e42ae859defa2d03fc3bb754acca7389ef961ce85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesInventarioBundle:Inventario:generarsegmentado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dccf07578221525e404f4d535d58f8fa71d965e0c39856b3f3b458b284862c2 = $this->env->getExtension("native_profiler");
        $__internal_5dccf07578221525e404f4d535d58f8fa71d965e0c39856b3f3b458b284862c2->enter($__internal_5dccf07578221525e404f4d535d58f8fa71d965e0c39856b3f3b458b284862c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesInventarioBundle:Inventario:generarsegmentado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dccf07578221525e404f4d535d58f8fa71d965e0c39856b3f3b458b284862c2->leave($__internal_5dccf07578221525e404f4d535d58f8fa71d965e0c39856b3f3b458b284862c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9612a0a327c2c4db9a9c538c1efa91d91eba347b76a69d605994f091eea21cb9 = $this->env->getExtension("native_profiler");
        $__internal_9612a0a327c2c4db9a9c538c1efa91d91eba347b76a69d605994f091eea21cb9->enter($__internal_9612a0a327c2c4db9a9c538c1efa91d91eba347b76a69d605994f091eea21cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Planillas";
        
        $__internal_9612a0a327c2c4db9a9c538c1efa91d91eba347b76a69d605994f091eea21cb9->leave($__internal_9612a0a327c2c4db9a9c538c1efa91d91eba347b76a69d605994f091eea21cb9_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_5e376801ca6e74a60c2debf4124aa3e50ef3a5b5ed7f68334d880960bb554555 = $this->env->getExtension("native_profiler");
        $__internal_5e376801ca6e74a60c2debf4124aa3e50ef3a5b5ed7f68334d880960bb554555->enter($__internal_5e376801ca6e74a60c2debf4124aa3e50ef3a5b5ed7f68334d880960bb554555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Generar Planillas</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("planillas_lista");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">

    <table class=\"table table-bordered table-striped\">
        <tr>
            <th>País</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th></th>
        </tr>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["despachos"]) ? $context["despachos"] : $this->getContext($context, "despachos")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 24
            echo "           <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "redencion", array()), "productocatalogo", array()), "catalogos", array()), "pais", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "redencion", array()), "productocatalogo", array()), "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "total", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" onClick=\"post('";
            // line 28
            echo $this->env->getExtension('routing')->getPath("planillas_generarsegmentado");
            echo "', {pais:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "redencion", array()), "productocatalogo", array()), "catalogos", array()), "pais", array()), "id", array()), "html", null, true);
            echo ", categoria: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["categoria"], 0, array(), "array"), "redencion", array()), "productocatalogo", array()), "producto", array()), "categoria", array()), "id", array()), "html", null, true);
            echo "})\">Generar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </table>
</div>
</div>
 </div>
";
        
        $__internal_5e376801ca6e74a60c2debf4124aa3e50ef3a5b5ed7f68334d880960bb554555->leave($__internal_5e376801ca6e74a60c2debf4124aa3e50ef3a5b5ed7f68334d880960bb554555_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_726d5d129f875d2ae83ced9bf7235650d5616b035c0521245959fbf430f09a2d = $this->env->getExtension("native_profiler");
        $__internal_726d5d129f875d2ae83ced9bf7235650d5616b035c0521245959fbf430f09a2d->enter($__internal_726d5d129f875d2ae83ced9bf7235650d5616b035c0521245959fbf430f09a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    function post(path, parameters) {
    var form = \$('<form></form>');

    form.attr(\"method\", \"post\");
    form.attr(\"action\", path);

    \$.each(parameters, function(key, value) {
        var field = \$('<input></input>');

        field.attr(\"type\", \"hidden\");
        field.attr(\"name\", key);
        field.attr(\"value\", value);
        form.append(field);
    });

    // The form needs to be a part of the document in
    // order for us to be able to submit it.
    \$(document.body).append(form);
    form.submit();
}
  </script>
";
        
        $__internal_726d5d129f875d2ae83ced9bf7235650d5616b035c0521245959fbf430f09a2d->leave($__internal_726d5d129f875d2ae83ced9bf7235650d5616b035c0521245959fbf430f09a2d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesInventarioBundle:Inventario:generarsegmentado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  119 => 38,  108 => 32,  94 => 28,  89 => 26,  85 => 25,  80 => 24,  76 => 23,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Generar Planillas{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Generar Planillas</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('planillas_lista') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <tr>*/
/*             <th>País</th>*/
/*             <th>Categoria</th>*/
/*             <th>Cantidad</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% for categoria in despachos %}*/
/*            <tr><td>{{ categoria[0].redencion.productocatalogo.catalogos.pais.nombre }}</td>*/
/*                 <td>{{ categoria[0].redencion.productocatalogo.producto.categoria.nombre }}</td>*/
/*                 <td>{{ categoria.total }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" onClick="post('{{ path('planillas_generarsegmentado') }}', {pais:{{ categoria[0].redencion.productocatalogo.catalogos.pais.id }}, categoria: {{ categoria[0].redencion.productocatalogo.producto.categoria.id }}})">Generar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*   <script>*/
/*     function post(path, parameters) {*/
/*     var form = $('<form></form>');*/
/* */
/*     form.attr("method", "post");*/
/*     form.attr("action", path);*/
/* */
/*     $.each(parameters, function(key, value) {*/
/*         var field = $('<input></input>');*/
/* */
/*         field.attr("type", "hidden");*/
/*         field.attr("name", key);*/
/*         field.attr("value", value);*/
/*         form.append(field);*/
/*     });*/
/* */
/*     // The form needs to be a part of the document in*/
/*     // order for us to be able to submit it.*/
/*     $(document.body).append(form);*/
/*     form.submit();*/
/* }*/
/*   </script>*/
/* {% endblock %}*/
/* */
