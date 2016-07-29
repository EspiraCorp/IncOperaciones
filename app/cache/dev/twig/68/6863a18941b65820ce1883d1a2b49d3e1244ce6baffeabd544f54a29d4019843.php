<?php

/* IncentivesCatalogoBundle:Producto:exportar.html.twig */
class __TwigTemplate_91dfec4fd46835786539a96fd02ea6a1f61142b0f1796c8876168f3b9ce1e266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:exportar.html.twig", 3);
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
        $__internal_952d9d8916cf68b790a0104e503cdbd05b78d831157e958f0fa702118c926b35 = $this->env->getExtension("native_profiler");
        $__internal_952d9d8916cf68b790a0104e503cdbd05b78d831157e958f0fa702118c926b35->enter($__internal_952d9d8916cf68b790a0104e503cdbd05b78d831157e958f0fa702118c926b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:exportar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952d9d8916cf68b790a0104e503cdbd05b78d831157e958f0fa702118c926b35->leave($__internal_952d9d8916cf68b790a0104e503cdbd05b78d831157e958f0fa702118c926b35_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9403397af50654c054eeab604d025f3a69f70348f0887b0155ed8130eafcb88 = $this->env->getExtension("native_profiler");
        $__internal_f9403397af50654c054eeab604d025f3a69f70348f0887b0155ed8130eafcb88->enter($__internal_f9403397af50654c054eeab604d025f3a69f70348f0887b0155ed8130eafcb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Reporte";
        
        $__internal_f9403397af50654c054eeab604d025f3a69f70348f0887b0155ed8130eafcb88->leave($__internal_f9403397af50654c054eeab604d025f3a69f70348f0887b0155ed8130eafcb88_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_9883f3e6b2776ed1b3584b2fc7674db5e7f5f9ec7943645a683d418436f125a3 = $this->env->getExtension("native_profiler");
        $__internal_9883f3e6b2776ed1b3584b2fc7674db5e7f5f9ec7943645a683d418436f125a3->enter($__internal_9883f3e6b2776ed1b3584b2fc7674db5e7f5f9ec7943645a683d418436f125a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Generar Reporte</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("producto_exportar");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    <fieldset>
            <div class=\"controls\">
               <input name='producto' type='submit' value='Exportar' />
            </div>
        </div>
    </fieldset>
    

</form>
</div>
</div>
 </div>
";
        
        $__internal_9883f3e6b2776ed1b3584b2fc7674db5e7f5f9ec7943645a683d418436f125a3->leave($__internal_9883f3e6b2776ed1b3584b2fc7674db5e7f5f9ec7943645a683d418436f125a3_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:exportar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/Sinaptica/ProveedoresBundle/Resources/views/Default/new.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Generar Reporte{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Generar Reporte</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('producto') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('producto_exportar') }}" method="POST" class="form-horizontal">*/
/*     <fieldset>*/
/*             <div class="controls">*/
/*                <input name='producto' type='submit' value='Exportar' />*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     */
/* */
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
