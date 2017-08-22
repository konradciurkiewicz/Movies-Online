<?php

/* PageBundle:Videos:video.html.twig */
class __TwigTemplate_6289b6ed7fa637a5b762f881de593aa2316bafb0a2d4e8b117766ab5d0c87ce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PageBundle:base.html.twig", "PageBundle:Videos:video.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageDesc' => array($this, 'block_pageDesc'),
            'pageKeywords' => array($this, 'block_pageKeywords'),
            'JavaScripts' => array($this, 'block_JavaScripts'),
            'pageContainer' => array($this, 'block_pageContainer'),
            'javasctipts' => array($this, 'block_javasctipts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PageBundle:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 342
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo " ";
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
    <style>
        .video-container {
            position:relative;
            padding-bottom:56.25%;
            padding-top:30px;
            height:0;
            overflow:hidden;
        }

        .video-container iframe, .video-container object, .video-container embed {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
        }
    </style>
";
    }

    // line 25
    public function block_pageDesc($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo " - najnowsze seriale, filmy online bez rejestracji. ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo " i wiele innych filmów znajdziesz na Gdzie Oglądać. Zapraszamy na Gdzie-Ogladac.pl!
";
    }

    // line 28
    public function block_pageKeywords($context, array $blocks = array())
    {
        // line 29
        ob_start();
        // line 30
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "tagline", array()), "html", null, true);
        echo ",gdzie oglądać ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo ", gdzie obejrzeć ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo " online,  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo " lektor pl, gdzie oglądać filmy online, filmy online, bez rejestracji, filmy bez rejestracji, filmy i seriale online, gdzie oglądać filmu online, gdzie oglądać seriale online, gdzie oglądać
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 33
    public function block_JavaScripts($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayParentBlock("JavaScripts", $context, $blocks);
        echo "
    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = \"https://www.youtube.com/iframe_api\";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: 'M7lc1UVf-VE',
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                setTimeout(stopVideo, 6000);
                done = true;
            }
        }
        function stopVideo() {
            player.stopVideo();
        }
    </script>
    <script>
        \$(document).ready(function(){
            \$(\"#add-button\").click(function(){
                \$(\"#add-link\").toggle('slow');
            });

        });

    </script>
    ";
        // line 86
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 87
            echo "<script>
    \$(window).load(function()
    {
        \$('#myModal').modal('show');
    });
</script>
";
        }
    }

    // line 97
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        // line 100
        echo "        ";
        // line 101
        echo "        ";
        // line 102
        echo "        ";
        // line 103
        echo "             ";
        // line 104
        echo "             ";
        // line 105
        echo "             ";
        // line 106
        echo "        ";
        // line 107
        echo "            ";
        // line 108
        echo "        ";
        // line 109
        echo "    ";
        // line 111
        echo "    <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <!-- Top gdzie-ogladac -->
    <ins class=\"adsbygoogle\"
         style=\"display:block\"
         data-ad-client=\"ca-pub-8378915219431566\"
         data-ad-slot=\"1944079336\"
         data-ad-format=\"auto\"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <div class=\"row\">
                 <div class=\"col-md-3 col-lg-3 col-sm-12 col-xs-12\">
                      <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo "\" class=\"img-thumbnail\" style=\"float: left\">
                 </div>
                <header>
                    <div  class=\"col-md-5 col-lg-5 col-sm-12 col-xs-12\">
                        <h1 style=\"   -ms-word-break: break-all;
                                                word-break: break-all;
                                                -webkit-hyphens: auto;
                                                   -moz-hyphens: auto;
                                                    -ms-hyphens: auto;
                                                        hyphens: auto;
                                  \">
                            <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_video", array("slug" => $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "html", null, true);
        echo "</a>
                            </h1>
                            <br/>
                           <h2> <small>
                             <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_category", array("slug" => $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "category", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "category", array()), "name", array()), "html", null, true);
        echo "</a>
                            </small>
                           </h2>
                    </div>
                </header>
            <div  class=\"col-md-4 col-lg-4 col-sm-12 col-xs-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Informacje</div>
                    <div class=\"panel-body\">
                        <dl class=\"dl-horizontal\">
                            <dt>Autor</dt>
                            <dd>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "author", array()), "username", array()), "html", null, true);
        echo "</dd>
                            <dt>Data publikacji</dt>
                            <dd>";
        // line 153
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "publishedDate", array()), "d.m.Y"), "html", null, true);
        echo "</dd>

                        </dl>
                    </div>
                </div>



            </div>
            </div>
            <div style=\"margin-top: 20px\">
                <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
                <!-- GDZIEOGLADAC3 -->
                <ins class=\"adsbygoogle\"
                     style=\"display:block\"
                     data-ad-client=\"ca-pub-8378915219431566\"
                     data-ad-slot=\"7134818533\"
                     data-ad-format=\"auto\"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <hr/>
             <div>
                 <article>
                  ";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "content", array()), "html", null, true);
        echo "
                 </article>
                 <hr/>
             </div>
            ";
        // line 183
        echo "            ";
        // line 184
        echo "            ";
        // line 185
        echo "                 ";
        // line 186
        echo "                 ";
        // line 187
        echo "                 ";
        // line 188
        echo "                 ";
        // line 189
        echo "            ";
        // line 190
        echo "                ";
        // line 191
        echo "            ";
        // line 192
        echo "            <div style=\"margin-bottom: 20px\">

            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
            <!-- GDZIEOGLADAC1 -->
            <ins class=\"adsbygoogle\"
                 style=\"display:block\"
                 data-ad-client=\"ca-pub-8378915219431566\"
                 data-ad-slot=\"1037376138\"
                 data-ad-format=\"auto\"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
