<?php

namespace ContainerTrzo1W0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReleaseControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fDbIRXc.App\Controller\ReleaseController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.fDbIRXc'] ?? $container->load('get_ServiceLocator_FDbIRXcService'));

        if (isset($container->privates['.service_locator.fDbIRXc.App\\Controller\\ReleaseController::edit()'])) {
            return $container->privates['.service_locator.fDbIRXc.App\\Controller\\ReleaseController::edit()'];
        }

        return $container->privates['.service_locator.fDbIRXc.App\\Controller\\ReleaseController::edit()'] = $a->withContext('App\\Controller\\ReleaseController::edit()', $container);
    }
}
