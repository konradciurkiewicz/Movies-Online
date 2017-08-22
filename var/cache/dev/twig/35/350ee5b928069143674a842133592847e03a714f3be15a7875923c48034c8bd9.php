<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34ecb6920bee217d96c5ae908772674ee13139126872f8c7b38c4936be19a5f5 extends Twig_Template
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
        $__internal_808560bc495386770a6aaf514423a9e0977d4b71cc4f191b5b0da7eb0a339483 = $this->env->getExtension("native_profiler");
        $__internal_808560bc495386770a6aaf514423a9e0977d4b71cc4f191b5b0da7eb0a339483->enter($__internal_808560bc495386770a6aaf514423a9e0977d4b71cc4f191b5b0da7eb0a339483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_808560bc495386770a6aaf514423a9e0977d4b71cc4f191b5b0da7eb0a339483->leave($__internal_808560bc495386770a6aaf514423a9e0977d4b71cc4f191b5b0da7eb0a339483_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d37ecb8a828d8aa453333acebe737564a4d687712c537e4631a648a64c6859a = $this->env->getExtension("native_profiler");
        $__internal_3d37ecb8a828d8aa453333acebe737564a4d687712c537e4631a648a64c6859a->enter($__internal_3d37ecb8a828d8aa453333acebe737564a4d687712c537e4631a648a64c6859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d37ecb8a828d8aa453333acebe737564a4d687712c537e4631a648a64c6859a->leave($__internal_3d37ecb8a828d8aa453333acebe737564a4d687712c537e4631a648a64c6859a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9298b4ee8e40e218ae9135daab9f56a2c746f2d061ac23fe404fdd0ace5012a8 = $this->env->getExtension("native_profiler");
        $__internal_9298b4ee8e40e218ae9135daab9f56a2c746f2d061ac23fe404fdd0ace5012a8->enter($__internal_9298b4ee8e40e218ae9135daab9f56a2c746f2d061ac23fe404fdd0ace5012a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9298b4ee8e40e218ae9135daab9f56a2c746f2d061ac23fe404fdd0ace5012a8->leave($__internal_9298b4ee8e40e218ae9135daab9f56a2c746f2d061ac23fe404fdd0ace5012a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45427be897e8296ffecf08a5e81dde0e6ad076a5b2d0f5f487ddba8a89a58e4d = $this->env->getExtension("native_profiler");
        $__internal_45427be897e8296ffecf08a5e81dde0e6ad076a5b2d0f5f487ddba8a89a58e4d->enter($__internal_45427be897e8296ffecf08a5e81dde0e6ad076a5b2d0f5f487ddba8a89a58e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45427be897e8296ffecf08a5e81dde0e6ad076a5b2d0f5f487ddba8a89a58e4d->leave($__internal_45427be897e8296ffecf08a5e81dde0e6ad076a5b2d0f5f487ddba8a89a58e4d_prof);

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
