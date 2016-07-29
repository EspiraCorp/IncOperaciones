<?php

/* IncentivesOperacionesBundle:Calificacion:carta.html.twig */
class __TwigTemplate_28209ab941f061c24628ba50d197c566ce35dfbaec00c3bfc4819b79c1f11ddf extends Twig_Template
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
        $__internal_e849d473d86525869a3c250af50ab914e6b3318cd243e7eeaa4aa4f048b00c9d = $this->env->getExtension("native_profiler");
        $__internal_e849d473d86525869a3c250af50ab914e6b3318cd243e7eeaa4aa4f048b00c9d->enter($__internal_e849d473d86525869a3c250af50ab914e6b3318cd243e7eeaa4aa4f048b00c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Calificacion:carta.html.twig"));

        // line 1
        echo "<html>
<div style=\"position: relative; float: left; z-index: 1;\"> <img src=\"../web/Calificacion/plantilla_calificacion.jpg\" width=\"700px\"/>
<div style=\"position: absolute; left: 30px; top: 130px; float: left; z-index: -1; width: 600px\">
\t<p>

\t\tBogotá, 26 de febrero  de 2015
\t\t<br>
\t\tSeñor(es) 
\t\t<br>
\t\t<b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "nombre", array()), "html", null, true);
        echo "</b>
\t\t<br><br><br>
\t\tASUNTO: Resultados de evaluación de desempeño proveedores INC Group 
\t\t<br><br>
\t\tRespetados señores:
\t\t<br><br>
\t\tDentro de nuestro sistema de evaluación de proveedores hemos ejecutado la evaluación 

\t\tcorrespondiente al <b>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "fecha", array()), "Y"), "html", null, true);
        echo "</b>,  haciendo un  detenido análisis del desempeño de su compañía en la 
\t\t
\t\tprestación de servicios, medido a través de las  variables contenidas en el reporte adjunto.  
\t\t<br><br>
\t\t
\t\t";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()) < 50)) {
            // line 24
            echo "\t\t
\t\t\tLa calificación del periodo evaluado año es de porcentaje ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()), "html", null, true);
            echo "% logrando un  nivel por debajo de lo aceptado,  es por esto  que no es posible mantener una relación comercial con ustedes. 
\t\t\t<br><br>
\t\t\tAgradecemos la atención prestada.
\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 28
(isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()) >= 50)) {
            // line 29
            echo "\t\t
\t\t\tLa calificación del periodo evaluado <b>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "fecha", array()), "Y"), "html", null, true);
            echo "</b> es de <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()), "html", null, true);
            echo "%</b> logrando el nivel <b>";
            if (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()) >= 90)) {
                echo "Excelente";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()) >= 70)) {
                echo "Bueno";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()) >= 50)) {
                echo "Regular";
            }
            echo "</b>.
\t\t\t<br><br>
\t\t\t";
            // line 32
            if (($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()) >= 70)) {
                // line 33
                echo "\t\t\tReconocemos y valoramos el desempeño de su Compañía por el resultado obtenido en este 
\t\t\t
\t\t\tperiodo, y los invitamos a revisar el reporte adjunto que contiene el detalle de los criterios 
\t\t\t
\t\t\tevaluados por nuestros ejecutivos. De igual forma los invitamos a mantener esta calificación en la 
\t\t\t
\t\t\tprestación de sus servicios, lo cual nos beneficia mutuamente. 
\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 40
(isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "calificacion", array()) >= 50)) {
                // line 41
                echo "\t\t\tLo invitamos a revisar el reporte adjunto que contiene el detalle de los criterios evaluados por 
\t
\t\t\tnuestros ejecutivos. De igual forma los invitamos a mejorar  esta calificación en la prestación de 
\t
\t\t\tsus servicios, lo cual nos beneficiaria mutuamente.
\t\t\t<br><br>
\t\t\tDe igual forma solicitamos de manera cordial que a través de su enlace en nuestra plataforma nos 
\t
\t\t\tindique cual es el plan de acción de su compañía con nosotros  para poder seguir trabajando  de la 
\t
\t\t\tmano.
\t\t\t";
            }
            // line 53
            echo "\t\t\t
\t\t\t<br><br>
\t\t\tEsperamos seguir contando  con su compromiso. Para nosotros es muy importante continuar con 
\t\t\t
\t\t\t<b>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "proveedor", array()), "nombre", array()), "html", null, true);
            echo "</b> como nuestro aliado estratégico. 
\t\t\t<br><br>
\t\t\tAgradecemos nos confirmen  la recepción de la presente comunicación.
\t\t";
        }
        // line 61
        echo "\t\t<br><br>
