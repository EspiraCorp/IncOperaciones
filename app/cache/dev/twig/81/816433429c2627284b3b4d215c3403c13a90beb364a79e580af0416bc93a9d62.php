<?php

/* IncentivesBaseBundle:Usuarios:recordar.html.twig */
class __TwigTemplate_10097d0ad217f4424a69ebb73ddc5f5b18590c0ff9fe6caf6aee126ee5692dfc extends Twig_Template
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
        $__internal_8491c334f4141a3fa1c92f4cb085024bd69b5307b3ae062382d16ec111c69db2 = $this->env->getExtension("native_profiler");
        $__internal_8491c334f4141a3fa1c92f4cb085024bd69b5307b3ae062382d16ec111c69db2->enter($__internal_8491c334f4141a3fa1c92f4cb085024bd69b5307b3ae062382d16ec111c69db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesBaseBundle:Usuarios:recordar.html.twig"));

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
    <section>
     <div id=\"error\">
      ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "          <div>";
            if ( !(null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()))) {
                echo "Verifique su correo.";
            }
            echo "</div>
        ";
        }
        // line 15
        echo "      </div>
        <form id=\"login\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("recordar_password");
        echo "\" method=\"post\">
        <span class=\"recordar_titulo\">RECORDAR CONTRASEÑA</span><br><br><br>
        <span class=\"ingresar_correo\">Ingrese el correo</span><br>
          <input type=\"text\" size=\"50\" required class=\"cuadro\" nid=\"email\" name=\"email\" ><br>
          <input type=\"submit\" value=\"Enviar\" class=\"botoningresar\">
      </form>
    </section>
    <footer> Todos los derechos reservados Incgroup 2015.</footer>
</body>
</html>
";
        
        $__internal_8491c334f4141a3fa1c92f4cb085024bd69b5307b3ae062382d16ec111c69db2->leave($__internal_8491c334f4141a3fa1c92f4cb085024bd69b5307b3ae062382d16ec111c69db2_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Usuarios:recordar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  40 => 13,  38 => 12,  29 => 6,  22 => 1,);
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
/*     <section>*/
/*      <div id="error">*/
/*       {% if error %}*/
/*           <div>{% if error.message is not null %}Verifique su correo.{% endif %}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*         <form id="login" action="{{ path('recordar_password') }}" method="post">*/
/*         <span class="recordar_titulo">RECORDAR CONTRASEÑA</span><br><br><br>*/
/*         <span class="ingresar_correo">Ingrese el correo</span><br>*/
/*           <input type="text" size="50" required class="cuadro" nid="email" name="email" ><br>*/
/*           <input type="submit" value="Enviar" class="botoningresar">*/
/*       </form>*/
/*     </section>*/
/*     <footer> Todos los derechos reservados Incgroup 2015.</footer>*/
/* </body>*/
/* </html>*/
/* */
