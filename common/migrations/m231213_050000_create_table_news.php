<?php

/**
 * Table for News
 */
class m231213_050000_create_table_news extends \yii\db\Migration
{
    public function up()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->bigPrimaryKey(),
            'name' => $this->text()->null()->defaultValue(null),
            'url' => $this->text()->null()->defaultValue(null),
            'date_public' => $this->date()->null()->defaultValue(null),
            'image' => $this->text()->null()->defaultValue(null),
            'imgdescr' => $this->text()->null()->defaultValue(null),
            'annotation' => $this->text()->null()->defaultValue(null),
            'content' => $this->text()->null()->defaultValue(null),
            'created_at' => $this->timestamp()->null()->defaultValue(null),
            'created_by' => $this->text()->null()->defaultValue(null),
            'updated_at' => $this->timestamp()->null()->defaultValue(null),
            'updated_by' => $this->text()->null()->defaultValue(null),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%news}}');
    }
}
