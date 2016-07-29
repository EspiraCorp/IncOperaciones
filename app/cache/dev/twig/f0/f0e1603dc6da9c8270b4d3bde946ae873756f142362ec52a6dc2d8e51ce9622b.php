<?php

/* ::base3.html.twig */
class __TwigTemplate_fc5cf173a403df9c0c4b73c084ab4afe36ac877fdf430b98d42f6578864353ba extends Twig_Template
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
        $__internal_1f84b8564cd8de99f6051018392337f99a917f65b8409f853e3183332ff18aba = $this->env->getExtension("native_profiler");
        $__internal_1f84b8564cd8de99f6051018392337f99a917f65b8409f853e3183332ff18aba->enter($__internal_1f84b8564cd8de99f6051018392337f99a917f65b8409f853e3183332ff18aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base3.html.twig"));

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
                                        
                    <!-- user dropdown starts -->
                    <div class=\"btn-group pull-right\" >
                        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"icon-user\"></i><span class=\"hidden-phone\">";
        // line 61
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesBaseBundle:Usuarios:nombre"));
        echo "</span>
                            <span class=\"caret\"></span>
                        </a>
                        ";
        // line 64
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 65
            echo "                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Salir</a></li>
                            </ul>
                        ";
        } else {
            // line 69
            echo "                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Ingreso</a></li>
                            </ul>
                        ";
        }
        // line 73
        echo "

                    </div>
                    <!-- user dropdown ends -->
                    
                </div>
            </div>
        </div>
        <!-- topbar ends -->

        <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            
             <div id=\"sidebar\">
                    ";
        // line 87
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesBaseBundle:Menu:menuPrincipal"));
        echo " 
            </div>

            <div id=\"contenido\" style=\"margin-left:20px;\">

            <div id=\"content\" class=\"span10\">              
                <noscript>
                    <div class=\"alert alert-block span10\">
                        <h4 class=\"alert-heading\">Warning!</h4>
                        <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>

                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 101
            echo "                     <div class=\"alert alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 103
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 108
            echo "                     <div class=\"alert alert-error\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 110
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                
                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 115
            echo "                     <div class=\"alert alert-error\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 117
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                
                ";
        // line 122
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 127
        echo "            </div>
        </div>
        </div>



        ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 208
        echo "    </body>
