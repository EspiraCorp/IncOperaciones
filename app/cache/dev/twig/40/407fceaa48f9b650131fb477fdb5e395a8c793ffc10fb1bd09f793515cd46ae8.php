<?php

/* IncentivesOrdenesBundle:OrdenRedencion:generartotalpass.html.twig */
class __TwigTemplate_b08a6d4c7966ba05fa12d6e7736e69732f2feba33d7707e5fcb8b07b50109eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOrdenesBundle:OrdenRedencion:generartotalpass.html.twig", 1);
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
        $__internal_3f5df11ae3b3aa89f1ee3025b05795d69431b12c0e66bdc470c630b8f05d485f = $this->env->getExtension("native_profiler");
        $__internal_3f5df11ae3b3aa89f1ee3025b05795d69431b12c0e66bdc470c630b8f05d485f->enter($__internal_3f5df11ae3b3aa89f1ee3025b05795d69431b12c0e66bdc470c630b8f05d485f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:OrdenRedencion:generartotalpass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f5df11ae3b3aa89f1ee3025b05795d69431b12c0e66bdc470c630b8f05d485f->leave($__internal_3f5df11ae3b3aa89f1ee3025b05795d69431b12c0e66bdc470c630b8f05d485f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d0d75ab9f602e8f731c62240fae5670011f920c1f212a7c4ac0eb92a118e80a = $this->env->getExtension("native_profiler");
        $__internal_0d0d75ab9f602e8f731c62240fae5670011f920c1f212a7c4ac0eb92a118e80a->enter($__internal_0d0d75ab9f602e8f731c62240fae5670011f920c1f212a7c4ac0eb92a118e80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Ordenes";
        
        $__internal_0d0d75ab9f602e8f731c62240fae5670011f920c1f212a7c4ac0eb92a118e80a->leave($__internal_0d0d75ab9f602e8f731c62240fae5670011f920c1f212a7c4ac0eb92a118e80a_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_7a0e1788bb9ab24d763f1965866ff7798cd8407f4a06ba546ceb0d734e2024fa = $this->env->getExtension("native_profiler");
        $__internal_7a0e1788bb9ab24d763f1965866ff7798cd8407f4a06ba546ceb0d734e2024fa->enter($__internal_7a0e1788bb9ab24d763f1965866ff7798cd8407f4a06ba546ceb0d734e2024fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Generar Ordenes</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ordenes");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">

    <table class=\"table table-bordered table-striped\">
        <tr>
            <th>Programa</th>
            <th>Cantidad</th>
            <th></th>
        </tr>
        ";
        // line 22
        $context["i"] = 0;
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redenciones"]) ? $context["redenciones"] : $this->getContext($context, "redenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 24
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 25
            echo "            <tr><td width=\"200px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "productocatalogo", array()), "catalogos", array()), "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "total", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" onClick=\"post('";
            // line 28
            echo $this->env->getExtension('routing')->getPath("ordenredencion_generartotalpass");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["programa"], 0, array(), "array"), "productocatalogo", array()), "catalogos", array()), "programa", array()), "id", array()), "html", null, true);
            echo "', '')\">Generar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </table>
</div>
</div>
 </div>
";
        
        $__internal_7a0e1788bb9ab24d763f1965866ff7798cd8407f4a06ba546ceb0d734e2024fa->leave($__internal_7a0e1788bb9ab24d763f1965866ff7798cd8407f4a06ba546ceb0d734e2024fa_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04490f99935ec4b762fd68dd6e06ebdd1c3b82de063bf7fccb61d0b1da449bd3 = $this->env->getExtension("native_profiler");
        $__internal_04490f99935ec4b762fd68dd6e06ebdd1c3b82de063bf7fccb61d0b1da449bd3->enter($__internal_04490f99935ec4b762fd68dd6e06ebdd1c3b82de063bf7fccb61d0b1da449bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

    function detalle(id){
        \$('#detalle_'+id).toggle();
    }
  </script>
";
        
        $__internal_04490f99935ec4b762fd68dd6e06ebdd1c3b82de063bf7fccb61d0b1da449bd3->leave($__internal_04490f99935ec4b762fd68dd6e06ebdd1c3b82de063bf7fccb61d0b1da449bd3_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:OrdenRedencion:generartotalpass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  118 => 38,  107 => 32,  95 => 28,  90 => 26,  85 => 25,  82 => 24,  77 => 23,  75 => 22,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Generar Ordenes{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Generar Ordenes</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('ordenes') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <tr>*/
/*             <th>Programa</th>*/
/*             <th>Cantidad</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% set i=0 %}*/
/*         {% for programa in redenciones %}*/
/*             {% set i=i+1 %}*/
/*             <tr><td width="200px">{{ programa[0].productocatalogo.catalogos.programa.nombre}}</td>*/
/*                 <td>{{ programa.total }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" onClick="post('{{ path('ordenredencion_generartotalpass') }}/{{programa[0].productocatalogo.catalogos.programa.id}}', '')">Generar</a>*/
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
/*         var form = $('<form></form>');*/
/*     */
/*         form.attr("method", "post");*/
/*         form.attr("action", path);*/
/*     */
/*         $.each(parameters, function(key, value) {*/
/*             var field = $('<input></input>');*/
/*     */
/*             field.attr("type", "hidden");*/
/*             field.attr("name", key);*/
/*             field.attr("value", value);*/
/*             form.append(field);*/
/*         });*/
/*     */
/*         // The form needs to be a part of the document in*/
/*         // order for us to be able to submit it.*/
/*         $(document.body).append(form);*/
/*         form.submit();*/
/*     }*/
/* */
/*     function detalle(id){*/
/*         $('#detalle_'+id).toggle();*/
/*     }*/
/*   </script>*/
/* {% endblock %}*/
/* */
