<?php
namespace common\models\faker;

use Faker\UniqueGenerator;
use common\models\News;

/**
 * Fake data generator for News
 * @method static \common\models\News makeOne($attributes = [], ?UniqueGenerator $uniqueFaker = null);
 * @method static \common\models\News saveOne($attributes = [], ?UniqueGenerator $uniqueFaker = null);
 * @method static \common\models\News[] make(int $number, $commonAttributes = [], ?UniqueGenerator $uniqueFaker = null)
 * @method static \common\models\News[] save(int $number, $commonAttributes = [], ?UniqueGenerator $uniqueFaker = null)
 */
class NewsFaker extends BaseModelFaker
{

    /**
     * @param array|callable $attributes
     * @return \common\models\News|\yii\db\ActiveRecord
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
        $model = new News();
        //$model->id = $uniqueFaker->numberBetween(0, 1000000);
        $model->name = $faker->sentence;
        $model->url = $faker->url;
        $model->date_public = $faker->dateTimeThisCentury->format('Y-m-d');
        $model->image = $faker->sentence;
        $model->imgdescr = $faker->paragraphs(6, true);
        $model->annotation = $faker->sentence;
        $model->content = $faker->paragraphs(6, true);
        $model->created_at = $faker->dateTimeThisYear('now', 'UTC')->format(DATE_ATOM);
        $model->created_by = $faker->sentence;
        $model->updated_at = $faker->dateTimeThisYear('now', 'UTC')->format(DATE_ATOM);
        $model->updated_by = $faker->sentence;
        if (!is_callable($attributes)) {
            $model->setAttributes($attributes, false);
        } else {
            $model = $attributes($model, $faker, $uniqueFaker);
        }
        return $model;
    }
}