</html>
";
        
        $__internal_1f84b8564cd8de99f6051018392337f99a917f65b8409f853e3183332ff18aba->leave($__internal_1f84b8564cd8de99f6051018392337f99a917f65b8409f853e3183332ff18aba_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ebc4991979b5668f24ce9597ad44199595a38fbaf4b7b887ff950d8bce94d86 = $this->env->getExtension("native_profiler");
        $__internal_3ebc4991979b5668f24ce9597ad44199595a38fbaf4b7b887ff950d8bce94d86->enter($__internal_3ebc4991979b5668f24ce9597ad44199595a38fbaf4b7b887ff950d8bce94d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Operaciones";
        
        $__internal_3ebc4991979b5668f24ce9597ad44199595a38fbaf4b7b887ff950d8bce94d86->leave($__internal_3ebc4991979b5668f24ce9597ad44199595a38fbaf4b7b887ff950d8bce94d86_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc6e0494a569015290e22d152dd7ec307484991926aa58ed763c66c8ef58056b = $this->env->getExtension("native_profiler");
        $__internal_fc6e0494a569015290e22d152dd7ec307484991926aa58ed763c66c8ef58056b->enter($__internal_fc6e0494a569015290e22d152dd7ec307484991926aa58ed763c66c8ef58056b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
            <!-- The styles -->
            <link id=\"bs-css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-united.css"), "html", null, true);
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
        
        $__internal_fc6e0494a569015290e22d152dd7ec307484991926aa58ed763c66c8ef58056b->leave($__internal_fc6e0494a569015290e22d152dd7ec307484991926aa58ed763c66c8ef58056b_prof);

    }

    // line 122
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_64a657f53e650c55822e6a4f7316aabd131c3948ba8562386cfb1e0f323e49e6 = $this->env->getExtension("native_profiler");
        $__internal_64a657f53e650c55822e6a4f7316aabd131c3948ba8562386cfb1e0f323e49e6->enter($__internal_64a657f53e650c55822e6a4f7316aabd131c3948ba8562386cfb1e0f323e49e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 123
        echo "

            
                ";
        
        $__internal_64a657f53e650c55822e6a4f7316aabd131c3948ba8562386cfb1e0f323e49e6->leave($__internal_64a657f53e650c55822e6a4f7316aabd131c3948ba8562386cfb1e0f323e49e6_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a500e655fce84e7b906eb1b2c4e2c632627a8c5e3d108f14327c85d65cb595fc = $this->env->getExtension("native_profiler");
        $__internal_a500e655fce84e7b906eb1b2c4e2c632627a8c5e3d108f14327c85d65cb595fc->enter($__internal_a500e655fce84e7b906eb1b2c4e2c632627a8c5e3d108f14327c85d65cb595fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "            <!-- <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  -->

            
            <!-- jQuery -->
            <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- jQuery UI -->
            <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- transition / effect library -->
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-transition.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- alert enhancer library -->
            <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-alert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- modal / dialog library -->
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-modal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- custom dropdown library -->
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-dropdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- scrolspy library -->
            <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for creating tabs -->
            <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tab.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for advanced tooltip -->
            <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tooltip.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- popover effect library -->
            <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-popover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- button enhancer library -->
            <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-button.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- accordion library (optional, not used in demo) -->
            <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-collapse.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- carousel slideshow library (optional, not used in demo) -->
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- autocomplete library -->
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-typeahead.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- tour library -->
            <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tour.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- library for cookie management -->
            <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- calander plugin -->
            <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- data table plugin -->
            <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- chart libraries start -->
            <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
            <!-- chart libraries end -->

            <!-- select or dropdown enhancer -->
            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
            <!-- checkbox, radio, and file input styler -->
            <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
            <!-- plugin for gallery image view -->
            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.colorbox.min.js"), "html", null, true);
        echo "\"></script>
            <!-- rich text editor library -->
            <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
            <!-- notification plugin -->
            <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
            <!-- file manager library -->
            <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
            <!-- star rating plugin -->
            <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
            <!-- for iOS style toggle switch -->
            <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
            <!-- autogrowing textarea plugin -->
            <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
            <!-- multiple file upload plugin -->
            <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.history.js"), "html", null, true);
        echo "\"></script>
            <!-- application script for Charisma demo -->
            <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/charisma.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_a500e655fce84e7b906eb1b2c4e2c632627a8c5e3d108f14327c85d65cb595fc->leave($__internal_a500e655fce84e7b906eb1b2c4e2c632627a8c5e3d108f14327c85d65cb595fc_prof);

    }

    public function getTemplateName()
    {
        return "::base3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 205,  508 => 203,  503 => 201,  498 => 199,  493 => 197,  488 => 195,  483 => 193,  478 => 191,  473 => 189,  468 => 187,  463 => 185,  458 => 183,  451 => 179,  447 => 178,  443 => 177,  439 => 176,  435 => 175,  429 => 172,  424 => 170,  419 => 168,  414 => 166,  409 => 164,  404 => 162,  399 => 160,  394 => 158,  389 => 156,  384 => 154,  379 => 152,  374 => 150,  369 => 148,  364 => 146,  359 => 144,  354 => 142,  349 => 140,  344 => 138,  336 => 134,  330 => 133,  320 => 123,  314 => 122,  305 => 42,  299 => 39,  295 => 38,  291 => 37,  287 => 36,  283 => 35,  279 => 34,  275 => 33,  271 => 32,  267 => 31,  263 => 30,  259 => 29,  255 => 28,  251 => 27,  247 => 26,  243 => 25,  239 => 24,  235 => 23,  222 => 13,  218 => 11,  212 => 10,  200 => 9,  191 => 208,  189 => 133,  181 => 127,  179 => 122,  175 => 120,  166 => 117,  162 => 115,  158 => 114,  155 => 113,  146 => 110,  142 => 108,  138 => 107,  135 => 106,  126 => 103,  122 => 101,  118 => 100,  102 => 87,  86 => 73,  80 => 70,  77 => 69,  71 => 66,  68 => 65,  66 => 64,  60 => 61,  41 => 44,  39 => 10,  35 => 9,  26 => 2,);
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
/*             <link id="bs-css" href="{{ asset('css/bootstrap-united.css') }}" rel="stylesheet">*/
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
/*                                         */
/*                     <!-- user dropdown starts -->*/
/*                     <div class="btn-group pull-right" >*/
/*                         <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                             <i class="icon-user"></i><span class="hidden-phone">{{ render(controller('IncentivesBaseBundle:Usuarios:nombre')) }}</span>*/
/*                             <span class="caret"></span>*/
/*                         </a>*/
/*                         {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
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
/*             <div id="content" class="span10">              */
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
