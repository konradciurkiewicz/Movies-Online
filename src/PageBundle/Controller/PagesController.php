<?php

namespace PageBundle\Controller;

use PageBundle\Form\Type\RememberPasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use PageBundle\Form\Type\LoginType;
use PageBundle\Form\Type\RegisterUserType;
use Symfony\Component\Form\FormError;
use PageBundle\Exception\UserException;
use PageBundle\Entity\User;


class PagesController extends Controller
{
    /**
     * @Route("/informacje",
     *      name = "page_info"
     * )
     * @Template()
     */
    public function infoAction()
    {
        return array();
    }

    /**
     * @Route("/regulamin",
     *      name = "page_rules"
     * )
     * @Template()
     */
    public function rulesAction(){
        return array();

    }
    /**
     * @Route("/logowanie",
     *      name= "page_login"
     * )
     * @Template()
     */
    public function loginAction(Request $Request)
    {
        $Session = $this->get('session');

        if ($Request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $loginError = $Request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            $loginError = $Session->remove(Security::AUTHENTICATION_ERROR);
        }
        if(isset($loginError)){
            $this->get('session')->getFlashBag()->add('error', $loginError->getMessage());
        }

        $loginForm = $this->createForm(LoginType::class, array(
            'username' => $Session->get(Security::LAST_USERNAME)
        ));

        //Remember password
        $rememberPasswdForm = $this->createForm(RememberPasswordType::class);

        if($Request->isMethod('POST')){
            $rememberPasswdForm->handleRequest($Request);

            if($rememberPasswdForm->isValid()){
                try {

                    $userEmail = $rememberPasswdForm->get('email')->getData();

                    $userManager = $this->get('user_manager');
                    $userManager->sendResetPasswordLink($userEmail);

                    $this->get('session')->getFlashBag()->add('success', 'Instrukcje resetowania hasła zostały wysłane na adres e-mail.');
                    return $this->redirect($this->generateUrl('page_login'));

                } catch (UserException $exc) {
                    $error = new FormError($exc->getMessage());
                    $rememberPasswdForm->get('email')->addError($error);
                }


            }

        }




        // Register User Form
        $User = new User();
        $registerUserForm = $this->createForm(RegisterUserType::class, $User);

        if($Request->isMethod('POST')){
            $registerUserForm->handleRequest($Request);

            if($registerUserForm->isValid()){

                try{

                    $userManager = $this->get('user_manager');
                    $userManager->registerUser($User);

                    $this->get('session')->getFlashBag()->add('success', 'Konto zostało utworzone. Na Twoją skrzynkę pocztową została wysłana wiadomość aktywacyjna.');

                    return $this->redirect($this->generateUrl('page_login'));

                } catch (UserException $ex) {
                    $this->get('session')->getFlashBag()->add('error', $ex->getMessage());
                }

            }
        }

        return array(
            'loginForm' => $loginForm->createView(),
            'rememberPasswdForm' => $rememberPasswdForm->createView(),
            'registerUserForm' => $registerUserForm->createView(),

        );
    }
    /**
     * @Route("/reset-password/{actionToken}",
     *      name= "user_resetPassword"
     * )
     */
    public function resetPasswordAction($actionToken)
    {
        try{

            $userManager= $this->get('user_manager');
            $userManager->resetPassword($actionToken);

            $this->get('session')->getFlashbag()->add('success', 'Na twój adres e-mail zostało zysłane nowe hasło.');

        }
        catch(Exception $ex){
            $this->get('session')->getFlashbag()->add('error', $ex->getMessage());

        }
        return $this->redirect($this->generateUrl('page_login'));

    }

    /**
     * @Route(
     *      "/account-activation/{actionToken}",
     *      name = "user_activateAccount"
     * )
     */
    public function activateAccountAction($actionToken)
    {
        try {

            $userManager = $this->get('user_manager');
            $userManager->activateAccount($actionToken);

            $this->get('session')->getFlashBag()->add('success', 'Twoje konto zostało aktywowane!');

        } catch (UserException $ex) {
            $this->get('session')->getFlashBag()->add('error', $ex->getMessage());
        }

        return $this->redirect($this->generateUrl('page_login'));
    }

}
