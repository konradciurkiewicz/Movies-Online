<?php

/* PageBundle:Pages:login.html.twig */
class __TwigTemplate_23308d4770b231becf16e8b9341e82052c9bf9906922ed98aacd87f7a354a92c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PageBundle:base.html.twig", "PageBundle:Pages:login.html.twig", 1);
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
        echo "    Logowanie i rejestracja  ";
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
        // line 9
        echo "    Szukasz najnowszych seriali lub filmów online? Świetnie! Gdzie-Ogladac.pl to najlepsza strona z linkami do najpopularniejszych seriali i filmów. Wszystko za darmo i bez rejestracji.

";
    }

    // line 12
    public function block_pageKeywords($context, array $blocks = array())
    {
        // line 13
        echo "    gdzie oglądać filmy online, gdzie oglądać filmy, gdzie oglądać seriale, seriale online, filmy online, filmy online bez rejestracji, seriale online bez rejestracji, gdzie, oglądać, darmowe, seriale, online, bez, rejestracji, strona, linki, gdzie, ogladac, linki, serial, seriali, filmy, flim, filmów, najnowsze
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

    // line 22
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 23
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <h2>Logowanie i rejestracja</h2><hr/>
            ";
        // line 27
        $this->loadTemplate("PageBundle:Template:flashMsg.html.twig", "PageBundle:Pages:login.html.twig", 27)->display($context);
        // line 28
        echo "            <div class=\"col-md-5\">
                <h4>Logowanie</h4>


                ";
        // line 32
        $this->env->getExtension('form')->renderer->setTheme((isset($context["loginForm"]) ? $context["loginForm"] : null), array(0 => "PageBundle:Form:form_template.html.twig"));
        // line 33
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : null), 'form', array("action" => $this->env->getExtension('routing')->getPath("_check_path")));
        echo "
                <h4>Przypomnij hasło</h4>
                ";
        // line 35
        $this->env->getExtension('form')->renderer->setTheme((isset($context["rememberPasswdForm"]) ? $context["rememberPasswdForm"] : null), array(0 => "PageBundle:Form:form_template.html.twig"));
        // line 36
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["rememberPasswdForm"]) ? $context["rememberPasswdForm"] : null), 'form');
        echo "


            </div>
            <div class=\"col-md-2 \"></div>
            <div class=\"col-md-5\">

                <h4>Rejestracja</h4>

                ";
        // line 45
        $this->env->getExtension('form')->renderer->setTheme((isset($context["registerUserForm"]) ? $context["registerUserForm"] : null), array(0 => "PageBundle:Form:form_template.html.twig"));
        // line 46
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["registerUserForm"]) ? $context["registerUserForm"] : null), 'form');
        echo "
            </div>
            </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Pages:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  121 => 45,  108 => 36,  106 => 35,  100 => 33,  98 => 32,  92 => 28,  90 => 27,  84 => 23,  81 => 22,  73 => 16,  70 => 15,  65 => 13,  62 => 12,  56 => 9,  53 => 8,  46 => 6,  43 => 5,  36 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "PageBundle:base.html.twig" %}*/
/* {% block pageTitle %}*/
/*     Logowanie i rejestracja  {{ parent()}}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/* {% endblock %}*/
/* {% block pageDesc %}*/
/*     Szukasz najnowszych seriali lub filmów online? Świetnie! Gdzie-Ogladac.pl to najlepsza strona z linkami do najpopularniejszych seriali i filmów. Wszystko za darmo i bez rejestracji.*/
/* */
/* {% endblock %}*/
/* {% block pageKeywords %}*/
/*     gdzie oglądać filmy online, gdzie oglądać filmy, gdzie oglądać seriale, seriale online, filmy online, filmy online bez rejestracji, seriale online bez rejestracji, gdzie, oglądać, darmowe, seriale, online, bez, rejestracji, strona, linki, gdzie, ogladac, linki, serial, seriali, filmy, flim, filmów, najnowsze*/
/* {% endblock %}*/
/* {% block JavaScripts %}*/
/*     {{ parent()}}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block pageContainer %}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*             <h2>Logowanie i rejestracja</h2><hr/>*/
/*             {% include 'PageBundle:Template:flashMsg.html.twig' %}*/
/*             <div class="col-md-5">*/
/*                 <h4>Logowanie</h4>*/
/* */
/* */
/*                 {% form_theme loginForm 'PageBundle:Form:form_template.html.twig' %}*/
/*                 {{ form(loginForm, {'action': path('_check_path')}) }}*/
/*                 <h4>Przypomnij hasło</h4>*/
/*                 {% form_theme rememberPasswdForm 'PageBundle:Form:form_template.html.twig' %}*/
/*                 {{ form(rememberPasswdForm) }}*/
/* */
/* */
/*             </div>*/
/*             <div class="col-md-2 "></div>*/
/*             <div class="col-md-5">*/
/* */
/*                 <h4>Rejestracja</h4>*/
/* */
/*                 {% form_theme registerUserForm 'PageBundle:Form:form_template.html.twig' %}*/
/*                 {{ form(registerUserForm) }}*/
/*             </div>*/
/*             </div>*/
/*     </div>*/
/* {% endblock %}*/
