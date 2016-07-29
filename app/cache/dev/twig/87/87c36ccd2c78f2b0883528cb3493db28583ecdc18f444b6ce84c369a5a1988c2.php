<?php

/* IncentivesOrdenesBundle:Ordenes:tracking.html.twig */
class __TwigTemplate_19840dd35da7b12640e25ffe05c46be9b780290e85bb28793fc98e0b5dda7559 extends Twig_Template
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
        $__internal_945e3dfa213ba69838dfd755e3fd25ab87b69083290cc433cb558464e713af9e = $this->env->getExtension("native_profiler");
        $__internal_945e3dfa213ba69838dfd755e3fd25ab87b69083290cc433cb558464e713af9e->enter($__internal_945e3dfa213ba69838dfd755e3fd25ab87b69083290cc433cb558464e713af9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOrdenesBundle:Ordenes:tracking.html.twig"));

        // line 1
        echo "
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ordenes_tracking");
        echo "/41\" method=\"POST\" ";
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
\t\t\t        Orden Amazon ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordenAmazon", array()), 'widget', array("attr" => array("class" => "input-xlarge focused", "style" => "width: 100px !important")));
        echo "
\t\t\t\t</td>
\t\t\t\t<td> 
\t\t\t        Tracking ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tracking", array()), 'widget', array("attr" => array("class" => "input-xlarge focused", "style" => "width: 100px !important")));
        echo "
\t\t\t\t</td>
\t\t\t\t<td> 
\t\t\t        Tarjeta ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarjeta", array()), 'widget', array("attr" => array("class" => "input-xlarge focused", "style" => "width: 100px !important")));
        echo "
\t\t\t\t</td>
\t\t\t\t<td> 
\t\t\t        Precio ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "input-xlarge focused", "style" => "width: 100px !important")));
        echo "
\t\t\t\t</td>
\t\t\t\t<td> 
\t\t\t        Cantidad ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused", "style" => "width: 100px !important")));
        echo "
\t\t\t\t</td>
\t\t\t\t<td> 
\t\t\t\t    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
</fieldset>
";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
";
        
        $__internal_945e3dfa213ba69838dfd755e3fd25ab87b69083290cc433cb558464e713af9e->leave($__internal_945e3dfa213ba69838dfd755e3fd25ab87b69083290cc433cb558464e713af9e_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOrdenesBundle:Ordenes:tracking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  73 => 24,  67 => 21,  61 => 18,  55 => 15,  49 => 12,  43 => 9,  35 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* <form action="{{ path('ordenes_tracking') }}/41" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <input type='hidden' name='id' value={{ id }}>*/
/*     <fieldset>*/
/* 		<table>*/
/* 			<tr>*/
/* 				<td> */
/* 			        Orden Amazon {{ form_widget(form.ordenAmazon, { 'attr': {'class': 'input-xlarge focused', 'style': 'width: 100px !important'} }) }}*/
/* 				</td>*/
/* 				<td> */
/* 			        Tracking {{ form_widget(form.tracking, { 'attr': {'class': 'input-xlarge focused', 'style': 'width: 100px !important'} }) }}*/
/* 				</td>*/
/* 				<td> */
/* 			        Tarjeta {{ form_widget(form.tarjeta, { 'attr': {'class': 'input-xlarge focused', 'style': 'width: 100px !important'} }) }}*/
/* 				</td>*/
/* 				<td> */
/* 			        Precio {{ form_widget(form.precio, { 'attr': {'class': 'input-xlarge focused', 'style': 'width: 100px !important'} }) }}*/
/* 				</td>*/
/* 				<td> */
/* 			        Cantidad {{ form_widget(form.cantidad, { 'attr': {'class': 'input-xlarge focused', 'style': 'width: 100px !important'} }) }}*/
/* 				</td>*/
/* 				<td> */
/* 				    {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* 				</td>*/
/* 			</tr>*/
/* 		</table>*/
/* </fieldset>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* */
