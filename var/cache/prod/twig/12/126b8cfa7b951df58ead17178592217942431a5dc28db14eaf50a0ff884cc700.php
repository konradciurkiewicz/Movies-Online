<?php

/* PageBundle:Pages:info.html.twig */
class __TwigTemplate_232fd48d2889b1424ce4f786958b0fbdcba857c23bad05d0809366a2d199e1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PageBundle:base.html.twig", "PageBundle:Pages:info.html.twig", 1);
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
        echo "       Informacje  ";
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

    // line 21
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"panel panel-default\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"panel-heading\">
        <h4> Informacje </h4>
    </div>
    <div class=\"panel-body\">

        <div class=\"list-group\">
            <h5>Nawigacja</h5>
            <a href=\"#art1\" class=\"list-group-item\">Czym jest Gdzie-oglądać?</a>
            <a href=\"#art2\" class=\"list-group-item\">Czy każdy może dodawać własne filmy i linki?</a>
            <a href=\"#art3\" class=\"list-group-item\">Jak dodawać nowe filmy i linki?</a>
            <a href=\"#art4\" class=\"list-group-item\">Jak zarabiać na dodawaniu linków do filmów?</a>
        </div>

        <article id=\"art1\">
            <h5>Czym jest Gdzie-oglądać?</h5>
            <p>
                Gdzie-oglądać to serwis na którym zamieszczane są odnośniki do filmów, seriali, anime i bajek online. Wszystkie odnośniki zamieszczone na stronie prowadzą do filmów które możesz oglądać za darmo, bez rejestracji.

            </p>
        </article>

        <article id=\"art2\">
            <h5>Czy każdy może dodawać własne filmy i linki?</h5>
            <p>
                Tak, jest to główna cecha portalu. Każdy zarejestrowany użytkownik może dodawać własne filmy i dodawać do nich linki. Co więcej użytkownicy mogą dodwać odnośniki do filmów umieszczonych na stronie przez innych użytkowników. Zapobiega to tworzeniu wielu kopii tych samych filmów, a co za tym idzie ułatwieniu korzystania z serwisu.
            </p>
        </article>
        <article id=\"art3\">
            <h5>Jak dodawać nowe filmy i linki?</h5>
            <p>
                Dodawanie nowego viedeo jest bardzo proszte. Proces ten przebiega w kilku krokach.
               <ol>
                  <li>Rejestracja i logowanie. Aby dodać film musisz być zarejestrowany i zalogowany w portalu.</li>
                  <li>Otwórz menu użytkownika klikając w swoją nazwę użytkownika i klikakąc w <strong>Panel użytkownika-> Dodaj film</strong></li>
                  <li>Uzupełnij wszystkie wymagane pola formularza i zatwierdź. Gotowe! Twój opis filmu jest już udostępniony na stronie. Teraz możesz dodawać do niego linki.</li>
               </ol>
                Dodawanie nowych linków do danego filmu jest również bardzo proste. Po prostu znajdź film do którego link chcesz dodać i kliknij <strong>Dodaj link do filmu</strong>. Następnie uzupełnij formularz i zatwierdź. Twój link został dodany na stronie.

            </p>
        </article>
        <article id=\"art4\">
            <h5>Jak zarabiać na dodawaniu linków do filmów?</h5>

            <div class=\"alert alert-warning\" role=\"alert\">Uwaga! Serwis Gdzie-ogadac.pl w żaden sposób nie wynagradza użytkowników za udostępnianie filmów! Wszystkie sposoby zarobku na stronie realizuje się z wykorzystaniem zewnętrznych firm!</div>
            <p>
                Serwis Gdzie oglądać zezwala na udostępnianie przez użytkowników linków referencyjnych utworzonych przy pomocy takich stron jak np. adf.ly. Jedynym wymaganiem jest to, aby po przejściu przez wyświetloną reklame użytkonik mógł przejść bezpośrednio do filmu.
            </p>
        </article>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Pages:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  81 => 21,  73 => 16,  70 => 15,  65 => 13,  62 => 12,  56 => 9,  53 => 8,  46 => 6,  43 => 5,  36 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "PageBundle:base.html.twig" %}*/
