<?php

namespace ContainerPNeWMwn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobOfferTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\JobOfferType' shared autowired service.
     *
     * @return \App\Form\JobOfferType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/JobOfferType.php';

        return $container->privates['App\\Form\\JobOfferType'] = new \App\Form\JobOfferType(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
