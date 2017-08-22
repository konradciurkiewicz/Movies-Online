<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/log')) {
            // _check_path
            if ($pathinfo === '/login-check') {
                return array('_route' => '_check_path');
            }

            // _logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_logout');
            }

        }

        // user_accountSettings
        if ($pathinfo === '/account-settings') {
            return array (  '_controller' => 'PageBundle\\Controller\\UserController::accountSettingsAction',  '_route' => 'user_accountSettings',);
        }

        if (0 === strpos($pathinfo, '/user-panel')) {
            // user_userPanel
            if (0 === strpos($pathinfo, '/user-panel/video') && preg_match('#^/user\\-panel/video(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_userPanel')), array (  'page' => 1,  '_controller' => 'PageBundle\\Controller\\UserController::userPanelAction',));
            }

            // user_userLinks
            if (0 === strpos($pathinfo, '/user-panel/link') && preg_match('#^/user\\-panel/link(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_userLinks')), array (  'page' => 1,  '_controller' => 'PageBundle\\Controller\\UserController::userLinksAction',));
            }

        }

        // user_postForm
        if (0 === strpos($pathinfo, '/form') && preg_match('#^/form(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_postForm')), array (  'id' => NULL,  '_controller' => 'PageBundle\\Controller\\UserController::formAction',));
        }

        // page_deleteComment
        if (0 === strpos($pathinfo, '/post/comment/delete') && preg_match('#^/post/comment/delete/(?P<commentId>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'page_deleteComment');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_deleteComment')), array (  '_controller' => 'PageBundle\\Controller\\UserController::deleteCommentAction',));
        }

        // page_info
        if ($pathinfo === '/informacje') {
            return array (  '_controller' => 'PageBundle\\Controller\\PagesController::infoAction',  '_route' => 'page_info',);
        }

        // page_rules
        if ($pathinfo === '/regulamin') {
            return array (  '_controller' => 'PageBundle\\Controller\\PagesController::rulesAction',  '_route' => 'page_rules',);
        }

        // page_login
        if ($pathinfo === '/logowanie') {
            return array (  '_controller' => 'PageBundle\\Controller\\PagesController::loginAction',  '_route' => 'page_login',);
        }

        // user_resetPassword
        if (0 === strpos($pathinfo, '/reset-password') && preg_match('#^/reset\\-password/(?P<actionToken>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_resetPassword')), array (  '_controller' => 'PageBundle\\Controller\\PagesController::resetPasswordAction',));
        }

        // user_activateAccount
        if (0 === strpos($pathinfo, '/account-activation') && preg_match('#^/account\\-activation/(?P<actionToken>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_activateAccount')), array (  '_controller' => 'PageBundle\\Controller\\PagesController::activateAccountAction',));
        }

        // page_index
        if (preg_match('#^/(?P<page>\\d+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_index')), array (  'page' => 1,  '_controller' => 'PageBundle\\Controller\\VideosController::indexAction',));
        }

        // page_search
        if (0 === strpos($pathinfo, '/wyszukiwanie') && preg_match('#^/wyszukiwanie(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_search')), array (  'page' => 1,  '_controller' => 'PageBundle\\Controller\\VideosController::searchAction',));
        }

        // page_video
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_video')), array (  '_controller' => 'PageBundle\\Controller\\VideosController::videoAction',));
        }

        // page_category
        if (0 === strpos($pathinfo, '/kategoria') && preg_match('#^/kategoria/(?P<slug>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_category')), array (  'page' => 1,  '_controller' => 'PageBundle\\Controller\\VideosController::categoryAction',));
        }

        // page_tag
        if (0 === strpos($pathinfo, '/tag') && preg_match('#^/tag/(?P<slug>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_tag')), array (  'page' => 1,  '_controller' => 'PageBundle\\Controller\\VideosController::tagAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
