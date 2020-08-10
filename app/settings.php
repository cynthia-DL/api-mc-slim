<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Logger;

return function (ContainerBuilder $containerBuilder) {
    // Global Settings Object
    $containerBuilder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true, // Should be set to false in production
            'logger' => [
                'name' => 'slim-app',
                'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
                'level' => Logger::DEBUG,
            ],
            "db" => [
                'driver' => 'mysql',
                'host' => 'sql2.freesqldatabase.com:3306',
                'database' => 'sql2359651',
                'username' => 'sql2359651',
                'password' => 'rL8!pC9*',
                'collation' => 'utf8_general_ci',
                'charset' => 'utf8',
                'prefix' => ''
            ],
        ],
    ]);
};
