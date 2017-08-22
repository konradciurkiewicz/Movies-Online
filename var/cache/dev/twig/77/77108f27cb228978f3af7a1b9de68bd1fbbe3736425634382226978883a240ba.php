<?php

/* PageBundle:base.html.twig */
class __TwigTemplate_ac572bc38c7b39ced43f78372cfc29777a3f778053f2eafe2d788c38205349b9 extends Twig_Template
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
            'JavaScripts' => array($this, 'block_JavaScripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_883ad3037a154767be25a76248c9cf0d019cacb3ee6e86d1642a25d30abb0f93 = $this->env->getExtension("native_profiler");
        $__internal_883ad3037a154767be25a76248c9cf0d019cacb3ee6e86d1642a25d30abb0f93->enter($__internal_883ad3037a154767be25a76248c9cf0d019cacb3ee6e86d1642a25d30abb0f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:base.html.twig"));

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
        ob_start();
        $this->displayBlock('pageDesc', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 10
        ob_start();
        $this->displayBlock('pageKeywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/img/favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: \"ca-pub-8378915219431566\",
            enable_page_level_ads: true
        });
    </script>
    <!-- HTML5 Shim
    and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70356003-1', 'auto');
    ga('send', 'pageview');

</script>
<div class=\"container\">
    <div class=\"row\">



        <nav class=\"navbar navbar-default navbar-fixed-top \">
            <div class=\"container\">

            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\"><span class=\"glyphicon glyphicon-film\" style=\"font-size:110%\"></span> Gdzie Oglądać</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Kategorie <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("page_category", array("slug" => "film"));
        echo "\">Film</a></li>
                                    <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("page_category", array("slug" => "serial"));
        echo "\">Serial</a></li>
                                    <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("page_category", array("slug" => "anime"));
        echo "\">Anime</a></li>
                                    <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("page_category", array("slug" => "youtube-social"));
        echo "\">YouTube Social</a></li>
                            </ul>
                        </li>
                    </ul>
                    </ul>
                    <form class=\"navbar-form navbar-left\" role=\"search\" action=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("page_search");
        echo "\">
                        <div class=\"col-lg-12\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"search\" class=\"form-control\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, ((array_key_exists("searchParam", $context)) ? ((isset($context["searchParam"]) ? $context["searchParam"] : $this->getContext($context, "searchParam"))) : ("")), "html", null, true);
        echo "\" placeholder=\"Znajdź coś dla siebie...\">
                                 <span class=\"input-group-btn\">
                                      <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span> </button>
                                   </span>
                            </div>
                        </div>
                    </form>


                    ";
        // line 94
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 95
            echo "                        <ul class=\"nav navbar-nav  navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Witaj ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("user_userPanel");
            echo "\">Panel użytkownika</a></li>
                                    ";
            // line 101
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_logout");
            echo "\">Wyloguj</a></li>
                                </ul>
                            </li>
                        </ul>
                    ";
        } else {
            // line 106
            echo "                        ";
            $context["loginUrl"] = $this->env->getExtension('routing')->getPath("page_login");
            // line 107
            echo "                        <ul class=\"nav navbar-nav  navbar-right\">
                            <li><a href=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["loginUrl"]) ? $context["loginUrl"] : $this->getContext($context, "loginUrl")), "html", null, true);
            echo "\">Logowanie i rejestracja</a></li>
                        </ul>
                    ";
        }
        // line 111
        echo "

                </div>
            </div>
            </div>
        </nav>
        <div style=\"min-height:70px;\"></div>
        ";
        // line 118
        $this->displayBlock('pageContainer', $context, $blocks);
        // line 120
        echo "    </div>

    ";
        // line 123
        echo "        ";
        // line 124
        echo "            ";
        // line 125
        echo "                ";
        // line 126
        echo "                     ";
        // line 127
        echo "                     ";
        // line 128
        echo "                ";
        // line 129
        echo "            ";
        // line 130
        echo "        ";
        // line 131
        echo "    ";
        // line 132
        echo "</div>
