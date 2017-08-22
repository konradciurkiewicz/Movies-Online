<?php

/* PageBundle:Videos:videoslist.html.twig */
class __TwigTemplate_98f41bb8bd70a1a9cc57c68acf2a70476e9b10539edf7f505701efe502aef925 extends Twig_Template
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
        $__internal_f0e075191592670f644d6865fe7eddc356cfac4e7adae8698255ec54fc4588eb = $this->env->getExtension("native_profiler");
        $__internal_f0e075191592670f644d6865fe7eddc356cfac4e7adae8698255ec54fc4588eb->enter($__internal_f0e075191592670f644d6865fe7eddc356cfac4e7adae8698255ec54fc4588eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Videos:videoslist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e075191592670f644d6865fe7eddc356cfac4e7adae8698255ec54fc4588eb->leave($__internal_f0e075191592670f644d6865fe7eddc356cfac4e7adae8698255ec54fc4588eb_prof);

    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_578c47a1c3264b50497901d7ceebfeb157e97494ac4fa1547bd05003bae5c888 = $this->env->getExtension("native_profiler");
        $__internal_578c47a1c3264b50497901d7ceebfeb157e97494ac4fa1547bd05003bae5c888->enter($__internal_578c47a1c3264b50497901d7ceebfeb157e97494ac4fa1547bd05003bae5c888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 3
        echo "       ";
        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : $this->getContext($context, "listTitle")), "html", null, true);
        echo "  ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        echo "
";
        
        $__internal_578c47a1c3264b50497901d7ceebfeb157e97494ac4fa1547bd05003bae5c888->leave($__internal_578c47a1c3264b50497901d7ceebfeb157e97494ac4fa1547bd05003bae5c888_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da31e6e864fdd449b0da50418a9094d1ff052b0030977c3f0431655ae19688b7 = $this->env->getExtension("native_profiler");
        $__internal_da31e6e864fdd449b0da50418a9094d1ff052b0030977c3f0431655ae19688b7->enter($__internal_da31e6e864fdd449b0da50418a9094d1ff052b0030977c3f0431655ae19688b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_da31e6e864fdd449b0da50418a9094d1ff052b0030977c3f0431655ae19688b7->leave($__internal_da31e6e864fdd449b0da50418a9094d1ff052b0030977c3f0431655ae19688b7_prof);

    }

    // line 8
    public function block_pageDesc($context, array $blocks = array())
    {
        $__internal_caeab4b55c752894391ad8cd46773baa0544990bbdb1e0b4377b7a544a795332 = $this->env->getExtension("native_profiler");
        $__internal_caeab4b55c752894391ad8cd46773baa0544990bbdb1e0b4377b7a544a795332->enter($__internal_caeab4b55c752894391ad8cd46773baa0544990bbdb1e0b4377b7a544a795332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDesc"));

        // line 9
        echo "    Szukasz najnowszych seriali lub filmów online? Świetnie! Gdzie-Ogladac.pl to najlepsza strona z linkami do najpopularniejszych seriali i filmów. Wszystko za darmo i bez rejestracji.
";
        
        $__internal_caeab4b55c752894391ad8cd46773baa0544990bbdb1e0b4377b7a544a795332->leave($__internal_caeab4b55c752894391ad8cd46773baa0544990bbdb1e0b4377b7a544a795332_prof);

    }

    // line 11
    public function block_pageKeywords($context, array $blocks = array())
    {
        $__internal_cfdc40909a751e093f555e01904715b128126090493a8a2ea7dfafb888a49f0c = $this->env->getExtension("native_profiler");
        $__internal_cfdc40909a751e093f555e01904715b128126090493a8a2ea7dfafb888a49f0c->enter($__internal_cfdc40909a751e093f555e01904715b128126090493a8a2ea7dfafb888a49f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageKeywords"));

        // line 12
        echo "    gdzie oglądać filmy online, gdzie oglądać filmy, gdzie oglądać seriale, seriale online, filmy online, filmy online bez rejestracji, seriale online bez rejestracji, gdzie, oglądać, darmowe, seriale, online, bez, rejestracji, strona, linki, gdzie, ogladac, linki, serial, seriali, filmy, flim, filmów, najnowsze

";
        
        $__internal_cfdc40909a751e093f555e01904715b128126090493a8a2ea7dfafb888a49f0c->leave($__internal_cfdc40909a751e093f555e01904715b128126090493a8a2ea7dfafb888a49f0c_prof);

    }

    // line 15
    public function block_JavaScripts($context, array $blocks = array())
    {
        $__internal_41932a7711db5f0ce8b2145307c7e9a0554d41e1145005d7940fca5485dbfce7 = $this->env->getExtension("native_profiler");
        $__internal_41932a7711db5f0ce8b2145307c7e9a0554d41e1145005d7940fca5485dbfce7->enter($__internal_41932a7711db5f0ce8b2145307c7e9a0554d41e1145005d7940fca5485dbfce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "JavaScripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("JavaScripts", $context, $blocks);
        echo "

";
        
        $__internal_41932a7711db5f0ce8b2145307c7e9a0554d41e1145005d7940fca5485dbfce7->leave($__internal_41932a7711db5f0ce8b2145307c7e9a0554d41e1145005d7940fca5485dbfce7_prof);

    }

    // line 22
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_80cc4c193df55d95fa2ae186df11541d8e6a945b35b4fdc1c24e20ff7cd789f2 = $this->env->getExtension("native_profiler");
        $__internal_80cc4c193df55d95fa2ae186df11541d8e6a945b35b4fdc1c24e20ff7cd789f2->enter($__internal_80cc4c193df55d95fa2ae186df11541d8e6a945b35b4fdc1c24e20ff7cd789f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

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
        
        $__internal_80cc4c193df55d95fa2ae186df11541d8e6a945b35b4fdc1c24e20ff7cd789f2->leave($__internal_80cc4c193df55d95fa2ae186df11541d8e6a945b35b4fdc1c24e20ff7cd789f2_prof);

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
