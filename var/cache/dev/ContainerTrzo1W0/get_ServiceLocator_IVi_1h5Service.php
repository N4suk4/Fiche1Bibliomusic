<?php

namespace ContainerTrzo1W0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IVi_1h5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IVi.1h5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IVi.1h5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'artist' => ['privates', '.errored..service_locator.IVi.1h5.App\\Entity\\Artist', NULL, 'Cannot autowire service ".service_locator.IVi.1h5": it needs an instance of "App\\Entity\\Artist" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'artist' => 'App\\Entity\\Artist',
            'entityManager' => '?',
        ]);
    }
}
