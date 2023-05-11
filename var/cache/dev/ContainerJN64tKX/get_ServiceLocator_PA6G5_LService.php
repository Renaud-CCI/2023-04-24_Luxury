<?php

namespace ContainerJN64tKX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PA6G5_LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pA6G5.l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pA6G5.l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'jobOfferRepository' => ['privates', 'App\\Repository\\JobOfferRepository', 'getJobOfferRepositoryService', true],
        ], [
            'clientRepository' => 'App\\Repository\\ClientRepository',
            'jobOfferRepository' => 'App\\Repository\\JobOfferRepository',
        ]);
    }
}
