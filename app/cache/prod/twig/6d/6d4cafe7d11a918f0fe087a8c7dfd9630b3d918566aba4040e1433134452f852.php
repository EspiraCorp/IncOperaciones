<?php

/* IncentivesBaseBundle:Autenticacion:login.html.twig */
class __TwigTemplate_0ab362d81d881f868269eaae25dda66344c3b0e7b0c317f32891655e8cf1df68 extends Twig_Template
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
        $__internal_d1e7884d7319cdd2b50bb07c65b5c32b93e33bdf439c8161e817926b9704c4a7 = $this->env->getExtension("native_profiler");
        $__internal_d1e7884d7319cdd2b50bb07c65b5c32b93e33bdf439c8161e817926b9704c4a7->enter($__internal_d1e7884d7319cdd2b50bb07c65b5c32b93e33bdf439c8161e817926b9704c4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Autenticacion:login.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
<meta charset=\"UTF-8\">
<title>Operaciones Inc logistica </title>
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/generales.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
</head>

<body>
\t<section>
     <div id=\"error\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "                    ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                    ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "       
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "          <div>";
            if ( !(null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()))) {
                echo "Verifique su usuario y contraseña";
            }
            echo "</div>
        ";
        }
        // line 22
        echo "      </div>
    \t<form id=\"login\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
          Usuario<br>
          <input type=\"text\" size=\"50\" required class=\"cuadro\" nid=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" ><br><br>
          Contraseña<br>
          <input id=\"password\" name=\"_password\" type=\"password\" size=\"50\" class=\"cuadro\"><br><br>
          <input type=\"submit\" value=\"Ingresar\" class=\"botoningresar\">
      </form>
      <div id=\"restablecer\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("recordar_password");
        echo "\" class=\"olvidemicontrasena\">Olvidé mi contraseña</a>
      </div>
    </section>
    <footer> Todos los derechos reservados Incgroup 2015.</footer>
</body>
</html>
";
        
        $__internal_d1e7884d7319cdd2b50bb07c65b5c32b93e33bdf439c8161e817926b9704c4a7->leave($__internal_d1e7884d7319cdd2b50bb07c65b5c32b93e33bdf439c8161e817926b9704c4a7_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Autenticacion:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  86 => 25,  81 => 23,  78 => 22,  70 => 20,  67 => 19,  58 => 17,  54 => 16,  51 => 15,  42 => 13,  38 => 12,  29 => 6,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html>*/
/* <head>*/
/* <meta charset="UTF-8">*/
/* <title>Operaciones Inc logistica </title>*/
/* <link href="{{ asset('css/generales.css') }}" type="text/css" rel="stylesheet" />*/
/* </head>*/
/* */
/* <body>*/
/* 	<section>*/
/*      <div id="error">*/
/*                 {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                     {{ flashMessage }}*/
/*                 {% endfor %}*/
/*                 */
/*                 {% for flashMessage in app.session.flashbag.get('warning') %}*/
/*                     {{ flashMessage }}       */
/*             {% endfor %}*/
/*       {% if error %}*/
/*           <div>{% if error.message is not null %}Verifique su usuario y contraseña{% endif %}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*     	<form id="login" action="{{ path('login_check') }}" method="post">*/
/*           Usuario<br>*/
/*           <input type="text" size="50" required class="cuadro" nid="username" name="_username" value="{{ last_username }}" ><br><br>*/
/*           Contraseña<br>*/
/*           <input id="password" name="_password" type="password" size="50" class="cuadro"><br><br>*/
/*           <input type="submit" value="Ingresar" class="botoningresar">*/
/*       </form>*/
/*       <div id="restablecer"><a href="{{ path('recordar_password') }}" class="olvidemicontrasena">Olvidé mi contraseña</a>*/
/*       </div>*/
/*     </section>*/
/*     <footer> Todos los derechos reservados Incgroup 2015.</footer>*/
/* </body>*/
/* </html>*/
/* */
