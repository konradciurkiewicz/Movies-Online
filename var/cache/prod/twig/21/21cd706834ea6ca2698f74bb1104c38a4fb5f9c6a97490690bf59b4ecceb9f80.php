<?php

/* PageBundle:Email:base.html.twig */
class __TwigTemplate_9336217c46d00c42cd0f36dc1747d3a29daebf05cc5e66673b4dc7c341895492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageDesc' => array($this, 'block_pageDesc'),
            'pageKeywords' => array($this, 'block_pageKeywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        ob_start();
        $this->displayBlock('pageTitle', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('pageDesc', $context, $blocks);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 10
        $this->displayBlock('pageKeywords', $context, $blocks);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/img/favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "</body>
</html>";
    }

    // line 8
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "- Gdzie oglądać,  filmy online bez rejestracji";
    }

    // line 9
    public function block_pageDesc($context, array $blocks = array())
    {
    }

    // line 10
    public function block_pageKeywords($context, array $blocks = array())
    {
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "
</head>
<body>

<div class=\"header\">
    <h2>Gdzie-ogladac.pl - filmy online bez rejestracji</h2>
</div>
        ";
        // line 21
        $this->displayBlock('pageContainer', $context, $blocks);
        // line 24
        echo "
";
    }

    // line 21
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 22
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PageBundle:Email:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  94 => 21,  89 => 24,  87 => 21,  78 => 14,  75 => 13,  70 => 10,  65 => 9,  59 => 8,  54 => 26,  52 => 13,  47 => 11,  43 => 10,  39 => 9,  33 => 8,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pl">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% spaceless %}{% block pageTitle %}- Gdzie oglądać,  filmy online bez rejestracji{% endblock %}{% endspaceless %}</title>*/
/*     <meta name="description" content="{% block pageDesc %}{% endblock %}">*/
/*     <meta name="keywords" content="{% block pageKeywords %}{% endblock %}">*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/page/img/favicon.ico') }}" />*/
/* */
/*     {% block stylesheets %}*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <div class="header">*/
/*     <h2>Gdzie-ogladac.pl - filmy online bez rejestracji</h2>*/
/* </div>*/
/*         {% block pageContainer %}*/
/* */
/*         {% endblock %}*/
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
