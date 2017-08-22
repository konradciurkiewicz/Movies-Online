<?php

/* PageBundle:User:userLinks.html.twig */
class __TwigTemplate_9e608ca0dd9324f8356a2b9cf6e7dc32887319dcf7395b2d07eb23fec55da064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PageBundle:base.html.twig", "PageBundle:User:userLinks.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageDesc' => array($this, 'block_pageDesc'),
            'pageKeywords' => array($this, 'block_pageKeywords'),
            'pageContainer' => array($this, 'block_pageContainer'),
            'JavaScripts' => array($this, 'block_JavaScripts'),
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
        echo "    Panel użytkownika ";
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

    // line 19
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">


                <div class=\"\">
                    <ul class=\"nav nav-tabs\">
                        <li role=\"presentation\" ><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("user_userPanel");
        echo "\">Moje video</a></li>
                        <li role=\"presentation\" class=\"active\"> <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("user_userLinks");
        echo "\">Moje linki</a></li>
                   </ul>
                </div>

            ";
        // line 31
        $this->loadTemplate("PageBundle:Template:flashMsg.html.twig", "PageBundle:User:userLinks.html.twig", 31)->display($context);
        // line 32
        echo "
            <div class=\"row\">
                <div  class=\"col-md-6\">
            <div id=\"add-link-search\" >
                <h4>Dodawanie linków</h4>
                <p><strong>Krok 1.</strong> Wyszukaj film do którego chcesz dodać link</p>
                <p><strong>Krok 2.</strong> Wybierz film do ktrego link chcesz dodać</p>
                <p><strong>Krok 3.</strong> Dodaj link do wybranego filmu</p>
                <form role=\"search\" action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("page_search");
        echo "\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("searchParam", $context)) ? ((isset($context["searchParam"]) ? $context["searchParam"] : null)) : ("")), "html", null, true);
        echo "\" placeholder=\"Nazwa filmu\">
                                     <span class=\"input-group-btn\">
                                          <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span> </button>
                                       </span>
                    </div>
                </form>

            </div>
                </div>


        </div>
            <hr/>
            <h4>Moje filmy</h4>
            <table class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tytuł video</th>
                    <th>Odnośnik</th>
                    <th>Data dodania</th>
                    <th>Akcja</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 67
        $context["counter"] = 0;
        // line 68
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 69
            echo "                    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
            // line 70
            echo "                    <tr class=\"link-element\">
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "comment", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createDate", array())), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 77
            echo "                            ";
            // line 78
            echo "                            <a class=\"btn btn-danger btn-sm delete-comment\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_deleteComment", array("commentId" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                    <td colspan=\"5\"><i>Brak elementów do wyświetlenia.</i></td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
            </table>
            <div style=\"float: right\">";
        // line 85
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "PageBundle:Pagination:pagination.html.twig");
        echo "</div>
        </div>
    </div>
