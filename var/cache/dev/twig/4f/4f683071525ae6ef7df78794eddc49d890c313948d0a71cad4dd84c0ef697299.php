<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0d3895a5df2af6701e208be197ae15d6fda55998ec1b03a4ef53171fd2a80672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a052f06ad01d6482521eda33de5c014d3cb58d9cdc5b124c9bc6835073fe57c = $this->env->getExtension("native_profiler");
        $__internal_0a052f06ad01d6482521eda33de5c014d3cb58d9cdc5b124c9bc6835073fe57c->enter($__internal_0a052f06ad01d6482521eda33de5c014d3cb58d9cdc5b124c9bc6835073fe57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a052f06ad01d6482521eda33de5c014d3cb58d9cdc5b124c9bc6835073fe57c->leave($__internal_0a052f06ad01d6482521eda33de5c014d3cb58d9cdc5b124c9bc6835073fe57c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90012b8faa07bf6468a4eef1b30056f224ec5a116465196f5da918405caf4d5f = $this->env->getExtension("native_profiler");
        $__internal_90012b8faa07bf6468a4eef1b30056f224ec5a116465196f5da918405caf4d5f->enter($__internal_90012b8faa07bf6468a4eef1b30056f224ec5a116465196f5da918405caf4d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90012b8faa07bf6468a4eef1b30056f224ec5a116465196f5da918405caf4d5f->leave($__internal_90012b8faa07bf6468a4eef1b30056f224ec5a116465196f5da918405caf4d5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_429e154a2992ec0f57a80d5788b983bfcbc8bfd94ffa2a8a607f5f3b8a3a8970 = $this->env->getExtension("native_profiler");
        $__internal_429e154a2992ec0f57a80d5788b983bfcbc8bfd94ffa2a8a607f5f3b8a3a8970->enter($__internal_429e154a2992ec0f57a80d5788b983bfcbc8bfd94ffa2a8a607f5f3b8a3a8970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_429e154a2992ec0f57a80d5788b983bfcbc8bfd94ffa2a8a607f5f3b8a3a8970->leave($__internal_429e154a2992ec0f57a80d5788b983bfcbc8bfd94ffa2a8a607f5f3b8a3a8970_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fb3f270e32673f6030dbe8fabd34c5d5c3181468464d96dabd15410de5e7058 = $this->env->getExtension("native_profiler");
        $__internal_6fb3f270e32673f6030dbe8fabd34c5d5c3181468464d96dabd15410de5e7058->enter($__internal_6fb3f270e32673f6030dbe8fabd34c5d5c3181468464d96dabd15410de5e7058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6fb3f270e32673f6030dbe8fabd34c5d5c3181468464d96dabd15410de5e7058->leave($__internal_6fb3f270e32673f6030dbe8fabd34c5d5c3181468464d96dabd15410de5e7058_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
