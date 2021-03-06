<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.tFhFDso' shared service.

return $this->privates['.service_locator.tFhFDso'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'prise' => ['privates', '.errored..service_locator.tFhFDso.App\\Entity\\Prise', NULL, 'Cannot autowire service ".service_locator.tFhFDso": it references class "App\\Entity\\Prise" but no such service exists.'],
    'repo' => ['privates', 'App\\Repository\\PriseRepository', 'getPriseRepositoryService.php', true],
], [
    'manager' => '?',
    'prise' => 'App\\Entity\\Prise',
    'repo' => 'App\\Repository\\PriseRepository',
]);
