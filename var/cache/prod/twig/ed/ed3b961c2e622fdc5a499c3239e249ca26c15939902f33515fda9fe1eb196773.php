<?php

/* PageBundle:Email:newPassword.html.twig */
class __TwigTemplate_f6e5ae4f31320a022b306bd5d723448955d87c9393610b5eaf59e1606d13849f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PageBundle:Email:base.html.twig", "PageBundle:Email:newPassword.html.twig", 2);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageDesc' => array($this, 'block_pageDesc'),
            'pageKeywords' => array($this, 'block_pageKeywords'),
            'JavaScripts' => array($this, 'block_JavaScripts'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PageBundle:Email:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 4
        echo "    Resetowanie hasła  ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_pageDesc($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    // line 12
    public function block_pageKeywords($context, array $blocks = array())
    {
        // line 13
        echo "
";
    }

    // line 15
    public function block_JavaScripts($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("JavaScripts", $context, $blocks);
        echo "

";
    }

    // line 21
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 22
        echo "
    <h1>Resetowanie hasła</h1>
    Twoje nowe hasło to: <span style=\"font-weight: bold\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["plainPasswd"]) ? $context["plainPasswd"] : null), "html", null, true);
        echo "</span>

";
    }

    public function getTemplateName()
    {
        return "PageBundle:Email:newPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  83 => 22,  80 => 21,  72 => 16,  69 => 15,  64 => 13,  61 => 12,  56 => 10,  53 => 9,  46 => 7,  43 => 6,  36 => 4,  33 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "PageBundle:Email:base.html.twig" %}*/
/* {% block pageTitle %}*/
/*     Resetowanie hasła  {{ parent()}}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/* {% endblock %}*/
/* {% block pageDesc %}*/
/* */
/* {% endblock %}*/
/* {% block pageKeywords %}*/
/* */
/* {% endblock %}*/
/* {% block JavaScripts %}*/
/*     {{ parent()}}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block pageContainer %}*/
/* */
/*     <h1>Resetowanie hasła</h1>*/
/*     Twoje nowe hasło to: <span style="font-weight: bold">{{ plainPasswd }}</span>*/
/* */
/* {% endblock %}*/
