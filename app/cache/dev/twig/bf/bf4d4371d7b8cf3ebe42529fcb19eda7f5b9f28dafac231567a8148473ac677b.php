<?php

/* ::base.html.twig */
class __TwigTemplate_07640e88ea3f8959c3ad9b4d2519c287a9d7cfc8171d85a0a9600ac18313f9cf extends Twig_Template
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
        $__internal_f43a8bfc34064b2f80c9633404575885d99bf5a6bd82c406cc0f4004a3943c01 = $this->env->getExtension("native_profiler");
        $__internal_f43a8bfc34064b2f80c9633404575885d99bf5a6bd82c406cc0f4004a3943c01->enter($__internal_f43a8bfc34064b2f80c9633404575885d99bf5a6bd82c406cc0f4004a3943c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 46
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
                    <a href=\"\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/incoperations_logo.png"), "html", null, true);
        echo "\" /></a>
                    
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
                        <a class=\"btn dropdown-toggle user\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"icon-user\"></i><span class=\"hidden-phone\">
                                                            ";
        // line 84
        if ($this->env->getExtension('security')->isGranted("ROLE_USER0")) {
            // line 85
            echo "                                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo " 
                                                            ";
        } else {
            // line 86
            echo " 
                                                                Invitado
                                                            ";
        }
        // line 88
        echo "</span>
                            <span class=\"caret\"></span>
                        </a>
                        ";
        // line 91
        if ($this->env->getExtension('security')->isGranted("ROLE_USER0")) {
            // line 92
            echo "                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Salir</a></li>
                            </ul>
                        ";
        } else {
            // line 96
            echo "                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Ingreso</a></li>
                            </ul>
                        ";
        }
        // line 100
        echo "

                    </div>
                    <!-- user dropdown ends -->
                    
                    ";
        // line 117
        echo "                </div>
            </div>
        </div>
        <!-- topbar ends -->

        <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            
             <div id=\"sidebar\">
                    ";
        // line 126
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesBaseBundle:Menu:menuPrincipal"));
        echo " 
            </div>

            <div id=\"contenido\" style=\"margin-left:20px;\">

            <div id=\"content\" class=\"span10\">
                ";
        // line 142
        echo "                
                <noscript>
                    <div class=\"alert alert-block span10\">
                        <h4 class=\"alert-heading\">Warning!</h4>
                        <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>

                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 151
            echo "                     <div class=\"alert alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 153
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
                ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 158
            echo "                     <div class=\"alert alert-error\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 160
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                
                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 165
            echo "                     <div class=\"alert alert-error\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 167
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "
                
                ";
        // line 172
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 177
        echo "            </div>
        </div>
        </div>



        ";
        // line 183
        $this->displayBlock('javascripts', $context, $blocks);
        // line 266
        echo "    </body>
