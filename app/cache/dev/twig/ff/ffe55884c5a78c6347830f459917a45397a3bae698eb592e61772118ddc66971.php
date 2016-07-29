<?php

/* ::basePop.html.twig */
class __TwigTemplate_334f522150a6b207c95f0868ac850acf7a5d108afb30a9160550a9f632508f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aeef6b402bdc02ed8b34e1eeecd4724d509c64db470fa2378339bc3bc5630eb = $this->env->getExtension("native_profiler");
        $__internal_7aeef6b402bdc02ed8b34e1eeecd4724d509c64db470fa2378339bc3bc5630eb->enter($__internal_7aeef6b402bdc02ed8b34e1eeecd4724d509c64db470fa2378339bc3bc5630eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basePop.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
    <html>
        <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Plataforma Operaciones IncGroup\">
        <meta name=\"author\" content=\"Sinaptica\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "        </head>
        <body>

        <!-- topbar starts -->
        

        <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            
            <div id=\"contenido\" style=\"margin-left:20px;\">

            <div id=\"content\" class=\"span10\">
                ";
        // line 47
        echo "                
                <noscript>
                    <div class=\"alert alert-block span10\">
                        <h4 class=\"alert-heading\">Warning!</h4>
                        <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>

                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 56
            echo "                     <div class=\"alert alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 58
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 63
            echo "                     <div class=\"alert alert-error\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 65
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 70
            echo "                     <div class=\"alert alert-error\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 72
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
                
                ";
        // line 77
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 82
        echo "            </div>
        </div>
        </div>



        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "    </body>
</html>
";
        
        $__internal_7aeef6b402bdc02ed8b34e1eeecd4724d509c64db470fa2378339bc3bc5630eb->leave($__internal_7aeef6b402bdc02ed8b34e1eeecd4724d509c64db470fa2378339bc3bc5630eb_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_2508b4ead473cf95216914220f0987b483affea905684943d47be39e50935124 = $this->env->getExtension("native_profiler");
        $__internal_2508b4ead473cf95216914220f0987b483affea905684943d47be39e50935124->enter($__internal_2508b4ead473cf95216914220f0987b483affea905684943d47be39e50935124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Operaciones";
        
        $__internal_2508b4ead473cf95216914220f0987b483affea905684943d47be39e50935124->leave($__internal_2508b4ead473cf95216914220f0987b483affea905684943d47be39e50935124_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34fa6c80ae93d018a8dfb3686f2276555927f2597c51aa1b5fc1b8719f76e45b = $this->env->getExtension("native_profiler");
        $__internal_34fa6c80ae93d018a8dfb3686f2276555927f2597c51aa1b5fc1b8719f76e45b->enter($__internal_34fa6c80ae93d018a8dfb3686f2276555927f2597c51aa1b5fc1b8719f76e45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
            <!-- The styles -->
            <style type=\"text/css\">
              body {
                padding-bottom: 40px;
              }
              .sidebar-nav {
                padding: 9px 0;
              }
            </style>
    
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-cerulean.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           
        ";
        
        $__internal_34fa6c80ae93d018a8dfb3686f2276555927f2597c51aa1b5fc1b8719f76e45b->leave($__internal_34fa6c80ae93d018a8dfb3686f2276555927f2597c51aa1b5fc1b8719f76e45b_prof);

    }

    // line 77
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_2e6624f4645860d347d40e3da1698aad11ff6474f137a711ece547d546422237 = $this->env->getExtension("native_profiler");
        $__internal_2e6624f4645860d347d40e3da1698aad11ff6474f137a711ece547d546422237->enter($__internal_2e6624f4645860d347d40e3da1698aad11ff6474f137a711ece547d546422237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 78
        echo "

            
                ";
        
        $__internal_2e6624f4645860d347d40e3da1698aad11ff6474f137a711ece547d546422237->leave($__internal_2e6624f4645860d347d40e3da1698aad11ff6474f137a711ece547d546422237_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7538db2df0d1e75a8c9b612d171a68fd2e468fe7d5f0f23ed2c202a46182187 = $this->env->getExtension("native_profiler");
        $__internal_b7538db2df0d1e75a8c9b612d171a68fd2e468fe7d5f0f23ed2c202a46182187->enter($__internal_b7538db2df0d1e75a8c9b612d171a68fd2e468fe7d5f0f23ed2c202a46182187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/charisma.js"), "html", null, true);
        echo "\"></script>
            <script>
\t\t\t\$(document).ready(function(){
\t\t\t\t//Examples of how to assign the Colorbox event to elements
\t\t\t\t\$(\".ajax-lightbox\").colorbox();
\t\t\t});
\t\t</script>

        ";
        
        $__internal_b7538db2df0d1e75a8c9b612d171a68fd2e468fe7d5f0f23ed2c202a46182187->leave($__internal_b7538db2df0d1e75a8c9b612d171a68fd2e468fe7d5f0f23ed2c202a46182187_prof);

    }

    public function getTemplateName()
    {
        return "::basePop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 90,  210 => 89,  204 => 88,  194 => 78,  188 => 77,  178 => 22,  165 => 11,  159 => 10,  147 => 9,  138 => 99,  136 => 88,  128 => 82,  126 => 77,  122 => 75,  113 => 72,  109 => 70,  105 => 69,  102 => 68,  93 => 65,  89 => 63,  85 => 62,  82 => 61,  73 => 58,  69 => 56,  65 => 55,  55 => 47,  41 => 25,  39 => 10,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/base.html.twig #}*/
/* <!DOCTYPE html>*/
/*     <html>*/
/*         <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="Plataforma Operaciones IncGroup">*/
/*         <meta name="author" content="Sinaptica">*/
/*         <title>{% block title %}Operaciones{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* */
/*             <!-- The styles -->*/
/*             <style type="text/css">*/
/*               body {*/
/*                 padding-bottom: 40px;*/
/*               }*/
/*               .sidebar-nav {*/
/*                 padding: 9px 0;*/
/*               }*/
/*             </style>*/
/*     */
/*             <link href="{{ asset('css/bootstrap-cerulean.css') }}" type="text/css" rel="stylesheet" />*/
/*            */
/*         {% endblock %}*/
/*         </head>*/
/*         <body>*/
/* */
/*         <!-- topbar starts -->*/
/*         */
/* */
/*         <div class="container-fluid">*/
/*         <div class="row-fluid">*/
/*             */
/*             <div id="contenido" style="margin-left:20px;">*/
/* */
/*             <div id="content" class="span10">*/
/*                 {# <div>*/
/*                     <ul class="breadcrumb">*/
/*                         <li>*/
/*                             <a href="#">Home</a> <span class="divider">/</span>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Dashboard</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div> #}*/
/*                 */
/*                 <noscript>*/
/*                     <div class="alert alert-block span10">*/
/*                         <h4 class="alert-heading">Warning!</h4>*/
/*                         <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>*/
/*                     </div>*/
/*                 </noscript>*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                      <div class="alert alert-success">*/
/*                             <button type="button" class="close" data-dismiss="alert">×</button>*/
/*                             {{ flashMessage }}*/
/*                     </div>       */
/*                 {% endfor %}*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                      <div class="alert alert-error">*/
/*                             <button type="button" class="close" data-dismiss="alert">×</button>*/
/*                             {{ flashMessage }}*/
/*                     </div>       */
/*                 {% endfor %}*/
/*                 */
/*                 {% for flashMessage in app.session.flashbag.get('warning') %}*/
/*                      <div class="alert alert-error">*/
/*                             <button type="button" class="close" data-dismiss="alert">×</button>*/
/*                             {{ flashMessage }}*/
/*                     </div>       */
/*                 {% endfor %}*/
/* */
/*                 */
/*                 {% block cuerpo %}*/
/* */
/* */
/*             */
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/* */
/* */
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/jquery-1.7.2.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('js/charisma.js') }}"></script>*/
/*             <script>*/
/* 			$(document).ready(function(){*/
/* 				//Examples of how to assign the Colorbox event to elements*/
/* 				$(".ajax-lightbox").colorbox();*/
/* 			});*/
/* 		</script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