</div>
    ";
        // line 205
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 206
            echo "        <div class=\"panel panel-default\">

                <div class=\"panel-body\">
                    <button type=\"button\" class=\"btn btn-raised btn-primary \" href=\"#video-links\" id=\"add-button\" ><span class=\"glyphicon glyphicon-plus\"></span> Dodaj link do filmu</button>

                </div>
            </div>
    ";
        } else {
            // line 214
            echo "        <div class=\"panel panel-warning col-md-12\">

            <div class=\"panel-body\">
                <h4>Zarejestruj się i zarabiaj na dodawaniu linków</h4>
                <a href=\"";
            // line 218
            echo $this->env->getExtension('routing')->getPath("page_login");
            echo "\" class=\"btn btn-raised btn-warning  \" role=\"button\" ><span class=\"glyphicon glyphicon-plus-sign\"></span>&nbsp;&nbsp; Zarejestruj się!</a>
                <a href=\"";
            // line 219
            echo $this->env->getExtension('routing')->getPath("page_info");
            echo "\" class=\"btn btn-raised btn-default\" role=\"button\" ><span class=\"glyphicon glyphicon-info-sign\"></span>&nbsp;&nbsp; Dowiedz się więcej</a>


            </div>
        </div>
    ";
        }
        // line 225
        echo "
        </div>
    </div>
    <div class=\"panel panel-primary\" id=\"video-links\">
        <div class=\"panel-heading\"><h4>Oglądaj online</h4></div>
        <div class=\"panel-body\">
            ";
        // line 232
        echo "            ";
        // line 233
        echo "            ";
        // line 234
        echo "                 ";
        // line 235
        echo "                 ";
        // line 236
        echo "                 ";
        // line 237
        echo "                 ";
        // line 238
        echo "            ";
        // line 239
        echo "                ";
        // line 240
        echo "            ";
        // line 241
        echo "            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
            <div style=\"margin-bottom: 20px\">
            <!-- GDZIEOGLADAC2 -->
            <ins class=\"adsbygoogle\"
                 style=\"display:block\"
                 data-ad-client=\"ca-pub-8378915219431566\"
                 data-ad-slot=\"3990842531\"
                 data-ad-format=\"auto\"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
         ";
        // line 253
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 254
            echo "             ";
            $this->loadTemplate("PageBundle:Template:flashMsg.html.twig", "PageBundle:Videos:video.html.twig", 254)->display($context);
            // line 255
            echo "


             ";
            // line 258
            $this->env->getExtension('form')->renderer->setTheme((isset($context["commentForm"]) ? $context["commentForm"] : null), array(0 => "PageBundle:Form:form_template.html.twig"));
            // line 259
            echo "             <div id=\"add-link\" style=\"display: none\">
                 <div class=\"alert alert-info\" role=\"alert\">Uwaga! Film do którego chcesz dodać odnośnik, musi być udostępniony legalnie. Wszystkie odnośniki łamiące prawa autorskie zostaną usunięte. Jeśli chcesz dowiedzieć się więcej, wejdź w zakładkę Zasady.</div>

                 ";
            // line 262
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : null), 'form', array("action" => "#video-links"));
            echo "
            </div>
         ";
        }
        // line 265
        echo "
            <div class=\"list-group\">
                ";
        // line 267
        $context["myVal"] = 1;
        // line 268
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 269
            echo "             ";
            if ((preg_match("{^(https?://)?(www.youtube.com|youtu.?be)/.+\$}", $this->getAttribute($context["comment"], "comment", array())) && ($this->getAttribute($context["comment"], "IframeAble", array()) == true))) {
                // line 270
                echo "
                 <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">

                     <div class=\"panel panel-default movie-link\">
                         <div class=\"panel-heading\" role=\"tab\" id=\"heading";
                // line 274
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : null), "html", null, true);
                echo "\">
                             <h4 class=\"panel-title\">

                                 <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                // line 277
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : null), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : null), "html", null, true);
                echo "\">
                                 <h5>
                                     ";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "title", array()), "html", null, true);
                echo " <span class=\"glyphicon glyphicon-chevron-up pull-right\" style=\"font-size: 150%; color: #009688\"></span>
                                 </h5>
                                     <p class=\"list-group-item-text\" style=\"   -ms-word-break: break-all;
                                                word-break: break-all;
                                                -webkit-hyphens: auto;
                                                   -moz-hyphens: auto;
                                                    -ms-hyphens: auto;
                                                        hyphens: auto;
                                  \">";
                // line 287
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "</p>

                                 </a>
                             </h4>
                         </div>
                         <div id=\"collapse";
                // line 292
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : null), "html", null, true);
                echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : null), "html", null, true);
                echo "\">
                             <div class=\"panel-body\">

                                     <div class=\"video-container col-lg-10 col-lg-offset-1 \">
                                       <iframe id=\"player\" type=\"text/html\"
                                             src=\"";
                // line 297
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "\"
                                             frameborder=\"0\"></iframe>
                                     </div>
                             </div>
                         </div>
                     </div>
                     </div>
                 ";
                // line 304
                $context["myVal"] = ((isset($context["myVal"]) ? $context["myVal"] : null) + 1);
                // line 305
                echo "
             ";
            } else {
                // line 307
                echo "
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\" role=\"tab\">
                        <a href=\"";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "\" rel=\"nofollow\" >
                        <h5 class=\"list-group-item-heading\">";
                // line 311
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "title", array()), "html", null, true);
                echo " <span class=\"glyphicon glyphicon-link pull-right\" style=\"font-size: 150%; color: #009688\"></span></h5>
                        <p class=\"list-group-item-text\" style=\"   -ms-word-break: break-all;
                                                word-break: break-all;
                                                -webkit-hyphens: auto;
                                                   -moz-hyphens: auto;
                                                    -ms-hyphens: auto;
                                                        hyphens: auto;
                                  \">";
                // line 318
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "</p>
                        </a>
                        </div>

                </div>


             ";
            }
            // line 326
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "            </div>

        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
        // line 335
        echo "            ";
        // line 336
        echo "
            ";
        // line 338
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "tagline", array()), "html", null, true);
        echo "
        </div>
    </div>
