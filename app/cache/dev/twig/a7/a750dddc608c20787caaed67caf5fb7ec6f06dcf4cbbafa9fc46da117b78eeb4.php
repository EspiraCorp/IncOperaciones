<?php

/* IncentivesOrdenesBundle:Ordenes:verificar.html.twig */
class __TwigTemplate_a8ed1be8952972a8aa1a8149ac95542b14c5e072125974888590e1d19f00c9b6 extends Twig_Template
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
        $__internal_8face2389d85de8cba2faac78e00d123ec59126057ec104c6900cb6a9fcf2a2d = $this->env->getExtension("native_profiler");
        $__internal_8face2389d85de8cba2faac78e00d123ec59126057ec104c6900cb6a9fcf2a2d->enter($__internal_8face2389d85de8cba2faac78e00d123ec59126057ec104c6900cb6a9fcf2a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:verificar.html.twig"));

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
\t\t\t\t<td> Descuento ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descuento", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> 
\t\t\t\t    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
</fieldset>
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>";
        
        $__internal_8face2389d85de8cba2faac78e00d123ec59126057ec104c6900cb6a9fcf2a2d->leave($__internal_8face2389d85de8cba2faac78e00d123ec59126057ec104c6900cb6a9fcf2a2d_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:verificar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  66 => 23,  58 => 18,  51 => 14,  43 => 9,  35 => 4,  31 => 3,  25 => 2,  22 => 1,);
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
/* 				<td> Descuento {{ form_widget(form.descuento, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
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
