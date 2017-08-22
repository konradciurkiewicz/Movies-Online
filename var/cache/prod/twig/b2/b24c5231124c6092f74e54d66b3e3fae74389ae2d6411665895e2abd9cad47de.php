<?php

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_7719064b987143d83f621aa0af83f8f37277b501abdcb5e8f867ee4d1102bebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PageBundle:base.html.twig", "@Twig/Exception/error500.html.twig", 1);
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
        return "PageBundle:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 3
        echo "    Nie odnaleziono strony  ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_pageDesc($context, array $blocks = array())
    {
    }

    // line 10
    public function block_pageKeywords($context, array $blocks = array())
    {
        // line 11
        echo "
";
    }

    // line 13
    public function block_JavaScripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("JavaScripts", $context, $blocks);
        echo "

";
    }

    // line 19
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <div class=\"jumbotron\">
                <h1>Ups.. Błąd serwera</h1>
                <p>Wystąpił błąd serwera. Proszę odświeżyć stronę za chwilę.</p>
                <p><a class=\"btn btn-primary btn-lg\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\" role=\"button\">Wróć na strone główną</a></p>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  80 => 20,  77 => 19,  69 => 14,  66 => 13,  61 => 11,  58 => 10,  53 => 8,  46 => 6,  43 => 5,  36 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "PageBundle:base.html.twig" %}*/
/* {% block pageTitle %}*/
/*     Nie odnaleziono strony  {{ parent()}}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/* {% endblock %}*/
/* {% block pageDesc %}*/
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
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*             <div class="jumbotron">*/
/*                 <h1>Ups.. Błąd serwera</h1>*/
/*                 <p>Wystąpił błąd serwera. Proszę odświeżyć stronę za chwilę.</p>*/
/*                 <p><a class="btn btn-primary btn-lg" href="{{ path('page_index') }}" role="button">Wróć na strone główną</a></p>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
