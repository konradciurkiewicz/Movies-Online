<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c2383663fd8a5b1e4ac157cbb426cbaa49e6ddbe0d29d5104617840076c4a390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_47623028a30828ce1927bcad36ff8ca0c7ded91ff6b8ef3506bc164eaf465c32 = $this->env->getExtension("native_profiler");
        $__internal_47623028a30828ce1927bcad36ff8ca0c7ded91ff6b8ef3506bc164eaf465c32->enter($__internal_47623028a30828ce1927bcad36ff8ca0c7ded91ff6b8ef3506bc164eaf465c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47623028a30828ce1927bcad36ff8ca0c7ded91ff6b8ef3506bc164eaf465c32->leave($__internal_47623028a30828ce1927bcad36ff8ca0c7ded91ff6b8ef3506bc164eaf465c32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a187b6cbdcb8ea78311b2297fcf32950f23281e1bfaded1e9dcca9ea3cc188b0 = $this->env->getExtension("native_profiler");
        $__internal_a187b6cbdcb8ea78311b2297fcf32950f23281e1bfaded1e9dcca9ea3cc188b0->enter($__internal_a187b6cbdcb8ea78311b2297fcf32950f23281e1bfaded1e9dcca9ea3cc188b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a187b6cbdcb8ea78311b2297fcf32950f23281e1bfaded1e9dcca9ea3cc188b0->leave($__internal_a187b6cbdcb8ea78311b2297fcf32950f23281e1bfaded1e9dcca9ea3cc188b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36c78275bb1e864ddd246cced82fc64d4167cd02954c7ae2b847d2aa319912c0 = $this->env->getExtension("native_profiler");
        $__internal_36c78275bb1e864ddd246cced82fc64d4167cd02954c7ae2b847d2aa319912c0->enter($__internal_36c78275bb1e864ddd246cced82fc64d4167cd02954c7ae2b847d2aa319912c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36c78275bb1e864ddd246cced82fc64d4167cd02954c7ae2b847d2aa319912c0->leave($__internal_36c78275bb1e864ddd246cced82fc64d4167cd02954c7ae2b847d2aa319912c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e760c26b2b0041a7612ffe11afd18fb87fbd9f107112581262ee516cb5444ba = $this->env->getExtension("native_profiler");
        $__internal_5e760c26b2b0041a7612ffe11afd18fb87fbd9f107112581262ee516cb5444ba->enter($__internal_5e760c26b2b0041a7612ffe11afd18fb87fbd9f107112581262ee516cb5444ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e760c26b2b0041a7612ffe11afd18fb87fbd9f107112581262ee516cb5444ba->leave($__internal_5e760c26b2b0041a7612ffe11afd18fb87fbd9f107112581262ee516cb5444ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
