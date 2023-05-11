<?php

namespace ContainerJN64tKX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WFfuDTGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WFfuDTG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WFfuDTG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'admin' => ['privates', '.errored..service_locator.WFfuDTG.App\\Entity\\Admin', NULL, 'Cannot autowire service ".service_locator.WFfuDTG": it needs an instance of "App\\Entity\\Admin" but this type has been excluded in "config/services.yaml".'],
            'adminRepository' => ['privates', 'App\\Repository\\AdminRepository', 'getAdminRepositoryService', true],
        ], [
            'admin' => 'App\\Entity\\Admin',
            'adminRepository' => 'App\\Repository\\AdminRepository',
        ]);
    }
}
