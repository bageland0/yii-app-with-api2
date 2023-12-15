<?php

namespace api\modules\news\controllers\v1;

use Da\User\Filter\AccessRuleFilter;
use api\modules\news\controllers\v1\base\NewsController as apiNewsController;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBearerAuth;

class NewsController extends apiNewsController
{

    public function behaviors()
    {
        return [
            'bearerAuth' => [
                'class' => HttpBearerAuth::class,
            ],
            'access' => [
                'class' => AccessControl::class,
                'except' => ['index', 'view'],
                'ruleConfig' => [
                    'class' => AccessRuleFilter::class,
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
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

