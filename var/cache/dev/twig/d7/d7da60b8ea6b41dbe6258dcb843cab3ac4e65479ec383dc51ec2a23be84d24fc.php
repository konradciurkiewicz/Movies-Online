<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_64ec592b1efd0b113aa0ee386db286b8f0384b54839105261ed2a7b73f673669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ddefc52966a7b7772be35da1616a79f50b743e89a40b043e1fd349233d09d27 = $this->env->getExtension("native_profiler");
        $__internal_0ddefc52966a7b7772be35da1616a79f50b743e89a40b043e1fd349233d09d27->enter($__internal_0ddefc52966a7b7772be35da1616a79f50b743e89a40b043e1fd349233d09d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ddefc52966a7b7772be35da1616a79f50b743e89a40b043e1fd349233d09d27->leave($__internal_0ddefc52966a7b7772be35da1616a79f50b743e89a40b043e1fd349233d09d27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_daeff95108b2f0dfb3c484e80a33194863f002f011e49b4f405e1ff862dfd1c0 = $this->env->getExtension("native_profiler");
        $__internal_daeff95108b2f0dfb3c484e80a33194863f002f011e49b4f405e1ff862dfd1c0->enter($__internal_daeff95108b2f0dfb3c484e80a33194863f002f011e49b4f405e1ff862dfd1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_daeff95108b2f0dfb3c484e80a33194863f002f011e49b4f405e1ff862dfd1c0->leave($__internal_daeff95108b2f0dfb3c484e80a33194863f002f011e49b4f405e1ff862dfd1c0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46907253c7b6893f46ca4d7e9b4b49c11c8c3b8a2e7073767e1de3479b2c73cb = $this->env->getExtension("native_profiler");
        $__internal_46907253c7b6893f46ca4d7e9b4b49c11c8c3b8a2e7073767e1de3479b2c73cb->enter($__internal_46907253c7b6893f46ca4d7e9b4b49c11c8c3b8a2e7073767e1de3479b2c73cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_46907253c7b6893f46ca4d7e9b4b49c11c8c3b8a2e7073767e1de3479b2c73cb->leave($__internal_46907253c7b6893f46ca4d7e9b4b49c11c8c3b8a2e7073767e1de3479b2c73cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_289319ca70d61a48fb85cd5dd89968694e9eb27d986e79c8cc014f5861a98b5c = $this->env->getExtension("native_profiler");
        $__internal_289319ca70d61a48fb85cd5dd89968694e9eb27d986e79c8cc014f5861a98b5c->enter($__internal_289319ca70d61a48fb85cd5dd89968694e9eb27d986e79c8cc014f5861a98b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_289319ca70d61a48fb85cd5dd89968694e9eb27d986e79c8cc014f5861a98b5c->leave($__internal_289319ca70d61a48fb85cd5dd89968694e9eb27d986e79c8cc014f5861a98b5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
