<?php

namespace ContainerPNeWMwn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGuardAuthenticatorHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Symfony\Component\Security\Guard\GuardAuthenticatorHandler' shared autowired service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/FlashBagAwareSessionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Session.php';

        return $container->services['Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(new \Symfony\Component\Security\Http\Authenticator\Token\PostAuthenticationTokenFactory(), ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), new \Symfony\Component\HttpFoundation\Session\Session());
    }
}
