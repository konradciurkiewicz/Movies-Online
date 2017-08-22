<?php

namespace PageBundle\Twig\Extension;

class PageExtension extends \Twig_Extension
{
    /**
     * @var \Doctrine\Bundle\DoctrineBundle\Registry
     */
    private $doctrine;
    /**
     * @var \Twig_Environment
     */
    private $enviroment;


    /**
     * PageExtension constructor.
     * @param \Doctrine\Bundle\DoctrineBundle\Registry $doctrine
     */
    public function __construct(\Doctrine\Bundle\DoctrineBundle\Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function initRuntime(\Twig_Environment $environment){
        $this->enviroment = $environment;
    }

    public function getName() {
        return 'page_extension';
    }
    public function getFunction(){
        return array(
            new \Twig_SimpleFunction('print_categories_list', array($this, 'printCategoriesList')),
            new \Twig_SimpleFunction('print_recent_commented', array($this, 'recentCommented'), array('is_safe' => array('html')))
        );
    }
    public function printCategoriesList(){
        $CategoryRepo = $this->doctrine->getRepository('PageBundle:Category');
        $categoriesList = $CategoryRepo->findAll();

        return $this->enviroment->render('PageBundle:Template:categoriesList.html.twig', array(
           'categoriesList'  => $categoriesList
        ));
    }
    public function recentCommented($limit = 8){

        $PostRepo = $this->doctrine->getRepository('PageBundle:Video');

        $postsList = $PostRepo->getRecentCommented($limit);

        return $this->environment->render('PageBundle:Template:recentCommented.html.twig', array(
            'videosList' => $postsList
        ));
    }


}