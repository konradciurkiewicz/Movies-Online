<?php

/* PageBundle:Videos:video.html.twig */
class __TwigTemplate_c81311b935ab8a1875f158d447cb458a678a72076c9eb2a3243d4d9bae399902 extends Twig_Template
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
        $__internal_3a2711e635ba1555013f05d1eae7cddbd262585a005b93debfaddb7ed3216319 = $this->env->getExtension("native_profiler");
        $__internal_3a2711e635ba1555013f05d1eae7cddbd262585a005b93debfaddb7ed3216319->enter($__internal_3a2711e635ba1555013f05d1eae7cddbd262585a005b93debfaddb7ed3216319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Videos:video.html.twig"));

        // line 284
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2711e635ba1555013f05d1eae7cddbd262585a005b93debfaddb7ed3216319->leave($__internal_3a2711e635ba1555013f05d1eae7cddbd262585a005b93debfaddb7ed3216319_prof);

    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_8dca01af80639373b9a26594e16bbd7360576d30678f85a4397c1d30a18a95c9 = $this->env->getExtension("native_profiler");
        $__internal_8dca01af80639373b9a26594e16bbd7360576d30678f85a4397c1d30a18a95c9->enter($__internal_8dca01af80639373b9a26594e16bbd7360576d30678f85a4397c1d30a18a95c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title", array()), "html", null, true);
        echo " ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        echo "
";
        
        $__internal_8dca01af80639373b9a26594e16bbd7360576d30678f85a4397c1d30a18a95c9->leave($__internal_8dca01af80639373b9a26594e16bbd7360576d30678f85a4397c1d30a18a95c9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b4751398cfb978ecfd8e05a8674746f483db58ae5815d64a4fc175e834e831c = $this->env->getExtension("native_profiler");
        $__internal_0b4751398cfb978ecfd8e05a8674746f483db58ae5815d64a4fc175e834e831c->enter($__internal_0b4751398cfb978ecfd8e05a8674746f483db58ae5815d64a4fc175e834e831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0b4751398cfb978ecfd8e05a8674746f483db58ae5815d64a4fc175e834e831c->leave($__internal_0b4751398cfb978ecfd8e05a8674746f483db58ae5815d64a4fc175e834e831c_prof);

    }

    // line 25
    public function block_pageDesc($context, array $blocks = array())
    {
        $__internal_465d0aa7cf11822cb3bce8e3a0ec8c387dfe2ce810d16da70a74f72f69c35b92 = $this->env->getExtension("native_profiler");
        $__internal_465d0aa7cf11822cb3bce8e3a0ec8c387dfe2ce810d16da70a74f72f69c35b92->enter($__internal_465d0aa7cf11822cb3bce8e3a0ec8c387dfe2ce810d16da70a74f72f69c35b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDesc"));

        // line 26
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title", array()), "html", null, true);
        echo " - najnowsze seriale, filmy online bez rejestracji. ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title", array()), "html", null, true);
        echo " i wiele innych filmów znajdziesz na Gdzie Oglądać. Zapraszamy na Gdzie-Ogladac.pl!
";
        
        $__internal_465d0aa7cf11822cb3bce8e3a0ec8c387dfe2ce810d16da70a74f72f69c35b92->leave($__internal_465d0aa7cf11822cb3bce8e3a0ec8c387dfe2ce810d16da70a74f72f69c35b92_prof);

    }

    // line 28
    public function block_pageKeywords($context, array $blocks = array())
    {
        $__internal_2a330b3ba55bdafe7ce20060fc5dee09bd6dbee5c5e3343bf903ad80b8132845 = $this->env->getExtension("native_profiler");
        $__internal_2a330b3ba55bdafe7ce20060fc5dee09bd6dbee5c5e3343bf903ad80b8132845->enter($__internal_2a330b3ba55bdafe7ce20060fc5dee09bd6dbee5c5e3343bf903ad80b8132845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageKeywords"));

        // line 29
        ob_start();
        // line 30
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "tagline", array()), "html", null, true);
        echo " ,gdzie oglądać filmy online, filmy online, bez rejestracji, filmy bez rejestracji, filmy i seriale online, gdzie oglądać filmu online, gdzie oglądać seriale online, gdzie oglądać
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a330b3ba55bdafe7ce20060fc5dee09bd6dbee5c5e3343bf903ad80b8132845->leave($__internal_2a330b3ba55bdafe7ce20060fc5dee09bd6dbee5c5e3343bf903ad80b8132845_prof);

    }

    // line 33
    public function block_JavaScripts($context, array $blocks = array())
    {
        $__internal_a1498108dcc6801b97a8875a93cc87016439fe93f665e64e6e9d39c8f92b65d6 = $this->env->getExtension("native_profiler");
        $__internal_a1498108dcc6801b97a8875a93cc87016439fe93f665e64e6e9d39c8f92b65d6->enter($__internal_a1498108dcc6801b97a8875a93cc87016439fe93f665e64e6e9d39c8f92b65d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "JavaScripts"));

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
        
        $__internal_a1498108dcc6801b97a8875a93cc87016439fe93f665e64e6e9d39c8f92b65d6->leave($__internal_a1498108dcc6801b97a8875a93cc87016439fe93f665e64e6e9d39c8f92b65d6_prof);

    }

    // line 91
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_2d03aead66a7bd0143c657d2d1316221323e0463f76ed8cb9c04af1e60df8bc4 = $this->env->getExtension("native_profiler");
        $__internal_2d03aead66a7bd0143c657d2d1316221323e0463f76ed8cb9c04af1e60df8bc4->enter($__internal_2d03aead66a7bd0143c657d2d1316221323e0463f76ed8cb9c04af1e60df8bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 92
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <div class=\"row\">
                 <div class=\"col-md-2 col-lg-3 col-sm-4\">
                      <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "thumbnail", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title", array()), "html", null, true);
        echo "\" class=\"img-thumbnail\" style=\"float: left\">
                 </div>
                <header>
                    <div  class=\"col-md-6 col-lg-5 col-sm-8\">
                        <h3>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title", array()), "html", null, true);
        echo "
                            <br/>
                            <small>
                             <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_category", array("slug" => $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "category", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "category", array()), "name", array()), "html", null, true);
        echo "</a>
                            </small>
                        </h3>
                    </div>
                </header>
            <div  class=\"col-md-4 col-lg-4 col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Informacje</div>
                    <div class=\"panel-body\">
                        <dl class=\"dl-horizontal\">
                            <dt>Autor</dt>
                            <dd>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "author", array()), "username", array()), "html", null, true);
        echo "</dd>
                            <dt>Data publikacji</dt>
                            <dd>";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "publishedDate", array()), "d.m.Y"), "html", null, true);
        echo "</dd>

                        </dl>
                    </div>
                </div>



            </div>
            </div>
            <hr/>
             <div>
                 <article>
                  ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "content", array()), "html", null, true);
        echo "
                 </article>
                 <hr/>
             </div>
            ";
        // line 135
        echo "            ";
        // line 136
        echo "            ";
        // line 137
        echo "                 ";
        // line 138
        echo "                 ";
        // line 139
        echo "                 ";
        // line 140
        echo "                 ";
        // line 141
        echo "            ";
        // line 142
        echo "                ";
        // line 143
        echo "            ";
        // line 144
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
        // line 157
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 158
            echo "        <div class=\"panel panel-default\">

                <div class=\"panel-body\">
                    <button type=\"button\" class=\"btn btn-raised btn-primary \" href=\"#video-links\" id=\"add-button\" ><span class=\"glyphicon glyphicon-plus\"></span> Dodaj link do filmu</button>

                </div>
            </div>
    ";
        } else {
            // line 166
            echo "        <div class=\"panel panel-warning col-md-12\">

            <div class=\"panel-body\">
                <h4>Zarejestruj się i zarabiaj na dodawaniu linków</h4>
                <a href=\"";
            // line 170
            echo $this->env->getExtension('routing')->getPath("page_login");
            echo "\" class=\"btn btn-raised btn-warning  \" role=\"button\" ><span class=\"glyphicon glyphicon-plus-sign\"></span>&nbsp;&nbsp; Zarejestruj się!</a>
                <a href=\"";
            // line 171
            echo $this->env->getExtension('routing')->getPath("page_info");
            echo "\" class=\"btn btn-raised btn-default\" role=\"button\" ><span class=\"glyphicon glyphicon-info-sign\"></span>&nbsp;&nbsp; Dowiedz się więcej</a>


            </div>
        </div>
    ";
        }
        // line 177
        echo "
        </div>
    </div>
    <div class=\"panel panel-primary\" id=\"video-links\">
        <div class=\"panel-heading\"><h4>Oglądaj online</h4></div>
        <div class=\"panel-body\">
            ";
        // line 184
        echo "            ";
        // line 185
        echo "            ";
        // line 186
        echo "                 ";
        // line 187
        echo "                 ";
        // line 188
        echo "                 ";
        // line 189
        echo "                 ";
        // line 190
        echo "            ";
        // line 191
        echo "                ";
        // line 192
        echo "            ";
        // line 193
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
        // line 205
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 206
            echo "             ";
            $this->loadTemplate("PageBundle:Template:flashMsg.html.twig", "PageBundle:Videos:video.html.twig", 206)->display($context);
            // line 207
            echo "


             ";
            // line 210
            $this->env->getExtension('form')->renderer->setTheme((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), array(0 => "PageBundle:Form:form_template.html.twig"));
            // line 211
            echo "             <div id=\"add-link\" style=\"display: none\">
                 <div class=\"alert alert-info\" role=\"alert\">Uwaga! Film do którego chcesz dodać odnośnik, musi być udostępniony legalnie. Wszystkie odnośniki łamiące prawa autorskie zostaną usunięte. Jeśli chcesz dowiedzieć się więcej, wejdź w zakładkę Zasady.</div>

                 ";
            // line 214
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form', array("action" => "#video-links"));
            echo "
            </div>
         ";
        }
        // line 217
        echo "
            <div class=\"list-group\">
                ";
        // line 219
        $context["myVal"] = 1;
        // line 220
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 221
            echo "             ";
            if ((preg_match("{^(https?://)?(www.youtube.com|youtu.?be)/.+\$}", $this->getAttribute($context["comment"], "comment", array())) && ($this->getAttribute($context["comment"], "IframeAble", array()) == true))) {
                // line 222
                echo "
                 <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">

                     <div class=\"panel panel-default movie-link\">
                         <div class=\"panel-heading\" role=\"tab\" id=\"heading";
                // line 226
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")), "html", null, true);
                echo "\">
                             <h4 class=\"panel-title\">

                                 <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                // line 229
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")), "html", null, true);
                echo "\">
                                 <h5>
                                     ";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "title", array()), "html", null, true);
                echo " <span class=\"glyphicon glyphicon-chevron-up pull-right\" style=\"font-size: 150%; color: #009688\"></span>
                                 </h5>
                                     <p class=\"list-group-item-text\">";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "</p>

                                 </a>
                             </h4>
                         </div>
                         <div id=\"collapse";
                // line 238
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")), "html", null, true);
                echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")), "html", null, true);
                echo "\">
                             <div class=\"panel-body\">

                                     <div class=\"video-container col-lg-10 col-lg-offset-1 \">
                                       <iframe id=\"player\" type=\"text/html\"
                                             src=\"";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "\"
                                             frameborder=\"0\"></iframe>
                                     </div>
                             </div>
                         </div>
                     </div>
                     </div>
                 ";
                // line 250
                $context["myVal"] = ((isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")) + 1);
                // line 251
                echo "
             ";
            } else {
                // line 253
                echo "
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\" role=\"tab\">
                        <a href=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "\">


                        <h5 class=\"list-group-item-heading\">";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "title", array()), "html", null, true);
                echo " <span class=\"glyphicon glyphicon-link pull-right\" style=\"font-size: 150%; color: #009688\"></span></h5>
                        <p class=\"list-group-item-text\">";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "</p>
                        </a>
                        </div>

                </div>


             ";
            }
            // line 268
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "            </div>

        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
        // line 277
        echo "            ";
        // line 278
        echo "
            ";
        // line 280
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "tagline", array()), "html", null, true);
        echo "
        </div>
    </div>
