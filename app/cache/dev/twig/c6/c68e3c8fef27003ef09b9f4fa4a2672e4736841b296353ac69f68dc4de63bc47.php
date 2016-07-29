<?php

/* IncentivesCatalogoBundle:Producto:formato.html.twig */
class __TwigTemplate_2ea2fd7ec46ea0af60871b8ca8b33b60bdd989b6a2163dc4f7ac4ad6568a2d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Producto:formato.html.twig", 3);
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
        $__internal_59435a380a18e298a01ab7b05ae2480cfe9630d1211899588cd36c310b2332c5 = $this->env->getExtension("native_profiler");
        $__internal_59435a380a18e298a01ab7b05ae2480cfe9630d1211899588cd36c310b2332c5->enter($__internal_59435a380a18e298a01ab7b05ae2480cfe9630d1211899588cd36c310b2332c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Producto:formato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59435a380a18e298a01ab7b05ae2480cfe9630d1211899588cd36c310b2332c5->leave($__internal_59435a380a18e298a01ab7b05ae2480cfe9630d1211899588cd36c310b2332c5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1eb53373537432d19426466847d33fbced3e22ff2a50373b181a7cc03640557a = $this->env->getExtension("native_profiler");
        $__internal_1eb53373537432d19426466847d33fbced3e22ff2a50373b181a7cc03640557a->enter($__internal_1eb53373537432d19426466847d33fbced3e22ff2a50373b181a7cc03640557a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Generar Formato";
        
        $__internal_1eb53373537432d19426466847d33fbced3e22ff2a50373b181a7cc03640557a->leave($__internal_1eb53373537432d19426466847d33fbced3e22ff2a50373b181a7cc03640557a_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_cfd121bf0611a59bf6f488590609562b966fa185c912b514e71a7e2830a85cb2 = $this->env->getExtension("native_profiler");
        $__internal_cfd121bf0611a59bf6f488590609562b966fa185c912b514e71a7e2830a85cb2->enter($__internal_cfd121bf0611a59bf6f488590609562b966fa185c912b514e71a7e2830a85cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Generar Formato</h2>
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
        echo $this->env->getExtension('routing')->getPath("producto_formato");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    <fieldset>
            <div class=\"controls\">
               <input name='go' type='submit' value='Formato' />
            </div>
        </div>
    </fieldset>
    

</form>
</div>
</div>
 </div>
";
        
        $__internal_cfd121bf0611a59bf6f488590609562b966fa185c912b514e71a7e2830a85cb2->leave($__internal_cfd121bf0611a59bf6f488590609562b966fa185c912b514e71a7e2830a85cb2_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Producto:formato.html.twig";
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
/* {% block title %}Generar Formato{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Generar Formato</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('producto') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('producto_formato') }}" method="POST" class="form-horizontal">*/
/*     <fieldset>*/
/*             <div class="controls">*/
/*                <input name='go' type='submit' value='Formato' />*/
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
