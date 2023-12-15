<?php

namespace api\controllers\v1;

use Yii;
use Da\User\Filter\AccessRuleFilter;
use common\models\User;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    public function actionLogin()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $username = Yii::$app->request->post('username');
        $password = Yii::$app->request->post('password');

        $user = User::findOne(['username' => $username]);

        if ($user && $user->validatePassword($password)) {
            $token = Yii::$app->security->generateRandomString();
            $user->access_token = $token;
            $user->save();

            return ['access_token' => $token];
        } else {
            Yii::$app->response->statusCode = 401; // Unauthorized
            return ['error' => 'Invalid credentials'];
        }
    }

    public function actionSignup()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $username = Yii::$app->request->post('username');
        $email = Yii::$app->request->post('email');
        $password = Yii::$app->request->post('password');

        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;;

        $token = Yii::$app->security->generateRandomString();
        $user->access_token = $token;
        $user->save();

        return ['message' => 'user signed up', 'access_token' => $token];
    }

}