";
        
        $__internal_2d03aead66a7bd0143c657d2d1316221323e0463f76ed8cb9c04af1e60df8bc4->leave($__internal_2d03aead66a7bd0143c657d2d1316221323e0463f76ed8cb9c04af1e60df8bc4_prof);

    }

    // line 285
    public function block_javasctipts($context, array $blocks = array())
    {
        $__internal_5f573e97fadb1a9cc2a7dee67667ffacfa9ddd8ffdfc628cf71be36fbe5a5fd6 = $this->env->getExtension("native_profiler");
        $__internal_5f573e97fadb1a9cc2a7dee67667ffacfa9ddd8ffdfc628cf71be36fbe5a5fd6->enter($__internal_5f573e97fadb1a9cc2a7dee67667ffacfa9ddd8ffdfc628cf71be36fbe5a5fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javasctipts"));

        // line 286
        echo "        ";
        $this->displayParentBlock("javasctipts", $context, $blocks);
        echo "
        ";
        // line 288
        echo "            ";
        // line 289
        echo "
                ";
        // line 291
        echo "                    ";
        // line 292
        echo "
                    ";
        // line 294
        echo "                    ";
        // line 295
        echo "
                    ";
        // line 297
        echo "                        ";
        // line 298
        echo "
                        ";
        // line 300
        echo "                            ";
        // line 301
        echo "                        ";
        // line 302
        echo "                    ";
        // line 303
        echo "                ";
        // line 304
        echo "
            ";
        // line 306
        echo "        ";
        // line 307
        echo "    ";
        
        $__internal_5f573e97fadb1a9cc2a7dee67667ffacfa9ddd8ffdfc628cf71be36fbe5a5fd6->leave($__internal_5f573e97fadb1a9cc2a7dee67667ffacfa9ddd8ffdfc628cf71be36fbe5a5fd6_prof);

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
        return array (  574 => 307,  572 => 306,  569 => 304,  567 => 303,  565 => 302,  563 => 301,  561 => 300,  558 => 298,  556 => 297,  553 => 295,  551 => 294,  548 => 292,  546 => 291,  543 => 289,  541 => 288,  536 => 286,  530 => 285,  518 => 280,  515 => 278,  513 => 277,  504 => 269,  498 => 268,  487 => 260,  483 => 259,  477 => 256,  472 => 253,  468 => 251,  466 => 250,  456 => 243,  446 => 238,  438 => 233,  433 => 231,  426 => 229,  420 => 226,  414 => 222,  411 => 221,  406 => 220,  404 => 219,  400 => 217,  394 => 214,  389 => 211,  387 => 210,  382 => 207,  379 => 206,  377 => 205,  363 => 193,  361 => 192,  359 => 191,  357 => 190,  355 => 189,  353 => 188,  351 => 187,  349 => 186,  347 => 185,  345 => 184,  337 => 177,  328 => 171,  324 => 170,  318 => 166,  308 => 158,  306 => 157,  291 => 144,  289 => 143,  287 => 142,  285 => 141,  283 => 140,  281 => 139,  279 => 138,  277 => 137,  275 => 136,  273 => 135,  266 => 130,  250 => 117,  245 => 115,  229 => 104,  223 => 101,  214 => 97,  207 => 92,  201 => 91,  138 => 34,  132 => 33,  121 => 30,  119 => 29,  113 => 28,  101 => 26,  95 => 25,  68 => 6,  62 => 5,  50 => 3,  44 => 2,  37 => 1,  34 => 284,  11 => 1,);
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
/*     {{ video.tagline }} ,gdzie oglądać filmy online, filmy online, bez rejestracji, filmy bez rejestracji, filmy i seriale online, gdzie oglądać filmu online, gdzie oglądać seriale online, gdzie oglądać*/
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
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block pageContainer %}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*             <div class="row">*/
/*                  <div class="col-md-2 col-lg-3 col-sm-4">*/
/*                       <img src="{{ asset(video.thumbnail) }}" alt="{{ video.title }}" class="img-thumbnail" style="float: left">*/
/*                  </div>*/
/*                 <header>*/
/*                     <div  class="col-md-6 col-lg-5 col-sm-8">*/
/*                         <h3>{{ video.title }}*/
/*                             <br/>*/
/*                             <small>*/
/*                              <a href="{{ path('page_category', {'slug':video.category.slug}) }}">{{ video.category.name }}</a>*/
/*                             </small>*/
/*                         </h3>*/
/*                     </div>*/
/*                 </header>*/
/*             <div  class="col-md-4 col-lg-4 col-sm-12">*/
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
/*                                      <p class="list-group-item-text">{{ comment.comment }}</p>*/
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
/*                         <a href="{{ comment.comment }}">*/
/* */
/* */
/*                         <h5 class="list-group-item-heading">{{ comment.title }} <span class="glyphicon glyphicon-link pull-right" style="font-size: 150%; color: #009688"></span></h5>*/
/*                         <p class="list-group-item-text">{{ comment.comment }}</p>*/
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
