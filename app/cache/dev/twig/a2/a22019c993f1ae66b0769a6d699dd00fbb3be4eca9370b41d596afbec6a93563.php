<?php

/* IncentivesBaseBundle:Usuarios:listado.html.twig */
class __TwigTemplate_eff49f55104041fd88ce4b399ed515e92e68b6590f9937d7a8514a3987c5cf92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesBaseBundle:Usuarios:listado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
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
        $__internal_82d460ab89b98d793cdf1c42486b2b2067cffec52ec362186736b33bc427c2a8 = $this->env->getExtension("native_profiler");
        $__internal_82d460ab89b98d793cdf1c42486b2b2067cffec52ec362186736b33bc427c2a8->enter($__internal_82d460ab89b98d793cdf1c42486b2b2067cffec52ec362186736b33bc427c2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Usuarios:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d460ab89b98d793cdf1c42486b2b2067cffec52ec362186736b33bc427c2a8->leave($__internal_82d460ab89b98d793cdf1c42486b2b2067cffec52ec362186736b33bc427c2a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_856dc6a54f5a1e14edcf858f2e693e1eaa991cbec564a1cd5c148a0f743081d5 = $this->env->getExtension("native_profiler");
        $__internal_856dc6a54f5a1e14edcf858f2e693e1eaa991cbec564a1cd5c148a0f743081d5->enter($__internal_856dc6a54f5a1e14edcf858f2e693e1eaa991cbec564a1cd5c148a0f743081d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Usuarios";
        
        $__internal_856dc6a54f5a1e14edcf858f2e693e1eaa991cbec564a1cd5c148a0f743081d5->leave($__internal_856dc6a54f5a1e14edcf858f2e693e1eaa991cbec564a1cd5c148a0f743081d5_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bdc885dbed5901184d582ffc80a06855a45211d8ffdf1f78fc74354c0cee17b9 = $this->env->getExtension("native_profiler");
        $__internal_bdc885dbed5901184d582ffc80a06855a45211d8ffdf1f78fc74354c0cee17b9->enter($__internal_bdc885dbed5901184d582ffc80a06855a45211d8ffdf1f78fc74354c0cee17b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_bdc885dbed5901184d582ffc80a06855a45211d8ffdf1f78fc74354c0cee17b9->leave($__internal_bdc885dbed5901184d582ffc80a06855a45211d8ffdf1f78fc74354c0cee17b9_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_6edece40e31ca2109fc83ea7df7fe9d648a0f2e7176bb2dd043c664f0166ac5d = $this->env->getExtension("native_profiler");
        $__internal_6edece40e31ca2109fc83ea7df7fe9d648a0f2e7176bb2dd043c664f0166ac5d->enter($__internal_6edece40e31ca2109fc83ea7df7fe9d648a0f2e7176bb2dd043c664f0166ac5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
  <div class=\"box span12\">
    <div class=\"box-header well\">
      <h2><i class=\"icon-th-list\"></i>Usuarios</h2>
      <div class=\"box-icon\"> 
              <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("usuarios_nuevo");
        echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
      </div>
    </div>
    <div class=\"box-content\">
      <div id=\"dashboard\">
                   
                    <div id=\"tabla\" class=\"table table-bordered table-striped\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"productos\" class=\"display\" width=\"100%\">
                        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                          <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("usuarios");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
                            <div class=\"box-icon\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</div>
                        <thead style=\"display:table-row-group;\">
                          <tr>
                            <th>";
        // line 26
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "Id", "u.id");
        echo "</th>
                            <th>";
        // line 27
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "Nombre", "u.nombre");
        echo "</th>
                            <th>";
        // line 28
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "Usuario", "u.username");
        echo "</th>
                            <th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "Perfil", "g.nombre");
        echo "</th>
                            <th>";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "Proveedor", "p.nombre");
        echo "</th>
                            <th>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "Cliente", "c.nombre");
        echo "</th>
                            <th>";
        // line 32
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "Estado", "u.isActive");
        echo "</th>
                          </tr>
                          <tr>
                            <th><input type=\"text\" id=\"usuario_id\" name=\"usuario[id]\" style=\"width: 40px\"></th>
                            <th>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("style" => "width:250px")));
        echo "</th>
                            <th>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupos", array()), 'widget', array("attr" => array("style" => "width:150px")));
        echo "</th>
                            <th>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "</th>
                            <th></th>
                          </tr>
                        </thead>
                        </form>
                        <tbody>
                          ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 47
            echo "                          <tr>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_editar", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            if ((null === $this->getAttribute($context["usuario"], "grupos", array()))) {
            } else {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["usuario"], "grupos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["grupo"]) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "nombre", array()), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "</td>
                            <td>";
            // line 52
            if ((null === $this->getAttribute($context["usuario"], "proveedor", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "proveedor", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 53
            if ((null === $this->getAttribute($context["usuario"], "cliente", array()))) {
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "cliente", array()), "nombre", array()), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 54
            if (($this->getAttribute($context["usuario"], "isActive", array()) == 1)) {
                echo "Activo";
            } else {
                echo " Inactivo ";
            }
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </tbody>
                      </table>
                    </div>   
            </div>
    </div>
    
    <div class=\"box span11\">
        <div class=\"box-content\">
                <div class=\"dataTables_info\">Mostrando ";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getItemNumberPerPage", array()) * ($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getCurrentPageNumber", array()) - 1)) + 1), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getItemNumberPerPage", array()) * $this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getCurrentPageNumber", array())), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")), "getTotalItemCount", array()), "html", null, true);
        echo "   Usuarios
                </div>
                <div class=\"pagination pagination-centered\">
                        ";
        // line 68
        echo $this->env->getExtension('knp_pagination')->render((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        echo "                    
                </div>
        </div>
    </div>
  </div>
</div>
";
        
        $__internal_6edece40e31ca2109fc83ea7df7fe9d648a0f2e7176bb2dd043c664f0166ac5d->leave($__internal_6edece40e31ca2109fc83ea7df7fe9d648a0f2e7176bb2dd043c664f0166ac5d_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5643ac0ee9d91c4dedf4e9ecb27227723fc37435d7df4526bf8e40c323467a17 = $this->env->getExtension("native_profiler");
        $__internal_5643ac0ee9d91c4dedf4e9ecb27227723fc37435d7df4526bf8e40c323467a17->enter($__internal_5643ac0ee9d91c4dedf4e9ecb27227723fc37435d7df4526bf8e40c323467a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "
";
        // line 78
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_5643ac0ee9d91c4dedf4e9ecb27227723fc37435d7df4526bf8e40c323467a17->leave($__internal_5643ac0ee9d91c4dedf4e9ecb27227723fc37435d7df4526bf8e40c323467a17_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Usuarios:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 78,  262 => 77,  256 => 76,  242 => 68,  232 => 65,  222 => 57,  209 => 54,  202 => 53,  195 => 52,  181 => 51,  177 => 50,  171 => 49,  167 => 48,  164 => 47,  160 => 46,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  98 => 23,  92 => 22,  88 => 21,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Usuarios{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/*   <div class="box span12">*/
/*     <div class="box-header well">*/
/*       <h2><i class="icon-th-list"></i>Usuarios</h2>*/
/*       <div class="box-icon"> */
/*               <a href="{{ path('usuarios_nuevo') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/*       </div>*/
/*     </div>*/
/*     <div class="box-content">*/
/*       <div id="dashboard">*/
/*                    */
/*                     <div id="tabla" class="table table-bordered table-striped" cellspacing="0" width="100%">*/
/*                       <table id="productos" class="display" width="100%">*/
/*                         {{ form_start(form, { attr: {novalidate: 'novalidate'} }) }}*/
/*                           <form action="{{ path('usuarios') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*                             <div class="box-icon">{{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}</div>*/
/*                         <thead style="display:table-row-group;">*/
/*                           <tr>*/
/*                             <th>{{ knp_pagination_sortable(listado, 'Id', 'u.id') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(listado, 'Nombre', 'u.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(listado, 'Usuario', 'u.username') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(listado, 'Perfil', 'g.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(listado, 'Proveedor', 'p.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(listado, 'Cliente', 'c.nombre') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(listado, 'Estado', 'u.isActive') }}</th>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th><input type="text" id="usuario_id" name="usuario[id]" style="width: 40px"></th>*/
/*                             <th>{{ form_widget(form.nombre, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.username, { 'attr': { 'style' : 'width:250px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.grupos, { 'attr': { 'style' : 'width:150px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.proveedor, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th>{{ form_widget(form.cliente, { 'attr': { 'style' : 'width:100px' }} ) }}</th>*/
/*                             <th></th>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         </form>*/
/*                         <tbody>*/
/*                           {% for usuario in listado %}*/
/*                           <tr>*/
/*                             <td>{{ usuario.id }}</td>*/
/*                             <td><a href="{{ path("usuarios_editar", {"id": usuario.id}) }}">{{ usuario.nombre }}</a></td>*/
/*                             <td>{{ usuario.username }}</td>*/
/*                             <td>{% if usuario.grupos is null %}{% else %}{% for grupo in usuario.grupos %}{{ grupo.nombre }}{% endfor %}{% endif %}</td>*/
/*                             <td>{% if usuario.proveedor is null %}{% else %}{{ usuario.proveedor.nombre }}{% endif %}</td>*/
/*                             <td>{% if usuario.cliente is null %}{% else %}{{ usuario.cliente.nombre }}{% endif %}</td>*/
/*                             <td>{% if usuario.isActive==1 %}Activo{% else %} Inactivo {% endif %}</td>*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                       </table>*/
/*                     </div>   */
/*             </div>*/
/*     </div>*/
/*     */
/*     <div class="box span11">*/
/*         <div class="box-content">*/
/*                 <div class="dataTables_info">Mostrando {{ listado.getItemNumberPerPage*(listado.getCurrentPageNumber-1)+1  }} a {{ listado.getItemNumberPerPage*listado.getCurrentPageNumber }} de {{ listado.getTotalItemCount }}   Usuarios*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                         {{ knp_pagination_render(listado) }}                    */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
