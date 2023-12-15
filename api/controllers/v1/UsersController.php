<?php

namespace api\controllers\v1;

use Da\User\Filter\AccessRuleFilter;
use api\controllers\v1\base\UserController as BaseUserController;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBearerAuth;

class UsersController extends BaseUserController
{
    public function behaviors()
    {
        return [
            'bearerAuth' => [
                'class' => HttpBearerAuth::class,
            ],
            'access' => [
                'class' => AccessControl::class,
                'ruleConfig' => [
                    'class' => AccessRuleFilter::class,
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
        ];
    }

    public function checkAccess($action, $model = null, $params = [])
    {
        //TODO implement checkAccess
    }

}
