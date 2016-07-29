<?php

/* ::base2.html.twig */
class __TwigTemplate_4015a097f1d9d13a906508f4d5f4c3daa1c5299d75d63400b2f5e11c2ff5ca48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f40b782fddda0d0ec3bfeb22be3ecdb0f7a1088c7b6ad3d9e266e0ef9ac929aa = $this->env->getExtension("native_profiler");
        $__internal_f40b782fddda0d0ec3bfeb22be3ecdb0f7a1088c7b6ad3d9e266e0ef9ac929aa->enter($__internal_f40b782fddda0d0ec3bfeb22be3ecdb0f7a1088c7b6ad3d9e266e0ef9ac929aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]> <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]> <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_f40b782fddda0d0ec3bfeb22be3ecdb0f7a1088c7b6ad3d9e266e0ef9ac929aa->leave($__internal_f40b782fddda0d0ec3bfeb22be3ecdb0f7a1088c7b6ad3d9e266e0ef9ac929aa_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8672859972f811c89663defde1c1c3e9b5ba52aa8ee273d360ffec5be1f08d7 = $this->env->getExtension("native_profiler");
        $__internal_c8672859972f811c89663defde1c1c3e9b5ba52aa8ee273d360ffec5be1f08d7->enter($__internal_c8672859972f811c89663defde1c1c3e9b5ba52aa8ee273d360ffec5be1f08d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8672859972f811c89663defde1c1c3e9b5ba52aa8ee273d360ffec5be1f08d7->leave($__internal_c8672859972f811c89663defde1c1c3e9b5ba52aa8ee273d360ffec5be1f08d7_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2077e4686f5771e224882ce0c9212b192c6c65275e018ae0ee45a249e280d6ac = $this->env->getExtension("native_profiler");
        $__internal_2077e4686f5771e224882ce0c9212b192c6c65275e018ae0ee45a249e280d6ac->enter($__internal_2077e4686f5771e224882ce0c9212b192c6c65275e018ae0ee45a249e280d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2077e4686f5771e224882ce0c9212b192c6c65275e018ae0ee45a249e280d6ac->leave($__internal_2077e4686f5771e224882ce0c9212b192c6c65275e018ae0ee45a249e280d6ac_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_baabe4040c49b99c2e643f813daa1e3c5125b2af244e617ff8910b3ce0c07108 = $this->env->getExtension("native_profiler");
        $__internal_baabe4040c49b99c2e643f813daa1e3c5125b2af244e617ff8910b3ce0c07108->enter($__internal_baabe4040c49b99c2e643f813daa1e3c5125b2af244e617ff8910b3ce0c07108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_baabe4040c49b99c2e643f813daa1e3c5125b2af244e617ff8910b3ce0c07108->leave($__internal_baabe4040c49b99c2e643f813daa1e3c5125b2af244e617ff8910b3ce0c07108_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c3f498947297c76405777037194814fd802e2217e70fb1d9647f51a81d65049 = $this->env->getExtension("native_profiler");
        $__internal_2c3f498947297c76405777037194814fd802e2217e70fb1d9647f51a81d65049->enter($__internal_2c3f498947297c76405777037194814fd802e2217e70fb1d9647f51a81d65049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_2c3f498947297c76405777037194814fd802e2217e70fb1d9647f51a81d65049->leave($__internal_2c3f498947297c76405777037194814fd802e2217e70fb1d9647f51a81d65049_prof);

    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 17,  98 => 16,  87 => 15,  76 => 11,  64 => 10,  55 => 19,  52 => 16,  50 => 15,  43 => 12,  41 => 11,  37 => 10,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/* 			<script src="{{ asset('js/jquery-2.0.3.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
