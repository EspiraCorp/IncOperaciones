<?php

/* ::base_.html.twig */
class __TwigTemplate_337ed3d631a71d5b13ed717690cbbb1e6c926341fcc31b10394db5630e27f0dc extends Twig_Template
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
        $__internal_1b1f2dac85ef7e439f5a9375a9e68c506f58993c740d213cfedcaeaddabea1a5 = $this->env->getExtension("native_profiler");
        $__internal_1b1f2dac85ef7e439f5a9375a9e68c506f58993c740d213cfedcaeaddabea1a5->enter($__internal_1b1f2dac85ef7e439f5a9375a9e68c506f58993c740d213cfedcaeaddabea1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
    <html>
        <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.\">
        <meta name=\"author\" content=\"Muhammad Usman\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "        </head>
        <body>

        <!-- topbar starts -->
        <div class=\"navbar\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a class=\"brand\" href=\"index.html\"> <img alt=\"Charisma Logo\" src=\"img/logo20.png\" /> <span>Charisma</span></a>
                    
                    <!-- theme selector starts -->
                   <!--  <div class=\"btn-group pull-right theme-container\" >
                        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"icon-tint\"></i><span class=\"hidden-phone\"> Change Theme / Skin</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\" id=\"themes\">
                            <li><a data-value=\"classic\" href=\"#\"><i class=\"icon-blank\"></i> Classic</a></li>
                            <li><a data-value=\"cerulean\" href=\"#\"><i class=\"icon-blank\"></i> Cerulean</a></li>
                            <li><a data-value=\"cyborg\" href=\"#\"><i class=\"icon-blank\"></i> Cyborg</a></li>
                            <li><a data-value=\"redy\" href=\"#\"><i class=\"icon-blank\"></i> Redy</a></li>
                            <li><a data-value=\"journal\" href=\"#\"><i class=\"icon-blank\"></i> Journal</a></li>
                            <li><a data-value=\"simplex\" href=\"#\"><i class=\"icon-blank\"></i> Simplex</a></li>
                            <li><a data-value=\"slate\" href=\"#\"><i class=\"icon-blank\"></i> Slate</a></li>
                            <li><a data-value=\"spacelab\" href=\"#\"><i class=\"icon-blank\"></i> Spacelab</a></li>
                            <li><a data-value=\"united\" href=\"#\"><i class=\"icon-blank\"></i> United</a></li>
                        </ul>
                    </div> -->
                    <!-- theme selector ends -->
                    
                    <!-- user dropdown starts -->
                      <div class=\"btn-group pull-right\" >
                        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"icon-user\"></i><span class=\"hidden-phone\">
                                                            ";
        // line 82
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 83
            echo "                                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo " 
                                                            ";
        } else {
            // line 84
            echo " 
                                                                Invitado
                                                            ";
        }
        // line 86
        echo "</span>
                            <span class=\"caret\"></span>
                        </a>
                        ";
        // line 89
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 90
            echo "                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Salir</a></li>
                            </ul>
                        ";
        } else {
            // line 94
            echo "                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Ingreso</a></li>
                            </ul>
                        ";
        }
        // line 98
        echo "

                    </div>
                    <!-- user dropdown ends -->
                    
                    ";
        // line 115
        echo "                </div>
            </div>
        </div>
        <!-- topbar ends -->

        <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            
             <div id=\"sidebar\">
                    ";
        // line 124
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesBaseBundle:Menu:menuPrincipal"));
        echo " 
            </div>

            <div id=\"contenido\" style=\"margin-left:20px;\">

            <div id=\"content\" class=\"span10\">
                ";
        // line 140
        echo "                
                <noscript>
                    <div class=\"alert alert-block span10\">
                        <h4 class=\"alert-heading\">Warning!</h4>
                        <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>

                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 149
            echo "                     <div class=\"alert alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 151
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
                ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 156
            echo "                     <div class=\"alert alert-error\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 158
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                
                ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 163
            echo "                     <div class=\"alert alert-error\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 165
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "
                
                ";
        // line 170
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 175
        echo "            </div>
        </div>
        </div>



        ";
        // line 181
        $this->displayBlock('javascripts', $context, $blocks);
        // line 256
        echo "    </body>
