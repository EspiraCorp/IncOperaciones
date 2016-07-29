<?php

/* SimpleThingsEntityAuditBundle:Audit:compare.html.twig */
class __TwigTemplate_90de0c30f438b32f4565d7ca5d39ac04a58c00377bc255a63aa456ad4ebf4fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig", "SimpleThingsEntityAuditBundle:Audit:compare.html.twig", 1);
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
        $__internal_805b26e2dd4cfe011a7e7f4768d596e9610f41db29a044f0b956f333ee72a0f9 = $this->env->getExtension("native_profiler");
        $__internal_805b26e2dd4cfe011a7e7f4768d596e9610f41db29a044f0b956f333ee72a0f9->enter($__internal_805b26e2dd4cfe011a7e7f4768d596e9610f41db29a044f0b956f333ee72a0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SimpleThingsEntityAuditBundle:Audit:compare.html.twig"));

        // line 17
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_805b26e2dd4cfe011a7e7f4768d596e9610f41db29a044f0b956f333ee72a0f9->leave($__internal_805b26e2dd4cfe011a7e7f4768d596e9610f41db29a044f0b956f333ee72a0f9_prof);

    }

    // line 19
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        $__internal_e3a88fc1b9df9104e8386fb6a5a66cf9779ebf92ada0d399130aeba78bef33fd = $this->env->getExtension("native_profiler");
        $__internal_e3a88fc1b9df9104e8386fb6a5a66cf9779ebf92ada0d399130aeba78bef33fd->enter($__internal_e3a88fc1b9df9104e8386fb6a5a66cf9779ebf92ada0d399130aeba78bef33fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "simplethings_entityaudit_content"));

        // line 20
        echo "<h1>Comparing ";
        echo twig_escape_filter($this->env, (isset($context["className"]) ? $context["className"] : $this->getContext($context, "className")), "html", null, true);
        echo " with identifiers of ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " between revisions ";
        echo twig_escape_filter($this->env, (isset($context["oldRev"]) ? $context["oldRev"] : $this->getContext($context, "oldRev")), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["newRev"]) ? $context["newRev"] : $this->getContext($context, "newRev")), "html", null, true);
        echo "</h1>

<table>
    <thead><tr>
        <th>Field</th>
        <th>Deleted</th>
        <th>Same</th>
        <th>Updated</th>
    </tr></thead>
    <tbody>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diff"]) ? $context["diff"] : $this->getContext($context, "diff")));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 31
            echo "    <tr>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</td>
        <td>
            ";
            // line 34
            echo $context["helper"]->getshowValue($this->getAttribute($context["value"], "old", array()));
            echo "
        </td>
        <td>
            ";
            // line 37
            echo $context["helper"]->getshowValue($this->getAttribute($context["value"], "same", array()));
            echo "
        </td>
        <td>
            ";
            // line 40
            echo $context["helper"]->getshowValue($this->getAttribute($context["value"], "new", array()));
            echo "
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </tbody>
</table>

";
        
        $__internal_e3a88fc1b9df9104e8386fb6a5a66cf9779ebf92ada0d399130aeba78bef33fd->leave($__internal_e3a88fc1b9df9104e8386fb6a5a66cf9779ebf92ada0d399130aeba78bef33fd_prof);

    }

    // line 3
    public function getshowValue($__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_402eb4cdae9ef9837bb745d7a10eae944bc174ef49e6d98f5f31982ed1df4ee0 = $this->env->getExtension("native_profiler");
            $__internal_402eb4cdae9ef9837bb745d7a10eae944bc174ef49e6d98f5f31982ed1df4ee0->enter($__internal_402eb4cdae9ef9837bb745d7a10eae944bc174ef49e6d98f5f31982ed1df4ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "showValue"));

            // line 4
            echo "    ";
            if ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "timestamp", array(), "any", true, true)) {
                // line 5
                echo "        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "m/d/Y"), "html", null, true);
                echo "
    ";
            } elseif (twig_test_iterable(            // line 6
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                // line 7
                echo "        <ul>
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 9
                    echo "            <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        </ul>
    ";
            } else {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "
    ";
            }
            
            $__internal_402eb4cdae9ef9837bb745d7a10eae944bc174ef49e6d98f5f31982ed1df4ee0->leave($__internal_402eb4cdae9ef9837bb745d7a10eae944bc174ef49e6d98f5f31982ed1df4ee0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 13,  148 => 11,  139 => 9,  135 => 8,  132 => 7,  130 => 6,  125 => 5,  122 => 4,  107 => 3,  97 => 44,  87 => 40,  81 => 37,  75 => 34,  70 => 32,  67 => 31,  63 => 30,  43 => 20,  37 => 19,  30 => 1,  28 => 17,  11 => 1,);
    }
}
/* {% extends "SimpleThingsEntityAuditBundle::layout.html.twig" %}*/
/* */
/* {% macro showValue(value) %}*/
/*     {% if value.timestamp is defined %}*/
/*         {{ value|date('m/d/Y') }}*/
/*     {% elseif value is iterable %}*/
/*         <ul>*/
/*         {% for element in value %}*/
/*             <li>{{ element }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         {{ value }}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* {% block simplethings_entityaudit_content %}*/
/* <h1>Comparing {{ className }} with identifiers of {{ id }} between revisions {{ oldRev }} and {{ newRev }}</h1>*/
/* */
/* <table>*/
/*     <thead><tr>*/
/*         <th>Field</th>*/
/*         <th>Deleted</th>*/
/*         <th>Same</th>*/
/*         <th>Updated</th>*/
/*     </tr></thead>*/
/*     <tbody>*/
/*     {% for field, value in diff %}*/
/*     <tr>*/
/*         <td>{{ field }}</td>*/
/*         <td>*/
/*             {{ helper.showValue(value.old) }}*/
/*         </td>*/
/*         <td>*/
/*             {{ helper.showValue(value.same) }}*/
/*         </td>*/
/*         <td>*/
/*             {{ helper.showValue(value.new) }}*/
/*         </td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
/* {% endblock simplethings_entityaudit_content %}*/
/* */
