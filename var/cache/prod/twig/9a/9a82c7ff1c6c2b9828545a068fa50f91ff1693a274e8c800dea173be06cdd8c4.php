<?php

/* PageBundle:Email:accountActivation.html.twig */
class __TwigTemplate_6573508046d0f00990118bc041b9b79e58e79287c706e3cccdd71b7810c35f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PageBundle:Email:base.html.twig", "PageBundle:Email:accountActivation.html.twig", 2);
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
        echo "    Rejestracja  ";
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
    <h1>Rejestracja nowego użytkownika</h1>
   <p>Utworzyłeś konto na gdzie-ogladac.pl. Aby je aktywować kliknij w link poniżej:</p>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["activationUrl"]) ? $context["activationUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["activationUrl"]) ? $context["activationUrl"] : null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Email:accountActivation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  83 => 22,  80 => 21,  72 => 16,  69 => 15,  64 => 13,  61 => 12,  56 => 10,  53 => 9,  46 => 7,  43 => 6,  36 => 4,  33 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "PageBundle:Email:base.html.twig" %}*/
/* {% block pageTitle %}*/
/*     Rejestracja  {{ parent()}}*/
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
/*     <h1>Rejestracja nowego użytkownika</h1>*/
/*    <p>Utworzyłeś konto na gdzie-ogladac.pl. Aby je aktywować kliknij w link poniżej:</p>*/
/*     <a href="{{ activationUrl }}">{{ activationUrl }}</a>*/
/* {% endblock %}*/
