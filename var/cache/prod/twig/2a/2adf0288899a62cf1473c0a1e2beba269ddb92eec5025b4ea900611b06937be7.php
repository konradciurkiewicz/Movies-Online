<?php

/* PageBundle:User:userPanel.html.twig */
class __TwigTemplate_e85fabfcd3fc14361ab3da287a3e15ba33d96b6e2bd206f7610dfdc94224db06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PageBundle:base.html.twig", "PageBundle:User:userPanel.html.twig", 1);
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

    // line 16
    public function block_JavaScripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("JavaScripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function(){
            \$(\"#add-button\").click(function(){
                \$(\"#add-link-search\").toggle('slow');
            });
        });
    </script>
";
    }

    // line 28
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 29
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">


                <div class=\"\">
                    <ul class=\"nav nav-tabs\">
                        <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("user_userPanel");
        echo "\">Moje video</a></li>
                        <li role=\"presentation\"> <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("user_userLinks");
        echo "\">Moje linki</a></li>
                   </ul>
                </div>

            ";
        // line 40
        $this->loadTemplate("PageBundle:Template:flashMsg.html.twig", "PageBundle:User:userPanel.html.twig", 40)->display($context);
        // line 41
        echo "            <div style=\"margin-top: 20px\">
                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("user_postForm");
        echo "\" class=\"btn btn-raised btn-success btn-lg \" role=\"button\" ><span class=\"glyphicon glyphicon-plus-sign\"></span>&nbsp;&nbsp; Dodaj film</a>
            </div>
            <hr/>
            <h4>Moje filmy</h4>
            <table class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tytuł video</th>
                    <th>Kategoria</th>
                    <th>Data dodania</th>
                    <th>Akcja</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 57
        $context["counter"] = 0;
        // line 58
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 59
            echo "                    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
            // line 60
            echo "                    <tr>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "category", array()), "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createDate", array())), "html", null, true);
            echo "</td>
                        <td><a class=\"btn btn-primary btn-sm\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_postForm", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-edit\"></span></a>

                            ";
            // line 68
            echo "                            ";
            // line 69
            echo "
                            ";
            // line 71
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "                    <td colspan=\"5\"><i>Brak elementów do wyświetlenia.</i></td>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </tbody>
            </table>
            <div style=\"float: right\">";
        // line 77
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "PageBundle:Pagination:pagination.html.twig");
        echo "</div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:User:userPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 77,  186 => 75,  179 => 73,  173 => 71,  170 => 69,  168 => 68,  163 => 65,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  144 => 60,  141 => 59,  135 => 58,  133 => 57,  115 => 42,  112 => 41,  110 => 40,  103 => 36,  99 => 35,  91 => 29,  88 => 28,  74 => 17,  71 => 16,  65 => 13,  62 => 12,  56 => 9,  53 => 8,  46 => 6,  43 => 5,  36 => 3,  33 => 2,  11 => 1,);
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
/* {% block JavaScripts %}*/
/*     {{ parent()}}*/
/*     <script>*/
/*         $(document).ready(function(){*/
/*             $("#add-button").click(function(){*/
/*                 $("#add-link-search").toggle('slow');*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block pageContainer %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/* */
/* */
/*                 <div class="">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li role="presentation" class="active"><a href="{{ path('user_userPanel') }}">Moje video</a></li>*/
/*                         <li role="presentation"> <a href="{{ path('user_userLinks') }}">Moje linki</a></li>*/
/*                    </ul>*/
/*                 </div>*/
/* */
/*             {% include 'PageBundle:Template:flashMsg.html.twig' %}*/
/*             <div style="margin-top: 20px">*/
/*                 <a href="{{ path('user_postForm') }}" class="btn btn-raised btn-success btn-lg " role="button" ><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp; Dodaj film</a>*/
/*             </div>*/
/*             <hr/>*/
/*             <h4>Moje filmy</h4>*/
/*             <table class="table table-bordered table-striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>#</th>*/
/*                     <th>Tytuł video</th>*/
/*                     <th>Kategoria</th>*/
/*                     <th>Data dodania</th>*/
/*                     <th>Akcja</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% set counter = 0 %}*/
/*                 {% for post in pagination %}*/
/*                     {% set counter = counter + 1 %}*/
/*                     <tr>*/
/*                         <td>{{ counter }}</td>*/
/*                         <td>{{ post.title }}</td>*/
/*                         <td>{{ post.category.name }}</td>*/
/*                         <td>{{ post.createDate | date }}</td>*/
/*                         <td><a class="btn btn-primary btn-sm" href="{{ path('user_postForm', {'id': post.id}) }}" role="button"><span class="glyphicon glyphicon-edit"></span></a>*/
/* */
/*                             {#{% set tokenName = csrfProvider.generateCsrfToken(deleteTokenName|format(post.id)) %}#}*/
/*                             {#{% set deleteUrl = path('user_videoDelete', {'id': post.id, 'token': tokenName}) %}#}*/
/* */
/*                             {#<a class="btn btn-danger btn-sm" href="{{ path('deleteUrl') }}" data-confirmAction="" role="button"><span class="glyphicon glyphicon-trash"></span></a></td>#}*/
/*                     </tr>*/
/*                 {% else %}*/
/*                     <td colspan="5"><i>Brak elementów do wyświetlenia.</i></td>*/
/*                   {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <div style="float: right">{{ knp_pagination_render(pagination, 'PageBundle:Pagination:pagination.html.twig' ) }}</div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
