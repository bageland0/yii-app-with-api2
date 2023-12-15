<?php

use Da\User\Module;

/**
 * Main configuration file for the frontend application.
 */

return [
    'id' => 'frontend',

    'basePath' => dirname(__DIR__),
   	'vendorPath' => dirname(__DIR__, 2) . '/vendor',
    'runtimePath' => dirname(__DIR__, 2) . '/runtime/frontend',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'controllerNamespace' => 'frontend\controllers',

    'bootstrap' => ['log'],

    'params' => require(__DIR__ . '/../../config/params.php'),
    'modules' => [
        'news' => [
            'class' => 'frontend\modules\news\Module',
        ],

        'user' => [
            'class' => Module::class,
        ],
    ],
];
