<?php

declare(strict_types = 1);

use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/configs/path_constants.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

    return require CONFIG_PATH . '/container/container.php';
// $containerBuilder = new DI\ContainerBuilder();
// $containerBuilder->addDefinitions(__DIR__ . DIRECTORY_SEPARATOR . 'container_bindings.php');
// $container = $containerBuilder->build();

// return $container;
