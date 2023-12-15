<?php
namespace common\models\faker;

use Faker\UniqueGenerator;
use common\models\User;

/**
 * Fake data generator for User
 * @method static \common\models\User makeOne($attributes = [], ?UniqueGenerator $uniqueFaker = null);
 * @method static \common\models\User saveOne($attributes = [], ?UniqueGenerator $uniqueFaker = null);
 * @method static \common\models\User[] make(int $number, $commonAttributes = [], ?UniqueGenerator $uniqueFaker = null)
 * @method static \common\models\User[] save(int $number, $commonAttributes = [], ?UniqueGenerator $uniqueFaker = null)
 */
class UserFaker extends BaseModelFaker
{

    /**
     * @param array|callable $attributes
     * @return \common\models\User|\yii\db\ActiveRecord
     * @example
     *  $model = (new PostFaker())->generateModels(['author_id' => 1]);
     *  $model = (new PostFaker())->generateModels(function($model, $faker, $uniqueFaker) {
     *            $model->scenario = 'create';
     *            $model->author_id = 1;
     *            return $model;
     *  });
    **/
    public function generateModel($attributes = [])
    {
        $faker = $this->faker;
        $uniqueFaker = $this->uniqueFaker;
        $model = new User();
        //$model->id = $uniqueFaker->numberBetween(0, 1000000);
        $model->username = $faker->userName;
        $model->email = $faker->safeEmail;
        $model->password_hash = $faker->password;
        $model->auth_key = $faker->sentence;
        $model->unconfirmed_email = $faker->safeEmail;
        $model->registration_ip = $faker->sentence;
        $model->flags = $faker->numberBetween(0, 1000000);
        $model->confirmed_at = $faker->unixTime;
        $model->blocked_at = $faker->unixTime;
        $model->updated_at = $faker->unixTime;
        $model->created_at = $faker->unixTime;
        $model->last_login_at = $faker->numberBetween(0, 1000000);
        $model->last_login_ip = $faker->userName;
        $model->auth_tf_key = $faker->sentence;
        $model->auth_tf_enabled = $faker->boolean;
        $model->auth_tf_type = $faker->sentence;
        $model->auth_tf_mobile_phone = $faker->e164PhoneNumber;
        $model->password_changed_at = $faker->unixTime;
        $model->gdpr_consent = $faker->boolean;
        $model->gdpr_consent_date = $faker->unixTime;
        $model->gdpr_deleted = $faker->boolean;
        $model->access_token = $faker->sha256;
        if (!is_callable($attributes)) {
            $model->setAttributes($attributes, false);
        } else {
            $model = $attributes($model, $faker, $uniqueFaker);
        }
        return $model;
    }
}
