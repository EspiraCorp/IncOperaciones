<?php

/* IncentivesOrdenesBundle:Ordenes:valoresingreso.html.twig */
class __TwigTemplate_e93efec4ed660bfcfa9278915bc38ef33c69dc98c8b2604ff4f37c5b04f7760b extends Twig_Template
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
        $__internal_8cfd5d5d7bdb57e2d7a87e73f365a9ed78e20dde2c5e9f4f89032cebeed0de59 = $this->env->getExtension("native_profiler");
        $__internal_8cfd5d5d7bdb57e2d7a87e73f365a9ed78e20dde2c5e9f4f89032cebeed0de59->enter($__internal_8cfd5d5d7bdb57e2d7a87e73f365a9ed78e20dde2c5e9f4f89032cebeed0de59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:valoresingreso.html.twig"));

        // line 1
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordenes_ingreso", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <input type='hidden' name='id' value=";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ">
    <fieldset>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td> 
\t\t\t        Cantidad Recibida ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> 
\t\t\t\t    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
</fieldset>
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>";
        
        $__internal_8cfd5d5d7bdb57e2d7a87e73f365a9ed78e20dde2c5e9f4f89032cebeed0de59->leave($__internal_8cfd5d5d7bdb57e2d7a87e73f365a9ed78e20dde2c5e9f4f89032cebeed0de59_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:valoresingreso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  51 => 14,  43 => 9,  35 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* <form action="{{ path('ordenes_ingreso', {'id': id}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     <fieldset>*/
/* 		<table>*/
/* 			<tr>*/
/* 				<td> */
/* 			        Cantidad Recibida {{ form_widget(form.cantidad, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td> */
/* 				    {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* 				</td>*/
/* 			</tr>*/
/* 		</table>*/
/* </fieldset>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
