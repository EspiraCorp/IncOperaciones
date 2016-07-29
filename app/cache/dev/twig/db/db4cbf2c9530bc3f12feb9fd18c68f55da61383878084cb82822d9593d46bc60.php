<?php

/* SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig */
class __TwigTemplate_c02f31fc1da3c5260be6d75087b095039a6889ae5a63797d594d70a91c565e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig", 1);
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
        $__internal_b2879902c596b9c07b99c67fcb77df5575ec9b937d9c32c70956bcc266093d31 = $this->env->getExtension("native_profiler");
        $__internal_b2879902c596b9c07b99c67fcb77df5575ec9b937d9c32c70956bcc266093d31->enter($__internal_b2879902c596b9c07b99c67fcb77df5575ec9b937d9c32c70956bcc266093d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2879902c596b9c07b99c67fcb77df5575ec9b937d9c32c70956bcc266093d31->leave($__internal_b2879902c596b9c07b99c67fcb77df5575ec9b937d9c32c70956bcc266093d31_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_2b3a64ff9f2d1483bb4c50e46b7e1237b5e603ddbe4d8131e46ded2f138fa493 = $this->env->getExtension("native_profiler");
        $__internal_2b3a64ff9f2d1483bb4c50e46b7e1237b5e603ddbe4d8131e46ded2f138fa493->enter($__internal_2b3a64ff9f2d1483bb4c50e46b7e1237b5e603ddbe4d8131e46ded2f138fa493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 4
        echo "<h1>Detail of ";
        echo twig_escape_filter($this->env, (isset($context["className"]) ? $context["className"] : $this->getContext($context, "className")), "html", null, true);
        echo " with identifiers of ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " at revisions ";
        echo twig_escape_filter($this->env, (isset($context["rev"]) ? $context["rev"] : $this->getContext($context, "rev")), "html", null, true);
        echo "</h1>

<p><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_viewentity", array("className" => (isset($context["className"]) ? $context["className"] : $this->getContext($context, "className")), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Compare revisions</a></p>
<table>
    <thead><tr>
        <th>Field</th>
        <th>Value</th>
    </tr></thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 14
            echo "    <tr>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</td>
        ";
            // line 16
            if ($this->getAttribute($context["value"], "timestamp", array(), "any", true, true)) {
                // line 17
                echo "        <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["value"], "m/d/Y"), "html", null, true);
                echo "</td>
        ";
            } elseif (twig_test_iterable(            // line 18
$context["value"])) {
                // line 19
                echo "        <td>
            <ul>
                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 22
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            </ul>
        </td>
        ";
            } else {
                // line 27
                echo "        <td>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
        ";
            }
            // line 29
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
</table>

";
        
        $__internal_2b3a64ff9f2d1483bb4c50e46b7e1237b5e603ddbe4d8131e46ded2f138fa493->leave($__internal_2b3a64ff9f2d1483bb4c50e46b7e1237b5e603ddbe4d8131e46ded2f138fa493_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:view_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  108 => 29,  102 => 27,  97 => 24,  88 => 22,  84 => 21,  80 => 19,  78 => 18,  73 => 17,  71 => 16,  67 => 15,  64 => 14,  60 => 13,  50 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SimpleThingsEntityAuditBundle::layout.html.twig" %}*/
/* */
/* {% block simplethings_entityaudit_content %}*/
/* <h1>Detail of {{ className }} with identifiers of {{ id }} at revisions {{ rev }}</h1>*/
/* */
/* <p><a href="{{ path('simple_things_entity_audit_viewentity', { 'className': className, 'id': id }) }}">Compare revisions</a></p>*/
/* <table>*/
/*     <thead><tr>*/
/*         <th>Field</th>*/
/*         <th>Value</th>*/
/*     </tr></thead>*/
/*     <tbody>*/
/*     {% for field, value in data %}*/
/*     <tr>*/
/*         <td>{{ field }}</td>*/
/*         {% if value.timestamp is defined %}*/
/*         <td>{{ value|date('m/d/Y') }}</td>*/
/*         {% elseif value is iterable %}*/
/*         <td>*/
/*             <ul>*/
/*                 {% for element in value %}*/
/*                     <li>{{ element }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </td>*/
/*         {% else %}*/
/*         <td>{{ value }}</td>*/
/*         {% endif %}*/
/*     </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
/* {% endblock simplethings_entityaudit_content %}*/
/* */
/* */