</html>
";
        
        $__internal_f43a8bfc34064b2f80c9633404575885d99bf5a6bd82c406cc0f4004a3943c01->leave($__internal_f43a8bfc34064b2f80c9633404575885d99bf5a6bd82c406cc0f4004a3943c01_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b90d94a6c6d6eb2ac35d0cf495c84541e0ee2c7545e5ae528c932ef972fd642d = $this->env->getExtension("native_profiler");
        $__internal_b90d94a6c6d6eb2ac35d0cf495c84541e0ee2c7545e5ae528c932ef972fd642d->enter($__internal_b90d94a6c6d6eb2ac35d0cf495c84541e0ee2c7545e5ae528c932ef972fd642d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Operaciones";
        
        $__internal_b90d94a6c6d6eb2ac35d0cf495c84541e0ee2c7545e5ae528c932ef972fd642d->leave($__internal_b90d94a6c6d6eb2ac35d0cf495c84541e0ee2c7545e5ae528c932ef972fd642d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c77557830bfdc10e214764436eb167ee87fd3ac17fd6d75c799f81397273c9cc = $this->env->getExtension("native_profiler");
        $__internal_c77557830bfdc10e214764436eb167ee87fd3ac17fd6d75c799f81397273c9cc->enter($__internal_c77557830bfdc10e214764436eb167ee87fd3ac17fd6d75c799f81397273c9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    
            <!--<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/incentives.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> -->
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
            <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel='stylesheet'>
            

            <!-- javascript -->                
            <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uploadify.css"), "html", null, true);
        echo "\" rel='stylesheet'>
        ";
        
        $__internal_c77557830bfdc10e214764436eb167ee87fd3ac17fd6d75c799f81397273c9cc->leave($__internal_c77557830bfdc10e214764436eb167ee87fd3ac17fd6d75c799f81397273c9cc_prof);

    }

    // line 172
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_c9421ae8d6373ee538f5d60114e3173e612dbfcfa664a2472fe1ab020c05daea = $this->env->getExtension("native_profiler");
        $__internal_c9421ae8d6373ee538f5d60114e3173e612dbfcfa664a2472fe1ab020c05daea->enter($__internal_c9421ae8d6373ee538f5d60114e3173e612dbfcfa664a2472fe1ab020c05daea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 173
        echo "

            
                ";
        
        $__internal_c9421ae8d6373ee538f5d60114e3173e612dbfcfa664a2472fe1ab020c05daea->leave($__internal_c9421ae8d6373ee538f5d60114e3173e612dbfcfa664a2472fe1ab020c05daea_prof);

    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c3983300cb584e1dd1118001d2fe889175c2a7d6b376866a38405c9a0ad16c6 = $this->env->getExtension("native_profiler");
        $__internal_6c3983300cb584e1dd1118001d2fe889175c2a7d6b376866a38405c9a0ad16c6->enter($__internal_6c3983300cb584e1dd1118001d2fe889175c2a7d6b376866a38405c9a0ad16c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 184
        echo "            <!-- <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  -->

            
            <!-- jQuery -->
            <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- jQuery UI -->
            <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- transition / effect library -->
            <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-transition.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- alert enhancer library -->
            <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-alert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- modal / dialog library -->
            <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-modal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- custom dropdown library -->
            <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-dropdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- scrolspy library -->
            <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for creating tabs -->
            <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tab.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for advanced tooltip -->
            <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tooltip.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- popover effect library -->
            <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-popover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- button enhancer library -->
            <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-button.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- accordion library (optional, not used in demo) -->
            <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-collapse.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- carousel slideshow library (optional, not used in demo) -->
            <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- autocomplete library -->
            <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-typeahead.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- tour library -->
            <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tour.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for cookie management -->
            <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- calander plugin -->
            <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- data table plugin -->
            <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ColumnFilterWidgets.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/dataTables.fixedColumns.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- chart libraries start -->
            <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
            <!-- chart libraries end -->

            <!-- select or dropdown enhancer -->
            <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
            <!-- checkbox, radio, and file input styler -->
            <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
            <!-- plugin for gallery image view -->
            <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.colorbox.min.js"), "html", null, true);
        echo "\"></script>
            <!-- rich text editor library -->
            <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
            <!-- notification plugin -->
            <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
            <!-- file manager library -->
            <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
            <!-- star rating plugin -->
            <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
            <!-- for iOS style toggle switch -->
            <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
            <!-- autogrowing textarea plugin -->
            <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
            <!-- multiple file upload plugin -->
            <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.history.js"), "html", null, true);
        echo "\"></script>
            <!-- application script for Charisma demo -->
            <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/charisma.js"), "html", null, true);
        echo "\"></script>
            <script>
\t\t\t\$(document).ready(function(){
\t\t\t\t//Examples of how to assign the Colorbox event to elements
\t\t\t\t\$(\".ajax-lightbox\").colorbox();
\t\t\t});
\t\t</script>

        ";
        
        $__internal_6c3983300cb584e1dd1118001d2fe889175c2a7d6b376866a38405c9a0ad16c6->leave($__internal_6c3983300cb584e1dd1118001d2fe889175c2a7d6b376866a38405c9a0ad16c6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 257,  562 => 255,  557 => 253,  552 => 251,  547 => 249,  542 => 247,  537 => 245,  532 => 243,  527 => 241,  522 => 239,  517 => 237,  512 => 235,  505 => 231,  501 => 230,  497 => 229,  493 => 228,  489 => 227,  483 => 224,  479 => 223,  475 => 222,  470 => 220,  465 => 218,  460 => 216,  455 => 214,  450 => 212,  445 => 210,  440 => 208,  435 => 206,  430 => 204,  425 => 202,  420 => 200,  415 => 198,  410 => 196,  405 => 194,  400 => 192,  395 => 190,  390 => 188,  382 => 184,  376 => 183,  366 => 173,  360 => 172,  351 => 44,  344 => 40,  340 => 39,  336 => 38,  332 => 37,  328 => 36,  324 => 35,  320 => 34,  316 => 33,  312 => 32,  308 => 31,  304 => 30,  300 => 29,  296 => 28,  292 => 27,  288 => 26,  284 => 25,  280 => 24,  276 => 23,  272 => 22,  259 => 11,  253 => 10,  241 => 9,  232 => 266,  230 => 183,  222 => 177,  220 => 172,  216 => 170,  207 => 167,  203 => 165,  199 => 164,  196 => 163,  187 => 160,  183 => 158,  179 => 157,  176 => 156,  167 => 153,  163 => 151,  159 => 150,  149 => 142,  140 => 126,  129 => 117,  122 => 100,  116 => 97,  113 => 96,  107 => 93,  104 => 92,  102 => 91,  97 => 88,  92 => 86,  86 => 85,  84 => 84,  55 => 58,  41 => 46,  39 => 10,  35 => 9,  26 => 2,);
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
/*             <!--<link href="{{ asset('css/incentives.css') }}" type="text/css" rel="stylesheet" /> -->*/
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
/*             <link href="{{ asset('css/jquery.dataTables.css') }}" rel='stylesheet'>*/
/*             */
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
/*                     <a href=""><img src="{{ asset('img/incoperations_logo.png') }}" /></a>*/
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
/*                         <a class="btn dropdown-toggle user" data-toggle="dropdown" href="#">*/
/*                             <i class="icon-user"></i><span class="hidden-phone">*/
/*                                                             {% if is_granted('ROLE_USER0')%}*/
/*                                                             {{ app.user.nombre }} */
/*                                                             {% else %} */
/*                                                                 Invitado*/
/*                                                             {% endif %}</span>*/
/*                             <span class="caret"></span>*/
/*                         </a>*/
/*                         {% if is_granted('ROLE_USER0') %}*/
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
/*             <script src="{{ asset('js/ColumnFilterWidgets.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('js/dataTables.fixedColumns.js') }}" type="text/javascript"></script>*/
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
