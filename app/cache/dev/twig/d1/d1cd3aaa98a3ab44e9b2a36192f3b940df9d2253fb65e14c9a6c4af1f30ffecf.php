<?php

/* SimpleThingsEntityAuditBundle:Audit:index.html.twig */
class __TwigTemplate_529c39d258f3557fc4136f5e1ccbdce97cc18d296e2ddbb9f137d27226815603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:index.html.twig", 1);
        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afa409b23de837f67375bb9708456dd20d6fe98684f71d910a37f429fa048c96 = $this->env->getExtension("native_profiler");
        $__internal_afa409b23de837f67375bb9708456dd20d6fe98684f71d910a37f429fa048c96->enter($__internal_afa409b23de837f67375bb9708456dd20d6fe98684f71d910a37f429fa048c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa409b23de837f67375bb9708456dd20d6fe98684f71d910a37f429fa048c96->leave($__internal_afa409b23de837f67375bb9708456dd20d6fe98684f71d910a37f429fa048c96_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_c9f34c140a62245c91ceb9f227a9eb08124fe588fae458e860313d2622db8c58 = $this->env->getExtension("native_profiler");
        $__internal_c9f34c140a62245c91ceb9f227a9eb08124fe588fae458e860313d2622db8c58->enter($__internal_c9f34c140a62245c91ceb9f227a9eb08124fe588fae458e860313d2622db8c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 4
        echo "<h1>Revisions</h1>

<ul>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_viewrevision", array("rev" => $this->getAttribute($context["revision"], "rev", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["revision"], "timestamp", array()), "r"), "html", null, true);
            echo " -- ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["revision"], "username", array()), "Anonymous")) : ("Anonymous")), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        
        $__internal_c9f34c140a62245c91ceb9f227a9eb08124fe588fae458e860313d2622db8c58->leave($__internal_c9f34c140a62245c91ceb9f227a9eb08124fe588fae458e860313d2622db8c58_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SimpleThingsEntityAuditBundle::layout.html.twig" %}*/
/* */
/* {% block simplethings_entityaudit_content %}*/
/* <h1>Revisions</h1>*/
/* */
/* <ul>*/
/* {% for revision in revisions %}*/
/*     <li><a href="{{ path('simple_things_entity_audit_viewrevision', { 'rev': revision.rev }) }}">{{ revision.timestamp|date('r') }} -- {{ revision.username|default('Anonymous') }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endblock simplethings_entityaudit_content %}*/
