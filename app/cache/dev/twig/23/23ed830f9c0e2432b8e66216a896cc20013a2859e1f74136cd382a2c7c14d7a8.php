<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d9426a71a335fc62a0690d635fb4887bd8efb1b8d2b0e5336448d18e0e62d459 extends Twig_Template
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
        $__internal_bb14ebc062252adb38aa33cd137676417ea026fa196b12d43a1dd97beaa3a4fc = $this->env->getExtension("native_profiler");
        $__internal_bb14ebc062252adb38aa33cd137676417ea026fa196b12d43a1dd97beaa3a4fc->enter($__internal_bb14ebc062252adb38aa33cd137676417ea026fa196b12d43a1dd97beaa3a4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bb14ebc062252adb38aa33cd137676417ea026fa196b12d43a1dd97beaa3a4fc->leave($__internal_bb14ebc062252adb38aa33cd137676417ea026fa196b12d43a1dd97beaa3a4fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
