<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_65d1bafe30ea43676fec5890ff0d81bcbcc4af8a0d6f35093861c4c52c93e012 extends Twig_Template
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
        $__internal_bc2f5284846e9eda0786d4ad3638533aafe947c4356be5657aaff9330cd479be = $this->env->getExtension("native_profiler");
        $__internal_bc2f5284846e9eda0786d4ad3638533aafe947c4356be5657aaff9330cd479be->enter($__internal_bc2f5284846e9eda0786d4ad3638533aafe947c4356be5657aaff9330cd479be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bc2f5284846e9eda0786d4ad3638533aafe947c4356be5657aaff9330cd479be->leave($__internal_bc2f5284846e9eda0786d4ad3638533aafe947c4356be5657aaff9330cd479be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
