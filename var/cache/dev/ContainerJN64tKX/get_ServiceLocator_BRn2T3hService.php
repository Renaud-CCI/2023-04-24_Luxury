<?php

namespace ContainerJN64tKX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BRn2T3hService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BRn2T3h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BRn2T3h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'applicationRepository' => ['privates', 'App\\Repository\\ApplicationRepository', 'getApplicationRepositoryService', true],
            'candidateRepository' => ['privates', 'App\\Repository\\CandidateRepository', 'getCandidateRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'jobOffer' => ['privates', '.errored..service_locator.BRn2T3h.App\\Entity\\JobOffer', NULL, 'Cannot autowire service ".service_locator.BRn2T3h": it needs an instance of "App\\Entity\\JobOffer" but this type has been excluded in "config/services.yaml".'],
            'jobOfferRepository' => ['privates', 'App\\Repository\\JobOfferRepository', 'getJobOfferRepositoryService', true],
            'tokenStorage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'applicationRepository' => 'App\\Repository\\ApplicationRepository',
            'candidateRepository' => 'App\\Repository\\CandidateRepository',
            'entityManager' => '?',
            'jobOffer' => 'App\\Entity\\JobOffer',
            'jobOfferRepository' => 'App\\Repository\\JobOfferRepository',
            'tokenStorage' => '?',
        ]);
    }
}