";
    }

    // line 343
    public function block_javasctipts($context, array $blocks = array())
    {
        // line 344
        echo "        ";
        $this->displayParentBlock("javasctipts", $context, $blocks);
        echo "
        ";
        // line 346
        echo "            ";
        // line 347
        echo "
                ";
        // line 349
        echo "                    ";
        // line 350
        echo "
                    ";
        // line 352
        echo "                    ";
        // line 353
        echo "
                    ";
        // line 355
        echo "                        ";
        // line 356
        echo "
                        ";
        // line 358
        echo "                            ";
        // line 359
        echo "                        ";
        // line 360
        echo "                    ";
        // line 361
        echo "                ";
        // line 362
        echo "
            ";
        // line 364
        echo "        ";
        // line 365
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PageBundle:Videos:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 365,  607 => 364,  604 => 362,  602 => 361,  600 => 360,  598 => 359,  596 => 358,  593 => 356,  591 => 355,  588 => 353,  586 => 352,  583 => 350,  581 => 349,  578 => 347,  576 => 346,  571 => 344,  568 => 343,  559 => 338,  556 => 336,  554 => 335,  545 => 327,  539 => 326,  528 => 318,  518 => 311,  514 => 310,  509 => 307,  505 => 305,  503 => 304,  493 => 297,  483 => 292,  475 => 287,  464 => 279,  457 => 277,  451 => 274,  445 => 270,  442 => 269,  437 => 268,  435 => 267,  431 => 265,  425 => 262,  420 => 259,  418 => 258,  413 => 255,  410 => 254,  408 => 253,  394 => 241,  392 => 240,  390 => 239,  388 => 238,  386 => 237,  384 => 236,  382 => 235,  380 => 234,  378 => 233,  376 => 232,  368 => 225,  359 => 219,  355 => 218,  349 => 214,  339 => 206,  337 => 205,  322 => 192,  320 => 191,  318 => 190,  316 => 189,  314 => 188,  312 => 187,  310 => 186,  308 => 185,  306 => 184,  304 => 183,  297 => 178,  269 => 153,  264 => 151,  248 => 140,  239 => 136,  223 => 125,  207 => 111,  205 => 109,  203 => 108,  201 => 107,  199 => 106,  197 => 105,  195 => 104,  193 => 103,  191 => 102,  189 => 101,  187 => 100,  185 => 99,  182 => 97,  171 => 87,  169 => 86,  113 => 34,  110 => 33,  94 => 30,  92 => 29,  89 => 28,  80 => 26,  77 => 25,  53 => 6,  50 => 5,  41 => 3,  38 => 2,  34 => 1,  31 => 342,  11 => 1,);
    }
}
/* {% extends "PageBundle:base.html.twig" %}*/
/* {% block pageTitle %}*/
/*     {{ video.title }} {{ parent()}}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/*     <style>*/
/*         .video-container {*/
/*             position:relative;*/
/*             padding-bottom:56.25%;*/
/*             padding-top:30px;*/
/*             height:0;*/
/*             overflow:hidden;*/
/*         }*/
/* */
/*         .video-container iframe, .video-container object, .video-container embed {*/
/*             position:absolute;*/
/*             top:0;*/
/*             left:0;*/
/*             width:100%;*/
/*             height:100%;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block pageDesc %}*/
/*     {{ video.title }} - najnowsze seriale, filmy online bez rejestracji. {{ video.title }} i wiele innych filmów znajdziesz na Gdzie Oglądać. Zapraszamy na Gdzie-Ogladac.pl!*/
/* {% endblock %}*/
/* {% block pageKeywords %}*/
/* {% spaceless %}*/
/*     {{ video.tagline }},gdzie oglądać {{ video.title }}, gdzie obejrzeć {{ video.title }},  {{ video.title }} online,  {{ video.title }} lektor pl, gdzie oglądać filmy online, filmy online, bez rejestracji, filmy bez rejestracji, filmy i seriale online, gdzie oglądać filmu online, gdzie oglądać seriale online, gdzie oglądać*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* {% block JavaScripts %}*/
/*     {{ parent()}}*/
/*     <script>*/
/*         // 2. This code loads the IFrame Player API code asynchronously.*/
/*         var tag = document.createElement('script');*/
/* */
/*         tag.src = "https://www.youtube.com/iframe_api";*/
/*         var firstScriptTag = document.getElementsByTagName('script')[0];*/
/*         firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);*/
/* */
/*         // 3. This function creates an <iframe> (and YouTube player)*/
/*         //    after the API code downloads.*/
/*         var player;*/
/*         function onYouTubeIframeAPIReady() {*/
/*             player = new YT.Player('player', {*/
/*                 height: '390',*/
/*                 width: '640',*/
/*                 videoId: 'M7lc1UVf-VE',*/
/*                 events: {*/
/*                     'onReady': onPlayerReady,*/
/*                     'onStateChange': onPlayerStateChange*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         // 4. The API will call this function when the video player is ready.*/
/*         function onPlayerReady(event) {*/
/*             event.target.playVideo();*/
/*         }*/
/* */
/*         // 5. The API calls this function when the player's state changes.*/
/*         //    The function indicates that when playing a video (state=1),*/
/*         //    the player should play for six seconds and then stop.*/
/*         var done = false;*/
/*         function onPlayerStateChange(event) {*/
/*             if (event.data == YT.PlayerState.PLAYING && !done) {*/
/*                 setTimeout(stopVideo, 6000);*/
/*                 done = true;*/
/*             }*/
/*         }*/
/*         function stopVideo() {*/
/*             player.stopVideo();*/
/*         }*/
/*     </script>*/
/*     <script>*/
/*         $(document).ready(function(){*/
/*             $("#add-button").click(function(){*/
/*                 $("#add-link").toggle('slow');*/
/*             });*/
/* */
/*         });*/
/* */
/*     </script>*/
/*     {% if not app.user %}*/
/* <script>*/
/*     $(window).load(function()*/
/*     {*/
/*         $('#myModal').modal('show');*/
/*     });*/
/* </script>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block pageContainer %}*/
/* {#<div class="panel panel-default hidden-xs hidden-sm">#}*/
/*     {#<div class="panel-body text-center">#}*/
/*         {#<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>#}*/
/*         {#<!-- bilbord v2 -->#}*/
/*         {#<ins class="adsbygoogle"#}*/
/*              {#style="display:inline-block;width:750px;height:300px"#}*/
/*              {#data-ad-client="ca-pub-8378915219431566"#}*/
/*              {#data-ad-slot="8189089334"></ins>#}*/
/*         {#<script>#}*/
/*             {#(adsbygoogle = window.adsbygoogle || []).push({});#}*/
/*         {#</script>#}*/
/*     {#</div>#}*/
/* {#</div>#}*/
/*     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>*/
/*     <!-- Top gdzie-ogladac -->*/
/*     <ins class="adsbygoogle"*/
/*          style="display:block"*/
/*          data-ad-client="ca-pub-8378915219431566"*/
/*          data-ad-slot="1944079336"*/
/*          data-ad-format="auto"></ins>*/
/*     <script>*/
/*         (adsbygoogle = window.adsbygoogle || []).push({});*/
/*     </script>*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*             <div class="row">*/
/*                  <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">*/
/*                       <img src="{{ asset(video.thumbnail) }}" alt="{{ video.title }}" class="img-thumbnail" style="float: left">*/
/*                  </div>*/
/*                 <header>*/
/*                     <div  class="col-md-5 col-lg-5 col-sm-12 col-xs-12">*/
/*                         <h1 style="   -ms-word-break: break-all;*/
/*                                                 word-break: break-all;*/
/*                                                 -webkit-hyphens: auto;*/
/*                                                    -moz-hyphens: auto;*/
/*                                                     -ms-hyphens: auto;*/
/*                                                         hyphens: auto;*/
/*                                   ">*/
/*                             <a href="{{ path('page_video', {'slug':video.slug}) }}">{{ video.title }}</a>*/
/*                             </h1>*/
/*                             <br/>*/
/*                            <h2> <small>*/
/*                              <a href="{{ path('page_category', {'slug':video.category.slug}) }}">{{ video.category.name }}</a>*/
/*                             </small>*/
/*                            </h2>*/
/*                     </div>*/
/*                 </header>*/
/*             <div  class="col-md-4 col-lg-4 col-sm-12 col-xs-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">Informacje</div>*/
/*                     <div class="panel-body">*/
/*                         <dl class="dl-horizontal">*/
/*                             <dt>Autor</dt>*/
/*                             <dd>{{ video.author.username }}</dd>*/
/*                             <dt>Data publikacji</dt>*/
/*                             <dd>{{ video.publishedDate | date('d.m.Y') }}</dd>*/
/* */
/*                         </dl>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/* */
/*             </div>*/
/*             </div>*/
/*             <div style="margin-top: 20px">*/
/*                 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>*/
/*                 <!-- GDZIEOGLADAC3 -->*/
/*                 <ins class="adsbygoogle"*/
/*                      style="display:block"*/
/*                      data-ad-client="ca-pub-8378915219431566"*/
/*                      data-ad-slot="7134818533"*/
/*                      data-ad-format="auto"></ins>*/
/*                 <script>*/
/*                     (adsbygoogle = window.adsbygoogle || []).push({});*/
/*                 </script>*/
/*             </div>*/
/*             <hr/>*/
/*              <div>*/
/*                  <article>*/
/*                   {{ video.content }}*/
/*                  </article>*/
/*                  <hr/>*/
/*              </div>*/
/*             {#<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>#}*/
/*             {#<!-- gdzie-ogladac-movie -->#}*/
/*             {#<ins class="adsbygoogle"#}*/
/*                  {#style="display:block"#}*/
/*                  {#data-ad-client="ca-pub-8378915219431566"#}*/
/*                  {#data-ad-slot="4782192135"#}*/
/*                  {#data-ad-format="auto"></ins>#}*/
/*             {#<script>#}*/
/*                 {#(adsbygoogle = window.adsbygoogle || []).push({});#}*/
/*             {#</script>#}*/
/*             <div style="margin-bottom: 20px">*/
/* */
/*             <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>*/
/*             <!-- GDZIEOGLADAC1 -->*/
/*             <ins class="adsbygoogle"*/
/*                  style="display:block"*/
/*                  data-ad-client="ca-pub-8378915219431566"*/
/*                  data-ad-slot="1037376138"*/
/*                  data-ad-format="auto"></ins>*/
/*             <script>*/
/*                 (adsbygoogle = window.adsbygoogle || []).push({});*/
/*             </script>*/
/* </div>*/
/*     {% if app.user %}*/
/*         <div class="panel panel-default">*/
/* */
/*                 <div class="panel-body">*/
/*                     <button type="button" class="btn btn-raised btn-primary " href="#video-links" id="add-button" ><span class="glyphicon glyphicon-plus"></span> Dodaj link do filmu</button>*/
/* */
/*                 </div>*/
/*             </div>*/
/*     {% else %}*/
/*         <div class="panel panel-warning col-md-12">*/
/* */
/*             <div class="panel-body">*/
/*                 <h4>Zarejestruj się i zarabiaj na dodawaniu linków</h4>*/
/*                 <a href="{{ path('page_login') }}" class="btn btn-raised btn-warning  " role="button" ><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp; Zarejestruj się!</a>*/
/*                 <a href="{{ path('page_info') }}" class="btn btn-raised btn-default" role="button" ><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp; Dowiedz się więcej</a>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-primary" id="video-links">*/
/*         <div class="panel-heading"><h4>Oglądaj online</h4></div>*/
/*         <div class="panel-body">*/
/*             {#<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>#}*/
/*             {#<!-- go-movie-3 -->#}*/
/*             {#<ins class="adsbygoogle"#}*/
/*                  {#style="display:block"#}*/
/*                  {#data-ad-client="ca-pub-8378915219431566"#}*/
/*                  {#data-ad-slot="4718016134"#}*/
/*                  {#data-ad-format="auto"></ins>#}*/
/*             {#<script>#}*/
/*                 {#(adsbygoogle = window.adsbygoogle || []).push({});#}*/
/*             {#</script>#}*/
/*             <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>*/
/*             <div style="margin-bottom: 20px">*/
/*             <!-- GDZIEOGLADAC2 -->*/
/*             <ins class="adsbygoogle"*/
/*                  style="display:block"*/
/*                  data-ad-client="ca-pub-8378915219431566"*/
/*                  data-ad-slot="3990842531"*/
/*                  data-ad-format="auto"></ins>*/
/*             <script>*/
/*                 (adsbygoogle = window.adsbygoogle || []).push({});*/
/*             </script>*/
/*             </div>*/
/*          {% if  app.user %}*/
/*              {% include 'PageBundle:Template:flashMsg.html.twig' %}*/
/* */
/* */
/* */
/*              {% form_theme commentForm 'PageBundle:Form:form_template.html.twig' %}*/
/*              <div id="add-link" style="display: none">*/
/*                  <div class="alert alert-info" role="alert">Uwaga! Film do którego chcesz dodać odnośnik, musi być udostępniony legalnie. Wszystkie odnośniki łamiące prawa autorskie zostaną usunięte. Jeśli chcesz dowiedzieć się więcej, wejdź w zakładkę Zasady.</div>*/
/* */
/*                  {{ form(commentForm, {'action':'#video-links'}) }}*/
/*             </div>*/
/*          {% endif %}*/
/* */
/*             <div class="list-group">*/
/*                 {% set myVal = 1 %}*/
/*                 {% for comment in video.comments %}*/
/*              {% if (comment.comment matches '{^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$}') and ( comment.IframeAble == true) %}*/
/* */
/*                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/* */
/*                      <div class="panel panel-default movie-link">*/
/*                          <div class="panel-heading" role="tab" id="heading{{ myVal }}">*/
/*                              <h4 class="panel-title">*/
/* */
/*                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ myVal }}" aria-expanded="false" aria-controls="collapse{{ myVal }}">*/
/*                                  <h5>*/
/*                                      {{ comment.title }} <span class="glyphicon glyphicon-chevron-up pull-right" style="font-size: 150%; color: #009688"></span>*/
/*                                  </h5>*/
/*                                      <p class="list-group-item-text" style="   -ms-word-break: break-all;*/
/*                                                 word-break: break-all;*/
/*                                                 -webkit-hyphens: auto;*/
/*                                                    -moz-hyphens: auto;*/
/*                                                     -ms-hyphens: auto;*/
/*                                                         hyphens: auto;*/
/*                                   ">{{ comment.comment }}</p>*/
/* */
/*                                  </a>*/
/*                              </h4>*/
/*                          </div>*/
/*                          <div id="collapse{{ myVal }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ myVal }}">*/
/*                              <div class="panel-body">*/
/* */
/*                                      <div class="video-container col-lg-10 col-lg-offset-1 ">*/
/*                                        <iframe id="player" type="text/html"*/
/*                                              src="{{ comment.comment }}"*/
/*                                              frameborder="0"></iframe>*/
/*                                      </div>*/
/*                              </div>*/
/*                          </div>*/
/*                      </div>*/
/*                      </div>*/
/*                  {% set myVal = myVal + 1 %}*/
/* */
/*              {% else %}*/
/* */
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading" role="tab">*/
/*                         <a href="{{ comment.comment }}" rel="nofollow" >*/
/*                         <h5 class="list-group-item-heading">{{ comment.title }} <span class="glyphicon glyphicon-link pull-right" style="font-size: 150%; color: #009688"></span></h5>*/
/*                         <p class="list-group-item-text" style="   -ms-word-break: break-all;*/
/*                                                 word-break: break-all;*/
/*                                                 -webkit-hyphens: auto;*/
/*                                                    -moz-hyphens: auto;*/
/*                                                     -ms-hyphens: auto;*/
/*                                                         hyphens: auto;*/
/*                                   ">{{ comment.comment }}</p>*/
/*                         </a>*/
/*                         </div>*/
/* */
/*                 </div>*/
/* */
/* */
/*              {% endif %}*/
/*          {% endfor %}*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*             {#{% for tag in video.tags %}#}*/
/*             {#<span class="label label-default"> <a href="{{ path('page_tag', {'slug':tag.slug}) }}">{{ tag.name }}</a></span>#}*/
/* */
/*             {#{% endfor %}#}*/
/*             {{ video.tagline }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% if is_granted('ROLE_ADMIN') %}*/
/*     {% block javasctipts %}*/
/*         {{ parent() }}*/
/*         {#<script>#}*/
/*             {#$(document).ready(function(){#}*/
/* */
/*                 {#$('body').on('click', '#delete-comment', function(e){#}*/
/*                     {#e.preventDefault();#}*/
/* */
/*                     {#var $btn = $(this);#}*/
/*                     {#var deleteUrl = $btn.attr('href');#}*/
/* */
/*                     {#$.getJSON(deleteUrl, function(json){#}*/
/*                         {#alert(json.message);#}*/
/* */
/*                         {#if('ok' === json.status){#}*/
/*                             {#$btn.closest('.list-group-item').remove();#}*/
/*                         {#}#}*/
/*                     {#});#}*/
/*                 {#});#}*/
/* */
/*             {#});#}*/
/*         {#</script>#}*/
/*     {% endblock %}*/
/* {% endif %}*/
