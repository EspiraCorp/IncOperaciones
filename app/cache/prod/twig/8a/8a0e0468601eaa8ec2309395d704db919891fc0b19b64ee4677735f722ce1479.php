<?php

/* IncentivesBaseBundle:Autenticacion:login.html.twig */
class __TwigTemplate_48f842f651a6807c4fa8291210d53fc7172a5398668c824fdfeeee1185abad63 extends Twig_Template
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
        // line 1
        echo "<!doctype html>
<html>
<head>
<meta charset=\"UTF-8\">
<title>Operaciones Inc logistica </title>
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/generales.css"), "html", null, true);
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
        return array (  91 => 30,  83 => 25,  78 => 23,  75 => 22,  67 => 20,  64 => 19,  55 => 17,  51 => 16,  48 => 15,  39 => 13,  35 => 12,  26 => 6,  19 => 1,);
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
