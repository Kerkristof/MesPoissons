<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.F8zsBrd' shared service.

return $this->privates['.service_locator.F8zsBrd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'espece' => ['privates', '.errored..service_locator.F8zsBrd.App\\Entity\\Especes', NULL, 'Cannot autowire service ".service_locator.F8zsBrd": it references class "App\\Entity\\Especes" but no such service exists.'],
    'loveRepo' => ['privates', 'App\\Repository\\LoveRepository', 'getLoveRepositoryService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
], [
    'espece' => 'App\\Entity\\Especes',
    'loveRepo' => 'App\\Repository\\LoveRepository',
    'manager' => '?',
]);