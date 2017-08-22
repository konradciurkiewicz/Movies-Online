<?php

/* PageBundle:Videos:videoslist.html.twig */
class __TwigTemplate_ba7ba9571c422a72343f51a83676e8aed88b7e8360e20ef854c5f162b872389b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PageBundle:base.html.twig", "PageBundle:Videos:videoslist.html.twig", 1);
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
        echo "       ";
        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : null), "html", null, true);
        echo "  ";
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

    // line 11
    public function block_pageKeywords($context, array $blocks = array())
    {
        // line 12
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
        echo "    <div class=\"panel panel-default\">
        ";
        // line 25
        echo "        ";
        // line 26
        echo "            ";
        // line 27
        echo "            ";
        // line 28
        echo "                ";
        // line 29
        echo "                    ";
        // line 30
        echo "                    ";
        // line 31
        echo "                        ";
        // line 32
        echo "                                            ";
        // line 36
        echo "                                                    ";
        // line 37
        echo "            ";
        // line 38
        echo "                        ";
        // line 39
        echo "                    ";
        // line 40
        echo "                ";
        // line 41
        echo "            ";
        // line 42
        echo "                ";
        // line 43
        echo "        ";
        // line 44
        echo "        <div class=\"panel-heading\">
            <h4>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : null), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 50
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_video", array("slug" => $this->getAttribute($context["video"], "slug", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                        <div class=\"panel panel-default text-center\" style=\"height: 350px\">
                            <div class=\"panel-body\">
                             <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["video"], "thumbnail", array())), "html", null, true);
            echo "\"  style=\"height: 200px; max-width: 242px;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_video", array("slug" => $this->getAttribute($context["video"], "slug", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", array()), "html", null, true);
            echo "\">
                             <div class=\"caption\">
                                <h4 style=\"   -ms-word-break: break-all;
                                                word-break: break-all;
                                                -webkit-hyphens: auto;
                                                   -moz-hyphens: auto;
                                                    -ms-hyphens: auto;
                                                        hyphens: auto;
                                  \"><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_video", array("slug" => $this->getAttribute($context["video"], "slug", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", array()), "html", null, true);
            echo "</a></h4>
                                <p>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "category", array()), "name", array()), "html", null, true);
            echo "</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
            </div>


        <div style=\"float: right\">";
        // line 74
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "PageBundle:Pagination:pagination.html.twig");
        echo "</div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Videos:videoslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 74,  177 => 70,  164 => 63,  158 => 62,  143 => 54,  135 => 50,  131 => 49,  124 => 45,  121 => 44,  119 => 43,  117 => 42,  115 => 41,  113 => 40,  111 => 39,  109 => 38,  107 => 37,  105 => 36,  103 => 32,  101 => 31,  99 => 30,  97 => 29,  95 => 28,  93 => 27,  91 => 26,  89 => 25,  86 => 23,  83 => 22,  75 => 16,  72 => 15,  66 => 12,  63 => 11,  58 => 9,  55 => 8,  48 => 6,  45 => 5,  36 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "PageBundle:base.html.twig" %}*/
/* {% block pageTitle %}*/
/*        {{ listTitle }}  {{ parent()}}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/* {% endblock %}*/
/* {% block pageDesc %}*/
/*     Szukasz najnowszych seriali lub filmów online? Świetnie! Gdzie-Ogladac.pl to najlepsza strona z linkami do najpopularniejszych seriali i filmów. Wszystko za darmo i bez rejestracji.*/
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
/* */
/* {% block pageContainer %}*/
/*     <div class="panel panel-default">*/
/*         {#<div class="panel-heading"><h4>Najpopularniejsze</h4></div>#}*/
/*         {#<div class="panel-body">#}*/
/*             {#{% for video in videosList %}#}*/
/*             {#<div class="col-sm-6 col-md-4 col-lg-3">#}*/
/*                 {#<div class="thumbnail" style="height: 350px">#}*/
/*                     {#<img src="{{ asset(video.thumbnail) }}"  style="max-height: 200px; max-width: 242px;" href="{{ path('page_video', {'slug':video.slug}) }}" alt="{{ video.title }}">#}*/
/*                     {#<div class="caption">#}*/
/*                         {#<h4 style="   -ms-word-break: break-all;#}*/
/*                                             {#word-break: break-all;#}*/
/*                                             {#-webkit-hyphens: auto;#}*/
/*                                                {#-moz-hyphens: auto;#}*/
/*                                                 {#-ms-hyphens: auto;#}*/
/*                                                     {#hyphens: auto;#}*/
/*             {#"><a href="{{ path('page_video', {'slug':video.slug}) }}"> {{ video.title }}</a></h4>#}*/
/*                         {#<p>{{ video.category.name }}</p>#}*/
/*                     {#</div>#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*                 {#{% endfor %}#}*/
/*         {#</div>#}*/
/*         <div class="panel-heading">*/
/*             <h4>{{ listTitle }}</h4>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <div class="row">*/
/*                 {% for video in pagination %}*/
/*                 <a href="{{ path('page_video', {'slug':video.slug}) }}">*/
/*                     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">*/
/*                         <div class="panel panel-default text-center" style="height: 350px">*/
/*                             <div class="panel-body">*/
/*                              <img src="{{ asset(video.thumbnail) }}"  style="height: 200px; max-width: 242px;" href="{{ path('page_video', {'slug':video.slug}) }}" alt="{{ video.title }}">*/
/*                              <div class="caption">*/
/*                                 <h4 style="   -ms-word-break: break-all;*/
/*                                                 word-break: break-all;*/
/*                                                 -webkit-hyphens: auto;*/
/*                                                    -moz-hyphens: auto;*/
/*                                                     -ms-hyphens: auto;*/
/*                                                         hyphens: auto;*/
/*                                   "><a href="{{ path('page_video', {'slug':video.slug}) }}"> {{ video.title }}</a></h4>*/
/*                                 <p>{{ video.category.name }}</p>*/
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*                     {% endfor %}*/
/* */
/*             </div>*/
/* */
/* */
/*         <div style="float: right">{{ knp_pagination_render(pagination, 'PageBundle:Pagination:pagination.html.twig' ) }}</div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
