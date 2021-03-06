<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_check_path' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login-check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_accountSettings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\UserController::accountSettingsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account-settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_userPanel' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'PageBundle\\Controller\\UserController::userPanelAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/user-panel/video',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_userLinks' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'PageBundle\\Controller\\UserController::userLinksAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/user-panel/link',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_postForm' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'PageBundle\\Controller\\UserController::formAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_deleteComment' => array (  0 =>   array (    0 => 'commentId',  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\UserController::deleteCommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    2 =>     array (      0 => 'text',      1 => '/post/comment/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_info' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\PagesController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/informacje',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_rules' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\PagesController::rulesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/regulamin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\PagesController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logowanie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_resetPassword' => array (  0 =>   array (    0 => 'actionToken',  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\PagesController::resetPasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'actionToken',    ),    1 =>     array (      0 => 'text',      1 => '/reset-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_activateAccount' => array (  0 =>   array (    0 => 'actionToken',  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\PagesController::activateAccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'actionToken',    ),    1 =>     array (      0 => 'text',      1 => '/account-activation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'PageBundle\\Controller\\VideosController::indexAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_search' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'PageBundle\\Controller\\VideosController::searchAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/wyszukiwanie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_video' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\VideosController::videoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_category' => array (  0 =>   array (    0 => 'slug',    1 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'PageBundle\\Controller\\VideosController::categoryAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/kategoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_tag' => array (  0 =>   array (    0 => 'slug',    1 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'PageBundle\\Controller\\VideosController::tagAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/tag',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