<footer class=\"footer\">
    <div class=\"container\">
        <div style=\"text-align: center\">
           <div style=\"padding-top: 20px; padding-bottom: 20px; font-weight: bold\">
               Copyright © 2015-2016 gdzie-ogladac.pl
           </div>
            <div style=\"padding-bottom: 30px\">
                <a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("page_rules");
        echo "\" style=\"color:#FFFFFF;\" >Zasady <span class=\"sr-only\"></span></a> |
                <a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("page_info");
        echo "\" style=\"color:#FFFFFF;\">Informacje <span class=\"sr-only\"></span></a>
            </div>
        </div>
    </div>
</footer>
";
        // line 146
        $this->displayBlock('JavaScripts', $context, $blocks);
        // line 152
        echo "</body>
</html>";
        
        $__internal_883ad3037a154767be25a76248c9cf0d019cacb3ee6e86d1642a25d30abb0f93->leave($__internal_883ad3037a154767be25a76248c9cf0d019cacb3ee6e86d1642a25d30abb0f93_prof);

    }

    // line 8
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_bbb6704ce9cb216e7003e0863e2f28448c380a9ca6c186365990b1347027f40d = $this->env->getExtension("native_profiler");
        $__internal_bbb6704ce9cb216e7003e0863e2f28448c380a9ca6c186365990b1347027f40d->enter($__internal_bbb6704ce9cb216e7003e0863e2f28448c380a9ca6c186365990b1347027f40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "- Gdzie oglądać,  filmy online bez rejestracji";
        
        $__internal_bbb6704ce9cb216e7003e0863e2f28448c380a9ca6c186365990b1347027f40d->leave($__internal_bbb6704ce9cb216e7003e0863e2f28448c380a9ca6c186365990b1347027f40d_prof);

    }

    // line 9
    public function block_pageDesc($context, array $blocks = array())
    {
        $__internal_4a5842cbe6a320ce70a05ad677778ef4a33aa4672335340013a4e05394ab32b8 = $this->env->getExtension("native_profiler");
        $__internal_4a5842cbe6a320ce70a05ad677778ef4a33aa4672335340013a4e05394ab32b8->enter($__internal_4a5842cbe6a320ce70a05ad677778ef4a33aa4672335340013a4e05394ab32b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDesc"));

        
        $__internal_4a5842cbe6a320ce70a05ad677778ef4a33aa4672335340013a4e05394ab32b8->leave($__internal_4a5842cbe6a320ce70a05ad677778ef4a33aa4672335340013a4e05394ab32b8_prof);

    }

    // line 10
    public function block_pageKeywords($context, array $blocks = array())
    {
        $__internal_67100b59310d57d102a1d4dabcffe57803f2e84ee95a6acc47bff24b416c1aee = $this->env->getExtension("native_profiler");
        $__internal_67100b59310d57d102a1d4dabcffe57803f2e84ee95a6acc47bff24b416c1aee->enter($__internal_67100b59310d57d102a1d4dabcffe57803f2e84ee95a6acc47bff24b416c1aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageKeywords"));

        
        $__internal_67100b59310d57d102a1d4dabcffe57803f2e84ee95a6acc47bff24b416c1aee->leave($__internal_67100b59310d57d102a1d4dabcffe57803f2e84ee95a6acc47bff24b416c1aee_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4e002ae0bda1081a70d935e303bca3006ca5c24e18d1214cddedad21a5f0101 = $this->env->getExtension("native_profiler");
        $__internal_a4e002ae0bda1081a70d935e303bca3006ca5c24e18d1214cddedad21a5f0101->enter($__internal_a4e002ae0bda1081a70d935e303bca3006ca5c24e18d1214cddedad21a5f0101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/css/bootstrap.css"), "html", null, true);
        echo "\">
        <!--Custom template -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/css/custom.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/css/bootstrap-material-design.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/css/ripples.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_a4e002ae0bda1081a70d935e303bca3006ca5c24e18d1214cddedad21a5f0101->leave($__internal_a4e002ae0bda1081a70d935e303bca3006ca5c24e18d1214cddedad21a5f0101_prof);

    }

    // line 118
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_df0791df4c622420efc9e147aa0d64a7b6046393174ee5a3002596b4873df7c9 = $this->env->getExtension("native_profiler");
        $__internal_df0791df4c622420efc9e147aa0d64a7b6046393174ee5a3002596b4873df7c9->enter($__internal_df0791df4c622420efc9e147aa0d64a7b6046393174ee5a3002596b4873df7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 119
        echo "        ";
        
        $__internal_df0791df4c622420efc9e147aa0d64a7b6046393174ee5a3002596b4873df7c9->leave($__internal_df0791df4c622420efc9e147aa0d64a7b6046393174ee5a3002596b4873df7c9_prof);

    }

    // line 146
    public function block_JavaScripts($context, array $blocks = array())
    {
        $__internal_5a1a569a8d5bdb67b8c1a87edfc4c034faf358c87624a6496aec7ed8e90b8c2e = $this->env->getExtension("native_profiler");
        $__internal_5a1a569a8d5bdb67b8c1a87edfc4c034faf358c87624a6496aec7ed8e90b8c2e->enter($__internal_5a1a569a8d5bdb67b8c1a87edfc4c034faf358c87624a6496aec7ed8e90b8c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "JavaScripts"));

        // line 147
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/js/material.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/page/js/ripples.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5a1a569a8d5bdb67b8c1a87edfc4c034faf358c87624a6496aec7ed8e90b8c2e->leave($__internal_5a1a569a8d5bdb67b8c1a87edfc4c034faf358c87624a6496aec7ed8e90b8c2e_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 150,  350 => 149,  346 => 148,  343 => 147,  337 => 146,  330 => 119,  324 => 118,  315 => 20,  311 => 19,  307 => 18,  302 => 16,  298 => 14,  292 => 13,  281 => 10,  270 => 9,  258 => 8,  250 => 152,  248 => 146,  240 => 141,  236 => 140,  226 => 132,  224 => 131,  222 => 130,  220 => 129,  218 => 128,  216 => 127,  214 => 126,  212 => 125,  210 => 124,  208 => 123,  204 => 120,  202 => 118,  193 => 111,  187 => 108,  184 => 107,  181 => 106,  172 => 101,  168 => 99,  163 => 97,  159 => 95,  157 => 94,  145 => 85,  139 => 82,  131 => 77,  127 => 76,  123 => 75,  119 => 74,  107 => 65,  62 => 22,  60 => 13,  55 => 11,  49 => 10,  43 => 9,  37 => 8,  28 => 1,);
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
/*     <meta name="description" content="{% spaceless %}{% block pageDesc %}{% endblock %}{% endspaceless %}">*/
/*     <meta name="keywords" content="{% spaceless %}{% block pageKeywords %}{% endblock %}{% endspaceless %}">*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/page/img/favicon.ico') }}" />*/
/* */
/*     {% block stylesheets %}*/
/* */
/*         <!-- Bootstrap -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/page/css/bootstrap.css') }}">*/
/*         <!--Custom template -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/page/css/custom.css")}}">*/
/*         <link rel="stylesheet" href="{{ asset("bundles/page/css/bootstrap-material-design.css")}}">*/
/*         <link rel="stylesheet" href="{{ asset("bundles/page/css/ripples.css")}}">*/
/*     {% endblock %}*/
/*     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>*/
/*     <script>*/
/*         (adsbygoogle = window.adsbygoogle || []).push({*/
/*             google_ad_client: "ca-pub-8378915219431566",*/
/*             enable_page_level_ads: true*/
/*         });*/
/*     </script>*/
/*     <!-- HTML5 Shim*/
/*     and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* <script>*/
/*     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*                 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*     ga('create', 'UA-70356003-1', 'auto');*/
/*     ga('send', 'pageview');*/
/* */
/* </script>*/
/* <div class="container">*/
/*     <div class="row">*/
/* */
/* */
/* */
/*         <nav class="navbar navbar-default navbar-fixed-top ">*/
/*             <div class="container">*/
/* */
/*             <div class="container-fluid">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('page_index') }}"><span class="glyphicon glyphicon-film" style="font-size:110%"></span> Gdzie Oglądać</a>*/
/*                 </div>*/
/* */
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategorie <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                     <li><a href="{{ path('page_category', {'slug': 'film'}) }}">Film</a></li>*/
/*                                     <li><a href="{{ path('page_category', {'slug': 'serial'}) }}">Serial</a></li>*/
/*                                     <li><a href="{{ path('page_category', {'slug': 'anime'}) }}">Anime</a></li>*/
/*                                     <li><a href="{{ path('page_category', {'slug': 'youtube-social'}) }}">YouTube Social</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     </ul>*/
/*                     <form class="navbar-form navbar-left" role="search" action="{{ path('page_search') }}">*/
/*                         <div class="col-lg-12">*/
/*                             <div class="input-group">*/
/*                                 <input type="text" name="search" class="form-control" value="{{ searchParam is defined ? searchParam : '' }}" placeholder="Znajdź coś dla siebie...">*/
/*                                  <span class="input-group-btn">*/
/*                                       <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span> </button>*/
/*                                    </span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/* */
/* */
/*                     {% if app.user %}*/
/*                         <ul class="nav navbar-nav  navbar-right">*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Witaj {{ app.user.username }} <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="{{ path('user_userPanel') }}">Panel użytkownika</a></li>*/
/*                                     {#<li><a href="{{ path('user_accountSettings') }}">Ustawienia konta</a></li>#}*/
/*                                     <li><a href="{{ path('_logout') }}">Wyloguj</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     {% else %}*/
/*                         {% set loginUrl = path('page_login') %}*/
/*                         <ul class="nav navbar-nav  navbar-right">*/
/*                             <li><a href="{{ loginUrl }}">Logowanie i rejestracja</a></li>*/
/*                         </ul>*/
/*                     {% endif %}*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </nav>*/
/*         <div style="min-height:70px;"></div>*/
/*         {% block pageContainer %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     {#<nav class="navbar navbar-default  navbar-centered">#}*/
/*         {#<div class="container">#}*/
/*             {#<div class="collapse navbar-collapse navbar-right" >#}*/
/*                 {#<ul class="nav navbar-nav ">#}*/
/*                      {#<li class="active"><a href="{{ path('page_rules') }}">Zasady <span class="sr-only"></span></a></li>#}*/
/*                      {#<li class="active"><a href="{{ path('page_info') }}">Informacje <span class="sr-only"></span></a></li>#}*/
/*                 {#</ul>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*     {#</nav>#}*/
/* </div>*/
/* <footer class="footer">*/
/*     <div class="container">*/
/*         <div style="text-align: center">*/
/*            <div style="padding-top: 20px; padding-bottom: 20px; font-weight: bold">*/
/*                Copyright © 2015-2016 gdzie-ogladac.pl*/
/*            </div>*/
/*             <div style="padding-bottom: 30px">*/
/*                 <a href="{{ path('page_rules') }}" style="color:#FFFFFF;" >Zasady <span class="sr-only"></span></a> |*/
/*                 <a href="{{ path('page_info') }}" style="color:#FFFFFF;">Informacje <span class="sr-only"></span></a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* {% block JavaScripts %}*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* <script src="{{ asset('bundles/page/js/bootstrap.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/page/js/material.js') }}"></script>*/
/* <script src="{{ asset('bundles/page/js/ripples.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
