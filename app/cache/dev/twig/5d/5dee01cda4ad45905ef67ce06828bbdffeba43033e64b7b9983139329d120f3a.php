<?php

/* IncentivesRedencionesBundle:Participante:estado.html.twig */
class __TwigTemplate_3f2bdfaf02dc9a5257fe6b3af3324f3b190ab568d2a67abd37b48ca606978840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesRedencionesBundle:Participante:estado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_316bff53658747b9313a8504a80de314fea2029066a38b206ecd01ff6ca5468f = $this->env->getExtension("native_profiler");
        $__internal_316bff53658747b9313a8504a80de314fea2029066a38b206ecd01ff6ca5468f->enter($__internal_316bff53658747b9313a8504a80de314fea2029066a38b206ecd01ff6ca5468f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesRedencionesBundle:Participante:estado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316bff53658747b9313a8504a80de314fea2029066a38b206ecd01ff6ca5468f->leave($__internal_316bff53658747b9313a8504a80de314fea2029066a38b206ecd01ff6ca5468f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_925d6347df48b73a6d49ed91545ca20d472b05891eab1e57102f4aa5c7975ec7 = $this->env->getExtension("native_profiler");
        $__internal_925d6347df48b73a6d49ed91545ca20d472b05891eab1e57102f4aa5c7975ec7->enter($__internal_925d6347df48b73a6d49ed91545ca20d472b05891eab1e57102f4aa5c7975ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IncentivesRedencionesBundle:Participante:estado";
        
        $__internal_925d6347df48b73a6d49ed91545ca20d472b05891eab1e57102f4aa5c7975ec7->leave($__internal_925d6347df48b73a6d49ed91545ca20d472b05891eab1e57102f4aa5c7975ec7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85bc4f113bd63e18e925347864e2aab56f0ba4e3210afebcc0a68b31633c2b5d = $this->env->getExtension("native_profiler");
        $__internal_85bc4f113bd63e18e925347864e2aab56f0ba4e3210afebcc0a68b31633c2b5d->enter($__internal_85bc4f113bd63e18e925347864e2aab56f0ba4e3210afebcc0a68b31633c2b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Participante:estado page</h1>
";
        
        $__internal_85bc4f113bd63e18e925347864e2aab56f0ba4e3210afebcc0a68b31633c2b5d->leave($__internal_85bc4f113bd63e18e925347864e2aab56f0ba4e3210afebcc0a68b31633c2b5d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesRedencionesBundle:Participante:estado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}IncentivesRedencionesBundle:Participante:estado{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Participante:estado page</h1>*/
/* {% endblock %}*/
/* */
