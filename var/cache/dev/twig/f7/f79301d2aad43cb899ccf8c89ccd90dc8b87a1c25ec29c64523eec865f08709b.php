<?php

/* PageBundle:Template:flashMsg.html.twig */
class __TwigTemplate_c4de0c61eb74b7633f58e2e5c84870d92b6270db3bd8206264ee46808a389593 extends Twig_Template
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
        $__internal_8a633eb097b2ca83b77301290f06471941311e2036e91ae5e6ae751492cef01f = $this->env->getExtension("native_profiler");
        $__internal_8a633eb097b2ca83b77301290f06471941311e2036e91ae5e6ae751492cef01f->enter($__internal_8a633eb097b2ca83b77301290f06471941311e2036e91ae5e6ae751492cef01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Template:flashMsg.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["success"]) {
            // line 2
            echo "<div class=\"alert alert-success\">
   <b> ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["success"]), "html", null, true);
            echo " </b>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["failure"]) {
            // line 8
            echo "<div class=\"alert alert-danger\">
    <b> ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["failure"]), "html", null, true);
            echo " </b>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8a633eb097b2ca83b77301290f06471941311e2036e91ae5e6ae751492cef01f->leave($__internal_8a633eb097b2ca83b77301290f06471941311e2036e91ae5e6ae751492cef01f_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Template:flashMsg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  41 => 7,  38 => 6,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for success in app.session.flashBag.get('success', []) %}*/
/* <div class="alert alert-success">*/
/*    <b> {{ success|trans }} </b>*/
/* </div>*/
/* {% endfor %}*/
/* */
/* {% for failure in app.session.flashBag.get('error', []) %}*/
/* <div class="alert alert-danger">*/
/*     <b> {{ failure|trans }} </b>*/
/* </div>*/
/* {% endfor %}*/
