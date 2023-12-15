<?php

namespace common\models\base;

use Da\User\Model\User as DaUser;
use yii\db\ActiveRecord;


/**
 *
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property string $unconfirmed_email
 * @property string $registration_ip
 * @property int $flags
 * @property int $confirmed_at
 * @property int $blocked_at
 * @property int $updated_at
 * @property int $created_at
 * @property int $last_login_at
 * @property string $last_login_ip
 * @property string $auth_tf_key
 * @property bool $auth_tf_enabled
 * @property string $auth_tf_type
 * @property string $auth_tf_mobile_phone
 * @property int $password_changed_at
 * @property bool $gdpr_consent
 * @property int $gdpr_consent_date
 * @property bool $gdpr_deleted
 * @property string $access_token
 *
 */
abstract class User extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%user}}';
    }

    public function rules()
    {
        return [
            'trim' => [['username', 'email', 'password_hash', 'auth_key', 'unconfirmed_email', 'registration_ip', 'last_login_ip', 'auth_tf_key', 'auth_tf_type', 'auth_tf_mobile_phone', 'access_token'], 'trim'],
            'username_string' => [['username'], 'string'],
            'email_string' => [['email'], 'string'],
            'email_email' => [['email'], 'email'],
            'password_hash_string' => [['password_hash'], 'string'],
            'auth_key_string' => [['auth_key'], 'string'],
            'unconfirmed_email_string' => [['unconfirmed_email'], 'string'],
            'unconfirmed_email_email' => [['unconfirmed_email'], 'email'],
            'registration_ip_string' => [['registration_ip'], 'string'],
            'flags_integer' => [['flags'], 'integer'],
            'confirmed_at_integer' => [['confirmed_at'], 'integer'],
            'blocked_at_integer' => [['blocked_at'], 'integer'],
            'updated_at_integer' => [['updated_at'], 'integer'],
            'created_at_integer' => [['created_at'], 'integer'],
            'last_login_at_integer' => [['last_login_at'], 'integer'],
            'last_login_ip_string' => [['last_login_ip'], 'string'],
            'auth_tf_key_string' => [['auth_tf_key'], 'string'],
            'auth_tf_enabled_boolean' => [['auth_tf_enabled'], 'boolean'],
            'auth_tf_type_string' => [['auth_tf_type'], 'string'],
            'auth_tf_mobile_phone_string' => [['auth_tf_mobile_phone'], 'string'],
            'password_changed_at_integer' => [['password_changed_at'], 'integer'],
            'gdpr_consent_boolean' => [['gdpr_consent'], 'boolean'],
            'gdpr_consent_date_integer' => [['gdpr_consent_date'], 'integer'],
            'gdpr_deleted_boolean' => [['gdpr_deleted'], 'boolean'],
            'access_token_string' => [['access_token'], 'string'],
        ];
    }
}
