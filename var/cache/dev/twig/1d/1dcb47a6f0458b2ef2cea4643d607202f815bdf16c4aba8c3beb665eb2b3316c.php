<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da78ef5bcb14fb2278983ee95ed00bbc013bb48f7edb81a07668655eeeb2db70 extends Twig_Template
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
        $__internal_62d71575a48fc61737744918e19aa97a656ae4bd9c2119a57eb0eaaaa5f57590 = $this->env->getExtension("native_profiler");
        $__internal_62d71575a48fc61737744918e19aa97a656ae4bd9c2119a57eb0eaaaa5f57590->enter($__internal_62d71575a48fc61737744918e19aa97a656ae4bd9c2119a57eb0eaaaa5f57590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d71575a48fc61737744918e19aa97a656ae4bd9c2119a57eb0eaaaa5f57590->leave($__internal_62d71575a48fc61737744918e19aa97a656ae4bd9c2119a57eb0eaaaa5f57590_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95568ebb389f0fbde437085389c90733ec3eef433514c969de9e27f93746835c = $this->env->getExtension("native_profiler");
        $__internal_95568ebb389f0fbde437085389c90733ec3eef433514c969de9e27f93746835c->enter($__internal_95568ebb389f0fbde437085389c90733ec3eef433514c969de9e27f93746835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_95568ebb389f0fbde437085389c90733ec3eef433514c969de9e27f93746835c->leave($__internal_95568ebb389f0fbde437085389c90733ec3eef433514c969de9e27f93746835c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97b2c1fecca16e2078d64f7133c993f263d96834ba145a1ad95b14619be92fbd = $this->env->getExtension("native_profiler");
        $__internal_97b2c1fecca16e2078d64f7133c993f263d96834ba145a1ad95b14619be92fbd->enter($__internal_97b2c1fecca16e2078d64f7133c993f263d96834ba145a1ad95b14619be92fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97b2c1fecca16e2078d64f7133c993f263d96834ba145a1ad95b14619be92fbd->leave($__internal_97b2c1fecca16e2078d64f7133c993f263d96834ba145a1ad95b14619be92fbd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_39bf32ff6587cdb91b3e82587e5c4ead8a053ca33359782af242d79808164185 = $this->env->getExtension("native_profiler");
        $__internal_39bf32ff6587cdb91b3e82587e5c4ead8a053ca33359782af242d79808164185->enter($__internal_39bf32ff6587cdb91b3e82587e5c4ead8a053ca33359782af242d79808164185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_39bf32ff6587cdb91b3e82587e5c4ead8a053ca33359782af242d79808164185->leave($__internal_39bf32ff6587cdb91b3e82587e5c4ead8a053ca33359782af242d79808164185_prof);

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
