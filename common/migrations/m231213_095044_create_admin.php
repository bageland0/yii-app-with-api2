<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m231213_095044_create_admin
 */
class m231213_095044_create_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        // create a role named "administrator"
        $administratorRole = $auth->createRole('admin');
        $administratorRole->description = 'Administrator';
        $auth->add($administratorRole);

        // create permission for certain tasks
        $permission = $auth->createPermission('administration');
        $auth->add($permission);

        // let administrators do user management
        $auth->addChild($administratorRole, $auth->getPermission('administration'));

        // create user "admin" with password "verysecret"
        $user = new User([
            'email' => "admin@mail.com", 
            'username' => "admin", 
            'password' => "admin" 
        ]);
        $user->confirmed_at = time();
        $user->save();

        // assign role to our admin-user
        $auth->assign($administratorRole, $user->id);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231213_095044_create_admin cannot be reverted.\n";

        return false;
    }
    */
}
