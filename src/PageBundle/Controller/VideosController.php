<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use PageBundle\Entity\Comment;
use PageBundle\Form\Type\CommentType;


class VideosController extends Controller
{
    protected $itemsLimit=24;
    /**
     * @Route(
     *     "/{page}",
     *     name = "page_index",
     *     defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     *
     * )
     * @Template("PageBundle:Videos:videoslist.html.twig")
     */
    public function indexAction($page)
    {
        $pagination = $this->getPaginatedVideos(array(
            'status' => 'published',
            'orderBy' => 'p.publishedDate',
            'orderDir' => 'DESC',
        ), $page);



        return array(
            'pagination' => $pagination,
            'listTitle' => 'Najnowsze',
        );
    }
    /**
     * @Route(
     *     "wyszukiwanie/{page}",
     *     name = "page_search",
     *     defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     *
     * )
     * @Template("PageBundle:Videos:videoslist.html.twig")
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request, $page)
    {
        $searchParam = $request->query->get('search');

        $pagination = $this->getPaginatedVideos (array(
            'status' => 'published',
            'orderBy' => 'p.publishedDate',
            'orderDir' => 'DESC',
            'search' => $searchParam
        ), $page);

        return array(
            'pagination' => $pagination,
            'listTitle' => sprintf('Wyniki wyszukiwania frazy "%s"', $searchParam),
            'searchParam' => $searchParam
        );
    }

    /**
     * @Route("/{slug}",
     *      name = "page_video"
     * )
     * @Template()
     */
    public function videoAction(\Symfony\Component\HttpFoundation\Request $request,$slug){
        $PostRepo = $this->getDoctrine()->getRepository('PageBundle:Video');

        $Post = $PostRepo->getPublishedVideo($slug);

        if(null === $Post){
            throw $this->createNotFoundException('Video nie zostało odnalezione.');
        }

        if(null !== $this->getUser()){

            $Comment = new Comment();
            $Comment->setAuthor($this->getUser() )
                ->setPost($Post);

            $commentForm = $this->createForm(CommentType::class, $Comment);
            if($request->isMethod('POST')){
                $commentForm->handleRequest($request);

                if($commentForm->isValid()){
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($Comment);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('success', 'Odnośnik dodany!');

                    $redirectUrl = $this->generateUrl('page_video', array(
                        'slug' => $Post->getSlug()
                    ));

                    return $this->redirect($redirectUrl);
                }
            }


        }

//        if(preg_match('http(?:s?):\/\/(?:www\.)?youtu(?:be\.com\/watch\?v=|\.be\/)([\w\-\_]*)(&(amp;)?‌​[\w\?‌​=]*)?', $Post->) && $Post->getIframeAble() != null ){
//            $youtube_iframe_able = true;
//        }

//        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
//            $csrfProvider = $this->get('form.csrf_provider');
//        }

        return array(
            'video' => $Post,
            'commentForm'=> isset($commentForm) ? $commentForm->createView() : null,
            'IframeAble' => isset($youtube_iframe_able) ? $youtube_iframe_able: null,
        );
    }
    /**
     * @Route(
     *     "kategoria/{slug}/{page}",
     *     name = "page_category",
     *     defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     *
     * )
     * @Template("PageBundle:Videos:videoslist.html.twig")
     */
    public function categoryAction($slug, $page){
        $pagination = $this->getPaginatedVideos(array(
            'status' => 'published',
            'orderBy' => 'p.publishedDate',
            'orderDir' => 'DESC',
            'categorySlug' => $slug
        ), $page);

        $CategoryRepo = $this->getDoctrine()->getRepository('PageBundle:Category');
        $Category = $CategoryRepo -> findOneBySlug($slug);


        return array(
            'pagination' => $pagination,
            'listTitle' => sprintf('Kategoria: %s', $Category->getName())
        );
    }




    /**
     * @Route(
     *     "tag/{slug}/{page}",
     *     name = "page_tag",
     *     defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     *
     * )
     * @Template("PageBundle:Videos:videoslist.html.twig")
     */
    public function tagAction($slug, $page){

        $pagination = $this->getPaginatedVideos(array(
            'status' => 'published',
            'orderBy' => 'p.publishedDate',
            'orderDir' => 'DESC',
            'tagSlug' => $slug
        ), $page);

        $TagRepo = $this->getDoctrine()->getRepository('PageBundle:Tag');
        $Tag = $TagRepo -> findOneBySlug($slug);



        return array(
            'pagination' => $pagination,
            'listTitle' => sprintf('Tag: %s', $Tag->getName())
        );

    }
//
//    /**
//     * @Route(
//     *      "/post/comment/delete/{commentId}/{token}",
//     *      name = "page_deleteComment"
//     * )
//     */
//    public function deleteCommentAction($commentId, $token) {
//
//        if(!$this->get('security.context')->isGranted('ROLE_ADMIN')){
//            throw $this->createAccessDeniedException('Nie masz uprawnień do tego zadania!');
//        }
//
//        $validToken = sprintf('delCom%d', $commentId);
//        if(!$this->get('form.csrf_provider')->isCsrfTokenValid($validToken, $token)){
//            throw $this->createAccessDeniedException('Błędy token akcji.');
//        }
//
//        $Comment = $this->getDoctrine()
//            ->getRepository('AirBlogBundle:Comment')
//            ->find($commentId);
//
//        if(null == $Comment){
//            throw $this->createNotFoundException('Nie znaleziono takiego komentarza');
//        }
//
//        $em = $this->getDoctrine()->getManager();
//        $em->remove($Comment);
//        $em->flush();
//
//        return new \Symfony\Component\HttpFoundation\JsonResponse(array(
//            'status' => 'ok',
//            'message' => 'Wiadomość została usunięta'
//        ));
//    }


    protected function getPaginatedVideos(array $params = array(), $page){
        $PostRepo = $this->getDoctrine()->getRepository('PageBundle:Video');
        $qb = $PostRepo->getQueryBuilder($params);
        $paginator = $this -> get('knp_paginator');
        $pagination = $paginator->paginate($qb, $page, $this->itemsLimit);

        return $pagination;
    }

}
