<?php

/* SimpleThingsEntityAuditBundle:Audit:view_entity.html.twig */
class __TwigTemplate_77af76ba0b10388a8cb7a5e7ee569908f0073633fffa5ed53387a94e05967d69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:view_entity.html.twig", 1);
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
        $__internal_b7a979f917e751804259c7852695bbdde963dc2e80eba13562e2814905718a27 = $this->env->getExtension("native_profiler");
        $__internal_b7a979f917e751804259c7852695bbdde963dc2e80eba13562e2814905718a27->enter($__internal_b7a979f917e751804259c7852695bbdde963dc2e80eba13562e2814905718a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:view_entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7a979f917e751804259c7852695bbdde963dc2e80eba13562e2814905718a27->leave($__internal_b7a979f917e751804259c7852695bbdde963dc2e80eba13562e2814905718a27_prof);

    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_bfdd3dbcfc078643f4e22fe9000621f4ff62417f3aeb031378745cb895332dea = $this->env->getExtension("native_profiler");
        $__internal_bfdd3dbcfc078643f4e22fe9000621f4ff62417f3aeb031378745cb895332dea->enter($__internal_bfdd3dbcfc078643f4e22fe9000621f4ff62417f3aeb031378745cb895332dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 4
        echo "<h1>Change history for ";
        echo twig_escape_filter($this->env, (isset($context["className"]) ? $context["className"] : $this->getContext($context, "className")), "html", null, true);
        echo " with identifiers of ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>

<p><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("simple_things_entity_audit_home");
        echo "\">Home</a></p>

<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_compare", array("className" => (isset($context["className"]) ? $context["className"] : $this->getContext($context, "className")), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"get\">
<table>
    <thead>
    <tr>
        <th colspan=\"3\">&nbsp;</th>
        <th colspan=\"2\">Compare</th>
    </tr>
    <tr>
        <th>Revision</th>
        <th>Date</th>
        <th>User</th>
        <th>Old</th>
        <th>New</th>
    </tr>
    </thead>
    <tbody>

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 26
            echo "    <tr>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_viewentity_detail", array("rev" => $this->getAttribute($context["revision"], "rev", array()), "className" => (isset($context["className"]) ? $context["className"] : $this->getContext($context, "className")), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["revision"], "timestamp", array()), "r"), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute($context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["revision"], "username", array()), "Anonymous")) : ("Anonymous")), "html", null, true);
            echo "</td>

        <td><input type=\"radio\" name=\"oldRev\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                echo " checked=\"checked\"";
            }
            echo " /></td>
        <td><input type=\"radio\" name=\"newRev\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " /></td>
    </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>

    <input type=\"submit\" value=\"Compare Revisions\" />
</form>

";
        
        $__internal_bfdd3dbcfc078643f4e22fe9000621f4ff62417f3aeb031378745cb895332dea->leave($__internal_bfdd3dbcfc078643f4e22fe9000621f4ff62417f3aeb031378745cb895332dea_prof);

    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:view_entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 35,  116 => 32,  108 => 31,  103 => 29,  99 => 28,  93 => 27,  90 => 26,  73 => 25,  53 => 8,  48 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SimpleThingsEntityAuditBundle::layout.html.twig" %}*/
/* */
/* {% block simplethings_entityaudit_content %}*/
/* <h1>Change history for {{ className }} with identifiers of {{ id }}</h1>*/
/* */
/* <p><a href="{{ path('simple_things_entity_audit_home') }}">Home</a></p>*/
/* */
/* <form action="{{ path('simple_things_entity_audit_compare', { 'className': className, 'id': id }) }}" method="get">*/
/* <table>*/
/*     <thead>*/
/*     <tr>*/
/*         <th colspan="3">&nbsp;</th>*/
/*         <th colspan="2">Compare</th>*/
/*     </tr>*/
/*     <tr>*/
/*         <th>Revision</th>*/
/*         <th>Date</th>*/
/*         <th>User</th>*/
/*         <th>Old</th>*/
/*         <th>New</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/* {% for revision in revisions %}*/
/*     <tr>*/
/*         <td><a href="{{ path('simple_things_entity_audit_viewentity_detail', { 'rev': revision.rev, 'className': className, 'id': id })}}">{{ revision.rev }}</a></td>*/
/*         <td>{{ revision.timestamp | date('r') }}</td>*/
/*         <td>{{ revision.username|default('Anonymous') }}</td>*/
/* */
/*         <td><input type="radio" name="oldRev" value="{{ revision.rev }}"{% if loop.index == 2 %} checked="checked"{% endif %} /></td>*/
/*         <td><input type="radio" name="newRev" value="{{ revision.rev }}"{% if loop.index == 1 %} checked="checked"{% endif %} /></td>*/
/*     </tr>*/
/* {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
/*     <input type="submit" value="Compare Revisions" />*/
/* </form>*/
/* */
/* {% endblock simplethings_entityaudit_content %}*/
