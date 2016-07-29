<?php

/* IncentivesOperacionesBundle:Proveedor:correo.html.twig */
class __TwigTemplate_07a9230a705ef963ef6dd8bdaa5104ac0dc02f99a5cb66932293301586236a55 extends Twig_Template
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
        $__internal_96ced58b4c792bae8f4527b9ace71823ba98ea332d2acc4a030d4637a29cdc59 = $this->env->getExtension("native_profiler");
        $__internal_96ced58b4c792bae8f4527b9ace71823ba98ea332d2acc4a030d4637a29cdc59->enter($__internal_96ced58b4c792bae8f4527b9ace71823ba98ea332d2acc4a030d4637a29cdc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:correo.html.twig"));

        // line 1
        if (((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")) == 1)) {
            // line 2
            echo "    <div class=\"alert alert-success\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <strong>Well done!</strong> You successfully read this important alert message.
    </div>
";
        } elseif ((        // line 6
(isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")) == 0)) {
            // line 7
            echo "    <div class=\"alert alert-error\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>
";
        }
        // line 11
        echo "    
    
                        
                    ";
        
        $__internal_96ced58b4c792bae8f4527b9ace71823ba98ea332d2acc4a030d4637a29cdc59->leave($__internal_96ced58b4c792bae8f4527b9ace71823ba98ea332d2acc4a030d4637a29cdc59_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:correo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  32 => 7,  30 => 6,  24 => 2,  22 => 1,);
    }
}
/* {% if (resultado==1) %}*/
/*     <div class="alert alert-success">*/
/*         <button type="button" class="close" data-dismiss="alert">×</button>*/
/*         <strong>Well done!</strong> You successfully read this important alert message.*/
/*     </div>*/
/* {% elseif (resultado==0) %}*/
/*     <div class="alert alert-error">*/
/*         <button type="button" class="close" data-dismiss="alert">×</button>*/
/*         <strong>Oh snap!</strong> Change a few things up and try submitting again.*/
/*     </div>*/
/* {% endif %}    */
/*     */
/*                         */
/*                     */
