<?php

/* IncentivesFacturacionBundle:Facturas:verificar.html.twig */
class __TwigTemplate_6e0972e734dc0c09668104f448b4f3c640703f3e6584dfa2849f91fe99e8e4b5 extends Twig_Template
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
        $__internal_9010fb12506595939e500d0b4ae54bfdd88536096f6b209c33868df1c843d5cd = $this->env->getExtension("native_profiler");
        $__internal_9010fb12506595939e500d0b4ae54bfdd88536096f6b209c33868df1c843d5cd->enter($__internal_9010fb12506595939e500d0b4ae54bfdd88536096f6b209c33868df1c843d5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:verificar.html.twig"));

        // line 1
        echo "
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ordenredencion_valores");
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
\t\t\t        Cantidad ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> 
\t\t\t        Valor Unidad ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorunidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> 
\t\t\t\t    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
</fieldset>
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>";
        
        $__internal_9010fb12506595939e500d0b4ae54bfdd88536096f6b209c33868df1c843d5cd->leave($__internal_9010fb12506595939e500d0b4ae54bfdd88536096f6b209c33868df1c843d5cd_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:verificar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  59 => 19,  51 => 14,  43 => 9,  35 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* <form action="{{ path('ordenredencion_valores') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     <fieldset>*/
/* 		<table>*/
/* 			<tr>*/
/* 				<td> */
/* 			        Cantidad {{ form_widget(form.cantidad, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td> */
/* 			        Valor Unidad {{ form_widget(form.valorunidad, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
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
