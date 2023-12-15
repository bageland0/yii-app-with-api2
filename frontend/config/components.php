<?php

/**
 * component configuration overrides for the frontend application.
 */

return [
    'request' => [
        'cookieValidationKey' => file_get_contents(__DIR__ . '/cookie-validation.key'),
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'enableStrictParsing' => true,
        'showScriptName' => false,
        'rules' => require(__DIR__ . '/url-rules.php'),
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => yii\log\FileTarget::class,
                'levels' => ['error', 'warning'],
                'logFile' => '@logs/frontend-app.error.log',
                'except' => [
                    'yii\web\HttpException*',
                ],
            ],
            [
                'class' => yii\log\FileTarget::class,
                'levels' => ['error', 'warning'],
                'logFile' => '@logs/frontend-http.error.log',
                'categories' => [
                    'yii\web\HttpException*',
                ],
            ],
            [
                'class' => yii\log\FileTarget::class,
                'levels' => ['info'],
                'logFile' => '@logs/frontend-app.info.log',
                'logVars' => [],
                'except' => [
                    'yii\db\*',
                ],
            ],
        ],
    ],

    'user' => [
        'identityClass' => 'common\models\User',
        'enableAutoLogin' => true,
        'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
    ],
];