\t\tCordialmente,

\t</p>
</div>
</body>
</html>
";
        
        $__internal_e849d473d86525869a3c250af50ab914e6b3318cd243e7eeaa4aa4f048b00c9d->leave($__internal_e849d473d86525869a3c250af50ab914e6b3318cd243e7eeaa4aa4f048b00c9d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Calificacion:carta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 61,  116 => 57,  110 => 53,  96 => 41,  94 => 40,  85 => 33,  83 => 32,  68 => 30,  65 => 29,  63 => 28,  57 => 25,  54 => 24,  52 => 23,  44 => 18,  33 => 10,  22 => 1,);
    }
}
/* <html>*/
/* <div style="position: relative; float: left; z-index: 1;"> <img src="../web/Calificacion/plantilla_calificacion.jpg" width="700px"/>*/
/* <div style="position: absolute; left: 30px; top: 130px; float: left; z-index: -1; width: 600px">*/
/* 	<p>*/
/* */
/* 		Bogotá, 26 de febrero  de 2015*/
/* 		<br>*/
/* 		Señor(es) */
/* 		<br>*/
/* 		<b>{{ datos[0].proveedor.nombre }}</b>*/
/* 		<br><br><br>*/
/* 		ASUNTO: Resultados de evaluación de desempeño proveedores INC Group */
/* 		<br><br>*/
/* 		Respetados señores:*/
/* 		<br><br>*/
/* 		Dentro de nuestro sistema de evaluación de proveedores hemos ejecutado la evaluación */
/* */
/* 		correspondiente al <b>{{ datos[0].fecha | date("Y") }}</b>,  haciendo un  detenido análisis del desempeño de su compañía en la */
/* 		*/
/* 		prestación de servicios, medido a través de las  variables contenidas en el reporte adjunto.  */
/* 		<br><br>*/
/* 		*/
/* 		{% if datos[0].calificacion < 50 %}*/
/* 		*/
/* 			La calificación del periodo evaluado año es de porcentaje {{ datos[0].calificacion }}% logrando un  nivel por debajo de lo aceptado,  es por esto  que no es posible mantener una relación comercial con ustedes. */
/* 			<br><br>*/
/* 			Agradecemos la atención prestada.*/
/* 		{% elseif  datos[0].calificacion >=50 %}*/
/* 		*/
/* 			La calificación del periodo evaluado <b>{{ datos[0].fecha | date("Y") }}</b> es de <b>{{ datos[0].calificacion }}%</b> logrando el nivel <b>{% if datos[0].calificacion >=90 %}Excelente{% elseif datos[0].calificacion >=70 %}Bueno{% elseif datos[0].calificacion >=50 %}Regular{% endif %}</b>.*/
/* 			<br><br>*/
/* 			{% if datos[0].calificacion >=70 %}*/
/* 			Reconocemos y valoramos el desempeño de su Compañía por el resultado obtenido en este */
/* 			*/
/* 			periodo, y los invitamos a revisar el reporte adjunto que contiene el detalle de los criterios */
/* 			*/
/* 			evaluados por nuestros ejecutivos. De igual forma los invitamos a mantener esta calificación en la */
/* 			*/
/* 			prestación de sus servicios, lo cual nos beneficia mutuamente. */
/* 			{% elseif datos[0].calificacion >=50 %}*/
/* 			Lo invitamos a revisar el reporte adjunto que contiene el detalle de los criterios evaluados por */
/* 	*/
/* 			nuestros ejecutivos. De igual forma los invitamos a mejorar  esta calificación en la prestación de */
/* 	*/
/* 			sus servicios, lo cual nos beneficiaria mutuamente.*/
/* 			<br><br>*/
/* 			De igual forma solicitamos de manera cordial que a través de su enlace en nuestra plataforma nos */
/* 	*/
/* 			indique cual es el plan de acción de su compañía con nosotros  para poder seguir trabajando  de la */
/* 	*/
/* 			mano.*/
/* 			{% endif %}*/
/* 			*/
/* 			<br><br>*/
/* 			Esperamos seguir contando  con su compromiso. Para nosotros es muy importante continuar con */
/* 			*/
/* 			<b>{{ datos[0].proveedor.nombre }}</b> como nuestro aliado estratégico. */
/* 			<br><br>*/
/* 			Agradecemos nos confirmen  la recepción de la presente comunicación.*/
/* 		{% endif %}*/
/* 		<br><br>*/
/* 		Cordialmente,*/
/* */
/* 	</p>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