/* {% block pageTitle %}*/
/*        Informacje  {{ parent()}}*/
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
/* {% block pageContainer %}*/
/* <div class="panel panel-default" xmlns="http://www.w3.org/1999/html">*/
/*     <div class="panel-heading">*/
/*         <h4> Informacje </h4>*/
/*     </div>*/
/*     <div class="panel-body">*/
/* */
/*         <div class="list-group">*/
/*             <h5>Nawigacja</h5>*/
/*             <a href="#art1" class="list-group-item">Czym jest Gdzie-oglądać?</a>*/
/*             <a href="#art2" class="list-group-item">Czy każdy może dodawać własne filmy i linki?</a>*/
/*             <a href="#art3" class="list-group-item">Jak dodawać nowe filmy i linki?</a>*/
/*             <a href="#art4" class="list-group-item">Jak zarabiać na dodawaniu linków do filmów?</a>*/
/*         </div>*/
/* */
/*         <article id="art1">*/
/*             <h5>Czym jest Gdzie-oglądać?</h5>*/
/*             <p>*/
/*                 Gdzie-oglądać to serwis na którym zamieszczane są odnośniki do filmów, seriali, anime i bajek online. Wszystkie odnośniki zamieszczone na stronie prowadzą do filmów które możesz oglądać za darmo, bez rejestracji.*/
/* */
/*             </p>*/
/*         </article>*/
/* */
/*         <article id="art2">*/
/*             <h5>Czy każdy może dodawać własne filmy i linki?</h5>*/
/*             <p>*/
/*                 Tak, jest to główna cecha portalu. Każdy zarejestrowany użytkownik może dodawać własne filmy i dodawać do nich linki. Co więcej użytkownicy mogą dodwać odnośniki do filmów umieszczonych na stronie przez innych użytkowników. Zapobiega to tworzeniu wielu kopii tych samych filmów, a co za tym idzie ułatwieniu korzystania z serwisu.*/
/*             </p>*/
/*         </article>*/
/*         <article id="art3">*/
/*             <h5>Jak dodawać nowe filmy i linki?</h5>*/
/*             <p>*/
/*                 Dodawanie nowego viedeo jest bardzo proszte. Proces ten przebiega w kilku krokach.*/
/*                <ol>*/
/*                   <li>Rejestracja i logowanie. Aby dodać film musisz być zarejestrowany i zalogowany w portalu.</li>*/
/*                   <li>Otwórz menu użytkownika klikając w swoją nazwę użytkownika i klikakąc w <strong>Panel użytkownika-> Dodaj film</strong></li>*/
/*                   <li>Uzupełnij wszystkie wymagane pola formularza i zatwierdź. Gotowe! Twój opis filmu jest już udostępniony na stronie. Teraz możesz dodawać do niego linki.</li>*/
/*                </ol>*/
/*                 Dodawanie nowych linków do danego filmu jest również bardzo proste. Po prostu znajdź film do którego link chcesz dodać i kliknij <strong>Dodaj link do filmu</strong>. Następnie uzupełnij formularz i zatwierdź. Twój link został dodany na stronie.*/
/* */
/*             </p>*/
/*         </article>*/
/*         <article id="art4">*/
/*             <h5>Jak zarabiać na dodawaniu linków do filmów?</h5>*/
/* */
/*             <div class="alert alert-warning" role="alert">Uwaga! Serwis Gdzie-ogadac.pl w żaden sposób nie wynagradza użytkowników za udostępnianie filmów! Wszystkie sposoby zarobku na stronie realizuje się z wykorzystaniem zewnętrznych firm!</div>*/
/*             <p>*/
/*                 Serwis Gdzie oglądać zezwala na udostępnianie przez użytkowników linków referencyjnych utworzonych przy pomocy takich stron jak np. adf.ly. Jedynym wymaganiem jest to, aby po przejściu przez wyświetloną reklame użytkonik mógł przejść bezpośrednio do filmu.*/
/*             </p>*/
/*         </article>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
