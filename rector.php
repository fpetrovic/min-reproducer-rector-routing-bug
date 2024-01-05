<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\Symfony\Bridge\Symfony\Routing\SymfonyRoutesProvider;
use Rector\Symfony\Configs\Rector\ClassMethod\AddRouteAnnotationRector;
use Rector\Symfony\Contract\Bridge\Symfony\Routing\SymfonyRoutesProviderInterface;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->symfonyContainerPhp(__DIR__ . '/tests/symfony-container.php');

    $rectorConfig->singleton(SymfonyRoutesProvider::class);
    $rectorConfig->alias(SymfonyRoutesProvider::class, SymfonyRoutesProviderInterface::class);

    $rectorConfig->rule(AddRouteAnnotationRector::class);
};