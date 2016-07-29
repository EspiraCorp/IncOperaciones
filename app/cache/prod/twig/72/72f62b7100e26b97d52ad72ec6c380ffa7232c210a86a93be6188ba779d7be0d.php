<?php

/* IncentivesBaseBundle:Menu:menuprincipal.html.twig */
class __TwigTemplate_8b30d5aa7074d879079aad59e40871d529988d0dfbc0c31cbed44756c6a6bc46 extends Twig_Template
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
        // line 1
        echo "<div class=\"span2 main-menu-span\">
    <div class=\"well nav-collapse sidebar-nav\">
        <ul class=\"nav nav-tabs nav-stacked main-menu\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 5
            echo "                    <li style=\"margin-left: -2px;\">
                        <a href=\"#\" class=\"ajax-link btn-menu\" id=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcion"], "nombre", array()), "html", null, true);
            echo "\" onClick=\"acordeon('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcion"], "id", array()), "html", null, true);
            echo "')\">
                            <i class=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcion"], "icono", array()), "html", null, true);
            echo "\"></i>
                            <span class=\"hidden-tablet\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcion"], "nombre", array()), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["opcion"], "opciones", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "                            ";
                if (($this->getAttribute($context["item"], "tipo", array()) == 1)) {
                    // line 13
                    echo "                                <li class=\"menu_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opcion"], "id", array()), "html", null, true);
                    echo " hide sub-menu\" style=\"margin-left: -2px;\">
                                    <a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                    echo "\" class=\"ajax-link\">
                                    <i class=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icono", array()), "html", null, true);
                    echo "\"></i>
                                    <span class=\"hidden-tablet\">";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
                    echo "</span></a>
                                </li>
                            ";
                } elseif (($this->getAttribute(                // line 18
$context["item"], "tipo", array()) == 2)) {
                    // line 19
                    echo "                                <li class=\"menu_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opcion"], "id", array()), "html", null, true);
                    echo " hide sub-menu\" style=\"margin-left: -2px;\">
                                    <a href=\"";
                    // line 20
                    echo $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "link", array()));
                    echo "\" class=\"ajax-link\">
                                    <i class=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icono", array()), "html", null, true);
                    echo "\"></i>
                                    <span class=\"hidden-tablet\">";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
                    echo "</span></a>
                                </li>
                            ";
                }
                // line 25
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
    </div>
</div>

<script>
\t function acordeon(id){
        \$('.menu_'+id).toggle();
    }
</script>";
    }

    public function getTemplateName()
    {
        return "IncentivesBaseBundle:Menu:menuprincipal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 27,  99 => 26,  93 => 25,  87 => 22,  83 => 21,  79 => 20,  74 => 19,  72 => 18,  67 => 16,  63 => 15,  59 => 14,  54 => 13,  51 => 12,  47 => 11,  41 => 8,  37 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="span2 main-menu-span">*/
/*     <div class="well nav-collapse sidebar-nav">*/
/*         <ul class="nav nav-tabs nav-stacked main-menu">*/
/*             {% for opcion in menu %}*/
/*                     <li style="margin-left: -2px;">*/
/*                         <a href="#" class="ajax-link btn-menu" id="{{ opcion.nombre }}" onClick="acordeon('{{ opcion.id }}')">*/
/*                             <i class="{{ opcion.icono }}"></i>*/
/*                             <span class="hidden-tablet">{{ opcion.nombre }}</span>*/
/*                         </a>*/
/*                     </li>*/
/*                         {% for item in opcion.opciones %}*/
/*                             {% if item.tipo == 1 %}*/
/*                                 <li class="menu_{{ opcion.id }} hide sub-menu" style="margin-left: -2px;">*/
/*                                     <a href="{{ item.link }}" class="ajax-link">*/
/*                                     <i class="{{ item.icono }}"></i>*/
/*                                     <span class="hidden-tablet">{{ item.nombre }}</span></a>*/
/*                                 </li>*/
/*                             {% elseif item.tipo == 2 %}*/
/*                                 <li class="menu_{{ opcion.id }} hide sub-menu" style="margin-left: -2px;">*/
/*                                     <a href="{{ path( item.link ) }}" class="ajax-link">*/
/*                                     <i class="{{ item.icono }}"></i>*/
/*                                     <span class="hidden-tablet">{{ item.nombre }}</span></a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/* 	 function acordeon(id){*/
/*         $('.menu_'+id).toggle();*/
/*     }*/
/* </script>*/
