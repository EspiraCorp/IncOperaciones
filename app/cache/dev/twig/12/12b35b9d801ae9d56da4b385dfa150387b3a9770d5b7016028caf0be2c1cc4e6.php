<?php

/* SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig */
class __TwigTemplate_23e81dd5dec82b21fcc4970da1fd007e1aab7b930bf94c1ec7a965928781a135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig", 1);
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
        $__internal_09191e7cc2105dfb987e75b263ccfd836bb6c062148e4f39ca1704ba3c29d377 = $this->env->getExtension("native_profiler");
        $__internal_09191e7cc2105dfb987e75b263ccfd836bb6c062148e4f39ca1704ba3c29d377->enter($__internal_09191e7cc2105dfb987e75b263ccfd836bb6c062148e4f39ca1704ba3c29d377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09191e7cc2105dfb987e75b263ccfd836bb6c062148e4f39ca1704ba3c29d377->leave($__internal_09191e7cc2105dfb987e75b263ccfd836bb6c062148e4f39ca1704ba3c29d377_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_1ba3bca633ad23f511fc462c45c8818809c986b65075b3eec41f0779336d6cf4 = $this->env->getExtension("native_profiler");
        $__internal_1ba3bca633ad23f511fc462c45c8818809c986b65075b3eec41f0779336d6cf4->enter($__internal_1ba3bca633ad23f511fc462c45c8818809c986b65075b3eec41f0779336d6cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 4
        echo "<h1>Entities changed in revision ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev", array()), "html", null, true);
        echo "</h1>

<p><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("simple_things_entity_audit_home");
        echo "\">Home</a></p>

<table>
    <thead><tr>
        <th>Class Name</th>
        <th>Identifiers</th>
        <th>Revision Type</th>
    </tr></thead>
    <tbody>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["changedEntities"]) ? $context["changedEntities"] : $this->getContext($context, "changedEntities")));
        foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
            // line 16
            echo "    <tr>
        <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_viewentity_detail", array("rev" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev", array()), "className" => $this->getAttribute($context["changedEntity"], "className", array()), "id" => twig_join_filter($this->getAttribute($context["changedEntity"], "id", array()), ","))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "className", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["changedEntity"], "id", array()), ", "), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "revisionType", array()), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </tbody>
</table>

";
        
        $__internal_1ba3bca633ad23f511fc462c45c8818809c986b65075b3eec41f0779336d6cf4->leave($__internal_1ba3bca633ad23f511fc462c45c8818809c986b65075b3eec41f0779336d6cf4_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  75 => 19,  71 => 18,  65 => 17,  62 => 16,  58 => 15,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SimpleThingsEntityAuditBundle::layout.html.twig" %}*/
/* */
/* {% block simplethings_entityaudit_content %}*/
/* <h1>Entities changed in revision {{ revision.rev }}</h1>*/
/* */
/* <p><a href="{{ path('simple_things_entity_audit_home') }}">Home</a></p>*/
/* */
/* <table>*/
/*     <thead><tr>*/
/*         <th>Class Name</th>*/
/*         <th>Identifiers</th>*/
/*         <th>Revision Type</th>*/
/*     </tr></thead>*/
/*     <tbody>*/
/* {% for changedEntity in changedEntities %}*/
/*     <tr>*/
/*         <td><a href="{{ path('simple_things_entity_audit_viewentity_detail', { 'rev': revision.rev, 'className': changedEntity.className, 'id': changedEntity.id | join(',') }) }}">{{ changedEntity.className }}</a></td>*/
/*         <td>{{ changedEntity.id | join(', ') }}</td>*/
/*         <td>{{ changedEntity.revisionType }}</td>*/
/*     </tr>*/
/* {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
/* {% endblock simplethings_entityaudit_content %}*/