</html>
";
        
        $__internal_1b1f2dac85ef7e439f5a9375a9e68c506f58993c740d213cfedcaeaddabea1a5->leave($__internal_1b1f2dac85ef7e439f5a9375a9e68c506f58993c740d213cfedcaeaddabea1a5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d8dee2264ec7a5587f016e0c4ae5ec2b623250d57a249cefe8e9623f790a751 = $this->env->getExtension("native_profiler");
        $__internal_3d8dee2264ec7a5587f016e0c4ae5ec2b623250d57a249cefe8e9623f790a751->enter($__internal_3d8dee2264ec7a5587f016e0c4ae5ec2b623250d57a249cefe8e9623f790a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Operaciones";
        
        $__internal_3d8dee2264ec7a5587f016e0c4ae5ec2b623250d57a249cefe8e9623f790a751->leave($__internal_3d8dee2264ec7a5587f016e0c4ae5ec2b623250d57a249cefe8e9623f790a751_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbb895fb52aeb164fd8acadf5f6325c7212b1a4380ff15c9ac50ed4cec886c9e = $this->env->getExtension("native_profiler");
        $__internal_dbb895fb52aeb164fd8acadf5f6325c7212b1a4380ff15c9ac50ed4cec886c9e->enter($__internal_dbb895fb52aeb164fd8acadf5f6325c7212b1a4380ff15c9ac50ed4cec886c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
            <!-- The styles -->
            <link id=\"bs-css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-cerulean.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <style type=\"text/css\">
              body {
                padding-bottom: 40px;
              }
              .sidebar-nav {
                padding: 9px 0;
              }
            </style>
    
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-cerulean.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui-1.8.21.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fullcalendar.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fullcalendar.print.css"), "html", null, true);
        echo "\" rel='stylesheet'  media='print'>
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/chosen.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uniform.default.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/colorbox.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.cleditor.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.noty.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/noty_theme_default.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/elfinder.min.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/elfinder.theme.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.iphone.toggle.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/opa-icons.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uploadify.css"), "html", null, true);
        echo "\" rel='stylesheet'>

            <!-- javascript -->                
            <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uploadify.css"), "html", null, true);
        echo "\" rel='stylesheet'>
        ";
        
        $__internal_dbb895fb52aeb164fd8acadf5f6325c7212b1a4380ff15c9ac50ed4cec886c9e->leave($__internal_dbb895fb52aeb164fd8acadf5f6325c7212b1a4380ff15c9ac50ed4cec886c9e_prof);

    }

    // line 170
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_0c5c5c18b2bf3673126359b7ab5307aad232d42c2a6c7d6bfa106b460a459056 = $this->env->getExtension("native_profiler");
        $__internal_0c5c5c18b2bf3673126359b7ab5307aad232d42c2a6c7d6bfa106b460a459056->enter($__internal_0c5c5c18b2bf3673126359b7ab5307aad232d42c2a6c7d6bfa106b460a459056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 171
        echo "

            
                ";
        
        $__internal_0c5c5c18b2bf3673126359b7ab5307aad232d42c2a6c7d6bfa106b460a459056->leave($__internal_0c5c5c18b2bf3673126359b7ab5307aad232d42c2a6c7d6bfa106b460a459056_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79aa5c2593bd244a584320470b74351f4ba9d47a78387f8551b0953ecdc24e45 = $this->env->getExtension("native_profiler");
        $__internal_79aa5c2593bd244a584320470b74351f4ba9d47a78387f8551b0953ecdc24e45->enter($__internal_79aa5c2593bd244a584320470b74351f4ba9d47a78387f8551b0953ecdc24e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 182
        echo "            <!-- <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  -->

            
            <!-- jQuery -->
            <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- jQuery UI -->
            <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- transition / effect library -->
            <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-transition.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- alert enhancer library -->
            <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-alert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- modal / dialog library -->
            <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-modal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- custom dropdown library -->
            <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-dropdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- scrolspy library -->
            <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for creating tabs -->
            <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tab.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for advanced tooltip -->
            <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tooltip.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- popover effect library -->
            <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-popover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- button enhancer library -->
            <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-button.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- accordion library (optional, not used in demo) -->
            <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-collapse.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- carousel slideshow library (optional, not used in demo) -->
            <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- autocomplete library -->
            <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-typeahead.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- tour library -->
            <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tour.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for cookie management -->
            <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- calander plugin -->
            <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- data table plugin -->
            <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- chart libraries start -->
            <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
            <!-- chart libraries end -->

            <!-- select or dropdown enhancer -->
            <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
            <!-- checkbox, radio, and file input styler -->
            <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
            <!-- plugin for gallery image view -->
            <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.colorbox.min.js"), "html", null, true);
        echo "\"></script>
            <!-- rich text editor library -->
            <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
            <!-- notification plugin -->
            <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
            <!-- file manager library -->
            <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
            <!-- star rating plugin -->
            <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
            <!-- for iOS style toggle switch -->
            <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
            <!-- autogrowing textarea plugin -->
            <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
            <!-- multiple file upload plugin -->
            <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.history.js"), "html", null, true);
        echo "\"></script>
            <!-- application script for Charisma demo -->
            <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/charisma.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_79aa5c2593bd244a584320470b74351f4ba9d47a78387f8551b0953ecdc24e45->leave($__internal_79aa5c2593bd244a584320470b74351f4ba9d47a78387f8551b0953ecdc24e45_prof);

    }

    public function getTemplateName()
    {
        return "::base_.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 253,  546 => 251,  541 => 249,  536 => 247,  531 => 245,  526 => 243,  521 => 241,  516 => 239,  511 => 237,  506 => 235,  501 => 233,  496 => 231,  489 => 227,  485 => 226,  481 => 225,  477 => 224,  473 => 223,  467 => 220,  462 => 218,  457 => 216,  452 => 214,  447 => 212,  442 => 210,  437 => 208,  432 => 206,  427 => 204,  422 => 202,  417 => 200,  412 => 198,  407 => 196,  402 => 194,  397 => 192,  392 => 190,  387 => 188,  382 => 186,  374 => 182,  368 => 181,  358 => 171,  352 => 170,  343 => 42,  337 => 39,  333 => 38,  329 => 37,  325 => 36,  321 => 35,  317 => 34,  313 => 33,  309 => 32,  305 => 31,  301 => 30,  297 => 29,  293 => 28,  289 => 27,  285 => 26,  281 => 25,  277 => 24,  273 => 23,  260 => 13,  256 => 11,  250 => 10,  238 => 9,  229 => 256,  227 => 181,  219 => 175,  217 => 170,  213 => 168,  204 => 165,  200 => 163,  196 => 162,  193 => 161,  184 => 158,  180 => 156,  176 => 155,  173 => 154,  164 => 151,  160 => 149,  156 => 148,  146 => 140,  137 => 124,  126 => 115,  119 => 98,  113 => 95,  110 => 94,  104 => 91,  101 => 90,  99 => 89,  94 => 86,  89 => 84,  83 => 83,  81 => 82,  41 => 44,  39 => 10,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/base.html.twig #}*/
/* <!DOCTYPE html>*/
/*     <html>*/
/*         <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">*/
/*         <meta name="author" content="Muhammad Usman">*/
/*         <title>{% block title %}Operaciones{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* */
/*             <!-- The styles -->*/
/*             <link id="bs-css" href="{{ asset('css/bootstrap-cerulean.css') }}" rel="stylesheet">*/
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
/*             <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('css/charisma-app.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('css/jquery-ui-1.8.21.custom.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('css/fullcalendar.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/fullcalendar.print.css') }}" rel='stylesheet'  media='print'>*/
/*             <link href="{{ asset('css/chosen.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/uniform.default.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/colorbox.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/jquery.cleditor.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/jquery.noty.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/noty_theme_default.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/elfinder.min.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/elfinder.theme.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/jquery.iphone.toggle.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/opa-icons.css') }}" rel='stylesheet'>*/
/*             <link href="{{ asset('css/uploadify.css') }}" rel='stylesheet'>*/
/* */
/*             <!-- javascript -->                */
/*             <link href="{{ asset('css/uploadify.css') }}" rel='stylesheet'>*/
/*         {% endblock %}*/
/*         </head>*/
/*         <body>*/
/* */
/*         <!-- topbar starts -->*/
/*         <div class="navbar">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container-fluid">*/
/*                     <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </a>*/
/*                     <a class="brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Charisma</span></a>*/
/*                     */
/*                     <!-- theme selector starts -->*/
/*                    <!--  <div class="btn-group pull-right theme-container" >*/
/*                         <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                             <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>*/
/*                             <span class="caret"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu" id="themes">*/
/*                             <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>*/
/*                             <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>*/
/*                             <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>*/
/*                             <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>*/
/*                             <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>*/
/*                             <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>*/
/*                             <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>*/
/*                             <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>*/
/*                             <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>*/
/*                         </ul>*/
/*                     </div> -->*/
/*                     <!-- theme selector ends -->*/
/*                     */
/*                     <!-- user dropdown starts -->*/
/*                       <div class="btn-group pull-right" >*/
/*                         <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                             <i class="icon-user"></i><span class="hidden-phone">*/
/*                                                             {% if is_granted('ROLE_USER') %}*/
/*                                                             {{ app.user.nombre }} */
/*                                                             {% else %} */
/*                                                                 Invitado*/
/*                                                             {% endif %}</span>*/
/*                             <span class="caret"></span>*/
/*                         </a>*/
/*                         {% if is_granted('ROLE_USER') %}*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path( 'logout' ) }}">Salir</a></li>*/
/*                             </ul>*/
/*                         {% else %}*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path( 'login' ) }}">Ingreso</a></li>*/
/*                             </ul>*/
/*                         {% endif %}*/
/* */
/* */
/*                     </div>*/
/*                     <!-- user dropdown ends -->*/
/*                     */
/*                     {#*/
/*                     <div class="top-nav nav-collapse">*/
/*                         <ul class="nav">*/
/*                             <li><a href="#">Visit Site</a></li>*/
/*                             <li>*/
/*                                 <form class="navbar-search pull-left">*/
/*                                     <input placeholder="Search" class="search-query span2" name="query" type="text">*/
/*                                 </form>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div><!--/.nav-collapse -->*/
/*                     #}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- topbar ends -->*/
/* */
/*         <div class="container-fluid">*/
/*         <div class="row-fluid">*/
/*             */
/*              <div id="sidebar">*/
/*                     {{ render(controller('IncentivesBaseBundle:Menu:menuPrincipal')) }} */
/*             </div>*/
/* */
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
/*             <!-- <script src="{{ asset('/js/main.js') }}" type="text/javascript"></script>  -->*/
/* */
/*             */
/*             <!-- jQuery -->*/
/*             <script src="{{ asset('js/jquery-1.7.2.min.js') }}" type="text/javascript"></script>*/
/*             <!-- jQuery UI -->*/
/*             <script src="{{ asset('js/jquery-ui-1.8.21.custom.min.js') }}" type="text/javascript"></script>*/
/*             <!-- transition / effect library -->*/
/*             <script src="{{ asset('js/bootstrap-transition.js') }}" type="text/javascript"></script>*/
/*             <!-- alert enhancer library -->*/
/*             <script src="{{ asset('js/bootstrap-alert.js') }}" type="text/javascript"></script>*/
/*             <!-- modal / dialog library -->*/
/*             <script src="{{ asset('js/bootstrap-modal.js') }}" type="text/javascript"></script>*/
/*             <!-- custom dropdown library -->*/
/*             <script src="{{ asset('js/bootstrap-dropdown.js') }}" type="text/javascript"></script>*/
/*             <!-- scrolspy library -->*/
/*             <script src="{{ asset('js/bootstrap-scrollspy.js') }}" type="text/javascript"></script>*/
/*             <!-- library for creating tabs -->*/
/*             <script src="{{ asset('js/bootstrap-tab.js') }}" type="text/javascript"></script>*/
/*             <!-- library for advanced tooltip -->*/
/*             <script src="{{ asset('js/bootstrap-tooltip.js') }}" type="text/javascript"></script>*/
/*             <!-- popover effect library -->*/
/*             <script src="{{ asset('js/bootstrap-popover.js') }}" type="text/javascript"></script>*/
/*             <!-- button enhancer library -->*/
/*             <script src="{{ asset('js/bootstrap-button.js') }}" type="text/javascript"></script>*/
/*             <!-- accordion library (optional, not used in demo) -->*/
/*             <script src="{{ asset('js/bootstrap-collapse.js') }}" type="text/javascript"></script>*/
/*             <!-- carousel slideshow library (optional, not used in demo) -->*/
/*             <script src="{{ asset('js/bootstrap-carousel.js') }}" type="text/javascript"></script>*/
/*             <!-- autocomplete library -->*/
/*             <script src="{{ asset('js/bootstrap-typeahead.js') }}" type="text/javascript"></script>*/
/*             <!-- tour library -->*/
/*             <script src="{{ asset('js/bootstrap-tour.js') }}" type="text/javascript"></script>*/
/*             <!-- library for cookie management -->*/
/*             <script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>*/
/*             <!-- calander plugin -->*/
/*             <script src="{{ asset('js/fullcalendar.min.js') }}" type="text/javascript"></script>*/
/*             <!-- data table plugin -->*/
/*             <script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>*/
/* */
/*             <!-- chart libraries start -->*/
/*             <script src="{{ asset('js/excanvas.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.flot.min.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.flot.pie.min.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.flot.stack.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>*/
/*             <!-- chart libraries end -->*/
/* */
/*             <!-- select or dropdown enhancer -->*/
/*             <script src="{{ asset('js/jquery.chosen.min.js') }}"></script>*/
/*             <!-- checkbox, radio, and file input styler -->*/
/*             <script src="{{ asset('js/jquery.uniform.min.js') }}"></script>*/
/*             <!-- plugin for gallery image view -->*/
/*             <script src="{{ asset('js/jquery.colorbox.min.js') }}"></script>*/
/*             <!-- rich text editor library -->*/
/*             <script src="{{ asset('js/jquery.cleditor.min.js') }}"></script>*/
/*             <!-- notification plugin -->*/
/*             <script src="{{ asset('js/jquery.noty.js') }}"></script>*/
/*             <!-- file manager library -->*/
/*             <script src="{{ asset('js/jquery.elfinder.min.js') }}"></script>*/
/*             <!-- star rating plugin -->*/
/*             <script src="{{ asset('js/jquery.raty.min.js') }}"></script>*/
/*             <!-- for iOS style toggle switch -->*/
/*             <script src="{{ asset('js/jquery.iphone.toggle.js') }}"></script>*/
/*             <!-- autogrowing textarea plugin -->*/
/*             <script src="{{ asset('js/jquery.autogrow-textarea.js') }}"></script>*/
/*             <!-- multiple file upload plugin -->*/
/*             <script src="{{ asset('js/jquery.uploadify-3.1.min.js') }}"></script>*/
/*             <!-- history.js for cross-browser state change on ajax -->*/
/*             <script src="{{ asset('js/jquery.history.js') }}"></script>*/
/*             <!-- application script for Charisma demo -->*/
/*             <script src="{{ asset('js/charisma.js') }}"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
