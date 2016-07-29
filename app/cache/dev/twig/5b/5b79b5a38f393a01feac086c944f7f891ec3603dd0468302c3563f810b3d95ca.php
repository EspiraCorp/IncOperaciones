<?php

/* ::base_BU.html.twig */
class __TwigTemplate_6af014dc03b3c7876faf1288121d94d5306e540f363ff08027afaa3cf70d9f7d extends Twig_Template
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
        $__internal_a4c8fabb1e6bac3d8250b6a5aaedbb75361a7832d0bcde84dbecae5dc6f48755 = $this->env->getExtension("native_profiler");
        $__internal_a4c8fabb1e6bac3d8250b6a5aaedbb75361a7832d0bcde84dbecae5dc6f48755->enter($__internal_a4c8fabb1e6bac3d8250b6a5aaedbb75361a7832d0bcde84dbecae5dc6f48755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_BU.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a4c8fabb1e6bac3d8250b6a5aaedbb75361a7832d0bcde84dbecae5dc6f48755->leave($__internal_a4c8fabb1e6bac3d8250b6a5aaedbb75361a7832d0bcde84dbecae5dc6f48755_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd7dd03794ea1fae18303539beafb67d6ca46c8d4608e9fcece6bc4ba857f0eb = $this->env->getExtension("native_profiler");
        $__internal_bd7dd03794ea1fae18303539beafb67d6ca46c8d4608e9fcece6bc4ba857f0eb->enter($__internal_bd7dd03794ea1fae18303539beafb67d6ca46c8d4608e9fcece6bc4ba857f0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd7dd03794ea1fae18303539beafb67d6ca46c8d4608e9fcece6bc4ba857f0eb->leave($__internal_bd7dd03794ea1fae18303539beafb67d6ca46c8d4608e9fcece6bc4ba857f0eb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a77525a05b9f8a1e9f53689cad65f756f1c8f36a63391b4eced3d6fcbf505719 = $this->env->getExtension("native_profiler");
        $__internal_a77525a05b9f8a1e9f53689cad65f756f1c8f36a63391b4eced3d6fcbf505719->enter($__internal_a77525a05b9f8a1e9f53689cad65f756f1c8f36a63391b4eced3d6fcbf505719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a77525a05b9f8a1e9f53689cad65f756f1c8f36a63391b4eced3d6fcbf505719->leave($__internal_a77525a05b9f8a1e9f53689cad65f756f1c8f36a63391b4eced3d6fcbf505719_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f65aaa82e8a9f9920de6a51860f17cd5018dac4dd9abb52bc3563d40761c8969 = $this->env->getExtension("native_profiler");
        $__internal_f65aaa82e8a9f9920de6a51860f17cd5018dac4dd9abb52bc3563d40761c8969->enter($__internal_f65aaa82e8a9f9920de6a51860f17cd5018dac4dd9abb52bc3563d40761c8969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f65aaa82e8a9f9920de6a51860f17cd5018dac4dd9abb52bc3563d40761c8969->leave($__internal_f65aaa82e8a9f9920de6a51860f17cd5018dac4dd9abb52bc3563d40761c8969_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53094cb782bc9045a1cebef69150ca3d07346b4725f4926e31b75ba790b2f389 = $this->env->getExtension("native_profiler");
        $__internal_53094cb782bc9045a1cebef69150ca3d07346b4725f4926e31b75ba790b2f389->enter($__internal_53094cb782bc9045a1cebef69150ca3d07346b4725f4926e31b75ba790b2f389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_53094cb782bc9045a1cebef69150ca3d07346b4725f4926e31b75ba790b2f389->leave($__internal_53094cb782bc9045a1cebef69150ca3d07346b4725f4926e31b75ba790b2f389_prof);

    }

    public function getTemplateName()
    {
        return "::base_BU.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
