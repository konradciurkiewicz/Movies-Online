<?php

/* PageBundle:Form:form_template.html.twig */
class __TwigTemplate_c85784ef33b715e7bff6f66417499093a38a5ccaa87230ed814ac1b6bc88a67b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4bcfd82a4e321ad28e9866e212117fad53eaaac05807e61a13b0500d228933a = $this->env->getExtension("native_profiler");
        $__internal_d4bcfd82a4e321ad28e9866e212117fad53eaaac05807e61a13b0500d228933a->enter($__internal_d4bcfd82a4e321ad28e9866e212117fad53eaaac05807e61a13b0500d228933a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Form:form_template.html.twig"));

        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('button_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('form_errors', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 64
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 71
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_d4bcfd82a4e321ad28e9866e212117fad53eaaac05807e61a13b0500d228933a->leave($__internal_d4bcfd82a4e321ad28e9866e212117fad53eaaac05807e61a13b0500d228933a_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2373a9352f807b49f7f3501a367b9ce54c6c778c29c66ff37d521fcb056883c3 = $this->env->getExtension("native_profiler");
        $__internal_2373a9352f807b49f7f3501a367b9ce54c6c778c29c66ff37d521fcb056883c3->enter($__internal_2373a9352f807b49f7f3501a367b9ce54c6c778c29c66ff37d521fcb056883c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 4
        echo "        ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 5
            echo "            ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            // line 6
            echo "        ";
        } else {
            // line 7
            echo "            ";
            $context["form_method"] = "POST";
            // line 8
            echo "        ";
        }
        // line 9
        echo "        <form name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo " novalidate=\"true\">
        ";
        // line 10
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 11
            echo "            <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />
        ";
        }
        // line 13
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2373a9352f807b49f7f3501a367b9ce54c6c778c29c66ff37d521fcb056883c3->leave($__internal_2373a9352f807b49f7f3501a367b9ce54c6c778c29c66ff37d521fcb056883c3_prof);

    }

    // line 16
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_04995a1a23f115414350e7dc80570c92e3e0ba10d065e19b2eeb7b9b24a93928 = $this->env->getExtension("native_profiler");
        $__internal_04995a1a23f115414350e7dc80570c92e3e0ba10d065e19b2eeb7b9b24a93928->enter($__internal_04995a1a23f115414350e7dc80570c92e3e0ba10d065e19b2eeb7b9b24a93928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_04995a1a23f115414350e7dc80570c92e3e0ba10d065e19b2eeb7b9b24a93928->leave($__internal_04995a1a23f115414350e7dc80570c92e3e0ba10d065e19b2eeb7b9b24a93928_prof);

    }

    // line 26
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5498894a6cfe533175181adabc06f4a8a5947efc0c01600017c0570fae2089b2 = $this->env->getExtension("native_profiler");
        $__internal_5498894a6cfe533175181adabc06f4a8a5947efc0c01600017c0570fae2089b2->enter($__internal_5498894a6cfe533175181adabc06f4a8a5947efc0c01600017c0570fae2089b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div style=\"float: right\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>        <div style=\"clear: both\"></div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5498894a6cfe533175181adabc06f4a8a5947efc0c01600017c0570fae2089b2->leave($__internal_5498894a6cfe533175181adabc06f4a8a5947efc0c01600017c0570fae2089b2_prof);

    }

    // line 35
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5a0a9382100cf1481092e14a503387bc2fb029843875a291c88e7ee9d917a64f = $this->env->getExtension("native_profiler");
        $__internal_5a0a9382100cf1481092e14a503387bc2fb029843875a291c88e7ee9d917a64f->enter($__internal_5a0a9382100cf1481092e14a503387bc2fb029843875a291c88e7ee9d917a64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 36
        echo "    ";
        ob_start();
        // line 37
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 39
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "message", array())), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        }
        // line 42
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5a0a9382100cf1481092e14a503387bc2fb029843875a291c88e7ee9d917a64f->leave($__internal_5a0a9382100cf1481092e14a503387bc2fb029843875a291c88e7ee9d917a64f_prof);

    }

    // line 45
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_f62fa469922b56060174c5ff018aafde13bacabd32e55aae3d0b345fe2a714c4 = $this->env->getExtension("native_profiler");
        $__internal_f62fa469922b56060174c5ff018aafde13bacabd32e55aae3d0b345fe2a714c4->enter($__internal_f62fa469922b56060174c5ff018aafde13bacabd32e55aae3d0b345fe2a714c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 46
        echo "    ";
        ob_start();
        // line 47
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 48
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "btn btn-raised btn-primary"));
        // line 49
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f62fa469922b56060174c5ff018aafde13bacabd32e55aae3d0b345fe2a714c4->leave($__internal_f62fa469922b56060174c5ff018aafde13bacabd32e55aae3d0b345fe2a714c4_prof);

    }

    // line 53
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ed1578688ac11d74cc24d28526e358874b77c3193052ff0b581aa451f57da7ce = $this->env->getExtension("native_profiler");
        $__internal_ed1578688ac11d74cc24d28526e358874b77c3193052ff0b581aa451f57da7ce->enter($__internal_ed1578688ac11d74cc24d28526e358874b77c3193052ff0b581aa451f57da7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 54
        echo "    ";
        ob_start();
        // line 55
        echo "
        <div class=\"form-row checkbox";
        // line 56
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\">
            <label";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "<span class=\"checkbox-material\"><span class=\"check\"></span></span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "label", array()), "html", null, true);
        echo "
            </label>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ed1578688ac11d74cc24d28526e358874b77c3193052ff0b581aa451f57da7ce->leave($__internal_ed1578688ac11d74cc24d28526e358874b77c3193052ff0b581aa451f57da7ce_prof);

    }

    // line 64
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9e0037ed336683e0ba335970020c565184cc3542fee426597629d15e54047ce8 = $this->env->getExtension("native_profiler");
        $__internal_9e0037ed336683e0ba335970020c565184cc3542fee426597629d15e54047ce8->enter($__internal_9e0037ed336683e0ba335970020c565184cc3542fee426597629d15e54047ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 65
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 66
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 67
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "form-control"))));
            // line 68
            echo "    ";
        }
        // line 69
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" placeholder=\"\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_9e0037ed336683e0ba335970020c565184cc3542fee426597629d15e54047ce8->leave($__internal_9e0037ed336683e0ba335970020c565184cc3542fee426597629d15e54047ce8_prof);

    }

    // line 71
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_037d2f0c5f108c4262941c82952ad0bc7d8ba2c7c976b0288121ee251e46f166 = $this->env->getExtension("native_profiler");
        $__internal_037d2f0c5f108c4262941c82952ad0bc7d8ba2c7c976b0288121ee251e46f166->enter($__internal_037d2f0c5f108c4262941c82952ad0bc7d8ba2c7c976b0288121ee251e46f166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 72
        echo "<textarea class=\"form-control\" rows=\"3\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_037d2f0c5f108c4262941c82952ad0bc7d8ba2c7c976b0288121ee251e46f166->leave($__internal_037d2f0c5f108c4262941c82952ad0bc7d8ba2c7c976b0288121ee251e46f166_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Form:form_template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  342 => 72,  336 => 71,  319 => 69,  316 => 68,  313 => 67,  311 => 66,  309 => 65,  303 => 64,  289 => 58,  274 => 57,  268 => 56,  265 => 55,  262 => 54,  256 => 53,  245 => 49,  242 => 48,  239 => 47,  236 => 46,  230 => 45,  222 => 42,  219 => 41,  210 => 39,  205 => 38,  202 => 37,  199 => 36,  193 => 35,  181 => 29,  178 => 28,  175 => 27,  169 => 26,  158 => 21,  154 => 20,  150 => 19,  143 => 18,  140 => 17,  134 => 16,  126 => 13,  120 => 11,  118 => 10,  93 => 9,  90 => 8,  87 => 7,  84 => 6,  81 => 5,  78 => 4,  75 => 3,  72 => 2,  66 => 1,  59 => 71,  57 => 64,  55 => 53,  52 => 52,  50 => 45,  47 => 44,  45 => 35,  42 => 34,  40 => 26,  37 => 25,  35 => 16,  32 => 15,  30 => 1,);
    }
}
/* {% block form_start %}*/
/*     {% spaceless %}*/
/*         {% set method = method|upper %}*/
/*         {% if method in ["GET", "POST"] %}*/
/*             {% set form_method = method %}*/
/*         {% else %}*/
/*             {% set form_method = "POST" %}*/
/*         {% endif %}*/
/*         <form name="{{ form.vars.name }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %} novalidate="true">*/
/*         {% if form_method != method %}*/
/*             <input type="hidden" name="_method" value="{{ method }}" />*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_start %}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group{% if errors|length > 0 %} error{% endif %}">*/
/*             {{ form_label(form) }}*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block button_row %}*/
/*     {% spaceless %}*/
/*         <div style="float: right">*/
/*         {{ form_widget(form) }}*/
/*         </div>        <div style="clear: both"></div>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock button_row %}*/
/* */
/* {% block form_errors %}*/
/*     {% spaceless %}*/
/*         {% if errors|length > 0 %}*/
/*             {% for error in errors %}*/
/*                 <span>{{ error.message|trans }}</span>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block submit_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('submit') %}*/
/*         {% set attr = attr|merge({'class': 'btn btn-raised btn-primary'}) %}*/
/*         {{ block('button_widget') }}*/
/*     {% endspaceless %}*/
/* {% endblock submit_widget %}*/
/* */
/* {% block checkbox_row %}*/
/*     {% spaceless %}*/
/* */
/*         <div class="form-row checkbox{% if errors|length > 0 %} error{% endif %}">*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{ form_widget(form) }}<span class="checkbox-material"><span class="check"></span></span> {{ form.vars.label }}*/
/*             </label>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {% if type!='file' %}*/
/*         {% set attr = attr|merge({'class':(attr.class|default('') ~ 'form-control')|trim}) %}*/
/*     {% endif %}*/
/*     <input type="{{ type }}" placeholder="" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* {%- block textarea_widget -%}*/
/*     <textarea class="form-control" rows="3" {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
