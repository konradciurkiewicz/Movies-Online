<?php

/* PageBundle:User:form.html.twig */
class __TwigTemplate_589bf45cc9c43b5285860e01299a6dd95df39424b9f0f33bfd2395cc93fac64c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PageBundle:base.html.twig", "PageBundle:User:form.html.twig", 1);
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
        // line 2
        $context["pageTitle"] = (((null === $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "id", array()))) ? ("Dodawanie nowego filmu") : (sprintf("Edycja video \"%s\"", $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_pageDesc($context, array $blocks = array())
    {
        // line 11
        echo "    Szukasz najnowszych seriali lub filmów online? Świetnie! Gdzie-Ogladac.pl to najlepsza strona z linkami do najpopularniejszych seriali i filmów. Wszystko za darmo i bez rejestracji.

";
    }

    // line 14
    public function block_pageKeywords($context, array $blocks = array())
    {
        // line 15
        echo "    gdzie oglądać filmy online, gdzie oglądać filmy, gdzie oglądać seriale, seriale online, filmy online, filmy online bez rejestracji, seriale online bez rejestracji, gdzie, oglądać, darmowe, seriale, online, bez, rejestracji, strona, linki, gdzie, ogladac, linki, serial, seriali, filmy, flim, filmów, najnowsze

";
    }

    // line 18
    public function block_JavaScripts($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("JavaScripts", $context, $blocks);
        echo "

";
    }

    // line 24
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"container\">
        ";
        // line 26
        $this->loadTemplate("PageBundle:Template:flashMsg.html.twig", "PageBundle:User:form.html.twig", 26)->display($context);
        // line 27
        echo "
        ";
        // line 28
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "PageBundle:Form:form_template.html.twig"));
        // line 29
        echo "
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <div class=\"row\">

            <div class=\"col-md-8\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo "
                    </div>

                    <div class=\"panel-body\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'row');
        echo "
                        ";
        // line 42
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'row');
        echo "
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Akcje
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div> <!-- .col-md-12 -->

                    <div class=\"col-md-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Miniaturka
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 67
        if ((null === $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array()))) {
            // line 68
            echo "                                    <p>Brak miniaturki</p>
                                ";
        } else {
            // line 70
            echo "                                    <p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array())), "html", null, true);
            echo "\" width=\"242px\" height=\"200px\" alt=\"\" class=\"img-thumbnail\"></p>
                                ";
        }
        // line 72
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "thumbnail", array()), 'row');
        echo "

                            </div>
                        </div>
                    </div> <!-- .col-md-12 -->

                    ";
        // line 79
        echo "                        ";
        // line 80
        echo "                            ";
        // line 81
        echo "                                ";
        // line 82
        echo "                            ";
        // line 83
        echo "                            ";
        // line 84
        echo "                                ";
        // line 85
        echo "                            ";
        // line 86
        echo "                        ";
        // line 87
        echo "                    ";
        // line 88
        echo "
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Taksonomie
                            </div>
                            <div class=\"panel-body\">

                                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", array()), 'row', array("label_length" => 3, "wrapper_length" => 9, "attr" => array("class" => "select-block")));
        echo "

                                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tagline", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div> <!-- .col-md-12 -->

                </div>
            </div>

        </div>
        ";
        // line 107
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:User:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 107,  208 => 98,  203 => 96,  193 => 88,  191 => 87,  189 => 86,  187 => 85,  185 => 84,  183 => 83,  181 => 82,  179 => 81,  177 => 80,  175 => 79,  165 => 72,  159 => 70,  155 => 68,  153 => 67,  139 => 56,  121 => 42,  117 => 40,  110 => 36,  101 => 30,  98 => 29,  96 => 28,  93 => 27,  91 => 26,  88 => 25,  85 => 24,  77 => 19,  74 => 18,  68 => 15,  65 => 14,  59 => 11,  56 => 10,  49 => 8,  46 => 7,  39 => 5,  36 => 4,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends "PageBundle:base.html.twig" %}*/
/* {% set pageTitle = video.id is null ? 'Dodawanie nowego filmu' : 'Edycja video "%s"'|format(video.title) %}*/
/* */
/* {% block pageTitle %}*/
/*     {{ pageTitle }}*/
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
/* */
/* {% endblock %}*/
/* {% block JavaScripts %}*/
/*     {{ parent()}}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block pageContainer %}*/
/*     <div class="container">*/
/*         {% include 'PageBundle:Template:flashMsg.html.twig' %}*/
/* */
/*         {% form_theme form 'PageBundle:Form:form_template.html.twig' %}*/
/* */
/*         {{ form_start(form) }}*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-8">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         {{ pageTitle }}*/
/*                     </div>*/
/* */
/*                     <div class="panel-body">*/
/*                         {{ form_row(form.title) }}*/
/*                         {#{{ form_row(form.slug) }}#}*/
/*                         {{ form_row(form.content) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-4">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-12">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 Akcje*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 {{ form_row(form.save) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div> <!-- .col-md-12 -->*/
/* */
/*                     <div class="col-md-12">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 Miniaturka*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 {% if video.thumbnail is null %}*/
/*                                     <p>Brak miniaturki</p>*/
/*                                 {% else %}*/
/*                                     <p><img src="{{ asset(video.thumbnail) }}" width="242px" height="200px" alt="" class="img-thumbnail"></p>*/
/*                                 {% endif %}*/
/*                                 {{ form_row(form.thumbnail) }}*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div> <!-- .col-md-12 -->*/
/* */
/*                     {#<div class="col-md-12">#}*/
/*                         {#<div class="panel panel-default">#}*/
/*                             {#<div class="panel-heading">#}*/
/*                                 {#Właściwości#}*/
/*                             {#</div>#}*/
/*                             {#<div class="panel-body">#}*/
/*                                 {#{{ form_row(form.publishedDate, {'label_length': 5, 'wrapper_length': 7}) }}#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                     {#</div> <!-- .col-md-12 -->#}*/
/* */
/*                     <div class="col-md-12">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 Taksonomie*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/* */
/*                                 {{ form_row(form.category, {'label_length': 3, 'wrapper_length': 9, 'attr': {'class': 'select-block'}}) }}*/
/* */
/*                                 {{ form_row(form.tagline) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div> <!-- .col-md-12 -->*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
