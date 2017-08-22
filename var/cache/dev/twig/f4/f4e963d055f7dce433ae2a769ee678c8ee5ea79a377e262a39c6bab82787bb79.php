<?php

/* PageBundle:Videos:videoslist.html.twig */
class __TwigTemplate_e424ba91df5a456e098e6032b072d8a866dfdd9b9d2271433a4fa0a7c9ad7a15 extends Twig_Template
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
        $__internal_80d44d419dacf478190c1afa8562651365ae621d3e9e19cd6e2134e3d0c33413 = $this->env->getExtension("native_profiler");
        $__internal_80d44d419dacf478190c1afa8562651365ae621d3e9e19cd6e2134e3d0c33413->enter($__internal_80d44d419dacf478190c1afa8562651365ae621d3e9e19cd6e2134e3d0c33413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Videos:videoslist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80d44d419dacf478190c1afa8562651365ae621d3e9e19cd6e2134e3d0c33413->leave($__internal_80d44d419dacf478190c1afa8562651365ae621d3e9e19cd6e2134e3d0c33413_prof);

    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_e0bf3f18f191b53b4e5121ef71f66b79aa8ed6329d374653c05373d5367d760c = $this->env->getExtension("native_profiler");
        $__internal_e0bf3f18f191b53b4e5121ef71f66b79aa8ed6329d374653c05373d5367d760c->enter($__internal_e0bf3f18f191b53b4e5121ef71f66b79aa8ed6329d374653c05373d5367d760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 3
        echo "       ";
        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : $this->getContext($context, "listTitle")), "html", null, true);
        echo "  ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        echo "
";
        
        $__internal_e0bf3f18f191b53b4e5121ef71f66b79aa8ed6329d374653c05373d5367d760c->leave($__internal_e0bf3f18f191b53b4e5121ef71f66b79aa8ed6329d374653c05373d5367d760c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_575b5f98da2e339ef8aedbc78fa84733a0de94b5573f4bb180af299c609f409b = $this->env->getExtension("native_profiler");
        $__internal_575b5f98da2e339ef8aedbc78fa84733a0de94b5573f4bb180af299c609f409b->enter($__internal_575b5f98da2e339ef8aedbc78fa84733a0de94b5573f4bb180af299c609f409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_575b5f98da2e339ef8aedbc78fa84733a0de94b5573f4bb180af299c609f409b->leave($__internal_575b5f98da2e339ef8aedbc78fa84733a0de94b5573f4bb180af299c609f409b_prof);

    }

    // line 8
    public function block_pageDesc($context, array $blocks = array())
    {
        $__internal_188a0062983ae506807954d7521e2bfb9a6165be39ed3e5ba15d0fa0cfdcd42b = $this->env->getExtension("native_profiler");
        $__internal_188a0062983ae506807954d7521e2bfb9a6165be39ed3e5ba15d0fa0cfdcd42b->enter($__internal_188a0062983ae506807954d7521e2bfb9a6165be39ed3e5ba15d0fa0cfdcd42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDesc"));

        // line 9
        echo "    Szukasz najnowszych seriali lub filmów online? Świetnie! Gdzie-Ogladac.pl to najlepsza strona z linkami do najpopularniejszych seriali i filmów. Wszystko za darmo i bez rejestracji.
";
        
        $__internal_188a0062983ae506807954d7521e2bfb9a6165be39ed3e5ba15d0fa0cfdcd42b->leave($__internal_188a0062983ae506807954d7521e2bfb9a6165be39ed3e5ba15d0fa0cfdcd42b_prof);

    }

    // line 11
    public function block_pageKeywords($context, array $blocks = array())
    {
        $__internal_f7fb7a3b133002d8c077ddfceda4cdab119d9780f649b89fb1a5e7fc32190f67 = $this->env->getExtension("native_profiler");
        $__internal_f7fb7a3b133002d8c077ddfceda4cdab119d9780f649b89fb1a5e7fc32190f67->enter($__internal_f7fb7a3b133002d8c077ddfceda4cdab119d9780f649b89fb1a5e7fc32190f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageKeywords"));

        // line 12
        echo "    gdzie oglądać filmy online, gdzie oglądać filmy, gdzie oglądać seriale, seriale online, filmy online, filmy online bez rejestracji, seriale online bez rejestracji, gdzie, oglądać, darmowe, seriale, online, bez, rejestracji, strona, linki, gdzie, ogladac, linki, serial, seriali, filmy, flim, filmów, najnowsze

";
        
        $__internal_f7fb7a3b133002d8c077ddfceda4cdab119d9780f649b89fb1a5e7fc32190f67->leave($__internal_f7fb7a3b133002d8c077ddfceda4cdab119d9780f649b89fb1a5e7fc32190f67_prof);

    }

    // line 15
    public function block_JavaScripts($context, array $blocks = array())
    {
        $__internal_1eb6f8eebde1940643932f1591a866ed5c401e7d74ac4bb51bf8142b660b00ab = $this->env->getExtension("native_profiler");
        $__internal_1eb6f8eebde1940643932f1591a866ed5c401e7d74ac4bb51bf8142b660b00ab->enter($__internal_1eb6f8eebde1940643932f1591a866ed5c401e7d74ac4bb51bf8142b660b00ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "JavaScripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("JavaScripts", $context, $blocks);
        echo "

";
        
        $__internal_1eb6f8eebde1940643932f1591a866ed5c401e7d74ac4bb51bf8142b660b00ab->leave($__internal_1eb6f8eebde1940643932f1591a866ed5c401e7d74ac4bb51bf8142b660b00ab_prof);

    }

    // line 22
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_b1271062a508fcd1c0c2d854ddbf17975e2bcb53ec63840a012b85d46cbb6fe1 = $this->env->getExtension("native_profiler");
        $__internal_b1271062a508fcd1c0c2d854ddbf17975e2bcb53ec63840a012b85d46cbb6fe1->enter($__internal_b1271062a508fcd1c0c2d854ddbf17975e2bcb53ec63840a012b85d46cbb6fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

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
        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : $this->getContext($context, "listTitle")), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "PageBundle:Pagination:pagination.html.twig");
        echo "</div>
        </div>
    </div>
";
        
        $__internal_b1271062a508fcd1c0c2d854ddbf17975e2bcb53ec63840a012b85d46cbb6fe1->leave($__internal_b1271062a508fcd1c0c2d854ddbf17975e2bcb53ec63840a012b85d46cbb6fe1_prof);

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
        return array (  222 => 74,  216 => 70,  203 => 63,  197 => 62,  182 => 54,  174 => 50,  170 => 49,  163 => 45,  160 => 44,  158 => 43,  156 => 42,  154 => 41,  152 => 40,  150 => 39,  148 => 38,  146 => 37,  144 => 36,  142 => 32,  140 => 31,  138 => 30,  136 => 29,  134 => 28,  132 => 27,  130 => 26,  128 => 25,  125 => 23,  119 => 22,  108 => 16,  102 => 15,  93 => 12,  87 => 11,  79 => 9,  73 => 8,  63 => 6,  57 => 5,  45 => 3,  39 => 2,  11 => 1,);
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
