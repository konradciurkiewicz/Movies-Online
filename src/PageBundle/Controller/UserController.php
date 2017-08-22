<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use PageBundle\Form\Type\AccountSettingsType;
use PageBundle\Form\Type\ChangePasswordType;

use PageBundle\Exception\UserException;

use PageBundle\Entity\Video;
use PageBundle\Form\Type\VideoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class UserController extends Controller
{
    protected $itemsLimit=12;
    private $delete_token_name = "delete-post-%d";

    /**
     * @Route(
     *      "/account-settings",
     *      name = "user_accountSettings"
     * )
     *
     * @Template()
     */
    public function accountSettingsAction(Request $Request)
    {
        $User = $this->getUser();


        // Account Settings Form
        $accountSettingsForm = $this->createForm(AccountSettingsType::class, $User);

        if($Request->isMethod('POST') && $Request->request->has('accountSettings')){
            $accountSettingsForm->handleRequest($Request);

            if($accountSettingsForm->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($User);
                $em->flush();

                $this->get('session')->getFlashBag()->add('success', 'Twoje dane zostały zmienione!');
                return $this->redirect($this->generateUrl('user_accountSettings'));
            }else{
                $this->get('session')->getFlashBag()->add('error', 'Popraw błędy formularza!');
            }
        }


//        // Change Password
//        $changePasswdForm = $this->createForm(new ChangePasswordType(), $User);
//
//        if($Request->isMethod('POST') && $Request->request->has('changePassword')){
//            $changePasswdForm->handleRequest($Request);
//
//            if($changePasswdForm->isValid()){
//
//                try {
//                    $userManager = $this->get('user_manager');
//                    $userManager->changePassword($User);
//
//                    $this->get('session')->getFlashBag()->add('success', 'Twoje hasło zostało zmienione!');
//                    return $this->redirect($this->generateUrl('user_accountSettings'));
//
//                } catch (UserException $ex) {
//                    $this->get('session')->getFlashBag()->add('error', $ex->getMessage());
//                }
//
//            }else{
//                $this->get('session')->getFlashBag()->add('error', 'Popraw błędy formularza2!');
//            }
//        }


        return array(
            'user' => $User,
            'accountSettingsForm' => $accountSettingsForm->createView(),
//            'changePasswdForm' => $changePasswdForm->createView()
        );
    }
    /**
     * @Route(
     *      "/user-panel/video/{page}",
     *      name = "user_userPanel",
     *      defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     * )
     *
     * @Template()
     */
    public function userPanelAction(Request $Request, $page)
    {
        $pagination = $this->getPaginatedVideos(array(
            'orderBy' => 'p.publishedDate',
            'orderDir' => 'DESC',
            'author_id' => $this->getUser()
        ), $page);


        return array(
            'pagination' => $pagination,
            'deleteTokenName' => $this->delete_token_name,
//            'csrfProvider' => $this->get('form.csrf_provider')
        );

    }
    /**
     * @Route(
     *      "/user-panel/link/{page}",
     *      name = "user_userLinks",
     *      defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     * )
     *
     * @Template()
     */
    public function userLinksAction(Request $Request, $page)
    {
        $pagination = $this->getPaginatedLinks(array(
            'author' => $this->getUser(),
            'orderBy' => 'c.createDate'
        ), $page);

        return array(
            'pagination' => $pagination,
        );

    }

    /**
     * @Route(
     *      "/form/{id}",
     *      name="user_postForm",
     *      requirements={"id"="\d+"},
     *      defaults={"id"=NULL}
     *
     * )
     *
     *
     * @Template()
     */
    public function formAction(Request $Request, $id=NULL) {


        if(null == $id){
            $Post = new Video();
            $Post->setAuthor($this->getUser());
            $Post->setCreateDate(new \DateTime());
            $newPostForm = TRUE;
        }
        else{
            $Post = $this->getDoctrine()->getRepository('PageBundle:Video')->find($id);
            if ( $Post->getAuthor() == $this->getUser() ) {

            }
            else{
                throw new \Exception('Nie masz prawa dostępu do edycji tego video!');
            }
        }

        $form = $this->createForm(VideoType::class, $Post);

        $form->handleRequest($Request);
        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($Post);
            $em->flush();

//            $file = $form -> get('thumbnailFile')->getData();
//            if(NULL !== $file){
//                $newName = sprintf('file_%d.%s', $ran)
//            }

            $message = (isset($newPostForm)) ? 'Poprawnie dodano nowe video!': 'Video zostało poprawione!';
            $this->get('session')->getFlashBag()->add('success', $message);


            return $this->redirect($this->generateUrl('user_postForm', array(
                'id' => $Post->getId()
            )));
        }

        return array(
            'currPage' => 'posts',
            'form' => $form->createView(),
            'video' => $Post
        );
    }

//    /**
//     * @Route(
//     *      "/delete/{id}/{token}",
//     *      name="user_viedoDelete",
//     *      requirements={"id"="\d+"}
//     * )
//     *
//     * @Template()
//     */
//    public function deleteAction($id, $token) {
//
//        $tokenName = sprintf($this->delete_token_name, $id);
//        $csrfProvider = $this->get('form.csrf_provider');
//
//        if(!$csrfProvider->isCsrfTokenValid($tokenName, $token)){
//            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token akcji!');
//
//        }else{
//
//            $Post = $this->getDoctrine()->getRepository('PageBundle:Video')->find($id);
//            $em = $this->getDoctrine()->getManager();
//            $em->remove($Post);
//            $em->flush();
//
//            $this->get('session')->getFlashBag()->add('success', 'Poprawnie usunięto post wraz ze wszystkimi komentarzami');
//        }
//
//        return $this->redirect($this->generateUrl('admin_postsList'));
//    }
    /**
     * @Route(
     *      "/post/comment/delete/{commentId}/",
     *      name = "page_deleteComment"
     * )
     */

    public function deleteCommentAction($commentId ) {

        $Comment = $this->getDoctrine()
            ->getRepository('PageBundle:Comment')
            ->find($commentId);


        if ( $Comment->getAuthor() == $this->getUser() ) {

            if(null == $Comment){
                throw $this->createNotFoundException('Nie znaleziono takiego komentarza');
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($Comment);
            $em->flush();

            return new \Symfony\Component\HttpFoundation\JsonResponse(array(
                'status' => 'ok',
                'message' => 'Link został usunięty',
            ));

        }
        else{
            throw new \Exception('Nie masz prawa dostępu do edycji tego komentarza!');
        }


    }



    protected function getPaginatedVideos(array $params = array(), $page){
        $PostRepo = $this->getDoctrine()->getRepository('PageBundle:Video');
        $qb = $PostRepo->getQueryBuilder($params);
        $paginator = $this -> get('knp_paginator');
        $pagination = $paginator->paginate($qb, $page, $this->itemsLimit);

        return $pagination;
    }
    protected function getPaginatedLinks(array $params = array(), $page){
        $PostRepo = $this->getDoctrine()->getRepository('PageBundle:Comment');
        $qb = $PostRepo->getQueryBuilder($params);
        $paginator = $this -> get('knp_paginator');
        $pagination = $paginator->paginate($qb, $page, $this->itemsLimit);

        return $pagination;
    }
}
