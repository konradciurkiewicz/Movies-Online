<?php

/* PageBundle:Template:flashMsg.html.twig */
class __TwigTemplate_bfc7a011f208beaefa7dc1960a77a160eacef97dd41cafca76ca014d53fa68f5 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "success", 1 => array()), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "error", 1 => array()), "method"));
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
        return array (  45 => 9,  42 => 8,  38 => 7,  35 => 6,  26 => 3,  23 => 2,  19 => 1,);
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
