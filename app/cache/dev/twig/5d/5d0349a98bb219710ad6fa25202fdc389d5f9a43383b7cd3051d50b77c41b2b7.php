<?php

/* SimpleThingsEntityAuditBundle::layout.html.twig */
class __TwigTemplate_e3a9dbfb918107597d51040cd79e19530892e98815ca9a351a89c32057efaa4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8395f0067f66c5ecbf58246bcde402d2488d8693f40d13f112a5418a2ecfda3c = $this->env->getExtension("native_profiler");
        $__internal_8395f0067f66c5ecbf58246bcde402d2488d8693f40d13f112a5418a2ecfda3c->enter($__internal_8395f0067f66c5ecbf58246bcde402d2488d8693f40d13f112a5418a2ecfda3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('simplethings_entityaudit_content', $context, $blocks);
        // line 9
        echo "        </div>
    </body>
</html>";
        
        $__internal_8395f0067f66c5ecbf58246bcde402d2488d8693f40d13f112a5418a2ecfda3c->leave($__internal_8395f0067f66c5ecbf58246bcde402d2488d8693f40d13f112a5418a2ecfda3c_prof);

    }

    // line 8
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_fb8bae8f2d5655152c290e0068818633b056795de62e5be8facdfd2273efa200 = $this->env->getExtension("native_profiler");
        $__internal_fb8bae8f2d5655152c290e0068818633b056795de62e5be8facdfd2273efa200->enter($__internal_fb8bae8f2d5655152c290e0068818633b056795de62e5be8facdfd2273efa200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        echo "";
        
        $__internal_fb8bae8f2d5655152c290e0068818633b056795de62e5be8facdfd2273efa200->leave($__internal_fb8bae8f2d5655152c290e0068818633b056795de62e5be8facdfd2273efa200_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  34 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% block simplethings_entityaudit_content '' %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
