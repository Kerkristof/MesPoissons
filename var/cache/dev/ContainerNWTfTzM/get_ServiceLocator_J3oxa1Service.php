<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.j3oxa1_' shared service.

return $this->privates['.service_locator.j3oxa1_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'site_repo' => ['privates', 'App\\Repository\\SiteRepository', 'getSiteRepositoryService.php', true],
], [
    'site_repo' => 'App\\Repository\\SiteRepository',
]);