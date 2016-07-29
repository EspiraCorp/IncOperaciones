<?php

/* IncentivesOperacionesBundle:Proveedor:edit.html.twig */
class __TwigTemplate_65780df5630aacbdaf5d11db67b1719296d7b9c2a7ebebf64cd19a7d269c1e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesOperacionesBundle:Proveedor:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8584289c00968209e0df6f8b6127e5705854e2ff7c32986ec12d34a984b24e8b = $this->env->getExtension("native_profiler");
        $__internal_8584289c00968209e0df6f8b6127e5705854e2ff7c32986ec12d34a984b24e8b->enter($__internal_8584289c00968209e0df6f8b6127e5705854e2ff7c32986ec12d34a984b24e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesOperacionesBundle:Proveedor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8584289c00968209e0df6f8b6127e5705854e2ff7c32986ec12d34a984b24e8b->leave($__internal_8584289c00968209e0df6f8b6127e5705854e2ff7c32986ec12d34a984b24e8b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f79d817be7005f06f9585962f181f70bc1d7d767a1b45d24ec1e50849f105ac2 = $this->env->getExtension("native_profiler");
        $__internal_f79d817be7005f06f9585962f181f70bc1d7d767a1b45d24ec1e50849f105ac2->enter($__internal_f79d817be7005f06f9585962f181f70bc1d7d767a1b45d24ec1e50849f105ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar proveedor";
        
        $__internal_f79d817be7005f06f9585962f181f70bc1d7d767a1b45d24ec1e50849f105ac2->leave($__internal_f79d817be7005f06f9585962f181f70bc1d7d767a1b45d24ec1e50849f105ac2_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_cb9e0acaac61b90668bcb49f46d482f49faa1e54dd75b31d10b2cbe321637185 = $this->env->getExtension("native_profiler");
        $__internal_cb9e0acaac61b90668bcb49f46d482f49faa1e54dd75b31d10b2cbe321637185->enter($__internal_cb9e0acaac61b90668bcb49f46d482f49faa1e54dd75b31d10b2cbe321637185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Editar Proveedor</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedores_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("proveedores_editar");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            * ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodocumento", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodocumento", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero_documento", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero_documento", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>

        ";
        // line 41
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PROV")) {
            // line 42
            echo "        <div class=\"control-group\">
            * ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls\">
                ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
            echo "
            </div>
        </div> 

        <div class=\"control-group\">
            * ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedorclasificacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls\">
                ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedorclasificacion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
            echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            *";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedorarea", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls\">
                ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedorarea", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
            echo "
            </div>
        </div>

        <div class=\"control-group\">
            * ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "directo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls\">
                ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "directo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
            echo "
            </div>
        </div>        
        ";
        }
        // line 70
        echo "        
        <div class=\"control-group\">
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "registro_camara", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "registro_camara", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regimen", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regimen", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sede_principal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sede_principal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div id=\"select_ciudad\" class=\"controls\">
                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            * ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lineaAtencion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lineaAtencion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo " días
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pagina", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pagina", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sedes", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sedes", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datos_sedes", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datos_sedes", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
         <div class=\"control-group\">
            ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo_postal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo_postal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
         <div class=\"control-group\">
            ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cobertura", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cobertura", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
         <div class=\"control-group\">
            ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condiciones_comerciales", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condiciones_comerciales", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
         <div class=\"control-group\">
            ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempo_entrega", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempo_entrega", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo " días
            </div>
        </div>
         <div class=\"control-group\">
            ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cupo_asignado", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cupo_asignado", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
    <div class=\"row-fluid sortable ui-sortable\">
        <div class=\"aeconomica\" data-prototype=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aeconomica", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">    
             <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-list\"></i>Actividad Ecónomica</h2>
            </div>
            ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aeconomica", array()), 'row');
        echo "    
        </div>
    </div>  
<div class=\"form-actions\">
    ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
<input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_cb9e0acaac61b90668bcb49f46d482f49faa1e54dd75b31d10b2cbe321637185->leave($__internal_cb9e0acaac61b90668bcb49f46d482f49faa1e54dd75b31d10b2cbe321637185_prof);

    }

    // line 186
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26bb233daafbe4a01cd2fc24aba3581458c0f516c1ae56d40583a558a8fdca78 = $this->env->getExtension("native_profiler");
        $__internal_26bb233daafbe4a01cd2fc24aba3581458c0f516c1ae56d40583a558a8fdca78->enter($__internal_26bb233daafbe4a01cd2fc24aba3581458c0f516c1ae56d40583a558a8fdca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 187
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#proveedores_pais\" ).change(function() {
            var pais = \$(this).val();
            \$(\"#select_ciudad\").load(\"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("campos_capitales");
        echo "/\"+pais);
        });

        \$( \"#proveedores_numero_documento\" ).keyup(function() {
            var documento = \$(this).val();
            \$(\"#resultado_doc\").load(\"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("proveedores_comprobar_identificacion");
        echo "/\"+documento);
        });

        \$( \"#proveedores_correo\" ).keyup(function() {
            var email = \$(this).val();
            \$(\"#resultado_correo\").load(\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("proveedores_comprobar_correo");
        echo "/\"+email);
        });
    </script>

    <script>
        // Get the div that holds the collection of addresses
        var collectionHolder = \$('div.aeconomica');

\t\tvar Holder = \$('button.btn-primary');
\t\t
        // setup an \"add a address\" link
        var \$newLinkLi = \$('<button class=\"btn\"><a href=\"#\" >Agregar una actividad economica.</a></button>');

        \$(function(){

            // add the \"add a address\" anchor and li to the addresses div
            Holder.parent().append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            collectionHolder.data('index', collectionHolder.find(':input').length);

            \$newLinkLi.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new address form (see next code block)
                addTagForm(collectionHolder);
            });
        });


        function addTagForm(collectionHolder) {
            // Get the data-prototype explained earlier
            var titulo=\$('<div class=\"box-header well\" data-original-title=\"\">Agregar Actividad Economica</div>;');
            var prototype = collectionHolder.data('prototype');

            // get the new index
            var index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            if (collectionHolder.data('index')<4){
                collectionHolder.data('index', index + 1);
            // Display the form in the page in an li, before the \"Add a address\" link li
            var \$newFormLi = \$('<div class=\"box span4\" id=\"actividad'+ index +'\"><div class=\"box-header well\" data-original-title=\"\">Agregar Actividad<div class=\"box-icon\"><a class=\"btn btn-minimize btn-round\" href=\"#\"><i class=\"icon-chevron-up\"></i></a><a class=\"btn btn-close btn-round\" id=\"closeactividad'+ index +'\" href=\"#\"><i class=\"icon-remove\"></i></a></div></div></div>').append(newForm);
            collectionHolder.append(\$newFormLi);
            }else{
                alert(\"Solo pueden agregar 4 codigos de actividad economica\");
            }
            
            var \$Closer = \$('#closeactividad'+ index);

            \$Closer.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                \$( \"div\" ).remove( \"#actividad\"+ index );
            });
        }
    </script>
";
        
        $__internal_26bb233daafbe4a01cd2fc24aba3581458c0f516c1ae56d40583a558a8fdca78->leave($__internal_26bb233daafbe4a01cd2fc24aba3581458c0f516c1ae56d40583a558a8fdca78_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesOperacionesBundle:Proveedor:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 202,  439 => 197,  431 => 192,  422 => 187,  416 => 186,  403 => 179,  399 => 178,  394 => 176,  387 => 172,  380 => 168,  373 => 164,  368 => 162,  361 => 158,  356 => 156,  349 => 152,  344 => 150,  337 => 146,  332 => 144,  325 => 140,  320 => 138,  313 => 134,  308 => 132,  301 => 128,  296 => 126,  289 => 122,  284 => 120,  277 => 116,  272 => 114,  265 => 110,  260 => 108,  253 => 104,  248 => 102,  241 => 98,  236 => 96,  229 => 92,  224 => 90,  217 => 86,  212 => 84,  205 => 80,  200 => 78,  193 => 74,  188 => 72,  184 => 70,  177 => 66,  172 => 64,  164 => 59,  159 => 57,  151 => 52,  146 => 50,  138 => 45,  133 => 43,  130 => 42,  128 => 41,  121 => 37,  116 => 35,  109 => 31,  104 => 29,  97 => 25,  92 => 23,  85 => 19,  80 => 17,  74 => 14,  68 => 13,  61 => 9,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Editar proveedor{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Editar Proveedor</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('proveedores_datos' ,  {"id": id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('proveedores_editar') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.nombre, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.nombre, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.tipodocumento, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.tipodocumento, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.numero_documento, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.numero_documento, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.correo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.correo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if not is_granted('ROLE_PROV') %}*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.categoria, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.categoria, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div> */
/* */
/*         <div class="control-group">*/
/*             * {{ form_label(form.proveedorclasificacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.proveedorclasificacion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="control-group">*/
/*             *{{ form_label(form.proveedorarea, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.proveedorarea, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="control-group">*/
/*             * {{ form_label(form.directo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.directo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>        */
/*         {% endif %}*/
/*         */
/*         <div class="control-group">*/
/*             {{ form_label(form.registro_camara, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.registro_camara, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.regimen, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.regimen, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.sede_principal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.sede_principal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.pais, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.pais, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.ciudad, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div id="select_ciudad" class="controls">*/
/*                 {{ form_widget(form.ciudad, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.direccion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.direccion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             * {{ form_label(form.telefono, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.telefono, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.lineaAtencion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.lineaAtencion, { 'attr': {'class': 'input-xlarge focused'} }) }} días*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.pagina, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.pagina, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.sedes, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.sedes, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.datos_sedes, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.datos_sedes, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*          <div class="control-group">*/
/*             {{ form_label(form.codigo_postal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.codigo_postal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*          <div class="control-group">*/
/*             {{ form_label(form.cobertura, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.cobertura, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*          <div class="control-group">*/
/*             {{ form_label(form.condiciones_comerciales, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.condiciones_comerciales, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*          <div class="control-group">*/
/*             {{ form_label(form.tiempo_entrega, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.tiempo_entrega, { 'attr': {'class': 'input-xlarge focused'} }) }} días*/
/*             </div>*/
/*         </div>*/
/*          <div class="control-group">*/
/*             {{ form_label(form.cupo_asignado, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.cupo_asignado, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*     <div class="row-fluid sortable ui-sortable">*/
/*         <div class="aeconomica" data-prototype="{{ form_widget(form.aeconomica.vars.prototype)|e }}">    */
/*              <div class="box-header well" data-original-title>*/
/*                 <h2><i class="icon-list"></i>Actividad Ecónomica</h2>*/
/*             </div>*/
/*             {{ form_row(form.aeconomica) }}    */
/*         </div>*/
/*     </div>  */
/* <div class="form-actions">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* <input type="hidden" id="id" name="id" value="{{ id }}">*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#proveedores_pais" ).change(function() {*/
/*             var pais = $(this).val();*/
/*             $("#select_ciudad").load("{{ path('campos_capitales') }}/"+pais);*/
/*         });*/
/* */
/*         $( "#proveedores_numero_documento" ).keyup(function() {*/
/*             var documento = $(this).val();*/
/*             $("#resultado_doc").load("{{ path('proveedores_comprobar_identificacion') }}/"+documento);*/
/*         });*/
/* */
/*         $( "#proveedores_correo" ).keyup(function() {*/
/*             var email = $(this).val();*/
/*             $("#resultado_correo").load("{{ path('proveedores_comprobar_correo') }}/"+email);*/
/*         });*/
/*     </script>*/
/* */
/*     <script>*/
/*         // Get the div that holds the collection of addresses*/
/*         var collectionHolder = $('div.aeconomica');*/
/* */
/* 		var Holder = $('button.btn-primary');*/
/* 		*/
/*         // setup an "add a address" link*/
/*         var $newLinkLi = $('<button class="btn"><a href="#" >Agregar una actividad economica.</a></button>');*/
/* */
/*         $(function(){*/
/* */
/*             // add the "add a address" anchor and li to the addresses div*/
/*             Holder.parent().append($newLinkLi);*/
/* */
/*             // count the current form inputs we have (e.g. 2), use that as the new*/
/*             // index when inserting a new item (e.g. 2)*/
/*             collectionHolder.data('index', collectionHolder.find(':input').length);*/
/* */
/*             $newLinkLi.on('click', function(e) {*/
/*                 // prevent the link from creating a "#" on the URL*/
/*                 e.preventDefault();*/
/* */
/*                 // add a new address form (see next code block)*/
/*                 addTagForm(collectionHolder);*/
/*             });*/
/*         });*/
/* */
/* */
/*         function addTagForm(collectionHolder) {*/
/*             // Get the data-prototype explained earlier*/
/*             var titulo=$('<div class="box-header well" data-original-title="">Agregar Actividad Economica</div>;');*/
/*             var prototype = collectionHolder.data('prototype');*/
/* */
/*             // get the new index*/
/*             var index = collectionHolder.data('index');*/
/* */
/*             // Replace '__name__' in the prototype's HTML to*/
/*             // instead be a number based on how many items we have*/
/*             var newForm = prototype.replace(/__name__/g, index);*/
/* */
/*             // increase the index with one for the next item*/
/*             if (collectionHolder.data('index')<4){*/
/*                 collectionHolder.data('index', index + 1);*/
/*             // Display the form in the page in an li, before the "Add a address" link li*/
/*             var $newFormLi = $('<div class="box span4" id="actividad'+ index +'"><div class="box-header well" data-original-title="">Agregar Actividad<div class="box-icon"><a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a><a class="btn btn-close btn-round" id="closeactividad'+ index +'" href="#"><i class="icon-remove"></i></a></div></div></div>').append(newForm);*/
/*             collectionHolder.append($newFormLi);*/
/*             }else{*/
/*                 alert("Solo pueden agregar 4 codigos de actividad economica");*/
/*             }*/
/*             */
/*             var $Closer = $('#closeactividad'+ index);*/
/* */
/*             $Closer.on('click', function(e) {*/
/*                 // prevent the link from creating a "#" on the URL*/
/*                 e.preventDefault();*/
/* */
/*                 $( "div" ).remove( "#actividad"+ index );*/
/*             });*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
