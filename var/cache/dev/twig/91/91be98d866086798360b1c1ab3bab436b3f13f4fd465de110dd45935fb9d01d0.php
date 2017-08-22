<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c96c41590409acdc0e4d7bdee40f88158ac0319c8680a7431abaa7791b2764e extends Twig_Template
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
        $__internal_c822f3ccf9a7173d92070b67d29fefc698805029a1333853dedef4da3ab14cd6 = $this->env->getExtension("native_profiler");
        $__internal_c822f3ccf9a7173d92070b67d29fefc698805029a1333853dedef4da3ab14cd6->enter($__internal_c822f3ccf9a7173d92070b67d29fefc698805029a1333853dedef4da3ab14cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c822f3ccf9a7173d92070b67d29fefc698805029a1333853dedef4da3ab14cd6->leave($__internal_c822f3ccf9a7173d92070b67d29fefc698805029a1333853dedef4da3ab14cd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41f8680c3585a44ce1919d6acaba5199da858035fb814281d647694de8541dc1 = $this->env->getExtension("native_profiler");
        $__internal_41f8680c3585a44ce1919d6acaba5199da858035fb814281d647694de8541dc1->enter($__internal_41f8680c3585a44ce1919d6acaba5199da858035fb814281d647694de8541dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_41f8680c3585a44ce1919d6acaba5199da858035fb814281d647694de8541dc1->leave($__internal_41f8680c3585a44ce1919d6acaba5199da858035fb814281d647694de8541dc1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46d63b2c50696aa925db7afd9bb4d9c1ab532efbc7986aaa282a9c2c72585644 = $this->env->getExtension("native_profiler");
        $__internal_46d63b2c50696aa925db7afd9bb4d9c1ab532efbc7986aaa282a9c2c72585644->enter($__internal_46d63b2c50696aa925db7afd9bb4d9c1ab532efbc7986aaa282a9c2c72585644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46d63b2c50696aa925db7afd9bb4d9c1ab532efbc7986aaa282a9c2c72585644->leave($__internal_46d63b2c50696aa925db7afd9bb4d9c1ab532efbc7986aaa282a9c2c72585644_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7da236dbea6cac58373396fb76f00a2be4d3acf21307e06f0ae5ba894217bd41 = $this->env->getExtension("native_profiler");
        $__internal_7da236dbea6cac58373396fb76f00a2be4d3acf21307e06f0ae5ba894217bd41->enter($__internal_7da236dbea6cac58373396fb76f00a2be4d3acf21307e06f0ae5ba894217bd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7da236dbea6cac58373396fb76f00a2be4d3acf21307e06f0ae5ba894217bd41->leave($__internal_7da236dbea6cac58373396fb76f00a2be4d3acf21307e06f0ae5ba894217bd41_prof);

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
