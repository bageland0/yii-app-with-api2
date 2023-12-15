<?php

namespace frontend\modules\news\models\base;

/**
 *
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $date_public
 * @property string $image
 * @property string $imgdescr
 * @property string $annotation
 * @property string $content
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 *
 */
abstract class News extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function rules()
    {
        return [
            'trim' => [['name', 'url', 'date_public', 'image', 'imgdescr', 'annotation', 'content', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'trim'],
            'name_string' => [['name'], 'string'],
            'url_string' => [['url'], 'string'],
            'url_url' => [['url'], 'string'],
            'date_public_date' => [['date_public'], 'date'],
            'image_string' => [['image'], 'string'],
            'imgdescr_string' => [['imgdescr'], 'string'],
            'annotation_string' => [['annotation'], 'string'],
            'content_string' => [['content'], 'string'],
            'created_at_datetime' => [['created_at'], 'datetime'],
            'created_by_string' => [['created_by'], 'string'],
            'updated_at_datetime' => [['updated_at'], 'datetime'],
            'updated_by_string' => [['updated_by'], 'string'],
        ];
    }
}