";
    }

    // line 89
    public function block_JavaScripts($context, array $blocks = array())
    {
        // line 90
        echo "     ";
        $this->displayParentBlock("JavaScripts", $context, $blocks);
        echo "
     <script>
     \$(document).ready(function(){

     \$('body').on('click', '.delete-comment', function(e){
     e.preventDefault();

     var \$btn = \$(this);
     var deleteUrl = \$btn.attr('href');

     \$.getJSON(deleteUrl, function(json){
     alert(json.message);

     if('ok' === json.status){
     \$btn.closest('.link-element').remove();
     }
     });
     });

     });
     </script>
     <script>
         \$(document).ready(function(){
             \$(\"#add-button\").click(function(){
                 \$(\"#add-link-search\").toggle('slow');
             });
         });
     </script>
 ";
    }

    public function getTemplateName()
    {
        return "PageBundle:User:userLinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 90,  199 => 89,  191 => 85,  187 => 83,  180 => 81,  171 => 78,  169 => 77,  164 => 74,  160 => 73,  156 => 72,  152 => 71,  149 => 70,  146 => 69,  140 => 68,  138 => 67,  110 => 42,  105 => 40,  95 => 32,  93 => 31,  86 => 27,  82 => 26,  74 => 20,  71 => 19,  65 => 13,  62 => 12,  56 => 9,  53 => 8,  46 => 6,  43 => 5,  36 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "PageBundle:base.html.twig" %}*/
/* {% block pageTitle %}*/
/*     Panel użytkownika {{ parent()}}*/
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
/* */
/* */
/* */
/* {% block pageContainer %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/* */
/* */
/*                 <div class="">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li role="presentation" ><a href="{{ path('user_userPanel') }}">Moje video</a></li>*/
/*                         <li role="presentation" class="active"> <a href="{{ path('user_userLinks') }}">Moje linki</a></li>*/
/*                    </ul>*/
/*                 </div>*/
/* */
/*             {% include 'PageBundle:Template:flashMsg.html.twig' %}*/
/* */
/*             <div class="row">*/
/*                 <div  class="col-md-6">*/
/*             <div id="add-link-search" >*/
/*                 <h4>Dodawanie linków</h4>*/
/*                 <p><strong>Krok 1.</strong> Wyszukaj film do którego chcesz dodać link</p>*/
/*                 <p><strong>Krok 2.</strong> Wybierz film do ktrego link chcesz dodać</p>*/
/*                 <p><strong>Krok 3.</strong> Dodaj link do wybranego filmu</p>*/
/*                 <form role="search" action="{{ path('page_search') }}">*/
/*                     <div class="input-group">*/
/*                         <input type="text" name="search" class="form-control" value="{{ searchParam is defined ? searchParam : '' }}" placeholder="Nazwa filmu">*/
/*                                      <span class="input-group-btn">*/
/*                                           <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span> </button>*/
/*                                        </span>*/
/*                     </div>*/
/*                 </form>*/
/* */
/*             </div>*/
/*                 </div>*/
/* */
/* */
/*         </div>*/
/*             <hr/>*/
/*             <h4>Moje filmy</h4>*/
/*             <table class="table table-bordered table-striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>#</th>*/
/*                     <th>Tytuł video</th>*/
/*                     <th>Odnośnik</th>*/
/*                     <th>Data dodania</th>*/
/*                     <th>Akcja</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% set counter = 0 %}*/
/*                 {% for post in pagination %}*/
/*                     {% set counter = counter + 1 %}*/
/*                     <tr class="link-element">*/
/*                         <td>{{ counter }}</td>*/
/*                         <td>{{ post.title }}</td>*/
/*                         <td>{{ post.comment }}</td>*/
/*                         <td>{{ post.createDate | date }}</td>*/
/*                         <td>*/
/*                             {#{% set commentToken = csrfProvider.generateCsrfToken|format(post.id) %}#}*/
/*                             {#{% set deleteUrl = path('page_deleteComment', {'commentId':post.id, 'token':commentToken}) %}#}*/
/*                             <a class="btn btn-danger btn-sm delete-comment" href="{{ path('page_deleteComment', {'commentId':post.id}) }}" role="button"><span class="glyphicon glyphicon-trash"></span></a></td>*/
/*                     </tr>*/
/*                     {% else %}*/
/*                     <td colspan="5"><i>Brak elementów do wyświetlenia.</i></td>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <div style="float: right">{{ knp_pagination_render(pagination, 'PageBundle:Pagination:pagination.html.twig' ) }}</div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/*  {% block JavaScripts %}*/
/*      {{ parent() }}*/
/*      <script>*/
/*      $(document).ready(function(){*/
/* */
/*      $('body').on('click', '.delete-comment', function(e){*/
/*      e.preventDefault();*/
/* */
/*      var $btn = $(this);*/
/*      var deleteUrl = $btn.attr('href');*/
/* */
/*      $.getJSON(deleteUrl, function(json){*/
/*      alert(json.message);*/
/* */
/*      if('ok' === json.status){*/
/*      $btn.closest('.link-element').remove();*/
/*      }*/
/*      });*/
/*      });*/
/* */
/*      });*/
/*      </script>*/
/*      <script>*/
/*          $(document).ready(function(){*/
/*              $("#add-button").click(function(){*/
/*                  $("#add-link-search").toggle('slow');*/
/*              });*/
/*          });*/
/*      </script>*/
/*  {% endblock %}*/
